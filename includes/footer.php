<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Lorem ipsum</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
        </div>
        
        <div class="col l3 s12 right">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">My interests</a></li>
            <li><a class="white-text" href="#!">RSS-Feed</a></li>
            <li><a class="white-text" href="#!">My Weather</a></li>
            <li><a class="white-text" href="#!">Form</a></li>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      &copy; Tim ten Voorde <?php echo date('Y'); ?>
        <div class="float-right" style="float: right;">
        <?php 
            $f = round(($array[1] - 32) * (5/9) ,1);  
            echo "Het is " . $f . " graden in " . $array[0];
        ?>
        </div>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
    
      $(document).ready(function(){
        $('.collapsible').collapsible();
      });

      $(document).ready(function(){
        $('select').formSelect();
      });
        
        
  </script>
  </body>
</html>