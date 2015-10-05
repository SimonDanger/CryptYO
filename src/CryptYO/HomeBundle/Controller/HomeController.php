<?php

namespace CryptYO\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends Controller
{
    function indexAction() {
        return $this->render("HomeBundle:Home:index.html.twig");
    }
}
?>