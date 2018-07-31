<?php



class HelloAndock {
    public static function sayHello() {
        $output = '';
        exec('chmod 777 -R .', $output);

        exec('touch x.html', $output);
        return $output . 'Hello Andock';
    }
}
