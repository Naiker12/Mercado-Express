const nuevo = document.querySelector("#nuevo_registro");
const frm = document.querySelector("#frmRegistro");
const titleModal = document.querySelector("#modalTitle");
const btnAccion = document.querySelector("#btnAccion");
const myModal = new bootstrap.Modal(document.getElementById("nuevoModal")); // Asegúrate de usar el ID correcto

document.addEventListener("DOMContentLoaded", function () {
    // Configuración de la tabla (DataTables)
    tblCategorias = $("#tblCategorias").DataTable({
        ajax: {
            url: base_url + "categorias/listar",
            dataSrc: "",
        },
        columns: [
            { data: "id" },
            { data: "categoria" },
            { data: "imagen" },
            { data: "accion" },
        ],
        language,
        dom,
        buttons,
    });

    // Mostrar modal al hacer clic en "Nuevo Registro"
    nuevo.addEventListener("click", function () {
        document.querySelector("#id").value = "";
        document.querySelector("#imagen_actual").value = "";
        document.querySelector("#imagen").value = "";
        titleModal.textContent = "NUEVA CATEGORÍA";
        btnAccion.textContent = "Registrar";
        frm.reset();
        myModal.show(); // Mostrar modal
    });

    // Enviar formulario
    frm.addEventListener("submit", function (e) {
        e.preventDefault();
        const data = new FormData(this);
        const url = base_url + "categorias/registrar";

        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(data);
        http.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.responseText);
                if (res.icono === "success") {
                    myModal.hide(); // Cerrar modal
                    tblCategorias.ajax.reload(); // Recargar tabla
                    document.querySelector("#imagen").value = "";
                }
                Swal.fire("Aviso", res.msg.toUpperCase(), res.icono);
            }
        };
    });
});


//ELIMINAR CATEGORIAS
function eliminarCat(idCat) {
    Swal.fire({
        title: "Aviso?",
        text: "¿Está seguro de eliminar el registro?",
        iconHtml: '<i class="fa-solid fa-exclamation-triangle"></i>', // Icono de Font Awesome
        customClass: {
            icon: 'text-warning' // Cambiar el color del ícono
        },
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, eliminar!",
    }).then((result) => {
        if (result.isConfirmed) {
            const url = base_url + "categorias/delete/" + idCat;
            const http = new XMLHttpRequest();
            http.open("GET", url, true);
            http.send();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const res = JSON.parse(this.responseText);
                    if (res.icono === "success") {
                        tblCategorias.ajax.reload();
                    }
                    Swal.fire("Aviso", res.msg.toUpperCase(), '<i class="fa-solid fa-check-circle"></i>'); // Cambiar ícono según respuesta
                }
            };
        }
    });
}


//EDITAR
function editCat(idCat) {
    const url = base_url + "categorias/edit/" + idCat;
    const http = new XMLHttpRequest();
    http.open("GET", url, true);
    http.send();
    http.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            const res = JSON.parse(this.responseText);
            document.querySelector('#id').value = res.id;
            document.querySelector('#categoria').value = res.categoria;
            document.querySelector('#imagen_actual').value = res.imagen;
            btnAccion.textContent = 'Actualizar';
            titleModal.textContent = "MODIFICAR CATEGORIA";
            myModal.show();
            //$('#nuevoModal').modal('show');
        }
    }
}