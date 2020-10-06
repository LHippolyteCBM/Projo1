//const navItems = document.querySelector('.nav-items');


//navItems.addEventListener('click', () => {
//navItems.classList.toggle("focusOnclick");
//})




//active nav items ---->

const currentLocation = Location.href;
const menuItem = document.querySelectorAll('.nav-items');
    for (let i = 0; i < menuItem.length; i++){
        if(menuItem[i].href === currentLocation){
            menuItem[i].classList.toggle("active");
        }
    }