<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Cruise Search</title>
      
      <script src="http://d3js.org/d3.v3.min.js"></script>
      
      <!-- Heat Map files -->
      <link href="css/cal-heatmap.css" rel="stylesheet">
      
      <script src="js/cal-heatmap.js"></script>
      
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
      <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
      
      
      <link href="css/bootstrap-select.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/theme.css" rel="stylesheet">
      <!--<link href="css/grid.css" rel="stylesheet">-->
      
      <link href="css/font-awesome.css" rel="stylesheet">
      
   
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Download Data</a></li>
            <li><a href="#contact">Submit Data</a></li>
             <li><a href="#contact">Contact Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Format <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">CTD Data</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">ADCP Data</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<?php if(isset($content)) echo $content; ?>
	


	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>