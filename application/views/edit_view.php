<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Page of User Dashboard</title>
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
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          	<a class="brand" href="/main/index">Test App</a>
            <div class="nav-collapse collapse">
            <ul class="nav">
                <li class="active"><a href="/main/index">Home</a></li>
            </ul>
        	</div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h3>Edit | <?php echo $user['first_name'] . " " . $user['last_name']; ?></h3>
<?php
        if ($this->session->flashdata("edit_error")) 
        {
          echo "<p> " . $this->session->flashdata("edit_error") . "</p>";
        }
?>
      <div class="row">

        <div class="span3">
          <form action="/users/edit_process" method="post">
            <label>Email: <label><input type="text" name="email" value="<?php echo $user['email'] ; ?>"/>
            <label>First Name: <label><input type="text" name="first_name" value="<?php echo $user['first_name'] ; ?>"  />
            <label>Last Name: <label><input type="text" name="last_name" value="<?php echo $user['last_name'] ; ?>" />
            <button type='submit' class="btn">Save</button>
          </form>
        </div>

        <div class="span3">
          <form action="/users/edit_process" method="post">
            <label>Password: <label><input type="password" name="password" />
            <label>Confirm Password: <label><input type="password" name="confirm_password" />
            <button type='submit' class="btn">Update Password</button>
          </form>
        </div>

        <div class="span3">
          <form action="/users/edit_process" method="post">
            <label>Description: <label><textarea name="description" cols='100' rows='7' value="<?php echo $user['description'] ; ?>"/></textarea>
            <button type='submit' class="btn">Update Password</button>
          </form>
        </div>
      </div>

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
