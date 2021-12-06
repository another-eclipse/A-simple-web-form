<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Review your issues. Is everything right?</title>
  </head>
  <body>

    <?php
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $issue = $_REQUEST["issue"];
    $description = $_REQUEST["description"]; ?>

  <?php  echo "<h1>Review your issues. Is everything right?</h1>"; ?>
    <?php echo "So... You said your name is $username.\n"; ?>
    <br>
    <?php echo "Your email is $email.\n"; ?>
    <br>
    <?php echo "Type of issue that bothers you the most is '$issue'. \n"; ?>
    <br>
    <?php echo "You described it as: $description."; ?>
    <br>
    <hr>
    If you've mentioned everything, press "Unburden my mind".
    <br>
    If you've got more issues, go back and add them.
    <br>
    <br>
<form method="get" action="final.php">
    <button type="submit">Unburden my mind</button>
  </form>


  </body>
  </html>
