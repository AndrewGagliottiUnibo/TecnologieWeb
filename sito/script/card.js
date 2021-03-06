$(document).ready(function () {
    cards = document.querySelectorAll('.card');

    Array.prototype.forEach.call(cards, card => {
        let down, up, link = card.querySelector('h4 a');
        card.style.cursor = 'pointer';
        card.onmousedown = () => down = +new Date();
        card.onmouseup = () => {
            up = +new Date();
            if ((up - down) < 200) {
                link.click();
            }
        }
    });
});