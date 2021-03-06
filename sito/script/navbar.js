function disableScroll() {
    document.body.style.overflow = 'hidden';
    document.body.style.height = '100%';
}

// call this to Enable
function enableScroll() {
    document.body.style.overflow = 'auto';
}

document.addEventListener('DOMContentLoaded', function (event) {
    let hamburger = document.getElementById('hamburger');
    let sidenav = document.getElementById('main-nav');
    // If JS is enabled, it will un-expand the hamburger
    hamburger.setAttribute('aria-expanded', 'false');
    hamburger.onclick = function () {
        if (this.getAttribute('aria-expanded') == 'false') {
            this.setAttribute('aria-expanded', 'true');
            sidenav.style.display = 'block';
            disableScroll();
            hamburger.classList.toggle('open');
        } else {
            this.setAttribute('aria-expanded', 'false');
            sidenav.style.display = 'none';
            enableScroll();
            hamburger.classList.toggle('open');
        }
    }
});