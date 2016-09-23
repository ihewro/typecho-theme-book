<?php
/**
 * about me
 *
 * @package custom
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

 <div class="footer-clear page-wrapper"> 
   <div class="page-container"> 
    <div class="about-wrapper"> 
      <p style="text-align: center"><a href="<?php Helper::options()->siteUrl()?>"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-left"></i></a>&nbsp;<?php $this->options->description() ?></p>
    </div> 
   </div> 
<?php $this->need('footer.php'); ?>