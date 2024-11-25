<!DOCTYPE html>
<html>
<head>
    <title>Темы и комментарии</title>
    <meta charset="UTF-8">

</head>
<body>
    <h1>Темы</h1>
    <ul>
        <?php foreach ($themes as $theme): ?>
            <li>
                <h2><?= htmlspecialchars($theme['name']) ?></h2>
                <ul>
                    <?php foreach ($theme['comments'] as $comment): ?>
                        <li><b><?= htmlspecialchars($comment['user_name']) ?>:</b> <?= htmlspecialchars($comment['comment_text']) ?></li>
                    <?php endforeach; ?>
                </ul>
                <form method="POST" action="/comment">
                    <input type="hidden" name="theme_id" value="<?= $theme['id'] ?>">
                    <textarea name="comment_text" required></textarea>
                    <button type="submit">Добавить комментарий</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
