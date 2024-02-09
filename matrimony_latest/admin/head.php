<?php 
session_start();
require(__DIR__ . '/../matbase.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head</title>
</head>
<style>
  

/* ul {
            list-style: none; 
        } */


body {
    font-family: "Lato", sans-serif;
    text-align: center;
    margin: 0;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:#333;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    color: white;
    border-radius: 10px;
}

.sidenav a {
    padding: 25px 10px 10px 40px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    display: block;
    transition: 0.3s;
    font-family: "Lato", sans-serif;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
    align-items: center;
}


#main.opened {
    margin-left: 225px; /* Adjust margin when the sidebar is open */
    align-items: center;

}

.col-md-12 {
    margin-left: 0; /* Reset margin for the content area */
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
    .sidenav a {
        font-size: 10px;
    }
}
.header {
    background-color: transparent;
    color: #333;
    display: flex;
    justify-content: space-between;
    padding: 10px 10px;
    border-radius: 10px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
}

.header img {
    height: 30%;
    max-width: 100px;
}

.header .open-button {
    font-size: 30px;
    cursor: pointer;
    color: white;
}

.header .navbar {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.header .navbar li {
    margin-right: 10px;
}

.header .navbar li a {
    text-decoration: none;
    color: #333;
}

.header .navbar li a[href="repro.php"] {
    color: #333;
}

.header .navbar li a[href="settings.php"] {
    color: #333;
}

.header .navbar li a[href="logout.php"] {
    color: white;
}

@media screen and (max-width: 768px) {
    /* Adjust header styles for smaller screens */
    .header {
        padding: 15px 15px; /* Reduce padding for smaller screens */
    }
/* Show the nav-buttons on screens smaller than 768px */
@media screen and (max-width: 768px) {
    .nav-buttons {
        display: block;
    }
}

/* Hide the nav-buttons on screens larger than 768px */
@media screen and (min-width: 769px) {
    .nav-buttons {
    }
}

    .header img {
        max-width: 80px; /* Reduce the maximum width of the logo */
    }

    .header .open-button {
        font-size: 24px; /* Reduce font size for the open button */
    }

    .header .navbar li {
        margin-right: 10px; /* Keep some margin between navbar items */
    }

    .header .navbar li a {
        font-size: 14px; /* Reduce font size for navbar links */
    }
    
    .header .navbar li:last-child {
        margin-right: 10px; /* Keep margin for the last navbar item (e.g., Logout) */
    }
}


.sidenav a.active {
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
}
.container {
    display: flex;
    align-items: left;
}

/* ul {
            list-style: none; 
        } */



</style>


<body>


<div class="header">
    <span class="open-button text-dark" onclick="openNav()">&#9776; </span>
    <header>
        <div class="container" style="margin-right: 800px;">
            <img src="../img/tekmat.png" height="30%" width="100px">
        </div>
    </header>
    <ul class="navbar">
        <li style="margin-top: 5px;"><a href="changepass.php"><button class="btn btn-secondary">Change Password</button></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li style="margin-top: 5px;">
    
        <a href="adlogin.php?abc"><button class="btn btn-primary">Logout</button></a>

    </ul>
</div>


<div id="mySidenav" class="sidenav">
<a><div class="container">
    <img src="../img/tekmat.png" height="30%" width="100%">
</div></a>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="container" style=" flex-direction: column; align-items: center;">
        <a href="repro.php">Services</a>
        <a href="selectmat.php">All Profiles</a>
        <a href="male.php">M.List</a>
        <a href="female.php">F.List</a>
        <a href="reqselect.php">Requests</a>
        <!-- <a href="last.php">Thanks</a> -->
    </div>
</div>


<!-- <div id="main">
    <div class="col-md-12">
        fgdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddgdddddddddddddddddddd
    </div>
</div> -->

<script>
function openNav() {
    var sidenav = document.getElementById("mySidenav");
    var main = document.getElementById("main");
    if (sidenav.style.width === "225px") {
        closeNav();
    } else {
        sidenav.style.width = "225px";
        main.classList.add('opened');
    }
}

function closeNav() {
    var sidenav = document.getElementById("mySidenav");
    var main = document.getElementById("main");
    sidenav.style.width = "0";
    main.classList.remove('opened');
}

// Close the side menu when clicking outside
document.addEventListener('click', function(event) {
    if (!event.target.matches('.open-button') && !event.target.matches('.sidenav') && document.getElementById("mySidenav").style.width === "225px") {
        closeNav();
    }
});
</script>

</body>
</html>
