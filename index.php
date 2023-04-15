<?php get_header(); ?>

<main class="container">

  <?php get_template_part('template-parts/header/head'); ?>
  
  <section class="block block-blog">
    
    <div class="container">
      
      <?php get_template_part('template-parts/content/postquery'); ?>
      

    </div>
  </section>

</main>
<?php get_footer(); ?>