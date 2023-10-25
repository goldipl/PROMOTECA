const addresses_edit_btn = document.querySelector('.clients_panel_addresses_content__right .addresses__container--button');
const addresses_modal = document.querySelector('.modal_container.addresses');
const addresses_close = document.querySelector('.modal_container.addresses .modal_container--close-icon');

addresses_edit_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    addresses_modal.classList.toggle('show');
    document.body.classList.toggle('active-modal');
});

addresses_close.addEventListener('click', () => {
    addresses_modal.classList.remove('show');
    document.body.classList.remove('active-modal');
});