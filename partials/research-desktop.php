<?php
  $featured = get_term_by( 'name', 'featured', 'post_tag' );

  $args = array(
    'category_name'     => 'research',
    'orderby'           => 'date',
    'order'             => 'DESC'
    'tag__not_in'       => $featured->term_id
  );
  $research_desktop = new WP_Query( $args );
?>
<table id="research-desktop">
  <thead>
    <tr>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( $research_desktop->have_posts() ) :
        while( $research_desktop->have_posts() ) :
          $research_desktop->the_post();
    ?>
    <tr>
      <td>
        <div class="row">
          <div class="col-12">
            <?php get_template_part( 'partials/research', 'item' ) ?>
          </div>
        </div>
      </td>
    </tr>
    <?php endwhile; endif; ?>
  </tbody>
</table>

<?php
  $sc_args = '[wp-datatable id="research-desktop"]
    search: true,
    responsive: true,
    pageLength: 2,
    lengthChange: false,
    bInfo: false,
    pagingType: "simple",
    language: {
      search: "",
      searchPlaceholder: "Search...",
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
    $("#research-desktop").children().first().remove();
    $(".dataTables_paginate").addClass("navigation-pull-left");
    $("#research-desktop_wrapper").addClass("d-flex flex-column");
  });
</script>
