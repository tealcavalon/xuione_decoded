<?php


function pingServer($b38e11ffdc6a3abb, $e5bebfb39a19fe80)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  7   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  7   RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2  9   JMP/42                    ?0        ?14                  ?0                  	;0	>>14
	3  11  RETURN/62                 ?0        16?2                 ?0                  	;0
	4  12  GOTO/253                  ?0        ?37                  ?1                  	;0
	5  14  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'floor'           	;1
	6  14  SUB/2                     #8=       16?3                 16?4                	;0
	7  14  MUL/3                     #9=       #8                   4:1000              	;0
	8  14  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
	9  14  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	10 14  ASSIGN/38                 ?3        16?2                 $10                 	;0
	11 15  GOTO/253                  ?0        ?13                  ?5                  	;0
	12 17  ASSIGN/38                 ?4        16?2                 6:-1                	;0
	13 19  GOTO/253                  ?0        ?3                   ?7                  	;0
	14 21  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'microtime'       	;1	<<2
	15 21  SEND_VAL_EX/116           ?80       10:true              ?1                  	;0
	16 21  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	17 21  ASSIGN/38                 ?6        16?4                 $13                 	;0
	18 22  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'fsockopen'      	;5
	19 22  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	20 22  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	21 22  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
	22 22  SEND_VAR_EX/66            ?128      16?7                 ?4                  	;0
	23 22  SEND_VAL_EX/116           ?144      13:3                 ?5                  	;0
	24 22  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	25 22  ASSIGN/38                 ?8        16?5                 $15                 	;0
	26 23  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'microtime'      	;1
	27 23  SEND_VAL_EX/116           ?80       16:true              ?1                  	;0
	28 23  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	29 23  ASSIGN/38                 ?10       16?3                 $17                 	;0
	30 24  BOOL_NOT/13               #19=      16?5                 ?0                  	;0
	31 24  JMPZ/43                   ?0        #19                  ?33                 	;0	>>33
	32 25  GOTO/253                  ?0        ?12                  ?17                 	;0
	33 27  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'fclose'         	;1	<<31
	34 27  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	35 27  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
	36 28  GOTO/253                  ?0        ?5                   ?20                 	;0
	37 30  NOP/0                     ?0        21:NULL              ?0                  	;4294967295
	*/
}

function AB8369074Df2AaA3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   34   JMP/42                    ?0        ?530                 ?0                  	;0	>>530
	1   37   INIT_STATIC_METHOD_CALL/113 ?0        1:'XUI'              3:'f76008F8dfe1898C'	;1
	2   37   SEND_VAL_EX/116           ?80       5:true               ?1                  	;0
	3   37   DO_FCALL/60               $30=      ?0                   ?0                  	;0
	4   37   ASSIGN/38                 ?1        16?0                 $30                 	;0
	5   38   FETCH_CONSTANT/99         #32=      ?0                   6:'SERVER_ID'       	;16
	6   38   FETCH_DIM_R/81            $33=      16?0                 #32                 	;0
	7   38   FETCH_DIM_R/81            $34=      $33                  9:'is_main'         	;0
	8   38   JMPZ_EX/46                #35=      $34                  ?12                 	;0	>>12
	9   38   FETCH_STATIC_PROP_R/173   $36=      10:'rSettings'       11:'XUI'            	;0
	10  38   FETCH_DIM_R/81            $37=      $36                  13:'redis_handler'  	;0
	11  38   BOOL/52                   #35=      $37                  ?0                  	;0
	12  38   BOOL_NOT/13               #38=      #35                  ?0                  	;0	<<8
	13  38   JMPZ/43                   ?0        #38                  ?15                 	;0	>>15
	14  39   GOTO/253                  ?0        ?259                 ?14                 	;0
	15  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'exec'           	;2	<<13
	16  41   SEND_VAL_EX/116           ?80       17:'pgrep -u xui redis-server' ?1                  	;0
	17  41   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	18  41   DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	19  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'count'          	;1
	20  42   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	21  42   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	22  42   IS_EQUAL/17               #41=      $40                  20:0                	;0
	23  42   BOOL_NOT/13               #42=      #41                  ?0                  	;0
	24  42   JMPZ/43                   ?0        #42                  ?26                 	;0	>>26
	25  43   GOTO/253                  ?0        ?259                 ?21                 	;0
	26  45   GOTO/253                  ?0        ?250                 ?22                 	;0	<<24
	27  47   ASSIGN/38                 ?13       16?2                 23:NULL             	;0
	28  48   FE_RESET_R/77             $44=      16?0                 ?40                 	;0
	29  48   FE_FETCH_R/78             #45=      $44                  16?3                	;40	>>40	<<39
	30  48   ASSIGN/38                 ?16       16?4                 #45                 	;0
	31  49   FETCH_DIM_R/81            $47=      16?3                 24:'is_main'        	;0
	32  49   BOOL_NOT/13               #48=      $47                  ?0                  	;0
	33  49   JMPZ/43                   ?0        #48                  ?36                 	;0	>>36
	34  50   NOP/0                     ?0        ?0                   ?0                  	;1
	35  50   GOTO/253                  ?0        ?39                  ?25                 	;0
	36  52   ASSIGN/38                 ?19       16?2                 16?4                	;0	<<33
	37  53   FE_FREE/127               ?0        $44                  ?0                  	;1
	38  53   GOTO/253                  ?0        ?41                  ?26                 	;0
	39  55   JMP/42                    ?0        ?29                  ?0                  	;0	>>29
	40  55   FE_FREE/127               ?0        $44                  ?0                  	;0	<<28
	41  58   BOOL_NOT/13               #50=      16?2                 ?0                  	;0
	42  58   JMPZ/43                   ?0        #50                  ?44                 	;0	>>44
	43  59   GOTO/253                  ?0        ?606                 ?27                 	;0
	44  61   INIT_FCALL/61             ?0        ?416                 28:'pingserver'     	;2	<<42
	45  61   FETCH_DIM_R/81            $51=      16?0                 16?2                	;0
	46  61   FETCH_DIM_R/81            $52=      $51                  29:'server_ip'      	;0
	47  61   SEND_VAR/117              ?80       $52                  ?1                  	;0
	48  61   FETCH_DIM_R/81            $53=      16?0                 16?2                	;0
	49  61   FETCH_DIM_R/81            $54=      $53                  30:'http_broadcast_port'	;0
	50  61   SEND_VAR/117              ?96       $54                  ?2                  	;0
	51  61   DO_FCALL/60               $55=      ?0                   ?0                  	;0
	52  61   ASSIGN/38                 ?26       16?5                 $55                 	;0
	53  62   GOTO/253                  ?0        ?606                 ?31                 	;0
	54  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'intval'         	;1
	55  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'trim'           	;1
	56  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'shell_exec'     	;1
	57  64   SEND_VAL_EX/116           ?80       38:'pgrep -U xui | xargs ps -f -p | grep queue | grep -v grep | grep -v pgrep | wc -l' ?1                  	;0
	58  64   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
	59  64   SEND_VAR_NO_REF_EX/50     ?80       $57                  ?1                  	;0
	60  64   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
	61  64   SEND_VAR_NO_REF_EX/50     ?80       $58                  ?1                  	;0
	62  64   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	63  64   ASSIGN/38                 ?30       16?6                 $59                 	;0
	64  65   IS_EQUAL/17               #61=      16?6                 39:0                	;0
	65  65   BOOL_NOT/13               #62=      #61                  ?0                  	;0
	66  65   JMPZ/43                   ?0        #62                  ?68                 	;0	>>68
	67  66   GOTO/253                  ?0        ?76                  ?40                 	;0
	68  68   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'shell_exec'     	;1	<<66
	69  68   FETCH_CONSTANT/99         #63=      ?0                   43:'PHP_BIN'        	;16
	70  68   CONCAT/8                  #64=      #63                  46:' '              	;0
	71  68   FETCH_CONSTANT/99         #65=      ?0                   47:'CLI_PATH'       	;16
	72  68   CONCAT/8                  #66=      #64                  #65                 	;0
	73  68   CONCAT/8                  #67=      #66                  50:'queue.php > /dev/null 2>/dev/null &'	;0
	74  68   SEND_VAL_EX/116           ?80       #67                  ?1                  	;0
	75  68   DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
	76  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'intval'         	;1
	77  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'trim'           	;1
	78  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'shell_exec'     	;1
	79  70   SEND_VAL_EX/116           ?80       57:'pgrep -U xui | xargs ps -f -p | grep ondemand | grep -v grep | grep -v pgrep | wc -l' ?1                  	;0
	80  70   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
	81  70   SEND_VAR_NO_REF_EX/50     ?80       $69                  ?1                  	;0
	82  70   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
	83  70   SEND_VAR_NO_REF_EX/50     ?80       $70                  ?1                  	;0
	84  70   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
	85  70   ASSIGN/38                 ?42       16?7                 $71                 	;0
	86  71   GOTO/253                  ?0        ?322                 ?58                 	;0
	87  74   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'shell_exec'     	;1
	88  74   FETCH_CONSTANT/99         #73=      ?0                   61:'PHP_BIN'        	;16
	89  74   CONCAT/8                  #74=      #73                  64:' '              	;0
	90  74   FETCH_CONSTANT/99         #75=      ?0                   65:'CLI_PATH'       	;16
	91  74   CONCAT/8                  #76=      #74                  #75                 	;0
	92  74   CONCAT/8                  #77=      #76                  68:'scanner.php > /dev/null 2>/dev/null &'	;0
	93  74   SEND_VAL_EX/116           ?80       #77                  ?1                  	;0
	94  74   DO_FCALL_BY_NAME/131      ?48       ?0                   ?0                  	;0
	95  76   INIT_STATIC_METHOD_CALL/113 ?0        69:'XUI'             71:'afF015C358EB0964'	;0
	96  76   DO_FCALL/60               $79=      ?0                   ?0                  	;0
	97  76   ASSIGN/38                 ?50       16?8                 $79                 	;0
	98  77   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'json_decode'    	;2
	99  77   FETCH_CONSTANT/99         #81=      ?0                   75:'SERVER_ID'      	;16
	100 77   FETCH_DIM_FUNC_ARG/93     $82=      16?0                 #81                 	;1
	101 77   FETCH_DIM_FUNC_ARG/93     $83=      $82                  78:'watchdog_data'  	;1
	102 77   SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
	103 77   SEND_VAL_EX/116           ?96       79:true              ?2                  	;0
	104 77   DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
	105 77   ASSIGN/38                 ?55       16?9                 $84                 	;0
	106 78   GOTO/253                  ?0        ?646                 ?80                 	;0
	107 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'shell_exec'     	;1
	108 80   SEND_VAL_EX/116           ?80       83:'which cpufreq-info' ?1                  	;0
	109 80   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
	110 80   BOOL_NOT/13               #87=      $86                  ?0                  	;0
	111 80   JMPZ/43                   ?0        #87                  ?113                	;0	>>113
	112 81   GOTO/253                  ?0        ?138                 ?84                 	;0
	113 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'array_filter'   	;1	<<111
	114 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'explode'        	;2
	115 83   SEND_VAL_EX/116           ?80       89:' '               ?1                  	;0
	116 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'trim'           	;1
	117 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'shell_exec'     	;1
	118 83   SEND_VAL_EX/116           ?80       94:'cpufreq-info -g' ?1                  	;0
	119 83   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
	120 83   SEND_VAR_NO_REF_EX/50     ?80       $88                  ?1                  	;0
	121 83   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
	122 83   SEND_VAR_NO_REF_EX/50     ?96       $89                  ?2                  	;0
	123 83   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	124 83   SEND_VAR_NO_REF_EX/50     ?80       $90                  ?1                  	;0
	125 83   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
	126 83   ASSIGN/38                 ?62       16?10                $91                 	;0
	127 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'explode'        	;2
	128 84   SEND_VAL_EX/116           ?80       97:' '               ?1                  	;0
	129 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'trim'           	;1
	130 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'shell_exec'    	;1
	131 84   SEND_VAL_EX/116           ?80       102:'cpufreq-info -p' ?1                  	;0
	132 84   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	133 84   SEND_VAR_NO_REF_EX/50     ?80       $93                  ?1                  	;0
	134 84   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	135 84   SEND_VAR_NO_REF_EX/50     ?96       $94                  ?2                  	;0
	136 84   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
	137 84   ASSIGN/38                 ?66       16?11                $95                 	;0
	138 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'array_values'  	;1
	139 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'array_unique'  	;1
	140 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'array_map'     	;2
	141 86   SEND_VAL_EX/116           ?80       109:'trim'           ?1                  	;0
	142 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'explode'       	;2
	143 86   SEND_VAL_EX/116           ?80       112:'
