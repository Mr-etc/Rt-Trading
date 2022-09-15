<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РТ-трейдинг - Маркетинг поставок</title>
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
        printheader('short', ['Маркетинг поставок']);
    ?>
    <main class="content">
        <section class="section-information">
            <div class="wrap wrap_column">
                <img data-aos="zoom-in" class="section-information_image" src="../assets/images/services/marketing-intro.jpg" alt="">
                <div data-aos="zoom-out-down" class="section-information_description">
                    <p class="text">Это особенная услуга для людей, которые желают заказать товары, расположенные достаточно далеко. Разработать цепочку доставки с учетом особенностей таможенного законодательства, уложиться в сроки доставки — все это требует особенных знаний и навыков. Наши профессионалы готовы разработать способ доставки товара в кратчайшие сроки и по разумной стоимости транспортировки.
                            </br>
                            При расчете мы изучаем сведения о сроках и стоимости транспортировки разными видами транспорта — от морских судов и до железнодорожных составов.
                            При этом мы учитываем и особенности груза, который может требовать к себе особенного отношения, и грузоподъемность каждого транспортного средства, и стоимость каждой перевалки, и тарифы за хранение в складах. Поэтому клиент получает максимально точную стоимость доставки и понятную карту транспортировки необходимых для него товаров.</p>
                    <div class="section-information_advantages">
                        <h3 class="advantages-title">Преимущества</h3>
                        <span class="text">Сотрудничая с нами Вы получаете:</span>
                        <ul class="advantages-list">
                            <li>Кратчайшие сроки</li>
                            <li>Разумная стоимость</li>
                            <li>Понятная карта транспортировки</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once '../templates/footer.php'; ?>
</body>
</html>