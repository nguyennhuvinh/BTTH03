<div class="edit-user">
        <h3 style="color: blue">Edit Article</h3>
            <form action="" method="POST">
                <table> 
                    <tr>
                        <td><b>Title:</b></td>
                        <td><input type="text" name="title" value="<?php echo $chosenArticle->getTitle();?>" placeholder="Edit Title"></td>
                    </tr>
                    <tr>
                        <td><b>Author:</b></td>
                        <td><input type="text" name="author" value="<?php echo $chosenArticle->getAuthor();?>" placeholder="Edit Author"></td>
                    </tr>
                    <tr>
                        <td><b>Publish:</b></td>
                        <td><input type="text" name="publish" value="<?php echo $chosenArticle->getPublish();?>" placeholder="Sửa Quê quán"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="edit" value="Edit"></td>
                    </tr>
                </table>
                
            </form>
          
    </div>