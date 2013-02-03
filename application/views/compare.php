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

            <table class="table">
                <tr>
                    <th></th>
                    <?php foreach($courses as $c){ ?>
                    <th>
                        <a href="/index.php/uni/course/<?php echo $c['corso']->id; ?>"><?php echo $c['corso']->name; ?>
                    </th>
                    <?php } ?>
                </tr>
                <tr>
                    <th>
                        <i class="icon-user"></i> Feedbacks
                    </th>
                    <?php foreach($courses as $c){ ?>
                    <td>
                        <span class="badge"><?php echo $c['feedback_count']; ?></span>
                    </td>
                    <?php } ?>
                </tr>
                <tr>
                    <th>
                        <i class="icon-signal"></i> Average rank
                    </th>
                    <?php foreach($courses as $c){ ?>
                    <td>
                         <span class="badge badge-info"><?php echo $c['avgRanks']; ?></span>
                    </td>
                    <?php } ?>
                </tr>
                
                <?php for ($i=0; $i<5; $i++){ ?>
                    <tr>
                    <?php foreach($courses as $index_c => $c){ ?>
                        <?php foreach($c['ranks'] as $index_r => $r){ ?>
                            <?php if ($index_r == $i) { ?>
                                <?php if ($index_c == 0) { ?>
                                    <th><?php echo $r['titolo']; ?></th>
                                <?php }else{ ?>
                                    <td>
                                        <div class="progress">
                                            <div class="bar" style="width: <?php echo $r['avg']; ?>%;"></div> <?php echo $r['avg']; ?> %
                                        </div>
                                    </td>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                    </tr>
                <?php } ?>
                
            </table>
                        
            <div class="footer">
                <p>&copy; Ugrade 2013</p>
            </div>
        </div>
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap-transition.js"></script>
        <script src="/js/home.js"></script>
    </body>
</html> 