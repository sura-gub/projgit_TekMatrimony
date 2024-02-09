<!-- <?php
session_start();
require(__DIR__ . '/matbase.php');
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Request</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</head>

<style>
  .card {
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.3);
    padding: 0px;
  transition: transform 0.3s, box-shadow 0.3s;
  /* Add transitions for transform and box-shadow */  
  }
  .card:hover {
  transform: scale(1.05); /* Increase the scale on hover */
  box-shadow: 5px 10px 20px rgba(20, 20, 20, 0.5); /* Adjust the shadow on hover */
}

.card:hover .card-title {
  color: Black; /* Change the text color on hover */
}


  .hd {
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.2);
  }

  .hideee {
    display: none;

  }

  .myDIV:hover+.hideee {
    display: block;
    color: red;
    transition-duration: 0.8s;

  }

  .noulne {
    text-decoration: none;
  }

  .btnnn {
    border: none;
    padding: 10px;
    background-color: transparent;
    font-size: 20px;
    border-radius: 10px;
    transition-duration: 0.6s;
  }

  .btnnn:hover {
    background-color: #C3C4C9;
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.1);
  }

  .sidebar {
    top: 0;
    left: 0;
    background-color: #333;
    padding-top: 20px;
    overflow-y: auto;
  }
  .sidebar a {
    padding: 15px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
  }

  .sidebar a:hover {
    background-color: #555;
  }

  .content {
    margin-left: 250px;
    padding: 20px;
  }

  .card-container {
    width: 100%;
  }
  .card-img-top:hover {
    position: relative;
}
table {
  border-collapse: collapse;
  width: 100%;
  margin-right: 100px;

}

table th {
  color: black;
  text-align: left;
  padding: 10px;
  font-size:35px;
}


table tr:nth-child(even) {
  /* background-color: #f2f2f2; */
  
}

/* Style the table data cells */
table td {
  padding: 10px;
}

.profile-details {
  display: flex;
  align-items: center;
}

.profile-image {
  flex: 0 0 150px;
}

.profile-image img {
  width: 150px;
  height: 150px;
  border-radius: 20px;
}

.profile-info {
  flex: 1;
  padding: 0 20px;
}

.profile-info h5 {
  font-size: 18px;
  margin: 0;
}

.profile-info p {
  font-size: 16px;
  margin: 5px 0;
}

.hideee {
  display: none;
}

.myDIV {
  text-decoration: none;
  color: #333;
  display: block;
  position: relative;
}

