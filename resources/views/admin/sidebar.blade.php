<div class="d-flex align-items-stretch">
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Adanhou Peniel</h1>
        <p>Administrateur</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
    <ul class="list-unstyled">
            <li class="active"><a href="index.html"> <i class="icon-home"></i>Accuel </a></li>

            <li>
                <a href="#" onclick="toggleDropdown(event)">
                  <i class="icon-windows"></i> Chambres d'Hotels
                </a>
                <ul id="exampledropdownDropdown" class="dropdown-menu" style="display: none;">
                  <li><a href="{{url('create_chambre')}}">Ajout de chambres</a></li>
                  <li><a href="{{url('voir_chambre')}}">Voir les chambres</a></li>
                </ul>
              </li>

              <script>
              function toggleDropdown(event) {
                event.preventDefault();
                var dropdown = document.getElementById("exampledropdownDropdown");
                dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
              }
              </script>

    </ul>
  </nav>
