<html>
    <head>
        <title>Login page</title>
        <link href="loginstyle/loginstyle.css" rel="stylesheet" type="text/css">
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="loginscript.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div id="login">
                <img src="svg/img2.svg" alt="img" id="svg">
                <h1>Login</h1>
                <div id="message"></div>
                <div>
                    <label for="email">Email Address:</label>
                    <input type="text" class="textbox" id="email" name="email" placeholder="Enter the email" required>
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" class="textbox" id="password" name="password" placeholder="Password" required>
                </div>
                <div>
                    <button type="submit" class="subbtn" id="sub" name="sub" value="submit">Login here</button>
                    <p class="reg">If not Registerd >><a href="index.php">Register Here</a> </p>
                </div>
            </div>
        </div>
    </body>
</html>

