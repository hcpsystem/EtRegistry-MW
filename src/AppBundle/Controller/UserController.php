<?php

namespace AppBundle\Controller;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

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
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository(User::class)->findAll();
        $r = [];
        foreach ($usuario as $u) {
            $r[] = ['nombre' => $u->getNomuser()];
        }

        // $r = ['status' => 0];
        return $this->json($r);
    }

    /**
     * @Route("")
     * @Method("POST")
     */
    public function createAction(Request $request)
    {
        $r = ['status' => 1];
        return $this->json($r);
    }

    /**
     * @Route("")
     * @Method("PATCH")
     */
    public function updateAction(Request $request)
    {
        $r = ['status' => 2];
        return $this->json($r);
    }

    /**
     * @Route("")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request)
    {
        $r = ['status' => 3];
        return $this->json($r);
    }
}
