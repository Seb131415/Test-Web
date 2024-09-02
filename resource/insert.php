<?php
class insert extends config {
    public $name, $email, $feedback;

    public function __construct($name, $email, $feedback) {
        $this->name = $name;
        $this->email = $email;
        $this->feedback = $feedback;
    }
    public function insertfeedback() {
        $con = $this->con();
        $sql = "INSERT INTO infotmation_tbl(name, email, feedback)VALUES('$this->name','$this->email','$this->feedback')";
        $data = $con->prepare($sql);
        if($data->execute()){
            return true;
        }else{
            return false;
        }

    }
}
?>