<?php 
$I = new \Step\Acceptance\TestUserJoin($scenario);
$I->wantTo('New users join and login');


$user1 = $I->imagineUser();//придумал пользователя
$user2 = $I->imagineUser();// еще один юзер

$I->loginUser($user1); // вход юзера1
$I->see("This email does not registered"); // при входе отображение текста

$I->joinUser($user1); //  регистрация юзер1
$I->joinUser($user2); // регистрация юзер2

$I->joinUser($user1); // вход юзер1
$I->see("This email already exist"); // текст при входе

$I->loginUser($user1); // вход
$I->isUserLogged($user1);// проверка на наличие пользователя
$I->noUserLogged($user2);// нет пользователя на сайте
$I->logoutUser();//  выход пользователя

$I->loginUser($user2);//
$I->isUserLogged($user2);//
$I->noUserLogged($user1);//
$I->logoutUser();//

$user1["password"] = "wrong password"; // рега пароля
$I->logoutUser($user1); // выход ползовтеля
$I->see("Wrong password"); // сообщение о неправильном пароле

