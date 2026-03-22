<?php


function Ed8Dbf4549416FA2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   8    BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   8    BIND_GLOBAL/168           ?0        16?1                 1:'Ca53486c36275349'	;0
	2   8    BIND_GLOBAL/168           ?0        16?2                 2:'Abcb228699a7f743'	;0
	3   9    SWITCH_STRING/188         ?0        16?1                 3:array (
  'images' => 11,
  'duplicates' => 323,
  'bouquets' => 382,
)	;641
	4   10   CASE/48                   #24=      16?1                 4:'images'          	;0	>>6
	5   10   JMPNZ/44                  ?0        #24                  ?11                 	;0	>>11
	6   148  CASE/48                   #24=      16?1                 5:'duplicates'      	;0	>>8	<<4
	7   148  JMPNZ/44                  ?0        #24                  ?323                	;0	>>323
	8   184  CASE/48                   #24=      16?1                 6:'bouquets'        	;0	>>10	<<6
	9   184  JMPNZ/44                  ?0        #24                  ?382                	;0	>>382
	10  184  JMP/42                    ?0        ?641                 ?0                  	;0	>>641	<<8
	11  11   GOTO/253                  ?0        ?304                 ?7                  	;0	<<5
	12  14   INIT_METHOD_CALL/112      ?0        16?0                 8:'query'           	;1
	13  14   SEND_VAL_EX/116           ?80       10:'SELECT COUNT(*) AS `count` FROM `streams_series`;' ?1                  	;0
	14  14   DO_FCALL/60               ?1        ?0                   ?0                  	;0
	15  15   INIT_METHOD_CALL/112      ?0        16?0                 11:'get_row'        	;0
	16  15   DO_FCALL/60               $26=      ?0                   ?0                  	;0
	17  15   FETCH_DIM_R/81            $27=      $26                  13:'count'          	;0
	18  15   ASSIGN/38                 ?4        16?3                 $27                 	;0
	19  16   IS_SMALLER/19             #29=      14:0                 16?3                	;0
	20  16   BOOL_NOT/13               #30=      #29                  ?0                  	;0
	21  16   JMPZ/43                   ?0        #30                  ?23                 	;0	>>23
	22  17   GOTO/253                  ?0        ?93                  ?15                 	;0
	23  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'range'          	;3	<<21
	24  19   SEND_VAL_EX/116           ?80       18:0                 ?1                  	;0
	25  19   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	26  19   SEND_VAL_EX/116           ?112      19:1000              ?3                  	;0
	27  19   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	28  19   ASSIGN/38                 ?8        16?4                 $31                 	;0
	29  20   GOTO/253                  ?0        ?30                  ?20                 	;0
	30  22   JMPZ/43                   ?0        16?4                 ?32                 	;0	>>32
	31  23   GOTO/253                  ?0        ?33                  ?21                 	;0
	32  25   ASSIGN/38                 ?9        16?4                 22:array (
  0 => 0,
)	;0	<<30
	33  27   FE_RESET_R/77             $34=      16?4                 ?91                 	;0
	34  27   FE_FETCH_R/78             ?0        $34                  16?5                	;91	>>91	<<90
	35  29   INIT_METHOD_CALL/112      ?0        16?0                 23:'query'          	;1	<<86
	36  29   CONCAT/8                  #35=      25:'SELECT `cover`, `cover_big` FROM `streams_series` LIMIT ' 16?5                	;0
	37  29   CONCAT/8                  #36=      #35                  26:', 1000;'        	;0
	38  29   SEND_VAL_EX/116           ?80       #36                  ?1                  	;0
	39  29   DO_FCALL/60               ?13       ?0                   ?0                  	;0
	40  30   INIT_METHOD_CALL/112      ?0        16?0                 27:'get_rows'       	;0
	41  30   DO_FCALL/60               $38=      ?0                   ?0                  	;0
	42  30   ASSIGN/38                 ?15       16?6                 $38                 	;0
	43  31   FE_RESET_R/77             $40=      16?6                 ?84                 	;0
	44  31   FE_FETCH_R/78             ?0        $40                  16?7                	;84	>>84	<<83
	45  32   ISSET_ISEMPTY_DIM_OBJ/115 #41=      16?7                 29:'cover'          	;16777216
	46  32   BOOL_NOT/13               #42=      #41                  ?0                  	;0
	47  32   JMPZ_EX/46                #42=      #42                  ?56                 	;0	>>56
	48  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'substr'         	;3
	49  32   FETCH_DIM_FUNC_ARG/93     $43=      16?7                 32:'cover'          	;1
	50  32   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
	51  32   SEND_VAL_EX/116           ?96       33:0                 ?2                  	;0
	52  32   SEND_VAL_EX/116           ?112      34:2                 ?3                  	;0
	53  32   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
	54  32   IS_EQUAL/17               #45=      $44                  35:'s:'             	;0
	55  32   BOOL/52                   #42=      #45                  ?0                  	;0
	56  32   BOOL_NOT/13               #46=      #42                  ?0                  	;0	<<47
	57  32   JMPZ/43                   ?0        #46                  ?61                 	;0	>>61
	58  33   NOP/0                     ?0        ?0                   ?0                  	;1
	59  33   NOP/0                     ?0        ?0                   ?0                  	;1
	60  33   GOTO/253                  ?0        ?64                  ?36                 	;0
	61  35   FETCH_DIM_R/81            $48=      16?7                 37:'cover'          	;0	<<57
	62  35   ASSIGN_DIM/147            ?23       16?8                 ?4397406            	;0
	63  35   OP_DATA/137               ?0        $48                  ?0                  	;0
	64  37   ISSET_ISEMPTY_DIM_OBJ/115 #49=      16?7                 38:'cover_big'      	;16777216
	65  37   BOOL_NOT/13               #50=      #49                  ?0                  	;0
	66  37   JMPZ_EX/46                #50=      #50                  ?75                 	;0	>>75
	67  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'substr'         	;3
	68  37   FETCH_DIM_FUNC_ARG/93     $51=      16?7                 41:'cover_big'      	;1
	69  37   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
	70  37   SEND_VAL_EX/116           ?96       42:0                 ?2                  	;0
	71  37   SEND_VAL_EX/116           ?112      43:2                 ?3                  	;0
	72  37   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	73  37   IS_EQUAL/17               #53=      $52                  44:'s:'             	;0
	74  37   BOOL/52                   #50=      #53                  ?0                  	;0
	75  37   BOOL_NOT/13               #54=      #50                  ?0                  	;0	<<66
	76  37   JMPZ/43                   ?0        #54                  ?80                 	;0	>>80
	77  38   NOP/0                     ?0        ?0                   ?0                  	;1
	78  38   NOP/0                     ?0        ?0                   ?0                  	;1
	79  38   GOTO/253                  ?0        ?83                  ?45                 	;0
	80  40   FETCH_DIM_R/81            $56=      16?7                 46:'cover_big'      	;0	<<76
	81  40   ASSIGN_DIM/147            ?31       16?8                 ?4397406            	;0
	82  40   OP_DATA/137               ?0        $56                  ?0                  	;0
	83  42   JMP/42                    ?0        ?44                  ?0                  	;0	>>44
	84  42   FE_FREE/127               ?0        $40                  ?0                  	;0	<<43
	85  44   JMP/42                    ?0        ?90                  ?0                  	;0	>>90
	86  45   CATCH/107                 ?1        47:'Exception'       16?9                	;0 CB	>>90,35
	87  46   CONCAT/8                  #57=      49:'Error: '         16?9                	;0
	88  46   CONCAT/8                  #58=      #57                  50:'
