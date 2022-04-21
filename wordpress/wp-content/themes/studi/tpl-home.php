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

    <section>

        <h2>À propos de moi</h2>

        <p>
            <?php the_field('text_about')?>
        </p>

        <?php $link = get_field('link') ?>
        <?php $url = $link['url'] ?>
        <?php $title = $link['title'] ?>
        <?php $target = $link['target'] ?>

        <a href="<?php echo $url ?>" target="<?php echo $target?>">
            <?php echo $title ?>
        </a>

    </section>

    <section>

        <h2>Mes projets</h2>

        <p>
            <?php the_field('text_projects') ?>
        </p>

        <?php $projects = get_field('projects') ?>
        <ul>

            <?php for($i = 0; $i < count($projects); $i++ ) : ?>
                <li>
                    <?php $idProject = $projects[$i] ?>
                    <img src="<?php echo get_field('cover', $idProject)?>" alt="" width="100" >
                    <h3>
                        <?php echo get_the_title($idProject) ?>
                    </h3>
                </li>
            <?php endfor ?>

        </ul>
       
    </section>

</main>



<?php get_footer() ?>