<?php


/**
 * Mobile Detect Library
 * Motto: "Every business should have a mobile detection script to detect mobile readers"
 *
 * Mobile_Detect is a lightweight PHP class for detecting mobile devices (including tablets).
 * It uses the User-Agent string combined with specific HTTP headers to detect the mobile environment.
 *
 * Homepage: http://mobiledetect.net
 * GitHub: https://github.com/serbanghita/Mobile-Detect
 * README: https://github.com/serbanghita/Mobile-Detect/blob/master/README.md
 * CONTRIBUTING: https://github.com/serbanghita/Mobile-Detect/blob/master/docs/CONTRIBUTING.md
 * KNOWN LIMITATIONS: https://github.com/serbanghita/Mobile-Detect/blob/master/docs/KNOWN_LIMITATIONS.md
 * EXAMPLES: https://github.com/serbanghita/Mobile-Detect/wiki/Code-examples
 *
 * @license https://github.com/serbanghita/Mobile-Detect/blob/master/LICENSE.txt MIT License
 * @author  Serban Ghita <serbanghita@gmail.com>
 * @author  Nick Ilyin <nick.ilyin@gmail.com>
 * Original author: Victor Stanciu <vic.stanciu@gmail.com>
 *
 * @version 2.8.34
 */
class Mobile_Detect
{
	/**
     * Mobile detection type.
     *
     * @deprecated since version 2.6.9
     */
	public const DETECTION_TYPE_MOBILE = 'mobile';
	/**
     * Extended detection type.
     *
     * @deprecated since version 2.6.9
     */
	public const DETECTION_TYPE_EXTENDED = 'extended';
	/**
     * A frequently used regular expression to extract version #s.
     *
     * @deprecated since version 2.6.9
     */
	public const VER = '([\\w._\\+]+)';
	/**
     * Top-level device.
     */
	public const MOBILE_GRADE_A = 'A';
	/**
     * Mid-level device.
     */
	public const MOBILE_GRADE_B = 'B';
	/**
     * Low-level device.
     */
	public const MOBILE_GRADE_C = 'C';
	/**
     * Stores the version number of the current release.
     */
	public const VERSION = '2.8.34';
	/**
     * A type for the version() method indicating a string return value.
     */
	public const VERSION_TYPE_STRING = 'text';
	/**
     * A type for the version() method indicating a float return value.
     */
	public const VERSION_TYPE_FLOAT = 'float';

