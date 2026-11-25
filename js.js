// Visar ett meddelande när kontaktformuläret skickas
const contactForm = document.querySelector(".contact__form");

if (contactForm) {
    contactForm.addEventListener("submit", function () {
        alert("Thank you for your message!");
    });
}