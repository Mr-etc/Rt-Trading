<?php
    if(!empty($_POST['method'])){
        switch ($_POST['method']) {
            case 'register_request':
                register_request();
                break;
            default:
                # code...
                return null;
        }
    }else{
        echo 'Укажите параметр "method" для выполнения запроса';
        return null;
    }
    use PHPMailer\PHPMailer\SMTP;
    function register_request(){
        require_once 'Response.php';
        if(preg_match("~^[A-zА-яЁё ]+$~u", $_POST['name'])
        && preg_match("~^([A-z0-9_-]+\.)*[A-z0-9_-]+@[A-z0-9_-]+(\.[A-z0-9_-]+)*\.[A-z]{2,6}$~u", trim($_POST['mail']))
        && preg_match("~^[A-zА-яЁё ]+$~u", $_POST['topic'])
        && !empty($_POST['message'])
        ){
            require_once 'phpMailer/PHPMailer.php';
            require_once 'phpMailer/SMTP.php';
            require_once 'phpMailer/Exception.php';
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->isSMTP();   
            $mail_data = require_once '../data/mail.php';  
            $mail->CharSet = 'UTF-8';              
            $mail->SMTPAuth   = true;          
            $mail->Host   = $mail_data['Host'];  
            $mail->Username   = $mail_data['Username'];
            $mail->Password   = $mail_data['Password'];
            $mail->Port = $mail_data['Port'];
            $mail->SMTPSecure = 'ssl';
            $mail->setFrom($mail_data['Username'], 'Rt-Trading');
            $mail->addAddress($mail_data['MailTo']);
            $mail->Subject = 'Обратная связь Rt-Trading';
            $mail_message = file_get_contents('../templates/mail.php');
            $mail_message = str_replace("[php_name]", $_POST['name'], $mail_message);
            $mail_message = str_replace("[php_mailto]", trim($_POST['mail']), $mail_message);
            $mail_message = str_replace("[php_topic]", $_POST['topic'], $mail_message);
            $mail_message = str_replace("[php_datetime]", date("d.m.Y H:i:s"), $mail_message);
            $mail_message = str_replace("[php_message]", $_POST['message'], $mail_message);

            $mail->isHTML(true);
            $mail->Body = $mail_message; 
            $response = $mail->send();  
            if($response)
                echo Response::Response_data(200, [
                    "Status" => "true",
                    "Response" => "Заявка успешно зарегистрирована!"
                ]); 
            else
                echo Response::Response_data(200, [
                    "Status" => "false",
                    "Response" => "Ошибка при регистрации заявки!"
                ]);
        }else
            echo Response::Response_data(200, [
                "Status" => "false",
                "Response" => "Заполните все поля!"
            ]); 
    }
?>