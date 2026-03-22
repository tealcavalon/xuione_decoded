<?php


function ed8dBF4549416fA2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   17   JMP/42                    ?0        ?197                 ?0                  	;0	>>197
	1   19   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'gmdate'          	;1
	2   19   SEND_VAL_EX/116           ?80       3:'Y-m-d:H-i'        ?1                  	;0
	3   19   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	4   19   IS_NOT_EQUAL/18           #11=      $10                  16?0                	;0
	5   19   BOOL_NOT/13               #12=      #11                  ?0                  	;0
	6   19   JMPZ/43                   ?0        #12                  ?8                  	;0	>>8
	7   20   GOTO/253                  ?0        ?84                  ?4                  	;0
	8   22   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'fclose'          	;1	<<6
	9   22   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	10  22   DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
	11  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'file_exists'     	;1
	12  23   FETCH_CONSTANT/99         #14=      ?0                   9:'ARCHIVE_PATH'    	;16
	13  23   CONCAT/8                  #15=      #14                  16?2                	;0
	14  23   SEND_VAL_EX/116           ?80       #15                  ?1                  	;0
	15  23   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	16  23   JMPZ/43                   ?0        $16                  ?18                 	;0	>>18
	17  24   GOTO/253                  ?0        ?23                  ?12                 	;0
	18  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'mkdir'          	;1	<<16
	19  26   FETCH_CONSTANT/99         #17=      ?0                   15:'ARCHIVE_PATH'   	;16
	20  26   CONCAT/8                  #18=      #17                  16?2                	;0
	21  26   SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
	22  26   DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	23  28   GOTO/253                  ?0        ?50                  ?18                 	;0
	24  30   INIT_STATIC_METHOD_CALL/113 ?0        19:'XUI'             21:'e764F10e99c26365'	;2
	25  30   FETCH_DIM_FUNC_ARG/93     $20=      16?3                 23:'tv_archive_pid' 	;1
	26  30   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
	27  30   FETCH_CONSTANT/99         #21=      ?0                   24:'PHP_BIN'        	;16
	28  30   SEND_VAL_EX/116           ?96       #21                  ?2                  	;0
	29  30   DO_FCALL/60               $22=      ?0                   ?0                  	;0
	30  30   BOOL_NOT/13               #23=      $22                  ?0                  	;0
	31  30   JMPZ/43                   ?0        #23                  ?33                 	;0	>>33
	32  31   GOTO/253                  ?0        ?49                  ?27                 	;0
	33  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'is_numeric'     	;1	<<31
	34  33   FETCH_DIM_FUNC_ARG/93     $24=      16?3                 30:'tv_archive_pid' 	;1
	35  33   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
	36  33   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	37  33   JMPZ_EX/46                #26=      $25                  ?41                 	;0	>>41
	38  33   FETCH_DIM_R/81            $27=      16?3                 31:'tv_archive_pid' 	;0
	39  33   IS_SMALLER/19             #28=      32:0                 $27                 	;0
	40  33   BOOL/52                   #26=      #28                  ?0                  	;0
	41  33   BOOL_NOT/13               #29=      #26                  ?0                  	;0	<<37
	42  33   JMPZ/43                   ?0        #29                  ?44                 	;0	>>44
	43  34   GOTO/253                  ?0        ?49                  ?33                 	;0
	44  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'posix_kill'     	;2	<<42
	45  36   FETCH_DIM_FUNC_ARG/93     $30=      16?3                 36:'tv_archive_pid' 	;1
	46  36   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
	47  36   SEND_VAL_EX/116           ?96       37:9                 ?2                  	;0
	48  36   DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
	49  39   GOTO/253                  ?0        ?85                  ?38                 	;0
	50  41   INIT_STATIC_METHOD_CALL/113 ?0        39:'XUI'             41:'findKeyframe'   	;1
	51  41   FETCH_CONSTANT/99         #32=      ?0                   43:'ARCHIVE_PATH'   	;16
	52  41   CONCAT/8                  #33=      #32                  16?2                	;0
	53  41   CONCAT/8                  #34=      #33                  46:'/'              	;0
	54  41   CONCAT/8                  #35=      #34                  16?0                	;0
	55  41   CONCAT/8                  #36=      #35                  47:'.ts'            	;0
	56  41   SEND_VAL_EX/116           ?80       #36                  ?1                  	;0
	57  41   DO_FCALL/60               $37=      ?0                   ?0                  	;0
	58  41   JMP_SET/152               #38=      $37                  ?60                 	;0
	59  41   QM_ASSIGN/22              #38=      48:0                 ?0                  	;0
	60  41   ASSIGN/38                 ?29       16?4                 #38                 	;0
	61  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'file_put_contents'	;2
	62  42   FETCH_CONSTANT/99         #40=      ?0                   51:'ARCHIVE_PATH'   	;16
	63  42   CONCAT/8                  #41=      #40                  16?2                	;0
	64  42   CONCAT/8                  #42=      #41                  54:'/'              	;0
	65  42   CONCAT/8                  #43=      #42                  16?0                	;0
	66  42   CONCAT/8                  #44=      #43                  55:'.ts.offset'     	;0
	67  42   SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
	68  42   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	69  42   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
	70  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'gmdate'         	;1
	71  43   SEND_VAL_EX/116           ?80       58:'Y-m-d:H-i'       ?1                  	;0
	72  43   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
	73  43   ASSIGN/38                 ?37       16?0                 $46                 	;0
	74  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'fopen'          	;2
	75  44   FETCH_CONSTANT/99         #48=      ?0                   61:'ARCHIVE_PATH'   	;16
	76  44   CONCAT/8                  #49=      #48                  16?2                	;0
	77  44   CONCAT/8                  #50=      #49                  64:'/'              	;0
	78  44   CONCAT/8                  #51=      #50                  16?0                	;0
	79  44   CONCAT/8                  #52=      #51                  65:'.ts'            	;0
	80  44   SEND_VAL_EX/116           ?80       #52                  ?1                  	;0
	81  44   SEND_VAL_EX/116           ?96       66:'a'               ?2                  	;0
	82  44   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
	83  44   ASSIGN/38                 ?44       16?1                 $53                 	;0
	84  46   GOTO/253                  ?0        ?181                 ?67                 	;0
	85  48   ISSET_ISEMPTY_DIM_OBJ/115 #55=      16?3                 68:'pid'            	;16777216
	86  48   BOOL_NOT/13               #56=      #55                  ?0                  	;0
	87  48   JMPZ/43                   ?0        #56                  ?89                 	;0	>>89
	88  49   GOTO/253                  ?0        ?95                  ?69                 	;0
	89  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'posix_kill'     	;2	<<87
	90  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'getmypid'       	;0
	91  51   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
	92  51   SEND_VAR_NO_REF_EX/50     ?80       $57                  ?1                  	;0
	93  51   SEND_VAL_EX/116           ?96       74:9                 ?2                  	;0
	94  51   DO_FCALL_BY_NAME/131      ?48       ?0                   ?0                  	;0
	95  53   INIT_METHOD_CALL/112      ?0        16?5                 75:'query'          	;3
	96  53   SEND_VAL_EX/116           ?80       77:'UPDATE `streams` SET `tv_archive_pid` = ? WHERE `id` = ?' ?1                  	;0
	97  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'getmypid'       	;0
	98  53   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	99  53   SEND_VAR_NO_REF_EX/50     ?96       $59                  ?2                  	;0
	100 53   SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	101 53   DO_FCALL/60               ?50       ?0                   ?0                  	;0
	102 54   INIT_STATIC_METHOD_CALL/113 ?0        80:'XUI'             82:'Cac325153A658C37'	;1
	103 54   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	104 54   DO_FCALL/60               ?51       ?0                   ?0                  	;0
	105 55   GOTO/253                  ?0        ?113                 ?84                 	;0
	106 58   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'sleep'          	;1
	107 58   SEND_VAL_EX/116           ?80       87:1                 ?1                  	;0
	108 58   DO_FCALL_BY_NAME/131      ?52       ?0                   ?0                  	;0
	109 59   GOTO/253                  ?0        ?115                 ?88                 	;0
	110 62   GOTO/253                  ?0        ?111                 ?89                 	;0
	111 64   EXIT/79                   ?0        ?0                   ?0                  	;0
	112 66   GOTO/253                  ?0        ?269                 ?90                 	;0
	113 68   INIT_METHOD_CALL/112      ?0        16?5                 91:'close_mysql'    	;0
	114 68   DO_FCALL/60               ?53       ?0                   ?0                  	;0
	115 70   INIT_STATIC_METHOD_CALL/113 ?0        93:'XUI'             95:'b4AB2a8EB0aA68eE'	;2
	116 70   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	117 70   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	118 70   DO_FCALL/60               $64=      ?0                   ?0                  	;0
	119 70   JMPZ_EX/46                #65=      $64                  ?124                	;0	>>124
	120 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'file_exists'    	;1
	121 70   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	122 70   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
	123 70   BOOL/52                   #65=      $66                  ?0                  	;0
	124 70   BOOL_NOT/13               #67=      #65                  ?0                  	;0	<<119
	125 70   JMPZ/43                   ?0        #67                  ?127                	;0	>>127
	126 71   GOTO/253                  ?0        ?110                 ?99                 	;0
	127 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'time'          	;0	<<125
	128 73   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
	129 73   ASSIGN/38                 ?59       16?8                 $68                 	;0
	130 74   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'aA260198262D3a85'	;2
	131 74   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	132 74   FETCH_DIM_FUNC_ARG/93     $70=      16?3                 104:'tv_archive_duration'	;2
	133 74   SEND_VAR_EX/66            ?96       $70                  ?2                  	;0
	134 74   DO_FCALL_BY_NAME/131      ?61       ?0                   ?0                  	;0
	135 75   GOTO/253                  ?0        ?232                 ?105                	;0
	136 77   FETCH_CONSTANT/99         #72=      ?0                   106:'STREAMS_PATH'  	;16
	137 77   CONCAT/8                  #73=      #72                  16?2                	;0
	138 77   CONCAT/8                  #74=      #73                  109:'_.m3u8'        	;0
	139 77   ASSIGN/38                 ?65       16?7                 #74                 	;0
	140 78   IS_SMALLER/19             #76=      110:0                16?6                	;0
	141 78   BOOL_NOT/13               #77=      #76                  ?0                  	;0
	142 78   JMPZ/43                   ?0        #77                  ?144                	;0	>>144
	143 79   GOTO/253                  ?0        ?112                 ?111                	;0
	144 81   INIT_METHOD_CALL/112      ?0        16?5                 112:'query'         	;3	<<142
	145 81   SEND_VAL_EX/116           ?80       114:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t1.id = t2.stream_id AND t2.server_id = t1.tv_archive_server_id WHERE t1.`id` = ? AND t1.`tv_archive_server_id` = ? AND t1.`tv_archive_duration` > 0' ?1                  	;0
	146 81   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	147 81   FETCH_CONSTANT/99         #78=      ?0                   115:'SERVER_ID'     	;16
	148 81   SEND_VAL_EX/116           ?112      #78                  ?3                  	;0
	149 81   DO_FCALL/60               ?69       ?0                   ?0                  	;0
	150 82   INIT_METHOD_CALL/112      ?0        16?5                 118:'num_rows'      	;0
	151 82   DO_FCALL/60               $80=      ?0                   ?0                  	;0
	152 82   IS_SMALLER/19             #81=      120:0                $80                 	;0
	153 82   BOOL_NOT/13               #82=      #81                  ?0                  	;0
	154 82   JMPZ/43                   ?0        #82                  ?156                	;0	>>156
	155 83   GOTO/253                  ?0        ?110                 ?121                	;0
	156 85   INIT_METHOD_CALL/112      ?0        16?5                 122:'get_row'       	;0	<<154
	157 85   DO_FCALL/60               $83=      ?0                   ?0                  	;0
	158 85   ASSIGN/38                 ?74       16?3                 $83                 	;0
	159 86   GOTO/253                  ?0        ?24                  ?124                	;0
	160 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'feof'          	;1
	161 88   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	162 88   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
	163 88   JMPZ/43                   ?0        $85                  ?165                	;0	>>165
	164 89   GOTO/253                  ?0        ?193                 ?127                	;0
	165 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'time'          	;0	<<163
	166 91   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
	167 91   SUB/2                     #87=      $86                  16?8                	;0
	168 91   IS_SMALLER_OR_EQUAL/20    #88=      130:3600             #87                 	;0
	169 91   BOOL_NOT/13               #89=      #88                  ?0                  	;0
	170 91   JMPZ/43                   ?0        #89                  ?172                	;0	>>172
	171 92   GOTO/253                  ?0        ?180                 ?131                	;0
	172 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'aA260198262d3A85'	;2	<<170
	173 94   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	174 94   FETCH_DIM_FUNC_ARG/93     $90=      16?3                 134:'tv_archive_duration'	;2
	175 94   SEND_VAR_EX/66            ?96       $90                  ?2                  	;0
	176 94   DO_FCALL_BY_NAME/131      ?81       ?0                   ?0                  	;0
	177 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'time'          	;0
	178 95   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	179 95   ASSIGN/38                 ?83       16?8                 $92                 	;0
	180 97   GOTO/253                  ?0        ?1                   ?137                	;0
	181 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'fwrite'        	;2
	182 99   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	183 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'stream_get_line'	;2
	184 99   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	185 99   SEND_VAL_EX/116           ?96       142:4096             ?2                  	;0
	186 99   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	187 99   SEND_VAR_NO_REF_EX/50     ?96       $94                  ?2                  	;0
	188 99   DO_FCALL_BY_NAME/131      ?85       ?0                   ?0                  	;0
	189 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'fflush'        	;1
	190 100  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	191 100  DO_FCALL_BY_NAME/131      ?86       ?0                   ?0                  	;0
	192 101  GOTO/253                  ?0        ?268                 ?145                	;0
	193 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'fclose'        	;1
	194 103  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	195 103  DO_FCALL_BY_NAME/131      ?87       ?0                   ?0                  	;0
	196 104  GOTO/253                  ?0        ?106                 ?148                	;0
	197 106  BIND_GLOBAL/168           ?0        16?5                 149:'b62d6460eb33ea07'	;0	<<0
	198 106  BIND_GLOBAL/168           ?0        16?2                 150:'ee6d1fc5d801b43f'	;0
	199 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'file_exists'   	;1
	200 107  FETCH_CONSTANT/99         #98=      ?0                   153:'ARCHIVE_PATH'  	;16
	201 107  CONCAT/8                  #99=      #98                  16?2                	;0
	202 107  SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
	203 107  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	204 107  JMPZ/43                   ?0        $100                 ?206                	;0	>>206
	205 108  GOTO/253                  ?0        ?211                 ?156                	;0
	206 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'mkdir'         	;1	<<204
	207 110  FETCH_CONSTANT/99         #101=     ?0                   159:'ARCHIVE_PATH'  	;16
	208 110  CONCAT/8                  #102=     #101                 16?2                	;0
	209 110  SEND_VAL_EX/116           ?80       #102                 ?1                  	;0
	210 110  DO_FCALL_BY_NAME/131      ?93       ?0                   ?0                  	;0
	211 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'file_exists'   	;1
	212 112  FETCH_CONSTANT/99         #104=     ?0                   164:'STREAMS_PATH'  	;16
	213 112  CONCAT/8                  #105=     #104                 16?2                	;0
	214 112  CONCAT/8                  #106=     #105                 167:'_.pid'         	;0
	215 112  SEND_VAL_EX/116           ?80       #106                 ?1                  	;0
	216 112  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
	217 112  JMPZ/43                   ?0        $107                 ?229                	;0	>>229
	218 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'intval'        	;1
	219 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'file_get_contents'	;1
	220 112  FETCH_CONSTANT/99         #108=     ?0                   172:'STREAMS_PATH'  	;16
	221 112  CONCAT/8                  #109=     #108                 16?2                	;0
	222 112  CONCAT/8                  #110=     #109                 175:'_.pid'         	;0
	223 112  SEND_VAL_EX/116           ?80       #110                 ?1                  	;0
	224 112  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
	225 112  SEND_VAR_NO_REF_EX/50     ?80       $111                 ?1                  	;0
	226 112  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
	227 112  QM_ASSIGN/22              #113=     $112                 ?0                  	;0
	228 112  JMP/42                    ?0        ?230                 ?0                  	;0	>>230
	229 112  QM_ASSIGN/22              #113=     176:0                ?0                  	;0	<<217
	230 112  ASSIGN/38                 ?104      16?6                 #113                	;0	<<228
	231 113  GOTO/253                  ?0        ?136                 ?177                	;0
	232 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'gmdate'        	;1
	233 115  SEND_VAL_EX/116           ?80       180:'Y-m-d:H-i'      ?1                  	;0
	234 115  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
	235 115  ASSIGN/38                 ?106      16?0                 $115                	;0
	236 116  BEGIN_SILENCE/57          #117=     ?0                   ?0                  	;0
	237 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'fopen'         	;2
	238 116  FETCH_CONSTANT/99         #119=     ?0                   186:'SERVER_ID'     	;16
	239 116  FETCH_STATIC_PROP_R/173   $118=     183:'rServers'       184:'XUI'           	;0
	240 116  FETCH_DIM_R/81            $120=     $118                 #119                	;0
	241 116  FETCH_DIM_R/81            $121=     $120                 189:'http_broadcast_port'	;0
	242 116  CONCAT/8                  #122=     190:'http://127.0.0.1:' $121                	;0
	243 116  CONCAT/8                  #123=     #122                 191:'/admin/live?password='	;0
	244 116  FETCH_STATIC_PROP_R/173   $124=     192:'rSettings'      193:'XUI'           	;0
	245 116  FETCH_DIM_R/81            $125=     $124                 195:'live_streaming_pass'	;0
	246 116  CONCAT/8                  #126=     #123                 $125                	;0
	247 116  CONCAT/8                  #127=     #126                 196:'&stream='      	;0
	248 116  CONCAT/8                  #128=     #127                 16?2                	;0
	249 116  CONCAT/8                  #129=     #128                 197:'&extension=ts' 	;0
	250 116  SEND_VAL_EX/116           ?80       #129                 ?1                  	;0
	251 116  SEND_VAL_EX/116           ?96       198:'r'              ?2                  	;0
	252 116  DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
	253 116  END_SILENCE/58            ?0        #117                 ?0                  	;0
	254 116  ASSIGN/38                 ?121      16?9                 $130                	;0
	255 117  BOOL_NOT/13               #132=     16?9                 ?0                  	;0
	256 117  JMPZ/43                   ?0        #132                 ?258                	;0	>>258
	257 118  GOTO/253                  ?0        ?106                 ?199                	;0
	258 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'fopen'         	;2	<<256
	259 120  FETCH_CONSTANT/99         #133=     ?0                   202:'ARCHIVE_PATH'  	;16
	260 120  CONCAT/8                  #134=     #133                 16?2                	;0
	261 120  CONCAT/8                  #135=     #134                 205:'/'             	;0
	262 120  CONCAT/8                  #136=     #135                 16?0                	;0
	263 120  CONCAT/8                  #137=     #136                 206:'.ts'           	;0
	264 120  SEND_VAL_EX/116           ?80       #137                 ?1                  	;0
	265 120  SEND_VAL_EX/116           ?96       207:'a'              ?2                  	;0
	266 120  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
	267 120  ASSIGN/38                 ?129      16?1                 $138                	;0
	268 122  GOTO/253                  ?0        ?160                 ?208                	;0
	269 124  NOP/0                     ?0        209:NULL             ?0                  	;4294967295
	*/
}

