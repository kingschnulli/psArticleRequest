<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @copyright (c) ProudCommerce | 2019
 * @link www.proudcommerce.com
 * @package psArticleRequest
 * @version 3.0.0
 **/
$sLangName = "Deutsch";

$aLang = [
    'charset' => 'UTF-8',

    'NAVIGATION_PSMODULE'                          => 'ProudCommerce Module',
    'psarticlerequest'                             => 'psArticleRequest',
    'psarticlerequest_request'                     => 'Übersicht',
    'psarticlerequest_settings'                     => 'Einstellungen',
    'tbclpsarticlerequest_detail'                  => 'Stamm',
    'tbclpsarticlerequest_settings_detail'                  => 'Stamm',
    'SHOP_MODULE_GROUP_psArticleRequest_config'    => 'Allgemein',
    'SHOP_MODULE_psArticleRequest_stockinfo'       => 'Lagerbestandsinfo',
    'HELP_SHOP_MODULE_psArticleRequest_stockinfo'  => '<b>manuell:</b> eMails werden nur versendet wenn man die Aktion in der psArticleRequest-Übersicht veranlasst.<br><br><b>wenn wieder Lagerbestand (nach Datum):</b> Beim Erhöhen des Bestands (z. B. +3) werden die erste drei Kunden informiert welche eine Verfügbarkeitsanfrage gestellt haben.<br><br><b>wenn wieder Lagerbestand (alle Anfrage):</b> Beim Erhöhen des Bestands im Shop-Admin werden alle Kunden informiert welche eine Verfügbarkeitsanfrage gestellt haben.<br><br><b>Cronjob:</b> Sofern der Cronjob aktiv ist werden über diesen automatisch Kunden informiert versendet, sofern ein Artikel wieder verfügbar ist.',
    'SHOP_MODULE_psArticleRequest_cronkey'         => 'Cron-Job Key',
    'HELP_SHOP_MODULE_psArticleRequest_cronkey'    => 'URL: https://shop.tld/?cl=psArticleRequest_cron&key=KEY',
    'SHOP_MODULE_psArticleRequest_minstock'        => 'Minimaler Bestand',
    'HELP_SHOP_MODULE_psArticleRequest_minstock'   => 'Wird nur beim automatischen Versand der Nachrichten per Cronjob berücksichtigt.',
    'SHOP_MODULE_psArticleRequest_stockinfo_man'   => 'manuell',
    'SHOP_MODULE_psArticleRequest_stockinfo_auto1' => 'wenn wieder Lagerbestand (nach Datum)',
    'SHOP_MODULE_psArticleRequest_stockinfo_auto2' => 'wenn wieder Lagerbestand (alle Anfragen)',
    'SHOP_MODULE_psArticleRequest_usevarstock'     => 'Varianten Bestand berücksichtigen',
    'HELP_SHOP_MODULE_psArticleRequest_usevarstock'=> 'Wenn aktiv werden auch die Varianten Bestände berücksichtigt, der Kunde erhält dann eine Nachricht wenn eine der Varianten des Hauptartikels wieder auf Lager ist.',
    'PS_ARTICLEREQUEST_NAME'                       => "Kunde",
    'PS_ARTICLEREQUEST_CONFIRMATION_DATE'          => "eingetragen am",
    'PS_ARTICLEREQUEST_SHIPPING_DATE'              => "informiert am",
    'PS_ARTICLEREQUEST_PRODUCT'                    => "Artikel",
    'PS_ARTICLEREQUEST_EMAIL'                      => "eMail-Adresse",
    'PS_ARTICLEREQUEST_STOCK'                      => "Aktueller Lagerbestand",
    'PS_ARTICLE_REQUEST_DETAIL_EMAILSEND'          => "Nachricht versenden",
    'PS_ARTICLE_REQUEST_LIST_MENUITEM'             => "Verfügbarkeitsanfragen",
    'PS_ARTICLE_REQUEST_LIST_MENUSUBITEM'          => "Verfügbarkeitsanfrage",
    'PS_ARTICLEREQUEST_SEND_SUBJECT_AV'            => 'Anfrage',
    'PS_ARTICLE_REQUEST_MAIL_AV1'                  => 'Wir möchten Sie darüber informieren, dass der Artikel',
    'PS_ARTICLE_REQUEST_MAIL_AV2'                  => 'wieder lieferbar ist.',
    'PS_ARTICLE_REQUEST_MAIL_AV3'                  => 'Sie hatten sich am',
    'PS_ARTICLE_REQUEST_MAIL_AV4'                  => 'eingetragen, um eine Nachricht zu erhalten, sobald das Produkt wieder verfügbar ist.',
    'PS_ARTICLE_REQUEST_MAILNOTSEND'               => 'E-Mail konnte nicht verschickt werden.',
    'PS_ARTICLEREQUEST_LIMITTOCATEGORY' => 'Anfrage-Formular auf Kategorien beschränken',
];
