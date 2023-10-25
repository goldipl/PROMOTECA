const expand_btn_trader = document.querySelector('.products_card_description_trader .desc_container .desc_title_box--expand');
const opinions_box_trader = document.querySelector('.products_card_description_trader .desc_title_box_content.grey .opinions_container_box');

expand_btn_trader.addEventListener('click', () => {
    opinions_box_trader.classList.toggle('hide');
    if (opinions_box_trader.classList.contains('hide')) {
        expand_btn_trader.innerHTML = "Rozwiń";
    } else {
        expand_btn_trader.innerHTML = "Zwiń";
    }
});