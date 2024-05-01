<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">
                    <?= $titrePage; ?>
                    <div class="" id=""></div>
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- ici on va afficher les anciennes réservations de la salle -->

        <div class="row">

        <div class="card col-sm-12">
              <div class="card-header border-transparent">
                <h3 class="card-title">Réservations en cours</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">

                  <?php if($reservations && count($reservations) > 0): ?>

                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>N°</th>
                      <th>Date début</th>
                      <th>Date fin</th>
                      <th>Statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($reservations as $reservation): ?>
                    <tr>
                      <td><?= $reservation["id"] ?></td>
                      <td><?= $reservation["date_debut"] ?></td>
                      <td><?= $reservation["date_fin"] ?></td>
                      <td><span class="badge badge-success">Réservé</span></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>

                  <?php else: ?>
                    <p class="p-3 text-info">Aucune réservation n'est en cours pour cette salle. Elle est entièrement libre !</p>
                  <?php endif; ?>

                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>
            
        </div>
        
    </div>
</section>
<!-- /.content -->
