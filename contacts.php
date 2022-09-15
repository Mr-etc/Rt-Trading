<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link class="logo_image" rel="icon" href="assets/images/icons/favicon.svg" type=" image/svg+xml">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РТ-трейдинг - Конакты</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/icon-font.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/contacts.css">
    <?php require_once 'templates/animation.php';?>
</head>
<body>
    <?php 
        require_once 'templates/nav.php';
        require_once 'templates/header.php';
        printNav('white');
        printheader('short', ['Контакты']);
    ?>

    <main class="content">
        <?php require_once 'templates/detail.php'; ?>
        <link rel="stylesheet" href="assets\css\popup.css">
        <div class="popup">
            
        </div>
        <?php require_once 'templates/feedback.php'; ?>
    </main>

    <?php require_once 'templates/footer.php'; ?>
</body>
</html>