<?php


class Config
{
	private $data;

	public function __construct(array $data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0 4  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1 5  ASSIGN_OBJ/136            ?0        ?1665538560          0:'data'            	;0
		2 5  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3 6  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function get($key, $default)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  7   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  7   RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2  8   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_string'       	;1
		3  8   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4  8   DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5  8   BOOL_NOT/13               #3=       $2                   ?0                  	;0
		6  8   JMPZ/43                   ?0        #3                   ?19                 	;0	>>19
		7  9   NEW/68                    $4=       3:'InvalidArgumentException' ?352                	;1
		8  9   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'sprintf'         	;2
		9  9   SEND_VAL_EX/116           ?80       7:'$key can only be string, got %s' ?1                  	;0
		10 9   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'var_export'      	;2
		11 9   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		12 9   SEND_VAL_EX/116           ?96       10:true              ?2                  	;0
		13 9   DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		14 9   SEND_VAR_NO_REF_EX/50     ?96       $5                   ?2                  	;0
		15 9   DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		16 9   SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		17 9   DO_FCALL/60               ?5        ?8                   ?0                  	;0
		18 9   THROW/108                 ?0        $4                   ?0                  	;0
		19 11  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'array_key_exists'	;2	<<6
		20 11  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		21 11  FETCH_OBJ_FUNC_ARG/94     $8=       ?6                   13:'data'           	;2
		22 11  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		23 11  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		24 11  JMPZ/43                   ?0        $9                   ?28                 	;0	>>28
		25 12  FETCH_OBJ_R/82            $10=      ?4397406             14:'data'           	;0
		26 12  FETCH_DIM_R/81            $11=      $10                  16?0                	;0
		27 12  RETURN/62                 ?0        $11                  ?0                  	;0
		28 14  IS_IDENTICAL/15           #12=      15:NULL              16?1                	;0	<<24
		29 14  JMPZ/43                   ?0        #12                  ?38                 	;0	>>38
		30 15  NEW/68                    $13=      16:'OutOfBoundsException' ?224                	;1
		31 15  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'sprintf'        	;2
		32 15  SEND_VAL_EX/116           ?80       20:'Unknown config "%s"' ?1                  	;0
		33 15  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		34 15  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		35 15  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
		36 15  DO_FCALL/60               ?13       ?8                   ?0                  	;0
		37 15  THROW/108                 ?0        $13                  ?0                  	;0
		38 17  RETURN/62                 ?0        16?1                 ?0                  	;0	<<29
		39 18  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
		*/
	}

	protected function getData()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  20  FETCH_OBJ_R/82            $0=       ?0                   0:'data'            	;0
		1  20  RETURN/62                 ?0        $0                   ?0                  	;0
		2  21  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

interface StreamInterface
{
	public function add($line);
}

class FileStream
{
	public function add($line)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  29  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  30  INIT_METHOD_CALL/112      ?0        ?4294967295          0:'fwrite'          	;1
		2  30  CONCAT/8                  #1=       16?0                 2:'
'               	;0
		3  30  SEND_VAL_EX/116           ?80       #1                   ?1                  	;0
		4  30  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		5  31  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

class TextStream
{
	public function __construct($text)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  35  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1  36  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
		2  37  IS_NOT_IDENTICAL/16       #3=       2:NULL               16?0                	;0
		3  37  JMPZ/43                   ?0        #3                   ?12                 	;0	>>12
		4  38  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'explode'         	;2
		5  38  SEND_VAL_EX/116           ?80       5:'
'                ?1                  	;0
		6  38  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'trim'            	;1
		7  38  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		8  38  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		9  38  SEND_VAR_NO_REF_EX/50     ?96       $4                   ?2                  	;0
		10 38  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		11 38  ASSIGN/38                 ?4        16?1                 $5                  	;0
		12 40  INIT_STATIC_METHOD_CALL/113 ?0        ?514                 ?1669135168         	;1	<<3
		13 40  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		14 40  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		15 41  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function add($line)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  42  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  43  INIT_METHOD_CALL/112      ?0        ?514                 0:'append'          	;1
		2  43  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3  43  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		4  44  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  46  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'implode'         	;2
		1  46  SEND_VAL_EX/116           ?80       2:'
'                ?1                  	;0
		2  46  INIT_METHOD_CALL/112      ?0        ?0                   3:'getArrayCopy'    	;0
		3  46  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		4  46  SEND_VAR_NO_REF_EX/50     ?96       $0                   ?2                  	;0
		5  46  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		6  46  CONCAT/8                  #2=       $1                   5:'
'               	;0
		7  46  RETURN/62                 ?0        #2                   ?0                  	;0
		8  47  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}
}

class AttributeListParser
{
	private $valueParsers;
	private $attributeStringToArray;

	public function __construct(Config $valueParsers, AttributeStringToArray $attributeStringToArray)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  53  RECV/63                   16?0=     ?1                   ?0                  	;0
		1  53  RECV/63                   16?1=     ?2                   ?16                 	;0
		2  54  ASSIGN_OBJ/136            ?0        ?1667634688          0:'valueParsers'    	;0
		3  54  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4  55  ASSIGN_OBJ/136            ?1        ?1667634688          1:'attributeStringToArray'	;0
		5  55  OP_DATA/137               ?0        16?1                 ?0                  	;0
		6  56  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function parse($string, array $types)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  57  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  58  FETCH_OBJ_R/82            $9=       ?1667635104          0:'attributeStringToArray'	;0
		3  58  ASSIGN/38                 ?1        16?2                 $9                  	;0
		4  59  INIT_DYNAMIC_CALL/128     ?0        ?0                   16?2                	;1
		5  59  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6  59  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		7  59  ASSIGN/38                 ?3        16?3                 $11                 	;0
		8  60  NEW/68                    $13=      1:'ArrayObject'      ?64                 	;0
		9  60  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		10 60  ASSIGN/38                 ?6        16?4                 $13                 	;0
		11 61  FE_RESET_R/77             $16=      16?3                 ?35                 	;0
		12 61  FE_FETCH_R/78             #17=      $16                  16?5                	;35	>>35	<<34
		13 61  ASSIGN/38                 ?9        16?6                 #17                 	;0
		14 62  ISSET_ISEMPTY_DIM_OBJ/115 #19=      16?1                 16?6                	;33554432
		15 62  BOOL_NOT/13               #20=      #19                  ?0                  	;0
		16 62  JMPZ/43                   ?0        #20                  ?18                 	;0	>>18
		17 63  CONT/255                  ?0        ?12                  0:1                 	;0
		18 65  FETCH_DIM_R/81            $21=      16?1                 16?6                	;0	<<16
		19 65  ASSIGN/38                 ?13       16?7                 $21                 	;0
		20 66  FETCH_OBJ_R/82            $23=      ?0                   3:'valueParsers'    	;0
		21 66  INIT_METHOD_CALL/112      ?0        $23                  4:'get'             	;1
		22 66  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		23 66  DO_FCALL/60               $24=      ?0                   ?0                  	;0
		24 66  ASSIGN/38                 ?16       16?8                 $24                 	;0
		25 67  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_callable'     	;1
		26 67  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		27 67  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		28 67  JMPZ/43                   ?0        $26                  ?34                 	;0	>>34
		29 68  INIT_DYNAMIC_CALL/128     ?0        ?0                   16?8                	;1
		30 68  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		31 68  DO_FCALL/60               $28=      ?0                   ?0                  	;0
		32 68  ASSIGN_DIM/147            ?18       16?4                 16?6                	;0
		33 68  OP_DATA/137               ?0        $28                  ?0                  	;0
		34 68  JMP/42                    ?0        ?12                  ?0                  	;0	>>12	<<28
		35 68  FE_FREE/127               ?0        $16                  ?0                  	;0	<<11
		36 71  RETURN/62                 ?0        16?4                 ?0                  	;0
		37 72  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}
}

class DataBuilder
{
	private $currentMediaSegment;
	private $result;
	private $lastAddedTag;

