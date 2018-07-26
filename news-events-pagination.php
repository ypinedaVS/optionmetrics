<?php
  $tag = get_term_by( 'name', 'featured', 'post_tag' );

  $args = array(
    'category_name'   => 'news-events',
    'orderby'         => 'date',
    'order'           => 'DESC',
    'tag__not_in'     => array( $tag->term_id )
  );
  $news = new WP_Query( $args );
?>
<div class="col-12">
  <table id="events">
    <thead><tr><th></th></tr></thead>
    <tbody>
      <?php
        if( $news->have_posts() ) :
          while( $news->have_posts() ) :
            $news->the_post();
      ?>
      <tr>
        <td>
          <div class="row">
            <div class="col-4">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News & Events News-Event-ID-<?php echo get_the_ID(); ?>" class="img-fluid w-100 mb-3">
            </div>
            <div class="col-8">
              <p class="text-blue-dark montserrat-medium news-mini mb-1"><?php the_title(); ?></p>
              <p class="text-grey-dark lato-regular news-mini mb-1"><?php echo get_the_content(); ?></p>
              <a class="btn btn-link pl-0 text-blue-dark montserrat-medium">
                READ MORE
                <span class="fa fa-angle-double-right"></span>
              </a>
            </div>
          </div>
        </td>
      </tr>
      <?php endwhile; endif; ?>
    </tbody>
  </table>
</div>
<?php
  $sc_args = '[wp-datatable id="events"]
    search: true,
    responsive: true,
    pageLength: 2
  [/wp-datatable]';
  echo do_shortcode( $sc_args );
?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#events").children().first().remove();
  })
</script>
