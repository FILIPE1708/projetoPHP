<?php

class Usuario{
    private $id_usuario;
    private $des_login;
    private $des_senha;
    private $dt_cadastro;

    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function setId_usuario($value){
        $this->id_usuario = $value;
    }

    public function getDes_login(){
        return $this->des_login;
    }

    public function setDes_login($value){
        $this->des_login = $value;
    }

    public function getDes_senha(){
        return $this->des_senha;
    }

    public function setDes_senha($value){
        $this->des_senha = $value;
    }

    public function getDt_cadastro(){
        return $this->dt_cadastro;
    }

    public function setDt_cadastro($value){
        $this->dt_cadastro = $value;
    }

    public function loadById($id){
        $sql = new Sql();
        $result = $sql->select('SELECT * FROM tb_usuarios WHERE id_usuario = :ID', array(
            ':ID'=>$id
        ));

        if (count($result) > 0) {
            $row = $result[0];
            $this->setId_usuario($row['id_usuario']);
            $this->setDes_login($row['des_login']);
            $this->setDes_senha($row['des_senha']);
            $this->setDt_cadastro(new DateTime($row['dt_cadastro']));
        }
    }

    public static function getList(){
        $sql = new Sql();
        return $sql->select('SELECT * FROM tb_usuarios ORDER BY des_login');
    }

    public static function searchList($login){
        $sql = new Sql();
        return $sql->select('SELECT * FROM tb_usuarios WHERE des_login LIKE :SEARCH ORDER BY des_login', array(
            ':SEARCH'=>'%'.$login.'%'
        ));
    }

    public function login($login, $password){
        $sql = new Sql();
        $result = $sql->select('SELECT * FROM tb_usuarios WHERE des_login = :LOGIN AND des_senha = :PASSWORD', array(
            ':LOGIN'=>$login,
            ':PASSWORD'=>$password
        ));

        if (count($result) > 0) {
            $row = $result[0];
            $this->setId_usuario($row['id_usuario']);
            $this->setDes_login($row['des_login']);
            $this->setDes_senha($row['des_senha']);
            $this->setDt_cadastro(new DateTime($row['dt_cadastro']));
        }

        else{
            throw new Exception('Login ou senha incorretos!!');
        }
    }

    public function __toString(){
        return json_encode(array(
            'id_usuario'=>$this->getId_usuario(),
            'des_login'=>$this->getDes_login(),
            'des_senha'=>$this->getDes_senha(),
            'dt_cadastro'=>$this->getDt_cadastro()->format('d/m/y H:i:s')
        ));
    }
}

?>