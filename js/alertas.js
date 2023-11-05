function confirmacionEliminar(Nombre_de_usuario){
    Swal.fire({
        title: `¿Estás seguro de eliminar a ${Nombre_de_usuario}?`,
        icon: 'warning',
        showCancelButton: true,
        background: '#9c9c9c',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: "Cancelar" ,
        confirmButtonText: 'Confirmar'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Eliminado',
                text: 'El usuario fue eliminado con éxito!',
                icon: 'success',
                timer: 2000, // Tiempo en milisegundos
                showConfirmButton: false
            });
            setTimeout(function () {
                window.location = `eliminar.php?id=${Nombre_de_usuario}`;
            }, 1500); // Redirigir después de 2 segundos (2000 milisegundos)
        }
    });
}