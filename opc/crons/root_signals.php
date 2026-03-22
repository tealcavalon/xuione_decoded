<?php


function Ab8369074Df2aAa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    8     JMP/42                    ?0        ?1613                ?0                  	;0	>>1613
	1    11    FETCH_CONSTANT/99         #57=      ?0                   4:'SERVER_ID'       	;16
	2    11    FETCH_STATIC_PROP_R/173   $56=      1:'rServers'         2:'XUI'             	;0
	3    11    FETCH_DIM_R/81            $58=      $56                  #57                 	;0
	4    11    FETCH_DIM_R/81            $59=      $58                  7:'use_disk'        	;0
	5    11    JMPZ/43                   ?0        $59                  ?7                  	;0	>>7
	6    12    GOTO/253                  ?0        ?1655                ?8                  	;0
	7    14    JMPZ/43                   ?0        16?0                 ?9                  	;0	>>9	<<5
	8    15    GOTO/253                  ?0        ?17                  ?9                  	;0
	9    17    INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'array_unshift'  	;2	<<7
	10   17    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	11   17    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'json_encode'    	;1
	12   17    SEND_VAL_EX/116           ?80       14:array (
  'action' => 'enable_ramdisk',
) ?1                  	;0
	13   17    DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
	14   17    INIT_ARRAY/71             #61=      $60                  15:'custom_data'    	;6
	15   17    SEND_VAL_EX/116           ?96       #61                  ?2                  	;0
	16   17    DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
	17   19    GOTO/253                  ?0        ?1654                ?16                 	;0
	18   21    INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'file_put_contents'	;2
	19   21    FETCH_CONSTANT/99         #63=      ?0                   19:'BIN_PATH'       	;16
	20   21    CONCAT/8                  #64=      #63                  22:'nginx/conf/gzip.conf'	;0
	21   21    SEND_VAL_EX/116           ?80       #64                  ?1                  	;0
	22   21    SEND_VAL_EX/116           ?96       23:'gzip off;'       ?2                  	;0
	23   21    DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	24   22    ASSIGN/38                 ?10       16?2                 24:true             	;0
	25   24    GOTO/253                  ?0        ?1716                ?25                 	;0
	26   26    GOTO/253                  ?0        ?1447                ?26                 	;0
	27   28    INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'array_count_values'	;1
	28   28    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	29   28    DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	30   28    FE_RESET_R/77             $68=      $67                  ?52                 	;0
	31   28    FE_FETCH_R/78             #69=      $68                  16?4                	;52	>>52	<<51
	32   28    ASSIGN/38                 ?14       16?5                 #69                 	;0
	33   29    IS_SMALLER/19             #71=      29:1                 16?4                	;0
	34   29    BOOL_NOT/13               #72=      #71                  ?0                  	;0
	35   29    JMPZ/43                   ?0        #72                  ?38                 	;0	>>38
	36   30    NOP/0                     ?0        ?0                   ?0                  	;1
	37   30    GOTO/253                  ?0        ?51                  ?30                 	;0
	38   32    CONCAT/8                  #73=      16?4                 31:'
'              	;0	<<35
	39   32    ECHO/40                   ?0        #73                  ?0                  	;0
	40   33    INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'range'          	;2
	41   33    SEND_VAL_EX/116           ?80       34:1                 ?1                  	;0
	42   33    SUB/2                     #74=      16?4                 35:1                	;0
	43   33    SEND_VAL_EX/116           ?96       #74                  ?2                  	;0
	44   33    DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
	45   33    FE_RESET_R/77             $76=      $75                  ?50                 	;0
	46   33    FE_FETCH_R/78             ?0        $76                  16?6                	;50	>>50	<<49
	47   34    ASSIGN_DIM/147            ?21       16?7                 ?4534362            	;0
	48   34    OP_DATA/137               ?0        16?5                 ?0                  	;0
	49   35    JMP/42                    ?0        ?46                  ?0                  	;0	>>46
	50   35    FE_FREE/127               ?0        $76                  ?0                  	;0	<<45
	51   39    JMP/42                    ?0        ?31                  ?0                  	;0	>>31
	52   39    FE_FREE/127               ?0        $68                  ?0                  	;0	<<30
	53   42    FE_RESET_R/77             $78=      16?8                 ?62                 	;0
	54   42    FE_FETCH_R/78             ?0        $78                  16?5                	;62	>>62	<<61
	55   43    ISSET_ISEMPTY_DIM_OBJ/115 #79=      16?9                 16?5                	;33554432
	56   43    JMPZ/43                   ?0        #79                  ?59                 	;0	>>59
	57   44    NOP/0                     ?0        ?0                   ?0                  	;1
	58   44    GOTO/253                  ?0        ?61                  ?36                 	;0
	59   46    ASSIGN_DIM/147            ?24       16?10                ?4397406            	;0	<<56
	60   46    OP_DATA/137               ?0        16?5                 ?0                  	;0
	61   48    JMP/42                    ?0        ?54                  ?0                  	;0	>>54
	62   48    FE_FREE/127               ?0        $78                  ?0                  	;0	<<53
	63   51    FE_RESET_R/77             $81=      16?3                 ?72                 	;0
	64   51    FE_FETCH_R/78             ?0        $81                  16?5                	;72	>>72	<<71
	65   52    ISSET_ISEMPTY_DIM_OBJ/115 #82=      16?11                16?5                	;33554432
	66   52    JMPZ/43                   ?0        #82                  ?69                 	;0	>>69
	67   53    NOP/0                     ?0        ?0                   ?0                  	;1
	68   53    GOTO/253                  ?0        ?71                  ?37                 	;0
	69   55    ASSIGN_DIM/147            ?27       16?7                 ?4397406            	;0	<<66
	70   55    OP_DATA/137               ?0        16?5                 ?0                  	;0
	71   57    JMP/42                    ?0        ?64                  ?0                  	;0	>>64
	72   57    FE_FREE/127               ?0        $81                  ?0                  	;0	<<63
	73   59    GOTO/253                  ?0        ?1989                ?38                 	;0
	74   61    ASSIGN/38                 ?28       16?2                 39:true             	;0
	75   63    GOTO/253                  ?0        ?1252                ?40                 	;0
	76   65    ISSET_ISEMPTY_CV/197      #85=      16?12                ?0                  	;16777216
	77   65    BOOL_NOT/13               #86=      #85                  ?0                  	;0
	78   65    JMPZ/43                   ?0        #86                  ?80                 	;0	>>80
	79   66    GOTO/253                  ?0        ?1252                ?41                 	;0
	80   68    GOTO/253                  ?0        ?1244                ?42                 	;0	<<78
	81   70    INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'curl_exec'      	;1
	82   70    SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	83   70    DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
	84   70    ASSIGN/38                 ?32       16?13                $87                 	;0
	85   71    INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'curl_getinfo'   	;2
	86   71    SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	87   71    FETCH_CONSTANT/99         #89=      ?0                   47:'CURLINFO_HTTP_CODE'	;16
	88   71    SEND_VAL_EX/116           ?96       #89                  ?2                  	;0
	89   71    DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	90   71    ASSIGN/38                 ?35       16?15                $90                 	;0
	91   72    INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'in_array'       	;2
	92   72    SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	93   72    SEND_VAL_EX/116           ?96       52:array (
  0 => 500,
  1 => 502,
) ?2                  	;0
	94   72    DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	95   72    BOOL_NOT/13               #93=      $92                  ?0                  	;0
	96   72    JMPZ/43                   ?0        #93                  ?98                 	;0	>>98
	97   73    GOTO/253                  ?0        ?1674                ?53                 	;0
	98   75    NOP/0                     ?0        ?0                   ?0                  	;0	<<96
	99   75    FAST_CONCAT/53            #94=      16?15                54:' ERROR - Restarting...'	;0
	100  75    ECHO/40                   ?0        #94                  ?0                  	;0
	101  76    INIT_METHOD_CALL/112      ?0        16?16                55:'query'          	;3
	102  76    ROPE_INIT/54              #96=      ?0                   57:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'PHP-FPM\', \'Restarted services due to '	;3
	103  76    ROPE_ADD/55               #96=      #96                  16?15               	;1
	104  76    ROPE_END/56               #95=      #96                  58:' error.\', \'root\', \'localhost\', NULL, ?);'	;2
	105  76    SEND_VAL_EX/116           ?80       #95                  ?1                  	;0
	106  76    FETCH_CONSTANT/99         #98=      ?0                   59:'SERVER_ID'      	;16
	107  76    SEND_VAL_EX/116           ?96       #98                  ?2                  	;0
	108  76    INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'time'           	;0
	109  76    DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	110  76    SEND_VAR_NO_REF_EX/50     ?112      $99                  ?3                  	;0
	111  76    DO_FCALL/60               ?44       ?0                   ?0                  	;0
	112  77    GOTO/253                  ?0        ?1667                ?64                 	;0
	113  79    INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'trim'           	;1
	114  79    INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'file_get_contents'	;1
	115  79    FETCH_CONSTANT/99         #101=     ?0                   69:'BIN_PATH'       	;16
	116  79    CONCAT/8                  #102=     #101                 72:'nginx/conf/realip_cloudflare.conf'	;0
	117  79    SEND_VAL_EX/116           ?80       #102                 ?1                  	;0
	118  79    DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
	119  79    SEND_VAR_NO_REF_EX/50     ?80       $103                 ?1                  	;0
	120  79    DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
	121  79    JMP_SET/152               #105=     $104                 ?123                	;0
	122  79    QM_ASSIGN/22              #105=     73:''                ?0                  	;0
	123  79    ASSIGN/38                 ?50       16?12                #105                	;0
	124  80    FETCH_STATIC_PROP_R/173   $107=     74:'rSettings'       75:'XUI'            	;0
	125  80    FETCH_DIM_R/81            $108=     $107                 77:'cloudflare'     	;0
	126  80    JMPZ/43                   ?0        $108                 ?128                	;0	>>128
	127  81    GOTO/253                  ?0        ?76                  ?78                 	;0
	128  83    ISSET_ISEMPTY_CV/197      #109=     16?12                ?0                  	;16777216	<<126
	129  83    JMPZ/43                   ?0        #109                 ?131                	;0	>>131
	130  84    GOTO/253                  ?0        ?75                  ?79                 	;0
	131  86    ECHO/40                   ?0        80:'Disabling Cloudflare...
' ?0                  	;0	<<129
	132  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'file_put_contents'	;2
	133  87    FETCH_CONSTANT/99         #110=     ?0                   83:'BIN_PATH'       	;16
	134  87    CONCAT/8                  #111=     #110                 86:'nginx/conf/realip_cloudflare.conf'	;0
	135  87    SEND_VAL_EX/116           ?80       #111                 ?1                  	;0
	136  87    SEND_VAL_EX/116           ?96       87:''                ?2                  	;0
	137  87    DO_FCALL_BY_NAME/131      ?56       ?0                   ?0                  	;0
	138  88    GOTO/253                  ?0        ?74                  ?88                 	;0
	139  90    FETCH_DIM_R/81            $113=     16?17                89:'ramdisk'        	;0
	140  90    BOOL_NOT/13               #114=     $113                 ?0                  	;0
	141  90    JMPZ/43                   ?0        #114                 ?143                	;0	>>143
	142  91    GOTO/253                  ?0        ?2114                ?90                 	;0
	143  93    ASSIGN/38                 ?59       16?0                 91:false            	;0	<<141
	144  94    INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'exec'           	;2
	145  94    SEND_VAL_EX/116           ?80       94:'df -h'           ?1                  	;0
	146  94    SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
	147  94    DO_FCALL_BY_NAME/131      ?60       ?0                   ?0                  	;0
	148  95    INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'array_shift'    	;1
	149  95    SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
	150  95    DO_FCALL_BY_NAME/131      ?61       ?0                   ?0                  	;0
	151  96    FE_RESET_R/77             $118=     16?18                ?193                	;0
	152  96    FE_FETCH_R/78             ?0        $118                 16?19               	;193	>>193	<<192
	153  97    INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'explode'        	;2
	154  97    SEND_VAL_EX/116           ?80       99:' '               ?1                  	;0
	155  97    INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'preg_replace'  	;3
	156  97    SEND_VAL_EX/116           ?80       102:'!\\s+!'         ?1                  	;0
	157  97    SEND_VAL_EX/116           ?96       103:' '              ?2                  	;0
	158  97    INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'trim'          	;1
	159  97    SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	160  97    DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
	161  97    SEND_VAR_NO_REF_EX/50     ?112      $119                 ?3                  	;0
	162  97    DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
	163  97    SEND_VAR_NO_REF_EX/50     ?96       $120                 ?2                  	;0
	164  97    DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	165  97    ASSIGN/38                 ?66       16?20                $121                	;0
	166  98    INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'implode'       	;2
	167  98    SEND_VAL_EX/116           ?80       108:' '              ?1                  	;0
	168  98    INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'array_slice'   	;3
	169  98    SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
	170  98    SEND_VAL_EX/116           ?96       111:5                ?2                  	;0
	171  98    INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'count'         	;1
	172  98    SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
	173  98    DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
	174  98    SUB/2                     #124=     $123                 114:5               	;0
	175  98    SEND_VAL_EX/116           ?112      #124                 ?3                  	;0
	176  98    DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
	177  98    SEND_VAR_NO_REF_EX/50     ?96       $125                 ?2                  	;0
	178  98    DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
	179  98    INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'rtrim'         	;2
	180  98    FETCH_CONSTANT/99         #127=     ?0                   117:'STREAMS_PATH'  	;16
	181  98    SEND_VAL_EX/116           ?80       #127                 ?1                  	;0
	182  98    SEND_VAL_EX/116           ?96       120:'/'              ?2                  	;0
	183  98    DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
	184  98    IS_EQUAL/17               #129=     $126                 $128                	;0
	185  98    BOOL_NOT/13               #130=     #129                 ?0                  	;0
	186  98    JMPZ/43                   ?0        #130                 ?189                	;0	>>189
	187  99    NOP/0                     ?0        ?0                   ?0                  	;1
	188  99    GOTO/253                  ?0        ?192                 ?121                	;0
	189  101   ASSIGN/38                 ?75       16?0                 122:true            	;0	<<186
	190  102   FE_FREE/127               ?0        $118                 ?6                  	;1
	191  102   GOTO/253                  ?0        ?1                   ?123                	;0
	192  104   JMP/42                    ?0        ?152                 ?0                  	;0	>>152
	193  104   FE_FREE/127               ?0        $118                 ?0                  	;0	<<151
	194  106   GOTO/253                  ?0        ?1                   ?124                	;0
	195  109   INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'intval'        	;1
	196  109   FETCH_CONSTANT/99         #133=     ?0                   130:'SERVER_ID'     	;16
	197  109   FETCH_STATIC_PROP_FUNC_ARG/177 $132=     127:'rServers'       128:'XUI'           	;1
	198  109   FETCH_DIM_FUNC_ARG/93     $134=     $132                 #133                	;1
	199  109   FETCH_DIM_FUNC_ARG/93     $135=     $134                 133:'rtmp_port'     	;1
	200  109   SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
	201  109   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
	202  109   CONCAT/8                  #137=     134:'listen '        $136                	;0
	203  109   CONCAT/8                  #138=     #137                 135:';'             	;0
	204  109   INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'trim'          	;1
	205  109   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'file_get_contents'	;1
	206  109   FETCH_CONSTANT/99         #139=     ?0                   140:'XUI_HOME'      	;16
	207  109   CONCAT/8                  #140=     #139                 143:'bin/nginx_rtmp/conf/port.conf'	;0
	208  109   SEND_VAL_EX/116           ?80       #140                 ?1                  	;0
	209  109   DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
	210  109   SEND_VAR_NO_REF_EX/50     ?80       $141                 ?1                  	;0
	211  109   DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
	212  109   IS_NOT_EQUAL/18           #143=     #138                 $142                	;0
	213  109   BOOL_NOT/13               #144=     #143                 ?0                  	;0
	214  109   JMPZ/43                   ?0        #144                 ?216                	;0	>>216
	215  110   GOTO/253                  ?0        ?236                 ?144                	;0
	216  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'array_unshift' 	;2	<<214
	217  112   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	218  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'json_encode'   	;1
	219  112   INIT_ARRAY/71             #145=     149:'set_port'       150:'action'        	;18
	220  112   ADD_ARRAY_ELEMENT/72      #145=     151:2                152:'type'          	;0
	221  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'intval'        	;1
	222  112   FETCH_CONSTANT/99         #147=     ?0                   158:'SERVER_ID'     	;16
	223  112   FETCH_STATIC_PROP_FUNC_ARG/177 $146=     155:'rServers'       156:'XUI'           	;1
	224  112   FETCH_DIM_FUNC_ARG/93     $148=     $146                 #147                	;1
	225  112   FETCH_DIM_FUNC_ARG/93     $149=     $148                 161:'rtmp_port'     	;1
	226  112   SEND_VAR_EX/66            ?80       $149                 ?1                  	;0
	227  112   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
	228  112   INIT_ARRAY/71             #151=     $150                 ?0                  	;4
	229  112   ADD_ARRAY_ELEMENT/72      #145=     #151                 162:'ports'         	;0
	230  112   ADD_ARRAY_ELEMENT/72      #145=     163:true             164:'reload'        	;0
	231  112   SEND_VAL_EX/116           ?80       #145                 ?1                  	;0
	232  112   DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
	233  112   INIT_ARRAY/71             #153=     $152                 165:'custom_data'   	;6
	234  112   SEND_VAL_EX/116           ?96       #153                 ?2                  	;0
	235  112   DO_FCALL_BY_NAME/131      ?98       ?0                   ?0                  	;0
	236  115   GOTO/253                  ?0        ?139                 ?166                	;0
	237  117   INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'array_flip'    	;1
	238  117   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	239  117   DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
	240  117   ASSIGN/38                 ?100      16?9                 $155                	;0
	241  118   INIT_METHOD_CALL/112      ?0        16?16                169:'query'         	;1
	242  118   SEND_VAL_EX/116           ?80       171:'SELECT `ip` FROM `blocked_ips`;' ?1                  	;0
	243  118   DO_FCALL/60               ?101      ?0                   ?0                  	;0
	244  119   INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'array_keys'    	;1
	245  119   INIT_METHOD_CALL/112      ?0        16?16                174:'get_rows'      	;2
	246  119   SEND_VAL_EX/116           ?80       176:true             ?1                  	;0
	247  119   SEND_VAL_EX/116           ?96       177:'ip'             ?2                  	;0
	248  119   DO_FCALL/60               $158=     ?0                   ?0                  	;0
	249  119   SEND_VAR_NO_REF_EX/50     ?80       $158                 ?1                  	;0
	250  119   DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
	251  119   ASSIGN/38                 ?104      16?8                 $159                	;0
	252  120   INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'array_flip'    	;1
	253  120   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	254  120   DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
	255  120   ASSIGN/38                 ?106      16?11                $161                	;0
	256  121   ASSIGN/38                 $163=     16?7                 180:array (
)       	;0
	257  121   ASSIGN/38                 ?108      16?10                $163                	;0
	258  122   GOTO/253                  ?0        ?27                  ?181                	;0
	259  124   IS_EQUAL/17               #165=     16?21                182:0               	;0
	260  124   BOOL_NOT/13               #166=     #165                 ?0                  	;0
	261  124   JMPZ/43                   ?0        #166                 ?263                	;0	>>263
	262  125   GOTO/253                  ?0        ?1317                ?183                	;0
	263  127   ECHO/40                   ?0        184:'PHP-FPM ERROR - Restarting...' ?0                  	;0	<<261
	264  128   INIT_METHOD_CALL/112      ?0        16?16                185:'query'         	;3
	265  128   SEND_VAL_EX/116           ?80       187:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'PHP-FPM\', \'Restarted PHP-FPM instances due to a suspected crash.\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	266  128   FETCH_CONSTANT/99         #167=     ?0                   188:'SERVER_ID'     	;16
	267  128   SEND_VAL_EX/116           ?96       #167                 ?2                  	;0
	268  128   INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'time'          	;0
	269  128   DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
	270  128   SEND_VAR_NO_REF_EX/50     ?112      $168                 ?3                  	;0
	271  128   DO_FCALL/60               ?113      ?0                   ?0                  	;0
	272  129   INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'shell_exec'    	;1
	273  129   SEND_VAL_EX/116           ?80       195:'sudo systemctl stop xuione' ?1                  	;0
	274  129   DO_FCALL_BY_NAME/131      ?114      ?0                   ?0                  	;0
	275  130   INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'shell_exec'    	;1
	276  130   SEND_VAL_EX/116           ?80       198:'sudo systemctl start xuione' ?1                  	;0
	277  130   DO_FCALL_BY_NAME/131      ?115      ?0                   ?0                  	;0
	278  131   GOTO/253                  ?0        ?1316                ?199                	;0
	279  134   BOOL_NOT/13               #172=     16?22                ?0                  	;0
	280  134   JMPZ/43                   ?0        #172                 ?282                	;0	>>282
	281  135   GOTO/253                  ?0        ?285                 ?200                	;0
	282  137   INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'B33B2d13A0e185AA'	;0	<<280
	283  137   DO_FCALL_BY_NAME/131      ?117      ?0                   ?0                  	;0
	284  138   ASSIGN/38                 ?118      16?22                203:false           	;0
	285  140   GOTO/253                  ?0        ?1647                ?204                	;0
	286  144   INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'count'         	;1
	287  144   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	288  144   DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
	289  144   IS_SMALLER/19             #176=     207:0                $175                	;0
	290  144   BOOL_NOT/13               #177=     #176                 ?0                  	;0
	291  144   JMPZ/43                   ?0        #177                 ?293                	;0	>>293
	292  145   GOTO/253                  ?0        ?1334                ?208                	;0
	293  147   FE_RESET_R/77             $178=     16?1                 ?1242               	;0	<<291
	294  147   FE_FETCH_R/78             ?0        $178                 16?23               	;1242	>>1242	<<1241
	295  148   INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'json_decode'   	;2
	296  148   FETCH_DIM_FUNC_ARG/93     $179=     16?23                211:'custom_data'   	;1
	297  148   SEND_VAR_EX/66            ?80       $179                 ?1                  	;0
	298  148   SEND_VAL_EX/116           ?96       212:true             ?2                  	;0
	299  148   DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
	300  148   ASSIGN/38                 ?125      16?24                $180                	;0
	301  149   FETCH_DIM_R/81            $182=     16?23                213:'signal_id'     	;0
	302  149   BOOL_NOT/13               #183=     $182                 ?0                  	;0
	303  149   JMPZ/43                   ?0        #183                 ?306                	;0	>>306
	304  150   NOP/0                     ?0        ?0                   ?0                  	;1
	305  150   GOTO/253                  ?0        ?311                 ?214                	;0
	306  152   INIT_METHOD_CALL/112      ?0        16?16                215:'query'         	;2	<<303
	307  152   SEND_VAL_EX/116           ?80       217:'DELETE FROM `signals` WHERE `signal_id` = ?;' ?1                  	;0
	308  152   FETCH_DIM_FUNC_ARG/93     $184=     16?23                218:'signal_id'     	;2
	309  152   SEND_VAR_EX/66            ?96       $184                 ?2                  	;0
	310  152   DO_FCALL/60               ?129      ?0                   ?0                  	;0
	311  154   FETCH_DIM_R/81            $186=     16?24                219:'action'        	;0
	312  154   SWITCH_STRING/188         ?0        $186                 220:array (
  'reboot' => 350,
  'restart_services' => 367,
  'stop_services' => 385,
  'reload_nginx' => 400,
  'disable_ramdisk' => 424,
  'enable_ramdisk' => 475,
  'certbot_generate' => 529,
  'update_binaries' => 558,
  'update' => 579,
  'enable_ministra' => 600,
  'disable_ministra' => 622,
  'switch_php72' => 638,
  'switch_php74' => 678,
  'switch_php80' => 718,
  'set_services' => 758,
  'set_governor' => 880,
  'set_sysctl' => 978,
  'set_port' => 1026,
)	;1240
	313  155   CASE/48                   #187=     $186                 221:'reboot'        	;0	>>315
	314  155   JMPNZ/44                  ?0        #187                 ?350                	;0	>>350
	315  161   CASE/48                   #187=     $186                 222:'restart_services'	;0	>>317	<<313
	316  161   JMPNZ/44                  ?0        #187                 ?367                	;0	>>367
	317  167   CASE/48                   #187=     $186                 223:'stop_services' 	;0	>>319	<<315
	318  167   JMPNZ/44                  ?0        #187                 ?385                	;0	>>385
	319  172   CASE/48                   #187=     $186                 224:'reload_nginx'  	;0	>>321	<<317
	320  172   JMPNZ/44                  ?0        #187                 ?400                	;0	>>400
	321  178   CASE/48                   #187=     $186                 225:'disable_ramdisk'	;0	>>323	<<319
	322  178   JMPNZ/44                  ?0        #187                 ?424                	;0	>>424
	323  196   CASE/48                   #187=     $186                 226:'enable_ramdisk'	;0	>>325	<<321
	324  196   JMPNZ/44                  ?0        #187                 ?475                	;0	>>475
	325  214   CASE/48                   #187=     $186                 227:'certbot_generate'	;0	>>327	<<323
	326  214   JMPNZ/44                  ?0        #187                 ?529                	;0	>>529
	327  219   CASE/48                   #187=     $186                 228:'update_binaries'	;0	>>329	<<325
	328  219   JMPNZ/44                  ?0        #187                 ?558                	;0	>>558
	329  224   CASE/48                   #187=     $186                 229:'update'        	;0	>>331	<<327
	330  224   JMPNZ/44                  ?0        #187                 ?579                	;0	>>579
	331  229   CASE/48                   #187=     $186                 230:'enable_ministra'	;0	>>333	<<329
	332  229   JMPNZ/44                  ?0        #187                 ?600                	;0	>>600
	333  234   CASE/48                   #187=     $186                 231:'disable_ministra'	;0	>>335	<<331
	334  234   JMPNZ/44                  ?0        #187                 ?622                	;0	>>622
	335  239   CASE/48                   #187=     $186                 232:'switch_php72'  	;0	>>337	<<333
	336  239   JMPNZ/44                  ?0        #187                 ?638                	;0	>>638
	337  250   CASE/48                   #187=     $186                 233:'switch_php74'  	;0	>>339	<<335
	338  250   JMPNZ/44                  ?0        #187                 ?678                	;0	>>678
	339  261   CASE/48                   #187=     $186                 234:'switch_php80'  	;0	>>341	<<337
	340  261   JMPNZ/44                  ?0        #187                 ?718                	;0	>>718
	341  272   CASE/48                   #187=     $186                 235:'set_services'  	;0	>>343	<<339
	342  272   JMPNZ/44                  ?0        #187                 ?758                	;0	>>758
	343  310   CASE/48                   #187=     $186                 236:'set_governor'  	;0	>>345	<<341
	344  310   JMPNZ/44                  ?0        #187                 ?880                	;0	>>880
	345  335   CASE/48                   #187=     $186                 237:'set_sysctl'    	;0	>>347	<<343
	346  335   JMPNZ/44                  ?0        #187                 ?978                	;0	>>978
	347  359   CASE/48                   #187=     $186                 238:'set_port'      	;0	>>349	<<345
	348  359   JMPNZ/44                  ?0        #187                 ?1026               	;0	>>1026
	349  359   JMP/42                    ?0        ?1240                ?0                  	;0	>>1240	<<347
	350  156   ECHO/40                   ?0        239:'Rebooting system...
