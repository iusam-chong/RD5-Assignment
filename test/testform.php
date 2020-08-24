<?php
// obj / array ?
$labels = Array("身分證字號", "姓名", "用戶代號", "用戶代號確認", "網銀密碼", "網銀密碼確認", "手機號碼", "Email") ;

$viewModal = [] ;

foreach ($labels as $l){
    $elements = (object) ["label" => $l, "value" => "test" ] ;
    $viewModal[] = $elements ;
}

// label : label
// input : name, id, type, value,
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Test Method</title>

    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>

</head>
<body>
    <div class="wrapper">

    <h2>註冊</h2>

    <form method="POST">
        
        <?php foreach($viewModal as $v) {?>

            <div class="form-group <?php // ?>">
            <label><?= $v->label ?></label>
                <input type="text" name="username" class="form-control" value="<?= $v->value ?>">
            <span class="help-block"><?php // ?></span>
            </div>

        <?php } ?>
       
        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="註冊">
                <input type="reset" class="btn btn-default" value="重設">
        </div>

    </form>
    <div>
</body>
</html>