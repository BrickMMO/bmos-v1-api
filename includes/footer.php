   
      <?php if(isset($_SESSION['id'])): ?>

         <hr>

         <div class="left">
            <a href="dashboard.php">Dashboard</a> | 
            <a href="logout.php">Logout</a>
         </div>

      <?php endif; ?>

   </div>

   
   
   <pre><?php print_r($_GET); ?></pre>
   <pre><?php print_r($_POST); ?></pre>
   <pre><?php print_r($_SESSION); ?></pre>
   
   

</body>
</html>
