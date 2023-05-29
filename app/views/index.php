<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3 class="text-center text-upercase text-success my-3">List Article</h3>
        <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
        <?php foreach($articles as $article){?>
        <tr>
            <th scope="row"><?=$article->getId()?></th>
            <td><?=$article->getTitle()?></td>
            <td><?=$article->getAuthor()?></td>
            <td>
                <a href="index.php?action=edit&id=<?=$article->getId()?>">Sửa</a>
                <a href="index.php?action=delete&id=<?=$article->getId()?>">Xóa</a>
            </td>
        
        </tr>
        </tbody>
        <?php }?>
</table>

    </div>
 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>