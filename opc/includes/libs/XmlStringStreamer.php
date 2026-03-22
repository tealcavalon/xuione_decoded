<?php


/**
 * The base class for the xml-string-streamer
 */
class XmlStringStreamer
{
	/**
     * The current parser
     * @var ParserInterface
     */
	protected $parser;
	/**
     * The current stream
     * @var StreamInterface
     */
	protected $stream;

	/**
     * Constructs the XML streamer
     * @param ParserInterface $parser A parser with options set
     * @param StreamInterface $stream A stream for the parser to use
     */
	public function __construct(ParserInterface $parser, StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  30  RECV/63                   16?0=     ?1                   ?0                  	;0
		1  30  RECV/63                   16?1=     ?2                   ?16                 	;0
		2  32  ASSIGN_OBJ/136            ?0        ?1668302072          0:'parser'          	;0
		3  32  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  33  ASSIGN_OBJ/136            ?1        ?1668302072          1:'stream'          	;0
		5  33  OP_DATA/137               ?0        16?1                 ?0                  	;0
		6  34  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Convenience method for creating a StringWalker parser with a File stream
     * @param  string|resource $file    File path or handle
     * @param  array           $options Parser configuration
     * @return XmlStringStreamer        A streamer ready for use
     */
	static public function createStringWalkerParser($file, $options)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  42  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  42  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
		2  44  NEW/68                    $4=       1:'File'             ?128                	;2
		3  44  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4  44  SEND_VAL_EX/116           ?96       3:16384              ?2                  	;0
		5  44  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		6  44  ASSIGN/38                 ?2        16?2                 $4                  	;0
		7  45  NEW/68                    $7=       4:'StringWalker'     ?96                 	;1
		8  45  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		9  45  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		10 45  ASSIGN/38                 ?5        16?3                 $7                  	;0
		11 46  NEW/68                    $10=      6:'XmlStringStreamer' ?128                	;2
		12 46  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13 46  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		14 46  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15 46  RETURN/62                 ?0        $10                  ?0                  	;0
		16 47  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Convenience method for creating a UniqueNode parser with a File stream
     * @param  string|resource $file    File path or handle
     * @param  array           $options Parser configuration
     * @return XmlStringStreamer        A streamer ready for use
     */
	static public function createUniqueNodeParser($file, $options)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  55  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  55  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
		2  57  NEW/68                    $4=       1:'File'             ?128                	;2
		3  57  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4  57  SEND_VAL_EX/116           ?96       3:16384              ?2                  	;0
		5  57  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		6  57  ASSIGN/38                 ?2        16?2                 $4                  	;0
		7  58  NEW/68                    $7=       4:'UniqueNode'       ?96                 	;1
		8  58  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		9  58  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		10 58  ASSIGN/38                 ?5        16?3                 $7                  	;0
		11 59  NEW/68                    $10=      6:'XmlStringStreamer' ?128                	;2
		12 59  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		13 59  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		14 59  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15 59  RETURN/62                 ?0        $10                  ?0                  	;0
		16 60  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Gets the next node from the parser
     * @return bool|string The xml string or false
     */
	public function getNode()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  68  FETCH_OBJ_R/82            $0=       ?4442274             0:'parser'          	;0
		1  68  INIT_METHOD_CALL/112      ?0        $0                   1:'getNodeFrom'     	;1
		2  68  FETCH_OBJ_FUNC_ARG/94     $1=       ?2670193744          3:'stream'          	;1
		3  68  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		4  68  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5  68  RETURN/62                 ?0        $2                   ?0                  	;0
		6  69  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}
}

/**
 * Interface describing a parser
 */
interface ParserInterface
{
	/**
     * Parser contructor
     * @param array $options An options array decided by the parser implementation
     */
	public function __construct(array $options);
	/**
     * Tries to retrieve the next node or returns false
     * @param  StreamInterface $stream The stream to use
     * @return string|bool             The next xml node or false if one could not be retrieved
     */
	public function getNodeFrom(StreamInterface $stream);
	/**
     * Get the extracted container XML, if called before the whole stream is parsed, the XML returned can be invalid due to missing closing tags
     * @return string XML string
     */
	public function getExtractedContainer();
}

/**
 * The string walker parser builds the XML nodes by fetching one element at a time until a certain depth is re-reached
 */
class StringWalker
{
	/**
     * Holds the parser configuration
     * @var array
     */
	protected $options;
	/**
     * Is this the first run?
     * @var boolean
     */
	protected $firstRun = true;
	/**
     * What depth are we currently at?
     * @var integer
     */
	protected $depth = 0;
	/**
     * The latest chunk from the stream
     * @var string
     */
	protected $chunk;
	/**
     * Last XML node in the making, used for anti-freeze detection
     * @var null|string
     */
	protected $lastChunk;
	/**
     * XML node in the making
     * @var null|string
     */
	protected $shaved;
	/**
     * Whether to capture or not
     * @var boolean
     */
	protected $capture = false;
	/**
     * If extractContainer is true, this will grow with the XML captured before and after the specified capture depth
     * @var string
     */
	protected $containerXml = '';

