<?php 

include_once "header.php";

?>



<div class="signup-container">
    <form action="">
        <h4>Sign up</h4>
        <input class="fname" type="text" name="fname">
        <label class="label1" for="fname">First Name...</label>
        <input class="lname" type="text" name="lname">
        <label class="label2" for="lname">Last Name...</label>
        <input class="email" type="text" name="email">
        <label class="label3" for="email">E-mail...</label>
        <input class="pwd" type="password" name="pwd">
        <label class="label4" for="pwd">Password...</label>
        <input class="rpwd" type="password" name="rpwd">
        <label class="label5" for="rpwd">Repeat Password...</label>
        <button class="submitbtn" type="submit">Sign up</button>
    </form>
</div>



<?php 

include_once "footer.php";

?>