	public function addUri($uri)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  79  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  80  FETCH_OBJ_R/82            $1=       ?4583868             0:'currentMediaSegment'	;0
		2  80  IS_NOT_IDENTICAL/16       #2=       1:NULL               $1                  	;0
		3  80  JMPZ/43                   ?0        #2                   ?10                 	;0	>>10
		4  81  FETCH_OBJ_W/85            $3=       ?1668126552          2:'currentMediaSegment'	;0
		5  81  ASSIGN_DIM/147            ?3        $3                   3:'uri'             	;0
		6  81  OP_DATA/137               ?0        16?0                 ?0                  	;0
		7  82  ASSIGN_OBJ/136            ?4        ?2                   4:'currentMediaSegment'	;0
		8  82  OP_DATA/137               ?0        5:NULL               ?0                  	;0
		9  83  RETURN/62                 ?0        6:NULL               ?0                  	;0
		10 85  FETCH_OBJ_R/82            $6=       ?4633841             7:'lastAddedTag'    	;0	<<3
		11 85  FETCH_DIM_R/81            $7=       $6                   8:'definition'      	;0
		12 85  INIT_METHOD_CALL/112      ?0        $7                   9:'isUriAware'      	;0
		13 85  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		14 85  JMPZ/43                   ?0        $8                   ?20                 	;0	>>20
		15 86  FETCH_OBJ_W/85            $9=       ?1669058600          11:'lastAddedTag'   	;0
		16 86  FETCH_DIM_W/84            $10=      $9                   12:'value'          	;0
		17 86  ASSIGN_DIM/147            ?10       $10                  13:'uri'            	;0
		18 86  OP_DATA/137               ?0        16?0                 ?0                  	;0
		19 87  RETURN/62                 ?0        14:NULL              ?0                  	;0
		20 89  NEW/68                    $12=      15:'DataBuildingException' ?96                 	;1	<<14
		21 89  SEND_VAL_EX/116           ?80       17:'uri found, but doesn\'t know how to handle it' ?1                  	;0
		22 89  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		23 89  THROW/108                 ?0        $12                  ?0                  	;0
		24 90  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}

	public function addTag(TagDefinition $definition, $data)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   91   RECV/63                   16?0=     ?1                   ?0                  	;0
		1   91   RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   92   FETCH_OBJ_R/82            $3=       ?3                   0:'result'          	;0
		3   92   ASSIGN/38                 ?1        16?2                 $3                  	;0
		4   93   INIT_METHOD_CALL/112      ?0        16?0                 1:'getCategory'     	;0
		5   93   DO_FCALL/60               $5=       ?0                   ?0                  	;0
		6   93   IS_IDENTICAL/15           #6=       3:'media-segment'    $5                  	;0
		7   93   JMPZ/43                   ?0        #6                   ?22                 	;0	>>22
		8   94   FETCH_OBJ_R/82            $7=       ?4583868             4:'currentMediaSegment'	;0
		9   94   IS_IDENTICAL/15           #8=       5:NULL               $7                  	;0
		10  94   JMPZ/43                   ?0        #8                   ?20                 	;0	>>20
		11  95   NEW/68                    $10=      7:'ArrayObject'      ?64                 	;0
		12  95   DO_FCALL/60               ?8        ?8                   ?0                  	;0
		13  95   ASSIGN_OBJ/136            ?6        ?1667560016          6:'currentMediaSegment'	;0
		14  95   OP_DATA/137               ?0        $10                  ?0                  	;0
		15  96   FETCH_OBJ_R/82            $15=      ?2670193216          11:'currentMediaSegment'	;0
		16  96   FETCH_OBJ_W/85            $12=      ?8                   9:'result'          	;0
		17  96   FETCH_DIM_W/84            $13=      $12                  10:'mediaSegments'  	;0
		18  96   ASSIGN_DIM/147            ?11       $13                  ?0                  	;0
		19  96   OP_DATA/137               ?0        $15                  ?0                  	;0
		20  98   FETCH_OBJ_R/82            $16=      ?3                   12:'currentMediaSegment'	;0	<<10
		21  98   ASSIGN/38                 ?14       16?2                 $16                 	;0
		22  100  INIT_ARRAY/71             #19=      16?0                 14:'definition'     	;10	<<7
		23  100  ADD_ARRAY_ELEMENT/72      #19=      16?1                 15:'value'          	;0
		24  100  ASSIGN_OBJ/136            ?15       ?4468752             13:'lastAddedTag'   	;0
		25  100  OP_DATA/137               ?0        #19                  ?0                  	;0
		26  101  INIT_METHOD_CALL/112      ?0        16?0                 16:'isMultiple'     	;0
		27  101  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		28  101  JMPZ/43                   ?0        $20                  ?35                 	;0	>>35
		29  102  INIT_METHOD_CALL/112      ?0        16?0                 18:'getTag'         	;0
		30  102  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		31  102  FETCH_DIM_W/84            $22=      16?2                 $21                 	;0
		32  102  ASSIGN_DIM/147            ?20       $22                  ?4414262            	;0
		33  102  OP_DATA/137               ?0        16?1                 ?0                  	;0
		34  103  RETURN/62                 ?0        20:NULL              ?0                  	;0
		35  105  INIT_METHOD_CALL/112      ?0        16?0                 21:'getTag'         	;0	<<28
		36  105  DO_FCALL/60               $24=      ?0                   ?0                  	;0
		37  105  ASSIGN_DIM/147            ?22       16?2                 $24                 	;0
		38  105  OP_DATA/137               ?0        16?1                 ?0                  	;0
		39  106  NOP/0                     ?0        23:NULL              ?0                  	;4294967295
		*/
	}

	public function getResult()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   108  FETCH_OBJ_R/82            $0=       ?0                   0:'result'          	;0
		1   108  RETURN/62                 ?0        $0                   ?0                  	;0
		2   109  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function reset()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   111  ASSIGN_OBJ/136            ?0        ?2670194256          0:'currentMediaSegment'	;0
		1   111  OP_DATA/137               ?0        1:NULL               ?0                  	;0
		2   112  NEW/68                    $2=       3:'ArrayObject'      ?64                 	;0
		3   112  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		4   112  ASSIGN_OBJ/136            ?1        ?2670194256          2:'result'          	;0
		5   112  OP_DATA/137               ?0        $2                   ?0                  	;0
		6   113  ASSIGN_OBJ/136            ?4        ?2670194256          5:'lastAddedTag'    	;0
		7   113  OP_DATA/137               ?0        6:NULL               ?0                  	;0
		8   114  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}
}

class DataBuildingException
{
}

class Parser
{
	private $tagDefinitions;
	private $valueParsers;
	private $dataBuilder;

	public function __construct(TagDefinitions $tagDefinitions, Config $valueParsers, DataBuilder $dataBuilder)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   124  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   124  RECV/63                   16?1=     ?2                   ?16                 	;0
		2   124  RECV/63                   16?2=     ?3                   ?32                 	;0
		3   125  ASSIGN_OBJ/136            ?0        ?2670194256          0:'tagDefinitions'  	;0
		4   125  OP_DATA/137               ?0        16?0                 ?0                  	;0
		5   126  ASSIGN_OBJ/136            ?1        ?2670194256          1:'valueParsers'    	;0
		6   126  OP_DATA/137               ?0        16?1                 ?0                  	;0
		7   127  ASSIGN_OBJ/136            ?2        ?2670194256          2:'dataBuilder'     	;0
		8   127  OP_DATA/137               ?0        16?2                 ?0                  	;0
		9   128  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function parse(Lines $lines)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   129  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   130  FETCH_OBJ_R/82            $7=       ?0                   0:'dataBuilder'     	;0
		2   130  INIT_METHOD_CALL/112      ?0        $7                   1:'reset'           	;0
		3   130  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		4   131  FE_RESET_R/77             $9=       16?0                 ?65                 	;0
		5   131  FE_FETCH_R/78             ?0        $9                   16?1                	;65	>>65	<<64
		6   132  INIT_METHOD_CALL/112      ?0        16?1                 3:'isType'          	;1
		7   132  FETCH_CLASS_CONSTANT/181  #10=      6:'Line'             5:'TYPE_URI'        	;0
		8   132  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
		9   132  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		10  132  JMPZ/43                   ?0        $11                  ?18                 	;0	>>18
		11  133  FETCH_OBJ_R/82            $12=      ?1665990880          8:'dataBuilder'     	;0
		12  133  INIT_METHOD_CALL/112      ?0        $12                  9:'addUri'          	;1
		13  133  INIT_METHOD_CALL/112      ?0        16?1                 11:'getValue'       	;0
		14  133  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		15  133  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		16  133  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		17  134  CONT/255                  ?0        ?5                   0:1                 	;0
		18  136  INIT_METHOD_CALL/112      ?0        16?1                 13:'getTag'         	;0	<<10
		19  136  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		20  136  ASSIGN/38                 ?9        16?2                 $15                 	;0
		21  137  FETCH_OBJ_R/82            $17=      ?2670193120          15:'tagDefinitions' 	;0
		22  137  INIT_METHOD_CALL/112      ?0        $17                  16:'get'            	;1
		23  137  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		24  137  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		25  137  ASSIGN/38                 ?12       16?3                 $18                 	;0
		26  138  IS_IDENTICAL/15           #20=      18:NULL              16?3                	;0
		27  138  JMPZ/43                   ?0        #20                  ?29                 	;0	>>29
		28  139  CONT/255                  ?0        ?5                   0:1                 	;0
		29  141  INIT_METHOD_CALL/112      ?0        16?3                 19:'getValueType'   	;0	<<27
		30  141  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		31  141  ASSIGN/38                 ?15       16?4                 $21                 	;0
		32  142  INIT_METHOD_CALL/112      ?0        16?1                 21:'getValue'       	;0
		33  142  DO_FCALL/60               $23=      ?0                   ?0                  	;0
		34  142  ASSIGN/38                 ?17       16?5                 $23                 	;0
		35  143  FETCH_OBJ_R/82            $25=      ?2670193120          23:'valueParsers'   	;0
		36  143  INIT_METHOD_CALL/112      ?0        $25                  24:'get'            	;1
		37  143  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		38  143  DO_FCALL/60               $26=      ?0                   ?0                  	;0
		39  143  ASSIGN/38                 ?20       16?6                 $26                 	;0
		40  144  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'is_callable'    	;1
		41  144  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		42  144  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		43  144  JMPZ/43                   ?0        $28                  ?59                 	;0	>>59
		44  145  IS_IDENTICAL/15           #29=      28:'attribute-list'  16?4                	;0
		45  145  JMPZ/43                   ?0        #29                  ?54                 	;0	>>54
		46  145  INIT_DYNAMIC_CALL/128     ?0        ?0                   16?6                	;2
		47  145  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		48  145  INIT_METHOD_CALL/112      ?0        16?3                 29:'getAttributeTypes'	;0
		49  145  DO_FCALL/60               $30=      ?0                   ?0                  	;0
		50  145  SEND_VAR_NO_REF_EX/50     ?96       $30                  ?2                  	;0
		51  145  DO_FCALL/60               $31=      ?0                   ?0                  	;0
		52  145  QM_ASSIGN/22              #32=      $31                  ?0                  	;0
		53  145  JMP/42                    ?0        ?58                  ?0                  	;0	>>58
		54  145  INIT_DYNAMIC_CALL/128     ?0        ?0                   16?6                	;1	<<45
		55  145  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		56  145  DO_FCALL/60               $33=      ?0                   ?0                  	;0
		57  145  QM_ASSIGN/22              #32=      $33                  ?0                  	;0
		58  145  ASSIGN/38                 ?27       16?5                 #32                 	;0	<<53
		59  147  FETCH_OBJ_R/82            $35=      ?4397406             31:'dataBuilder'    	;0	<<43
		60  147  INIT_METHOD_CALL/112      ?0        $35                  32:'addTag'         	;2
		61  147  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		62  147  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		63  147  DO_FCALL/60               ?29       ?0                   ?0                  	;0
		64  147  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		65  147  FE_FREE/127               ?0        $9                   ?0                  	;0	<<4
		66  149  FETCH_OBJ_R/82            $37=      ?1667567648          34:'dataBuilder'    	;0
		67  149  INIT_METHOD_CALL/112      ?0        $37                  35:'getResult'      	;0
		68  149  DO_FCALL/60               $38=      ?0                   ?0                  	;0
		69  149  RETURN/62                 ?0        $38                  ?0                  	;0
		70  150  NOP/0                     ?0        37:NULL              ?0                  	;4294967295
		*/
	}
}

