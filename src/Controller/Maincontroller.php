<?php
namespace  App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
#[Route('/')]
public function homepage(){
return new Response('<strong>Startshop</strong>: This is the world class where Every body likes to shop!');
}
}