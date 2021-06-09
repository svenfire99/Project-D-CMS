<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tableware;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/{name}", name="tableware-detail")
     */
    public function tableWareDetailAction(Request $request, $name)
    {
        $tableWare = $this->em->getRepository(Tableware::class)->findOneByName($name);

        if (!$tableWare)
            return $this->redirectToRoute('homepage');

        $jsonArr = [
            'ID' => $tableWare->getId(),
            'name' => $tableWare->getName(),
            'displayName' => $tableWare->getDisplayName(),
            'description' => $tableWare->getDescription(),
            'type' => $tableWare->getType(),
            'width' => $tableWare->getWidth(),
            'length' => $tableWare->getLength(),
            'height' => $tableWare->getHeight(),
            'price' => $tableWare->getPrice(),
            'model' => $tableWare->getModel(),
        ];

        return $this->render('default/json.html.twig', [
            'json' => json_encode($jsonArr),
        ]);
    }
}
