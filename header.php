<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title><?php $this->archiveTitle(array(
	    'category'  =>  _t('分类 %s 下的文章'),
	    'search'    =>  _t('包含关键字 %s 的文章'),
	    'tag'       =>  _t('标签 %s 下的文章'),
	    'author'    =>  _t('%s 发布的文章')
    ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
        <link rel="shortcut icon" href="https://cdn.qqmoe.cn/img/blog/g.ico">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+SC:wght@300;400;600;900&amp;display=swap" rel="stylesheet">
	
	
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
	
</head>
<body>
	<!--[if lt IE 8]>
	<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
	<![endif]-->
	
	
	<header>
	<main>
	 <div class="nav">
	 
     <h1> <img src="https://cdn.qqmoe.cn/img/blog/qqmoe_meitu_1.jpg" style="border-radius: 30px" "height="48" width="48"> <a href="<?php $this->options->siteUrl(); ?>"> <?php $this->options->title() ?></a></h1>
	 <h3> 
	 <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
<?php while($pages->next()): ?>
	<a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
	 · 
	<?php endwhile; ?>
    </h3>
	 <h2><?php $this->options->description() ?></h2>
	 
	 <div>
	 </main>
	</header>
	



