<?php

# constant
//correct constant naming
define('MY_NAME', 'Abubakr');

/** incorrect constant naming
 * define('my_name', 'Abubakr');
 */
# class

//Correct class naming
class User {

    //correct method naming
    public function sayHello(){
        echo 'Hello!';
    }

    /** incorrect method naming
     * public function sayhello(){ # or say_hello
     *      echo 'Hello!';
     * }
     */
}

class StudyField {

}

/**Incorrect class naming
class user {

}

class studyfield {

}


class study_field {

}
 */

# function
function add_two_numbers(){

}

// conditional DECLARATION is *not* a side effect
if (! function_exists('bar')) {
    function bar()
    {
        // function body
    }
}