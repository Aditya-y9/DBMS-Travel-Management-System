<?php

// Extract values from the URL
$pkgid = $_GET['pkgid'];
$user_id = $_GET['user_id'];
$fromdate = $_GET['fromdate'];
$todate = $_GET['todate'];
$comment = $_GET['comment'];
$total = $_GET['total'];

// Construct the command to execute the Python script
$command = "python \"C:\\xampp\\htdocs\\onlinetourism\\TMS\\bill.py\" \"$pkgid\" \"$user_id\" \"$fromdate\" \"$todate\" \"$comment\" \"$total\"";



print_r($command);

// Execute the command
exec($command, $output, $return_var);

// Print the output of the Python script
echo $output[0];

// Print the return value of the Python script
echo $return_var;

// Check if the Python script executed successfully
if ($return_var === 0) {
    echo "Bill generated successfully!";
} else {
    echo "Error generating bill. Please try again.";
}

?>
