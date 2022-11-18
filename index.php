<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/estilo.css"> -->
    <title>La Memoria</title>
</head>
<body>
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <section>
        <?php require_once('Layouts/header.php') ?>
    </section>
    
    <section id="container-slider">	
        <link rel="stylesheet" href="assets/css/slider.css">
        <script type="text/javascript" src="assets/js/script.js"></script>

        <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
        <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
        <ul class="listslider">
            <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
            <li><a itlist="itList_1" href="#"></a></li>
            <li><a itlist="itList_2" href="#"></a></li>
            <li><a itlist="itList_3" href="#"></a></li>
        </ul>
        <ul id="slider">
        
            <li style="background-image: url('https://www.psicoactiva.com/wp-content/uploads/2016/09/como-funciona-memoria.jpg'); z-index:0; opacity: 1;">
            <div class="content_slider"></div>
            </li>
            <li style="background-image: url('https://magazine.medlineplus.gov/images/uploads/main_images/remembering-su19.jpg'); ">
            <div class="content_slider" ></div>
            </li>
            <li style="background-image: url('https://cdincbarcelona.com/wp-content/uploads/2019/02/memoria-procesamiento-de-la-informacion-1.jpg'); ">
            <div class="content_slider" ></div>
            </li>
            <li style="background-image: url('https://www.hola.com/imagenes/estar-bien/20201230181845/ejercicio-atencion-memoria-concentracion-cerebro/0-905-611/neurofitnes-memoria-t.jpg'); ">
            <div class="content_slider" ></div>
            </li>
        </ul>
    </section>

   
    
    <section>     

        <?php

        if (isset($_GET['controller'])&&isset($_GET['action'])) {
                    
            $controller=$_GET['controller'];
            $action=$_GET['action'];
        }else{
            $controller='pagina';
            $action='inicio';
        }

        require_once('routing.php');
        
        ?>   
    </section>


    <section>
        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
        <link href="assets/css/footer.css" rel="stylesheet">

        <?php require_once('Layouts/footer.php') ?>

    </section>

</body>
</html>