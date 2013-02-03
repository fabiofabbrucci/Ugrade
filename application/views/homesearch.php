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
            
            <div class="well">
                <form action="/index.php/home" method="post" id="search_form" class="form-horizontal">
                    <input type="text" name="key" value ="" placeholder="University, program, master ..."  />
                    <input type="submit" class="btn btn-primary" />
                    <a href="#" id="adv_search">Advanced search</a>
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
            <form action="/index.php/uni/compare" method="post">
            <div class="pull-right">
                <input type="submit" class="btn compare-button" value="Compare" />
            </div>
            <h3>Sono stati trovati <?php echo count($courses); ?> risultati per la tua ricerca</h3>
            <div id="course_list">
                <?php foreach($courses as $c){ ?>
                    <article>
                        <div class="pull-right">
                            Compare <input type="checkbox" name="program[]" value="<?php echo $c['corso']->id; ?>" /><br />
                            <?php echo $c['uni']->name; ?> <i class="icon-home"></i><br />
                            <b><?php echo $c ["feedback_count"]; ?></b> feedbacks <i class="icon-star"></i>
                        </div>
                        <?php
                            echo "<h2><a href=\"/index.php/uni/course/".$c['corso']->id."\">".$c['corso']->name."</a></h2>";
                        ?>
                        
                        <div class="progress" style="width:90%;display:inline-block;">
                        
                        <?php 
                            $colors = array ("bar-success", "bar-warning", "bar-danger", "bar-info");
                            $counter = 0;
                            $n = count ($colors);
                            $avg = 0;
                            foreach ( $c['ranks'] as $rank ) {
                                $avg += $rank ["avg"];
                        ?>
                        	<div class="bar <?php echo $colors [$counter %  $n]; ?>" style="width: <?php echo (($rank['avg']/100) * 20); ?>%;" rel="tooltip" title="<?php echo $rank['titolo'];?>"><?php printf ("%2.0f", $rank ["avg"]);?></div>
                       
                        <?php 
                        	$counter ++;
						}
							if ($counter != 0)
								$avg /= $counter;
						?>
                        </div>
                        <?php printf ("<div style='display: inline-block; float: right;'>%d %%</div>", $avg); ?>
                        <div class="clearfix"></div>
                    </article>
                <?php } ?>
            </div>
            <div class="pull-right">
                <input type="submit" class="btn compare-button" value="Compare" />
            </div>
            <div class="clearfix"></div>
            </form>

            <div class="footer">
                <p>&copy; Ugrade 2013</p>
            </div>

        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/bootstrap-tooltip.js"></script>
        <script src="/js/home.js"></script>
        <script src="/js/courselist.js"></script>
    </body>
</html> 