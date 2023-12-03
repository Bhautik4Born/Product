<?php

require_once "../include/config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $licenseKey = "EOPBORNJULT01729BH";
    // $domain = $_SERVER['HTTP_HOST'];
    $domain = $_POST['server'];

    $sql = "SELECT license_key, domain FROM license";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dbLicenseKey = $row['license_key'];
            $dbDomain = $row['domain'];

            if ($email != '' && $licenseKey == $dbLicenseKey && $domain == $dbDomain) {
                $otp = mt_rand(100000, 999999);

                $to = $email;
                $subject = 'OTP Verification';
                $message = '<html><body>';
                $message .= '<div style="border: 1px solid #666; padding: 10px; color: #fffff; text-align: center;">';
                $message .= '<h2 style="color:#fffff;">Dear ' . $email .',</h2>';
                $message .= '<div style="border: 1px solid #ddd; background-color: #fff; padding: 20px; color: #222; font-family: Arial, sans-serif; line-height: 1.5; text-align: center;">';
                $message .= '<img src="https://4born.info/assets/img/images/4Born_Solution.png" alt="4BornSolutions" style="max-width: 350px; margin-bottom: 10px;">';
                $message .= '<h2 style="color:#222; margin-bottom: 10px;">Notice: Please do not share this OTP with anyone</h2>';
                $message .= '<p style="color:#777; margin-bottom: 30px;">Thank you for registering with us! As a part of our security measures, we require you to verify your email address using the OTP below:'. '<h2 style="color:#fd961a;">'.$otp . '</h2>'.'</p>';
                $message .= '<p style="color:#777; margin-bottom: 30px;">If you have any questions or concerns, please do not hesitate to contact our customer support team.'. '<h2 style="color:#fd961a;"></p>';
                $message .= "<a href='https://4born.info/' style='text-decoration:none;'><button style='background-color: #fd961a; color: black; border: none; padding: 10px 20px; font-size: 18px; border-radius: 5px; box-shadow: 2px 2px 5px #ddd; transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;'>Contact</button></a>";
                $message .= '</div>';
                $message .= '</body></html>';
        
                $headers = "From: 4BornSolutions\r\n";
                $headers .= "Reply-To: 4BornSolutions\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
                mail($to, $subject, $message, $headers);
                $response = [
                    'status' => 'success',
                    'message' => 'OTP sent successfully',
                    'email' => $email,
                    'otp' => $otp,
                    'Domain' => $domain,
                ];

                echo json_encode($response);
                exit();
            }
        }
    }

    $response = [
        'status' => 'error',
        'message' => 'Invalid license key, domain, or email',
        'Domain' => 'NotValid',
    ];

    echo json_encode($response);

    $con->close();
}
?>
