<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<main>
<article class="post">

        <h2 class="post-title"><?php $this->title() ?></h2>
      </a>
        <p>
          <?php $this->date('F j, Y'); ?> 
        </p> 
         <br/>
	<div class="post-detail">
		<div class="cheek post-content">
         <?php $this->content(); ?>
        </div>
    </div>
    <?php $this->need('comments.php'); ?>
</article>
</main>




<?php $this->need('footer.php'); ?>