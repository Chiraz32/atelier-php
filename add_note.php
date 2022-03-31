<?php
session_start();
 if (isset($_SESSION["index"]))
 {
     $_SESSION["index"]++;
 }
 else {
     $_SESSION["index"] = 0;
 }
 $_SESSION["note"][$_SESSION["index"]]=$_POST["note"];
 header("location:affichenote.php");

