<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>UGrade</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="/css/bootstrap.css" rel="stylesheet" />
        <link href="/css/application.css" rel="stylesheet" />
        <link href="/css/zocial.css" rel="stylesheet" />
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
                    
                    <?php $counter = 0; ?>
                    <?php if ($form_comment) { ?>
                    <div class="well">
                        <h3>Rant this program</h3>
                        <form action="/index.php/uni/send_comment" method="POST" class="form_comment">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-envelope"></i></span><input type="email" name="email" placeholder="Email">
                            </div>
                            <input type="hidden" name="counter" value="5">
                            <input type="hidden" name="program_id" value="<?php echo $course["program_id"]; ?>">
                                <ul class="nav nav-tabs" id="tabs_comment">
                                <?php foreach ($course["questions"] as $i=>$question) { ?>
                                    <li>
                                        <a href="#comment_question<?php echo $i; ?>" data-toggle="tab"><?php echo $question->titolo; ?></a>
                                    </li>
                                <?php } ?>
                                </ul>
                                <div class="tab-content">
                                <?php foreach ($course["questions"] as $i => $question) { ?>
                                    <div class="tab-pane active" id="comment_question<?php echo $i; ?>">
                                        <input type="hidden" name="id<?php echo $counter; ?>" value="<?php echo $question -> id;?>">
                                        <b><?php echo $question->text; ?></b><br />
                                        <div class="input-prepend">
                                            <span class="add-on">
                                                <i class="icon-signal"></i>
                                            </span>
                                            <input type="text" name="vote<?php echo $counter; ?>" placeholder="Rate from 0 to 100" />
                                        </div>
                                        <textarea placeholder="Put some text here" name="comment<?php echo $counter; ?>"></textarea>
                                        <?php $counter ++; ?>
                                    </div>
                                <?php } ?>
                                </div>
                            <input type="submit" value="Comment" class="btn btn-primary" >    
                        </form>      
                    </div>
                    <?php } ?>
                    
                    <?php foreach($commenti as $c): ?>
                    <div class="bs-docs-example well">
                        <img src="http://www.gravatar.com/avatar/<?php echo md5("fabio.fabbrucci@gmail.com"); ?>" />
                        <ul id="myTab" class="nav nav-tabs">
                        <li><a href="#1" data-toggle="tab">Ammissione</a></li>
                        <li><a href="#2" data-toggle="tab">Modelit&agrave; Corso</a></li>
                        <li><a href="#3" data-toggle="tab">Docenti</a></li>
                        <li><a href="#4" data-toggle="tab">Contesto Internazionale</a></li>
                        <li><a href="#5" data-toggle="tab">Stage</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="1">
                            <p><?php if(count($c['1'])==1) echo $c['1']->comment ; ?></p>
                        </div>
                        <div class="tab-pane fade" id="2">
                            <p><?php if(count($c['2'])==1) echo $c['2']->comment; ?></p>
                        </div>
                        <div class="tab-pane fade" id="3">
                            <p><?php if(count($c['3'])==1) echo $c['3']->comment; ?></p>
                        </div>
                        <div class="tab-pane fade" id="4">
                            <p><?php if(count($c['4'])==1) echo $c['4']->comment; ?></p>
                        </div>
                        <div class="tab-pane fade" id="5">
                            <p><?php if(count($c['5'])==1) echo $c['5']->comment; ?></p>
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
                            Ammissione<br />
                            Modalità corso<br />
                            Docenti<br />
                            Internazionalization<br />
                            Stage<br />
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

            
            <div class="footer">
                <p>&copy; Company 2013</p>
            </div>
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/bootstrap-tab.js"></script>
        <script src="/js/courseshow.js"></script>
    </body>
</html>