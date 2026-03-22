<?php


function ab8369074df2AAa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    36    JMP/42                    ?0        ?801                 ?0                  	;0	>>801
	1    38    ASSIGN/38                 ?0        16?0                 1:array (
)         	;0
	2    39    INIT_METHOD_CALL/112      ?0        16?1                 2:'query'           	;1
	3    39    SEND_VAL_EX/116           ?80       4:'SELECT `id`, `key` FROM `hmac_keys` WHERE `enabled` = 1;' ?1                  	;0
	4    39    DO_FCALL/60               ?1        ?0                   ?0                  	;0
	5    40    INIT_METHOD_CALL/112      ?0        16?1                 5:'get_rows'        	;0
	6    40    DO_FCALL/60               $36=      ?0                   ?0                  	;0
	7    40    FE_RESET_R/77             $37=      $36                  ?12                 	;0
	8    40    FE_FETCH_R/78             ?0        $37                  16?2                	;12	>>12	<<11
	9    41    ASSIGN_DIM/147            ?4        16?0                 ?4414262            	;0
	10   41    OP_DATA/137               ?0        16?2                 ?0                  	;0
	11   42    JMP/42                    ?0        ?8                   ?0                  	;0	>>8
	12   42    FE_FREE/127               ?0        $37                  ?0                  	;0	<<7
	13   45    INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'file_put_contents'	;2
	14   45    FETCH_CONSTANT/99         #39=      ?0                   9:'CACHE_TMP_PATH'  	;16
	15   45    CONCAT/8                  #40=      #39                  12:'hmac_keys'      	;0
	16   45    SEND_VAL_EX/116           ?80       #40                  ?1                  	;0
	17   45    INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'igbinary_serialize'	;1
	18   45    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	19   45    DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	20   45    SEND_VAR_NO_REF_EX/50     ?96       $41                  ?2                  	;0
	21   45    DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
	22   46    GOTO/253                  ?0        ?763                 ?15                 	;0
	23   48    ASSIGN_DIM/147            ?9        16?3                 16:'episodes'       	;0
	24   48    OP_DATA/137               ?0        17:array (
)         ?0                  	;0
	25   49    INIT_METHOD_CALL/112      ?0        16?1                 18:'query'          	;1
	26   49    SEND_VAL_EX/116           ?80       20:'SELECT `type`, `id` FROM `streams` WHERE `type` IN (2,5) ORDER BY `added` DESC, `id` DESC;' ?1                  	;0
	27   49    DO_FCALL/60               ?10       ?0                   ?0                  	;0
	28   50    INIT_METHOD_CALL/112      ?0        16?1                 21:'get_rows'       	;0
	29   50    DO_FCALL/60               $45=      ?0                   ?0                  	;0
	30   50    FE_RESET_R/77             $46=      $45                  ?39                 	;0
	31   50    FE_FETCH_R/78             ?0        $46                  16?2                	;39	>>39	<<38
	32   51    FETCH_DIM_R/81            $47=      16?2                 23:'type'           	;0
	33   51    FETCH_DIM_R/81            $48=      24:array (
  2 => 'movies',
  5 => 'episodes',
) $47                 	;0
	34   51    FETCH_DIM_R/81            $51=      16?2                 25:'id'             	;0
	35   51    FETCH_DIM_W/84            $49=      16?3                 $48                 	;0
	36   51    ASSIGN_DIM/147            ?16       $49                  ?4414262            	;0
	37   51    OP_DATA/137               ?0        $51                  ?0                  	;0
	38   52    JMP/42                    ?0        ?31                  ?0                  	;0	>>31
	39   52    FE_FREE/127               ?0        $46                  ?0                  	;0	<<30
	40   55    ASSIGN/38                 ?18       16?4                 26:array (
)        	;0
	41   56    GOTO/253                  ?0        ?820                 ?27                 	;0
	42   58    INIT_METHOD_CALL/112      ?0        16?1                 28:'query'          	;1
	43   58    SEND_VAL_EX/116           ?80       30:'SELECT `id`, `category_id` FROM `streams`;' ?1                  	;0
	44   58    DO_FCALL/60               ?19       ?0                   ?0                  	;0
	45   59    FETCH_OBJ_R/82            $54=      16?1                 31:'dbh'            	;0
	46   59    JMPZ_EX/46                #55=      $54                  ?49                 	;0	>>49
	47   59    FETCH_OBJ_R/82            $56=      16?1                 32:'result'         	;0
	48   59    BOOL/52                   #55=      $56                  ?0                  	;0
	49   59    BOOL_NOT/13               #57=      #55                  ?0                  	;0	<<46
	50   59    JMPZ/43                   ?0        #57                  ?52                 	;0	>>52
	51   60    GOTO/253                  ?0        ?746                 ?33                 	;0
	52   62    FETCH_OBJ_R/82            $58=      16?1                 34:'result'         	;0	<<50
	53   62    INIT_METHOD_CALL/112      ?0        $58                  35:'rowCount'       	;0
	54   62    DO_FCALL/60               $59=      ?0                   ?0                  	;0
	55   62    IS_SMALLER/19             #60=      37:0                 $59                 	;0
	56   62    BOOL_NOT/13               #61=      #60                  ?0                  	;0
	57   62    JMPZ/43                   ?0        #61                  ?59                 	;0	>>59
	58   63    GOTO/253                  ?0        ?746                 ?38                 	;0
	59   65    FETCH_OBJ_R/82            $62=      16?1                 39:'result'         	;0	<<57
	60   65    INIT_METHOD_CALL/112      ?0        $62                  40:'fetchAll'       	;1
	61   65    FETCH_CLASS_CONSTANT/181  #63=      43:'PDO'             42:'FETCH_ASSOC'    	;0
	62   65    SEND_VAL_EX/116           ?80       #63                  ?1                  	;0
	63   65    DO_FCALL/60               $64=      ?0                   ?0                  	;0
	64   65    FE_RESET_R/77             $65=      $64                  ?75                 	;0
	65   65    FE_FETCH_R/78             ?0        $65                  16?5                	;75	>>75	<<74
	66   66    FETCH_DIM_R/81            $66=      16?5                 45:'id'             	;0
	67   66    INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'json_decode'    	;2
	68   66    FETCH_DIM_FUNC_ARG/93     $68=      16?5                 48:'category_id'    	;1
	69   66    SEND_VAR_EX/66            ?80       $68                  ?1                  	;0
	70   66    SEND_VAL_EX/116           ?96       49:true              ?2                  	;0
	71   66    DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
	72   66    ASSIGN_DIM/147            ?33       16?6                 $66                 	;0
	73   66    OP_DATA/137               ?0        $69                  ?0                  	;0
	74   67    JMP/42                    ?0        ?65                  ?0                  	;0	>>65
	75   67    FE_FREE/127               ?0        $65                  ?0                  	;0	<<64
	76   70    GOTO/253                  ?0        ?746                 ?50                 	;0
	77   72    FE_RESET_R/77             $70=      51:array (
  0 => 'channels',
  1 => 'radios',
  2 => 'movies',
  3 => 'episodes',
) ?90                 	;0
	78   72    FE_FETCH_R/78             ?0        $70                  16?7                	;90	>>90	<<89
	79   73    FETCH_DIM_R/81            $71=      16?3                 16?7                	;0
	80   73    FE_RESET_R/77             $72=      $71                  ?88                 	;0
	81   73    FE_FETCH_R/78             ?0        $72                  16?8                	;88	>>88	<<87
	82   74    INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'intval'         	;1
	83   74    SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	84   74    DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	85   74    ASSIGN_DIM/147            ?39       16?9                 ?4410621            	;0
	86   74    OP_DATA/137               ?0        $74                  ?0                  	;0
	87   75    JMP/42                    ?0        ?81                  ?0                  	;0	>>81
	88   75    FE_FREE/127               ?0        $72                  ?0                  	;0	<<80
	89   78    JMP/42                    ?0        ?78                  ?0                  	;0	>>78
	90   78    FE_FREE/127               ?0        $70                  ?0                  	;0	<<77
	91   81    INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'array_unique'   	;1
	92   81    SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	93   81    DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
	94   81    ASSIGN/38                 ?42       16?9                 $75                 	;0
	95   83    ASSIGN/38                 ?43       16?6                 56:array (
)        	;0
	96   84    GOTO/253                  ?0        ?42                  ?57                 	;0
	97   86    INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'file_put_contents'	;2
	98   86    FETCH_CONSTANT/99         #78=      ?0                   60:'STREAMS_TMP_PATH'	;16
	99   86    CONCAT/8                  #79=      #78                  63:'channels_categories'	;0
	100  86    SEND_VAL_EX/116           ?80       #79                  ?1                  	;0
	101  86    INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'igbinary_serialize'	;1
	102  86    SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	103  86    DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
	104  86    SEND_VAR_NO_REF_EX/50     ?96       $80                  ?2                  	;0
	105  86    DO_FCALL_BY_NAME/131      ?47       ?0                   ?0                  	;0
	106  88    GOTO/253                  ?0        ?1005                ?66                 	;0
	107  90    FETCH_STATIC_PROP_R/173   $82=      67:'rSettings'       68:'XUI'            	;0
	108  90    FETCH_DIM_R/81            $83=      $82                  70:'channel_number_type'	;0
	109  90    IS_NOT_EQUAL/18           #84=      $83                  71:'manual'         	;0
	110  90    BOOL_NOT/13               #85=      #84                  ?0                  	;0
	111  90    JMPZ/43                   ?0        #85                  ?113                	;0	>>113
	112  91    GOTO/253                  ?0        ?95                  ?72                 	;0
	113  93    FE_RESET_R/77             $86=      73:array (
  0 => 'channels',
  1 => 'radios',
  2 => 'movies',
  3 => 'episodes',
) ?199                	;0	<<111
	114  93    FE_FETCH_R/78             ?0        $86                  16?7                	;199	>>199	<<198
	115  94    NOP/0                     ?0        ?0                   ?0                  	;1
	116  94    GOTO/253                  ?0        ?117                 ?74                 	;0
	117  96    INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'count'          	;1
	118  96    FETCH_DIM_FUNC_ARG/93     $87=      16?3                 16?7                	;1
	119  96    SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
	120  96    DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
	121  96    IS_SMALLER/19             #89=      77:0                 $88                 	;0
	122  96    JMPZ/43                   ?0        #89                  ?125                	;0	>>125
	123  97    NOP/0                     ?0        ?0                   ?0                  	;1
	124  97    GOTO/253                  ?0        ?128                 ?78                 	;0
	125  99    ASSIGN/38                 ?56       16?10                79:''               	;0	<<122
	126  100   NOP/0                     ?0        ?0                   ?0                  	;1
	127  100   GOTO/253                  ?0        ?166                 ?80                 	;0
	128  102   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'implode'        	;2
	129  102   SEND_VAL_EX/116           ?80       83:','               ?1                  	;0
	130  102   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'array_map'      	;2
	131  102   SEND_VAL_EX/116           ?80       86:'intval'          ?1                  	;0
	132  102   FETCH_DIM_FUNC_ARG/93     $91=      16?3                 16?7                	;2
	133  102   SEND_VAR_EX/66            ?96       $91                  ?2                  	;0
	134  102   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	135  102   SEND_VAR_NO_REF_EX/50     ?96       $92                  ?2                  	;0
	136  102   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	137  102   CONCAT/8                  #94=      87:'AND `id` NOT IN (' $93                 	;0
	138  102   CONCAT/8                  #95=      #94                  88:')'              	;0
	139  102   ASSIGN/38                 ?62       16?10                #95                 	;0
	140  103   NOP/0                     ?0        ?0                   ?0                  	;1
	141  103   GOTO/253                  ?0        ?166                 ?89                 	;0
	142  105   INIT_METHOD_CALL/112      ?0        16?1                 90:'query'          	;1
	143  105   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'implode'        	;2
	144  105   SEND_VAL_EX/116           ?80       94:','               ?1                  	;0
	145  105   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	146  105   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
	147  105   CONCAT/8                  #98=      95:'SELECT `id` FROM `streams` WHERE `type` IN (' $97                 	;0
	148  105   ROPE_INIT/54              #100=     ?0                   96:') '             	;3
	149  105   ROPE_ADD/55               #100=     #100                 16?10               	;1
	150  105   ROPE_END/56               #99=      #100                 97:' ORDER BY `order` ASC;'	;2
	151  105   CONCAT/8                  #102=     #98                  #99                 	;0
	152  105   SEND_VAL_EX/116           ?80       #102                 ?1                  	;0
	153  105   DO_FCALL/60               ?69       ?0                   ?0                  	;0
	154  106   INIT_METHOD_CALL/112      ?0        16?1                 98:'get_rows'       	;0
	155  106   DO_FCALL/60               $104=     ?0                   ?0                  	;0
	156  106   FE_RESET_R/77             $105=     $104                 ?163                	;0
	157  106   FE_FETCH_R/78             ?0        $105                 16?2                	;163	>>163	<<162
	158  107   FETCH_DIM_R/81            $108=     16?2                 100:'id'            	;0
	159  107   FETCH_DIM_W/84            $106=     16?3                 16?7                	;0
	160  107   ASSIGN_DIM/147            ?73       $106                 ?4414262            	;0
	161  107   OP_DATA/137               ?0        $108                 ?0                  	;0
	162  108   JMP/42                    ?0        ?157                 ?0                  	;0	>>157
	163  108   FE_FREE/127               ?0        $105                 ?0                  	;0	<<156
	164  113   NOP/0                     ?0        ?0                   ?0                  	;1
	165  113   GOTO/253                  ?0        ?198                 ?101                	;0
	166  116   SWITCH_STRING/188         ?0        16?7                 102:array (
  'channels' => 176,
  'radios' => 179,
  'movies' => 182,
  'episodes' => 185,
)	;188
	167  117   CASE/48                   #109=     16?7                 103:'channels'      	;0	>>169
	168  117   JMPNZ/44                  ?0        #109                 ?176                	;0	>>176
	169  120   CASE/48                   #109=     16?7                 104:'radios'        	;0	>>171	<<167
	170  120   JMPNZ/44                  ?0        #109                 ?179                	;0	>>179
	171  123   CASE/48                   #109=     16?7                 105:'movies'        	;0	>>173	<<169
	172  123   JMPNZ/44                  ?0        #109                 ?182                	;0	>>182
	173  126   CASE/48                   #109=     16?7                 106:'episodes'      	;0	>>175	<<171
	174  126   JMPNZ/44                  ?0        #109                 ?185                	;0	>>185
	175  126   JMP/42                    ?0        ?188                 ?0                  	;0	>>188	<<173
	176  118   ASSIGN/38                 ?76       16?11                107:array (
  0 => 1,
  1 => 3,
)	;0	<<168
	177  119   NOP/0                     ?0        ?0                   ?0                  	;1
	178  119   GOTO/253                  ?0        ?188                 ?108                	;0
	179  121   ASSIGN/38                 ?77       16?11                109:array (
  0 => 4,
)	;0	<<170
	180  122   NOP/0                     ?0        ?0                   ?0                  	;1
	181  122   GOTO/253                  ?0        ?188                 ?110                	;0
	182  124   ASSIGN/38                 ?78       16?11                111:array (
  0 => 2,
)	;0	<<172
	183  125   NOP/0                     ?0        ?0                   ?0                  	;1
	184  125   GOTO/253                  ?0        ?188                 ?112                	;0
	185  127   ASSIGN/38                 ?79       16?11                113:array (
  0 => 5,
)	;0	<<174
	186  128   NOP/0                     ?0        ?0                   ?0                  	;1
	187  128   GOTO/253                  ?0        ?188                 ?114                	;0
	188  132   INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'count'         	;1	<<175
	189  132   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	190  132   DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
	191  132   IS_SMALLER/19             #115=     117:0                $114                	;0
	192  132   BOOL_NOT/13               #116=     #115                 ?0                  	;0
	193  132   JMPZ/43                   ?0        #116                 ?196                	;0	>>196
	194  133   NOP/0                     ?0        ?0                   ?0                  	;1
	195  133   GOTO/253                  ?0        ?164                 ?118                	;0
	196  135   NOP/0                     ?0        ?0                   ?0                  	;1	<<193
	197  135   GOTO/253                  ?0        ?142                 ?119                	;0
	198  136   JMP/42                    ?0        ?114                 ?0                  	;0	>>114
	199  136   FE_FREE/127               ?0        $86                  ?0                  	;0	<<113
	200  139   FETCH_STATIC_PROP_R/173   $117=     120:'rSettings'      121:'XUI'           	;0
	201  139   FETCH_DIM_R/81            $118=     $117                 123:'vod_sort_newest'	;0
	202  139   BOOL_NOT/13               #119=     $118                 ?0                  	;0
	203  139   JMPZ/43                   ?0        #119                 ?205                	;0	>>205
	204  140   GOTO/253                  ?0        ?844                 ?124                	;0
	205  142   ASSIGN_DIM/147            ?86       16?3                 125:'movies'        	;0	<<203
	206  142   OP_DATA/137               ?0        126:array (
)        ?0                  	;0
	207  143   GOTO/253                  ?0        ?23                  ?127                	;0
	208  145   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'file_exists'   	;1
	209  145   FETCH_CONSTANT/99         #121=     ?0                   130:'BIN_PATH'      	;16
	210  145   CONCAT/8                  #122=     #121                 133:'maxmind/cidr.db'	;0
	211  145   SEND_VAL_EX/116           ?80       #122                 ?1                  	;0
	212  145   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
	213  145   BOOL_NOT/13               #124=     $123                 ?0                  	;0
	214  145   JMPZ/43                   ?0        #124                 ?216                	;0	>>216
	215  146   GOTO/253                  ?0        ?708                 ?134                	;0
	216  148   INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'exec'          	;2	<<214
	217  148   FETCH_CONSTANT/99         #125=     ?0                   137:'CIDR_TMP_PATH' 	;16
	218  148   CONCAT/8                  #126=     140:'ls '            #125                	;0
	219  148   CONCAT/8                  #127=     #126                 141:' | wc -l'      	;0
	220  148   SEND_VAL_EX/116           ?80       #127                 ?1                  	;0
	221  148   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
	222  148   DO_FCALL_BY_NAME/131      ?94       ?0                   ?0                  	;0
	223  149   INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'intval'        	;1
	224  149   FETCH_DIM_FUNC_ARG/93     $129=     16?12                144:0               	;1
	225  149   SEND_VAR_EX/66            ?80       $129                 ?1                  	;0
	226  149   DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
	227  149   IS_EQUAL/17               #131=     $130                 145:0               	;0
	228  149   BOOL_NOT/13               #132=     #131                 ?0                  	;0
	229  149   JMPZ/43                   ?0        #132                 ?231                	;0	>>231
	230  150   GOTO/253                  ?0        ?708                 ?146                	;0
	231  152   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'json_decode'   	;2	<<229
	232  152   INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'file_get_contents'	;1
	233  152   FETCH_CONSTANT/99         #133=     ?0                   151:'BIN_PATH'      	;16
	234  152   CONCAT/8                  #134=     #133                 154:'maxmind/cidr.db'	;0
	235  152   SEND_VAL_EX/116           ?80       #134                 ?1                  	;0
	236  152   DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
	237  152   SEND_VAR_NO_REF_EX/50     ?80       $135                 ?1                  	;0
	238  152   SEND_VAL_EX/116           ?96       155:true             ?2                  	;0
	239  152   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
	240  152   ASSIGN/38                 ?103      16?13                $136                	;0
	241  153   FE_RESET_R/77             $138=     16?13                ?254                	;0
	242  153   FE_FETCH_R/78             #139=     $138                 16?14               	;254	>>254	<<253
	243  153   ASSIGN/38                 ?106      16?15                #139                	;0
	244  154   INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'file_put_contents'	;2
	245  154   FETCH_CONSTANT/99         #141=     ?0                   158:'CIDR_TMP_PATH' 	;16
	246  154   CONCAT/8                  #142=     #141                 16?15               	;0
	247  154   SEND_VAL_EX/116           ?80       #142                 ?1                  	;0
	248  154   INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'json_encode'   	;1
	249  154   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	250  154   DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
	251  154   SEND_VAR_NO_REF_EX/50     ?96       $143                 ?2                  	;0
	252  154   DO_FCALL_BY_NAME/131      ?110      ?0                   ?0                  	;0
	253  155   JMP/42                    ?0        ?242                 ?0                  	;0	>>242
	254  155   FE_FREE/127               ?0        $138                 ?0                  	;0	<<241
	255  157   GOTO/253                  ?0        ?708                 ?163                	;0
	256  159   ECHO/40                   ?0        164:'Checking cache readability...
