<?php
//資料新增
include_once 'sql.php';
if(isset($_REQUEST['account'])){
    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];
    $realname = $_REQUEST['realname'];

    $passwd = password_hash($passwd,PASSWORD_DEFAULT);

    $icon = null;
    if($_FILES['icon']['error']  == 0){
       $icon=addslashes(file_get_contents($_FILES['icon']['tmp_name']));
    }
    //非? 非數值加上'
    $sql = "insert into member (account,passwd,realname,icon) values" .
           "('{$account}','{$passwd}','{$realname}','{$icon}')";
    if ($mysqli->query($sql)){
        header('Location: login.php');
    }else {
        echo 'Error'. $sql;
    }
    
}
?>
<script>
    //xml object
    let xhttp = new XMLHttpRequest();
    let isDataOk = false;
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            if (xhttp.responseText == 0) {
                document.getElementById('mesg').innerHTML = 'OK';
                isDataOk = true;
            } else {
                document.getElementById('mesg').innerHTML = 'XX';
            }
        }
    }
    function isNewAccount() {
        let account = document.getElementById('account').value;
        xhttp.open('GET', 'isNewAccount.php?account=' + account, true);
        xhttp.send();
    }
    function isSubmit(){
        return isDataOk;
    }
</script>

<!-- onsubmit 送出去前檢查 -->
<form action="regist.php" method="post" onsubmit="return isSubmit()" enctype="multipart/form-data">
    Account : <input type="text" id="account" name="account" onchange="isNewAccount()">
    <span id="mesg"></span> <br>
    Password : <input type="password" name="passwd"> <br>
    Realname : <input type="text" name="realname"> <br>
    Icon : <input type="file" name="icon"> <br>
    <input type="submit" value="register">

</form>