<div class="card" style="width: 18rem;" align="center"> 
<img class="card-img-top" src="http://via.placeholder.com/300" alt="Card image cap"> 
<div class="card-body"> 
<h5 class="card-title"><?php echo $post["title"]; ?></h5> 
<h6 class="card-title"><?php echo $post["tags"]; ?></h6> 
<p class="card-text"><?php echo $post["text"]; ?></p>
<a href="../del_post.php?id=<?php echo $post['id']; ?>">
<button type="button" class="btn btn-danger">Удалить</button>
</a>
<a href="../edit_post.php?id=<?php echo $post['id'];?>&title=<?php echo $post['title']; ?>&tags=<?php echo $post['tags']; ?>&text=<?php echo $post['text'];?>">
<button type="button" class="btn btn-primary">Редактировать</button>
</a>
 </div>