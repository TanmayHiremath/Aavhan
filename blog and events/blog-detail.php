<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('connection.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM blog";
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_all($result); ?>
    <title><?php echo $data[$id][2] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container my-5">
        <?php
        echo "<h1>" . $data[$id][2] . "</h1>
<div class='row mt-5'>
<div class='author col-md-5 mr-2'>By " . $data[$id][3] . "</div>
<div class='date col-md-5'>Published on " . $data[$id][5] . "</div><div class='col-md-2'></div></div>";
        echo $data[$id][7] ?>

    </div>
</body>

</html>