const registerForm = document.getElementById("register-form")

if (registerForm) registerForm.addEventListener("submit", async (e) => {
    e.preventDefault()

    const name = document.getElementById("name").value
    const login = document.getElementById("login").value

    const password = document.getElementById("password").value
    const password2 = document.getElementById("password2").value
    if (password !== password2) return alert("Пароли не совпадают")

    const data = await fetch("http://ambartsumyan.mentor4u.ru/api/register", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            name,
            login,
            password
        })
    })

    const result = await data.json()
    if (result.status === "error") {
        return  alert(result.message)
    }

    if (result.status === "success") {
        localStorage.setItem("account", JSON.stringify(result.data))
        location.href = "/"
    }
})