<?php


class Database
{
	public $result;
	public $last_query;
	protected $key;
	public $dbh;
	public $connected = false;

	public function __construct($B9b6051782843c94, $a33c575af08d2dd9)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  10  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1  10  RECV_INIT/64              16?1=     ?2                   1:false             	;0
		2  12  ASSIGN_OBJ/136            ?0        ?2895455976          2:'dbh'             	;0
		3  12  OP_DATA/137               ?0        3:false              ?0                  	;0
		4  13  BOOL_NOT/13               #3=       16?0                 ?0                  	;0
		5  13  JMPZ/43                   ?0        #3                   ?7                  	;0	>>7
		6  14  GOTO/253                  ?0        ?12                  ?4                  	;0
		7  16  ASSIGN_OBJ/136            ?2        ?6                   5:'key'             	;0	<<5
		8  16  OP_DATA/137               ?0        16?0                 ?0                  	;0
		9  17  INIT_METHOD_CALL/112      ?0        ?80                  6:'db_connect'      	;1
		10 17  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		11 17  DO_FCALL/60               ?3        ?0                   ?0                  	;0
		12 19  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function close_mysql()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  22  FETCH_OBJ_R/82            $0=       ?8064                0:'connected'       	;0
		1  22  BOOL_NOT/13               #1=       $0                   ?0                  	;0
		2  22  JMPZ/43                   ?0        #1                   ?4                  	;0	>>4
		3  23  GOTO/253                  ?0        ?8                   ?1                  	;0
		4  25  ASSIGN_OBJ/136            ?2        ?3                   2:'connected'       	;0	<<2
		5  25  OP_DATA/137               ?0        3:false              ?0                  	;0
		6  26  ASSIGN_OBJ/136            ?3        ?3                   4:'dbh'             	;0
		7  26  OP_DATA/137               ?0        5:NULL               ?0                  	;0
		8  28  RETURN/62                 ?0        6:true               ?0                  	;0
		9  29  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function __destruct()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  32  INIT_METHOD_CALL/112      ?0        ?24                  0:'close_mysql'     	;0
		1  32  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		2  33  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function ping()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  37  FETCH_OBJ_R/82            $1=       ?784634224           0:'dbh'             	;0	<<5
		1  37  INIT_METHOD_CALL/112      ?0        $1                   1:'query'           	;1
		2  37  SEND_VAL_EX/116           ?80       3:'SELECT 1'         ?1                  	;0
		3  37  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		4  37  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
		5  38  CATCH/107                 ?1        4:'Exception'        16?0                	;0 CB	>>7,0
		6  39  RETURN/62                 ?0        6:false              ?0                  	;0
		7  41  RETURN/62                 ?0        7:true               ?0                  	;0	<<4,5
		8  42  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function db_connect($a33c575af08d2dd9)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  43  RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1  46  INIT_STATIC_METHOD_CALL/113 ?0        2:'Xui\\Functions'   4:'connect'         	;2	<<20
		2  46  FETCH_OBJ_FUNC_ARG/94     $3=       ?0                   6:'key'             	;1
		3  46  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
		4  46  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		5  46  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		6  46  ASSIGN_OBJ/136            ?0        ?769659840           1:'dbh'             	;0
		7  46  OP_DATA/137               ?0        $4                   ?0                  	;0
		8  47  FETCH_OBJ_R/82            $5=       ?46                  7:'dbh'             	;0
		9  47  JMPZ/43                   ?0        $5                   ?11                 	;0	>>11
		10 48  GOTO/253                  ?0        ?19                  ?8                  	;0
		11 50  BOOL_NOT/13               #6=       16?0                 ?0                  	;0	<<9
		12 50  JMPZ/43                   ?0        #6                   ?14                 	;0	>>14
		13 51  GOTO/253                  ?0        ?15                  ?9                  	;0
		14 53  RETURN/62                 ?0        10:false             ?0                  	;0	<<12
		15 55  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'json_encode'    	;1
		16 55  SEND_VAL_EX/116           ?80       13:array (
  'error' => 'MySQL: Cannot connect to database! Please check credentials.',
) ?1                  	;0
		17 55  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		18 55  EXIT/79                   ?0        $7                   ?0                  	;0
		19 56  JMP/42                    ?0        ?29                  ?0                  	;0	>>29
		20 57  CATCH/107                 ?1        14:'PDOException'    16?1                	;0 CB	>>29,1
		21 58  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'json_encode'    	;1
		22 58  INIT_METHOD_CALL/112      ?0        16?1                 18:'getMessage'     	;0
		23 58  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		24 58  CONCAT/8                  #9=       20:'MySQL: '         $8                  	;0
		25 58  INIT_ARRAY/71             #10=      #9                   21:'error'          	;6
		26 58  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
		27 58  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		28 58  EXIT/79                   ?0        $11                  ?0                  	;0
		29 60  FETCH_OBJ_R/82            $12=      ?4418291             22:'dbh'            	;0	<<19,20
		30 60  INIT_METHOD_CALL/112      ?0        $12                  23:'setAttribute'   	;2
		31 60  FETCH_CLASS_CONSTANT/181  #13=      26:'PDO'             25:'ATTR_ERRMODE'   	;0
		32 60  SEND_VAL_EX/116           ?80       #13                  ?1                  	;0
		33 60  FETCH_CLASS_CONSTANT/181  #14=      29:'PDO'             28:'ERRMODE_EXCEPTION'	;0
		34 60  SEND_VAL_EX/116           ?96       #14                  ?2                  	;0
		35 60  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		36 61  ASSIGN_OBJ/136            ?14       ?1743664976          31:'connected'      	;0
		37 61  OP_DATA/137               ?0        32:true              ?0                  	;0
		38 62  RETURN/62                 ?0        33:true              ?0                  	;0
		39 63  NOP/0                     ?0        34:NULL              ?0                  	;4294967295
		*/
	}

	public function db_explicit_connect($C9febb240944fd1e, $e5bebfb39a19fe80, $D16061affd463058, $ff5cf44f96903d64, $fd093b5358e9a519)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  64  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  64  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2  64  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3  64  RECV/63                   16?3=     ?4                   ?4294967294         	;0
		4  64  RECV/63                   16?4=     ?5                   ?4294967294         	;0
		5  67  NEW/68                    $7=       1:'PDO'              ?320                	;3	<<22
		6  67  CONCAT/8                  #8=       3:'mysql:host='      16?0                	;0
		7  67  CONCAT/8                  #9=       #8                   4:';port='          	;0
		8  67  CONCAT/8                  #10=      #9                   16?1                	;0
		9  67  CONCAT/8                  #11=      #10                  5:';dbname='        	;0
		10 67  CONCAT/8                  #12=      #11                  16?2                	;0
		11 67  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
		12 67  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		13 67  SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
		14 67  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15 67  ASSIGN_OBJ/136            ?0        ?1743664488          0:'dbh'             	;0
		16 67  OP_DATA/137               ?0        $7                   ?0                  	;0
		17 68  FETCH_OBJ_R/82            $14=      ?4392134             6:'dbh'             	;0
		18 68  JMPZ/43                   ?0        $14                  ?20                 	;0	>>20
		19 69  GOTO/253                  ?0        ?21                  ?7                  	;0
		20 71  RETURN/62                 ?0        8:false              ?0                  	;0	<<18
		21 72  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
		22 73  CATCH/107                 ?1        9:'PDOException'     16?5                	;0 CB	>>24,5
		23 74  RETURN/62                 ?0        11:false             ?0                  	;0
		24 76  FETCH_OBJ_R/82            $15=      ?4418291             12:'dbh'            	;0	<<21,22
		25 76  INIT_METHOD_CALL/112      ?0        $15                  13:'setAttribute'   	;2
		26 76  FETCH_CLASS_CONSTANT/181  #16=      16:'PDO'             15:'ATTR_ERRMODE'   	;0
		27 76  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
		28 76  FETCH_CLASS_CONSTANT/181  #17=      19:'PDO'             18:'ERRMODE_EXCEPTION'	;0
		29 76  SEND_VAL_EX/116           ?96       #17                  ?2                  	;0
		30 76  DO_FCALL/60               ?12       ?0                   ?0                  	;0
		31 77  ASSIGN_OBJ/136            ?13       ?1743664976          21:'connected'      	;0
		32 77  OP_DATA/137               ?0        22:true              ?0                  	;0
		33 78  RETURN/62                 ?0        23:true              ?0                  	;0
		34 79  NOP/0                     ?0        24:NULL              ?0                  	;4294967295
		*/
	}

	public function debugString($Abe061fc0129a79b)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  80  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  82  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'ob_start'        	;0
		2  82  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
		3  83  INIT_METHOD_CALL/112      ?0        16?0                 2:'debugDumpParams' 	;0
		4  83  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		5  84  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'ob_get_contents' 	;0
		6  84  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		7  84  ASSIGN/38                 ?3        16?1                 $4                  	;0
		8  85  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'ob_end_clean'    	;0
		9  85  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
		10 86  RETURN/62                 ?0        16?1                 ?0                  	;0
		11 87  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function query($F3b2dd849fb4e793, $Efef92ddb7197c4b)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   88   RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   88   RECV_INIT/64              16?1=     ?2                   0:false             	;0
		2   90   GOTO/253                  ?0        ?3                   ?1                  	;0
		3   92   FETCH_OBJ_R/82            $8=       ?5126                2:'dbh'             	;0
		4   92   BOOL_NOT/13               #9=       $8                   ?0                  	;0
		5   92   JMPZ/43                   ?0        #9                   ?7                  	;0	>>7
		6   93   GOTO/253                  ?0        ?111                 ?3                  	;0
		7   95   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'func_num_args'   	;0	<<5
		8   95   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		9   95   ASSIGN/38                 ?3        16?2                 $10                 	;0
		10  96   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'func_get_args'   	;0
		11  96   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		12  96   ASSIGN/38                 ?5        16?3                 $12                 	;0
		13  97   ASSIGN/38                 ?6        16?4                 8:array (
)         	;0
		14  98   ASSIGN/38                 ?7        16?5                 9:1                 	;0
		15  99   GOTO/253                  ?0        ?21                  ?10                 	;0
		16  102  ASSIGN_DIM/147            ?8        16?4                 ?1743664976         	;0
		17  102  OP_DATA/137               ?0        11:NULL              ?0                  	;0
		18  105  POST_INC/36               #17=      16?5                 ?0                  	;0
		19  105  FREE/70                   ?0        #17                  ?0                  	;0
		20  106  GOTO/253                  ?0        ?43                  ?12                 	;0
		21  109  IS_SMALLER/19             #18=      16?5                 16?2                	;0
		22  109  BOOL_NOT/13               #19=      #18                  ?0                  	;0
		23  109  JMPZ/43                   ?0        #19                  ?25                 	;0	>>25
		24  110  GOTO/253                  ?0        ?44                  ?13                 	;0
		25  112  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'is_null'        	;1	<<23
		26  112  FETCH_DIM_FUNC_ARG/93     $20=      16?3                 16?5                	;1
		27  112  SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
		28  112  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		29  112  JMPNZ_EX/47               #22=      $21                  ?36                 	;0	>>36
		30  112  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'strtolower'     	;1
		31  112  FETCH_DIM_FUNC_ARG/93     $23=      16?3                 16?5                	;1
		32  112  SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
		33  112  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		34  112  IS_EQUAL/17               #25=      $24                  18:'null'           	;0
		35  112  BOOL/52                   #22=      #25                  ?0                  	;0
		36  112  JMPZ/43                   ?0        #22                  ?38                 	;0	>>38	<<29
		37  113  GOTO/253                  ?0        ?16                  ?19                 	;0
		38  115  FETCH_DIM_R/81            $27=      16?3                 16?5                	;0	<<36
		39  115  ASSIGN_DIM/147            ?18       16?4                 ?4397406            	;0
		40  115  OP_DATA/137               ?0        $27                  ?0                  	;0
		41  116  GOTO/253                  ?0        ?18                  ?20                 	;0
		42  117  GOTO/253                  ?0        ?16                  ?21                 	;0
		43  119  GOTO/253                  ?0        ?21                  ?22                 	;0
		44  121  IS_IDENTICAL/15           #28=      16?1                 23:true             	;0
		45  121  BOOL_NOT/13               #29=      #28                  ?0                  	;0
		46  121  JMPZ/43                   ?0        #29                  ?48                 	;0	>>48
		47  122  GOTO/253                  ?0        ?54                  ?24                 	;0
		48  124  FETCH_OBJ_R/82            $30=      ?4422077             25:'dbh'            	;0	<<46
		49  124  INIT_METHOD_CALL/112      ?0        $30                  26:'setAttribute'   	;2
		50  124  FETCH_CLASS_CONSTANT/181  #31=      29:'PDO'             28:'MYSQL_ATTR_USE_BUFFERED_QUERY'	;0
		51  124  SEND_VAL_EX/116           ?80       #31                  ?1                  	;0
		52  124  SEND_VAL_EX/116           ?96       31:false             ?2                  	;0
		53  124  DO_FCALL/60               ?24       ?0                   ?0                  	;0
		54  126  GOTO/253                  ?0        ?55                  ?32                 	;0
		55  128  NOP/0                     ?0        ?0                   ?0                  	;0
		56  129  FETCH_OBJ_R/82            $34=      ?4381411             34:'dbh'            	;0	<<67
		57  129  INIT_METHOD_CALL/112      ?0        $34                  35:'prepare'        	;1
		58  129  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		59  129  DO_FCALL/60               $35=      ?0                   ?0                  	;0
		60  129  ASSIGN_OBJ/136            ?25       ?1743664488          33:'result'         	;0
		61  129  OP_DATA/137               ?0        $35                  ?0                  	;0
		62  130  FETCH_OBJ_R/82            $36=      ?4444745             37:'result'         	;0
		63  130  INIT_METHOD_CALL/112      ?0        $36                  38:'execute'        	;1
		64  130  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		65  130  DO_FCALL/60               ?29       ?0                   ?0                  	;0
		66  130  JMP/42                    ?0        ?110                 ?0                  	;0	>>110
		67  131  CATCH/107                 ?1        40:'Exception'       16?6                	;0 CB	>>110,56
		68  132  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'trim'           	;1
		69  132  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'explode'        	;2
		70  132  SEND_VAL_EX/116           ?80       46:'
