const tableLista = document.querySelector("#tableListaDeseo tbody");
document.addEventListener("DOMContentLoaded", function() {
    getListaDeseo()
});

function getListaDeseo() {
    const url = base_url + "principal/listaProductos";
  const http = new XMLHttpRequest();
  http.open('POST', url, true);
  http.send(JSON.stringify(listaDeseo));
  http.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      let html = '';
      res.productos.forEach(producto => {
        html += `<tr>
        <td>
        <img class="img-thumbnail rounded-circle" src="${base_url + producto.imagen}" alt="" width="100">
        </td>
        <td>${producto.nombre}</td>
        <td><span class="badge bg-warning">${res.moneda + " " + producto.precio}</span></td>
        <td><span class="badge bg-success">${producto.cantidad}</span></td>
        <td>
        <button class="btn btn-block btn-outline-primary-2" btnAgregarProducto" type="button" prod="${producto.id}"><i class="icon-cart-plus"></i></button>
        <button class="btn-remove" btnEiminarDeseo" type="button" prod="${producto.id}"><i class="bi bi-x"></i>Eliminar</button>
        </td>
        </tr> `;
      });
      tableLista.innerHTML = html;
      btnEiminarDeseo();
      btnAgregarProducto();
    }
  }
}

function btnEiminarDeseo() {
    let listaEliminar = document.querySelectorAll('.btnEiminarDeseo');
    for (let i = 0; i < listaEliminar.length; i++) {
      listaEliminar[i].addEventListener('click', function(){
        let idProducto = listaEliminar[i].getAttribute('prod');
        eliminarListaDeseo(idProducto);
      })
    }
}  

function eliminarListaDeseo(idProducto) {
    for (let i = 0; i < listaDeseo.length; i++) {
        if (listaDeseo[i]['idProducto'] == idProducto) {
            listaDeseo.splice(i, 1);
        }
    }
    localStorage.setItem('listaDeseo', JSON.stringify(listaDeseo));
    getListaDeseo();
    cantidadDeseo();
    Swal.fire(
        'Aviso?',
        'PRODUCTO ELIMINADO DE TU LISTA',
        'success'
    )
}

//agregar productos desde la lista de deseos
function btnAgregarProducto() {
    let listaAgregar = document.querySelectorAll('.btnAddCart');
    for (let i = 0; i < listaAgregar.length; i++) {
        listaAgregar[i].addEventListener('click', function() {
            let idProducto = listaAgregar[i].getAttribute('prod');
            agregarCarrito(idProducto, 1, true);
        })
    }
}