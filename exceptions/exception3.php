<?php
class MyException extends Exception {
}

class NetworkException extends Exception {
}

function testException() {
    throw new NetworkException();
}

try {
    testException();
} catch ( MyException $e ) {
    echo "MyExeption Caught";
} catch ( NetworkException $e ) {
    echo "NetworkException Caught";
} catch ( Exception $e ) {
    echo "Exeption Caught";
} finally {
    echo "\nCleaned Up";
}