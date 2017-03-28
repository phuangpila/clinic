<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
    <link rel="stylesheet" href="assets/login/normalize.min.css">
    <link rel="stylesheet" href="assets/login/style.css">
    <script src="assets/login/prefixfree.min.js"></script>

</head>

<body>
  <div class="login">
    <h1>Login</h1>
    <form method="post" action="chk_login.php">
        <input type="text" name="user_name" placeholder="Username" required="required" />
        <input type="password" name="pass_word" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>
