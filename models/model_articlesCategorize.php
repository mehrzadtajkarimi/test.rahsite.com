<?php

class model_articlesCategorize extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function category()
    {
        $sql = "select * from tbl_option where setting='limit_articlesCategorize'";
        $result=$this->doSelect($sql,[],1);
        $limit_articlesCategorize = $result['value'];
        $sql = "SELECT * FROM tbl_articles limit ".$limit_articlesCategorize." ";
        $result=$this->doSelect($sql);
        return $result;

    }
    function timeLogs()
    {
        $sql = "select * from tbl_articles ";
        $result=$this->doSelect($sql,[],1);
        $time_logs=$result['time_logs'];
//      date_default_timezone_set('Asia/Tehran');
        $months  = date('F',$time_logs);
        $day     = date('d',$time_logs);
        $year    = date('Y',$time_logs);
        $data=['months'=>$months,'day'=>$day,'year'=>$year];
        return $data;
    }
}

?>
