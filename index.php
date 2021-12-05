<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Report an issue!</title>
  </head>
  <body>
    <h1>Welcome! Here you can report any issues you have with our app...
      or just issues in general.</h1>
    <hr>

    <br>
    <div id="form">
    <form action="form.php">
      Your username:<input method="post" type="text" required name="username" placeholder="username"></input>
      <br>
      Your email address:<input method="post" type="email" name="email" required placeholder="email address"></input>
      <br>
      What issue do you have?<label for="issues"></label>
      <select style="font-family: 'Amatic SC', cursive;" name="issue" method="post" type="text">
        <option value="query">Query</option>
        <option value="feedback">Feedback</option>
        <option value="complaint">Complaint</option>
        <option id="other" value="other">Other</option>
      </select>
      <br>
    Describe your problem in detail:<input name="description" method="post" style="height: 100px;" style="text-align: left;" id="textbox" type="textarea" size="50" required placeholder="Tell us what bothers you in this world..."><br><br></input>
    <br>
  </div>
  <button id="button" method="post" type="submit" value="submit" class="primary" onclick="submit();">Resolve my issues!</button>
  <?php
  session_start(){
  if(isset($_POST["submit"])) {
  $_SESSION["username"] = $_POST["username"];
  $email = $_SESSION["email"];
  $issue = $_SESSION["issue"];
  $description = $_SESSION["description"];
}
}
  ?>
  </form>
  </body>
</html>