	/**
     * Parser contructor
     * @param array $options An options array
     */
	public function __construct(array $options)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   154  RECV_INIT/64              16?0=     ?1                   0:array (
)         	;0
		1   156  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'array_merge'     	;2
		2   157  SEND_VAL_EX/116           ?80       4:array (
  'captureDepth' => 2,
  'expectGT' => false,
  'tags' => 
  array (
    0 => 
    array (
      0 => '<?',
      1 => '?>',
      2 => 0,
    ),
    1 => 
    array (
      0 => '<!--',
      1 => '-->',
      2 => 0,
    ),
    2 => 
    array (
      0 => '<![CDATA[',
      1 => ']]>',
      2 => 0,
    ),
    3 => 
    array (
      0 => '<!',
      1 => '>',
      2 => 0,
    ),
    4 => 
    array (
      0 => '</',
      1 => '>',
      2 => -1,
    ),
    5 => 
    array (
      0 => '<',
      1 => '/>',
      2 => 0,
    ),
    6 => 
    array (
      0 => '<',
      1 => '>',
      2 => 1,
    ),
  ),
  'tagsWithAllowedGT' => 
  array (
    0 => 
    array (
      0 => '<!--',
      1 => '-->',
    ),
    1 => 
    array (
      0 => '<![CDATA[',
      1 => ']]>',
    ),
  ),
  'extractContainer' => false,
) ?1                  	;0
		3   173  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		4   173  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5   156  ASSIGN_OBJ/136            ?0        ?0                   1:'options'         	;0
		6   173  OP_DATA/137               ?0        $2                   ?0                  	;0
		7   174  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Shaves off the next element from the chunk
     * @return string[]|bool Either a shaved off element array(0 => Captured element, 1 => Data from last shaving point up to and including captured element) or false if one could not be obtained
     */
	protected function shave()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   182  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'preg_match'      	;4
		1   182  SEND_VAL_EX/116           ?80       2:'/<[^>]+>/'        ?1                  	;0
		2   182  FETCH_OBJ_FUNC_ARG/94     $8=       ?1663264600          3:'chunk'           	;2
		3   182  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		4   182  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		5   182  FETCH_CONSTANT/99         #9=       ?0                   4:'PREG_OFFSET_CAPTURE'	;16
		6   182  SEND_VAL_EX/116           ?128      #9                   ?4                  	;0
		7   182  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
		8   184  ISSET_ISEMPTY_DIM_OBJ/115 #11=      16?0                 7:0                 	;33554432
		9   184  JMPZ_EX/46                #11=      #11                  ?13                 	;0	>>13
		10  184  FETCH_DIM_IS/90           $12=      16?0                 8:0                 	;0
		11  184  ISSET_ISEMPTY_DIM_OBJ/115 #13=      $12                  9:0                 	;33554432
		12  184  BOOL/52                   #11=      #13                  ?0                  	;0
		13  184  JMPZ_EX/46                #11=      #11                  ?17                 	;0	>>17	<<9
		14  184  FETCH_DIM_IS/90           $14=      16?0                 10:0                	;0
		15  184  ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  11:1                	;33554432
		16  184  BOOL/52                   #11=      #15                  ?0                  	;0
		17  184  JMPZ/43                   ?0        #11                  ?101                	;0	>>101	<<13
		18  185  FETCH_DIM_R/81            $16=      16?0                 12:0                	;0
		19  185  FETCH_LIST/98             $17=      $16                  13:0                	;0
		20  185  ASSIGN/38                 ?10       16?1                 $17                 	;0
		21  185  FETCH_LIST/98             $19=      $16                  14:1                	;0
		22  185  ASSIGN/38                 ?12       16?2                 $19                 	;0
		23  185  FREE/70                   ?0        $16                  ?0                  	;0
		24  187  FETCH_OBJ_R/82            $21=      ?112                 15:'options'        	;0
		25  187  FETCH_DIM_R/81            $22=      $21                  16:'expectGT'       	;0
		26  187  JMPZ/43                   ?0        $22                  ?79                 	;0	>>79
		27  189  FETCH_OBJ_R/82            $23=      ?2670193104          17:'options'        	;0
		28  189  FETCH_DIM_R/81            $24=      $23                  18:'tagsWithAllowedGT'	;0
		29  189  FE_RESET_R/77             $25=      $24                  ?78                 	;0
		30  189  FE_FETCH_R/78             ?0        $25                  16?3                	;78	>>78	<<77
		31  190  FETCH_LIST/98             $26=      16?3                 19:0                	;0
		32  190  ASSIGN/38                 ?19       16?4                 $26                 	;0
		33  190  FETCH_LIST/98             $28=      16?3                 20:1                	;0
		34  190  ASSIGN/38                 ?21       16?5                 $28                 	;0
		35  192  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'substr'         	;3
		36  192  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		37  192  SEND_VAL_EX/116           ?96       23:0                 ?2                  	;0
		38  192  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'strlen'         	;1
		39  192  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		40  192  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
		41  192  SEND_VAR_NO_REF_EX/50     ?112      $30                  ?3                  	;0
		42  192  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		43  192  IS_IDENTICAL/15           #32=      $31                  16?4                	;0
		44  192  JMPZ/43                   ?0        #32                  ?77                 	;0	>>77
		45  195  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'substr'         	;2
		46  195  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		47  195  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'strlen'         	;1
		48  195  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		49  195  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		50  195  MUL/3                     #34=      30:-1                $33                 	;0
		51  195  SEND_VAL_EX/116           ?96       #34                  ?2                  	;0
		52  195  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
		53  195  IS_NOT_IDENTICAL/16       #36=      $35                  16?5                	;0
		54  195  JMPZ/43                   ?0        #36                  ?77                 	;0	>>77
		55  197  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'strpos'         	;2
		56  197  FETCH_OBJ_FUNC_ARG/94     $37=      ?2670192256          33:'chunk'          	;1
		57  197  SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
		58  197  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		59  197  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
		60  197  ASSIGN/38                 ?31       16?6                 $38                 	;0
		61  198  IS_IDENTICAL/15           #40=      16?6                 34:false            	;0
		62  198  JMPZ/43                   ?0        #40                  ?65                 	;0	>>65
		63  201  FE_FREE/127               ?0        $25                  ?1                  	;1
		64  201  RETURN/62                 ?0        35:false             ?0                  	;0
		65  205  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'substr'         	;3	<<62
		66  205  FETCH_OBJ_FUNC_ARG/94     $41=      ?2670192256          38:'chunk'          	;1
		67  205  SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
		68  205  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		69  205  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'strlen'         	;1
		70  205  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		71  205  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
		72  205  ADD/1                     #43=      16?6                 $42                 	;0
		73  205  SUB/2                     #44=      #43                  16?2                	;0
		74  205  SEND_VAL_EX/116           ?112      #44                  ?3                  	;0
		75  205  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
		76  205  ASSIGN/38                 ?38       16?1                 $45                 	;0
		77  205  JMP/42                    ?0        ?30                  ?0                  	;0	>>30	<<44,54
		78  205  FE_FREE/127               ?0        $25                  ?0                  	;0	<<29
		79  212  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'substr'         	;3	<<26
		80  212  FETCH_OBJ_FUNC_ARG/94     $47=      ?1667558344          43:'chunk'          	;1
		81  212  SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
		82  212  SEND_VAL_EX/116           ?96       44:0                 ?2                  	;0
		83  212  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		84  212  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
		85  212  ASSIGN/38                 ?41       16?7                 $48                 	;0
		86  215  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'substr'         	;2
		87  215  FETCH_OBJ_FUNC_ARG/94     $51=      ?1667558344          48:'chunk'          	;1
		88  215  SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
		89  215  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'strlen'         	;1
		90  215  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		91  215  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
		92  215  ADD/1                     #53=      16?2                 $52                 	;0
		93  215  SEND_VAL_EX/116           ?96       #53                  ?2                  	;0
		94  215  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
		95  215  ASSIGN_OBJ/136            ?42       ?2670193808          45:'chunk'          	;0
		96  215  OP_DATA/137               ?0        $54                  ?0                  	;0
		97  217  INIT_ARRAY/71             #55=      16?1                 ?0                  	;8
		98  217  CONCAT/8                  #56=      16?7                 16?1                	;0
		99  217  ADD_ARRAY_ELEMENT/72      #55=      #56                  ?0                  	;0
		100 217  RETURN/62                 ?0        #55                  ?0                  	;0
		101 220  RETURN/62                 ?0        51:false             ?0                  	;0	<<17
		102 221  NOP/0                     ?0        52:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Extract XML compatible tag head and tail
     * @param  string $element XML element
     * @return string[] 0 => Opening tag, 1 => Closing tag
     */
	protected function getEdges($element)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   228  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   232  FETCH_OBJ_R/82            $5=       ?1                   0:'options'         	;0
		2   232  FETCH_DIM_R/81            $6=       $5                   1:'tags'            	;0
		3   232  FE_RESET_R/77             $7=       $6                   ?35                 	;0
		4   232  FE_FETCH_R/78             ?0        $7                   16?1                	;35	>>35	<<34
		5   233  FETCH_LIST/98             $8=       16?1                 2:0                 	;0
		6   233  ASSIGN/38                 ?4        16?2                 $8                  	;0
		7   233  FETCH_LIST/98             $10=      16?1                 3:1                 	;0
		8   233  ASSIGN/38                 ?6        16?3                 $10                 	;0
		9   233  FETCH_LIST/98             $12=      16?1                 4:2                 	;0
		10  233  ASSIGN/38                 ?8        16?4                 $12                 	;0
		11  235  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'substr'          	;3
		12  235  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13  235  SEND_VAL_EX/116           ?96       7:0                  ?2                  	;0
		14  235  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'strlen'          	;1
		15  235  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		16  235  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		17  235  SEND_VAR_NO_REF_EX/50     ?112      $14                  ?3                  	;0
		18  235  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		19  235  IS_IDENTICAL/15           #16=      $15                  16?2                	;0
		20  235  JMPZ_EX/46                #16=      #16                  ?31                 	;0	>>31
		21  236  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'substr'         	;2
		22  236  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		23  236  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'strlen'         	;1
		24  236  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		25  236  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		26  236  MUL/3                     #18=      14:-1                $17                 	;0
		27  236  SEND_VAL_EX/116           ?96       #18                  ?2                  	;0
		28  236  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		29  236  IS_IDENTICAL/15           #20=      $19                  16?3                	;0
		30  236  BOOL/52                   #16=      #20                  ?0                  	;0
		31  236  JMPZ/43                   ?0        #16                  ?34                 	;0	>>34	<<20
		32  238  FE_FREE/127               ?0        $7                   ?0                  	;1
		33  238  RETURN/62                 ?0        16?1                 ?0                  	;0
		34  238  JMP/42                    ?0        ?4                   ?0                  	;0	>>4	<<31
		35  238  FE_FREE/127               ?0        $7                   ?0                  	;0	<<3
		36  241  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * The shave method must be able to request more data even though there isn't any more to fetch from the stream, this method wraps the getChunk call so that it returns true as long as there is XML data left
     * @param  StreamInterface $stream The stream to read from
     * @return bool Returns whether there is more XML data or not
     */
	protected function prepareChunk(StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   248  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   250  FETCH_OBJ_R/82            $2=       ?4436759             0:'firstRun'        	;0
		2   250  BOOL_NOT/13               #3=       $2                   ?0                  	;0
		3   250  JMPZ_EX/46                #3=       #3                   ?9                  	;0	>>9
		4   250  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_null'         	;1
		5   250  FETCH_OBJ_FUNC_ARG/94     $4=       ?0                   3:'shaved'          	;1
		6   250  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		7   250  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		8   250  BOOL/52                   #3=       $5                   ?0                  	;0
		9   250  JMPZ/43                   ?0        #3                   ?14                 	;0	>>14	<<3
		10  252  ASSIGN_OBJ/136            ?4        ?4428375             4:'shaved'          	;0
		11  252  OP_DATA/137               ?0        5:''                 ?0                  	;0
		12  254  RETURN/62                 ?0        6:true               ?0                  	;0
		13  254  JMP/42                    ?0        ?21                  ?0                  	;0	>>21
		14  255  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_null'         	;1	<<9
		15  255  FETCH_OBJ_FUNC_ARG/94     $7=       ?2670193552          9:'shaved'          	;1
		16  255  SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
		17  255  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		18  255  JMPZ/43                   ?0        $8                   ?21                 	;0	>>21
		19  256  ASSIGN_OBJ/136            ?7        ?0                   10:'shaved'         	;0
		20  256  OP_DATA/137               ?0        11:''                ?0                  	;0
		21  259  INIT_METHOD_CALL/112      ?0        16?0                 12:'getChunk'       	;0	<<13,18
		22  259  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		23  259  ASSIGN/38                 ?9        16?1                 $10                 	;0
		24  261  IS_NOT_IDENTICAL/16       #12=      16?1                 14:false            	;0
		25  261  JMPZ/43                   ?0        #12                  ?30                 	;0	>>30
		26  262  ASSIGN_CONCAT/30          ?11       ?2670193936          15:'chunk'          	;136
		27  262  OP_DATA/137               ?0        16?1                 ?0                  	;0
		28  264  RETURN/62                 ?0        16:true              ?0                  	;0
		29  264  JMP/42                    ?0        ?45                  ?0                  	;0	>>45
		30  266  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'trim'           	;1	<<25
		31  266  FETCH_OBJ_FUNC_ARG/94     $14=      ?5126                19:'chunk'          	;1
		32  266  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		33  266  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		34  266  IS_NOT_IDENTICAL/16       #16=      $15                  20:''               	;0
		35  266  JMPZ_EX/46                #16=      #16                  ?40                 	;0	>>40
		36  266  FETCH_OBJ_R/82            $17=      ?1667565520          21:'chunk'          	;0
		37  266  FETCH_OBJ_R/82            $18=      ?1667565520          22:'lastChunk'      	;0
		38  266  IS_NOT_IDENTICAL/16       #19=      $17                  $18                 	;0
		39  266  BOOL/52                   #16=      #19                  ?0                  	;0
		40  266  JMPZ/43                   ?0        #16                  ?45                 	;0	>>45	<<35
		41  268  FETCH_OBJ_R/82            $21=      ?2670193376          24:'chunk'          	;0
		42  268  ASSIGN_OBJ/136            ?18       ?15                  23:'lastChunk'      	;0
		43  268  OP_DATA/137               ?0        $21                  ?0                  	;0
		44  270  RETURN/62                 ?0        25:true              ?0                  	;0
		45  274  RETURN/62                 ?0        26:false             ?0                  	;0	<<29,40
		46  275  NOP/0                     ?0        27:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Get the extracted container XML, if called before the whole stream is parsed, the XML returned will most likely be invalid due to missing closing tags
     * @return string XML string
     * @throws Exception if the extractContainer option isn't true
     */
	public function getExtractedContainer()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   284  FETCH_OBJ_R/82            $0=       ?1667566064          0:'options'         	;0
		1   284  FETCH_DIM_R/81            $1=       $0                   1:'extractContainer'	;0
		2   284  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		3   284  JMPZ/43                   ?0        #2                   ?8                  	;0	>>8
		4   285  NEW/68                    $3=       2:'Exception'        ?96                 	;1
		5   285  SEND_VAL_EX/116           ?80       4:'This method requires the \'extractContainer\' option to be true' ?1                  	;0
		6   285  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		7   285  THROW/108                 ?0        $3                   ?0                  	;0
		8   288  FETCH_OBJ_R/82            $5=       ?0                   5:'containerXml'    	;0	<<3
		9   288  RETURN/62                 ?0        $5                   ?0                  	;0
		10  289  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Tries to retrieve the next node or returns false
     * @param  StreamInterface $stream The stream to use
     * @return string|bool             The next xml node or false if one could not be retrieved
     */
	public function getNodeFrom(StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   296  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   299  JMP/42                    ?0        ?88                  ?0                  	;0	>>88
		2   300  ASSIGN_OBJ/136            ?0        ?4                   0:'firstRun'        	;0	<<91
		3   300  OP_DATA/137               ?0        1:false              ?0                  	;0
		4   302  JMP/42                    ?0        ?84                  ?0                  	;0	>>84
		5   303  FETCH_LIST/98             $10=      16?1                 2:0                 	;0	<<87
		6   303  ASSIGN/38                 ?2        16?2                 $10                 	;0
		7   303  FETCH_LIST/98             $12=      16?1                 3:1                 	;0
		8   303  ASSIGN/38                 ?4        16?3                 $12                 	;0
		9   306  INIT_METHOD_CALL/112      ?0        ?2670193328          4:'getEdges'        	;1
		10  306  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		11  306  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		12  306  FETCH_LIST/98             $15=      $14                  6:0                 	;0
		13  306  ASSIGN/38                 ?7        16?4                 $15                 	;0
		14  306  FETCH_LIST/98             $17=      $14                  7:1                 	;0
		15  306  ASSIGN/38                 ?9        16?5                 $17                 	;0
		16  306  FETCH_LIST/98             $19=      $14                  8:2                 	;0
		17  306  ASSIGN/38                 ?11       16?6                 $19                 	;0
		18  306  FREE/70                   ?0        $14                  ?0                  	;0
		19  309  ASSIGN_ADD/23             ?12       ?10                  9:'depth'           	;136
		20  309  OP_DATA/137               ?0        16?6                 ?0                  	;0
		21  311  ASSIGN/38                 ?13       16?7                 10:false            	;0
		22  312  ASSIGN/38                 ?14       16?8                 11:false            	;0
		23  315  FETCH_OBJ_R/82            $24=      ?5126                12:'depth'          	;0
		24  315  FETCH_OBJ_R/82            $25=      ?1668121632          13:'options'        	;0
		25  315  FETCH_DIM_R/81            $26=      $25                  14:'captureDepth'   	;0
		26  315  IS_IDENTICAL/15           #27=      $24                  $26                 	;0
		27  315  JMPZ_EX/46                #27=      #27                  ?30                 	;0	>>30
		28  315  IS_SMALLER/19             #28=      15:0                 16?6                	;0
		29  315  BOOL/52                   #27=      #28                  ?0                  	;0
		30  315  JMPZ/43                   ?0        #27                  ?34                 	;0	>>34	<<27
		31  317  ASSIGN_OBJ/136            ?20       ?15                  16:'capture'        	;0
		32  317  OP_DATA/137               ?0        17:true              ?0                  	;0
		33  317  JMP/42                    ?0        ?72                  ?0                  	;0	>>72
		34  318  FETCH_OBJ_R/82            $30=      ?4583821             18:'depth'          	;0	<<30
		35  318  FETCH_OBJ_R/82            $31=      ?1668121600          19:'options'        	;0
		36  318  FETCH_DIM_R/81            $32=      $31                  20:'captureDepth'   	;0
		37  318  SUB/2                     #33=      $32                  21:1                	;0
		38  318  IS_IDENTICAL/15           #34=      $30                  #33                 	;0
		39  318  JMPZ_EX/46                #34=      #34                  ?42                 	;0	>>42
		40  318  IS_SMALLER/19             #35=      16?6                 22:0                	;0
		41  318  BOOL/52                   #34=      #35                  ?0                  	;0
		42  318  JMPZ/43                   ?0        #34                  ?49                 	;0	>>49	<<39
		43  320  ASSIGN/38                 ?27       16?7                 23:true             	;0
		44  321  ASSIGN_OBJ/136            ?28       ?2670193120          24:'capture'        	;0
		45  321  OP_DATA/137               ?0        25:false             ?0                  	;0
		46  324  ASSIGN_CONCAT/30          ?29       ?4397406             26:'shaved'         	;136
		47  324  OP_DATA/137               ?0        16?3                 ?0                  	;0
		48  324  JMP/42                    ?0        ?72                  ?0                  	;0	>>72
		49  325  FETCH_OBJ_R/82            $39=      ?2670192960          27:'options'        	;0	<<42
		50  325  FETCH_DIM_R/81            $40=      $39                  28:'extractContainer'	;0
		51  325  JMPZ_EX/46                #41=      $40                  ?57                 	;0	>>57
		52  325  FETCH_OBJ_R/82            $42=      ?2670192752          29:'depth'          	;0
		53  325  FETCH_OBJ_R/82            $43=      ?1663262760          30:'options'        	;0
		54  325  FETCH_DIM_R/81            $44=      $43                  31:'captureDepth'   	;0
		55  325  IS_SMALLER/19             #45=      $42                  $44                 	;0
		56  325  BOOL/52                   #41=      #45                  ?0                  	;0
		57  325  JMPZ/43                   ?0        #41                  ?61                 	;0	>>61	<<51
		58  327  ASSIGN_CONCAT/30          ?37       ?0                   32:'containerXml'   	;136
		59  327  OP_DATA/137               ?0        16?2                 ?0                  	;0
		60  327  JMP/42                    ?0        ?72                  ?0                  	;0	>>72
		61  328  IS_IDENTICAL/15           #47=      16?6                 33:0                	;0	<<57
		62  328  JMPZ_EX/46                #47=      #47                  ?69                 	;0	>>69
		63  328  FETCH_OBJ_R/82            $48=      ?2670192064          34:'depth'          	;0
		64  328  ADD/1                     #49=      $48                  35:1                	;0
		65  328  FETCH_OBJ_R/82            $50=      ?8192                36:'options'        	;0
		66  328  FETCH_DIM_R/81            $51=      $50                  37:'captureDepth'   	;0
		67  328  IS_IDENTICAL/15           #52=      #49                  $51                 	;0
		68  328  BOOL/52                   #47=      #52                  ?0                  	;0
		69  328  JMPZ/43                   ?0        #47                  ?72                 	;0	>>72	<<62
		70  330  ASSIGN/38                 ?44       16?8                 38:true             	;0
		71  331  ASSIGN/38                 ?45       16?7                 39:true             	;0
		72  335  FETCH_OBJ_R/82            $55=      ?1667571648          40:'capture'        	;0	<<33,48,60,69
		73  335  JMPNZ_EX/47               #56=      $55                  ?75                 	;0	>>75
		74  335  BOOL/52                   #56=      16?8                 ?0                  	;0
		75  335  JMPZ/43                   ?0        #56                  ?78                 	;0	>>78	<<73
		76  336  ASSIGN_CONCAT/30          ?48       ?0                   41:'shaved'         	;136
		77  336  OP_DATA/137               ?0        16?3                 ?0                  	;0
		78  339  JMPZ/43                   ?0        16?7                 ?84                 	;0	>>84	<<75
		79  341  FETCH_OBJ_R/82            $58=      ?4583821             42:'shaved'         	;0
		80  341  ASSIGN/38                 ?50       16?7                 $58                 	;0
		81  342  ASSIGN_OBJ/136            ?51       ?2670193296          43:'shaved'         	;0
		82  342  OP_DATA/137               ?0        44:NULL              ?0                  	;0
		83  344  RETURN/62                 ?0        16?7                 ?0                  	;0
		84  302  INIT_METHOD_CALL/112      ?0        ?4397406             45:'shave'          	;0	<<4,78
		85  302  DO_FCALL/60               $61=      ?0                   ?0                  	;0
		86  302  ASSIGN/38                 $62=      16?1                 $61                 	;0
		87  302  JMPNZ/44                  ?0        $62                  ?5                  	;0	>>5
		88  299  INIT_METHOD_CALL/112      ?0        ?5                   47:'prepareChunk'   	;1	<<1
		89  299  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		90  299  DO_FCALL/60               $63=      ?0                   ?0                  	;0
		91  299  JMPNZ/44                  ?0        $63                  ?2                  	;0	>>2
		92  349  RETURN/62                 ?0        49:false             ?0                  	;0
		93  350  NOP/0                     ?0        50:NULL              ?0                  	;4294967295
		*/
	}
}

/**
 * The unique node parser starts at a given element name and flushes when its corresponding closing tag is found
 */
class UniqueNode
{
	public const FIND_OPENING_TAG_ACTION = 0;
	public const FIND_CLOSING_TAG_ACTION = 1;

