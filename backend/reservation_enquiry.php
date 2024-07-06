<?php

$not = "Not Submit";

include 'config.php';

if (isset($_POST['submit'])) {
    $Arrival_Date = $_POST['arrival-date'];
    $Departure_Date = $_POST['departure-date'];
    $Adults = $_POST['adults'];
    $Total_Persons = $_POST['total-persons'];
    $Number_of_Room = $_POST['number-of-room'];
    $Name = $_POST['name'];
    $Last_Name = $_POST['last-name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $City = $_POST['your-city'];
    $Address = $_POST['address'];


    $tableContent = '<table style="border-collapse: collapse; width: 100%;">';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Date of Arrival </th> <td style="border: 1px solid black; padding: 8px;">' . $Arrival_Date . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Date of Departure</th> <td style="border: 1px solid black; padding: 8px;">' . $Departure_Date . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Adults</th> <td style="border: 1px solid black; padding: 8px;">' . $Adults . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Total Persons</th> <td style="border: 1px solid black; padding: 8px;">' . $Total_Persons . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Number of Room</th> <td style="border: 1px solid black; padding: 8px;">' . $Number_of_Room . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">&nbsp; &nbsp; </th>  </tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Guest First Name</th> <td style="border: 1px solid black; padding: 8px;">' . $Name . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Guest Last Name</th> <td style="border: 1px solid black; padding: 8px;">' . $Last_Name . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Email Address</th> <td style="border: 1px solid black; padding: 8px;">' . $Email . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Mobile Number</th> <td style="border: 1px solid black; padding: 8px;">' . $Phone . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Location</th> <td style="border: 1px solid black; padding: 8px;">' . $City . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Address</th> <td style="border: 1px solid black; padding: 8px;">' . $Address . '</td></tr>';
    $tableContent .= '</table>';


    $sql = "INSERT INTO `enquiry-table1`(`arrival-date`, `departure-date`, `adults`, `total-persons`, `number-of-room`, `name`, `last-name`, `email`, `phone`, `your-city`, `address`) 
            VALUES ('$Arrival_Date','$Departure_Date','$Adults','$Total_Persons','$Number_of_Room','$Name','$Last_Name','$Email','$Phone','$City','$Address')";


    $sql_query = mysqli_query($conn, $sql);

    if($sql_query){
        header("Location: ../index.php");
        exit();
    }else{
        echo $not;
    }

    if (empty($Arrival_Date) || empty($Departure_Date) || empty($Adults) || empty($Total_Persons) || empty($Number_of_Room) || empty($Name) || empty($Last_Name) || empty($Email) || empty($Phone) || empty($City) || empty($Address)) {
        echo "<div class=\"alert alert-danger mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
                        <strong>Please fill the all required fields. !!!</strong> 
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                            </button>
            </div>";
    } else {
        echo "<div class=\"alert alert-success mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
                    <strong>Thanks for your Enquiry  --  We'll get back to you as soon as possible.   !!!</strong> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
             </div>";
    }

    if ($sql_query) {
        $to = "theheightshwr@gmail.com";
        $from = "theheightshwr@gmail.com";
        $subject = 'Booking Details';
        $headers = "From: $from\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-Type: text/html\r\n";


        $message = "<html><body>";
        $message .= "<h1>Reservation Details</h1>";
        $message .= $tableContent;
        $message .= "</body></html>";

        $mailSent = mail($to, $subject, $message, $headers);

        if ($mailSent) {
            echo '<script><div class=\"alert alert-success mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
                        <strong>Thanks for your Enquiry  --  We  get back to you as soon as possible.   !!!</strong> 
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                        </button>
                </div></script>';
        } else {
            echo "Some Error Please Check ";
            header("location: ../index.php");
        }
    } else {
        echo '<script><div class=\"alert alert-danger mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
                    <strong>Please Check Your Connection, Or All Required fields and Try Again</strong> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
               </div></script>';
    }

     header('location:../index.php');
     exit(); 
}

?>
 