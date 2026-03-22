<?php


class Chain
{
	private $name;
	private $table;
	private $policy;
	private $rules = [];

	public function __construct($name, $table, $policy)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  11  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  11  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  11  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3  12  ASSIGN_OBJ/136            ?0        ?1667559904          0:'name'            	;0
		4  12  OP_DATA/137               ?0        16?0                 ?0                  	;0
		5  13  ASSIGN_OBJ/136            ?1        ?1667559904          1:'policy'          	;0
		6  13  OP_DATA/137               ?0        16?2                 ?0                  	;0
		7  14  ASSIGN_OBJ/136            ?2        ?1667559904          2:'table'           	;0
		8  14  OP_DATA/137               ?0        16?1                 ?0                  	;0
		9  15  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function insertRule(Rule $rule, $id)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  16  RECV/63                   16?0=     ?1                   ?0                  	;0
		1  16  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  17  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'array_slice'     	;3
		3  17  FETCH_OBJ_FUNC_ARG/94     $3=       ?1683195292          2:'rules'           	;1
		4  17  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
		5  17  SEND_VAL_EX/116           ?96       3:0                  ?2                  	;0
		6  17  SUB/2                     #4=       16?1                 4:1                 	;0
		7  17  SEND_VAL_EX/116           ?112      #4                   ?3                  	;0
		8  17  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		9  17  INIT_ARRAY/71             #6=       16?0                 5:'tmp'             	;6
		10 17  ADD/1                     #7=       $5                   #6                  	;0
		11 17  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'array_slice'     	;2
		12 17  FETCH_OBJ_FUNC_ARG/94     $8=       ?80                  8:'rules'           	;1
		13 17  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
		14 17  SUB/2                     #9=       16?1                 9:2                 	;0
		15 17  SEND_VAL_EX/116           ?96       #9                   ?2                  	;0
		16 17  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		17 17  ADD/1                     #11=      #7                   $10                 	;0
		18 17  ASSIGN/38                 ?9        16?2                 #11                 	;0
		19 18  ASSIGN_OBJ/136            ?10       ?2670194080          10:'rules'          	;0
		20 18  OP_DATA/137               ?0        16?2                 ?0                  	;0
		21 19  INIT_METHOD_CALL/112      ?0        ?112                 11:'resetIndexes'   	;0
		22 19  DO_FCALL/60               ?11       ?0                   ?0                  	;0
		23 20  NEW/68                    $15=      13:'Command'         ?128                	;1
		24 20  FETCH_OBJ_FUNC_ARG/94     $16=      ?2670193328          15:'table'          	;1
		25 20  SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
		26 20  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		27 20  INIT_METHOD_CALL/112      ?0        $15                  16:'setOptions'     	;1
		28 20  CAST/21                   #18=      16?0                 ?0                  	;6
		29 20  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
		30 20  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31 20  INIT_METHOD_CALL/112      ?0        $19                  18:'insertRule'     	;2
		32 20  INIT_METHOD_CALL/112      ?0        ?544                 20:'getName'        	;0
		33 20  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		34 20  SEND_VAR_NO_REF_EX/50     ?80       $20                  ?1                  	;0
		35 20  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		36 20  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		37 20  RETURN/62                 ?0        $21                  ?0                  	;0
		38 21  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
		*/
	}

	public function appendRule(Rule $rule)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  22  RECV/63                   16?0=     ?1                   ?0                  	;0
		1  23  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'count'           	;1
		2  23  FETCH_OBJ_FUNC_ARG/94     $2=       ?1667550256          2:'rules'           	;1
		3  23  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		4  23  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		5  23  ADD/1                     #4=       $3                   3:1                 	;0
		6  23  ASSIGN/38                 ?3        16?1                 #4                  	;0
		7  24  FETCH_OBJ_W/85            $6=       ?1667551176          4:'rules'           	;0
		8  24  ASSIGN_DIM/147            ?5        $6                   16?1                	;0
		9  24  OP_DATA/137               ?0        16?0                 ?0                  	;0
		10 25  INIT_METHOD_CALL/112      ?0        16?0                 5:'setNum'          	;1
		11 25  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		12 25  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		13 26  NEW/68                    $9=       7:'Command'          ?128                	;1
		14 26  FETCH_OBJ_FUNC_ARG/94     $10=      ?2670193328          9:'table'           	;1
		15 26  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		16 26  DO_FCALL/60               ?9        ?8                   ?0                  	;0
		17 26  INIT_METHOD_CALL/112      ?0        $9                   10:'setOptions'     	;1
		18 26  CAST/21                   #12=      16?0                 ?0                  	;6
		19 26  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
		20 26  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		21 26  INIT_METHOD_CALL/112      ?0        $13                  12:'appendRule'     	;1
		22 26  INIT_METHOD_CALL/112      ?0        ?4381411             14:'getName'        	;0
		23 26  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		24 26  SEND_VAR_NO_REF_EX/50     ?80       $14                  ?1                  	;0
		25 26  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		26 26  RETURN/62                 ?0        $15                  ?0                  	;0
		27 27  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	public function replaceRule(Rule $rule, $id)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  28  RECV/63                   16?0=     ?1                   ?0                  	;0
		1  28  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  29  FETCH_OBJ_W/85            $2=       ?0                   0:'rules'           	;0
		3  29  ASSIGN_DIM/147            ?1        $2                   16?1                	;0
		4  29  OP_DATA/137               ?0        16?0                 ?0                  	;0
		5  30  INIT_METHOD_CALL/112      ?0        16?0                 1:'setNum'          	;1
		6  30  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		7  30  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		8  31  NEW/68                    $5=       3:'Command'          ?128                	;1
		9  31  FETCH_OBJ_FUNC_ARG/94     $6=       ?2670193328          5:'table'           	;1
		10 31  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		11 31  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		12 31  INIT_METHOD_CALL/112      ?0        $5                   6:'setOptions'      	;1
		13 31  CAST/21                   #8=       16?0                 ?0                  	;6
		14 31  SEND_VAL_EX/116           ?80       #8                   ?1                  	;0
		15 31  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16 31  INIT_METHOD_CALL/112      ?0        $9                   8:'replaceRule'     	;2
		17 31  INIT_METHOD_CALL/112      ?0        ?4381411             10:'getName'        	;0
		18 31  DO_FCALL/60               $10=      ?0                   ?0                  	;0
		19 31  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
		20 31  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		21 31  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		22 31  RETURN/62                 ?0        $11                  ?0                  	;0
		23 32  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
		*/
	}

	public function deleteRule($id)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  33  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  34  FETCH_OBJ_UNSET/97        $1=       ?4443006             0:'rules'           	;0
		2  34  UNSET_DIM/75              ?0        $1                   16?0                	;0
		3  35  INIT_METHOD_CALL/112      ?0        ?34                  1:'resetIndexes'    	;0
		4  35  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		5  36  NEW/68                    $3=       3:'Command'          ?128                	;1
		6  36  FETCH_OBJ_FUNC_ARG/94     $4=       ?4397406             5:'table'           	;1
		7  36  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		8  36  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		9  36  INIT_METHOD_CALL/112      ?0        $3                   6:'deleteRule'      	;2
		10 36  INIT_METHOD_CALL/112      ?0        ?4                   8:'getName'         	;0
		11 36  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		12 36  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		13 36  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		14 36  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		15 36  RETURN/62                 ?0        $7                   ?0                  	;0
		16 37  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function flush()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  39  ASSIGN_OBJ/136            ?0        ?2                   0:'rules'           	;0
		1  39  OP_DATA/137               ?0        1:array (
)          ?0                  	;0
		2  40  NEW/68                    $1=       2:'Command'          ?128                	;1
		3  40  FETCH_OBJ_FUNC_ARG/94     $2=       ?4397406             4:'table'           	;1
		4  40  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		5  40  DO_FCALL/60               ?3        ?8                   ?0                  	;0
		6  40  INIT_METHOD_CALL/112      ?0        $1                   5:'flushChain'      	;1
		7  40  INIT_METHOD_CALL/112      ?0        ?3                   7:'getName'         	;0
		8  40  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		9  40  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
		10 40  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		11 40  RETURN/62                 ?0        $5                   ?0                  	;0
		12 41  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	public function rename($newName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  42  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  43  FETCH_OBJ_R/82            $2=       ?2670193760          0:'name'            	;0
		2  43  ASSIGN/38                 ?1        16?1                 $2                  	;0
		3  44  ASSIGN_OBJ/136            ?2        ?2670194080          1:'name'            	;0
		4  44  OP_DATA/137               ?0        16?0                 ?0                  	;0
		5  45  NEW/68                    $5=       2:'Command'          ?128                	;1
		6  45  FETCH_OBJ_FUNC_ARG/94     $6=       ?4397406             4:'table'           	;1
		7  45  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		8  45  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		9  45  INIT_METHOD_CALL/112      ?0        $5                   5:'renameChain'     	;2
		10 45  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		11 45  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		12 45  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		13 45  RETURN/62                 ?0        $8                   ?0                  	;0
		14 46  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	private function resetIndexes()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  48  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'array_combine'   	;2
		1  48  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'array_keys'      	;1
		2  48  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'array_fill'      	;3
		3  48  SEND_VAL_EX/116           ?80       7:1                  ?1                  	;0
		4  48  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'count'           	;1
		5  48  FETCH_OBJ_FUNC_ARG/94     $3=       ?4381411             10:'rules'          	;1
		6  48  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
		7  48  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		8  48  SEND_VAR_NO_REF_EX/50     ?96       $4                   ?2                  	;0
		9  48  SEND_VAL_EX/116           ?112      11:NULL              ?3                  	;0
		10 48  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		11 48  SEND_VAR_NO_REF_EX/50     ?80       $5                   ?1                  	;0
		12 48  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		13 48  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		14 48  FETCH_OBJ_FUNC_ARG/94     $7=       ?0                   12:'rules'          	;2
		15 48  SEND_VAR_EX/66            ?96       $7                   ?2                  	;0
		16 48  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		17 48  ASSIGN_OBJ/136            ?0        ?3                   0:'rules'           	;0
		18 48  OP_DATA/137               ?0        $8                   ?0                  	;0
		19 49  FETCH_OBJ_R/82            $9=       ?4443006             13:'rules'          	;0
		20 49  FE_RESET_R/77             $10=      $9                   ?27                 	;0
		21 49  FE_FETCH_R/78             #11=      $10                  16?0                	;27	>>27	<<26
		22 49  ASSIGN/38                 ?10       16?1                 #11                 	;0
		23 50  INIT_METHOD_CALL/112      ?0        16?0                 14:'setNum'         	;1
		24 50  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		25 50  DO_FCALL/60               ?11       ?0                   ?0                  	;0
		26 50  JMP/42                    ?0        ?21                  ?0                  	;0	>>21
		27 50  FE_FREE/127               ?0        $10                  ?0                  	;0	<<20
		28 52  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	public function getRulesList()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  54  FETCH_OBJ_R/82            $0=       ?1                   0:'rules'           	;0
		1  54  RETURN/62                 ?0        $0                   ?0                  	;0
		2  55  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  57  FETCH_OBJ_R/82            $0=       ?1                   0:'name'            	;0
		1  57  RETURN/62                 ?0        $0                   ?0                  	;0
		2  58  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getPolicy()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  60  FETCH_OBJ_R/82            $0=       ?1                   0:'policy'          	;0
		1  60  RETURN/62                 ?0        $0                   ?0                  	;0
		2  61  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class Rule
{
	public $num;
	public $target;
	public $protocol;
	public $source;
	public $destination;
	public $options = [];

	public function __construct($target, $protocol, $source, $destination, $options)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  72  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  72  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  72  RECV_INIT/64              16?2=     ?3                   0:NULL              	;0
		3  72  RECV_INIT/64              16?3=     ?4                   1:NULL              	;0
		4  72  RECV_INIT/64              16?4=     ?5                   2:array (
)         	;0
		5  73  ASSIGN_OBJ/136            ?0        ?2670194256          3:'target'          	;0
		6  73  OP_DATA/137               ?0        16?0                 ?0                  	;0
		7  74  ASSIGN_OBJ/136            ?1        ?2670194256          4:'protocol'        	;0
		8  74  OP_DATA/137               ?0        16?1                 ?0                  	;0
		9  75  ASSIGN_OBJ/136            ?2        ?2670194256          5:'source'          	;0
		10 75  OP_DATA/137               ?0        16?2                 ?0                  	;0
		11 76  ASSIGN_OBJ/136            ?3        ?2670194256          6:'destination'     	;0
		12 76  OP_DATA/137               ?0        16?3                 ?0                  	;0
		13 77  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_array'        	;1
		14 77  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		15 77  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		16 77  JMPZ/43                   ?0        $9                   ?20                 	;0	>>20
		17 78  ASSIGN_OBJ/136            ?5        ?4583821             9:'options'         	;0
		18 78  OP_DATA/137               ?0        16?4                 ?0                  	;0
		19 78  JMP/42                    ?0        ?23                  ?0                  	;0	>>23
		20 80  INIT_METHOD_CALL/112      ?0        ?144                 10:'parseOptions'   	;1	<<16
		21 80  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		22 80  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		23 82  NOP/0                     ?0        12:NULL              ?0                  	;4294967295	<<19
		*/
	}

	public function getNum()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  84  FETCH_OBJ_R/82            $0=       ?4443006             0:'num'             	;0
		1  84  RETURN/62                 ?0        $0                   ?0                  	;0
		2  85  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setNum($num)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  86  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  87  ASSIGN_OBJ/136            ?0        ?2670194256          0:'num'             	;0
		2  87  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3  88  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	private function parseOptions($options)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   89   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   90   INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'preg_match'      	;3
		2   90   SEND_VAL_EX/116           ?80       2:'/(?:(?<direction>(s|d)pt)s?:)(?<exclude>!?)(?<ports>(\\d+):?(\\d+))/' ?1                  	;0
		3   90   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		4   90   SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		5   90   DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		6   90   JMPZ/43                   ?0        $5                   ?24                 	;0	>>24
		7   91   ASSIGN/38                 ?1        16?2                 3:array (
  'dpt' => '--destination-port',
  'spt' => '--source-port',
)	;0
		8   92   ISSET_ISEMPTY_DIM_OBJ/115 #7=       16?1                 4:'exclude'         	;16777216
		9   92   BOOL_NOT/13               #8=       #7                   ?0                  	;0
		10  92   JMPZ/43                   ?0        #8                   ?15                 	;0	>>15
		11  92   FETCH_DIM_R/81            $9=       16?1                 5:'exclude'         	;0
		12  92   CONCAT/8                  #10=      $9                   6:' '               	;0
		13  92   QM_ASSIGN/22              #11=      #10                  ?0                  	;0
		14  92   JMP/42                    ?0        ?16                  ?0                  	;0	>>16
		15  92   QM_ASSIGN/22              #11=      7:''                 ?0                  	;0	<<10
		16  92   ASSIGN/38                 ?7        16?3                 #11                 	;0	<<14
		17  93   FETCH_DIM_R/81            $14=      16?1                 9:'direction'       	;0
		18  93   FETCH_DIM_R/81            $15=      16?2                 $14                 	;0
		19  93   FETCH_DIM_R/81            $17=      16?1                 10:'ports'          	;0
		20  93   CONCAT/8                  #18=      16?3                 $17                 	;0
		21  93   FETCH_OBJ_W/85            $13=      ?1667563680          8:'options'         	;0
		22  93   ASSIGN_DIM/147            ?11       $13                  $15                 	;0
		23  93   OP_DATA/137               ?0        #18                  ?0                  	;0
		24  95   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'preg_match_all' 	;3	<<6
		25  95   SEND_VAL_EX/116           ?80       13:'/MAC\\s(?<macaddress>[\\d:]+)/' ?1                  	;0
		26  95   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		27  95   SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		28  95   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		29  95   JMPZ/43                   ?0        $19                  ?47                 	;0	>>47
		30  96   ASSIGN/38                 ?15       16?4                 14:0                	;0
		31  96   JMP/42                    ?0        ?41                  ?0                  	;0	>>41
		32  97   FETCH_DIM_R/81            $24=      16?1                 17:'macaddress'     	;0	<<46
		33  97   FETCH_DIM_R/81            $25=      $24                  16?4                	;0
		34  97   CONCAT/8                  #26=      18:'mac --mac-source ' $25                 	;0
		35  97   FETCH_OBJ_W/85            $21=      ?93                  15:'options'        	;0
		36  97   FETCH_DIM_W/84            $22=      $21                  16:'--match'        	;0
		37  97   ASSIGN_DIM/147            ?18       $22                  ?1667563952         	;0
		38  97   OP_DATA/137               ?0        #26                  ?0                  	;0
		39  96   POST_INC/36               #27=      16?4                 ?0                  	;0
		40  96   FREE/70                   ?0        #27                  ?0                  	;0
		41  96   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'count'          	;1	<<31
		42  96   FETCH_DIM_FUNC_ARG/93     $28=      16?1                 21:'macaddress'     	;1
		43  96   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
		44  96   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		45  96   IS_SMALLER/19             #30=      16?4                 $29                 	;0
		46  96   JMPNZ/44                  ?0        #30                  ?32                 	;0	>>32
		47  100  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'preg_match_all' 	;3	<<29
		48  100  SEND_VAL_EX/116           ?80       24:'/limit:\\savg\\s(?<limit>\\d+\\/(sec|min|hour|day))\\sburst\\s(?<burst>\\d+)/' ?1                  	;0
		49  100  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		50  100  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
		51  100  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		52  100  JMPZ/43                   ?0        $31                  ?74                 	;0	>>74
		53  101  ASSIGN/38                 ?27       16?4                 25:0                	;0
		54  101  JMP/42                    ?0        ?68                  ?0                  	;0	>>68
		55  102  FETCH_DIM_R/81            $36=      16?1                 28:'limit'          	;0	<<73
		56  102  FETCH_DIM_R/81            $37=      $36                  16?4                	;0
		57  102  CONCAT/8                  #38=      29:'limit --limit '  $37                 	;0
		58  102  CONCAT/8                  #39=      #38                  30:' --limit-burst '	;0
		59  102  FETCH_DIM_R/81            $40=      16?1                 31:'burst'          	;0
		60  102  FETCH_DIM_R/81            $41=      $40                  16?4                	;0
		61  102  CONCAT/8                  #42=      #39                  $41                 	;0
		62  102  FETCH_OBJ_W/85            $33=      ?96                  26:'options'        	;0
		63  102  FETCH_DIM_W/84            $34=      $33                  27:'--match'        	;0
		64  102  ASSIGN_DIM/147            ?30       $34                  ?2670193648         	;0
		65  102  OP_DATA/137               ?0        #42                  ?0                  	;0
		66  101  POST_INC/36               #43=      16?4                 ?0                  	;0
		67  101  FREE/70                   ?0        #43                  ?0                  	;0
		68  101  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'count'          	;1	<<54
		69  101  FETCH_DIM_FUNC_ARG/93     $44=      16?1                 34:'limit'          	;1
		70  101  SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
		71  101  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
		72  101  IS_SMALLER/19             #46=      16?4                 $45                 	;0
		73  101  JMPNZ/44                  ?0        #46                  ?55                 	;0	>>55
		74  105  NOP/0                     ?0        35:NULL              ?0                  	;4294967295	<<52
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   107  ASSIGN/38                 ?0        16?0                 0:''                	;0
		1   108  FETCH_OBJ_R/82            $5=       ?2670193648          1:'protocol'        	;0
		2   108  IS_NOT_EQUAL/18           #6=       2:'all'              $5                  	;0
		3   108  JMPZ/43                   ?0        #6                   ?7                  	;0	>>7
		4   109  FETCH_OBJ_R/82            $7=       ?4294967295          3:'protocol'        	;0
		5   109  CONCAT/8                  #8=       4:' --proto '        $7                  	;0
		6   109  ASSIGN_CONCAT/30          ?5        16?0                 #8                  	;0
		7   111  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'is_null'         	;1	<<3
		8   111  FETCH_OBJ_FUNC_ARG/94     $10=      ?4685261             7:'source'          	;1
		9   111  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		10  111  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		11  111  BOOL_NOT/13               #12=      $11                  ?0                  	;0
		12  111  JMPZ_EX/46                #12=      #12                  ?16                 	;0	>>16
		13  111  FETCH_OBJ_R/82            $13=      ?5126                8:'source'          	;0
		14  111  IS_NOT_EQUAL/18           #14=      9:'0.0.0.0/0'        $13                 	;0
		15  111  BOOL/52                   #12=      #14                  ?0                  	;0
		16  111  JMPZ/43                   ?0        #12                  ?20                 	;0	>>20	<<12
		17  112  FETCH_OBJ_R/82            $15=      ?4294967295          10:'source'         	;0
		18  112  CONCAT/8                  #16=      11:' --source '      $15                 	;0
		19  112  ASSIGN_CONCAT/30          ?13       16?0                 #16                 	;0
		20  114  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'is_null'        	;1	<<16
		21  114  FETCH_OBJ_FUNC_ARG/94     $18=      ?4685261             14:'destination'    	;1
		22  114  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
		23  114  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		24  114  BOOL_NOT/13               #20=      $19                  ?0                  	;0
		25  114  JMPZ_EX/46                #20=      #20                  ?29                 	;0	>>29
		26  114  FETCH_OBJ_R/82            $21=      ?5126                15:'destination'    	;0
		27  114  IS_NOT_EQUAL/18           #22=      16:'0.0.0.0/0'       $21                 	;0
		28  114  BOOL/52                   #20=      #22                  ?0                  	;0
		29  114  JMPZ/43                   ?0        #20                  ?33                 	;0	>>33	<<25
		30  115  FETCH_OBJ_R/82            $23=      ?4294967295          17:'destination'    	;0
		31  115  CONCAT/8                  #24=      18:' --destination ' $23                 	;0
		32  115  ASSIGN_CONCAT/30          ?21       16?0                 #24                 	;0
		33  117  FETCH_OBJ_R/82            $26=      ?0                   19:'options'        	;0	<<29
		34  117  FE_RESET_R/77             $27=      $26                  ?55                 	;0
		35  117  FE_FETCH_R/78             #28=      $27                  16?1                	;55	>>55	<<54
		36  117  ASSIGN/38                 ?25       16?2                 #28                 	;0
		37  118  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'is_scalar'      	;1
		38  118  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		39  118  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
		40  118  JMPZ/43                   ?0        $30                  ?46                 	;0	>>46
		41  119  CONCAT/8                  #31=      22:' '               16?2                	;0
		42  119  CONCAT/8                  #32=      #31                  23:' '              	;0
		43  119  CONCAT/8                  #33=      #32                  16?1                	;0
		44  119  ASSIGN_CONCAT/30          ?30       16?0                 #33                 	;0
		45  119  JMP/42                    ?0        ?54                  ?0                  	;0	>>54
		46  121  FE_RESET_R/77             $35=      16?1                 ?53                 	;0	<<40
		47  121  FE_FETCH_R/78             ?0        $35                  16?3                	;53	>>53	<<52
		48  122  CONCAT/8                  #36=      24:' '               16?2                	;0
		49  122  CONCAT/8                  #37=      #36                  25:' '              	;0
		50  122  CONCAT/8                  #38=      #37                  16?3                	;0
		51  122  ASSIGN_CONCAT/30          ?35       16?0                 #38                 	;0
		52  122  JMP/42                    ?0        ?47                  ?0                  	;0	>>47
		53  122  FE_FREE/127               ?0        $35                  ?0                  	;0	<<46
		54  122  JMP/42                    ?0        ?35                  ?0                  	;0	>>35	<<45
		55  122  FE_FREE/127               ?0        $27                  ?0                  	;0	<<34
		56  126  ISSET_ISEMPTY_PROP_OBJ/148 #40=      ?96                  26:'target'         	;16777216
		57  126  BOOL_NOT/13               #41=      #40                  ?0                  	;0
		58  126  JMPZ/43                   ?0        #41                  ?63                 	;0	>>63
		59  126  FETCH_OBJ_R/82            $42=      ?4411925             27:'target'         	;0
		60  126  CONCAT/8                  #43=      28:' --jump '        $42                 	;0
		61  126  QM_ASSIGN/22              #44=      #43                  ?0                  	;0
		62  126  JMP/42                    ?0        ?64                  ?0                  	;0	>>64
		63  126  QM_ASSIGN/22              #44=      29:''                ?0                  	;0	<<58
		64  126  ASSIGN_CONCAT/30          ?41       16?0                 #44                 	;0	<<62
		65  127  RETURN/62                 ?0        16?0                 ?0                  	;0
		66  128  NOP/0                     ?0        30:NULL              ?0                  	;4294967295
		*/
	}
}