	/**
     * Current working XML blob
     * @var string
     */
	private $workingBlob = '';
	/**
     * The flushed node
     * @var string
     */
	private $flushed = '';
	/**
     * Start position of the given element in the workingBlob
     * @var integer
     */
	private $startPos = 0;
	/**
     * Records how far we've searched in the XML blob so far
     * @var integer
     */
	private $hasSearchedUntilPos = -1;
	/**
     * Next action to perform
     * @var integer
     */
	private $nextAction = 0;
	/**
     * Indicates short closing tag
     * @var bool
     */
	private $shortClosedTagNow = false;
	/**
     * If extractContainer is true, this will grow with the XML captured before and after the specified capture depth
     * @var string
     */
	protected $containerXml = '';
	/**
     * Whether we're found our first capture target or not
     * @var bool
     */
	protected $preCapture = true;

	/**
     * Parser constructor
     * @param array $options An options array
     * @throws Exception if the required option uniqueNode isn't set
     */
	public function __construct(array $options)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   415  RECV_INIT/64              16?0=     ?1                   0:array (
)         	;0
		1   417  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'array_merge'     	;2
		2   418  SEND_VAL_EX/116           ?80       4:array (
  'extractContainer' => false,
) ?1                  	;0
		3   419  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		4   419  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5   417  ASSIGN_OBJ/136            ?0        ?1667622880          1:'options'         	;0
		6   419  OP_DATA/137               ?0        $2                   ?0                  	;0
		7   421  FETCH_OBJ_IS/91           $3=       ?1667567760          5:'options'         	;0
		8   421  ISSET_ISEMPTY_DIM_OBJ/115 #4=       $3                   6:'uniqueNode'      	;33554432
		9   421  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		10  421  JMPZ/43                   ?0        #5                   ?15                 	;0	>>15
		11  422  NEW/68                    $6=       7:'Exception'        ?96                 	;1
		12  422  SEND_VAL_EX/116           ?80       9:'Required option \'uniqueNode\' not set' ?1                  	;0
		13  422  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		14  422  THROW/108                 ?0        $6                   ?0                  	;0
		15  424  NOP/0                     ?0        10:NULL              ?0                  	;4294967295	<<10
		*/
	}

