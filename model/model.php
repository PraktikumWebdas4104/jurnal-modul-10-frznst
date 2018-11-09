<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		// var $user="root";
		// var $lokasi="localhost";
		// var $pass="";
		// var $db="a";
		var $conn;
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			$this->conn=mysqli_connect("localhost","root","","a");
			
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			//query select*from 
			$query= "SELECT * FROM b";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			$query="SELECT * FROM b where nim='$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query update nim, nama, angkatan, fakultas, prodi
			$query= "UPDATE b set nim='$nim',nama='$nama',angkatan='$angkatan',fakultas='$fakultas',prodi='$prodi' WHERE nim='$nim' ";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			$query="DELETE FROM b WHERE nim='$nim' ";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query insert nim,nama, angkatan, fakultas, prodi
			$query="INSERT INTO b VALUES('$nim', '$nama', '$angkatan', '$fakultas', '$prodi')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>