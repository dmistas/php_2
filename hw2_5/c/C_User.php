<?php
//
// Конттроллер страницы чтения.
//

include_once("m/M_User.php");


class C_User extends C_Base
{
    //
    // Конструктор.
    //

    public function action_auth() {
        $this->title .= '::Авторизация';
        $user = new M_User();

        if ($this->IsPost()) {
            $login = ($_POST['login']) ? $_POST['login'] : '';
            $pass = ($_POST['pass']) ? $_POST['pass'] : '';
            $info = $user->auth($login, $pass);
            if ($info) {
                $this->content = $this->Template('v/v_login_succ.php', array('text' => $info));
            } else {
                $this->content = $this->Template('v/v_login.php', array('text' => 'Пользователь или пароль не верный'));
            }
        } else {
            $this->content = $this->Template('v/v_login.php', array('text' => ''));
        }


    }

    public function action_reg() {
        $this->title .= '::Регистрация';
        $user = new M_User();
        if ($this->IsPost()) {
            $login = ($_POST['login']) ? $_POST['login'] : '';
            $pass = ($_POST['pass']) ? $_POST['pass'] : '';
            $phone = ($_POST['phone']) ? $_POST['phone'] : '';
            $info = $user->register($login, $pass, $phone);
            if ($info) {
                $this->content = $this->Template('v/v_registration.php', array('text' => 'Вы успешно зарегистрированы!'));
            } else {
                $this->content = $this->Template('v/v_registration.php', array('text' => 'Такой логин уже используется'));
            }
        } else {
            $this->content = $this->Template('v/v_registration.php', array('text' => ''));
        }
    }

    public function action_profile() {
        $this->title .= '::Личный кабинет';
        if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
            $info = "Приветствую вас " . $_SESSION['login'];
        } else {
            $info = "Вы не авторизованы!";
        }
        $this->content = $this->Template('v/v_profile.php', array('text' => $info));
    }

    public function action_logout() {
        unset($_SESSION['login']);
        unset($_SESSION['pass']);
        session_destroy();
        $this->content = $this->Template('v/v_login.php', array('text' => 'Вы вышли'));
    }

}
