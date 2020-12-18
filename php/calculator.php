<?php include('myLib.php'); ?>

<?php start_page("Calculatrice") ?>

    <h1> Calculatrice </h1>

    <form action="calcul.php" method="post">
        <div>
            <label for="op1"> Première Valeur: </label>
            <input type="text" id="op1" name="op1" required
                   minlength="1">
            <div>
            <input checked="checked" type="radio" name="op" value="*"/>*<br/>
            <input type="radio" name="op" value="+"/>+<br/>
            <input type="radio" name="op" value="-"/>-<br/>
            <input type="radio" name="op" value="/"/>/<br/>
            </div>

            <label for="op2"> Deuxième Valeur: </label>
            <input type="text" id="op2" name="op2" required
                   minlength="1">
        </div>

        <hr>

        <button class="favorite styled"
                type="submit">
            Calculer
        </button>

    </form>
<?php end_page() ?>
