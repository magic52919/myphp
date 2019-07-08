<script>
    function change_img(){ 
        document.getElementById("imgcode").src="picture.php"; 
    } 
</script>
<h1>登入介面</h1>
<form action="checkAccount.php" method="POST">
Account : <input type="text" name="account"><br>
Password : <input type="password" name="passwd"><br>
<form name="form1" method="post" action="./checkcode.php">
    <p>請輸入驗證碼：</p><p><img id="imgcode" src="picture.php" />
       <input type="button" onclick="change_img()" value="更換"> <br />
    </p>
    
    <input type="text" name="checkword" size="10" maxlength="10" /><br />
<input type="submit" value="login">
<button type="button" onclick="location.href='regist.php'">Regist</button>

</form>