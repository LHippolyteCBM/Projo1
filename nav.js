let navBloc = document.querySelector('nav');
let navInitPos = navBloc.offsetTop;
let backMove = document.querySelector('.back-move');
let navBlocHei = navBloc.offsetHeight;
let cloneMenu = navBloc.cloneNode(true);
let backDirection = '';
let tempDir = 0;


backMove.style.width = '100%';





window.addEventListener('scroll', menuTrans)


function menuTrans() {

    let navBlocBottom = navBloc.offsetTop + navBloc.offsetHeight;

    tempDir = parseInt(backMove.style.height);
    console.log(backDirection)

    if (parseInt(backMove.style.height) > navBlocHei && scrollY > navBlocBottom) {
        backMove.style.height = navBlocHei;
        backMove.appendChild(cloneMenu);


    } else if (scrollY > navBloc.offsetTop) {
        backMove.style.height = ((window.scrollY - navBloc.offsetTop) / 2) + 'px';

        if (parseInt(backMove.style.height) > tempDir) {
            backDirection = 'DOWN';
        } else {
            backDirection = 'UP';
        }
        tempDir = parseInt(backMove.style.height);

    } else if (scrollY < navBloc.offsetTop) {
        backMove.style.height = 0;
    }

    if (backDirection === 'UP') {
        cloneMenu.parentElement.removeChild(cloneMenu);
    }

}









