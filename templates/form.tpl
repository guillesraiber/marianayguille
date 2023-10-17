{include file="templates/header.tpl"}
<!--formulario-->
<form action="validate" method="POST" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">nombre</label>
    <input type="text" class="form-control" id="inputAddress"name="nombre">
  </div>
   
  {if $error} 
    <div class="alert alert-danger mt-3">
        {$error}
    </div>
    {/if}



  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
{include file="templates/footer.tpl"}