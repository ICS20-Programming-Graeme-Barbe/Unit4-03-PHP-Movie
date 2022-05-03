<html lang="en-ca">
	<head>
		<!-- Meta Data -->
		<meta charset="utf-8" />
	    <meta name="description" content="Movie rating" />
	    <meta name="keywords" content="immaculata, ics2o" />
	    <meta name="author" content="Graeme" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Favicon -->
	    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
	    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
	    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
	    <link rel="manifest" href="./fav_index/site.webmanifest" />
		<!-- Css style sheet -->
		<link rel="stylesheet"dfghj href="./css/style.css" />
		<title>Age Rating for Movies</title>
	</head>
	<body>
		<!-- Title, Info and image -->
		<center><?php 
			echo '<center><h1>Age Rating for Movies</h1></center>';
			echo '<img src="./images/rating.png" width="30%"/>';
			echo "<center><p><br>Input your age and find out what age rating of movies you can watch!</p";
			echo "<center><p>Enter your age below</p>"; 
		?>
		<!-- Textfield -->
		<form method = "post">   
			<p>Age <input type="number" name="age" step="1" min="0">   
			<br><br>   
		<!-- Button -->
		<input type = "submit" name = "enter" value="Submit">    
		<br><br>
		<!-- Variables and Calculations -->
		<?php  
			if(isset($_POST['enter'])) {  
				$userAge = $_POST['age'];   
				// If statement for user age, what age category of movies they can see
				if ($userAge == "") {
					//Nothing was inputted
					echo"<br>You need to input your age";
				} else if ($userAge >= 17) {
					//User can see a R rated movie 
					echo"<br>You can go see an R rated movie with no supervision";
				} else if ($userAge >= 13) {
					//User can see a PG-13 movie 
					echo"<br>You can go see a PG-13 movie with no supervision";
				} else if ($userAge >=10) {
					//User can see a PG or G movie 
					echo"<br>You can go see an PG or a G movie with no supervision";
				} else {
					//User needs supervision
					echo"<br>You need supervision to watch any age category of movie";
				} 
			}
		?>
	</body>
</html>