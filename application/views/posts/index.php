<br>
<h2><?= $title ?></h2>
<br>
<?php foreach ($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
    <?php echo $post['body']; ?>
    <br><br>
<?php endforeach; ?>