class Line
{
	public const TYPE_URI = 'uri';
	public const TYPE_TAG = 'tag';

	private $tag;
	private $value;

	public function __construct($tag, $value)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   158  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   158  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2   159  IS_IDENTICAL/15           #2=       2:NULL               16?0                	;0
		3   159  JMPZ_EX/46                #2=       #2                   ?6                  	;0	>>6
		4   159  IS_IDENTICAL/15           #3=       3:NULL               16?1                	;0
		5   159  BOOL/52                   #2=       #3                   ?0                  	;0
		6   159  JMPZ/43                   ?0        #2                   ?11                 	;0	>>11	<<3
		7   160  NEW/68                    $4=       4:'InvalidArgumentException' ?96                 	;1
		8   160  SEND_VAL_EX/116           ?80       6:'$tag and $value can not both be null' ?1                  	;0
		9   160  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		10  160  THROW/108                 ?0        $4                   ?0                  	;0
		11  162  ASSIGN_OBJ/136            ?4        ?1                   7:'tag'             	;0	<<6
		12  162  OP_DATA/137               ?0        16?0                 ?0                  	;0
		13  163  ASSIGN_OBJ/136            ?5        ?1                   8:'value'           	;0
		14  163  OP_DATA/137               ?0        16?1                 ?0                  	;0
		15  164  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function fromString($line)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   165  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   166  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'trim'            	;1
		2   166  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   166  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		4   166  ASSIGN/38                 ?1        16?0                 $3                  	;0
		5   167  ISSET_ISEMPTY_CV/197      #5=       16?0                 ?0                  	;16777216
		6   167  JMPZ/43                   ?0        #5                   ?8                  	;0	>>8
		7   168  RETURN/62                 ?0        2:NULL               ?0                  	;0
		8   170  FETCH_DIM_R/81            $6=       16?0                 3:0                 	;0	<<6
		9   170  IS_NOT_IDENTICAL/16       #7=       4:'#'                $6                  	;0
		10  170  JMPZ/43                   ?0        #7                   ?16                 	;0	>>16
		11  171  NEW/68                    $8=       ?513                 ?128                	;2
		12  171  SEND_VAL_EX/116           ?80       5:NULL               ?1                  	;0
		13  171  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		14  171  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		15  171  RETURN/62                 ?0        $8                   ?0                  	;0
		16  173  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'substr'          	;3	<<10
		17  173  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		18  173  SEND_VAL_EX/116           ?96       8:0                  ?2                  	;0
		19  173  SEND_VAL_EX/116           ?112      9:4                  ?3                  	;0
		20  173  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		21  173  IS_NOT_IDENTICAL/16       #11=      10:'#EXT'            $10                 	;0
		22  173  JMPZ/43                   ?0        #11                  ?24                 	;0	>>24
		23  174  RETURN/62                 ?0        11:NULL              ?0                  	;0
		24  176  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'ltrim'          	;2	<<22
		25  176  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		26  176  SEND_VAL_EX/116           ?96       14:'#'               ?2                  	;0
		27  176  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		28  176  ASSIGN/38                 ?10       16?0                 $12                 	;0
		29  177  ISSET_ISEMPTY_CV/197      #14=      16?0                 ?0                  	;16777216
		30  177  JMPZ/43                   ?0        #14                  ?32                 	;0	>>32
		31  178  RETURN/62                 ?0        15:NULL              ?0                  	;0
		32  180  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'array_pad'      	;3	<<30
		33  180  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'explode'        	;3
		34  180  SEND_VAL_EX/116           ?80       20:':'               ?1                  	;0
		35  180  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		36  180  SEND_VAL_EX/116           ?112      21:2                 ?3                  	;0
		37  180  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		38  180  SEND_VAR_NO_REF_EX/50     ?80       $15                  ?1                  	;0
		39  180  SEND_VAL_EX/116           ?96       22:2                 ?2                  	;0
		40  180  SEND_VAL_EX/116           ?112      23:true              ?3                  	;0
		41  180  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		42  180  FETCH_LIST/98             $17=      $16                  24:0                	;0
		43  180  ASSIGN/38                 ?15       16?1                 $17                 	;0
		44  180  FETCH_LIST/98             $19=      $16                  25:1                	;0
		45  180  ASSIGN/38                 ?17       16?2                 $19                 	;0
		46  180  FREE/70                   ?0        $16                  ?0                  	;0
		47  181  NEW/68                    $21=      ?513                 ?128                	;2
		48  181  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		49  181  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		50  181  DO_FCALL/60               ?19       ?8                   ?0                  	;0
		51  181  RETURN/62                 ?0        $21                  ?0                  	;0
		52  182  NOP/0                     ?0        26:NULL              ?0                  	;4294967295
		*/
	}

	public function getTag()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   184  FETCH_OBJ_R/82            $0=       ?47                  0:'tag'             	;0
		1   184  RETURN/62                 ?0        $0                   ?0                  	;0
		2   185  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getValue()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   187  FETCH_OBJ_R/82            $0=       ?47                  0:'value'           	;0
		1   187  RETURN/62                 ?0        $0                   ?0                  	;0
		2   188  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function isType($type)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   189  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   190  INIT_METHOD_CALL/112      ?0        ?1665167872          0:'getType'         	;0
		2   190  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		3   190  IS_IDENTICAL/15           #2=       $1                   16?0                	;0
		4   190  RETURN/62                 ?0        #2                   ?0                  	;0
		5   191  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   193  INIT_METHOD_CALL/112      ?0        ?4422077             0:'isType'          	;1
		1   193  SEND_VAL_EX/116           ?80       2:'uri'              ?1                  	;0
		2   193  DO_FCALL/60               $0=       ?0                   ?0                  	;0
		3   193  JMPZ/43                   ?0        $0                   ?6                  	;0	>>6
		4   194  FETCH_OBJ_R/82            $1=       ?1668112544          3:'value'           	;0
		5   194  RETURN/62                 ?0        $1                   ?0                  	;0
		6   196  FETCH_OBJ_R/82            $2=       ?4583868             4:'value'           	;0	<<3
		7   196  IS_IDENTICAL/15           #3=       5:true               $2                  	;0
		8   196  JMPZ/43                   ?0        #3                   ?15                 	;0	>>15
		9   197  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'sprintf'         	;2
		10  197  SEND_VAL_EX/116           ?80       8:'#%s'              ?1                  	;0
		11  197  FETCH_OBJ_FUNC_ARG/94     $4=       ?1667575184          9:'tag'             	;2
		12  197  SEND_VAR_EX/66            ?96       $4                   ?2                  	;0
		13  197  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		14  197  RETURN/62                 ?0        $5                   ?0                  	;0
		15  199  FETCH_OBJ_R/82            $6=       ?4583868             10:'value'          	;0	<<8
		16  199  IS_IDENTICAL/15           #7=       11:false             $6                  	;0
		17  199  JMPZ/43                   ?0        #7                   ?19                 	;0	>>19
		18  200  RETURN/62                 ?0        12:''                ?0                  	;0
		19  202  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'sprintf'        	;3	<<17
		20  202  SEND_VAL_EX/116           ?80       15:'#%s:%s'          ?1                  	;0
		21  202  FETCH_OBJ_FUNC_ARG/94     $8=       ?1667576160          16:'tag'            	;2
		22  202  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		23  202  FETCH_OBJ_FUNC_ARG/94     $9=       ?1667576160          17:'value'          	;3
		24  202  SEND_VAR_EX/66            ?112      $9                   ?3                  	;0
		25  202  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		26  202  RETURN/62                 ?0        $10                  ?0                  	;0
		27  203  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}

	private function getType()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   205  FETCH_OBJ_R/82            $0=       ?4583868             0:'tag'             	;0
		1   205  IS_NOT_IDENTICAL/16       #1=       1:NULL               $0                  	;0
		2   205  JMPZ/43                   ?0        #1                   ?4                  	;0	>>4
		3   206  RETURN/62                 ?0        2:'tag'              ?0                  	;0
		4   208  RETURN/62                 ?0        3:'uri'              ?0                  	;0	<<2
		5   209  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}
}

class Lines
{
	private $stream;
	private $current;