class IptablesService
{
	private $tables;

	public function __construct()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   134  NOP/0                     ?0        0:NULL               ?0                  	;4294967295
		*/
	}

	public function parseIptablesChains(Table $table)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   135  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   136  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'explode'         	;2
		2   136  SEND_VAL_EX/116           ?80       2:'
'                ?1                  	;0
		3   136  INIT_METHOD_CALL/112      ?0        16?0                 3:'getRaw'          	;0
		4   136  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		5   136  SEND_VAR_NO_REF_EX/50     ?96       $7                   ?2                  	;0
		6   136  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		7   136  ASSIGN/38                 ?2        16?1                 $8                  	;0
		8   137  ASSIGN/38                 ?3        16?2                 5:array (
  'chain' => '/(?:Chain\\s)
                        (?<chain>[^\\s]+)
                        (?:.*\\()
                        (?<policy>.*)
                        (?:\\).*)/x',
  'rule' => '/(?<id>\\d+)\\s+
                        (?<target>\\w+)\\s+
                        (?<protocol>\\w+)\\s+
                        (?<opt>[\\w-]+)\\s+
                        (?<source>[0-9\\.\\/]+)\\s+
                        (?<destination>[0-9\\.\\/]+)\\s+
                        ?(?<options>.*)/x',
)	;0
		9   150  FE_RESET_R/77             $11=      16?1                 ?72                 	;0
		10  150  FE_FETCH_R/78             ?0        $11                  16?3                	;72	>>72	<<71
		11  151  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'preg_match'      	;3
		12  151  FETCH_DIM_FUNC_ARG/93     $12=      16?2                 8:'chain'           	;1
		13  151  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
		14  151  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		15  151  SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
		16  151  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		17  151  JMPZ/43                   ?0        $13                  ?36                 	;0	>>36
		18  152  NEW/68                    $14=      9:'Chain'            ?288                	;3
		19  152  FETCH_DIM_FUNC_ARG/93     $15=      16?4                 11:'chain'          	;1
		20  152  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		21  152  INIT_METHOD_CALL/112      ?0        16?0                 12:'getName'        	;0
		22  152  DO_FCALL/60               $16=      ?0                   ?0                  	;0
		23  152  SEND_VAR_NO_REF_EX/50     ?96       $16                  ?2                  	;0
		24  152  FETCH_DIM_FUNC_ARG/93     $17=      16?4                 14:'policy'         	;3
		25  152  SEND_VAR_EX/66            ?112      $17                  ?3                  	;0
		26  152  DO_FCALL/60               ?11       ?8                   ?0                  	;0
		27  152  ASSIGN/38                 ?12       16?5                 $14                 	;0
		28  153  INIT_METHOD_CALL/112      ?0        16?0                 15:'addChain'       	;1
		29  153  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		30  153  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		31  154  INIT_METHOD_CALL/112      ?0        16?0                 18:'getName'        	;0
		32  154  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		33  154  FETCH_OBJ_W/85            $21=      ?2670193120          17:'tables'         	;0
		34  154  ASSIGN_DIM/147            ?16       $21                  $22                 	;0
		35  154  OP_DATA/137               ?0        16?0                 ?0                  	;0
		36  156  ISSET_ISEMPTY_CV/197      #24=      16?5                 ?0                  	;33554432	<<17
		37  156  JMPZ_EX/46                #24=      #24                  ?45                 	;0	>>45
		38  156  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'preg_match'     	;3
		39  156  FETCH_DIM_FUNC_ARG/93     $25=      16?2                 22:'rule'           	;1
		40  156  SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
		41  156  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		42  156  SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
		43  156  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		44  156  BOOL/52                   #24=      $26                  ?0                  	;0
		45  156  JMPZ/43                   ?0        #24                  ?71                 	;0	>>71	<<37
		46  157  NEW/68                    $27=      23:'Rule'            ?480                	;5
		47  157  FETCH_DIM_FUNC_ARG/93     $28=      16?4                 25:'target'         	;1
		48  157  SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
		49  157  FETCH_DIM_FUNC_ARG/93     $29=      16?4                 26:'protocol'       	;2
		50  157  SEND_VAR_EX/66            ?96       $29                  ?2                  	;0
		51  157  FETCH_DIM_FUNC_ARG/93     $30=      16?4                 27:'source'         	;3
		52  157  SEND_VAR_EX/66            ?112      $30                  ?3                  	;0
		53  157  FETCH_DIM_FUNC_ARG/93     $31=      16?4                 28:'destination'    	;4
		54  157  SEND_VAR_EX/66            ?128      $31                  ?4                  	;0
		55  157  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'trim'           	;1
		56  157  FETCH_DIM_FUNC_ARG/93     $32=      16?4                 31:'options'        	;1
		57  157  SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
		58  157  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		59  157  SEND_VAR_NO_REF_EX/50     ?144      $33                  ?5                  	;0
		60  157  DO_FCALL/60               ?27       ?8                   ?0                  	;0
		61  157  ASSIGN/38                 ?28       16?6                 $27                 	;0
		62  158  INIT_METHOD_CALL/112      ?0        16?6                 32:'setNum'         	;1
		63  158  FETCH_DIM_FUNC_ARG/93     $36=      16?4                 34:'id'             	;1
		64  158  SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
		65  158  DO_FCALL/60               ?30       ?0                   ?0                  	;0
		66  159  INIT_METHOD_CALL/112      ?0        16?5                 35:'insertRule'     	;2
		67  159  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		68  159  FETCH_DIM_FUNC_ARG/93     $38=      16?4                 37:'id'             	;2
		69  159  SEND_VAR_EX/66            ?96       $38                  ?2                  	;0
		70  159  DO_FCALL/60               ?32       ?0                   ?0                  	;0
		71  159  JMP/42                    ?0        ?10                  ?0                  	;0	>>10	<<45
		72  159  FE_FREE/127               ?0        $11                  ?0                  	;0	<<9
		73  162  INIT_METHOD_CALL/112      ?0        16?0                 38:'getChainsList'  	;0
		74  162  DO_FCALL/60               $40=      ?0                   ?0                  	;0
		75  162  RETURN/62                 ?0        $40                  ?0                  	;0
		76  163  NOP/0                     ?0        40:NULL              ?0                  	;4294967295
		*/
	}
}

