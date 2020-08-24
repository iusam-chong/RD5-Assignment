<!----------------------------- SIGN UP -------------> 
<?php
// Include config file
require_once('configdb.php') ;
// $db = setupDb() ;

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT userId FROM users WHERE userName = :username";

        if($stmt = $db->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (userName, userPassword) VALUES (:username, :password)";
        
        if($stmt = $db->prepare($sql)){
            
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            var_dump($stmt) ;
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($db);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
      
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- user name / 身份證字號 -->
            <div class="form-group <?php // ?>">
                <label>身分證字號</label>
                <input type="text" name="username" class="form-control" value="<?php // ?>">
                <span class="help-block"><?php // ?></span>
            </div>

            <!-- full name -->
            <div class="form-group <?php // ?>">
                <label>姓名</label>
                <input type="text" name="username" class="form-control" value="<?php // ?>">
                <span class="help-block"><?php // ?></span>
            </div>

            <!-- 用戶代號 -->
            <div class="form-group <?php // ?>">
                <label>用戶代號</label>
                <input type="password" name="password" class="form-control" value="<?php // ?>">
                <span class="help-block"><?php // ?></span>
            </div>

            <!-- 用戶代號確認 -->
            <div class="form-group <?php // ?>">
                <label>用戶代號確認</label>
                <input type="password" name="password" class="form-control" value="<?php // ?>">
                <span class="help-block"><?php // ?></span>
            </div>

            <!-- password -->
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>網銀密碼</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <!-- confirm-password -->
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>網銀密碼確認</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <!-- 手機號碼 -->
            <div class="form-group <?php // ?>">
                <label>手機號碼</label>
                <input type="text" name="email" class="form-control" value="<?php // ?>">
                <span class="help-block"><?php // ?></span>
            </div>

            <!-- email -->
            <div class="form-group <?php // ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php // ?>">
                <span class="help-block"><?php // ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>
