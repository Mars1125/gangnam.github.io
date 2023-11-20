const btnAddCarrito = document.querySelectorAll(".btnAddCarrito");
const btnCarrito = document.querySelector("#btnCantidadCarrito");
const verCarrito = document.querySelector("#verCarrito");
const tableListaCarrito= document.querySelector("#tableListaCarrito tbody");
const myModal = new bootstrap.Modal(document.getElementById("myModal"));
let listaCarrito;
document.addEventListener("DOMContentLoaded", function () {
  if (localStorage.getItem("listaCarrito") != null) {
    listaCarrito = JSON.parse(localStorage.getItem("listaCarrito"));
  }

  for (let i = 0; i < btnAddCarrito.length; i++) {
    btnAddCarrito[i].addEventListener("click", function () {
      let idProducto = btnAddCarrito[i].getAttribute("prod");
      agregarCarrito(idProducto, 1);
    });
  }
  cantidadCarrito();
  verCarrito.addEventListener('click', function () {
    getListaCarrito();
    myModal.show();
  });
});

function agregarCarrito(idProducto, cantidad) {
  if (localStorage.getItem("listaCarrito") == null) {
    listaCarrito = [];
  } else {
    let listaExiste = JSON.parse(localStorage.getItem("listaCarrito"));
    for (let i = 0; i < listaExiste.length; i++) {
      if (listaExiste[i]["idProducto"] == idProducto) {
        alert("Ya esta añadido en el carrito");
        return;
      }
    }
    listaCarrito.concat(localStorage.getItem("listaCarrito"));
  }
  listaCarrito.push({
    idProducto: idProducto,
    cantidad: cantidad,
  });
  localStorage.setItem("listaCarrito", JSON.stringify(listaCarrito));
  alert("Producto añadido");
  cantidadCarrito();
}

function cantidadCarrito() {
  let listas = JSON.parse(localStorage.getItem("listaCarrito"));
  if (listas != null) {
    btnCarrito.textContent = listas.length;
  } else {
    btnCarrito.textContent = 0;
  }
}
 
function getListaCarrito() {
  const url = base_url + "principal/listaProductos";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(JSON.stringify(listaCarrito));
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      let html = "";
      res.productos.forEach(producto => {
        html += `<tr>
        <td>
        <img class="img-thumbnail rounded-circle" src="http://localhost/gangnam/assets/img/${producto.imagen}" width="110">
        </td>
        <td class="datos-carrito">${producto.nombre}</td>
        <td><span class="datos-carrito">${ producto.precio+' '+res.moneda}</span>
        </td>
        <td><span class="mx-4 datos-carrito">${producto.subTotal}</span></td>
        <td><button class="btn btn-eliminar btnDeletecart" type="button" prod="${producto.id}"><i class="fa-light fa-trash-can" style="color: #2c313a;">Eliminar</i></button>
        </td>
        
    </tr>`;
      });
      tableListaCarrito.innerHTML= html;
      document.querySelector('#totalGeneral').textContent= res.total;
      btnEliminarCarrito();
    }
  }
}

function btnEliminarCarrito() {
  let listaEliminar = document.querySelectorAll('.btnDeletecart');
  for (let i = 0; i < listaEliminar.length; i++) {
    listaEliminar[i].addEventListener('click',function() {
      let idProducto= listaEliminar[i].getAttribute('prod');
      eliminarListaCarrito(idProducto);
    })
  }
}

function eliminarListaCarrito(idProducto) {
  for (let i = 0; i < listaCarrito.length; i++) {
    if (listaCarrito[i]['idProducto']== idProducto) {
      listaCarrito.splice(i,1);
    }
  }
  localStorage.setItem('listaCarrito',JSON.stringify(listaCarrito));
  getListaCarrito();
  cantidadCarrito();
  alert('producto eliminado de la lista');
}