<html>

<head>
      <?php include_once('connection.php'); ?>
      <?php
                        $query = "SELECT * FROM events";
                        $result = mysqli_query($connection, $query);
                        $data = mysqli_fetch_all($result);
                        $row_count = mysqli_num_rows($result);
                        $id=$_GET['id'];
                        ?>
      <?php echo "<title>".$data[$id][2]."</title>";?>
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
                  <img src="<?echo $data[$id][1]?>" alt="Couldnt load">
            </div>
      <div class="container text-center">
            <div class="row" id='img-text'>
                  <div class="col-sm-4 p-4" >
                        <div style='font-weight: 1000;font-size: 3rem;text-shadow: 2px 2px 4px #000000;'>
                        <?php echo $data[$id][2];?></div>

                        <div style='font-weight: 900;font-size: 1.75rem;text-shadow: 2px 2px 4px #000000;'>
                        <?php echo $data[$id][3];?></div>
                  </div>      
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4 mt-5">
                        <div><a href="#" class="btn-danger p-4">Register Now</a></div>
                  </div>
            </div>
      </div>
      <div></div>
      <ul class="nav nav-tabs">
      <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
      </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
      <div class="tab-pane container active" id="home">...</div>
      <div class="tab-pane container fade" id="menu1">...</div>
      <div class="tab-pane container fade" id="menu2">...</div>
      </div>
      <br><br>
</body>

</html>