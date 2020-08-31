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
            <h2>網銀首頁</h2>
            <hr>
                <h2>歡迎回來, <?=$this->customerName?></h2>
                <button id="btn" onclick="changeVal(this);" >Hide</button>
                <a>您的餘額：</a><a id="balance"><?=$this->account_balance?></a>
            <hr>
                <div class="row">

                    <div class="col-4">
                        <a class="btn btn-info btn-lg btn-block btn-huge" href="cashin">存款</a>
                    </div>

                    <div class="col-4">
                        <a class="btn btn-info btn-lg btn-block btn-huge" href="cashout">提款</a>
                    </div>

                    <div class="col-4">
                        <a class="btn btn-info btn-lg btn-block btn-huge" href="statement">查看明細</a>
                    </div>
                   
                </div>
            <hr>
            <a href="logout" class="btn btn-danger">登出</a>
        </div>
    </div>
    </div>

<?php
    require_once('script.page.php');
?>

<script type="text/javascript">
$(document).ready(function(){
  $("#btn").toggle(function(){
    $("#balance").show();},
    function(){
    $("#balance").hide();}
  );
});
</script>
</body>
</html>