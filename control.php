<?php





$link = mysqli_connect("localhost","root","","");

if ($link == false) {
    die("Connection failed: " );
  }
//   echo "Connected successfully";


  $sql = "CREATE DATABASE myBase";
  

	if(mysqli_query($link,$sql)){
		// echo "myBase database created !!!";
	}
	else{
        // echo "Error in creating new datavase" . mysqli_error($link) ;
    }
    
    $link = mysqli_connect("localhost","root","","myBase");

    $sql = "CREATE TABLE robotControl (

		s VARCHAR(30) NOT NULL,
		f VARCHAR(30) NOT NULL,
        b VARCHAR(30) NOT NULL,
		r VARCHAR(30) NOT NULL,
        l VARCHAR(30) NOT NULL)";


		if (mysqli_query($link,$sql)) {
            // echo "table craeted";

		}
		else
		{ 
           
			// echo mysqli_error($link);
        }
        
        if (isset($_POST['fb'])){

            $sql = "INSERT INTO robotControl (s,f,b,r,l)
                VALUES ('','Forward','','','')";

            if (mysqli_query($link,$sql)) {
                echo "Forward is Clicked";
            } else {
                // echo "Error: " . mysqli_error($link);
            }
        }
        else if (isset($_POST['bb'])){

            $sql = "INSERT INTO robotControl (s,f,b,r,l)
                VALUES ('','','Backword','','')";

            if (mysqli_query($link,$sql)) {
                echo "Backword is Clicked";
            } else {
                // echo "Error: " . mysqli_error($link);
            }
        }

        else if (isset($_POST['lb'])){

            $sql = "INSERT INTO robotControl (s,f,b,r,l)
                VALUES ('','','','','Left')";

            if (mysqli_query($link,$sql)) {
                echo "Left is Clicked";
            } else {
                // echo "Error: " . mysqli_error($link);
            }
        }

        else if (isset($_POST['rb'])){

            $sql = "INSERT INTO robotControl (s,f,b,r,l)
                VALUES ('','','','Right','')";

            if (mysqli_query($link,$sql)) {
                echo "Right is Clicked";
            } else {
                // echo "Error: " . mysqli_error($link);
            }
        }

        else if (isset($_POST['sb'])){

            $sql = "INSERT INTO robotControl (s,f,b,r,l)
                VALUES ('Stop','','','','')";

            if (mysqli_query($link,$sql)) {
                echo "Stop is Clicked";
            } else {
                // echo "Error: " . mysqli_error($link);
            }
        }





?>