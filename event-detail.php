<html>

<head>
      <?php include_once('connection.php'); ?>
      <?php
      $query = "SELECT * FROM events";
      $result = mysqli_query($connection, $query);
      $data = mysqli_fetch_all($result);
      $row_count = mysqli_num_rows($result);
      $id = $_GET['id'];
      ?>
      <?php echo "<title>" . $data[$id][2] . "</title>"; ?>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
      <link rel='stylesheet' href='event-detail-styles.css'>
      <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
</head>

<body>
      <div class="background">
            <img src="<?php echo $data[$id][1] ?>" alt="Couldnt load">
      </div>
      <div class="container text-center">
            <div class="row" id='img-text'>
                  <div class="col-md-5 p-sm-4">
                        <div class='title'>
                              <?php echo $data[$id][2]; ?></div>

                        <div class='date'>
                              <?php echo $data[$id][3]; ?></div>
                  </div>
                  <div class="col-md-3"></div>
                  <div class="col-md-4 mt-sm-5 mt-3">
                        <div><a href=<?php echo "event-detail.php?id=" . $id . "&c=registration#collapsibleNavbar" ?> class="btn-danger p-sm-3 p-1">Register Now</a></div>
                  </div>
            </div>
      </div>
      <div></div>
      <nav class="navbar navbar-expand-md navbar-dark">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                        <li class="nav-item">
                              <a id="about" class="nav-link active" href=<?php echo "event-detail.php?id=" . $id . "&c=about#collapsibleNavbar" ?>>About</a>
                        </li>
                        <li class="nav-item">
                              <a id="rules" class="nav-link" href=<?php echo "event-detail.php?id=" . $id . "&c=rules#collapsibleNavbar" ?>>Rules</a>
                        </li>
                        <li class="nav-item">
                              <a id="registration" class="nav-link" href=<?php echo "event-detail.php?id=" . $id . "&c=registration#collapsibleNavbar" ?>>Registration</a>
                        </li>
                        <li class="nav-item">
                              <a id="gallery" class="nav-link" href=<?php echo "event-detail.php?id=" . $id . "&c=gallery#collapsibleNavbar" ?>>Gallery</a>
                        </li>
                  </ul>
            </div>
      </nav>

      <?php
      $c = $_GET['c'];
      if ($c) {
            if ($c == 'about') {
                  echo $data[$id][4];
            } elseif ($c == 'registration') {
                  echo "<div class='container text-center'>".$data[$id][6]."</div>";
            } elseif ($c == 'rules') {
                  echo $data[$id][5];
            } else if ($c = 'gallery') {
      ?>
                  <div class="carousel" data-flickity='{ "autoPlay": 1500,"wrapAround": true,"adaptiveHeight": true }'>
            <?php
                  $json = json_decode($data[$id][7], true);
                  for ($i = 0; $i < count($json['aa']); $i++) {
                        echo "<div class='carousel-cell'><img src=" . $json['aa'][$i] . " alt='Couldnt load'></div>";
                  }
                  echo "</div>";
            }
      } else {
      }
      // echo '<pre>';
      // print_r($data);
      // echo '</pre>'; 
            ?>
            <br><br>
            <script>
                  function activetab() {
                        console.log("abcd");
                        document.getElementById("about").classList.remove("active");
                        document.getElementById("rules").classList.remove("active");
                        document.getElementById("registration").classList.remove("active");
                        document.getElementById("gallery").classList.remove("active");
                        <?php
                        echo "document.getElementById('" . $_GET['c'] . "').classList.add('active');"; ?>
                  }
                  activetab()
            </script>
</body>

</html>