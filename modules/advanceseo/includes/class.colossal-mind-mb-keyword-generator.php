<?php
/**
* 2007-2015 PrestaShop
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
*  @copyright 2007-2015 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class colossal_mind_mb_keyword_gen
{
		var $contents;
		var $encoding;
		var $lang;
		var $ignore;
		var $keywords;
		var $wordLengthMin;
		var $wordOccuredMin;
		var $word2WordPhraseLengthMin;
		var $phrase2WordLengthMinOccur;
		var $word3WordPhraseLengthMin;
		var $phrase2WordLengthMin;
		var $phrase3WordLengthMinOccur;
		var $phrase3WordLengthMin;
		public function colossal_mind_mb_keyword_gen($params)
		{
				if (!isset($params['lang']))
						$this->lang = 'en_GB';
				else
						$this->lang = $params['lang'];
				if (!isset($params['encoding']))
						$this->encoding = 'UTF-8';
				else
						$this->encoding = Tools::strtoupper($params['encoding']);
				mb_internal_encoding($this->encoding);
				if (isset($params['ignore']) && is_array($params['ignore']))
						$this->ignore = $params['ignore'];
				else
						$this->ignore = false;
				if ($this->ignore !== false && in_array($this->lang, $this->ignore))
						$this->contents = false;
				else
						$this->contents = $this->process_text($params['content']);
				if (isset($params['min_word_length']))
				$this->wordLengthMin = $params['min_word_length'];
				else 
				$this->wordLengthMin = 5;
				if (isset($params['min_word_occur'])) 
				$this->wordOccuredMin = $params['min_word_occur'];
				else
				$this->wordOccuredMin = 3;
				if (isset($params['min_2words_length']) && $params['min_2words_length'] == 0)
					$this->word2WordPhraseLengthMin = false;
				elseif (isset($params['min_2words_length']) && $params['min_2words_length'] !== 0)
				{
						$this->word2WordPhraseLengthMin  = $params['min_2words_length'];
						$this->phrase2WordLengthMin      = $params['min_2words_phrase_length'];
						$this->phrase2WordLengthMinOccur = $params['min_2words_phrase_occur'];
				}
				else
				{
						$this->word2WordPhraseLengthMin  = 4;
						$this->phrase2WordLengthMin      = 8;
						$this->phrase2WordLengthMinOccur = 3;
				}
				if (isset($params['min_3words_length']) && $params['min_3words_length'] == 0)
				$this->word3WordPhraseLengthMin = false;
				elseif (isset($params['min_3words_length']) && $params['min_3words_length'] !== 0)
				{
						$this->word3WordPhraseLengthMin  = $params['min_3words_length'];
						$this->phrase3WordLengthMin      = $params['min_3words_phrase_length'];
						$this->phrase3WordLengthMinOccur = $params['min_3words_phrase_occur'];
				}
				else
				{
						$this->word3WordPhraseLengthMin  = 4;
						$this->phrase3WordLengthMin      = 12;
						$this->phrase3WordLengthMinOccur = 3;
				}
		}
		public function get_keywords()
		{
				if ($this->contents === false)
				return '';
				$onew_arr = $this->parse_words();
				$twow_arr = $this->parse_2words();
				$thrw_arr = $this->parse_3words();
				if ($onew_arr !== false && $twow_arr !== false)
				{
						$cnt = count($onew_arr);
						for ($i = 0; $i < $cnt - 1; $i++)
						{
								foreach ($twow_arr as $key => $phrase)
								{
										if ($onew_arr[$i].' '.$onew_arr[$i + 1] === $phrase)
												unset($twow_arr[$key]);
								}
						}
				}
				if ($onew_arr !== false && $thrw_arr !== false)
				{
						$cnt = count($onew_arr);
						for ($i = 0; $i < $cnt - 2; $i++) 
						{
								foreach ($thrw_arr as $key => $phrase) 
								{
										if ($onew_arr[$i].' '.$onew_arr[$i + 1].' '.$onew_arr[$i + 2] === $phrase)
												unset($thrw_arr[$key]);
								}
						}
				}
				if (Tools::substr($this->lang, 0, 2) == 'en') 
			{
						if ($onew_arr !== false)
						{
								$cnt = count($onew_arr);
								for ($i = 0; $i < $cnt - 1; $i++)
								{
										for ($j = $i + 1; $j < $cnt; $j++)
										{
												if (array_key_exists($i, $onew_arr) && array_key_exists($j, $onew_arr))
												{
														if ($onew_arr[$i].'s' == $onew_arr[$j])
																unset($onew_arr[$j]);
														if (array_key_exists($j, $onew_arr))
														{
																if ($onew_arr[$i] == $onew_arr[$j].'s')
																		unset($onew_arr[$i]);
														}
												}
										}
								}
						}
				}

				if ($onew_arr !== false && !empty($onew_arr))
						$onew_kw = implode(',', $onew_arr).',';
				else
						$onew_kw = '';
				if ($twow_arr !== false && !empty($twow_arr))
						$twow_kw = implode(',', $twow_arr).',';
				else
						$twow_kw = '';
				if ($thrw_arr !== false && !empty($thrw_arr))
						$thrw_kw = implode(',', $thrw_arr).',';
				else
						$thrw_kw = '';
				$keywords = $onew_kw.$twow_kw.$thrw_kw;
				return Tools::rtrimString($keywords, ',');
		}
		public function process_text($str)
		{
				$common = array();
				if (preg_match('/^\s*$/', $str))
						return false;
				$str = $this->html2txt($str);
				$str = Tools::strtolower($str, $this->encoding);
				$str = ' '.$str.' ';
				$str = preg_replace('#\ [a-z]{1,2}\ #i', ' ', $str);
				$str = preg_replace('#[0-9\,\.:]#', '', $str);
				$str = preg_replace("/([a-z]{2,})('|’)s/", '\\1', $str);
				$str = str_replace('-', ' ', $str);
				require_once(dirname(__FILE__).'/common-words-'.$this->lang.'.php');
				if (isset($common))
				{
						foreach ($common as $word)
								$str = str_replace(' '.$word.' ', ' ', $str);
						unset($common);
				}
				$str = preg_replace('/\s\s+/', ' ', $str);
				$str = trim($str);
				if (preg_match('/^\s*$/', $str))
						return false;
				$arrB = array();
				$arrC = array();
				$arrD = array();
				$arrE = array();
				$arrF = array();
				$arrG = array();
				$arrA = explode("\n", $str);
				foreach ($arrA as $key => $value)
				{
						if (strpos($value, '.') !== false)
								$arrB[$key] = explode('.', $value);
						else
								$arrB[$key] = $value;
				}
				$arrB = $this->array_flatten($arrB);
				unset($arrA);
				foreach ($arrB as $key => $value)
				{
						if (strpos($value, '!') !== false)
								$arrC[$key] = explode('!', $value);
						else
								$arrC[$key] = $value;
				}
				$arrC = $this->array_flatten($arrC);
				unset($arrB);
				foreach ($arrC as $key => $value)
				{
						if (strpos($value, '?') !== false)
								$arrD[$key] = explode('?', $value);
						else
								$arrD[$key] = $value;
				}
				$arrD = $this->array_flatten($arrD);
				unset($arrC);
				foreach ($arrD as $key => $value)
				{
						if (strpos($value, ',') !== false)
								$arrE[$key] = explode(',', $value);
						else
								$arrE[$key] = $value;
				}
				$arrE = $this->array_flatten($arrE);
				unset($arrD);
				foreach ($arrE as $key => $value)
				{
						if (strpos($value, ';') !== false)
								$arrF[$key] = explode(';', $value);
						else
								$arrF[$key] = $value;
				}
				$arrF = $this->array_flatten($arrF);
				unset($arrE);
				foreach ($arrF as $key => $value)
				{
						if (strpos($value, ':') !== false)
								$arrG[$key] = explode(':', $value);
						else
								$arrG[$key] = $value;
				}
				$arrG = $this->array_flatten($arrG);
				unset($arrF);
				return $arrG;
		}
		public function parse_words()
		{
				$k = array();
				if ($this->wordLengthMin === 0)
						return false;
				$str = implode(' ', $this->contents);
				$str = $this->strip_punctuations($str);
				$s   = explode(' ', $str);
				foreach ($s as $val)
				{
						if (Tools::strlen($val, $this->encoding) >= $this->wordLengthMin)
								$k[] = $val;
				}
				if (!isset($k))
						return false;
				$k = array_count_values($k);
				return $this->occure_filter($k, $this->wordOccuredMin);
		}
		public function parse_2words()
		{
				$arr = array();
				if ($this->word2WordPhraseLengthMin === false)
						return false;
				foreach ($this->contents as $key => $str)
				{
						$str       = $this->strip_punctuations($str);
						$arr[$key] = explode(' ', $str);
				}
				$z     = 0;
				$y     = array();
				$lines = count($arr);
				for ($a = 0; $a < $lines; $a++)
				{
						$words = count($arr[$a]);
						for ($i = 0; $i < $words - 1; $i++)
						{
								if ((Tools::strlen($arr[$a][$i], $this->encoding) >= $this->word2WordPhraseLengthMin) && (Tools::strlen($arr[$a][$i + 1], $this->encoding) >= $this->word2WordPhraseLengthMin))
								{
										$y[$z] = $arr[$a][$i].' '.$arr[$a][$i + 1];
										$z++;
								}
						}
				}
				if (!isset($y))
						return false;
				$y = array_count_values($y);
				return $this->occure_filter($y, $this->phrase2WordLengthMinOccur);
		}
		public function parse_3words()
		{
				$arr = array();
				$y   = array();
				if ($this->word3WordPhraseLengthMin === false)
						return false;
				foreach ($this->contents as $key => $str)
				{
						$str       = $this->strip_punctuations($str);
						$arr[$key] = explode(' ', $str);
				}
				$z     = 0;
				$lines = count($arr);
				for ($a = 0; $a < $lines; $a++)
				{
						$words = count($arr[$a]);
						for ($i = 0; $i < $words - 2; $i++)
						{
								if ((Tools::strlen($arr[$a][$i], $this->encoding) >= $this->word3WordPhraseLengthMin) && (Tools::strlen($arr[$a][$i + 1], $this->encoding) >= $this->word3WordPhraseLengthMin) && (Tools::strlen($arr[$a][$i + 2], $this->encoding) >= $this->word3WordPhraseLengthMin))
								{
										$y[$z] = $arr[$a][$i].' '.$arr[$a][$i + 1].' '.$arr[$a][$i + 2];
										$z++;
								}
						}
				}
				if (!isset($y))
						return false;
				$y = array_count_values($y);
				return $this->occure_filter($y, $this->phrase3WordLengthMinOccur);
		}
		public function occure_filter($array, $min)
		{
				$cnt = 0;
				$new = array();
				foreach ($array as $word => $occured)
				{
						if ($occured >= $min)
						{
								$new[$cnt] = $word;
								$cnt++;
						}
				}
				if (isset($new))
						return $new;
				return false;
		}
		public function array_flatten($array, $flat = false)
		{
				if (!is_array($array) || empty($array))
						return '';
				if (empty($flat))
						$flat = array();
				foreach ($array as $val)
				{
						if (is_array($val))
								$flat = $this->array_flatten($val, $flat);
						else
								$flat[] = $val;
				}
				return $flat;
		}
		public function html2txt($str)
		{
				if ($str == '')
						return '';
				$str      = preg_replace('#<script.*?>[\s\S]*<\/script>#i', '', $str);
				$str      = preg_replace('#(</p>\s*<p>|</div>\s*<div>|</li>\s*<li>|</td>\s*<td>|<br>|<br\ ?/>)#i', "\n", $str);
				$str      = preg_replace("#(\n){2,}#", "\n", $str);
				$str      = strip_tags($str);
				$unwanted = array(
						'"',
						'“',
						'„',
						'<',
						'>',
						'/',
						'*',
						'[',
						']',
						'+',
						'=',
						'#'
				);
				$str      = str_replace($unwanted, ' ', $str);
				$str      = preg_replace('/&nbsp;/i', ' ', $str);
				$str      = preg_replace('/&[a-z]{2,5};/i', '', $str);
				$str      = preg_replace('/\s\s+/', ' ', $str);
				return trim($str);
		}
		public function strip_punctuations($str)
		{
				if ($str == '')
						return '';
				$punctuations = array(
						'"',
						"'",
						'’',
						'˝',
						'„',
						'`',
						'.',
						',',
						';',
						':',
						'+',
						'±',
						'-',
						'_',
						'=',
						'(',
						')',
						'[',
						']',
						'<',
						'>',
						'{',
						'}',
						'/',
						'\\',
						'|',
						'?',
						'!',
						'@',
						'#',
						'%',
						'^',
						'&',
						'§',
						'$',
						'¢',
						'£',
						'€',
						'¥',
						'₣',
						'฿',
						'*',
						'~',
						'。',
						'，',
						'、',
						'；',
						'：',
						'？',
						'！',
						'…',
						'—',
						'·',
						'ˉ',
						'ˇ',
						'¨',
						'‘',
						'’',
						'“',
						'”',
						'々',
						'～',
						'‖',
						'∶',
						'＂',
						'＇',
						'｀',
						'｜',
						'〃',
						'〔',
						'〕',
						'〈',
						'〉',
						'《',
						'》',
						'「',
						'」',
						'『',
						'』',
						'．',
						'〖',
						'〗',
						'【',
						'】',
						'（',
						'）',
						'［',
						'］',
						'｛',
						'｝',
						'／',
						'“',
						'”'
				);
				$str          = str_replace($punctuations, ' ', $str);
				return preg_replace('/\s\s+/', ' ', $str);
		}
		public function remove_duplicate_keywords($str)
		{
				if ($str == '')
				return $str;
				$str    = trim(Tools::strtolower($str));
				$kw_arr = explode(',', $str);
				foreach ($kw_arr as $key => $val)
				{
						$kw_arr[$key] = trim($val);
						if ($kw_arr[$key] == '')
						unset($kw_arr[$key]);
				}
				$kw_arr = array_unique($kw_arr);
				if (Tools::substr($this->lang, 0, 2) == 'en')
				{
						$cnt = count($kw_arr);
						for ($i = 0; $i < $cnt; $i++)
						{
								for ($j = $i + 1; $j < $cnt; $j++)
								{
										if (array_key_exists($i, $kw_arr) && array_key_exists($j, $kw_arr))
										{
												if ($kw_arr[$i].'s' == $kw_arr[$j])
														unset($kw_arr[$j]);
												elseif ($kw_arr[$i] == $kw_arr[$j].'s')
														unset($kw_arr[$i]);
												elseif (preg_match('#ss$#', $kw_arr[$j]))
												{
														if ($kw_arr[$i] === $kw_arr[$j].'es')
																unset($kw_arr[$i]);
												} elseif (preg_match('#ss$#', $kw_arr[$i]))
												{
														if ($kw_arr[$i].'es' === $kw_arr[$j])
																unset($kw_arr[$j]);
												}
										}
										$kw_arr = array_values($kw_arr);
								}
								$kw_arr = array_values($kw_arr);
						}
				}
				return implode(',', $kw_arr);
		}
}
?>
