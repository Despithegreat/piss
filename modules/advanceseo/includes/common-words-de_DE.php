<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$common = array('fähig', 'ungefähr', 'über', 'handeln', 'hinzufügen', 'ängstlich', 'nach', 'wieder', 'gegen', 'Alter', 'vor', 'zustimmen', 'alle', 'fast', 'allein', 'zusammen', 'bereits', 'auch', 'obwohl', 'immer', 'bin', 'Menge', 'ein und', 'Wut', 'wütend', 'Tier', 'ein anderes', 'Antwort', 'jedes', 'erscheinen', 'Apfel', 'sind', 'kommen', 'Arm', 'Arme', 'um', 'kommen', 'as', 'ask', 'at', 'attempt', 'aunt', 'away', 'back', 'bad', 'bag', 'bay', 'be', 'become', 'Weil', 'werden', 'gewesen', 'bevor', 'begann', 'beginnen', 'hinter', 'sein', 'Glocke', 'gehören', 'unter', 'neben', 'am besten', 'besser', 'zwischen', 'jenseits', 'groß', 'Körper', 'Knochen', 'geboren', 'geliehen', 'beide', 'unten', 'Box', 'Junge', 'break', 'bring', 'bring', 'bug', 'built', 'busy', 'but', 'buy', 'by', 'call', 'came', 'can', 'cause', 'wählen', 'schließen', 'schließen', 'überlegen', 'kommen', 'überlegen', 'beträchtlich', 'enthalten', 'fortsetzen', 'könnten', 'weinen', 'schneiden', 'Wagen', 'Dunkel', 'Deal', 'Lieber', 'Entscheiden', 'Tief', 'Haben', 'Sterben', 'Tun', 'Hund', 'Gemacht', 'Zweifel', 'down', 'during', 'each', 'ear', 'early', 'eat', 'effort', 'both', 'else', 'end', 'enjoy', 'enough', 'enter', 'etc', 'even', 'ever', 'every', 'except', 'expect', 'explain', 'fail', 'fall', 'far', 'fat', 'favour', 'fear', 'feel', 'Füße', 'fielen', 'fühlte', 'wenige', 'füllen', 'finden', 'passen', 'fliegen', 'folgen', 'für', 'für immer', 'vergessen', 'von', 'front', 'full', 'fully', 'given', 'get', 'gives', 'goes', 'gone', 'good', 'got', 'grey', 'great', 'grün', 'wuchs', 'wachsen', 'raten', 'hatte', 'halb', 'hängen', 'geschehen', 'hat', 'hat', 'hat', 'er', 'hören', 'gehört', 'gehalten', 'hallo', 'geholfen', 'sie', 'hier', 'ihre', 'hoch', 'am höchsten', 'hoch', 'hügel', 'ihn', 'sein', 'hit', 'hold', 'hot', 'how', 'jedoch', 'if', 'ill', 'in', 'include', 'inclusive', 'included', 'in der Tat', 'statt', 'in', 'Eisen', 'ist', 'es', 'nur', 'behalten', 'gehalten', 'gewusst', 'wissen', 'bekannt', 'spät', 'am wenigsten', 'geführt', 'links', 'verleihen', 'weniger', 'lassen', 'wie', 'wahrscheinlich', 'einsam', 'lang', 'länger', 'guck', 'lot', 'make', 'many', 'may', 'me', 'mean', 'met', 'might', 'mi le', 'mine', 'moon', 'more', 'most', 'move', 'much', 'must', 'my', 'near', 'almost', 'needed', 'both', 'nie', 'nächste', 'nein', 'keine', 'noch', 'nicht', 'notieren', 'nichts', 'jetzt', 'nummer', 'von', 'aus', 'oft', 'oh', 'on', 'once', 'only', 'or other', 'ought', 'our', 'out', 'please', 'prepare', 'probable', 'Pull', 'Pure', 'Push', 'Put', 'Raise', 'Ran', 'Lieber', 'Reach', 'Realise', 'Reply', 'Require', 'Rest', 'rennen', 'sagte', 'gleich', 'saß', 'sah', 'sagen', 'sehen', 'scheinen', 'gesehen', 'selbst', 'verkaufen', 'gesendet', 'getrennt', 'set', 'soll', 'sie', 'sollte', 'side', 'sign', 'da', 'so', 'verkauft', 'einige', 'bald', 'sorry', 'bleib', 'schritt', 'stick', 'still', 'stand', 'so', 'plötzlich', 'nimm', 'nimm', 'nimm', 'sprich', 'groß', 'sag', 'zehn', 'als', 'danke', 'das', 'ihr', 'sie', 'dann', 'dort', 'daher', 'diese', 'sie', 'diese', 'jene', 'obwohl', 'durch', 'bis', 'bis', 'heute', 'sagte', 'morgen', 'auch', 'nahm', 'riss', 'lernte', 'nach', 'versucht', 'versucht', 'vertrauen', 'versuchen', 'wenden', 'nicht wo', 'under', 'till', 'up', 'upon', 'us', 'use', 'usual', 'various', 'verb', 'very', 'visit', 'want', 'war', 'wir', 'gut', 'ging', 'waren', 'was', 'wann', 'wo', 'ob', 'was', 'während', 'weiß', 'wer', 'wen', 'wessen', 'warum', 'wird', 'mit', 'innerhalb', 'ohne', 'würde', 'ja', 'noch', 'du', 'jung', 'dein', 'dein');

?>