	/**
     * A cache for resolved matches
     * @var array
     */
	protected $cache = [];
	/**
     * The User-Agent HTTP header is stored in here.
     * @var string
     */
	protected $userAgent;
	/**
     * HTTP headers in the PHP-flavor. So HTTP_USER_AGENT and SERVER_SOFTWARE.
     * @var array
     */
	protected $httpHeaders = [];
	/**
     * CloudFront headers. E.g. CloudFront-Is-Desktop-Viewer, CloudFront-Is-Mobile-Viewer & CloudFront-Is-Tablet-Viewer.
     * @var array
     */
	protected $cloudfrontHeaders = [];
	/**
     * The matching Regex.
     * This is good for debug.
     * @var string
     */
	protected $matchingRegex;
	/**
     * The matches extracted from the regex expression.
     * This is good for debug.
     *
     * @var string
     */
	protected $matchesArray;
	/**
     * The detection type, using self::DETECTION_TYPE_MOBILE or self::DETECTION_TYPE_EXTENDED.
     *
     * @deprecated since version 2.6.9
     *
     * @var string
     */
	protected $detectionType = 'mobile';
	/**
     * HTTP headers that trigger the 'isMobile' detection
     * to be true.
     *
     * @var array
     */
	static protected $mobileHeaders = [
		'HTTP_ACCEPT'                  => [
		'matches' => ['application/x-obml2d', 'application/vnd.rim.html', 'text/vnd.wap.wml', 'application/vnd.wap.xhtml+xml']
	],
		'HTTP_X_WAP_PROFILE'           => NULL,
		'HTTP_X_WAP_CLIENTID'          => NULL,
		'HTTP_WAP_CONNECTION'          => NULL,
		'HTTP_PROFILE'                 => NULL,
		'HTTP_X_OPERAMINI_PHONE_UA'    => NULL,
		'HTTP_X_NOKIA_GATEWAY_ID'      => NULL,
		'HTTP_X_ORANGE_ID'             => NULL,
		'HTTP_X_VODAFONE_3GPDPCONTEXT' => NULL,
		'HTTP_X_HUAWEI_USERID'         => NULL,
		'HTTP_UA_OS'                   => NULL,
		'HTTP_X_MOBILE_GATEWAY'        => NULL,
		'HTTP_X_ATT_DEVICEID'          => NULL,
		'HTTP_UA_CPU'                  => [
		'matches' => ['ARM']
	]
	];
	/**
     * List of mobile devices (phones).
     *
     * @var array
     */
	static protected $phoneDevices = ['iPhone' => '\\biPhone\\b|\\biPod\\b', 'BlackBerry' => 'BlackBerry|\\bBB10\\b|rim[0-9]+|\\b(BBA100|BBB100|BBD100|BBE100|BBF100|STH100)\\b-[0-9]+', 'HTC' => 'HTC|HTC.*(Sensation|Evo|Vision|Explorer|6800|8100|8900|A7272|S510e|C110e|Legend|Desire|T8282)|APX515CKT|Qtek9090|APA9292KT|HD_mini|Sensation.*Z710e|PG86100|Z715e|Desire.*(A8181|HD)|ADR6200|ADR6400L|ADR6425|001HT|Inspire 4G|Android.*\\bEVO\\b|T-Mobile G1|Z520m|Android [0-9.]+; Pixel', 'Nexus' => 'Nexus One|Nexus S|Galaxy.*Nexus|Android.*Nexus.*Mobile|Nexus 4|Nexus 5|Nexus 6', 'Dell' => 'Dell[;]? (Streak|Aero|Venue|Venue Pro|Flash|Smoke|Mini 3iX)|XCD28|XCD35|\\b001DL\\b|\\b101DL\\b|\\bGS01\\b', 'Motorola' => 'Motorola|DROIDX|DROID BIONIC|\\bDroid\\b.*Build|Android.*Xoom|HRI39|MOT-|A1260|A1680|A555|A853|A855|A953|A955|A956|Motorola.*ELECTRIFY|Motorola.*i1|i867|i940|MB200|MB300|MB501|MB502|MB508|MB511|MB520|MB525|MB526|MB611|MB612|MB632|MB810|MB855|MB860|MB861|MB865|MB870|ME501|ME502|ME511|ME525|ME600|ME632|ME722|ME811|ME860|ME863|ME865|MT620|MT710|MT716|MT720|MT810|MT870|MT917|Motorola.*TITANIUM|WX435|WX445|XT300|XT301|XT311|XT316|XT317|XT319|XT320|XT390|XT502|XT530|XT531|XT532|XT535|XT603|XT610|XT611|XT615|XT681|XT701|XT702|XT711|XT720|XT800|XT806|XT860|XT862|XT875|XT882|XT883|XT894|XT901|XT907|XT909|XT910|XT912|XT928|XT926|XT915|XT919|XT925|XT1021|\\bMoto E\\b|XT1068|XT1092|XT1052', 'Samsung' => '\\bSamsung\\b|SM-G950F|SM-G955F|SM-G9250|GT-19300|SGH-I337|BGT-S5230|GT-B2100|GT-B2700|GT-B2710|GT-B3210|GT-B3310|GT-B3410|GT-B3730|GT-B3740|GT-B5510|GT-B5512|GT-B5722|GT-B6520|GT-B7300|GT-B7320|GT-B7330|GT-B7350|GT-B7510|GT-B7722|GT-B7800|GT-C3010|GT-C3011|GT-C3060|GT-C3200|GT-C3212|GT-C3212I|GT-C3262|GT-C3222|GT-C3300|GT-C3300K|GT-C3303|GT-C3303K|GT-C3310|GT-C3322|GT-C3330|GT-C3350|GT-C3500|GT-C3510|GT-C3530|GT-C3630|GT-C3780|GT-C5010|GT-C5212|GT-C6620|GT-C6625|GT-C6712|GT-E1050|GT-E1070|GT-E1075|GT-E1080|GT-E1081|GT-E1085|GT-E1087|GT-E1100|GT-E1107|GT-E1110|GT-E1120|GT-E1125|GT-E1130|GT-E1160|GT-E1170|GT-E1175|GT-E1180|GT-E1182|GT-E1200|GT-E1210|GT-E1225|GT-E1230|GT-E1390|GT-E2100|GT-E2120|GT-E2121|GT-E2152|GT-E2220|GT-E2222|GT-E2230|GT-E2232|GT-E2250|GT-E2370|GT-E2550|GT-E2652|GT-E3210|GT-E3213|GT-I5500|GT-I5503|GT-I5700|GT-I5800|GT-I5801|GT-I6410|GT-I6420|GT-I7110|GT-I7410|GT-I7500|GT-I8000|GT-I8150|GT-I8160|GT-I8190|GT-I8320|GT-I8330|GT-I8350|GT-I8530|GT-I8700|GT-I8703|GT-I8910|GT-I9000|GT-I9001|GT-I9003|GT-I9010|GT-I9020|GT-I9023|GT-I9070|GT-I9082|GT-I9100|GT-I9103|GT-I9220|GT-I9250|GT-I9300|GT-I9305|GT-I9500|GT-I9505|GT-M3510|GT-M5650|GT-M7500|GT-M7600|GT-M7603|GT-M8800|GT-M8910|GT-N7000|GT-S3110|GT-S3310|GT-S3350|GT-S3353|GT-S3370|GT-S3650|GT-S3653|GT-S3770|GT-S3850|GT-S5210|GT-S5220|GT-S5229|GT-S5230|GT-S5233|GT-S5250|GT-S5253|GT-S5260|GT-S5263|GT-S5270|GT-S5300|GT-S5330|GT-S5350|GT-S5360|GT-S5363|GT-S5369|GT-S5380|GT-S5380D|GT-S5560|GT-S5570|GT-S5600|GT-S5603|GT-S5610|GT-S5620|GT-S5660|GT-S5670|GT-S5690|GT-S5750|GT-S5780|GT-S5830|GT-S5839|GT-S6102|GT-S6500|GT-S7070|GT-S7200|GT-S7220|GT-S7230|GT-S7233|GT-S7250|GT-S7500|GT-S7530|GT-S7550|GT-S7562|GT-S7710|GT-S8000|GT-S8003|GT-S8500|GT-S8530|GT-S8600|SCH-A310|SCH-A530|SCH-A570|SCH-A610|SCH-A630|SCH-A650|SCH-A790|SCH-A795|SCH-A850|SCH-A870|SCH-A890|SCH-A930|SCH-A950|SCH-A970|SCH-A990|SCH-I100|SCH-I110|SCH-I400|SCH-I405|SCH-I500|SCH-I510|SCH-I515|SCH-I600|SCH-I730|SCH-I760|SCH-I770|SCH-I830|SCH-I910|SCH-I920|SCH-I959|SCH-LC11|SCH-N150|SCH-N300|SCH-R100|SCH-R300|SCH-R351|SCH-R400|SCH-R410|SCH-T300|SCH-U310|SCH-U320|SCH-U350|SCH-U360|SCH-U365|SCH-U370|SCH-U380|SCH-U410|SCH-U430|SCH-U450|SCH-U460|SCH-U470|SCH-U490|SCH-U540|SCH-U550|SCH-U620|SCH-U640|SCH-U650|SCH-U660|SCH-U700|SCH-U740|SCH-U750|SCH-U810|SCH-U820|SCH-U900|SCH-U940|SCH-U960|SCS-26UC|SGH-A107|SGH-A117|SGH-A127|SGH-A137|SGH-A157|SGH-A167|SGH-A177|SGH-A187|SGH-A197|SGH-A227|SGH-A237|SGH-A257|SGH-A437|SGH-A517|SGH-A597|SGH-A637|SGH-A657|SGH-A667|SGH-A687|SGH-A697|SGH-A707|SGH-A717|SGH-A727|SGH-A737|SGH-A747|SGH-A767|SGH-A777|SGH-A797|SGH-A817|SGH-A827|SGH-A837|SGH-A847|SGH-A867|SGH-A877|SGH-A887|SGH-A897|SGH-A927|SGH-B100|SGH-B130|SGH-B200|SGH-B220|SGH-C100|SGH-C110|SGH-C120|SGH-C130|SGH-C140|SGH-C160|SGH-C170|SGH-C180|SGH-C200|SGH-C207|SGH-C210|SGH-C225|SGH-C230|SGH-C417|SGH-C450|SGH-D307|SGH-D347|SGH-D357|SGH-D407|SGH-D415|SGH-D780|SGH-D807|SGH-D980|SGH-E105|SGH-E200|SGH-E315|SGH-E316|SGH-E317|SGH-E335|SGH-E590|SGH-E635|SGH-E715|SGH-E890|SGH-F300|SGH-F480|SGH-I200|SGH-I300|SGH-I320|SGH-I550|SGH-I577|SGH-I600|SGH-I607|SGH-I617|SGH-I627|SGH-I637|SGH-I677|SGH-I700|SGH-I717|SGH-I727|SGH-i747M|SGH-I777|SGH-I780|SGH-I827|SGH-I847|SGH-I857|SGH-I896|SGH-I897|SGH-I900|SGH-I907|SGH-I917|SGH-I927|SGH-I937|SGH-I997|SGH-J150|SGH-J200|SGH-L170|SGH-L700|SGH-M110|SGH-M150|SGH-M200|SGH-N105|SGH-N500|SGH-N600|SGH-N620|SGH-N625|SGH-N700|SGH-N710|SGH-P107|SGH-P207|SGH-P300|SGH-P310|SGH-P520|SGH-P735|SGH-P777|SGH-Q105|SGH-R210|SGH-R220|SGH-R225|SGH-S105|SGH-S307|SGH-T109|SGH-T119|SGH-T139|SGH-T209|SGH-T219|SGH-T229|SGH-T239|SGH-T249|SGH-T259|SGH-T309|SGH-T319|SGH-T329|SGH-T339|SGH-T349|SGH-T359|SGH-T369|SGH-T379|SGH-T409|SGH-T429|SGH-T439|SGH-T459|SGH-T469|SGH-T479|SGH-T499|SGH-T509|SGH-T519|SGH-T539|SGH-T559|SGH-T589|SGH-T609|SGH-T619|SGH-T629|SGH-T639|SGH-T659|SGH-T669|SGH-T679|SGH-T709|SGH-T719|SGH-T729|SGH-T739|SGH-T746|SGH-T749|SGH-T759|SGH-T769|SGH-T809|SGH-T819|SGH-T839|SGH-T919|SGH-T929|SGH-T939|SGH-T959|SGH-T989|SGH-U100|SGH-U200|SGH-U800|SGH-V205|SGH-V206|SGH-X100|SGH-X105|SGH-X120|SGH-X140|SGH-X426|SGH-X427|SGH-X475|SGH-X495|SGH-X497|SGH-X507|SGH-X600|SGH-X610|SGH-X620|SGH-X630|SGH-X700|SGH-X820|SGH-X890|SGH-Z130|SGH-Z150|SGH-Z170|SGH-ZX10|SGH-ZX20|SHW-M110|SPH-A120|SPH-A400|SPH-A420|SPH-A460|SPH-A500|SPH-A560|SPH-A600|SPH-A620|SPH-A660|SPH-A700|SPH-A740|SPH-A760|SPH-A790|SPH-A800|SPH-A820|SPH-A840|SPH-A880|SPH-A900|SPH-A940|SPH-A960|SPH-D600|SPH-D700|SPH-D710|SPH-D720|SPH-I300|SPH-I325|SPH-I330|SPH-I350|SPH-I500|SPH-I600|SPH-I700|SPH-L700|SPH-M100|SPH-M220|SPH-M240|SPH-M300|SPH-M305|SPH-M320|SPH-M330|SPH-M350|SPH-M360|SPH-M370|SPH-M380|SPH-M510|SPH-M540|SPH-M550|SPH-M560|SPH-M570|SPH-M580|SPH-M610|SPH-M620|SPH-M630|SPH-M800|SPH-M810|SPH-M850|SPH-M900|SPH-M910|SPH-M920|SPH-M930|SPH-N100|SPH-N200|SPH-N240|SPH-N300|SPH-N400|SPH-Z400|SWC-E100|SCH-i909|GT-N7100|GT-N7105|SCH-I535|SM-N900A|SGH-I317|SGH-T999L|GT-S5360B|GT-I8262|GT-S6802|GT-S6312|GT-S6310|GT-S5312|GT-S5310|GT-I9105|GT-I8510|GT-S6790N|SM-G7105|SM-N9005|GT-S5301|GT-I9295|GT-I9195|SM-C101|GT-S7392|GT-S7560|GT-B7610|GT-I5510|GT-S7582|GT-S7530E|GT-I8750|SM-G9006V|SM-G9008V|SM-G9009D|SM-G900A|SM-G900D|SM-G900F|SM-G900H|SM-G900I|SM-G900J|SM-G900K|SM-G900L|SM-G900M|SM-G900P|SM-G900R4|SM-G900S|SM-G900T|SM-G900V|SM-G900W8|SHV-E160K|SCH-P709|SCH-P729|SM-T2558|GT-I9205|SM-G9350|SM-J120F|SM-G920F|SM-G920V|SM-G930F|SM-N910C|SM-A310F|GT-I9190|SM-J500FN|SM-G903F|SM-J330F', 'LG' => '\\bLG\\b;|LG[- ]?(C800|C900|E400|E610|E900|E-900|F160|F180K|F180L|F180S|730|855|L160|LS740|LS840|LS970|LU6200|MS690|MS695|MS770|MS840|MS870|MS910|P500|P700|P705|VM696|AS680|AS695|AX840|C729|E970|GS505|272|C395|E739BK|E960|L55C|L75C|LS696|LS860|P769BK|P350|P500|P509|P870|UN272|US730|VS840|VS950|LN272|LN510|LS670|LS855|LW690|MN270|MN510|P509|P769|P930|UN200|UN270|UN510|UN610|US670|US740|US760|UX265|UX840|VN271|VN530|VS660|VS700|VS740|VS750|VS910|VS920|VS930|VX9200|VX11000|AX840A|LW770|P506|P925|P999|E612|D955|D802|MS323|M257)|LM-G710', 'Sony' => 'SonyST|SonyLT|SonyEricsson|SonyEricssonLT15iv|LT18i|E10i|LT28h|LT26w|SonyEricssonMT27i|C5303|C6902|C6903|C6906|C6943|D2533', 'Asus' => 'Asus.*Galaxy|PadFone.*Mobile', 'NokiaLumia' => 'Lumia [0-9]{3,4}', 'Micromax' => 'Micromax.*\\b(A210|A92|A88|A72|A111|A110Q|A115|A116|A110|A90S|A26|A51|A35|A54|A25|A27|A89|A68|A65|A57|A90)\\b', 'Palm' => 'PalmSource|Palm', 'Vertu' => 'Vertu|Vertu.*Ltd|Vertu.*Ascent|Vertu.*Ayxta|Vertu.*Constellation(F|Quest)?|Vertu.*Monika|Vertu.*Signature', 'Pantech' => 'PANTECH|IM-A850S|IM-A840S|IM-A830L|IM-A830K|IM-A830S|IM-A820L|IM-A810K|IM-A810S|IM-A800S|IM-T100K|IM-A725L|IM-A780L|IM-A775C|IM-A770K|IM-A760S|IM-A750K|IM-A740S|IM-A730S|IM-A720L|IM-A710K|IM-A690L|IM-A690S|IM-A650S|IM-A630K|IM-A600S|VEGA PTL21|PT003|P8010|ADR910L|P6030|P6020|P9070|P4100|P9060|P5000|CDM8992|TXT8045|ADR8995|IS11PT|P2030|P6010|P8000|PT002|IS06|CDM8999|P9050|PT001|TXT8040|P2020|P9020|P2000|P7040|P7000|C790', 'Fly' => 'IQ230|IQ444|IQ450|IQ440|IQ442|IQ441|IQ245|IQ256|IQ236|IQ255|IQ235|IQ245|IQ275|IQ240|IQ285|IQ280|IQ270|IQ260|IQ250', 'Wiko' => 'KITE 4G|HIGHWAY|GETAWAY|STAIRWAY|DARKSIDE|DARKFULL|DARKNIGHT|DARKMOON|SLIDE|WAX 4G|RAINBOW|BLOOM|SUNSET|GOA(?!nna)|LENNY|BARRY|IGGY|OZZY|CINK FIVE|CINK PEAX|CINK PEAX 2|CINK SLIM|CINK SLIM 2|CINK +|CINK KING|CINK PEAX|CINK SLIM|SUBLIM', 'iMobile' => 'i-mobile (IQ|i-STYLE|idea|ZAA|Hitz)', 'SimValley' => '\\b(SP-80|XT-930|SX-340|XT-930|SX-310|SP-360|SP60|SPT-800|SP-120|SPT-800|SP-140|SPX-5|SPX-8|SP-100|SPX-8|SPX-12)\\b', 'Wolfgang' => 'AT-B24D|AT-AS50HD|AT-AS40W|AT-AS55HD|AT-AS45q2|AT-B26D|AT-AS50Q', 'Alcatel' => 'Alcatel', 'Nintendo' => 'Nintendo (3DS|Switch)', 'Amoi' => 'Amoi', 'INQ' => 'INQ', 'OnePlus' => 'ONEPLUS', 'GenericPhone' => 'Tapatalk|PDA;|SAGEM|\\bmmp\\b|pocket|\\bpsp\\b|symbian|Smartphone|smartfon|treo|up.browser|up.link|vodafone|\\bwap\\b|nokia|Series40|Series60|S60|SonyEricsson|N900|MAUI.*WAP.*Browser'];
	/**
     * List of tablet devices.
     *
     * @var array
     */
	static protected $tabletDevices = ['NexusTablet' => 'Android.*Nexus[\\s]+(7|9|10)', 'GoogleTablet' => 'Android.*Pixel C', 'SamsungTablet' => 'SAMSUNG.*Tablet|Galaxy.*Tab|SC-01C|GT-P1000|GT-P1003|GT-P1010|GT-P3105|GT-P6210|GT-P6800|GT-P6810|GT-P7100|GT-P7300|GT-P7310|GT-P7500|GT-P7510|SCH-I800|SCH-I815|SCH-I905|SGH-I957|SGH-I987|SGH-T849|SGH-T859|SGH-T869|SPH-P100|GT-P3100|GT-P3108|GT-P3110|GT-P5100|GT-P5110|GT-P6200|GT-P7320|GT-P7511|GT-N8000|GT-P8510|SGH-I497|SPH-P500|SGH-T779|SCH-I705|SCH-I915|GT-N8013|GT-P3113|GT-P5113|GT-P8110|GT-N8010|GT-N8005|GT-N8020|GT-P1013|GT-P6201|GT-P7501|GT-N5100|GT-N5105|GT-N5110|SHV-E140K|SHV-E140L|SHV-E140S|SHV-E150S|SHV-E230K|SHV-E230L|SHV-E230S|SHW-M180K|SHW-M180L|SHW-M180S|SHW-M180W|SHW-M300W|SHW-M305W|SHW-M380K|SHW-M380S|SHW-M380W|SHW-M430W|SHW-M480K|SHW-M480S|SHW-M480W|SHW-M485W|SHW-M486W|SHW-M500W|GT-I9228|SCH-P739|SCH-I925|GT-I9200|GT-P5200|GT-P5210|GT-P5210X|SM-T311|SM-T310|SM-T310X|SM-T210|SM-T210R|SM-T211|SM-P600|SM-P601|SM-P605|SM-P900|SM-P901|SM-T217|SM-T217A|SM-T217S|SM-P6000|SM-T3100|SGH-I467|XE500|SM-T110|GT-P5220|GT-I9200X|GT-N5110X|GT-N5120|SM-P905|SM-T111|SM-T2105|SM-T315|SM-T320|SM-T320X|SM-T321|SM-T520|SM-T525|SM-T530NU|SM-T230NU|SM-T330NU|SM-T900|XE500T1C|SM-P605V|SM-P905V|SM-T337V|SM-T537V|SM-T707V|SM-T807V|SM-P600X|SM-P900X|SM-T210X|SM-T230|SM-T230X|SM-T325|GT-P7503|SM-T531|SM-T330|SM-T530|SM-T705|SM-T705C|SM-T535|SM-T331|SM-T800|SM-T700|SM-T537|SM-T807|SM-P907A|SM-T337A|SM-T537A|SM-T707A|SM-T807A|SM-T237|SM-T807P|SM-P607T|SM-T217T|SM-T337T|SM-T807T|SM-T116NQ|SM-T116BU|SM-P550|SM-T350|SM-T550|SM-T9000|SM-P9000|SM-T705Y|SM-T805|GT-P3113|SM-T710|SM-T810|SM-T815|SM-T360|SM-T533|SM-T113|SM-T335|SM-T715|SM-T560|SM-T670|SM-T677|SM-T377|SM-T567|SM-T357T|SM-T555|SM-T561|SM-T713|SM-T719|SM-T813|SM-T819|SM-T580|SM-T355Y?|SM-T280|SM-T817A|SM-T820|SM-W700|SM-P580|SM-T587|SM-P350|SM-P555M|SM-P355M|SM-T113NU|SM-T815Y|SM-T585|SM-T285|SM-T825|SM-W708|SM-T835|SM-T830|SM-T837V|SM-T720|SM-T510|SM-T387V', 'Kindle' => 'Kindle|Silk.*Accelerated|Android.*\\b(KFOT|KFTT|KFJWI|KFJWA|KFOTE|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|WFJWAE|KFSAWA|KFSAWI|KFASWI|KFARWI|KFFOWI|KFGIWI|KFMEWI)\\b|Android.*Silk/[0-9.]+ like Chrome/[0-9.]+ (?!Mobile)', 'SurfaceTablet' => 'Windows NT [0-9.]+; ARM;.*(Tablet|ARMBJS)', 'HPTablet' => 'HP Slate (7|8|10)|HP ElitePad 900|hp-tablet|EliteBook.*Touch|HP 8|Slate 21|HP SlateBook 10', 'AsusTablet' => '^.*PadFone((?!Mobile).)*$|Transformer|TF101|TF101G|TF300T|TF300TG|TF300TL|TF700T|TF700KL|TF701T|TF810C|ME171|ME301T|ME302C|ME371MG|ME370T|ME372MG|ME172V|ME173X|ME400C|Slider SL101|\\bK00F\\b|\\bK00C\\b|\\bK00E\\b|\\bK00L\\b|TX201LA|ME176C|ME102A|\\bM80TA\\b|ME372CL|ME560CG|ME372CG|ME302KL| K010 | K011 | K017 | K01E |ME572C|ME103K|ME170C|ME171C|\\bME70C\\b|ME581C|ME581CL|ME8510C|ME181C|P01Y|PO1MA|P01Z|\\bP027\\b|\\bP024\\b|\\bP00C\\b', 'BlackBerryTablet' => 'PlayBook|RIM Tablet', 'HTCtablet' => 'HTC_Flyer_P512|HTC Flyer|HTC Jetstream|HTC-P715a|HTC EVO View 4G|PG41200|PG09410', 'MotorolaTablet' => 'xoom|sholest|MZ615|MZ605|MZ505|MZ601|MZ602|MZ603|MZ604|MZ606|MZ607|MZ608|MZ609|MZ615|MZ616|MZ617', 'NookTablet' => 'Android.*Nook|NookColor|nook browser|BNRV200|BNRV200A|BNTV250|BNTV250A|BNTV400|BNTV600|LogicPD Zoom2', 'AcerTablet' => 'Android.*; \\b(A100|A101|A110|A200|A210|A211|A500|A501|A510|A511|A700|A701|W500|W500P|W501|W501P|W510|W511|W700|G100|G100W|B1-A71|B1-710|B1-711|A1-810|A1-811|A1-830)\\b|W3-810|\\bA3-A10\\b|\\bA3-A11\\b|\\bA3-A20\\b|\\bA3-A30', 'ToshibaTablet' => 'Android.*(AT100|AT105|AT200|AT205|AT270|AT275|AT300|AT305|AT1S5|AT500|AT570|AT700|AT830)|TOSHIBA.*FOLIO', 'LGTablet' => '\\bL-06C|LG-V909|LG-V900|LG-V700|LG-V510|LG-V500|LG-V410|LG-V400|LG-VK810\\b', 'FujitsuTablet' => 'Android.*\\b(F-01D|F-02F|F-05E|F-10D|M532|Q572)\\b', 'PrestigioTablet' => 'PMP3170B|PMP3270B|PMP3470B|PMP7170B|PMP3370B|PMP3570C|PMP5870C|PMP3670B|PMP5570C|PMP5770D|PMP3970B|PMP3870C|PMP5580C|PMP5880D|PMP5780D|PMP5588C|PMP7280C|PMP7280C3G|PMP7280|PMP7880D|PMP5597D|PMP5597|PMP7100D|PER3464|PER3274|PER3574|PER3884|PER5274|PER5474|PMP5097CPRO|PMP5097|PMP7380D|PMP5297C|PMP5297C_QUAD|PMP812E|PMP812E3G|PMP812F|PMP810E|PMP880TD|PMT3017|PMT3037|PMT3047|PMT3057|PMT7008|PMT5887|PMT5001|PMT5002', 'LenovoTablet' => 'Lenovo TAB|Idea(Tab|Pad)( A1|A10| K1|)|ThinkPad([ ]+)?Tablet|YT3-850M|YT3-X90L|YT3-X90F|YT3-X90X|Lenovo.*(S2109|S2110|S5000|S6000|K3011|A3000|A3500|A1000|A2107|A2109|A1107|A5500|A7600|B6000|B8000|B8080)(-|)(FL|F|HV|H|)|TB-X103F|TB-X304X|TB-X304F|TB-X304L|TB-X505F|TB-X505L|TB-X505X|TB-X605F|TB-X605L|TB-8703F|TB-8703X|TB-8703N|TB-8704N|TB-8704F|TB-8704X|TB-8704V|TB-7304F|TB-7304I|TB-7304X|Tab2A7-10F|Tab2A7-20F|TB2-X30L|YT3-X50L|YT3-X50F|YT3-X50M|YT-X705F|YT-X703F|YT-X703L|YT-X705L|YT-X705X|TB2-X30F|TB2-X30L|TB2-X30M|A2107A-F|A2107A-H|TB3-730F|TB3-730M|TB3-730X|TB-7504F|TB-7504X', 'DellTablet' => 'Venue 11|Venue 8|Venue 7|Dell Streak 10|Dell Streak 7', 'YarvikTablet' => 'Android.*\\b(TAB210|TAB211|TAB224|TAB250|TAB260|TAB264|TAB310|TAB360|TAB364|TAB410|TAB411|TAB420|TAB424|TAB450|TAB460|TAB461|TAB464|TAB465|TAB467|TAB468|TAB07-100|TAB07-101|TAB07-150|TAB07-151|TAB07-152|TAB07-200|TAB07-201-3G|TAB07-210|TAB07-211|TAB07-212|TAB07-214|TAB07-220|TAB07-400|TAB07-485|TAB08-150|TAB08-200|TAB08-201-3G|TAB08-201-30|TAB09-100|TAB09-211|TAB09-410|TAB10-150|TAB10-201|TAB10-211|TAB10-400|TAB10-410|TAB13-201|TAB274EUK|TAB275EUK|TAB374EUK|TAB462EUK|TAB474EUK|TAB9-200)\\b', 'MedionTablet' => 'Android.*\\bOYO\\b|LIFE.*(P9212|P9514|P9516|S9512)|LIFETAB', 'ArnovaTablet' => '97G4|AN10G2|AN7bG3|AN7fG3|AN8G3|AN8cG3|AN7G3|AN9G3|AN7dG3|AN7dG3ST|AN7dG3ChildPad|AN10bG3|AN10bG3DT|AN9G2', 'IntensoTablet' => 'INM8002KP|INM1010FP|INM805ND|Intenso Tab|TAB1004', 'IRUTablet' => 'M702pro', 'MegafonTablet' => 'MegaFon V9|\\bZTE V9\\b|Android.*\\bMT7A\\b', 'EbodaTablet' => 'E-Boda (Supreme|Impresspeed|Izzycomm|Essential)', 'AllViewTablet' => 'Allview.*(Viva|Alldro|City|Speed|All TV|Frenzy|Quasar|Shine|TX1|AX1|AX2)', 'ArchosTablet' => '\\b(101G9|80G9|A101IT)\\b|Qilive 97R|Archos5|\\bARCHOS (70|79|80|90|97|101|FAMILYPAD|)(b|c|)(G10| Cobalt| TITANIUM(HD|)| Xenon| Neon|XSK| 2| XS 2| PLATINUM| CARBON|GAMEPAD)\\b', 'AinolTablet' => 'NOVO7|NOVO8|NOVO10|Novo7Aurora|Novo7Basic|NOVO7PALADIN|novo9-Spark', 'NokiaLumiaTablet' => 'Lumia 2520', 'SonyTablet' => 'Sony.*Tablet|Xperia Tablet|Sony Tablet S|SO-03E|SGPT12|SGPT13|SGPT114|SGPT121|SGPT122|SGPT123|SGPT111|SGPT112|SGPT113|SGPT131|SGPT132|SGPT133|SGPT211|SGPT212|SGPT213|SGP311|SGP312|SGP321|EBRD1101|EBRD1102|EBRD1201|SGP351|SGP341|SGP511|SGP512|SGP521|SGP541|SGP551|SGP621|SGP641|SGP612|SOT31|SGP771|SGP611|SGP612|SGP712', 'PhilipsTablet' => '\\b(PI2010|PI3000|PI3100|PI3105|PI3110|PI3205|PI3210|PI3900|PI4010|PI7000|PI7100)\\b', 'CubeTablet' => 'Android.*(K8GT|U9GT|U10GT|U16GT|U17GT|U18GT|U19GT|U20GT|U23GT|U30GT)|CUBE U8GT', 'CobyTablet' => 'MID1042|MID1045|MID1125|MID1126|MID7012|MID7014|MID7015|MID7034|MID7035|MID7036|MID7042|MID7048|MID7127|MID8042|MID8048|MID8127|MID9042|MID9740|MID9742|MID7022|MID7010', 'MIDTablet' => 'M9701|M9000|M9100|M806|M1052|M806|T703|MID701|MID713|MID710|MID727|MID760|MID830|MID728|MID933|MID125|MID810|MID732|MID120|MID930|MID800|MID731|MID900|MID100|MID820|MID735|MID980|MID130|MID833|MID737|MID960|MID135|MID860|MID736|MID140|MID930|MID835|MID733|MID4X10', 'MSITablet' => 'MSI \\b(Primo 73K|Primo 73L|Primo 81L|Primo 77|Primo 93|Primo 75|Primo 76|Primo 73|Primo 81|Primo 91|Primo 90|Enjoy 71|Enjoy 7|Enjoy 10)\\b', 'SMiTTablet' => 'Android.*(\\bMID\\b|MID-560|MTV-T1200|MTV-PND531|MTV-P1101|MTV-PND530)', 'RockChipTablet' => 'Android.*(RK2818|RK2808A|RK2918|RK3066)|RK2738|RK2808A', 'FlyTablet' => 'IQ310|Fly Vision', 'bqTablet' => 'Android.*(bq)?.*\\b(Elcano|Curie|Edison|Maxwell|Kepler|Pascal|Tesla|Hypatia|Platon|Newton|Livingstone|Cervantes|Avant|Aquaris ([E|M]10|M8))\\b|Maxwell.*Lite|Maxwell.*Plus', 'HuaweiTablet' => 'MediaPad|MediaPad 7 Youth|IDEOS S7|S7-201c|S7-202u|S7-101|S7-103|S7-104|S7-105|S7-106|S7-201|S7-Slim|M2-A01L|BAH-L09|BAH-W09|AGS-L09|CMR-AL19', 'NecTablet' => '\\bN-06D|\\bN-08D', 'PantechTablet' => 'Pantech.*P4100', 'BronchoTablet' => 'Broncho.*(N701|N708|N802|a710)', 'VersusTablet' => 'TOUCHPAD.*[78910]|\\bTOUCHTAB\\b', 'ZyncTablet' => 'z1000|Z99 2G|z930|z990|z909|Z919|z900', 'PositivoTablet' => 'TB07STA|TB10STA|TB07FTA|TB10FTA', 'NabiTablet' => 'Android.*\\bNabi', 'KoboTablet' => 'Kobo Touch|\\bK080\\b|\\bVox\\b Build|\\bArc\\b Build', 'DanewTablet' => 'DSlide.*\\b(700|701R|702|703R|704|802|970|971|972|973|974|1010|1012)\\b', 'TexetTablet' => 'NaviPad|TB-772A|TM-7045|TM-7055|TM-9750|TM-7016|TM-7024|TM-7026|TM-7041|TM-7043|TM-7047|TM-8041|TM-9741|TM-9747|TM-9748|TM-9751|TM-7022|TM-7021|TM-7020|TM-7011|TM-7010|TM-7023|TM-7025|TM-7037W|TM-7038W|TM-7027W|TM-9720|TM-9725|TM-9737W|TM-1020|TM-9738W|TM-9740|TM-9743W|TB-807A|TB-771A|TB-727A|TB-725A|TB-719A|TB-823A|TB-805A|TB-723A|TB-715A|TB-707A|TB-705A|TB-709A|TB-711A|TB-890HD|TB-880HD|TB-790HD|TB-780HD|TB-770HD|TB-721HD|TB-710HD|TB-434HD|TB-860HD|TB-840HD|TB-760HD|TB-750HD|TB-740HD|TB-730HD|TB-722HD|TB-720HD|TB-700HD|TB-500HD|TB-470HD|TB-431HD|TB-430HD|TB-506|TB-504|TB-446|TB-436|TB-416|TB-146SE|TB-126SE', 'PlaystationTablet' => 'Playstation.*(Portable|Vita)', 'TrekstorTablet' => 'ST10416-1|VT10416-1|ST70408-1|ST702xx-1|ST702xx-2|ST80208|ST97216|ST70104-2|VT10416-2|ST10216-2A|SurfTab', 'PyleAudioTablet' => '\\b(PTBL10CEU|PTBL10C|PTBL72BC|PTBL72BCEU|PTBL7CEU|PTBL7C|PTBL92BC|PTBL92BCEU|PTBL9CEU|PTBL9CUK|PTBL9C)\\b', 'AdvanTablet' => 'Android.* \\b(E3A|T3X|T5C|T5B|T3E|T3C|T3B|T1J|T1F|T2A|T1H|T1i|E1C|T1-E|T5-A|T4|E1-B|T2Ci|T1-B|T1-D|O1-A|E1-A|T1-A|T3A|T4i)\\b ', 'DanyTechTablet' => 'Genius Tab G3|Genius Tab S2|Genius Tab Q3|Genius Tab G4|Genius Tab Q4|Genius Tab G-II|Genius TAB GII|Genius TAB GIII|Genius Tab S1', 'GalapadTablet' => 'Android.*\\bG1\\b(?!\\))', 'MicromaxTablet' => 'Funbook|Micromax.*\\b(P250|P560|P360|P362|P600|P300|P350|P500|P275)\\b', 'KarbonnTablet' => 'Android.*\\b(A39|A37|A34|ST8|ST10|ST7|Smart Tab3|Smart Tab2)\\b', 'AllFineTablet' => 'Fine7 Genius|Fine7 Shine|Fine7 Air|Fine8 Style|Fine9 More|Fine10 Joy|Fine11 Wide', 'PROSCANTablet' => '\\b(PEM63|PLT1023G|PLT1041|PLT1044|PLT1044G|PLT1091|PLT4311|PLT4311PL|PLT4315|PLT7030|PLT7033|PLT7033D|PLT7035|PLT7035D|PLT7044K|PLT7045K|PLT7045KB|PLT7071KG|PLT7072|PLT7223G|PLT7225G|PLT7777G|PLT7810K|PLT7849G|PLT7851G|PLT7852G|PLT8015|PLT8031|PLT8034|PLT8036|PLT8080K|PLT8082|PLT8088|PLT8223G|PLT8234G|PLT8235G|PLT8816K|PLT9011|PLT9045K|PLT9233G|PLT9735|PLT9760G|PLT9770G)\\b', 'YONESTablet' => 'BQ1078|BC1003|BC1077|RK9702|BC9730|BC9001|IT9001|BC7008|BC7010|BC708|BC728|BC7012|BC7030|BC7027|BC7026', 'ChangJiaTablet' => 'TPC7102|TPC7103|TPC7105|TPC7106|TPC7107|TPC7201|TPC7203|TPC7205|TPC7210|TPC7708|TPC7709|TPC7712|TPC7110|TPC8101|TPC8103|TPC8105|TPC8106|TPC8203|TPC8205|TPC8503|TPC9106|TPC9701|TPC97101|TPC97103|TPC97105|TPC97106|TPC97111|TPC97113|TPC97203|TPC97603|TPC97809|TPC97205|TPC10101|TPC10103|TPC10106|TPC10111|TPC10203|TPC10205|TPC10503', 'GUTablet' => 'TX-A1301|TX-M9002|Q702|kf026', 'PointOfViewTablet' => 'TAB-P506|TAB-navi-7-3G-M|TAB-P517|TAB-P-527|TAB-P701|TAB-P703|TAB-P721|TAB-P731N|TAB-P741|TAB-P825|TAB-P905|TAB-P925|TAB-PR945|TAB-PL1015|TAB-P1025|TAB-PI1045|TAB-P1325|TAB-PROTAB[0-9]+|TAB-PROTAB25|TAB-PROTAB26|TAB-PROTAB27|TAB-PROTAB26XL|TAB-PROTAB2-IPS9|TAB-PROTAB30-IPS9|TAB-PROTAB25XXL|TAB-PROTAB26-IPS10|TAB-PROTAB30-IPS10', 'OvermaxTablet' => 'OV-(SteelCore|NewBase|Basecore|Baseone|Exellen|Quattor|EduTab|Solution|ACTION|BasicTab|TeddyTab|MagicTab|Stream|TB-08|TB-09)|Qualcore 1027', 'HCLTablet' => 'HCL.*Tablet|Connect-3G-2.0|Connect-2G-2.0|ME Tablet U1|ME Tablet U2|ME Tablet G1|ME Tablet X1|ME Tablet Y2|ME Tablet Sync', 'DPSTablet' => 'DPS Dream 9|DPS Dual 7', 'VistureTablet' => 'V97 HD|i75 3G|Visture V4( HD)?|Visture V5( HD)?|Visture V10', 'CrestaTablet' => 'CTP(-)?810|CTP(-)?818|CTP(-)?828|CTP(-)?838|CTP(-)?888|CTP(-)?978|CTP(-)?980|CTP(-)?987|CTP(-)?988|CTP(-)?989', 'MediatekTablet' => '\\bMT8125|MT8389|MT8135|MT8377\\b', 'ConcordeTablet' => 'Concorde([ ]+)?Tab|ConCorde ReadMan', 'GoCleverTablet' => 'GOCLEVER TAB|A7GOCLEVER|M1042|M7841|M742|R1042BK|R1041|TAB A975|TAB A7842|TAB A741|TAB A741L|TAB M723G|TAB M721|TAB A1021|TAB I921|TAB R721|TAB I720|TAB T76|TAB R70|TAB R76.2|TAB R106|TAB R83.2|TAB M813G|TAB I721|GCTA722|TAB I70|TAB I71|TAB S73|TAB R73|TAB R74|TAB R93|TAB R75|TAB R76.1|TAB A73|TAB A93|TAB A93.2|TAB T72|TAB R83|TAB R974|TAB R973|TAB A101|TAB A103|TAB A104|TAB A104.2|R105BK|M713G|A972BK|TAB A971|TAB R974.2|TAB R104|TAB R83.3|TAB A1042', 'ModecomTablet' => 'FreeTAB 9000|FreeTAB 7.4|FreeTAB 7004|FreeTAB 7800|FreeTAB 2096|FreeTAB 7.5|FreeTAB 1014|FreeTAB 1001 |FreeTAB 8001|FreeTAB 9706|FreeTAB 9702|FreeTAB 7003|FreeTAB 7002|FreeTAB 1002|FreeTAB 7801|FreeTAB 1331|FreeTAB 1004|FreeTAB 8002|FreeTAB 8014|FreeTAB 9704|FreeTAB 1003', 'VoninoTablet' => '\\b(Argus[ _]?S|Diamond[ _]?79HD|Emerald[ _]?78E|Luna[ _]?70C|Onyx[ _]?S|Onyx[ _]?Z|Orin[ _]?HD|Orin[ _]?S|Otis[ _]?S|SpeedStar[ _]?S|Magnet[ _]?M9|Primus[ _]?94[ _]?3G|Primus[ _]?94HD|Primus[ _]?QS|Android.*\\bQ8\\b|Sirius[ _]?EVO[ _]?QS|Sirius[ _]?QS|Spirit[ _]?S)\\b', 'ECSTablet' => 'V07OT2|TM105A|S10OT1|TR10CS1', 'StorexTablet' => 'eZee[_\']?(Tab|Go)[0-9]+|TabLC7|Looney Tunes Tab', 'VodafoneTablet' => 'SmartTab([ ]+)?[0-9]+|SmartTabII10|SmartTabII7|VF-1497|VFD 1400', 'EssentielBTablet' => 'Smart[ \']?TAB[ ]+?[0-9]+|Family[ \']?TAB2', 'RossMoorTablet' => 'RM-790|RM-997|RMD-878G|RMD-974R|RMT-705A|RMT-701|RME-601|RMT-501|RMT-711', 'iMobileTablet' => 'i-mobile i-note', 'TolinoTablet' => 'tolino tab [0-9.]+|tolino shine', 'AudioSonicTablet' => '\\bC-22Q|T7-QC|T-17B|T-17P\\b', 'AMPETablet' => 'Android.* A78 ', 'SkkTablet' => 'Android.* (SKYPAD|PHOENIX|CYCLOPS)', 'TecnoTablet' => 'TECNO P9|TECNO DP8D', 'JXDTablet' => 'Android.* \\b(F3000|A3300|JXD5000|JXD3000|JXD2000|JXD300B|JXD300|S5800|S7800|S602b|S5110b|S7300|S5300|S602|S603|S5100|S5110|S601|S7100a|P3000F|P3000s|P101|P200s|P1000m|P200m|P9100|P1000s|S6600b|S908|P1000|P300|S18|S6600|S9100)\\b', 'iJoyTablet' => 'Tablet (Spirit 7|Essentia|Galatea|Fusion|Onix 7|Landa|Titan|Scooby|Deox|Stella|Themis|Argon|Unique 7|Sygnus|Hexen|Finity 7|Cream|Cream X2|Jade|Neon 7|Neron 7|Kandy|Scape|Saphyr 7|Rebel|Biox|Rebel|Rebel 8GB|Myst|Draco 7|Myst|Tab7-004|Myst|Tadeo Jones|Tablet Boing|Arrow|Draco Dual Cam|Aurix|Mint|Amity|Revolution|Finity 9|Neon 9|T9w|Amity 4GB Dual Cam|Stone 4GB|Stone 8GB|Andromeda|Silken|X2|Andromeda II|Halley|Flame|Saphyr 9,7|Touch 8|Planet|Triton|Unique 10|Hexen 10|Memphis 4GB|Memphis 8GB|Onix 10)', 'FX2Tablet' => 'FX2 PAD7|FX2 PAD10', 'XoroTablet' => 'KidsPAD 701|PAD[ ]?712|PAD[ ]?714|PAD[ ]?716|PAD[ ]?717|PAD[ ]?718|PAD[ ]?720|PAD[ ]?721|PAD[ ]?722|PAD[ ]?790|PAD[ ]?792|PAD[ ]?900|PAD[ ]?9715D|PAD[ ]?9716DR|PAD[ ]?9718DR|PAD[ ]?9719QR|PAD[ ]?9720QR|TelePAD1030|Telepad1032|TelePAD730|TelePAD731|TelePAD732|TelePAD735Q|TelePAD830|TelePAD9730|TelePAD795|MegaPAD 1331|MegaPAD 1851|MegaPAD 2151', 'ViewsonicTablet' => 'ViewPad 10pi|ViewPad 10e|ViewPad 10s|ViewPad E72|ViewPad7|ViewPad E100|ViewPad 7e|ViewSonic VB733|VB100a', 'VerizonTablet' => 'QTAQZ3|QTAIR7|QTAQTZ3|QTASUN1|QTASUN2|QTAXIA1', 'OdysTablet' => 'LOOX|XENO10|ODYS[ -](Space|EVO|Xpress|NOON)|\\bXELIO\\b|Xelio10Pro|XELIO7PHONETAB|XELIO10EXTREME|XELIOPT2|NEO_QUAD10', 'CaptivaTablet' => 'CAPTIVA PAD', 'IconbitTablet' => 'NetTAB|NT-3702|NT-3702S|NT-3702S|NT-3603P|NT-3603P|NT-0704S|NT-0704S|NT-3805C|NT-3805C|NT-0806C|NT-0806C|NT-0909T|NT-0909T|NT-0907S|NT-0907S|NT-0902S|NT-0902S', 'TeclastTablet' => 'T98 4G|\\bP80\\b|\\bX90HD\\b|X98 Air|X98 Air 3G|\\bX89\\b|P80 3G|\\bX80h\\b|P98 Air|\\bX89HD\\b|P98 3G|\\bP90HD\\b|P89 3G|X98 3G|\\bP70h\\b|P79HD 3G|G18d 3G|\\bP79HD\\b|\\bP89s\\b|\\bA88\\b|\\bP10HD\\b|\\bP19HD\\b|G18 3G|\\bP78HD\\b|\\bA78\\b|\\bP75\\b|G17s 3G|G17h 3G|\\bP85t\\b|\\bP90\\b|\\bP11\\b|\\bP98t\\b|\\bP98HD\\b|\\bG18d\\b|\\bP85s\\b|\\bP11HD\\b|\\bP88s\\b|\\bA80HD\\b|\\bA80se\\b|\\bA10h\\b|\\bP89\\b|\\bP78s\\b|\\bG18\\b|\\bP85\\b|\\bA70h\\b|\\bA70\\b|\\bG17\\b|\\bP18\\b|\\bA80s\\b|\\bA11s\\b|\\bP88HD\\b|\\bA80h\\b|\\bP76s\\b|\\bP76h\\b|\\bP98\\b|\\bA10HD\\b|\\bP78\\b|\\bP88\\b|\\bA11\\b|\\bA10t\\b|\\bP76a\\b|\\bP76t\\b|\\bP76e\\b|\\bP85HD\\b|\\bP85a\\b|\\bP86\\b|\\bP75HD\\b|\\bP76v\\b|\\bA12\\b|\\bP75a\\b|\\bA15\\b|\\bP76Ti\\b|\\bP81HD\\b|\\bA10\\b|\\bT760VE\\b|\\bT720HD\\b|\\bP76\\b|\\bP73\\b|\\bP71\\b|\\bP72\\b|\\bT720SE\\b|\\bC520Ti\\b|\\bT760\\b|\\bT720VE\\b|T720-3GE|T720-WiFi', 'OndaTablet' => '\\b(V975i|Vi30|VX530|V701|Vi60|V701s|Vi50|V801s|V719|Vx610w|VX610W|V819i|Vi10|VX580W|Vi10|V711s|V813|V811|V820w|V820|Vi20|V711|VI30W|V712|V891w|V972|V819w|V820w|Vi60|V820w|V711|V813s|V801|V819|V975s|V801|V819|V819|V818|V811|V712|V975m|V101w|V961w|V812|V818|V971|V971s|V919|V989|V116w|V102w|V973|Vi40)\\b[\\s]+|V10 \\b4G\\b', 'JaytechTablet' => 'TPC-PA762', 'BlaupunktTablet' => 'Endeavour 800NG|Endeavour 1010', 'DigmaTablet' => '\\b(iDx10|iDx9|iDx8|iDx7|iDxD7|iDxD8|iDsQ8|iDsQ7|iDsQ8|iDsD10|iDnD7|3TS804H|iDsQ11|iDj7|iDs10)\\b', 'EvolioTablet' => 'ARIA_Mini_wifi|Aria[ _]Mini|Evolio X10|Evolio X7|Evolio X8|\\bEvotab\\b|\\bNeura\\b', 'LavaTablet' => 'QPAD E704|\\bIvoryS\\b|E-TAB IVORY|\\bE-TAB\\b', 'AocTablet' => 'MW0811|MW0812|MW0922|MTK8382|MW1031|MW0831|MW0821|MW0931|MW0712', 'MpmanTablet' => 'MP11 OCTA|MP10 OCTA|MPQC1114|MPQC1004|MPQC994|MPQC974|MPQC973|MPQC804|MPQC784|MPQC780|\\bMPG7\\b|MPDCG75|MPDCG71|MPDC1006|MP101DC|MPDC9000|MPDC905|MPDC706HD|MPDC706|MPDC705|MPDC110|MPDC100|MPDC99|MPDC97|MPDC88|MPDC8|MPDC77|MP709|MID701|MID711|MID170|MPDC703|MPQC1010', 'CelkonTablet' => 'CT695|CT888|CT[\\s]?910|CT7 Tab|CT9 Tab|CT3 Tab|CT2 Tab|CT1 Tab|C820|C720|\\bCT-1\\b', 'WolderTablet' => 'miTab \\b(DIAMOND|SPACE|BROOKLYN|NEO|FLY|MANHATTAN|FUNK|EVOLUTION|SKY|GOCAR|IRON|GENIUS|POP|MINT|EPSILON|BROADWAY|JUMP|HOP|LEGEND|NEW AGE|LINE|ADVANCE|FEEL|FOLLOW|LIKE|LINK|LIVE|THINK|FREEDOM|CHICAGO|CLEVELAND|BALTIMORE-GH|IOWA|BOSTON|SEATTLE|PHOENIX|DALLAS|IN 101|MasterChef)\\b', 'MediacomTablet' => 'M-MPI10C3G|M-SP10EG|M-SP10EGP|M-SP10HXAH|M-SP7HXAH|M-SP10HXBH|M-SP8HXAH|M-SP8MXA', 'MiTablet' => '\\bMI PAD\\b|\\bHM NOTE 1W\\b', 'NibiruTablet' => 'Nibiru M1|Nibiru Jupiter One', 'NexoTablet' => 'NEXO NOVA|NEXO 10|NEXO AVIO|NEXO FREE|NEXO GO|NEXO EVO|NEXO 3G|NEXO SMART|NEXO KIDDO|NEXO MOBI', 'LeaderTablet' => 'TBLT10Q|TBLT10I|TBL-10WDKB|TBL-10WDKBO2013|TBL-W230V2|TBL-W450|TBL-W500|SV572|TBLT7I|TBA-AC7-8G|TBLT79|TBL-8W16|TBL-10W32|TBL-10WKB|TBL-W100', 'UbislateTablet' => 'UbiSlate[\\s]?7C', 'PocketBookTablet' => 'Pocketbook', 'KocasoTablet' => '\\b(TB-1207)\\b', 'HisenseTablet' => '\\b(F5281|E2371)\\b', 'Hudl' => 'Hudl HT7S3|Hudl 2', 'TelstraTablet' => 'T-Hub2', 'GenericTablet' => 'Android.*\\b97D\\b|Tablet(?!.*PC)|BNTV250A|MID-WCDMA|LogicPD Zoom2|\\bA7EB\\b|CatNova8|A1_07|CT704|CT1002|\\bM721\\b|rk30sdk|\\bEVOTAB\\b|M758A|ET904|ALUMIUM10|Smartfren Tab|Endeavour 1010|Tablet-PC-4|Tagi Tab|\\bM6pro\\b|CT1020W|arc 10HD|\\bTP750\\b|\\bQTAQZ3\\b|WVT101|TM1088|KT107'];
	/**
     * List of mobile Operating Systems.
     *
     * @var array
     */
	static protected $operatingSystems = ['AndroidOS' => 'Android', 'BlackBerryOS' => 'blackberry|\\bBB10\\b|rim tablet os', 'PalmOS' => 'PalmOS|avantgo|blazer|elaine|hiptop|palm|plucker|xiino', 'SymbianOS' => 'Symbian|SymbOS|Series60|Series40|SYB-[0-9]+|\\bS60\\b', 'WindowsMobileOS' => 'Windows CE.*(PPC|Smartphone|Mobile|[0-9]{3}x[0-9]{3})|Windows Mobile|Windows Phone [0-9.]+|WCE;', 'WindowsPhoneOS' => 'Windows Phone 10.0|Windows Phone 8.1|Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7|Windows NT 6.[23]; ARM;', 'iOS' => '\\biPhone.*Mobile|\\biPod|AppleCoreMedia', 'MeeGoOS' => 'MeeGo', 'MaemoOS' => 'Maemo', 'JavaOS' => 'J2ME/|\\bMIDP\\b|\\bCLDC\\b', 'webOS' => 'webOS|hpwOS', 'badaOS' => '\\bBada\\b', 'BREWOS' => 'BREW'];
	/**
     * List of mobile User Agents.
     *
     * IMPORTANT: This is a list of only mobile browsers.
     * Mobile Detect 2.x supports only mobile browsers,
     * it was never designed to detect all browsers.
     * The change will come in 2017 in the 3.x release for PHP7.
     *
     * @var array
     */
	static protected $browsers = ['Chrome' => '\\bCrMo\\b|CriOS|Android.*Chrome/[.0-9]* (Mobile)?', 'Dolfin' => '\\bDolfin\\b', 'Opera' => 'Opera.*Mini|Opera.*Mobi|Android.*Opera|Mobile.*OPR/[0-9.]+$|Coast/[0-9.]+', 'Skyfire' => 'Skyfire', 'Edge' => 'Mobile Safari/[.0-9]* Edge', 'IE' => 'IEMobile|MSIEMobile', 'Firefox' => 'fennec|firefox.*maemo|(Mobile|Tablet).*Firefox|Firefox.*Mobile|FxiOS', 'Bolt' => 'bolt', 'TeaShark' => 'teashark', 'Blazer' => 'Blazer', 'Safari' => 'Version.*Mobile.*Safari|Safari.*Mobile|MobileSafari', 'WeChat' => '\\bMicroMessenger\\b', 'UCBrowser' => 'UC.*Browser|UCWEB', 'baiduboxapp' => 'baiduboxapp', 'baidubrowser' => 'baidubrowser', 'DiigoBrowser' => 'DiigoBrowser', 'Mercury' => '\\bMercury\\b', 'ObigoBrowser' => 'Obigo', 'NetFront' => 'NF-Browser', 'GenericBrowser' => 'NokiaBrowser|OviBrowser|OneBrowser|TwonkyBeamBrowser|SEMC.*Browser|FlyFlow|Minimo|NetFront|Novarra-Vision|MQQBrowser|MicroMessenger', 'PaleMoon' => 'Android.*PaleMoon|Mobile.*PaleMoon'];
	/**
     * Utilities.
     *
     * @var array
     */
	static protected $utilities = ['Bot' => 'Googlebot|facebookexternalhit|Google-AMPHTML|s~amp-validator|AdsBot-Google|Google Keyword Suggestion|Facebot|YandexBot|YandexMobileBot|bingbot|ia_archiver|AhrefsBot|Ezooms|GSLFbot|WBSearchBot|Twitterbot|TweetmemeBot|Twikle|PaperLiBot|Wotbox|UnwindFetchor|Exabot|MJ12bot|YandexImages|TurnitinBot|Pingdom|contentkingapp', 'MobileBot' => 'Googlebot-Mobile|AdsBot-Google-Mobile|YahooSeeker/M1A1-R2D2', 'DesktopMode' => 'WPDesktop', 'TV' => 'SonyDTV|HbbTV', 'WebKit' => '(webkit)[ /]([\\w.]+)', 'Console' => '\\b(Nintendo|Nintendo WiiU|Nintendo 3DS|Nintendo Switch|PLAYSTATION|Xbox)\\b', 'Watch' => 'SM-V700'];
	/**
     * All possible HTTP headers that represent the
     * User-Agent string.
     *
     * @var array
     */
	static protected $uaHttpHeaders = ['HTTP_USER_AGENT', 'HTTP_X_OPERAMINI_PHONE_UA', 'HTTP_X_DEVICE_USER_AGENT', 'HTTP_X_ORIGINAL_USER_AGENT', 'HTTP_X_SKYFIRE_PHONE', 'HTTP_X_BOLT_PHONE_UA', 'HTTP_DEVICE_STOCK_UA', 'HTTP_X_UCBROWSER_DEVICE_UA'];
	/**
     * The individual segments that could exist in a User-Agent string. VER refers to the regular
     * expression defined in the constant self::VER.
     *
     * @var array
     */
	static protected $properties = [
		'Mobile'           => 'Mobile/[VER]',
		'Build'            => 'Build/[VER]',
		'Version'          => 'Version/[VER]',
		'VendorID'         => 'VendorID/[VER]',
		'iPhone'           => 'iPhone.*CPU[a-z ]+[VER]',
		'iPod'             => 'iPod.*CPU[a-z ]+[VER]',
		'Kindle'           => 'Kindle/[VER]',
		'Chrome'           => ['Chrome/[VER]', 'CriOS/[VER]', 'CrMo/[VER]'],
		'Coast'            => ['Coast/[VER]'],
		'Dolfin'           => 'Dolfin/[VER]',
		'Firefox'          => ['Firefox/[VER]', 'FxiOS/[VER]'],
		'Fennec'           => 'Fennec/[VER]',
		'Edge'             => 'Edge/[VER]',
		'IE'               => ['IEMobile/[VER];', 'IEMobile [VER]', 'MSIE [VER];', 'Trident/[0-9.]+;.*rv:[VER]'],
		'NetFront'         => 'NetFront/[VER]',
		'NokiaBrowser'     => 'NokiaBrowser/[VER]',
		'Opera'            => [' OPR/[VER]', 'Opera Mini/[VER]', 'Version/[VER]'],
		'Opera Mini'       => 'Opera Mini/[VER]',
		'Opera Mobi'       => 'Version/[VER]',
		'UCBrowser'        => ['UCWEB[VER]', 'UC.*Browser/[VER]'],
		'MQQBrowser'       => 'MQQBrowser/[VER]',
		'MicroMessenger'   => 'MicroMessenger/[VER]',
		'baiduboxapp'      => 'baiduboxapp/[VER]',
		'baidubrowser'     => 'baidubrowser/[VER]',
		'SamsungBrowser'   => 'SamsungBrowser/[VER]',
		'Iron'             => 'Iron/[VER]',
		'Safari'           => ['Version/[VER]', 'Safari/[VER]'],
		'Skyfire'          => 'Skyfire/[VER]',
		'Tizen'            => 'Tizen/[VER]',
		'Webkit'           => 'webkit[ /][VER]',
		'PaleMoon'         => 'PaleMoon/[VER]',
		'Gecko'            => 'Gecko/[VER]',
		'Trident'          => 'Trident/[VER]',
		'Presto'           => 'Presto/[VER]',
		'Goanna'           => 'Goanna/[VER]',
		'iOS'              => ' \\bi?OS\\b [VER][ ;]{1}',
		'Android'          => 'Android [VER]',
		'BlackBerry'       => ['BlackBerry[\\w]+/[VER]', 'BlackBerry.*Version/[VER]', 'Version/[VER]'],
		'BREW'             => 'BREW [VER]',
		'Java'             => 'Java/[VER]',
		'Windows Phone OS' => ['Windows Phone OS [VER]', 'Windows Phone [VER]'],
		'Windows Phone'    => 'Windows Phone [VER]',
		'Windows CE'       => 'Windows CE/[VER]',
		'Windows NT'       => 'Windows NT [VER]',
		'Symbian'          => ['SymbianOS/[VER]', 'Symbian/[VER]'],
		'webOS'            => ['webOS/[VER]', 'hpwOS/[VER];']
	];

