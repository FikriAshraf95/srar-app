<?php
$i = 1;
while($i <= 10){
    $name = "Fikri Ashraf";
    $year = "1";
    $class = "Ibnu Sina";
    $icNO = "951110146187";
?>
    <tr>
        <td><?= $i; ?></td>
        <td><?=$name?></td>
        <td><?=$year?></td>
        <td><?=$class?></td>
        <td><?=$icNO?></td>
        <td>
            <div class="text-center">
                <a href="maklumatPelajar.php?id=<?=$i?>" class="btn btn-primary mx-2">
                    <i class="fa fa-info-circle"></i>
                    <span class="mx-2">Info Lanjut</span>
                </a>
                <button type="submit" class="btn btn-danger mx-2" name="id" value="<?php echo($i); ?>">
                <i class="fas fa-trash"></i>
                    <span class="mx-2">Padam</span>
                </button>
            </div>
        </td>
    </tr>
<?php
    $i ++;
}
?>