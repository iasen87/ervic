<?php
/**
 * Created by PhpStorm.
 * User: yasenyankov
 * Date: 4/24/16
 * Time: 4:31 PM
 */

namespace App\Http\Controllers;
use App\Events\ExampleEvent;



/**
 * Class WebHookController
 * @package App\Http\Controllers
 */
class WebHookController extends Controller
{


    /**
     * WebHookController constructor.
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function welcome()
    {


        event(new ExampleEvent());
        # we should produce the welcome message for the FB messenger here!
        return view('welcome');


    }
}