	/**
     * Search the blob for our unique node's opening tag
     * @return bool|int Either returns the char position of the opening tag or false
     */
	protected function getOpeningTagPos()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   432  ASSIGN/38                 ?0        16?0                 0:false             	;0
		1   433  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'preg_match'      	;4
		2   433  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'preg_quote'      	;1
		3   433  FETCH_OBJ_FUNC_ARG/94     $3=       ?2670192240          5:'options'         	;1
		4   433  FETCH_DIM_FUNC_ARG/93     $4=       $3                   6:'uniqueNode'      	;1
		5   433  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		6   433  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   433  CONCAT/8                  #6=       7:'/<'               $5                  	;0
		8   433  CONCAT/8                  #7=       #6                   8:'(>| )/'          	;0
		9   433  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
		10  433  FETCH_OBJ_FUNC_ARG/94     $8=       ?4431760             9:'workingBlob'     	;2
		11  433  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		12  433  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		13  433  FETCH_CONSTANT/99         #9=       ?0                   10:'PREG_OFFSET_CAPTURE'	;16
		14  433  SEND_VAL_EX/116           ?128      #9                   ?4                  	;0
		15  433  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		16  433  IS_IDENTICAL/15           #11=      $10                  13:1                	;0
		17  433  JMPZ/43                   ?0        #11                  ?21                 	;0	>>21
		18  434  FETCH_DIM_R/81            $12=      16?1                 14:0                	;0
		19  434  FETCH_DIM_R/81            $13=      $12                  15:1                	;0
		20  434  ASSIGN/38                 ?12       16?0                 $13                 	;0
		21  438  IS_IDENTICAL/15           #15=      16?0                 16:false            	;0	<<17
		22  438  JMPZ/43                   ?0        #15                  ?30                 	;0	>>30
		23  439  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'strlen'         	;1
		24  439  FETCH_OBJ_FUNC_ARG/94     $17=      ?2670193248          20:'workingBlob'    	;1
		25  439  SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
		26  439  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		27  439  SUB/2                     #19=      $18                  21:1                	;0
		28  439  ASSIGN_OBJ/136            ?14       ?4396752             17:'hasSearchedUntilPos'	;0
		29  439  OP_DATA/137               ?0        #19                  ?0                  	;0
		30  442  RETURN/62                 ?0        16?0                 ?0                  	;0	<<22
		31  443  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Search short closing tag in $workingBlob before
     *
     * @param string $workingBlob
     * @param int $len
     * @return bool|int Either returns the char position of the short closing tag or false
     */
	private function checkShortClosingTag($workingBlob, $len)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   452  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   452  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   453  ASSIGN/38                 ?0        16?2                 0:false             	;0
		3   454  JMP/42                    ?0        ?38                  ?0                  	;0	>>38
		4   455  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'substr'          	;3	<<45
		5   455  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   455  FETCH_OBJ_FUNC_ARG/94     $7=       ?1668117216          3:'startPos'        	;2
		7   455  SEND_VAR_EX/66            ?96       $7                   ?2                  	;0
		8   455  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'strlen'          	;1
		9   455  SEND_VAL_EX/116           ?80       6:'/>'               ?1                  	;0
		10  455  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		11  455  ADD/1                     #9=       16?1                 $8                  	;0
		12  455  FETCH_OBJ_R/82            $10=      ?2670193088          7:'startPos'        	;0
		13  455  SUB/2                     #11=      #9                   $10                 	;0
		14  455  SEND_VAL_EX/116           ?112      #11                  ?3                  	;0
		15  455  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		16  455  ASSIGN/38                 ?7        16?3                 $12                 	;0
		17  456  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'substr_count'    	;2
		18  456  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		19  456  SEND_VAL_EX/116           ?96       10:'<'               ?2                  	;0
		20  456  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		21  456  ASSIGN/38                 ?9        16?4                 $14                 	;0
		22  457  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'substr_count'   	;2
		23  457  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		24  457  SEND_VAL_EX/116           ?96       13:'/>'              ?2                  	;0
		25  457  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		26  457  ASSIGN/38                 ?11       16?5                 $16                 	;0
		27  458  IS_IDENTICAL/15           #18=      16?4                 16?5                	;0
		28  458  JMPZ_EX/46                #18=      #18                  ?31                 	;0	>>31
		29  458  IS_IDENTICAL/15           #19=      16?4                 14:1                	;0
		30  458  BOOL/52                   #18=      #19                  ?0                  	;0
		31  458  JMPZ/43                   ?0        #18                  ?38                 	;0	>>38	<<28
		32  459  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'strlen'         	;1
		33  459  SEND_VAL_EX/116           ?80       17:'/>'              ?1                  	;0
		34  459  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		35  459  ADD/1                     #21=      16?1                 $20                 	;0
		36  459  ASSIGN/38                 ?16       16?2                 #21                 	;0
		37  460  BRK/254                   ?0        ?46                  0:1                 	;0
		38  454  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'strpos'         	;3	<<3,31
		39  454  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		40  454  SEND_VAL_EX/116           ?96       20:'/>'              ?2                  	;0
		41  454  ADD/1                     #23=      16?1                 21:1                	;0
		42  454  SEND_VAL_EX/116           ?112      #23                  ?3                  	;0
		43  454  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		44  454  ASSIGN/38                 $25=      16?1                 $24                 	;0
		45  454  JMPNZ/44                  ?0        $25                  ?4                  	;0	>>4
		46  463  RETURN/62                 ?0        16?2                 ?0                  	;0
		47  464  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Search the blob for our unique node's closing tag
     * @return bool|int Either returns the char position of the closing tag or false
     */
	protected function getClosingTagPos()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   472  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strpos'          	;2
		1   472  FETCH_OBJ_FUNC_ARG/94     $2=       ?3                   2:'workingBlob'     	;1
		2   472  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		3   472  FETCH_OBJ_R/82            $3=       ?1667579192          3:'options'         	;0
		4   472  FETCH_DIM_R/81            $4=       $3                   4:'uniqueNode'      	;0
		5   472  CONCAT/8                  #5=       5:'</'               $4                  	;0
		6   472  CONCAT/8                  #6=       #5                   6:'>'               	;0
		7   472  SEND_VAL_EX/116           ?96       #6                   ?2                  	;0
		8   472  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		9   472  ASSIGN/38                 ?6        16?0                 $7                  	;0
		10  473  IS_IDENTICAL/15           #9=       16?0                 7:false             	;0
		11  473  JMPZ/43                   ?0        #9                   ?40                 	;0	>>40
		12  475  FETCH_OBJ_IS/91           $10=      ?2670193536          8:'options'         	;0
		13  475  ISSET_ISEMPTY_DIM_OBJ/115 #11=      $10                  9:'checkShortClosing'	;33554432
		14  475  JMPZ_EX/46                #11=      #11                  ?19                 	;0	>>19
		15  475  FETCH_OBJ_R/82            $12=      ?4443006             10:'options'        	;0
		16  475  FETCH_DIM_R/81            $13=      $12                  11:'checkShortClosing'	;0
		17  475  IS_IDENTICAL/15           #14=      $13                  12:true             	;0
		18  475  BOOL/52                   #11=      #14                  ?0                  	;0
		19  475  JMPZ/43                   ?0        #11                  ?27                 	;0	>>27	<<14
		20  476  INIT_METHOD_CALL/112      ?0        ?4412387             13:'checkShortClosingTag'	;2
		21  476  FETCH_OBJ_R/82            $15=      ?4443006             15:'workingBlob'    	;0
		22  476  SEND_VAR/117              ?80       $15                  ?1                  	;0
		23  476  FETCH_OBJ_R/82            $16=      ?4443006             16:'startPos'       	;0
		24  476  SEND_VAR/117              ?96       $16                  ?2                  	;0
		25  476  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		26  476  ASSIGN/38                 ?16       16?0                 $17                 	;0
		27  479  IS_IDENTICAL/15           #19=      16?0                 17:false            	;0	<<19
		28  479  JMPZ/43                   ?0        #19                  ?37                 	;0	>>37
		29  480  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'strlen'         	;1
		30  480  FETCH_OBJ_FUNC_ARG/94     $21=      ?1                   21:'workingBlob'    	;1
		31  480  SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
		32  480  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		33  480  SUB/2                     #23=      $22                  22:1                	;0
		34  480  ASSIGN_OBJ/136            ?18       ?4396752             18:'hasSearchedUntilPos'	;0
		35  480  OP_DATA/137               ?0        #23                  ?0                  	;0
		36  480  JMP/42                    ?0        ?39                  ?0                  	;0	>>39
		37  482  ASSIGN_OBJ/136            ?22       ?4396752             23:'shortClosedTagNow'	;0	<<28
		38  482  OP_DATA/137               ?0        24:true              ?0                  	;0
		39  482  JMP/42                    ?0        ?65                  ?0                  	;0	>>65	<<36
		40  485  FETCH_OBJ_IS/91           $25=      ?4583868             25:'options'        	;0	<<11
		41  485  ISSET_ISEMPTY_DIM_OBJ/115 #26=      $25                  26:'checkShortClosing'	;33554432
		42  485  JMPZ_EX/46                #26=      #26                  ?47                 	;0	>>47
		43  485  FETCH_OBJ_R/82            $27=      ?1669065792          27:'options'        	;0
		44  485  FETCH_DIM_R/81            $28=      $27                  28:'checkShortClosing'	;0
		45  485  IS_IDENTICAL/15           #29=      $28                  29:true             	;0
		46  485  BOOL/52                   #26=      #29                  ?0                  	;0
		47  485  JMPZ/43                   ?0        #26                  ?65                 	;0	>>65	<<42
		48  486  INIT_METHOD_CALL/112      ?0        ?4412387             30:'checkShortClosingTag'	;2
		49  486  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'substr'         	;3
		50  486  FETCH_OBJ_FUNC_ARG/94     $30=      ?1668127272          34:'workingBlob'    	;1
		51  486  SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
		52  486  SEND_VAL_EX/116           ?96       35:0                 ?2                  	;0
		53  486  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		54  486  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		55  486  SEND_VAR/117              ?80       $31                  ?1                  	;0
		56  486  FETCH_OBJ_R/82            $32=      ?0                   36:'startPos'       	;0
		57  486  SEND_VAR/117              ?96       $32                  ?2                  	;0
		58  486  DO_FCALL/60               $33=      ?0                   ?0                  	;0
		59  486  ASSIGN/38                 ?32       16?1                 $33                 	;0
		60  487  IS_NOT_IDENTICAL/16       #35=      16?1                 37:false            	;0
		61  487  JMPZ/43                   ?0        #35                  ?65                 	;0	>>65
		62  488  ASSIGN_OBJ/136            ?34       ?4396752             38:'shortClosedTagNow'	;0
		63  488  OP_DATA/137               ?0        39:true              ?0                  	;0
		64  489  ASSIGN/38                 ?35       16?0                 16?1                	;0
		65  494  RETURN/62                 ?0        16?0                 ?0                  	;0	<<39,47,61
		66  495  NOP/0                     ?0        40:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Set the start position in the workingBlob from where we should start reading when the closing tag is found
     * @param  int $startPositionInBlob Position of starting tag
     */
	protected function startSalvaging($startPositionInBlob)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   501  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   503  ASSIGN_OBJ/136            ?0        ?1668096432          0:'startPos'        	;0
		2   503  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   504  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	/**
     * Cut everything from the start position to the end position in the workingBlob (+ tag length) and flush it out for later return in getNodeFrom
     * @param  int $endPositionInBlob Position of the closing tag
     */
	protected function flush($endPositionInBlob)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   510  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   511  FETCH_OBJ_R/82            $3=       ?2670193808          0:'shortClosedTagNow'	;0
		2   511  JMPZ/43                   ?0        $3                   ?5                  	;0	>>5
		3   511  QM_ASSIGN/22              #4=       1:0                  ?0                  	;0
		4   511  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		5   511  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'strlen'          	;1	<<2
		6   511  FETCH_OBJ_R/82            $5=       ?4534362             4:'options'         	;0
		7   511  FETCH_DIM_R/81            $6=       $5                   5:'uniqueNode'      	;0
		8   511  CONCAT/8                  #7=       6:'</'               $6                  	;0
		9   511  CONCAT/8                  #8=       #7                   7:'>'               	;0
		10  511  SEND_VAL_EX/116           ?80       #8                   ?1                  	;0
		11  511  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		12  511  QM_ASSIGN/22              #4=       $9                   ?0                  	;0
		13  511  ASSIGN/38                 ?7        16?1                 #4                  	;0	<<4
		14  512  ADD/1                     #11=      16?0                 16?1                	;0
		15  512  ASSIGN/38                 ?9        16?2                 #11                 	;0
		16  513  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'substr'          	;3
		17  513  FETCH_OBJ_FUNC_ARG/94     $14=      ?4381411             11:'workingBlob'    	;1
		18  513  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		19  513  FETCH_OBJ_FUNC_ARG/94     $15=      ?4381411             12:'startPos'       	;2
		20  513  SEND_VAR_EX/66            ?96       $15                  ?2                  	;0
		21  513  FETCH_OBJ_R/82            $16=      ?2670193216          13:'startPos'       	;0
		22  513  SUB/2                     #17=      16?2                 $16                 	;0
		23  513  SEND_VAL_EX/116           ?112      #17                  ?3                  	;0
		24  513  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		25  513  ASSIGN_OBJ/136            ?10       ?2670194080          8:'flushed'         	;0
		26  513  OP_DATA/137               ?0        $18                  ?0                  	;0
		27  514  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'substr'         	;2
		28  514  FETCH_OBJ_FUNC_ARG/94     $20=      ?4381411             17:'workingBlob'    	;1
		29  514  SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
		30  514  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		31  514  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		32  514  ASSIGN_OBJ/136            ?16       ?2670194080          14:'workingBlob'    	;0
		33  514  OP_DATA/137               ?0        $21                  ?0                  	;0
		34  515  ASSIGN_OBJ/136            ?19       ?2670194080          18:'hasSearchedUntilPos'	;0
		35  515  OP_DATA/137               ?0        19:0                 ?0                  	;0
		36  516  ASSIGN_OBJ/136            ?20       ?2670194080          20:'shortClosedTagNow'	;0
		37  516  OP_DATA/137               ?0        21:false             ?0                  	;0
		38  517  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Decides whether we're to fetch more chunks from the stream or keep working with what we have.
     * @param  StreamInterface $stream The stream provider
     * @return bool                    Keep working?
     */
	protected function prepareChunk(StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   524  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   526  FETCH_OBJ_R/82            $2=       ?4633841             0:'hasSearchedUntilPos'	;0
		2   526  IS_SMALLER/19             #3=       1:-1                 $2                  	;0
		3   526  JMPZ_EX/46                #3=       #3                   ?12                 	;0	>>12
		4   526  FETCH_OBJ_R/82            $4=       ?1668353712          2:'hasSearchedUntilPos'	;0
		5   526  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'strlen'          	;1
		6   526  FETCH_OBJ_FUNC_ARG/94     $5=       ?1683261183          5:'workingBlob'     	;1
		7   526  SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
		8   526  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		9   526  SUB/2                     #7=       $6                   6:1                 	;0
		10  526  IS_SMALLER/19             #8=       $4                   #7                  	;0
		11  526  BOOL/52                   #3=       #8                   ?0                  	;0
		12  526  JMPZ/43                   ?0        #3                   ?14                 	;0	>>14	<<3
		13  528  RETURN/62                 ?0        7:true               ?0                  	;0
		14  531  INIT_METHOD_CALL/112      ?0        16?0                 8:'getChunk'        	;0	<<12
		15  531  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  531  ASSIGN/38                 ?8        16?1                 $9                  	;0
		17  533  IS_IDENTICAL/15           #11=      16?1                 10:false            	;0
		18  533  JMPZ/43                   ?0        #11                  ?32                 	;0	>>32
		19  535  FETCH_OBJ_R/82            $12=      ?1669145088          11:'hasSearchedUntilPos'	;0
		20  535  IS_IDENTICAL/15           #13=      $12                  12:-1               	;0
		21  535  JMPZ_EX/46                #13=      #13                  ?28                 	;0	>>28
		22  535  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'strlen'         	;1
		23  535  FETCH_OBJ_FUNC_ARG/94     $14=      ?0                   15:'workingBlob'    	;1
		24  535  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		25  535  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		26  535  IS_SMALLER/19             #16=      16:0                 $15                 	;0
		27  535  BOOL/52                   #13=      #16                  ?0                  	;0
		28  535  JMPZ/43                   ?0        #13                  ?30                 	;0	>>30	<<21
		29  538  RETURN/62                 ?0        17:true              ?0                  	;0
		30  540  RETURN/62                 ?0        18:false             ?0                  	;0	<<28
		31  540  JMP/42                    ?0        ?60                  ?0                  	;0	>>60
		32  544  FETCH_OBJ_R/82            $17=      ?0                   19:'nextAction'     	;0	<<18
		33  544  IS_IDENTICAL/15           #18=      $17                  20:0                	;0
		34  544  JMPZ_EX/46                #18=      #18                  ?39                 	;0	>>39
		35  544  FETCH_OBJ_R/82            $19=      ?2670193408          21:'options'        	;0
		36  544  FETCH_DIM_R/81            $20=      $19                  22:'extractContainer'	;0
		37  544  BOOL_NOT/13               #21=      $20                  ?0                  	;0
		38  544  BOOL/52                   #18=      #21                  ?0                  	;0
		39  544  JMPZ/43                   ?0        #18                  ?57                 	;0	>>57	<<34
		40  547  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'substr'         	;2
		41  547  FETCH_OBJ_FUNC_ARG/94     $23=      ?1668096528          26:'workingBlob'    	;1
		42  547  SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
		43  547  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'strlen'         	;1
		44  547  FETCH_OBJ_R/82            $24=      ?4397406             29:'options'        	;0
		45  547  FETCH_DIM_R/81            $25=      $24                  30:'uniqueNode'     	;0
		46  547  CONCAT/8                  #26=      31:'<'               $25                 	;0
		47  547  CONCAT/8                  #27=      #26                  32:'>'              	;0
		48  547  SEND_VAL_EX/116           ?80       #27                  ?1                  	;0
		49  547  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		50  547  MUL/3                     #29=      33:-1                $28                 	;0
		51  547  SEND_VAL_EX/116           ?96       #29                  ?2                  	;0
		52  547  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
		53  547  CONCAT/8                  #31=      $30                  16?1                	;0
		54  547  ASSIGN_OBJ/136            ?20       ?4420842             23:'workingBlob'    	;0
		55  547  OP_DATA/137               ?0        #31                  ?0                  	;0
		56  547  JMP/42                    ?0        ?59                  ?0                  	;0	>>59
		57  549  ASSIGN_CONCAT/30          ?30       ?4397406             34:'workingBlob'    	;136	<<39
		58  549  OP_DATA/137               ?0        16?1                 ?0                  	;0
		59  552  RETURN/62                 ?0        35:true              ?0                  	;0	<<56
		60  554  NOP/0                     ?0        36:NULL              ?0                  	;4294967295	<<31
		*/
	}

