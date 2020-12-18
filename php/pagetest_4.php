<?php
    function start_page($title) {
        echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="pagetest 2" content="width=device-width, initial-scale=1.0">
                    <title>'.PHP_EOL. $title .'</title>
                </head>
                <body>' . PHP_EOL;
    }

    function end_page() {
        echo '</body></html>';
    }
?>

<?php start_page("Page Test 3"); ?>
    <hr/><br/><strong>Test</strong><br/><hr/>
    <?php
        $jour = date('d/m/Y');
        $jour2 = date('F d, Y, g:i a');
        echo '<p>' . $jour . '</p>';
        echo '<p>' . $jour2 . '</p>';
    ?>
<?php end_page(); ?>


