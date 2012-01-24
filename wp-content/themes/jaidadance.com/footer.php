<?php roots_footer_before(); ?>
    <footer id="content-info" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="contentinfo">
      <?php roots_footer_inside(); ?>
      <div class="container">
        <?php dynamic_sidebar('roots-footer'); ?>
        <p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
        <br/>Web Design by <a href="www.dreamstarstudios.com">Dreamstar Studios</a>
        <br/>Site Feeds & Calendars Powered by <a href="http://www.google.com/apps/intl/en/business/index.html">Google Apps</a>
        </p>
      </div>
    </footer>
    <?php roots_footer_after(); ?>
  </div><!-- /#wrap -->

<?php wp_footer(); ?>
<?php roots_footer(); ?>

  <!--[if lt IE 7]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</div> <!-- end body_wrap -->
</body>
</html>
