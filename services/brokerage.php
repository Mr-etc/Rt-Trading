<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РТ-трейдинг - Таможенно-брокерские услуги</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/icon-font.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/services.css">
    <?php require_once '../templates/animation.php';?>

</head>
<body>
    <?php 
        $prefix = $_SERVER['CONTEXT_PREFIX'];
        require_once '../templates/nav.php';
        require_once '../templates/header.php';
        printNav('sticky');
        printheader('short', ['Таможенно-брокерские услуги']);
    ?>
    <main class="content">
        <section class="section-information">
            <div class="wrap wrap_column">
                <img data-aos="zoom-in" class="section-information_image" src="../assets/images/services/brokerage-intro.jpg" alt="">
                <div data-aos="zoom-out-down" class="section-information_description">
                    <p class="text">Клиентам не придется беспокоиться о проведении таможенных операций, оплате таможенных сборов и прохождении товарами фитосанитарного контроля. Если для пересечения границы этого мало, наши специалисты оформят все необходимые для транспортировки продукции сертификаты и свидетельства.</p>
                    <div class="section-information_advantages">
                        <h3 class="advantages-title">Преимущества</h3>
                        <span class="text">Сотрудничая с нами Вы получаете:</span>
                        <ul class="advantages-list">
                            <li>Представление интересов клиента на таможне</li>
                            <li>Прохождение таможенной очистки</li>
                            <li>Организация документального сопровождения для проведения экспорта/импорта</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once '../templates/footer.php'; ?>
</body>
</html>