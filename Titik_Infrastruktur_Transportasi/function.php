<?php
class transportasi{
    var $db;
    var $tbl= "transportasi";
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
    function tampil_data($id=''){
		
            $sql="SELECT * FROM $this->tbl ORDER BY Id"; 
        
        $stmt=$this->db->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    function fetch($pqry){
        return $pqry->fetch(PDO::FETCH_ASSOC);
    }
// Akhir Perintah Menampilkan data


//membuat fungsi tambah data
function tambah_data($p_id,$p_kat,$p_alamat,$p_nama,$p_lat,$p_lng){	
			
	//buat perintah sql
	$sql="INSERT INTO $this->tbl VALUES('$p_id','$p_kat','$p_alamat','$p_nama','$p_lat','$p_lng')";

	//simpan ke database
	$stmt=$this->db->prepare($sql);
	$stmt->execute();
	
	//tutup koneksi
	$this->db = null;
	
}



//membuat fungsi hapus data
function hapus_data($qid){
	//buat perintah sql
	$sql="DELETE FROM $this->tbl WHERE Id='$qid'";

	//hapus data 
	$stmt=$this->db->prepare($sql);
	$stmt->execute();

	    //kembali ke form
	    header ("location: lihatData.php");
	}

//membuat Fungsi edit 
public function edit_data($qid){
      
       $sql = "SELECT * FROM $this->tbl WHERE Id = '$qid' ";
        $stmt=$this->db->prepare($sql);
        $stmt->execute();
      
        while($data=$stmt->fetch(PDO::FETCH_ASSOC)){
        $hasil[] = $data;
        }
      
      return $hasil;
    }
    
    public function update($sv_id, $sv_kat,$sv_alamat, $sv_nama, $sv_lat, $sv_lng){
      
      $sql="UPDATE $this->tbl SET Id='$sv_id', Kategori='$sv_kat', Alamat='$sv_alamat', Nama='$sv_nama', Lat='$sv_lat', Lng='$sv_lng' WHERE Id='$sv_id' ";
      $stmt=$this->db->prepare($sql);
      $stmt->execute();
      
     }
      
}

?>