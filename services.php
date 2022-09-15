<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link class="logo_image" rel="icon" href="assets/images/icons/favicon.svg" type=" image/svg+xml">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РТ-трейдинг - Услуги</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/icon-font.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <?php require_once 'templates/animation.php';?>

</head>

<body>
    <?php 
        require_once 'templates/nav.php';
        require_once 'templates/header.php';
        printNav('white');
        printheader('short', ['Услуги']);
    ?>
    <main class="content">
        <section class="section-intro">
            <div class="wrap">
                <h2 data-aos="fade-down-right" class="section-intro_title">
                    Мы предлагаем
                    <span>следующие услуги</span>
                </h2>
                <h5 data-aos="fade-down-left" class="section-intro_desc">Наши высококвалифицированные специалисты обеспечат Вам комфортное сотрудничество в области поставок, складских и таможенно-брокерских услуг.</h5>
            </div>
        </section>
        <section class="section-wedo">
            <div class="wrap">
                <?php require_once 'templates/wedo-block.php'; ?>
            </div>
        </section>
    </main>
    <?php require_once 'templates/footer.php'; ?>
</body>

</html>