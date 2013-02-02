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
                                <li><a href="#">About</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="index.php/uni/course">Programs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="hero-unit">
                    <h1>The best way to make academic decisions!</h1>
                    <p>Find students feedback and choose the right program for you.</p>
                    
                    <form action="/index.php/uni/course" method="POST" id="search_form" class="form-horizontal">
                        <input type="text" placeholder="University, program, master ..." name="" />
                        <input type="submit" class="btn btn-primary" value="Find" />
                        <a href="" id="adv_search">Advanced search</a>
                        <div id="div_adv_search" class="hide">
                            <label>Country</label>
                            <select>
                                <option></option>
                                <option>Italia</option>
                                <option>England</option>
                            </select>
                            <label>Area</label>
                            <select>
                                <option></option>
                                <option>Business</option>
                                <option>Design</option>
                            </select>
                            <label>Livello</label>
                            <select>
                                <option></option>
                                <option>PHD</option>
                                <option>XXX</option>
                            </select>
                        </div>
                    </form>
                </div>
                
                <div class="row">
                    <div class="span6">
                        <h4>SubHeading</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                        <h4>SubHeading</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                        <h4>SubHeading</h4>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                    </div>
                    <div class="span6">
                        
                        <div class="well">
                            <a href="https://www.facebook.com/pages/Ugrade/557436500934481" class="zocial facebook icon"></a>
                            <a href="https://twitter.com/Ugrade1" class="zocial twitter icon"></a>
                            <a href="mailto:ugrade.startup@gmail.com" class="zocial gmail icon"></a>
                            <a href="http://www.linkedin.com/groups/Ugrade-4833031/about" class="zocial linkedin icon"></a>
                            
                            <hr />
                            
                            <h4>Contribute</h4>
                            <p>
                                Let us to improve our service
                            </p>
                            <a class="btn btn-large" href="http://www.surveymonkey.com/s/CNRQVVD" target="_blank">
                                <i class="icon-ok-sign"></i> Join the survey
                            </a>
                            
                            <hr />
                            
                            <h4>Keep in touch</h4>
                            <a href="http://eepurl.com/uQE5v" target="_blank" class="btn btn-large"><i class="icon-envelope"></i> Subscribe our newsletter</a>
                        </div>
                    </div>
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