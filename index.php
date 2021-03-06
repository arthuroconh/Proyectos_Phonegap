<?PHP session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tecnologia Climatica de Venezuela</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type='text/javascript' src='js/responsiveslides.js'></script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/jssor.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script src="js/smoothscrolling.js"></script>
        <script src="js/scroll.js"></script>
        <script src="js/velocidadscroll.js"></script>
        <script src="js/menu.js"></script>
        <link rel="stylesheet" href="css/menu.css">
    </head>
    <body>
    <section class="principal">

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?PHP
            if(isset($_SESSION['usuario'])){
                ?>
            <section class="contienelogin">
                <article class="usuario"><?PHP echo $_SESSION['usuario'];?> |<a href="cerrar-sesion.php"> Cerrar Sesi&oacute;n</a></article>
            </section>  
            <?PHP
            }else{
            ?>
            <section class="contienelogin">
                <article class="usuario"><a href="nuevo-usuario.php">Registrarse</a> | <a href="login.php">Ingresar</a></article>
            </section> 
            <?PHP
            }
            ?>
        <header>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-list2"></span> <i class="fa fa-list fa-2x "></i> <article class="logo3"></article></a>
        </div>
 
        <nav class="menu2">
            <ul>
                <li><a href="index.php"><span class="icon-house"></span>Inicio</a></li>
                <li><a href="tienda.php"><span class="icon-suitcase"></span>Productos</a></li>
                <li><a href="centro-de-conocimiento.php"><span class="icon-rocket"></span>Centro de Conocimiento</a></li>
                <li><a href="contacto.php"><span class="icon-earth"></span>Contacto</a></li>
                <?PHP
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario_id']!=1){
                        echo'<li><a href="mis-ordenes.php"><span class="icon-earth"></span>Mis Ordenes</a></li>';
                    }
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario_id']==1){
                        echo'<li><a href="administracion.php"><span class="icon-earth"></span>Administraci&oacute;n</a></li>';
                    }
                ?>
        <?PHP
            if(isset($_SESSION['usuario'])){
                ?>
            <li><a href="cerrar-sesion.php"><span class="icon-earth"></span>Cerrar Sesi&oacute;n</a></li>
            <?PHP
            }else{
            ?>
            <section class="contienelogin">
                <article class="usuario"><a href="nuevo-usuario.php">Registrarse</a> | <a href="login.php">Ingresar</a></article>
            </section>
            <li><a href="nuevo-usuario.php"><span class="icon-earth"></span>Registrarse</a></li>
            <li><a href="login.php"><span class="icon-earth"></span>Ingresar</a></li>
            <?PHP
            }
            ?>   
            </ul>
        </nav>
        <section class="cerrador"></section>
           <a href="index.php"><div class="contienelogo"><article class="logo"></article></div></a>
           <nav class="contienelista">
               <ul class="listainicio">
                   <a href="index.php"><li>Inicio</li></a>
                   <a href="tienda.php"><li>Productos</li></a>
                   <a href="centro-de-conocimiento.php"><li>Centro de Conocimiento</li></a>
                   <a href="contacto.php"><li>Contacto</li></a>
                <?PHP
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario_id']!=1){
                        echo'<a href="mis-ordenes.php"><li>Mis Ordenes</li></a>';
                    }
                    if(isset($_SESSION['usuario']) && $_SESSION['usuario_id']==1){
                        echo'<a href="administracion.php"><li>Administraci&oacute;n</li></a>';
                    }
                ?>
               </ul>
            </nav> 
        </header>
        <div style="clear:both;"></div>
        <section class="contienemensaje">
            <article class="mensaje">"Estamos Refrescando a Venezuela, s&oacute;lo nos falta usted y su organizaci&oacute;n"</article>
            <article class="redes">
                            <a href="https://www.facebook.com/TecnologiaClimaticaDeVenezuelaCa?ref=hl" target="_blank"><i class="fa fa-facebook fa-1x "></i></a>  
                            <a href="https://twitter.com/tecnoclimatica"><i class="fa fa-twitter fa-1x "></i></a>  
                            <a href="http://instagram.com"><i class="fa fa-instagram fa-1x "></i></a>
            </article>
        </section>
        <div style="clear:both;"></div>
        <section class="contieneslider">
            <?PHP
                include('full-width-slider.source.php');
            ?>
        </section>
        <div style="clear:both;"></div>
        <section class="contienecarro">
          <a href="carro-de-compras.php"><article class="cantidadcarro" title="Ir al Carro">
                <article class="enca">En carro</article>
                <img src="img/carro.png"> 
               <article class="encar">
                    (<?PHP
                    if (isset($_SESSION['encarro'])) {
                    echo $_SESSION['encarro'];
                    }else{
                        echo "0";
                    }
                    ?>)
                </article>
            </article></a>
            <article id="TrianguloArribaDerecha"></article><article id="TrianguloArribaIzquierda"></article>
        </section>
        <a href="tienda.php"><article class="iratienda"> Visitar Tienda</article></a>
        <div style="clear:both;"></div>
        <section class="contenedor">
            <section class="stock">
            <?PHP
                include ('establecerconexion.php');
                $_pagi_sql = "SELECT * FROM `t_pro`"; 

                //cantidad de resultados por página (opcional, por defecto 20) 
                $_pagi_cuantos = 4; 

                //Incluimos el script de paginación. Éste ya ejecuta la consulta automáticamente 
                include("paginator.inc.php"); 

                //Leemos y escribimos los registros de la página actual 
                while($row = mysql_fetch_array($_pagi_result)){ 
               
                ?>
                    <article class="contieneproducto">
                        <article class="producto2">
                            <img src="productos/<?PHP echo $row['pro_img']?>">
                        <div class="contienedescripcion">
                            <div class="contienenombre"><h3><?PHP echo $row['pro_pro']?></h3></div>
                            <div class="pegado"><?PHP 
                            $precio=$row['pro_pre'];
                            $precio_arreglado= number_format( $precio , 2 , "," ,"." );
                            echo "Bs.".$precio_arreglado;
                            ?></div>
                            <a href="producto.php?pro_id=<?php echo $row['pro_id']?>" class="boton_pequeno"><div class="ver">Ver producto</div></a>
                        </div>
                        </article>               
                    </article> 
                <?PHP
                } 
            ?>
            </section>
        </section>
    </section>
        <div style="clear:both; top:-1%;"></div>
        <footer>
            <section class="contieneempresa">
                <div class="empresa">
                <h1>La Empresa</h1>
                Tecnologia Climatica de Venezuela, C.A.<br>
                J-29815757-7</div>
            </section>
            <section class="contienecontacto">

                
                <h1>Contacto</h1>

                <i class="fa fa-envelope fa-2x "></i>
                <div class="correo">soporte@tecnologiaclimatica.com<br>
                ventas@tecnologiaclimatica.com </div><br>
                
                <i class="fa fa-phone fa-2x "></i> 
                <div class="telefono">
                (+58) 0243-215-2234 <br>(+58) 0243-234-0287</div>
            </section>
            <section class="contienedireccion">
                <div class="empresa">
                    <h1>Direcci&oacute;n</h1>
                    Av. Circunvalaci&oacute;n, n&uacute;mero 111, Sector Pi&ntilde;onal. Maracay-Edo. Aragua.
                    <iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zxcTAG1FeqaM.kO7Lut66jSq0" style="width:100%; height:140px; border:none;"></iframe>
                </div>
            </section>
            <section class="tresredes">
            <center>
                            <a href="https://www.facebook.com/TecnologiaClimaticaDeVenezuelaCa?ref=hl" target="_blank"><article class="redondo" id="face"><i class="fa fa-facebook fa-2x "></i></article></a> 
                            <a href="https://twitter.com/tecnoclimatica"><article class="redondo" id="twitt"><i class="fa fa-twitter fa-2x "></i> </article></a>  
                            <a href="http://instagram.com"><article class="redondo" id="insta"><i class="fa fa-instagram fa-2x "></i>   </article></a>
            </center>
            </section>
            <section class="desarrollotricolor">
                <center>Copyright &copy; 2014 - Tecnolog&iacute;a Clim&aacute;tica de Venezuela, C.A. Todos los derechos reservados.</center><br>
                <center id="arribaa">Sitio desarrollado por: <a href="http://desarrollotricolor.com.ve/">Desarrollo Tricolor</a></center>
            </section>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>