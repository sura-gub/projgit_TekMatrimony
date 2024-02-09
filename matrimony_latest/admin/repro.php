<?php
      include('./head.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Sidebar Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
    font-family: "Lato", sans-serif;
    text-align: left;
    margin-top: 80px;
    margin-left: 80px;

}

ul {
            list-style: none; /* Remove list-style dots from all unordered lists */
        }

#main {
    transition: margin-left .5s;
    padding: 16px;
    align-items: center;
}
.custom-list {
    list-style-type: square; /* Change to 'circle', 'disc', or other values for different list symbols */
}



</style>
<?php
if(!isset($_SESSION['dev']))
{
?>
<script>
   window.location.href="adlogin.php";
   </script>
<?php
}
?>
</head>
<body style="background-image:linear-gradient(rgb(255,192,203,0.3)100%,rgb(255,192,203,0.3)100%),url('../img/25th.jpg'); min-height: 800px; background-size: 100% 100%; background-repeat: no-repeat; background-position: center;" class="w-100">
 

    <div id="main">
    <h1 class="text-center">Welcome to Our Matrimony Service</h1>
    <h4 class="text-center">Find your solumate with out matrimony serivices</h4>

        <h4 class="text-center">Your Perfect Partner Awaits</h4>

        <section>
            <article class=" col-md-6 intro">
                <h2>About Us</h2>
                <p>In recent times, our online matrimony service has revolutionized the way people find their life partners. We provide a platform for individuals to connect and share matrimonial information more conveniently and selectively.</p>
            </article>

            <article>
                <h2>Our Services</h2>
                <div class="d-flex">
    <ul class="custom-list">
        <li>Free Registration</li>
        <li>Premium Membership</li>
        <li>E-Matchmaking</li>
        <li>Online Chatting</li>
        <li>Email/SMS Alerts</li>
        <li>Personalized Services</li>
        <li>Community-Specific Search</li>
        <li>Horoscope Matching</li>
    </ul>

 
</div>


            </article>

            <article class="user-stats">
                <h2>User Statistics</h2>
                <p>Join our community of millions of users who have successfully found their life partners through our platform.</p>
                <p>Over 5 million marriages in the last decade</p>
                <p>10,000+ new registrations daily</p>
            </article>
        </section>
    </div>

   
    
</body>
</html>
