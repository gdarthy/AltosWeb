<?php
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Templatef667cd7a70 extends Latte\Runtime\Template
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
		if (isset($this->params['log'])) trigger_error('Variable $log overwritten in foreach on line 5');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockTitle($_args)
	{
?>Altos Devlog
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
		$iterations = 0;
		foreach ($devlogs as $log) {
?><div class="log">
    <div class="log-title">
        <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:log", ['id'=>$log['logid']])) ?>"><?php
			echo LR\Filters::escapeHtmlText($log['title']) /* line 7 */ ?></a>
    </div>
        <div class="log-preamble">
            <?php echo $log['preamble'] /* line 10 */ ?>

        </div>
</div>
<?php
			$iterations++;
		}
		
	}

}
