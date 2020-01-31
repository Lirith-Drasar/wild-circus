<?php

namespace App\Controller;

use App\Entity\Shows;
use App\Entity\Price;
use App\Entity\Circassian;
use App\Entity\City;
use App\Entity\Performance;
use App\Repository\ShowsRepository;
use App\Repository\PriceRepository;
use App\Repository\CityRepository;
use App\Repository\PerformanceRepository;
use App\Repository\CircassianRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PriceRepository $priceRepository, ShowsRepository $showsRepository, CityRepository $cityRepository, CircassianRepository $circassianRepository, PerformanceRepository $performanceRepository, Request $request):Response {

        $show = $showsRepository->findAll();
        $price = $priceRepository->findAll();
        $city = $cityRepository->findAll();
        $performance = $performanceRepository->findAll();
        return $this->render('index/index.html.twig', [
            'show' => $show,
            'price' => $price,
            'city' => $city,
            'performance' => $performance,
        ]);
    }
}
