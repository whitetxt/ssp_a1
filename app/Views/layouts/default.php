<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/static/style/style.css">
</head>

<body>
    <?= $this->include("partial/nav") ?>
    <div class="p-4"><?= $this->renderSection("content") ?></div>
</body>

</html>