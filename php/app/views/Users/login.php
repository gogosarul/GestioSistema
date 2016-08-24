<!-- Vista para inicio de sesion-->
<br>
<br>
<br>
<br>
<form class="col s12 m12 l12" action="<?php echo APP_URL; ?>users/login" method="POST">
<div class="row">
  <div class="col s12 m8 l8 offset-m2 offset-l2 ">
    <h4 class="center-align">Bienvenido a Sistema Gestión</h4>
  </div>
</div>
<div class="row">
  <div class="col s12 m8 l8 offset-m2 offset-l2">
    <div class="input-field col s12 m12 l12">
     
      <input id="username" type="text" class="validate" name="username">
      <label for="username">Usuario</label>
    </div>
    <div class="input-field col s12 m12 l12">
      
      <input id="pass" type="password" class="validate" name="password">
      <label for="pass">Contraseña</label>
    </div>
    <div class="input-field col s12 m12 ">
       <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="filled-in-box">Recordar mis datos</label>
    </div>
  </div>
</div>
<div class="row center-align">
  <div class="col s12 m8 l8 offset-m2 offset-l2">
    <div class="col s12 m12 l12 ">
      <button class="btn waves-effect waves-light grey darken-4 z-depth-3" type="submit" name="action">Enviar
        <i class="material-icons right">send</i>
      </button>
    </div>
  </div>
</div>
</form>
