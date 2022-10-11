const menu = document.querySelector('#menu');
const sidebar = document.querySelector('#sidebar');
const overlay = document.querySelector('#overlay');
const close = document.querySelector('#close');

menu.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-open');
    overlay.classList.toggle('hidden');
})

overlay.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-open');
    overlay.classList.toggle('hidden');
})

close.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-open');
    overlay.classList.toggle('hidden');
})