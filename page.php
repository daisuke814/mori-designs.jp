

<?php get_header() ?>

<main>

    <div class="wrapper">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                    ?>
                    <h2>
                        <?php the_time('Y年n月j日'); ?>&nbsp;&nbsp;
                        <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <hr>
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