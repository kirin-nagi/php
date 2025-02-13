<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                World Clock
</a>
</div>
</header>
<main>
    <div class="search-form__content">
        <div class="search-form__heading">
            <h2>日本の世界の時間を比較<h2>
</div>
    <from class="search-form" action="result.php" method="get">
        <div class="search-form__item">
        <checkbox class="search-form__item-select" name="city">
        <label><input type="checkbox" name="[シドニー]"  value="シドニー">シドニー</label>
        <label><input type="checkbox" name="[上海]" value="上海">上海</label>
        <label><input type="checkbox" name="[モスクワ]" value="モスクワ">モスクワ</label>
        <label><input type="checkbox" name="[ロンドン]" value="ロンドン">ロンドン</label>
        <label><input type="checkbox" name="[ヨハネスブルグ]" value="ヨハネスブルグ">ヨハネスブルグ</label>
        <label><input type="checkbox" name="[ニューヨーク]" value="ニューヨーク">ニューヨーク</label>
        </checkbox>
        </div>
        <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
        </div>
    </from>
</div>
</div>
</main>
</body>

</html>