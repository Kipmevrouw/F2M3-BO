<HTML>
<HEAD>
<?php 
session_start();
?>
</HEAD>
<BODY>
    <?php
    if(isset($_SESSION['username']))
    {
        echo "Je bent ingelogd <a href='http://30957.hosts1.ma-cloud.nl/F1M3/BO/index.php'> klik hier </a> <br>Welkom ";
        echo $_SESSION['username'];
    }
    else
    {
        echo "Je bent uitgelogd";
    }
 ?>
 </BODY>
</HTML>