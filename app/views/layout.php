<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if (isset($title)): echo $this->escape($title) . ' - '; endif; ?>Perfect Todo</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />

</head>
<body>
    <div id="header">
        <h1><a href="<?php echo $base_url; ?>/">Perfect Todo</a></h1>
    </div>

    <div id="nav">
        <p>
            <?php if ($session->isAuthenticated()): ?>
                <a href="<?php echo $base_url; ?>/">ホーム</a>
                <a href="<?php echo $base_url; ?>/account">アカウント</a>
                <a href="<?php echo $base_url; ?>/account/logout">サインアウト</a>
            <?php else: ?>
                <a href="<?php echo $base_url; ?>/account/login">ログイン</a>
                <a href="<?php echo $base_url; ?>/account/register">アカウント登録</a>
            <?php endif; ?>
        </p>
    </div>

    <div id="main">
        <?php echo $_content; ?>
    </div>
</body>
</html>
