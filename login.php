<html>

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://apis.google.com/js/platform.js" async defer></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <meta name="google-signin-client_id" content="321752907408-nbp4palhbdf87knhcvi9plnkq37l8km3.apps.googleusercontent.com">
      <title>Aavhan</title>
</head>

<body>
      <?php include_once('connection.php'); ?>
      <?php
      if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
            require_once 'C:\\Users\\TanmayHiremath\\vendor\\autoload.php';
            // echo "<b>".implode(" ",$_POST)."</b>";
            //Get $id_token via HTTPS POST.
            $id_token = $_POST['id_token'];
            $name = $_POST['name'];
            $image = $_POST['image'];
            $email = $_POST['email'];
            $CLIENT_ID = "321752907408-nbp4palhbdf87knhcvi9plnkq37l8km3.apps.googleusercontent.com";
            $jwt = new \Firebase\JWT\JWT;
            $jwt::$leeway = 10;
            $client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
            $payload = $client->verifyIdToken($id_token);
            if ($payload) {
                  $userid = $payload['sub'];
                  $checkQuery = "SELECT (SELECT userid FROM users WHERE userid = ".$userid.") AS userid;";
                  // $query = "INSERT INTO users VALUES ('$userid','$name','$email','$image');";
                  $result = mysqli_fetch_array(mysqli_query($connection, $checkQuery));
                  if(is_null($result['userid']))
                  echo "Account doesn't exist, Sign Up first";

                  header("Location: https://www.google.com");
                  // If request specified a G Suite domain:
                  //$domain = $payload['hd'];
            } else {
                 echo "<script>alert('Error, try again')</script>";
            }
      }
      ?>
      <div class="g-signin2" data-onsuccess="onSignIn"></div>
      <a href="#" onclick="signOut();">Sign out</a>
      <div id="hidden_form_container" style="display:none;"></div>
      <script>
            function onSignIn(googleUser) {
                  var profile = googleUser.getBasicProfile();
                  var id_token = googleUser.getAuthResponse().id_token;
                  //console.log('IDtoken : ' + id_token);
                  //console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
                  // console.log('Name: ' + profile.getName());
                  // console.log('Image URL: ' + profile.getImageUrl());
                  // console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
                  var theForm, in1, in2, in3, in4;
                  theForm = document.createElement('form');
                  theForm.action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>";
                  theForm.method = 'post';
                  // Next create the <input>s in the form and give them names and values
                  in1 = document.createElement('input');
                  in1.type = 'hidden';
                  in1.name = 'name';
                  in1.value = profile.getName();
                  in2 = document.createElement('input');
                  in2.type = 'hidden';
                  in2.name = 'image';
                  in2.value = profile.getImageUrl();
                  in3 = document.createElement('input');
                  in3.type = 'hidden';
                  in3.name = 'id_token';
                  in3.value = id_token;
                  in4 = document.createElement('input');
                  in4.type = 'hidden';
                  in4.name = 'email';
                  in4.value = profile.getEmail()
                  // Now put everything together...
                  theForm.appendChild(in1);
                  theForm.appendChild(in2);
                  theForm.appendChild(in3);
                  theForm.appendChild(in4);
                  document.getElementById('hidden_form_container').appendChild(theForm);
                  theForm.submit();
                  // fetch('http://localhost/sports/login.php', {
                  //             method: 'POST',
                  //             body: JSON.stringify(user),
                  //             headers: {
                  //                   'Content-type': 'application/json',
                  //                   'Accept': 'application/json'
                  //             }
                  //       })
                  //       .then(json => console.log(json))
            }

            function signOut() {
                  var auth2 = gapi.auth2.getAuthInstance();
                  auth2.signOut().then(function() {
                        console.log('User signed out.');
                  });
            }
      </script>

</body>

</html>