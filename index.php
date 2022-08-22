<!DOCTYPE html>
<html>
<head>
    <title>Register page</title>
    <link rel="stylesheet" href="registrationstyle/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head> 
<body>
  <form class="modal-content" id="form" name="form">
    <div class="container">
      <img src="svg/img1.svg" alt="img" class="svg"><h1>REGISTRATION</h1>
           
      <label for="name">Name:</label>
      <input type="text" name="name" placeholder="Enter name" required>

      <label for="email">Email address:</label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="number">Mobile Number:</label>
      <input type="text" placeholder="Enter number" name="number" required>

      <div class="clearfix">
      <button type="submit" class="signupbtn" id="btn" value="SEND">Register here</button>
      </div>
      <br><br><br><p class="login"> Already Registerd can login page >><a href="login.php">Login Here</a></p>
      <div id="msg"></div>
      </div>
    </div>
  </form>
</div>
<script src="script.js"></script>
</body>
</html>
