const expand_producers_btn = document.querySelector('.category_filters-slot .filters-btns .expand-filters-btn.producer');
const expand_producers_txt = document.querySelector('.category_filters-slot .filters-btns .expand-filters-btn.producer p');
const producers_filters_list = document.querySelector('.category_filters-slot--list.producer');
const expand_colors_btn = document.querySelector('.category_filters-slot .filters-btns .expand-filters-btn.color');
const expand_colors_txt = document.querySelector('.category_filters-slot .filters-btns .expand-filters-btn.color p');
const producers_colors_list = document.querySelector('.category_filters-slot--list.color');

expand_producers_btn.addEventListener('click', () => {
    producers_filters_list.classList.toggle('active');
    expand_producers_txt.innerHTML = ""
});

expand_colors_btn.addEventListener('click', () => {
    producers_colors_list.classList.toggle('active');
    expand_colors_txt.innerHTML = ""
});