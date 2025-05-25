<!DOCTYPE html>
<html>
<h1>Basic calci app</h1>
<head>
    <title>Simple Interest Calculator</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="principal">Principal:</label></td>
                <td><input type="text" id="principal" name="principal"></td>
            </tr>
            <tr>
                <td><label for="rate">Rate (%):</label></td>
                <td><input type="text" id="rate" name="rate"></td>
            </tr>
            <tr>
                <td><label for="time">Time (years):</label></td>
                <td><input type="text" id="time" name="time"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['principal']) 
        && isset($_POST['rate']) 
        && isset($_POST['time'])) {
            $principal = $_POST['principal'];
            $rate = $_POST['rate'];
            $time = $_POST['time'];
            $interest = ($principal * $rate * $time) / 100;
            echo "<p>Simple Interest: $interest</p>";
    }
    ?>
</body>

</html>