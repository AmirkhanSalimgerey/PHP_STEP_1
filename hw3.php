<?php 
            $y = date('Y');
            $m = date('m');
            $count_day = date("t", time());
            $w = 1;
            ?>
            <table class="table table-bordered">
            <thead>
                <th>Понедельник</th>
                <th>Вторник</th>
                <th>Среда</th>
                <th>Четверг</th>
                <th>Пятница</th>
                <th>Суббота</th>
                <th>Воскресенье</th>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= $count_day; $i++) {
                if ($w == 1) { ?>
                <tr>
                <?php }
                if ($i < 10) {
                    $d = '0' . $i;
                } else {
                    $d = $i;
                }
                $d_n = date('N', mktime(0, 0, 0, $m, $d, $y));
                if ($d_n != $w) {
                    $c = $d_n - $w;
                    for ($q = 0; $q < $c; $q++) { ?>
                    <td></td>
                    <?php $w++;
                    }
                } ?>
                <td>
                    <?php echo $i; ?>
                </td>
 
                <?php if ($w == 7) { ?>
                </tr>
                <?php }
                if ($w < 7) {
                    $w++;
                } else {
                    $w = 1;
                }
                }
                ?>
            </tbody>
            </table>