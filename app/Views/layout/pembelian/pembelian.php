<?= $this->include('layout/header/header') ?>
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                        href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pembelian</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0 pt-2">List Pembelian</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0  me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none"><?= session()->get('username') ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="container-fluid py-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3" style="text-align:left; ">
                            <?php if (session()->get('role') == 'admin') {?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                                Add Pembelian
                            </button>
                            <?php }?>
                        </div>
                        <div class="col-sm-6" style="text-align:right; ">
                            <!-- <a href="" class="btn btn-info btn-outline m-b-10">Pdf</a>
                                        <a href="" class="btn btn-info btn-outline m-b-10">Excel</a> -->
                        </div>
                        <div class="col-sm-3">
                            <form action="<?= base_url('/dashboard/pembelian/search') ?>" method="get" id="search">
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Search" name="search"
                                        id="tanggal">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-4">

                                <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center justify-content-center mb-0">
                                            <thead>
                                            <?php if(session()->getFlashdata('success')) : ?>
                                                            <div class="alert alert-success">
                                                                <?= session()->getFlashdata('success') ?>
                                                            </div>
                                                        <?php endif; ?>
                                                <tr>
                                                    <th class="text-left text-uppercase text-xs font-weight-bolder">No
                                                    </th>
                                                    <th class="text-center text-uppercase text-xs font-weight-bolder">
                                                        Tanggal</th>
                                                    <th class="text-center text-uppercase text-xs font-weight-bolder">
                                                        jenis Kas</th>
                                                    <th class="text-center text-uppercase text-xs font-weight-bolder">
                                                        Keterangan</th>
                                                    <th class="text-center text-uppercase text-xs font-weight-bolder">
                                                        jumlah</th>
                                                    <th class="text-center text-uppercase text-xs font-weight-bolder">
                                                        total</th>

                                                    <?php if (session()->get('role') == 'admin') {?>
                                                    <th class="text-center text-uppercase text-xs font-weight-bolder">
                                                        Action</th>
                                                    <?php }?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($pembelian)) { ?>
                                                <div class="alert alert-primary " role="alert">
                                                    Data is Empty
                                                </div>
                                                <?php } else {?>
                                                <?php $no=1+(10*($page-1)); foreach ($pembelian as $item): ?>
                                                <tr>
                                                    <td class="text-center"><?= $no++ ?></td>

                                                    <td class="text-center"><?= $item['tanggal'] ?></td>
                                                    <td class="text-center"><?= $item['nama'] ?></td>
                                                    <td class="text-center"><?= $item['keterangan_pembelian'] ?></td>
                                                    <td class="text-center"><?= $item['jumlah'] ?></td>
                                                    <td class="text-center">Rp. <?= $item['total'] ?></td>
                                                    <td class="text-center">
                                                        <?php if (session()->get('role') == 'admin') {?>
                                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                            data-target="#editbarang-<?= $item['id_pembelian'] ?>">
                                                            <span class="glyphicon glyphicon-pencil"></span>

                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </button>
                                                        <a href="<?= base_url('/dashboard/pembelian/delete/' . $item['id_pembelian']) ?>"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure ?')">
                                                            <span class="glyphicon glyphicon-trash"></span>

                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                    <?php }?>
                                                    <div class="modal fade" id="editbarang-<?= $item['id_pembelian'] ?>"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header"
                                                                    style="background-color: #5873fe;">
                                                                    <h5 class="modal-title" id="exampleModalLabel"
                                                                        style="color: white;">Edit Pembelian</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true"><i class="ti-close"
                                                                                style="color: white;"></i></span>
                                                                    </button>
                                                                </div>
                                                                <form
                                                                    action="<?= base_url('dashboard/pembelian/edit/' . $item['id_pembelian']) ?>"
                                                                    method="post">
                                                                    <?= csrf_field() ?>
                                                                    <div class="modal-body">


                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label">keterangan</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Keterangan"
                                                                                name="keterangan"
                                                                                value="<?= $item['keterangan_pembelian'] ?>"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Jenis Kas</label>
                                                                            <select class="form-control" name="jenis">
                                                                                <?php foreach ($jenis as $item2): ?>
                                                                                <option value="<?= $item2['id_jenis_kas'] ?>"><?= $item2['nama'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Jumlah</label>
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Jumlah" name="jumlah"
                                                                                value="<?= $item['jumlah'] ?>"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label">Total</label>
                                                                            <input type="number" class="form-control"
                                                                                placeholder="total" name="total"
                                                                                value="<?= $item['total'] ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label">Tanggal</label>
                                                                            <input type="date" class="form-control"
                                                                                name="tanggal"
                                                                                value="<?= $item['tanggal'] ?>"
                                                                                required>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-danger"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save</button>
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?= $pager->Links('pembelian', 'bootstrap_template') ?>
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
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Add Pembelian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ti-close" style="color: white;"></i></span>
                    </button>
                </div>
                <form action="<?= base_url('/dashboard/pembelian/post') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label">keterangan</label>
                            <input type="text" class="form-control" placeholder="Keterangan" name="keterangan"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jenis Kas</label>
                            <select class="form-control" name="jenis">
                                <?php foreach ($jenis as $item2): ?>
                                <option value="<?= $item2['id_jenis_kas'] ?>"><?= $item2['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jumlah</label>
                            <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <input type="number" class="form-control" placeholder="total" name="total" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
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
    <?= $this->include('layout/header/footer') ?>

    ?>
