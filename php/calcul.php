<?php
    include('myLib.php');
?>


<?php
    start_page("Calcul");
?>

<?php
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];

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
