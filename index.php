<?php
$blogs = [
    'post1' => [
        'title'=> 'Gaming',
        'content' => 'Lipsum',
        'author' => 'Landen Tomlin',
        'date' => '9/16/2024'
    ],
    'post2' => [
        'title'=> 'Weightlifting',
        'content' => 'Lipsum',
        'author' => 'Josh Harris',
        'date' => '9/14/2024'
    ],
    'post3' => [
        'title'=> 'Cybersecurity',
        'content' => 'Lipsum',
        'author' => 'Michael Hoffmeier',
        'date' => '9/15/2024'
    ]
]
?>
<html>
    <head>
        <title>Amazing Team Blog</title>
    </head>
    <body>
        <h1>Our Blogs</h1>
        <?php for($i=0;$i<count($blogs); $i++) { ?>
            <?php echo '<a href="detail.php?post_id='.$i.'">'.$blogs[$i]['title'].'</a>'?>
        <?php } ?>
    </body>
</html>