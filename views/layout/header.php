<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
	
	<body>
	<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="/">HOME</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item">
					<a class="nav-link" href="/office">Offices</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="/user">Users</a>
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