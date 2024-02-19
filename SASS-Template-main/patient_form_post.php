<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST"){
	$firstname = $_POST["first_name"];
	$middlename = $_POST["middle_name"];
	$lastname = $_POST["last_name"];
	$gender = $_POST["gender"];
	$age = $_POST["age"];
	$email_address = $_POST["email_address"];
	$contact = $_POST["contact_no"];
	$datebirth = $_POST["date_birth"];
	$bloodtype  = $_POST["blood_type"];
	$address  = $_POST["home_address"];
	$contact_no = $_POST["contact_no"];
	$emerfullname1 = $_POST["emer_full_name_1"];
	$relationship1 = $_POST["relationship_1"];
	$emercontact1 = $_POST["emer_contact_1"];
	$emerfullname2 = $_POST["emer_full_name_2"];
	$relationship2 = $_POST["relationship_2"];
	$emercontact2 = $_POST["emer_contact_2"];
	$knownmedcondi = $_POST["known_medical_condition"];
   	$nationality = $_POST["nationality"];
	$allergies = $_POST["allergies"];

	$_SESSION['firstnamedisplay'] = $firstname;
	$_SESSION['middlesnamedisplay'] = $middlename;
	$_SESSION['lastnamedisplay'] = $lastname;
	$_SESSION['genderdisplay'] = $gender;
	$_SESSION['agedisplay'] = $age;
	$_SESSION['emailadddisplay'] = $email_address;
	$_SESSION['contactdisplay'] = $contact;
	$_SESSION['datebirthdisplay'] = $datebirth;
	$_SESSION['bloodtypedisplay'] = $bloodtype;
	$_SESSION['addressdisplay'] = $address;
	$_SESSION['contact_nodisplay'] = $contact_no;
	$_SESSION['emerfullname1display'] = $emerfullname1;
	$_SESSION['relationship1display'] = $relationship1;
	$_SESSION['emercontact1display'] = $emercontact1;
	$_SESSION['emerfullname2display'] = $emerfullname2;
	$_SESSION['relationship2display'] = $relationship2;
	$_SESSION['emercontact2display'] = $emercontact2;
	$_SESSION['knowncondidisplay'] = $knownmedcondi;
	$_SESSION['nationalitydisplay'] = $nationality;
	$_SESSION['allergiesdisplay'] = $allergies;
	try {
		require_once "../SASS-Template-main/patient_info_config.php";

		$query = "INSERT INTO patient_info (first_name, middle_name, last_name, date_birth, age, gender, blood_type, nationality, email_address, home_address, contact_no, emer_full_name_1, relationship_1, emer_contact_1, emer_full_name_2, relationship_2, emer_contact_2, known_medical_condition, allergies) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";

		$stmt = $pdo->prepare($query);

		$stmt->execute([$firstname, $middlename, $lastname, $datebirth, $age, $gender, $bloodtype, $nationality, $email_address, $address, $contact_no, $emerfullname1, $relationship1, $emercontact1, $emercontact2, $relationship2, $emercontact2, $knownmedcondi, $allergies]);

		$pdo = null;
		$stmt = null;
		header("Location: ../SASS-Template-main/medical_record.php");
	} catch (PDOException $e){
		die("Query failed: " . $e->getMessage());
	}
	$sql = "INSERT INTO patient_info (first_name, middle_name, last_name, date_birth, age, gender, blood_type, nationality, email_address, home_address, contact_no, emer_full_name_1, relationship_1, emer_contact_1, emer_full_name_2, relationship_2, emer_contact_2, known_medical_condition, allrgies) VALUES ('$firstname', '$middlename', '$lastname', '$date_birth', '$age', '$gender', '$bloodtype', '$nationality', '$email_address', '$home_address', '$contact_no', '$emerfullname1', '$relationship1', '$emercontact1', '$emercontact2', '$relationship2', '$emercontact2')";
}
else header("Location: ../SASS-Template-main/medical_record.php");

