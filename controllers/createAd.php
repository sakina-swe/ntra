<?php

declare(strict_types=1);

$title       = $_POST['title'];
$description = $_POST['description'];
$price       = (float) $_POST['price'];
//$gender      = $_POST['gender'];
$branch      = (int) $_POST['branch'];
$address     = $_POST['address'];
$rooms       = (int) $_POST['rooms'];

if ($_POST['title']
&& $_POST['description']
&& $_POST['price']
&& $_POST['address']
&& $_POST['rooms']) {
    $newAdsId = (new \App\Ads())->createAds(
        $title,
        $description,
        1,
        1,
        1,
        $address,
        $price,
        $rooms
    );

    if ($newAdsId) {
        $imageHandler = new \App\Image();
        $fileName     = $imageHandler->handleUpload();

        if (!$fileName) {
            exit('Rasm yuklanmadi!');
        }

        $imageHandler->addImage((int)$newAdsId, $fileName);

        header('Location: /');

        exit();
    }

    return;
}