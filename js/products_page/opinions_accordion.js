const expand_btn = document.querySelector('.products_card_description_client .desc_container .desc_title_box--expand');
const opinions_box = document.querySelector('.opinions_container_box');

expand_btn.addEventListener('click', () => {
    opinions_box.classList.toggle('hide');
    if (opinions_box.classList.contains('hide')) {
        expand_btn.innerHTML = "Rozwiń";
    } else {
        expand_btn.innerHTML = "Zwiń";
    }
});