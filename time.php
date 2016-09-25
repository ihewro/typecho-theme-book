<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php

/**
 * time
 *
 * @package custom
 */
$this->need('header.php'); ?>
<div class="footer-clear post-wrapper">
<?php $this->need('sidebar.php'); ?>


  <div class="post-header">
	<h1 class="post-title" itemprop="name headline">分类归档</h1>
  </div>
  <!-- post content -->
  <div class="post-content" itemprop="articleBody">
            <div id="archives">
    <div id="archives-tags">
        <h3>标签云</h3>
        <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
        <?php if($tags->have()): ?>
            <?php while ($tags->next()): ?>
                <a class="itags" href="<?php $tags->permalink();?>">
                    <?php $tags->name(); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    	<h3>分类</h3>
     <div id="archives-category">
			    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> ({count})</li>'); ?>
     </div>
</div>
  </div>
  <?php $this->need('footer.php'); ?>
</div>