' ?0                  	;0	<<314
	351  157   INIT_METHOD_CALL/112      ?0        16?16                240:'query'         	;3
	352  157   SEND_VAL_EX/116           ?80       242:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'REBOOT\', \'System rebooted on request.\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	353  157   FETCH_CONSTANT/99         #188=     ?0                   243:'SERVER_ID'     	;16
	354  157   SEND_VAL_EX/116           ?96       #188                 ?2                  	;0
	355  157   INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'time'          	;0
	356  157   DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
	357  157   SEND_VAR_NO_REF_EX/50     ?112      $189                 ?3                  	;0
	358  157   DO_FCALL/60               ?134      ?0                   ?0                  	;0
	359  158   INIT_METHOD_CALL/112      ?0        16?16                248:'close_mysql'   	;0
	360  158   DO_FCALL/60               ?135      ?0                   ?0                  	;0
	361  159   INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'shell_exec'    	;1
	362  159   SEND_VAL_EX/116           ?80       252:'sudo reboot'    ?1                  	;0
	363  159   DO_FCALL_BY_NAME/131      ?136      ?0                   ?0                  	;0
	364  160   FREE/70                   ?0        $186                 ?13                 	;1
	365  160   NOP/0                     ?0        ?0                   ?0                  	;1
	366  160   GOTO/253                  ?0        ?1241                ?253                	;0
	367  162   ECHO/40                   ?0        254:'Restarting services...
' ?0                  	;0	<<316
	368  163   INIT_METHOD_CALL/112      ?0        16?16                255:'query'         	;3
	369  163   SEND_VAL_EX/116           ?80       257:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'RESTART\', \'XUI services restarted on request.\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	370  163   FETCH_CONSTANT/99         #193=     ?0                   258:'SERVER_ID'     	;16
	371  163   SEND_VAL_EX/116           ?96       #193                 ?2                  	;0
	372  163   INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'time'          	;0
	373  163   DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
	374  163   SEND_VAR_NO_REF_EX/50     ?112      $194                 ?3                  	;0
	375  163   DO_FCALL/60               ?139      ?0                   ?0                  	;0
	376  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'shell_exec'    	;1
	377  164   SEND_VAL_EX/116           ?80       265:'sudo systemctl stop xuione' ?1                  	;0
	378  164   DO_FCALL_BY_NAME/131      ?140      ?0                   ?0                  	;0
	379  165   INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'shell_exec'    	;1
	380  165   SEND_VAL_EX/116           ?80       268:'sudo systemctl start xuione' ?1                  	;0
	381  165   DO_FCALL_BY_NAME/131      ?141      ?0                   ?0                  	;0
	382  166   FREE/70                   ?0        $186                 ?13                 	;1
	383  166   NOP/0                     ?0        ?0                   ?0                  	;1
	384  166   GOTO/253                  ?0        ?1241                ?269                	;0
	385  168   ECHO/40                   ?0        270:'Stopping services...
' ?0                  	;0	<<318
	386  169   INIT_METHOD_CALL/112      ?0        16?16                271:'query'         	;3
	387  169   SEND_VAL_EX/116           ?80       273:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'STOP\', \'XUI services stopped on request.\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	388  169   FETCH_CONSTANT/99         #198=     ?0                   274:'SERVER_ID'     	;16
	389  169   SEND_VAL_EX/116           ?96       #198                 ?2                  	;0
	390  169   INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'time'          	;0
	391  169   DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
	392  169   SEND_VAR_NO_REF_EX/50     ?112      $199                 ?3                  	;0
	393  169   DO_FCALL/60               ?144      ?0                   ?0                  	;0
	394  170   INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'shell_exec'    	;1
	395  170   SEND_VAL_EX/116           ?80       281:'sudo systemctl stop xuione' ?1                  	;0
	396  170   DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
	397  171   FREE/70                   ?0        $186                 ?13                 	;1
	398  171   NOP/0                     ?0        ?0                   ?0                  	;1
	399  171   GOTO/253                  ?0        ?1241                ?282                	;0
	400  173   ECHO/40                   ?0        283:'Reloading nginx...
' ?0                  	;0	<<320
	401  174   INIT_METHOD_CALL/112      ?0        16?16                284:'query'         	;3
	402  174   SEND_VAL_EX/116           ?80       286:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'RELOAD\', \'NGINX services reloaded on request.\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	403  174   FETCH_CONSTANT/99         #202=     ?0                   287:'SERVER_ID'     	;16
	404  174   SEND_VAL_EX/116           ?96       #202                 ?2                  	;0
	405  174   INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'time'          	;0
	406  174   DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
	407  174   SEND_VAR_NO_REF_EX/50     ?112      $203                 ?3                  	;0
	408  174   DO_FCALL/60               ?148      ?0                   ?0                  	;0
	409  175   INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'shell_exec'    	;1
	410  175   FETCH_CONSTANT/99         #205=     ?0                   294:'BIN_PATH'      	;16
	411  175   CONCAT/8                  #206=     297:'sudo '          #205                	;0
	412  175   CONCAT/8                  #207=     #206                 298:'nginx_rtmp/sbin/nginx_rtmp -s reload'	;0
	413  175   SEND_VAL_EX/116           ?80       #207                 ?1                  	;0
	414  175   DO_FCALL_BY_NAME/131      ?152      ?0                   ?0                  	;0
	415  176   INIT_FCALL_BY_NAME/59     ?0        ?0                   299:'shell_exec'    	;1
	416  176   FETCH_CONSTANT/99         #209=     ?0                   301:'BIN_PATH'      	;16
	417  176   CONCAT/8                  #210=     304:'sudo '          #209                	;0
	418  176   CONCAT/8                  #211=     #210                 305:'nginx/sbin/nginx -s reload'	;0
	419  176   SEND_VAL_EX/116           ?80       #211                 ?1                  	;0
	420  176   DO_FCALL_BY_NAME/131      ?156      ?0                   ?0                  	;0
	421  177   FREE/70                   ?0        $186                 ?13                 	;1
	422  177   NOP/0                     ?0        ?0                   ?0                  	;1
	423  177   GOTO/253                  ?0        ?1241                ?306                	;0
	424  179   ECHO/40                   ?0        307:'Disabling ramdisk...
' ?0                  	;0	<<322
	425  180   INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'file_get_contents'	;1
	426  180   SEND_VAL_EX/116           ?80       310:'/etc/fstab'     ?1                  	;0
	427  180   DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
	428  180   ASSIGN/38                 ?158      16?25                $213                	;0
	429  181   ASSIGN/38                 ?159      16?26                311:array (
)       	;0
	430  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'explode'       	;2
	431  182   SEND_VAL_EX/116           ?80       314:'
'              ?1                  	;0
	432  182   SEND_VAR_EX/66            ?96       16?25                ?2                  	;0
	433  182   DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
	434  182   FE_RESET_R/77             $217=     $216                 ?453                	;0
	435  182   FE_FETCH_R/78             ?0        $217                 16?19               	;453	>>453	<<452
	436  183   INIT_FCALL_BY_NAME/59     ?0        ?0                   315:'substr'        	;3
	437  183   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	438  183   SEND_VAL_EX/116           ?96       317:0                ?2                  	;0
	439  183   SEND_VAL_EX/116           ?112      318:31               ?3                  	;0
	440  183   DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
	441  183   IS_EQUAL/17               #219=     $218                 319:'tmpfs /home/xui/content/streams'	;0
	442  183   BOOL_NOT/13               #220=     #219                 ?0                  	;0
	443  183   JMPZ/43                   ?0        #220                 ?448                	;0	>>448
	444  184   NOP/0                     ?0        ?0                   ?0                  	;1
	445  184   NOP/0                     ?0        ?0                   ?0                  	;1
	446  184   NOP/0                     ?0        ?0                   ?0                  	;1
	447  184   GOTO/253                  ?0        ?450                 ?320                	;0
	448  186   CONCAT/8                  #221=     321:'#'              16?19               	;0	<<443
	449  186   ASSIGN/38                 ?166      16?19                #221                	;0
	450  188   ASSIGN_DIM/147            ?167      16?26                ?2670193568         	;0
	451  188   OP_DATA/137               ?0        16?19                ?0                  	;0
	452  189   JMP/42                    ?0        ?435                 ?0                  	;0	>>435
	453  189   FE_FREE/127               ?0        $217                 ?0                  	;0	<<434
	454  192   INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'file_put_contents'	;2
	455  192   SEND_VAL_EX/116           ?80       324:'/etc/fstab'     ?1                  	;0
	456  192   INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'implode'       	;2
	457  192   SEND_VAL_EX/116           ?80       327:'
'              ?1                  	;0
	458  192   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	459  192   DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
	460  192   SEND_VAR_NO_REF_EX/50     ?96       $224                 ?2                  	;0
	461  192   DO_FCALL_BY_NAME/131      ?169      ?0                   ?0                  	;0
	462  193   INIT_FCALL_BY_NAME/59     ?0        ?0                   328:'shell_exec'    	;1
	463  193   FETCH_CONSTANT/99         #226=     ?0                   330:'STREAMS_PATH'  	;16
	464  193   CONCAT/8                  #227=     333:'sudo umount -l ' #226                	;0
	465  193   SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
	466  193   DO_FCALL_BY_NAME/131      ?172      ?0                   ?0                  	;0
	467  194   INIT_FCALL_BY_NAME/59     ?0        ?0                   334:'shell_exec'    	;1
	468  194   FETCH_CONSTANT/99         #229=     ?0                   336:'STREAMS_PATH'  	;16
	469  194   CONCAT/8                  #230=     339:'sudo chown -R xui:xui ' #229                	;0
	470  194   SEND_VAL_EX/116           ?80       #230                 ?1                  	;0
	471  194   DO_FCALL_BY_NAME/131      ?175      ?0                   ?0                  	;0
	472  195   FREE/70                   ?0        $186                 ?13                 	;1
	473  195   NOP/0                     ?0        ?0                   ?0                  	;1
	474  195   GOTO/253                  ?0        ?1241                ?340                	;0
	475  197   ECHO/40                   ?0        341:'Enabling ramdisk...
' ?0                  	;0	<<324
	476  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   342:'file_get_contents'	;1
	477  198   SEND_VAL_EX/116           ?80       344:'/etc/fstab'     ?1                  	;0
	478  198   DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
	479  198   ASSIGN/38                 ?177      16?25                $232                	;0
	480  199   ASSIGN/38                 ?178      16?26                345:array (
)       	;0
	481  200   INIT_FCALL_BY_NAME/59     ?0        ?0                   346:'explode'       	;2
	482  200   SEND_VAL_EX/116           ?80       348:'
'              ?1                  	;0
	483  200   SEND_VAR_EX/66            ?96       16?25                ?2                  	;0
	484  200   DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
	485  200   FE_RESET_R/77             $236=     $235                 ?507                	;0
	486  200   FE_FETCH_R/78             ?0        $236                 16?19               	;507	>>507	<<506
	487  201   INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'substr'        	;3
	488  201   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	489  201   SEND_VAL_EX/116           ?96       351:0                ?2                  	;0
	490  201   SEND_VAL_EX/116           ?112      352:32               ?3                  	;0
	491  201   DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
	492  201   IS_EQUAL/17               #238=     $237                 353:'#tmpfs /home/xui/content/streams'	;0
	493  201   BOOL_NOT/13               #239=     #238                 ?0                  	;0
	494  201   JMPZ/43                   ?0        #239                 ?499                	;0	>>499
	495  202   NOP/0                     ?0        ?0                   ?0                  	;1
	496  202   NOP/0                     ?0        ?0                   ?0                  	;1
	497  202   NOP/0                     ?0        ?0                   ?0                  	;1
	498  202   GOTO/253                  ?0        ?504                 ?354                	;0
	499  204   INIT_FCALL_BY_NAME/59     ?0        ?0                   355:'ltrim'         	;2	<<494
	500  204   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	501  204   SEND_VAL_EX/116           ?96       357:'#'              ?2                  	;0
	502  204   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
	503  204   ASSIGN/38                 ?185      16?19                $240                	;0
	504  206   ASSIGN_DIM/147            ?186      16?26                ?2670193568         	;0
	505  206   OP_DATA/137               ?0        16?19                ?0                  	;0
	506  207   JMP/42                    ?0        ?486                 ?0                  	;0	>>486
	507  207   FE_FREE/127               ?0        $236                 ?0                  	;0	<<485
	508  210   INIT_FCALL_BY_NAME/59     ?0        ?0                   358:'file_put_contents'	;2
	509  210   SEND_VAL_EX/116           ?80       360:'/etc/fstab'     ?1                  	;0
	510  210   INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'implode'       	;2
	511  210   SEND_VAL_EX/116           ?80       363:'
'              ?1                  	;0
	512  210   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	513  210   DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
	514  210   SEND_VAR_NO_REF_EX/50     ?96       $243                 ?2                  	;0
	515  210   DO_FCALL_BY_NAME/131      ?188      ?0                   ?0                  	;0
	516  211   INIT_FCALL_BY_NAME/59     ?0        ?0                   364:'shell_exec'    	;1
	517  211   FETCH_CONSTANT/99         #245=     ?0                   366:'STREAMS_PATH'  	;16
	518  211   CONCAT/8                  #246=     369:'sudo mount '    #245                	;0
	519  211   SEND_VAL_EX/116           ?80       #246                 ?1                  	;0
	520  211   DO_FCALL_BY_NAME/131      ?191      ?0                   ?0                  	;0
	521  212   INIT_FCALL_BY_NAME/59     ?0        ?0                   370:'shell_exec'    	;1
	522  212   FETCH_CONSTANT/99         #248=     ?0                   372:'STREAMS_PATH'  	;16
	523  212   CONCAT/8                  #249=     375:'sudo chown -R xui:xui ' #248                	;0
	524  212   SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
	525  212   DO_FCALL_BY_NAME/131      ?194      ?0                   ?0                  	;0
	526  213   FREE/70                   ?0        $186                 ?13                 	;1
	527  213   NOP/0                     ?0        ?0                   ?0                  	;1
	528  213   GOTO/253                  ?0        ?1241                ?376                	;0
	529  215   ECHO/40                   ?0        377:'Generating certbot certificate.
' ?0                  	;0	<<326
	530  216   INIT_METHOD_CALL/112      ?0        16?16                378:'query'         	;3
	531  216   SEND_VAL_EX/116           ?80       380:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'CERTBOT\', \'Attempting to generate certbot certificate on request.\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	532  216   FETCH_CONSTANT/99         #251=     ?0                   381:'SERVER_ID'     	;16
	533  216   SEND_VAL_EX/116           ?96       #251                 ?2                  	;0
	534  216   INIT_FCALL_BY_NAME/59     ?0        ?0                   384:'time'          	;0
	535  216   DO_FCALL_BY_NAME/131      $252=     ?0                   ?0                  	;0
	536  216   SEND_VAR_NO_REF_EX/50     ?112      $252                 ?3                  	;0
	537  216   DO_FCALL/60               ?197      ?0                   ?0                  	;0
	538  217   INIT_FCALL_BY_NAME/59     ?0        ?0                   386:'shell_exec'    	;1
	539  217   FETCH_CONSTANT/99         #254=     ?0                   388:'PHP_BIN'       	;16
	540  217   CONCAT/8                  #255=     391:'sudo '          #254                	;0
	541  217   CONCAT/8                  #256=     #255                 392:' '             	;0
	542  217   FETCH_CONSTANT/99         #257=     ?0                   393:'INCLUDES_PATH' 	;16
	543  217   CONCAT/8                  #258=     #256                 #257                	;0
	544  217   CONCAT/8                  #259=     #258                 396:'cli/certbot.php "'	;0
	545  217   INIT_FCALL_BY_NAME/59     ?0        ?0                   397:'base64_encode' 	;1
	546  217   INIT_FCALL_BY_NAME/59     ?0        ?0                   399:'json_encode'   	;1
	547  217   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
	548  217   DO_FCALL_BY_NAME/131      $260=     ?0                   ?0                  	;0
	549  217   SEND_VAR_NO_REF_EX/50     ?80       $260                 ?1                  	;0
	550  217   DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
	551  217   CONCAT/8                  #262=     #259                 $261                	;0
	552  217   CONCAT/8                  #263=     #262                 401:'" 2>&1 &'      	;0
	553  217   SEND_VAL_EX/116           ?80       #263                 ?1                  	;0
	554  217   DO_FCALL_BY_NAME/131      ?208      ?0                   ?0                  	;0
	555  218   FREE/70                   ?0        $186                 ?13                 	;1
	556  218   NOP/0                     ?0        ?0                   ?0                  	;1
	557  218   GOTO/253                  ?0        ?1241                ?402                	;0
	558  220   ECHO/40                   ?0        403:'Updating binaries...
' ?0                  	;0	<<328
	559  221   INIT_METHOD_CALL/112      ?0        16?16                404:'query'         	;3
	560  221   SEND_VAL_EX/116           ?80       406:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'BINARIES\', \'Updating XUI binaries from XUI server...\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	561  221   FETCH_CONSTANT/99         #265=     ?0                   407:'SERVER_ID'     	;16
	562  221   SEND_VAL_EX/116           ?96       #265                 ?2                  	;0
	563  221   INIT_FCALL_BY_NAME/59     ?0        ?0                   410:'time'          	;0
	564  221   DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
	565  221   SEND_VAR_NO_REF_EX/50     ?112      $266                 ?3                  	;0
	566  221   DO_FCALL/60               ?211      ?0                   ?0                  	;0
	567  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'shell_exec'    	;1
	568  222   FETCH_CONSTANT/99         #268=     ?0                   414:'PHP_BIN'       	;16
	569  222   CONCAT/8                  #269=     417:'sudo '          #268                	;0
	570  222   CONCAT/8                  #270=     #269                 418:' '             	;0
	571  222   FETCH_CONSTANT/99         #271=     ?0                   419:'INCLUDES_PATH' 	;16
	572  222   CONCAT/8                  #272=     #270                 #271                	;0
	573  222   CONCAT/8                  #273=     #272                 422:'cli/binaries.php 2>&1 &'	;0
	574  222   SEND_VAL_EX/116           ?80       #273                 ?1                  	;0
	575  222   DO_FCALL_BY_NAME/131      ?218      ?0                   ?0                  	;0
	576  223   FREE/70                   ?0        $186                 ?13                 	;1
	577  223   NOP/0                     ?0        ?0                   ?0                  	;1
	578  223   GOTO/253                  ?0        ?1241                ?423                	;0
	579  225   ECHO/40                   ?0        424:'Updating...
'   ?0                  	;0	<<330
	580  226   INIT_METHOD_CALL/112      ?0        16?16                425:'query'         	;3
	581  226   SEND_VAL_EX/116           ?80       427:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'UPDATE\', \'Updating XUI...\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	582  226   FETCH_CONSTANT/99         #275=     ?0                   428:'SERVER_ID'     	;16
	583  226   SEND_VAL_EX/116           ?96       #275                 ?2                  	;0
	584  226   INIT_FCALL_BY_NAME/59     ?0        ?0                   431:'time'          	;0
	585  226   DO_FCALL_BY_NAME/131      $276=     ?0                   ?0                  	;0
	586  226   SEND_VAR_NO_REF_EX/50     ?112      $276                 ?3                  	;0
	587  226   DO_FCALL/60               ?221      ?0                   ?0                  	;0
	588  227   INIT_FCALL_BY_NAME/59     ?0        ?0                   433:'shell_exec'    	;1
	589  227   FETCH_CONSTANT/99         #278=     ?0                   435:'PHP_BIN'       	;16
	590  227   CONCAT/8                  #279=     438:'sudo '          #278                	;0
	591  227   CONCAT/8                  #280=     #279                 439:' '             	;0
	592  227   FETCH_CONSTANT/99         #281=     ?0                   440:'INCLUDES_PATH' 	;16
	593  227   CONCAT/8                  #282=     #280                 #281                	;0
	594  227   CONCAT/8                  #283=     #282                 443:'cli/update.php "update" 2>&1 &'	;0
	595  227   SEND_VAL_EX/116           ?80       #283                 ?1                  	;0
	596  227   DO_FCALL_BY_NAME/131      ?228      ?0                   ?0                  	;0
	597  228   FREE/70                   ?0        $186                 ?13                 	;1
	598  228   FE_FREE/127               ?0        $178                 ?12                 	;1
	599  228   GOTO/253                  ?0        ?1243                ?444                	;0
	600  230   ECHO/40                   ?0        445:'Enabling ministra /c...' ?0                  	;0	<<332
	601  231   INIT_FCALL_BY_NAME/59     ?0        ?0                   446:'shell_exec'    	;1
	602  231   FETCH_CONSTANT/99         #285=     ?0                   448:'XUI_HOME'      	;16
	603  231   CONCAT/8                  #286=     451:'sudo ln -sfn '  #285                	;0
	604  231   CONCAT/8                  #287=     #286                 452:'ministra '     	;0
	605  231   FETCH_CONSTANT/99         #288=     ?0                   453:'XUI_HOME'      	;16
	606  231   CONCAT/8                  #289=     #287                 #288                	;0
	607  231   CONCAT/8                  #290=     #289                 456:'www/c'         	;0
	608  231   SEND_VAL_EX/116           ?80       #290                 ?1                  	;0
	609  231   DO_FCALL_BY_NAME/131      ?235      ?0                   ?0                  	;0
	610  232   INIT_FCALL_BY_NAME/59     ?0        ?0                   457:'shell_exec'    	;1
	611  232   FETCH_CONSTANT/99         #292=     ?0                   459:'XUI_HOME'      	;16
	612  232   CONCAT/8                  #293=     462:'sudo ln -sfn '  #292                	;0
	613  232   CONCAT/8                  #294=     #293                 463:'ministra/portal.php '	;0
	614  232   FETCH_CONSTANT/99         #295=     ?0                   464:'XUI_HOME'      	;16
	615  232   CONCAT/8                  #296=     #294                 #295                	;0
	616  232   CONCAT/8                  #297=     #296                 467:'www/portal.php'	;0
	617  232   SEND_VAL_EX/116           ?80       #297                 ?1                  	;0
	618  232   DO_FCALL_BY_NAME/131      ?242      ?0                   ?0                  	;0
	619  233   FREE/70                   ?0        $186                 ?13                 	;1
	620  233   NOP/0                     ?0        ?0                   ?0                  	;1
	621  233   GOTO/253                  ?0        ?1241                ?468                	;0
	622  235   ECHO/40                   ?0        469:'Disabling ministra /c...' ?0                  	;0	<<334
	623  236   INIT_FCALL_BY_NAME/59     ?0        ?0                   470:'shell_exec'    	;1
	624  236   FETCH_CONSTANT/99         #299=     ?0                   472:'XUI_HOME'      	;16
	625  236   CONCAT/8                  #300=     475:'sudo rm '       #299                	;0
	626  236   CONCAT/8                  #301=     #300                 476:'www/c'         	;0
	627  236   SEND_VAL_EX/116           ?80       #301                 ?1                  	;0
	628  236   DO_FCALL_BY_NAME/131      ?246      ?0                   ?0                  	;0
	629  237   INIT_FCALL_BY_NAME/59     ?0        ?0                   477:'shell_exec'    	;1
	630  237   FETCH_CONSTANT/99         #303=     ?0                   479:'XUI_HOME'      	;16
	631  237   CONCAT/8                  #304=     482:'sudo rm '       #303                	;0
	632  237   CONCAT/8                  #305=     #304                 483:'www/portal.php'	;0
	633  237   SEND_VAL_EX/116           ?80       #305                 ?1                  	;0
	634  237   DO_FCALL_BY_NAME/131      ?250      ?0                   ?0                  	;0
	635  238   FREE/70                   ?0        $186                 ?13                 	;1
	636  238   NOP/0                     ?0        ?0                   ?0                  	;1
	637  238   GOTO/253                  ?0        ?1241                ?484                	;0
	638  240   ECHO/40                   ?0        485:'Switching to PHP 7.2
' ?0                  	;0	<<336
	639  241   INIT_FCALL_BY_NAME/59     ?0        ?0                   486:'file_exists'   	;1
	640  241   FETCH_CONSTANT/99         #307=     ?0                   488:'PHP_BIN'       	;16
	641  241   CONCAT/8                  #308=     #307                 491:'_7.2'          	;0
	642  241   SEND_VAL_EX/116           ?80       #308                 ?1                  	;0
	643  241   DO_FCALL_BY_NAME/131      $309=     ?0                   ?0                  	;0
	644  241   BOOL_NOT/13               #310=     $309                 ?0                  	;0
	645  241   JMPZ/43                   ?0        #310                 ?649                	;0	>>649
	646  242   NOP/0                     ?0        ?0                   ?0                  	;1
	647  242   NOP/0                     ?0        ?0                   ?0                  	;1
	648  242   GOTO/253                  ?0        ?675                 ?492                	;0
	649  244   INIT_FCALL_BY_NAME/59     ?0        ?0                   493:'shell_exec'    	;1	<<645
	650  244   FETCH_CONSTANT/99         #311=     ?0                   495:'PHP_BIN'       	;16
	651  244   CONCAT/8                  #312=     498:'sudo ln -sfn '  #311                	;0
	652  244   CONCAT/8                  #313=     #312                 499:'_7.2 '         	;0
	653  244   FETCH_CONSTANT/99         #314=     ?0                   500:'PHP_BIN'       	;16
	654  244   CONCAT/8                  #315=     #313                 #314                	;0
	655  244   SEND_VAL_EX/116           ?80       #315                 ?1                  	;0
	656  244   DO_FCALL_BY_NAME/131      ?260      ?0                   ?0                  	;0
	657  245   INIT_FCALL_BY_NAME/59     ?0        ?0                   503:'shell_exec'    	;1
	658  245   FETCH_CONSTANT/99         #317=     ?0                   505:'BIN_PATH'      	;16
	659  245   CONCAT/8                  #318=     508:'sudo ln -sfn '  #317                	;0
	660  245   CONCAT/8                  #319=     #318                 509:'php/sbin/php-fpm_7.2 '	;0
	661  245   FETCH_CONSTANT/99         #320=     ?0                   510:'BIN_PATH'      	;16
	662  245   CONCAT/8                  #321=     #319                 #320                	;0
	663  245   CONCAT/8                  #322=     #321                 513:'php/sbin/php-fpm'	;0
	664  245   SEND_VAL_EX/116           ?80       #322                 ?1                  	;0
	665  245   DO_FCALL_BY_NAME/131      ?267      ?0                   ?0                  	;0
	666  246   INIT_FCALL_BY_NAME/59     ?0        ?0                   514:'shell_exec'    	;1
	667  246   FETCH_CONSTANT/99         #324=     ?0                   516:'BIN_PATH'      	;16
	668  246   CONCAT/8                  #325=     519:'sudo chown -R xui:xui ' #324                	;0
	669  246   CONCAT/8                  #326=     #325                 520:'php'           	;0
	670  246   SEND_VAL_EX/116           ?80       #326                 ?1                  	;0
	671  246   DO_FCALL_BY_NAME/131      ?271      ?0                   ?0                  	;0
	672  247   INIT_FCALL_BY_NAME/59     ?0        ?0                   521:'shell_exec'    	;1
	673  247   SEND_VAL_EX/116           ?80       523:'sudo service xuione restart' ?1                  	;0
	674  247   DO_FCALL_BY_NAME/131      ?272      ?0                   ?0                  	;0
	675  249   FREE/70                   ?0        $186                 ?13                 	;1
	676  249   NOP/0                     ?0        ?0                   ?0                  	;1
	677  249   GOTO/253                  ?0        ?1241                ?524                	;0
	678  251   ECHO/40                   ?0        525:'Switching to PHP 7.4
