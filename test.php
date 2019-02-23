
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="public\js\jquery-3.3.1.min.js"></script>
	<title>Document</title>
</head>
<body>
    <p></p>
<?php

class time{
    private $hour;
    private $min;
    private $sce;

    function __construct($h,$m,$s)
    {
        $this->hour=$h;
        $this->min=$m;
        $this->sce=$s;
    }

    function print_time(){
        echo $this->set_time();
      }

    private function set_time(){
        $time='';
        if ($this->hour==0||$this->hour==12){
            $time .=12;
        }else{
            $time.=$this->hour%12;
            $time.=':'.$this->min.':'.$this->sce;
        }

            if ($this->hour>12){
                $time.='  AM';
            }  else{
                 $time.='  PM';
            }
         return $time;
     }


}
$time =new time(23,20,30);
$time->print_time();

?>
</body>
</html>
