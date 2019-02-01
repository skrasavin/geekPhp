<?php
class db
{
    private static $_instance = null;

    private $db; // Ресурс работы с БД

    /*
     * Получаем объект для работы с БД
     */
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new db();
        }
        return self::$_instance;
    }

    /*
     * Запрещаем копировать объект
     */
    private function __construct() {}
    private function __clone() {}

    /*
     * Выполняем соединение с базой данных
     */
    public function Connect($host, $base, $user, $password, $port = 3305)
    {
        // Формируем строку соединения с сервером
       return $this->db = new PDO('mysql:host=' . $host . ';port='. $port . ';dbname=' . $base .';', $user, $password );

    }

    /*
     * Выполнить запрос к БД
     */
    public function Query($query, $params = array())
    {
        $res = $this->db->prepare($query);
        $res->execute($params);
        return $res;
    }

}
?>
