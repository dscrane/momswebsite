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
      First Name: <?php echo $_POST["first-name"]?> <br />
      Last Name: <?php echo $_POST["last-name"]?> <br />
      Email: <?php echo $_POST["email"]?> <br />
      Phone: <?php echo $_POST["phone"]?> <br />
      Message: <?php echo $_POST["message"]?> <br />
      }
    </p>
  </body>
</html>