	/**
     * Tries to retrieve the next node or returns false
     * @param  StreamInterface $stream The stream to use
     * @return string|bool             The next xml node or false if one could not be retrieved
     */
	public function getNodeFrom(StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   561  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   563  JMP/42                    ?0        ?49                  ?0                  	;0	>>49
		2   565  FETCH_OBJ_R/82            $3=       ?549                 0:'nextAction'      	;0	<<52
		3   565  IS_IDENTICAL/15           #4=       $3                   1:0                 	;0
		4   565  JMPZ/43                   ?0        #4                   ?31                 	;0	>>31
		5   567  INIT_METHOD_CALL/112      ?0        ?2670193712          2:'getOpeningTagPos'	;0
		6   567  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		7   567  ASSIGN/38                 ?3        16?1                 $5                  	;0
		8   569  IS_NOT_IDENTICAL/16       #7=       16?1                 4:false             	;0
		9   569  JMPZ/43                   ?0        #7                   ?31                 	;0	>>31
		10  571  FETCH_OBJ_R/82            $8=       ?0                   5:'options'         	;0
		11  571  FETCH_DIM_R/81            $9=       $8                   6:'extractContainer'	;0
		12  571  JMPZ_EX/46                #10=      $9                   ?15                 	;0	>>15
		13  571  FETCH_OBJ_R/82            $11=      ?5                   7:'preCapture'      	;0
		14  571  BOOL/52                   #10=      $11                  ?0                  	;0
		15  571  JMPZ/43                   ?0        #10                  ?26                 	;0	>>26	<<12
		16  572  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'substr'          	;3
		17  572  FETCH_OBJ_FUNC_ARG/94     $13=      ?2670192592          11:'workingBlob'    	;1
		18  572  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
		19  572  SEND_VAL_EX/116           ?96       12:0                 ?2                  	;0
		20  572  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		21  572  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		22  572  ASSIGN_CONCAT/30          ?9        ?0                   8:'containerXml'    	;136
		23  572  OP_DATA/137               ?0        $14                  ?0                  	;0
		24  573  ASSIGN_OBJ/136            ?12       ?1                   13:'preCapture'     	;0
		25  573  OP_DATA/137               ?0        14:false             ?0                  	;0
		26  577  INIT_METHOD_CALL/112      ?0        ?15                  15:'startSalvaging' 	;1	<<15
		27  577  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		28  577  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		29  580  ASSIGN_OBJ/136            ?14       ?2670193552          17:'nextAction'     	;0
		30  580  OP_DATA/137               ?0        18:1                 ?0                  	;0
		31  584  FETCH_OBJ_R/82            $18=      ?9                   19:'nextAction'     	;0	<<4,9
		32  584  IS_IDENTICAL/15           #19=      $18                  20:1                	;0
		33  584  JMPZ/43                   ?0        #19                  ?49                 	;0	>>49
		34  586  INIT_METHOD_CALL/112      ?0        ?2670193712          21:'getClosingTagPos'	;0
		35  586  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		36  586  ASSIGN/38                 ?18       16?1                 $20                 	;0
		37  587  IS_NOT_IDENTICAL/16       #22=      16?1                 23:false            	;0
		38  587  JMPZ/43                   ?0        #22                  ?49                 	;0	>>49
		39  589  INIT_METHOD_CALL/112      ?0        ?5126                24:'flush'          	;1
		40  589  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		41  589  DO_FCALL/60               ?20       ?0                   ?0                  	;0
		42  592  ASSIGN_OBJ/136            ?21       ?2670193552          26:'nextAction'     	;0
		43  592  OP_DATA/137               ?0        27:0                 ?0                  	;0
		44  595  FETCH_OBJ_R/82            $25=      ?2670193248          28:'flushed'        	;0
		45  595  ASSIGN/38                 ?23       16?2                 $25                 	;0
		46  596  ASSIGN_OBJ/136            ?24       ?2670193280          29:'flushed'        	;0
		47  596  OP_DATA/137               ?0        30:''                ?0                  	;0
		48  598  RETURN/62                 ?0        16?2                 ?0                  	;0
		49  563  INIT_METHOD_CALL/112      ?0        ?0                   31:'prepareChunk'   	;1	<<1,33,38
		50  563  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		51  563  DO_FCALL/60               $28=      ?0                   ?0                  	;0
		52  563  JMPNZ/44                  ?0        $28                  ?2                  	;0	>>2
		53  603  FETCH_OBJ_R/82            $29=      ?2670194256          33:'options'        	;0
		54  603  FETCH_DIM_R/81            $30=      $29                  34:'extractContainer'	;0
		55  603  JMPZ/43                   ?0        $30                  ?59                 	;0	>>59
		56  604  FETCH_OBJ_R/82            $32=      ?0                   36:'workingBlob'    	;0
		57  604  ASSIGN_CONCAT/30          ?28       ?2670193760          35:'containerXml'   	;136
		58  604  OP_DATA/137               ?0        $32                  ?0                  	;0
		59  607  RETURN/62                 ?0        37:false             ?0                  	;0	<<55
		60  608  NOP/0                     ?0        38:NULL              ?0                  	;4294967295
		*/
	}

