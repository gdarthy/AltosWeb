<?php
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app\presenters/templates/Homepage/log.latte

use Latte\Runtime as LR;

class Template91b1bc3e17 extends Latte\Runtime\Template
{
	public $blocks = [
		'title' => 'blockTitle',
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'title' => 'html',
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('title', get_defined_vars());
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
		extract($_args);
		echo LR\Filters::escapeHtmlText($devlog['title']) /* line 2 */ ?>

<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="log">
    <div class="log-title">
        <?php echo LR\Filters::escapeHtmlText($devlog['title']) /* line 7 */ ?>

    </div>
    <?php echo $devlog['content'] /* line 9 */ ?>

</div>
<div class ="log">
    <div id="disqus_thread"></div>
    <script>
        var disqus_config = function () {
            this.page.url = <?php echo LR\Filters::escapeJs($this->global->uiControl->link("//this")) ?>;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = <?php echo LR\Filters::escapeJs($devlog['logid']) /* line 16 */ ?>; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function () { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = '//altos-devlog.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
<?php
	}

}
