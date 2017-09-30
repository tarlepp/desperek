<?php

namespace AppBundle\Controller;

use AppBundle\Services\SomeService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, SomeService $service)
    {
        \var_dump($service->isOpen());

        die();
    }
}
