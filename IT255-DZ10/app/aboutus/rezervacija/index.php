<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="UTF-8">
  <title>Rezervacija soba</title>
  
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
      
        <h1>Rezervacija</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Licne informacije</legend>
          <label for="name">Ime:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="prezime">Prezime:</label>
          <input type="text" id="prezime" name="user_prezime">

        </fieldset>

        <fieldset>
        <label for="job">Odaberite sobu:</label>
        <select id="job" name="user_job">
          <optgroup label="Vrsta sobe">
            <option value="jednokrevetna">Jednokrevetna</option>
            <option value="dvokrevetna">Dvokrevetna</option>
            <option value="trokrevetna">Trokrevetna</option>
            <option value="polupansion">Polupansion</option>
            <option value="studio">Studio</option>
            <option value="cetvorokrevetna">Cetvorokrevetna</option>
          </optgroup>
        </select>

        </fieldset>
        <button type="submit">Rezervisi</button>
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
