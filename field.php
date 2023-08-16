<?php include('styling.php'); ?>
<section class="right">
        <a href="../index.php" class="waves-effect waves-light btn-small"> Go Home</a>
</section>
<form action="field_data.php" method="post" class="grey lighten-3">
        <label>Enter your full name:</label>
        <input type="text" name="fullname" value="">

        <label>Enter your Mobile Number:</label>
        <input type="tel" name="mobile" value="">

        <label>Enter your address:</label>
        <input type="text" name="address" value="">

        <p>
      <label>
        <input name="gender" value="Male" type="radio" />
        <span>Male</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="gender" type="radio" value="Female" />
        <span>Female</span>
      </label>
    </p>
      
  <label>Enter your occupation:</label>
        <input type="text" name="occupation" value="">

        <div class="center">
            <input type="submit" name="submit" value="submit" 
            class="btn brand z-depth-0">
        </div>

</form>

    