function aA260198262D3A85($ee6d1fc5d801b43f, $f7037fc395d8fcad)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   127  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   127  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   129  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
	3   131  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'intval'          	;1	<<2
	4   131  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'count'           	;1
	5   131  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'scandir'         	;1
	6   131  FETCH_CONSTANT/99         #6=       ?0                   7:'ARCHIVE_PATH'    	;16
	7   131  CONCAT/8                  #7=       #6                   16?0                	;0
	8   131  CONCAT/8                  #8=       #7                   10:'/'              	;0
	9   131  SEND_VAL_EX/116           ?80       #8                   ?1                  	;0
	10  131  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	11  131  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
	12  131  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
	13  131  SUB/2                     #11=      $10                  11:2                	;0
	14  131  SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
	15  131  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	16  131  ASSIGN/38                 ?7        16?2                 $12                 	;0
	17  132  MUL/3                     #14=      16?1                 12:24               	;0
	18  132  MUL/3                     #15=      #14                  13:60               	;0
	19  132  IS_SMALLER/19             #16=      #15                  16?2                	;0
	20  132  BOOL_NOT/13               #17=      #16                  ?0                  	;0
	21  132  JMPZ/43                   ?0        #17                  ?23                 	;0	>>23
	22  133  GOTO/253                  ?0        ?51                  ?14                 	;0
	23  135  MUL/3                     #18=      16?1                 15:24               	;0	<<21
	24  135  MUL/3                     #19=      #18                  16:60               	;0
	25  135  SUB/2                     #20=      16?2                 #19                 	;0
	26  135  ASSIGN/38                 ?15       16?3                 #20                 	;0
	27  136  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'array_values'   	;1
	28  136  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'array_filter'   	;1
	29  136  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'explode'        	;2
	30  136  SEND_VAL_EX/116           ?80       23:'
