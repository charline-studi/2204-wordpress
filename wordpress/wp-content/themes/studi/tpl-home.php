<?php 
/* Template Name: Modèle page d'accueil */
?>

<?php get_header() ?>

<main>

    <section>

        <?php $urlImage = get_field('cover')['url']; ?>
        <?php $altImage = get_field('cover')['alt']; ?>
        <img src="<?php echo $urlImage ?>" alt="<?php echo $altImage ?>">

        <h1>
            <?php the_title() ?>
        </h1>

        <p>
            <?php the_field('intro') ?>
        </p>

    </section>

</main>



<?php get_footer() ?>