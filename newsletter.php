<?php include('./database.php');

function saveEmail($mail, $date){
 
    global $pdo;

    $sql = "INSERT INTO newsletter(mail, registration_date) 
                        VALUES (:mail, :registration_date)";

    $sth= $pdo->prepare($sql);
    try {
        $sth->execute(
            array(
                ':mail' => $mail,
                ':registration_date' => $date
            )
        );
    }
    catch (Exception $e) {
        echo $e;
    }
}