'              	;0
	89  46   ECHO/40                   ?0        #58                  ?0                  	;0
	90  48   JMP/42                    ?0        ?34                  ?0                  	;0	>>34	<<85,86
	91  48   FE_FREE/127               ?0        $34                  ?0                  	;0	<<33
	92  51   GOTO/253                  ?0        ?93                  ?51                 	;0
	93  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'array_unique'   	;1
	94  54   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	95  54   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	96  54   ASSIGN/38                 ?36       16?8                 $59                 	;0
	97  55   FE_RESET_R/77             $61=      16?8                 ?179                	;0
	98  55   FE_FETCH_R/78             ?0        $61                  16?10               	;179	>>179	<<178
	99  56   NOP/0                     ?0        ?0                   ?0                  	;1
	100 56   GOTO/253                  ?0        ?143                 ?54                 	;0
	101 62   NOP/0                     ?0        ?0                   ?0                  	;1
	102 62   GOTO/253                  ?0        ?178                 ?55                 	;0
	103 64   INIT_STATIC_METHOD_CALL/113 ?0        56:'Xui\\Functions'  58:'decrypt'        	;3
	104 64   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	105 64   FETCH_STATIC_PROP_FUNC_ARG/177 $62=      60:'rSettings'       61:'XUI'            	;2
	106 64   FETCH_DIM_FUNC_ARG/93     $63=      $62                  63:'live_streaming_pass'	;2
	107 64   SEND_VAR_EX/66            ?96       $63                  ?2                  	;0
	108 64   FETCH_CONSTANT/99         #64=      ?0                   64:'OPENSSL_EXTRA'  	;16
	109 64   SEND_VAL_EX/116           ?112      #64                  ?3                  	;0
	110 64   DO_FCALL/60               $65=      ?0                   ?0                  	;0
	111 64   ASSIGN/38                 ?42       16?11                $65                 	;0
	112 65   ISSET_ISEMPTY_CV/197      #67=      16?11                ?0                  	;16777216
	113 65   BOOL_NOT/13               #68=      #67                  ?0                  	;0
	114 65   JMPZ_EX/46                #68=      #68                  ?122                	;0	>>122
	115 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'substr'         	;3
	116 65   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	117 65   SEND_VAL_EX/116           ?96       69:0                 ?2                  	;0
	118 65   SEND_VAL_EX/116           ?112      70:4                 ?3                  	;0
	119 65   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
	120 65   IS_EQUAL/17               #70=      $69                  71:'http'           	;0
	121 65   BOOL/52                   #68=      #70                  ?0                  	;0
	122 65   BOOL_NOT/13               #71=      #68                  ?0                  	;0	<<114
	123 65   JMPZ/43                   ?0        #71                  ?126                	;0	>>126
	124 66   NOP/0                     ?0        ?0                   ?0                  	;1
	125 66   GOTO/253                  ?0        ?101                 ?72                 	;0
	126 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'file_exists'    	;1	<<123
	127 68   FETCH_CONSTANT/99         #72=      ?0                   75:'IMAGES_PATH'    	;16
	128 68   FETCH_DIM_R/81            $73=      16?12                78:'basename'       	;0
	129 68   CONCAT/8                  #74=      #72                  $73                 	;0
	130 68   SEND_VAL_EX/116           ?80       #74                  ?1                  	;0
	131 68   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
	132 68   JMPZ/43                   ?0        $75                  ?135                	;0	>>135
	133 69   NOP/0                     ?0        ?0                   ?0                  	;1
	134 69   GOTO/253                  ?0        ?101                 ?79                 	;0
	135 71   CONCAT/8                  #76=      80:'Downloading: '   16?11               	;0	<<132
	136 71   CONCAT/8                  #77=      #76                  81:'
