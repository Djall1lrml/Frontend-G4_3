const stform = document.querySelector('.stform');
const registerbtn = document.querySelector('.btn-reg');
const loginbtn = document.querySelector('.btn-log');
registerbtn.addEventListener('click', () => {
    stform.classList.add('active');
});
loginbtn.addEventListener('click', () => {
    stform.classList.remove('active');
});