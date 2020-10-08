let navig = document.querySelector('nav');
let backMove = document.querySelector('.back-move');
let dirNav = '';
let dirStat = 0;
let parsedUrl = new URL(window.location.href),
    pathName = parsedUrl.pathname;

console.log(pathName);
console.log(parsedUrl)


backMove.style.width = navig.offsetWidth + 'px';
let bmV = navig.offsetHeight;


window.addEventListener('scroll', menuTrans)


function menuTrans() {
    backMove.style.setProperty('--plop', (window.scrollY / 2) / 100);
    if (parseInt(backMove.style.height) > bmV) {
        backMove.style.height = bmV;
    } else if ((window.scrollY / 3) < bmV) {
        backMove.style.height = (window.scrollY / 3) + 'px';
    }

}
