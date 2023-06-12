<?php
include($_SERVER['DOCUMENT_ROOT'] . "/engine/model/feedback.php");
?>

<h2>Карточка товара с подробным описанием</h2>

<div>
    <div>
        <?= $product['title'] ?><br>
        <img src="/engine/img/<?= $product['img_path'] ?>" alt="" width="100"><br>
        Цена: <?= $product['price'] ?><br>
        <button>Купить</button>
        <p>Описание:</p>
        <p><?= $product['description'] ?></p>
        <hr>
    </div>

    <h3>Отзывы:</h3>


    <?php foreach ($reviews as $review): ?>
        <!--  Задание 2  -->
        <div>
            <strong><?= $review['reviewerName'] ?></strong>: <?= $review['reviewText'] ?>
            <a href="/engine/?page=product&productId=<?= $review['productId'] ?>&reviewId=<?= $review['id'] ?>&action=edit&reviewerName=<?= $review['reviewerName'] ?>&reviewText=<?= $review['reviewText'] ?>">[Edit]</a>
            <a href="/engine/?page=product&productId=<?= $review['productId'] ?>&reviewId=<?= $review['id'] ?>&action=delete">[X]</a>
        </div>
    <?php endforeach; ?>
    <br>

    <p><?= $message ?></p>
    <form action="/engine/?page=product&productId=<?= $productId ?>&reviewId=<?= $reviewId ?>&action=<?= $action ?>"
          method="post">
        Оставьте свой отзыв: <br>
        <input type="text" name="reviewerName" placeholder="Ваше имя" value="<?= $reviewerName ?>"><br>
        <input type="text" name="reviewText" placeholder="Ваш отзыв" value="<?= $reviewText ?>"><br>
        <input type="submit" value="Сохранить">
    </form>
</div>