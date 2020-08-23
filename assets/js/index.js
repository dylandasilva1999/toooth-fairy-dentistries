const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

togglePassword.addEventListener('click', (e) => {
    // Toggle On
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // Toggle Off
    this.classList.toggle('fa-eye-slash');
});

