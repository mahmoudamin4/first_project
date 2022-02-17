<?php 

namespace App\Http\Controllers\users;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class admin extends Controller{

    public  function users(){
        return 'aa';


    }
    /* Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        
    }

}