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
        <link href="http://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet" />
    </head>
    <body>

        <div class="container">
            <div class="pull-right">
                <a href="https://www.facebook.com/pages/Ugrade/557436500934481" class="zocial facebook icon"></a>
                <a href="https://twitter.com/Ugrade1" class="zocial twitter icon"></a>
                <a href="mailto:ugrade.startup@gmail.com" class="zocial gmail icon"></a>
                <a href="http://www.linkedin.com/groups/Ugrade-4833031/about" class="zocial linkedin icon"></a>
            </div>
            <a href="/index.php/" id="brand">
                <img src="/img/logo.ugrade.png" />
            </a>

            <div class="hero-unit">
                <h1>The best way to make your academic decisions!</h1>
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
                <?php if (count($courses) != 0) { ?>
                    <div id="course_list">
                        <h3>Sono stati trovati <?php echo count($courses); ?> risultati per la tua ricerca</h3>
                        <?php foreach ($courses as $c) { ?>
                            <article>
                                <div class="pull-right">
                                    <?php echo $c['uni']->name; ?> <i class="icon-home"></i><br />
                                    <b>14</b> feedbacks <i class="icon-star"></i>
                                </div>
                                <?php
                                echo "<h2><a href=\"/index.php/uni/course/" . $c['corso']->id . "\">" . $c['corso']->name . "</a></h2>";
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
                        <?php }
                    ?>
                    </div>    
                    <?php    
                    } else {
                        ?>

                        <div class="row">
                            <div class="span8">
                                <h4>SubHeading</h4>
                                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                                <h4>SubHeading</h4>
                                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                                <h4>SubHeading</h4>
                                <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                            </div>
                            <div class="span4">
                                <div class="well">
                                    <center>
                                        <h4>Contribute</h4>
                                        <a class="btn btn-large" href="http://www.surveymonkey.com/s/CNRQVVD" target="_blank">
                                            <i class="icon-ok-sign"></i> Join the survey
                                        </a>

                                        <h4>Keep in touch</h4>
                                        <a href="http://eepurl.com/uQE5v" target="_blank" class="btn btn-large"><i class="icon-envelope"></i> Subscribe our newsletter</a>
                                    <center>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                        
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