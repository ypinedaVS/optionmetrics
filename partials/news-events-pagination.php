<?php
  $featured = get_term_by( 'name', 'featured', 'post_tag' );
  $news = get_term_by( 'name', 'news', 'post_tag' );
  $events = get_term_by( 'name', 'events', 'post_tag' );

  $args = array(
    'category_name'   => 'news-events',
    'orderby'         => 'date',
    'order'           => 'DESC',
    'tag__not_in'     => array( $featured->term_id, $news->term_id )
  );
  $eventPosts = new WP_Query( $args );
?>
<div class="col-12 col-md-7 mb-4">
  <div class="row">
    <div class="col-12 d-none d-md-block d-lg-none text-center">
      <p class="section-title text-blue montserrat-medium">Events</p>
    </div>
    <div class="col-12 position-absolute d-none d-lg-inline-block">
      <p class="section-title text-blue montserrat-medium position-relative">Events</p>
    </div>
    <div class="col-12">
      <table id="events">
    <thead><tr><th></th></tr></thead>
    <tbody>
      <?php
        if( $eventPosts->have_posts() ) :
          while( $eventPosts->have_posts() ) :
            $eventPosts->the_post();
      ?>
      <tr>
        <td>
          <div class="row">
            <div class="col-6 col-md-5">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News & Events News-Event-ID-<?php echo get_the_ID(); ?>" class="img-fluid w-100 mb-3">
            </div>
            <div class="col-6 col-md-7 hide-show-more">
              <p class="text-blue-dark montserrat-medium news-mini mb-1"><?php the_title(); ?></p>
              <p class="text-grey-dark lato-light news-mini mb-1 _content"><?php echo get_the_content(); ?></p>
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
  </div>
</div>
<?php
  $sc_args = '[wp-datatable id="events"]
    search: true,
    responsive: true,
    pageLength: 4,
    lengthChange: false,
    bInfo: false,
    language: {
      search: "",
      searchPlaceholder: "Search Events...",
      paginate: {
        next: "<span class=\"fa fa-chevron-right\"></span>",
        previous: "<span class=\"fa fa-chevron-left\"></span>",
      }
    }
  [/wp-datatable]';
  echo do_shortcode( $sc_args );
?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#events").children().first().remove();
    $(".dataTables_paginate").addClass("navigation-pull-left");
  })
</script>
