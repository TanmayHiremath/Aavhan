<html>

<head>
    <?php include_once('connection.php'); ?>
    <title>Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>

    <div class="container mt-5">
        <div class="headlines lg-screen row no-gutters">
            <?php
            $query = "SELECT * FROM blog";
            $result = mysqli_query($connection, $query);
            $data = mysqli_fetch_all($result);
            $row_count = mysqli_num_rows($result);
            $headlines = array(0, 1, 2, 3, 4);
            echo "<div class='col-sm-6'>
           <a href='blog-detail.php?id=" . $data[$headlines[0]][0] . "'><img class='img-lg' style='max-width: 100%;' src=" . $data[$headlines[0]][1] . " alt='Couldnt load'>
                <div class='image-heading-lg'>" . $data[$headlines[0]][2] . "</div>
                <div class='image-author-lg'>" . $data[$headlines[0]][3] . "</div></a>
            </div>";


            echo "<div class='col-sm-6'>
            <div class='row no-gutters'>
                <div class='col-sm-6'>
                    <a href='blog-detail.php?id=" . $data[$headlines[1]][0] . "'><img class='img-sm' style='max-width: 100%;' src=" . $data[$headlines[1]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[1]][2] . "</div></a>
                 </div>
                <div class='col-sm-6'>
                    <a href='blog-detail.php?id=" . $data[$headlines[2]][0] . "'><img class='img-sm' style='max-width: 100%;' src=" . $data[$headlines[2]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[2]][2] . "</div></a>  
                </div>  
            </div>  
            <div class='row no-gutters'>
                <div class='col-sm-6'>
                    <a href='blog-detail.php?id=" . $data[$headlines[3]][0] . "'><img class='img-sm' style='max-width: 100%;' src=" . $data[$headlines[3]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[3]][2] . "</div></a>
                </div>
                <div class='col-sm-6'>
                    <a href='blog-detail.php?id=" . $data[$headlines[4]][0] . "'><img class='img-sm' style='max-width: 100%;' src=" . $data[$headlines[4]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[4]][2] . "</div></a>  
                </div>  
            </div>    
                
                
            </div>"; ?>
        </div>

        <div class="sm-screen">
            <div class="container-fluid mb-2" style="position:relative;">
                <?php echo "
           <a href='blog-detail.php?id=" . $data[$headlines[0]][0] . "'><img style='max-width: 100%;filter: grayscale(5%);filter: brightness(70%);' src=" . $data[$headlines[0]][1] . " alt='Couldn\'t load'>
                <div class='image-heading-lg' style='left: 10%;right: 10%;font-size: 1.5rem;'>" . $data[$headlines[0]][2] . "</div>
                <div class='image-author-lg' style='left: 10%;'>" . $data[$headlines[0]][3] . "</div></a>"; ?>
            </div>
            <div class="carousel" data-flickity='{ "autoPlay": 1500,"wrapAround": true }'>
                <div class="carousel-cell">
                    <?php echo "<a href='blog-detail.php?id=" . $data[$headlines[1]][0] . "'><img style='max-width: 100%;' src=" . $data[$headlines[1]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[1]][2] . "</div></a>" ?>
                </div>
                <div class="carousel-cell">
                    <?php echo "<a href='blog-detail.php?id=" . $data[$headlines[2]][0] . "'><img style='max-width: 100%;' src=" . $data[$headlines[2]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[2]][2] . "</div></a>" ?>
                </div>
                <div class="carousel-cell">
                    <?php echo "<a href='blog-detail.php?id=" . $data[$headlines[3]][0] . "'><img style='max-width: 100%;' src=" . $data[$headlines[3]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[3]][2] . "</div></a>" ?>
                </div>
                <div class="carousel-cell">
                    <?php echo "<a href='blog-detail.php?id=" . $data[$headlines[4]][0] . "'><img style='max-width: 100%;' src=" . $data[$headlines[4]][1] . " alt='Couldnt load'>
                    <div class='image-heading-sm'>" . $data[$headlines[4]][2] . "</div></a>" ?>
                </div>
            </div>
        </div>


        <br><br>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="lostindianplayers" onclick="activetab()" href="?c=lostindianplayers">Lost Indian Players</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="impactofcorona" onclick="activetab()" href="?c=impactofcorona">Impact of Corona</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="evolutionofsports" onclick="activetab()" href="?c=evolutionofsports">Evolution of sports</a>
            </li>
        </ul>
    </div>
    <br><br>
    <div class='container'>
        <?php
        if (mysqli_num_rows($result) != 0) {
            $count = 0;
            for ($i = 0; $i < $row_count;) {
                if ($data[$i][6] == $_GET['c']) {

                    if ($count % 2 == 0) {
                        echo "<div class='row'>";
                    }
                    if ($count % 2 == 1) {
                        echo "<div class='col-md-2'></div>";
                    }
                    echo "<div class='col-md-5'><a href='blog-detail.php?id=" . $data[$i][0] . "'><img class='thumbnail' src=" . $data[$i][1] . " alt='Couldnt load' loading='lazy'>
            <div class='title'>" . $data[$i][2] . "</div>
            <div class='author float-left mr-2'>" . $data[$i][3] . "</div><div class='date float-left'>- " . $data[$i][5] . "</div>
            <div class='clearfix'></div>
            <div class='description'>" . $data[$i][4] . "</div></a></div>";
                    if ($count % 2 == 1) {
                        echo "</div>";
                    }
                    $count = $count + 1;
                }
                $i = $i + 1;
            }
        } else {
            echo "<div class='error'>No records found</div>";
        }
        ?></div><br><br>
    <?php //echo '<pre>'; print_r($data); echo '</pre>';
    ?>

    <script>
        function activetab() {
            console.log("abcd");
            document.getElementById("lostindianplayers").classList.remove("active");
            document.getElementById("impactofcorona").classList.remove("active");
            document.getElementById("evolutionofsports").classList.remove("active");
            // $("#lostindianplayers").removeclass("active");
            // $("#impactofcorona").removeclass("active");
            // $("#evolutionofsports").removeclass("active");
            <?php
            $count = 0;
            echo "document.getElementById('" . $_GET['c'] . "').classList.add('active');"; ?>
        }
        activetab()
    </script>
</body>

</html>