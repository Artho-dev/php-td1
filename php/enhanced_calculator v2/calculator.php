<?php include('myLib.php'); ?>

<?php start_page("Calculatrice") ?>

    <h1> Calculatrice </h1>

    <form action="calcul.php" method="get">
        <div>
            <label for="op1"> Première Valeur: </label>
            <input type="text" id="op1" name="op1" required
                   minlength="1">

            <label for="op2"> Deuxième Valeur: </label>
            <input type="text" id="op2" name="op2" required
                   minlength="1">
        </div>

        <hr>

        <div>
            <?php $operateurs = '*+-/'; ?>
            <?php
            for ($i = 0; $i < strlen($operateurs); ++$i ) {
                echo '<button class="favorite styled"';
                echo 'type="submit" name="action" value="' . $operateurs[$i] . '"/>' . $operateurs[$i] . ' <br/>' . "\n";
            }
            ?>
        </div>

        <div>
        <button class="favorite styled"
                type="reset">
            Reset
        </button>
        </div>

    </form>
<?php end_page() ?>
