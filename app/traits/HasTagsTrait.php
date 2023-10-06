<?php

namespace app\traits;

trait HasTagsTraits
{
    protected $tags = [];

    public function addTag($tag)
    {
        $this->tags[] = $tag;
    }

    public function getTags()
    {
        return $this->tags;
    }
}
