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
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="/index.php/uni/course">Programs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="hero-unit">
                    <h1>The best way to make academic decisions!</h1>
                    <p>Find students feedback and choose the right program for you.</p>

                    <form action="/index.php/home" method="post" id="search_form" class="form-horizontal">
                        <input type="text" name="key" value ="" placeholder="University, program, master ..."  />
                        <input type="submit" class="btn btn-primary" />
                        <a href="" id="adv_search">Advanced search</a>
                        <div id="div_adv_search" class="hide">
                            <label>Country</label>
                            <select name="country">
                                <option value=""></option>
                                <?php
                                foreach ($country as $c) {
                                    echo "<option value=\"" . $c->country . "\">" . $c->country . "</option>";
                                }
                                ?>
                            </select>
                            <label>Area</label>
                            <select name="area">
                                <option value=""></option>
                                <?php
                                foreach ($area as $c) {
                                    echo "<option value=\"" . $c->sector . "\">" . $c->sector . "</option>";
                                }
                                ?>
                            </select>
                            <label>Level</label>
                            <select name="livello">
                                <option value=""></option>
                                <?php
                                foreach ($livello as $c) {
                                    echo "<option value=\"" . $c->description . "\">" . $c->description . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </form>

                </div>
                <h3>Sono stati trovati <?php echo count($courses); ?> risultati per la tua ricerca</h3>
                <div id="course_list">
                    <?php if(count($courses) != 0): ?>
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
                    <?php endif;?>
                </div>

                <div class="footer">
                    <p>&copy; Ugrade 2013</p>
                </div>

            </div>
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/home.js"></script>
    </body>
</html> 