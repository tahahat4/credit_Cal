<?php

namespace App\Controller;

use App\Service\CreditCalculatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CreditController extends AbstractController
{
    private CreditCalculatorInterface $creditCalculator ;

    public function __construct(CreditCalculatorInterface $creditCalculator){
        $this->creditCalculator = $creditCalculator ;
    }


    #[Route('/credit', name: 'credit_app')]
    public function index(Request $req): Response
    {
        $prixTotal = null ; 


        if($req->isMethod("POST")){
            $capital = (float) $req->request->get('capital');
            $duration = (int) $req->request->get('duration');
            $rate = (float) $req->request->get('rate');

            $prixTotal = $this->creditCalculator->calculateMonthlyPayment($capital , $duration , $rate) ;
        }

        return $this->render('credit/index.html.twig' , [
            "prixTotal" => $prixTotal 
        ]);
    }
}
