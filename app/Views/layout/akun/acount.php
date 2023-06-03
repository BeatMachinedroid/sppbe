
<?= $this->include('layout/header/header'); ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>List Barang</h1>
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
                                        Add New User
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
                                                                <th>Username</th>
                                                                <th>Email</th>
                                                                <th>Role</th>
                                                                <th>Create At</th>
                                                                <th class="text-left">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php if (empty($user)) { ?>
                                                            <div class="alert alert-primary" role="alert">
                                                                Data is Empty
                                                            </div>
                                                        <?php } else {?>
                                                            <?php $no=1+(10*($page-1)); foreach ($user as $item): ?>
                                                                <tr>
                                                                    <th scope="row"><?= $no++; ?></th>
                                                                    <td><?= $item['username']; ?></td>
                                                                    <td><?= $item['email']; ?></td>
                                                                    <td>Rp.<?= $item['role']; ?></td>
                                                                    <td><?= date('d / m / Y', strtotime($item['created_at'])); ?></td>
                                                                    <td class="text-left">
                                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editbarang-<?= $item['id_user'] ?>">
                                                                            <span
                                                                                class="glyphicon glyphicon-pencil"></span>
                                                                            
                                                                            <i class="ti-pencil"></i>
                                                                        </button>
                                                                        <a href="<?= base_url('/dashboard/barang/delete/' . $item['id_user']); ?>"
                                                                            class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure ?')">
                                                                            <span class="glyphicon glyphicon-trash"></span>
                                                                            
                                                                            <i class="ti-trash"></i>
                                                                        </a>
                                                                    </td>
                                                                    <div class="modal fade" id="editbarang-<?= $item['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header" style="background-color: #5873fe;">
                                                                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Edit User</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true"><i class="ti-close" style="color: white;"></i></span>
                                                                                    </button>
                                                                                </div>
                                                                                <form action="<?= base_url('dashboard/barang/edit/'.$item['id_user']) ?>" method="post">
                                                                                <?= csrf_field(); ?>
                                                                                    <div class="modal-body">
                                                                                    
                                                                                        <div class="form-group">
                                                                                            <input type="text" class="form-control" placeholder="Username" name="username" value="<?= $item['username']; ?>">
                                                                                        </div>
                                                                                    
                                                                                        <div class="form-group">
                                                                                            <input type="email" class="form-control" placeholder="Email" name="stok" value="<?= $item['email']; ?>">
                                                                                        </div>
                                                                                    
                                                                                        <div class="form-group">
                                                                                            <input type="text" class="form-control" placeholder="Role" name="role" value="<?= $item['role']; ?>">
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
                                                <?= $pager->Links('barang', 'bootstrap_template') ?>
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
                <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Add Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="ti-close" style="color: white;"></i></span>
                </button>
            </div>
            <form action="<?= base_url('/dashboard/barang/post'); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama barang" name="nama">
                        </div>
                    
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Stock" name="stok">
                        </div>
                       
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Harga satuan" name="harga-jual">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Harga beli" name="harga-beli">
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

