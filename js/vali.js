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
    var mejorasCheckbox = document.getElementById('IMejoras_registro');

    var mensajeError = '';

    if (nombre === '') {
        mensajeError += 'Por favor, ingrese su nombre.\n';
    }

    if (apellido === '') {
        mensajeError += 'Por favor, ingrese su apellido.\n';
    }

    // Puedes agregar más validaciones según tus necesidades

    if (mensajeError !== '') {
        alert(mensajeError);
        return false;
    }

    // Puedes agregar más lógica de validación según tus necesidades

    return true;
}