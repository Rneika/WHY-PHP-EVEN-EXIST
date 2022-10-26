<?php
require 'javadbconfig.php';
$konsumen = query("SELECT * FROM konsumen");
?>
<table border ="1" cellpadding ="9" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <?php $i = 1; ?>
    <?php foreach( $konsumen as $row) :?>
    </tr>
    <td><?= $i; ?></td>
    <td><?= $row["username"];?></td>
        <td><?= $row["email"];?></td>

    
    <?php $i++?>
    <?php endforeach;?>
