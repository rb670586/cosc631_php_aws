<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links to leaflet map js and css -->
    <link rel="stylesheet" href="./leaflet/leaflet.css" />
    <script src="./leaflet/leaflet.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="./styles.css">
    <title>MyFirstHandler</title>
</head>

<body>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Initial PHP for handling address information and plotting -->
    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $address_string = "$address $city, $state $zip";
    echo "<h1> Welcome $fname</h1>";
    echo "<h4> Your address is $address_string</h4>";
    echo "<div class='address-line'>
            <input id='plot-address' type='text' value='$address_string'><button onclick='geocodeAddress()'>Plot Address</button>
          </div>";
    ?>
    <div id="map"></div>
    <script src="./map.js"></script>



    <!-- Dealing with favorite day -->
    <?php
    $days = $_POST['days'];
    $weekday_or_weekend = "";
    if (in_array($days, array("Saturday", "Sunday"))) {
        $weekday_or_weekend = "Weekends";
    } else {
        $weekday_or_weekend = "Weekdays";
    }
    echo "Your favorite day is $days. What a good choice. You must be a fan of $weekday_or_weekend";
    ?>
    <br>
    <br>

    <!-- Dealing with favorite color -->
    <?php
    $colors = $_POST['colors'];
    echo "Your favorite color is $colors. See below for what that looks like";
    echo "<div id='color-selection'>
            $colors
          </div>"
    ?>
    <script>
        const elem = document.getElementById('color-selection');
        elem.style.color = elem.innerText
    </script>
    <br>

    <!-- Dealing with favorite number -->
    <?php
    $num = $_POST['num'];
    echo "Your favorite number is $num. ";
    if ($num % 2 == 0) {
        echo "You must like even numbers";
    } else {
        echo "You must like odd numbers";
    }
    ?>
</body>

</html>