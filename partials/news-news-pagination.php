<?php
  $featured = get_term_by( 'name', 'featured', 'post_tag' );
  $news = get_term_by( 'name', 'news', 'post_tag' );
  $events = get_term_by( 'name', 'events', 'post_tag' );

  $args = array(
    'category_name'   => 'news-events',
    'orderby'         => 'date',
    'order'           => 'DESC',
    'tag__not_in'     => array( $featured->term_id, $events->term_id )
  );
  $newsPosts = new WP_Query( $args );
?>
<div class="col-12 col-md-5 mb-5" id="news-offset">
  <div class="row">
    <div class="col-12 text-center">
      <p class="section-title text-blue montserrat-medium">News</p>
    </div>
    <!-- <div class="col-12 position-absolute d-none d-lg-inline" style="z-index:1;padding-top:20px;padding-left:30px">
      <p class="section-title text-blue montserrat-medium position-relative d-inline">News</p>
    </div> -->
    <div class="col-12">
      <table id="news">
        <thead><tr><th></th></tr></thead>
        <tbody>
          <?php
            if( $newsPosts->have_posts() ) :
              while( $newsPosts->have_posts() ) :
                $newsPosts->the_post();
          ?>
          <tr>
            <td>
              <div class="row">
                <div class="col hide-show-more">
                  <p class="text-blue montserrat-medium news-mini mb-1"><?php the_title(); ?></p>
                  <p class="text-grey lato-regular small" style="font-style:italic"><?php echo get_the_date( 'F jS, Y' ); ?></p>
                  <p class="text-grey lato-regular news-mini mb-1 _content"><?php echo get_the_content(); ?></p>
                  <a class="btn btn-link pl-0 text-blue-dark montserrat-medium o-50" href="<?php the_permalink(); ?>">
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
  $sc_args = '[wp-datatable id="news"]
    search: true,
    responsive: true,
    pageLength: 6,
    lengthChange: false,
    bInfo: false,
    language: {
      search: "",
      searchPlaceholder: "Search News...",
      paginate: {
        next: "<span class=\"fa fa-chevron-right\"></span>",
        previous: "<span class=\"fa fa-chevron-left\"></span>",
      }
    },
  [/wp-datatable]';
  echo do_shortcode( $sc_args );
?>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $("#news").children().first().remove();
    $(".dataTables_paginate").addClass("navigation-pull-left");
  })
</script>
