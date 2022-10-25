const authForm = document.getElementById("auth-form")

authForm.addEventListener("submit", async (e) => {
    e.preventDefault()

    const login = document.getElementById("login").value
    const password = document.getElementById("password").value

    const user = await fetch("http://ambartsumyan.mentor4u.ru/api/auth", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            login,
            password
        })
    })

    const data = await user.json()

    if (data.status === "error") {
        alert(data.message)
    }

    if (data.status === "success") {
        localStorage.setItem("account", JSON.stringify(data.data))
        location.href = "/"
    }
})