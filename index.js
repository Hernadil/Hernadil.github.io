document.addEventListener("DOMContentLoaded", function() {
    // Vedd le az aktuális oldal URL-jét
    const currentUrl = window.location.href;
    
    // Szerezd meg az összes navigációs linket
    const navLinks = document.querySelectorAll('.navpoint a');
    
    // Iterálj a linkeken, és add hozzá a 'current' osztályt az aktuális oldal linkjéhez
    navLinks.forEach(link => {
        // Először távolítsd el a 'current' osztályt az összes linkről
        link.classList.remove('current');
        
        // Ha a link URL-je megegyezik az aktuális oldal URL-jével, add hozzá a 'current' osztályt
        if (link.href === currentUrl) {
            link.classList.add('current');
        }
    });
});

function toggleMenu() {
    const navLinks = document.querySelector('.navpoints');
    navLinks.classList.toggle('active');
}
function toggleback(){
    const nav = document.querySelector('.navpoints');
    
    nav.forEach(cucc => {
        cucc.classList.remove('active')
    })
}