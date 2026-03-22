<?php


function AB8369074df2Aaa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   18   JMP/42                    ?0        ?22                  ?0                  	;0	>>22
	1   20   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'rtrim'           	;2
	2   20   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   20   SEND_VAL_EX/116           ?96       3:','                ?2                  	;0
	4   20   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	5   20   ASSIGN/38                 ?1        16?0                 $12                 	;0
	6   21   INIT_METHOD_CALL/112      ?0        16?1                 4:'query'           	;1
	7   21   ROPE_INIT/54              #15=      ?0                   6:'INSERT INTO `streams_errors` (`stream_id`,`server_id`,`date`,`error`) VALUES '	;3
	8   21   ROPE_ADD/55               #15=      #15                  16?0                	;1
	9   21   ROPE_END/56               #14=      #15                  7:';'               	;2
	10  21   SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
	11  21   DO_FCALL/60               ?5        ?0                   ?0                  	;0
	12  23   FETCH_CONSTANT/99         #18=      ?0                   8:'LOGS_TMP_PATH'   	;16
	13  23   CONCAT/8                  #19=      #18                  11:'error_log.log'  	;0
	14  23   ASSIGN/38                 ?8        16?2                 #19                 	;0
	15  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'file_exists'    	;1
	16  24   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	17  24   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
	18  24   BOOL_NOT/13               #22=      $21                  ?0                  	;0
	19  24   JMPZ/43                   ?0        #22                  ?21                 	;0	>>21
	20  25   GOTO/253                  ?0        ?182                 ?14                 	;0
	21  27   GOTO/253                  ?0        ?165                 ?15                 	;0	<<19
	22  29   BIND_GLOBAL/168           ?0        16?3                 16:'a6610c33a10808f3'	;0	<<0
	23  29   BIND_GLOBAL/168           ?0        16?1                 17:'b62d6460eb33ea07'	;0
	24  30   ASSIGN/38                 ?11       16?0                 18:''               	;0
	25  31   FETCH_CONSTANT/99         #24=      ?0                   19:'STREAMS_PATH'   	;16
	26  31   INIT_ARRAY/71             #25=      #24                  ?0                  	;4
	27  31   FE_RESET_R/77             $26=      #25                  ?154                	;0
	28  31   FE_FETCH_R/78             ?0        $26                  16?4                	;154	>>154	<<153
	29  32   NOP/0                     ?0        ?0                   ?0                  	;1
	30  32   GOTO/253                  ?0        ?106                 ?22                 	;0
	31  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'explode'        	;2
	32  34   SEND_VAL_EX/116           ?80       25:'.'               ?1                  	;0
	33  34   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	34  34   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
	35  34   FETCH_LIST/98             $28=      $27                  26:0                	;0
	36  34   ASSIGN/38                 ?17       16?6                 $28                 	;0
	37  34   FETCH_LIST/98             $30=      $27                  27:1                	;0
	38  34   ASSIGN/38                 ?19       16?7                 $30                 	;0
	39  34   FREE/70                   ?0        $27                  ?0                  	;0
	40  35   IS_EQUAL/17               #32=      16?7                 28:'errors'         	;0
	41  35   BOOL_NOT/13               #33=      #32                  ?0                  	;0
	42  35   JMPZ/43                   ?0        #33                  ?45                 	;0	>>45
	43  36   NOP/0                     ?0        ?0                   ?0                  	;1
	44  36   GOTO/253                  ?0        ?144                 ?29                 	;0
	45  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'array_values'   	;1	<<42
	46  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'array_unique'   	;1
	47  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'array_map'      	;2
	48  38   SEND_VAL_EX/116           ?80       36:'trim'            ?1                  	;0
	49  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'explode'        	;2
	50  38   SEND_VAL_EX/116           ?80       39:'
