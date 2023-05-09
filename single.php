<?php get_header(); ?>

<main class="container my-3">
    <?php if(have_posts()){
        while(have_posts()){
            the_post();
        ?>
            <div class="row">
                <div class="col-4">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="col-8">
                    <h1 class="my-3"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <div class="row">
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-success">💰Comprar ahora</button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-primary">🛒 Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    } ?>
</main>

<?php get_footer(); ?>