	public function __construct(StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   215  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   216  ASSIGN_OBJ/136            ?0        ?4416340             0:'stream'          	;0
		2   216  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   217  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function current()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   219  FETCH_OBJ_R/82            $0=       ?0                   0:'current'         	;0
		1   219  RETURN/62                 ?0        $0                   ?0                  	;0
		2   220  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function add(Line $line)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   221  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   222  FETCH_OBJ_R/82            $1=       ?1667577072          0:'stream'          	;0
		2   222  INIT_METHOD_CALL/112      ?0        $1                   1:'add'             	;1
		3   222  CAST/21                   #2=       16?0                 ?0                  	;6
		4   222  SEND_VAL_EX/116           ?80       #2                   ?1                  	;0
		5   222  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		6   223  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function next()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   225  FETCH_OBJ_R/82            $0=       ?1667577072          0:'stream'          	;0
		1   225  INIT_METHOD_CALL/112      ?0        $0                   1:'next'            	;0
		2   225  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		3   226  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function valid()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   228  ASSIGN_OBJ/136            ?0        ?2670194352          0:'current'         	;0
		1   228  OP_DATA/137               ?0        1:NULL               ?0                  	;0
		2   229  JMP/42                    ?0        ?22                  ?0                  	;0	>>22
		3   230  FETCH_OBJ_R/82            $2=       ?4381411             2:'stream'          	;0	<<29
		4   230  INIT_METHOD_CALL/112      ?0        $2                   3:'current'         	;0
		5   230  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		6   230  JMPZ/43                   ?0        $3                   ?19                 	;0	>>19
		7   231  INIT_STATIC_METHOD_CALL/113 ?0        5:'Line'             7:'fromString'      	;1
		8   231  FETCH_OBJ_R/82            $4=       ?4397406             9:'stream'          	;0
		9   231  INIT_METHOD_CALL/112      ?0        $4                   10:'current'        	;0
		10  231  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		11  231  SEND_VAR/117              ?80       $5                   ?1                  	;0
		12  231  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		13  231  ASSIGN/38                 ?6        16?0                 $6                  	;0
		14  232  IS_NOT_IDENTICAL/16       #8=       12:NULL              16?0                	;0
		15  232  JMPZ/43                   ?0        #8                   ?19                 	;0	>>19
		16  233  ASSIGN_OBJ/136            ?8        ?2670193408          13:'current'        	;0
		17  233  OP_DATA/137               ?0        16?0                 ?0                  	;0
		18  234  RETURN/62                 ?0        14:true              ?0                  	;0
		19  237  FETCH_OBJ_R/82            $10=      ?0                   15:'stream'         	;0	<<6,15
		20  237  INIT_METHOD_CALL/112      ?0        $10                  16:'next'           	;0
		21  237  DO_FCALL/60               ?10       ?0                   ?0                  	;0
		22  229  FETCH_OBJ_R/82            $12=      ?4583868             18:'current'        	;0	<<2
		23  229  IS_IDENTICAL/15           #13=      19:NULL              $12                 	;0
		24  229  JMPZ_EX/46                #13=      #13                  ?29                 	;0	>>29
		25  229  FETCH_OBJ_R/82            $14=      ?229                 20:'stream'         	;0
		26  229  INIT_METHOD_CALL/112      ?0        $14                  21:'valid'          	;0
		27  229  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		28  229  BOOL/52                   #13=      $15                  ?0                  	;0
		29  229  JMPNZ/44                  ?0        #13                  ?3                  	;0	>>3	<<24
		30  239  RETURN/62                 ?0        23:false             ?0                  	;0
		31  240  NOP/0                     ?0        24:NULL              ?0                  	;4294967295
		*/
	}

	public function rewind()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   242  FETCH_OBJ_R/82            $0=       ?13                  0:'stream'          	;0
		1   242  INIT_METHOD_CALL/112      ?0        $0                   1:'rewind'          	;0
		2   242  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		3   243  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function key()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   245  FETCH_OBJ_R/82            $0=       ?4431760             0:'stream'          	;0
		1   245  INIT_METHOD_CALL/112      ?0        $0                   1:'key'             	;0
		2   245  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		3   245  RETURN/62                 ?0        $1                   ?0                  	;0
		4   246  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

class AttributeListDumper
{
	private $valueDumper;

	public function __construct(Config $valueDumper)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   251  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   252  ASSIGN_OBJ/136            ?0        ?0                   0:'valueDumper'     	;0
		2   252  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   253  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function dump(ArrayAccess $data, array $types)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   254  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   254  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   255  ASSIGN/38                 ?0        16?2                 0:array (
)         	;0
		3   256  FE_RESET_R/77             $8=       16?0                 ?28                 	;0
		4   256  FE_FETCH_R/78             #9=       $8                   16?3                	;28	>>28	<<27
		5   256  ASSIGN/38                 ?3        16?4                 #9                  	;0
		6   257  ISSET_ISEMPTY_DIM_OBJ/115 #11=      16?1                 16?4                	;33554432
		7   257  BOOL_NOT/13               #12=      #11                  ?0                  	;0
		8   257  JMPZ/43                   ?0        #12                  ?10                 	;0	>>10
		9   258  CONT/255                  ?0        ?4                   0:1                 	;0
		10  260  FETCH_DIM_R/81            $13=      16?1                 16?4                	;0	<<8
		11  260  ASSIGN/38                 ?7        16?5                 $13                 	;0
		12  261  FETCH_OBJ_R/82            $15=      ?0                   1:'valueDumper'     	;0
		13  261  INIT_METHOD_CALL/112      ?0        $15                  2:'get'             	;1
		14  261  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		15  261  DO_FCALL/60               $16=      ?0                   ?0                  	;0
		16  261  ASSIGN/38                 ?10       16?6                 $16                 	;0
		17  262  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'sprintf'         	;3
		18  262  SEND_VAL_EX/116           ?80       6:'%s=%s'            ?1                  	;0
		19  262  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
		20  262  INIT_DYNAMIC_CALL/128     ?0        ?0                   16?6                	;1
		21  262  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		22  262  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		23  262  SEND_VAR_NO_REF_EX/50     ?112      $19                  ?3                  	;0
		24  262  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		25  262  ASSIGN_DIM/147            ?11       16?2                 ?2670193888         	;0
		26  262  OP_DATA/137               ?0        $20                  ?0                  	;0
		27  262  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		28  262  FE_FREE/127               ?0        $8                   ?0                  	;0	<<3
		29  264  ISSET_ISEMPTY_CV/197      #21=      16?2                 ?0                  	;16777216
		30  264  BOOL_NOT/13               #22=      #21                  ?0                  	;0
		31  264  JMPZ/43                   ?0        #22                  ?37                 	;0	>>37
		32  265  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'implode'         	;2
		33  265  SEND_VAL_EX/116           ?80       9:','                ?1                  	;0
		34  265  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		35  265  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		36  265  RETURN/62                 ?0        $23                  ?0                  	;0
		37  267  NOP/0                     ?0        10:NULL              ?0                  	;4294967295	<<31
		*/
	}
}

class Dumper
{
	private $tagDefinitions;
	private $valueDumpers;

