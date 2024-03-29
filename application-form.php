<?php  require_once("php/applicationForm.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/overall-secondary.css">
        <link rel="stylesheet" href="css/application-form.css">
        
        <title>3Light</title>
    </head>
    
    <body>
        <h1 class="invisible">Форма заявки</h1>
        <div class="nav_contact">
            <div class="nav_contact__left">
                <div class="nav_contact__left__icon">
                    <a href="tel:+7(495) 111-11-11"><img src="img/tel.png" alt="Телефон" class="tel"></a>
                    <a href="tel:+7(495) 111-11-11"><span>+7(495) 111-11-11</span></a>
                </div>
                <div class="nav_contact__left__icon">
                    <a href= "mailto:info@3light.ru"><img src="img/mailto.png" alt="Электорная почта" class="mail"></a>
                    <a href= "mailto:info@3light.ru"><span class="mail">info@3light.ru</span></a>
                </div>
            </div>
            <div class="nav_contact__right">
                <a href=""><img src="img/logo-vk.png" alt="Вконтакте" class="vk"></a>
                <a href=""><img src="img/logo-telegram.png" alt="Телеграм" class="telegram"></a>                    
            </div>
        </div>
        <div class="nav_menu"> 
            <div class="container__logo_menu">
                <a href="index.html"><img src="img/menu-logo_mobile.png" alt="Логотип 3Light" class="logo_menu"></a>
            </div>
            <nav class="navigation navigation_desktop">        
                <ul id="navigation_desktop">
                    <li><a href="application-form.html">ФОРМА ЗАЯВКИ</a></li>
                    <li><a href="index.html#products">ПРОДУКЦИЯ</a></li>
                    <li><a href="about-company.html">О КОМПАНИИ</a></li>
                    <li><a href="contact.html">КОНТАКТЫ</a></li>            
                </ul>
            </nav>
            <input type="checkbox" id="checkbox"/>
            <div class="navigation__button">
                <span></span>
                <span></span>
                <span></span>
            </div>  
        </div>
        <div class="header">
            <nav class="navigation">        
                    <ul id="navigation">
                        <li><a href="application-form.html">ФОРМА ЗАЯВКИ</a></li>
                        <li><a href="index.html#products">ПРОДУКЦИЯ</a></li>
                        <li><a href="about-company.html">О КОМПАНИИ</a></li>
                        <li><a href="contact.html">КОНТАКТЫ</a></li>              
                    </ul>
            </nav>
        </div> 
        <div class="main-container" id="zIndexChange">
            <main id="content_container">
                <div class = "center_vertical">
                    <p class="form_text">Вы можете отправить запрос по интересующему Вас вопросу</p>
                    <form class="float-right" action="" method="post">
                        <label for="name">Ваше Имя*</label>
                        <input type="text" id="name" name="name" value = "<?php echo $name ?>" required>
                    
                        <label for="phone">Ваш телефон</label>
                        <input type="text" id="phone" name="phone" value = "<?php echo $phone ?>">

                        <label for="email">Ваш e-mail*</label>
                        <input type="text" id="email" name="email" value = "<?php echo  $from  ?>" required>
                        <?php echo $FrontendMessage ?>
                    
                        <label for="message">Ваше сообщение или комментарий*</label>
                        <textarea id="message" name="message" required><?php echo $message ?></textarea>
                        <!-- <input type="checkbox" id="privacy_policy" name="privacy_policy" value="Privacy Policy"> -->
                        <!-- <label for="privacy_policy" class="privacy_policy">я даю своё согласие на обработку моих персональных данных, на условиях и для целей, определённых <a class="privacy_policy" href="privacy-policy.html">политикой конфиденциальности</a></label><br> -->
                        <label class="privacy_policy">Нажимая кнопку «Отправить», я даю своё согласие на обработку моих персональных данных, на условиях и для целей, определённых <a class="privacy_policy" href="privacy-policy.html">политикой конфиденциальности</a></label><br>
                        <input type="submit" name = "submit" value="Отправить">
                    </form>
                </div>
            </main>
            <div class="footer">
                <hr class="footer_divider">
                <footer class="flex footer_flex">
                    <span class="footer_text copyright">Copyright 3Light 2023</span>
                    <a href="privacy-policy.html" class="footer_text" id="policy">Политика конфиденциальности</a>
                </footer>
            </div>
        </div>
    <script src="js/main.js"></script>
    <script src="js/sendForm.js"></script>
    </body>
</html>