	/**
     * Get the extracted container XML, if called before the whole stream is parsed, the XML returned can be invalid due to missing closing tags
     * @return string XML string
     * @throws Exception if the extractContainer option isn't true
     */
	public function getExtractedContainer()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   617  FETCH_OBJ_R/82            $0=       ?1668361600          0:'options'         	;0
		1   617  FETCH_DIM_R/81            $1=       $0                   1:'extractContainer'	;0
		2   617  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		3   617  JMPZ/43                   ?0        #2                   ?8                  	;0	>>8
		4   618  NEW/68                    $3=       2:'Exception'        ?96                 	;1
		5   618  SEND_VAL_EX/116           ?80       4:'This method requires the \'extractContainer\' option to be true' ?1                  	;0
		6   618  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		7   618  THROW/108                 ?0        $3                   ?0                  	;0
		8   621  FETCH_OBJ_R/82            $5=       ?0                   5:'containerXml'    	;0	<<3
		9   621  RETURN/62                 ?0        $5                   ?0                  	;0
		10  622  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/**
 * Interface describing a stream provider
 */
interface StreamInterface
{
	/**
	 * Gets the next chunk form the stream if one is available
	 * @return bool|string The next chunk if available, or false if not available
	 */
	public function getChunk();
	/**
     * Is the stream seekable?
     * @return bool
     */
	public function isSeekable();
	/**
     * Rewind the stream
     * @return void
     * @throws Exception if the stream isn't seekable
     */
	public function rewind();
}

class File
{
	private $handle;
	private $readBytes = 0;
	private $chunkSize;
	private $chunkCallback;

