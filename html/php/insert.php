<?php  
$firstName = $_POST['firstName']
$middleName = $_POST['middleName']
$lastName = $_POST['lastName']
$accountNumber = $_POST['accountNumber']
$address = $_POST['address']
$cellphone = $_POST['cellphone']
$email = $_POST['email']

if(!empty($firstName)||!empty($middleName)||!empty($lastName)||!empty($accountNumber)||!empty($address)||!empty($cellphone)||!empty($email)){
    $host ="localhost";
    $dbUsername="root";
    $dbPassword=""
    $dbname="foodmarketing"

    //connection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connectin_error()){
        die('Connect Error('.mysqli_connectin_error().'))'.mysqli_connectin_error());

    }
    else{
        $SELECT ="Select email from Information where email =? Limit 1";
        $INSERT ="INSERT INTO information (fName, mName, lName, accountNo, Adress, cpNo, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
        

        $stmt =$conn->prepare($SELECT);
        $stmt ->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt ->store_result();
        $rnum= $stmt->num_rows;

        if($rnum==0){
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt ->bind_param("sssssss", $firstName, $middleName, $lastName, $accountNumber, $address, $cellphone, $email);
            $stmt->execute();

            echo "New record inserted!";

        }
        else{
            echo "Already use the email"
        }
        $stmt->close();
        $conn->close();
    }
    bind_param("sssssss", $firstName, $middleName, $lastName, $accountNumber, $address, $cellphone, $email);

}
else{
    echo "All field are required"
    die();
}


?>