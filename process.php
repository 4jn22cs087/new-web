<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $symptoms = htmlspecialchars($_POST['symptoms']);

    // Display the submitted data in a formatted table
    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Registration Details</title>";
    echo "<style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 60%;
                margin: 50px auto;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
            }
            h2 {
                text-align: center;
                color: #333;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
            }
            table, th, td {
                border: 1px solid #ccc;
            }
            th, td {
                padding: 12px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
                text-align: center;
                font-size: 18px;
            }
            td {
                font-size: 16px;
            }
            .field {
                width: 40%;
                font-weight: bold;
                text-align: right;
            }
            .value {
                width: 60%;
                text-align: left;
            }
          </style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='container'>";
    echo "<h2>Registration Details</h2>";
    echo "<table>";
    echo "<tr><th class='field'>Field</th><th class='value'>Details</th></tr>";
    echo "<tr><td class='field'>Full Name</td><td class='value'>$name</td></tr>";
    echo "<tr><td class='field'>Age</td><td class='value'>$age</td></tr>";
    echo "<tr><td class='field'>Gender</td><td class='value'>$gender</td></tr>";
    echo "<tr><td class='field'>Email Address</td><td class='value'>$email</td></tr>";
    echo "<tr><td class='field'>Phone Number</td><td class='value'>$phone</td></tr>";
    echo "<tr><td class='field'>Address</td><td class='value'>$address</td></tr>";
    echo "<tr><td class='field'>Symptoms</td><td class='value'>$symptoms</td></tr>";
    echo "</table>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "<p style='color: red;'>Invalid request. Please submit the form properly.</p>";
}
?>