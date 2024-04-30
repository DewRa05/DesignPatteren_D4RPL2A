<?php

class Pertanian {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    // Contoh fungsi untuk membuat tabel pertanian
    public function createTable() {
        $sql = "CREATE TABLE IF NOT EXISTS tanaman (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama_tanaman VARCHAR(50) NOT NULL,
            jenis_tanaman VARCHAR(50) NOT NULL,
            jumlah INT(6) NOT NULL,
            harga DECIMAL(10,2) NOT NULL
        )";

        if ($this->db->query($sql) === TRUE) {
            echo "Tabel tanaman berhasil dibuat atau sudah ada.";
        } else {
            echo "Error: " . $this->db->error;
        }
    }

    // Fungsi untuk menambah data tanaman
    public function tambahTanaman($nama, $jenis, $jumlah, $harga) {
        $sql = "INSERT INTO tanaman (nama_tanaman, jenis_tanaman, jumlah, harga)
                VALUES ('$nama', '$jenis', $jumlah, $harga)";

        if ($this->db->query($sql) === TRUE) {
            echo "Data tanaman berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->error;
        }
    }

    // Fungsi untuk mengambil data tanaman
    public function ambilTanaman() {
        $sql = "SELECT * FROM tanaman";
        $result = $this->db->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Nama: " . $row["nama_tanaman"]. " - Jenis: " . $row["jenis_tanaman"]. " - Jumlah: " . $row["jumlah"]. " - Harga: " . $row["harga"]. "<br>";
            }
        } else {
            echo "Tidak ada data tanaman.";
        }
    }

    // Fungsi untuk menghapus data tanaman berdasarkan ID
    public function hapusTanaman($id) {
        $sql = "DELETE FROM tanaman WHERE id=$id";

        if ($this->db->query($sql) === TRUE) {
            echo "Data tanaman dengan ID $id berhasil dihapus.";
        } else {
            echo "Error: " . $sql . "<br>" . $this->db->error;
        }
    }
}
