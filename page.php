<?php get_header();?>

<div class="container">
  <section id="main-content" class="row">
    <section id="content-posts" class="col-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID();?>" <?php post_class('post single');?> itemscope itemtype="http://schema.org/Article">
          <h1 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h1>
          <div class="post-content entry-content">
            <?php the_content(); ?>
          </div>
      </article>
    <?php endwhile; endif;?>
      <div class="pagination">
        <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
      </div>
    </section>

    <?php get_sidebar();?>
  </section>
</div>

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
