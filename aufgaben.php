
<!-- Aufgabe 1 -->
<h1> Aufgabe 1 </h1>
<?php
for ($a = 0; $a <= 100; $a++) {
    echo "$a <br>";
    }

 echo "<br><br><br><br>";

for ($a = 100; $a >= 0; $a--) {
    echo "$a <br>";
    }
    ?>
<h1> Aufgabe 2 </h1>
<!-- Aufgabe 2 -->
<?php

$letters = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O", "P", "Q","R","S","T", "U","V", "W", "X", "Y", "Z" ];

$i = 0;

while($i < count($letters))
{
    echo $letters[$i]."<br>";
    $i++;
}

?>
<h1> Aufgabe 3 </h1>
<!-- Aufgabe 3 -->
<?php

$i= 11;
do {

    echo "$i". " PHP macht Spaß";
    $i--;
    echo"<br>";
    
    
    } while ( $i>5)


?>
<h1> Aufgabe 4 </h1>
<!-- Aufgabe 4 -->
<?php
$cars = [
    "BMW" => "7er",
    "Mercedes" => "A-Klasse",
    "Nissan"  => "X-Trail",
];
foreach($cars as $marke => $serie) {
    echo "Die Marke $marke mit der Serie $serie <br>";
}


?>
<h1> Aufgabe 5 </h1>
<!-- Aufgabe 5 -->
<?php
 echo "
Bei GET sieht der User, welche Daten übergeben werden <br>
Bei GET ist die Länge begrenzt, bei POST nicht <br>
Die Seite eines GET-Formulars kann man bookmarken, da alle nötigen Informationen in der URL enthalten sind <br>
Die Seite eines POST-Formulars kann man weder bookmarken noch im Browser aktualisieren, da die Daten nicht mehr zur Verfügung stehen <br>
File-Upload ist nur mit POST möglich
";


?>
<h1> Aufgabe 6 </h1>
<!-- Aufgabe 6 -->
<?php

// $h = 180;
// $w = 58;
// $KOF = (sqrt($h * $w / 3600));
// echo round($KOF, 2);

if(isset($_POST["Körperoberfläche"])){
    $h = $_POST["H"];
    $w = $_POST["W"];
    $KOF = (sqrt($h * $w / 3600));
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="aufgaben.php">
<input type="number" placeholder="Größe" name="H" value="<?php if(isset($h)) echo $h;?>" >
<input type="number" placeholder="Gewicht" name="W" value="<?php if(isset($w)) echo $w;?>" >
<input type="submit" name="Körperoberfläche" value="Abschicken">
</form>
</body>
</html>

<?php
echo round($KOF, 2);
?>
