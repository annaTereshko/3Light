
<?php 
    if(isset($_POST['submit'])){
        echo "bla";
        $to = "tereshko.anna215@gmail.com";
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $subject = "Form submission";
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
?>
