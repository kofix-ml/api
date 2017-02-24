<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class ApiController extends Controller
{
    //
    /*
    *
    *   Changes for news
    *   Description :   
    *   Last edited by : Firdausneonexxa
    *
    */
        
    public function news (Request $request,$id){
        $parameters = $request->all();
        
        if($id == "all")
		{
			$news = news::all();
            
            if(is_null($news)){
                $message = array('header'=>'400','status'=>'error','msg'=>'no record found');
                return json_encode($message);
            }
            $allnews = $news->toArray();
			
			$message = array('header'=>'200','status'=>'success','data'=>$allnews);
		}
		else
		{
			$message = array('header'=>'400','status'=>'error','msg'=>'no record found');
		}
		
        return json_encode($message);
    }
    	
}
