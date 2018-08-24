<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="../../content/js/jquery-3.3.1.min.js"></script>
        <script src="../../content/js/moment.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
        <script src="../../content/js/bootstrap-datetimepicker.js"></script>
        <script src="../../content/js/date.format.min.js"></script>
        <script src="../../content/js/jquery.scheduler.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="../../content/css/jquery.scheduler.css">
        <link rel="stylesheet" href="../../content/css/bootstrap-datetimepicker.min.css">
    </head>
	
	<body>
	<div class="container">
			<nav class="navbar navbar-inverse">
			  <a class="navbar-brand" href="/">HOME</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="nav navbar-nav">
				  <li>
					<a href="/office">Offices</a>
				  </li>
				  <li>
					<a href="/user">Users</a>
				  </li>
				</ul>
                  <ul class="nav navbar-nav navbar-right">
                      <?php if(isset($_SESSION['user_id'])): ?>
                          <li class="nav-item">
                              <a class="nav-link" href="/user/logout">Logout</a>
                          </li>
                      <?php endif; ?>
                  </ul>
			  </div>
			</nav>
			<br/>
        <?php include('messages.php'); ?>