'               ?1                  	;0
	51  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'file_get_contents'	;1
	52  38   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	53  38   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	54  38   SEND_VAR_NO_REF_EX/50     ?96       $34                  ?2                  	;0
	55  38   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
	56  38   SEND_VAR_NO_REF_EX/50     ?96       $35                  ?2                  	;0
	57  38   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	58  38   SEND_VAR_NO_REF_EX/50     ?80       $36                  ?1                  	;0
	59  38   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
	60  38   SEND_VAR_NO_REF_EX/50     ?80       $37                  ?1                  	;0
	61  38   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	62  38   ASSIGN/38                 ?27       16?8                 $38                 	;0
	63  39   FE_RESET_R/77             $40=      16?8                 ?103                	;0
	64  39   FE_FETCH_R/78             ?0        $40                  16?10               	;103	>>103	<<102
	65  40   ISSET_ISEMPTY_CV/197      #41=      16?10                ?0                  	;16777216
	66  40   JMPNZ_EX/47               #41=      #41                  ?72                 	;0	>>72
	67  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'ae7EFC3bF879bd7C'	;2
	68  40   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	69  40   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	70  40   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	71  40   BOOL/52                   #41=      $42                  ?0                  	;0
	72  40   BOOL_NOT/13               #43=      #41                  ?0                  	;0	<<66
	73  40   JMPZ/43                   ?0        #43                  ?77                 	;0	>>77
	74  41   NOP/0                     ?0        ?0                   ?0                  	;1
	75  41   NOP/0                     ?0        ?0                   ?0                  	;1
	76  41   GOTO/253                  ?0        ?80                  ?44                 	;0
	77  43   NOP/0                     ?0        ?0                   ?0                  	;1	<<73
	78  43   NOP/0                     ?0        ?0                   ?0                  	;1
	79  43   GOTO/253                  ?0        ?102                 ?45                 	;0
	80  45   FETCH_STATIC_PROP_R/173   $44=      46:'rSettings'       47:'XUI'            	;0
	81  45   FETCH_DIM_R/81            $45=      $44                  49:'stream_logs_save'	;0
	82  45   BOOL_NOT/13               #46=      $45                  ?0                  	;0
	83  45   JMPZ/43                   ?0        #46                  ?87                 	;0	>>87
	84  46   NOP/0                     ?0        ?0                   ?0                  	;1
	85  46   NOP/0                     ?0        ?0                   ?0                  	;1
	86  46   GOTO/253                  ?0        ?102                 ?50                 	;0
	87  48   CONCAT/8                  #47=      51:'('               16?6                	;0	<<83
	88  48   CONCAT/8                  #48=      #47                  52:','              	;0
	89  48   FETCH_CONSTANT/99         #49=      ?0                   53:'SERVER_ID'      	;16
	90  48   CONCAT/8                  #50=      #48                  #49                 	;0
	91  48   CONCAT/8                  #51=      #50                  56:','              	;0
	92  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'time'           	;0
	93  48   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	94  48   CONCAT/8                  #53=      #51                  $52                 	;0
	95  48   CONCAT/8                  #54=      #53                  59:','              	;0
	96  48   INIT_METHOD_CALL/112      ?0        16?1                 60:'escape'         	;1
	97  48   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	98  48   DO_FCALL/60               $55=      ?0                   ?0                  	;0
	99  48   CONCAT/8                  #56=      #54                  $55                 	;0
	100 48   CONCAT/8                  #57=      #56                  62:'),'             	;0
	101 48   ASSIGN_CONCAT/30          ?46       16?0                 #57                 	;0
	102 50   JMP/42                    ?0        ?64                  ?0                  	;0	>>64
	103 50   FE_FREE/127               ?0        $40                  ?0                  	;0	<<63
	104 53   NOP/0                     ?0        ?0                   ?0                  	;1
	105 53   GOTO/253                  ?0        ?141                 ?63                 	;0
	106 55   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'opendir'        	;1
	107 55   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	108 55   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	109 55   ASSIGN/38                 $60=      16?11                $59                 	;0
	110 55   BOOL_NOT/13               #61=      $60                  ?0                  	;0
	111 55   JMPZ/43                   ?0        #61                  ?114                	;0	>>114
	112 56   NOP/0                     ?0        ?0                   ?0                  	;1
	113 56   GOTO/253                  ?0        ?151                 ?66                 	;0
	114 59   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'readdir'        	;1	<<111
	115 59   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	116 59   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
	117 59   ASSIGN/38                 $63=      16?5                 $62                 	;0
	118 59   IS_NOT_IDENTICAL/16       #64=      69:false             $63                 	;0
	119 59   BOOL_NOT/13               #65=      #64                  ?0                  	;0
	120 59   JMPZ/43                   ?0        #65                  ?123                	;0	>>123
	121 60   NOP/0                     ?0        ?0                   ?0                  	;1
	122 60   GOTO/253                  ?0        ?146                 ?70                 	;0
	123 62   IS_NOT_EQUAL/18           #66=      16?5                 71:'.'              	;0	<<120
	124 62   JMPZ_EX/46                #66=      #66                  ?127                	;0	>>127
	125 62   IS_NOT_EQUAL/18           #67=      16?5                 72:'..'             	;0
	126 62   BOOL/52                   #66=      #67                  ?0                  	;0
	127 62   JMPZ_EX/46                #66=      #66                  ?133                	;0	>>133	<<124
	128 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'is_file'        	;1
	129 62   CONCAT/8                  #68=      16?4                 16?5                	;0
	130 62   SEND_VAL_EX/116           ?80       #68                  ?1                  	;0
	131 62   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
	132 62   BOOL/52                   #66=      $69                  ?0                  	;0
	133 62   BOOL_NOT/13               #70=      #66                  ?0                  	;0	<<127
	134 62   JMPZ/43                   ?0        #70                  ?137                	;0	>>137
	135 63   NOP/0                     ?0        ?0                   ?0                  	;1
	136 63   GOTO/253                  ?0        ?144                 ?75                 	;0
	137 65   CONCAT/8                  #71=      16?4                 16?5                	;0	<<134
	138 65   ASSIGN/38                 ?60       16?9                 #71                 	;0
	139 66   NOP/0                     ?0        ?0                   ?0                  	;1
	140 66   GOTO/253                  ?0        ?31                  ?76                 	;0
	141 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'unlink'         	;1
	142 68   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	143 68   DO_FCALL_BY_NAME/131      ?61       ?0                   ?0                  	;0
	144 71   NOP/0                     ?0        ?0                   ?0                  	;1
	145 71   GOTO/253                  ?0        ?114                 ?79                 	;0
	146 73   NOP/0                     ?0        ?0                   ?0                  	;1
	147 73   GOTO/253                  ?0        ?148                 ?80                 	;0
	148 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'closedir'       	;1
	149 75   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	150 75   DO_FCALL_BY_NAME/131      ?62       ?0                   ?0                  	;0
	151 78   NOP/0                     ?0        ?0                   ?0                  	;1
	152 78   GOTO/253                  ?0        ?153                 ?83                 	;0
	153 79   JMP/42                    ?0        ?28                  ?0                  	;0	>>28
	154 79   FE_FREE/127               ?0        $26                  ?0                  	;0	<<27
	155 82   FETCH_STATIC_PROP_R/173   $75=      84:'rSettings'       85:'XUI'            	;0
	156 82   FETCH_DIM_R/81            $76=      $75                  87:'stream_logs_save'	;0
	157 82   JMPZ_EX/46                #77=      $76                  ?161                	;0	>>161
	158 82   ISSET_ISEMPTY_CV/197      #78=      16?0                 ?0                  	;16777216
	159 82   BOOL_NOT/13               #79=      #78                  ?0                  	;0
	160 82   BOOL/52                   #77=      #79                  ?0                  	;0
	161 82   BOOL_NOT/13               #80=      #77                  ?0                  	;0	<<157
	162 82   JMPZ/43                   ?0        #80                  ?164                	;0	>>164
	163 83   GOTO/253                  ?0        ?12                  ?88                 	;0
	164 85   GOTO/253                  ?0        ?1                   ?89                 	;0	<<162
	165 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'rtrim'          	;2
	166 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'B7E8e5D6F40567F4'	;1
	167 87   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	168 87   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
	169 87   SEND_VAR_NO_REF_EX/50     ?80       $81                  ?1                  	;0
	170 87   SEND_VAL_EX/116           ?96       94:','               ?2                  	;0
	171 87   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
	172 87   ASSIGN/38                 ?71       16?0                 $82                 	;0
	173 88   INIT_METHOD_CALL/112      ?0        16?1                 95:'query'          	;1
	174 88   ROPE_INIT/54              #85=      ?0                   97:'INSERT IGNORE INTO `panel_logs` (`server_id`,`type`,`log_message`,`log_extra`,`line`,`date`,`unique`) VALUES '	;3
	175 88   ROPE_ADD/55               #85=      #85                  16?0                	;1
	176 88   ROPE_END/56               #84=      #85                  98:';'              	;2
	177 88   SEND_VAL_EX/116           ?80       #84                  ?1                  	;0
	178 88   DO_FCALL/60               ?75       ?0                   ?0                  	;0
	179 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'unlink'         	;1
	180 89   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	181 89   DO_FCALL_BY_NAME/131      ?76       ?0                   ?0                  	;0
	182 91   GOTO/253                  ?0        ?183                 ?101                	;0
	183 93   NOP/0                     ?0        102:NULL             ?0                  	;4294967295
	*/
}

