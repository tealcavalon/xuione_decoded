<?php


class Thread
{
	public $process;
	public $pipes;
	public $buffer;
	public $output;
	public $error;
	public $timeout;
	public $start_time;

	public function __construct()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  62  ASSIGN_OBJ/136            ?0        ?4430313             0:'process'         	;0
		1  62  OP_DATA/137               ?0        1:0                  ?0                  	;0
		2  63  ASSIGN_OBJ/136            ?1        ?4430313             2:'buffer'          	;0
		3  63  OP_DATA/137               ?0        3:''                 ?0                  	;0
		4  64  CAST/21                   #3=       5:NULL               ?0                  	;7
		5  64  ASSIGN_OBJ/136            ?2        ?1664078496          4:'pipes'           	;0
		6  64  OP_DATA/137               ?0        #3                   ?0                  	;0
		7  65  ASSIGN_OBJ/136            ?4        ?1664078496          6:'output'          	;0
		8  65  OP_DATA/137               ?0        7:''                 ?0                  	;0
		9  66  ASSIGN_OBJ/136            ?5        ?1664079392          8:'error'           	;0
		10 66  OP_DATA/137               ?0        9:''                 ?0                  	;0
		11 67  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'time'           	;0
		12 67  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		13 67  ASSIGN_OBJ/136            ?6        ?1664079520          10:'start_time'     	;0
		14 67  OP_DATA/137               ?0        $7                   ?0                  	;0
		15 68  ASSIGN_OBJ/136            ?8        ?1664079520          13:'timeout'        	;0
		16 68  OP_DATA/137               ?0        14:0                 ?0                  	;0
		17 69  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	static public function create($cf988e3af7ebcffb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  70  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  72  NEW/68                    $3=       0:'Thread'           ?64                 	;0
		2  72  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		3  72  ASSIGN/38                 ?2        16?1                 $3                  	;0
		4  73  ASSIGN/38                 ?3        16?2                 2:array (
  0 => 
  array (
    0 => 'pipe',
    1 => 'r',
  ),
  1 => 
  array (
    0 => 'pipe',
    1 => 'w',
  ),
  2 => 
  array (
    0 => 'pipe',
    1 => 'w',
  ),
)	;0
		5  74  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'proc_open'       	;3
		6  74  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7  74  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		8  74  FETCH_OBJ_FUNC_ARG/94     $8=       16?1                 6:'pipes'           	;3
		9  74  SEND_VAR_EX/66            ?112      $8                   ?3                  	;0
		10 74  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		11 74  ASSIGN_OBJ/136            ?4        16?1                 3:'process'         	;0
		12 74  OP_DATA/137               ?0        $9                   ?0                  	;0
		13 75  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'stream_set_blocking'	;2
		14 75  FETCH_OBJ_FUNC_ARG/94     $10=      16?1                 9:'pipes'           	;1
		15 75  FETCH_DIM_FUNC_ARG/93     $11=      $10                  10:1                	;1
		16 75  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
		17 75  SEND_VAL_EX/116           ?96       11:0                 ?2                  	;0
		18 75  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
		19 76  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'stream_set_blocking'	;2
		20 76  FETCH_OBJ_FUNC_ARG/94     $13=      16?1                 14:'pipes'          	;1
		21 76  FETCH_DIM_FUNC_ARG/93     $14=      $13                  15:2                	;1
		22 76  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		23 76  SEND_VAL_EX/116           ?96       16:0                 ?2                  	;0
		24 76  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
		25 77  RETURN/62                 ?0        16?1                 ?0                  	;0
		26 78  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	public function isActive()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  82  INIT_METHOD_CALL/112      ?0        ?25165824            1:'listen'          	;0
		1  82  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		2  82  ASSIGN_CONCAT/30          ?0        ?4583821             0:'buffer'          	;136
		3  82  OP_DATA/137               ?0        $2                   ?0                  	;0
		4  83  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'stream_get_meta_data'	;1
		5  83  FETCH_OBJ_FUNC_ARG/94     $3=       ?2670193520          5:'pipes'           	;1
		6  83  FETCH_DIM_FUNC_ARG/93     $4=       $3                   6:1                 	;1
		7  83  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		8  83  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		9  83  ASSIGN/38                 ?5        16?0                 $5                  	;0
		10 84  FETCH_DIM_R/81            $7=       16?0                 7:'eof'             	;0
		11 84  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		12 84  RETURN/62                 ?0        #8                   ?0                  	;0
		13 85  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function close()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  89  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'proc_close'      	;1
		1  89  FETCH_OBJ_FUNC_ARG/94     $1=       ?4583821             2:'process'         	;1
		2  89  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		3  89  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4  89  ASSIGN/38                 ?2        16?0                 $2                  	;0
		5  90  ASSIGN_OBJ/136            ?3        ?2670194144          3:'process'         	;0
		6  90  OP_DATA/137               ?0        4:NULL               ?0                  	;0
		7  91  RETURN/62                 ?0        16?0                 ?0                  	;0
		8  92  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function tell($d54465d2b0bf2a63)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  94  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  96  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'fwrite'          	;2
		2  96  FETCH_OBJ_FUNC_ARG/94     $1=       ?28343088            2:'pipes'           	;1
		3  96  FETCH_DIM_FUNC_ARG/93     $2=       $1                   3:0                 	;1
		4  96  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		5  96  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		6  96  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
		7  97  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function listen()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   101  FETCH_OBJ_R/82            $2=       ?4430313             0:'buffer'          	;0
		1   101  ASSIGN/38                 ?1        16?0                 $2                  	;0
		2   102  ASSIGN_OBJ/136            ?2        ?2670194144          1:'buffer'          	;0
		3   102  OP_DATA/137               ?0        2:''                 ?0                  	;0
		4   104  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'fgets'           	;2
		5   104  FETCH_OBJ_FUNC_ARG/94     $5=       ?1682987690          5:'pipes'           	;1
		6   104  FETCH_DIM_FUNC_ARG/93     $6=       $5                   6:1                 	;1
		7   104  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		8   104  SEND_VAL_EX/116           ?96       7:1024               ?2                  	;0
		9   104  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		10  104  ASSIGN/38                 $8=       16?1                 $7                  	;0
		11  104  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		12  104  JMPZ/43                   ?0        #9                   ?14                 	;0	>>14
		13  105  GOTO/253                  ?0        ?18                  ?8                  	;0
		14  107  ASSIGN_CONCAT/30          ?8        16?0                 16?1                	;0	<<12
		15  108  ASSIGN_CONCAT/30          ?9        ?2670194144          9:'output'          	;136
		16  108  OP_DATA/137               ?0        16?1                 ?0                  	;0
		17  109  GOTO/253                  ?0        ?4                   ?10                 	;0
		18  111  RETURN/62                 ?0        16?0                 ?0                  	;0
		19  112  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function getStatus()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   116  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'proc_get_status' 	;1
		1   116  FETCH_OBJ_FUNC_ARG/94     $0=       ?5                   2:'process'         	;1
		2   116  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3   116  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4   116  RETURN/62                 ?0        $1                   ?0                  	;0
		5   117  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function isBusy()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   121  FETCH_OBJ_R/82            $0=       ?4443006             0:'timeout'         	;0
		1   121  IS_SMALLER/19             #1=       1:0                  $0                  	;0
		2   121  JMPZ_EX/46                #1=       #1                   ?10                 	;0	>>10
		3   121  FETCH_OBJ_R/82            $2=       ?3                   2:'start_time'      	;0
		4   121  FETCH_OBJ_R/82            $3=       ?3                   3:'timeout'         	;0
		5   121  ADD/1                     #4=       $2                   $3                  	;0
		6   121  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'time'            	;0
		7   121  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		8   121  IS_SMALLER/19             #6=       #4                   $5                  	;0
		9   121  BOOL/52                   #1=       #6                   ?0                  	;0
		10  121  RETURN/62                 ?0        #1                   ?0                  	;0	<<2
		11  122  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getError()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   126  ASSIGN/38                 ?0        16?0                 0:''                	;0
		1   128  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'fgets'           	;2
		2   128  FETCH_OBJ_FUNC_ARG/94     $3=       ?4431760             3:'pipes'           	;1
		3   128  FETCH_DIM_FUNC_ARG/93     $4=       $3                   4:2                 	;1
		4   128  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		5   128  SEND_VAL_EX/116           ?96       5:1024               ?2                  	;0
		6   128  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   128  ASSIGN/38                 $6=       16?1                 $5                  	;0
		8   128  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		9   128  JMPZ/43                   ?0        #7                   ?11                 	;0	>>11
		10  129  GOTO/253                  ?0        ?13                  ?6                  	;0
		11  131  ASSIGN_CONCAT/30          ?6        16?0                 16?1                	;0	<<9
		12  132  GOTO/253                  ?0        ?1                   ?7                  	;0
		13  134  RETURN/62                 ?0        16?0                 ?0                  	;0
		14  135  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}
}

class Multithread
{
	public $output = [];
	public $error = [];
	public $thread;
	public $commands = [];
	public $hasPool = false;
	public $toExecuted = [];