class Command
{
	private $options = [];
	private $rawOptions;
	private $tcpFlags = ['ACK', 'FIN', 'PSH', 'RST', 'SYN', 'URG', 'ALL', 'NONE'];
	private $matchModules = ['limit', 'mac', 'state', 'mark', 'recent'];
	private $cmd;
	private $table;

	public function __construct($table)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   173  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   174  ASSIGN_OBJ/136            ?0        ?80                  0:'table'           	;0
		2   174  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   175  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function appendRule($chainName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   176  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   177  CONCAT/8                  #2=       1:'-A '              16?0                	;0
		2   177  ASSIGN_OBJ/136            ?0        ?80                  0:'cmd'             	;0
		3   177  OP_DATA/137               ?0        #2                   ?0                  	;0
		4   178  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		5   178  CAST/21                   #4=       $3                   ?0                  	;6
		6   178  RETURN/62                 ?0        #4                   ?0                  	;0
		7   179  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function deleteRule($chainName, $ruleNum)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   180  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   180  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   181  CONCAT/8                  #3=       1:'-D '              16?0                	;0
		3   181  CONCAT/8                  #4=       #3                   2:' '               	;0
		4   181  CONCAT/8                  #5=       #4                   16?1                	;0
		5   181  ASSIGN_OBJ/136            ?0        ?1667578416          0:'cmd'             	;0
		6   181  OP_DATA/137               ?0        #5                   ?0                  	;0
		7   182  FETCH_THIS/184            $6=       ?0                   ?0                  	;0
		8   182  CAST/21                   #7=       $6                   ?0                  	;6
		9   182  RETURN/62                 ?0        #7                   ?0                  	;0
		10  183  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function replaceRule($chainName, $ruleNum)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   184  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   184  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   185  CONCAT/8                  #3=       1:'-R '              16?0                	;0
		3   185  CONCAT/8                  #4=       #3                   2:' '               	;0
		4   185  CONCAT/8                  #5=       #4                   16?1                	;0
		5   185  ASSIGN_OBJ/136            ?0        ?1667579104          0:'cmd'             	;0
		6   185  OP_DATA/137               ?0        #5                   ?0                  	;0
		7   186  FETCH_THIS/184            $6=       ?0                   ?0                  	;0
		8   186  CAST/21                   #7=       $6                   ?0                  	;6
		9   186  RETURN/62                 ?0        #7                   ?0                  	;0
		10  187  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function insertRule($chainName, $ruleNum)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   188  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   188  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2   189  CONCAT/8                  #3=       2:'-I '              16?0                	;0
		3   189  CONCAT/8                  #4=       #3                   3:' '               	;0
		4   189  CONCAT/8                  #5=       #4                   16?1                	;0
		5   189  ASSIGN_OBJ/136            ?0        ?1668345920          1:'cmd'             	;0
		6   189  OP_DATA/137               ?0        #5                   ?0                  	;0
		7   190  FETCH_THIS/184            $6=       ?0                   ?0                  	;0
		8   190  CAST/21                   #7=       $6                   ?0                  	;6
		9   190  RETURN/62                 ?0        #7                   ?0                  	;0
		10  191  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function flushChain($chainName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   192  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   193  CONCAT/8                  #2=       1:'-F '              16?0                	;0
		2   193  ASSIGN_OBJ/136            ?0        ?1668346632          0:'cmd'             	;0
		3   193  OP_DATA/137               ?0        #2                   ?0                  	;0
		4   194  INIT_METHOD_CALL/112      ?0        ?1                   2:'cleanOptions'    	;0
		5   194  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		6   195  FETCH_THIS/184            $4=       ?0                   ?0                  	;0
		7   195  CAST/21                   #5=       $4                   ?0                  	;6
		8   195  RETURN/62                 ?0        #5                   ?0                  	;0
		9   196  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function createChain($chainName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   197  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   198  CONCAT/8                  #2=       1:'-N '              16?0                	;0
		2   198  ASSIGN_OBJ/136            ?0        ?1668347296          0:'cmd'             	;0
		3   198  OP_DATA/137               ?0        #2                   ?0                  	;0
		4   199  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		5   199  CAST/21                   #4=       $3                   ?0                  	;6
		6   199  RETURN/62                 ?0        #4                   ?0                  	;0
		7   200  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function deleteChain($chainName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   201  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   202  CONCAT/8                  #2=       1:'-X '              16?0                	;0
		2   202  ASSIGN_OBJ/136            ?0        ?1668347816          0:'cmd'             	;0
		3   202  OP_DATA/137               ?0        #2                   ?0                  	;0
		4   203  INIT_METHOD_CALL/112      ?0        ?1                   2:'cleanOptions'    	;0
		5   203  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		6   204  FETCH_THIS/184            $4=       ?0                   ?0                  	;0
		7   204  CAST/21                   #5=       $4                   ?0                  	;6
		8   204  RETURN/62                 ?0        #5                   ?0                  	;0
		9   205  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function renameChain($chainName, $newName)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   206  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   206  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   207  CONCAT/8                  #3=       1:'-E '              16?0                	;0
		3   207  CONCAT/8                  #4=       #3                   2:' '               	;0
		4   207  CONCAT/8                  #5=       #4                   16?1                	;0
		5   207  ASSIGN_OBJ/136            ?0        ?1668348480          0:'cmd'             	;0
		6   207  OP_DATA/137               ?0        #5                   ?0                  	;0
		7   208  INIT_METHOD_CALL/112      ?0        ?3                   3:'cleanOptions'    	;0
		8   208  DO_FCALL/60               ?4        ?0                   ?0                  	;0
		9   209  FETCH_THIS/184            $7=       ?0                   ?0                  	;0
		10  209  CAST/21                   #8=       $7                   ?0                  	;6
		11  209  RETURN/62                 ?0        #8                   ?0                  	;0
		12  210  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	private function cleanOptions()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   212  ASSIGN_OBJ/136            ?0        ?1668349312          0:'options'         	;0
		1   212  OP_DATA/137               ?0        1:array (
)          ?0                  	;0
		2   213  ASSIGN_OBJ/136            ?1        ?1668349312          2:'rawOptions'      	;0
		3   213  OP_DATA/137               ?0        3:NULL               ?0                  	;0
		4   214  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function setProtocol($protocol, $sourcePort, $destinationPort, $tcpFlags)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   215  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   215  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   215  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
		3   215  RECV_INIT/64              16?3=     ?4                   2:NULL              	;0
		4   216  FETCH_OBJ_W/85            $5=       ?1668349624          3:'options'         	;0
		5   216  ASSIGN_DIM/147            ?1        $5                   4:'--proto'         	;0
		6   216  OP_DATA/137               ?0        16?0                 ?0                  	;0
		7   217  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'in_array'        	;2
		8   217  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   217  SEND_VAL_EX/116           ?96       7:array (
  0 => 'tcp',
  1 => 'udp',
) ?2                  	;0
		10  217  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  217  JMPZ_EX/46                #8=       $7                   ?17                 	;0	>>17
		12  217  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'is_null'         	;1
		13  217  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		14  217  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		15  217  BOOL_NOT/13               #10=      $9                   ?0                  	;0
		16  217  BOOL/52                   #8=       #10                  ?0                  	;0
		17  217  JMPZ/43                   ?0        #8                   ?22                 	;0	>>22	<<11
		18  218  CONCAT/8                  #13=      12:' --source-port ' 16?1                	;0
		19  218  FETCH_OBJ_RW/88           $11=      ?4410621             10:'options'        	;0
		20  218  ASSIGN_CONCAT/30          ?7        $11                  11:'--proto'        	;147
		21  218  OP_DATA/137               ?0        #13                  ?0                  	;0
		22  220  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'in_array'       	;2	<<17
		23  220  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		24  220  SEND_VAL_EX/116           ?96       15:array (
  0 => 'tcp',
  1 => 'udp',
) ?2                  	;0
		25  220  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		26  220  JMPZ_EX/46                #15=      $14                  ?32                 	;0	>>32
		27  220  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'is_null'        	;1
		28  220  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		29  220  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		30  220  BOOL_NOT/13               #17=      $16                  ?0                  	;0
		31  220  BOOL/52                   #15=      #17                  ?0                  	;0
		32  220  JMPZ/43                   ?0        #15                  ?37                 	;0	>>37	<<26
		33  221  CONCAT/8                  #20=      20:' --destination-port ' 16?2                	;0
		34  221  FETCH_OBJ_RW/88           $18=      ?4410621             18:'options'        	;0
		35  221  ASSIGN_CONCAT/30          ?14       $18                  19:'--proto'        	;147
		36  221  OP_DATA/137               ?0        #20                  ?0                  	;0
		37  223  IS_EQUAL/17               #21=      21:'tcp'             16?0                	;0	<<32
		38  223  JMPZ_EX/46                #21=      #21                  ?43                 	;0	>>43
		39  223  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'is_array'       	;1
		40  223  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		41  223  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		42  223  BOOL/52                   #21=      $22                  ?0                  	;0
		43  223  JMPZ/43                   ?0        #21                  ?69                 	;0	>>69	<<38
		44  224  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'array_diff'     	;2
		45  224  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		46  224  FETCH_OBJ_FUNC_ARG/94     $23=      ?2670193440          26:'tcpFlags'       	;2
		47  224  SEND_VAR_EX/66            ?96       $23                  ?2                  	;0
		48  224  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		49  224  ASSIGN/38                 ?20       16?4                 $24                 	;0
		50  225  ISSET_ISEMPTY_CV/197      #26=      16?4                 ?0                  	;16777216
		51  225  BOOL_NOT/13               #27=      #26                  ?0                  	;0
		52  225  JMPZ/43                   ?0        #27                  ?61                 	;0	>>61
		53  226  NEW/68                    $28=      27:'Exception'       ?224                	;1
		54  226  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'implode'        	;1
		55  226  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		56  226  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		57  226  CONCAT/8                  #30=      31:'Unexpected tcp-flags: ' $29                 	;0
		58  226  SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
		59  226  DO_FCALL/60               ?26       ?8                   ?0                  	;0
		60  226  THROW/108                 ?0        $28                  ?0                  	;0
		61  228  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'implode'        	;2	<<52
		62  228  SEND_VAL_EX/116           ?80       36:','               ?1                  	;0
		63  228  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		64  228  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
		65  228  CONCAT/8                  #35=      37:' --tcp-flags '   $34                 	;0
		66  228  FETCH_OBJ_RW/88           $32=      ?1669060320          32:'options'        	;0
		67  228  ASSIGN_CONCAT/30          ?28       $32                  33:'--proto'        	;147
		68  228  OP_DATA/137               ?0        #35                  ?0                  	;0
		69  230  FETCH_THIS/184            $36=      ?0                   ?0                  	;0	<<43
		70  230  RETURN/62                 ?0        $36                  ?0                  	;0
		71  231  NOP/0                     ?0        38:NULL              ?0                  	;4294967295
		*/
	}

	public function setSource($value)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   232  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   233  FETCH_OBJ_W/85            $1=       ?4453565             0:'options'         	;0
		2   233  ASSIGN_DIM/147            ?1        $1                   1:'--source'        	;0
		3   233  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4   234  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		5   234  RETURN/62                 ?0        $3                   ?0                  	;0
		6   235  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function setDestination($value)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   236  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   237  FETCH_OBJ_W/85            $1=       ?4414262             0:'options'         	;0
		2   237  ASSIGN_DIM/147            ?1        $1                   1:'--destination'   	;0
		3   237  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4   238  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		5   238  RETURN/62                 ?0        $3                   ?0                  	;0
		6   239  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function setJump($jump, ?array $params)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   240  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   240  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2   241  FETCH_OBJ_W/85            $4=       ?4414262             1:'options'         	;0
		3   241  ASSIGN_DIM/147            ?1        $4                   2:'--jump'          	;0
		4   241  OP_DATA/137               ?0        16?0                 ?0                  	;0
		5   242  ISSET_ISEMPTY_CV/197      #6=       16?1                 ?0                  	;16777216
		6   242  BOOL_NOT/13               #7=       #6                   ?0                  	;0
		7   242  JMPZ/43                   ?0        #7                   ?19                 	;0	>>19
		8   243  FE_RESET_R/77             $8=       16?1                 ?18                 	;0
		9   243  FE_FETCH_R/78             #9=       $8                   16?2                	;18	>>18	<<17
		10  243  ASSIGN/38                 ?6        16?3                 #9                  	;0
		11  244  CONCAT/8                  #13=      5:' --'              16?3                	;0
		12  244  CONCAT/8                  #14=      #13                  6:' '               	;0
		13  244  CONCAT/8                  #15=      #14                  16?2                	;0
		14  244  FETCH_OBJ_RW/88           $11=      ?4397406             3:'options'         	;0
		15  244  ASSIGN_CONCAT/30          ?8        $11                  4:'--jump'          	;147
		16  244  OP_DATA/137               ?0        #15                  ?0                  	;0
		17  244  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		18  244  FE_FREE/127               ?0        $8                   ?0                  	;0	<<8
		19  247  FETCH_THIS/184            $16=      ?0                   ?0                  	;0	<<7
		20  247  RETURN/62                 ?0        $16                  ?0                  	;0
		21  248  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function setMatch($module, array $params)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   249  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   249  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   250  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'in_array'        	;2
		3   250  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   250  FETCH_OBJ_FUNC_ARG/94     $6=       ?2670193808          2:'matchModules'    	;2
		5   250  SEND_VAR_EX/66            ?96       $6                   ?2                  	;0
		6   250  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		7   250  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		8   250  JMPZ/43                   ?0        #8                   ?14                 	;0	>>14
		9   251  NEW/68                    $9=       3:'Exception'        ?128                	;1
		10  251  CONCAT/8                  #10=      5:'Invalid module: ' 16?0                	;0
		11  251  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
		12  251  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		13  251  THROW/108                 ?0        $9                   ?0                  	;0
		14  253  ASSIGN/38                 ?6        16?2                 16?0                	;0	<<8
		15  254  FE_RESET_R/77             $13=      16?1                 ?32                 	;0
		16  254  FE_FETCH_R/78             #14=      $13                  16?3                	;32	>>32	<<31
		17  254  ASSIGN/38                 ?9        16?4                 #14                 	;0
		18  255  CONCAT/8                  #16=      6:'--'               16?0                	;0
		19  255  IS_NOT_EQUAL/18           #17=      16?4                 16?0                	;0
		20  255  JMPZ/43                   ?0        #17                  ?24                 	;0	>>24
		21  255  CONCAT/8                  #18=      7:'-'                16?4                	;0
		22  255  QM_ASSIGN/22              #19=      #18                  ?0                  	;0
		23  255  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
		24  255  QM_ASSIGN/22              #19=      8:''                 ?0                  	;0	<<20
		25  255  CONCAT/8                  #20=      #16                  #19                 	;0	<<23
		26  255  ASSIGN/38                 ?15       16?5                 #20                 	;0
		27  256  CONCAT/8                  #22=      9:' '                16?5                	;0
		28  256  CONCAT/8                  #23=      #22                  10:' '              	;0
		29  256  CONCAT/8                  #24=      #23                  16?3                	;0
		30  256  ASSIGN_CONCAT/30          ?19       16?2                 #24                 	;0
		31  256  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
		32  256  FE_FREE/127               ?0        $13                  ?0                  	;0	<<15
		33  258  FETCH_OBJ_W/85            $26=      ?2670194080          11:'options'        	;0
		34  258  ASSIGN_DIM/147            ?21       $26                  12:'--match'        	;0
		35  258  OP_DATA/137               ?0        16?2                 ?0                  	;0
		36  259  FETCH_THIS/184            $28=      ?0                   ?0                  	;0
		37  259  RETURN/62                 ?0        $28                  ?0                  	;0
		38  260  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}

	public function setInput($value)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   262  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   263  FETCH_OBJ_W/85            $1=       ?4414262             0:'options'         	;0
		2   263  ASSIGN_DIM/147            ?1        $1                   1:'--in-interface'  	;0
		3   263  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4   264  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		5   264  RETURN/62                 ?0        $3                   ?0                  	;0
		6   265  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function setOutput($value)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   267  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   268  FETCH_OBJ_W/85            $1=       ?4414262             0:'options'         	;0
		2   268  ASSIGN_DIM/147            ?1        $1                   1:'--out-interface' 	;0
		3   268  OP_DATA/137               ?0        16?0                 ?0                  	;0
		4   269  FETCH_THIS/184            $3=       ?0                   ?0                  	;0
		5   269  RETURN/62                 ?0        $3                   ?0                  	;0
		6   270  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function setOptions($options)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   271  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   272  ASSIGN_OBJ/136            ?0        ?0                   0:'rawOptions'      	;0
		2   272  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   273  FETCH_THIS/184            $2=       ?0                   ?0                  	;0
		4   273  RETURN/62                 ?0        $2                   ?0                  	;0
		5   274  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function __toString()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   276  ASSIGN/38                 ?0        16?0                 0:''                	;0
		1   277  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_null'         	;1
		2   277  FETCH_OBJ_FUNC_ARG/94     $5=       ?4583821             3:'cmd'             	;1
		3   277  SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
		4   277  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		5   277  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		6   277  JMPZ/43                   ?0        #7                   ?13                 	;0	>>13
		7   278  ASSIGN_CONCAT/30          ?4        16?0                 4:'iptables '       	;0
		8   279  FETCH_OBJ_R/82            $9=       ?4583821             5:'cmd'             	;0
		9   279  ASSIGN_CONCAT/30          ?6        16?0                 $9                  	;0
		10  280  FETCH_OBJ_R/82            $11=      ?4294967295          6:'table'           	;0
		11  280  CONCAT/8                  #12=      7:' -t '             $11                 	;0
		12  280  ASSIGN_CONCAT/30          ?9        16?0                 #12                 	;0
		13  282  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'is_null'         	;1	<<6
		14  282  FETCH_OBJ_FUNC_ARG/94     $14=      ?2670193776          10:'rawOptions'     	;1
		15  282  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		16  282  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		17  282  BOOL_NOT/13               #16=      $15                  ?0                  	;0
		18  282  JMPZ/43                   ?0        #16                  ?23                 	;0	>>23
		19  283  CONCAT/8                  #17=      16?0                 11:' '              	;0
		20  283  FETCH_OBJ_R/82            $18=      ?2670193712          12:'rawOptions'     	;0
		21  283  CONCAT/8                  #19=      #17                  $18                 	;0
		22  283  RETURN/62                 ?0        #19                  ?0                  	;0
		23  285  FETCH_OBJ_R/82            $20=      ?13                  13:'options'        	;0	<<18
		24  285  FE_RESET_R/77             $21=      $20                  ?45                 	;0
		25  285  FE_FETCH_R/78             #22=      $21                  16?1                	;45	>>45	<<44
		26  285  ASSIGN/38                 ?19       16?2                 #22                 	;0
		27  286  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'is_scalar'      	;1
		28  286  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		29  286  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		30  286  JMPZ/43                   ?0        $24                  ?36                 	;0	>>36
		31  287  CONCAT/8                  #25=      16:' '               16?2                	;0
		32  287  CONCAT/8                  #26=      #25                  17:' '              	;0
		33  287  CONCAT/8                  #27=      #26                  16?1                	;0
		34  287  ASSIGN_CONCAT/30          ?24       16?0                 #27                 	;0
		35  287  JMP/42                    ?0        ?44                  ?0                  	;0	>>44
		36  289  FE_RESET_R/77             $29=      16?1                 ?43                 	;0	<<30
		37  289  FE_FETCH_R/78             ?0        $29                  16?3                	;43	>>43	<<42
		38  290  CONCAT/8                  #30=      18:' '               16?2                	;0
		39  290  CONCAT/8                  #31=      #30                  19:' '              	;0
		40  290  CONCAT/8                  #32=      #31                  16?3                	;0
		41  290  ASSIGN_CONCAT/30          ?29       16?0                 #32                 	;0
		42  290  JMP/42                    ?0        ?37                  ?0                  	;0	>>37
		43  290  FE_FREE/127               ?0        $29                  ?0                  	;0	<<36
		44  290  JMP/42                    ?0        ?25                  ?0                  	;0	>>25	<<35
		45  290  FE_FREE/127               ?0        $21                  ?0                  	;0	<<24
		46  294  RETURN/62                 ?0        16?0                 ?0                  	;0
		47  295  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}
}

class Table
{
	public const TABLE_RAW = 'raw';
	public const TABLE_FILTER = 'filter';
	public const TABLE_NAT = 'nat';
	public const TABLE_MANGLE = 'mangle';
	public const TABLE_SECURITY = 'security';