	public function __construct($mixed, $chunkSize, $chunkCallback)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   657  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   657  RECV_INIT/64              16?1=     ?2                   0:16384             	;0
		2   657  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
		3   659  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_string'       	;1
		4   659  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   659  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		6   659  JMPZ/43                   ?0        $3                   ?28                 	;0	>>28
		7   661  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'file_exists'     	;1
		8   661  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   661  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		10  661  BOOL_NOT/13               #5=       $4                   ?0                  	;0
		11  661  JMPZ/43                   ?0        #5                   ?19                 	;0	>>19
		12  662  NEW/68                    $6=       6:'Exception'        ?192                	;1
		13  662  ROPE_INIT/54              #8=       ?0                   8:'File \''         	;3
		14  662  ROPE_ADD/55               #8=       #8                   16?0                	;1
		15  662  ROPE_END/56               #7=       #8                   9:'\' doesn\'t exist'	;2
		16  662  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
		17  662  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		18  662  THROW/108                 ?0        $6                   ?0                  	;0
		19  664  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'fopen'          	;2	<<11
		20  664  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		21  664  SEND_VAL_EX/116           ?96       13:'rb'              ?2                  	;0
		22  664  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		23  664  ASSIGN_OBJ/136            ?8        ?1668364536          10:'handle'         	;0
		24  664  OP_DATA/137               ?0        $12                  ?0                  	;0
		25  665  FETCH_OBJ_R/82            $13=      ?4435763             14:'handle'         	;0
		26  665  FREE/70                   ?0        $13                  ?0                  	;0
		27  665  JMP/42                    ?0        ?40                  ?0                  	;0	>>40
		28  666  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'get_resource_type'	;1	<<6
		29  666  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		30  666  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		31  666  IS_EQUAL/17               #15=      $14                  17:'stream'         	;0
		32  666  JMPZ/43                   ?0        #15                  ?36                 	;0	>>36
		33  668  ASSIGN_OBJ/136            ?13       ?1668045920          18:'handle'         	;0
		34  668  OP_DATA/137               ?0        16?0                 ?0                  	;0
		35  668  JMP/42                    ?0        ?40                  ?0                  	;0	>>40
		36  670  NEW/68                    $17=      19:'Exception'       ?96                 	;1	<<32
		37  670  SEND_VAL_EX/116           ?80       21:'First argument must be either a filename or a file handle' ?1                  	;0
		38  670  DO_FCALL/60               ?15       ?8                   ?0                  	;0
		39  670  THROW/108                 ?0        $17                  ?0                  	;0
		40  673  FETCH_OBJ_R/82            $19=      ?1668108032          22:'handle'         	;0	<<27,35
		41  673  IS_IDENTICAL/15           #20=      $19                  23:false            	;0
		42  673  JMPZ/43                   ?0        #20                  ?47                 	;0	>>47
		43  674  NEW/68                    $21=      24:'Exception'       ?96                 	;1
		44  674  SEND_VAL_EX/116           ?80       26:'Couldn\'t create file handle' ?1                  	;0
		45  674  DO_FCALL/60               ?19       ?8                   ?0                  	;0
		46  674  THROW/108                 ?0        $21                  ?0                  	;0
		47  677  ASSIGN_OBJ/136            ?20       ?4461655             27:'chunkSize'      	;0	<<42
		48  677  OP_DATA/137               ?0        16?1                 ?0                  	;0
		49  678  ASSIGN_OBJ/136            ?21       ?4461655             28:'chunkCallback'  	;0
		50  678  OP_DATA/137               ?0        16?2                 ?0                  	;0
		51  679  NOP/0                     ?0        29:NULL              ?0                  	;4294967295
		*/
	}

