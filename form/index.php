<?php 
require_once "./config/connect_db.php";

//  querying the database
 $query = 'SELECT username, email, ID FROM users ORDER BY id';

//  result
 $result = mysqli_query($conn, $query);

// fetching result
 $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

//  freeing result from memory and closing connection
 mysqli_free_result($result);
 mysqli_close($conn);

?>

    <?php require_once("../templates/head.php");?>
    <section class="p-4">
        <h2 class="text-2xl text-lime-500 font-bold">Users</h2>
        <div>
        <?php foreach ($users as $user): ?>
        <div class ="my-4">
            <h3 class="text-xl text-lime-400 font-semibold"><?= htmlspecialchars($user["username"]) ?></h3>
            <h4 class="text-base text-neutral-500 font-thin"><?= htmlspecialchars($user["email"]) ?></h4>
            
        </div>
        <?php endforeach ?>
        </div>
    </section>
    </body>
    <?php require_once("../templates/footer.php");?>
</html>