'              	;0
	137 71   ECHO/40                   ?0        #77                  ?0                  	;0
	138 72   INIT_STATIC_METHOD_CALL/113 ?0        82:'XUI'             84:'cCcee53491F4Af9c'	;1
	139 72   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	140 72   DO_FCALL/60               ?54       ?0                   ?0                  	;0
	141 73   NOP/0                     ?0        ?0                   ?0                  	;1
	142 73   GOTO/253                  ?0        ?101                 ?86                 	;0
	143 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'explode'        	;3
	144 75   SEND_VAL_EX/116           ?80       89:':'               ?1                  	;0
	145 75   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	146 75   SEND_VAL_EX/116           ?112      90:3                 ?3                  	;0
	147 75   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
	148 75   ASSIGN/38                 ?56       16?13                $79                 	;0
	149 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'intval'         	;1
	150 76   FETCH_DIM_FUNC_ARG/93     $81=      16?13                93:1                	;1
	151 76   SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
	152 76   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
	153 76   FETCH_CONSTANT/99         #83=      ?0                   94:'SERVER_ID'      	;16
	154 76   IS_EQUAL/17               #84=      $82                  #83                 	;0
	155 76   BOOL_NOT/13               #85=      #84                  ?0                  	;0
	156 76   JMPZ/43                   ?0        #85                  ?159                	;0	>>159
	157 77   NOP/0                     ?0        ?0                   ?0                  	;1
	158 77   GOTO/253                  ?0        ?101                 ?97                 	;0
	159 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'explode'        	;2	<<156
	160 79   SEND_VAL_EX/116           ?80       100:'/'              ?1                  	;0
	161 79   FETCH_DIM_FUNC_ARG/93     $86=      16?13                101:2               	;2
	162 79   SEND_VAR_EX/66            ?96       $86                  ?2                  	;0
	163 79   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
	164 79   ASSIGN/38                 ?64       16?14                $87                 	;0
	165 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'pathinfo'      	;1
	166 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'count'         	;1
	167 80   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	168 80   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
	169 80   SUB/2                     #90=      $89                  106:1               	;0
	170 80   FETCH_DIM_FUNC_ARG/93     $91=      16?14                #90                 	;1
	171 80   SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
	172 80   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	173 80   ASSIGN/38                 ?69       16?12                $92                 	;0
	174 81   FETCH_DIM_R/81            $94=      16?12                107:'filename'      	;0
	175 81   ASSIGN/38                 ?71       16?10                $94                 	;0
	176 82   NOP/0                     ?0        ?0                   ?0                  	;1
	177 82   GOTO/253                  ?0        ?103                 ?108                	;0
	178 83   JMP/42                    ?0        ?98                  ?0                  	;0	>>98
	179 83   FE_FREE/127               ?0        $61                  ?0                  	;0	<<97
	180 86   GOTO/253                  ?0        ?642                 ?109                	;0
	181 87   GOTO/253                  ?0        ?323                 ?110                	;0
	182 89   JMPZ/43                   ?0        16?4                 ?184                	;0	>>184
	183 90   GOTO/253                  ?0        ?185                 ?111                	;0
	184 92   ASSIGN/38                 ?72       16?4                 112:array (
  0 => 0,
)	;0	<<182
	185 94   FE_RESET_R/77             $97=      16?4                 ?302                	;0
	186 94   FE_FETCH_R/78             ?0        $97                  16?5                	;302	>>302	<<301
	187 96   INIT_METHOD_CALL/112      ?0        16?0                 113:'query'         	;1	<<297
	188 96   CONCAT/8                  #98=      115:'SELECT `stream_icon`, `movie_properties` FROM `streams` LIMIT ' 16?5                	;0
	189 96   CONCAT/8                  #99=      #98                  116:', 1000;'       	;0
	190 96   SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
	191 96   DO_FCALL/60               ?76       ?0                   ?0                  	;0
	192 97   INIT_METHOD_CALL/112      ?0        16?0                 117:'get_rows'      	;0
	193 97   DO_FCALL/60               $101=     ?0                   ?0                  	;0
	194 97   ASSIGN/38                 ?78       16?6                 $101                	;0
	195 98   FE_RESET_R/77             $103=     16?6                 ?295                	;0
	196 98   FE_FETCH_R/78             ?0        $103                 16?7                	;295	>>295	<<294
	197 99   NOP/0                     ?0        ?0                   ?0                  	;1
	198 99   NOP/0                     ?0        ?0                   ?0                  	;1
	199 99   GOTO/253                  ?0        ?225                 ?119                	;0
	200 101  FETCH_DIM_IS/90           $104=     16?15                120:'backdrop_path' 	;0
	201 101  ISSET_ISEMPTY_DIM_OBJ/115 #105=     $104                 121:0               	;16777216
	202 101  BOOL_NOT/13               #106=     #105                 ?0                  	;0
	203 101  JMPZ_EX/46                #106=     #106                 ?213                	;0	>>213
	204 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'substr'        	;3
	205 101  FETCH_DIM_FUNC_ARG/93     $107=     16?15                124:'backdrop_path' 	;1
	206 101  FETCH_DIM_FUNC_ARG/93     $108=     $107                 125:0               	;1
	207 101  SEND_VAR_EX/66            ?80       $108                 ?1                  	;0
	208 101  SEND_VAL_EX/116           ?96       126:0                ?2                  	;0
	209 101  SEND_VAL_EX/116           ?112      127:2                ?3                  	;0
	210 101  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
	211 101  IS_EQUAL/17               #110=     $109                 128:'s:'            	;0
	212 101  BOOL/52                   #106=     #110                 ?0                  	;0
	213 101  BOOL_NOT/13               #111=     #106                 ?0                  	;0	<<203
	214 101  JMPZ/43                   ?0        #111                 ?218                	;0	>>218
	215 102  NOP/0                     ?0        ?0                   ?0                  	;1
	216 102  NOP/0                     ?0        ?0                   ?0                  	;1
	217 102  GOTO/253                  ?0        ?222                 ?129                	;0
	218 104  FETCH_DIM_R/81            $113=     16?15                130:'backdrop_path' 	;0	<<214
	219 104  FETCH_DIM_R/81            $114=     $113                 131:0               	;0
	220 104  ASSIGN_DIM/147            ?88       16?8                 ?4397406            	;0
	221 104  OP_DATA/137               ?0        $114                 ?0                  	;0
	222 107  NOP/0                     ?0        ?0                   ?0                  	;1
	223 107  NOP/0                     ?0        ?0                   ?0                  	;1
	224 107  GOTO/253                  ?0        ?294                 ?132                	;0
	225 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'json_decode'   	;2
	226 109  FETCH_DIM_FUNC_ARG/93     $115=     16?7                 135:'movie_properties'	;1
	227 109  SEND_VAR_EX/66            ?80       $115                 ?1                  	;0
	228 109  SEND_VAL_EX/116           ?96       136:true             ?2                  	;0
	229 109  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
	230 109  ASSIGN/38                 ?93       16?15                $116                	;0
	231 110  ISSET_ISEMPTY_DIM_OBJ/115 #118=     16?7                 137:'stream_icon'   	;16777216
	232 110  BOOL_NOT/13               #119=     #118                 ?0                  	;0
	233 110  JMPZ_EX/46                #119=     #119                 ?242                	;0	>>242
	234 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'substr'        	;3
	235 110  FETCH_DIM_FUNC_ARG/93     $120=     16?7                 140:'stream_icon'   	;1
	236 110  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
	237 110  SEND_VAL_EX/116           ?96       141:0                ?2                  	;0
	238 110  SEND_VAL_EX/116           ?112      142:2                ?3                  	;0
	239 110  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	240 110  IS_EQUAL/17               #122=     $121                 143:'s:'            	;0
	241 110  BOOL/52                   #119=     #122                 ?0                  	;0
	242 110  BOOL_NOT/13               #123=     #119                 ?0                  	;0	<<233
	243 110  JMPZ/43                   ?0        #123                 ?247                	;0	>>247
	244 111  NOP/0                     ?0        ?0                   ?0                  	;1
	245 111  NOP/0                     ?0        ?0                   ?0                  	;1
	246 111  GOTO/253                  ?0        ?250                 ?144                	;0
	247 113  FETCH_DIM_R/81            $125=     16?7                 145:'stream_icon'   	;0	<<243
	248 113  ASSIGN_DIM/147            ?100      16?8                 ?4397406            	;0
	249 113  OP_DATA/137               ?0        $125                 ?0                  	;0
	250 115  ISSET_ISEMPTY_DIM_OBJ/115 #126=     16?15                146:'movie_image'   	;16777216
	251 115  BOOL_NOT/13               #127=     #126                 ?0                  	;0
	252 115  JMPZ_EX/46                #127=     #127                 ?261                	;0	>>261
	253 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'substr'        	;3
	254 115  FETCH_DIM_FUNC_ARG/93     $128=     16?15                149:'movie_image'   	;1
	255 115  SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
	256 115  SEND_VAL_EX/116           ?96       150:0                ?2                  	;0
	257 115  SEND_VAL_EX/116           ?112      151:2                ?3                  	;0
	258 115  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
	259 115  IS_EQUAL/17               #130=     $129                 152:'s:'            	;0
	260 115  BOOL/52                   #127=     #130                 ?0                  	;0
	261 115  BOOL_NOT/13               #131=     #127                 ?0                  	;0	<<252
	262 115  JMPZ/43                   ?0        #131                 ?266                	;0	>>266
	263 116  NOP/0                     ?0        ?0                   ?0                  	;1
	264 116  NOP/0                     ?0        ?0                   ?0                  	;1
	265 116  GOTO/253                  ?0        ?272                 ?153                	;0
	266 118  NOP/0                     ?0        ?0                   ?0                  	;1	<<262
	267 118  NOP/0                     ?0        ?0                   ?0                  	;1
	268 118  GOTO/253                  ?0        ?269                 ?154                	;0
	269 120  FETCH_DIM_R/81            $133=     16?15                155:'movie_image'   	;0
	270 120  ASSIGN_DIM/147            ?108      16?8                 ?4397406            	;0
	271 120  OP_DATA/137               ?0        $133                 ?0                  	;0
	272 122  ISSET_ISEMPTY_DIM_OBJ/115 #134=     16?15                156:'cover_big'     	;16777216
	273 122  BOOL_NOT/13               #135=     #134                 ?0                  	;0
	274 122  JMPZ_EX/46                #135=     #135                 ?283                	;0	>>283
	275 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'substr'        	;3
	276 122  FETCH_DIM_FUNC_ARG/93     $136=     16?15                159:'cover_big'     	;1
	277 122  SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
	278 122  SEND_VAL_EX/116           ?96       160:0                ?2                  	;0
	279 122  SEND_VAL_EX/116           ?112      161:2                ?3                  	;0
	280 122  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
	281 122  IS_EQUAL/17               #138=     $137                 162:'s:'            	;0
	282 122  BOOL/52                   #135=     #138                 ?0                  	;0
	283 122  BOOL_NOT/13               #139=     #135                 ?0                  	;0	<<274
	284 122  JMPZ/43                   ?0        #139                 ?288                	;0	>>288
	285 123  NOP/0                     ?0        ?0                   ?0                  	;1
	286 123  NOP/0                     ?0        ?0                   ?0                  	;1
	287 123  GOTO/253                  ?0        ?291                 ?163                	;0
	288 125  FETCH_DIM_R/81            $141=     16?15                164:'cover_big'     	;0	<<284
	289 125  ASSIGN_DIM/147            ?116      16?8                 ?4397406            	;0
	290 125  OP_DATA/137               ?0        $141                 ?0                  	;0
	291 127  NOP/0                     ?0        ?0                   ?0                  	;1
	292 127  NOP/0                     ?0        ?0                   ?0                  	;1
	293 127  GOTO/253                  ?0        ?200                 ?165                	;0
	294 128  JMP/42                    ?0        ?196                 ?0                  	;0	>>196
	295 128  FE_FREE/127               ?0        $103                 ?0                  	;0	<<195
	296 130  JMP/42                    ?0        ?301                 ?0                  	;0	>>301
	297 131  CATCH/107                 ?1        166:'Exception'      16?9                	;0 CB	>>301,187
	298 132  CONCAT/8                  #142=     168:'Error: '        16?9                	;0
	299 132  CONCAT/8                  #143=     #142                 169:'
