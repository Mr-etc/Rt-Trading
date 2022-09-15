<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РТ-трейдинг - Складские услуги</title>
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
        printNav('white');
        printheader('short', ['Складские услуги']);
    ?>
    <main class="content">
        <section class="section-information">
            <div class="wrap wrap_column">
                <img data-aos="zoom-in" class="section-information_image" src="../assets/images/services/warehouse-intro.jpg" alt="">
                <div data-aos="zoom-out-down" class="section-information_description">
                    <p class="text">Складские услуги – это не просто стоимость хранения в  закрытом помещении определенных товаров. Этот тип услуг включает в себя комплекс мер по хранению, маркировке, погрузке и разгрузке товаров. В некоторых случаях складские помещения необходимы для длительного хранения товаров. И мы готовы предоставить все виды складских услуг!
                        </br>
                        Наши склады имеют оснащение для разнообразной обработки товаров, оборудование для погрузки и разгрузки. Мы обеспечим надлежащие условия для хранения товаров разного типа.</p>
                    <div class="section-information_advantages">
                        <h3 class="advantages-title">Преимущества</h3>
                        <span class="text">Сотрудничая с нами Вы получаете:</span>
                        <ul class="advantages-list">
                            <li>Хранение товаров в полном соответствии с технологическими требованиями. В зависимости от типа товара можно заказать хранение на открытых и закрытых складах, а также организацию хранения специфичных товаров — негабалитных грузов, продуктов или других товаров, которые требуют хранение в особенном температурном режиме.</li>
                            <li>Складское обслуживание товаров (погрузочные и разгрузочные услуги, смена упаковки, стикеровка, инвентаризация).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require_once '../templates/footer.php'; ?>
</body>
</html>