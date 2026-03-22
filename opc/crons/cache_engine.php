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
		0  32  ASSIGN_OBJ/136            ?0        ?4392929             0:'process'         	;0
		1  32  OP_DATA/137               ?0        1:0                  ?0                  	;0
		2  33  ASSIGN_OBJ/136            ?1        ?4392929             2:'buffer'          	;0
		3  33  OP_DATA/137               ?0        3:''                 ?0                  	;0
		4  34  CAST/21                   #3=       5:NULL               ?0                  	;7
		5  34  ASSIGN_OBJ/136            ?2        ?1666998752          4:'pipes'           	;0
		6  34  OP_DATA/137               ?0        #3                   ?0                  	;0
		7  35  ASSIGN_OBJ/136            ?4        ?1666998752          6:'output'          	;0
		8  35  OP_DATA/137               ?0        7:''                 ?0                  	;0
		9  36  ASSIGN_OBJ/136            ?5        ?1666998560          8:'error'           	;0
		10 36  OP_DATA/137               ?0        9:''                 ?0                  	;0
		11 37  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'time'           	;0
		12 37  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		13 37  ASSIGN_OBJ/136            ?6        ?1666998464          10:'start_time'     	;0
		14 37  OP_DATA/137               ?0        $7                   ?0                  	;0
		15 38  ASSIGN_OBJ/136            ?8        ?1666998464          13:'timeout'        	;0
		16 38  OP_DATA/137               ?0        14:0                 ?0                  	;0
		17 39  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	static public function create($cf988e3af7ebcffb)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  40  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  42  NEW/68                    $3=       0:'Thread'           ?64                 	;0
		2  42  DO_FCALL/60               ?1        ?8                   ?0                  	;0
		3  42  ASSIGN/38                 ?2        16?1                 $3                  	;0
		4  43  ASSIGN/38                 ?3        16?2                 2:array (
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
		5  44  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'proc_open'       	;3
		6  44  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		7  44  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
		8  44  FETCH_OBJ_FUNC_ARG/94     $8=       16?1                 6:'pipes'           	;3
		9  44  SEND_VAR_EX/66            ?112      $8                   ?3                  	;0
		10 44  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		11 44  ASSIGN_OBJ/136            ?4        16?1                 3:'process'         	;0
		12 44  OP_DATA/137               ?0        $9                   ?0                  	;0
		13 45  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'stream_set_blocking'	;2
		14 45  FETCH_OBJ_FUNC_ARG/94     $10=      16?1                 9:'pipes'           	;1
		15 45  FETCH_DIM_FUNC_ARG/93     $11=      $10                  10:1                	;1
		16 45  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
		17 45  SEND_VAL_EX/116           ?96       11:0                 ?2                  	;0
		18 45  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
		19 46  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'stream_set_blocking'	;2
		20 46  FETCH_OBJ_FUNC_ARG/94     $13=      16?1                 14:'pipes'          	;1
		21 46  FETCH_DIM_FUNC_ARG/93     $14=      $13                  15:2                	;1
		22 46  SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
		23 46  SEND_VAL_EX/116           ?96       16:0                 ?2                  	;0
		24 46  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
		25 47  RETURN/62                 ?0        16?1                 ?0                  	;0
		26 48  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
		*/
	}

	public function isActive()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  52  INIT_METHOD_CALL/112      ?0        ?25165824            1:'listen'          	;0
		1  52  DO_FCALL/60               $2=       ?0                   ?0                  	;0
		2  52  ASSIGN_CONCAT/30          ?0        ?4583821             0:'buffer'          	;136
		3  52  OP_DATA/137               ?0        $2                   ?0                  	;0
		4  53  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'stream_get_meta_data'	;1
		5  53  FETCH_OBJ_FUNC_ARG/94     $3=       ?2670193520          5:'pipes'           	;1
		6  53  FETCH_DIM_FUNC_ARG/93     $4=       $3                   6:1                 	;1
		7  53  SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		8  53  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		9  53  ASSIGN/38                 ?5        16?0                 $5                  	;0
		10 54  FETCH_DIM_R/81            $7=       16?0                 7:'eof'             	;0
		11 54  BOOL_NOT/13               #8=       $7                   ?0                  	;0
		12 54  RETURN/62                 ?0        #8                   ?0                  	;0
		13 55  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
		*/
	}

	public function close()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  59  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'proc_close'      	;1
		1  59  FETCH_OBJ_FUNC_ARG/94     $1=       ?4583821             2:'process'         	;1
		2  59  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		3  59  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4  59  ASSIGN/38                 ?2        16?0                 $2                  	;0
		5  60  ASSIGN_OBJ/136            ?3        ?2670194144          3:'process'         	;0
		6  60  OP_DATA/137               ?0        4:NULL               ?0                  	;0
		7  61  RETURN/62                 ?0        16?0                 ?0                  	;0
		8  62  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
		*/
	}

	public function tell($d54465d2b0bf2a63)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  64  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  66  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'fwrite'          	;2
		2  66  FETCH_OBJ_FUNC_ARG/94     $1=       ?28343088            2:'pipes'           	;1
		3  66  FETCH_DIM_FUNC_ARG/93     $2=       $1                   3:0                 	;1
		4  66  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		5  66  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		6  66  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
		7  67  NOP/0                     ?0        4:NULL               ?0                  	;4294967295
		*/
	}

	public function listen()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  71  FETCH_OBJ_R/82            $2=       ?4430313             0:'buffer'          	;0
		1  71  ASSIGN/38                 ?1        16?0                 $2                  	;0
		2  72  ASSIGN_OBJ/136            ?2        ?2670194144          1:'buffer'          	;0
		3  72  OP_DATA/137               ?0        2:''                 ?0                  	;0
		4  74  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'fgets'           	;2
		5  74  FETCH_OBJ_FUNC_ARG/94     $5=       ?1682987690          5:'pipes'           	;1
		6  74  FETCH_DIM_FUNC_ARG/93     $6=       $5                   6:1                 	;1
		7  74  SEND_VAR_EX/66            ?80       $6                   ?1                  	;0
		8  74  SEND_VAL_EX/116           ?96       7:1024               ?2                  	;0
		9  74  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
		10 74  ASSIGN/38                 $8=       16?1                 $7                  	;0
		11 74  BOOL_NOT/13               #9=       $8                   ?0                  	;0
		12 74  JMPZ/43                   ?0        #9                   ?14                 	;0	>>14
		13 75  GOTO/253                  ?0        ?18                  ?8                  	;0
		14 77  ASSIGN_CONCAT/30          ?8        16?0                 16?1                	;0	<<12
		15 78  ASSIGN_CONCAT/30          ?9        ?2670194144          9:'output'          	;136
		16 78  OP_DATA/137               ?0        16?1                 ?0                  	;0
		17 79  GOTO/253                  ?0        ?4                   ?10                 	;0
		18 81  RETURN/62                 ?0        16?0                 ?0                  	;0
		19 82  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}

	public function getStatus()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  86  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'proc_get_status' 	;1
		1  86  FETCH_OBJ_FUNC_ARG/94     $0=       ?5                   2:'process'         	;1
		2  86  SEND_VAR_EX/66            ?80       $0                   ?1                  	;0
		3  86  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
		4  86  RETURN/62                 ?0        $1                   ?0                  	;0
		5  87  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function isBusy()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  91  FETCH_OBJ_R/82            $0=       ?4443006             0:'timeout'         	;0
		1  91  IS_SMALLER/19             #1=       1:0                  $0                  	;0
		2  91  JMPZ_EX/46                #1=       #1                   ?10                 	;0	>>10
		3  91  FETCH_OBJ_R/82            $2=       ?3                   2:'start_time'      	;0
		4  91  FETCH_OBJ_R/82            $3=       ?3                   3:'timeout'         	;0
		5  91  ADD/1                     #4=       $2                   $3                  	;0
		6  91  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'time'            	;0
		7  91  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		8  91  IS_SMALLER/19             #6=       #4                   $5                  	;0
		9  91  BOOL/52                   #1=       #6                   ?0                  	;0
		10 91  RETURN/62                 ?0        #1                   ?0                  	;0	<<2
		11 92  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
		*/
	}

	public function getError()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   96   ASSIGN/38                 ?0        16?0                 0:''                	;0
		1   98   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'fgets'           	;2
		2   98   FETCH_OBJ_FUNC_ARG/94     $3=       ?4431760             3:'pipes'           	;1
		3   98   FETCH_DIM_FUNC_ARG/93     $4=       $3                   4:2                 	;1
		4   98   SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
		5   98   SEND_VAL_EX/116           ?96       5:1024               ?2                  	;0
		6   98   DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
		7   98   ASSIGN/38                 $6=       16?1                 $5                  	;0
		8   98   BOOL_NOT/13               #7=       $6                   ?0                  	;0
		9   98   JMPZ/43                   ?0        #7                   ?11                 	;0	>>11
		10  99   GOTO/253                  ?0        ?13                  ?6                  	;0
		11  101  ASSIGN_CONCAT/30          ?6        16?0                 16?1                	;0	<<9
		12  102  GOTO/253                  ?0        ?1                   ?7                  	;0
		13  104  RETURN/62                 ?0        16?0                 ?0                  	;0
		14  105  NOP/0                     ?0        8:NULL               ?0                  	;4294967295
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
		0   116  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   116  RECV_INIT/64              16?1=     ?2                   0:0                 	;0
		2   118  IS_SMALLER/19             #5=       2:0                  16?1                	;0
		3   118  ASSIGN_OBJ/136            ?0        ?1666045200          1:'hasPool'         	;0
		4   118  OP_DATA/137               ?0        #5                   ?0                  	;0
		5   119  FETCH_OBJ_R/82            $6=       ?4435467             3:'hasPool'         	;0
		6   119  BOOL_NOT/13               #7=       $6                   ?0                  	;0
		7   119  JMPZ/43                   ?0        #7                   ?9                  	;0	>>9
		8   120  GOTO/253                  ?0        ?15                  ?4                  	;0
		9   122  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'array_splice'    	;2	<<7
		10  122  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		11  122  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		12  122  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		13  122  ASSIGN_OBJ/136            ?4        ?8                   5:'toExecuted'      	;0
		14  122  OP_DATA/137               ?0        $9                   ?0                  	;0
		15  124  ASSIGN_OBJ/136            ?6        ?8                   8:'commands'        	;0
		16  124  OP_DATA/137               ?0        16?0                 ?0                  	;0
		17  125  FETCH_OBJ_R/82            $11=      ?4583821             9:'commands'        	;0
		18  125  FE_RESET_R/77             $12=      $11                  ?28                 	;0
		19  125  FE_FETCH_R/78             #13=      $12                  16?2                	;28	>>28	<<27
		20  125  ASSIGN/38                 ?10       16?3                 #13                 	;0
		21  126  INIT_STATIC_METHOD_CALL/113 ?0        11:'Thread'          13:'create'         	;1
		22  126  SEND_VAR/117              ?80       16?2                 ?1                  	;0
		23  126  DO_FCALL/60               $17=      ?0                   ?0                  	;0
		24  126  FETCH_OBJ_W/85            $15=      ?2670194048          10:'thread'         	;0
		25  126  ASSIGN_DIM/147            ?12       $15                  16?3                	;0
		26  126  OP_DATA/137               ?0        $17                  ?0                  	;0
		27  127  JMP/42                    ?0        ?19                  ?0                  	;0	>>19
		28  127  FE_FREE/127               ?0        $12                  ?0                  	;0	<<18
		29  130  NOP/0                     ?0        15:NULL              ?0                  	;4294967295
		*/
	}

	public function run()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   135  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'count'           	;1
		1   135  FETCH_OBJ_FUNC_ARG/94     $2=       ?1679832016          2:'commands'        	;1
		2   135  SEND_VAR_EX/66            ?80       $2                   ?1                  	;0
		3   135  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
		4   135  IS_SMALLER/19             #4=       3:0                  $3                  	;0
		5   135  BOOL_NOT/13               #5=       #4                   ?0                  	;0
		6   135  JMPZ/43                   ?0        #5                   ?8                  	;0	>>8
		7   136  GOTO/253                  ?0        ?83                  ?4                  	;0
		8   138  FETCH_OBJ_R/82            $6=       ?4583821             5:'commands'        	;0	<<6
		9   138  FE_RESET_R/77             $7=       $6                   ?81                 	;0
		10  138  FE_FETCH_R/78             #8=       $7                   16?0                	;81	>>81	<<80
		11  138  ASSIGN/38                 ?7        16?1                 #8                  	;0
		12  139  NOP/0                     ?0        ?0                   ?0                  	;1
		13  139  GOTO/253                  ?0        ?47                  ?6                  	;0
		14  142  NOP/0                     ?0        ?0                   ?0                  	;1
		15  142  GOTO/253                  ?0        ?80                  ?7                  	;0
		16  144  FETCH_OBJ_R/82            $10=      ?4442274             8:'thread'          	;0
		17  144  FETCH_DIM_R/81            $11=      $10                  16?1                	;0
		18  144  INIT_METHOD_CALL/112      ?0        $11                  9:'close'           	;0
		19  144  DO_FCALL/60               ?10       ?0                   ?0                  	;0
		20  145  FETCH_OBJ_UNSET/97        $13=      ?4443006             11:'commands'       	;0
		21  145  UNSET_DIM/75              ?0        $13                  16?1                	;0
		22  146  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 12:'launchNextInQueue'	;0
		23  146  DO_FCALL/60               ?12       ?0                   ?0                  	;0
		24  149  NOP/0                     ?0        ?0                   ?0                  	;1
		25  149  GOTO/253                  ?0        ?14                  ?14                 	;0
		26  151  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 15:'launchNextInQueue'	;0
		27  151  DO_FCALL/60               ?13       ?0                   ?0                  	;0
		28  152  NOP/0                     ?0        ?0                   ?0                  	;1
		29  152  GOTO/253                  ?0        ?24                  ?17                 	;0
		30  154  FETCH_OBJ_R/82            $18=      ?2670193040          19:'thread'         	;0
		31  154  FETCH_DIM_R/81            $19=      $18                  16?1                	;0
		32  154  INIT_METHOD_CALL/112      ?0        $19                  20:'listen'         	;0
		33  154  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		34  154  FETCH_OBJ_RW/88           $16=      ?2670193664          18:'output'         	;0
		35  154  ASSIGN_CONCAT/30          ?15       $16                  16?1                	;147
		36  154  OP_DATA/137               ?0        $20                  ?0                  	;0
		37  155  FETCH_OBJ_R/82            $21=      ?1667169312          22:'thread'         	;0
		38  155  FETCH_DIM_R/81            $22=      $21                  16?1                	;0
		39  155  INIT_METHOD_CALL/112      ?0        $22                  23:'isBusy'         	;0
		40  155  DO_FCALL/60               $23=      ?0                   ?0                  	;0
		41  155  BOOL_NOT/13               #24=      $23                  ?0                  	;0
		42  155  JMPZ/43                   ?0        #24                  ?45                 	;0	>>45
		43  156  NOP/0                     ?0        ?0                   ?0                  	;1
		44  156  GOTO/253                  ?0        ?24                  ?25                 	;0
		45  158  NOP/0                     ?0        ?0                   ?0                  	;1	<<42
		46  158  GOTO/253                  ?0        ?16                  ?26                 	;0
		47  160  BEGIN_SILENCE/57          #25=      ?0                   ?0                  	;0
		48  160  FETCH_OBJ_R/82            $28=      ?4583821             28:'thread'         	;0
		49  160  FETCH_DIM_R/81            $29=      $28                  16?1                	;0
		50  160  INIT_METHOD_CALL/112      ?0        $29                  29:'listen'         	;0
		51  160  DO_FCALL/60               $30=      ?0                   ?0                  	;0
		52  160  FETCH_OBJ_RW/88           $26=      ?0                   27:'output'         	;0
		53  160  ASSIGN_CONCAT/30          ?25       $26                  16?1                	;147
		54  160  OP_DATA/137               ?0        $30                  ?0                  	;0
		55  160  END_SILENCE/58            ?0        #25                  ?0                  	;0
		56  161  BEGIN_SILENCE/57          #31=      ?0                   ?0                  	;0
		57  161  FETCH_OBJ_R/82            $34=      ?4583821             32:'thread'         	;0
		58  161  FETCH_DIM_R/81            $35=      $34                  16?1                	;0
		59  161  INIT_METHOD_CALL/112      ?0        $35                  33:'getError'       	;0
		60  161  DO_FCALL/60               $36=      ?0                   ?0                  	;0
		61  161  FETCH_OBJ_RW/88           $32=      ?52                  31:'error'          	;0
		62  161  ASSIGN_CONCAT/30          ?31       $32                  16?1                	;147
		63  161  OP_DATA/137               ?0        $36                  ?0                  	;0
		64  161  END_SILENCE/58            ?0        #31                  ?0                  	;0
		65  162  FETCH_OBJ_R/82            $37=      ?4534362             35:'thread'         	;0
		66  162  FETCH_DIM_R/81            $38=      $37                  16?1                	;0
		67  162  INIT_METHOD_CALL/112      ?0        $38                  36:'isActive'       	;0
		68  162  DO_FCALL/60               $39=      ?0                   ?0                  	;0
		69  162  JMPZ/43                   ?0        $39                  ?72                 	;0	>>72
		70  163  NOP/0                     ?0        ?0                   ?0                  	;1
		71  163  GOTO/253                  ?0        ?30                  ?38                 	;0
		72  165  FETCH_OBJ_R/82            $40=      ?162                 39:'thread'         	;0	<<69
		73  165  FETCH_DIM_R/81            $41=      $40                  16?1                	;0
		74  165  INIT_METHOD_CALL/112      ?0        $41                  40:'close'          	;0
		75  165  DO_FCALL/60               ?40       ?0                   ?0                  	;0
		76  166  FETCH_OBJ_UNSET/97        $43=      ?4443006             42:'commands'       	;0
		77  166  UNSET_DIM/75              ?0        $43                  16?1                	;0
		78  167  NOP/0                     ?0        ?0                   ?0                  	;1
		79  167  GOTO/253                  ?0        ?26                  ?43                 	;0
		80  168  JMP/42                    ?0        ?10                  ?0                  	;0	>>10
		81  168  FE_FREE/127               ?0        $7                   ?0                  	;0	<<9
		82  171  GOTO/253                  ?0        ?0                   ?44                 	;0
		83  173  FETCH_OBJ_R/82            $44=      ?26                  45:'output'         	;0
		84  173  RETURN/62                 ?0        $44                  ?0                  	;0
		85  174  NOP/0                     ?0        46:NULL              ?0                  	;4294967295
		*/
	}

	public function launchNextInQueue()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   178  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'count'           	;1
		1   178  FETCH_OBJ_FUNC_ARG/94     $1=       ?4294967295          2:'toExecuted'      	;1
		2   178  SEND_VAR_EX/66            ?80       $1                   ?1                  	;0
		3   178  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
		4   178  IS_EQUAL/17               #3=       $2                   3:0                 	;0
		5   178  BOOL_NOT/13               #4=       #3                   ?0                  	;0
		6   178  JMPZ/43                   ?0        #4                   ?8                  	;0	>>8
		7   179  GOTO/253                  ?0        ?9                   ?4                  	;0
		8   181  RETURN/62                 ?0        5:true               ?0                  	;0	<<6
		9   183  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'reset'           	;1
		10  183  FETCH_OBJ_FUNC_ARG/94     $5=       ?4294967295          8:'toExecuted'      	;1
		11  183  SEND_VAR_EX/66            ?80       $5                   ?1                  	;0
		12  183  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
		13  184  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'key'             	;1
		14  184  FETCH_OBJ_FUNC_ARG/94     $7=       ?2670193776          11:'toExecuted'     	;1
		15  184  SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
		16  184  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		17  184  ASSIGN/38                 ?8        16?0                 $8                  	;0
		18  185  FETCH_OBJ_R/82            $12=      ?1663068264          13:'toExecuted'     	;0
		19  185  FETCH_DIM_R/81            $13=      $12                  16?0                	;0
		20  185  FETCH_OBJ_W/85            $10=      ?1663068336          12:'commands'       	;0
		21  185  ASSIGN_DIM/147            ?10       $10                  16?0                	;0
		22  185  OP_DATA/137               ?0        $13                  ?0                  	;0
		23  186  INIT_STATIC_METHOD_CALL/113 ?0        15:'Thread'          17:'create'         	;1
		24  186  FETCH_OBJ_R/82            $16=      ?1                   19:'toExecuted'     	;0
		25  186  FETCH_DIM_R/81            $17=      $16                  16?0                	;0
		26  186  SEND_VAR/117              ?80       $17                  ?1                  	;0
		27  186  DO_FCALL/60               $18=      ?0                   ?0                  	;0
		28  186  FETCH_OBJ_W/85            $14=      ?20                  14:'thread'         	;0
		29  186  ASSIGN_DIM/147            ?14       $14                  16?0                	;0
		30  186  OP_DATA/137               ?0        $18                  ?0                  	;0
		31  187  FETCH_OBJ_UNSET/97        $19=      ?4397406             20:'toExecuted'     	;0
		32  187  UNSET_DIM/75              ?0        $19                  16?0                	;0
		33  188  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
		*/
	}
}

