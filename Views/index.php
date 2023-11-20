<?php include_once 'Views/template-principal/header.php'; ?>

<!-- CAROUSEL -->
<div id="carouselExampleInterval" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="<?php echo BASE_URL . 'assets/img/banner-identidad.gif' ?>" alt="image" class="d-block w-100">
        </div>
    </div>
</div>
<!-- -------->
<!---PRODUCTOS VENDIDOS--->
<div class="container-fluid productos-vendidos">
    <p class="text-center subtitulo pt-5">Los Favoritos</p>
    <div class="row justify-content-md-center m-3 p-4 all-productos-vendidos">
        <div class="col-auto">
            <div class="card body-item-vendidos shadow" style="width: 14rem;">
                <img src="<?php echo BASE_URL . 'assets/img/banner-horizontal1.jpg'; ?>"
                    class=" rounded-top img-productos-vendidos" alt="...">
                <div class="card-body body-item-vendidos ">
                    <div class="d-flex">
                        <h5 class="text-item-vendidos text-center">Cremas,Sueros y Bloqueador solar</h5>
                    </div>
                    <div class="text-center">
                        <button class="boton-productos-vendidos py-1 px-4">Mostrar Mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card body-item-vendidos shadow" style="width: 14rem;">
                <img src="<?php echo BASE_URL . 'assets/img/banner-horizontal3.jpg'; ?>"
                    class=" rounded-top img-productos-vendidos" alt="...">
                <div class="card-body body-item-vendidos ">
                    <div class="d-flex">
                        <h5 class="text-item-vendidos text-center">Cremas,Sueros y Bloqueador solar</h5>
                    </div>
                    <div class="text-center">
                        <button class="boton-productos-vendidos py-1 px-4">Mostrar Mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card body-item-vendidos shadow" style="width: 14rem;">
                <img src="<?php echo BASE_URL . 'assets/img/banner-horizontal2.jpg' ?>"
                    class=" rounded-top img-productos-vendidos" alt="...">
                <div class="card-body body-item-vendidos ">
                    <div class="d-flex">
                        <h5 class="text-item-vendidos text-center">Cremas,Sueros y Bloqueador solar</h5>
                    </div>
                    <div class="text-center">
                        <button class="boton-productos-vendidos py-1 px-4">Mostrar Mas</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto">
            <div class="card body-item-vendidos shadow" style="width: 14rem;">
                <img src="<?php echo BASE_URL . 'assets/img/banner-horizontal4.jpg'; ?>"
                    class=" rounded-top img-productos-vendidos" alt="...">
                <div class="card-body body-item-vendidos ">
                    <div class="d-flex">
                        <h5 class="text-item-vendidos text-center">Cremas,Sueros y Bloqueador solar</h5>
                    </div>
                    <div class="text-center">
                        <button class="boton-productos-vendidos py-1 px-4">Mostrar Mas</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!----------->


