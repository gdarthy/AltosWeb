<?php
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app\presenters/templates/Login/default.latte

use Latte\Runtime as LR;

class Templatef0210763ce extends Latte\Runtime\Template
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
?>TinyMCE
<?php
	}


	function blockContent($_args)
	{
		extract($_args);
?>
    <div class="login-form">
<?php
		/* line 6 */ $_tmp = $this->global->uiControl->getComponent("login");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(NULL, FALSE);
		$_tmp->render();
?>
    </div>
        
<?php
	}

}
