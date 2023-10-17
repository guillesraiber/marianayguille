<!doctype html>
<html lang="en">
  <head>
    <base href="{$basehref}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libroteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <header>
     <nav class="navbar navbar-expand navbar-dark bg-primary">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="list">Productos</a>
            {if !isset($smarty.session.IS_LOGGED)}
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login">Login</a>
            </li>
             
            {else} 
              <li class="nav-item active">
              <a class="nav-link" href="cart">Carrito</a>
              </li>
              <li class="nav-item ml-auto">
                <a class="nav-link" aria-current="page" href="logout">Logout</a>
              </li>
            {/if}
        </ul>
     </nav>
    </header>      
    <div class="container">
        <div class="row">