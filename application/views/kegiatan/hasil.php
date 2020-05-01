<?php


$query = "SELECT * FROM artikel ";


$row = $this->db->query($query)->row_array();
echo "<h2>" . $row['judul_artikel'] . "</h2>";
echo "<p>" . $row['tgl_artikel'] . "</p>";
echo "<p>" . $row['isi_artikel'] . "</p>";

