<?php
    include('myLib.php');
?>


<?php
    start_page("Calcul");
?>

<?php
    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];
    $op = $_GET['action'];

    echo "<h1> Calculatrice </h1>";

    echo "<p> Le résultat vaut: ";

    if ('*' == $op) {
        echo $op1 * $op2;
    }
    elseif ('+' == $op) {
        echo $op1 + $op2;
    }
    elseif ('-' == $op) {
        echo $op1 - $op2;
    }
    elseif ('/' == $op) {
        echo $op1 / $op2;
    }
    else {
        echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
    }

    echo "</p>";
?>

<?php
    end_page();
?>
