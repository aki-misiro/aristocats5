<footer class="page-footer">
   <div class="footer-container">
      <div class="footer-logo">
         <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/footer-logo.svg" alt="The Aristocats"></a>
      </div>
      <?php
         wp_nav_menu(
            array(
               'theme_location' => 'footer-menu',
               'menu_class' => 'footer-nav',
               'container' => false,
            )
         );
      ?>
      <p class="copyright">&copy;&nbsp;&nbsp;The Aristocats&nbsp;&nbsp;All rights reserved</p>
   </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>