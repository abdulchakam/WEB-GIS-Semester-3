<?php

class login {
            
    var $db;
    var $tbl= "userlogin";
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

            public function cekLogin($username,$password){
                  $sql="select * from $this->tbl where Username='$username' and Password='$password' ";
                  
                  $smtp = $this->db->prepare($sql);
                  $smtp->execute();
                  
                  if($smtp->rowCount() > 0){
                        $_SESSION['susername'] = $username;
                        header("location:index.php");
                  }else{
                        echo "login GAGAL....<br/> <a href='login.php'>ulangi</a>";
                  }
            }
            
            public function logout(){
                  session_start();
                  session_unset();
                  
                  session_destroy();
                  
                  header("location:login.php");
            }
      }
      $login = new login;

      ?>