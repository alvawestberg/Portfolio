// Visar ett meddelande när kontaktformuläret skickas
const contactForm = document.querySelector('[data-js-action="submit-contact"]');

if (contactForm) {
    contactForm.addEventListener("submit", function () {
        const message = contactForm.dataset.message;
        alert(message);
    });
}