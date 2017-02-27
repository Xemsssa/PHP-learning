<?php
/**
 * Created by PhpStorm.
 * User: xemss
 * Date: 27.02.2017
 * Time: 15:51
 */
    function pc_grid_horizontal($array, $size) {

        // calculate width of <td>
        $table_width = 100;
        $width = intval($table_width / $size);

        // create tr
        $tr = "<tr align='center'>";
        $td = "<td width='$width%%'>%s</td>";

        // start drawing table
        $table = "<table width='$table_width'>$tr";

//        start line
        $i = 0;

        foreach ($array as $item) {
            $table .= sprintf($td, $item );
            $i++;

            // check if we reach end
            if (!($i % $size)) {
                $table .= "</tr>$tr";
            }
        }

        // add empty space till the end
        while ($i % $size) {
            $table .= sprintf($td, "%nbsp;");
            $i++;
        }

        $end_tr_length = strlen($tr * -1);
        if (substr($table, $end_tr_length) != $tr) {
            $table .= "</tr>";
        } else {
            $table = substr($table, 0, $end_tr_length);
        }

        $table .= "</table>";

        return $table;
    }

    // create connection
    $dsh = "mysql://user:password@localhost/table";
    $dbh = DB::connect($dsh);

    // check if connection success
    if (DB::isError($dbh)) {
        die($dbh->getMessage());
    }

    // create query send to server
    $sql = "SELECT state FROM states";
    $sth = $dbh->query($sql);

    // fetch results
    while ($row = $sth->fetchRow(DB_FETCHMODE_ASSOC)) {
        $states[] = $row['state'];
    }

    $table = pc_grid_horizontal($states, 6);

    echo $table;
?>