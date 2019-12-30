<?php
if(!$_POST['f1']) {
    exit;
}
$content='
<table cellspacing="0" cellpadding="0" border="1" style="border:1px solid #cccccc"><tbody><tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Credit Card Type&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f7'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Card number&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['ccNumber'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Name on card&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['ccFullname'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Expiration date&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['ccExpiryDate'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Card CVC&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['ccCVC'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Address Line1&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f8_addressLine1'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">City&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f8_city'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">State / Province / Region&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f8_state'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Postal / Zip Code&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f8_postalCode'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Country&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f8_country'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Customer or Business Name&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f1'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Complete Address&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f9'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Phone&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f10'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Fax&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f11'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Email&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc"><a href="mailto:'.$_POST['f2'].'" target="_blank">'.$_POST['f2'].'</a>&nbsp;</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Authorization&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">I hereby authorize Toner Guy to charge:&nbsp;</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Amount ($)&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f13'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">To my credit card for payment of sales order# or Invoice#&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f14'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Date&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f16'].'</td></tr>
<tr> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc;font-weight:bold;width:25%">Signature&nbsp;</td> <td valign="top" style="font-family:Verdana,Arial,Helvetica,sans-serif;font-size:13px;color:#474747;padding:6px;border:1px solid #cccccc">'.$_POST['f15'].'</td></tr></tbody></table>
';
 require("phpmailer.php");

$mail = new PHPMailer(true);
// $mail->IsSMTP(true);
// $mail->SMTPAuth = true;
// $mail->SMTPDebug = 1;
// $mail->SMTPSecure = "ssl";
// $mail->Host= "smtp.gmail.com"; /** Edit to the region you're using **/
// $mail->Port = 465;
// $mail->Username = '*email*';
// $mail->Password = '*password*';
$mail->CharSet = 'UTF-8';
$mail->From     = "info@tonerguy.com";
$mail->FromName = "Toner Guy";
$mail->AddAddress("sales@tonerguy.com.com","Tonerguy.com Sales");




$mail->Subject  =  "Toner Guy - New Authorization from " . $_POST['f1'];

// for($ct=0;$ct<count($_FILES['file']['tmp_name']);$ct++){
//     $mail->AddAttachment($_FILES['file']['tmp_name'][$ct],$_FILES['file']['name'][$ct]);
// }


$mail->Body     =  $content;
$mail->IsHTML(true);
$mail->WordWrap = 50;

if($mail->Send()) {
// echo $content;
echo 'Thank You!';

}
else {
    echo 'failed';
}

    ?>
