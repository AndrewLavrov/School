<?php
//импортируем наш класс
use Step\Acceptance\TestUserJoin;

//тот же самый AcceptanceTester
$I = new TestUserJoin($scenario);
$I->wantTo('New users join and login');

//придумываем двух пользователей
$user1 = $I->imagineUser();
$user2 = $I->imagineUser();

//логинимся без регистрации
$I->loginUser($user1);
$I->see("This e-mail does not registered");

//регистрируем обоих не изгаляясь особо, хотя надо бы
$I->joinUser($user1);
$I->joinUser($user2);

//повторно регистрируем первого
$I->joinUser($user1);
$I->see("This e-mail already exists");

//логинимся первым, проверяем, выходим
$I->loginUser($user1);
$I->isUserLogged($user1);
$I->noUserLogged($user2);
$I->logoutUser();

//и наоборот
$I->loginUser($user2);
$I->isUserLogged($user2);
$I->noUserLogged($user1);
$I->logoutUser();

//логинимся с неверным паролем
$user1["password"] = "wrong password";
$I->loginUser($user1);
$I->see("Wrong password");
