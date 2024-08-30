<?php
ini_set('display_errors', 1);

class Staff {
    protected $name;
    protected $age;
    protected $sex;
    protected $id; 
    protected static $counter = 1;

    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    
    public function show() {
        $this->id = 'S' . str_pad(self::$counter++, 4, '0', STR_PAD_LEFT);
        printf("(%s)\n%s\n%d歳\n%s<br>", $this->id, $this->name, $this->age, $this->sex);
    }
}

class PartStaff extends Staff {
    private $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this->jikyu = $jikyu;
    }
    
    public function show() {
        $this->id = 'P' . str_pad(self::$counter++, 4, '0', STR_PAD_LEFT); 
        printf("(%s)\n%s\n%d歳\n%s\n時給:%d円<br>", $this->id, $this->name, $this->age, $this->sex, $this->jikyu);
    }
}

$staff[1]= new Staff("佐藤　一郎", 31, "男性");
$staff[2]= new Staff("山田　花子", 25, "女性");
$staff[3]= new Staff("鈴木　次郎", 27, "男性");
$staff[4]= new PartStaff("田中　友子", 24, "女性", 900);
$staff[5]= new Staff("中村　三郎", 27, "男性");

foreach($staff as $i){
    $i->show();
}

?>
