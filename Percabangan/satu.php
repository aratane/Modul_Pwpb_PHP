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
    ?>
</body>

</html>