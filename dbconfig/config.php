<?php
	$con = mysqli_connect("localhost","root","","vikhealthcare");

	if(!$con) {
		die("failed to connect".mysqli_error($con));
    	}

        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $contacttext=$_POST['contacttext'];
        
        $query="INSERT INTO `contact_query` ( `first name`, `last name`, `email`, `contact no`, `date`, `query`) VALUES ('$first_name', '$last_name', '$email', '$contact', current_timestamp(), '$contacttext');"
        ;
        
        $result=mysqli_query($con,$query);
       

        header("location:http://localhost/hospital%20site%20project/contact.php");

    
?>