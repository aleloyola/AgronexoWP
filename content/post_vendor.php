<?php
$servername = "127.0.0.1";
$username = "agrouser";
$password = "TheWorld2019";
$dbname = "agrodb";


$country = $_POST['country'];
$company_name = $_POST['company_name'];
$company_industry = $_POST['company_industry'];
$company_legalname = $_POST['company_legalname'];
$company_address = $_POST['company_address'];
$company_city = $_POST['company_city'];
$company_website = $_POST['company_website'];



$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];
$user_position = $_POST['user_position'];





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!empty($_POST))
{

}

$sql = "INSERT INTO prospect_vendor (country, company_name, company_industry, company_legalname,company_address,company_city,company_website,user_name,user_email,user_phone,user_position) ";
$sql = $sql . "VALUES ('" . $country . "', '" . $company_name . "','" . $company_industry . "' , '" . $company_legalname . "','" .$company_address  . "','" . $company_city .  "','" . $company_website .  "','" . $user_name  .  "', '" . $user_email . "', '" . $user_phone. "','" . $user_position .   "')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully - vendor";
    //$variable = "New record created successfully - vendor";
    //echo json_encode(array("blablabla"=>$variable));
    $newURL = "../register_vendor_post_response.php";
    header('Location: '.$newURL);  
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //$variable = "New record created successfully - vendor";

}

$conn->close();
?>