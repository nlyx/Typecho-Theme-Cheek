<?php
/**
 * Will you eyes still smile from your cheeks?
 * 
 * @package Cheek For Typecho
 * @author 七月
 * @version 1.0.
 * @link https://qqmoe.cn/
 */
 
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
<?php while($this->next()): ?>
<main>
<article class="post">
      <a href="<?php $this->permalink() ?>">
        <h2 class="post-title"><?php $this->title() ?></h2>
      </a>
        <p>
          <?php $this->date('F j, Y'); ?> | <?php $this->category(','); ?>	
        </p> 

<?php endwhile; ?>

<div class="pagination-container">
  
    <?php $this->pageLink('- Next','next'); ?>
	
</div>
  <hr/>
</article>
</main>

<?php $this->need('footer.php'); ?>

