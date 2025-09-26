<?php

namespace Mail_Lesson\models;

class User extends Db
{

    public function userExists(string $username): bool
    {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = :username ");
        $stmt->bindParam(':username',$username);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    }

    public function getUserByUsername(string $username): array
    {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE username = :username ");
        $stmt->bindParam(':username',$username);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function registerUser(string $username, string $password):void
    {
      $stmt = $this->connection->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
      $password = password_hash($password, PASSWORD_BCRYPT);
      $stmt->bindParam(':username',$username);
      $stmt->bindParam(':password',$password);
      $stmt->execute();
    }

}