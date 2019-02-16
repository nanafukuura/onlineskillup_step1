<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>掲示板</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_GET["comment"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_GET["comment"]);
        print("あなたのコメントは「 ${comment} 」です。");
      }
      ?>
    <?php
    if(isset($_GET["name"])){
      //エスケープしてから表示
      $name = htmlspecialchars($_GET["name"]);
      print("あなたの名前は「 ${name} 」です");
    }
    ?>
        <p>掲示板</p>
        <form method="GET" action="index.php">
          コメント：<textarea  name="comment" rows="4" cols="40" name="comment"></textarea><br>
          名前：<input type="text" name="name"/>
          <input type="submit" value="送信" />
        </form>

  </body>
</html>
