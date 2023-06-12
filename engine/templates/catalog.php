<!-- Задание 1 -->
<h2>Каталог</h2>

<div>
    <?php foreach ($catalog as $item): ?>
        <div>
            <?= $item['title'] ?><br>
            <a href="/engine/?page=product&productId=<?= $item['id'] ?>"><img src="/engine/img/<?= $item['img_path'] ?>"
                                                                              alt="" width="100"><br></a>
            Цена: <?= $item['price'] ?><br>
            <button>Купить</button>
            <hr>
        </div>
    <?php endforeach; ?>
</div>