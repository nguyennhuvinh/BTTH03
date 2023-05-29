<?php
// Routing: dieu huong
// Kiem tra URL cua nguoi dung > Tim ra Controller
// URL: tlu.edu.vn/ = tlu.edu.vn/index.php?route=home > HomeController
// URL: tlu.edu.vn/index.php?route=articles > ArticleController
// URL: tlu.edu.vn/article/1/edit

$controller = isset($_GET['controller'])?$_GET['controller']:'article';
$action = isset($_GET['action'])?$_GET['action']:'index';
if($controller=='article'){
    require_once('../app/controllers/ArticleController.php');
    $articleController = new ArticleController();
    $articleController->$action();
}else{
    echo "Nothing here";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center my-3">
        <h3 style="color:blue">Choose Feature To Do With Article:</h3>
    </div>
    <div class="container">
    <form method="GET">
    <table>
        <tr>
            <td><label for="">ADD new Article:</label></td>
            <td ><button type="submit" name="action" value="add">Add new</button></td>
        </tr>
        <tr>
            <td><label for="">Show List of Articles:</label></td>
            <td><button type="submit" name="action" value="index" >Show list</button></td>
        </tr>
    </table>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>