document.addEventListener("DOMContentLoaded", function () {
  const passIn = document.getElementById("password");
  const btn = document.getElementById("togglePassword");
  btn.addEventListener("click", function () {
    const type =
      passIn.getAttribute("type") === "password" ? "text" : "password";
    passIn.setAttribute("type", type);
  });
});

async function login(event) {
  event.preventDefault();
  const form = event.target;
  const data = {
    email: form.email.value,
    password: form.password.value,
  };

  const res = await fetch("backend/auth/login", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  });

  const result = await res.json();
  alert(result.message);
  if (result.message.includes("successfully"))
    window.location.href = "dashboard";
}

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
    department: form.department.value,
  };

  const res = await fetch("backend/auth/register", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data),
  });

  const result = await res.json();
  alert(result.message);
  if (result.message.includes("successfully")) window.location.href = "login";
}
