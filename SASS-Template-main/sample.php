<?php
$servername = "localhost";
$username = "root"; // Change as per your MySQL credentials
$password = ""; // Change as per your MySQL credentials
$dbname = "doctor_appointments";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CRUD operations...

// Read Appointments
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Appointments</title>
</head>

<body>
    <h2>Appointments</h2>
    <table border="1">
        <tr>
            <!-- <th>ID</th> -->
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>HMO's</th>
            <th>Consulation</th>
            <th>Doctor</th>
            <th>Message</th>
            <th>Time Submitted</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                // echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["first_name"] . " " . $row["last_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["appointment_date"] . "</td>";
                echo "<td>" . $row["appointment_time"] . "</td>";
                echo "<td>" . $row["hmo"] . "</td>";
                echo "<td>" . $row["consultation_type"] . "</td>";
                echo "<td>" . $row["specialization"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";

                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No appointments found</td></tr>";
        }
        ?>
    </table>
</body>

</html>

<?php
$conn->close();
?>