function generateLines($bcfd61adc96d4b72, $d353a4da8a0bb857, $c25b0e09d8039d97)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   191  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
	1   191  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
	2   191  RECV_INIT/64              16?2=     ?3                   2:array (
)         	;0
	3   193  GOTO/253                  ?0        ?27                  ?3                  	;0
	4   195  JMPZ/43                   ?0        16?3                 ?6                  	;0	>>6
	5   196  GOTO/253                  ?0        ?8                   ?4                  	;0
	6   198  INIT_ARRAY/71             #13=      16?0                 ?0                  	;4	<<4
	7   198  ASSIGN/38                 ?1        16?3                 #13                 	;0
	8   201  ASSIGN/38                 ?2        16?4                 5:array (
)         	;0
	9   202  GOTO/253                  ?0        ?46                  ?6                  	;0
	10  204  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_null'         	;1
	11  204  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	12  204  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	13  204  BOOL_NOT/13               #17=      $16                  ?0                  	;0
	14  204  JMPZ/43                   ?0        #17                  ?16                 	;0	>>16
	15  205  GOTO/253                  ?0        ?18                  ?9                  	;0
	16  207  ASSIGN/38                 ?5        16?3                 10:array (
  0 => NULL,
)	;0	<<14
	17  208  GOTO/253                  ?0        ?8                   ?11                 	;0
	18  210  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'range'          	;3
	19  210  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	20  210  ADD/1                     #19=      16?0                 16?1                	;0
	21  210  SUB/2                     #20=      #19                  14:1                	;0
	22  210  SEND_VAL_EX/116           ?96       #20                  ?2                  	;0
	23  210  SEND_VAR_EX/66            ?112      16?5                 ?3                  	;0
	24  210  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	25  210  ASSIGN/38                 ?9        16?3                 $21                 	;0
	26  211  GOTO/253                  ?0        ?4                   ?15                 	;0
	27  213  BIND_GLOBAL/168           ?0        16?6                 16:'b62d6460eb33ea07'	;0
	28  213  BIND_GLOBAL/168           ?0        16?5                 17:'E3665d09b9cea208'	;0
	29  213  BIND_GLOBAL/168           ?0        16?7                 18:'ebb4852f69f0dca0'	;0
	30  214  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'is_null'        	;1
	31  214  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	32  214  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	33  214  BOOL_NOT/13               #24=      $23                  ?0                  	;0
	34  214  JMPZ/43                   ?0        #24                  ?36                 	;0	>>36
	35  215  GOTO/253                  ?0        ?40                  ?21                 	;0
	36  217  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'count'          	;1	<<34
	37  217  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	38  217  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	39  217  ASSIGN/38                 ?13       16?1                 $25                 	;0
	40  219  IS_SMALLER/19             #27=      24:0                 16?1                	;0
	41  219  BOOL_NOT/13               #28=      #27                  ?0                  	;0
	42  219  JMPZ/43                   ?0        #28                  ?44                 	;0	>>44
	43  220  GOTO/253                  ?0        ?45                  ?25                 	;0
	44  222  GOTO/253                  ?0        ?10                  ?26                 	;0	<<42
	45  226  GOTO/253                  ?0        ?210                 ?27                 	;0
	46  228  FE_RESET_R/77             $29=      16?3                 ?174                	;0
	47  228  FE_FETCH_R/78             ?0        $29                  16?8                	;174	>>174	<<173
	48  229  NOP/0                     ?0        ?0                   ?0                  	;1
	49  229  GOTO/253                  ?0        ?147                 ?28                 	;0
	50  233  ASSIGN_OBJ/136            ?17       16?6                 29:'result'         	;0
	51  233  OP_DATA/137               ?0        30:NULL              ?0                  	;0
	52  236  NOP/0                     ?0        ?0                   ?0                  	;1
	53  236  GOTO/253                  ?0        ?173                 ?31                 	;0
	54  238  ASSIGN/38                 ?18       16?9                 16?5                	;0
	55  239  NOP/0                     ?0        ?0                   ?0                  	;1
	56  239  GOTO/253                  ?0        ?60                  ?32                 	;0
	57  241  ADD/1                     #32=      16?0                 16?1                	;0
	58  241  SUB/2                     #33=      #32                  16?8                	;0
	59  241  ASSIGN/38                 ?21       16?9                 #33                 	;0
	60  243  NOP/0                     ?0        ?0                   ?0                  	;1
	61  243  GOTO/253                  ?0        ?62                  ?33                 	;0
	62  245  INIT_METHOD_CALL/112      ?0        16?6                 34:'query'          	;1
	63  245  CONCAT/8                  #35=      36:'SELECT `id`, `username`, `password`, `exp_date`, `created_at`, `admin_enabled`, `enabled`, `bouquet`, `allowed_outputs`, `max_connections`, `is_trial`, `is_restreamer`, `is_stalker`, `is_mag`, `is_e2`, `is_isplock`, `allowed_ips`, `allowed_ua`, `pair_id`, `force_server_id`, `isp_desc`, `forced_country`, `bypass_ua`, `last_expiration_video`, `access_token`, `mag_devices`.`token` AS `mag_token`, `admin_notes`, `reseller_notes` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LIMIT ' 16?8                	;0
	64  245  CONCAT/8                  #36=      #35                  37:', '             	;0
	65  245  CONCAT/8                  #37=      #36                  16?9                	;0
	66  245  CONCAT/8                  #38=      #37                  38:';'              	;0
	67  245  SEND_VAL_EX/116           ?80       #38                  ?1                  	;0
	68  245  DO_FCALL/60               ?26       ?0                   ?0                  	;0
	69  247  FETCH_OBJ_R/82            $40=      16?6                 39:'result'         	;0
	70  247  BOOL_NOT/13               #41=      $40                  ?0                  	;0
	71  247  JMPZ/43                   ?0        #41                  ?74                 	;0	>>74
	72  248  NOP/0                     ?0        ?0                   ?0                  	;1
	73  248  GOTO/253                  ?0        ?52                  ?40                 	;0
	74  250  FETCH_OBJ_R/82            $42=      16?6                 41:'result'         	;0	<<71
	75  250  INIT_METHOD_CALL/112      ?0        $42                  42:'rowCount'       	;0
	76  250  DO_FCALL/60               $43=      ?0                   ?0                  	;0
	77  250  IS_SMALLER/19             #44=      44:0                 $43                 	;0
	78  250  BOOL_NOT/13               #45=      #44                  ?0                  	;0
	79  250  JMPZ/43                   ?0        #45                  ?82                 	;0	>>82
	80  251  NOP/0                     ?0        ?0                   ?0                  	;1
	81  251  GOTO/253                  ?0        ?50                  ?45                 	;0
	82  253  FETCH_OBJ_R/82            $46=      16?6                 46:'result'         	;0	<<79
	83  253  INIT_METHOD_CALL/112      ?0        $46                  47:'fetchAll'       	;1
	84  253  FETCH_CLASS_CONSTANT/181  #47=      50:'PDO'             49:'FETCH_ASSOC'    	;0
	85  253  SEND_VAL_EX/116           ?80       #47                  ?1                  	;0
	86  253  DO_FCALL/60               $48=      ?0                   ?0                  	;0
	87  253  FE_RESET_R/77             $49=      $48                  ?144                	;0
	88  253  FE_FETCH_R/78             ?0        $49                  16?10               	;144	>>144	<<143
	89  254  FETCH_DIM_R/81            $51=      16?10                52:'id'             	;0
	90  254  ASSIGN_DIM/147            ?37       16?4                 ?1663076512         	;0
	91  254  OP_DATA/137               ?0        $51                  ?0                  	;0
	92  255  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'file_put_contents'	;2
	93  255  FETCH_CONSTANT/99         #52=      ?0                   55:'LINES_TMP_PATH' 	;16
	94  255  CONCAT/8                  #53=      #52                  58:'line_i_'        	;0
	95  255  FETCH_DIM_R/81            $54=      16?10                59:'id'             	;0
	96  255  CONCAT/8                  #55=      #53                  $54                 	;0
	97  255  SEND_VAL_EX/116           ?80       #55                  ?1                  	;0
	98  255  INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'igbinary_serialize'	;1
	99  255  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	100 255  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
	101 255  SEND_VAR_NO_REF_EX/50     ?96       $56                  ?2                  	;0
	102 255  DO_FCALL_BY_NAME/131      ?44       ?0                   ?0                  	;0
	103 256  FETCH_STATIC_PROP_R/173   $58=      62:'rSettings'       63:'XUI'            	;0
	104 256  FETCH_DIM_R/81            $59=      $58                  65:'case_sensitive_line'	;0
	105 256  JMPZ/43                   ?0        $59                  ?112                	;0	>>112
	106 256  FETCH_DIM_R/81            $60=      16?10                66:'username'       	;0
	107 256  CONCAT/8                  #61=      $60                  67:'_'              	;0
	108 256  FETCH_DIM_R/81            $62=      16?10                68:'password'       	;0
	109 256  CONCAT/8                  #63=      #61                  $62                 	;0
	110 256  QM_ASSIGN/22              #64=      #63                  ?0                  	;0
	111 256  JMP/42                    ?0        ?120                 ?0                  	;0	>>120
	112 256  INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'strtolower'     	;1	<<105
	113 256  FETCH_DIM_R/81            $65=      16?10                71:'username'       	;0
	114 256  CONCAT/8                  #66=      $65                  72:'_'              	;0
	115 256  FETCH_DIM_R/81            $67=      16?10                73:'password'       	;0
	116 256  CONCAT/8                  #68=      #66                  $67                 	;0
	117 256  SEND_VAL_EX/116           ?80       #68                  ?1                  	;0
	118 256  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
	119 256  QM_ASSIGN/22              #64=      $69                  ?0                  	;0
	120 256  ASSIGN/38                 ?57       16?11                #64                 	;0	<<111
	121 257  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'file_put_contents'	;2
	122 257  FETCH_CONSTANT/99         #71=      ?0                   76:'LINES_TMP_PATH' 	;16
	123 257  CONCAT/8                  #72=      #71                  79:'line_c_'        	;0
	124 257  CONCAT/8                  #73=      #72                  16?11               	;0
	125 257  SEND_VAL_EX/116           ?80       #73                  ?1                  	;0
	126 257  FETCH_DIM_FUNC_ARG/93     $74=      16?10                80:'id'             	;2
	127 257  SEND_VAR_EX/66            ?96       $74                  ?2                  	;0
	128 257  DO_FCALL_BY_NAME/131      ?62       ?0                   ?0                  	;0
	129 258  ISSET_ISEMPTY_DIM_OBJ/115 #76=      16?10                81:'access_token'   	;16777216
	130 258  JMPZ/43                   ?0        #76                  ?134                	;0	>>134
	131 259  NOP/0                     ?0        ?0                   ?0                  	;1
	132 259  NOP/0                     ?0        ?0                   ?0                  	;1
	133 259  GOTO/253                  ?0        ?143                 ?82                 	;0
	134 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'file_put_contents'	;2	<<130
	135 261  FETCH_CONSTANT/99         #77=      ?0                   85:'LINES_TMP_PATH' 	;16
	136 261  CONCAT/8                  #78=      #77                  88:'line_t_'        	;0
	137 261  FETCH_DIM_R/81            $79=      16?10                89:'access_token'   	;0
	138 261  CONCAT/8                  #80=      #78                  $79                 	;0
	139 261  SEND_VAL_EX/116           ?80       #80                  ?1                  	;0
	140 261  FETCH_DIM_FUNC_ARG/93     $81=      16?10                90:'id'             	;2
	141 261  SEND_VAR_EX/66            ?96       $81                  ?2                  	;0
	142 261  DO_FCALL_BY_NAME/131      ?69       ?0                   ?0                  	;0
	143 263  JMP/42                    ?0        ?88                  ?0                  	;0	>>88
	144 263  FE_FREE/127               ?0        $49                  ?0                  	;0	<<87
	145 265  NOP/0                     ?0        ?0                   ?0                  	;1
	146 265  GOTO/253                  ?0        ?50                  ?91                 	;0
	147 267  INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'is_null'        	;1
	148 267  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	149 267  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
	150 267  BOOL_NOT/13               #84=      $83                  ?0                  	;0
	151 267  JMPZ/43                   ?0        #84                  ?154                	;0	>>154
	152 268  NOP/0                     ?0        ?0                   ?0                  	;1
	153 268  GOTO/253                  ?0        ?165                 ?94                 	;0
	154 270  INIT_METHOD_CALL/112      ?0        16?6                 95:'query'          	;1	<<151
	155 270  INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'implode'        	;2
	156 270  SEND_VAL_EX/116           ?80       99:','               ?1                  	;0
	157 270  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	158 270  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
	159 270  CONCAT/8                  #86=      100:'SELECT `id`, `username`, `password`, `exp_date`, `created_at`, `admin_enabled`, `enabled`, `bouquet`, `allowed_outputs`, `max_connections`, `is_trial`, `is_restreamer`, `is_stalker`, `is_mag`, `is_e2`, `is_isplock`, `allowed_ips`, `allowed_ua`, `pair_id`, `force_server_id`, `isp_desc`, `forced_country`, `bypass_ua`, `last_expiration_video`, `access_token`, `mag_devices`.`token` AS `mag_token`, `admin_notes`, `reseller_notes` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` WHERE `id` IN (' $85                 	;0
	160 270  CONCAT/8                  #87=      #86                  101:');'            	;0
	161 270  SEND_VAL_EX/116           ?80       #87                  ?1                  	;0
	162 270  DO_FCALL/60               ?75       ?0                   ?0                  	;0
	163 271  NOP/0                     ?0        ?0                   ?0                  	;1
	164 271  GOTO/253                  ?0        ?69                  ?102                	;0
	165 273  ADD/1                     #89=      16?8                 16?5                	;0
	166 273  ADD/1                     #90=      16?0                 16?1                	;0
	167 273  IS_SMALLER/19             #91=      #90                  #89                 	;0
	168 273  JMPZ/43                   ?0        #91                  ?171                	;0	>>171
	169 274  NOP/0                     ?0        ?0                   ?0                  	;1
	170 274  GOTO/253                  ?0        ?57                  ?103                	;0
	171 276  NOP/0                     ?0        ?0                   ?0                  	;1	<<168
	172 276  GOTO/253                  ?0        ?54                  ?104                	;0
	173 277  JMP/42                    ?0        ?47                  ?0                  	;0	>>47
	174 277  FE_FREE/127               ?0        $29                  ?0                  	;0	<<46
	175 280  INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'count'         	;1
	176 280  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	177 280  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	178 280  IS_SMALLER/19             #93=      107:0                $92                 	;0
	179 280  BOOL_NOT/13               #94=      #93                  ?0                  	;0
	180 280  JMPZ/43                   ?0        #94                  ?182                	;0	>>182
	181 281  GOTO/253                  ?0        ?45                  ?108                	;0
	182 283  FE_RESET_R/77             $95=      16?2                 ?208                	;0	<<180
	183 283  FE_FETCH_R/78             ?0        $95                  16?12               	;208	>>208	<<207
	184 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'in_array'      	;2
	185 284  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	186 284  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	187 284  DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
	188 284  BOOL_NOT/13               #97=      $96                  ?0                  	;0
	189 284  JMPZ_EX/46                #97=      #97                  ?197                	;0	>>197
	190 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'file_exists'   	;1
	191 284  FETCH_CONSTANT/99         #98=      ?0                   113:'LINES_TMP_PATH'	;16
	192 284  CONCAT/8                  #99=      #98                  116:'line_i_'       	;0
	193 284  CONCAT/8                  #100=     #99                  16?12               	;0
	194 284  SEND_VAL_EX/116           ?80       #100                 ?1                  	;0
	195 284  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
	196 284  BOOL/52                   #97=      $101                 ?0                  	;0
	197 284  BOOL_NOT/13               #102=     #97                  ?0                  	;0	<<189
	198 284  JMPZ/43                   ?0        #102                 ?201                	;0	>>201
	199 285  NOP/0                     ?0        ?0                   ?0                  	;1
	200 285  GOTO/253                  ?0        ?207                 ?117                	;0
	201 287  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'unlink'        	;1	<<198
	202 287  FETCH_CONSTANT/99         #103=     ?0                   120:'LINES_TMP_PATH'	;16
	203 287  CONCAT/8                  #104=     #103                 123:'line_i_'       	;0
	204 287  CONCAT/8                  #105=     #104                 16?12               	;0
	205 287  SEND_VAL_EX/116           ?80       #105                 ?1                  	;0
	206 287  DO_FCALL_BY_NAME/131      ?93       ?0                   ?0                  	;0
	207 289  JMP/42                    ?0        ?183                 ?0                  	;0	>>183
	208 289  FE_FREE/127               ?0        $95                  ?0                  	;0	<<182
	209 292  GOTO/253                  ?0        ?45                  ?124                	;0
	210 294  NOP/0                     ?0        125:NULL             ?0                  	;4294967295
	*/
}