	public function __construct(TagDefinitions $tagDefinitions, Config $valueDumpers)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   273  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   273  RECV/63                   16?1=     ?2                   ?16                 	;0
		2   274  ASSIGN_OBJ/136            ?0        ?31                  0:'tagDefinitions'  	;0
		3   274  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4   275  ASSIGN_OBJ/136            ?1        ?31                  1:'valueDumpers'    	;0
		5   275  OP_DATA/137               ?0        16?1                 ?0                  	;0
		6   276  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function dumpToLines(ArrayAccess $data, Lines $lines)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   277  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   277  RECV/63                   16?1=     ?2                   ?16                 	;0
		2   278  INIT_METHOD_CALL/112      ?0        16?1                 0:'add'             	;1
		3   278  NEW/68                    $3=       2:'Line'             ?128                	;2
		4   278  SEND_VAL_EX/116           ?80       4:'EXTM3U'           ?1                  	;0
		5   278  SEND_VAL_EX/116           ?96       5:true               ?2                  	;0
		6   278  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		7   278  SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
		8   278  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		9   279  INIT_METHOD_CALL/112      ?0        ?96                  6:'iterateTags'     	;3
		10  279  FETCH_OBJ_R/82            $6=       ?2                   8:'tagDefinitions'  	;0
		11  279  INIT_METHOD_CALL/112      ?0        $6                   9:'getHeadTags'     	;0
		12  279  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		13  279  SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
		14  279  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15  279  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		16  279  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		17  280  ISSET_ISEMPTY_DIM_OBJ/115 #9=       16?0                 11:'mediaSegments'  	;33554432
		18  280  BOOL_NOT/13               #10=      #9                   ?0                  	;0
		19  280  JMPZ/43                   ?0        #10                  ?21                 	;0	>>21
		20  281  RETURN/62                 ?0        12:NULL              ?0                  	;0
		21  283  FETCH_DIM_R/81            $11=      16?0                 13:'mediaSegments'  	;0	<<19
		22  283  FE_RESET_R/77             $12=      $11                  ?41                 	;0
		23  283  FE_FETCH_R/78             ?0        $12                  16?2                	;41	>>41	<<40
		24  284  INIT_METHOD_CALL/112      ?0        ?2670193680          14:'iterateTags'    	;3
		25  284  FETCH_OBJ_R/82            $13=      ?2670192928          16:'tagDefinitions' 	;0
		26  284  INIT_METHOD_CALL/112      ?0        $13                  17:'getMediaSegmentTags'	;0
		27  284  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		28  284  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
		29  284  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		30  284  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		31  284  DO_FCALL/60               ?12       ?0                   ?0                  	;0
		32  285  INIT_METHOD_CALL/112      ?0        16?1                 19:'add'            	;1
		33  285  NEW/68                    $16=      21:'Line'            ?160                	;2
		34  285  SEND_VAL_EX/116           ?80       23:NULL              ?1                  	;0
		35  285  FETCH_DIM_FUNC_ARG/93     $17=      16?2                 24:'uri'            	;2
		36  285  SEND_VAR_EX/66            ?96       $17                  ?2                  	;0
		37  285  DO_FCALL/60               ?15       ?8                   ?0                  	;0
		38  285  SEND_VAR_NO_REF_EX/50     ?80       $16                  ?1                  	;0
		39  285  DO_FCALL/60               ?16       ?0                   ?0                  	;0
		40  285  JMP/42                    ?0        ?23                  ?0                  	;0	>>23
		41  285  FE_FREE/127               ?0        $12                  ?0                  	;0	<<22
		42  287  INIT_METHOD_CALL/112      ?0        ?2670194176          25:'iterateTags'    	;3
		43  287  FETCH_OBJ_R/82            $20=      ?2670193392          27:'tagDefinitions' 	;0
		44  287  INIT_METHOD_CALL/112      ?0        $20                  28:'getFootTags'    	;0
		45  287  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		46  287  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		47  287  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		48  287  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		49  287  DO_FCALL/60               ?19       ?0                   ?0                  	;0
		50  288  NOP/0                     ?0        30:NULL              ?0                  	;4294967295
		*/
	}

	private function iterateTags(array $tags, ArrayAccess $data, Lines $lines)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   289  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   289  RECV/63                   16?1=     ?2                   ?0                  	;0
		2   289  RECV/63                   16?2=     ?3                   ?16                 	;0
		3   290  FE_RESET_R/77             $7=       16?0                 ?36                 	;0
		4   290  FE_FETCH_R/78             ?0        $7                   16?3                	;36	>>36	<<35
		5   291  ISSET_ISEMPTY_DIM_OBJ/115 #8=       16?1                 16?3                	;33554432
		6   291  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		7   291  JMPZ/43                   ?0        #9                   ?9                  	;0	>>9
		8   292  CONT/255                  ?0        ?4                   0:1                 	;0
		9   294  FETCH_OBJ_R/82            $10=      ?1668355936          0:'tagDefinitions'  	;0	<<7
		10  294  INIT_METHOD_CALL/112      ?0        $10                  1:'get'             	;1
		11  294  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		12  294  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		13  294  ASSIGN/38                 ?5        16?4                 $11                 	;0
		14  295  FETCH_DIM_R/81            $13=      16?1                 16?3                	;0
		15  295  ASSIGN/38                 ?7        16?5                 $13                 	;0
		16  296  INIT_METHOD_CALL/112      ?0        16?4                 3:'isMultiple'      	;0
		17  296  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		18  296  BOOL_NOT/13               #16=      $15                  ?0                  	;0
		19  296  JMPZ/43                   ?0        #16                  ?26                 	;0	>>26
		20  297  INIT_METHOD_CALL/112      ?0        ?4294967040          5:'dumpAndAddToLines'	;3
		21  297  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		22  297  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		23  297  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		24  297  DO_FCALL/60               ?10       ?0                   ?0                  	;0
		25  298  CONT/255                  ?0        ?4                   0:1                 	;0
		26  300  FE_RESET_R/77             $18=      16?5                 ?34                 	;0	<<19
		27  300  FE_FETCH_R/78             ?0        $18                  16?6                	;34	>>34	<<33
		28  301  INIT_METHOD_CALL/112      ?0        ?4397406             7:'dumpAndAddToLines'	;3
		29  301  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		30  301  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
		31  301  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		32  301  DO_FCALL/60               ?12       ?0                   ?0                  	;0
		33  301  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
		34  301  FE_FREE/127               ?0        $18                  ?0                  	;0	<<26
		35  301  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		36  301  FE_FREE/127               ?0        $7                   ?0                  	;0	<<3
		37  304  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	private function dumpValue(TagDefinition $definition, $value)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   305  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   305  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   306  INIT_METHOD_CALL/112      ?0        16?0                 0:'getValueType'    	;0
		3   306  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		4   306  ASSIGN/38                 ?1        16?2                 $4                  	;0
		5   307  FETCH_OBJ_R/82            $6=       ?4414262             2:'valueDumpers'    	;0
		6   307  INIT_METHOD_CALL/112      ?0        $6                   3:'get'             	;1
		7   307  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		8   307  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		9   307  ASSIGN/38                 ?4        16?3                 $7                  	;0
		10  308  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'is_callable'     	;1
		11  308  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		12  308  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		13  308  BOOL_NOT/13               #10=      $9                   ?0                  	;0
		14  308  JMPZ/43                   ?0        #10                  ?16                 	;0	>>16
		15  309  RETURN/62                 ?0        16?1                 ?0                  	;0
		16  311  IS_IDENTICAL/15           #11=      7:'attribute-list'   16?2                	;0	<<14
		17  311  JMPZ/43                   ?0        #11                  ?25                 	;0	>>25
		18  312  INIT_DYNAMIC_CALL/128     ?0        ?0                   16?3                	;2
		19  312  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		20  312  INIT_METHOD_CALL/112      ?0        16?0                 8:'getAttributeTypes'	;0
		21  312  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		22  312  SEND_VAR_NO_REF_EX/50     ?96       $12                  ?2                  	;0
		23  312  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		24  312  RETURN/62                 ?0        $13                  ?0                  	;0
		25  314  INIT_DYNAMIC_CALL/128     ?0        ?0                   16?3                	;1	<<17
		26  314  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		27  314  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		28  314  RETURN/62                 ?0        $14                  ?0                  	;0
		29  315  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	private function dumpAndAddToLines(TagDefinition $definition, $value, Lines $lines)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   316  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   316  RECV/63                   16?2=     ?3                   ?16                 	;0
		3   317  INIT_METHOD_CALL/112      ?0        16?2                 0:'add'             	;1
		4   317  NEW/68                    $3=       2:'Line'             ?320                	;2
		5   317  INIT_METHOD_CALL/112      ?0        16?0                 4:'getTag'          	;0
		6   317  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		7   317  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
		8   317  INIT_METHOD_CALL/112      ?0        ?80                  6:'dumpValue'       	;2
		9   317  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		10  317  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		11  317  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		12  317  SEND_VAR_NO_REF_EX/50     ?96       $5                   ?2                  	;0
		13  317  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		14  317  SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
		15  317  DO_FCALL/60               ?4        ?0                   ?0                  	;0
		16  318  INIT_METHOD_CALL/112      ?0        16?0                 8:'isUriAware'      	;0
		17  318  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		18  318  JMPZ/43                   ?0        $8                   ?27                 	;0	>>27
		19  319  INIT_METHOD_CALL/112      ?0        16?2                 10:'add'            	;1
		20  319  NEW/68                    $9=       12:'Line'            ?160                	;2
		21  319  SEND_VAL_EX/116           ?80       14:NULL              ?1                  	;0
		22  319  FETCH_DIM_FUNC_ARG/93     $10=      16?1                 15:'uri'            	;2
		23  319  SEND_VAR_EX/66            ?96       $10                  ?2                  	;0
		24  319  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		25  319  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
		26  319  DO_FCALL/60               ?9        ?0                   ?0                  	;0
		27  321  NOP/0                     ?0        16:NULL              ?0                  	;4294967295	<<18
		*/
	}
}

class DumpingException
{
}

class DefinitionException
{
}

class TagDefinition
{
	private $tag;
	private $config;
	private $attributeTypes;

	public function __construct($tag, Config $config)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   334  RECV/63                   16?1=     ?2                   ?0                  	;0
		2   335  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_string'       	;1
		3   335  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   335  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		5   335  BOOL_NOT/13               #3=       $2                   ?0                  	;0
		6   335  JMPZ/43                   ?0        #3                   ?15                 	;0	>>15
		7   336  NEW/68                    $4=       2:'InvalidArgumentException' ?224                	;2
		8   336  SEND_VAL_EX/116           ?80       4:'$tag can only be string, got %s' ?1                  	;0
		9   336  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'gettype'         	;1
		10  336  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		11  336  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		12  336  SEND_VAR_NO_REF_EX/50     ?96       $5                   ?2                  	;0
		13  336  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		14  336  THROW/108                 ?0        $4                   ?0                  	;0
		15  338  ASSIGN_OBJ/136            ?5        ?1668362584          7:'tag'             	;0	<<6
		16  338  OP_DATA/137               ?0        16?0                 ?0                  	;0
		17  339  ASSIGN_OBJ/136            ?6        ?1668362584          8:'config'          	;0
		18  339  OP_DATA/137               ?0        16?1                 ?0                  	;0
		19  340  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getTag()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   342  FETCH_OBJ_R/82            $0=       ?0                   0:'tag'             	;0
		1   342  RETURN/62                 ?0        $0                   ?0                  	;0
		2   343  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getValueType()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  FETCH_OBJ_R/82            $1=       ?2670193600          0:'config'          	;0
		1   345  INIT_METHOD_CALL/112      ?0        $1                   1:'get'             	;1
		2   345  SEND_VAL_EX/116           ?80       3:'type'             ?1                  	;0
		3   345  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   345  ASSIGN/38                 ?2        16?0                 $2                  	;0
		5   346  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_array'        	;1
		6   346  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7   346  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		8   346  JMPZ/43                   ?0        $4                   ?12                 	;0	>>12
		9   347  ASSIGN_OBJ/136            ?4        ?4583821             6:'attributeTypes'  	;0
		10  347  OP_DATA/137               ?0        16?0                 ?0                  	;0
		11  348  RETURN/62                 ?0        7:'attribute-list'   ?0                  	;0
		12  350  RETURN/62                 ?0        16?0                 ?0                  	;0	<<8
		13  351  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function isMultiple()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   353  FETCH_OBJ_R/82            $0=       ?4410621             0:'config'          	;0
		1   353  INIT_METHOD_CALL/112      ?0        $0                   1:'get'             	;2
		2   353  SEND_VAL_EX/116           ?80       3:'multiple'         ?1                  	;0
		3   353  SEND_VAL_EX/116           ?96       4:false              ?2                  	;0
		4   353  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		5   353  RETURN/62                 ?0        $1                   ?0                  	;0
		6   354  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getCategory()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   356  FETCH_OBJ_R/82            $0=       ?4410621             0:'config'          	;0
		1   356  INIT_METHOD_CALL/112      ?0        $0                   1:'get'             	;1
		2   356  SEND_VAL_EX/116           ?80       3:'category'         ?1                  	;0
		3   356  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		4   356  RETURN/62                 ?0        $1                   ?0                  	;0
		5   357  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function isUriAware()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   359  FETCH_OBJ_R/82            $0=       ?4410621             0:'config'          	;0
		1   359  INIT_METHOD_CALL/112      ?0        $0                   1:'get'             	;2
		2   359  SEND_VAL_EX/116           ?80       3:'uriAware'         ?1                  	;0
		3   359  SEND_VAL_EX/116           ?96       4:false              ?2                  	;0
		4   359  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		5   359  RETURN/62                 ?0        $1                   ?0                  	;0
		6   360  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getAttributeTypes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   362  FETCH_OBJ_R/82            $0=       ?1667627712          0:'attributeTypes'  	;0
		1   362  RETURN/62                 ?0        $0                   ?0                  	;0
		2   363  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class TagDefinitions
{
	private $definitions;
	private $headTags;
	private $mediaSegmentTags;
	private $footTags;

	public function __construct(array $definitions)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   371  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   372  FE_RESET_R/77             $4=       16?0                 ?24                 	;0
		2   372  FE_FETCH_R/78             #5=       $4                   16?1                	;24	>>24	<<23
		3   372  ASSIGN/38                 ?2        16?2                 #5                  	;0
		4   373  FETCH_DIM_R/81            $7=       16?1                 0:'position'        	;0
		5   373  ASSIGN/38                 ?4        16?3                 $7                  	;0
		6   374  FETCH_DIM_R/81            $9=       16?1                 1:'category'        	;0
		7   374  IS_IDENTICAL/15           #10=      2:'media-segment'    $9                  	;0
		8   374  JMPZ/43                   ?0        #10                  ?14                 	;0	>>14
		9   375  FETCH_DIM_R/81            $12=      16?1                 4:'position'        	;0
		10  375  FETCH_OBJ_W/85            $11=      ?4430313             3:'mediaSegmentTags'	;0
		11  375  ASSIGN_DIM/147            ?9        $11                  $12                 	;0
		12  375  OP_DATA/137               ?0        16?2                 ?0                  	;0
		13  376  CONT/255                  ?0        ?2                   0:1                 	;0
		14  378  IS_SMALLER/19             #14=      16?3                 5:0                 	;0	<<8
		15  378  JMPZ/43                   ?0        #14                  ?20                 	;0	>>20
		16  379  FETCH_OBJ_W/85            $15=      ?4414262             6:'headTags'        	;0
		17  379  ASSIGN_DIM/147            ?12       $15                  16?3                	;0
		18  379  OP_DATA/137               ?0        16?2                 ?0                  	;0
		19  380  CONT/255                  ?0        ?2                   0:1                 	;0
		20  382  FETCH_OBJ_W/85            $17=      ?1668367528          7:'footTags'        	;0	<<15
		21  382  ASSIGN_DIM/147            ?14       $17                  16?3                	;0
		22  382  OP_DATA/137               ?0        16?2                 ?0                  	;0
		23  382  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
		24  382  FE_FREE/127               ?0        $4                   ?0                  	;0	<<1
		25  384  ASSIGN_OBJ/136            ?15       ?4397406             8:'definitions'     	;0
		26  384  OP_DATA/137               ?0        16?0                 ?0                  	;0
		27  385  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'ksort'           	;1
		28  385  FETCH_OBJ_FUNC_ARG/94     $20=      ?2670194048          11:'headTags'       	;1
		29  385  SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
		30  385  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
		31  386  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'ksort'          	;1
		32  386  FETCH_OBJ_FUNC_ARG/94     $22=      ?2670194048          14:'mediaSegmentTags'	;1
		33  386  SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
		34  386  DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
		35  387  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'ksort'          	;1
		36  387  FETCH_OBJ_FUNC_ARG/94     $24=      ?2670194048          17:'footTags'       	;1
		37  387  SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
		38  387  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
		39  388  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}

