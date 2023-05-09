<?php

use Latte\Runtime as LR;

/** source: C:\Users\User\test_nette_project\App\Presenters/templates/News/news.latte */
final class Template5f4bc1c3a6 extends Latte\Runtime\Template
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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['article' => '25'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '    <div>
        <h1>';
		echo LR\Filters::escapeHtmlText($message) /* line 3 */;
		echo '</h1>
    </div>

';
		if (isset($user) && $user->isLoggedIn()) /* line 6 */ {
			echo '        <p>
            Ви увійшли як ';
			echo LR\Filters::escapeHtmlText($login) /* line 8 */;
			echo '
        </p>
        <p>
            Ваш email: ';
			echo LR\Filters::escapeHtmlText($email) /* line 11 */;
			echo '
        </p>
        <p>
            Ваш id: ';
			echo LR\Filters::escapeHtmlText($user_id) /* line 14 */;
			echo '
        </p>
';
		}
		$ʟ_tmp = $this->global->uiControl->getComponent('newsForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 17 */;

		echo '    <table>
        <tr>
            <th>Назва</th>
            <th>Текст</th>
            <th>Автор</th>
            <th>Дата</th>
        </tr>
';
		foreach ($news as $article) /* line 25 */ {
			echo '            <tr>
                <td>';
			echo LR\Filters::escapeHtmlText($article->news_title) /* line 27 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText($article->news_content) /* line 28 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText($article->news_user_login) /* line 29 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($article->news_date_created, 'd.m.Y H:i')) /* line 30 */;
			echo '</td>
            </tr>
';

		}

		echo '    </table>
';
		if ($post_id) /* line 34 */ {
			echo '        <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('News:edit', [$post_id])) /* line 35 */;
			echo '"> Редагувати новину</a>
';
		}
	}
}
