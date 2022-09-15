<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link class="logo_image" rel="icon" href="assets/images/icons/favicon.svg" type=" image/svg+xml">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>РТ-трейдинг - О нас</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/icon-font.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <?php require_once 'templates/animation.php';?>
</head>

<body>
    <?php 
        require_once 'templates/nav.php';
        require_once 'templates/header.php';
        printNav('white');
        printheader('short', ['О нас']);
    ?>
    <main class="content">
        <section class="section-about">
            <div class="wrap wrap_column">
                <div class="section-about_header block_header">
                    <h2 data-aos="fade-down" class="block_header_title">Кто мы?</h2>
                </div>
                <div data-aos="zoom-in" class="section-about_desctioption">
                    <p class="item">Наша компания предлагает продукцию промышленного назначения производства мировых лидеров этой отрасли. Гарантируем лояльную к клиенту политику, поскольку наша компания является официальным дистрибьютором и сотрудничает непосредственно с производителями предложенных товаров.</p>
                    <p class="item">Наши партнеры, заказывающие оптовые партии разнообразной продукции, оставляют замечательные отзывы о сотрудничестве, поэтому сейчас мы можем гордиться репутацией надежного поставщика, который в работе соблюдает договоренности и сроки поставок.</p>
                    <p class="item">Наша надежность и пунктуальность — гарантия того, что вы своевременно получите необходимые для стабильного развития вашего бизнеса товары. Если вам нужно доставить товары в ограниченные сроки, нужно это оговорить в договоре и мы сделаем все возможное для выполнения заказа.</p>
                    <p class="item_header">Ассортимент</p>
                    <span class="item">В наших каталогах ассортимент товаров постоянно обновляется. На появление новых позиций влияет как изменение мировой конъюнктуры, так и пожелания наших клиентов. Все товары, независимо от бренда, отличаются оптимальным сочетанием достойного качества за разумную цену.
                        </br>
                        «РТ-трейдинг» предлагает товары таких направлений:
                        <ol>
                            <li>Для ремонта</li>
                            <li>Косметические средства</li>
                            <li>Бытовые товары</li>
                        </ol>
                    </span>
                    <p class="item">Мы заинтересованы в длительном взаимовыгодном сотрудничестве с нашими клиентами, поэтому разработали практичную и привлекательную программу лояльности, которая доступна для каждого клиента, совершившего хотя бы одну покупку. Как именно воспользоваться предложениями из программы лояльности, вас расскажет менеджер нашей компании.</p>
                    <p class="item">Преимущества сотрудничества с нашей компанией:
                        </br>
                        <ul>
                            <li>Доставка за счет продавца</li>
                            <li>Огромный выбор продукции</li>
                            <li>Индивидуальный подход к возможностям и потребностям каждого клиента</li>
                            <li>Адекватные цены</li>
                            <li>Качественные товары</li>
                        </ul>
                    </p>
                    <p class="item_header">Сотрудничество</p>
                    <p class="item">Компания «РТ-трейдинг» открыта для партнерства с разными коммерческими структурами — оптовыми базами, магазинами и торговыми сетями, строительными и другими предприятиями.
                        </br>
                        Наши партнеры смогут приобретать предложенную продукцию по самым разумным ценам, это объясняется тем, что мы напрямую контактируем непосредственно с производителями. Это делает сотрудничество с нашей компанией наиболее выгодным вариантом из всех возможных — мы предлагаем практичные и качественные товары, а также приятные условия сотрудничества.
                        </p>
                </div>
            </div>
        </section>
        <?php require_once 'templates/detail.php'; ?>
    </main>
    <?php require_once 'templates/footer.php'; ?>
</body>

</html>