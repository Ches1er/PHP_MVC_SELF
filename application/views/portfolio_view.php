<ul>
    <?php
    $i=1;
    foreach ($data as $datum):
    ?>
    <p>Record <?=$i?></p>
    <li><?= $datum["year"]?></li>
    <li><?= $datum["content"]?></li>
    <?php $i++;
    endforeach;?>
</ul>
