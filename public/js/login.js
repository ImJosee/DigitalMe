let email = document.getElementById('email');
let password = document.getElementById('password');
let button = document.querySelector('button[type=submit]');

let form = new FormData

button.addEventListener('click', event => {
    event.preventDefault();

    form.append('email', email.value);
    form.append('password', password.value);    
    form.append('_token', document.querySelector('meta[name="csrf-token"]').content)

    fetch('http://localhost:8000/api/login', {
        method: 'POST',
        body: form
    })
    .then(response => {
        return response.json();
    })
    .then(data => {
        if(data['success'] === true) {
            document.getElementById("loginForm").submit();
        } else {
            password.value = '';
            email.value = '';
        }
    })
    .catch(error => {
        console.log(error);
    })
})