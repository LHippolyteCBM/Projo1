const navItems = document.querySelectorAll('.nav-items')
// const currentLocation = window.location.href
// const pathHome = URL('./index.php')
// const pathActivites = URL('./things-to-do.php')
// const pathAccomodation = URL('./accommodation')
// const pathFindUs = URL(('./traveller.php', window.location.href))


let parsedUrl = new URL(window.location.href),
    pathName = parsedUrl.pathname;




        navItems.forEach(x => {
        if (x.innerHTML === 'HOME' && pathName === '/index.php'){
            x.style.backgroundColor = '#DEE1E4'
            x.style.color = '#333a3a'
        } else if (x.innerHTML === 'ACTIVITIES' && pathName === '/things-to-do.php'){
            x.style.backgroundColor = '#DEE1E4'
            x.style.color = '#333a3a'
        } else if (x.innerHTML === 'ACCOMODATION' && pathName === '/accommodation.php'){
            x.style.backgroundColor = '#DEE1E4)'
            x.style.color = '#333a3a'
        } else if (x.innerHTML === 'FIND US' && pathName === '/traveller.php'){
            x.style.backgroundColor = '#DEE1E4)'
            x.style.color = '#333a3a'
        } else if (x.innerHTML === 'ONLINE BOOKING' && pathName === '/booking.php'){
            x.style.backgroundColor = '#DEE1E4)'
            x.style.color = '#333a3a'
        }
    })



