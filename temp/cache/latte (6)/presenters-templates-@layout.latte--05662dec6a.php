<?php
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app\presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template05662dec6a extends Latte\Runtime\Template
{
	public $blocks = [
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php
		$this->renderBlock('title', $this->params, 'html');
?></title>
        <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 9 */ ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */ ?>/css/prism.css" rel="stylesheet">
        <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 11 */ ?>/css/altosdevlog.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 12 */ ?>/favicon.ico" type="image/x-icon">
    </head>
    <body><!--
        <div class="row">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">

                    <div class="container">
                        <div class="navbar-header logo">
                            <img src="<?php echo LR\Filters::escapeHtmlComment($basePath) /* line 21 */ ?>/img/logo-mini.png" alt=""/>
                        </div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle nav</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/../../../../bug-factory.net/index.tml">Domů</a></li>
                                <li class="active"><a n:href="Homepage:default">Altos Devlog</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>
        </div>-->
        <div class="row">
            <div class="container">
                <div class="col-md-1"></div>
                <div class="col-md-10 col-xs-12">
                    <div class="content-panel">
                        <div class="border-image"><img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 45 */ ?>/img/altos-title.jpg" class="img-title"></div>
                        <div class="articles-panel">
<?php
		$this->renderBlock('content', $this->params, 'html');
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="container-fluid footer-area">
                <p class="text-muted text-center footer-text">Webdesign BugFactory &copy;2017</p>
            </div>
        </div>
<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('scripts', get_defined_vars());
?>
    </body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
        <!-- javascript -->
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 61 */ ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 62 */ ?>/plugin/tinymce/tinymce.min.js"></script>
        <script type="text/javascript" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 63 */ ?>/plugin/tinymce/init-tinymce.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 64 */ ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 65 */ ?>/js/prism.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
        <script id="dsq-count-scr" src="//altos-devlog.disqus.com/count.js" async></script>
<?php
	}

}
