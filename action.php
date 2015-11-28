<html>
<head></head>
<body>
<?php
    $company_name = htmlspecialchars($_POST['comp_name']);
    $core_business_area = $_POST['core_business_area'];
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $country = htmlspecialchars($_POST['country']);
    $phone = $_POST['phone'];
    $email = htmlspecialchars($_POST['email']);
    $products_and_services = $_POST['products_and_services'];
    $num_branches = (int)$_POST['num_branches'];
    $num_employees = (int)$_POST['num_employees'];
    $avg_experience = htmlspecialchars($_POST['avg_experience']);
    $cert = htmlspecialchars($_POST['cert']);
    $portfolio = htmlspecialchars($_POST['portfolio']);

    //this is where the creating of the csv takes place
    $cvsData = $company_name . "," . $core_business_area . "," . $address . "," . $city . "," . $country . "," . $phone . "," . $email . "," . $products_and_services . "," . $num_branches . "," . $num_employees . "," . $avg_experience . "," . $cert . "," . $portfolio ."\n";
    
    $fp = fopen("data.csv","a"); // $fp is now the file pointer to file $filename
    
    if($fp){
        fwrite($fp,$cvsData); // Write information to the file
        fclose($fp); // Close the file
    }
    
?>
<body>

</html>