' ?0                  	;0	<<338
	679  252   INIT_FCALL_BY_NAME/59     ?0        ?0                   526:'file_exists'   	;1
	680  252   FETCH_CONSTANT/99         #329=     ?0                   528:'PHP_BIN'       	;16
	681  252   CONCAT/8                  #330=     #329                 531:'_7.4'          	;0
	682  252   SEND_VAL_EX/116           ?80       #330                 ?1                  	;0
	683  252   DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
	684  252   BOOL_NOT/13               #332=     $331                 ?0                  	;0
	685  252   JMPZ/43                   ?0        #332                 ?689                	;0	>>689
	686  253   NOP/0                     ?0        ?0                   ?0                  	;1
	687  253   NOP/0                     ?0        ?0                   ?0                  	;1
	688  253   GOTO/253                  ?0        ?715                 ?532                	;0
	689  255   INIT_FCALL_BY_NAME/59     ?0        ?0                   533:'shell_exec'    	;1	<<685
	690  255   FETCH_CONSTANT/99         #333=     ?0                   535:'PHP_BIN'       	;16
	691  255   CONCAT/8                  #334=     538:'sudo ln -sfn '  #333                	;0
	692  255   CONCAT/8                  #335=     #334                 539:'_7.4 '         	;0
	693  255   FETCH_CONSTANT/99         #336=     ?0                   540:'PHP_BIN'       	;16
	694  255   CONCAT/8                  #337=     #335                 #336                	;0
	695  255   SEND_VAL_EX/116           ?80       #337                 ?1                  	;0
	696  255   DO_FCALL_BY_NAME/131      ?282      ?0                   ?0                  	;0
	697  256   INIT_FCALL_BY_NAME/59     ?0        ?0                   543:'shell_exec'    	;1
	698  256   FETCH_CONSTANT/99         #339=     ?0                   545:'BIN_PATH'      	;16
	699  256   CONCAT/8                  #340=     548:'sudo ln -sfn '  #339                	;0
	700  256   CONCAT/8                  #341=     #340                 549:'php/sbin/php-fpm_7.4 '	;0
	701  256   FETCH_CONSTANT/99         #342=     ?0                   550:'BIN_PATH'      	;16
	702  256   CONCAT/8                  #343=     #341                 #342                	;0
	703  256   CONCAT/8                  #344=     #343                 553:'php/sbin/php-fpm'	;0
	704  256   SEND_VAL_EX/116           ?80       #344                 ?1                  	;0
	705  256   DO_FCALL_BY_NAME/131      ?289      ?0                   ?0                  	;0
	706  257   INIT_FCALL_BY_NAME/59     ?0        ?0                   554:'shell_exec'    	;1
	707  257   FETCH_CONSTANT/99         #346=     ?0                   556:'BIN_PATH'      	;16
	708  257   CONCAT/8                  #347=     559:'sudo chown -R xui:xui ' #346                	;0
	709  257   CONCAT/8                  #348=     #347                 560:'php'           	;0
	710  257   SEND_VAL_EX/116           ?80       #348                 ?1                  	;0
	711  257   DO_FCALL_BY_NAME/131      ?293      ?0                   ?0                  	;0
	712  258   INIT_FCALL_BY_NAME/59     ?0        ?0                   561:'shell_exec'    	;1
	713  258   SEND_VAL_EX/116           ?80       563:'sudo service xuione restart' ?1                  	;0
	714  258   DO_FCALL_BY_NAME/131      ?294      ?0                   ?0                  	;0
	715  260   FREE/70                   ?0        $186                 ?13                 	;1
	716  260   NOP/0                     ?0        ?0                   ?0                  	;1
	717  260   GOTO/253                  ?0        ?1241                ?564                	;0
	718  262   ECHO/40                   ?0        565:'Switching to PHP 8.0
' ?0                  	;0	<<340
	719  263   INIT_FCALL_BY_NAME/59     ?0        ?0                   566:'file_exists'   	;1
	720  263   FETCH_CONSTANT/99         #351=     ?0                   568:'PHP_BIN'       	;16
	721  263   CONCAT/8                  #352=     #351                 571:'_8.0'          	;0
	722  263   SEND_VAL_EX/116           ?80       #352                 ?1                  	;0
	723  263   DO_FCALL_BY_NAME/131      $353=     ?0                   ?0                  	;0
	724  263   BOOL_NOT/13               #354=     $353                 ?0                  	;0
	725  263   JMPZ/43                   ?0        #354                 ?729                	;0	>>729
	726  264   NOP/0                     ?0        ?0                   ?0                  	;1
	727  264   NOP/0                     ?0        ?0                   ?0                  	;1
	728  264   GOTO/253                  ?0        ?755                 ?572                	;0
	729  266   INIT_FCALL_BY_NAME/59     ?0        ?0                   573:'shell_exec'    	;1	<<725
	730  266   FETCH_CONSTANT/99         #355=     ?0                   575:'PHP_BIN'       	;16
	731  266   CONCAT/8                  #356=     578:'sudo ln -sfn '  #355                	;0
	732  266   CONCAT/8                  #357=     #356                 579:'_8.0 '         	;0
	733  266   FETCH_CONSTANT/99         #358=     ?0                   580:'PHP_BIN'       	;16
	734  266   CONCAT/8                  #359=     #357                 #358                	;0
	735  266   SEND_VAL_EX/116           ?80       #359                 ?1                  	;0
	736  266   DO_FCALL_BY_NAME/131      ?304      ?0                   ?0                  	;0
	737  267   INIT_FCALL_BY_NAME/59     ?0        ?0                   583:'shell_exec'    	;1
	738  267   FETCH_CONSTANT/99         #361=     ?0                   585:'BIN_PATH'      	;16
	739  267   CONCAT/8                  #362=     588:'sudo ln -sfn '  #361                	;0
	740  267   CONCAT/8                  #363=     #362                 589:'php/sbin/php-fpm_8.0 '	;0
	741  267   FETCH_CONSTANT/99         #364=     ?0                   590:'BIN_PATH'      	;16
	742  267   CONCAT/8                  #365=     #363                 #364                	;0
	743  267   CONCAT/8                  #366=     #365                 593:'php/sbin/php-fpm'	;0
	744  267   SEND_VAL_EX/116           ?80       #366                 ?1                  	;0
	745  267   DO_FCALL_BY_NAME/131      ?311      ?0                   ?0                  	;0
	746  268   INIT_FCALL_BY_NAME/59     ?0        ?0                   594:'shell_exec'    	;1
	747  268   FETCH_CONSTANT/99         #368=     ?0                   596:'BIN_PATH'      	;16
	748  268   CONCAT/8                  #369=     599:'sudo chown -R xui:xui ' #368                	;0
	749  268   CONCAT/8                  #370=     #369                 600:'php'           	;0
	750  268   SEND_VAL_EX/116           ?80       #370                 ?1                  	;0
	751  268   DO_FCALL_BY_NAME/131      ?315      ?0                   ?0                  	;0
	752  269   INIT_FCALL_BY_NAME/59     ?0        ?0                   601:'shell_exec'    	;1
	753  269   SEND_VAL_EX/116           ?80       603:'sudo service xuione restart' ?1                  	;0
	754  269   DO_FCALL_BY_NAME/131      ?316      ?0                   ?0                  	;0
	755  271   FREE/70                   ?0        $186                 ?13                 	;1
	756  271   NOP/0                     ?0        ?0                   ?0                  	;1
	757  271   GOTO/253                  ?0        ?1241                ?604                	;0
	758  273   NOP/0                     ?0        ?0                   ?0                  	;1	<<342
	759  273   NOP/0                     ?0        ?0                   ?0                  	;1
	760  273   GOTO/253                  ?0        ?834                 ?605                	;0
	761  275   INIT_FCALL_BY_NAME/59     ?0        ?0                   606:'shell_exec'    	;1
	762  275   FETCH_CONSTANT/99         #373=     ?0                   608:'XUI_HOME'      	;16
	763  275   CONCAT/8                  #374=     611:'sudo rm '       #373                	;0
	764  275   CONCAT/8                  #375=     #374                 612:'bin/php/etc/*.conf'	;0
	765  275   SEND_VAL_EX/116           ?80       #375                 ?1                  	;0
	766  275   DO_FCALL_BY_NAME/131      ?320      ?0                   ?0                  	;0
	767  276   ASSIGN/38                 ?321      16?27                613:'#! /bin/bash
' 	;0
	768  277   ASSIGN/38                 ?322      16?28                614:'upstream php {
    least_conn;
'	;0
	769  278   INIT_FCALL_BY_NAME/59     ?0        ?0                   615:'file_get_contents'	;1
	770  278   FETCH_CONSTANT/99         #379=     ?0                   617:'XUI_HOME'      	;16
	771  278   CONCAT/8                  #380=     #379                 620:'bin/php/etc/template'	;0
	772  278   SEND_VAL_EX/116           ?80       #380                 ?1                  	;0
	773  278   DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
	774  278   ASSIGN/38                 ?326      16?29                $381                	;0
	775  279   INIT_FCALL_BY_NAME/59     ?0        ?0                   621:'range'         	;2
	776  279   SEND_VAL_EX/116           ?80       623:1                ?1                  	;0
	777  279   SEND_VAR_EX/66            ?96       16?30                ?2                  	;0
	778  279   DO_FCALL_BY_NAME/131      $383=     ?0                   ?0                  	;0
	779  279   FE_RESET_R/77             $384=     $383                 ?821                	;0
	780  279   FE_FETCH_R/78             ?0        $384                 16?6                	;821	>>821	<<820
	781  280   FETCH_CONSTANT/99         #385=     ?0                   624:'XUI_HOME'      	;16
	782  280   CONCAT/8                  #386=     627:'start-stop-daemon --start --quiet --pidfile ' #385                	;0
	783  280   CONCAT/8                  #387=     #386                 628:'bin/php/sockets/'	;0
	784  280   CONCAT/8                  #388=     #387                 16?6                	;0
	785  280   CONCAT/8                  #389=     #388                 629:'.pid --exec '  	;0
	786  280   FETCH_CONSTANT/99         #390=     ?0                   630:'XUI_HOME'      	;16
	787  280   CONCAT/8                  #391=     #389                 #390                	;0
	788  280   CONCAT/8                  #392=     #391                 633:'bin/php/sbin/php-fpm -- --daemonize --fpm-config '	;0
	789  280   FETCH_CONSTANT/99         #393=     ?0                   634:'XUI_HOME'      	;16
	790  280   CONCAT/8                  #394=     #392                 #393                	;0
	791  280   CONCAT/8                  #395=     #394                 637:'bin/php/etc/'  	;0
	792  280   CONCAT/8                  #396=     #395                 16?6                	;0
	793  280   CONCAT/8                  #397=     #396                 638:'.conf
'        	;0
	794  280   ASSIGN_CONCAT/30          ?342      16?27                #397                	;0
	795  281   FETCH_CONSTANT/99         #399=     ?0                   639:'XUI_HOME'      	;16
	796  281   CONCAT/8                  #400=     642:'    server unix:' #399                	;0
	797  281   CONCAT/8                  #401=     #400                 643:'bin/php/sockets/'	;0
	798  281   CONCAT/8                  #402=     #401                 16?6                	;0
	799  281   CONCAT/8                  #403=     #402                 644:'.sock;
'       	;0
	800  281   ASSIGN_CONCAT/30          ?348      16?28                #403                	;0
	801  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   645:'file_put_contents'	;2
	802  282   FETCH_CONSTANT/99         #405=     ?0                   647:'XUI_HOME'      	;16
	803  282   CONCAT/8                  #406=     #405                 650:'bin/php/etc/'  	;0
	804  282   CONCAT/8                  #407=     #406                 16?6                	;0
	805  282   CONCAT/8                  #408=     #407                 651:'.conf'         	;0
	806  282   SEND_VAL_EX/116           ?80       #408                 ?1                  	;0
	807  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   652:'str_replace'   	;3
	808  282   SEND_VAL_EX/116           ?80       654:'#PATH#'         ?1                  	;0
	809  282   FETCH_CONSTANT/99         #409=     ?0                   655:'XUI_HOME'      	;16
	810  282   SEND_VAL_EX/116           ?96       #409                 ?2                  	;0
	811  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   658:'str_replace'   	;3
	812  282   SEND_VAL_EX/116           ?80       660:'#ID#'           ?1                  	;0
	813  282   SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	814  282   SEND_VAR_EX/66            ?112      16?29                ?3                  	;0
	815  282   DO_FCALL_BY_NAME/131      $410=     ?0                   ?0                  	;0
	816  282   SEND_VAR_NO_REF_EX/50     ?112      $410                 ?3                  	;0
	817  282   DO_FCALL_BY_NAME/131      $411=     ?0                   ?0                  	;0
	818  282   SEND_VAR_NO_REF_EX/50     ?96       $411                 ?2                  	;0
	819  282   DO_FCALL_BY_NAME/131      ?356      ?0                   ?0                  	;0
	820  283   JMP/42                    ?0        ?780                 ?0                  	;0	>>780
	821  283   FE_FREE/127               ?0        $384                 ?0                  	;0	<<779
	822  285   NOP/0                     ?0        ?0                   ?0                  	;1
	823  285   NOP/0                     ?0        ?0                   ?0                  	;1
	824  285   GOTO/253                  ?0        ?852                 ?661                	;0
	825  287   INIT_FCALL_BY_NAME/59     ?0        ?0                   662:'shell_exec'    	;1
	826  287   SEND_VAL_EX/116           ?80       664:'sudo systemctl start xuione' ?1                  	;0
	827  287   DO_FCALL_BY_NAME/131      ?357      ?0                   ?0                  	;0
	828  289   FREE/70                   ?0        $186                 ?13                 	;1
	829  289   NOP/0                     ?0        ?0                   ?0                  	;1
	830  289   GOTO/253                  ?0        ?1241                ?665                	;0
	831  290   NOP/0                     ?0        ?0                   ?0                  	;1
	832  290   NOP/0                     ?0        ?0                   ?0                  	;1
	833  290   GOTO/253                  ?0        ?880                 ?666                	;0
	834  292   ECHO/40                   ?0        667:'Setting PHP Services
' ?0                  	;0
	835  293   INIT_FCALL_BY_NAME/59     ?0        ?0                   668:'intval'        	;1
	836  293   FETCH_DIM_FUNC_ARG/93     $414=     16?24                670:'count'         	;1
	837  293   SEND_VAR_EX/66            ?80       $414                 ?1                  	;0
	838  293   DO_FCALL_BY_NAME/131      $415=     ?0                   ?0                  	;0
	839  293   ASSIGN/38                 ?360      16?30                $415                	;0
	840  294   FETCH_DIM_R/81            $417=     16?24                671:'reload'        	;0
	841  294   BOOL_NOT/13               #418=     $417                 ?0                  	;0
	842  294   JMPZ/43                   ?0        #418                 ?846                	;0	>>846
	843  295   NOP/0                     ?0        ?0                   ?0                  	;1
	844  295   NOP/0                     ?0        ?0                   ?0                  	;1
	845  295   GOTO/253                  ?0        ?849                 ?672                	;0
	846  297   INIT_FCALL_BY_NAME/59     ?0        ?0                   673:'shell_exec'    	;1	<<842
	847  297   SEND_VAL_EX/116           ?80       675:'sudo systemctl stop xuione' ?1                  	;0
	848  297   DO_FCALL_BY_NAME/131      ?363      ?0                   ?0                  	;0
	849  299   NOP/0                     ?0        ?0                   ?0                  	;1
	850  299   NOP/0                     ?0        ?0                   ?0                  	;1
	851  299   GOTO/253                  ?0        ?761                 ?676                	;0
	852  302   INIT_FCALL_BY_NAME/59     ?0        ?0                   677:'file_put_contents'	;2
	853  302   FETCH_CONSTANT/99         #420=     ?0                   679:'XUI_HOME'      	;16
	854  302   CONCAT/8                  #421=     #420                 682:'bin/daemons.sh'	;0
	855  302   SEND_VAL_EX/116           ?80       #421                 ?1                  	;0
	856  302   SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
	857  302   DO_FCALL_BY_NAME/131      ?366      ?0                   ?0                  	;0
	858  303   INIT_FCALL_BY_NAME/59     ?0        ?0                   683:'file_put_contents'	;2
	859  303   FETCH_CONSTANT/99         #423=     ?0                   685:'XUI_HOME'      	;16
	860  303   CONCAT/8                  #424=     #423                 688:'bin/nginx/conf/balance.conf'	;0
	861  303   SEND_VAL_EX/116           ?80       #424                 ?1                  	;0
	862  303   CONCAT/8                  #425=     16?28                689:'}'             	;0
	863  303   SEND_VAL_EX/116           ?96       #425                 ?2                  	;0
	864  303   DO_FCALL_BY_NAME/131      ?370      ?0                   ?0                  	;0
	865  304   INIT_FCALL_BY_NAME/59     ?0        ?0                   690:'shell_exec'    	;1
	866  304   FETCH_CONSTANT/99         #427=     ?0                   692:'XUI_HOME'      	;16
	867  304   CONCAT/8                  #428=     695:'sudo chown xui:xui ' #427                	;0
	868  304   CONCAT/8                  #429=     #428                 696:'bin/php/etc/*' 	;0
	869  304   SEND_VAL_EX/116           ?80       #429                 ?1                  	;0
	870  304   DO_FCALL_BY_NAME/131      ?374      ?0                   ?0                  	;0
	871  305   FETCH_DIM_R/81            $431=     16?24                697:'reload'        	;0
	872  305   BOOL_NOT/13               #432=     $431                 ?0                  	;0
	873  305   JMPZ/43                   ?0        #432                 ?877                	;0	>>877
	874  306   NOP/0                     ?0        ?0                   ?0                  	;1
	875  306   NOP/0                     ?0        ?0                   ?0                  	;1
	876  306   GOTO/253                  ?0        ?828                 ?698                	;0
	877  308   NOP/0                     ?0        ?0                   ?0                  	;1	<<873
	878  308   NOP/0                     ?0        ?0                   ?0                  	;1
	879  308   GOTO/253                  ?0        ?825                 ?699                	;0
	880  311   NOP/0                     ?0        ?0                   ?0                  	;1	<<344
	881  311   NOP/0                     ?0        ?0                   ?0                  	;1
	882  311   GOTO/253                  ?0        ?889                 ?700                	;0
	883  314   FREE/70                   ?0        $186                 ?13                 	;1
	884  314   NOP/0                     ?0        ?0                   ?0                  	;1
	885  314   GOTO/253                  ?0        ?1241                ?701                	;0
	886  315   NOP/0                     ?0        ?0                   ?0                  	;1
	887  315   NOP/0                     ?0        ?0                   ?0                  	;1
	888  315   GOTO/253                  ?0        ?978                 ?702                	;0
	889  317   FETCH_DIM_R/81            $433=     16?24                703:'data'          	;0
	890  317   ASSIGN/38                 ?378      16?31                $433                	;0
	891  318   ISSET_ISEMPTY_CV/197      #435=     16?31                ?0                  	;16777216
	892  318   BOOL_NOT/13               #436=     #435                 ?0                  	;0
	893  318   JMPZ_EX/46                #436=     #436                 ?898                	;0	>>898
	894  318   INIT_FCALL_BY_NAME/59     ?0        ?0                   704:'shell_exec'    	;1
	895  318   SEND_VAL_EX/116           ?80       706:'which cpufreq-info' ?1                  	;0
	896  318   DO_FCALL_BY_NAME/131      $437=     ?0                   ?0                  	;0
	897  318   BOOL/52                   #436=     $437                 ?0                  	;0
	898  318   BOOL_NOT/13               #438=     #436                 ?0                  	;0	<<893
	899  318   JMPZ/43                   ?0        #438                 ?903                	;0	>>903
	900  319   NOP/0                     ?0        ?0                   ?0                  	;1
	901  319   NOP/0                     ?0        ?0                   ?0                  	;1
	902  319   GOTO/253                  ?0        ?883                 ?707                	;0
	903  321   INIT_FCALL_BY_NAME/59     ?0        ?0                   708:'array_filter'  	;1	<<899
	904  321   INIT_FCALL_BY_NAME/59     ?0        ?0                   710:'explode'       	;2
	905  321   SEND_VAL_EX/116           ?80       712:' '              ?1                  	;0
	906  321   INIT_FCALL_BY_NAME/59     ?0        ?0                   713:'trim'          	;1
	907  321   INIT_FCALL_BY_NAME/59     ?0        ?0                   715:'shell_exec'    	;1
	908  321   SEND_VAL_EX/116           ?80       717:'cpufreq-info -g' ?1                  	;0
	909  321   DO_FCALL_BY_NAME/131      $439=     ?0                   ?0                  	;0
	910  321   SEND_VAR_NO_REF_EX/50     ?80       $439                 ?1                  	;0
	911  321   DO_FCALL_BY_NAME/131      $440=     ?0                   ?0                  	;0
	912  321   SEND_VAR_NO_REF_EX/50     ?96       $440                 ?2                  	;0
	913  321   DO_FCALL_BY_NAME/131      $441=     ?0                   ?0                  	;0
	914  321   SEND_VAR_NO_REF_EX/50     ?80       $441                 ?1                  	;0
	915  321   DO_FCALL_BY_NAME/131      $442=     ?0                   ?0                  	;0
	916  321   ASSIGN/38                 ?387      16?32                $442                	;0
	917  322   INIT_FCALL_BY_NAME/59     ?0        ?0                   718:'explode'       	;2
	918  322   SEND_VAL_EX/116           ?80       720:' '              ?1                  	;0
	919  322   INIT_FCALL_BY_NAME/59     ?0        ?0                   721:'trim'          	;1
	920  322   INIT_FCALL_BY_NAME/59     ?0        ?0                   723:'shell_exec'    	;1
	921  322   SEND_VAL_EX/116           ?80       725:'cpufreq-info -p' ?1                  	;0
	922  322   DO_FCALL_BY_NAME/131      $444=     ?0                   ?0                  	;0
	923  322   SEND_VAR_NO_REF_EX/50     ?80       $444                 ?1                  	;0
	924  322   DO_FCALL_BY_NAME/131      $445=     ?0                   ?0                  	;0
	925  322   SEND_VAR_NO_REF_EX/50     ?96       $445                 ?2                  	;0
	926  322   DO_FCALL_BY_NAME/131      $446=     ?0                   ?0                  	;0
	927  322   ASSIGN/38                 ?391      16?33                $446                	;0
	928  323   FETCH_DIM_R/81            $448=     16?33                726:2               	;0
	929  323   IS_NOT_EQUAL/18           #449=     $448                 16?31               	;0
	930  323   JMPZ_EX/46                #449=     #449                 ?936                	;0	>>936
	931  323   INIT_FCALL_BY_NAME/59     ?0        ?0                   727:'in_array'      	;2
	932  323   SEND_VAR_EX/66            ?80       16?31                ?1                  	;0
	933  323   SEND_VAR_EX/66            ?96       16?32                ?2                  	;0
	934  323   DO_FCALL_BY_NAME/131      $450=     ?0                   ?0                  	;0
	935  323   BOOL/52                   #449=     $450                 ?0                  	;0
	936  323   BOOL_NOT/13               #451=     #449                 ?0                  	;0	<<930
	937  323   JMPZ/43                   ?0        #451                 ?941                	;0	>>941
	938  324   NOP/0                     ?0        ?0                   ?0                  	;1
	939  324   NOP/0                     ?0        ?0                   ?0                  	;1
	940  324   GOTO/253                  ?0        ?975                 ?729                	;0
	941  326   NOP/0                     ?0        ?0                   ?0                  	;1	<<937
	942  326   NOP/0                     ?0        ?0                   ?0                  	;1
	943  326   GOTO/253                  ?0        ?944                 ?730                	;0
	944  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   731:'shell_exec'    	;1
	945  328   ROPE_INIT/54              #453=     ?0                   733:'sudo bash -c \'for ((i=0;i<$(nproc);i++)); do cpufreq-set -c '	;5
	946  328   ROPE_ADD/55               #453=     #453                 16?6                	;1
	947  328   ROPE_ADD/55               #453=     #453                 734:' -g '          	;2
	948  328   ROPE_ADD/55               #453=     #453                 16?31               	;3
	949  328   ROPE_END/56               #452=     #453                 735:'; done\''      	;4
	950  328   SEND_VAL_EX/116           ?80       #452                 ?1                  	;0
	951  328   DO_FCALL_BY_NAME/131      ?400      ?0                   ?0                  	;0
	952  329   INIT_FCALL_BY_NAME/59     ?0        ?0                   736:'sleep'         	;1
	953  329   SEND_VAL_EX/116           ?80       738:2                ?1                  	;0
	954  329   DO_FCALL_BY_NAME/131      ?401      ?0                   ?0                  	;0
	955  330   INIT_FCALL_BY_NAME/59     ?0        ?0                   739:'explode'       	;2
	956  330   SEND_VAL_EX/116           ?80       741:' '              ?1                  	;0
	957  330   INIT_FCALL_BY_NAME/59     ?0        ?0                   742:'trim'          	;1
	958  330   INIT_FCALL_BY_NAME/59     ?0        ?0                   744:'shell_exec'    	;1
	959  330   SEND_VAL_EX/116           ?80       746:'cpufreq-info -p' ?1                  	;0
	960  330   DO_FCALL_BY_NAME/131      $458=     ?0                   ?0                  	;0
	961  330   SEND_VAR_NO_REF_EX/50     ?80       $458                 ?1                  	;0
	962  330   DO_FCALL_BY_NAME/131      $459=     ?0                   ?0                  	;0
	963  330   SEND_VAR_NO_REF_EX/50     ?96       $459                 ?2                  	;0
	964  330   DO_FCALL_BY_NAME/131      $460=     ?0                   ?0                  	;0
	965  330   ASSIGN/38                 ?405      16?33                $460                	;0
	966  331   INIT_METHOD_CALL/112      ?0        16?16                747:'query'         	;3
	967  331   SEND_VAL_EX/116           ?80       749:'UPDATE `servers` SET `governor` = ? WHERE `id` = ?;' ?1                  	;0
	968  331   INIT_FCALL_BY_NAME/59     ?0        ?0                   750:'json_encode'   	;1
	969  331   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	970  331   DO_FCALL_BY_NAME/131      $462=     ?0                   ?0                  	;0
	971  331   SEND_VAR_NO_REF_EX/50     ?96       $462                 ?2                  	;0
	972  331   FETCH_CONSTANT/99         #463=     ?0                   752:'SERVER_ID'     	;16
	973  331   SEND_VAL_EX/116           ?112      #463                 ?3                  	;0
	974  331   DO_FCALL/60               ?408      ?0                   ?0                  	;0
	975  333   NOP/0                     ?0        ?0                   ?0                  	;1
	976  333   NOP/0                     ?0        ?0                   ?0                  	;1
	977  333   GOTO/253                  ?0        ?883                 ?755                	;0
	978  336   NOP/0                     ?0        ?0                   ?0                  	;1	<<346
	979  336   NOP/0                     ?0        ?0                   ?0                  	;1
	980  336   GOTO/253                  ?0        ?1003                ?756                	;0
	981  338   FREE/70                   ?0        $186                 ?13                 	;1
	982  338   NOP/0                     ?0        ?0                   ?0                  	;1
	983  338   GOTO/253                  ?0        ?1241                ?757                	;0
	984  339   NOP/0                     ?0        ?0                   ?0                  	;1
	985  339   NOP/0                     ?0        ?0                   ?0                  	;1
	986  339   GOTO/253                  ?0        ?1026                ?758                	;0
	987  341   INIT_FCALL_BY_NAME/59     ?0        ?0                   759:'file_put_contents'	;2
	988  341   SEND_VAL_EX/116           ?80       761:'/etc/sysctl.conf' ?1                  	;0
	989  341   SEND_VAR_EX/66            ?96       16?34                ?2                  	;0
	990  341   DO_FCALL_BY_NAME/131      ?409      ?0                   ?0                  	;0
	991  342   INIT_FCALL_BY_NAME/59     ?0        ?0                   762:'shell_exec'    	;1
	992  342   SEND_VAL_EX/116           ?80       764:'sudo sysctl -p > /dev/null' ?1                  	;0
	993  342   DO_FCALL_BY_NAME/131      ?410      ?0                   ?0                  	;0
	994  343   INIT_METHOD_CALL/112      ?0        16?16                765:'query'         	;3
	995  343   SEND_VAL_EX/116           ?80       767:'UPDATE `servers` SET `sysctl` = ? WHERE `id` = ?;' ?1                  	;0
	996  343   SEND_VAR_EX/66            ?96       16?34                ?2                  	;0
	997  343   FETCH_CONSTANT/99         #467=     ?0                   768:'SERVER_ID'     	;16
	998  343   SEND_VAL_EX/116           ?112      #467                 ?3                  	;0
	999  343   DO_FCALL/60               ?412      ?0                   ?0                  	;0
	1000 346   NOP/0                     ?0        ?0                   ?0                  	;1
	1001 346   NOP/0                     ?0        ?0                   ?0                  	;1
	1002 346   GOTO/253                  ?0        ?981                 ?771                	;0
	1003 348   FETCH_DIM_R/81            $469=     16?24                772:'data'          	;0
	1004 348   ASSIGN/38                 ?414      16?34                $469                	;0
	1005 349   ISSET_ISEMPTY_CV/197      #471=     16?34                ?0                  	;16777216
	1006 349   JMPZ/43                   ?0        #471                 ?1010               	;0	>>1010
	1007 350   NOP/0                     ?0        ?0                   ?0                  	;1
	1008 350   NOP/0                     ?0        ?0                   ?0                  	;1
	1009 350   GOTO/253                  ?0        ?1000                ?773                	;0
	1010 352   INIT_FCALL_BY_NAME/59     ?0        ?0                   774:'file_get_contents'	;1	<<1006
	1011 352   SEND_VAL_EX/116           ?80       776:'/etc/sysctl.conf' ?1                  	;0
	1012 352   DO_FCALL_BY_NAME/131      $472=     ?0                   ?0                  	;0
	1013 352   ASSIGN/38                 ?417      16?35                $472                	;0
	1014 353   IS_NOT_EQUAL/18           #474=     16?35                16?34               	;0
	1015 353   BOOL_NOT/13               #475=     #474                 ?0                  	;0
	1016 353   JMPZ/43                   ?0        #475                 ?1020               	;0	>>1020
	1017 354   NOP/0                     ?0        ?0                   ?0                  	;1
	1018 354   NOP/0                     ?0        ?0                   ?0                  	;1
	1019 354   GOTO/253                  ?0        ?1000                ?777                	;0
	1020 356   INIT_FCALL_BY_NAME/59     ?0        ?0                   778:'shell_exec'    	;1	<<1016
	1021 356   SEND_VAL_EX/116           ?80       780:'sudo modprobe ip_conntrack > /dev/null' ?1                  	;0
	1022 356   DO_FCALL_BY_NAME/131      ?420      ?0                   ?0                  	;0
	1023 357   NOP/0                     ?0        ?0                   ?0                  	;1
	1024 357   NOP/0                     ?0        ?0                   ?0                  	;1
	1025 357   GOTO/253                  ?0        ?987                 ?781                	;0
	1026 360   NOP/0                     ?0        ?0                   ?0                  	;1	<<348
	1027 360   NOP/0                     ?0        ?0                   ?0                  	;1
	1028 360   GOTO/253                  ?0        ?1029                ?782                	;0
	1029 362   ECHO/40                   ?0        783:'Setting NGINX Port