function B7E8e5D6f40567f4($Ee6546c7961a39a7)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   109  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   111  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
	2   113  RETURN/62                 ?0        16?1                 ?0                  	;0
	3   114  GOTO/253                  ?0        ?126                 ?1                  	;0
	4   116  BIND_GLOBAL/168           ?0        16?2                 2:'b62d6460eb33ea07'	;0	<<1
	5   117  ASSIGN/38                 ?0        16?3                 3:array (
)         	;0
	6   118  ASSIGN/38                 ?1        16?1                 4:''                	;0
	7   119  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'file_exists'     	;1
	8   119  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	9   119  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	10  119  BOOL_NOT/13               #10=      $9                   ?0                  	;0
	11  119  JMPZ/43                   ?0        #10                  ?13                 	;0	>>13
	12  120  GOTO/253                  ?0        ?107                 ?7                  	;0
	13  122  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'fopen'           	;2	<<11
	14  122  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	15  122  SEND_VAL_EX/116           ?96       10:'r'               ?2                  	;0
	16  122  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	17  122  ASSIGN/38                 ?5        16?4                 $11                 	;0
	18  123  GOTO/253                  ?0        ?108                 ?11                 	;0
	19  125  GOTO/253                  ?0        ?108                 ?12                 	;0
	20  127  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'array_map'      	;2
	21  127  INIT_ARRAY/71             #13=      16?2                 ?0                  	;8
	22  127  ADD_ARRAY_ELEMENT/72      #13=      15:'escape'          ?0                  	;0
	23  127  SEND_VAL_EX/116           ?80       #13                  ?1                  	;0
	24  127  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	25  127  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	26  127  ASSIGN/38                 ?8        16?5                 $14                 	;0
	27  128  FETCH_CONSTANT/99         #16=      ?0                   16:'SERVER_ID'      	;16
	28  128  CONCAT/8                  #17=      19:'('               #16                 	;0
	29  128  FETCH_DIM_R/81            $18=      16?5                 20:'type'           	;0
	30  128  ROPE_INIT/54              #24=      ?0                   21:','              	;13
	31  128  ROPE_ADD/55               #24=      #24                  $18                 	;1
	32  128  FETCH_DIM_R/81            $19=      16?5                 22:'message'        	;0
	33  128  ROPE_ADD/55               #24=      #24                  23:','              	;2
	34  128  ROPE_ADD/55               #24=      #24                  $19                 	;3
	35  128  FETCH_DIM_R/81            $20=      16?5                 24:'extra'          	;0
	36  128  ROPE_ADD/55               #24=      #24                  25:','              	;4
	37  128  ROPE_ADD/55               #24=      #24                  $20                 	;5
	38  128  FETCH_DIM_R/81            $21=      16?5                 26:'line'           	;0
	39  128  ROPE_ADD/55               #24=      #24                  27:','              	;6
	40  128  ROPE_ADD/55               #24=      #24                  $21                 	;7
	41  128  FETCH_DIM_R/81            $22=      16?5                 28:'time'           	;0
	42  128  ROPE_ADD/55               #24=      #24                  29:','              	;8
	43  128  ROPE_ADD/55               #24=      #24                  $22                 	;9
	44  128  ROPE_ADD/55               #24=      #24                  30:',\''            	;10
	45  128  ROPE_ADD/55               #24=      #24                  16?6                	;11
	46  128  ROPE_END/56               #23=      #24                  31:'\'),'           	;12
	47  128  CONCAT/8                  #31=      #17                  #23                 	;0
	48  128  ASSIGN_CONCAT/30          ?25       16?1                 #31                 	;0
	49  129  ASSIGN_DIM/147            ?26       16?3                 ?4397406            	;0
	50  129  OP_DATA/137               ?0        16?6                 ?0                  	;0
	51  130  GOTO/253                  ?0        ?103                 ?32                 	;0
	52  133  INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'json_decode'    	;2
	53  133  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'base64_decode'  	;1
	54  133  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	55  133  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	56  133  SEND_VAR_NO_REF_EX/50     ?80       $34                  ?1                  	;0
	57  133  SEND_VAL_EX/116           ?96       37:true              ?2                  	;0
	58  133  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
	59  133  ASSIGN/38                 ?29       16?5                 $35                 	;0
	60  134  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'md5'            	;1
	61  134  FETCH_DIM_R/81            $37=      16?5                 40:'type'           	;0
	62  134  FETCH_DIM_R/81            $38=      16?5                 41:'message'        	;0
	63  134  CONCAT/8                  #39=      $37                  $38                 	;0
	64  134  FETCH_DIM_R/81            $40=      16?5                 42:'extra'          	;0
	65  134  CONCAT/8                  #41=      #39                  $40                 	;0
	66  134  FETCH_DIM_R/81            $42=      16?5                 43:'line'           	;0
	67  134  CONCAT/8                  #43=      #41                  $42                 	;0
	68  134  SEND_VAL_EX/116           ?80       #43                  ?1                  	;0
	69  134  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
	70  134  ASSIGN/38                 ?38       16?6                 $44                 	;0
	71  135  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'in_array'       	;2
	72  135  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	73  135  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	74  135  DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
	75  135  JMPZ/43                   ?0        $46                  ?77                 	;0	>>77
	76  136  GOTO/253                  ?0        ?103                 ?46                 	;0
	77  138  INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'stripos'        	;2	<<75
	78  138  FETCH_DIM_FUNC_ARG/93     $47=      16?5                 49:'message'        	;1
	79  138  SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
	80  138  SEND_VAL_EX/116           ?96       50:'server has gone away' ?2                  	;0
	81  138  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
	82  138  IS_NOT_IDENTICAL/16       #49=      $48                  51:false            	;0
	83  138  JMPZ_EX/46                #49=      #49                  ?91                 	;0	>>91
	84  138  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'stripos'        	;2
	85  138  FETCH_DIM_FUNC_ARG/93     $50=      16?5                 54:'message'        	;1
	86  138  SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
	87  138  SEND_VAL_EX/116           ?96       55:'socket error on read socket' ?2                  	;0
	88  138  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
	89  138  IS_NOT_IDENTICAL/16       #52=      $51                  56:false            	;0
	90  138  BOOL/52                   #49=      #52                  ?0                  	;0
	91  138  JMPZ_EX/46                #49=      #49                  ?99                 	;0	>>99	<<83
	92  138  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'stripos'        	;2
	93  138  FETCH_DIM_FUNC_ARG/93     $53=      16?5                 59:'message'        	;1
	94  138  SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
	95  138  SEND_VAL_EX/116           ?96       60:'connection lost' ?2                  	;0
	96  138  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
	97  138  IS_NOT_IDENTICAL/16       #55=      $54                  61:false            	;0
	98  138  BOOL/52                   #49=      #55                  ?0                  	;0
	99  138  BOOL_NOT/13               #56=      #49                  ?0                  	;0	<<91
	100 138  JMPZ/43                   ?0        #56                  ?102                	;0	>>102
	101 139  GOTO/253                  ?0        ?20                  ?62                 	;0
	102 141  GOTO/253                  ?0        ?19                  ?63                 	;0	<<100
	103 144  GOTO/253                  ?0        ?108                 ?64                 	;0
	104 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'fclose'         	;1
	105 146  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	106 146  DO_FCALL_BY_NAME/131      ?50       ?0                   ?0                  	;0
	107 148  GOTO/253                  ?0        ?2                   ?67                 	;0
	108 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'feof'           	;1
	109 151  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	110 151  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
	111 151  JMPZ/43                   ?0        $58                  ?113                	;0	>>113
	112 152  GOTO/253                  ?0        ?104                 ?70                 	;0
	113 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'trim'           	;1	<<111
	114 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'fgets'          	;1
	115 154  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	116 154  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	117 154  SEND_VAR_NO_REF_EX/50     ?80       $59                  ?1                  	;0
	118 154  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
	119 154  ASSIGN/38                 ?54       16?5                 $60                 	;0
	120 155  ISSET_ISEMPTY_CV/197      #62=      16?5                 ?0                  	;16777216
	121 155  BOOL_NOT/13               #63=      #62                  ?0                  	;0
	122 155  JMPZ/43                   ?0        #63                  ?124                	;0	>>124
	123 156  GOTO/253                  ?0        ?52                  ?75                 	;0
	124 158  GOTO/253                  ?0        ?104                 ?76                 	;0	<<122
	125 159  GOTO/253                  ?0        ?52                  ?77                 	;0
	126 161  NOP/0                     ?0        78:NULL              ?0                  	;4294967295
	*/
}

