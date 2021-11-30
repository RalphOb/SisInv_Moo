<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/SisInv_Moo/paths.php');
include_once(MySQL."xemc_mysql.php");
include_once(Model."UserSessionModel.php");
include_once(Factory."User.php");

$cliente = new Credential;
if (isset($_POST['submit'])) {
    $cliente->setUsername($_POST['username']);
    $cliente->setPassword($_POST['password']);}
    if(empty($cliente->getUsername()) || empty($cliente->getPassword())){
        header('Location: ../../index.php');
    }else{
        $usr = new UserSessionModel;
        $conn = $usr->getUser($cliente->getUsername(),$cliente->getPassword());
        $uf = new UserFactory;
        if ($conn['role'] == 1){
            $user = $uf->createUser("Administrator", $cliente);
            session_start();
            $_SESSION['usuario'] = $cliente->getUsername();
            header('Location: ../../View/admin/index_admin.php');
        } elseif ($conn['role'] == 2){
            $user = $uf->createUser("Data_capture", $cliente);
            session_start();
            $_SESSION['usuario'] = $cliente->getUsername();
            header('Location: ../../View/capt/index_user.html');
            $user->Log_in();
        } else {
            header('Location: ../../index.php');
        }
    }


