<?php
$name=$_REQUEST['name'];
$f_name=$_REQUEST['f_name'];
$m_name=$_REQUEST['m_name'];
$dob=$_REQUEST['dob'];
$marital_status=$_REQUEST['marital_status'];
$gender=$_REQUEST['gender'];
$contact_number=$_REQUEST['contact_number'];
$email=$_REQUEST['email'];
$address=$_REQUEST['address'];
$language=$_REQUEST['language'];
$nationality=$_REQUEST['nationality'];
$education1=$_REQUEST['education1'];
$education2=$_REQUEST['education2'];
$education3=$_REQUEST['education3'];
$experience=$_REQUEST['experience'];
$skill=$_REQUEST['skill'];
$about=$_REQUEST['about'];

require "fpdf.php";
$nik=new FPDF();
$nik->AddPage();

$nik->SetTextColor(7, 45, 82);
$nik->SetFont('Arial','BU',20);
$nik->Cell(180,5,"CURRICULUM VITAE",0,1,"C");

$nik->SetTextColor(0, 66, 128);
$nik->SetFont('Arial','B',32);
$nik->Cell(45,10,"",0,1,"L");
$nik->Cell(80,10,$name,0,1,"L");

$nik->SetTextColor(0, 0, 0);
$nik->SetFont('Arial','',11);
$nik->Cell(27,9,"Mobile No. : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,9,$contact_number,0,1,"L");

$nik->SetFont('Arial','',11);
$nik->Cell(27,6,"Email ID : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,6,$email,0,1,"L");

$nik->SetTextColor(0, 66, 128);
$nik->SetFont('Arial','B',17);
$nik->Cell(80,15,"ABOUT",0,1,"L");
$nik->SetTextColor(0,0,0);
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$about,0,1,"L");

$nik->SetTextColor(0, 66, 128);
$nik->SetFont('Arial','B',17);
$nik->Cell(80,15,"EDUCATION",0,1,"L");
$nik->SetTextColor(0,0,0);
$nik->SetFont('Arial','',11);
$nik->Cell(27,10,"10th : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$education1,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(27,10,"12th : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$education2,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(27,10,"Graduation : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$education3,0,1,"L");

$nik->SetTextColor(0, 66, 128);
$nik->SetFont('Arial','B',17);
$nik->Cell(80,15,"EXPERIENCE",0,1,"L");
$nik->SetTextColor(0,0,0);
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$experience,0,1,"L");

$nik->SetTextColor(0, 66, 128);
$nik->SetFont('Arial','B',17);
$nik->Cell(80,15,"SKILLS",0,1,"L");
$nik->SetTextColor(0,0,0);
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$skill,0,1,"L");

$nik->SetTextColor(0, 66, 128);
$nik->SetFont('Arial','B',17);
$nik->Cell(80,15,"COMMUNCIATIONAL SKILLS",0,1,"L");
$nik->SetTextColor(0,0,0);
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$language,0,1,"L");

$nik->SetTextColor(0, 66, 128);
$nik->SetFont('Arial','B',17);
$nik->Cell(80,15,"PERSIONAL INFORMATION",0,1,"L");
$nik->SetTextColor(0,0,0);
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Name : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$name,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Father's Name : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$f_name,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Mother's Name : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$m_name,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Date Of Birth : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$dob,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Marital Status : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$marital_status,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Language : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$language,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Gender : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$gender,0,1,"L");
$nik->SetFont('Arial','',11);
$nik->Cell(32,10,"Nationality : ",0,0,"L");
$nik->SetFont('Arial','I',11);
$nik->Cell(80,10,$nationality,0,1,"L");

$nik->OutPut();

?>