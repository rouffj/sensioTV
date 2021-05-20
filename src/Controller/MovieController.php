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
            'movies' => $this->getMovies(),
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

    private function getMovies()
    {
        return [
            ['id' => 1, 'title' => 'Memento', 'releaseDate' => 2000, 'director' => 'Christopher Nolan', 'duration' => '113', 'image' => '/assets/images/movie-image-samples/memento.jpeg'],
            ['id' => 2, 'title' => 'Insomnia', 'releaseDate' => 2002, 'director' => 'Christopher Nolan', 'duration' => '118', 'image' => '/assets/images/movie-image-samples/insomnia.jpeg'],
            ['id' => 3, 'title' => 'The Dark Knight ', 'releaseDate' => 2008, 'director' => 'Christopher Nolan', 'duration' => '152', 'image' => '/assets/images/movie-image-samples/the-dark-knight.jpeg'],
            ['id' => 4, 'title' => 'Inception', 'releaseDate' => 2010, 'director' => 'Christopher Nolan', 'duration' => '148', 'image' => '/assets/images/movie-image-samples/inception.jpeg'],
            ['id' => 5, 'title' => 'Man Of Steel', 'releaseDate' => 2013, 'director' => 'Christopher Nolan', 'duration' => '143', 'image' => '/assets/images/movie-image-samples/man-of-steel.jpeg'],
            ['id' => 6, 'title' => 'Dunkirk', 'releaseDate' => 2017, 'director' => 'Christopher Nolan', 'duration' => '106', 'image' => '/assets/images/movie-image-samples/dunkirk.jpeg'],
        ];
    }
}
