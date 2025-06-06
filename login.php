<!DOCTYPE html>
<html lang="en">
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<form onsubmit="login(event)">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

<script>
async function login(event) {
    event.preventDefault();
    const form = event.target;
    const data = {
        email: form.email.value,
        password: form.password.value
    };

    const res = await fetch('backend/auth/login', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
    });

    const result = await res.json();
    alert(result.message);
    if (result.message.includes("successfully")) window.location.href = "dashboard";
}
</script>
</body>
</html>
