<?php 
    require 'conexion.php';
    
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['correo']))
    {
        $nombre_usuario = $_SESSION['username'];
        $correo_usuario = $_SESSION['correo'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>INST.COL GUANENTA</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="assets/css/foodhut.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Galeria Inst</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Redes Sociales</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo_guane.png" class="brand-img" alt="Logotipo Colegio Guanenta">
                <span class="brand-txt">COL. GUANENTA</span>
            </a>                       
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Galeria Prom.2024<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contactos">Contactos</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-primary ml-xl-4">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Institución Educativa</h1>
            <h2 class="display-4 mb-5">Colegio San Jose De Guanenta </h2>
            <a class="btn btn-lg btn-primary" href="https://earth.google.com/web/search/colegio+guanenta+sede+a+san+gil/@6.55877253,-73.13076818,1200.29605067a,1666.99914118d,35y,-0h,0t,0r/data=CnMaRRI_CiUweDhlNjljNzI2ZDgwNmMzNmQ6MHhjZWZkMDdiMmY4OGFiYjRhKhZJbnN0aXR1Y2nDs24gRWR1Y2F0aXZhGAIgASImCiQJg56GyrDyNEARgp6GyrDyNMAZg1LOS7qzSEAhuvIgL-izSsBCAggBOgMKATBCAggASg0I____________ARAA">VISITANOS</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">Información</h2>
                        <p>El Colegio San José de Guanentá tiene sus orígenes en la escuela de primeras letras de San Gil, cuando en el año de 1785 el Cabildo solicita, por recomendación del Corregidor de Tunja, la creación en la Villa de una cátedra pública de gramática, la cual comenzó sus labores, como se había mencionado en el capítulo anterior, el 4 de septiembre de 1787. <br><br>En el año de 1824 con la expedición del Decreto del 22 de mayo, el General Francisco de Paula Santander, determinó que el colegio de la provincia del Socorro se estableciera en San Gil y lo denominó “Colegio San José de Guanentá”. San José, por los santos protectores que se habían asignado a la escuela de primeras letras y Guanentá por el nombre de la región donde estaría ubicado. <br>A partir de 1824 para sufragar sus gastos, el colegio San José de Guanentá, además de los dineros de propios, los de las capellanías y de las donaciones de voluntarios, se valía de las rentas del convento suprimido en Vélez y adicional a esto cada estudiante debía cancelas sesenta y cuatro pesos ($64) por el año escolar.</p>

                        <p><b>Principalmente se cree que el colegio empezó a funcionar desde cuando fue creada la escuela de primeras letras, según los relatos, en la esquina sureste de la plaza principal (hoy Parque la Libertad), en un lote que había sido donado por la Señora María de los Reyes, de lo cual no se encuentran evidencias en los libros notariales.
                            Según estas afirmaciones, dicho lote sería el que hoy en día ocupa la Casa de la Cultura. Sin embargo, otros historiadores del municipio afirman que este lote sería el ubicado en la carrera 10 entre calles 12 y 13, sitio de gran actividad comercial hoy en día.
                            Hacia 1823 se empieza a gestar la idea de una sede o edificio propio para el colegio, la cual más adelante es ejecutada.</b></p>

                        <p>Se cree que el método utilizado en el colegio era el mismo que el gobierno había establecido en esta época para todas las casas de educación del territorio, el cual era conocido como método Lancasteriano o de enseñanza mutua, el cual consistía en que el maestro empleaba a los estudiantes más avanzados en conocimientos para que instruyera a un grupo de niños o estudiantes menos avanzados.</p>

                        <p>Aunque se hablaba de una educación pública en todo el territorio, no todo era costeado por el gobierno, ello hacía imposible que todos los niños y jóvenes asistieran a los colegios ya que en algunos casos las familias debían sufragar gastos. Sin embargo en el colegio San José de Guanentá el superior o rector, en los años 1824–1826, buscó la forma de conseguir becas para estudiantes de la provincia y de otras localidades y de esta manera ayudaba un poco a que muchos jóvenes accedieran a la educación.</p>

                        <p>En el año 1824 cuando fue creado el colegio, en el respectivo decreto se menciona un régimen interior, el cual creemos hace alusión a las normas o requisitos para acceder a esta institución, de igual forma se menciona un traje que podían utilizar los estudiantes, el cual se definía según las características del clima y las circunstancias locales, esto nos hace pensar que ya se iniciaba o empezaba a poner en práctica la idea de los hoy llamados uniformes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Gallery Section -->
<div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
    <h2 class="section-title">GALERÍA INSTITUCIÓN</h2>
</div>
<div class="gallary row justify-content-center">
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img src="assets/imgs/guane_1.jpg" alt="Foto de la galería" class="gallary-img">
        <a href="#" class="gallary-overlay"></a>
    </div>
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img src="assets/imgs/guane_2.jpg" alt="Foto de la galería" class="gallary-img">
        <a href="#" class="gallary-overlay"></a>
    </div>
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img src="assets/imgs/guane_3.jpg" alt="Foto de la galería" class="gallary-img">
        <a href="#" class="gallary-overlay"></a>
    </div>
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img src="assets/imgs/guane_4.jpg" alt="Foto de la galería" class="gallary-img">
        <a href="#" class="gallary-overlay"></a>
    </div>
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img src="assets/imgs/guane_5.jpg" alt="Foto de la galería" class="gallary-img">
        <a href="#" class="gallary-overlay"></a>
    </div>
    <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img src="assets/imgs/guane_6.jpg" alt="Foto de la galería" class="gallary-img">
        <a href="#" class="gallary-overlay"></a>
    </div>
</div>

<!-- book a table Section  -->
<div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
    <div class="">
        <h2 class="section-title mb-5">VISÍTANOS EN NUESTRAS REDES</h2>
        <div class="row mb-5 justify-content-center">
            <div class="col-sm-6 col-md-4 my-2 d-flex justify-content-around align-items-center">
                <a href="https://www.facebook.com/guanenta" class="btn btn-lg btn-primary mx-2" id="rounded-btn">FACEBOOK</a>
                <a href="https://www.instagram.com/colegioguanenta/" class="btn btn-lg btn-primary mx-2" id="rounded-btn-2">INSTAGRAM</a>
            </div>
        </div>
    </div>
</div>

<!-- BLOG Section -->
<div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
    <h2 class="section-title py-5">GALERIA PROM.2024</h2>
    <div class="row justify-content-center">
        <div class="col-sm-7 col-md-4 mb-5">
            <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#foods" role="tab" aria-controls="pills-home" aria-selected="true">200 Años Colegio San Jose De Guanenta</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card bg-transparent border my-3 my-md-0">
                        <img src="assets/imgs/11-1.jpeg" alt="template by DevCRID https://www.instagram.com/fulanitos_11/" class="rounded-0 card-img-top mg-responsive">
                        <div class="card-body">
                            <h1 class="text-center mb-4"><a href="https://www.instagram.com/fulanitos_11/" class="badge badge-primary">11-1</a></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-transparent border my-3 my-md-0">
                        <img src="assets/imgs/11-2.jpeg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                        <div class="card-body">
                            <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">11-2</a></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-transparent border my-3 my-md-0">
                        <img src="assets/imgs/11-3.jpeg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                        <div class="card-body">
                            <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">11-3</a></h1>
                        </div>
                    </div>
                </div>
                <!-- Nuevas Tarjetas -->
                <div class="col-md-4">
                    <div class="card bg-transparent border my-3 my-md-0">
                        <img src="assets/imgs/11-4.jpeg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                        <div class="card-body">
                            <h1 class="text-center mb-4"><a href="https://www.instagram.com/prom_11_4_el_mejor/" class="badge badge-primary">11-4</a></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-transparent border my-3 my-md-0">
                        <img src="assets/imgs/11-5.jpeg" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                        <div class="card-body">
                            <h1 class="text-center mb-4"><a href="https://www.instagram.com/11_5.promoo/" class="badge badge-primary">11-5</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page footer  -->
<div id="Contactos" class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
    <div class="row">
        <div class="col-sm-4">
            <h3>Correo Electronico</h3>
            <p class="text-muted">secretaria@colegioguanenta.edu.co</p>
        </div>
        <div class="col-sm-4">
            <h3>Telefonos</h3>
            <p class="text-muted">(607) 7235600</p>
        </div>
        <div class="col-sm-4">
            <h3>Pagina Oficial</h3>
            <p class="text-muted">
                <a href="https://www.colegioguanenta.edu.co" target="_blank" class="text-muted text-decoration-none">https://www.colegioguanenta.edu.co</a>
            </p>
        </div>            
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="assets/js/foodhut.js"></script>

</body>
</html>
