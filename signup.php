<!DOCTYPE html>
<html lang="en">
<head><title>Signup</title></head>
<body>
<h2>Signup</h2>
<form onsubmit="signup(event)">
    <input type="text" name="fullname" placeholder="Full Name" required><br>
    <select name="gender"><option>male</option><option>female</option></select><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <select name="usertype"><option>student</option><option>faculty</option></select><br>
    <input type="text" name="rollnoempid" placeholder="Roll No / Emp ID" required><br>
    <select name="department">
        <option>DME</option><option>DCE</option><option>DEE</option><option>DMCE</option>
    </select><br>
    <button type="submit">Signup</button>
</form>

<script>
async function signup(event) {
    event.preventDefault();
    const form = event.target;
    const data = {
        fullname: form.fullname.value,
        gender: form.gender.value,
        email: form.email.value,
        password: form.password.value,
        usertype: form.usertype.value,
        rollnoempid: form.rollnoempid.value,
        department: form.department.value
    };

    const res = await fetch('backend/auth/register.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    });

    const result = await res.json();
    alert(result.message);
    if (result.message.includes("successfully")) window.location.href = "login.php";
}
</script>
</body>
</html>
