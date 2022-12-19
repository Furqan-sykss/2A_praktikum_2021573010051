<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_daftar_article
    LEFT JOIN tb_kategori_article ON tb_kategori_article.id_kat_article = tb_daftar_article.kategori");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$select_kategori = mysqli_query($conn, "SELECT id_kat_article,kategori_article from tb_kategori_article");
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            <b>
                <h5>Halaman Menu</h5>
            </b>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahArtikel">
                        Tambah Article
                    </button>
                </div>
            </div>

            <!-- Modal Tambah Artikel Baru-->
            <div class="modal fade" id="ModalTambahArtikel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Article</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_artikel.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control py-3" id="uploadFoto" placeholder="your name" name="foto" required>
                                            <label class="input-group-text" for="uploadFoto">Upload Foto Article</label>
                                            <div class="invalid-feedback">
                                                Masukkan File Foto Article
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="judul" name="judul" required>
                                            <label for="floatingInput">Judul Article</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Artikel.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="judul 2" name="judul2">
                                            <label for="floatingpassword">Judul 2</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan" name="keterangan">
                                            <label for="floatingpassword">Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="kategori" required>
                                                <option selected hidden value="">Pilih Kategori Article
                                                <option>
                                                    <?php
                                                    foreach ($select_kategori as $value) {
                                                        echo "<option value=" . $value['id_kat_article'] . ">$value[kategori_article] </option>";
                                                    }
                                                    ?>
                                            </select>
                                            <label for="floatingInput">Kategori Article</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Article.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_artikel_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal Tambah Artikel Baru-->
            <?php
            if (empty($result)) {
                echo "data Artikel tidak ada";
            } else {
                foreach ($result as $row) {
            ?>
                    <!-- Modal View-->
                    <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Artikel</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_artikel.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['judul'] ?>">
                                                    <label for="floatingInput">Judul Artikel</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Judul Artikel.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['judul2'] ?>">
                                                    <label for="floatingpassword">Judul 2</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['keterangan'] ?>">
                                                    <label for="floatingpassword">Keterangan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select disabled class="form-select" aria-label="Default select example">
                                                        <option selected hidden value="">Pilih Kategori Artikel
                                                        <option>
                                                            <?php
                                                            foreach ($select_kategori as $value) {
                                                                if ($row['kategori'] == $value['id_kat_article']) {
                                                                    echo "<option selected value=" . $value['id_kat_article'] . ">$value[kategori_article] </option>";
                                                                } else {
                                                                    echo "<option value=" . $value['id_kat_article'] . ">$value[kategori_article] </option>";
                                                                }
                                                            }
                                                            ?>
                                                    </select>
                                                    <label for="floatingInput">Kategori Makanan atau Minumana</label>
                                                    <div class="invalid-feedback">
                                                        Pilih Kategori Makanan atau Minuman.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <!-- <button type="submit" class="btn btn-primary" name="input_artikel_validate" value="12345" disabled>Save changes</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal View-->

                    <!-- Modal Edit-->
                    <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Makanan dan Minuman</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_edit_artikel.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control py-3" id="uploadFoto" placeholder="your name" name="foto" required>
                                                    <label class="input-group-text" for="uploadFoto">Upload Foto Artikel</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan File Foto Artikel
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Judul Artikel" name="judul" required value="<?php echo $row['judul'] ?>">
                                                    <label for="floatingInput">Judul Artikel</label>
                                                    <div class="invalid-feedback">
                                                        Masukkan Judul Artikel.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Judul 2" name="judul2" value="<?php echo $row['judul2'] ?>">
                                                    <label for="floatingpassword">Judul 2</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan" name="keterangan" value="<?php echo $row['keterangan'] ?>">
                                                    <label for="floatingpassword">Keterangan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" aria-label="Default select example" name="kategori">
                                                        <option selected hidden value="">Pilih Kategori Artikel
                                                        <option>
                                                            <?php
                                                            foreach ($select_kategori as $value) {
                                                                if ($row['kategori_article'] == $value['id_kat_article']) {
                                                                    echo "<option selected value=" . $value['id_kat_article'] . ">$value[kategori_article] </option>";
                                                                } else {
                                                                    echo "<option value=" . $value['id_kat_article'] . ">$value[kategori_article] </option>";
                                                                }
                                                            }
                                                            ?>
                                                    </select>
                                                    <label for="floatingInput">Kategori Makanan atau Minumana</label>
                                                    <div class="invalid-feedback">
                                                        Pilih Kategori Makanan atau Minuman.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="input_artikel_validate" value="12345">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Edit-->

                    <!-- Modal Delete-->
                    <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Daftar Menu</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_delete_artikel.php" method="post">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                        <div class="col-lg-12">
                                            <b>Apakah anda ingin menghapus Artikel </b> <b><i><?php echo $row['judul'] ?></i></b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" name="input_artikel_validate" value="12345">Hapus</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Delete-->


                <?php
                }


                ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No </th>
                                <th scope="col">Foto Artikel </th>
                                <th scope="col">Judul Article</th>
                                <th scope="col">Judul 2 Article</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jenis Menu</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) {

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td>
                                        <div style="width: 90px">
                                            <img src="assets/img/<?php echo $row['foto'] ?>" class="img-thumbnail" alt="...">
                                        </div>
                                    </td>
                                    <td><?php echo $row['judul'] ?></td>
                                    <td><?php echo $row['judul2'] ?></td>
                                    <td><?php echo $row['keterangan'] ?></td>
                                    <td><?php echo ($row['jenis_kategori'] == 1) ? "Filsafat" : "Sejarah" ?></td>
                                    <td><?php echo $row['kategori_article'] ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i class="bi bi-trash3"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>