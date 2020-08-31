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
                <div class="row" style="padding-bottom:15px;">
                    <div class="col-12">
                        <h2>歡迎回來, <?=$this->customerName?></h2>
                    
                        <div class="card" id="card2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <i id="open" class="fa fa-eye float-left " aria-hidden="true" style="font-size:36px ;color:grey ;"></i>
                                    </div>
                                    <div class="col-4">
                                        <a style="padding-top:7px" class="float-right">您的餘額：</a>
                                    </div>
                                    <div  class="col-4" > 
                                        <a id="balance" style="padding-top:7px" class="float-right"><?=$this->account_balance?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="card1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <i id="close" class="fa fa-eye-slash float-left" aria-hidden="true" style="font-size:36px ;color:grey"></i>
                                    </div>
                                    <div class="col-4">
                                        <a style="padding-top:7px" class="float-right">您的餘額：</a>
                                    </div>
                                    <div  class="col-4" > 
                                        <a id="star" style="padding-top:7px" class="float-right">? ? ? ? ?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
      
                <div class="row">

                    <div class="col-4">
                        <a class="btn btn-info btn-lg btn-block btn-huge" style="display: flex; justify-content: center;" href="cashin">存款</a>
                    </div>

                    <div class="col-4">
                        <a class="btn btn-info btn-lg btn-block btn-huge" style="display: flex; justify-content: center;" href="cashout">提款</a>
                    </div>

                    <div class="col-4">
                        <a class="btn btn-info btn-lg btn-block btn-huge" style="display: flex; justify-content: center;" href="statement">查看明細</a>
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
    $("#card2").hide();

    $("#card1").click(function(){
        $(this).hide();
        $("#card2").show();
    });

    $("#card2").click(function(){
        $(this).hide();
        $("#card1").show();
    });
});
</script>
</body>
</html>