function buscarTabla() {
    var inputUsuario, inputNombre, inputApellido, inputCorreo, inputFecha, tabla, tr, i;
    inputUsuario = document.getElementById("inputBuscarUsuario").value.toUpperCase();
    inputNombre = document.getElementById("inputBuscarNombre").value.toUpperCase();
    inputApellido = document.getElementById("inputBuscarApellido").value.toUpperCase();
    inputCorreo = document.getElementById("inputBuscarCorreo").value.toUpperCase();
    inputFecha = document.getElementById("inputBuscarFecha").value.toUpperCase();
    tabla = document.getElementById("tablaUsuarios");
    tr = tabla.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      var tdUsuario = tr[i].getElementsByTagName("td")[0];
      var tdNombre = tr[i].getElementsByTagName("td")[2];
      var tdApellido = tr[i].getElementsByTagName("td")[3];
      var tdCorreo = tr[i].getElementsByTagName("td")[5];
      var tdFecha = tr[i].getElementsByTagName("td")[4];

      if (tdUsuario || tdNombre || tdApellido || tdCorreo || tdFecha) {
        if (
          (tdUsuario.textContent.toUpperCase().indexOf(inputUsuario) > -1) &&
          (tdNombre.textContent.toUpperCase().indexOf(inputNombre) > -1) &&
          (tdApellido.textContent.toUpperCase().indexOf(inputApellido) > -1) &&
          (tdCorreo.textContent.toUpperCase().indexOf(inputCorreo) > -1) &&
          (tdFecha.textContent.toUpperCase().indexOf(inputFecha) > -1)
        ) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }