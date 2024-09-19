<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test php info</title>
</head>
<body>

<?php
$i = 3; 

if ($i >= 2) {
    echo "<p>Variabeln \$i är större än eller lika med 2.</p>";
} else {
    echo "<p>Variabeln \$i är mindre än 2.</p>";
}

$kallesYrke = "kodare";

if ($kallesYrke == "kodare") {
    $svar = "Kalle är en kodare.";
} elseif ($kallesYrke == "svetsare") {
    $svar = "Kalle är en svetsare.";
} elseif ($kallesYrke == "kock") {
    $svar = "Kalle är en kock.";
} else {
    $svar = "Vet inte vad Kalle gör.";
}

echo "<p>$svar</p>";




$kallesYrke1 = "kodare";

switch ($kallesYrke1) {
    case "kodare":
        $svar1 = "Kalle är en kodare.";
        break;
    case "svetsare":
        $svar1 = "Kalle är en svetsare.";
        break;
    case "kock":
        $svar1 = "Kalle är en kock.";
        break;
    default:
        $svar1 = "Vet inte vad Kalle gör.";
        break;
}

echo "<p>$svar1</p>";


$x = 5; 

if ($x > 2 && $x < 10) {
    echo "<p>Variabeln \$x är större än 2 och mindre än 10.</p>";
} else {
    echo "<p>Variabeln \$x är inte i intervallet 2-10.</p>";
}

echo date('D') . "<br>";

$today = date("D"); 

if ($today == "Mon") {
    echo "Idag är det måndag.";
} elseif ($today == "Tue") {
    echo "Idag är det tisdag.";
} elseif ($today == "Wed") {
    echo "Idag är det onsdag.";
} elseif ($today == "Thu") {
    echo "Idag är det torsdag.";
} elseif ($today == "Fri") {
    echo "Idag är det fredag.";
} elseif ($today == "Sat") {
    echo "Idag är det lördag.";
} elseif ($today == "Sun") {
    echo "Idag är det söndag.";
} else {
    echo "Ogiltigt värde.";
}


?>


    
</body>
</html>
