<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>UGrade</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/application.css" rel="stylesheet">
        <link href="/css/zocial.css" rel="stylesheet">
    </head>
    <body>

        <div id="container">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="brand" href="#">UGrade</a>
                        <div class="nav-collapse collapse">
                            <p class="navbar-text pull-right">
                            </p>
                            <ul class="nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Come funziona</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <?php echo $course->name; ?>
                
                <div class="footer">
                    <p>&copy; Company 2013</p>
                </div>

            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/home.js"></script>
    </body>
</html>