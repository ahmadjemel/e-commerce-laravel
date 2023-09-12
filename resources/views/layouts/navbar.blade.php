<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p> Categories<i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('category.create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajouter categorie</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste des categories</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
             Produits
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route("product.create") }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajouter produit</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route("product.index") }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste des produits</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Admins
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ajouter admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste des admins</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
             Clients
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item">
            <a href="index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste des clients</p>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
           Commandes
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Liste des commandes </p>
            </a>
          </li>

        </ul>
      </li>

        <li  class="nav-item">
            <button class="w-100 btn btn-danger m-1 b-1">Déconnexion</button>
        </li>
    </ul>
  </nav>