	protected $name;
	protected $raw;
	protected $chains = [];

	public function getRaw()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   308  FETCH_OBJ_R/82            $0=       ?1                   0:'raw'             	;0
		1   308  RETURN/62                 ?0        $0                   ?0                  	;0
		2   309  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setRaw($raw)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   310  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   311  ASSIGN_OBJ/136            ?0        ?2670194256          0:'raw'             	;0
		2   311  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   312  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function addChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   313  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   314  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   314  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   314  FETCH_OBJ_W/85            $1=       ?4414262             0:'chains'          	;0
		4   314  ASSIGN_DIM/147            ?2        $1                   $2                  	;0
		5   314  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   315  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function createChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   317  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   317  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		3   317  FETCH_OBJ_W/85            $3=       ?4414262             0:'chains'          	;0
		4   317  ASSIGN_DIM/147            ?2        $3                   $4                  	;0
		5   317  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   318  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   318  INIT_METHOD_CALL/112      ?0        16?0                 5:'getRulesList'    	;0
		8   318  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   318  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		10  318  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  318  ASSIGN/38                 ?5        16?1                 $7                  	;0
		12  319  NEW/68                    $9=       7:'Command'          ?128                	;1
		13  319  FETCH_OBJ_FUNC_ARG/94     $10=      ?4444745             9:'name'            	;1
		14  319  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		15  319  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		16  319  ASSIGN/38                 ?9        16?2                 $9                  	;0
		17  320  IS_SMALLER/19             #13=      10:1                 16?1                	;0
		18  320  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
		19  321  NEW/68                    $14=      11:'Exception'       ?96                 	;1
		20  321  SEND_VAL_EX/116           ?80       13:'Maximum number Rules on creation is 1.' ?1                  	;0
		21  321  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		22  321  THROW/108                 ?0        $14                  ?0                  	;0
		23  321  JMP/42                    ?0        ?35                  ?0                  	;0	>>35
		24  322  IS_IDENTICAL/15           #16=      14:1                 16?1                	;0	<<18
		25  322  JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
		26  323  INIT_METHOD_CALL/112      ?0        16?2                 15:'setOptions'     	;1
		27  323  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'current'        	;1
		28  323  INIT_METHOD_CALL/112      ?0        16?0                 19:'getRulesList'   	;0
		29  323  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		30  323  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		31  323  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		32  323  CAST/21                   #19=      $18                  ?0                  	;6
		33  323  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
		34  323  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		35  326  INIT_METHOD_CALL/112      ?0        16?2                 21:'createChain'    	;1	<<23,25
		36  326  INIT_METHOD_CALL/112      ?0        16?0                 23:'getName'        	;0
		37  326  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		38  326  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		39  326  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		40  326  RETURN/62                 ?0        $22                  ?0                  	;0
		41  327  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	public function deleteChain($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   328  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   329  INIT_METHOD_CALL/112      ?0        ?4442274             0:'getChainByName'  	;1
		2   329  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   329  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   329  ASSIGN/38                 ?1        16?1                 $2                  	;0
		5   330  FETCH_OBJ_UNSET/97        $4=       ?4397406             2:'chains'          	;0
		6   330  UNSET_DIM/75              ?0        $4                   16?0                	;0
		7   331  NEW/68                    $5=       3:'Command'          ?128                	;1
		8   331  FETCH_OBJ_FUNC_ARG/94     $6=       ?4381411             5:'name'            	;1
		9   331  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		10  331  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		11  331  INIT_METHOD_CALL/112      ?0        $5                   6:'deleteChain'     	;1
		12  331  INIT_METHOD_CALL/112      ?0        16?1                 8:'getName'         	;0
		13  331  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		14  331  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		15  331  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  331  RETURN/62                 ?0        $9                   ?0                  	;0
		17  332  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getChainsList()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  FETCH_OBJ_R/82            $0=       ?1668555272          0:'chains'          	;0
		1   334  RETURN/62                 ?0        $0                   ?0                  	;0
		2   335  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getChainByName($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   336  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   337  FETCH_OBJ_R/82            $2=       ?0                   0:'chains'          	;0
		2   337  FE_RESET_R/77             $3=       $2                   ?11                 	;0
		3   337  FE_FETCH_R/78             ?0        $3                   16?1                	;11	>>11	<<10
		4   338  INIT_METHOD_CALL/112      ?0        16?1                 1:'getName'         	;0
		5   338  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6   338  IS_IDENTICAL/15           #5=       16?0                 $4                  	;0
		7   338  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
		8   339  FE_FREE/127               ?0        $3                   ?0                  	;1
		9   339  RETURN/62                 ?0        16?1                 ?0                  	;0
		10  339  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<7
		11  339  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
		12  342  NEW/68                    $6=       3:'Exception'        ?96                 	;1
		13  342  SEND_VAL_EX/116           ?80       5:'Chain not found.' ?1                  	;0
		14  342  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		15  342  THROW/108                 ?0        $6                   ?0                  	;0
		16  343  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  FETCH_OBJ_R/82            $0=       ?0                   0:'name'            	;0
		1   345  RETURN/62                 ?0        $0                   ?0                  	;0
		2   346  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class TableFactory
{
	public function build($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   350  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   351  SWITCH_STRING/188         ?0        16?0                 0:array (
  'filter' => 13,
  'mangle' => 16,
  'nat' => 19,
  'raw' => 22,
  'security' => 25,
)	;28
		2   351  CASE/48                   #1=       16?0                 1:'filter'          	;0	>>4
		3   351  JMPNZ/44                  ?0        #1                   ?13                 	;0	>>13
		4   351  CASE/48                   #1=       16?0                 2:'mangle'          	;0	>>6	<<2
		5   351  JMPNZ/44                  ?0        #1                   ?16                 	;0	>>16
		6   351  CASE/48                   #1=       16?0                 3:'nat'             	;0	>>8	<<4
		7   351  JMPNZ/44                  ?0        #1                   ?19                 	;0	>>19
		8   351  CASE/48                   #1=       16?0                 4:'raw'             	;0	>>10	<<6
		9   351  JMPNZ/44                  ?0        #1                   ?22                 	;0	>>22
		10  351  CASE/48                   #1=       16?0                 5:'security'        	;0	>>12	<<8
		11  351  JMPNZ/44                  ?0        #1                   ?25                 	;0	>>25
		12  351  JMP/42                    ?0        ?28                  ?0                  	;0	>>28	<<10
		13  353  NEW/68                    $2=       6:'FilterTable'      ?64                 	;0	<<3
		14  353  DO_FCALL/60               ?2        ?8                   ?0                  	;0
		15  353  RETURN/62                 ?0        $2                   ?0                  	;0
		16  355  NEW/68                    $4=       8:'MangleTable'      ?64                 	;0	<<5
		17  355  DO_FCALL/60               ?4        ?8                   ?0                  	;0
		18  355  RETURN/62                 ?0        $4                   ?0                  	;0
		19  357  NEW/68                    $6=       10:'NatTable'        ?64                 	;0	<<7
		20  357  DO_FCALL/60               ?6        ?8                   ?0                  	;0
		21  357  RETURN/62                 ?0        $6                   ?0                  	;0
		22  359  NEW/68                    $8=       12:'RawTable'        ?64                 	;0	<<9
		23  359  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		24  359  RETURN/62                 ?0        $8                   ?0                  	;0
		25  361  NEW/68                    $10=      14:'SecurityTable'   ?64                 	;0	<<11
		26  361  DO_FCALL/60               ?10       ?8                   ?0                  	;0
		27  361  RETURN/62                 ?0        $10                  ?0                  	;0
		28  363  NEW/68                    $12=      16:'Exception'       ?96                 	;1	<<12
		29  363  SEND_VAL_EX/116           ?80       18:'Not found!'      ?1                  	;0
		30  363  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		31  363  THROW/108                 ?0        $12                  ?0                  	;0
		32  365  NOP/0                     ?0        19:NULL              ?0                  	;4294967295
		*/
	}
}

class FilterTable extends Table
{
	public const TABLE_RAW = 'raw';
	public const TABLE_FILTER = 'filter';
	public const TABLE_NAT = 'nat';
	public const TABLE_MANGLE = 'mangle';
	public const TABLE_SECURITY = 'security';

	protected $name = 'filter';
	protected $raw;
	protected $chains = [];

	public function getRaw()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   308  FETCH_OBJ_R/82            $0=       ?1                   0:'raw'             	;0
		1   308  RETURN/62                 ?0        $0                   ?0                  	;0
		2   309  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setRaw($raw)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   310  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   311  ASSIGN_OBJ/136            ?0        ?2670194256          0:'raw'             	;0
		2   311  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   312  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function addChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   313  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   314  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   314  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   314  FETCH_OBJ_W/85            $1=       ?4414262             0:'chains'          	;0
		4   314  ASSIGN_DIM/147            ?2        $1                   $2                  	;0
		5   314  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   315  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function createChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   317  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   317  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		3   317  FETCH_OBJ_W/85            $3=       ?4414262             0:'chains'          	;0
		4   317  ASSIGN_DIM/147            ?2        $3                   $4                  	;0
		5   317  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   318  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   318  INIT_METHOD_CALL/112      ?0        16?0                 5:'getRulesList'    	;0
		8   318  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   318  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		10  318  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  318  ASSIGN/38                 ?5        16?1                 $7                  	;0
		12  319  NEW/68                    $9=       7:'Command'          ?128                	;1
		13  319  FETCH_OBJ_FUNC_ARG/94     $10=      ?4444745             9:'name'            	;1
		14  319  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		15  319  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		16  319  ASSIGN/38                 ?9        16?2                 $9                  	;0
		17  320  IS_SMALLER/19             #13=      10:1                 16?1                	;0
		18  320  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
		19  321  NEW/68                    $14=      11:'Exception'       ?96                 	;1
		20  321  SEND_VAL_EX/116           ?80       13:'Maximum number Rules on creation is 1.' ?1                  	;0
		21  321  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		22  321  THROW/108                 ?0        $14                  ?0                  	;0
		23  321  JMP/42                    ?0        ?35                  ?0                  	;0	>>35
		24  322  IS_IDENTICAL/15           #16=      14:1                 16?1                	;0	<<18
		25  322  JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
		26  323  INIT_METHOD_CALL/112      ?0        16?2                 15:'setOptions'     	;1
		27  323  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'current'        	;1
		28  323  INIT_METHOD_CALL/112      ?0        16?0                 19:'getRulesList'   	;0
		29  323  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		30  323  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		31  323  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		32  323  CAST/21                   #19=      $18                  ?0                  	;6
		33  323  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
		34  323  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		35  326  INIT_METHOD_CALL/112      ?0        16?2                 21:'createChain'    	;1	<<23,25
		36  326  INIT_METHOD_CALL/112      ?0        16?0                 23:'getName'        	;0
		37  326  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		38  326  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		39  326  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		40  326  RETURN/62                 ?0        $22                  ?0                  	;0
		41  327  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	public function deleteChain($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   328  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   329  INIT_METHOD_CALL/112      ?0        ?4442274             0:'getChainByName'  	;1
		2   329  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   329  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   329  ASSIGN/38                 ?1        16?1                 $2                  	;0
		5   330  FETCH_OBJ_UNSET/97        $4=       ?4397406             2:'chains'          	;0
		6   330  UNSET_DIM/75              ?0        $4                   16?0                	;0
		7   331  NEW/68                    $5=       3:'Command'          ?128                	;1
		8   331  FETCH_OBJ_FUNC_ARG/94     $6=       ?4381411             5:'name'            	;1
		9   331  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		10  331  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		11  331  INIT_METHOD_CALL/112      ?0        $5                   6:'deleteChain'     	;1
		12  331  INIT_METHOD_CALL/112      ?0        16?1                 8:'getName'         	;0
		13  331  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		14  331  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		15  331  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  331  RETURN/62                 ?0        $9                   ?0                  	;0
		17  332  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getChainsList()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  FETCH_OBJ_R/82            $0=       ?1668555272          0:'chains'          	;0
		1   334  RETURN/62                 ?0        $0                   ?0                  	;0
		2   335  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getChainByName($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   336  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   337  FETCH_OBJ_R/82            $2=       ?0                   0:'chains'          	;0
		2   337  FE_RESET_R/77             $3=       $2                   ?11                 	;0
		3   337  FE_FETCH_R/78             ?0        $3                   16?1                	;11	>>11	<<10
		4   338  INIT_METHOD_CALL/112      ?0        16?1                 1:'getName'         	;0
		5   338  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6   338  IS_IDENTICAL/15           #5=       16?0                 $4                  	;0
		7   338  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
		8   339  FE_FREE/127               ?0        $3                   ?0                  	;1
		9   339  RETURN/62                 ?0        16?1                 ?0                  	;0
		10  339  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<7
		11  339  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
		12  342  NEW/68                    $6=       3:'Exception'        ?96                 	;1
		13  342  SEND_VAL_EX/116           ?80       5:'Chain not found.' ?1                  	;0
		14  342  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		15  342  THROW/108                 ?0        $6                   ?0                  	;0
		16  343  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  FETCH_OBJ_R/82            $0=       ?0                   0:'name'            	;0
		1   345  RETURN/62                 ?0        $0                   ?0                  	;0
		2   346  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class MangleTable extends Table
{
	public const TABLE_RAW = 'raw';
	public const TABLE_FILTER = 'filter';
	public const TABLE_NAT = 'nat';
	public const TABLE_MANGLE = 'mangle';
	public const TABLE_SECURITY = 'security';

	protected $name = 'mangle';
	protected $raw;
	protected $chains = [];

	public function getRaw()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   308  FETCH_OBJ_R/82            $0=       ?1                   0:'raw'             	;0
		1   308  RETURN/62                 ?0        $0                   ?0                  	;0
		2   309  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setRaw($raw)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   310  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   311  ASSIGN_OBJ/136            ?0        ?2670194256          0:'raw'             	;0
		2   311  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   312  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function addChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   313  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   314  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   314  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   314  FETCH_OBJ_W/85            $1=       ?4414262             0:'chains'          	;0
		4   314  ASSIGN_DIM/147            ?2        $1                   $2                  	;0
		5   314  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   315  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function createChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   317  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   317  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		3   317  FETCH_OBJ_W/85            $3=       ?4414262             0:'chains'          	;0
		4   317  ASSIGN_DIM/147            ?2        $3                   $4                  	;0
		5   317  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   318  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   318  INIT_METHOD_CALL/112      ?0        16?0                 5:'getRulesList'    	;0
		8   318  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   318  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		10  318  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  318  ASSIGN/38                 ?5        16?1                 $7                  	;0
		12  319  NEW/68                    $9=       7:'Command'          ?128                	;1
		13  319  FETCH_OBJ_FUNC_ARG/94     $10=      ?4444745             9:'name'            	;1
		14  319  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		15  319  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		16  319  ASSIGN/38                 ?9        16?2                 $9                  	;0
		17  320  IS_SMALLER/19             #13=      10:1                 16?1                	;0
		18  320  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
		19  321  NEW/68                    $14=      11:'Exception'       ?96                 	;1
		20  321  SEND_VAL_EX/116           ?80       13:'Maximum number Rules on creation is 1.' ?1                  	;0
		21  321  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		22  321  THROW/108                 ?0        $14                  ?0                  	;0
		23  321  JMP/42                    ?0        ?35                  ?0                  	;0	>>35
		24  322  IS_IDENTICAL/15           #16=      14:1                 16?1                	;0	<<18
		25  322  JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
		26  323  INIT_METHOD_CALL/112      ?0        16?2                 15:'setOptions'     	;1
		27  323  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'current'        	;1
		28  323  INIT_METHOD_CALL/112      ?0        16?0                 19:'getRulesList'   	;0
		29  323  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		30  323  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		31  323  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		32  323  CAST/21                   #19=      $18                  ?0                  	;6
		33  323  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
		34  323  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		35  326  INIT_METHOD_CALL/112      ?0        16?2                 21:'createChain'    	;1	<<23,25
		36  326  INIT_METHOD_CALL/112      ?0        16?0                 23:'getName'        	;0
		37  326  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		38  326  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		39  326  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		40  326  RETURN/62                 ?0        $22                  ?0                  	;0
		41  327  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	public function deleteChain($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   328  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   329  INIT_METHOD_CALL/112      ?0        ?4442274             0:'getChainByName'  	;1
		2   329  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   329  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   329  ASSIGN/38                 ?1        16?1                 $2                  	;0
		5   330  FETCH_OBJ_UNSET/97        $4=       ?4397406             2:'chains'          	;0
		6   330  UNSET_DIM/75              ?0        $4                   16?0                	;0
		7   331  NEW/68                    $5=       3:'Command'          ?128                	;1
		8   331  FETCH_OBJ_FUNC_ARG/94     $6=       ?4381411             5:'name'            	;1
		9   331  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		10  331  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		11  331  INIT_METHOD_CALL/112      ?0        $5                   6:'deleteChain'     	;1
		12  331  INIT_METHOD_CALL/112      ?0        16?1                 8:'getName'         	;0
		13  331  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		14  331  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		15  331  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  331  RETURN/62                 ?0        $9                   ?0                  	;0
		17  332  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getChainsList()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  FETCH_OBJ_R/82            $0=       ?1668555272          0:'chains'          	;0
		1   334  RETURN/62                 ?0        $0                   ?0                  	;0
		2   335  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getChainByName($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   336  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   337  FETCH_OBJ_R/82            $2=       ?0                   0:'chains'          	;0
		2   337  FE_RESET_R/77             $3=       $2                   ?11                 	;0
		3   337  FE_FETCH_R/78             ?0        $3                   16?1                	;11	>>11	<<10
		4   338  INIT_METHOD_CALL/112      ?0        16?1                 1:'getName'         	;0
		5   338  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6   338  IS_IDENTICAL/15           #5=       16?0                 $4                  	;0
		7   338  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
		8   339  FE_FREE/127               ?0        $3                   ?0                  	;1
		9   339  RETURN/62                 ?0        16?1                 ?0                  	;0
		10  339  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<7
		11  339  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
		12  342  NEW/68                    $6=       3:'Exception'        ?96                 	;1
		13  342  SEND_VAL_EX/116           ?80       5:'Chain not found.' ?1                  	;0
		14  342  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		15  342  THROW/108                 ?0        $6                   ?0                  	;0
		16  343  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  FETCH_OBJ_R/82            $0=       ?0                   0:'name'            	;0
		1   345  RETURN/62                 ?0        $0                   ?0                  	;0
		2   346  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class NatTable extends Table
{
	public const TABLE_RAW = 'raw';
	public const TABLE_FILTER = 'filter';
	public const TABLE_NAT = 'nat';
	public const TABLE_MANGLE = 'mangle';
	public const TABLE_SECURITY = 'security';

	protected $name = 'nat';
	protected $raw;
	protected $chains = [];

	public function getRaw()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   308  FETCH_OBJ_R/82            $0=       ?1                   0:'raw'             	;0
		1   308  RETURN/62                 ?0        $0                   ?0                  	;0
		2   309  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setRaw($raw)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   310  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   311  ASSIGN_OBJ/136            ?0        ?2670194256          0:'raw'             	;0
		2   311  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   312  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function addChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   313  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   314  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   314  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   314  FETCH_OBJ_W/85            $1=       ?4414262             0:'chains'          	;0
		4   314  ASSIGN_DIM/147            ?2        $1                   $2                  	;0
		5   314  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   315  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function createChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   317  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   317  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		3   317  FETCH_OBJ_W/85            $3=       ?4414262             0:'chains'          	;0
		4   317  ASSIGN_DIM/147            ?2        $3                   $4                  	;0
		5   317  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   318  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   318  INIT_METHOD_CALL/112      ?0        16?0                 5:'getRulesList'    	;0
		8   318  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   318  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		10  318  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  318  ASSIGN/38                 ?5        16?1                 $7                  	;0
		12  319  NEW/68                    $9=       7:'Command'          ?128                	;1
		13  319  FETCH_OBJ_FUNC_ARG/94     $10=      ?4444745             9:'name'            	;1
		14  319  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		15  319  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		16  319  ASSIGN/38                 ?9        16?2                 $9                  	;0
		17  320  IS_SMALLER/19             #13=      10:1                 16?1                	;0
		18  320  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
		19  321  NEW/68                    $14=      11:'Exception'       ?96                 	;1
		20  321  SEND_VAL_EX/116           ?80       13:'Maximum number Rules on creation is 1.' ?1                  	;0
		21  321  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		22  321  THROW/108                 ?0        $14                  ?0                  	;0
		23  321  JMP/42                    ?0        ?35                  ?0                  	;0	>>35
		24  322  IS_IDENTICAL/15           #16=      14:1                 16?1                	;0	<<18
		25  322  JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
		26  323  INIT_METHOD_CALL/112      ?0        16?2                 15:'setOptions'     	;1
		27  323  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'current'        	;1
		28  323  INIT_METHOD_CALL/112      ?0        16?0                 19:'getRulesList'   	;0
		29  323  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		30  323  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		31  323  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		32  323  CAST/21                   #19=      $18                  ?0                  	;6
		33  323  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
		34  323  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		35  326  INIT_METHOD_CALL/112      ?0        16?2                 21:'createChain'    	;1	<<23,25
		36  326  INIT_METHOD_CALL/112      ?0        16?0                 23:'getName'        	;0
		37  326  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		38  326  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		39  326  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		40  326  RETURN/62                 ?0        $22                  ?0                  	;0
		41  327  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	public function deleteChain($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   328  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   329  INIT_METHOD_CALL/112      ?0        ?4442274             0:'getChainByName'  	;1
		2   329  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   329  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   329  ASSIGN/38                 ?1        16?1                 $2                  	;0
		5   330  FETCH_OBJ_UNSET/97        $4=       ?4397406             2:'chains'          	;0
		6   330  UNSET_DIM/75              ?0        $4                   16?0                	;0
		7   331  NEW/68                    $5=       3:'Command'          ?128                	;1
		8   331  FETCH_OBJ_FUNC_ARG/94     $6=       ?4381411             5:'name'            	;1
		9   331  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		10  331  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		11  331  INIT_METHOD_CALL/112      ?0        $5                   6:'deleteChain'     	;1
		12  331  INIT_METHOD_CALL/112      ?0        16?1                 8:'getName'         	;0
		13  331  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		14  331  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		15  331  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  331  RETURN/62                 ?0        $9                   ?0                  	;0
		17  332  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getChainsList()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  FETCH_OBJ_R/82            $0=       ?1668555272          0:'chains'          	;0
		1   334  RETURN/62                 ?0        $0                   ?0                  	;0
		2   335  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getChainByName($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   336  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   337  FETCH_OBJ_R/82            $2=       ?0                   0:'chains'          	;0
		2   337  FE_RESET_R/77             $3=       $2                   ?11                 	;0
		3   337  FE_FETCH_R/78             ?0        $3                   16?1                	;11	>>11	<<10
		4   338  INIT_METHOD_CALL/112      ?0        16?1                 1:'getName'         	;0
		5   338  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6   338  IS_IDENTICAL/15           #5=       16?0                 $4                  	;0
		7   338  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
		8   339  FE_FREE/127               ?0        $3                   ?0                  	;1
		9   339  RETURN/62                 ?0        16?1                 ?0                  	;0
		10  339  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<7
		11  339  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
		12  342  NEW/68                    $6=       3:'Exception'        ?96                 	;1
		13  342  SEND_VAL_EX/116           ?80       5:'Chain not found.' ?1                  	;0
		14  342  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		15  342  THROW/108                 ?0        $6                   ?0                  	;0
		16  343  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  FETCH_OBJ_R/82            $0=       ?0                   0:'name'            	;0
		1   345  RETURN/62                 ?0        $0                   ?0                  	;0
		2   346  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class RawTable extends Table
{
	public const TABLE_RAW = 'raw';
	public const TABLE_FILTER = 'filter';
	public const TABLE_NAT = 'nat';
	public const TABLE_MANGLE = 'mangle';
	public const TABLE_SECURITY = 'security';

	protected $name = 'raw';
	protected $raw;
	protected $chains = [];

	public function getRaw()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   308  FETCH_OBJ_R/82            $0=       ?1                   0:'raw'             	;0
		1   308  RETURN/62                 ?0        $0                   ?0                  	;0
		2   309  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setRaw($raw)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   310  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   311  ASSIGN_OBJ/136            ?0        ?2670194256          0:'raw'             	;0
		2   311  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   312  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function addChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   313  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   314  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   314  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   314  FETCH_OBJ_W/85            $1=       ?4414262             0:'chains'          	;0
		4   314  ASSIGN_DIM/147            ?2        $1                   $2                  	;0
		5   314  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   315  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function createChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   317  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   317  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		3   317  FETCH_OBJ_W/85            $3=       ?4414262             0:'chains'          	;0
		4   317  ASSIGN_DIM/147            ?2        $3                   $4                  	;0
		5   317  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   318  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   318  INIT_METHOD_CALL/112      ?0        16?0                 5:'getRulesList'    	;0
		8   318  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   318  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		10  318  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  318  ASSIGN/38                 ?5        16?1                 $7                  	;0
		12  319  NEW/68                    $9=       7:'Command'          ?128                	;1
		13  319  FETCH_OBJ_FUNC_ARG/94     $10=      ?4444745             9:'name'            	;1
		14  319  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		15  319  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		16  319  ASSIGN/38                 ?9        16?2                 $9                  	;0
		17  320  IS_SMALLER/19             #13=      10:1                 16?1                	;0
		18  320  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
		19  321  NEW/68                    $14=      11:'Exception'       ?96                 	;1
		20  321  SEND_VAL_EX/116           ?80       13:'Maximum number Rules on creation is 1.' ?1                  	;0
		21  321  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		22  321  THROW/108                 ?0        $14                  ?0                  	;0
		23  321  JMP/42                    ?0        ?35                  ?0                  	;0	>>35
		24  322  IS_IDENTICAL/15           #16=      14:1                 16?1                	;0	<<18
		25  322  JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
		26  323  INIT_METHOD_CALL/112      ?0        16?2                 15:'setOptions'     	;1
		27  323  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'current'        	;1
		28  323  INIT_METHOD_CALL/112      ?0        16?0                 19:'getRulesList'   	;0
		29  323  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		30  323  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		31  323  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		32  323  CAST/21                   #19=      $18                  ?0                  	;6
		33  323  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
		34  323  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		35  326  INIT_METHOD_CALL/112      ?0        16?2                 21:'createChain'    	;1	<<23,25
		36  326  INIT_METHOD_CALL/112      ?0        16?0                 23:'getName'        	;0
		37  326  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		38  326  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		39  326  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		40  326  RETURN/62                 ?0        $22                  ?0                  	;0
		41  327  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	public function deleteChain($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   328  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   329  INIT_METHOD_CALL/112      ?0        ?4442274             0:'getChainByName'  	;1
		2   329  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   329  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   329  ASSIGN/38                 ?1        16?1                 $2                  	;0
		5   330  FETCH_OBJ_UNSET/97        $4=       ?4397406             2:'chains'          	;0
		6   330  UNSET_DIM/75              ?0        $4                   16?0                	;0
		7   331  NEW/68                    $5=       3:'Command'          ?128                	;1
		8   331  FETCH_OBJ_FUNC_ARG/94     $6=       ?4381411             5:'name'            	;1
		9   331  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		10  331  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		11  331  INIT_METHOD_CALL/112      ?0        $5                   6:'deleteChain'     	;1
		12  331  INIT_METHOD_CALL/112      ?0        16?1                 8:'getName'         	;0
		13  331  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		14  331  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		15  331  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  331  RETURN/62                 ?0        $9                   ?0                  	;0
		17  332  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getChainsList()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  FETCH_OBJ_R/82            $0=       ?1668555272          0:'chains'          	;0
		1   334  RETURN/62                 ?0        $0                   ?0                  	;0
		2   335  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getChainByName($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   336  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   337  FETCH_OBJ_R/82            $2=       ?0                   0:'chains'          	;0
		2   337  FE_RESET_R/77             $3=       $2                   ?11                 	;0
		3   337  FE_FETCH_R/78             ?0        $3                   16?1                	;11	>>11	<<10
		4   338  INIT_METHOD_CALL/112      ?0        16?1                 1:'getName'         	;0
		5   338  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6   338  IS_IDENTICAL/15           #5=       16?0                 $4                  	;0
		7   338  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
		8   339  FE_FREE/127               ?0        $3                   ?0                  	;1
		9   339  RETURN/62                 ?0        16?1                 ?0                  	;0
		10  339  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<7
		11  339  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
		12  342  NEW/68                    $6=       3:'Exception'        ?96                 	;1
		13  342  SEND_VAL_EX/116           ?80       5:'Chain not found.' ?1                  	;0
		14  342  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		15  342  THROW/108                 ?0        $6                   ?0                  	;0
		16  343  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  FETCH_OBJ_R/82            $0=       ?0                   0:'name'            	;0
		1   345  RETURN/62                 ?0        $0                   ?0                  	;0
		2   346  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

class SecurityTable extends Table
{
	public const TABLE_RAW = 'raw';
	public const TABLE_FILTER = 'filter';
	public const TABLE_NAT = 'nat';
	public const TABLE_MANGLE = 'mangle';
	public const TABLE_SECURITY = 'security';

	protected $name = 'security';
	protected $raw;
	protected $chains = [];

	public function getRaw()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   308  FETCH_OBJ_R/82            $0=       ?1                   0:'raw'             	;0
		1   308  RETURN/62                 ?0        $0                   ?0                  	;0
		2   309  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function setRaw($raw)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   310  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   311  ASSIGN_OBJ/136            ?0        ?2670194256          0:'raw'             	;0
		2   311  OP_DATA/137               ?0        16?0                 ?0                  	;0
		3   312  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function addChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   313  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   314  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   314  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   314  FETCH_OBJ_W/85            $1=       ?4414262             0:'chains'          	;0
		4   314  ASSIGN_DIM/147            ?2        $1                   $2                  	;0
		5   314  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   315  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function createChain(Chain $chain)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   316  RECV/63                   16?0=     ?1                   ?0                  	;0
		1   317  INIT_METHOD_CALL/112      ?0        16?0                 1:'getName'         	;0
		2   317  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		3   317  FETCH_OBJ_W/85            $3=       ?4414262             0:'chains'          	;0
		4   317  ASSIGN_DIM/147            ?2        $3                   $4                  	;0
		5   317  OP_DATA/137               ?0        16?0                 ?0                  	;0
		6   318  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		7   318  INIT_METHOD_CALL/112      ?0        16?0                 5:'getRulesList'    	;0
		8   318  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		9   318  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		10  318  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  318  ASSIGN/38                 ?5        16?1                 $7                  	;0
		12  319  NEW/68                    $9=       7:'Command'          ?128                	;1
		13  319  FETCH_OBJ_FUNC_ARG/94     $10=      ?4444745             9:'name'            	;1
		14  319  SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		15  319  DO_FCALL/60               ?8        ?8                   ?0                  	;0
		16  319  ASSIGN/38                 ?9        16?2                 $9                  	;0
		17  320  IS_SMALLER/19             #13=      10:1                 16?1                	;0
		18  320  JMPZ/43                   ?0        #13                  ?24                 	;0	>>24
		19  321  NEW/68                    $14=      11:'Exception'       ?96                 	;1
		20  321  SEND_VAL_EX/116           ?80       13:'Maximum number Rules on creation is 1.' ?1                  	;0
		21  321  DO_FCALL/60               ?12       ?8                   ?0                  	;0
		22  321  THROW/108                 ?0        $14                  ?0                  	;0
		23  321  JMP/42                    ?0        ?35                  ?0                  	;0	>>35
		24  322  IS_IDENTICAL/15           #16=      14:1                 16?1                	;0	<<18
		25  322  JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
		26  323  INIT_METHOD_CALL/112      ?0        16?2                 15:'setOptions'     	;1
		27  323  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'current'        	;1
		28  323  INIT_METHOD_CALL/112      ?0        16?0                 19:'getRulesList'   	;0
		29  323  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		30  323  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
		31  323  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		32  323  CAST/21                   #19=      $18                  ?0                  	;6
		33  323  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
		34  323  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		35  326  INIT_METHOD_CALL/112      ?0        16?2                 21:'createChain'    	;1	<<23,25
		36  326  INIT_METHOD_CALL/112      ?0        16?0                 23:'getName'        	;0
		37  326  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		38  326  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		39  326  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		40  326  RETURN/62                 ?0        $22                  ?0                  	;0
		41  327  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	public function deleteChain($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   328  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   329  INIT_METHOD_CALL/112      ?0        ?4442274             0:'getChainByName'  	;1
		2   329  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   329  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		4   329  ASSIGN/38                 ?1        16?1                 $2                  	;0
		5   330  FETCH_OBJ_UNSET/97        $4=       ?4397406             2:'chains'          	;0
		6   330  UNSET_DIM/75              ?0        $4                   16?0                	;0
		7   331  NEW/68                    $5=       3:'Command'          ?128                	;1
		8   331  FETCH_OBJ_FUNC_ARG/94     $6=       ?4381411             5:'name'            	;1
		9   331  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		10  331  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		11  331  INIT_METHOD_CALL/112      ?0        $5                   6:'deleteChain'     	;1
		12  331  INIT_METHOD_CALL/112      ?0        16?1                 8:'getName'         	;0
		13  331  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		14  331  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		15  331  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		16  331  RETURN/62                 ?0        $9                   ?0                  	;0
		17  332  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	public function getChainsList()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   334  FETCH_OBJ_R/82            $0=       ?1668555272          0:'chains'          	;0
		1   334  RETURN/62                 ?0        $0                   ?0                  	;0
		2   335  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}

	public function getChainByName($name)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   336  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   337  FETCH_OBJ_R/82            $2=       ?0                   0:'chains'          	;0
		2   337  FE_RESET_R/77             $3=       $2                   ?11                 	;0
		3   337  FE_FETCH_R/78             ?0        $3                   16?1                	;11	>>11	<<10
		4   338  INIT_METHOD_CALL/112      ?0        16?1                 1:'getName'         	;0
		5   338  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6   338  IS_IDENTICAL/15           #5=       16?0                 $4                  	;0
		7   338  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
		8   339  FE_FREE/127               ?0        $3                   ?0                  	;1
		9   339  RETURN/62                 ?0        16?1                 ?0                  	;0
		10  339  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<7
		11  339  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
		12  342  NEW/68                    $6=       3:'Exception'        ?96                 	;1
		13  342  SEND_VAL_EX/116           ?80       5:'Chain not found.' ?1                  	;0
		14  342  DO_FCALL/60               ?5        ?8                   ?0                  	;0
		15  342  THROW/108                 ?0        $6                   ?0                  	;0
		16  343  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getName()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   345  FETCH_OBJ_R/82            $0=       ?0                   0:'name'            	;0
		1   345  RETURN/62                 ?0        $0                   ?0                  	;0
		2   346  NOP/0                     ?0        1:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   5    NOP/0                     ?0        ?0                   ?0                  	;0
1   65   NOP/0                     ?0        ?0                   ?0                  	;0
2   131  NOP/0                     ?0        ?0                   ?0                  	;0
3   166  NOP/0                     ?0        ?0                   ?0                  	;0
4   298  NOP/0                     ?0        ?0                   ?0                  	;0
5   349  NOP/0                     ?0        ?0                   ?0                  	;0
6   368  NOP/0                     ?0        ?0                   ?0                  	;0
7   368  NOP/0                     ?0        ?0                   ?0                  	;0
8   372  NOP/0                     ?0        ?0                   ?0                  	;0
9   372  NOP/0                     ?0        ?0                   ?0                  	;0
10  376  NOP/0                     ?0        ?0                   ?0                  	;0
11  376  NOP/0                     ?0        ?0                   ?0                  	;0
12  380  NOP/0                     ?0        ?0                   ?0                  	;0
13  380  NOP/0                     ?0        ?0                   ?0                  	;0
14  384  NOP/0                     ?0        ?0                   ?0                  	;0
15  384  NOP/0                     ?0        ?0                   ?0                  	;0
16  386  NOP/0                     ?0        10:1                 ?0                  	;4294967295
*/

?>