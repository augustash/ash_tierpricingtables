# Ash_TierPricingTables

### Overview:

Override Magento's tier pricing template to use a table instead of a list and adds some features for the following:

+ setting table headers
+ displaying quantities as ranges
+ deduce the missing first tier (i.e., if first tier is 5, then a faux table row will display a tier as '1 - 4')
+ show savings as one of the following options:
  - 'Currency Only' (i.e., '$10.80')
  - 'Percentage Only' (i.e., '6%' note: this uses the core Magento logic for tier pricing that has a `savePercent` value)
  - 'Both Currency and Percentage' (i.e., '$10.80 (6%)' )

**Dependencies**

+ Ash_Core


### External files/directories outside of this module:

+ app/code/community/Ash/TierPricingTables/
+ app/design/frontend/base/default/layout/ash_tierpricingtables.xml
+ app/design/frontend/base/default/template/ash_tierpricingtables/
+ app/etc/modules/Ash_TierPricingTables.xml
