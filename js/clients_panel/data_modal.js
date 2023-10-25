const my_data_edit_data_btn = document.querySelector('.clients_panel_my_data_content__right .data_password__container .data__container--button');
const my_data_modal = document.querySelector('.modal_container.data');
const my_data_close = document.querySelector('.modal_container.data .modal_container--close-icon');

my_data_edit_data_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    my_data_modal.classList.toggle('show');
    document.body.classList.toggle('active-modal');
});

my_data_close.addEventListener('click', () => {
    my_data_modal.classList.remove('show');
    document.body.classList.remove('active-modal');
});