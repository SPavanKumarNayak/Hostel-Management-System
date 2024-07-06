<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Booking Form</title>
  
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: black;
    background-image: url('Login.jpg'); 
    background-repeat: no-repeat;
    background-size: cover;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    font-style: oblique;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    position: relative;
    top: 403px;
}

button:hover {
    background-color: #b31500;
}

#signupForm {
    display: none;
}

#signupLink {
    margin-top: 10px;
    text-align: center;
} 
td {
        padding: 10px; 
   }

table{
    background-color:rgb(213, 224, 238);
    border-radius: 5px;
    margin-top: -40px;
}
a{
    text-decoration: none;
    position: absolute;
    left:1170px;
    top:20px;
    color:black;
    font-family:bold;
    font-size:30px;
}
</style>
<body>

    <div class="container">
    <a href="main1.php">Home</a>
        <h2 style="text-align: center;background-color: aliceblue;">Hostel Booking Form</h2>
        <table>
        <form id="bookingForm" method="POST" action="LoginPage.php">
            
            <tr><div class="form-group">
                <td><label for="studentName">Student Name</label></td>
            <td> <input type="text" id="studentName" name="studentName" required></td></tr>
            </div>

            <div class="form-group">
                <td><label for="parentName">Parent/Guardian Name</label></td>
                <td><input type="text" id="parentName" name="parentName" required></td></tr>
            </div>

            <div class="form-group">
                <td><label for="parentPhone">Parent/Guardian Phone</label></td>
                <td><input type="number" id="parentPhone" name="parentPhone" pattern="[0-9]{10}" required></td></tr>
            </div>

            <div class="form-group">
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email"></td></tr>
            </div>

            <div class="form-group">
               <td><label for="address">Address</label></td>
                <td><textarea id="address" name="address" rows="4" required></textarea></td></tr>
            </div>

            <div class="form-group">
                <td><label for="checkInDate">Check-in Date</label></td>
                <td><input type="date" id="checkInDate" name="checkInDate" required></td></tr>
            </div>

            <div class="form-group">
                <td><label for="duration">Duration of Stay (in months)</label></td>
                <td><input type="number" id="duration" name="duration" min="1" required></td></tr>
            </div>

            <div class="form-group">
                <td><label for="roomType">Room Type</label></td>
                <td><select id="roomType" name="roomType" required>
                    <option value="">Select Room Type</option>
                    <option value="single">Single</option>>
                    <option value="double">Double</option></td></tr>
                </select>
            </div>
            <button type="submit" name="submit">Book Hostel</button>
        </form>
        </table>
    </div>


<?php
if(isset($_POST['submit']))
{
    error_reporting(1);
    include("config.php");
    
    $Sname = $_POST['studentName']; 
    $Pname = $_POST['parentName']; 
    $Pphone = $_POST['parentPhone']; 
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Indate = $_POST['checkInDate']; 
    $Duration = $_POST['duration'];
    $Room = $_POST['roomType']; 

   $query = "INSERT INTO form (Sname, Pname, Pphone, Email, Address, Indate, Duration, Room) 
   VALUES ('$Sname', '$Pname', '$Pphone', '$Email', '$Address', '$Indate', '$Duration', '$Room')";
       
   mysqli_query($con, $query) or die(mysqli_error($con));
    
    echo "<script> 
            alert('Thankyou for your Booking.');
            location.href='LoginPage.php';
        </script>";
}
?>    
</body>
</html>
