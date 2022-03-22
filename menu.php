<?php
?>  
	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Menú</title>
<style>
body {
	font-family: Arial;
}
</style>
</head>
<body>
	<form action="./index.php" method="POST">
            <input type="submit" value="Tanca la sessió">
    </form><br>
    
	<h2>Visualitzar usuaris</h2>
	<form action="visualitzarUsuaris.php" method="POST">
        <label for="uid">UID</label>
        <input type="text" id="uid" name="uid"><br>
        <label for="ou">OU</label>
        <input type="text" id="ou" name="ou"><br>
        <input type="submit" value="Visualitza">
    </form>
    
	<h2>Afegir usauris</h2>
	<form action="afegirUsuaris.php" method="POST">
		<label for="uid">UID</label>
        <input type="text" id="uid" name="uid">&emsp;&emsp;&emsp;&emsp;
		<label for="ou">OU</label>
        <input type="text" id="ou" name="ou"><br>
		<label for="uidNumber">uidNumber</label>
        <input type="text" id="uidNumber" name="uidNumber">&emsp;
		<label for="gidNumber">gidNumber</label>
        <input type="text" id="gidNumber" name="gidNumber"><br>
		<label for="home">Home</label>
        <input type="text" id="home" name="home">&emsp;&emsp;&emsp;
		<label for="shell">Shell</label>
        <input type="text" id="shell" name="shell"><br>
		<label for="cn">CN</label>
        <input type="text" id="cn" name="cn">&emsp;&emsp;&emsp;&emsp;
		<label for="sn">SN</label>
        <input type="text" id="sn" name="sn"><br>
		<label for="givenName">givenName</label>
        <input type="text" id="givenName" name="givenName">&emsp;
		<label for="postalAddress">postalAddress</label>
        <input type="text" id="postalAddress" name="postalAddress"><br>
		<label for="mobile">mobile</label>
        <input type="text" id="mobile" name="mobile">&emsp;&emsp;&emsp;
		<label for="uid">telephoneNumber</label>
        <input type="text" id="telephoneNumber" name="telephoneNumber"><br>
		<label for="title">Title</label>
        <input type="text" id="title" name="title">&emsp;&emsp;&emsp;&emsp;
		<label for="description">Description</label>
        <input type="text" id="description" name="description"><br>
        <input type="submit" value="Crea">
    </form>
	
</body>
</html>

