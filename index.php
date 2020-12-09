<html>
<head>
    <title>Chatbase</title>
    <style>
        body {
            background-color: rgb(226, 225, 225);
        }
        .header_text {
            margin:0px;
            text-align: center;
            margin-top: 40px;
        }
        .img {
            width: 40px;
        }
        form {
            background-color: rgb(241, 241, 241);
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            width: 400px;
            padding:10px;
            text-align: center;
            border: 2px solid #c7c7c7;
            border-radius: 20px;
        }
        .form_field {
            margin-top: 20px; 
            width: 80%
        }
        #username {
            margin-top: 5px;
        }
        #subbmit {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div>
        <table style="margin-left: auto;margin-right: auto;margin-top:80px;">
            <tr>
                <td><img class="img" src="PinClipart.com_computer-images-clip-art_1651962.png"></td>
                <td><h1 style="margin: 0px;padding-bottom: 7px;" class="header_text">Chatbase</h1></td>
            </tr>
        </table>
    </div>
    <form action="login.php" method="POST">
        <h2>Sign in</h2>
        <input id="username" class="form_field" type="text" name="username" placeholder="Username">
        <br>
        <input id="password" class="form_field" type="password" name="password" placeholder="Password">
        <br>
        <input id="subbmit" type="submit" value="Login">
    </form>
</body>
</html>