<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Big Remit</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="timer.js"></script>
    <script src="register.js"></script>
</head>
<body>
    <img src="./media/logo_bigremit.png" alt="logo_bigremit" id="logo">
    <div>
        <h1> Communication Big Remit</h1>
        <p id="text">
            The payment of important bills, the transfer of important funds, between regions or internationally can be very difficult processes, such as paying a supplier in China from the Republic of Congo, making an important transfer from Africa to Europe to start a business, ...<br>
            <br>
            Indeed, banks, for their own reasons or under the authority of their central bank, have the right to limit transfers, payments, amounts, destinations, number of currencies used... MTO (Money Transfer Operators such as Western Union, MoneyGram, Ria, ...) This can be used as an alternative solution, with an operating limit of about $5000 per month, depending on the destination.<br>
            <br>
            That's why it is sometimes impossible to pay large bills and transfer large amounts of money. Let's just say that this theme is far from ideal and totally blocking !<br>
            Big Remit has developed a service to meet this vital need: paying or transferring large amounts of money.<br>
            This service relies on its banking and technological partners to perform these operations in a totally compliant and secure manner.<br>
            <br>
            Our service is currently being tested and validated. We plan to open Big Remit in early 2023. Just a little more patience !<br>
            In the meantime, we wish you a very happy holiday season, surrounded by the affection of your loved ones.<br>
            <br>
            The Big Remit Team
        </p>
        <img src="./media/signature.png" alt="signature" id="image_signature">
    </div>
    <div>
        <a href="https://www.linkedin.com/company/big-remit/" target="_blank"><img src="./media/icon_linkedin.png" alt="LinkedIn" id="icon_linkedin" class="icon_social"></a>
        <img src="./media/icon_facebook.png" alt="Facebook" id="icon_facebook" class="icon_social">
    </div>
    <img src="./media/earth_big_remit.png" alt="image earth_big_remit" id="image_earth">
    <div>
        <div id="section_A">
            <div>
                <div>
                    <h2 id="countdown">COUNTDOWN</h2>
                <div>
                <div class="case" id="case_01">
                    <span class="number" id="days">00</span><br>
                    <span class="time_text">DAYS</span>
                </div>

                <div class="case" id="case_02">
                    <span class="number" id="hours">00</span><br>
                    <span class="time_text">HOURS</span>
                </div>
                <div class="case" id="case_03">
                    <span class="number" id="minutes">00</span><br>
                    <span class="time_text">MINUTES</span>
                </div>
                <div class="case" id="case_04">
                    <span class="number" id="seconds">00</span><br>
                    <span class="time_text">SECONDS</span>
                </div>

            </div>
            <hr id="hr_left">
            <span id="warn_text">Be Warned</span>
            <hr id="hr_right">
            <form method="post" action="index.php">
                <input type="text" placeholder="Email" id="input_email" name="EMAIL" >
                <input type="submit" value="SEND" id="button_send_email">
                <span id="error_message"></span>
            </form>
        </div>
    </div>
    </div>
    <div id="section_B">
        <img src="./media/icon_mail.png" alt='mail' id="icon_mail">
        <p id="text_section_B">
            If you want to follow our news and be notified when our Big Remit service is available, sign up with your email address.
        </p>
    </div>
    </div>
    </div>
</body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['EMAIL'];
    if (empty($email)) {
        echo "<script>document.getElementById('error_message').innerHTML='* Email is empty'</script>";
    } else {
        if(strpos($email, "@") !== false && strpos($email, ".") !== false){
            $fichier = fopen('./data/email.txt', 'a');
            fwrite($fichier, $email . "; ");
        }else{
            echo "<script>document.getElementById('error_message').innerHTML='* Invalid Email'</script>";
        }
    }
    }
?>
</html>

