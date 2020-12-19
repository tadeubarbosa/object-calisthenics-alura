<?php

namespace Alura\Calisthenics\Domain\Video;

class VideoList
{
    private array $videos;

    public function __construct()
    {
        $this->videos = [];
    }

    public function add(Video $video)
    {
        $this->videos[] = $video;
    }

    public function filterByAge(string $age): array
    {
        return array_filter($this->videos, function (Video $video) use ($age) {
            return $video->getAgeLimit() <= $age;
        });
    }

}