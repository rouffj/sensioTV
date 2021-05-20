<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="movie_")
 */
class MovieController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('movie/home.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }

    /**
     * @Route("/{id<\d+>}", name="detail")
     */
    public function detail($id): Response
    {
        return $this->render('movie/movie-details.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }

    /**
     * @Route("/genre", name="genre")
     */
    public function genre(): Response
    {
        return $this->render('movie/movie-genre-list.html.twig', [
        ]);
    }

    /**
     * @Route("/latest", name="latest")
     */
    public function latest(): Response
    {
        return $this->render('movie/movie-latest.html.twig', [
        ]);
    }

    /**
     * @Route("/top-rated", name="top_rated")
     */
    public function topRated(): Response
    {
        return $this->render('movie/movie-top-rated.html.twig', [
        ]);
    }

    /**
     * @Route("/{id}/player", name="player")
     */
    public function moviePlayer(): Response
    {
        return $this->render('movie/movie-player.html.twig', [
        ]);
    }

    /**
     * @Route("/hello/{name}", name="hello", methods={"POST"})
     */
    public function name($name): Response
    {
        return new Response(sprintf('Hello %s', $name), 201);
    }
}
