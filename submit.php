<?php
	
	require_once 'config.php';
	
	if(isset($_POST['submit']))
	{
        $team = $_POST['team'];
        $name1 = $_POST['name1'];
        $mob1 = $_POST['mob1'];
        $email1 = $_POST['email1'];
        $roll1 = $_POST['roll1'];

        $name2 = $_POST['name2'];
        $mob2 = $_POST['mob2'];
        $email2 = $_POST['email2'];
        $roll2 = $_POST['roll2'];

        $name3 = $_POST['name3'];
        $mob3 = $_POST['mob3'];
        $email3 = $_POST['email3'];
        $roll3 = $_POST['roll3'];

        $name4 = $_POST['name4'];
        $mob4 = $_POST['mob4'];
        $email4 = $_POST['email4'];
        $roll4 = $_POST['roll4'];

        $name5 = $_POST['name5'];
        $mob5 = $_POST['mob5'];
        $email5 = $_POST['email5'];
        $roll5 = $_POST['roll5'];

        $title = $_POST['title'];
        $desc = $_POST['description'];
	$file = $_POST['file'];

	$stmt = $DB_con->prepare('INSERT INTO reg(team,name1,name2,name3,name4,name5,mob1,mob2,mob3,mob4,mob5,email1,email2,email3,email4,email5,roll1,roll2,roll3,roll4,roll5,title,description,file) VALUES(:team,:name1,:name2,:name3,:name4,:name5,:mob1,:mob2,:mob3,:mob4,:mob5,:email1,:email2,:email3,:email4,:email5,:roll1,:roll2,:roll3,:roll4,:roll5,:title,:description,:file)');
            $stmt->bindParam(':team',$team);
            $stmt->bindParam(':name1',$name1);
            $stmt->bindParam(':name2',$name2);
            $stmt->bindParam(':name3',$name3);
            $stmt->bindParam(':name4',$name4);
            $stmt->bindParam(':name5',$name5);
            $stmt->bindParam(':mob1',$mob1);
            $stmt->bindParam(':mob2',$mob2);
            $stmt->bindParam(':mob3',$mob3);
            $stmt->bindParam(':mob4',$mob4);
            $stmt->bindParam(':mob5',$mob5);
            $stmt->bindParam(':email1',$email1);
            $stmt->bindParam(':email2',$email2);
            $stmt->bindParam(':email3',$email3);
            $stmt->bindParam(':email4',$email4);
            $stmt->bindParam(':email5',$email5);
            $stmt->bindParam(':roll1',$roll1);
            $stmt->bindParam(':roll2',$roll2);
            $stmt->bindParam(':roll3',$roll3);
            $stmt->bindParam(':roll4',$roll4);
            $stmt->bindParam(':roll5',$roll5);
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':description',$desc);
            $stmt->bindParam(':file',$file);
            if( $stmt->execute() ):
                $msg = 'Successfully Registered';
                else:
                $msg = 'Sorry there must have been an issue registering';
                endif;
        
                }

            error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";

$message = '<html><body>';
$message .= '';
$message .= '<h1>Thank you for your submission on Anand Memorial Project Competition</h1>';
$message .= '<br><h3>Registered members : </h3>';
$message .= $name1;
$message .= '<br>';
$message .= $name2;
$message .= '<br>';
$message .= $name3;
if(isset($_POST['name4'])){
$message .= '<br>';
$message .= $name4;
}
if(isset($_POST['name5'])){
$message .= '<br>';
$message .= $name5;
}
$message .= "</body></html>";
$message .='<br><p>We\'ll be reviewing your abstract and keep checking the website for further updates. </p>';
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'mail.tathva.org';
$mail->Port = 465;
$mail->Username = 'ampc@tathva.org';
$mail->Password = 'QkIr^?Ybb&zn';
$mail->Subject = ' Anand Memorial Program Competition ';
$mail->SetFrom('ampc@tathva.org', 'Team AMPC');

$mail->AddAddress($email1);
$mail->MsgHTML($message);
$mail->Send();


?>
<?php
header("Location: register.php?message=$msg", true, 301);
echo $message
?>