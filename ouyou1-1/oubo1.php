<?php
    $error_message = [];
    session_start();
    if (isset($_POST['btn'])) {
        if (empty($_POST['id'])) {
            $error_message["name"] = "値が空です";
        } elseif (strlen($_POST['id']) > 20) {
            $error_message["name"] = "文字数がオーバーしています";
        }
    
        if (empty($error_message)) {
            $_SESSION["name"] = $_POST["id"];
            header("Location: oubo2.php");
            exit(0);
        }
    }
    if(strlen($_POST['btn'])) {
        if(empty($_POST['kana'])) {
            $error_massage["kana"] = "文字数がオーバーしています";
        }

        if (empty($error_message)) {
            $_SESSION["kana"] = $_POST["kana"];
            header("Location: oubo2.php");
            exit(0);
        }
    }

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="join" content="応募フォーム">
        <title>入力フォーム</title>
        <link rel="stylesheet" href="ouyou1-1.oubo.css">
    </head>

    <body>
        <header>
            <div>
            </div>
        </header>
        <body>
            <div class="title">
                <h1>会員登録フォーム</h1>
            </div>
            <div>
                <h2>入力画面</h2>
            </div>
            <form method="POST" action="">
                <div>
                    <p>
                        <label>名前</label>
                        <input type="text" id="id" name="id">
                        <?php if(isset($error_message["name"])): ?>
                            <?php echo $error_message["name"]; ?>
                    </p>
                </div>

                <div>
                    <p>
                        <label>カナ</label>
                        <input type="text" id="kana" name="kana">
                        <?php if(isset($error_massage["kana"])); ?>
                            <?php echo $error_massage["kana"] ?>
                        <?php endif; ?>
                    </p>
                </div>

                <div>
                    <p>
                        <label>電話</label>
                        <input type="text" id="number" name="number">
                    </p>
                </div>

                <div>
                    <p>
                        <label>mail</label>
                        <input type="text" id="mail" name="mail">
                    </p>
                </div>

                <div>
                    <p>
                        <label>生まれ年</label>
                        <select id="year" name="year">
                            <?php for($i = 1900; $i <= 2020; $i++): ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </p>
                </div>

                <div>
                    <p>
                        <label>性別</label>
                        <input type="radio" name="gender" value="male" checked>男性
                        <input type="radio" name="gender" value="fimale">女性
                    </p>
                </div>

                <div>
                    <p>
                        <input type="checkbox" name="magazine" value="yes" id="yes">メールマガジン受け取り
                    </p>
                </div>

            <div>
                <input type="submit" name="btn" value="送信">
            </div>
            </form>

        </body>
    </body>
</html>