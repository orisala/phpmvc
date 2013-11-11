<?php
define ("PATH_MODEL", "App/Model/");
define ("PATH_VIEW", "App/View/");
define ("PATH_CONTROLLER", "App/Controller/");

$data = array(
  'default' => array('model' => 'DefaultModel', 'view' => 'DefaultView', 'controller' => 'DefaultController'),
  'about' => array('model' => 'AboutModel', 'view' => 'AboutView', 'controller' => 'AboutController'),
  'portfolio' => array('model' => 'PortfolioModel', 'view' => 'PortfolioView', 'controller' => 'PortfolioController')
);

if (isset($_GET['page']) && $_GET['page']) {
    $page = $_GET['page'];   
}
else {$page = "default";}

foreach($data as $key => $components){
        if ($page == $key) {
            $model = $components['model'];
            $view = $components['view'];
            $controller = $components['controller'];
            break;
        }
    }

if (isset($model)) {
  include PATH_MODEL."$model".".php";
  include PATH_VIEW."$view".".php";
  include PATH_CONTROLLER."$controller".".php";

  $m = new $model();
  $c = new $controller($m);
  $v = new $view($c, $m);
  $content = $v->output();
  $title = $v->output_title();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>MVC Pattern</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="page-header">
      <h1>MVC: <?php echo $title?></h1>
    </div>
    
    <ul class="nav nav-pills">
      <li><a href="index.php">Index</a></li>
      <li><a href="index.php?page=about">About</a></li>
      <li><a href="index.php?page=portfolio">Portfolio</a></li>
    </ul>


    <div class="well well-large">
    <?php echo $content?>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>