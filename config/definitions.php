<?php

use App\Database;
use Invoker\ParameterResolver\Container\TypeHintContainerResolver;

return [
    Database::class=>function(){
        return new Database(host: '127.0.0.1',
                            dbname:'iot',
                            user: 'tycho',
                            password: '123');
    }
];