<?php get_header();?>

<?php
  if (has_post_thumbnail()) {
 ?>
<div class="featured">
  <?php the_post_thumbnail('large'); ?>
</div>
<?php } ?>
<div class="container">
  <section id="main-content" class="row">
    <h1 class="entry-title item fn"><?php the_title(); ?> <small><time itemprop="datePublished" class="updated" datetime="<?php $postDate = get_the_date('c'); $postDate2 = get_the_date('d.m.Y'); echo $postDate ?>" pubdate><?php echo $postDate2; ?></time></small></h1>
    <section id="content-meta" class="col-2">
          <ul class="list-meta author vcard" itemscope itemtype="http://schema.org/Person" itemprop="author">
            <li><strong>by: <span itemprop="name"> <?php the_author_posts_link(); ?></span></strong></li>
            <li>Categories: <?php the_category(', '); ?></li>
          </ul>
    </section>
    <section id="content-posts" class="col-8 last">
        <article id="post-<?php the_ID();?>" <?php post_class('post single');?> itemscope itemtype="http://schema.org/Article">


          <div class="post-content entry-content">
            <?php the_content(); ?>
          </div>

          <ul class="list-meta entry-meta">
            <li>Tags: <?php the_tags(); ?></li>
          </ul>

          <div id="comments">
            <div class="comments-template">
              <?php comments_template(); ?>
            </div>
          </div>
      </article>
      <div class="pagination">
        <?php posts_nav_link( ' &#183 ', 'previous page &raquo;', ' &laquo; next page' ); ?>
      </div>
    </section>

  </section>
</div>

<?php get_footer();?>
<?php wp_footer();?>

</body>
</html>
