<?php
// source: D:\DiskGoogle\Webs\wamp64\www\altos\app\presenters/templates/Tinymce/default.latte

use Latte\Runtime as LR;

class Template576c77c837 extends Latte\Runtime\Template
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
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["mujForm"];
		?><form method="post"<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		'method' => NULL,
		), FALSE) ?>>
    <div class="log">
        <textarea class="tinymce"<?php
		$_input = end($this->global->formsStack)["mojeHtml"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
    </div>
    <div class="log">
        <div class="send-button">
            <button class="btn btn-default" type="submit"<?php
		$_input = end($this->global->formsStack)["mujSubmit"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'type' => NULL,
		))->attributes() ?>>
                Odeslat
            </button>
        </div>
    </div>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), FALSE);
?></form>
<?php
	}

}
