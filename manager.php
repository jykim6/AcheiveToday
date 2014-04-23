<!DOCTYPE html>
 <html lang = "en">
 <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Parent Page</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" > --> 
 </head>

 <body>
         
	<div class="container">
		<?php
			// Hey chris i don't really know how the grid layout works so i'm only put some of the 
			// views on to the page and implement more later 
			// i drew out the page view strictly for desktop use but we're going to advertise it 
			// that it will be avaible for moblie as well
			// i'll be availible thorugh the group caht tonight so just hit me up
			//
			//
			//
			//
		?>

		<div class="row">
	   		


	   		<?php 	// Accessing database from localhost in sqlite. works with my local setup
	   				// i'm thinking about chnaging to mysql and finding a way to use it with 
	   				// android programming. unless someone know how to delpo at sqlite db
	   			   	// without paying.
	   				// 


				echo sqlite_libversion();
				echo "<br>";
				echo phpversion();

				$dbhandle = sqlite_open('/Applications/AMPPS/SQliteManager/test.sqlite', 0666, $error);
				if (!$dbhandle) die ($error);

				$stm = "CREATE TABLE Tasksblah(Id integer PRIMARY KEY," . 
				       "Name text UNIQUE NOT NULL, Sex text CHECK(Sex IN ('M', 'F')))";
				$ok = sqlite_exec($dbhandle, $stm, $error);

				if (!$ok) die("Cannot execute query. $error");

				echo "<br>";
				echo "Database Friends created successfully";

				sqlite_close($dbhandle);

			?>


	        <div class="unit hero">
	        	<h2>Box Number 3</h2>
	        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	        <p><a class="btn" href="#">Click meeee &raquo;</a></p>
	        </div><!-- .span4 -->

		</div><!-- .row -->






      
	</div><!-- .container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>


 </body>
</html>