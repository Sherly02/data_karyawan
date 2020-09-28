<h1> Data Karyawan </h1>
<table>
    <thead>
    <tr>
        <th>Nama Karyawan</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Department</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM tbl_karyawan ORDER BY id_karyawan ASC";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die ("Query Error: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
    }

    while($row = mysqli_fetch_assoc($result))
    {
        ?>

        <tr>
            <td>
                <?php echo $row['nama'];?>
            </td>
            <td>
                <?php echo $row['alamat'];?>
            </td>
            <td>
                <?php echo $row['tgl_lahir'];?>
            </td>
            <td>
                <?php echo $row['departement'];?>
            </td>
        </tr>

    <?php } ?>
    </tbody>
</table>
<br>
<a class="button" href="index.php?page=add-karyawan">+ Tambah Karyawan<a/>