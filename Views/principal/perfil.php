<?php include_once 'Views/template-principal/header.php'; ?>

<!-- Start Content -->
<div class="container py-5">

    <div class="row">
        <?php
        if ($data['verificar']['verify'] == 1) { ?>
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="table-responsive table-carrito">
                            <table class="table align-middle" id="tableListaProductos">
                                <thead class="thead-light">
                                    <tr>
                                        <th></th>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody >

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <span id="totalProducto" class="mx-4 total-carrito"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    
                    <div class="card-body text-center">
                        <img class="img-thumbnail rounded-circle mb-3" src="<?php echo BASE_URL . 'assets/img/banner-horizontal5.jpg'; ?>"
                            alt="" width="130px">
                            <div class="dropdown">
                        <a class="nav-link dropdown-toggle float-end" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mas Opciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL . 'clientes/salir';?>">Cerrar sesion</a></li>
                        </ul>
                    </div>
                        
                        <p class="text-item-vendidos">
                            <?php echo $_SESSION['nombreCliente']; ?>
                        </p>
                        <p class="text-item-vendidos">
                            <?php echo $_SESSION['correoCliente']; ?>
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button text-item-vendidos" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Paypal
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="paypal-button-container"></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } else { ?>

            <div class="alert alert-danger" role="alert">
                <div class="h3">
                    Verifica tu correo electronico
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<!-- End Content -->




<?php include_once 'Views/template-principal/footer.php'; ?>
<script src="<?php echo BASE_URL ?>assets/js/cliente.js"></script>

</body>

</html>