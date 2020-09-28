    <h1>Tambah Produk</h1>
    <center>
        <form method="POST" action="add_process.php" enctype="multipart/form-data" >
            <section>
                <table class="transparent">
                    <tr>
                        <td>
                            <label>Nama Karyawan</label>
                        </td>
                        <td>
                            <input type="text" name="nama" autofocus="" required="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Alamat</label>
                        </td>
                        <td>
                            <input type="text" name="alamat" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tanggal Lahir</label>
                        <td>
                            <input type="date" name="tgl_lahir" required="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Departement</label>
                        <td>
                            <select name="departement">
                                <option value="IT">IT</option>
                                <option value="HR">HR</option>
                                <option value="Finance">Finance</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <div>
                    <button type="submit">Simpan</button>
                </div>
            </section>
        </form>