<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Magento
 * @package     performance_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

return array(
    'application' => array(
        'url_host' => '{{web_access_host}}',
        'url_path' => '{{web_access_path}}',
        'admin' => array(
            'frontname' => 'backend',
            'username'  => 'admin',
            'password'  => '123123q',
        ),
        'installation' => array(
            'options' => array(
                'license_agreement_accepted' => 'yes',
                'locale'                     => 'en_US',
                'timezone'                   => 'America/Los_Angeles',
                'default_currency'           => 'USD',
                'db_host'                    => '{{db_host}}',
                'db_name'                    => '{{db_name}}',
                'db_user'                    => '{{db_user}}',
                'db_pass'                    => '{{db_password}}',
                'use_secure'                 => 'no',
                'use_secure_admin'           => 'no',
                'use_rewrites'               => 'no',
                'admin_lastname'             => 'Admin',
                'admin_firstname'            => 'Admin',
                'admin_email'                => 'admin@example.com',
                'admin_no_form_key'          => 'yes',
                'cleanup_database'           => 'yes',
            ),
        ),
    ),
    'scenario' => array(
        'common_config' => array(
            'arguments' => array(
                'users' => 10,
                'loops' => 100,
            ),
        ),
        'scenarios' => array(
            'Add to Cart' => array(
                'file' => 'testsuite/add_to_cart.jmx',
                'fixtures' => array(
                    'testsuite/fixtures/catalog_product.php',
                ),
            ),
            'Advanced Search' => array(
                'file' => 'testsuite/advanced_search.jmx',
                'fixtures' => array(
                    'testsuite/fixtures/catalog_product.php',
                ),
            ),
            'Category View' => array(
                'file' => 'testsuite/category_view.jmx',
                'fixtures' => array(
                    'testsuite/fixtures/catalog_category.php',
                ),
            ),
            'Checkout' => array(
                'file' => 'testsuite/checkout.jmx',
                'fixtures' => array(
                    'testsuite/fixtures/catalog_product.php',
                ),
            ),
            'Home Page' => array(
                'file' => 'testsuite/home_page.jmx',
            ),
            'Product Edit' => array(
                'file' => 'testsuite/product_edit.jmx',
                'fixtures' => array(
                    'testsuite/fixtures/catalog_product.php',
                ),
            ),
            'Product View' => array(
                'file' => 'testsuite/product_view.jmx',
                'arguments' => array(
                    'product_url_key' => 'product-1.html',
                    'product_name'    => 'Product 1',
                ),
                'fixtures' => array(
                    'testsuite/fixtures/catalog_product.php',
                ),
            ),
            'Quick Search' => array(
                'file' => 'testsuite/quick_search.jmx',
                'fixtures' => array(
                    'testsuite/fixtures/catalog_product.php',
                ),
            ),
        ),
    ),
    'report_dir' => 'report',
);