	public function __construct($fa39b45a74ffac20, $A14d7cc13955b176)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   146  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   146  RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2   148  IS_SMALLER/19             #5=       2:0                  16?1                	;0
		3   148  ASSIGN_OBJ/136            ?0        ?1665922992          1:'hasPool'         	;0
		4   148  OP_DATA/137               ?0        #5                   ?0                  	;0
		5   149  FETCH_OBJ_R/82            $6=       ?4435467             3:'hasPool'         	;0
		6   149  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		7   149  JMPZ/43                   ?0        #7                   ?9                  	;0	>>9
		8   150  GOTO/253                  ?0        ?15                  ?4                  	;0
		9   152  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'array_splice'    	;2	<<7
		10  152  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		11  152  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		12  152  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		13  152  ASSIGN_OBJ/136            ?4        ?8                   5:'toExecuted'      	;0
		14  152  OP_DATA/137               ?0        $9                   ?0                  	;0
		15  154  ASSIGN_OBJ/136            ?6        ?8                   8:'commands'        	;0
		16  154  OP_DATA/137               ?0        16?0                 ?0                  	;0
		17  155  FETCH_OBJ_R/82            $11=      ?4583821             9:'commands'        	;0
		18  155  FE_RESET_R/77             $12=      $11                  ?28                 	;0
		19  155  FE_FETCH_R/78             #13=      $12                  16?2                	;28	>>28	<<27
		20  155  ASSIGN/38                 ?10       16?3                 #13                 	;0
		21  156  INIT_STATIC_METHOD_CALL/113 ?0        11:'Thread'          13:'create'         	;1
		22  156  SEND_VAR/117              ?80       16?2                 ?1                  	;0
		23  156  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		24  156  FETCH_OBJ_W/85            $15=      ?2670194048          10:'thread'         	;0
		25  156  ASSIGN_DIM/147            ?12       $15                  16?3                	;0
		26  156  OP_DATA/137               ?0        $17                  ?0                  	;0
		27  157  JMP/42                    ?0        ?19                  ?0                  	;0	>>19
		28  157  FE_FREE/127               ?0        $12                  ?0                  	;0	<<18
		29  160  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	public function run()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   165  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'count'           	;1
		1   165  FETCH_OBJ_FUNC_ARG/94     $2=       ?1679832464          2:'commands'        	;1
		2   165  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		3   165  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		4   165  IS_SMALLER/19             #4=       3:0                  $3                  	;0
		5   165  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		6   165  JMPZ/43                   ?0        #5                   ?8                  	;0	>>8
		7   166  GOTO/253                  ?0        ?83                  ?4                  	;0
		8   168  FETCH_OBJ_R/82            $6=       ?4583821             5:'commands'        	;0	<<6
		9   168  FE_RESET_R/77             $7=       $6                   ?81                 	;0
		10  168  FE_FETCH_R/78             #8=       $7                   16?0                	;81	>>81	<<80
		11  168  ASSIGN/38                 ?7        16?1                 #8                  	;0
		12  169  NOP/0                     ?0        ?0                   ?0                  	;1
		13  169  GOTO/253                  ?0        ?37                  ?6                  	;0
		14  172  NOP/0                     ?0        ?0                   ?0                  	;1
		15  172  GOTO/253                  ?0        ?80                  ?7                  	;0
		16  174  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 8:'launchNextInQueue'	;0
		17  174  DO_FCALL/60               ?8        ?0                   ?0                  	;0
		18  175  NOP/0                     ?0        ?0                   ?0                  	;1
		19  175  GOTO/253                  ?0        ?78                  ?10                 	;0
		20  177  FETCH_OBJ_R/82            $13=      ?2670193040          12:'thread'         	;0
		21  177  FETCH_DIM_R/81            $14=      $13                  16?1                	;0
		22  177  INIT_METHOD_CALL/112      ?0        $14                  13:'listen'         	;0
		23  177  DO_FCALL/60               $15=      ?0                   ?0                  	;0
		24  177  FETCH_OBJ_RW/88           $11=      ?5126                11:'output'         	;0
		25  177  ASSIGN_CONCAT/30          ?10       $11                  16?1                	;147
		26  177  OP_DATA/137               ?0        $15                  ?0                  	;0
		27  178  FETCH_OBJ_R/82            $16=      ?1664298048          15:'thread'         	;0
		28  178  FETCH_DIM_R/81            $17=      $16                  16?1                	;0
		29  178  INIT_METHOD_CALL/112      ?0        $17                  16:'isBusy'         	;0
		30  178  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		31  178  BOOL_NOT/13               #19=      $18                  ?0                  	;0
		32  178  JMPZ/43                   ?0        #19                  ?35                 	;0	>>35
		33  179  NOP/0                     ?0        ?0                   ?0                  	;1
		34  179  GOTO/253                  ?0        ?78                  ?18                 	;0
		35  181  NOP/0                     ?0        ?0                   ?0                  	;1	<<32
		36  181  GOTO/253                  ?0        ?70                  ?19                 	;0
		37  183  BEGIN_SILENCE/57          #20=      ?0                   ?0                  	;0
		38  183  FETCH_OBJ_R/82            $23=      ?4583821             21:'thread'         	;0
		39  183  FETCH_DIM_R/81            $24=      $23                  16?1                	;0
		40  183  INIT_METHOD_CALL/112      ?0        $24                  22:'listen'         	;0
		41  183  DO_FCALL/60               $25=      ?0                   ?0                  	;0
		42  183  FETCH_OBJ_RW/88           $21=      ?0                   20:'output'         	;0
		43  183  ASSIGN_CONCAT/30          ?20       $21                  16?1                	;147
		44  183  OP_DATA/137               ?0        $25                  ?0                  	;0
		45  183  END_SILENCE/58            ?0        #20                  ?0                  	;0
		46  184  BEGIN_SILENCE/57          #26=      ?0                   ?0                  	;0
		47  184  FETCH_OBJ_R/82            $29=      ?4583821             25:'thread'         	;0
		48  184  FETCH_DIM_R/81            $30=      $29                  16?1                	;0
		49  184  INIT_METHOD_CALL/112      ?0        $30                  26:'getError'       	;0
		50  184  DO_FCALL/60               $31=      ?0                   ?0                  	;0
		51  184  FETCH_OBJ_RW/88           $27=      ?42                  24:'error'          	;0
		52  184  ASSIGN_CONCAT/30          ?26       $27                  16?1                	;147
		53  184  OP_DATA/137               ?0        $31                  ?0                  	;0
		54  184  END_SILENCE/58            ?0        #26                  ?0                  	;0
		55  185  FETCH_OBJ_R/82            $32=      ?4534362             28:'thread'         	;0
		56  185  FETCH_DIM_R/81            $33=      $32                  16?1                	;0
		57  185  INIT_METHOD_CALL/112      ?0        $33                  29:'isActive'       	;0
		58  185  DO_FCALL/60               $34=      ?0                   ?0                  	;0
		59  185  JMPZ/43                   ?0        $34                  ?62                 	;0	>>62
		60  186  NOP/0                     ?0        ?0                   ?0                  	;1
		61  186  GOTO/253                  ?0        ?20                  ?31                 	;0
		62  188  FETCH_OBJ_R/82            $35=      ?185                 32:'thread'         	;0	<<59
		63  188  FETCH_DIM_R/81            $36=      $35                  16?1                	;0
		64  188  INIT_METHOD_CALL/112      ?0        $36                  33:'close'          	;0
		65  188  DO_FCALL/60               ?35       ?0                   ?0                  	;0
		66  189  FETCH_OBJ_UNSET/97        $38=      ?4443006             35:'commands'       	;0
		67  189  UNSET_DIM/75              ?0        $38                  16?1                	;0
		68  190  NOP/0                     ?0        ?0                   ?0                  	;1
		69  190  GOTO/253                  ?0        ?16                  ?36                 	;0
		70  192  FETCH_OBJ_R/82            $39=      ?185                 37:'thread'         	;0
		71  192  FETCH_DIM_R/81            $40=      $39                  16?1                	;0
		72  192  INIT_METHOD_CALL/112      ?0        $40                  38:'close'          	;0
		73  192  DO_FCALL/60               ?39       ?0                   ?0                  	;0
		74  193  FETCH_OBJ_UNSET/97        $42=      ?4443006             40:'commands'       	;0
		75  193  UNSET_DIM/75              ?0        $42                  16?1                	;0
		76  194  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 41:'launchNextInQueue'	;0
		77  194  DO_FCALL/60               ?41       ?0                   ?0                  	;0
		78  197  NOP/0                     ?0        ?0                   ?0                  	;1
		79  197  GOTO/253                  ?0        ?14                  ?43                 	;0
		80  198  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		81  198  FE_FREE/127               ?0        $7                   ?0                  	;0	<<9
		82  201  GOTO/253                  ?0        ?0                   ?44                 	;0
		83  203  FETCH_OBJ_R/82            $44=      ?26                  45:'output'         	;0
		84  203  RETURN/62                 ?0        $44                  ?0                  	;0
		85  204  NOP/0                     ?0        46:NULL              ?0                  	;4294967295
		*/
	}

	public function launchNextInQueue()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   208  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'count'           	;1
		1   208  FETCH_OBJ_FUNC_ARG/94     $1=       ?4294967295          2:'toExecuted'      	;1
		2   208  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		3   208  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   208  IS_EQUAL/17               #3=       $2                   3:0                 	;0
		5   208  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		6   208  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   209  GOTO/253                  ?0        ?9                   ?4                  	;0
		8   211  RETURN/62                 ?0        5:true               ?0                  	;0	<<6
		9   213  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'reset'           	;1
		10  213  FETCH_OBJ_FUNC_ARG/94     $5=       ?4294967295          8:'toExecuted'      	;1
		11  213  SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
		12  213  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		13  214  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'key'             	;1
		14  214  FETCH_OBJ_FUNC_ARG/94     $7=       ?2670193776          11:'toExecuted'     	;1
		15  214  SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
		16  214  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		17  214  ASSIGN/38                 ?8        16?0                 $8                  	;0
		18  215  FETCH_OBJ_R/82            $12=      ?1663070928          13:'toExecuted'     	;0
		19  215  FETCH_DIM_R/81            $13=      $12                  16?0                	;0
		20  215  FETCH_OBJ_W/85            $10=      ?1663071000          12:'commands'       	;0
		21  215  ASSIGN_DIM/147            ?10       $10                  16?0                	;0
		22  215  OP_DATA/137               ?0        $13                  ?0                  	;0
		23  216  INIT_STATIC_METHOD_CALL/113 ?0        15:'Thread'          17:'create'         	;1
		24  216  FETCH_OBJ_R/82            $16=      ?1                   19:'toExecuted'     	;0
		25  216  FETCH_DIM_R/81            $17=      $16                  16?0                	;0
		26  216  SEND_VAR/117              ?80       $17                  ?1                  	;0
		27  216  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		28  216  FETCH_OBJ_W/85            $14=      ?20                  14:'thread'         	;0
		29  216  ASSIGN_DIM/147            ?14       $14                  16?0                	;0
		30  216  OP_DATA/137               ?0        $18                  ?0                  	;0
		31  217  FETCH_OBJ_UNSET/97        $19=      ?4397406             20:'toExecuted'     	;0
		32  217  UNSET_DIM/75              ?0        $19                  16?0                	;0
		33  218  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
		*/
	}
}

function d9aA526FDb80307A($A7d54b094ae83c95)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  23  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
	1  25  GOTO/253                  ?0        ?18                  ?1                  	;0
	2  28  INIT_METHOD_CALL/112      ?0        16?1                 2:'query'           	;2
	3  28  SEND_VAL_EX/116           ?80       4:'SELECT * FROM `watch_categories` WHERE `type` = ? ORDER BY `genre_id` ASC;' ?1                  	;0
	4  28  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	5  28  DO_FCALL/60               ?0        ?0                   ?0                  	;0
	6  30  INIT_METHOD_CALL/112      ?0        16?1                 5:'get_rows'        	;0
	7  30  DO_FCALL/60               $5=       ?0                   ?0                  	;0
	8  30  FE_RESET_R/77             $6=       $5                   ?14                 	;0
	9  30  FE_FETCH_R/78             ?0        $6                   16?2                	;14	>>14	<<13
	10 31  FETCH_DIM_R/81            $7=       16?2                 7:'genre_id'        	;0
	11 31  ASSIGN_DIM/147            ?4        16?3                 $7                  	;0
	12 31  OP_DATA/137               ?0        16?2                 ?0                  	;0
	13 32  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
	14 32  FE_FREE/127               ?0        $6                   ?0                  	;0	<<8
	15 35  GOTO/253                  ?0        ?16                  ?8                  	;0
	16 37  RETURN/62                 ?0        16?3                 ?0                  	;0
	17 38  GOTO/253                  ?0        ?27                  ?9                  	;0
	18 40  BIND_GLOBAL/168           ?0        16?1                 10:'b62d6460eb33ea07'	;0
	19 41  ASSIGN/38                 ?5        16?3                 11:array (
)        	;0
	20 42  JMPZ/43                   ?0        16?0                 ?22                 	;0	>>22
	21 43  GOTO/253                  ?0        ?2                   ?12                 	;0
	22 45  INIT_METHOD_CALL/112      ?0        16?1                 13:'query'          	;1	<<20
	23 45  SEND_VAL_EX/116           ?80       15:'SELECT * FROM `watch_categories` ORDER BY `genre_id` ASC;' ?1                  	;0
	24 45  DO_FCALL/60               ?6        ?0                   ?0                  	;0
	25 46  GOTO/253                  ?0        ?6                   ?16                 	;0
	26 47  GOTO/253                  ?0        ?2                   ?17                 	;0
	27 49  NOP/0                     ?0        18:NULL              ?0                  	;4294967295
	*/
}

function ab8369074df2aaa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   223  JMP/42                    ?0        ?515                 ?0                  	;0	>>515
	1   226  UNSET_CV/196              ?0        16?0                 ?0                  	;0
	2   227  ECHO/40                   ?0        1:'Finished generating cache!
