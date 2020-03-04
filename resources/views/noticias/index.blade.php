<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>AMLO-MAÑANERO</title>
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
    </head>
<body>

    <!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="#" class="logo"><img src="./img/logoamlo.png" alt=""></a>
						</div>



						
						<!-- /logo -->

						<!-- nav 
						<ul class="nav-menu nav navbar-nav">
							<li><a href="#">News</a></li>
							<li><a href="#">Popular</a></li>
							
						</ul>-->
						<!-- /nav -->

						<!-- search & aside toggle 
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							
							
						</div>-->
						<!-- /search & aside toggle -->


					</div>
				</div>
				
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->



 	<!--  
    <h1>AMLO-MAÑANERO</h1>
    <h3>Noticias recientes</h3>
    
    <table>

        <thead>
            <th>Titulo de la noticia</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($noticias as $noticia)
                <tr> -->
                    <!-- titulo viene del campo que viene de la base de datos 
                    <td>{{$noticia->titulo}}</td> 
                    <td>
                        <a href="{{route('noticias.show', $noticia->id)}}">Leer más</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

	</table>
	-->
	

	<!-- section -->
	<div class="section">
			<!-- container -->
			<div class="container">
			

			<br/>
			<br/>
			<br/>
			<br/>


			<div class="aside-widget">
				<div class="section-title text-center">
					<h1>AMLO-MAÑANERO</h1>
				</div>
			</div>

			<br/>
			<br/>

			<div class="col-md-12">
				<div class="section-title">
						<h2>Noticias recientes</h2>
				</div>
			</div>

				<!-- row -->
				<div class="row">
					
					<!-- post -->
					@foreach($noticias as $noticia)
						<div class="col-md-6">

					

						<div class="post post-thumb">
							<a class="post-img" href="/storage/portadas/{{$noticia->portada}}" target="_blank" ><img src="/storage/portadas/{{$noticia->portada}}"  alt=""></a>
							<div class="post-body">
								<div class="post-meta">

									<a class="post-category cat-3" href="{{route('noticias.show', $noticia->id)}}">{{$noticia->titulo}}</a>
									<!-- <span class="post-date">March 27, 2018</span> -->

								</div>

								<h3 class="post-title"><a href="{{route('noticias.show', $noticia->id)}}">{{$noticia->cuerpo}}</a></h3>
							
							</div>
						</div>

					
						</div>
					@endforeach
					<!-- /post -->

					<!-- post 
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img src="./img/post-2.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">

									<a class="post-category cat-3" href="category.html">Jquery</a>
									<span class="post-date">March 27, 2018</span>

								</div>

								<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
							
							</div>
						</div>
					</div>-->
					<!-- /post -->

				</div>
				<!-- /row -->

				
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

	<!-- Footer -->
	<footer id="footer">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-5">
							<div class="footer-widget">
								<div class="footer-logo">
									<a href="#" class="logo"><img src="./img/logoamlo.png" alt=""></a>
								</div>
								<ul class="footer-nav">
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Advertisement</a></li>
								</ul>
								<div class="footer-copyright">
									<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
								</div>
							</div>
						</div>

						
						<ul class="footer-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>