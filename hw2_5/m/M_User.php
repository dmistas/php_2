<?php
include_once("M_Db.php");

class M_User
{
    protected $db;

    public function __construct() {
        $this->db = M_Db::db();
    }

    function is_usser($login) {
//        $db=$this->db();
        $sth = $this->db->prepare("SELECT * FROM users WHERE login=?");
        $sth->execute(array("$login"));
        return (boolean)($sth->fetchAll(PDO::FETCH_ASSOC));
    }

    function auth($login, $pass) {
        $sth = $this->db->prepare("SELECT login as name, pass FROM users WHERE login=? AND pass=?");
        $sth->execute(array("$login", "$pass"));
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($res) {
            $message = "Вы успешно авторизовались";
            $_SESSION['login'] = $login;
            $_SESSION['pass'] = $pass;
            return $message;
        } else {
            return false;
        }

    }

    function register($login, $pass, $phone) {
        if (!($this->is_usser($login))) {
            return ($this->add_user($login, $pass, $phone));
        } else
            return false;
    }

    function add_user($login, $pass, $phone) {
        $stn = $this->db->prepare("INSERT INTO `users` (`login`, `pass`, `phone`, `role`) VALUES (?, ?, ?, '1')");
        $stn->execute(array("$login", "$pass", "$phone"));
        return $this->is_usser($login);
    }


}

