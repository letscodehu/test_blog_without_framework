
<h2><?php echo $selectedPost->title ?></h2>

<p><?php echo $posts->content ?></p>

<?php
foreach $comments as $comment?>
<p><?php echo $comment->created_by ?></p>
<p><?php echo $comment->comment ?></p>