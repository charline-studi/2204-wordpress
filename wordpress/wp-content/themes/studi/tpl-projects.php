<?php 
/* Template Name: Modèle page projets */ 
?>

<main>

    <h1><?php the_title() ?></h1>
    <p><?php the_field("intro") ?></p>

    <?php $number_posts = get_field("numbers_posts_to_show")?>
    <?php $type_posts = get_field("type_projet") ?>

    <?php 
    $params = array(
        'post_type' => 'project',
        'numberposts' => intval($number_posts),
        'orderby' => 'post_title',
        'order' => 'ASC', // DESC : dé-croissant || ASC : croissant
        'meta_key' => 'state',
        'meta_value' => $type_posts
        ) 
    ?>
    <?php $allProjects = get_posts($params) ?>

    <ul>
        <?php for ($i = 0; $i < count($allProjects); $i++) : ?>
            <li>
                <?php $idProject = $allProjects[$i]->ID ?>
                <a href="<?php echo get_permalink($idProject)?>"><?php echo get_the_title($idProject)?></a>
            </li>
        <?php endfor?>
    </ul>
    <pre>
        <?php var_dump($allProjects) ?>
    </pre>

</main>