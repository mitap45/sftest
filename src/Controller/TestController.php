<?php


namespace App\Controller;

use Exception;
use http\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function test(): Response
    {
        try {
            $number = random_int(0, 100);
        } catch (Exception $e) {
            throw new RuntimeException('Au rt excpt');
        }

        return $this->render('test.html.twig', [
            'number' => $number
        ]);
    }

}