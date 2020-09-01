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
            <h2>查看明細</h2>
            <hr>
                <div class="row">
                    <div class="col-12">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">交易類別</th>
                                <th scope="col">交易金額</th>
                                <th scope="col">交易時間</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($statementData as $d) { ?>
                                
                                <td scope="row"><?= $d['transaction_type'] ?></td>
                                <td><?= $d['transaction_value'] ?></td>
                                <td><?= $d['transaction_time'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
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