<div class="row">
      <div class="col s12 m5">
       
     <li>
       <div >Mensaje para el usuario!! </div>
       <div><p><?php if (isset($_SESSION['username'])): ?>Bienvenido <?php echo $_SESSION['username']; ?>!  <?php endif; ?></p></div>
     </li>
     
      </div>
    </div>
