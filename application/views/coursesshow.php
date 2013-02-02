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
                        <?php 
                        ?>
                        <?php foreach($user as $c):?>
                            <div class="bs-docs-example well">
                              <img src="http://www.gravatar.com/avatar/<?php echo md5("fabio.fabbrucci@gmail.com")?>" />
                              <ul id="myTab" class="nav nav-tabs">
                                <li><a href="#1" data-toggle="tab">Ammissione</a></li>
                                <li><a href="#2" data-toggle="tab">Modalit&agrave; Corso</a></li>
                                <li><a href="#3" data-toggle="tab">Docenti</a></li>
                                <li><a href="#4" data-toggle="tab">Contesto Internazionale</a></li>
                                <li><a href="#5" data-toggle="tab">Stage</a></li>
                              </ul>
                              <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="1">
                                  <p><?php echo $c['1'];?></p>
                                </div>
                                <div class="tab-pane fade" id="2">
                                  <p><?php echo $c['2'];?></p>
                                </div>
                                <div class="tab-pane fade" id="3">
                                    <p><?php echo $c['3'];?></p>
                                </div>
                                <div class="tab-pane fade" id="4">
                                    <p><?php echo $c['4'];?></p>
                                </div>
                                <div class="tab-pane fade" id="5">
                                    <p><?php echo $c['5'];?></p>
                                </div>
                                 </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="span4">
                        <div class="well well-small" id="course_show_graphs">
                            <div class="pull-right" id="ranking">
                                <b>3</b>° di 15
                            </div>
                            <h4>InfoGraphics</h4>
                            <hr />
                            <div class="labels">
                                skill 1<br />
                                skill 2<br />
                                skill 3<br />
                                skill 4<br />
                                skill 5<br />
                            </div>
                                
                            <div class="bars">
                                <div class="progress progress-info">
                                    <div class="bar width20">1.3</div>
                                </div>
                                <div class="progress progress-success">
                                    <div class="bar width40">2.1</div>
                                </div>
                                <div class="progress progress-warning">
                                    <div class="bar width60">3.2</div>
                                </div>
                                <div class="progress progress-danger">
                                    <div class="bar width80">4</div>
                                </div>
                                <div class="progress progress-warning">
                                    <div class="bar width12">0.8</div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <?php 
                	if ( isset ( $message )) {
						echo "<div id='message'>$message</div>\n";	
					}
                ?>
                
                <form action="/uni/send_comment" method="POST" >
                	<?php
                		$counter = 0; 
                		if (isset  ( $course) ) {
                			foreach ($course["questions"] as $question) {  
					?>
                		
                	E-mail <input type="text" name="email">
               		<div>
               			<input type="hidden" name="id<?php echo $counter; ?>" value="<?php echo $question -> id;?>">
               			<div>
                			<div><?php echo $question -> titolo; ?></div>
                			<div><?php echo $question -> text; ?></div>
                		</div>
                		<div>
                			<input type="radio" name="vote<?php echo $counter; ?>" value="1">1
							<input type="radio" name="vote<?php echo $counter; ?>" value="2">2
							<input type="radio" name="vote<?php echo $counter; ?>" value="3" checked>3
							<input type="radio" name="vote<?php echo $counter; ?>" value="4">4
							<input type="radio" name="vote<?php echo $counter; ?>" value="5">5<br/>
							<textarea name="comment<?php echo $counter; ?>"></textarea>
                		</div>
                	</div>
                	<?php
                				$counter ++; 
                			}
						} 
					?>
					
					<input type="hidden" name="counter" value="<?php echo $counter;?>">
					<input type="hidden" name="program_id" value="<?php echo $course["program_id"]; ?>">
					<input type="submit" >
                </form>      
                <div class="footer">
                    <p>&copy; Company 2013</p>
                </div>
            </div>
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/bootstrap-tab.js"></script>
        <script src="/js/courseshow.js"></script>
    </body>
</html>