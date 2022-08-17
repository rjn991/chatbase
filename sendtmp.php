<html>
<head>
    <title>Temp</title>

</head>
<body>
    <div style="background-color:blue">
    <form action="sendbackend.php" id="frm" method="POST" onsubmit="return formSubmit();">
        <table>
            <tr>
                <td><textarea name="message" placeholder="Type to send message"></textarea></td>
                <td><input type="submit" value="Send"></td>
            </tr>
        </table>
        <h3 id="success"></h3>
    </form>
    </div>
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