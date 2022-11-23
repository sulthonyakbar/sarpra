<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Data Barang</title>
</head>
<body>
    <div class="container">
    <div class="row mt-3">
    <div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Barang</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label name="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                </div>
                <div class="form-group">
                    <label name="merk" class="form-label">Merk</label>
                    <input type="text" class="form-control" id="merk" name="merk">
                </div>
                <div class="form-group">
                    <label name="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori">
                </div>
                <div class="form-group">
                    <label name="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control mb-3" id="jumlah" name="jumlah">
                </div>
                <?php if(validation_errors()) : ?>
                    <div class="alert alert-danger" role="start">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>                
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>