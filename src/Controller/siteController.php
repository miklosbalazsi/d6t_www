<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Site;

class siteController extends AbstractController {

    public function list()
    {
 
       $SiteRepository = $this->getDoctrine()->getRepository(Site::class);		
   	
       $Sites = array();	 	
       foreach( $SiteRepository->findAll() as $site){
 	$Sites[] = $site->toArray();	 
       }
		
       return new JsonResponse($Sites);
    }
}

?>
