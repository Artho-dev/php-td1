<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="pagetest 2" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $var1 = 6;
        $var2 = 1.3;
        $var3 = 'Variable 3';
    ?>
</head>
<body>

    <?php
        echo '<strong> Voici mon premier programme PHP </strong>' . "\n";
        echo 'C\'est pas mal non ? <br/>';

     ?>
    <?php
        echo "$var1 + $var2";
    ?>
    <?php
        echo $var1 + $var2;
    ?>
    <?php
        //echo $var1 . $var3;
    ?>

</body>
</html>
