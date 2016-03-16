<?php
  $file_name = "data.txt";
  $entries_from_file = file_get_contents($file_name);

  //massiic olemasolevate purkidega
  $entries = json_decode($entries_from_file);

  if(isset($_GET["player"]) && isset($_GET["score"])  && !empty($_GET["player"]) && !empty($_GET["score"])){
    //salvestan juurde
    $object = new StdClass();
    $object->name = $_GET["player"];
    $object->score = $_GET["score"];

    //lisan massiivi juurde
    array_push($entries, $object);

    //teen stringiks
    $json = json_encode($entries);

    file_put_contents($file_name, $json);
  }

/* EI TÖÖTA
 if(isset($_GET["delete"]) && !emtpy($_GET["delete"])){
    function in_array_r($id, $title, $ingredients = false) {
    foreach ($id as $item) {
        if (($strict ? $item === $_GET["delete"] : $item == $id) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }

      return false;
    }
  }
  */

/*  echo(json_encode($entries));*/

?>
