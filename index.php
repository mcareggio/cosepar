<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web de Cosepar Ltda., Arata La Pampa">
    <meta name="author" content="Marcos Careggio">
    <link rel="icon" href="favicon.ico">
	
    <title>COSEPAR Ltda</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/estilo.css" rel="stylesheet">
    <!-- Carousel - Diapositivas-->
    <link rel="stylesheet" href="css/carousel.css">
    <!-- barra de navegacion -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   
	<script>
function GetRSS (psUrl,ul)
{
	var oHttp=false;
	/*@cc_on @*/
	/*@if (@_jscript_version>=5)
	{
		var asParsers=['Msxml2.XMLHTTP.5.0', 'Msxml2.XMLHTTP.4.0', 
		'Msxml2.XMLHTTP.3.0', 'Msxml2.XMLHTTP', 'Microsoft.XMLHTTP'];
		for (var iCont=0; ((!oHttp) && (iCont<asParsers.length)); iCont++)
		{
			try
			{
				oHttp=new ActiveXObject(asParsers[iCont]);
			}
		    catch(e)
			{
				oHttp=false;
			}
		}
	}
	@end @*/
	if ((!oHttp) && (typeof XMLHttpRequest!='undefined'))
	{
		oHttp=new XMLHttpRequest();
	}
	oHttp.open('GET', psUrl, false);
	oHttp.send(null);
	sDatos=oHttp.responseText + ' ';
	iCont=sDatos.indexOf('<item>', 0);
	for(var i=0;i<10;i++)
	{
		sTitulo=sDatos.substring(sDatos.indexOf('<title>', iCont)+19, 
			sDatos.indexOf('</title>', iCont));
		sDescripcion=sDatos.substring(sDatos.indexOf('<description>', iCont)+25, 
			sDatos.indexOf('</description>', iCont));	
		sLink=sDatos.substring(sDatos.indexOf('<link>', iCont)+6,
			sDatos.indexOf('</link>', iCont));
		
		sTitulo=sTitulo.slice(0,-7);
		sDescripcion=sDescripcion.slice(0,-7);
		document.getElementById('noticias').innerHTML+='<li><a href="' + sLink + '" target="_blank">' + sTitulo +" - <p>" +sDescripcion+ '</p></a>';
		iCont=sDatos.indexOf('<item>', iCont+1);
	}
}

