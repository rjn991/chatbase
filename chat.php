<?php
session_start();
include 'dbh.php';
?>



<html>
<head>
    <title>Chatbase</title>
    <style>
        .img {
            width: 30px;
        }
        body {
            margin: 0px;
            background-color: rgb(238, 238, 238);
        }
        header {
            background-color: white;
            padding-left: 30px;
            padding-top:5px;
            padding-bottom: 5px;
        }
        textarea {
            width:900px;
            height:50px;
            margin-left:20px;
        }
        .output {
            
            background-color: white;
            box-shadow: 0px 1px 1px #000;
            height: 390px;
            margin: 20px;
            padding :10px;
            overflow: scroll;
        }
    </style>
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function(){
            setInterval(function() {
                $("#div_refresh").load("load.php");
                var objDiv = document.getElementById("div_refresh");
                objDiv.scrollTop = objDiv.scrollHeight;
            }, 1000);
        });
    </script>
</head>
<body>
    <header> 
        <table style="width:100%;">
            <tr>
                <td style="width:2%"><img class="img"  src="PinClipart.com_computer-images-clip-art_1651962.png"></td>
                <td style="width:90%"><h2 style="margin: 0px;padding-bottom: 5px;">Chatbase</h2></td>
                <td style="padding-bottom:1px;font-size: 18px;"><a href="logout.php">Logout</a></td>
            </tr>
        </table>
    </header>
    <br>
    <?php
        echo "Logged in as : ".$_SESSION['username'];
    ?>
    
    <div id="div_refresh" class="output">  
        
    </div>
    <!-- <iframe name="votar" style="display:none;"></iframe> -->
    <!-- <form action="send.php" method="POST"> -->
    <form action="sendbackend.php" id="frm" method="POST" onsubmit="return formSubmit();">
        <table>
            <tr>
                <td><textarea name="message" placeholder="Type to send message"></textarea></td>
                <td><input type="submit" value="Send"></td>
            </tr>
        </table>
    </form>
    <h3 id="success"></h3>
    <script src="jquery.js"></script>
    <script>
        function formSubmit(){
            $.ajax({
                type:'POST',
                url:'sendbackend.php',
                data:$('#frm').serialize(),
                success:function(response){
                    $('#success').html(response);
                }
            });
        var form=document.getElementById('frm').reset();
        return false;
        
        }
    </script>
</body>
</html>
