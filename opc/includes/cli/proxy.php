<?php


function c7CC2F0dd6f71EBb($ee6d1fc5d801b43f)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  6   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  8   JMP/42                    ?0        ?39                  ?0                  	;0	>>39
	2  10  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_exists'     	;1
	3  10  CONCAT/8                  #3=       3:'/proc/'           16?1                	;0
	4  10  SEND_VAL_EX/116           ?80       #3                   ?1                  	;0
	5  10  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	6  10  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	7  10  JMPZ/43                   ?0        #5                   ?9                  	;0	>>9
	8  11  GOTO/253                  ?0        ?65                  ?4                  	;0
	9  13  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'trim'            	;1	<<7
	10 13  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'file_get_contents'	;1
	11 13  ROPE_INIT/54              #7=       ?0                   9:'/proc/'          	;3
	12 13  ROPE_ADD/55               #7=       #7                   16?1                	;1
	13 13  ROPE_END/56               #6=       #7                   10:'/cmdline'       	;2
	14 13  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
	15 13  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	16 13  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
	17 13  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	18 13  ASSIGN/38                 ?8        16?2                 $10                 	;0
	19 14  ROPE_INIT/54              #13=      ?0                   11:'XUIProxy['      	;3
	20 14  ROPE_ADD/55               #13=      #13                  16?0                	;1
	21 14  ROPE_END/56               #12=      #13                  12:']'              	;2
	22 14  IS_EQUAL/17               #15=      16?2                 #12                 	;0
	23 14  JMPZ_EX/46                #15=      #15                  ?28                 	;0	>>28
	24 14  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'is_numeric'     	;1
	25 14  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	26 14  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	27 14  BOOL/52                   #15=      $16                  ?0                  	;0
	28 14  JMPZ_EX/46                #15=      #15                  ?31                 	;0	>>31	<<23
	29 14  IS_SMALLER/19             #17=      15:0                 16?1                	;0
	30 14  BOOL/52                   #15=      #17                  ?0                  	;0
	31 14  BOOL_NOT/13               #18=      #15                  ?0                  	;0	<<28
	32 14  JMPZ/43                   ?0        #18                  ?34                 	;0	>>34
	33 15  GOTO/253                  ?0        ?38                  ?16                 	;0
	34 17  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'posix_kill'     	;2	<<32
	35 17  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	36 17  SEND_VAL_EX/116           ?96       19:9                 ?2                  	;0
	37 17  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
	38 19  GOTO/253                  ?0        ?65                  ?20                 	;0
	39 21  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'clearstatcache' 	;1	<<1
	40 21  SEND_VAL_EX/116           ?80       23:true              ?1                  	;0
	41 21  DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
	42 22  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'file_exists'    	;1
	43 22  FETCH_CONSTANT/99         #21=      ?0                   26:'STREAMS_PATH'   	;16
	44 22  CONCAT/8                  #22=      #21                  16?0                	;0
	45 22  CONCAT/8                  #23=      #22                  29:'_.monitor'      	;0
	46 22  SEND_VAL_EX/116           ?80       #23                  ?1                  	;0
	47 22  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	48 22  BOOL_NOT/13               #25=      $24                  ?0                  	;0
	49 22  JMPZ/43                   ?0        #25                  ?51                 	;0	>>51
	50 23  GOTO/253                  ?0        ?61                  ?30                 	;0
	51 25  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'intval'         	;1	<<49
	52 25  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'file_get_contents'	;1
	53 25  FETCH_CONSTANT/99         #26=      ?0                   35:'STREAMS_PATH'   	;16
	54 25  CONCAT/8                  #27=      #26                  16?0                	;0
	55 25  CONCAT/8                  #28=      #27                  38:'_.monitor'      	;0
	56 25  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	57 25  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	58 25  SEND_VAR_NO_REF_EX/50     ?80       $29                  ?1                  	;0
	59 25  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
	60 25  ASSIGN/38                 ?28       16?1                 $30                 	;0
	61 27  ISSET_ISEMPTY_CV/197      #32=      16?1                 ?0                  	;16777216
	62 27  JMPZ/43                   ?0        #32                  ?64                 	;0	>>64
	63 28  GOTO/253                  ?0        ?66                  ?39                 	;0
	64 30  GOTO/253                  ?0        ?2                   ?40                 	;0	<<62
	65 33  GOTO/253                  ?0        ?74                  ?41                 	;0
	66 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'shell_exec'     	;1
	67 35  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'intval'         	;1
	68 35  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	69 35  DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
	70 35  CONCAT/8                  #34=      46:'kill -9 `ps -ef | grep \'XUIProxy\\[' $33                 	;0
	71 35  CONCAT/8                  #35=      #34                  47:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;0
	72 35  SEND_VAL_EX/116           ?80       #35                  ?1                  	;0
	73 35  DO_FCALL_BY_NAME/131      ?33       ?0                   ?0                  	;0
	74 37  GOTO/253                  ?0        ?75                  ?48                 	;0
	75 39  NOP/0                     ?0        49:NULL              ?0                  	;4294967295
	*/
}

function startProxy($ee6d1fc5d801b43f, $D9d6a5d0b76a9aaf, $b5337d8a535cf6dd)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   65   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   65   RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   65   RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3   67   JMP/42                    ?0        ?390                 ?0                  	;0	>>390
	4   70   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'getSockets'      	;0
	5   70   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	6   70   ASSIGN/38                 ?1        16?3                 $32                 	;0
	7   71   INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
	8   71   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	9   71   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	10  71   IS_SMALLER/19             #35=      5:0                  $34                 	;0
	11  71   JMPZ/43                   ?0        #35                  ?13                 	;0	>>13
	12  72   GOTO/253                  ?0        ?637                 ?6                  	;0
	13  74   JMPZ/43                   ?0        16?4                 ?15                 	;0	>>15	<<11
	14  75   GOTO/253                  ?0        ?24                  ?7                  	;0
	15  77   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'round'           	;1	<<13
	16  77   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'microtime'      	;1
	17  77   SEND_VAL_EX/116           ?80       12:true              ?1                  	;0
	18  77   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	19  77   MUL/3                     #37=      $36                  13:1000             	;0
	20  77   SEND_VAL_EX/116           ?80       #37                  ?1                  	;0
	21  77   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	22  77   ASSIGN/38                 ?7        16?4                 $38                 	;0
	23  78   GOTO/253                  ?0        ?24                  ?14                 	;0
	24  81   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'round'          	;1
	25  81   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'microtime'      	;1
	26  81   SEND_VAL_EX/116           ?80       19:true              ?1                  	;0
	27  81   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	28  81   MUL/3                     #41=      $40                  20:1000             	;0
	29  81   SEND_VAL_EX/116           ?80       #41                  ?1                  	;0
	30  81   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	31  81   SUB/2                     #43=      $42                  16?4                	;0
	32  81   FETCH_CONSTANT/99         #44=      ?0                   21:'CLOSE_EMPTY'    	;16
	33  81   IS_SMALLER_OR_EQUAL/20    #45=      #44                  #43                 	;0
	34  81   BOOL_NOT/13               #46=      #45                  ?0                  	;0
	35  81   JMPZ/43                   ?0        #46                  ?37                 	;0	>>37
	36  82   GOTO/253                  ?0        ?39                  ?24                 	;0
	37  84   ECHO/40                   ?0        25:'No sockets waiting, close stream
' ?0                  	;0	<<35
	38  85   GOTO/253                  ?0        ?365                 ?26                 	;0
	39  87   GOTO/253                  ?0        ?636                 ?27                 	;0
	40  89   INIT_ARRAY/71             #47=      28:array (
  'verify_peer' => false,
  'verify_peer_name' => false,
  'allow_self_signed' => true,
) 29:'ssl'            	;10
	41  89   INIT_ARRAY/71             #48=      30:'GET'             31:'method'         	;18
	42  89   ADD_ARRAY_ELEMENT/72      #48=      16?6                 32:'user_agent'     	;0
	43  89   FETCH_CONSTANT/99         #49=      ?0                   33:'TIMEOUT'        	;16
	44  89   ADD_ARRAY_ELEMENT/72      #48=      #49                  36:'timeout'        	;0
	45  89   ADD_ARRAY_ELEMENT/72      #48=      37:''                38:'header'         	;0
	46  89   ADD_ARRAY_ELEMENT/72      #47=      #48                  39:'http'           	;0
	47  89   ASSIGN/38                 ?18       16?5                 #47                 	;0
	48  90   ISSET_ISEMPTY_DIM_OBJ/115 #51=      16?2                 40:'proxy'          	;33554432
	49  90   BOOL_NOT/13               #52=      #51                  ?0                  	;0
	50  90   JMPZ/43                   ?0        #52                  ?52                 	;0	>>52
	51  91   GOTO/253                  ?0        ?61                  ?41                 	;0
	52  93   FETCH_DIM_R/81            $55=      16?2                 44:'proxy'          	;0	<<50
	53  93   FETCH_DIM_R/81            $56=      $55                  45:'value'          	;0
	54  93   CONCAT/8                  #57=      46:'tcp://'          $56                 	;0
	55  93   FETCH_DIM_W/84            $53=      16?5                 42:'http'           	;0
	56  93   ASSIGN_DIM/147            ?22       $53                  43:'proxy'          	;0
	57  93   OP_DATA/137               ?0        #57                  ?0                  	;0
	58  94   FETCH_DIM_W/84            $58=      16?5                 47:'http'           	;0
	59  94   ASSIGN_DIM/147            ?27       $58                  48:'request_fulluri'	;0
	60  94   OP_DATA/137               ?0        49:true              ?0                  	;0
	61  96   GOTO/253                  ?0        ?62                  ?50                 	;0
	62  98   ISSET_ISEMPTY_DIM_OBJ/115 #60=      16?2                 51:'cookie'         	;33554432
	63  98   BOOL_NOT/13               #61=      #60                  ?0                  	;0
	64  98   JMPZ/43                   ?0        #61                  ?66                 	;0	>>66
	65  99   GOTO/253                  ?0        ?73                  ?52                 	;0
	66  101  FETCH_DIM_R/81            $64=      16?2                 55:'cookie'         	;0	<<64
	67  101  FETCH_DIM_R/81            $65=      $64                  56:'value'          	;0
	68  101  CONCAT/8                  #66=      57:'Cookie: '        $65                 	;0
	69  101  CONCAT/8                  #67=      #66                  58:'
