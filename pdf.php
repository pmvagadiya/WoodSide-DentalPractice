<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$password = "woodside49";

$formData = $_POST;
if(!empty($_FILES['files']['name'][0]))
{
	$total_file = count($_FILES["files"]["name"]);
}
else
{
	$total_file = 0;
}

$dob = $formData['patient_date']."-".$formData['patient_month']."-".$formData['patient_year'];


require_once('tcpdf/config/tcpdf_config.php');
require_once('tcpdf/tcpdf.php');


// create new PDF document password protect
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default font subsetting mode
$pdf->setFontSubsetting(true);
$pdf->SetHeaderData('', '', ' ','', array(0,64,255), array(0,64,128));
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

 // set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// Set font
$pdf->SetFont('helvetica', '', 10, '', true);
$pdf->SetFont('helvetica', '', 8);
$pdf->SetProtection(array('print'), $password);
$pdf->AddPage();
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);

 $tbl_header = '<table width="535" cellspacing="0" cellpadding="3" border="1px"  style="border-color:#000;" style="border-color:#000;">
 				<tr style="border:1px solid #000;">
                    <td style="text-align: center;font-size: 25px;font-weight: bold;">Referral Form</td>
                </tr>
				<table><br><br>';


				$tbl_header .= '<table width="540" cellspacing="0" cellpadding="3" border="1" style="margin-top:5px;">';

				$tbl_header .= '<tr>
				<td style="font-size: 15px;font-weight: bold;text-align:center;"  colspan="4">Patient Details</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Patient First Name</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['patient_first_name'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Patient Surname</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['patient_surname_name'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Street Address</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['patient_location'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Address Line 2</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['patient_address'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">City</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['patient_city'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Post Code</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;;width:135px;" >&nbsp;'.$formData['patient_post_code'].'</td>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Patient Phone Number</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;;width:135px;"  >&nbsp;'.$formData['patient_phone_no'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Patient Date of Birth</td>
				<td style="font-size: 12px;font-weight: 500;width:135px;line-height:17px;">&nbsp;'.$dob.'</td>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Patient Gender</td>
				<td style="font-size: 12px;font-weight: 500;width:135px;line-height:17px;">&nbsp;'.@$formData['patient_gender'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">
				Patient Email Address</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;"  colspan="4">&nbsp;'.$formData['patient_email'].'</td>
				</tr>';
				$tbl_header .=  '</table><br><br><br><br>';



				$tbl_header .= '<table width="540" cellspacing="0" cellpadding="3" border="1" style="margin-top:5px;">';
				$tbl_header .= '<tr>
				<td style="font-size: 15px;font-weight: bold;text-align:center;"  colspan="4">Referring Dentist Details</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Name of Dentist</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_name'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Practice Phone Number</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_phone_no'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Practice Address</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_location'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Street Address</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_street_address'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Address Line 2</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentis_address'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">City</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_city'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Post Code</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_post_code'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Referring Dentist Email</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_referring_email'].'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Referring Dentist Phone Number</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$formData['dentist_referring_phone_no'].'</td>
				</tr>';
				$tbl_header .=  '</table><br><br><br><br>';


				$tbl_header .= '<table width="540" cellspacing="0" cellpadding="3" border="1" style="margin-top:5px;">';
				$tbl_header .= '<tr>
				<td style="font-size: 15px;font-weight: bold;text-align:center;"  colspan="4">Referral Details</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Dental Speciality</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.@implode(',',$formData['dental_specialist_list']).'</td>
				</tr>
				<tr>
				<td style="background-color:#eee;font-size: 11px;font-weight: bold;width:135px;line-height:17px;">Attached Documents</td>
				<td style="font-size: 12px;font-weight: 500;line-height:17px;" colspan="4">&nbsp;'.$total_file.'</td>
				</tr>';
				$tbl_header .=  '</table><br><br>';


				$tbl_header .= '<div>
									<div style="background-color:#eee;font-size: 11px;font-weight: bold;"><u>Reason for Referral</u> : </div>
									<div style="font-size: 12px;font-weight: 500;line-height:12px;">'.$formData['reason_for_referral'].'</div>

									<div style="background-color:#eee;font-size: 11px;font-weight: bold;"><u>Relevant Medical History</u> : </div>
									<div style="font-size: 12px;font-weight: 500;line-height:12px;">'.$formData['referral_medical_history'].'</div>
								</div>';

  $pdf->writeHTML($tbl_header, true, false, false, false, '');
  $file_name = date('d-m-Y H:i:s')."Patient_referral_form.pdf";
  $file = $pdf->Output($file_name,'S');

  file_put_contents("pdf/".$file_name,$file);

// upload document zip file create
if(!empty($_FILES["files"]["name"][0])) {
	$zip = new ZipArchive();
	$zip->open("document.zip", ZIPARCHIVE::CREATE);
	$zip->setPassword($password);

for ($a = 0; $a < count($_FILES["files"]["name"]); $a++)
{
	$content = file_get_contents($_FILES['files']["tmp_name"][$a]);
	$zip->addFromString($_FILES["files"]["name"][$a], $content);
	$zip->setEncryptionName($_FILES["files"]["name"][$a], ZipArchive::EM_AES_256);

}
$zip->close();
}


// Generate pdf file and document zip file sending mail

include 'PHPMailer/PHPMailerAutoload.php';
// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload file.

$mail = new PHPMailer(true);
$resultarray = array();

try {
	$messageBody="Referral Form and Documents are attached.";
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'mail.woodsidedental.co.uk';
    $mail->Port       = '587';

    //$mail->SMTPAuth   = true;    //$mail->SMTPSecure = "ssl";
    $mail->Username   = 'onlineform@woodsidedental.co.uk';    $mail->Password   = 'Greengnu44';
    $mail->setFrom('onlineform@woodsidedental.co.uk', 'Woodside Dental Practice Online Referral Form');    $mail->addAddress('rafik@amrshalaby.com', 'Woodside Dental Practice');

    $mail->isHTML(true);
    $mail->Subject = 'New Online Referral';	$mail->Body    = $messageBody;	$mail->AddAttachment('pdf/'.$file_name);
	if(!empty($_FILES['files']['name'][0]))	{		$mail->AddAttachment("document.zip");	}
    $mail->send();
	array_push($resultarray,array('status' => 1,'message'=> 'mail send successfully'));
	unlink("document.zip");
	session_destroy();
	session_start();
	$tmsg = "Form submit successfully";
    $_SESSION['s_msg'] = $tmsg;
	header("location:index.php");

} catch (Exception $e) {
	array_push($resultarray,array('status' => 0,'message'=> 'Error while sending mail'));
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

 ?>