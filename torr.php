 <?php



if(isset($_POST['submit'])){

// var_dump($_POST);

try {
    
$to =  $_POST['email'];
$subject = 'New Resume';
$message = [];
$headers = "From: abiodune.idowu@gmail.com" . "\r\n" .
"CC: ". $_POST['email']. "\r\n";


foreach ($_POST as $key => $value) {

    if($key != 'submit' ){

                $message[] = $key.' -- '.$value . ' <br>';
            
            }
}

// var_dump($message);
$message = implode(" ", $message);


mail($to,$subject,$message,$headers);

echo '<script>alert("Successfully Submitted. Do not retry")</script>';


} 

catch (Exception $e) {

    header('location: index.php');
}


}

else{ header('location: index.php'); }



?>