' ?0                  	;0
	1030 363   INIT_FCALL_BY_NAME/59     ?0        ?0                   784:'intval'        	;1
	1031 363   FETCH_DIM_FUNC_ARG/93     $477=     16?24                786:'type'          	;1
	1032 363   SEND_VAR_EX/66            ?80       $477                 ?1                  	;0
	1033 363   DO_FCALL_BY_NAME/131      $478=     ?0                   ?0                  	;0
	1034 363   IS_EQUAL/17               #479=     $478                 787:0               	;0
	1035 363   JMPZ/43                   ?0        #479                 ?1039               	;0	>>1039
	1036 364   NOP/0                     ?0        ?0                   ?0                  	;1
	1037 364   NOP/0                     ?0        ?0                   ?0                  	;1
	1038 364   GOTO/253                  ?0        ?1121                ?788                	;0
	1039 366   INIT_FCALL_BY_NAME/59     ?0        ?0                   789:'intval'        	;1	<<1035
	1040 366   FETCH_DIM_FUNC_ARG/93     $480=     16?24                791:'type'          	;1
	1041 366   SEND_VAR_EX/66            ?80       $480                 ?1                  	;0
	1042 366   DO_FCALL_BY_NAME/131      $481=     ?0                   ?0                  	;0
	1043 366   IS_EQUAL/17               #482=     $481                 792:1               	;0
	1044 366   JMPZ/43                   ?0        #482                 ?1048               	;0	>>1048
	1045 367   NOP/0                     ?0        ?0                   ?0                  	;1
	1046 367   NOP/0                     ?0        ?0                   ?0                  	;1
	1047 367   GOTO/253                  ?0        ?1080                ?793                	;0
	1048 369   INIT_FCALL_BY_NAME/59     ?0        ?0                   794:'intval'        	;1	<<1044
	1049 369   FETCH_DIM_FUNC_ARG/93     $483=     16?24                796:'type'          	;1
	1050 369   SEND_VAR_EX/66            ?80       $483                 ?1                  	;0
	1051 369   DO_FCALL_BY_NAME/131      $484=     ?0                   ?0                  	;0
	1052 369   IS_EQUAL/17               #485=     $484                 797:2               	;0
	1053 369   BOOL_NOT/13               #486=     #485                 ?0                  	;0
	1054 369   JMPZ/43                   ?0        #486                 ?1058               	;0	>>1058
	1055 370   NOP/0                     ?0        ?0                   ?0                  	;1
	1056 370   NOP/0                     ?0        ?0                   ?0                  	;1
	1057 370   GOTO/253                  ?0        ?1234                ?798                	;0
	1058 372   INIT_FCALL_BY_NAME/59     ?0        ?0                   799:'file_put_contents'	;2	<<1054
	1059 372   FETCH_CONSTANT/99         #487=     ?0                   801:'XUI_HOME'      	;16
	1060 372   CONCAT/8                  #488=     #487                 804:'bin/nginx_rtmp/conf/port.conf'	;0
	1061 372   SEND_VAL_EX/116           ?80       #488                 ?1                  	;0
	1062 372   INIT_FCALL_BY_NAME/59     ?0        ?0                   805:'intval'        	;1
	1063 372   FETCH_DIM_FUNC_ARG/93     $489=     16?24                807:'ports'         	;1
	1064 372   FETCH_DIM_FUNC_ARG/93     $490=     $489                 808:0               	;1
	1065 372   SEND_VAR_EX/66            ?80       $490                 ?1                  	;0
	1066 372   DO_FCALL_BY_NAME/131      $491=     ?0                   ?0                  	;0
	1067 372   CONCAT/8                  #492=     809:'listen '        $491                	;0
	1068 372   CONCAT/8                  #493=     #492                 810:';'             	;0
	1069 372   SEND_VAL_EX/116           ?96       #493                 ?2                  	;0
	1070 372   DO_FCALL_BY_NAME/131      ?438      ?0                   ?0                  	;0
	1071 373   NOP/0                     ?0        ?0                   ?0                  	;1
	1072 373   NOP/0                     ?0        ?0                   ?0                  	;1
	1073 373   GOTO/253                  ?0        ?1222                ?811                	;0
	1074 375   FREE/70                   ?0        $186                 ?13                 	;1
	1075 375   NOP/0                     ?0        ?0                   ?0                  	;1
	1076 375   GOTO/253                  ?0        ?1241                ?812                	;0
	1077 376   NOP/0                     ?0        ?0                   ?0                  	;1
	1078 376   NOP/0                     ?0        ?0                   ?0                  	;1
	1079 376   GOTO/253                  ?0        ?1240                ?813                	;0
	1080 379   ASSIGN/38                 ?439      16?36                814:array (
)       	;0
	1081 380   FETCH_DIM_R/81            $496=     16?24                815:'ports'         	;0
	1082 380   FE_RESET_R/77             $497=     $496                 ?1107               	;0
	1083 380   FE_FETCH_R/78             ?0        $497                 16?37               	;1107	>>1107	<<1106
	1084 381   INIT_FCALL_BY_NAME/59     ?0        ?0                   816:'is_numeric'    	;1
	1085 381   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	1086 381   DO_FCALL_BY_NAME/131      $498=     ?0                   ?0                  	;0
	1087 381   JMPZ_EX/46                #499=     $498                 ?1090               	;0	>>1090
	1088 381   IS_SMALLER_OR_EQUAL/20    #500=     818:80               16?37               	;0
	1089 381   BOOL/52                   #499=     #500                 ?0                  	;0
	1090 381   JMPZ_EX/46                #499=     #499                 ?1093               	;0	>>1093	<<1087
	1091 381   IS_SMALLER_OR_EQUAL/20    #501=     16?37                819:65535           	;0
	1092 381   BOOL/52                   #499=     #501                 ?0                  	;0
	1093 381   BOOL_NOT/13               #502=     #499                 ?0                  	;0	<<1090
	1094 381   JMPZ/43                   ?0        #502                 ?1099               	;0	>>1099
	1095 382   NOP/0                     ?0        ?0                   ?0                  	;1
	1096 382   NOP/0                     ?0        ?0                   ?0                  	;1
	1097 382   NOP/0                     ?0        ?0                   ?0                  	;1
	1098 382   GOTO/253                  ?0        ?1106                ?820                	;0
	1099 384   INIT_FCALL_BY_NAME/59     ?0        ?0                   821:'intval'        	;1	<<1094
	1100 384   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	1101 384   DO_FCALL_BY_NAME/131      $504=     ?0                   ?0                  	;0
	1102 384   CONCAT/8                  #505=     823:'listen '        $504                	;0
	1103 384   CONCAT/8                  #506=     #505                 824:' ssl;'         	;0
	1104 384   ASSIGN_DIM/147            ?447      16?36                ?4397406            	;0
	1105 384   OP_DATA/137               ?0        #506                 ?0                  	;0
	1106 386   JMP/42                    ?0        ?1083                ?0                  	;0	>>1083
	1107 386   FE_FREE/127               ?0        $497                 ?0                  	;0	<<1082
	1108 389   INIT_FCALL_BY_NAME/59     ?0        ?0                   825:'file_put_contents'	;2
	1109 389   FETCH_CONSTANT/99         #507=     ?0                   827:'XUI_HOME'      	;16
	1110 389   CONCAT/8                  #508=     #507                 830:'bin/nginx/conf/ports/https.conf'	;0
	1111 389   SEND_VAL_EX/116           ?80       #508                 ?1                  	;0
	1112 389   INIT_FCALL_BY_NAME/59     ?0        ?0                   831:'implode'       	;2
	1113 389   SEND_VAL_EX/116           ?80       833:' '              ?1                  	;0
	1114 389   SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1115 389   DO_FCALL_BY_NAME/131      $509=     ?0                   ?0                  	;0
	1116 389   SEND_VAR_NO_REF_EX/50     ?96       $509                 ?2                  	;0
	1117 389   DO_FCALL_BY_NAME/131      ?454      ?0                   ?0                  	;0
	1118 390   NOP/0                     ?0        ?0                   ?0                  	;1
	1119 390   NOP/0                     ?0        ?0                   ?0                  	;1
	1120 390   GOTO/253                  ?0        ?1204                ?834                	;0
	1121 393   ASSIGN/38                 ?455      16?36                835:array (
)       	;0
	1122 394   FETCH_DIM_R/81            $512=     16?24                836:'ports'         	;0
	1123 394   FE_RESET_R/77             $513=     $512                 ?1148               	;0
	1124 394   FE_FETCH_R/78             ?0        $513                 16?37               	;1148	>>1148	<<1147
	1125 395   INIT_FCALL_BY_NAME/59     ?0        ?0                   837:'is_numeric'    	;1
	1126 395   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	1127 395   DO_FCALL_BY_NAME/131      $514=     ?0                   ?0                  	;0
	1128 395   JMPZ_EX/46                #515=     $514                 ?1131               	;0	>>1131
	1129 395   IS_SMALLER_OR_EQUAL/20    #516=     839:80               16?37               	;0
	1130 395   BOOL/52                   #515=     #516                 ?0                  	;0
	1131 395   JMPZ_EX/46                #515=     #515                 ?1134               	;0	>>1134	<<1128
	1132 395   IS_SMALLER_OR_EQUAL/20    #517=     16?37                840:65535           	;0
	1133 395   BOOL/52                   #515=     #517                 ?0                  	;0
	1134 395   BOOL_NOT/13               #518=     #515                 ?0                  	;0	<<1131
	1135 395   JMPZ/43                   ?0        #518                 ?1140               	;0	>>1140
	1136 396   NOP/0                     ?0        ?0                   ?0                  	;1
	1137 396   NOP/0                     ?0        ?0                   ?0                  	;1
	1138 396   NOP/0                     ?0        ?0                   ?0                  	;1
	1139 396   GOTO/253                  ?0        ?1147                ?841                	;0
	1140 398   INIT_FCALL_BY_NAME/59     ?0        ?0                   842:'intval'        	;1	<<1135
	1141 398   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	1142 398   DO_FCALL_BY_NAME/131      $520=     ?0                   ?0                  	;0
	1143 398   CONCAT/8                  #521=     844:'listen '        $520                	;0
	1144 398   CONCAT/8                  #522=     #521                 845:';'             	;0
	1145 398   ASSIGN_DIM/147            ?463      16?36                ?4397406            	;0
	1146 398   OP_DATA/137               ?0        #522                 ?0                  	;0
	1147 400   JMP/42                    ?0        ?1124                ?0                  	;0	>>1124
	1148 400   FE_FREE/127               ?0        $513                 ?0                  	;0	<<1123
	1149 403   INIT_FCALL_BY_NAME/59     ?0        ?0                   846:'file_put_contents'	;2
	1150 403   FETCH_CONSTANT/99         #523=     ?0                   848:'XUI_HOME'      	;16
	1151 403   CONCAT/8                  #524=     #523                 851:'bin/nginx/conf/ports/http.conf'	;0
	1152 403   SEND_VAL_EX/116           ?80       #524                 ?1                  	;0
	1153 403   INIT_FCALL_BY_NAME/59     ?0        ?0                   852:'implode'       	;2
	1154 403   SEND_VAL_EX/116           ?80       854:' '              ?1                  	;0
	1155 403   SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
	1156 403   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
	1157 403   SEND_VAR_NO_REF_EX/50     ?96       $525                 ?2                  	;0
	1158 403   DO_FCALL_BY_NAME/131      ?470      ?0                   ?0                  	;0
	1159 404   NOP/0                     ?0        ?0                   ?0                  	;1
	1160 404   NOP/0                     ?0        ?0                   ?0                  	;1
	1161 404   GOTO/253                  ?0        ?1162                ?855                	;0
	1162 406   INIT_FCALL_BY_NAME/59     ?0        ?0                   856:'file_put_contents'	;2
	1163 406   FETCH_CONSTANT/99         #527=     ?0                   858:'XUI_HOME'      	;16
	1164 406   CONCAT/8                  #528=     #527                 861:'bin/nginx_rtmp/conf/live.conf'	;0
	1165 406   SEND_VAL_EX/116           ?80       #528                 ?1                  	;0
	1166 406   INIT_FCALL_BY_NAME/59     ?0        ?0                   862:'intval'        	;1
	1167 406   FETCH_DIM_FUNC_ARG/93     $529=     16?24                864:'ports'         	;1
	1168 406   FETCH_DIM_FUNC_ARG/93     $530=     $529                 865:0               	;1
	1169 406   SEND_VAR_EX/66            ?80       $530                 ?1                  	;0
	1170 406   DO_FCALL_BY_NAME/131      $531=     ?0                   ?0                  	;0
	1171 406   CONCAT/8                  #532=     866:'on_play http://127.0.0.1:' $531                	;0
	1172 406   CONCAT/8                  #533=     #532                 867:'/stream/rtmp; on_publish http://127.0.0.1:'	;0
	1173 406   INIT_FCALL_BY_NAME/59     ?0        ?0                   868:'intval'        	;1
	1174 406   FETCH_DIM_FUNC_ARG/93     $534=     16?24                870:'ports'         	;1
	1175 406   FETCH_DIM_FUNC_ARG/93     $535=     $534                 871:0               	;1
	1176 406   SEND_VAR_EX/66            ?80       $535                 ?1                  	;0
	1177 406   DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
	1178 406   CONCAT/8                  #537=     #533                 $536                	;0
	1179 406   CONCAT/8                  #538=     #537                 872:'/stream/rtmp; on_play_done http://127.0.0.1:'	;0
	1180 406   INIT_FCALL_BY_NAME/59     ?0        ?0                   873:'intval'        	;1
	1181 406   FETCH_DIM_FUNC_ARG/93     $539=     16?24                875:'ports'         	;1
	1182 406   FETCH_DIM_FUNC_ARG/93     $540=     $539                 876:0               	;1
	1183 406   SEND_VAR_EX/66            ?80       $540                 ?1                  	;0
	1184 406   DO_FCALL_BY_NAME/131      $541=     ?0                   ?0                  	;0
	1185 406   CONCAT/8                  #542=     #538                 $541                	;0
	1186 406   CONCAT/8                  #543=     #542                 877:'/stream/rtmp;' 	;0
	1187 406   SEND_VAL_EX/116           ?96       #543                 ?2                  	;0
	1188 406   DO_FCALL_BY_NAME/131      ?488      ?0                   ?0                  	;0
	1189 407   FETCH_DIM_R/81            $545=     16?24                878:'reload'        	;0
	1190 407   BOOL_NOT/13               #546=     $545                 ?0                  	;0
	1191 407   JMPZ/43                   ?0        #546                 ?1195               	;0	>>1195
	1192 408   NOP/0                     ?0        ?0                   ?0                  	;1
	1193 408   NOP/0                     ?0        ?0                   ?0                  	;1
	1194 408   GOTO/253                  ?0        ?1201                ?879                	;0
	1195 410   INIT_FCALL_BY_NAME/59     ?0        ?0                   880:'shell_exec'    	;1	<<1191
	1196 410   FETCH_CONSTANT/99         #547=     ?0                   882:'BIN_PATH'      	;16
	1197 410   CONCAT/8                  #548=     885:'sudo '          #547                	;0
	1198 410   CONCAT/8                  #549=     #548                 886:'nginx/sbin/nginx -s reload'	;0
	1199 410   SEND_VAL_EX/116           ?80       #549                 ?1                  	;0
	1200 410   DO_FCALL_BY_NAME/131      ?494      ?0                   ?0                  	;0
	1201 413   NOP/0                     ?0        ?0                   ?0                  	;1
	1202 413   NOP/0                     ?0        ?0                   ?0                  	;1
	1203 413   GOTO/253                  ?0        ?1074                ?887                	;0
	1204 415   FETCH_DIM_R/81            $551=     16?24                888:'reload'        	;0
	1205 415   BOOL_NOT/13               #552=     $551                 ?0                  	;0
	1206 415   JMPZ/43                   ?0        #552                 ?1210               	;0	>>1210
	1207 416   NOP/0                     ?0        ?0                   ?0                  	;1
	1208 416   NOP/0                     ?0        ?0                   ?0                  	;1
	1209 416   GOTO/253                  ?0        ?1216                ?889                	;0
	1210 418   INIT_FCALL_BY_NAME/59     ?0        ?0                   890:'shell_exec'    	;1	<<1206
	1211 418   FETCH_CONSTANT/99         #553=     ?0                   892:'BIN_PATH'      	;16
	1212 418   CONCAT/8                  #554=     895:'sudo '          #553                	;0
	1213 418   CONCAT/8                  #555=     #554                 896:'nginx/sbin/nginx -s reload'	;0
	1214 418   SEND_VAL_EX/116           ?80       #555                 ?1                  	;0
	1215 418   DO_FCALL_BY_NAME/131      ?500      ?0                   ?0                  	;0
	1216 421   NOP/0                     ?0        ?0                   ?0                  	;1
	1217 421   NOP/0                     ?0        ?0                   ?0                  	;1
	1218 421   GOTO/253                  ?0        ?1201                ?897                	;0
	1219 422   NOP/0                     ?0        ?0                   ?0                  	;1
	1220 422   NOP/0                     ?0        ?0                   ?0                  	;1
	1221 422   GOTO/253                  ?0        ?1121                ?898                	;0
	1222 424   FETCH_DIM_R/81            $557=     16?24                899:'reload'        	;0
	1223 424   BOOL_NOT/13               #558=     $557                 ?0                  	;0
	1224 424   JMPZ/43                   ?0        #558                 ?1228               	;0	>>1228
	1225 425   NOP/0                     ?0        ?0                   ?0                  	;1
	1226 425   NOP/0                     ?0        ?0                   ?0                  	;1
	1227 425   GOTO/253                  ?0        ?1234                ?900                	;0
	1228 427   INIT_FCALL_BY_NAME/59     ?0        ?0                   901:'shell_exec'    	;1	<<1224
	1229 427   FETCH_CONSTANT/99         #559=     ?0                   903:'BIN_PATH'      	;16
	1230 427   CONCAT/8                  #560=     906:'sudo '          #559                	;0
	1231 427   CONCAT/8                  #561=     #560                 907:'nginx_rtmp/sbin/nginx_rtmp -s reload'	;0
	1232 427   SEND_VAL_EX/116           ?80       #561                 ?1                  	;0
	1233 427   DO_FCALL_BY_NAME/131      ?506      ?0                   ?0                  	;0
	1234 430   NOP/0                     ?0        ?0                   ?0                  	;1
	1235 430   NOP/0                     ?0        ?0                   ?0                  	;1
	1236 430   GOTO/253                  ?0        ?1216                ?908                	;0
	1237 431   NOP/0                     ?0        ?0                   ?0                  	;1
	1238 431   NOP/0                     ?0        ?0                   ?0                  	;1
	1239 431   GOTO/253                  ?0        ?1080                ?909                	;0
	1240 432   FREE/70                   ?0        $186                 ?0                  	;0	<<349
	1241 436   JMP/42                    ?0        ?294                 ?0                  	;0	>>294
	1242 436   FE_FREE/127               ?0        $178                 ?0                  	;0	<<293
	1243 439   GOTO/253                  ?0        ?1334                ?910                	;0
	1244 441   ECHO/40                   ?0        911:'Enabling Cloudflare...
' ?0                  	;0
	1245 442   INIT_FCALL_BY_NAME/59     ?0        ?0                   912:'file_put_contents'	;2
	1246 442   FETCH_CONSTANT/99         #563=     ?0                   914:'BIN_PATH'      	;16
	1247 442   CONCAT/8                  #564=     #563                 917:'nginx/conf/realip_cloudflare.conf'	;0
	1248 442   SEND_VAL_EX/116           ?80       #564                 ?1                  	;0
	1249 442   SEND_VAL_EX/116           ?96       918:'set_real_ip_from 103.21.244.0/22;
set_real_ip_from 103.22.200.0/22;
set_real_ip_from 103.31.4.0/22;
set_real_ip_from 104.16.0.0/13;
set_real_ip_from 104.24.0.0/14;
set_real_ip_from 108.162.192.0/18;
set_real_ip_from 131.0.72.0/22;
set_real_ip_from 141.101.64.0/18;
set_real_ip_from 162.158.0.0/15;
set_real_ip_from 172.64.0.0/13;
set_real_ip_from 173.245.48.0/20;
set_real_ip_from 188.114.96.0/20;
set_real_ip_from 190.93.240.0/20;
set_real_ip_from 197.234.240.0/22;
set_real_ip_from 198.41.128.0/17;
set_real_ip_from 2400:cb00::/32;
set_real_ip_from 2606:4700::/32;
set_real_ip_from 2803:f800::/32;
set_real_ip_from 2405:b500::/32;
set_real_ip_from 2405:8100::/32;
set_real_ip_from 2c0f:f248::/32;
set_real_ip_from 2a06:98c0::/29;' ?2                  	;0
	1250 442   DO_FCALL_BY_NAME/131      ?509      ?0                   ?0                  	;0
	1251 443   ASSIGN/38                 ?510      16?2                 919:true            	;0
	1252 446   GOTO/253                  ?0        ?1395                ?920                	;0
	1253 448   ECHO/40                   ?0        921:'Updating rate limit...
