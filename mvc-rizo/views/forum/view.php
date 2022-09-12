<form action="index.php?module=forum&action=edit" method="post">
    <input type="hidden" name="idForum" value="<?php echo $data['idForum']; ?>">
        <label>
            Title
            <input type="text" name="title" value="<?php echo $data['title']; ?>">
        </label>
        <label>
            Article
            <input type="text" name="article" value="<?php echo $data['article']; ?>">
        </label>
        <input type="submit">
    </form>