' ?0                  	;0
	3   229  FE_RESET_R/77             $28=      16?1                 ?479                	;0
	4   229  FE_FETCH_R/78             ?0        $28                  16?2                	;479	>>479	<<478
	5   230  NOP/0                     ?0        ?0                   ?0                  	;1
	6   230  GOTO/253                  ?0        ?187                 ?2                  	;0
	7   232  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
	8   232  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	9   232  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	10  232  IS_SMALLER/19             #30=      5:0                  $29                 	;0
	11  232  JMPZ/43                   ?0        #30                  ?14                 	;0	>>14
	12  233  NOP/0                     ?0        ?0                   ?0                  	;1
	13  233  GOTO/253                  ?0        ?23                  ?6                  	;0
	14  235  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'escapeshellcmd'  	;1	<<11
	15  235  FETCH_DIM_FUNC_ARG/93     $31=      16?2                 9:'directory'       	;1
	16  235  SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
	17  235  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	18  235  CONCAT/8                  #33=      10:'/usr/bin/find "' $32                 	;0
	19  235  CONCAT/8                  #34=      #33                  11:'"'              	;0
	20  235  ASSIGN/38                 ?7        16?4                 #34                 	;0
	21  236  NOP/0                     ?0        ?0                   ?0                  	;1
	22  236  GOTO/253                  ?0        ?63                  ?12                 	;0
	23  238  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'escapeshellcmd' 	;1
	24  238  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'implode'        	;2
	25  238  SEND_VAL_EX/116           ?80       17:'|'               ?1                  	;0
	26  238  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	27  238  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	28  238  SEND_VAR_NO_REF_EX/50     ?80       $36                  ?1                  	;0
	29  238  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
	30  238  ASSIGN/38                 ?10       16?3                 $37                 	;0
	31  239  NOP/0                     ?0        ?0                   ?0                  	;1
	32  239  GOTO/253                  ?0        ?54                  ?18                 	;0
	33  241  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'count'          	;1
	34  241  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	35  241  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	36  241  IS_EQUAL/17               #40=      $39                  21:0                	;0
	37  241  BOOL_NOT/13               #41=      #40                  ?0                  	;0
	38  241  JMPZ/43                   ?0        #41                  ?41                 	;0	>>41
	39  242  NOP/0                     ?0        ?0                   ?0                  	;1
	40  242  GOTO/253                  ?0        ?42                  ?22                 	;0
	41  244  ASSIGN/38                 ?14       16?3                 23:array (
  0 => 'mp4',
  1 => 'mkv',
  2 => 'avi',
  3 => 'mpg',
  4 => 'flv',
  5 => '3gp',
  6 => 'm4v',
  7 => 'flv',
  8 => 'wmv',
  9 => 'mov',
  10 => 'ts',
)	;0	<<38
	42  246  ASSIGN/38                 $43=      16?6                 24:array (
)        	;0
	43  246  ASSIGN/38                 ?16       16?5                 $43                 	;0
	44  247  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'strlen'         	;1
	45  247  FETCH_DIM_FUNC_ARG/93     $45=      16?2                 27:'rclone_dir'     	;1
	46  247  SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
	47  247  DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
	48  247  IS_SMALLER/19             #47=      28:0                 $46                 	;0
	49  247  JMPZ/43                   ?0        #47                  ?52                 	;0	>>52
	50  248  NOP/0                     ?0        ?0                   ?0                  	;1
	51  248  GOTO/253                  ?0        ?461                 ?29                 	;0
	52  250  NOP/0                     ?0        ?0                   ?0                  	;1	<<49
	53  250  GOTO/253                  ?0        ?7                   ?30                 	;0
	54  252  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'escapeshellcmd' 	;1
	55  252  FETCH_DIM_FUNC_ARG/93     $48=      16?2                 33:'directory'      	;1
	56  252  SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
	57  252  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
	58  252  CONCAT/8                  #50=      34:'/usr/bin/find "' $49                 	;0
	59  252  CONCAT/8                  #51=      #50                  35:'" -regex ".*\\.\\('	;0
	60  252  CONCAT/8                  #52=      #51                  16?3                	;0
	61  252  CONCAT/8                  #53=      #52                  36:'\\)"'           	;0
	62  252  ASSIGN/38                 ?26       16?4                 #53                 	;0
	63  254  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'exec'           	;3
	64  254  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	65  254  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	66  254  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	67  254  DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
	68  255  ISSET_ISEMPTY_DIM_OBJ/115 #56=      16?2                 39:'auto_subtitles' 	;33554432
	69  255  JMPZ/43                   ?0        #56                  ?72                 	;0	>>72
	70  256  NOP/0                     ?0        ?0                   ?0                  	;1
	71  256  GOTO/253                  ?0        ?114                 ?40                 	;0
	72  258  ASSIGN/38                 ?29       16?5                 41:array (
)        	;0	<<69
	73  259  NOP/0                     ?0        ?0                   ?0                  	;1
	74  259  GOTO/253                  ?0        ?112                 ?42                 	;0
	75  262  INIT_METHOD_CALL/112      ?0        16?8                 43:'db_connect'     	;0
	76  262  DO_FCALL/60               ?30       ?0                   ?0                  	;0
	77  263  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'checkBouquets'  	;0
	78  263  DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
	79  265  NOP/0                     ?0        ?0                   ?0                  	;1
	80  265  GOTO/253                  ?0        ?478                 ?47                 	;0
	81  267  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'implode'        	;2
	82  267  SEND_VAL_EX/116           ?80       50:' '               ?1                  	;0
	83  267  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	84  267  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
	85  267  ASSIGN/38                 ?33       16?9                 $60                 	;0
	86  268  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'substr'         	;3
	87  268  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	88  268  SEND_VAL_EX/116           ?96       53:0                 ?2                  	;0
	89  268  SEND_VAL_EX/116           ?112      54:1                 ?3                  	;0
	90  268  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
	91  268  BOOL_NOT/13               #63=      $62                  ?0                  	;0
	92  268  IS_EQUAL/17               #64=      #63                  55:'['              	;0
	93  268  BOOL_NOT/13               #65=      #64                  ?0                  	;0
	94  268  JMPZ/43                   ?0        #65                  ?97                 	;0	>>97
	95  269  NOP/0                     ?0        ?0                   ?0                  	;1
	96  269  GOTO/253                  ?0        ?105                 ?56                 	;0
	97  271  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'explode'        	;3	<<94
	98  271  SEND_VAL_EX/116           ?80       59:'['               ?1                  	;0
	99  271  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	100 271  SEND_VAL_EX/116           ?112      60:1                 ?3                  	;0
	101 271  DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
	102 271  FETCH_DIM_R/81            $67=      $66                  61:1                	;0
	103 271  CONCAT/8                  #68=      62:'['               $67                 	;0
	104 271  ASSIGN/38                 ?41       16?9                 #68                 	;0
	105 273  INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'json_decode'    	;2
	106 273  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	107 273  SEND_VAL_EX/116           ?96       65:true              ?2                  	;0
	108 273  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
	109 273  ASSIGN/38                 ?43       16?10                $70                 	;0
	110 274  NOP/0                     ?0        ?0                   ?0                  	;1
	111 274  GOTO/253                  ?0        ?221                 ?66                 	;0
	112 276  NOP/0                     ?0        ?0                   ?0                  	;1
	113 276  GOTO/253                  ?0        ?459                 ?67                 	;0
	114 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'escapeshellcmd' 	;1
	115 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'implode'        	;2
	116 278  SEND_VAL_EX/116           ?80       72:'|'               ?1                  	;0
	117 278  SEND_VAL_EX/116           ?96       73:array (
  0 => 'srt',
  1 => 'sub',
  2 => 'sbv',
) ?2                  	;0
	118 278  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	119 278  SEND_VAR_NO_REF_EX/50     ?80       $72                  ?1                  	;0
	120 278  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
	121 278  ASSIGN/38                 ?46       16?3                 $73                 	;0
	122 279  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'escapeshellcmd' 	;1
	123 279  FETCH_DIM_FUNC_ARG/93     $75=      16?2                 76:'directory'      	;1
	124 279  SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
	125 279  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
	126 279  CONCAT/8                  #77=      77:'/usr/bin/find "' $76                 	;0
	127 279  CONCAT/8                  #78=      #77                  78:'" -regex ".*\\.\\('	;0
	128 279  CONCAT/8                  #79=      #78                  16?3                	;0
	129 279  CONCAT/8                  #80=      #79                  79:'\\)"'           	;0
	130 279  ASSIGN/38                 ?53       16?4                 #80                 	;0
	131 280  INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'exec'           	;3
	132 280  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	133 280  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	134 280  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	135 280  DO_FCALL_BY_NAME/131      ?54       ?0                   ?0                  	;0
	136 281  NOP/0                     ?0        ?0                   ?0                  	;1
	137 281  GOTO/253                  ?0        ?459                 ?82                 	;0
	138 283  FE_RESET_R/77             $83=      16?11                ?160                	;0
	139 283  FE_FETCH_R/78             ?0        $83                  16?9                	;160	>>160	<<159
	140 284  FETCH_CONSTANT/99         #84=      ?0                   83:'PHP_BIN'        	;16
	141 284  CONCAT/8                  #85=      86:'/usr/bin/timeout 60 ' #84                 	;0
	142 284  CONCAT/8                  #86=      #85                  87:' '              	;0
	143 284  FETCH_CONSTANT/99         #87=      ?0                   88:'INCLUDES_PATH'  	;16
	144 284  CONCAT/8                  #88=      #86                  #87                 	;0
	145 284  CONCAT/8                  #89=      #88                  91:'cli/watch_item.php "'	;0
	146 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'base64_encode'  	;1
	147 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'json_encode'    	;2
	148 284  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	149 284  FETCH_CONSTANT/99         #90=      ?0                   96:'JSON_UNESCAPED_UNICODE'	;16
	150 284  SEND_VAL_EX/116           ?96       #90                  ?2                  	;0
	151 284  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
	152 284  SEND_VAR_NO_REF_EX/50     ?80       $91                  ?1                  	;0
	153 284  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	154 284  CONCAT/8                  #93=      #89                  $92                 	;0
	155 284  CONCAT/8                  #94=      #93                  99:'"'              	;0
	156 284  ASSIGN/38                 ?67       16?4                 #94                 	;0
	157 285  ASSIGN_DIM/147            ?68       16?12                ?2670194032         	;0
	158 285  OP_DATA/137               ?0        16?4                 ?0                  	;0
	159 286  JMP/42                    ?0        ?139                 ?0                  	;0	>>139
	160 286  FE_FREE/127               ?0        $83                  ?0                  	;0	<<138
	161 289  INIT_METHOD_CALL/112      ?0        16?8                 100:'close_mysql'   	;0
	162 289  DO_FCALL/60               ?69       ?0                   ?0                  	;0
	163 290  IS_SMALLER_OR_EQUAL/20    #98=      16?13                102:1               	;0
	164 290  JMPZ/43                   ?0        #98                  ?167                	;0	>>167
	165 291  NOP/0                     ?0        ?0                   ?0                  	;1
	166 291  GOTO/253                  ?0        ?178                 ?103                	;0
	167 293  NEW/68                    $99=      104:'Multithread'    ?128                	;2	<<164
	168 293  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	169 293  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
	170 293  DO_FCALL/60               ?72       ?8                   ?0                  	;0
	171 293  ASSIGN/38                 ?73       16?14                $99                 	;0
	172 294  NOP/0                     ?0        ?0                   ?0                  	;1
	173 294  GOTO/253                  ?0        ?174                 ?106                	;0
	174 296  INIT_METHOD_CALL/112      ?0        16?14                107:'run'           	;0
	175 296  DO_FCALL/60               ?74       ?0                   ?0                  	;0
	176 297  NOP/0                     ?0        ?0                   ?0                  	;1
	177 297  GOTO/253                  ?0        ?75                  ?109                	;0
	178 299  FE_RESET_R/77             $103=     16?12                ?184                	;0
	179 299  FE_FETCH_R/78             ?0        $103                 16?4                	;184	>>184	<<183
	180 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'shell_exec'    	;1
	181 300  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	182 300  DO_FCALL_BY_NAME/131      ?76       ?0                   ?0                  	;0
	183 301  JMP/42                    ?0        ?179                 ?0                  	;0	>>179
	184 301  FE_FREE/127               ?0        $103                 ?0                  	;0	<<178
	185 304  NOP/0                     ?0        ?0                   ?0                  	;1
	186 304  GOTO/253                  ?0        ?75                  ?112                	;0
	187 306  INIT_METHOD_CALL/112      ?0        16?8                 113:'query'         	;2
	188 306  SEND_VAL_EX/116           ?80       115:'UPDATE `watch_folders` SET `last_run` = UNIX_TIMESTAMP() WHERE `id` = ?;' ?1                  	;0
	189 306  FETCH_DIM_FUNC_ARG/93     $105=     16?2                 116:'id'            	;2
	190 306  SEND_VAR_EX/66            ?96       $105                 ?2                  	;0
	191 306  DO_FCALL/60               ?78       ?0                   ?0                  	;0
	192 307  INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'json_decode'   	;2
	193 307  FETCH_DIM_FUNC_ARG/93     $107=     16?2                 119:'allowed_extensions'	;1
	194 307  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
	195 307  SEND_VAL_EX/116           ?96       120:true             ?2                  	;0
	196 307  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
	197 307  ASSIGN/38                 ?81       16?3                 $108                	;0
	198 308  JMPZ/43                   ?0        16?3                 ?201                	;0	>>201
	199 309  NOP/0                     ?0        ?0                   ?0                  	;1
	200 309  GOTO/253                  ?0        ?202                 ?121                	;0
	201 311  ASSIGN/38                 ?82       16?3                 122:array (
)       	;0	<<198
	202 313  NOP/0                     ?0        ?0                   ?0                  	;1
	203 313  GOTO/253                  ?0        ?33                  ?123                	;0
	204 316  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'count'         	;1
	205 316  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	206 316  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
	207 316  IS_SMALLER/19             #112=     126:0                $111                	;0
	208 316  BOOL_NOT/13               #113=     #112                 ?0                  	;0
	209 316  JMPZ/43                   ?0        #113                 ?212                	;0	>>212
	210 317  NOP/0                     ?0        ?0                   ?0                  	;1
	211 317  GOTO/253                  ?0        ?218                 ?127                	;0
	212 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'count'         	;1	<<209
	213 319  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	214 319  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
	215 319  CONCAT/8                  #115=     130:'Scan complete! Adding ' $114                	;0
	216 319  CONCAT/8                  #116=     #115                 131:' files...
