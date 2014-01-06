<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $this->title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="assets/css/bootstrap-flat.min.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>

        <script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        
        <div class="containter">

            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center"><?= $this->title; ?></h1>
                <div class="list-group">
                    <?php foreach ($this->files as $file): ?>
                    <a href="post.php?p=<?= $file->link?>" class="list-group-item">
        
                            <span class="badge"><?= $file->date?></span>
                            <?= $file->name?>

                    </a>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="jassets/s/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
