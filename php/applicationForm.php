<?php
    require_once("form.inc.php");
		
		ini_set('display_errors', 0);

    $FrontendMessage = NULL;
    $from = NULL;
	$name = NULL;
	$phone = NULL;
	$message = NULL;

    if(isset($_POST['submit'])){
        $to = "tereshko.anna215@gmail.com"; // CHANGE
        $from = cleanString($_POST['email'] ); // this is the sender's Email address
        $name = cleanString($_POST['name']);
        $phone = cleanString($_POST['phone']);
        $message = cleanString($_POST['message']);
        $subject = "Form submission"; 
        $EmailBodyMessage = $name . " wrote the following:" . "\n\n" . $message;

        $errorEmail = checkEmail($from);	

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;

        if($errorEmail){
            // Fehlerfall
            $FrontendMessage = "<p class='error'>" . $errorEmail . "</p>";	
        
        }else{
                // Erfolgsfall
            $send = mail($to,$subject,$EmailBodyMessage,$headers);
            if($send){
                echo    "<div id='popup' class='overlay'>
                            <div class='popup'>
                                <h2>Отправление сообщения</h2>
                                <div id='closePopup' class='close'>&times;</div>
                                <div class='content'>
                                    Ваше сообшение отправлено, спасибо! Мы свяжемся с вами в ближайшее время.
                                </div>
                            </div>
                        </div>";
                $from = "";
                $name = "";
                $phone = "";
                $message = "";
                // You can also use header('Location: thank_you.php'); to redirect to another page.
            }else{
                echo "<div id='popup' class='overlay'>
                        <div class='popup'>
                            <h2>Ошибка отправления сообщения</h2>
                            <div id='closePopup' class='close'>&times;</div>
                            <div class='content'>
                                Отправка сообщения не удалась. Убедитесь, что указанные данные верны и попробуйте снова или свяжитесь с нами по электронному адресу info@3light.ru.
                            </div>
                        </div>
                      </div>";
            }
        }
    }
?>