'    	;0
	217 319  ECHO/40                   ?0        #116                 ?0                  	;0
	218 321  ASSIGN/38                 ?89       16?12                132:array (
)       	;0
	219 322  NOP/0                     ?0        ?0                   ?0                  	;1
	220 322  GOTO/253                  ?0        ?138                 ?133                	;0
	221 324  FE_RESET_R/77             $118=     16?10                ?288                	;0
	222 324  FE_FETCH_R/78             ?0        $118                 16?15               	;288	>>288	<<287
	223 325  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'rtrim'         	;2
	224 325  FETCH_DIM_FUNC_ARG/93     $120=     16?2                 137:'directory'     	;1
	225 325  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
	226 325  SEND_VAL_EX/116           ?96       138:'/'              ?2                  	;0
	227 325  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	228 325  CONCAT/8                  #122=     $121                 139:'/'             	;0
	229 325  FETCH_DIM_R/81            $123=     16?15                140:'Path'          	;0
	230 325  CONCAT/8                  #124=     #122                 $123                	;0
	231 325  ASSIGN_DIM/147            ?91       16?15                134:'Path'          	;0
	232 325  OP_DATA/137               ?0        #124                 ?0                  	;0
	233 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'count'         	;1
	234 326  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	235 326  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
	236 326  IS_EQUAL/17               #126=     $125                 143:0               	;0
	237 326  JMPNZ_EX/47               #126=     #126                 ?252                	;0	>>252
	238 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'in_array'      	;2
	239 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'strtolower'    	;1
	240 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'pathinfo'      	;1
	241 326  FETCH_DIM_FUNC_ARG/93     $127=     16?15                150:'Name'          	;1
	242 326  SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
	243 326  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
	244 326  SEPARATE/156              $128=     $128                 ?0                  	;0
	245 326  FETCH_DIM_FUNC_ARG/93     $129=     $128                 151:'extension'     	;1
	246 326  SEND_VAR_EX/66            ?80       $129                 ?1                  	;0
	247 326  DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
	248 326  SEND_VAR_NO_REF_EX/50     ?80       $130                 ?1                  	;0
	249 326  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	250 326  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
	251 326  BOOL/52                   #126=     $131                 ?0                  	;0
	252 326  BOOL_NOT/13               #132=     #126                 ?0                  	;0	<<237
	253 326  JMPZ/43                   ?0        #132                 ?257                	;0	>>257
	254 327  NOP/0                     ?0        ?0                   ?0                  	;1
	255 327  NOP/0                     ?0        ?0                   ?0                  	;1
	256 327  GOTO/253                  ?0        ?260                 ?152                	;0
	257 329  FETCH_DIM_R/81            $134=     16?15                153:'Path'          	;0	<<253
	258 329  ASSIGN_DIM/147            ?105      16?6                 ?4397406            	;0
	259 329  OP_DATA/137               ?0        $134                 ?0                  	;0
	260 331  ISSET_ISEMPTY_DIM_OBJ/115 #135=     16?2                 154:'auto_subtitles'	;33554432
	261 331  BOOL_NOT/13               #136=     #135                 ?0                  	;0
	262 331  JMPZ/43                   ?0        #136                 ?266                	;0	>>266
	263 332  NOP/0                     ?0        ?0                   ?0                  	;1
	264 332  NOP/0                     ?0        ?0                   ?0                  	;1
	265 332  GOTO/253                  ?0        ?287                 ?155                	;0
	266 334  INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'in_array'      	;2	<<262
	267 334  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'strtolower'    	;1
	268 334  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'pathinfo'      	;1
	269 334  FETCH_DIM_FUNC_ARG/93     $137=     16?15                162:'Path'          	;1
	270 334  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
	271 334  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
	272 334  SEPARATE/156              $138=     $138                 ?0                  	;0
	273 334  FETCH_DIM_FUNC_ARG/93     $139=     $138                 163:'extension'     	;1
	274 334  SEND_VAR_EX/66            ?80       $139                 ?1                  	;0
	275 334  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
	276 334  SEND_VAR_NO_REF_EX/50     ?80       $140                 ?1                  	;0
	277 334  SEND_VAL_EX/116           ?96       164:array (
  0 => 'srt',
  1 => 'sub',
  2 => 'sbv',
) ?2                  	;0
	278 334  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
	279 334  BOOL_NOT/13               #142=     $141                 ?0                  	;0
	280 334  JMPZ/43                   ?0        #142                 ?284                	;0	>>284
	281 335  NOP/0                     ?0        ?0                   ?0                  	;1
	282 335  NOP/0                     ?0        ?0                   ?0                  	;1
	283 335  GOTO/253                  ?0        ?287                 ?165                	;0
	284 337  FETCH_DIM_R/81            $144=     16?15                166:'Path'          	;0	<<280
	285 337  ASSIGN_DIM/147            ?115      16?5                 ?4397406            	;0
	286 337  OP_DATA/137               ?0        $144                 ?0                  	;0
	287 340  JMP/42                    ?0        ?222                 ?0                  	;0	>>222
	288 340  FE_FREE/127               ?0        $118                 ?0                  	;0	<<221
	289 344  ASSIGN/38                 ?117      16?11                167:array (
)       	;0
	290 345  FE_RESET_R/77             $146=     16?6                 ?456                	;0
	291 345  FE_FETCH_R/78             ?0        $146                 16?15               	;456	>>456	<<455
	292 346  NOP/0                     ?0        ?0                   ?0                  	;1
	293 346  NOP/0                     ?0        ?0                   ?0                  	;1
	294 346  GOTO/253                  ?0        ?412                 ?168                	;0
	295 348  ASSIGN/38                 ?119      16?16                169:array (
)       	;0
	296 349  ISSET_ISEMPTY_DIM_OBJ/115 #148=     16?2                 170:'auto_subtitles'	;33554432
	297 349  BOOL_NOT/13               #149=     #148                 ?0                  	;0
	298 349  JMPZ/43                   ?0        #149                 ?302                	;0	>>302
	299 350  NOP/0                     ?0        ?0                   ?0                  	;1
	300 350  NOP/0                     ?0        ?0                   ?0                  	;1
	301 350  GOTO/253                  ?0        ?334                 ?171                	;0
	302 352  FE_RESET_R/77             $150=     172:array (
  0 => 'srt',
  1 => 'sub',
  2 => 'sbv',
) ?333                	;0	<<298
	303 352  FE_FETCH_R/78             ?0        $150                 16?17               	;333	>>333	<<332
	304 353  FETCH_DIM_R/81            $151=     16?19                173:'dirname'       	;0
	305 353  CONCAT/8                  #152=     $151                 174:'/'             	;0
	306 353  FETCH_DIM_R/81            $153=     16?19                175:'filename'      	;0
	307 353  CONCAT/8                  #154=     #152                 $153                	;0
	308 353  CONCAT/8                  #155=     #154                 176:'.'             	;0
	309 353  CONCAT/8                  #156=     #155                 16?17               	;0
	310 353  ASSIGN/38                 ?129      16?18                #156                	;0
	311 354  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'in_array'      	;2
	312 354  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
	313 354  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	314 354  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
	315 354  BOOL_NOT/13               #159=     $158                 ?0                  	;0
	316 354  JMPZ/43                   ?0        #159                 ?321                	;0	>>321
	317 355  NOP/0                     ?0        ?0                   ?0                  	;1
	318 355  NOP/0                     ?0        ?0                   ?0                  	;1
	319 355  NOP/0                     ?0        ?0                   ?0                  	;1
	320 355  GOTO/253                  ?0        ?332                 ?179                	;0
	321 357  INIT_ARRAY/71             #160=     16?18                ?0                  	;4	<<316
	322 357  INIT_ARRAY/71             #161=     #160                 180:'files'         	;18
	323 357  ADD_ARRAY_ELEMENT/72      #161=     181:array (
  0 => 'Subtitles',
) 182:'names'         	;0
	324 357  ADD_ARRAY_ELEMENT/72      #161=     183:array (
  0 => 'UTF-8',
) 184:'charset'       	;0
	325 357  FETCH_CONSTANT/99         #162=     ?0                   185:'SERVER_ID'     	;16
	326 357  ADD_ARRAY_ELEMENT/72      #161=     #162                 188:'location'      	;0
	327 357  ASSIGN/38                 ?135      16?16                #161                	;0
	328 358  FE_FREE/127               ?0        $150                 ?8                  	;1
	329 358  NOP/0                     ?0        ?0                   ?0                  	;1
	330 358  NOP/0                     ?0        ?0                   ?0                  	;1
	331 358  GOTO/253                  ?0        ?334                 ?189                	;0
	332 360  JMP/42                    ?0        ?303                 ?0                  	;0	>>303
	333 360  FE_FREE/127               ?0        $150                 ?0                  	;0	<<302
	334 364  NOP/0                     ?0        ?0                   ?0                  	;1
	335 364  NOP/0                     ?0        ?0                   ?0                  	;1
	336 364  GOTO/253                  ?0        ?337                 ?190                	;0
	337 366  FETCH_DIM_R/81            $165=     16?2                 191:'id'            	;0
	338 366  INIT_ARRAY/71             #166=     $165                 192:'folder_id'     	;106
	339 366  FETCH_DIM_R/81            $167=     16?2                 193:'type'          	;0
	340 366  ADD_ARRAY_ELEMENT/72      #166=     $167                 194:'type'          	;0
	341 366  FETCH_DIM_R/81            $168=     16?2                 195:'directory'     	;0
	342 366  ADD_ARRAY_ELEMENT/72      #166=     $168                 196:'directory'     	;0
	343 366  ADD_ARRAY_ELEMENT/72      #166=     16?15                197:'file'          	;0
	344 366  ADD_ARRAY_ELEMENT/72      #166=     16?16                198:'subtitles'     	;0
	345 366  FETCH_DIM_R/81            $169=     16?2                 199:'category_id'   	;0
	346 366  ADD_ARRAY_ELEMENT/72      #166=     $169                 200:'category_id'   	;0
	347 366  FETCH_DIM_R/81            $170=     16?2                 201:'bouquets'      	;0
	348 366  ADD_ARRAY_ELEMENT/72      #166=     $170                 202:'bouquets'      	;0
	349 366  FETCH_DIM_R/81            $171=     16?2                 203:'disable_tmdb'  	;0
	350 366  ADD_ARRAY_ELEMENT/72      #166=     $171                 204:'disable_tmdb'  	;0
	351 366  FETCH_DIM_R/81            $172=     16?2                 205:'ignore_no_match'	;0
	352 366  ADD_ARRAY_ELEMENT/72      #166=     $172                 206:'ignore_no_match'	;0
	353 366  FETCH_DIM_R/81            $173=     16?2                 207:'fb_bouquets'   	;0
	354 366  ADD_ARRAY_ELEMENT/72      #166=     $173                 208:'fb_bouquets'   	;0
	355 366  FETCH_DIM_R/81            $174=     16?2                 209:'fb_category_id'	;0
	356 366  ADD_ARRAY_ELEMENT/72      #166=     $174                 210:'fb_category_id'	;0
	357 366  FETCH_DIM_R/81            $175=     16?2                 211:'language'      	;0
	358 366  ADD_ARRAY_ELEMENT/72      #166=     $175                 212:'language'      	;0
	359 366  ADD_ARRAY_ELEMENT/72      #166=     16?20                213:'watch_categories'	;0
	360 366  FETCH_DIM_R/81            $176=     16?2                 214:'read_native'   	;0
	361 366  ADD_ARRAY_ELEMENT/72      #166=     $176                 215:'read_native'   	;0
	362 366  FETCH_DIM_R/81            $177=     16?2                 216:'movie_symlink' 	;0
	363 366  ADD_ARRAY_ELEMENT/72      #166=     $177                 217:'movie_symlink' 	;0
	364 366  FETCH_DIM_R/81            $178=     16?2                 218:'remove_subtitles'	;0
	365 366  ADD_ARRAY_ELEMENT/72      #166=     $178                 219:'remove_subtitles'	;0
	366 366  FETCH_DIM_R/81            $179=     16?2                 220:'auto_encode'   	;0
	367 366  ADD_ARRAY_ELEMENT/72      #166=     $179                 221:'auto_encode'   	;0
	368 366  FETCH_DIM_R/81            $180=     16?2                 222:'auto_upgrade'  	;0
	369 366  ADD_ARRAY_ELEMENT/72      #166=     $180                 223:'auto_upgrade'  	;0
	370 366  FETCH_DIM_R/81            $181=     16?2                 224:'fallback_title'	;0
	371 366  ADD_ARRAY_ELEMENT/72      #166=     $181                 225:'fallback_title'	;0
	372 366  FETCH_DIM_R/81            $182=     16?2                 226:'ffprobe_input' 	;0
	373 366  ADD_ARRAY_ELEMENT/72      #166=     $182                 227:'ffprobe_input' 	;0
	374 366  FETCH_DIM_R/81            $183=     16?2                 228:'transcode_profile_id'	;0
	375 366  ADD_ARRAY_ELEMENT/72      #166=     $183                 229:'transcode_profile_id'	;0
	376 366  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'intval'        	;1
	377 366  FETCH_STATIC_PROP_FUNC_ARG/177 $184=     232:'rSettings'      233:'XUI'           	;1
	378 366  FETCH_DIM_FUNC_ARG/93     $185=     $184                 235:'max_genres'    	;1
	379 366  SEND_VAR_EX/66            ?80       $185                 ?1                  	;0
	380 366  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
	381 366  ADD_ARRAY_ELEMENT/72      #166=     $186                 236:'max_genres'    	;0
	382 366  FETCH_DIM_R/81            $187=     16?2                 237:'duplicate_tmdb'	;0
	383 366  ADD_ARRAY_ELEMENT/72      #166=     $187                 238:'duplicate_tmdb'	;0
	384 366  FETCH_DIM_R/81            $188=     16?2                 239:'target_container'	;0
	385 366  ADD_ARRAY_ELEMENT/72      #166=     $188                 240:'target_container'	;0
	386 366  FETCH_STATIC_PROP_R/173   $189=     241:'rSettings'      242:'XUI'           	;0
	387 366  FETCH_DIM_R/81            $190=     $189                 244:'alternative_titles'	;0
	388 366  ADD_ARRAY_ELEMENT/72      #166=     $190                 245:'alternative_titles'	;0
	389 366  FETCH_STATIC_PROP_R/173   $191=     246:'rSettings'      247:'XUI'           	;0
	390 366  FETCH_DIM_R/81            $192=     $191                 249:'fallback_parser'	;0
	391 366  ADD_ARRAY_ELEMENT/72      #166=     $192                 250:'fallback_parser'	;0
	392 366  ASSIGN_DIM/147            ?136      16?11                ?6                  	;0
	393 366  OP_DATA/137               ?0        #166                 ?0                  	;0
	394 367  IS_SMALLER/19             #193=     251:0                16?21               	;0
	395 367  JMPZ_EX/46                #193=     #193                 ?401                	;0	>>401
	396 367  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'count'         	;1
	397 367  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	398 367  DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
	399 367  IS_EQUAL/17               #195=     $194                 16?21               	;0
	400 367  BOOL/52                   #193=     #195                 ?0                  	;0
	401 367  BOOL_NOT/13               #196=     #193                 ?0                  	;0	<<395
	402 367  JMPZ/43                   ?0        #196                 ?406                	;0	>>406
	403 368  NOP/0                     ?0        ?0                   ?0                  	;1
	404 368  NOP/0                     ?0        ?0                   ?0                  	;1
	405 368  GOTO/253                  ?0        ?409                 ?254                	;0
	406 370  FE_FREE/127               ?0        $146                 ?7                  	;1	<<402
	407 370  NOP/0                     ?0        ?0                   ?0                  	;1
	408 370  GOTO/253                  ?0        ?204                 ?255                	;0
	409 373  NOP/0                     ?0        ?0                   ?0                  	;1
	410 373  NOP/0                     ?0        ?0                   ?0                  	;1
	411 373  GOTO/253                  ?0        ?452                 ?256                	;0
	412 375  INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'time'          	;0
	413 375  DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
	414 375  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'filemtime'     	;1
	415 375  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	416 375  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
	417 375  SUB/2                     #199=     $197                 $198                	;0
	418 375  IS_SMALLER/19             #200=     #199                 261:30              	;0
	419 375  BOOL_NOT/13               #201=     #200                 ?0                  	;0
	420 375  JMPZ/43                   ?0        #201                 ?424                	;0	>>424
	421 376  NOP/0                     ?0        ?0                   ?0                  	;1
	422 376  NOP/0                     ?0        ?0                   ?0                  	;1
	423 376  GOTO/253                  ?0        ?427                 ?262                	;0
	424 378  NOP/0                     ?0        ?0                   ?0                  	;1	<<420
	425 378  NOP/0                     ?0        ?0                   ?0                  	;1
	426 378  GOTO/253                  ?0        ?452                 ?263                	;0
	427 380  INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'in_array'      	;2
	428 380  INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'json_encode'   	;2
	429 380  FETCH_CONSTANT/99         #202=     ?0                   268:'SERVER_ID'     	;16
	430 380  CONCAT/8                  #203=     271:'s:'             #202                	;0
	431 380  CONCAT/8                  #204=     #203                 272:':'             	;0
	432 380  CONCAT/8                  #205=     #204                 16?15               	;0
	433 380  INIT_ARRAY/71             #206=     #205                 ?0                  	;4
	434 380  SEND_VAL_EX/116           ?80       #206                 ?1                  	;0
	435 380  FETCH_CONSTANT/99         #207=     ?0                   273:'JSON_UNESCAPED_UNICODE'	;16
	436 380  SEND_VAL_EX/116           ?96       #207                 ?2                  	;0
	437 380  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
	438 380  SEND_VAR_NO_REF_EX/50     ?80       $208                 ?1                  	;0
	439 380  SEND_VAR_EX/66            ?96       16?22                ?2                  	;0
	440 380  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
	441 380  JMPZ/43                   ?0        $209                 ?445                	;0	>>445
	442 381  NOP/0                     ?0        ?0                   ?0                  	;1
	443 381  NOP/0                     ?0        ?0                   ?0                  	;1
	444 381  GOTO/253                  ?0        ?409                 ?276                	;0
	445 383  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'pathinfo'      	;1	<<441
	446 383  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	447 383  DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
	448 383  ASSIGN/38                 ?183      16?19                $210                	;0
	449 384  NOP/0                     ?0        ?0                   ?0                  	;1
	450 384  NOP/0                     ?0        ?0                   ?0                  	;1
	451 384  GOTO/253                  ?0        ?295                 ?279                	;0
	452 387  NOP/0                     ?0        ?0                   ?0                  	;1
	453 387  NOP/0                     ?0        ?0                   ?0                  	;1
	454 387  GOTO/253                  ?0        ?455                 ?280                	;0
	455 388  JMP/42                    ?0        ?291                 ?0                  	;0	>>291
	456 388  FE_FREE/127               ?0        $146                 ?0                  	;0	<<290
	457 390  NOP/0                     ?0        ?0                   ?0                  	;1
	458 390  GOTO/253                  ?0        ?204                 ?281                	;0
	459 393  NOP/0                     ?0        ?0                   ?0                  	;1
	460 393  GOTO/253                  ?0        ?289                 ?282                	;0
	461 395  FETCH_CONSTANT/99         #212=     ?0                   283:'CONFIG_PATH'   	;16
	462 395  CONCAT/8                  #213=     286:'rclone --config "' #212                	;0
	463 395  CONCAT/8                  #214=     #213                 287:'rclone.conf" lsjson '	;0
	464 395  INIT_FCALL_BY_NAME/59     ?0        ?0                   288:'escapeshellarg'	;1
	465 395  FETCH_DIM_FUNC_ARG/93     $215=     16?2                 290:'rclone_dir'    	;1
	466 395  SEND_VAR_EX/66            ?80       $215                 ?1                  	;0
	467 395  DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
	468 395  CONCAT/8                  #217=     #214                 $216                	;0
	469 395  CONCAT/8                  #218=     #217                 291:' -R --fast-list --files-only'	;0
	470 395  ASSIGN/38                 ?191      16?4                 #218                	;0
	471 396  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'exec'          	;3
	472 396  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	473 396  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	474 396  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	475 396  DO_FCALL_BY_NAME/131      ?192      ?0                   ?0                  	;0
	476 397  NOP/0                     ?0        ?0                   ?0                  	;1
	477 397  GOTO/253                  ?0        ?81                  ?294                	;0
	478 398  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
	479 398  FE_FREE/127               ?0        $28                  ?0                  	;0	<<3
	480 400  GOTO/253                  ?0        ?481                 ?295                	;0
	481 403  GOTO/253                  ?0        ?684                 ?296                	;0
	482 405  ASSIGN/38                 ?193      16?0                 297:array (
  'movie' => 
  array (
  ),
  'series' => 
  array (
  ),
)	;0
	483 406  ECHO/40                   ?0        298:'Generating cache...
