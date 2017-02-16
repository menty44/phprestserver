<?php
  // example request: http://path/to/resource/Example?method=sayHello&name=World
  require_once "RestServer.php";
  $rest = new RestServer("Hello");
  $rest->handle();
  class Hello
  {
     public static function sayHello($name,$age)


     {
       $data = [$name,$age];

       header('Content-Type: application/json');
       //echo json_encode($data);
  	//return "Hello, " . $name;
       echo json_encode(array('Success' =>  $data));
       file_put_contents('fred.txt',
       implode("\n", $data) . "\n",
        FILE_APPEND
      );

     }


     public static function test($country){

       //return $country;
       $data = [$country];

       header('Content-Type: application/json');
       //echo json_encode($data);
  	//return "Hello, " . $name;
       echo json_encode(array('Success' =>  $data));
       file_put_contents('fred.txt',
       implode("\n", $data) . "\n",
        FILE_APPEND);
     }

  }
?>