'              ?1                  	;0
	144 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'shell_exec'    	;1
	145 86   SEND_VAL_EX/116           ?80       115:'ip -4 addr | grep -oP \'(?<=inet\\s)\\d+(\\.\\d+){3}\'' ?1                  	;0
	146 86   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
	147 86   SEND_VAR_NO_REF_EX/50     ?96       $97                  ?2                  	;0
	148 86   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
	149 86   SEND_VAR_NO_REF_EX/50     ?96       $98                  ?2                  	;0
	150 86   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	151 86   SEND_VAR_NO_REF_EX/50     ?80       $99                  ?1                  	;0
	152 86   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	153 86   SEND_VAR_NO_REF_EX/50     ?80       $100                 ?1                  	;0
	154 86   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
	155 86   ASSIGN/38                 ?72       16?12                $101                	;0
	156 87   GOTO/253                  ?0        ?363                 ?116                	;0
	157 89   FETCH_STATIC_PROP_R/173   $103=     117:'rSettings'      118:'XUI'           	;0
	158 89   FETCH_DIM_R/81            $104=     $103                 120:'enable_cache'  	;0
	159 89   JMPZ_EX/46                #105=     $104                 ?162                	;0	>>162
	160 89   IS_EQUAL/17               #106=     16?13                121:0               	;0
	161 89   BOOL/52                   #105=     #106                 ?0                  	;0
	162 89   JMPZ/43                   ?0        #105                 ?164                	;0	>>164	<<159
	163 90   GOTO/253                  ?0        ?614                 ?122                	;0
	164 92   FETCH_STATIC_PROP_R/173   $107=     123:'rSettings'      124:'XUI'           	;0	<<162
	165 92   FETCH_DIM_R/81            $108=     $107                 126:'enable_cache'  	;0
	166 92   BOOL_NOT/13               #109=     $108                 ?0                  	;0
	167 92   JMPZ_EX/46                #109=     #109                 ?170                	;0	>>170
	168 92   IS_SMALLER/19             #110=     127:0                16?13               	;0
	169 92   BOOL/52                   #109=     #110                 ?0                  	;0
	170 92   BOOL_NOT/13               #111=     #109                 ?0                  	;0	<<167
	171 92   JMPZ/43                   ?0        #111                 ?173                	;0	>>173
	172 93   GOTO/253                  ?0        ?613                 ?128                	;0
	173 95   ECHO/40                   ?0        129:'Killing Cache Handler
