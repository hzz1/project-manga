<?php
/**
 * Created by PhpStorm.
 * User: Eier
 * Date: 3/30/2016
 * Time: 6:46 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class FirstController extends Controller
{
    /**
     * @Route("/first/{firstName}")
     */
    public function showAction2($firstName)
    {
        $templating = $this->container->get('templating');
        $html = $templating->render('first/first.html.twig' ,[
           'name' =>$firstName
        ]);
        return new Response($html);
    }

    /**
     * @Route("/first/{firstName}/test")
     */
    public function firstAction($firstName)
    {
        $templating = $this->container->get('templating');
        $html = $templating->render('first/index.html.twig' ,[
            'name' =>$firstName
        ]);
        return new Response($html);
    }


}
