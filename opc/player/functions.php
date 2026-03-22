<?php


class Database
{
	public $result;
	public $dbh;
	public $connected = false;

	public function __construct()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   112  ASSIGN_OBJ/136            ?0        ?4414031             0:'dbh'             	;0
		1   112  OP_DATA/137               ?0        1:false              ?0                  	;0
		2   113  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function close_mysql()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   116  FETCH_OBJ_R/82            $0=       ?1669331800          0:'connected'       	;0
		1   116  BOOL_NOT/13               #1=       $0                   ?0                  	;0
		2   116  JMPZ/43                   ?0        #1                   ?4                  	;0	>>4
		3   117  GOTO/253                  ?0        ?8                   ?1                  	;0
		4   119  ASSIGN_OBJ/136            ?2        ?3                   2:'connected'       	;0	<<2
		5   119  OP_DATA/137               ?0        3:false              ?0                  	;0
		6   120  ASSIGN_OBJ/136            ?3        ?3                   4:'dbh'             	;0
		7   120  OP_DATA/137               ?0        5:NULL               ?0                  	;0
		8   122  RETURN/62                 ?0        6:true               ?0                  	;0
		9   123  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
		*/
	}

	public function __destruct()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   126  INIT_METHOD_CALL/112      ?0        ?0                   0:'close_mysql'     	;0
		1   126  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		2   127  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	public function ping()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   131  FETCH_OBJ_R/82            $1=       ?16                  0:'dbh'             	;0	<<5
		1   131  INIT_METHOD_CALL/112      ?0        $1                   1:'query'           	;1
		2   131  SEND_VAL_EX/116           ?80       3:'SELECT 1'         ?1                  	;0
		3   131  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		4   131  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
		5   132  CATCH/107                 ?1        4:'Exception'        16?0                	;0 CB	>>7,0
		6   133  RETURN/62                 ?0        6:false              ?0                  	;0
		7   135  RETURN/62                 ?0        7:true               ?0                  	;0	<<4,5
		8   136  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function db_connect()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   140  INIT_STATIC_METHOD_CALL/113 ?0        1:'Xui\\Functions'   3:'connect'         	;1	<<13
		1   140  SEND_VAL_EX/116           ?80       5:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
		2   140  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   140  ASSIGN_OBJ/136            ?0        ?1657269344          0:'dbh'             	;0
		4   140  OP_DATA/137               ?0        $2                   ?0                  	;0
		5   141  FETCH_OBJ_R/82            $3=       ?140                 6:'dbh'             	;0
		6   141  JMPZ/43                   ?0        $3                   ?8                  	;0	>>8
		7   142  GOTO/253                  ?0        ?12                  ?7                  	;0
		8   144  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'json_encode'     	;1	<<6
		9   144  SEND_VAL_EX/116           ?80       10:array (
  'error' => 'MySQL: Cannot connect to database! Please check credentials.',
) ?1                  	;0
		10  144  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		11  144  EXIT/79                   ?0        $4                   ?0                  	;0
		12  145  JMP/42                    ?0        ?22                  ?0                  	;0	>>22
		13  146  CATCH/107                 ?1        11:'PDOException'    16?0                	;0 CB	>>22,0
		14  147  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'json_encode'    	;1
		15  147  INIT_METHOD_CALL/112      ?0        16?0                 15:'getMessage'     	;0
		16  147  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		17  147  CONCAT/8                  #6=       17:'MySQL: '         $5                  	;0
		18  147  INIT_ARRAY/71             #7=       #6                   18:'error'          	;6
		19  147  SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
		20  147  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		21  147  EXIT/79                   ?0        $8                   ?0                  	;0
		22  149  FETCH_OBJ_R/82            $9=       ?4418291             19:'dbh'            	;0	<<12,13
		23  149  INIT_METHOD_CALL/112      ?0        $9                   20:'setAttribute'   	;2
		24  149  FETCH_CLASS_CONSTANT/181  #10=      23:'PDO'             22:'ATTR_ERRMODE'   	;0
		25  149  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
		26  149  FETCH_CLASS_CONSTANT/181  #11=      26:'PDO'             25:'ERRMODE_EXCEPTION'	;0
		27  149  SEND_VAL_EX/116           ?96       #11                  ?2                  	;0
		28  149  DO_FCALL/60               ?11       ?0                   ?0                  	;0
		29  150  ASSIGN_OBJ/136            ?12       ?2670194416          28:'connected'      	;0
		30  150  OP_DATA/137               ?0        29:true              ?0                  	;0
		31  151  FETCH_OBJ_R/82            $14=      ?4418291             30:'dbh'            	;0
		32  151  INIT_METHOD_CALL/112      ?0        $14                  31:'exec'           	;1
		33  151  SEND_VAL_EX/116           ?80       33:'SET NAMES utf8;' ?1                  	;0
		34  151  DO_FCALL/60               ?14       ?0                   ?0                  	;0
		35  152  RETURN/62                 ?0        34:true              ?0                  	;0
		36  153  NOP/0                     ?0        35:NULL              ?0                  	;4294967295
		*/
	}

	public function db_explicit_connect($C9febb240944fd1e, $e5bebfb39a19fe80, $D16061affd463058, $ff5cf44f96903d64, $fd093b5358e9a519)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   154  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   154  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   154  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3   154  RECV/63                   16?3=     ?4                   ?4294967294         	;0
		4   154  RECV/63                   16?4=     ?5                   ?4294967294         	;0
		5   157  NEW/68                    $7=       1:'PDO'              ?320                	;3	<<22
		6   157  CONCAT/8                  #8=       3:'mysql:host='      16?0                	;0
		7   157  CONCAT/8                  #9=       #8                   4:';port='          	;0
		8   157  CONCAT/8                  #10=      #9                   16?1                	;0
		9   157  CONCAT/8                  #11=      #10                  5:';dbname='        	;0
		10  157  CONCAT/8                  #12=      #11                  16?2                	;0
		11  157  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
		12  157  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
		13  157  SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
		14  157  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15  157  ASSIGN_OBJ/136            ?0        ?2670194112          0:'dbh'             	;0
		16  157  OP_DATA/137               ?0        $7                   ?0                  	;0
		17  158  FETCH_OBJ_R/82            $14=      ?4392134             6:'dbh'             	;0
		18  158  JMPZ/43                   ?0        $14                  ?20                 	;0	>>20
		19  159  GOTO/253                  ?0        ?21                  ?7                  	;0
		20  161  RETURN/62                 ?0        8:false              ?0                  	;0	<<18
		21  162  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
		22  163  CATCH/107                 ?1        9:'PDOException'     16?5                	;0 CB	>>24,5
		23  164  RETURN/62                 ?0        11:false             ?0                  	;0
		24  166  FETCH_OBJ_R/82            $15=      ?4418291             12:'dbh'            	;0	<<21,22
		25  166  INIT_METHOD_CALL/112      ?0        $15                  13:'setAttribute'   	;2
		26  166  FETCH_CLASS_CONSTANT/181  #16=      16:'PDO'             15:'ATTR_ERRMODE'   	;0
		27  166  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
		28  166  FETCH_CLASS_CONSTANT/181  #17=      19:'PDO'             18:'ERRMODE_EXCEPTION'	;0
		29  166  SEND_VAL_EX/116           ?96       #17                  ?2                  	;0
		30  166  DO_FCALL/60               ?12       ?0                   ?0                  	;0
		31  167  ASSIGN_OBJ/136            ?13       ?2670194416          21:'connected'      	;0
		32  167  OP_DATA/137               ?0        22:true              ?0                  	;0
		33  168  FETCH_OBJ_R/82            $20=      ?4418291             23:'dbh'            	;0
		34  168  INIT_METHOD_CALL/112      ?0        $20                  24:'exec'           	;1
		35  168  SEND_VAL_EX/116           ?80       26:'SET NAMES utf8;' ?1                  	;0
		36  168  DO_FCALL/60               ?15       ?0                   ?0                  	;0
		37  169  RETURN/62                 ?0        27:true              ?0                  	;0
		38  170  NOP/0                     ?0        28:NULL              ?0                  	;4294967295
		*/
	}

	public function query($F3b2dd849fb4e793, $Efef92ddb7197c4b)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   171  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   171  RECV_INIT/64              16?1=     ?2                   0:false             	;0
		2   173  GOTO/253                  ?0        ?8                   ?1                  	;0
		3   176  ASSIGN_DIM/147            ?0        16?2                 ?4583868            	;0
		4   176  OP_DATA/137               ?0        2:NULL               ?0                  	;0
		5   179  POST_INC/36               #8=       16?3                 ?0                  	;0
		6   179  FREE/70                   ?0        #8                   ?0                  	;0
		7   180  GOTO/253                  ?0        ?43                  ?3                  	;0
		8   182  FETCH_OBJ_R/82            $9=       ?4410650             4:'dbh'             	;0
		9   182  BOOL_NOT/13               #10=      $9                   ?0                  	;0
		10  182  JMPZ/43                   ?0        #10                  ?12                 	;0	>>12
		11  183  GOTO/253                  ?0        ?70                  ?5                  	;0
		12  185  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'func_num_args'   	;0	<<10
		13  185  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		14  185  ASSIGN/38                 ?5        16?4                 $11                 	;0
		15  186  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'func_get_args'   	;0
		16  186  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		17  186  ASSIGN/38                 ?7        16?5                 $13                 	;0
		18  187  ASSIGN/38                 ?8        16?2                 10:array (
)        	;0
		19  188  ASSIGN/38                 ?9        16?3                 11:1                	;0
		20  189  GOTO/253                  ?0        ?21                  ?12                 	;0
		21  192  IS_SMALLER/19             #17=      16?3                 16?4                	;0
		22  192  BOOL_NOT/13               #18=      #17                  ?0                  	;0
		23  192  JMPZ/43                   ?0        #18                  ?25                 	;0	>>25
		24  193  GOTO/253                  ?0        ?44                  ?13                 	;0
		25  195  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'is_null'        	;1	<<23
		26  195  FETCH_DIM_FUNC_ARG/93     $19=      16?5                 16?3                	;1
		27  195  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
		28  195  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		29  195  JMPNZ_EX/47               #21=      $20                  ?36                 	;0	>>36
		30  195  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'strtolower'     	;1
		31  195  FETCH_DIM_FUNC_ARG/93     $22=      16?5                 16?3                	;1
		32  195  SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
		33  195  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		34  195  IS_EQUAL/17               #24=      $23                  18:'null'           	;0
		35  195  BOOL/52                   #21=      #24                  ?0                  	;0
		36  195  JMPZ/43                   ?0        #21                  ?38                 	;0	>>38	<<29
		37  196  GOTO/253                  ?0        ?3                   ?19                 	;0
		38  198  FETCH_DIM_R/81            $26=      16?5                 16?3                	;0	<<36
		39  198  ASSIGN_DIM/147            ?18       16?2                 ?4397406            	;0
		40  198  OP_DATA/137               ?0        $26                  ?0                  	;0
		41  199  GOTO/253                  ?0        ?5                   ?20                 	;0
		42  200  GOTO/253                  ?0        ?3                   ?21                 	;0
		43  202  GOTO/253                  ?0        ?21                  ?22                 	;0
		44  204  IS_IDENTICAL/15           #27=      16?1                 23:true             	;0
		45  204  BOOL_NOT/13               #28=      #27                  ?0                  	;0
		46  204  JMPZ/43                   ?0        #28                  ?48                 	;0	>>48
		47  205  GOTO/253                  ?0        ?54                  ?24                 	;0
		48  207  FETCH_OBJ_R/82            $29=      ?4422077             25:'dbh'            	;0	<<46
		49  207  INIT_METHOD_CALL/112      ?0        $29                  26:'setAttribute'   	;2
		50  207  FETCH_CLASS_CONSTANT/181  #30=      29:'PDO'             28:'MYSQL_ATTR_USE_BUFFERED_QUERY'	;0
		51  207  SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
		52  207  SEND_VAL_EX/116           ?96       31:false             ?2                  	;0
		53  207  DO_FCALL/60               ?24       ?0                   ?0                  	;0
		54  209  GOTO/253                  ?0        ?55                  ?32                 	;0
		55  211  NOP/0                     ?0        ?0                   ?0                  	;0
		56  212  FETCH_OBJ_R/82            $33=      ?4381411             34:'dbh'            	;0	<<67
		57  212  INIT_METHOD_CALL/112      ?0        $33                  35:'prepare'        	;1
		58  212  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		59  212  DO_FCALL/60               $34=      ?0                   ?0                  	;0
		60  212  ASSIGN_OBJ/136            ?25       ?2670193928          33:'result'         	;0
		61  212  OP_DATA/137               ?0        $34                  ?0                  	;0
		62  213  FETCH_OBJ_R/82            $35=      ?4444745             37:'result'         	;0
		63  213  INIT_METHOD_CALL/112      ?0        $35                  38:'execute'        	;1
		64  213  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		65  213  DO_FCALL/60               ?29       ?0                   ?0                  	;0
		66  213  JMP/42                    ?0        ?69                  ?0                  	;0	>>69
		67  214  CATCH/107                 ?1        40:'Exception'       16?6                	;0 CB	>>69,56
		68  215  RETURN/62                 ?0        42:false             ?0                  	;0
		69  217  RETURN/62                 ?0        43:true              ?0                  	;0	<<66,67
		70  219  RETURN/62                 ?0        44:false             ?0                  	;0
		71  220  GOTO/253                  ?0        ?72                  ?45                 	;0
		72  222  NOP/0                     ?0        46:NULL              ?0                  	;4294967295
		*/
	}

	public function simple_query($F3b2dd849fb4e793)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   223  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   226  FETCH_OBJ_R/82            $3=       ?4381411             1:'dbh'             	;0	<<8
		2   226  INIT_METHOD_CALL/112      ?0        $3                   2:'query'           	;1
		3   226  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   226  DO_FCALL/60               $4=       ?0                   ?0                  	;0
		5   226  ASSIGN_OBJ/136            ?0        ?1657283232          0:'result'          	;0
		6   226  OP_DATA/137               ?0        $4                   ?0                  	;0
		7   226  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		8   227  CATCH/107                 ?1        4:'Exception'        16?1                	;0 CB	>>10,1
		9   228  RETURN/62                 ?0        6:false              ?0                  	;0
		10  230  RETURN/62                 ?0        7:true               ?0                  	;0	<<7,8
		11  231  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function get_rows($E3b64e7de3fe7c53, $D69f689c889eabec, $e01b7743d0e35da0, $a038ec44c8b8bb32)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   232  RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1   232  RECV_INIT/64              16?1=     ?2                   1:''                	;0
		2   232  RECV_INIT/64              16?2=     ?3                   2:true              	;0
		3   232  RECV_INIT/64              16?3=     ?4                   3:''                	;0
		4   234  FETCH_OBJ_R/82            $6=       ?1661257280          4:'dbh'             	;0
		5   234  JMPZ_EX/46                #7=       $6                   ?8                  	;0	>>8
		6   234  FETCH_OBJ_R/82            $8=       ?1661257280          5:'result'          	;0
		7   234  BOOL/52                   #7=       $8                   ?0                  	;0
		8   234  BOOL_NOT/13               #9=       #7                   ?0                  	;0	<<5
		9   234  JMPZ/43                   ?0        #9                   ?11                 	;0	>>11
		10  235  GOTO/253                  ?0        ?93                  ?6                  	;0
		11  237  ASSIGN/38                 ?4        16?4                 7:array (
)         	;0	<<9
		12  238  FETCH_OBJ_R/82            $11=      ?2670193168          8:'result'          	;0
		13  238  INIT_METHOD_CALL/112      ?0        $11                  9:'rowCount'        	;0
		14  238  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		15  238  IS_SMALLER/19             #13=      11:0                 $12                 	;0
		16  238  BOOL_NOT/13               #14=      #13                  ?0                  	;0
		17  238  JMPZ/43                   ?0        #14                  ?19                 	;0	>>19
		18  239  GOTO/253                  ?0        ?90                  ?12                 	;0
		19  241  FETCH_OBJ_R/82            $15=      ?1660904544          13:'result'         	;0	<<17
		20  241  INIT_METHOD_CALL/112      ?0        $15                  14:'fetchAll'       	;1
		21  241  FETCH_CLASS_CONSTANT/181  #16=      17:'PDO'             16:'FETCH_ASSOC'    	;0
		22  241  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
		23  241  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		24  241  FE_RESET_R/77             $18=      $17                  ?89                 	;0
		25  241  FE_FETCH_R/78             ?0        $18                  16?5                	;89	>>89	<<88
		26  242  NOP/0                     ?0        ?0                   ?0                  	;1
		27  242  GOTO/253                  ?0        ?47                  ?19                 	;0
		28  245  ISSET_ISEMPTY_CV/197      #19=      16?3                 ?0                  	;16777216
		29  245  BOOL_NOT/13               #20=      #19                  ?0                  	;0
		30  245  JMPZ_EX/46                #20=      #20                  ?36                 	;0	>>36
		31  245  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'array_key_exists'	;2
		32  245  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		33  245  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		34  245  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		35  245  BOOL/52                   #20=      $21                  ?0                  	;0
		36  245  JMPZ/43                   ?0        #20                  ?39                 	;0	>>39	<<30
		37  246  NOP/0                     ?0        ?0                   ?0                  	;1
		38  246  GOTO/253                  ?0        ?45                  ?22                 	;0
		39  248  FETCH_DIM_R/81            $22=      16?5                 16?1                	;0	<<36
		40  248  FETCH_DIM_W/84            $23=      16?4                 $22                 	;0
		41  248  ASSIGN_DIM/147            ?18       $23                  ?4397406            	;0
		42  248  OP_DATA/137               ?0        16?5                 ?0                  	;0
		43  249  NOP/0                     ?0        ?0                   ?0                  	;1
		44  249  GOTO/253                  ?0        ?72                  ?23                 	;0
		45  251  NOP/0                     ?0        ?0                   ?0                  	;1
		46  251  GOTO/253                  ?0        ?67                  ?24                 	;0
		47  253  JMPZ_EX/46                #25=      16?0                 ?53                 	;0	>>53
		48  253  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'array_key_exists'	;2
		49  253  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		50  253  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
		51  253  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		52  253  BOOL/52                   #25=      $26                  ?0                  	;0
		53  253  JMPZ/43                   ?0        #25                  ?56                 	;0	>>56	<<47
		54  254  NOP/0                     ?0        ?0                   ?0                  	;1
		55  254  GOTO/253                  ?0        ?60                  ?27                 	;0
		56  256  ASSIGN_DIM/147            ?21       16?4                 ?4397406            	;0	<<53
		57  256  OP_DATA/137               ?0        16?5                 ?0                  	;0
		58  257  NOP/0                     ?0        ?0                   ?0                  	;1
		59  257  GOTO/253                  ?0        ?72                  ?28                 	;0
		60  259  FETCH_DIM_R/81            $28=      16?5                 16?1                	;0
		61  259  ISSET_ISEMPTY_DIM_OBJ/115 #29=      16?4                 $28                 	;33554432
		62  259  JMPZ/43                   ?0        #29                  ?65                 	;0	>>65
		63  260  NOP/0                     ?0        ?0                   ?0                  	;1
		64  260  GOTO/253                  ?0        ?77                  ?29                 	;0
		65  262  NOP/0                     ?0        ?0                   ?0                  	;1	<<62
		66  262  GOTO/253                  ?0        ?74                  ?30                 	;0
		67  264  FETCH_DIM_R/81            $30=      16?5                 16?1                	;0
		68  264  FETCH_DIM_R/81            $32=      16?5                 16?3                	;0
		69  264  FETCH_DIM_W/84            $31=      16?4                 $30                 	;0
		70  264  ASSIGN_DIM/147            ?27       $31                  $32                 	;0
		71  264  OP_DATA/137               ?0        16?5                 ?0                  	;0
		72  269  NOP/0                     ?0        ?0                   ?0                  	;1
		73  269  GOTO/253                  ?0        ?88                  ?31                 	;0
		74  271  FETCH_DIM_R/81            $34=      16?5                 16?1                	;0
		75  271  ASSIGN_DIM/147            ?29       16?4                 $34                 	;0
		76  271  OP_DATA/137               ?0        32:array (
)         ?0                  	;0
		77  273  BOOL_NOT/13               #36=      16?2                 ?0                  	;0
		78  273  JMPZ/43                   ?0        #36                  ?81                 	;0	>>81
		79  274  NOP/0                     ?0        ?0                   ?0                  	;1
		80  274  GOTO/253                  ?0        ?28                  ?33                 	;0
		81  276  FETCH_DIM_R/81            $37=      16?5                 16?1                	;0	<<78
		82  276  ASSIGN_DIM/147            ?32       16?4                 $37                 	;0
		83  276  OP_DATA/137               ?0        16?5                 ?0                  	;0
		84  277  NOP/0                     ?0        ?0                   ?0                  	;1
		85  277  GOTO/253                  ?0        ?72                  ?34                 	;0
		86  278  NOP/0                     ?0        ?0                   ?0                  	;1
		87  278  GOTO/253                  ?0        ?28                  ?35                 	;0
		88  279  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
		89  279  FE_FREE/127               ?0        $18                  ?0                  	;0	<<24
		90  283  ASSIGN_OBJ/136            ?33       ?4397406             36:'result'         	;0
		91  283  OP_DATA/137               ?0        37:NULL              ?0                  	;0
		92  284  RETURN/62                 ?0        16?4                 ?0                  	;0
		93  286  RETURN/62                 ?0        38:false             ?0                  	;0
		94  287  NOP/0                     ?0        39:NULL              ?0                  	;4294967295
		*/
	}

	public function get_row()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   290  FETCH_OBJ_R/82            $1=       ?1661337056          0:'dbh'             	;0
		1   290  JMPZ_EX/46                #2=       $1                   ?4                  	;0	>>4
		2   290  FETCH_OBJ_R/82            $3=       ?1661337056          1:'result'          	;0
		3   290  BOOL/52                   #2=       $3                   ?0                  	;0
		4   290  BOOL_NOT/13               #4=       #2                   ?0                  	;0	<<1
		5   290  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		6   291  GOTO/253                  ?0        ?24                  ?2                  	;0
		7   293  ASSIGN/38                 ?4        16?0                 3:array (
)         	;0	<<5
		8   294  FETCH_OBJ_R/82            $6=       ?4430313             4:'result'          	;0
		9   294  INIT_METHOD_CALL/112      ?0        $6                   5:'rowCount'        	;0
		10  294  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		11  294  IS_SMALLER/19             #8=       7:0                  $7                  	;0
		12  294  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		13  294  JMPZ/43                   ?0        #9                   ?15                 	;0	>>15
		14  295  GOTO/253                  ?0        ?21                  ?8                  	;0
		15  297  FETCH_OBJ_R/82            $10=      ?1661337056          9:'result'          	;0	<<13
		16  297  INIT_METHOD_CALL/112      ?0        $10                  10:'fetch'          	;1
		17  297  FETCH_CLASS_CONSTANT/181  #11=      13:'PDO'             12:'FETCH_ASSOC'    	;0
		18  297  SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
		19  297  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		20  297  ASSIGN/38                 ?12       16?0                 $12                 	;0
		21  299  ASSIGN_OBJ/136            ?13       ?2670194144          15:'result'         	;0
		22  299  OP_DATA/137               ?0        16:NULL              ?0                  	;0
		23  300  RETURN/62                 ?0        16?0                 ?0                  	;0
		24  302  RETURN/62                 ?0        17:false             ?0                  	;0
		25  303  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
		*/
	}

	public function get_col()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   306  FETCH_OBJ_R/82            $1=       ?1660904664          0:'dbh'             	;0
		1   306  JMPZ_EX/46                #2=       $1                   ?4                  	;0	>>4
		2   306  FETCH_OBJ_R/82            $3=       ?1660904664          1:'result'          	;0
		3   306  BOOL/52                   #2=       $3                   ?0                  	;0
		4   306  BOOL_NOT/13               #4=       #2                   ?0                  	;0	<<1
		5   306  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		6   307  GOTO/253                  ?0        ?24                  ?2                  	;0
		7   309  ASSIGN/38                 ?4        16?0                 3:false             	;0	<<5
		8   310  FETCH_OBJ_R/82            $6=       ?7300208             4:'result'          	;0
		9   310  INIT_METHOD_CALL/112      ?0        $6                   5:'rowCount'        	;0
		10  310  DO_FCALL/60               $7=       ?0                   ?0                  	;0
		11  310  IS_SMALLER/19             #8=       7:0                  $7                  	;0
		12  310  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		13  310  JMPZ/43                   ?0        #9                   ?15                 	;0	>>15
		14  311  GOTO/253                  ?0        ?21                  ?8                  	;0
		15  313  FETCH_OBJ_R/82            $10=      ?1661337056          9:'result'          	;0	<<13
		16  313  INIT_METHOD_CALL/112      ?0        $10                  10:'fetch'          	;0
		17  313  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		18  313  ASSIGN/38                 ?11       16?0                 $11                 	;0
		19  314  FETCH_DIM_R/81            $13=      16?0                 12:0                	;0
		20  314  ASSIGN/38                 ?13       16?0                 $13                 	;0
		21  316  ASSIGN_OBJ/136            ?14       ?2670194144          13:'result'         	;0
		22  316  OP_DATA/137               ?0        14:NULL              ?0                  	;0
		23  317  RETURN/62                 ?0        16?0                 ?0                  	;0
		24  319  RETURN/62                 ?0        15:false             ?0                  	;0
		25  320  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	public function escape($fcebf3d4e9466db0)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   321  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   323  FETCH_OBJ_R/82            $1=       ?2670193728          0:'dbh'             	;0
		2   323  INIT_METHOD_CALL/112      ?0        $1                   1:'quote'           	;1
		3   323  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4   323  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5   323  RETURN/62                 ?0        $2                   ?0                  	;0
		6   324  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function num_fields()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   327  FETCH_OBJ_R/82            $1=       ?1661337056          0:'result'          	;0
		1   327  INIT_METHOD_CALL/112      ?0        $1                   1:'columnCount'     	;0
		2   327  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   327  ASSIGN/38                 ?2        16?0                 $2                  	;0
		4   328  ISSET_ISEMPTY_CV/197      #4=       16?0                 ?0                  	;16777216
		5   328  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		6   328  QM_ASSIGN/22              #5=       3:0                  ?0                  	;0
		7   328  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		8   328  QM_ASSIGN/22              #5=       16?0                 ?0                  	;0	<<5
		9   328  RETURN/62                 ?0        #5                   ?0                  	;0	<<7
		10  329  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function last_insert_id()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   332  FETCH_OBJ_R/82            $1=       ?1661337056          0:'dbh'             	;0
		1   332  INIT_METHOD_CALL/112      ?0        $1                   1:'lastInsertId'    	;0
		2   332  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   332  ASSIGN/38                 ?2        16?0                 $2                  	;0
		4   333  ISSET_ISEMPTY_CV/197      #4=       16?0                 ?0                  	;16777216
		5   333  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		6   333  QM_ASSIGN/22              #5=       3:0                  ?0                  	;0
		7   333  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		8   333  QM_ASSIGN/22              #5=       16?0                 ?0                  	;0	<<5
		9   333  RETURN/62                 ?0        #5                   ?0                  	;0	<<7
		10  334  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function num_rows()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   337  FETCH_OBJ_R/82            $1=       ?1661337056          0:'result'          	;0
		1   337  INIT_METHOD_CALL/112      ?0        $1                   1:'rowCount'        	;0
		2   337  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		3   337  ASSIGN/38                 ?2        16?0                 $2                  	;0
		4   338  ISSET_ISEMPTY_CV/197      #4=       16?0                 ?0                  	;16777216
		5   338  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		6   338  QM_ASSIGN/22              #5=       3:0                  ?0                  	;0
		7   338  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		8   338  QM_ASSIGN/22              #5=       16?0                 ?0                  	;0	<<5
		9   338  RETURN/62                 ?0        #5                   ?0                  	;0	<<7
		10  339  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}
}

class XUI
{
	static public $db;
	static public $rRequest = [];
	static public $rSettings = [];
	static public $rServers = [];
	static public $rBlockedISP = [];
	static public $rBouquets = [];
	static public $rCategories = [];
	static public $rAllowedIPs = [];
	static public $rCached;

	static public function init()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   354  JMP/42                    ?0        ?1                   ?0                  	;0	>>1
		1   356  ISSET_ISEMPTY_VAR/114     #1=       1:'_GET'             ?0                  	;16777216	<<0
		2   356  JMPZ/43                   ?0        #1                   ?4                  	;0	>>4
		3   357  GOTO/253                  ?0        ?8                   ?2                  	;0
		4   359  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 3:'bEe6dCc538970DD6'	;1	<<2
		5   359  FETCH_FUNC_ARG/92         $2=       5:'_GET'             ?0                  	;1
		6   359  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		7   359  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		8   361  ISSET_ISEMPTY_VAR/114     #4=       6:'_POST'            ?0                  	;16777216
		9   361  JMPZ/43                   ?0        #4                   ?11                 	;0	>>11
		10  362  GOTO/253                  ?0        ?16                  ?7                  	;0
		11  364  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 8:'BEe6Dcc538970dD6'	;1	<<9
		12  364  FETCH_FUNC_ARG/92         $5=       10:'_POST'           ?0                  	;1
		13  364  SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
		14  364  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		15  365  GOTO/253                  ?0        ?16                  ?11                 	;0
		16  368  ISSET_ISEMPTY_VAR/114     #7=       12:'_SESSION'        ?0                  	;16777216
		17  368  JMPZ/43                   ?0        #7                   ?19                 	;0	>>19
		18  369  GOTO/253                  ?0        ?23                  ?13                 	;0
		19  371  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'bee6DCc538970Dd6'	;1	<<17
		20  371  FETCH_FUNC_ARG/92         $8=       16:'_SESSION'        ?0                  	;1
		21  371  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
		22  371  DO_FCALL/60               ?8        ?0                   ?0                  	;0
		23  373  ISSET_ISEMPTY_VAR/114     #10=      17:'_COOKIE'         ?0                  	;16777216
		24  373  JMPZ/43                   ?0        #10                  ?26                 	;0	>>26
		25  374  GOTO/253                  ?0        ?81                  ?18                 	;0
		26  376  GOTO/253                  ?0        ?77                  ?19                 	;0	<<24
		27  379  GOTO/253                  ?0        ?104                 ?20                 	;0
		28  381  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 22:'ac49B56DBe10e52C'	;0
		29  381  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		30  381  FETCH_STATIC_PROP_W/174   $11=      21:'rSettings'       ?513                	;0
		31  381  ASSIGN/38                 ?12       $11                  $12                 	;0
		32  382  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 25:'D0826dAD642A6222'	;0
		33  382  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		34  382  FETCH_STATIC_PROP_W/174   $14=      24:'rBlockedISP'     ?513                	;0
		35  382  ASSIGN/38                 ?15       $14                  $15                 	;0
		36  383  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 28:'de27BB48f7bff12d'	;0
		37  383  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		38  383  FETCH_STATIC_PROP_W/174   $17=      27:'rBouquets'       ?513                	;0
		39  383  ASSIGN/38                 ?18       $17                  $18                 	;0
		40  384  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 31:'c721Bd954a5f072f'	;0
		41  384  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		42  384  FETCH_STATIC_PROP_W/174   $20=      30:'rCategories'     ?513                	;0
		43  384  ASSIGN/38                 ?21       $20                  $21                 	;0
		44  385  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 34:'de052f142a92e9bF'	;0
		45  385  DO_FCALL/60               $24=      ?0                   ?0                  	;0
		46  385  FETCH_STATIC_PROP_W/174   $23=      33:'rAllowedIPs'     ?513                	;0
		47  385  ASSIGN/38                 ?24       $23                  $24                 	;0
		48  386  GOTO/253                  ?0        ?63                  ?36                 	;0
		49  389  FETCH_STATIC_PROP_IS/176  $26=      37:'rSettings'       ?513                	;0
		50  389  ISSET_ISEMPTY_DIM_OBJ/115 #27=      $26                  38:'default_timezone'	;16777216
		51  389  JMPZ/43                   ?0        #27                  ?53                 	;0	>>53
		52  390  GOTO/253                  ?0        ?58                  ?39                 	;0
		53  392  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'date_default_timezone_set'	;1	<<51
		54  392  FETCH_STATIC_PROP_FUNC_ARG/177 $28=      42:'rSettings'       ?513                	;1
		55  392  FETCH_DIM_FUNC_ARG/93     $29=      $28                  43:'default_timezone'	;1
		56  392  SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
		57  392  DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
		58  394  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 45:'f76008f8dFE1898c'	;0
		59  394  DO_FCALL/60               $32=      ?0                   ?0                  	;0
		60  394  FETCH_STATIC_PROP_W/174   $31=      44:'rServers'        ?513                	;0
		61  394  ASSIGN/38                 ?32       $31                  $32                 	;0
		62  395  GOTO/253                  ?0        ?27                  ?47                 	;0
		63  397  FETCH_CONSTANT/99         #34=      ?0                   48:'PLATFORM'       	;16
		64  397  IS_EQUAL/17               #35=      #34                  51:'xui'            	;0
		65  397  JMPZ/43                   ?0        #35                  ?67                 	;0	>>67
		66  398  GOTO/253                  ?0        ?70                  ?52                 	;0
		67  400  FETCH_STATIC_PROP_W/174   $36=      53:'rCached'         ?513                	;0	<<65
		68  400  ASSIGN/38                 ?36       $36                  54:false            	;0
		69  401  GOTO/253                  ?0        ?49                  ?55                 	;0
		70  403  FETCH_STATIC_PROP_R/173   $39=      57:'rSettings'       ?513                	;0
		71  403  FETCH_DIM_R/81            $40=      $39                  58:'enable_cache'   	;0
		72  403  JMP_SET/152               #41=      $40                  ?74                 	;0
		73  403  QM_ASSIGN/22              #41=      59:false             ?0                  	;0
		74  403  FETCH_STATIC_PROP_W/174   $38=      56:'rCached'         ?513                	;0
		75  403  ASSIGN/38                 ?41       $38                  #41                 	;0
		76  404  GOTO/253                  ?0        ?49                  ?60                 	;0
		77  406  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 61:'BEE6dCC538970dD6'	;1
		78  406  FETCH_FUNC_ARG/92         $43=      63:'_COOKIE'         ?0                  	;1
		79  406  SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
		80  406  DO_FCALL/60               ?43       ?0                   ?0                  	;0
		81  408  BEGIN_SILENCE/57          #45=      ?0                   ?0                  	;0
		82  408  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 64:'E24B3d34d46068EB'	;2
		83  408  FETCH_FUNC_ARG/92         $46=      66:'_GET'            ?0                  	;1
		84  408  SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
		85  408  SEND_VAL_EX/116           ?96       67:array (
)         ?2                  	;0
		86  408  DO_FCALL/60               $47=      ?0                   ?0                  	;0
		87  408  END_SILENCE/58            ?0        #45                  ?0                  	;0
		88  408  ASSIGN/38                 ?47       16?0                 $47                 	;0
		89  409  BEGIN_SILENCE/57          #50=      ?0                   ?0                  	;0
		90  409  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 69:'E24b3d34D46068EB'	;2
		91  409  FETCH_FUNC_ARG/92         $51=      71:'_POST'           ?0                  	;1
		92  409  SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
		93  409  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		94  409  DO_FCALL/60               $52=      ?0                   ?0                  	;0
		95  409  END_SILENCE/58            ?0        #50                  ?0                  	;0
		96  409  FETCH_STATIC_PROP_W/174   $49=      68:'rRequest'        ?513                	;0
		97  409  ASSIGN/38                 ?52       $49                  $52                 	;0
		98  410  FETCH_STATIC_PROP_R/173   $54=      72:'db'              ?513                	;0
		99  410  FETCH_OBJ_R/82            $55=      $54                  73:'connected'      	;0
		100 410  BOOL_NOT/13               #56=      $55                  ?0                  	;0
		101 410  JMPZ/43                   ?0        #56                  ?103                	;0	>>103
		102 411  GOTO/253                  ?0        ?27                  ?74                 	;0
		103 413  GOTO/253                  ?0        ?28                  ?75                 	;0	<<101
		104 415  NOP/0                     ?0        76:NULL              ?0                  	;4294967295
		*/
	}

	static public function serialize($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   416  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   418  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'function_exists' 	;1
		2   418  SEND_VAL_EX/116           ?80       2:'igbinary_serialize' ?1                  	;0
		3   418  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   418  JMPNZ_EX/47               #2=       $1                   ?8                  	;0	>>8
		5   418  FETCH_CONSTANT/99         #3=       ?0                   3:'PLATFORM'        	;16
		6   418  IS_EQUAL/17               #4=       #3                   6:'xui'             	;0
		7   418  BOOL/52                   #2=       #4                   ?0                  	;0
		8   418  JMPZ/43                   ?0        #2                   ?10                 	;0	>>10	<<4
		9   419  GOTO/253                  ?0        ?15                  ?7                  	;0
		10  421  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'serialize'       	;1	<<8
		11  421  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		12  421  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		13  421  RETURN/62                 ?0        $5                   ?0                  	;0
		14  422  GOTO/253                  ?0        ?19                  ?10                 	;0
		15  424  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'igbinary_serialize'	;1
		16  424  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		17  424  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		18  424  RETURN/62                 ?0        $6                   ?0                  	;0
		19  426  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}

	static public function unserialize($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   427  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   429  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'function_exists' 	;1
		2   429  SEND_VAL_EX/116           ?80       2:'igbinary_unserialize' ?1                  	;0
		3   429  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   429  JMPNZ_EX/47               #2=       $1                   ?8                  	;0	>>8
		5   429  FETCH_CONSTANT/99         #3=       ?0                   3:'PLATFORM'        	;16
		6   429  IS_EQUAL/17               #4=       #3                   6:'xui'             	;0
		7   429  BOOL/52                   #2=       #4                   ?0                  	;0
		8   429  JMPZ/43                   ?0        #2                   ?10                 	;0	>>10	<<4
		9   430  GOTO/253                  ?0        ?15                  ?7                  	;0
		10  432  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'unserialize'     	;1	<<8
		11  432  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		12  432  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		13  432  RETURN/62                 ?0        $5                   ?0                  	;0
		14  433  GOTO/253                  ?0        ?19                  ?10                 	;0
		15  435  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'igbinary_unserialize'	;1
		16  435  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		17  435  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		18  435  RETURN/62                 ?0        $6                   ?0                  	;0
		19  437  NOP/0                     ?0        13:NULL              ?0                  	;4294967295
		*/
	}

	static public function f7A8933150230EaB($A66eee85d9566710, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   438  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   438  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   440  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'serialize'       	;1
		3   440  SEND_VAR/117              ?80       16?1                 ?1                  	;0
		4   440  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5   440  ASSIGN/38                 ?1        16?1                 $2                  	;0
		6   441  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'file_put_contents'	;3
		7   441  FETCH_CONSTANT/99         #4=       ?0                   4:'TMP_PATH'        	;16
		8   441  CONCAT/8                  #5=       #4                   16?0                	;0
		9   441  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
		10  441  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		11  441  FETCH_CONSTANT/99         #6=       ?0                   7:'LOCK_EX'         	;16
		12  441  SEND_VAL_EX/116           ?112      #6                   ?3                  	;0
		13  441  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		14  442  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function E74a9A4510C4FFE4($A66eee85d9566710, $d03052828cab569a)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   443  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   443  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   445  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'file_exists'     	;1
		3   445  FETCH_CONSTANT/99         #3=       ?0                   2:'TMP_PATH'        	;16
		4   445  CONCAT/8                  #4=       #3                   16?0                	;0
		5   445  SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
		6   445  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   445  BOOL_NOT/13               #6=       $5                   ?0                  	;0
		8   445  JMPZ/43                   ?0        #6                   ?10                 	;0	>>10
		9   446  GOTO/253                  ?0        ?32                  ?5                  	;0
		10  448  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'time'            	;0	<<8
		11  448  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		12  448  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'filemtime'       	;1
		13  448  FETCH_CONSTANT/99         #8=       ?0                   10:'TMP_PATH'       	;16
		14  448  CONCAT/8                  #9=       #8                   16?0                	;0
		15  448  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		16  448  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		17  448  SUB/2                     #11=      $7                   $10                 	;0
		18  448  IS_SMALLER/19             #12=      #11                  16?1                	;0
		19  448  BOOL_NOT/13               #13=      #12                  ?0                  	;0
		20  448  JMPZ/43                   ?0        #13                  ?22                 	;0	>>22
		21  449  GOTO/253                  ?0        ?32                  ?13                 	;0
		22  451  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'file_get_contents'	;1	<<20
		23  451  FETCH_CONSTANT/99         #14=      ?0                   16:'TMP_PATH'       	;16
		24  451  CONCAT/8                  #15=      #14                  16?0                	;0
		25  451  SEND_VAL_EX/116           ?80       #15                  ?1                  	;0
		26  451  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		27  451  ASSIGN/38                 ?14       16?2                 $16                 	;0
		28  452  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 19:'unserialize'    	;1
		29  452  SEND_VAR/117              ?80       16?2                 ?1                  	;0
		30  452  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		31  452  RETURN/62                 ?0        $18                  ?0                  	;0
		32  455  RETURN/62                 ?0        21:false             ?0                  	;0
		33  456  NOP/0                     ?0        22:NULL              ?0                  	;4294967295
		*/
	}

	static public function DE27bb48f7bff12D()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   459  JMP/42                    ?0        ?206                 ?0                  	;0	>>206
		1   462  FETCH_STATIC_PROP_R/173   $8=       1:'db'               ?513                	;0
		2   462  INIT_METHOD_CALL/112      ?0        $8                   2:'query'           	;1
		3   462  SEND_VAL_EX/116           ?80       4:'SELECT *, IF(`bouquet_order` > 0, `bouquet_order`, 999) AS `order` FROM `bouquets` ORDER BY `order` ASC;' ?1                  	;0
		4   462  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		5   463  FETCH_STATIC_PROP_R/173   $10=      5:'db'               ?513                	;0
		6   463  INIT_METHOD_CALL/112      ?0        $10                  6:'get_rows'        	;2
		7   463  SEND_VAL_EX/116           ?80       8:true               ?1                  	;0
		8   463  SEND_VAL_EX/116           ?96       9:'id'               ?2                  	;0
		9   463  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		10  463  FE_RESET_R/77             $12=      $11                  ?142                	;0
		11  463  FE_FETCH_R/78             #13=      $12                  16?0                	;142	>>142	<<141
		12  463  ASSIGN/38                 ?6        16?1                 #13                 	;0
		13  464  NOP/0                     ?0        ?0                   ?0                  	;1
		14  464  GOTO/253                  ?0        ?76                  ?10                 	;0
		15  466  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'json_decode'    	;2
		16  466  FETCH_DIM_FUNC_ARG/93     $17=      16?0                 14:'bouquet_channels'	;1
		17  466  SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
		18  466  SEND_VAL_EX/116           ?96       15:true              ?2                  	;0
		19  466  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
		20  466  FETCH_DIM_W/84            $15=      16?2                 16?1                	;0
		21  466  ASSIGN_DIM/147            ?8        $15                  11:'channels'       	;0
		22  466  OP_DATA/137               ?0        $18                  ?0                  	;0
		23  467  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'json_decode'    	;2
		24  467  FETCH_DIM_FUNC_ARG/93     $21=      16?0                 19:'bouquet_movies' 	;1
		25  467  SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
		26  467  SEND_VAL_EX/116           ?96       20:true              ?2                  	;0
		27  467  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		28  467  FETCH_DIM_W/84            $19=      16?2                 16?1                	;0
		29  467  ASSIGN_DIM/147            ?12       $19                  16:'movies'         	;0
		30  467  OP_DATA/137               ?0        $22                  ?0                  	;0
		31  468  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'json_decode'    	;2
		32  468  FETCH_DIM_FUNC_ARG/93     $25=      16?0                 24:'bouquet_radios' 	;1
		33  468  SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
		34  468  SEND_VAL_EX/116           ?96       25:true              ?2                  	;0
		35  468  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		36  468  FETCH_DIM_W/84            $23=      16?2                 16?1                	;0
		37  468  ASSIGN_DIM/147            ?16       $23                  21:'radios'         	;0
		38  468  OP_DATA/137               ?0        $26                  ?0                  	;0
		39  471  NOP/0                     ?0        ?0                   ?0                  	;1
		40  471  GOTO/253                  ?0        ?141                 ?26                 	;0
		41  474  NOP/0                     ?0        ?0                   ?0                  	;1
		42  474  GOTO/253                  ?0        ?39                  ?27                 	;0
		43  476  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'array_merge'    	;3
		44  476  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'json_decode'    	;2
		45  476  FETCH_DIM_FUNC_ARG/93     $29=      16?0                 33:'bouquet_channels'	;1
		46  476  SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
		47  476  SEND_VAL_EX/116           ?96       34:true              ?2                  	;0
		48  476  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
		49  476  SEND_VAR_NO_REF_EX/50     ?80       $30                  ?1                  	;0
		50  476  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'json_decode'    	;2
		51  476  FETCH_DIM_FUNC_ARG/93     $31=      16?0                 37:'bouquet_movies' 	;1
		52  476  SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
		53  476  SEND_VAL_EX/116           ?96       38:true              ?2                  	;0
		54  476  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
		55  476  SEND_VAR_NO_REF_EX/50     ?96       $32                  ?2                  	;0
		56  476  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'json_decode'    	;2
		57  476  FETCH_DIM_FUNC_ARG/93     $33=      16?0                 41:'bouquet_radios' 	;1
		58  476  SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
		59  476  SEND_VAL_EX/116           ?96       42:true              ?2                  	;0
		60  476  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
		61  476  SEND_VAR_NO_REF_EX/50     ?112      $34                  ?3                  	;0
		62  476  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
		63  476  FETCH_DIM_W/84            $27=      16?2                 16?1                	;0
		64  476  ASSIGN_DIM/147            ?20       $27                  28:'streams'        	;0
		65  476  OP_DATA/137               ?0        $35                  ?0                  	;0
		66  477  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'json_decode'    	;2
		67  477  FETCH_DIM_FUNC_ARG/93     $38=      16?0                 46:'bouquet_series' 	;1
		68  477  SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
		69  477  SEND_VAL_EX/116           ?96       47:true              ?2                  	;0
		70  477  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
		71  477  FETCH_DIM_W/84            $36=      16?2                 16?1                	;0
		72  477  ASSIGN_DIM/147            ?29       $36                  43:'series'         	;0
		73  477  OP_DATA/137               ?0        $39                  ?0                  	;0
		74  478  NOP/0                     ?0        ?0                   ?0                  	;1
		75  478  GOTO/253                  ?0        ?15                  ?48                 	;0
		76  480  FETCH_DIM_W/84            $40=      16?2                 16?1                	;0
		77  480  ASSIGN_DIM/147            ?33       $40                  49:'id'             	;0
		78  480  OP_DATA/137               ?0        16?1                 ?0                  	;0
		79  481  FETCH_DIM_R/81            $44=      16?0                 51:'bouquet_name'   	;0
		80  481  FETCH_DIM_W/84            $42=      16?2                 16?1                	;0
		81  481  ASSIGN_DIM/147            ?35       $42                  50:'bouquet_name'   	;0
		82  481  OP_DATA/137               ?0        $44                  ?0                  	;0
		83  482  FETCH_DIM_R/81            $47=      16?0                 53:'order'          	;0
		84  482  FETCH_DIM_W/84            $45=      16?2                 16?1                	;0
		85  482  ASSIGN_DIM/147            ?38       $45                  52:'order'          	;0
		86  482  OP_DATA/137               ?0        $47                  ?0                  	;0
		87  483  FETCH_CONSTANT/99         #48=      ?0                   54:'PLATFORM'       	;16
		88  483  IS_EQUAL/17               #49=      #48                  57:'xui'            	;0
		89  483  JMPZ/43                   ?0        #49                  ?92                 	;0	>>92
		90  484  NOP/0                     ?0        ?0                   ?0                  	;1
		91  484  GOTO/253                  ?0        ?43                  ?58                 	;0
		92  486  INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'json_decode'    	;2	<<89
		93  486  FETCH_DIM_FUNC_ARG/93     $52=      16?0                 62:'bouquet_channels'	;1
		94  486  SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
		95  486  SEND_VAL_EX/116           ?96       63:true              ?2                  	;0
		96  486  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
		97  486  FETCH_DIM_W/84            $50=      16?2                 16?1                	;0
		98  486  ASSIGN_DIM/147            ?43       $50                  59:'streams'        	;0
		99  486  OP_DATA/137               ?0        $53                  ?0                  	;0
		100 487  NOP/0                     ?0        ?0                   ?0                  	;1
		101 487  GOTO/253                  ?0        ?102                 ?64                 	;0
		102 489  INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'json_decode'    	;2
		103 489  FETCH_DIM_FUNC_ARG/93     $56=      16?0                 68:'bouquet_series' 	;1
		104 489  SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
		105 489  SEND_VAL_EX/116           ?96       69:true              ?2                  	;0
		106 489  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
		107 489  FETCH_DIM_W/84            $54=      16?2                 16?1                	;0
		108 489  ASSIGN_DIM/147            ?47       $54                  65:'series'         	;0
		109 489  OP_DATA/137               ?0        $57                  ?0                  	;0
		110 490  FETCH_DIM_W/84            $58=      16?2                 16?1                	;0
		111 490  ASSIGN_DIM/147            ?51       $58                  70:'channels'       	;0
		112 490  OP_DATA/137               ?0        71:array (
)         ?0                  	;0
		113 491  FETCH_DIM_W/84            $60=      16?2                 16?1                	;0
		114 491  ASSIGN_DIM/147            ?53       $60                  72:'movies'         	;0
		115 491  OP_DATA/137               ?0        73:array (
)         ?0                  	;0
		116 492  FETCH_DIM_W/84            $62=      16?2                 16?1                	;0
		117 492  ASSIGN_DIM/147            ?55       $62                  74:'radios'         	;0
		118 492  OP_DATA/137               ?0        75:array (
)         ?0                  	;0
		119 493  FETCH_DIM_R/81            $64=      16?2                 16?1                	;0
		120 493  FETCH_DIM_R/81            $65=      $64                  76:'streams'        	;0
		121 493  FE_RESET_R/77             $66=      $65                  ?138                	;0
		122 493  FE_FETCH_R/78             ?0        $66                  16?3                	;138	>>138	<<137
		123 494  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'intval'         	;1
		124 494  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		125 494  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
		126 494  FETCH_DIM_R/81            $68=      16?5                 $67                 	;0
		127 494  JMP_SET/152               #69=      $68                  ?129                	;0
		128 494  QM_ASSIGN/22              #69=      79:'channels'        ?0                  	;0
		129 494  ASSIGN/38                 ?62       16?4                 #69                 	;0
		130 495  INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'intval'         	;1
		131 495  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		132 495  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
		133 495  FETCH_DIM_W/84            $71=      16?2                 16?1                	;0
		134 495  FETCH_DIM_W/84            $72=      $71                  16?4                	;0
		135 495  ASSIGN_DIM/147            ?65       $72                  ?2670193488         	;0
		136 495  OP_DATA/137               ?0        $74                  ?0                  	;0
		137 496  JMP/42                    ?0        ?122                 ?0                  	;0	>>122
		138 496  FE_FREE/127               ?0        $66                  ?0                  	;0	<<121
		139 498  NOP/0                     ?0        ?0                   ?0                  	;1
		140 498  GOTO/253                  ?0        ?41                  ?82                 	;0
		141 499  JMP/42                    ?0        ?11                  ?0                  	;0	>>11
		142 499  FE_FREE/127               ?0        $12                  ?0                  	;0	<<10
		143 502  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 83:'f7a8933150230Eab'	;2
		144 502  SEND_VAL/65               ?80       85:'bouquets'        ?1                  	;0
		145 502  SEND_VAR/117              ?96       16?2                 ?2                  	;0
		146 502  DO_FCALL/60               ?67       ?0                   ?0                  	;0
		147 503  GOTO/253                  ?0        ?148                 ?86                 	;0
		148 505  RETURN/62                 ?0        16?2                 ?0                  	;0
		149 506  GOTO/253                  ?0        ?217                 ?87                 	;0
		150 508  FETCH_CONSTANT/99         #76=      ?0                   88:'PLATFORM'       	;16
		151 508  IS_NOT_EQUAL/18           #77=      #76                  91:'xui'            	;0
		152 508  BOOL_NOT/13               #78=      #77                  ?0                  	;0
		153 508  JMPZ/43                   ?0        #78                  ?155                	;0	>>155
		154 509  GOTO/253                  ?0        ?1                   ?92                 	;0
		155 511  ASSIGN/38                 ?71       16?5                 93:array (
)        	;0	<<153
		156 512  FETCH_STATIC_PROP_R/173   $80=      94:'db'              ?513                	;0
		157 512  INIT_METHOD_CALL/112      ?0        $80                  95:'query'          	;1
		158 512  SEND_VAL_EX/116           ?80       97:'SELECT `id`, `type` FROM streams WHERE `type` IN (1,2,3,4);' ?1                  	;0
		159 512  DO_FCALL/60               ?73       ?0                   ?0                  	;0
		160 513  FETCH_STATIC_PROP_R/173   $82=      98:'db'              ?513                	;0
		161 513  INIT_METHOD_CALL/112      ?0        $82                  99:'get_rows'       	;0
		162 513  DO_FCALL/60               $83=      ?0                   ?0                  	;0
		163 513  FE_RESET_R/77             $84=      $83                  ?204                	;0
		164 513  FE_FETCH_R/78             ?0        $84                  16?6                	;204	>>204	<<203
		165 514  FETCH_DIM_R/81            $85=      16?6                 101:'type'          	;0
		166 515  CASE/48                   #86=      $85                  102:'1'             	;0	>>168
		167 515  JMPNZ/44                  ?0        #86                  ?175                	;0	>>175
		168 516  CASE/48                   #86=      $85                  103:'3'             	;0	>>170	<<166
		169 516  JMPNZ/44                  ?0        #86                  ?175                	;0	>>175
		170 519  CASE/48                   #86=      $85                  104:'2'             	;0	>>172	<<168
		171 519  JMPNZ/44                  ?0        #86                  ?184                	;0	>>184
		172 522  CASE/48                   #86=      $85                  105:'4'             	;0	>>174	<<170
		173 522  JMPNZ/44                  ?0        #86                  ?193                	;0	>>193
		174 522  JMP/42                    ?0        ?202                 ?0                  	;0	>>202	<<172
		175 517  INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'intval'        	;1	<<167,169
		176 517  FETCH_DIM_FUNC_ARG/93     $87=      16?6                 108:'id'            	;1
		177 517  SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
		178 517  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
		179 517  ASSIGN_DIM/147            ?81       16?5                 $88                 	;0
		180 517  OP_DATA/137               ?0        109:'channels'       ?0                  	;0
		181 518  FREE/70                   ?0        $85                  ?13                 	;1
		182 518  NOP/0                     ?0        ?0                   ?0                  	;1
		183 518  GOTO/253                  ?0        ?203                 ?110                	;0
		184 520  INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'intval'        	;1	<<171
		185 520  FETCH_DIM_FUNC_ARG/93     $90=      16?6                 113:'id'            	;1
		186 520  SEND_VAR_EX/66            ?80       $90                  ?1                  	;0
		187 520  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
		188 520  ASSIGN_DIM/147            ?84       16?5                 $91                 	;0
		189 520  OP_DATA/137               ?0        114:'movies'         ?0                  	;0
		190 521  FREE/70                   ?0        $85                  ?13                 	;1
		191 521  NOP/0                     ?0        ?0                   ?0                  	;1
		192 521  GOTO/253                  ?0        ?203                 ?115                	;0
		193 523  INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'intval'        	;1	<<173
		194 523  FETCH_DIM_FUNC_ARG/93     $93=      16?6                 118:'id'            	;1
		195 523  SEND_VAR_EX/66            ?80       $93                  ?1                  	;0
		196 523  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
		197 523  ASSIGN_DIM/147            ?87       16?5                 $94                 	;0
		198 523  OP_DATA/137               ?0        119:'radios'         ?0                  	;0
		199 524  FREE/70                   ?0        $85                  ?13                 	;1
		200 524  NOP/0                     ?0        ?0                   ?0                  	;1
		201 524  GOTO/253                  ?0        ?203                 ?120                	;0
		202 524  FREE/70                   ?0        $85                  ?0                  	;0	<<174
		203 528  JMP/42                    ?0        ?164                 ?0                  	;0	>>164
		204 528  FE_FREE/127               ?0        $84                  ?0                  	;0	<<163
		205 531  GOTO/253                  ?0        ?1                   ?121                	;0
		206 533  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 122:'E74a9a4510C4fFE4'	;2	<<0
		207 533  SEND_VAL/65               ?80       124:'bouquets'       ?1                  	;0
		208 533  SEND_VAL/65               ?96       125:60               ?2                  	;0
		209 533  DO_FCALL/60               $96=      ?0                   ?0                  	;0
		210 533  ASSIGN/38                 ?89       16?7                 $96                 	;0
		211 534  ISSET_ISEMPTY_CV/197      #98=      16?7                 ?0                  	;16777216
		212 534  JMPZ/43                   ?0        #98                  ?214                	;0	>>214
		213 535  GOTO/253                  ?0        ?215                 ?126                	;0
		214 537  RETURN/62                 ?0        16?7                 ?0                  	;0	<<212
		215 539  ASSIGN/38                 ?91       16?2                 127:array (
)       	;0
		216 540  GOTO/253                  ?0        ?150                 ?128                	;0
		217 542  NOP/0                     ?0        129:NULL             ?0                  	;4294967295
		*/
	}

	static public function cb6eE16e86f09e61($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   543  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   545  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
		2   547  FETCH_CONSTANT/99         #2=       ?0                   1:'PLATFORM'        	;16	<<1
		3   547  IS_EQUAL/17               #3=       #2                   4:'xui'             	;0
		4   547  JMPZ/43                   ?0        #3                   ?6                  	;0	>>6
		5   548  GOTO/253                  ?0        ?12                  ?5                  	;0
		6   550  FETCH_STATIC_PROP_R/173   $4=       6:'db'               ?513                	;0	<<4
		7   550  INIT_METHOD_CALL/112      ?0        $4                   7:'query'           	;2
		8   550  SEND_VAL_EX/116           ?80       9:'SELECT * FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `streams`.`id` = ?;' ?1                  	;0
		9   550  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		10  550  DO_FCALL/60               ?3        ?0                   ?0                  	;0
		11  551  GOTO/253                  ?0        ?18                  ?10                 	;0
		12  553  FETCH_STATIC_PROP_R/173   $6=       11:'db'              ?513                	;0
		13  553  INIT_METHOD_CALL/112      ?0        $6                   12:'query'          	;2
		14  553  SEND_VAL_EX/116           ?80       14:'SELECT * FROM `streams` WHERE `id` = ?;' ?1                  	;0
		15  553  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		16  553  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		17  554  GOTO/253                  ?0        ?18                  ?15                 	;0
		18  557  FETCH_STATIC_PROP_R/173   $8=       16:'db'              ?513                	;0
		19  557  INIT_METHOD_CALL/112      ?0        $8                   17:'num_rows'       	;0
		20  557  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		21  557  IS_EQUAL/17               #10=      $9                   19:1                	;0
		22  557  BOOL_NOT/13               #11=      #10                  ?0                  	;0
		23  557  JMPZ/43                   ?0        #11                  ?25                 	;0	>>25
		24  558  GOTO/253                  ?0        ?42                  ?20                 	;0
		25  560  FETCH_STATIC_PROP_R/173   $12=      21:'db'              ?513                	;0	<<23
		26  560  INIT_METHOD_CALL/112      ?0        $12                  22:'get_row'        	;0
		27  560  DO_FCALL/60               $13=      ?0                   ?0                  	;0
		28  560  ASSIGN/38                 ?12       16?1                 $13                 	;0
		29  561  FETCH_CONSTANT/99         #15=      ?0                   24:'PLATFORM'       	;16
		30  561  IS_NOT_EQUAL/18           #16=      #15                  27:'xui'            	;0
		31  561  JMPZ_EX/46                #16=      #16                  ?34                 	;0	>>34
		32  561  FETCH_DIM_R/81            $17=      16?1                 28:'title'          	;0
		33  561  BOOL/52                   #16=      $17                  ?0                  	;0
		34  561  BOOL_NOT/13               #18=      #16                  ?0                  	;0	<<31
		35  561  JMPZ/43                   ?0        #18                  ?37                 	;0	>>37
		36  562  GOTO/253                  ?0        ?41                  ?29                 	;0
		37  564  FETCH_DIM_R/81            $20=      16?1                 31:'title'          	;0	<<35
		38  564  ASSIGN_DIM/147            ?17       16?1                 30:'stream_display_name'	;0
		39  564  OP_DATA/137               ?0        $20                  ?0                  	;0
		40  565  GOTO/253                  ?0        ?41                  ?32                 	;0
		41  568  RETURN/62                 ?0        16?1                 ?0                  	;0
		42  570  RETURN/62                 ?0        33:NULL              ?0                  	;0
		43  571  GOTO/253                  ?0        ?44                  ?34                 	;0
		44  573  NOP/0                     ?0        35:NULL              ?0                  	;4294967295
		*/
	}

	static public function c721Bd954A5f072f($A7d54b094ae83c95)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   574  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1   576  GOTO/253                  ?0        ?27                  ?1                  	;0
		2   579  FETCH_CONSTANT/99         #3=       ?0                   2:'PLATFORM'        	;16
		3   579  IS_EQUAL/17               #4=       #3                   5:'xui'             	;0
		4   579  JMPZ/43                   ?0        #4                   ?6                  	;0	>>6
		5   580  GOTO/253                  ?0        ?12                  ?6                  	;0
		6   582  FETCH_STATIC_PROP_R/173   $5=       7:'db'               ?513                	;0	<<4
		7   582  INIT_METHOD_CALL/112      ?0        $5                   8:'query'           	;2
		8   582  SEND_VAL_EX/116           ?80       10:'SELECT t1.* FROM `stream_categories` t1 WHERE t1.category_type = ? GROUP BY t1.id ORDER BY t1.cat_order ASC' ?1                  	;0
		9   582  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		10  582  DO_FCALL/60               ?3        ?0                   ?0                  	;0
		11  583  GOTO/253                  ?0        ?68                  ?11                 	;0
		12  585  GOTO/253                  ?0        ?63                  ?12                 	;0
		13  587  FETCH_CONSTANT/99         #7=       ?0                   13:'PLATFORM'       	;16
		14  587  IS_EQUAL/17               #8=       #7                   16:'xui'            	;0
		15  587  JMPZ/43                   ?0        #8                   ?17                 	;0	>>17
		16  588  GOTO/253                  ?0        ?22                  ?17                 	;0
		17  590  FETCH_STATIC_PROP_R/173   $9=       18:'db'              ?513                	;0	<<15
		18  590  INIT_METHOD_CALL/112      ?0        $9                   19:'query'          	;1
		19  590  SEND_VAL_EX/116           ?80       21:'SELECT t1.* FROM `stream_categories` t1 ORDER BY t1.cat_order ASC' ?1                  	;0
		20  590  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		21  591  GOTO/253                  ?0        ?42                  ?22                 	;0
		22  593  FETCH_STATIC_PROP_R/173   $11=      23:'db'              ?513                	;0
		23  593  INIT_METHOD_CALL/112      ?0        $11                  24:'query'          	;1
		24  593  SEND_VAL_EX/116           ?80       26:'SELECT t1.* FROM `streams_categories` t1 ORDER BY t1.cat_order ASC' ?1                  	;0
		25  593  DO_FCALL/60               ?9        ?0                   ?0                  	;0
		26  594  GOTO/253                  ?0        ?42                  ?27                 	;0
		27  596  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'is_string'      	;1
		28  596  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		29  596  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		30  596  JMPZ/43                   ?0        $13                  ?32                 	;0	>>32
		31  597  GOTO/253                  ?0        ?2                   ?30                 	;0
		32  599  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 31:'E74A9A4510c4FfE4'	;2	<<30
		33  599  SEND_VAL/65               ?80       33:'categories'      ?1                  	;0
		34  599  SEND_VAL/65               ?96       34:20                ?2                  	;0
		35  599  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		36  599  ASSIGN/38                 ?12       16?1                 $14                 	;0
		37  600  ISSET_ISEMPTY_CV/197      #16=      16?1                 ?0                  	;16777216
		38  600  JMPZ/43                   ?0        #16                  ?40                 	;0	>>40
		39  601  GOTO/253                  ?0        ?41                  ?35                 	;0
		40  603  RETURN/62                 ?0        16?1                 ?0                  	;0	<<38
		41  605  GOTO/253                  ?0        ?13                  ?36                 	;0
		42  608  FETCH_STATIC_PROP_R/173   $17=      37:'db'              ?513                	;0
		43  608  INIT_METHOD_CALL/112      ?0        $17                  38:'num_rows'       	;0
		44  608  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		45  608  IS_SMALLER/19             #19=      40:0                 $18                 	;0
		46  608  JMPZ/43                   ?0        #19                  ?54                 	;0	>>54
		47  608  FETCH_STATIC_PROP_R/173   $20=      41:'db'              ?513                	;0
		48  608  INIT_METHOD_CALL/112      ?0        $20                  42:'get_rows'       	;2
		49  608  SEND_VAL_EX/116           ?80       44:true              ?1                  	;0
		50  608  SEND_VAL_EX/116           ?96       45:'id'              ?2                  	;0
		51  608  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		52  608  QM_ASSIGN/22              #22=      $21                  ?0                  	;0
		53  608  JMP/42                    ?0        ?55                  ?0                  	;0	>>55
		54  608  QM_ASSIGN/22              #22=      46:array (
)         ?0                  	;0	<<46
		55  608  ASSIGN/38                 ?20       16?2                 #22                 	;0	<<53
		56  609  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 47:'f7A8933150230EAB'	;2
		57  609  SEND_VAL/65               ?80       49:'categories'      ?1                  	;0
		58  609  SEND_VAR/117              ?96       16?2                 ?2                  	;0
		59  609  DO_FCALL/60               ?21       ?0                   ?0                  	;0
		60  610  RETURN/62                 ?0        16?2                 ?0                  	;0
		61  611  GOTO/253                  ?0        ?82                  ?50                 	;0
		62  612  GOTO/253                  ?0        ?2                   ?51                 	;0
		63  614  FETCH_STATIC_PROP_R/173   $25=      52:'db'              ?513                	;0
		64  614  INIT_METHOD_CALL/112      ?0        $25                  53:'query'          	;2
		65  614  SEND_VAL_EX/116           ?80       55:'SELECT t1.* FROM `streams_categories` t1 WHERE t1.category_type = ? GROUP BY t1.id ORDER BY t1.cat_order ASC' ?1                  	;0
		66  614  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		67  614  DO_FCALL/60               ?23       ?0                   ?0                  	;0
		68  616  FETCH_STATIC_PROP_R/173   $27=      56:'db'              ?513                	;0
		69  616  INIT_METHOD_CALL/112      ?0        $27                  57:'num_rows'       	;0
		70  616  DO_FCALL/60               $28=      ?0                   ?0                  	;0
		71  616  IS_SMALLER/19             #29=      59:0                 $28                 	;0
		72  616  JMPZ/43                   ?0        #29                  ?80                 	;0	>>80
		73  616  FETCH_STATIC_PROP_R/173   $30=      60:'db'              ?513                	;0
		74  616  INIT_METHOD_CALL/112      ?0        $30                  61:'get_rows'       	;2
		75  616  SEND_VAL_EX/116           ?80       63:true              ?1                  	;0
		76  616  SEND_VAL_EX/116           ?96       64:'id'              ?2                  	;0
		77  616  DO_FCALL/60               $31=      ?0                   ?0                  	;0
		78  616  QM_ASSIGN/22              #32=      $31                  ?0                  	;0
		79  616  JMP/42                    ?0        ?81                  ?0                  	;0	>>81
		80  616  QM_ASSIGN/22              #32=      65:array (
)         ?0                  	;0	<<72
		81  616  RETURN/62                 ?0        #32                  ?0                  	;0	<<79
		82  618  GOTO/253                  ?0        ?83                  ?66                 	;0
		83  620  NOP/0                     ?0        67:NULL              ?0                  	;4294967295
		*/
	}

	static public function DE052f142a92e9bf()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   623  ISSET_ISEMPTY_STATIC_PROP/180 #3=       0:'rAllowedIPs'      ?513                	;16777216
		1   623  JMPZ/43                   ?0        #3                   ?3                  	;0	>>3
		2   624  GOTO/253                  ?0        ?5                   ?1                  	;0
		3   626  FETCH_STATIC_PROP_R/173   $4=       2:'rAllowedIPs'      ?513                	;0	<<1
		4   626  RETURN/62                 ?0        $4                   ?0                  	;0
		5   628  INIT_ARRAY/71             #5=       3:'127.0.0.1'        ?0                  	;8
		6   628  FETCH_R/80                $6=       4:'_SERVER'          ?0                  	;0
		7   628  FETCH_DIM_R/81            $7=       $6                   5:'SERVER_ADDR'     	;0
		8   628  ADD_ARRAY_ELEMENT/72      #5=       $7                   ?0                  	;0
		9   628  ASSIGN/38                 ?5        16?0                 #5                  	;0
		10  629  FETCH_STATIC_PROP_R/173   $9=       6:'rServers'         ?513                	;0
		11  629  FE_RESET_R/77             $10=      $9                   ?40                 	;0
		12  629  FE_FETCH_R/78             #11=      $10                  16?1                	;40	>>40	<<39
		13  629  ASSIGN/38                 ?9        16?2                 #11                 	;0
		14  630  ISSET_ISEMPTY_DIM_OBJ/115 #13=      16?1                 7:'whitelist_ips'   	;16777216
		15  630  JMPZ/43                   ?0        #13                  ?18                 	;0	>>18
		16  631  NOP/0                     ?0        ?0                   ?0                  	;1
		17  631  GOTO/253                  ?0        ?28                  ?8                  	;0
		18  633  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'array_merge'     	;2	<<15
		19  633  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		20  633  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'json_decode'    	;2
		21  633  FETCH_DIM_FUNC_ARG/93     $14=      16?1                 13:'whitelist_ips'  	;1
		22  633  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		23  633  SEND_VAL_EX/116           ?96       14:true              ?2                  	;0
		24  633  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		25  633  SEND_VAR_NO_REF_EX/50     ?96       $15                  ?2                  	;0
		26  633  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		27  633  ASSIGN/38                 ?14       16?0                 $16                 	;0
		28  635  FETCH_DIM_R/81            $19=      16?1                 15:'server_ip'      	;0
		29  635  ASSIGN_DIM/147            ?15       16?0                 ?2670193952         	;0
		30  635  OP_DATA/137               ?0        $19                  ?0                  	;0
		31  636  FETCH_DIM_R/81            $20=      16?1                 16:'private_ip'     	;0
		32  636  BOOL_NOT/13               #21=      $20                  ?0                  	;0
		33  636  JMPZ/43                   ?0        #21                  ?36                 	;0	>>36
		34  637  NOP/0                     ?0        ?0                   ?0                  	;1
		35  637  GOTO/253                  ?0        ?39                  ?17                 	;0
		36  639  FETCH_DIM_R/81            $23=      16?1                 18:'private_ip'     	;0	<<33
		37  639  ASSIGN_DIM/147            ?19       16?0                 ?4397406            	;0
		38  639  OP_DATA/137               ?0        $23                  ?0                  	;0
		39  641  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
		40  641  FE_FREE/127               ?0        $10                  ?0                  	;0	<<11
		41  644  FETCH_STATIC_PROP_IS/176  $24=      19:'rSettings'       ?513                	;0
		42  644  ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  20:'allowed_ips_admin'	;16777216
		43  644  JMPZ/43                   ?0        #25                  ?45                 	;0	>>45
		44  645  GOTO/253                  ?0        ?56                  ?21                 	;0
		45  647  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'array_merge'    	;2	<<43
		46  647  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		47  647  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'explode'        	;2
		48  647  SEND_VAL_EX/116           ?80       26:','               ?1                  	;0
		49  647  FETCH_STATIC_PROP_FUNC_ARG/177 $26=      27:'rSettings'       ?513                	;2
		50  647  FETCH_DIM_FUNC_ARG/93     $27=      $26                  28:'allowed_ips_admin'	;2
		51  647  SEND_VAR_EX/66            ?96       $27                  ?2                  	;0
		52  647  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		53  647  SEND_VAR_NO_REF_EX/50     ?96       $28                  ?2                  	;0
		54  647  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		55  647  ASSIGN/38                 ?27       16?0                 $29                 	;0
		56  649  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'array_unique'   	;1
		57  649  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		58  649  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		59  649  RETURN/62                 ?0        $31                  ?0                  	;0
		60  650  NOP/0                     ?0        31:NULL              ?0                  	;4294967295
		*/
	}

	static public function c7B767C317f00408($F647a429f8089f01)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   651  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   653  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'is_array'        	;1
		2   653  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		3   653  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		4   653  JMPZ/43                   ?0        $3                   ?6                  	;0	>>6
		5   654  GOTO/253                  ?0        ?7                   ?2                  	;0
		6   656  RETURN/62                 ?0        16?0                 ?0                  	;0	<<4
		7   658  ASSIGN/38                 ?1        16?1                 3:array (
)         	;0
		8   659  FE_RESET_R/77             $5=       16?0                 ?41                 	;0
		9   659  FE_FETCH_R/78             ?0        $5                   16?2                	;41	>>41	<<40
		10  660  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_scalar'       	;1
		11  660  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		12  660  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		13  660  JMPNZ_EX/47               #7=       $6                   ?18                 	;0	>>18
		14  660  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_resource'     	;1
		15  660  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		16  660  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		17  660  BOOL/52                   #7=       $8                   ?0                  	;0
		18  660  JMPZ/43                   ?0        #7                   ?21                 	;0	>>21	<<13
		19  661  NOP/0                     ?0        ?0                   ?0                  	;1
		20  661  GOTO/253                  ?0        ?38                  ?8                  	;0
		21  663  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'is_array'        	;1	<<18
		22  663  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		23  663  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		24  663  BOOL_NOT/13               #10=      $9                   ?0                  	;0
		25  663  JMPZ/43                   ?0        #10                  ?28                 	;0	>>28
		26  664  NOP/0                     ?0        ?0                   ?0                  	;1
		27  664  GOTO/253                  ?0        ?36                  ?11                 	;0
		28  666  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'array_merge'    	;2	<<25
		29  666  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		30  666  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'C7b767C317F00408'	;1
		31  666  SEND_VAR/117              ?80       16?2                 ?1                  	;0
		32  666  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		33  666  SEND_VAR_NO_REF_EX/50     ?96       $11                  ?2                  	;0
		34  666  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		35  666  ASSIGN/38                 ?10       16?1                 $12                 	;0
		36  668  NOP/0                     ?0        ?0                   ?0                  	;1
		37  668  GOTO/253                  ?0        ?40                  ?16                 	;0
		38  670  ASSIGN_DIM/147            ?11       16?1                 ?2670193952         	;0
		39  670  OP_DATA/137               ?0        16?2                 ?0                  	;0
		40  672  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		41  672  FE_FREE/127               ?0        $5                   ?0                  	;0	<<8
		42  675  RETURN/62                 ?0        16?1                 ?0                  	;0
		43  676  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function D0826dad642A6222()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   679  JMP/42                    ?0        ?1                   ?0                  	;0	>>1
		1   681  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 1:'e74a9a4510C4FFE4'	;2	<<0
		2   681  SEND_VAL/65               ?80       3:'blocked_isp'      ?1                  	;0
		3   681  SEND_VAL/65               ?96       4:20                 ?2                  	;0
		4   681  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		5   681  ASSIGN/38                 ?1        16?0                 $2                  	;0
		6   682  IS_NOT_IDENTICAL/16       #4=       16?0                 5:false             	;0
		7   682  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		8   682  JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
		9   683  GOTO/253                  ?0        ?11                  ?6                  	;0
		10  685  RETURN/62                 ?0        16?0                 ?0                  	;0	<<8
		11  687  FETCH_CONSTANT/99         #6=       ?0                   7:'PLATFORM'        	;16
		12  687  IS_EQUAL/17               #7=       #6                   10:'xui'            	;0
		13  687  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
		14  688  GOTO/253                  ?0        ?31                  ?11                 	;0
		15  690  GOTO/253                  ?0        ?26                  ?12                 	;0	<<13
		16  692  FETCH_STATIC_PROP_R/173   $8=       13:'db'              ?513                	;0
		17  692  INIT_METHOD_CALL/112      ?0        $8                   14:'get_rows'       	;0
		18  692  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		19  692  ASSIGN/38                 ?8        16?1                 $9                  	;0
		20  693  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 16:'F7a8933150230eAb'	;2
		21  693  SEND_VAL/65               ?80       18:'blocked_isp'     ?1                  	;0
		22  693  SEND_VAR/117              ?96       16?1                 ?2                  	;0
		23  693  DO_FCALL/60               ?9        ?0                   ?0                  	;0
		24  694  RETURN/62                 ?0        16?1                 ?0                  	;0
		25  695  GOTO/253                  ?0        ?36                  ?19                 	;0
		26  697  FETCH_STATIC_PROP_R/173   $12=      20:'db'              ?513                	;0
		27  697  INIT_METHOD_CALL/112      ?0        $12                  21:'query'          	;1
		28  697  SEND_VAL_EX/116           ?80       23:'SELECT id, isp, blocked FROM `isp_addon`' ?1                  	;0
		29  697  DO_FCALL/60               ?11       ?0                   ?0                  	;0
		30  698  GOTO/253                  ?0        ?35                  ?24                 	;0
		31  700  FETCH_STATIC_PROP_R/173   $14=      25:'db'              ?513                	;0
		32  700  INIT_METHOD_CALL/112      ?0        $14                  26:'query'          	;1
		33  700  SEND_VAL_EX/116           ?80       28:'SELECT id, isp, blocked FROM `blocked_isps`' ?1                  	;0
		34  700  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		35  702  GOTO/253                  ?0        ?16                  ?29                 	;0
		36  704  NOP/0                     ?0        30:NULL              ?0                  	;4294967295
		*/
	}

	static public function f76008f8dfE1898c()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   707  JMP/42                    ?0        ?218                 ?0                  	;0	>>218
		1   709  FETCH_W/83                $8=       1:'_SERVER'          ?0                  	;0
		2   709  ASSIGN_DIM/147            ?1        $8                   2:'REQUEST_SCHEME'  	;0
		3   709  OP_DATA/137               ?0        3:'http'             ?0                  	;0
		4   711  FETCH_CONSTANT/99         #10=      ?0                   4:'PLATFORM'        	;16
		5   711  IS_EQUAL/17               #11=      #10                  7:'xui'             	;0
		6   711  JMPZ/43                   ?0        #11                  ?8                  	;0	>>8
		7   712  GOTO/253                  ?0        ?212                 ?8                  	;0
		8   714  FETCH_STATIC_PROP_R/173   $12=      9:'db'               ?513                	;0	<<6
		9   714  INIT_METHOD_CALL/112      ?0        $12                  10:'query'          	;1
		10  714  SEND_VAL_EX/116           ?80       12:'SELECT * FROM `streaming_servers`' ?1                  	;0
		11  714  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		12  715  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'json_decode'    	;2
		13  715  FETCH_STATIC_PROP_FUNC_ARG/177 $14=      15:'rSettings'       ?513                	;1
		14  715  FETCH_DIM_FUNC_ARG/93     $15=      $14                  16:'use_https'      	;1
		15  715  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		16  715  SEND_VAL_EX/116           ?96       17:true              ?2                  	;0
		17  715  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		18  715  JMP_SET/152               #17=      $16                  ?20                 	;0
		19  715  QM_ASSIGN/22              #17=      18:array (
)         ?0                  	;0
		20  715  ASSIGN/38                 ?10       16?0                 #17                 	;0
		21  716  GOTO/253                  ?0        ?211                 ?19                 	;0
		22  718  ASSIGN/38                 ?11       16?1                 20:array (
  0 => 1,
)	;0
		23  719  FETCH_STATIC_PROP_R/173   $20=      21:'db'              ?513                	;0
		24  719  INIT_METHOD_CALL/112      ?0        $20                  22:'get_rows'       	;0
		25  719  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		26  719  FE_RESET_R/77             $22=      $21                  ?204                	;0
		27  719  FE_FETCH_R/78             ?0        $22                  16?2                	;204	>>204	<<203
		28  720  NOP/0                     ?0        ?0                   ?0                  	;1
		29  720  GOTO/253                  ?0        ?174                 ?24                 	;0
		30  723  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'intval'         	;1
		31  723  FETCH_DIM_FUNC_ARG/93     $23=      16?2                 27:'id'             	;1
		32  723  SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
		33  723  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		34  723  ASSIGN_DIM/147            ?17       16?3                 $24                 	;0
		35  723  OP_DATA/137               ?0        16?2                 ?0                  	;0
		36  725  NOP/0                     ?0        ?0                   ?0                  	;1
		37  725  GOTO/253                  ?0        ?203                 ?28                 	;0
		38  728  FETCH_CONSTANT/99         #26=      ?0                   29:'PLATFORM'       	;16
		39  728  IS_EQUAL/17               #27=      #26                  32:'xui'            	;0
		40  728  JMPZ/43                   ?0        #27                  ?43                 	;0	>>43
		41  729  NOP/0                     ?0        ?0                   ?0                  	;1
		42  729  GOTO/253                  ?0        ?164                 ?33                 	;0
		43  731  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'in_array'       	;2	<<40
		44  731  FETCH_DIM_FUNC_ARG/93     $28=      16?2                 36:'id'             	;1
		45  731  SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
		46  731  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		47  731  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		48  731  JMPZ/43                   ?0        $29                  ?51                 	;0	>>51
		49  732  NOP/0                     ?0        ?0                   ?0                  	;1
		50  732  GOTO/253                  ?0        ?104                 ?37                 	;0
		51  734  ASSIGN/38                 ?22       16?4                 38:'http'           	;0	<<48
		52  735  NOP/0                     ?0        ?0                   ?0                  	;1
		53  735  GOTO/253                  ?0        ?105                 ?39                 	;0
		54  736  NOP/0                     ?0        ?0                   ?0                  	;1
		55  736  GOTO/253                  ?0        ?104                 ?40                 	;0
		56  738  ASSIGN_DIM/147            ?23       16?2                 41:'request_port'   	;0
		57  738  OP_DATA/137               ?0        16?5                 ?0                  	;0
		58  739  CONCAT/8                  #33=      16?4                 43:'://'            	;0
		59  739  CONCAT/8                  #34=      #33                  16?6                	;0
		60  739  CONCAT/8                  #35=      #34                  44:':'              	;0
		61  739  CONCAT/8                  #36=      #35                  16?5                	;0
		62  739  CONCAT/8                  #37=      #36                  45:'/'              	;0
		63  739  ASSIGN_DIM/147            ?24       16?2                 42:'site_url'       	;0
		64  739  OP_DATA/137               ?0        #37                  ?0                  	;0
		65  740  CONCAT/8                  #39=      47:'http://'         16?6                	;0
		66  740  CONCAT/8                  #40=      #39                  48:':'              	;0
		67  740  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'intval'         	;1
		68  740  FETCH_DIM_FUNC_ARG/93     $41=      16?2                 51:'http_broadcast_port'	;1
		69  740  SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
		70  740  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
		71  740  CONCAT/8                  #43=      #40                  $42                 	;0
		72  740  CONCAT/8                  #44=      #43                  52:'/'              	;0
		73  740  ASSIGN_DIM/147            ?30       16?2                 46:'http_url'       	;0
		74  740  OP_DATA/137               ?0        #44                  ?0                  	;0
		75  741  CONCAT/8                  #46=      54:'https://'        16?6                	;0
		76  741  CONCAT/8                  #47=      #46                  55:':'              	;0
		77  741  INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'intval'         	;1
		78  741  FETCH_DIM_FUNC_ARG/93     $48=      16?2                 58:'https_broadcast_port'	;1
		79  741  SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
		80  741  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
		81  741  CONCAT/8                  #50=      #47                  $49                 	;0
		82  741  CONCAT/8                  #51=      #50                  59:'/'              	;0
		83  741  ASSIGN_DIM/147            ?37       16?2                 53:'https_url'      	;0
		84  741  OP_DATA/137               ?0        #51                  ?0                  	;0
		85  742  INIT_ARRAY/71             #53=      16?4                 61:'protocol'       	;14
		86  742  ADD_ARRAY_ELEMENT/72      #53=      16?5                 62:'port'           	;0
		87  742  INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'array_filter'   	;1
		88  742  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'array_map'      	;2
		89  742  SEND_VAL_EX/116           ?80       67:'escapeshellcmd'  ?1                  	;0
		90  742  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'explode'        	;2
		91  742  SEND_VAL_EX/116           ?80       70:','               ?1                  	;0
		92  742  FETCH_DIM_FUNC_ARG/93     $54=      16?2                 71:'domain_name'    	;2
		93  742  SEND_VAR_EX/66            ?96       $54                  ?2                  	;0
		94  742  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
		95  742  SEND_VAR_NO_REF_EX/50     ?96       $55                  ?2                  	;0
		96  742  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
		97  742  SEND_VAR_NO_REF_EX/50     ?80       $56                  ?1                  	;0
		98  742  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
		99  742  ADD_ARRAY_ELEMENT/72      #53=      $57                  72:'urls'           	;0
		100 742  ASSIGN_DIM/147            ?44       16?2                 60:'domains'        	;0
		101 742  OP_DATA/137               ?0        #53                  ?0                  	;0
		102 743  NOP/0                     ?0        ?0                   ?0                  	;1
		103 743  GOTO/253                  ?0        ?116                 ?73                 	;0
		104 746  ASSIGN/38                 ?50       16?4                 74:'https'          	;0
		105 748  INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'in_array'       	;2
		106 748  FETCH_DIM_FUNC_ARG/93     $60=      16?2                 78:'id'             	;1
		107 748  SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
		108 748  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		109 748  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
		110 748  ASSIGN_DIM/147            ?51       16?2                 75:'enable_https'   	;0
		111 748  OP_DATA/137               ?0        $61                  ?0                  	;0
		112 749  NOP/0                     ?0        ?0                   ?0                  	;1
		113 749  GOTO/253                  ?0        ?146                 ?79                 	;0
		114 750  NOP/0                     ?0        ?0                   ?0                  	;1
		115 750  GOTO/253                  ?0        ?164                 ?80                 	;0
		116 752  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'is_numeric'     	;1
		117 752  FETCH_DIM_FUNC_ARG/93     $62=      16?2                 83:'parent_id'      	;1
		118 752  SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
		119 752  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
		120 752  JMPZ/43                   ?0        $63                  ?123                	;0	>>123
		121 753  NOP/0                     ?0        ?0                   ?0                  	;1
		122 753  GOTO/253                  ?0        ?136                 ?84                 	;0
		123 755  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'array_map'      	;2	<<120
		124 755  SEND_VAL_EX/116           ?80       88:'intval'          ?1                  	;0
		125 755  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'json_decode'    	;2
		126 755  FETCH_DIM_FUNC_ARG/93     $65=      16?2                 91:'parent_id'      	;1
		127 755  SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
		128 755  SEND_VAL_EX/116           ?96       92:true              ?2                  	;0
		129 755  DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
		130 755  SEND_VAR_NO_REF_EX/50     ?96       $66                  ?2                  	;0
		131 755  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
		132 755  ASSIGN_DIM/147            ?56       16?2                 85:'parent_id'      	;0
		133 755  OP_DATA/137               ?0        $67                  ?0                  	;0
		134 756  NOP/0                     ?0        ?0                   ?0                  	;1
		135 756  GOTO/253                  ?0        ?30                  ?93                 	;0
		136 758  INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'intval'         	;1
		137 758  FETCH_DIM_FUNC_ARG/93     $69=      16?2                 97:'parent_id'      	;1
		138 758  SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
		139 758  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
		140 758  INIT_ARRAY/71             #71=      $70                  ?0                  	;4
		141 758  ASSIGN_DIM/147            ?60       16?2                 94:'parent_id'      	;0
		142 758  OP_DATA/137               ?0        #71                  ?0                  	;0
		143 759  NOP/0                     ?0        ?0                   ?0                  	;1
		144 759  GOTO/253                  ?0        ?30                  ?98                 	;0
		145 761  ASSIGN/38                 ?64       16?4                 99:'https'          	;0
		146 764  IS_EQUAL/17               #73=      16?4                 100:'http'          	;0
		147 764  JMPZ/43                   ?0        #73                  ?154                	;0	>>154
		148 764  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'intval'        	;1
		149 764  FETCH_DIM_FUNC_ARG/93     $74=      16?2                 103:'http_broadcast_port'	;1
		150 764  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
		151 764  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
		152 764  QM_ASSIGN/22              #76=      $75                  ?0                  	;0
		153 764  JMP/42                    ?0        ?159                 ?0                  	;0	>>159
		154 764  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'intval'        	;1	<<147
		155 764  FETCH_DIM_FUNC_ARG/93     $77=      16?2                 106:'https_broadcast_port'	;1
		156 764  SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
		157 764  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
		158 764  QM_ASSIGN/22              #76=      $78                  ?0                  	;0
		159 764  ASSIGN/38                 ?71       16?5                 #76                 	;0	<<153
		160 765  ASSIGN_DIM/147            ?72       16?2                 107:'server_protocol'	;0
		161 765  OP_DATA/137               ?0        16?4                 ?0                  	;0
		162 766  NOP/0                     ?0        ?0                   ?0                  	;1
		163 766  GOTO/253                  ?0        ?56                  ?108                	;0
		164 769  FETCH_DIM_R/81            $81=      16?2                 109:'enable_https'  	;0
		165 769  IS_EQUAL/17               #82=      $81                  110:1               	;0
		166 769  JMPZ/43                   ?0        #82                  ?169                	;0	>>169
		167 770  NOP/0                     ?0        ?0                   ?0                  	;1
		168 770  GOTO/253                  ?0        ?172                 ?111                	;0
		169 772  ASSIGN/38                 ?75       16?4                 112:'http'          	;0	<<166
		170 773  NOP/0                     ?0        ?0                   ?0                  	;1
		171 773  GOTO/253                  ?0        ?146                 ?113                	;0
		172 775  NOP/0                     ?0        ?0                   ?0                  	;1
		173 775  GOTO/253                  ?0        ?145                 ?114                	;0
		174 777  ISSET_ISEMPTY_DIM_OBJ/115 #84=      16?2                 115:'domain_name'   	;16777216
		175 777  JMPZ/43                   ?0        #84                  ?178                	;0	>>178
		176 778  NOP/0                     ?0        ?0                   ?0                  	;1
		177 778  GOTO/253                  ?0        ?196                 ?116                	;0
		178 780  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'str_replace'   	;3	<<175
		179 780  SEND_VAL_EX/116           ?80       119:array (
  0 => 'http://',
  1 => '/',
  2 => 'https://',
) ?1                  	;0
		180 780  SEND_VAL_EX/116           ?96       120:''               ?2                  	;0
		181 780  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'escapeshellcmd'	;1
		182 780  INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'explode'       	;2
		183 780  SEND_VAL_EX/116           ?80       125:','              ?1                  	;0
		184 780  FETCH_DIM_FUNC_ARG/93     $85=      16?2                 126:'domain_name'   	;2
		185 780  SEND_VAR_EX/66            ?96       $85                  ?2                  	;0
		186 780  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
		187 780  SEPARATE/156              $86=      $86                  ?0                  	;0
		188 780  FETCH_DIM_FUNC_ARG/93     $87=      $86                  127:0               	;1
		189 780  SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
		190 780  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
		191 780  SEND_VAR_NO_REF_EX/50     ?112      $88                  ?3                  	;0
		192 780  DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
		193 780  ASSIGN/38                 ?82       16?6                 $89                 	;0
		194 781  NOP/0                     ?0        ?0                   ?0                  	;1
		195 781  GOTO/253                  ?0        ?38                  ?128                	;0
		196 783  INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'escapeshellcmd'	;1
		197 783  FETCH_DIM_FUNC_ARG/93     $91=      16?2                 131:'server_ip'     	;1
		198 783  SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
		199 783  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
		200 783  ASSIGN/38                 ?85       16?6                 $92                 	;0
		201 784  NOP/0                     ?0        ?0                   ?0                  	;1
		202 784  GOTO/253                  ?0        ?38                  ?132                	;0
		203 785  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
		204 785  FE_FREE/127               ?0        $22                  ?0                  	;0	<<26
		205 788  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 133:'f7A8933150230eAB'	;2
		206 788  SEND_VAL/65               ?80       135:'servers'        ?1                  	;0
		207 788  SEND_VAR/117              ?96       16?3                 ?2                  	;0
		208 788  DO_FCALL/60               ?86       ?0                   ?0                  	;0
		209 789  RETURN/62                 ?0        16?3                 ?0                  	;0
		210 790  GOTO/253                  ?0        ?233                 ?136                	;0
		211 792  GOTO/253                  ?0        ?216                 ?137                	;0
		212 794  FETCH_STATIC_PROP_R/173   $95=      138:'db'             ?513                	;0
		213 794  INIT_METHOD_CALL/112      ?0        $95                  139:'query'         	;1
		214 794  SEND_VAL_EX/116           ?80       141:'SELECT * FROM `servers`' ?1                  	;0
		215 794  DO_FCALL/60               ?88       ?0                   ?0                  	;0
		216 796  ASSIGN/38                 ?89       16?3                 142:array (
)       	;0
		217 797  GOTO/253                  ?0        ?22                  ?143                	;0
		218 799  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 144:'e74A9a4510c4FFe4'	;2	<<0
		219 799  SEND_VAL/65               ?80       146:'servers'        ?1                  	;0
		220 799  SEND_VAL/65               ?96       147:10               ?2                  	;0
		221 799  DO_FCALL/60               $98=      ?0                   ?0                  	;0
		222 799  ASSIGN/38                 ?91       16?7                 $98                 	;0
		223 800  ISSET_ISEMPTY_CV/197      #100=     16?7                 ?0                  	;16777216
		224 800  JMPZ/43                   ?0        #100                 ?226                	;0	>>226
		225 801  GOTO/253                  ?0        ?227                 ?148                	;0
		226 803  RETURN/62                 ?0        16?7                 ?0                  	;0	<<224
		227 805  FETCH_IS/89               $101=     149:'_SERVER'        ?0                  	;0
		228 805  ISSET_ISEMPTY_DIM_OBJ/115 #102=     $101                 150:'REQUEST_SCHEME'	;16777216
		229 805  BOOL_NOT/13               #103=     #102                 ?0                  	;0
		230 805  JMPZ/43                   ?0        #103                 ?232                	;0	>>232
		231 806  GOTO/253                  ?0        ?4                   ?151                	;0
		232 808  GOTO/253                  ?0        ?1                   ?152                	;0	<<230
		233 810  NOP/0                     ?0        153:NULL             ?0                  	;4294967295
		*/
	}

	static public function ac49b56dBe10e52C()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   813  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
		1   815  FETCH_STATIC_PROP_R/173   $5=       1:'db'               ?513                	;0
		2   815  INIT_METHOD_CALL/112      ?0        $5                   2:'query'           	;1
		3   815  SEND_VAL_EX/116           ?80       4:'SELECT * FROM `settings`' ?1                  	;0
		4   815  DO_FCALL/60               ?1        ?0                   ?0                  	;0
		5   816  FETCH_STATIC_PROP_R/173   $7=       5:'db'               ?513                	;0
		6   816  INIT_METHOD_CALL/112      ?0        $7                   6:'get_row'         	;0
		7   816  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		8   816  ASSIGN/38                 ?4        16?0                 $8                  	;0
		9   817  FE_RESET_R/77             $10=      16?0                 ?15                 	;0
		10  817  FE_FETCH_R/78             #11=      $10                  16?1                	;15	>>15	<<14
		11  817  ASSIGN/38                 ?7        16?2                 #11                 	;0
		12  818  ASSIGN_DIM/147            ?8        16?3                 16?2                	;0
		13  818  OP_DATA/137               ?0        16?1                 ?0                  	;0
		14  819  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		15  819  FE_FREE/127               ?0        $10                  ?0                  	;0	<<9
		16  822  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'json_decode'     	;2
		17  822  FETCH_DIM_FUNC_ARG/93     $15=      16?3                 11:'allow_countries'	;1
		18  822  SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
		19  822  SEND_VAL_EX/116           ?96       12:true              ?2                  	;0
		20  822  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		21  822  ASSIGN_DIM/147            ?9        16?3                 8:'allow_countries' 	;0
		22  822  OP_DATA/137               ?0        $16                  ?0                  	;0
		23  823  GOTO/253                  ?0        ?35                  ?13                 	;0
		24  825  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'E74A9a4510C4FFe4'	;2	<<0
		25  825  SEND_VAL/65               ?80       16:'settings'        ?1                  	;0
		26  825  SEND_VAL/65               ?96       17:20                ?2                  	;0
		27  825  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		28  825  ASSIGN/38                 ?13       16?4                 $17                 	;0
		29  826  ISSET_ISEMPTY_CV/197      #19=      16?4                 ?0                  	;16777216
		30  826  JMPZ/43                   ?0        #19                  ?32                 	;0	>>32
		31  827  GOTO/253                  ?0        ?33                  ?18                 	;0
		32  829  RETURN/62                 ?0        16?4                 ?0                  	;0	<<30
		33  831  ASSIGN/38                 ?15       16?3                 19:array (
)        	;0
		34  832  GOTO/253                  ?0        ?1                   ?20                 	;0
		35  834  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 21:'F7a8933150230EAb'	;2
		36  834  SEND_VAL/65               ?80       23:'settings'        ?1                  	;0
		37  834  SEND_VAR/117              ?96       16?3                 ?2                  	;0
		38  834  DO_FCALL/60               ?16       ?0                   ?0                  	;0
		39  835  RETURN/62                 ?0        16?3                 ?0                  	;0
		40  836  GOTO/253                  ?0        ?41                  ?24                 	;0
		41  838  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	static public function Bee6DCc538970dd6(&$ba2d146bb5a55097, $c40a96ec32e40497)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   839  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   839  RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2   841  IS_SMALLER_OR_EQUAL/20    #4=       1:10                 16?1                	;0
		3   841  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		4   841  JMPZ/43                   ?0        #5                   ?6                  	;0	>>6
		5   842  GOTO/253                  ?0        ?7                   ?2                  	;0
		6   844  RETURN/62                 ?0        3:NULL               ?0                  	;0	<<4
		7   846  FE_RESET_R/77             $6=       16?0                 ?68                 	;0
		8   846  FE_FETCH_R/78             #7=       $6                   16?2                	;68	>>68	<<67
		9   846  ASSIGN/38                 ?4        16?3                 #7                  	;0
		10  847  NOP/0                     ?0        ?0                   ?0                  	;1
		11  847  GOTO/253                  ?0        ?14                  ?4                  	;0
		12  851  NOP/0                     ?0        ?0                   ?0                  	;1
		13  851  GOTO/253                  ?0        ?67                  ?5                  	;0
		14  853  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_array'        	;1
		15  853  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		16  853  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		17  853  JMPZ/43                   ?0        $9                   ?20                 	;0	>>20
		18  854  NOP/0                     ?0        ?0                   ?0                  	;1
		19  854  GOTO/253                  ?0        ?59                  ?8                  	;0
		20  856  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'str_replace'     	;3	<<17
		21  856  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'chr'            	;1
		22  856  SEND_VAL_EX/116           ?80       13:'0'               ?1                  	;0
		23  856  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		24  856  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
		25  856  SEND_VAL_EX/116           ?96       14:''                ?2                  	;0
		26  856  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		27  856  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		28  856  ASSIGN/38                 ?8        16?2                 $11                 	;0
		29  857  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'str_replace'    	;3
		30  857  SEND_VAL_EX/116           ?80       17:'' . "\0" . ''    ?1                  	;0
		31  857  SEND_VAL_EX/116           ?96       18:''                ?2                  	;0
		32  857  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		33  857  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		34  857  ASSIGN/38                 ?10       16?2                 $13                 	;0
		35  858  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'str_replace'    	;3
		36  858  SEND_VAL_EX/116           ?80       21:'' . "\0" . ''    ?1                  	;0
		37  858  SEND_VAL_EX/116           ?96       22:''                ?2                  	;0
		38  858  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		39  858  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		40  858  ASSIGN/38                 ?12       16?2                 $15                 	;0
		41  859  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'str_replace'    	;3
		42  859  SEND_VAL_EX/116           ?80       25:'../'             ?1                  	;0
		43  859  SEND_VAL_EX/116           ?96       26:'&#46;&#46;/'     ?2                  	;0
		44  859  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		45  859  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		46  859  ASSIGN/38                 ?14       16?2                 $17                 	;0
		47  860  NOP/0                     ?0        ?0                   ?0                  	;1
		48  860  GOTO/253                  ?0        ?49                  ?27                 	;0
		49  862  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'str_replace'    	;3
		50  862  SEND_VAL_EX/116           ?80       30:'&#8238;'         ?1                  	;0
		51  862  SEND_VAL_EX/116           ?96       31:''                ?2                  	;0
		52  862  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		53  862  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		54  862  ASSIGN/38                 ?16       16?2                 $19                 	;0
		55  863  ASSIGN_DIM/147            ?17       16?0                 16?3                	;0
		56  863  OP_DATA/137               ?0        16?2                 ?0                  	;0
		57  864  NOP/0                     ?0        ?0                   ?0                  	;1
		58  864  GOTO/253                  ?0        ?12                  ?32                 	;0
		59  866  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 33:'BEe6dCC538970dD6'	;2
		60  866  FETCH_DIM_W/84            $22=      16?0                 16?3                	;0
		61  866  SEND_REF/67               ?80       $22                  ?1                  	;0
		62  866  PRE_INC/34                $23=      16?1                 ?0                  	;0
		63  866  SEND_VAR/117              ?96       $23                  ?2                  	;0
		64  866  DO_FCALL/60               ?20       ?0                   ?0                  	;0
		65  867  NOP/0                     ?0        ?0                   ?0                  	;1
		66  867  GOTO/253                  ?0        ?12                  ?35                 	;0
		67  868  JMP/42                    ?0        ?8                   ?0                  	;0	>>8
		68  868  FE_FREE/127               ?0        $6                   ?0                  	;0	<<7
		69  871  NOP/0                     ?0        36:NULL              ?0                  	;4294967295
		*/
	}

	static public function E24b3D34D46068EB(&$ba2d146bb5a55097, $Eace76317d47fe26, $c40a96ec32e40497)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   872  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   872  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
		2   872  RECV_INIT/64              16?2=     ?3                   1:0                 	;0
		3   874  IS_SMALLER_OR_EQUAL/20    #5=       2:20                 16?2                	;0
		4   874  BOOL_NOT/13               #6=       #5                   ?0                  	;0
		5   874  JMPZ/43                   ?0        #6                   ?7                  	;0	>>7
		6   875  GOTO/253                  ?0        ?8                   ?3                  	;0
		7   877  RETURN/62                 ?0        16?1                 ?0                  	;0	<<5
		8   879  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'is_array'        	;1
		9   879  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		10  879  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11  879  JMPZ/43                   ?0        $7                   ?13                 	;0	>>13
		12  880  GOTO/253                  ?0        ?14                  ?6                  	;0
		13  882  RETURN/62                 ?0        16?1                 ?0                  	;0	<<11
		14  884  FE_RESET_R/77             $8=       16?0                 ?45                 	;0
		15  884  FE_FETCH_R/78             #9=       $8                   16?3                	;45	>>45	<<44
		16  884  ASSIGN/38                 ?5        16?4                 #9                  	;0
		17  885  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_array'        	;1
		18  885  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		19  885  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		20  885  JMPZ/43                   ?0        $11                  ?23                 	;0	>>23
		21  886  NOP/0                     ?0        ?0                   ?0                  	;1
		22  886  GOTO/253                  ?0        ?35                  ?9                  	;0
		23  888  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 10:'c9a009A333d98407'	;1	<<20
		24  888  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		25  888  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		26  888  ASSIGN/38                 ?8        16?4                 $12                 	;0
		27  889  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'fdEBdb3616a89cE1'	;1
		28  889  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		29  889  DO_FCALL/60               $14=      ?0                   ?0                  	;0
		30  889  ASSIGN/38                 ?10       16?3                 $14                 	;0
		31  890  ASSIGN_DIM/147            ?11       16?1                 16?4                	;0
		32  890  OP_DATA/137               ?0        16?3                 ?0                  	;0
		33  891  NOP/0                     ?0        ?0                   ?0                  	;1
		34  891  GOTO/253                  ?0        ?44                  ?14                 	;0
		35  893  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 15:'E24b3d34d46068Eb'	;3
		36  893  FETCH_DIM_W/84            $18=      16?0                 16?4                	;0
		37  893  SEND_REF/67               ?80       $18                  ?1                  	;0
		38  893  SEND_VAL/65               ?96       17:array (
)         ?2                  	;0
		39  893  ADD/1                     #19=      16?2                 18:1                	;0
		40  893  SEND_VAL/65               ?112      #19                  ?3                  	;0
		41  893  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		42  893  ASSIGN_DIM/147            ?12       16?1                 16?4                	;0
		43  893  OP_DATA/137               ?0        $20                  ?0                  	;0
		44  895  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		45  895  FE_FREE/127               ?0        $8                   ?0                  	;0	<<14
		46  898  RETURN/62                 ?0        16?1                 ?0                  	;0
		47  899  NOP/0                     ?0        19:NULL              ?0                  	;4294967295
		*/
	}

	static public function c9a009a333D98407($Bb672d1983256a93)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   900  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   902  IS_IDENTICAL/15           #1=       16?0                 0:''                	;0
		2   902  BOOL_NOT/13               #2=       #1                   ?0                  	;0
		3   902  JMPZ/43                   ?0        #2                   ?5                  	;0	>>5
		4   903  GOTO/253                  ?0        ?6                   ?1                  	;0
		5   905  RETURN/62                 ?0        2:''                 ?0                  	;0	<<3
		6   907  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'htmlspecialchars'	;1
		7   907  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'urldecode'       	;1
		8   907  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9   907  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		10  907  SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
		11  907  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		12  907  ASSIGN/38                 ?4        16?0                 $4                  	;0
		13  908  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'str_replace'     	;3
		14  908  SEND_VAL_EX/116           ?80       9:'..'               ?1                  	;0
		15  908  SEND_VAL_EX/116           ?96       10:''                ?2                  	;0
		16  908  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		17  908  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		18  908  ASSIGN/38                 ?6        16?0                 $6                  	;0
		19  909  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'preg_replace'   	;3
		20  909  SEND_VAL_EX/116           ?80       13:'/\\_\\_(.+?)\\_\\_/' ?1                  	;0
		21  909  SEND_VAL_EX/116           ?96       14:''                ?2                  	;0
		22  909  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		23  909  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		24  909  ASSIGN/38                 ?8        16?0                 $8                  	;0
		25  910  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'preg_replace'   	;3
		26  910  SEND_VAL_EX/116           ?80       17:'/^([\\w\\.\\-\\_]+)$/' ?1                  	;0
		27  910  SEND_VAL_EX/116           ?96       18:'$1'              ?2                  	;0
		28  910  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		29  910  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		30  910  RETURN/62                 ?0        $10                  ?0                  	;0
		31  911  NOP/0                     ?0        19:NULL              ?0                  	;4294967295
		*/
	}

	static public function fdEBDB3616a89cE1($ce0840c647e1bbc7)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   912  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   914  JMP/42                    ?0        ?38                  ?0                  	;0	>>38
		2   916  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'str_replace'     	;3
		3   916  SEND_VAL_EX/116           ?80       3:'<!--'             ?1                  	;0
		4   916  SEND_VAL_EX/116           ?96       4:'&#60;&#33;--'     ?2                  	;0
		5   916  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		6   916  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		7   916  ASSIGN/38                 ?1        16?0                 $1                  	;0
		8   917  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'str_replace'     	;3
		9   917  SEND_VAL_EX/116           ?80       7:'-->'              ?1                  	;0
		10  917  SEND_VAL_EX/116           ?96       8:'--&#62;'          ?2                  	;0
		11  917  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		12  917  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		13  917  ASSIGN/38                 ?3        16?0                 $3                  	;0
		14  918  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'str_ireplace'    	;3
		15  918  SEND_VAL_EX/116           ?80       11:'<script'         ?1                  	;0
		16  918  SEND_VAL_EX/116           ?96       12:'&#60;script'     ?2                  	;0
		17  918  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		18  918  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		19  918  ASSIGN/38                 ?5        16?0                 $5                  	;0
		20  919  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'preg_replace'   	;3
		21  919  SEND_VAL_EX/116           ?80       15:'/&amp;#([0-9]+);/s' ?1                  	;0
		22  919  SEND_VAL_EX/116           ?96       16:'&#\\1;'          ?2                  	;0
		23  919  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		24  919  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		25  919  ASSIGN/38                 ?7        16?0                 $7                  	;0
		26  920  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'preg_replace'   	;3
		27  920  SEND_VAL_EX/116           ?80       19:'/&#(\\d+?)([^\\d;])/i' ?1                  	;0
		28  920  SEND_VAL_EX/116           ?96       20:'&#\\1;\\2'       ?2                  	;0
		29  920  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		30  920  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		31  920  ASSIGN/38                 ?9        16?0                 $9                  	;0
		32  921  GOTO/253                  ?0        ?33                  ?21                 	;0
		33  923  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'trim'           	;1
		34  923  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		35  923  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		36  923  RETURN/62                 ?0        $11                  ?0                  	;0
		37  924  GOTO/253                  ?0        ?59                  ?24                 	;0
		38  926  IS_EQUAL/17               #12=      16?0                 25:''               	;0	<<1
		39  926  BOOL_NOT/13               #13=      #12                  ?0                  	;0
		40  926  JMPZ/43                   ?0        #13                  ?42                 	;0	>>42
		41  927  GOTO/253                  ?0        ?43                  ?26                 	;0
		42  929  RETURN/62                 ?0        27:''                ?0                  	;0	<<40
		43  931  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'str_replace'    	;3
		44  931  SEND_VAL_EX/116           ?80       30:'&#032;'          ?1                  	;0
		45  931  SEND_VAL_EX/116           ?96       31:' '               ?2                  	;0
		46  931  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'stripslashes'   	;1
		47  931  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		48  931  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		49  931  SEND_VAR_NO_REF_EX/50     ?112      $14                  ?3                  	;0
		50  931  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		51  931  ASSIGN/38                 ?15       16?0                 $15                 	;0
		52  932  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'str_replace'    	;3
		53  932  SEND_VAL_EX/116           ?80       36:array (
  0 => '
',
  1 => '
',
  2 => '',
) ?1                  	;0
		54  932  SEND_VAL_EX/116           ?96       37:'
'               ?2                  	;0
		55  932  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		56  932  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		57  932  ASSIGN/38                 ?17       16?0                 $17                 	;0
		58  933  GOTO/253                  ?0        ?2                   ?38                 	;0
		59  935  NOP/0                     ?0        39:NULL              ?0                  	;4294967295
		*/
	}

	static public function a844F50027d143d3()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   938  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strtolower'      	;1
		1   938  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'basename'        	;2
		2   938  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'get_included_files'	;0
		3   938  DO_FCALL_BY_NAME/131      $0=       ?0                   ?0                  	;0
		4   938  SEPARATE/156              $0=       $0                   ?0                  	;0
		5   938  FETCH_DIM_FUNC_ARG/93     $1=       $0                   6:0                 	;1
		6   938  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		7   938  SEND_VAL_EX/116           ?96       7:'.php'             ?2                  	;0
		8   938  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		9   938  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		10  938  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		11  938  RETURN/62                 ?0        $3                   ?0                  	;0
		12  939  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	static public function b3dAcF6Ac7E9C796($C082ca9ed03f473c)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   940  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   942  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'array_rand'      	;1
		2   942  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'array_keys'      	;1
		3   942  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 4:'getProxies'      	;2
		4   942  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5   942  SEND_VAL_EX/116           ?96       6:false              ?2                  	;0
		6   942  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		7   942  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		8   942  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		9   942  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		10  942  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		11  942  JMP_SET/152               #4=       $3                   ?13                 	;0
		12  942  QM_ASSIGN/22              #4=       7:NULL               ?0                  	;0
		13  942  RETURN/62                 ?0        #4                   ?0                  	;0
		14  943  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	static public function getProxies($C082ca9ed03f473c, $F0b2d14f22704d6a)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   944  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   944  RECV_INIT/64              16?1=     ?2                   0:true              	;0
		2   946  ASSIGN/38                 ?0        16?2                 1:array (
)         	;0
		3   947  FETCH_STATIC_PROP_R/173   $6=       2:'rServers'         ?513                	;0
		4   947  FE_RESET_R/77             $7=       $6                   ?29                 	;0
		5   947  FE_FETCH_R/78             #8=       $7                   16?3                	;29	>>29	<<28
		6   947  ASSIGN/38                 ?4        16?4                 #8                  	;0
		7   948  FETCH_DIM_R/81            $10=      16?3                 3:'server_type'     	;0
		8   948  IS_EQUAL/17               #11=      $10                  4:1                 	;0
		9   948  JMPZ_EX/46                #11=      #11                  ?22                 	;0	>>22
		10  948  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'in_array'        	;2
		11  948  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		12  948  FETCH_DIM_FUNC_ARG/93     $12=      16?3                 7:'parent_id'       	;2
		13  948  SEND_VAR_EX/66            ?96       $12                  ?2                  	;0
		14  948  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		15  948  JMPZ_EX/46                #14=      $13                  ?21                 	;0	>>21
		16  948  FETCH_DIM_R/81            $15=      16?3                 8:'server_online'   	;0
		17  948  JMPNZ_EX/47               #16=      $15                  ?20                 	;0	>>20
		18  948  BOOL_NOT/13               #17=      16?1                 ?0                  	;0
		19  948  BOOL/52                   #16=      #17                  ?0                  	;0
		20  948  BOOL/52                   #14=      #16                  ?0                  	;0	<<17
		21  948  BOOL/52                   #11=      #14                  ?0                  	;0	<<15
		22  948  BOOL_NOT/13               #18=      #11                  ?0                  	;0	<<9
		23  948  JMPZ/43                   ?0        #18                  ?26                 	;0	>>26
		24  949  NOP/0                     ?0        ?0                   ?0                  	;1
		25  949  GOTO/253                  ?0        ?28                  ?9                  	;0
		26  951  ASSIGN_DIM/147            ?14       16?2                 16?4                	;0	<<23
		27  951  OP_DATA/137               ?0        16?3                 ?0                  	;0
		28  953  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
		29  953  FE_FREE/127               ?0        $7                   ?0                  	;0	<<4
		30  956  RETURN/62                 ?0        16?2                 ?0                  	;0
		31  957  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
		*/
	}

	static public function c65C7f64e35C199f($e3901a370c2ce233)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    958   RECV_INIT/64              16?0=     ?1                   0:false             	;0
		1    960   GOTO/253                  ?0        ?4                   ?1                  	;0
		2    962   RETURN/62                 ?0        16?1                 ?0                  	;0
		3    963   GOTO/253                  ?0        ?117                 ?2                  	;0
		4    965   ASSIGN/38                 ?0        16?1                 3:NULL              	;0
		5    966   JMPZ/43                   ?0        16?0                 ?8                  	;0	>>8
		6    966   QM_ASSIGN/22              #7=       4:'https_url'        ?0                  	;0
		7    966   JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		8    966   QM_ASSIGN/22              #7=       5:'site_url'         ?0                  	;0	<<5
		9    966   ASSIGN/38                 ?2        16?2                 #7                  	;0	<<7
		10   967   FETCH_STATIC_PROP_R/173   $9=       6:'rSettings'        ?513                	;0
		11   967   FETCH_DIM_R/81            $10=      $9                   7:'use_mdomain_in_lists'	;0
		12   967   IS_EQUAL/17               #11=      $10                  8:1                 	;0
		13   967   JMPZ/43                   ?0        #11                  ?15                 	;0	>>15
		14   968   GOTO/253                  ?0        ?94                  ?9                  	;0
		15   970   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'explode'        	;2	<<13
		16   970   SEND_VAL_EX/116           ?80       12:':'               ?1                  	;0
		17   970   FETCH_FUNC_ARG/92         $12=      13:'_SERVER'         ?0                  	;2
		18   970   FETCH_DIM_FUNC_ARG/93     $13=      $12                  14:'HTTP_HOST'      	;2
		19   970   SEND_VAR_EX/66            ?96       $13                  ?2                  	;0
		20   970   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		21   970   FETCH_LIST/98             $15=      $14                  15:0                	;0
		22   970   ASSIGN/38                 ?10       16?3                 $15                 	;0
		23   970   FETCH_LIST/98             $17=      $14                  16:1                	;0
		24   970   ASSIGN/38                 ?12       16?4                 $17                 	;0
		25   970   FREE/70                   ?0        $14                  ?0                  	;0
		26   971   FETCH_CONSTANT/99         #19=      ?0                   17:'PLATFORM'       	;16
		27   971   IS_EQUAL/17               #20=      #19                  20:'xui'            	;0
		28   971   JMPZ_EX/46                #20=      #20                  ?35                 	;0	>>35
		29   971   FETCH_CONSTANT/99         #22=      ?0                   22:'SERVER_ID'      	;16
		30   971   FETCH_STATIC_PROP_R/173   $21=      21:'rServers'        ?513                	;0
		31   971   FETCH_DIM_R/81            $23=      $21                  #22                 	;0
		32   971   FETCH_DIM_R/81            $24=      $23                  25:'server_ip'      	;0
		33   971   IS_EQUAL/17               #25=      16?3                 $24                 	;0
		34   971   BOOL/52                   #20=      #25                  ?0                  	;0
		35   971   JMPZ_EX/46                #20=      #20                  ?41                 	;0	>>41	<<28
		36   971   FETCH_CONSTANT/99         #27=      ?0                   27:'SERVER_ID'      	;16
		37   971   FETCH_STATIC_PROP_R/173   $26=      26:'rServers'        ?513                	;0
		38   971   FETCH_DIM_R/81            $28=      $26                  #27                 	;0
		39   971   FETCH_DIM_R/81            $29=      $28                  30:'enable_proxy'   	;0
		40   971   BOOL/52                   #20=      $29                  ?0                  	;0
		41   971   JMPZ/43                   ?0        #20                  ?43                 	;0	>>43	<<35
		42   972   GOTO/253                  ?0        ?45                  ?31                 	;0
		43   974   GOTO/253                  ?0        ?54                  ?32                 	;0	<<41
		44   977   GOTO/253                  ?0        ?93                  ?33                 	;0
		45   979   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 34:'B3DacF6aC7e9C796'	;1
		46   979   FETCH_CONSTANT/99         #30=      ?0                   36:'SERVER_ID'      	;16
		47   979   SEND_VAL/65               ?80       #30                  ?1                  	;0
		48   979   DO_FCALL/60               $31=      ?0                   ?0                  	;0
		49   979   ASSIGN/38                 ?26       16?5                 $31                 	;0
		50   980   BOOL_NOT/13               #33=      16?5                 ?0                  	;0
		51   980   JMPZ/43                   ?0        #33                  ?53                 	;0	>>53
		52   981   GOTO/253                  ?0        ?93                  ?39                 	;0
		53   983   GOTO/253                  ?0        ?89                  ?40                 	;0	<<51
		54   985   JMPZ/43                   ?0        16?0                 ?56                 	;0	>>56
		55   986   GOTO/253                  ?0        ?71                  ?41                 	;0
		56   988   FETCH_CONSTANT/99         #35=      ?0                   43:'SERVER_ID'      	;16	<<54
		57   988   FETCH_STATIC_PROP_R/173   $34=      42:'rServers'        ?513                	;0
		58   988   FETCH_DIM_R/81            $36=      $34                  #35                 	;0
		59   988   FETCH_DIM_R/81            $37=      $36                  46:'server_protocol'	;0
		60   988   CONCAT/8                  #38=      $37                  47:'://'            	;0
		61   988   CONCAT/8                  #39=      #38                  16?3                	;0
		62   988   CONCAT/8                  #40=      #39                  48:':'              	;0
		63   988   FETCH_CONSTANT/99         #42=      ?0                   50:'SERVER_ID'      	;16
		64   988   FETCH_STATIC_PROP_R/173   $41=      49:'rServers'        ?513                	;0
		65   988   FETCH_DIM_R/81            $43=      $41                  #42                 	;0
		66   988   FETCH_DIM_R/81            $44=      $43                  53:'request_port'   	;0
		67   988   CONCAT/8                  #45=      #40                  $44                 	;0
		68   988   CONCAT/8                  #46=      #45                  54:'/'              	;0
		69   988   ASSIGN/38                 ?41       16?1                 #46                 	;0
		70   989   GOTO/253                  ?0        ?44                  ?55                 	;0
		71   991   CONCAT/8                  #48=      56:'https://'        16?3                	;0
		72   991   CONCAT/8                  #49=      #48                  57:':'              	;0
		73   991   FETCH_CONSTANT/99         #51=      ?0                   59:'SERVER_ID'      	;16
		74   991   FETCH_STATIC_PROP_R/173   $50=      58:'rServers'        ?513                	;0
		75   991   FETCH_DIM_R/81            $52=      $50                  #51                 	;0
		76   991   FETCH_DIM_R/81            $53=      $52                  62:'https_broadcast_port'	;0
		77   991   CONCAT/8                  #54=      #49                  $53                 	;0
		78   991   CONCAT/8                  #55=      #54                  63:'/'              	;0
		79   991   ASSIGN/38                 ?50       16?1                 #55                 	;0
		80   992   GOTO/253                  ?0        ?44                  ?64                 	;0
		81   994   BOOL_NOT/13               #57=      16?5                 ?0                  	;0
		82   994   JMPZ/43                   ?0        #57                  ?84                 	;0	>>84
		83   995   GOTO/253                  ?0        ?88                  ?65                 	;0
		84   997   FETCH_STATIC_PROP_R/173   $58=      66:'rServers'        ?513                	;0	<<82
		85   997   FETCH_DIM_R/81            $59=      $58                  16?5                	;0
		86   997   FETCH_DIM_R/81            $60=      $59                  16?2                	;0
		87   997   ASSIGN/38                 ?55       16?1                 $60                 	;0
		88   1001  GOTO/253                  ?0        ?2                   ?67                 	;0
		89   1003  FETCH_STATIC_PROP_R/173   $62=      68:'rServers'        ?513                	;0
		90   1003  FETCH_DIM_R/81            $63=      $62                  16?5                	;0
		91   1003  FETCH_DIM_R/81            $64=      $63                  16?2                	;0
		92   1003  ASSIGN/38                 ?59       16?1                 $64                 	;0
		93   1006  GOTO/253                  ?0        ?88                  ?69                 	;0
		94   1008  GOTO/253                  ?0        ?95                  ?70                 	;0
		95   1010  FETCH_CONSTANT/99         #66=      ?0                   71:'PLATFORM'       	;16
		96   1010  IS_EQUAL/17               #67=      #66                  74:'xui'            	;0
		97   1010  JMPZ_EX/46                #67=      #67                  ?103                	;0	>>103
		98   1010  FETCH_CONSTANT/99         #69=      ?0                   76:'SERVER_ID'      	;16
		99   1010  FETCH_STATIC_PROP_R/173   $68=      75:'rServers'        ?513                	;0
		100  1010  FETCH_DIM_R/81            $70=      $68                  #69                 	;0
		101  1010  FETCH_DIM_R/81            $71=      $70                  79:'enable_proxy'   	;0
		102  1010  BOOL/52                   #67=      $71                  ?0                  	;0
		103  1010  JMPZ/43                   ?0        #67                  ?105                	;0	>>105	<<97
		104  1011  GOTO/253                  ?0        ?111                 ?80                 	;0
		105  1013  FETCH_CONSTANT/99         #73=      ?0                   82:'SERVER_ID'      	;16	<<103
		106  1013  FETCH_STATIC_PROP_R/173   $72=      81:'rServers'        ?513                	;0
		107  1013  FETCH_DIM_R/81            $74=      $72                  #73                 	;0
		108  1013  FETCH_DIM_R/81            $75=      $74                  16?2                	;0
		109  1013  ASSIGN/38                 ?70       16?1                 $75                 	;0
		110  1014  GOTO/253                  ?0        ?88                  ?85                 	;0
		111  1016  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 86:'B3dAcf6ac7e9C796'	;1
		112  1016  FETCH_CONSTANT/99         #77=      ?0                   88:'SERVER_ID'      	;16
		113  1016  SEND_VAL/65               ?80       #77                  ?1                  	;0
		114  1016  DO_FCALL/60               $78=      ?0                   ?0                  	;0
		115  1016  ASSIGN/38                 ?73       16?5                 $78                 	;0
		116  1017  GOTO/253                  ?0        ?81                  ?91                 	;0
		117  1019  NOP/0                     ?0        92:NULL              ?0                  	;4294967295
		*/
	}

	static public function b6dd3d9B5b90653b($A377ba6c37a0d3c2)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1020  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1022  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2    1023  ASSIGN/38                 ?1        16?2                 1:array (
  'live' => 1,
  'movie' => 2,
  'created_live' => 3,
  'radio_streams' => 4,
  'series' => 5,
)	;0
		3    1024  FE_RESET_R/77             $6=       16?0                 ?9                  	;0
		4    1024  FE_FETCH_R/78             ?0        $6                   16?3                	;9	>>9	<<8
		5    1025  FETCH_DIM_R/81            $8=       16?2                 16?3                	;0
		6    1025  ASSIGN_DIM/147            ?3        16?1                 ?1662263296         	;0
		7    1025  OP_DATA/137               ?0        $8                   ?0                  	;0
		8    1026  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		9    1026  FE_FREE/127               ?0        $6                   ?0                  	;0	<<3
		10   1029  RETURN/62                 ?0        16?1                 ?0                  	;0
		11   1030  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	static public function D15DcE7a49f71fea($F771d40e8cf51e59, $A7d54b094ae83c95)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1031  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1031  RECV_INIT/64              16?1=     ?2                   0:'movie'           	;0
		2    1033  GOTO/253                  ?0        ?18                  ?1                  	;0
		3    1035  IS_NOT_EQUAL/18           #5=       16?1                 2:'live'            	;0
		4    1035  JMPZ/43                   ?0        #5                   ?6                  	;0	>>6
		5    1036  GOTO/253                  ?0        ?11                  ?3                  	;0
		6    1038  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'array_unshift'   	;2	<<4
		7    1038  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		8    1038  SEND_VAL_EX/116           ?96       6:array (
  'id' => '0',
  'cat_order' => 0,
  'title' => 'Most Popular',
) ?2                  	;0
		9    1038  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
		10   1039  GOTO/253                  ?0        ?16                  ?7                  	;0
		11   1041  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'array_unshift'   	;2
		12   1041  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		13   1041  SEND_VAL_EX/116           ?96       10:array (
  'id' => '0',
  'cat_order' => 0,
  'title' => 'All Genres',
) ?2                  	;0
		14   1041  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
		15   1042  GOTO/253                  ?0        ?16                  ?11                 	;0
		16   1045  RETURN/62                 ?0        16?2                 ?0                  	;0
		17   1046  GOTO/253                  ?0        ?55                  ?12                 	;0
		18   1048  ASSIGN/38                 ?3        16?2                 13:array (
)        	;0
		19   1049  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'c721BD954A5f072f'	;1
		20   1049  SEND_VAR/117              ?80       16?1                 ?1                  	;0
		21   1049  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		22   1049  FE_RESET_R/77             $10=      $9                   ?42                 	;0
		23   1049  FE_FETCH_R/78             ?0        $10                  16?3                	;42	>>42	<<41
		24   1050  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'in_array'       	;2
		25   1050  FETCH_DIM_FUNC_ARG/93     $11=      16?3                 18:'id'             	;1
		26   1050  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
		27   1050  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		28   1050  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		29   1050  BOOL_NOT/13               #13=      $12                  ?0                  	;0
		30   1050  JMPZ/43                   ?0        #13                  ?33                 	;0	>>33
		31   1051  NOP/0                     ?0        ?0                   ?0                  	;1
		32   1051  GOTO/253                  ?0        ?41                  ?19                 	;0
		33   1053  FETCH_DIM_R/81            $15=      16?3                 20:'category_name'  	;0	<<30
		34   1053  INIT_ARRAY/71             #16=      $15                  21:'title'          	;14
		35   1053  FETCH_DIM_R/81            $17=      16?3                 22:'id'             	;0
		36   1053  ADD_ARRAY_ELEMENT/72      #16=      $17                  23:'id'             	;0
		37   1053  FETCH_DIM_R/81            $18=      16?3                 24:'cat_order'      	;0
		38   1053  ADD_ARRAY_ELEMENT/72      #16=      $18                  25:'cat_order'      	;0
		39   1053  ASSIGN_DIM/147            ?9        16?2                 ?4397406            	;0
		40   1053  OP_DATA/137               ?0        #16                  ?0                  	;0
		41   1055  JMP/42                    ?0        ?23                  ?0                  	;0	>>23
		42   1055  FE_FREE/127               ?0        $10                  ?0                  	;0	<<22
		43   1058  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'array_column'   	;2
		44   1058  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		45   1058  SEND_VAL_EX/116           ?96       28:'cat_order'       ?2                  	;0
		46   1058  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		47   1058  ASSIGN/38                 ?15       16?4                 $19                 	;0
		48   1059  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'array_multisort'	;3
		49   1059  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		50   1059  FETCH_CONSTANT/99         #21=      ?0                   31:'SORT_ASC'       	;16
		51   1059  SEND_VAL_EX/116           ?96       #21                  ?2                  	;0
		52   1059  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		53   1059  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
		54   1060  GOTO/253                  ?0        ?3                   ?34                 	;0
		55   1062  NOP/0                     ?0        35:NULL              ?0                  	;4294967295
		*/
	}

	static public function eE26F6AdBD1e84e9($A5a4a57a12bb19b3)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1063  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1065  JMP/42                    ?0        ?29                  ?0                  	;0	>>29
		2    1067  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'array_flip'      	;1
		3    1067  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    1067  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		5    1067  ASSIGN/38                 ?1        16?0                 $4                  	;0
		6    1068  ASSIGN/38                 ?2        16?1                 3:array (
)         	;0
		7    1069  FE_RESET_R/77             $7=       16?2                 ?17                 	;0
		8    1069  FE_FETCH_R/78             ?0        $7                   16?3                	;17	>>17	<<16
		9    1070  ISSET_ISEMPTY_DIM_OBJ/115 #8=       16?0                 16?3                	;33554432
		10   1070  BOOL_NOT/13               #9=       #8                   ?0                  	;0
		11   1070  JMPZ/43                   ?0        #9                   ?14                 	;0	>>14
		12   1071  NOP/0                     ?0        ?0                   ?0                  	;1
		13   1071  GOTO/253                  ?0        ?16                  ?4                  	;0
		14   1073  ASSIGN_DIM/147            ?6        16?1                 ?4397406            	;0	<<11
		15   1073  OP_DATA/137               ?0        16?3                 ?0                  	;0
		16   1075  JMP/42                    ?0        ?8                   ?0                  	;0	>>8
		17   1075  FE_FREE/127               ?0        $7                   ?0                  	;0	<<7
		18   1078  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'count'           	;1
		19   1078  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		20   1078  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		21   1078  IS_SMALLER/19             #12=      7:0                  $11                 	;0
		22   1078  BOOL_NOT/13               #13=      #12                  ?0                  	;0
		23   1078  JMPZ/43                   ?0        #13                  ?25                 	;0	>>25
		24   1079  GOTO/253                  ?0        ?27                  ?8                  	;0
		25   1081  GOTO/253                  ?0        ?26                  ?9                  	;0	<<23
		26   1083  RETURN/62                 ?0        16?1                 ?0                  	;0
		27   1086  RETURN/62                 ?0        16?0                 ?0                  	;0
		28   1087  GOTO/253                  ?0        ?64                  ?10                 	;0
		29   1089  FETCH_CONSTANT/99         #14=      ?0                   11:'PLATFORM'       	;16	<<1
		30   1089  IS_NOT_EQUAL/18           #15=      #14                  14:'xui'            	;0
		31   1089  BOOL_NOT/13               #16=      #15                  ?0                  	;0
		32   1089  JMPZ/43                   ?0        #16                  ?34                 	;0	>>34
		33   1090  GOTO/253                  ?0        ?35                  ?15                 	;0
		34   1092  RETURN/62                 ?0        16?0                 ?0                  	;0	<<32
		35   1094  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'count'          	;1
		36   1094  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		37   1094  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		38   1094  IS_SMALLER/19             #18=      18:0                 $17                 	;0
		39   1094  JMPZ_EX/46                #18=      #18                  ?46                 	;0	>>46
		40   1094  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'file_exists'    	;1
		41   1094  FETCH_CONSTANT/99         #19=      ?0                   21:'CACHE_TMP_PATH' 	;16
		42   1094  CONCAT/8                  #20=      #19                  24:'channel_order'  	;0
		43   1094  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0
		44   1094  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		45   1094  BOOL/52                   #18=      $21                  ?0                  	;0
		46   1094  JMPZ_EX/46                #18=      #18                  ?51                 	;0	>>51	<<39
		47   1094  FETCH_STATIC_PROP_R/173   $22=      25:'rSettings'       ?513                	;0
		48   1094  FETCH_DIM_R/81            $23=      $22                  26:'channel_number_type'	;0
		49   1094  IS_NOT_EQUAL/18           #24=      $23                  27:'bouquet'        	;0
		50   1094  BOOL/52                   #18=      #24                  ?0                  	;0
		51   1094  BOOL_NOT/13               #25=      #18                  ?0                  	;0	<<46
		52   1094  JMPZ/43                   ?0        #25                  ?54                 	;0	>>54
		53   1095  GOTO/253                  ?0        ?27                  ?28                 	;0
		54   1097  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 29:'unserialize'    	;1	<<52
		55   1097  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'file_get_contents'	;1
		56   1097  FETCH_CONSTANT/99         #26=      ?0                   33:'CACHE_TMP_PATH' 	;16
		57   1097  CONCAT/8                  #27=      #26                  36:'channel_order'  	;0
		58   1097  SEND_VAL_EX/116           ?80       #27                  ?1                  	;0
		59   1097  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		60   1097  SEND_VAR/117              ?80       $28                  ?1                  	;0
		61   1097  DO_FCALL/60               $29=      ?0                   ?0                  	;0
		62   1097  ASSIGN/38                 ?26       16?2                 $29                 	;0
		63   1098  GOTO/253                  ?0        ?2                   ?37                 	;0
		64   1100  NOP/0                     ?0        38:NULL              ?0                  	;4294967295
		*/
	}

	static public function confirmIDs($Fe53bcd53690fff4)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1101  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1103  ASSIGN/38                 ?0        16?1                 0:array (
)         	;0
		2    1104  FE_RESET_R/77             $4=       16?0                 ?15                 	;0
		3    1104  FE_FETCH_R/78             ?0        $4                   16?2                	;15	>>15	<<14
		4    1105  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'intval'          	;1
		5    1105  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		6    1105  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7    1105  IS_SMALLER/19             #6=       3:0                  $5                  	;0
		8    1105  BOOL_NOT/13               #7=       #6                   ?0                  	;0
		9    1105  JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
		10   1106  NOP/0                     ?0        ?0                   ?0                  	;1
		11   1106  GOTO/253                  ?0        ?14                  ?4                  	;0
		12   1108  ASSIGN_DIM/147            ?5        16?1                 ?4397406            	;0	<<9
		13   1108  OP_DATA/137               ?0        16?2                 ?0                  	;0
		14   1110  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
		15   1110  FE_FREE/127               ?0        $4                   ?0                  	;0	<<2
		16   1113  RETURN/62                 ?0        16?1                 ?0                  	;0
		17   1114  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	static public function ca290dc77E86B74B($E59d0debc75e7be8, $A377ba6c37a0d3c2, $fe63f70cd74f3298, $e9fb21bb0c6585bf, $e4829bf95c7424f6, $Eac3da04c89f6001, $C92f406d98c77d35, $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $Fe53bcd53690fff4)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1115  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1115  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
		2    1115  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
		3    1115  RECV_INIT/64              16?3=     ?4                   2:NULL              	;0
		4    1115  RECV_INIT/64              16?4=     ?5                   3:NULL              	;0
		5    1115  RECV_INIT/64              16?5=     ?6                   4:NULL              	;0
		6    1115  RECV_INIT/64              16?6=     ?7                   5:array (
)         	;0
		7    1115  RECV_INIT/64              16?7=     ?8                   6:0                 	;0
		8    1115  RECV_INIT/64              16?8=     ?9                   7:10                	;0
		9    1115  RECV_INIT/64              16?9=     ?10                  8:false             	;0
		10   1117  GOTO/253                  ?0        ?151                 ?9                  	;0
		11   1120  FETCH_CONSTANT/99         #26=      ?0                   10:'PLATFORM'       	;16
		12   1120  IS_EQUAL/17               #27=      #26                  13:'xui'            	;0
		13   1120  JMPZ/43                   ?0        #27                  ?15                 	;0	>>15
		14   1121  GOTO/253                  ?0        ?18                  ?14                 	;0
		15   1123  ASSIGN_DIM/147            ?2        16?10                ?4397406            	;0	<<13
		16   1123  OP_DATA/137               ?0        15:'`category_id` = ?' ?0                  	;0
		17   1124  GOTO/253                  ?0        ?57                  ?16                 	;0
		18   1126  GOTO/253                  ?0        ?55                  ?17                 	;0
		19   1128  ISSET_ISEMPTY_CV/197      #29=      16?3                 ?0                  	;16777216
		20   1128  JMPZ/43                   ?0        #29                  ?22                 	;0	>>22
		21   1129  GOTO/253                  ?0        ?536                 ?18                 	;0
		22   1131  ASSIGN/38                 ?4        16?11                19:array (
)        	;0	<<20
		23   1132  FE_RESET_R/77             $31=      16?1                 ?37                 	;0
		24   1132  FE_FETCH_R/78             ?0        $31                  16?12               	;37	>>37	<<36
		25   1133  FETCH_DIM_R/81            $32=      16?0                 20:'fav_channels'   	;0
		26   1133  FETCH_DIM_R/81            $33=      $32                  16?12               	;0
		27   1133  FE_RESET_R/77             $34=      $33                  ?35                 	;0
		28   1133  FE_FETCH_R/78             ?0        $34                  16?13               	;35	>>35	<<34
		29   1134  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'intval'         	;1
		30   1134  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
		31   1134  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
		32   1134  ASSIGN_DIM/147            ?9        16?11                ?4410621            	;0
		33   1134  OP_DATA/137               ?0        $36                  ?0                  	;0
		34   1135  JMP/42                    ?0        ?28                  ?0                  	;0	>>28
		35   1135  FE_FREE/127               ?0        $34                  ?0                  	;0	<<27
		36   1138  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
		37   1138  FE_FREE/127               ?0        $31                  ?0                  	;0	<<23
		38   1141  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_intersect'	;2
		39   1141  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
		40   1141  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
		41   1141  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		42   1141  ASSIGN/38                 ?12       16?14                $37                 	;0
		43   1142  GOTO/253                  ?0        ?536                 ?25                 	;0
		44   1145  ASSIGN/38                 ?13       16?15                26:array (
  'count' => 0,
  'streams' => 
  array (
  ),
)	;0
		45   1146  ADD/1                     #40=      16?7                 27:1                	;0
		46   1146  ASSIGN/38                 ?15       16?16                #40                 	;0
		47   1147  ASSIGN/38                 $42=      16?10                28:array (
)        	;0
		48   1147  ASSIGN/38                 ?17       16?17                $42                 	;0
		49   1148  FETCH_STATIC_PROP_R/173   $44=      29:'rSettings'       ?513                	;0
		50   1148  FETCH_DIM_R/81            $45=      $44                  30:'player_hide_incompatible'	;0
		51   1148  BOOL_NOT/13               #46=      $45                  ?0                  	;0
		52   1148  JMPZ/43                   ?0        #46                  ?54                 	;0	>>54
		53   1149  GOTO/253                  ?0        ?328                 ?31                 	;0
		54   1151  GOTO/253                  ?0        ?326                 ?32                 	;0	<<52
		55   1153  ASSIGN_DIM/147            ?21       16?10                ?4397406            	;0
		56   1153  OP_DATA/137               ?0        33:'JSON_CONTAINS(`category_id`, ?, \'$\')' ?0                  	;0
		57   1155  ASSIGN_DIM/147            ?22       16?17                ?0                  	;0
		58   1155  OP_DATA/137               ?0        16?2                 ?0                  	;0
		59   1157  FETCH_DIM_R/81            $49=      16?6                 34:'filter'         	;0
		60   1157  BOOL_NOT/13               #50=      $49                  ?0                  	;0
		61   1157  JMPZ/43                   ?0        #50                  ?63                 	;0	>>63
		62   1158  GOTO/253                  ?0        ?469                 ?35                 	;0
		63   1160  GOTO/253                  ?0        ?455                 ?36                 	;0	<<61
		64   1162  FETCH_CONSTANT/99         #51=      ?0                   37:'PLATFORM'       	;16
		65   1162  IS_EQUAL/17               #52=      #51                  40:'xui'            	;0
		66   1162  JMPZ/43                   ?0        #52                  ?68                 	;0	>>68
		67   1163  GOTO/253                  ?0        ?75                  ?41                 	;0
		68   1165  ROPE_INIT/54              #54=      ?0                   42:'SELECT `id` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` '	;5	<<66
		69   1165  ROPE_ADD/55               #54=      #54                  16?19               	;1
		70   1165  ROPE_ADD/55               #54=      #54                  43:' ORDER BY '     	;2
		71   1165  ROPE_ADD/55               #54=      #54                  16?20               	;3
		72   1165  ROPE_END/56               #53=      #54                  44:';'              	;4
		73   1165  ASSIGN/38                 ?31       16?18                #53                 	;0
		74   1166  GOTO/253                  ?0        ?312                 ?45                 	;0
		75   1168  ROPE_INIT/54              #59=      ?0                   46:'SELECT `id` FROM `streams` '	;5
		76   1168  ROPE_ADD/55               #59=      #59                  16?19               	;1
		77   1168  ROPE_ADD/55               #59=      #59                  47:' ORDER BY '     	;2
		78   1168  ROPE_ADD/55               #59=      #59                  16?20               	;3
		79   1168  ROPE_END/56               #58=      #59                  48:';'              	;4
		80   1168  ASSIGN/38                 ?36       16?18                #58                 	;0
		81   1169  GOTO/253                  ?0        ?312                 ?49                 	;0
		82   1171  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'implode'        	;2
		83   1171  SEND_VAL_EX/116           ?80       52:' AND '           ?1                  	;0
		84   1171  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
		85   1171  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
		86   1171  CONCAT/8                  #64=      53:'WHERE '          $63                 	;0
		87   1171  ASSIGN/38                 ?39       16?19                #64                 	;0
		88   1172  SWITCH_STRING/188         ?0        16?4                 54:array (
  'name' => 102,
  'top' => 109,
  'rating' => 109,
  'added' => 111,
  'release' => 113,
  'number' => 115,
)	;115
		89   1173  CASE/48                   #66=      16?4                 55:'name'           	;0	>>91
		90   1173  JMPNZ/44                  ?0        #66                  ?102                	;0	>>102
		91   1177  CASE/48                   #66=      16?4                 56:'top'            	;0	>>93	<<89
		92   1177  JMPNZ/44                  ?0        #66                  ?109                	;0	>>109
		93   1178  CASE/48                   #66=      16?4                 57:'rating'         	;0	>>95	<<91
		94   1178  JMPNZ/44                  ?0        #66                  ?109                	;0	>>109
		95   1181  CASE/48                   #66=      16?4                 58:'added'          	;0	>>97	<<93
		96   1181  JMPNZ/44                  ?0        #66                  ?111                	;0	>>111
		97   1184  CASE/48                   #66=      16?4                 59:'release'        	;0	>>99	<<95
		98   1184  JMPNZ/44                  ?0        #66                  ?113                	;0	>>113
		99   1187  CASE/48                   #66=      16?4                 60:'number'         	;0	>>101	<<97
		100  1187  JMPNZ/44                  ?0        #66                  ?115                	;0	>>115
		101  1187  JMP/42                    ?0        ?115                 ?0                  	;0	>>115	<<99
		102  1174  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'uasort'         	;2	<<90
		103  1174  FETCH_DIM_FUNC_ARG/93     $67=      16?15                63:'streams'        	;1
		104  1174  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
		105  1174  SEND_VAL_EX/116           ?96       64:'sortArrayStreamName' ?2                  	;0
		106  1174  DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
		107  1175  ASSIGN/38                 ?43       16?20                65:'`stream_display_name` ASC'	;0
		108  1176  GOTO/253                  ?0        ?136                 ?66                 	;0
		109  1179  ASSIGN/38                 ?44       16?20                67:'`rating` DESC'  	;0	<<92,94
		110  1180  GOTO/253                  ?0        ?136                 ?68                 	;0
		111  1182  ASSIGN/38                 ?45       16?20                69:'`added` DESC'   	;0	<<96
		112  1183  GOTO/253                  ?0        ?136                 ?70                 	;0
		113  1185  ASSIGN/38                 ?46       16?20                71:'`year` DESC, `stream_display_name` ASC'	;0	<<98
		114  1186  GOTO/253                  ?0        ?136                 ?72                 	;0
		115  1189  FETCH_STATIC_PROP_R/173   $73=      73:'rSettings'       ?513                	;0	<<100,101
		116  1189  FETCH_DIM_R/81            $74=      $73                  74:'channel_number_type'	;0
		117  1189  IS_NOT_EQUAL/18           #75=      $74                  75:'manual'         	;0
		118  1189  JMPZ_EX/46                #75=      #75                  ?124                	;0	>>124
		119  1189  INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'count'          	;1
		120  1189  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		121  1189  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
		122  1189  IS_SMALLER/19             #77=      78:0                 $76                 	;0
		123  1189  BOOL/52                   #75=      #77                  ?0                  	;0
		124  1189  JMPZ/43                   ?0        #75                  ?126                	;0	>>126	<<118
		125  1190  GOTO/253                  ?0        ?128                 ?79                 	;0
		126  1192  ASSIGN/38                 ?52       16?20                80:'`order` ASC'    	;0	<<124
		127  1193  GOTO/253                  ?0        ?135                 ?81                 	;0
		128  1195  INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'implode'        	;2
		129  1195  SEND_VAL_EX/116           ?80       84:','               ?1                  	;0
		130  1195  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
		131  1195  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
		132  1195  CONCAT/8                  #80=      85:'FIELD(id,'       $79                 	;0
		133  1195  CONCAT/8                  #81=      #80                  86:')'              	;0
		134  1195  ASSIGN/38                 ?56       16?20                #81                 	;0
		135  1197  GOTO/253                  ?0        ?136                 ?87                 	;0
		136  1201  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'count'          	;1
		137  1201  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		138  1201  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
		139  1201  IS_SMALLER/19             #84=      90:0                 $83                 	;0
		140  1201  JMPZ/43                   ?0        #84                  ?142                	;0	>>142
		141  1202  GOTO/253                  ?0        ?427                 ?91                 	;0
		142  1204  GOTO/253                  ?0        ?425                 ?92                 	;0	<<140
		143  1207  ROPE_INIT/54              #86=      ?0                   93:'SELECT (SELECT `stream_info` FROM `streams_servers` WHERE `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `movie_properties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` '	;5
		144  1207  ROPE_ADD/55               #86=      #86                  16?19               	;1
		145  1207  ROPE_ADD/55               #86=      #86                  94:' ORDER BY '     	;2
		146  1207  ROPE_ADD/55               #86=      #86                  16?20               	;3
		147  1207  ROPE_END/56               #85=      #86                  95:';'              	;4
		148  1207  ASSIGN/38                 ?63       16?18                #85                 	;0
		149  1209  GOTO/253                  ?0        ?312                 ?96                 	;0
		150  1211  GOTO/253                  ?0        ?64                  ?97                 	;0
		151  1213  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 98:'verifyLicense'  	;0
		152  1213  DO_FCALL/60               ?64       ?0                   ?0                  	;0
		153  1214  BIND_GLOBAL/168           ?0        16?21                100:'b62d6460eb33ea07'	;0
		154  1215  ASSIGN/38                 ?65       16?22                101:false           	;0
		155  1216  ASSIGN/38                 ?66       16?14                102:array (
)       	;0
		156  1217  FE_RESET_R/77             $93=      16?1                 ?210                	;0
		157  1217  FE_FETCH_R/78             ?0        $93                  16?12               	;210	>>210	<<209
		158  1218  SWITCH_STRING/188         ?0        16?12                103:array (
  'live' => 170,
  'created_live' => 170,
  'movie' => 185,
  'radio_streams' => 193,
  'series' => 201,
)	;209
		159  1219  CASE/48                   #94=      16?12                104:'live'          	;0	>>161
		160  1219  JMPNZ/44                  ?0        #94                  ?170                	;0	>>170
		161  1220  CASE/48                   #94=      16?12                105:'created_live'  	;0	>>163	<<159
		162  1220  JMPNZ/44                  ?0        #94                  ?170                	;0	>>170
		163  1229  CASE/48                   #94=      16?12                106:'movie'         	;0	>>165	<<161
		164  1229  JMPNZ/44                  ?0        #94                  ?185                	;0	>>185
		165  1232  CASE/48                   #94=      16?12                107:'radio_streams' 	;0	>>167	<<163
		166  1232  JMPNZ/44                  ?0        #94                  ?193                	;0	>>193
		167  1235  CASE/48                   #94=      16?12                108:'series'        	;0	>>169	<<165
		168  1235  JMPNZ/44                  ?0        #94                  ?201                	;0	>>201
		169  1235  JMP/42                    ?0        ?209                 ?0                  	;0	>>209	<<167
		170  1221  BOOL_NOT/13               #95=      16?22                ?0                  	;0	<<160,162
		171  1221  JMPZ/43                   ?0        #95                  ?174                	;0	>>174
		172  1222  NOP/0                     ?0        ?0                   ?0                  	;1
		173  1222  GOTO/253                  ?0        ?176                 ?109                	;0
		174  1224  NOP/0                     ?0        ?0                   ?0                  	;1	<<171
		175  1224  GOTO/253                  ?0        ?209                 ?110                	;0
		176  1226  INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'array_merge'   	;2
		177  1226  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		178  1226  FETCH_DIM_FUNC_ARG/93     $96=      16?0                 113:'live_ids'      	;2
		179  1226  SEND_VAR_EX/66            ?96       $96                  ?2                  	;0
		180  1226  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
		181  1226  ASSIGN/38                 ?72       16?14                $97                 	;0
		182  1227  ASSIGN/38                 ?73       16?22                114:true            	;0
		183  1228  NOP/0                     ?0        ?0                   ?0                  	;1
		184  1228  GOTO/253                  ?0        ?209                 ?115                	;0
		185  1230  INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'array_merge'   	;2	<<164
		186  1230  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		187  1230  FETCH_DIM_FUNC_ARG/93     $100=     16?0                 118:'vod_ids'       	;2
		188  1230  SEND_VAR_EX/66            ?96       $100                 ?2                  	;0
		189  1230  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
		190  1230  ASSIGN/38                 ?76       16?14                $101                	;0
		191  1231  NOP/0                     ?0        ?0                   ?0                  	;1
		192  1231  GOTO/253                  ?0        ?209                 ?119                	;0
		193  1233  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'array_merge'   	;2	<<166
		194  1233  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		195  1233  FETCH_DIM_FUNC_ARG/93     $103=     16?0                 122:'radio_ids'     	;2
		196  1233  SEND_VAR_EX/66            ?96       $103                 ?2                  	;0
		197  1233  DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
		198  1233  ASSIGN/38                 ?79       16?14                $104                	;0
		199  1234  NOP/0                     ?0        ?0                   ?0                  	;1
		200  1234  GOTO/253                  ?0        ?209                 ?123                	;0
		201  1236  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'array_merge'   	;2	<<168
		202  1236  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		203  1236  FETCH_DIM_FUNC_ARG/93     $106=     16?0                 126:'episode_ids'   	;2
		204  1236  SEND_VAR_EX/66            ?96       $106                 ?2                  	;0
		205  1236  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
		206  1236  ASSIGN/38                 ?82       16?14                $107                	;0
		207  1237  NOP/0                     ?0        ?0                   ?0                  	;1
		208  1237  GOTO/253                  ?0        ?209                 ?127                	;0
		209  1241  JMP/42                    ?0        ?157                 ?0                  	;0	>>157	<<169
		210  1241  FE_FREE/127               ?0        $93                  ?0                  	;0	<<156
		211  1243  GOTO/253                  ?0        ?44                  ?128                	;0
		212  1245  ISSET_ISEMPTY_CV/197      #109=     16?2                 ?0                  	;16777216
		213  1245  BOOL_NOT/13               #110=     #109                 ?0                  	;0
		214  1245  JMPZ/43                   ?0        #110                 ?216                	;0	>>216
		215  1246  GOTO/253                  ?0        ?11                  ?129                	;0
		216  1248  INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'in_array'      	;2	<<214
		217  1248  SEND_VAL_EX/116           ?80       132:'live'           ?1                  	;0
		218  1248  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		219  1248  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
		220  1248  JMPZ_EX/46                #112=     $111                 ?223                	;0	>>223
		221  1248  ISSET_ISEMPTY_CV/197      #113=     16?5                 ?0                  	;16777216
		222  1248  BOOL/52                   #112=     #113                 ?0                  	;0
		223  1248  BOOL_NOT/13               #114=     #112                 ?0                  	;0	<<220
		224  1248  JMPZ/43                   ?0        #114                 ?226                	;0	>>226
		225  1249  GOTO/253                  ?0        ?534                 ?133                	;0
		226  1251  ASSIGN/38                 ?89       16?7                 134:0               	;0	<<224
		227  1252  ASSIGN/38                 ?90       16?8                 135:200             	;0
		228  1253  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 136:'unserialize'   	;1
		229  1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'file_get_contents'	;1
		230  1253  FETCH_CONSTANT/99         #117=     ?0                   140:'CONTENT_PATH'  	;16
		231  1253  CONCAT/8                  #118=     #117                 143:'live_popular'  	;0
		232  1253  SEND_VAL_EX/116           ?80       #118                 ?1                  	;0
		233  1253  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
		234  1253  SEND_VAR/117              ?80       $119                 ?1                  	;0
		235  1253  DO_FCALL/60               $120=     ?0                   ?0                  	;0
		236  1253  ASSIGN/38                 ?95       16?23                $120                	;0
		237  1254  GOTO/253                  ?0        ?513                 ?144                	;0
		238  1256  FE_RESET_R/77             $122=     16?24                ?294                	;0
		239  1256  FE_FETCH_R/78             ?0        $122                 16?25               	;294	>>294	<<293
		240  1257  NOP/0                     ?0        ?0                   ?0                  	;1
		241  1257  GOTO/253                  ?0        ?253                 ?145                	;0
		242  1260  ASSIGN_DIM/147            ?97       16?25                146:'category_id'   	;0
		243  1260  OP_DATA/137               ?0        16?2                 ?0                  	;0
		244  1263  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'json_decode'   	;2
		245  1263  FETCH_DIM_FUNC_ARG/93     $125=     16?25                150:'stream_info'   	;1
		246  1263  SEND_VAR_EX/66            ?80       $125                 ?1                  	;0
		247  1263  SEND_VAL_EX/116           ?96       151:true             ?2                  	;0
		248  1263  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
		249  1263  ASSIGN_DIM/147            ?98       16?25                147:'stream_info'   	;0
		250  1263  OP_DATA/137               ?0        $126                 ?0                  	;0
		251  1264  NOP/0                     ?0        ?0                   ?0                  	;1
		252  1264  GOTO/253                  ?0        ?285                 ?152                	;0
		253  1266  ASSIGN_DIM/147            ?101      16?25                153:'number'        	;0
		254  1266  OP_DATA/137               ?0        16?16                ?0                  	;0
		255  1267  FETCH_CONSTANT/99         #128=     ?0                   154:'PLATFORM'      	;16
		256  1267  IS_EQUAL/17               #129=     #128                 157:'xui'           	;0
		257  1267  BOOL_NOT/13               #130=     #129                 ?0                  	;0
		258  1267  JMPZ/43                   ?0        #130                 ?261                	;0	>>261
		259  1268  NOP/0                     ?0        ?0                   ?0                  	;1
		260  1268  GOTO/253                  ?0        ?244                 ?158                	;0
		261  1270  INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'in_array'      	;2	<<258
		262  1270  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		263  1270  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'json_decode'   	;2
		264  1270  FETCH_DIM_FUNC_ARG/93     $131=     16?25                163:'category_id'   	;1
		265  1270  SEND_VAR_EX/66            ?80       $131                 ?1                  	;0
		266  1270  SEND_VAL_EX/116           ?96       164:true             ?2                  	;0
		267  1270  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
		268  1270  SEND_VAR_NO_REF_EX/50     ?96       $132                 ?2                  	;0
		269  1270  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
		270  1270  JMPZ/43                   ?0        $133                 ?273                	;0	>>273
		271  1271  NOP/0                     ?0        ?0                   ?0                  	;1
		272  1271  GOTO/253                  ?0        ?242                 ?165                	;0
		273  1273  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'json_decode'   	;2	<<270
		274  1273  FETCH_DIM_FUNC_ARG/93     $135=     16?25                169:'category_id'   	;1
		275  1273  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
		276  1273  SEND_VAL_EX/116           ?96       170:true             ?2                  	;0
		277  1273  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
		278  1273  FETCH_DIM_R/81            $137=     $136                 171:0               	;0
		279  1273  ASSIGN_DIM/147            ?108      16?25                166:'category_id'   	;0
		280  1273  OP_DATA/137               ?0        $137                 ?0                  	;0
		281  1274  NOP/0                     ?0        ?0                   ?0                  	;1
		282  1274  GOTO/253                  ?0        ?244                 ?172                	;0
		283  1275  NOP/0                     ?0        ?0                   ?0                  	;1
		284  1275  GOTO/253                  ?0        ?242                 ?173                	;0
		285  1277  FETCH_DIM_R/81            $139=     16?25                175:'id'            	;0
		286  1277  FETCH_DIM_W/84            $138=     16?15                174:'streams'       	;0
		287  1277  ASSIGN_DIM/147            ?114      $138                 $139                	;0
		288  1277  OP_DATA/137               ?0        16?25                ?0                  	;0
		289  1278  POST_INC/36               #141=     16?16                ?0                  	;0
		290  1278  FREE/70                   ?0        #141                 ?0                  	;0
		291  1280  NOP/0                     ?0        ?0                   ?0                  	;1
		292  1280  GOTO/253                  ?0        ?293                 ?176                	;0
		293  1281  JMP/42                    ?0        ?239                 ?0                  	;0	>>239
		294  1281  FE_FREE/127               ?0        $122                 ?0                  	;0	<<238
		295  1284  RETURN/62                 ?0        16?15                ?0                  	;0
		296  1285  GOTO/253                  ?0        ?299                 ?177                	;0
		297  1287  GOTO/253                  ?0        ?298                 ?178                	;0
		298  1289  RETURN/62                 ?0        16?24                ?0                  	;0
		299  1291  GOTO/253                  ?0        ?546                 ?179                	;0
		300  1293  GOTO/253                  ?0        ?311                 ?180                	;0
		301  1295  ROPE_INIT/54              #143=     ?0                   181:'SELECT `id` FROM `streams` '	;9
		302  1295  ROPE_ADD/55               #143=     #143                 16?19               	;1
		303  1295  ROPE_ADD/55               #143=     #143                 182:' ORDER BY '    	;2
		304  1295  ROPE_ADD/55               #143=     #143                 16?20               	;3
		305  1295  ROPE_ADD/55               #143=     #143                 183:' LIMIT '       	;4
		306  1295  ROPE_ADD/55               #143=     #143                 16?7                	;5
		307  1295  ROPE_ADD/55               #143=     #143                 184:', '            	;6
		308  1295  ROPE_ADD/55               #143=     #143                 16?8                	;7
		309  1295  ROPE_END/56               #142=     #143                 185:';'             	;8
		310  1295  ASSIGN/38                 ?122      16?18                #142                	;0
		311  1298  GOTO/253                  ?0        ?316                 ?186                	;0
		312  1302  GOTO/253                  ?0        ?316                 ?187                	;0
		313  1304  JMPZ/43                   ?0        16?9                 ?315                	;0	>>315
		314  1305  GOTO/253                  ?0        ?384                 ?188                	;0
		315  1307  GOTO/253                  ?0        ?399                 ?189                	;0	<<313
		316  1310  INIT_METHOD_CALL/112      ?0        16?21                190:'query'         	;1
		317  1310  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
		318  1310  SEND_UNPACK/165           ?80       16?17                ?1                  	;0
		319  1310  DO_FCALL/60               ?123      ?0                   ?0                  	;0
		320  1311  INIT_METHOD_CALL/112      ?0        16?21                192:'get_rows'      	;0
		321  1311  DO_FCALL/60               $150=     ?0                   ?0                  	;0
		322  1311  ASSIGN/38                 ?125      16?24                $150                	;0
		323  1313  JMPZ/43                   ?0        16?9                 ?325                	;0	>>325
		324  1314  GOTO/253                  ?0        ?297                 ?194                	;0
		325  1316  GOTO/253                  ?0        ?238                 ?195                	;0	<<323
		326  1318  ASSIGN_DIM/147            ?126      16?10                ?4397406            	;0
		327  1318  OP_DATA/137               ?0        196:'(SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1' ?0                  	;0
		328  1320  INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'count'         	;1
		329  1320  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		330  1320  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
		331  1320  IS_SMALLER/19             #154=     199:0                $153                	;0
		332  1320  BOOL_NOT/13               #155=     #154                 ?0                  	;0
		333  1320  JMPZ/43                   ?0        #155                 ?335                	;0	>>335
		334  1321  GOTO/253                  ?0        ?346                 ?200                	;0
		335  1323  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'implode'       	;2	<<333
		336  1323  SEND_VAL_EX/116           ?80       203:','              ?1                  	;0
		337  1323  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 204:'b6DD3D9B5b90653B'	;1
		338  1323  SEND_VAR/117              ?80       16?1                 ?1                  	;0
		339  1323  DO_FCALL/60               $157=     ?0                   ?0                  	;0
		340  1323  SEND_VAR_NO_REF_EX/50     ?96       $157                 ?2                  	;0
		341  1323  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
		342  1323  CONCAT/8                  #159=     206:'`type` IN ('    $158                	;0
		343  1323  CONCAT/8                  #160=     #159                 207:')'             	;0
		344  1323  ASSIGN_DIM/147            ?130      16?10                ?4397406            	;0
		345  1323  OP_DATA/137               ?0        #160                 ?0                  	;0
		346  1325  GOTO/253                  ?0        ?212                 ?208                	;0
		347  1327  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'is_array'      	;1
		348  1327  FETCH_DIM_FUNC_ARG/93     $161=     16?6                 211:'year_range'    	;1
		349  1327  SEND_VAR_EX/66            ?80       $161                 ?1                  	;0
		350  1327  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
		351  1327  BOOL_NOT/13               #163=     $162                 ?0                  	;0
		352  1327  JMPZ/43                   ?0        #163                 ?354                	;0	>>354
		353  1328  GOTO/253                  ?0        ?364                 ?212                	;0
		354  1330  ASSIGN_DIM/147            ?138      16?10                ?4397406            	;0	<<352
		355  1330  OP_DATA/137               ?0        213:'(`year` >= ? AND `year` <= ?)' ?0                  	;0
		356  1331  FETCH_DIM_R/81            $166=     16?6                 214:'year_range'    	;0
		357  1331  FETCH_DIM_R/81            $167=     $166                 215:0               	;0
		358  1331  ASSIGN_DIM/147            ?139      16?17                ?0                  	;0
		359  1331  OP_DATA/137               ?0        $167                 ?0                  	;0
		360  1332  FETCH_DIM_R/81            $169=     16?6                 216:'year_range'    	;0
		361  1332  FETCH_DIM_R/81            $170=     $169                 217:1               	;0
		362  1332  ASSIGN_DIM/147            ?142      16?17                ?0                  	;0
		363  1332  OP_DATA/137               ?0        $170                 ?0                  	;0
		364  1334  GOTO/253                  ?0        ?365                 ?218                	;0
		365  1336  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'is_array'      	;1
		366  1336  FETCH_DIM_FUNC_ARG/93     $171=     16?6                 221:'rating_range'  	;1
		367  1336  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
		368  1336  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
		369  1336  BOOL_NOT/13               #173=     $172                 ?0                  	;0
		370  1336  JMPZ/43                   ?0        #173                 ?372                	;0	>>372
		371  1337  GOTO/253                  ?0        ?382                 ?222                	;0
		372  1339  ASSIGN_DIM/147            ?148      16?10                ?4397406            	;0	<<370
		373  1339  OP_DATA/137               ?0        223:'(`rating` >= ? AND `rating` <= ?)' ?0                  	;0
		374  1340  FETCH_DIM_R/81            $176=     16?6                 224:'rating_range'  	;0
		375  1340  FETCH_DIM_R/81            $177=     $176                 225:0               	;0
		376  1340  ASSIGN_DIM/147            ?149      16?17                ?0                  	;0
		377  1340  OP_DATA/137               ?0        $177                 ?0                  	;0
		378  1341  FETCH_DIM_R/81            $179=     16?6                 226:'rating_range'  	;0
		379  1341  FETCH_DIM_R/81            $180=     $179                 227:1               	;0
		380  1341  ASSIGN_DIM/147            ?152      16?17                ?0                  	;0
		381  1341  OP_DATA/137               ?0        $180                 ?0                  	;0
		382  1343  GOTO/253                  ?0        ?474                 ?228                	;0
		383  1346  GOTO/253                  ?0        ?311                 ?229                	;0
		384  1348  FETCH_CONSTANT/99         #181=     ?0                   230:'PLATFORM'      	;16
		385  1348  IS_EQUAL/17               #182=     #181                 233:'xui'           	;0
		386  1348  JMPZ/43                   ?0        #182                 ?388                	;0	>>388
		387  1349  GOTO/253                  ?0        ?301                 ?234                	;0
		388  1351  ROPE_INIT/54              #184=     ?0                   235:'SELECT `id` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` '	;9	<<386
		389  1351  ROPE_ADD/55               #184=     #184                 16?19               	;1
		390  1351  ROPE_ADD/55               #184=     #184                 236:' ORDER BY '    	;2
		391  1351  ROPE_ADD/55               #184=     #184                 16?20               	;3
		392  1351  ROPE_ADD/55               #184=     #184                 237:' LIMIT '       	;4
		393  1351  ROPE_ADD/55               #184=     #184                 16?7                	;5
		394  1351  ROPE_ADD/55               #184=     #184                 238:', '            	;6
		395  1351  ROPE_ADD/55               #184=     #184                 16?8                	;7
		396  1351  ROPE_END/56               #183=     #184                 239:';'             	;8
		397  1351  ASSIGN/38                 ?163      16?18                #183                	;0
		398  1352  GOTO/253                  ?0        ?300                 ?240                	;0
		399  1354  FETCH_CONSTANT/99         #190=     ?0                   241:'PLATFORM'      	;16
		400  1354  IS_EQUAL/17               #191=     #190                 244:'xui'           	;0
		401  1354  JMPZ/43                   ?0        #191                 ?403                	;0	>>403
		402  1355  GOTO/253                  ?0        ?414                 ?245                	;0
		403  1357  ROPE_INIT/54              #193=     ?0                   246:'SELECT (SELECT `stream_info` FROM `streams_sys` WHERE `streams_sys`.`pid` IS NOT NULL AND `streams_sys`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `title`, `movie_propeties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` '	;9	<<401
		404  1357  ROPE_ADD/55               #193=     #193                 16?19               	;1
		405  1357  ROPE_ADD/55               #193=     #193                 247:' ORDER BY '    	;2
		406  1357  ROPE_ADD/55               #193=     #193                 16?20               	;3
		407  1357  ROPE_ADD/55               #193=     #193                 248:' LIMIT '       	;4
		408  1357  ROPE_ADD/55               #193=     #193                 16?7                	;5
		409  1357  ROPE_ADD/55               #193=     #193                 249:', '            	;6
		410  1357  ROPE_ADD/55               #193=     #193                 16?8                	;7
		411  1357  ROPE_END/56               #192=     #193                 250:';'             	;8
		412  1357  ASSIGN/38                 ?172      16?18                #192                	;0
		413  1358  GOTO/253                  ?0        ?383                 ?251                	;0
		414  1360  ROPE_INIT/54              #200=     ?0                   252:'SELECT (SELECT `stream_info` FROM `streams_servers` WHERE `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `movie_properties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` '	;9
		415  1360  ROPE_ADD/55               #200=     #200                 16?19               	;1
		416  1360  ROPE_ADD/55               #200=     #200                 253:' ORDER BY '    	;2
		417  1360  ROPE_ADD/55               #200=     #200                 16?20               	;3
		418  1360  ROPE_ADD/55               #200=     #200                 254:' LIMIT '       	;4
		419  1360  ROPE_ADD/55               #200=     #200                 16?7                	;5
		420  1360  ROPE_ADD/55               #200=     #200                 255:', '            	;6
		421  1360  ROPE_ADD/55               #200=     #200                 16?8                	;7
		422  1360  ROPE_END/56               #199=     #200                 256:';'             	;8
		423  1360  ASSIGN/38                 ?179      16?18                #199                	;0
		424  1361  GOTO/253                  ?0        ?383                 ?257                	;0
		425  1363  ASSIGN/38                 ?180      16?24                258:array (
)       	;0
		426  1364  GOTO/253                  ?0        ?323                 ?259                	;0
		427  1366  FETCH_CONSTANT/99         #207=     ?0                   260:'PLATFORM'      	;16
		428  1366  IS_EQUAL/17               #208=     #207                 263:'xui'           	;0
		429  1366  JMPZ/43                   ?0        #208                 ?431                	;0	>>431
		430  1367  GOTO/253                  ?0        ?500                 ?264                	;0
		431  1369  INIT_METHOD_CALL/112      ?0        16?21                265:'query'         	;1	<<429
		432  1369  ROPE_INIT/54              #210=     ?0                   267:'SELECT COUNT(`id`) AS `count` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` '	;3
		433  1369  ROPE_ADD/55               #210=     #210                 16?19               	;1
		434  1369  ROPE_END/56               #209=     #210                 268:';'             	;2
		435  1369  SEND_VAL_EX/116           ?80       #209                 ?1                  	;0
		436  1369  SEND_UNPACK/165           ?80       16?17                ?1                  	;0
		437  1369  DO_FCALL/60               ?186      ?0                   ?0                  	;0
		438  1370  GOTO/253                  ?0        ?499                 ?269                	;0
		439  1372  JMPZ/43                   ?0        16?8                 ?441                	;0	>>441
		440  1373  GOTO/253                  ?0        ?313                 ?270                	;0
		441  1375  JMPZ/43                   ?0        16?9                 ?443                	;0	>>443	<<439
		442  1376  GOTO/253                  ?0        ?150                 ?271                	;0
		443  1378  FETCH_CONSTANT/99         #213=     ?0                   272:'PLATFORM'      	;16	<<441
		444  1378  IS_EQUAL/17               #214=     #213                 275:'xui'           	;0
		445  1378  JMPZ/43                   ?0        #214                 ?447                	;0	>>447
		446  1379  GOTO/253                  ?0        ?143                 ?276                	;0
		447  1381  ROPE_INIT/54              #216=     ?0                   277:'SELECT (SELECT `stream_info` FROM `streams_sys` WHERE `streams_sys`.`pid` IS NOT NULL AND `streams_sys`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `title`, `movie_propeties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` '	;5	<<445
		448  1381  ROPE_ADD/55               #216=     #216                 16?19               	;1
		449  1381  ROPE_ADD/55               #216=     #216                 278:' ORDER BY '    	;2
		450  1381  ROPE_ADD/55               #216=     #216                 16?20               	;3
		451  1381  ROPE_END/56               #215=     #216                 279:';'             	;4
		452  1381  ASSIGN/38                 ?193      16?18                #215                	;0
		453  1382  GOTO/253                  ?0        ?149                 ?280                	;0
		454  1383  GOTO/253                  ?0        ?143                 ?281                	;0
		455  1385  FETCH_DIM_R/81            $220=     16?6                 282:'filter'        	;0
		456  1385  SWITCH_STRING/188         ?0        $220                 283:array (
  'all' => 462,
  'timeshift' => 464,
)	;468
		457  1386  CASE/48                   #221=     $220                 284:'all'           	;0	>>459
		458  1386  JMPNZ/44                  ?0        #221                 ?462                	;0	>>462
		459  1388  CASE/48                   #221=     $220                 285:'timeshift'     	;0	>>461	<<457
		460  1388  JMPNZ/44                  ?0        #221                 ?464                	;0	>>464
		461  1388  JMP/42                    ?0        ?468                 ?0                  	;0	>>468	<<459
		462  1387  FREE/70                   ?0        $220                 ?14                 	;1	<<458
		463  1387  GOTO/253                  ?0        ?469                 ?286                	;0
		464  1389  ASSIGN_DIM/147            ?196      16?10                ?1660155136         	;0	<<460
		465  1389  OP_DATA/137               ?0        287:'`tv_archive_duration` > 0 AND `tv_archive_server_id` > 0' ?0                  	;0
		466  1390  FREE/70                   ?0        $220                 ?14                 	;1
		467  1390  GOTO/253                  ?0        ?469                 ?288                	;0
		468  1390  FREE/70                   ?0        $220                 ?0                  	;0	<<461
		469  1395  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 289:'EE26f6ADBd1e84E9'	;1
		470  1395  SEND_VAR/117              ?80       16?14                ?1                  	;0
		471  1395  DO_FCALL/60               $223=     ?0                   ?0                  	;0
		472  1395  ASSIGN/38                 ?198      16?14                $223                	;0
		473  1396  GOTO/253                  ?0        ?19                  ?291                	;0
		474  1398  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 292:'confirmIDs'    	;1
		475  1398  SEND_VAR/117              ?80       16?14                ?1                  	;0
		476  1398  DO_FCALL/60               $225=     ?0                   ?0                  	;0
		477  1398  ASSIGN/38                 ?200      16?14                $225                	;0
		478  1399  INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'count'         	;1
		479  1399  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		480  1399  DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
		481  1399  IS_EQUAL/17               #228=     $227                 296:0               	;0
		482  1399  BOOL_NOT/13               #229=     #228                 ?0                  	;0
		483  1399  JMPZ/43                   ?0        #229                 ?485                	;0	>>485
		484  1400  GOTO/253                  ?0        ?486                 ?297                	;0
		485  1402  RETURN/62                 ?0        16?15                ?0                  	;0	<<483
		486  1404  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'implode'       	;2
		487  1404  SEND_VAL_EX/116           ?80       300:','              ?1                  	;0
		488  1404  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'array_map'     	;2
		489  1404  SEND_VAL_EX/116           ?80       303:'intval'         ?1                  	;0
		490  1404  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
		491  1404  DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
		492  1404  SEND_VAR_NO_REF_EX/50     ?96       $231                 ?2                  	;0
		493  1404  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
		494  1404  CONCAT/8                  #233=     304:'`id` IN ('      $232                	;0
		495  1404  CONCAT/8                  #234=     #233                 305:')'             	;0
		496  1404  ASSIGN_DIM/147            ?204      16?10                ?4397406            	;0
		497  1404  OP_DATA/137               ?0        #234                 ?0                  	;0
		498  1405  GOTO/253                  ?0        ?82                  ?306                	;0
		499  1407  GOTO/253                  ?0        ?507                 ?307                	;0
		500  1409  INIT_METHOD_CALL/112      ?0        16?21                308:'query'         	;1
		501  1409  ROPE_INIT/54              #236=     ?0                   310:'SELECT COUNT(`id`) AS `count` FROM `streams` '	;3
		502  1409  ROPE_ADD/55               #236=     #236                 16?19               	;1
		503  1409  ROPE_END/56               #235=     #236                 311:';'             	;2
		504  1409  SEND_VAL_EX/116           ?80       #235                 ?1                  	;0
		505  1409  SEND_UNPACK/165           ?80       16?17                ?1                  	;0
		506  1409  DO_FCALL/60               ?212      ?0                   ?0                  	;0
		507  1411  INIT_METHOD_CALL/112      ?0        16?21                313:'get_row'       	;0
		508  1411  DO_FCALL/60               $240=     ?0                   ?0                  	;0
		509  1411  FETCH_DIM_R/81            $241=     $240                 315:'count'         	;0
		510  1411  ASSIGN_DIM/147            ?213      16?15                312:'count'         	;0
		511  1411  OP_DATA/137               ?0        $241                 ?0                  	;0
		512  1412  GOTO/253                  ?0        ?439                 ?316                	;0
		513  1414  JMPZ_EX/46                #242=     16?23                ?519                	;0	>>519
		514  1414  INIT_FCALL_BY_NAME/59     ?0        ?0                   317:'count'         	;1
		515  1414  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
		516  1414  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
		517  1414  IS_SMALLER/19             #244=     319:0                $243                	;0
		518  1414  BOOL/52                   #242=     #244                 ?0                  	;0
		519  1414  BOOL_NOT/13               #245=     #242                 ?0                  	;0	<<513
		520  1414  JMPZ/43                   ?0        #245                 ?522                	;0	>>522
		521  1415  GOTO/253                  ?0        ?534                 ?320                	;0
		522  1417  INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'implode'       	;2	<<520
		523  1417  SEND_VAL_EX/116           ?80       323:','              ?1                  	;0
		524  1417  INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'array_map'     	;2
		525  1417  SEND_VAL_EX/116           ?80       326:'intval'         ?1                  	;0
		526  1417  SEND_VAR_EX/66            ?96       16?23                ?2                  	;0
		527  1417  DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
		528  1417  SEND_VAR_NO_REF_EX/50     ?96       $247                 ?2                  	;0
		529  1417  DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
		530  1417  CONCAT/8                  #249=     327:'`id` IN ('      $248                	;0
		531  1417  CONCAT/8                  #250=     #249                 328:')'             	;0
		532  1417  ASSIGN_DIM/147            ?220      16?10                ?4397406            	;0
		533  1417  OP_DATA/137               ?0        #250                 ?0                  	;0
		534  1420  GOTO/253                  ?0        ?59                  ?329                	;0
		535  1421  GOTO/253                  ?0        ?11                  ?330                	;0
		536  1424  ISSET_ISEMPTY_CV/197      #251=     16?5                 ?0                  	;16777216
		537  1424  JMPZ/43                   ?0        #251                 ?539                	;0	>>539
		538  1425  GOTO/253                  ?0        ?545                 ?331                	;0
		539  1427  ASSIGN_DIM/147            ?226      16?10                ?4397406            	;0	<<537
		540  1427  OP_DATA/137               ?0        332:'`stream_display_name` LIKE ?' ?0                  	;0
		541  1428  CONCAT/8                  #254=     333:'%'              16?5                	;0
		542  1428  CONCAT/8                  #255=     #254                 334:'%'             	;0
		543  1428  ASSIGN_DIM/147            ?227      16?17                ?0                  	;0
		544  1428  OP_DATA/137               ?0        #255                 ?0                  	;0
		545  1430  GOTO/253                  ?0        ?347                 ?335                	;0
		546  1432  NOP/0                     ?0        336:NULL             ?0                  	;4294967295
		*/
	}

	static public function AD7C990925f39c05($E59d0debc75e7be8, $fe63f70cd74f3298, $e9fb21bb0c6585bf, $e4829bf95c7424f6, $Eac3da04c89f6001, $C92f406d98c77d35, $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $D2c5c3f4714d7e74)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1433  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1433  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2    1433  RECV_INIT/64              16?2=     ?3                   1:NULL              	;0
		3    1433  RECV_INIT/64              16?3=     ?4                   2:NULL              	;0
		4    1433  RECV_INIT/64              16?4=     ?5                   3:NULL              	;0
		5    1433  RECV_INIT/64              16?5=     ?6                   4:array (
)         	;0
		6    1433  RECV_INIT/64              16?6=     ?7                   5:0                 	;0
		7    1433  RECV_INIT/64              16?7=     ?8                   6:10                	;0
		8    1433  RECV_INIT/64              16?8=     ?9                   7:NULL              	;0
		9    1435  GOTO/253                  ?0        ?314                 ?8                  	;0
		10   1438  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'implode'         	;2
		11   1438  SEND_VAL_EX/116           ?80       11:','               ?1                  	;0
		12   1438  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'array_map'      	;2
		13   1438  SEND_VAL_EX/116           ?80       14:'intval'          ?1                  	;0
		14   1438  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
		15   1438  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		16   1438  SEND_VAR_NO_REF_EX/50     ?96       $21                  ?2                  	;0
		17   1438  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		18   1438  CONCAT/8                  #23=      15:'`id` IN ('       $22                 	;0
		19   1438  CONCAT/8                  #24=      #23                  16:')'              	;0
		20   1438  ASSIGN_DIM/147            ?0        16?9                 ?0                  	;0
		21   1438  OP_DATA/137               ?0        #24                  ?0                  	;0
		22   1439  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'implode'        	;2
		23   1439  SEND_VAL_EX/116           ?80       19:' AND '           ?1                  	;0
		24   1439  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
		25   1439  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		26   1439  CONCAT/8                  #26=      20:'WHERE '          $25                 	;0
		27   1439  ASSIGN/38                 ?7        16?11                #26                 	;0
		28   1440  SWITCH_STRING/188         ?0        16?3                 21:array (
  'name' => 42,
  'top' => 49,
  'rating' => 49,
  'added' => 51,
  'release' => 59,
  'number' => 67,
)	;67
		29   1441  CASE/48                   #28=      16?3                 22:'name'           	;0	>>31
		30   1441  JMPNZ/44                  ?0        #28                  ?42                 	;0	>>42
		31   1445  CASE/48                   #28=      16?3                 23:'top'            	;0	>>33	<<29
		32   1445  JMPNZ/44                  ?0        #28                  ?49                 	;0	>>49
		33   1446  CASE/48                   #28=      16?3                 24:'rating'         	;0	>>35	<<31
		34   1446  JMPNZ/44                  ?0        #28                  ?49                 	;0	>>49
		35   1449  CASE/48                   #28=      16?3                 25:'added'          	;0	>>37	<<33
		36   1449  JMPNZ/44                  ?0        #28                  ?51                 	;0	>>51
		37   1459  CASE/48                   #28=      16?3                 26:'release'        	;0	>>39	<<35
		38   1459  JMPNZ/44                  ?0        #28                  ?59                 	;0	>>59
		39   1469  CASE/48                   #28=      16?3                 27:'number'         	;0	>>41	<<37
		40   1469  JMPNZ/44                  ?0        #28                  ?67                 	;0	>>67
		41   1469  JMP/42                    ?0        ?67                  ?0                  	;0	>>67	<<39
		42   1442  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'uasort'         	;2	<<30
		43   1442  FETCH_DIM_FUNC_ARG/93     $29=      16?12                30:'streams'        	;1
		44   1442  SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
		45   1442  SEND_VAL_EX/116           ?96       31:'sortArrayStreamName' ?2                  	;0
		46   1442  DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
		47   1443  ASSIGN/38                 ?11       16?13                32:'`title` ASC'    	;0
		48   1444  GOTO/253                  ?0        ?323                 ?33                 	;0
		49   1447  ASSIGN/38                 ?12       16?13                34:'`rating` DESC'  	;0	<<32,34
		50   1448  GOTO/253                  ?0        ?323                 ?35                 	;0
		51   1450  FETCH_CONSTANT/99         #33=      ?0                   36:'PLATFORM'       	;16	<<36
		52   1450  IS_EQUAL/17               #34=      #33                  39:'xui'            	;0
		53   1450  JMPZ/43                   ?0        #34                  ?55                 	;0	>>55
		54   1451  GOTO/253                  ?0        ?57                  ?40                 	;0
		55   1453  ASSIGN/38                 ?15       16?13                41:'`id` DESC'      	;0	<<53
		56   1454  GOTO/253                  ?0        ?58                  ?42                 	;0
		57   1456  ASSIGN/38                 ?16       16?13                43:'`last_modified` DESC'	;0
		58   1458  GOTO/253                  ?0        ?323                 ?44                 	;0
		59   1460  FETCH_CONSTANT/99         #37=      ?0                   45:'PLATFORM'       	;16	<<38
		60   1460  IS_EQUAL/17               #38=      #37                  48:'xui'            	;0
		61   1460  JMPZ/43                   ?0        #38                  ?63                 	;0	>>63
		62   1461  GOTO/253                  ?0        ?65                  ?49                 	;0
		63   1463  ASSIGN/38                 ?19       16?13                50:'`releaseDate` DESC'	;0	<<61
		64   1464  GOTO/253                  ?0        ?66                  ?51                 	;0
		65   1466  ASSIGN/38                 ?20       16?13                52:'`release_date` DESC'	;0
		66   1468  GOTO/253                  ?0        ?323                 ?53                 	;0
		67   1471  FETCH_CONSTANT/99         #41=      ?0                   54:'PLATFORM'       	;16	<<40,41
		68   1471  IS_EQUAL/17               #42=      #41                  57:'xui'            	;0
		69   1471  JMPZ_EX/46                #42=      #42                  ?73                 	;0	>>73
		70   1471  FETCH_STATIC_PROP_R/173   $43=      58:'rSettings'       59:'XUI'            	;0
		71   1471  FETCH_DIM_R/81            $44=      $43                  61:'vod_sort_newest'	;0
		72   1471  BOOL/52                   #42=      $44                  ?0                  	;0
		73   1471  JMPZ/43                   ?0        #42                  ?75                 	;0	>>75	<<69
		74   1472  GOTO/253                  ?0        ?83                  ?62                 	;0
		75   1474  INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'implode'        	;2	<<73
		76   1474  SEND_VAL_EX/116           ?80       65:','               ?1                  	;0
		77   1474  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
		78   1474  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
		79   1474  CONCAT/8                  #46=      66:'FIELD(id,'       $45                 	;0
		80   1474  CONCAT/8                  #47=      #46                  67:')'              	;0
		81   1474  ASSIGN/38                 ?28       16?13                #47                 	;0
		82   1475  GOTO/253                  ?0        ?84                  ?68                 	;0
		83   1477  ASSIGN/38                 ?29       16?13                69:'`last_modified` DESC'	;0
		84   1479  GOTO/253                  ?0        ?323                 ?70                 	;0
		85   1482  GOTO/253                  ?0        ?323                 ?71                 	;0
		86   1484  FETCH_CONSTANT/99         #50=      ?0                   72:'PLATFORM'       	;16
		87   1484  IS_EQUAL/17               #51=      #50                  75:'xui'            	;0
		88   1484  JMPZ/43                   ?0        #51                  ?90                 	;0	>>90
		89   1485  GOTO/253                  ?0        ?93                  ?76                 	;0
		90   1487  ASSIGN_DIM/147            ?32       16?9                 ?4397406            	;0	<<88
		91   1487  OP_DATA/137               ?0        77:'`category_id` = ?' ?0                  	;0
		92   1488  GOTO/253                  ?0        ?132                 ?78                 	;0
		93   1490  ASSIGN_DIM/147            ?33       16?9                 ?0                  	;0
		94   1490  OP_DATA/137               ?0        79:'JSON_CONTAINS(`category_id`, ?, \'$\')' ?0                  	;0
		95   1491  GOTO/253                  ?0        ?132                 ?80                 	;0
		96   1494  FETCH_CONSTANT/99         #54=      ?0                   81:'PLATFORM'       	;16
		97   1494  IS_EQUAL/17               #55=      #54                  84:'xui'            	;0
		98   1494  JMPZ/43                   ?0        #55                  ?100                	;0	>>100
		99   1495  GOTO/253                  ?0        ?111                 ?85                 	;0
		100  1497  ROPE_INIT/54              #57=      ?0                   86:'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `releaseDate`, `tmdb_id`, `seasons`, `backdrop_path` FROM `series` '	;9	<<98
		101  1497  ROPE_ADD/55               #57=      #57                  16?11               	;1
		102  1497  ROPE_ADD/55               #57=      #57                  87:' ORDER BY '     	;2
		103  1497  ROPE_ADD/55               #57=      #57                  16?13               	;3
		104  1497  ROPE_ADD/55               #57=      #57                  88:' LIMIT '        	;4
		105  1497  ROPE_ADD/55               #57=      #57                  16?6                	;5
		106  1497  ROPE_ADD/55               #57=      #57                  89:', '             	;6
		107  1497  ROPE_ADD/55               #57=      #57                  16?7                	;7
		108  1497  ROPE_END/56               #56=      #57                  90:';'              	;8
		109  1497  ASSIGN/38                 ?42       16?14                #56                 	;0
		110  1498  GOTO/253                  ?0        ?267                 ?91                 	;0
		111  1500  GOTO/253                  ?0        ?257                 ?92                 	;0
		112  1502  FETCH_CONSTANT/99         #63=      ?0                   93:'PLATFORM'       	;16
		113  1502  IS_EQUAL/17               #64=      #63                  96:'xui'            	;0
		114  1502  JMPZ/43                   ?0        #64                  ?116                	;0	>>116
		115  1503  GOTO/253                  ?0        ?124                 ?97                 	;0
		116  1505  INIT_METHOD_CALL/112      ?0        16?15                98:'query'          	;1	<<114
		117  1505  ROPE_INIT/54              #66=      ?0                   100:'SELECT COUNT(`id`) AS `count` FROM `series` '	;3
		118  1505  ROPE_ADD/55               #66=      #66                  16?11               	;1
		119  1505  ROPE_END/56               #65=      #66                  101:';'             	;2
		120  1505  SEND_VAL_EX/116           ?80       #65                  ?1                  	;0
		121  1505  SEND_UNPACK/165           ?80       16?16                ?1                  	;0
		122  1505  DO_FCALL/60               ?48       ?0                   ?0                  	;0
		123  1506  GOTO/253                  ?0        ?230                 ?102                	;0
		124  1508  INIT_METHOD_CALL/112      ?0        16?15                103:'query'         	;1
		125  1508  ROPE_INIT/54              #70=      ?0                   105:'SELECT COUNT(`id`) AS `count` FROM `streams_series` '	;3
		126  1508  ROPE_ADD/55               #70=      #70                  16?11               	;1
		127  1508  ROPE_END/56               #69=      #70                  106:';'             	;2
		128  1508  SEND_VAL_EX/116           ?80       #69                  ?1                  	;0
		129  1508  SEND_UNPACK/165           ?80       16?16                ?1                  	;0
		130  1508  DO_FCALL/60               ?52       ?0                   ?0                  	;0
		131  1509  GOTO/253                  ?0        ?230                 ?107                	;0
		132  1512  ASSIGN_DIM/147            ?53       16?16                ?5126               	;0
		133  1512  OP_DATA/137               ?0        16?1                 ?0                  	;0
		134  1514  INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'is_array'      	;1
		135  1514  FETCH_DIM_FUNC_ARG/93     $74=      16?5                 110:'year_range'    	;1
		136  1514  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
		137  1514  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
		138  1514  BOOL_NOT/13               #76=      $75                  ?0                  	;0
		139  1514  JMPZ/43                   ?0        #76                  ?141                	;0	>>141
		140  1515  GOTO/253                  ?0        ?206                 ?111                	;0
		141  1517  FETCH_CONSTANT/99         #77=      ?0                   112:'PLATFORM'      	;16	<<139
		142  1517  IS_EQUAL/17               #78=      #77                  115:'xui'           	;0
		143  1517  JMPZ/43                   ?0        #78                  ?145                	;0	>>145
		144  1518  GOTO/253                  ?0        ?311                 ?116                	;0
		145  1520  GOTO/253                  ?0        ?308                 ?117                	;0	<<143
		146  1523  FE_RESET_R/77             $79=      16?17                ?195                	;0
		147  1523  FE_FETCH_R/78             ?0        $79                  16?18               	;195	>>195	<<194
		148  1524  NOP/0                     ?0        ?0                   ?0                  	;1
		149  1524  GOTO/253                  ?0        ?150                 ?118                	;0
		150  1526  ASSIGN_DIM/147            ?60       16?18                119:'number'        	;0
		151  1526  OP_DATA/137               ?0        16?19                ?0                  	;0
		152  1527  FETCH_CONSTANT/99         #81=      ?0                   120:'PLATFORM'      	;16
		153  1527  IS_EQUAL/17               #82=      #81                  123:'xui'           	;0
		154  1527  BOOL_NOT/13               #83=      #82                  ?0                  	;0
		155  1527  JMPZ/43                   ?0        #83                  ?158                	;0	>>158
		156  1528  NOP/0                     ?0        ?0                   ?0                  	;1
		157  1528  GOTO/253                  ?0        ?184                 ?124                	;0
		158  1530  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'in_array'      	;2	<<155
		159  1530  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		160  1530  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'json_decode'   	;2
		161  1530  FETCH_DIM_FUNC_ARG/93     $84=      16?18                129:'category_id'   	;1
		162  1530  SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
		163  1530  SEND_VAL_EX/116           ?96       130:true             ?2                  	;0
		164  1530  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
		165  1530  SEND_VAR_NO_REF_EX/50     ?96       $85                  ?2                  	;0
		166  1530  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
		167  1530  JMPZ/43                   ?0        $86                  ?170                	;0	>>170
		168  1531  NOP/0                     ?0        ?0                   ?0                  	;1
		169  1531  GOTO/253                  ?0        ?182                 ?131                	;0
		170  1533  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'json_decode'   	;2	<<167
		171  1533  FETCH_DIM_FUNC_ARG/93     $88=      16?18                135:'category_id'   	;1
		172  1533  SEND_VAR_EX/66            ?80       $88                  ?1                  	;0
		173  1533  SEND_VAL_EX/116           ?96       136:true             ?2                  	;0
		174  1533  DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
		175  1533  FETCH_DIM_R/81            $90=      $89                  137:0               	;0
		176  1533  ASSIGN_DIM/147            ?67       16?18                132:'category_id'   	;0
		177  1533  OP_DATA/137               ?0        $90                  ?0                  	;0
		178  1534  NOP/0                     ?0        ?0                   ?0                  	;1
		179  1534  GOTO/253                  ?0        ?184                 ?138                	;0
		180  1535  NOP/0                     ?0        ?0                   ?0                  	;1
		181  1535  GOTO/253                  ?0        ?182                 ?139                	;0
		182  1538  ASSIGN_DIM/147            ?71       16?18                140:'category_id'   	;0
		183  1538  OP_DATA/137               ?0        16?1                 ?0                  	;0
		184  1541  FETCH_DIM_R/81            $93=      16?18                142:'id'            	;0
		185  1541  FETCH_DIM_W/84            $92=      16?12                141:'streams'       	;0
		186  1541  ASSIGN_DIM/147            ?74       $92                  $93                 	;0
		187  1541  OP_DATA/137               ?0        16?18                ?0                  	;0
		188  1542  NOP/0                     ?0        ?0                   ?0                  	;1
		189  1542  GOTO/253                  ?0        ?190                 ?143                	;0
		190  1544  POST_INC/36               #95=      16?19                ?0                  	;0
		191  1544  FREE/70                   ?0        #95                  ?0                  	;0
		192  1546  NOP/0                     ?0        ?0                   ?0                  	;1
		193  1546  GOTO/253                  ?0        ?194                 ?144                	;0
		194  1547  JMP/42                    ?0        ?147                 ?0                  	;0	>>147
		195  1547  FE_FREE/127               ?0        $79                  ?0                  	;0	<<146
		196  1550  RETURN/62                 ?0        16?12                ?0                  	;0
		197  1551  GOTO/253                  ?0        ?334                 ?145                	;0
		198  1553  FETCH_DIM_R/81            $97=      16?5                 146:'year_range'    	;0
		199  1553  FETCH_DIM_R/81            $98=      $97                  147:0               	;0
		200  1553  ASSIGN_DIM/147            ?76       16?16                ?20                 	;0
		201  1553  OP_DATA/137               ?0        $98                  ?0                  	;0
		202  1554  FETCH_DIM_R/81            $100=     16?5                 148:'year_range'    	;0
		203  1554  FETCH_DIM_R/81            $101=     $100                 149:1               	;0
		204  1554  ASSIGN_DIM/147            ?79       16?16                ?0                  	;0
		205  1554  OP_DATA/137               ?0        $101                 ?0                  	;0
		206  1556  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'is_array'      	;1
		207  1556  FETCH_DIM_FUNC_ARG/93     $102=     16?5                 152:'rating_range'  	;1
		208  1556  SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
		209  1556  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
		210  1556  BOOL_NOT/13               #104=     $103                 ?0                  	;0
		211  1556  JMPZ/43                   ?0        #104                 ?213                	;0	>>213
		212  1557  GOTO/253                  ?0        ?224                 ?153                	;0
		213  1559  ASSIGN_DIM/147            ?85       16?9                 ?4397406            	;0	<<211
		214  1559  OP_DATA/137               ?0        154:'(`rating` >= ? AND `rating` <= ?)' ?0                  	;0
		215  1560  GOTO/253                  ?0        ?216                 ?155                	;0
		216  1562  FETCH_DIM_R/81            $107=     16?5                 156:'rating_range'  	;0
		217  1562  FETCH_DIM_R/81            $108=     $107                 157:0               	;0
		218  1562  ASSIGN_DIM/147            ?86       16?16                ?0                  	;0
		219  1562  OP_DATA/137               ?0        $108                 ?0                  	;0
		220  1563  FETCH_DIM_R/81            $110=     16?5                 158:'rating_range'  	;0
		221  1563  FETCH_DIM_R/81            $111=     $110                 159:1               	;0
		222  1563  ASSIGN_DIM/147            ?89       16?16                ?0                  	;0
		223  1563  OP_DATA/137               ?0        $111                 ?0                  	;0
		224  1565  ISSET_ISEMPTY_CV/197      #112=     16?4                 ?0                  	;16777216
		225  1565  JMPZ/43                   ?0        #112                 ?227                	;0	>>227
		226  1566  GOTO/253                  ?0        ?292                 ?160                	;0
		227  1568  ASSIGN_DIM/147            ?93       16?9                 ?4397406            	;0	<<225
		228  1568  OP_DATA/137               ?0        161:'`title` LIKE ?' ?0                  	;0
		229  1569  GOTO/253                  ?0        ?288                 ?162                	;0
		230  1572  INIT_METHOD_CALL/112      ?0        16?15                164:'get_row'       	;0
		231  1572  DO_FCALL/60               $115=     ?0                   ?0                  	;0
		232  1572  FETCH_DIM_R/81            $116=     $115                 166:'count'         	;0
		233  1572  ASSIGN_DIM/147            ?94       16?12                163:'count'         	;0
		234  1572  OP_DATA/137               ?0        $116                 ?0                  	;0
		235  1573  JMPZ/43                   ?0        16?7                 ?237                	;0	>>237
		236  1574  GOTO/253                  ?0        ?96                  ?167                	;0
		237  1576  FETCH_CONSTANT/99         #117=     ?0                   168:'PLATFORM'      	;16	<<235
		238  1576  IS_EQUAL/17               #118=     #117                 171:'xui'           	;0
		239  1576  JMPZ/43                   ?0        #118                 ?241                	;0	>>241
		240  1577  GOTO/253                  ?0        ?249                 ?172                	;0
		241  1579  ROPE_INIT/54              #120=     ?0                   173:'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `releaseDate`, `tmdb_id`, `seasons`, `backdrop_path` FROM `series` '	;5	<<239
		242  1579  ROPE_ADD/55               #120=     #120                 16?11               	;1
		243  1579  ROPE_ADD/55               #120=     #120                 174:' ORDER BY '    	;2
		244  1579  ROPE_ADD/55               #120=     #120                 16?13               	;3
		245  1579  ROPE_END/56               #119=     #120                 175:';'             	;4
		246  1579  ASSIGN/38                 ?103      16?14                #119                	;0
		247  1580  GOTO/253                  ?0        ?248                 ?176                	;0
		248  1582  GOTO/253                  ?0        ?255                 ?177                	;0
		249  1584  ROPE_INIT/54              #125=     ?0                   178:'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `release_date`, `last_modified`, `tmdb_id`, `seasons`, `backdrop_path`, `year` FROM `streams_series` '	;5
		250  1584  ROPE_ADD/55               #125=     #125                 16?11               	;1
		251  1584  ROPE_ADD/55               #125=     #125                 179:' ORDER BY '    	;2
		252  1584  ROPE_ADD/55               #125=     #125                 16?13               	;3
		253  1584  ROPE_END/56               #124=     #125                 180:';'             	;4
		254  1584  ASSIGN/38                 ?108      16?14                #124                	;0
		255  1586  GOTO/253                  ?0        ?267                 ?181                	;0
		256  1587  GOTO/253                  ?0        ?96                  ?182                	;0
		257  1589  ROPE_INIT/54              #130=     ?0                   183:'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `release_date`, `last_modified`, `tmdb_id`, `seasons`, `backdrop_path`, `year` FROM `streams_series` '	;9
		258  1589  ROPE_ADD/55               #130=     #130                 16?11               	;1
		259  1589  ROPE_ADD/55               #130=     #130                 184:' ORDER BY '    	;2
		260  1589  ROPE_ADD/55               #130=     #130                 16?13               	;3
		261  1589  ROPE_ADD/55               #130=     #130                 185:' LIMIT '       	;4
		262  1589  ROPE_ADD/55               #130=     #130                 16?6                	;5
		263  1589  ROPE_ADD/55               #130=     #130                 186:', '            	;6
		264  1589  ROPE_ADD/55               #130=     #130                 16?7                	;7
		265  1589  ROPE_END/56               #129=     #130                 187:';'             	;8
		266  1589  ASSIGN/38                 ?115      16?14                #129                	;0
		267  1592  INIT_METHOD_CALL/112      ?0        16?15                188:'query'         	;1
		268  1592  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		269  1592  SEND_UNPACK/165           ?80       16?16                ?1                  	;0
		270  1592  DO_FCALL/60               ?116      ?0                   ?0                  	;0
		271  1593  INIT_METHOD_CALL/112      ?0        16?15                190:'get_rows'      	;0
		272  1593  DO_FCALL/60               $137=     ?0                   ?0                  	;0
		273  1593  ASSIGN/38                 ?118      16?17                $137                	;0
		274  1594  GOTO/253                  ?0        ?146                 ?192                	;0
		275  1596  ASSIGN/38                 $139=     16?9                 193:array (
)       	;0
		276  1596  ASSIGN/38                 ?120      16?16                $139                	;0
		277  1597  FETCH_STATIC_PROP_R/173   $141=     194:'rSettings'      ?513                	;0
		278  1597  FETCH_DIM_R/81            $142=     $141                 195:'player_hide_incompatible'	;0
		279  1597  BOOL_NOT/13               #143=     $142                 ?0                  	;0
		280  1597  JMPZ/43                   ?0        #143                 ?282                	;0	>>282
		281  1598  GOTO/253                  ?0        ?284                 ?196                	;0
		282  1600  ASSIGN_DIM/147            ?124      16?9                 ?4397406            	;0	<<280
		283  1600  OP_DATA/137               ?0        197:'(SELECT MAX(`compatible`) FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) = 1' ?0                  	;0
		284  1602  ISSET_ISEMPTY_CV/197      #145=     16?1                 ?0                  	;16777216
		285  1602  JMPZ/43                   ?0        #145                 ?287                	;0	>>287
		286  1603  GOTO/253                  ?0        ?134                 ?198                	;0
		287  1605  GOTO/253                  ?0        ?86                  ?199                	;0	<<285
		288  1607  CONCAT/8                  #147=     200:'%'              16?4                	;0
		289  1607  CONCAT/8                  #148=     #147                 201:'%'             	;0
		290  1607  ASSIGN_DIM/147            ?126      16?16                ?4397406            	;0
		291  1607  OP_DATA/137               ?0        #148                 ?0                  	;0
		292  1609  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 202:'confirmIDs'    	;1
		293  1609  SEND_VAR/117              ?80       16?10                ?1                  	;0
		294  1609  DO_FCALL/60               $149=     ?0                   ?0                  	;0
		295  1609  ASSIGN/38                 ?130      16?10                $149                	;0
		296  1610  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'count'         	;1
		297  1610  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		298  1610  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
		299  1610  IS_EQUAL/17               #152=     $151                 206:0               	;0
		300  1610  BOOL_NOT/13               #153=     #152                 ?0                  	;0
		301  1610  JMPZ/43                   ?0        #153                 ?303                	;0	>>303
		302  1611  GOTO/253                  ?0        ?10                  ?207                	;0
		303  1613  RETURN/62                 ?0        16?12                ?0                  	;0	<<301
		304  1614  GOTO/253                  ?0        ?10                  ?208                	;0
		305  1617  RETURN/62                 ?0        209:NULL             ?0                  	;0
		306  1619  GOTO/253                  ?0        ?146                 ?210                	;0
		307  1621  GOTO/253                  ?0        ?112                 ?211                	;0
		308  1623  ASSIGN_DIM/147            ?134      16?9                 ?4583868            	;0
		309  1623  OP_DATA/137               ?0        212:'(LEFT(`releaseDate`, 4) >= ? AND LEFT(`releaseDate`, 4) <= ?)' ?0                  	;0
		310  1624  GOTO/253                  ?0        ?313                 ?213                	;0
		311  1626  ASSIGN_DIM/147            ?135      16?9                 ?0                  	;0
		312  1626  OP_DATA/137               ?0        214:'(`year` >= ? AND `year` <= ?)' ?0                  	;0
		313  1628  GOTO/253                  ?0        ?198                 ?215                	;0
		314  1630  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 216:'verifyLicense' 	;0
		315  1630  DO_FCALL/60               ?136      ?0                   ?0                  	;0
		316  1631  BIND_GLOBAL/168           ?0        16?15                218:'b62d6460eb33ea07'	;0
		317  1632  FETCH_DIM_R/81            $157=     16?0                 219:'series_ids'    	;0
		318  1632  ASSIGN/38                 ?138      16?10                $157                	;0
		319  1633  ASSIGN/38                 ?139      16?12                220:array (
  'count' => 0,
  'streams' => 
  array (
  ),
)	;0
		320  1634  ADD/1                     #160=     16?6                 221:1               	;0
		321  1634  ASSIGN/38                 ?141      16?19                #160                	;0
		322  1635  GOTO/253                  ?0        ?275                 ?222                	;0
		323  1638  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'count'         	;1
		324  1638  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		325  1638  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
		326  1638  IS_SMALLER/19             #163=     225:0                $162                	;0
		327  1638  JMPZ/43                   ?0        #163                 ?329                	;0	>>329
		328  1639  GOTO/253                  ?0        ?307                 ?226                	;0
		329  1641  JMPZ/43                   ?0        16?8                 ?331                	;0	>>331	<<327
		330  1642  GOTO/253                  ?0        ?305                 ?227                	;0
		331  1644  ASSIGN/38                 ?144      16?17                228:array (
)       	;0	<<329
		332  1645  GOTO/253                  ?0        ?306                 ?229                	;0
		333  1646  GOTO/253                  ?0        ?305                 ?230                	;0
		334  1648  NOP/0                     ?0        231:NULL             ?0                  	;4294967295
		*/
	}

	static public function ba2E785F0326D499($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1649  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1651  FETCH_CONSTANT/99         #1=       ?0                   0:'PLATFORM'        	;16
		2    1651  IS_EQUAL/17               #2=       #1                   3:'xui'             	;0
		3    1651  JMPZ/43                   ?0        #2                   ?5                  	;0	>>5
		4    1652  GOTO/253                  ?0        ?11                  ?4                  	;0
		5    1654  FETCH_STATIC_PROP_R/173   $3=       5:'db'               ?513                	;0	<<3
		6    1654  INIT_METHOD_CALL/112      ?0        $3                   6:'query'           	;2
		7    1654  SEND_VAL_EX/116           ?80       8:'SELECT `series`.*, `webplayer_data`.`similar` FROM `series` LEFT JOIN `webplayer_data` ON `webplayer_data`.`series_id` = `series`.`id` WHERE `id` = ?;' ?1                  	;0
		8    1654  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		9    1654  DO_FCALL/60               ?3        ?0                   ?0                  	;0
		10   1655  GOTO/253                  ?0        ?16                  ?9                  	;0
		11   1657  FETCH_STATIC_PROP_R/173   $5=       10:'db'              ?513                	;0
		12   1657  INIT_METHOD_CALL/112      ?0        $5                   11:'query'          	;2
		13   1657  SEND_VAL_EX/116           ?80       13:'SELECT * FROM `streams_series` WHERE `id` = ?;' ?1                  	;0
		14   1657  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		15   1657  DO_FCALL/60               ?5        ?0                   ?0                  	;0
		16   1659  FETCH_STATIC_PROP_R/173   $7=       14:'db'              ?513                	;0
		17   1659  INIT_METHOD_CALL/112      ?0        $7                   15:'num_rows'       	;0
		18   1659  DO_FCALL/60               $8=       ?0                   ?0                  	;0
		19   1659  IS_EQUAL/17               #9=       $8                   17:1                	;0
		20   1659  BOOL_NOT/13               #10=      #9                   ?0                  	;0
		21   1659  JMPZ/43                   ?0        #10                  ?23                 	;0	>>23
		22   1660  GOTO/253                  ?0        ?27                  ?18                 	;0
		23   1662  FETCH_STATIC_PROP_R/173   $11=      19:'db'              ?513                	;0	<<21
		24   1662  INIT_METHOD_CALL/112      ?0        $11                  20:'get_row'        	;0
		25   1662  DO_FCALL/60               $12=      ?0                   ?0                  	;0
		26   1662  RETURN/62                 ?0        $12                  ?0                  	;0
		27   1664  RETURN/62                 ?0        22:NULL              ?0                  	;0
		28   1665  NOP/0                     ?0        23:NULL              ?0                  	;4294967295
		*/
	}

	static public function aED9009b5Dc15cAe($b38e11ffdc6a3abb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1666  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1668  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
		2    1670  RETURN/62                 ?0        16?1                 ?0                  	;0
		3    1671  GOTO/253                  ?0        ?71                  ?1                  	;0
		4    1673  INIT_METHOD_CALL/112      ?0        16?2                 2:'get'             	;1
		5    1673  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6    1673  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		7    1673  ASSIGN/38                 ?1        16?1                 $3                  	;0
		8    1674  INIT_METHOD_CALL/112      ?0        16?2                 4:'close'           	;0
		9    1674  DO_FCALL/60               ?2        ?0                   ?0                  	;0
		10   1675  BOOL_NOT/13               #6=       16?1                 ?0                  	;0
		11   1675  JMPZ/43                   ?0        #6                   ?13                 	;0	>>13
		12   1676  GOTO/253                  ?0        ?26                  ?6                  	;0
		13   1678  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'file_put_contents'	;2	<<11
		14   1678  FETCH_CONSTANT/99         #7=       ?0                   9:'CONS_TMP_PATH'   	;16
		15   1678  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'md5'            	;1
		16   1678  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		17   1678  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		18   1678  CONCAT/8                  #9=       #7                   $8                  	;0
		19   1678  CONCAT/8                  #10=      #9                   14:'_geo2'          	;0
		20   1678  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
		21   1678  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'json_encode'    	;1
		22   1678  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		23   1678  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		24   1678  SEND_VAR_NO_REF_EX/50     ?96       $11                  ?2                  	;0
		25   1678  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
		26   1680  GOTO/253                  ?0        ?2                   ?17                 	;0
		27   1682  FETCH_CONSTANT/99         #13=      ?0                   18:'PLATFORM'       	;16	<<1
		28   1682  IS_NOT_EQUAL/18           #14=      #13                  21:'xui'            	;0
		29   1682  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		30   1682  JMPZ/43                   ?0        #15                  ?32                 	;0	>>32
		31   1683  GOTO/253                  ?0        ?33                  ?22                 	;0
		32   1685  RETURN/62                 ?0        23:false             ?0                  	;0	<<30
		33   1687  ISSET_ISEMPTY_CV/197      #16=      16?0                 ?0                  	;16777216
		34   1687  BOOL_NOT/13               #17=      #16                  ?0                  	;0
		35   1687  JMPZ/43                   ?0        #17                  ?37                 	;0	>>37
		36   1688  GOTO/253                  ?0        ?39                  ?24                 	;0
		37   1690  RETURN/62                 ?0        25:false             ?0                  	;0	<<35
		38   1691  GOTO/253                  ?0        ?39                  ?26                 	;0
		39   1694  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'file_exists'    	;1
		40   1694  FETCH_CONSTANT/99         #18=      ?0                   29:'CONS_TMP_PATH'  	;16
		41   1694  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'md5'            	;1
		42   1694  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		43   1694  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		44   1694  CONCAT/8                  #20=      #18                  $19                 	;0
		45   1694  CONCAT/8                  #21=      #20                  34:'_geo2'          	;0
		46   1694  SEND_VAL_EX/116           ?80       #21                  ?1                  	;0
		47   1694  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		48   1694  BOOL_NOT/13               #23=      $22                  ?0                  	;0
		49   1694  JMPZ/43                   ?0        #23                  ?51                 	;0	>>51
		50   1695  GOTO/253                  ?0        ?65                  ?35                 	;0
		51   1697  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'json_decode'    	;2	<<49
		52   1697  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'file_get_contents'	;1
		53   1697  FETCH_CONSTANT/99         #24=      ?0                   40:'CONS_TMP_PATH'  	;16
		54   1697  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'md5'            	;1
		55   1697  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		56   1697  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		57   1697  CONCAT/8                  #26=      #24                  $25                 	;0
		58   1697  CONCAT/8                  #27=      #26                  45:'_geo2'          	;0
		59   1697  SEND_VAL_EX/116           ?80       #27                  ?1                  	;0
		60   1697  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		61   1697  SEND_VAR_NO_REF_EX/50     ?80       $28                  ?1                  	;0
		62   1697  SEND_VAL_EX/116           ?96       46:true              ?2                  	;0
		63   1697  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		64   1697  RETURN/62                 ?0        $29                  ?0                  	;0
		65   1699  NEW/68                    $30=      47:'MaxMind\\Db\\Reader' ?128                	;1
		66   1699  FETCH_CONSTANT/99         #31=      ?0                   49:'GEOLITE2_BIN'   	;16
		67   1699  SEND_VAL_EX/116           ?80       #31                  ?1                  	;0
		68   1699  DO_FCALL/60               ?29       ?8                   ?0                  	;0
		69   1699  ASSIGN/38                 ?30       16?2                 $30                 	;0
		70   1700  GOTO/253                  ?0        ?4                   ?52                 	;0
		71   1702  NOP/0                     ?0        53:NULL              ?0                  	;4294967295
		*/
	}

	static public function d6B3157e40ff47D6($b38e11ffdc6a3abb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1703  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1705  JMP/42                    ?0        ?57                  ?0                  	;0	>>57
		2    1708  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_exists'     	;1
		3    1708  FETCH_CONSTANT/99         #3=       ?0                   3:'CONS_TMP_PATH'   	;16
		4    1708  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'md5'             	;1
		5    1708  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6    1708  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		7    1708  CONCAT/8                  #5=       #3                   $4                  	;0
		8    1708  CONCAT/8                  #6=       #5                   8:'_isp'            	;0
		9    1708  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
		10   1708  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		11   1708  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		12   1708  JMPZ/43                   ?0        #8                   ?14                 	;0	>>14
		13   1709  GOTO/253                  ?0        ?28                  ?9                  	;0
		14   1711  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'json_decode'    	;2	<<12
		15   1711  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'file_get_contents'	;1
		16   1711  FETCH_CONSTANT/99         #9=       ?0                   14:'CONS_TMP_PATH'  	;16
		17   1711  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'md5'            	;1
		18   1711  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		19   1711  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		20   1711  CONCAT/8                  #11=      #9                   $10                 	;0
		21   1711  CONCAT/8                  #12=      #11                  19:'_isp'           	;0
		22   1711  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
		23   1711  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		24   1711  SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
		25   1711  SEND_VAL_EX/116           ?96       20:true              ?2                  	;0
		26   1711  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		27   1711  RETURN/62                 ?0        $14                  ?0                  	;0
		28   1713  NEW/68                    $15=      21:'MaxMind\\Db\\Reader' ?128                	;1
		29   1713  FETCH_CONSTANT/99         #16=      ?0                   23:'GEOISP_BIN'     	;16
		30   1713  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
		31   1713  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		32   1713  ASSIGN/38                 ?15       16?1                 $15                 	;0
		33   1714  GOTO/253                  ?0        ?34                  ?26                 	;0
		34   1716  INIT_METHOD_CALL/112      ?0        16?1                 27:'get'            	;1
		35   1716  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		36   1716  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		37   1716  ASSIGN/38                 ?17       16?2                 $19                 	;0
		38   1717  INIT_METHOD_CALL/112      ?0        16?1                 29:'close'          	;0
		39   1717  DO_FCALL/60               ?18       ?0                   ?0                  	;0
		40   1718  BOOL_NOT/13               #22=      16?2                 ?0                  	;0
		41   1718  JMPZ/43                   ?0        #22                  ?43                 	;0	>>43
		42   1719  GOTO/253                  ?0        ?56                  ?31                 	;0
		43   1721  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'file_put_contents'	;2	<<41
		44   1721  FETCH_CONSTANT/99         #23=      ?0                   34:'CONS_TMP_PATH'  	;16
		45   1721  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'md5'            	;1
		46   1721  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		47   1721  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		48   1721  CONCAT/8                  #25=      #23                  $24                 	;0
		49   1721  CONCAT/8                  #26=      #25                  39:'_isp'           	;0
		50   1721  SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
		51   1721  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'json_encode'    	;1
		52   1721  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		53   1721  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
		54   1721  SEND_VAR_NO_REF_EX/50     ?96       $27                  ?2                  	;0
		55   1721  DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
		56   1723  GOTO/253                  ?0        ?69                  ?42                 	;0
		57   1725  FETCH_CONSTANT/99         #29=      ?0                   43:'PLATFORM'       	;16	<<1
		58   1725  IS_NOT_EQUAL/18           #30=      #29                  46:'xui'            	;0
		59   1725  BOOL_NOT/13               #31=      #30                  ?0                  	;0
		60   1725  JMPZ/43                   ?0        #31                  ?62                 	;0	>>62
		61   1726  GOTO/253                  ?0        ?63                  ?47                 	;0
		62   1728  RETURN/62                 ?0        48:false             ?0                  	;0	<<60
		63   1730  ISSET_ISEMPTY_CV/197      #32=      16?0                 ?0                  	;16777216
		64   1730  BOOL_NOT/13               #33=      #32                  ?0                  	;0
		65   1730  JMPZ/43                   ?0        #33                  ?67                 	;0	>>67
		66   1731  GOTO/253                  ?0        ?2                   ?49                 	;0
		67   1733  RETURN/62                 ?0        50:false             ?0                  	;0	<<65
		68   1734  GOTO/253                  ?0        ?2                   ?51                 	;0
		69   1736  RETURN/62                 ?0        16?2                 ?0                  	;0
		70   1737  GOTO/253                  ?0        ?71                  ?52                 	;0
		71   1739  NOP/0                     ?0        53:NULL              ?0                  	;4294967295
		*/
	}

	static public function EFF2889A3e3E9c34($Debf76f3b5719ca3)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1740  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    1742  FETCH_CONSTANT/99         #2=       ?0                   0:'PLATFORM'        	;16
		2    1742  IS_NOT_EQUAL/18           #3=       #2                   3:'xui'             	;0
		3    1742  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		4    1742  JMPZ/43                   ?0        #4                   ?6                  	;0	>>6
		5    1743  GOTO/253                  ?0        ?7                   ?4                  	;0
		6    1745  RETURN/62                 ?0        5:false              ?0                  	;0	<<4
		7    1747  FETCH_STATIC_PROP_R/173   $5=       6:'rBlockedISP'      ?513                	;0
		8    1747  FE_RESET_R/77             $6=       $5                   ?29                 	;0
		9    1747  FE_FETCH_R/78             ?0        $6                   16?1                	;29	>>29	<<28
		10   1748  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'strtolower'      	;1
		11   1748  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		12   1748  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		13   1748  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'strtolower'      	;1
		14   1748  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 11:'isp'            	;1
		15   1748  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
		16   1748  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		17   1748  IS_EQUAL/17               #10=      $7                   $9                  	;0
		18   1748  BOOL_NOT/13               #11=      #10                  ?0                  	;0
		19   1748  JMPZ/43                   ?0        #11                  ?22                 	;0	>>22
		20   1749  NOP/0                     ?0        ?0                   ?0                  	;1
		21   1749  GOTO/253                  ?0        ?28                  ?12                 	;0
		22   1751  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'intval'         	;1	<<19
		23   1751  FETCH_DIM_FUNC_ARG/93     $12=      16?1                 15:'blocked'        	;1
		24   1751  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
		25   1751  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		26   1751  FE_FREE/127               ?0        $6                   ?0                  	;1
		27   1751  RETURN/62                 ?0        $13                  ?0                  	;0
		28   1753  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
		29   1753  FE_FREE/127               ?0        $6                   ?0                  	;0	<<8
		30   1756  RETURN/62                 ?0        16:0                 ?0                  	;0
		31   1757  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	static public function cC988751eEBBF271($f7107e3a92443147, $ff5cf44f96903d64, $fd093b5358e9a519, $Abca9d7ba75bcfb9, $D67591a963888d63, $b38e11ffdc6a3abb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    1758  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    1758  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2    1758  RECV_INIT/64              16?2=     ?3                   2:NULL              	;0
		3    1758  RECV_INIT/64              16?3=     ?4                   3:false             	;0
		4    1758  RECV_INIT/64              16?4=     ?5                   4:false             	;0
		5    1758  RECV_INIT/64              16?5=     ?6                   5:''                	;0
		6    1760  GOTO/253                  ?0        ?734                 ?6                  	;0
		7    1762  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'intval'          	;1
		8    1762  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'file_get_contents'	;1
		9    1762  FETCH_CONSTANT/99         #22=      ?0                   11:'LINES_TMP_PATH' 	;16
		10   1762  CONCAT/8                  #23=      #22                  14:'line_c_'        	;0
		11   1762  CONCAT/8                  #24=      #23                  16?1                	;0
		12   1762  CONCAT/8                  #25=      #24                  15:'_'              	;0
		13   1762  CONCAT/8                  #26=      #25                  16?2                	;0
		14   1762  SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
		15   1762  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
		16   1762  SEND_VAR_NO_REF_EX/50     ?80       $27                  ?1                  	;0
		17   1762  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		18   1762  ASSIGN/38                 ?7        16?0                 $28                 	;0
		19   1765  GOTO/253                  ?0        ?395                 ?16                 	;0
		20   1767  GOTO/253                  ?0        ?761                 ?17                 	;0
		21   1769  FETCH_CONSTANT/99         #30=      ?0                   18:'PLATFORM'       	;16
		22   1769  IS_EQUAL/17               #31=      #30                  21:'xui'            	;0
		23   1769  JMPZ/43                   ?0        #31                  ?25                 	;0	>>25
		24   1770  GOTO/253                  ?0        ?34                  ?22                 	;0
		25   1772  FETCH_STATIC_PROP_R/173   $32=      23:'db'              ?513                	;0	<<23
		26   1772  INIT_METHOD_CALL/112      ?0        $32                  24:'query'          	;3
		27   1772  SEND_VAL_EX/116           ?80       26:'UPDATE `users` SET `forced_country` = ? WHERE `id` = ?' ?1                  	;0
		28   1772  FETCH_DIM_FUNC_ARG/93     $33=      16?6                 27:'forced_country' 	;2
		29   1772  SEND_VAR_EX/66            ?96       $33                  ?2                  	;0
		30   1772  FETCH_DIM_FUNC_ARG/93     $34=      16?6                 28:'id'             	;3
		31   1772  SEND_VAR_EX/66            ?112      $34                  ?3                  	;0
		32   1772  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		33   1773  GOTO/253                  ?0        ?149                 ?29                 	;0
		34   1775  FETCH_STATIC_PROP_R/173   $36=      30:'db'              ?513                	;0
		35   1775  INIT_METHOD_CALL/112      ?0        $36                  31:'query'          	;3
		36   1775  SEND_VAL_EX/116           ?80       33:'UPDATE `lines` SET `forced_country` = ? WHERE `id` = ?' ?1                  	;0
		37   1775  FETCH_DIM_FUNC_ARG/93     $37=      16?6                 34:'forced_country' 	;2
		38   1775  SEND_VAR_EX/66            ?96       $37                  ?2                  	;0
		39   1775  FETCH_DIM_FUNC_ARG/93     $38=      16?6                 35:'id'             	;3
		40   1775  SEND_VAR_EX/66            ?112      $38                  ?3                  	;0
		41   1775  DO_FCALL/60               ?17       ?0                   ?0                  	;0
		42   1776  GOTO/253                  ?0        ?149                 ?36                 	;0
		43   1780  ASSIGN_DIM/147            ?18       16?6                 37:'con_isp_name'   	;0
		44   1780  OP_DATA/137               ?0        38:NULL              ?0                  	;0
		45   1781  ASSIGN_DIM/147            ?19       16?6                 39:'isp_violate'    	;0
		46   1781  OP_DATA/137               ?0        40:0                 ?0                  	;0
		47   1782  ASSIGN_DIM/147            ?20       16?6                 41:'isp_is_server'  	;0
		48   1782  OP_DATA/137               ?0        42:0                 ?0                  	;0
		49   1783  GOTO/253                  ?0        ?928                 ?43                 	;0
		50   1785  ISSET_ISEMPTY_CV/197      #43=      16?0                 ?0                  	;16777216
		51   1785  BOOL_NOT/13               #44=      #43                  ?0                  	;0
		52   1785  JMPZ/43                   ?0        #44                  ?54                 	;0	>>54
		53   1786  GOTO/253                  ?0        ?56                  ?44                 	;0
		54   1788  RETURN/62                 ?0        45:false             ?0                  	;0	<<52
		55   1789  GOTO/253                  ?0        ?722                 ?46                 	;0
		56   1791  FETCH_CONSTANT/99         #45=      ?0                   47:'PLATFORM'       	;16
		57   1791  IS_EQUAL/17               #46=      #45                  50:'xui'            	;0
		58   1791  JMPZ/43                   ?0        #46                  ?60                 	;0	>>60
		59   1792  GOTO/253                  ?0        ?598                 ?51                 	;0
		60   1794  GOTO/253                  ?0        ?592                 ?52                 	;0	<<58
		61   1796  GOTO/253                  ?0        ?75                  ?53                 	;0
		62   1798  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 54:'c59e849742699501'	;2
		63   1798  FETCH_DIM_R/81            $47=      16?6                 56:'id'             	;0
		64   1798  CONCAT/8                  #48=      57:'isp/'            $47                 	;0
		65   1798  SEND_VAL_EX/116           ?80       #48                  ?1                  	;0
		66   1798  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'json_encode'    	;1
		67   1798  FETCH_DIM_R/81            $49=      16?6                 60:'con_isp_name'   	;0
		68   1798  INIT_ARRAY/71             #50=      $49                  ?0                  	;8
		69   1798  FETCH_DIM_R/81            $51=      16?6                 61:'isp_asn'        	;0
		70   1798  ADD_ARRAY_ELEMENT/72      #50=      $51                  ?0                  	;0
		71   1798  SEND_VAL_EX/116           ?80       #50                  ?1                  	;0
		72   1798  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
		73   1798  SEND_VAR_NO_REF_EX/50     ?96       $52                  ?2                  	;0
		74   1798  DO_FCALL/60               ?31       ?0                   ?0                  	;0
		75   1801  GOTO/253                  ?0        ?409                 ?62                 	;0
		76   1803  FETCH_DIM_R/81            $54=      16?6                 63:'series_ids'     	;0
		77   1803  FE_RESET_R/77             $55=      $54                  ?107                	;0
		78   1803  FE_FETCH_R/78             ?0        $55                  16?7                	;107	>>107	<<106
		79   1804  ISSET_ISEMPTY_DIM_OBJ/115 #56=      16?8                 16?7                	;33554432
		80   1804  BOOL_NOT/13               #57=      #56                  ?0                  	;0
		81   1804  JMPZ/43                   ?0        #57                  ?84                 	;0	>>84
		82   1805  NOP/0                     ?0        ?0                   ?0                  	;1
		83   1805  GOTO/253                  ?0        ?106                 ?64                 	;0
		84   1807  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'array_values'   	;1	<<81
		85   1807  FETCH_DIM_FUNC_ARG/93     $58=      16?8                 16?7                	;1
		86   1807  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
		87   1807  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
		88   1807  FE_RESET_R/77             $60=      $59                  ?105                	;0
		89   1807  FE_FETCH_R/78             ?0        $60                  16?9                	;105	>>105	<<104
		90   1808  JMPZ_EX/46                #61=      16?9                 ?97                 	;0	>>97
		91   1808  INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'in_array'       	;2
		92   1808  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
		93   1808  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
		94   1808  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
		95   1808  BOOL_NOT/13               #63=      $62                  ?0                  	;0
		96   1808  BOOL/52                   #61=      #63                  ?0                  	;0
		97   1808  BOOL_NOT/13               #64=      #61                  ?0                  	;0	<<90
		98   1808  JMPZ/43                   ?0        #64                  ?102                	;0	>>102
		99   1809  NOP/0                     ?0        ?0                   ?0                  	;1
		100  1809  NOP/0                     ?0        ?0                   ?0                  	;1
		101  1809  GOTO/253                  ?0        ?104                 ?69                 	;0
		102  1811  ASSIGN_DIM/147            ?43       16?10                ?4397406            	;0	<<98
		103  1811  OP_DATA/137               ?0        16?9                 ?0                  	;0
		104  1813  JMP/42                    ?0        ?89                  ?0                  	;0	>>89
		105  1813  FE_FREE/127               ?0        $60                  ?0                  	;0	<<88
		106  1817  JMP/42                    ?0        ?78                  ?0                  	;0	>>78
		107  1817  FE_FREE/127               ?0        $55                  ?0                  	;0	<<77
		108  1822  INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'array_map'      	;2
		109  1822  SEND_VAL_EX/116           ?80       73:'intval'          ?1                  	;0
		110  1822  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'array_unique'   	;1
		111  1822  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
		112  1822  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
		113  1822  SEND_VAR_NO_REF_EX/50     ?96       $67                  ?2                  	;0
		114  1822  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
		115  1822  ASSIGN_DIM/147            ?44       16?6                 70:'category_ids'   	;0
		116  1822  OP_DATA/137               ?0        $68                  ?0                  	;0
		117  1823  GOTO/253                  ?0        ?236                 ?76                 	;0
		118  1827  GOTO/253                  ?0        ?43                  ?77                 	;0
		119  1829  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 78:'unserialize'    	;1
		120  1829  INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'file_get_contents'	;1
		121  1829  FETCH_CONSTANT/99         #69=      ?0                   82:'CACHE_TMP_PATH' 	;16
		122  1829  CONCAT/8                  #70=      #69                  85:'output_formats' 	;0
		123  1829  SEND_VAL_EX/116           ?80       #70                  ?1                  	;0
		124  1829  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
		125  1829  SEND_VAR/117              ?80       $71                  ?1                  	;0
		126  1829  DO_FCALL/60               $72=      ?0                   ?0                  	;0
		127  1829  FE_RESET_R/77             $73=      $72                  ?147                	;0
		128  1829  FE_FETCH_R/78             ?0        $73                  16?11               	;147	>>147	<<146
		129  1830  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'in_array'       	;2
		130  1830  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'intval'         	;1
		131  1830  FETCH_DIM_FUNC_ARG/93     $74=      16?11                90:'access_output_id'	;1
		132  1830  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
		133  1830  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
		134  1830  SEND_VAR_NO_REF_EX/50     ?80       $75                  ?1                  	;0
		135  1830  FETCH_DIM_FUNC_ARG/93     $76=      16?6                 91:'allowed_outputs'	;2
		136  1830  SEND_VAR_EX/66            ?96       $76                  ?2                  	;0
		137  1830  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
		138  1830  BOOL_NOT/13               #78=      $77                  ?0                  	;0
		139  1830  JMPZ/43                   ?0        #78                  ?142                	;0	>>142
		140  1831  NOP/0                     ?0        ?0                   ?0                  	;1
		141  1831  GOTO/253                  ?0        ?146                 ?92                 	;0
		142  1833  FETCH_DIM_R/81            $81=      16?11                94:'output_key'     	;0	<<139
		143  1833  FETCH_DIM_W/84            $79=      16?6                 93:'output_formats' 	;0
		144  1833  ASSIGN_DIM/147            ?58       $79                  ?4397406            	;0
		145  1833  OP_DATA/137               ?0        $81                  ?0                  	;0
		146  1835  JMP/42                    ?0        ?128                 ?0                  	;0	>>128
		147  1835  FE_FREE/127               ?0        $73                  ?0                  	;0	<<127
		148  1837  GOTO/253                  ?0        ?43                  ?95                 	;0
		149  1840  GOTO/253                  ?0        ?157                 ?96                 	;0
		150  1842  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 97:'c59E849742699501'	;2
		151  1842  FETCH_DIM_R/81            $82=      16?6                 99:'id'             	;0
		152  1842  CONCAT/8                  #83=      100:'forced_country/' $82                 	;0
		153  1842  SEND_VAL_EX/116           ?80       #83                  ?1                  	;0
		154  1842  FETCH_DIM_FUNC_ARG/93     $84=      16?6                 101:'forced_country'	;2
		155  1842  SEND_VAR_EX/66            ?96       $84                  ?2                  	;0
		156  1842  DO_FCALL/60               ?63       ?0                   ?0                  	;0
		157  1844  GOTO/253                  ?0        ?798                 ?102                	;0
		158  1846  FETCH_DIM_R/81            $87=      16?12                104:'autonomous_system_number'	;0
		159  1846  ASSIGN_DIM/147            ?64       16?6                 103:'isp_asn'       	;0
		160  1846  OP_DATA/137               ?0        $87                  ?0                  	;0
		161  1847  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 106:'efF2889a3e3e9C34'	;1
		162  1847  FETCH_DIM_R/81            $89=      16?6                 108:'con_isp_name'  	;0
		163  1847  SEND_VAR/117              ?80       $89                  ?1                  	;0
		164  1847  DO_FCALL/60               $90=      ?0                   ?0                  	;0
		165  1847  ASSIGN_DIM/147            ?66       16?6                 105:'isp_violate'   	;0
		166  1847  OP_DATA/137               ?0        $90                  ?0                  	;0
		167  1850  ISSET_ISEMPTY_DIM_OBJ/115 #91=      16?6                 109:'con_isp_name'  	;16777216
		168  1850  BOOL_NOT/13               #92=      #91                  ?0                  	;0
		169  1850  JMPZ_EX/46                #92=      #92                  ?174                	;0	>>174
		170  1850  FETCH_STATIC_PROP_R/173   $93=      110:'rSettings'      ?513                	;0
		171  1850  FETCH_DIM_R/81            $94=      $93                  111:'enable_isp_lock'	;0
		172  1850  IS_EQUAL/17               #95=      $94                  112:1               	;0
		173  1850  BOOL/52                   #92=      #95                  ?0                  	;0
		174  1850  JMPZ_EX/46                #92=      #92                  ?178                	;0	>>178	<<169
		175  1850  FETCH_DIM_R/81            $96=      16?6                 113:'is_stalker'    	;0
		176  1850  IS_EQUAL/17               #97=      $96                  114:0               	;0
		177  1850  BOOL/52                   #92=      #97                  ?0                  	;0
		178  1850  JMPZ_EX/46                #92=      #92                  ?182                	;0	>>182	<<174
		179  1850  FETCH_DIM_R/81            $98=      16?6                 115:'is_isplock'    	;0
		180  1850  IS_EQUAL/17               #99=      $98                  116:1               	;0
		181  1850  BOOL/52                   #92=      #99                  ?0                  	;0
		182  1850  JMPZ_EX/46                #92=      #92                  ?186                	;0	>>186	<<178
		183  1850  ISSET_ISEMPTY_DIM_OBJ/115 #100=     16?6                 117:'isp_desc'      	;16777216
		184  1850  BOOL_NOT/13               #101=     #100                 ?0                  	;0
		185  1850  BOOL/52                   #92=      #101                 ?0                  	;0
		186  1850  JMPZ_EX/46                #92=      #92                  ?197                	;0	>>197	<<182
		187  1850  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'strtolower'    	;1
		188  1850  FETCH_DIM_FUNC_ARG/93     $102=     16?6                 120:'con_isp_name'  	;1
		189  1850  SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
		190  1850  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
		191  1850  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'strtolower'    	;1
		192  1850  FETCH_DIM_FUNC_ARG/93     $104=     16?6                 123:'isp_desc'      	;1
		193  1850  SEND_VAR_EX/66            ?80       $104                 ?1                  	;0
		194  1850  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
		195  1850  IS_NOT_EQUAL/18           #106=     $103                 $105                	;0
		196  1850  BOOL/52                   #92=      #106                 ?0                  	;0
		197  1850  BOOL_NOT/13               #107=     #92                  ?0                  	;0	<<186
		198  1850  JMPZ/43                   ?0        #107                 ?200                	;0	>>200
		199  1851  GOTO/253                  ?0        ?698                 ?124                	;0
		200  1853  GOTO/253                  ?0        ?696                 ?125                	;0	<<198
		201  1856  BOOL_NOT/13               #108=     16?6                 ?0                  	;0
		202  1856  JMPZ/43                   ?0        #108                 ?204                	;0	>>204
		203  1857  GOTO/253                  ?0        ?237                 ?126                	;0
		204  1859  FETCH_CONSTANT/99         #109=     ?0                   127:'PLATFORM'      	;16	<<202
		205  1859  IS_EQUAL/17               #110=     #109                 130:'xui'           	;0
		206  1859  JMPZ_EX/46                #110=     #110                 ?211                	;0	>>211
		207  1859  FETCH_STATIC_PROP_R/173   $111=     131:'rSettings'      ?513                	;0
		208  1859  FETCH_DIM_R/81            $112=     $111                 132:'county_override_1st'	;0
		209  1859  IS_EQUAL/17               #113=     $112                 133:1               	;0
		210  1859  BOOL/52                   #110=     #113                 ?0                  	;0
		211  1859  JMPZ_EX/46                #110=     #110                 ?214                	;0	>>214	<<206
		212  1859  ISSET_ISEMPTY_DIM_OBJ/115 #114=     16?6                 134:'forced_country'	;16777216
		213  1859  BOOL/52                   #110=     #114                 ?0                  	;0
		214  1859  JMPZ_EX/46                #110=     #110                 ?218                	;0	>>218	<<211
		215  1859  ISSET_ISEMPTY_CV/197      #115=     16?5                 ?0                  	;16777216
		216  1859  BOOL_NOT/13               #116=     #115                 ?0                  	;0
		217  1859  BOOL/52                   #110=     #116                 ?0                  	;0
		218  1859  JMPZ_EX/46                #110=     #110                 ?222                	;0	>>222	<<214
		219  1859  FETCH_DIM_R/81            $117=     16?6                 135:'max_connections'	;0
		220  1859  IS_EQUAL/17               #118=     $117                 136:1               	;0
		221  1859  BOOL/52                   #110=     #118                 ?0                  	;0
		222  1859  BOOL_NOT/13               #119=     #110                 ?0                  	;0	<<218
		223  1859  JMPZ/43                   ?0        #119                 ?225                	;0	>>225
		224  1860  GOTO/253                  ?0        ?798                 ?137                	;0
		225  1862  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 139:'aed9009B5DC15CAe'	;1	<<223
		226  1862  SEND_VAR/117              ?80       16?5                 ?1                  	;0
		227  1862  DO_FCALL/60               $121=     ?0                   ?0                  	;0
		228  1862  FETCH_DIM_R/81            $122=     $121                 141:'registered_country'	;0
		229  1862  FETCH_DIM_R/81            $123=     $122                 142:'iso_code'      	;0
		230  1862  ASSIGN_DIM/147            ?98       16?6                 138:'forced_country'	;0
		231  1862  OP_DATA/137               ?0        $123                 ?0                  	;0
		232  1863  FETCH_STATIC_PROP_R/173   $124=     143:'rCached'        ?513                	;0
		233  1863  JMPZ/43                   ?0        $124                 ?235                	;0	>>235
		234  1864  GOTO/253                  ?0        ?150                 ?144                	;0
		235  1866  GOTO/253                  ?0        ?21                  ?145                	;0	<<233
		236  1869  RETURN/62                 ?0        16?6                 ?0                  	;0
		237  1871  RETURN/62                 ?0        146:false            ?0                  	;0
		238  1872  GOTO/253                  ?0        ?979                 ?147                	;0
		239  1874  FETCH_STATIC_PROP_R/173   $125=     148:'rCached'        ?513                	;0
		240  1874  JMPZ/43                   ?0        $125                 ?242                	;0	>>242
		241  1875  GOTO/253                  ?0        ?960                 ?149                	;0
		242  1877  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'count'         	;1	<<240
		243  1877  FETCH_DIM_FUNC_ARG/93     $126=     16?6                 152:'channel_ids'   	;1
		244  1877  SEND_VAR_EX/66            ?80       $126                 ?1                  	;0
		245  1877  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
		246  1877  IS_SMALLER/19             #128=     153:0                $127                	;0
		247  1877  BOOL_NOT/13               #129=     #128                 ?0                  	;0
		248  1877  JMPZ/43                   ?0        #129                 ?250                	;0	>>250
		249  1878  GOTO/253                  ?0        ?563                 ?154                	;0
		250  1880  FETCH_STATIC_PROP_R/173   $130=     155:'db'             ?513                	;0	<<248
		251  1880  INIT_METHOD_CALL/112      ?0        $130                 156:'query'         	;1
		252  1880  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'implode'       	;2
		253  1880  SEND_VAL_EX/116           ?80       160:','              ?1                  	;0
		254  1880  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'array_map'     	;2
		255  1880  SEND_VAL_EX/116           ?80       163:'intval'         ?1                  	;0
		256  1880  FETCH_DIM_FUNC_ARG/93     $131=     16?6                 164:'channel_ids'   	;2
		257  1880  SEND_VAR_EX/66            ?96       $131                 ?2                  	;0
		258  1880  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
		259  1880  SEND_VAR_NO_REF_EX/50     ?96       $132                 ?2                  	;0
		260  1880  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
		261  1880  CONCAT/8                  #134=     165:'SELECT DISTINCT(`category_id`) FROM `streams` WHERE `id` IN (' $133                	;0
		262  1880  CONCAT/8                  #135=     #134                 166:');'            	;0
		263  1880  SEND_VAL_EX/116           ?80       #135                 ?1                  	;0
		264  1880  DO_FCALL/60               ?114      ?0                   ?0                  	;0
		265  1881  FETCH_STATIC_PROP_R/173   $137=     167:'db'             ?513                	;0
		266  1881  INIT_METHOD_CALL/112      ?0        $137                 168:'get_rows'      	;2
		267  1881  SEND_VAL_EX/116           ?80       170:true             ?1                  	;0
		268  1881  SEND_VAL_EX/116           ?96       171:'category_id'    ?2                  	;0
		269  1881  DO_FCALL/60               $138=     ?0                   ?0                  	;0
		270  1881  FE_RESET_R/77             $139=     $138                 ?302                	;0
		271  1881  FE_FETCH_R/78             ?0        $139                 16?13               	;302	>>302	<<301
		272  1882  FETCH_CONSTANT/99         #140=     ?0                   172:'PLATFORM'      	;16
		273  1882  IS_EQUAL/17               #141=     #140                 175:'xui'           	;0
		274  1882  JMPZ/43                   ?0        #141                 ?277                	;0	>>277
		275  1883  NOP/0                     ?0        ?0                   ?0                  	;1
		276  1883  GOTO/253                  ?0        ?282                 ?176                	;0
		277  1885  FETCH_DIM_R/81            $143=     16?13                177:'category_id'   	;0	<<274
		278  1885  ASSIGN_DIM/147            ?120      16?10                ?4397406            	;0
		279  1885  OP_DATA/137               ?0        $143                 ?0                  	;0
		280  1886  NOP/0                     ?0        ?0                   ?0                  	;1
		281  1886  GOTO/253                  ?0        ?301                 ?178                	;0
		282  1888  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'json_decode'   	;2
		283  1888  FETCH_DIM_FUNC_ARG/93     $144=     16?13                181:'category_id'   	;1
		284  1888  SEND_VAR_EX/66            ?80       $144                 ?1                  	;0
		285  1888  SEND_VAL_EX/116           ?96       182:true             ?2                  	;0
		286  1888  DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
		287  1888  FE_RESET_R/77             $146=     $145                 ?300                	;0
		288  1888  FE_FETCH_R/78             ?0        $146                 16?9                	;300	>>300	<<299
		289  1889  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'in_array'      	;2
		290  1889  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
		291  1889  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
		292  1889  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
		293  1889  JMPZ/43                   ?0        $147                 ?297                	;0	>>297
		294  1890  NOP/0                     ?0        ?0                   ?0                  	;1
		295  1890  NOP/0                     ?0        ?0                   ?0                  	;1
		296  1890  GOTO/253                  ?0        ?299                 ?185                	;0
		297  1892  ASSIGN_DIM/147            ?126      16?10                ?4397406            	;0	<<293
		298  1892  OP_DATA/137               ?0        16?9                 ?0                  	;0
		299  1894  JMP/42                    ?0        ?288                 ?0                  	;0	>>288
		300  1894  FE_FREE/127               ?0        $146                 ?0                  	;0	<<287
		301  1898  JMP/42                    ?0        ?271                 ?0                  	;0	>>271
		302  1898  FE_FREE/127               ?0        $139                 ?0                  	;0	<<270
		303  1901  GOTO/253                  ?0        ?563                 ?186                	;0
		304  1903  ISSET_ISEMPTY_CV/197      #149=     16?1                 ?0                  	;16777216
		305  1903  BOOL_NOT/13               #150=     #149                 ?0                  	;0
		306  1903  JMPZ_EX/46                #150=     #150                 ?310                	;0	>>310
		307  1903  ISSET_ISEMPTY_CV/197      #151=     16?2                 ?0                  	;16777216
		308  1903  BOOL_NOT/13               #152=     #151                 ?0                  	;0
		309  1903  BOOL/52                   #150=     #152                 ?0                  	;0
		310  1903  JMPZ/43                   ?0        #150                 ?312                	;0	>>312	<<306
		311  1904  GOTO/253                  ?0        ?891                 ?187                	;0
		312  1906  ISSET_ISEMPTY_CV/197      #153=     16?0                 ?0                  	;16777216	<<310
		313  1906  BOOL_NOT/13               #154=     #153                 ?0                  	;0
		314  1906  JMPZ/43                   ?0        #154                 ?316                	;0	>>316
		315  1907  GOTO/253                  ?0        ?317                 ?188                	;0
		316  1909  RETURN/62                 ?0        189:false            ?0                  	;0	<<314
		317  1911  GOTO/253                  ?0        ?19                  ?190                	;0
		318  1912  GOTO/253                  ?0        ?891                 ?191                	;0
		319  1914  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'array_map'     	;2
		320  1914  SEND_VAL_EX/116           ?80       195:'intval'         ?1                  	;0
		321  1914  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'array_unique'  	;1
		322  1914  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		323  1914  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
		324  1914  SEND_VAR_NO_REF_EX/50     ?96       $156                 ?2                  	;0
		325  1914  DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
		326  1914  ASSIGN_DIM/147            ?133      16?6                 192:'channel_ids'   	;0
		327  1914  OP_DATA/137               ?0        $157                 ?0                  	;0
		328  1915  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'array_map'     	;2
		329  1915  SEND_VAL_EX/116           ?80       201:'intval'         ?1                  	;0
		330  1915  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'array_unique'  	;1
		331  1915  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
		332  1915  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
		333  1915  SEND_VAR_NO_REF_EX/50     ?96       $159                 ?2                  	;0
		334  1915  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
		335  1915  ASSIGN_DIM/147            ?136      16?6                 198:'series_ids'    	;0
		336  1915  OP_DATA/137               ?0        $160                 ?0                  	;0
		337  1916  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'array_map'     	;2
		338  1916  SEND_VAL_EX/116           ?80       207:'intval'         ?1                  	;0
		339  1916  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'array_unique'  	;1
		340  1916  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
		341  1916  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
		342  1916  SEND_VAR_NO_REF_EX/50     ?96       $162                 ?2                  	;0
		343  1916  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
		344  1916  ASSIGN_DIM/147            ?139      16?6                 204:'vod_ids'       	;0
		345  1916  OP_DATA/137               ?0        $163                 ?0                  	;0
		346  1917  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'array_map'     	;2
		347  1917  SEND_VAL_EX/116           ?80       213:'intval'         ?1                  	;0
		348  1917  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'array_unique'  	;1
		349  1917  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
		350  1917  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
		351  1917  SEND_VAR_NO_REF_EX/50     ?96       $165                 ?2                  	;0
		352  1917  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
		353  1917  ASSIGN_DIM/147            ?142      16?6                 210:'live_ids'      	;0
		354  1917  OP_DATA/137               ?0        $166                 ?0                  	;0
		355  1918  INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'array_map'     	;2
		356  1918  SEND_VAL_EX/116           ?80       219:'intval'         ?1                  	;0
		357  1918  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'array_unique'  	;1
		358  1918  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
		359  1918  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
		360  1918  SEND_VAR_NO_REF_EX/50     ?96       $168                 ?2                  	;0
		361  1918  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
		362  1918  ASSIGN_DIM/147            ?145      16?6                 216:'radio_ids'     	;0
		363  1918  OP_DATA/137               ?0        $169                 ?0                  	;0
		364  1919  GOTO/253                  ?0        ?239                 ?222                	;0
		365  1922  GOTO/253                  ?0        ?118                 ?223                	;0
		366  1924  FETCH_STATIC_PROP_R/173   $170=     224:'db'             ?513                	;0
		367  1924  INIT_METHOD_CALL/112      ?0        $170                 225:'query'         	;1
		368  1924  SEND_VAL_EX/116           ?80       227:'SELECT `access_output_id`, `output_key` FROM `output_formats`;' ?1                  	;0
		369  1924  DO_FCALL/60               ?149      ?0                   ?0                  	;0
		370  1925  FETCH_STATIC_PROP_R/173   $172=     228:'db'             ?513                	;0
		371  1925  INIT_METHOD_CALL/112      ?0        $172                 229:'get_rows'      	;0
		372  1925  DO_FCALL/60               $173=     ?0                   ?0                  	;0
		373  1925  FE_RESET_R/77             $174=     $173                 ?393                	;0
		374  1925  FE_FETCH_R/78             ?0        $174                 16?11               	;393	>>393	<<392
		375  1926  INIT_FCALL_BY_NAME/59     ?0        ?0                   231:'in_array'      	;2
		376  1926  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'intval'        	;1
		377  1926  FETCH_DIM_FUNC_ARG/93     $175=     16?11                235:'access_output_id'	;1
		378  1926  SEND_VAR_EX/66            ?80       $175                 ?1                  	;0
		379  1926  DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
		380  1926  SEND_VAR_NO_REF_EX/50     ?80       $176                 ?1                  	;0
		381  1926  FETCH_DIM_FUNC_ARG/93     $177=     16?6                 236:'allowed_outputs'	;2
		382  1926  SEND_VAR_EX/66            ?96       $177                 ?2                  	;0
		383  1926  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
		384  1926  BOOL_NOT/13               #179=     $178                 ?0                  	;0
		385  1926  JMPZ/43                   ?0        #179                 ?388                	;0	>>388
		386  1927  NOP/0                     ?0        ?0                   ?0                  	;1
		387  1927  GOTO/253                  ?0        ?392                 ?237                	;0
		388  1929  FETCH_DIM_R/81            $182=     16?11                239:'output_key'    	;0	<<385
		389  1929  FETCH_DIM_W/84            $180=     16?6                 238:'output_formats'	;0
		390  1929  ASSIGN_DIM/147            ?159      $180                 ?4397406            	;0
		391  1929  OP_DATA/137               ?0        $182                 ?0                  	;0
		392  1931  JMP/42                    ?0        ?374                 ?0                  	;0	>>374
		393  1931  FE_FREE/127               ?0        $174                 ?0                  	;0	<<373
		394  1933  GOTO/253                  ?0        ?118                 ?240                	;0
		395  1937  BOOL_NOT/13               #183=     16?0                 ?0                  	;0
		396  1937  JMPZ/43                   ?0        #183                 ?398                	;0	>>398
		397  1938  GOTO/253                  ?0        ?408                 ?241                	;0
		398  1940  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 242:'unserialize'   	;1	<<396
		399  1940  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'file_get_contents'	;1
		400  1940  FETCH_CONSTANT/99         #184=     ?0                   246:'LINES_TMP_PATH'	;16
		401  1940  CONCAT/8                  #185=     #184                 249:'line_i_'       	;0
		402  1940  CONCAT/8                  #186=     #185                 16?0                	;0
		403  1940  SEND_VAL_EX/116           ?80       #186                 ?1                  	;0
		404  1940  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
		405  1940  SEND_VAR/117              ?80       $187                 ?1                  	;0
		406  1940  DO_FCALL/60               $188=     ?0                   ?0                  	;0
		407  1940  ASSIGN/38                 ?167      16?6                 $188                	;0
		408  1942  GOTO/253                  ?0        ?201                 ?250                	;0
		409  1945  BOOL_NOT/13               #190=     16?3                 ?0                  	;0
		410  1945  JMPZ/43                   ?0        #190                 ?412                	;0	>>412
		411  1946  GOTO/253                  ?0        ?236                 ?251                	;0
		412  1948  ASSIGN/38                 $191=     16?15                252:array (
)       	;0	<<410
		413  1948  ASSIGN/38                 $192=     16?14                $191                	;0
		414  1948  ASSIGN/38                 $193=     16?10                $192                	;0
		415  1948  ASSIGN/38                 $194=     16?18                $193                	;0
		416  1948  ASSIGN/38                 $195=     16?16                $194                	;0
		417  1948  ASSIGN/38                 ?174      16?17                $195                	;0
		418  1949  FETCH_DIM_R/81            $197=     16?6                 253:'bouquet'       	;0
		419  1949  FE_RESET_R/77             $198=     $197                 ?507                	;0
		420  1949  FE_FETCH_R/78             ?0        $198                 16?19               	;507	>>507	<<506
		421  1950  NOP/0                     ?0        ?0                   ?0                  	;1
		422  1950  GOTO/253                  ?0        ?449                 ?254                	;0
		423  1953  NOP/0                     ?0        ?0                   ?0                  	;1
		424  1953  GOTO/253                  ?0        ?506                 ?255                	;0
		425  1956  FETCH_STATIC_PROP_IS/176  $199=     256:'rBouquets'      ?513                	;0
		426  1956  FETCH_DIM_IS/90           $200=     $199                 16?19               	;0
		427  1956  ISSET_ISEMPTY_DIM_OBJ/115 #201=     $200                 257:'channels'      	;33554432
		428  1956  BOOL_NOT/13               #202=     #201                 ?0                  	;0
		429  1956  JMPZ/43                   ?0        #202                 ?432                	;0	>>432
		430  1957  NOP/0                     ?0        ?0                   ?0                  	;1
		431  1957  GOTO/253                  ?0        ?440                 ?258                	;0
		432  1959  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'array_merge'   	;2	<<429
		433  1959  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
		434  1959  FETCH_STATIC_PROP_FUNC_ARG/177 $203=     261:'rBouquets'      ?513                	;2
		435  1959  FETCH_DIM_FUNC_ARG/93     $204=     $203                 16?19               	;2
		436  1959  FETCH_DIM_FUNC_ARG/93     $205=     $204                 262:'channels'      	;2
		437  1959  SEND_VAR_EX/66            ?96       $205                 ?2                  	;0
		438  1959  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
		439  1959  ASSIGN/38                 ?185      16?17                $206                	;0
		440  1961  FETCH_STATIC_PROP_IS/176  $208=     263:'rBouquets'      ?513                	;0
		441  1961  FETCH_DIM_IS/90           $209=     $208                 16?19               	;0
		442  1961  ISSET_ISEMPTY_DIM_OBJ/115 #210=     $209                 264:'movies'        	;33554432
		443  1961  BOOL_NOT/13               #211=     #210                 ?0                  	;0
		444  1961  JMPZ/43                   ?0        #211                 ?447                	;0	>>447
		445  1962  NOP/0                     ?0        ?0                   ?0                  	;1
		446  1962  GOTO/253                  ?0        ?489                 ?265                	;0
		447  1964  NOP/0                     ?0        ?0                   ?0                  	;1	<<444
		448  1964  GOTO/253                  ?0        ?481                 ?266                	;0
		449  1966  FETCH_STATIC_PROP_IS/176  $212=     267:'rBouquets'      ?513                	;0
		450  1966  FETCH_DIM_IS/90           $213=     $212                 16?19               	;0
		451  1966  ISSET_ISEMPTY_DIM_OBJ/115 #214=     $213                 268:'streams'       	;33554432
		452  1966  BOOL_NOT/13               #215=     #214                 ?0                  	;0
		453  1966  JMPZ/43                   ?0        #215                 ?456                	;0	>>456
		454  1967  NOP/0                     ?0        ?0                   ?0                  	;1
		455  1967  GOTO/253                  ?0        ?464                 ?269                	;0
		456  1969  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'array_merge'   	;2	<<453
		457  1969  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
		458  1969  FETCH_STATIC_PROP_FUNC_ARG/177 $216=     272:'rBouquets'      ?513                	;2
		459  1969  FETCH_DIM_FUNC_ARG/93     $217=     $216                 16?19               	;2
		460  1969  FETCH_DIM_FUNC_ARG/93     $218=     $217                 273:'streams'       	;2
		461  1969  SEND_VAR_EX/66            ?96       $218                 ?2                  	;0
		462  1969  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
		463  1969  ASSIGN/38                 ?198      16?14                $219                	;0
		464  1971  FETCH_STATIC_PROP_IS/176  $221=     274:'rBouquets'      ?513                	;0
		465  1971  FETCH_DIM_IS/90           $222=     $221                 16?19               	;0
		466  1971  ISSET_ISEMPTY_DIM_OBJ/115 #223=     $222                 275:'series'        	;33554432
		467  1971  BOOL_NOT/13               #224=     #223                 ?0                  	;0
		468  1971  JMPZ/43                   ?0        #224                 ?471                	;0	>>471
		469  1972  NOP/0                     ?0        ?0                   ?0                  	;1
		470  1972  GOTO/253                  ?0        ?425                 ?276                	;0
		471  1974  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'array_merge'   	;2	<<468
		472  1974  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
		473  1974  FETCH_STATIC_PROP_FUNC_ARG/177 $225=     279:'rBouquets'      ?513                	;2
		474  1974  FETCH_DIM_FUNC_ARG/93     $226=     $225                 16?19               	;2
		475  1974  FETCH_DIM_FUNC_ARG/93     $227=     $226                 280:'series'        	;2
		476  1974  SEND_VAR_EX/66            ?96       $227                 ?2                  	;0
		477  1974  DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
		478  1974  ASSIGN/38                 ?207      16?15                $228                	;0
		479  1975  NOP/0                     ?0        ?0                   ?0                  	;1
		480  1975  GOTO/253                  ?0        ?425                 ?281                	;0
		481  1977  INIT_FCALL_BY_NAME/59     ?0        ?0                   282:'array_merge'   	;2
		482  1977  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
		483  1977  FETCH_STATIC_PROP_FUNC_ARG/177 $230=     284:'rBouquets'      ?513                	;2
		484  1977  FETCH_DIM_FUNC_ARG/93     $231=     $230                 16?19               	;2
		485  1977  FETCH_DIM_FUNC_ARG/93     $232=     $231                 285:'movies'        	;2
		486  1977  SEND_VAR_EX/66            ?96       $232                 ?2                  	;0
		487  1977  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
		488  1977  ASSIGN/38                 ?212      16?16                $233                	;0
		489  1979  FETCH_STATIC_PROP_IS/176  $235=     286:'rBouquets'      ?513                	;0
		490  1979  FETCH_DIM_IS/90           $236=     $235                 16?19               	;0
		491  1979  ISSET_ISEMPTY_DIM_OBJ/115 #237=     $236                 287:'radios'        	;33554432
		492  1979  BOOL_NOT/13               #238=     #237                 ?0                  	;0
		493  1979  JMPZ/43                   ?0        #238                 ?496                	;0	>>496
		494  1980  NOP/0                     ?0        ?0                   ?0                  	;1
		495  1980  GOTO/253                  ?0        ?504                 ?288                	;0
		496  1982  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'array_merge'   	;2	<<493
		497  1982  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
		498  1982  FETCH_STATIC_PROP_FUNC_ARG/177 $239=     291:'rBouquets'      ?513                	;2
		499  1982  FETCH_DIM_FUNC_ARG/93     $240=     $239                 16?19               	;2
		500  1982  FETCH_DIM_FUNC_ARG/93     $241=     $240                 292:'radios'        	;2
		501  1982  SEND_VAR_EX/66            ?96       $241                 ?2                  	;0
		502  1982  DO_FCALL_BY_NAME/131      $242=     ?0                   ?0                  	;0
		503  1982  ASSIGN/38                 ?221      16?18                $242                	;0
		504  1984  NOP/0                     ?0        ?0                   ?0                  	;1
		505  1984  GOTO/253                  ?0        ?423                 ?293                	;0
		506  1985  JMP/42                    ?0        ?420                 ?0                  	;0	>>420
		507  1985  FE_FREE/127               ?0        $198                 ?0                  	;0	<<419
		508  1988  GOTO/253                  ?0        ?319                 ?294                	;0
		509  1991  FETCH_STATIC_PROP_R/173   $244=     295:'db'             ?513                	;0
		510  1991  INIT_METHOD_CALL/112      ?0        $244                 296:'query'         	;1
		511  1991  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'implode'       	;2
		512  1991  SEND_VAL_EX/116           ?80       300:','              ?1                  	;0
		513  1991  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'array_map'     	;2
		514  1991  SEND_VAL_EX/116           ?80       303:'intval'         ?1                  	;0
		515  1991  FETCH_DIM_FUNC_ARG/93     $245=     16?6                 304:'series_ids'    	;2
		516  1991  SEND_VAR_EX/66            ?96       $245                 ?2                  	;0
		517  1991  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
		518  1991  SEND_VAR_NO_REF_EX/50     ?96       $246                 ?2                  	;0
		519  1991  DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
		520  1991  CONCAT/8                  #248=     305:'SELECT DISTINCT(`category_id`) FROM `streams_series` WHERE `id` IN (' $247                	;0
		521  1991  CONCAT/8                  #249=     #248                 306:');'            	;0
		522  1991  SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
		523  1991  DO_FCALL/60               ?228      ?0                   ?0                  	;0
		524  1993  FETCH_STATIC_PROP_R/173   $251=     307:'db'             ?513                	;0
		525  1993  INIT_METHOD_CALL/112      ?0        $251                 308:'get_rows'      	;2
		526  1993  SEND_VAL_EX/116           ?80       310:true             ?1                  	;0
		527  1993  SEND_VAL_EX/116           ?96       311:'category_id'    ?2                  	;0
		528  1993  DO_FCALL/60               $252=     ?0                   ?0                  	;0
		529  1993  FE_RESET_R/77             $253=     $252                 ?561                	;0
		530  1993  FE_FETCH_R/78             ?0        $253                 16?13               	;561	>>561	<<560
		531  1994  FETCH_CONSTANT/99         #254=     ?0                   312:'PLATFORM'      	;16
		532  1994  IS_EQUAL/17               #255=     #254                 315:'xui'           	;0
		533  1994  JMPZ/43                   ?0        #255                 ?536                	;0	>>536
		534  1995  NOP/0                     ?0        ?0                   ?0                  	;1
		535  1995  GOTO/253                  ?0        ?541                 ?316                	;0
		536  1997  FETCH_DIM_R/81            $257=     16?13                317:'category_id'   	;0	<<533
		537  1997  ASSIGN_DIM/147            ?234      16?10                ?4397406            	;0
		538  1997  OP_DATA/137               ?0        $257                 ?0                  	;0
		539  1998  NOP/0                     ?0        ?0                   ?0                  	;1
		540  1998  GOTO/253                  ?0        ?560                 ?318                	;0
		541  2000  INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'json_decode'   	;2
		542  2000  FETCH_DIM_FUNC_ARG/93     $258=     16?13                321:'category_id'   	;1
		543  2000  SEND_VAR_EX/66            ?80       $258                 ?1                  	;0
		544  2000  SEND_VAL_EX/116           ?96       322:true             ?2                  	;0
		545  2000  DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
		546  2000  FE_RESET_R/77             $260=     $259                 ?559                	;0
		547  2000  FE_FETCH_R/78             ?0        $260                 16?9                	;559	>>559	<<558
		548  2001  INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'in_array'      	;2
		549  2001  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
		550  2001  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
		551  2001  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
		552  2001  JMPZ/43                   ?0        $261                 ?556                	;0	>>556
		553  2002  NOP/0                     ?0        ?0                   ?0                  	;1
		554  2002  NOP/0                     ?0        ?0                   ?0                  	;1
		555  2002  GOTO/253                  ?0        ?558                 ?325                	;0
		556  2004  ASSIGN_DIM/147            ?240      16?10                ?4397406            	;0	<<552
		557  2004  OP_DATA/137               ?0        16?9                 ?0                  	;0
		558  2006  JMP/42                    ?0        ?547                 ?0                  	;0	>>547
		559  2006  FE_FREE/127               ?0        $260                 ?0                  	;0	<<546
		560  2010  JMP/42                    ?0        ?530                 ?0                  	;0	>>530
		561  2010  FE_FREE/127               ?0        $253                 ?0                  	;0	<<529
		562  2013  GOTO/253                  ?0        ?959                 ?326                	;0
		563  2016  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'count'         	;1
		564  2016  FETCH_DIM_FUNC_ARG/93     $263=     16?6                 329:'series_ids'    	;1
		565  2016  SEND_VAR_EX/66            ?80       $263                 ?1                  	;0
		566  2016  DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
		567  2016  IS_SMALLER/19             #265=     330:0                $264                	;0
		568  2016  BOOL_NOT/13               #266=     #265                 ?0                  	;0
		569  2016  JMPZ/43                   ?0        #266                 ?571                	;0	>>571
		570  2017  GOTO/253                  ?0        ?959                 ?331                	;0
		571  2019  FETCH_CONSTANT/99         #267=     ?0                   332:'PLATFORM'      	;16	<<569
		572  2019  IS_EQUAL/17               #268=     #267                 335:'xui'           	;0
		573  2019  JMPZ/43                   ?0        #268                 ?575                	;0	>>575
		574  2020  GOTO/253                  ?0        ?509                 ?336                	;0
		575  2022  FETCH_STATIC_PROP_R/173   $269=     337:'db'             ?513                	;0	<<573
		576  2022  INIT_METHOD_CALL/112      ?0        $269                 338:'query'         	;1
		577  2022  INIT_FCALL_BY_NAME/59     ?0        ?0                   340:'implode'       	;2
		578  2022  SEND_VAL_EX/116           ?80       342:','              ?1                  	;0
		579  2022  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'array_map'     	;2
		580  2022  SEND_VAL_EX/116           ?80       345:'intval'         ?1                  	;0
		581  2022  FETCH_DIM_FUNC_ARG/93     $270=     16?6                 346:'series_ids'    	;2
		582  2022  SEND_VAR_EX/66            ?96       $270                 ?2                  	;0
		583  2022  DO_FCALL_BY_NAME/131      $271=     ?0                   ?0                  	;0
		584  2022  SEND_VAR_NO_REF_EX/50     ?96       $271                 ?2                  	;0
		585  2022  DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
		586  2022  CONCAT/8                  #273=     347:'SELECT DISTINCT(`category_id`) FROM `series` WHERE `id` IN (' $272                	;0
		587  2022  CONCAT/8                  #274=     #273                 348:');'            	;0
		588  2022  SEND_VAL_EX/116           ?80       #274                 ?1                  	;0
		589  2022  DO_FCALL/60               ?253      ?0                   ?0                  	;0
		590  2023  GOTO/253                  ?0        ?524                 ?349                	;0
		591  2024  GOTO/253                  ?0        ?509                 ?350                	;0
		592  2026  FETCH_STATIC_PROP_R/173   $276=     351:'db'             ?513                	;0
		593  2026  INIT_METHOD_CALL/112      ?0        $276                 352:'query'         	;2
		594  2026  SEND_VAL_EX/116           ?80       354:'SELECT * FROM `users` WHERE `id` = ?' ?1                  	;0
		595  2026  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		596  2026  DO_FCALL/60               ?255      ?0                   ?0                  	;0
		597  2027  GOTO/253                  ?0        ?603                 ?355                	;0
		598  2029  FETCH_STATIC_PROP_R/173   $278=     356:'db'             ?513                	;0
		599  2029  INIT_METHOD_CALL/112      ?0        $278                 357:'query'         	;2
		600  2029  SEND_VAL_EX/116           ?80       359:'SELECT * FROM `lines` WHERE `id` = ?' ?1                  	;0
		601  2029  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		602  2029  DO_FCALL/60               ?257      ?0                   ?0                  	;0
		603  2031  GOTO/253                  ?0        ?722                 ?360                	;0
		604  2033  ASSIGN_DIM/147            ?258      16?6                 361:'output_formats'	;0
		605  2033  OP_DATA/137               ?0        362:array (
)        ?0                  	;0
		606  2034  FETCH_STATIC_PROP_R/173   $281=     363:'rCached'        ?513                	;0
		607  2034  JMPZ/43                   ?0        $281                 ?609                	;0	>>609
		608  2035  GOTO/253                  ?0        ?119                 ?364                	;0
		609  2037  FETCH_CONSTANT/99         #282=     ?0                   365:'PLATFORM'      	;16	<<607
		610  2037  IS_EQUAL/17               #283=     #282                 368:'xui'           	;0
		611  2037  JMPZ/43                   ?0        #283                 ?613                	;0	>>613
		612  2038  GOTO/253                  ?0        ?366                 ?369                	;0
		613  2040  FETCH_STATIC_PROP_R/173   $284=     370:'db'             ?513                	;0	<<611
		614  2040  INIT_METHOD_CALL/112      ?0        $284                 371:'query'         	;2
		615  2040  SEND_VAL_EX/116           ?80       373:'SELECT `user_output`.`access_output_id`, `access_output`.`output_key` FROM `user_output` LEFT JOIN `access_output` ON `user_output`.`access_output_id` = `access_output`.`access_output_id` WHERE `user_output`.`user_id` = ?;' ?1                  	;0
		616  2040  FETCH_DIM_FUNC_ARG/93     $285=     16?6                 374:'id'            	;2
		617  2040  SEND_VAR_EX/66            ?96       $285                 ?2                  	;0
		618  2040  DO_FCALL/60               ?264      ?0                   ?0                  	;0
		619  2041  FETCH_STATIC_PROP_R/173   $287=     375:'db'             ?513                	;0
		620  2041  INIT_METHOD_CALL/112      ?0        $287                 376:'get_rows'      	;0
		621  2041  DO_FCALL/60               $288=     ?0                   ?0                  	;0
		622  2041  FE_RESET_R/77             $289=     $288                 ?633                	;0
		623  2041  FE_FETCH_R/78             ?0        $289                 16?11               	;633	>>633	<<632
		624  2042  FETCH_DIM_R/81            $292=     16?11                379:'access_output_id'	;0
		625  2042  FETCH_DIM_W/84            $290=     16?6                 378:'allowed_outputs'	;0
		626  2042  ASSIGN_DIM/147            ?269      $290                 ?1662919496         	;0
		627  2042  OP_DATA/137               ?0        $292                 ?0                  	;0
		628  2043  FETCH_DIM_R/81            $295=     16?11                381:'output_key'    	;0
		629  2043  FETCH_DIM_W/84            $293=     16?6                 380:'output_formats'	;0
		630  2043  ASSIGN_DIM/147            ?272      $293                 ?0                  	;0
		631  2043  OP_DATA/137               ?0        $295                 ?0                  	;0
		632  2044  JMP/42                    ?0        ?623                 ?0                  	;0	>>623
		633  2044  FE_FREE/127               ?0        $289                 ?0                  	;0	<<622
		634  2046  GOTO/253                  ?0        ?365                 ?382                	;0
		635  2048  GOTO/253                  ?0        ?642                 ?383                	;0
		636  2050  FETCH_STATIC_PROP_R/173   $296=     384:'db'             ?513                	;0
		637  2050  INIT_METHOD_CALL/112      ?0        $296                 385:'query'         	;3
		638  2050  SEND_VAL_EX/116           ?80       387:'SELECT * FROM `lines` WHERE `username` = ? AND `password` = ? LIMIT 1' ?1                  	;0
		639  2050  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		640  2050  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		641  2050  DO_FCALL/60               ?275      ?0                   ?0                  	;0
		642  2053  GOTO/253                  ?0        ?790                 ?388                	;0
		643  2055  FETCH_STATIC_PROP_R/173   $298=     389:'db'             ?513                	;0
		644  2055  INIT_METHOD_CALL/112      ?0        $298                 390:'get_row'       	;0
		645  2055  DO_FCALL/60               $299=     ?0                   ?0                  	;0
		646  2055  ASSIGN/38                 ?278      16?6                 $299                	;0
		647  2057  GOTO/253                  ?0        ?201                 ?392                	;0
		648  2059  ISSET_ISEMPTY_CV/197      #301=     16?2                 ?0                  	;16777216
		649  2059  JMPZ_EX/46                #301=     #301                 ?652                	;0	>>652
		650  2059  ISSET_ISEMPTY_CV/197      #302=     16?0                 ?0                  	;16777216
		651  2059  BOOL/52                   #301=     #302                 ?0                  	;0
		652  2059  JMPZ_EX/46                #301=     #301                 ?658                	;0	>>658	<<649
		653  2059  INIT_FCALL_BY_NAME/59     ?0        ?0                   393:'strlen'        	;1
		654  2059  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		655  2059  DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
		656  2059  IS_EQUAL/17               #304=     $303                 395:32              	;0
		657  2059  BOOL/52                   #301=     #304                 ?0                  	;0
		658  2059  JMPZ/43                   ?0        #301                 ?660                	;0	>>660	<<652
		659  2060  GOTO/253                  ?0        ?20                  ?396                	;0
		660  2062  GOTO/253                  ?0        ?304                 ?397                	;0	<<658
		661  2064  FETCH_STATIC_PROP_R/173   $305=     398:'db'             ?513                	;0
		662  2064  INIT_METHOD_CALL/112      ?0        $305                 399:'query'         	;3
		663  2064  SEND_VAL_EX/116           ?80       401:'UPDATE `users` SET `isp_desc` = ? WHERE `id` = ?' ?1                  	;0
		664  2064  FETCH_DIM_FUNC_ARG/93     $306=     16?6                 402:'con_isp_name'  	;2
		665  2064  SEND_VAR_EX/66            ?96       $306                 ?2                  	;0
		666  2064  FETCH_DIM_FUNC_ARG/93     $307=     16?6                 403:'id'            	;3
		667  2064  SEND_VAR_EX/66            ?112      $307                 ?3                  	;0
		668  2064  DO_FCALL/60               ?286      ?0                   ?0                  	;0
		669  2065  GOTO/253                  ?0        ?680                 ?404                	;0
		670  2067  FETCH_STATIC_PROP_R/173   $309=     405:'db'             ?513                	;0
		671  2067  INIT_METHOD_CALL/112      ?0        $309                 406:'query'         	;4
		672  2067  SEND_VAL_EX/116           ?80       408:'UPDATE `lines` SET `isp_desc` = ?, `as_number` = ? WHERE `id` = ?' ?1                  	;0
		673  2067  FETCH_DIM_FUNC_ARG/93     $310=     16?6                 409:'con_isp_name'  	;2
		674  2067  SEND_VAR_EX/66            ?96       $310                 ?2                  	;0
		675  2067  FETCH_DIM_FUNC_ARG/93     $311=     16?6                 410:'isp_asn'       	;3
		676  2067  SEND_VAR_EX/66            ?112      $311                 ?3                  	;0
		677  2067  FETCH_DIM_FUNC_ARG/93     $312=     16?6                 411:'id'            	;4
		678  2067  SEND_VAR_EX/66            ?128      $312                 ?4                  	;0
		679  2067  DO_FCALL/60               ?291      ?0                   ?0                  	;0
		680  2069  GOTO/253                  ?0        ?61                  ?412                	;0
		681  2071  ASSIGN_DIM/147            ?292      16?6                 413:'allowed_outputs'	;0
		682  2071  OP_DATA/137               ?0        414:array (
)        ?0                  	;0
		683  2072  GOTO/253                  ?0        ?695                 ?415                	;0
		684  2074  INIT_FCALL_BY_NAME/59     ?0        ?0                   417:'array_map'     	;2
		685  2074  SEND_VAL_EX/116           ?80       419:'intval'         ?1                  	;0
		686  2074  INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'json_decode'   	;2
		687  2074  FETCH_DIM_FUNC_ARG/93     $316=     16?6                 422:'allowed_outputs'	;1
		688  2074  SEND_VAR_EX/66            ?80       $316                 ?1                  	;0
		689  2074  SEND_VAL_EX/116           ?96       423:true             ?2                  	;0
		690  2074  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
		691  2074  SEND_VAR_NO_REF_EX/50     ?96       $317                 ?2                  	;0
		692  2074  DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
		693  2074  ASSIGN_DIM/147            ?293      16?6                 416:'allowed_outputs'	;0
		694  2074  OP_DATA/137               ?0        $318                 ?0                  	;0
		695  2076  GOTO/253                  ?0        ?604                 ?424                	;0
		696  2078  ASSIGN_DIM/147            ?297      16?6                 425:'isp_violate'   	;0
		697  2078  OP_DATA/137               ?0        426:1                ?0                  	;0
		698  2080  FETCH_DIM_R/81            $320=     16?6                 427:'isp_violate'   	;0
		699  2080  IS_EQUAL/17               #321=     $320                 428:0               	;0
		700  2080  JMPZ_EX/46                #321=     #321                 ?711                	;0	>>711
		701  2080  INIT_FCALL_BY_NAME/59     ?0        ?0                   429:'strtolower'    	;1
		702  2080  FETCH_DIM_FUNC_ARG/93     $322=     16?6                 431:'con_isp_name'  	;1
		703  2080  SEND_VAR_EX/66            ?80       $322                 ?1                  	;0
		704  2080  DO_FCALL_BY_NAME/131      $323=     ?0                   ?0                  	;0
		705  2080  INIT_FCALL_BY_NAME/59     ?0        ?0                   432:'strtolower'    	;1
		706  2080  FETCH_DIM_FUNC_ARG/93     $324=     16?6                 434:'isp_desc'      	;1
		707  2080  SEND_VAR_EX/66            ?80       $324                 ?1                  	;0
		708  2080  DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
		709  2080  IS_NOT_EQUAL/18           #326=     $323                 $325                	;0
		710  2080  BOOL/52                   #321=     #326                 ?0                  	;0
		711  2080  BOOL_NOT/13               #327=     #321                 ?0                  	;0	<<700
		712  2080  JMPZ/43                   ?0        #327                 ?714                	;0	>>714
		713  2081  GOTO/253                  ?0        ?75                  ?435                	;0
		714  2083  FETCH_STATIC_PROP_R/173   $328=     436:'rCached'        ?513                	;0	<<712
		715  2083  JMPZ/43                   ?0        $328                 ?717                	;0	>>717
		716  2084  GOTO/253                  ?0        ?62                  ?437                	;0
		717  2086  FETCH_CONSTANT/99         #329=     ?0                   438:'PLATFORM'      	;16	<<715
		718  2086  IS_EQUAL/17               #330=     #329                 441:'xui'           	;0
		719  2086  JMPZ/43                   ?0        #330                 ?721                	;0	>>721
		720  2087  GOTO/253                  ?0        ?670                 ?442                	;0
		721  2089  GOTO/253                  ?0        ?661                 ?443                	;0	<<719
		722  2092  GOTO/253                  ?0        ?642                 ?444                	;0
		723  2094  FETCH_CONSTANT/99         #331=     ?0                   445:'PLATFORM'      	;16
		724  2094  IS_EQUAL/17               #332=     #331                 448:'xui'           	;0
		725  2094  JMPZ/43                   ?0        #332                 ?727                	;0	>>727
		726  2095  GOTO/253                  ?0        ?636                 ?449                	;0
		727  2097  FETCH_STATIC_PROP_R/173   $333=     450:'db'             ?513                	;0	<<725
		728  2097  INIT_METHOD_CALL/112      ?0        $333                 451:'query'         	;3
		729  2097  SEND_VAL_EX/116           ?80       453:'SELECT * FROM `users` WHERE `username` = ? AND `password` = ? LIMIT 1' ?1                  	;0
		730  2097  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		731  2097  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
		732  2097  DO_FCALL/60               ?312      ?0                   ?0                  	;0
		733  2098  GOTO/253                  ?0        ?635                 ?454                	;0
		734  2100  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 455:'verifyLicense' 	;0
		735  2100  DO_FCALL/60               ?313      ?0                   ?0                  	;0
		736  2101  ASSIGN/38                 ?314      16?6                 457:NULL            	;0
		737  2102  FETCH_STATIC_PROP_R/173   $337=     458:'rCached'        ?513                	;0
		738  2102  JMPZ/43                   ?0        $337                 ?740                	;0	>>740
		739  2103  GOTO/253                  ?0        ?648                 ?459                	;0
		740  2105  ISSET_ISEMPTY_CV/197      #338=     16?2                 ?0                  	;16777216	<<738
		741  2105  JMPZ_EX/46                #338=     #338                 ?744                	;0	>>744
		742  2105  ISSET_ISEMPTY_CV/197      #339=     16?0                 ?0                  	;16777216
		743  2105  BOOL/52                   #338=     #339                 ?0                  	;0
		744  2105  JMPZ_EX/46                #338=     #338                 ?750                	;0	>>750	<<741
		745  2105  INIT_FCALL_BY_NAME/59     ?0        ?0                   460:'strlen'        	;1
		746  2105  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		747  2105  DO_FCALL_BY_NAME/131      $340=     ?0                   ?0                  	;0
		748  2105  IS_EQUAL/17               #341=     $340                 462:32              	;0
		749  2105  BOOL/52                   #338=     #341                 ?0                  	;0
		750  2105  JMPZ/43                   ?0        #338                 ?752                	;0	>>752	<<744
		751  2106  GOTO/253                  ?0        ?791                 ?463                	;0
		752  2108  ISSET_ISEMPTY_CV/197      #342=     16?1                 ?0                  	;16777216	<<750
		753  2108  BOOL_NOT/13               #343=     #342                 ?0                  	;0
		754  2108  JMPZ_EX/46                #343=     #343                 ?758                	;0	>>758
		755  2108  ISSET_ISEMPTY_CV/197      #344=     16?2                 ?0                  	;16777216
		756  2108  BOOL_NOT/13               #345=     #344                 ?0                  	;0
		757  2108  BOOL/52                   #343=     #345                 ?0                  	;0
		758  2108  JMPZ/43                   ?0        #343                 ?760                	;0	>>760	<<754
		759  2109  GOTO/253                  ?0        ?723                 ?464                	;0
		760  2111  GOTO/253                  ?0        ?50                  ?465                	;0	<<758
		761  2113  FETCH_STATIC_PROP_R/173   $346=     466:'rSettings'      ?513                	;0
		762  2113  FETCH_DIM_R/81            $347=     $346                 467:'case_sensitive_line'	;0
		763  2113  JMPZ/43                   ?0        $347                 ?765                	;0	>>765
		764  2114  GOTO/253                  ?0        ?779                 ?468                	;0
		765  2116  INIT_FCALL_BY_NAME/59     ?0        ?0                   469:'intval'        	;1	<<763
		766  2116  INIT_FCALL_BY_NAME/59     ?0        ?0                   471:'file_get_contents'	;1
		767  2116  FETCH_CONSTANT/99         #348=     ?0                   473:'LINES_TMP_PATH'	;16
		768  2116  CONCAT/8                  #349=     #348                 476:'line_t_'       	;0
		769  2116  INIT_FCALL_BY_NAME/59     ?0        ?0                   477:'strtolower'    	;1
		770  2116  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		771  2116  DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
		772  2116  CONCAT/8                  #351=     #349                 $350                	;0
		773  2116  SEND_VAL_EX/116           ?80       #351                 ?1                  	;0
		774  2116  DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
		775  2116  SEND_VAR_NO_REF_EX/50     ?80       $352                 ?1                  	;0
		776  2116  DO_FCALL_BY_NAME/131      $353=     ?0                   ?0                  	;0
		777  2116  ASSIGN/38                 ?332      16?0                 $353                	;0
		778  2117  GOTO/253                  ?0        ?395                 ?479                	;0
		779  2119  INIT_FCALL_BY_NAME/59     ?0        ?0                   480:'intval'        	;1
		780  2119  INIT_FCALL_BY_NAME/59     ?0        ?0                   482:'file_get_contents'	;1
		781  2119  FETCH_CONSTANT/99         #355=     ?0                   484:'LINES_TMP_PATH'	;16
		782  2119  CONCAT/8                  #356=     #355                 487:'line_t_'       	;0
		783  2119  CONCAT/8                  #357=     #356                 16?1                	;0
		784  2119  SEND_VAL_EX/116           ?80       #357                 ?1                  	;0
		785  2119  DO_FCALL_BY_NAME/131      $358=     ?0                   ?0                  	;0
		786  2119  SEND_VAR_NO_REF_EX/50     ?80       $358                 ?1                  	;0
		787  2119  DO_FCALL_BY_NAME/131      $359=     ?0                   ?0                  	;0
		788  2119  ASSIGN/38                 ?338      16?0                 $359                	;0
		789  2120  GOTO/253                  ?0        ?395                 ?488                	;0
		790  2122  GOTO/253                  ?0        ?920                 ?489                	;0
		791  2124  FETCH_CONSTANT/99         #361=     ?0                   490:'PLATFORM'      	;16
		792  2124  IS_EQUAL/17               #362=     #361                 493:'xui'           	;0
		793  2124  JMPZ/43                   ?0        #362                 ?795                	;0	>>795
		794  2125  GOTO/253                  ?0        ?915                 ?494                	;0
		795  2127  RETURN/62                 ?0        495:false            ?0                  	;0	<<793
		796  2128  GOTO/253                  ?0        ?920                 ?496                	;0
		797  2129  GOTO/253                  ?0        ?915                 ?497                	;0
		798  2132  INIT_FCALL_BY_NAME/59     ?0        ?0                   499:'json_decode'   	;2
		799  2132  FETCH_DIM_FUNC_ARG/93     $364=     16?6                 501:'bouquet'       	;1
		800  2132  SEND_VAR_EX/66            ?80       $364                 ?1                  	;0
		801  2132  SEND_VAL_EX/116           ?96       502:true             ?2                  	;0
		802  2132  DO_FCALL_BY_NAME/131      $365=     ?0                   ?0                  	;0
		803  2132  ASSIGN_DIM/147            ?341      16?6                 498:'bouquet'       	;0
		804  2132  OP_DATA/137               ?0        $365                 ?0                  	;0
		805  2133  BEGIN_SILENCE/57          #367=     ?0                   ?0                  	;0
		806  2133  INIT_FCALL_BY_NAME/59     ?0        ?0                   504:'array_filter'  	;1
		807  2133  INIT_FCALL_BY_NAME/59     ?0        ?0                   506:'array_map'     	;2
		808  2133  SEND_VAL_EX/116           ?80       508:'trim'           ?1                  	;0
		809  2133  INIT_FCALL_BY_NAME/59     ?0        ?0                   509:'json_decode'   	;2
		810  2133  FETCH_DIM_FUNC_ARG/93     $368=     16?6                 511:'allowed_ips'   	;1
		811  2133  SEND_VAR_EX/66            ?80       $368                 ?1                  	;0
		812  2133  SEND_VAL_EX/116           ?96       512:true             ?2                  	;0
		813  2133  DO_FCALL_BY_NAME/131      $369=     ?0                   ?0                  	;0
		814  2133  SEND_VAR_NO_REF_EX/50     ?96       $369                 ?2                  	;0
		815  2133  DO_FCALL_BY_NAME/131      $370=     ?0                   ?0                  	;0
		816  2133  SEND_VAR_NO_REF_EX/50     ?80       $370                 ?1                  	;0
		817  2133  DO_FCALL_BY_NAME/131      $371=     ?0                   ?0                  	;0
		818  2133  END_SILENCE/58            ?0        #367                 ?0                  	;0
		819  2133  ASSIGN_DIM/147            ?344      16?6                 503:'allowed_ips'   	;0
		820  2133  OP_DATA/137               ?0        $371                 ?0                  	;0
		821  2134  BEGIN_SILENCE/57          #373=     ?0                   ?0                  	;0
		822  2134  INIT_FCALL_BY_NAME/59     ?0        ?0                   514:'array_filter'  	;1
		823  2134  INIT_FCALL_BY_NAME/59     ?0        ?0                   516:'array_map'     	;2
		824  2134  SEND_VAL_EX/116           ?80       518:'trim'           ?1                  	;0
		825  2134  INIT_FCALL_BY_NAME/59     ?0        ?0                   519:'json_decode'   	;2
		826  2134  FETCH_DIM_FUNC_ARG/93     $374=     16?6                 521:'allowed_ua'    	;1
		827  2134  SEND_VAR_EX/66            ?80       $374                 ?1                  	;0
		828  2134  SEND_VAL_EX/116           ?96       522:true             ?2                  	;0
		829  2134  DO_FCALL_BY_NAME/131      $375=     ?0                   ?0                  	;0
		830  2134  SEND_VAR_NO_REF_EX/50     ?96       $375                 ?2                  	;0
		831  2134  DO_FCALL_BY_NAME/131      $376=     ?0                   ?0                  	;0
		832  2134  SEND_VAR_NO_REF_EX/50     ?80       $376                 ?1                  	;0
		833  2134  DO_FCALL_BY_NAME/131      $377=     ?0                   ?0                  	;0
		834  2134  END_SILENCE/58            ?0        #373                 ?0                  	;0
		835  2134  ASSIGN_DIM/147            ?350      16?6                 513:'allowed_ua'    	;0
		836  2134  OP_DATA/137               ?0        $377                 ?0                  	;0
		837  2135  FETCH_CONSTANT/99         #378=     ?0                   523:'PLATFORM'      	;16
		838  2135  IS_EQUAL/17               #379=     #378                 526:'xui'           	;0
		839  2135  JMPZ/43                   ?0        #379                 ?841                	;0	>>841
		840  2136  GOTO/253                  ?0        ?684                 ?527                	;0
		841  2138  GOTO/253                  ?0        ?681                 ?528                	;0	<<839
		842  2140  INIT_FCALL_BY_NAME/59     ?0        ?0                   529:'count'         	;1
		843  2140  FETCH_DIM_FUNC_ARG/93     $380=     16?6                 531:'channel_ids'   	;1
		844  2140  SEND_VAR_EX/66            ?80       $380                 ?1                  	;0
		845  2140  DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
		846  2140  IS_SMALLER/19             #382=     532:0                $381                	;0
		847  2140  BOOL_NOT/13               #383=     #382                 ?0                  	;0
		848  2140  JMPZ/43                   ?0        #383                 ?850                	;0	>>850
		849  2141  GOTO/253                  ?0        ?882                 ?533                	;0
		850  2143  FETCH_DIM_R/81            $384=     16?6                 534:'channel_ids'   	;0	<<848
		851  2143  FE_RESET_R/77             $385=     $384                 ?881                	;0
		852  2143  FE_FETCH_R/78             ?0        $385                 16?20               	;881	>>881	<<880
		853  2144  ISSET_ISEMPTY_DIM_OBJ/115 #386=     16?21                16?20               	;33554432
		854  2144  BOOL_NOT/13               #387=     #386                 ?0                  	;0
		855  2144  JMPZ/43                   ?0        #387                 ?858                	;0	>>858
		856  2145  NOP/0                     ?0        ?0                   ?0                  	;1
		857  2145  GOTO/253                  ?0        ?880                 ?535                	;0
		858  2147  INIT_FCALL_BY_NAME/59     ?0        ?0                   536:'array_values'  	;1	<<855
		859  2147  FETCH_DIM_FUNC_ARG/93     $388=     16?21                16?20               	;1
		860  2147  SEND_VAR_EX/66            ?80       $388                 ?1                  	;0
		861  2147  DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
		862  2147  FE_RESET_R/77             $390=     $389                 ?879                	;0
		863  2147  FE_FETCH_R/78             ?0        $390                 16?9                	;879	>>879	<<878
		864  2148  JMPZ_EX/46                #391=     16?9                 ?871                	;0	>>871
		865  2148  INIT_FCALL_BY_NAME/59     ?0        ?0                   538:'in_array'      	;2
		866  2148  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
		867  2148  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
		868  2148  DO_FCALL_BY_NAME/131      $392=     ?0                   ?0                  	;0
		869  2148  BOOL_NOT/13               #393=     $392                 ?0                  	;0
		870  2148  BOOL/52                   #391=     #393                 ?0                  	;0
		871  2148  BOOL_NOT/13               #394=     #391                 ?0                  	;0	<<864
		872  2148  JMPZ/43                   ?0        #394                 ?876                	;0	>>876
		873  2149  NOP/0                     ?0        ?0                   ?0                  	;1
		874  2149  NOP/0                     ?0        ?0                   ?0                  	;1
		875  2149  GOTO/253                  ?0        ?878                 ?540                	;0
		876  2151  ASSIGN_DIM/147            ?373      16?10                ?4397406            	;0	<<872
		877  2151  OP_DATA/137               ?0        16?9                 ?0                  	;0
		878  2153  JMP/42                    ?0        ?863                 ?0                  	;0	>>863
		879  2153  FE_FREE/127               ?0        $390                 ?0                  	;0	<<862
		880  2157  JMP/42                    ?0        ?852                 ?0                  	;0	>>852
		881  2157  FE_FREE/127               ?0        $385                 ?0                  	;0	<<851
		882  2161  INIT_FCALL_BY_NAME/59     ?0        ?0                   541:'count'         	;1
		883  2161  FETCH_DIM_FUNC_ARG/93     $396=     16?6                 543:'series_ids'    	;1
		884  2161  SEND_VAR_EX/66            ?80       $396                 ?1                  	;0
		885  2161  DO_FCALL_BY_NAME/131      $397=     ?0                   ?0                  	;0
		886  2161  IS_SMALLER/19             #398=     544:0                $397                	;0
		887  2161  BOOL_NOT/13               #399=     #398                 ?0                  	;0
		888  2161  JMPZ/43                   ?0        #399                 ?890                	;0	>>890
		889  2162  GOTO/253                  ?0        ?108                 ?545                	;0
		890  2164  GOTO/253                  ?0        ?76                  ?546                	;0	<<888
		891  2167  FETCH_STATIC_PROP_R/173   $400=     547:'rSettings'      ?513                	;0
		892  2167  FETCH_DIM_R/81            $401=     $400                 548:'case_sensitive_line'	;0
		893  2167  JMPZ/43                   ?0        $401                 ?895                	;0	>>895
		894  2168  GOTO/253                  ?0        ?914                 ?549                	;0
		895  2170  INIT_FCALL_BY_NAME/59     ?0        ?0                   550:'intval'        	;1	<<893
		896  2170  INIT_FCALL_BY_NAME/59     ?0        ?0                   552:'file_get_contents'	;1
		897  2170  FETCH_CONSTANT/99         #402=     ?0                   554:'LINES_TMP_PATH'	;16
		898  2170  CONCAT/8                  #403=     #402                 557:'line_c_'       	;0
		899  2170  INIT_FCALL_BY_NAME/59     ?0        ?0                   558:'strtolower'    	;1
		900  2170  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		901  2170  DO_FCALL_BY_NAME/131      $404=     ?0                   ?0                  	;0
		902  2170  CONCAT/8                  #405=     #403                 $404                	;0
		903  2170  CONCAT/8                  #406=     #405                 560:'_'             	;0
		904  2170  INIT_FCALL_BY_NAME/59     ?0        ?0                   561:'strtolower'    	;1
		905  2170  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		906  2170  DO_FCALL_BY_NAME/131      $407=     ?0                   ?0                  	;0
		907  2170  CONCAT/8                  #408=     #406                 $407                	;0
		908  2170  SEND_VAL_EX/116           ?80       #408                 ?1                  	;0
		909  2170  DO_FCALL_BY_NAME/131      $409=     ?0                   ?0                  	;0
		910  2170  SEND_VAR_NO_REF_EX/50     ?80       $409                 ?1                  	;0
		911  2170  DO_FCALL_BY_NAME/131      $410=     ?0                   ?0                  	;0
		912  2170  ASSIGN/38                 ?389      16?0                 $410                	;0
		913  2171  GOTO/253                  ?0        ?19                  ?563                	;0
		914  2173  GOTO/253                  ?0        ?7                   ?564                	;0
		915  2176  FETCH_STATIC_PROP_R/173   $412=     565:'db'             ?513                	;0
		916  2176  INIT_METHOD_CALL/112      ?0        $412                 566:'query'         	;2
		917  2176  SEND_VAL_EX/116           ?80       568:'SELECT * FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 0 AND `access_token` = ? AND LENGTH(`access_token`) = 32' ?1                  	;0
		918  2176  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		919  2176  DO_FCALL/60               ?391      ?0                   ?0                  	;0
		920  2179  FETCH_STATIC_PROP_R/173   $414=     569:'db'             ?513                	;0
		921  2179  INIT_METHOD_CALL/112      ?0        $414                 570:'num_rows'      	;0
		922  2179  DO_FCALL/60               $415=     ?0                   ?0                  	;0
		923  2179  IS_SMALLER/19             #416=     572:0                $415                	;0
		924  2179  BOOL_NOT/13               #417=     #416                 ?0                  	;0
		925  2179  JMPZ/43                   ?0        #417                 ?927                	;0	>>927
		926  2180  GOTO/253                  ?0        ?647                 ?573                	;0
		927  2182  GOTO/253                  ?0        ?643                 ?574                	;0	<<925
		928  2184  FETCH_CONSTANT/99         #418=     ?0                   575:'PLATFORM'      	;16
		929  2184  IS_EQUAL/17               #419=     #418                 578:'xui'           	;0
		930  2184  JMPZ_EX/46                #419=     #419                 ?935                	;0	>>935
		931  2184  FETCH_STATIC_PROP_R/173   $420=     579:'rSettings'      ?513                	;0
		932  2184  FETCH_DIM_R/81            $421=     $420                 580:'show_isps'     	;0
		933  2184  IS_EQUAL/17               #422=     $421                 581:1               	;0
		934  2184  BOOL/52                   #419=     #422                 ?0                  	;0
		935  2184  JMPZ_EX/46                #419=     #419                 ?939                	;0	>>939	<<930
		936  2184  ISSET_ISEMPTY_CV/197      #423=     16?5                 ?0                  	;16777216
		937  2184  BOOL_NOT/13               #424=     #423                 ?0                  	;0
		938  2184  BOOL/52                   #419=     #424                 ?0                  	;0
		939  2184  BOOL_NOT/13               #425=     #419                 ?0                  	;0	<<935
		940  2184  JMPZ/43                   ?0        #425                 ?942                	;0	>>942
		941  2185  GOTO/253                  ?0        ?409                 ?582                	;0
		942  2187  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 583:'D6b3157e40Ff47d6'	;1	<<940
		943  2187  SEND_VAR/117              ?80       16?5                 ?1                  	;0
		944  2187  DO_FCALL/60               $426=     ?0                   ?0                  	;0
		945  2187  ASSIGN/38                 ?405      16?12                $426                	;0
		946  2188  INIT_FCALL_BY_NAME/59     ?0        ?0                   585:'is_array'      	;1
		947  2188  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
		948  2188  DO_FCALL_BY_NAME/131      $428=     ?0                   ?0                  	;0
		949  2188  BOOL_NOT/13               #429=     $428                 ?0                  	;0
		950  2188  JMPZ/43                   ?0        #429                 ?952                	;0	>>952
		951  2189  GOTO/253                  ?0        ?167                 ?587                	;0
		952  2191  ISSET_ISEMPTY_DIM_OBJ/115 #430=     16?12                588:'isp'           	;16777216	<<950
		953  2191  JMPZ/43                   ?0        #430                 ?955                	;0	>>955
		954  2192  GOTO/253                  ?0        ?167                 ?589                	;0
		955  2194  FETCH_DIM_R/81            $432=     16?12                591:'isp'           	;0	<<953
		956  2194  ASSIGN_DIM/147            ?409      16?6                 590:'con_isp_name'  	;0
		957  2194  OP_DATA/137               ?0        $432                 ?0                  	;0
		958  2195  GOTO/253                  ?0        ?158                 ?592                	;0
		959  2198  GOTO/253                  ?0        ?108                 ?593                	;0
		960  2200  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 594:'unserialize'   	;1
		961  2200  INIT_FCALL_BY_NAME/59     ?0        ?0                   596:'file_get_contents'	;1
		962  2200  FETCH_CONSTANT/99         #433=     ?0                   598:'STREAMS_TMP_PATH'	;16
		963  2200  CONCAT/8                  #434=     #433                 601:'channels_categories'	;0
		964  2200  SEND_VAL_EX/116           ?80       #434                 ?1                  	;0
		965  2200  DO_FCALL_BY_NAME/131      $435=     ?0                   ?0                  	;0
		966  2200  SEND_VAR/117              ?80       $435                 ?1                  	;0
		967  2200  DO_FCALL/60               $436=     ?0                   ?0                  	;0
		968  2200  ASSIGN/38                 ?415      16?21                $436                	;0
		969  2201  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 602:'unserialize'   	;1
		970  2201  INIT_FCALL_BY_NAME/59     ?0        ?0                   604:'file_get_contents'	;1
		971  2201  FETCH_CONSTANT/99         #438=     ?0                   606:'SERIES_TMP_PATH'	;16
		972  2201  CONCAT/8                  #439=     #438                 609:'series_categories'	;0
		973  2201  SEND_VAL_EX/116           ?80       #439                 ?1                  	;0
		974  2201  DO_FCALL_BY_NAME/131      $440=     ?0                   ?0                  	;0
		975  2201  SEND_VAR/117              ?80       $440                 ?1                  	;0
		976  2201  DO_FCALL/60               $441=     ?0                   ?0                  	;0
		977  2201  ASSIGN/38                 ?420      16?8                 $441                	;0
		978  2202  GOTO/253                  ?0        ?842                 ?610                	;0
		979  2204  NOP/0                     ?0        611:NULL             ?0                  	;4294967295
		*/
	}

	static public function C59E849742699501($Bb672d1983256a93, $ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2205  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2205  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2207  FETCH_CONSTANT/99         #2=       ?0                   0:'PLATFORM'        	;16
		3    2207  IS_NOT_EQUAL/18           #3=       #2                   3:'xui'             	;0
		4    2207  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		5    2207  JMPZ/43                   ?0        #4                   ?7                  	;0	>>7
		6    2208  GOTO/253                  ?0        ?8                   ?4                  	;0
		7    2210  RETURN/62                 ?0        5:false              ?0                  	;0	<<5
		8    2212  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'file_put_contents'	;2
		9    2212  FETCH_CONSTANT/99         #5=       ?0                   8:'SIGNALS_TMP_PATH'	;16
		10   2212  CONCAT/8                  #6=       #5                   11:'cache_'         	;0
		11   2212  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'md5'            	;1
		12   2212  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		13   2212  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		14   2212  CONCAT/8                  #8=       #6                   $7                  	;0
		15   2212  SEND_VAL_EX/116           ?80       #8                   ?1                  	;0
		16   2212  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_encode'    	;1
		17   2212  INIT_ARRAY/71             #9=       16?0                 ?0                  	;8
		18   2212  ADD_ARRAY_ELEMENT/72      #9=       16?1                 ?0                  	;0
		19   2212  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		20   2212  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		21   2212  SEND_VAR_NO_REF_EX/50     ?96       $10                  ?2                  	;0
		22   2212  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
		23   2213  NOP/0                     ?0        16:NULL              ?0                  	;4294967295
		*/
	}

	static public function c3520d240f17DcB1()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2216  FETCH_STATIC_PROP_R/173   $2=       0:'rServers'         ?513                	;0
		1    2216  FE_RESET_R/77             $3=       $2                   ?23                 	;0
		2    2216  FE_FETCH_R/78             #4=       $3                   16?0                	;23	>>23	<<22
		3    2216  ASSIGN/38                 ?3        16?1                 #4                  	;0
		4    2217  ISSET_ISEMPTY_DIM_OBJ/115 #6=       16?0                 1:'is_main'         	;33554432
		5    2217  JMPZ_EX/46                #6=       #6                   ?9                  	;0	>>9
		6    2217  FETCH_DIM_R/81            $7=       16?0                 2:'is_main'         	;0
		7    2217  IS_EQUAL/17               #8=       $7                   3:1                 	;0
		8    2217  BOOL/52                   #6=       #8                   ?0                  	;0
		9    2217  JMPNZ_EX/47               #6=       #6                   ?16                 	;0	>>16	<<5
		10   2217  ISSET_ISEMPTY_DIM_OBJ/115 #9=       16?0                 4:'can_delete'      	;33554432
		11   2217  JMPZ_EX/46                #9=       #9                   ?15                 	;0	>>15
		12   2217  FETCH_DIM_R/81            $10=      16?0                 5:'can_delete'      	;0
		13   2217  IS_EQUAL/17               #11=      $10                  6:0                 	;0
		14   2217  BOOL/52                   #9=       #11                  ?0                  	;0
		15   2217  BOOL/52                   #6=       #9                   ?0                  	;0	<<11
		16   2217  BOOL_NOT/13               #12=      #6                   ?0                  	;0	<<9
		17   2217  JMPZ/43                   ?0        #12                  ?20                 	;0	>>20
		18   2218  NOP/0                     ?0        ?0                   ?0                  	;1
		19   2218  GOTO/253                  ?0        ?22                  ?7                  	;0
		20   2220  FE_FREE/127               ?0        $3                   ?0                  	;1	<<17
		21   2220  RETURN/62                 ?0        16?1                 ?0                  	;0
		22   2222  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
		23   2222  FE_FREE/127               ?0        $3                   ?0                  	;0	<<1
		24   2225  RETURN/62                 ?0        8:NULL               ?0                  	;0
		25   2226  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static public function Ad72b4259ca295B2()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2229  FETCH_R/80                $0=       0:'_SERVER'          ?0                  	;0
		1    2229  FETCH_DIM_R/81            $1=       $0                   1:'REMOTE_ADDR'     	;0
		2    2229  RETURN/62                 ?0        $1                   ?0                  	;0
		3    2230  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
		*/
	}

	static public function AeEA5D3137274f80($b38e11ffdc6a3abb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2231  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    2233  GOTO/253                  ?0        ?126                 ?1                  	;0
		2    2235  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'file_put_contents'	;3
		3    2235  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		4    2235  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'json_encode'     	;1
		5    2235  INIT_ARRAY/71             #6=       6:0                  7:'requests'        	;10
		6    2235  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'time'            	;0
		7    2235  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		8    2235  ADD_ARRAY_ELEMENT/72      #6=       $7                   10:'last_request'   	;0
		9    2235  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
		10   2235  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		11   2235  SEND_VAR_NO_REF_EX/50     ?96       $8                   ?2                  	;0
		12   2235  FETCH_CONSTANT/99         #9=       ?0                   11:'LOCK_EX'        	;16
		13   2235  SEND_VAL_EX/116           ?112      #9                   ?3                  	;0
		14   2235  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
		15   2236  GOTO/253                  ?0        ?125                 ?14                 	;0
		16   2238  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'json_decode'    	;2
		17   2238  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'file_get_contents'	;1
		18   2238  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		19   2238  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		20   2238  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
		21   2238  SEND_VAL_EX/116           ?96       19:true              ?2                  	;0
		22   2238  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		23   2238  ASSIGN/38                 ?7        16?2                 $12                 	;0
		24   2239  FETCH_STATIC_PROP_R/173   $14=      20:'rSettings'       ?513                	;0
		25   2239  FETCH_DIM_R/81            $15=      $14                  21:'flood_seconds'  	;0
		26   2239  ASSIGN/38                 ?10       16?3                 $15                 	;0
		27   2240  GOTO/253                  ?0        ?99                  ?22                 	;0
		28   2242  GOTO/253                  ?0        ?81                  ?23                 	;0
		29   2244  FETCH_DIM_RW/87           $17=      16?2                 24:'requests'       	;0
		30   2244  POST_INC/36               #18=      $17                  ?0                  	;0
		31   2244  FREE/70                   ?0        #18                  ?0                  	;0
		32   2245  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'time'           	;0
		33   2245  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		34   2245  ASSIGN_DIM/147            ?13       16?2                 25:'last_request'   	;0
		35   2245  OP_DATA/137               ?0        $20                  ?0                  	;0
		36   2246  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'file_put_contents'	;3
		37   2246  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		38   2246  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'json_encode'    	;1
		39   2246  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		40   2246  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		41   2246  SEND_VAR_NO_REF_EX/50     ?96       $21                  ?2                  	;0
		42   2246  FETCH_CONSTANT/99         #22=      ?0                   32:'LOCK_EX'        	;16
		43   2246  SEND_VAL_EX/116           ?112      #22                  ?3                  	;0
		44   2246  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
		45   2247  GOTO/253                  ?0        ?72                  ?35                 	;0
		46   2250  ISSET_ISEMPTY_CV/197      #24=      16?0                 ?0                  	;16777216
		47   2250  JMPNZ_EX/47               #24=      #24                  ?54                 	;0	>>54
		48   2250  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'in_array'       	;2
		49   2250  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		50   2250  FETCH_STATIC_PROP_FUNC_ARG/177 $25=      38:'rAllowedIPs'     ?513                	;2
		51   2250  SEND_VAR_EX/66            ?96       $25                  ?2                  	;0
		52   2250  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		53   2250  BOOL/52                   #24=      $26                  ?0                  	;0
		54   2250  BOOL_NOT/13               #27=      #24                  ?0                  	;0	<<47
		55   2250  JMPZ/43                   ?0        #27                  ?57                 	;0	>>57
		56   2251  GOTO/253                  ?0        ?58                  ?39                 	;0
		57   2253  RETURN/62                 ?0        40:NULL              ?0                  	;0	<<55
		58   2255  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'array_filter'   	;1
		59   2255  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'array_unique'   	;1
		60   2255  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'explode'        	;2
		61   2255  SEND_VAL_EX/116           ?80       47:','               ?1                  	;0
		62   2255  FETCH_STATIC_PROP_FUNC_ARG/177 $28=      48:'rSettings'       ?513                	;2
		63   2255  FETCH_DIM_FUNC_ARG/93     $29=      $28                  49:'flood_ips_exclude'	;2
		64   2255  SEND_VAR_EX/66            ?96       $29                  ?2                  	;0
		65   2255  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
		66   2255  SEND_VAR_NO_REF_EX/50     ?80       $30                  ?1                  	;0
		67   2255  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		68   2255  SEND_VAR_NO_REF_EX/50     ?80       $31                  ?1                  	;0
		69   2255  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
		70   2255  ASSIGN/38                 ?27       16?4                 $32                 	;0
		71   2256  GOTO/253                  ?0        ?82                  ?50                 	;0
		72   2258  FETCH_DIM_R/81            $34=      16?2                 51:'requests'       	;0
		73   2258  IS_SMALLER_OR_EQUAL/20    #35=      16?5                 $34                 	;0
		74   2258  BOOL_NOT/13               #36=      #35                  ?0                  	;0
		75   2258  JMPZ/43                   ?0        #36                  ?77                 	;0	>>77
		76   2259  GOTO/253                  ?0        ?81                  ?52                 	;0
		77   2261  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'sleep'          	;1	<<75
		78   2261  SEND_VAL_EX/116           ?80       55:10                ?1                  	;0
		79   2261  DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
		80   2262  EXIT/79                   ?0        ?0                   ?0                  	;0
		81   2265  GOTO/253                  ?0        ?125                 ?56                 	;0
		82   2267  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'in_array'       	;2
		83   2267  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		84   2267  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
		85   2267  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
		86   2267  BOOL_NOT/13               #39=      $38                  ?0                  	;0
		87   2267  JMPZ/43                   ?0        #39                  ?89                 	;0	>>89
		88   2268  GOTO/253                  ?0        ?90                  ?59                 	;0
		89   2270  RETURN/62                 ?0        60:NULL              ?0                  	;0	<<87
		90   2272  FETCH_CONSTANT/99         #40=      ?0                   61:'TMP_PATH'       	;16
		91   2272  CONCAT/8                  #41=      #40                  16?0                	;0
		92   2272  ASSIGN/38                 ?36       16?1                 #41                 	;0
		93   2273  INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'file_exists'    	;1
		94   2273  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		95   2273  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
		96   2273  JMPZ/43                   ?0        $43                  ?98                 	;0	>>98
		97   2274  GOTO/253                  ?0        ?16                  ?66                 	;0
		98   2276  GOTO/253                  ?0        ?2                   ?67                 	;0	<<96
		99   2278  FETCH_STATIC_PROP_R/173   $44=      68:'rSettings'       ?513                	;0
		100  2278  FETCH_DIM_R/81            $45=      $44                  69:'flood_limit'    	;0
		101  2278  ASSIGN/38                 ?40       16?5                 $45                 	;0
		102  2279  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'time'           	;0
		103  2279  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
		104  2279  FETCH_DIM_R/81            $48=      16?2                 72:'last_request'   	;0
		105  2279  SUB/2                     #49=      $47                  $48                 	;0
		106  2279  IS_SMALLER_OR_EQUAL/20    #50=      #49                  16?3                	;0
		107  2279  JMPZ/43                   ?0        #50                  ?109                	;0	>>109
		108  2280  GOTO/253                  ?0        ?29                  ?73                 	;0
		109  2282  ASSIGN_DIM/147            ?45       16?2                 74:'requests'       	;0	<<107
		110  2282  OP_DATA/137               ?0        75:0                 ?0                  	;0
		111  2283  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'time'           	;0
		112  2283  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
		113  2283  ASSIGN_DIM/147            ?46       16?2                 76:'last_request'   	;0
		114  2283  OP_DATA/137               ?0        $53                  ?0                  	;0
		115  2284  INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'file_put_contents'	;3
		116  2284  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		117  2284  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'json_encode'    	;1
		118  2284  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		119  2284  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
		120  2284  SEND_VAR_NO_REF_EX/50     ?96       $54                  ?2                  	;0
		121  2284  FETCH_CONSTANT/99         #55=      ?0                   83:'LOCK_EX'        	;16
		122  2284  SEND_VAL_EX/116           ?112      #55                  ?3                  	;0
		123  2284  DO_FCALL_BY_NAME/131      ?50       ?0                   ?0                  	;0
		124  2285  GOTO/253                  ?0        ?28                  ?86                 	;0
		125  2288  GOTO/253                  ?0        ?139                 ?87                 	;0
		126  2290  FETCH_STATIC_PROP_R/173   $57=      88:'rSettings'       ?513                	;0
		127  2290  FETCH_DIM_R/81            $58=      $57                  89:'flood_limit'    	;0
		128  2290  IS_EQUAL/17               #59=      $58                  90:0                	;0
		129  2290  BOOL_NOT/13               #60=      #59                  ?0                  	;0
		130  2290  JMPZ/43                   ?0        #60                  ?132                	;0	>>132
		131  2291  GOTO/253                  ?0        ?133                 ?91                 	;0
		132  2293  RETURN/62                 ?0        92:NULL              ?0                  	;0	<<130
		133  2295  JMPZ/43                   ?0        16?0                 ?135                	;0	>>135
		134  2296  GOTO/253                  ?0        ?46                  ?93                 	;0
		135  2298  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 94:'aD72b4259Ca295b2'	;0	<<133
		136  2298  DO_FCALL/60               $61=      ?0                   ?0                  	;0
		137  2298  ASSIGN/38                 ?56       16?0                 $61                 	;0
		138  2299  GOTO/253                  ?0        ?46                  ?96                 	;0
		139  2301  NOP/0                     ?0        97:NULL              ?0                  	;4294967295
		*/
	}

	static public function fca722697178454B($A7ca171405b19571, $af3ce326c4e9445e)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2302  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2302  RECV_INIT/64              16?1=     ?2                   0:NULL              	;0
		2    2304  GOTO/253                  ?0        ?32                  ?1                  	;0
		3    2307  GOTO/253                  ?0        ?48                  ?2                  	;0
		4    2309  RETURN/62                 ?0        3:''                 ?0                  	;0
		5    2310  GOTO/253                  ?0        ?12                  ?4                  	;0
		6    2312  CONCAT/8                  #4=       16?2                 5:'images/'         	;0
		7    2312  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'basename'        	;1
		8    2312  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		9    2312  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		10   2312  CONCAT/8                  #6=       #4                   $5                  	;0
		11   2312  RETURN/62                 ?0        #6                   ?0                  	;0
		12   2314  GOTO/253                  ?0        ?3                   ?8                  	;0
		13   2316  GOTO/253                  ?0        ?3                   ?9                  	;0
		14   2318  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'explode'        	;3
		15   2318  SEND_VAL_EX/116           ?80       12:':'               ?1                  	;0
		16   2318  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		17   2318  SEND_VAL_EX/116           ?112      13:3                 ?3                  	;0
		18   2318  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		19   2318  ASSIGN/38                 ?4        16?3                 $7                  	;0
		20   2319  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'D7ee5125f91E2e04'	;2
		21   2319  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'intval'         	;1
		22   2319  FETCH_DIM_FUNC_ARG/93     $9=       16?3                 18:1                	;1
		23   2319  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
		24   2319  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		25   2319  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
		26   2319  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		27   2319  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		28   2319  ASSIGN/38                 ?8        16?2                 $11                 	;0
		29   2320  JMPZ/43                   ?0        16?2                 ?31                 	;0	>>31
		30   2321  GOTO/253                  ?0        ?6                   ?19                 	;0
		31   2323  GOTO/253                  ?0        ?4                   ?20                 	;0	<<29
		32   2325  FETCH_CONSTANT/99         #13=      ?0                   21:'PLATFORM'       	;16
		33   2325  IS_NOT_EQUAL/18           #14=      #13                  24:'xui'            	;0
		34   2325  BOOL_NOT/13               #15=      #14                  ?0                  	;0
		35   2325  JMPZ/43                   ?0        #15                  ?37                 	;0	>>37
		36   2326  GOTO/253                  ?0        ?38                  ?25                 	;0
		37   2328  RETURN/62                 ?0        16?0                 ?0                  	;0	<<35
		38   2330  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'substr'         	;3
		39   2330  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		40   2330  SEND_VAL_EX/116           ?96       28:0                 ?2                  	;0
		41   2330  SEND_VAL_EX/116           ?112      29:2                 ?3                  	;0
		42   2330  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
		43   2330  IS_EQUAL/17               #17=      $16                  30:'s:'             	;0
		44   2330  JMPZ/43                   ?0        #17                  ?46                 	;0	>>46
		45   2331  GOTO/253                  ?0        ?14                  ?31                 	;0
		46   2333  RETURN/62                 ?0        16?0                 ?0                  	;0	<<44
		47   2334  GOTO/253                  ?0        ?13                  ?32                 	;0
		48   2336  NOP/0                     ?0        33:NULL              ?0                  	;4294967295
		*/
	}

	static public function d7ee5125F91e2e04($C082ca9ed03f473c, $af3ce326c4e9445e)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2337  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    2337  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
		2    2339  GOTO/253                  ?0        ?128                 ?2                  	;0
		3    2342  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
		4    2342  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		5    2342  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		6    2342  IS_EQUAL/17               #9=       $8                   5:0                 	;0
		7    2342  BOOL_NOT/13               #10=      #9                   ?0                  	;0
		8    2342  JMPZ/43                   ?0        #10                  ?10                 	;0	>>10
		9    2343  GOTO/253                  ?0        ?11                  ?6                  	;0
		10   2345  RETURN/62                 ?0        7:''                 ?0                  	;0	<<8
		11   2347  ASSIGN/38                 ?3        16?3                 16?0                	;0
		12   2348  GOTO/253                  ?0        ?13                  ?8                  	;0
		13   2350  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'array_rand'      	;1
		14   2350  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		15   2350  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		16   2350  FETCH_DIM_R/81            $13=      16?2                 $12                 	;0
		17   2350  ASSIGN/38                 ?6        16?0                 $13                 	;0
		18   2352  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'defined'        	;1
		19   2352  SEND_VAL_EX/116           ?80       13:'host'            ?1                  	;0
		20   2352  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
		21   2352  JMPZ/43                   ?0        $15                  ?25                 	;0	>>25
		22   2352  FETCH_CONSTANT/99         #16=      ?0                   14:'HOST'           	;16
		23   2352  QM_ASSIGN/22              #17=      #16                  ?0                  	;0
		24   2352  JMP/42                    ?0        ?26                  ?0                  	;0	>>26
		25   2352  QM_ASSIGN/22              #17=      17:NULL              ?0                  	;0	<<21
		26   2352  ASSIGN/38                 ?10       16?4                 #17                 	;0	<<24
		27   2353  JMPZ_EX/46                #19=      16?4                 ?44                 	;0	>>44
		28   2353  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'in_array'       	;2
		29   2353  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'strtolower'     	;1
		30   2353  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
		31   2353  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		32   2353  SEND_VAR_NO_REF_EX/50     ?80       $20                  ?1                  	;0
		33   2353  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'array_map'      	;2
		34   2353  SEND_VAL_EX/116           ?80       24:'strtolower'      ?1                  	;0
		35   2353  FETCH_STATIC_PROP_FUNC_ARG/177 $21=      25:'rServers'        ?513                	;2
		36   2353  FETCH_DIM_FUNC_ARG/93     $22=      $21                  16?0                	;2
		37   2353  FETCH_DIM_FUNC_ARG/93     $23=      $22                  26:'domains'        	;2
		38   2353  FETCH_DIM_FUNC_ARG/93     $24=      $23                  27:'urls'           	;2
		39   2353  SEND_VAR_EX/66            ?96       $24                  ?2                  	;0
		40   2353  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
		41   2353  SEND_VAR_NO_REF_EX/50     ?96       $25                  ?2                  	;0
		42   2353  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
		43   2353  BOOL/52                   #19=      $26                  ?0                  	;0
		44   2353  JMPZ/43                   ?0        #19                  ?46                 	;0	>>46	<<27
		45   2354  GOTO/253                  ?0        ?138                 ?28                 	;0
		46   2356  FETCH_STATIC_PROP_IS/176  $27=      29:'rServers'        ?513                	;0	<<44
		47   2356  FETCH_DIM_IS/90           $28=      $27                  16?0                	;0
		48   2356  ISSET_ISEMPTY_DIM_OBJ/115 #29=      $28                  30:'domain_name'    	;16777216
		49   2356  JMPZ/43                   ?0        #29                  ?55                 	;0	>>55
		50   2356  FETCH_STATIC_PROP_R/173   $30=      31:'rServers'        ?513                	;0
		51   2356  FETCH_DIM_R/81            $31=      $30                  16?0                	;0
		52   2356  FETCH_DIM_R/81            $32=      $31                  32:'server_ip'      	;0
		53   2356  QM_ASSIGN/22              #33=      $32                  ?0                  	;0
		54   2356  JMP/42                    ?0        ?64                  ?0                  	;0	>>64
		55   2356  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'explode'        	;2	<<49
		56   2356  SEND_VAL_EX/116           ?80       35:','               ?1                  	;0
		57   2356  FETCH_STATIC_PROP_FUNC_ARG/177 $34=      36:'rServers'        ?513                	;2
		58   2356  FETCH_DIM_FUNC_ARG/93     $35=      $34                  16?0                	;2
		59   2356  FETCH_DIM_FUNC_ARG/93     $36=      $35                  37:'domain_name'    	;2
		60   2356  SEND_VAR_EX/66            ?96       $36                  ?2                  	;0
		61   2356  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		62   2356  FETCH_DIM_R/81            $38=      $37                  38:0                	;0
		63   2356  QM_ASSIGN/22              #33=      $38                  ?0                  	;0
		64   2356  ASSIGN/38                 ?31       16?5                 #33                 	;0	<<54
		65   2357  GOTO/253                  ?0        ?137                 ?39                 	;0
		66   2360  GOTO/253                  ?0        ?68                  ?40                 	;0
		67   2362  ASSIGN/38                 ?32       16?6                 16?1                	;0
		68   2364  GOTO/253                  ?0        ?150                 ?41                 	;0
		69   2366  FETCH_IS/89               $41=      42:'_SERVER'         ?0                  	;0
		70   2366  ISSET_ISEMPTY_DIM_OBJ/115 #42=      $41                  43:'SERVER_PORT'    	;33554432
		71   2366  JMPZ_EX/46                #42=      #42                  ?75                 	;0	>>75
		72   2366  FETCH_STATIC_PROP_R/173   $43=      44:'rSettings'       ?513                	;0
		73   2366  FETCH_DIM_R/81            $44=      $43                  45:'keep_protocol'  	;0
		74   2366  BOOL/52                   #42=      $44                  ?0                  	;0
		75   2366  JMPZ/43                   ?0        #42                  ?77                 	;0	>>77	<<71
		76   2367  GOTO/253                  ?0        ?82                  ?46                 	;0
		77   2369  FETCH_STATIC_PROP_R/173   $45=      47:'rServers'        ?513                	;0	<<75
		78   2369  FETCH_DIM_R/81            $46=      $45                  16?0                	;0
		79   2369  FETCH_DIM_R/81            $47=      $46                  48:'server_protocol'	;0
		80   2369  ASSIGN/38                 ?40       16?6                 $47                 	;0
		81   2370  GOTO/253                  ?0        ?66                  ?49                 	;0
		82   2372  FETCH_IS/89               $49=      50:'_SERVER'         ?0                  	;0
		83   2372  ISSET_ISEMPTY_DIM_OBJ/115 #50=      $49                  51:'HTTPS'          	;16777216
		84   2372  BOOL_NOT/13               #51=      #50                  ?0                  	;0
		85   2372  JMPZ_EX/46                #51=      #51                  ?90                 	;0	>>90
		86   2372  FETCH_R/80                $52=      52:'_SERVER'         ?0                  	;0
		87   2372  FETCH_DIM_R/81            $53=      $52                  53:'HTTPS'          	;0
		88   2372  IS_NOT_IDENTICAL/16       #54=      $53                  54:'off'            	;0
		89   2372  BOOL/52                   #51=      #54                  ?0                  	;0
		90   2372  JMPNZ_EX/47               #51=      #51                  ?95                 	;0	>>95	<<85
		91   2372  FETCH_R/80                $55=      55:'_SERVER'         ?0                  	;0
		92   2372  FETCH_DIM_R/81            $56=      $55                  56:'SERVER_PORT'    	;0
		93   2372  IS_EQUAL/17               #57=      $56                  57:443              	;0
		94   2372  BOOL/52                   #51=      #57                  ?0                  	;0
		95   2372  JMPZ/43                   ?0        #51                  ?98                 	;0	>>98	<<90
		96   2372  QM_ASSIGN/22              #58=      58:'https'           ?0                  	;0
		97   2372  JMP/42                    ?0        ?99                  ?0                  	;0	>>99
		98   2372  QM_ASSIGN/22              #58=      59:'http'            ?0                  	;0	<<95
		99   2372  ASSIGN/38                 ?51       16?6                 #58                 	;0	<<97
		100  2373  GOTO/253                  ?0        ?66                  ?60                 	;0
		101  2375  FETCH_STATIC_PROP_R/173   $60=      61:'rServers'        ?513                	;0
		102  2375  FETCH_DIM_R/81            $61=      $60                  16?0                	;0
		103  2375  FETCH_DIM_R/81            $62=      $61                  62:'server_type'    	;0
		104  2375  IS_EQUAL/17               #63=      $62                  63:1                	;0
		105  2375  JMPZ_EX/46                #63=      #63                  ?107                	;0	>>107
		106  2375  BOOL/52                   #63=      16?3                 ?0                  	;0
		107  2375  JMPZ_EX/46                #63=      #63                  ?113                	;0	>>113	<<105
		108  2375  FETCH_STATIC_PROP_R/173   $64=      64:'rServers'        ?513                	;0
		109  2375  FETCH_DIM_R/81            $65=      $64                  16?3                	;0
		110  2375  FETCH_DIM_R/81            $66=      $65                  65:'is_main'        	;0
		111  2375  IS_EQUAL/17               #67=      $66                  66:0                	;0
		112  2375  BOOL/52                   #63=      #67                  ?0                  	;0
		113  2375  BOOL_NOT/13               #68=      #63                  ?0                  	;0	<<107
		114  2375  JMPZ/43                   ?0        #68                  ?116                	;0	>>116
		115  2376  GOTO/253                  ?0        ?126                 ?67                 	;0
		116  2378  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'md5'            	;1	<<114
		117  2378  CONCAT/8                  #69=      16?0                 70:'_'              	;0
		118  2378  CONCAT/8                  #70=      #69                  16?3                	;0
		119  2378  CONCAT/8                  #71=      #70                  71:'_'              	;0
		120  2378  FETCH_CONSTANT/99         #72=      ?0                   72:'OPENSSL_EXTRA'  	;16
		121  2378  CONCAT/8                  #73=      #71                  #72                 	;0
		122  2378  SEND_VAL_EX/116           ?80       #73                  ?1                  	;0
		123  2378  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
		124  2378  CONCAT/8                  #75=      $74                  75:'/'              	;0
		125  2378  ASSIGN_CONCAT/30          ?68       16?7                 #75                 	;0
		126  2380  RETURN/62                 ?0        16?7                 ?0                  	;0
		127  2382  GOTO/253                  ?0        ?184                 ?76                 	;0
		128  2384  ASSIGN/38                 ?69       16?3                 77:NULL             	;0
		129  2385  ISSET_ISEMPTY_CV/197      #78=      16?0                 ?0                  	;33554432
		130  2385  JMPZ/43                   ?0        #78                  ?132                	;0	>>132
		131  2386  GOTO/253                  ?0        ?134                 ?78                 	;0
		132  2388  FETCH_CONSTANT/99         #79=      ?0                   79:'SERVER_ID'      	;16	<<130
		133  2388  ASSIGN/38                 ?72       16?0                 #79                 	;0
		134  2390  JMPZ/43                   ?0        16?1                 ?136                	;0	>>136
		135  2391  GOTO/253                  ?0        ?67                  ?82                 	;0
		136  2393  GOTO/253                  ?0        ?69                  ?83                 	;0	<<134
		137  2395  GOTO/253                  ?0        ?139                 ?84                 	;0
		138  2397  ASSIGN/38                 ?73       16?5                 16?4                	;0
		139  2399  CONCAT/8                  #82=      16?6                 85:'://'            	;0
		140  2399  CONCAT/8                  #83=      #82                  16?5                	;0
		141  2399  CONCAT/8                  #84=      #83                  86:':'              	;0
		142  2399  CONCAT/8                  #87=      16?6                 88:'_broadcast_port'	;0
		143  2399  FETCH_STATIC_PROP_R/173   $85=      87:'rServers'        ?513                	;0
		144  2399  FETCH_DIM_R/81            $86=      $85                  16?0                	;0
		145  2399  FETCH_DIM_R/81            $88=      $86                  #87                 	;0
		146  2399  CONCAT/8                  #89=      #84                  $88                 	;0
		147  2399  CONCAT/8                  #90=      #89                  89:'/'              	;0
		148  2399  ASSIGN/38                 ?83       16?7                 #90                 	;0
		149  2400  GOTO/253                  ?0        ?101                 ?90                 	;0
		150  2402  FETCH_STATIC_PROP_R/173   $92=      91:'rServers'        ?513                	;0
		151  2402  FETCH_DIM_R/81            $93=      $92                  16?0                	;0
		152  2402  BOOL_NOT/13               #94=      $93                  ?0                  	;0
		153  2402  JMPZ/43                   ?0        #94                  ?155                	;0	>>155
		154  2403  GOTO/253                  ?0        ?127                 ?92                 	;0
		155  2405  FETCH_STATIC_PROP_R/173   $95=      93:'rServers'        ?513                	;0	<<153
		156  2405  FETCH_DIM_R/81            $96=      $95                  16?0                	;0
		157  2405  FETCH_DIM_R/81            $97=      $96                  94:'enable_proxy'   	;0
		158  2405  BOOL_NOT/13               #98=      $97                  ?0                  	;0
		159  2405  JMPZ/43                   ?0        #98                  ?161                	;0	>>161
		160  2406  GOTO/253                  ?0        ?18                  ?95                 	;0
		161  2408  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'array_keys'     	;1	<<159
		162  2408  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 98:'getProxies'     	;1
		163  2408  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		164  2408  DO_FCALL/60               $99=      ?0                   ?0                  	;0
		165  2408  SEND_VAR_NO_REF_EX/50     ?80       $99                  ?1                  	;0
		166  2408  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
		167  2408  ASSIGN/38                 ?93       16?2                 $100                	;0
		168  2409  INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'count'         	;1
		169  2409  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		170  2409  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
		171  2409  IS_EQUAL/17               #103=     $102                 102:0               	;0
		172  2409  BOOL_NOT/13               #104=     #103                 ?0                  	;0
		173  2409  JMPZ/43                   ?0        #104                 ?175                	;0	>>175
		174  2410  GOTO/253                  ?0        ?3                   ?103                	;0
		175  2412  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'array_keys'    	;1	<<173
		176  2412  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 106:'getProxies'    	;2
		177  2412  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		178  2412  SEND_VAL/65               ?96       108:false            ?2                  	;0
		179  2412  DO_FCALL/60               $105=     ?0                   ?0                  	;0
		180  2412  SEND_VAR_NO_REF_EX/50     ?80       $105                 ?1                  	;0
		181  2412  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
		182  2412  ASSIGN/38                 ?99       16?2                 $106                	;0
		183  2413  GOTO/253                  ?0        ?3                   ?109                	;0
		184  2415  RETURN/62                 ?0        110:NULL             ?0                  	;0
		185  2416  GOTO/253                  ?0        ?186                 ?111                	;0
		186  2418  NOP/0                     ?0        112:NULL             ?0                  	;4294967295
		*/
	}

	static public function getMovieTMDB($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2419  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2421  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strlen'          	;1
		2    2421  FETCH_STATIC_PROP_FUNC_ARG/177 $2=       2:'rSettings'        ?513                	;1
		3    2421  FETCH_DIM_FUNC_ARG/93     $3=       $2                   3:'tmdb_language'   	;1
		4    2421  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
		5    2421  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		6    2421  IS_SMALLER/19             #5=       4:0                  $4                  	;0
		7    2421  JMPZ/43                   ?0        #5                   ?9                  	;0	>>9
		8    2422  GOTO/253                  ?0        ?16                  ?5                  	;0
		9    2424  NEW/68                    $6=       6:'TMDB'             ?160                	;1	<<7
		10   2424  FETCH_STATIC_PROP_FUNC_ARG/177 $7=       8:'rSettings'        ?513                	;1
		11   2424  FETCH_DIM_FUNC_ARG/93     $8=       $7                   9:'tmdb_api_key'    	;1
		12   2424  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
		13   2424  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		14   2424  ASSIGN/38                 ?8        16?1                 $6                  	;0
		15   2425  GOTO/253                  ?0        ?25                  ?10                 	;0
		16   2427  NEW/68                    $11=      11:'TMDB'            ?256                	;2
		17   2427  FETCH_STATIC_PROP_FUNC_ARG/177 $12=      13:'rSettings'       ?513                	;1
		18   2427  FETCH_DIM_FUNC_ARG/93     $13=      $12                  14:'tmdb_api_key'   	;1
		19   2427  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
		20   2427  FETCH_STATIC_PROP_FUNC_ARG/177 $14=      15:'rSettings'       ?513                	;2
		21   2427  FETCH_DIM_FUNC_ARG/93     $15=      $14                  16:'tmdb_language'  	;2
		22   2427  SEND_VAR_EX/66            ?96       $15                  ?2                  	;0
		23   2427  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		24   2427  ASSIGN/38                 ?15       16?1                 $11                 	;0
		25   2429  INIT_METHOD_CALL/112      ?0        16?1                 17:'getMovie'       	;1
		26   2429  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		27   2429  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		28   2429  JMP_SET/152               #19=      $18                  ?30                 	;0
		29   2429  QM_ASSIGN/22              #19=      19:NULL              ?0                  	;0
		30   2429  RETURN/62                 ?0        #19                  ?0                  	;0
		31   2430  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function getSeriesTMDB($Abcb228699a7f743)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2431  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2433  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strlen'          	;1
		2    2433  FETCH_STATIC_PROP_FUNC_ARG/177 $2=       2:'rSettings'        ?513                	;1
		3    2433  FETCH_DIM_FUNC_ARG/93     $3=       $2                   3:'tmdb_language'   	;1
		4    2433  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
		5    2433  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		6    2433  IS_SMALLER/19             #5=       4:0                  $4                  	;0
		7    2433  JMPZ/43                   ?0        #5                   ?9                  	;0	>>9
		8    2434  GOTO/253                  ?0        ?16                  ?5                  	;0
		9    2436  NEW/68                    $6=       6:'TMDB'             ?160                	;1	<<7
		10   2436  FETCH_STATIC_PROP_FUNC_ARG/177 $7=       8:'rSettings'        ?513                	;1
		11   2436  FETCH_DIM_FUNC_ARG/93     $8=       $7                   9:'tmdb_api_key'    	;1
		12   2436  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
		13   2436  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		14   2436  ASSIGN/38                 ?8        16?1                 $6                  	;0
		15   2437  GOTO/253                  ?0        ?25                  ?10                 	;0
		16   2439  NEW/68                    $11=      11:'TMDB'            ?256                	;2
		17   2439  FETCH_STATIC_PROP_FUNC_ARG/177 $12=      13:'rSettings'       ?513                	;1
		18   2439  FETCH_DIM_FUNC_ARG/93     $13=      $12                  14:'tmdb_api_key'   	;1
		19   2439  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
		20   2439  FETCH_STATIC_PROP_FUNC_ARG/177 $14=      15:'rSettings'       ?513                	;2
		21   2439  FETCH_DIM_FUNC_ARG/93     $15=      $14                  16:'tmdb_language'  	;2
		22   2439  SEND_VAR_EX/66            ?96       $15                  ?2                  	;0
		23   2439  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		24   2439  ASSIGN/38                 ?15       16?1                 $11                 	;0
		25   2441  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'json_decode'    	;2
		26   2441  INIT_METHOD_CALL/112      ?0        16?1                 19:'getTVShow'      	;1
		27   2441  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		28   2441  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		29   2441  INIT_METHOD_CALL/112      ?0        $18                  21:'getJSON'        	;0
		30   2441  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		31   2441  SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
		32   2441  SEND_VAL_EX/116           ?96       23:true              ?2                  	;0
		33   2441  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		34   2441  JMP_SET/152               #21=      $20                  ?36                 	;0
		35   2441  QM_ASSIGN/22              #21=      24:NULL              ?0                  	;0
		36   2441  RETURN/62                 ?0        #21                  ?0                  	;0
		37   2442  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	static public function getSeasonTMDB($Abcb228699a7f743, $Bb9fda5ebf825f11)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2443  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2443  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2445  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'strlen'          	;1
		3    2445  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       2:'rSettings'        ?513                	;1
		4    2445  FETCH_DIM_FUNC_ARG/93     $4=       $3                   3:'tmdb_language'   	;1
		5    2445  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		6    2445  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7    2445  IS_SMALLER/19             #6=       4:0                  $5                  	;0
		8    2445  JMPZ/43                   ?0        #6                   ?10                 	;0	>>10
		9    2446  GOTO/253                  ?0        ?17                  ?5                  	;0
		10   2448  NEW/68                    $7=       6:'TMDB'             ?160                	;1	<<8
		11   2448  FETCH_STATIC_PROP_FUNC_ARG/177 $8=       8:'rSettings'        ?513                	;1
		12   2448  FETCH_DIM_FUNC_ARG/93     $9=       $8                   9:'tmdb_api_key'    	;1
		13   2448  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
		14   2448  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15   2448  ASSIGN/38                 ?8        16?2                 $7                  	;0
		16   2449  GOTO/253                  ?0        ?26                  ?10                 	;0
		17   2451  NEW/68                    $12=      11:'TMDB'            ?256                	;2
		18   2451  FETCH_STATIC_PROP_FUNC_ARG/177 $13=      13:'rSettings'       ?513                	;1
		19   2451  FETCH_DIM_FUNC_ARG/93     $14=      $13                  14:'tmdb_api_key'   	;1
		20   2451  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		21   2451  FETCH_STATIC_PROP_FUNC_ARG/177 $15=      15:'rSettings'       ?513                	;2
		22   2451  FETCH_DIM_FUNC_ARG/93     $16=      $15                  16:'tmdb_language'  	;2
		23   2451  SEND_VAR_EX/66            ?96       $16                  ?2                  	;0
		24   2451  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		25   2451  ASSIGN/38                 ?15       16?2                 $12                 	;0
		26   2453  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'json_decode'    	;2
		27   2453  INIT_METHOD_CALL/112      ?0        16?2                 19:'getSeason'      	;2
		28   2453  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		29   2453  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'intval'         	;1
		30   2453  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		31   2453  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
		32   2453  SEND_VAR_NO_REF_EX/50     ?96       $19                  ?2                  	;0
		33   2453  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		34   2453  INIT_METHOD_CALL/112      ?0        $20                  23:'getJSON'        	;0
		35   2453  DO_FCALL/60               $21=      ?0                   ?0                  	;0
		36   2453  SEND_VAR_NO_REF_EX/50     ?80       $21                  ?1                  	;0
		37   2453  SEND_VAL_EX/116           ?96       25:true              ?2                  	;0
		38   2453  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
		39   2453  RETURN/62                 ?0        $22                  ?0                  	;0
		40   2454  NOP/0                     ?0        26:NULL              ?0                  	;4294967295
		*/
	}

	static public function getSimilarMovies($Abcb228699a7f743, $D7209256c56b1469)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2455  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2455  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2    2457  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'strlen'          	;1
		3    2457  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       3:'rSettings'        ?513                	;1
		4    2457  FETCH_DIM_FUNC_ARG/93     $4=       $3                   4:'tmdb_language'   	;1
		5    2457  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		6    2457  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7    2457  IS_SMALLER/19             #6=       5:0                  $5                  	;0
		8    2457  JMPZ/43                   ?0        #6                   ?10                 	;0	>>10
		9    2458  GOTO/253                  ?0        ?17                  ?6                  	;0
		10   2460  NEW/68                    $7=       7:'TMDB'             ?160                	;1	<<8
		11   2460  FETCH_STATIC_PROP_FUNC_ARG/177 $8=       9:'rSettings'        ?513                	;1
		12   2460  FETCH_DIM_FUNC_ARG/93     $9=       $8                   10:'tmdb_api_key'   	;1
		13   2460  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
		14   2460  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15   2460  ASSIGN/38                 ?8        16?2                 $7                  	;0
		16   2461  GOTO/253                  ?0        ?26                  ?11                 	;0
		17   2463  NEW/68                    $12=      12:'TMDB'            ?256                	;2
		18   2463  FETCH_STATIC_PROP_FUNC_ARG/177 $13=      14:'rSettings'       ?513                	;1
		19   2463  FETCH_DIM_FUNC_ARG/93     $14=      $13                  15:'tmdb_api_key'   	;1
		20   2463  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		21   2463  FETCH_STATIC_PROP_FUNC_ARG/177 $15=      16:'rSettings'       ?513                	;2
		22   2463  FETCH_DIM_FUNC_ARG/93     $16=      $15                  17:'tmdb_language'  	;2
		23   2463  SEND_VAR_EX/66            ?96       $16                  ?2                  	;0
		24   2463  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		25   2463  ASSIGN/38                 ?15       16?2                 $12                 	;0
		26   2465  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'json_decode'    	;2
		27   2465  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'json_encode'    	;1
		28   2465  INIT_METHOD_CALL/112      ?0        16?2                 22:'getSimilarMovies'	;2
		29   2465  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		30   2465  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		31   2465  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		32   2465  SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
		33   2465  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		34   2465  SEND_VAR_NO_REF_EX/50     ?80       $20                  ?1                  	;0
		35   2465  SEND_VAL_EX/116           ?96       24:true              ?2                  	;0
		36   2465  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		37   2465  RETURN/62                 ?0        $21                  ?0                  	;0
		38   2466  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	static public function getSimilarSeries($Abcb228699a7f743, $D7209256c56b1469)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2467  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2467  RECV_INIT/64              16?1=     ?2                   0:1                 	;0
		2    2469  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'strlen'          	;1
		3    2469  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       3:'rSettings'        ?513                	;1
		4    2469  FETCH_DIM_FUNC_ARG/93     $4=       $3                   4:'tmdb_language'   	;1
		5    2469  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		6    2469  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7    2469  IS_SMALLER/19             #6=       5:0                  $5                  	;0
		8    2469  JMPZ/43                   ?0        #6                   ?10                 	;0	>>10
		9    2470  GOTO/253                  ?0        ?17                  ?6                  	;0
		10   2472  NEW/68                    $7=       7:'TMDB'             ?160                	;1	<<8
		11   2472  FETCH_STATIC_PROP_FUNC_ARG/177 $8=       9:'rSettings'        ?513                	;1
		12   2472  FETCH_DIM_FUNC_ARG/93     $9=       $8                   10:'tmdb_api_key'   	;1
		13   2472  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
		14   2472  DO_FCALL/60               ?7        ?8                   ?0                  	;0
		15   2472  ASSIGN/38                 ?8        16?2                 $7                  	;0
		16   2473  GOTO/253                  ?0        ?26                  ?11                 	;0
		17   2475  NEW/68                    $12=      12:'TMDB'            ?256                	;2
		18   2475  FETCH_STATIC_PROP_FUNC_ARG/177 $13=      14:'rSettings'       ?513                	;1
		19   2475  FETCH_DIM_FUNC_ARG/93     $14=      $13                  15:'tmdb_api_key'   	;1
		20   2475  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		21   2475  FETCH_STATIC_PROP_FUNC_ARG/177 $15=      16:'rSettings'       ?513                	;2
		22   2475  FETCH_DIM_FUNC_ARG/93     $16=      $15                  17:'tmdb_language'  	;2
		23   2475  SEND_VAR_EX/66            ?96       $16                  ?2                  	;0
		24   2475  DO_FCALL/60               ?14       ?8                   ?0                  	;0
		25   2475  ASSIGN/38                 ?15       16?2                 $12                 	;0
		26   2477  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'json_decode'    	;2
		27   2477  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'json_encode'    	;1
		28   2477  INIT_METHOD_CALL/112      ?0        16?2                 22:'getSimilarSeries'	;2
		29   2477  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		30   2477  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		31   2477  DO_FCALL/60               $19=      ?0                   ?0                  	;0
		32   2477  SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
		33   2477  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		34   2477  SEND_VAR_NO_REF_EX/50     ?80       $20                  ?1                  	;0
		35   2477  SEND_VAL_EX/116           ?96       24:true              ?2                  	;0
		36   2477  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
		37   2477  RETURN/62                 ?0        $21                  ?0                  	;0
		38   2478  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
		*/
	}

	static public function getYear($b87030f28ff32396, $Ccbdf03f8a4df633)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2479  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2479  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2481  JMP/42                    ?0        ?99                  ?0                  	;0	>>99
		3    2483  ASSIGN/38                 ?0        16?2                 1:1                 	;0
		4    2485  IS_SMALLER/19             #9=       2:0                  16?2                	;0
		5    2485  BOOL_NOT/13               #10=      #9                   ?0                  	;0
		6    2485  JMPZ/43                   ?0        #10                  ?8                  	;0	>>8
		7    2486  GOTO/253                  ?0        ?132                 ?3                  	;0
		8    2488  IS_SMALLER_OR_EQUAL/20    #11=      4:1900               16?3                	;0	<<6
		9    2488  JMPZ_EX/46                #11=      #11                  ?19                 	;0	>>19
		10   2488  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'intval'          	;1
		11   2488  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'date'            	;1
		12   2488  SEND_VAL_EX/116           ?80       9:'Y'                ?1                  	;0
		13   2488  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		14   2488  ADD/1                     #13=      $12                  10:1                	;0
		15   2488  SEND_VAL_EX/116           ?80       #13                  ?1                  	;0
		16   2488  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
		17   2488  IS_SMALLER_OR_EQUAL/20    #15=      16?3                 $14                 	;0
		18   2488  BOOL/52                   #11=      #15                  ?0                  	;0
		19   2488  BOOL_NOT/13               #16=      #11                  ?0                  	;0	<<9
		20   2488  JMPZ/43                   ?0        #16                  ?22                 	;0	>>22
		21   2489  GOTO/253                  ?0        ?132                 ?11                 	;0
		22   2491  ISSET_ISEMPTY_CV/197      #17=      16?4                 ?0                  	;16777216	<<20
		23   2491  BOOL_NOT/13               #18=      #17                  ?0                  	;0
		24   2491  JMPZ/43                   ?0        #18                  ?26                 	;0	>>26
		25   2492  GOTO/253                  ?0        ?134                 ?12                 	;0
		26   2494  GOTO/253                  ?0        ?133                 ?13                 	;0	<<24
		27   2496  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'substr'         	;3
		28   2496  FETCH_DIM_FUNC_ARG/93     $19=      16?1                 16:'releaseDate'    	;1
		29   2496  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
		30   2496  SEND_VAL_EX/116           ?96       17:0                 ?2                  	;0
		31   2496  SEND_VAL_EX/116           ?112      18:4                 ?3                  	;0
		32   2496  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		33   2496  ASSIGN/38                 ?13       16?4                 $20                 	;0
		34   2498  ASSIGN/38                 ?14       16?5                 19:'/\\(([0-9)]+)\\)/'	;0
		35   2499  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'preg_match'     	;5
		36   2499  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		37   2499  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		38   2499  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
		39   2499  FETCH_CONSTANT/99         #23=      ?0                   22:'PREG_OFFSET_CAPTURE'	;16
		40   2499  SEND_VAL_EX/116           ?128      #23                  ?4                  	;0
		41   2499  SEND_VAL_EX/116           ?144      25:0                 ?5                  	;0
		42   2499  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
		43   2500  ASSIGN/38                 ?17       16?3                 26:NULL             	;0
		44   2501  GOTO/253                  ?0        ?58                  ?27                 	;0
		45   2503  ASSIGN/38                 ?18       16?2                 28:2                	;0
		46   2505  GOTO/253                  ?0        ?4                   ?29                 	;0
		47   2507  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'intval'         	;1
		48   2507  FETCH_DIM_FUNC_ARG/93     $27=      16?6                 32:1                	;1
		49   2507  FETCH_DIM_FUNC_ARG/93     $28=      $27                  33:0                	;1
		50   2507  SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
		51   2507  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		52   2507  ASSIGN/38                 ?22       16?3                 $29                 	;0
		53   2508  GOTO/253                  ?0        ?3                   ?34                 	;0
		54   2510  INIT_ARRAY/71             #31=      16?0                 35:'title'          	;10
		55   2510  ADD_ARRAY_ELEMENT/72      #31=      16?4                 36:'year'           	;0
		56   2510  RETURN/62                 ?0        #31                  ?0                  	;0
		57   2511  GOTO/253                  ?0        ?152                 ?37                 	;0
		58   2513  ASSIGN/38                 ?24       16?2                 38:0                	;0
		59   2514  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'count'          	;1
		60   2514  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		61   2514  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
		62   2514  IS_EQUAL/17               #34=      $33                  41:2                	;0
		63   2514  JMPZ/43                   ?0        #34                  ?65                 	;0	>>65
		64   2515  GOTO/253                  ?0        ?47                  ?42                 	;0
		65   2517  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'explode'        	;2	<<63
		66   2517  SEND_VAL_EX/116           ?80       45:'-'               ?1                  	;0
		67   2517  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		68   2517  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
		69   2517  ASSIGN/38                 ?28       16?7                 $35                 	;0
		70   2518  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'count'          	;1
		71   2518  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		72   2518  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		73   2518  IS_SMALLER/19             #38=      48:1                 $37                 	;0
		74   2518  JMPZ_EX/46                #38=      #38                  ?85                 	;0	>>85
		75   2518  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'is_numeric'     	;1
		76   2518  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'trim'           	;1
		77   2518  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'end'            	;1
		78   2518  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		79   2518  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
		80   2518  SEND_VAR_NO_REF_EX/50     ?80       $39                  ?1                  	;0
		81   2518  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
		82   2518  SEND_VAR_NO_REF_EX/50     ?80       $40                  ?1                  	;0
		83   2518  DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
		84   2518  BOOL/52                   #38=      $41                  ?0                  	;0
		85   2518  BOOL_NOT/13               #42=      #38                  ?0                  	;0	<<74
		86   2518  JMPZ/43                   ?0        #42                  ?88                 	;0	>>88
		87   2519  GOTO/253                  ?0        ?46                  ?55                 	;0
		88   2521  INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'intval'         	;1	<<86
		89   2521  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'trim'           	;1
		90   2521  INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'end'            	;1
		91   2521  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		92   2521  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
		93   2521  SEND_VAR_NO_REF_EX/50     ?80       $43                  ?1                  	;0
		94   2521  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
		95   2521  SEND_VAR_NO_REF_EX/50     ?80       $44                  ?1                  	;0
		96   2521  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
		97   2521  ASSIGN/38                 ?38       16?3                 $45                 	;0
		98   2522  GOTO/253                  ?0        ?45                  ?62                 	;0
		99   2524  ASSIGN/38                 ?39       16?4                 63:NULL             	;0	<<2
		100  2525  ISSET_ISEMPTY_DIM_OBJ/115 #48=      16?1                 64:'release_date'   	;33554432
		101  2525  BOOL_NOT/13               #49=      #48                  ?0                  	;0
		102  2525  JMPZ/43                   ?0        #49                  ?104                	;0	>>104
		103  2526  GOTO/253                  ?0        ?111                 ?65                 	;0
		104  2528  INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'substr'         	;3	<<102
		105  2528  FETCH_DIM_FUNC_ARG/93     $50=      16?1                 68:'release_date'   	;1
		106  2528  SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
		107  2528  SEND_VAL_EX/116           ?96       69:0                 ?2                  	;0
		108  2528  SEND_VAL_EX/116           ?112      70:4                 ?3                  	;0
		109  2528  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
		110  2528  ASSIGN/38                 ?44       16?4                 $51                 	;0
		111  2530  ISSET_ISEMPTY_DIM_OBJ/115 #53=      16?1                 71:'releaseDate'    	;33554432
		112  2530  BOOL_NOT/13               #54=      #53                  ?0                  	;0
		113  2530  JMPZ/43                   ?0        #54                  ?115                	;0	>>115
		114  2531  GOTO/253                  ?0        ?34                  ?72                 	;0
		115  2533  GOTO/253                  ?0        ?27                  ?73                 	;0	<<113
		116  2536  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'trim'           	;1
		117  2536  INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'preg_replace'   	;3
		118  2536  SEND_VAL_EX/116           ?80       78:'!\\s+!'          ?1                  	;0
		119  2536  SEND_VAL_EX/116           ?96       79:' '               ?2                  	;0
		120  2536  INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'str_replace'    	;3
		121  2536  FETCH_DIM_FUNC_ARG/93     $55=      16?6                 82:0                	;1
		122  2536  FETCH_DIM_FUNC_ARG/93     $56=      $55                  83:0                	;1
		123  2536  SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
		124  2536  SEND_VAL_EX/116           ?96       84:''                ?2                  	;0
		125  2536  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		126  2536  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
		127  2536  SEND_VAR_NO_REF_EX/50     ?112      $57                  ?3                  	;0
		128  2536  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
		129  2536  SEND_VAR_NO_REF_EX/50     ?80       $58                  ?1                  	;0
		130  2536  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
		131  2536  ASSIGN/38                 ?52       16?0                 $59                 	;0
		132  2540  GOTO/253                  ?0        ?54                  ?85                 	;0
		133  2542  ASSIGN/38                 ?53       16?4                 16?3                	;0
		134  2544  IS_EQUAL/17               #62=      16?2                 86:1                	;0
		135  2544  JMPZ/43                   ?0        #62                  ?137                	;0	>>137
		136  2545  GOTO/253                  ?0        ?116                 ?87                 	;0
		137  2547  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'trim'           	;1	<<135
		138  2547  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'implode'        	;2
		139  2547  SEND_VAL_EX/116           ?80       92:'-'               ?1                  	;0
		140  2547  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'array_slice'    	;3
		141  2547  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		142  2547  SEND_VAL_EX/116           ?96       95:0                 ?2                  	;0
		143  2547  SEND_VAL_EX/116           ?112      96:-1                ?3                  	;0
		144  2547  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
		145  2547  SEND_VAR_NO_REF_EX/50     ?96       $63                  ?2                  	;0
		146  2547  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
		147  2547  SEND_VAR_NO_REF_EX/50     ?80       $64                  ?1                  	;0
		148  2547  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
		149  2547  ASSIGN/38                 ?58       16?0                 $65                 	;0
		150  2548  GOTO/253                  ?0        ?132                 ?97                 	;0
		151  2549  GOTO/253                  ?0        ?116                 ?98                 	;0
		152  2551  NOP/0                     ?0        99:NULL              ?0                  	;4294967295
		*/
	}

	static public function verifyLicense()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2554  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'extension_loaded'	;1
		1    2554  SEND_VAL_EX/116           ?80       2:'xui'              ?1                  	;0
		2    2554  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		3    2554  JMPZ_EX/46                #2=       $1                   ?7                  	;0	>>7
		4    2554  FETCH_CONSTANT/99         #3=       ?0                   3:'PLATFORM'        	;16
		5    2554  IS_EQUAL/17               #4=       #3                   6:'xui'             	;0
		6    2554  BOOL/52                   #2=       #4                   ?0                  	;0
		7    2554  JMPZ/43                   ?0        #2                   ?9                  	;0	>>9	<<3
		8    2555  GOTO/253                  ?0        ?30                  ?7                  	;0
		9    2557  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 8:'getLicense'      	;0	<<7
		10   2557  DO_FCALL/60               $5=       ?0                   ?0                  	;0
		11   2557  ASSIGN/38                 ?5        16?0                 $5                  	;0
		12   2558  BOOL_NOT/13               #7=       16?0                 ?0                  	;0
		13   2558  JMPNZ_EX/47               #7=       #7                   ?19                 	;0	>>19
		14   2558  FETCH_DIM_R/81            $8=       16?0                 10:5                	;0
		15   2558  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 11:'getMAC'         	;0
		16   2558  DO_FCALL/60               $9=       ?0                   ?0                  	;0
		17   2558  IS_NOT_EQUAL/18           #10=      $8                   $9                  	;0
		18   2558  BOOL/52                   #7=       #10                  ?0                  	;0
		19   2558  JMPNZ_EX/47               #7=       #7                   ?25                 	;0	>>25	<<13
		20   2558  FETCH_DIM_R/81            $11=      16?0                 13:3                	;0
		21   2558  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'time'           	;0
		22   2558  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
		23   2558  IS_SMALLER/19             #13=      $11                  $12                 	;0
		24   2558  BOOL/52                   #7=       #13                  ?0                  	;0
		25   2558  BOOL_NOT/13               #14=      #7                   ?0                  	;0	<<19
		26   2558  JMPZ/43                   ?0        #14                  ?28                 	;0	>>28
		27   2559  GOTO/253                  ?0        ?29                  ?16                 	;0
		28   2561  EXIT/79                   ?0        17:'This server is unlicensed. Please check the billing panel for more information.' ?0                  	;0	<<26
		29   2563  GOTO/253                  ?0        ?31                  ?18                 	;0
		30   2565  RETURN/62                 ?0        19:true              ?0                  	;0
		31   2567  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function encrypt($ba2d146bb5a55097, $F7df04783a436472, $Db0336509474eb3e)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2568  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2568  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2568  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3    2570  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 0:'base64url_encode'	;1
		4    2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'openssl_encrypt' 	;5
		5    2570  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6    2570  SEND_VAL_EX/116           ?96       4:'aes-256-cbc'      ?2                  	;0
		7    2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'md5'             	;1
		8    2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'sha1'            	;1
		9    2570  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		10   2570  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		11   2570  CONCAT/8                  #4=       $3                   16?1                	;0
		12   2570  SEND_VAL_EX/116           ?80       #4                   ?1                  	;0
		13   2570  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		14   2570  SEND_VAR_NO_REF_EX/50     ?112      $5                   ?3                  	;0
		15   2570  FETCH_CONSTANT/99         #6=       ?0                   9:'OPENSSL_RAW_DATA'	;16
		16   2570  SEND_VAL_EX/116           ?128      #6                   ?4                  	;0
		17   2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'substr'         	;3
		18   2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'md5'            	;1
		19   2570  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'sha1'           	;1
		20   2570  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		21   2570  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		22   2570  SEND_VAR_NO_REF_EX/50     ?80       $7                   ?1                  	;0
		23   2570  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		24   2570  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		25   2570  SEND_VAL_EX/116           ?96       18:0                 ?2                  	;0
		26   2570  SEND_VAL_EX/116           ?112      19:16                ?3                  	;0
		27   2570  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		28   2570  SEND_VAR_NO_REF_EX/50     ?144      $9                   ?5                  	;0
		29   2570  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		30   2570  SEND_VAR_NO_REF_EX/50     ?80       $10                  ?1                  	;0
		31   2570  DO_FCALL/60               $11=      ?0                   ?0                  	;0
		32   2570  RETURN/62                 ?0        $11                  ?0                  	;0
		33   2571  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static public function decrypt($ba2d146bb5a55097, $F7df04783a436472, $Db0336509474eb3e)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2572  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2572  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2    2572  RECV/63                   16?2=     ?3                   ?4294967294         	;0
		3    2574  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'openssl_decrypt' 	;5
		4    2574  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 2:'base64url_decode'	;1
		5    2574  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6    2574  DO_FCALL/60               $3=       ?0                   ?0                  	;0
		7    2574  SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
		8    2574  SEND_VAL_EX/116           ?96       4:'aes-256-cbc'      ?2                  	;0
		9    2574  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'md5'             	;1
		10   2574  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'sha1'            	;1
		11   2574  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
		12   2574  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
		13   2574  CONCAT/8                  #5=       $4                   16?1                	;0
		14   2574  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
		15   2574  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		16   2574  SEND_VAR_NO_REF_EX/50     ?112      $6                   ?3                  	;0
		17   2574  FETCH_CONSTANT/99         #7=       ?0                   9:'OPENSSL_RAW_DATA'	;16
		18   2574  SEND_VAL_EX/116           ?128      #7                   ?4                  	;0
		19   2574  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'substr'         	;3
		20   2574  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'md5'            	;1
		21   2574  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'sha1'           	;1
		22   2574  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		23   2574  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		24   2574  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		25   2574  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		26   2574  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
		27   2574  SEND_VAL_EX/116           ?96       18:0                 ?2                  	;0
		28   2574  SEND_VAL_EX/116           ?112      19:16                ?3                  	;0
		29   2574  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		30   2574  SEND_VAR_NO_REF_EX/50     ?144      $10                  ?5                  	;0
		31   2574  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		32   2574  RETURN/62                 ?0        $11                  ?0                  	;0
		33   2575  NOP/0                     ?0        20:NULL              ?0                  	;4294967295
		*/
	}

	static private function base64url_encode($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2576  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2578  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'rtrim'           	;2
		2    2578  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'strtr'           	;3
		3    2578  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'base64_encode'   	;1
		4    2578  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		5    2578  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		6    2578  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		7    2578  SEND_VAL_EX/116           ?96       6:'+/'               ?2                  	;0
		8    2578  SEND_VAL_EX/116           ?112      7:'-_'               ?3                  	;0
		9    2578  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		10   2578  SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
		11   2578  SEND_VAL_EX/116           ?96       8:'='                ?2                  	;0
		12   2578  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		13   2578  RETURN/62                 ?0        $3                   ?0                  	;0
		14   2579  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
		*/
	}

	static private function base64url_decode($ba2d146bb5a55097)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2580  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1    2582  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'base64_decode'   	;1
		2    2582  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'strtr'           	;3
		3    2582  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4    2582  SEND_VAL_EX/116           ?96       4:'-_'               ?2                  	;0
		5    2582  SEND_VAL_EX/116           ?112      5:'+/'               ?3                  	;0
		6    2582  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		7    2582  SEND_VAR_NO_REF_EX/50     ?80       $1                   ?1                  	;0
		8    2582  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		9    2582  RETURN/62                 ?0        $2                   ?0                  	;0
		10   2583  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	static private function getLicense()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2586  BIND_GLOBAL/168           ?0        16?0                 0:'A8dfaf9c3f32573e'	;0
		1    2587  JMPZ/43                   ?0        16?0                 ?3                  	;0	>>3
		2    2588  GOTO/253                  ?0        ?5                   ?1                  	;0
		3    2590  RETURN/62                 ?0        2:NULL               ?0                  	;0	<<1
		4    2591  GOTO/253                  ?0        ?15                  ?3                  	;0
		5    2593  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'explode'         	;2
		6    2593  SEND_VAL_EX/116           ?80       6:'::'               ?1                  	;0
		7    2593  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 7:'decrypt'         	;3
		8    2593  SEND_VAR/117              ?80       16?0                 ?1                  	;0
		9    2593  SEND_VAL/65               ?96       9:'0d01d1dc470b0b3a4d676ec49fb42261' ?2                  	;0
		10   2593  SEND_VAL/65               ?112      10:'faa33a7d87219846e40b75dbf5bc7932' ?3                  	;0
		11   2593  DO_FCALL/60               $1=       ?0                   ?0                  	;0
		12   2593  SEND_VAR_NO_REF_EX/50     ?96       $1                   ?2                  	;0
		13   2593  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		14   2593  RETURN/62                 ?0        $2                   ?0                  	;0
		15   2595  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	static public function getMAC()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2598  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'exec'            	;2
		1    2598  SEND_VAL_EX/116           ?80       2:'ip --json address list' ?1                  	;0
		2    2598  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		3    2598  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
		4    2599  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'json_decode'     	;2
		5    2599  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'implode'         	;2
		6    2599  SEND_VAL_EX/116           ?80       7:''                 ?1                  	;0
		7    2599  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		8    2599  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		9    2599  SEND_VAR_NO_REF_EX/50     ?80       $6                   ?1                  	;0
		10   2599  SEND_VAL_EX/116           ?96       8:true               ?2                  	;0
		11   2599  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		12   2599  ASSIGN/38                 ?3        16?1                 $7                  	;0
		13   2600  ASSIGN/38                 ?4        16?2                 9:NULL              	;0
		14   2601  FE_RESET_R/77             $10=      16?1                 ?53                 	;0
		15   2601  FE_FETCH_R/78             ?0        $10                  16?3                	;53	>>53	<<52
		16   2602  FETCH_DIM_R/81            $11=      16?3                 10:'addr_info'      	;0
		17   2602  FE_RESET_R/77             $12=      $11                  ?51                 	;0
		18   2602  FE_FETCH_R/78             ?0        $12                  16?4                	;51	>>51	<<50
		19   2603  FETCH_DIM_R/81            $13=      16?4                 11:'label'          	;0
		20   2603  IS_NOT_EQUAL/18           #14=      $13                  12:'lo'             	;0
		21   2603  JMPZ_EX/46                #14=      #14                  ?25                 	;0	>>25
		22   2603  ISSET_ISEMPTY_DIM_OBJ/115 #15=      16?4                 13:'local'          	;16777216
		23   2603  BOOL_NOT/13               #16=      #15                  ?0                  	;0
		24   2603  BOOL/52                   #14=      #16                  ?0                  	;0
		25   2603  BOOL_NOT/13               #17=      #14                  ?0                  	;0	<<21
		26   2603  JMPZ/43                   ?0        #17                  ?30                 	;0	>>30
		27   2604  NOP/0                     ?0        ?0                   ?0                  	;1
		28   2604  NOP/0                     ?0        ?0                   ?0                  	;1
		29   2604  GOTO/253                  ?0        ?50                  ?14                 	;0
		30   2606  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'filter_var'     	;2	<<26
		31   2606  FETCH_DIM_FUNC_ARG/93     $18=      16?3                 17:'address'        	;1
		32   2606  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
		33   2606  FETCH_CONSTANT/99         #19=      ?0                   18:'FILTER_VALIDATE_MAC'	;16
		34   2606  SEND_VAL_EX/116           ?96       #19                  ?2                  	;0
		35   2606  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		36   2606  JMPZ_EX/46                #21=      $20                  ?40                 	;0	>>40
		37   2606  FETCH_DIM_R/81            $22=      16?3                 21:'address'        	;0
		38   2606  IS_NOT_EQUAL/18           #23=      $22                  22:'00:00:00:00:00:00'	;0
		39   2606  BOOL/52                   #21=      #23                  ?0                  	;0
		40   2606  BOOL_NOT/13               #24=      #21                  ?0                  	;0	<<36
		41   2606  JMPZ/43                   ?0        #24                  ?45                 	;0	>>45
		42   2607  NOP/0                     ?0        ?0                   ?0                  	;1
		43   2607  NOP/0                     ?0        ?0                   ?0                  	;1
		44   2607  GOTO/253                  ?0        ?50                  ?23                 	;0
		45   2609  FETCH_DIM_R/81            $25=      16?3                 24:'address'        	;0	<<41
		46   2609  ASSIGN/38                 ?21       16?2                 $25                 	;0
		47   2610  FE_FREE/127               ?0        $12                  ?1                  	;1
		48   2610  FE_FREE/127               ?0        $10                  ?0                  	;1
		49   2610  GOTO/253                  ?0        ?54                  ?25                 	;0
		50   2613  JMP/42                    ?0        ?18                  ?0                  	;0	>>18
		51   2613  FE_FREE/127               ?0        $12                  ?0                  	;0	<<17
		52   2616  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		53   2616  FE_FREE/127               ?0        $10                  ?0                  	;0	<<14
		54   2619  RETURN/62                 ?0        16?2                 ?0                  	;0
		55   2620  NOP/0                     ?0        26:NULL              ?0                  	;4294967295
		*/
	}

	static public function updateLicense($Ffc2f317a32f24c0)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0    2621  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
		1    2623  GOTO/253                  ?0        ?73                  ?1                  	;0
		2    2625  RETURN/62                 ?0        2:NULL               ?0                  	;0
		3    2627  GOTO/253                  ?0        ?98                  ?3                  	;0
		4    2629  FETCH_DIM_R/81            $6=       16?1                 4:'status'          	;0
		5    2629  JMPZ/43                   ?0        $6                   ?7                  	;0	>>7
		6    2630  GOTO/253                  ?0        ?12                  ?5                  	;0
		7    2632  FETCH_DIM_R/81            $7=       16?1                 6:'error'           	;0	<<5
		8    2632  JMP_SET/152               #8=       $7                   ?10                 	;0
		9    2632  QM_ASSIGN/22              #8=       7:'Couldn\'t contact license server.' ?0                  	;0
		10   2632  RETURN/62                 ?0        #8                   ?0                  	;0
		11   2633  GOTO/253                  ?0        ?3                   ?8                  	;0
		12   2635  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'file_put_contents'	;2
		13   2635  CONCAT/8                  #9=       16?2                 11:'license.php'    	;0
		14   2635  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		15   2635  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'str_replace'    	;3
		16   2635  SEND_VAL_EX/116           ?80       14:'"'               ?1                  	;0
		17   2635  SEND_VAL_EX/116           ?96       15:'\\"'             ?2                  	;0
		18   2635  FETCH_DIM_FUNC_ARG/93     $10=      16?1                 16:'license'        	;3
		19   2635  SEND_VAR_EX/66            ?112      $10                  ?3                  	;0
		20   2635  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		21   2635  CONCAT/8                  #12=      17:'<?php $rLicenseEnc = "' $11                 	;0
		22   2635  CONCAT/8                  #13=      #12                  18:'"; ?>'          	;0
		23   2635  SEND_VAL_EX/116           ?96       #13                  ?2                  	;0
		24   2635  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
		25   2636  GOTO/253                  ?0        ?2                   ?19                 	;0
		26   2638  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'curl_setopt'    	;3
		27   2638  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		28   2638  FETCH_CONSTANT/99         #15=      ?0                   22:'CURLOPT_POSTFIELDS'	;16
		29   2638  SEND_VAL_EX/116           ?96       #15                  ?2                  	;0
		30   2638  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'http_build_query'	;1
		31   2638  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 27:'encrypt'        	;3
		32   2638  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'json_encode'    	;1
		33   2638  INIT_ARRAY/71             #16=      16?0                 31:'license_key'    	;10
		34   2638  ADD_ARRAY_ELEMENT/72      #16=      16?4                 32:'mac'            	;0
		35   2638  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
		36   2638  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		37   2638  SEND_VAR/117              ?80       $17                  ?1                  	;0
		38   2638  SEND_VAL/65               ?96       33:'0d01d1dc470b0b3a4d676ec49fb42261' ?2                  	;0
		39   2638  SEND_VAL/65               ?112      34:'faa33a7d87219846e40b75dbf5bc7932' ?3                  	;0
		40   2638  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		41   2638  INIT_ARRAY/71             #19=      $18                  35:'data'           	;6
		42   2638  SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
		43   2638  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
		44   2638  SEND_VAR_NO_REF_EX/50     ?112      $20                  ?3                  	;0
		45   2638  DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
		46   2639  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'curl_setopt'    	;3
		47   2639  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		48   2639  FETCH_CONSTANT/99         #22=      ?0                   38:'CURLOPT_POST'   	;16
		49   2639  SEND_VAL_EX/116           ?96       #22                  ?2                  	;0
		50   2639  SEND_VAL_EX/116           ?112      41:1                 ?3                  	;0
		51   2639  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
		52   2640  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'curl_setopt'    	;3
		53   2640  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		54   2640  FETCH_CONSTANT/99         #24=      ?0                   44:'CURLOPT_TIMEOUT'	;16
		55   2640  SEND_VAL_EX/116           ?96       #24                  ?2                  	;0
		56   2640  SEND_VAL_EX/116           ?112      47:30                ?3                  	;0
		57   2640  DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
		58   2641  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'curl_setopt'    	;3
		59   2641  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		60   2641  FETCH_CONSTANT/99         #26=      ?0                   50:'CURLOPT_RETURNTRANSFER'	;16
		61   2641  SEND_VAL_EX/116           ?96       #26                  ?2                  	;0
		62   2641  SEND_VAL_EX/116           ?112      53:true              ?3                  	;0
		63   2641  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
		64   2642  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'json_decode'    	;2
		65   2642  INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'curl_exec'      	;1
		66   2642  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		67   2642  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		68   2642  SEND_VAR_NO_REF_EX/50     ?80       $28                  ?1                  	;0
		69   2642  SEND_VAL_EX/116           ?96       58:true              ?2                  	;0
		70   2642  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
		71   2642  ASSIGN/38                 ?24       16?1                 $29                 	;0
		72   2643  GOTO/253                  ?0        ?4                   ?59                 	;0
		73   2645  BIND_GLOBAL/168           ?0        16?5                 60:'a998abd856b07a59'	;0
		74   2645  BIND_GLOBAL/168           ?0        16?2                 61:'Aada683fa06f68b7'	;0
		75   2646  JMPZ/43                   ?0        16?0                 ?77                 	;0	>>77
		76   2647  GOTO/253                  ?0        ?79                  ?62                 	;0
		77   2649  FETCH_DIM_R/81            $31=      16?5                 63:'license'        	;0	<<75
		78   2649  ASSIGN/38                 ?26       16?0                 $31                 	;0
		79   2651  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 64:'getMAC'         	;0
		80   2651  DO_FCALL/60               $33=      ?0                   ?0                  	;0
		81   2651  ASSIGN/38                 ?28       16?4                 $33                 	;0
		82   2652  GOTO/253                  ?0        ?83                  ?66                 	;0
		83   2654  ISSET_ISEMPTY_CV/197      #35=      16?4                 ?0                  	;16777216
		84   2654  BOOL_NOT/13               #36=      #35                  ?0                  	;0
		85   2654  JMPZ/43                   ?0        #36                  ?87                 	;0	>>87
		86   2655  GOTO/253                  ?0        ?88                  ?67                 	;0
		87   2657  RETURN/62                 ?0        68:false             ?0                  	;0	<<85
		88   2659  INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'curl_init'      	;0
		89   2659  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		90   2659  ASSIGN/38                 ?32       16?3                 $37                 	;0
		91   2660  INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'curl_setopt'    	;3
		92   2660  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		93   2660  FETCH_CONSTANT/99         #39=      ?0                   73:'CURLOPT_URL'    	;16
		94   2660  SEND_VAL_EX/116           ?96       #39                  ?2                  	;0
		95   2660  SEND_VAL_EX/116           ?112      76:'https://license.xui.one:2053/webplayer.php' ?3                  	;0
		96   2660  DO_FCALL_BY_NAME/131      ?34       ?0                   ?0                  	;0
		97   2661  GOTO/253                  ?0        ?26                  ?77                 	;0
		98   2663  NOP/0                     ?0        78:NULL              ?0                  	;4294967295
		*/
	}
}

function E79886964334425A($a5fd10913e5b22d3, $bbbe5eca9c8056cb)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  87  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  87  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2  89  ISSET_ISEMPTY_DIM_OBJ/115 #3=       16?0                 0:'stream_display_name'	;33554432
	3  89  JMPZ/43                   ?0        #3                   ?6                  	;0	>>6
	4  89  QM_ASSIGN/22              #4=       1:'stream_display_name' ?0                  	;0
	5  89  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
	6  89  QM_ASSIGN/22              #4=       2:'title'            ?0                  	;0	<<3
	7  89  ASSIGN/38                 ?2        16?2                 #4                  	;0	<<5
	8  90  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'strcmp'          	;2
	9  90  FETCH_DIM_FUNC_ARG/93     $6=       16?0                 16?2                	;1
	10 90  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
	11 90  FETCH_DIM_FUNC_ARG/93     $7=       16?1                 16?2                	;2
	12 90  SEND_VAR_EX/66            ?96       $7                   ?2                  	;0
	13 90  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	14 90  RETURN/62                 ?0        $8                   ?0                  	;0
	15 91  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
	*/
}

function dBc3E29F55C945Ab()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   94   FETCH_W/83                $1=       0:'_SESSION'         ?0                  	;1073741824
	1   94   MAKE_REF/51               $3=       $1                   ?0                  	;0
	2   94   FETCH_W/83                $2=       1:'_SESSION'         ?0                  	;0
	3   94   ASSIGN_REF/39             ?0        $2                   $3                  	;0
	4   95   FE_RESET_R/77             $4=       2:array (
  0 => 'phash',
  1 => 'pverify',
) ?15                 	;0
	5   95   FE_FETCH_R/78             ?0        $4                   16?0                	;15	>>15	<<14
	6   96   FETCH_IS/89               $5=       3:'_SESSION'         ?0                  	;0
	7   96   ISSET_ISEMPTY_DIM_OBJ/115 #6=       $5                   16?0                	;33554432
	8   96   BOOL_NOT/13               #7=       #6                   ?0                  	;0
	9   96   JMPZ/43                   ?0        #7                   ?12                 	;0	>>12
	10  97   NOP/0                     ?0        ?0                   ?0                  	;1
	11  97   GOTO/253                  ?0        ?14                  ?4                  	;0
	12  99   FETCH_UNSET/95            $8=       5:'_SESSION'         ?0                  	;0	<<9
	13  99   UNSET_DIM/75              ?0        $8                   16?0                	;0
	14  101  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
	15  101  FE_FREE/127               ?0        $4                   ?0                  	;0	<<4
	16  104  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

function sortArrayByArray($F647a429f8089f01, $C3552efd343ac0d5)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    2742  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    2742  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    2744  ISSET_ISEMPTY_CV/197      #5=       16?0                 ?0                  	;16777216
	3    2744  JMPNZ_EX/47               #5=       #5                   ?6                  	;0	>>6
	4    2744  ISSET_ISEMPTY_CV/197      #6=       16?1                 ?0                  	;16777216
	5    2744  BOOL/52                   #5=       #6                   ?0                  	;0
	6    2744  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<3
	7    2744  JMPZ/43                   ?0        #7                   ?9                  	;0	>>9
	8    2745  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
	9    2747  RETURN/62                 ?0        1:array (
)          ?0                  	;0	<<7
	10   2749  ASSIGN/38                 ?3        16?2                 2:array (
)         	;0	<<8
	11   2750  FE_RESET_R/77             $9=       16?1                 ?27                 	;0
	12   2750  FE_FETCH_R/78             ?0        $9                   16?3                	;27	>>27	<<26
	13   2751  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'array_search'    	;2
	14   2751  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	15   2751  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	16   2751  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	17   2751  ASSIGN/38                 $11=      16?4                 $10                 	;0
	18   2751  IS_NOT_IDENTICAL/16       #12=      $11                  5:false             	;0
	19   2751  BOOL_NOT/13               #13=      #12                  ?0                  	;0
	20   2751  JMPZ/43                   ?0        #13                  ?23                 	;0	>>23
	21   2752  NOP/0                     ?0        ?0                   ?0                  	;1
	22   2752  GOTO/253                  ?0        ?26                  ?6                  	;0
	23   2754  ASSIGN_DIM/147            ?9        16?2                 ?4397406            	;0	<<20
	24   2754  OP_DATA/137               ?0        16?3                 ?0                  	;0
	25   2755  UNSET_DIM/75              ?0        16?0                 16?4                	;0
	26   2757  JMP/42                    ?0        ?12                  ?0                  	;0	>>12
	27   2757  FE_FREE/127               ?0        $9                   ?0                  	;0	<<11
	28   2760  ADD/1                     #15=      16?2                 16?0                	;0
	29   2760  RETURN/62                 ?0        #15                  ?0                  	;0
	30   2761  NOP/0                     ?0        7:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     ISSET_ISEMPTY_CV/197      #8=       16?0                 ?0                  	;33554432
1    3     BOOL_NOT/13               #9=       #8                   ?0                  	;0
2    3     JMPZ_EX/46                #9=       #9                   ?7                  	;0	>>7
3    3     INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'php_sapi_name'   	;0
4    3     DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
5    3     IS_EQUAL/17               #11=      $10                  2:'cli'             	;0
6    3     BOOL/52                   #9=       #11                  ?0                  	;0
7    3     BOOL_NOT/13               #12=      #9                   ?0                  	;0	<<2
8    3     JMPZ/43                   ?0        #12                  ?10                 	;0	>>10
9    4     GOTO/253                  ?0        ?11                  ?3                  	;0
10   6     EXIT/79                   ?0        ?0                   ?0                  	;0	<<8
11   8     INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'session_start'   	;0
12   8     DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
13   10    GOTO/253                  ?0        ?66                  ?6                  	;0
14   13    INIT_STATIC_METHOD_CALL/113 ?0        7:'XUI'              9:'cC988751eebbF271'	;4
15   13    FETCH_FUNC_ARG/92         $14=      11:'_SESSION'        ?0                  	;1
16   13    FETCH_DIM_FUNC_ARG/93     $15=      $14                  12:'phash'          	;1
17   13    SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
18   13    SEND_VAL_EX/116           ?96       13:NULL              ?2                  	;0
19   13    SEND_VAL_EX/116           ?112      14:NULL              ?3                  	;0
20   13    SEND_VAL_EX/116           ?128      15:true              ?4                  	;0
21   13    DO_FCALL/60               $16=      ?0                   ?0                  	;0
22   13    ASSIGN/38                 ?9        16?1                 $16                 	;0
23   14    BOOL_NOT/13               #18=      16?1                 ?0                  	;0
24   14    JMPNZ_EX/47               #18=      #18                  ?36                 	;0	>>36
25   14    FETCH_R/80                $19=      16:'_SESSION'        ?0                  	;0
26   14    FETCH_DIM_R/81            $20=      $19                  17:'pverify'        	;0
27   14    INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'md5'            	;1
28   14    FETCH_DIM_R/81            $21=      16?1                 20:'username'       	;0
29   14    CONCAT/8                  #22=      $21                  21:'||'             	;0
30   14    FETCH_DIM_R/81            $23=      16?1                 22:'password'       	;0
31   14    CONCAT/8                  #24=      #22                  $23                 	;0
32   14    SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
33   14    DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
34   14    IS_NOT_EQUAL/18           #26=      $20                  $25                 	;0
35   14    BOOL/52                   #18=      #26                  ?0                  	;0
36   14    JMPNZ_EX/47               #18=      #18                  ?49                 	;0	>>49	<<24
37   14    INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'is_null'        	;1
38   14    FETCH_DIM_FUNC_ARG/93     $27=      16?1                 25:'exp_date'       	;1
39   14    SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
40   14    DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
41   14    BOOL_NOT/13               #29=      $28                  ?0                  	;0
42   14    JMPZ_EX/46                #29=      #29                  ?48                 	;0	>>48
43   14    INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'time'           	;0
44   14    DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
45   14    FETCH_DIM_R/81            $31=      16?1                 28:'exp_date'       	;0
46   14    IS_SMALLER_OR_EQUAL/20    #32=      $31                  $30                 	;0
47   14    BOOL/52                   #29=      #32                  ?0                  	;0
48   14    BOOL/52                   #18=      #29                  ?0                  	;0	<<42
49   14    JMPNZ_EX/47               #18=      #18                  ?53                 	;0	>>53	<<36
50   14    FETCH_DIM_R/81            $33=      16?1                 29:'admin_enabled'  	;0
51   14    IS_EQUAL/17               #34=      $33                  30:0                	;0
52   14    BOOL/52                   #18=      #34                  ?0                  	;0
53   14    JMPNZ_EX/47               #18=      #18                  ?57                 	;0	>>57	<<49
54   14    FETCH_DIM_R/81            $35=      16?1                 31:'enabled'        	;0
55   14    IS_EQUAL/17               #36=      $35                  32:0                	;0
56   14    BOOL/52                   #18=      #36                  ?0                  	;0
57   14    BOOL_NOT/13               #37=      #18                  ?0                  	;0	<<53
58   14    JMPZ/43                   ?0        #37                  ?60                 	;0	>>60
59   15    GOTO/253                  ?0        ?308                 ?33                 	;0
60   17    INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'DBc3e29f55c945Ab'	;0	<<58
61   17    DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
62   18    INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'header'         	;1
63   18    SEND_VAL_EX/116           ?80       38:'Location: login.php' ?1                  	;0
64   18    DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
65   19    GOTO/253                  ?0        ?307                 ?39                 	;0
66   21    INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'get_included_files'	;0
67   21    DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
68   21    FETCH_LIST/98             $41=      $40                  42:0                	;0
69   21    ASSIGN/38                 ?34       16?2                 $41                 	;0
70   21    FREE/70                   ?0        $40                  ?0                  	;0
71   22    INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'pathinfo'       	;1
72   22    SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
73   22    DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
74   22    FETCH_DIM_R/81            $44=      $43                  45:'dirname'        	;0
75   22    CONCAT/8                  #45=      $44                  46:'/'              	;0
76   22    ASSIGN/38                 ?38       16?2                 #45                 	;0
77   23    INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'file_exists'    	;1
78   23    SEND_VAL_EX/116           ?80       49:'config.php'      ?1                  	;0
79   23    DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
80   23    BOOL_NOT/13               #48=      $47                  ?0                  	;0
81   23    JMPZ/43                   ?0        #48                  ?83                 	;0	>>83
82   24    GOTO/253                  ?0        ?84                  ?50                 	;0
83   26    INCLUDE_OR_EVAL/73        ?41       51:'config.php'      ?0                  	;16	<<81
84   28    GOTO/253                  ?0        ?405                 ?52                 	;0
85   31    FETCH_IS/89               $50=      53:'_SESSION'        ?0                  	;0
86   31    ISSET_ISEMPTY_DIM_OBJ/115 #51=      $50                  54:'phash'          	;33554432
87   31    JMPZ/43                   ?0        #51                  ?89                 	;0	>>89
88   32    GOTO/253                  ?0        ?14                  ?55                 	;0
89   34    INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'header'         	;1	<<87
90   34    SEND_VAL_EX/116           ?80       58:'Location: login.php' ?1                  	;0
91   34    DO_FCALL_BY_NAME/131      ?44       ?0                   ?0                  	;0
92   35    EXIT/79                   ?0        ?0                   ?0                  	;0
93   36    GOTO/253                  ?0        ?312                 ?59                 	;0
94   37    GOTO/253                  ?0        ?14                  ?60                 	;0
95   40    FE_RESET_R/77             $53=      61:array (
  0 => 'server_name',
  1 => 'tmdb_api_key',
) ?106                	;0
96   40    FE_FETCH_R/78             ?0        $53                  16?3                	;106	>>106	<<105
97   41    ISSET_ISEMPTY_DIM_OBJ/115 #54=      16?4                 16?3                	;16777216
98   41    JMPZ/43                   ?0        #54                  ?101                	;0	>>101
99   42    NOP/0                     ?0        ?0                   ?0                  	;1
100  42    GOTO/253                  ?0        ?105                 ?62                 	;0
101  44    FETCH_DIM_R/81            $57=      16?4                 16?3                	;0	<<98
102  44    FETCH_STATIC_PROP_W/174   $55=      63:'rSettings'       64:'XUI'            	;0
103  44    ASSIGN_DIM/147            ?48       $55                  16?3                	;0
104  44    OP_DATA/137               ?0        $57                  ?0                  	;0
105  46    JMP/42                    ?0        ?96                  ?0                  	;0	>>96
106  46    FE_FREE/127               ?0        $53                  ?0                  	;0	<<95
107  49    FETCH_STATIC_PROP_W/174   $58=      66:'rSettings'       67:'XUI'            	;0
108  49    ASSIGN_DIM/147            ?51       $58                  69:'player_hide_incompatible'	;0
109  49    OP_DATA/137               ?0        70:false             ?0                  	;0
110  50    FETCH_STATIC_PROP_W/174   $60=      71:'rSettings'       72:'XUI'            	;0
111  50    ASSIGN_DIM/147            ?53       $60                  74:'disable_hls'    	;0
112  50    OP_DATA/137               ?0        75:false             ?0                  	;0
113  51    GOTO/253                  ?0        ?394                 ?76                 	;0
114  54    INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'define'         	;2
115  54    SEND_VAL_EX/116           ?80       79:'PLATFORM'        ?1                  	;0
116  54    FETCH_DIM_FUNC_ARG/93     $62=      16?4                 80:'platform'       	;2
117  54    SEND_VAR_EX/66            ?96       $62                  ?2                  	;0
118  54    DO_FCALL_BY_NAME/131      ?55       ?0                   ?0                  	;0
119  55    INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'define'         	;2
120  55    SEND_VAL_EX/116           ?80       83:'TMP_PATH'        ?1                  	;0
121  55    FETCH_DIM_FUNC_ARG/93     $64=      16?4                 84:'tmp_path'       	;2
122  55    SEND_VAR_EX/66            ?96       $64                  ?2                  	;0
123  55    DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
124  56    INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'define'         	;2
125  56    SEND_VAL_EX/116           ?80       87:'CACHE_TMP_PATH'  ?1                  	;0
126  56    FETCH_CONSTANT/99         #66=      ?0                   88:'TMP_PATH'       	;16
127  56    SEND_VAL_EX/116           ?96       #66                  ?2                  	;0
128  56    DO_FCALL_BY_NAME/131      ?59       ?0                   ?0                  	;0
129  57    FETCH_CONSTANT/99         #68=      ?0                   91:'TMP_PATH'       	;16
130  57    JMPZ_EX/46                #68=      #68                  ?137                	;0	>>137
131  57    INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'file_exists'    	;1
132  57    FETCH_CONSTANT/99         #69=      ?0                   96:'TMP_PATH'       	;16
133  57    SEND_VAL_EX/116           ?80       #69                  ?1                  	;0
134  57    DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
135  57    BOOL_NOT/13               #71=      $70                  ?0                  	;0
136  57    BOOL/52                   #68=      #71                  ?0                  	;0
137  57    BOOL_NOT/13               #72=      #68                  ?0                  	;0	<<130
138  57    JMPZ/43                   ?0        #72                  ?140                	;0	>>140
139  58    GOTO/253                  ?0        ?419                 ?99                 	;0
140  60    GOTO/253                  ?0        ?415                 ?100                	;0	<<138
141  62    INIT_METHOD_CALL/112      ?0        16?5                 101:'db_connect'    	;0
142  62    DO_FCALL/60               ?65       ?0                   ?0                  	;0
143  63    INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'define'        	;2
144  63    SEND_VAL_EX/116           ?80       105:'STREAMS_TMP_PATH' ?1                  	;0
145  63    FETCH_CONSTANT/99         #74=      ?0                   106:'XUI_HOME'      	;16
146  63    CONCAT/8                  #75=      #74                  109:'tmp/cache/streams/'	;0
147  63    SEND_VAL_EX/116           ?96       #75                  ?2                  	;0
148  63    DO_FCALL_BY_NAME/131      ?68       ?0                   ?0                  	;0
149  64    INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'define'        	;2
150  64    SEND_VAL_EX/116           ?80       112:'SERIES_TMP_PATH' ?1                  	;0
151  64    FETCH_CONSTANT/99         #77=      ?0                   113:'XUI_HOME'      	;16
152  64    CONCAT/8                  #78=      #77                  116:'tmp/cache/series/'	;0
153  64    SEND_VAL_EX/116           ?96       #78                  ?2                  	;0
154  64    DO_FCALL_BY_NAME/131      ?71       ?0                   ?0                  	;0
155  65    INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'define'        	;2
156  65    SEND_VAL_EX/116           ?80       119:'LINES_TMP_PATH' ?1                  	;0
157  65    FETCH_CONSTANT/99         #80=      ?0                   120:'XUI_HOME'      	;16
158  65    CONCAT/8                  #81=      #80                  123:'tmp/cache/lines/'	;0
159  65    SEND_VAL_EX/116           ?96       #81                  ?2                  	;0
160  65    DO_FCALL_BY_NAME/131      ?74       ?0                   ?0                  	;0
161  66    INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'define'        	;2
162  66    SEND_VAL_EX/116           ?80       126:'CONS_TMP_PATH'  ?1                  	;0
163  66    FETCH_CONSTANT/99         #83=      ?0                   127:'XUI_HOME'      	;16
164  66    CONCAT/8                  #84=      #83                  130:'tmp/opened_cons/'	;0
165  66    SEND_VAL_EX/116           ?96       #84                  ?2                  	;0
166  66    DO_FCALL_BY_NAME/131      ?77       ?0                   ?0                  	;0
167  67    GOTO/253                  ?0        ?313                 ?131                	;0
168  69    INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'md5'           	;1
169  69    INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'sha1'          	;1
170  69    FETCH_STATIC_PROP_R/173   $88=      140:'rSettings'      141:'XUI'           	;0
171  69    FETCH_DIM_R/81            $89=      $88                  143:'security_key'  	;0
172  69    JMP_SET/152               #90=      $89                  ?174                	;0
173  69    QM_ASSIGN/22              #90=      144:''               ?0                  	;0
174  69    FETCH_CONSTANT/99         #92=      ?0                   148:'SERVER_ID'     	;16
175  69    FETCH_STATIC_PROP_R/173   $91=      145:'rServers'       146:'XUI'           	;0
176  69    FETCH_DIM_R/81            $93=      $91                  #92                 	;0
177  69    FETCH_DIM_R/81            $94=      $93                  151:'server_name'   	;0
178  69    CONCAT/8                  #95=      #90                  $94                 	;0
179  69    FETCH_CONSTANT/99         #97=      ?0                   155:'SERVER_ID'     	;16
180  69    FETCH_STATIC_PROP_R/173   $96=      152:'rServers'       153:'XUI'           	;0
181  69    FETCH_DIM_R/81            $98=      $96                  #97                 	;0
182  69    FETCH_DIM_R/81            $99=      $98                  158:'server_ip'     	;0
183  69    CONCAT/8                  #100=     #95                  $99                 	;0
184  69    SEND_VAL_EX/116           ?80       #100                 ?1                  	;0
185  69    DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
186  69    CONCAT/8                  #102=     $101                 159:'5f13a731fb85944e5c69ce863b0c990d'	;0
187  69    SEND_VAL_EX/116           ?80       #102                 ?1                  	;0
188  69    DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
189  69    FETCH_STATIC_PROP_W/174   $86=      132:'rSettings'      133:'XUI'           	;0
190  69    ASSIGN_DIM/147            ?79       $86                  135:'live_streaming_pass'	;0
191  69    OP_DATA/137               ?0        $103                 ?0                  	;0
192  70    ISSET_ISEMPTY_CV/197      #104=     16?0                 ?0                  	;33554432
193  70    JMPZ/43                   ?0        #104                 ?195                	;0	>>195
194  71    GOTO/253                  ?0        ?432                 ?160                	;0
195  73    FETCH_IS/89               $105=     161:'_SERVER'        ?0                  	;0	<<193
196  73    ISSET_ISEMPTY_DIM_OBJ/115 #106=     $105                 162:'HTTPS'         	;33554432
197  73    JMPZ_EX/46                #106=     #106                 ?202                	;0	>>202
198  73    FETCH_R/80                $107=     163:'_SERVER'        ?0                  	;0
199  73    FETCH_DIM_R/81            $108=     $107                 164:'HTTPS'         	;0
200  73    IS_EQUAL/17               #109=     $108                 165:'on'            	;0
201  73    BOOL/52                   #106=     #109                 ?0                  	;0
202  73    JMPZ_EX/46                #106=     #106                 ?209                	;0	>>209	<<197
203  73    FETCH_CONSTANT/99         #111=     ?0                   169:'SERVER_ID'     	;16
204  73    FETCH_STATIC_PROP_R/173   $110=     166:'rServers'       167:'XUI'           	;0
205  73    FETCH_DIM_R/81            $112=     $110                 #111                	;0
206  73    FETCH_DIM_R/81            $113=     $112                 172:'enable_https'  	;0
207  73    BOOL_NOT/13               #114=     $113                 ?0                  	;0
208  73    BOOL/52                   #106=     #114                 ?0                  	;0
209  73    BOOL_NOT/13               #115=     #106                 ?0                  	;0	<<202
210  73    JMPZ/43                   ?0        #115                 ?212                	;0	>>212
211  74    GOTO/253                  ?0        ?85                  ?173                	;0
212  76    INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'header'        	;1	<<210
213  76    FETCH_CONSTANT/99         #117=     ?0                   179:'SERVER_ID'     	;16
214  76    FETCH_STATIC_PROP_R/173   $116=     176:'rServers'       177:'XUI'           	;0
215  76    FETCH_DIM_R/81            $118=     $116                 #117                	;0
216  76    FETCH_DIM_R/81            $119=     $118                 182:'http_url'      	;0
217  76    CONCAT/8                  #120=     183:'Location: '     $119                	;0
218  76    INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'ltrim'         	;2
219  76    FETCH_FUNC_ARG/92         $121=     186:'_SERVER'        ?0                  	;1
220  76    FETCH_DIM_FUNC_ARG/93     $122=     $121                 187:'REQUEST_URI'   	;1
221  76    SEND_VAR_EX/66            ?80       $122                 ?1                  	;0
222  76    SEND_VAL_EX/116           ?96       188:'/'              ?2                  	;0
223  76    DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
224  76    CONCAT/8                  #124=     #120                 $123                	;0
225  76    SEND_VAL_EX/116           ?80       #124                 ?1                  	;0
226  76    DO_FCALL_BY_NAME/131      ?117      ?0                   ?0                  	;0
227  77    EXIT/79                   ?0        ?0                   ?0                  	;0
228  78    GOTO/253                  ?0        ?85                  ?189                	;0
229  80    INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'define'        	;2
230  80    SEND_VAL_EX/116           ?80       192:'PLATFORM'       ?1                  	;0
231  80    SEND_VAL_EX/116           ?96       193:'xui'            ?2                  	;0
232  80    DO_FCALL_BY_NAME/131      ?118      ?0                   ?0                  	;0
233  81    INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'define'        	;2
234  81    SEND_VAL_EX/116           ?80       196:'TMP_PATH'       ?1                  	;0
235  81    FETCH_CONSTANT/99         #127=     ?0                   197:'XUI_HOME'      	;16
236  81    CONCAT/8                  #128=     #127                 200:'tmp/player/'   	;0
237  81    SEND_VAL_EX/116           ?96       #128                 ?2                  	;0
238  81    DO_FCALL_BY_NAME/131      ?121      ?0                   ?0                  	;0
239  82    INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'define'        	;2
240  82    SEND_VAL_EX/116           ?80       203:'CACHE_TMP_PATH' ?1                  	;0
241  82    FETCH_CONSTANT/99         #130=     ?0                   204:'XUI_HOME'      	;16
242  82    CONCAT/8                  #131=     #130                 207:'tmp/cache/'    	;0
243  82    SEND_VAL_EX/116           ?96       #131                 ?2                  	;0
244  82    DO_FCALL_BY_NAME/131      ?124      ?0                   ?0                  	;0
245  84    GOTO/253                  ?0        ?419                 ?208                	;0
246  85    GOTO/253                  ?0        ?114                 ?209                	;0
247  87    NOP/0                     ?0        ?0                   ?0                  	;0
248  92    NOP/0                     ?0        ?0                   ?0                  	;0
249  105   NOP/0                     ?0        ?0                   ?0                  	;0
250  341   NOP/0                     ?0        ?0                   ?0                  	;0
251  2665  BEGIN_SILENCE/57          #135=     ?0                   ?0                  	;0
252  2665  FETCH_R/80                $136=     210:'argc'           ?0                  	;268435456
253  2665  END_SILENCE/58            ?0        #135                 ?0                  	;0
254  2665  JMPZ/43                   ?0        $136                 ?256                	;0	>>256
255  2666  GOTO/253                  ?0        ?285                 ?211                	;0
256  2668  GOTO/253                  ?0        ?270                 ?212                	;0	<<254
257  2670  EXIT/79                   ?0        ?0                   ?0                  	;0
258  2671  GOTO/253                  ?0        ?245                 ?213                	;0
259  2673  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'define'        	;2
260  2673  SEND_VAL_EX/116           ?80       216:'XUI_HOME'       ?1                  	;0
261  2673  SEND_VAL_EX/116           ?96       217:'/home/xui/'     ?2                  	;0
262  2673  DO_FCALL_BY_NAME/131      ?129      ?0                   ?0                  	;0
263  2674  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'define'        	;2
264  2674  SEND_VAL_EX/116           ?80       220:'BIN_PATH'       ?1                  	;0
265  2674  FETCH_CONSTANT/99         #138=     ?0                   221:'XUI_HOME'      	;16
266  2674  CONCAT/8                  #139=     #138                 224:'bin/'          	;0
267  2674  SEND_VAL_EX/116           ?96       #139                 ?2                  	;0
268  2674  DO_FCALL_BY_NAME/131      ?132      ?0                   ?0                  	;0
269  2675  GOTO/253                  ?0        ?229                 ?225                	;0
270  2677  INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'define'        	;2
271  2677  SEND_VAL_EX/116           ?80       228:'HOST'           ?1                  	;0
272  2677  INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'trim'          	;1
273  2677  INIT_FCALL_BY_NAME/59     ?0        ?0                   231:'explode'       	;2
274  2677  SEND_VAL_EX/116           ?80       233:':'              ?1                  	;0
275  2677  FETCH_FUNC_ARG/92         $141=     234:'_SERVER'        ?0                  	;2
276  2677  FETCH_DIM_FUNC_ARG/93     $142=     $141                 235:'HTTP_HOST'     	;2
277  2677  SEND_VAR_EX/66            ?96       $142                 ?2                  	;0
278  2677  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
279  2677  SEPARATE/156              $143=     $143                 ?0                  	;0
280  2677  FETCH_DIM_FUNC_ARG/93     $144=     $143                 236:0               	;1
281  2677  SEND_VAR_EX/66            ?80       $144                 ?1                  	;0
282  2677  DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
283  2677  SEND_VAR_NO_REF_EX/50     ?96       $145                 ?2                  	;0
284  2677  DO_FCALL_BY_NAME/131      ?138      ?0                   ?0                  	;0
285  2679  ISSET_ISEMPTY_CV/197      #147=     16?4                 ?0                  	;33554432
286  2679  JMPZ/43                   ?0        #147                 ?288                	;0	>>288
287  2680  GOTO/253                  ?0        ?114                 ?237                	;0
288  2682  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'extension_loaded'	;1	<<286
289  2682  SEND_VAL_EX/116           ?80       240:'xui'            ?1                  	;0
290  2682  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
291  2682  JMPZ/43                   ?0        $148                 ?293                	;0	>>293
292  2683  GOTO/253                  ?0        ?259                 ?241                	;0
293  2685  ECHO/40                   ?0        242:'No platform found.' ?0                  	;0	<<291
294  2686  GOTO/253                  ?0        ?257                 ?243                	;0
295  2688  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'define'        	;2
296  2688  SEND_VAL_EX/116           ?80       246:'CONS_TMP_PATH'  ?1                  	;0
297  2688  FETCH_CONSTANT/99         #149=     ?0                   247:'TMP_PATH'      	;16
298  2688  SEND_VAL_EX/116           ?96       #149                 ?2                  	;0
299  2688  DO_FCALL_BY_NAME/131      ?142      ?0                   ?0                  	;0
300  2689  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'define'        	;2
301  2689  SEND_VAL_EX/116           ?80       252:'CONTENT_PATH'   ?1                  	;0
302  2689  FETCH_CONSTANT/99         #151=     ?0                   253:'TMP_PATH'      	;16
303  2689  SEND_VAL_EX/116           ?96       #151                 ?2                  	;0
304  2689  DO_FCALL_BY_NAME/131      ?144      ?0                   ?0                  	;0
305  2691  GOTO/253                  ?0        ?337                 ?256                	;0
306  2693  GOTO/253                  ?0        ?141                 ?257                	;0
307  2695  EXIT/79                   ?0        ?0                   ?0                  	;0
308  2697  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'sort'          	;1
309  2697  FETCH_DIM_FUNC_ARG/93     $153=     16?1                 260:'bouquet'       	;1
310  2697  SEND_VAR_EX/66            ?80       $153                 ?1                  	;0
311  2697  DO_FCALL_BY_NAME/131      ?146      ?0                   ?0                  	;0
312  2699  GOTO/253                  ?0        ?432                 ?261                	;0
313  2701  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'define'        	;2
314  2701  SEND_VAL_EX/116           ?80       264:'SIGNALS_TMP_PATH' ?1                  	;0
315  2701  FETCH_CONSTANT/99         #155=     ?0                   265:'XUI_HOME'      	;16
316  2701  CONCAT/8                  #156=     #155                 268:'tmp/signals/'  	;0
317  2701  SEND_VAL_EX/116           ?96       #156                 ?2                  	;0
318  2701  DO_FCALL_BY_NAME/131      ?149      ?0                   ?0                  	;0
319  2702  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'define'        	;2
320  2702  SEND_VAL_EX/116           ?80       271:'GEOLITE2_BIN'   ?1                  	;0
321  2702  FETCH_CONSTANT/99         #158=     ?0                   272:'BIN_PATH'      	;16
322  2702  CONCAT/8                  #159=     #158                 275:'maxmind/GeoLite2.mmdb'	;0
323  2702  SEND_VAL_EX/116           ?96       #159                 ?2                  	;0
324  2702  DO_FCALL_BY_NAME/131      ?152      ?0                   ?0                  	;0
325  2703  INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'define'        	;2
326  2703  SEND_VAL_EX/116           ?80       278:'GEOISP_BIN'     ?1                  	;0
327  2703  FETCH_CONSTANT/99         #161=     ?0                   279:'BIN_PATH'      	;16
328  2703  CONCAT/8                  #162=     #161                 282:'maxmind/GeoIP2-ISP.mmdb'	;0
329  2703  SEND_VAL_EX/116           ?96       #162                 ?2                  	;0
330  2703  DO_FCALL_BY_NAME/131      ?155      ?0                   ?0                  	;0
331  2704  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'define'        	;2
332  2704  SEND_VAL_EX/116           ?80       285:'CONTENT_PATH'   ?1                  	;0
333  2704  FETCH_CONSTANT/99         #164=     ?0                   286:'XUI_HOME'      	;16
334  2704  CONCAT/8                  #165=     #164                 289:'content/'      	;0
335  2704  SEND_VAL_EX/116           ?96       #165                 ?2                  	;0
336  2704  DO_FCALL_BY_NAME/131      ?158      ?0                   ?0                  	;0
337  2706  GOTO/253                  ?0        ?338                 ?290                	;0
338  2708  FETCH_STATIC_PROP_W/174   $167=     291:'db'             292:'XUI'           	;0
339  2708  ASSIGN_REF/39             ?160      $167                 16?5                	;0
340  2709  INIT_STATIC_METHOD_CALL/113 ?0        294:'XUI'            296:'init'          	;0
341  2709  DO_FCALL/60               ?161      ?0                   ?0                  	;0
342  2710  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'define'        	;2
343  2710  SEND_VAL_EX/116           ?80       300:'SERVER_ID'      ?1                  	;0
344  2710  INIT_STATIC_METHOD_CALL/113 ?0        301:'XUI'            303:'C3520D240f17DCb1'	;0
345  2710  DO_FCALL/60               $170=     ?0                   ?0                  	;0
346  2710  SEND_VAR_NO_REF_EX/50     ?96       $170                 ?2                  	;0
347  2710  DO_FCALL_BY_NAME/131      ?163      ?0                   ?0                  	;0
348  2711  FETCH_CONSTANT/99         #172=     ?0                   305:'PLATFORM'      	;16
349  2711  IS_NOT_EQUAL/18           #173=     #172                 308:'xui'           	;0
350  2711  BOOL_NOT/13               #174=     #173                 ?0                  	;0
351  2711  JMPZ/43                   ?0        #174                 ?353                	;0	>>353
352  2712  GOTO/253                  ?0        ?400                 ?309                	;0
353  2714  FE_RESET_R/77             $175=     310:array (
  0 => 'player_allow_bouquet',
  1 => 'player_allow_playlist',
  2 => 'player_opacity',
  3 => 'player_blur',
  4 => 'tmdb_language',
) ?360                	;0	<<351
354  2714  FE_FETCH_R/78             ?0        $175                 16?3                	;360	>>360	<<359
355  2715  FETCH_DIM_R/81            $178=     16?4                 16?3                	;0
356  2715  FETCH_STATIC_PROP_W/174   $176=     311:'rSettings'      312:'XUI'           	;0
357  2715  ASSIGN_DIM/147            ?169      $176                 16?3                	;0
358  2715  OP_DATA/137               ?0        $178                 ?0                  	;0
359  2716  JMP/42                    ?0        ?354                 ?0                  	;0	>>354
360  2716  FE_FREE/127               ?0        $175                 ?0                  	;0	<<353
361  2718  GOTO/253                  ?0        ?95                  ?314                	;0
362  2720  FETCH_CONSTANT/99         #179=     ?0                   315:'PLATFORM'      	;16
363  2720  BOOL_NOT/13               #180=     #179                 ?0                  	;0
364  2720  JMPZ/43                   ?0        #180                 ?366                	;0	>>366
365  2721  GOTO/253                  ?0        ?305                 ?318                	;0
366  2723  INIT_METHOD_CALL/112      ?0        16?5                 319:'db_explicit_connect'	;5	<<364
367  2723  FETCH_DIM_FUNC_ARG/93     $181=     16?4                 321:'db_host'       	;1
368  2723  SEND_VAR_EX/66            ?80       $181                 ?1                  	;0
369  2723  FETCH_DIM_FUNC_ARG/93     $182=     16?4                 322:'db_port'       	;2
370  2723  SEND_VAR_EX/66            ?96       $182                 ?2                  	;0
371  2723  FETCH_DIM_FUNC_ARG/93     $183=     16?4                 323:'db_name'       	;3
372  2723  SEND_VAR_EX/66            ?112      $183                 ?3                  	;0
373  2723  FETCH_DIM_FUNC_ARG/93     $184=     16?4                 324:'db_user'       	;4
374  2723  SEND_VAR_EX/66            ?128      $184                 ?4                  	;0
375  2723  FETCH_DIM_FUNC_ARG/93     $185=     16?4                 325:'db_pass'       	;5
376  2723  SEND_VAR_EX/66            ?144      $185                 ?5                  	;0
377  2723  DO_FCALL/60               ?178      ?0                   ?0                  	;0
378  2724  INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'define'        	;2
379  2724  SEND_VAL_EX/116           ?80       328:'STREAMS_TMP_PATH' ?1                  	;0
380  2724  FETCH_CONSTANT/99         #187=     ?0                   329:'TMP_PATH'      	;16
381  2724  SEND_VAL_EX/116           ?96       #187                 ?2                  	;0
382  2724  DO_FCALL_BY_NAME/131      ?180      ?0                   ?0                  	;0
383  2725  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'define'        	;2
384  2725  SEND_VAL_EX/116           ?80       334:'SERIES_TMP_PATH' ?1                  	;0
385  2725  FETCH_CONSTANT/99         #189=     ?0                   335:'TMP_PATH'      	;16
386  2725  SEND_VAL_EX/116           ?96       #189                 ?2                  	;0
387  2725  DO_FCALL_BY_NAME/131      ?182      ?0                   ?0                  	;0
388  2726  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'define'        	;2
389  2726  SEND_VAL_EX/116           ?80       340:'LINES_TMP_PATH' ?1                  	;0
390  2726  FETCH_CONSTANT/99         #191=     ?0                   341:'TMP_PATH'      	;16
391  2726  SEND_VAL_EX/116           ?96       #191                 ?2                  	;0
392  2726  DO_FCALL_BY_NAME/131      ?184      ?0                   ?0                  	;0
393  2727  GOTO/253                  ?0        ?295                 ?344                	;0
394  2729  FETCH_STATIC_PROP_W/174   $193=     345:'rSettings'      346:'XUI'           	;0
395  2729  ASSIGN_DIM/147            ?186      $193                 348:'cloudflare'    	;0
396  2729  OP_DATA/137               ?0        349:true             ?0                  	;0
397  2730  FETCH_STATIC_PROP_W/174   $195=     350:'rSettings'      351:'XUI'           	;0
398  2730  ASSIGN_DIM/147            ?188      $195                 353:'custom_ip_header'	;0
399  2730  OP_DATA/137               ?0        354:NULL             ?0                  	;0
400  2732  ASSIGN/38                 ?189      16?6                 355:'1.1.8'         	;0
401  2733  INIT_STATIC_METHOD_CALL/113 ?0        356:'XUI'            358:'A844f50027d143d3'	;0
402  2733  DO_FCALL/60               $198=     ?0                   ?0                  	;0
403  2733  ASSIGN/38                 ?191      16?7                 $198                	;0
404  2734  GOTO/253                  ?0        ?168                 ?360                	;0
405  2736  INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'file_exists'   	;1
406  2736  SEND_VAL_EX/116           ?80       363:'license.php'    ?1                  	;0
407  2736  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
408  2736  BOOL_NOT/13               #201=     $200                 ?0                  	;0
409  2736  JMPZ/43                   ?0        #201                 ?411                	;0	>>411
410  2737  GOTO/253                  ?0        ?412                 ?364                	;0
411  2739  INCLUDE_OR_EVAL/73        ?194      365:'license.php'    ?0                  	;16	<<409
412  2741  INCLUDE_OR_EVAL/73        ?195      366:'libs/tmdb.php'  ?0                  	;16
413  2742  NOP/0                     ?0        ?0                   ?0                  	;0
414  2762  GOTO/253                  ?0        ?247                 ?367                	;0
415  2764  INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'mkdir'         	;1
416  2764  FETCH_CONSTANT/99         #204=     ?0                   370:'TMP_PATH'      	;16
417  2764  SEND_VAL_EX/116           ?80       #204                 ?1                  	;0
418  2764  DO_FCALL_BY_NAME/131      ?197      ?0                   ?0                  	;0
419  2767  NEW/68                    $206=     373:'Database'       ?64                 	;0
420  2767  DO_FCALL/60               ?199      ?8                   ?0                  	;0
421  2767  ASSIGN/38                 ?200      16?5                 $206                	;0
422  2768  INIT_FCALL_BY_NAME/59     ?0        ?0                   375:'extension_loaded'	;1
423  2768  SEND_VAL_EX/116           ?80       377:'xui'            ?1                  	;0
424  2768  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
425  2768  JMPZ_EX/46                #210=     $209                 ?429                	;0	>>429
426  2768  FETCH_CONSTANT/99         #211=     ?0                   378:'PLATFORM'      	;16
427  2768  IS_EQUAL/17               #212=     #211                 381:'xui'           	;0
428  2768  BOOL/52                   #210=     #212                 ?0                  	;0
429  2768  JMPZ/43                   ?0        #210                 ?431                	;0	>>431	<<425
430  2769  GOTO/253                  ?0        ?306                 ?382                	;0
431  2771  GOTO/253                  ?0        ?362                 ?383                	;0	<<429
432  2774  NOP/0                     ?0        384:1                ?0                  	;4294967295
*/

?>