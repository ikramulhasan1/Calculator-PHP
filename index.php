<?php
$num = "";
$oparetor = "";
$result = "";

$cookie_name1 = "num";
$cookie_value1 = "";

$cookie_name2 = "op";
$cookie_value2 = "";


if (isset($_POST["display"])) {
    $num = $_POST["display"];
}


if (isset($_POST["submit"])) {
    $num = $_POST["display"] . $_POST["submit"];
} else {
    $num = "";
}



echo 'working';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">

    <!-- Calculator extra Style file -->
    <link rel="stylesheet" href="./style/calculatorStyle.css">
</head>

<body>


    <main>
        <form class="d-flex justify-content-center my-5" action="" method="post">
            <div class="calculator card">

                <!-- <input type="text" class="calculator-screen z-depth-1" value="" disabled /> -->
                <input type="text" name="display" class="calculator-screen z-depth-1"
                    value="<?php echo $num; ?>" />

                <div class="calculator-keys" name="button">

                    <input type="submit" name="op" class="operator btn btn-info" value="+"></input>
                    <input type="submit" name="op" class="operator btn btn-info" value="-"></input>
                    <input type="submit" name="op" class="operator btn btn-info" value="*"></input>
                    <input type="submit" name="op" class="operator btn btn-info" value="/"></input>

                    <input type="submit" name="submit" value="7"
                        class="btn btn-light waves-effect"></input>
                    <input type="submit" name="submit" value="8"
                        class="btn btn-light waves-effect"></input>
                    <input type="submit" name="submit" value="9"
                        class="btn btn-light waves-effect"></input>


                    <input type="submit" name="submit" value="4"
                        class="btn btn-light waves-effect"></input>
                    <input type="submit" name="submit" value="5"
                        class="btn btn-light waves-effect"></input>
                    <input type="submit" name="submit" value="6"
                        class="btn btn-light waves-effect"></input>


                    <input type="submit" name="submit" value="1"
                        class="btn btn-light waves-effect"></input>
                    <input type="submit" name="submit" value="2"
                        class="btn btn-light waves-effect"></input>
                    <input type="submit" name="submit" value="3"
                        class="btn btn-light waves-effect"></input>


                    <input type="submit" name="submit" value="0"
                        class="btn btn-light waves-effect"></input>
                    <input type="submit" name="submit" class="decimal function btn btn-secondary"
                        value="."></input>
                    <input type="submit" name="submit"
                        class="all-clear function btn btn-danger btn-sm" value="DEL"></input>
                    <input type="submit" name="submit"
                        class="all-clear function btn btn-danger btn-sm" value="AC"></input>

                    <input type="submit" name="equal" class="equal-sign operator btn btn-warning"
                        value="="></input>

                </div>
            </div>
        </form>
    </main>


    <script src="./js/calculator.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>