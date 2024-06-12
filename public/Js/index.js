//   Slide-show

const listImage = document.querySelector('.list-images');
const imgs = document.getElementsByTagName('img');
const btnLeft = document.querySelector('.btn-left');
const btnRight = document.querySelector('.btn-right');
const indexItems = document.querySelectorAll('.index-item');
let current = 0;
let width = imgs[0].offsetWidth; // Lấy width một lần để sử dụng lại

const handleChangeSlide = () => {
    if (current === 3) {
        current = 0;
        listImage.style.transform = `translateX(0px)`;
    } else {
        current++;
        listImage.style.transform = `translateX(${-width * current}px)`;
    }
    
    const activeElement = document.querySelector('.active');
    if (activeElement) {
        activeElement.classList.remove('active');
    }
    
    const newIndexItem = document.querySelector('.index-item-' + current);
    if (newIndexItem) {
        newIndexItem.classList.add('active');
    }
};

let handleEventChangeSlide = setInterval(handleChangeSlide, 4000);

btnRight.addEventListener('click', () => {
    clearInterval(handleEventChangeSlide);
    handleChangeSlide();
    handleEventChangeSlide = setInterval(handleChangeSlide, 4000);
});

btnLeft.addEventListener('click', () => {
    clearInterval(handleEventChangeSlide);
    if (current === 0) {
        current = 3;
    } else {
        current--;
    }
    
    listImage.style.transform = `translateX(${-width * current}px)`;
    
    const activeElement = document.querySelector('.active');
    if (activeElement) {
        activeElement.classList.remove('active');
    }
    
    const newIndexItem = document.querySelector('.index-item-' + current);
    if (newIndexItem) {
        newIndexItem.classList.add('active');
    }
    
    handleEventChangeSlide = setInterval(handleChangeSlide, 4000);
});