' ?0                  	;0
	1254 449   INIT_FCALL_BY_NAME/59     ?0        ?0                   922:'file_put_contents'	;2
	1255 449   FETCH_CONSTANT/99         #567=     ?0                   924:'BIN_PATH'      	;16
	1256 449   CONCAT/8                  #568=     #567                 927:'nginx/conf/limit.conf'	;0
	1257 449   SEND_VAL_EX/116           ?80       #568                 ?1                  	;0
	1258 449   SEND_VAR_EX/66            ?96       16?38                ?2                  	;0
	1259 449   DO_FCALL_BY_NAME/131      ?513      ?0                   ?0                  	;0
	1260 450   ASSIGN/38                 ?514      16?2                 928:true            	;0
	1261 452   FETCH_CONSTANT/99         #572=     ?0                   932:'SERVER_ID'     	;16
	1262 452   FETCH_STATIC_PROP_R/173   $571=     929:'rServers'       930:'XUI'           	;0
	1263 452   FETCH_DIM_R/81            $573=     $571                 #572                	;0
	1264 452   FETCH_DIM_R/81            $574=     $573                 935:'limit_requests'	;0
	1265 452   IS_SMALLER/19             #575=     936:0                $574                	;0
	1266 452   JMPZ/43                   ?0        #575                 ?1268               	;0	>>1268
	1267 453   GOTO/253                  ?0        ?1384                ?937                	;0
	1268 455   GOTO/253                  ?0        ?1382                ?938                	;0	<<1266
	1269 457   FETCH_DIM_R/81            $576=     16?17                939:'services'      	;0
	1270 457   BOOL_NOT/13               #577=     $576                 ?0                  	;0
	1271 457   JMPZ/43                   ?0        #577                 ?1273               	;0	>>1273
	1272 458   GOTO/253                  ?0        ?2158                ?940                	;0
	1273 460   ASSIGN/38                 ?522      16?39                941:0               	;0	<<1271
	1274 461   INIT_FCALL_BY_NAME/59     ?0        ?0                   942:'explode'       	;2
	1275 461   SEND_VAL_EX/116           ?80       944:'
'              ?1                  	;0
	1276 461   INIT_FCALL_BY_NAME/59     ?0        ?0                   945:'file_get_contents'	;1
	1277 461   FETCH_CONSTANT/99         #579=     ?0                   947:'XUI_HOME'      	;16
	1278 461   CONCAT/8                  #580=     #579                 950:'bin/daemons.sh'	;0
	1279 461   SEND_VAL_EX/116           ?80       #580                 ?1                  	;0
	1280 461   DO_FCALL_BY_NAME/131      $581=     ?0                   ?0                  	;0
	1281 461   SEND_VAR_NO_REF_EX/50     ?96       $581                 ?2                  	;0
	1282 461   DO_FCALL_BY_NAME/131      $582=     ?0                   ?0                  	;0
	1283 461   ASSIGN/38                 ?527      16?40                $582                	;0
	1284 462   FE_RESET_R/77             $584=     16?40                ?1299               	;0
	1285 462   FE_FETCH_R/78             ?0        $584                 16?19               	;1299	>>1299	<<1298
	1286 463   INIT_FCALL_BY_NAME/59     ?0        ?0                   951:'explode'       	;2
	1287 463   SEND_VAL_EX/116           ?80       953:' '              ?1                  	;0
	1288 463   SEND_VAR_EX/66            ?96       16?19                ?2                  	;0
	1289 463   DO_FCALL_BY_NAME/131      $585=     ?0                   ?0                  	;0
	1290 463   FETCH_DIM_R/81            $586=     $585                 954:0               	;0
	1291 463   IS_EQUAL/17               #587=     $586                 955:'start-stop-daemon'	;0
	1292 463   BOOL_NOT/13               #588=     #587                 ?0                  	;0
	1293 463   JMPZ/43                   ?0        #588                 ?1296               	;0	>>1296
	1294 464   NOP/0                     ?0        ?0                   ?0                  	;1
	1295 464   GOTO/253                  ?0        ?1298                ?956                	;0
	1296 466   POST_INC/36               #589=     16?39                ?0                  	;0	<<1293
	1297 466   FREE/70                   ?0        #589                 ?0                  	;0
	1298 468   JMP/42                    ?0        ?1285                ?0                  	;0	>>1285
	1299 468   FE_FREE/127               ?0        $584                 ?0                  	;0	<<1284
	1300 471   GOTO/253                  ?0        ?2135                ?957                	;0
	1301 473   ECHO/40                   ?0        958:'Updating Crons...
' ?0                  	;0
	1302 474   INIT_FCALL_BY_NAME/59     ?0        ?0                   959:'unlink'        	;1
	1303 474   FETCH_CONSTANT/99         #590=     ?0                   961:'TMP_PATH'      	;16
	1304 474   CONCAT/8                  #591=     #590                 964:'crontab'       	;0
	1305 474   SEND_VAL_EX/116           ?80       #591                 ?1                  	;0
	1306 474   DO_FCALL_BY_NAME/131      ?536      ?0                   ?0                  	;0
	1307 477   INIT_FCALL_BY_NAME/59     ?0        ?0                   965:'file_exists'   	;1
	1308 477   FETCH_CONSTANT/99         #593=     ?0                   967:'CONFIG_PATH'   	;16
	1309 477   CONCAT/8                  #594=     #593                 970:'sysctl.on'     	;0
	1310 477   SEND_VAL_EX/116           ?80       #594                 ?1                  	;0
	1311 477   DO_FCALL_BY_NAME/131      $595=     ?0                   ?0                  	;0
	1312 477   BOOL_NOT/13               #596=     $595                 ?0                  	;0
	1313 477   JMPZ/43                   ?0        #596                 ?1315               	;0	>>1315
	1314 478   GOTO/253                  ?0        ?286                 ?971                	;0
	1315 480   GOTO/253                  ?0        ?1678                ?972                	;0	<<1313
	1316 482   EXIT/79                   ?0        ?0                   ?0                  	;0
	1317 485   INIT_FCALL_BY_NAME/59     ?0        ?0                   973:'curl_init'     	;1
	1318 485   FETCH_CONSTANT/99         #598=     ?0                   978:'SERVER_ID'     	;16
	1319 485   FETCH_STATIC_PROP_R/173   $597=     975:'rServers'       976:'XUI'           	;0
	1320 485   FETCH_DIM_R/81            $599=     $597                 #598                	;0
	1321 485   FETCH_DIM_R/81            $600=     $599                 981:'http_broadcast_port'	;0
	1322 485   CONCAT/8                  #601=     982:'http://127.0.0.1:' $600                	;0
	1323 485   CONCAT/8                  #602=     #601                 983:'/init'         	;0
	1324 485   SEND_VAL_EX/116           ?80       #602                 ?1                  	;0
	1325 485   DO_FCALL_BY_NAME/131      $603=     ?0                   ?0                  	;0
	1326 485   ASSIGN/38                 ?548      16?14                $603                	;0
	1327 486   INIT_FCALL_BY_NAME/59     ?0        ?0                   984:'curl_setopt'   	;3
	1328 486   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	1329 486   FETCH_CONSTANT/99         #605=     ?0                   986:'CURLOPT_RETURNTRANSFER'	;16
	1330 486   SEND_VAL_EX/116           ?96       #605                 ?2                  	;0
	1331 486   SEND_VAL_EX/116           ?112      989:true             ?3                  	;0
	1332 486   DO_FCALL_BY_NAME/131      ?550      ?0                   ?0                  	;0
	1333 487   GOTO/253                  ?0        ?81                  ?990                	;0
	1334 490   INIT_METHOD_CALL/112      ?0        16?16                991:'query'         	;1
	1335 490   SEND_VAL_EX/116           ?80       993:'DELETE FROM `signals` WHERE LENGTH(`custom_data`) > 0 AND UNIX_TIMESTAMP() - `time` >= 86400;' ?1                  	;0
	1336 490   DO_FCALL/60               ?551      ?0                   ?0                  	;0
	1337 491   INIT_METHOD_CALL/112      ?0        16?16                994:'close_mysql'   	;0
	1338 491   DO_FCALL/60               ?552      ?0                   ?0                  	;0
	1339 492   GOTO/253                  ?0        ?2183                ?996                	;0
	1340 494   INIT_METHOD_CALL/112      ?0        16?16                997:'query'         	;3
	1341 494   SEND_VAL_EX/116           ?80       999:'INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'FLUSH\', \'Flushed blocked IP\\\'s from iptables.\', \'root\', \'localhost\', NULL, ?);' ?1                  	;0
	1342 494   FETCH_CONSTANT/99         #609=     ?0                   1000:'SERVER_ID'    	;16
	1343 494   SEND_VAL_EX/116           ?96       #609                 ?2                  	;0
	1344 494   INIT_FCALL_BY_NAME/59     ?0        ?0                   1003:'time'         	;0
	1345 494   DO_FCALL_BY_NAME/131      $610=     ?0                   ?0                  	;0
	1346 494   SEND_VAR_NO_REF_EX/50     ?112      $610                 ?3                  	;0
	1347 494   DO_FCALL/60               ?555      ?0                   ?0                  	;0
	1348 495   INIT_METHOD_CALL/112      ?0        16?16                1005:'query'        	;2
	1349 495   SEND_VAL_EX/116           ?80       1007:'DELETE FROM `signals` WHERE `server_id` = ? AND `custom_data` = \'{"action":"flush"}\' AND `cache` = 0;' ?1                  	;0
	1350 495   FETCH_CONSTANT/99         #612=     ?0                   1008:'SERVER_ID'    	;16
	1351 495   SEND_VAL_EX/116           ?96       #612                 ?2                  	;0
	1352 495   DO_FCALL/60               ?557      ?0                   ?0                  	;0
	1353 497   ASSIGN/38                 ?558      16?2                 1011:false          	;0
	1354 498   INIT_STATIC_METHOD_CALL/113 ?0        1012:'XUI'           1014:'De052f142A92e9BF'	;0
	1355 498   DO_FCALL/60               $615=     ?0                   ?0                  	;0
	1356 498   ASSIGN/38                 ?560      16?41                $615                	;0
	1357 499   GOTO/253                  ?0        ?1912                ?1016               	;0
	1358 501   INIT_FCALL_BY_NAME/59     ?0        ?0                   1017:'trim'         	;1
	1359 501   INIT_FCALL_BY_NAME/59     ?0        ?0                   1019:'file_get_contents'	;1
	1360 501   FETCH_CONSTANT/99         #617=     ?0                   1021:'BIN_PATH'     	;16
	1361 501   CONCAT/8                  #618=     #617                 1024:'nginx/conf/limit_queue.conf'	;0
	1362 501   SEND_VAL_EX/116           ?80       #618                 ?1                  	;0
	1363 501   DO_FCALL_BY_NAME/131      $619=     ?0                   ?0                  	;0
	1364 501   SEND_VAR_NO_REF_EX/50     ?80       $619                 ?1                  	;0
	1365 501   DO_FCALL_BY_NAME/131      $620=     ?0                   ?0                  	;0
	1366 501   JMP_SET/152               #621=     $620                 ?1368               	;0
	1367 501   QM_ASSIGN/22              #621=     1025:''              ?0                  	;0
	1368 501   ASSIGN/38                 ?566      16?42                #621                	;0
	1369 502   IS_NOT_EQUAL/18           #623=     16?38                16?42               	;0
	1370 502   BOOL_NOT/13               #624=     #623                 ?0                  	;0
	1371 502   JMPZ/43                   ?0        #624                 ?1373               	;0	>>1373
	1372 503   GOTO/253                  ?0        ?1881                ?1026               	;0
	1373 505   ECHO/40                   ?0        1027:'Updating rate limit queue...
' ?0                  	;0	<<1371
	1374 506   INIT_FCALL_BY_NAME/59     ?0        ?0                   1028:'file_put_contents'	;2
	1375 506   FETCH_CONSTANT/99         #625=     ?0                   1030:'BIN_PATH'     	;16
	1376 506   CONCAT/8                  #626=     #625                 1033:'nginx/conf/limit_queue.conf'	;0
	1377 506   SEND_VAL_EX/116           ?80       #626                 ?1                  	;0
	1378 506   SEND_VAR_EX/66            ?96       16?38                ?2                  	;0
	1379 506   DO_FCALL_BY_NAME/131      ?571      ?0                   ?0                  	;0
	1380 507   ASSIGN/38                 ?572      16?2                 1034:true           	;0
	1381 508   GOTO/253                  ?0        ?1881                ?1035               	;0
	1382 510   ASSIGN/38                 ?573      16?38                1036:''             	;0
	1383 511   GOTO/253                  ?0        ?1394                ?1037               	;0
	1384 513   INIT_FCALL_BY_NAME/59     ?0        ?0                   1038:'intval'       	;1
	1385 513   FETCH_CONSTANT/99         #631=     ?0                   1043:'SERVER_ID'    	;16
	1386 513   FETCH_STATIC_PROP_FUNC_ARG/177 $630=     1040:'rServers'      1041:'XUI'          	;1
	1387 513   FETCH_DIM_FUNC_ARG/93     $632=     $630                 #631                	;1
	1388 513   FETCH_DIM_FUNC_ARG/93     $633=     $632                 1046:'limit_burst'  	;1
	1389 513   SEND_VAR_EX/66            ?80       $633                 ?1                  	;0
	1390 513   DO_FCALL_BY_NAME/131      $634=     ?0                   ?0                  	;0
	1391 513   CONCAT/8                  #635=     1047:'limit_req zone=two burst=' $634                	;0
	1392 513   CONCAT/8                  #636=     #635                 1048:';'            	;0
	1393 513   ASSIGN/38                 ?581      16?38                #636                	;0
	1394 515   GOTO/253                  ?0        ?1358                ?1049               	;0
	1395 517   FETCH_CONSTANT/99         #639=     ?0                   1053:'SERVER_ID'    	;16
	1396 517   FETCH_STATIC_PROP_R/173   $638=     1050:'rServers'      1051:'XUI'          	;0
	1397 517   FETCH_DIM_R/81            $640=     $638                 #639                	;0
	1398 517   FETCH_DIM_R/81            $641=     $640                 1056:'is_main'      	;0
	1399 517   BOOL_NOT/13               #642=     $641                 ?0                  	;0
	1400 517   JMPZ/43                   ?0        #642                 ?1402               	;0	>>1402
	1401 518   GOTO/253                  ?0        ?1716                ?1057               	;0
	1402 520   INIT_FCALL_BY_NAME/59     ?0        ?0                   1058:'stripos'      	;2	<<1400
	1403 520   INIT_FCALL_BY_NAME/59     ?0        ?0                   1060:'trim'         	;1
	1404 520   INIT_FCALL_BY_NAME/59     ?0        ?0                   1062:'file_get_contents'	;1
	1405 520   FETCH_CONSTANT/99         #643=     ?0                   1064:'BIN_PATH'     	;16
	1406 520   CONCAT/8                  #644=     #643                 1067:'nginx/conf/gzip.conf'	;0
	1407 520   SEND_VAL_EX/116           ?80       #644                 ?1                  	;0
	1408 520   DO_FCALL_BY_NAME/131      $645=     ?0                   ?0                  	;0
	1409 520   SEND_VAR_NO_REF_EX/50     ?80       $645                 ?1                  	;0
	1410 520   DO_FCALL_BY_NAME/131      $646=     ?0                   ?0                  	;0
	1411 520   JMP_SET/152               #647=     $646                 ?1413               	;0
	1412 520   QM_ASSIGN/22              #647=     1068:'gzip off'      ?0                  	;0
	1413 520   SEND_VAL_EX/116           ?80       #647                 ?1                  	;0
	1414 520   SEND_VAL_EX/116           ?96       1069:'gzip on'       ?2                  	;0
	1415 520   DO_FCALL_BY_NAME/131      $648=     ?0                   ?0                  	;0
	1416 520   IS_NOT_IDENTICAL/16       #649=     $648                 1070:false          	;0
	1417 520   ASSIGN/38                 ?594      16?43                #649                	;0
	1418 521   FETCH_CONSTANT/99         #652=     ?0                   1074:'SERVER_ID'    	;16
	1419 521   FETCH_STATIC_PROP_R/173   $651=     1071:'rServers'      1072:'XUI'          	;0
	1420 521   FETCH_DIM_R/81            $653=     $651                 #652                	;0
	1421 521   FETCH_DIM_R/81            $654=     $653                 1077:'enable_gzip'  	;0
	1422 521   JMPZ/43                   ?0        $654                 ?1424               	;0	>>1424
	1423 522   GOTO/253                  ?0        ?26                  ?1078               	;0
	1424 524   BOOL_NOT/13               #655=     16?43                ?0                  	;0	<<1422
	1425 524   JMPZ/43                   ?0        #655                 ?1427               	;0	>>1427
	1426 525   GOTO/253                  ?0        ?25                  ?1079               	;0
	1427 527   ECHO/40                   ?0        1080:'Disabling GZIP...
' ?0                  	;0	<<1425
	1428 528   GOTO/253                  ?0        ?18                  ?1081               	;0
	1429 530   INIT_FCALL_BY_NAME/59     ?0        ?0                   1082:'file_exists'  	;1
	1430 530   FETCH_CONSTANT/99         #656=     ?0                   1084:'XUI_HOME'     	;16
	1431 530   CONCAT/8                  #657=     #656                 1087:'www/c'        	;0
	1432 530   SEND_VAL_EX/116           ?80       #657                 ?1                  	;0
	1433 530   DO_FCALL_BY_NAME/131      $658=     ?0                   ?0                  	;0
	1434 530   BOOL_NOT/13               #659=     $658                 ?0                  	;0
	1435 530   JMPZ/43                   ?0        #659                 ?1437               	;0	>>1437
	1436 531   GOTO/253                  ?0        ?1445                ?1088               	;0
	1437 533   INIT_FCALL_BY_NAME/59     ?0        ?0                   1089:'array_unshift'	;2	<<1435
	1438 533   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	1439 533   INIT_FCALL_BY_NAME/59     ?0        ?0                   1091:'json_encode'  	;1
	1440 533   SEND_VAL_EX/116           ?80       1093:array (
  'action' => 'disable_ministra',
) ?1                  	;0
	1441 533   DO_FCALL_BY_NAME/131      $660=     ?0                   ?0                  	;0
	1442 533   INIT_ARRAY/71             #661=     $660                 1094:'custom_data'  	;6
	1443 533   SEND_VAL_EX/116           ?96       #661                 ?2                  	;0
	1444 533   DO_FCALL_BY_NAME/131      ?606      ?0                   ?0                  	;0
	1445 535   GOTO/253                  ?0        ?1911                ?1095               	;0
	1446 537   GOTO/253                  ?0        ?1896                ?1096               	;0
	1447 539   JMPZ/43                   ?0        16?43                ?1449               	;0	>>1449
	1448 540   GOTO/253                  ?0        ?1457                ?1097               	;0
	1449 542   ECHO/40                   ?0        1098:'Enabling GZIP...
' ?0                  	;0	<<1447
	1450 543   INIT_FCALL_BY_NAME/59     ?0        ?0                   1099:'file_put_contents'	;2
	1451 543   FETCH_CONSTANT/99         #663=     ?0                   1101:'BIN_PATH'     	;16
	1452 543   CONCAT/8                  #664=     #663                 1104:'nginx/conf/gzip.conf'	;0
	1453 543   SEND_VAL_EX/116           ?80       #664                 ?1                  	;0
	1454 543   SEND_VAL_EX/116           ?96       1105:'gzip on;
