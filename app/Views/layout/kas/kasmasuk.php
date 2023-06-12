
<?= $this->include('layout/header/header'); ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>List Kas Masuk</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Barang</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3" style="text-align:left; ">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                                        Add Kas
                                    </button>
                                    </div>
                                    <div class="col-sm-6" style="text-align:right; ">
                                        <!-- <a href="" class="btn btn-info btn-outline m-b-10">Pdf</a>
                                        <a href="" class="btn btn-info btn-outline m-b-10">Excel</a> -->
                                    </div>
                                    <div class="col-sm-3">
                                        <form action="<?= base_url('/dashboard/kas/masuk/search'); ?>" method="get">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search" name="search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <?php if(session()->getFlashdata('success')) : ?>
                                                            <div class="alert alert-success">
                                                                <?= session()->getFlashdata('success') ?>
                                                            </div>
                                                        <?php endif; ?>
                                                            <tr>
                                                                <th>#</th>
                                                                
                                                                <th>Jenis Kas</th>
                                                                <th>ID Penjualan</th>
                                                                <th>Keterangan</th>
                                                                <th>Total Masuk</th>
                                                                <th>Tanggal Masuk</th>
                                                                <th class="text-left">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php if (empty($masuk)) { ?>
                                                            <div class="alert alert-primary" role="alert">
                                                                Data is Empty
                                                            </div>
                                                        <?php } else {?>
                                                            <?php $no=1+(10*($page-1)); foreach ($masuk as $item): ?>
                                                                <tr>
                                                                    <th scope="row"><?= $no++; ?></th>
                                                                
                                                                    <td><?= $item['jenis_kas']; ?></td>
                                                                    <td style="text-aligen: center"><?= $item['penjualan_id']; ?></td>
                                                                    <td><?= $item['keterangan']; ?></td>
                                                                    <td>Rp.<?= $item['total_masuk']; ?></td>
                                                                    <td><?= date('d / m / Y', strtotime($item['created_at'])); ?></td>
                                                                    <td class="text-left">
                                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editbarang-<?= $item['id_kas_masuk'] ?>">
                                                                            <span
                                                                                class="glyphicon glyphicon-pencil"></span>
                                                                            
                                                                            <i class="ti-pencil"></i>
                                                                        </button>
                                                                        <a href="<?= base_url('dashboard/kas/masuk/delete/' . $item['id_kas_masuk']); ?>"
                                                                            class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure ?')">
                                                                            <span class="glyphicon glyphicon-trash"></span>
                                                                            
                                                                            <i class="ti-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                    <div class="modal fade" id="editbarang-<?= $item['id_kas_masuk'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header" style="background-color: #5873fe;">
                                                                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Edit Kas</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true"><i class="ti-close" style="color: white;"></i></span>
                                                                                    </button>
                                                                                </div>
                                                                                <form action="<?= base_url('dashboard/kas/masuk/edit/'.$item['id_kas_masuk']) ?>" method="post">
                                                                                <?= csrf_field(); ?>
                                                                                    <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control" placeholder="Jenis Kas Masuk" name="jenis" value="<?= $item['jenis_kas']; ?>">
                                                                                    </div>
                                                                                
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control" placeholder="total kas masuk" name="total" value="<?= $item['total_masuk']; ?>">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" value="<?= $item['keterangan']; ?>">
                                                                                    </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                                <?= $pager->Links('masuk', 'bootstrap_template') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #5873fe;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Add Kas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="ti-close" style="color: white;"></i></span>
                </button>
            </div>
            <form action="<?= base_url('/dashboard/kas/masuk/post'); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="modal-body">
                        <input type="hidden" name="user" value="<?= session()->get('id_user'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Jenis Kas Masuk" name="jenis">
                        </div>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="total kas masuk" name="total">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan">
                        </div>

                        <!-- <div class="form-group">
                            <input type="text" class="form-control" placeholder="Harga beli" name="harga-beli">
                        </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
                <?= $this->include('layout/header/footer'); ?>