' ?0                  	;0	<<171
	174 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'exec'          	;2
	175 96   SEND_VAL_EX/116           ?80       132:'pgrep -U xui | xargs ps | grep cache_handler | awk \'{print $1}\'' ?1                  	;0
	176 96   SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
	177 96   DO_FCALL_BY_NAME/131      ?82       ?0                   ?0                  	;0
	178 97   FE_RESET_R/77             $113=     16?14                ?196                	;0
	179 97   FE_FETCH_R/78             ?0        $113                 16?15               	;196	>>196	<<195
	180 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'intval'        	;1
	181 98   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	182 98   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
	183 98   IS_SMALLER/19             #115=     135:0                $114                	;0
	184 98   BOOL_NOT/13               #116=     #115                 ?0                  	;0
	185 98   JMPZ/43                   ?0        #116                 ?188                	;0	>>188
	186 99   NOP/0                     ?0        ?0                   ?0                  	;1
	187 99   GOTO/253                  ?0        ?195                 ?136                	;0
	188 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'shell_exec'    	;1	<<185
	189 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'intval'        	;1
	190 101  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	191 101  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
	192 101  CONCAT/8                  #118=     141:'kill -9 '       $117                	;0
	193 101  SEND_VAL_EX/116           ?80       #118                 ?1                  	;0
	194 101  DO_FCALL_BY_NAME/131      ?89       ?0                   ?0                  	;0
	195 103  JMP/42                    ?0        ?179                 ?0                  	;0	>>179
	196 103  FE_FREE/127               ?0        $113                 ?0                  	;0	<<178
	197 105  GOTO/253                  ?0        ?613                 ?142                	;0
	198 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'exec'          	;2
	199 107  SEND_VAL_EX/116           ?80       145:'pgrep -U xui | xargs ps | grep scanner | awk \'{print $1}\'' ?1                  	;0
	200 107  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
	201 107  DO_FCALL_BY_NAME/131      ?90       ?0                   ?0                  	;0
	202 108  FE_RESET_R/77             $121=     16?14                ?220                	;0
	203 108  FE_FETCH_R/78             ?0        $121                 16?15               	;220	>>220	<<219
	204 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'intval'        	;1
	205 109  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	206 109  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
	207 109  IS_SMALLER/19             #123=     148:0                $122                	;0
	208 109  BOOL_NOT/13               #124=     #123                 ?0                  	;0
	209 109  JMPZ/43                   ?0        #124                 ?212                	;0	>>212
	210 110  NOP/0                     ?0        ?0                   ?0                  	;1
	211 110  GOTO/253                  ?0        ?219                 ?149                	;0
	212 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'shell_exec'    	;1	<<209
	213 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'intval'        	;1
	214 112  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	215 112  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
	216 112  CONCAT/8                  #126=     154:'kill -9 '       $125                	;0
	217 112  SEND_VAL_EX/116           ?80       #126                 ?1                  	;0
	218 112  DO_FCALL_BY_NAME/131      ?97       ?0                   ?0                  	;0
	219 114  JMP/42                    ?0        ?203                 ?0                  	;0	>>203
	220 114  FE_FREE/127               ?0        $121                 ?0                  	;0	<<202
	221 118  GOTO/253                  ?0        ?95                  ?155                	;0
	222 119  GOTO/253                  ?0        ?87                  ?156                	;0
	223 122  FE_RESET_R/77             $128=     16?0                 ?240                	;0
	224 122  FE_FETCH_R/78             #129=     $128                 16?3                	;240	>>240	<<239
	225 122  ASSIGN/38                 ?100      16?4                 #129                	;0
	226 123  FETCH_DIM_R/81            $131=     16?3                 157:'server_online' 	;0
	227 123  FETCH_DIM_R/81            $132=     16?3                 158:'last_status'   	;0
	228 123  IS_NOT_EQUAL/18           #133=     $131                 $132                	;0
	229 123  BOOL_NOT/13               #134=     #133                 ?0                  	;0
	230 123  JMPZ/43                   ?0        #134                 ?233                	;0	>>233
	231 124  NOP/0                     ?0        ?0                   ?0                  	;1
	232 124  GOTO/253                  ?0        ?239                 ?159                	;0
	233 126  INIT_METHOD_CALL/112      ?0        16?16                160:'query'         	;3	<<230
	234 126  SEND_VAL_EX/116           ?80       162:'UPDATE `servers` SET `last_status` = ? WHERE `id` = ?;' ?1                  	;0
	235 126  FETCH_DIM_FUNC_ARG/93     $135=     16?3                 163:'server_online' 	;2
	236 126  SEND_VAR_EX/66            ?96       $135                 ?2                  	;0
	237 126  SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
	238 126  DO_FCALL/60               ?106      ?0                   ?0                  	;0
	239 128  JMP/42                    ?0        ?224                 ?0                  	;0	>>224
	240 128  FE_FREE/127               ?0        $128                 ?0                  	;0	<<223
	241 131  INIT_METHOD_CALL/112      ?0        16?16                164:'query'         	;2
	242 131  SEND_VAL_EX/116           ?80       166:'DELETE FROM `signals` WHERE `time` <= ?;' ?1                  	;0
	243 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'time'          	;0
	244 131  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
	245 131  SUB/2                     #138=     $137                 169:86400           	;0
	246 131  SEND_VAL_EX/116           ?96       #138                 ?2                  	;0
	247 131  DO_FCALL/60               ?109      ?0                   ?0                  	;0
	248 133  GOTO/253                  ?0        ?249                 ?170                	;0
	249 136  GOTO/253                  ?0        ?758                 ?171                	;0
	250 138  ECHO/40                   ?0        172:'Restarting Redis!
' ?0                  	;0
	251 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'shell_exec'    	;1
	252 139  FETCH_CONSTANT/99         #140=     ?0                   175:'XUI_HOME'      	;16
	253 139  CONCAT/8                  #141=     #140                 178:'bin/redis/redis-server '	;0
	254 139  FETCH_CONSTANT/99         #142=     ?0                   179:'XUI_HOME'      	;16
	255 139  CONCAT/8                  #143=     #141                 #142                	;0
	256 139  CONCAT/8                  #144=     #143                 182:'/bin/redis/redis.conf > /dev/null 2>/dev/null &'	;0
	257 139  SEND_VAL_EX/116           ?80       #144                 ?1                  	;0
	258 139  DO_FCALL_BY_NAME/131      ?115      ?0                   ?0                  	;0
	259 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'intval'        	;1
	260 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'trim'          	;1
	261 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'shell_exec'    	;1
	262 142  SEND_VAL_EX/116           ?80       189:'pgrep -U xui | xargs ps -f -p | grep signals | grep -v grep | grep -v pgrep | wc -l' ?1                  	;0
	263 142  DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
	264 142  SEND_VAR_NO_REF_EX/50     ?80       $146                 ?1                  	;0
	265 142  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
	266 142  SEND_VAR_NO_REF_EX/50     ?80       $147                 ?1                  	;0
	267 142  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
	268 142  ASSIGN/38                 ?119      16?17                $148                	;0
	269 143  GOTO/253                  ?0        ?270                 ?190                	;0
	270 145  IS_EQUAL/17               #150=     16?17                191:0               	;0
	271 145  BOOL_NOT/13               #151=     #150                 ?0                  	;0
	272 145  JMPZ/43                   ?0        #151                 ?274                	;0	>>274
	273 146  GOTO/253                  ?0        ?282                 ?192                	;0
	274 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'shell_exec'    	;1	<<272
	275 148  FETCH_CONSTANT/99         #152=     ?0                   195:'PHP_BIN'       	;16
	276 148  CONCAT/8                  #153=     #152                 198:' '             	;0
	277 148  FETCH_CONSTANT/99         #154=     ?0                   199:'CLI_PATH'      	;16
	278 148  CONCAT/8                  #155=     #153                 #154                	;0
	279 148  CONCAT/8                  #156=     #155                 202:'signals.php > /dev/null 2>/dev/null &'	;0
	280 148  SEND_VAL_EX/116           ?80       #156                 ?1                  	;0
	281 148  DO_FCALL_BY_NAME/131      ?127      ?0                   ?0                  	;0
	282 150  FETCH_CONSTANT/99         #158=     ?0                   203:'SERVER_ID'     	;16
	283 150  FETCH_DIM_R/81            $159=     16?0                 #158                	;0
	284 150  FETCH_DIM_R/81            $160=     $159                 206:'is_main'       	;0
	285 150  BOOL_NOT/13               #161=     $160                 ?0                  	;0
	286 150  JMPZ/43                   ?0        #161                 ?288                	;0	>>288
	287 151  GOTO/253                  ?0        ?694                 ?207                	;0
	288 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'intval'        	;1	<<286
	289 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'trim'          	;1
	290 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'shell_exec'    	;1
	291 153  SEND_VAL_EX/116           ?80       214:'pgrep -U xui | xargs ps -f -p | grep cache_handler | grep -v grep | grep -v pgrep | wc -l' ?1                  	;0
	292 153  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
	293 153  SEND_VAR_NO_REF_EX/50     ?80       $162                 ?1                  	;0
	294 153  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
	295 153  SEND_VAR_NO_REF_EX/50     ?80       $163                 ?1                  	;0
	296 153  DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
	297 153  ASSIGN/38                 ?135      16?13                $164                	;0
	298 154  GOTO/253                  ?0        ?157                 ?215                	;0
	299 157  FETCH_STATIC_PROP_R/173   $166=     216:'rSettings'      217:'XUI'           	;0
	300 157  FETCH_DIM_R/81            $167=     $166                 219:'redis_handler' 	;0
	301 157  JMPZ/43                   ?0        $167                 ?303                	;0	>>303
	302 158  GOTO/253                  ?0        ?559                 ?220                	;0
	303 160  INIT_METHOD_CALL/112      ?0        16?16                221:'query'         	;2	<<301
	304 160  SEND_VAL_EX/116           ?80       223:'SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0;' ?1                  	;0
	305 160  FETCH_CONSTANT/99         #168=     ?0                   224:'SERVER_ID'     	;16
	306 160  SEND_VAL_EX/116           ?96       #168                 ?2                  	;0
	307 160  DO_FCALL/60               ?139      ?0                   ?0                  	;0
	308 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'intval'        	;1
	309 161  INIT_METHOD_CALL/112      ?0        16?16                229:'get_row'       	;0
	310 161  DO_FCALL/60               $170=     ?0                   ?0                  	;0
	311 161  SEPARATE/156              $170=     $170                 ?0                  	;0
	312 161  FETCH_DIM_FUNC_ARG/93     $171=     $170                 231:'count'         	;1
	313 161  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
	314 161  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
	315 161  ASSIGN/38                 ?143      16?18                $172                	;0
	316 162  INIT_METHOD_CALL/112      ?0        16?16                232:'query'         	;2
	317 162  SEND_VAL_EX/116           ?80       234:'SELECT `activity_id` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY `user_id`;' ?1                  	;0
	318 162  FETCH_CONSTANT/99         #174=     ?0                   235:'SERVER_ID'     	;16
	319 162  SEND_VAL_EX/116           ?96       #174                 ?2                  	;0
	320 162  DO_FCALL/60               ?145      ?0                   ?0                  	;0
	321 163  GOTO/253                  ?0        ?543                 ?238                	;0
	322 165  FETCH_STATIC_PROP_R/173   $176=     239:'rSettings'      240:'XUI'           	;0
	323 165  FETCH_DIM_R/81            $177=     $176                 242:'on_demand_instant_off'	;0
	324 165  JMPZ_EX/46                #178=     $177                 ?327                	;0	>>327
	325 165  IS_EQUAL/17               #179=     16?7                 243:0               	;0
	326 165  BOOL/52                   #178=     #179                 ?0                  	;0
	327 165  JMPZ/43                   ?0        #178                 ?329                	;0	>>329	<<324
	328 166  GOTO/253                  ?0        ?749                 ?244                	;0
	329 168  FETCH_STATIC_PROP_R/173   $180=     245:'rSettings'      246:'XUI'           	;0	<<327
	330 168  FETCH_DIM_R/81            $181=     $180                 248:'on_demand_instant_off'	;0
	331 168  BOOL_NOT/13               #182=     $181                 ?0                  	;0
	332 168  JMPZ_EX/46                #182=     #182                 ?335                	;0	>>335
	333 168  IS_SMALLER/19             #183=     249:0                16?7                	;0
	334 168  BOOL/52                   #182=     #183                 ?0                  	;0
	335 168  BOOL_NOT/13               #184=     #182                 ?0                  	;0	<<332
	336 168  JMPZ/43                   ?0        #184                 ?338                	;0	>>338
	337 169  GOTO/253                  ?0        ?748                 ?250                	;0
	338 171  ECHO/40                   ?0        251:'Killing On-Demand Instant-Off
