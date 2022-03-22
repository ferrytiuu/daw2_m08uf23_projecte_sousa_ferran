<?php

require 'vendor/autoload.php';
use Laminas\Ldap\Ldap;

$uid = $_POST['uid'];
$ou = $_POST['ou'];
$uidNumber = $_POST['uidNumber'];
$gidNumber = $_POST['gidNumber'];
$home = $_POST['home'];
$shell = $_POST['shell'];
$cn = $_POST['cn'];
$sn = $_POST['sn'];
$givenName = $_POST['givenName'];
$postalAddress = $_POST['postalAddress'];
$mobile = $_POST['mobile'];
$telephoneNumber = $_POST['telephoneNumber'];
$title = $_POST['title'];
$description = $_POST['description'];
$objcl = array('inetOrgPerson', 'organizationalPerson', 'person', 'posixAccount', 'shadowAccount', 'top');


$domini = 'dc=fjeclot,dc=net';
$opcions = [
    'host' => 'zend-fesolo.fjeclot.net',
    'username' => "cn=admin,$domini",
    'password' => 'Clotfje#2022',
    'bindRequiresDn' => true,
    'accountDomainName' => 'fjeclot.net',
    'baseDn' => 'dc=fjeclot,dc=net',
];

$ldaprecord['objectClass'] = $objcl;
$ldaprecord['uid'] = $uid;
$ldaprecord['uidNumber'] = $uidNumber;
$ldaprecord['gidNumber'] = $gidNumber;
$ldaprecord['home'] = $home;
$ldaprecord['shell'] = $shell;
$ldaprecord['cn'] = $cn;
$ldaprecord['sn'] = $sn;
$ldaprecord['givenName'] = $givenName;
$ldaprecord['postalAddress'] = $postalAddress;
$ldaprecord['mobile'] = $mobile;
$ldaprecord['telephoneNumber'] = $telephoneNumber;
$ldaprecord['title'] = $title;
$ldaprecord['description'] = $description;


$ldap = new Ldap($opcions);
$ldap->bind();

$dn ='uid='.$uid.',ou='.$ou.',dc=fjeclot,dc=net';

if ($ldap->add($dn, $ldaprecord)) {
    echo "Usuari creat <br />";
}

echo '<a href="menu.php"><button>Torna al menú</button></a>';


?>