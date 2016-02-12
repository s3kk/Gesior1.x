It's working with the latest version of the MMORPG Tibia.

#1. To use the Addons & Mounts delivery follow the steps:

  * 1.1. Into your server folder, go to data/creaturescripts/scripts and create the file "addonmount.lua" with this code:

http://hastebin.com/raw/magaqugato

Now, creaturescripts.xml
<event type="login" name="ShopMountAddon" script="addonmount.lua"/>

  * 1.2. Go to data/globalevents/scripts and create/modify the file "shop.lua" with this code:

http://hastebin.com/raw/konufovuca

Now, globalevents.xml
<globalevent name="shop" interval="5" script="shop.lua"/>


#2. But not less important, follow these steps to create an Addon or Mount offer in the Website Shop:

  * Offer - Choose your offer's name
  ** Description - Describe your offer
  ** Points - Price of the offer
-----------------------------------
  * Offer Type:
  ** Type - choose beetween 'Item', 'Addons' and 'Mounts'
-----------------------------------
  * Configuring the Offer:
  ** ID of the product -- Here, choose the ID of the Item, but, if the offer is an Addon ou Mount, you must type the 'storage' that was quoted into creaturescripts/scripts/addonmount.lua
  ** Amount - Normally is 1, here is the amount of items/addons/mounts the offer delivers to the player