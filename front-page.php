<?php get_header();?>
<div class="container">
  <section id="main-content" class="row">
    <section id="content-posts" class="col-8 feed-list">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID();?>" <?php post_class('post feed-item');?> itemscope itemtype="http://schema.org/Article">
          <h2 class="entry-title item fn"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="url"><?php the_title(); ?></a></h2>

          <ul class="list-meta author vcard" itemscope itemtype="http://schema.org/Person" itemprop="author">
            <li>Author: <span itemprop="name"> <?php the_author_posts_link(); ?></span></li>
            <li>Categories: <?php the_category(', '); ?></li>
          </ul>

          <div class="post-content feed-content entry-content">
            <?php
            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail('thumbnail', array('class' => 'feed-thumb', 'itemprop' => 'image'));
            }
            the_excerpt();
            ?>
          </div>

        </article>
    <?php endwhile; endif;?>
      <div class="pagination">
        <?php posts_nav_link( ' &#183 ', '&laquo; previous page', 'next page &raquo;' ); ?>
      </div>
    </section>

    <?php get_sidebar();?>
  </section>
</div>

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
