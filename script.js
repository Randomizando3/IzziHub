// Tudo só roda depois do DOM carregar
document.addEventListener("DOMContentLoaded", () => {
    // Scroll suave
    window.scrollToSection = function (id) {
        const el = document.getElementById(id);
        if (!el) return;
        el.scrollIntoView({ behavior: "smooth", block: "start" });
    };

    // Ano atual no footer
    const yearSpan = document.getElementById("year");
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // Navegação mobile
    const navToggle = document.querySelector(".nav-toggle");
    const navWrapper = document.querySelector(".nav-links-wrapper");

    if (navToggle && navWrapper) {
        navToggle.addEventListener("click", () => {
            navToggle.classList.toggle("open");
            navWrapper.classList.toggle("open");
        });

        // Fecha menu ao clicar em link
        navWrapper.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", () => {
                navToggle.classList.remove("open");
                navWrapper.classList.remove("open");
            });
        });
    }

    // Scroll reveal simples
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    document.querySelectorAll(".reveal").forEach(el => observer.observe(el));

    // Handler de formulário (exemplo)
    window.handleSubmit = function (e) {
        e.preventDefault();
        const feedback = document.getElementById("form-feedback");
        if (feedback) {
            feedback.style.display = "block";
        }
        // aqui você pode depois integrar com back-end, e-mail, etc.
    };
});