function generateStreams($bcfd61adc96d4b72, $d353a4da8a0bb857, $c25b0e09d8039d97)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   296  RECV_INIT/64              16?0=     ?1                   0:NULL              	;0
	1   296  RECV_INIT/64              16?1=     ?2                   1:NULL              	;0
	2   296  RECV_INIT/64              16?2=     ?3                   2:array (
)         	;0
	3   298  GOTO/253                  ?0        ?4                   ?3                  	;0
	4   300  BIND_GLOBAL/168           ?0        16?3                 4:'b62d6460eb33ea07'	;0
	5   300  BIND_GLOBAL/168           ?0        16?4                 5:'E3665d09b9cea208'	;0
	6   300  BIND_GLOBAL/168           ?0        16?5                 6:'ebb4852f69f0dca0'	;0
	7   301  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_null'         	;1
	8   301  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	9   301  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	10  301  BOOL_NOT/13               #19=      $18                  ?0                  	;0
	11  301  JMPZ/43                   ?0        #19                  ?13                 	;0	>>13
	12  302  GOTO/253                  ?0        ?17                  ?9                  	;0
	13  304  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'count'          	;1	<<11
	14  304  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	15  304  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	16  304  ASSIGN/38                 ?3        16?1                 $20                 	;0
	17  306  IS_SMALLER/19             #22=      12:0                 16?1                	;0
	18  306  BOOL_NOT/13               #23=      #22                  ?0                  	;0
	19  306  JMPZ/43                   ?0        #23                  ?21                 	;0	>>21
	20  307  GOTO/253                  ?0        ?244                 ?13                 	;0
	21  309  GOTO/253                  ?0        ?245                 ?14                 	;0	<<19
	22  311  ASSIGN/38                 ?6        16?6                 15:array (
)        	;0
	23  312  FE_RESET_R/77             $25=      16?7                 ?208                	;0
	24  312  FE_FETCH_R/78             ?0        $25                  16?8                	;208	>>208	<<207
	25  313  NOP/0                     ?0        ?0                   ?0                  	;1
	26  313  GOTO/253                  ?0        ?181                 ?16                 	;0
	27  317  NOP/0                     ?0        ?0                   ?0                  	;1
	28  317  GOTO/253                  ?0        ?207                 ?17                 	;0
	29  319  ASSIGN_OBJ/136            ?8        16?3                 18:'result'         	;0
	30  319  OP_DATA/137               ?0        19:NULL              ?0                  	;0
	31  322  FE_RESET_R/77             $27=      16?9                 ?72                 	;0
	32  322  FE_FETCH_R/78             ?0        $27                  16?10               	;72	>>72	<<71
	33  323  FETCH_DIM_R/81            $29=      16?10                20:'id'             	;0
	34  323  ASSIGN_DIM/147            ?10       16?6                 ?1664793888         	;0
	35  323  OP_DATA/137               ?0        $29                  ?0                  	;0
	36  324  FETCH_DIM_R/81            $30=      16?10                21:'direct_source'  	;0
	37  324  JMPZ/43                   ?0        $30                  ?41                 	;0	>>41
	38  325  NOP/0                     ?0        ?0                   ?0                  	;1
	39  325  NOP/0                     ?0        ?0                   ?0                  	;1
	40  325  GOTO/253                  ?0        ?42                  ?22                 	;0
	41  327  UNSET_DIM/75              ?0        16?10                23:'stream_source'  	;0	<<37
	42  329  INIT_ARRAY/71             #31=      16?10                24:'info'           	;14
	43  329  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'intval'         	;1
	44  329  FETCH_DIM_FUNC_ARG/93     $32=      16?10                27:'id'             	;1
	45  329  SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
	46  329  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	47  329  FETCH_DIM_R/81            $34=      16?12                $33                 	;0
	48  329  JMP_SET/152               #35=      $34                  ?50                 	;0
	49  329  QM_ASSIGN/22              #35=      28:array (
)         ?0                  	;0
	50  329  ADD_ARRAY_ELEMENT/72      #31=      #35                  29:'bouquets'       	;0
	51  329  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'intval'         	;1
	52  329  FETCH_DIM_FUNC_ARG/93     $36=      16?10                32:'id'             	;1
	53  329  SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
	54  329  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
	55  329  FETCH_DIM_IS/90           $38=      16?13                $37                 	;0
	56  329  COALESCE/169              #39=      $38                  ?58                 	;0
	57  329  QM_ASSIGN/22              #39=      33:array (
)         ?0                  	;0
	58  329  ADD_ARRAY_ELEMENT/72      #31=      #39                  34:'servers'        	;0
	59  329  ASSIGN/38                 ?22       16?11                #31                 	;0
	60  330  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'file_put_contents'	;2
	61  330  FETCH_CONSTANT/99         #41=      ?0                   37:'STREAMS_TMP_PATH'	;16
	62  330  CONCAT/8                  #42=      #41                  40:'stream_'        	;0
	63  330  FETCH_DIM_R/81            $43=      16?10                41:'id'             	;0
	64  330  CONCAT/8                  #44=      #42                  $43                 	;0
	65  330  SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
	66  330  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'igbinary_serialize'	;1
	67  330  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	68  330  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
	69  330  SEND_VAR_NO_REF_EX/50     ?96       $45                  ?2                  	;0
	70  330  DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
	71  331  JMP/42                    ?0        ?32                  ?0                  	;0	>>32
	72  331  FE_FREE/127               ?0        $27                  ?0                  	;0	<<31
	73  334  NOP/0                     ?0        ?0                   ?0                  	;1
	74  334  GOTO/253                  ?0        ?111                 ?44                 	;0
	75  336  ASSIGN/38                 ?29       16?14                16?4                	;0
	76  337  NOP/0                     ?0        ?0                   ?0                  	;1
	77  337  GOTO/253                  ?0        ?81                  ?45                 	;0
	78  339  ADD/1                     #48=      16?0                 16?1                	;0
	79  339  SUB/2                     #49=      #48                  16?8                	;0
	80  339  ASSIGN/38                 ?32       16?14                #49                 	;0
	81  341  NOP/0                     ?0        ?0                   ?0                  	;1
	82  341  GOTO/253                  ?0        ?83                  ?46                 	;0
	83  343  INIT_METHOD_CALL/112      ?0        16?3                 47:'query'          	;1
	84  343  CONCAT/8                  #51=      49:'SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t1.direct_proxy,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key,t1.tmdb_id,t1.adaptive_link FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type LIMIT ' 16?8                	;0
	85  343  CONCAT/8                  #52=      #51                  50:', '             	;0
	86  343  CONCAT/8                  #53=      #52                  16?14               	;0
	87  343  CONCAT/8                  #54=      #53                  51:';'              	;0
	88  343  SEND_VAL_EX/116           ?80       #54                  ?1                  	;0
	89  343  DO_FCALL/60               ?37       ?0                   ?0                  	;0
	90  345  FETCH_OBJ_R/82            $56=      16?3                 52:'result'         	;0
	91  345  BOOL_NOT/13               #57=      $56                  ?0                  	;0
	92  345  JMPZ/43                   ?0        #57                  ?95                 	;0	>>95
	93  346  NOP/0                     ?0        ?0                   ?0                  	;1
	94  346  GOTO/253                  ?0        ?27                  ?53                 	;0
	95  348  FETCH_OBJ_R/82            $58=      16?3                 54:'result'         	;0	<<92
	96  348  INIT_METHOD_CALL/112      ?0        $58                  55:'rowCount'       	;0
	97  348  DO_FCALL/60               $59=      ?0                   ?0                  	;0
	98  348  IS_SMALLER/19             #60=      57:0                 $59                 	;0
	99  348  BOOL_NOT/13               #61=      #60                  ?0                  	;0
	100 348  JMPZ/43                   ?0        #61                  ?103                	;0	>>103
	101 349  NOP/0                     ?0        ?0                   ?0                  	;1
	102 349  GOTO/253                  ?0        ?114                 ?58                 	;0
	103 351  FETCH_OBJ_R/82            $62=      16?3                 59:'result'         	;0	<<100
	104 351  INIT_METHOD_CALL/112      ?0        $62                  60:'fetchAll'       	;1
	105 351  FETCH_CLASS_CONSTANT/181  #63=      63:'PDO'             62:'FETCH_ASSOC'    	;0
	106 351  SEND_VAL_EX/116           ?80       #63                  ?1                  	;0
	107 351  DO_FCALL/60               $64=      ?0                   ?0                  	;0
	108 351  ASSIGN/38                 ?47       16?9                 $64                 	;0
	109 352  NOP/0                     ?0        ?0                   ?0                  	;1
	110 352  GOTO/253                  ?0        ?118                 ?65                 	;0
	111 354  UNSET_CV/196              ?0        16?9                 ?0                  	;0
	112 355  UNSET_CV/196              ?0        16?13                ?0                  	;0
	113 356  UNSET_CV/196              ?0        16?15                ?0                  	;0
	114 358  ASSIGN_OBJ/136            ?48       16?3                 66:'result'         	;0
	115 358  OP_DATA/137               ?0        67:NULL              ?0                  	;0
	116 359  NOP/0                     ?0        ?0                   ?0                  	;1
	117 359  GOTO/253                  ?0        ?27                  ?68                 	;0
	118 361  ASSIGN/38                 $67=      16?15                69:array (
)        	;0
	119 361  ASSIGN/38                 ?50       16?13                $67                 	;0
	120 362  FE_RESET_R/77             $69=      16?9                 ?126                	;0
	121 362  FE_FETCH_R/78             ?0        $69                  16?16               	;126	>>126	<<125
	122 363  FETCH_DIM_R/81            $71=      16?16                70:'id'             	;0
	123 363  ASSIGN_DIM/147            ?52       16?15                ?1                  	;0
	124 363  OP_DATA/137               ?0        $71                  ?0                  	;0
	125 364  JMP/42                    ?0        ?121                 ?0                  	;0	>>121
	126 364  FE_FREE/127               ?0        $69                  ?0                  	;0	<<120
	127 367  INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'count'          	;1
	128 367  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	129 367  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	130 367  IS_SMALLER/19             #73=      73:0                 $72                 	;0
	131 367  BOOL_NOT/13               #74=      #73                  ?0                  	;0
	132 367  JMPZ/43                   ?0        #74                  ?135                	;0	>>135
	133 368  NOP/0                     ?0        ?0                   ?0                  	;1
	134 368  GOTO/253                  ?0        ?31                  ?74                 	;0
	135 370  INIT_METHOD_CALL/112      ?0        16?3                 75:'query'          	;1	<<132
	136 370  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'implode'        	;2
	137 370  SEND_VAL_EX/116           ?80       79:','               ?1                  	;0
	138 370  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
	139 370  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
	140 370  CONCAT/8                  #76=      80:'SELECT `stream_id`, `server_id`, `pid`, `to_analyze`, `stream_status`, `monitor_pid`, `on_demand`, `delay_available_at`, `bitrate`, `parent_id`, `on_demand`, `stream_info`, `video_codec`, `audio_codec`, `resolution`, `compatible` FROM `streams_servers` WHERE `stream_id` IN (' $75                 	;0
	141 370  CONCAT/8                  #77=      #76                  81:')'              	;0
	142 370  SEND_VAL_EX/116           ?80       #77                  ?1                  	;0
	143 370  DO_FCALL/60               ?60       ?0                   ?0                  	;0
	144 371  NOP/0                     ?0        ?0                   ?0                  	;1
	145 371  GOTO/253                  ?0        ?146                 ?82                 	;0
	146 373  FETCH_OBJ_R/82            $79=      16?3                 83:'result'         	;0
	147 373  BOOL_NOT/13               #80=      $79                  ?0                  	;0
	148 373  JMPZ/43                   ?0        #80                  ?151                	;0	>>151
	149 374  NOP/0                     ?0        ?0                   ?0                  	;1
	150 374  GOTO/253                  ?0        ?31                  ?84                 	;0
	151 376  FETCH_OBJ_R/82            $81=      16?3                 85:'result'         	;0	<<148
	152 376  INIT_METHOD_CALL/112      ?0        $81                  86:'rowCount'       	;0
	153 376  DO_FCALL/60               $82=      ?0                   ?0                  	;0
	154 376  IS_SMALLER/19             #83=      88:0                 $82                 	;0
	155 376  BOOL_NOT/13               #84=      #83                  ?0                  	;0
	156 376  JMPZ/43                   ?0        #84                  ?159                	;0	>>159
	157 377  NOP/0                     ?0        ?0                   ?0                  	;1
	158 377  GOTO/253                  ?0        ?179                 ?89                 	;0
	159 379  FETCH_OBJ_R/82            $85=      16?3                 90:'result'         	;0	<<156
	160 379  INIT_METHOD_CALL/112      ?0        $85                  91:'fetchAll'       	;1
	161 379  FETCH_CLASS_CONSTANT/181  #86=      94:'PDO'             93:'FETCH_ASSOC'    	;0
	162 379  SEND_VAL_EX/116           ?80       #86                  ?1                  	;0
	163 379  DO_FCALL/60               $87=      ?0                   ?0                  	;0
	164 379  FE_RESET_R/77             $88=      $87                  ?178                	;0
	165 379  FE_FETCH_R/78             ?0        $88                  16?16               	;178	>>178	<<177
	166 380  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'intval'         	;1
	167 380  FETCH_DIM_FUNC_ARG/93     $89=      16?16                98:'stream_id'      	;1
	168 380  SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
	169 380  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	170 380  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'intval'         	;1
	171 380  FETCH_DIM_FUNC_ARG/93     $92=      16?16                101:'server_id'     	;1
	172 380  SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
	173 380  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	174 380  FETCH_DIM_W/84            $91=      16?13                $90                 	;0
	175 380  ASSIGN_DIM/147            ?76       $91                  $93                 	;0
	176 380  OP_DATA/137               ?0        16?16                ?0                  	;0
	177 381  JMP/42                    ?0        ?165                 ?0                  	;0	>>165
	178 381  FE_FREE/127               ?0        $88                  ?0                  	;0	<<164
	179 385  NOP/0                     ?0        ?0                   ?0                  	;1
	180 385  GOTO/253                  ?0        ?29                  ?102                	;0
	181 387  INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'is_null'       	;1
	182 387  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	183 387  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
	184 387  BOOL_NOT/13               #96=      $95                  ?0                  	;0
	185 387  JMPZ/43                   ?0        #96                  ?188                	;0	>>188
	186 388  NOP/0                     ?0        ?0                   ?0                  	;1
	187 388  GOTO/253                  ?0        ?199                 ?105                	;0
	188 390  INIT_METHOD_CALL/112      ?0        16?3                 106:'query'         	;1	<<185
	189 390  INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'implode'       	;2
	190 390  SEND_VAL_EX/116           ?80       110:','              ?1                  	;0
	191 390  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	192 390  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
	193 390  CONCAT/8                  #98=      111:'SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t1.direct_proxy,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key,t1.tmdb_id,t1.adaptive_link FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type WHERE `t1`.`id` IN (' $97                 	;0
	194 390  CONCAT/8                  #99=      #98                  112:');'            	;0
	195 390  SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
	196 390  DO_FCALL/60               ?82       ?0                   ?0                  	;0
	197 391  NOP/0                     ?0        ?0                   ?0                  	;1
	198 391  GOTO/253                  ?0        ?90                  ?113                	;0
	199 393  ADD/1                     #101=     16?8                 16?4                	;0
	200 393  ADD/1                     #102=     16?0                 16?1                	;0
	201 393  IS_SMALLER/19             #103=     #102                 #101                	;0
	202 393  JMPZ/43                   ?0        #103                 ?205                	;0	>>205
	203 394  NOP/0                     ?0        ?0                   ?0                  	;1
	204 394  GOTO/253                  ?0        ?78                  ?114                	;0
	205 396  NOP/0                     ?0        ?0                   ?0                  	;1	<<202
	206 396  GOTO/253                  ?0        ?75                  ?115                	;0
	207 397  JMP/42                    ?0        ?24                  ?0                  	;0	>>24
	208 397  FE_FREE/127               ?0        $25                  ?0                  	;0	<<23
	209 400  INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'count'         	;1
	210 400  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	211 400  DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
	212 400  IS_SMALLER/19             #105=     118:0                $104                	;0
	213 400  BOOL_NOT/13               #106=     #105                 ?0                  	;0
	214 400  JMPZ/43                   ?0        #106                 ?216                	;0	>>216
	215 401  GOTO/253                  ?0        ?244                 ?119                	;0
	216 403  FE_RESET_R/77             $107=     16?2                 ?242                	;0	<<214
	217 403  FE_FETCH_R/78             ?0        $107                 16?17               	;242	>>242	<<241
	218 404  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'in_array'      	;2
	219 404  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	220 404  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	221 404  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
	222 404  BOOL_NOT/13               #109=     $108                 ?0                  	;0
	223 404  JMPZ_EX/46                #109=     #109                 ?231                	;0	>>231
	224 404  INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'file_exists'   	;1
	225 404  FETCH_CONSTANT/99         #110=     ?0                   124:'STREAMS_TMP_PATH'	;16
	226 404  CONCAT/8                  #111=     #110                 127:'stream_'       	;0
	227 404  CONCAT/8                  #112=     #111                 16?17               	;0
	228 404  SEND_VAL_EX/116           ?80       #112                 ?1                  	;0
	229 404  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
	230 404  BOOL/52                   #109=     $113                 ?0                  	;0
	231 404  BOOL_NOT/13               #114=     #109                 ?0                  	;0	<<223
	232 404  JMPZ/43                   ?0        #114                 ?235                	;0	>>235
	233 405  NOP/0                     ?0        ?0                   ?0                  	;1
	234 405  GOTO/253                  ?0        ?241                 ?128                	;0
	235 407  INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'unlink'        	;1	<<232
	236 407  FETCH_CONSTANT/99         #115=     ?0                   131:'STREAMS_TMP_PATH'	;16
	237 407  CONCAT/8                  #116=     #115                 134:'stream_'       	;0
	238 407  CONCAT/8                  #117=     #116                 16?17               	;0
	239 407  SEND_VAL_EX/116           ?80       #117                 ?1                  	;0
	240 407  DO_FCALL_BY_NAME/131      ?100      ?0                   ?0                  	;0
	241 409  JMP/42                    ?0        ?217                 ?0                  	;0	>>217
	242 409  FE_FREE/127               ?0        $107                 ?0                  	;0	<<216
	243 411  GOTO/253                  ?0        ?244                 ?135                	;0
	244 416  GOTO/253                  ?0        ?276                 ?136                	;0
	245 418  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'igbinary_unserialize'	;1
	246 418  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'file_get_contents'	;1
	247 418  FETCH_CONSTANT/99         #119=     ?0                   141:'CACHE_TMP_PATH'	;16
	248 418  CONCAT/8                  #120=     #119                 144:'bouquet_map'   	;0
	249 418  SEND_VAL_EX/116           ?80       #120                 ?1                  	;0
	250 418  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	251 418  SEND_VAR_NO_REF_EX/50     ?80       $121                 ?1                  	;0
	252 418  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
	253 418  ASSIGN/38                 ?105      16?12                $122                	;0
	254 419  INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'is_null'       	;1
	255 419  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	256 419  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
	257 419  BOOL_NOT/13               #125=     $124                 ?0                  	;0
	258 419  JMPZ/43                   ?0        #125                 ?260                	;0	>>260
	259 420  GOTO/253                  ?0        ?262                 ?147                	;0
	260 422  ASSIGN/38                 ?108      16?7                 148:array (
  0 => NULL,
)	;0	<<258
	261 423  GOTO/253                  ?0        ?275                 ?149                	;0
	262 425  GOTO/253                  ?0        ?263                 ?150                	;0
	263 427  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'range'         	;3
	264 427  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	265 427  ADD/1                     #127=     16?0                 16?1                	;0
	266 427  SUB/2                     #128=     #127                 153:1               	;0
	267 427  SEND_VAL_EX/116           ?96       #128                 ?2                  	;0
	268 427  SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
	269 427  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
	270 427  ASSIGN/38                 ?112      16?7                 $129                	;0
	271 428  JMPZ/43                   ?0        16?7                 ?273                	;0	>>273
	272 429  GOTO/253                  ?0        ?275                 ?154                	;0
	273 431  INIT_ARRAY/71             #131=     16?0                 ?0                  	;4	<<271
	274 431  ASSIGN/38                 ?114      16?7                 #131                	;0
	275 434  GOTO/253                  ?0        ?22                  ?155                	;0
	276 436  NOP/0                     ?0        156:NULL             ?0                  	;4294967295
	*/
}

function generateSeries($bcfd61adc96d4b72, $d353a4da8a0bb857)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   462  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   462  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   464  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
	3   466  BIND_GLOBAL/168           ?0        16?2                 1:'b62d6460eb33ea07'	;0	<<2
	4   466  BIND_GLOBAL/168           ?0        16?3                 2:'E3665d09b9cea208'	;0
	5   467  ASSIGN/38                 ?0        16?4                 3:array (
)         	;0
	6   468  ASSIGN/38                 ?1        16?5                 4:array (
)         	;0
	7   469  IS_SMALLER/19             #12=      5:0                  16?1                	;0
	8   469  BOOL_NOT/13               #13=      #12                  ?0                  	;0
	9   469  JMPZ/43                   ?0        #13                  ?11                 	;0	>>11
	10  470  GOTO/253                  ?0        ?92                  ?6                  	;0
	11  472  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'range'           	;3	<<9
	12  472  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	13  472  ADD/1                     #14=      16?0                 16?1                	;0
	14  472  SUB/2                     #15=      #14                  9:1                 	;0
	15  472  SEND_VAL_EX/116           ?96       #15                  ?2                  	;0
	16  472  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
	17  472  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	18  472  ASSIGN/38                 ?7        16?6                 $16                 	;0
	19  473  GOTO/253                  ?0        ?20                  ?10                 	;0
	20  475  JMPZ/43                   ?0        16?6                 ?22                 	;0	>>22
	21  476  GOTO/253                  ?0        ?24                  ?11                 	;0
	22  478  INIT_ARRAY/71             #18=      16?0                 ?0                  	;4	<<20
	23  478  ASSIGN/38                 ?9        16?6                 #18                 	;0
	24  480  FE_RESET_R/77             $20=      16?6                 ?90                 	;0
	25  480  FE_FETCH_R/78             ?0        $20                  16?7                	;90	>>90	<<89
	26  481  ADD/1                     #21=      16?7                 16?3                	;0
	27  481  ADD/1                     #22=      16?0                 16?1                	;0
	28  481  IS_SMALLER/19             #23=      #22                  #21                 	;0
	29  481  JMPZ/43                   ?0        #23                  ?32                 	;0	>>32
	30  482  NOP/0                     ?0        ?0                   ?0                  	;1
	31  482  GOTO/253                  ?0        ?35                  ?12                 	;0
	32  484  ASSIGN/38                 ?14       16?8                 16?3                	;0	<<29
	33  485  NOP/0                     ?0        ?0                   ?0                  	;1
	34  485  GOTO/253                  ?0        ?38                  ?13                 	;0
	35  487  ADD/1                     #25=      16?0                 16?1                	;0
	36  487  SUB/2                     #26=      #25                  16?7                	;0
	37  487  ASSIGN/38                 ?17       16?8                 #26                 	;0
	38  489  INIT_METHOD_CALL/112      ?0        16?2                 14:'query'          	;1
	39  489  CONCAT/8                  #28=      16:'SELECT `stream_id`, `series_id`, `season_num`, `episode_num` FROM `streams_episodes` WHERE `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` = 5) ORDER BY `series_id` ASC, `season_num` ASC, `episode_num` ASC LIMIT ' 16?7                	;0
	40  489  CONCAT/8                  #29=      #28                  17:', '             	;0
	41  489  CONCAT/8                  #30=      #29                  16?8                	;0
	42  489  CONCAT/8                  #31=      #30                  18:';'              	;0
	43  489  SEND_VAL_EX/116           ?80       #31                  ?1                  	;0
	44  489  DO_FCALL/60               ?22       ?0                   ?0                  	;0
	45  490  INIT_METHOD_CALL/112      ?0        16?2                 19:'get_rows'       	;0
	46  490  DO_FCALL/60               $33=      ?0                   ?0                  	;0
	47  490  FE_RESET_R/77             $34=      $33                  ?88                 	;0
	48  490  FE_FETCH_R/78             ?0        $34                  16?9                	;88	>>88	<<87
	49  491  FETCH_DIM_R/81            $35=      16?9                 21:'stream_id'      	;0
	50  491  JMPZ_EX/46                #36=      $35                  ?53                 	;0	>>53
	51  491  FETCH_DIM_R/81            $37=      16?9                 22:'series_id'      	;0
	52  491  BOOL/52                   #36=      $37                  ?0                  	;0
	53  491  BOOL_NOT/13               #38=      #36                  ?0                  	;0	<<50
	54  491  JMPZ/43                   ?0        #38                  ?58                 	;0	>>58
	55  492  NOP/0                     ?0        ?0                   ?0                  	;1
	56  492  NOP/0                     ?0        ?0                   ?0                  	;1
	57  492  GOTO/253                  ?0        ?87                  ?23                 	;0
	58  494  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1	<<54
	59  494  FETCH_DIM_FUNC_ARG/93     $39=      16?9                 26:'stream_id'      	;1
	60  494  SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
	61  494  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	62  494  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'intval'         	;1
	63  494  FETCH_DIM_FUNC_ARG/93     $42=      16?9                 29:'series_id'      	;1
	64  494  SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
	65  494  DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
	66  494  ASSIGN_DIM/147            ?31       16?4                 $40                 	;0
	67  494  OP_DATA/137               ?0        $43                  ?0                  	;0
	68  495  FETCH_DIM_R/81            $44=      16?9                 30:'series_id'      	;0
	69  495  ISSET_ISEMPTY_DIM_OBJ/115 #45=      16?5                 $44                 	;33554432
	70  495  JMPZ/43                   ?0        #45                  ?74                 	;0	>>74
	71  496  NOP/0                     ?0        ?0                   ?0                  	;1
	72  496  NOP/0                     ?0        ?0                   ?0                  	;1
	73  496  GOTO/253                  ?0        ?77                  ?31                 	;0
	74  498  FETCH_DIM_R/81            $46=      16?9                 32:'series_id'      	;0	<<70
	75  498  ASSIGN_DIM/147            ?37       16?5                 $46                 	;0
	76  498  OP_DATA/137               ?0        33:array (
)         ?0                  	;0
	77  500  FETCH_DIM_R/81            $48=      16?9                 34:'series_id'      	;0
	78  500  FETCH_DIM_R/81            $50=      16?9                 35:'season_num'     	;0
	79  500  FETCH_DIM_R/81            $53=      16?9                 36:'episode_num'    	;0
	80  500  INIT_ARRAY/71             #54=      $53                  37:'episode_num'    	;10
	81  500  FETCH_DIM_R/81            $55=      16?9                 38:'stream_id'      	;0
	82  500  ADD_ARRAY_ELEMENT/72      #54=      $55                  39:'stream_id'      	;0
	83  500  FETCH_DIM_W/84            $49=      16?5                 $48                 	;0
	84  500  FETCH_DIM_W/84            $51=      $49                  $50                 	;0
	85  500  ASSIGN_DIM/147            ?42       $51                  ?0                  	;0
	86  500  OP_DATA/137               ?0        #54                  ?0                  	;0
	87  502  JMP/42                    ?0        ?48                  ?0                  	;0	>>48
	88  502  FE_FREE/127               ?0        $34                  ?0                  	;0	<<47
	89  505  JMP/42                    ?0        ?25                  ?0                  	;0	>>25
	90  505  FE_FREE/127               ?0        $20                  ?0                  	;0	<<24
	91  508  GOTO/253                  ?0        ?92                  ?40                 	;0
	92  511  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'file_put_contents'	;2
	93  511  FETCH_CONSTANT/99         #56=      ?0                   43:'SERIES_TMP_PATH'	;16
	94  511  CONCAT/8                  #57=      #56                  46:'series_episodes_'	;0
	95  511  CONCAT/8                  #58=      #57                  16?0                	;0
	96  511  SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
	97  511  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'igbinary_serialize'	;1
	98  511  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	99  511  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	100 511  SEND_VAR_NO_REF_EX/50     ?96       $59                  ?2                  	;0
	101 511  DO_FCALL_BY_NAME/131      ?50       ?0                   ?0                  	;0
	102 512  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'file_put_contents'	;2
	103 512  FETCH_CONSTANT/99         #61=      ?0                   51:'SERIES_TMP_PATH'	;16
	104 512  CONCAT/8                  #62=      #61                  54:'series_map_'    	;0
	105 512  CONCAT/8                  #63=      #62                  16?0                	;0
	106 512  SEND_VAL_EX/116           ?80       #63                  ?1                  	;0
	107 512  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'igbinary_serialize'	;1
	108 512  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	109 512  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
	110 512  SEND_VAR_NO_REF_EX/50     ?96       $64                  ?2                  	;0
	111 512  DO_FCALL_BY_NAME/131      ?55       ?0                   ?0                  	;0
	112 513  UNSET_CV/196              ?0        16?4                 ?0                  	;0
	113 514  GOTO/253                  ?0        ?114                 ?57                 	;0
	114 516  NOP/0                     ?0        58:NULL              ?0                  	;4294967295
	*/
}

