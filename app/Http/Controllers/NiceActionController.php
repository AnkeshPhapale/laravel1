<?php
namespace App\Http\Controllers;
use \Illuminate\Http\Request;
class NiceActioncontroller extends Controller{

public function getNiceAction($action,$name="you"){

    return view( 'actions.'.$action,['name'=>$name]);
}

public function postNiceAction(Request $request){
    

            $this->validate($request,[
           'action'=> 'required',
           'name' => 'required|alpha'


            ]);
            return view('actions.donenice',['action' => $request['action'],'name'=> $this->transform($request['name'])]);
        }
    
       
    

private function transform($name){

    $prefix = strtoupper("princess ");
    return $prefix.strtoupper($name);
}
}