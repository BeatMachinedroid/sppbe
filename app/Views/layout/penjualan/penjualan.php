
<?= $this->include('layout/header/header'); ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>List Penjualan</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Penjualan</li>
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
                                        Add penjualan
                                    </button>
                                    </div>
                                    <div class="col-sm-6" style="text-align:right; ">
                                        <!-- <a href="" class="btn btn-info btn-outline m-b-10">Pdf</a>
                                        <a href="" class="btn btn-info btn-outline m-b-10">Excel</a> -->
                                    </div>
                                    <div class="col-sm-3">
                                        <form action="<?= base_url('/dashboard/barang/search'); ?>" method="get">
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
                                                                <th>Nama Barang</th>
                                                                <th>Nama Pelanggan</th>
                                                                <th>Harga jual</th>
                                                                <th>Harga beli</th>
                                                                <th>Jumlah</th>
                                                                <th>Total</th>
                                                                <th>keuntungan</th>
                                                                <th class="text-left">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php if (empty($penjualan)) { ?>
                                                            <div class="alert alert-primary" role="alert">
                                                                Data is Empty
                                                            </div>
                                                        <?php } else {?>
                                                            <?php $no=1+(10*($page-1)); foreach ($penjualan as $item): ?>
                                                                <tr>
                                                                    <th scope="row"><?= $no++; ?></th>
                                                                    <td><?= $item['nama']; ?></td>
                                                                    <td><?= $item['pelanggan']; ?></td>
                                                                    <td><?= $item['harga_jual']; ?></td>
                                                                    <td>Rp.<?= $item['harga_beli']; ?></td>
                                                                    <td><?= $item['jumlah']; ?></td>
                                                                    <td>Rp. <?= $item['total']; ?></td>
                                                                    <td>Rp. <?= $item['total'] - $item['harga_beli'] ?></td>
                                                                    <td class="text-left">
                                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editbarang-<?= $item['id_penjualan'] ?>">
                                                                            <span
                                                                                class="glyphicon glyphicon-pencil"></span>
                                                                            
                                                                            <i class="ti-pencil"></i>
                                                                        </button>
                                                                        <a href="<?= base_url('/dashboard/penjualan/delete/' . $item['id_penjualan']); ?>"
                                                                            class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure ?')">
                                                                            <span class="glyphicon glyphicon-trash"></span>
                                                                            
                                                                            <i class="ti-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                    <div class="modal fade" id="editbarang-<?= $item['id_penjualan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header" style="background-color: #5873fe;">
                                                                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Edit Penjualan</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true"><i class="ti-close" style="color: white;"></i></span>
                                                                                    </button>
                                                                                </div>
                                                                                <form action="<?= base_url('dashboard/penjualan/edit/'.$item['id_penjualan']) ?>" method="post">
                                                                                <?= csrf_field(); ?>
                                                                                    <div class="modal-body">
                                                                                    
                                                                                        <div class="form-group">
                                                                                            <label class="control-label">Nama Barang</label>
                                                                                            <select class="form-control" name="barang">
                                                                                                    <option value="<?= $item['id_barang']; ?>"><?= $item['nama']; ?></option>
                                                                                                <?php foreach ($barang as $item2): ?>
                                                                                                    <option value="<?= $item2['id_barang']; ?>"><?= $item2['nama']; ?></option>
                                                                                                <?php endforeach; ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                        <label class="control-label">Jumlah</label>
                                                                                            <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" value="<?= $item['jumlah']; ?>">
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
                                                <?= $pager->Links('penjualan', 'bootstrap_template') ?>
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
                            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Add Penjualan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="ti-close" style="color: white;"></i></span>
                                </button>
                            </div>
                            <form action="<?= base_url('/dashboard/penjualan/post'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="modal-body">
                                        <div class="form-group">
                                        <input type="hidden" name="user" value="<?= session()->get('id_user'); ?>">
                                        <label class="control-label">Nama Barang</label>
                                            <select class="form-control" name="barang">
                                                <?php foreach ($barang as $item): ?>
													<option value="<?= $item['id_barang']; ?>"><?= $item['nama']; ?></option>
                                                <?php endforeach; ?>
											</select>
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label">Nama Pelanggan</label>
                                            <input type="text" class="form-control" placeholder="Pelanggan" name="pelanggan">
                                        </div>
                                        <div class="form-group">
                                        <label class="control-label">Jumlah</label>
                                            <input type="number" class="form-control" placeholder="Jumlah" name="jumlah">
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
                <?= $this->include('layout/header/footer'); ?>

