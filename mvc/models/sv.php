<?php
class sv extends db
{
    public function get_sv()
    {
        // connect db
        return 'vu mai chi';
    }
    
    public function tong($n, $m){
        return $n + $m;
    }
    public function sv(){
        $sql = "SELECT * FROM cong_viec";
        try {
            $stmt = $this->con->query($sql);
            return $stmt;
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
    }
 


}


// Khởi tạo đối tượng db và gọi phương thức cv()

?>