'             	;0
	300 132  ECHO/40                   ?0        #143                 ?0                  	;0
	301 134  JMP/42                    ?0        ?186                 ?0                  	;0	>>186	<<296,297
	302 134  FE_FREE/127               ?0        $97                  ?0                  	;0	<<185
	303 137  GOTO/253                  ?0        ?12                  ?170                	;0
	304 139  ASSIGN/38                 ?120      16?8                 171:array (
)       	;0
	305 140  INIT_METHOD_CALL/112      ?0        16?0                 172:'query'         	;1
	306 140  SEND_VAL_EX/116           ?80       174:'SELECT COUNT(*) AS `count` FROM `streams`;' ?1                  	;0
	307 140  DO_FCALL/60               ?121      ?0                   ?0                  	;0
	308 141  INIT_METHOD_CALL/112      ?0        16?0                 175:'get_row'       	;0
	309 141  DO_FCALL/60               $146=     ?0                   ?0                  	;0
	310 141  FETCH_DIM_R/81            $147=     $146                 177:'count'         	;0
	311 141  ASSIGN/38                 ?124      16?3                 $147                	;0
	312 142  IS_SMALLER/19             #149=     178:0                16?3                	;0
	313 142  BOOL_NOT/13               #150=     #149                 ?0                  	;0
	314 142  JMPZ/43                   ?0        #150                 ?316                	;0	>>316
	315 143  GOTO/253                  ?0        ?12                  ?179                	;0
	316 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'range'         	;3	<<314
	317 145  SEND_VAL_EX/116           ?80       182:0                ?1                  	;0
	318 145  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	319 145  SEND_VAL_EX/116           ?112      183:1000             ?3                  	;0
	320 145  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
	321 145  ASSIGN/38                 ?128      16?4                 $151                	;0
	322 146  GOTO/253                  ?0        ?182                 ?184                	;0
	323 149  GOTO/253                  ?0        ?345                 ?185                	;0	<<7
	324 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'count'         	;1
	325 152  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
	326 152  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
	327 152  IS_SMALLER/19             #154=     188:0                $153                	;0
	328 152  BOOL_NOT/13               #155=     #154                 ?0                  	;0
	329 152  JMPZ/43                   ?0        #155                 ?331                	;0	>>331
	330 153  GOTO/253                  ?0        ?342                 ?189                	;0
	331 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'array_chunk'   	;2	<<329
	332 155  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
	333 155  SEND_VAL_EX/116           ?96       192:100              ?2                  	;0
	334 155  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
	335 155  FE_RESET_R/77             $157=     $156                 ?341                	;0
	336 155  FE_FETCH_R/78             ?0        $157                 16?17               	;341	>>341	<<340
	337 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'deleteStreams' 	;1
	338 156  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	339 156  DO_FCALL_BY_NAME/131      ?134      ?0                   ?0                  	;0
	340 157  JMP/42                    ?0        ?336                 ?0                  	;0	>>336
	341 157  FE_FREE/127               ?0        $157                 ?0                  	;0	<<335
	342 161  GOTO/253                  ?0        ?343                 ?195                	;0
	343 163  GOTO/253                  ?0        ?642                 ?196                	;0
	344 164  GOTO/253                  ?0        ?382                 ?197                	;0
	345 166  ASSIGN/38                 $159=     16?16                198:array (
)       	;0
	346 166  ASSIGN/38                 ?136      16?18                $159                	;0
	347 167  INIT_METHOD_CALL/112      ?0        16?0                 199:'query'         	;1
	348 167  SEND_VAL_EX/116           ?80       201:'SELECT `a`.`id`, `a`.`stream_source` FROM `streams` `a` INNER JOIN (SELECT  `stream_source`, COUNT(*) `totalCount` FROM `streams` WHERE `type` IN (2,5) GROUP BY `stream_source`) `b` ON `a`.`stream_source` = `b`.`stream_source` WHERE `b`.`totalCount` > 1;' ?1                  	;0
	349 167  DO_FCALL/60               ?137      ?0                   ?0                  	;0
	350 168  INIT_METHOD_CALL/112      ?0        16?0                 202:'get_rows'      	;0
	351 168  DO_FCALL/60               $162=     ?0                   ?0                  	;0
	352 168  FE_RESET_R/77             $163=     $162                 ?363                	;0
	353 168  FE_FETCH_R/78             ?0        $163                 16?19               	;363	>>363	<<362
	354 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'md5'           	;1
	355 169  FETCH_DIM_FUNC_ARG/93     $164=     16?19                206:'stream_source' 	;1
	356 169  SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
	357 169  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
	358 169  FETCH_DIM_R/81            $168=     16?19                207:'id'            	;0
	359 169  FETCH_DIM_W/84            $166=     16?18                $165                	;0
	360 169  ASSIGN_DIM/147            ?143      $166                 ?4414262            	;0
	361 169  OP_DATA/137               ?0        $168                 ?0                  	;0
	362 170  JMP/42                    ?0        ?353                 ?0                  	;0	>>353
	363 170  FE_FREE/127               ?0        $163                 ?0                  	;0	<<352
	364 173  FE_RESET_R/77             $169=     16?18                ?380                	;0
	365 173  FE_FETCH_R/78             #170=     $169                 16?20               	;380	>>380	<<379
	366 173  ASSIGN/38                 ?147      16?2                 #170                	;0
	367 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'array_shift'   	;1
	368 174  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
	369 174  DO_FCALL_BY_NAME/131      ?148      ?0                   ?0                  	;0
	370 175  FE_RESET_R/77             $173=     16?20                ?378                	;0
	371 175  FE_FETCH_R/78             ?0        $173                 16?21               	;378	>>378	<<377
	372 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'intval'        	;1
	373 176  SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
	374 176  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
	375 176  ASSIGN_DIM/147            ?150      16?16                ?4428375            	;0
	376 176  OP_DATA/137               ?0        $175                 ?0                  	;0
	377 177  JMP/42                    ?0        ?371                 ?0                  	;0	>>371
	378 177  FE_FREE/127               ?0        $173                 ?0                  	;0	<<370
	379 180  JMP/42                    ?0        ?365                 ?0                  	;0	>>365
	380 180  FE_FREE/127               ?0        $169                 ?0                  	;0	<<364
	381 182  GOTO/253                  ?0        ?324                 ?212                	;0
	382 185  GOTO/253                  ?0        ?383                 ?213                	;0	<<9
	383 187  ASSIGN/38                 ?152      16?16                214:array (
  0 => 
  array (
  ),
  1 => 
  array (
  ),
)	;0
	384 188  INIT_METHOD_CALL/112      ?0        16?0                 215:'query'         	;1
	385 188  SEND_VAL_EX/116           ?80       217:'SELECT `id` FROM `streams`;' ?1                  	;0
	386 188  DO_FCALL/60               ?153      ?0                   ?0                  	;0
	387 189  INIT_METHOD_CALL/112      ?0        16?0                 218:'num_rows'      	;0
	388 189  DO_FCALL/60               $178=     ?0                   ?0                  	;0
	389 189  IS_SMALLER/19             #179=     220:0                $178                	;0
	390 189  BOOL_NOT/13               #180=     #179                 ?0                  	;0
	391 189  JMPZ/43                   ?0        #180                 ?393                	;0	>>393
	392 190  GOTO/253                  ?0        ?618                 ?221                	;0
	393 192  INIT_METHOD_CALL/112      ?0        16?0                 222:'get_rows'      	;0	<<391
	394 192  DO_FCALL/60               $181=     ?0                   ?0                  	;0
	395 192  FE_RESET_R/77             $182=     $181                 ?405                	;0
	396 192  FE_FETCH_R/78             ?0        $182                 16?19               	;405	>>405	<<404
	397 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'intval'        	;1
	398 193  FETCH_DIM_FUNC_ARG/93     $185=     16?19                227:'id'            	;1
	399 193  SEND_VAR_EX/66            ?80       $185                 ?1                  	;0
	400 193  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
	401 193  FETCH_DIM_W/84            $183=     16?16                224:0               	;0
	402 193  ASSIGN_DIM/147            ?160      $183                 ?4414262            	;0
	403 193  OP_DATA/137               ?0        $186                 ?0                  	;0
	404 194  JMP/42                    ?0        ?396                 ?0                  	;0	>>396
	405 194  FE_FREE/127               ?0        $182                 ?0                  	;0	<<395
	406 197  GOTO/253                  ?0        ?618                 ?228                	;0
	407 200  GOTO/253                  ?0        ?641                 ?229                	;0
	408 203  INIT_METHOD_CALL/112      ?0        16?0                 230:'query'         	;1
	409 203  SEND_VAL_EX/116           ?80       232:'SELECT * FROM `bouquets` ORDER BY `bouquet_order` ASC;' ?1                  	;0
	410 203  DO_FCALL/60               ?163      ?0                   ?0                  	;0
	411 204  INIT_METHOD_CALL/112      ?0        16?0                 233:'num_rows'      	;0
	412 204  DO_FCALL/60               $188=     ?0                   ?0                  	;0
	413 204  IS_SMALLER/19             #189=     235:0                $188                	;0
	414 204  BOOL_NOT/13               #190=     #189                 ?0                  	;0
	415 204  JMPZ/43                   ?0        #190                 ?417                	;0	>>417
	416 205  GOTO/253                  ?0        ?407                 ?236                	;0
	417 207  INIT_METHOD_CALL/112      ?0        16?0                 237:'get_rows'      	;0	<<415
	418 207  DO_FCALL/60               $191=     ?0                   ?0                  	;0
	419 207  FE_RESET_R/77             $192=     $191                 ?616                	;0
	420 207  FE_FETCH_R/78             ?0        $192                 16?22               	;616	>>616	<<615
	421 208  NOP/0                     ?0        ?0                   ?0                  	;1
	422 208  GOTO/253                  ?0        ?425                 ?239                	;0
	423 211  NOP/0                     ?0        ?0                   ?0                  	;1
	424 211  GOTO/253                  ?0        ?615                 ?240                	;0
	425 213  ASSIGN/38                 ?169      16?23                241:array (
  0 => 
  array (
  ),
  1 => 
  array (
  ),
  2 => 
  array (
  ),
  3 => 
  array (
  ),
)	;0
	426 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'json_decode'   	;2
	427 214  FETCH_DIM_FUNC_ARG/93     $194=     16?22                244:'bouquet_channels'	;1
	428 214  SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
	429 214  SEND_VAL_EX/116           ?96       245:true             ?2                  	;0
	430 214  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
	431 214  FE_RESET_R/77             $196=     $195                 ?459                	;0
	432 214  FE_FETCH_R/78             ?0        $196                 16?2                	;459	>>459	<<458
	433 215  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'intval'        	;1
	434 215  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	435 215  DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
	436 215  IS_SMALLER/19             #198=     248:0                $197                	;0
	437 215  JMPZ_EX/46                #198=     #198                 ?447                	;0	>>447
	438 215  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'in_array'      	;2
	439 215  INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'intval'        	;1
	440 215  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	441 215  DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
	442 215  SEND_VAR_NO_REF_EX/50     ?80       $199                 ?1                  	;0
	443 215  FETCH_DIM_FUNC_ARG/93     $200=     16?16                253:0               	;2
	444 215  SEND_VAR_EX/66            ?96       $200                 ?2                  	;0
	445 215  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
	446 215  BOOL/52                   #198=     $201                 ?0                  	;0
	447 215  BOOL_NOT/13               #202=     #198                 ?0                  	;0	<<437
	448 215  JMPZ/43                   ?0        #202                 ?452                	;0	>>452
	449 216  NOP/0                     ?0        ?0                   ?0                  	;1
	450 216  NOP/0                     ?0        ?0                   ?0                  	;1
	451 216  GOTO/253                  ?0        ?458                 ?254                	;0
	452 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'intval'        	;1	<<448
	453 218  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	454 218  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
	455 218  FETCH_DIM_W/84            $203=     16?23                255:0               	;0
	456 218  ASSIGN_DIM/147            ?180      $203                 ?4397406            	;0
	457 218  OP_DATA/137               ?0        $205                 ?0                  	;0
	458 220  JMP/42                    ?0        ?432                 ?0                  	;0	>>432
	459 220  FE_FREE/127               ?0        $196                 ?0                  	;0	<<431
	460 223  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'json_decode'   	;2
	461 223  FETCH_DIM_FUNC_ARG/93     $206=     16?22                260:'bouquet_movies'	;1
	462 223  SEND_VAR_EX/66            ?80       $206                 ?1                  	;0
	463 223  SEND_VAL_EX/116           ?96       261:true             ?2                  	;0
	464 223  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
	465 223  FE_RESET_R/77             $208=     $207                 ?493                	;0
	466 223  FE_FETCH_R/78             ?0        $208                 16?2                	;493	>>493	<<492
	467 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'intval'        	;1
	468 224  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	469 224  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
	470 224  IS_SMALLER/19             #210=     264:0                $209                	;0
	471 224  JMPZ_EX/46                #210=     #210                 ?481                	;0	>>481
	472 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'in_array'      	;2
	473 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'intval'        	;1
	474 224  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	475 224  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
	476 224  SEND_VAR_NO_REF_EX/50     ?80       $211                 ?1                  	;0
	477 224  FETCH_DIM_FUNC_ARG/93     $212=     16?16                269:0               	;2
	478 224  SEND_VAR_EX/66            ?96       $212                 ?2                  	;0
	479 224  DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
	480 224  BOOL/52                   #210=     $213                 ?0                  	;0
	481 224  BOOL_NOT/13               #214=     #210                 ?0                  	;0	<<471
	482 224  JMPZ/43                   ?0        #214                 ?486                	;0	>>486
	483 225  NOP/0                     ?0        ?0                   ?0                  	;1
	484 225  NOP/0                     ?0        ?0                   ?0                  	;1
	485 225  GOTO/253                  ?0        ?492                 ?270                	;0
	486 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'intval'        	;1	<<482
	487 227  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	488 227  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
	489 227  FETCH_DIM_W/84            $215=     16?23                271:1               	;0
	490 227  ASSIGN_DIM/147            ?192      $215                 ?4397406            	;0
	491 227  OP_DATA/137               ?0        $217                 ?0                  	;0
	492 229  JMP/42                    ?0        ?466                 ?0                  	;0	>>466
	493 229  FE_FREE/127               ?0        $208                 ?0                  	;0	<<465
	494 232  NOP/0                     ?0        ?0                   ?0                  	;1
	495 232  GOTO/253                  ?0        ?496                 ?274                	;0
	496 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'json_decode'   	;2
	497 234  FETCH_DIM_FUNC_ARG/93     $218=     16?22                277:'bouquet_radios'	;1
	498 234  SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
	499 234  SEND_VAL_EX/116           ?96       278:true             ?2                  	;0
	500 234  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
	501 234  FE_RESET_R/77             $220=     $219                 ?529                	;0
	502 234  FE_FETCH_R/78             ?0        $220                 16?2                	;529	>>529	<<528
	503 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'intval'        	;1
	504 235  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	505 235  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
	506 235  IS_SMALLER/19             #222=     281:0                $221                	;0
	507 235  JMPZ_EX/46                #222=     #222                 ?517                	;0	>>517
	508 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   282:'in_array'      	;2
	509 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   284:'intval'        	;1
	510 235  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	511 235  DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
	512 235  SEND_VAR_NO_REF_EX/50     ?80       $223                 ?1                  	;0
	513 235  FETCH_DIM_FUNC_ARG/93     $224=     16?16                286:0               	;2
	514 235  SEND_VAR_EX/66            ?96       $224                 ?2                  	;0
	515 235  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
	516 235  BOOL/52                   #222=     $225                 ?0                  	;0
	517 235  BOOL_NOT/13               #226=     #222                 ?0                  	;0	<<507
	518 235  JMPZ/43                   ?0        #226                 ?522                	;0	>>522
	519 236  NOP/0                     ?0        ?0                   ?0                  	;1
	520 236  NOP/0                     ?0        ?0                   ?0                  	;1
	521 236  GOTO/253                  ?0        ?528                 ?287                	;0
	522 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'intval'        	;1	<<518
	523 238  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	524 238  DO_FCALL_BY_NAME/131      $229=     ?0                   ?0                  	;0
	525 238  FETCH_DIM_W/84            $227=     16?23                288:2               	;0
	526 238  ASSIGN_DIM/147            ?204      $227                 ?4397406            	;0
	527 238  OP_DATA/137               ?0        $229                 ?0                  	;0
	528 240  JMP/42                    ?0        ?502                 ?0                  	;0	>>502
	529 240  FE_FREE/127               ?0        $220                 ?0                  	;0	<<501
	530 243  INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'json_decode'   	;2
	531 243  FETCH_DIM_FUNC_ARG/93     $230=     16?22                293:'bouquet_series'	;1
	532 243  SEND_VAR_EX/66            ?80       $230                 ?1                  	;0
	533 243  SEND_VAL_EX/116           ?96       294:true             ?2                  	;0
	534 243  DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
	535 243  FE_RESET_R/77             $232=     $231                 ?563                	;0
	536 243  FE_FETCH_R/78             ?0        $232                 16?2                	;563	>>563	<<562
	537 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'intval'        	;1
	538 244  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	539 244  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
	540 244  IS_SMALLER/19             #234=     297:0                $233                	;0
	541 244  JMPZ_EX/46                #234=     #234                 ?551                	;0	>>551
	542 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'in_array'      	;2
	543 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   300:'intval'        	;1
	544 244  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	545 244  DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
	546 244  SEND_VAR_NO_REF_EX/50     ?80       $235                 ?1                  	;0
	547 244  FETCH_DIM_FUNC_ARG/93     $236=     16?16                302:1               	;2
	548 244  SEND_VAR_EX/66            ?96       $236                 ?2                  	;0
	549 244  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
	550 244  BOOL/52                   #234=     $237                 ?0                  	;0
	551 244  BOOL_NOT/13               #238=     #234                 ?0                  	;0	<<541
	552 244  JMPZ/43                   ?0        #238                 ?556                	;0	>>556
	553 245  NOP/0                     ?0        ?0                   ?0                  	;1
	554 245  NOP/0                     ?0        ?0                   ?0                  	;1
	555 245  GOTO/253                  ?0        ?562                 ?303                	;0
	556 247  INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'intval'        	;1	<<552
	557 247  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	558 247  DO_FCALL_BY_NAME/131      $241=     ?0                   ?0                  	;0
	559 247  FETCH_DIM_W/84            $239=     16?23                304:3               	;0
	560 247  ASSIGN_DIM/147            ?216      $239                 ?4397406            	;0
	561 247  OP_DATA/137               ?0        $241                 ?0                  	;0
	562 249  JMP/42                    ?0        ?536                 ?0                  	;0	>>536
	563 249  FE_FREE/127               ?0        $232                 ?0                  	;0	<<535
	564 252  INIT_METHOD_CALL/112      ?0        16?0                 307:'query'         	;2
	565 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   309:'implode'       	;2
	566 252  SEND_VAL_EX/116           ?80       311:','              ?1                  	;0
	567 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'array_map'     	;2
	568 252  SEND_VAL_EX/116           ?80       314:'intval'         ?1                  	;0
	569 252  FETCH_DIM_FUNC_ARG/93     $242=     16?23                315:0               	;2
	570 252  SEND_VAR_EX/66            ?96       $242                 ?2                  	;0
	571 252  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
	572 252  SEND_VAR_NO_REF_EX/50     ?96       $243                 ?2                  	;0
	573 252  DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
	574 252  CONCAT/8                  #245=     316:'UPDATE `bouquets` SET `bouquet_channels` = \'[' $244                	;0
	575 252  CONCAT/8                  #246=     #245                 317:']\', `bouquet_movies` = \'['	;0
	576 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   318:'implode'       	;2
	577 252  SEND_VAL_EX/116           ?80       320:','              ?1                  	;0
	578 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'array_map'     	;2
	579 252  SEND_VAL_EX/116           ?80       323:'intval'         ?1                  	;0
	580 252  FETCH_DIM_FUNC_ARG/93     $247=     16?23                324:1               	;2
	581 252  SEND_VAR_EX/66            ?96       $247                 ?2                  	;0
	582 252  DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
	583 252  SEND_VAR_NO_REF_EX/50     ?96       $248                 ?2                  	;0
	584 252  DO_FCALL_BY_NAME/131      $249=     ?0                   ?0                  	;0
	585 252  CONCAT/8                  #250=     #246                 $249                	;0
	586 252  CONCAT/8                  #251=     #250                 325:']\', `bouquet_radios` = \'['	;0
	587 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'implode'       	;2
	588 252  SEND_VAL_EX/116           ?80       328:','              ?1                  	;0
	589 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'array_map'     	;2
	590 252  SEND_VAL_EX/116           ?80       331:'intval'         ?1                  	;0
	591 252  FETCH_DIM_FUNC_ARG/93     $252=     16?23                332:2               	;2
	592 252  SEND_VAR_EX/66            ?96       $252                 ?2                  	;0
	593 252  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
	594 252  SEND_VAR_NO_REF_EX/50     ?96       $253                 ?2                  	;0
	595 252  DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
	596 252  CONCAT/8                  #255=     #251                 $254                	;0
	597 252  CONCAT/8                  #256=     #255                 333:']\', `bouquet_series` = \'['	;0
	598 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   334:'implode'       	;2
	599 252  SEND_VAL_EX/116           ?80       336:','              ?1                  	;0
	600 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'array_map'     	;2
	601 252  SEND_VAL_EX/116           ?80       339:'intval'         ?1                  	;0
	602 252  FETCH_DIM_FUNC_ARG/93     $257=     16?23                340:3               	;2
	603 252  SEND_VAR_EX/66            ?96       $257                 ?2                  	;0
	604 252  DO_FCALL_BY_NAME/131      $258=     ?0                   ?0                  	;0
	605 252  SEND_VAR_NO_REF_EX/50     ?96       $258                 ?2                  	;0
	606 252  DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
	607 252  CONCAT/8                  #260=     #256                 $259                	;0
	608 252  CONCAT/8                  #261=     #260                 341:']\' WHERE `id` = ?;'	;0
	609 252  SEND_VAL_EX/116           ?80       #261                 ?1                  	;0
	610 252  FETCH_DIM_FUNC_ARG/93     $262=     16?22                342:'id'            	;2
	611 252  SEND_VAR_EX/66            ?96       $262                 ?2                  	;0
	612 252  DO_FCALL/60               ?239      ?0                   ?0                  	;0
	613 253  NOP/0                     ?0        ?0                   ?0                  	;1
	614 253  GOTO/253                  ?0        ?423                 ?343                	;0
	615 254  JMP/42                    ?0        ?420                 ?0                  	;0	>>420
	616 254  FE_FREE/127               ?0        $192                 ?0                  	;0	<<419
	617 257  GOTO/253                  ?0        ?407                 ?344                	;0
	618 260  INIT_METHOD_CALL/112      ?0        16?0                 345:'query'         	;1
	619 260  SEND_VAL_EX/116           ?80       347:'SELECT `id` FROM `streams_series`;' ?1                  	;0
	620 260  DO_FCALL/60               ?240      ?0                   ?0                  	;0
	621 261  INIT_METHOD_CALL/112      ?0        16?0                 348:'num_rows'      	;0
	622 261  DO_FCALL/60               $265=     ?0                   ?0                  	;0
	623 261  IS_SMALLER/19             #266=     350:0                $265                	;0
	624 261  BOOL_NOT/13               #267=     #266                 ?0                  	;0
	625 261  JMPZ/43                   ?0        #267                 ?627                	;0	>>627
	626 262  GOTO/253                  ?0        ?408                 ?351                	;0
	627 264  INIT_METHOD_CALL/112      ?0        16?0                 352:'get_rows'      	;0	<<625
	628 264  DO_FCALL/60               $268=     ?0                   ?0                  	;0
	629 264  FE_RESET_R/77             $269=     $268                 ?639                	;0
	630 264  FE_FETCH_R/78             ?0        $269                 16?19               	;639	>>639	<<638
	631 265  INIT_FCALL_BY_NAME/59     ?0        ?0                   355:'intval'        	;1
	632 265  FETCH_DIM_FUNC_ARG/93     $272=     16?19                357:'id'            	;1
	633 265  SEND_VAR_EX/66            ?80       $272                 ?1                  	;0
	634 265  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
	635 265  FETCH_DIM_W/84            $270=     16?16                354:1               	;0
	636 265  ASSIGN_DIM/147            ?247      $270                 ?4414262            	;0
	637 265  OP_DATA/137               ?0        $273                 ?0                  	;0
	638 266  JMP/42                    ?0        ?630                 ?0                  	;0	>>630
	639 266  FE_FREE/127               ?0        $269                 ?0                  	;0	<<629
	640 269  GOTO/253                  ?0        ?408                 ?358                	;0
	641 272  GOTO/253                  ?0        ?642                 ?359                	;0	<<10
	642 276  NOP/0                     ?0        360:NULL             ?0                  	;4294967295
	*/
}

