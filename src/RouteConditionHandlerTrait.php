<?php

namespace League\Route;

trait RouteConditionHandlerTrait
{
    /**
     * @var string|null
     */
    protected $host;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $scheme;

    /**
     * @var int|null
     */
    protected $port;

    /**
     * {@inheritdoc}
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * {@inheritdoc}
     */
    public function setHost($host): RouteConditionHandlerInterface
    {
        $this->host = $host;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name): RouteConditionHandlerInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * {@inheritdoc}
     */
    public function setScheme($scheme): RouteConditionHandlerInterface
    {
        $this->scheme = $scheme;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * {@inheritdoc}
     */
    public function setPort($port): RouteConditionHandlerInterface
    {
        $this->port = $port;

        return $this;
    }
}
