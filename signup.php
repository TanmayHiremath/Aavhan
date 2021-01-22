<?php session_start(); ?>
<html>

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <meta name="google-signin-client_id" content="321752907408-nbp4palhbdf87knhcvi9plnkq37l8km3.apps.googleusercontent.com">
      <title>Aavhan</title>
</head>

<body>
      <?php include_once('connection.php'); ?>
      <?php
      $user = $_SESSION['user'];
      $userid = $user['userid'];
      $name = $user['name'];
      $image = $user['image'];
      $email = $user['email'];
      if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {

            if (isset($user['userid'])) {
                  $gender = $_POST['gender'];
                  $phone = $_POST['phone'];
                  $fb_url = $_POST['fb_url'];
                  $ig_url = $_POST['ig_url'];
                  $clg_state  = $_POST['clg_state'];
                  $clg_district = $_POST['clg_district'];
                  $clg_name = $user['clg_name'] = $_POST['clg_name'];
                  $year_study =  $_POST['year_study'];
                  $pass_year = $_POST['pass_year'];
                  $_SESSION['user'] = $user;
                  $CLIENT_ID = "321752907408-nbp4palhbdf87knhcvi9plnkq37l8km3.apps.googleusercontent.com";
                  $checkQuery = "SELECT (SELECT userid FROM users WHERE userid = " . $userid . ") AS userid;";
                  $result = mysqli_fetch_array(mysqli_query($connection, $checkQuery));
                  if (is_null($result['userid'])) {
                        $query = "INSERT INTO users (userid,name,email,image,gender,phone,fb_url,ig_url,clg_state,clg_district,clg_name,year_study,pass_year) VALUES ('$userid','$name','$email','$image','$gender',$phone,'$fb_url','$ig_url','$clg_state','$clg_district','$clg_name',$year_study,$pass_year);";
                        mysqli_query($connection, $query);
                        $_SESSION["login_time_stamp"] = time();
                        header("Location: profile.php");
                  }
            } else
                  echo "<script>location.href = 'login.php';</script>";
      }

      ?>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label> Name </label>
            <input type="text" name="name" size="100" value='<?php echo "$name" ?>' disabled /> <br> <br>

            <label> Email </label>
            <input type="text" name="email" size="100" value='<?php echo "$email" ?>' disabled /> <br><br>

            <label>
                  Gender :
            </label><br>
            <select name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
            </select>
            <br>
            <br>
            <label> Phone No. </label>
            <input type="text" name="country code" value="+91" size="2" disabled />
            <input type="tel" name="phone" pattern="[0-9]{10}" size="10" required> <br> <br>
            <label> Facebook Profile URL </label>
            <input type="text" name="fb_url" size="100" placeholder='Optional' /> <br> <br>
            <label> Instagram Profile URL </label>
            <input type="text" name="ig_url" size="100" placeholder='Optional' /> <br> <br>
            <label> College State </label>
            <input type="text" name="clg_state" size="100" /> <br> <br>
            <label> College District </label>
            <input type="text" name="clg_district" size="100" /> <br> <br>
            <label> College Name </label>
            <input type="text" name="clg_name" size="100" /> <br> <br>

            <label>Year Of Study</label>
            <input type="number" name="year_study" min="1" max="6" /><br> <br>
            <label>Year Of Passing Out</label>
            <input type="number" name="pass_year" pattern="[2][0][2][0-9]"><br> <br>
            <button type="submit">Submit</button>
      </form>
</body>

</html>