<?php


class Release
{
	public const MOVIE = 'movie';
	public const TVSHOW = 'tvshow';
	public const ORIGINAL_RELEASE = 1;
	public const GENERATED_RELEASE = 2;
	public const SOURCE = 'source';
	public const SOURCE_DVDRIP = 'DVDRip';
	public const SOURCE_DVDSCR = 'DVDScr';
	public const SOURCE_BDSCR = 'BDScr';
	public const SOURCE_WEB_DL = 'WEB-DL';
	public const SOURCE_BDRIP = 'BDRip';
	public const SOURCE_DVD_R = 'DVD-R';
	public const SOURCE_R5 = 'R5';
	public const SOURCE_HDRIP = 'HDRip';
	public const SOURCE_BLURAY = 'BLURAY';
	public const SOURCE_PDTV = 'PDTV';
	public const SOURCE_SDTV = 'SDTV';
	public const SOURCE_CAM = 'CAM';
	public const SOURCE_TC = 'TC';
	public const ENCODING = 'encoding';
	public const ENCODING_XVID = 'XviD';
	public const ENCODING_DIVX = 'DivX';
	public const ENCODING_X264 = 'x264';
	public const ENCODING_X265 = 'x265';
	public const ENCODING_H264 = 'h264';
	public const RESOLUTION = 'resolution';
	public const RESOLUTION_SD = 'SD';
	public const RESOLUTION_720P = '720p';
	public const RESOLUTION_1080P = '1080p';
	public const DUB = 'dub';
	public const DUB_DUBBED = 'DUBBED';
	public const DUB_AC3 = 'AC3';
	public const DUB_MD = 'MD';
	public const DUB_LD = 'LD';
	public const LANGUAGE_MULTI = 'MULTI';
	public const LANGUAGE_DEFAULT = 'VO';

	static public $sourceStatic = [
		'CAM'    => ['cam', 'camrip', 'cam-rip', 'ts', 'telesync', 'pdvd'],
		'TC'     => ['tc', 'telecine'],
		'DVDRip' => ['dvdrip', 'dvd-rip'],
		'DVDScr' => ['dvdscr', 'dvd-scr', 'dvdscreener', 'screener', 'scr', 'DDC'],
		'BDScr'  => ['bluray-scr', 'bdscr'],
		'WEB-DL' => ['webtv', 'web-tv', 'webdl', 'web-dl', 'webrip', 'web-rip', 'webhd', 'web'],
		'BDRip'  => ['bdrip', 'bd-rip', 'brrip', 'br-rip'],
		'DVD-R'  => ['dvd', 'dvdr', 'dvd-r', 'dvd-5', 'dvd-9', 'r6-dvd'],
		'R5'     => ['r5'],
		'HDRip'  => ['hdtv', 'hdtvrip', 'hdtv-rip', 'hdrip', 'hdlight', 'mhd', 'hd'],
		'BLURAY' => ['bluray', 'blu-ray', 'bdr'],
		'PDTV'   => ['pdtv'],
		'SDTV'   => ['sdtv', 'dsr', 'dsrip', 'satrip', 'dthrip', 'dvbrip']
	];
	static public $encodingStatic = [
		'DivX' => ['divx'],
		'XviD' => ['xvid'],
		'x264' => ['x264', 'x.264'],
		'x265' => ['x265', 'x.265'],
		'h264' => ['h264', 'h.264']
	];
	static public $resolutionStatic = [
		'SD'    => ['sd'],
		'720p'  => ['720p'],
		'1080p' => ['1080p']
	];
	static public $dubStatic = [
		'DUBBED' => ['dubbed'],
		'AC3'    => ['ac3.dubbed', 'ac3'],
		'MD'     => ['md', 'microdubbed', 'micro-dubbed'],
		'LD'     => ['ld', 'linedubbed', 'line-dubbed']
	];
	static public $languageStatic = [];
	static public $flagsStatic = [
		'FASTSUB'       => 'FASTSUB',
		'SUBFRENCH'     => 'SUBFRENCH',
		'SUBFORCED'     => 'SUBFORCED',
		'WORKPRINT'     => ['WORKPRINT', 'WP'],
		'FANSUB'        => 'FANSUB',
		'REPACK'        => 'REPACK',
		'NFOFIX'        => 'NFOFIX',
		'INTERNAL'      => ['INTERNAL', 'INT'],
		'DOLBY DIGITAL' => 'DOLBY DIGITAL',
		'DTS'           => 'DTS',
		'AAC'           => 'AAC',
		'DTS-HD'        => 'DTS-HD',
		'DTS-MA'        => 'DTS-MA',
		'TRUEHD'        => 'TRUEHD',
		'3D'            => '3D',
		'HSBS'          => 'HSBS',
		'HOU'           => 'HOU',
		'DOC'           => 'DOC',
		'RERIP'         => ['rerip', 're-rip'],
		'DD5.1'         => ['dd5.1', 'dd51', 'dd5-1', '5.1', '5-1'],
		'READNFO'       => ['READ.NFO', 'READ-NFO', 'READNFO']
	];
	protected $release;
	protected $type;
	protected $title;
	protected $year = 0;
	protected $language;
	protected $resolution;
	protected $source;
	protected $dub;
	protected $encoding;
	protected $group;
	protected $flags = [];
	protected $season = 0;
	protected $episode = 0;

