<?php error_reporting(0);

          if ($_POST['status'] == '1'){
            header('refresh : 0.1; admin_index.php');
          }else  if ($_POST['status'] == '2'){
            header('refresh : 0.1; emp_index.php');
          }else  if ($_POST['status'] == '3'){
            header('refresh : 0.1; doc_index.php');
          }


?>
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
    <form method="post" action="index.php">
        <input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <select name="status" id="">
          <option value="1">ADMIN</option>
          <option value="2">พนักงาน</option>
          <option value="3">หมอ</option>
        </select>
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>
