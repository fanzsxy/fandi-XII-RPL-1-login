<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type = "text/css" href="style.css">
</head>
<body>
    <br>
    <br>
    <center><h2>form login</h2></center>
    <br>
    <div class="login">
        <br>
        <form action="login.php" method ="post" onSubmit = "retrun validasi()">
            <div>
                <label">username:</label>
                <input type="text" name = "username" id = "username">
            </div>
            <div>
                <label">password:</label>
                <input type="password:" name = "password" id = "password">
            </div>
            <div>
                <input type="submit" value = "login" class = "tombol">
            </div>
        </form>
    </div>




</body>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if(username!=""&&password!=""){
            return true;
        }else{
            alert('Username dan password harus diisi!');
            return false;}}
</script>
</html>