<?php

namespace League\Route;

interface RouteConditionHandlerInterface
{
    /**
     * Get the host condition
     *
     * @return string|null
     */
    public function getHost();

    /**
     * Set the host condition
     *
     * @param string $host
     *
     * @return static
     */
    public function setHost($host): RouteConditionHandlerInterface;

    /**
     * Get the route name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set the route name
     *
     * @param string $name
     *
     * @return static
     */
    public function setName($name): RouteConditionHandlerInterface;

    /**
     * Get the scheme condition
     *
     * @return string|null
     */
    public function getScheme();

    /**
     * Set the scheme condition
     *
     * @param string $scheme
     *
     * @return static
     */
    public function setScheme($scheme): RouteConditionHandlerInterface;

    /**
     * Get the port condition
     *
     * @return int|null
     */
    public function getPort();

    /**
     * Set the port condition
     *
     * @param int $port
     *
     * @return static
     */
    public function setPort($port): RouteConditionHandlerInterface;
}
