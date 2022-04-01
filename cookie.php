
<?php


if (isset($_COOKIE["user"]) )
{?>
    <script>
   alert( 'vous avez deja voté  <?=$_COOKIE["user"] ?> ')
       </script>
<?php }
    else
    {$cookie_name = "user";
        $cookie_value = $_POST["degree"];
        setcookie($cookie_name, $cookie_value, time() + (2*60), "/"); // 86400 = 1 day

        ?>
        <script> alert( "vote enregistré" )</script>
        <?php

    }

