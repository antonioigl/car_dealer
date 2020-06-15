<?php

namespace App\Controller;

use App\Entity\Brand;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends AbstractController
{

    /**
     * @Route("/admin/list", name="list")
     *
     * @IsGranted({"ROLE_ADMIN"})
     */
    public function index(SerializerInterface $serialize)
    {
        $em = $this->getDoctrine()->getManager();
        $brands = $em->getRepository(Brand::class)->findAll();

        $data = $serialize->serialize($brands, 'json');

        return new Response($data);
    }
}
