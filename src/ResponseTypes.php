<?php

namespace Ebay\Buy\Deal;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'fetchItemAspects' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCategoriesAspectResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDefaultCategoryTreeId' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\BaseCategoryTree',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategoryTree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategoryTree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySubtree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySubtree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySuggestions' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySuggestionResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemAspectsForCategory' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\AspectMetadata',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityProperties' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityMetadataResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityPropertyValues' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityPropertyValuesResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getMerchandisedProducts' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPublicKey' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\PublicKey',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getTopic' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Topic',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getTopics' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\TopicSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSubscriptions' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\SubscriptionSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createSubscription' => [
            '201.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSubscription' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Subscription',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'enableSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'disableSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'test' => [
            '202.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDestinations' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\DestinationSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createDestination' => [
            '201.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDestination' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Destination',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateDestination' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteDestination' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getConfig' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Config',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateConfig' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'bulkCreateOrReplaceInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkInventoryItemResponse',
            '207.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'bulkGetInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkGetInventoryItemResponse',
            '207.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'bulkUpdatePriceQuantity' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkPriceQuantityResponse',
            '207.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryItemWithSkuLocaleGroupid',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createOrReplaceInventoryItem' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteInventoryItem' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getInventoryItems' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryItems',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getProductCompatibility' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\Compatibility',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createOrReplaceProductCompatibility' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteProductCompatibility' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getInventoryItemGroup' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryItemGroup',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createOrReplaceInventoryItemGroup' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\BaseResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteInventoryItemGroup' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'bulkMigrateListing' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkMigrateListingResponse',
            '207.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'bulkCreateOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkOfferResponse',
            '207.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'bulkPublishOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\BulkPublishResponse',
            '207.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getOffers' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\Offers',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createOffer' => [
            '201.' => 'Ebay\\Sell\\Inventory\\Model\\OfferResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\EbayOfferDetailsWithAll',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\OfferResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteOffer' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getListingFees' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\FeesSummaryResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'publishOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\PublishResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'publishOfferByInventoryItemGroup' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\PublishResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'withdrawOffer' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\WithdrawResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'withdrawOfferByInventoryItemGroup' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getInventoryLocation' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\InventoryLocationResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createInventoryLocation' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteInventoryLocation' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'disableInventoryLocation' => [
            '200.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'enableInventoryLocation' => [
            '200.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getInventoryLocations' => [
            '200.' => 'Ebay\\Sell\\Inventory\\Model\\LocationResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateInventoryLocation' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createShippingQuote' => [
            '201.' => 'Ebay\\Sell\\Logistics\\Model\\ShippingQuote',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getShippingQuote' => [
            '200.' => 'Ebay\\Sell\\Logistics\\Model\\ShippingQuote',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createFromShippingQuote' => [
            '201.' => 'Ebay\\Sell\\Logistics\\Model\\Shipment',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getShipment' => [
            '200.' => 'Ebay\\Sell\\Logistics\\Model\\Shipment',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'downloadLabelFile' => [
            '200.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'cancelShipment' => [
            '200.' => 'Ebay\\Sell\\Logistics\\Model\\Shipment',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getProduct' => [
            '200.' => 'Ebay\\Commerce\\Catalog\\Model\\Product',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'search' => [
            '200.' => 'Ebay\\Commerce\\Catalog\\Model\\ProductSearchResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDealItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\DealItemSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEvent' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\Event',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEvents' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEventItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventItemSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
    ];
}
