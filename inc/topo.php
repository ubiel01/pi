<style>
  .fundo{
    background-color: #000000 !important;   
  }
  .fonte-branca{
    color: white !important;
  }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary fundo">
  <div class="container-fluid">
    <a class="navbar-brand fonte-branca" href="pizzaria.php">Pizzaria BOSS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fonte-branca"><i class="bi bi-list"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fonte-branca" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cardápio
          </a>
          <ul class="dropdown-menu" aria-current="page">
            <li><a class="dropdown-item" href="pizzasal.php">Pizzas Salgadas</a></li>
            <li><a class="dropdown-item" href="pizzadoc.php">Pizzas Doces</a></li>
            <li><a class="dropdown-item" href="bebida.php">Bebidas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active fonte-branca" aria-current="page" href="sobre.php">Sobre nós</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link active fonte-branca" aria-current="page" href="contato.php">Contato</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
        <button class="btn btn-outline-warning fonte-branca" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>