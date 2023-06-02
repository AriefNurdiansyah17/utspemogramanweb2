<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Menambahkan data ke tabel ID
function tambahDataID($nama, $kodeMatakuliah, $deskripsi, $dosen)
{
    global $conn;
    $sql = "INSERT INTO ID (Nama, Kode_Matakuliah, Deskripsi, Dosen) VALUES ('$nama', '$kodeMatakuliah', '$deskripsi', '$dosen')";
    if ($conn->query($sql) === TRUE) {
        echo "Data ID berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mengupdate data di tabel ID
function updateDataID($id, $nama, $kodeMatakuliah, $deskripsi, $dosen)
{
    global $conn;
    $sql = "UPDATE ID SET Nama='$nama', Kode_Matakuliah='$kodeMatakuliah', Deskripsi='$deskripsi', Dosen='$dosen' WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data ID berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menghapus data di tabel ID
function hapusDataID($id)
{
    global $conn;
    $sql = "DELETE FROM ID WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data ID berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menampilkan data dari tabel ID
function tampilDataID()
{
    global $conn;
    $sql = "SELECT * FROM ID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"] . "<br>";
            echo "Nama: " . $row["Nama"] . "<br>";
            echo "Kode Matakuliah: " . $row["Kode_Matakuliah"] . "<br>";
            echo "Deskripsi: " . $row["Deskripsi"] . "<br>";
            echo "Dosen: " . $row["Dosen"] . "<br>";
            echo "----------------------<br>";
        }
    } else {
        echo "Tidak ada data ID.";
    }
}

// Menambahkan data ke tabel Atribut
function tambahDataAtribut($nama, $nidn, $jenjangPendidikan)
{
    global $conn;
    $sql = "INSERT INTO Atribut (Nama, NIDN, Jenjang_Pendidikan) VALUES ('$nama', '$nidn', '$jenjangPendidikan')";
    if ($conn->query($sql) === TRUE) {
        echo "Data Atribut berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mengupdate data di tabel Atribut
function updateDataAtribut($id, $nama, $nidn, $jenjangPendidikan)
{
    global $conn;
    $sql = "UPDATE Atribut SET Nama='$nama', NIDN='$nidn', Jenjang_Pendidikan='$jenjangPendidikan' WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data Atribut berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menghapus data di tabel Atribut
function hapusDataAtribut($id)
{
    global $conn;
    $sql = "DELETE FROM Atribut WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data Atribut berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menampilkan data dari tabel Atribut
function tampilDataAtribut()
{
    global $conn;
    $sql = "SELECT * FROM Atribut";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"] . "<br>";
            echo "Nama: " . $row["Nama"] . "<br>";
            echo "NIDN: " . $row["NIDN"] . "<br>";
            echo "Jenjang Pendidikan: " . $row["Jenjang_Pendidikan"] . "<br>";
            echo "----------------------<br>";
        }
    } else {
        echo "Tidak ada data Atribut.";
    }
}

// Menambahkan data ke tabel Mahasiswa
function tambahDataMahasiswa($nama, $nim, $programStudi)
{
    global $conn;
    $sql = "INSERT INTO Mahasiswa (Nama, NIM, Program_Studi) VALUES ('$nama', '$nim', '$programStudi')";
    if ($conn->query($sql) === TRUE) {
        echo "Data Mahasiswa berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mengupdate data di tabel Mahasiswa
function updateDataMahasiswa($id, $nama, $nim, $programStudi)
{
    global $conn;
    $sql = "UPDATE Mahasiswa SET Nama='$nama', NIM='$nim', Program_Studi='$programStudi' WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data Mahasiswa berhasil diupdate.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menghapus data di tabel Mahasiswa
function hapusDataMahasiswa($id)
{
    global $conn;
    $sql = "DELETE FROM Mahasiswa WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data Mahasiswa berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menampilkan data dari tabel Mahasiswa
function tampilDataMahasiswa()
{
    global $conn;
    $sql = "SELECT * FROM Mahasiswa";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"] . "<br>";
            echo "Nama: " . $row["Nama"] . "<br>";
            echo "NIM: " . $row["NIM"] . "<br>";
            echo "Program Studi: " . $row["Program_Studi"] . "<br>";
            echo "----------------------<br>";
        }
    } else {
        echo "Tidak ada data Mahasiswa.";
    }
}

// Menutup koneksi ke database
$conn->close();
?>
