<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Education-Manager</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css"> 
	<link rel="stylesheet" href="css/style.css"> 
	<link rel="icon" type="image/png" href="images/favicon.png" sizes="32x32">
	<link href="https://fonts.googleapis.com/css?family=Nunito400,600,700" rel="stylesheet">
	<script src="js/videkonferenz.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<br>
          <a class="navbar-brand" href="internal.php"><i</i> Education-Manager</a>
        </div><br>
        <?php if(!is_checked_in()): ?>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action="login.php" method="post">
			<table class="login" role="presentation">
				<tbody>
					<tr>
						<td>							
							<div class="input-group">
								<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
								<input class="form-control" placeholder="E-Mail" name="email" type="email" required>								
							</div>
						</td>
						<td><input class="form-control" placeholder="Passwort" name="passwort" type="password" value="" required></td>
						<td><button type="submit" class="btn btn-success">Login</button></td>
					</tr>
					<tr>
						<td><label style="margin-bottom: 0px; font-weight: normal;"><input type="checkbox" name="angemeldet_bleiben" value="remember-me" title="Angemeldet bleiben"  checked="checked" style="margin: 0; vertical-align: middle;" /> <small>Angemeldet bleiben</small></label></td>
						<td><small><a href="passwortvergessen.php">Passwort vergessen</a></small></td>
						<td></td>
					</tr>					
				</tbody>
			</table>		
          
            <br>
          </form>         
        </div>
<?php else: ?>
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
<li><a href="internal.php">Startseite</a></li>
            <li><a href="settings.php">Einstellungen</a></li>
			 <li><a href="impressum.php">Impressum</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>   
        </div>
<?php endif; ?>
      </div>
    </nav>
<body onMouseDown="return DoFalse();"> 
	
