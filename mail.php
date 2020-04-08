<?php
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"), array(" "," "), $name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $details = preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['details']);
        $userSubject = preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject']);

        // Check that data was sent to the mailer.
        if (empty($name) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $internalEmail = "jacob@times10.net";

        // Set the email subject.
        $subject = "Rewash: Contact Form";

        // Build the email content.

        // Build the email headers.
        $headers = 'From:' . $internalEmail . "\r\n";
        $headers .= 'Reply-To:' . $email . "\r\n";
        $headers .= 'BCC:' . 'jacob@times10.net' . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html\r\n";
        $headers .= "charset: ISO-8859-1\r\n";
        $headers .= "X-Mailer: PHP/".phpversion()."\r\n";

        $formcontent = '<html><body><center>';
        $formcontent .= '<table rules="all" style="border: 1px solid #cccccc; width: 600px;" cellpadding="10">';
        $formcontent = "<tr><td><strong>Name:</strong> $name</td></tr>";
        $formcontent .= "<tr><td><strong>Email:</strong> $email</td></tr>";
        $formcontent .= "<tr><td><strong>Subject:</strong> $userSubject</td></tr>";
        $formcontent .= "<tr><td><strong>Message:</strong> $details</td></tr>";
        $formcontent .= '</table></center></body></html>';

        // Send the email.

        if (mail($internalEmail, $subject, $formcontent, $headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent. We'll be in touch as soon as possible.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Sorry! Something went wrong and we couldn't submit your message. <a href='contact' class='btn btn-default'>Try again.</a>";
        }
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your message, please try again. <a href='contact' class='btn btn-default'>Try again.</a>";
    }
