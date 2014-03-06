<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soho</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="header">
        <div class="logo">
            <a href="./">YOURLOGO</a>
        </div>
    </div>
    
    <div class="content row">
        <div class="col-xs-3 col-sm-3 col-md-2 col">
            &nbsp;
            <hr>
            <ul class="menu">
                <li><a href="./">Home</a></li>
                <li><a href="./about.php">About</a></li>
                <li><a class="active" href="./archive.php">Archive</a></li>
            </ul>
            
            <hr>
            
            <ul class="menu">
                <li><a href="#">Behance</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Linkedin</a></li>
            </ul>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-8 col">
            &nbsp;
            <hr>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="archive-post"><a href="#">&raquo; Test title</a>&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;<span>02 June 2013</span></div>
            <div class="text-right"><a href="#">more &raquo;</a></div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-2 col">
            Categories
            <hr>
            <ul class="menu">
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Test</a></li>
            </ul>
        </div>
    </div>
    
    <div class="footer">
        &copy; Powered by <a href="http://www.writus.com">Writus</a>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="./assets/js/imgLiquid-min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $(".article-image").imgLiquid();
        
        });
    </script>

  </body>
</html>