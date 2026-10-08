// =========================
// MODO CLARO / OSCURO
// =========================

const themeButton = document.querySelector("#theme-toggle");

const savedTheme = localStorage.getItem("theme");

if (savedTheme === "dark") {
    document.documentElement.setAttribute("data-theme", "dark");
}

if (themeButton) {
    themeButton.addEventListener("click", () => {
        const currentTheme =
            document.documentElement.getAttribute("data-theme");

        if (currentTheme === "dark") {
            document.documentElement.removeAttribute("data-theme");
            localStorage.setItem("theme", "light");
        } else {
            document.documentElement.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
        }
    });
}


// =========================
// CONFIRMAR CIERRE DE SESIÓN
// =========================

const logoutForms = document.querySelectorAll(".logout-form");

logoutForms.forEach((form) => {
    form.addEventListener("submit", (event) => {
        const confirmed = confirm(
            "¿Seguro que deseas cerrar tu sesión?"
        );

        if (!confirmed) {
            event.preventDefault();
        }
    });
});


// =========================
// OCULTAR ALERTAS
// =========================

const alerts = document.querySelectorAll(".alert");

alerts.forEach((alert) => {
    setTimeout(() => {
        alert.style.opacity = "0";
        alert.style.transition = "opacity 0.5s ease";

        setTimeout(() => {
            alert.remove();
        }, 500);
    }, 4000);
});