'               ?1                  	;0
		71  132  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'explode'        	;2
		72  132  SEND_VAL_EX/116           ?80       49:'Sent SQL:'       ?1                  	;0
		73  132  INIT_METHOD_CALL/112      ?0        ?0                   50:'debugString'    	;1
		74  132  FETCH_OBJ_FUNC_ARG/94     $38=      ?769802360           52:'result'         	;1
		75  132  SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
		76  132  DO_FCALL/60               $39=      ?0                   ?0                  	;0
		77  132  SEND_VAR_NO_REF_EX/50     ?96       $39                  ?2                  	;0
		78  132  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
		79  132  SEPARATE/156              $40=      $40                  ?0                  	;0
		80  132  FETCH_DIM_FUNC_ARG/93     $41=      $40                  53:1                	;2
		81  132  SEND_VAR_EX/66            ?96       $41                  ?2                  	;0
		82  132  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
		83  132  SEPARATE/156              $42=      $42                  ?0                  	;0
		84  132  FETCH_DIM_FUNC_ARG/93     $43=      $42                  54:0                	;1
		85  132  SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
		86  132  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
		87  132  ASSIGN/38                 ?37       16?7                 $44                 	;0
		88  133  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'strlen'         	;1
		89  133  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		90  133  DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
		91  133  IS_EQUAL/17               #47=      $46                  57:0                	;0
		92  133  BOOL_NOT/13               #48=      #47                  ?0                  	;0
		93  133  JMPZ/43                   ?0        #48                  ?95                 	;0	>>95
		94  134  GOTO/253                  ?0        ?96                  ?58                 	;0
		95  136  ASSIGN/38                 ?41       16?7                 16?0                	;0	<<93
		96  138  INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'class_exists'   	;1
		97  138  SEND_VAL_EX/116           ?80       61:'XUI'             ?1                  	;0
		98  138  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
		99  138  BOOL_NOT/13               #51=      $50                  ?0                  	;0
		100 138  JMPZ/43                   ?0        #51                  ?102                	;0	>>102
		101 139  GOTO/253                  ?0        ?109                 ?62                 	;0
		102 141  INIT_STATIC_METHOD_CALL/113 ?0        63:'XUI'             65:'fc023cd5aafC77F3'	;3	<<100
		103 141  SEND_VAL_EX/116           ?80       67:'pdo'             ?1                  	;0
		104 141  INIT_METHOD_CALL/112      ?0        16?6                 68:'getMessage'     	;0
		105 141  DO_FCALL/60               $52=      ?0                   ?0                  	;0
		106 141  SEND_VAR_NO_REF_EX/50     ?96       $52                  ?2                  	;0
		107 141  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
		108 141  DO_FCALL/60               ?45       ?0                   ?0                  	;0
		109 143  RETURN/62                 ?0        70:false             ?0                  	;0
		110 145  RETURN/62                 ?0        71:true              ?0                  	;0	<<66,67
		111 147  RETURN/62                 ?0        72:false             ?0                  	;0
		112 148  GOTO/253                  ?0        ?113                 ?73                 	;0
		113 150  NOP/0                     ?0        74:NULL              ?0                  	;4294967295
		*/
	}

	public function simple_query($F3b2dd849fb4e793)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   151  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   154  FETCH_OBJ_R/82            $3=       ?4583821             1:'dbh'             	;0	<<8
		2   154  INIT_METHOD_CALL/112      ?0        $3                   2:'query'           	;1
		3   154  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   154  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5   154  ASSIGN_OBJ/136            ?0        ?769661760           0:'result'          	;0
		6   154  OP_DATA/137               ?0        $4                   ?0                  	;0
		7   154  JMP/42                    ?0        ?23                  ?0                  	;0	>>23
		8   155  CATCH/107                 ?1        4:'Exception'        16?1                	;0 CB	>>23,1
		9   156  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'class_exists'    	;1
		10  156  SEND_VAL_EX/116           ?80       8:'XUI'              ?1                  	;0
		11  156  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		12  156  BOOL_NOT/13               #6=       $5                   ?0                  	;0
		13  156  JMPZ/43                   ?0        #6                   ?15                 	;0	>>15
		14  157  GOTO/253                  ?0        ?22                  ?9                  	;0
		15  159  INIT_STATIC_METHOD_CALL/113 ?0        10:'XUI'             12:'FC023CD5aafc77F3'	;3	<<13
		16  159  SEND_VAL_EX/116           ?80       14:'pdo'             ?1                  	;0
		17  159  INIT_METHOD_CALL/112      ?0        16?1                 15:'getMessage'     	;0
		18  159  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		19  159  SEND_VAR_NO_REF_EX/50     ?96       $7                   ?2                  	;0
		20  159  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		21  159  DO_FCALL/60               ?6        ?0                   ?0                  	;0
		22  161  RETURN/62                 ?0        17:false             ?0                  	;0
		23  163  RETURN/62                 ?0        18:true              ?0                  	;0	<<7,8
		24  164  NOP/0                     ?0        19:NULL              ?0                  	;4294967295
		*/
	}

	public function get_rows($E3b64e7de3fe7c53, $D69f689c889eabec, $e01b7743d0e35da0, $a038ec44c8b8bb32)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   165  RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1   165  RECV_INIT/64              16?1=     ?2                   1:''                	;0
		2   165  RECV_INIT/64              16?2=     ?3                   2:true              	;0
		3   165  RECV_INIT/64              16?3=     ?4                   3:''                	;0
		4   167  FETCH_OBJ_R/82            $6=       ?1743664048          4:'dbh'             	;0
		5   167  JMPZ_EX/46                #7=       $6                   ?8                  	;0	>>8
		6   167  FETCH_OBJ_R/82            $8=       ?1743664048          5:'result'          	;0
		7   167  BOOL/52                   #7=       $8                   ?0                  	;0
		8   167  BOOL_NOT/13               #9=       #7                   ?0                  	;0	<<5
		9   167  JMPZ/43                   ?0        #9                   ?11                 	;0	>>11
		10  168  GOTO/253                  ?0        ?105                 ?6                  	;0
		11  170  ASSIGN/38                 ?4        16?4                 7:array (
)         	;0	<<9
		12  171  FETCH_OBJ_R/82            $11=      ?769788920           8:'result'          	;0
		13  171  INIT_METHOD_CALL/112      ?0        $11                  9:'rowCount'        	;0
		14  171  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		15  171  IS_SMALLER/19             #13=      11:0                 $12                 	;0
		16  171  BOOL_NOT/13               #14=      #13                  ?0                  	;0
		17  171  JMPZ/43                   ?0        #14                  ?19                 	;0	>>19
		18  172  GOTO/253                  ?0        ?102                 ?12                 	;0
		19  174  FETCH_OBJ_R/82            $15=      ?769664896           13:'result'         	;0	<<17
		20  174  INIT_METHOD_CALL/112      ?0        $15                  14:'fetchAll'       	;1
		21  174  FETCH_CLASS_CONSTANT/181  #16=      17:'PDO'             16:'FETCH_ASSOC'    	;0
		22  174  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
		23  174  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		24  174  FE_RESET_R/77             $18=      $17                  ?101                	;0
		25  174  FE_FETCH_R/78             ?0        $18                  16?5                	;101	>>101	<<100
		26  175  NOP/0                     ?0        ?0                   ?0                  	;1
		27  175  GOTO/253                  ?0        ?28                  ?19                 	;0
		28  177  JMPZ_EX/46                #19=      16?0                 ?34                 	;0	>>34
		29  177  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'array_key_exists'	;2
		30  177  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		31  177  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		32  177  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		33  177  BOOL/52                   #19=      $20                  ?0                  	;0
		34  177  JMPZ/43                   ?0        #19                  ?37                 	;0	>>37	<<28
		35  178  NOP/0                     ?0        ?0                   ?0                  	;1
		36  178  GOTO/253                  ?0        ?44                  ?22                 	;0
		37  180  INIT_METHOD_CALL/112      ?0        ?1743664112          23:'clean_row'      	;1	<<34
		38  180  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		39  180  DO_FCALL/60               $22=      ?0                   ?0                  	;0
		40  180  ASSIGN_DIM/147            ?15       16?4                 ?4397406            	;0
		41  180  OP_DATA/137               ?0        $22                  ?0                  	;0
		42  181  NOP/0                     ?0        ?0                   ?0                  	;1
		43  181  GOTO/253                  ?0        ?98                  ?25                 	;0
		44  183  FETCH_DIM_R/81            $23=      16?5                 16?1                	;0
		45  183  ISSET_ISEMPTY_DIM_OBJ/115 #24=      16?4                 $23                 	;33554432
		46  183  JMPZ/43                   ?0        #24                  ?49                 	;0	>>49
		47  184  NOP/0                     ?0        ?0                   ?0                  	;1
		48  184  GOTO/253                  ?0        ?54                  ?26                 	;0
		49  186  NOP/0                     ?0        ?0                   ?0                  	;1	<<46
		50  186  GOTO/253                  ?0        ?51                  ?27                 	;0
		51  188  FETCH_DIM_R/81            $25=      16?5                 16?1                	;0
		52  188  ASSIGN_DIM/147            ?20       16?4                 $25                 	;0
		53  188  OP_DATA/137               ?0        28:array (
)         ?0                  	;0
		54  190  BOOL_NOT/13               #27=      16?2                 ?0                  	;0
		55  190  JMPZ/43                   ?0        #27                  ?58                 	;0	>>58
		56  191  NOP/0                     ?0        ?0                   ?0                  	;1
		57  191  GOTO/253                  ?0        ?68                  ?29                 	;0
		58  193  FETCH_DIM_R/81            $28=      16?5                 16?1                	;0	<<55
		59  193  INIT_METHOD_CALL/112      ?0        ?1743664144          30:'clean_row'      	;1
		60  193  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		61  193  DO_FCALL/60               $30=      ?0                   ?0                  	;0
		62  193  ASSIGN_DIM/147            ?23       16?4                 $28                 	;0
		63  193  OP_DATA/137               ?0        $30                  ?0                  	;0
		64  194  NOP/0                     ?0        ?0                   ?0                  	;1
		65  194  GOTO/253                  ?0        ?98                  ?32                 	;0
		66  195  NOP/0                     ?0        ?0                   ?0                  	;1
		67  195  GOTO/253                  ?0        ?68                  ?33                 	;0
		68  198  ISSET_ISEMPTY_CV/197      #31=      16?3                 ?0                  	;16777216
		69  198  BOOL_NOT/13               #32=      #31                  ?0                  	;0
		70  198  JMPZ_EX/46                #32=      #32                  ?76                 	;0	>>76
		71  198  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'array_key_exists'	;2
		72  198  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		73  198  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		74  198  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		75  198  BOOL/52                   #32=      $33                  ?0                  	;0
		76  198  JMPZ/43                   ?0        #32                  ?79                 	;0	>>79	<<70
		77  199  NOP/0                     ?0        ?0                   ?0                  	;1
		78  199  GOTO/253                  ?0        ?88                  ?36                 	;0
		79  201  FETCH_DIM_R/81            $34=      16?5                 16?1                	;0	<<76
		80  201  INIT_METHOD_CALL/112      ?0        ?144                 37:'clean_row'      	;1
		81  201  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		82  201  DO_FCALL/60               $37=      ?0                   ?0                  	;0
		83  201  FETCH_DIM_W/84            $35=      16?4                 $34                 	;0
		84  201  ASSIGN_DIM/147            ?30       $35                  ?4397406            	;0
		85  201  OP_DATA/137               ?0        $37                  ?0                  	;0
		86  202  NOP/0                     ?0        ?0                   ?0                  	;1
		87  202  GOTO/253                  ?0        ?98                  ?39                 	;0
		88  204  NOP/0                     ?0        ?0                   ?0                  	;1
		89  204  GOTO/253                  ?0        ?90                  ?40                 	;0
		90  206  FETCH_DIM_R/81            $38=      16?5                 16?1                	;0
		91  206  FETCH_DIM_R/81            $40=      16?5                 16?3                	;0
		92  206  INIT_METHOD_CALL/112      ?0        ?144                 41:'clean_row'      	;1
		93  206  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		94  206  DO_FCALL/60               $42=      ?0                   ?0                  	;0
		95  206  FETCH_DIM_W/84            $39=      16?4                 $38                 	;0
		96  206  ASSIGN_DIM/147            ?35       $39                  $40                 	;0
		97  206  OP_DATA/137               ?0        $42                  ?0                  	;0
		98  211  NOP/0                     ?0        ?0                   ?0                  	;1
		99  211  GOTO/253                  ?0        ?100                 ?43                 	;0
		100 212  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
		101 212  FE_FREE/127               ?0        $18                  ?0                  	;0	<<24
		102 216  ASSIGN_OBJ/136            ?37       ?4397406             44:'result'         	;0
		103 216  OP_DATA/137               ?0        45:NULL              ?0                  	;0
		104 217  RETURN/62                 ?0        16?4                 ?0                  	;0
		105 219  RETURN/62                 ?0        46:false             ?0                  	;0
		106 220  NOP/0                     ?0        47:NULL              ?0                  	;4294967295
		*/
	}

	public function get_row()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   223  FETCH_OBJ_R/82            $1=       ?4377971             0:'dbh'             	;0
		1   223  JMPZ_EX/46                #2=       $1                   ?4                  	;0	>>4
		2   223  FETCH_OBJ_R/82            $3=       ?4377971             1:'result'          	;0
		3   223  BOOL/52                   #2=       $3                   ?0                  	;0
		4   223  BOOL_NOT/13               #4=       #2                   ?0                  	;0	<<1
		5   223  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		6   224  GOTO/253                  ?0        ?27                  ?2                  	;0
		7   226  ASSIGN/38                 ?4        16?0                 3:array (
)         	;0	<<5
		8   227  FETCH_OBJ_R/82            $6=       ?1743663696          4:'result'          	;0
		9   227  INIT_METHOD_CALL/112      ?0        $6                   5:'rowCount'        	;0
		10  227  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		11  227  IS_SMALLER/19             #8=       7:0                  $7                  	;0
		12  227  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		13  227  JMPZ/43                   ?0        #9                   ?15                 	;0	>>15
		14  228  GOTO/253                  ?0        ?21                  ?8                  	;0
		15  230  FETCH_OBJ_R/82            $10=      ?0                   9:'result'          	;0	<<13
		16  230  INIT_METHOD_CALL/112      ?0        $10                  10:'fetch'          	;1
		17  230  FETCH_CLASS_CONSTANT/181  #11=      13:'PDO'             12:'FETCH_ASSOC'    	;0
		18  230  SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
		19  230  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		20  230  ASSIGN/38                 ?12       16?0                 $12                 	;0
		21  232  ASSIGN_OBJ/136            ?13       ?1743664704          15:'result'         	;0
		22  232  OP_DATA/137               ?0        16:NULL              ?0                  	;0
		23  233  INIT_METHOD_CALL/112      ?0        ?1743664704          17:'clean_row'      	;1
		24  233  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		25  233  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		26  233  RETURN/62                 ?0        $15                  ?0                  	;0
		27  235  RETURN/62                 ?0        19:false             ?0                  	;0
		28  236  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	public function get_col()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   239  FETCH_OBJ_R/82            $1=       ?769665176           0:'dbh'             	;0
		1   239  JMPZ_EX/46                #2=       $1                   ?4                  	;0	>>4
		2   239  FETCH_OBJ_R/82            $3=       ?769665176           1:'result'          	;0
		3   239  BOOL/52                   #2=       $3                   ?0                  	;0
		4   239  BOOL_NOT/13               #4=       #2                   ?0                  	;0	<<1
		5   239  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		6   240  GOTO/253                  ?0        ?24                  ?2                  	;0
		7   242  ASSIGN/38                 ?4        16?0                 3:false             	;0	<<5
		8   243  FETCH_OBJ_R/82            $6=       ?4583821             4:'result'          	;0
		9   243  INIT_METHOD_CALL/112      ?0        $6                   5:'rowCount'        	;0
		10  243  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		11  243  IS_SMALLER/19             #8=       7:0                  $7                  	;0
		12  243  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		13  243  JMPZ/43                   ?0        #9                   ?15                 	;0	>>15
		14  244  GOTO/253                  ?0        ?21                  ?8                  	;0
		15  246  FETCH_OBJ_R/82            $10=      ?0                   9:'result'          	;0	<<13
		16  246  INIT_METHOD_CALL/112      ?0        $10                  10:'fetch'          	;0
		17  246  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		18  246  ASSIGN/38                 ?11       16?0                 $11                 	;0
		19  247  FETCH_DIM_R/81            $13=      16?0                 12:0                	;0
		20  247  ASSIGN/38                 ?13       16?0                 $13                 	;0
		21  249  ASSIGN_OBJ/136            ?14       ?1743664704          13:'result'         	;0
		22  249  OP_DATA/137               ?0        14:NULL              ?0                  	;0
		23  250  RETURN/62                 ?0        16?0                 ?0                  	;0
		24  252  RETURN/62                 ?0        15:false             ?0                  	;0
		25  253  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	public function escape($fcebf3d4e9466db0)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   254  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   256  FETCH_OBJ_R/82            $1=       ?247                 0:'dbh'             	;0
		2   256  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		3   256  JMPZ/43                   ?0        #2                   ?5                  	;0	>>5
		4   257  GOTO/253                  ?0        ?10                  ?1                  	;0
		5   259  FETCH_OBJ_R/82            $3=       ?1743664288          2:'dbh'             	;0	<<3
		6   259  INIT_METHOD_CALL/112      ?0        $3                   3:'quote'           	;1
		7   259  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		8   259  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		9   259  RETURN/62                 ?0        $4                   ?0                  	;0
		10  261  RETURN/62                 ?0        5:NULL               ?0                  	;0
		11  262  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function num_fields()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   265  FETCH_OBJ_R/82            $1=       ?769665296           0:'dbh'             	;0
		1   265  JMPZ_EX/46                #2=       $1                   ?4                  	;0	>>4
		2   265  FETCH_OBJ_R/82            $3=       ?769665296           1:'result'          	;0
		3   265  BOOL/52                   #2=       $3                   ?0                  	;0
		4   265  BOOL_NOT/13               #4=       #2                   ?0                  	;0	<<1
		5   265  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		6   266  GOTO/253                  ?0        ?17                  ?2                  	;0
		7   268  FETCH_OBJ_R/82            $5=       ?0                   3:'result'          	;0	<<5
		8   268  INIT_METHOD_CALL/112      ?0        $5                   4:'columnCount'     	;0
		9   268  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		10  268  ASSIGN/38                 ?6        16?0                 $6                  	;0
		11  269  ISSET_ISEMPTY_CV/197      #8=       16?0                 ?0                  	;16777216
		12  269  JMPZ/43                   ?0        #8                   ?15                 	;0	>>15
		13  269  QM_ASSIGN/22              #9=       6:0                  ?0                  	;0
		14  269  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
		15  269  QM_ASSIGN/22              #9=       16?0                 ?0                  	;0	<<12
		16  269  RETURN/62                 ?0        #9                   ?0                  	;0	<<14
		17  271  RETURN/62                 ?0        7:0                  ?0                  	;0
		18  272  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function last_insert_id()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   275  FETCH_OBJ_R/82            $1=       ?4410621             0:'dbh'             	;0
		1   275  BOOL_NOT/13               #2=       $1                   ?0                  	;0
		2   275  JMPZ/43                   ?0        #2                   ?4                  	;0	>>4
		3   276  GOTO/253                  ?0        ?14                  ?1                  	;0
		4   278  FETCH_OBJ_R/82            $3=       ?0                   2:'dbh'             	;0	<<2
		5   278  INIT_METHOD_CALL/112      ?0        $3                   3:'lastInsertId'    	;0
		6   278  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		7   278  ASSIGN/38                 ?4        16?0                 $4                  	;0
		8   279  ISSET_ISEMPTY_CV/197      #6=       16?0                 ?0                  	;16777216
		9   279  JMPZ/43                   ?0        #6                   ?12                 	;0	>>12
		10  279  QM_ASSIGN/22              #7=       5:0                  ?0                  	;0
		11  279  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		12  279  QM_ASSIGN/22              #7=       16?0                 ?0                  	;0	<<9
		13  279  RETURN/62                 ?0        #7                   ?0                  	;0	<<11
		14  281  RETURN/62                 ?0        6:NULL               ?0                  	;0
		15  282  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function num_rows()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   285  FETCH_OBJ_R/82            $1=       ?769665296           0:'dbh'             	;0
		1   285  JMPZ_EX/46                #2=       $1                   ?4                  	;0	>>4
		2   285  FETCH_OBJ_R/82            $3=       ?769665296           1:'result'          	;0
		3   285  BOOL/52                   #2=       $3                   ?0                  	;0
		4   285  BOOL_NOT/13               #4=       #2                   ?0                  	;0	<<1
		5   285  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		6   286  GOTO/253                  ?0        ?17                  ?2                  	;0
		7   288  FETCH_OBJ_R/82            $5=       ?0                   3:'result'          	;0	<<5
		8   288  INIT_METHOD_CALL/112      ?0        $5                   4:'rowCount'        	;0
		9   288  DO_FCALL/60               $6=       ?0                   ?0                  	;0
		10  288  ASSIGN/38                 ?6        16?0                 $6                  	;0
		11  289  ISSET_ISEMPTY_CV/197      #8=       16?0                 ?0                  	;16777216
		12  289  JMPZ/43                   ?0        #8                   ?15                 	;0	>>15
		13  289  QM_ASSIGN/22              #9=       6:0                  ?0                  	;0
		14  289  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
		15  289  QM_ASSIGN/22              #9=       16?0                 ?0                  	;0	<<12
		16  289  RETURN/62                 ?0        #9                   ?0                  	;0	<<14
		17  291  RETURN/62                 ?0        7:0                  ?0                  	;0
		18  292  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	static public function FDebdB3616A89CE1($ce0840c647e1bbc7)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   293  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   295  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
		2   297  IS_EQUAL/17               #1=       16?0                 1:''                	;0	<<1
		3   297  BOOL_NOT/13               #2=       #1                   ?0                  	;0
		4   297  JMPZ/43                   ?0        #2                   ?6                  	;0	>>6
		5   298  GOTO/253                  ?0        ?7                   ?2                  	;0
		6   300  RETURN/62                 ?0        3:''                 ?0                  	;0	<<4
		7   302  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
		8   302  SEND_VAL_EX/116           ?80       6:array (
  0 => '
',
  1 => '
',
  2 => '',
) ?1                  	;0
		9   302  SEND_VAL_EX/116           ?96       7:'
