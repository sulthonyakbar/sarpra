<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<div class="mt-3">
	<div class="container">
      <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary mb-3">Tambah Barang</a>
        <h3>Data Barang</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($barang as $brg ) : ?>
                <tr>
                    <th scope="row"><?= $no++;?></th>
                    <td><?= $brg['nama_barang']?></td>
                    <td><?= $brg['merk']?></td>
                    <td><?= $brg['kategori']?></td>
                    <td><?= $brg['jumlah']?></td>
                    <td>
                        <a href="<?= base_url(); ?>barang/ubah/<?= $brg['id_barang']?>" class="badge text-bg-primary">Ubah</a>
                        <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang']?>" class="badge text-bg-danger" onclick="return confirm('Apa anda yakin ?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>