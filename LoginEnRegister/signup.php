<html>
    <head>
        <title>Hier kunt u zich aanmelen</title>
</head>
<body>
    <?php
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];

    if($password1 !== $password2)
    {
        echo "Wachtwoorden komen niet overeen. Klik <a href='signup.html'>hier</a> om terug te gaan";
        exit();
    };

    $host = "127.0.0.1";
    $user = "c5708tijmen";
    $pass = "Srv_C4DeC9b";
    $db = "c5708bo";

    $mysqli = new mysqli($host,$user,$pass,$db);
    if ($mysqli -> connect_errno)
    {
        echo "fout met connectie db:" . $mysqli -> connect_error;
        exit();
    }
    else
    {
        $hash = password_hash($password1, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (id, username, password, voornaam, achternaam, email) VALUES (NULL, '$username', '$hash', '$voornaam', '$achternaam', '$email')";
        $result = $mysqli -> query($sql);
        echo "Je hebt succesvol een account aangemaakt, ga naar <a href='login.html'> 
        de loginpagina </a> om je aan te melden"; 
        
    }
    ?>
</body>