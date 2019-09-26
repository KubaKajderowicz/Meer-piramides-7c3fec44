<!DOCTYPE html>
<html>
<style type="text/css">
*{
	padding: 0;
	margin: 0;
}
	table, td{border-collapse: collapse;}
	.black{
		background-color: black;
		width: 50px;
		height: 50px;
	}

</style>
<body>
    <table>
        <tbody>
            <?php
            for ($x = 1; $x <= 10; $x++) {
                echo "<tr>";
                for ($y = 1; $y <= $x; $y++) {
                    echo '<td class="black"></td>';
                }
                echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>

</html>