<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Music Web</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  </head>
  <body>
    <!-- navigation -->
      <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Music Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <?php 
              session_start();
              if(isset($_SESSION['user'])){
                echo "<li class='nav-item'><a class='nav-link' href='song.php'>Your song</a></li>";
                echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
              }else{
                echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign up</a></li>
                <li class='nav-item'><a class='nav-link' href='login.php' tabindex='-1' aria-disabled='true'>Login</a>
                </li>";
              }
            
            
            ?>
          </ul>
        </div>
      </nav>
      </section>

      <!-- slider -->
      <div id="slider">
        <div id="headerSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
            <li data-target="#headerSlider" data-slide-to="1"></li>
            <li data-target="#headerSlider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/home1.jpg" class="d-block img-fluid" alt="home1">
              <div class="carousel-caption">
                <!-- <h5>text1</h5> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/home2.jpg" class="d-block img-fluid" alt="home2">
              <div class="carousel-caption">
                <!-- <h5>text2</h5> -->
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/home3.jpg" class="d-block img-fluid" alt="home3">
              <div class="carousel-caption">
                <!-- <h5>text3</h5> -->
              </div>
            </div>
          </div>
          <!-- <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
            <span c lass="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>

      <!-- about -->
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2>About us</h2>
              <div class="about-content">
                  Online music streaming platform, keep you up to date with the latest and amazing songs
              </div>
                <button type="button" name="btn btn-primary">Read more</button>
            </div>
            

          </div>
        </div>
      </section>

      <!-- browse -->
      <section id="browse">
        <div class="container">
          <h1>Browse</h1>
          <div class="row b rowse">
            <div class="col-md-3 text-center">
              <div class="icon">
                <i class="fa fa-user"></i>
                <h3>Artists</h3>
                <p>Discover new and favourite artists</p>
              </div>
            </div>
            <div class="col-md-3 text-center">
              <div class="icon">
                <i class="fa fa-list"></i>
                <h3>Playlists</h3>
                <p>New playlists weekly</p>
              </div>
            </div>
            <div class="col-md-3 text-center">
              <a href="song.php" target="_parent">
                <div class="icon">
                  <i class="fa fa-bar-chart"></i>
                  <h3>Chart</h3>
                  <p>Most played tracks right now</p>
                </div>
              </a>
          </div>
          <div class="col-md-3 text-center">
            <div class="icon">
              <i class="fa fa-music"></i>
              <h3>Genres</h3>
              <p>Explore many different types of music</p>
            </div>
        </div>
        </div>
      </section>
  </body>
</html>
