
<?php include_once 'Views/template-principal/header.php';?>
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="">
                <div class="row">
                    <?php foreach($data['productos'] as $producto){ ?>
                    <div class="col-md-3">
                        <div class="card mb-4 product-wap rounded-0 item-producto">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/<?php echo $producto['imagen'];?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i class="fas fa-heart"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/'. $producto['id'];?>"><i class="fas fa-eye"></i></a></li>
                                        <li><a class="btn btn-success text-white mt-2 btnAddCarrito" href="#" prod="<?php echo $producto['id'];?>"><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <p href="" class="card-text card-nombre"><?php echo $producto['nombre'];?></p>
                                <p class="text-center mb-2 card-precio"><?php echo MONEDA . ' '. $producto['precio'];?></p>
                                <p class="text-center mt-2 card-descripcion"><?php echo $producto['descripcion'];?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>     
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                    <?php 
                    $anterior=$data['pagina']-1;
                    $siguiente=$data['pagina']+1;
                    $url= BASE_URL .'principal/shop/';

                    if($data['pagina']>1){
                    echo'
                    <li class="page-item ">
                    <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="'.$url. $anterior.'">Anterior</a>
                    </li>';
                    }
                    if ($data['total']>=$siguiente) {
                       echo'<li class="page-item">
                       <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="'.$url. $siguiente.'">Siguiente</a>
                   </li>';
                    }
                    ?>
                        
                        
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

    


    <?php include_once 'Views/template-principal/footer.php';?>
</body>

</html>