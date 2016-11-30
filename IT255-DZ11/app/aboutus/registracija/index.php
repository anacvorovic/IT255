<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="UTF-8">
  <title>Registracija</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body ng-cloak="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="index.html" method="post">
      
        <h1>Registracija</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Licne informacije</legend>
          <label for="name">Ime:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Lozinka:</label>
          <input type="password" id="password" name="user_password">
          
          <label>Godine:</label>
          <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>
          <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Tvoj profil</legend>
          <label for="bio">Nesto o sebi:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <button type="submit">Registruj se</button>
      </form>
      
    </body>
</html>
  
  
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
