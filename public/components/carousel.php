<?php

include( 'data/fake-posts.php' );

$title = "Facebook voor beginners";
?>

<div class="carousel">
    <h2 class="carousel__title"><?php echo $title ?></h2>

    <div class="carousel__wrapper">
        <span class="carousel__arrow-left"></span>
        
        <div class="carousel__slides">
            <?php foreach(items() as $item) : ?>
                <div class="slide">
                    <img src="<?php echo $item[ 'image' ][ 'url' ] ?>" alt="<?php echo $item[ 'image' ][ 'alt' ] ?>">
                    <!-- <span class="slide__image"></span> -->
                    <h4 class="slide__title"><?php echo $item[ 'title' ] ?></h4>
                </div>
            <?php endforeach;?>
        </div>
        
        <span class="carousel__arrow-right"></span>
    </div>

</div>