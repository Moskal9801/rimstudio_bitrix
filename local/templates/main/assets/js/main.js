function moreInfo(){
    let moreInfo = document.querySelector('.medium__more');
    let moreButton = document.querySelector('.medium__more-info');
    moreInfo.classList.toggle('medium__more-active')
    moreButton.classList.toggle('medium__more-info-active')
}
function morePortfolio(el){
    let elem = document.getElementById('popup__'+el.id);
    elem.classList.add('popup-active');
}

function closePopup(el){
    let elem = document.getElementById('popup__'+el.id);
    elem.classList.remove('popup-active');
}

window.onload = function() {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        navigation: {
            nextEl: ".medium-button-next",
            prevEl: ".medium-button-prev",
        },
    });
}


