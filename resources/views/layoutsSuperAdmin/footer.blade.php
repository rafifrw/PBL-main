<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    <style>
        /* Footer styling */
        .footer {
            background-color: #1E3A8A; /* Dark blue background */
            color: #ffffff; /* White text */
            padding: 20px 0;
            font-family: Arial, sans-serif;
        }

        .footer .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        /* Left side (logo and name) */
        .footer .logo-section {
            display: flex;
            align-items: center;
        }

        .footer .logo-section img {
            height: 50px;
            margin-right: 10px;
        }

        /* Right side (contact info and social icons) */
        .footer .contact-section {
            text-align: right;
            font-size: 14px;
            line-height: 1.6;
        }

        .footer .social-icons {
            margin-top: 10px;
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        .footer .social-icons a {
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
        }

        /* Smaller font for the copyright */
        .footer .copyright {
            text-align: center;
            margin-top: 10px;
            font-size: 12px;
            color: #cccccc;
        }
    </style>
    <!-- Include Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Footer -->
<footer class="footer">
    <div class="content">
        <!-- Left Side (Logo and Name) -->
        <div class="logo-section">
            <img src="assets/polinema-logo.png" alt="Polinema Logo"> <!-- Replace with actual logo path -->
            <span>POLITEKNIK NEGERI MALANG</span>
        </div>
        
        <!-- Right Side (Contact Information and Social Icons) -->
        <div class="contact-section">
            <div>
                <strong>BLU POLITEKNIK NEGERI MALANG</strong><br>
                Soekarno Hatta Street No.9 Malang 65141<br>
                Jatimulyo, Kec. Lowokwaru, Malang,<br>
                East Java - Indonesia<br>
                - PMDN
            </div>
            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        © 2024 POLINEMA
    </div>
</footer>

</body>
</html>
