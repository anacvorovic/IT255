﻿<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MetHotels</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body ng-cloak="">
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> MetHotels</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">HOTEL</a></li>
                    <li><a href="rezervacija/index.html">REZERVACIJA</a></li>
                    <li><a href="registracija/index.html">REGISTRUJ SE</a></li>
                    <li><a href="login/index.html">ULOGUJ SE</a></li>
                </ul>
            </div>
           
        </div>
    </div>

     
<div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
				<div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="img/1.jpg" alt="" />
                            <div class="carousel-caption" >
                                <h4 class="back-light">MetHotels</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    
    
    <section  >
        <div class="container">
            

         <div class="row text-center">
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa-4x"></i>
                  <h1>Awesome Service </h1>
                      <p>
                            Profesionalna i brza usluga.
                            </p>
             </div>
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa-4x"></i>
                 <h1>Open 24/7</h1>
                      <p>
                            Otvoren svim danima u nedelji.
                            </p>
             </div>
             <div class="col-md-4 col-sm-4  icon-big" >
                 <i class="fa-4x"></i>
                 <h1>Unique</h1>
                      <p>
                            Jedinstvenost i posvecenost poslu.
                            </p>
             </div>
         </div>
          

        </div>
    </section>

    <div id="footer">
        Ana Cvorovic
         
    </div>
    <script src="js/custom.js"></script>
    </body>
      <script src="js/angular.min.js"></script>
  <script src="js/angular-route.min.js"></script>
  <script src="js/angular-animate.min.js" ></script>
  <script src="js/toaster.js"></script>
  <script src="app/app.js"></script>
  <script src="app/data.js"></script>
  <script src="app/directives.js"></script>
  <script src="app/authCtrl.js"></script>
</html>
