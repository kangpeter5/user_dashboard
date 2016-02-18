<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile of the User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          	<a class="brand" href="/main/index">Test App</a>
            <div class="nav-collapse collapse">
            <ul class="nav">
                <li class="active"><a href="/main/index">Home</a></li>
            </ul>
            <form class="navbar-form pull-right" action="/users/logout">
                  <button type="submit" class="btn">Log Out</button>
            </form> 
        	</div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h4><?php echo $user['first_name'] . " " . $user['last_name']; ?></h4>

        <label>Registered At: <label> <p><?= $user['created_at']; ?></p>
    		<label>User Id: <label> <p><?= $user['id']; ?></p>
    		<label>Email Address: <label> <p><?= $user['email']; ?></p>
        <label>Description: </label> <p><?= $user['description']; ?></p>
      </div>
      <!-- Example row of columns -->

      <div>
        <!-- messages/posts -->
        <h3>Post a Message</h3>
        <form action="" method="post">
          <input type="hidden" name="action" value="post_message">
          <textarea name="message"></textarea>
          <button type="submit" class="btn">Post</button>
        </form>

        <!-- comments on posts -->
        <form action="" method="post">
          <input type="hidden" name="action" value="post_comment">
          <textarea name="comment"></textarea>
          <button type="submit" class="btn">Comment</button>
        </form>
      </div>

      <hr>

      <footer>
        <p>&copy; Pete Kang 2016</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
