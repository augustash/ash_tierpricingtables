# Description

Overrides Magento's tier pricing template to use a table instead of a list and adds some features for the following:

+ setting table headers
+ displaying quantities as ranges
+ deduce the missing first tier (i.e., if first tier is 5, then a faux table row will display a tier as '1 - 4')
+ show savings as one of the following options:
  - 'Currency Only' (i.e., '$10.80')
  - 'Percentage Only' (i.e., '6%' note: this uses the core Magento logic for tier pricing that has a `savePercent` value)
  - 'Both Currency and Percentage' (i.e., '$10.80 (6%)' )


## Installation

* Install the extension via [Composer](https://getcomposer.org/)
* Install the extension via [modman](https://github.com/colinmollenhour/modman)
* You can also [download from Github](https://github.com/augustash/ash_tierpricingtables/archive/master.zip) and unzip the archive in your project root

## Dependencies

* [Ash_Core](https://github.com/augustash/ash_core)