gzip_min_length 1000;
gzip_buffers 4 32k;
gzip_proxied any;
gzip_types application/json application/xml;
gzip_vary on;
gzip_disable "MSIE [1-6].(?!.*SV1)";' ?2                  	;0
	1455 543   DO_FCALL_BY_NAME/131      ?609      ?0                   ?0                  	;0
	1456 544   ASSIGN/38                 ?610      16?2                 1106:true           	;0
	1457 546   GOTO/253                  ?0        ?1716                ?1107               	;0
	1458 548   FETCH_DIM_R/81            $667=     16?17                1108:'php'          	;0
	1459 548   BOOL_NOT/13               #668=     $667                 ?0                  	;0
	1460 548   JMPZ/43                   ?0        #668                 ?1462               	;0	>>1462
	1461 549   GOTO/253                  ?0        ?1988                ?1109               	;0
	1462 551   INIT_FCALL_BY_NAME/59     ?0        ?0                   1110:'basename'     	;1	<<1460
	1463 551   INIT_FCALL_BY_NAME/59     ?0        ?0                   1112:'readlink'     	;1
	1464 551   FETCH_CONSTANT/99         #669=     ?0                   1114:'PHP_BIN'      	;16
	1465 551   SEND_VAL_EX/116           ?80       #669                 ?1                  	;0
	1466 551   DO_FCALL_BY_NAME/131      $670=     ?0                   ?0                  	;0
	1467 551   SEND_VAR_NO_REF_EX/50     ?80       $670                 ?1                  	;0
	1468 551   DO_FCALL_BY_NAME/131      $671=     ?0                   ?0                  	;0
	1469 551   ASSIGN/38                 ?616      16?44                $671                	;0
	1470 552   ASSIGN/38                 ?617      16?45                1117:NULL           	;0
	1471 553   FETCH_CONSTANT/99         #675=     ?0                   1121:'SERVER_ID'    	;16
	1472 553   FETCH_STATIC_PROP_R/173   $674=     1118:'rServers'      1119:'XUI'          	;0
	1473 553   FETCH_DIM_R/81            $676=     $674                 #675                	;0
	1474 553   FETCH_DIM_R/81            $677=     $676                 1124:'php_version'  	;0
	1475 554   CASE/48                   #678=     $677                 1125:'74'           	;0	>>1477
	1476 554   JMPNZ/44                  ?0        #678                 ?1482               	;0	>>1482
	1477 557   CASE/48                   #678=     $677                 1126:'72'           	;0	>>1479	<<1475
	1478 557   JMPNZ/44                  ?0        #678                 ?1485               	;0	>>1485
	1479 560   CASE/48                   #678=     $677                 1127:'80'           	;0	>>1481	<<1477
	1480 560   JMPNZ/44                  ?0        #678                 ?1488               	;0	>>1488
	1481 560   JMP/42                    ?0        ?1491                ?0                  	;0	>>1491	<<1479
	1482 555   ASSIGN/38                 ?623      16?45                1128:'php_7.4'      	;0	<<1476
	1483 556   FREE/70                   ?0        $677                 ?43                 	;1
	1484 556   GOTO/253                  ?0        ?1968                ?1129               	;0
	1485 558   ASSIGN/38                 ?624      16?45                1130:'php_7.2'      	;0	<<1478
	1486 559   FREE/70                   ?0        $677                 ?43                 	;1
	1487 559   GOTO/253                  ?0        ?1968                ?1131               	;0
	1488 561   ASSIGN/38                 ?625      16?45                1132:'php_8.0'      	;0	<<1480
	1489 562   FREE/70                   ?0        $677                 ?43                 	;1
	1490 562   GOTO/253                  ?0        ?1968                ?1133               	;0
	1491 562   FREE/70                   ?0        $677                 ?0                  	;0	<<1481
	1492 565   GOTO/253                  ?0        ?1968                ?1134               	;0
	1493 567   ASSIGN/38                 ?626      16?17                1135:array (
  'mag' => true,
  'php' => true,
  'services' => true,
  'ports' => true,
  'ramdisk' => true,
)	;0
	1494 568   FE_RESET_R/77             $683=     16?1                 ?1550               	;0
	1495 568   FE_FETCH_R/78             ?0        $683                 16?23               	;1550	>>1550	<<1549
	1496 569   INIT_FCALL_BY_NAME/59     ?0        ?0                   1136:'json_decode'  	;2
	1497 569   FETCH_DIM_FUNC_ARG/93     $684=     16?23                1138:'custom_data'  	;1
	1498 569   SEND_VAR_EX/66            ?80       $684                 ?1                  	;0
	1499 569   SEND_VAL_EX/116           ?96       1139:true            ?2                  	;0
	1500 569   DO_FCALL_BY_NAME/131      $685=     ?0                   ?0                  	;0
	1501 569   ASSIGN/38                 ?630      16?24                $685                	;0
	1502 570   FETCH_DIM_R/81            $687=     16?24                1140:'action'       	;0
	1503 570   SWITCH_STRING/188         ?0        $687                 1141:array (
  'disable_ramdisk' => 1523,
  'enable_ramdisk' => 1523,
  'enable_ministra' => 1528,
  'disable_ministra' => 1528,
  'switch_php72' => 1533,
  'switch_php74' => 1533,
  'switch_php80' => 1533,
  'set_services' => 1538,
  'set_port' => 1543,
)	;1548
	1504 571   CASE/48                   #688=     $687                 1142:'disable_ramdisk'	;0	>>1506
	1505 571   JMPNZ/44                  ?0        #688                 ?1523               	;0	>>1523
	1506 572   CASE/48                   #688=     $687                 1143:'enable_ramdisk'	;0	>>1508	<<1504
	1507 572   JMPNZ/44                  ?0        #688                 ?1523               	;0	>>1523
	1508 575   CASE/48                   #688=     $687                 1144:'enable_ministra'	;0	>>1510	<<1506
	1509 575   JMPNZ/44                  ?0        #688                 ?1528               	;0	>>1528
	1510 576   CASE/48                   #688=     $687                 1145:'disable_ministra'	;0	>>1512	<<1508
	1511 576   JMPNZ/44                  ?0        #688                 ?1528               	;0	>>1528
	1512 579   CASE/48                   #688=     $687                 1146:'switch_php72' 	;0	>>1514	<<1510
	1513 579   JMPNZ/44                  ?0        #688                 ?1533               	;0	>>1533
	1514 580   CASE/48                   #688=     $687                 1147:'switch_php74' 	;0	>>1516	<<1512
	1515 580   JMPNZ/44                  ?0        #688                 ?1533               	;0	>>1533
	1516 581   CASE/48                   #688=     $687                 1148:'switch_php80' 	;0	>>1518	<<1514
	1517 581   JMPNZ/44                  ?0        #688                 ?1533               	;0	>>1533
	1518 584   CASE/48                   #688=     $687                 1149:'set_services' 	;0	>>1520	<<1516
	1519 584   JMPNZ/44                  ?0        #688                 ?1538               	;0	>>1538
	1520 587   CASE/48                   #688=     $687                 1150:'set_port'     	;0	>>1522	<<1518
	1521 587   JMPNZ/44                  ?0        #688                 ?1543               	;0	>>1543
	1522 587   JMP/42                    ?0        ?1548                ?0                  	;0	>>1548	<<1520
	1523 573   ASSIGN_DIM/147            ?633      16?17                1151:'ramdisk'      	;0	<<1505,1507
	1524 573   OP_DATA/137               ?0        1152:false           ?0                  	;0
	1525 574   FREE/70                   ?0        $687                 ?45                 	;1
	1526 574   NOP/0                     ?0        ?0                   ?0                  	;1
	1527 574   GOTO/253                  ?0        ?1549                ?1153               	;0
	1528 577   ASSIGN_DIM/147            ?634      16?17                1154:'mag'          	;0	<<1509,1511
	1529 577   OP_DATA/137               ?0        1155:false           ?0                  	;0
	1530 578   FREE/70                   ?0        $687                 ?45                 	;1
	1531 578   NOP/0                     ?0        ?0                   ?0                  	;1
	1532 578   GOTO/253                  ?0        ?1549                ?1156               	;0
	1533 582   ASSIGN_DIM/147            ?635      16?17                1157:'php'          	;0	<<1513,1515,1517
	1534 582   OP_DATA/137               ?0        1158:false           ?0                  	;0
	1535 583   FREE/70                   ?0        $687                 ?45                 	;1
	1536 583   NOP/0                     ?0        ?0                   ?0                  	;1
	1537 583   GOTO/253                  ?0        ?1549                ?1159               	;0
	1538 585   ASSIGN_DIM/147            ?636      16?17                1160:'services'     	;0	<<1519
	1539 585   OP_DATA/137               ?0        1161:false           ?0                  	;0
	1540 586   FREE/70                   ?0        $687                 ?45                 	;1
	1541 586   NOP/0                     ?0        ?0                   ?0                  	;1
	1542 586   GOTO/253                  ?0        ?1549                ?1162               	;0
	1543 588   ASSIGN_DIM/147            ?637      16?17                1163:'ports'        	;0	<<1521
	1544 588   OP_DATA/137               ?0        1164:false           ?0                  	;0
	1545 589   FREE/70                   ?0        $687                 ?45                 	;1
	1546 589   NOP/0                     ?0        ?0                   ?0                  	;1
	1547 589   GOTO/253                  ?0        ?1549                ?1165               	;0
	1548 589   FREE/70                   ?0        $687                 ?0                  	;0	<<1522
	1549 593   JMP/42                    ?0        ?1495                ?0                  	;0	>>1495
	1550 593   FE_FREE/127               ?0        $683                 ?0                  	;0	<<1494
	1551 596   FETCH_DIM_R/81            $694=     16?17                1166:'mag'          	;0
	1552 596   BOOL_NOT/13               #695=     $694                 ?0                  	;0
	1553 596   JMPZ/43                   ?0        #695                 ?1555               	;0	>>1555
	1554 597   GOTO/253                  ?0        ?1911                ?1167               	;0
	1555 599   FETCH_STATIC_PROP_R/173   $696=     1168:'rSettings'     1169:'XUI'          	;0	<<1553
	1556 599   FETCH_DIM_R/81            $697=     $696                 1171:'mag_legacy_redirect'	;0
	1557 599   JMPZ/43                   ?0        $697                 ?1559               	;0	>>1559
	1558 600   GOTO/253                  ?0        ?1446                ?1172               	;0
	1559 602   GOTO/253                  ?0        ?1429                ?1173               	;0	<<1557
	1560 604   ASSIGN/38                 $698=     16?46                1174:0              	;0
	1561 604   ASSIGN/38                 ?643      16?21                $698                	;0
	1562 605   INIT_FCALL_BY_NAME/59     ?0        ?0                   1175:'exec'         	;3
	1563 605   SEND_VAL_EX/116           ?80       1177:'ps -fp $(pgrep -u xui)' ?1                  	;0
	1564 605   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	1565 605   SEND_VAR_EX/66            ?112      16?47                ?3                  	;0
	1566 605   DO_FCALL_BY_NAME/131      ?644      ?0                   ?0                  	;0
	1567 606   FE_RESET_R/77             $701=     16?26                ?1607               	;0
	1568 606   FE_FETCH_R/78             ?0        $701                 16?48               	;1607	>>1607	<<1606
	1569 607   INIT_FCALL_BY_NAME/59     ?0        ?0                   1178:'explode'      	;2
	1570 607   SEND_VAL_EX/116           ?80       1180:' '             ?1                  	;0
	1571 607   INIT_FCALL_BY_NAME/59     ?0        ?0                   1181:'preg_replace' 	;3
	1572 607   SEND_VAL_EX/116           ?80       1183:'!\\s+!'        ?1                  	;0
	1573 607   SEND_VAL_EX/116           ?96       1184:' '             ?2                  	;0
	1574 607   INIT_FCALL_BY_NAME/59     ?0        ?0                   1185:'trim'         	;1
	1575 607   SEND_VAR_EX/66            ?80       16?48                ?1                  	;0
	1576 607   DO_FCALL_BY_NAME/131      $702=     ?0                   ?0                  	;0
	1577 607   SEND_VAR_NO_REF_EX/50     ?112      $702                 ?3                  	;0
	1578 607   DO_FCALL_BY_NAME/131      $703=     ?0                   ?0                  	;0
	1579 607   SEND_VAR_NO_REF_EX/50     ?96       $703                 ?2                  	;0
	1580 607   DO_FCALL_BY_NAME/131      $704=     ?0                   ?0                  	;0
	1581 607   ASSIGN/38                 ?649      16?20                $704                	;0
	1582 608   FETCH_DIM_R/81            $706=     16?20                1187:8              	;0
	1583 608   IS_EQUAL/17               #707=     $706                 1188:'php-fpm:'     	;0
	1584 608   JMPZ_EX/46                #707=     #707                 ?1588               	;0	>>1588
	1585 608   FETCH_DIM_R/81            $708=     16?20                1189:9              	;0
	1586 608   IS_EQUAL/17               #709=     $708                 1190:'master'       	;0
	1587 608   BOOL/52                   #707=     #709                 ?0                  	;0
	1588 608   BOOL_NOT/13               #710=     #707                 ?0                  	;0	<<1584
	1589 608   JMPZ/43                   ?0        #710                 ?1592               	;0	>>1592
	1590 609   NOP/0                     ?0        ?0                   ?0                  	;1
	1591 609   GOTO/253                  ?0        ?1594                ?1191               	;0
	1592 611   POST_INC/36               #711=     16?21                ?0                  	;0	<<1589
	1593 611   FREE/70                   ?0        #711                 ?0                  	;0
	1594 613   FETCH_DIM_R/81            $712=     16?20                1192:8              	;0
	1595 613   IS_EQUAL/17               #713=     $712                 1193:'nginx:'       	;0
	1596 613   JMPZ_EX/46                #713=     #713                 ?1600               	;0	>>1600
	1597 613   FETCH_DIM_R/81            $714=     16?20                1194:9              	;0
	1598 613   IS_EQUAL/17               #715=     $714                 1195:'master'       	;0
	1599 613   BOOL/52                   #713=     #715                 ?0                  	;0
	1600 613   BOOL_NOT/13               #716=     #713                 ?0                  	;0	<<1596
	1601 613   JMPZ/43                   ?0        #716                 ?1604               	;0	>>1604
	1602 614   NOP/0                     ?0        ?0                   ?0                  	;1
	1603 614   GOTO/253                  ?0        ?1606                ?1196               	;0
	1604 616   POST_INC/36               #717=     16?46                ?0                  	;0	<<1601
	1605 616   FREE/70                   ?0        #717                 ?0                  	;0
	1606 618   JMP/42                    ?0        ?1568                ?0                  	;0	>>1568
	1607 618   FE_FREE/127               ?0        $701                 ?0                  	;0	<<1567
	1608 621   IS_SMALLER/19             #718=     1197:0               16?46               	;0
	1609 621   BOOL_NOT/13               #719=     #718                 ?0                  	;0
	1610 621   JMPZ/43                   ?0        #719                 ?1612               	;0	>>1612
	1611 622   GOTO/253                  ?0        ?1317                ?1198               	;0
	1612 624   GOTO/253                  ?0        ?259                 ?1199               	;0	<<1610
	1613 626   BIND_GLOBAL/168           ?0        16?16                1200:'b62d6460eb33ea07'	;0	<<0
	1614 626   BIND_GLOBAL/168           ?0        16?22                1201:'b19d07dcd248e701'	;0
	1615 627   INIT_STATIC_METHOD_CALL/113 ?0        1205:'XUI'           1207:'F76008F8DFe1898c'	;1
	1616 627   SEND_VAL_EX/116           ?80       1209:true            ?1                  	;0
	1617 627   DO_FCALL/60               $721=     ?0                   ?0                  	;0
	1618 627   FETCH_STATIC_PROP_W/174   $720=     1202:'rServers'      1203:'XUI'          	;0
	1619 627   ASSIGN/38                 ?666      $720                 $721                	;0
	1620 628   INIT_METHOD_CALL/112      ?0        16?16                1210:'query'        	;2
	1621 628   SEND_VAL_EX/116           ?80       1212:'SELECT `signal_id` FROM `signals` WHERE `server_id` = ? AND `custom_data` = \'{"action":"flush"}\' AND `cache` = 0;' ?1                  	;0
	1622 628   FETCH_CONSTANT/99         #723=     ?0                   1213:'SERVER_ID'    	;16
	1623 628   SEND_VAL_EX/116           ?96       #723                 ?2                  	;0
	1624 628   DO_FCALL/60               ?668      ?0                   ?0                  	;0
	1625 629   INIT_METHOD_CALL/112      ?0        16?16                1216:'num_rows'     	;0
	1626 629   DO_FCALL/60               $725=     ?0                   ?0                  	;0
	1627 629   IS_SMALLER/19             #726=     1218:0               $725                	;0
	1628 629   JMPZ/43                   ?0        #726                 ?1630               	;0	>>1630
	1629 630   GOTO/253                  ?0        ?1648                ?1219               	;0
	1630 632   INIT_FCALL_BY_NAME/59     ?0        ?0                   1220:'DC088f5BeC67cE39'	;0	<<1628
	1631 632   DO_FCALL_BY_NAME/131      $727=     ?0                   ?0                  	;0
	1632 632   ASSIGN/38                 ?672      16?3                 $727                	;0
	1633 633   GOTO/253                  ?0        ?237                 ?1222               	;0
	1634 635   IS_NOT_EQUAL/18           #729=     16?49                16?12               	;0
	1635 635   BOOL_NOT/13               #730=     #729                 ?0                  	;0
	1636 635   JMPZ/43                   ?0        #730                 ?1638               	;0	>>1638
	1637 636   GOTO/253                  ?0        ?1646                ?1223               	;0
	1638 638   ECHO/40                   ?0        1224:'Updating XUI IP List...
' ?0                  	;0	<<1636
	1639 639   INIT_FCALL_BY_NAME/59     ?0        ?0                   1225:'file_put_contents'	;2
	1640 639   FETCH_CONSTANT/99         #731=     ?0                   1227:'BIN_PATH'     	;16
	1641 639   CONCAT/8                  #732=     #731                 1230:'nginx/conf/realip_xui.conf'	;0
	1642 639   SEND_VAL_EX/116           ?80       #732                 ?1                  	;0
	1643 639   SEND_VAR_EX/66            ?96       16?49                ?2                  	;0
	1644 639   DO_FCALL_BY_NAME/131      ?677      ?0                   ?0                  	;0
	1645 640   ASSIGN/38                 ?678      16?2                 1231:true           	;0
	1646 642   GOTO/253                  ?0        ?113                 ?1232               	;0
	1647 644   GOTO/253                  ?0        ?1353                ?1233               	;0
	1648 646   ECHO/40                   ?0        1234:'Flushing IP\'s...' ?0                  	;0
	1649 647   INIT_FCALL_BY_NAME/59     ?0        ?0                   1235:'A0c5C8DE2109dD97'	;0
	1650 647   DO_FCALL_BY_NAME/131      ?679      ?0                   ?0                  	;0
	1651 648   INIT_FCALL_BY_NAME/59     ?0        ?0                   1237:'B33B2D13A0e185aA'	;0
	1652 648   DO_FCALL_BY_NAME/131      ?680      ?0                   ?0                  	;0
	1653 649   GOTO/253                  ?0        ?1340                ?1239               	;0
	1654 651   GOTO/253                  ?0        ?2114                ?1240               	;0
	1655 653   BOOL_NOT/13               #737=     16?0                 ?0                  	;0
	1656 653   JMPZ/43                   ?0        #737                 ?1658               	;0	>>1658
	1657 654   GOTO/253                  ?0        ?1666                ?1241               	;0
	1658 656   INIT_FCALL_BY_NAME/59     ?0        ?0                   1242:'array_unshift'	;2	<<1656
	1659 656   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	1660 656   INIT_FCALL_BY_NAME/59     ?0        ?0                   1244:'json_encode'  	;1
	1661 656   SEND_VAL_EX/116           ?80       1246:array (
  'action' => 'disable_ramdisk',
) ?1                  	;0
	1662 656   DO_FCALL_BY_NAME/131      $738=     ?0                   ?0                  	;0
	1663 656   INIT_ARRAY/71             #739=     $738                 1247:'custom_data'  	;6
	1664 656   SEND_VAL_EX/116           ?96       #739                 ?2                  	;0
	1665 656   DO_FCALL_BY_NAME/131      ?684      ?0                   ?0                  	;0
	1666 658   GOTO/253                  ?0        ?2114                ?1248               	;0
	1667 660   INIT_FCALL_BY_NAME/59     ?0        ?0                   1249:'shell_exec'   	;1
	1668 660   SEND_VAL_EX/116           ?80       1251:'sudo systemctl stop xuione' ?1                  	;0
	1669 660   DO_FCALL_BY_NAME/131      ?685      ?0                   ?0                  	;0
	1670 661   INIT_FCALL_BY_NAME/59     ?0        ?0                   1252:'shell_exec'   	;1
	1671 661   SEND_VAL_EX/116           ?80       1254:'sudo systemctl start xuione' ?1                  	;0
	1672 661   DO_FCALL_BY_NAME/131      ?686      ?0                   ?0                  	;0
	1673 662   EXIT/79                   ?0        ?0                   ?0                  	;0
	1674 664   INIT_FCALL_BY_NAME/59     ?0        ?0                   1255:'curl_close'   	;1
	1675 664   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	1676 664   DO_FCALL_BY_NAME/131      ?687      ?0                   ?0                  	;0
	1677 665   GOTO/253                  ?0        ?1869                ?1257               	;0
	1678 667   INIT_FCALL_BY_NAME/59     ?0        ?0                   1258:'strtoupper'   	;1
	1679 667   INIT_FCALL_BY_NAME/59     ?0        ?0                   1260:'substr'       	;3
	1680 667   INIT_FCALL_BY_NAME/59     ?0        ?0                   1262:'explode'      	;2
	1681 667   SEND_VAL_EX/116           ?80       1264:'
'             ?1                  	;0
	1682 667   INIT_FCALL_BY_NAME/59     ?0        ?0                   1265:'file_get_contents'	;1
	1683 667   SEND_VAL_EX/116           ?80       1267:'/etc/sysctl.conf' ?1                  	;0
	1684 667   DO_FCALL_BY_NAME/131      $744=     ?0                   ?0                  	;0
	1685 667   SEND_VAR_NO_REF_EX/50     ?96       $744                 ?2                  	;0
	1686 667   DO_FCALL_BY_NAME/131      $745=     ?0                   ?0                  	;0
	1687 667   SEPARATE/156              $745=     $745                 ?0                  	;0
	1688 667   FETCH_DIM_FUNC_ARG/93     $746=     $745                 1268:0              	;1
	1689 667   SEND_VAR_EX/66            ?80       $746                 ?1                  	;0
	1690 667   SEND_VAL_EX/116           ?96       1269:0               ?2                  	;0
	1691 667   SEND_VAL_EX/116           ?112      1270:9               ?3                  	;0
	1692 667   DO_FCALL_BY_NAME/131      $747=     ?0                   ?0                  	;0
	1693 667   SEND_VAR_NO_REF_EX/50     ?80       $747                 ?1                  	;0
	1694 667   DO_FCALL_BY_NAME/131      $748=     ?0                   ?0                  	;0
	1695 667   IS_NOT_EQUAL/18           #749=     $748                 1271:'# XUI.ONE'    	;0
	1696 667   BOOL_NOT/13               #750=     #749                 ?0                  	;0
	1697 667   JMPZ/43                   ?0        #750                 ?1699               	;0	>>1699
	1698 668   GOTO/253                  ?0        ?286                 ?1272               	;0
	1699 670   ECHO/40                   ?0        1273:'Sysctl missing! Writing it.
' ?0                  	;0	<<1697
	1700 671   INIT_FCALL_BY_NAME/59     ?0        ?0                   1274:'exec'         	;1
	1701 671   SEND_VAL_EX/116           ?80       1276:'sudo modprobe ip_conntrack' ?1                  	;0
	1702 671   DO_FCALL_BY_NAME/131      ?695      ?0                   ?0                  	;0
	1703 672   INIT_FCALL_BY_NAME/59     ?0        ?0                   1277:'file_put_contents'	;2
	1704 672   SEND_VAL_EX/116           ?80       1279:'/etc/sysctl.conf' ?1                  	;0
	1705 672   INIT_FCALL_BY_NAME/59     ?0        ?0                   1280:'implode'      	;2
	1706 672   FETCH_CONSTANT/99         #752=     ?0                   1282:'PHP_EOL'      	;16
	1707 672   SEND_VAL_EX/116           ?80       #752                 ?1                  	;0
	1708 672   SEND_VAL_EX/116           ?96       1285:array (
  0 => '# XUI.one',
  1 => '',
  2 => 'net.core.somaxconn = 655350',
  3 => 'net.ipv4.route.flush=1',
  4 => 'net.ipv4.tcp_no_metrics_save=1',
  5 => 'net.ipv4.tcp_moderate_rcvbuf = 1',
  6 => 'fs.file-max = 6815744',
  7 => 'fs.aio-max-nr = 6815744',
  8 => 'fs.nr_open = 6815744',
  9 => 'net.ipv4.ip_local_port_range = 1024 65000',
  10 => 'net.ipv4.tcp_sack = 1',
  11 => 'net.ipv4.tcp_rmem = 10000000 10000000 10000000',
  12 => 'net.ipv4.tcp_wmem = 10000000 10000000 10000000',
  13 => 'net.ipv4.tcp_mem = 10000000 10000000 10000000',
  14 => 'net.core.rmem_max = 524287',
  15 => 'net.core.wmem_max = 524287',
  16 => 'net.core.rmem_default = 524287',
  17 => 'net.core.wmem_default = 524287',
  18 => 'net.core.optmem_max = 524287',
  19 => 'net.core.netdev_max_backlog = 300000',
  20 => 'net.ipv4.tcp_max_syn_backlog = 300000',
  21 => 'net.netfilter.nf_conntrack_max=1215196608',
  22 => 'net.ipv4.tcp_window_scaling = 1',
  23 => 'vm.max_map_count = 655300',
  24 => 'net.ipv4.tcp_max_tw_buckets = 50000',
  25 => 'net.ipv6.conf.all.disable_ipv6 = 1',
  26 => 'net.ipv6.conf.default.disable_ipv6 = 1',
  27 => 'net.ipv6.conf.lo.disable_ipv6 = 1',
  28 => 'kernel.shmmax=134217728',
  29 => 'kernel.shmall=134217728',
  30 => 'vm.overcommit_memory = 1',
  31 => 'net.ipv4.tcp_tw_reuse=1',
) ?2                  	;0
	1709 672   DO_FCALL_BY_NAME/131      $753=     ?0                   ?0                  	;0
	1710 672   SEND_VAR_NO_REF_EX/50     ?96       $753                 ?2                  	;0
	1711 672   DO_FCALL_BY_NAME/131      ?698      ?0                   ?0                  	;0
	1712 673   INIT_FCALL_BY_NAME/59     ?0        ?0                   1286:'exec'         	;1
	1713 673   SEND_VAL_EX/116           ?80       1288:'sudo sysctl -p > /dev/null' ?1                  	;0
	1714 673   DO_FCALL_BY_NAME/131      ?699      ?0                   ?0                  	;0
	1715 674   GOTO/253                  ?0        ?286                 ?1289               	;0
	1716 678   FETCH_CONSTANT/99         #757=     ?0                   1293:'SERVER_ID'    	;16
	1717 678   FETCH_STATIC_PROP_R/173   $756=     1290:'rServers'      1291:'XUI'          	;0
	1718 678   FETCH_DIM_R/81            $758=     $756                 #757                	;0
	1719 678   FETCH_DIM_R/81            $759=     $758                 1296:'limit_requests'	;0
	1720 678   IS_SMALLER/19             #760=     1297:0               $759                	;0
	1721 678   JMPZ/43                   ?0        #760                 ?1723               	;0	>>1723
	1722 679   GOTO/253                  ?0        ?1793                ?1298               	;0
	1723 681   ASSIGN/38                 ?705      16?38                1299:''             	;0	<<1721
	1724 682   GOTO/253                  ?0        ?1803                ?1300               	;0
	1725 683   GOTO/253                  ?0        ?1793                ?1301               	;0
	1726 685   INIT_FCALL_BY_NAME/59     ?0        ?0                   1302:'trim'         	;1
	1727 685   INIT_FCALL_BY_NAME/59     ?0        ?0                   1304:'implode'      	;2
	1728 685   SEND_VAL_EX/116           ?80       1306:' '             ?1                  	;0
	1729 685   FETCH_DIM_FUNC_ARG/93     $762=     16?36                1307:'http'         	;2
	1730 685   SEND_VAR_EX/66            ?96       $762                 ?2                  	;0
	1731 685   DO_FCALL_BY_NAME/131      $763=     ?0                   ?0                  	;0
	1732 685   SEND_VAR_NO_REF_EX/50     ?80       $763                 ?1                  	;0
	1733 685   DO_FCALL_BY_NAME/131      $764=     ?0                   ?0                  	;0
	1734 685   INIT_FCALL_BY_NAME/59     ?0        ?0                   1308:'trim'         	;1
	1735 685   INIT_FCALL_BY_NAME/59     ?0        ?0                   1310:'file_get_contents'	;1
	1736 685   FETCH_CONSTANT/99         #765=     ?0                   1312:'XUI_HOME'     	;16
	1737 685   CONCAT/8                  #766=     #765                 1315:'bin/nginx/conf/ports/http.conf'	;0
	1738 685   SEND_VAL_EX/116           ?80       #766                 ?1                  	;0
	1739 685   DO_FCALL_BY_NAME/131      $767=     ?0                   ?0                  	;0
	1740 685   SEND_VAR_NO_REF_EX/50     ?80       $767                 ?1                  	;0
	1741 685   DO_FCALL_BY_NAME/131      $768=     ?0                   ?0                  	;0
	1742 685   IS_NOT_EQUAL/18           #769=     $764                 $768                	;0
	1743 685   BOOL_NOT/13               #770=     #769                 ?0                  	;0
	1744 685   JMPZ/43                   ?0        #770                 ?1746               	;0	>>1746
	1745 686   GOTO/253                  ?0        ?1759                ?1316               	;0
	1746 688   INIT_FCALL_BY_NAME/59     ?0        ?0                   1317:'array_unshift'	;2	<<1744
	1747 688   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	1748 688   INIT_FCALL_BY_NAME/59     ?0        ?0                   1319:'json_encode'  	;1
	1749 688   INIT_ARRAY/71             #771=     1321:'set_port'      1322:'action'       	;18
	1750 688   ADD_ARRAY_ELEMENT/72      #771=     1323:0               1324:'type'         	;0
	1751 688   FETCH_DIM_R/81            $772=     16?50                1325:'http'         	;0
	1752 688   ADD_ARRAY_ELEMENT/72      #771=     $772                 1326:'ports'        	;0
	1753 688   ADD_ARRAY_ELEMENT/72      #771=     1327:true            1328:'reload'       	;0
	1754 688   SEND_VAL_EX/116           ?80       #771                 ?1                  	;0
	1755 688   DO_FCALL_BY_NAME/131      $773=     ?0                   ?0                  	;0
	1756 688   INIT_ARRAY/71             #774=     $773                 1329:'custom_data'  	;6
	1757 688   SEND_VAL_EX/116           ?96       #774                 ?2                  	;0
	1758 688   DO_FCALL_BY_NAME/131      ?719      ?0                   ?0                  	;0
	1759 690   INIT_FCALL_BY_NAME/59     ?0        ?0                   1330:'trim'         	;1
	1760 690   INIT_FCALL_BY_NAME/59     ?0        ?0                   1332:'implode'      	;2
	1761 690   SEND_VAL_EX/116           ?80       1334:' '             ?1                  	;0
	1762 690   FETCH_DIM_FUNC_ARG/93     $776=     16?36                1335:'https'        	;2
	1763 690   SEND_VAR_EX/66            ?96       $776                 ?2                  	;0
	1764 690   DO_FCALL_BY_NAME/131      $777=     ?0                   ?0                  	;0
	1765 690   SEND_VAR_NO_REF_EX/50     ?80       $777                 ?1                  	;0
	1766 690   DO_FCALL_BY_NAME/131      $778=     ?0                   ?0                  	;0
	1767 690   INIT_FCALL_BY_NAME/59     ?0        ?0                   1336:'trim'         	;1
	1768 690   INIT_FCALL_BY_NAME/59     ?0        ?0                   1338:'file_get_contents'	;1
	1769 690   FETCH_CONSTANT/99         #779=     ?0                   1340:'XUI_HOME'     	;16
	1770 690   CONCAT/8                  #780=     #779                 1343:'bin/nginx/conf/ports/https.conf'	;0
	1771 690   SEND_VAL_EX/116           ?80       #780                 ?1                  	;0
	1772 690   DO_FCALL_BY_NAME/131      $781=     ?0                   ?0                  	;0
	1773 690   SEND_VAR_NO_REF_EX/50     ?80       $781                 ?1                  	;0
	1774 690   DO_FCALL_BY_NAME/131      $782=     ?0                   ?0                  	;0
	1775 690   IS_NOT_EQUAL/18           #783=     $778                 $782                	;0
	1776 690   BOOL_NOT/13               #784=     #783                 ?0                  	;0
	1777 690   JMPZ/43                   ?0        #784                 ?1779               	;0	>>1779
	1778 691   GOTO/253                  ?0        ?195                 ?1344               	;0
	1779 693   INIT_FCALL_BY_NAME/59     ?0        ?0                   1345:'array_unshift'	;2	<<1777
	1780 693   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	1781 693   INIT_FCALL_BY_NAME/59     ?0        ?0                   1347:'json_encode'  	;1
	1782 693   INIT_ARRAY/71             #785=     1349:'set_port'      1350:'action'       	;18
	1783 693   ADD_ARRAY_ELEMENT/72      #785=     1351:1               1352:'type'         	;0
	1784 693   FETCH_DIM_R/81            $786=     16?50                1353:'https'        	;0
	1785 693   ADD_ARRAY_ELEMENT/72      #785=     $786                 1354:'ports'        	;0
	1786 693   ADD_ARRAY_ELEMENT/72      #785=     1355:true            1356:'reload'       	;0
	1787 693   SEND_VAL_EX/116           ?80       #785                 ?1                  	;0
	1788 693   DO_FCALL_BY_NAME/131      $787=     ?0                   ?0                  	;0
	1789 693   INIT_ARRAY/71             #788=     $787                 1357:'custom_data'  	;6
	1790 693   SEND_VAL_EX/116           ?96       #788                 ?2                  	;0
	1791 693   DO_FCALL_BY_NAME/131      ?733      ?0                   ?0                  	;0
	1792 694   GOTO/253                  ?0        ?195                 ?1358               	;0
	1793 697   INIT_FCALL_BY_NAME/59     ?0        ?0                   1359:'intval'       	;1
	1794 697   FETCH_CONSTANT/99         #791=     ?0                   1364:'SERVER_ID'    	;16
	1795 697   FETCH_STATIC_PROP_FUNC_ARG/177 $790=     1361:'rServers'      1362:'XUI'          	;1
	1796 697   FETCH_DIM_FUNC_ARG/93     $792=     $790                 #791                	;1
	1797 697   FETCH_DIM_FUNC_ARG/93     $793=     $792                 1367:'limit_requests'	;1
	1798 697   SEND_VAR_EX/66            ?80       $793                 ?1                  	;0
	1799 697   DO_FCALL_BY_NAME/131      $794=     ?0                   ?0                  	;0
	1800 697   CONCAT/8                  #795=     1368:'limit_req_zone global zone=two:10m rate=' $794                	;0
	1801 697   CONCAT/8                  #796=     #795                 1369:'r/s;'         	;0
	1802 697   ASSIGN/38                 ?741      16?38                #796                	;0
	1803 699   INIT_FCALL_BY_NAME/59     ?0        ?0                   1370:'trim'         	;1
	1804 699   INIT_FCALL_BY_NAME/59     ?0        ?0                   1372:'file_get_contents'	;1
	1805 699   FETCH_CONSTANT/99         #798=     ?0                   1374:'BIN_PATH'     	;16
	1806 699   CONCAT/8                  #799=     #798                 1377:'nginx/conf/limit.conf'	;0
	1807 699   SEND_VAL_EX/116           ?80       #799                 ?1                  	;0
	1808 699   DO_FCALL_BY_NAME/131      $800=     ?0                   ?0                  	;0
	1809 699   SEND_VAR_NO_REF_EX/50     ?80       $800                 ?1                  	;0
	1810 699   DO_FCALL_BY_NAME/131      $801=     ?0                   ?0                  	;0
	1811 699   JMP_SET/152               #802=     $801                 ?1813               	;0
	1812 699   QM_ASSIGN/22              #802=     1378:''              ?0                  	;0
	1813 699   ASSIGN/38                 ?747      16?42                #802                	;0
	1814 700   IS_NOT_EQUAL/18           #804=     16?38                16?42               	;0
	1815 700   BOOL_NOT/13               #805=     #804                 ?0                  	;0
	1816 700   JMPZ/43                   ?0        #805                 ?1818               	;0	>>1818
	1817 701   GOTO/253                  ?0        ?1261                ?1379               	;0
	1818 703   GOTO/253                  ?0        ?1253                ?1380               	;0	<<1816
	1819 705   INIT_METHOD_CALL/112      ?0        16?16                1381:'query'        	;1
	1820 705   SEND_VAL_EX/116           ?80       1383:'SELECT * FROM `crontab` WHERE `enabled` = 1;' ?1                  	;0
	1821 705   DO_FCALL/60               ?750      ?0                   ?0                  	;0
	1822 706   INIT_METHOD_CALL/112      ?0        16?16                1384:'get_rows'     	;0
	1823 706   DO_FCALL/60               $807=     ?0                   ?0                  	;0
	1824 706   FE_RESET_R/77             $808=     $807                 ?1855               	;0
	1825 706   FE_FETCH_R/78             ?0        $808                 16?23               	;1855	>>1855	<<1854
	1826 707   FETCH_CONSTANT/99         #809=     ?0                   1386:'CRON_PATH'    	;16
	1827 707   FETCH_DIM_R/81            $810=     16?23                1389:'filename'     	;0
	1828 707   CONCAT/8                  #811=     #809                 $810                	;0
	1829 707   ASSIGN/38                 ?756      16?51                #811                	;0
	1830 708   INIT_FCALL_BY_NAME/59     ?0        ?0                   1390:'pathinfo'     	;2
	1831 708   SEND_VAR_EX/66            ?80       16?51                ?1                  	;0
	1832 708   FETCH_CONSTANT/99         #813=     ?0                   1392:'PATHINFO_EXTENSION'	;16
	1833 708   SEND_VAL_EX/116           ?96       #813                 ?2                  	;0
	1834 708   DO_FCALL_BY_NAME/131      $814=     ?0                   ?0                  	;0
	1835 708   IS_EQUAL/17               #815=     $814                 1395:'php'          	;0
	1836 708   JMPZ_EX/46                #815=     #815                 ?1841               	;0	>>1841
	1837 708   INIT_FCALL_BY_NAME/59     ?0        ?0                   1396:'file_exists'  	;1
	1838 708   SEND_VAR_EX/66            ?80       16?51                ?1                  	;0
	1839 708   DO_FCALL_BY_NAME/131      $816=     ?0                   ?0                  	;0
	1840 708   BOOL/52                   #815=     $816                 ?0                  	;0
	1841 708   BOOL_NOT/13               #817=     #815                 ?0                  	;0	<<1836
	1842 708   JMPZ/43                   ?0        #817                 ?1845               	;0	>>1845
	1843 709   NOP/0                     ?0        ?0                   ?0                  	;1
	1844 709   GOTO/253                  ?0        ?1854                ?1398               	;0
	1845 711   FETCH_DIM_R/81            $819=     16?23                1399:'time'         	;0	<<1842
	1846 711   CONCAT/8                  #820=     $819                 1400:' '            	;0
	1847 711   FETCH_CONSTANT/99         #821=     ?0                   1401:'PHP_BIN'      	;16
	1848 711   CONCAT/8                  #822=     #820                 #821                	;0
	1849 711   CONCAT/8                  #823=     #822                 1404:' '            	;0
	1850 711   CONCAT/8                  #824=     #823                 16?51               	;0
	1851 711   CONCAT/8                  #825=     #824                 1405:' # XUI'       	;0
	1852 711   ASSIGN_DIM/147            ?762      16?52                ?4397406            	;0
	1853 711   OP_DATA/137               ?0        #825                 ?0                  	;0
	1854 713   JMP/42                    ?0        ?1825                ?0                  	;0	>>1825
	1855 713   FE_FREE/127               ?0        $808                 ?0                  	;0	<<1824
	1856 716   INIT_FCALL_BY_NAME/59     ?0        ?0                   1406:'trim'         	;1
	1857 716   INIT_FCALL_BY_NAME/59     ?0        ?0                   1408:'implode'      	;2
	1858 716   SEND_VAL_EX/116           ?80       1410:'