	public function get($tag)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   389  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   390  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_string'       	;1
		2   390  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   390  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   390  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		5   390  JMPZ/43                   ?0        #2                   ?14                 	;0	>>14
		6   391  NEW/68                    $3=       2:'InvalidArgumentException' ?224                	;2
		7   391  SEND_VAL_EX/116           ?80       4:'$tag can only be string, got %s' ?1                  	;0
		8   391  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'gettype'         	;1
		9   391  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		10  391  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		11  391  SEND_VAR_NO_REF_EX/50     ?96       $4                   ?2                  	;0
		12  391  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		13  391  THROW/108                 ?0        $3                   ?0                  	;0
		14  393  FETCH_OBJ_IS/91           $6=       ?1669056256          7:'definitions'     	;0	<<5
		15  393  ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   16?0                	;33554432
		16  393  BOOL_NOT/13               #8=       #7                   ?0                  	;0
		17  393  JMPZ/43                   ?0        #8                   ?19                 	;0	>>19
		18  394  RETURN/62                 ?0        8:NULL               ?0                  	;0
		19  396  NEW/68                    $9=       9:'TagDefinition'    ?288                	;2	<<17
		20  396  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		21  396  NEW/68                    $10=      11:'Config'          ?160                	;1
		22  396  FETCH_OBJ_FUNC_ARG/94     $11=      ?2670193312          13:'definitions'    	;1
		23  396  FETCH_DIM_FUNC_ARG/93     $12=      $11                  16?0                	;1
		24  396  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
		25  396  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		26  396  SEND_VAR_NO_REF_EX/50     ?96       $10                  ?2                  	;0
		27  396  DO_FCALL/60               ?13       ?8                   ?0                  	;0
		28  396  RETURN/62                 ?0        $9                   ?0                  	;0
		29  397  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	public function getHeadTags()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   399  FETCH_OBJ_R/82            $0=       ?19                  0:'headTags'        	;0
		1   399  RETURN/62                 ?0        $0                   ?0                  	;0
		2   400  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getMediaSegmentTags()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   402  FETCH_OBJ_R/82            $0=       ?19                  0:'mediaSegmentTags'	;0
		1   402  RETURN/62                 ?0        $0                   ?0                  	;0
		2   403  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getFootTags()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   405  FETCH_OBJ_R/82            $0=       ?19                  0:'footTags'        	;0
		1   405  RETURN/62                 ?0        $0                   ?0                  	;0
		2   406  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class AttributeStringToArray
{
	public function __invoke($string)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   410  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   411  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_string'       	;1
		2   411  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   411  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		4   411  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		5   411  JMPZ/43                   ?0        #7                   ?17                 	;0	>>17
		6   412  NEW/68                    $8=       2:'InvalidArgumentException' ?320                	;1
		7   412  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'sprintf'         	;2
		8   412  SEND_VAL_EX/116           ?80       6:'$string can only be string, got %s' ?1                  	;0
		9   412  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'gettype'         	;1
		10  412  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		11  412  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		12  412  SEND_VAR_NO_REF_EX/50     ?96       $9                   ?2                  	;0
		13  412  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		14  412  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
		15  412  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		16  412  THROW/108                 ?0        $8                   ?0                  	;0
		17  414  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'preg_match_all'  	;3	<<5
		18  414  SEND_VAL_EX/116           ?80       11:'/(?<=^|,)[A-Z0-9-]+=("?).+?\\1(?=,|$)/' ?1                  	;0
		19  414  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		20  414  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		21  414  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
		22  415  ASSIGN/38                 ?7        16?2                 12:array (
)        	;0
		23  416  FETCH_DIM_R/81            $14=      16?1                 13:0                	;0
		24  416  FE_RESET_R/77             $15=      $14                  ?39                 	;0
		25  416  FE_FETCH_R/78             ?0        $15                  16?3                	;39	>>39	<<38
		26  417  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'explode'        	;3
		27  417  SEND_VAL_EX/116           ?80       16:'='               ?1                  	;0
		28  417  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		29  417  SEND_VAL_EX/116           ?112      17:2                 ?3                  	;0
		30  417  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		31  417  FETCH_LIST/98             $17=      $16                  18:0                	;0
		32  417  ASSIGN/38                 ?12       16?4                 $17                 	;0
		33  417  FETCH_LIST/98             $19=      $16                  19:1                	;0
		34  417  ASSIGN/38                 ?14       16?5                 $19                 	;0
		35  417  FREE/70                   ?0        $16                  ?0                  	;0
		36  418  ASSIGN_DIM/147            ?15       16?2                 16?4                	;0
		37  418  OP_DATA/137               ?0        16?5                 ?0                  	;0
		38  418  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
		39  418  FE_FREE/127               ?0        $15                  ?0                  	;0	<<24
		40  420  RETURN/62                 ?0        16?2                 ?0                  	;0
		41  421  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}
}

class Iso8601Transformer
{
	static public function fromString($string)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   425  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   426  NEW/68                    $1=       0:'DateTime'         ?96                 	;1
		2   426  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   426  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		4   426  RETURN/62                 ?0        $1                   ?0                  	;0
		5   427  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	static public function toString(DateTime $datetime)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   428  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   429  INIT_METHOD_CALL/112      ?0        16?0                 0:'format'          	;1
		2   429  SEND_VAL_EX/116           ?80       2:'P'                ?1                  	;0
		3   429  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   429  ASSIGN/38                 ?1        16?1                 $2                  	;0
		5   430  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'sprintf'         	;3
		6   430  SEND_VAL_EX/116           ?80       5:'%s%s'             ?1                  	;0
		7   430  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'substr'          	;3
		8   430  INIT_METHOD_CALL/112      ?0        16?0                 8:'format'          	;1
		9   430  SEND_VAL_EX/116           ?80       10:'Y-m-d\\TH:i:s.u' ?1                  	;0
		10  430  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		11  430  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
		12  430  SEND_VAL_EX/116           ?96       11:0                 ?2                  	;0
		13  430  SEND_VAL_EX/116           ?112      12:-3                ?3                  	;0
		14  430  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		15  430  SEND_VAR_NO_REF_EX/50     ?96       $5                   ?2                  	;0
		16  430  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		17  430  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		18  430  RETURN/62                 ?0        $6                   ?0                  	;0
		19  431  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}
}

class Resolution
{
	private $width;
	private $height;

