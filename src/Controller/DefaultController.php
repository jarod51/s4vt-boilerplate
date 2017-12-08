<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Default controller
 *
 * @Route("/")
 *
 * @author Arnaud Lecat <a.lecat@nonozone.com>
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }
}