' ?0                  	;0
	484 407  INIT_METHOD_CALL/112      ?0        16?8                 299:'query'         	;1
	485 407  SEND_VAL_EX/116           ?80       301:'SELECT `id`, `tmdb_id` FROM `streams_series` WHERE `tmdb_id` IS NOT NULL AND `tmdb_id` > 0;' ?1                  	;0
	486 407  DO_FCALL/60               ?194      ?0                   ?0                  	;0
	487 408  INIT_METHOD_CALL/112      ?0        16?8                 302:'get_rows'      	;0
	488 408  DO_FCALL/60               $223=     ?0                   ?0                  	;0
	489 408  FE_RESET_R/77             $224=     $223                 ?496                	;0
	490 408  FE_FETCH_R/78             ?0        $224                 16?2                	;496	>>496	<<495
	491 409  FETCH_DIM_R/81            $225=     16?2                 304:'id'            	;0
	492 409  FETCH_DIM_R/81            $227=     16?2                 305:'tmdb_id'       	;0
	493 409  ASSIGN_DIM/147            ?198      16?23                $225                	;0
	494 409  OP_DATA/137               ?0        $227                 ?0                  	;0
	495 410  JMP/42                    ?0        ?490                 ?0                  	;0	>>490
	496 410  FE_FREE/127               ?0        $224                 ?0                  	;0	<<489
	497 413  GOTO/253                  ?0        ?604                 ?306                	;0
	498 415  BOOL_NOT/13               #228=     16?24                ?0                  	;0
	499 415  JMPZ/43                   ?0        #228                 ?501                	;0	>>501
	500 416  GOTO/253                  ?0        ?508                 ?307                	;0
	501 418  INIT_METHOD_CALL/112      ?0        16?8                 308:'query'         	;3	<<499
	502 418  SEND_VAL_EX/116           ?80       310:'SELECT * FROM `watch_folders` WHERE `type` <> \'plex\' AND `server_id` = ? AND `id` = ?;' ?1                  	;0
	503 418  FETCH_CONSTANT/99         #229=     ?0                   311:'SERVER_ID'     	;16
	504 418  SEND_VAL_EX/116           ?96       #229                 ?2                  	;0
	505 418  SEND_VAR_EX/66            ?112      16?24                ?3                  	;0
	506 418  DO_FCALL/60               ?202      ?0                   ?0                  	;0
	507 419  GOTO/253                  ?0        ?585                 ?314                	;0
	508 421  INIT_METHOD_CALL/112      ?0        16?8                 315:'query'         	;3
	509 421  SEND_VAL_EX/116           ?80       317:'SELECT * FROM `watch_folders` WHERE `type` <> \'plex\' AND `server_id` = ? AND `active` = 1 AND (UNIX_TIMESTAMP() - `last_run` > ? OR `last_run` IS NULL) ORDER BY `id` ASC;' ?1                  	;0
	510 421  FETCH_CONSTANT/99         #231=     ?0                   318:'SERVER_ID'     	;16
	511 421  SEND_VAL_EX/116           ?96       #231                 ?2                  	;0
	512 421  SEND_VAR_EX/66            ?112      16?25                ?3                  	;0
	513 421  DO_FCALL/60               ?204      ?0                   ?0                  	;0
	514 422  GOTO/253                  ?0        ?585                 ?321                	;0
	515 424  BIND_GLOBAL/168           ?0        16?8                 322:'b62d6460eb33ea07'	;0	<<0
	516 424  BIND_GLOBAL/168           ?0        16?13                323:'Ee78463923199005'	;0
	517 424  BIND_GLOBAL/168           ?0        16?25                324:'D3e21fcef5b5b9c7'	;0
	518 424  BIND_GLOBAL/168           ?0        16?21                325:'Ee7b0d743fd5a408'	;0
	519 424  BIND_GLOBAL/168           ?0        16?24                326:'ebb4852f69f0dca0'	;0
	520 425  INIT_FCALL/61             ?0        ?256                 327:'d9aa526fdb80307a'	;1
	521 425  SEND_VAL/65               ?80       328:1                ?1                  	;0
	522 425  DO_FCALL/60               $233=     ?0                   ?0                  	;0
	523 425  INIT_ARRAY/71             #234=     $233                 329:1               	;8
	524 425  INIT_FCALL/61             ?0        ?256                 330:'d9aa526fdb80307a'	;1
	525 425  SEND_VAL/65               ?80       331:2                ?1                  	;0
	526 425  DO_FCALL/60               $235=     ?0                   ?0                  	;0
	527 425  ADD_ARRAY_ELEMENT/72      #234=     $235                 332:2               	;0
	528 425  ASSIGN/38                 ?208      16?20                #234                	;0
	529 426  INIT_FCALL_BY_NAME/59     ?0        ?0                   333:'count'         	;1
	530 426  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'glob'          	;1
	531 426  FETCH_CONSTANT/99         #237=     ?0                   337:'WATCH_TMP_PATH'	;16
	532 426  CONCAT/8                  #238=     #237                 340:'*.bouquet'     	;0
	533 426  SEND_VAL_EX/116           ?80       #238                 ?1                  	;0
	534 426  DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
	535 426  SEND_VAR_NO_REF_EX/50     ?80       $239                 ?1                  	;0
	536 426  DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
	537 426  IS_SMALLER/19             #241=     341:0                $240                	;0
	538 426  BOOL_NOT/13               #242=     #241                 ?0                  	;0
	539 426  JMPZ/43                   ?0        #242                 ?541                	;0	>>541
	540 427  GOTO/253                  ?0        ?543                 ?342                	;0
	541 429  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'checkBouquets' 	;0	<<539
	542 429  DO_FCALL_BY_NAME/131      ?215      ?0                   ?0                  	;0
	543 431  GOTO/253                  ?0        ?498                 ?345                	;0
	544 434  INIT_FCALL_BY_NAME/59     ?0        ?0                   346:'exec'          	;1
	545 434  FETCH_CONSTANT/99         #244=     ?0                   348:'WATCH_TMP_PATH'	;16
	546 434  CONCAT/8                  #245=     351:'find '          #244                	;0
	547 434  CONCAT/8                  #246=     #245                 352:' -maxdepth 1 -name "*.cache" -print0 | xargs -0 rm'	;0
	548 434  SEND_VAL_EX/116           ?80       #246                 ?1                  	;0
	549 434  DO_FCALL_BY_NAME/131      ?219      ?0                   ?0                  	;0
	550 435  FETCH_DIM_R/81            $248=     16?0                 353:'series'        	;0
	551 435  FE_RESET_R/77             $249=     $248                 ?566                	;0
	552 435  FE_FETCH_R/78             #250=     $249                 16?9                	;566	>>566	<<565
	553 435  ASSIGN/38                 ?223      16?26                #250                	;0
	554 436  INIT_FCALL_BY_NAME/59     ?0        ?0                   354:'file_put_contents'	;2
	555 436  FETCH_CONSTANT/99         #252=     ?0                   356:'WATCH_TMP_PATH'	;16
	556 436  CONCAT/8                  #253=     #252                 359:'series_'       	;0
	557 436  CONCAT/8                  #254=     #253                 16?26               	;0
	558 436  CONCAT/8                  #255=     #254                 360:'.cache'        	;0
	559 436  SEND_VAL_EX/116           ?80       #255                 ?1                  	;0
	560 436  INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'json_encode'   	;1
	561 436  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	562 436  DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
	563 436  SEND_VAR_NO_REF_EX/50     ?96       $256                 ?2                  	;0
	564 436  DO_FCALL_BY_NAME/131      ?229      ?0                   ?0                  	;0
	565 437  JMP/42                    ?0        ?552                 ?0                  	;0	>>552
	566 437  FE_FREE/127               ?0        $249                 ?0                  	;0	<<551
	567 440  FETCH_DIM_R/81            $258=     16?0                 363:'movie'         	;0
	568 440  FE_RESET_R/77             $259=     $258                 ?583                	;0
	569 440  FE_FETCH_R/78             #260=     $259                 16?9                	;583	>>583	<<582
	570 440  ASSIGN/38                 ?233      16?26                #260                	;0
	571 441  INIT_FCALL_BY_NAME/59     ?0        ?0                   364:'file_put_contents'	;2
	572 441  FETCH_CONSTANT/99         #262=     ?0                   366:'WATCH_TMP_PATH'	;16
	573 441  CONCAT/8                  #263=     #262                 369:'movie_'        	;0
	574 441  CONCAT/8                  #264=     #263                 16?26               	;0
	575 441  CONCAT/8                  #265=     #264                 370:'.cache'        	;0
	576 441  SEND_VAL_EX/116           ?80       #265                 ?1                  	;0
	577 441  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'json_encode'   	;1
	578 441  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	579 441  DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
	580 441  SEND_VAR_NO_REF_EX/50     ?96       $266                 ?2                  	;0
	581 441  DO_FCALL_BY_NAME/131      ?239      ?0                   ?0                  	;0
	582 442  JMP/42                    ?0        ?569                 ?0                  	;0	>>569
	583 442  FE_FREE/127               ?0        $259                 ?0                  	;0	<<568
	584 444  GOTO/253                  ?0        ?1                   ?373                	;0
	585 447  INIT_METHOD_CALL/112      ?0        16?8                 374:'get_rows'      	;0
	586 447  DO_FCALL/60               $268=     ?0                   ?0                  	;0
	587 447  ASSIGN/38                 ?241      16?1                 $268                	;0
	588 448  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'count'         	;1
	589 448  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	590 448  DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
	591 448  IS_SMALLER/19             #271=     378:0                $270                	;0
	592 448  BOOL_NOT/13               #272=     #271                 ?0                  	;0
	593 448  JMPZ/43                   ?0        #272                 ?595                	;0	>>595
	594 449  GOTO/253                  ?0        ?3                   ?379                	;0
	595 451  INIT_FCALL_BY_NAME/59     ?0        ?0                   380:'shell_exec'    	;1	<<593
	596 451  FETCH_CONSTANT/99         #273=     ?0                   382:'WATCH_TMP_PATH'	;16
	597 451  CONCAT/8                  #274=     385:'rm -f '         #273                	;0
	598 451  CONCAT/8                  #275=     #274                 386:'*.wpid'        	;0
	599 451  SEND_VAL_EX/116           ?80       #275                 ?1                  	;0
	600 451  DO_FCALL_BY_NAME/131      ?248      ?0                   ?0                  	;0
	601 452  ASSIGN/38                 $277=     16?22                387:array (
)       	;0
	602 452  ASSIGN/38                 ?250      16?23                $277                	;0
	603 453  GOTO/253                  ?0        ?482                 ?388                	;0
	604 455  INIT_METHOD_CALL/112      ?0        16?8                 389:'query'         	;2
	605 455  SEND_VAL_EX/116           ?80       391:'SELECT `streams`.`id`, `streams_episodes`.`series_id`, `streams_episodes`.`season_num`, `streams_episodes`.`episode_num`, `streams`.`stream_source` FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams_servers`.`server_id` = ?;' ?1                  	;0
	606 455  FETCH_CONSTANT/99         #279=     ?0                   392:'SERVER_ID'     	;16
	607 455  SEND_VAL_EX/116           ?96       #279                 ?2                  	;0
	608 455  DO_FCALL/60               ?252      ?0                   ?0                  	;0
	609 456  INIT_METHOD_CALL/112      ?0        16?8                 395:'get_rows'      	;0
	610 456  DO_FCALL/60               $281=     ?0                   ?0                  	;0
	611 456  FE_RESET_R/77             $282=     $281                 ?642                	;0
	612 456  FE_FETCH_R/78             ?0        $282                 16?2                	;642	>>642	<<641
	613 457  FETCH_DIM_R/81            $284=     16?2                 397:'stream_source' 	;0
	614 457  ASSIGN_DIM/147            ?255      16?22                ?4414262            	;0
	615 457  OP_DATA/137               ?0        $284                 ?0                  	;0
	616 458  FETCH_DIM_R/81            $285=     16?2                 398:'series_id'     	;0
	617 458  FETCH_DIM_R/81            $286=     16?23                $285                	;0
	618 458  ASSIGN/38                 ?259      16?26                $286                	;0
	619 459  BOOL_NOT/13               #288=     16?26                ?0                  	;0
	620 459  JMPZ/43                   ?0        #288                 ?623                	;0	>>623
	621 460  NOP/0                     ?0        ?0                   ?0                  	;1
	622 460  GOTO/253                  ?0        ?641                 ?399                	;0
	623 462  INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'json_decode'   	;2	<<620
	624 462  FETCH_DIM_FUNC_ARG/93     $289=     16?2                 402:'stream_source' 	;1
	625 462  SEND_VAR_EX/66            ?80       $289                 ?1                  	;0
	626 462  SEND_VAL_EX/116           ?96       403:true             ?2                  	;0
	627 462  DO_FCALL_BY_NAME/131      $290=     ?0                   ?0                  	;0
	628 462  FETCH_DIM_R/81            $291=     $290                 404:0               	;0
	629 462  ASSIGN/38                 ?264      16?27                $291                	;0
	630 463  FETCH_DIM_R/81            $295=     16?2                 406:'season_num'    	;0
	631 463  CONCAT/8                  #296=     $295                 407:'_'             	;0
	632 463  FETCH_DIM_R/81            $297=     16?2                 408:'episode_num'   	;0
	633 463  CONCAT/8                  #298=     #296                 $297                	;0
	634 463  FETCH_DIM_R/81            $300=     16?2                 409:'id'            	;0
	635 463  INIT_ARRAY/71             #301=     $300                 410:'id'            	;10
	636 463  ADD_ARRAY_ELEMENT/72      #301=     16?27                411:'source'        	;0
	637 463  FETCH_DIM_W/84            $293=     16?0                 405:'series'        	;0
	638 463  FETCH_DIM_W/84            $294=     $293                 16?26               	;0
	639 463  ASSIGN_DIM/147            ?271      $294                 #298                	;0
	640 463  OP_DATA/137               ?0        #301                 ?0                  	;0
	641 465  JMP/42                    ?0        ?612                 ?0                  	;0	>>612
	642 465  FE_FREE/127               ?0        $282                 ?0                  	;0	<<611
	643 468  INIT_METHOD_CALL/112      ?0        16?8                 412:'query'         	;2
	644 468  SEND_VAL_EX/116           ?80       414:'SELECT `streams`.`id`, `streams`.`stream_source`, `streams`.`movie_properties` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`type` = 2 AND `streams_servers`.`server_id` = ?;' ?1                  	;0
	645 468  FETCH_CONSTANT/99         #302=     ?0                   415:'SERVER_ID'     	;16
	646 468  SEND_VAL_EX/116           ?96       #302                 ?2                  	;0
	647 468  DO_FCALL/60               ?275      ?0                   ?0                  	;0
	648 469  INIT_METHOD_CALL/112      ?0        16?8                 418:'get_rows'      	;0
	649 469  DO_FCALL/60               $304=     ?0                   ?0                  	;0
	650 469  FE_RESET_R/77             $305=     $304                 ?682                	;0
	651 469  FE_FETCH_R/78             ?0        $305                 16?2                	;682	>>682	<<681
	652 470  FETCH_DIM_R/81            $307=     16?2                 420:'stream_source' 	;0
	653 470  ASSIGN_DIM/147            ?278      16?22                ?4414262            	;0
	654 470  OP_DATA/137               ?0        $307                 ?0                  	;0
	655 471  INIT_FCALL_BY_NAME/59     ?0        ?0                   421:'json_decode'   	;2
	656 471  FETCH_DIM_FUNC_ARG/93     $308=     16?2                 423:'movie_properties'	;1
	657 471  SEND_VAR_EX/66            ?80       $308                 ?1                  	;0
	658 471  SEND_VAL_EX/116           ?96       424:true             ?2                  	;0
	659 471  DO_FCALL_BY_NAME/131      $309=     ?0                   ?0                  	;0
	660 471  FETCH_DIM_R/81            $310=     $309                 425:'tmdb_id'       	;0
	661 471  JMP_SET/152               #311=     $310                 ?663                	;0
	662 471  QM_ASSIGN/22              #311=     426:NULL             ?0                  	;0
	663 471  ASSIGN/38                 ?284      16?26                #311                	;0
	664 472  BOOL_NOT/13               #313=     16?26                ?0                  	;0
	665 472  JMPZ/43                   ?0        #313                 ?668                	;0	>>668
	666 473  NOP/0                     ?0        ?0                   ?0                  	;1
	667 473  GOTO/253                  ?0        ?681                 ?427                	;0
	668 475  INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'json_decode'   	;2	<<665
	669 475  FETCH_DIM_FUNC_ARG/93     $314=     16?2                 430:'stream_source' 	;1
	670 475  SEND_VAR_EX/66            ?80       $314                 ?1                  	;0
	671 475  SEND_VAL_EX/116           ?96       431:true             ?2                  	;0
	672 475  DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
	673 475  FETCH_DIM_R/81            $316=     $315                 432:0               	;0
	674 475  ASSIGN/38                 ?289      16?27                $316                	;0
	675 476  FETCH_DIM_R/81            $320=     16?2                 434:'id'            	;0
	676 476  INIT_ARRAY/71             #321=     $320                 435:'id'            	;10
	677 476  ADD_ARRAY_ELEMENT/72      #321=     16?27                436:'source'        	;0
	678 476  FETCH_DIM_W/84            $318=     16?0                 433:'movie'         	;0
	679 476  ASSIGN_DIM/147            ?291      $318                 16?26               	;0
	680 476  OP_DATA/137               ?0        #321                 ?0                  	;0
	681 478  JMP/42                    ?0        ?651                 ?0                  	;0	>>651
	682 478  FE_FREE/127               ?0        $305                 ?0                  	;0	<<650
	683 480  GOTO/253                  ?0        ?544                 ?437                	;0
	684 482  NOP/0                     ?0        438:NULL             ?0                  	;4294967295
	*/
}

