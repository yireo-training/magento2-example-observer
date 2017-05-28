# ExampleObserver module for Magento 2
Dummy module to show the behaviour of monitoring observable events using an observer. This observer simply logs pointless details from the request.

# Installation
To install use the following composer command:

    composer require yireo-training/magento2-example-observer

Next enable the module:

    bin/magento module:enable Yireo_ExampleObserver
    bin/magento setup:upgrade
    
And flush the cache:

    bin/magento cache:clean

# Proof of concept
After installing the module, every frontend action should be logged to `var/log/system.log`.