'             	;0
	70  101  FETCH_DIM_RW/87           $62=      16?5                 53:'http'           	;0
	71  101  ASSIGN_CONCAT/30          ?31       $62                  54:'header'         	;147
	72  101  OP_DATA/137               ?0        #67                  ?0                  	;0
	73  103  FETCH_STATIC_PROP_R/173   $68=      59:'rSettings'       60:'XUI'            	;0
	74  103  FETCH_DIM_R/81            $69=      $68                  62:'request_prebuffer'	;0
	75  103  BOOL_NOT/13               #70=      $69                  ?0                  	;0
	76  103  JMPZ/43                   ?0        #70                  ?78                 	;0	>>78
	77  104  GOTO/253                  ?0        ?82                  ?63                 	;0
	78  106  FETCH_DIM_RW/87           $71=      16?5                 64:'http'           	;0	<<76
	79  106  ASSIGN_CONCAT/30          ?40       $71                  65:'header'         	;147
	80  106  OP_DATA/137               ?0        66:'X-XUI-Prebuffer: 1
' ?0                  	;0
	81  107  GOTO/253                  ?0        ?82                  ?67                 	;0
	82  110  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'stream_context_create'	;1
	83  110  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	84  110  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
	85  110  ASSIGN/38                 ?42       16?7                 $73                 	;0
	86  111  INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'json_decode'    	;2
	87  111  FETCH_DIM_FUNC_ARG/93     $75=      16?1                 72:'stream_source'  	;1
	88  111  SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
	89  111  SEND_VAL_EX/116           ?96       73:true              ?2                  	;0
	90  111  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
	91  111  ASSIGN/38                 ?45       16?8                 $76                 	;0
	92  112  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'getActiveStream'	;2
	93  112  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	94  112  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	95  112  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
	96  112  ASSIGN/38                 ?47       16?9                 $78                 	;0
	97  113  INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'is_resource'    	;1
	98  113  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	99  113  DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
	100 113  JMPZ/43                   ?0        $80                  ?102                	;0	>>102
	101 114  GOTO/253                  ?0        ?635                 ?78                 	;0
	102 116  GOTO/253                  ?0        ?584                 ?79                 	;0	<<100
	103 119  GOTO/253                  ?0        ?756                 ?80                 	;0
	104 121  FETCH_STATIC_PROP_R/173   $81=      81:'rSettings'       82:'XUI'            	;0
	105 121  FETCH_DIM_R/81            $82=      $81                  84:'enable_cache'   	;0
	106 121  BOOL_NOT/13               #83=      $82                  ?0                  	;0
	107 121  JMPZ/43                   ?0        #83                  ?109                	;0	>>109
	108 122  GOTO/253                  ?0        ?112                 ?85                 	;0
	109 124  INIT_STATIC_METHOD_CALL/113 ?0        86:'XUI'             88:'cAc325153A658C37'	;1	<<107
	110 124  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	111 124  DO_FCALL/60               ?52       ?0                   ?0                  	;0
	112 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'shell_exec'     	;1
	113 126  FETCH_CONSTANT/99         #85=      ?0                   92:'STREAMS_PATH'   	;16
	114 126  CONCAT/8                  #86=      95:'rm -f '          #85                 	;0
	115 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'intval'         	;1
	116 126  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	117 126  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
	118 126  CONCAT/8                  #88=      #86                  $87                 	;0
	119 126  CONCAT/8                  #89=      #88                  98:'_*.ts'          	;0
	120 126  SEND_VAL_EX/116           ?80       #89                  ?1                  	;0
	121 126  DO_FCALL_BY_NAME/131      ?58       ?0                   ?0                  	;0
	122 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'file_put_contents'	;2
	123 127  FETCH_CONSTANT/99         #91=      ?0                   101:'STREAMS_PATH'  	;16
	124 127  CONCAT/8                  #92=      #91                  16?0                	;0
	125 127  CONCAT/8                  #93=      #92                  104:'_.pid'         	;0
	126 127  SEND_VAL_EX/116           ?80       #93                  ?1                  	;0
	127 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'getmypid'      	;0
	128 127  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	129 127  SEND_VAR_NO_REF_EX/50     ?96       $94                  ?2                  	;0
	130 127  DO_FCALL_BY_NAME/131      ?63       ?0                   ?0                  	;0
	131 128  GOTO/253                  ?0        ?433                 ?107                	;0
	132 130  JMPZ/43                   ?0        16?9                 ?134                	;0	>>134
	133 131  GOTO/253                  ?0        ?375                 ?108                	;0
	134 133  ECHO/40                   ?0        109:'Failed!
'       ?0                  	;0	<<132
	135 134  INIT_STATIC_METHOD_CALL/113 ?0        110:'XUI'            112:'d242Df32BD80320F'	;3
	136 134  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	137 134  FETCH_CONSTANT/99         #96=      ?0                   114:'SERVER_ID'     	;16
	138 134  SEND_VAL_EX/116           ?96       #96                  ?2                  	;0
	139 134  SEND_VAL_EX/116           ?112      117:'STREAM_START_FAIL' ?3                  	;0
	140 134  DO_FCALL/60               ?65       ?0                   ?0                  	;0
	141 135  INIT_METHOD_CALL/112      ?0        16?10                118:'query'         	;2
	142 135  SEND_VAL_EX/116           ?80       120:'UPDATE `streams_servers` SET `monitor_pid` = null, `pid` = null, `stream_status` = 1 WHERE `server_stream_id` = ?;' ?1                  	;0
	143 135  FETCH_DIM_FUNC_ARG/93     $98=      16?1                 121:'server_stream_id'	;2
	144 135  SEND_VAR_EX/66            ?96       $98                  ?2                  	;0
	145 135  DO_FCALL/60               ?67       ?0                   ?0                  	;0
	146 136  FETCH_STATIC_PROP_R/173   $100=     122:'rSettings'      123:'XUI'           	;0
	147 136  FETCH_DIM_R/81            $101=     $100                 125:'enable_cache'  	;0
	148 136  BOOL_NOT/13               #102=     $101                 ?0                  	;0
	149 136  JMPZ/43                   ?0        #102                 ?151                	;0	>>151
	150 137  GOTO/253                  ?0        ?374                 ?126                	;0
	151 139  GOTO/253                  ?0        ?371                 ?127                	;0	<<149
	152 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'strlen'        	;1
	153 141  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	154 141  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
	155 141  FETCH_CONSTANT/99         #104=     ?0                   130:'PACKET_SIZE'   	;16
	156 141  MUL/3                     #105=     16?12                #104                	;0
	157 141  IS_NOT_EQUAL/18           #106=     $103                 #105                	;0
	158 141  BOOL_NOT/13               #107=     #106                 ?0                  	;0
	159 141  JMPZ/43                   ?0        #107                 ?161                	;0	>>161
	160 142  GOTO/253                  ?0        ?183                 ?133                	;0
	161 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'substr'        	;3	<<159
	162 144  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	163 144  FETCH_CONSTANT/99         #108=     ?0                   136:'PACKET_SIZE'   	;16
	164 144  MUL/3                     #109=     16?12                #108                	;0
	165 144  SEND_VAL_EX/116           ?96       #109                 ?2                  	;0
	166 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'strlen'        	;1
	167 144  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	168 144  DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
	169 144  FETCH_CONSTANT/99         #111=     ?0                   141:'PACKET_SIZE'   	;16
	170 144  MUL/3                     #112=     16?12                #111                	;0
	171 144  SUB/2                     #113=     $110                 #112                	;0
	172 144  SEND_VAL_EX/116           ?112      #113                 ?3                  	;0
	173 144  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
	174 144  ASSIGN/38                 ?83       16?13                $114                	;0
	175 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'substr'        	;3
	176 145  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	177 145  SEND_VAL_EX/116           ?96       146:0                ?2                  	;0
	178 145  FETCH_CONSTANT/99         #116=     ?0                   147:'PACKET_SIZE'   	;16
	179 145  MUL/3                     #117=     16?12                #116                	;0
	180 145  SEND_VAL_EX/116           ?112      #117                 ?3                  	;0
	181 145  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
	182 145  ASSIGN/38                 ?87       16?11                $118                	;0
	183 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'str_split'     	;2
	184 147  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	185 147  FETCH_CONSTANT/99         #120=     ?0                   152:'PACKET_SIZE'   	;16
	186 147  SEND_VAL_EX/116           ?96       #120                 ?2                  	;0
	187 147  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	188 147  FE_RESET_R/77             $122=     $121                 ?345                	;0
	189 147  FE_FETCH_R/78             ?0        $122                 16?14               	;345	>>345	<<344
	190 148  NOP/0                     ?0        ?0                   ?0                  	;1
	191 148  GOTO/253                  ?0        ?209                 ?155                	;0
	192 150  ECHO/40                   ?0        156:'Write analysis buffer
