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
                            <ul class="nav">
                                <li><a href="/index.php/">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li class="active"><a href="/index.php/uni/course">Programs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="page-header">
                    <h1>Lista dei corsi</h1>
                </div>
                    
                <div id="course_list">
                    <?php foreach($courses as $c){ ?>
                        <article>
                            <div class="pull-right">
                                <?php echo $c['uni']->name; ?> <i class="icon-home"></i><br />
                                <b>14</b> feedbacks <i class="icon-star"></i>
                            </div>
                            <?php
                                echo "<h2><a href=\"/index.php/uni/course/".$c['corso']->id."\">".$c['corso']->name."</a></h2>";
                            ?>
                            <div class="progress">
                                <div class="bar bar-success" style="width: 35%;" rel="tooltip" title="Skill 1">35%</div>
                                <div class="bar bar-warning" style="width: 20%;" rel="tooltip" title="Skill 2">20%</div>
                                <div class="bar bar-danger" style="width: 10%;" rel="tooltip" title="Skill 3">10%</div>
                                <div class="bar bar-info" style="width: 10%;" rel="tooltip" title="Skill 4">10%</div>
                                <div class="bar bar-success" style="width: 25%;" rel="tooltip" title="Skill 5">25%</div>
                            </div>
                            <div class="clearfix"></div>
                        </article>
                    <?php } ?>
                </div>
                <div class="footer">
                    <p>&copy; Ugrade 2013</p>
                </div>
 
            </div>
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/bootstrap-tooltip.js"></script>
        <script src="/js/courselist.js"></script>
    </body>
</html> 
