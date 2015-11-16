<?php

function bbcode(&$text)
{
	//the pattern to be matched
	//the replacement
	
	$pattern[] = '#\[b\](.*?)\[/b\]#i';
	$replace[] = '<b>$1</b>';
	
	$pattern[] = '#\[i\](.*?)\[/i\]#i';
	$replace[] = '<i>$1</i>';
	
	$pattern[] = '#\[u\](.*?)\[/u\]#i';
	$replace[] = '<u>$1</u>';
	
	$pattern[] = '#\[s\](.*?)\[/s\]#i';
	$replace[] = '<del>$1</del>';
	
	$pattern[] = '#\[sup\](.*?)\[/sup\]#i';
	$replace[] = '<sup>$1</sup>';
	
	$pattern[] = '#\[sub\](.*?)\[/sub\]#i';
	$replace[] = '<sub>$1</sub>';
	
	$pattern[] = '#\[img\](.*?)\[/img\]#i';
	$replace[] = '<a href="$1"><img style="width: 500px; height: auto;" src = "$1"  alt = ""/></a>';
	
	$pattern[] = '#\[url\s?=\s?(.*?)](.*?)\[/url\]#i';
	$replace[] = '<a href = "$1">$2</a>';
	
	$pattern[] = '#\[video\](.*?)\[/video\]#i';
	$replace[] = '<iframe width = "480" height = "390" src = "http://www.youtube.com/embed/$1?rel=0" frameborder = "0"></iframe>';
	//the variable for the replace
	return preg_replace($pattern, $replace, $text);
}

function summary(&$text)
{
	$text = explode(PHP_EOL, $text, 2);
	return bbcode($text[0]);
}

function content(&$text)
{
	return nl2br(bbcode($text));
}

function view()
{
if(isset($_GET['post']))
{
	$data['subtitle'] = $lang['post'];
	$data['content'] .= '<h1>' .(isset($_SESSION['admin'])? '<a href = "add.php?post">[+]</a>' : '').$data['subtitle']. '</h1>';
	$page = array_chunk(array_reverse(listEntry('post/')), 4);
	if(!isset($page[$_GET['post']-1]))
	{
		$_GET['post']=1;
	}
	if($page)
	{
		foreach($page[$_GET['post']-1] as &$post)
		{
			$postEntry = readEntry('post', $post);
			$data['content'] .= '<div class = "well" style="margin-top: 20px;">
			<div class = "entryHeader"><h3>' .managePost($post).$postEntry['title'].'<h3></div>
			<div class = "entryMain">
			<p>' .summary($postEntry['content']). '</p>
			<p><a class = "btn btn-primary" href = "view.php?post=' .$post. '"><span class="btn-label">' .$lang['readMore']. '</span></a></p>
			</div>
			<div class = "entryFooter"><ul>';
			if(isset($postEntry['category']))
			{
				$categoryEntry = readEntry('category', $postEntry['category']);
				$data['content'] .= '<label><strong rel="tooltip" data-placement="top" title="Категория&nbsp;"><i class="icon-folder-open"></i></strong></label> - <a href = "view.php?category=' .$postEntry['category']. '">' .$categoryEntry['name']. '</a> <br> ';
			}
			$data['content'] .= '<label><strong rel="tooltip" data-placement="top" title="Комментарии"><i class="icon-comment"></i></strong></label> - <small>' .count($postEntry['comment']). '</small> <br>
			 <label><strong rel="tooltip" data-placement="left" title="Просмотры"><i class="icon-eye-open"></i></strong></label> - <small>' .$postEntry['view']. '</small> <br>
			<label><strong rel="tooltip" data-placement="left" title="Дата"><i class="icon-calendar"></i></strong></label> - <small>' .date('Y-m-d H:i', strtotime($dateoutput)). '</small>
			</ul></div>
			</div>';
		}
	}
	else
	{
		$data['content'] .= '<p>' .$lang['none']. '</p>';
	}
	$data['content'] .= '<div id = "page"><ul>' .
	(isset($page[$_GET['post']-2])? '<li><a href = "index.php?post=' .($_GET['post']-1). '">< ' .$lang['prev']. '</a></li>' : '').
	'<li>' .$lang['page']. ':' .$_GET['post']. ' / ' .count($page). '</li>' .
	(isset($page[$_GET['post']])? '<li><a href = "index.php?post=' .($_GET['post']+1). '">' .$lang['next']. ' ></a></li>' : '').
	'</ul></div>';
}
}
?>
