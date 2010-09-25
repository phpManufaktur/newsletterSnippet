<?php
/**
* Simple TemplateParser Class
*
* @author  :  MA Razzaque Rupom <rupom_315@yahoo.com>, <rupom.bd@gmail.com>
*             Moderator, phpResource (http://groups.yahoo.com/group/phpresource/)
*             URL: http://www.rupom.info
*             Additional Features by
*             Ralf Hertsch, Berlin (Germany) - <hertsch@berlin.de>
* @version :  2.0
* Purpose  :  Parsing Simple Template File and Data that Contains Macros
* @abstract template Parsing
*/

class templateParser
{
	 var $data = array();
   var $html = "";

	 /**
	 * Initializes "macro=>value" array
	 * @param Array "macro=>value" array
	 * @return none
	 */
   function initData($data,$resetHTML=true)
   {
      $this->data = array();
      $this->data = $data;
      if ($resetHTML) unset($this->html);
   }

   /**
	 * Parses template file
	 * @param template filename
	 * @return parsed template
	 */
   function parseTemplateFile($templateFile)
   {
      $searchPattern          = "/\{([a-zA-Z0-9_]+)\}/i"; // macro delimiter "{" and "}"
      $replacementFunction    = array(&$this, 'parseMatchedText');  //Method callbacks are performed this way
      $fileData               = file_get_contents($templateFile);
      $this->html            .= preg_replace_callback($searchPattern, $replacementFunction, $fileData);
      return $this->html;
   }

   /**
	 * Parses template data
	 * @param template data
	 * @return parsed data
	 */
   function parseTemplateData($templateData)
   {
      $searchPattern          = "/\{([a-zA-Z0-9_]+)\}/i"; //macro delimiter "{" and "}"
      $replacementFunction    = array(&$this, 'parseMatchedText');  //Method callbacks are performed this way
      $this->html         		= preg_replace_callback($searchPattern, $replacementFunction, $templateData);
      return $this->html;
   }

