<?php
class Person{
    public $fullname = false;
    public $familyname = false;
    public $givenname = false;


    function get_name(){
        if ($this-> fullname !== false ){
            return $this-> fullname;
        }if ($this->familyname !== false && $this->givenname !== false  ){
            return $this->familyname.' '.$this->givenname;
        }
        return false;
    }
}
$leo = new Person();
$leo->fullname = 'Lionel Messi';

$neymar = new Person();
$neymar->familyname = 'dos Santos';
$neymar->givenname = 'Neymar Jr';

print $neymar->get_name();
echo "<br>";
print_r ($leo->get_name());

?>