' ?0                  	;0
	193 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'file_put_contents'	;2
	194 151  FETCH_CONSTANT/99         #123=     ?0                   159:'STREAMS_PATH'  	;16
	195 151  CONCAT/8                  #124=     #123                 16?0                	;0
	196 151  CONCAT/8                  #125=     #124                 162:'.analyse'      	;0
	197 151  SEND_VAL_EX/116           ?80       #125                 ?1                  	;0
	198 151  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
	199 151  DO_FCALL_BY_NAME/131      ?94       ?0                   ?0                  	;0
	200 152  ASSIGN/38                 ?95       16?15                163:NULL            	;0
	201 153  ASSIGN/38                 ?96       16?16                164:true            	;0
	202 155  NOP/0                     ?0        ?0                   ?0                  	;1
	203 155  GOTO/253                  ?0        ?336                 ?165                	;0
	204 157  ASSIGN/38                 ?97       16?17                166:true            	;0
	205 158  ASSIGN/38                 ?98       16?18                167:false           	;0
	206 159  ASSIGN/38                 ?99       16?19                168:array (
)       	;0
	207 162  NOP/0                     ?0        ?0                   ?0                  	;1
	208 162  GOTO/253                  ?0        ?338                 ?169                	;0
	209 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'unpack'        	;2
	210 164  SEND_VAL_EX/116           ?80       172:'N'              ?1                  	;0
	211 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'substr'        	;3
	212 164  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	213 164  SEND_VAL_EX/116           ?96       175:0                ?2                  	;0
	214 164  SEND_VAL_EX/116           ?112      176:4                ?3                  	;0
	215 164  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
	216 164  SEND_VAR_NO_REF_EX/50     ?96       $132                 ?2                  	;0
	217 164  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
	218 164  FETCH_DIM_R/81            $134=     $133                 177:1               	;0
	219 164  ASSIGN/38                 ?103      16?20                $134                	;0
	220 165  SR/7                      #136=     16?20                178:24              	;0
	221 165  BW_AND/10                 #137=     #136                 179:255             	;0
	222 165  ASSIGN/38                 ?106      16?21                #137                	;0
	223 166  IS_EQUAL/17               #139=     16?21                180:71              	;0
	224 166  BOOL_NOT/13               #140=     #139                 ?0                  	;0
	225 166  JMPZ/43                   ?0        #140                 ?228                	;0	>>228
	226 167  NOP/0                     ?0        ?0                   ?0                  	;1
	227 167  GOTO/253                  ?0        ?260                 ?181                	;0
	228 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'substr'        	;3	<<225
	229 169  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	230 169  SEND_VAL_EX/116           ?96       184:6                ?2                  	;0
	231 169  SEND_VAL_EX/116           ?112      185:4                ?3                  	;0
	232 169  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
	233 169  FETCH_CONSTANT/99         #142=     ?0                   186:'PAT_HEADER'    	;16
	234 169  IS_EQUAL/17               #143=     $141                 #142                	;0
	235 169  JMPZ/43                   ?0        #143                 ?238                	;0	>>238
	236 170  NOP/0                     ?0        ?0                   ?0                  	;1
	237 170  GOTO/253                  ?0        ?340                 ?189                	;0
	238 172  SR/7                      #144=     16?20                190:4               	;0	<<235
	239 172  BW_AND/10                 #145=     #144                 191:3               	;0
	240 172  ASSIGN/38                 ?114      16?22                #145                	;0
	241 173  NOP/0                     ?0        ?0                   ?0                  	;1
	242 173  GOTO/253                  ?0        ?285                 ?192                	;0
	243 175  ASSIGN_CONCAT/30          ?115      16?23                16?14               	;0
	244 177  JMPZ/43                   ?0        16?16                ?247                	;0	>>247
	245 178  NOP/0                     ?0        ?0                   ?0                  	;1
	246 178  GOTO/253                  ?0        ?336                 ?193                	;0
	247 180  ASSIGN_CONCAT/30          ?116      16?15                16?14               	;0	<<244
	248 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'strlen'        	;1
	249 181  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	250 181  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
	251 181  FETCH_CONSTANT/99         #150=     ?0                   196:'PACKET_SIZE'   	;16
	252 181  MUL/3                     #151=     199:3000             #150                	;0
	253 181  IS_SMALLER_OR_EQUAL/20    #152=     #151                 $149                	;0
	254 181  BOOL_NOT/13               #153=     #152                 ?0                  	;0
	255 181  JMPZ/43                   ?0        #153                 ?258                	;0	>>258
	256 182  NOP/0                     ?0        ?0                   ?0                  	;1
	257 182  GOTO/253                  ?0        ?202                 ?200                	;0
	258 184  NOP/0                     ?0        ?0                   ?0                  	;1	<<255
	259 184  GOTO/253                  ?0        ?192                 ?201                	;0
	260 187  JMPZ_EX/46                #154=     16?18                ?266                	;0	>>266
	261 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'count'         	;1
	262 187  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	263 187  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
	264 187  IS_SMALLER/19             #156=     $155                 204:10              	;0
	265 187  BOOL/52                   #154=     #156                 ?0                  	;0
	266 187  BOOL_NOT/13               #157=     #154                 ?0                  	;0	<<260
	267 187  JMPZ/43                   ?0        #157                 ?270                	;0	>>270
	268 188  NOP/0                     ?0        ?0                   ?0                  	;1
	269 188  GOTO/253                  ?0        ?272                 ?205                	;0
	270 190  ASSIGN_DIM/147            ?126      16?19                ?4397406            	;0	<<267
	271 190  OP_DATA/137               ?0        16?14                ?0                  	;0
	272 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'strlen'        	;1
	273 192  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	274 192  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
	275 192  FETCH_CONSTANT/99         #160=     ?0                   208:'MAX_PREBUFFER' 	;16
	276 192  IS_SMALLER/19             #161=     $159                 #160                	;0
	277 192  JMPZ_EX/46                #161=     #161                 ?279                	;0	>>279
	278 192  BOOL/52                   #161=     16?17                ?0                  	;0
	279 192  BOOL_NOT/13               #162=     #161                 ?0                  	;0	<<277
	280 192  JMPZ/43                   ?0        #162                 ?283                	;0	>>283
	281 193  NOP/0                     ?0        ?0                   ?0                  	;1
	282 193  GOTO/253                  ?0        ?244                 ?211                	;0
	283 195  NOP/0                     ?0        ?0                   ?0                  	;1	<<280
	284 195  GOTO/253                  ?0        ?243                 ?212                	;0
	285 197  BW_AND/10                 #163=     16?22                213:2               	;0
	286 197  IS_IDENTICAL/15           #164=     #163                 214:2               	;0
	287 197  BOOL_NOT/13               #165=     #164                 ?0                  	;0
	288 197  JMPZ/43                   ?0        #165                 ?291                	;0	>>291
	289 198  NOP/0                     ?0        ?0                   ?0                  	;1
	290 198  GOTO/253                  ?0        ?207                 ?215                	;0
	291 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'count'         	;1	<<288
	292 200  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	293 200  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
	294 200  IS_SMALLER/19             #167=     218:0                $166                	;0
	295 200  JMPZ_EX/46                #167=     #167                 ?312                	;0	>>312
	296 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'unpack'        	;2
	297 200  SEND_VAL_EX/116           ?80       221:'C'              ?1                  	;0
	298 200  FETCH_DIM_FUNC_ARG/93     $168=     16?14                222:4               	;2
	299 200  SEND_VAR_EX/66            ?96       $168                 ?2                  	;0
	300 200  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
	301 200  FETCH_DIM_R/81            $170=     $169                 223:1               	;0
	302 200  IS_EQUAL/17               #171=     $170                 224:7               	;0
	303 200  JMPZ_EX/46                #171=     #171                 ?311                	;0	>>311
	304 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'substr'        	;3
	305 200  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	306 200  SEND_VAL_EX/116           ?96       227:4                ?2                  	;0
	307 200  SEND_VAL_EX/116           ?112      228:2                ?3                  	;0
	308 200  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
	309 200  IS_EQUAL/17               #173=     $172                 229:'P'            	;0
	310 200  BOOL/52                   #171=     #173                 ?0                  	;0
	311 200  BOOL/52                   #167=     #171                 ?0                  	;0	<<303
	312 200  BOOL_NOT/13               #174=     #167                 ?0                  	;0	<<295
	313 200  JMPZ/43                   ?0        #174                 ?316                	;0	>>316
	314 201  NOP/0                     ?0        ?0                   ?0                  	;1
	315 201  GOTO/253                  ?0        ?207                 ?230                	;0
	316 203  BOOL_NOT/13               #175=     16?23                ?0                  	;0	<<313
	317 203  JMPNZ_EX/47               #175=     #175                 ?324                	;0	>>324
	318 203  INIT_FCALL_BY_NAME/59     ?0        ?0                   231:'strlen'        	;1
	319 203  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	320 203  DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
	321 203  FETCH_CONSTANT/99         #177=     ?0                   233:'STORE_PREBUFFER'	;16
	322 203  IS_SMALLER_OR_EQUAL/20    #178=     #177                 $176                	;0
	323 203  BOOL/52                   #175=     #178                 ?0                  	;0
	324 203  BOOL_NOT/13               #179=     #175                 ?0                  	;0	<<317
	325 203  JMPZ/43                   ?0        #179                 ?328                	;0	>>328
	326 204  NOP/0                     ?0        ?0                   ?0                  	;1
	327 204  GOTO/253                  ?0        ?334                 ?236                	;0
	328 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'implode'       	;2	<<325
	329 206  SEND_VAL_EX/116           ?80       239:''               ?1                  	;0
	330 206  SEND_VAR_EX/66            ?96       16?19                ?2                  	;0
	331 206  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
	332 206  CONCAT/8                  #181=     $180                 16?14               	;0
	333 206  ASSIGN/38                 ?150      16?23                #181                	;0
	334 208  NOP/0                     ?0        ?0                   ?0                  	;1
	335 208  GOTO/253                  ?0        ?204                 ?240                	;0
	336 212  NOP/0                     ?0        ?0                   ?0                  	;1
	337 212  GOTO/253                  ?0        ?344                 ?241                	;0
	338 214  NOP/0                     ?0        ?0                   ?0                  	;1
	339 214  GOTO/253                  ?0        ?342                 ?242                	;0
	340 216  ASSIGN/38                 ?151      16?18                243:true            	;0
	341 217  ASSIGN/38                 ?152      16?19                244:array (
)       	;0
	342 219  NOP/0                     ?0        ?0                   ?0                  	;1
	343 219  GOTO/253                  ?0        ?260                 ?245                	;0
	344 220  JMP/42                    ?0        ?189                 ?0                  	;0	>>189
	345 220  FE_FREE/127               ?0        $122                 ?0                  	;0	<<188
	346 222  GOTO/253                  ?0        ?4                   ?246                	;0
	347 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'round'         	;1
	348 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'microtime'     	;1
	349 224  SEND_VAL_EX/116           ?80       251:true             ?1                  	;0
	350 224  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
	351 224  MUL/3                     #186=     $185                 252:1000            	;0
	352 224  SEND_VAL_EX/116           ?80       #186                 ?1                  	;0
	353 224  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
	354 224  SUB/2                     #188=     $187                 16?4                	;0
	355 224  FETCH_CONSTANT/99         #189=     ?0                   253:'CLOSE_EMPTY'   	;16
	356 224  IS_SMALLER_OR_EQUAL/20    #190=     #189                 #188                	;0
	357 224  BOOL_NOT/13               #191=     #190                 ?0                  	;0
	358 224  JMPZ/43                   ?0        #191                 ?360                	;0	>>360
	359 225  GOTO/253                  ?0        ?362                 ?256                	;0
	360 227  ECHO/40                   ?0        257:'No sockets waiting, close stream