'             ?1                  	;0
	1859 716   SEND_VAR_EX/66            ?96       16?52                ?2                  	;0
	1860 716   DO_FCALL_BY_NAME/131      $826=     ?0                   ?0                  	;0
	1861 716   SEND_VAR_NO_REF_EX/50     ?80       $826                 ?1                  	;0
	1862 716   DO_FCALL_BY_NAME/131      $827=     ?0                   ?0                  	;0
	1863 716   ASSIGN/38                 ?772      16?53                $827                	;0
	1864 717   IS_NOT_EQUAL/18           #829=     16?54                16?53               	;0
	1865 717   BOOL_NOT/13               #830=     #829                 ?0                  	;0
	1866 717   JMPZ/43                   ?0        #830                 ?1868               	;0	>>1868
	1867 718   GOTO/253                  ?0        ?1307                ?1411               	;0
	1868 720   GOTO/253                  ?0        ?1301                ?1412               	;0	<<1866
	1869 723   INIT_METHOD_CALL/112      ?0        16?16                1413:'query'        	;2
	1870 723   SEND_VAL_EX/116           ?80       1415:'SELECT `signal_id`, `custom_data` FROM `signals` WHERE `server_id` = ? AND `custom_data` <> \'\' AND `cache` = 0 ORDER BY signal_id ASC;' ?1                  	;0
	1871 723   FETCH_CONSTANT/99         #831=     ?0                   1416:'SERVER_ID'    	;16
	1872 723   SEND_VAL_EX/116           ?96       #831                 ?2                  	;0
	1873 723   DO_FCALL/60               $832=     ?0                   ?0                  	;0
	1874 723   JMPZ/43                   ?0        $832                 ?1876               	;0	>>1876
	1875 724   GOTO/253                  ?0        ?1877                ?1419               	;0
	1876 726   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1874
	1877 728   INIT_METHOD_CALL/112      ?0        16?16                1420:'get_rows'     	;0
	1878 728   DO_FCALL/60               $833=     ?0                   ?0                  	;0
	1879 728   ASSIGN/38                 ?778      16?1                 $833                	;0
	1880 729   GOTO/253                  ?0        ?1493                ?1422               	;0
	1881 732   BOOL_NOT/13               #835=     16?2                 ?0                  	;0
	1882 732   JMPZ/43                   ?0        #835                 ?1884               	;0	>>1884
	1883 733   GOTO/253                  ?0        ?1890                ?1423               	;0
	1884 735   INIT_FCALL_BY_NAME/59     ?0        ?0                   1424:'shell_exec'   	;1	<<1882
	1885 735   FETCH_CONSTANT/99         #836=     ?0                   1426:'BIN_PATH'     	;16
	1886 735   CONCAT/8                  #837=     1429:'sudo '         #836                	;0
	1887 735   CONCAT/8                  #838=     #837                 1430:'nginx/sbin/nginx -s reload'	;0
	1888 735   SEND_VAL_EX/116           ?80       #838                 ?1                  	;0
	1889 735   DO_FCALL_BY_NAME/131      ?783      ?0                   ?0                  	;0
	1890 737   FETCH_STATIC_PROP_R/173   $840=     1431:'rSettings'     1432:'XUI'          	;0
	1891 737   FETCH_DIM_R/81            $841=     $840                 1434:'restart_php_fpm'	;0
	1892 737   BOOL_NOT/13               #842=     $841                 ?0                  	;0
	1893 737   JMPZ/43                   ?0        #842                 ?1895               	;0	>>1895
	1894 738   GOTO/253                  ?0        ?1869                ?1435               	;0
	1895 740   GOTO/253                  ?0        ?1560                ?1436               	;0	<<1893
	1896 742   INIT_FCALL_BY_NAME/59     ?0        ?0                   1437:'file_exists'  	;1
	1897 742   FETCH_CONSTANT/99         #843=     ?0                   1439:'XUI_HOME'     	;16
	1898 742   CONCAT/8                  #844=     #843                 1442:'www/c'        	;0
	1899 742   SEND_VAL_EX/116           ?80       #844                 ?1                  	;0
	1900 742   DO_FCALL_BY_NAME/131      $845=     ?0                   ?0                  	;0
	1901 742   JMPZ/43                   ?0        $845                 ?1903               	;0	>>1903
	1902 743   GOTO/253                  ?0        ?1911                ?1443               	;0
	1903 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   1444:'array_unshift'	;2	<<1901
	1904 745   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	1905 745   INIT_FCALL_BY_NAME/59     ?0        ?0                   1446:'json_encode'  	;1
	1906 745   SEND_VAL_EX/116           ?80       1448:array (
  'action' => 'enable_ministra',
) ?1                  	;0
	1907 745   DO_FCALL_BY_NAME/131      $846=     ?0                   ?0                  	;0
	1908 745   INIT_ARRAY/71             #847=     $846                 1449:'custom_data'  	;6
	1909 745   SEND_VAL_EX/116           ?96       #847                 ?2                  	;0
	1910 745   DO_FCALL_BY_NAME/131      ?792      ?0                   ?0                  	;0
	1911 749   GOTO/253                  ?0        ?1458                ?1450               	;0
	1912 751   ASSIGN/38                 ?793      16?49                1451:array (
)      	;0
	1913 752   FE_RESET_R/77             $850=     16?41                ?1944               	;0
	1914 752   FE_FETCH_R/78             ?0        $850                 16?5                	;1944	>>1944	<<1943
	1915 753   ISSET_ISEMPTY_CV/197      #851=     16?5                 ?0                  	;16777216
	1916 753   BOOL_NOT/13               #852=     #851                 ?0                  	;0
	1917 753   JMPZ_EX/46                #852=     #852                 ?1924               	;0	>>1924
	1918 753   INIT_FCALL_BY_NAME/59     ?0        ?0                   1452:'filter_var'   	;2
	1919 753   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	1920 753   FETCH_CONSTANT/99         #853=     ?0                   1454:'FILTER_VALIDATE_IP'	;16
	1921 753   SEND_VAL_EX/116           ?96       #853                 ?2                  	;0
	1922 753   DO_FCALL_BY_NAME/131      $854=     ?0                   ?0                  	;0
	1923 753   BOOL/52                   #852=     $854                 ?0                  	;0
	1924 753   JMPZ_EX/46                #852=     #852                 ?1934               	;0	>>1934	<<1917
	1925 753   INIT_FCALL_BY_NAME/59     ?0        ?0                   1457:'in_array'     	;2
	1926 753   ROPE_INIT/54              #856=     ?0                   1459:'set_real_ip_from '	;3
	1927 753   ROPE_ADD/55               #856=     #856                 16?5                	;1
	1928 753   ROPE_END/56               #855=     #856                 1460:';'            	;2
	1929 753   SEND_VAL_EX/116           ?80       #855                 ?1                  	;0
	1930 753   SEND_VAR_EX/66            ?96       16?49                ?2                  	;0
	1931 753   DO_FCALL_BY_NAME/131      $858=     ?0                   ?0                  	;0
	1932 753   BOOL_NOT/13               #859=     $858                 ?0                  	;0
	1933 753   BOOL/52                   #852=     #859                 ?0                  	;0
	1934 753   BOOL_NOT/13               #860=     #852                 ?0                  	;0	<<1924
	1935 753   JMPZ/43                   ?0        #860                 ?1938               	;0	>>1938
	1936 754   NOP/0                     ?0        ?0                   ?0                  	;1
	1937 754   GOTO/253                  ?0        ?1943                ?1461               	;0
	1938 756   ROPE_INIT/54              #863=     ?0                   1462:'set_real_ip_from '	;3	<<1935
	1939 756   ROPE_ADD/55               #863=     #863                 16?5                	;1
	1940 756   ROPE_END/56               #862=     #863                 1463:';'            	;2
	1941 756   ASSIGN_DIM/147            ?805      16?49                ?4397406            	;0
	1942 756   OP_DATA/137               ?0        #862                 ?0                  	;0
	1943 758   JMP/42                    ?0        ?1914                ?0                  	;0	>>1914
	1944 758   FE_FREE/127               ?0        $850                 ?0                  	;0	<<1913
	1945 761   INIT_FCALL_BY_NAME/59     ?0        ?0                   1464:'trim'         	;1
	1946 761   INIT_FCALL_BY_NAME/59     ?0        ?0                   1466:'implode'      	;2
	1947 761   SEND_VAL_EX/116           ?80       1468:'
'             ?1                  	;0
	1948 761   INIT_FCALL_BY_NAME/59     ?0        ?0                   1469:'array_unique' 	;1
	1949 761   SEND_VAR_EX/66            ?80       16?49                ?1                  	;0
	1950 761   DO_FCALL_BY_NAME/131      $865=     ?0                   ?0                  	;0
	1951 761   SEND_VAR_NO_REF_EX/50     ?96       $865                 ?2                  	;0
	1952 761   DO_FCALL_BY_NAME/131      $866=     ?0                   ?0                  	;0
	1953 761   SEND_VAR_NO_REF_EX/50     ?80       $866                 ?1                  	;0
	1954 761   DO_FCALL_BY_NAME/131      $867=     ?0                   ?0                  	;0
	1955 761   ASSIGN/38                 ?812      16?49                $867                	;0
	1956 762   INIT_FCALL_BY_NAME/59     ?0        ?0                   1471:'trim'         	;1
	1957 762   INIT_FCALL_BY_NAME/59     ?0        ?0                   1473:'file_get_contents'	;1
	1958 762   FETCH_CONSTANT/99         #869=     ?0                   1475:'BIN_PATH'     	;16
	1959 762   CONCAT/8                  #870=     #869                 1478:'nginx/conf/realip_xui.conf'	;0
	1960 762   SEND_VAL_EX/116           ?80       #870                 ?1                  	;0
	1961 762   DO_FCALL_BY_NAME/131      $871=     ?0                   ?0                  	;0
	1962 762   SEND_VAR_NO_REF_EX/50     ?80       $871                 ?1                  	;0
	1963 762   DO_FCALL_BY_NAME/131      $872=     ?0                   ?0                  	;0
	1964 762   JMP_SET/152               #873=     $872                 ?1966               	;0
	1965 762   QM_ASSIGN/22              #873=     1479:''              ?0                  	;0
	1966 762   ASSIGN/38                 ?818      16?12                #873                	;0
	1967 763   GOTO/253                  ?0        ?1634                ?1480               	;0
	1968 766   JMPZ_EX/46                #875=     16?45                ?1971               	;0	>>1971
	1969 766   IS_NOT_EQUAL/18           #876=     16?45                16?44               	;0
	1970 766   BOOL/52                   #875=     #876                 ?0                  	;0
	1971 766   BOOL_NOT/13               #877=     #875                 ?0                  	;0	<<1968
	1972 766   JMPZ/43                   ?0        #877                 ?1974               	;0	>>1974
	1973 767   GOTO/253                  ?0        ?1988                ?1481               	;0
	1974 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   1482:'array_unshift'	;2	<<1972
	1975 769   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	1976 769   INIT_FCALL_BY_NAME/59     ?0        ?0                   1484:'json_encode'  	;1
	1977 769   FETCH_CONSTANT/99         #879=     ?0                   1489:'SERVER_ID'    	;16
	1978 769   FETCH_STATIC_PROP_R/173   $878=     1486:'rServers'      1487:'XUI'          	;0
	1979 769   FETCH_DIM_R/81            $880=     $878                 #879                	;0
	1980 769   FETCH_DIM_R/81            $881=     $880                 1492:'php_version'  	;0
	1981 769   CONCAT/8                  #882=     1493:'switch_php'    $881                	;0
	1982 769   INIT_ARRAY/71             #883=     #882                 1494:'action'       	;6
	1983 769   SEND_VAL_EX/116           ?80       #883                 ?1                  	;0
	1984 769   DO_FCALL_BY_NAME/131      $884=     ?0                   ?0                  	;0
	1985 769   INIT_ARRAY/71             #885=     $884                 1495:'custom_data'  	;6
	1986 769   SEND_VAL_EX/116           ?96       #885                 ?2                  	;0
	1987 769   DO_FCALL_BY_NAME/131      ?830      ?0                   ?0                  	;0
	1988 772   GOTO/253                  ?0        ?1269                ?1496               	;0
	1989 775   INIT_FCALL_BY_NAME/59     ?0        ?0                   1497:'count'        	;1
	1990 775   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	1991 775   DO_FCALL_BY_NAME/131      $887=     ?0                   ?0                  	;0
	1992 775   IS_SMALLER/19             #888=     1499:0               $887                	;0
	1993 775   BOOL_NOT/13               #889=     #888                 ?0                  	;0
	1994 775   JMPZ/43                   ?0        #889                 ?1996               	;0	>>1996
	1995 776   GOTO/253                  ?0        ?2163                ?1500               	;0
	1996 778   ASSIGN/38                 ?834      16?22                1501:true           	;0	<<1994
	1997 779   FE_RESET_R/77             $891=     16?7                 ?2007               	;0
	1998 779   FE_FETCH_R/78             ?0        $891                 16?5                	;2007	>>2007	<<2006
	1999 780   ROPE_INIT/54              #893=     ?0                   1502:'Unblock IP: ' 	;3
	2000 780   ROPE_ADD/55               #893=     #893                 16?5                	;1
	2001 780   ROPE_END/56               #892=     #893                 1503:'
'            	;2
	2002 780   ECHO/40                   ?0        #892                 ?0                  	;0
	2003 781   INIT_FCALL_BY_NAME/59     ?0        ?0                   1504:'Bb574635b472ce89'	;1
	2004 781   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	2005 781   DO_FCALL_BY_NAME/131      ?839      ?0                   ?0                  	;0
	2006 782   JMP/42                    ?0        ?1998                ?0                  	;0	>>1998
	2007 782   FE_FREE/127               ?0        $891                 ?0                  	;0	<<1997
	2008 785   GOTO/253                  ?0        ?2163                ?1506               	;0
	2009 787   ASSIGN/38                 $896=     16?50                1507:array (
  'http' => 
  array (
  ),
  'https' => 
  array (
  ),
)	;0
	2010 787   ASSIGN/38                 ?841      16?36                $896                	;0
	2011 788   INIT_FCALL_BY_NAME/59     ?0        ?0                   1508:'array_merge'  	;2
	2012 788   INIT_FCALL_BY_NAME/59     ?0        ?0                   1510:'intval'       	;1
	2013 788   FETCH_CONSTANT/99         #899=     ?0                   1515:'SERVER_ID'    	;16
	2014 788   FETCH_STATIC_PROP_FUNC_ARG/177 $898=     1512:'rServers'      1513:'XUI'          	;1
	2015 788   FETCH_DIM_FUNC_ARG/93     $900=     $898                 #899                	;1
	2016 788   FETCH_DIM_FUNC_ARG/93     $901=     $900                 1518:'http_broadcast_port'	;1
	2017 788   SEND_VAR_EX/66            ?80       $901                 ?1                  	;0
	2018 788   DO_FCALL_BY_NAME/131      $902=     ?0                   ?0                  	;0
	2019 788   INIT_ARRAY/71             #903=     $902                 ?0                  	;4
	2020 788   SEND_VAL_EX/116           ?80       #903                 ?1                  	;0
	2021 788   INIT_FCALL_BY_NAME/59     ?0        ?0                   1519:'explode'      	;2
	2022 788   SEND_VAL_EX/116           ?80       1521:','             ?1                  	;0
	2023 788   FETCH_CONSTANT/99         #905=     ?0                   1525:'SERVER_ID'    	;16
	2024 788   FETCH_STATIC_PROP_FUNC_ARG/177 $904=     1522:'rServers'      1523:'XUI'          	;2
	2025 788   FETCH_DIM_FUNC_ARG/93     $906=     $904                 #905                	;2
	2026 788   FETCH_DIM_FUNC_ARG/93     $907=     $906                 1528:'http_ports_add'	;2
	2027 788   SEND_VAR_EX/66            ?96       $907                 ?2                  	;0
	2028 788   DO_FCALL_BY_NAME/131      $908=     ?0                   ?0                  	;0
	2029 788   SEND_VAR_NO_REF_EX/50     ?96       $908                 ?2                  	;0
	2030 788   DO_FCALL_BY_NAME/131      $909=     ?0                   ?0                  	;0
	2031 788   FE_RESET_R/77             $910=     $909                 ?2061               	;0
	2032 788   FE_FETCH_R/78             ?0        $910                 16?37               	;2061	>>2061	<<2060
	2033 789   INIT_FCALL_BY_NAME/59     ?0        ?0                   1529:'is_numeric'   	;1
	2034 789   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	2035 789   DO_FCALL_BY_NAME/131      $911=     ?0                   ?0                  	;0
	2036 789   JMPZ_EX/46                #912=     $911                 ?2039               	;0	>>2039
	2037 789   IS_SMALLER/19             #913=     1531:0               16?37               	;0
	2038 789   BOOL/52                   #912=     #913                 ?0                  	;0
	2039 789   JMPZ_EX/46                #912=     #912                 ?2042               	;0	>>2042	<<2036
	2040 789   IS_SMALLER_OR_EQUAL/20    #914=     16?37                1532:65535          	;0
	2041 789   BOOL/52                   #912=     #914                 ?0                  	;0
	2042 789   BOOL_NOT/13               #915=     #912                 ?0                  	;0	<<2039
	2043 789   JMPZ/43                   ?0        #915                 ?2046               	;0	>>2046
	2044 790   NOP/0                     ?0        ?0                   ?0                  	;1
	2045 790   GOTO/253                  ?0        ?2060                ?1533               	;0
	2046 792   INIT_FCALL_BY_NAME/59     ?0        ?0                   1535:'intval'       	;1	<<2043
	2047 792   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	2048 792   DO_FCALL_BY_NAME/131      $918=     ?0                   ?0                  	;0
	2049 792   CONCAT/8                  #919=     1537:'listen '       $918                	;0
	2050 792   CONCAT/8                  #920=     #919                 1538:';'            	;0
	2051 792   FETCH_DIM_W/84            $916=     16?36                1534:'http'         	;0
	2052 792   ASSIGN_DIM/147            ?861      $916                 ?4397406            	;0
	2053 792   OP_DATA/137               ?0        #920                 ?0                  	;0
	2054 793   INIT_FCALL_BY_NAME/59     ?0        ?0                   1540:'intval'       	;1
	2055 793   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	2056 793   DO_FCALL_BY_NAME/131      $923=     ?0                   ?0                  	;0
	2057 793   FETCH_DIM_W/84            $921=     16?50                1539:'http'         	;0
	2058 793   ASSIGN_DIM/147            ?866      $921                 ?0                  	;0
	2059 793   OP_DATA/137               ?0        $923                 ?0                  	;0
	2060 795   JMP/42                    ?0        ?2032                ?0                  	;0	>>2032
	2061 795   FE_FREE/127               ?0        $910                 ?0                  	;0	<<2031
	2062 798   INIT_FCALL_BY_NAME/59     ?0        ?0                   1542:'array_merge'  	;2
	2063 798   INIT_FCALL_BY_NAME/59     ?0        ?0                   1544:'intval'       	;1
	2064 798   FETCH_CONSTANT/99         #925=     ?0                   1549:'SERVER_ID'    	;16
	2065 798   FETCH_STATIC_PROP_FUNC_ARG/177 $924=     1546:'rServers'      1547:'XUI'          	;1
	2066 798   FETCH_DIM_FUNC_ARG/93     $926=     $924                 #925                	;1
	2067 798   FETCH_DIM_FUNC_ARG/93     $927=     $926                 1552:'https_broadcast_port'	;1
	2068 798   SEND_VAR_EX/66            ?80       $927                 ?1                  	;0
	2069 798   DO_FCALL_BY_NAME/131      $928=     ?0                   ?0                  	;0
	2070 798   INIT_ARRAY/71             #929=     $928                 ?0                  	;4
	2071 798   SEND_VAL_EX/116           ?80       #929                 ?1                  	;0
	2072 798   INIT_FCALL_BY_NAME/59     ?0        ?0                   1553:'explode'      	;2
	2073 798   SEND_VAL_EX/116           ?80       1555:','             ?1                  	;0
	2074 798   FETCH_CONSTANT/99         #931=     ?0                   1559:'SERVER_ID'    	;16
	2075 798   FETCH_STATIC_PROP_FUNC_ARG/177 $930=     1556:'rServers'      1557:'XUI'          	;2
	2076 798   FETCH_DIM_FUNC_ARG/93     $932=     $930                 #931                	;2
	2077 798   FETCH_DIM_FUNC_ARG/93     $933=     $932                 1562:'https_ports_add'	;2
	2078 798   SEND_VAR_EX/66            ?96       $933                 ?2                  	;0
	2079 798   DO_FCALL_BY_NAME/131      $934=     ?0                   ?0                  	;0
	2080 798   SEND_VAR_NO_REF_EX/50     ?96       $934                 ?2                  	;0
	2081 798   DO_FCALL_BY_NAME/131      $935=     ?0                   ?0                  	;0
	2082 798   FE_RESET_R/77             $936=     $935                 ?2112               	;0
	2083 798   FE_FETCH_R/78             ?0        $936                 16?37               	;2112	>>2112	<<2111
	2084 799   INIT_FCALL_BY_NAME/59     ?0        ?0                   1563:'is_numeric'   	;1
	2085 799   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	2086 799   DO_FCALL_BY_NAME/131      $937=     ?0                   ?0                  	;0
	2087 799   JMPZ_EX/46                #938=     $937                 ?2090               	;0	>>2090
	2088 799   IS_SMALLER/19             #939=     1565:0               16?37               	;0
	2089 799   BOOL/52                   #938=     #939                 ?0                  	;0
	2090 799   JMPZ_EX/46                #938=     #938                 ?2093               	;0	>>2093	<<2087
	2091 799   IS_SMALLER_OR_EQUAL/20    #940=     16?37                1566:65535          	;0
	2092 799   BOOL/52                   #938=     #940                 ?0                  	;0
	2093 799   BOOL_NOT/13               #941=     #938                 ?0                  	;0	<<2090
	2094 799   JMPZ/43                   ?0        #941                 ?2097               	;0	>>2097
	2095 800   NOP/0                     ?0        ?0                   ?0                  	;1
	2096 800   GOTO/253                  ?0        ?2111                ?1567               	;0
	2097 802   INIT_FCALL_BY_NAME/59     ?0        ?0                   1569:'intval'       	;1	<<2094
	2098 802   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	2099 802   DO_FCALL_BY_NAME/131      $944=     ?0                   ?0                  	;0
	2100 802   CONCAT/8                  #945=     1571:'listen '       $944                	;0
	2101 802   CONCAT/8                  #946=     #945                 1572:' ssl;'        	;0
	2102 802   FETCH_DIM_W/84            $942=     16?36                1568:'https'        	;0
	2103 802   ASSIGN_DIM/147            ?887      $942                 ?4397406            	;0
	2104 802   OP_DATA/137               ?0        #946                 ?0                  	;0
	2105 803   INIT_FCALL_BY_NAME/59     ?0        ?0                   1574:'intval'       	;1
	2106 803   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	2107 803   DO_FCALL_BY_NAME/131      $949=     ?0                   ?0                  	;0
	2108 803   FETCH_DIM_W/84            $947=     16?50                1573:'https'        	;0
	2109 803   ASSIGN_DIM/147            ?892      $947                 ?0                  	;0
	2110 803   OP_DATA/137               ?0        $949                 ?0                  	;0
	2111 805   JMP/42                    ?0        ?2083                ?0                  	;0	>>2083
	2112 805   FE_FREE/127               ?0        $936                 ?0                  	;0	<<2082
	2113 808   GOTO/253                  ?0        ?1726                ?1576               	;0
	2114 812   INIT_FCALL_BY_NAME/59     ?0        ?0                   1577:'file_exists'  	;1
	2115 812   FETCH_CONSTANT/99         #950=     ?0                   1579:'TMP_PATH'     	;16
	2116 812   CONCAT/8                  #951=     #950                 1582:'crontab'      	;0
	2117 812   SEND_VAL_EX/116           ?80       #951                 ?1                  	;0
	2118 812   DO_FCALL_BY_NAME/131      $952=     ?0                   ?0                  	;0
	2119 812   BOOL_NOT/13               #953=     $952                 ?0                  	;0
	2120 812   JMPZ/43                   ?0        #953                 ?2122               	;0	>>2122
	2121 813   GOTO/253                  ?0        ?1307                ?1583               	;0
	2122 815   INIT_FCALL_BY_NAME/59     ?0        ?0                   1584:'exec'         	;2	<<2120
	2123 815   SEND_VAL_EX/116           ?80       1586:'crontab -u xui -l' ?1                  	;0
	2124 815   SEND_VAR_EX/66            ?96       16?55                ?2                  	;0
	2125 815   DO_FCALL_BY_NAME/131      ?898      ?0                   ?0                  	;0
	2126 816   INIT_FCALL_BY_NAME/59     ?0        ?0                   1587:'trim'         	;1
	2127 816   INIT_FCALL_BY_NAME/59     ?0        ?0                   1589:'implode'      	;2
	2128 816   SEND_VAL_EX/116           ?80       1591:'
