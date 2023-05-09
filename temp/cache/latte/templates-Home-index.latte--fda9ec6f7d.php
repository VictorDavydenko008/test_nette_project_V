<?php

use Latte\Runtime as LR;

/** source: C:\Users\User\test_nette_project\App\Presenters/templates/Home/index.latte */
final class Templatefda9ec6f7d extends Latte\Runtime\Template
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
		echo '





';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['person' => '13', 'item' => '22'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '	<div>
		<h1>';
		echo LR\Filters::escapeHtmlText($message) /* line 3 */;
		echo '</h1>
	</div>

	<table>
		<tr>
			<th>id</th>
			<th>login</th>
			<th>email</th>
			<th>created_at</th>
		</tr>
';
		foreach ($users as $person) /* line 13 */ {
			echo '		<tr>
			<td>';
			echo LR\Filters::escapeHtmlText($person->user_id) /* line 15 */;
			echo '</td>
			<td>';
			echo LR\Filters::escapeHtmlText($person->login) /* line 16 */;
			echo '</td>
			<td>';
			echo LR\Filters::escapeHtmlText($person->email) /* line 17 */;
			echo '</td>
			<td>';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($person->created_at, 'j.m.Y')) /* line 18 */;
			echo '</td>
		</tr>
';

		}

		echo '	</table>
';
		foreach ($result as $item) /* line 22 */ {
			echo '		';
			echo LR\Filters::escapeHtmlText($item->group_id) /* line 23 */;
			echo ' - ';
			echo LR\Filters::escapeHtmlText($item->group_name) /* line 23 */;
			echo "\n";

		}
	}
}
