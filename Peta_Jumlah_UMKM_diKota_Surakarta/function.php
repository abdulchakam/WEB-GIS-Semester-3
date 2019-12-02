<?php
class umkm{
    var $db;
    var $tbl= "UMKM";
    public function __construct(){
            $host='localhost';
            $user='root';
            $pass='';
            $dbase='db_surakarta';
        
            try {
                $this->db = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
                // atur mode pemberitahuan kesalahan
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            catch(PDOException $e)
                {
                echo "Terdapat kegagalan koneksi karena : " . $e->getMessage();
                }
            return $this->db;	
        }		

// Perintah Fungsi Menampilkan data 
    function tampil_data($Kode_Kec=''){
		
            $sql="SELECT * FROM $this->tbl ORDER BY Kode_Kec"; 
        
        $stmt=$this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    function fetch($pqry){
        return $pqry->fetch(PDO::FETCH_ASSOC);
    }
// Akhir Perintah Menampilkan data


//membuat Fungsi edit 
public function edit_data($qkode){
      
       $sql = "SELECT * FROM $this->tbl WHERE Kode_Kec ='$qkode'";
        $stmt=$this->db->prepare($sql);
        $stmt->execute();
      
        while($data=$stmt->fetch(PDO::FETCH_ASSOC)){
        $hasil[] = $data;
        }
      return $hasil;
    }
    
    public function update($sv_provinsi, $sv_namaKota, $sv_namaKec, $sv_kode, $sv_jml ){
      
      $sql="UPDATE $this->tbl SET Provinsi='$sv_provinsi', Nama_Kota='$sv_namaKota', Nama_Kec='$sv_namaKec', data_Jml=$sv_jml  WHERE Kode_Kec=$sv_kode ";
      $stmt=$this->db->prepare($sql);
      $stmt->execute();
      
     }
      
}

?>