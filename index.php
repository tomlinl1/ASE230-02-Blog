<?php
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