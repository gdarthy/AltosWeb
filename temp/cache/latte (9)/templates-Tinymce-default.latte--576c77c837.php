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
?>
    <div class="log">
        <?php
		/* line 6 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["editLog"], []);
?>

            <div class="form-group">
                <?php if ($_label = end($this->global->formsStack)["labelLog"]->getLabel()) echo $_label->addAttributes(['for'=>'titleSelect']) ?>                <?php
		echo end($this->global->formsStack)["titles"]->getControl()->addAttributes(['class'=>'btn-offset', 'id'=>'titleSelect']) /* line 9 */ ?>

                <?php echo end($this->global->formsStack)["btnShow"]->getControl()->addAttributes(['class'=>'btn btn-default btn-xs']) /* line 10 */ ?>

            </div>
        <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

        <?php
		/* line 13 */
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $this->global->formsStack[] = $this->global->uiControl["dataForm"], []);
?>

            <div class="form-group">
                    <?php if ($_label = end($this->global->formsStack)["labelDate"]->getLabel()) echo $_label->addAttributes(['for'=>'logTitle']) ?>                    <?php
		echo end($this->global->formsStack)["date"]->getControl()->addAttributes(['type'=>'text', 'class'=>'title']) /* line 16 */ ?>

            </div>
            <div class="form-group">
                <?php if ($_label = end($this->global->formsStack)["labelTitle"]->getLabel()) echo $_label->addAttributes(['for'=>'logTitle']) ?>                <?php
		echo end($this->global->formsStack)["title"]->getControl()->addAttributes(['class'=>'title', 'id'=>'logTitle', 'rows'=>1]) /* line 20 */ ?>

            </div>
            <div class="form-group">
                <?php if ($_label = end($this->global->formsStack)["labelPreamble"]->getLabel()) echo $_label->addAttributes(['for'=>'logPreamble']) ?>                <?php
		echo end($this->global->formsStack)["preamble"]->getControl()->addAttributes(['class'=>'form-control', 'id'=>'logPreamble']) /* line 24 */ ?>

            </div>
                <?php echo end($this->global->formsStack)["tinymce"]->getControl()->addAttributes(['class'=>'tinymce']) /* line 26 */ ?>

            <div class="send-button">
                <?php echo end($this->global->formsStack)["btnSend"]->getControl()->addAttributes(['class'=>'btn btn-default']) /* line 28 */ ?>

            </div>
            <div class="clear"></div>
        <?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack));
?>

    </div>
<?php
	}

}