function deleteStreams($Fe53bcd53690fff4)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   296  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   298  JMP/42                    ?0        ?50                  ?0                  	;0	>>50
	2   300  INIT_METHOD_CALL/112      ?0        16?1                 1:'query'           	;1
	3   300  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'implode'         	;2
	4   300  SEND_VAL_EX/116           ?80       5:','                ?1                  	;0
	5   300  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	6   300  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	7   300  CONCAT/8                  #4=       6:'DELETE FROM `streams_servers` WHERE `stream_id` IN (' $3                  	;0
	8   300  CONCAT/8                  #5=       #4                   7:');'              	;0
	9   300  SEND_VAL_EX/116           ?80       #5                   ?1                  	;0
	10  300  DO_FCALL/60               ?3        ?0                   ?0                  	;0
	11  301  INIT_METHOD_CALL/112      ?0        16?1                 8:'query'           	;1
	12  301  SEND_VAL_EX/116           ?80       10:'DELETE FROM `streams_servers` WHERE `parent_id` IS NOT NULL AND `parent_id` > 0 AND `parent_id` NOT IN (SELECT `id` FROM `servers` WHERE `server_type` = 0);' ?1                  	;0
	13  301  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	14  302  INIT_METHOD_CALL/112      ?0        16?1                 11:'query'          	;4
	15  302  SEND_VAL_EX/116           ?80       13:'INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);' ?1                  	;0
	16  302  FETCH_CONSTANT/99         #8=       ?0                   14:'SERVER_ID'      	;16
	17  302  SEND_VAL_EX/116           ?96       #8                   ?2                  	;0
	18  302  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'time'           	;0
	19  302  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	20  302  SEND_VAR_NO_REF_EX/50     ?112      $9                   ?3                  	;0
	21  302  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'json_encode'    	;1
	22  302  INIT_ARRAY/71             #10=      21:'update_streams'  22:'type'           	;10
	23  302  ADD_ARRAY_ELEMENT/72      #10=      16?0                 23:'id'             	;0
	24  302  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
	25  302  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	26  302  SEND_VAR_NO_REF_EX/50     ?128      $11                  ?4                  	;0
	27  302  DO_FCALL/60               ?9        ?0                   ?0                  	;0
	28  303  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'array_keys'     	;1
	29  303  FETCH_STATIC_PROP_FUNC_ARG/177 $13=      26:'rServers'        27:'XUI'            	;1
	30  303  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
	31  303  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	32  303  FE_RESET_R/77             $15=      $14                  ?48                 	;0
	33  303  FE_FETCH_R/78             ?0        $15                  16?2                	;48	>>48	<<47
	34  304  INIT_METHOD_CALL/112      ?0        16?1                 29:'query'          	;4
	35  304  SEND_VAL_EX/116           ?80       31:'INSERT INTO `signals`(`server_id`, `time`, `custom_data`, `cache`) VALUES(?, ?, ?, 1);' ?1                  	;0
	36  304  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	37  304  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'time'           	;0
	38  304  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	39  304  SEND_VAR_NO_REF_EX/50     ?112      $16                  ?3                  	;0
	40  304  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'json_encode'    	;1
	41  304  INIT_ARRAY/71             #17=      36:'delete_vods'     37:'type'           	;10
	42  304  ADD_ARRAY_ELEMENT/72      #17=      16?0                 38:'id'             	;0
	43  304  SEND_VAL_EX/116           ?80       #17                  ?1                  	;0
	44  304  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	45  304  SEND_VAR_NO_REF_EX/50     ?128      $18                  ?4                  	;0
	46  304  DO_FCALL/60               ?16       ?0                   ?0                  	;0
	47  305  JMP/42                    ?0        ?33                  ?0                  	;0	>>33
	48  305  FE_FREE/127               ?0        $15                  ?0                  	;0	<<32
	49  308  GOTO/253                  ?0        ?186                 ?39                 	;0
	50  310  BIND_GLOBAL/168           ?0        16?1                 40:'b62d6460eb33ea07'	;0	<<1
	51  311  INIT_METHOD_CALL/112      ?0        16?1                 41:'query'          	;1
	52  311  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'implode'        	;2
	53  311  SEND_VAL_EX/116           ?80       45:','               ?1                  	;0
	54  311  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	55  311  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	56  311  CONCAT/8                  #21=      46:'DELETE FROM `lines_logs` WHERE `stream_id` IN (' $20                 	;0
	57  311  CONCAT/8                  #22=      #21                  47:');'             	;0
	58  311  SEND_VAL_EX/116           ?80       #22                  ?1                  	;0
	59  311  DO_FCALL/60               ?20       ?0                   ?0                  	;0
	60  312  INIT_METHOD_CALL/112      ?0        16?1                 48:'query'          	;1
	61  312  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'implode'        	;2
	62  312  SEND_VAL_EX/116           ?80       52:','               ?1                  	;0
	63  312  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	64  312  DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
	65  312  CONCAT/8                  #25=      53:'DELETE FROM `mag_claims` WHERE `stream_id` IN (' $24                 	;0
	66  312  CONCAT/8                  #26=      #25                  54:');'             	;0
	67  312  SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
	68  312  DO_FCALL/60               ?24       ?0                   ?0                  	;0
	69  313  INIT_METHOD_CALL/112      ?0        16?1                 55:'query'          	;1
	70  313  INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'implode'        	;2
	71  313  SEND_VAL_EX/116           ?80       59:','               ?1                  	;0
	72  313  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	73  313  DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	74  313  CONCAT/8                  #29=      60:'DELETE FROM `streams` WHERE `id` IN (' $28                 	;0
	75  313  CONCAT/8                  #30=      #29                  61:');'             	;0
	76  313  SEND_VAL_EX/116           ?80       #30                  ?1                  	;0
	77  313  DO_FCALL/60               ?28       ?0                   ?0                  	;0
	78  314  INIT_METHOD_CALL/112      ?0        16?1                 62:'query'          	;1
	79  314  INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'implode'        	;2
	80  314  SEND_VAL_EX/116           ?80       66:','               ?1                  	;0
	81  314  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	82  314  DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	83  314  CONCAT/8                  #33=      67:'DELETE FROM `streams_episodes` WHERE `stream_id` IN (' $32                 	;0
	84  314  CONCAT/8                  #34=      #33                  68:');'             	;0
	85  314  SEND_VAL_EX/116           ?80       #34                  ?1                  	;0
	86  314  DO_FCALL/60               ?32       ?0                   ?0                  	;0
	87  315  GOTO/253                  ?0        ?88                  ?69                 	;0
	88  317  INIT_METHOD_CALL/112      ?0        16?1                 70:'query'          	;1
	89  317  INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'implode'        	;2
	90  317  SEND_VAL_EX/116           ?80       74:','               ?1                  	;0
	91  317  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	92  317  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	93  317  CONCAT/8                  #37=      75:'DELETE FROM `streams_errors` WHERE `stream_id` IN (' $36                 	;0
	94  317  CONCAT/8                  #38=      #37                  76:');'             	;0
	95  317  SEND_VAL_EX/116           ?80       #38                  ?1                  	;0
	96  317  DO_FCALL/60               ?36       ?0                   ?0                  	;0
	97  318  INIT_METHOD_CALL/112      ?0        16?1                 77:'query'          	;1
	98  318  INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'implode'        	;2
	99  318  SEND_VAL_EX/116           ?80       81:','               ?1                  	;0
	100 318  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	101 318  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	102 318  CONCAT/8                  #41=      82:'DELETE FROM `streams_logs` WHERE `stream_id` IN (' $40                 	;0
	103 318  CONCAT/8                  #42=      #41                  83:');'             	;0
	104 318  SEND_VAL_EX/116           ?80       #42                  ?1                  	;0
	105 318  DO_FCALL/60               ?40       ?0                   ?0                  	;0
	106 319  INIT_METHOD_CALL/112      ?0        16?1                 84:'query'          	;1
	107 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'implode'        	;2
	108 319  SEND_VAL_EX/116           ?80       88:','               ?1                  	;0
	109 319  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	110 319  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
	111 319  CONCAT/8                  #45=      89:'DELETE FROM `streams_options` WHERE `stream_id` IN (' $44                 	;0
	112 319  CONCAT/8                  #46=      #45                  90:');'             	;0
	113 319  SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
	114 319  DO_FCALL/60               ?44       ?0                   ?0                  	;0
	115 320  INIT_METHOD_CALL/112      ?0        16?1                 91:'query'          	;1
	116 320  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'implode'        	;2
	117 320  SEND_VAL_EX/116           ?80       95:','               ?1                  	;0
	118 320  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	119 320  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
	120 320  CONCAT/8                  #49=      96:'DELETE FROM `streams_stats` WHERE `stream_id` IN (' $48                 	;0
	121 320  CONCAT/8                  #50=      #49                  97:');'             	;0
	122 320  SEND_VAL_EX/116           ?80       #50                  ?1                  	;0
	123 320  DO_FCALL/60               ?48       ?0                   ?0                  	;0
	124 321  INIT_METHOD_CALL/112      ?0        16?1                 98:'query'          	;1
	125 321  INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'implode'       	;2
	126 321  SEND_VAL_EX/116           ?80       102:','              ?1                  	;0
	127 321  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	128 321  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	129 321  CONCAT/8                  #53=      103:'DELETE FROM `watch_refresh` WHERE `stream_id` IN (' $52                 	;0
	130 321  CONCAT/8                  #54=      #53                  104:');'            	;0
	131 321  SEND_VAL_EX/116           ?80       #54                  ?1                  	;0
	132 321  DO_FCALL/60               ?52       ?0                   ?0                  	;0
	133 322  GOTO/253                  ?0        ?134                 ?105                	;0
	134 324  INIT_METHOD_CALL/112      ?0        16?1                 106:'query'         	;1
	135 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'implode'       	;2
	136 324  SEND_VAL_EX/116           ?80       110:','              ?1                  	;0
	137 324  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	138 324  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
	139 324  CONCAT/8                  #57=      111:'DELETE FROM `watch_logs` WHERE `stream_id` IN (' $56                 	;0
	140 324  CONCAT/8                  #58=      #57                  112:');'            	;0
	141 324  SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
	142 324  DO_FCALL/60               ?56       ?0                   ?0                  	;0
	143 325  INIT_METHOD_CALL/112      ?0        16?1                 113:'query'         	;1
	144 325  INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'implode'       	;2
	145 325  SEND_VAL_EX/116           ?80       117:','              ?1                  	;0
	146 325  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	147 325  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
	148 325  CONCAT/8                  #61=      118:'DELETE FROM `lines_live` WHERE `stream_id` IN (' $60                 	;0
	149 325  CONCAT/8                  #62=      #61                  119:');'            	;0
	150 325  SEND_VAL_EX/116           ?80       #62                  ?1                  	;0
	151 325  DO_FCALL/60               ?60       ?0                   ?0                  	;0
	152 326  INIT_METHOD_CALL/112      ?0        16?1                 120:'query'         	;1
	153 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'implode'       	;2
	154 326  SEND_VAL_EX/116           ?80       124:','              ?1                  	;0
	155 326  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	156 326  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
	157 326  CONCAT/8                  #65=      125:'DELETE FROM `recordings` WHERE `created_id` IN (' $64                 	;0
	158 326  CONCAT/8                  #66=      #65                  126:') OR `stream_id` IN ('	;0
	159 326  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'implode'       	;2
	160 326  SEND_VAL_EX/116           ?80       129:','              ?1                  	;0
	161 326  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	162 326  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	163 326  CONCAT/8                  #68=      #66                  $67                 	;0
	164 326  CONCAT/8                  #69=      #68                  130:');'            	;0
	165 326  SEND_VAL_EX/116           ?80       #69                  ?1                  	;0
	166 326  DO_FCALL/60               ?67       ?0                   ?0                  	;0
	167 327  INIT_METHOD_CALL/112      ?0        16?1                 131:'query'         	;1
	168 327  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'implode'       	;2
	169 327  SEND_VAL_EX/116           ?80       135:','              ?1                  	;0
	170 327  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	171 327  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
	172 327  CONCAT/8                  #72=      136:'UPDATE `lines_activity` SET `stream_id` = 0 WHERE `stream_id` IN (' $71                 	;0
	173 327  CONCAT/8                  #73=      #72                  137:');'            	;0
	174 327  SEND_VAL_EX/116           ?80       #73                  ?1                  	;0
	175 327  DO_FCALL/60               ?71       ?0                   ?0                  	;0
	176 328  INIT_METHOD_CALL/112      ?0        16?1                 138:'query'         	;1
	177 328  INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'implode'       	;2
	178 328  SEND_VAL_EX/116           ?80       142:','              ?1                  	;0
	179 328  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	180 328  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
	181 328  CONCAT/8                  #76=      143:'SELECT `server_id` FROM `streams_servers` WHERE `stream_id` IN (' $75                 	;0
	182 328  CONCAT/8                  #77=      #76                  144:');'            	;0
	183 328  SEND_VAL_EX/116           ?80       #77                  ?1                  	;0
	184 328  DO_FCALL/60               ?75       ?0                   ?0                  	;0
	185 329  GOTO/253                  ?0        ?2                   ?145                	;0
	186 331  RETURN/62                 ?0        146:true             ?0                  	;0
	187 332  GOTO/253                  ?0        ?188                 ?147                	;0
	188 334  NOP/0                     ?0        148:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   339  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   340  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   340  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   340  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   340  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   340  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   341  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   343  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   343  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   345  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?5                   ?0                  	;0	>>5
