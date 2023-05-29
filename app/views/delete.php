<div class="edit-user">
        <h3 style="color: blue">Xóa thành viên</h3>
            <form action="" method="POST">
                <table> 
                <tr>
                        <td><b>Title:</b></td>
                        <td><input type="text" name="title" value="<?php echo $chosenArticle->getTitle();?>" placeholder="Edit Title" readonly></td>
                    </tr>
                    <tr>
                        <td><b>Author:</b></td>
                        <td><input type="text" name="author" value="<?php echo $chosenArticle->getAuthor();?>" placeholder="Edit Author" readonly></td>
                    </tr>
                    <tr>
                        <td><b>Publish:</b></td>
                        <td><input type="text" name="publish" value="<?php echo $chosenArticle->getPublish();?>" placeholder="Sửa Quê quán" readonly></td>
                    </tr>
                    <tr>
                        <td><p3 style ="color:red"><b>Bạn chắc chắn muốn xóa chứ?</b></p3></td>
                        <td><input style="color:red" type="submit" name="delete" value="CÓ"></td>
                        <td><input style="color:red" type="submit" name="noDelete" value="KHÔNG"></td>
                    </tr>
                </table>
                
            </form>
          
    </div>