<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_POST['submit'])) {
        if (empty($_POST['username'])) {
          echo "<p style='color:red'>Field must not be empty</p>";
        }
        elseif (strlen($_POST['username'])<5 || strlen($_POST['username'])>10            ) {
            echo "<p Style='color:red'>Field must not be empty</p>";
        }else{
            echo "Welcome: ".$_POST['username'];
        }
      }
    ?>


    <form class="" action="" method="post">
      <input type="text" name="username" value="" placeholder="User name"><br>
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
