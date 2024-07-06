<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <a href="main1.php">Home</a>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('aboutus.jpg'); 
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            fill-opacity: 0.3px;
            opacity:0.7px;
        }
        h1,h2,p,li {
            color: white;
            text-align: center;
            font-weight: bold;
            font-style: oblique;
        }
        #map {
            height: 400px;
            width: 100%;
        }
        a{
            text-decoration: none;
            position: absolute;
            left:1170px;
            top:20px;
            color:white;
            font-family:bold;
            font-size:25px;
        }
        footer{
                background-color: #333;
                color: #fff;
                text-align: center;
            }

    </style>
</head>
<body>

<div class="container">
    <h1>About Us</h1>
    
    <h2>Our Mission</h2>
    <p>At Our Hostel, we strive to create a vibrant and inclusive community where travelers from all walks of life can come together, share experiences, and create lasting memories.</p>    
    
    <h2>Contact Us</h2>
    <p>If you have any questions or inquiries, feel free to contact us:</p>
        <p>Email: info@webproject.com</p>
        <p>Phone: 080-4600 7672 </p>
    </ul>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.613383851478!2d77.60602108885496!3d12.93255210000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15c17ea79281%3A0x95e42f4c0ef0fcf6!2sStanza%20Living%20Samara%20House!5e0!3m2!1sen!2sin!4v1714028185921!5m2!1sen!2sin" id="map"style="border:2;" 
 loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</body>

<footer>
        <div class="container">
            <p>&copy; 2024 Hotel Management System. All Rights Reserved.</p>
        </div>
    </footer>
</html>
