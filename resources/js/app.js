require('./bootstrap');
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
window.addEventListener("load", function () {
    if (document.querySelector(".open-menu") !== null) {
        document.querySelector(".open-menu").addEventListener('click', ({currentTarget}) => {
            document.querySelector(".open-menu").classList.toggle('active');
            document.querySelector(".info-menu").classList.toggle('active');
        });
    }
    const closeModals = document.querySelectorAll('.close-modal');
    closeModals.forEach((closeModal) => {
        closeModal.addEventListener('click', ({currentTarget}) => {
            document.querySelector(".error-modal").classList.remove('active');
        });
    });
});

