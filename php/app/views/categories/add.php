<!-- Vista para añadir-->
<h2>Agrega un Categoria</h2>
<form class="col s12 m12 l12" action="<?php echo APP_URL; ?>categories/add" method="POST">
  <div class="row">
    <div class="input-field col s12 m12 l12">
      <i class="material-icons prefix">credit_card</i>
    <input id="name" type="text" name="name">
    <label for="name">Name: </label>
</div>
</div>
<div class="row">
  <div class="col s12 m12 l12">
      <button class="btn waves-effect waves-light" type="submit" name="add" value="Save">Enviar
        <i class="material-icons right">Enviar</i>
      </button>
    </div>
</div>
</form>
