<?php

$server='localhost';
$username='root';
$password='';
$db_name='blog';

$con=mysqli_connect($server,$username,$password,$db_name);

$q='select 
		posts.title
		,posts.description
		,authors.name
		,posts.created_at 
	from posts 
	left join authors 
	on authors.id=posts.author_id';
	
$query=mysqli_query($con,$q);

$posts=[];

while($row = mysqli_fetch_row($query)){	
	array_push($posts
	,[
		'title'=>$row[0]
		,'description'=>$row[1]
		,'author'=>$row[2]
		,'created_at'=>$row[3]
	]
	);
}
mysqli_close($con);
// $posts=[
	// [
		// 'title'=>'Man must explore, and this is exploration at its greatest',
		// 'description'=>'Problems look mighty small from 150 miles up',
		// 'author'=>'Ahmed',
		// 'created_at'=>'September 24, 2018'
	// ],
	// [
		// 'title'=>"I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.",
		// 'description'=>'',
		// 'author'=>'Ahmed',
		// 'created_at'=>'September 18, 2018'
	// ],
	// [
		// 'title'=>'Science has not yet mastered prophecy',
		// 'description'=>'We predict too much for the next year and yet far too little for the next ten.',
		// 'author'=>'Ahmed',
		// 'created_at'=>'August 24, 2018'
	// ],
	// [
		// 'title'=>'Failure is not an option',
		// 'description'=>'Many say exploration is part of our destiny, but it’s actually our duty to future generations.',
		// 'author'=>'',
		// 'created_at'=>'July 8, 2018'
	// ]
// ];
?>