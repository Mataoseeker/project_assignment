<?php include('styling.php'); ?>

        <div class="container row">
        <form method="get" action="search_results.php">

            <div class="input-field col s6">
                <input type="text" name="search_term" id="search_term" placeholder="Enter username">
            </div>
            <div class="input-field col s6">
               <input type="submit" value="search" class=" waves-effect waves-light btn-small">
            </div>
                   
        </form>
        </div>
       
    <footer class="center">
        <a href="../index.php" class="waves-effect waves-light btn-small"> Go Home</a>
    </footer>