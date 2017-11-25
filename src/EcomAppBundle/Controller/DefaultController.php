<?php

namespace EcomAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('EcomAppBundle:Home:home.html.twig');
    }

    /**
     * @Route("/product-page", name="product_page")
     */
    public function productPageAction()
    {
        return $this->render('EcomAppBundle:Product:product.html.twig');
    }

    /**
     * @Route("/product-category", name="product_category")
     */
    public function productCategoryAction()
    {
        return $this->render('EcomAppBundle:Product:products_cat.html.twig');
    }
}