' ?0                  	;0
	257  160   INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'igbinary_unserialize'	;1
	258  160   INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'file_get_contents'	;1
	259  160   FETCH_CONSTANT/99         #145=     ?0                   169:'CACHE_TMP_PATH'	;16
	260  160   CONCAT/8                  #146=     #145                 172:'settings'      	;0
	261  160   SEND_VAL_EX/116           ?80       #146                 ?1                  	;0
	262  160   DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
	263  160   SEND_VAR_NO_REF_EX/50     ?80       $147                 ?1                  	;0
	264  160   DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
	265  160   ASSIGN/38                 ?115      16?16                $148                	;0
	266  161   INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'is_array'      	;1
	267  161   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
	268  161   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
	269  161   BOOL_NOT/13               #151=     $150                 ?0                  	;0
	270  161   JMPNZ_EX/47               #151=     #151                 ?274                	;0	>>274
	271  161   ISSET_ISEMPTY_DIM_OBJ/115 #152=     16?16                175:'server_name'   	;33554432
	272  161   BOOL_NOT/13               #153=     #152                 ?0                  	;0
	273  161   BOOL/52                   #151=     #153                 ?0                  	;0
	274  161   BOOL_NOT/13               #154=     #151                 ?0                  	;0	<<270
	275  161   JMPZ/43                   ?0        #154                 ?277                	;0	>>277
	276  162   GOTO/253                  ?0        ?745                 ?176                	;0
	277  164   ECHO/40                   ?0        177:'Clearing cache...

