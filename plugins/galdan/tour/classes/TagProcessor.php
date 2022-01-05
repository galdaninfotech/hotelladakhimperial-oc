<?php namespace Galdan\Tour\Classes;

/**
 * Tour Markdown tag processor.
 *
 * @package Galdan\Tour
 * @author Alexey Bobkov, Samuel Georges
 */
class TagProcessor
{
    use \October\Rain\Support\Traits\Singleton;

    /**
     * @var array Cache of processing callbacks.
     */
    private $callbacks = [];

    /**
     * Registers a callback function that handles tour post markup.
     * The callback function should accept two arguments - the HTML string
     * generated from Markdown contents and the preview flag determining whether
     * the function should return a markup for the tour post preview form or for the
     * front-end.
     * @param callable $callback A callable function.
     */
    public function registerCallback(callable $callback)
    {
        $this->callbacks[] = $callback;
    }

    public function processTags($markup, $preview)
    {
        foreach ($this->callbacks as $callback)
            $markup = $callback($markup, $preview);

        return $markup;
    }
}