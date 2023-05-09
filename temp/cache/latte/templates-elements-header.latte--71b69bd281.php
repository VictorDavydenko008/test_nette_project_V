<?php

use Latte\Runtime as LR;

/** source: C:\Users\User\test_nette_project\App\Presenters\templates\elements\header.latte */
final class Template71b69bd281 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<header>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/news">News</a></li>
            <li><a href="/contacts">Contact</a></li>
            <li><a href="/parliament">Parliament</a></li>
';
		if ($user->isLoggedIn()) /* line 9 */ {
			echo '                <li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:out')) /* line 10 */;
			echo '">Logout</a></li>
';
		} else /* line 11 */ {
			echo '                <li><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Sign:in')) /* line 12 */;
			echo '">Login</a></li>
';
		}
		echo '        </ul>
    </nav>
</header>
';
	}
}
