
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>確認フォーム</title>
    </head>

    <body>
        <header>
            <div></div>
        </header>

            <div class="確認フォーム">
                <h1>会員登録フォーム</h1>
            </div>
            <div class="subtitle">
                <h2>確認画面</h2>
            </div>

            <form method="POST" action="oubo3.php">
                    <p> 名前 : <?php echo $_POST['id']; ?> </p>
                    <p> カナ : <?php echo $_POST['kana']; ?> </p>
                    <p> 電話 : <?php echo $_POST['number']; ?> </p>
                    <p> mail : <?php echo $_POST['mail']; ?> </p>
                    <p> 生まれ年 : <?php echo $_POST['year']; ?>年 </p>
                    <p> 性別 : <?php echo $_POST['gender']; ?> </p>
                    <p> 
                        メールマガジン : 
                        <?php
                            if (isset($_POST["magazine"]) && $_POST["magazine"] === "yes") {
                                echo "送付する ";
                                $magazine = 1;
                            } else {
                                echo "送付しない";
                                $magazine = 0;
                            }
                        ?>
                    </p>

                        <input type="hidden" name="name" value="<?php echo $_POST['id']; ?>">
                        <input type="hidden" name="kana" value="<?php echo $_POST['kana']; ?>">
                        <input type="hidden" name="number" value="<?php echo $_POST['number']; ?>">
                        <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
                        <input type="hidden" name="year" value="<?php echo $_POST['year']; ?>">
                        <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
                        <input type="hidden" name="magazine" value="<?php echo $magazine; ?>">
                        <input type="submit" value="確認">
            </form>
    </body>
</html>