' ?0                  	;0	<<358
	361 228  GOTO/253                  ?0        ?365                 ?258                	;0
	362 230  GOTO/253                  ?0        ?490                 ?259                	;0
	363 231  GOTO/253                  ?0        ?521                 ?260                	;0
	364 234  GOTO/253                  ?0        ?745                 ?261                	;0
	365 236  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'fclose'        	;1
	366 236  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	367 236  DO_FCALL_BY_NAME/131      ?160      ?0                   ?0                  	;0
	368 237  INIT_METHOD_CALL/112      ?0        16?10                264:'db_connect'    	;0
	369 237  DO_FCALL/60               ?161      ?0                   ?0                  	;0
	370 238  GOTO/253                  ?0        ?418                 ?266                	;0
	371 240  INIT_STATIC_METHOD_CALL/113 ?0        267:'XUI'            269:'CAc325153A658C37'	;1
	372 240  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	373 240  DO_FCALL/60               ?162      ?0                   ?0                  	;0
	374 242  GOTO/253                  ?0        ?103                 ?271                	;0
	375 244  INIT_METHOD_CALL/112      ?0        16?10                272:'query'         	;5
	376 244  SEND_VAL_EX/116           ?80       274:'UPDATE `streams_servers` SET `monitor_pid` = ?, `pid` = ?, `stream_started` = ?, `stream_status` = 0, `to_analyze` = 0 WHERE `server_stream_id` = ?' ?1                  	;0
	377 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'getmypid'      	;0
	378 244  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
	379 244  SEND_VAR_NO_REF_EX/50     ?96       $195                 ?2                  	;0
	380 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'getmypid'      	;0
	381 244  DO_FCALL_BY_NAME/131      $196=     ?0                   ?0                  	;0
	382 244  SEND_VAR_NO_REF_EX/50     ?112      $196                 ?3                  	;0
	383 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'time'          	;0
	384 244  DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
	385 244  SEND_VAR_NO_REF_EX/50     ?128      $197                 ?4                  	;0
	386 244  FETCH_DIM_FUNC_ARG/93     $198=     16?1                 281:'server_stream_id'	;5
	387 244  SEND_VAR_EX/66            ?144      $198                 ?5                  	;0
	388 244  DO_FCALL/60               ?167      ?0                   ?0                  	;0
	389 245  GOTO/253                  ?0        ?104                 ?282                	;0
	390 247  BIND_GLOBAL/168           ?0        16?9                 283:'B3299684b062e356'	;0	<<3
	391 247  BIND_GLOBAL/168           ?0        16?10                284:'b62d6460eb33ea07'	;0
	392 248  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'file_exists'   	;1
	393 248  FETCH_CONSTANT/99         #200=     ?0                   287:'CONS_TMP_PATH' 	;16
	394 248  CONCAT/8                  #201=     #200                 16?0                	;0
	395 248  CONCAT/8                  #202=     #201                 290:'/'             	;0
	396 248  SEND_VAL_EX/116           ?80       #202                 ?1                  	;0
	397 248  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
	398 248  JMPZ/43                   ?0        $203                 ?400                	;0	>>400
	399 249  GOTO/253                  ?0        ?405                 ?291                	;0
	400 251  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'mkdir'         	;1	<<398
	401 251  FETCH_CONSTANT/99         #204=     ?0                   294:'CONS_TMP_PATH' 	;16
	402 251  CONCAT/8                  #205=     #204                 16?0                	;0
	403 251  SEND_VAL_EX/116           ?80       #205                 ?1                  	;0
	404 251  DO_FCALL_BY_NAME/131      ?174      ?0                   ?0                  	;0
	405 253  ISSET_ISEMPTY_DIM_OBJ/115 #207=     16?2                 297:'user_agent'    	;33554432
	406 253  JMPZ/43                   ?0        #207                 ?415                	;0	>>415
	407 253  FETCH_DIM_R/81            $208=     16?2                 298:'user_agent'    	;0
	408 253  FETCH_DIM_R/81            $209=     $208                 299:'value'         	;0
	409 253  JMP_SET/152               #210=     $209                 ?413                	;0
	410 253  FETCH_DIM_R/81            $211=     16?2                 300:'user_agent'    	;0
	411 253  FETCH_DIM_R/81            $212=     $211                 301:'argument_default_value'	;0
	412 253  QM_ASSIGN/22              #210=     $212                 ?0                  	;0
	413 253  QM_ASSIGN/22              #213=     #210                 ?0                  	;0
	414 253  JMP/42                    ?0        ?416                 ?0                  	;0	>>416
	415 253  QM_ASSIGN/22              #213=     302:'Mozilla/5.0'    ?0                  	;0	<<406
	416 253  ASSIGN/38                 ?182      16?6                 #213                	;0	<<414
	417 254  GOTO/253                  ?0        ?40                  ?303                	;0
	418 256  INIT_METHOD_CALL/112      ?0        16?10                304:'query'         	;2
	419 256  SEND_VAL_EX/116           ?80       306:'UPDATE `streams_servers` SET `monitor_pid` = null, `pid` = null, `stream_status` = 1 WHERE `server_stream_id` = ?;' ?1                  	;0
	420 256  FETCH_DIM_FUNC_ARG/93     $215=     16?1                 307:'server_stream_id'	;2
	421 256  SEND_VAR_EX/66            ?96       $215                 ?2                  	;0
	422 256  DO_FCALL/60               ?184      ?0                   ?0                  	;0
	423 257  FETCH_STATIC_PROP_R/173   $217=     308:'rSettings'      309:'XUI'           	;0
	424 257  FETCH_DIM_R/81            $218=     $217                 311:'enable_cache'  	;0
	425 257  BOOL_NOT/13               #219=     $218                 ?0                  	;0
	426 257  JMPZ/43                   ?0        #219                 ?428                	;0	>>428
	427 258  GOTO/253                  ?0        ?431                 ?312                	;0
	428 260  INIT_STATIC_METHOD_CALL/113 ?0        313:'XUI'            315:'cac325153a658c37'	;1	<<426
	429 260  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	430 260  DO_FCALL/60               ?188      ?0                   ?0                  	;0
	431 262  EXIT/79                   ?0        ?0                   ?0                  	;0
	432 263  GOTO/253                  ?0        ?103                 ?317                	;0
	433 265  INIT_METHOD_CALL/112      ?0        16?10                318:'close_mysql'   	;0
	434 265  DO_FCALL/60               ?189      ?0                   ?0                  	;0
	435 266  ASSIGN/38                 ?190      16?4                 320:NULL            	;0
	436 267  INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'stream_set_blocking'	;2
	437 267  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	438 267  SEND_VAL_EX/116           ?96       323:false            ?2                  	;0
	439 267  DO_FCALL_BY_NAME/131      ?191      ?0                   ?0                  	;0
	440 268  ASSIGN/38                 $224=     16?14                324:''              	;0
	441 268  ASSIGN/38                 $225=     16?11                $224                	;0
	442 268  ASSIGN/38                 $226=     16?23                $225                	;0
	443 268  ASSIGN/38                 $227=     16?15                $226                	;0
	444 268  ASSIGN/38                 ?196      16?13                $227                	;0
	445 269  ASSIGN/38                 $229=     16?19                325:array (
)       	;0
	446 269  ASSIGN/38                 ?198      16?24                $229                	;0
	447 270  GOTO/253                  ?0        ?742                 ?326                	;0
	448 272  CONCAT/8                  #231=     16?11                16?13               	;0
	449 272  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'fread'         	;2
	450 272  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	451 272  FETCH_CONSTANT/99         #232=     ?0                   329:'BUFFER_SIZE'   	;16
	452 272  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'strlen'        	;1
	453 272  CONCAT/8                  #233=     16?11                16?13               	;0
	454 272  SEND_VAL_EX/116           ?80       #233                 ?1                  	;0
	455 272  DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
	456 272  SUB/2                     #235=     #232                 $234                	;0
	457 272  SEND_VAL_EX/116           ?96       #235                 ?2                  	;0
	458 272  DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
	459 272  CONCAT/8                  #237=     #231                 $236                	;0
	460 272  ASSIGN/38                 ?206      16?11                #237                	;0
	461 273  ASSIGN/38                 ?207      16?13                334:''              	;0
	462 274  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'floor'         	;1
	463 274  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'strlen'        	;1
	464 274  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	465 274  DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
	466 274  FETCH_CONSTANT/99         #241=     ?0                   339:'PACKET_SIZE'   	;16
	467 274  DIV/4                     #242=     $240                 #241                	;0
	468 274  SEND_VAL_EX/116           ?80       #242                 ?1                  	;0
	469 274  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
	470 274  ASSIGN/38                 ?212      16?12                $243                	;0
	471 275  IS_SMALLER/19             #245=     342:0                16?12               	;0
	472 275  JMPZ/43                   ?0        #245                 ?474                	;0	>>474
	473 276  GOTO/253                  ?0        ?491                 ?343                	;0
	474 278  BOOL_NOT/13               #246=     16?4                 ?0                  	;0	<<472
	475 278  JMPNZ_EX/47               #246=     #246                 ?486                	;0	>>486
	476 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   344:'round'         	;1
	477 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   346:'microtime'     	;1
	478 278  SEND_VAL_EX/116           ?80       348:true             ?1                  	;0
	479 278  DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
	480 278  MUL/3                     #248=     $247                 349:1000            	;0
	481 278  SEND_VAL_EX/116           ?80       #248                 ?1                  	;0
	482 278  DO_FCALL_BY_NAME/131      $249=     ?0                   ?0                  	;0
	483 278  SUB/2                     #250=     $249                 16?4                	;0
	484 278  IS_SMALLER/19             #251=     350:100000           #250                	;0
	485 278  BOOL/52                   #246=     #251                 ?0                  	;0
	486 278  BOOL_NOT/13               #252=     #246                 ?0                  	;0	<<475
	487 278  JMPZ/43                   ?0        #252                 ?489                	;0	>>489
	488 279  GOTO/253                  ?0        ?490                 ?351                	;0
	489 281  GOTO/253                  ?0        ?492                 ?352                	;0	<<487
	490 286  GOTO/253                  ?0        ?513                 ?353                	;0
	491 288  GOTO/253                  ?0        ?152                 ?354                	;0
	492 290  INIT_FCALL_BY_NAME/59     ?0        ?0                   355:'getSockets'    	;0
	493 290  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
	494 290  ASSIGN/38                 ?222      16?3                 $253                	;0
	495 291  INIT_FCALL_BY_NAME/59     ?0        ?0                   357:'count'         	;1
	496 291  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	497 291  DO_FCALL_BY_NAME/131      $255=     ?0                   ?0                  	;0
	498 291  IS_SMALLER/19             #256=     359:0                $255                	;0
	499 291  JMPZ/43                   ?0        #256                 ?501                	;0	>>501
	500 292  GOTO/253                  ?0        ?521                 ?360                	;0
	501 294  JMPZ/43                   ?0        16?4                 ?503                	;0	>>503	<<499
	502 295  GOTO/253                  ?0        ?511                 ?361                	;0
	503 297  INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'round'         	;1	<<501
	504 297  INIT_FCALL_BY_NAME/59     ?0        ?0                   364:'microtime'     	;1
	505 297  SEND_VAL_EX/116           ?80       366:true             ?1                  	;0
	506 297  DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
	507 297  MUL/3                     #258=     $257                 367:1000            	;0
	508 297  SEND_VAL_EX/116           ?80       #258                 ?1                  	;0
	509 297  DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
	510 297  ASSIGN/38                 ?228      16?4                 $259                	;0
	511 299  GOTO/253                  ?0        ?347                 ?368                	;0
	512 302  ASSIGN/38                 ?229      16?11                369:''              	;0
	513 304  IS_EQUAL/17               #262=     16?12                370:0               	;0
	514 304  BOOL_NOT/13               #263=     #262                 ?0                  	;0
	515 304  JMPZ/43                   ?0        #263                 ?517                	;0	>>517
	516 305  GOTO/253                  ?0        ?364                 ?371                	;0
	517 307  INIT_FCALL_BY_NAME/59     ?0        ?0                   372:'usleep'        	;1	<<515
	518 307  SEND_VAL_EX/116           ?80       374:10000            ?1                  	;0
	519 307  DO_FCALL_BY_NAME/131      ?232      ?0                   ?0                  	;0
	520 308  GOTO/253                  ?0        ?364                 ?375                	;0
	521 311  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'round'         	;1
	522 311  INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'microtime'     	;1
	523 311  SEND_VAL_EX/116           ?80       380:true             ?1                  	;0
	524 311  DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
	525 311  MUL/3                     #266=     $265                 381:1000            	;0
	526 311  SEND_VAL_EX/116           ?80       #266                 ?1                  	;0
	527 311  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
	528 311  ASSIGN/38                 ?236      16?4                 $267                	;0
	529 312  ISSET_ISEMPTY_CV/197      #269=     16?23                ?0                  	;16777216
	530 312  JMPZ/43                   ?0        #269                 ?532                	;0	>>532
	531 313  GOTO/253                  ?0        ?490                 ?382                	;0
	532 315  FE_RESET_R/77             $270=     16?3                 ?582                	;0	<<530
	533 315  FE_FETCH_R/78             ?0        $270                 16?25               	;582	>>582	<<581
	534 316  ISSET_ISEMPTY_DIM_OBJ/115 #271=     16?24                16?25               	;33554432
	535 316  JMPZ/43                   ?0        #271                 ?538                	;0	>>538
	536 317  NOP/0                     ?0        ?0                   ?0                  	;1
	537 317  GOTO/253                  ?0        ?581                 ?383                	;0
	538 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   384:'socket_create' 	;3	<<535
	539 319  FETCH_CONSTANT/99         #272=     ?0                   386:'AF_UNIX'       	;16
	540 319  SEND_VAL_EX/116           ?80       #272                 ?1                  	;0
	541 319  FETCH_CONSTANT/99         #273=     ?0                   389:'SOCK_DGRAM'    	;16
	542 319  SEND_VAL_EX/116           ?96       #273                 ?2                  	;0
	543 319  SEND_VAL_EX/116           ?112      392:0                ?3                  	;0
	544 319  DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
	545 319  ASSIGN/38                 ?243      16?26                $274                	;0
	546 320  INIT_FCALL_BY_NAME/59     ?0        ?0                   393:'socket_set_nonblock'	;1
	547 320  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	548 320  DO_FCALL_BY_NAME/131      ?244      ?0                   ?0                  	;0
	549 321  INIT_FCALL_BY_NAME/59     ?0        ?0                   395:'strlen'        	;1
	550 321  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	551 321  DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
	552 321  CONCAT/8                  #278=     397:'Send prebuffer: ' $277                	;0
	553 321  CONCAT/8                  #279=     #278                 398:' bytes
