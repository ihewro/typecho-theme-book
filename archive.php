<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="footer-clear post-wrapper">
<?php $this->need('sidebar.php'); ?>

  <!-- post header -->
  <div class="post-header">
	<h1 class="post-title" itemprop="name headline"><?php $this->archiveTitle(array(
                'category'  =>  _t('- %s -'),
                'search'    =>  _t('- %s -'),
                'tag'       =>  _t('- %s -'),
                'author'    =>  _t('- %s -')
            ), '', ''); ?></h1>
  </div>
              
  <!-- post content -->
  <div class="archive-contain" itemprop="articleBody">
              <div id="archive-posts"> 
   <ul class="archive-content"> 
   <?php while($this->next()): ?>
       <li><a href=<?php $this->permalink() ?> target="_blank"><strong class="name"><?php $this->title() ?></strong><span class="domain"><?php $this->description(); ?></span></a></li> 
 <?php endwhile; ?>
   </ul>
   </div>
   
  </div>

    <!-- post navigator -->


                <div class="archive-nav">
                <div class="pages-nav">
                    <div class="pages-prev left" title="<?php _e('上一页');?>"><?php $this->pageLink('<i class="icon icon-left"></i> Previous','prev');?></div>
                    <div class="pages-next right" title="<?php _e('下一页');?>"><?php $this->pageLink('Next <i class="icon icon-right"></i>','next');?></div>
                </div>
            </div>


<?php $this->need('footer.php'); ?>


</div>
