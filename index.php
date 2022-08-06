<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>HTML Form</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <form action="MyFirstHandler.php" target="_blank" method="post">
        <div id="personal_info">
            <h2>Personal Info</h2>
            <input type="text" id="fname" name="fname" placeholder="Enter first name here">
            <input type="text" id="lname" name="lname" placeholder="Enter last name here"><br>
            <input type="text" id="address" name="address" placeholder="Enter address here">
            <input type="text" id="city" name="city" placeholder="Enter city here">
            <input type="text" id="state" name="state" placeholder="Enter state here">
            <input type="text" id="zip" name="zip" placeholder="Enter ZIP here"><br>
        </div>

        <div id="table_wrapper">
            <h2>Color Table</h2>
            <table class="table table-hover">
                <thead class="table-light">
                    <td><strong>Color</strong></td>
                    <td><strong>Name</strong></td>
                </thead>
                <tr>
                    <td style="background-color:red;"></td>
                    <td>Red</td>
                </tr>
                <tr>
                    <td style="background-color:orange;"></td>
                    <td>Orange</td>
                </tr>
                <tr>
                    <td style="background-color:yellow;"></td>
                    <td>Yellow</td>
                </tr>
                <tr>
                    <td style="background-color:green;"></td>
                    <td>Green</td>
                </tr>
                <tr>
                    <td style="background-color:rgb(32, 0, 55);"></td>
                    <td>Indigo</td>
                </tr>
                <tr>
                    <td style="background-color:blue;"></td>
                    <td>Blue</td>
                </tr>
                <tr>
                    <td style="background-color:rgb(94, 0, 94);"></td>
                    <td>Violet</td>
                </tr>
            </table>
            <label for="colors">Choose a favorite color:</label>
            <select name="colors" id="colors">
                <option value="Red">Red</option>
                <option value="Orange">Orange</option>
                <option value="Yellow">Yellow</option>
                <option value="Green">Green</option>
                <option value="Indigo">Indigo</option>
                <option value="Blue">Blue</option>
                <option value="Violet">Violet</option>
            </select>
        </div>

        <div id="favorites">
            <h2>Favorites</h2>
            <p>Choose a favorite day:</p>
            <input type="radio" id="sunday" name="days" value="Sunday">
            <label for="sunday">Sunday</label><br>
            <input type="radio" id="monday" name="days" value="Monday">
            <label for="monday">Monday</label><br>
            <input type="radio" id="tuesday" name="days" value="Tuesday">
            <label for="tuesday">Tuesday</label><br>
            <input type="radio" id="wednesday" name="days" value="Wednesday">
            <label for="wednesday">Wednesday</label><br>
            <input type="radio" id="thursday" name="days" value="Thursday">
            <label for="thursday">Thursday</label><br>
            <input type="radio" id="friday" name="days" value="Friday">
            <label for="friday">Friday</label><br>
            <input type="radio" id="saturday" name="days" value="Saturday">
            <label for="saturday">Saturday</label><br>
            <br>
            <input type="text" id="num" name="num" placeholder="Enter favorite number">
        </div>

        <div id="image">
            <h2>Image</h2>
            <img src="https://picsum.photos/200/300?grayscale" alt="Free image from lorem picsum" class="img-thumbnail">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</body>

</html>