<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title'] . ' | ' . $data['title']; ?></title>
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/template/css/style.css">
</head>
<body>
    <?php if ($this->auth->isLoggedIn()) : ?>
        <div class="container">
            <div class="header">
                <img src="path_to_logo.png">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="<?php echo APP_URL; ?>/dashboard">Dashboard</a></li>
                    <li><a href="<?php echo APP_URL; ?>/logout">Logout</a></li>
                </ul>
            </div>
            <div class="article">
                <h1><?php echo $data['title']; ?></h1>
                <?php require_once $view_file; ?>
            </div>
            <div class="footer">
                <p>&copy; 2023 | Pemrograman Web 2</p>
            </div>
        </div>
    <?php else : ?>
        <?php require_once $view_file; ?>
    <?php endif; ?>
</body>
</html>
