<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-8.1/src/Exception.php';
require '../PHPMailer-8.1/src/PHPMailer.php';
//require '../PHPMailer/PHPMailer-master/src/SMTP.php';

$zipcode = "";
$fname = "";
$lname = "";
$phone = "";
$email = "";
$address = "";
$date = "";
$q1 = "";
$q2 = "";
$q3 = "";
$q4 = "";
$q5 = "";
$q6 = "";

$listmessage = "";

$yesno = array("No", "Yes");
$benefits = array(
    "Low premiums",
    "Lower copays and maximum out of pocket expenses",
    "Freedom to choose any doctor",
    "Dental",
    "Vision",
    "Hearing",
    "Low Rx costs",
    "Extra Benefits like acupuncture, chiropractic, transportation, gym membership, OTC allowance, and more!"
);
$coverage = array(
    "I want to learn more about Medicare options. Attend a Medicare 101",
    "Medicare Advantage Plan",
    "Drug plan (Part D)",
    "Drug plan (Part D) + Medigap policy",
    "Medigap policy only"
);
$programs = array(
    "Medicaid",
    "Supplemental Security Income",
    "Medicare Savings Program",
    "Extra Help from Social Security",
    "I'm not sure",
    "I don't get help from any of these programs"
);

if(isset($_POST["zipcode"])) $zipcode = $_POST["zipcode"];
if(isset($_POST["fname"])) $fname = $_POST["fname"];
if(isset($_POST["lname"])) $lname = $_POST["lname"];
if(isset($_POST["phone"])) $phone = $_POST["phone"];
if(isset($_POST["email"])) $email = $_POST["email"];
if(isset($_POST["address"])) $address = $_POST["address"];
if(isset($_POST["date"])) {
    $getdate = date_create($_POST["date"]);
    $date = date_format($getdate, "F j, Y");
}
if(isset($_POST["q1"])) $q1 = $_POST["q1"];
if(isset($_POST["q2"])) $q2 = $_POST["q2"];
if(isset($_POST["q3"])) $q3 = $_POST["q3"];
if(isset($_POST["q4"])) {
    $q4 = $_POST["q4"];
    foreach($q4 as $chosen){
        $listmessage .= "<li>".$benefits[$chosen-1]."</li>";
    }
    //$listmessage = count($_POST["q4"]);
}
if(isset($_POST["q5"])) $q5 = $coverage[$_POST["q5"]-1];
if(isset($_POST["q6"])) $q6 = $programs[$_POST["q6"]-1];

$to = "dyeonazren@gmail.com";
$subject = "A client has submitted a form!";
//$message = "sample message";
$from = "dyeonazren@gmail.com";

$message = "
<!DOCTYPE html>
<html>
    <body style='font-family: Roboto; color: rgb(0, 99, 160); border: 2px solid rgb(3, 169, 244);'>
        <h1 style='background: rgb(3, 169, 244); color: white; padding: 20px; margin: 0; font-family: Verdana;'>A client who wants to get a quote has just submitted a form!</h1>
        <div>
            <div class='info1' style='display: flex; border-bottom: 2px solid rgb(3, 169, 244); padding: 10px;'>
                <div>
                    <p>Zipcode:</p>
                    <p>Name:</p>
                    <p>Phone Number:</p>
                    <p>Email:</p>
                    <p>Date of Birth:</p>
                    <p>Address:</p>
                </div>
                <div style='padding-left: 5px;'>
                    <p>$zipcode</p>
                    <p>$fname $lname</p>
                    <p>$phone</p>
                    <p>$email</p>
                    <p>$date</p>
                    <p>$address</p>
                </div>
            </div>
        </div>

        <div style='padding:10px;border-bottom:2px solid rgb(3, 169, 244);'>
            <h4><b>Question 1:</b> Are you currently enrolled in Medicare parts A and B?</h4>
            <p>Answer: ".$yesno[$q1]."</p>
        </div> 

        <div style='padding:10px;border-bottom:2px solid rgb(3, 169, 244);'>
            <h4><b>Question 2:</b> Do you need help signing up?</h4>
            <p>Answer: ".$yesno[$q2]."</p>
        </div>  

        <div style='padding:10px;border-bottom:2px solid rgb(3, 169, 244);'>
            <h4><b>Question 3:</b> Do you have high prescription drug cost?</h4>
            <p>Answer: ".$yesno[$q3]."</p>
        </div>  

        <div style='padding:10px;border-bottom:2px solid rgb(3, 169, 244);'>
            <h4><b>Question 4:</b> What Benefits are most important to you?</h4>
            <p>Answer/s:</p>
            <ul>
            $listmessage
            </ul>
        </div> 

        <div style='padding:10px;border-bottom:2px solid rgb(3, 169, 244);'>
            <h4><b>Question 5:</b> What type of coverage are you looking for?</h4>
            <p>Answer: $q5</p>
        </div>  

        <div style='padding:10px;'>
            <h4><b>Question 6:</b> Do you get help with your costs from one of these programs?</h4>
            <p>Answer: $q6</p>
        </div>  

        <div class='consent' style='padding: 15px; background-color: rgb(245, 253, 252); text-align: justify; border-top: 2px solid rgb(3, 169, 244);'>
            <p style='font-style: italic; color: grey; margin: 0;'>This serves as the client's written consent (signature) and he/she agrees that wecaremedicare.com connects him/her with a licensed agent who will be providing him/her with the quotes he/she are requesting for Health Insurance, Medicare Supplement, Medicare Advantage or Part D. Agents are not connected with or endorsed by the U.S. government or the federal Medicare program. They have the client's express written consent to contact him/her for such marketing at the phone number and/or email address provided, including his/her mobile devices, potentially using an automatic telephone dialing system, artificial/prerecorded voice, email or via SMS. The client understands that his/her telephone company may impose charges on him/her for these contacts. The client knows that his/her consent is not a condition of purchase, that he/she can revoke this consent at any time, that he/she agrees to our privacy policy and have no obligation to buy.</p>
        </div>
    </body>
</html>
";

//$mail = new PHPMailer;

//$mail -> From = 'dyeonazren3@gmail.com';
//$mail -> FromName = 'We Care Medicare';
//$mail -> addAddress('dyeonazren@gmail.com');
//$mail -> isHTML(true);
//$mail -> Subject = $subject;
//$mail -> Body = $message;

//if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
//} else {
    //echo 'Message has been sent';
//}



$_SESSION['clientname'] = $fname." ".$lname;
$_SESSION['emailflag'] = 1;
$_SESSION['message'] = $message;
$_SESSION['subject'] = $subject;
$_SESSION['email'] = 'dyeonazren@gmail.com';

header("Location: agent.php");

?>