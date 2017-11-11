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
?><form id="get-data-form" method="post">
    <div class="log">
        <textarea class="tinymce" id="texteditor"></textarea>
    </div>
    <div class="log">
        <div class="send-button">
            <button class="btn btn-default" type="submit" value="Get Data">Zdrojovy kod</button>
        </div>
        <div id="data-container">
            
        </div>
    </div>
</form>
<script>

</script>
<?php
	}

}
