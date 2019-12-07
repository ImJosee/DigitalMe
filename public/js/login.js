let email = document.getElementById('email');
let password = document.getElementById('password');
let button = document.querySelector('button[type=submit]');

let form = new FormData

button.addEventListener('click', event => {
    event.preventDefault();

    form.append('email', email.value);
    form.append('password', password.value);    
    form.append('_token', document.querySelector('meta[name="csrf-token"]').content)
    let pError = document.getElementById("emailError");
    console.log(pError);
    
    fetch(window.location.protocol+'//'+window.location.host+'/'+'api/login', {
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
            pError.style.display = 'block';
            pError.style.color = 'red';
            pError.innerHTML = "El correo electronico o contrasena son incorrectos."
            pError.style.margin = '0px';
            pError.style.marginTop = '10px';
        }
    })
    .catch(error => {
        console.log(error);
    })
})