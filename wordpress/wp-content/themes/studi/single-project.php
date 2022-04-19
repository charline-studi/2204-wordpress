<?php get_header() ?>

<h2>Test fonction php : var_dump()</h2>

<?php var_dump('Chaine caractères') ?>
<br>
<?php var_dump(123) ?>
<br>
<?php var_dump([1, 2, 3]) ?>
<hr>

<h2>Récupération des champs ACF</h2>

<h1><?php the_title() ?></h1>
<p class="intro"><?php the_field('introduction') ?></p>
<img class="image" src="<?php the_field('cover') ?>" alt="">

<hr>

<h2>Différence entre the_field et get_field (fonctions ACF)</h2>

<br>
<?php echo 'coucou' ?>
<br>
<p>Démo</p>
<?php the_field('introduction') ?>
<br>
<?php $variable = get_field('introduction') ?>
<?php echo $variable ?>
<br>
<?php 
$checkbox = get_field('show_button');
// var_dump($checkbox);

// if ($checkbox) {
//     echo '<a href="#">Retour à la page d\'accueil</a>';
// }
?>

<?php if ($checkbox) : ?>
    <a href="#">Retour à la page d'accueil</a>
<?php endif ?>
<br>

<hr>

<h2>Afficher le contenu d'une autre page</h2>

<?php $projectOneID = 32 ?>
<?php $projectTwoID = 33 ?>

<?php the_field('introduction', $projectOneID ) ?>
<br>
<?php the_field('introduction', $projectTwoID ) ?>

<?php get_footer() ?>