function b47fb5320e43f112($Abcb228699a7f743)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   523  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   525  BIND_GLOBAL/168           ?0        16?1                 0:'b62d6460eb33ea07'	;0
	2   526  INIT_METHOD_CALL/112      ?0        16?1                 1:'query'           	;2
	3   526  SEND_VAL_EX/116           ?80       3:'SELECT * FROM `bouquets` WHERE `id` = ?;' ?1                  	;0
	4   526  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	5   526  DO_FCALL/60               ?0        ?0                   ?0                  	;0
	6   527  INIT_METHOD_CALL/112      ?0        16?1                 4:'num_rows'        	;0
	7   527  DO_FCALL/60               $3=       ?0                   ?0                  	;0
	8   527  IS_EQUAL/17               #4=       $3                   6:1                 	;0
	9   527  BOOL_NOT/13               #5=       #4                   ?0                  	;0
	10  527  JMPZ/43                   ?0        #5                   ?12                 	;0	>>12
	11  528  GOTO/253                  ?0        ?15                  ?7                  	;0
	12  530  INIT_METHOD_CALL/112      ?0        16?1                 8:'get_row'         	;0	<<10
	13  530  DO_FCALL/60               $6=       ?0                   ?0                  	;0
	14  530  RETURN/62                 ?0        $6                   ?0                  	;0
	15  532  RETURN/62                 ?0        10:NULL              ?0                  	;0
	16  533  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
	*/
}

