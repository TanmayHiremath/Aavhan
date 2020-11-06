<html>
<head>
        <?php include_once('connection.php'); ?>
        <title>Events List</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://unpkg.com/flickity@2/dist/flickity.min.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
        <link rel='stylesheet' href='event-list-styles.css'>
        <script src='https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js'></script>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
</head>
<body>
        <div class="container">
                <div class='row'>
                        <?php
                        $query = "SELECT * FROM events";
                        $result = mysqli_query($connection, $query);
                        $data = mysqli_fetch_all($result);
                        $row_count = mysqli_num_rows($result);
                        echo "
                        <div class='col-sm-8'>
                        <a href=event-detail.php?id=".$data[0][0].">
                        <div class='img-container'><img class='img-lg' src='" . $data[0][1] . "' alt='couldnt load'>
                        <div style='height:20%!important' class='black-bg'>
                        <div style='font-size:1.75rem' class='caption'>" . $data[0][2] . "</div>
                        <div class='date'>" . $data[0][3] . "</div>
                        </div></div></a>
                        </div>
                        <div class='col-sm-4'>
                                <div class='row'>
                                        <div class='col-sm-12'>
                                                <a href=event-detail.php?id=".$data[1][0].">
                                                <div class='img-container'>
                                                <img class='img-sm' src='" . $data[1][1] . "' alt='couldnt load'>
                                                <div class='black-bg'>
                                                <div class='caption'>" . $data[1][2] . "</div>
                                                <div class='date'>" . $data[1][3] . "</div>
                                                </div></div></a>
                                                <a href=event-detail.php?id=".$data[2][0].">
                                                <div class='img-container'>
                                                <img class='img-sm' src='" . $data[2][1] . "' alt='couldnt load'>
                                                <div class='black-bg'>
                                                <div class='caption'>" . $data[2][2] . "</div>
                                                <div class='date'>" . $data[2][3] . "</div></div></div></a>
                                        </div>
                                </div>
                        </div>";
                        if (mysqli_num_rows($result) != 0) {
                                for ($i = 0; $i < $row_count; $i++) {
                                        echo "
                                        <div class='col-sm-4'>
                                        <a href=event-detail.php?id=".$data[$i][0].">
                                        <div class='img-container'>
                                        <img class='img-sm' loading='lazy' src='" . $data[$i][1] . "' alt='couldnt load'>
                                        <div class='black-bg'><div class='caption'>" . $data[$i][2] . "</div>
                                        <div class='date'>" . $data[$i][3] . "</div></div>
                                        </div></a>
                                        </div>";
                                }
                        } ?>


                </div>
        </div>
</body>

</html>