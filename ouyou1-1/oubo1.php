
<?php

    $sql=null;

    $dbn = null;
    $

    $dbn = new PDO(
        'mysql:host=localhost;
        dbname=techis;
        charset=utf8',
        'root',
        'root'
    );
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

            <form method="POST" action="oubo2.php">
                <div>
                    <p>
                        <label>名前</label>
                        <input type="text" id="id" name="id">
                    </p>
                </div>

                <div>
                    <p>
                        <label>カナ</label>
                        <input type="text" id="kana" name="kana">
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
                        <select name="生まれ年">
                            <option value="80">1980年</option>
                            <option value="81">1981年</option>
                            <option value="82">1982年</option>
                            <option value="83">1983年</option>
                            <option value="84">1984年</option>
                            <option value="85">1985年</option>
                            <option value="86">1986年</option>
                            <option value="87">1987年</option>
                            <option value="88">1988年</option>
                            <option value="89">1989年</option>
                            <option value="90">1990年</option>
                            <option value="91">1991年</option>
                            <option value="92">1992年</option>
                            <option value="93">1993年</option>
                            <option value="94">1994年</option>
                            <option value="95">1995年</option>
                            <option value="96">1996年</option>
                            <option value="97">1997年</option>
                            <option value="98">1998年</option>
                            <option value="99">1999年</option>
                            <option value="00">2000年</option>
                            <option value="01">2001年</option>
                            <option value="02">2002年</option>
                            <option value="03">2003年</option>
                            <option value="04">2004年</option>
                            <option value="05">2005年</option>
                            <option value="06">2006年</option>
                            <option value="07">2007年</option>
                            <option value="08">2008年</option>
                            <option value="09">2009年</option>
                            <option value="10">2010年</option>
                            <option value="11">2011年</option>
                            <option value="10">2012年</option>
                        </select>
                    </p>
                </div>

                <div>
                    <p>
                        <input type="radio" name="gender" value="male">男性
                        <input type="radio" name="gender" value="fimale">女性
                    </p>
                </div>

                <div>
                    <p>
                        <input type="checkbox" name="mail" value="yes">メールマガジン受け取り
                    </p>
                </div>

                <div>
                    <p>
                        <button type="submit">登録</button>
                    </p>
                </div>
            </form>

        </body>
    </body>
</html>