function AE7efc3BF879bd7c($Fd94beb5ab19eb72, $D44370d9bef85284)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   163  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   163  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   165  FE_RESET_R/77             $3=       16?0                 ?15                 	;0
	3   165  FE_FETCH_R/78             ?0        $3                   16?2                	;15	>>15	<<14
	4   166  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stristr'         	;2
	5   166  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	6   166  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	7   166  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	8   166  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	9   166  JMPZ/43                   ?0        #5                   ?12                 	;0	>>12
	10  167  NOP/0                     ?0        ?0                   ?0                  	;1
	11  167  GOTO/253                  ?0        ?14                  ?2                  	;0
	12  169  FE_FREE/127               ?0        $3                   ?0                  	;1	<<9
	13  169  RETURN/62                 ?0        3:true               ?0                  	;0
	14  171  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
	15  171  FE_FREE/127               ?0        $3                   ?0                  	;0	<<2
	16  174  RETURN/62                 ?0        4:false              ?0                  	;0
	17  175  NOP/0                     ?0        5:NULL               ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   180  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   180  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   181  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   181  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   181  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   181  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   181  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   182  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   184  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   184  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  186  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  186  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  186  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  186  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  186  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  187  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?37                  ?0                  	;0	>>37
1   5    EXIT/79                   ?0        1:0                  ?0                  	;0
2   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'register_shutdown_function'	;1
3   7    SEND_VAL_EX/116           ?80       4:'shutdown'         ?1                  	;0
4   7    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'str_replace'     	;3
6   8    SEND_VAL_EX/116           ?80       7:'\\'               ?1                  	;0
7   8    SEND_VAL_EX/116           ?96       8:'/'                ?2                  	;0
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'dirname'         	;1
9   8    FETCH_DIM_FUNC_ARG/93     $4=       16?0                 11:0                	;1
10  8    SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
11  8    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
12  8    SEND_VAR_NO_REF_EX/50     ?112      $5                   ?3                  	;0
13  8    DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
14  8    CONCAT/8                  #7=       $6                   12:'/../www/init.php'	;0
15  8    INCLUDE_OR_EVAL/73        ?5        #7                   ?0                  	;8
16  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'cli_set_process_title'	;1
17  9    SEND_VAL_EX/116           ?80       15:'XUI[Errors]'     ?1                  	;0
18  9    DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
19  10   GOTO/253                  ?0        ?20                  ?16                 	;0
20  12   FETCH_CONSTANT/99         #10=      ?0                   17:'CRONS_TMP_PATH' 	;16
21  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'md5'            	;1
22  12   INIT_STATIC_METHOD_CALL/113 ?0        22:'XUI'             24:'a336b0dAD3EAf634'	;0
23  12   DO_FCALL/60               $11=      ?0                   ?0                  	;0
24  12   CONCAT/8                  #12=      $11                  26:'crons\\errors.php'	;0
25  12   SEND_VAL_EX/116           ?80       #12                  ?1                  	;0
26  12   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
27  12   CONCAT/8                  #14=      #10                  $13                 	;0
28  12   ASSIGN/38                 ?12       16?1                 #14                 	;0
29  13   INIT_STATIC_METHOD_CALL/113 ?0        27:'XUI'             29:'A3Cf732C257Bd804'	;1
30  13   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
31  13   DO_FCALL/60               ?13       ?0                   ?0                  	;0
32  14   ASSIGN/38                 ?14       16?2                 31:array (
  0 => 'the user-agent option is deprecated',
  1 => 'last message repeated',
  2 => 'deprecated',
  3 => 'packets poorly interleaved',
  4 => 'invalid timestamps',
  5 => 'timescale not set',
  6 => 'frame size not set',
  7 => 'non-monotonous dts in output stream',
  8 => 'invalid dts',
  9 => 'no trailing crlf',
  10 => 'failed to parse extradata',
  11 => 'truncated',
  12 => 'missing picture',
  13 => 'non-existing pps',
  14 => 'clipping',
  15 => 'out of range',
  16 => 'cannot use rename on non file protocol',
  17 => 'end of file',
  18 => 'stream ends prematurely',
)	;0
33  16   NOP/0                     ?0        ?0                   ?0                  	;0
34  94   INIT_FCALL/61             ?0        ?1504                32:'ab8369074df2aaa3'	;0
35  94   DO_FCALL/60               ?15       ?0                   ?0                  	;0
36  95   GOTO/253                  ?0        ?57                  ?33                 	;0
37  97   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'posix_getpwuid' 	;1	<<0
38  97   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'posix_geteuid'  	;0
39  97   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
40  97   SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
41  97   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
42  97   FETCH_DIM_R/81            $21=      $20                  38:'name'           	;0
43  97   IS_NOT_EQUAL/18           #22=      $21                  39:'xui'            	;0
44  97   BOOL_NOT/13               #23=      #22                  ?0                  	;0
45  97   JMPZ/43                   ?0        #23                  ?47                 	;0	>>47
46  98   GOTO/253                  ?0        ?48                  ?40                 	;0
47  100  EXIT/79                   ?0        41:'Please run as XUI!
' ?0                  	;0	<<45
48  102  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'set_time_limit' 	;1
49  102  SEND_VAL_EX/116           ?80       44:0                 ?1                  	;0
50  102  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
51  103  BEGIN_SILENCE/57          #25=      ?0                   ?0                  	;0
52  103  FETCH_R/80                $26=      45:'argc'            ?0                  	;268435456
53  103  END_SILENCE/58            ?0        #25                  ?0                  	;0
54  103  JMPZ/43                   ?0        $26                  ?56                 	;0	>>56
55  104  GOTO/253                  ?0        ?2                   ?46                 	;0
56  106  GOTO/253                  ?0        ?1                   ?47                 	;0	<<54
57  109  NOP/0                     ?0        ?0                   ?0                  	;0
58  163  NOP/0                     ?0        ?0                   ?0                  	;0
59  176  GOTO/253                  ?0        ?60                  ?48                 	;0
60  178  NOP/0                     ?0        ?0                   ?0                  	;0
61  188  NOP/0                     ?0        49:1                 ?0                  	;4294967295
*/

?>