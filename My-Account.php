<?php
                session_start();
                $con = mysqli_connect("localhost","root","","foundationdb");

                if(isset($_POST['update']))
                {
   

                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];
                    $name = $_POST['username'];
                    $contact = $_POST['contact'];

                    $query = "UPDATE users SET fname='$firstname', lname='$lastname', username='$name',contact='$contact' 
                    WHERE username='$name' ";
                    $query_run = mysqli_query($con, $query);

                    if($query_run)
                    {
                        $_SESSION['status'] = "Data Updated Successfully";
                        header("Location: My-Account.php");
                    }
                     else
                     {
                         $_SESSION['status'] = "Not Updated";
                        header("Location: indexMy-Account.php");
                        }
                    }
                    else if(isset($_POST['delete'])) {
                        $firstname = $_POST['fname'];
                        $lastname = $_POST['lname'];
                        $name = $_POST['username'];
                        $contact = $_POST['contact'];

                        $query4 = "DELETE FROM users WHERE username='$name'; ";
                        $query_run1 = mysqli_query($con, $query4);

                        if($query_run1)
                        {
                            $_SESSION['status'] = "Data Deleted Successfully";
                            header("Location: My-Account.php");
                        }
                        else
                        {
                            $_SESSION['status'] = "Not Deleted";
                            header("Location: indexMy-Account.php");
                        }

                    }
            ?>
            
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>My Account</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="My-Account.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" "=" " defer=" "></script>
    <script class=" u-script " type=" text/javascript " src=" nicepage.js " "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.16.0, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">


    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Site1",
            "logo": "images/People.png"
        }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="My Account">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-sticky u-sticky-e21f u-header" id="sec-523a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="LoginHome.php" data-page-id="29525432" class="u-image u-logo u-image-1" data-image-width="216" data-image-height="199">
                <img src="images/People.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
                    <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="LoginHome.php"
                                style="padding: 8px 10px;">Home</a>
                        </li>
                        <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="LoginHome.php#about"
                                style="padding: 8px 10px;">About</a>
                        </li>
                        <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 8px 10px; cursor:pointer;">Event</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="LoginLiveEvent.php">Live Event</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="LoginUpcomingEvent.php">Upcoming Event</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 8px 10px; cursor:pointer;">Services</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="LoginEducational.php">Educational</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="LoginFood.php">Food</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="LoginMedical.php">Medical</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white"href="LoginEmergency.php">Emergency Services</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="LoginHome.php#contact"
                                style="padding: 8px 10px;">Contact</a>
                        </li>
                        <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90"
                                style="padding: 8px 10px; cursor:pointer;" href="donate.php">Donate us</a>
                        </li>
                        <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 8px 10px; cursor:pointer;">Account</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="My-Account.php">My Account</a>
                                    </li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-5">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginHome.php">Home</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginHome.php#about">About</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="cursor:pointer;">Event</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginLiveEvent.php">Live Event</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginUpcomingEvent.php">Upcoming Event</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="cursor:pointer;">Services</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-7">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginEducational.php">Educational</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginFood.php">Food</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginMedical.php">Medical</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginEmergency.php">Emergency Services</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="LoginHome.php#contact">Contact</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="cursor:pointer;" href="donate.php">Donate us</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" style="cursor:pointer;">Account</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="My-Account.php">My Account</a>
                                            </li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php">Sign out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
        <style class="u-sticky-style" data-style-id="e21f">
            .u-sticky-fixed.u-sticky-e21f:before,
            .u-body.u-sticky-fixed .u-sticky-e21f:before {
                border: top right bottom left !important
            }
        </style>
    </header>
    <section class="u-clearfix u-section-1" id="sec-3f6e">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-custom-font u-font-merriweather u-text u-text-1">My Account<span style="font-size: 1.875rem;"></span>
            </h4>
            <div class="f_name u-clearfix u-custom-html u-custom-html-1">
                <style>
                    .fbox,
                    .lbox,
                    .ubox,
                    .conbox {
                        position: relative;
                        left: 80px;
                        top: -40px;
                        border-radius: 10px;
                    }
                    
                    .f_name,
                    .l_name,
                    .u_name,
                    .con {
                        font-family: 'Franklin Gothic Medium';
                        font-size: 13px;
                    }
                </style>
                <?php
                $con = mysqli_connect('localhost','root','');
                $db = mysqli_select_db($con,'foundationdb');

                $sql1 = "SELECT * FROM users;";
                $result1 = mysqli_query($con,$sql1);
                $resultcheck = mysqli_num_rows($result1);
                $row=mysqli_fetch_assoc($result1);
                ?>
                <form class="account-info" action="" method="post">  
                    <h5 class="f_name">First Name: </h5>
                    <input type="text" class="fbox" name="f_name" size="30" value = <?php if($resultcheck>0){echo $row['first_name'];}?>>
                    <h5 class="l_name">Last Name: </h5>
                    <input type="text" class="lbox" name="l_name" size="30" value = <?php if($resultcheck>0){echo $row['last_name'];}?>>
                    <h5 class="u_name">User Name: </h5>
                    <input type="text" class="ubox" name="username" size="30" value = <?php if($resultcheck>0){echo $row['username'];}?>>
                    <h5 class="con">Contact: </h5>
                    <input type="text" class="conbox" name="contact" size="30" value = <?php if($resultcheck>0){echo $row['contact'];}?>>
                </form>
            </div>
            <input type="submit" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1" name="delete" value="Delete"/>
            <input type="submit" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2" name="update" value="Update" method="post"/>

    
        </div>
    </section>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        /* Button used to open the contact form - fixed at the bottom of the page */
        
        .container {
            position: relative;
        }
        
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }
        /* The popup form - hidden by default */
        
        .form-popup {
            display: none;
            position: fixed;
            bottom: 100px;
            right: 450px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }
        /* Add styles to the form container */
        
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }
        /* Full-width input fields */
        
        .form-container input[type=text] {
            width: 100%;
            height: 10px;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        /* When the inputs get focus, do something */
        
        .form-container input[type=text]:focus {
            background-color: #ddd;
            outline: none;
        }
        /* Set a style for the submit/login button */
        
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 2px 5px;
            border: none;
            cursor: pointer;
            width: 100px;
            margin-bottom: 10px;
            opacity: 0.8;
        }
        /* Add a red background color to the cancel button */
        
        .form-container .cancel,
        .proceed {
            background-color: red;
        }
        /* Add some hover effects to buttons */
        
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }
        
        .gateway {
            position: relative;
            top: -5px;
        }
        
        .media {
            position: relative;
            left: 15px;
        }
        
        button {
            position: relative;
            top: 10px;
            left: 30px;
        }
    </style>
        <div class="form-popup" id="myForm">
            <form action="payment.php" class="form-container" method="post">
                <div class="Ename">
                    <label>Event Name: </label>
                    <!--input type="text"-->
                    <select name="Event">
                            <option>Foundation Fund</option>
                            <option>Free meal for street people</option>
                            <option>Hospital for unpriviledged people</option>
                        </select>
                </div>
                <div class="username">
                    <label>Username: </label>
                    <input type="text" name="username">
                </div>
                <div class="contact">
                    <label>Contact: </label>
                    <input type="text" name="contact">
                </div>
                <div class="gateway">
                    <label>Select: </label>
                    <select name="media" class="media">
                    <option></option>
                            <option>GPay</option>
                            <option>Paytm</option>
                            <option>BHIM UPI</option>
                            <option>Razorpay</option>
                        </select>
                </div>
                <div class="money">
                    <label>Amount: </label>
                    <input type="number" name="money">
                </div>
                <button class="btn proceed">Proceed</button>
                <button type="button" class="btn cancel" onclick="closeForm()">X</button>
            </form>
        </div>

        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>




    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3a0f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1"><span class="u-file-icon u-icon u-text-white"><img
                        src="images/104663-e48cbb01.png" alt=""></span>&nbsp;Rights Reserved by Team ASHRAY: Tanu and Aparna​.
            </p>
        </div>
    </footer>
</body>
</html>