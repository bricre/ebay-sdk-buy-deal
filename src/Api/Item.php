<?php

namespace Ebay\Buy\Deal\Api;

use Ebay\Buy\Deal\Model\EventItemSearchResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Item extends AbstractAPI
{
    /**
     * This method returns a paginated set of event items. The result set contains all
     * event items associated with the specified search criteria and marketplace ID.
     * Request headers This method uses the X-EBAY-C-ENDUSERCTX request header to
     * support revenue sharing for eBay Partner Networks and to improve the accuracy of
     * shipping and delivery time estimations. For details see, Request headers in the
     * Buying Integration Guide. Restrictions This method can return a maximum of
     * 10,000 items. For a list of supported sites and other restrictions, see API
     * Restrictions. eBay Partner Network: In order to receive a commission for your
     * sales, you must use the URL returned in the itemAffiliateWebUrl field to forward
     * your buyer to the ebay.com site.
     *
     * @param array $queries options:
     *                       'category_ids'	string	The unique identifier of the eBay category for the search.
     *                       Maximum Value: 1
     *                       'delivery_country'	string	A filter for items that can be shipped to the
     *                       specified country.
     *                       'event_ids'	string	The unique identifiers for the eBay events. Maximum Value: 1
     *                       'limit'	string	The maximum number of items, from the current result set,
     *                       returned on a single page. Default: 20
     *                       'offset'	string	The number of items that will be skipped in the result set. This
     *                       is used with the limit field to control the pagination of the output. For
     *                       example, if the offset is set to 0 and the limit is set to 10, the method will
     *                       retrieve items 1 through 10 from the list of items returned. If the offset is
     *                       set to 10 and the limit is set to 10, the method will retrieve items 11 through
     *                       20 from the list of items returned. Default: 0
     * @param array $headers options:
     *                       'X-EBAY-C-MARKETPLACE-ID'	string	A header used to specify the eBay marketplace
     *                       ID
     *
     * @return EventItemSearchResponse|UnexpectedResponse
     */
    public function gets(array $queries = [], array $headers = [])
    {
        return $this->request(
        'getEventItems',
        'GET',
        'event_item',
        null,
        $queries,
        $headers
        );
    }
}
