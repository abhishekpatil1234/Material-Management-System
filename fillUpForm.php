<?php
    include "systemHeader.php"
?>
    <section>
        <form action="./include/fillUpForm.inc.php" method="post" id="enter-material">
            <legend>Fill Up Form</legend>
            <input type="text" name="item_name" placeholder="enter name of item" class="text-input">
            <input type="text" name="lab_name" placeholder="enter lab name" class="text-input">
            <input type="text" name="requested_by_or_available_to" placeholder="enter your name" class="text-input">
            <label class="radio-input-left">
                <input type="radio" name="sub_type" value="request" >request
            </label>
            <label class="radio-input-right">
                <input type="radio" name="sub_type" value="extra" >extra
            </label>
            <button type="submit"  name="submit" class="btnSubmit">submit</button>
        </form>
    </section>
<?php
    include "systemFooter.php"
?>