</script>
  </head>

  <body>
  
     <nav class="navbar navbar-inverse navbar-static-top">
     	<div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            		<span class="sr-only">Toggle navigation</span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
          		</button>
          		<a class="navbar-brand" href="#">COSEPAR</a>
        	</div>
            
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
          	<li class="active"><a href="#">Inicio</a></li>
            <li><a href="#about">Servicios</a></li>
            <li><a href="#contact">Nosotros</a></li>
            <li><a href="#contact">Ubicacion</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
          <!--<ul class="nav navbar-nav navbar-right">
            <!--<li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  
  
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  	<div class="carousel-enlaces">
    <div class="container">
        	<div class="row">
        		<div class="col-sm-3">	
                	<div class="enlaces">
                    <span class="cabecera-enlaces">Mail</span>
                        <ul class="list-unstyled lista-enlaces">
                            <li><span class="iconos-enlaces icono-mail glyphicon glyphicon-envelope"></span><a href="http://mail.google.com" target="new">Gmail</a>
                            <li><span class="iconos-enlaces icono-mail glyphicon glyphicon-envelope"></span><a href="http://www.hotmail.com" target="new">Hotmail</a>
                            <li><span class="iconos-enlaces icono-mail glyphicon glyphicon-envelope"></span><a href="http://www.yahoo.com.ar" target="new">Yahoo</a> 
                        </ul>
                    </div>
                    
                    <div class="enlaces">
                    <span class="cabecera-enlaces">Bancos</span>
                        <ul class="list-unstyled lista-enlaces">
                            <li><span class="iconos-enlaces icono-banco color-rojo glyphicon glyphicon-piggy-bank"></span><a href="https://www.bancodelapampa.com.ar" target="new">Banco de La Pampa</a>
                            <li><span class="iconos-enlaces icono-banco color-azul	glyphicon glyphicon-piggy-bank"></span><a href="http://www.bna.com.ar" target="new">Banco de la Nacion</a>
                            <li><span class="iconos-enlaces icono-banco color-celeste	glyphicon glyphicon-piggy-bank"></span><a href="https://www.bbvafrances.com.ar" target="new">BBVA</a> 
                        </ul>
                    </div>
                    
                    <div class="enlaces">
                    <span class="cabecera-enlaces">Redes</span>
                        <ul class="list-unstyled lista-enlaces">
                            <li><span class="iconos-enlaces icono-facebook fa fa-facebook-official"></span><a href="http://www.facebook.com" target="new">Facebook</a>
                            <li><span class="iconos-enlaces icono-twitter fa fa-twitter-square"></span><a href="www.twitter.com" target="new">Twitter</a>
                            <li><span class="iconos-enlaces icono-youtube fa fa-youtube-square"></span><a href="http://www.youtube.com" target="new">Youtube</a> 
                        </ul>
                        
                    </div>
                                        
                </div>
                
                <div class="col-sm-3">
                	
                    <div class="enlaces">
                    <span class="cabecera-enlaces">Diarios</span>
                        <ul class="list-unstyled lista-enlaces">
                            <li><span class="iconos-enlaces icono-facebook fa fa-newspaper-o"></span><a href="http://www.infopico.com" target="new">Infopico</a>
                            <li><span class="iconos-enlaces icono-youtube fa fa-newspaper-o"></span><a href="http://www.maracodigital.net" target="new">Maraco igital</a>
                            <li><span class="iconos-enlaces icono-facebook fa fa-newspaper-o"></span><a href="http://www.laarena.com.ar" target="new">La Arena</a>
                            <li><span class="iconos-enlaces icono-twitter fa fa-newspaper-o"></span><a href="http://www.diariolareforma.com.ar" target="new">La Reforma</a>
                            <li><span class="iconos-enlaces icono-youtube fa fa-newspaper-o"></span><a href="http://www.pagina12.com.ar" target="new">Pagina 12</a> 
                        </ul>
                        
                    </div>
                    
                    <div class="enlaces">
                    <span class="cabecera-enlaces">Clima</span>
                        <ul class="list-unstyled lista-enlaces">
                            <li><i class="iconos-enlaces material-icons icono-sol1">wb_sunny</i><a href="https://www.yr.no/place/Argentina/La_Pampa/Arata" target="new">Yr Clima</a>
                            <li><i class="iconos-enlaces material-icons icono-sol2">wb_sunny</i><a href="https://www.windguru.cz/509538" target="new">Wind Guru</a>
                            <li><i class="iconos-enlaces material-icons icono-sol1">wb_sunny</i><a href="http://www.accuweather.com/es/ar/arata/9496/weather-forecast/9496" target="new">AccuWeather</a>
                            <li><i class="iconos-enlaces material-icons icono-sol2">wb_sunny</i><a href="https://www.meteored.com.ar/tiempo-en_Arata-America+Sur-Argentina-La+Pampa--1-13776.html" target="new">Metored</a>
                            <li><i class="iconos-enlaces material-icons icono-sol1">wb_sunny</i><a href="http://infoclima.com/pronosticos/argentina/la-pampa/?l=1006" target="new">InfoClima</a> 
                        </ul>
                        
                    </div>
                    
                </div>
                <div class="col-sm-6">
					<div class="enlaces">
                    <span class="cabecera-enlaces">Noticias</span>
                        <ul id="noticias" class="list-unstyled lista-enlaces noticias-rss">
                        	
                        </ul>
                    </div>                	
                </div>
        	</div>
        </div>
  </div>
  <!-- Indicators -->
  	<ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
    
  	</ol>

  	<!-- Wrapper for slides -->
  	<div class="carousel-inner" role="listbox">
    	
        
        <div class="item active">
      		<img src="img/coop_1.jpg" alt="Chania">
    	</div>
    	<div class="item">
      		<img src="img/coop_2.jpg" alt="Chania">
    	</div>
		<div class="item">
	      <img src="img/coop_3.jpg" alt="Flower">
  		</div>
   	</div>

  <!-- Left and right controls
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
	</div>
    
    
    <div class="cnt-mensajebienvenida">
    	<div class="container" >
    		<h1>Bienvenidos a COSEPAR Ltda.<h1>
        	<h2>Cooperativa de servicios Publicos de Arata Ltda.</h2>
    	</div>   
    </div>

 	<div class="container">
        	<div class="row">
        		<div class="col-lg-6">	
                <h1>Probando columna 1</h1>
        		<p> Leyenda columna 1</p>
                </div>
                <div class="col-lg-6">
                <h1>Probando columna 2</h1>
        		<p> Leyenda columna 2</p>
                </div>
        	</div>
    </div>
     
     
     
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
     <script>
      // Activate CarouselDiapositivas
	  
	  $( document ).ready(function() {
    GetRSS('rss/test.rss');
	
});
      $("#myCarousel").carousel({interval: 3000});
      // Enable Carousel Indicators
      $(".item").click(function(){
      $("#myCarousel").carousel(1);
});
	  //----Fin Carousel-Diapòsitivas
    </script>
  </body>
  
</html>
