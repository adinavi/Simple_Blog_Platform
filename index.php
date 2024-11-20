
<?php
include_once '../config/db.php';
include_once '../includes/functions.php';

$posts = fetch_all_posts($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Simple Blog</title>
</head>
<body>
    <h1>Welcome to the Simple Blog</h1>
    <div class="posts">
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h2><?= $post['title']; ?></h2>
                <p><?= $post['content']; ?></p>
                <small>Posted on <?= $post['created_at']; ?></small>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
