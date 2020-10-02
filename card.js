const dropButton = document.querySelectorAll('.card-button');
const seeMore = document.querySelectorAll('.card-container-expanded');
const containerClass = document.querySelectorAll('.card-container')

for (let i = 0; i < dropButton.length; i++){
    dropButton[i].addEventListener('click', () => {
    containerClass[i].classList.toggle('card-container-expanded')
    dropButton[i].classList.toggle('card-button-expanded')
    });
}


