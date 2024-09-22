<?php
/*$blogs = [
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
    ]*/
    require_once('json_function.php');
?>
<!doctype html>
<html lang="en" class="p-3 mb-2 bg-secondary text-white">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amazing Team Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    
    <body class="p-3 mb-2 bg-secondary text-white">
    <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
        <h1>Our Blogs</h1>
    </div>
    <br>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <?php for($i=0;$i<count($blogs); $i++) { ?> 
                    <div class="p-5 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
                        <?= '<h3><a href="detail.php?post_id='.$i.'">'.$blogs[$i]['title'].'</a></h3>'?>
                    </div>
                    <br>        
                <?php } ?>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>