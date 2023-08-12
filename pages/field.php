<?php include('styling.php'); ?>
<section class="right">
        <a href="../index.php" class="waves-effect waves-light btn-small"> Go Home</a>
</section>
<form action="" method="post" class="grey lighten-3">
        <label>Enter your full name:</label>
        <input type="text" name="fullName" value="">

        <label>Enter your Mobile Number:</label>
        <input type="tel" name="mobile" value="">

        <label>Enter your address:</label>
        <input type="text" name="address" value="">

        <label>Gender</label>
  <select class="browser-default">
    <option value="" disabled selected>Choose your option</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="ratherNotSay">Rather not say</option>
  </select>
      
  <label>Enter your occupation:</label>
        <input type="text" name="occupation" value="">

        <div class="center">
            <input type="submit" name="submit" value="submit" 
            class="btn brand z-depth-0">
        </div>

</form>

    