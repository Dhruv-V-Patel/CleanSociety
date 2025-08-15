const container = document.querySelector('.container1');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');
const text = document.querySelector('.text');


registerBtn.addEventListener('click', () => {
    container.classList.add('active');
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
});

const officialbtn = document.querySelector('.official-btn');
const userbtn = document.querySelector('.citizen-btn');
officialbtn.addEventListener('click', () => {
    officialbtn.classList.add('active');
    userbtn.classList.remove('active');
    registerBtn.style.visibility = 'hidden';
    text.innerHTML = 'Do You have any issues in <b>Login</b>,<br>Please contact <b><u>System Administrator</b></u>.<br> <br> <b>Contact: systemadministrator@gmail.com</b>';
    document.getElementById("name").placeholder = "Insert User ID / Email as Username";
});

userbtn.addEventListener('click', () => {
    userbtn.classList.add('active');
    officialbtn.classList.remove('active');
    registerBtn.style.visibility = 'visible';
    var val = "Don't have an account?";
    text.innerHTML = val;
    document.getElementById("name").placeholder = "Insert Registered Email Address as Username";
});