' ?0                  	;0	<<275
	278  165   FETCH_CONSTANT/99         #155=     ?0                   178:'STREAMS_TMP_PATH'	;16
	279  165   INIT_ARRAY/71             #156=     #155                 ?0                  	;12
	280  165   FETCH_CONSTANT/99         #157=     ?0                   181:'LINES_TMP_PATH'	;16
	281  165   ADD_ARRAY_ELEMENT/72      #156=     #157                 ?0                  	;0
	282  165   FETCH_CONSTANT/99         #158=     ?0                   184:'SERIES_TMP_PATH'	;16
	283  165   ADD_ARRAY_ELEMENT/72      #156=     #158                 ?0                  	;0
	284  165   FE_RESET_R/77             $159=     #156                 ?298                	;0
	285  165   FE_FETCH_R/78             ?0        $159                 16?17               	;298	>>298	<<297
	286  166   INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'scandir'       	;1
	287  166   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	288  166   DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
	289  166   FE_RESET_R/77             $161=     $160                 ?296                	;0
	290  166   FE_FETCH_R/78             ?0        $161                 16?18               	;296	>>296	<<295
	291  167   INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'unlink'        	;1
	292  167   CONCAT/8                  #162=     16?17                16?18               	;0
	293  167   SEND_VAL_EX/116           ?80       #162                 ?1                  	;0
	294  167   DO_FCALL_BY_NAME/131      ?129      ?0                   ?0                  	;0
	295  168   JMP/42                    ?0        ?290                 ?0                  	;0	>>290
	296  168   FE_FREE/127               ?0        $161                 ?0                  	;0	<<289
	297  171   JMP/42                    ?0        ?285                 ?0                  	;0	>>285
	298  171   FE_FREE/127               ?0        $159                 ?0                  	;0	<<284
	299  173   GOTO/253                  ?0        ?733                 ?191                	;0
	300  175   ASSIGN/38                 ?130      16?19                192:array (
)       	;0
	301  176   ASSIGN/38                 ?131      16?3                 193:array (
  'channels' => 
  array (
  ),
  'radios' => 
  array (
  ),
  'movies' => 
  array (
  ),
  'episodes' => 
  array (
  ),
  'series' => 
  array (
  ),
)	;0
	302  177   INIT_METHOD_CALL/112      ?0        16?1                 194:'query'         	;1
	303  177   SEND_VAL_EX/116           ?80       196:'SELECT *, IF(`bouquet_order` > 0, `bouquet_order`, 999) AS `order` FROM `bouquets` ORDER BY `order` ASC;' ?1                  	;0
	304  177   DO_FCALL/60               ?132      ?0                   ?0                  	;0
	305  178   INIT_METHOD_CALL/112      ?0        16?1                 197:'get_rows'      	;2
	306  178   SEND_VAL_EX/116           ?80       199:true             ?1                  	;0
	307  178   SEND_VAL_EX/116           ?96       200:'id'             ?2                  	;0
	308  178   DO_FCALL/60               $167=     ?0                   ?0                  	;0
	309  178   FE_RESET_R/77             $168=     $167                 ?669                	;0
	310  178   FE_FETCH_R/78             #169=     $168                 16?20               	;669	>>669	<<668
	311  178   ASSIGN/38                 ?136      16?21                #169                	;0
	312  179   NOP/0                     ?0        ?0                   ?0                  	;1
	313  179   GOTO/253                  ?0        ?568                 ?201                	;0
	314  183   INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'array_unique'  	;1
	315  183   SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	316  183   DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
	317  183   ASSIGN_DIM/147            ?137      16?22                16?21               	;0
	318  183   OP_DATA/137               ?0        $172                 ?0                  	;0
	319  185   NOP/0                     ?0        ?0                   ?0                  	;1
	320  185   GOTO/253                  ?0        ?668                 ?204                	;0
	321  188   INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'json_decode'   	;2
	322  188   FETCH_DIM_FUNC_ARG/93     $173=     16?20                207:'bouquet_movies'	;1
	323  188   SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
	324  188   SEND_VAL_EX/116           ?96       208:true             ?2                  	;0
	325  188   DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
	326  188   FE_RESET_R/77             $175=     $174                 ?368                	;0
	327  188   FE_FETCH_R/78             ?0        $175                 16?8                	;368	>>368	<<367
	328  189   INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'intval'        	;1
	329  189   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	330  189   DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
	331  189   IS_SMALLER/19             #177=     211:0                $176                	;0
	332  189   JMPZ_EX/46                #177=     #177                 ?340                	;0	>>340
	333  189   INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'in_array'      	;2
	334  189   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	335  189   FETCH_DIM_FUNC_ARG/93     $178=     16?3                 214:'movies'        	;2
	336  189   SEND_VAR_EX/66            ?96       $178                 ?2                  	;0
	337  189   DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
	338  189   BOOL_NOT/13               #180=     $179                 ?0                  	;0
	339  189   BOOL/52                   #177=     #180                 ?0                  	;0
	340  189   BOOL_NOT/13               #181=     #177                 ?0                  	;0	<<332
	341  189   JMPZ/43                   ?0        #181                 ?345                	;0	>>345
	342  190   NOP/0                     ?0        ?0                   ?0                  	;1
	343  190   NOP/0                     ?0        ?0                   ?0                  	;1
	344  190   GOTO/253                  ?0        ?348                 ?215                	;0
	345  192   FETCH_DIM_W/84            $182=     16?3                 216:'movies'        	;0	<<341
	346  192   ASSIGN_DIM/147            ?149      $182                 ?4397406            	;0
	347  192   OP_DATA/137               ?0        16?8                 ?0                  	;0
	348  194   INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'intval'        	;1
	349  194   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	350  194   DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
	351  194   ISSET_ISEMPTY_DIM_OBJ/115 #185=     16?19                $184                	;33554432
	352  194   JMPZ/43                   ?0        #185                 ?356                	;0	>>356
	353  195   NOP/0                     ?0        ?0                   ?0                  	;1
	354  195   NOP/0                     ?0        ?0                   ?0                  	;1
	355  195   GOTO/253                  ?0        ?361                 ?219                	;0
	356  197   INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'intval'        	;1	<<352
	357  197   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	358  197   DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
	359  197   ASSIGN_DIM/147            ?153      16?19                $186                	;0
	360  197   OP_DATA/137               ?0        222:array (
)        ?0                  	;0
	361  199   INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'intval'        	;1
	362  199   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	363  199   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
	364  199   FETCH_DIM_W/84            $189=     16?19                $188                	;0
	365  199   ASSIGN_DIM/147            ?156      $189                 ?0                  	;0
	366  199   OP_DATA/137               ?0        16?21                ?0                  	;0
	367  200   JMP/42                    ?0        ?327                 ?0                  	;0	>>327
	368  200   FE_FREE/127               ?0        $175                 ?0                  	;0	<<326
	369  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'json_decode'   	;2
	370  203   FETCH_DIM_FUNC_ARG/93     $191=     16?20                227:'bouquet_series'	;1
	371  203   SEND_VAR_EX/66            ?80       $191                 ?1                  	;0
	372  203   SEND_VAL_EX/116           ?96       228:true             ?2                  	;0
	373  203   DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
	374  203   FE_RESET_R/77             $193=     $192                 ?442                	;0
	375  203   FE_FETCH_R/78             ?0        $193                 16?24               	;442	>>442	<<441
	376  204   INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'intval'        	;1
	377  204   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
	378  204   DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
	379  204   IS_SMALLER/19             #195=     231:0                $194                	;0
	380  204   JMPZ_EX/46                #195=     #195                 ?388                	;0	>>388
	381  204   INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'in_array'      	;2
	382  204   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
	383  204   FETCH_DIM_FUNC_ARG/93     $196=     16?3                 234:'series'        	;2
	384  204   SEND_VAR_EX/66            ?96       $196                 ?2                  	;0
	385  204   DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
	386  204   BOOL_NOT/13               #198=     $197                 ?0                  	;0
	387  204   BOOL/52                   #195=     #198                 ?0                  	;0
	388  204   BOOL_NOT/13               #199=     #195                 ?0                  	;0	<<380
	389  204   JMPZ/43                   ?0        #199                 ?393                	;0	>>393
	390  205   NOP/0                     ?0        ?0                   ?0                  	;1
	391  205   NOP/0                     ?0        ?0                   ?0                  	;1
	392  205   GOTO/253                  ?0        ?441                 ?235                	;0
	393  207   INIT_METHOD_CALL/112      ?0        16?1                 236:'query'         	;2	<<389
	394  207   SEND_VAL_EX/116           ?80       238:'SELECT `stream_id` FROM `streams_episodes` WHERE `series_id` = ? ORDER BY `season_num` ASC, `episode_num` ASC;' ?1                  	;0
	395  207   SEND_VAR_EX/66            ?96       16?24                ?2                  	;0
	396  207   DO_FCALL/60               ?166      ?0                   ?0                  	;0
	397  208   INIT_METHOD_CALL/112      ?0        16?1                 239:'get_rows'      	;0
	398  208   DO_FCALL/60               $201=     ?0                   ?0                  	;0
	399  208   FE_RESET_R/77             $202=     $201                 ?440                	;0
	400  208   FE_FETCH_R/78             ?0        $202                 16?25               	;440	>>440	<<439
	401  209   INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'intval'        	;1
	402  209   FETCH_DIM_FUNC_ARG/93     $203=     16?25                243:'stream_id'     	;1
	403  209   SEND_VAR_EX/66            ?80       $203                 ?1                  	;0
	404  209   DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
	405  209   IS_SMALLER/19             #205=     244:0                $204                	;0
	406  209   BOOL_NOT/13               #206=     #205                 ?0                  	;0
	407  209   JMPZ/43                   ?0        #206                 ?412                	;0	>>412
	408  210   NOP/0                     ?0        ?0                   ?0                  	;1
	409  210   NOP/0                     ?0        ?0                   ?0                  	;1
	410  210   NOP/0                     ?0        ?0                   ?0                  	;1
	411  210   GOTO/253                  ?0        ?416                 ?245                	;0
	412  212   FETCH_DIM_R/81            $209=     16?25                247:'stream_id'     	;0	<<407
	413  212   FETCH_DIM_W/84            $207=     16?3                 246:'episodes'      	;0
	414  212   ASSIGN_DIM/147            ?174      $207                 ?4397406            	;0
	415  212   OP_DATA/137               ?0        $209                 ?0                  	;0
	416  214   INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'intval'        	;1
	417  214   FETCH_DIM_FUNC_ARG/93     $210=     16?25                250:'stream_id'     	;1
	418  214   SEND_VAR_EX/66            ?80       $210                 ?1                  	;0
	419  214   DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
	420  214   ISSET_ISEMPTY_DIM_OBJ/115 #212=     16?19                $211                	;33554432
	421  214   JMPZ/43                   ?0        #212                 ?426                	;0	>>426
	422  215   NOP/0                     ?0        ?0                   ?0                  	;1
	423  215   NOP/0                     ?0        ?0                   ?0                  	;1
	424  215   NOP/0                     ?0        ?0                   ?0                  	;1
	425  215   GOTO/253                  ?0        ?432                 ?251                	;0
	426  217   INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'intval'        	;1	<<421
	427  217   FETCH_DIM_FUNC_ARG/93     $213=     16?25                254:'stream_id'     	;1
	428  217   SEND_VAR_EX/66            ?80       $213                 ?1                  	;0
	429  217   DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
	430  217   ASSIGN_DIM/147            ?181      16?19                $214                	;0
	431  217   OP_DATA/137               ?0        255:array (
)        ?0                  	;0
	432  219   INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'intval'        	;1
	433  219   FETCH_DIM_FUNC_ARG/93     $216=     16?25                258:'stream_id'     	;1
	434  219   SEND_VAR_EX/66            ?80       $216                 ?1                  	;0
	435  219   DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
	436  219   FETCH_DIM_W/84            $218=     16?19                $217                	;0
	437  219   ASSIGN_DIM/147            ?185      $218                 ?0                  	;0
	438  219   OP_DATA/137               ?0        16?21                ?0                  	;0
	439  220   JMP/42                    ?0        ?400                 ?0                  	;0	>>400
	440  220   FE_FREE/127               ?0        $202                 ?0                  	;0	<<399
	441  224   JMP/42                    ?0        ?375                 ?0                  	;0	>>375
	442  224   FE_FREE/127               ?0        $193                 ?0                  	;0	<<374
	443  227   NOP/0                     ?0        ?0                   ?0                  	;1
	444  227   GOTO/253                  ?0        ?482                 ?259                	;0
	445  231   INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'count'         	;1
	446  231   SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	447  231   DO_FCALL_BY_NAME/131      $220=     ?0                   ?0                  	;0
	448  231   IS_SMALLER/19             #221=     262:0                $220                	;0
	449  231   BOOL_NOT/13               #222=     #221                 ?0                  	;0
	450  231   JMPZ/43                   ?0        #222                 ?453                	;0	>>453
	451  232   NOP/0                     ?0        ?0                   ?0                  	;1
	452  232   GOTO/253                  ?0        ?314                 ?263                	;0
	453  234   INIT_METHOD_CALL/112      ?0        16?1                 264:'query'         	;1	<<450
	454  234   INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'implode'       	;2
	455  234   SEND_VAL_EX/116           ?80       268:','              ?1                  	;0
	456  234   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	457  234   DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
	458  234   CONCAT/8                  #224=     269:'SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams_series` WHERE `id` IN (' $223                	;0
	459  234   CONCAT/8                  #225=     #224                 270:');'            	;0
	460  234   SEND_VAL_EX/116           ?80       #225                 ?1                  	;0
	461  234   DO_FCALL/60               ?192      ?0                   ?0                  	;0
	462  235   INIT_METHOD_CALL/112      ?0        16?1                 271:'get_rows'      	;0
	463  235   DO_FCALL/60               $227=     ?0                   ?0                  	;0
	464  235   FE_RESET_R/77             $228=     $227                 ?479                	;0
	465  235   FE_FETCH_R/78             ?0        $228                 16?2                	;479	>>479	<<478
	466  236   INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'array_merge'   	;2
	467  236   SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	468  236   INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'json_decode'   	;2
	469  236   FETCH_DIM_FUNC_ARG/93     $229=     16?2                 277:'category_id'   	;1
	470  236   SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
	471  236   SEND_VAL_EX/116           ?96       278:true             ?2                  	;0
	472  236   DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
	473  236   JMP_SET/152               #231=     $230                 ?475                	;0
	474  236   QM_ASSIGN/22              #231=     279:array (
)        ?0                  	;0
	475  236   SEND_VAL_EX/116           ?96       #231                 ?2                  	;0
	476  236   DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
	477  236   ASSIGN/38                 ?199      16?23                $232                	;0
	478  237   JMP/42                    ?0        ?465                 ?0                  	;0	>>465
	479  237   FE_FREE/127               ?0        $228                 ?0                  	;0	<<464
	480  239   NOP/0                     ?0        ?0                   ?0                  	;1
	481  239   GOTO/253                  ?0        ?314                 ?280                	;0
	482  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'array_map'     	;2
	483  241   SEND_VAL_EX/116           ?80       283:'intval'         ?1                  	;0
	484  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   284:'array_unique'  	;1
	485  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'array_merge'   	;3
	486  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   288:'json_decode'   	;2
	487  241   FETCH_DIM_FUNC_ARG/93     $234=     16?20                290:'bouquet_channels'	;1
	488  241   SEND_VAR_EX/66            ?80       $234                 ?1                  	;0
	489  241   SEND_VAL_EX/116           ?96       291:true             ?2                  	;0
	490  241   DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
	491  241   JMP_SET/152               #236=     $235                 ?493                	;0
	492  241   QM_ASSIGN/22              #236=     292:array (
)        ?0                  	;0
	493  241   SEND_VAL_EX/116           ?80       #236                 ?1                  	;0
	494  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   293:'json_decode'   	;2
	495  241   FETCH_DIM_FUNC_ARG/93     $237=     16?20                295:'bouquet_radios'	;1
	496  241   SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
	497  241   SEND_VAL_EX/116           ?96       296:true             ?2                  	;0
	498  241   DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
	499  241   JMP_SET/152               #239=     $238                 ?501                	;0
	500  241   QM_ASSIGN/22              #239=     297:array (
)        ?0                  	;0
	501  241   SEND_VAL_EX/116           ?96       #239                 ?2                  	;0
	502  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'json_decode'   	;2
	503  241   FETCH_DIM_FUNC_ARG/93     $240=     16?20                300:'bouquet_movies'	;1
	504  241   SEND_VAR_EX/66            ?80       $240                 ?1                  	;0
	505  241   SEND_VAL_EX/116           ?96       301:true             ?2                  	;0
	506  241   DO_FCALL_BY_NAME/131      $241=     ?0                   ?0                  	;0
	507  241   JMP_SET/152               #242=     $241                 ?509                	;0
	508  241   QM_ASSIGN/22              #242=     302:array (
)        ?0                  	;0
	509  241   SEND_VAL_EX/116           ?112      #242                 ?3                  	;0
	510  241   DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
	511  241   SEND_VAR_NO_REF_EX/50     ?80       $243                 ?1                  	;0
	512  241   DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
	513  241   SEND_VAR_NO_REF_EX/50     ?96       $244                 ?2                  	;0
	514  241   DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
	515  241   ASSIGN/38                 ?212      16?27                $245                	;0
	516  242   INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'array_map'     	;2
	517  242   SEND_VAL_EX/116           ?80       305:'intval'         ?1                  	;0
	518  242   INIT_FCALL_BY_NAME/59     ?0        ?0                   306:'array_unique'  	;1
	519  242   INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'json_decode'   	;2
	520  242   FETCH_DIM_FUNC_ARG/93     $247=     16?20                310:'bouquet_series'	;1
	521  242   SEND_VAR_EX/66            ?80       $247                 ?1                  	;0
	522  242   SEND_VAL_EX/116           ?96       311:true             ?2                  	;0
	523  242   DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
	524  242   JMP_SET/152               #249=     $248                 ?526                	;0
	525  242   QM_ASSIGN/22              #249=     312:array (
)        ?0                  	;0
	526  242   SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
	527  242   DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
	528  242   SEND_VAR_NO_REF_EX/50     ?96       $250                 ?2                  	;0
	529  242   DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
	530  242   ASSIGN/38                 ?218      16?26                $251                	;0
	531  243   INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'count'         	;1
	532  243   SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	533  243   DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
	534  243   IS_SMALLER/19             #254=     315:0                $253                	;0
	535  243   BOOL_NOT/13               #255=     #254                 ?0                  	;0
	536  243   JMPZ/43                   ?0        #255                 ?539                	;0	>>539
	537  244   NOP/0                     ?0        ?0                   ?0                  	;1
	538  244   GOTO/253                  ?0        ?445                 ?316                	;0
	539  246   INIT_METHOD_CALL/112      ?0        16?1                 317:'query'         	;1	<<536
	540  246   INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'implode'       	;2
	541  246   SEND_VAL_EX/116           ?80       321:','              ?1                  	;0
	542  246   SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
	543  246   DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
	544  246   CONCAT/8                  #257=     322:'SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams` WHERE `id` IN (' $256                	;0
	545  246   CONCAT/8                  #258=     #257                 323:');'            	;0
	546  246   SEND_VAL_EX/116           ?80       #258                 ?1                  	;0
	547  246   DO_FCALL/60               ?225      ?0                   ?0                  	;0
	548  247   INIT_METHOD_CALL/112      ?0        16?1                 324:'get_rows'      	;0
	549  247   DO_FCALL/60               $260=     ?0                   ?0                  	;0
	550  247   FE_RESET_R/77             $261=     $260                 ?565                	;0
	551  247   FE_FETCH_R/78             ?0        $261                 16?2                	;565	>>565	<<564
	552  248   INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'array_merge'   	;2
	553  248   SEND_VAR_EX/66            ?80       16?23                ?1                  	;0
	554  248   INIT_FCALL_BY_NAME/59     ?0        ?0                   328:'json_decode'   	;2
	555  248   FETCH_DIM_FUNC_ARG/93     $262=     16?2                 330:'category_id'   	;1
	556  248   SEND_VAR_EX/66            ?80       $262                 ?1                  	;0
	557  248   SEND_VAL_EX/116           ?96       331:true             ?2                  	;0
	558  248   DO_FCALL_BY_NAME/131      $263=     ?0                   ?0                  	;0
	559  248   JMP_SET/152               #264=     $263                 ?561                	;0
	560  248   QM_ASSIGN/22              #264=     332:array (
)        ?0                  	;0
	561  248   SEND_VAL_EX/116           ?96       #264                 ?2                  	;0
	562  248   DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
	563  248   ASSIGN/38                 ?232      16?23                $265                	;0
	564  249   JMP/42                    ?0        ?551                 ?0                  	;0	>>551
	565  249   FE_FREE/127               ?0        $261                 ?0                  	;0	<<550
	566  251   NOP/0                     ?0        ?0                   ?0                  	;1
	567  251   GOTO/253                  ?0        ?445                 ?333                	;0
	568  253   ASSIGN/38                 ?233      16?23                334:array (
)       	;0
	569  254   ASSIGN/38                 ?234      16?27                335:array (
)       	;0
	570  255   INIT_FCALL_BY_NAME/59     ?0        ?0                   336:'json_decode'   	;2
	571  255   FETCH_DIM_FUNC_ARG/93     $269=     16?20                338:'bouquet_channels'	;1
	572  255   SEND_VAR_EX/66            ?80       $269                 ?1                  	;0
	573  255   SEND_VAL_EX/116           ?96       339:true             ?2                  	;0
	574  255   DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
	575  255   FE_RESET_R/77             $271=     $270                 ?617                	;0
	576  255   FE_FETCH_R/78             ?0        $271                 16?8                	;617	>>617	<<616
	577  256   INIT_FCALL_BY_NAME/59     ?0        ?0                   340:'intval'        	;1
	578  256   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	579  256   DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
	580  256   IS_SMALLER/19             #273=     342:0                $272                	;0
	581  256   JMPZ_EX/46                #273=     #273                 ?589                	;0	>>589
	582  256   INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'in_array'      	;2
	583  256   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	584  256   FETCH_DIM_FUNC_ARG/93     $274=     16?3                 345:'channels'      	;2
	585  256   SEND_VAR_EX/66            ?96       $274                 ?2                  	;0
	586  256   DO_FCALL_BY_NAME/131      $275=     ?0                   ?0                  	;0
	587  256   BOOL_NOT/13               #276=     $275                 ?0                  	;0
	588  256   BOOL/52                   #273=     #276                 ?0                  	;0
	589  256   BOOL_NOT/13               #277=     #273                 ?0                  	;0	<<581
	590  256   JMPZ/43                   ?0        #277                 ?594                	;0	>>594
	591  257   NOP/0                     ?0        ?0                   ?0                  	;1
	592  257   NOP/0                     ?0        ?0                   ?0                  	;1
	593  257   GOTO/253                  ?0        ?597                 ?346                	;0
	594  259   FETCH_DIM_W/84            $278=     16?3                 347:'channels'      	;0	<<590
	595  259   ASSIGN_DIM/147            ?245      $278                 ?4397406            	;0
	596  259   OP_DATA/137               ?0        16?8                 ?0                  	;0
	597  261   INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'intval'        	;1
	598  261   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	599  261   DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
	600  261   ISSET_ISEMPTY_DIM_OBJ/115 #281=     16?19                $280                	;33554432
	601  261   JMPZ/43                   ?0        #281                 ?605                	;0	>>605
	602  262   NOP/0                     ?0        ?0                   ?0                  	;1
	603  262   NOP/0                     ?0        ?0                   ?0                  	;1
	604  262   GOTO/253                  ?0        ?610                 ?350                	;0
	605  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'intval'        	;1	<<601
	606  264   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	607  264   DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
	608  264   ASSIGN_DIM/147            ?249      16?19                $282                	;0
	609  264   OP_DATA/137               ?0        353:array (
)        ?0                  	;0
	610  266   INIT_FCALL_BY_NAME/59     ?0        ?0                   354:'intval'        	;1
	611  266   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	612  266   DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
	613  266   FETCH_DIM_W/84            $285=     16?19                $284                	;0
	614  266   ASSIGN_DIM/147            ?252      $285                 ?0                  	;0
	615  266   OP_DATA/137               ?0        16?21                ?0                  	;0
	616  267   JMP/42                    ?0        ?576                 ?0                  	;0	>>576
	617  267   FE_FREE/127               ?0        $271                 ?0                  	;0	<<575
	618  270   INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'json_decode'   	;2
	619  270   FETCH_DIM_FUNC_ARG/93     $287=     16?20                358:'bouquet_radios'	;1
	620  270   SEND_VAR_EX/66            ?80       $287                 ?1                  	;0
	621  270   SEND_VAL_EX/116           ?96       359:true             ?2                  	;0
	622  270   DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
	623  270   FE_RESET_R/77             $289=     $288                 ?665                	;0
	624  270   FE_FETCH_R/78             ?0        $289                 16?8                	;665	>>665	<<664
	625  271   INIT_FCALL_BY_NAME/59     ?0        ?0                   360:'intval'        	;1
	626  271   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	627  271   DO_FCALL_BY_NAME/131      $290=     ?0                   ?0                  	;0
	628  271   IS_SMALLER/19             #291=     362:0                $290                	;0
	629  271   JMPZ_EX/46                #291=     #291                 ?637                	;0	>>637
	630  271   INIT_FCALL_BY_NAME/59     ?0        ?0                   363:'in_array'      	;2
	631  271   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	632  271   FETCH_DIM_FUNC_ARG/93     $292=     16?3                 365:'radios'        	;2
	633  271   SEND_VAR_EX/66            ?96       $292                 ?2                  	;0
	634  271   DO_FCALL_BY_NAME/131      $293=     ?0                   ?0                  	;0
	635  271   BOOL_NOT/13               #294=     $293                 ?0                  	;0
	636  271   BOOL/52                   #291=     #294                 ?0                  	;0
	637  271   BOOL_NOT/13               #295=     #291                 ?0                  	;0	<<629
	638  271   JMPZ/43                   ?0        #295                 ?642                	;0	>>642
	639  272   NOP/0                     ?0        ?0                   ?0                  	;1
	640  272   NOP/0                     ?0        ?0                   ?0                  	;1
	641  272   GOTO/253                  ?0        ?645                 ?366                	;0
	642  274   FETCH_DIM_W/84            $296=     16?3                 367:'radios'        	;0	<<638
	643  274   ASSIGN_DIM/147            ?263      $296                 ?4397406            	;0
	644  274   OP_DATA/137               ?0        16?8                 ?0                  	;0
	645  276   INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'intval'        	;1
	646  276   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	647  276   DO_FCALL_BY_NAME/131      $298=     ?0                   ?0                  	;0
	648  276   ISSET_ISEMPTY_DIM_OBJ/115 #299=     16?19                $298                	;33554432
	649  276   JMPZ/43                   ?0        #299                 ?653                	;0	>>653
	650  277   NOP/0                     ?0        ?0                   ?0                  	;1
	651  277   NOP/0                     ?0        ?0                   ?0                  	;1
	652  277   GOTO/253                  ?0        ?658                 ?370                	;0
	653  279   INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'intval'        	;1	<<649
	654  279   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	655  279   DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
	656  279   ASSIGN_DIM/147            ?267      16?19                $300                	;0
	657  279   OP_DATA/137               ?0        373:array (
)        ?0                  	;0
	658  281   INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'intval'        	;1
	659  281   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	660  281   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
	661  281   FETCH_DIM_W/84            $303=     16?19                $302                	;0
	662  281   ASSIGN_DIM/147            ?270      $303                 ?0                  	;0
	663  281   OP_DATA/137               ?0        16?21                ?0                  	;0
	664  282   JMP/42                    ?0        ?624                 ?0                  	;0	>>624
	665  282   FE_FREE/127               ?0        $289                 ?0                  	;0	<<623
	666  284   NOP/0                     ?0        ?0                   ?0                  	;1
	667  284   GOTO/253                  ?0        ?321                 ?376                	;0
	668  285   JMP/42                    ?0        ?310                 ?0                  	;0	>>310
	669  285   FE_FREE/127               ?0        $168                 ?0                  	;0	<<309
	670  288   GOTO/253                  ?0        ?107                 ?377                	;0
	671  291   INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'file_put_contents'	;2
	672  291   FETCH_CONSTANT/99         #305=     ?0                   380:'CACHE_TMP_PATH'	;16
	673  291   CONCAT/8                  #306=     #305                 383:'reseller_domains'	;0
	674  291   SEND_VAL_EX/116           ?80       #306                 ?1                  	;0
	675  291   INIT_FCALL_BY_NAME/59     ?0        ?0                   384:'igbinary_serialize'	;1
	676  291   SEND_VAR_EX/66            ?80       16?28                ?1                  	;0
	677  291   DO_FCALL_BY_NAME/131      $307=     ?0                   ?0                  	;0
	678  291   SEND_VAR_NO_REF_EX/50     ?96       $307                 ?2                  	;0
	679  291   DO_FCALL_BY_NAME/131      ?274      ?0                   ?0                  	;0
	680  292   INIT_FCALL_BY_NAME/59     ?0        ?0                   386:'file_put_contents'	;2
	681  292   FETCH_CONSTANT/99         #309=     ?0                   388:'CACHE_TMP_PATH'	;16
	682  292   CONCAT/8                  #310=     #309                 391:'channel_order' 	;0
	683  292   SEND_VAL_EX/116           ?80       #310                 ?1                  	;0
	684  292   INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'igbinary_serialize'	;1
	685  292   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	686  292   DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
	687  292   SEND_VAR_NO_REF_EX/50     ?96       $311                 ?2                  	;0
	688  292   DO_FCALL_BY_NAME/131      ?278      ?0                   ?0                  	;0
	689  293   INIT_FCALL_BY_NAME/59     ?0        ?0                   394:'file_put_contents'	;2
	690  293   FETCH_CONSTANT/99         #313=     ?0                   396:'CACHE_TMP_PATH'	;16
	691  293   CONCAT/8                  #314=     #313                 399:'bouquet_map'   	;0
	692  293   SEND_VAL_EX/116           ?80       #314                 ?1                  	;0
	693  293   INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'igbinary_serialize'	;1
	694  293   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	695  293   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
	696  293   SEND_VAR_NO_REF_EX/50     ?96       $315                 ?2                  	;0
	697  293   DO_FCALL_BY_NAME/131      ?282      ?0                   ?0                  	;0
	698  294   INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'file_put_contents'	;2
	699  294   FETCH_CONSTANT/99         #317=     ?0                   404:'CACHE_TMP_PATH'	;16
	700  294   CONCAT/8                  #318=     #317                 407:'category_map'  	;0
	701  294   SEND_VAL_EX/116           ?80       #318                 ?1                  	;0
	702  294   INIT_FCALL_BY_NAME/59     ?0        ?0                   408:'igbinary_serialize'	;1
	703  294   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
	704  294   DO_FCALL_BY_NAME/131      $319=     ?0                   ?0                  	;0
	705  294   SEND_VAR_NO_REF_EX/50     ?96       $319                 ?2                  	;0
	706  294   DO_FCALL_BY_NAME/131      ?286      ?0                   ?0                  	;0
	707  295   GOTO/253                  ?0        ?97                  ?410                	;0
	708  300   ASSIGN/38                 ?287      16?9                 411:array (
)       	;0
	709  301   FETCH_STATIC_PROP_R/173   $322=     412:'rSettings'      413:'XUI'           	;0
	710  301   FETCH_DIM_R/81            $323=     $322                 415:'channel_number_type'	;0
	711  301   IS_EQUAL/17               #324=     $323                 416:'manual'        	;0
	712  301   BOOL_NOT/13               #325=     #324                 ?0                  	;0
	713  301   JMPZ/43                   ?0        #325                 ?715                	;0	>>715
	714  302   GOTO/253                  ?0        ?731                 ?417                	;0
	715  304   GOTO/253                  ?0        ?716                 ?418                	;0	<<713
	716  306   INIT_METHOD_CALL/112      ?0        16?1                 419:'query'         	;1
	717  306   SEND_VAL_EX/116           ?80       421:'SELECT `id`, `order` FROM `streams` ORDER BY `order` ASC;' ?1                  	;0
	718  306   DO_FCALL/60               ?292      ?0                   ?0                  	;0
	719  307   INIT_METHOD_CALL/112      ?0        16?1                 422:'get_rows'      	;0
	720  307   DO_FCALL/60               $327=     ?0                   ?0                  	;0
	721  307   FE_RESET_R/77             $328=     $327                 ?730                	;0
	722  307   FE_FETCH_R/78             ?0        $328                 16?2                	;730	>>730	<<729
	723  308   INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'intval'        	;1
	724  308   FETCH_DIM_FUNC_ARG/93     $330=     16?2                 426:'id'            	;1
	725  308   SEND_VAR_EX/66            ?80       $330                 ?1                  	;0
	726  308   DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
	727  308   ASSIGN_DIM/147            ?295      16?9                 ?4414262            	;0
	728  308   OP_DATA/137               ?0        $331                 ?0                  	;0
	729  309   JMP/42                    ?0        ?722                 ?0                  	;0	>>722
	730  309   FE_FREE/127               ?0        $328                 ?0                  	;0	<<721
	731  313   ASSIGN/38                 ?298      16?22                427:array (
)       	;0
	732  314   GOTO/253                  ?0        ?300                 ?428                	;0
	733  317   INIT_FCALL_BY_NAME/59     ?0        ?0                   429:'exec'          	;1
	734  317   FETCH_CONSTANT/99         #333=     ?0                   431:'TMP_PATH'      	;16
	735  317   CONCAT/8                  #334=     434:'sudo rm -rf '   #333                	;0
	736  317   CONCAT/8                  #335=     #334                 435:'*'             	;0
	737  317   SEND_VAL_EX/116           ?80       #335                 ?1                  	;0
	738  317   DO_FCALL_BY_NAME/131      ?302      ?0                   ?0                  	;0
	739  318   INIT_FCALL_BY_NAME/59     ?0        ?0                   436:'exec'          	;1
	740  318   FETCH_CONSTANT/99         #337=     ?0                   438:'SIGNALS_PATH'  	;16
	741  318   CONCAT/8                  #338=     441:'sudo rm -rf '   #337                	;0
	742  318   CONCAT/8                  #339=     #338                 442:'*'             	;0
	743  318   SEND_VAL_EX/116           ?80       #339                 ?1                  	;0
	744  318   DO_FCALL_BY_NAME/131      ?306      ?0                   ?0                  	;0
	745  321   GOTO/253                  ?0        ?931                 ?443                	;0
	746  325   ASSIGN/38                 ?307      16?28                444:array (
)       	;0
	747  326   INIT_METHOD_CALL/112      ?0        16?1                 445:'query'         	;1
	748  326   SEND_VAL_EX/116           ?80       447:'SELECT `reseller_dns` FROM `users` WHERE `status` = 1 AND `reseller_dns` IS NOT NULL;' ?1                  	;0
	749  326   DO_FCALL/60               ?308      ?0                   ?0                  	;0
	750  327   INIT_METHOD_CALL/112      ?0        16?1                 448:'get_rows'      	;0
	751  327   DO_FCALL/60               $343=     ?0                   ?0                  	;0
	752  327   FE_RESET_R/77             $344=     $343                 ?761                	;0
	753  327   FE_FETCH_R/78             ?0        $344                 16?2                	;761	>>761	<<760
	754  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   450:'strtolower'    	;1
	755  328   FETCH_DIM_FUNC_ARG/93     $346=     16?2                 452:'reseller_dns'  	;1
	756  328   SEND_VAR_EX/66            ?80       $346                 ?1                  	;0
	757  328   DO_FCALL_BY_NAME/131      $347=     ?0                   ?0                  	;0
	758  328   ASSIGN_DIM/147            ?311      16?28                ?4414262            	;0
	759  328   OP_DATA/137               ?0        $347                 ?0                  	;0
	760  329   JMP/42                    ?0        ?753                 ?0                  	;0	>>753
	761  329   FE_FREE/127               ?0        $344                 ?0                  	;0	<<752
	762  331   GOTO/253                  ?0        ?671                 ?453                	;0
	763  333   ASSIGN/38                 ?314      16?29                454:array (
)       	;0
	764  334   INIT_METHOD_CALL/112      ?0        16?1                 455:'query'         	;1
	765  334   SEND_VAL_EX/116           ?80       457:'SELECT `ip`, `password`, `push`, `pull` FROM `rtmp_ips`' ?1                  	;0
	766  334   DO_FCALL/60               ?315      ?0                   ?0                  	;0
	767  335   INIT_METHOD_CALL/112      ?0        16?1                 458:'get_rows'      	;0
	768  335   DO_FCALL/60               $350=     ?0                   ?0                  	;0
	769  335   FE_RESET_R/77             $351=     $350                 ?790                	;0
	770  335   FE_FETCH_R/78             ?0        $351                 16?2                	;790	>>790	<<789
	771  336   INIT_FCALL_BY_NAME/59     ?0        ?0                   460:'gethostbyname' 	;1
	772  336   FETCH_DIM_FUNC_ARG/93     $352=     16?2                 462:'ip'            	;1
	773  336   SEND_VAR_EX/66            ?80       $352                 ?1                  	;0
	774  336   DO_FCALL_BY_NAME/131      $353=     ?0                   ?0                  	;0
	775  336   FETCH_DIM_R/81            $355=     16?2                 463:'password'      	;0
	776  336   INIT_ARRAY/71             #356=     $355                 464:'password'      	;14
	777  336   INIT_FCALL_BY_NAME/59     ?0        ?0                   465:'boolval'       	;1
	778  336   FETCH_DIM_FUNC_ARG/93     $357=     16?2                 467:'push'          	;1
	779  336   SEND_VAR_EX/66            ?80       $357                 ?1                  	;0
	780  336   DO_FCALL_BY_NAME/131      $358=     ?0                   ?0                  	;0
	781  336   ADD_ARRAY_ELEMENT/72      #356=     $358                 468:'push'          	;0
	782  336   INIT_FCALL_BY_NAME/59     ?0        ?0                   469:'boolval'       	;1
	783  336   FETCH_DIM_FUNC_ARG/93     $359=     16?2                 471:'pull'          	;1
	784  336   SEND_VAR_EX/66            ?80       $359                 ?1                  	;0
	785  336   DO_FCALL_BY_NAME/131      $360=     ?0                   ?0                  	;0
	786  336   ADD_ARRAY_ELEMENT/72      #356=     $360                 472:'pull'          	;0
	787  336   ASSIGN_DIM/147            ?320      16?29                $353                	;0
	788  336   OP_DATA/137               ?0        #356                 ?0                  	;0
	789  337   JMP/42                    ?0        ?770                 ?0                  	;0	>>770
	790  337   FE_FREE/127               ?0        $351                 ?0                  	;0	<<769
	791  340   INIT_FCALL_BY_NAME/59     ?0        ?0                   473:'file_put_contents'	;2
	792  340   FETCH_CONSTANT/99         #361=     ?0                   475:'CACHE_TMP_PATH'	;16
	793  340   CONCAT/8                  #362=     #361                 478:'rtmp_ips'      	;0
	794  340   SEND_VAL_EX/116           ?80       #362                 ?1                  	;0
	795  340   INIT_FCALL_BY_NAME/59     ?0        ?0                   479:'igbinary_serialize'	;1
	796  340   SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	797  340   DO_FCALL_BY_NAME/131      $363=     ?0                   ?0                  	;0
	798  340   SEND_VAR_NO_REF_EX/50     ?96       $363                 ?2                  	;0
	799  340   DO_FCALL_BY_NAME/131      ?330      ?0                   ?0                  	;0
	800  341   GOTO/253                  ?0        ?208                 ?481                	;0
	801  343   BIND_GLOBAL/168           ?0        16?1                 482:'b62d6460eb33ea07'	;0	<<0
	802  343   BIND_GLOBAL/168           ?0        16?30                483:'C73510f736862639'	;0
	803  344   INIT_FCALL_BY_NAME/59     ?0        ?0                   484:'defined'       	;1
	804  344   SEND_VAL_EX/116           ?80       486:'CACHE_TMP_PATH' ?1                  	;0
	805  344   DO_FCALL_BY_NAME/131      $365=     ?0                   ?0                  	;0
	806  344   JMPZ/43                   ?0        $365                 ?808                	;0	>>808
	807  345   GOTO/253                  ?0        ?809                 ?487                	;0
	808  347   EXIT/79                   ?0        ?0                   ?0                  	;0	<<806
	809  349   JMPZ_EX/46                #366=     16?30                ?816                	;0	>>816
	810  349   INIT_FCALL_BY_NAME/59     ?0        ?0                   488:'file_exists'   	;1
	811  349   FETCH_CONSTANT/99         #367=     ?0                   490:'CACHE_TMP_PATH'	;16
	812  349   CONCAT/8                  #368=     #367                 493:'settings'      	;0
	813  349   SEND_VAL_EX/116           ?80       #368                 ?1                  	;0
	814  349   DO_FCALL_BY_NAME/131      $369=     ?0                   ?0                  	;0
	815  349   BOOL/52                   #366=     $369                 ?0                  	;0
	816  349   BOOL_NOT/13               #370=     #366                 ?0                  	;0	<<809
	817  349   JMPZ/43                   ?0        #370                 ?819                	;0	>>819
	818  350   GOTO/253                  ?0        ?745                 ?494                	;0
	819  352   GOTO/253                  ?0        ?256                 ?495                	;0	<<817
	820  354   INIT_METHOD_CALL/112      ?0        16?1                 496:'query'         	;1
	821  354   SEND_VAL_EX/116           ?80       498:'SELECT `id`, (SELECT MAX(`streams`.`added`) FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) AS `last_modified_stream` FROM `streams_series` ORDER BY `last_modified_stream` DESC, `last_modified` DESC, `id` DESC;' ?1                  	;0
	822  354   DO_FCALL/60               ?337      ?0                   ?0                  	;0
	823  355   INIT_METHOD_CALL/112      ?0        16?1                 499:'get_rows'      	;0
	824  355   DO_FCALL/60               $372=     ?0                   ?0                  	;0
	825  355   FE_RESET_R/77             $373=     $372                 ?834                	;0
	826  355   FE_FETCH_R/78             ?0        $373                 16?2                	;834	>>834	<<833
	827  356   INIT_FCALL_BY_NAME/59     ?0        ?0                   501:'intval'        	;1
	828  356   FETCH_DIM_FUNC_ARG/93     $375=     16?2                 503:'id'            	;1
	829  356   SEND_VAR_EX/66            ?80       $375                 ?1                  	;0
	830  356   DO_FCALL_BY_NAME/131      $376=     ?0                   ?0                  	;0
	831  356   ASSIGN_DIM/147            ?340      16?4                 ?4414262            	;0
	832  356   OP_DATA/137               ?0        $376                 ?0                  	;0
	833  357   JMP/42                    ?0        ?826                 ?0                  	;0	>>826
	834  357   FE_FREE/127               ?0        $373                 ?0                  	;0	<<825
	835  360   INIT_FCALL_BY_NAME/59     ?0        ?0                   504:'file_put_contents'	;2
	836  360   FETCH_CONSTANT/99         #377=     ?0                   506:'CACHE_TMP_PATH'	;16
	837  360   CONCAT/8                  #378=     #377                 509:'series_order'  	;0
	838  360   SEND_VAL_EX/116           ?80       #378                 ?1                  	;0
	839  360   INIT_FCALL_BY_NAME/59     ?0        ?0                   510:'igbinary_serialize'	;1
	840  360   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	841  360   DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
	842  360   SEND_VAR_NO_REF_EX/50     ?96       $379                 ?2                  	;0
	843  360   DO_FCALL_BY_NAME/131      ?346      ?0                   ?0                  	;0
	844  362   GOTO/253                  ?0        ?77                  ?512                	;0
	845  364   UNSET_DIM/75              ?0        16?31                513:'php_pids'      	;0
	846  365   INIT_STATIC_METHOD_CALL/113 ?0        514:'XUI'            516:'f7A8933150230eaB'	;2
	847  365   SEND_VAL_EX/116           ?80       518:'servers'        ?1                  	;0
	848  365   SEND_VAR_EX/66            ?96       16?31                ?2                  	;0
	849  365   DO_FCALL/60               ?347      ?0                   ?0                  	;0
	850  366   INIT_STATIC_METHOD_CALL/113 ?0        519:'XUI'            521:'f7a8933150230EaB'	;2
	851  366   SEND_VAL_EX/116           ?80       523:'proxy_servers'  ?1                  	;0
	852  366   INIT_STATIC_METHOD_CALL/113 ?0        524:'XUI'            526:'E190F2B3b0819F7D'	;1
	853  366   SEND_VAL_EX/116           ?80       528:true             ?1                  	;0
	854  366   DO_FCALL/60               $382=     ?0                   ?0                  	;0
	855  366   SEND_VAR_NO_REF_EX/50     ?96       $382                 ?2                  	;0
	856  366   DO_FCALL/60               ?349      ?0                   ?0                  	;0
	857  367   INIT_STATIC_METHOD_CALL/113 ?0        529:'XUI'            531:'f7A8933150230EAb'	;2
	858  367   SEND_VAL_EX/116           ?80       533:'blocked_servers' ?1                  	;0
	859  367   INIT_STATIC_METHOD_CALL/113 ?0        534:'XUI'            536:'c18B3aa078DD5f59'	;1
	860  367   SEND_VAL_EX/116           ?80       538:true             ?1                  	;0
	861  367   DO_FCALL/60               $384=     ?0                   ?0                  	;0
	862  367   SEND_VAR_NO_REF_EX/50     ?96       $384                 ?2                  	;0
	863  367   DO_FCALL/60               ?351      ?0                   ?0                  	;0
	864  368   INIT_STATIC_METHOD_CALL/113 ?0        539:'XUI'            541:'f7a8933150230EAb'	;2
	865  368   SEND_VAL_EX/116           ?80       543:'blocked_isp'    ?1                  	;0
	866  368   INIT_STATIC_METHOD_CALL/113 ?0        544:'XUI'            546:'d0826DaD642a6222'	;1
	867  368   SEND_VAL_EX/116           ?80       548:true             ?1                  	;0
	868  368   DO_FCALL/60               $386=     ?0                   ?0                  	;0
	869  368   SEND_VAR_NO_REF_EX/50     ?96       $386                 ?2                  	;0
	870  368   DO_FCALL/60               ?353      ?0                   ?0                  	;0
	871  369   GOTO/253                  ?0        ?894                 ?549                	;0
	872  371   ASSIGN/38                 ?354      16?32                550:array (
)       	;0
	873  372   INIT_METHOD_CALL/112      ?0        16?1                 551:'query'         	;1
	874  372   SEND_VAL_EX/116           ?80       553:'SELECT `access_output_id`, `output_key` FROM `output_formats`;' ?1                  	;0
	875  372   DO_FCALL/60               ?355      ?0                   ?0                  	;0
	876  373   INIT_METHOD_CALL/112      ?0        16?1                 554:'get_rows'      	;0
	877  373   DO_FCALL/60               $390=     ?0                   ?0                  	;0
	878  373   FE_RESET_R/77             $391=     $390                 ?883                	;0
	879  373   FE_FETCH_R/78             ?0        $391                 16?2                	;883	>>883	<<882
	880  374   ASSIGN_DIM/147            ?358      16?32                ?4414262            	;0
	881  374   OP_DATA/137               ?0        16?2                 ?0                  	;0
	882  375   JMP/42                    ?0        ?879                 ?0                  	;0	>>879
	883  375   FE_FREE/127               ?0        $391                 ?0                  	;0	<<878
	884  378   INIT_FCALL_BY_NAME/59     ?0        ?0                   556:'file_put_contents'	;2
	885  378   FETCH_CONSTANT/99         #393=     ?0                   558:'CACHE_TMP_PATH'	;16
	886  378   CONCAT/8                  #394=     #393                 561:'output_formats'	;0
	887  378   SEND_VAL_EX/116           ?80       #394                 ?1                  	;0
	888  378   INIT_FCALL_BY_NAME/59     ?0        ?0                   562:'igbinary_serialize'	;1
	889  378   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
	890  378   DO_FCALL_BY_NAME/131      $395=     ?0                   ?0                  	;0
	891  378   SEND_VAR_NO_REF_EX/50     ?96       $395                 ?2                  	;0
	892  378   DO_FCALL_BY_NAME/131      ?362      ?0                   ?0                  	;0
	893  379   GOTO/253                  ?0        ?1                   ?564                	;0
	894  381   INIT_STATIC_METHOD_CALL/113 ?0        565:'XUI'            567:'f7A8933150230EAB'	;2
	895  381   SEND_VAL_EX/116           ?80       569:'blocked_ua'     ?1                  	;0
	896  381   INIT_STATIC_METHOD_CALL/113 ?0        570:'XUI'            572:'DF8943E432872275'	;1
	897  381   SEND_VAL_EX/116           ?80       574:true             ?1                  	;0
	898  381   DO_FCALL/60               $397=     ?0                   ?0                  	;0
	899  381   SEND_VAR_NO_REF_EX/50     ?96       $397                 ?2                  	;0
	900  381   DO_FCALL/60               ?364      ?0                   ?0                  	;0
	901  382   INIT_STATIC_METHOD_CALL/113 ?0        575:'XUI'            577:'F7a8933150230Eab'	;2
	902  382   SEND_VAL_EX/116           ?80       579:'blocked_ips'    ?1                  	;0
	903  382   INIT_STATIC_METHOD_CALL/113 ?0        580:'XUI'            582:'AB69Ecd4D7705061'	;1
	904  382   SEND_VAL_EX/116           ?80       584:true             ?1                  	;0
	905  382   DO_FCALL/60               $399=     ?0                   ?0                  	;0
	906  382   SEND_VAR_NO_REF_EX/50     ?96       $399                 ?2                  	;0
	907  382   DO_FCALL/60               ?366      ?0                   ?0                  	;0
	908  383   INIT_STATIC_METHOD_CALL/113 ?0        585:'XUI'            587:'f7A8933150230EAB'	;2
	909  383   SEND_VAL_EX/116           ?80       589:'allowed_ips'    ?1                  	;0
	910  383   INIT_STATIC_METHOD_CALL/113 ?0        590:'XUI'            592:'DE052F142A92e9bf'	;1
	911  383   SEND_VAL_EX/116           ?80       594:true             ?1                  	;0
	912  383   DO_FCALL/60               $401=     ?0                   ?0                  	;0
	913  383   SEND_VAR_NO_REF_EX/50     ?96       $401                 ?2                  	;0
	914  383   DO_FCALL/60               ?368      ?0                   ?0                  	;0
	915  384   INIT_STATIC_METHOD_CALL/113 ?0        595:'XUI'            597:'f7A8933150230eab'	;2
	916  384   SEND_VAL_EX/116           ?80       599:'categories'     ?1                  	;0
	917  384   INIT_STATIC_METHOD_CALL/113 ?0        600:'XUI'            602:'C721BD954A5F072f'	;2
	918  384   SEND_VAL_EX/116           ?80       604:NULL             ?1                  	;0
	919  384   SEND_VAL_EX/116           ?96       605:true             ?2                  	;0
	920  384   DO_FCALL/60               $403=     ?0                   ?0                  	;0
	921  384   SEND_VAR_NO_REF_EX/50     ?96       $403                 ?2                  	;0
	922  384   DO_FCALL/60               ?370      ?0                   ?0                  	;0
	923  385   FETCH_CONSTANT/99         #406=     ?0                   609:'SERVER_ID'     	;16
	924  385   FETCH_STATIC_PROP_R/173   $405=     606:'rServers'       607:'XUI'           	;0
	925  385   FETCH_DIM_R/81            $407=     $405                 #406                	;0
	926  385   FETCH_DIM_R/81            $408=     $407                 612:'is_main'       	;0
	927  385   BOOL_NOT/13               #409=     $408                 ?0                  	;0
	928  385   JMPZ/43                   ?0        #409                 ?930                	;0	>>930
	929  386   GOTO/253                  ?0        ?106                 ?613                	;0
	930  388   GOTO/253                  ?0        ?872                 ?614                	;0	<<928
	931  390   FETCH_CONSTANT/99         #410=     ?0                   615:'EPG_PATH'      	;16
	932  390   INIT_ARRAY/71             #411=     #410                 ?0                  	;84
	933  390   FETCH_CONSTANT/99         #412=     ?0                   618:'VOD_PATH'      	;16
	934  390   ADD_ARRAY_ELEMENT/72      #411=     #412                 ?0                  	;0
	935  390   FETCH_CONSTANT/99         #413=     ?0                   621:'ARCHIVE_PATH'  	;16
	936  390   ADD_ARRAY_ELEMENT/72      #411=     #413                 ?0                  	;0
	937  390   FETCH_CONSTANT/99         #414=     ?0                   624:'CREATED_PATH'  	;16
	938  390   ADD_ARRAY_ELEMENT/72      #411=     #414                 ?0                  	;0
	939  390   FETCH_CONSTANT/99         #415=     ?0                   627:'DELAY_PATH'    	;16
	940  390   ADD_ARRAY_ELEMENT/72      #411=     #415                 ?0                  	;0
	941  390   FETCH_CONSTANT/99         #416=     ?0                   630:'VIDEO_PATH'    	;16
	942  390   ADD_ARRAY_ELEMENT/72      #411=     #416                 ?0                  	;0
	943  390   FETCH_CONSTANT/99         #417=     ?0                   633:'PLAYLIST_PATH' 	;16
	944  390   ADD_ARRAY_ELEMENT/72      #411=     #417                 ?0                  	;0
	945  390   FETCH_CONSTANT/99         #418=     ?0                   636:'CONS_TMP_PATH' 	;16
	946  390   ADD_ARRAY_ELEMENT/72      #411=     #418                 ?0                  	;0
	947  390   FETCH_CONSTANT/99         #419=     ?0                   639:'CRONS_TMP_PATH'	;16
	948  390   ADD_ARRAY_ELEMENT/72      #411=     #419                 ?0                  	;0
	949  390   FETCH_CONSTANT/99         #420=     ?0                   642:'PLAYER_TMP_PATH'	;16
	950  390   ADD_ARRAY_ELEMENT/72      #411=     #420                 ?0                  	;0
	951  390   FETCH_CONSTANT/99         #421=     ?0                   645:'CACHE_TMP_PATH'	;16
	952  390   ADD_ARRAY_ELEMENT/72      #411=     #421                 ?0                  	;0
	953  390   FETCH_CONSTANT/99         #422=     ?0                   648:'DIVERGENCE_TMP_PATH'	;16
	954  390   ADD_ARRAY_ELEMENT/72      #411=     #422                 ?0                  	;0
	955  390   FETCH_CONSTANT/99         #423=     ?0                   651:'FLOOD_TMP_PATH'	;16
	956  390   ADD_ARRAY_ELEMENT/72      #411=     #423                 ?0                  	;0
	957  390   FETCH_CONSTANT/99         #424=     ?0                   654:'MINISTRA_TMP_PATH'	;16
	958  390   ADD_ARRAY_ELEMENT/72      #411=     #424                 ?0                  	;0
	959  390   FETCH_CONSTANT/99         #425=     ?0                   657:'SIGNALS_TMP_PATH'	;16
	960  390   ADD_ARRAY_ELEMENT/72      #411=     #425                 ?0                  	;0
	961  390   FETCH_CONSTANT/99         #426=     ?0                   660:'LOGS_TMP_PATH' 	;16
	962  390   ADD_ARRAY_ELEMENT/72      #411=     #426                 ?0                  	;0
	963  390   FETCH_CONSTANT/99         #427=     ?0                   663:'WATCH_TMP_PATH'	;16
	964  390   ADD_ARRAY_ELEMENT/72      #411=     #427                 ?0                  	;0
	965  390   FETCH_CONSTANT/99         #428=     ?0                   666:'CIDR_TMP_PATH' 	;16
	966  390   ADD_ARRAY_ELEMENT/72      #411=     #428                 ?0                  	;0
	967  390   FETCH_CONSTANT/99         #429=     ?0                   669:'STREAMS_TMP_PATH'	;16
	968  390   ADD_ARRAY_ELEMENT/72      #411=     #429                 ?0                  	;0
	969  390   FETCH_CONSTANT/99         #430=     ?0                   672:'LINES_TMP_PATH'	;16
	970  390   ADD_ARRAY_ELEMENT/72      #411=     #430                 ?0                  	;0
	971  390   FETCH_CONSTANT/99         #431=     ?0                   675:'SERIES_TMP_PATH'	;16
	972  390   ADD_ARRAY_ELEMENT/72      #411=     #431                 ?0                  	;0
	973  390   FE_RESET_R/77             $432=     #411                 ?985                	;0
	974  390   FE_FETCH_R/78             ?0        $432                 16?33               	;985	>>985	<<984
	975  391   INIT_FCALL_BY_NAME/59     ?0        ?0                   678:'file_exists'   	;1
	976  391   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	977  391   DO_FCALL_BY_NAME/131      $433=     ?0                   ?0                  	;0
	978  391   JMPZ/43                   ?0        $433                 ?981                	;0	>>981
	979  392   NOP/0                     ?0        ?0                   ?0                  	;1
	980  392   GOTO/253                  ?0        ?984                 ?680                	;0
	981  394   INIT_FCALL_BY_NAME/59     ?0        ?0                   681:'mkdir'         	;1	<<978
	982  394   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	983  394   DO_FCALL_BY_NAME/131      ?400      ?0                   ?0                  	;0
	984  396   JMP/42                    ?0        ?974                 ?0                  	;0	>>974
	985  396   FE_FREE/127               ?0        $432                 ?0                  	;0	<<973
	986  399   INIT_STATIC_METHOD_CALL/113 ?0        683:'XUI'            685:'f7a8933150230Eab'	;2
	987  399   SEND_VAL_EX/116           ?80       687:'settings'       ?1                  	;0
	988  399   INIT_STATIC_METHOD_CALL/113 ?0        688:'XUI'            690:'aC49b56DbE10e52c'	;1
	989  399   SEND_VAL_EX/116           ?80       692:true             ?1                  	;0
	990  399   DO_FCALL/60               $435=     ?0                   ?0                  	;0
	991  399   SEND_VAR_NO_REF_EX/50     ?96       $435                 ?2                  	;0
	992  399   DO_FCALL/60               ?402      ?0                   ?0                  	;0
	993  400   INIT_STATIC_METHOD_CALL/113 ?0        693:'XUI'            695:'F7A8933150230EaB'	;2
	994  400   SEND_VAL_EX/116           ?80       697:'bouquets'       ?1                  	;0
	995  400   INIT_STATIC_METHOD_CALL/113 ?0        698:'XUI'            700:'dE27bb48F7BFf12d'	;1
	996  400   SEND_VAL_EX/116           ?80       702:true             ?1                  	;0
	997  400   DO_FCALL/60               $437=     ?0                   ?0                  	;0
	998  400   SEND_VAR_NO_REF_EX/50     ?96       $437                 ?2                  	;0
	999  400   DO_FCALL/60               ?404      ?0                   ?0                  	;0
	1000 401   INIT_STATIC_METHOD_CALL/113 ?0        703:'XUI'            705:'f76008f8dFe1898c'	;1
	1001 401   SEND_VAL_EX/116           ?80       707:true             ?1                  	;0
	1002 401   DO_FCALL/60               $439=     ?0                   ?0                  	;0
	1003 401   ASSIGN/38                 ?406      16?31                $439                	;0
	1004 402   GOTO/253                  ?0        ?845                 ?708                	;0
	1005 404   NOP/0                     ?0        709:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   410  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   410  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   411  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   411  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   411  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   411  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   411  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   412  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   414  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   414  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  416  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  416  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  416  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  416  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  416  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  417  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?42                  ?0                  	;0	>>42
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
13  7    CONCAT/8                  #7=       $6                   11:'/../www/init.php'	;0
14  7    INCLUDE_OR_EVAL/73        ?5        #7                   ?0                  	;8
15  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'ini_set'        	;2
16  8    SEND_VAL_EX/116           ?80       14:'memory_limit'    ?1                  	;0
17  8    SEND_VAL_EX/116           ?96       15:-1                ?2                  	;0
18  8    DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
19  9    ASSIGN/38                 ?7        16?1                 16:false            	;0
20  10   GOTO/253                  ?0        ?21                  ?17                 	;0
21  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'count'          	;1
22  12   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
23  12   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
24  12   IS_EQUAL/17               #12=      $11                  20:2                	;0
25  12   BOOL_NOT/13               #13=      #12                  ?0                  	;0
26  12   JMPZ/43                   ?0        #13                  ?28                 	;0	>>28
27  13   GOTO/253                  ?0        ?29                  ?21                 	;0
28  15   ASSIGN/38                 ?11       16?1                 22:true             	;0	<<26
29  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'cli_set_process_title'	;1
30  17   SEND_VAL_EX/116           ?80       25:'XUI[Cache Builder]' ?1                  	;0
31  17   DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
32  18   FETCH_CONSTANT/99         #16=      ?0                   26:'CRONS_TMP_PATH' 	;16
33  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'md5'            	;1
34  18   INIT_STATIC_METHOD_CALL/113 ?0        31:'XUI'             33:'A336b0Dad3Eaf634'	;0
35  18   DO_FCALL/60               $17=      ?0                   ?0                  	;0
36  18   CONCAT/8                  #18=      $17                  35:'crons\\cache.php'	;0
37  18   SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
38  18   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
39  18   CONCAT/8                  #20=      #16                  $19                 	;0
40  18   ASSIGN/38                 ?18       16?2                 #20                 	;0
41  19   GOTO/253                  ?0        ?60                  ?36                 	;0
42  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'posix_getpwuid' 	;1	<<0
43  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'posix_geteuid'  	;0
44  21   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
45  21   SEND_VAR_NO_REF_EX/50     ?80       $22                  ?1                  	;0
46  21   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
47  21   FETCH_DIM_R/81            $24=      $23                  41:'name'           	;0
48  21   IS_NOT_EQUAL/18           #25=      $24                  42:'xui'            	;0
49  21   BOOL_NOT/13               #26=      #25                  ?0                  	;0
50  21   JMPZ/43                   ?0        #26                  ?52                 	;0	>>52
51  22   GOTO/253                  ?0        ?53                  ?43                 	;0
52  24   EXIT/79                   ?0        44:'Please run as XUI!
' ?0                  	;0	<<50
53  26   BEGIN_SILENCE/57          #27=      ?0                   ?0                  	;0
54  26   FETCH_R/80                $28=      45:'argc'            ?0                  	;268435456
55  26   END_SILENCE/58            ?0        #27                  ?0                  	;0
56  26   JMPZ/43                   ?0        $28                  ?58                 	;0	>>58
57  27   GOTO/253                  ?0        ?1                   ?46                 	;0
58  29   EXIT/79                   ?0        47:0                 ?0                  	;0	<<56
59  30   GOTO/253                  ?0        ?1                   ?48                 	;0
60  32   INIT_STATIC_METHOD_CALL/113 ?0        49:'XUI'             51:'a3CF732c257bd804'	;1
61  32   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
62  32   DO_FCALL/60               ?26       ?0                   ?0                  	;0
63  34   NOP/0                     ?0        ?0                   ?0                  	;0
64  405  INIT_FCALL/61             ?0        ?7136                53:'ab8369074df2aaa3'	;0
65  405  DO_FCALL/60               ?27       ?0                   ?0                  	;0
66  406  GOTO/253                  ?0        ?67                  ?54                 	;0
67  408  NOP/0                     ?0        ?0                   ?0                  	;0
68  418  NOP/0                     ?0        55:1                 ?0                  	;4294967295
*/

?>