'       	;0
	554 321  ECHO/40                   ?0        #279                 ?0                  	;0
	555 322  ASSIGN_DIM/147            ?248      16?24                16?25               	;0
	556 322  OP_DATA/137               ?0        399:true             ?0                  	;0
	557 323  INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'str_split'     	;2
	558 323  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	559 323  FETCH_CONSTANT/99         #281=     ?0                   402:'BUFFER_SIZE'   	;16
	560 323  SEND_VAL_EX/116           ?96       #281                 ?2                  	;0
	561 323  DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
	562 323  FE_RESET_R/77             $283=     $282                 ?577                	;0
	563 323  FE_FETCH_R/78             ?0        $283                 16?27               	;577	>>577	<<576
	564 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'socket_sendto' 	;5
	565 324  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	566 324  SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
	567 324  FETCH_CONSTANT/99         #284=     ?0                   407:'BUFFER_SIZE'   	;16
	568 324  SEND_VAL_EX/116           ?112      #284                 ?3                  	;0
	569 324  SEND_VAL_EX/116           ?128      410:0                ?4                  	;0
	570 324  FETCH_CONSTANT/99         #285=     ?0                   411:'CONS_TMP_PATH' 	;16
	571 324  CONCAT/8                  #286=     #285                 16?0                	;0
	572 324  CONCAT/8                  #287=     #286                 414:'/'             	;0
	573 324  CONCAT/8                  #288=     #287                 16?25               	;0
	574 324  SEND_VAL_EX/116           ?144      #288                 ?5                  	;0
	575 324  DO_FCALL_BY_NAME/131      ?257      ?0                   ?0                  	;0
	576 325  JMP/42                    ?0        ?563                 ?0                  	;0	>>563
	577 325  FE_FREE/127               ?0        $283                 ?0                  	;0	<<562
	578 328  INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'socket_close'  	;1
	579 328  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	580 328  DO_FCALL_BY_NAME/131      ?258      ?0                   ?0                  	;0
	581 330  JMP/42                    ?0        ?533                 ?0                  	;0	>>533
	582 330  FE_FREE/127               ?0        $270                 ?0                  	;0	<<532
	583 333  GOTO/253                  ?0        ?490                 ?417                	;0
	584 335  FETCH_DIM_IS/90           $291=     16?5                 418:'http'          	;0
	585 335  ISSET_ISEMPTY_DIM_OBJ/115 #292=     $291                 419:'header'        	;16777216
	586 335  BOOL_NOT/13               #293=     #292                 ?0                  	;0
	587 335  JMPZ/43                   ?0        #293                 ?596                	;0	>>596
	588 335  INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'escapeshellarg'	;1
	589 335  FETCH_DIM_FUNC_ARG/93     $294=     16?5                 422:'http'          	;1
	590 335  FETCH_DIM_FUNC_ARG/93     $295=     $294                 423:'header'        	;1
	591 335  SEND_VAR_EX/66            ?80       $295                 ?1                  	;0
	592 335  DO_FCALL_BY_NAME/131      $296=     ?0                   ?0                  	;0
	593 335  CONCAT/8                  #297=     424:'-headers '      $296                	;0
	594 335  QM_ASSIGN/22              #298=     #297                 ?0                  	;0
	595 335  JMP/42                    ?0        ?597                 ?0                  	;0	>>597
	596 335  QM_ASSIGN/22              #298=     425:''               ?0                  	;0	<<587
	597 335  ASSIGN/38                 ?267      16?28                #298                	;0	<<595
	598 336  ISSET_ISEMPTY_DIM_OBJ/115 #300=     16?2                 426:'proxy'         	;16777216
	599 336  BOOL_NOT/13               #301=     #300                 ?0                  	;0
	600 336  JMPZ/43                   ?0        #301                 ?608                	;0	>>608
	601 336  INIT_FCALL_BY_NAME/59     ?0        ?0                   427:'escapeshellarg'	;1
	602 336  FETCH_DIM_FUNC_ARG/93     $302=     16?2                 429:'proxy'         	;1
	603 336  SEND_VAR_EX/66            ?80       $302                 ?1                  	;0
	604 336  DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
	605 336  CONCAT/8                  #304=     430:'-http_proxy '   $303                	;0
	606 336  QM_ASSIGN/22              #305=     #304                 ?0                  	;0
	607 336  JMP/42                    ?0        ?609                 ?0                  	;0	>>609
	608 336  QM_ASSIGN/22              #305=     431:''               ?0                  	;0	<<600
	609 336  ASSIGN/38                 ?274      16?29                #305                	;0	<<607
	610 337  FETCH_STATIC_PROP_R/173   $307=     432:'rFFMPEG_CPU'    433:'XUI'           	;0
	611 337  CONCAT/8                  #308=     $307                 435:' -copyts -vsync 0 -nostats -nostdin -hide_banner -loglevel quiet -y -user_agent '	;0
	612 337  INIT_FCALL_BY_NAME/59     ?0        ?0                   436:'escapeshellarg'	;1
	613 337  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	614 337  DO_FCALL_BY_NAME/131      $309=     ?0                   ?0                  	;0
	615 337  CONCAT/8                  #310=     #308                 $309                	;0
	616 337  CONCAT/8                  #311=     #310                 438:' '             	;0
	617 337  CONCAT/8                  #312=     #311                 16?28               	;0
	618 337  CONCAT/8                  #313=     #312                 439:' '             	;0
	619 337  CONCAT/8                  #314=     #313                 16?29               	;0
	620 337  CONCAT/8                  #315=     #314                 440:' -i '          	;0
	621 337  INIT_FCALL_BY_NAME/59     ?0        ?0                   441:'escapeshellarg'	;1
	622 337  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	623 337  DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
	624 337  CONCAT/8                  #317=     #315                 $316                	;0
	625 337  CONCAT/8                  #318=     #317                 443:' -map 0 -c copy -mpegts_flags +initial_discontinuity -pat_period '	;0
	626 337  FETCH_CONSTANT/99         #319=     ?0                   444:'PAT_PERIOD'    	;16
	627 337  CONCAT/8                  #320=     #318                 #319                	;0
	628 337  CONCAT/8                  #321=     #320                 447:' -f mpegts -'  	;0
	629 337  ASSIGN/38                 ?290      16?30                #321                	;0
	630 338  INIT_FCALL_BY_NAME/59     ?0        ?0                   448:'popen'         	;2
	631 338  SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	632 338  SEND_VAL_EX/116           ?96       450:'rb'             ?2                  	;0
	633 338  DO_FCALL_BY_NAME/131      $323=     ?0                   ?0                  	;0
	634 338  ASSIGN/38                 ?292      16?9                 $323                	;0
	635 340  GOTO/253                  ?0        ?132                 ?451                	;0
	636 342  GOTO/253                  ?0        ?512                 ?452                	;0
	637 344  INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'round'         	;1
	638 344  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'microtime'     	;1
	639 344  SEND_VAL_EX/116           ?80       457:true             ?1                  	;0
	640 344  DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
	641 344  MUL/3                     #326=     $325                 458:1000            	;0
	642 344  SEND_VAL_EX/116           ?80       #326                 ?1                  	;0
	643 344  DO_FCALL_BY_NAME/131      $327=     ?0                   ?0                  	;0
	644 344  ASSIGN/38                 ?296      16?4                 $327                	;0
	645 345  FE_RESET_R/77             $329=     16?3                 ?740                	;0
	646 345  FE_FETCH_R/78             ?0        $329                 16?25               	;740	>>740	<<739
	647 346  NOP/0                     ?0        ?0                   ?0                  	;1
	648 346  GOTO/253                  ?0        ?701                 ?459                	;0
	649 348  ISSET_ISEMPTY_CV/197      #330=     16?23                ?0                  	;16777216
	650 348  JMPZ/43                   ?0        #330                 ?653                	;0	>>653
	651 349  NOP/0                     ?0        ?0                   ?0                  	;1
	652 349  GOTO/253                  ?0        ?696                 ?460                	;0
	653 351  INIT_FCALL_BY_NAME/59     ?0        ?0                   461:'strlen'        	;1	<<650
	654 351  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	655 351  DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
	656 351  CONCAT/8                  #332=     463:'Send prebuffer: ' $331                	;0
	657 351  CONCAT/8                  #333=     #332                 464:' bytes
