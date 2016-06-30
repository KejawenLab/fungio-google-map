<?php

/*
 * This file is part of the Fungio Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Fungio\GoogleMap\Helper;

use Fungio\GoogleMap\Map;
use Fungio\JsonBuilder\JsonBuilder;

/**
 * Abstract helper.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
abstract class AbstractHelper
{
    /** @var \Fungio\GoogleMap\Helper\Utils\JsonBuilder */
    protected $jsonBuilder;

    /**
     * Creates an helper.
     *
     * @param \Fungio\JsonBuilder\JsonBuilder $jsonBuilder The json builder.
     */
    public function __construct(JsonBuilder $jsonBuilder = null)
    {
        if ($jsonBuilder === null) {
            $jsonBuilder = new JsonBuilder();
        }

        $this->setJsonBuilder($jsonBuilder);
    }

    /**
     * Gets the json builder.
     *
     * @return \Fungio\JsonBuilder\JsonBuilder The json builder.
     */
    public function getJsonBuilder()
    {
        return $this->jsonBuilder;
    }

    /**
     * Sets the json builder.
     *
     * @param \Fungio\JsonBuilder\JsonBuilder $jsonBuilder The json builder.
     */
    public function setJsonBuilder(JsonBuilder $jsonBuilder)
    {
        $this->jsonBuilder = $jsonBuilder;
    }

    /**
     * Gets the javascript container name according to the map.
     *
     * @param \Fungio\GoogleMap\Map $map The map.
     *
     * @return string The javascript container name.
     */
    protected function getJsContainerName(Map $map)
    {
        return $map->getJavascriptVariable().'_container';
    }
}