1   6    NOP/0                     ?0        ?0                   ?0                  	;0
2   277  INIT_FCALL/61             ?0        ?4464                1:'ed8dbf4549416fa2'	;0
3   277  DO_FCALL/60               ?0        ?0                   ?0                  	;0
4   278  GOTO/253                  ?0        ?49                  ?2                  	;0
5   280  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'posix_getpwuid'  	;1	<<0
6   280  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'posix_geteuid'   	;0
7   280  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
8   280  SEND_VAR_NO_REF_EX/50     ?80       $3                   ?1                  	;0
9   280  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
10  280  FETCH_DIM_R/81            $5=       $4                   7:'name'            	;0
11  280  IS_NOT_EQUAL/18           #6=       $5                   8:'xui'             	;0
12  280  BOOL_NOT/13               #7=       #6                   ?0                  	;0
13  280  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
14  281  GOTO/253                  ?0        ?16                  ?9                  	;0
15  283  EXIT/79                   ?0        10:'Please run as XUI!
' ?0                  	;0	<<13
16  285  BEGIN_SILENCE/57          #8=       ?0                   ?0                  	;0
17  285  FETCH_R/80                $9=       11:'argc'            ?0                  	;268435456
18  285  END_SILENCE/58            ?0        #8                   ?0                  	;0
19  285  JMPZ/43                   ?0        $9                   ?21                 	;0	>>21
20  286  GOTO/253                  ?0        ?23                  ?12                 	;0
21  288  EXIT/79                   ?0        13:0                 ?0                  	;0	<<19
22  289  GOTO/253                  ?0        ?23                  ?14                 	;0
23  292  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'set_time_limit' 	;1
24  292  SEND_VAL_EX/116           ?80       17:0                 ?1                  	;0
25  292  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
26  293  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'str_replace'    	;3
27  293  SEND_VAL_EX/116           ?80       20:'\\'              ?1                  	;0
28  293  SEND_VAL_EX/116           ?96       21:'/'               ?2                  	;0
29  293  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'dirname'        	;1
30  293  FETCH_DIM_FUNC_ARG/93     $11=      16?0                 24:0                	;1
31  293  SEND_VAR_EX/66            ?80       $11                  ?1                  	;0
32  293  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
33  293  SEND_VAR_NO_REF_EX/50     ?112      $12                  ?3                  	;0
34  293  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
35  293  CONCAT/8                  #14=      $13                  25:'/../../www/init.php'	;0
36  293  INCLUDE_OR_EVAL/73        ?13       #14                  ?0                  	;8
37  294  INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'count'          	;1
38  294  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
39  294  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
40  294  IS_SMALLER/19             #17=      28:1                 $16                 	;0
41  294  JMPZ/43                   ?0        #17                  ?45                 	;0	>>45
42  294  FETCH_DIM_R/81            $18=      16?0                 29:1                	;0
43  294  QM_ASSIGN/22              #19=      $18                  ?0                  	;0
44  294  JMP/42                    ?0        ?46                  ?0                  	;0	>>46
45  294  QM_ASSIGN/22              #19=      30:NULL              ?0                  	;0	<<41
46  294  ASSIGN/38                 ?18       16?1                 #19                 	;0	<<44
47  296  NOP/0                     ?0        ?0                   ?0                  	;0
48  335  GOTO/253                  ?0        ?1                   ?31                 	;0
49  337  NOP/0                     ?0        ?0                   ?0                  	;0
50  346  NOP/0                     ?0        32:1                 ?0                  	;4294967295
*/

?>