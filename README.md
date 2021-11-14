# Mage2 Module Vignates Import

    ``Vignates/module-import``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Specifications](#markdown-header-specifications)


## Main Functionalities
Customer Import via CSV & JSON

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Vignates`
 - Enable the module by running `php bin/magento module:enable Vignates_Import`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Install the module composer by running `composer require vignates/module-import`
 - enable the module by running `php bin/magento module:enable Vignates_Import`
 - apply database updates by running `php bin/magento setup:upgrade`
 - Flush the cache by running `php bin/magento cache:flush`


## Specifications

 - Console Command
	- JSON profile - Place json inside var/import/ folder 
	-`php bin/magento customer:import sample-json var/import/sample.json`
    - CSV profile - Place CSV inside var/import/ folder
    -`php bin/magento customer:import sample-csv var/import/sample.csv`



