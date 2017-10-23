
<h2><?php echo $selectedPost->title ?></h2>

<p><?php echo $selectedPost->content ?></p>

<?php
foreach($comments as $comment){ ?>
    <br>
    <p class= "post-meta" style="color:darkgrey"><?php echo $comment->created_by ?></p>
    <p><?php echo $comment->comment ?></p>

<?php
}
