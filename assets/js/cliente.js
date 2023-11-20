const tableLista = document.querySelector("#tableListaProductos tbody");
document.addEventListener("DOMContentLoaded", function () {
  if (tableLista) {
    getListaProductos();
  }

  
});

function getListaProductos() {
  let html = "";
  const url = base_url + "principal/listaProductos";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(JSON.stringify(listaCarrito));
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      if (res.totalPaypal>0) {
        res.productos.forEach((producto) => {
          html += `<tr>
            <td>
            <img class="img-thumbnail rounded-circle" src="http://localhost/gangnam/assets/img/${producto.imagen}" width="110">
            </td>
            <td><span class="datos-carrito">${producto.nombre}</span></td>
            <td><span class="datos-carrito">${
              producto.precio + " " + res.moneda
            }</span>
            </td>
            <td><span class="datos-carrito">${producto.cantidad}</span>
            </td>
            <td><span class="datos-carrito">${producto.subTotal}</span></td>
            </td>
        </tr>`;
        });
        tableLista.innerHTML = html;
        document.querySelector("#totalProducto").textContent =
          res.total + " " + res.moneda;
          botonPaypal(res.totalPaypal);
      }else{
          
          tableLista.innerHTML=`
          <tr>
          <td colspan="5" class="text-center">carrito vacio</td>
          </tr>
          `;
      }
      
     
    }
  }
}

function botonPaypal(total) {
  paypal.Buttons({
      // Order is created on the server and the order id is returned

      createOrder: (data, actions)=> {
        return actions.order.create({
          purchase_units: [
            {
              amount: {
                value: total
              }
            }
          ]
        });
      },

      onApprove: (data, actions) => {
        return actions.order.capture().then(function (orderData) {
         registrarPedido(orderData);
          
        });
      }
    })
    .render("#paypal-button-container");
}

function registrarPedido(datos) {
  const url = base_url + "clientes/registrarPedido";
  const http = new XMLHttpRequest();
  http.open("POST", url, true);
  http.send(JSON.stringify({
    pedidos: datos,
    productos:listaCarrito
  }));
  
  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      const res = JSON.parse(this.responseText);
      alert("Pago registrado");
      if (res.icono == "success") {
        localStorage.removeItem('listaCarrito');
        setTimeout(() => {
          window.location.reload();
        }, 1000);
      } 
    }
  }
}