'       	;0
	658 351  ECHO/40                   ?0        #333                 ?0                  	;0
	659 352  ASSIGN_DIM/147            ?302      16?24                16?25               	;0
	660 352  OP_DATA/137               ?0        465:true             ?0                  	;0
	661 353  INIT_FCALL_BY_NAME/59     ?0        ?0                   466:'str_split'     	;2
	662 353  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	663 353  FETCH_CONSTANT/99         #335=     ?0                   468:'BUFFER_SIZE'   	;16
	664 353  SEND_VAL_EX/116           ?96       #335                 ?2                  	;0
	665 353  DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
	666 353  FE_RESET_R/77             $337=     $336                 ?677                	;0
	667 353  FE_FETCH_R/78             ?0        $337                 16?27               	;677	>>677	<<676
	668 354  INIT_FCALL_BY_NAME/59     ?0        ?0                   471:'socket_sendto' 	;5
	669 354  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	670 354  SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
	671 354  FETCH_CONSTANT/99         #338=     ?0                   473:'BUFFER_SIZE'   	;16
	672 354  SEND_VAL_EX/116           ?112      #338                 ?3                  	;0
	673 354  SEND_VAL_EX/116           ?128      476:0                ?4                  	;0
	674 354  SEND_VAR_EX/66            ?144      16?31                ?5                  	;0
	675 354  DO_FCALL_BY_NAME/131      ?307      ?0                   ?0                  	;0
	676 355  JMP/42                    ?0        ?667                 ?0                  	;0	>>667
	677 355  FE_FREE/127               ?0        $337                 ?0                  	;0	<<666
	678 358  NOP/0                     ?0        ?0                   ?0                  	;1
	679 358  GOTO/253                  ?0        ?696                 ?477                	;0
	680 360  ISSET_ISEMPTY_CV/197      #340=     16?11                ?0                  	;16777216
	681 360  JMPZ/43                   ?0        #340                 ?684                	;0	>>684
	682 361  NOP/0                     ?0        ?0                   ?0                  	;1
	683 361  GOTO/253                  ?0        ?692                 ?478                	;0
	684 363  INIT_FCALL_BY_NAME/59     ?0        ?0                   479:'socket_sendto' 	;5	<<681
	685 363  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	686 363  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	687 363  FETCH_CONSTANT/99         #341=     ?0                   481:'BUFFER_SIZE'   	;16
	688 363  SEND_VAL_EX/116           ?112      #341                 ?3                  	;0
	689 363  SEND_VAL_EX/116           ?128      484:0                ?4                  	;0
	690 363  SEND_VAR_EX/66            ?144      16?31                ?5                  	;0
	691 363  DO_FCALL_BY_NAME/131      ?310      ?0                   ?0                  	;0
	692 365  NOP/0                     ?0        ?0                   ?0                  	;1
	693 365  GOTO/253                  ?0        ?696                 ?485                	;0
	694 367  NOP/0                     ?0        ?0                   ?0                  	;1
	695 367  GOTO/253                  ?0        ?649                 ?486                	;0
	696 371  INIT_FCALL_BY_NAME/59     ?0        ?0                   487:'socket_close'  	;1
	697 371  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	698 371  DO_FCALL_BY_NAME/131      ?311      ?0                   ?0                  	;0
	699 374  NOP/0                     ?0        ?0                   ?0                  	;1
	700 374  GOTO/253                  ?0        ?739                 ?489                	;0
	701 376  FETCH_CONSTANT/99         #344=     ?0                   490:'CONS_TMP_PATH' 	;16
	702 376  CONCAT/8                  #345=     #344                 16?0                	;0
	703 376  CONCAT/8                  #346=     #345                 493:'/'             	;0
	704 376  CONCAT/8                  #347=     #346                 16?25               	;0
	705 376  ASSIGN/38                 ?316      16?31                #347                	;0
	706 377  INIT_FCALL_BY_NAME/59     ?0        ?0                   494:'file_exists'   	;1
	707 377  SEND_VAR_EX/66            ?80       16?31                ?1                  	;0
	708 377  DO_FCALL_BY_NAME/131      $349=     ?0                   ?0                  	;0
	709 377  JMPZ_EX/46                #350=     $349                 ?717                	;0	>>717
	710 377  ISSET_ISEMPTY_DIM_OBJ/115 #351=     16?24                16?25               	;33554432
	711 377  BOOL_NOT/13               #352=     #351                 ?0                  	;0
	712 377  JMPNZ_EX/47               #352=     #352                 ?716                	;0	>>716
	713 377  ISSET_ISEMPTY_CV/197      #353=     16?11                ?0                  	;16777216
	714 377  BOOL_NOT/13               #354=     #353                 ?0                  	;0
	715 377  BOOL/52                   #352=     #354                 ?0                  	;0
	716 377  BOOL/52                   #350=     #352                 ?0                  	;0	<<712
	717 377  BOOL_NOT/13               #355=     #350                 ?0                  	;0	<<709
	718 377  JMPZ/43                   ?0        #355                 ?721                	;0	>>721
	719 378  NOP/0                     ?0        ?0                   ?0                  	;1
	720 378  GOTO/253                  ?0        ?699                 ?496                	;0
	721 380  INIT_FCALL_BY_NAME/59     ?0        ?0                   497:'socket_create' 	;3	<<718
	722 380  FETCH_CONSTANT/99         #356=     ?0                   499:'AF_UNIX'       	;16
	723 380  SEND_VAL_EX/116           ?80       #356                 ?1                  	;0
	724 380  FETCH_CONSTANT/99         #357=     ?0                   502:'SOCK_DGRAM'    	;16
	725 380  SEND_VAL_EX/116           ?96       #357                 ?2                  	;0
	726 380  SEND_VAL_EX/116           ?112      505:0                ?3                  	;0
	727 380  DO_FCALL_BY_NAME/131      $358=     ?0                   ?0                  	;0
	728 380  ASSIGN/38                 ?327      16?26                $358                	;0
	729 381  INIT_FCALL_BY_NAME/59     ?0        ?0                   506:'socket_set_nonblock'	;1
	730 381  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	731 381  DO_FCALL_BY_NAME/131      ?328      ?0                   ?0                  	;0
	732 382  ISSET_ISEMPTY_DIM_OBJ/115 #361=     16?24                16?25               	;33554432
	733 382  BOOL_NOT/13               #362=     #361                 ?0                  	;0
	734 382  JMPZ/43                   ?0        #362                 ?737                	;0	>>737
	735 383  NOP/0                     ?0        ?0                   ?0                  	;1
	736 383  GOTO/253                  ?0        ?694                 ?508                	;0
	737 385  NOP/0                     ?0        ?0                   ?0                  	;1	<<734
	738 385  GOTO/253                  ?0        ?680                 ?509                	;0
	739 386  JMP/42                    ?0        ?646                 ?0                  	;0	>>646
	740 386  FE_FREE/127               ?0        $329                 ?0                  	;0	<<645
	741 389  GOTO/253                  ?0        ?512                 ?510                	;0
	742 391  ASSIGN/38                 $363=     16?18                511:false           	;0
	743 391  ASSIGN/38                 ?332      16?16                $363                	;0
	744 392  ASSIGN/38                 ?333      16?17                512:false           	;0
	745 394  INIT_FCALL_BY_NAME/59     ?0        ?0                   513:'feof'          	;1
	746 394  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	747 394  DO_FCALL_BY_NAME/131      $366=     ?0                   ?0                  	;0
	748 394  JMPZ/43                   ?0        $366                 ?750                	;0	>>750
	749 395  GOTO/253                  ?0        ?365                 ?515                	;0
	750 397  INIT_FCALL_BY_NAME/59     ?0        ?0                   516:'stream_set_timeout'	;2	<<748
	751 397  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	752 397  FETCH_CONSTANT/99         #367=     ?0                   518:'TIMEOUT'       	;16
	753 397  SEND_VAL_EX/116           ?96       #367                 ?2                  	;0
	754 397  DO_FCALL_BY_NAME/131      ?336      ?0                   ?0                  	;0
	755 398  GOTO/253                  ?0        ?448                 ?521                	;0
	756 400  NOP/0                     ?0        522:NULL             ?0                  	;4294967295
	*/
}

