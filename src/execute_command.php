<?php
// Get the command from POST data
$command = $_POST['command'];

// Execute the command
exec($command, $output, $return_var);

// Check the return value of the Python script
if ($return_var === 0) {
    echo '<script>alert("Bill generated successfully!");</script>';
} else {
    echo '<script>alert("Error generating bill. Please try again.");</script>';
}
?>
