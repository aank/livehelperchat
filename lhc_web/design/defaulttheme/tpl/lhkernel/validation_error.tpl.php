<?php if (isset($errors)) : ?>
<div class="alert-box alert"><a href="#" class="close">×</a>
<ul>
<?php foreach ($errors as $err) : ?>
    <li><?php echo $err?></li>
<?php endforeach;?>
</ul>
</div>
<?php endif;?>