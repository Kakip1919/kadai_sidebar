<?php /* Smarty version 2.6.32, created on 2021-11-25 10:18:55
         compiled from index.tpl */ ?>
<html lang="jp">
<head>
    <link rel="stylesheet" type="text/css" href="../Comn/rokuyo.css">
    <title>西暦から、旧暦、六曜を計算します！</title>
</head>
<body>

<div class="container">
    <p class="title">西暦から旧暦、六曜を計算！</p>
    <div class="nav">
        <h2>MENU</h2>
        <ul>
            <li><a href="">ホーム</a></li>
            <li><a href="">大学案内</a></li>
            <li><a href="">学部・学科</a></li>
            <li><a href="">大学院</a></li>
            <li><a href="">国際交流</a></li>
            <li><a href="">入試情報</a></li>
        </ul>
    </div>
    <div class="main_container">
        <form action="controller.php" method="get" class="form-example">
            <div class="form-example">

                <h2>西暦を入力すると、旧暦と六曜、</h2>
                <h3>おまけに毎日記念日を表示します。</h3>
                <h3>下の入力欄に日付を入力してください</h3>
                <label class="subtitle">西暦</label>
                <input maxlength="4" type="tel" name="target_year" class="text_field">

                <label class="subtitle">年</label>
                <input maxlength="2" type="tel" name="target_month" class="text_field">

                <label class="subtitle">月</label>
                <input maxlength="2" type="tel" name="target_day" class="text_field">
                <label class="subtitle">日</label>


                <input type="submit" class="button" value="計算する！">

                <?php if ($this->_tpl_vars['validation'] == 1): ?>
                    <h2 class="error_message">日付を正しく入力してください</h2>
                <?php elseif ($this->_tpl_vars['validation'] == 2): ?>
                    <h2 class="error_message">年を1899年から2101年までの間で入力してください</h2>
                <?php elseif ($this->_tpl_vars['validation'] == 3): ?>
                    <h2 class="error_message">月を1月から12月までの間で入力してください</h2>
                <?php elseif ($this->_tpl_vars['validation'] == 4): ?>
                    <h2 class="error_message">日を入力してください</h2>
                <?php else: ?>
                    <h1 class="square_background result">旧暦: <?php echo $this->_tpl_vars['json_csv'][1]; ?>
 六曜: <?php echo $this->_tpl_vars['json_csv'][2]; ?>
</h1>
                    <h1 class="square_background result"><?php echo $this->_tpl_vars['date']; ?>
</h1>
                    <h1 class="square_background result anniversary"><?php echo $this->_tpl_vars['json_csv'][0]; ?>
</h1>
                <?php endif; ?>
                <div class="border"></div>

                <div>
                    <h2 class="section_title">六曜(ろくよう)とは?</h2>
                    <div class="border-box">
                        <p class="sentence">六曜とは暦の中でも有名な暦中(れきちゅう)の一つで、</p>
                        <p class="sentence">「結婚式は大安に」「葬式は友引にしてはいけない」等の因果関係があり、</p>
                        <p class="sentence">結婚式や、葬式、所謂儀式に深く結びついて利用されている。</p>
                    </div>
                </div>
                <h2 class="section_heading">各六曜の概要</h2>
                <section class="description">
                    <div class="mini_section">

                        <h3 class="mini_heading">友引(ともびき)について</h3>
                        <p class="sentence">友引(ともびき)は、勝負等の決着がつかない</p>
                        <p class="sentence">良くも悪くもないとされている日になります。</p>
                        <p class="sentence">朝と晩は吉、昼は凶と言われています。</p>
                        <p class="sentence">友引の日に葬儀を行うと友が冥土に連れていかれると言われていますので、避けましょう。</p>

                        <h3 class="mini_heading">先負(せんまけ)について</h3>
                        <p class="sentence">先負(せんぶ、せんまけ)は、急ぐことを避けましょうという日です。</p>
                        <p class="sentence">争いや、公事等もよくないとされています。</p>
                        <p class="sentence">午前は凶、午後は吉と言われています。</p>
                        <p class="sentence">全てにおいて、平静を保つことが良いとされています。</p>

                        <h3 class="mini_heading">仏滅(ぶつめつ)について</h3>
                        <p class="sentence">仏滅(ぶつめつ)は、六曜の中で一番の大凶日です。</p>
                        <p class="sentence">仏滅は、全てにおいて凶であるとされています。</p>
                        <p class="sentence">この日は六曜の中で最も凶の日と考えられ、婚礼や祝儀等を忌む習慣があり、</p>
                        <p class="sentence">この日に儀式(結婚式や、葬式等)を行う人は少ないです。</p>

                        <h3 class="mini_heading">先勝(せんかち)について</h3>
                        <p class="sentence">先勝(せんかち、せんしょう)は物事を早く済ませると</p>
                        <p class="sentence">吉だとされる日になります。</p>
                        <p class="sentence">午前は吉、午後は凶と言われています。</p>　
                        <p class="sentence">急ぎの用の処理や、訴訟などに良い日とされています。</p>

                        <h3 class="mini_heading">大安(たいあん)について</h3>
                        <p class="sentence">大安(たいあん)は、進んで行うことが吉と言われている日になります。</p>
                        <p class="sentence">六曜の中で一番良い日とされています。</p>　
                        <p class="sentence">大安日だと成功しない日はないと言われるほどです。</p>
                        <p class="sentence">安全に物事を進めたい日等を大安に設定すると良いです。</p>

                        <h3 class="mini_heading">赤口(しゃっこう)について</h3>
                        <p class="sentence">赤口(しゃっこう、しゃっく)は牛の刻(午前１１時ごろから、午後１時ごろまで)の間だけ吉になり、牛の刻以外の時間は全て凶になります。</p>
                        <p class="sentence">この日は 「赤」 という字が付くので、火の元や、鋭利な物などに気を付けましょう。</p>
                        <p class="sentence">「死」などを連想されるものに注意する日とされています。</p>
                    </div>
                </section>

                <h2 class="section_heading">旧暦(きゅうれき)とは？</h2>
                <p class="sentence">旧暦とは、改暦があった場合のそれ以前に使われていた暦法(計算の規則)のことです。</p>
                <p class="sentence">現在の暦法は、太陽暦(グレゴリオ暦)と呼ばれているものです。</p>
                <p class="sentence">太陽暦が採用されたのは明治5年(1872年)で、それ以前に使われていた暦法が旧暦ということになります。</p>

                <h2 class="section_heading">毎日記念日とは？</h2>
                <p class="sentence">365日、毎日に記念日が存在しています。</p>
                <p class="sentence">毎日記念日を知るだけで毎日が特別な日になるでしょう。</p>
                <p class="sentence">下記では毎日記念日の定義を記載しています。</p>
                <p class="sentence">--wikiより抜粋--</p>
                <p class="sentence">・元日、建国記念の日などの祝日</p>
                <p class="sentence">・節分や、七夕などの伝統的な祭事ごと</p>
                <p class="sentence">・個人的な記念日(誕生日や、結婚記念日など)</p>
                <p class="sentence">・一地方でのみ有効となるもの(市政記念日、創立記念日等)</p>
                <p class="sentence">・企業や、業界団体等が商品販売の目的で制定したような記念日</p>
            </div>
            <footer class="block"></footer>
        </form>
    </div>
</div>
</body>
</html>