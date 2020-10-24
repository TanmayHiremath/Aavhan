<html>

<head>
    <title>Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include_once('connection.php');?>     
    <div class="container mt-5">
        <div class="grid-container text-center">
        <?php 
        $query = "SELECT * FROM blog";
        $result = mysqli_query($connection, $query);
        $data = mysqli_fetch_all($result);
        $row_count = mysqli_num_rows($result);
        $headlines = array(0,1,2,3,4);
           echo "<div class='item1 grid-item'>
           <a href='blog.php?id=".$data[$headlines[0]][0]."'><img style='position:relative;width:30vw;height:20.25vw;' src=".$data[$headlines[0]][1]." alt='Couldn\'t load'>
                <div class='image-heading-lg'>".$data[$headlines[0]][2]."</div>
                <div class='image-author-lg'>".$data[$headlines[0]][3]."</div></a>
            </div>";

            for ($i=1; $i<5;$i++)
            echo "<div class='grid-item'>
            <a href='blog.php?id=".$data[$headlines[$i]][0]."'><img style='width: 15vw;height:10vw;' src=".$data[$headlines[$i]][1]." alt='Couldn't load'>
                <div class='image-heading-sm'>".$data[$headlines[$i]][2]."</div></a>               
            </div>"; ?>
        </div>
        <br><br>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="lostindianplayers" onclick="activetab()"  href="?c=lostindianplayers">Lost Indian Players</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="impactofcorona" onclick="activetab()" href="?c=impactofcorona">Impact of Corona</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="evolutionofsports" onclick="activetab()" href="?c=evolutionofsports">Evolution of sports</a>
            </li>
        </ul>
    </div>
    <div class='container'>        
    <?php
    if (mysqli_num_rows($result) != 0) {
        $count=0;
        for ($i=0; $i<$row_count;)
    {   if($data[$i][6]==$_GET['c']){
            
            if($count%2 == 0){echo "<div class='row'>";}
            if($count%2 == 1) {echo "<div class='col-md-2'></div>";}
            echo "<div class='col-md-5'><a href='blog.php?id=".$data[$i][0]."'><img class='img-lg' src=".$data[$i][1]." alt='Couldn't load' loading='lazy'>
            <div class='title'>".$data[$i][2]."</div>
            <div class='author float-left mr-2'>".$data[$i][3]."</div><div class='date float-left'>- ".$data[$i][5]."</div>
            <div class='clearfix'></div>
            <div class='description'>".$data[$i][4]."</div></a></div>";
            if($count%2 == 1) {echo "</div>";}
            $count=$count+1;
        }
            $i = $i+1;
        }
    } 
    else {
        echo "<div class='error'>No records found</div>";
    }
    ?></div>
        <?php //echo '<pre>'; print_r($data); echo '</pre>';?>

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
            $count=0;
            echo "document.getElementById('".$_GET['c']."').classList.add('active');";?>
            }
            activetab()
        </script>
</body>

</html>