<?php get_header() ?>

<p>Custom Post-Type : Projet</p>
<h1><?php the_title() ?></h1>

<p>Je travaille sur ma page dédiée Projet</p>

<h2>Introduction : </h2>
<p class="intro"><?php the_field('introduction') ?></p>

<img class="image" src="<?php the_field('cover') ?>" alt="">

<pre>
    <?php var_dump( get_field('cover') ) ?>
</pre>

<?php get_footer() ?>