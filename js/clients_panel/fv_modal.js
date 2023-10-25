const fv_edit_btn = document.querySelector('.clients_panel_fv_content__right .fv__container--button');
const fv_modal = document.querySelector('.modal_container.fv');
const fv_close = document.querySelector('.modal_container.fv .modal_container--close-icon');

fv_edit_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    fv_modal.classList.toggle('show');
    document.body.classList.toggle('active-modal');
});

fv_close.addEventListener('click', () => {
    fv_modal.classList.remove('show');
    document.body.classList.remove('active-modal');
});