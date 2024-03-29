<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'product_create_post' => [[], ['_controller' => 'TyCode\\ms\\Shop\\Controller\\Product\\PostProductCreate'], [], [['text', '/product']], [], [], []],
    'product_health_check_get' => [[], ['_controller' => 'TyCode\\ms\\Shop\\Controller\\HealthCheckGetController'], [], [['text', '/product-health-check']], [], [], []],
    'product_search_get' => [['id'], ['_controller' => 'TyCode\\ms\\Shop\\Controller\\Product\\GetProduct'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/product']], [], [], []],
    'product_search_all_get' => [[], ['_controller' => 'TyCode\\ms\\Shop\\Controller\\Product\\GetProducts'], [], [['text', '/products']], [], [], []],
    'product_search_by_criteria_get' => [[], ['_controller' => 'TyCode\\ms\\Shop\\Controller\\Product\\GetProductByCriteria'], [], [['text', '/product-by-criteria']], [], [], []],
    'review_checker_put' => [['product_id'], ['_controller' => 'TyCode\\ms\\Shop\\Controller\\Review\\PutCheckerReview'], [], [['variable', '/', '[^/]++', 'product_id', true], ['text', '/review']], [], [], []],
    'review_search_get' => [['product_id'], ['_controller' => 'TyCode\\ms\\Shop\\Controller\\Review\\GetReviewByProductId'], [], [['variable', '/', '[^/]++', 'product_id', true], ['text', '/review']], [], [], []],
];
