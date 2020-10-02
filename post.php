<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<main>
<article class="post">

        <h2 class="post-title"><?php $this->title() ?></h2>
      </a>
        <p>
          <?php $this->date('F j, Y'); ?> | <?php $this->category(','); ?>	
        </p> 
         <br/>
	<div class="post-detail">
		<div class="post-content">
         <p><?php $this->content('Continue Reading...'); ?> </a>
        </div>

<div class="post-content">

 <p> Tags: <?php $this->tags(',', true, 'none'); ?> </p>
 </div>
     </div>
<hr/>

<div class="post-content">
<p style="opacity: .3">AD </p>
 <a href="http://ssr.pjax.fun/" target="_blank"><img src="https://cdn.qqmoe.cn/img/other/kexue.jpg" ></a>
 </div>
    <?php $this->need('comments.php'); ?>
</article> 



</main>

<?php $this->need('footer.php'); ?>