function validarFormulario() {
    var nombre = document.getElementById('inombre').value;
    var apellido = document.getElementById('iapellido').value;
    var correo = document.getElementById('icorreo').value;
    var dia = document.getElementById('idia').value;
    var mes = document.getElementById('imes').value;
    var ano = document.getElementById('iaño').value;
    var usuario = document.getElementById('iusuario').value;
    var contrasena = document.getElementById('icontraseña').value;
    var confirmarContrasena = document.getElementById('icontrasena_confir').value;
    var terminosCheckbox = document.getElementById('iterminos');

    var mensajeErrorNombre = '';
    var mensajeErrorApellido = '';
    var mensajeErrorCorreo = '';
    var mensajeErrorDia = '';
    var mensajeErrorMes = '';
    var mensajeErrorAno = '';
    var mensajeErrorUsuario = '';
    var mensajeErrorContrasena = '';
    var mensajeErrorConfirmarContrasena = '';
    var mensajeErrorTerminos = '';

    // Validación del nombre
    if (nombre === '') {
        mensajeErrorNombre = 'Por favor, ingrese su nombre.';
    }

    // Validación del apellido
    if (apellido === '') {
        mensajeErrorApellido = 'Por favor, ingrese su apellido.';
    }

    // Validación del correo
    var regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validación del correo
    if (correo === '') {
        mensajeErrorCorreo = 'Por favor, ingrese su correo electrónico.';
    } else if (!regexCorreo.test(correo)) {
        mensajeErrorCorreo = 'Por favor, ingrese un correo electrónico válido.';
    }

    // Validación del día
    if (dia === '') {
        mensajeErrorDia = 'Por favor, ingrese el día.';
    } else if (isNaN(dia) || parseInt(dia) < 1 || parseInt(dia) > 31) {
        mensajeErrorDia = 'Ingrese un día válido.';
    }

    // Validación del mes
    if (mes === '' || isNaN(mes) || parseInt(mes) < 1 || parseInt(mes) > 12) {
        mensajeErrorMes = 'Seleccione un mes válido.';
    }

    // Validación del año
    if (ano === '' || isNaN(ano) || ano.length !== 4) {
        mensajeErrorAno = 'Ingrese un año válido.';
    }

    // Validación del usuario
    var regexLongitudUsuario = /^.{8,20}$/;

    // Validación del nombre de usuario
    if (usuario === '') {
        mensajeErrorUsuario = 'Por favor, ingrese un nombre de usuario.';
    } else if (!regexLongitudUsuario.test(usuario)) {
        mensajeErrorUsuario = 'El nombre de usuario debe tener entre 8 y 20 caracteres.';
    }

    // Validación de la contraseña
    var regexLongitudContrasena = /^.{6,}$/;

    if (contrasena === '') {
        mensajeErrorContrasena = 'Por favor, ingrese una contraseña.';
    } else if (!regexLongitudContrasena.test(contrasena)) {
        mensajeErrorContrasena = 'La contraseña debe tener al menos 6 caracteres.';
    }

    // Validación de la confirmación de la contraseña
    if (confirmarContrasena === '' || confirmarContrasena !== contrasena) {
        mensajeErrorConfirmarContrasena = 'Las contraseñas no coinciden.';
    }

    // Validación de la aceptación de términos y condiciones
    if (!terminosCheckbox.checked) {
        mensajeErrorTerminos = 'Debe aceptar los términos y condiciones.';
    }

    // Mostrar mensajes de error
    document.getElementById('error-nombre').innerHTML = mensajeErrorNombre;
    document.getElementById('error-apellido').innerHTML = mensajeErrorApellido;
    document.getElementById('error-correo').innerHTML = mensajeErrorCorreo;
    document.getElementById('error-dia').innerHTML = mensajeErrorDia;
    document.getElementById('error-mes').innerHTML = mensajeErrorMes;
    document.getElementById('error-ano').innerHTML = mensajeErrorAno;
    document.getElementById('error-usuario').innerHTML = mensajeErrorUsuario;
    document.getElementById('error-contrasena').innerHTML = mensajeErrorContrasena;
    document.getElementById('error-confirmar-contrasena').innerHTML = mensajeErrorConfirmarContrasena;
    document.getElementById('error-terminos').innerHTML = mensajeErrorTerminos;

    // Comprobar si hay algún error
    if (
        mensajeErrorNombre !== '' ||
        mensajeErrorApellido !== '' ||
        mensajeErrorCorreo !== '' ||
        mensajeErrorDia !== '' ||
        mensajeErrorMes !== '' ||
        mensajeErrorAno !== '' ||
        mensajeErrorUsuario !== '' ||
        mensajeErrorContrasena !== '' ||
        mensajeErrorConfirmarContrasena !== '' ||
        mensajeErrorTerminos !== ''
    ) {
        return false; // Si hay errores, no enviar el formulario
    }
    
    return true;
}
function validar_recuperar() {
    var recu_usuario = document.getElementById('r_usuario').value;
    var mensajeErrorUsuarioRecuperar = '';

    // Validación del nombre de usuario
    if (recu_usuario === '') {
        mensajeErrorUsuarioRecuperar = 'Por favor, ingrese un nombre de usuario.';
    }

    // Mostrar mensaje de error
    document.getElementById('error-usuario-recuperar').innerHTML = mensajeErrorUsuarioRecuperar;

    // Comprobar si hay algún error
    if (mensajeErrorUsuarioRecuperar !== '') {
        return false; // Si hay errores, no enviar el formulario
    }

    return true;
}
function validar_restablecer() {
    var nuevaContrasena = document.getElementById('nueva_contrasena').value;
    var confirmarContrasena = document.getElementById('confirmar_contrasena').value;

    var errorNuevaContrasena = document.getElementById('error-nueva-contrasena');
    var errorConfirmarContrasena = document.getElementById('error-confirmar-contrasena');

    // Restablecer mensajes de error
    errorNuevaContrasena.innerHTML = '';
    errorConfirmarContrasena.innerHTML = '';

    // Validación de nueva contraseña
    if (nuevaContrasena === '') {
        errorNuevaContrasena.innerHTML = 'Por favor, ingrese la nueva contraseña.';
    }

    // Validación de confirmación de contraseña
    if (confirmarContrasena === '') {
        errorConfirmarContrasena.innerHTML = 'Por favor, confirme la nueva contraseña.';
    }

    // Comparar si las contraseñas coinciden
    if (nuevaContrasena !== confirmarContrasena) {
        errorConfirmarContrasena.innerHTML = 'Las contraseñas no coinciden.';
    }

    // Verificar si hay algún mensaje de error
    if (errorNuevaContrasena.innerHTML !== '' || errorConfirmarContrasena.innerHTML !== '') {
        return false;
    }

    return true;
}