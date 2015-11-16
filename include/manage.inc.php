<?php
function managePost($post)
{
	return isset($_SESSION['admin'])? '<label><strong><a href = "categorize.php?post=' .$post. '" rel="tooltip" data-placement="top" title="Категория" ><i class="icon-folder-open"></i></a></strong></label><label><strong><a href = "edit.php?post=' .$post. '" rel="tooltip" data-placement="top" title="Изменить&nbsp;" "><i class="icon-pencil"></i></a></strong></label><label><strong><a href = "delete.php?post=' .$post. '" rel="tooltip" data-placement="top" title="Удалить&nbsp;" "><i class="icon-remove"></i></a></strong></label>' : '';
}

function manageComment($comment)
{
	return isset($_SESSION['admin'])? '<label><strong><a href = "edit.php?comment=' .$comment. '" rel="tooltip" data-placement="top" title="Изменить&nbsp;"><i class="icon-pencil"></i></a></strong></label><label><strong><a href = "delete.php?comment=' .$comment. '" rel="tooltip" data-placement="top" title="Удалить"><i class="icon-remove"></i></a></strong></label>' : '';
}

function manageCategory($category)
{
	return isset($_SESSION['admin'])? '<label><strong><a href = "edit.php?category=' .$category. '" rel="tooltip" data-placement="top" title="Изменить&nbsp;"><i class="icon-pencil"></i></a></strong></label><label><strong><a href = "delete.php?category=' .$category. '" rel="tooltip" data-placement="top" title="Удалить"><i class="icon-remove"></i></a></strong></label>' : '';
}

function manageLink($link)
{
	return isset($_SESSION['admin'])? '<label><strong><a href = "edit.php?link=' .$link. '" rel="tooltip" data-placement="top" title="Изменить&nbsp;"><i class="icon-pencil"></i></a><strong><label><label><strong><a href = "delete.php?link=' .$link. '" rel="tooltip" data-placement="top" title="Удалить" ><i class="icon-remove"></i></a></strong></label>' : '';
}

?>
