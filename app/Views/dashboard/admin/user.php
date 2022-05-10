<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<!-- Sidebar -->
<?= $this->include('templates/shared/sidebar') ?>

<div id="main" class='layout-navbar'>

    <?= $this->include('templates/shared/header') ?>

    <div id="main-content">
        <div class="page-heading">
            <h3><?= $title ?></h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">

                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4>Users</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table dt-responsive nowrap table-hover table-res" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($users as $a) : ?>
                                                <tr>
                                                    <td class="col-auto">
                                                        <?= $no++; ?>
                                                    </td>
                                                    <td class="col-auto">
                                                        <?= $a->email; ?>
                                                    </td>
                                                    <td class="col-auto">
                                                        <?= $a->username; ?>
                                                    </td>
                                                    <td class="col-auto">
                                                        <?= $a->name; ?>
                                                    </td>
                                                    <td class="col-auto">
                                                        <a href="<?= base_url('admin/detail_user/' . $a->userid) ?>" class="btn btn-info">detail </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <?= $this->include('templates/shared/footer') ?>

    </div>
</div>


<?= $this->endSection(); ?>