'               ?1                  	;0
	31  136  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'shell_exec'     	;1
	32  136  FETCH_CONSTANT/99         #22=      ?0                   26:'ARCHIVE_PATH'   	;16
	33  136  CONCAT/8                  #23=      29:'ls -tr '         #22                 	;0
	34  136  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'intval'         	;1
	35  136  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	36  136  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	37  136  CONCAT/8                  #25=      #23                  $24                 	;0
	38  136  CONCAT/8                  #26=      #25                  32:' | sed -e \'s/\\s\\+/\\n/g\''	;0
	39  136  SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
	40  136  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
	41  136  SEND_VAR_NO_REF_EX/50     ?96       $27                  ?2                  	;0
	42  136  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	43  136  SEND_VAR_NO_REF_EX/50     ?80       $28                  ?1                  	;0
	44  136  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	45  136  SEND_VAR_NO_REF_EX/50     ?80       $29                  ?1                  	;0
	46  136  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
	47  136  ASSIGN/38                 ?25       16?4                 $30                 	;0
	48  137  ASSIGN/38                 ?26       16?5                 33:0                	;0
	49  138  GOTO/253                  ?0        ?52                  ?34                 	;0
	50  140  GOTO/253                  ?0        ?52                  ?35                 	;0
	51  143  GOTO/253                  ?0        ?67                  ?36                 	;0
	52  146  IS_SMALLER/19             #33=      16?5                 16?3                	;0
	53  146  BOOL_NOT/13               #34=      #33                  ?0                  	;0
	54  146  JMPZ/43                   ?0        #34                  ?56                 	;0	>>56
	55  147  GOTO/253                  ?0        ?51                  ?37                 	;0
	56  149  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'unlink'         	;1	<<54
	57  149  FETCH_CONSTANT/99         #35=      ?0                   40:'ARCHIVE_PATH'   	;16
	58  149  CONCAT/8                  #36=      #35                  16?0                	;0
	59  149  CONCAT/8                  #37=      #36                  43:'/'              	;0
	60  149  FETCH_DIM_R/81            $38=      16?4                 16?5                	;0
	61  149  CONCAT/8                  #39=      #37                  $38                 	;0
	62  149  SEND_VAL_EX/116           ?80       #39                  ?1                  	;0
	63  149  DO_FCALL_BY_NAME/131      ?34       ?0                   ?0                  	;0
	64  151  POST_INC/36               #41=      16?5                 ?0                  	;0
	65  151  FREE/70                   ?0        #41                  ?0                  	;0
	66  152  GOTO/253                  ?0        ?50                  ?44                 	;0
	67  154  NOP/0                     ?0        45:NULL              ?0                  	;4294967295
	*/
}

