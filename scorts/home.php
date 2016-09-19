<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<body>
	
		<div id="header">
			<?php require_once '../scorts/plantillas/header.php'; ?>
		</div>
    <div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.concatur.com/wp-content/uploads/2014/06/vinos-y-licores.jpg" alt="img_acompañantemujer" width="280">
    </div>

    <div class="item">
      <img src="http://k33.kn3.net/taringa/D/1/9/E/E/9/blackera/5F2.jpg" alt="img_acompañantemujer" width="280">
    </div>

    <div class="item">
      <img src="http://www.cocteleria.com.mx/images/consejos-para-cocteles-bajos-en-calorias.jpg" alt="img_acompañantemujer" width="280">
    </div>

    <div class="item">
      <img src="http://k46.kn3.net/taringa/B/1/7/3/C/E/SensualArt/9F3.jpg" alt="img_acompañantemujer" width="280">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
		<div id="footer">
			<?php require_once '../scorts/plantillas/footer.php'; ?>
		</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>