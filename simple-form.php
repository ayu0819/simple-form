<?php
// POST通信 の確認
if(!empty($_POST)) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}

// ページ切り替え
$page = 0;

// ページ移動のバリデーション
if(!empty($_POST['btn_confirm']) && empty($errors)){
    $page = 1;
}

if(!empty($_POST['btn_submit'])){
    $page = 2;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- 2 last -->
    <?php if($page === 2 ) : ?>
    <div class="froms">
    <h1>送信が完了しました。</h1>
   <div>
    <?php endif; ?>
    <!-- / 2 last -->

    <!-- 1 confirm -->
    <?php if($page === 1 ) : ?>
    <h1>確認</h1>
    <div class="froms">
    <form action="simple-form.php" method="POST">
    <div class="form-area">
    <label>お名前</label>
    <input type="text" name="name" value="">
    </div>

    <div class="form-area">
    <label>メールアドレス</label>
    <input type="text" name="email" value="">
    </div>

    <div class="form-area">
    <label>お問い合わせ内容</label>
    <input type="text" name="email" value="">
    </div>

    <div class="form-area">
    <label>お問い合わせ内容</label>
    <textarea name="main" value="main">
    </textarea>
    </div>

    <button type="submit" name="back" value="戻る">戻る</button>
    <button type="submit" name="btn_submit" value="送信する">送信する</button>

    </form>
    </div>
    <?php endif; ?>
    <!-- / 1 confirm -->
    
    <!-- 0 from -->
    <?php if($page === 0 ) : ?>
    <h1>お問い合わせフォーム</h1>
    <div class="froms">
    <form action="simple-form.php" method="POST">
        <div class="form-area">
            <label>お名前</label>
            <input type="text" name="name" value="<?php if(!empty($_POST['name'])){echo h($_POST['name']);} ?>">
        </div>

        <div class="form-area">
            <label>メールアドレス</label>
            <input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']);} ?>">
        </div>

        <div class="form-area">
            <label>内容</label>
            <select name="contents" name="contents">
              <option value="0">選択してください</option>
              <option value="1">問い合わせ内容1</option>
              <option value="3">問い合わせ内容2</option>
              <option value="4">問い合わせ内容3</option>
            </select>
        </div>

        <div class="form-area">
            <label>本文</label>
            <textarea name="main" value="main">
            </textarea>
        </div>

        <button type="submit" name="btn_confirm" value="確認する">確認する</button>
    </form>
    </div>
    <?php endif; ?>
    <!-- /0 from -->
</body>
</html> 