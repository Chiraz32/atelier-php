<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/pulse/bootstrap.min.css" integrity="sha384-L7+YG8QLqGvxQGffJ6utDKFwmGwtLcCjtwvonVZR/Ba2VzhpMwBz51GaXnUsuYbj" crossorigin="anonymous">
    <title>Title</title>
</head>
<body class="container">
<h1>Vos notes </h1>
<?php
if (isset($_SESSION ["note"]))
{foreach ($_SESSION ["note"]as $index =>$note )
{ ?>
    <div> <?=$note?>  </div>
    <?php
}}

?>
<form action= "add.html" method="post" >
   <BR>
    <button type="submit" class="btn btn-primary">Add Note</button>

</form>
</body>
</html>