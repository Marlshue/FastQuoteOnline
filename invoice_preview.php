<?php
include('dbconfig.php');
include('fpdf17/fpdf.php');

//get invoices data
if (isset($_GET['qouteid'])){
              
$qid=$_GET["qouteid"];
$query = mysqli_query($db,"select * from qoutations where qouteid = '$qid'");


foreach ($query as $row){
	
			  $customer = $row['cusid'];
	          $suplier = $row['supid'];
	$pname = $row['pname'];
			  $price = $row['price'];
			  $quantity = $row['quantity'];
	$taxes= $row['taxes'];
	$subtotal = $row['subtotal'];
	$total = $row['total'];
	$date = $row['sent'];
		    }
	
$query1 = mysqli_query($db,"select * from clients where companyid = '$suplier'");
foreach ($query1 as $row1){
	
			  $company = $row1['companyname'];
	$address = $row1['address'];
	$email = $row1['email'];
	$landline = $row1['telephone'];
	$cell= $row1['cell'];
	          
		    }

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,$company,0,0);
$pdf->Cell(59	,5,'Qoutations',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,$address,0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,$email,0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,$date,0,1);//end of line

$pdf->Cell(130	,5,$cell,0,0);
$pdf->Cell(25	,5,'Qoutation #',0,0);
$pdf->Cell(34	,5,$qid,0,1);//end of line

$pdf->Cell(130	,5,$landline,0,0);
//$pdf->Cell(25	,5,'Customer ID',0,0);
//$pdf->Cell(34	,5,$company2 ,0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Bill to',0,1);//end of line
$query2 = mysqli_query($db,"select * from clients where companyid = '$customer'");
foreach ($query2 as $row2){
	
			  $company2= $row2['companyname'];
	$address2 = $row2['address'];
	$email2 = $row2['email'];
	$landline2 = $row2['telephone'];
	$cell2= $row2['cell'];
	          
		    }

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$company2,0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$address2,0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$landline2,0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$cell2,0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(105	,5,'Description',1,0);
$pdf->Cell(25	,5,'Price',1,0);
$pdf->Cell(25	,5,'Quantity',1,0);
$pdf->Cell(34	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
//$query = mysqli_query($con,"select * from item where invoiceID = '".$invoice['invoiceID']."'");
$tax = 0; //total tax
//$amount = 0; //total amount

//display the items

	$pdf->Cell(105	,5,$pname,1,0);
	$pdf->Cell(25	,5,($price),1,0);
	$pdf->Cell(25	,5,($quantity),1,0);
	$pdf->Cell(34	,5,($subtotal),1,1,'R');//end of line
	//accumulate tax and amount
	$tax = $taxes * $subtotal;
	//$amount += $item['amount'];


//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Subtotal',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,($subtotal),1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Taxable',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,($tax),1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Tax Rate',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,($taxes),1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Total Due',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,($total),1,1,'R');//end of line




// WHERE DO YOU WANT TO SAVE THE FILE
$dest = 'uploads/qoute.pdf';
	
$pdf->Output($dest,'F' );//return the pdf file content as string



$sql = "update qoutations set qoute = '".$dest."', status = 'Sent' where qouteid = '$qid' ";
mysqli_query($db,$sql);
	
$message = 'Product Qoutation from'.'<br/>'.$company.'<br/>'.
	        'For'.' '.$pname.'<br/>'.
			'As per Requisition done through FastQouteOnline'.'<br/>'.
			'Thank you for using FastQouteOnline for Your Shopping';	
$mail = new PHPMailer;
	


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ushezhakata25@gmail.com';                 // SMTP username
$mail->Password = 'UsheRumbleMarl5hue#%';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                 // TCP port to connect to


$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

$mail->setFrom($email, 'Fast Qoute Online');
$mail->addAddress($email2, 'Ushe');     // Add a recipient
	
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Qoutation';
$mail->Body    = $message;
//Attachments
  $mail->addAttachment($dest);
	
	$mail->send();
	
}
echo ("<script> window.location='requests.php';</script>");
?>
