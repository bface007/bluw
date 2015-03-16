<?php
/**
 * Created by PhpStorm.
 * User: bface
 * Date: 14/03/15
 * Time: 20:47
 */

namespace Bluw\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller{

    public function indexAction(){
        return new Response("Hry");
    }
} 