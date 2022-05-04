<?php

namespace Ebay\Buy\Deal\Api;

use Ebay\Buy\Deal\ResponseHandlerStack;
use OpenAPI\Runtime\AbstractAPI as BaseClass;

class AbstractAPI extends BaseClass implements APIInterface
{
    protected $responseHandlerStackClass = ResponseHandlerStack::class;

    public function __construct(?HttpClientInterface $client = null)
    {
        parent::__construct($client);
    }
}
