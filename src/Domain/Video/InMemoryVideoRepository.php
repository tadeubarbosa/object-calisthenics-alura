<?php

namespace Alura\Calisthenics\Domain\Video;

use Alura\Calisthenics\Domain\Student\Student;

class InMemoryVideoRepository implements VideoRepository
{
    private VideoList $videos;

    public function __construct()
    {
        $this->videos = new VideoList();
    }

    public function add(Video $video): void
    {
        $this->videos->add($video);
    }

    public function videosFor(Student $student): array
    {
        return $this->videos->filterByAge($student->age());
    }
}
