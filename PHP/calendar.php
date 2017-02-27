<?php
/**
 * Created by PhpStorm.
 * User: xemss
 * Date: 26.02.2017
 * Time: 19:51
 */

	function pc_calendar($month, $year, $opt = '') {

		// check for optional user custom setting	
		if (!is_array($opt)){
			$opt = [];
		}

		// default color
		if (!isset($opt["today_color"])) {
			# code...
			$opt['today_color'] = "red";
		}

		// 
		if (!isset($opt['month_link'])) {
			$opt['month_link'] = "<a href='" . $_SERVER['PHP_SELF'] . "?month=%d&year=%d'>%s</a>";
		}

		list($this_month, $this_year, $this_day) = split(", ", strftime("%m, %Y, %d"));

		//
		$day_highlight = (($this_month == $month) && ($this_year == $year));

		list($prev_month, $prev_year) =  split(", ", strftime("%m, %Y", mktime(0,0,0, $month - 1, 1, $year)));
		$prev_month_link = sprintf($opt['month_link'], $prev_month, $prev_year, "&lt;");


		list($next_month, $next_year) =  split(", ", strftime("%m, %Y", mktime(0,0,0, $month + 1, 1, $year)));
		$next_month_link = sprintf($opt['month_link'], $next_month, $next_year, "&gt;");
	}

 //
    list($month, $year) = explode(', ', date('m ,Y'));
	pc_calendar($month, $year);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td><?php echo $prev_month_link; ?></td>
			<td><?php echo strftime("%B %Y", mktime(0,0,0, $month, 1, $year)); ?></td>
			<td><?php echo $next_month_link; ?></td>
		</tr>

		<?php
			$totaldays = date('t', mktime(0,0,0, $month, 1, $year));

			echo "<tr>";

			// draw name days of week
			$weekdays = ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"];

			forEach($weekdays as $weekday) {
				echo "<td>$weekday</td>";
			}

			echo "</tr><tr>";

//			 add empty
            $day_offset = date('w', mktime(0,0,0, $month, 1, $year));

            if ($day_offset > 0 ) {
                for($i = 0; $i < $day_offset; $i++) {
                  echo "<td>&nbsp;</td>";
                }
            }

            $yesterday = time() - 8600;
//            draw days
            for ($day = 1; $day <= $totaldays; $day++) {
                $day_secs = mktime(0, 0, 0, $month, $day, $year);
                if ($day_secs >= $yesterday) {
                    if ($day_highlight && ($day == $this_day)) {
                        echo "<td style='" . $opt['today_color'] . "'>$day</td>";
                    } else {
                        echo "<td>$day</td>";
                    }
                } else {
                    echo "<td>$day</td>";
                }
                $day_offset++;

                // check for end of week
                if ($day_offset == 7) {
                    $day_offset = 0;
                    echo "</tr>\n";

                    if ($day < $totaldays) {
                        echo "<tr>";
                    }
                }
            }

            // how much we need empty boxes
            if ($day_offset > 0 ) {
                $day_offset = 7 - $day_offset;
            }

            // draw empty box
            if ($day_offset > 0) {
                for($i = 0; $i < $day_offset; $i++) {
                    echo "<td>&nbsp;</td>";
                }
            }
            echo "</tr></table>";
//        }
        ?>
</body>
</html>