	public function __construct($width, $height)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   437  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   437  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   438  CAST/21                   #3=       16?0                 ?0                  	;4
		3   438  ASSIGN_OBJ/136            ?0        ?1667632416          0:'width'           	;0
		4   438  OP_DATA/137               ?0        #3                   ?0                  	;0
		5   439  CAST/21                   #5=       16?1                 ?0                  	;4
		6   439  ASSIGN_OBJ/136            ?2        ?1667632416          1:'height'          	;0
		7   439  OP_DATA/137               ?0        #5                   ?0                  	;0
		8   440  FETCH_OBJ_R/82            $6=       ?0                   2:'width'           	;0
		9   440  IS_SMALLER/19             #7=       $6                   3:1                 	;0
		10  440  JMPNZ_EX/47               #7=       #7                   ?14                 	;0	>>14
		11  440  FETCH_OBJ_R/82            $8=       ?0                   4:'height'          	;0
		12  440  IS_SMALLER/19             #9=       $8                   5:1                 	;0
		13  440  BOOL/52                   #7=       #9                   ?0                  	;0
		14  440  JMPZ/43                   ?0        #7                   ?19                 	;0	>>19	<<10
		15  441  NEW/68                    $10=      6:'InvalidArgumentException' ?96                 	;1
		16  441  SEND_VAL_EX/116           ?80       8:'$width or $height should be an integer greater than 0' ?1                  	;0
		17  441  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		18  441  THROW/108                 ?0        $10                  ?0                  	;0
		19  443  NOP/0                     ?0        9:NULL               ?0                  	;4294967295	<<14
		*/
	}

	static public function fromString($string)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   444  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   445  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'explode'         	;2
		2   445  SEND_VAL_EX/116           ?80       2:'x'                ?1                  	;0
		3   445  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		4   445  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		5   445  FETCH_LIST/98             $4=       $3                   3:0                 	;0
		6   445  ASSIGN/38                 ?2        16?1                 $4                  	;0
		7   445  FETCH_LIST/98             $6=       $3                   4:1                 	;0
		8   445  ASSIGN/38                 ?4        16?2                 $6                  	;0
		9   445  FREE/70                   ?0        $3                   ?0                  	;0
		10  446  NEW/68                    $8=       ?513                 ?128                	;2
		11  446  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		12  446  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		13  446  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		14  446  RETURN/62                 ?0        $8                   ?0                  	;0
		15  447  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getWidth()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   449  FETCH_OBJ_R/82            $0=       ?10                  0:'width'           	;0
		1   449  RETURN/62                 ?0        $0                   ?0                  	;0
		2   450  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getHeight()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   452  FETCH_OBJ_R/82            $0=       ?10                  0:'height'          	;0
		1   452  RETURN/62                 ?0        $0                   ?0                  	;0
		2   453  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   455  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'sprintf'         	;3
		1   455  SEND_VAL_EX/116           ?80       2:'%dx%d'            ?1                  	;0
		2   455  FETCH_OBJ_FUNC_ARG/94     $0=       ?1663262656          3:'width'           	;2
		3   455  SEND_VAR_EX/66            ?96       $0                   ?2                  	;0
		4   455  FETCH_OBJ_FUNC_ARG/94     $1=       ?1663262656          4:'height'          	;3
		5   455  SEND_VAR_EX/66            ?112      $1                   ?3                  	;0
		6   455  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		7   455  RETURN/62                 ?0        $2                   ?0                  	;0
		8   456  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}
}

class Byterange
{
	private $length;
	private $offset;

	public function __construct($length, $offset)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   462  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   462  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   463  CAST/21                   #3=       16?0                 ?0                  	;4
		3   463  ASSIGN_OBJ/136            ?0        ?1668931296          1:'length'          	;0
		4   463  OP_DATA/137               ?0        #3                   ?0                  	;0
		5   464  FETCH_OBJ_R/82            $4=       ?4397406             2:'length'          	;0
		6   464  IS_SMALLER/19             #5=       $4                   3:1                 	;0
		7   464  JMPZ/43                   ?0        #5                   ?12                 	;0	>>12
		8   465  NEW/68                    $6=       4:'InvalidArgumentException' ?96                 	;1
		9   465  SEND_VAL_EX/116           ?80       6:'$length should be an integer greater than 0' ?1                  	;0
		10  465  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		11  465  THROW/108                 ?0        $6                   ?0                  	;0
		12  467  IS_IDENTICAL/15           #8=       7:NULL               16?1                	;0	<<7
		13  467  JMPZ/43                   ?0        #8                   ?15                 	;0	>>15
		14  468  RETURN/62                 ?0        8:NULL               ?0                  	;0
		15  470  CAST/21                   #10=      16?1                 ?0                  	;4	<<13
		16  470  ASSIGN_OBJ/136            ?7        ?13                  9:'offset'          	;0
		17  470  OP_DATA/137               ?0        #10                  ?0                  	;0
		18  471  FETCH_OBJ_R/82            $11=      ?4583868             10:'offset'         	;0
		19  471  IS_SMALLER/19             #12=      $11                  11:1                	;0
		20  471  JMPZ/43                   ?0        #12                  ?25                 	;0	>>25
		21  472  NEW/68                    $13=      12:'InvalidArgumentException' ?96                 	;1
		22  472  SEND_VAL_EX/116           ?80       14:'$offset should be an integer greater than 0' ?1                  	;0
		23  472  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		24  472  THROW/108                 ?0        $13                  ?0                  	;0
		25  474  NOP/0                     ?0        15:NULL              ?0                  	;4294967295	<<20
		*/
	}

	static public function fromString($string)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   475  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   476  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'array_pad'       	;3
		2   476  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'explode'         	;2
		3   476  SEND_VAL_EX/116           ?80       4:'@'                ?1                  	;0
		4   476  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		5   476  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		6   476  SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
		7   476  SEND_VAL_EX/116           ?96       5:2                  ?2                  	;0
		8   476  SEND_VAL_EX/116           ?112      6:NULL               ?3                  	;0
		9   476  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		10  476  FETCH_LIST/98             $5=       $4                   7:0                 	;0
		11  476  ASSIGN/38                 ?3        16?1                 $5                  	;0
		12  476  FETCH_LIST/98             $7=       $4                   8:1                 	;0
		13  476  ASSIGN/38                 ?5        16?2                 $7                  	;0
		14  476  FREE/70                   ?0        $4                   ?0                  	;0
		15  477  NEW/68                    $9=       ?513                 ?128                	;2
		16  477  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		17  477  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		18  477  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		19  477  RETURN/62                 ?0        $9                   ?0                  	;0
		20  478  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function getLength()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   480  FETCH_OBJ_R/82            $0=       ?15                  0:'length'          	;0
		1   480  RETURN/62                 ?0        $0                   ?0                  	;0
		2   481  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getOffset()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   483  FETCH_OBJ_R/82            $0=       ?15                  0:'offset'          	;0
		1   483  RETURN/62                 ?0        $0                   ?0                  	;0
		2   484  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   486  FETCH_OBJ_R/82            $0=       ?4583868             0:'offset'          	;0
		1   486  IS_IDENTICAL/15           #1=       1:NULL               $0                  	;0
		2   486  JMPZ/43                   ?0        #1                   ?6                  	;0	>>6
		3   487  FETCH_OBJ_R/82            $2=       ?2670193632          2:'length'          	;0
		4   487  CAST/21                   #3=       $2                   ?0                  	;6
		5   487  RETURN/62                 ?0        #3                   ?0                  	;0
		6   489  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'sprintf'         	;3	<<2
		7   489  SEND_VAL_EX/116           ?80       5:'%d@%d'            ?1                  	;0
		8   489  FETCH_OBJ_FUNC_ARG/94     $4=       ?1668855128          6:'length'          	;2
		9   489  SEND_VAR_EX/66            ?96       $4                   ?2                  	;0
		10  489  FETCH_OBJ_FUNC_ARG/94     $5=       ?1668855128          7:'offset'          	;3
		11  489  SEND_VAR_EX/66            ?112      $5                   ?3                  	;0
		12  489  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		13  489  RETURN/62                 ?0        $6                   ?0                  	;0
		14  490  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}
}

class Inf
{
	private $duration;
	private $title;
	private $version;

