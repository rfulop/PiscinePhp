<?php
require_once("session.php");
  if ($_POST["login"] && $_POST["password"] && $_POST["submit"] === "OK")
  {
    if (!file_exists("dbs") || !file_exists("dbs/users"))
      exit;
    $tab = unserialize(file_get_contents("dbs/users"));
    $logged = 0;
    $pw = hash("whirlpool", $_POST["password"]);
    foreach ($tab as $user)
    {
      if ($user["login"] === $_POST["login"] && $user["password"] === $pw)
      {
        $priv = $user['priv'];
        $logged = 1;
        break;
      }
    }
    if (!$logged)
      echo "Wrong login or password";
    else {
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['priv'] = $priv;
      header("Location: index.php");
    }
  }
include 'header.php';

if (!$_SESSION['login'])
{
  ?>
 <body>
 <form method="post" action="login.php">
   <h2 class="centerP">Connexion</h2>
   <p>
     <label for="login" class="centerP">Login: </label>
     <input type="text" name="login" />
     <br />
     <label for="password" class="centerP">Password: </label>
     <input type="password" name="password" />
    <input type="submit" name="submit" value="OK"/>
   </form>
   <a class= "centerCon" href="create_account.php"><p class="centerP" class="centerCon">Create an account</p></a>
 </body>
<?php } ?>
