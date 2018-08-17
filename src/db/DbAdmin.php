<?php

namespace db;

/**
 * Class that handles the database connection and the queries
 */
class DbAdmin
{
    // Object that holds the database connection
    protected $myDb = null;

    /**
     * DbAdmin constructor.
     *
     * @param $dbName
     * @param $dbUser
     * @param $dbPass
     *
     * @throws \Exception
     */
    public function __construct($dbName, $dbUser, $dbPass)
    {
        // open database connection if not already established
        if (!$this->myDb) {
            try {

                // connect to local database
                $this->myDb = new \PDO('mysql:host=localhost;dbname=' . $dbName, $dbUser, $dbPass);
                $this->myDb->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {

                // throw exception if something during the database initialisation fails
                throw new \Exception($e->getMessage());
            }
        }
    }
}
