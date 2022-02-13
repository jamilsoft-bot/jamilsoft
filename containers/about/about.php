<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Madarasatu Haniyfatid Denil Islam</title>
    <link rel="stylesheet" href="assets/css/jamilpress.css">
    <link rel="stylesheet" href="assets/lib/w3/w3.css">
    <link rel="shortcut icon" href="assets/images/kamallogo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/lib/bs5/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/font/css/all.css">
    <style>
        .noticebox{
            background-image: url("assets/images/hanifa.png");
            background-repeat: no-repeat;
            background-size: 180pt;
            background-position: right center;
        }
        .noticeboxtext{
            color:white;
            background-color: black;
            opacity: 0.2;
            padding: 12pt;
            filter: alpha(opacity=60);
        }
    </style>
</head>
<body>
    <div class="w3-container w3-deep-orange">
        <div class="w3-bar w3-small">
            <!-- <img src="assets/images/hanifa.png" class="w3-bar-item" style="width: 43pt;"> -->
            <div class="w3-right">
                <span class="w3-bar-item "><i class="fa fa-envelope"></i> : haniyfa@gmail.com</span>
                <span class="w3-bar-item "><i class="fa fa-phone"></i> : +2349011050365, +2349011050365 </span>
                <span class="w3-bar-item "><i class="fab fa-whatsapp"></i> : +2349011050365 </span>
            </div>
        </div>
    </div>
    <div class="w3-container w3-margin-top w3-margin-bottom">
        <img src="assets/images/HANIFA LOGO.png" style="width: 120pt;">
        <div class="w3-right">
            <w3 class="w3-bar">
                <?php
                    if(isset($_SESSION['uid'])){
                        echo "<a href='kamalr' class='w3-button w3-bar-item w3-deep-orange'> Dashboard</a>";
                    }else{
                        echo "<a href='login' class='w3-button w3-bar-item w3-deep-orange'> Login</a>";
                    }
                ?>
            </w3>
        </div>
    </div>
    <div class="row w3-margin-top">
        <div class="col-md-4 w3-margin-left">
            <div class="w3-container w3-deep-orange w3-padding">
                <strong class="w3-margin">Result Checker</strong>
            </div>
            <form action="kamalr/result" method="post" target="_blank">
                <div class="w3-container w3-margin-top">
                    <label>Registration Number</label>
                    <input type="text" name="sid" class="w3-input w3-border">
                    <label>Exam Year</label>
                    <select class="w3-input w3-border">
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                    </select>
                    <label>Exam Term</label>
                    <select class="w3-input w3-border">
                        <option>First Term</option>
                        <option>Second Term</option>
                        <option>Third Term</option>
                    </select>
                    <button type="submit" name="checkbtn" class="w3-button w3-margin-top w3-margin-bottom w3-block w3-deep-orange">Check</button>
                </div>
            </form>
        </div>
        <div class="col-md ">
            <div class="w3-container w3-deep-orange w3-padding">
                <strong class="w3-margin">Notice Board</strong>
            </div>
            <div class="w3-display-container noticebox  w3-margin-left w3-margin-right" style="height: 250pt;">
                    <div class="w3-display-left w3-margin noticeboxtextn " style="width: 300pt;">
                        <h2>Admission 2022 is now Open</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi consequatur autem tenetur aspernatur error, possimus iusto alias. Perferendis, numquam quod soluta labore quos ad reprehenderit possimus quidem. Libero, nulla id.
                        </p>
                        <a href="#" class="w3-button w3-deep-orange">Read More</a>
                    </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <img src="assets/images/quran.png" alt="Quran" style="width: 100%;">
                </div>
                <div class="col-md list-group">
                    <li class="list-group-item w3-deep-orange">School sections </li>
                            <li class="list-group-item">Nursery </li>
                            <li class="list-group-item">Primary </li>
                            <li class="list-group-item">Hadda </li>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container">
        <hr>
        <div class="w3-center">
            <p class="w3-opacity">&copy; 2022 Madarasatu Haniyfa tiddeenil Islam</p>
        </div>
    </div>
</body>
</html>