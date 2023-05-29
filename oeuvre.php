
    <?php
        include_once('header.php');
        $id = $_GET['id'];
        if ($id > 15 || $id <= 0 || $id == NULL || is_numeric($id)== false):
            header("Location: /The-Artbox-master/index.php");
        else :
            $oeuvre = array_search( $id, array_column( $oeuvres, 'id' ) );   
        endif;

        ?>
    <main>
    <article id="detail-oeuvre">
    
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$oeuvre]['image'];?>" alt="<?php echo $oeuvres[$oeuvre]['title'];?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$oeuvre]['title'];?></h1>
            <p class="description"><?php echo $oeuvres[$oeuvre]['author'];?></p>
            <p class="description-complete">
            <?php echo $oeuvres[$oeuvre]['description'];?>

            
        </div>
    </article>
</main>
<?php include_once('footer.php'); ?>


