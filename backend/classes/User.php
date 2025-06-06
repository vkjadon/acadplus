<?php
class User {
    public $fullName;
    public $gender;
    public $email;
    public $password;
    public $usertype;
    public $rollnoempid;
    public $department;
    private $conn;

    public function __construct($db, $data) {
    $this->conn = $db;

    $this->fullName    = isset($data['fullName']) ? $data['fullName'] : '';
    $this->gender      = isset($data['gender']) ? $data['gender'] : '';
    $this->email       = isset($data['email']) ? $data['email'] : '';
    $this->password    = isset($data['password']) ? $data['password'] : '';
    $this->usertype    = isset($data['usertype']) ? $data['usertype'] : '';
    $this->rollnoempid = isset($data['rollnoempid']) ? $data['rollnoempid'] : '';
    $this->department  = isset($data['department']) ? $data['department'] : '';
    }


    public function register() {
        $query = "INSERT INTO userdetails (fullname, gender, email, password, usertype, rollnoempid, department)
                  VALUES (:fullname, :gender, :email, :password, :usertype, :rollnoempid, :department)";
        $stmt = $this->conn->prepare($query);

        $this->password = password_hash($this->password, PASSWORD_BCRYPT);

        $stmt->bindParam(":fullname", $this->fullName);
        $stmt->bindParam(":gender", $this->gender);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":usertype", $this->usertype);
        $stmt->bindParam(":rollnoempid", $this->rollnoempid);
        $stmt->bindParam(":department", $this->department);

        return $stmt->execute();
    }

    public function login() {
        $query = "SELECT * FROM userdetails WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($this->password, $row['password'])) {
                return $row;
            }
        }

        return false;
    }
}
?>
