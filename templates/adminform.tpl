{include file="templates/header.tpl" }
<form action='modify/{$id}' method="POST">
  <div class="mb-3">
    <label  class="form-label">Nombre Del libro</label>
    <input type="Text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label  class="form-label">Precio</label>
    <input type="Text" class="form-control" name="precio">
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
{include file="templates/footer.tpl"}