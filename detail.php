<?php
$i=$_GET['post_id'];
<<<<<<< Updated upstream
?>
=======
$blogs = [
    [
        'title'=> 'Gaming',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Donec venenatis sapien elit, vel convallis mauris ullamcorper ac.
          Curabitur vestibulum felis et urna mattis facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, 
          per inceptos himenaeos. Proin pulvinar neque ut magna pellentesque luctus. Aliquam vitae consectetur nulla. Cras pulvinar lobortis 
          tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut pulvinar nunc nec lacus tincidunt, quis porta libero auctor.
          Sed ultrices lacinia neque ac luctus. Pellentesque ut consequat quam. Nunc dictum, augue a facilisis lobortis, leo eros vehicula arcu, eget porttitor purus sapien interdum nibh. Praesent vitae lorem a ligula viverra posuere.',
        'author' => 'Landen Tomlin',
        'date' => '9/16/2024'
    ],
    [
        'title'=> 'Weightlifting',
        'content' => 'Nullam iaculis elit et lectus blandit ornare. Mauris diam ex, congue hendrerit pretium id, pharetra sit amet felis.
         Nullam aliquam ultricies neque, ut aliquet sapien porttitor consectetur. Suspendisse nec tempus arcu, eget rhoncus dui. Nulla in pulvinar massa. Nam pellentesque sem sit amet ipsum auctor semper.
          Mauris imperdiet sapien quis augue mollis, quis tempus sapien euismod. Mauris eget auctor ante. Duis non iaculis dolor. Vestibulum porta erat et porttitor volutpat. Mauris in auctor risus. Fusce convallis est ex, vel elementum nunc vestibulum eget.
          Fusce condimentum leo quis gravida rhoncus. Mauris ac purus sed sapien posuere luctus sit amet nec tellus. Nunc gravida, velit et placerat porttitor, turpis nunc congue urna, eget dignissim enim neque in ex.
          Integer faucibus, mauris sed maximus luctus, magna lorem dignissim elit, id ultrices magna ante id felis. ',
        'author' => 'Josh Harris',
        'date' => '9/14/2024'
    ],
    [
        'title'=> 'Cybersecurity',
        'content' => 'Praesent lobortis leo vel ligula viverra viverra. 
        Fusce condimentum tortor orci, feugiat sollicitudin sem auctor in. Cras placerat mauris eu turpis rhoncus dapibus. Nullam tellus dolor, dictum ac sem vel, venenatis ullamcorper dui.
         Phasellus ac felis at leo faucibus porta at sed arcu. Mauris vulputate fringilla maximus. Suspendisse potenti. Sed fringilla molestie purus, vitae vulputate risus consequat vehicula.
         Aenean dapibus ante eget velit dictum faucibus. Duis quis viverra metus. Nulla vel imperdiet urna. Phasellus eu arcu risus. Vestibulum euismod ante posuere molestie tincidunt. Donec rutrum eu odio tristique gravida.',
        'author' => 'Michael Hoffmeier',
        'date' => '9/15/2024'
    ]
]
?>

<html>
    <head>
        <title><?=$blogs[$i]['title'].' by '.$blogs[$i]['author']?></title>
    </head>
</html>
>>>>>>> Stashed changes
