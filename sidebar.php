<!-- Target for toggling the sidebar `.sidebar-checkbox` is for regular
     styles, `#sidebar-checkbox` for behavior. -->
<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-item">
    <?php echo get_theme_mod( 'lanyon_extended_description'); ?>
  </div>

  <nav class="sidebar-nav">
    <?php lanyon_sidebar_nav(); ?>
  </nav>

</div>
