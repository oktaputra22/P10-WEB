<div class="row justify-content-between">
    <div class="col-10"><b>Kategori</b></div>
    <div class="col-2 d-flex justify-content-end align-items-end">
        <button btn btn-dark btn-sm>add</button>
    </div>
</div>
<hr>
<table class="table table-sm border border-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">No</th>
            <th scope="col">Nama</th>
            <th scope="col" width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $stmt = "SELECT * FROM detail_pesanan 
        JOIN pesanan ON pesanan.id_pesanan = detail_pesanan.id_pesanan 
        JOIN produk ON produk.id_produk = detail_pesanan.id_produk 
        JOIN kategori ON kategori.id_kategori = produk.id_kategori";
        $datas = mysqli_query($con, $stmt);
        while ($data = mysqli_fetch_array($datas)) {
        ?>
        
            <tr>
                <th scope="row"><?= $data['id_produk'] ?></th>
                <td><?= $data['nama_produk'] ?></td>
                <td>
                    <button class="btn btn-dark btn-sm">Edit</button>
                    <button class="btn btn-dark btn-sm">Delete</button>
                </td>
            </tr>
        <?php } ?>
  </tbody>
</table>