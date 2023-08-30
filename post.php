<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job_postings";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $jobTitle = $_POST["job_title"];
    $company = $_POST["company"];
    $salaryRange = $_POST["salary_range"];
    $jobType = $_POST["job_type"];
    $location = $_POST["location"];
    $description = $_POST["description"];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO jobs (job_title, company, salary_range, job_type, location, description)
            VALUES ('$jobTitle', '$company', '$salaryRange', '$jobType', '$location', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Job posting submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>