.myDIV:hover .hideee {
  display: block;
  color: red;
  transition-duration: 0.8s;
}
/* ============================================== */
.sidebar {
            background: #333;
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 8px;
            left: -250px; /* Initially hidden */
            transition: 350ms;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding-top:40px;
        }

        .sidebar ul {
            list-style: none;
            padding: 20px;
            margin: 0;
            color: white;
        }

        .sidebar li {
            margin: 0;
            padding: 10px 0px 10px 0px;
            color:white;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .close-button {
            text-decoration: none;
            color: white;
            font-size: 20px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .has-submenu .arrow {
    position: absolute;
    top: 50%;
    right: 10px;
    transform: translateY(-50%);
    color: #fff; /* Change text color to white */

}

.submenu {
    display: none;
}

.has-submenu:hover .submenu {
    display: block;
}

/* ========================================= */
.header {
    background: #333;
    height: 80px;
    display: flex;
    justify-content: space-between; /* Place items at the ends of the header */
    align-items: center;
    border-radius: 10px;
}

.navbar {
    list-style: none;
    padding: 0;
    margin: 0;
}

.navbar li {
    display: inline; /* Display list items horizontally */
    margin-right: 20px; /* Add some spacing between items */
}

.navbar a {
    text-decoration: none;
    color: white;
}

        .header .open-button {
            margin-left: 2rem;
            font-size: 2rem;
            height: 80px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            cursor: pointer;
            color: white; /* Set the color to white */
            text-decoration: none; /* Remove underline */
            line-height: 0; /* Adjust line-height to remove baseline */
        }

        /* Optional: Center the icon vertically within the button */
        .header .open-button::before {
            content: '';
            display: inline-block;
            vertical-align: middle;
            height: 100%;
        }

        .logo {
            width: 150px;
            float: right;
        }
        .large-arrow {
            font-size: 24px; /* Adjust the font size as needed */
        }
        .container{
          margin-right: 250px;
          padding: 10px;
          
        }

</style>


<body style="background-image: url('../matrimony/img/ring.jpg'); min-height: 700px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
  <!-- Top Navbar -->


  <div class="header">
        <a href="#" class="open-button">
            &#9776;
        </a>
       
        <ul class="navbar">
            <li><a href="reqselect.php">Back</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#">Logout</a></li>
        </ul>
       </div>
       <div class="sidebar">
        <a href="#" class="close-button">
            &times;
        </a>
        <ul>
        <a href="/addjewelloan">
        <i class="fas fa-home"></i> Home
    </a>
</li>
<li class="has-submenu">
<a href="repro.php">
                <span class="icon"><i class="fa"><i class="fa-envelope-open-text"></i></i></span>
                repro.php
                <span class="arrow"><i class="ri"></i></span>
            </a>
          
        </li>
        <li class="has-submenu">
        <a href="selectmat.php">
                <span class="icon"><i class="fa"><i class="fa-envelope-open-text"></i></i></span>
                selectmat.php
                <span class="arrow"><i class="ri"></i></span>
            </a>
           
        </li>
        <li class="has-submenu">
        <a href="male.php">
                <span class="icon"><i class="fa"><i class="fa-envelope-open-text"></i></i></span>
                male.php
                <span class="arrow"><i class="ri"></i></span>
            </a>
          
        </li>
        <a href="female.php">
                <span class="icon"><i class="fa"><i class="fa-envelope-open-text"></i></i></span>
                female.php
                <span class="arrow"><i class="ri"></i></span>
            </a>
            <a href="reqselect.php">
                <span class="icon"><i class="fa"><i class="fa-envelope-open-text"></i></i></span>
                last.php.php
                <span class="arrow"><i class="ri"></i></span>
            </a>
        
    </div>

      <!-- Main Content -->
      <div class="container">
      <div class="col-md-8 offset-3">
      <table>
    <tr>
        <th>Request From</th>
        <th> <div class="large-arrow">&#10148;</div></th>
        <th>Request To</th>
    </tr>
    <?php
    $res = $connect->prepare("SELECT r.*, w1.picture AS req_from_picture, w1.name AS req_from_name, w1.gender AS req_from_gender, w1.dob AS req_from_dob, w1.mobile AS req_from_mobile, w2.picture AS req_to_picture, w2.name AS req_to_name, w2.gender AS req_to_gender, w2.dob AS req_to_dob, w2.mobile AS req_to_mobile FROM request r LEFT JOIN wedding w1 ON r.req_from = w1.email LEFT JOIN wedding w2 ON r.req_to = w2.email WHERE r.status = 'accepted'");
    $res->execute();

    while ($row = $res->fetch()) {
        // Display content for both request sender and receiver
        ?>
        <tr>
            <td>
                <h5><?php echo $row['req_from_name']; ?></h5>
                <p>Gender: <?php echo $row['req_from_gender']; ?></p>
                <p>DOB: <?php echo $row['req_from_dob']; ?></p>
                <p>Mobile: <?php echo $row['req_from_mobile']; ?></p>
            </td>
            <td><div class="large-arrow">&#10148;</div></td>
            <td>
                <h5><?php echo $row['req_to_name']; ?></h5>
                <p>Gender: <?php echo $row['req_to_gender']; ?></p>
                <p>DOB: <?php echo $row['req_to_dob']; ?></p>
                <p>Mobile: <?php echo $row['req_to_mobile']; ?></p>
            </td>
        </tr>
    <?php
    }
    ?>
</table>



</div>
  </div>
<script>
        const openButton = document.querySelector('.open-button');
        const closeButton = document.querySelector('.close-button');
        const sidebar = document.querySelector('.sidebar');

        openButton.addEventListener('click', function () {
            sidebar.style.left = '0';
        });
        closeButton.addEventListener('click', function () {
            sidebar.style.left = '-250px';
        });

        // Add a click event listener to the document
        document.addEventListener('click', function (event) {
            // Check if the click occurred outside the sidebar
            if (event.target !== sidebar && !sidebar.contains(event.target) && event.target !== openButton) {
                sidebar.style.left = '-250px';
            }
        });
    </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>