'             ?1                  	;0
	2129 816   SEND_VAR_EX/66            ?96       16?55                ?2                  	;0
	2130 816   DO_FCALL_BY_NAME/131      $955=     ?0                   ?0                  	;0
	2131 816   SEND_VAR_NO_REF_EX/50     ?80       $955                 ?1                  	;0
	2132 816   DO_FCALL_BY_NAME/131      $956=     ?0                   ?0                  	;0
	2133 816   ASSIGN/38                 ?901      16?54                $956                	;0
	2134 817   GOTO/253                  ?0        ?1819                ?1592               	;0
	2135 819   FETCH_CONSTANT/99         #959=     ?0                   1596:'SERVER_ID'    	;16
	2136 819   FETCH_STATIC_PROP_R/173   $958=     1593:'rServers'      1594:'XUI'          	;0
	2137 819   FETCH_DIM_R/81            $960=     $958                 #959                	;0
	2138 819   FETCH_DIM_R/81            $961=     $960                 1599:'total_services'	;0
	2139 819   IS_NOT_EQUAL/18           #962=     $961                 16?39               	;0
	2140 819   BOOL_NOT/13               #963=     #962                 ?0                  	;0
	2141 819   JMPZ/43                   ?0        #963                 ?2143               	;0	>>2143
	2142 820   GOTO/253                  ?0        ?2158                ?1600               	;0
	2143 822   INIT_FCALL_BY_NAME/59     ?0        ?0                   1601:'array_unshift'	;2	<<2141
	2144 822   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	2145 822   INIT_FCALL_BY_NAME/59     ?0        ?0                   1603:'json_encode'  	;1
	2146 822   INIT_ARRAY/71             #964=     1605:'set_services'  1606:'action'       	;14
	2147 822   FETCH_CONSTANT/99         #966=     ?0                   1610:'SERVER_ID'    	;16
	2148 822   FETCH_STATIC_PROP_R/173   $965=     1607:'rServers'      1608:'XUI'          	;0
	2149 822   FETCH_DIM_R/81            $967=     $965                 #966                	;0
	2150 822   FETCH_DIM_R/81            $968=     $967                 1613:'total_services'	;0
	2151 822   ADD_ARRAY_ELEMENT/72      #964=     $968                 1614:'count'        	;0
	2152 822   ADD_ARRAY_ELEMENT/72      #964=     1615:true            1616:'reload'       	;0
	2153 822   SEND_VAL_EX/116           ?80       #964                 ?1                  	;0
	2154 822   DO_FCALL_BY_NAME/131      $969=     ?0                   ?0                  	;0
	2155 822   INIT_ARRAY/71             #970=     $969                 1617:'custom_data'  	;6
	2156 822   SEND_VAL_EX/116           ?96       #970                 ?2                  	;0
	2157 822   DO_FCALL_BY_NAME/131      ?915      ?0                   ?0                  	;0
	2158 825   FETCH_DIM_R/81            $972=     16?17                1618:'ports'        	;0
	2159 825   BOOL_NOT/13               #973=     $972                 ?0                  	;0
	2160 825   JMPZ/43                   ?0        #973                 ?2162               	;0	>>2162
	2161 826   GOTO/253                  ?0        ?236                 ?1619               	;0
	2162 828   GOTO/253                  ?0        ?2009                ?1620               	;0	<<2160
	2163 831   INIT_FCALL_BY_NAME/59     ?0        ?0                   1621:'count'        	;1
	2164 831   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	2165 831   DO_FCALL_BY_NAME/131      $974=     ?0                   ?0                  	;0
	2166 831   IS_SMALLER/19             #975=     1623:0               $974                	;0
	2167 831   BOOL_NOT/13               #976=     #975                 ?0                  	;0
	2168 831   JMPZ/43                   ?0        #976                 ?2170               	;0	>>2170
	2169 832   GOTO/253                  ?0        ?279                 ?1624               	;0
	2170 834   ASSIGN/38                 ?921      16?22                1625:true           	;0	<<2168
	2171 835   FE_RESET_R/77             $978=     16?10                ?2181               	;0
	2172 835   FE_FETCH_R/78             ?0        $978                 16?5                	;2181	>>2181	<<2180
	2173 836   ROPE_INIT/54              #980=     ?0                   1626:'Block IP: '   	;3
	2174 836   ROPE_ADD/55               #980=     #980                 16?5                	;1
	2175 836   ROPE_END/56               #979=     #980                 1627:'
'            	;2
	2176 836   ECHO/40                   ?0        #979                 ?0                  	;0
	2177 837   INIT_FCALL_BY_NAME/59     ?0        ?0                   1628:'AD3aA72d8893f402'	;1
	2178 837   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	2179 837   DO_FCALL_BY_NAME/131      ?926      ?0                   ?0                  	;0
	2180 838   JMP/42                    ?0        ?2172                ?0                  	;0	>>2172
	2181 838   FE_FREE/127               ?0        $978                 ?0                  	;0	<<2171
	2182 841   GOTO/253                  ?0        ?279                 ?1630               	;0
	2183 843   NOP/0                     ?0        1631:NULL            ?0                  	;4294967295
	*/
}

function AD3aA72D8893f402($b38e11ffdc6a3abb)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   866  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   868  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'filter_var'      	;3
	2   868  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   868  FETCH_CONSTANT/99         #1=       ?0                   2:'FILTER_VALIDATE_IP'	;16
	4   868  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
	5   868  FETCH_CONSTANT/99         #2=       ?0                   5:'FILTER_FLAG_IPV4'	;16
	6   868  SEND_VAL_EX/116           ?112      #2                   ?3                  	;0
	7   868  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	8   868  JMPZ/43                   ?0        $3                   ?10                 	;0	>>10
	9   869  GOTO/253                  ?0        ?29                  ?8                  	;0
	10  871  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'filter_var'      	;3	<<8
	11  871  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	12  871  FETCH_CONSTANT/99         #4=       ?0                   11:'FILTER_VALIDATE_IP'	;16
	13  871  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
	14  871  FETCH_CONSTANT/99         #5=       ?0                   14:'FILTER_FLAG_IPV6'	;16
	15  871  SEND_VAL_EX/116           ?112      #5                   ?3                  	;0
	16  871  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	17  871  BOOL_NOT/13               #7=       $6                   ?0                  	;0
	18  871  JMPZ/43                   ?0        #7                   ?20                 	;0	>>20
	19  872  GOTO/253                  ?0        ?28                  ?17                 	;0
	20  874  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'exec'           	;1	<<18
	21  874  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'escapeshellcmd' 	;1
	22  874  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	23  874  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	24  874  CONCAT/8                  #9=       22:'sudo ip6tables -I INPUT -s ' $8                  	;0
	25  874  CONCAT/8                  #10=      #9                   23:' -j DROP'       	;0
	26  874  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
	27  874  DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
	28  876  GOTO/253                  ?0        ?37                  ?24                 	;0
	29  878  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'exec'           	;1
	30  878  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'escapeshellcmd' 	;1
	31  878  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	32  878  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	33  878  CONCAT/8                  #13=      29:'sudo iptables -I INPUT -s ' $12                 	;0
	34  878  CONCAT/8                  #14=      #13                  30:' -j DROP'       	;0
	35  878  SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
	36  878  DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
	37  880  INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'touch'          	;1
	38  880  FETCH_CONSTANT/99         #16=      ?0                   33:'FLOOD_TMP_PATH' 	;16
	39  880  CONCAT/8                  #17=      #16                  36:'block_'         	;0
	40  880  CONCAT/8                  #18=      #17                  16?0                	;0
	41  880  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
	42  880  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
	43  881  NOP/0                     ?0        37:NULL              ?0                  	;4294967295
	*/
}

function bb574635B472CE89($b38e11ffdc6a3abb)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   883  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   885  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
	2   887  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'filter_var'      	;3	<<1
	3   887  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   887  FETCH_CONSTANT/99         #1=       ?0                   3:'FILTER_VALIDATE_IP'	;16
	5   887  SEND_VAL_EX/116           ?96       #1                   ?2                  	;0
	6   887  FETCH_CONSTANT/99         #2=       ?0                   6:'FILTER_FLAG_IPV4'	;16
	7   887  SEND_VAL_EX/116           ?112      #2                   ?3                  	;0
	8   887  DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
	9   887  JMPZ/43                   ?0        $3                   ?11                 	;0	>>11
	10  888  GOTO/253                  ?0        ?32                  ?9                  	;0
	11  890  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'filter_var'     	;3	<<9
	12  890  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	13  890  FETCH_CONSTANT/99         #4=       ?0                   12:'FILTER_VALIDATE_IP'	;16
	14  890  SEND_VAL_EX/116           ?96       #4                   ?2                  	;0
	15  890  FETCH_CONSTANT/99         #5=       ?0                   15:'FILTER_FLAG_IPV6'	;16
	16  890  SEND_VAL_EX/116           ?112      #5                   ?3                  	;0
	17  890  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	18  890  BOOL_NOT/13               #7=       $6                   ?0                  	;0
	19  890  JMPZ/43                   ?0        #7                   ?21                 	;0	>>21
	20  891  GOTO/253                  ?0        ?29                  ?18                 	;0
	21  893  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'exec'           	;1	<<19
	22  893  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'escapeshellcmd' 	;1
	23  893  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	24  893  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	25  893  CONCAT/8                  #9=       23:'sudo ip6tables -D INPUT -s ' $8                  	;0
	26  893  CONCAT/8                  #10=      #9                   24:' -j DROP'       	;0
	27  893  SEND_VAL_EX/116           ?80       #10                  ?1                  	;0
	28  893  DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
	29  895  GOTO/253                  ?0        ?40                  ?25                 	;0
	30  896  GOTO/253                  ?0        ?32                  ?26                 	;0
	31  899  GOTO/253                  ?0        ?56                  ?27                 	;0
	32  902  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'exec'           	;1
	33  902  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'escapeshellcmd' 	;1
	34  902  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	35  902  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	36  902  CONCAT/8                  #13=      32:'sudo iptables -D INPUT -s ' $12                 	;0
	37  902  CONCAT/8                  #14=      #13                  33:' -j DROP'       	;0
	38  902  SEND_VAL_EX/116           ?80       #14                  ?1                  	;0
	39  902  DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
	40  904  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'file_exists'    	;1
	41  904  FETCH_CONSTANT/99         #16=      ?0                   36:'FLOOD_TMP_PATH' 	;16
	42  904  CONCAT/8                  #17=      #16                  39:'block_'         	;0
	43  904  CONCAT/8                  #18=      #17                  16?0                	;0
	44  904  SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
	45  904  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	46  904  BOOL_NOT/13               #20=      $19                  ?0                  	;0
	47  904  JMPZ/43                   ?0        #20                  ?49                 	;0	>>49
	48  905  GOTO/253                  ?0        ?31                  ?40                 	;0
	49  907  INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'unlink'         	;1	<<47
	50  907  FETCH_CONSTANT/99         #21=      ?0                   43:'FLOOD_TMP_PATH' 	;16
	51  907  CONCAT/8                  #22=      #21                  46:'block_'         	;0
	52  907  CONCAT/8                  #23=      #22                  16?0                	;0
	53  907  SEND_VAL_EX/116           ?80       #23                  ?1                  	;0
	54  907  DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
	55  908  GOTO/253                  ?0        ?31                  ?47                 	;0
	56  910  NOP/0                     ?0        48:NULL              ?0                  	;4294967295
	*/
}

function A0C5c8De2109dd97()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   914  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'exec'            	;1
	1   914  SEND_VAL_EX/116           ?80       2:'sudo iptables -F && sudo ip6tables -F' ?1                  	;0
	2   914  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
	3   915  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'shell_exec'      	;1
	4   915  FETCH_CONSTANT/99         #1=       ?0                   5:'FLOOD_TMP_PATH'  	;16
	5   915  CONCAT/8                  #2=       8:'sudo rm '         #1                  	;0
	6   915  CONCAT/8                  #3=       #2                   9:'block_*'         	;0
	7   915  SEND_VAL_EX/116           ?80       #3                   ?1                  	;0
	8   915  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	9   916  NOP/0                     ?0        10:NULL              ?0                  	;4294967295
	*/
}

function b33B2d13A0e185Aa()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   920  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'exec'            	;1
	1   920  SEND_VAL_EX/116           ?80       2:'sudo iptables-save && sudo ip6tables-save' ?1                  	;0
	2   920  DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
	3   921  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
	*/
}

function Dc088f5beC67CE39()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   932  ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
	1   933  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'exec'            	;2
	2   933  SEND_VAL_EX/116           ?80       3:'sudo iptables -nL --line-numbers -t filter' ?1                  	;0
	3   933  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	4   933  DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
	5   934  FE_RESET_R/77             $5=       16?1                 ?27                 	;0
	6   934  FE_FETCH_R/78             ?0        $5                   16?2                	;27	>>27	<<26
	7   935  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'explode'         	;2
	8   935  SEND_VAL_EX/116           ?80       6:' '                ?1                  	;0
	9   935  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'preg_replace'    	;3
	10  935  SEND_VAL_EX/116           ?80       9:'!\\s+!'           ?1                  	;0
	11  935  SEND_VAL_EX/116           ?96       10:' '               ?2                  	;0
	12  935  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	13  935  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
	14  935  SEND_VAR_NO_REF_EX/50     ?96       $6                   ?2                  	;0
	15  935  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	16  935  ASSIGN/38                 ?5        16?2                 $7                  	;0
	17  936  FETCH_DIM_R/81            $9=       16?2                 11:1                	;0
	18  936  IS_EQUAL/17               #10=      $9                   12:'DROP'           	;0
	19  936  BOOL_NOT/13               #11=      #10                  ?0                  	;0
	20  936  JMPZ/43                   ?0        #11                  ?23                 	;0	>>23
	21  937  NOP/0                     ?0        ?0                   ?0                  	;1
	22  937  GOTO/253                  ?0        ?26                  ?13                 	;0
	23  939  FETCH_DIM_R/81            $13=      16?2                 14:4                	;0	<<20
	24  939  ASSIGN_DIM/147            ?9        16?0                 ?4397406            	;0
	25  939  OP_DATA/137               ?0        $13                  ?0                  	;0
	26  941  JMP/42                    ?0        ?6                   ?0                  	;0	>>6
	27  941  FE_FREE/127               ?0        $5                   ?0                  	;0	<<5
	28  944  ASSIGN/38                 ?11       16?1                 15:''               	;0
	29  945  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'exec'           	;2
	30  945  SEND_VAL_EX/116           ?80       18:'sudo ip6tables -nL --line-numbers -t filter' ?1                  	;0
	31  945  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	32  945  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
	33  946  FE_RESET_R/77             $16=      16?1                 ?55                 	;0
	34  946  FE_FETCH_R/78             ?0        $16                  16?2                	;55	>>55	<<54
	35  947  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'explode'        	;2
	36  947  SEND_VAL_EX/116           ?80       21:' '               ?1                  	;0
	37  947  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'preg_replace'   	;3
	38  947  SEND_VAL_EX/116           ?80       24:'!\\s+!'          ?1                  	;0
	39  947  SEND_VAL_EX/116           ?96       25:' '               ?2                  	;0
	40  947  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	41  947  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
	42  947  SEND_VAR_NO_REF_EX/50     ?96       $17                  ?2                  	;0
	43  947  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	44  947  ASSIGN/38                 ?16       16?2                 $18                 	;0
	45  948  FETCH_DIM_R/81            $20=      16?2                 26:1                	;0
	46  948  IS_EQUAL/17               #21=      $20                  27:'DROP'           	;0
	47  948  BOOL_NOT/13               #22=      #21                  ?0                  	;0
	48  948  JMPZ/43                   ?0        #22                  ?51                 	;0	>>51
	49  949  NOP/0                     ?0        ?0                   ?0                  	;1
	50  949  GOTO/253                  ?0        ?54                  ?28                 	;0
	51  951  FETCH_DIM_R/81            $24=      16?2                 29:3                	;0	<<48
	52  951  ASSIGN_DIM/147            ?20       16?0                 ?4397406            	;0
	53  951  OP_DATA/137               ?0        $24                  ?0                  	;0
	54  953  JMP/42                    ?0        ?34                  ?0                  	;0	>>34
	55  953  FE_FREE/127               ?0        $16                  ?0                  	;0	<<33
	56  956  RETURN/62                 ?0        16?0                 ?0                  	;0
	57  957  NOP/0                     ?0        30:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   962  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   962  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   962  BIND_GLOBAL/168           ?0        16?2                 2:'b19d07dcd248e701'	;0
	3   963  BOOL_NOT/13               #3=       16?2                 ?0                  	;0
	4   963  JMPZ/43                   ?0        #3                   ?6                  	;0	>>6
	5   964  GOTO/253                  ?0        ?8                   ?3                  	;0
	6   966  INIT_FCALL/61             ?0        ?96                  4:'b33b2d13a0e185aa'	;0	<<4
	7   966  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	8   968  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'is_object'       	;1
	9   968  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	10  968  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	11  968  BOOL_NOT/13               #6=       $5                   ?0                  	;0
	12  968  JMPZ/43                   ?0        #6                   ?14                 	;0	>>14
	13  969  GOTO/253                  ?0        ?16                  ?7                  	;0
	14  971  INIT_METHOD_CALL/112      ?0        16?0                 8:'close_mysql'     	;0	<<12
	15  971  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	16  973  BEGIN_SILENCE/57          #8=       ?0                   ?0                  	;0
	17  973  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'unlink'         	;1
	18  973  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	19  973  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
	20  973  END_SILENCE/58            ?0        #8                   ?0                  	;0
	21  974  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?5                   ?0                  	;0	>>5
1   6    NOP/0                     ?0        ?0                   ?0                  	;0
2   844  INIT_FCALL/61             ?0        ?15808               1:'ab8369074df2aaa3'	;0
3   844  DO_FCALL/60               ?0        ?0                   ?0                  	;0
4   845  GOTO/253                  ?0        ?75                  ?2                  	;0
5   847  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'posix_getpwuid'  	;1	<<0
6   847  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'posix_geteuid'   	;0
7   847  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
8   847  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
9   847  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
10  847  FETCH_DIM_R/81            $6=       $5                   7:'name'            	;0
11  847  IS_NOT_EQUAL/18           #7=       $6                   8:'root'            	;0
12  847  BOOL_NOT/13               #8=       #7                   ?0                  	;0
13  847  JMPZ/43                   ?0        #8                   ?15                 	;0	>>15
14  848  GOTO/253                  ?0        ?16                  ?9                  	;0
15  850  EXIT/79                   ?0        10:'Please run as root!
' ?0                  	;0	<<13
16  852  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'set_time_limit' 	;1
17  852  SEND_VAL_EX/116           ?80       13:0                 ?1                  	;0
18  852  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
19  853  BEGIN_SILENCE/57          #10=      ?0                   ?0                  	;0
20  853  FETCH_R/80                $11=      14:'argc'            ?0                  	;268435456
21  853  END_SILENCE/58            ?0        #10                  ?0                  	;0
22  853  JMPZ/43                   ?0        $11                  ?24                 	;0	>>24
23  854  GOTO/253                  ?0        ?26                  ?15                 	;0
24  856  GOTO/253                  ?0        ?25                  ?16                 	;0	<<22
25  858  EXIT/79                   ?0        17:0                 ?0                  	;0
26  860  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'register_shutdown_function'	;1
27  860  SEND_VAL_EX/116           ?80       20:'shutdown'        ?1                  	;0
28  860  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
29  861  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'str_replace'    	;3
30  861  SEND_VAL_EX/116           ?80       23:'\\'              ?1                  	;0
31  861  SEND_VAL_EX/116           ?96       24:'/'               ?2                  	;0
32  861  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'dirname'        	;1
33  861  FETCH_DIM_FUNC_ARG/93     $13=      16?0                 27:0                	;1
34  861  SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
35  861  DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
36  861  SEND_VAR_NO_REF_EX/50     ?112      $14                  ?3                  	;0
37  861  DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
38  861  CONCAT/8                  #16=      $15                  28:'/../www/init.php'	;0
39  861  INCLUDE_OR_EVAL/73        ?14       #16                  ?0                  	;8
40  862  FETCH_CONSTANT/99         #18=      ?0                   29:'CRONS_TMP_PATH' 	;16
41  862  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'md5'            	;1
42  862  INIT_STATIC_METHOD_CALL/113 ?0        34:'XUI'             36:'a336B0Dad3EAf634'	;0
43  862  DO_FCALL/60               $19=      ?0                   ?0                  	;0
44  862  CONCAT/8                  #20=      $19                  38:'crons\\root_signals.php'	;0
45  862  SEND_VAL_EX/116           ?80       #20                  ?1                  	;0
46  862  DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
47  862  CONCAT/8                  #22=      #18                  $21                 	;0
48  862  ASSIGN/38                 ?20       16?1                 #22                 	;0
49  863  GOTO/253                  ?0        ?56                  ?39                 	;0
50  866  NOP/0                     ?0        ?0                   ?0                  	;0
51  883  NOP/0                     ?0        ?0                   ?0                  	;0
52  912  NOP/0                     ?0        ?0                   ?0                  	;0
53  918  NOP/0                     ?0        ?0                   ?0                  	;0
54  922  ASSIGN/38                 ?21       16?2                 40:false            	;0
55  923  GOTO/253                  ?0        ?1                   ?41                 	;0
56  925  INIT_STATIC_METHOD_CALL/113 ?0        42:'XUI'             44:'a3CF732c257bD804'	;1
57  925  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
58  925  DO_FCALL/60               ?22       ?0                   ?0                  	;0
59  926  INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'shell_exec'     	;1
60  926  SEND_VAL_EX/116           ?80       48:'sudo kill -9 `ps -ef | grep \'XUISignals\' | grep -v grep | awk \'{print $2}\'`;' ?1                  	;0
61  926  DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
62  927  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'cli_set_process_title'	;1
63  927  SEND_VAL_EX/116           ?80       51:'XUISignals'      ?1                  	;0
64  927  DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
65  928  INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'file_put_contents'	;2
66  928  FETCH_CONSTANT/99         #28=      ?0                   54:'CONFIG_PATH'    	;16
67  928  CONCAT/8                  #29=      #28                  57:'signals.last'   	;0
68  928  SEND_VAL_EX/116           ?80       #29                  ?1                  	;0
69  928  INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'time'           	;0
70  928  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
71  928  SEND_VAR_NO_REF_EX/50     ?96       $30                  ?2                  	;0
72  928  DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
73  930  NOP/0                     ?0        ?0                   ?0                  	;0
74  958  GOTO/253                  ?0        ?50                  ?60                 	;0
75  960  NOP/0                     ?0        ?0                   ?0                  	;0
76  975  NOP/0                     ?0        61:1                 ?0                  	;4294967295
*/

?>