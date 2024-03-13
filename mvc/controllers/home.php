<?php
class home extends contrller
{
    function say_hi()
    {
        $teo = $this->model('sv');
        echo $teo->get_sv();
        $this -> view('ao_dep');
    }
    function show()
    {
        $teo = $this->model('sv');
        $result = $teo->sv();
        if ($result) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo  $a = $row['ten_cv'] . '<br>'; // Thay 'column_name' bằng tên cột bạn muốn hiển thị
            }
            $this -> view('ao_xau', ['number' => $a,
        "pages" => "new"]);
        }
       
    }
    function show_1($a, $b){
        // MODEL
        $teo = $this -> model('sv');
         $tong = $teo -> tong($a, $b);
         // VIEW
            $this -> view('ao_xau', ['number' => $tong,
        "pages" => "new"]);
       
        
    }
}