' ?0                  	;0	<<336
	339 172  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'exec'          	;2
	340 172  SEND_VAL_EX/116           ?80       254:'pgrep -U xui | xargs ps | grep ondemand | awk \'{print $1}\'' ?1                  	;0
	341 172  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
	342 172  DO_FCALL_BY_NAME/131      ?155      ?0                   ?0                  	;0
	343 173  FE_RESET_R/77             $186=     16?14                ?361                	;0
	344 173  FE_FETCH_R/78             ?0        $186                 16?15               	;361	>>361	<<360
	345 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   255:'intval'        	;1
	346 174  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	347 174  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
	348 174  IS_SMALLER/19             #188=     257:0                $187                	;0
	349 174  BOOL_NOT/13               #189=     #188                 ?0                  	;0
	350 174  JMPZ/43                   ?0        #189                 ?353                	;0	>>353
	351 175  NOP/0                     ?0        ?0                   ?0                  	;1
	352 175  GOTO/253                  ?0        ?360                 ?258                	;0
	353 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'shell_exec'    	;1	<<350
	354 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'intval'        	;1
	355 177  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	356 177  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
	357 177  CONCAT/8                  #191=     263:'kill -9 '       $190                	;0
	358 177  SEND_VAL_EX/116           ?80       #191                 ?1                  	;0
	359 177  DO_FCALL_BY_NAME/131      ?162      ?0                   ?0                  	;0
	360 179  JMP/42                    ?0        ?344                 ?0                  	;0	>>344
	361 179  FE_FREE/127               ?0        $186                 ?0                  	;0	<<343
	362 181  GOTO/253                  ?0        ?748                 ?264                	;0
	363 183  INIT_METHOD_CALL/112      ?0        16?16                265:'query'         	;23
	364 183  SEND_VAL_EX/116           ?80       267:'INSERT INTO `servers_stats`(`server_id`, `connections`, `total_users`, `users`, `streams`, `cpu`, `cpu_cores`, `cpu_avg`, `total_mem`, `total_mem_free`, `total_mem_used`, `total_mem_used_percent`, `total_disk_space`, `uptime`, `total_running_streams`, `bytes_sent`, `bytes_received`, `bytes_sent_total`, `bytes_received_total`, `cpu_load_average`, `gpu_info`, `iostat_info`, `time`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, UNIX_TIMESTAMP());' ?1                  	;0
	365 183  FETCH_CONSTANT/99         #193=     ?0                   268:'SERVER_ID'     	;16
	366 183  SEND_VAL_EX/116           ?96       #193                 ?2                  	;0
	367 183  SEND_VAR_EX/66            ?112      16?18                ?3                  	;0
	368 183  SEND_VAR_EX/66            ?128      16?19                ?4                  	;0
	369 183  SEND_VAR_EX/66            ?144      16?20                ?5                  	;0
	370 183  SEND_VAR_EX/66            ?160      16?21                ?6                  	;0
	371 183  FETCH_DIM_FUNC_ARG/93     $194=     16?8                 271:'cpu'           	;7
	372 183  SEND_VAR_EX/66            ?176      $194                 ?7                  	;0
	373 183  FETCH_DIM_FUNC_ARG/93     $195=     16?8                 272:'cpu_cores'     	;8
	374 183  SEND_VAR_EX/66            ?192      $195                 ?8                  	;0
	375 183  FETCH_DIM_FUNC_ARG/93     $196=     16?8                 273:'cpu_avg'       	;9
	376 183  SEND_VAR_EX/66            ?208      $196                 ?9                  	;0
	377 183  FETCH_DIM_FUNC_ARG/93     $197=     16?8                 274:'total_mem'     	;10
	378 183  SEND_VAR_EX/66            ?224      $197                 ?10                 	;0
	379 183  FETCH_DIM_FUNC_ARG/93     $198=     16?8                 275:'total_mem_free'	;11
	380 183  SEND_VAR_EX/66            ?240      $198                 ?11                 	;0
	381 183  FETCH_DIM_FUNC_ARG/93     $199=     16?8                 276:'total_mem_used'	;12
	382 183  SEND_VAR_EX/66            ?256      $199                 ?12                 	;0
	383 183  FETCH_DIM_FUNC_ARG/93     $200=     16?8                 277:'total_mem_used_percent'	;13
	384 183  SEND_VAR_EX/66            ?272      $200                 ?13                 	;0
	385 183  FETCH_DIM_FUNC_ARG/93     $201=     16?8                 278:'total_disk_space'	;14
	386 183  SEND_VAR_EX/66            ?288      $201                 ?14                 	;0
	387 183  FETCH_DIM_FUNC_ARG/93     $202=     16?8                 279:'uptime'        	;15
	388 183  SEND_VAR_EX/66            ?304      $202                 ?15                 	;0
	389 183  FETCH_DIM_FUNC_ARG/93     $203=     16?8                 280:'total_running_streams'	;16
	390 183  SEND_VAR_EX/66            ?320      $203                 ?16                 	;0
	391 183  FETCH_DIM_FUNC_ARG/93     $204=     16?8                 281:'bytes_sent'    	;17
	392 183  SEND_VAR_EX/66            ?336      $204                 ?17                 	;0
	393 183  FETCH_DIM_FUNC_ARG/93     $205=     16?8                 282:'bytes_received'	;18
	394 183  SEND_VAR_EX/66            ?352      $205                 ?18                 	;0
	395 183  FETCH_DIM_FUNC_ARG/93     $206=     16?8                 283:'bytes_sent_total'	;19
	396 183  SEND_VAR_EX/66            ?368      $206                 ?19                 	;0
	397 183  FETCH_DIM_FUNC_ARG/93     $207=     16?8                 284:'bytes_received_total'	;20
	398 183  SEND_VAR_EX/66            ?384      $207                 ?20                 	;0
	399 183  FETCH_DIM_FUNC_ARG/93     $208=     16?8                 285:'cpu_load_average'	;21
	400 183  SEND_VAR_EX/66            ?400      $208                 ?21                 	;0
	401 183  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'json_encode'   	;2
	402 183  FETCH_DIM_FUNC_ARG/93     $209=     16?8                 288:'gpu_info'      	;1
	403 183  SEND_VAR_EX/66            ?80       $209                 ?1                  	;0
	404 183  FETCH_CONSTANT/99         #210=     ?0                   289:'JSON_UNESCAPED_UNICODE'	;16
	405 183  SEND_VAL_EX/116           ?96       #210                 ?2                  	;0
	406 183  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
	407 183  SEND_VAR_NO_REF_EX/50     ?416      $211                 ?22                 	;0
	408 183  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'json_encode'   	;2
	409 183  FETCH_DIM_FUNC_ARG/93     $212=     16?8                 294:'iostat_info'   	;1
	410 183  SEND_VAR_EX/66            ?80       $212                 ?1                  	;0
	411 183  FETCH_CONSTANT/99         #213=     ?0                   295:'JSON_UNESCAPED_UNICODE'	;16
	412 183  SEND_VAL_EX/116           ?96       #213                 ?2                  	;0
	413 183  DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
	414 183  SEND_VAR_NO_REF_EX/50     ?432      $214                 ?23                 	;0
	415 183  DO_FCALL/60               ?185      ?0                   ?0                  	;0
	416 184  INIT_METHOD_CALL/112      ?0        16?16                298:'query'         	;14
	417 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   300:'intval'        	;1
	418 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   302:'time'          	;0
	419 184  DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
	420 184  SEND_VAR_NO_REF_EX/50     ?80       $216                 ?1                  	;0
	421 184  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
	422 184  CONCAT/8                  #218=     304:'UPDATE `servers` SET `remote_status` = ?, `xui_version` = ?, `xui_revision` = ?, `server_hardware` = ?,`whitelist_ips` = ?, `governors` = ?, `sysctl` = ?, `video_devices` = ?, `audio_devices` = ?, `gpu_info` = ?, `interfaces` = ?, `time_offset` = ' $217                	;0
	423 184  CONCAT/8                  #219=     #218                 305:' - UNIX_TIMESTAMP(), `ping` = ? WHERE `id` = ?'	;0
	424 184  SEND_VAL_EX/116           ?80       #219                 ?1                  	;0
	425 184  SEND_VAR_EX/66            ?96       16?22                ?2                  	;0
	426 184  FETCH_CONSTANT/99         #220=     ?0                   306:'XUI_VERSION'   	;16
	427 184  SEND_VAL_EX/116           ?112      #220                 ?3                  	;0
	428 184  FETCH_CONSTANT/99         #221=     ?0                   309:'XUI_REVISION'  	;16
	429 184  SEND_VAL_EX/116           ?128      #221                 ?4                  	;0
	430 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'json_encode'   	;2
	431 184  SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	432 184  FETCH_CONSTANT/99         #222=     ?0                   314:'JSON_UNESCAPED_UNICODE'	;16
	433 184  SEND_VAL_EX/116           ?96       #222                 ?2                  	;0
	434 184  DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
	435 184  SEND_VAR_NO_REF_EX/50     ?144      $223                 ?5                  	;0
	436 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   317:'json_encode'   	;2
	437 184  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	438 184  FETCH_CONSTANT/99         #224=     ?0                   319:'JSON_UNESCAPED_UNICODE'	;16
	439 184  SEND_VAL_EX/116           ?96       #224                 ?2                  	;0
	440 184  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
	441 184  SEND_VAR_NO_REF_EX/50     ?160      $225                 ?6                  	;0
	442 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'json_encode'   	;2
	443 184  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	444 184  FETCH_CONSTANT/99         #226=     ?0                   324:'JSON_UNESCAPED_UNICODE'	;16
	445 184  SEND_VAL_EX/116           ?96       #226                 ?2                  	;0
	446 184  DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
	447 184  SEND_VAR_NO_REF_EX/50     ?176      $227                 ?7                  	;0
	448 184  SEND_VAR_EX/66            ?192      16?24                ?8                  	;0
	449 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'json_encode'   	;2
	450 184  FETCH_DIM_FUNC_ARG/93     $228=     16?8                 329:'video_devices' 	;1
	451 184  SEND_VAR_EX/66            ?80       $228                 ?1                  	;0
	452 184  FETCH_CONSTANT/99         #229=     ?0                   330:'JSON_UNESCAPED_UNICODE'	;16
	453 184  SEND_VAL_EX/116           ?96       #229                 ?2                  	;0
	454 184  DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
	455 184  SEND_VAR_NO_REF_EX/50     ?208      $230                 ?9                  	;0
	456 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   333:'json_encode'   	;2
	457 184  FETCH_DIM_FUNC_ARG/93     $231=     16?8                 335:'audio_devices' 	;1
	458 184  SEND_VAR_EX/66            ?80       $231                 ?1                  	;0
	459 184  FETCH_CONSTANT/99         #232=     ?0                   336:'JSON_UNESCAPED_UNICODE'	;16
	460 184  SEND_VAL_EX/116           ?96       #232                 ?2                  	;0
	461 184  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
	462 184  SEND_VAR_NO_REF_EX/50     ?224      $233                 ?10                 	;0
	463 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'json_encode'   	;2
	464 184  FETCH_DIM_FUNC_ARG/93     $234=     16?8                 341:'gpu_info'      	;1
	465 184  SEND_VAR_EX/66            ?80       $234                 ?1                  	;0
	466 184  FETCH_CONSTANT/99         #235=     ?0                   342:'JSON_UNESCAPED_UNICODE'	;16
	467 184  SEND_VAL_EX/116           ?96       #235                 ?2                  	;0
	468 184  DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
	469 184  SEND_VAR_NO_REF_EX/50     ?240      $236                 ?11                 	;0
	470 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'json_encode'   	;2
	471 184  FETCH_DIM_FUNC_ARG/93     $237=     16?8                 347:'interfaces'    	;1
	472 184  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
	473 184  FETCH_CONSTANT/99         #238=     ?0                   348:'JSON_UNESCAPED_UNICODE'	;16
	474 184  SEND_VAL_EX/116           ?96       #238                 ?2                  	;0
	475 184  DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
	476 184  SEND_VAR_NO_REF_EX/50     ?256      $239                 ?12                 	;0
	477 184  SEND_VAR_EX/66            ?272      16?5                 ?13                 	;0
	478 184  FETCH_CONSTANT/99         #240=     ?0                   351:'SERVER_ID'     	;16
	479 184  SEND_VAL_EX/116           ?288      #240                 ?14                 	;0
	480 184  DO_FCALL/60               ?211      ?0                   ?0                  	;0
	481 185  FETCH_CONSTANT/99         #242=     ?0                   354:'SERVER_ID'     	;16
	482 185  FETCH_DIM_R/81            $243=     16?0                 #242                	;0
	483 185  FETCH_DIM_R/81            $244=     $243                 357:'is_main'       	;0
	484 185  BOOL_NOT/13               #245=     $244                 ?0                  	;0
	485 185  JMPZ/43                   ?0        #245                 ?487                	;0	>>487
	486 186  GOTO/253                  ?0        ?248                 ?358                	;0
	487 188  FETCH_STATIC_PROP_R/173   $246=     359:'rConfig'        360:'XUI'           	;0	<<485
	488 188  FETCH_DIM_R/81            $247=     $246                 362:'license'       	;0
	489 188  FETCH_STATIC_PROP_R/173   $248=     363:'rSettings'      364:'XUI'           	;0
	490 188  FETCH_DIM_R/81            $249=     $248                 366:'license'       	;0
	491 188  IS_NOT_EQUAL/18           #250=     $247                 $249                	;0
	492 188  BOOL_NOT/13               #251=     #250                 ?0                  	;0
	493 188  JMPZ/43                   ?0        #251                 ?495                	;0	>>495
	494 189  GOTO/253                  ?0        ?223                 ?367                	;0
	495 191  INIT_METHOD_CALL/112      ?0        16?16                368:'query'         	;2	<<493
	496 191  SEND_VAL_EX/116           ?80       370:'UPDATE `settings` SET `license` = ?;' ?1                  	;0
	497 191  FETCH_STATIC_PROP_FUNC_ARG/177 $252=     371:'rConfig'        372:'XUI'           	;2
	498 191  FETCH_DIM_FUNC_ARG/93     $253=     $252                 374:'license'       	;2
	499 191  SEND_VAR_EX/66            ?96       $253                 ?2                  	;0
	500 191  DO_FCALL/60               ?224      ?0                   ?0                  	;0
	501 192  GOTO/253                  ?0        ?223                 ?375                	;0
	502 195  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'intval'        	;1
	503 195  INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'trim'          	;1
	504 195  INIT_FCALL_BY_NAME/59     ?0        ?0                   380:'shell_exec'    	;1
	505 195  SEND_VAL_EX/116           ?80       382:'pgrep -U xui | xargs ps -f -p | grep scanner | grep -v grep | grep -v pgrep | wc -l' ?1                  	;0
	506 195  DO_FCALL_BY_NAME/131      $255=     ?0                   ?0                  	;0
	507 195  SEND_VAR_NO_REF_EX/50     ?80       $255                 ?1                  	;0
	508 195  DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
	509 195  SEND_VAR_NO_REF_EX/50     ?80       $256                 ?1                  	;0
	510 195  DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
	511 195  ASSIGN/38                 ?228      16?25                $257                	;0
	512 196  FETCH_STATIC_PROP_R/173   $259=     383:'rSettings'      384:'XUI'           	;0
	513 196  FETCH_DIM_R/81            $260=     $259                 386:'on_demand_checker'	;0
	514 196  JMPZ_EX/46                #261=     $260                 ?517                	;0	>>517
	515 196  IS_EQUAL/17               #262=     16?25                387:0               	;0
	516 196  BOOL/52                   #261=     #262                 ?0                  	;0
	517 196  JMPZ/43                   ?0        #261                 ?519                	;0	>>519	<<514
	518 197  GOTO/253                  ?0        ?87                  ?388                	;0
	519 199  FETCH_STATIC_PROP_R/173   $263=     389:'rSettings'      390:'XUI'           	;0	<<517
	520 199  FETCH_DIM_R/81            $264=     $263                 392:'on_demand_checker'	;0
	521 199  BOOL_NOT/13               #265=     $264                 ?0                  	;0
	522 199  JMPZ_EX/46                #265=     #265                 ?525                	;0	>>525
	523 199  IS_SMALLER/19             #266=     393:0                16?25               	;0
	524 199  BOOL/52                   #265=     #266                 ?0                  	;0
	525 199  BOOL_NOT/13               #267=     #265                 ?0                  	;0	<<522
	526 199  JMPZ/43                   ?0        #267                 ?528                	;0	>>528
	527 200  GOTO/253                  ?0        ?221                 ?394                	;0
	528 202  ECHO/40                   ?0        395:'Killing On-Demand Scanner
