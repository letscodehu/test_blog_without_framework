<?php
foreach ($posts as $post){
    ?>
    <form action="editor.php?id=<?php echo $post->id; ?>" method="post">
        <br>
        <strong>
            <?= $post->title ?>
        </strong>
        <br>
        <?= $post->teaser; ?>
        <br>
        <em>
            <?= $post->created_by; ?>
        </em>
        <br>
        <input type="submit" name="button" class="btn" value="Edituj post" >
        <br>
        <br>
        <br>
    </form>
<?php
}