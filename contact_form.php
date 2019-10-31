 <?php
       if (isset($_POST['submit']))
        {
            $User_name = $_POST['name'];
            $phone = $_POST['phone'];
            $User_email = $_POST['email'];
            $User_subject = $_POST['subject'];
            $User_website = $_POST['website'];
            $User_message = $_POST['message'];
            
            $email_send = 'hello@crevatal.com';
            $email_from = 'nowerox@crevatal.com';
            $email_subject_customer = "Thank you for sending us a message!";
            $email_body_customer = "We are happy to here from you.\n".
                                    "Send us a mail on $email_send for more help.\n".
                                    "Thank You!";
            
            $email_subject = "Nowerox Nigeria Limited has a New Contact from $User_name!";
            $email_body =   "Find the details of $User_name below. \n\n".
                            "Name: $User_name.\n".
                            "Phone No: $phone.\n".
                            "Email Address: $User_email\n".
                            "User Website: $User_website\n\n".
                            "Subject: $User_subject\n".
                            "$User_message.";
            
            $to_email = "clemzyport@gmail.com, hugboclement@yahoo.com";
            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To: \r\n";
            
            $to_customer_email = "$User_email";
            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To: \r\n";            
            
            $secretKey = "";
            $responseKey = $_POST['g-recaptcha-response'];
            $UserIP = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
            
            $response = file_get_contents($url);
            $response = json_decode($response);
            
            if ($response->success){
                mail($to_email,$email_subject,$email_body,$headers);
                mail($to_customer_email,$email_subject_customer,$email_body_customer,$headers);
                echo "Hi $User_name, your message has been received successfully!";
            } else {
                echo "<span>Invalid Captcha, Please kindly try again.</span>";
            }
        }
?>