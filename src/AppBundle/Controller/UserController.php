<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user")
 */
class UserController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return 0;
    }

    /**
     * @Route("")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        return 1;
    }

    /**
     * @Route("")
     * @Method("PATCH")
     */
    public function updateAction(Request $request)
    {
        return 2;
    }

    /**
     * @Route("")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request)
    {
        return 3;
    }
}
