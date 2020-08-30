<!doctype html>
<html>
    
<?php
require_once('header.page.php');
?>
  
<body>
    <div class="container text-center">
    <div class="row h-75">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 my-auto">
            <h2>網銀註冊</h2>
            <hr>
            
            <form method="post">
                <div class="form-group">
                    <label>使用者賬號</label>
                    <input type="text" class="form-control" id="textUserName" name="userName">
                    <!--
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    -->
                </div>

                <div class="form-group">
                    <label>網銀密碼</label>
                    <input type="password" class="form-control" id="textPassword">
                </div>

                <div class="form-group">
                    <label>網銀密碼確認</label>
                    <input type="password" class="form-control" id="textConfirmPassword">
                </div>
                
                <div class="form-group">
                    <label>姓名</label>
                    <input type="text" class="form-control" id="textName">
                </div>

                <div class="form-group">
                    <label>身份證</label>
                    <input type="text" class="form-control" id="textIdCard">
                </div>

                <div class="form-group">
                    <label>手機號碼</label>
                    <input type="text" class="form-control" id="textPhoneNum">
                </div>

                <div class="form-group">
                    <label>EMAIL</label>
                    <input type="text" class="form-control" id="textEmail">
                </div>

                <button type="submit" class="btn btn-primary" value="1">送出</button>
            </form>
            <hr>
            <a href="login.php">前往登入</a>    
        </div>
    </div>
    </div>

<?php
    require_once('script.page.php');
?>
</body>
</html>