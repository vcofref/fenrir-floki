Inputmask("+56 9 9999 9999").mask(document.getElementById('userPhone'));
function enviarFormulario() {
    var userName = document.getElementById('userName').value.trim();
    var userPhone = document.getElementById('userPhone').value.trim();
    var userEmail = document.getElementById('userEmail').value.trim();
    
    // Reiniciar mensajes de error
    document.getElementById('userNameError').textContent = '';
    document.getElementById('userPhoneError').textContent = '';
    document.getElementById('userEmailError').textContent = '';

    // Validar campos obligatorios
    if (userName === '') {
        document.getElementById('userNameError').textContent = 'Por favor, complete este campo.';
        return;
    }
    
    if (userPhone === '') {
        document.getElementById('userPhoneError').textContent = 'Por favor, complete este campo.';
        return;
    }
    
    // Validar el formato del número de teléfono
    var phonePattern = /^\+56 \d{1} \d{4} \d{4}$/;
    if (!phonePattern.test(userPhone)) {
        console.log(userPhone);
        document.getElementById('userPhoneError').textContent = 'Por favor, introduzca un número de teléfono válido (ej. +56 9 1234 5678).';
        return;
    }

    if (userEmail === '') {
        document.getElementById('userEmailError').textContent = 'Por favor, complete este campo.';
        return;
    }

    // Validar formato de email
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(userEmail)) {
        document.getElementById('userEmailError').textContent = 'Por favor, introduzca una dirección de correo electrónico válida.';
        return;
    }

    // Si todas las validaciones pasan, enviar el formulario
    document.getElementById('contactForm').submit();
}