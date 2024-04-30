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
                    <tr>
                      <td>1</td>
                      <td>15/05/2024</td>
                      <td>15/10/2024</td>
                      <td><span class="badge badge-success">Réservé</span></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            </div>
            
        </div>
        
    </div>
</section>
<!-- /.content -->
