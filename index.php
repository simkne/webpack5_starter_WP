<?php get_header(); ?>

<main class="main-wrapper">
  <div class="container">

    <?php get_template_part('template-parts/header/head'); ?>

    <section class="block block-blog">

      <div class="container">

        <?php get_template_part('template-parts/content/postquery'); ?>


      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>