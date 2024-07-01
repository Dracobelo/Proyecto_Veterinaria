/*=============== VALIDATION ===============*/
document.addEventListener('DOMContentLoaded', () => {
    const email = document.getElementById('correo');
    const password = document.getElementById('contraseña');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    const passwordPattern = /.{8,}/;
    const closeButtons = document.querySelectorAll('.close-alert');

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.parentElement.style.display = 'none';
        });
    });

    email.addEventListener('input', () => {
        validateField(email, emailPattern, emailError);
    });

    password.addEventListener('input', () => {
        validateField(password, passwordPattern, passwordError);
    });

    function validateField(field, pattern, errorElement) {
        if (field.value.match(pattern)) {
            field.classList.add('valid');
            field.classList.remove('invalid');
            errorElement.style.opacity = '0';
            errorElement.style.pointerEvents = 'none';
            field.style.borderColor = 'var(--default-color)';
        } else {
            field.classList.add('invalid');
            field.classList.remove('valid');
            errorElement.style.opacity = '1';
            errorElement.style.pointerEvents = 'auto';
            field.style.borderColor = 'var(--error-color)';
        }

        if (field.value === '') {
            field.classList.remove('invalid');
            field.classList.add('valid');
            errorElement.style.opacity = '0';
            errorElement.style.pointerEvents = 'none';
            field.style.borderColor = 'var(--default-color)';
        }
    }

});