function c7cC2f0DD6f71Ebb($ee6d1fc5d801b43f)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   169  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   171  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
	2   173  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'clearstatcache'  	;1	<<1
	3   173  SEND_VAL_EX/116           ?80       3:true               ?1                  	;0
	4   173  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
	5   174  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'file_exists'     	;1
	6   174  FETCH_CONSTANT/99         #4=       ?0                   6:'STREAMS_PATH'    	;16
	7   174  CONCAT/8                  #5=       #4                   16?0                	;0
	8   174  CONCAT/8                  #6=       #5                   9:'_.archive'       	;0
	9   174  SEND_VAL_EX/116           ?80       #6                   ?1                  	;0
	10  174  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	11  174  BOOL_NOT/13               #8=       $7                   ?0                  	;0
	12  174  JMPZ/43                   ?0        #8                   ?14                 	;0	>>14
	13  175  GOTO/253                  ?0        ?24                  ?10                 	;0
	14  177  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'intval'         	;1	<<12
	15  177  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'file_get_contents'	;1
	16  177  FETCH_CONSTANT/99         #9=       ?0                   15:'STREAMS_PATH'   	;16
	17  177  CONCAT/8                  #10=      #9                   16?0                	;0
	18  177  CONCAT/8                  #11=      #10                  18:'_.archive'      	;0
	19  177  SEND_VAL_EX/116           ?80       #11                  ?1                  	;0
	20  177  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	21  177  SEND_VAR_NO_REF_EX/50     ?80       $12                  ?1                  	;0
	22  177  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	23  177  ASSIGN/38                 ?11       16?1                 $13                 	;0
	24  179  ISSET_ISEMPTY_CV/197      #15=      16?1                 ?0                  	;16777216
	25  179  JMPZ/43                   ?0        #15                  ?27                 	;0	>>27
	26  180  GOTO/253                  ?0        ?29                  ?19                 	;0
	27  182  GOTO/253                  ?0        ?48                  ?20                 	;0	<<25
	28  185  GOTO/253                  ?0        ?37                  ?21                 	;0
	29  187  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'shell_exec'     	;1
	30  187  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1
	31  187  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	32  187  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	33  187  CONCAT/8                  #17=      26:'kill -9 `ps -ef | grep \'TVArchive\\[' $16                 	;0
	34  187  CONCAT/8                  #18=      #17                  27:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;0
	35  187  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
	36  187  DO_FCALL_BY_NAME/131      ?16       ?0                   ?0                  	;0
	37  189  GOTO/253                  ?0        ?38                  ?28                 	;0
	38  191  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'file_put_contents'	;2
	39  191  FETCH_CONSTANT/99         #20=      ?0                   31:'STREAMS_PATH'   	;16
	40  191  CONCAT/8                  #21=      #20                  16?0                	;0
	41  191  CONCAT/8                  #22=      #21                  34:'_.archive'      	;0
	42  191  SEND_VAL_EX/116           ?80       #22                  ?1                  	;0
	43  191  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'getmypid'       	;0
	44  191  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
	45  191  SEND_VAR_NO_REF_EX/50     ?96       $23                  ?2                  	;0
	46  191  DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
	47  192  GOTO/253                  ?0        ?85                  ?37                 	;0
	48  194  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'file_exists'    	;1
	49  194  CONCAT/8                  #25=      40:'/proc/'          16?1                	;0
	50  194  SEND_VAL_EX/116           ?80       #25                  ?1                  	;0
	51  194  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	52  194  BOOL_NOT/13               #27=      $26                  ?0                  	;0
	53  194  JMPZ/43                   ?0        #27                  ?55                 	;0	>>55
	54  195  GOTO/253                  ?0        ?28                  ?41                 	;0
	55  197  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'trim'           	;1	<<53
	56  197  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'file_get_contents'	;1
	57  197  ROPE_INIT/54              #29=      ?0                   46:'/proc/'         	;3
	58  197  ROPE_ADD/55               #29=      #29                  16?1                	;1
	59  197  ROPE_END/56               #28=      #29                  47:'/cmdline'       	;2
	60  197  SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	61  197  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	62  197  SEND_VAR_NO_REF_EX/50     ?80       $31                  ?1                  	;0
	63  197  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	64  197  ASSIGN/38                 ?30       16?2                 $32                 	;0
	65  198  ROPE_INIT/54              #35=      ?0                   48:'TVArchive['     	;3
	66  198  ROPE_ADD/55               #35=      #35                  16?0                	;1
	67  198  ROPE_END/56               #34=      #35                  49:']'              	;2
	68  198  IS_EQUAL/17               #37=      16?2                 #34                 	;0
	69  198  JMPZ_EX/46                #37=      #37                  ?74                 	;0	>>74
	70  198  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'is_numeric'     	;1
	71  198  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	72  198  DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	73  198  BOOL/52                   #37=      $38                  ?0                  	;0
	74  198  JMPZ_EX/46                #37=      #37                  ?77                 	;0	>>77	<<69
	75  198  IS_SMALLER/19             #39=      52:0                 16?1                	;0
	76  198  BOOL/52                   #37=      #39                  ?0                  	;0
	77  198  BOOL_NOT/13               #40=      #37                  ?0                  	;0	<<74
	78  198  JMPZ/43                   ?0        #40                  ?80                 	;0	>>80
	79  199  GOTO/253                  ?0        ?84                  ?53                 	;0
	80  201  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'posix_kill'     	;2	<<78
	81  201  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	82  201  SEND_VAL_EX/116           ?96       56:9                 ?2                  	;0
	83  201  DO_FCALL_BY_NAME/131      ?38       ?0                   ?0                  	;0
	84  203  GOTO/253                  ?0        ?28                  ?57                 	;0
	85  205  NOP/0                     ?0        58:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   210  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   211  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   211  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   211  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   211  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   211  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   212  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   214  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   214  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   216  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?38                  ?0                  	;0	>>38
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'register_shutdown_function'	;1
2   6    SEND_VAL_EX/116           ?80       3:'shutdown'         ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
5   7    SEND_VAL_EX/116           ?80       6:'\\'               ?1                  	;0
6   7    SEND_VAL_EX/116           ?96       7:'/'                ?2                  	;0
7   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'dirname'         	;1
8   7    FETCH_DIM_FUNC_ARG/93     $4=       16?0                 10:0                	;1
9   7    SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
10  7    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
11  7    SEND_VAR_NO_REF_EX/50     ?112      $5                   ?3                  	;0
12  7    DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
13  7    CONCAT/8                  #7=       $6                   11:'/../../www/init.php'	;0
14  7    INCLUDE_OR_EVAL/73        ?5        #7                   ?0                  	;8
15  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'intval'         	;1
16  8    FETCH_DIM_FUNC_ARG/93     $9=       16?0                 14:1                	;1
17  8    SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
18  8    DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
19  8    ASSIGN/38                 ?8        16?1                 $10                 	;0
20  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'c7cC2f0dd6f71EbB'	;1
21  9    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
22  9    DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
23  10   GOTO/253                  ?0        ?24                  ?17                 	;0
24  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'set_time_limit' 	;1
25  12   SEND_VAL_EX/116           ?80       20:0                 ?1                  	;0
26  12   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
27  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'cli_set_process_title'	;1
28  13   ROPE_INIT/54              #15=      ?0                   23:'TVArchive['     	;3
29  13   ROPE_ADD/55               #15=      #15                  16?1                	;1
30  13   ROPE_END/56               #14=      #15                  24:']'              	;2
31  13   SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
32  13   DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
33  15   NOP/0                     ?0        ?0                   ?0                  	;0
34  125  INIT_FCALL/61             ?0        ?2320                25:'ed8dbf4549416fa2'	;0
35  125  DO_FCALL/60               ?15       ?0                   ?0                  	;0
36  127  NOP/0                     ?0        ?0                   ?0                  	;0
37  155  GOTO/253                  ?0        ?61                  ?26                 	;0
38  157  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'posix_getpwuid' 	;1	<<0
39  157  INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'posix_geteuid'  	;0
40  157  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
41  157  SEND_VAR_NO_REF_EX/50     ?80       $19                  ?1                  	;0
42  157  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
43  157  FETCH_DIM_R/81            $21=      $20                  31:'name'           	;0
44  157  IS_NOT_EQUAL/18           #22=      $21                  32:'xui'            	;0
45  157  BOOL_NOT/13               #23=      #22                  ?0                  	;0
46  157  JMPZ/43                   ?0        #23                  ?48                 	;0	>>48
47  158  GOTO/253                  ?0        ?49                  ?33                 	;0
48  160  EXIT/79                   ?0        34:'Please run as XUI!
' ?0                  	;0	<<46
49  162  BEGIN_SILENCE/57          #24=      ?0                   ?0                  	;0
50  162  FETCH_R/80                $25=      35:'argc'            ?0                  	;268435456
51  162  END_SILENCE/58            ?0        #24                  ?0                  	;0
52  162  BOOL_NOT/13               #26=      $25                  ?0                  	;0
53  162  JMPNZ_EX/47               #26=      #26                  ?56                 	;0	>>56
54  162  IS_SMALLER_OR_EQUAL/20    #27=      16?2                 36:1                	;0
55  162  BOOL/52                   #26=      #27                  ?0                  	;0
56  162  BOOL_NOT/13               #28=      #26                  ?0                  	;0	<<53
57  162  JMPZ/43                   ?0        #28                  ?59                 	;0	>>59
58  163  GOTO/253                  ?0        ?1                   ?37                 	;0
59  165  EXIT/79                   ?0        38:0                 ?0                  	;0	<<57
60  166  GOTO/253                  ?0        ?1                   ?39                 	;0
61  169  NOP/0                     ?0        ?0                   ?0                  	;0
62  206  GOTO/253                  ?0        ?63                  ?40                 	;0
63  208  NOP/0                     ?0        ?0                   ?0                  	;0
64  217  NOP/0                     ?0        41:1                 ?0                  	;4294967295
*/

?>