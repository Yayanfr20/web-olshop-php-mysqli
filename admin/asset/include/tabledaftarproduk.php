<button type="button" class="btn btn-success" style="margin-top: 60px;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah produk</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($allproduk as $Produk) : ?>
      <tr>
        <th scope="row"><?= $i; ?></th>
        <td><?= $Produk['nama_barang']; ?></td>
        <td><?= $Produk['kategori_barang']; ?></td>
        <td>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProduk<?= $Produk['id']; ?>" data-bs-whatever="@getbootstrap"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg></button>
          <a href="deleteProduk.php?id=<?= $Produk['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda akan menghapus Produk!');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
            </svg>
          </a>
        </td>
      </tr>
      <?php $i++; ?>
      <!-- modal -->
      <div class="modal fade" id="editProduk<?= $Produk['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $Produk["id"]; ?>">
                <input type="hidden" name="gambarLama" value="<?= $Produk["img_barang"]; ?>">
                <!-- nama produk -->
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nama produk:</label>
                  <input type="text" class="form-control" id="recipient-name" required name="nama" value="<?= $Produk['nama_barang']; ?>">
                </div>
                <!-- images produk -->
                <div class="mb-3">
                  <img src="../asset/img/<?= $Produk['img_barang']; ?>" alt="" height="150px" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Images produk:</label>
                  <input type="file" class="form-control" id="recipient-name" name="gambar">
                </div>
                <!-- harga sebelum diskon -->
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Harga sebelum diskon:</label>
                  <input type="text" class="form-control" id="recipient-name" required name="harga" value="<?= $Produk['harga_barang']; ?>">
                </div>
                <!-- harga sesudah diskon -->
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Harga sesudah diskon:</label>
                  <input type="text" class="form-control" id="recipient-name" required name="hargadiskon" value="<?= $Produk['hargadiskon_barang']; ?>">
                </div>
                <!-- kategori produk -->
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Kategori produk:</label>
                  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required name="kategori">
                    <?php foreach ($allkategori as $kategori) : ?>
                      <option selected><?= $kategori['kategori']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <!-- deskripsi produk -->
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">deskripsi produk:</label>
                  <input class="form-control" id="message-text" required name="deskripsi" value="<?= $Produk['info_barang'] ?>" required>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="editProduk">Edit produk</button>
            </div>
            </form>
          </div>
        </div>
      </div>

    <?php endforeach; ?>
  </tbody>
</table>