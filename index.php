<?php

    include_once "classes/Shout.php";
    $shout = new Shout();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Shoutbox</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper clr">
        <header class="headsection clr">
            <h2>Basic Shoutbox with PHP OOP & MySQLi</h2>
        </header>
        <section class="content clr">
            <div class="box">
                <ul>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                    <li><span>5:30 pm</span> - <b>Partha</b> Hello, How are you?</li>
                </ul>
            </div>

            <div class="shoutform clr">
                <form action="" method="POST">
                    <table>
                        <tr>
                            <td style="color:#fff;">Name</td>
                            <td>:</td>
                            <td><input type="text" name="name" required placeholder="Please enter your name"></td>
                        </tr>
                        <tr>
                            <td style="color:#fff;">Body</td>
                            <td>:</td>
                            <td><input type="text" name="body" required placeholder="Please enter your text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="submit" value="Shout Box"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
        <footer class="footsection clr">
            <h2>&copy; Copyright with Parthadeb</h2>
        </footer>
    </div>
</body>
</html>