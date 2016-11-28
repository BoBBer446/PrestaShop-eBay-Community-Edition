Keine geblockten Länder!
No blocked Countries!

 

Original Prestashop Store: http://addons.prestashop.com/de/2742-ebay-marketplace-offiziells.html

Original 202commerce Site: http://www.202-ecommerce.com/en/partners-modules/ebay-en/

How to Update:
Copy all files from Archiv to your Moduls folder.

Check your Database with the modul options.

Wie aktualisierst du die Daten:
Kopiere alle Dateien von der .ZIP Datei in deinen Modul Ordner.

Prüfe deine Datenbank mit der Funktion im Modul.

Man kann jetzt Rahmenbedingungen Nutzen die bei eBay hinterlegt sind!

 

Aktuell:

1.15.2 – Early December 2016 – Bug fix

    Enhanced feature : Auto check additionnal shipping cost is below shipping cost (otherwise refused by eBay API)
    Enhanced feature : Alert merchant if root cat is not activated
    Bug fix : Customer creation crash when newsletter activated
    Bug fix : Multiple order symptom
    Bug fix : Tocken regeneration is mandatory after BP activation
    Bug fix : PrestaShop validator : add pSQL()
    Bug fix : Various RC bugs

 

Next Version:

    New feature : PrestaShop 1.7 compatibity
    New feature : Add support for eBay Ireland
    Enhanced feature : PrestaShop validator compatibity
    Enhanced feature : Reduction of number of API calls
    Enhanced feature : Explicitly list unhandled carriers + help

 

Old changelog:
Spoiler

1.15.1 – Mid November 2016 – New features

    New feature : eBay Money Back Guarantee support
    New feature : OutOfStock status
    Bug fix : Create a new seller profile (Item.SellerProfiles.SellerShippingProfile.ShippingProfileID)
    Bug fix : Add the tracking number with orders

1.14.0 – July 26 2016 – New features

    New feature : Support for eBay feature “Business Policies”
    Enhanced feature : Product codes : send “Unbranded” when no brand is defined
    Enhanced feature : Blocked new module installation based in Italy, Germany & UK (merchant may use 1.13.2 below).

1.13.2 – June 16 2016 – Bug fix

    Bug fix : special caracters in product title crash product synch
    Bug fix: Add method who doesn’t exist on prestashop 1.4
    Download The version 1.13.2 eBay

1.13.1 – June 6 2016 – New features & bug fix

    New feature : category definition upgrader (help)
    Improvement : module database check & fix improved (now also check & fix columns)
    Bug fix : category do not load for new users in specific configuration
    Bug fix : special caracters in product title crash product synch

1.13.0 – May 18 2016 – Bug fix, improvement and stability

    New feature : hide “Store categories” tab content when no shop is linked to eBay account
    New feature : added max number of image sent for product variation in advanced options
    New feature : new logging system for quicker support analysis
    Enhanced feature : automatic workaround to allow import of order even if customer email is deprecated
    Enhanced feature : Added more help texts
    Enhanced feature : “Does not apply” option for Product Code Synch is set by default
    Bug fix : configuration saving in multishop context
    Bug fix : reviewed & fixed context when importing orders
    Bug fix : VAT for orders out of activated PrestaShop countries
    Bug fix : Product synch specific issues

1.12.3 – March 14 2016 – Enhanced feature

    Enhanced feature : Added “Does not apply” option for EAN Synch
    Bug fix : EAN code for combination

1.12.0 – January 29 2016 – Bug fix, improvement and stability

    New feature : Added ability to send EAN to eBay
    Improvement (support ease & autonomous analysis) : new “Vizualisation” screens “PrestaShop Products” & “API Logs”.
    Improvement (support ease & autonomous analysis) : added direct link to module KB (help.202-ecommerce.com)
    Improvement (solidity) : ajax loading of categories
    Improvement (solidity) : ajax loading of Item Specific
    Improvement (autonomous analysis) : UI/UX improvements
    Improvement : usage stats

1.11- July 22 2015 – Bug fix, improvement and stability

    New feature : ensure image format used for listing creation is big enough (new ebay image size requirements)
    New feature : new overview screen to list all products synch with eBay, including synch settings & orphan listings
    New feature : Redesign of categories’ screen
    Enhanced feature : more helpers and alert messages to reduce misconfiguration of the module
    Enhanced feature : order synch – use of item ID when SKU cannot be found when creating orders in PrestaShop
    Enhanced feature : Added warning concerning CRON Task
    Bug fix : on ebay_user length

1.10.2 – May 05 2015 – Bug fix-New feature

    Bug fix : This add little fixes concerning store categories and allows user to use HTML view for tinymce on 1.6.
    New feature : list the parent categories and sub categories in tab ebay store categories

1.10.1- March 13 2015 – Bug fix

    Bug fix : Pagination on categories in tab eBay store categories

1.10.0 – March 11 2015 – Bug fixes

    Bug fix : Pagination on categories
    Bug fix : Double image product
    Bug fix : Database on 32 bits blocks store category configuration
    Bug fix : on CRON usages
    Bug fix : when API logs are enabled and user changes states
    Bug fix : on sending shipping code
    Bug fix : Fixed when installing the module without configurating it
    Bug fix : when an order has two same product with two different variations
    Bug fix : Send store category on revise fixed price item
    Bug fix : Use POST on jquery ajax call to use https or http
    Bug fix : Deletes javascript format on description
    Enhanced feature : Send tracking number
    Enhanced feature : Use of $params[‘id_product’] if $params[‘product’]->id does not exists
    New feature : Alert when user tries to connect with email and not ebay username

