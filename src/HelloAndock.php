<?php



class HelloAndock {
    public static function sayHello() {

        $output = shell_exec('chmod 777 -R .');

        $output .= shell_exec('touch x.html');
        return $output . 'Hello Andock';
    }
}
