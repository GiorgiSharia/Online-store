<?php
/**
 * Class DatabaseConnection
 *
 * This class establish connection to the MySQL database
 */
class DatabaseConnection
{
    public function getConnection()
    {
      $host = 'ec2-18-197-115-58.eu-central-1.compute.amazonaws.com';
      $port = '3306';
      $user = 'group_3_user';
      $password = 'EhdP7eoqrWXh5T3c';
      $database = 'group_3_user_';

      $opt = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // set the PDO error mode to exception
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Specifies that the fetch method shall return each row as an array
      ];

      try {
          $dsn = "mysql:host={$host};port={$port};dbname={$database};charset=utf8mb4";
          $pdo = new PDO($dsn, $user, $password, $opt);

          return $pdo;
      } catch (PDOException $exception) {
          print_r($exception->getMessage());
      }

      return null;
  }
}