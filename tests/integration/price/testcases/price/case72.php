<?php
/* 
 * Price enter mode: netto
 * Price view mode: netto 
 * Articles: 8 with prices of 0.5
 * Discounts: 8
 *  1. shop + abs : 20, -10, -5.2, 5.5
 *  2. shop + %   : 20, -10, -5.2, 5.5
 */
$aData = array (
        'articles' => array (
                1 => array (
                        'oxid'                     => '1001_a',
                        'oxprice'                  => 0.5,
                ),
                2 => array (
                        'oxid'                     => '1001_b',
                        'oxprice'                  => 0.5,
                ),
                3 => array (
                        'oxid'                     => '1002_a',
                        'oxprice'                  => 0.5,
                ),
                4 => array (
                        'oxid'                     => '1002_b',
                        'oxprice'                  => 0.5,
                ),
                5 => array (
                        'oxid'                     => '1003_a',
                        'oxprice'                  => 0.5,
                ),
                6 => array (
                        'oxid'                     => '1003_b',
                        'oxprice'                  => 0.5,
                ),
                7 => array (
                        'oxid'                     => '1004_a',
                        'oxprice'                  => 0.5,
                ),
                8 => array (
                        'oxid'                     => '1004_b',
                        'oxprice'                  => 0.5,
                ),
        ),
        'discounts' => array (
                1 => array (
                        'oxid'         => 'absFor1001',
                        'oxaddsum'     => 20,
                        'oxaddsumtype' => 'abs',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1001_a' ),
                ),
                2 => array (
                        'oxid'         => 'percentFor1001',
                        'oxaddsum'     => 20,
                        'oxaddsumtype' => '%',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1001_b' ),
                ),
                3 => array (
                        'oxid'         => 'absFor1002',
                        'oxaddsum'     => -10,
                        'oxaddsumtype' => 'abs',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1002_a' ),
                ),
                4 => array (
                        'oxid'         => 'percentFor1002',
                        'oxaddsum'     => -10,
                        'oxaddsumtype' => '%',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1002_b' ),
                ),
                5 => array (
                        'oxid'         => 'absFor1003',
                        'oxaddsum'     => -5.2,
                        'oxaddsumtype' => 'abs',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1003_a' ),
                ),
                6 => array (
                        'oxid'         => 'percentFor1003',
                        'oxaddsum'     => -5.2,
                        'oxaddsumtype' => '%',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1003_b' ),
                ),
                7 => array (
                        'oxid'         => 'absFor1004',
                        'oxaddsum'     => 5.5,
                        'oxaddsumtype' => 'abs',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1004_a' ),
                ),
                8 => array (
                        'oxid'         => 'percentFor1004',
                        'oxaddsum'     => 5.5,
                        'oxaddsumtype' => '%',
                        'oxprice'    => 0,
                        'oxpriceto' => 99999,
                        'oxamount' => 0,
                        'oxamountto' => 99999,
                        'oxactive' => 1,
                        'oxarticles' => array ( '1004_b' ),
                ),
        ),
        'expected' => array (
                '1001_a' => array (
                        'base_price' => '0,50',
                        'price' => '0,00',
                ),
                '1001_b' => array (
                        'base_price' => '0,50',
                        'price' => '0,40',
                ),
                '1002_a' => array (
                        'base_price' => '0,50',
                        'price' => '10,50',
                ),
                '1002_b' => array (
                        'base_price' => '0,50',
                        'price' => '0,55',
                ),
                '1003_a' => array (
                        'base_price' => '0,50',
                        'price' => '5,70',
                ),
                '1003_b' => array (
                        'base_price' => '0,50',
                        'price' => '0,53',
                ),
                '1004_a' => array (
                        'base_price' => '0,50',
                        'price' => '0,00',
                ),
                '1004_b' => array (
                        'base_price' => '0,50',
                        'price' => '0,47',
                ),
        ),
        'options' => array (
                'config' => array(
                        'blEnterNetPrice' => true,
                        'blShowNetPrice' => true,
                        'dDefaultVAT' => 20,
                ),
                'activeCurrencyRate' => 1,
        ),
);
