<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>



<div class="site-footer">
   &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"> <?php $this->options->title(); ?></a> · Powered By <a href="http://typecho.org/" target="_blank" rel="nofollow">Typecho</a> ·&nbsp;
  <a class="rss" href="<?php $this->options->siteUrl(); ?>feed" target="_blank">
    RSS
  </a>
</div>
<?php $this->footer(); ?>

<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</body>
</html>
