<?php

if (!file_exists("dbs"))
	mkdir("dbs", 0700);
$path = ".admin_account";
$new_admin = unserialize(file_get_contents($path));
file_put_contents("dbs/users", serialize($new_admin));

$new_item['name'] = 'Cockail Molotov';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Explo/CocktailMolotov.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'C4';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '25';
$new_item['img'] = 'img/Explo/C-4.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Cryo Grenade';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '30';
$new_item['img'] = 'img/Explo/CryoGrenade.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Cryo Mine';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '30';
$new_item['img'] = 'img/Explo/CryoMine.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Dynamite';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Explo/Dynamite.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Grenade Flash';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '20';
$new_item['img'] = 'img/Explo/Flash_bang.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Grenade classique';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '15';
$new_item['img'] = 'img/Explo/FRAG_GRE.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Mine Classique';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '15';
$new_item['img'] = 'img/Explo/FragMine.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Grenade Gas';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '15';
$new_item['img'] = 'img/Explo/Gas_bomb.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '15';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Grenade Incendiaire';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '20';
$new_item['img'] = 'img/Explo/Incend.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Mine Plasma';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '30';
$new_item['img'] = 'img/Explo/Plasma_mine.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Grenade Plasma';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Explo/PlasmaGrenade.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Grenade Pulse';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '20';
$new_item['img'] = 'img/Explo/PulseGrenade.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Mine Pulse';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '25';
$new_item['img'] = 'img/Explo/PulseMine.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Grenade Stun';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '20';
$new_item['img'] = 'img/Explo/Stun_grenade.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Time Bombe';
$new_item['cat'] = 'Explosives';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '15';
$new_item['img'] = 'img/Explo/TimeBombFNV.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre .5';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/5.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre 9mm';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/9.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre 10mm';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/10mm.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre 12.7';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/12.7.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Cartouche Classique';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '15';
$new_item['img'] = 'img/Munitions/shot.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Cartouche Chevrotine';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/20shot.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre .32';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/32.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre .40';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/40.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre .44';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/44mg.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre 45-70';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/45-70.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre .357';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/357mag.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Munitions calibre .45';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/F.45.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Clous';
$new_item['cat'] = 'Ammunitions';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '10';
$new_item['img'] = 'img/Munitions/Nails.jpg';
$new_item['promo'] = '2';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'SMG 9mm';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Auto';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Auto/9mm_SMG.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'UZI 9mm';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Auto';
$new_item['price'] = '450';
$new_item['img'] = 'img/Armes/Auto/9mm_UZI.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'SMG 10mm';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Auto';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Auto/10mm_SMG_auto.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Pistolet a Clous';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Auto';
$new_item['price'] = '100';
$new_item['img'] = 'img/Armes/Auto/nail_gun.jpg';
$new_item['promo'] = '2';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Sleepytime 9mm';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Auto';
$new_item['price'] = '450';
$new_item['img'] = 'img/Armes/Auto/Sleepytyme_5.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'USM1 .45';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '600';
$new_item['img'] = 'img/Armes/Fusils/45_usm1_auto.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Bar';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '600';
$new_item['img'] = 'img/Armes/Fusils/Bar.jpg';
$new_item['promo'] = '2';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Fusil de Combat';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Fusils/Battle_rifle.jpg';
$new_item['promo'] = '2';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Dinner Bell';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Fusils/DinnerBell.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Fusil a Pompe';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '350';
$new_item['img'] = 'img/Armes/Fusils/Lever.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Fusil a Pompe Lever';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Fusils/lever_b.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'M16';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '600';
$new_item['img'] = 'img/Armes/Fusils/M16.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'M16 Camouflage';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '600';
$new_item['img'] = 'img/Armes/Fusils/M16_camo.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Sniper';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '650';
$new_item['img'] = 'img/Armes/Fusils/Snip.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Sniper semi-auto';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Fusils';
$new_item['price'] = '700';
$new_item['img'] = 'img/Armes/Fusils/Spar.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Springfield 9mm';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '250';
$new_item['img'] = 'img/Armes/Pistol/9mm_Pistol.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Devil 10mm';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '350';
$new_item['img'] = 'img/Armes/Pistol/10dev.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Shark 10mm';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '350';
$new_item['img'] = 'img/Armes/Pistol/10mm_pistol.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'The One';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Pistol/10ThatGun.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Bullet 12.7';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '350';
$new_item['img'] = 'img/Armes/Pistol/12,7mm_Pistol.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Glock .45';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '250';
$new_item['img'] = 'img/Armes/Pistol/45_Auto_pistol.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Glock .45 Croco';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '300';
$new_item['img'] = 'img/Armes/Pistol/45_Auto_pistol2.jpg';
$new_item['promo'] = '2';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = '357 Magnum';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Pistol/357_magnum_revolver.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = '357 Magnum Precision';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '420';
$new_item['img'] = 'img/Armes/Pistol/357rev.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Lucky One';
$new_item['cat'] = 'Weapons';
$new_item['cat2'] = 'Pistolet';
$new_item['price'] = '400';
$new_item['img'] = 'img/Armes/Pistol/Lucky357Magnum.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Armure Combat';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '250';
$new_item['img'] = 'img/Equipement/Combat.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Armure Ranger';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '200';
$new_item['img'] = 'img/Equipement/Ranger.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Armure Rivet';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '250';
$new_item['img'] = 'img/Equipement/Rivet.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Armure T51';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '450';
$new_item['img'] = 'img/Equipement/T51.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Armure Talon';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '250';
$new_item['img'] = 'img/Equipement/Talon.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Armure Tenp';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '250';
$new_item['img'] = 'img/Equipement/Tenp.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Armure Tesla';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '450';
$new_item['img'] = 'img/Equipement/Tesla.jpg';
$new_item['promo'] = '2';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Casque FO3';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '120';
$new_item['img'] = 'img/Equipement/FO3.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Casque Hellfire';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '120';
$new_item['img'] = 'img/Equipement/Hellfire.jpg';
$new_item['promo'] = '1';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Casque T45';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '110';
$new_item['img'] = 'img/Equipement/T45d.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

$new_item['name'] = 'Casque T51';
$new_item['cat'] = 'Equipment';
$new_item['cat2'] = 'cat2';
$new_item['price'] = '150';
$new_item['img'] = 'img/Equipement/T51h.jpg';
$new_item['promo'] = '0';
$new_item['stock'] = '10';
$new_item['des'] = "testest";
$items[] = $new_item;

file_put_contents("dbs/items", serialize($items));
$new_cat['name'] = 'Explosives';
$cat[] = $new_cat;

$new_cat['name'] = 'Ammunitions';
$cat[] = $new_cat;

$new_cat['name'] = 'Weapons';
$cat[] = $new_cat;

$new_cat['name'] = 'Equipment';
$cat[] = $new_cat;

file_put_contents("dbs/comodities", serialize($cat));
?>
