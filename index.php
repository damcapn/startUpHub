<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Start Up Hub </title>
   <?php require_once("lib/headutils.php");?>
    <link rel="stylesheet" href="lib/css/style.css">
    <link rel="short icon" href="lib/images/startUpLogo.ico"/>
  </head>

  <body>





  <div class="jumbotron">
    <!-- Button to open the modal login form -->
  <button onclick="document.getElementById('id01').style.display='block'">Login</button>

  <!-- The Modal -->
  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'"
  class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" action="action_page.php">
      <div class="imgcontainer">
        <img src="startUpLogo.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <input type="checkbox" checked="checked"> Remember me
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  </body>
</html>
