<?php
    include_once 'header.php';
?>

<section class="signup-form">
    <h2>Sign up</h2>
    <form action="includes/signup.inc.php" method="post"> <!-- inc means include file, user wont see -->
      <input type="text" name="name" placeholder="Full name...">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwdrepeat" placeholder="Repeat password">
        <button type="submit" name="submit">Sign up</button>
    </form>
</section>



<?php
    include_once 'footer.php';
?>
