<?php
/**
 * 一款极适合书写、创作、阅读的简介风格主题。
 * 
 * @package book
 * @author hewro
 * @version 1.5
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
     
    <?php if (!empty($this->options->IndexShow) && in_array('ShowArchive', $this->options->IndexShow)): ?>

     <a class="link-1" href="<?php Helper::options()->siteUrl()?>/archive.html">Category</a>
 <?php endif; ?>
    </div> 
   </div> 
   


<?php $this->need('footer.php'); ?>
