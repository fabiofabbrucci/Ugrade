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
                        <a class="brand" href="/index.php/">UGrade</a>
                        <div class="nav-collapse collapse">
                            <p class="navbar-text pull-right">
                            </p>
                            <ul class="nav">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li class="active"><a href="/index.php/uni/course">Programs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="span8">
                        <div class="well">
                            <h1><?php echo $course['corso']->name; ?></h1>
                            <i class="icon-home"></i> <?php echo $course['uni']->name; ?> <i class="icon-shopping-cart"></i> $<?php echo $course['corso']->cost; ?> <span class="badge badge-info">Business</span>
                        </div>
                        
                        <div id="course_description">
                            <h3>Description</h3>
                            <p>
                                <?php echo $course['corso']->description; ?>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu vehicula odio. Suspendisse tristique enim non leo ullamcorper a blandit felis porta. Suspendisse vulputate viverra tempor. Nunc a lorem arcu, eu feugiat magna. Nunc suscipit volutpat orci, non tempor eros viverra eget. Donec aliquam ullamcorper purus, nec placerat augue elementum sit amet. Morbi fringilla eros rhoncus massa interdum sed scelerisque felis tincidunt. Phasellus dignissim nulla eget eros dictum nec hendrerit dolor accumsan. Praesent ornare quam sed ipsum malesuada eu pulvinar ante varius. Nullam convallis, lorem sed sagittis lacinia, augue velit sollicitudin neque, sit amet auctor ipsum velit sed ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dapibus erat at turpis dapibus iaculis. Aliquam erat volutpat. Proin ullamcorper est et orci pretium tincidunt. Morbi ultrices dignissim malesuada. Mauris eget quam magna, eget faucibus nunc.</p>

                            <h3>Schedule</h3>
                            <p>
                                <?php echo $course['corso']->schedule; ?>
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu vehicula odio. Suspendisse tristique enim non leo ullamcorper a blandit felis porta. Suspendisse vulputate viverra tempor. Nunc a lorem arcu, eu feugiat magna. Nunc suscipit volutpat orci, non tempor eros viverra eget. Donec aliquam ullamcorper purus, nec placerat augue elementum sit amet. Morbi fringilla eros rhoncus massa interdum sed scelerisque felis tincidunt. Phasellus dignissim nulla eget eros dictum nec hendrerit dolor accumsan. Praesent ornare quam sed ipsum malesuada eu pulvinar ante varius. Nullam convallis, lorem sed sagittis lacinia, augue velit sollicitudin neque, sit amet auctor ipsum velit sed ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dapibus erat at turpis dapibus iaculis. Aliquam erat volutpat. Proin ullamcorper est et orci pretium tincidunt. Morbi ultrices dignissim malesuada. Mauris eget quam magna, eget faucibus nunc.</p>
                            
                            <a id="read_more">Read more ...</a>
                        </div>
                        <hr />
                        <h2>Feedbacks</h2>
                        
                    </div>
                    <div class="span4">
                        <div class="well well-small">
                            <h4>InfoGraphics</h4>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <p>&copy; Company 2013</p>
                </div>

            </div>
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/courseshow.js"></script>
    </body>
</html>