function getSockets()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   405  JMP/42                    ?0        ?17                  ?0                  	;0	>>17
	1   407  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'closedir'        	;1
	2   407  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   407  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
	4   409  RETURN/62                 ?0        16?1                 ?0                  	;0
	5   410  GOTO/253                  ?0        ?38                  ?3                  	;0
	6   412  IS_NOT_EQUAL/18           #5=       16?2                 4:'.'               	;0
	7   412  JMPZ_EX/46                #5=       #5                   ?10                 	;0	>>10
	8   412  IS_NOT_EQUAL/18           #6=       16?2                 5:'..'              	;0
	9   412  BOOL/52                   #5=       #6                   ?0                  	;0
	10  412  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<7
	11  412  JMPZ/43                   ?0        #7                   ?13                 	;0	>>13
	12  413  GOTO/253                  ?0        ?15                  ?6                  	;0
	13  415  ASSIGN_DIM/147            ?4        16?1                 ?4397406            	;0	<<11
	14  415  OP_DATA/137               ?0        16?2                 ?0                  	;0
	15  417  GOTO/253                  ?0        ?29                  ?7                  	;0
	16  419  GOTO/253                  ?0        ?1                   ?8                  	;0
	17  421  BIND_GLOBAL/168           ?0        16?3                 9:'ee6d1fc5d801b43f'	;0	<<0
	18  422  ASSIGN/38                 ?5        16?1                 10:array (
)        	;0
	19  423  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'opendir'        	;1
	20  423  FETCH_CONSTANT/99         #10=      ?0                   13:'CONS_TMP_PATH'  	;16
	21  423  CONCAT/8                  #11=      #10                  16?3                	;0
	22  423  CONCAT/8                  #12=      #11                  16:'/'              	;0
	23  423  SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
	24  423  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	25  423  ASSIGN/38                 $14=      16?0                 $13                 	;0
	26  423  BOOL_NOT/13               #15=      $14                  ?0                  	;0
	27  423  JMPZ/43                   ?0        #15                  ?29                 	;0	>>29
	28  424  GOTO/253                  ?0        ?4                   ?17                 	;0
	29  427  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'readdir'        	;1	<<27
	30  427  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	31  427  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	32  427  ASSIGN/38                 $17=      16?2                 $16                 	;0
	33  427  IS_NOT_IDENTICAL/16       #18=      20:false             $17                 	;0
	34  427  BOOL_NOT/13               #19=      #18                  ?0                  	;0
	35  427  JMPZ/43                   ?0        #19                  ?37                 	;0	>>37
	36  428  GOTO/253                  ?0        ?16                  ?21                 	;0
	37  430  GOTO/253                  ?0        ?6                   ?22                 	;0	<<35
	38  432  NOP/0                     ?0        23:NULL              ?0                  	;4294967295
	*/
}

function getActiveStream($F83b167f3cf044be, $b46218714d674656)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   434  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   434  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   436  FE_RESET_R/77             $10=      16?0                 ?112                	;0
	3   436  FE_FETCH_R/78             ?0        $10                  16?2                	;112	>>112	<<111
	4   437  NOP/0                     ?0        ?0                   ?0                  	;1
	5   437  JMP/42                    ?0        ?27                  ?0                  	;0	>>27
	6   439  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'in_array'        	;2
	7   439  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'strtolower'      	;1
	8   439  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	9   439  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	10  439  SEND_VAR_NO_REF_EX/50     ?80       $11                  ?1                  	;0
	11  439  SEND_VAL_EX/116           ?96       5:array (
  0 => 'application/x-mpegurl',
  1 => 'application/vnd.apple.mpegurl',
  2 => 'audio/x-mpegurl',
) ?2                  	;0
	12  439  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	13  439  BOOL_NOT/13               #13=      $12                  ?0                  	;0
	14  439  JMPZ/43                   ?0        #13                  ?17                 	;0	>>17
	15  440  NOP/0                     ?0        ?0                   ?0                  	;1
	16  440  GOTO/253                  ?0        ?19                  ?6                  	;0
	17  442  FE_FREE/127               ?0        $10                  ?0                  	;1	<<14
	18  442  RETURN/62                 ?0        16?2                 ?0                  	;0
	19  444  NOP/0                     ?0        ?0                   ?0                  	;1
	20  444  GOTO/253                  ?0        ?25                  ?7                  	;0
	21  446  NOP/0                     ?0        ?0                   ?0                  	;1
	22  446  GOTO/253                  ?0        ?23                  ?8                  	;0
	23  448  FE_FREE/127               ?0        $10                  ?0                  	;1
	24  448  RETURN/62                 ?0        16?4                 ?0                  	;0
	25  452  NOP/0                     ?0        ?0                   ?0                  	;1
	26  452  GOTO/253                  ?0        ?111                 ?9                  	;0
	27  454  INIT_STATIC_METHOD_CALL/113 ?0        10:'XUI'             12:'c1f42Ca38AD7A48d'	;1	<<5
	28  454  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	29  454  DO_FCALL/60               $14=      ?0                   ?0                  	;0
	30  454  ASSIGN/38                 ?5        16?2                 $14                 	;0
	31  455  BEGIN_SILENCE/57          #16=      ?0                   ?0                  	;0
	32  455  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'fopen'          	;4
	33  455  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	34  455  SEND_VAL_EX/116           ?96       16:'rb'              ?2                  	;0
	35  455  SEND_VAL_EX/116           ?112      17:false             ?3                  	;0
	36  455  SEND_VAR_EX/66            ?128      16?1                 ?4                  	;0
	37  455  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	38  455  END_SILENCE/58            ?0        #16                  ?0                  	;0
	39  455  ASSIGN/38                 ?8        16?4                 $17                 	;0
	40  456  BOOL_NOT/13               #19=      16?4                 ?0                  	;0
	41  456  JMPZ/43                   ?0        #19                  ?44                 	;0	>>44
	42  457  NOP/0                     ?0        ?0                   ?0                  	;1
	43  457  GOTO/253                  ?0        ?25                  ?18                 	;0
	44  459  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'stream_get_meta_data'	;1	<<41
	45  459  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	46  459  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	47  459  ASSIGN/38                 ?11       16?5                 $20                 	;0
	48  460  ASSIGN/38                 ?12       16?6                 21:array (
)        	;0
	49  461  NOP/0                     ?0        ?0                   ?0                  	;1
	50  461  GOTO/253                  ?0        ?51                  ?22                 	;0
	51  463  FETCH_DIM_R/81            $23=      16?5                 23:'wrapper_data'   	;0
	52  463  FE_RESET_R/77             $24=      $23                  ?81                 	;0
	53  463  FE_FETCH_R/78             ?0        $24                  16?7                	;81	>>81	<<80
	54  464  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'strpos'         	;2
	55  464  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	56  464  SEND_VAL_EX/116           ?96       26:'HTTP'            ?2                  	;0
	57  464  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	58  464  IS_IDENTICAL/15           #26=      $25                  27:0                	;0
	59  464  BOOL_NOT/13               #27=      #26                  ?0                  	;0
	60  464  JMPZ/43                   ?0        #27                  ?64                 	;0	>>64
	61  465  NOP/0                     ?0        ?0                   ?0                  	;1
	62  465  NOP/0                     ?0        ?0                   ?0                  	;1
	63  465  GOTO/253                  ?0        ?69                  ?28                 	;0
	64  467  ASSIGN_DIM/147            ?18       16?6                 29:0                	;0	<<60
	65  467  OP_DATA/137               ?0        16?7                 ?0                  	;0
	66  468  NOP/0                     ?0        ?0                   ?0                  	;1
	67  468  NOP/0                     ?0        ?0                   ?0                  	;1
	68  468  GOTO/253                  ?0        ?80                  ?30                 	;0
	69  470  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'explode'        	;2
	70  470  SEND_VAL_EX/116           ?80       33:': '              ?1                  	;0
	71  470  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	72  470  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	73  470  FETCH_LIST/98             $30=      $29                  34:0                	;0
	74  470  ASSIGN/38                 ?21       16?8                 $30                 	;0
	75  470  FETCH_LIST/98             $32=      $29                  35:1                	;0
	76  470  ASSIGN/38                 ?23       16?9                 $32                 	;0
	77  470  FREE/70                   ?0        $29                  ?0                  	;0
	78  471  ASSIGN_DIM/147            ?24       16?6                 16?8                	;0
	79  471  OP_DATA/137               ?0        16?9                 ?0                  	;0
	80  472  JMP/42                    ?0        ?53                  ?0                  	;0	>>53
	81  472  FE_FREE/127               ?0        $24                  ?0                  	;0	<<52
	82  475  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'is_array'       	;1
	83  475  FETCH_DIM_FUNC_ARG/93     $35=      16?6                 38:'Content-Type'   	;1
	84  475  SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
	85  475  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	86  475  JMPZ/43                   ?0        $36                  ?96                 	;0	>>96
	87  475  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'count'          	;1
	88  475  FETCH_DIM_FUNC_ARG/93     $38=      16?6                 42:'Content-Type'   	;1
	89  475  SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
	90  475  DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	91  475  SUB/2                     #40=      $39                  43:1                	;0
	92  475  FETCH_DIM_R/81            $37=      16?6                 39:'Content-Type'   	;0
	93  475  FETCH_DIM_R/81            $41=      $37                  #40                 	;0
	94  475  QM_ASSIGN/22              #42=      $41                  ?0                  	;0
	95  475  JMP/42                    ?0        ?98                  ?0                  	;0	>>98
	96  475  FETCH_DIM_R/81            $43=      16?6                 44:'Content-Type'   	;0	<<86
	97  475  QM_ASSIGN/22              #42=      $43                  ?0                  	;0
	98  475  ASSIGN/38                 ?34       16?3                 #42                 	;0	<<95
	99  476  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'strtolower'     	;1
	100 476  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	101 476  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
	102 476  IS_EQUAL/17               #46=      $45                  47:'video/mp2t'     	;0
	103 476  JMPZ/43                   ?0        #46                  ?106                	;0	>>106
	104 477  NOP/0                     ?0        ?0                   ?0                  	;1
	105 477  GOTO/253                  ?0        ?21                  ?48                 	;0
	106 479  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'fclose'         	;1	<<103
	107 479  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	108 479  DO_FCALL_BY_NAME/131      ?37       ?0                   ?0                  	;0
	109 480  NOP/0                     ?0        ?0                   ?0                  	;1
	110 480  GOTO/253                  ?0        ?6                   ?51                 	;0
	111 481  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
	112 481  FE_FREE/127               ?0        $10                  ?0                  	;0	<<2
	113 484  RETURN/62                 ?0        52:NULL              ?0                  	;0
	114 485  NOP/0                     ?0        53:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   517  BIND_GLOBAL/168           ?0        16?0                 0:'ee6d1fc5d801b43f'	;0
	1   517  BIND_GLOBAL/168           ?0        16?1                 1:'B3299684b062e356'	;0
	2   518  BEGIN_SILENCE/57          #2=       ?0                   ?0                  	;0
	3   518  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'unlink'          	;1
	4   518  FETCH_CONSTANT/99         #3=       ?0                   4:'STREAMS_PATH'    	;16
	5   518  CONCAT/8                  #4=       #3                   16?0                	;0
	6   518  CONCAT/8                  #5=       #4                   7:'_.monitor'       	;0
	7   518  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
	8   518  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	9   518  END_SILENCE/58            ?0        #2                   ?0                  	;0
	10  519  BEGIN_SILENCE/57          #7=       ?0                   ?0                  	;0
	11  519  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'unlink'          	;1
	12  519  FETCH_CONSTANT/99         #8=       ?0                   10:'STREAMS_PATH'   	;16
	13  519  CONCAT/8                  #9=       #8                   16?0                	;0
	14  519  CONCAT/8                  #10=      #9                   13:'_.pid'          	;0
	15  519  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
	16  519  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	17  519  END_SILENCE/58            ?0        #7                   ?0                  	;0
	18  520  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'shell_exec'     	;1
	19  520  FETCH_CONSTANT/99         #12=      ?0                   16:'CONS_TMP_PATH'  	;16
	20  520  CONCAT/8                  #13=      19:'rm -rf '         #12                 	;0
	21  520  CONCAT/8                  #14=      #13                  16?0                	;0
	22  520  CONCAT/8                  #15=      #14                  20:'/'              	;0
	23  520  SEND_VAL_EX/116           ?80       #15                  ?1                  	;0
	24  520  DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
	25  521  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'is_resource'    	;1
	26  521  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	27  521  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	28  521  BOOL_NOT/13               #18=      $17                  ?0                  	;0
	29  521  JMPZ/43                   ?0        #18                  ?31                 	;0	>>31
	30  522  GOTO/253                  ?0        ?36                  ?23                 	;0
	31  524  BEGIN_SILENCE/57          #19=      ?0                   ?0                  	;0	<<29
	32  524  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'fclose'         	;1
	33  524  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	34  524  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
	35  524  END_SILENCE/58            ?0        #19                  ?0                  	;0
	36  526  NOP/0                     ?0        26:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?102                 ?0                  	;0	>>102
