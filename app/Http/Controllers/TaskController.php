<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function pypart($n) 
{ 
      
    for($i=0;$i<=9;$i++){
 
        for ($d=10-$i; $d > 0; $d--)  {
     
            echo "&nbsp;&nbsp;";
        }
        for($j=1;$j<=$i;$j++){
     
            echo "&nbsp;".$i."&nbsp;";
        }
     
        echo "<br>";
     
    }
  
   
}}