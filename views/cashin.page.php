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
            <h2>線上存款</h2>
            <hr>
                <form method="post" action="">
                    <div class="form-group">
                        <label>輸入金額</label>
                        <input maxlength="6" type="text" class="form-control" id="textInputValue" name="money" required="required" pattern="[0-9]{1,}">
                    </div>
                    <button type="submit" class="btn btn-primary" value="1">確認</button>
                </form>
            <hr>
            <a href="main" class="btn btn-danger">上一頁</a>
        </div>
    </div>
    </div>

<?php
    require_once('script.page.php');
?>
</body>
</html>