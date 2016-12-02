<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );
      
      endwhile; endif; ?>


    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


<?php get_footer(); ?>