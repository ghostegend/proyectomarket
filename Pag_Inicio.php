<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
     <title>Mini Market</title>
</head>
<body>
    
    <div class="page-container" >
        
        <nav class="full-reset nav-phonestore">
            <div class="container " style="color: black">
                <div class="logo tittles-pages">
                    PRODUCTOS
                </div>
                 <ul class="list-unstyled full-reset navigation-list">
                     <li><a href="./Pag_Inicio.php">Inicio</a></li>
                    <li><a href="./Pag_Inicio.php">Productos</a></li>
                    <li><a href="./Detalle_proyecto.html">Detalle</a></li>
                    <li><a href="./Facturazion_proyecto.html">Facturacion</a></li>
                    <li> <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                     </form></li>
                     <li style="size: auto">     |   </li>
                    <li style="position: inherit"><button type="button"  class="btn btn-danger ">Cerrar sesion</button></li>
                    
                </ul>      
            </div>
        </nav>
        <div class="content-carousel" >
            
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top:0">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/bimbo-producto.png" class="d-md-block" >
                        <div class="carousel-caption" >
                            <h5> PANADERIA</h5>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./img/helados.png" class="d-md-block " >
                        <div class="carousel-caption">
                            <h5>HELADERIA</h5>
                            
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="./img/pg-10-brand-categories-all-markets-ES_LA.jpg" class="d-md-block " >
                        <div class="carousel-caption" >
                            <h5>HIGIENE</h5>
                            
                        </div>
                    </div>
                </div>
                
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>	
            </div>	 
        </div>
        
        <section id="prod-container section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="tittles-pages">Marcas y Productos</p>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="all-categories-tab" data-toggle="tab" href="#all-categories" role="tab" aria-controls="all-categories" aria-selected="true">INICIO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="tosty-tab" data-toggle="tab" href="#tosty" role="tab" aria-controls="tosty" aria-selected="false">TOSTY</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="kitty-tab" data-toggle="tab" href="#kitty" role="tab" aria-controls="kitty" aria-selected="false">KITTY</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">SECCIONES</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" id="iOS-tab" data-toggle="tab" href="#iOS" role="tab" aria-controls="iOS" aria-selected="false">Verduleria</a>
                                                <a class="dropdown-item" id='android-tab' data-toggle="tab" href="#android" role="tab" aria-controls="android" aria-selected="false">Dos Pinos</a>
                                                <a class="dropdown-item" id='windowsPhone-tab' data-toggle="tab" href="#windowsPhone" role="tab" aria-controls="windowsPhone" aria-selected="false">Varios</a>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <div class="tab-content">
                                    <!-- ===================================== Todos las marcas============================================= -->
                                    <div  class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab"  id="all-categories">
                                        <p class="tittles-pages">Todos los productos</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="card " >
                                                    <div class='img-background' id='tostyBGImg'></div>
                                                    
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Tosty</h5>
                                                        <p class="card-text">Para picar</p>
                                                        <a href="#" class="btn btn-danger">Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="card " >
                                                    <div class="img-background" id='kyttyBGImg'> </div>
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Kitty</h5>
                                                        <p class="card-text">Snacks</p>
                                                        <a href="#" class="btn btn-danger">Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="card " >
                                                    <div class="img-background" id='dPinosBGImg'></div>
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Dos Pinos</h5>
                                                        <p class="card-text">Heladeria</p>
                                                        <a href="#" class="btn btn-danger">Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                
                                                <div class="card " >
                                                    <div class="img-background" id='bimboBGImg'></div>
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Panaderia</h5>
                                                        <p class="card-text">Productos de la mejor calidad</p>
                                                        <a href="#" class="btn btn-danger">Ver más</a>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- ================Pag tosty============================================= -->
                                    <div class="tab-pane fade show " role="tabpanel" aria-labelledby="home-tab"  id="tosty">
                                        <p class="tittles-pages">Productos Tosty</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/producto-quesitos.png" alt="SmartPhone" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Quesitos</h3>
                                                        <p class="text-justify">
                                                            Los mejores quesitos 
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/producto-chirulitos.png" alt="SmartPhone" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Chirulitos</h3>
                                                        <p class="text-justify">
                                                            los mejores Chirulitos
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/paquetes-taquitos.png" alt="SmartPhone" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Taquitos</h3>
                                                        <p class="text-justify">
                                                            Los mejores taquitos
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/producto-papiolas_4455f3df-452c-4675-a900-0ab31fc7dbcc_530x.png" alt="SmartPhone" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Papiolas</h3>
                                                        <p class="text-justify">
                                                            las mejores papiolas
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pag productos -->
                                        
                                    </div>
                                    <!-- ===================================== pag kitty============================================= -->
                                    <div class="tab-pane fade show " role="tabpanel" aria-labelledby="home-tab"  id="kitty">
                                        <p class="tittles-pages">Productos Kitty</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/papa1.png" alt="Tablet" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Pika Mix</h3>
                                                        <p class="text-justify">
                                                            lo mejor
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/papa2.png" alt="Tablet" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Papitas</h3>
                                                        <p class="text-justify">
                                                            lo mejor
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/papa4.png" alt="Tablet" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Chicharrones</h3>
                                                        <p class="text-justify">
                                                            lo mejor.
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/papa5.png" alt="Tablet" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Kronchitos</h3>
                                                        <p class="text-justify">
                                                            lo mejor
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- =====================================Dos pinos============================================= -->
                                    <div class="tab-pane fade show " role="tabpanel" aria-labelledby="home-tab"  id="android">
                                        <p class="tittles-pages">Productos Dos Pinos</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/unnamed (1).png"  class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">YOGURTS</h3>
                                                        <p class="text-justify">
                                                           Los mejores productos a base de leche
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/Helados-Alaska-Dos-Pinos.png" id="helado_img" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">HELADOS</h3>
                                                        <p class="text-justify">
                                                           Ricos y llenos de sabor
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/206021.png" id="jugo_img" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Jugos</h3>
                                                        <p class="text-justify">
                                                            Diferentes tamanos para disfrutar mas su sabor
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/LECHE-ENTERA.png" id="leche_img" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Leche</h3>
                                                        <p class="text-justify">
                                                            Pura y nutritiva
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- ===================================== frutas y verduras============================================= -->
                                    <div class="tab-pane fade show " role="tabpanel" aria-labelledby="home-tab"  id="iOS">
                                        <h2 class="tittles-pages">Frutas y Verduras</h2>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/33-331172_mezcla-de-frutas-deshidratadas-como-la-pia-el.png"  class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Frutas</h3>
                                                        <p class="text-justify">
                                                            Siempre frescas
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/verduraaaaaasssss.png"  class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Verduras</h3>
                                                        <p class="text-justify">
                                                           Llenas de sabor
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/kisspng-vegetable-fruit-juice-portable-network-graphics-cl-clip-art-images-fruits-and-vegetables-png-transp-5d164af6b25934.9486940915617420707305.png"  class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Frutas y Verduras</h3>
                                                        <p class="text-justify">
                                                            100% Organicas.
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/carrito.png" id="carrito_img" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Ofertas especiales</h3>
                                                        <p class="text-justify">
                                                           Encuentras lo mejor
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- ===================================== Varios ============================================= -->
                                    <div class="tab-pane fade show " role="tabpanel" aria-labelledby="home-tab"  id="windowsPhone">
                                        <p class="tittles-pages">Productos varios</p>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/cafes-2-filas.png"  class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Cafe</h3>
                                                        <p class="text-justify">
                                                            Gran variedad
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/automercado-granos-arroz8_grande.png" id="arroz_img" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Arroz</h3>
                                                        <p class="text-justify">
                                                            Lo mejor para la familia
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/B-Consome.png"  class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Consome</h3>
                                                        <p class="text-justify">
                                                            Le  da sazon a la vida
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-3">
                                                <div class="thumbnail thumbnail-content-phones">
                                                    <img src="./img/azucar_blanca_h312.png" id="azucar_img" class="img-responsive">
                                                    <div class="caption">
                                                        <h3 class=" text-center">Azucar</h3>
                                                        <p class="text-justify">
                                                          La mejor de todas
                                                        </p>
                                                        <p class="text-center"><a href="#" class="btn btn-danger" role="button">Ver más</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>	
                </div>
            </div>
        </section>
        
        <nav aria-label="Page navigation example">
            <ul class="pagination  justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Siguente</a></li>
            </ul>
        </nav>
        
        
        <footer class="footer" >
            <div class="container-fluid">
                <div class="col-xs-12 text-center">
                    <h3>Siguenos en</h3
                    <h4>MINI MARKET ONLINE &copy; 2020</h4>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>