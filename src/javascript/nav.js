var TurgleNav = document.getElementById("turgle-nav");
var navBar = document.getElementById("navbarNav");
var closeNav = document.getElementById("close-nav");



    TurgleNav.addEventListener("click", function(){
        
        navBar.style.display = "flex";
        navBar.style.flexDirection = "row"
        navBar.style.display = "flex"
        navBar.style.zIndex = "2";
        closeNav.style.display = "block"
        TurgleNav.style.display = "none"
    })
        
closeNav.addEventListener("click", function(){
        
    navBar.style.display = "none"
    closeNav.style.display = "none"
    TurgleNav.style.display = "block"
})