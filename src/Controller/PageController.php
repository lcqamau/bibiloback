<?php
// src/Controller/PageController.php
namespace App\Controller;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/pages/fklivre/{fklivre}", name="get_pages_by_fklivre", methods={"GET"})
     */
    public function getPagesByFkLivre($fklivre, PageRepository $pageRepository): JsonResponse
    {
        $pages = $pageRepository->findByFkLivre($fklivre);

        // Transformer les données de page en un format JSON
        $data = [];
        foreach ($pages as $page) {
            $data[] = [
                'id' => $page->getId(),
                'title' => $page->getTitle(),
                'content' => $page->getContent(),
                'createdAt' => $page->getCreatedAt()->format('Y-m-d H:i:s'),
                'updatedAt' => $page->getUpdatedAt()->format('Y-m-d H:i:s'),
                'fkLivre' => $page->getFklivre(),
            ];
        }

        // Retourner la réponse JSON contenant les données des pages
        return new JsonResponse($data);
    }
}
