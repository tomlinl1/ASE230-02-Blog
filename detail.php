<?php
$i=$_GET['post_id'];
$blogs = [
    [
        'title'=> 'Gaming',
        'content' => 'Lipsum',
        'author' => 'Landen Tomlin',
        'date' => '9/16/2024'
    ],
    [
        'title'=> 'Weightlifting',
        'content' => 'Lipsum',
        'author' => 'Josh Harris',
        'date' => '9/14/2024'
    ],
    [
        'title'=> 'Cybersecurity',
        'content' => 'Lipsum',
        'author' => 'Michael Hoffmeier',
        'date' => '9/15/2024'
    ]
]
?>
<html>
    <head>
        <title><?=$blogs[$i]['title'].' by '.$blogs[$i]['author']?></title>
    </head>
    <body>
        <h1><?=$blogs[$i]['title']?></h1>
        <h3><?='by: '.$blogs[$i]['author']?></h3>
        <h4><?='Posted on: '.$blogs[$i]['date']?></h4>
        <p><?=$blogs[$i]['content']?></p>
        
    </body>
</html>