'                ?2                  	;0
		10  302  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		11  302  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		12  302  ASSIGN/38                 ?3        16?0                 $3                  	;0
		13  303  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'str_replace'     	;3
		14  303  SEND_VAL_EX/116           ?80       10:'<'               ?1                  	;0
		15  303  SEND_VAL_EX/116           ?96       11:'&lt;'            ?2                  	;0
		16  303  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'str_replace'    	;3
		17  303  SEND_VAL_EX/116           ?80       14:'>'               ?1                  	;0
		18  303  SEND_VAL_EX/116           ?96       15:'&gt;'            ?2                  	;0
		19  303  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		20  303  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		21  303  SEND_VAR_NO_REF_EX/50     ?112      $5                   ?3                  	;0
		22  303  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		23  303  ASSIGN/38                 ?6        16?0                 $6                  	;0
		24  304  GOTO/253                  ?0        ?25                  ?16                 	;0
		25  306  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'str_replace'    	;3
		26  306  SEND_VAL_EX/116           ?80       19:'<!--'            ?1                  	;0
		27  306  SEND_VAL_EX/116           ?96       20:'&#60;&#33;--'    ?2                  	;0
		28  306  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		29  306  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		30  306  ASSIGN/38                 ?8        16?0                 $8                  	;0
		31  307  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'str_replace'    	;3
		32  307  SEND_VAL_EX/116           ?80       23:'-->'             ?1                  	;0
		33  307  SEND_VAL_EX/116           ?96       24:'--&#62;'         ?2                  	;0
		34  307  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		35  307  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		36  307  ASSIGN/38                 ?10       16?0                 $10                 	;0
		37  308  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'str_ireplace'   	;3
		38  308  SEND_VAL_EX/116           ?80       27:'<script'         ?1                  	;0
		39  308  SEND_VAL_EX/116           ?96       28:'&#60;script'     ?2                  	;0
		40  308  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		41  308  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		42  308  ASSIGN/38                 ?12       16?0                 $12                 	;0
		43  309  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'preg_replace'   	;3
		44  309  SEND_VAL_EX/116           ?80       31:'/&amp;#([0-9]+);/s' ?1                  	;0
		45  309  SEND_VAL_EX/116           ?96       32:'&#\\1;'          ?2                  	;0
		46  309  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		47  309  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		48  309  ASSIGN/38                 ?14       16?0                 $14                 	;0
		49  310  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'preg_replace'   	;3
		50  310  SEND_VAL_EX/116           ?80       35:'/&#(\\d+?)([^\\d;])/i' ?1                  	;0
		51  310  SEND_VAL_EX/116           ?96       36:'&#\\1;\\2'       ?2                  	;0
		52  310  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		53  310  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		54  310  ASSIGN/38                 ?16       16?0                 $16                 	;0
		55  311  GOTO/253                  ?0        ?56                  ?37                 	;0
		56  313  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'trim'           	;1
		57  313  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		58  313  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		59  313  RETURN/62                 ?0        $18                  ?0                  	;0
		60  314  GOTO/253                  ?0        ?61                  ?40                 	;0
		61  316  NOP/0                     ?0        41:NULL              ?0                  	;4294967295
		*/
	}

	public function clean_row($ead02b90b6e16dae)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   317  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   319  FE_RESET_R/77             $3=       16?0                 ?14                 	;0
		2   319  FE_FETCH_R/78             #4=       $3                   16?1                	;14	>>14	<<13
		3   319  ASSIGN/38                 ?2        16?2                 #4                  	;0
		4   320  BOOL_NOT/13               #6=       16?1                 ?0                  	;0
		5   320  JMPZ/43                   ?0        #6                   ?8                  	;0	>>8
		6   321  NOP/0                     ?0        ?0                   ?0                  	;1
		7   321  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
		8   323  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'FdEBDb3616A89cE1'	;1	<<5
		9   323  SEND_VAR/117              ?80       16?1                 ?1                  	;0
		10  323  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		11  323  ASSIGN_DIM/147            ?4        16?0                 16?2                	;0
		12  323  OP_DATA/137               ?0        $8                   ?0                  	;0
		13  325  JMP/42                    ?0        ?2                   ?0                  	;0	>>2	<<7
		14  325  FE_FREE/127               ?0        $3                   ?0                  	;0	<<1
		15  328  RETURN/62                 ?0        16?0                 ?0                  	;0
		16  329  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    NOP/0                     ?0        ?0                   ?0                  	;0
1   331  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>