1   6    NOP/0                     ?0        ?0                   ?0                  	;0
2   40   GOTO/253                  ?0        ?125                 ?1                  	;0
3   42   INIT_METHOD_CALL/112      ?0        16?0                 2:'query'           	;2
4   42   SEND_VAL_EX/116           ?80       4:'SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id' ?1                  	;0
5   42   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
6   42   DO_FCALL/60               ?0        ?0                   ?0                  	;0
7   43   INIT_METHOD_CALL/112      ?0        16?0                 5:'get_rows'        	;2
8   43   SEND_VAL_EX/116           ?80       7:true               ?1                  	;0
9   43   SEND_VAL_EX/116           ?96       8:'argument_key'     ?2                  	;0
10  43   DO_FCALL/60               $8=       ?0                   ?0                  	;0
11  43   ASSIGN/38                 ?2        16?2                 $8                  	;0
12  44   DECLARE_CONST/143         ?0        9:'PAT_HEADER'       10:'°' . "\0" . ''	;0
13  45   DECLARE_CONST/143         ?0        11:'PACKET_SIZE'     12:188              	;0
14  46   DECLARE_CONST/143         ?0        13:'BUFFER_SIZE'     14:12032            	;0
15  47   GOTO/253                  ?0        ?96                  ?15                 	;0
16  49   EXIT/79                   ?0        ?0                   ?0                  	;0
17  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'file_put_contents'	;2
18  51   FETCH_CONSTANT/99         #10=      ?0                   18:'STREAMS_PATH'   	;16
19  51   CONCAT/8                  #11=      #10                  16?1                	;0
20  51   CONCAT/8                  #12=      #11                  21:'_.monitor'      	;0
21  51   SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
22  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'getmypid'       	;0
23  51   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
24  51   SEND_VAR_NO_REF_EX/50     ?96       $13                  ?2                  	;0
25  51   DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
26  52   BEGIN_SILENCE/57          #15=      ?0                   ?0                  	;0
27  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'unlink'         	;1
28  52   FETCH_CONSTANT/99         #16=      ?0                   26:'STREAMS_PATH'   	;16
29  52   CONCAT/8                  #17=      #16                  16?1                	;0
30  52   CONCAT/8                  #18=      #17                  29:'_.pid'          	;0
31  52   SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
32  52   DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
33  52   END_SILENCE/58            ?0        #15                  ?0                  	;0
34  53   INIT_METHOD_CALL/112      ?0        16?0                 30:'get_row'        	;0
35  53   DO_FCALL/60               $20=      ?0                   ?0                  	;0
36  53   ASSIGN/38                 ?14       16?3                 $20                 	;0
37  54   GOTO/253                  ?0        ?3                   ?32                 	;0
38  57   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'intval'         	;1
39  57   FETCH_DIM_FUNC_ARG/93     $22=      16?4                 35:1                	;1
40  57   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
41  57   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
42  57   ASSIGN/38                 ?17       16?1                 $23                 	;0
43  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'str_replace'    	;3
44  58   SEND_VAL_EX/116           ?80       38:'\\'              ?1                  	;0
45  58   SEND_VAL_EX/116           ?96       39:'/'               ?2                  	;0
46  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'dirname'        	;1
47  58   FETCH_DIM_FUNC_ARG/93     $25=      16?4                 42:0                	;1
48  58   SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
49  58   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
50  58   SEND_VAR_NO_REF_EX/50     ?112      $26                  ?3                  	;0
51  58   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
52  58   CONCAT/8                  #28=      $27                  43:'/../../www/init.php'	;0
53  58   INCLUDE_OR_EVAL/73        ?22       #28                  ?0                  	;8
54  59   INIT_FCALL/61             ?0        ?672                 44:'c7cc2f0dd6f71ebb'	;1
55  59   SEND_VAR/117              ?80       16?1                 ?1                  	;0
56  59   DO_FCALL/60               ?23       ?0                   ?0                  	;0
57  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'register_shutdown_function'	;1
58  60   SEND_VAL_EX/116           ?80       47:'shutdown'        ?1                  	;0
59  60   DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
60  61   GOTO/253                  ?0        ?71                  ?48                 	;0
61  63   ASSIGN/38                 ?25       16?5                 49:NULL             	;0
62  65   NOP/0                     ?0        ?0                   ?0                  	;0
63  401  INIT_FCALL/61             ?0        ?5984                50:'startproxy'     	;3
64  401  SEND_VAR/117              ?80       16?1                 ?1                  	;0
65  401  SEND_VAR/117              ?96       16?3                 ?2                  	;0
66  401  SEND_VAR/117              ?112      16?2                 ?3                  	;0
67  401  DO_FCALL/60               ?26       ?0                   ?0                  	;0
68  403  NOP/0                     ?0        ?0                   ?0                  	;0
69  434  NOP/0                     ?0        ?0                   ?0                  	;0
70  486  GOTO/253                  ?0        ?1                   ?51                 	;0
71  488  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'set_time_limit' 	;1
72  488  SEND_VAL_EX/116           ?80       54:0                 ?1                  	;0
73  488  DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
74  489  INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'cli_set_process_title'	;1
75  489  ROPE_INIT/54              #36=      ?0                   57:'XUIProxy['      	;3
76  489  ROPE_ADD/55               #36=      #36                  16?1                	;1
77  489  ROPE_END/56               #35=      #36                  58:']'              	;2
78  489  SEND_VAL_EX/116           ?80       #35                  ?1                  	;0
79  489  DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
80  490  INIT_METHOD_CALL/112      ?0        16?0                 59:'query'          	;3
81  490  SEND_VAL_EX/116           ?80       61:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.id = ?' ?1                  	;0
82  490  FETCH_CONSTANT/99         #39=      ?0                   62:'SERVER_ID'      	;16
83  490  SEND_VAL_EX/116           ?96       #39                  ?2                  	;0
84  490  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
85  490  DO_FCALL/60               ?33       ?0                   ?0                  	;0
86  491  INIT_METHOD_CALL/112      ?0        16?0                 65:'num_rows'       	;0
87  491  DO_FCALL/60               $41=      ?0                   ?0                  	;0
88  491  IS_SMALLER_OR_EQUAL/20    #42=      $41                  67:0                	;0
89  491  BOOL_NOT/13               #43=      #42                  ?0                  	;0
90  491  JMPZ/43                   ?0        #43                  ?92                 	;0	>>92
91  492  GOTO/253                  ?0        ?17                  ?68                 	;0
92  494  INIT_STATIC_METHOD_CALL/113 ?0        69:'XUI'             71:'ee173B194544b3A2'	;1	<<90
93  494  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
94  494  DO_FCALL/60               ?37       ?0                   ?0                  	;0
95  495  GOTO/253                  ?0        ?16                  ?73                 	;0
96  497  DECLARE_CONST/143         ?0        74:'PAT_PERIOD'      75:2                	;0
97  498  DECLARE_CONST/143         ?0        76:'TIMEOUT'         77:20               	;0
98  499  DECLARE_CONST/143         ?0        78:'CLOSE_EMPTY'     79:3000             	;0
99  500  DECLARE_CONST/143         ?0        80:'STORE_PREBUFFER' 81:1128000          	;0
100 501  DECLARE_CONST/143         ?0        82:'MAX_PREBUFFER'   83:10528000         	;0
101 502  GOTO/253                  ?0        ?61                  ?84                 	;0
102 504  INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'posix_getpwuid' 	;1	<<0
103 504  INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'posix_geteuid'  	;0
104 504  DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
105 504  SEND_VAR_NO_REF_EX/50     ?80       $45                  ?1                  	;0
106 504  DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
107 504  FETCH_DIM_R/81            $47=      $46                  89:'name'           	;0
108 504  IS_NOT_EQUAL/18           #48=      $47                  90:'xui'            	;0
109 504  BOOL_NOT/13               #49=      #48                  ?0                  	;0
110 504  JMPZ/43                   ?0        #49                  ?112                	;0	>>112
111 505  GOTO/253                  ?0        ?113                 ?91                 	;0
112 507  EXIT/79                   ?0        92:'Please run as XUI!
' ?0                  	;0	<<110
113 509  BEGIN_SILENCE/57          #50=      ?0                   ?0                  	;0
114 509  FETCH_R/80                $51=      93:'argc'            ?0                  	;268435456
115 509  END_SILENCE/58            ?0        #50                  ?0                  	;0
116 509  BOOL_NOT/13               #52=      $51                  ?0                  	;0
117 509  JMPNZ_EX/47               #52=      #52                  ?120                	;0	>>120
118 509  IS_SMALLER_OR_EQUAL/20    #53=      16?6                 94:1                	;0
119 509  BOOL/52                   #52=      #53                  ?0                  	;0
120 509  BOOL_NOT/13               #54=      #52                  ?0                  	;0	<<117
121 509  JMPZ/43                   ?0        #54                  ?123                	;0	>>123
122 510  GOTO/253                  ?0        ?38                  ?95                 	;0
123 512  EXIT/79                   ?0        96:0                 ?0                  	;0	<<121
124 513  GOTO/253                  ?0        ?38                  ?97                 	;0
125 515  NOP/0                     ?0        ?0                   ?0                  	;0
126 527  NOP/0                     ?0        98:1                 ?0                  	;4294967295
*/

?>