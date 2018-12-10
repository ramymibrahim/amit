<?php
require_once('helper/session.php');
require_once('helper/database.php');

$q='select 
		posts.title
		,posts.description
		,authors.name
		,posts.created_at 
	from posts 
	left join authors 
	on authors.id=posts.author_id
	where author_id='.$author_id;	
$posts=[];
$rows = getRows($q);
foreach($rows as $row){
	array_push($posts
	,[
		'title'=>$row[0]
		,'description'=>$row[1]
		,'author'=>$row[2]
		,'created_at'=>$row[3]
	]);
}
?>