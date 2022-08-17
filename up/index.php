<html>
<head>
    <title>Chatbase-Signup</title>
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
        .password {
            margin-top: 20px; 
            width: 80%
        }
        .confirmPassword {
            margin-top: 20px; 
            width: 80%
        }
        #name {
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
                <td><img class="img" src="../PinClipart.com_computer-images-clip-art_1651962.png"></td>
                <td><h1 style="margin: 0px;padding-bottom: 7px;" class="header_text">Chatbase</h1></td>
            </tr>
        </table>
    </div>
    <form action="connect.php" method="POST">
        <h2>Sign up</h2>
        <input id="name" class="form_field" type="text" name="full_name" placeholder="Full name" required>
        <br>
        <input id="username" class="form_field" type="text" name="username" placeholder="Username" required>
        <br>
        <input id="password" class="password" type="password" name="password" placeholder="Password">
        <br>
        <input id="re_password" class="confirmPassword" type="password" name="re_password" placeholder="Confirm Password">
        <input id="subbmit" class="button" type="submit" value="Register">
    </form>
    <script>
        document.querySelector('.button').onclick = function(){
            var password = document.querySelector('.password').value,
                confirmPassword = document.querySelector('.confirmPassword').value;
    
            if (password == ""){
                alert("Password field is empty.");
                return false;
            }
            else if (password != confirmPassword){
                alert("Password doesnt match. Try again.");
                return false;
            }
    
        }
    </script>
</body>
</html>