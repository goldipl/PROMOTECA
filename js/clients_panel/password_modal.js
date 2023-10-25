const edit_password_btn = document.querySelector('.clients_panel_my_data_content__right .data_password__container .password__container--button');
const password_modal = document.querySelector('.modal_container.password');
const password_close = document.querySelector('.modal_container.password .modal_container--close-icon');

edit_password_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    password_modal.classList.toggle('show');
    document.body.classList.toggle('active-modal');
});

password_close.addEventListener('click', () => {
    password_modal.classList.remove('show');
    document.body.classList.remove('active-modal');
});