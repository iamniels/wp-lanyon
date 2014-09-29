<!-- Target for toggling the sidebar `.sidebar-checkbox` is for regular
     styles, `#sidebar-checkbox` for behavior. -->
<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-item">
    <p>{{ site.description }}</p>
  </div>

  <nav class="sidebar-nav">
    <?php lanyon_sidebar_nav(); ?>
  </nav>

  <div class="sidebar-item">
    <p>
      &copy; {{ site.time | date: '%Y' }}. All rights reserved.
    </p>
  </div>
</div>
