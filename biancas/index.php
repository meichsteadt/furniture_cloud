<?php get_header(); ?>

<div class="container">

  
  <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <div class="date"><?php the_time( 'M j y' ); ?></div>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
    <div class="post-footer">
        <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
  </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>




    <div class="row">
      <div class="box">
          <div class="col-lg-12 text-center">
              <div id="carousel-example-generic" class="carousel slide">
                  <!-- Indicators -->
                  <ol class="carousel-indicators hidden-xs">
                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                      <div class="item active">
                          <img class="img-responsive img-full" src="img/products/slide2.jpg" alt="">
                      </div>
                      <div class="item">
                          <img class="img-responsive img-full" src="img/products/slide1.jpg" alt="">
                      </div>
                      <div class="item">
                          <img class="img-responsive img-full" src="img/products/slide3.jpg" alt="">
                      </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="icon-prev"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="icon-next"></span>
                  </a>
              </div>
              <h2 class="brand-before">
                  <small>Welcome to</small>
              </h2>
              <h1 class="brand-name">Bianca's Furniture</h1>
              <hr class="tagline-divider">
          </div>
      </div>
  </div>

           <div class="row" >
               <div class="box">
                  <div class="col-lg-12">
                      <hr>
                      <h2 class="intro-text text-center">About
                        <strong>Bianca's</strong>
                      </h2>
                      <hr>
                  </div>
                  <div class="col-md-6">
                    <img class="img-responsive img-border-left shadow img-full" src="img/logo.png" alt="" >
                  </div>
                  <div class="col-md-6">
                    <br>
                    <p>Stop by Bianca's Furniture and browse our selection of Bedroom sets, Dining Room sets, Sofas, Entertainment Centers and so much more! Don't like whats on the floor? Check out we have in our catalogs, we can have your items here within a week!</p>
                    <p>We work with a selection of finance companies to ensure you get the furniture you want. Come by our store and apply today!</p>
                    <p>Se hable español.</p>
                   </div>
                   <div class="clearfix"></div>
               </div>
           </div>
       </div>




<?php get_footer(); ?>