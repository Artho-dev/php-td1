<?php include('myLib.php'); ?>

<?php start_page("Calculatrice") ?>

    <h1> Calculatrice </h1>

    <form action="calcul.php" method="post">
        <div>
            <label for="op1"> Première Valeur: </label>
            <input type="text" id="op1" name="op1" required
                   minlength="1">
            <div>
                <?php $operateurs = '*+-/'; ?>
                <?php
                    for ($i = 0; $i < strlen($operateurs); ++$i ) {
                        echo '<input ';
                        if($i == 0)
                        {
                            echo 'checked="checked" ';
                        }
                        echo 'type="radio" name="op" value="' . $operateurs[$i] . '"/>' . $operateurs[$i] . ' <br/>' . "\n";
                    }
                ?>
            </div>

            <label for="op2"> Deuxième Valeur: </label>
            <input type="text" id="op2" name="op2" required
                   minlength="1">
        </div>

        <hr>

        <button class="favorite styled"
                type="submit">
            Envoyer
        </button>

    </form>
<?php end_page() ?>