1.9.2 – January 08 2015 – Bug fixes

    Bug fix : Pagination tab “category”
    Bug fix : Pagination tab “category eBay”
    Bug fix : Correction link tutorial videos

1.9.1 – December 10 2014 – New features

    New feature : eBay Shop category Configuration
    New feature : Sync orders status from PS to eBay
    New feature : Promotional prices report on eBay
    New feature : Functional logs
    New feature : Immediat payment
    New feature : UI / UX rework, including better error managment
    New feature : Automaticaly delete data that is not allowed by eBay in descriptionsBug fix : Synchronization is performed on all quantities saved profiles.
    Bug fix : Images to multivariation products are now selected.
    Bug fix : JavaScript error which prevented configuring the shipping tab was corrected
    Bug fix : These are the currency configured in the profiles that are taken into account and not the default currency of PrestaShop

1.8.2 – October 27 2014 – Bug fix

    Bug fix : when module is installed but not configured, fatal error at regular ordering

1.8.1 – September 17 2014 – New feature

    New feature : Support of active CBT (Cross Border Trade) = multiple eBay accounts / multiple eBay sites.

1.7.2 – August 19 2014 – Bug fix

    Bug fix : when PHP version lower than 5.2 use of anonymous functions

1.7.1 – August 13 3014 – New features

    New feature : MultiShop support
    New feature : Template Preview
    New feature : UI / UX design
    New feature : Shipping zone per shipping service
    New feature : Manually sync orders
    New feature : CRON Tasks to automatically sync products and orders
    New feature : Stats for eBay use
    New feature : Category configuration on multiple pages to avoid max_post_vars
    New feature : List of synchronized products with link to eBay product
    New feature : Activate log manually
    Bug fix : Order Formating to improve order synchronization

1.6.7 – April 30 2014 – Minor release

    New feature : Support of eBay.de, eBay.ch, eBay.at
    Bug fix : for PrestaShop 1.4 and categories updating in eBay
    Bug fix : when multiples product in order from eBay, only count one time the shipping fees
    Bug fix : function updateByIdProduct()
    Bug fix : when using PrestaShop 1.5.2, not loading fancybox and blocking configuration tabs
    Compatibility with PrestaShop 1.6

1.6.4 – February 11 2014 – Bug Fix

    Bug fix : Added bug fix because of evolution of PrestaShop : empty cache of stocks

1.6.3 – January 15 2014 – Bug Fix + I18N

    Translation : added translation for Help tab in Italian, Spanish, Polish, Dutch
    Bug fix : handling fee taking into the shipping fee when enabled on carrier

1.6.2 – January 13 2014 – Bug Fix + I18N

    Bug fix : merchant located out of supported countries can now access the module
    Bug fix : color of buttons in Firefox
    Translation : added all transations of documentation (PDF file) except EN

1.6.1 – December 3rd 2013 – Bug Fix

    Bug fix : upgrade tool

1.6.0 – November 28 2013 – New features

    New feature : added support of new eBay site : Belgium, Poland & Netherland
    New feature : destination eBay site is now a manual choice
    New feature : added doc (PDF file) in english onlyhttp://www.202-ecomm...ebay/doc_en.pdf
    New feature : added inline help
    Improvement : UI/UX
    New feature : added support of return shipping cost assignment
    New feature : choose size of images sent to eBay

1.5.3 – October 7 – Bug Fix

    Bug fix : losing sql connection in particular context
    Bug fix : item revision leads to addition because cast in int was not working (item_ref is not an int)
    Bug fix : problem with item condition

1.5.2 – September 9 – Bug Fix

    Bug fix : fixed bug for carrier with free shipping return 0 instead of false !
    Bug fix : check if EbayCountrySpec exists before using it (for version 1.4 of PrestaShop)
    Bug fix : shipping fee not calculated in particular context
    Bug fix : variations sending for PrestaShop 1.4.
    Bug fix : multishop with context set to group

1.5.1 – August 20 – Bug Fix –

    Bug fix : issue on I18N : all PS 1.4.x merchants get english in BO

1.5.0 – August 14 2013 – New features

    New feature : single product submission
    New feature : support for Item Specifics
    New feature : support for add more than one image (paying option)
    Improvment : eBay account authentication process
    Improvment : images behavior : position and not order
    Improvment : code refactoring (coding standards)
    Improvment : compatibility with Prestabox

1.4.1 – May 8 2013 – Bug Fix

    New feature : added support for listing title up to 80 caracters (instead of 50)
    Bug fix : support for latin letters in brand names
    Bug fix : Orders using API payment modules error on PrestaShop due to eBay module

1.4.0 – April 25 2013 – New features

    New feature : added support of new eBay site : Spain & UK
    New feature : added support for eBay policies
    New feature : added support of handeling time
    New feature : added support of listing duration
    New feature : added support of Item Condition
    New feature : product price impact now set in fix amount (on top of existing %) & more than 5%
    New feature : added the tab “Shipping fees” with national & international fees based on PS carrier
    Improvement : eBay account authentication system fixes
    Improvement : categories loading in Ajax to avoid memory limits of servers

1.3.6.1 – October 18 2012 – Bug fix

    Bug fix : fixed various bug identified by PrestaShop during Q1 & Q2 2012

1.3.6 – September 2012 – New features

    New feature : added support of new eBay site : Italy
    New feature : ? done by PrestaShop