function generateGroups()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   520  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   521  INIT_METHOD_CALL/112      ?0        16?0                 1:'query'           	;1
	2   521  SEND_VAL_EX/116           ?80       3:'SELECT `group_id` FROM `users_groups`;' ?1                  	;0
	3   521  DO_FCALL/60               ?0        ?0                   ?0                  	;0
	4   522  INIT_METHOD_CALL/112      ?0        16?0                 4:'get_rows'        	;0
	5   522  DO_FCALL/60               $12=      ?0                   ?0                  	;0
	6   522  FE_RESET_R/77             $13=      $12                  ?325                	;0
	7   522  FE_FETCH_R/78             ?0        $13                  16?1                	;325	>>325	<<324
	8   523  NOP/0                     ?0        ?0                   ?0                  	;1
	9   523  GOTO/253                  ?0        ?138                 ?6                  	;0
	10  525  INIT_METHOD_CALL/112      ?0        16?0                 7:'get_rows'        	;0
	11  525  DO_FCALL/60               $14=      ?0                   ?0                  	;0
	12  525  FE_RESET_R/77             $15=      $14                  ?31                 	;0
	13  525  FE_FETCH_R/78             ?0        $15                  16?2                	;31	>>31	<<30
	14  526  FETCH_DIM_R/81            $16=      16?2                 9:'category_id'     	;0
	15  526  BOOL_NOT/13               #17=      $16                  ?0                  	;0
	16  526  JMPZ/43                   ?0        #17                  ?20                 	;0	>>20
	17  527  NOP/0                     ?0        ?0                   ?0                  	;1
	18  527  NOP/0                     ?0        ?0                   ?0                  	;1
	19  527  GOTO/253                  ?0        ?30                  ?10                 	;0
	20  529  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'array_merge'    	;2	<<16
	21  529  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	22  529  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'json_decode'    	;2
	23  529  FETCH_DIM_FUNC_ARG/93     $18=      16?2                 15:'category_id'    	;1
	24  529  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
	25  529  SEND_VAL_EX/116           ?96       16:true              ?2                  	;0
	26  529  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	27  529  SEND_VAR_NO_REF_EX/50     ?96       $19                  ?2                  	;0
	28  529  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	29  529  ASSIGN/38                 ?10       16?3                 $20                 	;0
	30  531  JMP/42                    ?0        ?13                  ?0                  	;0	>>13
	31  531  FE_FREE/127               ?0        $15                  ?0                  	;0	<<12
	32  535  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'array_unique'   	;1
	33  535  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	34  535  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	35  535  ASSIGN_DIM/147            ?11       16?4                 17:'category_ids'   	;0
	36  535  OP_DATA/137               ?0        $23                  ?0                  	;0
	37  537  NOP/0                     ?0        ?0                   ?0                  	;1
	38  537  GOTO/253                  ?0        ?39                  ?20                 	;0
	39  539  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'file_put_contents'	;2
	40  539  FETCH_CONSTANT/99         #24=      ?0                   23:'CACHE_TMP_PATH' 	;16
	41  539  CONCAT/8                  #25=      #24                  26:'permissions_'   	;0
	42  539  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'intval'         	;1
	43  539  FETCH_DIM_FUNC_ARG/93     $26=      16?1                 29:'group_id'       	;1
	44  539  SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
	45  539  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
	46  539  CONCAT/8                  #28=      #25                  $27                 	;0
	47  539  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	48  539  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'igbinary_serialize'	;1
	49  539  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	50  539  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	51  539  SEND_VAR_NO_REF_EX/50     ?96       $29                  ?2                  	;0
	52  539  DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
	53  541  NOP/0                     ?0        ?0                   ?0                  	;1
	54  541  GOTO/253                  ?0        ?324                 ?32                 	;0
	55  543  INIT_METHOD_CALL/112      ?0        16?0                 33:'get_rows'       	;0
	56  543  DO_FCALL/60               $31=      ?0                   ?0                  	;0
	57  543  FE_RESET_R/77             $32=      $31                  ?76                 	;0
	58  543  FE_FETCH_R/78             ?0        $32                  16?2                	;76	>>76	<<75
	59  544  FETCH_DIM_R/81            $33=      16?2                 35:'category_id'    	;0
	60  544  BOOL_NOT/13               #34=      $33                  ?0                  	;0
	61  544  JMPZ/43                   ?0        #34                  ?65                 	;0	>>65
	62  545  NOP/0                     ?0        ?0                   ?0                  	;1
	63  545  NOP/0                     ?0        ?0                   ?0                  	;1
	64  545  GOTO/253                  ?0        ?75                  ?36                 	;0
	65  547  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'array_merge'    	;2	<<61
	66  547  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	67  547  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'json_decode'    	;2
	68  547  FETCH_DIM_FUNC_ARG/93     $35=      16?2                 41:'category_id'    	;1
	69  547  SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
	70  547  SEND_VAL_EX/116           ?96       42:true              ?2                  	;0
	71  547  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	72  547  SEND_VAR_NO_REF_EX/50     ?96       $36                  ?2                  	;0
	73  547  DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
	74  547  ASSIGN/38                 ?27       16?3                 $37                 	;0
	75  549  JMP/42                    ?0        ?58                  ?0                  	;0	>>58
	76  549  FE_FREE/127               ?0        $32                  ?0                  	;0	<<57
	77  553  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'count'          	;1
	78  553  FETCH_DIM_FUNC_ARG/93     $39=      16?4                 45:'series_ids'     	;1
	79  553  SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
	80  553  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	81  553  IS_SMALLER/19             #41=      46:0                 $40                 	;0
	82  553  BOOL_NOT/13               #42=      #41                  ?0                  	;0
	83  553  JMPZ/43                   ?0        #42                  ?86                 	;0	>>86
	84  554  NOP/0                     ?0        ?0                   ?0                  	;1
	85  554  GOTO/253                  ?0        ?32                  ?47                 	;0
	86  556  INIT_METHOD_CALL/112      ?0        16?0                 48:'query'          	;1	<<83
	87  556  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'implode'        	;2
	88  556  SEND_VAL_EX/116           ?80       52:','               ?1                  	;0
	89  556  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'array_map'      	;2
	90  556  SEND_VAL_EX/116           ?80       55:'intval'          ?1                  	;0
	91  556  FETCH_DIM_FUNC_ARG/93     $43=      16?4                 56:'series_ids'     	;2
	92  556  SEND_VAR_EX/66            ?96       $43                  ?2                  	;0
	93  556  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
	94  556  SEND_VAR_NO_REF_EX/50     ?96       $44                  ?2                  	;0
	95  556  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
	96  556  CONCAT/8                  #46=      57:'SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams_series` WHERE `id` IN (' $45                 	;0
	97  556  CONCAT/8                  #47=      #46                  58:');'             	;0
	98  556  SEND_VAL_EX/116           ?80       #47                  ?1                  	;0
	99  556  DO_FCALL/60               ?37       ?0                   ?0                  	;0
	100 557  NOP/0                     ?0        ?0                   ?0                  	;1
	101 557  GOTO/253                  ?0        ?10                  ?59                 	;0
	102 559  INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'array_unique'   	;1
	103 559  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	104 559  DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
	105 559  ASSIGN_DIM/147            ?38       16?4                 60:'stream_ids'     	;0
	106 559  OP_DATA/137               ?0        $50                  ?0                  	;0
	107 560  INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'array_unique'   	;1
	108 560  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	109 560  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	110 560  ASSIGN_DIM/147            ?40       16?4                 63:'series_ids'     	;0
	111 560  OP_DATA/137               ?0        $52                  ?0                  	;0
	112 561  ASSIGN/38                 ?42       16?3                 66:array (
)        	;0
	113 562  INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'count'          	;1
	114 562  FETCH_DIM_FUNC_ARG/93     $54=      16?4                 69:'stream_ids'     	;1
	115 562  SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
	116 562  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
	117 562  IS_SMALLER/19             #56=      70:0                 $55                 	;0
	118 562  BOOL_NOT/13               #57=      #56                  ?0                  	;0
	119 562  JMPZ/43                   ?0        #57                  ?122                	;0	>>122
	120 563  NOP/0                     ?0        ?0                   ?0                  	;1
	121 563  GOTO/253                  ?0        ?77                  ?71                 	;0
	122 565  INIT_METHOD_CALL/112      ?0        16?0                 72:'query'          	;1	<<119
	123 565  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'implode'        	;2
	124 565  SEND_VAL_EX/116           ?80       76:','               ?1                  	;0
	125 565  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'array_map'      	;2
	126 565  SEND_VAL_EX/116           ?80       79:'intval'          ?1                  	;0
	127 565  FETCH_DIM_FUNC_ARG/93     $58=      16?4                 80:'stream_ids'     	;2
	128 565  SEND_VAR_EX/66            ?96       $58                  ?2                  	;0
	129 565  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	130 565  SEND_VAR_NO_REF_EX/50     ?96       $59                  ?2                  	;0
	131 565  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
	132 565  CONCAT/8                  #61=      81:'SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams` WHERE `id` IN (' $60                 	;0
	133 565  CONCAT/8                  #62=      #61                  82:');'             	;0
	134 565  SEND_VAL_EX/116           ?80       #62                  ?1                  	;0
	135 565  DO_FCALL/60               ?52       ?0                   ?0                  	;0
	136 566  NOP/0                     ?0        ?0                   ?0                  	;1
	137 566  GOTO/253                  ?0        ?55                  ?83                 	;0
	138 568  ASSIGN/38                 $64=      16?4                 84:array (
)        	;0
	139 568  ASSIGN/38                 ?54       16?7                 $64                 	;0
	140 569  INIT_METHOD_CALL/112      ?0        16?0                 85:'query'          	;2
	141 569  SEND_VAL_EX/116           ?80       87:'SELECT * FROM `users_packages` WHERE JSON_CONTAINS(`groups`, ?, \'$\');' ?1                  	;0
	142 569  FETCH_DIM_FUNC_ARG/93     $66=      16?1                 88:'group_id'       	;2
	143 569  SEND_VAR_EX/66            ?96       $66                  ?2                  	;0
	144 569  DO_FCALL/60               ?56       ?0                   ?0                  	;0
	145 570  INIT_METHOD_CALL/112      ?0        16?0                 89:'get_rows'       	;0
	146 570  DO_FCALL/60               $68=      ?0                   ?0                  	;0
	147 570  FE_RESET_R/77             $69=      $68                  ?206                	;0
	148 570  FE_FETCH_R/78             ?0        $69                  16?2                	;206	>>206	<<205
	149 571  NOP/0                     ?0        ?0                   ?0                  	;1
	150 571  NOP/0                     ?0        ?0                   ?0                  	;1
	151 571  GOTO/253                  ?0        ?174                 ?91                 	;0
	152 573  FETCH_DIM_R/81            $70=      16?2                 92:'is_mag'         	;0
	153 573  BOOL_NOT/13               #71=      $70                  ?0                  	;0
	154 573  JMPZ/43                   ?0        #71                  ?158                	;0	>>158
	155 574  NOP/0                     ?0        ?0                   ?0                  	;1
	156 574  NOP/0                     ?0        ?0                   ?0                  	;1
	157 574  GOTO/253                  ?0        ?160                 ?93                 	;0
	158 576  ASSIGN_DIM/147            ?61       16?4                 94:'create_mag'     	;0	<<154
	159 576  OP_DATA/137               ?0        95:true              ?0                  	;0
	160 578  FETCH_DIM_R/81            $73=      16?2                 96:'is_e2'          	;0
	161 578  BOOL_NOT/13               #74=      $73                  ?0                  	;0
	162 578  JMPZ/43                   ?0        #74                  ?166                	;0	>>166
	163 579  NOP/0                     ?0        ?0                   ?0                  	;1
	164 579  NOP/0                     ?0        ?0                   ?0                  	;1
	165 579  GOTO/253                  ?0        ?171                 ?97                 	;0
	166 581  ASSIGN_DIM/147            ?64       16?4                 98:'create_enigma'  	;0	<<162
	167 581  OP_DATA/137               ?0        99:true              ?0                  	;0
	168 582  NOP/0                     ?0        ?0                   ?0                  	;1
	169 582  NOP/0                     ?0        ?0                   ?0                  	;1
	170 582  GOTO/253                  ?0        ?171                 ?100                	;0
	171 586  NOP/0                     ?0        ?0                   ?0                  	;1
	172 586  NOP/0                     ?0        ?0                   ?0                  	;1
	173 586  GOTO/253                  ?0        ?205                 ?101                	;0
	174 588  INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'json_decode'   	;2
	175 588  FETCH_DIM_FUNC_ARG/93     $76=      16?2                 104:'bouquets'      	;1
	176 588  SEND_VAR_EX/66            ?80       $76                  ?1                  	;0
	177 588  SEND_VAL_EX/116           ?96       105:true             ?2                  	;0
	178 588  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
	179 588  FE_RESET_R/77             $78=      $77                  ?193                	;0
	180 588  FE_FETCH_R/78             ?0        $78                  16?8                	;193	>>193	<<192
	181 589  INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'in_array'      	;2
	182 589  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	183 589  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	184 589  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
	185 589  JMPZ/43                   ?0        $79                  ?190                	;0	>>190
	186 590  NOP/0                     ?0        ?0                   ?0                  	;1
	187 590  NOP/0                     ?0        ?0                   ?0                  	;1
	188 590  NOP/0                     ?0        ?0                   ?0                  	;1
	189 590  GOTO/253                  ?0        ?192                 ?108                	;0
	190 592  ASSIGN_DIM/147            ?69       16?7                 ?4397406            	;0	<<185
	191 592  OP_DATA/137               ?0        16?8                 ?0                  	;0
	192 594  JMP/42                    ?0        ?180                 ?0                  	;0	>>180
	193 594  FE_FREE/127               ?0        $78                  ?0                  	;0	<<179
	194 597  FETCH_DIM_R/81            $81=      16?2                 109:'is_line'       	;0
	195 597  BOOL_NOT/13               #82=      $81                  ?0                  	;0
	196 597  JMPZ/43                   ?0        #82                  ?200                	;0	>>200
	197 598  NOP/0                     ?0        ?0                   ?0                  	;1
	198 598  NOP/0                     ?0        ?0                   ?0                  	;1
	199 598  GOTO/253                  ?0        ?202                 ?110                	;0
	200 600  ASSIGN_DIM/147            ?72       16?4                 111:'create_line'   	;0	<<196
	201 600  OP_DATA/137               ?0        112:true             ?0                  	;0
	202 602  NOP/0                     ?0        ?0                   ?0                  	;1
	203 602  NOP/0                     ?0        ?0                   ?0                  	;1
	204 602  GOTO/253                  ?0        ?152                 ?113                	;0
	205 603  JMP/42                    ?0        ?148                 ?0                  	;0	>>148
	206 603  FE_FREE/127               ?0        $69                  ?0                  	;0	<<147
	207 606  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'count'         	;1
	208 606  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	209 606  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
	210 606  IS_SMALLER/19             #85=      116:0                $84                 	;0
	211 606  BOOL_NOT/13               #86=      #85                  ?0                  	;0
	212 606  JMPZ/43                   ?0        #86                  ?215                	;0	>>215
	213 607  NOP/0                     ?0        ?0                   ?0                  	;1
	214 607  GOTO/253                  ?0        ?37                  ?117                	;0
	215 609  NOP/0                     ?0        ?0                   ?0                  	;1	<<212
	216 609  GOTO/253                  ?0        ?217                 ?118                	;0
	217 611  INIT_METHOD_CALL/112      ?0        16?0                 119:'query'         	;1
	218 611  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'implode'       	;2
	219 611  SEND_VAL_EX/116           ?80       123:','              ?1                  	;0
	220 611  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'array_map'     	;2
	221 611  SEND_VAL_EX/116           ?80       126:'intval'         ?1                  	;0
	222 611  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	223 611  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
	224 611  SEND_VAR_NO_REF_EX/50     ?96       $87                  ?2                  	;0
	225 611  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
	226 611  CONCAT/8                  #89=      127:'SELECT * FROM `bouquets` WHERE `id` IN (' $88                 	;0
	227 611  CONCAT/8                  #90=      #89                  128:');'            	;0
	228 611  SEND_VAL_EX/116           ?80       #90                  ?1                  	;0
	229 611  DO_FCALL/60               ?80       ?0                   ?0                  	;0
	230 612  ASSIGN/38                 ?81       16?6                 129:array (
)       	;0
	231 613  ASSIGN/38                 ?82       16?5                 130:array (
)       	;0
	232 614  INIT_METHOD_CALL/112      ?0        16?0                 131:'get_rows'      	;0
	233 614  DO_FCALL/60               $94=      ?0                   ?0                  	;0
	234 614  FE_RESET_R/77             $95=      $94                  ?321                	;0
	235 614  FE_FETCH_R/78             ?0        $95                  16?2                	;321	>>321	<<320
	236 615  NOP/0                     ?0        ?0                   ?0                  	;1
	237 615  NOP/0                     ?0        ?0                   ?0                  	;1
	238 615  GOTO/253                  ?0        ?282                 ?133                	;0
	239 618  FETCH_DIM_R/81            $96=      16?2                 134:'bouquet_radios'	;0
	240 618  BOOL_NOT/13               #97=      $96                  ?0                  	;0
	241 618  JMPZ/43                   ?0        #97                  ?245                	;0	>>245
	242 619  NOP/0                     ?0        ?0                   ?0                  	;1
	243 619  NOP/0                     ?0        ?0                   ?0                  	;1
	244 619  GOTO/253                  ?0        ?255                 ?135                	;0
	245 621  INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'array_merge'   	;2	<<241
	246 621  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	247 621  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'json_decode'   	;2
	248 621  FETCH_DIM_FUNC_ARG/93     $98=      16?2                 140:'bouquet_radios'	;1
	249 621  SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
	250 621  SEND_VAL_EX/116           ?96       141:true             ?2                  	;0
	251 621  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	252 621  SEND_VAR_NO_REF_EX/50     ?96       $99                  ?2                  	;0
	253 621  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	254 621  ASSIGN/38                 ?90       16?5                 $100                	;0
	255 623  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'json_decode'   	;2
	256 623  FETCH_DIM_FUNC_ARG/93     $102=     16?2                 144:'bouquet_series'	;1
	257 623  SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
	258 623  SEND_VAL_EX/116           ?96       145:true             ?2                  	;0
	259 623  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
	260 623  FE_RESET_R/77             $104=     $103                 ?278                	;0
	261 623  FE_FETCH_R/78             ?0        $104                 16?9                	;278	>>278	<<277
	262 624  ASSIGN_DIM/147            ?94       16?6                 ?1679836520         	;0
	263 624  OP_DATA/137               ?0        16?9                 ?0                  	;0
	264 625  INIT_METHOD_CALL/112      ?0        16?0                 146:'query'         	;2
	265 625  SEND_VAL_EX/116           ?80       148:'SELECT `stream_id` FROM `streams_episodes` WHERE `series_id` = ?;' ?1                  	;0
	266 625  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	267 625  DO_FCALL/60               ?95       ?0                   ?0                  	;0
	268 626  INIT_METHOD_CALL/112      ?0        16?0                 149:'get_rows'      	;0
	269 626  DO_FCALL/60               $107=     ?0                   ?0                  	;0
	270 626  FE_RESET_R/77             $108=     $107                 ?276                	;0
	271 626  FE_FETCH_R/78             ?0        $108                 16?10               	;276	>>276	<<275
	272 627  FETCH_DIM_R/81            $110=     16?10                151:'stream_id'     	;0
	273 627  ASSIGN_DIM/147            ?98       16?5                 ?4414262            	;0
	274 627  OP_DATA/137               ?0        $110                 ?0                  	;0
	275 628  JMP/42                    ?0        ?271                 ?0                  	;0	>>271
	276 628  FE_FREE/127               ?0        $108                 ?0                  	;0	<<270
	277 631  JMP/42                    ?0        ?261                 ?0                  	;0	>>261
	278 631  FE_FREE/127               ?0        $104                 ?0                  	;0	<<260
	279 633  NOP/0                     ?0        ?0                   ?0                  	;1
	280 633  NOP/0                     ?0        ?0                   ?0                  	;1
	281 633  GOTO/253                  ?0        ?317                 ?152                	;0
	282 635  FETCH_DIM_R/81            $111=     16?2                 153:'bouquet_channels'	;0
	283 635  BOOL_NOT/13               #112=     $111                 ?0                  	;0
	284 635  JMPZ/43                   ?0        #112                 ?288                	;0	>>288
	285 636  NOP/0                     ?0        ?0                   ?0                  	;1
	286 636  NOP/0                     ?0        ?0                   ?0                  	;1
	287 636  GOTO/253                  ?0        ?298                 ?154                	;0
	288 638  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'array_merge'   	;2	<<284
	289 638  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	290 638  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'json_decode'   	;2
	291 638  FETCH_DIM_FUNC_ARG/93     $113=     16?2                 159:'bouquet_channels'	;1
	292 638  SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
	293 638  SEND_VAL_EX/116           ?96       160:true             ?2                  	;0
	294 638  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
	295 638  SEND_VAR_NO_REF_EX/50     ?96       $114                 ?2                  	;0
	296 638  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
	297 638  ASSIGN/38                 ?105      16?5                 $115                	;0
	298 640  FETCH_DIM_R/81            $117=     16?2                 161:'bouquet_movies'	;0
	299 640  BOOL_NOT/13               #118=     $117                 ?0                  	;0
	300 640  JMPZ/43                   ?0        #118                 ?304                	;0	>>304
	301 641  NOP/0                     ?0        ?0                   ?0                  	;1
	302 641  NOP/0                     ?0        ?0                   ?0                  	;1
	303 641  GOTO/253                  ?0        ?239                 ?162                	;0
	304 643  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'array_merge'   	;2	<<300
	305 643  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	306 643  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'json_decode'   	;2
	307 643  FETCH_DIM_FUNC_ARG/93     $119=     16?2                 167:'bouquet_movies'	;1
	308 643  SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
	309 643  SEND_VAL_EX/116           ?96       168:true             ?2                  	;0
	310 643  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
	311 643  SEND_VAR_NO_REF_EX/50     ?96       $120                 ?2                  	;0
	312 643  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	313 643  ASSIGN/38                 ?111      16?5                 $121                	;0
	314 644  NOP/0                     ?0        ?0                   ?0                  	;1
	315 644  NOP/0                     ?0        ?0                   ?0                  	;1
	316 644  GOTO/253                  ?0        ?239                 ?169                	;0
	317 648  NOP/0                     ?0        ?0                   ?0                  	;1
	318 648  NOP/0                     ?0        ?0                   ?0                  	;1
	319 648  GOTO/253                  ?0        ?320                 ?170                	;0
	320 649  JMP/42                    ?0        ?235                 ?0                  	;0	>>235
	321 649  FE_FREE/127               ?0        $95                  ?0                  	;0	<<234
	322 652  NOP/0                     ?0        ?0                   ?0                  	;1
	323 652  GOTO/253                  ?0        ?102                 ?171                	;0
	324 653  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
	325 653  FE_FREE/127               ?0        $13                  ?0                  	;0	<<6
	326 656  NOP/0                     ?0        172:NULL             ?0                  	;4294967295
	*/
}

function generateLinesPerIP()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   660  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   661  ASSIGN/38                 ?0        16?1                 1:array (
  3600 => 
  array (
  ),
  86400 => 
  array (
  ),
  604800 => 
  array (
  ),
  0 => 
  array (
  ),
)	;0
	2   662  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'array_keys'      	;1
	3   662  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	4   662  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	5   662  FE_RESET_R/77             $6=       $5                   ?33                 	;0
	6   662  FE_FETCH_R/78             ?0        $6                   16?2                	;33	>>33	<<32
	7   663  IS_SMALLER/19             #7=       4:0                  16?2                	;0
	8   663  JMPZ/43                   ?0        #7                   ?11                 	;0	>>11
	9   664  NOP/0                     ?0        ?0                   ?0                  	;1
	10  664  GOTO/253                  ?0        ?16                  ?5                  	;0
	11  666  INIT_METHOD_CALL/112      ?0        16?0                 6:'query'           	;1	<<8
	12  666  SEND_VAL_EX/116           ?80       8:'SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`user_ip`)) AS `ip_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 GROUP BY `lines_activity`.`user_id` ORDER BY `ip_count` DESC LIMIT 1000;' ?1                  	;0
	13  666  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	14  667  NOP/0                     ?0        ?0                   ?0                  	;1
	15  667  GOTO/253                  ?0        ?23                  ?9                  	;0
	16  669  INIT_METHOD_CALL/112      ?0        16?0                 10:'query'          	;2
	17  669  SEND_VAL_EX/116           ?80       12:'SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`user_ip`)) AS `ip_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `date_start` >= ? AND `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 GROUP BY `lines_activity`.`user_id` ORDER BY `ip_count` DESC LIMIT 1000;' ?1                  	;0
	18  669  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'time'           	;0
	19  669  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	20  669  SUB/2                     #10=      $9                   16?2                	;0
	21  669  SEND_VAL_EX/116           ?96       #10                  ?2                  	;0
	22  669  DO_FCALL/60               ?7        ?0                   ?0                  	;0
	23  671  INIT_METHOD_CALL/112      ?0        16?0                 15:'get_rows'       	;0
	24  671  DO_FCALL/60               $12=      ?0                   ?0                  	;0
	25  671  FE_RESET_R/77             $13=      $12                  ?31                 	;0
	26  671  FE_FETCH_R/78             ?0        $13                  16?3                	;31	>>31	<<30
	27  672  FETCH_DIM_W/84            $14=      16?1                 16?2                	;0
	28  672  ASSIGN_DIM/147            ?11       $14                  ?4414262            	;0
	29  672  OP_DATA/137               ?0        16?3                 ?0                  	;0
	30  673  JMP/42                    ?0        ?26                  ?0                  	;0	>>26
	31  673  FE_FREE/127               ?0        $13                  ?0                  	;0	<<25
	32  676  JMP/42                    ?0        ?6                   ?0                  	;0	>>6
	33  676  FE_FREE/127               ?0        $6                   ?0                  	;0	<<5
	34  679  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'file_put_contents'	;2
	35  679  FETCH_CONSTANT/99         #16=      ?0                   19:'CACHE_TMP_PATH' 	;16
	36  679  CONCAT/8                  #17=      #16                  22:'lines_per_ip'   	;0
	37  679  SEND_VAL_EX/116           ?80       #17                  ?1                  	;0
	38  679  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'igbinary_serialize'	;1
	39  679  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	40  679  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	41  679  SEND_VAR_NO_REF_EX/50     ?96       $18                  ?2                  	;0
	42  679  DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
	43  680  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
	*/
}