function checkBouquets()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   537  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   538  ASSIGN/38                 ?0        16?1                 1:array (
)         	;0
	2   539  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'glob'            	;1
	3   539  FETCH_CONSTANT/99         #12=      ?0                   4:'WATCH_TMP_PATH'  	;16
	4   539  CONCAT/8                  #13=      #12                  7:'*.bouquet'       	;0
	5   539  SEND_VAL_EX/116           ?80       #13                  ?1                  	;0
	6   539  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	7   539  ASSIGN/38                 ?4        16?2                 $14                 	;0
	8   540  FE_RESET_R/77             $16=      16?2                 ?37                 	;0
	9   540  FE_FETCH_R/78             ?0        $16                  16?3                	;37	>>37	<<36
	10  541  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'json_decode'     	;2
	11  541  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'file_get_contents'	;1
	12  541  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	13  541  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	14  541  SEND_VAR_NO_REF_EX/50     ?80       $17                  ?1                  	;0
	15  541  SEND_VAL_EX/116           ?96       12:true              ?2                  	;0
	16  541  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	17  541  ASSIGN/38                 ?8        16?4                 $18                 	;0
	18  542  FETCH_DIM_R/81            $20=      16?4                 13:'bouquet_id'     	;0
	19  542  ISSET_ISEMPTY_DIM_OBJ/115 #21=      16?1                 $20                 	;33554432
	20  542  JMPZ/43                   ?0        #21                  ?23                 	;0	>>23
	21  543  NOP/0                     ?0        ?0                   ?0                  	;1
	22  543  GOTO/253                  ?0        ?26                  ?14                 	;0
	23  545  FETCH_DIM_R/81            $22=      16?4                 15:'bouquet_id'     	;0	<<20
	24  545  ASSIGN_DIM/147            ?12       16?1                 $22                 	;0
	25  545  OP_DATA/137               ?0        16:array (
  'movie' => 
  array (
  ),
  'series' => 
  array (
  ),
) ?0                  	;0
	26  547  FETCH_DIM_R/81            $24=      16?4                 17:'bouquet_id'     	;0
	27  547  FETCH_DIM_R/81            $26=      16?4                 18:'type'           	;0
	28  547  FETCH_DIM_R/81            $29=      16?4                 19:'id'             	;0
	29  547  FETCH_DIM_W/84            $25=      16?1                 $24                 	;0
	30  547  FETCH_DIM_W/84            $27=      $25                  $26                 	;0
	31  547  ASSIGN_DIM/147            ?17       $27                  ?0                  	;0
	32  547  OP_DATA/137               ?0        $29                  ?0                  	;0
	33  548  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'unlink'         	;1
	34  548  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	35  548  DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
	36  549  JMP/42                    ?0        ?9                   ?0                  	;0	>>9
	37  549  FE_FREE/127               ?0        $16                  ?0                  	;0	<<8
	38  552  FE_RESET_R/77             $31=      16?1                 ?123                	;0
	39  552  FE_FETCH_R/78             #32=      $31                  16?5                	;123	>>123	<<122
	40  552  ASSIGN/38                 ?22       16?6                 #32                 	;0
	41  553  INIT_FCALL/61             ?0        ?192                 22:'b47fb5320e43f112'	;1
	42  553  SEND_VAR/117              ?80       16?6                 ?1                  	;0
	43  553  DO_FCALL/60               $34=      ?0                   ?0                  	;0
	44  553  ASSIGN/38                 ?24       16?4                 $34                 	;0
	45  554  BOOL_NOT/13               #36=      16?4                 ?0                  	;0
	46  554  JMPZ/43                   ?0        #36                  ?49                 	;0	>>49
	47  555  NOP/0                     ?0        ?0                   ?0                  	;1
	48  555  GOTO/253                  ?0        ?122                 ?23                 	;0
	49  557  FE_RESET_R/77             $37=      24:array (
  0 => 'movie',
  1 => 'series',
) ?121                	;0	<<46
	50  557  FE_FETCH_R/78             ?0        $37                  16?7                	;121	>>121	<<120
	51  558  NOP/0                     ?0        ?0                   ?0                  	;1
	52  558  NOP/0                     ?0        ?0                   ?0                  	;1
	53  558  GOTO/253                  ?0        ?57                  ?25                 	;0
	54  561  NOP/0                     ?0        ?0                   ?0                  	;1
	55  561  NOP/0                     ?0        ?0                   ?0                  	;1
	56  561  GOTO/253                  ?0        ?120                 ?26                 	;0
	57  563  IS_EQUAL/17               #38=      16?7                 27:'movie'          	;0
	58  563  JMPZ/43                   ?0        #38                  ?62                 	;0	>>62
	59  564  NOP/0                     ?0        ?0                   ?0                  	;1
	60  564  NOP/0                     ?0        ?0                   ?0                  	;1
	61  564  GOTO/253                  ?0        ?66                  ?28                 	;0
	62  566  ASSIGN/38                 ?28       16?8                 29:'bouquet_series' 	;0	<<58
	63  567  NOP/0                     ?0        ?0                   ?0                  	;1
	64  567  NOP/0                     ?0        ?0                   ?0                  	;1
	65  567  GOTO/253                  ?0        ?70                  ?30                 	;0
	66  569  ASSIGN/38                 ?29       16?8                 31:'bouquet_movies' 	;0
	67  570  NOP/0                     ?0        ?0                   ?0                  	;1
	68  570  NOP/0                     ?0        ?0                   ?0                  	;1
	69  570  GOTO/253                  ?0        ?70                  ?32                 	;0
	70  573  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'json_decode'    	;2
	71  573  FETCH_DIM_FUNC_ARG/93     $41=      16?4                 16?8                	;1
	72  573  SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
	73  573  SEND_VAL_EX/116           ?96       35:true              ?2                  	;0
	74  573  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	75  573  ASSIGN/38                 ?32       16?9                 $42                 	;0
	76  574  FETCH_DIM_R/81            $44=      16?5                 16?7                	;0
	77  574  FE_RESET_R/77             $45=      $44                  ?99                 	;0
	78  574  FE_FETCH_R/78             ?0        $45                  16?10               	;99	>>99	<<98
	79  575  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'intval'         	;1
	80  575  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	81  575  DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
	82  575  IS_SMALLER/19             #47=      38:0                 $46                 	;0
	83  575  JMPZ_EX/46                #47=      #47                  ?90                 	;0	>>90
	84  575  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'in_array'       	;2
	85  575  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	86  575  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	87  575  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
	88  575  BOOL_NOT/13               #49=      $48                  ?0                  	;0
	89  575  BOOL/52                   #47=      #49                  ?0                  	;0
	90  575  BOOL_NOT/13               #50=      #47                  ?0                  	;0	<<83
	91  575  JMPZ/43                   ?0        #50                  ?96                 	;0	>>96
	92  576  NOP/0                     ?0        ?0                   ?0                  	;1
	93  576  NOP/0                     ?0        ?0                   ?0                  	;1
	94  576  NOP/0                     ?0        ?0                   ?0                  	;1
	95  576  GOTO/253                  ?0        ?98                  ?41                 	;0
	96  578  ASSIGN_DIM/147            ?40       16?9                 ?4397406            	;0	<<91
	97  578  OP_DATA/137               ?0        16?10                ?0                  	;0
	98  580  JMP/42                    ?0        ?78                  ?0                  	;0	>>78
	99  580  FE_FREE/127               ?0        $45                  ?0                  	;0	<<77
	100 583  INIT_METHOD_CALL/112      ?0        16?0                 42:'query'          	;3
	101 583  CONCAT/8                  #52=      44:'UPDATE `bouquets` SET `' 16?8                	;0
	102 583  CONCAT/8                  #53=      #52                  45:'` = ? WHERE `id` = ?;'	;0
	103 583  SEND_VAL_EX/116           ?80       #53                  ?1                  	;0
	104 583  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'implode'        	;2
	105 583  SEND_VAL_EX/116           ?80       48:','               ?1                  	;0
	106 583  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'array_map'      	;2
	107 583  SEND_VAL_EX/116           ?80       51:'intval'          ?1                  	;0
	108 583  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	109 583  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
	110 583  SEND_VAR_NO_REF_EX/50     ?96       $54                  ?2                  	;0
	111 583  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
	112 583  CONCAT/8                  #56=      52:'['               $55                 	;0
	113 583  CONCAT/8                  #57=      #56                  53:']'              	;0
	114 583  SEND_VAL_EX/116           ?96       #57                  ?2                  	;0
	115 583  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
	116 583  DO_FCALL/60               ?47       ?0                   ?0                  	;0
	117 584  NOP/0                     ?0        ?0                   ?0                  	;1
	118 584  NOP/0                     ?0        ?0                   ?0                  	;1
	119 584  GOTO/253                  ?0        ?54                  ?54                 	;0
	120 585  JMP/42                    ?0        ?50                  ?0                  	;0	>>50
	121 585  FE_FREE/127               ?0        $37                  ?0                  	;0	<<49
	122 589  JMP/42                    ?0        ?39                  ?0                  	;0	>>39
	123 589  FE_FREE/127               ?0        $31                  ?0                  	;0	<<38
	124 592  NOP/0                     ?0        55:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   608  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   608  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   609  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   609  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   609  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   609  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   609  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   610  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   612  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   612  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  614  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  614  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  614  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  614  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  614  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  615  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?87                  ?0                  	;0	>>87
