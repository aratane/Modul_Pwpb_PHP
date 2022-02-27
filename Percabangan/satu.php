<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan Perintah If</title>
</head>

<body>
    <?php
    // perintah if
    $sudut = 50;
    if ($sudut < 90) {
        echo "Besar sudut $sudut derajat adalah sudut lancip";
    }

    //perintah if else
    $sudut = 92;
    if ($sudut < 90) {
        echo "Besar sudut $sudut derajat adalah sudut lancip";
    } else {
        echo "Sudut $sudut derajat bukan sudut lancip";
    }

    // perintah if else if
    $sudut = 360;
    if ($sudut < 90) {
        echo "Sudut lancip";
    } else if ($sudut < 180) {
        echo "Sudut tumpul";
    } else if ($sudut == 180) {
        echo "Sudut lurus";
    } else {
        echo "Bukan sudut lancip, tumpul, maupun lurus";
    }

    // perintah switch
    $sudut = 360;
    switch ($sudut) {
        case ($sudut < 90):
            echo "Sudut lancip";
            break;
        case ($sudut < 180):
            echo "Sudut tumpul";
            break;
        case ($sudut == 180):
            echo "Sudut lurus";
            break;
        default:
            echo "Bukan sudut lancip, tumpul, maupun lurus";
    }

    // perintah for
    for ($x = 1; $x <= 100; $x++) {
        echo "Angka $x <br>";
    }

    // perintah while
    $i = 1;
    while ($i <= 6) {
        echo "<h$i>Ini adalah contoh heading $i <h$i>";
        $i++;
    }

    // perintah do-while
    $i = 1;
    do {
        echo "ini perulangan yg ke - $i <br>";
        $i++;
    } while ($i <= 6);

    // perintah foreach
    $a = array("Surakarta", "Jakarta", "Yogyakarta");
    foreach ($a as $data) {
        echo "$data <br>";
    }


    // fungsi pada php
    function calculate()
    {
        $a = 75;
        $b = 5;
        echo $a / $b;
    }
    calculate();

    function calculate2($a, $b, $c = 10)
    {
        echo $a / $b - $c;
    }
    calculate2(75, 5);
    ?>
</body>

</html>