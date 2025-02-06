<?php
require('connect.php');

function tt($value)
{
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}


//функция проверки запроса на ошибки
function dbCheckError($query)
{
  $errInfo = $query->errorInfo();
  if ($errInfo[0] !== PDO::ERR_NONE) {
    echo $errInfo[2];
    exit();
  }
  return true;
}

//запрос для получения данных с любой одной таблицы
function selectAll($table, $params = [])
{
  global $pdo;
  $sql = "SELECT * FROM $table"; //запрос ко всей таблице

  //переписываем запрос к конкретным параметрам в таблице
  if (!empty($params)) {
    $i = 0;
    foreach ($params as $key => $value) {
      if (!is_numeric($value)) {
        $value = "'" . $value . "'";
      }
      if ($i === 0) {
        $sql = $sql . " WHERE $key => $value";
      } else {
        $sql = $sql . " AND $key => $value";
      }
      $i++;
    }
  }

  $query = $pdo->prepare($sql); //подготовили запрос к базе данных
  $query->execute(); //отправляем запрос

  dbCheckError($query);

  return $query->fetchAll();
}

$params = [
  'admin' => 1,
  'user_name' => 'ivan',
];

tt(selectAll('users', $params));
