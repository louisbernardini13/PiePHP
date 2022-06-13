<?php


include('./Core/Controller.php');


class UserController extends Controller {

    public function addAction(){
        $this->render('./User/register.php'); //afficher la view
        print_r('Je suis add action');
    }

}

//$newUser = new utilisateur($_POST);

//var_dump($_POST);

// if($newUser->save()) {
//     echo "OK";
// }


?>