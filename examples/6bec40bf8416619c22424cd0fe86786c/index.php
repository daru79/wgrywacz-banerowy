
            
<?php
include_once "../../engine/db/UniversalConnect.class.php";
include_once "../../engine/view/FinalBannersView.class.php";
?>            
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wgrywacz banerowy</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../fonts/font-awesome-4.2.0/css/font-awesome.min.css">
    
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="../../js/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="../../js/jquery-ui/jquery-ui.structure.css">
    <link rel="stylesheet" href="../../js/jquery-ui/jquery-ui.theme.css">
    
    <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel="stylesheet">
    
    <!-- Style -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /*
        [class*="col-"]{
            background-color: rgba(255,195,50,.3);
            border: 1px solid rgba(255,195,50,.4);
            padding: 10px;
        }
        */
    </style>

</head>
<body>
    
    <nav class="navbar navbar-default" role="navigation" id="Header-nav">
        <div class="container-fluid">
            <img src="../../images/logo.png" class="pull-left" id="Header-img">
        </div>
    </nav>

        <div class="row">
            <div class="col-md-12 Margin-top-30">
                <?php
                $FinalBannersView = new FinalBannersView();
                ?>
            </div>
        </div>
                
        </div>
        
    </div>
    
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
    
    <!-- my .js scripts -->
    <script src="../../js/my_script.js"></script> <!-- własne skrypty -->
    
</body>
</html>
                    
