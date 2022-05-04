<?php 
$int= mt_rand(1262055681,1262055681); 

$items = items( 'image270x128.png' );
?>

<div class="current-articles">
    <h2 class="current-articles__title">Actuele artikelen over social media</h2>

    <div class="current-articles__wrapper">
        <?php foreach($items as $item) : ?>
            <div class="article">
                <img class="article__image" src="<?php echo $item[ 'image' ][ 'url' ] ?>" alt="<?php echo $item[ 'image' ][ 'alt' ] ?>">
                <h4 class="article__title"><?php echo $item[ 'title' ] ?></h4>
                <small class="article__date"><?php echo $string = date( "j F", $int ); ?></small>
            </div>
        <?php endforeach;?>
    </div>

    <a href="#">Bekijk alle artikelen over social media</a>

</div>