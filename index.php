


<?php

    include_once "autoloader.php";
    $mov_tipo_complejo= new Movimiento();
    $complejo= new Complejo();
    $tipo_deporte = new Tipo_deporte();

 if (empty($_REQUEST['idtipo'])){
        /*
        * Si no estoy filtrando la Seccion, entonces traigo todo.
        */
       //$complejos = $complejo->seleccionarFiltro()->fetchAll();
   $mov_tipo_complejos = $mov_tipo_complejo->seleccionarFiltro()->fetchAll();
    } 

    else {    
        
$rela_tipodeporte = $_REQUEST['idtipo'];
$mov_tipo_complejos = $mov_tipo_complejo->seleccionarFiltro("rela_tipodeporte = $rela_tipodeporte")->fetchAll();
    }

    $tipo_deportes = $tipo_deporte->seleccionarFiltro()->fetchAll();
    

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Metamorphosis Design Free Css Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link rel="stylesheet" type="text/css" href="log.css">


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
!--<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<!-- jQuery -->
<!-- lined-icons -->
<link href="styles.css" rel="stylesheet" type="text/css" />

<!-- //lined-icons -->
    <!-- Pirobox setup and styles -->
<script type="text/javascript" src="lib/pirobox.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $().piroBox({
      my_speed: 400, //animation speed
      bg_alpha: 0.1, //background opacity
      slideShow : false, // true == slideshow on, false == slideshow off
      slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
      close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox

  });
});
</script>

<link href="images/style.css" rel="stylesheet" type="text/css" />
<!-- webfonts -->
<!--// webfonts --> 
 <!-- Meters graphs -->


</head>

<body class="sticky-header left-side-collapsed">

   <section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

      <!--logo and iconic logo start-->
      <div class="logo">
        <a href="index.php"><img src="images/home.png" alt="" /><span>Home</span></a>
      </div>

      <div class="logo-icon text-center">
        <a href="index.php"><img src="images/home.png" alt="" /></a>
      </div>

      <!--logo and iconic logo end-->
      <div class="left-side-inner">
        <div class="scrollbar scrollbar1">
        <!--sidebar nav start-->
          <ul class="nav nav-pills nav-stacked custom-nav">
           

           <?php foreach ($tipo_deportes as $tipo_deporte) : ?>
                        

<li >

<a href="<?php echo "index.php?idtipo={$tipo_deporte['id_tipodeporte']}";?>">
<img src=" iconos/<?php echo $tipo_deporte['icono'];?> ">
</a>

</li>

  <?php endforeach; ?>

          </ul>
        <!--sidebar nav end-->
        </div>
      </div>
    </div>




<div id="main_bg">
<div id="main">

<!-- header begins -->
<div id="header">
	<div id="logo">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action = "" name="login" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img  src="images/img13.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">


      <label><b>  Email</b></label>
      <br> 
      <input type="text" placeholder="INGRESE SU USUARIO O EM@IL " name="correo" required>
 <br> </br>
      <label><b>Password</b></label>
      <br> 
      <input type="password" placeholder="PASSWORD" name="pass" onkeypress="envia_form(event)" required >
        <br> </br>
      <button type="submit">Entrar</button>
      <br> </br>
  
    </div>

    
     
    
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



    	<a href="login.html">Registrate y Reserva Ya!!!</a>
      	<h2><a href="#"><small>Compania VrReservas</small></a></h2>
    </div>
   





   <div id="buttons">
      <a href="index.html" class="but" title="">INICIO</a><div class="but_razd"></div>
      <a href="gallery.html"  class="but" title="">GALERIA</a><div class="but_razd"></div>
      <a href="about_us.html"  class="but" title="">TORNEOS</a><div class="but_razd"></div>
      <a href="contact_us.html" class="but" title="">PROMOCIONES</a>
    </div>
</div>
<!-- header ends -->
<div class="top">

<ul class="round">
			<li><img src="images/header5.jpg" alt="" width="510" height="286"/></li>
      <li><img src="images/header4.jpg" alt="" width="510" height="286"/></li>
			<li><img src="images/header6.jpg" alt="" width="510" height="286"/></li>
      <li><img src="images/header7.jpg" alt="" width="510" height="286"/></li>
      <li><img src="images/header2.jpg" alt="" width="510" height="286"/></li>
      <li><img src="images/header3.jpg" alt="" width="510" height="286"/></li>
      <li><img src="images/header1.jpg" alt="" width="510" height="286" /></li>
      
</ul>
<script type="text/javascript" src="lib/jquery.js"></script>
<script type="text/javascript" src="lib/jquery.roundabout.js"></script>
<script type="text/javascript">
			
			$(document).ready(function() {
				$('.round').roundabout();
			});
		
		</script>
</div>


<br> </br>
        <!-- content begins -->



<div class="cont_top"></div>


       		<div id="content">
 <div class="cont_home">
<?php foreach ($mov_tipo_complejos as $mov_tipo_complejo) : ?>     

   <div class="home_box">
                  <a href="vistas/index.html?id=<?php echo $mov_tipo_complejo['id_tipocomplejo']; ?>">
                          
                  <h1><?php echo $mov_tipo_complejo['nombre']; ?></h1>
                          </a>
                  <div  style="height:15px"></div>
                        	
                  <img src="img/<?php echo $mov_tipo_complejo['imagen_logo']; ?>" alt="" width="298" height="130" />
                         

                  <div style="height:15px"></div>
                  <h4><?php echo $mov_tipo_complejo['descripcion']; ?></h4>
                          <div style="height:5px"></div>
                        	<div style="height:20px;"><a class="read_l" href="<?php echo "infocancha.php?id_tipocomplejo={$mov_tipo_complejo['rela_complejo']}";?>">Ver Mas</a></div>

                       </div>
 
                    <div style="width: 40px; height:20px; float: left;"></div>
 <?php endforeach;?>             

              </div>


                    
         
               

     <div style="clear: both;"></div>

</div>
          
<!-- bottom end --> 
<!-- footer begins -->
            <div id="footer">
          Copyright  2017. Designed by Vr_Reservas<br />
                <a href="#">Politicas y Privacidad</a> | <a href="#">Terminos de uso</a> | </div>
        <!-- footer ends -->
</div>

</div>

></body>
</html>
