<?php
/*******w******** 
    
    Name: Ejiknse Aubagha-Ausaji
    Date:19-05-2024
    Description:

****************/

// Sample $config data
$config = [
    'gallery_name' => 'Mr D Gallery',
    'categories' => ['nature', 'soccer', 'art', 'technology', 'food & drink'], // Added 'food' category
    'local_images' => [
        'nature.jpg' => ['photographer' => 'Carlo Attardi ', 'photographer_url' => 'https://unsplash.com/@ranback'],
        'soccer.jpg' => ['photographer' => 'Chaos Soccer Gear ', 'photographer_url' => 'https://unsplash.com/@chaossoccergear'],
        'sergey_image.jpg' => ['photographer' => 'Sergey Vinogradov', 'photographer_url' => 'https://unsplash.com/@vinogradovspb'],
        'girl.jpg' => ['photographer' => 'Joshua Oluwagbemiga ', 'photographer_url' => 'https://unsplash.com/@joaccord'],
        'food.jpg' => ['photographer' => 'Lily Banse', 'photographer_url' => 'https://unsplash.com/@lvnatikk'],
    ]
];

// Function to get the count of local images
function getLocalImagesCount($config) {
    return count($config['local_images']);
}

// Function to generate Unsplash image URL
function getUnsplashImageUrl($category) {
    return "https://source.unsplash.com/300x200/?$category";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $config['gallery_name'] ?></title>
</head>
<body>

<h1><?= $config['gallery_name'] ?></h1>

<?php foreach ($config['categories'] as $category): ?>
    <h2><?= ucfirst($category) ?></h2>
    <img src="<?= getUnsplashImageUrl($category) ?>" alt="<?= $category ?> image">
<?php endforeach; ?>

<h1># Large Images <?= getLocalImagesCount($config) ?></h1>

<?php foreach ($config['local_images'] as $image => $details): ?>
    <div>
        <img src="images/<?= $image ?>" alt="<?= $details['photographer'] ?>'s photo">
        <p><a href="<?= $details['photographer_url'] ?>" target="_blank"><?= $details['photographer'] ?></a></p>
    </div>
<?php endforeach; ?>


</body>
</html>