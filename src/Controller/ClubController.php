<?php

namespace App\Controller;

use App\Entity\Club;
use App\Form\ClubType;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/api/clubs")
 *
 * Class ClubController
 * @package App\Controller
 */
class ClubController extends AbstractFOSRestController
{
    /**
     * @Rest\Get(
     *     path="",
     *     name="api_club_list",
     * )
     * @Rest\View()
     */
    public function index()
    {
        return $this->getDoctrine()->getRepository(Club::class)->findAll();
    }


    /**
     * @Rest\Get(
     *     path="/{id}",
     *     name="api_club_show",
     *     requirements={"id"="\d+"}
     * )
     * @Rest\View()
     *
     * @param Club $club
     * @return Club
     */
    public function show(Club $club)
    {
        return $club;
    }

    /**
     * @Rest\Post(
     *     path="",
     *     name="api_club_create"
     * )
     * @Rest\View(statusCode=201)
     *
     * @param Request $request
     * @return string
     */
    public function create(Request $request)
    {
        $club = new Club();
        $form = $this->createForm(ClubType::class, $club);

        $form->submit($request->request->all());

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($club);
            $em->flush();

            return $this->view($club, Response::HTTP_CREATED, [
                'Location' => $this->generateUrl('api_club_show', ['id', $club->getId()], UrlGeneratorInterface::ABSOLUTE_URL)
            ]);

        } else {
            return $this->view($form, Response::HTTP_BAD_REQUEST);
        }
    }

//    public function update()
//    {
//
//    }
//
//    public function delete() {
//
//    }
}