	public function __destruct()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   682  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_resource'     	;1
		1   682  FETCH_OBJ_FUNC_ARG/94     $0=       ?42                  2:'handle'          	;1
		2   682  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   682  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   682  JMPZ/43                   ?0        $1                   ?9                  	;0	>>9
		5   683  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'fclose'          	;1
		6   683  FETCH_OBJ_FUNC_ARG/94     $2=       ?1668943472          5:'handle'          	;1
		7   683  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		8   683  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
		9   685  NOP/0                     ?0        6:NULL               ?0                  	;4294967295	<<4
		*/
	}

	public function getChunk()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   689  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_resource'     	;1
		1   689  FETCH_OBJ_FUNC_ARG/94     $1=       ?4633841             2:'handle'          	;1
		2   689  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		3   689  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   689  JMPZ_EX/46                #3=       $2                   ?11                 	;0	>>11
		5   689  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'feof'            	;1
		6   689  FETCH_OBJ_FUNC_ARG/94     $4=       ?4412401             5:'handle'          	;1
		7   689  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		8   689  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		9   689  BOOL_NOT/13               #6=       $5                   ?0                  	;0
		10  689  BOOL/52                   #3=       #6                   ?0                  	;0
		11  689  JMPZ/43                   ?0        #3                   ?38                 	;0	>>38	<<4
		12  690  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'fread'           	;2
		13  690  FETCH_OBJ_FUNC_ARG/94     $7=       ?4397406             8:'handle'          	;1
		14  690  SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
		15  690  FETCH_OBJ_FUNC_ARG/94     $8=       ?4397406             9:'chunkSize'       	;2
		16  690  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		17  690  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		18  690  ASSIGN/38                 ?9        16?0                 $9                  	;0
		19  691  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'strlen'         	;1
		20  691  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		21  691  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		22  691  ASSIGN_ADD/23             ?10       ?4397406             10:'readBytes'      	;136
		23  691  OP_DATA/137               ?0        $12                  ?0                  	;0
		24  693  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'is_callable'    	;1
		25  693  FETCH_OBJ_FUNC_ARG/94     $13=      ?0                   15:'chunkCallback'  	;1
		26  693  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
		27  693  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		28  693  JMPZ/43                   ?0        $14                  ?37                 	;0	>>37
		29  694  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'call_user_func_array'	;2
		30  694  FETCH_OBJ_FUNC_ARG/94     $15=      ?4397406             18:'chunkCallback'  	;1
		31  694  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		32  694  INIT_ARRAY/71             #16=      16?0                 ?0                  	;8
		33  694  FETCH_OBJ_R/82            $17=      ?2670192976          19:'readBytes'      	;0
		34  694  ADD_ARRAY_ELEMENT/72      #16=      $17                  ?0                  	;0
		35  694  SEND_VAL_EX/116           ?96       #16                  ?2                  	;0
		36  694  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
		37  697  RETURN/62                 ?0        16?0                 ?0                  	;0	<<28
		38  700  RETURN/62                 ?0        20:false             ?0                  	;0	<<11
		39  701  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
		*/
	}

	public function isSeekable()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   705  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stream_get_meta_data'	;1
		1   705  FETCH_OBJ_FUNC_ARG/94     $1=       ?0                   2:'handle'          	;1
		2   705  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		3   705  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   705  ASSIGN/38                 ?2        16?0                 $2                  	;0
		5   707  FETCH_DIM_R/81            $4=       16?0                 3:'seekable'        	;0
		6   707  RETURN/62                 ?0        $4                   ?0                  	;0
		7   708  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function rewind()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   712  INIT_METHOD_CALL/112      ?0        ?0                   0:'isSeekable'      	;0
		1   712  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		2   712  BOOL_NOT/13               #1=       $0                   ?0                  	;0
		3   712  JMPZ/43                   ?0        #1                   ?8                  	;0	>>8
		4   713  NEW/68                    $2=       2:'Exception'        ?96                 	;1
		5   713  SEND_VAL_EX/116           ?80       4:'Attempted to rewind an unseekable stream' ?1                  	;0
		6   713  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		7   713  THROW/108                 ?0        $2                   ?0                  	;0
		8   716  ASSIGN_OBJ/136            ?4        ?1668370520          5:'readBytes'       	;0	<<3
		9   716  OP_DATA/137               ?0        6:0                  ?0                  	;0
		10  717  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'rewind'          	;1
		11  717  FETCH_OBJ_FUNC_ARG/94     $5=       ?1669226040          9:'handle'          	;1
		12  717  SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
		13  717  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
		14  718  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}
}

class Stdin
{
	public function __construct($chunkSize, $chunkCallback)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   723  RECV_INIT/64              16?0=     ?1                   0:1024              	;0
		1   723  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2   725  INIT_STATIC_METHOD_CALL/113 ?0        ?514                 ?1668107112         	;3
		3   725  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'fopen'           	;2
		4   725  SEND_VAL_EX/116           ?80       4:'php://stdin'      ?1                  	;0
		5   725  SEND_VAL_EX/116           ?96       5:'r'                ?2                  	;0
		6   725  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		7   725  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		8   725  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		9   725  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		10  725  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		11  726  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   12   NOP/0                     ?0        ?0                   ?0                  	;0
1   75   NOP/0                     ?0        ?0                   ?0                  	;0
2   100  DECLARE_CLASS/139         $2=       0:'stringwalker'     ?0                  	;0
3   100  ADD_INTERFACE/144         ?0        $2                   2:'ParserInterface' 	;0
4   100  VERIFY_ABSTRACT_CLASS/146 ?0        $2                   ?0                  	;0
5   356  DECLARE_CLASS/139         $3=       4:'uniquenode'       ?0                  	;0
6   356  ADD_INTERFACE/144         ?0        $3                   6:'ParserInterface' 	;0
7   356  VERIFY_ABSTRACT_CLASS/146 ?0        $3                   ?0                  	;0
8   628  NOP/0                     ?0        ?0                   ?0                  	;0
9   650  DECLARE_CLASS/139         $5=       8:'file'             ?0                  	;0
10  650  ADD_INTERFACE/144         ?0        $5                   10:'StreamInterface'	;0
11  650  VERIFY_ABSTRACT_CLASS/146 ?0        $5                   ?0                  	;0
12  721  FETCH_CLASS/109           $6=       ?0                   12:'File'           	;0
13  721  DECLARE_INHERITED_CLASS/140 $7=       14:'stdin'           $6                  	;4294967295
14  727  NOP/0                     ?0        16:1                 ?0                  	;4294967295
*/

?>