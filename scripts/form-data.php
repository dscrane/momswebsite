<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Response</title>
  </head>
  <body>
    <p>
      {<br />
      &nbsp;&nbsp;First Name: <?php echo $_POST["first-name"]?> <br />
      &nbsp;&nbsp;Last Name: <?php echo $_POST["last-name"]?> <br />
      &nbsp;&nbsp;Email: <?php echo $_POST["email"]?> <br />
      &nbsp;&nbsp;Phone: <?php echo $_POST["phone"]?> <br />
      &nbsp;&nbsp;Message: <?php echo $_POST["message"]?> <br />
      }
    </p>
  </body>
</html>
