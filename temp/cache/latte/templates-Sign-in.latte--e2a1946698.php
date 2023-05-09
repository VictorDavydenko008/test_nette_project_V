<?php

use Latte\Runtime as LR;

/** source: C:\Users\User\test_nette_project\App\Presenters/templates/Sign/in.latte */
final class Templatee2a1946698 extends Latte\Runtime\Template
{
	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$ʟ_tmp = $this->global->uiControl->getComponent('signInForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 2 */;

		echo '    Ще немає акаунту? <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:up')) /* line 3 */;
		echo '">Sign up</a>
';
	}
}
