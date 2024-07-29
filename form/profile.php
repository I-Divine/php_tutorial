<?php 
require_once("./config/connect_db.php");
if (isset($_POST["delete"])){
    $id = mysqli_escape_string($conn, $_POST["id_to_delete"]);
    $query = "DELETE FROM users WHERE ID=$id";

    if(mysqli_query($conn, $query)){
        // header("Location : index.php");
        echo "<script>window.location.replace('index.php')</script>";
    }else{
        echo "an error occurred";
    }

}
if(isset($_GET['id'])){
    $id = mysqli_escape_string($conn,$_GET["id"]);

$query = "SELECT * FROM users WHERE ID = $id";

$result = mysqli_query($conn, $query);

$user = mysqli_fetch_assoc($result);

// print_r($user);
}
?>
<html>

<?php require_once("../templates/head.php");?>
    <section>
    <?php if($user): ?>

    <h2 class="text-center text-lime-400 text-3xl">User Profile</h2>
    <p>Username : <?= $user['Username'] ?></p>
    <p>Email : <?= $user['Email'] ?></p>
    <p>Created at : <?= $user['Created At'] ?></p>

    <div class="flex justify-center">
        <form action="profile.php" method="post">
            <input type="hidden" name="id_to_delete" value=<?php echo $user['ID']?>>
            <input type="submit" class="p-2 text-white bg-lime-400 border-none" name="delete" value="Delete">
        </form>
    </div>
    <?php else: ?>
    <p class="text-5xl text-neutral-500 font-thin text-center">User does not exist</p> 

    <?php endif; ?>
    </section>

</body>
<?php require_once("../templates/footer.php");?>
</html>
