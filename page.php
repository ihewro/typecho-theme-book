<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="footer-clear post-wrapper">
<?php $this->need('sidebar.php'); ?>

  <!-- post header -->
  <div class="post-header">
	<h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
    <span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F jS , Y'); ?></span>
  </div>
  <!-- post content -->
  <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
  </div>

<?php $this->need('comments.php'); ?>


<?php $this->need('footer.php'); ?>
</div>