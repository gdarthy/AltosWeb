<?php
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app\presenters/templates/Homepage/tinymce.latte

use Latte\Runtime as LR;

class Template8fc015f4e9 extends Latte\Runtime\Template
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
?><div class="log">
    <textarea class="tinymce"></textarea>
</div>
<div class="log">
    <div class="send-button">
        <button class="btn btn-default" type="submit">Odeslat</button>
    </div>
</div>
<?php
	}

}