function generateTheftDetection()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   684  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   685  ASSIGN/38                 ?0        16?1                 1:array (
  3600 => 
  array (
  ),
  86400 => 
  array (
  ),
  604800 => 
  array (
  ),
  0 => 
  array (
  ),
)	;0
	2   686  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'array_keys'      	;1
	3   686  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	4   686  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	5   686  FE_RESET_R/77             $6=       $5                   ?33                 	;0
	6   686  FE_FETCH_R/78             ?0        $6                   16?2                	;33	>>33	<<32
	7   687  IS_SMALLER/19             #7=       4:0                  16?2                	;0
	8   687  JMPZ/43                   ?0        #7                   ?11                 	;0	>>11
	9   688  NOP/0                     ?0        ?0                   ?0                  	;1
	10  688  GOTO/253                  ?0        ?16                  ?5                  	;0
	11  690  INIT_METHOD_CALL/112      ?0        16?0                 6:'query'           	;1	<<8
	12  690  SEND_VAL_EX/116           ?80       8:'SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`stream_id`)) AS `vod_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 AND `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` IN (2,5)) GROUP BY `lines_activity`.`user_id` ORDER BY `vod_count` DESC LIMIT 1000;' ?1                  	;0
	13  690  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	14  691  NOP/0                     ?0        ?0                   ?0                  	;1
	15  691  GOTO/253                  ?0        ?23                  ?9                  	;0
	16  693  INIT_METHOD_CALL/112      ?0        16?0                 10:'query'          	;2
	17  693  SEND_VAL_EX/116           ?80       12:'SELECT `lines_activity`.`user_id`, COUNT(DISTINCT(`lines_activity`.`stream_id`)) AS `vod_count`, `lines`.`username` FROM `lines_activity` LEFT JOIN `lines` ON `lines`.`id` = `lines_activity`.`user_id` WHERE `date_start` >= ? AND `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 AND `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` IN (2,5)) GROUP BY `lines_activity`.`user_id` ORDER BY `vod_count` DESC LIMIT 1000;' ?1                  	;0
	18  693  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'time'           	;0
	19  693  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	20  693  SUB/2                     #10=      $9                   16?2                	;0
	21  693  SEND_VAL_EX/116           ?96       #10                  ?2                  	;0
	22  693  DO_FCALL/60               ?7        ?0                   ?0                  	;0
	23  695  INIT_METHOD_CALL/112      ?0        16?0                 15:'get_rows'       	;0
	24  695  DO_FCALL/60               $12=      ?0                   ?0                  	;0
	25  695  FE_RESET_R/77             $13=      $12                  ?31                 	;0
	26  695  FE_FETCH_R/78             ?0        $13                  16?3                	;31	>>31	<<30
	27  696  FETCH_DIM_W/84            $14=      16?1                 16?2                	;0
	28  696  ASSIGN_DIM/147            ?11       $14                  ?4414262            	;0
	29  696  OP_DATA/137               ?0        16?3                 ?0                  	;0
	30  697  JMP/42                    ?0        ?26                  ?0                  	;0	>>26
	31  697  FE_FREE/127               ?0        $13                  ?0                  	;0	<<25
	32  700  JMP/42                    ?0        ?6                   ?0                  	;0	>>6
	33  700  FE_FREE/127               ?0        $6                   ?0                  	;0	<<5
	34  703  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'file_put_contents'	;2
	35  703  FETCH_CONSTANT/99         #16=      ?0                   19:'CACHE_TMP_PATH' 	;16
	36  703  CONCAT/8                  #17=      #16                  22:'theft_detection'	;0
	37  703  SEND_VAL_EX/116           ?80       #17                  ?1                  	;0
	38  703  INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'igbinary_serialize'	;1
	39  703  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	40  703  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	41  703  SEND_VAR_NO_REF_EX/50     ?96       $18                  ?2                  	;0
	42  703  DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
	43  704  NOP/0                     ?0        25:NULL              ?0                  	;4294967295
	*/
}

function getChangedLines()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   708  JMP/42                    ?0        ?90                  ?0                  	;0	>>90
	1   710  ASSIGN/38                 $13=      16?2                 1:array (
)         	;0
	2   710  ASSIGN/38                 $14=      16?1                 $13                 	;0
	3   710  ASSIGN/38                 ?2        16?0                 $14                 	;0
	4   711  INIT_METHOD_CALL/112      ?0        16?3                 2:'query'           	;1
	5   711  SEND_VAL_EX/116           ?80       4:'SELECT `id`, `username`, `password`, `access_token`, UNIX_TIMESTAMP(`updated`) AS `updated` FROM `lines`;' ?1                  	;0
	6   711  DO_FCALL/60               ?3        ?0                   ?0                  	;0
	7   712  FETCH_OBJ_R/82            $17=      16?3                 5:'dbh'             	;0
	8   712  JMPZ_EX/46                #18=      $17                  ?11                 	;0	>>11
	9   712  FETCH_OBJ_R/82            $19=      16?3                 6:'result'          	;0
	10  712  BOOL/52                   #18=      $19                  ?0                  	;0
	11  712  BOOL_NOT/13               #20=      #18                  ?0                  	;0	<<8
	12  712  JMPZ/43                   ?0        #20                  ?14                 	;0	>>14
	13  713  GOTO/253                  ?0        ?144                 ?7                  	;0
	14  715  FETCH_OBJ_R/82            $21=      16?3                 8:'result'          	;0	<<12
	15  715  INIT_METHOD_CALL/112      ?0        $21                  9:'rowCount'        	;0
	16  715  DO_FCALL/60               $22=      ?0                   ?0                  	;0
	17  715  IS_SMALLER/19             #23=      11:0                 $22                 	;0
	18  715  BOOL_NOT/13               #24=      #23                  ?0                  	;0
	19  715  JMPZ/43                   ?0        #24                  ?21                 	;0	>>21
	20  716  GOTO/253                  ?0        ?144                 ?12                 	;0
	21  718  FETCH_OBJ_R/82            $25=      16?3                 13:'result'         	;0	<<19
	22  718  INIT_METHOD_CALL/112      ?0        $25                  14:'fetchAll'       	;1
	23  718  FETCH_CLASS_CONSTANT/181  #26=      17:'PDO'             16:'FETCH_ASSOC'    	;0
	24  718  SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
	25  718  DO_FCALL/60               $27=      ?0                   ?0                  	;0
	26  718  FE_RESET_R/77             $28=      $27                  ?88                 	;0
	27  718  FE_FETCH_R/78             ?0        $28                  16?4                	;88	>>88	<<87
	28  719  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'file_exists'    	;1
	29  719  FETCH_CONSTANT/99         #29=      ?0                   21:'LINES_TMP_PATH' 	;16
	30  719  CONCAT/8                  #30=      #29                  24:'line_i_'        	;0
	31  719  FETCH_DIM_R/81            $31=      16?4                 25:'id'             	;0
	32  719  CONCAT/8                  #32=      #30                  $31                 	;0
	33  719  SEND_VAL_EX/116           ?80       #32                  ?1                  	;0
	34  719  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	35  719  BOOL_NOT/13               #34=      $33                  ?0                  	;0
	36  719  JMPNZ_EX/47               #34=      #34                  ?49                 	;0	>>49
	37  719  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'filemtime'      	;1
	38  719  FETCH_CONSTANT/99         #35=      ?0                   28:'LINES_TMP_PATH' 	;16
	39  719  CONCAT/8                  #36=      #35                  31:'line_i_'        	;0
	40  719  FETCH_DIM_R/81            $37=      16?4                 32:'id'             	;0
	41  719  CONCAT/8                  #38=      #36                  $37                 	;0
	42  719  SEND_VAL_EX/116           ?80       #38                  ?1                  	;0
	43  719  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	44  719  JMP_SET/152               #40=      $39                  ?46                 	;0
	45  719  QM_ASSIGN/22              #40=      33:0                 ?0                  	;0
	46  719  FETCH_DIM_R/81            $41=      16?4                 34:'updated'        	;0
	47  719  IS_SMALLER/19             #42=      #40                  $41                 	;0
	48  719  BOOL/52                   #34=      #42                  ?0                  	;0
	49  719  BOOL_NOT/13               #43=      #34                  ?0                  	;0	<<36
	50  719  JMPZ/43                   ?0        #43                  ?53                 	;0	>>53
	51  720  NOP/0                     ?0        ?0                   ?0                  	;1
	52  720  GOTO/253                  ?0        ?57                  ?35                 	;0
	53  722  FETCH_DIM_R/81            $46=      16?4                 37:'id'             	;0	<<50
	54  722  FETCH_DIM_W/84            $44=      16?5                 36:'changes'        	;0
	55  722  ASSIGN_DIM/147            ?32       $44                  ?4397406            	;0
	56  722  OP_DATA/137               ?0        $46                  ?0                  	;0
	57  724  FETCH_DIM_R/81            $48=      16?4                 38:'id'             	;0
	58  724  ASSIGN_DIM/147            ?34       16?0                 ?0                  	;0
	59  724  OP_DATA/137               ?0        $48                  ?0                  	;0
	60  725  FETCH_STATIC_PROP_R/173   $50=      39:'rSettings'       40:'XUI'            	;0
	61  725  FETCH_DIM_R/81            $51=      $50                  42:'case_sensitive_line'	;0
	62  725  JMPZ/43                   ?0        $51                  ?69                 	;0	>>69
	63  725  FETCH_DIM_R/81            $52=      16?4                 43:'username'       	;0
	64  725  CONCAT/8                  #53=      $52                  44:'_'              	;0
	65  725  FETCH_DIM_R/81            $54=      16?4                 45:'password'       	;0
	66  725  CONCAT/8                  #55=      #53                  $54                 	;0
	67  725  QM_ASSIGN/22              #56=      #55                  ?0                  	;0
	68  725  JMP/42                    ?0        ?77                  ?0                  	;0	>>77
	69  725  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'strtolower'     	;1	<<62
	70  725  FETCH_DIM_R/81            $57=      16?4                 48:'username'       	;0
	71  725  CONCAT/8                  #58=      $57                  49:'_'              	;0
	72  725  FETCH_DIM_R/81            $59=      16?4                 50:'password'       	;0
	73  725  CONCAT/8                  #60=      #58                  $59                 	;0
	74  725  SEND_VAL_EX/116           ?80       #60                  ?1                  	;0
	75  725  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	76  725  QM_ASSIGN/22              #56=      $61                  ?0                  	;0
	77  725  ASSIGN_DIM/147            ?36       16?1                 ?0                  	;0	<<68
	78  725  OP_DATA/137               ?0        #56                  ?0                  	;0
	79  726  FETCH_DIM_R/81            $62=      16?4                 51:'access_token'   	;0
	80  726  BOOL_NOT/13               #63=      $62                  ?0                  	;0
	81  726  JMPZ/43                   ?0        #63                  ?84                 	;0	>>84
	82  727  NOP/0                     ?0        ?0                   ?0                  	;1
	83  727  GOTO/253                  ?0        ?87                  ?52                 	;0
	84  729  FETCH_DIM_R/81            $65=      16?4                 53:'access_token'   	;0	<<81
	85  729  ASSIGN_DIM/147            ?51       16?2                 ?4397406            	;0
	86  729  OP_DATA/137               ?0        $65                  ?0                  	;0
	87  731  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
	88  731  FE_FREE/127               ?0        $28                  ?0                  	;0	<<26
	89  733  GOTO/253                  ?0        ?144                 ?54                 	;0
	90  735  BIND_GLOBAL/168           ?0        16?3                 55:'b62d6460eb33ea07'	;0	<<0
	91  736  ASSIGN/38                 ?53       16?5                 56:array (
  'changes' => 
  array (
  ),
  'delete_i' => 
  array (
  ),
  'delete_c' => 
  array (
  ),
  'delete_t' => 
  array (
  ),
)	;0
	92  737  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'glob'           	;1
	93  737  FETCH_CONSTANT/99         #67=      ?0                   59:'LINES_TMP_PATH' 	;16
	94  737  CONCAT/8                  #68=      #67                  62:'line_i_*'       	;0
	95  737  SEND_VAL_EX/116           ?80       #68                  ?1                  	;0
	96  737  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
	97  737  ASSIGN/38                 ?57       16?6                 $69                 	;0
	98  738  INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'glob'           	;1
	99  738  FETCH_CONSTANT/99         #71=      ?0                   65:'LINES_TMP_PATH' 	;16
	100 738  CONCAT/8                  #72=      #71                  68:'line_c_*'       	;0
	101 738  SEND_VAL_EX/116           ?80       #72                  ?1                  	;0
	102 738  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
	103 738  ASSIGN/38                 ?61       16?7                 $73                 	;0
	104 739  INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'glob'           	;1
	105 739  FETCH_CONSTANT/99         #75=      ?0                   71:'LINES_TMP_PATH' 	;16
	106 739  CONCAT/8                  #76=      #75                  74:'line_t_*'       	;0
	107 739  SEND_VAL_EX/116           ?80       #76                  ?1                  	;0
	108 739  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
	109 739  ASSIGN/38                 ?65       16?8                 $77                 	;0
	110 740  GOTO/253                  ?0        ?1                   ?75                 	;0
	111 743  INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'array_flip'     	;1
	112 743  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	113 743  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
	114 743  ASSIGN/38                 ?67       16?1                 $79                 	;0
	115 744  FE_RESET_R/77             $81=      16?7                 ?138                	;0
	116 744  FE_FETCH_R/78             ?0        $81                  16?9                	;138	>>138	<<137
	117 745  INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'explode'        	;3
	118 745  SEND_VAL_EX/116           ?80       80:'line_c_'         ?1                  	;0
	119 745  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	120 745  SEND_VAL_EX/116           ?112      81:2                 ?3                  	;0
	121 745  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
	122 745  FETCH_DIM_R/81            $83=      $82                  82:1                	;0
	123 745  JMP_SET/152               #84=      $83                  ?125                	;0
	124 745  QM_ASSIGN/22              #84=      83:NULL              ?0                  	;0
	125 745  ASSIGN/38                 ?72       16?10                #84                 	;0
	126 746  JMPZ_EX/46                #86=      16?10                ?130                	;0	>>130
	127 746  ISSET_ISEMPTY_DIM_OBJ/115 #87=      16?1                 16?10               	;33554432
	128 746  BOOL_NOT/13               #88=      #87                  ?0                  	;0
	129 746  BOOL/52                   #86=      #88                  ?0                  	;0
	130 746  BOOL_NOT/13               #89=      #86                  ?0                  	;0	<<126
	131 746  JMPZ/43                   ?0        #89                  ?134                	;0	>>134
	132 747  NOP/0                     ?0        ?0                   ?0                  	;1
	133 747  GOTO/253                  ?0        ?137                 ?84                 	;0
	134 749  FETCH_DIM_W/84            $90=      16?5                 85:'delete_c'       	;0	<<131
	135 749  ASSIGN_DIM/147            ?78       $90                  ?4397406            	;0
	136 749  OP_DATA/137               ?0        16?10                ?0                  	;0
	137 751  JMP/42                    ?0        ?116                 ?0                  	;0	>>116
	138 751  FE_FREE/127               ?0        $81                  ?0                  	;0	<<115
	139 754  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'array_flip'     	;1
	140 754  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	141 754  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	142 754  ASSIGN/38                 ?80       16?2                 $92                 	;0
	143 755  GOTO/253                  ?0        ?177                 ?88                 	;0
	144 760  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'array_flip'     	;1
	145 760  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	146 760  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	147 760  ASSIGN/38                 ?82       16?0                 $94                 	;0
	148 761  FE_RESET_R/77             $96=      16?6                 ?175                	;0
	149 761  FE_FETCH_R/78             ?0        $96                  16?9                	;175	>>175	<<174
	150 762  INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'intval'         	;1
	151 762  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'explode'        	;3
	152 762  SEND_VAL_EX/116           ?80       95:'line_i_'         ?1                  	;0
	153 762  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	154 762  SEND_VAL_EX/116           ?112      96:2                 ?3                  	;0
	155 762  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
	156 762  SEPARATE/156              $97=      $97                  ?0                  	;0
	157 762  FETCH_DIM_FUNC_ARG/93     $98=      $97                  97:1                	;1
	158 762  SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
	159 762  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	160 762  JMP_SET/152               #100=     $99                  ?162                	;0
	161 762  QM_ASSIGN/22              #100=     98:NULL              ?0                  	;0
	162 762  ASSIGN/38                 ?88       16?11                #100                	;0
	163 763  JMPZ_EX/46                #102=     16?11                ?167                	;0	>>167
	164 763  ISSET_ISEMPTY_DIM_OBJ/115 #103=     16?0                 16?11               	;33554432
	165 763  BOOL_NOT/13               #104=     #103                 ?0                  	;0
	166 763  BOOL/52                   #102=     #104                 ?0                  	;0
	167 763  BOOL_NOT/13               #105=     #102                 ?0                  	;0	<<163
	168 763  JMPZ/43                   ?0        #105                 ?171                	;0	>>171
	169 764  NOP/0                     ?0        ?0                   ?0                  	;1
	170 764  GOTO/253                  ?0        ?174                 ?99                 	;0
	171 766  FETCH_DIM_W/84            $106=     16?5                 100:'delete_i'      	;0	<<168
	172 766  ASSIGN_DIM/147            ?94       $106                 ?4397406            	;0
	173 766  OP_DATA/137               ?0        16?11                ?0                  	;0
	174 768  JMP/42                    ?0        ?149                 ?0                  	;0	>>149
	175 768  FE_FREE/127               ?0        $96                  ?0                  	;0	<<148
	176 770  GOTO/253                  ?0        ?111                 ?101                	;0
	177 772  FE_RESET_R/77             $108=     16?8                 ?200                	;0
	178 772  FE_FETCH_R/78             ?0        $108                 16?9                	;200	>>200	<<199
	179 773  INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'explode'       	;3
	180 773  SEND_VAL_EX/116           ?80       104:'line_t_'        ?1                  	;0
	181 773  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	182 773  SEND_VAL_EX/116           ?112      105:2                ?3                  	;0
	183 773  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
	184 773  FETCH_DIM_R/81            $110=     $109                 106:1               	;0
	185 773  JMP_SET/152               #111=     $110                 ?187                	;0
	186 773  QM_ASSIGN/22              #111=     107:NULL             ?0                  	;0
	187 773  ASSIGN/38                 ?99       16?12                #111                	;0
	188 774  JMPZ_EX/46                #113=     16?12                ?192                	;0	>>192
	189 774  ISSET_ISEMPTY_DIM_OBJ/115 #114=     16?2                 16?12               	;33554432
	190 774  BOOL_NOT/13               #115=     #114                 ?0                  	;0
	191 774  BOOL/52                   #113=     #115                 ?0                  	;0
	192 774  BOOL_NOT/13               #116=     #113                 ?0                  	;0	<<188
	193 774  JMPZ/43                   ?0        #116                 ?196                	;0	>>196
	194 775  NOP/0                     ?0        ?0                   ?0                  	;1
	195 775  GOTO/253                  ?0        ?199                 ?108                	;0
	196 777  FETCH_DIM_W/84            $117=     16?5                 109:'delete_t'      	;0	<<193
	197 777  ASSIGN_DIM/147            ?105      $117                 ?4397406            	;0
	198 777  OP_DATA/137               ?0        16?12                ?0                  	;0
	199 779  JMP/42                    ?0        ?178                 ?0                  	;0	>>178
	200 779  FE_FREE/127               ?0        $108                 ?0                  	;0	<<177
	201 782  RETURN/62                 ?0        16?5                 ?0                  	;0
	202 783  GOTO/253                  ?0        ?203                 ?110                	;0
	203 785  NOP/0                     ?0        111:NULL             ?0                  	;4294967295
	*/
}

function getChangedStreams()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   816  JMP/42                    ?0        ?1                   ?0                  	;0	>>1
	1   818  BIND_GLOBAL/168           ?0        16?0                 1:'b62d6460eb33ea07'	;0	<<0
	2   819  ASSIGN/38                 ?0        16?1                 2:array (
  'changes' => 
  array (
  ),
  'delete' => 
  array (
  ),
)	;0
	3   820  ASSIGN/38                 ?1        16?2                 3:array (
)         	;0
	4   821  INIT_METHOD_CALL/112      ?0        16?0                 4:'query'           	;1
	5   821  SEND_VAL_EX/116           ?80       6:'SELECT `id`, GREATEST(IFNULL(UNIX_TIMESTAMP(`streams`.`updated`), 0), IFNULL(MAX(UNIX_TIMESTAMP(`streams_servers`.`updated`)), 0)) AS `updated` FROM `streams` LEFT JOIN `streams_servers` ON `streams`.`id` = `streams_servers`.`stream_id` GROUP BY `id`;' ?1                  	;0
	6   821  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	7   822  FETCH_OBJ_R/82            $9=       16?0                 7:'dbh'             	;0
	8   822  JMPZ_EX/46                #10=      $9                   ?11                 	;0	>>11
	9   822  FETCH_OBJ_R/82            $11=      16?0                 8:'result'          	;0
	10  822  BOOL/52                   #10=      $11                  ?0                  	;0
	11  822  BOOL_NOT/13               #12=      #10                  ?0                  	;0	<<8
	12  822  JMPZ/43                   ?0        #12                  ?14                 	;0	>>14
	13  823  GOTO/253                  ?0        ?63                  ?9                  	;0
	14  825  GOTO/253                  ?0        ?15                  ?10                 	;0	<<12
	15  827  FETCH_OBJ_R/82            $13=      16?0                 11:'result'         	;0
	16  827  INIT_METHOD_CALL/112      ?0        $13                  12:'rowCount'       	;0
	17  827  DO_FCALL/60               $14=      ?0                   ?0                  	;0
	18  827  IS_SMALLER/19             #15=      14:0                 $14                 	;0
	19  827  BOOL_NOT/13               #16=      #15                  ?0                  	;0
	20  827  JMPZ/43                   ?0        #16                  ?22                 	;0	>>22
	21  828  GOTO/253                  ?0        ?63                  ?15                 	;0
	22  830  FETCH_OBJ_R/82            $17=      16?0                 16:'result'         	;0	<<20
	23  830  INIT_METHOD_CALL/112      ?0        $17                  17:'fetchAll'       	;1
	24  830  FETCH_CLASS_CONSTANT/181  #18=      20:'PDO'             19:'FETCH_ASSOC'    	;0
	25  830  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
	26  830  DO_FCALL/60               $19=      ?0                   ?0                  	;0
	27  830  FE_RESET_R/77             $20=      $19                  ?62                 	;0
	28  830  FE_FETCH_R/78             ?0        $20                  16?3                	;62	>>62	<<61
	29  831  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'file_exists'    	;1
	30  831  FETCH_CONSTANT/99         #21=      ?0                   24:'STREAMS_TMP_PATH'	;16
	31  831  CONCAT/8                  #22=      #21                  27:'stream_'        	;0
	32  831  FETCH_DIM_R/81            $23=      16?3                 28:'id'             	;0
	33  831  CONCAT/8                  #24=      #22                  $23                 	;0
	34  831  SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
	35  831  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	36  831  BOOL_NOT/13               #26=      $25                  ?0                  	;0
	37  831  JMPNZ_EX/47               #26=      #26                  ?50                 	;0	>>50
	38  831  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'filemtime'      	;1
	39  831  FETCH_CONSTANT/99         #27=      ?0                   31:'STREAMS_TMP_PATH'	;16
	40  831  CONCAT/8                  #28=      #27                  34:'stream_'        	;0
	41  831  FETCH_DIM_R/81            $29=      16?3                 35:'id'             	;0
	42  831  CONCAT/8                  #30=      #28                  $29                 	;0
	43  831  SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
	44  831  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	45  831  JMP_SET/152               #32=      $31                  ?47                 	;0
	46  831  QM_ASSIGN/22              #32=      36:0                 ?0                  	;0
	47  831  FETCH_DIM_R/81            $33=      16?3                 37:'updated'        	;0
	48  831  IS_SMALLER/19             #34=      #32                  $33                 	;0
	49  831  BOOL/52                   #26=      #34                  ?0                  	;0
	50  831  BOOL_NOT/13               #35=      #26                  ?0                  	;0	<<37
	51  831  JMPZ/43                   ?0        #35                  ?54                 	;0	>>54
	52  832  NOP/0                     ?0        ?0                   ?0                  	;1
	53  832  GOTO/253                  ?0        ?58                  ?38                 	;0
	54  834  FETCH_DIM_R/81            $38=      16?3                 40:'id'             	;0	<<51
	55  834  FETCH_DIM_W/84            $36=      16?1                 39:'changes'        	;0
	56  834  ASSIGN_DIM/147            ?31       $36                  ?4397406            	;0
	57  834  OP_DATA/137               ?0        $38                  ?0                  	;0
	58  836  FETCH_DIM_R/81            $40=      16?3                 41:'id'             	;0
	59  836  ASSIGN_DIM/147            ?33       16?2                 ?0                  	;0
	60  836  OP_DATA/137               ?0        $40                  ?0                  	;0
	61  837  JMP/42                    ?0        ?28                  ?0                  	;0	>>28
	62  837  FE_FREE/127               ?0        $20                  ?0                  	;0	<<27
	63  842  GOTO/253                  ?0        ?64                  ?42                 	;0
	64  844  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'array_flip'     	;1
	65  844  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	66  844  DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	67  844  ASSIGN/38                 ?36       16?2                 $41                 	;0
	68  845  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'glob'           	;1
	69  845  FETCH_CONSTANT/99         #43=      ?0                   47:'STREAMS_TMP_PATH'	;16
	70  845  CONCAT/8                  #44=      #43                  50:'stream_*'       	;0
	71  845  SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
	72  845  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
	73  845  FE_RESET_R/77             $46=      $45                  ?94                 	;0
	74  845  FE_FETCH_R/78             ?0        $46                  16?4                	;94	>>94	<<93
	75  846  INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'intval'         	;1
	76  846  INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'end'            	;1
	77  846  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'explode'        	;2
	78  846  SEND_VAL_EX/116           ?80       57:'_'               ?1                  	;0
	79  846  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	80  846  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
	81  846  SEND_VAR_NO_REF_EX/50     ?80       $47                  ?1                  	;0
	82  846  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
	83  846  SEND_VAR_NO_REF_EX/50     ?80       $48                  ?1                  	;0
	84  846  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
	85  846  ASSIGN/38                 ?44       16?5                 $49                 	;0
	86  847  ISSET_ISEMPTY_DIM_OBJ/115 #51=      16?2                 16?5                	;33554432
	87  847  JMPZ/43                   ?0        #51                  ?90                 	;0	>>90
	88  848  NOP/0                     ?0        ?0                   ?0                  	;1
	89  848  GOTO/253                  ?0        ?93                  ?58                 	;0
	90  850  FETCH_DIM_W/84            $52=      16?1                 59:'delete'         	;0	<<87
	91  850  ASSIGN_DIM/147            ?47       $52                  ?4397406            	;0
	92  850  OP_DATA/137               ?0        16?5                 ?0                  	;0
	93  852  JMP/42                    ?0        ?74                  ?0                  	;0	>>74
	94  852  FE_FREE/127               ?0        $46                  ?0                  	;0	<<73
	95  855  RETURN/62                 ?0        16?1                 ?0                  	;0
	96  856  GOTO/253                  ?0        ?97                  ?60                 	;0
	97  858  NOP/0                     ?0        61:NULL              ?0                  	;4294967295
	*/
}

