<?php
require_once '../con.php';
// Start session
// error_reporting(E_ALL); ini_set('display_errors', '1');

session_start();

if(isset($_SESSION['login_admin'])) {

?>
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/golkam/assets/frontend/assets/images/index.png" type="image/x-icon">

	<title>Golkam</title>

	<!-- Styles -->
	<link rel="stylesheet" href="app.css">
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">

					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"
					 aria-expanded="false">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Branding Image -->
					<a class="navbar-brand" href="/golkam/admin">
						Golkam
					</a>
				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
								<?php echo $_SESSION['name_admin']; ?> <span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<li>
									<a href="logout.php">
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- // content -->
        <?php
            session_start();
            if(!empty($_SESSION['deleteMember'])) {
                $message = $_SESSION['deleteMember'];
                echo "<h1>$message</h1>";
                unset($_SESSION['deleteMember']);
            }
        ?>
        <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                          <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Delete Member</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
            $query = "select * from users where role='member'";
            $results = mysqli_query($con, $query);
            

            while ($data = mysqli_fetch_array($results)) {
                ?>
        <tr>
            <td>
                <?php echo $data['id_user'] ?>
            </td>
            <td>
                <?php echo $data['name'] ?>
            </td>
            <td>
                <?php echo $data['username'] ?>
            </td>
            <td><a href="deletemember.php?id=<?php echo $data['id_user']; ?>" onclick="return confirm('Tenane?')">Delete</a></td>
        </tr>
        <?php
            }

        ?>
        </tbody>
    </table>
               

        <!-- // end content -->

	</div>

	<script src="app.js"></script>
</body>

</html>
<?php
}
else{
	header("location: login");
}
?>