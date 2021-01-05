<?php
    include "systemHeader.php";
?>

<?php
    require_once "./include/dbh.inc.php";

    $sql = "SELECT * FROM inventory WHERE requested_or_extra='request' ORDER BY item_id ASC";
    $result = $conn -> query($sql);
    $conn -> close();
?>

    <section>
        <form action="./include/requestForMaterial.inc.php" method="post" id="full-fill-request-form">

                <legend>Donate To:</legend>
                <label for="item-name">Item name:</label><br>
                <input type="text" name="item_name" value=""><br>
                <label for="person-lname">Person name:</label><br>
                <input type="text" name="person_name" value=""><br><br>
                <button type="submit"  name="submit" class="btnSubmit">submit</button>

                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo "<p style=\"color:red; text-align:center; width:17em; padding-top:5px;\">fill in all fields</p>";
                        }
                        else if ($_GET["error"] == "noreqordon") {
                            echo "<p style=\"color:red; text-align:center; width:17em; padding-top:5px;\">request does not exist</p>";
                        }
                        else if ($_GET["error"] == "none") {
                            echo "<p style=\"color:blue; text-align:center; width:17em; padding-top:5px;\">donation successfull</p>";
                        }
                    }
                ?>
        </form>
        
        <table>
            <tr>
                <th>item name</th>
                <th>lab name</th>
                <th>requested by</th>
            </tr>
            <!-- php code to fetch data from rows -->
            <?php //loop till the end of data
                while ($rows=$result -> fetch_assoc())
                {
            ?>
            <tr>
            <!-- fetch data from each row of every column -->
            <td><?php echo $rows['item_name'];?></td>
            <td><?php echo $rows['lab_name'];?></td>
            <td><?php echo $rows['requested_by_or_available_to'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>

<?php
    include "systemFooter.php";
?>