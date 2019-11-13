<?php

/* 
 * decription of Construct function
 * 
 * @author: DanhNC
 */

// sử dụng hàm tạo cho class DIEM_DH (điểm đồ họa)
class DIEM_DH{
    function __construct(int $x,int $y, int $m) {  //<=> DIEM_DH(int$x, int $y, int $m){}
        echo $x . "</br>" ;
        echo $y . "</br>" ;
        echo $m . "</br>" ;
    }  
}

$diem_dh = new DIEM_DH(1,2,3);  // 123

