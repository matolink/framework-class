<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">


</head>
<body>
    
 <!-- Logo -->
 <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logo.png')}}" width="320" alt="" loading="lazy">
            </a>
        </div>
    </nav>
    
    <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Todas</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Programación</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Desarrollo web</a>
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Clase 4</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/4.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Clase 4</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post 3 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/5.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">Clase 4</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            
            <div id="col-md-10">
                <a href="">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook">
                </a>
                <a href="">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram">
                </a>
                <a href="">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube">
                </a>
                <p class="mt-3">Copyright © 2022, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>