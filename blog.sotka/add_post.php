<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Добавить пост</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<?php
    include "include/menu.php";
    include "include/posts.php";
    $data = $_POST;
    if (isset($data['add'])){
        add_posts ($connect, $data['title'], $data ['tags'], $data ['text']);
    }
    ?>
    <form action="add_post.php" METHOD="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Название</label>
    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Название">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Тэги</label>
    <input type="text" name="tags" class="form-control" id="formGroupExampleInput2" placeholder="Тэги">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Текст</label>
    <input type="text" name="text" class="form-control" id="formGroupExampleInput2" placeholder="Текст">
    <button type="submit" name="add">Создать новый пост</button>
  </div>
</form>
</body>
</html>