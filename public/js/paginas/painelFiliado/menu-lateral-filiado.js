/*!
* Start Bootstrap - Simple Sidebar v6.0.5 (https://startbootstrap.com/template/simple-sidebar)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
*/
window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');    
    
    if (sidebarToggle) {
        setClassBodyInMobile(sidebarToggle)
        // Uncomment Below to persist sidebar toggle between refreshes
        if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
           document.body.classList.toggle('sb-sidenav-toggled');
           var sideBarIsHidden = document.body.classList.contains('sb-sidenav-toggled')
           toggleBar(sidebarToggle, sideBarIsHidden)
        }
        
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
            var sideBarIsHidden = document.body.classList.contains('sb-sidenav-toggled')
            toggleBar(sidebarToggle, sideBarIsHidden)
        });
        var sideBarIsHidden = document.body.classList.contains('sb-sidenav-toggled')
        toggleBar(sidebarToggle, sideBarIsHidden)
    }

    function setClassBodyInMobile(element) {

        if( navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            ){
                element.classList.add('is-mobile')
            }
    }

    function setIcon(element, removeClassSuffix, addClassSuffix) {
        element.classList.remove("pe-7s-angle-" + removeClassSuffix );
        element.classList.add("pe-7s-angle-" + addClassSuffix);
    }

    function toggleBar(element, sideBarIsHidden){
        var  isMobile = element.classList.contains('is-mobile')

        if (sideBarIsHidden) {            
            if (isMobile) {
                return setIcon(element, 'right', 'left')
            }

            return setIcon(element,'left', 'right')
        }

        if (isMobile) {
            return setIcon(element,'left', 'right')
        }
        return setIcon(element, 'right', 'left')
    }
    
});

