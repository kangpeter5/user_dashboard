<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>User List for Dashboard</title>
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
            <form class="navbar-form pull-right" action="/users/logout">
              <button type="submit" class="btn">Log Off</button>
            </form> 
        	</div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Manage Users</h1>
        <br>
        <table class="table table-striped">
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>User level</th>
          <th>Created At </th>
        </thead>
        <tbody>
<?php 
          foreach ($users as $user) 
          {
?>
           <tr>
            <td><?php echo $user['id']; ?></td>
            <td><a href="/dashboards/profile/<?=$user['id']?>" ><?php echo $user['first_name'] . " " . $user['last_name']; ?></a></td>
            <td><?php echo $user['email']; ?></td>
            <td>
              <span>
                <?php echo ($user['user_level']); ?>
              </span>
            </td>
            <td>
              <?php echo $user['created_at']; ?>
            </td>
<?php         
          } 
?>  
           </tr>
        </tbody>
        </table>
      </div>

      <!-- Example row of columns -->

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