   /**
   * Callback function that returns value of a matching macro
   * @param Array $matches
   * @return String value of matching macro
   */
   function parseMatchedText($matches)
   {
      return $this->data[$matches[1]];
   }

function encodeSpecialChars(&$value) {
  	$value = ereg_replace("¡","&iexcl;",$value); 	//	inverted exclamation mark
  	$value = ereg_replace("¢","&cent;",$value); 	//	cent
  	$value = ereg_replace("£","&pound;",$value); 	//	pound
  	$value = ereg_replace("¤","&curren;",$value); 	//	currency
  	$value = ereg_replace("¥","&yen;",$value); 		//	yen
  	$value = ereg_replace("¦","&brvbar;",$value); 	//	broken vertical bar
  	$value = ereg_replace("§","&sect;",$value); 	//	section
  	$value = ereg_replace("¨","&uml;",$value); 		//	spacing diaeresis
  	$value = ereg_replace("©","&copy;",$value); 	//	copyright
  	$value = ereg_replace("ª","&ordf;",$value); 	//	feminine ordinal indicator
  	$value = ereg_replace("«","&laquo;",$value); 	//	angle quotation mark (left)
  	$value = ereg_replace("¬","&not;",$value); 		//	negation
  	$value = ereg_replace("­","&shy;",$value); 		//	soft hyphen
  	$value = ereg_replace("®","&reg;",$value); 		//	registered trademark
  	$value = ereg_replace("¯","&macr;",$value); 	//	spacing macron
  	$value = ereg_replace("°","&deg;",$value); 		//	degree
  	$value = ereg_replace("±","&plusmn;",$value); 	//	plus-or-minus 
  	$value = ereg_replace("²","&sup2;",$value); 	//	superscript 2
  	$value = ereg_replace("³","&sup3;",$value); 	//	superscript 3
  	$value = ereg_replace("´","&acute;",$value); 	//	spacing acute
  	$value = ereg_replace("µ","&micro;",$value); 	//	micro
  	$value = ereg_replace("¶","&para;",$value); 	//	paragraph
  	$value = ereg_replace("·","&middot;",$value); 	//	middle dot
  	$value = ereg_replace("¸","&cedil;",$value); 	//	spacing cedilla
  	$value = ereg_replace("¹","&sup1;",$value); 	//	superscript 1
  	$value = ereg_replace("º","&ordm;",$value); 	//	masculine ordinal indicator
  	$value = ereg_replace("»","&raquo;",$value); 	//	angle quotation mark (right)
  	$value = ereg_replace("¼","&frac14;",$value); 	//	fraction 1/4
  	$value = ereg_replace("½","&frac12;",$value); 	//	fraction 1/2
  	$value = ereg_replace("¾","&frac34;",$value); 	//	fraction 3/4
  	$value = ereg_replace("¿","&iquest;",$value); 	//	inverted question mark
  	$value = ereg_replace("×","&times;",$value); 	//	multiplication
  	$value = ereg_replace("÷","&divide;",$value); 	//	division
  	$value = ereg_replace("À","&Agrave;",$value); 	//	capital a, grave accent
  	$value = ereg_replace("Á","&Aacute;",$value); 	//	capital a, acute accent
  	$value = ereg_replace("Â","&Acirc;",$value); 	//	capital a, circumflex accent
  	$value = ereg_replace("Ã","&Atilde;",$value); 	//	capital a, tilde
  	$value = ereg_replace("Ä","&Auml;",$value); 	//	capital a, umlaut mark
  	$value = ereg_replace("Å","&Aring;",$value); 	//	capital a, ring
  	$value = ereg_replace("Æ","&AElig;",$value); 	//	capital ae
  	$value = ereg_replace("Ç","&Ccedil;",$value); 	//	capital c, cedilla
  	$value = ereg_replace("È","&Egrave;",$value); 	//	capital e, grave accent
  	$value = ereg_replace("É","&Eacute;",$value); 	//	capital e, acute accent
  	$value = ereg_replace("Ê","&Ecirc;",$value); 	//	capital e, circumflex accent
  	$value = ereg_replace("Ë","&Euml;",$value); 	//	capital e, umlaut mark
  	$value = ereg_replace("Ì","&Igrave;",$value); 	//	capital i, grave accent
  	$value = ereg_replace("Í","&Iacute;",$value); 	//	capital i, acute accent
  	$value = ereg_replace("Î","&Icirc;",$value); 	//	capital i, circumflex accent
  	$value = ereg_replace("Ï","&Iuml;",$value); 	//	capital i, umlaut mark
  	$value = ereg_replace("Ð","&ETH;",$value); 		//	capital eth, Icelandic
  	$value = ereg_replace("Ñ","&Ntilde;",$value); 	//	capital n, tilde
  	$value = ereg_replace("Ò","&Ograve;",$value); 	//	capital o, grave accent
  	$value = ereg_replace("Ó","&Oacute;",$value); 	//	capital o, acute accent
  	$value = ereg_replace("Ô","&Ocirc;",$value); 	//	capital o, circumflex accent
  	$value = ereg_replace("Õ","&Otilde;",$value); 	//	capital o, tilde
  	$value = ereg_replace("Ö","&Ouml;",$value); 	//	capital o, umlaut mark
  	$value = ereg_replace("Ø","&Oslash;",$value); 	//	capital o, slash
  	$value = ereg_replace("Ù","&Ugrave;",$value); 	//	capital u, grave accent
  	$value = ereg_replace("Ú","&Uacute;",$value); 	//	capital u, acute accent
  	$value = ereg_replace("Û","&Ucirc;",$value); 	//	capital u, circumflex accent
  	$value = ereg_replace("Ü","&Uuml;",$value); 	//	capital u, umlaut mark
  	$value = ereg_replace("Ý","&Yacute;",$value); 	//	capital y, acute accent
  	$value = ereg_replace("Þ","&THORN;",$value); 	//	capital THORN, Icelandic
  	$value = ereg_replace("ß","&szlig;",$value); 	//	small sharp s, German
  	$value = ereg_replace("à","&agrave;",$value); 	//	small a, grave accent
  	$value = ereg_replace("á","&aacute;",$value); 	//	small a, acute accent
  	$value = ereg_replace("â","&acirc;",$value); 	//	small a, circumflex accent
  	$value = ereg_replace("ã","&atilde;",$value); 	//	small a, tilde
  	$value = ereg_replace("ä","&auml;",$value); 	//	small a, umlaut mark
  	$value = ereg_replace("å","&aring;",$value); 	//	small a, ring
  	$value = ereg_replace("æ","&aelig;",$value); 	//	small ae
  	$value = ereg_replace("ç","&ccedil;",$value); 	//	small c, cedilla
  	$value = ereg_replace("è","&egrave;",$value); 	//	small e, grave accent
  	$value = ereg_replace("é","&eacute;",$value); 	//	small e, acute accent
  	$value = ereg_replace("ê","&ecirc;",$value); 	//	small e, circumflex accent
  	$value = ereg_replace("ë","&euml;",$value); 	//	small e, umlaut mark
  	$value = ereg_replace("ì","&igrave;",$value); 	//	small i, grave accent
  	$value = ereg_replace("í","&iacute;",$value); 	//	small i, acute accent
  	$value = ereg_replace("î","&icirc;",$value); 	//	small i, circumflex accent
  	$value = ereg_replace("ï","&iuml;",$value); 	//	small i, umlaut mark
  	$value = ereg_replace("ð","&eth;",$value); 		//	small eth, Icelandic
  	$value = ereg_replace("ñ","&ntilde;",$value); 	//	small n, tilde
  	$value = ereg_replace("ò","&ograve;",$value); 	//	small o, grave accent
  	$value = ereg_replace("ó","&oacute;",$value); 	//	small o, acute accent
  	$value = ereg_replace("ô","&ocirc;",$value); 	//	small o, circumflex accent
  	$value = ereg_replace("õ","&otilde;",$value); 	//	small o, tilde
  	$value = ereg_replace("ö","&ouml;",$value); 	//	small o, umlaut mark
  	$value = ereg_replace("ø","&oslash;",$value); 	//	small o, slash
  	$value = ereg_replace("ù","&ugrave;",$value); 	//	small u, grave accent
  	$value = ereg_replace("ú","&uacute;",$value); 	//	small u, acute accent
  	$value = ereg_replace("û","&ucirc;",$value); 	//	small u, circumflex accent
  	$value = ereg_replace("ü","&uuml;",$value); 	//	small u, umlaut mark
  	$value = ereg_replace("ý","&yacute;",$value); 	//	small y, acute accent
  	$value = ereg_replace("þ","&thorn;",$value); 	//	small thorn, Icelandic
  	$value = ereg_replace("ÿ","&yuml;",$value); 	//	small y, umlaut mark
  	$value = ereg_replace("∀","&forall;",$value); 	//	for all
  	$value = ereg_replace("∂","&part;",$value); 	//	part
  	$value = ereg_replace("∃","&exist;",$value); 	//	exists
  	$value = ereg_replace("∅","&empty;",$value);	//	empty
  	$value = ereg_replace("∇","&nabla;",$value); 	//	nabla
  	$value = ereg_replace("∈","&isin;",$value); 	//	isin
  	$value = ereg_replace("∉","&notin;",$value); 	//	notin
  	$value = ereg_replace("∋","&ni;",$value); 		//	ni
  	$value = ereg_replace("∏","&prod;",$value); 	//	prod
  	$value = ereg_replace("∑","&sum;",$value); 		//	sum
  	$value = ereg_replace("∗","&lowast;",$value); 	//	lowast
  	$value = ereg_replace("√","&radic;",$value); 	//	square root
  	$value = ereg_replace("∝","&prop;",$value); 	//	proportional to
  	$value = ereg_replace("∞","&infin;",$value); 	//	infinity
  	$value = ereg_replace("∠","&ang;",$value); 		//	angle
  	$value = ereg_replace("∧","&and;",$value); 		//	and
  	$value = ereg_replace("∨","&or;",$value); 		//	or
  	$value = ereg_replace("∩","&cap;",$value); 		//	cap
  	$value = ereg_replace("∪","&cup;",$value); 		//	cup
  	$value = ereg_replace("∫","&int;",$value); 		//	integral
  	$value = ereg_replace("∴","&there4;",$value); 	//	therefore
  	$value = ereg_replace("∼","&sim;",$value); 		//	similar to
  	$value = ereg_replace("≅","&cong;",$value); 	//	congruent to
  	$value = ereg_replace("≈","&asymp;",$value); 	//	almost equal
  	$value = ereg_replace("≠","&ne;",$value); 		//	not equal
  	$value = ereg_replace("≡","&equiv;",$value); 	//	equivalent
  	$value = ereg_replace("≤","&le;",$value); 		//	less or equal
  	$value = ereg_replace("≥","&ge;",$value); 		//	greater or equal
  	$value = ereg_replace("⊂","&sub;",$value); 		//	subset of
  	$value = ereg_replace("⊃","&sup;",$value); 		//	superset of
  	$value = ereg_replace("⊄","&nsub;",$value); 	//	not subset of
  	$value = ereg_replace("⊆","&sube;",$value); 	//	subset or equal
  	$value = ereg_replace("⊇","&supe;",$value); 	//	superset or equal
  	$value = ereg_replace("⊕","&oplus;",$value); 	//	circled plus
  	$value = ereg_replace("⊗","&otimes;",$value); 	//	cirled times
  	$value = ereg_replace("⊥","&perp;",$value); 	//	perpendicular
  	$value = ereg_replace("⋅","&sdot;",$value); 	//	dot operator
  	$value = ereg_replace("Α","&Alpha;",$value); 	//	Alpha
  	$value = ereg_replace("Β","&Beta;",$value); 	//	Beta
  	$value = ereg_replace("Γ","&Gamma;",$value); 	//	Gamma
  	$value = ereg_replace("Δ","&Delta;",$value); 	//	Delta
  	$value = ereg_replace("Ε","&Epsilon;",$value); 	//	Epsilon
  	$value = ereg_replace("Ζ","&Zeta;",$value); 	//	Zeta
  	$value = ereg_replace("Η","&Eta;",$value); 		//	Eta
  	$value = ereg_replace("Θ","&Theta;",$value); 	//	Theta
  	$value = ereg_replace("Ι","&Iota;",$value); 	//	Iota
  	$value = ereg_replace("Κ","&Kappa;",$value); 	//	Kappa
  	$value = ereg_replace("Λ","&Lambda;",$value); 	//	Lambda
  	$value = ereg_replace("Μ","&Mu;",$value); 		//	Mu
  	$value = ereg_replace("Ν","&Nu;",$value); 		//	Nu
  	$value = ereg_replace("Ξ","&Xi;",$value); 		//	Xi
  	$value = ereg_replace("Ο","&Omicron;",$value); 	//	Omicron
  	$value = ereg_replace("Π","&Pi;",$value); 		//	Pi
  	$value = ereg_replace("Ρ","&Rho;",$value); 		//	Rho
  	$value = ereg_replace("Σ","&Sigma;",$value); 	//	Sigma
  	$value = ereg_replace("Τ","&Tau;",$value); 		//	Tau
  	$value = ereg_replace("Υ","&Upsilon;",$value); 	//	Upsilon
  	$value = ereg_replace("Φ","&Phi;",$value); 		//	Phi
  	$value = ereg_replace("Χ","&Chi;",$value); 		//	Chi
  	$value = ereg_replace("Ψ","&Psi;",$value); 		//	Psi
  	$value = ereg_replace("Ω","&Omega;",$value); 	//	Omega
  	$value = ereg_replace("α","&alpha;",$value); 	//	alpha
  	$value = ereg_replace("β","&beta;",$value); 	//	beta
  	$value = ereg_replace("γ","&gamma;",$value); 	//	gamma
  	$value = ereg_replace("δ","&delta;",$value); 	//	delta
  	$value = ereg_replace("ε","&epsilon;",$value); 	//	epsilon
  	$value = ereg_replace("ζ","&zeta;",$value); 	//	zeta
  	$value = ereg_replace("η","&eta;",$value); 		//	eta
  	$value = ereg_replace("θ","&theta;",$value); 	//	theta
  	$value = ereg_replace("ι","&iota;",$value); 	//	iota
  	$value = ereg_replace("κ","&kappa;",$value); 	//	kappa
  	$value = ereg_replace("λ","&lambda;",$value); 	//	lambda
  	$value = ereg_replace("μ","&mu;",$value); 		//	mu
  	$value = ereg_replace("ν","&nu;",$value); 		//	nu
  	$value = ereg_replace("ξ","&xi;",$value); 		//	xi
  	$value = ereg_replace("ο","&omicron;",$value); 	//	omicron
  	$value = ereg_replace("π","&pi;",$value); 		//	pi
  	$value = ereg_replace("ρ","&rho;",$value); 		//	rho
  	$value = ereg_replace("ς","&sigmaf;",$value); 	//	sigmaf
  	$value = ereg_replace("σ","&sigma;",$value); 	//	sigma
  	$value = ereg_replace("τ","&tau;",$value); 		//	tau
  	$value = ereg_replace("υ","&upsilon;",$value); 	//	upsilon
  	$value = ereg_replace("φ","&phi;",$value); 		//	phi
  	$value = ereg_replace("χ","&chi;",$value); 		//	chi
  	$value = ereg_replace("ψ","&psi;",$value); 		//	psi
  	$value = ereg_replace("ω","&omega;",$value); 	//	omega
  	$value = ereg_replace("ϑ","&thetasym;",$value); //	theta symbol
  	$value = ereg_replace("ϒ","&upsih;",$value); 	//	upsilon symbol
  	$value = ereg_replace("ϖ","&piv;",$value); 		//	pi symbol
  	$value = ereg_replace("Œ","&OElig;",$value); 	//	capital ligature OE
  	$value = ereg_replace("œ","&oelig;",$value); 	//	small ligature oe
  	$value = ereg_replace("Š","&Scaron;",$value); 	//	capital S with caron
  	$value = ereg_replace("š","&scaron;",$value); 	//	small S with caron
  	$value = ereg_replace("Ÿ","&Yuml;",$value); 	//	capital Y with diaeres
  	$value = ereg_replace("ƒ","&fnof;",$value); 	//	f with hook
  	$value = ereg_replace("ˆ","&circ;",$value); 	//	modifier letter circumflex accent
  	$value = ereg_replace("˜","&tilde;",$value); 	//	small tilde
  	$value = ereg_replace("–","&ndash;",$value); 	//	en dash
  	$value = ereg_replace("—","&mdash;",$value); 	//	em dash
  	$value = ereg_replace("‘","&lsquo;",$value); 	//	left single quotation mark
  	$value = ereg_replace("’","&rsquo;",$value); 	//	right single quotation mark
  	$value = ereg_replace("‚","&sbquo;",$value); 	//	single low-9 quotation mark
  	$value = ereg_replace("“","&ldquo;",$value); 	//	left double quotation mark
  	$value = ereg_replace("”","&rdquo;",$value); 	//	right double quotation mark
  	$value = ereg_replace("„","&bdquo;",$value); 	//	double low-9 quotation mark
  	$value = ereg_replace("†","&dagger;",$value); 	//	dagger
  	$value = ereg_replace("‡","&Dagger;",$value); 	//	double dagger
  	$value = ereg_replace("•","&bull;",$value); 	//	bullet
  	$value = ereg_replace("…","&hellip;",$value); 	//	horizontal ellipsis
  	$value = ereg_replace("‰","&permil;",$value); 	//	per mille 
  	$value = ereg_replace("′","&prime;",$value); 	//	minutes
  	$value = ereg_replace("″","&Prime;",$value); 	//	seconds
  	$value = ereg_replace("‹","&lsaquo;",$value); 	//	single left angle quotation
  	$value = ereg_replace("›","&rsaquo;",$value); 	//	single right angle quotation
  	$value = ereg_replace("‾","&oline;",$value); 	//	overline
  	$value = ereg_replace("€","&euro;",$value); 	//	euro
  	$value = ereg_replace("™","&trade;",$value); 	//	trademark
  	$value = ereg_replace("←","&larr;",$value); 	//	left arrow
  	$value = ereg_replace("↑","&uarr;",$value); 	//	up arrow
  	$value = ereg_replace("→","&rarr;",$value); 	//	right arrow
  	$value = ereg_replace("↓","&darr;",$value); 	//	down arrow
  	$value = ereg_replace("↔","&harr;",$value); 	//	left right arrow
  	$value = ereg_replace("↵","&crarr;",$value); 	//	carriage return arrow
  	$value = ereg_replace("⌈","&lceil;",$value); 	//	left ceiling
  	$value = ereg_replace("⌉","&rceil;",$value); 	//	right ceiling
  	$value = ereg_replace("⌊","&lfloor;",$value);	//	left floor
  	$value = ereg_replace("⌋","&rfloor;",$value); 	//	right floor
  	$value = ereg_replace("◊","&loz;",$value); 		//	lozenge
  	$value = ereg_replace("♠","&spades;",$value); 	//	spade
  	$value = ereg_replace("♣","&clubs;",$value); 	//	club
  	$value = ereg_replace("♥","&hearts;",$value); 	//	heart
  	$value = ereg_replace("♦","&diams;",$value); 	//	diamond
  	$value = ereg_replace("А","&#1040;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Б","&#1041;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("В","&#1042;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Г","&#1043;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Д","&#1044;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ѓ","&#1027;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Е","&#1045;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ж","&#1046;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("З","&#1047;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ѕ","&#1029;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("И","&#1048;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ј","&#1032;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("К","&#1050;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Л","&#1051;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Љ","&#1033;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("М","&#1052;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Н","&#1053;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Њ","&#1034;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("О","&#1054;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("П","&#1055;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Р","&#1056;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("С","&#1057;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Т","&#1058;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ќ","&#1036;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("У","&#1059;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ф","&#1060;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Х","&#1061;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ц","&#1062;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ч","&#1063;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Џ","&#1039;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("Ш","&#1064;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("а","&#1072;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("б","&#1073;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("в","&#1074;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("г","&#1075;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("д","&#1076;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ѓ","&#1107;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("е","&#1077;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ж","&#1078;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("з","&#1079;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ѕ","&#1109;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("и","&#1080;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ј","&#1112;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("к","&#1082;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("л","&#1083;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("љ","&#1113;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("м","&#1084;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("н","&#1085;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("њ","&#1114;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("о","&#1086;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("п","&#1087;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("р","&#1088;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("с","&#1089;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("т","&#1090;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ќ","&#1116;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("у","&#1091;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ф","&#1092;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("х","&#1093;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ц","&#1094;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ч","&#1095;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("џ","&#1119;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
  	$value = ereg_replace("ш","&#1096;",$value); 	//	Macedonian Cyrillic letters to HTML entities 
    return $value;					
  }					
					
function decodeSpecialChars(&$value) {					
  	$value = ereg_replace("&iexcl;","¡",$value); 	//	inverted exclamation mark
  	$value = ereg_replace("&cent;","¢",$value); 	//	cent
  	$value = ereg_replace("&pound;","£",$value); 	//	pound
  	$value = ereg_replace("&curren;","¤",$value);	//	currency
  	$value = ereg_replace("&yen;","¥",$value); 		//	yen
  	$value = ereg_replace("&brvbar;","¦",$value); 	//	broken vertical bar
  	$value = ereg_replace("&sect;","§",$value); 	//	section
  	$value = ereg_replace("&uml;","¨",$value); 		//	spacing diaeresis
  	$value = ereg_replace("&copy;","©",$value); 	//	copyright
  	$value = ereg_replace("&ordf;","ª",$value); 	//	feminine ordinal indicator
  	$value = ereg_replace("&laquo;","«",$value);	//	angle quotation mark (left)
  	$value = ereg_replace("&not;","¬",$value); 		//	negation
  	$value = ereg_replace("&shy;","­",$value); 		//	soft hyphen
  	$value = ereg_replace("&reg;","®",$value); 		//	registered trademark
  	$value = ereg_replace("&macr;","¯",$value); 	//	spacing macron
  	$value = ereg_replace("&deg;","°",$value); 		//	degree
  	$value = ereg_replace("&plusmn;","±",$value); 	//	plus-or-minus 
  	$value = ereg_replace("&sup2;","²",$value); 	//	superscript 2
  	$value = ereg_replace("&sup3;","³",$value); 	//	superscript 3
  	$value = ereg_replace("&acute;","´",$value); 	//	spacing acute
  	$value = ereg_replace("&micro;","µ",$value); 	//	micro
  	$value = ereg_replace("&para;","¶",$value); 	//	paragraph
  	$value = ereg_replace("&middot;","·",$value); 	//	middle dot
  	$value = ereg_replace("&cedil;","¸",$value); 	//	spacing cedilla
  	$value = ereg_replace("&sup1;","¹",$value); 	//	superscript 1
  	$value = ereg_replace("&ordm;","º",$value); 	//	masculine ordinal indicator
  	$value = ereg_replace("&raquo;","»",$value); 	//	angle quotation mark (right)
  	$value = ereg_replace("&frac14;","¼",$value); 	//	fraction 1/4
  	$value = ereg_replace("&frac12;","½",$value); 	//	fraction 1/2
  	$value = ereg_replace("&frac34;","¾",$value); 	//	fraction 3/4
  	$value = ereg_replace("&iquest;","¿",$value); 	//	inverted question mark
  	$value = ereg_replace("&times;","×",$value); 	//	multiplication
  	$value = ereg_replace("&divide;","÷",$value); 	//	division
  	$value = ereg_replace("&Agrave;","À",$value); 	//	capital a, grave accent
  	$value = ereg_replace("&Aacute;","Á",$value); 	//	capital a, acute accent
  	$value = ereg_replace("&Acirc;","Â",$value); 	//	capital a, circumflex accent
  	$value = ereg_replace("&Atilde;","Ã",$value); 	//	capital a, tilde
  	$value = ereg_replace("&Auml;","Ä",$value); 	//	capital a, umlaut mark
  	$value = ereg_replace("&Aring;","Å",$value); 	//	capital a, ring
  	$value = ereg_replace("&AElig;","Æ",$value); 	//	capital ae
  	$value = ereg_replace("&Ccedil;","Ç",$value); 	//	capital c, cedilla
  	$value = ereg_replace("&Egrave;","È",$value); 	//	capital e, grave accent
  	$value = ereg_replace("&Eacute;","É",$value); 	//	capital e, acute accent
  	$value = ereg_replace("&Ecirc;","Ê",$value); 	//	capital e, circumflex accent
  	$value = ereg_replace("&Euml;","Ë",$value); 	//	capital e, umlaut mark
  	$value = ereg_replace("&Igrave;","Ì",$value); 	//	capital i, grave accent
  	$value = ereg_replace("&Iacute;","Í",$value); 	//	capital i, acute accent
  	$value = ereg_replace("&Icirc;","Î",$value); 	//	capital i, circumflex accent
  	$value = ereg_replace("&Iuml;","Ï",$value); 	//	capital i, umlaut mark
  	$value = ereg_replace("&ETH;","Ð",$value); 		//	capital eth, Icelandic
  	$value = ereg_replace("&Ntilde;","Ñ",$value); 	//	capital n, tilde
  	$value = ereg_replace("&Ograve;","Ò",$value); 	//	capital o, grave accent
  	$value = ereg_replace("&Oacute;","Ó",$value); 	//	capital o, acute accent
  	$value = ereg_replace("&Ocirc;","Ô",$value); 	//	capital o, circumflex accent
  	$value = ereg_replace("&Otilde;","Õ",$value); 	//	capital o, tilde
  	$value = ereg_replace("&Ouml;","Ö",$value); 	//	capital o, umlaut mark
  	$value = ereg_replace("&Oslash;","Ø",$value); 	//	capital o, slash
  	$value = ereg_replace("&Ugrave;","Ù",$value); 	//	capital u, grave accent
  	$value = ereg_replace("&Uacute;","Ú",$value); 	//	capital u, acute accent
  	$value = ereg_replace("&Ucirc;","Û",$value); 	//	capital u, circumflex accent
  	$value = ereg_replace("&Uuml;","Ü",$value); 	//	capital u, umlaut mark
  	$value = ereg_replace("&Yacute;","Ý",$value); 	//	capital y, acute accent
  	$value = ereg_replace("&THORN;","Þ",$value); 	//	capital THORN, Icelandic
  	$value = ereg_replace("&szlig;","ß",$value); 	//	small sharp s, German
  	$value = ereg_replace("&agrave;","à",$value); 	//	small a, grave accent
  	$value = ereg_replace("&aacute;","á",$value); 	//	small a, acute accent
  	$value = ereg_replace("&acirc;","â",$value); 	//	small a, circumflex accent
  	$value = ereg_replace("&atilde;","ã",$value); 	//	small a, tilde
  	$value = ereg_replace("&auml;","ä",$value); 	//	small a, umlaut mark
  	$value = ereg_replace("&aring;","å",$value); 	//	small a, ring
  	$value = ereg_replace("&aelig;","æ",$value); 	//	small ae
  	$value = ereg_replace("&ccedil;","ç",$value); 	//	small c, cedilla
  	$value = ereg_replace("&egrave;","è",$value); 	//	small e, grave accent
  	$value = ereg_replace("&eacute;","é",$value); 	//	small e, acute accent
  	$value = ereg_replace("&ecirc;","ê",$value); 	//	small e, circumflex accent
  	$value = ereg_replace("&euml;","ë",$value); 	//	small e, umlaut mark
  	$value = ereg_replace("&igrave;","ì",$value); 	//	small i, grave accent
  	$value = ereg_replace("&iacute;","í",$value); 	//	small i, acute accent
  	$value = ereg_replace("&icirc;","î",$value); 	//	small i, circumflex accent
  	$value = ereg_replace("&iuml;","ï",$value); 	//	small i, umlaut mark
  	$value = ereg_replace("&eth;","ð",$value); 		//	small eth, Icelandic
  	$value = ereg_replace("&ntilde;","ñ",$value); 	//	small n, tilde
  	$value = ereg_replace("&ograve;","ò",$value); 	//	small o, grave accent
  	$value = ereg_replace("&oacute;","ó",$value); 	//	small o, acute accent
  	$value = ereg_replace("&ocirc;","ô",$value); 	//	small o, circumflex accent
  	$value = ereg_replace("&otilde;","õ",$value); 	//	small o, tilde
  	$value = ereg_replace("&ouml;","ö",$value); 	//	small o, umlaut mark
  	$value = ereg_replace("&oslash;","ø",$value); 	//	small o, slash
  	$value = ereg_replace("&ugrave;","ù",$value); 	//	small u, grave accent
  	$value = ereg_replace("&uacute;","ú",$value); 	//	small u, acute accent
  	$value = ereg_replace("&ucirc;","û",$value); 	//	small u, circumflex accent
  	$value = ereg_replace("&uuml;","ü",$value); 	//	small u, umlaut mark
  	$value = ereg_replace("&yacute;","ý",$value); 	//	small y, acute accent
  	$value = ereg_replace("&thorn;","þ",$value); 	//	small thorn, Icelandic
  	$value = ereg_replace("&yuml;","ÿ",$value); 	//	small y, umlaut mark
  	$value = ereg_replace("&forall;","∀",$value); 	//	for all
  	$value = ereg_replace("&part;","∂",$value); 	//	part
  	$value = ereg_replace("&exist;","∃",$value); 	//	exists
  	$value = ereg_replace("&empty;","∅",$value); 	//	empty
  	$value = ereg_replace("&nabla;","∇",$value); 	//	nabla
  	$value = ereg_replace("&isin;","∈",$value); 	//	isin
  	$value = ereg_replace("&notin;","∉",$value); 	//	notin
  	$value = ereg_replace("&ni;","∋",$value); 		//	ni
  	$value = ereg_replace("&prod;","∏",$value); 	//	prod
  	$value = ereg_replace("&sum;","∑",$value); 		//	sum
  	$value = ereg_replace("&lowast;","∗",$value); 	//	lowast
  	$value = ereg_replace("&radic;","√",$value); 	//	square root
  	$value = ereg_replace("&prop;","∝",$value); 	//	proportional to
  	$value = ereg_replace("&infin;","∞",$value); 	//	infinity
  	$value = ereg_replace("&ang;","∠",$value); 		//	angle
  	$value = ereg_replace("&and;","∧",$value); 		//	and
  	$value = ereg_replace("&or;","∨",$value); 		//	or
  	$value = ereg_replace("&cap;","∩",$value); 		//	cap
  	$value = ereg_replace("&cup;","∪",$value); 		//	cup
  	$value = ereg_replace("&int;","∫",$value); 		//	integral
  	$value = ereg_replace("&there4;","∴",$value); 	//	therefore
  	$value = ereg_replace("&sim;","∼",$value); 		//	similar to
  	$value = ereg_replace("&cong;","≅",$value); 	//	congruent to
  	$value = ereg_replace("&asymp;","≈",$value); 	//	almost equal
  	$value = ereg_replace("&ne;","≠",$value); 		//	not equal
  	$value = ereg_replace("&equiv;","≡",$value); 	//	equivalent
  	$value = ereg_replace("&le;","≤",$value); 		//	less or equal
  	$value = ereg_replace("&ge;","≥",$value); 		//	greater or equal
  	$value = ereg_replace("&sub;","⊂",$value); 		//	subset of
  	$value = ereg_replace("&sup;","⊃",$value); 		//	superset of
  	$value = ereg_replace("&nsub;","⊄",$value); 	//	not subset of
  	$value = ereg_replace("&sube;","⊆",$value); 	//	subset or equal
  	$value = ereg_replace("&supe;","⊇",$value); 	//	superset or equal
  	$value = ereg_replace("&oplus;","⊕",$value); 	//	circled plus
  	$value = ereg_replace("&otimes;","⊗",$value); 	//	cirled times
  	$value = ereg_replace("&perp;","⊥",$value); 	//	perpendicular
  	$value = ereg_replace("&sdot;","⋅",$value); 	//	dot operator
  	$value = ereg_replace("&Alpha;","Α",$value); 	//	Alpha
  	$value = ereg_replace("&Beta;","Β",$value); 	//	Beta
  	$value = ereg_replace("&Gamma;","Γ",$value); 	//	Gamma
  	$value = ereg_replace("&Delta;","Δ",$value); 	//	Delta
  	$value = ereg_replace("&Epsilon;","Ε",$value); 	//	Epsilon
  	$value = ereg_replace("&Zeta;","Ζ",$value); 	//	Zeta
  	$value = ereg_replace("&Eta;","Η",$value); 		//	Eta
  	$value = ereg_replace("&Theta;","Θ",$value); 	//	Theta
  	$value = ereg_replace("&Iota;","Ι",$value); 	//	Iota
  	$value = ereg_replace("&Kappa;","Κ",$value); 	//	Kappa
  	$value = ereg_replace("&Lambda;","Λ",$value); 	//	Lambda
  	$value = ereg_replace("&Mu;","Μ",$value); 		//	Mu
  	$value = ereg_replace("&Nu;","Ν",$value); 		//	Nu
  	$value = ereg_replace("&Xi;","Ξ",$value); 		//	Xi
  	$value = ereg_replace("&Omicron;","Ο",$value); 	//	Omicron
  	$value = ereg_replace("&Pi;","Π",$value); 		//	Pi
  	$value = ereg_replace("&Rho;","Ρ",$value); 		//	Rho
  	$value = ereg_replace("&Sigma;","Σ",$value); 	//	Sigma
  	$value = ereg_replace("&Tau;","Τ",$value); 		//	Tau
  	$value = ereg_replace("&Upsilon;","Υ",$value); 	//	Upsilon
  	$value = ereg_replace("&Phi;","Φ",$value); 		//	Phi
  	$value = ereg_replace("&Chi;","Χ",$value); 		//	Chi
  	$value = ereg_replace("&Psi;","Ψ",$value); 		//	Psi
  	$value = ereg_replace("&Omega;","Ω",$value); 	//	Omega
  	$value = ereg_replace("&alpha;","α",$value); 	//	alpha
  	$value = ereg_replace("&beta;","β",$value); 	//	beta
  	$value = ereg_replace("&gamma;","γ",$value); 	//	gamma
  	$value = ereg_replace("&delta;","δ",$value); 	//	delta
  	$value = ereg_replace("&epsilon;","ε",$value); 	//	epsilon
  	$value = ereg_replace("&zeta;","ζ",$value); 	//	zeta
  	$value = ereg_replace("&eta;","η",$value); 		//	eta
  	$value = ereg_replace("&theta;","θ",$value); 	//	theta
  	$value = ereg_replace("&iota;","ι",$value); 	//	iota
  	$value = ereg_replace("&kappa;","κ",$value); 	//	kappa
  	$value = ereg_replace("&lambda;","λ",$value); 	//	lambda
  	$value = ereg_replace("&mu;","μ",$value); 		//	mu
  	$value = ereg_replace("&nu;","ν",$value); 		//	nu
  	$value = ereg_replace("&xi;","ξ",$value); 		//	xi
  	$value = ereg_replace("&omicron;","ο",$value); 	//	omicron
  	$value = ereg_replace("&pi;","π",$value); 		//	pi
  	$value = ereg_replace("&rho;","ρ",$value); 		//	rho
  	$value = ereg_replace("&sigmaf;","ς",$value); 	//	sigmaf
  	$value = ereg_replace("&sigma;","σ",$value); 	//	sigma
  	$value = ereg_replace("&tau;","τ",$value); 		//	tau
  	$value = ereg_replace("&upsilon;","υ",$value); 	//	upsilon
  	$value = ereg_replace("&phi;","φ",$value); 		//	phi
  	$value = ereg_replace("&chi;","χ",$value); 		//	chi
  	$value = ereg_replace("&psi;","ψ",$value); 		//	psi
  	$value = ereg_replace("&omega;","ω",$value); 	//	omega
  	$value = ereg_replace("&thetasym;","ϑ",$value); //	theta symbol
  	$value = ereg_replace("&upsih;","ϒ",$value); 	//	upsilon symbol
  	$value = ereg_replace("&piv;","ϖ",$value); 		//	pi symbol
  	$value = ereg_replace("&OElig;","Œ",$value); 	//	capital ligature OE
  	$value = ereg_replace("&oelig;","œ",$value); 	//	small ligature oe
  	$value = ereg_replace("&Scaron;","Š",$value); 	//	capital S with caron
  	$value = ereg_replace("&scaron;","š",$value); 	//	small S with caron
  	$value = ereg_replace("&Yuml;","Ÿ",$value); 	//	capital Y with diaeres
  	$value = ereg_replace("&fnof;","ƒ",$value); 	//	f with hook
  	$value = ereg_replace("&circ;","ˆ",$value); 	//	modifier letter circumflex accent
  	$value = ereg_replace("&tilde;","˜",$value); 	//	small tilde
  	$value = ereg_replace("&ndash;","–",$value); 	//	en dash
  	$value = ereg_replace("&mdash;","—",$value); 	//	em dash
  	$value = ereg_replace("&lsquo;","‘",$value); 	//	left single quotation mark
  	$value = ereg_replace("&rsquo;","’",$value); 	//	right single quotation mark
  	$value = ereg_replace("&sbquo;","‚",$value); 	//	single low-9 quotation mark
  	$value = ereg_replace("&ldquo;","“",$value); 	//	left double quotation mark
  	$value = ereg_replace("&rdquo;","”",$value); 	//	right double quotation mark
  	$value = ereg_replace("&bdquo;","„",$value); 	//	double low-9 quotation mark
  	$value = ereg_replace("&dagger;","†",$value); 	//	dagger
  	$value = ereg_replace("&Dagger;","‡",$value); 	//	double dagger
  	$value = ereg_replace("&bull;","•",$value); 	//	bullet
  	$value = ereg_replace("&hellip;","…",$value); 	//	horizontal ellipsis
  	$value = ereg_replace("&permil;","‰",$value); 	//	per mille 
  	$value = ereg_replace("&prime;","′",$value); 	//	minutes
  	$value = ereg_replace("&Prime;","″",$value); 	//	seconds
  	$value = ereg_replace("&lsaquo;","‹",$value); 	//	single left angle quotation
  	$value = ereg_replace("&rsaquo;","›",$value); 	//	single right angle quotation
  	$value = ereg_replace("&oline;","‾",$value); 	//	overline
  	$value = ereg_replace("&euro;","€",$value); 	//	euro
  	$value = ereg_replace("&trade;","™",$value); 	//	trademark
  	$value = ereg_replace("&larr;","←",$value); 	//	left arrow
  	$value = ereg_replace("&uarr;","↑",$value); 	//	up arrow
  	$value = ereg_replace("&rarr;","→",$value); 	//	right arrow
  	$value = ereg_replace("&darr;","↓",$value); 	//	down arrow
  	$value = ereg_replace("&harr;","↔",$value); 	//	left right arrow
  	$value = ereg_replace("&crarr;","↵",$value); 	//	carriage return arrow
  	$value = ereg_replace("&lceil;","⌈",$value); 	//	left ceiling
  	$value = ereg_replace("&rceil;","⌉",$value); 	//	right ceiling
  	$value = ereg_replace("&lfloor;","⌊",$value); 	//	left floor
  	$value = ereg_replace("&rfloor;","⌋",$value); 	//	right floor
  	$value = ereg_replace("&loz;","◊",$value); 		//	lozenge
  	$value = ereg_replace("&spades;","♠",$value); 	//	spade
  	$value = ereg_replace("&clubs;","♣",$value); 	//	club
  	$value = ereg_replace("&hearts;","♥",$value); 	//	heart
  	$value = ereg_replace("&diams;","♦",$value); 	//	diamond
  	$value = ereg_replace("&#1040;","А",$value); 	//	Ma
  	$value = ereg_replace("&#1041;","Б",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1042;","В",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1043;","Г",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1044;","Д",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1027;","Ѓ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1045;","Е",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1046;","Ж",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1047;","З",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1029;","Ѕ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1048;","И",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1032;","Ј",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1050;","К",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1051;","Л",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1033;","Љ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1052;","М",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1053;","Н",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1034;","Њ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1054;","О",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1055;","П",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1056;","Р",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1057;","С",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1058;","Т",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1036;","Ќ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1059;","У",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1060;","Ф",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1061;","Х",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1062;","Ц",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1063;","Ч",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1039;","Џ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1064;","Ш",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1072;","а",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1073;","б",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1074;","в",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1075;","г",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1076;","д",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1107;","ѓ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1077;","е",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1078;","ж",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1079;","з",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1109;","ѕ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1080;","и",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1112;","ј",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1082;","к",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1083;","л",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1113;","љ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1084;","м",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1085;","н",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1114;","њ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1086;","о",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1087;","п",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1088;","р",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1089;","с",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1090;","т",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1116;","ќ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1091;","у",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1092;","ф",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1093;","х",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1094;","ц",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1095;","ч",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1119;","џ",$value); 	//	HTML entities to Macedonian Cyrillic letters
  	$value = ereg_replace("&#1096;","ш",$value); 	//	HTML entities to Macedonian Cyrillic letters
    return $value;					
  }
  /**
  *	F�gt dem "macro=>value" Array Werte hinzu und maskiert Sonderzeichen f�r die HTML Ausgabe
  * @param string $key Schl�ssel
  * @param string $value Wert
  * @param boolean $encode=true Sonderzeichen maskieren
  */
	function add($key,$value,$encode=true) {
  	$encode ?	$this->data[$key]=$this->encodeSpecialChars($value) : $this->data[$key]=$value;
  }

  /**
   * Entfernt einen Wert aus dem "macro=>value" Array
   *
   * @param string $key
   */
  function delete($key) {
    unset($this->data[$key]);
  }

  /**
   * Setzt das "macro=>value" Array zur�ck
   *
   */
  function clear($resetHTML=false) {
  	$this->data = array();
    if ($resetHTML) unset($this->html);
  }

  function echoHTML($resetHTML=true) {
  	echo $this->html;
    if ($resetHTML) unset($this->html);
  }

  function getHTML($resetHTML=true) {
   	$result = $this->html;
    if ($resetHTML) unset($this->html);
    return $result;
  }

} //End Of Class

/**
 * Fuer BookShop angepasste Variante des Parsers
 *
 * @author Ralf Hertsch, Berlin (Germany)
 */

?>