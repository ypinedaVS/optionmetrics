<?php
  $year_param = isset($_GET['query_year']) ? $_GET['query_year'] : date('Y');
  $year = date('Y');
  const LAST = 2002;
?>
<p class="h4 text-blue text-center text-sm-left mb-4 d-none d-sm-block mt-5">All Research Papers</p>
<div class="w-100 position-relative d-none d-sm-block" style="left:10px;">
  <div class="timeline">
    <?php for ($i=$year; $i>=LAST; $i--): ?>
    <div class="entry <?php echo ($i == $year_param) ? 'active' : ''; ?>">
      <p
        class="d-inline timeline-year montserrat-light text-blue <?php echo ($i == $year_param) ? 'active' : ''; ?>"
        data-year="<?php echo $i; ?>"
        style="cursor:pointer"><?php echo $i; ?></p>
    </div>
    <?php endfor; ?>
  </div>
</div>
