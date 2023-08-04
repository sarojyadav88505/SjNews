<?php

function  uploadImage($request,$object,$fileName){
    if($request->hasFile($fileName)){
        $file = $request->$fileName; //temporary Name
        $newName = time(). "." .$file->getClientOriginalExtension();
        $file->move('images',$newName);
        $object->$fileName = "images/$newName";
    }
}
