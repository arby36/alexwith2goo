<!DOCTYPE html>
<style>
html {
    background-color: orange;
    color: white;
    margin-left: 100px;
    margin-right: 100px;
}
#header {
    font-family: "Lucida Console";
    color: orange;
    position: fixed;
    background-color: white;
    width: 1150px;
}
.formtext {
    font-family: Arial;
}
.forminput {
    border-radius: 10px;
    background-color: lightgrey;
}
</style>
<html>
<head>
    <meta charset="utf-8" />
    <title>Alex with 2Goo</title>
</head>
<body>
    
    <div id="header"><h1 style="margin-left: 100px">Alex with 2Goo | C# | HTML | CSS | JS</h1></div>

    <hr />

    <h3 style="font-family: 'Lucida Console';">Contact</h3>

    <hr />

    <form action="2goo2.1.php" method="post">
        <p class="formtext">First Name: </p><input type="text" name="firstname" class="forminput"/>
        <p class="formtext">Last Name: </p><input type="text" name="lastname" class="forminput"/>
        <p class="formtext">Email: </p><input type="text" name="email" class="forminput"/>
        <p class="formtext">Message: </p><textarea type="text" name="message" rows="6" cols="30" class="forminput">Please be descriptive...</textarea>
        <input type="submit" class="forminput"/>
    </form>
    <?php
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = test_input($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $message = test_input($_POST["message"]);
    }
    $pinput = $firstname . "::" . $lastname . "::" . $email . "::" . $message . "::";
    $inputfile = "inputfile.txt";
    $file = fopen($inputfile, 'a');
    fwrite($file, $pinput);
    fclose($file);
    echo "The form sent this data to the server:";
    echo $pinput;
    ?>
</body>
</html>