function aB8369074df2AaA3($A7d54b094ae83c95, $E74f3185882c9d00, $A57cdfc6daa6dbad)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    860   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    860   RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    860   RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    862   JMP/42                    ?0        ?683                 ?0                  	;0	>>683
	4    865   FETCH_STATIC_PROP_R/173   $38=      1:'rCached'          2:'XUI'             	;0
	5    865   BOOL_NOT/13               #39=      $38                  ?0                  	;0
	6    865   JMPZ_EX/46                #39=      #39                  ?10                 	;0	>>10
	7    865   ISSET_ISEMPTY_CV/197      #40=      16?3                 ?0                  	;33554432
	8    865   BOOL_NOT/13               #41=      #40                  ?0                  	;0
	9    865   BOOL/52                   #39=      #41                  ?0                  	;0
	10   865   BOOL_NOT/13               #42=      #39                  ?0                  	;0	<<6
	11   865   JMPZ/43                   ?0        #42                  ?13                 	;0	>>13
	12   866   GOTO/253                  ?0        ?48                  ?4                  	;0
	13   868   ECHO/40                   ?0        5:'Cache is disabled.
' ?0                  	;0	<<11
	14   869   ECHO/40                   ?0        6:'Generating group permissions...
' ?0                  	;0
	15   870   INIT_FCALL/61             ?0        ?2048                7:'generategroups'  	;0
	16   870   DO_FCALL/60               ?5        ?0                   ?0                  	;0
	17   871   GOTO/253                  ?0        ?675                 ?8                  	;0
	18   873   FETCH_CONSTANT/99         #44=      ?0                   9:'STREAMS_TMP_PATH'	;16
	19   873   INIT_ARRAY/71             #45=      #44                  ?0                  	;12
	20   873   FETCH_CONSTANT/99         #46=      ?0                   12:'LINES_TMP_PATH' 	;16
	21   873   ADD_ARRAY_ELEMENT/72      #45=      #46                  ?0                  	;0
	22   873   FETCH_CONSTANT/99         #47=      ?0                   15:'SERIES_TMP_PATH'	;16
	23   873   ADD_ARRAY_ELEMENT/72      #45=      #47                  ?0                  	;0
	24   873   FE_RESET_R/77             $48=      #45                  ?38                 	;0
	25   873   FE_FETCH_R/78             ?0        $48                  16?4                	;38	>>38	<<37
	26   874   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'scandir'        	;1
	27   874   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	28   874   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
	29   874   FE_RESET_R/77             $50=      $49                  ?36                 	;0
	30   874   FE_FETCH_R/78             ?0        $50                  16?5                	;36	>>36	<<35
	31   875   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'unlink'         	;1
	32   875   CONCAT/8                  #51=      16?4                 16?5                	;0
	33   875   SEND_VAL_EX/116           ?80       #51                  ?1                  	;0
	34   875   DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
	35   876   JMP/42                    ?0        ?30                  ?0                  	;0	>>30
	36   876   FE_FREE/127               ?0        $50                  ?0                  	;0	<<29
	37   879   JMP/42                    ?0        ?25                  ?0                  	;0	>>25
	38   879   FE_FREE/127               ?0        $48                  ?0                  	;0	<<24
	39   882   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'file_put_contents'	;2
	40   882   FETCH_CONSTANT/99         #53=      ?0                   24:'CACHE_TMP_PATH' 	;16
	41   882   CONCAT/8                  #54=      #53                  27:'cache_complete' 	;0
	42   882   SEND_VAL_EX/116           ?80       #54                  ?1                  	;0
	43   882   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'time'           	;0
	44   882   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
	45   882   SEND_VAR_NO_REF_EX/50     ?96       $55                  ?2                  	;0
	46   882   DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
	47   883   EXIT/79                   ?0        ?0                   ?0                  	;0
	48   885   GOTO/253                  ?0        ?49                  ?30                 	;0
	49   887   SWITCH_STRING/188         ?0        16?0                 31:array (
  'lines' => 67,
  'lines_update' => 72,
  'series' => 78,
  'streams' => 83,
  'streams_update' => 88,
  'groups' => 94,
  'lines_per_ip' => 97,
  'theft_detection' => 100,
)	;103
	50   888   CASE/48                   #57=      16?0                 32:'lines'          	;0	>>52
	51   888   JMPNZ/44                  ?0        #57                  ?67                 	;0	>>67
	52   891   CASE/48                   #57=      16?0                 33:'lines_update'   	;0	>>54	<<50
	53   891   JMPNZ/44                  ?0        #57                  ?72                 	;0	>>72
	54   894   CASE/48                   #57=      16?0                 34:'series'         	;0	>>56	<<52
	55   894   JMPNZ/44                  ?0        #57                  ?78                 	;0	>>78
	56   897   CASE/48                   #57=      16?0                 35:'streams'        	;0	>>58	<<54
	57   897   JMPNZ/44                  ?0        #57                  ?83                 	;0	>>83
	58   900   CASE/48                   #57=      16?0                 36:'streams_update' 	;0	>>60	<<56
	59   900   JMPNZ/44                  ?0        #57                  ?88                 	;0	>>88
	60   903   CASE/48                   #57=      16?0                 37:'groups'         	;0	>>62	<<58
	61   903   JMPNZ/44                  ?0        #57                  ?94                 	;0	>>94
	62   906   CASE/48                   #57=      16?0                 38:'lines_per_ip'   	;0	>>64	<<60
	63   906   JMPNZ/44                  ?0        #57                  ?97                 	;0	>>97
	64   909   CASE/48                   #57=      16?0                 39:'theft_detection'	;0	>>66	<<62
	65   909   JMPNZ/44                  ?0        #57                  ?100                	;0	>>100
	66   909   JMP/42                    ?0        ?103                 ?0                  	;0	>>103	<<64
	67   889   INIT_FCALL/61             ?0        ?1792                40:'generatelines'  	;2	<<51
	68   889   SEND_VAR/117              ?80       16?1                 ?1                  	;0
	69   889   SEND_VAR/117              ?96       16?2                 ?2                  	;0
	70   889   DO_FCALL/60               ?20       ?0                   ?0                  	;0
	71   890   GOTO/253                  ?0        ?674                 ?41                 	;0
	72   892   INIT_FCALL/61             ?0        ?1792                42:'generatelines'  	;3	<<53
	73   892   SEND_VAL/65               ?80       43:NULL              ?1                  	;0
	74   892   SEND_VAL/65               ?96       44:NULL              ?2                  	;0
	75   892   SEND_VAR/117              ?112      16?3                 ?3                  	;0
	76   892   DO_FCALL/60               ?21       ?0                   ?0                  	;0
	77   893   GOTO/253                  ?0        ?674                 ?45                 	;0
	78   895   INIT_FCALL/61             ?0        ?1136                46:'generateseries' 	;2	<<55
	79   895   SEND_VAR/117              ?80       16?1                 ?1                  	;0
	80   895   SEND_VAR/117              ?96       16?2                 ?2                  	;0
	81   895   DO_FCALL/60               ?22       ?0                   ?0                  	;0
	82   896   GOTO/253                  ?0        ?674                 ?47                 	;0
	83   898   INIT_FCALL/61             ?0        ?2208                48:'generatestreams'	;2	<<57
	84   898   SEND_VAR/117              ?80       16?1                 ?1                  	;0
	85   898   SEND_VAR/117              ?96       16?2                 ?2                  	;0
	86   898   DO_FCALL/60               ?23       ?0                   ?0                  	;0
	87   899   GOTO/253                  ?0        ?674                 ?49                 	;0
	88   901   INIT_FCALL/61             ?0        ?2208                50:'generatestreams'	;3	<<59
	89   901   SEND_VAL/65               ?80       51:NULL              ?1                  	;0
	90   901   SEND_VAL/65               ?96       52:NULL              ?2                  	;0
	91   901   SEND_VAR/117              ?112      16?3                 ?3                  	;0
	92   901   DO_FCALL/60               ?24       ?0                   ?0                  	;0
	93   902   GOTO/253                  ?0        ?674                 ?53                 	;0
	94   904   INIT_FCALL/61             ?0        ?2048                54:'generategroups' 	;0	<<61
	95   904   DO_FCALL/60               ?25       ?0                   ?0                  	;0
	96   905   GOTO/253                  ?0        ?674                 ?55                 	;0
	97   907   INIT_FCALL/61             ?0        ?400                 56:'generatelinesperip'	;0	<<63
	98   907   DO_FCALL/60               ?26       ?0                   ?0                  	;0
	99   908   GOTO/253                  ?0        ?674                 ?57                 	;0
	100  910   INIT_FCALL/61             ?0        ?400                 58:'generatetheftdetection'	;0	<<65
	101  910   DO_FCALL/60               ?27       ?0                   ?0                  	;0
	102  911   GOTO/253                  ?0        ?674                 ?59                 	;0
	103  913   GOTO/253                  ?0        ?584                 ?60                 	;0	<<66
	104  915   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'array_chunk'    	;2
	105  915   FETCH_DIM_FUNC_ARG/93     $66=      16?6                 63:'changes'        	;1
	106  915   SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
	107  915   SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	108  915   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	109  915   FE_RESET_R/77             $68=      $67                  ?125                	;0
	110  915   FE_FETCH_R/78             ?0        $68                  16?8                	;125	>>125	<<124
	111  916   FETCH_CONSTANT/99         #70=      ?0                   64:'PHP_BIN'        	;16
	112  916   CONCAT/8                  #71=      #70                  67:' '              	;0
	113  916   FETCH_CONSTANT/99         #72=      ?0                   68:'CRON_PATH'      	;16
	114  916   CONCAT/8                  #73=      #71                  #72                 	;0
	115  916   CONCAT/8                  #74=      #73                  71:'cache_engine.php "lines_update" "'	;0
	116  916   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'implode'        	;2
	117  916   SEND_VAL_EX/116           ?80       74:','               ?1                  	;0
	118  916   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	119  916   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
	120  916   CONCAT/8                  #76=      #74                  $75                 	;0
	121  916   CONCAT/8                  #77=      #76                  75:'"'              	;0
	122  916   ASSIGN_DIM/147            ?31       16?9                 ?4442274            	;0
	123  916   OP_DATA/137               ?0        #77                  ?0                  	;0
	124  917   JMP/42                    ?0        ?110                 ?0                  	;0	>>110
	125  917   FE_FREE/127               ?0        $68                  ?0                  	;0	<<109
	126  922   INIT_METHOD_CALL/112      ?0        16?10                76:'query'          	;1
	127  922   SEND_VAL_EX/116           ?80       78:'SELECT COUNT(*) AS `count` FROM `streams_episodes` WHERE `stream_id` IN (SELECT `id` FROM `streams` WHERE `type` = 5);' ?1                  	;0
	128  922   DO_FCALL/60               ?40       ?0                   ?0                  	;0
	129  923   GOTO/253                  ?0        ?282                 ?79                 	;0
	130  925   INIT_FCALL/61             ?0        ?1984                80:'getchangedlines'	;0
	131  925   DO_FCALL/60               $79=      ?0                   ?0                  	;0
	132  925   ASSIGN/38                 ?42       16?6                 $79                 	;0
	133  926   FETCH_DIM_R/81            $82=      16?6                 82:'delete_i'       	;0
	134  926   ASSIGN_DIM/147            ?43       16?11                81:'lines_i'        	;0
	135  926   OP_DATA/137               ?0        $82                  ?0                  	;0
	136  927   FETCH_DIM_R/81            $84=      16?6                 84:'delete_c'       	;0
	137  927   ASSIGN_DIM/147            ?45       16?11                83:'lines_c'        	;0
	138  927   OP_DATA/137               ?0        $84                  ?0                  	;0
	139  928   FETCH_DIM_R/81            $86=      16?6                 86:'delete_t'       	;0
	140  928   ASSIGN_DIM/147            ?47       16?11                85:'lines_t'        	;0
	141  928   OP_DATA/137               ?0        $86                  ?0                  	;0
	142  929   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'count'          	;1
	143  929   FETCH_DIM_FUNC_ARG/93     $87=      16?6                 89:'changes'        	;1
	144  929   SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
	145  929   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
	146  929   IS_SMALLER/19             #89=      90:0                 $88                 	;0
	147  929   BOOL_NOT/13               #90=      #89                  ?0                  	;0
	148  929   JMPZ/43                   ?0        #90                  ?150                	;0	>>150
	149  930   GOTO/253                  ?0        ?126                 ?91                 	;0
	150  932   GOTO/253                  ?0        ?104                 ?92                 	;0	<<148
	151  935   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'file_put_contents'	;2
	152  935   FETCH_CONSTANT/99         #91=      ?0                   95:'SERIES_TMP_PATH'	;16
	153  935   CONCAT/8                  #92=      #91                  98:'series_categories'	;0
	154  935   SEND_VAL_EX/116           ?80       #92                  ?1                  	;0
	155  935   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'igbinary_serialize'	;1
	156  935   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	157  935   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	158  935   SEND_VAR_NO_REF_EX/50     ?96       $93                  ?2                  	;0
	159  935   DO_FCALL_BY_NAME/131      ?56       ?0                   ?0                  	;0
	160  936   ASSIGN/38                 ?57       16?11                101:array (
  'streams' => 
  array (
  ),
  'lines_i' => 
  array (
  ),
  'lines_c' => 
  array (
  ),
  'lines_t' => 
  array (
  ),
)	;0
	161  937   ASSIGN/38                 ?58       16?9                 102:array (
)       	;0
	162  938   FETCH_STATIC_PROP_R/173   $97=      103:'rSettings'      104:'XUI'           	;0
	163  938   FETCH_DIM_R/81            $98=      $97                  106:'cache_changes' 	;0
	164  938   JMPZ/43                   ?0        $98                  ?166                	;0	>>166
	165  939   GOTO/253                  ?0        ?357                 ?107                	;0
	166  941   GOTO/253                  ?0        ?423                 ?108                	;0	<<164
	167  943   UNSET_CV/196              ?0        16?9                 ?0                  	;0
	168  944   ASSIGN/38                 $99=      16?14                109:array (
)       	;0
	169  944   ASSIGN/38                 ?62       16?13                $99                 	;0
	170  945   FE_RESET_R/77             $101=     16?15                ?271                	;0
	171  945   FE_FETCH_R/78             ?0        $101                 16?16               	;271	>>271	<<270
	172  946   NOP/0                     ?0        ?0                   ?0                  	;1
	173  946   GOTO/253                  ?0        ?234                 ?110                	;0
	174  948   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'file_exists'   	;1
	175  948   FETCH_CONSTANT/99         #102=     ?0                   113:'SERIES_TMP_PATH'	;16
	176  948   CONCAT/8                  #103=     #102                 116:'series_episodes_'	;0
	177  948   CONCAT/8                  #104=     #103                 16?16               	;0
	178  948   SEND_VAL_EX/116           ?80       #104                 ?1                  	;0
	179  948   DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
	180  948   BOOL_NOT/13               #106=     $105                 ?0                  	;0
	181  948   JMPZ/43                   ?0        #106                 ?184                	;0	>>184
	182  949   NOP/0                     ?0        ?0                   ?0                  	;1
	183  949   GOTO/253                  ?0        ?268                 ?117                	;0
	184  951   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'igbinary_unserialize'	;1	<<181
	185  951   INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'file_get_contents'	;1
	186  951   FETCH_CONSTANT/99         #107=     ?0                   122:'SERIES_TMP_PATH'	;16
	187  951   CONCAT/8                  #108=     #107                 125:'series_episodes_'	;0
	188  951   CONCAT/8                  #109=     #108                 16?16               	;0
	189  951   SEND_VAL_EX/116           ?80       #109                 ?1                  	;0
	190  951   DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
	191  951   SEND_VAR_NO_REF_EX/50     ?80       $110                 ?1                  	;0
	192  951   DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
	193  951   ASSIGN/38                 ?74       16?17                $111                	;0
	194  952   INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'array_keys'    	;1
	195  952   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	196  952   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
	197  952   FE_RESET_R/77             $114=     $113                 ?225                	;0
	198  952   FE_FETCH_R/78             ?0        $114                 16?18               	;225	>>225	<<224
	199  953   ISSET_ISEMPTY_DIM_OBJ/115 #115=     16?13                16?18               	;33554432
	200  953   JMPZ/43                   ?0        #115                 ?204                	;0	>>204
	201  954   NOP/0                     ?0        ?0                   ?0                  	;1
	202  954   NOP/0                     ?0        ?0                   ?0                  	;1
	203  954   GOTO/253                  ?0        ?206                 ?128                	;0
	204  956   ASSIGN_DIM/147            ?78       16?13                16?18               	;0	<<200
	205  956   OP_DATA/137               ?0        129:array (
)        ?0                  	;0
	206  958   INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'array_keys'    	;1
	207  958   FETCH_DIM_FUNC_ARG/93     $117=     16?17                16?18               	;1
	208  958   SEND_VAR_EX/66            ?80       $117                 ?1                  	;0
	209  958   DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
	210  958   FE_RESET_R/77             $119=     $118                 ?223                	;0
	211  958   FE_FETCH_R/78             ?0        $119                 16?19               	;223	>>223	<<222
	212  959   FETCH_DIM_R/81            $120=     16?17                16?18               	;0
	213  959   FETCH_DIM_R/81            $121=     $120                 16?19               	;0
	214  959   FE_RESET_R/77             $122=     $121                 ?221                	;0
	215  959   FE_FETCH_R/78             ?0        $122                 16?20               	;221	>>221	<<220
	216  960   FETCH_DIM_W/84            $123=     16?13                16?18               	;0
	217  960   FETCH_DIM_W/84            $124=     $123                 16?19               	;0
	218  960   ASSIGN_DIM/147            ?87       $124                 ?4410621            	;0
	219  960   OP_DATA/137               ?0        16?20                ?0                  	;0
	220  961   JMP/42                    ?0        ?215                 ?0                  	;0	>>215
	221  961   FE_FREE/127               ?0        $122                 ?0                  	;0	<<214
	222  964   JMP/42                    ?0        ?211                 ?0                  	;0	>>211
	223  964   FE_FREE/127               ?0        $119                 ?0                  	;0	<<210
	224  967   JMP/42                    ?0        ?198                 ?0                  	;0	>>198
	225  967   FE_FREE/127               ?0        $114                 ?0                  	;0	<<197
	226  970   INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'unlink'        	;1
	227  970   FETCH_CONSTANT/99         #126=     ?0                   134:'SERIES_TMP_PATH'	;16
	228  970   CONCAT/8                  #127=     #126                 137:'series_episodes_'	;0
	229  970   CONCAT/8                  #128=     #127                 16?16               	;0
	230  970   SEND_VAL_EX/116           ?80       #128                 ?1                  	;0
	231  970   DO_FCALL_BY_NAME/131      ?91       ?0                   ?0                  	;0
	232  971   NOP/0                     ?0        ?0                   ?0                  	;1
	233  971   GOTO/253                  ?0        ?268                 ?138                	;0
	234  973   INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'file_exists'   	;1
	235  973   FETCH_CONSTANT/99         #130=     ?0                   141:'SERIES_TMP_PATH'	;16
	236  973   CONCAT/8                  #131=     #130                 144:'series_map_'   	;0
	237  973   CONCAT/8                  #132=     #131                 16?16               	;0
	238  973   SEND_VAL_EX/116           ?80       #132                 ?1                  	;0
	239  973   DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
	240  973   BOOL_NOT/13               #134=     $133                 ?0                  	;0
	241  973   JMPZ/43                   ?0        #134                 ?244                	;0	>>244
	242  974   NOP/0                     ?0        ?0                   ?0                  	;1
	243  974   GOTO/253                  ?0        ?266                 ?145                	;0
	244  976   INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'igbinary_unserialize'	;1	<<241
	245  976   INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'file_get_contents'	;1
	246  976   FETCH_CONSTANT/99         #135=     ?0                   150:'SERIES_TMP_PATH'	;16
	247  976   CONCAT/8                  #136=     #135                 153:'series_map_'   	;0
	248  976   CONCAT/8                  #137=     #136                 16?16               	;0
	249  976   SEND_VAL_EX/116           ?80       #137                 ?1                  	;0
	250  976   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
	251  976   SEND_VAR_NO_REF_EX/50     ?80       $138                 ?1                  	;0
	252  976   DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
	253  976   FE_RESET_R/77             $140=     $139                 ?259                	;0
	254  976   FE_FETCH_R/78             #141=     $140                 16?18               	;259	>>259	<<258
	255  976   ASSIGN/38                 ?104      16?21                #141                	;0
	256  977   ASSIGN_DIM/147            ?105      16?14                16?21               	;0
	257  977   OP_DATA/137               ?0        16?18                ?0                  	;0
	258  978   JMP/42                    ?0        ?254                 ?0                  	;0	>>254
	259  978   FE_FREE/127               ?0        $140                 ?0                  	;0	<<253
	260  981   INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'unlink'        	;1
	261  981   FETCH_CONSTANT/99         #144=     ?0                   156:'SERIES_TMP_PATH'	;16
	262  981   CONCAT/8                  #145=     #144                 159:'series_map_'   	;0
	263  981   CONCAT/8                  #146=     #145                 16?16               	;0
	264  981   SEND_VAL_EX/116           ?80       #146                 ?1                  	;0
	265  981   DO_FCALL_BY_NAME/131      ?109      ?0                   ?0                  	;0
	266  983   NOP/0                     ?0        ?0                   ?0                  	;1
	267  983   GOTO/253                  ?0        ?174                 ?160                	;0
	268  987   NOP/0                     ?0        ?0                   ?0                  	;1
	269  987   GOTO/253                  ?0        ?270                 ?161                	;0
	270  988   JMP/42                    ?0        ?171                 ?0                  	;0	>>171
	271  988   FE_FREE/127               ?0        $101                 ?0                  	;0	<<170
	272  991   INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'file_put_contents'	;2
	273  991   FETCH_CONSTANT/99         #148=     ?0                   164:'SERIES_TMP_PATH'	;16
	274  991   CONCAT/8                  #149=     #148                 167:'series_map'    	;0
	275  991   SEND_VAL_EX/116           ?80       #149                 ?1                  	;0
	276  991   INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'igbinary_serialize'	;1
	277  991   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	278  991   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
	279  991   SEND_VAR_NO_REF_EX/50     ?96       $150                 ?2                  	;0
	280  991   DO_FCALL_BY_NAME/131      ?113      ?0                   ?0                  	;0
	281  992   GOTO/253                  ?0        ?498                 ?170                	;0
	282  994   INIT_METHOD_CALL/112      ?0        16?10                171:'get_row'       	;0
	283  994   DO_FCALL/60               $152=     ?0                   ?0                  	;0
	284  994   FETCH_DIM_R/81            $153=     $152                 173:'count'         	;0
	285  994   ASSIGN/38                 ?116      16?22                $153                	;0
	286  995   INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'range'         	;3
	287  995   SEND_VAL_EX/116           ?80       176:0                ?1                  	;0
	288  995   SEND_VAR_EX/66            ?96       16?22                ?2                  	;0
	289  995   SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	290  995   DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
	291  995   ASSIGN/38                 ?118      16?15                $155                	;0
	292  996   JMPZ/43                   ?0        16?15                ?294                	;0	>>294
	293  997   GOTO/253                  ?0        ?295                 ?177                	;0
	294  999   ASSIGN/38                 ?119      16?15                178:array (
  0 => 0,
)	;0	<<292
	295  1001  GOTO/253                  ?0        ?296                 ?179                	;0
	296  1003  FE_RESET_R/77             $158=     16?15                ?319                	;0
	297  1003  FE_FETCH_R/78             ?0        $158                 16?16               	;319	>>319	<<318
	298  1004  ASSIGN/38                 ?121      16?23                16?7                	;0
	299  1005  ADD/1                     #160=     16?16                16?23               	;0
	300  1005  IS_SMALLER/19             #161=     16?22                #160                	;0
	301  1005  BOOL_NOT/13               #162=     #161                 ?0                  	;0
	302  1005  JMPZ/43                   ?0        #162                 ?305                	;0	>>305
	303  1006  NOP/0                     ?0        ?0                   ?0                  	;1
	304  1006  GOTO/253                  ?0        ?307                 ?180                	;0
	305  1008  SUB/2                     #163=     16?22                16?16               	;0	<<302
	306  1008  ASSIGN/38                 ?126      16?23                #163                	;0
	307  1010  FETCH_CONSTANT/99         #166=     ?0                   181:'PHP_BIN'       	;16
	308  1010  CONCAT/8                  #167=     #166                 184:' '             	;0
	309  1010  FETCH_CONSTANT/99         #168=     ?0                   185:'CRON_PATH'     	;16
	310  1010  CONCAT/8                  #169=     #167                 #168                	;0
	311  1010  ROPE_INIT/54              #171=     ?0                   188:'cache_engine.php "series" '	;4
	312  1010  ROPE_ADD/55               #171=     #171                 16?16               	;1
	313  1010  ROPE_ADD/55               #171=     #171                 189:' '             	;2
	314  1010  ROPE_END/56               #170=     #171                 16?23               	;3
	315  1010  CONCAT/8                  #173=     #169                 #170                	;0
	316  1010  ASSIGN_DIM/147            ?127      16?9                 ?2670194032         	;0
	317  1010  OP_DATA/137               ?0        #173                 ?0                  	;0
	318  1011  JMP/42                    ?0        ?297                 ?0                  	;0	>>297
	319  1011  FE_FREE/127               ?0        $158                 ?0                  	;0	<<296
	320  1014  FETCH_STATIC_PROP_R/173   $174=     190:'rSettings'      191:'XUI'           	;0
	321  1014  FETCH_DIM_R/81            $175=     $174                 193:'cache_changes' 	;0
	322  1014  JMPZ/43                   ?0        $175                 ?324                	;0	>>324
	323  1015  GOTO/253                  ?0        ?416                 ?194                	;0
	324  1017  INIT_METHOD_CALL/112      ?0        16?10                195:'query'         	;1	<<322
	325  1017  SEND_VAL_EX/116           ?80       197:'SELECT COUNT(*) AS `count` FROM `streams`;' ?1                  	;0
	326  1017  DO_FCALL/60               ?138      ?0                   ?0                  	;0
	327  1018  INIT_METHOD_CALL/112      ?0        16?10                198:'get_row'       	;0
	328  1018  DO_FCALL/60               $177=     ?0                   ?0                  	;0
	329  1018  FETCH_DIM_R/81            $178=     $177                 200:'count'         	;0
	330  1018  ASSIGN/38                 ?141      16?24                $178                	;0
	331  1019  GOTO/253                  ?0        ?550                 ?201                	;0
	332  1022  FE_RESET_R/77             $180=     16?25                ?355                	;0
	333  1022  FE_FETCH_R/78             ?0        $180                 16?16               	;355	>>355	<<354
	334  1023  ASSIGN/38                 ?143      16?23                16?7                	;0
	335  1024  ADD/1                     #182=     16?16                16?23               	;0
	336  1024  IS_SMALLER/19             #183=     16?26                #182                	;0
	337  1024  BOOL_NOT/13               #184=     #183                 ?0                  	;0
	338  1024  JMPZ/43                   ?0        #184                 ?341                	;0	>>341
	339  1025  NOP/0                     ?0        ?0                   ?0                  	;1
	340  1025  GOTO/253                  ?0        ?343                 ?202                	;0
	341  1027  SUB/2                     #185=     16?26                16?16               	;0	<<338
	342  1027  ASSIGN/38                 ?148      16?23                #185                	;0
	343  1029  FETCH_CONSTANT/99         #188=     ?0                   203:'PHP_BIN'       	;16
	344  1029  CONCAT/8                  #189=     #188                 206:' '             	;0
	345  1029  FETCH_CONSTANT/99         #190=     ?0                   207:'CRON_PATH'     	;16
	346  1029  CONCAT/8                  #191=     #189                 #190                	;0
	347  1029  ROPE_INIT/54              #193=     ?0                   210:'cache_engine.php "lines" '	;4
	348  1029  ROPE_ADD/55               #193=     #193                 16?16               	;1
	349  1029  ROPE_ADD/55               #193=     #193                 211:' '             	;2
	350  1029  ROPE_END/56               #192=     #193                 16?23               	;3
	351  1029  CONCAT/8                  #195=     #191                 #192                	;0
	352  1029  ASSIGN_DIM/147            ?149      16?9                 ?2670194032         	;0
	353  1029  OP_DATA/137               ?0        #195                 ?0                  	;0
	354  1030  JMP/42                    ?0        ?333                 ?0                  	;0	>>333
	355  1030  FE_FREE/127               ?0        $180                 ?0                  	;0	<<332
	356  1033  GOTO/253                  ?0        ?126                 ?212                	;0
	357  1035  GOTO/253                  ?0        ?130                 ?213                	;0
	358  1037  GOTO/253                  ?0        ?603                 ?214                	;0
	359  1039  FETCH_DIM_R/81            $196=     16?11                215:'streams'       	;0
	360  1039  FE_RESET_R/77             $197=     $196                 ?371                	;0
	361  1039  FE_FETCH_R/78             ?0        $197                 16?21               	;371	>>371	<<370
	362  1040  BEGIN_SILENCE/57          #198=     ?0                   ?0                  	;0
	363  1040  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'unlink'        	;1
	364  1040  FETCH_CONSTANT/99         #199=     ?0                   218:'STREAMS_TMP_PATH'	;16
	365  1040  CONCAT/8                  #200=     #199                 221:'stream_'       	;0
	366  1040  CONCAT/8                  #201=     #200                 16?21               	;0
	367  1040  SEND_VAL_EX/116           ?80       #201                 ?1                  	;0
	368  1040  DO_FCALL_BY_NAME/131      ?164      ?0                   ?0                  	;0
	369  1040  END_SILENCE/58            ?0        #198                 ?0                  	;0
	370  1041  JMP/42                    ?0        ?361                 ?0                  	;0	>>361
	371  1041  FE_FREE/127               ?0        $197                 ?0                  	;0	<<360
	372  1044  FETCH_DIM_R/81            $203=     16?11                222:'lines_i'       	;0
	373  1044  FE_RESET_R/77             $204=     $203                 ?384                	;0
	374  1044  FE_FETCH_R/78             ?0        $204                 16?27               	;384	>>384	<<383
	375  1045  BEGIN_SILENCE/57          #205=     ?0                   ?0                  	;0
	376  1045  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'unlink'        	;1
	377  1045  FETCH_CONSTANT/99         #206=     ?0                   225:'LINES_TMP_PATH'	;16
	378  1045  CONCAT/8                  #207=     #206                 228:'line_i_'       	;0
	379  1045  CONCAT/8                  #208=     #207                 16?27               	;0
	380  1045  SEND_VAL_EX/116           ?80       #208                 ?1                  	;0
	381  1045  DO_FCALL_BY_NAME/131      ?171      ?0                   ?0                  	;0
	382  1045  END_SILENCE/58            ?0        #205                 ?0                  	;0
	383  1046  JMP/42                    ?0        ?374                 ?0                  	;0	>>374
	384  1046  FE_FREE/127               ?0        $204                 ?0                  	;0	<<373
	385  1048  GOTO/253                  ?0        ?440                 ?229                	;0
	386  1050  FETCH_CONSTANT/99         #211=     ?0                   230:'PHP_BIN'       	;16
	387  1050  CONCAT/8                  #212=     #211                 233:' '             	;0
	388  1050  FETCH_CONSTANT/99         #213=     ?0                   234:'CRON_PATH'     	;16
	389  1050  CONCAT/8                  #214=     #212                 #213                	;0
	390  1050  CONCAT/8                  #215=     #214                 237:'cache_engine.php "groups"'	;0
	391  1050  ASSIGN_DIM/147            ?172      16?9                 ?2                  	;0
	392  1050  OP_DATA/137               ?0        #215                 ?0                  	;0
	393  1051  FETCH_CONSTANT/99         #217=     ?0                   238:'PHP_BIN'       	;16
	394  1051  CONCAT/8                  #218=     #217                 241:' '             	;0
	395  1051  FETCH_CONSTANT/99         #219=     ?0                   242:'CRON_PATH'     	;16
	396  1051  CONCAT/8                  #220=     #218                 #219                	;0
	397  1051  CONCAT/8                  #221=     #220                 245:'cache_engine.php "lines_per_ip"'	;0
	398  1051  ASSIGN_DIM/147            ?178      16?9                 ?0                  	;0
	399  1051  OP_DATA/137               ?0        #221                 ?0                  	;0
	400  1052  FETCH_CONSTANT/99         #223=     ?0                   246:'PHP_BIN'       	;16
	401  1052  CONCAT/8                  #224=     #223                 249:' '             	;0
	402  1052  FETCH_CONSTANT/99         #225=     ?0                   250:'CRON_PATH'     	;16
	403  1052  CONCAT/8                  #226=     #224                 #225                	;0
	404  1052  CONCAT/8                  #227=     #226                 253:'cache_engine.php "theft_detection"'	;0
	405  1052  ASSIGN_DIM/147            ?184      16?9                 ?0                  	;0
	406  1052  OP_DATA/137               ?0        #227                 ?0                  	;0
	407  1053  NEW/68                    $228=     254:'Multithread'    ?128                	;2
	408  1053  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	409  1053  SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
	410  1053  DO_FCALL/60               ?191      ?8                   ?0                  	;0
	411  1053  ASSIGN/38                 ?192      16?28                $228                	;0
	412  1054  INIT_METHOD_CALL/112      ?0        16?28                256:'run'           	;0
	413  1054  DO_FCALL/60               ?193      ?0                   ?0                  	;0
	414  1055  GOTO/253                  ?0        ?167                 ?258                	;0
	415  1058  GOTO/253                  ?0        ?497                 ?259                	;0
	416  1060  INIT_FCALL/61             ?0        ?944                 260:'getchangedstreams'	;0
	417  1060  DO_FCALL/60               $232=     ?0                   ?0                  	;0
	418  1060  ASSIGN/38                 ?195      16?6                 $232                	;0
	419  1061  FETCH_DIM_R/81            $235=     16?6                 262:'delete'        	;0
	420  1061  ASSIGN_DIM/147            ?196      16?11                261:'streams'       	;0
	421  1061  OP_DATA/137               ?0        $235                 ?0                  	;0
	422  1062  GOTO/253                  ?0        ?467                 ?263                	;0
	423  1064  INIT_METHOD_CALL/112      ?0        16?10                264:'query'         	;1
	424  1064  SEND_VAL_EX/116           ?80       266:'SELECT COUNT(*) AS `count` FROM `lines`;' ?1                  	;0
	425  1064  DO_FCALL/60               ?198      ?0                   ?0                  	;0
	426  1065  INIT_METHOD_CALL/112      ?0        16?10                267:'get_row'       	;0
	427  1065  DO_FCALL/60               $237=     ?0                   ?0                  	;0
	428  1065  FETCH_DIM_R/81            $238=     $237                 269:'count'         	;0
	429  1065  ASSIGN/38                 ?201      16?26                $238                	;0
	430  1066  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'range'         	;3
	431  1066  SEND_VAL_EX/116           ?80       272:0                ?1                  	;0
	432  1066  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	433  1066  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	434  1066  DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
	435  1066  ASSIGN/38                 ?203      16?25                $240                	;0
	436  1067  JMPZ/43                   ?0        16?25                ?438                	;0	>>438
	437  1068  GOTO/253                  ?0        ?332                 ?273                	;0
	438  1070  ASSIGN/38                 ?204      16?25                274:array (
  0 => 0,
)	;0	<<436
	439  1071  GOTO/253                  ?0        ?332                 ?275                	;0
	440  1074  FETCH_DIM_R/81            $243=     16?11                276:'lines_c'       	;0
	441  1074  FE_RESET_R/77             $244=     $243                 ?452                	;0
	442  1074  FE_FETCH_R/78             ?0        $244                 16?30               	;452	>>452	<<451
	443  1075  BEGIN_SILENCE/57          #245=     ?0                   ?0                  	;0
	444  1075  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'unlink'        	;1
	445  1075  FETCH_CONSTANT/99         #246=     ?0                   279:'LINES_TMP_PATH'	;16
	446  1075  CONCAT/8                  #247=     #246                 282:'line_c_'       	;0
	447  1075  CONCAT/8                  #248=     #247                 16?30               	;0
	448  1075  SEND_VAL_EX/116           ?80       #248                 ?1                  	;0
	449  1075  DO_FCALL_BY_NAME/131      ?211      ?0                   ?0                  	;0
	450  1075  END_SILENCE/58            ?0        #245                 ?0                  	;0
	451  1076  JMP/42                    ?0        ?442                 ?0                  	;0	>>442
	452  1076  FE_FREE/127               ?0        $244                 ?0                  	;0	<<441
	453  1079  FETCH_DIM_R/81            $250=     16?11                283:'lines_t'       	;0
	454  1079  FE_RESET_R/77             $251=     $250                 ?465                	;0
	455  1079  FE_FETCH_R/78             ?0        $251                 16?31               	;465	>>465	<<464
	456  1080  BEGIN_SILENCE/57          #252=     ?0                   ?0                  	;0
	457  1080  INIT_FCALL_BY_NAME/59     ?0        ?0                   284:'unlink'        	;1
	458  1080  FETCH_CONSTANT/99         #253=     ?0                   286:'LINES_TMP_PATH'	;16
	459  1080  CONCAT/8                  #254=     #253                 289:'line_t_'       	;0
	460  1080  CONCAT/8                  #255=     #254                 16?31               	;0
	461  1080  SEND_VAL_EX/116           ?80       #255                 ?1                  	;0
	462  1080  DO_FCALL_BY_NAME/131      ?218      ?0                   ?0                  	;0
	463  1080  END_SILENCE/58            ?0        #252                 ?0                  	;0
	464  1081  JMP/42                    ?0        ?455                 ?0                  	;0	>>455
	465  1081  FE_FREE/127               ?0        $251                 ?0                  	;0	<<454
	466  1084  GOTO/253                  ?0        ?603                 ?290                	;0
	467  1086  INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'count'         	;1
	468  1086  FETCH_DIM_FUNC_ARG/93     $257=     16?6                 293:'changes'       	;1
	469  1086  SEND_VAR_EX/66            ?80       $257                 ?1                  	;0
	470  1086  DO_FCALL_BY_NAME/131      $258=     ?0                   ?0                  	;0
	471  1086  IS_SMALLER/19             #259=     294:0                $258                	;0
	472  1086  BOOL_NOT/13               #260=     #259                 ?0                  	;0
	473  1086  JMPZ/43                   ?0        #260                 ?475                	;0	>>475
	474  1087  GOTO/253                  ?0        ?497                 ?295                	;0
	475  1089  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'array_chunk'   	;2	<<473
	476  1089  FETCH_DIM_FUNC_ARG/93     $261=     16?6                 298:'changes'       	;1
	477  1089  SEND_VAR_EX/66            ?80       $261                 ?1                  	;0
	478  1089  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	479  1089  DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
	480  1089  FE_RESET_R/77             $263=     $262                 ?496                	;0
	481  1089  FE_FETCH_R/78             ?0        $263                 16?8                	;496	>>496	<<495
	482  1090  FETCH_CONSTANT/99         #265=     ?0                   299:'PHP_BIN'       	;16
	483  1090  CONCAT/8                  #266=     #265                 302:' '             	;0
	484  1090  FETCH_CONSTANT/99         #267=     ?0                   303:'CRON_PATH'     	;16
	485  1090  CONCAT/8                  #268=     #266                 #267                	;0
	486  1090  CONCAT/8                  #269=     #268                 306:'cache_engine.php "streams_update" "'	;0
	487  1090  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'implode'       	;2
	488  1090  SEND_VAL_EX/116           ?80       309:','              ?1                  	;0
	489  1090  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	490  1090  DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
	491  1090  CONCAT/8                  #271=     #269                 $270                	;0
	492  1090  CONCAT/8                  #272=     #271                 310:'"'             	;0
	493  1090  ASSIGN_DIM/147            ?226      16?9                 ?1663853456         	;0
	494  1090  OP_DATA/137               ?0        #272                 ?0                  	;0
	495  1091  JMP/42                    ?0        ?481                 ?0                  	;0	>>481
	496  1091  FE_FREE/127               ?0        $263                 ?0                  	;0	<<480
	497  1096  GOTO/253                  ?0        ?386                 ?311                	;0
	498  1098  FE_RESET_R/77             $273=     16?13                ?512                	;0
	499  1098  FE_FETCH_R/78             #274=     $273                 16?32               	;512	>>512	<<511
	500  1098  ASSIGN/38                 ?237      16?18                #274                	;0
	501  1099  INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'file_put_contents'	;2
	502  1099  FETCH_CONSTANT/99         #276=     ?0                   314:'SERIES_TMP_PATH'	;16
	503  1099  CONCAT/8                  #277=     #276                 317:'episodes_'     	;0
	504  1099  CONCAT/8                  #278=     #277                 16?18               	;0
	505  1099  SEND_VAL_EX/116           ?80       #278                 ?1                  	;0
	506  1099  INIT_FCALL_BY_NAME/59     ?0        ?0                   318:'igbinary_serialize'	;1
	507  1099  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
	508  1099  DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
	509  1099  SEND_VAR_NO_REF_EX/50     ?96       $279                 ?2                  	;0
	510  1099  DO_FCALL_BY_NAME/131      ?242      ?0                   ?0                  	;0
	511  1100  JMP/42                    ?0        ?499                 ?0                  	;0	>>499
	512  1100  FE_FREE/127               ?0        $273                 ?0                  	;0	<<498
	513  1103  FETCH_STATIC_PROP_R/173   $281=     320:'rSettings'      321:'XUI'           	;0
	514  1103  FETCH_DIM_R/81            $282=     $281                 323:'cache_changes' 	;0
	515  1103  JMPZ/43                   ?0        $282                 ?517                	;0	>>517
	516  1104  GOTO/253                  ?0        ?359                 ?324                	;0
	517  1106  FETCH_CONSTANT/99         #283=     ?0                   325:'STREAMS_TMP_PATH'	;16	<<515
	518  1106  INIT_ARRAY/71             #284=     #283                 ?0                  	;12
	519  1106  FETCH_CONSTANT/99         #285=     ?0                   328:'LINES_TMP_PATH'	;16
	520  1106  ADD_ARRAY_ELEMENT/72      #284=     #285                 ?0                  	;0
	521  1106  FETCH_CONSTANT/99         #286=     ?0                   331:'SERIES_TMP_PATH'	;16
	522  1106  ADD_ARRAY_ELEMENT/72      #284=     #286                 ?0                  	;0
	523  1106  FE_RESET_R/77             $287=     #284                 ?548                	;0
	524  1106  FE_FETCH_R/78             ?0        $287                 16?4                	;548	>>548	<<547
	525  1107  INIT_FCALL_BY_NAME/59     ?0        ?0                   334:'scandir'       	;1
	526  1107  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	527  1107  DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
	528  1107  FE_RESET_R/77             $289=     $288                 ?546                	;0
	529  1107  FE_FETCH_R/78             ?0        $289                 16?5                	;546	>>546	<<545
	530  1108  INIT_FCALL_BY_NAME/59     ?0        ?0                   336:'filemtime'     	;1
	531  1108  CONCAT/8                  #290=     16?4                 16?5                	;0
	532  1108  SEND_VAL_EX/116           ?80       #290                 ?1                  	;0
	533  1108  DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
	534  1108  SUB/2                     #292=     16?33                338:1               	;0
	535  1108  IS_SMALLER/19             #293=     $291                 #292                	;0
	536  1108  BOOL_NOT/13               #294=     #293                 ?0                  	;0
	537  1108  JMPZ/43                   ?0        #294                 ?541                	;0	>>541
	538  1109  NOP/0                     ?0        ?0                   ?0                  	;1
	539  1109  NOP/0                     ?0        ?0                   ?0                  	;1
	540  1109  GOTO/253                  ?0        ?545                 ?339                	;0
	541  1111  INIT_FCALL_BY_NAME/59     ?0        ?0                   340:'unlink'        	;1	<<537
	542  1111  CONCAT/8                  #295=     16?4                 16?5                	;0
	543  1111  SEND_VAL_EX/116           ?80       #295                 ?1                  	;0
	544  1111  DO_FCALL_BY_NAME/131      ?258      ?0                   ?0                  	;0
	545  1113  JMP/42                    ?0        ?529                 ?0                  	;0	>>529
	546  1113  FE_FREE/127               ?0        $289                 ?0                  	;0	<<528
	547  1116  JMP/42                    ?0        ?524                 ?0                  	;0	>>524
	548  1116  FE_FREE/127               ?0        $287                 ?0                  	;0	<<523
	549  1119  GOTO/253                  ?0        ?358                 ?342                	;0
	550  1121  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'range'         	;3
	551  1121  SEND_VAL_EX/116           ?80       345:0                ?1                  	;0
	552  1121  SEND_VAR_EX/66            ?96       16?24                ?2                  	;0
	553  1121  SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	554  1121  DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
	555  1121  ASSIGN/38                 ?260      16?34                $297                	;0
	556  1122  JMPZ/43                   ?0        16?34                ?558                	;0	>>558
	557  1123  GOTO/253                  ?0        ?559                 ?346                	;0
	558  1125  ASSIGN/38                 ?261      16?34                347:array (
  0 => 0,
)	;0	<<556
	559  1127  FE_RESET_R/77             $300=     16?34                ?582                	;0
	560  1127  FE_FETCH_R/78             ?0        $300                 16?16               	;582	>>582	<<581
	561  1128  ASSIGN/38                 ?263      16?23                16?7                	;0
	562  1129  ADD/1                     #302=     16?16                16?23               	;0
	563  1129  IS_SMALLER/19             #303=     16?24                #302                	;0
	564  1129  BOOL_NOT/13               #304=     #303                 ?0                  	;0
	565  1129  JMPZ/43                   ?0        #304                 ?568                	;0	>>568
	566  1130  NOP/0                     ?0        ?0                   ?0                  	;1
	567  1130  GOTO/253                  ?0        ?570                 ?348                	;0
	568  1132  SUB/2                     #305=     16?24                16?16               	;0	<<565
	569  1132  ASSIGN/38                 ?268      16?23                #305                	;0
	570  1134  FETCH_CONSTANT/99         #308=     ?0                   349:'PHP_BIN'       	;16
	571  1134  CONCAT/8                  #309=     #308                 352:' '             	;0
	572  1134  FETCH_CONSTANT/99         #310=     ?0                   353:'CRON_PATH'     	;16
	573  1134  CONCAT/8                  #311=     #309                 #310                	;0
	574  1134  ROPE_INIT/54              #313=     ?0                   356:'cache_engine.php "streams" '	;4
	575  1134  ROPE_ADD/55               #313=     #313                 16?16               	;1
	576  1134  ROPE_ADD/55               #313=     #313                 357:' '             	;2
	577  1134  ROPE_END/56               #312=     #313                 16?23               	;3
	578  1134  CONCAT/8                  #315=     #311                 #312                	;0
	579  1134  ASSIGN_DIM/147            ?269      16?9                 ?2670194032         	;0
	580  1134  OP_DATA/137               ?0        #315                 ?0                  	;0
	581  1135  JMP/42                    ?0        ?560                 ?0                  	;0	>>560
	582  1135  FE_FREE/127               ?0        $300                 ?0                  	;0	<<559
	583  1137  GOTO/253                  ?0        ?415                 ?358                	;0
	584  1139  ASSIGN/38                 $316=     16?12                359:array (
)       	;0
	585  1139  ASSIGN/38                 ?279      16?35                $316                	;0
	586  1140  INIT_METHOD_CALL/112      ?0        16?10                360:'query'         	;1
	587  1140  SEND_VAL_EX/116           ?80       362:'SELECT `series_id`, MAX(`streams`.`added`) AS `last_modified` FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` GROUP BY `series_id`;' ?1                  	;0
	588  1140  DO_FCALL/60               ?280      ?0                   ?0                  	;0
	589  1141  INIT_METHOD_CALL/112      ?0        16?10                363:'get_rows'      	;0
	590  1141  DO_FCALL/60               $319=     ?0                   ?0                  	;0
	591  1141  FE_RESET_R/77             $320=     $319                 ?598                	;0
	592  1141  FE_FETCH_R/78             ?0        $320                 16?36               	;598	>>598	<<597
	593  1142  FETCH_DIM_R/81            $321=     16?36                365:'series_id'     	;0
	594  1142  FETCH_DIM_R/81            $323=     16?36                366:'last_modified' 	;0
	595  1142  ASSIGN_DIM/147            ?284      16?35                $321                	;0
	596  1142  OP_DATA/137               ?0        $323                 ?0                  	;0
	597  1143  JMP/42                    ?0        ?592                 ?0                  	;0	>>592
	598  1143  FE_FREE/127               ?0        $320                 ?0                  	;0	<<591
	599  1146  INIT_METHOD_CALL/112      ?0        16?10                367:'query'         	;1
	600  1146  SEND_VAL_EX/116           ?80       369:'SELECT * FROM `streams_series`;' ?1                  	;0
	601  1146  DO_FCALL/60               ?286      ?0                   ?0                  	;0
	602  1147  GOTO/253                  ?0        ?624                 ?370                	;0
	603  1150  ECHO/40                   ?0        371:'Cache updated!
