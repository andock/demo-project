<?php



class HelloAndock {
    public static function sayHello() {

        shell_exec('chmod 777 -R .');
        shell_exec('touch x.html');
        return 'Hello Andock';
    }
}
