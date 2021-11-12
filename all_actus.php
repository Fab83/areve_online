<?php 
    $title = 'Actualités';
    include 'components/header.php';
    require 'components/connexion.php'; 
?>
    <div class="container pt-5">
        <h2 class="greenUp pt-5 pb-4 text-center">Toutes les actualités</h2>
        <div class="row">
            <?php
            $donnees = $idconn->prepare('SELECT NEWS_ID, NEWS_TITLE, NEWS_CAT, NEWS_CONTENT, NEWS_DATE FROM news ORDER BY NEWS_ID DESC');
            $donnees->execute();
            $news = $donnees->fetchAll();
            foreach ($news as $new) { ?>
                <div class="col-md-4">
                    <?php
                    $id = $new['NEWS_ID'];
                    $title = $new['NEWS_TITLE'];
                    $cat = $new['NEWS_CAT'];
                    $date = $new['NEWS_DATE'];
                    $content = $new['NEWS_CONTENT'];
                    echo '<h5 class="greenUp" id="#' . $id . '">' . $title . '</h5>' . '<i>Catégorie : ' . $cat . '</i><br><i>Date de publication : ' . $date . '</i><p class="mt-1">' . $content . '</p><hr>';
                    ?>
                </div>
            <?php } ?>
=======
=======
>>>>>>> parent of 782ca79... version opérationnelle 8 10 21
=======
>>>>>>> parent of 782ca79... version opérationnelle 8 10 21
=======
>>>>>>> parent of 782ca79... version opérationnelle 8 10 21
<title>Actualités</title>
<?php require 'connexion.php'; ?>
	<div class="container pt-5">
		<h2 class="greenUp pt-5 pb-4 text-center">Toutes les actualités</h2>
		<div class="row">
                <?php
                $donnees=$idconn->prepare('SELECT NEWS_ID, NEWS_TITLE, NEWS_CAT, NEWS_CONTENT, NEWS_DATE FROM news ORDER BY NEWS_ID DESC');
                $donnees->execute();
                $news=$donnees->fetchAll();
                foreach($news AS $new) 
                { ?>
                    <div class="col-md-4">
                        <?php
                        $id = $new['NEWS_ID'];
                        $title = $new['NEWS_TITLE'];
                        $cat = $new['NEWS_CAT'];
                        $date = $new['NEWS_DATE'];
                        $content = $new['NEWS_CONTENT'];
                        echo '<h5 class="greenUp" id="#'.$id.'">'.$title.'</h5>'.'<i>Catégorie : '.$cat.'</i><br><i>Date de publication : '.$date.'</i><p class="mt-1">'.$content.'</p><hr>';
                        ?>
                    </div>
                <?php } ?>
            </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of 782ca79... version opérationnelle 8 10 21
=======
>>>>>>> parent of 782ca79... version opérationnelle 8 10 21
=======
>>>>>>> parent of 782ca79... version opérationnelle 8 10 21
=======
>>>>>>> parent of 782ca79... version opérationnelle 8 10 21
        </div>
    </div>

<?php include 'components/footer.php'; ?>