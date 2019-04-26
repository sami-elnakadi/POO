<?php
class Form{

    private $data;

    public function construc($data){
        $this->data = $data;
    }


    public function input($name){
        echo '<p><input type="text" name="'.$name.'"></p>';
    }

    public function select(){
        echo '<p><select id="">
                    <option value""> blablabla </option>
                    <option value""> bliblibla </option>
                </select></p>';
    }

    public function textarea(){
        echo '<p><textarea name="" id="" cols="30" rows="10"></textarea></p>';
    }

    public function radio(){
        echo'<p><div><input type="radio" name="" id=""></div>
                <label for="scales">...</label>
             <div><input type="radio" name="" id=""></div>
                <label for="scales">...</label></p>';
    }

    public function  check(){
        echo'<p><div><input type="checkbox" name="" id=""></div>
                <label for="scales">...</label>
             <div><input type="checkbox" name="" id=""></div>
                <label for="scales">...</label></p>';
    }

    public function submit(){
        echo '<p><button type="submit"> Envoyer </button></p>';
    }

}

?>  