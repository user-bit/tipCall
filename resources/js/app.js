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

    if (document.querySelector(".open-bottom") !== null) {
        document.querySelector(".open-bottom").addEventListener('click', ({currentTarget}) => {
            document.querySelector(".open-bottom").classList.toggle('active');
            document.querySelector(".content-bottom").classList.toggle('active');
        });
    }
    addTime();
    closeItem();
    const itemDay = document.querySelectorAll('.item-day');
    itemDay.forEach((itemDayItem) => {
        itemDayItem.addEventListener('click', ({currentTarget}) => {
            event.stopPropagation();
            const itemDay = document.querySelectorAll('.item-day');
            itemDay.forEach((itemDayItem) => {
                itemDayItem.classList.remove('active');
            })
            currentTarget.classList.add('active');
            const content = currentTarget.querySelector('.item-content').innerHTML;
            document.querySelector(".result-content-all").innerHTML = content;
            if (innerWidth > 1024) (
                addTime()
            )
            closeItem();
        });
    });
});
function addTime() {
    const addAvl = document.querySelectorAll('.add-avl');
    addAvl.forEach((addAvlItem) => {
        addAvlItem.addEventListener('click', ({currentTarget}) => {
            event.stopPropagation();
            const contentItem =  currentTarget.closest('.result-content').querySelector(".content-avl-item").innerHTML;
            currentTarget.closest('.result-content').querySelector(".content-avl").insertAdjacentHTML('beforeend', contentItem);
            closeItem();
        });
    });
}
function closeItem () {
    const addAvlClose = document.querySelectorAll('.close-svg');
    addAvlClose.forEach((addAvlCloseItem) => {
        addAvlCloseItem.addEventListener('click', ({currentTarget}) => {
            currentTarget.closest('.content-avl-i').remove();
        });
    });
}
