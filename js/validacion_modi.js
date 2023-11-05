document.getElementById('M_nombre').addEventListener('input', function () {
    this.classList.remove('is-invalid');
});

document.getElementById('M_nombre').addEventListener('invalid', function () {
    this.classList.add('is-invalid');
    this.nextElementSibling.textContent = 'Por favor ingrese el nombre.';
});

document.getElementById('M_apellido').addEventListener('input', function () {
    this.classList.remove('is-invalid');
});

document.getElementById('M_apellido').addEventListener('invalid', function () {
    this.classList.add('is-invalid');
    this.nextElementSibling.textContent = 'Por favor ingrese el apellido.';
});

document.getElementById('M_correo').addEventListener('input', function () {
    this.classList.remove('is-invalid');
});

document.getElementById('M_correo').addEventListener('invalid', function () {
    this.classList.add('is-invalid');
    this.nextElementSibling.textContent = 'Por favor ingrese el correo.';
});

document.getElementById('M_dia').addEventListener('input', function () {
    this.classList.remove('is-invalid');
});

document.getElementById('M_dia').addEventListener('invalid', function () {
    this.classList.add('is-invalid');
    this.nextElementSibling.textContent = 'Por favor ingrese el día.';
});
document.getElementById('M_año').addEventListener('input', function () {
    this.classList.remove('is-invalid');
});

document.getElementById('M_año').addEventListener('invalid', function () {
    this.classList.add('is-invalid');
    this.nextElementSibling.textContent = 'Por favor ingrese el año.';
});

document.getElementById('M_contraseña').addEventListener('input', function () {
    this.classList.remove('is-invalid');
});

document.getElementById('M_contraseña').addEventListener('invalid', function () {
    this.classList.add('is-invalid');
    this.nextElementSibling.textContent = 'Por favor ingrese la contraseña.';
});

document.getElementById('M_contrasena_confir').addEventListener('input', function () {
    this.classList.remove('is-invalid');
});

document.getElementById('M_contrasena_confir').addEventListener('invalid', function () {
    this.classList.add('is-invalid');
    this.nextElementSibling.textContent = 'Por favor confirme la contraseña.';
});