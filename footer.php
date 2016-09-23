<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?> 




<div class="footer">

  <span>&copy;</span>
  <span><script type="text/javascript">document.write(new Date().getFullYear());</script></span>
  <a class="link-1" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
  <span> with Book theme by <a class="link-1" href="http://www.ihewro.com/" target="_blank">ihewro</a>.</span>
</div>



    <!-- script -->
    <script src="<?php $this->options->themeUrl('assets/js/highlight.pack.js'); ?>"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="<?php $this->options->themeUrl('assets/js/script.js'); ?>"></script>

<script type="text/javascript">
    (function($){
        $(window).on("load",function(){
           // $(".post-archive").mCustomScrollbar();
			$(".post-archive").mCustomScrollbar({theme:"minimal-dark",autoHideScrollbar: true,scrollInertia: 250});
			//$("body").mCustomScrollbar({theme:"minimal-dark",scrollInertia: 250});
        });
    })(jQuery);
</script>

<?php $this->footer(); ?>
</body>
</html>
