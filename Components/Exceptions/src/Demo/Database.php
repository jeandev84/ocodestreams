<?php
namespace Debug;


use Doctrine\ORM\Query\QueryException;
use Exception;

class ConnectionFailedException extends Exception
{

}

class QueryFailedException extends Exception
{

}


/**
 * Class Database
 * @package Debug
*/
class Database
{
    public function query()
    {
        // connection fail
        // query fail

        if(true)
        {
            throw new ConnectionFailedException();
        }

        if(true)
        {
            throw new QueryFailedException();
        }
    }
}


$database = new Database();

try {

    $database->query();

} catch (ConnectionFailedException $e) {

    var_dump('log error');

} catch (QueryFailedException $e) {

    var_dump('show message to user');
}