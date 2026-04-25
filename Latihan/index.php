<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your Full Name" required>
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Enter your Username" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your Email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your Phone Number" required>
                </div>
                <div class="input-box"> 
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your Password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm your Password" required>
                </div>
            </div>
            <div class="gender-details">
                <div class="gendertitle">Gender</div>
                <div class="category-gender">
                    <label for="">
                        <span class="dot one"></span>
                        <span class="male">Male</span>
                    </label>
                    <label for="">
                        <span class="dot one"></span>
                        <span class="female">Female</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="button" value="Register">
            </div>
        </form>
    </div>
</body>
</html>