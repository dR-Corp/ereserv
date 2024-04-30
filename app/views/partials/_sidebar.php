<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }    
    $request = "/".$_GET['r'];
?>

<div class="sidebar" style="background-color: #19233e;">

    <nav class="mt-2 mb-5">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item mt-1 <?php if($request == '/home' || $request == '/') echo 'menu-open' ?>">
            <a href="home" class="nav-link font-weight-bold <?php  if($request == '/home' || $request == '/') echo 'active'  ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Accueil</p>
            </a>
        </li>

        <li class="nav-item mt-1 <?php if($request == '/reserver') echo 'menu-open' ?>">
            <a href="reserver" class="nav-link font-weight-bold <?php if($request == '/reserver') echo 'active' ?>">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>Réserver salle</p>
            </a>
        </li>
        
        <li class="nav-item mt-1 <?php if($request == '/suivre') echo 'menu-open' ?>">
            <a href="suivre" class="nav-link font-weight-bold <?php if($request == '/suivre') echo 'active' ?>">
                <i class="nav-icon fas fa-bullseye"></i>
                <p>Suivre une demande</p>
            </a>
        </li>
        
        <li class="nav-item mt-1 <?php if($request == '/salles') echo 'menu-open' ?>">
            <a href="salles" class="nav-link font-weight-bold <?php if($request == '/salles') echo 'active' ?>">
                <i class="nav-icon fas fa-chart-bar"></i>
                <p>Salles</p>
            </a>
        </li>
        
        <li class="nav-item mt-1 <?php if($request == '/reservations') echo 'menu-open' ?>">
            <a href="reservations" class="nav-link font-weight-bold <?php if($request == '/reservations') echo 'active' ?>">
                <i class="nav-icon fas fa-bars"></i>
                <p>Réservations</p>
            </a>
        </li>
        
        <li class="nav-item mt-1 <?php if($request == '/users') echo 'menu-open' ?>">
            <a href="users" class="nav-link font-weight-bold <?php if($request == '/users') echo 'active' ?>">
                <i class="nav-icon fas fa-bars"></i>
                <p>Utilisateurs</p>
            </a>
        </li>
       
        
    </nav>
        
</div>

<script>
    $(function () {
        
    })
</script>