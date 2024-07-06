<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $CheckIn_Room = ($_POST['check-in-date']);
    $CheckOut_Room = ($_POST['check-out-date']);
    $Guest = ($_POST['guests']);
    $Number = ($_POST['number']);
    $Numberof_Rooms = ($_POST['number-of-room']);




    $tableContent = '<table style="border-collapse: collapse; width: 100%;">';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Check In Date</th> <td style="border: 1px solid black; padding: 8px;">' . $CheckIn_Room . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">Check Out Date</th> <td style="border: 1px solid black; padding: 8px;">' . $CheckOut_Room . '</td></tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;"> Guest Name   </th> <td style="border: 1px solid black; padding: 8px;">' . $Guest . '</td>    </tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">  Guest Mobile no. </th> <td style="border: 1px solid black; padding: 8px;">' . $Number . '</td>    </tr>';
    $tableContent .= '<tr><th style="border: 1px solid black; padding: 8px;">  Number of Room </th> <td style="border: 1px solid black; padding: 8px;">' . $Numberof_Rooms . '</td>    </tr>';

    $tableContent .= '</table>';





    $insert = "INSERT INTO `hthroom-book`(`check-in-date`, `check-out-date`, `guests`, `number`, `number-of-room`) 
        VALUES ('$CheckIn_Room','$CheckOut_Room','$Guest','$Number','$Numberof_Rooms')";

    $sqlQuery = mysqli_query($conn, $insert);

    if($sqlQuery){
        header("Location: ../index.php");
        exit();
    }


    if (empty($CheckIn_Room) || empty($CheckOut_Room) || empty($Guest) || empty($Number) || empty($Numberof_Rooms)) {
        echo "<div class=\"alert alert-danger mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
               <strong>Please fill the all required fields. !!!</strong> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
         </div>";
    } elseif ($conn->query($insert) == TRUE) {
        echo "<div class=\"alert alert-success mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
             <strong>Thanks for your Enquiry  --  We'll get back to you as soon as possible.   !!!</strong> 
             <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
             <span aria-hidden=\"true\">&times;</span>
             </button>
       </div>";
    }

    if ($sqlQuery) {
        // Validate and sanitize email addresses


        $to = "theheightshwr@gmail.com";
        $from = "theheightshwr@gmail.com";

        $subject = 'Booking Details';
        $headers = "From: $from\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-Type: text/html\r\n";

        $message = "<html><body>";
        $message .= "<h1>Booking Details</h1>";
        $message .= $tableContent;
        $message .= "</body></html>";

        // Send the email using a more reliable method, like PHPMailer or a third-party email service
        $mailSent = mail($to, $subject, $message, $headers);

        if ($mailSent) {
            // Display a success message on the same page
            echo "<div class=\"alert alert-success mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
                <strong>Thanks for your Booking! We'll get back to you as soon as possible.</strong> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>";
        } else {
            // Display an error message on the same page
            echo "<div class=\"alert alert-danger mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
                <strong>Oops! There was an issue with the booking process. Please try again later.</strong> 
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>";
        }
    } else {
        // Display an error message on the same page
        echo "<div class=\"alert alert-danger mt-5 p-4 alert-dismissible fade show\" role=\"alert\">
            <strong>Please Check Your Connection or All Required Fields and Try Again.</strong> 
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>";
    }
}
// Always use the `exit()` function after a header redirect to prevent further execution of the script
header('location:../index.php');
exit();
