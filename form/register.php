<?php  

             
    $isEmailValid = $isUsernameValid = $isPasswordValid = true;
    $isSubmitted = false;
    $password = $username = $email = "";
if(isset($_POST["submit"])){
   
    $isSubmitted = true;
 

    if($_POST["email"]){
        $email = htmlspecialchars($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $isEmailValid = false;

        }

    }else{
        $isEmailValid = false;
    }
        
    if($_POST["password"]){
        $password = hash("sha256",$_POST["password"]);
        if(!preg_match("/^(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$_POST["password"])){
            $isPasswordValid = false;
        }
    }else{
        $isPasswordValid = false;

    }

    if($_POST["username"]){
        $username = htmlspecialchars($_POST["username"]);
        if(!preg_match("/^[a-zA-Z\s]+$/",$username)){
            $isUsernameValid = false;
            
        }
    }else{
        $isUsernameValid = false;

    }

  
}
   if($isEmailValid & $isUsernameValid & $isPasswordValid & $isSubmitted){
        require_once "./config/connect_db.php";
        $email = mysqli_real_escape_string($conn, $email);
        $username = mysqli_real_escape_string($conn, $username);

        $query = "INSERT INTO users(username, email, passwords) VALUES('$username','$email','$password')";
        
        if(mysqli_query($conn,$query)){
           
        }else{
            echo "error";
        }
        //  echo "<script>window.location.replace('index.php')</script>";
        header("location : index.php");
    }

  
?>

<html>
<?php require_once "../templates/head.php" ?>
    <section class="flex justify-center">

        <form action="./register.php" method="POST" class="w-96">
          
            <h2 class="text-center text-lime-500 text-xl font-bold">Sign Up</h2>
            <label for="email" class="text-neutral-800">Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>" class="w-full p-2 mb-4 border-b-2 border-bottom border-lime-400 rounded">
            <?php if(!$isEmailValid): ?>
                <p class="text-red-500 font-bold mb-2">use a valid email address</p>
            <?php endif ?>

            <label for="username" class="text-neutral-800">Username</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($username )?>" class="w-full p-2 mb-4 border-b-2 border-bottom border-lime-400 rounded">
            <?php if(!$isUsernameValid): ?>
                <p class="text-red-500 font-bold mb-2">use a valid username</p>
            <?php endif ?>

            <label for="password" class="text-neutral-800">Password</label>
            <input type="password" name="password" class="w-full p-2 mb-4 border-b-2 border-bottom border-lime-400 rounded">
            <?php if(!$isPasswordValid): ?>
                <p class="text-red-500 font-bold mb-2">use a strong password (8 characters or more, uppercase and lowercase, with number and special characters)</p>
            <?php endif ?>

            <input type="submit" name="submit" value="Submit" class="text-white rounded bg-lime-500 p-4">
        </form>
    </section>
</body>
<?php require_once "../templates/footer.php" ?>
</html>