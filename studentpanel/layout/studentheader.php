<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./css/studentstyle.css">
</head>

<body>
    <div class="sadmin-outer">
        <!-- Header Section Start -->
        <div class="sadmin-nav">
            <div class="sadmin-fnav-header">
                <marquee behavior="scroll" direction="rtl">TECHSIMA SOLUTION PRIVATE LIMITED</marquee>
            </div>
            <div class="sadmin-snav-header">
                <div class="toggle-btn" onclick="toggleNav()">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="sadmin-image" id="sadmin-profileImage">
                    <img src="./images/student2.webp" alt="Candidate Photo">
                </div>
            </div>
            <!-- Popup Image Section Start -->
            <div id="sadmin-profileImage-popup" class="sadmin-profileImage-popup">
                <div class="sadmin-popup-content">
                    <img src="./images/student2.webp" alt="Profile Picture">
                    <h2 class="sadmin-popup-contentText">Tannu Priya Kumari</h2>
                    <p class="sadmin-popup-contentText">POST GRADUATE IN DIPLOMA IN COMPUTER APPLICATION</p>
                    <div class="sadmin-popupButton">
                        <button class="sadmin-profileButton">
                            <a href="./student-profile.php" class="sadmin-profileButton-text">Profile</a>
                        </button>
                        <button class="sadmin-profileButton">
                            <a href="" class="sadmin-profileButton-text">Sign Out</a>
                        </button>
                        <button class="sadmin-profileButton">
                            <a href="" class="sadmin-profileButton-text">Change Password</a>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Popup Image Section End -->
        </div>