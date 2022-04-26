const open = document.getElementById('open');
const modal_container = document.getElementById('modal-container');
const close = document.getElementById('close');
const open2 = document.getElementById('open2');


open.addEventListener('click',() =>{
    modal_container.classList.add('show');
});

close.addEventListener('click',() =>{
    modal_container.classList.remove('show');
});
