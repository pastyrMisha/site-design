<?php

function getUserList()
{
    return [
        'aa-zvendinova' => '$2y$10$jtIQlEqDm8QqnRSjEX1dE.nOUE3K4t6bfP5N.BgtA7/ZyREn0n.Dq',
    ];
}

function existsUser($login): bool
{
    return isset(getUserList()[$login]);
}

function checkPassword($login, $password): bool
{
    return existsUser($login) && password_verify($password, existsUser($login));
}

function getCurrentUser(): ?string
{
    return $_SESSION['user'] ?? null;
}