<!----------productos nuevos----------->
<div class="container mb-4 mt-3 productos-nuevos">
    <p class="text-center subtitulo pt-5 pb-3">Categorias</p>
    <div class="row">
        <?php foreach ($data['categorias'] as $categoria) {
            ?>
        <div class="col-md-4 col-sm-12 mt-4">
            <div class="card text-bg-dark">
                <img src="<?php echo BASE_URL; ?>assets/img/<?php echo $categoria['imagen']; ?>.webp"
                    class="card-img rounded-0" alt="...">
                <div class=" card-img-overlay d-flex align-content-end flex-wrap rounded-0">
                <p class="card-text text-card-cuadricula py-1 px-4"><?php echo $categoria['descripcion']; ?></p>
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>" class="a-categoria"><h5 class="card-title px-4 title-card-cuadricula"><?php echo $categoria['categoria']; ?></h5></a>
                    
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!------------------------->



<!-- Start Featured Product --
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Product</h1>
                <p>
                    Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident.
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['nuevosProductos'] as $producto) { ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                            <img src="<?php echo BASE_URL; ?>assets/img/productos/<?php echo $producto['imagen']; ?>.jpg"
                                class="card-img-top" alt="">
                        </a>
                        <div class="card-body">

                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>"
                                class="h2 text-decoration-none text-dark">
                                <?php echo $producto['nombre']; ?>
                            </a>
                            <p class="card-text">
                                <?php echo $producto['descripcion']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
 End Featured Product -->

<!-----TIP----------->
<div class="container-fluid  tip">
    <p class="text-center subtitulo pt-5 pb-3">Gangnam Tip</p>
    <div class="container d-flex justify-content-center">
        <div class="card mb-3" style="max-width:1000px;">
            <div class="row g-0">
                <div class="col-md-6 col-sm-12">
                    <img src="<?php echo BASE_URL . 'assets/img/prod14.jpg'; ?>" class="img-fluid rounded-start"
                        alt="...">
                </div>
                <div class="col-md-6 col-sm-12 mt-md-5 mt-sm-1">
                    <div class=" card-body-tip p-md-5">
                        <h5 class="card-title card-title-tip">5 cosas que no sabias de tu protector solar</h5>
                        <ol class="lista-tip mt-md-3">
                            <li>La cantidad recomendable a utilizar son dos dedos de tu mano</li>
                            <li>Debes aplicarlo por las mañanas en tu rutina</li>
                            <li>Aplícalo 30 minutos antes de salir a la calle o exponerte al sol así se absorbe y se
                                crea el efecto protector.</li>
                            <li>Re aplícalo cada 2 o 4 horas aunque no salgas de la casa u oficina.</li>
                            <liEvita usar perfumes o colonia si planeas exponerte al sol directamente.>
                                </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------->


<!-------MARCAS---------->
<div class="container marcas mt-5">
    <p class="text-center subtitulo pt-5 pb-3">Marcas</p>
    <div class="row contenedor-marcas p-4 ">
        <div class="col mt-3 ">
            <img src="<?php echo BASE_URL . 'assets/img/marca7.png'; ?>" alt="">
        </div>
        <div class="col mt-3 ">
            <img src="<?php echo BASE_URL . 'assets/img/marca2.png'; ?>" alt="">
        </div>
        <div class="col mt-3 ">
            <img src="<?php echo BASE_URL . 'assets/img/marca3.png'; ?>" alt="">
        </div>
        <div class="col mt-3 ">
            <img src="<?php echo BASE_URL . 'assets/img/marca4.png'; ?>" alt="">
        </div>
        <div class="col mt-3 ">
            <img src="<?php echo BASE_URL . 'assets/img/marca5.png'; ?>" alt="">
        </div>
        <div class="col mt-3 ">
            <img src="<?php echo BASE_URL . 'assets/img/marca6.png'; ?>" alt="">
        </div>
        <div class="col mt-3 ">
            <img src="<?php echo BASE_URL . 'assets/img/marca8.png'; ?>" alt="">
        </div>
    </div>
</div>
<!----------------------->

<!----newsletter---------->
<div class="container-fluid newsletter mt-5">
    <div class="d-flex justify-content-center p-5">
        <div class="row">
            <div class="col text-center">
                <p class="text-newsletter">ÚNETE A NUESTRA NEWSLETTER</p>
                <p class="text-sub-newsletter">SÉ EL PRIMERO EN ENTERARTE DE TODO</p>
                <div class="mb-3 d-flex row">
                    <div class="col-md-8 col-sm-12">
                        <input type="email" class="form-control input-newsletter rounded-0 border border-secondary"
                            id="exampleFormControlInput1" placeholder="Introduzca su email">
                    </div>
                    <div class="col-md-4 col-sm-10">
                        <button type="button" class="btn btn-sub px-4 rounded-0 ">Suscribirse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------->

<?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>