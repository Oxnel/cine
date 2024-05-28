<?php
session_start();
require 'config.php';

if (isset($_SESSION['element'])){
  $res=mysqli_query($connection,"SELECT * FROM user WHERE id_user={$_SESSION['element']}");
  $row=mysqli_fetch_assoc($res);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LenxoCinema</title>
  <!-- Inclure Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <div class="el">
        <img src="images/icone.jpeg" alt="Description du logo">
          <a class="navbar-brand" href="#">LenxoCinema</a>
        </div>
        <div class="ela">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="apropos.html">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="politiques.html">Catalogue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="termes.html">Réservations</a>
              </li>
            </ul>
          </div>
          <a class="navbar-brand" href="#"><?php echo $row['nom']; ?></a>
          <img src="image_user/<?php echo $row['img'];?>" alt="Description du logo">
         
        </div>
      </div>
    </nav>
  </header>

<!-- Catalogue des films -->
  <div class="container mt-4">
    <h1>Catalogue des films</h1><br>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/Avatar.jpg" alt="Avatar 2">
          <div class="card-body">
            <h5 class="card-title">Avatar 2</h5>
            <p class="card-text">Jake Sully et Neytiri ont fondé une famille et font tout pour rester aussi soudés que possible...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/gardien.webp" alt="Les Gardiens de la Galaxie 3">
          <div class="card-body">
            <h5 class="card-title">Les Gardiens de la Galaxie 3</h5>
            <p class="card-text">Les Gardiens de la Galaxie font un voyage dans les confins de l'univers...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/Wakenda.jpg" alt="Dune 2">
          <div class="card-body">
            <h5 class="card-title">Black Panther 2</h5>
            <p class="card-text">Après la mort de Black panther, sa soeur a repris le flambeau...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/John.jpg" alt="John Wick 4">
          <div class="card-body">
            <h5 class="card-title">John Wick 4</h5>
            <p class="card-text">John Wick prend la route pour combattre des adversaires redoutables de tous les horizons...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/Fast.jpg" alt="Fast X">
          <div class="card-body">
            <h5 class="card-title">Fast X</h5>
            <p class="card-text">Au cours d'un dangereux voyage pour tenter de stopper un complot...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/Spider.jpg" alt="Spider-Man: Across the Spider-Verse">
          <div class="card-body>
            <h5 class="card-title">Spider-Man: Across the Spider-Verse</h5>
            <p class="card-text">Miles Morales se retrouve immergé dans le Spider-Verse, un univers où...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
    <div class="row">  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="images/one.webp" alt="Cocaine Bear">
          <div class="card-body">
            <h5 class="card-title">One Peace, Le Film</h5>
            <p class="card-text">Luffy et son équipage vont devoir se surpasser notemment zoro pour pouvoir eliminer les obstacles qui se dresseront devant eux dont...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/7WUHnWGx5OZxpvdAWL7Ni9Jm7ZD.jpg" alt="Scream VI">
          <div class="card-body">
            <h5 class="card-title">Scream VI</h5>
            <p class="card-text">Après avoir fait face à une nouvelle série de meurtres sanglants, la bande de survivants quitte Woodsboro pour recommencer une nouvelle vie à New York...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/1VBTDKRMn5DzajtKmmeO49eyw0p.jpg" alt="Magic Mike's Last Dance">
          <div class="card-body">
            <h5 class="card-title">Magic Mike's Last Dance</h5>
            <p class="card-text">Mike Lane prend la route avec une riche initiatrice et saisisseur d'opportunités lors d'une aventure folle et glamour qui les mène à Londres...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/m1nulbWytxcYyav0z3FHEoYHnub.jpg" alt="Luther: The Fallen Sun">
          <div class="card-body">
            <h5 class="card-title">Luther: The Fallen Sun</h5>
            <p class="card-text">Un cyberattaque révèle l'identité de tous les informateurs anonymes infiltrés au sein du crime organisé. La situation pousse le brillant mais désespéré détective John Luther à sortir de l'ombre...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/9Xnj25wj2MOrYBsrYO1Dyr7GvxN.jpg" alt="Champions">
          <div class="card-body">
            <h5 class="card-title">Champions</h5>
            <p class="card-text">Un ancien entraîneur d'une équipe de basket universitaire est contraint de faire des travaux d'intérêt général en entraînant une équipe de joueurs souffrant de déficience intellectuelle...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/9DEdxM7UEMp2hppTOxddX7uZnH2.jpg" alt="Je Reviens à Toi">
          <div class="card-body">
            <h5 class="card-title">Je Reviens à Toi</h5>
            <p class="card-text">Jeremy, vingt ans, se remet d'un drame avec l'aide de sa famille et de sa petite amie. Jusqu'à ce qu'il rencontre par hasard celle qui va bouleverser sa vie...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/fs53jmNwr9VYcqGa1qJWwcnp43l.jpg" alt="À Mon Âge Je Me Cache Encore pour Fumer">
          <div class="card-body">
            <h5 class="card-title">À Mon Âge Je Me Cache Encore pour Fumer</h5>
            <p class="card-text">Gisèle, ancienne lanceuse de lasso à tout petit revenu à l'époque, s'installe dans la maison de retraite OUI Paradis, spécialisée dans l'accompagnement des gens riches...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/becqoixO0Iee79q0ci26gfAwgZK.jpg" alt="Munch">
          <div class="card-body">
            <h5 class="card-title">Munch</h5>
            <p class="card-text">L'histoire inédite du génie de l'art troublé Edvard Munch, l'artiste visionnaire norvégien derrière l'iconique "Le Cri"...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://image.tmdb.org/t/p/w500/eYT3gBi3evaK6suk9mLLyw1IrBf.jpg" alt="Consecration">
          <div class="card-body">
            <h5 class="card-title">Consecration</h5>
            <p class="card-text">Après la mort de son frère, une femme retourne dans sa ville natale, où elle découvre que la décoration de l'église locale abrite une présence terrifiante...</p>
            <a href="#" class="btn btn-primary">Réserver</a>
          </div>
        </div>
      </div>
  


  <!-- Inclure Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="bootstrap/bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>
requi