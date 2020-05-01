<?php


$query = "SELECT * FROM artikel ";


$row = $this->db->query($query)->row_array();

?>
<?= $row['judul_artikel']; ?>
<?= $row['isi_artikel']; ?>

