console.log('Javascript is working.');


function fillUser() {
    $list = document.getElementById('customer-list').value;
    window.location.href = 'http://localhost/projecten/mvc_excellent_taste/reserveringen/create/' + $list;
}


// Navigation mobile toggler without using bootstrap
var navToggle = document.getElementsByClassName('navbar-toggler');
var navMenu = document.getElementById('navbarNavDropdown');
var isToggle = false;

function toggleNav() {

    if(isToggle) {
        navMenu.classList.remove('show');
        isToggle = !isToggle;
    } else {
        navMenu.classList.add('show');
        isToggle = !isToggle;
    }
};

navToggle[0].addEventListener('click', toggleNav);
