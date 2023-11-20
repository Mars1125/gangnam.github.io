<!-- Modal Carrito-->
<div class="modal fade" id="myModal" t4abindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
  role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card rounded">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo BASE_URL . 'assets/img/banner-horizontal2.jpg'; ?>" class="img-fluid rounded-start">
          </div>
          <div class="col-md-8">
            <div class="card-body"><button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                aria-label="Close"></button>
              <p class="text-center subtitulo pt-4 pb-4">Carrito</p>

              <div class="table-responsive rounded">
                <table class="table align-middle table-carrito " id="tableListaCarrito">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Producto</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Subtotal</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              
            </div>
            <div class="modal-footer border border-white">
                <p id="totalGeneral" class="mx-4 total-carrito">MXN</p>
                <a href="<?php echo BASE_URL . 'clientes'; ?>" class="btn boton-registro px-5 rounded-0 m-0">Pagar</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!------USUARIO--->
<div class="modal fade" id="modalLogin" t4abindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
  role="dialog">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card">
        <div class="row g-0">
          <div class="col-md-6">
            <img src="<?php echo BASE_URL . 'assets/img/banner-horizontal6.jpg'; ?>" class="img-fluid rounded-start"
              alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body rounded">
              <form method="get" action="">
                <div class="row">
                  <div class="col-md-12" id="frmLogin">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                      aria-label="Close"></button>
                    <p class="text-center subtitulo pt-5 pb-4">Iniciar Sesion</p>
                    <p class="text-formulario px-4">Por favor complete la siguiente informacion:</p>
                    <div class="form-group mb-3 px-4">
                      <input type="text" id="correoLogin" placeholder="Correo electronico"
                        class="form-control input-formulario rounded-0 border border-secondary" type="text"
                        name="correoLogin">
                    </div>
                    <div class="form-group mb-3 px-4">
                      <input type="password" id="claveLogin" placeholder="Contraseña"
                        class="form-control input-formulario rounded-0 border border-secondary" type="text"
                        name="claveLogin">
                    </div>
                    <a href="#" id="btnRegister" class="text-formulario-a px-4">Todavia no tienes una cuenta?
                      Registrate</a>
                    <div class="float-star px-4 mt-4">
                      <button type="button" class="btn boton-registro px-5 rounded-0 m-0" id="login">Login</button>
                    </div>

                  </div>
                  <!--formulario de registro--->
                  <div class="col-md-12 d-none" id="frmRegister">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                      aria-label="Close"></button>
                    <p class="text-center subtitulo pt-4 pb-2">Registrate</p>
                    <p class="text-formulario px-4">Por favor complete la siguiente informacion:</p>
                    <div class="form-group mb-3 px-4">
                      <input type="text" id="nombreRegistro"
                        class="form-control input-formulario rounded-0 border border-secondary" type="text"
                        name="nombreRegistro" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group mb-3 px-4">
                      <input type="text" id="correoRegistro"
                        class="form-control input-formulario rounded-0 border border-secondary"
                        placeholder="Correo Electronico" type="text" name="correoRegistro">
                    </div>
                    <div class="form-group mb-3 px-4">
                      <input type="text" id="claveRegistro"
                        class="form-control input-formulario rounded-0 border border-secondary" placeholder="Contraseña"
                        type="password" name="claveRegistro">
                    </div>
                    <a href="#" id="btnLogin" class="text-formulario-a px-4">Ya tienes una cuenta?</a>
                    <div class="float-star px-4 mt-4">
                      <button type="button" class="btn boton-registro px-5 rounded-0"
                        id="registrarse">Registrarse</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>












<div class="container-fluid footer pb-2">
  <div class="row pt-5">
    <div class="col-md-3 col-sm-12 mb-3">
      <span class="span-footer ms-md-4 ms-sm-0">Redes Sociales</span>
      <div class="d-flex flex-row ms-md-4 ms-sm-0 mt-2  ">
        <div class="">
          <i class="fa-brands fa-facebook fa-xl" style="color: #454545;"></i>
        </div>
        <div class="mx-2">
          <i class="fa-brands fa-twitter fa-xl" style="color: #454545;"></i>
        </div>
        <div class="">
          <i class="fa-brands fa-youtube fa-xl" style="color: #454545;"></i>
        </div>
        <div class="mx-2">
          <i class="fa-brands fa-instagram fa-xl" style="color: #454545;"></i>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
      <span class="span-footer">Acerca de Nosotros</span>
      <div class="row">
        <ul class="footer-list mt-2">
          <li><a href="<?php echo BASE_URL . 'assets/aviso.pdf'; ?>" target="_blank" class="avisos">Aviso Legal</a></li>
          <li><a href="<?php echo BASE_URL . 'assets/politica.pdf'; ?>" target="_blank" class="avisos">Politicas de Privacidad</a></li>
          <li><a href="<?php echo BASE_URL . 'assets/terminos.pdf'; ?>" target="_blank" class="avisos">Terminos y condiciones</a></li>

        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
      <span class="span-footer">Contáctanos</span>
      <div class="row">
        <ul class="footer-list mt-2">
          <li>Tel: 5546790876</li>
          <li>gambeauty@email.com</li>
        </ul>
      </div>
    </div>
    <div class="col-md-3 col-sm-12">
      <span class="span-footer">Metodos de Pago</span>
      <ul class="d-flex justify-content-start formas-pago">
        <li class="p-1"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
            role="img" width="38" height="24" aria-labelledby="pi-visa">
            <title id="pi-visa">Visa</title>
            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
            </path>
            <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
            <path
              d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z"
              fill="#142688"></path>
          </svg></li>
        <li class="p-1"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
            width="38" height="24" role="img" aria-labelledby="pi-paypal">
            <title id="pi-paypal">PayPal</title>
            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
            </path>
            <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
            <path fill="#003087"
              d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z">
            </path>
            <path fill="#3086C8"
              d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z">
            </path>
            <path fill="#012169"
              d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z">
            </path>
          </svg></li>
        <li class="p-1"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"
            role="img" width="38" height="24" aria-labelledby="pi-master">
            <title id="pi-master">Mastercard</title>
            <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z">
            </path>
            <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
            <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
            <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
            <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z">
            </path>
          </svg></li>
      </ul>
    </div>
  </div>
  <hr />
  <div class="d-flex justify-content-center py-1">
    <span class="span-footer" id="current_date"></span>
    <script>
      var f = new Date(); document.write(f.getFullYear());
    </script>
  </div>
</div>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.js"></script>
<script>
  const base_url = '<?php echo BASE_URL; ?>';
</script>
<script src="<?php echo BASE_URL; ?>assets/js/carrito.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/login.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/templatemo.min.js"></script>