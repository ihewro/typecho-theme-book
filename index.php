<?php
/**
 * hewro 移植到typecho上
 * 
 * @package book
 * @author hewro
 * @version 1.0
 * @link http://www.ihewro.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div class="footer-clear page-wrapper"> 
   <div class="page-container"> 
    <div class="index-wrapper"> 
     <?php $this->widget('Widget_Contents_Post_Recent','pageSize=1')->parse('<a class="link-1" href="{permalink}">Post</a> /'); ?>
     <a class="link-1" href="<?php Helper::options()->siteUrl()?>/about.html">About</a> / 
    </div> 
   </div> 
   


<?php $this->need('footer.php'); ?>
