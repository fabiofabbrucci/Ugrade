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

                <?php echo $course['corso'] ->name; ?>
                <?php echo $course['uni'  ] ->name; ?>
                
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/home.js"></script>
    </body>
</html>