<?php
// Задание 2
$reviewerName = '';
$reviewText = '';
$reviewId = '';
$productId = '';
if (isset($_GET['reviewerName']))
    $reviewerName = $_GET['reviewerName'];

if (isset($_GET['reviewText']))
    $reviewText = $_GET['reviewText'];

if (isset($_GET['reviewId']))
    $reviewId = $_GET['reviewId'];

if (isset($_GET['productId']))
    $productId = $_GET['productId'];

$action = 'add';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    doFeedbackAction($_GET['action']);
}

$message = '';
if (isset($_GET['message'])) {
    switch ($_GET['message']) {
        case 'deleteSuccess':
            $message = 'Отзыв успешно удалён';
            break;
        case 'addSuccess':
            $message = 'Отзыв успешно добавлен';
            break;
        case 'editSuccess':
            $message = 'Отзыв успешно отредактирован';
            break;
        default:
            break;
    }
}

// Задание 3
function doFeedbackAction($action)
{
    if ($action === 'add') {
        addFeedback();
        die();
    }
    if ($action === 'edit') {
        editFeedBack();
    }

    if ($action === 'delete') {
        deleteFeedback();
        die();
    }
}

function deleteFeedback()
{
    if (isset($_GET['reviewId']) && isset($_GET['productId'])) {
        $db = getDb();
        @mysqli_query($db, 'DELETE FROM `reviews` WHERE id = ' . $_GET['reviewId']) or die(mysqli_error($db));
        header("Location: /engine/?page=product&productId=" . $_GET['productId'] . "&message=deleteSuccess");
    }
}

function addFeedback()
{
    if (isset($_GET['productId']) && isset($_POST['reviewText']) && isset($_POST['reviewerName'])) {
        $db = getDb();
        @mysqli_query($db, "INSERT INTO `reviews` (`id`, `productId`, `reviewText`, `reviewerName`) VALUES (NULL, " . $_GET['productId'] . ", '" . $_POST['reviewText'] . "', '" . $_POST['reviewerName'] . "')") or die(mysqli_error($db));
        header("Location: /engine/?page=product&productId=" . $_GET['productId'] . "&message=addSuccess");
    }
}

function editFeedBack()
{
    if (isset($_POST['reviewText']) && isset($_POST['reviewerName']) && isset($_GET['reviewId']) && isset($_GET['productId'])) {
        $db = getDb();
        @mysqli_query($db, "UPDATE `reviews` SET `reviewText`='" . $_POST['reviewText'] . "',`reviewerName`='" . $_POST['reviewerName'] . "' WHERE id = " . $_GET['reviewId']) or die(mysqli_error($db));
        header("Location: /engine/?page=product&productId=" . $_GET['productId'] . "&message=editSuccess");
    }
}