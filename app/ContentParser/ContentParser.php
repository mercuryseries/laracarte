<?php namespace Laracarte\ContentParser;

class ContentParser
{
    protected $transformer;

    public function __construct(Transformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function transform($content)
    {
        return $this->transformer->transform($content);
    }
}
