<?php 

if (isset($_POST['message'])) {
	$message = htmlspecialchars($_POST['message']);
	$name = htmlspecialchars($_POST['name']);
	$email = $_POST['email'];
	$phone = htmlspecialchars($_POST['phone']);
	$subject = htmlspecialchars($_POST['subject']);
        # FIX: Replace this email with recipient email

        $mail_to = $email;
        
        # Sender Data
        $subject = $subject;
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["phone"]);
        $message = trim($_POST["message"]);
        
        if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message)) {
            
            echo "Please complete the form and try again.";
            exit;
        }
        
        # Mail Content
        $content = "Name: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Phone: $phone\n";
        $content .= "Message:\n$message\n";

        # email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            echo "Thank You! Your message has been sent.";
        } else {
            # Set a 500 (internal server error) response code.
            echo "Oops! Something went wrong, we couldn't send your message.";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        echo "There was a problem with your submission, please try again.";
    }


?>