' ?0                  	;0	<<526
	529 203  GOTO/253                  ?0        ?198                 ?396                	;0
	530 205  BIND_GLOBAL/168           ?0        16?16                397:'b62d6460eb33ea07'	;0	<<0
	531 206  INIT_STATIC_METHOD_CALL/113 ?0        401:'XUI'            403:'aC49b56dBe10e52c'	;1
	532 206  SEND_VAL_EX/116           ?80       405:true             ?1                  	;0
	533 206  DO_FCALL/60               $269=     ?0                   ?0                  	;0
	534 206  FETCH_STATIC_PROP_W/174   $268=     398:'rSettings'      399:'XUI'           	;0
	535 206  ASSIGN/38                 ?240      $268                 $269                	;0
	536 207  INIT_STATIC_METHOD_CALL/113 ?0        406:'XUI'            408:'aB992b2373f7becA'	;0
	537 207  DO_FCALL/60               $271=     ?0                   ?0                  	;0
	538 207  JMPZ/43                   ?0        $271                 ?540                	;0	>>540
	539 208  GOTO/253                  ?0        ?1                   ?410                	;0
	540 210  ECHO/40                   ?0        411:'XUI not running...
' ?0                  	;0	<<538
	541 211  GOTO/253                  ?0        ?249                 ?412                	;0
	542 212  GOTO/253                  ?0        ?1                   ?413                	;0
	543 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   414:'intval'        	;1
	544 214  INIT_METHOD_CALL/112      ?0        16?16                416:'num_rows'      	;0
	545 214  DO_FCALL/60               $272=     ?0                   ?0                  	;0
	546 214  SEND_VAR_NO_REF_EX/50     ?80       $272                 ?1                  	;0
	547 214  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
	548 214  ASSIGN/38                 ?244      16?20                $273                	;0
	549 215  INIT_METHOD_CALL/112      ?0        16?16                418:'query'         	;1
	550 215  SEND_VAL_EX/116           ?80       420:'SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;' ?1                  	;0
	551 215  DO_FCALL/60               ?245      ?0                   ?0                  	;0
	552 216  INIT_FCALL_BY_NAME/59     ?0        ?0                   421:'intval'        	;1
	553 216  INIT_METHOD_CALL/112      ?0        16?16                423:'num_rows'      	;0
	554 216  DO_FCALL/60               $276=     ?0                   ?0                  	;0
	555 216  SEND_VAR_NO_REF_EX/50     ?80       $276                 ?1                  	;0
	556 216  DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
	557 216  ASSIGN/38                 ?248      16?19                $277                	;0
	558 217  GOTO/253                  ?0        ?586                 ?425                	;0
	559 219  GOTO/253                  ?0        ?560                 ?426                	;0
	560 221  FETCH_CONSTANT/99         #279=     ?0                   427:'SERVER_ID'     	;16
	561 221  FETCH_DIM_R/81            $280=     16?0                 #279                	;0
	562 221  FETCH_DIM_R/81            $281=     $280                 430:'connections'   	;0
	563 221  ASSIGN/38                 ?252      16?18                $281                	;0
	564 222  FETCH_CONSTANT/99         #283=     ?0                   431:'SERVER_ID'     	;16
	565 222  FETCH_DIM_R/81            $284=     16?0                 #283                	;0
	566 222  FETCH_DIM_R/81            $285=     $284                 434:'users'         	;0
	567 222  ASSIGN/38                 ?256      16?20                $285                	;0
	568 223  ASSIGN/38                 ?257      16?19                435:0               	;0
	569 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   436:'array_keys'    	;1
	570 224  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	571 224  DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
	572 224  FE_RESET_R/77             $289=     $288                 ?584                	;0
	573 224  FE_FETCH_R/78             ?0        $289                 16?4                	;584	>>584	<<583
	574 225  FETCH_DIM_R/81            $290=     16?0                 16?4                	;0
	575 225  FETCH_DIM_R/81            $291=     $290                 438:'server_online' 	;0
	576 225  BOOL_NOT/13               #292=     $291                 ?0                  	;0
	577 225  JMPZ/43                   ?0        #292                 ?580                	;0	>>580
	578 226  NOP/0                     ?0        ?0                   ?0                  	;1
	579 226  GOTO/253                  ?0        ?583                 ?439                	;0
	580 228  FETCH_DIM_R/81            $293=     16?0                 16?4                	;0	<<577
	581 228  FETCH_DIM_R/81            $294=     $293                 440:'users'         	;0
	582 228  ASSIGN_ADD/23             ?265      16?19                $294                	;0
	583 230  JMP/42                    ?0        ?573                 ?0                  	;0	>>573
	584 230  FE_FREE/127               ?0        $289                 ?0                  	;0	<<572
	585 233  GOTO/253                  ?0        ?586                 ?441                	;0
	586 236  INIT_METHOD_CALL/112      ?0        16?16                442:'query'         	;2
	587 236  SEND_VAL_EX/116           ?80       444:'SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0 AND `type` = 1;' ?1                  	;0
	588 236  FETCH_CONSTANT/99         #296=     ?0                   445:'SERVER_ID'     	;16
	589 236  SEND_VAL_EX/116           ?96       #296                 ?2                  	;0
	590 236  DO_FCALL/60               ?267      ?0                   ?0                  	;0
	591 237  INIT_FCALL_BY_NAME/59     ?0        ?0                   448:'intval'        	;1
	592 237  INIT_METHOD_CALL/112      ?0        16?16                450:'get_row'       	;0
	593 237  DO_FCALL/60               $298=     ?0                   ?0                  	;0
	594 237  SEPARATE/156              $298=     $298                 ?0                  	;0
	595 237  FETCH_DIM_FUNC_ARG/93     $299=     $298                 452:'count'         	;1
	596 237  SEND_VAR_EX/66            ?80       $299                 ?1                  	;0
	597 237  DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
	598 237  ASSIGN/38                 ?271      16?21                $300                	;0
	599 238  ASSIGN/38                 ?272      16?5                 453:0               	;0
	600 239  FETCH_CONSTANT/99         #303=     ?0                   454:'SERVER_ID'     	;16
	601 239  FETCH_DIM_R/81            $304=     16?0                 #303                	;0
	602 239  FETCH_DIM_R/81            $305=     $304                 457:'is_main'       	;0
	603 239  JMPZ/43                   ?0        $305                 ?605                	;0	>>605
	604 240  GOTO/253                  ?0        ?606                 ?458                	;0
	605 242  GOTO/253                  ?0        ?27                  ?459                	;0	<<603
	606 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   460:'file_get_contents'	;1
	607 246  SEND_VAL_EX/116           ?80       462:'/etc/sysctl.conf' ?1                  	;0
	608 246  DO_FCALL_BY_NAME/131      $306=     ?0                   ?0                  	;0
	609 246  ASSIGN/38                 ?277      16?24                $306                	;0
	610 247  ASSIGN/38                 ?278      16?10                463:array (
)       	;0
	611 248  ASSIGN/38                 ?279      16?11                464:NULL            	;0
	612 249  GOTO/253                  ?0        ?107                 ?465                	;0
	613 253  GOTO/253                  ?0        ?694                 ?466                	;0
	614 255  INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'shell_exec'    	;1
	615 255  FETCH_CONSTANT/99         #310=     ?0                   469:'PHP_BIN'       	;16
	616 255  CONCAT/8                  #311=     #310                 472:' '             	;0
	617 255  FETCH_CONSTANT/99         #312=     ?0                   473:'CLI_PATH'      	;16
	618 255  CONCAT/8                  #313=     #311                 #312                	;0
	619 255  CONCAT/8                  #314=     #313                 476:'cache_handler.php > /dev/null 2>/dev/null &'	;0
	620 255  SEND_VAL_EX/116           ?80       #314                 ?1                  	;0
	621 255  DO_FCALL_BY_NAME/131      ?285      ?0                   ?0                  	;0
	622 256  GOTO/253                  ?0        ?694                 ?477                	;0
	623 259  INIT_FCALL_BY_NAME/59     ?0        ?0                   478:'intval'        	;1
	624 259  INIT_FCALL_BY_NAME/59     ?0        ?0                   480:'trim'          	;1
	625 259  INIT_FCALL_BY_NAME/59     ?0        ?0                   482:'shell_exec'    	;1
	626 259  SEND_VAL_EX/116           ?80       484:'pgrep -U xui | xargs ps -f -p | grep watchdog | grep -v grep | grep -v pgrep | wc -l' ?1                  	;0
	627 259  DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
	628 259  SEND_VAR_NO_REF_EX/50     ?80       $316                 ?1                  	;0
	629 259  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
	630 259  SEND_VAR_NO_REF_EX/50     ?80       $317                 ?1                  	;0
	631 259  DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
	632 259  ASSIGN/38                 ?289      16?9                 $318                	;0
	633 260  IS_EQUAL/17               #320=     16?9                 485:0               	;0
	634 260  BOOL_NOT/13               #321=     #320                 ?0                  	;0
	635 260  JMPZ/43                   ?0        #321                 ?637                	;0	>>637
	636 261  GOTO/253                  ?0        ?645                 ?486                	;0
	637 263  INIT_FCALL_BY_NAME/59     ?0        ?0                   487:'shell_exec'    	;1	<<635
	638 263  FETCH_CONSTANT/99         #322=     ?0                   489:'PHP_BIN'       	;16
	639 263  CONCAT/8                  #323=     #322                 492:' '             	;0
	640 263  FETCH_CONSTANT/99         #324=     ?0                   493:'CLI_PATH'      	;16
	641 263  CONCAT/8                  #325=     #323                 #324                	;0
	642 263  CONCAT/8                  #326=     #325                 496:'watchdog.php > /dev/null 2>/dev/null &'	;0
	643 263  SEND_VAL_EX/116           ?80       #326                 ?1                  	;0
	644 263  DO_FCALL_BY_NAME/131      ?297      ?0                   ?0                  	;0
	645 265  GOTO/253                  ?0        ?54                  ?497                	;0
	646 267  FETCH_DIM_R/81            $328=     16?9                 498:'cpu_average_array'	;0
	647 267  JMP_SET/152               #329=     $328                 ?649                	;0
	648 267  QM_ASSIGN/22              #329=     499:array (
)        ?0                  	;0
	649 267  ASSIGN/38                 ?300      16?26                #329                	;0
	650 268  INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'count'         	;1
	651 268  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	652 268  DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
	653 268  IS_SMALLER/19             #332=     502:0                $331                	;0
	654 268  BOOL_NOT/13               #333=     #332                 ?0                  	;0
	655 268  JMPZ/43                   ?0        #333                 ?657                	;0	>>657
	656 269  GOTO/253                  ?0        ?670                 ?503                	;0
	657 271  INIT_FCALL_BY_NAME/59     ?0        ?0                   505:'round'         	;2	<<655
	658 271  INIT_FCALL_BY_NAME/59     ?0        ?0                   507:'array_sum'     	;1
	659 271  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	660 271  DO_FCALL_BY_NAME/131      $335=     ?0                   ?0                  	;0
	661 271  INIT_FCALL_BY_NAME/59     ?0        ?0                   509:'count'         	;1
	662 271  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	663 271  DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
	664 271  DIV/4                     #337=     $335                 $336                	;0
	665 271  SEND_VAL_EX/116           ?80       #337                 ?1                  	;0
	666 271  SEND_VAL_EX/116           ?96       511:2                ?2                  	;0
	667 271  DO_FCALL_BY_NAME/131      $338=     ?0                   ?0                  	;0
	668 271  ASSIGN_DIM/147            ?304      16?8                 504:'cpu'           	;0
	669 271  OP_DATA/137               ?0        $338                 ?0                  	;0
	670 273  FETCH_DIM_R/81            $339=     16?8                 512:'total_mem'     	;0
	671 273  INIT_ARRAY/71             #340=     $339                 513:'total_ram'     	;46
	672 273  FETCH_DIM_R/81            $341=     16?8                 514:'total_mem_used'	;0
	673 273  ADD_ARRAY_ELEMENT/72      #340=     $341                 515:'total_used'    	;0
	674 273  FETCH_DIM_R/81            $342=     16?8                 516:'cpu_cores'     	;0
	675 273  ADD_ARRAY_ELEMENT/72      #340=     $342                 517:'cores'         	;0
	676 273  FETCH_DIM_R/81            $343=     16?8                 518:'cpu_cores'     	;0
	677 273  ADD_ARRAY_ELEMENT/72      #340=     $343                 519:'threads'       	;0
	678 273  FETCH_DIM_R/81            $344=     16?8                 520:'kernel'        	;0
	679 273  ADD_ARRAY_ELEMENT/72      #340=     $344                 521:'kernel'        	;0
	680 273  FETCH_DIM_R/81            $345=     16?8                 522:'total_running_streams'	;0
	681 273  ADD_ARRAY_ELEMENT/72      #340=     $345                 523:'total_running_streams'	;0
	682 273  FETCH_DIM_R/81            $346=     16?8                 524:'cpu_name'      	;0
	683 273  ADD_ARRAY_ELEMENT/72      #340=     $346                 525:'cpu_name'      	;0
	684 273  FETCH_DIM_R/81            $347=     16?8                 526:'cpu'           	;0
	685 273  ADD_ARRAY_ELEMENT/72      #340=     $347                 527:'cpu_usage'     	;0
	686 273  FETCH_DIM_R/81            $348=     16?8                 528:'network_speed' 	;0
	687 273  ADD_ARRAY_ELEMENT/72      #340=     $348                 529:'network_speed' 	;0
	688 273  FETCH_DIM_R/81            $349=     16?8                 530:'bytes_sent'    	;0
	689 273  ADD_ARRAY_ELEMENT/72      #340=     $349                 531:'bytes_sent'    	;0
	690 273  FETCH_DIM_R/81            $350=     16?8                 532:'bytes_received'	;0
	691 273  ADD_ARRAY_ELEMENT/72      #340=     $350                 533:'bytes_received'	;0
	692 273  ASSIGN/38                 ?321      16?23                #340                	;0
	693 274  GOTO/253                  ?0        ?714                 ?534                	;0
	694 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   535:'intval'        	;1
	695 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   537:'trim'          	;1
	696 278  INIT_FCALL_BY_NAME/59     ?0        ?0                   539:'shell_exec'    	;1
	697 278  SEND_VAL_EX/116           ?80       541:'pgrep -U xui | xargs ps -f -p | grep network | grep -v grep | grep -v pgrep | wc -l' ?1                  	;0
	698 278  DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
	699 278  SEND_VAR_NO_REF_EX/50     ?80       $352                 ?1                  	;0
	700 278  DO_FCALL_BY_NAME/131      $353=     ?0                   ?0                  	;0
	701 278  SEND_VAR_NO_REF_EX/50     ?80       $353                 ?1                  	;0
	702 278  DO_FCALL_BY_NAME/131      $354=     ?0                   ?0                  	;0
	703 278  ASSIGN/38                 ?325      16?27                $354                	;0
	704 279  IS_EQUAL/17               #356=     16?27                542:0               	;0
	705 279  BOOL_NOT/13               #357=     #356                 ?0                  	;0
	706 279  JMPZ/43                   ?0        #357                 ?708                	;0	>>708
	707 280  GOTO/253                  ?0        ?623                 ?543                	;0
	708 282  INIT_FCALL_BY_NAME/59     ?0        ?0                   544:'shell_exec'    	;1	<<706
	709 282  FETCH_CONSTANT/99         #358=     ?0                   546:'BIN_PATH'      	;16
	710 282  CONCAT/8                  #359=     #358                 549:'network > /dev/null 2>/dev/null &'	;0
	711 282  SEND_VAL_EX/116           ?80       #359                 ?1                  	;0
	712 282  DO_FCALL_BY_NAME/131      ?330      ?0                   ?0                  	;0
	713 283  GOTO/253                  ?0        ?623                 ?550                	;0
	714 285  INIT_FCALL_BY_NAME/59     ?0        ?0                   551:'fsockopen'     	;5
	715 285  FETCH_CONSTANT/99         #361=     ?0                   553:'SERVER_ID'     	;16
	716 285  FETCH_DIM_FUNC_ARG/93     $362=     16?0                 #361                	;1
	717 285  FETCH_DIM_FUNC_ARG/93     $363=     $362                 556:'server_ip'     	;1
	718 285  SEND_VAR_EX/66            ?80       $363                 ?1                  	;0
	719 285  FETCH_CONSTANT/99         #364=     ?0                   557:'SERVER_ID'     	;16
	720 285  FETCH_DIM_FUNC_ARG/93     $365=     16?0                 #364                	;2
	721 285  FETCH_DIM_FUNC_ARG/93     $366=     $365                 560:'http_broadcast_port'	;2
	722 285  SEND_VAR_EX/66            ?96       $366                 ?2                  	;0
	723 285  SEND_VAR_EX/66            ?112      16?28                ?3                  	;0
	724 285  SEND_VAR_EX/66            ?128      16?29                ?4                  	;0
	725 285  SEND_VAL_EX/116           ?144      561:3                ?5                  	;0
	726 285  DO_FCALL_BY_NAME/131      $367=     ?0                   ?0                  	;0
	727 285  JMPNZ_EX/47               #368=     $367                 ?742                	;0	>>742
	728 285  INIT_FCALL_BY_NAME/59     ?0        ?0                   562:'fsockopen'     	;5
	729 285  FETCH_CONSTANT/99         #369=     ?0                   564:'SERVER_ID'     	;16
	730 285  FETCH_DIM_FUNC_ARG/93     $370=     16?0                 #369                	;1
	731 285  FETCH_DIM_FUNC_ARG/93     $371=     $370                 567:'server_ip'     	;1
	732 285  SEND_VAR_EX/66            ?80       $371                 ?1                  	;0
	733 285  FETCH_CONSTANT/99         #372=     ?0                   568:'SERVER_ID'     	;16
	734 285  FETCH_DIM_FUNC_ARG/93     $373=     16?0                 #372                	;2
	735 285  FETCH_DIM_FUNC_ARG/93     $374=     $373                 571:'https_broadcast_port'	;2
	736 285  SEND_VAR_EX/66            ?96       $374                 ?2                  	;0
	737 285  SEND_VAR_EX/66            ?112      16?28                ?3                  	;0
	738 285  SEND_VAR_EX/66            ?128      16?29                ?4                  	;0
	739 285  SEND_VAL_EX/116           ?144      572:3                ?5                  	;0
	740 285  DO_FCALL_BY_NAME/131      $375=     ?0                   ?0                  	;0
	741 285  BOOL/52                   #368=     $375                 ?0                  	;0
	742 285  JMPZ/43                   ?0        #368                 ?744                	;0	>>744	<<727
	743 286  GOTO/253                  ?0        ?746                 ?573                	;0
	744 288  ASSIGN/38                 ?346      16?22                574:false           	;0	<<742
	745 289  GOTO/253                  ?0        ?299                 ?575                	;0
	746 291  ASSIGN/38                 ?347      16?22                576:true            	;0
	747 292  GOTO/253                  ?0        ?299                 ?577                	;0
	748 296  GOTO/253                  ?0        ?502                 ?578                	;0
	749 298  INIT_FCALL_BY_NAME/59     ?0        ?0                   579:'shell_exec'    	;1
	750 298  FETCH_CONSTANT/99         #378=     ?0                   581:'PHP_BIN'       	;16
	751 298  CONCAT/8                  #379=     #378                 584:' '             	;0
	752 298  FETCH_CONSTANT/99         #380=     ?0                   585:'CLI_PATH'      	;16
	753 298  CONCAT/8                  #381=     #379                 #380                	;0
	754 298  CONCAT/8                  #382=     #381                 588:'ondemand.php > /dev/null 2>/dev/null &'	;0
	755 298  SEND_VAL_EX/116           ?80       #382                 ?1                  	;0
	756 298  DO_FCALL_BY_NAME/131      ?353      ?0                   ?0                  	;0
	757 299  GOTO/253                  ?0        ?502                 ?589                	;0
	758 301  NOP/0                     ?0        590:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   325  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   325  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   326  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   326  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   326  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   326  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   326  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   327  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   329  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   329  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  331  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  331  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  331  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  331  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  331  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  332  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?9                   ?0                  	;0	>>9
