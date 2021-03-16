<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Annu'R - Recherche</title>
  </head>
  <body>
      <?php include_once "header.php"?>

      <div class="container">
        <h1 class="d-flex align-items-center justify-content-center"
              style="height: 200px;">Recherche</h1>
        <div  class="d-flex align-items-center justify-content-center"
              style="height: 100px;"
              >
            <form action="Recherche.php" method="post" class="col-md-8">
              <div class="form-row">
                <div class="form-group col-11" id="barreRecherche">                     
                  <input type="text" class="form-control" placeholder="Nom, entreprise, domaine de compétence, région..." id="rechercheSimple" name="rechercheSimple">                  
                </div>
                
                <div class="form-group col-1" id="iconeRecherche">                     
                  <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>                  
                </div>
              </div>
                
            </form>
        </div>

        <div  class="d-flex align-items-center justify-content-center"
              style="height: 30px;">
          <a href="RechercheAvancee.php">Recherche avancée</a>
        </div>
        

      </div>
    




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  </body>
</html>