
<?php
    include_once('header.php');
?>

    <main>
        <div id="liste-oeuvres">
        <?php
         foreach ($oeuvres as $oeuvre)
         {
            echo 
            '<article class="oeuvre">
            <a href="oeuvre.php?id=' . $oeuvre['id'] . '">
                <img src="' . $oeuvre['image'] . '"alt="' . $oeuvre['title'] . '">
                <h2>' . $oeuvre['title'] . '</h2>
                <p class="description">' . $oeuvre['author'] . '</p>
            </a>
            </article>';
        }
        ?>
        </div>
    </main>
<?php include_once('footer.php'); ?>
