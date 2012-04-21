<?php

$pointer = 0; // No use of pointer in the references

function json_gen()
{

}

if ( !array_key_exists('cmd', $_GET) )
{
// Command not inserted, error - send a message error and propose to call help
echo "Error: Command not specified, please provide the command or ask for the \"help\"";
}
else
{
  $command = $_GET['cmd'];
  // List of all the commands for the query, just necessary to update it
  switch ($command)
  {
  case 'help':
    echo "Most of the commands are just search";
    break;
  case 'search':
    json_gen();
    break;  
  }

}
?>