' ?0                  	;0
	604  1151  INIT_FCALL_BY_NAME/59     ?0        ?0                   372:'file_put_contents'	;2
	605  1151  FETCH_CONSTANT/99         #325=     ?0                   374:'CACHE_TMP_PATH'	;16
	606  1151  CONCAT/8                  #326=     #325                 377:'cache_complete'	;0
	607  1151  SEND_VAL_EX/116           ?80       #326                 ?1                  	;0
	608  1151  INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'time'          	;0
	609  1151  DO_FCALL_BY_NAME/131      $327=     ?0                   ?0                  	;0
	610  1151  SEND_VAR_NO_REF_EX/50     ?96       $327                 ?2                  	;0
	611  1151  DO_FCALL_BY_NAME/131      ?290      ?0                   ?0                  	;0
	612  1152  INIT_METHOD_CALL/112      ?0        16?10                380:'query'         	;3
	613  1152  SEND_VAL_EX/116           ?80       382:'UPDATE `settings` SET `last_cache` = ?, `last_cache_taken` = ?;' ?1                  	;0
	614  1152  INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'time'          	;0
	615  1152  DO_FCALL_BY_NAME/131      $329=     ?0                   ?0                  	;0
	616  1152  SEND_VAR_NO_REF_EX/50     ?96       $329                 ?2                  	;0
	617  1152  INIT_FCALL_BY_NAME/59     ?0        ?0                   385:'time'          	;0
	618  1152  DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
	619  1152  SUB/2                     #331=     $330                 16?33               	;0
	620  1152  SEND_VAL_EX/116           ?112      #331                 ?3                  	;0
	621  1152  DO_FCALL/60               ?294      ?0                   ?0                  	;0
	622  1153  GOTO/253                  ?0        ?674                 ?387                	;0
	623  1154  GOTO/253                  ?0        ?674                 ?388                	;0
	624  1156  FETCH_OBJ_R/82            $333=     16?10                389:'result'        	;0
	625  1156  BOOL_NOT/13               #334=     $333                 ?0                  	;0
	626  1156  JMPZ/43                   ?0        #334                 ?628                	;0	>>628
	627  1157  GOTO/253                  ?0        ?151                 ?390                	;0
	628  1159  FETCH_OBJ_R/82            $335=     16?10                391:'result'        	;0	<<626
	629  1159  INIT_METHOD_CALL/112      ?0        $335                 392:'rowCount'      	;0
	630  1159  DO_FCALL/60               $336=     ?0                   ?0                  	;0
	631  1159  IS_SMALLER/19             #337=     394:0                $336                	;0
	632  1159  BOOL_NOT/13               #338=     #337                 ?0                  	;0
	633  1159  JMPZ/43                   ?0        #338                 ?635                	;0	>>635
	634  1160  GOTO/253                  ?0        ?673                 ?395                	;0
	635  1162  FETCH_OBJ_R/82            $339=     16?10                396:'result'        	;0	<<633
	636  1162  INIT_METHOD_CALL/112      ?0        $339                 397:'fetchAll'      	;1
	637  1162  FETCH_CLASS_CONSTANT/181  #340=     400:'PDO'            399:'FETCH_ASSOC'   	;0
	638  1162  SEND_VAL_EX/116           ?80       #340                 ?1                  	;0
	639  1162  DO_FCALL/60               $341=     ?0                   ?0                  	;0
	640  1162  FE_RESET_R/77             $342=     $341                 ?672                	;0
	641  1162  FE_FETCH_R/78             ?0        $342                 16?36               	;672	>>672	<<671
	642  1163  FETCH_DIM_R/81            $343=     16?36                402:'id'            	;0
	643  1163  ISSET_ISEMPTY_DIM_OBJ/115 #344=     16?35                $343                	;33554432
	644  1163  BOOL_NOT/13               #345=     #344                 ?0                  	;0
	645  1163  JMPZ/43                   ?0        #345                 ?648                	;0	>>648
	646  1164  NOP/0                     ?0        ?0                   ?0                  	;1
	647  1164  GOTO/253                  ?0        ?652                 ?403                	;0
	648  1166  FETCH_DIM_R/81            $347=     16?36                405:'id'            	;0	<<645
	649  1166  FETCH_DIM_R/81            $348=     16?35                $347                	;0
	650  1166  ASSIGN_DIM/147            ?308      16?36                404:'last_modified' 	;0
	651  1166  OP_DATA/137               ?0        $348                 ?0                  	;0
	652  1168  FETCH_DIM_R/81            $349=     16?36                406:'id'            	;0
	653  1168  INIT_FCALL_BY_NAME/59     ?0        ?0                   407:'json_decode'   	;2
	654  1168  FETCH_DIM_FUNC_ARG/93     $351=     16?36                409:'category_id'   	;1
	655  1168  SEND_VAR_EX/66            ?80       $351                 ?1                  	;0
	656  1168  SEND_VAL_EX/116           ?96       410:true             ?2                  	;0
	657  1168  DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
	658  1168  ASSIGN_DIM/147            ?312      16?12                $349                	;0
	659  1168  OP_DATA/137               ?0        $352                 ?0                  	;0
	660  1169  INIT_FCALL_BY_NAME/59     ?0        ?0                   411:'file_put_contents'	;2
	661  1169  FETCH_CONSTANT/99         #353=     ?0                   413:'SERIES_TMP_PATH'	;16
	662  1169  CONCAT/8                  #354=     #353                 416:'series_'       	;0
	663  1169  FETCH_DIM_R/81            $355=     16?36                417:'id'            	;0
	664  1169  CONCAT/8                  #356=     #354                 $355                	;0
	665  1169  SEND_VAL_EX/116           ?80       #356                 ?1                  	;0
	666  1169  INIT_FCALL_BY_NAME/59     ?0        ?0                   418:'igbinary_serialize'	;1
	667  1169  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	668  1169  DO_FCALL_BY_NAME/131      $357=     ?0                   ?0                  	;0
	669  1169  SEND_VAR_NO_REF_EX/50     ?96       $357                 ?2                  	;0
	670  1169  DO_FCALL_BY_NAME/131      ?320      ?0                   ?0                  	;0
	671  1170  JMP/42                    ?0        ?641                 ?0                  	;0	>>641
	672  1170  FE_FREE/127               ?0        $342                 ?0                  	;0	<<640
	673  1174  GOTO/253                  ?0        ?151                 ?420                	;0
	674  1179  GOTO/253                  ?0        ?698                 ?421                	;0
	675  1181  ECHO/40                   ?0        422:'Generating lines per ip...