	public function __construct($duration, $title, $version)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   497  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   497  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   497  RECV_INIT/64              16?2=     ?3                   1:6                 	;0
		3   498  MUL/3                     #4=       3:1                  16?0                	;0
		4   498  ASSIGN_OBJ/136            ?0        ?1668109344          2:'duration'        	;0
		5   498  OP_DATA/137               ?0        #4                   ?0                  	;0
		6   499  FETCH_OBJ_R/82            $5=       ?4583868             4:'duration'        	;0
		7   499  IS_SMALLER/19             #6=       $5                   5:0                 	;0
		8   499  JMPZ/43                   ?0        #6                   ?13                 	;0	>>13
		9   500  NEW/68                    $7=       6:'InvalidArgumentException' ?96                 	;1
		10  500  SEND_VAL_EX/116           ?80       8:'$duration should not be less than 0' ?1                  	;0
		11  500  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		12  500  THROW/108                 ?0        $7                   ?0                  	;0
		13  502  CAST/21                   #10=      16?2                 ?0                  	;4	<<8
		14  502  ASSIGN_OBJ/136            ?6        ?1668109344          9:'version'         	;0
		15  502  OP_DATA/137               ?0        #10                  ?0                  	;0
		16  503  FETCH_OBJ_R/82            $11=      ?2670193632          10:'version'        	;0
		17  503  IS_SMALLER/19             #12=      $11                  11:2                	;0
		18  503  JMPNZ_EX/47               #12=      #12                  ?22                 	;0	>>22
		19  503  FETCH_OBJ_R/82            $13=      ?487                 12:'version'        	;0
		20  503  IS_SMALLER/19             #14=      13:7                 $13                 	;0
		21  503  BOOL/52                   #12=      #14                  ?0                  	;0
		22  503  JMPZ/43                   ?0        #12                  ?30                 	;0	>>30	<<18
		23  504  NEW/68                    $15=      14:'InvalidArgumentException' ?192                	;1
		24  504  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'sprintf'        	;1
		25  504  SEND_VAL_EX/116           ?80       18:'$version should be an integer greater than 1 and less than 8' ?1                  	;0
		26  504  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		27  504  SEND_VAR_NO_REF_EX/50     ?80       $16                  ?1                  	;0
		28  504  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		29  504  THROW/108                 ?0        $15                  ?0                  	;0
		30  506  IS_IDENTICAL/15           #18=      19:NULL              16?1                	;0	<<22
		31  506  JMPZ/43                   ?0        #18                  ?33                 	;0	>>33
		32  507  RETURN/62                 ?0        20:NULL              ?0                  	;0
		33  509  CAST/21                   #20=      16?1                 ?0                  	;6	<<31
		34  509  ASSIGN_OBJ/136            ?16       ?31                  21:'title'          	;0
		35  509  OP_DATA/137               ?0        #20                  ?0                  	;0
		36  510  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
		*/
	}

	static public function fromString($string)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   511  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   512  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'explode'         	;2
		2   512  SEND_VAL_EX/116           ?80       2:','                ?1                  	;0
		3   512  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		4   512  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		5   512  FETCH_LIST/98             $4=       $3                   3:0                 	;0
		6   512  ASSIGN/38                 ?2        16?1                 $4                  	;0
		7   512  FETCH_LIST/98             $6=       $3                   4:1                 	;0
		8   512  ASSIGN/38                 ?4        16?2                 $6                  	;0
		9   512  FREE/70                   ?0        $3                   ?0                  	;0
		10  513  NEW/68                    $8=       ?513                 ?128                	;2
		11  513  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		12  513  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		13  513  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		14  513  RETURN/62                 ?0        $8                   ?0                  	;0
		15  514  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function getDuration()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   516  FETCH_OBJ_R/82            $0=       ?10                  0:'duration'        	;0
		1   516  RETURN/62                 ?0        $0                   ?0                  	;0
		2   517  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setTitle($title)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   518  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   519  ASSIGN_OBJ/136            ?0        ?2670194256          0:'title'           	;0
		2   519  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   520  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getTitle()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   522  FETCH_OBJ_R/82            $0=       ?0                   0:'title'           	;0
		1   522  RETURN/62                 ?0        $0                   ?0                  	;0
		2   523  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   525  FETCH_OBJ_R/82            $0=       ?4397406             0:'version'         	;0
		1   525  IS_SMALLER/19             #1=       $0                   1:3                 	;0
		2   525  JMPZ/43                   ?0        #1                   ?14                 	;0	>>14
		3   526  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'sprintf'         	;3
		4   526  SEND_VAL_EX/116           ?80       4:'%d,%s'            ?1                  	;0
		5   526  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'round'           	;1
		6   526  FETCH_OBJ_FUNC_ARG/94     $2=       ?4534362             7:'duration'        	;1
		7   526  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		8   526  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		9   526  SEND_VAR_NO_REF_EX/50     ?96       $3                   ?2                  	;0
		10  526  FETCH_OBJ_FUNC_ARG/94     $4=       ?1                   8:'title'           	;3
		11  526  SEND_VAR_EX/66            ?112      $4                   ?3                  	;0
		12  526  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		13  526  RETURN/62                 ?0        $5                   ?0                  	;0
		14  528  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'sprintf'         	;3	<<2
		15  528  SEND_VAL_EX/116           ?80       11:'%.3f,%s'         ?1                  	;0
		16  528  FETCH_OBJ_FUNC_ARG/94     $6=       ?1668110720          12:'duration'       	;2
		17  528  SEND_VAR_EX/66            ?96       $6                   ?2                  	;0
		18  528  FETCH_OBJ_FUNC_ARG/94     $7=       ?1668110720          13:'title'          	;3
		19  528  SEND_VAR_EX/66            ?112      $7                   ?3                  	;0
		20  528  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		21  528  RETURN/62                 ?0        $8                   ?0                  	;0
		22  529  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}
}

class ParserFacade
{
	private $parser;

	public function parse(StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   534  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   535  FETCH_OBJ_R/82            $2=       ?4583868             0:'parser'          	;0
		2   535  IS_IDENTICAL/15           #3=       1:NULL               $2                  	;0
		3   535  JMPZ/43                   ?0        #3                   ?22                 	;0	>>22
		4   536  NEW/68                    $4=       2:'TagDefinitions'   ?128                	;1
		5   536  INCLUDE_OR_EVAL/73        $5=       4:'/home/xui/includes/libs/resources/tags.php' ?0                  	;8
		6   536  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
		7   536  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		8   536  ASSIGN/38                 ?5        16?1                 $4                  	;0
		9   537  NEW/68                    $9=       6:'Parser'           ?352                	;3
		10  537  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		11  537  NEW/68                    $10=      8:'Config'           ?128                	;1
		12  537  INCLUDE_OR_EVAL/73        $11=      10:'/home/xui/includes/libs/resources/tagValueParsers.php' ?0                  	;8
		13  537  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		14  537  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		15  537  SEND_VAR_NO_REF_EX/50     ?96       $10                  ?2                  	;0
		16  537  NEW/68                    $13=      11:'DataBuilder'     ?64                 	;0
		17  537  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		18  537  SEND_VAR_NO_REF_EX/50     ?112      $13                  ?3                  	;0
		19  537  DO_FCALL/60               ?13       ?8                   ?0                  	;0
		20  537  ASSIGN_OBJ/136            ?6        ?2670193808          5:'parser'          	;0
		21  537  OP_DATA/137               ?0        $9                   ?0                  	;0
		22  539  FETCH_OBJ_R/82            $16=      ?4410501             13:'parser'         	;0	<<3
		23  539  INIT_METHOD_CALL/112      ?0        $16                  14:'parse'          	;1
		24  539  NEW/68                    $17=      16:'Lines'           ?96                 	;1
		25  539  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		26  539  DO_FCALL/60               ?16       ?8                   ?0                  	;0
		27  539  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		28  539  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		29  539  RETURN/62                 ?0        $19                  ?0                  	;0
		30  540  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}
}

class DumperFacade
{
	private $dumper;

	public function dump(ArrayAccess $data, StreamInterface $stream)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   545  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   545  RECV/63                   16?1=     ?2                   ?16                 	;0
		2   546  FETCH_OBJ_R/82            $3=       ?4583868             0:'dumper'          	;0
		3   546  IS_IDENTICAL/15           #4=       1:NULL               $3                  	;0
		4   546  JMPZ/43                   ?0        #4                   ?20                 	;0	>>20
		5   547  NEW/68                    $5=       2:'TagDefinitions'   ?128                	;1
		6   547  INCLUDE_OR_EVAL/73        $6=       4:'/home/xui/includes/libs/resources/tags.php' ?0                  	;8
		7   547  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		8   547  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		9   547  ASSIGN/38                 ?5        16?2                 $5                  	;0
		10  548  NEW/68                    $10=      6:'Dumper'           ?256                	;2
		11  548  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		12  548  NEW/68                    $11=      8:'Config'           ?128                	;1
		13  548  INCLUDE_OR_EVAL/73        $12=      10:'/home/xui/includes/libs/resources/tagValueDumpers.php' ?0                  	;8
		14  548  SEND_VAR_NO_REF_EX/50     ?80       $12                  ?1                  	;0
		15  548  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		16  548  SEND_VAR_NO_REF_EX/50     ?96       $11                  ?2                  	;0
		17  548  DO_FCALL/60               ?11       ?8                   ?0                  	;0
		18  548  ASSIGN_OBJ/136            ?6        ?2670193808          5:'dumper'          	;0
		19  548  OP_DATA/137               ?0        $10                  ?0                  	;0
		20  550  FETCH_OBJ_R/82            $15=      ?4397406             11:'dumper'         	;0	<<4
		21  550  INIT_METHOD_CALL/112      ?0        $15                  12:'dumpToLines'    	;2
		22  550  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		23  550  NEW/68                    $16=      14:'Lines'           ?96                 	;1
		24  550  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		25  550  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		26  550  SEND_VAR_NO_REF_EX/50     ?96       $16                  ?2                  	;0
		27  550  DO_FCALL/60               ?15       ?0                   ?0                  	;0
		28  551  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   2    NOP/0                     ?0        ?0                   ?0                  	;0
1   24   DECLARE_CLASS/139         $1=       0:'streaminterface'  ?0                  	;0
2   24   ADD_INTERFACE/144         ?0        $1                   2:'Iterator'        	;0
3   28   FETCH_CLASS/109           $2=       ?0                   4:'SplFileObject'   	;0
4   28   DECLARE_INHERITED_CLASS/140 $3=       6:'filestream'       $2                  	;4294967295
5   28   ADD_INTERFACE/144         ?0        $3                   8:'StreamInterface' 	;0
6   28   VERIFY_ABSTRACT_CLASS/146 ?0        $3                   ?0                  	;0
7   34   FETCH_CLASS/109           $4=       ?0                   10:'ArrayIterator'  	;0
8   34   DECLARE_INHERITED_CLASS/140 $5=       12:'textstream'      $4                  	;4294967295
9   34   ADD_INTERFACE/144         ?0        $5                   14:'StreamInterface'	;0
10  34   VERIFY_ABSTRACT_CLASS/146 ?0        $5                   ?0                  	;0
11  50   NOP/0                     ?0        ?0                   ?0                  	;0
12  75   NOP/0                     ?0        ?0                   ?0                  	;0
13  117  NOP/0                     ?0        ?0                   ?0                  	;0
14  120  NOP/0                     ?0        ?0                   ?0                  	;0
15  153  NOP/0                     ?0        ?0                   ?0                  	;0
16  212  DECLARE_CLASS/139         $11=      16:'lines'           ?0                  	;0
17  212  ADD_INTERFACE/144         ?0        $11                  18:'Iterator'       	;0
18  212  VERIFY_ABSTRACT_CLASS/146 ?0        $11                  ?0                  	;0
19  249  NOP/0                     ?0        ?0                   ?0                  	;0
20  270  NOP/0                     ?0        ?0                   ?0                  	;0
21  324  NOP/0                     ?0        ?0                   ?0                  	;0
22  327  NOP/0                     ?0        ?0                   ?0                  	;0
23  330  NOP/0                     ?0        ?0                   ?0                  	;0
24  366  NOP/0                     ?0        ?0                   ?0                  	;0
25  409  NOP/0                     ?0        ?0                   ?0                  	;0
26  424  NOP/0                     ?0        ?0                   ?0                  	;0
27  434  NOP/0                     ?0        ?0                   ?0                  	;0
28  459  NOP/0                     ?0        ?0                   ?0                  	;0
29  493  NOP/0                     ?0        ?0                   ?0                  	;0
30  532  NOP/0                     ?0        ?0                   ?0                  	;0
31  543  NOP/0                     ?0        ?0                   ?0                  	;0
32  552  NOP/0                     ?0        20:1                 ?0                  	;4294967295
*/

?>