	/**
     * Construct an instance of this class.
     *
     * @param array  $headers   Specify the headers as injection. Should be PHP _SERVER flavored.
     *                          If left empty, will use the global _SERVER['HTTP_*'] vars instead.
     * @param string $userAgent Inject the User-Agent header. If null, will use HTTP_USER_AGENT
     *                          from the $headers array instead.
     */
	public function __construct(?array $headers, $userAgent)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   680  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   680  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2   684  INIT_METHOD_CALL/112      ?0        ?4375549             2:'setHttpHeaders'  	;1
		3   684  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   684  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		5   685  INIT_METHOD_CALL/112      ?0        ?4375549             4:'setUserAgent'    	;1
		6   685  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7   685  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		8   686  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Get the current script version.
     * This is useful for the demo.php file,
     * so people can check on what version they are testing
     * for mobile devices.
     *
     * @return string The version number in semantic version format.
     */
	static public function getScriptVersion()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   698  RETURN/62                 ?0        0:'2.8.34'           ?0                  	;0
		1   699  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Set the HTTP Headers. Must be PHP-flavored. This method will reset existing headers.
     *
     * @param array $httpHeaders The headers to set. If null, then using PHP's _SERVER to extract
     *                           the headers. The default null is left for backwards compatibility.
     */
	public function setHttpHeaders($httpHeaders)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   707  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   710  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_array'        	;1
		2   710  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   710  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		4   710  BOOL_NOT/13               #4=       $3                   ?0                  	;0
		5   710  JMPNZ_EX/47               #4=       #4                   ?11                 	;0	>>11
		6   710  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   710  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		8   710  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		9   710  BOOL_NOT/13               #6=       $5                   ?0                  	;0
		10  710  BOOL/52                   #4=       #6                   ?0                  	;0
		11  710  JMPZ/43                   ?0        #4                   ?14                 	;0	>>14	<<5
		12  711  FETCH_R/80                $7=       5:'_SERVER'          ?0                  	;0
		13  711  ASSIGN/38                 ?5        16?0                 $7                  	;0
		14  715  ASSIGN_OBJ/136            ?6        ?3                   6:'httpHeaders'     	;0	<<11
		15  715  OP_DATA/137               ?0        7:array (
)          ?0                  	;0
		16  719  FE_RESET_R/77             $10=      16?0                 ?30                 	;0
		17  719  FE_FETCH_R/78             #11=      $10                  16?1                	;30	>>30	<<29
		18  719  ASSIGN/38                 ?9        16?2                 #11                 	;0
		19  720  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'substr'          	;3
		20  720  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		21  720  SEND_VAL_EX/116           ?96       10:0                 ?2                  	;0
		22  720  SEND_VAL_EX/116           ?112      11:5                 ?3                  	;0
		23  720  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		24  720  IS_IDENTICAL/15           #14=      $13                  12:'HTTP_'          	;0
		25  720  JMPZ/43                   ?0        #14                  ?29                 	;0	>>29
		26  721  FETCH_OBJ_W/85            $15=      ?2670193504          13:'httpHeaders'    	;0
		27  721  ASSIGN_DIM/147            ?13       $15                  16?2                	;0
		28  721  OP_DATA/137               ?0        16?1                 ?0                  	;0
		29  721  JMP/42                    ?0        ?17                  ?0                  	;0	>>17	<<25
		30  721  FE_FREE/127               ?0        $10                  ?0                  	;0	<<16
		31  726  INIT_METHOD_CALL/112      ?0        ?2670194176          14:'setCfHeaders'   	;1
		32  726  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		33  726  DO_FCALL/60               ?14       ?0                   ?0                  	;0
		34  727  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Retrieves the HTTP headers.
     *
     * @return array
     */
	public function getHttpHeaders()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   736  FETCH_OBJ_R/82            $0=       ?5126                0:'httpHeaders'     	;0
		1   736  RETURN/62                 ?0        $0                   ?0                  	;0
		2   737  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Retrieves a particular header. If it doesn't exist, no exception/error is caused.
     * Simply null is returned.
     *
     * @param string $header The name of the header to retrieve. Can be HTTP compliant such as
     *                       "User-Agent" or "X-Device-User-Agent" or can be php-esque with the
     *                       all-caps, HTTP_ prefixed, underscore seperated awesomeness.
     *
     * @return string|null The value of the header.
     */
	public function getHttpHeader($header)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   749  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   752  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strpos'          	;2
		2   752  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   752  SEND_VAL_EX/116           ?96       2:'_'                ?2                  	;0
		4   752  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5   752  IS_IDENTICAL/15           #3=       $2                   3:false             	;0
		6   752  JMPZ/43                   ?0        #3                   ?17                 	;0	>>17
		7   753  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
		8   753  SEND_VAL_EX/116           ?80       6:'-'                ?1                  	;0
		9   753  SEND_VAL_EX/116           ?96       7:'_'                ?2                  	;0
		10  753  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		11  753  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		12  753  ASSIGN/38                 ?3        16?0                 $4                  	;0
		13  754  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'strtoupper'      	;1
		14  754  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		15  754  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		16  754  ASSIGN/38                 ?5        16?0                 $6                  	;0
		17  758  CONCAT/8                  #8=       10:'HTTP_'           16?0                	;0	<<6
		18  758  ASSIGN/38                 ?7        16?1                 #8                  	;0
		19  761  FETCH_OBJ_IS/91           $10=      ?4422077             11:'httpHeaders'    	;0
		20  761  ISSET_ISEMPTY_DIM_OBJ/115 #11=      $10                  16?0                	;33554432
		21  761  JMPZ/43                   ?0        #11                  ?26                 	;0	>>26
		22  762  FETCH_OBJ_R/82            $12=      ?4583821             12:'httpHeaders'    	;0
		23  762  FETCH_DIM_R/81            $13=      $12                  16?0                	;0
		24  762  RETURN/62                 ?0        $13                  ?0                  	;0
		25  762  JMP/42                    ?0        ?32                  ?0                  	;0	>>32
		26  763  FETCH_OBJ_IS/91           $14=      ?4429316             13:'httpHeaders'    	;0	<<21
		27  763  ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  16?1                	;33554432
		28  763  JMPZ/43                   ?0        #15                  ?32                 	;0	>>32
		29  764  FETCH_OBJ_R/82            $16=      ?4583821             14:'httpHeaders'    	;0
		30  764  FETCH_DIM_R/81            $17=      $16                  16?1                	;0
		31  764  RETURN/62                 ?0        $17                  ?0                  	;0
		32  767  RETURN/62                 ?0        15:NULL              ?0                  	;0	<<25,28
		33  768  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	public function getMobileHeaders()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   772  FETCH_STATIC_PROP_R/173   $0=       0:'mobileHeaders'    ?513                	;0
		1   772  RETURN/62                 ?0        $0                   ?0                  	;0
		2   773  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Get all possible HTTP headers that
     * can contain the User-Agent string.
     *
     * @return array List of HTTP headers.
     */
	public function getUaHttpHeaders()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   783  FETCH_STATIC_PROP_R/173   $0=       0:'uaHttpHeaders'    ?513                	;0
		1   783  RETURN/62                 ?0        $0                   ?0                  	;0
		2   784  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Set CloudFront headers
     * http://docs.aws.amazon.com/AmazonCloudFront/latest/DeveloperGuide/header-caching.html#header-caching-web-device
     *
     * @param array $cfHeaders List of HTTP headers
     *
     * @return  boolean If there were CloudFront headers to be set
     */
	public function setCfHeaders($cfHeaders)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   795  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   797  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_array'        	;1
		2   797  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   797  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		4   797  BOOL_NOT/13               #5=       $4                   ?0                  	;0
		5   797  JMPNZ_EX/47               #5=       #5                   ?11                 	;0	>>11
		6   797  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   797  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		8   797  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		9   797  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		10  797  BOOL/52                   #5=       #7                   ?0                  	;0
		11  797  JMPZ/43                   ?0        #5                   ?14                 	;0	>>14	<<5
		12  798  FETCH_R/80                $8=       5:'_SERVER'          ?0                  	;0
		13  798  ASSIGN/38                 ?5        16?0                 $8                  	;0
		14  802  ASSIGN_OBJ/136            ?6        ?3                   6:'cloudfrontHeaders'	;0	<<11
		15  802  OP_DATA/137               ?0        7:array (
)          ?0                  	;0
		16  806  ASSIGN/38                 ?7        16?1                 8:false             	;0
		17  807  FE_RESET_R/77             $12=      16?0                 ?38                 	;0
		18  807  FE_FETCH_R/78             #13=      $12                  16?2                	;38	>>38	<<37
		19  807  ASSIGN/38                 ?10       16?3                 #13                 	;0
		20  808  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'substr'          	;3
		21  808  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'strtolower'     	;1
		22  808  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		23  808  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		24  808  SEND_VAR_NO_REF_EX/50     ?80       $15                  ?1                  	;0
		25  808  SEND_VAL_EX/116           ?96       13:0                 ?2                  	;0
		26  808  SEND_VAL_EX/116           ?112      14:16                ?3                  	;0
		27  808  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		28  808  IS_IDENTICAL/15           #17=      $16                  15:'http_cloudfront_'	;0
		29  808  JMPZ/43                   ?0        #17                  ?37                 	;0	>>37
		30  809  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'strtoupper'     	;1
		31  809  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		32  809  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		33  809  FETCH_OBJ_W/85            $18=      ?2670193504          16:'cloudfrontHeaders'	;0
		34  809  ASSIGN_DIM/147            ?16       $18                  $19                 	;0
		35  809  OP_DATA/137               ?0        16?2                 ?0                  	;0
		36  810  ASSIGN/38                 ?17       16?1                 19:true             	;0
		37  810  JMP/42                    ?0        ?18                  ?0                  	;0	>>18	<<29
		38  810  FE_FREE/127               ?0        $12                  ?0                  	;0	<<17
		39  814  RETURN/62                 ?0        16?1                 ?0                  	;0
		40  815  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Retrieves the cloudfront headers.
     *
     * @return array
     */
	public function getCfHeaders()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   824  FETCH_OBJ_R/82            $0=       ?1                   0:'cloudfrontHeaders'	;0
		1   824  RETURN/62                 ?0        $0                   ?0                  	;0
		2   825  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * @param string $userAgent
     * @return string
     */
	private function prepareUserAgent($userAgent)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   831  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   832  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'trim'            	;1
		2   832  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   832  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   832  ASSIGN/38                 ?1        16?0                 $1                  	;0
		5   833  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'substr'          	;3
		6   833  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7   833  SEND_VAL_EX/116           ?96       4:0                  ?2                  	;0
		8   833  SEND_VAL_EX/116           ?112      5:500                ?3                  	;0
		9   833  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		10  833  ASSIGN/38                 ?3        16?0                 $3                  	;0
		11  834  RETURN/62                 ?0        16?0                 ?0                  	;0
		12  835  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Set the User-Agent to be used.
     *
     * @param string $userAgent The user agent string to set.
     *
     * @return string|null
     */
	public function setUserAgent($userAgent)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   844  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   847  ASSIGN_OBJ/136            ?0        ?1668918440          1:'cache'           	;0
		2   847  OP_DATA/137               ?0        2:array (
)          ?0                  	;0
		3   849  ISSET_ISEMPTY_CV/197      #3=       16?0                 ?0                  	;16777216
		4   849  IS_IDENTICAL/15           #4=       3:false              #3                  	;0
		5   849  JMPZ/43                   ?0        #4                   ?13                 	;0	>>13
		6   850  INIT_METHOD_CALL/112      ?0        ?1668852880          5:'prepareUserAgent'	;1
		7   850  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		8   850  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   850  ASSIGN_OBJ/136            $5=       ?1668856704          4:'userAgent'       	;0
		10  850  OP_DATA/137               ?0        $6                   ?0                  	;0
		11  850  RETURN/62                 ?0        $5                   ?0                  	;0
		12  850  JMP/42                    ?0        ?40                  ?0                  	;0	>>40
		13  852  ASSIGN_OBJ/136            ?5        ?4                   7:'userAgent'       	;0	<<5
		14  852  OP_DATA/137               ?0        8:NULL               ?0                  	;0
		15  853  INIT_METHOD_CALL/112      ?0        ?4375657             9:'getUaHttpHeaders'	;0
		16  853  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		17  853  FE_RESET_R/77             $9=       $8                   ?29                 	;0
		18  853  FE_FETCH_R/78             ?0        $9                   16?1                	;29	>>29	<<28
		19  854  FETCH_OBJ_IS/91           $10=      ?1                   11:'httpHeaders'    	;0
		20  854  ISSET_ISEMPTY_DIM_OBJ/115 #11=      $10                  16?1                	;16777216
		21  854  IS_IDENTICAL/15           #12=      12:false             #11                 	;0
		22  854  JMPZ/43                   ?0        #12                  ?28                 	;0	>>28
		23  855  FETCH_OBJ_R/82            $14=      ?5126                14:'httpHeaders'    	;0
		24  855  FETCH_DIM_R/81            $15=      $14                  16?1                	;0
		25  855  CONCAT/8                  #16=      $15                  15:' '              	;0
		26  855  ASSIGN_CONCAT/30          ?11       ?2670193232          13:'userAgent'      	;136
		27  855  OP_DATA/137               ?0        #16                  ?0                  	;0
		28  855  JMP/42                    ?0        ?18                  ?0                  	;0	>>18	<<22
		29  855  FE_FREE/127               ?0        $9                   ?0                  	;0	<<17
		30  859  ISSET_ISEMPTY_PROP_OBJ/148 #17=      ?11                  16:'userAgent'      	;16777216
		31  859  BOOL_NOT/13               #18=      #17                  ?0                  	;0
		32  859  JMPZ/43                   ?0        #18                  ?40                 	;0	>>40
		33  860  INIT_METHOD_CALL/112      ?0        ?4534362             18:'prepareUserAgent'	;1
		34  860  FETCH_OBJ_R/82            $20=      ?4633841             20:'userAgent'      	;0
		35  860  SEND_VAR/117              ?80       $20                  ?1                  	;0
		36  860  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		37  860  ASSIGN_OBJ/136            $19=      ?1669154808          17:'userAgent'      	;0
		38  860  OP_DATA/137               ?0        $21                  ?0                  	;0
		39  860  RETURN/62                 ?0        $19                  ?0                  	;0
		40  864  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'count'          	;1	<<12,32
		41  864  INIT_METHOD_CALL/112      ?0        ?19                  23:'getCfHeaders'   	;0
		42  864  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		43  864  SEND_VAR_NO_REF_EX/50     ?80       $22                  ?1                  	;0
		44  864  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		45  864  IS_SMALLER/19             #24=      25:0                 $23                 	;0
		46  864  JMPZ/43                   ?0        #24                  ?50                 	;0	>>50
		47  865  ASSIGN_OBJ/136            $25=      ?0                   26:'userAgent'      	;0
		48  865  OP_DATA/137               ?0        27:'Amazon CloudFront' ?0                  	;0
		49  865  RETURN/62                 ?0        $25                  ?0                  	;0
		50  867  ASSIGN_OBJ/136            $26=      ?4461655             28:'userAgent'      	;0	<<46
		51  867  OP_DATA/137               ?0        29:NULL              ?0                  	;0
		52  867  RETURN/62                 ?0        $26                  ?0                  	;0
		53  868  NOP/0                     ?0        30:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Retrieve the User-Agent.
     *
     * @return string|null The user agent if it's set.
     */
	public function getUserAgent()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   877  FETCH_OBJ_R/82            $0=       ?4435763             0:'userAgent'       	;0
		1   877  RETURN/62                 ?0        $0                   ?0                  	;0
		2   878  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Set the detection type. Must be one of self::DETECTION_TYPE_MOBILE or
     * self::DETECTION_TYPE_EXTENDED. Otherwise, nothing is set.
     *
     * @deprecated since version 2.6.9
     *
     * @param string $type The type. Must be a self::DETECTION_TYPE_* constant. The default
     *                     parameter is null which will default to self::DETECTION_TYPE_MOBILE.
     */
	public function setDetectionType($type)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   889  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   891  IS_IDENTICAL/15           #1=       16?0                 1:NULL              	;0
		2   891  JMPZ/43                   ?0        #1                   ?4                  	;0	>>4
		3   892  ASSIGN/38                 ?1        16?0                 2:'mobile'          	;0
		4   895  IS_NOT_IDENTICAL/16       #3=       16?0                 3:'mobile'          	;0	<<2
		5   895  JMPZ_EX/46                #3=       #3                   ?8                  	;0	>>8
		6   895  IS_NOT_IDENTICAL/16       #4=       16?0                 4:'extended'        	;0
		7   895  BOOL/52                   #3=       #4                   ?0                  	;0
		8   895  JMPZ/43                   ?0        #3                   ?10                 	;0	>>10	<<5
		9   896  RETURN/62                 ?0        5:NULL               ?0                  	;0
		10  899  ASSIGN_OBJ/136            ?4        ?8                   6:'detectionType'   	;0	<<8
		11  899  OP_DATA/137               ?0        16?0                 ?0                  	;0
		12  900  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function getMatchingRegex()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   904  FETCH_OBJ_R/82            $0=       ?0                   0:'matchingRegex'   	;0
		1   904  RETURN/62                 ?0        $0                   ?0                  	;0
		2   905  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getMatchesArray()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   909  FETCH_OBJ_R/82            $0=       ?0                   0:'matchesArray'    	;0
		1   909  RETURN/62                 ?0        $0                   ?0                  	;0
		2   910  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Retrieve the list of known phone devices.
     *
     * @return array List of phone devices.
     */
	static public function getPhoneDevices()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   919  FETCH_STATIC_PROP_R/173   $0=       0:'phoneDevices'     ?513                	;0
		1   919  RETURN/62                 ?0        $0                   ?0                  	;0
		2   920  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Retrieve the list of known tablet devices.
     *
     * @return array List of tablet devices.
     */
	static public function getTabletDevices()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   929  FETCH_STATIC_PROP_R/173   $0=       0:'tabletDevices'    ?513                	;0
		1   929  RETURN/62                 ?0        $0                   ?0                  	;0
		2   930  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Alias for getBrowsers() method.
     *
     * @return array List of user agents.
     */
	static public function getUserAgents()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   939  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'getBrowsers'     	;0
		1   939  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		2   939  RETURN/62                 ?0        $0                   ?0                  	;0
		3   940  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Retrieve the list of known browsers. Specifically, the user agents.
     *
     * @return array List of browsers / user agents.
     */
	static public function getBrowsers()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   949  FETCH_STATIC_PROP_R/173   $0=       0:'browsers'         ?513                	;0
		1   949  RETURN/62                 ?0        $0                   ?0                  	;0
		2   950  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Retrieve the list of known utilities.
     *
     * @return array List of utilities.
     */
	static public function getUtilities()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   959  FETCH_STATIC_PROP_R/173   $0=       0:'utilities'        ?513                	;0
		1   959  RETURN/62                 ?0        $0                   ?0                  	;0
		2   960  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Method gets the mobile detection rules. This method is used for the magic methods $detect->is*().
     *
     * @deprecated since version 2.6.9
     *
     * @return array All the rules (but not extended).
     */
	static public function getMobileDetectionRules()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   971  BIND_STATIC/183           ?0        16?0                 0:'rules'           	;1
		1   973  BOOL_NOT/13               #1=       16?0                 ?0                  	;0
		2   973  JMPZ/43                   ?0        #1                   ?14                 	;0	>>14
		3   974  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'array_merge'     	;4
		4   975  FETCH_STATIC_PROP_FUNC_ARG/177 $2=       3:'phoneDevices'     ?513                	;1
		5   975  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		6   976  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       4:'tabletDevices'    ?513                	;2
		7   976  SEND_VAR_EX/66            ?96       $3                   ?2                  	;0
		8   977  FETCH_STATIC_PROP_FUNC_ARG/177 $4=       5:'operatingSystems' ?513                	;3
		9   977  SEND_VAR_EX/66            ?112      $4                   ?3                  	;0
		10  978  FETCH_STATIC_PROP_FUNC_ARG/177 $5=       6:'browsers'         ?513                	;4
		11  978  SEND_VAR_EX/66            ?128      $5                   ?4                  	;0
		12  978  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		13  978  ASSIGN/38                 ?6        16?0                 $6                  	;0
		14  982  RETURN/62                 ?0        16?0                 ?0                  	;0	<<2
		15  984  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Method gets the mobile detection rules + utilities.
     * The reason this is separate is because utilities rules
     * don't necessary imply mobile. This method is used inside
     * the new $detect->is('stuff') method.
     *
     * @deprecated since version 2.6.9
     *
     * @return array All the rules + extended.
     */
	public function getMobileDetectionRulesExtended()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    998   BIND_STATIC/183           ?0        16?0                 0:'rules'           	;1
		1    1000  BOOL_NOT/13               #1=       16?0                 ?0                  	;0
		2    1000  JMPZ/43                   ?0        #1                   ?16                 	;0	>>16
		3    1002  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'array_merge'     	;5
		4    1003  FETCH_STATIC_PROP_FUNC_ARG/177 $2=       3:'phoneDevices'     ?513                	;1
		5    1003  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		6    1004  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       4:'tabletDevices'    ?513                	;2
		7    1004  SEND_VAR_EX/66            ?96       $3                   ?2                  	;0
		8    1005  FETCH_STATIC_PROP_FUNC_ARG/177 $4=       5:'operatingSystems' ?513                	;3
		9    1005  SEND_VAR_EX/66            ?112      $4                   ?3                  	;0
		10   1006  FETCH_STATIC_PROP_FUNC_ARG/177 $5=       6:'browsers'         ?513                	;4
		11   1006  SEND_VAR_EX/66            ?128      $5                   ?4                  	;0
		12   1007  FETCH_STATIC_PROP_FUNC_ARG/177 $6=       7:'utilities'        ?513                	;5
		13   1007  SEND_VAR_EX/66            ?144      $6                   ?5                  	;0
		14   1007  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		15   1007  ASSIGN/38                 ?7        16?0                 $7                  	;0
		16   1011  RETURN/62                 ?0        16?0                 ?0                  	;0	<<2
		17   1012  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Retrieve the current set of rules.
     *
     * @deprecated since version 2.6.9
     *
     * @return array
     */
	public function getRules()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1023  FETCH_OBJ_R/82            $0=       ?2670193648          0:'detectionType'   	;0
		1    1023  IS_EQUAL/17               #1=       $0                   1:'extended'        	;0
		2    1023  JMPZ/43                   ?0        #1                   ?7                  	;0	>>7
		3    1024  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 2:'getMobileDetectionRulesExtended'	;0
		4    1024  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5    1024  RETURN/62                 ?0        $2                   ?0                  	;0
		6    1024  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		7    1026  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 4:'getMobileDetectionRules'	;0	<<2
		8    1026  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		9    1026  RETURN/62                 ?0        $3                   ?0                  	;0
		10   1028  NOP/0                     ?0        6:NULL               ?0                  	;4294967295	<<6
		*/
	}

	/**
     * Retrieve the list of mobile operating systems.
     *
     * @return array The list of mobile operating systems.
     */
	static public function getOperatingSystems()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1037  FETCH_STATIC_PROP_R/173   $0=       0:'operatingSystems' ?513                	;0
		1    1037  RETURN/62                 ?0        $0                   ?0                  	;0
		2    1038  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Check the HTTP headers for signs of mobile.
     * This is the fastest mobile check possible; it's used
     * inside isMobile() method.
     *
     * @return bool
     */
	public function checkHttpHeadersForMobile()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1050  INIT_METHOD_CALL/112      ?0        ?0                   0:'getMobileHeaders'	;0
		1    1050  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		2    1050  FE_RESET_R/77             $4=       $3                   ?35                 	;0
		3    1050  FE_FETCH_R/78             #5=       $4                   16?0                	;35	>>35	<<34
		4    1050  ASSIGN/38                 ?3        16?1                 #5                  	;0
		5    1051  FETCH_OBJ_IS/91           $7=       ?4397406             2:'httpHeaders'     	;0
		6    1051  ISSET_ISEMPTY_DIM_OBJ/115 #8=       $7                   16?1                	;33554432
		7    1051  JMPZ/43                   ?0        #8                   ?34                 	;0	>>34
		8    1052  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'is_array'        	;1
		9    1052  FETCH_DIM_FUNC_ARG/93     $9=       16?0                 5:'matches'         	;1
		10   1052  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
		11   1052  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		12   1052  JMPZ/43                   ?0        $10                  ?32                 	;0	>>32
		13   1053  FETCH_DIM_R/81            $11=      16?0                 6:'matches'         	;0
		14   1053  FE_RESET_R/77             $12=      $11                  ?28                 	;0
		15   1053  FE_FETCH_R/78             ?0        $12                  16?2                	;28	>>28	<<27
		16   1054  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'strpos'          	;2
		17   1054  FETCH_OBJ_FUNC_ARG/94     $13=      ?0                   9:'httpHeaders'     	;1
		18   1054  FETCH_DIM_FUNC_ARG/93     $14=      $13                  16?1                	;1
		19   1054  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		20   1054  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		21   1054  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		22   1054  IS_NOT_IDENTICAL/16       #16=      $15                  10:false            	;0
		23   1054  JMPZ/43                   ?0        #16                  ?27                 	;0	>>27
		24   1055  FE_FREE/127               ?0        $12                  ?1                  	;1
		25   1055  FE_FREE/127               ?0        $4                   ?0                  	;1
		26   1055  RETURN/62                 ?0        11:true              ?0                  	;0
		27   1055  JMP/42                    ?0        ?15                  ?0                  	;0	>>15	<<23
		28   1055  FE_FREE/127               ?0        $12                  ?0                  	;0	<<14
		29   1059  FE_FREE/127               ?0        $4                   ?0                  	;1
		30   1059  RETURN/62                 ?0        12:false             ?0                  	;0
		31   1059  JMP/42                    ?0        ?34                  ?0                  	;0	>>34
		32   1061  FE_FREE/127               ?0        $4                   ?0                  	;1	<<12
		33   1061  RETURN/62                 ?0        13:true              ?0                  	;0
		34   1061  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<7,31
		35   1061  FE_FREE/127               ?0        $4                   ?0                  	;0	<<2
		36   1066  RETURN/62                 ?0        14:false             ?0                  	;0
		37   1068  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Magic overloading method.
     *
     * @method boolean is[...]()
     * @param  string                 $name
     * @param  array                  $arguments
     * @return mixed
     * @throws BadMethodCallException when the method doesn't exist and doesn't start with 'is'
     */
	public function __call($name, $arguments)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1079  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1079  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    1082  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'substr'          	;3
		3    1082  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    1082  SEND_VAL_EX/116           ?96       2:0                  ?2                  	;0
		5    1082  SEND_VAL_EX/116           ?112      3:2                  ?3                  	;0
		6    1082  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		7    1082  IS_NOT_IDENTICAL/16       #4=       $3                   4:'is'              	;0
		8    1082  JMPZ/43                   ?0        #4                   ?15                 	;0	>>15
		9    1083  NEW/68                    $5=       5:'BadMethodCallException' ?160                	;1
		10   1083  NOP/0                     ?0        ?0                   ?0                  	;0
		11   1083  FAST_CONCAT/53            #6=       7:'No such method exists: ' 16?0                	;0
		12   1083  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
		13   1083  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		14   1083  THROW/108                 ?0        $5                   ?0                  	;0
		15   1086  INIT_METHOD_CALL/112      ?0        ?4411909             8:'setDetectionType'	;1	<<8
		16   1086  SEND_VAL_EX/116           ?80       10:'mobile'          ?1                  	;0
		17   1086  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		18   1088  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'substr'         	;2
		19   1088  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		20   1088  SEND_VAL_EX/116           ?96       13:2                 ?2                  	;0
		21   1088  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		22   1088  ASSIGN/38                 ?7        16?2                 $9                  	;0
		23   1090  INIT_METHOD_CALL/112      ?0        ?2670194080          14:'matchUAAgainstKey'	;1
		24   1090  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		25   1090  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		26   1090  RETURN/62                 ?0        $11                  ?0                  	;0
		27   1091  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Find a detection rule that matches the current User-agent.
     *
     * @param  null    $userAgent deprecated
     * @return boolean
     */
	protected function matchDetectionRulesAgainstUA($userAgent)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1099  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    1102  INIT_METHOD_CALL/112      ?0        ?2670194256          1:'getRules'        	;0
		2    1102  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3    1102  FE_RESET_R/77             $3=       $2                   ?16                 	;0
		4    1102  FE_FETCH_R/78             ?0        $3                   16?1                	;16	>>16	<<15
		5    1103  ISSET_ISEMPTY_CV/197      #4=       16?1                 ?0                  	;16777216
		6    1103  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7    1104  CONT/255                  ?0        ?4                   0:1                 	;0
		8    1107  INIT_METHOD_CALL/112      ?0        ?4397406             3:'match'           	;2	<<6
		9    1107  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		10   1107  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		11   1107  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1107  JMPZ/43                   ?0        $5                   ?15                 	;0	>>15
		13   1108  FE_FREE/127               ?0        $3                   ?0                  	;1
		14   1108  RETURN/62                 ?0        5:true               ?0                  	;0
		15   1108  JMP/42                    ?0        ?4                   ?0                  	;0	>>4	<<12
		16   1108  FE_FREE/127               ?0        $3                   ?0                  	;0	<<3
		17   1112  RETURN/62                 ?0        6:false              ?0                  	;0
		18   1113  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Search for a certain key in the rules array.
     * If the key is found then try to match the corresponding
     * regex against the User-Agent.
     *
     * @param string $key
     *
     * @return boolean
     */
	protected function matchUAAgainstKey($key)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1124  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1127  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strtolower'      	;1
		2    1127  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3    1127  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4    1127  ASSIGN/38                 ?1        16?0                 $2                  	;0
		5    1128  FETCH_OBJ_IS/91           $4=       ?0                   2:'cache'           	;0
		6    1128  ISSET_ISEMPTY_DIM_OBJ/115 #5=       $4                   16?0                	;33554432
		7    1128  IS_IDENTICAL/15           #6=       3:false              #5                  	;0
		8    1128  JMPZ/43                   ?0        #6                   ?32                 	;0	>>32
		9    1131  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'array_change_key_case'	;1
		10   1131  INIT_METHOD_CALL/112      ?0        ?0                   6:'getRules'        	;0
		11   1131  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		12   1131  SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
		13   1131  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		14   1131  ASSIGN/38                 ?7        16?1                 $8                  	;0
		15   1133  ISSET_ISEMPTY_DIM_OBJ/115 #10=      16?1                 16?0                	;16777216
		16   1133  IS_IDENTICAL/15           #11=      8:false              #10                 	;0
		17   1133  JMPZ/43                   ?0        #11                  ?25                 	;0	>>25
		18   1134  INIT_METHOD_CALL/112      ?0        ?1133                10:'match'          	;1
		19   1134  FETCH_DIM_FUNC_ARG/93     $14=      16?1                 16?0                	;1
		20   1134  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		21   1134  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		22   1134  FETCH_OBJ_W/85            $12=      ?1133                9:'cache'           	;0
		23   1134  ASSIGN_DIM/147            ?11       $12                  16?0                	;0
		24   1134  OP_DATA/137               ?0        $15                  ?0                  	;0
		25   1137  FETCH_OBJ_IS/91           $16=      ?1668872648          12:'cache'          	;0	<<17
		26   1137  ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  16?0                	;33554432
		27   1137  IS_IDENTICAL/15           #18=      13:false             #17                 	;0
		28   1137  JMPZ/43                   ?0        #18                  ?32                 	;0	>>32
		29   1138  FETCH_OBJ_W/85            $19=      ?1137                14:'cache'          	;0
		30   1138  ASSIGN_DIM/147            ?18       $19                  16?0                	;0
		31   1138  OP_DATA/137               ?0        15:false             ?0                  	;0
		32   1142  FETCH_OBJ_R/82            $21=      ?1668873240          16:'cache'          	;0	<<8,28
		33   1142  FETCH_DIM_R/81            $22=      $21                  16?0                	;0
		34   1142  RETURN/62                 ?0        $22                  ?0                  	;0
		35   1143  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Check if the device is mobile.
     * Returns true if any type of mobile device detected, including special ones
     * @param  null $userAgent   deprecated
     * @param  null $httpHeaders deprecated
     * @return bool
     */
	public function isMobile($userAgent, $httpHeaders)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1152  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    1152  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2    1155  JMPZ/43                   ?0        16?1                 ?6                  	;0	>>6
		3    1156  INIT_METHOD_CALL/112      ?0        ?28                  2:'setHttpHeaders'  	;1
		4    1156  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		5    1156  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		6    1159  JMPZ/43                   ?0        16?0                 ?10                 	;0	>>10	<<2
		7    1160  INIT_METHOD_CALL/112      ?0        ?28                  4:'setUserAgent'    	;1
		8    1160  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    1160  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		10   1164  INIT_METHOD_CALL/112      ?0        ?0                   6:'getUserAgent'    	;0	<<6
		11   1164  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12   1164  IS_IDENTICAL/15           #6=       $5                   8:'Amazon CloudFront'	;0
		13   1164  JMPZ/43                   ?0        #6                   ?27                 	;0	>>27
		14   1165  INIT_METHOD_CALL/112      ?0        ?0                   9:'getCfHeaders'    	;0
		15   1165  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		16   1165  ASSIGN/38                 ?5        16?2                 $7                  	;0
		17   1166  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'array_key_exists'	;2
		18   1166  SEND_VAL_EX/116           ?80       13:'HTTP_CLOUDFRONT_IS_MOBILE_VIEWER' ?1                  	;0
		19   1166  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		20   1166  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		21   1166  JMPZ_EX/46                #10=      $9                   ?25                 	;0	>>25
		22   1166  FETCH_DIM_R/81            $11=      16?2                 14:'HTTP_CLOUDFRONT_IS_MOBILE_VIEWER'	;0
		23   1166  IS_IDENTICAL/15           #12=      $11                  15:'true'           	;0
		24   1166  BOOL/52                   #10=      #12                  ?0                  	;0
		25   1166  JMPZ/43                   ?0        #10                  ?27                 	;0	>>27	<<21
		26   1167  RETURN/62                 ?0        16:true              ?0                  	;0
		27   1171  INIT_METHOD_CALL/112      ?0        ?13                  17:'setDetectionType'	;1	<<13,25
		28   1171  SEND_VAL_EX/116           ?80       19:'mobile'          ?1                  	;0
		29   1171  DO_FCALL/60               ?10       ?0                   ?0                  	;0
		30   1173  INIT_METHOD_CALL/112      ?0        ?4443006             20:'checkHttpHeadersForMobile'	;0
		31   1173  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		32   1173  JMPZ/43                   ?0        $14                  ?35                 	;0	>>35
		33   1174  RETURN/62                 ?0        22:true              ?0                  	;0
		34   1174  JMP/42                    ?0        ?38                  ?0                  	;0	>>38
		35   1176  INIT_METHOD_CALL/112      ?0        ?1668320736          23:'matchDetectionRulesAgainstUA'	;0	<<32
		36   1176  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		37   1176  RETURN/62                 ?0        $15                  ?0                  	;0
		38   1179  NOP/0                     ?0        25:NULL              ?0                  	;4294967295	<<34
		*/
	}

	/**
     * Check if the device is a tablet.
     * Return true if any type of tablet device is detected.
     *
     * @param  string $userAgent   deprecated
     * @param  array  $httpHeaders deprecated
     * @return bool
     */
	public function isTablet($userAgent, $httpHeaders)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1189  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    1189  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2    1192  INIT_METHOD_CALL/112      ?0        ?1668876064          2:'getUserAgent'    	;0
		3    1192  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4    1192  IS_IDENTICAL/15           #5=       $4                   4:'Amazon CloudFront'	;0
		5    1192  JMPZ/43                   ?0        #5                   ?19                 	;0	>>19
		6    1193  INIT_METHOD_CALL/112      ?0        ?1668559320          5:'getCfHeaders'    	;0
		7    1193  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		8    1193  ASSIGN/38                 ?3        16?2                 $6                  	;0
		9    1194  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'array_key_exists'	;2
		10   1194  SEND_VAL_EX/116           ?80       9:'HTTP_CLOUDFRONT_IS_TABLET_VIEWER' ?1                  	;0
		11   1194  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		12   1194  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		13   1194  JMPZ_EX/46                #9=       $8                   ?17                 	;0	>>17
		14   1194  FETCH_DIM_R/81            $10=      16?2                 10:'HTTP_CLOUDFRONT_IS_TABLET_VIEWER'	;0
		15   1194  IS_IDENTICAL/15           #11=      $10                  11:'true'           	;0
		16   1194  BOOL/52                   #9=       #11                  ?0                  	;0
		17   1194  JMPZ/43                   ?0        #9                   ?19                 	;0	>>19	<<13
		18   1195  RETURN/62                 ?0        12:true              ?0                  	;0
		19   1199  INIT_METHOD_CALL/112      ?0        ?5                   13:'setDetectionType'	;1	<<5,17
		20   1199  SEND_VAL_EX/116           ?80       15:'mobile'          ?1                  	;0
		21   1199  DO_FCALL/60               ?8        ?0                   ?0                  	;0
		22   1201  FETCH_STATIC_PROP_R/173   $13=      16:'tabletDevices'   ?513                	;0
		23   1201  FE_RESET_R/77             $14=      $13                  ?33                 	;0
		24   1201  FE_FETCH_R/78             ?0        $14                  16?3                	;33	>>33	<<32
		25   1202  INIT_METHOD_CALL/112      ?0        ?1668102880          17:'match'          	;2
		26   1202  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		27   1202  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		28   1202  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		29   1202  JMPZ/43                   ?0        $15                  ?32                 	;0	>>32
		30   1203  FE_FREE/127               ?0        $14                  ?0                  	;1
		31   1203  RETURN/62                 ?0        19:true              ?0                  	;0
		32   1203  JMP/42                    ?0        ?24                  ?0                  	;0	>>24	<<29
		33   1203  FE_FREE/127               ?0        $14                  ?0                  	;0	<<23
		34   1207  RETURN/62                 ?0        20:false             ?0                  	;0
		35   1208  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * This method checks for a certain property in the
     * userAgent.
     * @todo: The httpHeaders part is not yet used.
     *
     * @param  string        $key
     * @param  string        $userAgent   deprecated
     * @param  string        $httpHeaders deprecated
     * @return bool|int|null
     */
	public function is($key, $userAgent, $httpHeaders)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1220  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1220  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2    1220  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
		3    1223  JMPZ/43                   ?0        16?2                 ?7                  	;0	>>7
		4    1224  INIT_METHOD_CALL/112      ?0        ?0                   2:'setHttpHeaders'  	;1
		5    1224  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		6    1224  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		7    1227  JMPZ/43                   ?0        16?1                 ?11                 	;0	>>11	<<3
		8    1228  INIT_METHOD_CALL/112      ?0        ?0                   4:'setUserAgent'    	;1
		9    1228  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		10   1228  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		11   1231  INIT_METHOD_CALL/112      ?0        ?7                   6:'setDetectionType'	;1	<<7
		12   1231  SEND_VAL_EX/116           ?80       8:'extended'         ?1                  	;0
		13   1231  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		14   1233  INIT_METHOD_CALL/112      ?0        ?2670194352          9:'matchUAAgainstKey'	;1
		15   1233  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		16   1233  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		17   1233  RETURN/62                 ?0        $6                   ?0                  	;0
		18   1234  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Some detection rules are relative (not standard),
     * because of the diversity of devices, vendors and
     * their conventions in representing the User-Agent or
     * the HTTP headers.
     *
     * This method will be used to check custom regexes against
     * the User-Agent string.
     *
     * @param $regex
     * @param  string $userAgent
     * @return bool
     *
     * @todo: search in the HTTP headers too.
     */
	public function match($regex, $userAgent)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1251  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1251  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2    1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'preg_match'      	;3
		3    1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'sprintf'         	;2
		4    1253  SEND_VAL_EX/116           ?80       5:'#%s#is'           ?1                  	;0
		5    1253  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		6    1253  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		7    1253  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
		8    1253  ISSET_ISEMPTY_CV/197      #5=       16?1                 ?0                  	;16777216
		9    1253  IS_IDENTICAL/15           #6=       6:false              #5                  	;0
		10   1253  JMPZ/43                   ?0        #6                   ?13                 	;0	>>13
		11   1253  QM_ASSIGN/22              #7=       16?1                 ?0                  	;0
		12   1253  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		13   1253  FETCH_OBJ_R/82            $8=       ?2670193072          7:'userAgent'       	;0	<<10
		14   1253  QM_ASSIGN/22              #7=       $8                   ?0                  	;0
		15   1253  SEND_VAL_EX/116           ?96       #7                   ?2                  	;0	<<12
		16   1253  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
		17   1253  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		18   1253  CAST/21                   #10=      $9                   ?0                  	;13
		19   1253  ASSIGN/38                 ?7        16?2                 #10                 	;0
		20   1255  JMPZ/43                   ?0        16?2                 ?25                 	;0	>>25
		21   1256  ASSIGN_OBJ/136            ?8        ?1                   8:'matchingRegex'   	;0
		22   1256  OP_DATA/137               ?0        16?0                 ?0                  	;0
		23   1257  ASSIGN_OBJ/136            ?9        ?1                   9:'matchesArray'    	;0
		24   1257  OP_DATA/137               ?0        16?3                 ?0                  	;0
		25   1260  RETURN/62                 ?0        16?2                 ?0                  	;0	<<20
		26   1261  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Get the properties array.
     *
     * @return array
     */
	static public function getProperties()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1270  FETCH_STATIC_PROP_R/173   $0=       0:'properties'       ?513                	;0
		1    1270  RETURN/62                 ?0        $0                   ?0                  	;0
		2    1271  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Prepare the version number.
     *
     * @todo Remove the error supression from str_replace() call.
     *
     * @param string $ver The string version, like "2.6.21.2152";
     *
     * @return float
     */
	public function prepareVersionNo($ver)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1282  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1284  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'str_replace'     	;3
		2    1284  SEND_VAL_EX/116           ?80       2:array (
  0 => '_',
  1 => ' ',
  2 => '/',
) ?1                  	;0
		3    1284  SEND_VAL_EX/116           ?96       3:'.'                ?2                  	;0
		4    1284  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		5    1284  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6    1284  ASSIGN/38                 ?1        16?0                 $2                  	;0
		7    1285  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'explode'         	;3
		8    1285  SEND_VAL_EX/116           ?80       6:'.'                ?1                  	;0
		9    1285  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		10   1285  SEND_VAL_EX/116           ?112      7:2                  ?3                  	;0
		11   1285  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		12   1285  ASSIGN/38                 ?3        16?1                 $4                  	;0
		13   1287  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?1                 8:1                 	;33554432
		14   1287  JMPZ/43                   ?0        #6                   ?25                 	;0	>>25
		15   1288  BEGIN_SILENCE/57          #8=       ?0                   ?0                  	;0
		16   1288  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'str_replace'    	;3
		17   1288  SEND_VAL_EX/116           ?80       12:'.'               ?1                  	;0
		18   1288  SEND_VAL_EX/116           ?96       13:''                ?2                  	;0
		19   1288  FETCH_DIM_FUNC_ARG/93     $9=       16?1                 14:1                	;3
		20   1288  SEND_VAR_EX/66            ?112      $9                   ?3                  	;0
		21   1288  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		22   1288  END_SILENCE/58            ?0        #8                   ?0                  	;0
		23   1288  ASSIGN_DIM/147            ?5        16?1                 9:1                 	;0
		24   1288  OP_DATA/137               ?0        $10                  ?0                  	;0
		25   1291  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'implode'        	;2	<<14
		26   1291  SEND_VAL_EX/116           ?80       17:'.'               ?1                  	;0
		27   1291  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		28   1291  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		29   1291  CAST/21                   #12=      $11                  ?0                  	;5
		30   1291  RETURN/62                 ?0        #12                  ?0                  	;0
		31   1292  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Check the version of the given property in the User-Agent.
     * Will return a float number. (eg. 2_0 will return 2.0, 4.3.1 will return 4.31)
     *
     * @param string $propertyName The name of the property. See self::getProperties() array
     *                             keys for all possible properties.
     * @param string $type         Either self::VERSION_TYPE_STRING to get a string value or
     *                             self::VERSION_TYPE_FLOAT indicating a float value. This parameter
     *                             is optional and defaults to self::VERSION_TYPE_STRING. Passing an
     *                             invalid parameter will default to the this type as well.
     *
     * @return string|float The version of the property we are trying to extract.
     */
	public function version($propertyName, $type)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1307  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1307  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2    1309  ISSET_ISEMPTY_CV/197      #7=       16?0                 ?0                  	;16777216
		3    1309  JMPZ/43                   ?0        #7                   ?5                  	;0	>>5
		4    1310  RETURN/62                 ?0        1:false              ?0                  	;0
		5    1314  IS_NOT_IDENTICAL/16       #8=       16?1                 2:'text'            	;0	<<3
		6    1314  JMPZ_EX/46                #8=       #8                   ?9                  	;0	>>9
		7    1314  IS_NOT_IDENTICAL/16       #9=       16?1                 3:'float'           	;0
		8    1314  BOOL/52                   #8=       #9                   ?0                  	;0
		9    1314  JMPZ/43                   ?0        #8                   ?11                 	;0	>>11	<<6
		10   1315  ASSIGN/38                 ?3        16?1                 4:'text'            	;0
		11   1318  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 5:'getProperties'   	;0	<<9
		12   1318  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		13   1318  ASSIGN/38                 ?5        16?2                 $11                 	;0
		14   1321  ISSET_ISEMPTY_DIM_OBJ/115 #13=      16?2                 16?0                	;33554432
		15   1321  IS_IDENTICAL/15           #14=      7:true               #13                 	;0
		16   1321  JMPZ/43                   ?0        #14                  ?58                 	;0	>>58
		17   1325  FETCH_DIM_R/81            $16=      16?2                 16?0                	;0
		18   1325  CAST/21                   #17=      $16                  ?0                  	;7
		19   1325  ASSIGN_DIM/147            ?8        16?2                 16?0                	;0
		20   1325  OP_DATA/137               ?0        #17                  ?0                  	;0
		21   1327  FETCH_DIM_R/81            $18=      16?2                 16?0                	;0
		22   1327  FE_RESET_R/77             $19=      $18                  ?57                 	;0
		23   1327  FE_FETCH_R/78             ?0        $19                  16?3                	;57	>>57	<<56
		24   1329  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'str_replace'     	;3
		25   1329  SEND_VAL_EX/116           ?80       10:'[VER]'           ?1                  	;0
		26   1329  SEND_VAL_EX/116           ?96       11:'([\\w._\\+]+)'   ?2                  	;0
		27   1329  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
		28   1329  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		29   1329  ASSIGN/38                 ?14       16?4                 $20                 	;0
		30   1332  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'preg_match'     	;3
		31   1332  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'sprintf'        	;2
		32   1332  SEND_VAL_EX/116           ?80       16:'#%s#is'          ?1                  	;0
		33   1332  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
		34   1332  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		35   1332  SEND_VAR_NO_REF_EX/50     ?80       $22                  ?1                  	;0
		36   1332  FETCH_OBJ_FUNC_ARG/94     $23=      ?0                   17:'userAgent'      	;2
		37   1332  SEND_VAR_EX/66            ?96       $23                  ?2                  	;0
		38   1332  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
		39   1332  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
		40   1334  ISSET_ISEMPTY_DIM_OBJ/115 #25=      16?5                 18:1                	;16777216
		41   1334  IS_IDENTICAL/15           #26=      19:false             #25                 	;0
		42   1334  JMPZ/43                   ?0        #26                  ?56                 	;0	>>56
		43   1335  IS_EQUAL/17               #27=      16?1                 20:'float'          	;0
		44   1335  JMPZ/43                   ?0        #27                  ?51                 	;0	>>51
		45   1335  INIT_METHOD_CALL/112      ?0        ?1668108800          21:'prepareVersionNo'	;1
		46   1335  FETCH_DIM_FUNC_ARG/93     $28=      16?5                 23:1                	;1
		47   1335  SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
		48   1335  DO_FCALL/60               $29=      ?0                   ?0                  	;0
		49   1335  QM_ASSIGN/22              #30=      $29                  ?0                  	;0
		50   1335  JMP/42                    ?0        ?53                  ?0                  	;0	>>53
		51   1335  FETCH_DIM_R/81            $31=      16?5                 24:1                	;0	<<44
		52   1335  QM_ASSIGN/22              #30=      $31                  ?0                  	;0
		53   1335  ASSIGN/38                 ?25       16?6                 #30                 	;0	<<50
		54   1337  FE_FREE/127               ?0        $19                  ?0                  	;1
		55   1337  RETURN/62                 ?0        16?6                 ?0                  	;0
		56   1337  JMP/42                    ?0        ?23                  ?0                  	;0	>>23	<<42
		57   1337  FE_FREE/127               ?0        $19                  ?0                  	;0	<<22
		58   1344  RETURN/62                 ?0        25:false             ?0                  	;0	<<16
		59   1345  NOP/0                     ?0        26:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Retrieve the mobile grading, using self::MOBILE_GRADE_* constants.
     *
     * @return string One of the self::MOBILE_GRADE_* constants.
     */
	public function mobileGrade()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1354  INIT_METHOD_CALL/112      ?0        ?2670193936          0:'isMobile'        	;0
		1    1354  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		2    1354  ASSIGN/38                 ?1        16?0                 $1                  	;0
		3    1358  INIT_METHOD_CALL/112      ?0        ?6                   2:'is'              	;1
		4    1358  SEND_VAL_EX/116           ?80       4:'iOS'              ?1                  	;0
		5    1358  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		6    1358  JMPZ_EX/46                #4=       $3                   ?13                 	;0	>>13
		7    1358  INIT_METHOD_CALL/112      ?0        ?1668111712          5:'version'         	;2
		8    1358  SEND_VAL_EX/116           ?80       7:'iPhone'           ?1                  	;0
		9    1358  SEND_VAL_EX/116           ?96       8:'float'            ?2                  	;0
		10   1358  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		11   1358  IS_SMALLER_OR_EQUAL/20    #6=       9:4.3                $5                  	;0
		12   1358  BOOL/52                   #4=       #6                   ?0                  	;0
		13   1358  JMPNZ_EX/47               #4=       #4                   ?25                 	;0	>>25	<<6
		14   1359  INIT_METHOD_CALL/112      ?0        ?4421191             10:'is'             	;1
		15   1359  SEND_VAL_EX/116           ?80       12:'iOS'             ?1                  	;0
		16   1359  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		17   1359  JMPZ_EX/46                #8=       $7                   ?24                 	;0	>>24
		18   1359  INIT_METHOD_CALL/112      ?0        ?1668111008          13:'version'        	;2
		19   1359  SEND_VAL_EX/116           ?80       15:'iPod'            ?1                  	;0
		20   1359  SEND_VAL_EX/116           ?96       16:'float'           ?2                  	;0
		21   1359  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		22   1359  IS_SMALLER_OR_EQUAL/20    #10=      17:4.3               $9                  	;0
		23   1359  BOOL/52                   #8=       #10                  ?0                  	;0
		24   1359  BOOL/52                   #4=       #8                   ?0                  	;0	<<17
		25   1359  JMPNZ_EX/47               #4=       #4                   ?37                 	;0	>>37	<<13
		26   1365  INIT_METHOD_CALL/112      ?0        ?4421191             18:'version'        	;2
		27   1365  SEND_VAL_EX/116           ?80       20:'Android'         ?1                  	;0
		28   1365  SEND_VAL_EX/116           ?96       21:'float'           ?2                  	;0
		29   1365  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		30   1365  IS_SMALLER/19             #12=      22:2.1               $11                 	;0
		31   1365  JMPZ_EX/46                #12=      #12                  ?36                 	;0	>>36
		32   1365  INIT_METHOD_CALL/112      ?0        ?4421191             23:'is'             	;1
		33   1365  SEND_VAL_EX/116           ?80       25:'Webkit'          ?1                  	;0
		34   1365  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		35   1365  BOOL/52                   #12=      $13                  ?0                  	;0
		36   1365  BOOL/52                   #4=       #12                  ?0                  	;0	<<31
		37   1365  JMPNZ_EX/47               #4=       #4                   ?44                 	;0	>>44	<<25
		38   1368  INIT_METHOD_CALL/112      ?0        ?4419182             26:'version'        	;2
		39   1368  SEND_VAL_EX/116           ?80       28:'Windows Phone OS' ?1                  	;0
		40   1368  SEND_VAL_EX/116           ?96       29:'float'           ?2                  	;0
		41   1368  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		42   1368  IS_SMALLER_OR_EQUAL/20    #15=      30:7.5               $14                 	;0
		43   1368  BOOL/52                   #4=       #15                  ?0                  	;0
		44   1368  JMPNZ_EX/47               #4=       #4                   ?56                 	;0	>>56	<<37
		45   1371  INIT_METHOD_CALL/112      ?0        ?4421191             31:'is'             	;1
		46   1371  SEND_VAL_EX/116           ?80       33:'BlackBerry'      ?1                  	;0
		47   1371  DO_FCALL/60               $16=      ?0                   ?0                  	;0
		48   1371  JMPZ_EX/46                #17=      $16                  ?55                 	;0	>>55
		49   1371  INIT_METHOD_CALL/112      ?0        ?1663609304          34:'version'        	;2
		50   1371  SEND_VAL_EX/116           ?80       36:'BlackBerry'      ?1                  	;0
		51   1371  SEND_VAL_EX/116           ?96       37:'float'           ?2                  	;0
		52   1371  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		53   1371  IS_SMALLER_OR_EQUAL/20    #19=      38:6.0               $18                 	;0
		54   1371  BOOL/52                   #17=      #19                  ?0                  	;0
		55   1371  BOOL/52                   #4=       #17                  ?0                  	;0	<<48
		56   1371  JMPNZ_EX/47               #4=       #4                   ?61                 	;0	>>61	<<44
		57   1373  INIT_METHOD_CALL/112      ?0        ?4419182             39:'match'          	;1
		58   1373  SEND_VAL_EX/116           ?80       41:'Playbook.*Tablet' ?1                  	;0
		59   1373  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		60   1373  BOOL/52                   #4=       $20                  ?0                  	;0
		61   1373  JMPNZ_EX/47               #4=       #4                   ?73                 	;0	>>73	<<56
		62   1376  INIT_METHOD_CALL/112      ?0        ?1668104128          42:'version'        	;2
		63   1376  SEND_VAL_EX/116           ?80       44:'webOS'           ?1                  	;0
		64   1376  SEND_VAL_EX/116           ?96       45:'float'           ?2                  	;0
		65   1376  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		66   1376  IS_SMALLER_OR_EQUAL/20    #22=      46:1.4               $21                 	;0
		67   1376  JMPZ_EX/46                #22=      #22                  ?72                 	;0	>>72
		68   1376  INIT_METHOD_CALL/112      ?0        ?4421191             47:'match'          	;1
		69   1376  SEND_VAL_EX/116           ?80       49:'Palm|Pre|Pixi'   ?1                  	;0
		70   1376  DO_FCALL/60               $23=      ?0                   ?0                  	;0
		71   1376  BOOL/52                   #22=      $23                  ?0                  	;0
		72   1376  BOOL/52                   #4=       #22                  ?0                  	;0	<<67
		73   1376  JMPNZ_EX/47               #4=       #4                   ?78                 	;0	>>78	<<61
		74   1378  INIT_METHOD_CALL/112      ?0        ?4419182             50:'match'          	;1
		75   1378  SEND_VAL_EX/116           ?80       52:'hp.*TouchPad'    ?1                  	;0
		76   1378  DO_FCALL/60               $24=      ?0                   ?0                  	;0
		77   1378  BOOL/52                   #4=       $24                  ?0                  	;0
		78   1378  JMPNZ_EX/47               #4=       #4                   ?90                 	;0	>>90	<<73
		79   1381  INIT_METHOD_CALL/112      ?0        ?4419182             53:'is'             	;1
		80   1381  SEND_VAL_EX/116           ?80       55:'Firefox'         ?1                  	;0
		81   1381  DO_FCALL/60               $25=      ?0                   ?0                  	;0
		82   1381  JMPZ_EX/46                #26=      $25                  ?89                 	;0	>>89
		83   1381  INIT_METHOD_CALL/112      ?0        ?1668108928          56:'version'        	;2
		84   1381  SEND_VAL_EX/116           ?80       58:'Firefox'         ?1                  	;0
		85   1381  SEND_VAL_EX/116           ?96       59:'float'           ?2                  	;0
		86   1381  DO_FCALL/60               $27=      ?0                   ?0                  	;0
		87   1381  IS_SMALLER_OR_EQUAL/20    #28=      60:18                $27                 	;0
		88   1381  BOOL/52                   #26=      #28                  ?0                  	;0
		89   1381  BOOL/52                   #4=       #26                  ?0                  	;0	<<82
		90   1381  JMPNZ_EX/47               #4=       #4                   ?107                	;0	>>107	<<78
		91   1384  INIT_METHOD_CALL/112      ?0        ?4421191             61:'is'             	;1
		92   1384  SEND_VAL_EX/116           ?80       63:'Chrome'          ?1                  	;0
		93   1384  DO_FCALL/60               $29=      ?0                   ?0                  	;0
		94   1384  JMPZ_EX/46                #30=      $29                  ?99                 	;0	>>99
		95   1384  INIT_METHOD_CALL/112      ?0        ?4421191             64:'is'             	;1
		96   1384  SEND_VAL_EX/116           ?80       66:'AndroidOS'       ?1                  	;0
		97   1384  DO_FCALL/60               $31=      ?0                   ?0                  	;0
		98   1384  BOOL/52                   #30=      $31                  ?0                  	;0
		99   1384  JMPZ_EX/46                #30=      #30                  ?106                	;0	>>106	<<94
		100  1384  INIT_METHOD_CALL/112      ?0        ?4421191             67:'version'        	;2
		101  1384  SEND_VAL_EX/116           ?80       69:'Android'         ?1                  	;0
		102  1384  SEND_VAL_EX/116           ?96       70:'float'           ?2                  	;0
		103  1384  DO_FCALL/60               $32=      ?0                   ?0                  	;0
		104  1384  IS_SMALLER_OR_EQUAL/20    #33=      71:4.0               $32                 	;0
		105  1384  BOOL/52                   #30=      #33                  ?0                  	;0
		106  1384  BOOL/52                   #4=       #30                  ?0                  	;0	<<99
		107  1384  JMPNZ_EX/47               #4=       #4                   ?131                	;0	>>131	<<90
		108  1387  INIT_METHOD_CALL/112      ?0        ?4421191             72:'is'             	;1
		109  1387  SEND_VAL_EX/116           ?80       74:'Skyfire'         ?1                  	;0
		110  1387  DO_FCALL/60               $34=      ?0                   ?0                  	;0
		111  1387  JMPZ_EX/46                #35=      $34                  ?118                	;0	>>118
		112  1387  INIT_METHOD_CALL/112      ?0        ?1663262592          75:'version'        	;2
		113  1387  SEND_VAL_EX/116           ?80       77:'Skyfire'         ?1                  	;0
		114  1387  SEND_VAL_EX/116           ?96       78:'float'           ?2                  	;0
		115  1387  DO_FCALL/60               $36=      ?0                   ?0                  	;0
		116  1387  IS_SMALLER_OR_EQUAL/20    #37=      79:4.1               $36                 	;0
		117  1387  BOOL/52                   #35=      #37                  ?0                  	;0
		118  1387  JMPZ_EX/46                #35=      #35                  ?123                	;0	>>123	<<111
		119  1387  INIT_METHOD_CALL/112      ?0        ?4419182             80:'is'             	;1
		120  1387  SEND_VAL_EX/116           ?80       82:'AndroidOS'       ?1                  	;0
		121  1387  DO_FCALL/60               $38=      ?0                   ?0                  	;0
		122  1387  BOOL/52                   #35=      $38                  ?0                  	;0
		123  1387  JMPZ_EX/46                #35=      #35                  ?130                	;0	>>130	<<118
		124  1387  INIT_METHOD_CALL/112      ?0        ?4419182             83:'version'        	;2
		125  1387  SEND_VAL_EX/116           ?80       85:'Android'         ?1                  	;0
		126  1387  SEND_VAL_EX/116           ?96       86:'float'           ?2                  	;0
		127  1387  DO_FCALL/60               $39=      ?0                   ?0                  	;0
		128  1387  IS_SMALLER_OR_EQUAL/20    #40=      87:2.3               $39                 	;0
		129  1387  BOOL/52                   #35=      #40                  ?0                  	;0
		130  1387  BOOL/52                   #4=       #35                  ?0                  	;0	<<123
		131  1387  JMPNZ_EX/47               #4=       #4                   ?148                	;0	>>148	<<107
		132  1390  INIT_METHOD_CALL/112      ?0        ?4421191             88:'is'             	;1
		133  1390  SEND_VAL_EX/116           ?80       90:'Opera'           ?1                  	;0
		134  1390  DO_FCALL/60               $41=      ?0                   ?0                  	;0
		135  1390  JMPZ_EX/46                #42=      $41                  ?142                	;0	>>142
		136  1390  INIT_METHOD_CALL/112      ?0        ?1669148736          91:'version'        	;2
		137  1390  SEND_VAL_EX/116           ?80       93:'Opera Mobi'      ?1                  	;0
		138  1390  SEND_VAL_EX/116           ?96       94:'float'           ?2                  	;0
		139  1390  DO_FCALL/60               $43=      ?0                   ?0                  	;0
		140  1390  IS_SMALLER_OR_EQUAL/20    #44=      95:11.5              $43                 	;0
		141  1390  BOOL/52                   #42=      #44                  ?0                  	;0
		142  1390  JMPZ_EX/46                #42=      #42                  ?147                	;0	>>147	<<135
		143  1390  INIT_METHOD_CALL/112      ?0        ?4419182             96:'is'             	;1
		144  1390  SEND_VAL_EX/116           ?80       98:'AndroidOS'       ?1                  	;0
		145  1390  DO_FCALL/60               $45=      ?0                   ?0                  	;0
		146  1390  BOOL/52                   #42=      $45                  ?0                  	;0
		147  1390  BOOL/52                   #4=       #42                  ?0                  	;0	<<142
		148  1390  JMPNZ_EX/47               #4=       #4                   ?153                	;0	>>153	<<131
		149  1393  INIT_METHOD_CALL/112      ?0        ?4419182             99:'is'             	;1
		150  1393  SEND_VAL_EX/116           ?80       101:'MeeGoOS'        ?1                  	;0
		151  1393  DO_FCALL/60               $46=      ?0                   ?0                  	;0
		152  1393  BOOL/52                   #4=       $46                  ?0                  	;0
		153  1393  JMPNZ_EX/47               #4=       #4                   ?158                	;0	>>158	<<148
		154  1396  INIT_METHOD_CALL/112      ?0        ?4419182             102:'is'            	;1
		155  1396  SEND_VAL_EX/116           ?80       104:'Tizen'          ?1                  	;0
		156  1396  DO_FCALL/60               $47=      ?0                   ?0                  	;0
		157  1396  BOOL/52                   #4=       $47                  ?0                  	;0
		158  1396  JMPNZ_EX/47               #4=       #4                   ?170                	;0	>>170	<<153
		159  1400  INIT_METHOD_CALL/112      ?0        ?4419182             105:'is'            	;1
		160  1400  SEND_VAL_EX/116           ?80       107:'Dolfin'         ?1                  	;0
		161  1400  DO_FCALL/60               $48=      ?0                   ?0                  	;0
		162  1400  JMPZ_EX/46                #49=      $48                  ?169                	;0	>>169
		163  1400  INIT_METHOD_CALL/112      ?0        ?1667628096          108:'version'       	;2
		164  1400  SEND_VAL_EX/116           ?80       110:'Bada'           ?1                  	;0
		165  1400  SEND_VAL_EX/116           ?96       111:'float'          ?2                  	;0
		166  1400  DO_FCALL/60               $50=      ?0                   ?0                  	;0
		167  1400  IS_SMALLER_OR_EQUAL/20    #51=      112:2.0              $50                 	;0
		168  1400  BOOL/52                   #49=      #51                  ?0                  	;0
		169  1400  BOOL/52                   #4=       #49                  ?0                  	;0	<<162
		170  1400  JMPNZ_EX/47               #4=       #4                   ?187                	;0	>>187	<<158
		171  1403  INIT_METHOD_CALL/112      ?0        ?4421191             113:'is'            	;1
		172  1403  SEND_VAL_EX/116           ?80       115:'UC Browser'     ?1                  	;0
		173  1403  DO_FCALL/60               $52=      ?0                   ?0                  	;0
		174  1403  JMPNZ_EX/47               #53=      $52                  ?179                	;0	>>179
		175  1403  INIT_METHOD_CALL/112      ?0        ?4421191             116:'is'            	;1
		176  1403  SEND_VAL_EX/116           ?80       118:'Dolfin'         ?1                  	;0
		177  1403  DO_FCALL/60               $54=      ?0                   ?0                  	;0
		178  1403  BOOL/52                   #53=      $54                  ?0                  	;0
		179  1403  JMPZ_EX/46                #53=      #53                  ?186                	;0	>>186	<<174
		180  1403  INIT_METHOD_CALL/112      ?0        ?4421191             119:'version'       	;2
		181  1403  SEND_VAL_EX/116           ?80       121:'Android'        ?1                  	;0
		182  1403  SEND_VAL_EX/116           ?96       122:'float'          ?2                  	;0
		183  1403  DO_FCALL/60               $55=      ?0                   ?0                  	;0
		184  1403  IS_SMALLER_OR_EQUAL/20    #56=      123:2.3              $55                 	;0
		185  1403  BOOL/52                   #53=      #56                  ?0                  	;0
		186  1403  BOOL/52                   #4=       #53                  ?0                  	;0	<<179
		187  1403  JMPNZ_EX/47               #4=       #4                   ?204                	;0	>>204	<<170
		188  1406  INIT_METHOD_CALL/112      ?0        ?4419182             124:'match'         	;1
		189  1406  SEND_VAL_EX/116           ?80       126:'Kindle Fire'    ?1                  	;0
		190  1406  DO_FCALL/60               $57=      ?0                   ?0                  	;0
		191  1406  JMPNZ_EX/47               #58=      $57                  ?203                	;0	>>203
		192  1407  INIT_METHOD_CALL/112      ?0        ?1663609664          127:'is'            	;1
		193  1407  SEND_VAL_EX/116           ?80       129:'Kindle'         ?1                  	;0
		194  1407  DO_FCALL/60               $59=      ?0                   ?0                  	;0
		195  1407  JMPZ_EX/46                #60=      $59                  ?202                	;0	>>202
		196  1407  INIT_METHOD_CALL/112      ?0        ?1669057440          130:'version'       	;2
		197  1407  SEND_VAL_EX/116           ?80       132:'Kindle'         ?1                  	;0
		198  1407  SEND_VAL_EX/116           ?96       133:'float'          ?2                  	;0
		199  1407  DO_FCALL/60               $61=      ?0                   ?0                  	;0
		200  1407  IS_SMALLER_OR_EQUAL/20    #62=      134:3.0              $61                 	;0
		201  1407  BOOL/52                   #60=      #62                  ?0                  	;0
		202  1407  BOOL/52                   #58=      #60                  ?0                  	;0	<<195
		203  1407  BOOL/52                   #4=       #58                  ?0                  	;0	<<191
		204  1407  JMPNZ_EX/47               #4=       #4                   ?214                	;0	>>214	<<187
		205  1410  INIT_METHOD_CALL/112      ?0        ?4419182             135:'is'            	;1
		206  1410  SEND_VAL_EX/116           ?80       137:'AndroidOS'      ?1                  	;0
		207  1410  DO_FCALL/60               $63=      ?0                   ?0                  	;0
		208  1410  JMPZ_EX/46                #64=      $63                  ?213                	;0	>>213
		209  1410  INIT_METHOD_CALL/112      ?0        ?4419182             138:'is'            	;1
		210  1410  SEND_VAL_EX/116           ?80       140:'NookTablet'     ?1                  	;0
		211  1410  DO_FCALL/60               $65=      ?0                   ?0                  	;0
		212  1410  BOOL/52                   #64=      $65                  ?0                  	;0
		213  1410  BOOL/52                   #4=       #64                  ?0                  	;0	<<208
		214  1410  JMPNZ_EX/47               #4=       #4                   ?224                	;0	>>224	<<204
		215  1413  INIT_METHOD_CALL/112      ?0        ?4419182             141:'version'       	;2
		216  1413  SEND_VAL_EX/116           ?80       143:'Chrome'         ?1                  	;0
		217  1413  SEND_VAL_EX/116           ?96       144:'float'          ?2                  	;0
		218  1413  DO_FCALL/60               $66=      ?0                   ?0                  	;0
		219  1413  IS_SMALLER_OR_EQUAL/20    #67=      145:16               $66                 	;0
		220  1413  JMPZ_EX/46                #67=      #67                  ?223                	;0	>>223
		221  1413  BOOL_NOT/13               #68=      16?0                 ?0                  	;0
		222  1413  BOOL/52                   #67=      #68                  ?0                  	;0
		223  1413  BOOL/52                   #4=       #67                  ?0                  	;0	<<220
		224  1413  JMPNZ_EX/47               #4=       #4                   ?234                	;0	>>234	<<214
		225  1416  INIT_METHOD_CALL/112      ?0        ?2670192256          146:'version'       	;2
		226  1416  SEND_VAL_EX/116           ?80       148:'Safari'         ?1                  	;0
		227  1416  SEND_VAL_EX/116           ?96       149:'float'          ?2                  	;0
		228  1416  DO_FCALL/60               $69=      ?0                   ?0                  	;0
		229  1416  IS_SMALLER_OR_EQUAL/20    #70=      150:5.0              $69                 	;0
		230  1416  JMPZ_EX/46                #70=      #70                  ?233                	;0	>>233
		231  1416  BOOL_NOT/13               #71=      16?0                 ?0                  	;0
		232  1416  BOOL/52                   #70=      #71                  ?0                  	;0
		233  1416  BOOL/52                   #4=       #70                  ?0                  	;0	<<230
		234  1416  JMPNZ_EX/47               #4=       #4                   ?244                	;0	>>244	<<224
		235  1419  INIT_METHOD_CALL/112      ?0        ?2670192544          151:'version'       	;2
		236  1419  SEND_VAL_EX/116           ?80       153:'Firefox'        ?1                  	;0
		237  1419  SEND_VAL_EX/116           ?96       154:'float'          ?2                  	;0
		238  1419  DO_FCALL/60               $72=      ?0                   ?0                  	;0
		239  1419  IS_SMALLER_OR_EQUAL/20    #73=      155:10.0             $72                 	;0
		240  1419  JMPZ_EX/46                #73=      #73                  ?243                	;0	>>243
		241  1419  BOOL_NOT/13               #74=      16?0                 ?0                  	;0
		242  1419  BOOL/52                   #73=      #74                  ?0                  	;0
		243  1419  BOOL/52                   #4=       #73                  ?0                  	;0	<<240
		244  1419  JMPNZ_EX/47               #4=       #4                   ?254                	;0	>>254	<<234
		245  1422  INIT_METHOD_CALL/112      ?0        ?2670192832          156:'version'       	;2
		246  1422  SEND_VAL_EX/116           ?80       158:'IE'             ?1                  	;0
		247  1422  SEND_VAL_EX/116           ?96       159:'float'          ?2                  	;0
		248  1422  DO_FCALL/60               $75=      ?0                   ?0                  	;0
		249  1422  IS_SMALLER_OR_EQUAL/20    #76=      160:7.0              $75                 	;0
		250  1422  JMPZ_EX/46                #76=      #76                  ?253                	;0	>>253
		251  1422  BOOL_NOT/13               #77=      16?0                 ?0                  	;0
		252  1422  BOOL/52                   #76=      #77                  ?0                  	;0
		253  1422  BOOL/52                   #4=       #76                  ?0                  	;0	<<250
		254  1422  JMPNZ_EX/47               #4=       #4                   ?264                	;0	>>264	<<244
		255  1425  INIT_METHOD_CALL/112      ?0        ?2670193120          161:'version'       	;2
		256  1425  SEND_VAL_EX/116           ?80       163:'Opera'          ?1                  	;0
		257  1425  SEND_VAL_EX/116           ?96       164:'float'          ?2                  	;0
		258  1425  DO_FCALL/60               $78=      ?0                   ?0                  	;0
		259  1425  IS_SMALLER_OR_EQUAL/20    #79=      165:10               $78                 	;0
		260  1425  JMPZ_EX/46                #79=      #79                  ?263                	;0	>>263
		261  1425  BOOL_NOT/13               #80=      16?0                 ?0                  	;0
		262  1425  BOOL/52                   #79=      #80                  ?0                  	;0
		263  1425  BOOL/52                   #4=       #79                  ?0                  	;0	<<260
		264  1425  JMPZ/43                   ?0        #4                   ?266                	;0	>>266	<<254
		265  1427  RETURN/62                 ?0        166:'A'              ?0                  	;0
		266  1431  INIT_METHOD_CALL/112      ?0        ?1668183072          167:'is'            	;1	<<264
		267  1431  SEND_VAL_EX/116           ?80       169:'iOS'            ?1                  	;0
		268  1431  DO_FCALL/60               $81=      ?0                   ?0                  	;0
		269  1431  JMPZ_EX/46                #82=      $81                  ?276                	;0	>>276
		270  1431  INIT_METHOD_CALL/112      ?0        ?4397406             170:'version'       	;2
		271  1431  SEND_VAL_EX/116           ?80       172:'iPhone'         ?1                  	;0
		272  1431  SEND_VAL_EX/116           ?96       173:'float'          ?2                  	;0
		273  1431  DO_FCALL/60               $83=      ?0                   ?0                  	;0
		274  1431  IS_SMALLER/19             #84=      $83                  174:4.3             	;0
		275  1431  BOOL/52                   #82=      #84                  ?0                  	;0
		276  1431  JMPNZ_EX/47               #82=      #82                  ?288                	;0	>>288	<<269
		277  1432  INIT_METHOD_CALL/112      ?0        ?858993459           175:'is'            	;1
		278  1432  SEND_VAL_EX/116           ?80       177:'iOS'            ?1                  	;0
		279  1432  DO_FCALL/60               $85=      ?0                   ?0                  	;0
		280  1432  JMPZ_EX/46                #86=      $85                  ?287                	;0	>>287
		281  1432  INIT_METHOD_CALL/112      ?0        ?4397406             178:'version'       	;2
		282  1432  SEND_VAL_EX/116           ?80       180:'iPod'           ?1                  	;0
		283  1432  SEND_VAL_EX/116           ?96       181:'float'          ?2                  	;0
		284  1432  DO_FCALL/60               $87=      ?0                   ?0                  	;0
		285  1432  IS_SMALLER/19             #88=      $87                  182:4.3             	;0
		286  1432  BOOL/52                   #86=      #88                  ?0                  	;0
		287  1432  BOOL/52                   #82=      #86                  ?0                  	;0	<<280
		288  1432  JMPNZ_EX/47               #82=      #82                  ?307                	;0	>>307	<<276
		289  1435  INIT_METHOD_CALL/112      ?0        ?858993459           183:'is'            	;1
		290  1435  SEND_VAL_EX/116           ?80       185:'Blackberry'     ?1                  	;0
		291  1435  DO_FCALL/60               $89=      ?0                   ?0                  	;0
		292  1435  JMPZ_EX/46                #90=      $89                  ?299                	;0	>>299
		293  1435  INIT_METHOD_CALL/112      ?0        ?1663610024          186:'version'       	;2
		294  1435  SEND_VAL_EX/116           ?80       188:'BlackBerry'     ?1                  	;0
		295  1435  SEND_VAL_EX/116           ?96       189:'float'          ?2                  	;0
		296  1435  DO_FCALL/60               $91=      ?0                   ?0                  	;0
		297  1435  IS_SMALLER_OR_EQUAL/20    #92=      190:5                $91                 	;0
		298  1435  BOOL/52                   #90=      #92                  ?0                  	;0
		299  1435  JMPZ_EX/46                #90=      #90                  ?306                	;0	>>306	<<292
		300  1435  INIT_METHOD_CALL/112      ?0        ?2670192224          191:'version'       	;2
		301  1435  SEND_VAL_EX/116           ?80       193:'BlackBerry'     ?1                  	;0
		302  1435  SEND_VAL_EX/116           ?96       194:'float'          ?2                  	;0
		303  1435  DO_FCALL/60               $93=      ?0                   ?0                  	;0
		304  1435  IS_SMALLER/19             #94=      $93                  195:6               	;0
		305  1435  BOOL/52                   #90=      #94                  ?0                  	;0
		306  1435  BOOL/52                   #82=      #90                  ?0                  	;0	<<299
		307  1435  JMPNZ_EX/47               #82=      #82                  ?333                	;0	>>333	<<288
		308  1438  INIT_METHOD_CALL/112      ?0        ?4421191             196:'version'       	;2
		309  1438  SEND_VAL_EX/116           ?80       198:'Opera Mini'     ?1                  	;0
		310  1438  SEND_VAL_EX/116           ?96       199:'float'          ?2                  	;0
		311  1438  DO_FCALL/60               $95=      ?0                   ?0                  	;0
		312  1438  IS_SMALLER_OR_EQUAL/20    #96=      200:5.0              $95                 	;0
		313  1438  JMPZ_EX/46                #96=      #96                  ?320                	;0	>>320
		314  1438  INIT_METHOD_CALL/112      ?0        ?2670192224          201:'version'       	;2
		315  1438  SEND_VAL_EX/116           ?80       203:'Opera Mini'     ?1                  	;0
		316  1438  SEND_VAL_EX/116           ?96       204:'float'          ?2                  	;0
		317  1438  DO_FCALL/60               $97=      ?0                   ?0                  	;0
		318  1438  IS_SMALLER_OR_EQUAL/20    #98=      $97                  205:7.0             	;0
		319  1438  BOOL/52                   #96=      #98                  ?0                  	;0
		320  1438  JMPZ_EX/46                #96=      #96                  ?332                	;0	>>332	<<313
		321  1439  INIT_METHOD_CALL/112      ?0        ?4421191             206:'version'       	;2
		322  1439  SEND_VAL_EX/116           ?80       208:'Android'        ?1                  	;0
		323  1439  SEND_VAL_EX/116           ?96       209:'float'          ?2                  	;0
		324  1439  DO_FCALL/60               $99=      ?0                   ?0                  	;0
		325  1439  IS_SMALLER_OR_EQUAL/20    #100=     210:2.3              $99                 	;0
		326  1439  JMPNZ_EX/47               #100=     #100                 ?331                	;0	>>331
		327  1439  INIT_METHOD_CALL/112      ?0        ?4421191             211:'is'            	;1
		328  1439  SEND_VAL_EX/116           ?80       213:'iOS'            ?1                  	;0
		329  1439  DO_FCALL/60               $101=     ?0                   ?0                  	;0
		330  1439  BOOL/52                   #100=     $101                 ?0                  	;0
		331  1439  BOOL/52                   #96=      #100                 ?0                  	;0	<<326
		332  1439  BOOL/52                   #82=      #96                  ?0                  	;0	<<320
		333  1439  JMPNZ_EX/47               #82=      #82                  ?338                	;0	>>338	<<307
		334  1442  INIT_METHOD_CALL/112      ?0        ?4419182             214:'match'         	;1
		335  1442  SEND_VAL_EX/116           ?80       216:'NokiaN8|NokiaC7|N97.*Series60|Symbian/3' ?1                  	;0
		336  1442  DO_FCALL/60               $102=     ?0                   ?0                  	;0
		337  1442  BOOL/52                   #82=      $102                 ?0                  	;0
		338  1442  JMPNZ_EX/47               #82=      #82                  ?350                	;0	>>350	<<333
		339  1445  INIT_METHOD_CALL/112      ?0        ?1668363392          217:'version'       	;2
		340  1445  SEND_VAL_EX/116           ?80       219:'Opera Mobi'     ?1                  	;0
		341  1445  SEND_VAL_EX/116           ?96       220:'float'          ?2                  	;0
		342  1445  DO_FCALL/60               $103=     ?0                   ?0                  	;0
		343  1445  IS_SMALLER_OR_EQUAL/20    #104=     221:11               $103                	;0
		344  1445  JMPZ_EX/46                #104=     #104                 ?349                	;0	>>349
		345  1445  INIT_METHOD_CALL/112      ?0        ?4421191             222:'is'            	;1
		346  1445  SEND_VAL_EX/116           ?80       224:'SymbianOS'      ?1                  	;0
		347  1445  DO_FCALL/60               $105=     ?0                   ?0                  	;0
		348  1445  BOOL/52                   #104=     $105                 ?0                  	;0
		349  1445  BOOL/52                   #82=      #104                 ?0                  	;0	<<344
		350  1445  JMPZ/43                   ?0        #82                  ?352                	;0	>>352	<<338
		351  1447  RETURN/62                 ?0        225:'B'              ?0                  	;0
		352  1452  INIT_METHOD_CALL/112      ?0        ?4397406             226:'version'       	;2	<<350
		353  1452  SEND_VAL_EX/116           ?80       228:'BlackBerry'     ?1                  	;0
		354  1452  SEND_VAL_EX/116           ?96       229:'float'          ?2                  	;0
		355  1452  DO_FCALL/60               $106=     ?0                   ?0                  	;0
		356  1452  IS_SMALLER_OR_EQUAL/20    #107=     $106                 230:5.0             	;0
		357  1452  JMPNZ_EX/47               #107=     #107                 ?362                	;0	>>362
		358  1454  INIT_METHOD_CALL/112      ?0        ?0                   231:'match'         	;1
		359  1454  SEND_VAL_EX/116           ?80       233:'MSIEMobile|Windows CE.*Mobile' ?1                  	;0
		360  1454  DO_FCALL/60               $108=     ?0                   ?0                  	;0
		361  1454  BOOL/52                   #107=     $108                 ?0                  	;0
		362  1454  JMPNZ_EX/47               #107=     #107                 ?369                	;0	>>369	<<357
		363  1454  INIT_METHOD_CALL/112      ?0        ?4422077             234:'version'       	;2
		364  1454  SEND_VAL_EX/116           ?80       236:'Windows Mobile' ?1                  	;0
		365  1454  SEND_VAL_EX/116           ?96       237:'float'          ?2                  	;0
		366  1454  DO_FCALL/60               $109=     ?0                   ?0                  	;0
		367  1454  IS_SMALLER_OR_EQUAL/20    #110=     $109                 238:5.2             	;0
		368  1454  BOOL/52                   #107=     #110                 ?0                  	;0
		369  1454  JMPNZ_EX/47               #107=     #107                 ?381                	;0	>>381	<<362
		370  1457  INIT_METHOD_CALL/112      ?0        ?3435973837          239:'is'            	;1
		371  1457  SEND_VAL_EX/116           ?80       241:'iOS'            ?1                  	;0
		372  1457  DO_FCALL/60               $111=     ?0                   ?0                  	;0
		373  1457  JMPZ_EX/46                #112=     $111                 ?380                	;0	>>380
		374  1457  INIT_METHOD_CALL/112      ?0        ?4397406             242:'version'       	;2
		375  1457  SEND_VAL_EX/116           ?80       244:'iPhone'         ?1                  	;0
		376  1457  SEND_VAL_EX/116           ?96       245:'float'          ?2                  	;0
		377  1457  DO_FCALL/60               $113=     ?0                   ?0                  	;0
		378  1457  IS_SMALLER_OR_EQUAL/20    #114=     $113                 246:3.2             	;0
		379  1457  BOOL/52                   #112=     #114                 ?0                  	;0
		380  1457  BOOL/52                   #107=     #112                 ?0                  	;0	<<373
		381  1457  JMPNZ_EX/47               #107=     #107                 ?393                	;0	>>393	<<369
		382  1458  INIT_METHOD_CALL/112      ?0        ?4419182             247:'is'            	;1
		383  1458  SEND_VAL_EX/116           ?80       249:'iOS'            ?1                  	;0
		384  1458  DO_FCALL/60               $115=     ?0                   ?0                  	;0
		385  1458  JMPZ_EX/46                #116=     $115                 ?392                	;0	>>392
		386  1458  INIT_METHOD_CALL/112      ?0        ?4397406             250:'version'       	;2
		387  1458  SEND_VAL_EX/116           ?80       252:'iPod'           ?1                  	;0
		388  1458  SEND_VAL_EX/116           ?96       253:'float'          ?2                  	;0
		389  1458  DO_FCALL/60               $117=     ?0                   ?0                  	;0
		390  1458  IS_SMALLER_OR_EQUAL/20    #118=     $117                 254:3.2             	;0
		391  1458  BOOL/52                   #116=     #118                 ?0                  	;0
		392  1458  BOOL/52                   #107=     #116                 ?0                  	;0	<<385
		393  1458  JMPNZ_EX/47               #107=     #107                 ?403                	;0	>>403	<<381
		394  1461  INIT_METHOD_CALL/112      ?0        ?4422077             255:'version'       	;2
		395  1461  SEND_VAL_EX/116           ?80       257:'IE'             ?1                  	;0
		396  1461  SEND_VAL_EX/116           ?96       258:'float'          ?2                  	;0
		397  1461  DO_FCALL/60               $119=     ?0                   ?0                  	;0
		398  1461  IS_SMALLER_OR_EQUAL/20    #120=     $119                 259:7.0             	;0
		399  1461  JMPZ_EX/46                #120=     #120                 ?402                	;0	>>402
		400  1461  BOOL_NOT/13               #121=     16?0                 ?0                  	;0
		401  1461  BOOL/52                   #120=     #121                 ?0                  	;0
		402  1461  BOOL/52                   #107=     #120                 ?0                  	;0	<<399
		403  1461  JMPZ/43                   ?0        #107                 ?405                	;0	>>405	<<393
		404  1463  RETURN/62                 ?0        260:'C'              ?0                  	;0
		405  1468  RETURN/62                 ?0        261:'C'              ?0                  	;0	<<403
		406  1469  NOP/0                     ?0        262:NULL             ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    23    NOP/0                     ?0        ?0                   ?0                  	;0
1    1471  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>