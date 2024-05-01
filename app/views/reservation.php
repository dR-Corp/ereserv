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

        <?php if($salles && count($salle) > 0): ?>
        
        <div class="row">
            <?php foreach($salles as $salle): ?>
            <div class="col-sm-3">
                <div class="card card-outline card-primary">
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="img-div">
                            <img src="<?= STORAGES; ?>/<?= $salle["photo"] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="p-3">

                            <p class="mb-2">
                                <span class="bg-info p-1 rounded-lg font-weight-bold"><?= $salle["capacite"] ?> places</span>
                            </p>

                            <h4><?= $salle["nom"] ?></h4>
                            
                            <div>
                                <h5 class="font-weight-bold">Equipements</h5>
                                <p><?= $salle["equipements"] ?></p>
                            </div>

                            <div>
                                <a href="disponibilite-1">
                                    <button class="btn btn-info btn-sm">Vérifier disponibilité</button>
                                </a>
                                <a href="reserver-salle-1">
                                    <button class="btn btn-primary btn-sm">Réserver</button>
                                </a>
                            </div>


                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>

        <?php else: ?>
            <p class="p-3 text-info">Aucune salle n'est disponible pour le moment !</p>
        <?php endif; ?>

    </div>
</section>
<!-- /.content -->
