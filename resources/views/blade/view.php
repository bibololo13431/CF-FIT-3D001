<!-- <h1>VIEW PHP</h1>
<?php
    $scores = [1, 3, 4, 5, 3, 3, 7];

?>

<table border="1">
    <tr>
        <th>STT</th>
        <th>Điểm</th>
        <th>KetQua</th>
    </tr>
    <?php

    foreach ($scores as $key=>$score):
        $mauSac = $key % 2 !==0 ? "style='background: grey'" : ''; ?>
        <tr <?= $mauSac ?>>
        <td><?= ++$key; ?></td> 
        <td><?= $score ?></td> 
        <td><?= $score < 5 ? 'Khong dat' : 'dat' ?></td> 
        </tr>
    <?php 
        endforeach; ?>

</table> -->
