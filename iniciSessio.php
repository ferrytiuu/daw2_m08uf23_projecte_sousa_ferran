<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

$user = $_POST["user"];
$password = $_POST["password"];

$opcions = [
    'host' => 'zend-fesolo.fjeclot.net',
    'username' => $user,
    'password' => $password,
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];

$ldap = new Ldap($opcions);
/*if ($ldap->bind()){
    echo 'Connexió correcta';
}else{
    die('Connexió incorrecta');
}*/

try {
    $ldap->bind();
    header('location:menu.html');
} catch (Throwable $e) {
    echo '<p>Credencials incorrectes. Torna a intentar-ho.</p>
        <a href="index.html"><button>Inici</button></a>';
}



?>