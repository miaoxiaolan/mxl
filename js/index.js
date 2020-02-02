var getNav = document.getElementsByClassName('get-menu-nav')[0],
    closeMenu = document.getElementsByClassName('close-menu')[0],
    menuCon = document.getElementsByClassName('menu-nav')[0],
    contBlur=document.getElementsByClassName('cont-blur')[0],
    catSearch=document.getElementById('#search-input');
;

getNav.addEventListener('click', function() {

    if (!menuCon.classList.contains('active')) {

        menuCon.classList.toggle('active');
        contBlur.classList.toggle('active');
        document.body.style.cssText = 'overflow-y:hidden';

    };


});
closeMenu.addEventListener('click', function() {

    if (menuCon.classList.contains('active')) {

        menuCon.classList.toggle('active');
        contBlur.classList.toggle('active');
        document.body.style.cssText = 'overflow-y:auto';
    }
});

contBlur.addEventListener('click', function() {
    if (menuCon.classList.contains('active')) {
        menuCon.classList.toggle('active');
        contBlur.classList.toggle('active');
        document.body.style.cssText = 'overflow-y:auto';
    }

});