1   5    INIT_STATIC_METHOD_CALL/113 ?0        1:'XUI'              3:'a3CF732C257Bd804'	;1
2   5    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
3   5    DO_FCALL/60               ?0        ?0                   ?0                  	;0
4   7    NOP/0                     ?0        ?0                   ?0                  	;0
5   32   NOP/0                     ?0        ?0                   ?0                  	;0
6   302  INIT_FCALL/61             ?0        ?6224                5:'ab8369074df2aaa3'	;0
7   302  DO_FCALL/60               ?1        ?0                   ?0                  	;0
8   303  GOTO/253                  ?0        ?54                  ?6                  	;0
9   305  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'posix_getpwuid'  	;1	<<0
10  305  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'posix_geteuid'   	;0
11  305  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
12  305  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
13  305  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
14  305  FETCH_DIM_R/81            $6=       $5                   11:'name'           	;0
15  305  IS_NOT_EQUAL/18           #7=       $6                   12:'xui'            	;0
16  305  BOOL_NOT/13               #8=       #7                   ?0                  	;0
17  305  JMPZ/43                   ?0        #8                   ?19                 	;0	>>19
18  306  GOTO/253                  ?0        ?20                  ?13                 	;0
19  308  EXIT/79                   ?0        14:'Please run as XUI!
' ?0                  	;0	<<17
20  310  BEGIN_SILENCE/57          #9=       ?0                   ?0                  	;0
21  310  FETCH_R/80                $10=      15:'argc'            ?0                  	;268435456
22  310  END_SILENCE/58            ?0        #9                   ?0                  	;0
23  310  JMPZ/43                   ?0        $10                  ?25                 	;0	>>25
24  311  GOTO/253                  ?0        ?27                  ?16                 	;0
25  313  EXIT/79                   ?0        17:0                 ?0                  	;0	<<23
26  314  GOTO/253                  ?0        ?27                  ?18                 	;0
27  317  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'register_shutdown_function'	;1
28  317  SEND_VAL_EX/116           ?80       21:'shutdown'        ?1                  	;0
29  317  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
30  318  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'str_replace'    	;3
31  318  SEND_VAL_EX/116           ?80       24:'\\'              ?1                  	;0
32  318  SEND_VAL_EX/116           ?96       25:'/'               ?2                  	;0
33  318  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'dirname'        	;1
34  318  FETCH_DIM_FUNC_ARG/93     $12=      16?1                 28:0                	;1
35  318  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
36  318  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
37  318  SEND_VAR_NO_REF_EX/50     ?112      $13                  ?3                  	;0
38  318  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
39  318  CONCAT/8                  #15=      $14                  29:'/../www/init.php'	;0
40  318  INCLUDE_OR_EVAL/73        ?14       #15                  ?0                  	;8
41  319  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'cli_set_process_title'	;1
42  319  SEND_VAL_EX/116           ?80       32:'XUI[Servers]'    ?1                  	;0
43  319  DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
44  320  FETCH_CONSTANT/99         #18=      ?0                   33:'CRONS_TMP_PATH' 	;16
45  320  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'md5'            	;1
46  320  INIT_STATIC_METHOD_CALL/113 ?0        38:'XUI'             40:'a336b0dAd3eaf634'	;0
47  320  DO_FCALL/60               $19=      ?0                   ?0                  	;0
48  320  CONCAT/8                  #20=      $19                  42:'crons\\servers.php'	;0
49  320  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0
50  320  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
51  320  CONCAT/8                  #22=      #18                  $21                 	;0
52  320  ASSIGN/38                 ?21       16?0                 #22                 	;0
53  321  GOTO/253                  ?0        ?1                   ?43                 	;0
54  323  NOP/0                     ?0        ?0                   ?0                  	;0
55  333  NOP/0                     ?0        44:1                 ?0                  	;4294967295
*/

?>