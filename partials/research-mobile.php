<?php
  $args = array(
    'category_name'     => 'research',
    'orderby'           => 'date',
    'order'             => 'DESC'
  );
  $research_mobile = new WP_Query( $args );
?>
<table id="research-mobile">
  <thead>
    <tr>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( $research_mobile->have_posts() ) :
        while( $research_mobile->have_posts() ) :
          $research_mobile->the_post();
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
  $sc_args = '[wp-datatable id="research-mobile" fat="LEVEL"]
    search: true,
    responsive: true,
    pageLength: 6,
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
    $("#research-mobile").children().first().remove();
    $("#research-mobile_wrapper").addClass("d-flex flex-column");
  });
</script>