' ?0                  	;0
	676  1182  INIT_FCALL/61             ?0        ?400                 423:'generatelinesperip'	;0
	677  1182  DO_FCALL/60               ?321      ?0                   ?0                  	;0
	678  1183  ECHO/40                   ?0        424:'Detecting theft of VOD...
' ?0                  	;0
	679  1184  INIT_FCALL/61             ?0        ?400                 425:'generatetheftdetection'	;0
	680  1184  DO_FCALL/60               ?322      ?0                   ?0                  	;0
	681  1185  ECHO/40                   ?0        426:'Clearing old data...
' ?0                  	;0
	682  1186  GOTO/253                  ?0        ?18                  ?427                	;0
	683  1188  BIND_GLOBAL/168           ?0        16?10                428:'b62d6460eb33ea07'	;0	<<3
	684  1188  BIND_GLOBAL/168           ?0        16?7                 429:'E3665d09b9cea208'	;0
	685  1188  BIND_GLOBAL/168           ?0        16?3                 430:'c834c3e7e1e6da5f'	;0
	686  1188  BIND_GLOBAL/168           ?0        16?29                431:'Ee78463923199005'	;0
	687  1188  BIND_GLOBAL/168           ?0        16?37                432:'ebb4852f69f0dca0'	;0
	688  1189  INIT_FCALL_BY_NAME/59     ?0        ?0                   433:'time'          	;0
	689  1189  DO_FCALL_BY_NAME/131      $361=     ?0                   ?0                  	;0
	690  1189  ASSIGN/38                 ?324      16?33                $361                	;0
	691  1190  INIT_STATIC_METHOD_CALL/113 ?0        435:'XUI'            437:'AB992B2373f7BeCa'	;0
	692  1190  DO_FCALL/60               $363=     ?0                   ?0                  	;0
	693  1190  JMPZ/43                   ?0        $363                 ?695                	;0	>>695
	694  1191  GOTO/253                  ?0        ?4                   ?439                	;0
	695  1193  ECHO/40                   ?0        440:'XUI not running...
' ?0                  	;0	<<693
	696  1194  EXIT/79                   ?0        ?0                   ?0                  	;0
	697  1195  GOTO/253                  ?0        ?4                   ?441                	;0
	698  1197  NOP/0                     ?0        442:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1203  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1    1204  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2    1204  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3    1204  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4    1204  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5    1204  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6    1205  GOTO/253                  ?0        ?9                   ?3                  	;0
	7    1207  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8    1207  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9    1209  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?71                  ?0                  	;0	>>71
1    6     INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'getmypid'        	;0
2    6     DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
3    6     ASSIGN/38                 ?1        16?0                 $9                  	;0
4    7     INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'register_shutdown_function'	;1
5    7     SEND_VAL_EX/116           ?80       5:'shutdown'         ?1                  	;0
6    7     DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
7    8     INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'str_replace'     	;3
8    8     SEND_VAL_EX/116           ?80       8:'\\'               ?1                  	;0
9    8     SEND_VAL_EX/116           ?96       9:'/'                ?2                  	;0
10   8     INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'dirname'        	;1
11   8     FETCH_DIM_FUNC_ARG/93     $12=      16?1                 12:0                	;1
12   8     SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
13   8     DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
14   8     SEND_VAR_NO_REF_EX/50     ?112      $13                  ?3                  	;0
15   8     DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
16   8     CONCAT/8                  #15=      $14                  13:'/../www/init.php'	;0
17   8     INCLUDE_OR_EVAL/73        ?7        #15                  ?0                  	;8
18   9     INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'ini_set'        	;2
19   9     SEND_VAL_EX/116           ?80       16:'memory_limit'    ?1                  	;0
20   9     SEND_VAL_EX/116           ?96       17:-1                ?2                  	;0
21   9     DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
22   10    GOTO/253                  ?0        ?23                  ?18                 	;0
23   12    INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'ini_set'        	;2
24   12    SEND_VAL_EX/116           ?80       21:'max_execution_time' ?1                  	;0
25   12    SEND_VAL_EX/116           ?96       22:0                 ?2                  	;0
26   12    DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
27   13    INIT_STATIC_METHOD_CALL/113 ?0        26:'XUI'             28:'AC49b56dbe10e52c'	;1
28   13    SEND_VAL_EX/116           ?80       30:true              ?1                  	;0
29   13    DO_FCALL/60               $20=      ?0                   ?0                  	;0
30   13    FETCH_STATIC_PROP_W/174   $19=      23:'rSettings'       24:'XUI'            	;0
31   13    ASSIGN/38                 ?12       $19                  $20                 	;0
32   14    ASSIGN/38                 ?13       16?2                 31:10000            	;0
33   15    FETCH_STATIC_PROP_R/173   $23=      32:'rSettings'       33:'XUI'            	;0
34   15    FETCH_DIM_R/81            $24=      $23                  35:'cache_thread_count'	;0
35   15    JMP_SET/152               #25=      $24                  ?37                 	;0
36   15    QM_ASSIGN/22              #25=      36:10                ?0                  	;0
37   15    ASSIGN/38                 ?17       16?3                 #25                 	;0
38   16    ASSIGN/38                 ?18       16?4                 37:false            	;0
39   17    GOTO/253                  ?0        ?95                  ?38                 	;0
40   20    NOP/0                     ?0        ?0                   ?0                  	;0
41   107   NOP/0                     ?0        ?0                   ?0                  	;0
42   191   NOP/0                     ?0        ?0                   ?0                  	;0
43   296   NOP/0                     ?0        ?0                   ?0                  	;0
44   437   GOTO/253                  ?0        ?89                  ?39                 	;0
45   439   FETCH_DIM_R/81            $30=      16?1                 40:1                	;0
46   439   ASSIGN/38                 ?22       16?5                 $30                 	;0
47   440   IS_EQUAL/17               #32=      16?5                 41:'streams_update' 	;0
48   440   JMPNZ_EX/47               #32=      #32                  ?51                 	;0	>>51
49   440   IS_EQUAL/17               #33=      16?5                 42:'lines_update'   	;0
50   440   BOOL/52                   #32=      #33                  ?0                  	;0
51   440   JMPZ/43                   ?0        #32                  ?53                 	;0	>>53	<<48
52   441   GOTO/253                  ?0        ?122                 ?43                 	;0
53   443   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'count'          	;1	<<51
54   443   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
55   443   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
56   443   IS_SMALLER/19             #35=      46:2                 $34                 	;0
57   443   BOOL_NOT/13               #36=      #35                  ?0                  	;0
58   443   JMPZ/43                   ?0        #36                  ?60                 	;0	>>60
59   444   GOTO/253                  ?0        ?121                 ?47                 	;0
60   446   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'intval'         	;1	<<58
61   446   FETCH_DIM_FUNC_ARG/93     $37=      16?1                 50:2                	;1
62   446   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
63   446   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
64   446   ASSIGN/38                 ?30       16?6                 $38                 	;0
65   447   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'intval'         	;1
66   447   FETCH_DIM_FUNC_ARG/93     $40=      16?1                 53:3                	;1
67   447   SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
68   447   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
69   447   ASSIGN/38                 ?33       16?7                 $41                 	;0
70   448   GOTO/253                  ?0        ?121                 ?54                 	;0
71   450   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'posix_getpwuid' 	;1	<<0
72   450   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'posix_geteuid'  	;0
73   450   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
74   450   SEND_VAR_NO_REF_EX/50     ?80       $43                  ?1                  	;0
75   450   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
76   450   FETCH_DIM_R/81            $45=      $44                  59:'name'           	;0
77   450   IS_NOT_EQUAL/18           #46=      $45                  60:'xui'            	;0
78   450   BOOL_NOT/13               #47=      #46                  ?0                  	;0
79   450   JMPZ/43                   ?0        #47                  ?81                 	;0	>>81
80   451   GOTO/253                  ?0        ?82                  ?61                 	;0
81   453   EXIT/79                   ?0        62:'Please run as XUI!
' ?0                  	;0	<<79
82   455   BEGIN_SILENCE/57          #48=      ?0                   ?0                  	;0
83   455   FETCH_R/80                $49=      63:'argc'            ?0                  	;268435456
84   455   END_SILENCE/58            ?0        #48                  ?0                  	;0
85   455   JMPZ/43                   ?0        $49                  ?87                 	;0	>>87
86   456   GOTO/253                  ?0        ?1                   ?64                 	;0
87   458   EXIT/79                   ?0        65:0                 ?0                  	;0	<<85
88   459   GOTO/253                  ?0        ?1                   ?66                 	;0
89   462   NOP/0                     ?0        ?0                   ?0                  	;0
90   518   NOP/0                     ?0        ?0                   ?0                  	;0
91   658   NOP/0                     ?0        ?0                   ?0                  	;0
92   682   NOP/0                     ?0        ?0                   ?0                  	;0
93   706   NOP/0                     ?0        ?0                   ?0                  	;0
94   786   GOTO/253                  ?0        ?133                 ?67                 	;0
95   788   ASSIGN/38                 $50=      16?5                 68:NULL             	;0
96   788   ASSIGN/38                 $51=      16?7                 $50                 	;0
97   788   ASSIGN/38                 ?43       16?6                 $51                 	;0
98   789   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'count'          	;1
99   789   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
100  789   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
101  789   IS_SMALLER/19             #54=      71:1                 $53                 	;0
102  789   JMPZ/43                   ?0        #54                  ?104                	;0	>>104
103  790   GOTO/253                  ?0        ?110                 ?72                 	;0
104  792   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'shell_exec'     	;1	<<102
105  792   CONCAT/8                  #55=      75:'kill -9 $(ps aux | grep \'cache_engine\' | grep -v grep | grep -v ' 16?0                	;0
106  792   CONCAT/8                  #56=      #55                  76:' | awk \'{print $2}\')'	;0
107  792   SEND_VAL_EX/116           ?80       #56                  ?1                  	;0
108  792   DO_FCALL_BY_NAME/131      ?48       ?0                   ?0                  	;0
109  793   GOTO/253                  ?0        ?40                  ?77                 	;0
110  795   GOTO/253                  ?0        ?45                  ?78                 	;0
111  797   IS_EQUAL/17               #58=      16?5                 79:'force'          	;0
112  797   BOOL_NOT/13               #59=      #58                  ?0                  	;0
113  797   JMPZ/43                   ?0        #59                  ?115                	;0	>>115
114  798   GOTO/253                  ?0        ?120                 ?80                 	;0
115  800   ECHO/40                   ?0        81:'Forcing cache regen...
' ?0                  	;0	<<113
116  801   FETCH_STATIC_PROP_W/174   $60=      82:'rSettings'       83:'XUI'            	;0
117  801   ASSIGN_DIM/147            ?52       $60                  85:'cache_changes'  	;0
118  801   OP_DATA/137               ?0        86:false             ?0                  	;0
119  802   ASSIGN/38                 ?53       16?4                 87:true             	;0
120  804   GOTO/253                  ?0        ?40                  ?88                 	;0
121  807   GOTO/253                  ?0        ?132                 ?89                 	;0
122  809   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'array_map'      	;2
123  809   SEND_VAL_EX/116           ?80       92:'intval'          ?1                  	;0
124  809   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'explode'        	;2
125  809   SEND_VAL_EX/116           ?80       95:','               ?1                  	;0
126  809   FETCH_DIM_FUNC_ARG/93     $63=      16?1                 96:2                	;2
127  809   SEND_VAR_EX/66            ?96       $63                  ?2                  	;0
128  809   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
129  809   SEND_VAR_NO_REF_EX/50     ?96       $64                  ?2                  	;0
130  809   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
131  809   ASSIGN/38                 ?57       16?8                 $65                 	;0
132  811   GOTO/253                  ?0        ?111                 ?97                 	;0
133  814   NOP/0                     ?0        ?0                   ?0                  	;0
134  860   NOP/0                     ?0        ?0                   ?0                  	;0
135  1198  INIT_FCALL/61             ?0        ?5904                98:'ab8369074df2aaa3'	;3
136  1198  SEND_VAR/117              ?80       16?5                 ?1                  	;0
137  1198  SEND_VAR/117              ?96       16?6                 ?2                  	;0
138  1198  SEND_VAR/117              ?112      16?7                 ?3                  	;0
139  1198  DO_FCALL/60               ?58       ?0                   ?0                  	;0
140  1199  GOTO/253                  ?0        ?141                 ?99                 	;0
141  1201  NOP/0                     ?0        ?0                   ?0                  	;0
142  1210  NOP/0                     ?0        100:1                ?0                  	;4294967295
*/

?>