1   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_put_contents'	;2
2   7    FETCH_CONSTANT/99         #6=       ?0                   3:'CACHE_TMP_PATH'  	;16
3   7    CONCAT/8                  #7=       #6                   6:'watch_pid'       	;0
4   7    SEND_VAL_EX/116           ?80       #7                   ?1                  	;0
5   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'getmypid'        	;0
6   7    DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
7   7    SEND_VAR_NO_REF_EX/50     ?96       $8                   ?2                  	;0
8   7    DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
9   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'cli_set_process_title'	;1
10  8    SEND_VAL_EX/116           ?80       11:'XUI[Watch Folder]' ?1                  	;0
11  8    DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
12  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'intval'         	;1
13  9    FETCH_STATIC_PROP_FUNC_ARG/177 $11=      14:'rSettings'       15:'XUI'            	;1
14  9    FETCH_DIM_FUNC_ARG/93     $12=      $11                  17:'scan_seconds'   	;1
15  9    SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
16  9    DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
17  9    JMP_SET/152               #14=      $13                  ?19                 	;0
18  9    QM_ASSIGN/22              #14=      18:3600              ?0                  	;0
19  9    ASSIGN/38                 ?9        16?0                 #14                 	;0
20  10   GOTO/253                  ?0        ?47                  ?19                 	;0
21  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1
22  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'file_get_contents'	;1
23  12   FETCH_CONSTANT/99         #16=      ?0                   24:'CACHE_TMP_PATH' 	;16
24  12   CONCAT/8                  #17=      #16                  27:'watch_pid'      	;0
25  12   SEND_VAL_EX/116           ?80       #17                  ?1                  	;0
26  12   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
27  12   SEND_VAR_NO_REF_EX/50     ?80       $18                  ?1                  	;0
28  12   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
29  12   ASSIGN/38                 ?14       16?1                 $19                 	;0
30  14   JMPZ_EX/46                #21=      16?1                 ?36                 	;0	>>36
31  14   INIT_STATIC_METHOD_CALL/113 ?0        28:'XUI'             30:'E764F10e99c26365'	;2
32  14   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
33  14   SEND_VAL_EX/116           ?96       32:'php'             ?2                  	;0
34  14   DO_FCALL/60               $22=      ?0                   ?0                  	;0
35  14   BOOL/52                   #21=      $22                  ?0                  	;0
36  14   BOOL_NOT/13               #23=      #21                  ?0                  	;0	<<30
37  14   JMPZ/43                   ?0        #23                  ?39                 	;0	>>39
38  15   GOTO/253                  ?0        ?1                   ?33                 	;0
39  17   ECHO/40                   ?0        34:'Watch folder is already running. Please wait until it finishes.
' ?0                  	;0	<<37
40  18   EXIT/79                   ?0        ?0                   ?0                  	;0
41  19   GOTO/253                  ?0        ?1                   ?35                 	;0
42  23   NOP/0                     ?0        ?0                   ?0                  	;0
43  50   NOP/0                     ?0        ?0                   ?0                  	;0
44  137  NOP/0                     ?0        ?0                   ?0                  	;0
45  221  NOP/0                     ?0        ?0                   ?0                  	;0
46  483  GOTO/253                  ?0        ?136                 ?36                 	;0
47  485  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'intval'         	;1
48  485  FETCH_STATIC_PROP_FUNC_ARG/177 $26=      39:'rSettings'       40:'XUI'            	;1
49  485  FETCH_DIM_FUNC_ARG/93     $27=      $26                  42:'thread_count'   	;1
50  485  SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
51  485  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
52  485  JMP_SET/152               #29=      $28                  ?54                 	;0
53  485  QM_ASSIGN/22              #29=      43:50                ?0                  	;0
54  485  ASSIGN/38                 ?24       16?2                 #29                 	;0
55  486  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'intval'         	;1
56  486  FETCH_STATIC_PROP_FUNC_ARG/177 $31=      46:'rSettings'       47:'XUI'            	;1
57  486  FETCH_DIM_FUNC_ARG/93     $32=      $31                  49:'max_items'      	;1
58  486  SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
59  486  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
60  486  JMP_SET/152               #34=      $33                  ?62                 	;0
61  486  QM_ASSIGN/22              #34=      50:0                 ?0                  	;0
62  486  ASSIGN/38                 ?29       16?3                 #34                 	;0
63  487  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'set_time_limit' 	;1
64  487  SEND_VAL_EX/116           ?80       53:0                 ?1                  	;0
65  487  DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
66  488  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'strlen'         	;1
67  488  FETCH_STATIC_PROP_FUNC_ARG/177 $37=      56:'rSettings'       57:'XUI'            	;1
68  488  FETCH_DIM_FUNC_ARG/93     $38=      $37                  59:'tmdb_api_key'   	;1
69  488  SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
70  488  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
71  488  IS_EQUAL/17               #40=      $39                  60:0                	;0
72  488  BOOL_NOT/13               #41=      #40                  ?0                  	;0
73  488  JMPZ/43                   ?0        #41                  ?75                 	;0	>>75
74  489  GOTO/253                  ?0        ?42                  ?61                 	;0
75  491  EXIT/79                   ?0        62:'No TMDb API key.' ?0                  	;0	<<73
76  492  GOTO/253                  ?0        ?42                  ?63                 	;0
77  495  BEGIN_SILENCE/57          #42=      ?0                   ?0                  	;0
78  495  FETCH_R/80                $43=      64:'argc'            ?0                  	;268435456
79  495  END_SILENCE/58            ?0        #42                  ?0                  	;0
80  495  JMPZ/43                   ?0        $43                  ?82                 	;0	>>82
81  496  GOTO/253                  ?0        ?83                  ?65                 	;0
82  498  EXIT/79                   ?0        66:0                 ?0                  	;0	<<80
83  500  INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'register_shutdown_function'	;1
84  500  SEND_VAL_EX/116           ?80       69:'shutdown'        ?1                  	;0
85  500  DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
86  501  GOTO/253                  ?0        ?111                 ?70                 	;0
87  503  INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'ini_set'        	;2	<<0
88  503  SEND_VAL_EX/116           ?80       73:'memory_limit'    ?1                  	;0
89  503  SEND_VAL_EX/116           ?96       74:-1                ?2                  	;0
90  503  DO_FCALL_BY_NAME/131      ?39       ?0                   ?0                  	;0
91  504  INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'setlocale'      	;2
92  504  FETCH_CONSTANT/99         #46=      ?0                   77:'LC_ALL'         	;16
93  504  SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
94  504  SEND_VAL_EX/116           ?96       80:'en_US.UTF-8'     ?2                  	;0
95  504  DO_FCALL_BY_NAME/131      ?41       ?0                   ?0                  	;0
96  505  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'putenv'         	;1
97  505  SEND_VAL_EX/116           ?80       83:'LC_ALL=en_US.UTF-8' ?1                  	;0
98  505  DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
99  506  INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'posix_getpwuid' 	;1
100 506  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'posix_geteuid'  	;0
101 506  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
102 506  SEND_VAR_NO_REF_EX/50     ?80       $49                  ?1                  	;0
103 506  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
104 506  FETCH_DIM_R/81            $51=      $50                  88:'name'           	;0
105 506  IS_NOT_EQUAL/18           #52=      $51                  89:'xui'            	;0
106 506  BOOL_NOT/13               #53=      #52                  ?0                  	;0
107 506  JMPZ/43                   ?0        #53                  ?109                	;0	>>109
108 507  GOTO/253                  ?0        ?77                  ?90                 	;0
109 509  EXIT/79                   ?0        91:'Please run as XUI!
' ?0                  	;0	<<107
110 510  GOTO/253                  ?0        ?77                  ?92                 	;0
111 512  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'str_replace'    	;3
112 512  SEND_VAL_EX/116           ?80       95:'\\'              ?1                  	;0
113 512  SEND_VAL_EX/116           ?96       96:'/'               ?2                  	;0
114 512  INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'dirname'        	;1
115 512  FETCH_DIM_FUNC_ARG/93     $54=      16?4                 99:0                	;1
116 512  SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
117 512  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
118 512  SEND_VAR_NO_REF_EX/50     ?112      $55                  ?3                  	;0
119 512  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
120 512  CONCAT/8                  #57=      $56                  100:'/../www/init.php'	;0
121 512  INCLUDE_OR_EVAL/73        ?52       #57                  ?0                  	;8
122 513  ASSIGN/38                 ?53       16?5                 101:NULL            	;0
123 514  INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'count'         	;1
124 514  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
125 514  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
126 514  IS_EQUAL/17               #61=      $60                  104:2               	;0
127 514  BOOL_NOT/13               #62=      #61                  ?0                  	;0
128 514  JMPZ/43                   ?0        #62                  ?130                	;0	>>130
129 515  GOTO/253                  ?0        ?135                 ?105                	;0
130 517  INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'intval'        	;1	<<128
131 517  FETCH_DIM_FUNC_ARG/93     $63=      16?4                 108:1               	;1
132 517  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
133 517  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
134 517  ASSIGN/38                 ?59       16?5                 $64                 	;0
135 519  GOTO/253                  ?0        ?141                 ?109                	;0
136 521  INIT_FCALL/61             ?0        ?5232                110:'ab8369074df2aaa3'	;0
137 521  DO_FCALL/60               ?60       ?0                   ?0                  	;0
138 523  NOP/0                     ?0        ?0                   ?0                  	;0
139 535  NOP/0                     ?0        ?0                   ?0                  	;0
140 593  GOTO/253                  ?0        ?153                 ?111                	;0
141 595  JMPZ/43                   ?0        16?5                 ?143                	;0	>>143
142 596  GOTO/253                  ?0        ?1                   ?112                	;0
143 598  INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'file_exists'   	;1	<<141
144 598  FETCH_CONSTANT/99         #67=      ?0                   115:'CACHE_TMP_PATH'	;16
145 598  CONCAT/8                  #68=      #67                  118:'watch_pid'     	;0
146 598  SEND_VAL_EX/116           ?80       #68                  ?1                  	;0
147 598  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
148 598  JMPZ/43                   ?0        $69                  ?150                	;0	>>150
149 599  GOTO/253                  ?0        ?152                 ?119                	;0
150 601  ASSIGN/38                 ?64       16?1                 120:NULL            	;0	<<148
151 602  GOTO/253                  ?0        ?30                  ?121                	;0
152 604  GOTO/253                  ?0        ?21                  ?122                	;0
153 606  NOP/0                     ?0        ?0                   ?0                  	;0
154 616  NOP/0                     ?0        123:1                ?0                  	;4294967295
*/

?>