	public function __construct($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   241  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   243  INIT_METHOD_CALL/112      ?0        ?2                   0:'clean'           	;1
		2   243  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   243  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		4   243  ASSIGN/38                 ?1        16?1                 $12                 	;0
		5   245  ASSIGN_OBJ/136            ?2        ?2670194080          2:'original'        	;0
		6   245  OP_DATA/137               ?0        16?0                 ?0                  	;0
		7   246  ASSIGN_OBJ/136            ?3        ?2670194080          3:'release'         	;0
		8   246  OP_DATA/137               ?0        16?1                 ?0                  	;0
		9   247  ASSIGN/38                 ?4        16?2                 16?1                	;0
		10  250  INIT_METHOD_CALL/112      ?0        ?1665006592          4:'parseLanguage'   	;1
		11  250  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		12  250  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		13  250  ASSIGN/38                 ?6        16?3                 $17                 	;0
		14  251  INIT_METHOD_CALL/112      ?0        ?5                   6:'setLanguage'     	;1
		15  251  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		16  251  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17  254  INIT_METHOD_CALL/112      ?0        ?0                   8:'parseSource'     	;1
		18  254  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		19  254  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		20  254  ASSIGN/38                 ?9        16?4                 $20                 	;0
		21  255  INIT_METHOD_CALL/112      ?0        ?8                   10:'setSource'      	;1
		22  255  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		23  255  DO_FCALL/60               ?10       ?0                   ?0                  	;0
		24  258  INIT_METHOD_CALL/112      ?0        ?0                   12:'parseEncoding'  	;1
		25  258  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		26  258  DO_FCALL/60               $23=      ?0                   ?0                  	;0
		27  258  ASSIGN/38                 ?12       16?5                 $23                 	;0
		28  259  INIT_METHOD_CALL/112      ?0        ?11                  14:'setEncoding'    	;1
		29  259  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		30  259  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		31  262  INIT_METHOD_CALL/112      ?0        ?0                   16:'parseResolution'	;1
		32  262  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		33  262  DO_FCALL/60               $26=      ?0                   ?0                  	;0
		34  262  ASSIGN/38                 ?15       16?6                 $26                 	;0
		35  263  INIT_METHOD_CALL/112      ?0        ?14                  18:'setResolution'  	;1
		36  263  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		37  263  DO_FCALL/60               ?16       ?0                   ?0                  	;0
		38  266  INIT_METHOD_CALL/112      ?0        ?0                   20:'parseDub'       	;1
		39  266  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		40  266  DO_FCALL/60               $29=      ?0                   ?0                  	;0
		41  266  ASSIGN/38                 ?18       16?7                 $29                 	;0
		42  267  INIT_METHOD_CALL/112      ?0        ?17                  22:'setDub'         	;1
		43  267  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		44  267  DO_FCALL/60               ?19       ?0                   ?0                  	;0
		45  270  INIT_METHOD_CALL/112      ?0        ?0                   24:'parseYear'      	;1
		46  270  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		47  270  DO_FCALL/60               $32=      ?0                   ?0                  	;0
		48  270  ASSIGN/38                 ?21       16?8                 $32                 	;0
		49  271  INIT_METHOD_CALL/112      ?0        ?20                  26:'setYear'        	;1
		50  271  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		51  271  DO_FCALL/60               ?22       ?0                   ?0                  	;0
		52  274  INIT_METHOD_CALL/112      ?0        ?0                   28:'parseFlags'     	;1
		53  274  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		54  274  DO_FCALL/60               $35=      ?0                   ?0                  	;0
		55  274  ASSIGN/38                 ?24       16?9                 $35                 	;0
		56  275  INIT_METHOD_CALL/112      ?0        ?23                  30:'setFlags'       	;1
		57  275  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
		58  275  DO_FCALL/60               ?25       ?0                   ?0                  	;0
		59  278  INIT_METHOD_CALL/112      ?0        ?0                   32:'parseType'      	;1
		60  278  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		61  278  DO_FCALL/60               $38=      ?0                   ?0                  	;0
		62  278  ASSIGN/38                 ?27       16?10                $38                 	;0
		63  279  INIT_METHOD_CALL/112      ?0        ?26                  34:'setType'        	;1
		64  279  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		65  279  DO_FCALL/60               ?28       ?0                   ?0                  	;0
		66  282  INIT_METHOD_CALL/112      ?0        ?0                   36:'parseGroup'     	;1
		67  282  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		68  282  DO_FCALL/60               $41=      ?0                   ?0                  	;0
		69  282  ASSIGN/38                 ?30       16?11                $41                 	;0
		70  283  INIT_METHOD_CALL/112      ?0        ?29                  38:'setGroup'       	;1
		71  283  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
		72  283  DO_FCALL/60               ?31       ?0                   ?0                  	;0
		73  286  INIT_METHOD_CALL/112      ?0        ?0                   40:'parseTitle'     	;1
		74  286  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		75  286  DO_FCALL/60               $44=      ?0                   ?0                  	;0
		76  286  ASSIGN/38                 ?33       16?2                 $44                 	;0
		77  287  INIT_METHOD_CALL/112      ?0        ?32                  42:'setTitle'       	;1
		78  287  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		79  287  DO_FCALL/60               ?34       ?0                   ?0                  	;0
		80  288  NOP/0                     ?0        44:NULL              ?0                  	;4294967295
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   291  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
		1   293  INIT_METHOD_CALL/112      ?0        ?4386548             1:'getTitle'        	;0
		2   293  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		3   293  INIT_ARRAY/71             #4=       $3                   ?0                  	;32
		4   294  INIT_METHOD_CALL/112      ?0        ?4386548             3:'getYear'         	;0
		5   294  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		6   294  ADD_ARRAY_ELEMENT/72      #4=       $5                   ?0                  	;0
		7   295  INIT_METHOD_CALL/112      ?0        ?2670194096          5:'getSeason'       	;0
		8   295  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   295  JMPZ/43                   ?0        $6                   ?19                 	;0	>>19
		10  295  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'sprintf'         	;2
		11  295  SEND_VAL_EX/116           ?80       9:'%02d'             ?1                  	;0
		12  295  INIT_METHOD_CALL/112      ?0        ?5126                10:'getSeason'      	;0
		13  295  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		14  295  SEND_VAR_NO_REF_EX/50     ?96       $7                   ?2                  	;0
		15  295  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		16  295  CONCAT/8                  #9=       12:'S'               $8                  	;0
		17  295  QM_ASSIGN/22              #10=      #9                   ?0                  	;0
		18  295  JMP/42                    ?0        ?20                  ?0                  	;0	>>20
		19  295  QM_ASSIGN/22              #10=      13:''                ?0                  	;0	<<9
		20  296  INIT_METHOD_CALL/112      ?0        ?6                   14:'getEpisode'     	;0	<<18
		21  296  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		22  296  JMPZ/43                   ?0        $11                  ?32                 	;0	>>32
		23  296  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'sprintf'        	;2
		24  296  SEND_VAL_EX/116           ?80       18:'%02d'            ?1                  	;0
		25  296  INIT_METHOD_CALL/112      ?0        ?5126                19:'getEpisode'     	;0
		26  296  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		27  296  SEND_VAR_NO_REF_EX/50     ?96       $12                  ?2                  	;0
		28  296  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		29  296  CONCAT/8                  #14=      21:'E'               $13                 	;0
		30  296  QM_ASSIGN/22              #15=      #14                  ?0                  	;0
		31  296  JMP/42                    ?0        ?33                  ?0                  	;0	>>33
		32  296  QM_ASSIGN/22              #15=      22:''                ?0                  	;0	<<22
		33  296  CONCAT/8                  #16=      #10                  #15                 	;0	<<31
		34  296  ADD_ARRAY_ELEMENT/72      #4=       #16                  ?0                  	;0
		35  297  INIT_METHOD_CALL/112      ?0        ?13                  23:'getLanguage'    	;0
		36  297  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		37  297  ADD_ARRAY_ELEMENT/72      #4=       $17                  ?0                  	;0
		38  298  INIT_METHOD_CALL/112      ?0        ?13                  25:'getResolution'  	;0
		39  298  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		40  298  ADD_ARRAY_ELEMENT/72      #4=       $18                  ?0                  	;0
		41  299  INIT_METHOD_CALL/112      ?0        ?13                  27:'getSource'      	;0
		42  299  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		43  299  ADD_ARRAY_ELEMENT/72      #4=       $19                  ?0                  	;0
		44  300  INIT_METHOD_CALL/112      ?0        ?13                  29:'getEncoding'    	;0
		45  300  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		46  300  ADD_ARRAY_ELEMENT/72      #4=       $20                  ?0                  	;0
		47  301  INIT_METHOD_CALL/112      ?0        ?13                  31:'getDub'         	;0
		48  301  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		49  301  ADD_ARRAY_ELEMENT/72      #4=       $21                  ?0                  	;0
		50  301  FE_RESET_R/77             $22=      #4                   ?67                 	;0
		51  301  FE_FETCH_R/78             ?0        $22                  16?1                	;67	>>67	<<66
		52  303  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'is_array'       	;1
		53  303  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		54  303  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		55  303  JMPZ/43                   ?0        $23                  ?63                 	;0	>>63
		56  304  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'implode'        	;2
		57  304  SEND_VAL_EX/116           ?80       37:'.'               ?1                  	;0
		58  304  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		59  304  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		60  304  ASSIGN_DIM/147            ?22       16?0                 ?4397406            	;0
		61  304  OP_DATA/137               ?0        $25                  ?0                  	;0
		62  304  JMP/42                    ?0        ?66                  ?0                  	;0	>>66
		63  305  JMPZ/43                   ?0        16?1                 ?66                 	;0	>>66	<<55
		64  306  ASSIGN_DIM/147            ?24       16?0                 ?2670193312         	;0
		65  306  OP_DATA/137               ?0        16?1                 ?0                  	;0
		66  306  JMP/42                    ?0        ?51                  ?0                  	;0	>>51	<<62,63
		67  306  FE_FREE/127               ?0        $22                  ?0                  	;0	<<50
		68  309  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'preg_replace'   	;3
		69  309  SEND_VAL_EX/116           ?80       40:'#\\s+#'          ?1                  	;0
		70  309  SEND_VAL_EX/116           ?96       41:'.'               ?2                  	;0
		71  309  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'implode'        	;2
		72  309  SEND_VAL_EX/116           ?80       44:'.'               ?1                  	;0
		73  309  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		74  309  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
		75  309  SEND_VAR_NO_REF_EX/50     ?112      $27                  ?3                  	;0
		76  309  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		77  309  CONCAT/8                  #29=      $28                  45:'-'              	;0
		78  309  INIT_METHOD_CALL/112      ?0        ?2670193680          46:'getGroup'       	;0
		79  309  DO_FCALL/60               $30=      ?0                   ?0                  	;0
		80  309  JMPZ/43                   ?0        $30                  ?85                 	;0	>>85
		81  309  INIT_METHOD_CALL/112      ?0        ?2670193680          48:'getGroup'       	;0
		82  309  DO_FCALL/60               $31=      ?0                   ?0                  	;0
		83  309  QM_ASSIGN/22              #32=      $31                  ?0                  	;0
		84  309  JMP/42                    ?0        ?86                  ?0                  	;0	>>86
		85  309  QM_ASSIGN/22              #32=      50:'NOTEAM'          ?0                  	;0	<<80
		86  309  CONCAT/8                  #33=      #29                  #32                 	;0	<<84
		87  309  RETURN/62                 ?0        #33                  ?0                  	;0
		88  310  NOP/0                     ?0        51:NULL              ?0                  	;4294967295
		*/
	}

