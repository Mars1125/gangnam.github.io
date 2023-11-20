<?php include_once 'Views/template-principal/header.php'; ?>

<!-- Open Content -->
<section class="">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/<?php echo $data['producto']['imagen'];?>"
                        alt="Card image cap" id="product-detail">
                </div>
                
            </div>
            <!-- col end -->
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="nombre-producto mt-3">
                            <?php echo $data['producto']['nombre']; ?>
                        </h1>
                        <p class="pt-2 precio-producto">
                            <?php echo $data['producto']['precio']; ?>MXN
                        </p>

                        

                        <h6 class="categoria-producto">Description:</h6>
                        <p class="descripcion-producto">
                            <?php echo $data['producto']['descripcion']; ?>
                        </p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6 class="categoria-producto">Categoria</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-lowercase descripcion-producto">
                                    <?php echo $data['producto']['categoria']; ?><strong>

                                    </strong>
                                </p>
                            </li>
                        </ul>


                        <form action="" method="GET">
                            <input type="hidden" id="idProducto" value="<?php echo $data['producto']['id']; ?>">
                            <div class="row">

                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right categoria-producto">
                                            Cantidad
                                            <input type="hidden" id="product-quanity" value="1">
                                        </li>
                                        <li class="list-inline-item border border-black"><span class="btn "
                                                id="btn-minus">-</span></li>
                                        <li class="list-inline-item"><span class="badge border border-black cantidad-producto"
                                                id="var-value">1</span></li>
                                        <li class="list-inline-item"><span class="btn border border-black"
                                                id="btn-plus">+</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row ">
                            
                                <div class="col ">
                                    <button type="button " id="btnAddCart" class="btn boton-registro px-5 rounded-0 m-0" 
                                        >Agregar al Carrito</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Close Content -->

<!-- Start Article -->
<section class="py-5">
    <div class="container">
        <div class="row text-left p-2 pb-3">
            <h4 class="card-title-tip">Productos Relacionados</h4>
        </div>

        <!--Start Carousel Wrapper-->
        <div id="carousel-related-product">
<?php  foreach ($data['relacionados'] as $producto){?>
            <div class="p-2 pb-3">
                <div class="product-wap card rounded-0">
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/<?php echo $producto['imagen'];?>">
                        <div
                            class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                            <ul class="list-unstyled">
                                <li><a class="btn btn-success text-white" href=""><i
                                            class="fas fa-heart"></i></a></li>
                                <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/'. $producto['id'];?>"><i
                                            class="fas fa-eye"></i></a></li>
                                <li><a class="btn btn-success text-white mt-2 btnAddCarrito" href=""  prod="<?php echo $producto['id'];?>"><i
                                            class="fas fa-cart-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $producto['nombre']; ?></a>
                        
                        
                        <p class="text-center mb-0"><?php echo $producto['precio']; ?></p>
                    </div>
                </div>
            </div>
<?php }?>
            
        </div>

    </div>


    </div>
</section>
<!-- End Article -->


<?php include_once 'Views/template-principal/footer.php'; ?>
<script src="<?php echo BASE_URL; ?>assets/js/modulos/detail.js"></script>

<!-- Start Slider Script -->
<script src="<?php echo BASE_URL; ?>assets/js/slick.min.js"></script>

<script>
    $('#carousel-related-product').slick({
        infinite: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 3,
        dots: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 3
            }
        }
        ]
    });
</script>
<!-- End Slider Script -->

</body>

</html>