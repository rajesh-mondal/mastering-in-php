<?php
class ServerLoadedExpection extends Exception {}
class NetworkExpection extends Exception {}
class DiskFullExpection extends Exception {}

interface NetworkStorage {
    function connect();
    function getName();
    function report();
}

class MySQLServer implements NetworkStorage {
    function connect() {
        throw new DiskFullExpection();
    }

    function getName() {
        return "MySQL";
    }

    function report( $data ) {

    }
}

class PostgreSQLServer implements NetworkStorage {
    function connect() {
        throw new ServerLoadedExpection;
    }

    function getName() {
        return "PostgreSQL";
    }

    function report( $data ) {

    }
}

class MSSQLServer implements NetworkStorage {
    function connect() {
        //throw new NetworkException();
        return $this;
    }

    function getName() {
        return "MSSQL";
    }

    function report( $data ) {

    }
}

class ConnectionPoll {
    private $connection;
    private $storage;
    function __construct() {
        $this->storage = array();
    }

    function addStorage( NetworkStorage $storage ) {
        array_push( $this->storage, $storage );
    }

    function getConnection() {
        foreach ( $this->storage as $storage ) {
            try {
                $this->connection = $storage->connect();
            } catch ( ServerLoadedExpection $e ) {
                echo $storage->getName() . " is facing huge load\n";
                $storage->report( array( 'ip' => '123.123.123.111', 'error' => 'load' ) );
            } catch ( NetworkExpection $e ) {
                echo $storage->getName() . " is having some problem with it's network\n";
                $storage->report( array( 'ip' => '123.123.123.111', 'error' => 'net' ) );
            } catch ( DiskFullExpection $e ) {
                echo $storage->getName() . " has it's disk full\n";
            }

            if ( $this->connection ) {
                break;
            }
        }
        if ( $this->connection ) {
            return $this->connection;
        }
        return false;
    }
}

$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MSSQLServer();

$cp = new ConnectionPoll();
$cp->addStorage( $mysql );
$cp->addStorage( $pgsql );
$cp->addStorage( $mssql );

$connection = $cp->getConnection();
print_r( $connection );