	public function getRelease($mode)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   312  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   313  CASE/48                   #1=       16?0                 1:2                 	;0	>>3
		2   313  JMPNZ/44                  ?0        #1                   ?4                  	;0	>>4
		3   313  JMP/42                    ?0        ?8                   ?0                  	;0	>>8	<<1
		4   315  INIT_METHOD_CALL/112      ?0        ?2670193616          2:'__toString'      	;0	<<2
		5   315  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		6   315  RETURN/62                 ?0        $2                   ?0                  	;0
		7   316  BRK/254                   ?0        ?11                  0:1                 	;0
		8   318  FETCH_OBJ_R/82            $3=       ?1668105392          4:'release'         	;0	<<3
		9   318  RETURN/62                 ?0        $3                   ?0                  	;0
		10  319  BRK/254                   ?0        ?11                  0:1                 	;0
		11  321  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	private function clean($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   323  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   324  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'str_replace'     	;3
		2   324  SEND_VAL_EX/116           ?80       2:array (
  0 => '[',
  1 => ']',
  2 => '(',
  3 => ')',
  4 => ',',
  5 => ';',
  6 => ':',
  7 => '!',
) ?1                  	;0
		3   324  SEND_VAL_EX/116           ?96       3:' '                ?2                  	;0
		4   324  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		5   324  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		6   324  ASSIGN/38                 ?1        16?1                 $2                  	;0
		7   325  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'preg_replace'    	;3
		8   325  SEND_VAL_EX/116           ?80       6:'#[\\s]+#'         ?1                  	;0
		9   325  SEND_VAL_EX/116           ?96       7:' '                ?2                  	;0
		10  325  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		11  325  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		12  325  ASSIGN/38                 ?3        16?1                 $4                  	;0
		13  326  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'str_replace'     	;3
		14  326  SEND_VAL_EX/116           ?80       10:' '               ?1                  	;0
		15  326  SEND_VAL_EX/116           ?96       11:'.'               ?2                  	;0
		16  326  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		17  326  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		18  326  ASSIGN/38                 ?5        16?1                 $6                  	;0
		19  328  RETURN/62                 ?0        16?1                 ?0                  	;0
		20  329  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	public function guess()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   332  FETCH_THIS/184            $1=       ?0                   ?0                  	;0
		1   332  ASSIGN/38                 ?1        16?0                 $1                  	;0
		2   334  ISSET_ISEMPTY_PROP_OBJ/148 #3=       16?0                 0:'year'            	;33554432
		3   334  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		4   334  JMPZ/43                   ?0        #4                   ?10                 	;0	>>10
		5   335  INIT_METHOD_CALL/112      ?0        16?0                 1:'setYear'         	;1
		6   335  INIT_METHOD_CALL/112      ?0        16?0                 3:'guessYear'       	;0
		7   335  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		8   335  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
		9   335  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		10  338  ISSET_ISEMPTY_PROP_OBJ/148 #7=       16?0                 5:'resolution'      	;33554432	<<4
		11  338  BOOL_NOT/13               #8=       #7                   ?0                  	;0
		12  338  JMPZ/43                   ?0        #8                   ?18                 	;0	>>18
		13  339  INIT_METHOD_CALL/112      ?0        16?0                 6:'setResolution'   	;1
		14  339  INIT_METHOD_CALL/112      ?0        16?0                 8:'guessResolution' 	;0
		15  339  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  339  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
		17  339  DO_FCALL/60               ?9        ?0                   ?0                  	;0
		18  342  ISSET_ISEMPTY_PROP_OBJ/148 #11=      16?0                 10:'language'       	;33554432	<<12
		19  342  BOOL_NOT/13               #12=      #11                  ?0                  	;0
		20  342  JMPZ/43                   ?0        #12                  ?26                 	;0	>>26
		21  343  INIT_METHOD_CALL/112      ?0        16?0                 11:'setLanguage'    	;1
		22  343  INIT_METHOD_CALL/112      ?0        16?0                 13:'guessLanguage'  	;0
		23  343  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		24  343  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		25  343  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		26  346  RETURN/62                 ?0        16?0                 ?0                  	;0	<<20
		27  347  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	private function parseAttribute(&$title, $attribute)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   349  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   349  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   350  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'in_array'        	;2
		3   350  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		4   350  SEND_VAL_EX/116           ?96       2:array (
  0 => 'source',
  1 => 'encoding',
  2 => 'resolution',
  3 => 'dub',
) ?2                  	;0
		5   350  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		6   350  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		7   350  JMPZ/43                   ?0        #8                   ?11                 	;0	>>11
		8   351  NEW/68                    $9=       3:'InvalidArgumentException' ?64                 	;0
		9   351  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		10  351  THROW/108                 ?0        $9                   ?0                  	;0
		11  354  CONCAT/8                  #11=      16?1                 5:'Static'          	;0	<<7
		12  354  ASSIGN/38                 ?5        16?2                 #11                 	;0
		13  356  FETCH_STATIC_PROP_R/173   $13=      16?2                 6:'Release'         	;0
		14  356  FE_RESET_R/77             $14=      $13                  ?47                 	;0
		15  356  FE_FETCH_R/78             #15=      $14                  16?3                	;47	>>47	<<46
		16  356  ASSIGN/38                 ?9        16?4                 #15                 	;0
		17  357  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'is_array'        	;1
		18  357  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		19  357  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		20  357  BOOL_NOT/13               #18=      $17                  ?0                  	;0
		21  357  JMPZ/43                   ?0        #18                  ?24                 	;0	>>24
		22  358  INIT_ARRAY/71             #19=      16?3                 ?0                  	;4
		23  358  ASSIGN/38                 ?13       16?3                 #19                 	;0
		24  361  FE_RESET_R/77             $21=      16?3                 ?45                 	;0	<<21
		25  361  FE_FETCH_R/78             ?0        $21                  16?5                	;45	>>45	<<44
		26  362  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'preg_replace'   	;5
		27  362  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'preg_quote'     	;1
		28  362  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		29  362  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		30  362  CONCAT/8                  #23=      14:'#[\\.|\\-]'      $22                 	;0
		31  362  CONCAT/8                  #24=      #23                  15:'([\\.|\\-]|$)#i'	;0
		32  362  SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
		33  362  SEND_VAL_EX/116           ?96       16:'$1'              ?2                  	;0
		34  362  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		35  362  SEND_VAL_EX/116           ?128      17:1                 ?4                  	;0
		36  362  SEND_VAR_EX/66            ?144      16?6                 ?5                  	;0
		37  362  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		38  362  ASSIGN/38                 ?19       16?0                 $25                 	;0
		39  363  IS_SMALLER/19             #27=      18:0                 16?6                	;0
		40  363  JMPZ/43                   ?0        #27                  ?44                 	;0	>>44
		41  364  FE_FREE/127               ?0        $21                  ?1                  	;1
		42  364  FE_FREE/127               ?0        $14                  ?0                  	;1
		43  364  RETURN/62                 ?0        16?4                 ?0                  	;0
		44  364  JMP/42                    ?0        ?25                  ?0                  	;0	>>25	<<40
		45  364  FE_FREE/127               ?0        $21                  ?0                  	;0	<<24
		46  364  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		47  364  FE_FREE/127               ?0        $14                  ?0                  	;0	<<14
		48  369  RETURN/62                 ?0        19:NULL              ?0                  	;0
		49  370  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	public function getType()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   373  FETCH_OBJ_R/82            $0=       ?4583868             0:'type'            	;0
		1   373  RETURN/62                 ?0        $0                   ?0                  	;0
		2   374  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseType(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   376  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   377  ASSIGN/38                 ?0        16?1                 0:NULL              	;0
		2   378  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'preg_replace_callback'	;5
		3   378  SEND_VAL_EX/116           ?80       3:'#S(?<season>\\d{1,2})E(?<episode>\\d{1,2})#i' ?1                  	;0
		4   378  DECLARE_LAMBDA_FUNCTION/153 #4=       4:'' . "\0" . '{closure}/home/xui_main/includes/libs/tmdb_release.php0x7f8d65064400' ?0                  	;0
		5   378  BIND_LEXICAL/182          ?0        #4                   16?1                	;1
		6   387  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
		7   387  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		8   387  SEND_VAL_EX/116           ?128      5:1                  ?4                  	;0
		9   387  SEND_VAR_EX/66            ?144      16?2                 ?5                  	;0
		10  387  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		11  387  ASSIGN/38                 ?3        16?0                 $5                  	;0
		12  389  IS_EQUAL/17               #7=       16?2                 6:0                 	;0
		13  389  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
		14  391  ASSIGN/38                 ?5        16?1                 7:'movie'           	;0
		15  394  RETURN/62                 ?0        16?1                 ?0                  	;0	<<13
		16  395  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function setType($type)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   397  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   398  ASSIGN_OBJ/136            ?0        ?1665007200          0:'type'            	;0
		2   398  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   399  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getTitle()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   402  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'trim'            	;1
		1   402  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'rtrim'           	;2
		2   402  FETCH_OBJ_FUNC_ARG/94     $0=       ?1664797168          4:'title'           	;1
		3   402  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		4   402  SEND_VAL_EX/116           ?96       5:'-'                ?2                  	;0
		5   402  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		6   402  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		7   402  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		8   402  RETURN/62                 ?0        $2                   ?0                  	;0
		9   403  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	private function parseTitle(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   405  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   406  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   407  ASSIGN/38                 ?1        16?2                 1:''                	;0
		3   408  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'preg_replace'    	;3
		4   408  SEND_VAL_EX/116           ?80       4:'#\\.?\\-\\.#'     ?1                  	;0
		5   408  SEND_VAL_EX/116           ?96       5:'.'                ?2                  	;0
		6   408  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		7   408  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		8   408  ASSIGN/38                 ?3        16?0                 $9                  	;0
		9   409  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'preg_replace'    	;3
		10  409  SEND_VAL_EX/116           ?80       8:'#\\(.*?\\)#'      ?1                  	;0
		11  409  SEND_VAL_EX/116           ?96       9:''                 ?2                  	;0
		12  409  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		13  409  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		14  409  ASSIGN/38                 ?5        16?0                 $11                 	;0
		15  410  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'preg_replace'   	;3
		16  410  SEND_VAL_EX/116           ?80       12:'#\\.+#'          ?1                  	;0
		17  410  SEND_VAL_EX/116           ?96       13:'.'               ?2                  	;0
		18  410  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		19  410  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		20  410  ASSIGN/38                 ?7        16?0                 $13                 	;0
		21  411  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'explode'        	;2
		22  411  SEND_VAL_EX/116           ?80       16:'.'               ?1                  	;0
		23  411  FETCH_OBJ_FUNC_ARG/94     $15=      ?4416340             17:'release'        	;2
		24  411  SEND_VAR_EX/66            ?96       $15                  ?2                  	;0
		25  411  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		26  411  ASSIGN/38                 ?10       16?3                 $16                 	;0
		27  413  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'array_intersect'	;2
		28  413  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		29  413  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'explode'        	;2
		30  413  SEND_VAL_EX/116           ?80       22:'.'               ?1                  	;0
		31  413  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		32  413  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		33  413  SEND_VAR_NO_REF_EX/50     ?96       $18                  ?2                  	;0
		34  413  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		35  413  FE_RESET_R/77             $20=      $19                  ?62                 	;0
		36  413  FE_FETCH_R/78             #21=      $20                  16?4                	;62	>>62	<<61
		37  413  ASSIGN/38                 ?15       16?5                 #21                 	;0
		38  414  ISSET_ISEMPTY_CV/197      #23=      16?6                 ?0                  	;33554432
		39  414  JMPZ/43                   ?0        #23                  ?42                 	;0	>>42
		40  414  QM_ASSIGN/22              #24=      16?6                 ?0                  	;0
		41  414  JMP/42                    ?0        ?43                  ?0                  	;0	>>43
		42  414  QM_ASSIGN/22              #24=      23:0                 ?0                  	;0	<<39
		43  414  ASSIGN/38                 ?18       16?6                 #24                 	;0	<<41
		44  416  SUB/2                     #26=      16?5                 16?6                	;0
		45  416  IS_SMALLER/19             #27=      24:1                 #26                 	;0
		46  416  JMPZ/43                   ?0        #27                  ?53                 	;0	>>53
		47  417  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'implode'        	;2
		48  417  SEND_VAL_EX/116           ?80       27:' '               ?1                  	;0
		49  417  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		50  417  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		51  417  ASSIGN/38                 ?22       16?2                 $28                 	;0
		52  418  BRK/254                   ?0        ?62                  0:1                 	;0
		53  421  ASSIGN_DIM/147            ?23       16?1                 ?0                  	;0	<<46
		54  421  OP_DATA/137               ?0        16?4                 ?0                  	;0
		55  422  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'implode'        	;2
		56  422  SEND_VAL_EX/116           ?80       30:' '               ?1                  	;0
		57  422  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		58  422  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		59  422  ASSIGN/38                 ?25       16?2                 $31                 	;0
		60  423  ASSIGN/38                 ?26       16?6                 16?5                	;0
		61  423  JMP/42                    ?0        ?36                  ?0                  	;0	>>36
		62  423  FE_FREE/127               ?0        $20                  ?0                  	;0	<<35
		63  426  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'trim'           	;1
		64  426  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		65  426  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
		66  426  ASSIGN/38                 ?28       16?2                 $34                 	;0
		67  428  RETURN/62                 ?0        16?2                 ?0                  	;0
		68  429  NOP/0                     ?0        33:NULL              ?0                  	;4294967295
		*/
	}

	public function setTitle($title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   431  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   432  ASSIGN_OBJ/136            ?0        ?1669221280          0:'title'           	;0
		2   432  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   433  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getSeason()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   436  FETCH_OBJ_R/82            $0=       ?0                   0:'season'          	;0
		1   436  RETURN/62                 ?0        $0                   ?0                  	;0
		2   437  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setSeason($season)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   439  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   440  ASSIGN_OBJ/136            ?0        ?2670194256          0:'season'          	;0
		2   440  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   441  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getEpisode()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   444  FETCH_OBJ_R/82            $0=       ?0                   0:'episode'         	;0
		1   444  RETURN/62                 ?0        $0                   ?0                  	;0
		2   445  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setEpisode($episode)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   447  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   448  ASSIGN_OBJ/136            ?0        ?2670194256          0:'episode'         	;0
		2   448  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   449  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getLanguage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   452  FETCH_OBJ_R/82            $0=       ?0                   0:'language'        	;0
		1   452  RETURN/62                 ?0        $0                   ?0                  	;0
		2   453  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseLanguage(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   455  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   456  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   458  FETCH_STATIC_PROP_R/173   $7=       1:'languageStatic'   2:'Release'         	;0
		3   458  FE_RESET_R/77             $8=       $7                   ?36                 	;0
		4   458  FE_FETCH_R/78             #9=       $8                   16?2                	;36	>>36	<<35
		5   458  ASSIGN/38                 ?4        16?3                 #9                  	;0
		6   459  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_array'        	;1
		7   459  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		8   459  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		9   459  BOOL_NOT/13               #12=      $11                  ?0                  	;0
		10  459  JMPZ/43                   ?0        #12                  ?13                 	;0	>>13
		11  460  INIT_ARRAY/71             #13=      16?2                 ?0                  	;4
		12  460  ASSIGN/38                 ?8        16?2                 #13                 	;0
		13  463  FE_RESET_R/77             $15=      16?2                 ?34                 	;0	<<10
		14  463  FE_FETCH_R/78             ?0        $15                  16?4                	;34	>>34	<<33
		15  464  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'preg_replace'    	;5
		16  464  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'preg_quote'      	;1
		17  464  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		18  464  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		19  464  CONCAT/8                  #17=      10:'#[\\.|\\-]'      $16                 	;0
		20  464  CONCAT/8                  #18=      #17                  11:'([\\.|\\-]|$)#i'	;0
		21  464  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
		22  464  SEND_VAL_EX/116           ?96       12:'$1'              ?2                  	;0
		23  464  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		24  464  SEND_VAL_EX/116           ?128      13:1                 ?4                  	;0
		25  464  SEND_VAR_EX/66            ?144      16?5                 ?5                  	;0
		26  464  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		27  464  ASSIGN/38                 ?14       16?0                 $19                 	;0
		28  465  IS_SMALLER/19             #21=      14:0                 16?5                	;0
		29  465  JMPZ/43                   ?0        #21                  ?33                 	;0	>>33
		30  466  ASSIGN_DIM/147            ?16       16?1                 ?1664861120         	;0
		31  466  OP_DATA/137               ?0        16?3                 ?0                  	;0
		32  467  BRK/254                   ?0        ?34                  0:1                 	;0
		33  467  JMP/42                    ?0        ?14                  ?0                  	;0	>>14	<<29
		34  467  FE_FREE/127               ?0        $15                  ?0                  	;0	<<13
		35  467  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		36  467  FE_FREE/127               ?0        $8                   ?0                  	;0	<<3
		37  472  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'count'          	;1
		38  472  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		39  472  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		40  472  IS_EQUAL/17               #24=      $23                  17:1                	;0
		41  472  JMPZ/43                   ?0        #24                  ?45                 	;0	>>45
		42  473  FETCH_DIM_R/81            $25=      16?1                 18:0                	;0
		43  473  RETURN/62                 ?0        $25                  ?0                  	;0
		44  473  JMP/42                    ?0        ?53                  ?0                  	;0	>>53
		45  474  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'count'          	;1	<<41
		46  474  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		47  474  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		48  474  IS_SMALLER/19             #27=      21:1                 $26                 	;0
		49  474  JMPZ/43                   ?0        #27                  ?52                 	;0	>>52
		50  475  RETURN/62                 ?0        22:'MULTI'           ?0                  	;0
		51  475  JMP/42                    ?0        ?53                  ?0                  	;0	>>53
		52  477  RETURN/62                 ?0        23:NULL              ?0                  	;0	<<49
		53  479  NOP/0                     ?0        24:NULL              ?0                  	;4294967295	<<44,51
		*/
	}

	public function guessLanguage()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   482  RETURN/62                 ?0        0:'VO'               ?0                  	;0
		1   483  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setLanguage($language)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   485  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   486  ASSIGN_OBJ/136            ?0        ?4416340             0:'language'        	;0
		2   486  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   487  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getResolution()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   490  FETCH_OBJ_R/82            $0=       ?0                   0:'resolution'      	;0
		1   490  RETURN/62                 ?0        $0                   ?0                  	;0
		2   491  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseResolution(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   493  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   494  INIT_METHOD_CALL/112      ?0        ?2670194256          0:'parseAttribute'  	;2
		2   494  SEND_REF/67               ?80       16?0                 ?1                  	;0
		3   494  SEND_VAL/65               ?96       2:'resolution'       ?2                  	;0
		4   494  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		5   494  RETURN/62                 ?0        $1                   ?0                  	;0
		6   495  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function guessResolution()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   498  INIT_METHOD_CALL/112      ?0        ?4634201             0:'getSource'       	;0
		1   498  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		2   498  IS_EQUAL/17               #1=       $0                   2:'BLURAY'          	;0
		3   498  JMPNZ_EX/47               #1=       #1                   ?8                  	;0	>>8
		4   498  INIT_METHOD_CALL/112      ?0        ?4416340             3:'getSource'       	;0
		5   498  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		6   498  IS_EQUAL/17               #3=       $2                   5:'BDScr'           	;0
		7   498  BOOL/52                   #1=       #3                   ?0                  	;0
		8   498  JMPZ/43                   ?0        #1                   ?11                 	;0	>>11	<<3
		9   499  RETURN/62                 ?0        6:'1080p'            ?0                  	;0
		10  499  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		11  502  RETURN/62                 ?0        7:'SD'               ?0                  	;0	<<8
		12  504  NOP/0                     ?0        8:NULL               ?0                  	;4294967295	<<10
		*/
	}

	public function setResolution($resolution)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   506  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   507  ASSIGN_OBJ/136            ?0        ?8                   0:'resolution'      	;0
		2   507  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   508  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getSource()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   511  FETCH_OBJ_R/82            $0=       ?0                   0:'source'          	;0
		1   511  RETURN/62                 ?0        $0                   ?0                  	;0
		2   512  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseSource(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   514  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   515  INIT_METHOD_CALL/112      ?0        ?2670194256          0:'parseAttribute'  	;2
		2   515  SEND_REF/67               ?80       16?0                 ?1                  	;0
		3   515  SEND_VAL/65               ?96       2:'source'           ?2                  	;0
		4   515  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		5   515  RETURN/62                 ?0        $1                   ?0                  	;0
		6   516  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function setSource($source)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   518  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   519  ASSIGN_OBJ/136            ?0        ?2670194256          0:'source'          	;0
		2   519  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   520  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getDub()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   523  FETCH_OBJ_R/82            $0=       ?0                   0:'dub'             	;0
		1   523  RETURN/62                 ?0        $0                   ?0                  	;0
		2   524  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseDub(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   526  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   527  INIT_METHOD_CALL/112      ?0        ?2670194256          0:'parseAttribute'  	;2
		2   527  SEND_REF/67               ?80       16?0                 ?1                  	;0
		3   527  SEND_VAL/65               ?96       2:'dub'              ?2                  	;0
		4   527  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		5   527  RETURN/62                 ?0        $1                   ?0                  	;0
		6   528  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function setDub($dub)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   530  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   531  ASSIGN_OBJ/136            ?0        ?2670194256          0:'dub'             	;0
		2   531  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   532  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getEncoding()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   535  FETCH_OBJ_R/82            $0=       ?0                   0:'encoding'        	;0
		1   535  RETURN/62                 ?0        $0                   ?0                  	;0
		2   536  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseEncoding(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   538  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   539  INIT_METHOD_CALL/112      ?0        ?2670194256          0:'parseAttribute'  	;2
		2   539  SEND_REF/67               ?80       16?0                 ?1                  	;0
		3   539  SEND_VAL/65               ?96       2:'encoding'         ?2                  	;0
		4   539  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		5   539  RETURN/62                 ?0        $1                   ?0                  	;0
		6   540  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function setEncoding($encoding)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   542  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   543  ASSIGN_OBJ/136            ?0        ?2670194256          0:'encoding'        	;0
		2   543  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   544  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getYear()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   547  FETCH_OBJ_R/82            $0=       ?0                   0:'year'            	;0
		1   547  RETURN/62                 ?0        $0                   ?0                  	;0
		2   548  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseYear(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   550  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   551  ASSIGN/38                 ?0        16?1                 0:NULL              	;0
		2   553  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'preg_replace_callback'	;4
		3   553  SEND_VAL_EX/116           ?80       3:'#[\\.|\\-|\\(|\\ ](\\d{4})([\\.|\\-|\\|\\ )])?#' ?1                  	;0
		4   553  DECLARE_LAMBDA_FUNCTION/153 #3=       4:'' . "\0" . '{closure}/home/xui_main/includes/libs/tmdb_release.php0x7f8d6506541d' ?0                  	;0
		5   553  BIND_LEXICAL/182          ?0        #3                   16?1                	;1
		6   559  SEND_VAL_EX/116           ?96       #3                   ?2                  	;0
		7   559  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		8   559  SEND_VAL_EX/116           ?128      5:1                  ?4                  	;0
		9   559  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		10  559  ASSIGN/38                 ?3        16?0                 $4                  	;0
		11  561  RETURN/62                 ?0        16?1                 ?0                  	;0
		12  562  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function guessYear()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   565  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'date'            	;1
		1   565  SEND_VAL_EX/116           ?80       2:'Y'                ?1                  	;0
		2   565  DO_FCALL_BY_NAME/131      $0=       ?0                   ?0                  	;0
		3   565  RETURN/62                 ?0        $0                   ?0                  	;0
		4   566  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function setYear($year)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   568  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   569  ASSIGN_OBJ/136            ?0        ?1663077632          0:'year'            	;0
		2   569  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   570  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getGroup()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   573  FETCH_OBJ_R/82            $0=       ?0                   0:'group'           	;0
		1   573  RETURN/62                 ?0        $0                   ?0                  	;0
		2   574  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseGroup(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   576  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   577  ASSIGN/38                 ?0        16?1                 0:NULL              	;0
		2   579  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'preg_replace_callback'	;3
		3   579  SEND_VAL_EX/116           ?80       3:'#\\-([a-zA-Z0-9_\\.]+)$#' ?1                  	;0
		4   579  DECLARE_LAMBDA_FUNCTION/153 #3=       4:'' . "\0" . '{closure}/home/xui_main/includes/libs/tmdb_release.php0x7f8d65065691' ?0                  	;0
		5   579  BIND_LEXICAL/182          ?0        #3                   16?1                	;1
		6   586  SEND_VAL_EX/116           ?96       #3                   ?2                  	;0
		7   586  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		8   586  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		9   586  ASSIGN/38                 ?3        16?0                 $4                  	;0
		10  588  RETURN/62                 ?0        16?1                 ?0                  	;0
		11  589  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function setGroup($group)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   591  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   592  ASSIGN_OBJ/136            ?0        ?1664881664          0:'group'           	;0
		2   592  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   593  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getFlags()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   596  FETCH_OBJ_R/82            $0=       ?0                   0:'flags'           	;0
		1   596  RETURN/62                 ?0        $0                   ?0                  	;0
		2   597  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseFlags(&$title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   599  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   600  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2   602  FETCH_STATIC_PROP_R/173   $7=       1:'flagsStatic'      2:'Release'         	;0
		3   602  FE_RESET_R/77             $8=       $7                   ?35                 	;0
		4   602  FE_FETCH_R/78             #9=       $8                   16?2                	;35	>>35	<<34
		5   602  ASSIGN/38                 ?4        16?3                 #9                  	;0
		6   603  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_array'        	;1
		7   603  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		8   603  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		9   603  BOOL_NOT/13               #12=      $11                  ?0                  	;0
		10  603  JMPZ/43                   ?0        #12                  ?13                 	;0	>>13
		11  604  INIT_ARRAY/71             #13=      16?2                 ?0                  	;4
		12  604  ASSIGN/38                 ?8        16?2                 #13                 	;0
		13  607  FE_RESET_R/77             $15=      16?2                 ?33                 	;0	<<10
		14  607  FE_FETCH_R/78             ?0        $15                  16?4                	;33	>>33	<<32
		15  608  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'preg_replace'    	;5
		16  608  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'preg_quote'      	;1
		17  608  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		18  608  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		19  608  CONCAT/8                  #17=      10:'#[\\.|\\-]'      $16                 	;0
		20  608  CONCAT/8                  #18=      #17                  11:'([\\.|\\-]|$)#i'	;0
		21  608  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
		22  608  SEND_VAL_EX/116           ?96       12:'$1'              ?2                  	;0
		23  608  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		24  608  SEND_VAL_EX/116           ?128      13:1                 ?4                  	;0
		25  608  SEND_VAR_EX/66            ?144      16?5                 ?5                  	;0
		26  608  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		27  608  ASSIGN/38                 ?14       16?0                 $19                 	;0
		28  609  IS_SMALLER/19             #21=      14:0                 16?5                	;0
		29  609  JMPZ/43                   ?0        #21                  ?32                 	;0	>>32
		30  610  ASSIGN_DIM/147            ?16       16?1                 ?1663610424         	;0
		31  610  OP_DATA/137               ?0        16?3                 ?0                  	;0
		32  610  JMP/42                    ?0        ?14                  ?0                  	;0	>>14	<<29
		33  610  FE_FREE/127               ?0        $15                  ?0                  	;0	<<13
		34  610  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		35  610  FE_FREE/127               ?0        $8                   ?0                  	;0	<<3
		36  615  RETURN/62                 ?0        16?1                 ?0                  	;0
		37  616  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	public function setFlags($flags)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   618  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   619  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_array'        	;1
		2   619  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   619  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   619  JMPZ/43                   ?0        $2                   ?7                  	;0	>>7
		5   619  QM_ASSIGN/22              #3=       16?0                 ?0                  	;0
		6   619  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		7   619  INIT_ARRAY/71             #4=       16?0                 ?0                  	;4	<<4
		8   619  QM_ASSIGN/22              #3=       #4                   ?0                  	;0
		9   619  ASSIGN_OBJ/136            ?0        ?1664883072          0:'flags'           	;0	<<6
		10  619  OP_DATA/137               ?0        #3                   ?0                  	;0
		11  620  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function getScore()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   623  ASSIGN/38                 ?0        16?0                 0:0                 	;0
		1   624  INIT_METHOD_CALL/112      ?0        ?2670193320          1:'getTitle'        	;0
		2   624  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   624  JMPZ/43                   ?0        $2                   ?6                  	;0	>>6
		4   624  QM_ASSIGN/22              #3=       3:1                  ?0                  	;0
		5   624  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
		6   624  QM_ASSIGN/22              #3=       4:0                  ?0                  	;0	<<3
		7   624  ASSIGN_ADD/23             ?3        16?0                 #3                  	;0	<<5
		8   625  INIT_METHOD_CALL/112      ?0        ?2670193320          5:'getYear'         	;0
		9   625  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		10  625  JMPZ/43                   ?0        $5                   ?13                 	;0	>>13
		11  625  QM_ASSIGN/22              #6=       7:1                  ?0                  	;0
		12  625  JMP/42                    ?0        ?14                  ?0                  	;0	>>14
		13  625  QM_ASSIGN/22              #6=       8:0                  ?0                  	;0	<<10
		14  625  ASSIGN_ADD/23             ?6        16?0                 #6                  	;0	<<12
		15  626  INIT_METHOD_CALL/112      ?0        ?2670193320          9:'getLanguage'     	;0
		16  626  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		17  626  JMPZ/43                   ?0        $8                   ?20                 	;0	>>20
		18  626  QM_ASSIGN/22              #9=       11:1                 ?0                  	;0
		19  626  JMP/42                    ?0        ?21                  ?0                  	;0	>>21
		20  626  QM_ASSIGN/22              #9=       12:0                 ?0                  	;0	<<17
		21  626  ASSIGN_ADD/23             ?9        16?0                 #9                  	;0	<<19
		22  627  INIT_METHOD_CALL/112      ?0        ?2670193320          13:'getResolution'  	;0
		23  627  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		24  627  JMPZ/43                   ?0        $11                  ?27                 	;0	>>27
		25  627  QM_ASSIGN/22              #12=      15:1                 ?0                  	;0
		26  627  JMP/42                    ?0        ?28                  ?0                  	;0	>>28
		27  627  QM_ASSIGN/22              #12=      16:0                 ?0                  	;0	<<24
		28  627  ASSIGN_ADD/23             ?12       16?0                 #12                 	;0	<<26
		29  628  INIT_METHOD_CALL/112      ?0        ?2670193320          17:'getSource'      	;0
		30  628  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		31  628  JMPZ/43                   ?0        $14                  ?34                 	;0	>>34
		32  628  QM_ASSIGN/22              #15=      19:1                 ?0                  	;0
		33  628  JMP/42                    ?0        ?35                  ?0                  	;0	>>35
		34  628  QM_ASSIGN/22              #15=      20:0                 ?0                  	;0	<<31
		35  628  ASSIGN_ADD/23             ?15       16?0                 #15                 	;0	<<33
		36  629  INIT_METHOD_CALL/112      ?0        ?2670193320          21:'getEncoding'    	;0
		37  629  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		38  629  JMPZ/43                   ?0        $17                  ?41                 	;0	>>41
		39  629  QM_ASSIGN/22              #18=      23:1                 ?0                  	;0
		40  629  JMP/42                    ?0        ?42                  ?0                  	;0	>>42
		41  629  QM_ASSIGN/22              #18=      24:0                 ?0                  	;0	<<38
		42  629  ASSIGN_ADD/23             ?18       16?0                 #18                 	;0	<<40
		43  630  INIT_METHOD_CALL/112      ?0        ?2670193320          25:'getDub'         	;0
		44  630  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		45  630  JMPZ/43                   ?0        $20                  ?48                 	;0	>>48
		46  630  QM_ASSIGN/22              #21=      27:1                 ?0                  	;0
		47  630  JMP/42                    ?0        ?49                  ?0                  	;0	>>49
		48  630  QM_ASSIGN/22              #21=      28:0                 ?0                  	;0	<<45
		49  630  ASSIGN_ADD/23             ?21       16?0                 #21                 	;0	<<47
		50  631  RETURN/62                 ?0        16?0                 ?0                  	;0
		51  632  NOP/0                     ?0        29:NULL              ?0                  	;4294967295
		*/
	}
}
function {closure}($matches)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   378  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   378  BIND_STATIC/183           ?0        16?1                 0:'type'            	;1
	2   379  FETCH_CLASS_CONSTANT/181  #2=       ?513                 1:'TVSHOW'          	;0
	3   379  ASSIGN/38                 ?1        16?1                 #2                  	;0
	4   381  INIT_METHOD_CALL/112      ?0        ?0                   2:'setSeason'       	;1
	5   381  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'intval'          	;1
	6   381  FETCH_DIM_FUNC_ARG/93     $4=       16?0                 6:1                 	;1
	7   381  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
	8   381  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	9   381  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
	10  381  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	11  383  FETCH_DIM_R/81            $7=       16?0                 7:2                 	;0
	12  383  JMPZ/43                   ?0        $7                   ?20                 	;0	>>20
	13  384  INIT_METHOD_CALL/112      ?0        ?2670192512          8:'setEpisode'      	;1
	14  384  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'intval'         	;1
	15  384  FETCH_DIM_FUNC_ARG/93     $8=       16?0                 12:2                	;1
	16  384  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
	17  384  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	18  384  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
	19  384  DO_FCALL/60               ?8        ?0                   ?0                  	;0
	20  386  FETCH_DIM_R/81            $11=      16?0                 13:3                	;0	<<12
	21  386  RETURN/62                 ?0        $11                  ?0                  	;0
	22  387  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
	*/
}
function {closure}($matches)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   553  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   553  BIND_STATIC/183           ?0        16?1                 0:'year'            	;1
	2   554  ISSET_ISEMPTY_DIM_OBJ/115 #2=       16?0                 1:1                 	;33554432
	3   554  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
	4   555  FETCH_DIM_R/81            $3=       16?0                 2:1                 	;0
	5   555  ASSIGN/38                 ?2        16?1                 $3                  	;0
	6   558  ISSET_ISEMPTY_DIM_OBJ/115 #5=       16?0                 3:2                 	;33554432	<<3
	7   558  JMPZ/43                   ?0        #5                   ?11                 	;0	>>11
	8   558  FETCH_DIM_R/81            $6=       16?0                 4:2                 	;0
	9   558  QM_ASSIGN/22              #7=       $6                   ?0                  	;0
	10  558  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
	11  558  QM_ASSIGN/22              #7=       5:''                 ?0                  	;0	<<7
	12  558  RETURN/62                 ?0        #7                   ?0                  	;0	<<10
	13  559  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}
function {closure}($matches)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   579  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   579  BIND_STATIC/183           ?0        16?1                 0:'group'           	;1
	2   580  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'strlen'          	;1
	3   580  FETCH_DIM_FUNC_ARG/93     $2=       16?0                 3:1                 	;1
	4   580  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
	5   580  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	6   580  IS_SMALLER/19             #4=       4:12                 $3                  	;0
	7   580  JMPZ/43                   ?0        #4                   ?14                 	;0	>>14
	8   581  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'preg_match'      	;3
	9   581  SEND_VAL_EX/116           ?80       7:'#(\\w+)#'         ?1                  	;0
	10  581  FETCH_DIM_FUNC_ARG/93     $5=       16?0                 8:1                 	;2
	11  581  SEND_VAR_EX/66            ?96       $5                   ?2                  	;0
	12  581  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
	13  581  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  584  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'preg_replace'    	;3	<<7
	15  584  SEND_VAL_EX/116           ?80       11:'#^\\.+|\\.+$#'   ?1                  	;0
	16  584  SEND_VAL_EX/116           ?96       12:''                ?2                  	;0
	17  584  FETCH_DIM_FUNC_ARG/93     $7=       16?0                 13:1                	;3
	18  584  SEND_VAR_EX/66            ?112      $7                   ?3                  	;0
	19  584  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	20  584  ASSIGN/38                 ?7        16?1                 $8                  	;0
	21  585  RETURN/62                 ?0        14:''                ?0                  	;0
	22  586  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
	*/
}
/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   2    NOP/0                     ?0        ?0                   ?0                  	;0
1   634  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/
?>