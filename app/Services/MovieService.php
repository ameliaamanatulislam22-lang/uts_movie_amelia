<?php

namespace App\Services;

use App\Interfaces\MovieRepositoryInterface;

class MovieService
{
    protected $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function getAllMovies($search)
    {
        return $this->movieRepository->getAll($search);
    }

    public function getPaginatedMovies()
    {
        return $this->movieRepository->paginateData(10);
    }

    public function getMovieById($id)
    {
        return $this->movieRepository->findById($id);
    }

    public function createMovie($data)
    {
        return $this->movieRepository->create($data);
    }

    public function updateMovie($id, $data)
    {
        return $this->movieRepository->update($id, $data);
    }

    public function deleteMovie($id)
    {
        return $this->movieRepository->delete($id);
    }
}
