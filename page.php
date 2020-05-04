

<?php get_header() ?>

<main id="page">

    <div class="wrapper">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php
                endwhile;
            endif;
        ?>
    </div>


</main>

<?php get_footer(); ?>
<?php wp_footer(); ?>

</body>
</html>