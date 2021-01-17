<?php

abstract class AbstractDatabase {
    abstract function getConnection();
}

abstract class AbstractDatabaseFactory {
    abstract function create();
}

class MySQL extends AbstractDatabase {
    function getConnection() {
        echo "MySQL Connection\n";
    }
}

class PostgresSQL extends AbstractDatabase {
    function getConnection() {
        echo "PostgresSQL Connection\n";
    }
}

class SQLServer extends AbstractDatabase {
    function getConnection() {
        echo "SQL Server Connection\n";
    }
}

class MySQLFactory extends AbstractDatabaseFactory {
    function create() {
        return new MySQL();
    }
}

class PostgresSQLFactory extends AbstractDatabaseFactory {
    function create() {
        return new PostgresSQL();
    }
}

class SQLServerFactory extends AbstractDatabaseFactory {
    function create() {
        return new SQLServer();
    }
}

class DatabaseFactory {
    function getMySQLEngine() {
        return new MySQLFactory();
    }

    function getPostgreSQLEngine() {
        return new PostgresSQLFactory();
    }

    function getSQLServerEngine() {
        return new SQLServerFactory();
    }
}

$dbFactory = new DatabaseFactory();
$mySQLFactory = $dbFactory->getMySQLEngine();
$mysql = $mySQLFactory->create();
$mysql->getConnection();

$pgSQLFactory = $dbFactory->getPostgreSQLEngine();
$pgsql = $pgSQLFactory->create();
$pgsql->getConnection();