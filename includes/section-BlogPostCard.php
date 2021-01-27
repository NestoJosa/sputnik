<!-- BlogPostCard -->
  <div class="col-md-4">
    <div class="BlogPostCard">
      <a class="BlogPostCard__link" href="<?php the_permalink() ?>">
        <div class="BlogPostCard__imageWrapper" 
          style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
          <div class="BlogPostCard__imageOverlay"></div>
        </div>
        <h3 class="BlogPostCard__title"><?php the_title(); ?></h3>
        <p class="BlogPostCard__excerpt"><?php echo get_the_excerpt(); ?></p>
        <div class="BlogPostCard__authorAvatarAndNameWrapper">
          <?php  echo get_avatar( get_the_author_meta('user_email'), '40', 'gravatar_default', 'Avatar of author'); ?><!-- returns an image -->
          <span class="BlogPostCard__authorName"><?php  echo get_the_author_meta('display_name'); ?></span>
        </div>
      </a>
    </div>
  </div>
<!-- /BlogPostCard -->
