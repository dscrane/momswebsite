<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Response</title>
  </head>
  <body>
    <p>
      {
      First Name: <?php echo $_POST["first-name"]?>
      Last Name: <?php echo $_POST["last-name"]?>
      Email: <?php echo $_POST["email"]?>
      Phone: <?php echo $_POST["phone"]?>
      Message: <?php echo $_POST["message"]?>
      }
    </p>
  </body>
</html>
