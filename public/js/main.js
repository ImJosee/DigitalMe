function redirectTo(path) {
    window.location.replace('http://localhost:8000/'+path);
}

function redirectToLogout() {
    window.location.href = 'logout';
}

let profileButtons = document.querySelectorAll('button.profile-button');
Array.from(profileButtons).forEach(function(element) {
    element.addEventListener('click', function(event) {
        let button = event.target;
        event.preventDefault();
        if(button.hasAttribute('id')) {
            switch(button.id) {
                case 'edit-profile-button': {
                    redirectTo('profile/'+button.dataset.userid+'/edit');
                    break;
                }
                case 'follow-button': {
                    document.getElementById('follow-form').submit();
                    break;
                }
                case 'login-button': {
                    redirectTo('login');
                    break;
                }
            }
        }
    })
})

let password = document.getElementById('password');
let passwordConfirm = document.getElementById('password-confirm');

if(password != null && passwordConfirm != null) {
    password.addEventListener('keyup', function(event) {
        event.preventDefault()
        if(password.value.length < 8) {
            password.style.border = '1px solid red';
        } else if(password.value.length < 12){
            password.style.border = '1px solid #FFE333';
        } else {
            password.style.border = '1px solid green';
        }
        if(passwordConfirm.value != password.value) {
            passwordConfirm.style.border = '1px solid red';
        }
    })
    
    passwordConfirm.addEventListener('keyup', function(event) {
        event.preventDefault()
        if(passwordConfirm.value.length >= 8 && passwordConfirm.value == password.value && passwordConfirm.value != '') {
            passwordConfirm.style.border = '1px solid green';
        } else {
            passwordConfirm.style.border = '1px solid red';
        }
    })
}

