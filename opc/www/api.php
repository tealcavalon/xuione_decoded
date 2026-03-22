<?php


function E5B50A3E1aE37F5f()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    10    JMP/42                    ?0        ?1422                ?0                  	;0	>>1422
	1    12    NEW/68                    $41=      1:'Database'         ?96                 	;1
	2    12    SEND_VAL_EX/116           ?80       3:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
	3    12    DO_FCALL/60               ?1        ?8                   ?0                  	;0
	4    12    ASSIGN/38                 ?2        16?0                 $41                 	;0
	5    13    FETCH_STATIC_PROP_W/174   $44=      4:'db'               5:'XUI'             	;0
	6    13    ASSIGN_REF/39             ?4        $44                  16?0                	;0
	7    14    INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'in_array'        	;2
	8    14    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	9    14    INIT_STATIC_METHOD_CALL/113 ?0        9:'XUI'              11:'De052f142A92e9bf'	;0
	10   14    DO_FCALL/60               $46=      ?0                   ?0                  	;0
	11   14    SEND_VAR_NO_REF_EX/50     ?96       $46                  ?2                  	;0
	12   14    DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
	13   14    JMPZ/43                   ?0        $47                  ?15                 	;0	>>15
	14   15    GOTO/253                  ?0        ?18                  ?13                 	;0
	15   17    INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'generateError'  	;1	<<13
	16   17    SEND_VAL_EX/116           ?80       16:'API_IP_NOT_ALLOWED' ?1                  	;0
	17   17    DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
	18   19    GOTO/253                  ?0        ?19                  ?17                 	;0
	19   21    INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'header'         	;1
	20   21    SEND_VAL_EX/116           ?80       20:'Access-Control-Allow-Origin: *' ?1                  	;0
	21   21    DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
	22   22    FETCH_STATIC_PROP_IS/176  $50=      21:'rRequest'        22:'XUI'            	;0
	23   22    ISSET_ISEMPTY_DIM_OBJ/115 #51=      $50                  24:'action'         	;16777216
	24   22    BOOL_NOT/13               #52=      #51                  ?0                  	;0
	25   22    JMPZ/43                   ?0        #52                  ?30                 	;0	>>30
	26   22    FETCH_STATIC_PROP_R/173   $53=      25:'rRequest'        26:'XUI'            	;0
	27   22    FETCH_DIM_R/81            $54=      $53                  28:'action'         	;0
	28   22    QM_ASSIGN/22              #55=      $54                  ?0                  	;0
	29   22    JMP/42                    ?0        ?31                  ?0                  	;0	>>31
	30   22    QM_ASSIGN/22              #55=      29:''                ?0                  	;0	<<25
	31   22    ASSIGN/38                 ?15       16?2                 #55                 	;0	<<29
	32   23    ASSIGN/38                 ?16       16?3                 30:false            	;0
	33   24    SWITCH_STRING/188         ?0        16?2                 31:array (
  'view_log' => 97,
  'fpm_status' => 145,
  'reload_epg' => 156,
  'restore_images' => 165,
  'reload_nginx' => 174,
  'streams_ramdisk' => 185,
  'vod' => 252,
  'rtmp_stats' => 322,
  'kill_pid' => 329,
  'rtmp_kill' => 352,
  'stream' => 374,
  'stats' => 439,
  'force_stream' => 446,
  'closeConnection' => 474,
  'pidsAreRunning' => 486,
  'getFile' => 562,
  'scandir_recursive' => 786,
  'scandir' => 852,
  'get_free_space' => 963,
  'get_pids' => 972,
  'free_temp' => 981,
  'free_streams' => 1000,
  'signal_send' => 1011,
  'get_certificate_info' => 1042,
  'watch_force' => 1049,
  'plex_force' => 1065,
  'get_archive_files' => 1081,
  'request_update' => 1100,
  'kill_watch' => 1161,
  'kill_plex' => 1237,
  'probe' => 1313,
)	;1417
	34   25    CASE/48                   #58=      16?2                 32:'view_log'       	;0	>>36
	35   25    JMPNZ/44                  ?0        #58                  ?97                 	;0	>>97
	36   53    CASE/48                   #58=      16?2                 33:'fpm_status'     	;0	>>38	<<34
	37   53    JMPNZ/44                  ?0        #58                  ?145                	;0	>>145
	38   56    CASE/48                   #58=      16?2                 34:'reload_epg'     	;0	>>40	<<36
	39   56    JMPNZ/44                  ?0        #58                  ?156                	;0	>>156
	40   59    CASE/48                   #58=      16?2                 35:'restore_images' 	;0	>>42	<<38
	41   59    JMPNZ/44                  ?0        #58                  ?165                	;0	>>165
	42   62    CASE/48                   #58=      16?2                 36:'reload_nginx'   	;0	>>44	<<40
	43   62    JMPNZ/44                  ?0        #58                  ?174                	;0	>>174
	44   66    CASE/48                   #58=      16?2                 37:'streams_ramdisk'	;0	>>46	<<42
	45   66    JMPNZ/44                  ?0        #58                  ?185                	;0	>>185
	46   89    CASE/48                   #58=      16?2                 38:'vod'            	;0	>>48	<<44
	47   89    JMPNZ/44                  ?0        #58                  ?252                	;0	>>252
	48   125   CASE/48                   #58=      16?2                 39:'rtmp_stats'     	;0	>>50	<<46
	49   125   JMPNZ/44                  ?0        #58                  ?322                	;0	>>322
	50   128   CASE/48                   #58=      16?2                 40:'kill_pid'       	;0	>>52	<<48
	51   128   JMPNZ/44                  ?0        #58                  ?329                	;0	>>329
	52   140   CASE/48                   #58=      16?2                 41:'rtmp_kill'      	;0	>>54	<<50
	53   140   JMPNZ/44                  ?0        #58                  ?352                	;0	>>352
	54   145   CASE/48                   #58=      16?2                 42:'stream'         	;0	>>56	<<52
	55   145   JMPNZ/44                  ?0        #58                  ?374                	;0	>>374
	56   179   CASE/48                   #58=      16?2                 43:'stats'          	;0	>>58	<<54
	57   179   JMPNZ/44                  ?0        #58                  ?439                	;0	>>439
	58   182   CASE/48                   #58=      16?2                 44:'force_stream'   	;0	>>60	<<56
	59   182   JMPNZ/44                  ?0        #58                  ?446                	;0	>>446
	60   191   CASE/48                   #58=      16?2                 45:'closeConnection'	;0	>>62	<<58
	61   191   JMPNZ/44                  ?0        #58                  ?474                	;0	>>474
	62   194   CASE/48                   #58=      16?2                 46:'pidsAreRunning' 	;0	>>64	<<60
	63   194   JMPNZ/44                  ?0        #58                  ?486                	;0	>>486
	64   215   CASE/48                   #58=      16?2                 47:'getFile'        	;0	>>66	<<62
	65   215   JMPNZ/44                  ?0        #58                  ?562                	;0	>>562
	66   309   CASE/48                   #58=      16?2                 48:'scandir_recursive'	;0	>>68	<<64
	67   309   JMPNZ/44                  ?0        #58                  ?786                	;0	>>786
	68   337   CASE/48                   #58=      16?2                 49:'scandir'        	;0	>>70	<<66
	69   337   JMPNZ/44                  ?0        #58                  ?852                	;0	>>852
	70   387   CASE/48                   #58=      16?2                 50:'get_free_space' 	;0	>>72	<<68
	71   387   JMPNZ/44                  ?0        #58                  ?963                	;0	>>963
	72   391   CASE/48                   #58=      16?2                 51:'get_pids'       	;0	>>74	<<70
	73   391   JMPNZ/44                  ?0        #58                  ?972                	;0	>>972
	74   395   CASE/48                   #58=      16?2                 52:'free_temp'      	;0	>>76	<<72
	75   395   JMPNZ/44                  ?0        #58                  ?981                	;0	>>981
	76   400   CASE/48                   #58=      16?2                 53:'free_streams'   	;0	>>78	<<74
	77   400   JMPNZ/44                  ?0        #58                  ?1000               	;0	>>1000
	78   404   CASE/48                   #58=      16?2                 54:'signal_send'    	;0	>>80	<<76
	79   404   JMPNZ/44                  ?0        #58                  ?1011               	;0	>>1011
	80   411   CASE/48                   #58=      16?2                 55:'get_certificate_info'	;0	>>82	<<78
	81   411   JMPNZ/44                  ?0        #58                  ?1042               	;0	>>1042
	82   414   CASE/48                   #58=      16?2                 56:'watch_force'    	;0	>>84	<<80
	83   414   JMPNZ/44                  ?0        #58                  ?1049               	;0	>>1049
	84   417   CASE/48                   #58=      16?2                 57:'plex_force'     	;0	>>86	<<82
	85   417   JMPNZ/44                  ?0        #58                  ?1065               	;0	>>1065
	86   420   CASE/48                   #58=      16?2                 58:'get_archive_files'	;0	>>88	<<84
	87   420   JMPNZ/44                  ?0        #58                  ?1081               	;0	>>1081
	88   424   CASE/48                   #58=      16?2                 59:'request_update' 	;0	>>90	<<86
	89   424   JMPNZ/44                  ?0        #58                  ?1100               	;0	>>1100
	90   449   CASE/48                   #58=      16?2                 60:'kill_watch'     	;0	>>92	<<88
	91   449   JMPNZ/44                  ?0        #58                  ?1161               	;0	>>1161
	92   484   CASE/48                   #58=      16?2                 61:'kill_plex'      	;0	>>94	<<90
	93   484   JMPNZ/44                  ?0        #58                  ?1237               	;0	>>1237
	94   519   CASE/48                   #58=      16?2                 62:'probe'          	;0	>>96	<<92
	95   519   JMPNZ/44                  ?0        #58                  ?1313               	;0	>>1313
	96   519   JMP/42                    ?0        ?1417                ?0                  	;0	>>1417	<<94
	97   26    GOTO/253                  ?0        ?110                 ?63                 	;0	<<35
	98   29    GOTO/253                  ?0        ?106                 ?64                 	;0
	99   31    INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'file_get_contents'	;1
	100  31    FETCH_CONSTANT/99         #59=      ?0                   67:'STREAMS_PATH'   	;16
	101  31    CONCAT/8                  #60=      #59                  16?4                	;0
	102  31    CONCAT/8                  #61=      #60                  70:'.errors'        	;0
	103  31    SEND_VAL_EX/116           ?80       #61                  ?1                  	;0
	104  31    DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
	105  31    ECHO/40                   ?0        $62                  ?0                  	;0
	106  33    GOTO/253                  ?0        ?107                 ?71                 	;0
	107  35    EXIT/79                   ?0        ?0                   ?0                  	;0
	108  37    GOTO/253                  ?0        ?1456                ?72                 	;0
	109  38    GOTO/253                  ?0        ?145                 ?73                 	;0
	110  40    FETCH_STATIC_PROP_IS/176  $63=      74:'rRequest'        75:'XUI'            	;0
	111  40    ISSET_ISEMPTY_DIM_OBJ/115 #64=      $63                  77:'stream_id'      	;16777216
	112  40    JMPZ/43                   ?0        #64                  ?114                	;0	>>114
	113  41    GOTO/253                  ?0        ?108                 ?78                 	;0
	114  43    INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'intval'         	;1	<<112
	115  43    FETCH_STATIC_PROP_FUNC_ARG/177 $65=      81:'rRequest'        82:'XUI'            	;1
	116  43    FETCH_DIM_FUNC_ARG/93     $66=      $65                  84:'stream_id'      	;1
	117  43    SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
	118  43    DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	119  43    ASSIGN/38                 ?27       16?4                 $67                 	;0
	120  44    INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'file_exists'    	;1
	121  44    FETCH_CONSTANT/99         #69=      ?0                   87:'STREAMS_PATH'   	;16
	122  44    CONCAT/8                  #70=      #69                  16?4                	;0
	123  44    CONCAT/8                  #71=      #70                  90:'.errors'        	;0
	124  44    SEND_VAL_EX/116           ?80       #71                  ?1                  	;0
	125  44    DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	126  44    JMPZ/43                   ?0        $72                  ?128                	;0	>>128
	127  45    GOTO/253                  ?0        ?99                  ?91                 	;0
	128  47    INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'file_exists'    	;1	<<126
	129  47    FETCH_CONSTANT/99         #73=      ?0                   94:'VOD_PATH'       	;16
	130  47    CONCAT/8                  #74=      #73                  16?4                	;0
	131  47    CONCAT/8                  #75=      #74                  97:'.errors'        	;0
	132  47    SEND_VAL_EX/116           ?80       #75                  ?1                  	;0
	133  47    DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
	134  47    BOOL_NOT/13               #77=      $76                  ?0                  	;0
	135  47    JMPZ/43                   ?0        #77                  ?137                	;0	>>137
	136  48    GOTO/253                  ?0        ?98                  ?98                 	;0
	137  50    INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'file_get_contents'	;1	<<135
	138  50    FETCH_CONSTANT/99         #78=      ?0                   101:'VOD_PATH'      	;16
	139  50    CONCAT/8                  #79=      #78                  16?4                	;0
	140  50    CONCAT/8                  #80=      #79                  104:'.errors'       	;0
	141  50    SEND_VAL_EX/116           ?80       #80                  ?1                  	;0
	142  50    DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
	143  50    ECHO/40                   ?0        $81                  ?0                  	;0
	144  51    GOTO/253                  ?0        ?98                  ?105                	;0
	145  54    INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'file_get_contents'	;1	<<37
	146  54    FETCH_CONSTANT/99         #83=      ?0                   111:'SERVER_ID'     	;16
	147  54    FETCH_STATIC_PROP_R/173   $82=      108:'rServers'       109:'XUI'           	;0
	148  54    FETCH_DIM_R/81            $84=      $82                  #83                 	;0
	149  54    FETCH_DIM_R/81            $85=      $84                  114:'http_broadcast_port'	;0
	150  54    CONCAT/8                  #86=      115:'http://127.0.0.1:' $85                 	;0
	151  54    CONCAT/8                  #87=      #86                  116:'/status'       	;0
	152  54    SEND_VAL_EX/116           ?80       #87                  ?1                  	;0
	153  54    DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
	154  54    ECHO/40                   ?0        $88                  ?0                  	;0
	155  55    GOTO/253                  ?0        ?1456                ?117                	;0
	156  57    INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'shell_exec'    	;1	<<39
	157  57    FETCH_CONSTANT/99         #89=      ?0                   120:'PHP_BIN'       	;16
	158  57    CONCAT/8                  #90=      #89                  123:' '             	;0
	159  57    FETCH_CONSTANT/99         #91=      ?0                   124:'CRON_PATH'     	;16
	160  57    CONCAT/8                  #92=      #90                  #91                 	;0
	161  57    CONCAT/8                  #93=      #92                  127:'epg.php >/dev/null 2>/dev/null &'	;0
	162  57    SEND_VAL_EX/116           ?80       #93                  ?1                  	;0
	163  57    DO_FCALL_BY_NAME/131      ?53       ?0                   ?0                  	;0
	164  58    GOTO/253                  ?0        ?1456                ?128                	;0
	165  60    INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'shell_exec'    	;1	<<41
	166  60    FETCH_CONSTANT/99         #95=      ?0                   131:'PHP_BIN'       	;16
	167  60    CONCAT/8                  #96=      #95                  134:' '             	;0
	168  60    FETCH_CONSTANT/99         #97=      ?0                   135:'INCLUDES_PATH' 	;16
	169  60    CONCAT/8                  #98=      #96                  #97                 	;0
	170  60    CONCAT/8                  #99=      #98                  138:'cli/tools.php "images" >/dev/null 2>/dev/null &'	;0
	171  60    SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
	172  60    DO_FCALL_BY_NAME/131      ?59       ?0                   ?0                  	;0
	173  61    GOTO/253                  ?0        ?1456                ?139                	;0
	174  63    INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'shell_exec'    	;1	<<43
	175  63    FETCH_CONSTANT/99         #101=     ?0                   142:'BIN_PATH'      	;16
	176  63    CONCAT/8                  #102=     #101                 145:'nginx_rtmp/sbin/nginx_rtmp -s reload'	;0
	177  63    SEND_VAL_EX/116           ?80       #102                 ?1                  	;0
	178  63    DO_FCALL_BY_NAME/131      ?62       ?0                   ?0                  	;0
	179  64    INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'shell_exec'    	;1
	180  64    FETCH_CONSTANT/99         #104=     ?0                   148:'BIN_PATH'      	;16
	181  64    CONCAT/8                  #105=     #104                 151:'nginx/sbin/nginx -s reload'	;0
	182  64    SEND_VAL_EX/116           ?80       #105                 ?1                  	;0
	183  64    DO_FCALL_BY_NAME/131      ?65       ?0                   ?0                  	;0
	184  65    GOTO/253                  ?0        ?1456                ?152                	;0
	185  67    INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'set_time_limit'	;1	<<45
	186  67    SEND_VAL_EX/116           ?80       155:30               ?1                  	;0
	187  67    DO_FCALL_BY_NAME/131      ?66       ?0                   ?0                  	;0
	188  68    ASSIGN/38                 ?67       16?5                 156:array (
  'result' => true,
  'streams' => 
  array (
  ),
)	;0
	189  69    INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'exec'          	;2
	190  69    FETCH_CONSTANT/99         #109=     ?0                   159:'STREAMS_PATH'  	;16
	191  69    CONCAT/8                  #110=     162:'ls -l '         #109                	;0
	192  69    SEND_VAL_EX/116           ?80       #110                 ?1                  	;0
	193  69    SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	194  69    DO_FCALL_BY_NAME/131      ?70       ?0                   ?0                  	;0
	195  70    FE_RESET_R/77             $112=     16?6                 ?246                	;0
	196  70    FE_FETCH_R/78             ?0        $112                 16?7                	;246	>>246	<<245
	197  71    INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'explode'       	;2
	198  71    SEND_VAL_EX/116           ?80       165:' '              ?1                  	;0
	199  71    INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'preg_replace'  	;3
	200  71    SEND_VAL_EX/116           ?80       168:'!\\s+!'         ?1                  	;0
	201  71    SEND_VAL_EX/116           ?96       169:' '              ?2                  	;0
	202  71    SEND_VAR_EX/66            ?112      16?7                 ?3                  	;0
	203  71    DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
	204  71    SEND_VAR_NO_REF_EX/50     ?96       $113                 ?2                  	;0
	205  71    DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
	206  71    ASSIGN/38                 ?74       16?8                 $114                	;0
	207  72    INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'explode'       	;2
	208  72    SEND_VAL_EX/116           ?80       172:'_'              ?1                  	;0
	209  72    INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'count'         	;1
	210  72    SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	211  72    DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
	212  72    SUB/2                     #117=     $116                 175:1               	;0
	213  72    FETCH_DIM_FUNC_ARG/93     $118=     16?8                 #117                	;2
	214  72    SEND_VAR_EX/66            ?96       $118                 ?2                  	;0
	215  72    DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
	216  72    ASSIGN/38                 ?79       16?9                 $119                	;0
	217  73    INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'count'         	;1
	218  73    SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	219  73    DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	220  73    IS_EQUAL/17               #122=     $121                 178:2               	;0
	221  73    BOOL_NOT/13               #123=     #122                 ?0                  	;0
	222  73    JMPZ/43                   ?0        #123                 ?225                	;0	>>225
	223  74    NOP/0                     ?0        ?0                   ?0                  	;1
	224  74    GOTO/253                  ?0        ?245                 ?179                	;0
	225  76    INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'intval'        	;1	<<222
	226  76    FETCH_DIM_FUNC_ARG/93     $124=     16?9                 182:0               	;1
	227  76    SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
	228  76    DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
	229  76    ASSIGN/38                 ?85       16?4                 $125                	;0
	230  77    INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'intval'        	;1
	231  77    FETCH_DIM_FUNC_ARG/93     $127=     16?8                 185:4               	;1
	232  77    SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
	233  77    DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
	234  77    ASSIGN/38                 ?88       16?10                $128                	;0
	235  78    IS_SMALLER/19             #130=     186:0                16?4                	;0
	236  78    IS_SMALLER/19             #131=     187:0                16?10               	;0
	237  78    BW_AND/10                 #132=     #130                 #131                	;0
	238  78    BOOL_NOT/13               #133=     #132                 ?0                  	;0
	239  78    JMPZ/43                   ?0        #133                 ?242                	;0	>>242
	240  79    NOP/0                     ?0        ?0                   ?0                  	;1
	241  79    GOTO/253                  ?0        ?245                 ?188                	;0
	242  81    FETCH_DIM_RW/87           $134=     16?5                 189:'streams'       	;0	<<239
	243  81    ASSIGN_ADD/23             ?94       $134                 16?4                	;147
	244  81    OP_DATA/137               ?0        16?10                ?0                  	;0
	245  84    JMP/42                    ?0        ?196                 ?0                  	;0	>>196
	246  84    FE_FREE/127               ?0        $112                 ?0                  	;0	<<195
	247  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'json_encode'   	;1
	248  87    SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	249  87    DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
	250  87    ECHO/40                   ?0        $136                 ?0                  	;0
	251  88    EXIT/79                   ?0        ?0                   ?0                  	;0
	252  90    FETCH_STATIC_PROP_IS/176  $137=     192:'rRequest'       193:'XUI'           	;0	<<47
	253  90    ISSET_ISEMPTY_DIM_OBJ/115 #138=     $137                 195:'stream_ids'    	;16777216
	254  90    BOOL_NOT/13               #139=     #138                 ?0                  	;0
	255  90    JMPZ_EX/46                #139=     #139                 ?260                	;0	>>260
	256  90    FETCH_STATIC_PROP_IS/176  $140=     196:'rRequest'       197:'XUI'           	;0
	257  90    ISSET_ISEMPTY_DIM_OBJ/115 #141=     $140                 199:'function'      	;16777216
	258  90    BOOL_NOT/13               #142=     #141                 ?0                  	;0
	259  90    BOOL/52                   #139=     #142                 ?0                  	;0
	260  90    BOOL_NOT/13               #143=     #139                 ?0                  	;0	<<255
	261  90    JMPZ/43                   ?0        #143                 ?263                	;0	>>263
	262  91    GOTO/253                  ?0        ?321                 ?200                	;0
	263  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'array_map'     	;2	<<261
	264  93    SEND_VAL_EX/116           ?80       203:'intval'         ?1                  	;0
	265  93    FETCH_STATIC_PROP_FUNC_ARG/177 $144=     204:'rRequest'       205:'XUI'           	;2
	266  93    FETCH_DIM_FUNC_ARG/93     $145=     $144                 207:'stream_ids'    	;2
	267  93    SEND_VAR_EX/66            ?96       $145                 ?2                  	;0
	268  93    DO_FCALL_BY_NAME/131      $146=     ?0                   ?0                  	;0
	269  93    ASSIGN/38                 ?106      16?11                $146                	;0
	270  94    FETCH_STATIC_PROP_R/173   $148=     208:'rRequest'       209:'XUI'           	;0
	271  94    FETCH_DIM_R/81            $149=     $148                 211:'function'      	;0
	272  94    ASSIGN/38                 ?109      16?12                $149                	;0
	273  95    SWITCH_STRING/188         ?0        16?12                212:array (
  'start' => 279,
  'stop' => 309,
)	;321
	274  96    CASE/48                   #151=     16?12                213:'start'         	;0	>>276
	275  96    JMPNZ/44                  ?0        #151                 ?279                	;0	>>279
	276  112   CASE/48                   #151=     16?12                214:'stop'          	;0	>>278	<<274
	277  112   JMPNZ/44                  ?0        #151                 ?309                	;0	>>309
	278  112   JMP/42                    ?0        ?321                 ?0                  	;0	>>321	<<276
	279  97    FE_RESET_R/77             $152=     16?11                ?303                	;0	<<275
	280  97    FE_FETCH_R/78             ?0        $152                 16?4                	;303	>>303	<<302
	281  98    INIT_STATIC_METHOD_CALL/113 ?0        215:'XUI'            217:'d6cC5a7De37FA642'	;2
	282  98    SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	283  98    SEND_VAL_EX/116           ?96       219:true             ?2                  	;0
	284  98    DO_FCALL/60               ?112      ?0                   ?0                  	;0
	285  99    FETCH_STATIC_PROP_IS/176  $154=     220:'rRequest'       221:'XUI'           	;0
	286  99    ISSET_ISEMPTY_DIM_OBJ/115 #155=     $154                 223:'force'         	;33554432
	287  99    JMPZ_EX/46                #155=     #155                 ?291                	;0	>>291
	288  99    FETCH_STATIC_PROP_R/173   $156=     224:'rRequest'       225:'XUI'           	;0
	289  99    FETCH_DIM_R/81            $157=     $156                 227:'force'         	;0
	290  99    BOOL/52                   #155=     $157                 ?0                  	;0
	291  99    JMPZ/43                   ?0        #155                 ?294                	;0	>>294	<<287
	292  100   NOP/0                     ?0        ?0                   ?0                  	;1
	293  100   GOTO/253                  ?0        ?299                 ?228                	;0
	294  102   INIT_STATIC_METHOD_CALL/113 ?0        229:'XUI'            231:'queueMovie'    	;1	<<291
	295  102   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	296  102   DO_FCALL/60               ?117      ?0                   ?0                  	;0
	297  103   NOP/0                     ?0        ?0                   ?0                  	;1
	298  103   GOTO/253                  ?0        ?302                 ?233                	;0
	299  105   INIT_STATIC_METHOD_CALL/113 ?0        234:'XUI'            236:'a0D6DA3165B447b7'	;1
	300  105   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	301  105   DO_FCALL/60               ?118      ?0                   ?0                  	;0
	302  107   JMP/42                    ?0        ?280                 ?0                  	;0	>>280
	303  107   FE_FREE/127               ?0        $152                 ?0                  	;0	<<279
	304  110   INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'json_encode'   	;1
	305  110   SEND_VAL_EX/116           ?80       240:array (
  'result' => true,
) ?1                  	;0
	306  110   DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
	307  110   ECHO/40                   ?0        $160                 ?0                  	;0
	308  111   EXIT/79                   ?0        ?0                   ?0                  	;0
	309  113   FE_RESET_R/77             $161=     16?11                ?315                	;0	<<277
	310  113   FE_FETCH_R/78             ?0        $161                 16?4                	;315	>>315	<<314
	311  114   INIT_STATIC_METHOD_CALL/113 ?0        241:'XUI'            243:'d6cC5a7DE37fA642'	;1
	312  114   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	313  114   DO_FCALL/60               ?121      ?0                   ?0                  	;0
	314  115   JMP/42                    ?0        ?310                 ?0                  	;0	>>310
	315  115   FE_FREE/127               ?0        $161                 ?0                  	;0	<<309
	316  118   INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'json_encode'   	;1
	317  118   SEND_VAL_EX/116           ?80       247:array (
  'result' => true,
) ?1                  	;0
	318  118   DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
	319  118   ECHO/40                   ?0        $163                 ?0                  	;0
	320  119   EXIT/79                   ?0        ?0                   ?0                  	;0
	321  124   GOTO/253                  ?0        ?1456                ?248                	;0	<<278
	322  126   INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'json_encode'   	;1	<<49
	323  126   INIT_STATIC_METHOD_CALL/113 ?0        251:'XUI'            253:'E5AF2E0e9Ad188b4'	;0
	324  126   DO_FCALL/60               $164=     ?0                   ?0                  	;0
	325  126   SEND_VAR_NO_REF_EX/50     ?80       $164                 ?1                  	;0
	326  126   DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
	327  126   ECHO/40                   ?0        $165                 ?0                  	;0
	328  127   GOTO/253                  ?0        ?1456                ?255                	;0
	329  129   INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'intval'        	;1	<<51
	330  129   FETCH_STATIC_PROP_FUNC_ARG/177 $166=     258:'rRequest'       259:'XUI'           	;1
	331  129   FETCH_DIM_FUNC_ARG/93     $167=     $166                 261:'pid'           	;1
	332  129   SEND_VAR_EX/66            ?80       $167                 ?1                  	;0
	333  129   DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
	334  129   ASSIGN/38                 ?128      16?13                $168                	;0
	335  130   IS_SMALLER/19             #170=     262:0                16?13               	;0
	336  130   JMPZ/43                   ?0        #170                 ?338                	;0	>>338
	337  131   GOTO/253                  ?0        ?343                 ?263                	;0
	338  133   INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'json_encode'   	;1	<<336
	339  133   SEND_VAL_EX/116           ?80       266:array (
  'result' => false,
) ?1                  	;0
	340  133   DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
	341  133   ECHO/40                   ?0        $171                 ?0                  	;0
	342  134   GOTO/253                  ?0        ?351                 ?267                	;0
	343  136   INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'posix_kill'    	;2
	344  136   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	345  136   SEND_VAL_EX/116           ?96       270:9                ?2                  	;0
	346  136   DO_FCALL_BY_NAME/131      ?131      ?0                   ?0                  	;0
	347  137   INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'json_encode'   	;1
	348  137   SEND_VAL_EX/116           ?80       273:array (
  'result' => true,
) ?1                  	;0
	349  137   DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
	350  137   ECHO/40                   ?0        $173                 ?0                  	;0
	351  139   GOTO/253                  ?0        ?1456                ?274                	;0
	352  141   FETCH_STATIC_PROP_R/173   $174=     275:'rRequest'       276:'XUI'           	;0	<<53
	353  141   FETCH_DIM_R/81            $175=     $174                 278:'name'          	;0
	354  141   ASSIGN/38                 ?135      16?14                $175                	;0
	355  142   INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'shell_exec'    	;1
	356  142   FETCH_CONSTANT/99         #178=     ?0                   284:'SERVER_ID'     	;16
	357  142   FETCH_STATIC_PROP_R/173   $177=     281:'rServers'       282:'XUI'           	;0
	358  142   FETCH_DIM_R/81            $179=     $177                 #178                	;0
	359  142   FETCH_DIM_R/81            $180=     $179                 287:'rtmp_mport_url'	;0
	360  142   CONCAT/8                  #181=     288:'wget --timeout=2 -O /dev/null -o /dev/null "' $180                	;0
	361  142   CONCAT/8                  #182=     #181                 289:'control/drop/publisher?app=live&name='	;0
	362  142   INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'escapeshellcmd'	;1
	363  142   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	364  142   DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
	365  142   CONCAT/8                  #184=     #182                 $183                	;0
	366  142   CONCAT/8                  #185=     #184                 292:'" >/dev/null 2>/dev/null &'	;0
	367  142   SEND_VAL_EX/116           ?80       #185                 ?1                  	;0
	368  142   DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
	369  143   INIT_FCALL_BY_NAME/59     ?0        ?0                   293:'json_encode'   	;1
	370  143   SEND_VAL_EX/116           ?80       295:array (
  'result' => true,
) ?1                  	;0
	371  143   DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
	372  143   ECHO/40                   ?0        $187                 ?0                  	;0
	373  144   EXIT/79                   ?0        ?0                   ?0                  	;0
	374  146   FETCH_STATIC_PROP_IS/176  $188=     296:'rRequest'       297:'XUI'           	;0	<<55
	375  146   ISSET_ISEMPTY_DIM_OBJ/115 #189=     $188                 299:'stream_ids'    	;16777216
	376  146   BOOL_NOT/13               #190=     #189                 ?0                  	;0
	377  146   JMPZ_EX/46                #190=     #190                 ?382                	;0	>>382
	378  146   FETCH_STATIC_PROP_IS/176  $191=     300:'rRequest'       301:'XUI'           	;0
	379  146   ISSET_ISEMPTY_DIM_OBJ/115 #192=     $191                 303:'function'      	;16777216
	380  146   BOOL_NOT/13               #193=     #192                 ?0                  	;0
	381  146   BOOL/52                   #190=     #193                 ?0                  	;0
	382  146   BOOL_NOT/13               #194=     #190                 ?0                  	;0	<<377
	383  146   JMPZ/43                   ?0        #194                 ?385                	;0	>>385
	384  147   GOTO/253                  ?0        ?438                 ?304                	;0
	385  149   INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'array_map'     	;2	<<383
	386  149   SEND_VAL_EX/116           ?80       307:'intval'         ?1                  	;0
	387  149   FETCH_STATIC_PROP_FUNC_ARG/177 $195=     308:'rRequest'       309:'XUI'           	;2
	388  149   FETCH_DIM_FUNC_ARG/93     $196=     $195                 311:'stream_ids'    	;2
	389  149   SEND_VAR_EX/66            ?96       $196                 ?2                  	;0
	390  149   DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
	391  149   ASSIGN/38                 ?157      16?11                $197                	;0
	392  150   FETCH_STATIC_PROP_R/173   $199=     312:'rRequest'       313:'XUI'           	;0
	393  150   FETCH_DIM_R/81            $200=     $199                 315:'function'      	;0
	394  150   ASSIGN/38                 ?160      16?12                $200                	;0
	395  151   SWITCH_STRING/188         ?0        16?12                316:array (
  'start' => 401,
  'stop' => 425,
)	;438
	396  152   CASE/48                   #202=     16?12                317:'start'         	;0	>>398
	397  152   JMPNZ/44                  ?0        #202                 ?401                	;0	>>401
	398  166   CASE/48                   #202=     16?12                318:'stop'          	;0	>>400	<<396
	399  166   JMPNZ/44                  ?0        #202                 ?425                	;0	>>425
	400  166   JMP/42                    ?0        ?438                 ?0                  	;0	>>438	<<398
	401  153   FE_RESET_R/77             $203=     16?11                ?419                	;0	<<397
	402  153   FE_FETCH_R/78             ?0        $203                 16?4                	;419	>>419	<<418
	403  154   INIT_STATIC_METHOD_CALL/113 ?0        319:'XUI'            321:'b820C3eB85eBD48C'	;2
	404  154   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	405  154   SEND_VAL_EX/116           ?96       323:true             ?2                  	;0
	406  154   DO_FCALL/60               $204=     ?0                   ?0                  	;0
	407  154   JMPZ/43                   ?0        $204                 ?410                	;0	>>410
	408  155   NOP/0                     ?0        ?0                   ?0                  	;1
	409  155   GOTO/253                  ?0        ?415                 ?324                	;0
	410  157   INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'json_encode'   	;1	<<407
	411  157   SEND_VAL_EX/116           ?80       327:array (
  'result' => false,
) ?1                  	;0
	412  157   DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
	413  157   ECHO/40                   ?0        $205                 ?0                  	;0
	414  158   EXIT/79                   ?0        ?0                   ?0                  	;0
	415  160   INIT_FCALL_BY_NAME/59     ?0        ?0                   328:'usleep'        	;1
	416  160   SEND_VAL_EX/116           ?80       330:50000            ?1                  	;0
	417  160   DO_FCALL_BY_NAME/131      ?165      ?0                   ?0                  	;0
	418  161   JMP/42                    ?0        ?402                 ?0                  	;0	>>402
	419  161   FE_FREE/127               ?0        $203                 ?0                  	;0	<<401
	420  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   331:'json_encode'   	;1
	421  164   SEND_VAL_EX/116           ?80       333:array (
  'result' => true,
) ?1                  	;0
	422  164   DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
	423  164   ECHO/40                   ?0        $207                 ?0                  	;0
	424  165   EXIT/79                   ?0        ?0                   ?0                  	;0
	425  167   FE_RESET_R/77             $208=     16?11                ?432                	;0	<<399
	426  167   FE_FETCH_R/78             ?0        $208                 16?4                	;432	>>432	<<431
	427  168   INIT_STATIC_METHOD_CALL/113 ?0        334:'XUI'            336:'Ee173b194544B3A2'	;2
	428  168   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	429  168   SEND_VAL_EX/116           ?96       338:true             ?2                  	;0
	430  168   DO_FCALL/60               ?168      ?0                   ?0                  	;0
	431  169   JMP/42                    ?0        ?426                 ?0                  	;0	>>426
	432  169   FE_FREE/127               ?0        $208                 ?0                  	;0	<<425
	433  172   INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'json_encode'   	;1
	434  172   SEND_VAL_EX/116           ?80       341:array (
  'result' => true,
) ?1                  	;0
	435  172   DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
	436  172   ECHO/40                   ?0        $210                 ?0                  	;0
	437  173   EXIT/79                   ?0        ?0                   ?0                  	;0
	438  178   GOTO/253                  ?0        ?1456                ?342                	;0	<<400
	439  180   INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'json_encode'   	;1	<<57
	440  180   INIT_STATIC_METHOD_CALL/113 ?0        345:'XUI'            347:'afF015c358eb0964'	;0
	441  180   DO_FCALL/60               $211=     ?0                   ?0                  	;0
	442  180   SEND_VAR_NO_REF_EX/50     ?80       $211                 ?1                  	;0
	443  180   DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
	444  180   ECHO/40                   ?0        $212                 ?0                  	;0
	445  181   EXIT/79                   ?0        ?0                   ?0                  	;0
	446  183   INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'intval'        	;1	<<59
	447  183   FETCH_STATIC_PROP_FUNC_ARG/177 $213=     351:'rRequest'       352:'XUI'           	;1
	448  183   FETCH_DIM_FUNC_ARG/93     $214=     $213                 354:'stream_id'     	;1
	449  183   SEND_VAR_EX/66            ?80       $214                 ?1                  	;0
	450  183   DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
	451  183   ASSIGN/38                 ?175      16?4                 $215                	;0
	452  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   355:'intval'        	;1
	453  184   FETCH_STATIC_PROP_FUNC_ARG/177 $217=     357:'rRequest'       358:'XUI'           	;1
	454  184   FETCH_DIM_FUNC_ARG/93     $218=     $217                 360:'force_id'      	;1
	455  184   SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
	456  184   DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
	457  184   ASSIGN/38                 ?179      16?15                $219                	;0
	458  185   IS_SMALLER/19             #221=     361:0                16?4                	;0
	459  185   BOOL_NOT/13               #222=     #221                 ?0                  	;0
	460  185   JMPZ/43                   ?0        #222                 ?462                	;0	>>462
	461  186   GOTO/253                  ?0        ?470                 ?362                	;0
	462  188   INIT_FCALL_BY_NAME/59     ?0        ?0                   363:'file_put_contents'	;2	<<460
	463  188   FETCH_CONSTANT/99         #223=     ?0                   365:'SIGNALS_TMP_PATH'	;16
	464  188   NOP/0                     ?0        ?0                   ?0                  	;0
	465  188   FAST_CONCAT/53            #224=     16?4                 368:'.force'        	;0
	466  188   CONCAT/8                  #225=     #223                 #224                	;0
	467  188   SEND_VAL_EX/116           ?80       #225                 ?1                  	;0
	468  188   SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
	469  188   DO_FCALL_BY_NAME/131      ?185      ?0                   ?0                  	;0
	470  190   INIT_FCALL_BY_NAME/59     ?0        ?0                   369:'json_encode'   	;1
	471  190   SEND_VAL_EX/116           ?80       371:array (
  'result' => true,
) ?1                  	;0
	472  190   DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
	473  190   EXIT/79                   ?0        $227                 ?0                  	;0
	474  192   INIT_STATIC_METHOD_CALL/113 ?0        372:'XUI'            374:'b0020c716fDF67BB'	;1	<<61
	475  192   INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'intval'        	;1
	476  192   FETCH_STATIC_PROP_FUNC_ARG/177 $228=     378:'rRequest'       379:'XUI'           	;1
	477  192   FETCH_DIM_FUNC_ARG/93     $229=     $228                 381:'activity_id'   	;1
	478  192   SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
	479  192   DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
	480  192   SEND_VAR_NO_REF_EX/50     ?80       $230                 ?1                  	;0
	481  192   DO_FCALL/60               ?190      ?0                   ?0                  	;0
	482  193   INIT_FCALL_BY_NAME/59     ?0        ?0                   382:'json_encode'   	;1
	483  193   SEND_VAL_EX/116           ?80       384:array (
  'result' => true,
) ?1                  	;0
	484  193   DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
	485  193   EXIT/79                   ?0        $232                 ?0                  	;0
	486  195   FETCH_STATIC_PROP_IS/176  $233=     385:'rRequest'       386:'XUI'           	;0	<<63
	487  195   ISSET_ISEMPTY_DIM_OBJ/115 #234=     $233                 388:'pids'          	;16777216
	488  195   BOOL_NOT/13               #235=     #234                 ?0                  	;0
	489  195   JMPZ_EX/46                #235=     #235                 ?496                	;0	>>496
	490  195   INIT_FCALL_BY_NAME/59     ?0        ?0                   389:'is_array'      	;1
	491  195   FETCH_STATIC_PROP_FUNC_ARG/177 $236=     391:'rRequest'       392:'XUI'           	;1
	492  195   FETCH_DIM_FUNC_ARG/93     $237=     $236                 394:'pids'          	;1
	493  195   SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
	494  195   DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
	495  195   BOOL/52                   #235=     $238                 ?0                  	;0
	496  195   JMPZ_EX/46                #235=     #235                 ?501                	;0	>>501	<<489
	497  195   FETCH_STATIC_PROP_IS/176  $239=     395:'rRequest'       396:'XUI'           	;0
	498  195   ISSET_ISEMPTY_DIM_OBJ/115 #240=     $239                 398:'program'       	;16777216
	499  195   BOOL_NOT/13               #241=     #240                 ?0                  	;0
	500  195   BOOL/52                   #235=     #241                 ?0                  	;0
	501  195   BOOL_NOT/13               #242=     #235                 ?0                  	;0	<<496
	502  195   JMPZ/43                   ?0        #242                 ?504                	;0	>>504
	503  196   GOTO/253                  ?0        ?561                 ?399                	;0
	504  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'array_map'     	;2	<<502
	505  198   SEND_VAL_EX/116           ?80       402:'intval'         ?1                  	;0
	506  198   FETCH_STATIC_PROP_FUNC_ARG/177 $243=     403:'rRequest'       404:'XUI'           	;2
	507  198   FETCH_DIM_FUNC_ARG/93     $244=     $243                 406:'pids'          	;2
	508  198   SEND_VAR_EX/66            ?96       $244                 ?2                  	;0
	509  198   DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
	510  198   ASSIGN/38                 ?205      16?16                $245                	;0
	511  199   FETCH_STATIC_PROP_R/173   $247=     407:'rRequest'       408:'XUI'           	;0
	512  199   FETCH_DIM_R/81            $248=     $247                 410:'program'       	;0
	513  199   ASSIGN/38                 ?208      16?17                $248                	;0
	514  200   ASSIGN/38                 ?209      16?18                411:array (
)       	;0
	515  201   FE_RESET_R/77             $251=     16?16                ?555                	;0
	516  201   FE_FETCH_R/78             ?0        $251                 16?13               	;555	>>555	<<554
	517  202   ASSIGN_DIM/147            ?211      16?18                16?13               	;0
	518  202   OP_DATA/137               ?0        412:false            ?0                  	;0
	519  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   413:'file_exists'   	;1
	520  203   CONCAT/8                  #253=     415:'/proc/'         16?13               	;0
	521  203   SEND_VAL_EX/116           ?80       #253                 ?1                  	;0
	522  203   DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
	523  203   JMPZ_EX/46                #255=     $254                 ?530                	;0	>>530
	524  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'is_readable'   	;1
	525  203   CONCAT/8                  #256=     418:'/proc/'         16?13               	;0
	526  203   CONCAT/8                  #257=     #256                 419:'/exe'          	;0
	527  203   SEND_VAL_EX/116           ?80       #257                 ?1                  	;0
	528  203   DO_FCALL_BY_NAME/131      $258=     ?0                   ?0                  	;0
	529  203   BOOL/52                   #255=     $258                 ?0                  	;0
	530  203   JMPZ_EX/46                #255=     #255                 ?548                	;0	>>548	<<523
	531  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'strpos'        	;2
	532  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'basename'      	;1
	533  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'readlink'      	;1
	534  203   CONCAT/8                  #259=     426:'/proc/'         16?13               	;0
	535  203   CONCAT/8                  #260=     #259                 427:'/exe'          	;0
	536  203   SEND_VAL_EX/116           ?80       #260                 ?1                  	;0
	537  203   DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
	538  203   SEND_VAR_NO_REF_EX/50     ?80       $261                 ?1                  	;0
	539  203   DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
	540  203   SEND_VAR_NO_REF_EX/50     ?80       $262                 ?1                  	;0
	541  203   INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'basename'      	;1
	542  203   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	543  203   DO_FCALL_BY_NAME/131      $263=     ?0                   ?0                  	;0
	544  203   SEND_VAR_NO_REF_EX/50     ?96       $263                 ?2                  	;0
	545  203   DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
	546  203   IS_IDENTICAL/15           #265=     $264                 430:0               	;0
	547  203   BOOL/52                   #255=     #265                 ?0                  	;0
	548  203   BOOL_NOT/13               #266=     #255                 ?0                  	;0	<<530
	549  203   JMPZ/43                   ?0        #266                 ?552                	;0	>>552
	550  204   NOP/0                     ?0        ?0                   ?0                  	;1
	551  204   GOTO/253                  ?0        ?554                 ?431                	;0
	552  206   ASSIGN_DIM/147            ?226      16?18                16?13               	;0	<<549
	553  206   OP_DATA/137               ?0        432:true             ?0                  	;0
	554  208   JMP/42                    ?0        ?516                 ?0                  	;0	>>516
	555  208   FE_FREE/127               ?0        $251                 ?0                  	;0	<<515
	556  211   INIT_FCALL_BY_NAME/59     ?0        ?0                   433:'json_encode'   	;1
	557  211   SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
	558  211   DO_FCALL_BY_NAME/131      $268=     ?0                   ?0                  	;0
	559  211   ECHO/40                   ?0        $268                 ?0                  	;0
	560  212   EXIT/79                   ?0        ?0                   ?0                  	;0
	561  214   GOTO/253                  ?0        ?1456                ?435                	;0
	562  216   GOTO/253                  ?0        ?644                 ?436                	;0	<<65
	563  218   IS_SMALLER/19             #269=     16?20                16?19               	;0
	564  218   JMPNZ_EX/47               #269=     #269                 ?568                	;0	>>568
	565  218   SUB/2                     #270=     16?21                437:1               	;0
	566  218   IS_SMALLER/19             #271=     #270                 16?19               	;0
	567  218   BOOL/52                   #269=     #271                 ?0                  	;0
	568  218   JMPNZ_EX/47               #269=     #269                 ?571                	;0	>>571	<<564
	569  218   IS_SMALLER_OR_EQUAL/20    #272=     16?21                16?20               	;0
	570  218   BOOL/52                   #269=     #272                 ?0                  	;0
	571  218   BOOL_NOT/13               #273=     #269                 ?0                  	;0	<<568
	572  218   JMPZ/43                   ?0        #273                 ?574                	;0	>>574
	573  219   GOTO/253                  ?0        ?587                 ?438                	;0
	574  221   INIT_FCALL_BY_NAME/59     ?0        ?0                   439:'header'        	;1	<<572
	575  221   SEND_VAL_EX/116           ?80       441:'HTTP/1.1 416 Requested Range Not Satisfiable' ?1                  	;0
	576  221   DO_FCALL_BY_NAME/131      ?233      ?0                   ?0                  	;0
	577  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   442:'header'        	;1
	578  222   ROPE_INIT/54              #276=     ?0                   444:'Content-Range: bytes '	;6
	579  222   ROPE_ADD/55               #276=     #276                 16?22               	;1
	580  222   ROPE_ADD/55               #276=     #276                 445:'-'             	;2
	581  222   ROPE_ADD/55               #276=     #276                 16?23               	;3
	582  222   ROPE_ADD/55               #276=     #276                 446:'/'             	;4
	583  222   ROPE_END/56               #275=     #276                 16?21               	;5
	584  222   SEND_VAL_EX/116           ?80       #275                 ?1                  	;0
	585  222   DO_FCALL_BY_NAME/131      ?238      ?0                   ?0                  	;0
	586  223   EXIT/79                   ?0        ?0                   ?0                  	;0
	587  225   GOTO/253                  ?0        ?773                 ?447                	;0
	588  227   ASSIGN/38                 ?239      16?22                448:0               	;0
	589  228   SUB/2                     #281=     16?21                449:1               	;0
	590  228   ASSIGN/38                 ?241      16?23                #281                	;0
	591  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   450:'header'        	;1
	592  229   NOP/0                     ?0        ?0                   ?0                  	;0
	593  229   FAST_CONCAT/53            #283=     452:'Accept-Ranges: 0-' 16?24               	;0
	594  229   SEND_VAL_EX/116           ?80       #283                 ?1                  	;0
	595  229   DO_FCALL_BY_NAME/131      ?243      ?0                   ?0                  	;0
	596  230   FETCH_IS/89               $285=     453:'_SERVER'        ?0                  	;0
	597  230   ISSET_ISEMPTY_DIM_OBJ/115 #286=     $285                 454:'HTTP_RANGE'    	;33554432
	598  230   BOOL_NOT/13               #287=     #286                 ?0                  	;0
	599  230   JMPZ/43                   ?0        #287                 ?601                	;0	>>601
	600  231   GOTO/253                  ?0        ?603                 ?455                	;0
	601  233   ASSIGN/38                 ?247      16?20                16?23               	;0	<<599
	602  234   GOTO/253                  ?0        ?741                 ?456                	;0
	603  237   INIT_FCALL_BY_NAME/59     ?0        ?0                   457:'header'        	;1
	604  237   ROPE_INIT/54              #290=     ?0                   459:'Content-Range: bytes '	;6
	605  237   ROPE_ADD/55               #290=     #290                 16?22               	;1
	606  237   ROPE_ADD/55               #290=     #290                 460:'-'             	;2
	607  237   ROPE_ADD/55               #290=     #290                 16?23               	;3
	608  237   ROPE_ADD/55               #290=     #290                 461:'/'             	;4
	609  237   ROPE_END/56               #289=     #290                 16?21               	;5
	610  237   SEND_VAL_EX/116           ?80       #289                 ?1                  	;0
	611  237   DO_FCALL_BY_NAME/131      ?252      ?0                   ?0                  	;0
	612  238   INIT_FCALL_BY_NAME/59     ?0        ?0                   462:'header'        	;1
	613  238   CONCAT/8                  #294=     464:'Content-Length: ' 16?24               	;0
	614  238   SEND_VAL_EX/116           ?80       #294                 ?1                  	;0
	615  238   DO_FCALL_BY_NAME/131      ?254      ?0                   ?0                  	;0
	616  240   INIT_FCALL_BY_NAME/59     ?0        ?0                   465:'feof'          	;1
	617  240   SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	618  240   DO_FCALL_BY_NAME/131      $296=     ?0                   ?0                  	;0
	619  240   BOOL_NOT/13               #297=     $296                 ?0                  	;0
	620  240   JMPZ_EX/46                #297=     #297                 ?626                	;0	>>626
	621  240   INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'ftell'         	;1
	622  240   SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	623  240   DO_FCALL_BY_NAME/131      $298=     ?0                   ?0                  	;0
	624  240   IS_SMALLER_OR_EQUAL/20    #299=     $298                 16?23               	;0
	625  240   BOOL/52                   #297=     #299                 ?0                  	;0
	626  240   BOOL_NOT/13               #300=     #297                 ?0                  	;0	<<620
	627  240   JMPZ/43                   ?0        #300                 ?629                	;0	>>629
	628  241   GOTO/253                  ?0        ?710                 ?469                	;0
	629  243   GOTO/253                  ?0        ?697                 ?470                	;0	<<627
	630  245   GOTO/253                  ?0        ?637                 ?471                	;0
	631  247   INIT_FCALL_BY_NAME/59     ?0        ?0                   472:'substr'        	;2
	632  247   SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	633  247   SEND_VAL_EX/116           ?96       474:1                ?2                  	;0
	634  247   DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
	635  247   SUB/2                     #302=     16?21                $301                	;0
	636  247   ASSIGN/38                 ?262      16?19                #302                	;0
	637  249   IS_SMALLER/19             #304=     16?23                16?20               	;0
	638  249   JMPZ/43                   ?0        #304                 ?641                	;0	>>641
	639  249   QM_ASSIGN/22              #305=     16?23                ?0                  	;0
	640  249   JMP/42                    ?0        ?642                 ?0                  	;0	>>642
	641  249   QM_ASSIGN/22              #305=     16?20                ?0                  	;0	<<638
	642  249   ASSIGN/38                 ?265      16?20                #305                	;0	<<640
	643  250   GOTO/253                  ?0        ?563                 ?475                	;0
	644  252   FETCH_STATIC_PROP_IS/176  $307=     476:'rRequest'       477:'XUI'           	;0
	645  252   ISSET_ISEMPTY_DIM_OBJ/115 #308=     $307                 479:'filename'      	;16777216
	646  252   JMPZ/43                   ?0        #308                 ?648                	;0	>>648
	647  253   GOTO/253                  ?0        ?739                 ?480                	;0
	648  255   FETCH_STATIC_PROP_R/173   $309=     481:'rRequest'       482:'XUI'           	;0	<<646
	649  255   FETCH_DIM_R/81            $310=     $309                 484:'filename'      	;0
	650  255   ASSIGN/38                 ?270      16?27                $310                	;0
	651  256   INIT_FCALL_BY_NAME/59     ?0        ?0                   485:'in_array'      	;2
	652  256   INIT_FCALL_BY_NAME/59     ?0        ?0                   487:'strtolower'    	;1
	653  256   INIT_FCALL_BY_NAME/59     ?0        ?0                   489:'pathinfo'      	;1
	654  256   SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	655  256   DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
	656  256   SEPARATE/156              $312=     $312                 ?0                  	;0
	657  256   FETCH_DIM_FUNC_ARG/93     $313=     $312                 491:'extension'     	;1
	658  256   SEND_VAR_EX/66            ?80       $313                 ?1                  	;0
	659  256   DO_FCALL_BY_NAME/131      $314=     ?0                   ?0                  	;0
	660  256   SEND_VAR_NO_REF_EX/50     ?80       $314                 ?1                  	;0
	661  256   SEND_VAL_EX/116           ?96       492:array (
  0 => 'log',
  1 => 'tar.gz',
  2 => 'gz',
  3 => 'zip',
  4 => 'm3u8',
  5 => 'mp4',
  6 => 'mkv',
  7 => 'avi',
  8 => 'mpg',
  9 => 'flv',
  10 => '3gp',
  11 => 'm4v',
  12 => 'wmv',
  13 => 'mov',
  14 => 'ts',
  15 => 'srt',
  16 => 'sub',
  17 => 'sbv',
  18 => 'jpg',
  19 => 'png',
  20 => 'bmp',
  21 => 'jpeg',
  22 => 'gif',
  23 => 'tif',
) ?2                  	;0
	662  256   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
	663  256   JMPZ/43                   ?0        $315                 ?665                	;0	>>665
	664  257   GOTO/253                  ?0        ?669                 ?493                	;0
	665  259   INIT_FCALL_BY_NAME/59     ?0        ?0                   494:'json_encode'   	;1	<<663
	666  259   SEND_VAL_EX/116           ?80       496:array (
  'result' => false,
  'error' => 'Invalid file extension.',
) ?1                  	;0
	667  259   DO_FCALL_BY_NAME/131      $316=     ?0                   ?0                  	;0
	668  259   EXIT/79                   ?0        $316                 ?0                  	;0
	669  261   GOTO/253                  ?0        ?670                 ?497                	;0
	670  263   INIT_FCALL_BY_NAME/59     ?0        ?0                   498:'file_exists'   	;1
	671  263   SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	672  263   DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
	673  263   JMPZ_EX/46                #318=     $317                 ?678                	;0	>>678
	674  263   INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'is_readable'   	;1
	675  263   SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	676  263   DO_FCALL_BY_NAME/131      $319=     ?0                   ?0                  	;0
	677  263   BOOL/52                   #318=     $319                 ?0                  	;0
	678  263   BOOL_NOT/13               #320=     #318                 ?0                  	;0	<<673
	679  263   JMPZ/43                   ?0        #320                 ?681                	;0	>>681
	680  264   GOTO/253                  ?0        ?713                 ?502                	;0
	681  266   INIT_FCALL_BY_NAME/59     ?0        ?0                   503:'header'        	;1	<<679
	682  266   SEND_VAL_EX/116           ?80       505:'Content-Type: application/octet-stream' ?1                  	;0
	683  266   DO_FCALL_BY_NAME/131      ?280      ?0                   ?0                  	;0
	684  267   BEGIN_SILENCE/57          #322=     ?0                   ?0                  	;0
	685  267   INIT_FCALL_BY_NAME/59     ?0        ?0                   506:'fopen'         	;2
	686  267   SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	687  267   SEND_VAL_EX/116           ?96       508:'rb'             ?2                  	;0
	688  267   DO_FCALL_BY_NAME/131      $323=     ?0                   ?0                  	;0
	689  267   END_SILENCE/58            ?0        #322                 ?0                  	;0
	690  267   ASSIGN/38                 ?283      16?25                $323                	;0
	691  268   INIT_FCALL_BY_NAME/59     ?0        ?0                   509:'filesize'      	;1
	692  268   SEND_VAR_EX/66            ?80       16?27                ?1                  	;0
	693  268   DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
	694  268   ASSIGN/38                 ?285      16?21                $325                	;0
	695  269   ASSIGN/38                 ?286      16?24                16?21               	;0
	696  270   GOTO/253                  ?0        ?588                 ?511                	;0
	697  272   INIT_FCALL_BY_NAME/59     ?0        ?0                   512:'stream_get_line'	;2
	698  272   SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	699  272   INIT_FCALL_BY_NAME/59     ?0        ?0                   514:'intval'        	;1
	700  272   FETCH_STATIC_PROP_FUNC_ARG/177 $328=     516:'rSettings'      517:'XUI'           	;1
	701  272   FETCH_DIM_FUNC_ARG/93     $329=     $328                 519:'read_buffer_size'	;1
	702  272   SEND_VAR_EX/66            ?80       $329                 ?1                  	;0
	703  272   DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
	704  272   JMP_SET/152               #331=     $330                 ?706                	;0
	705  272   QM_ASSIGN/22              #331=     520:8192             ?0                  	;0
	706  272   SEND_VAL_EX/116           ?96       #331                 ?2                  	;0
	707  272   DO_FCALL_BY_NAME/131      $332=     ?0                   ?0                  	;0
	708  272   ECHO/40                   ?0        $332                 ?0                  	;0
	709  273   GOTO/253                  ?0        ?616                 ?521                	;0
	710  275   INIT_FCALL_BY_NAME/59     ?0        ?0                   522:'fclose'        	;1
	711  275   SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	712  275   DO_FCALL_BY_NAME/131      ?292      ?0                   ?0                  	;0
	713  277   GOTO/253                  ?0        ?738                 ?524                	;0
	714  280   IS_EQUAL/17               #334=     16?26                525:'-'             	;0
	715  280   JMPZ/43                   ?0        #334                 ?717                	;0	>>717
	716  281   GOTO/253                  ?0        ?631                 ?526                	;0
	717  283   INIT_FCALL_BY_NAME/59     ?0        ?0                   527:'explode'       	;2	<<715
	718  283   SEND_VAL_EX/116           ?80       529:'-'              ?1                  	;0
	719  283   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	720  283   DO_FCALL_BY_NAME/131      $335=     ?0                   ?0                  	;0
	721  283   ASSIGN/38                 ?295      16?26                $335                	;0
	722  284   FETCH_DIM_R/81            $337=     16?26                530:0               	;0
	723  284   ASSIGN/38                 ?297      16?19                $337                	;0
	724  285   ISSET_ISEMPTY_DIM_OBJ/115 #339=     16?26                531:1               	;33554432
	725  285   JMPZ_EX/46                #339=     #339                 ?731                	;0	>>731
	726  285   INIT_FCALL_BY_NAME/59     ?0        ?0                   532:'is_numeric'    	;1
	727  285   FETCH_DIM_FUNC_ARG/93     $340=     16?26                534:1               	;1
	728  285   SEND_VAR_EX/66            ?80       $340                 ?1                  	;0
	729  285   DO_FCALL_BY_NAME/131      $341=     ?0                   ?0                  	;0
	730  285   BOOL/52                   #339=     $341                 ?0                  	;0
	731  285   JMPZ/43                   ?0        #339                 ?735                	;0	>>735	<<725
	732  285   FETCH_DIM_R/81            $342=     16?26                535:1               	;0
	733  285   QM_ASSIGN/22              #343=     $342                 ?0                  	;0
	734  285   JMP/42                    ?0        ?736                 ?0                  	;0	>>736
	735  285   QM_ASSIGN/22              #343=     16?21                ?0                  	;0	<<731
	736  285   ASSIGN/38                 ?303      16?20                #343                	;0	<<734
	737  286   GOTO/253                  ?0        ?630                 ?536                	;0
	738  288   EXIT/79                   ?0        ?0                   ?0                  	;0
	739  290   GOTO/253                  ?0        ?1456                ?537                	;0
	740  291   GOTO/253                  ?0        ?786                 ?538                	;0
	741  293   INIT_FCALL_BY_NAME/59     ?0        ?0                   539:'explode'       	;3
	742  293   SEND_VAL_EX/116           ?80       541:'='              ?1                  	;0
	743  293   FETCH_FUNC_ARG/92         $345=     542:'_SERVER'        ?0                  	;2
	744  293   FETCH_DIM_FUNC_ARG/93     $346=     $345                 543:'HTTP_RANGE'    	;2
	745  293   SEND_VAR_EX/66            ?96       $346                 ?2                  	;0
	746  293   SEND_VAL_EX/116           ?112      544:2                ?3                  	;0
	747  293   DO_FCALL_BY_NAME/131      $347=     ?0                   ?0                  	;0
	748  293   FETCH_LIST/98             $348=     $347                 545:1               	;0
	749  293   ASSIGN/38                 ?308      16?26                $348                	;0
	750  293   FREE/70                   ?0        $347                 ?0                  	;0
	751  294   INIT_FCALL_BY_NAME/59     ?0        ?0                   546:'strpos'        	;2
	752  294   SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	753  294   SEND_VAL_EX/116           ?96       548:','              ?2                  	;0
	754  294   DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
	755  294   IS_NOT_IDENTICAL/16       #351=     $350                 549:false           	;0
	756  294   BOOL_NOT/13               #352=     #351                 ?0                  	;0
	757  294   JMPZ/43                   ?0        #352                 ?759                	;0	>>759
	758  295   GOTO/253                  ?0        ?714                 ?550                	;0
	759  297   INIT_FCALL_BY_NAME/59     ?0        ?0                   551:'header'        	;1	<<757
	760  297   SEND_VAL_EX/116           ?80       553:'HTTP/1.1 416 Requested Range Not Satisfiable' ?1                  	;0
	761  297   DO_FCALL_BY_NAME/131      ?312      ?0                   ?0                  	;0
	762  298   INIT_FCALL_BY_NAME/59     ?0        ?0                   554:'header'        	;1
	763  298   ROPE_INIT/54              #355=     ?0                   556:'Content-Range: bytes '	;6
	764  298   ROPE_ADD/55               #355=     #355                 16?22               	;1
	765  298   ROPE_ADD/55               #355=     #355                 557:'-'             	;2
	766  298   ROPE_ADD/55               #355=     #355                 16?23               	;3
	767  298   ROPE_ADD/55               #355=     #355                 558:'/'             	;4
	768  298   ROPE_END/56               #354=     #355                 16?21               	;5
	769  298   SEND_VAL_EX/116           ?80       #354                 ?1                  	;0
	770  298   DO_FCALL_BY_NAME/131      ?317      ?0                   ?0                  	;0
	771  299   EXIT/79                   ?0        ?0                   ?0                  	;0
	772  300   GOTO/253                  ?0        ?714                 ?559                	;0
	773  302   ASSIGN/38                 ?318      16?22                16?19               	;0
	774  303   ASSIGN/38                 ?319      16?23                16?20               	;0
	775  304   SUB/2                     #361=     16?23                16?22               	;0
	776  304   ADD/1                     #362=     #361                 560:1               	;0
	777  304   ASSIGN/38                 ?322      16?24                #362                	;0
	778  305   INIT_FCALL_BY_NAME/59     ?0        ?0                   561:'fseek'         	;2
	779  305   SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	780  305   SEND_VAR_EX/66            ?96       16?22                ?2                  	;0
	781  305   DO_FCALL_BY_NAME/131      ?323      ?0                   ?0                  	;0
	782  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   563:'header'        	;1
	783  306   SEND_VAL_EX/116           ?80       565:'HTTP/1.1 206 Partial Content' ?1                  	;0
	784  306   DO_FCALL_BY_NAME/131      ?324      ?0                   ?0                  	;0
	785  307   GOTO/253                  ?0        ?603                 ?566                	;0
	786  310   GOTO/253                  ?0        ?803                 ?567                	;0	<<67
	787  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   568:'exec'          	;2
	788  312   SEND_VAR_EX/66            ?80       16?28                ?1                  	;0
	789  312   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	790  312   DO_FCALL_BY_NAME/131      ?325      ?0                   ?0                  	;0
	791  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   570:'json_encode'   	;2
	792  313   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	793  313   FETCH_CONSTANT/99         #367=     ?0                   572:'JSON_UNESCAPED_UNICODE'	;16
	794  313   SEND_VAL_EX/116           ?96       #367                 ?2                  	;0
	795  313   DO_FCALL_BY_NAME/131      $368=     ?0                   ?0                  	;0
	796  313   ECHO/40                   ?0        $368                 ?0                  	;0
	797  314   EXIT/79                   ?0        ?0                   ?0                  	;0
	798  316   INIT_FCALL_BY_NAME/59     ?0        ?0                   575:'json_encode'   	;1
	799  316   SEND_VAL_EX/116           ?80       577:array (
  'result' => false,
) ?1                  	;0
	800  316   DO_FCALL_BY_NAME/131      $369=     ?0                   ?0                  	;0
	801  316   EXIT/79                   ?0        $369                 ?0                  	;0
	802  317   GOTO/253                  ?0        ?852                 ?578                	;0
	803  319   INIT_FCALL_BY_NAME/59     ?0        ?0                   579:'set_time_limit'	;1
	804  319   SEND_VAL_EX/116           ?80       581:30               ?1                  	;0
	805  319   DO_FCALL_BY_NAME/131      ?329      ?0                   ?0                  	;0
	806  320   INIT_FCALL_BY_NAME/59     ?0        ?0                   582:'urldecode'     	;1
	807  320   FETCH_STATIC_PROP_FUNC_ARG/177 $371=     584:'rRequest'       585:'XUI'           	;1
	808  320   FETCH_DIM_FUNC_ARG/93     $372=     $371                 587:'dir'           	;1
	809  320   SEND_VAR_EX/66            ?80       $372                 ?1                  	;0
	810  320   DO_FCALL_BY_NAME/131      $373=     ?0                   ?0                  	;0
	811  320   ASSIGN/38                 ?333      16?29                $373                	;0
	812  321   FETCH_STATIC_PROP_IS/176  $375=     588:'rRequest'       589:'XUI'           	;0
	813  321   ISSET_ISEMPTY_DIM_OBJ/115 #376=     $375                 591:'allowed'       	;16777216
	814  321   BOOL_NOT/13               #377=     #376                 ?0                  	;0
	815  321   JMPZ/43                   ?0        #377                 ?823                	;0	>>823
	816  321   INIT_FCALL_BY_NAME/59     ?0        ?0                   592:'urldecode'     	;1
	817  321   FETCH_STATIC_PROP_FUNC_ARG/177 $378=     594:'rRequest'       595:'XUI'           	;1
	818  321   FETCH_DIM_FUNC_ARG/93     $379=     $378                 597:'allowed'       	;1
	819  321   SEND_VAR_EX/66            ?80       $379                 ?1                  	;0
	820  321   DO_FCALL_BY_NAME/131      $380=     ?0                   ?0                  	;0
	821  321   QM_ASSIGN/22              #381=     $380                 ?0                  	;0
	822  321   JMP/42                    ?0        ?824                 ?0                  	;0	>>824
	823  321   QM_ASSIGN/22              #381=     598:NULL             ?0                  	;0	<<815
	824  321   ASSIGN/38                 ?341      16?30                #381                	;0	<<822
	825  322   INIT_FCALL_BY_NAME/59     ?0        ?0                   599:'file_exists'   	;1
	826  322   SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	827  322   DO_FCALL_BY_NAME/131      $383=     ?0                   ?0                  	;0
	828  322   BOOL_NOT/13               #384=     $383                 ?0                  	;0
	829  322   JMPZ/43                   ?0        #384                 ?831                	;0	>>831
	830  323   GOTO/253                  ?0        ?798                 ?601                	;0
	831  325   JMPZ/43                   ?0        16?30                ?833                	;0	>>833	<<829
	832  326   GOTO/253                  ?0        ?840                 ?602                	;0
	833  328   GOTO/253                  ?0        ?834                 ?603                	;0	<<831
	834  330   INIT_FCALL_BY_NAME/59     ?0        ?0                   604:'escapeshellarg'	;1
	835  330   SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	836  330   DO_FCALL_BY_NAME/131      $385=     ?0                   ?0                  	;0
	837  330   CONCAT/8                  #386=     606:'/usr/bin/find ' $385                	;0
	838  330   ASSIGN/38                 ?346      16?28                #386                	;0
	839  331   GOTO/253                  ?0        ?851                 ?607                	;0
	840  333   INIT_FCALL_BY_NAME/59     ?0        ?0                   608:'escapeshellarg'	;1
	841  333   SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	842  333   DO_FCALL_BY_NAME/131      $388=     ?0                   ?0                  	;0
	843  333   CONCAT/8                  #389=     610:'/usr/bin/find ' $388                	;0
	844  333   CONCAT/8                  #390=     #389                 611:' -regex ".*\\.\\('	;0
	845  333   INIT_FCALL_BY_NAME/59     ?0        ?0                   612:'escapeshellcmd'	;1
	846  333   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	847  333   DO_FCALL_BY_NAME/131      $391=     ?0                   ?0                  	;0
	848  333   CONCAT/8                  #392=     #390                 $391                	;0
	849  333   CONCAT/8                  #393=     #392                 614:'\\)"'          	;0
	850  333   ASSIGN/38                 ?353      16?28                #393                	;0
	851  335   GOTO/253                  ?0        ?787                 ?615                	;0
	852  338   GOTO/253                  ?0        ?853                 ?616                	;0	<<69
	853  340   INIT_FCALL_BY_NAME/59     ?0        ?0                   617:'set_time_limit'	;1
	854  340   SEND_VAL_EX/116           ?80       619:30               ?1                  	;0
	855  340   DO_FCALL_BY_NAME/131      ?354      ?0                   ?0                  	;0
	856  341   INIT_FCALL_BY_NAME/59     ?0        ?0                   620:'urldecode'     	;1
	857  341   FETCH_STATIC_PROP_FUNC_ARG/177 $396=     622:'rRequest'       623:'XUI'           	;1
	858  341   FETCH_DIM_FUNC_ARG/93     $397=     $396                 625:'dir'           	;1
	859  341   SEND_VAR_EX/66            ?80       $397                 ?1                  	;0
	860  341   DO_FCALL_BY_NAME/131      $398=     ?0                   ?0                  	;0
	861  341   ASSIGN/38                 ?358      16?29                $398                	;0
	862  342   FETCH_STATIC_PROP_IS/176  $400=     626:'rRequest'       627:'XUI'           	;0
	863  342   ISSET_ISEMPTY_DIM_OBJ/115 #401=     $400                 629:'allowed'       	;16777216
	864  342   BOOL_NOT/13               #402=     #401                 ?0                  	;0
	865  342   JMPZ/43                   ?0        #402                 ?877                	;0	>>877
	866  342   INIT_FCALL_BY_NAME/59     ?0        ?0                   630:'explode'       	;2
	867  342   SEND_VAL_EX/116           ?80       632:'|'              ?1                  	;0
	868  342   INIT_FCALL_BY_NAME/59     ?0        ?0                   633:'urldecode'     	;1
	869  342   FETCH_STATIC_PROP_FUNC_ARG/177 $403=     635:'rRequest'       636:'XUI'           	;1
	870  342   FETCH_DIM_FUNC_ARG/93     $404=     $403                 638:'allowed'       	;1
	871  342   SEND_VAR_EX/66            ?80       $404                 ?1                  	;0
	872  342   DO_FCALL_BY_NAME/131      $405=     ?0                   ?0                  	;0
	873  342   SEND_VAR_NO_REF_EX/50     ?96       $405                 ?2                  	;0
	874  342   DO_FCALL_BY_NAME/131      $406=     ?0                   ?0                  	;0
	875  342   QM_ASSIGN/22              #407=     $406                 ?0                  	;0
	876  342   JMP/42                    ?0        ?878                 ?0                  	;0	>>878
	877  342   QM_ASSIGN/22              #407=     639:array (
)        ?0                  	;0	<<865
	878  342   ASSIGN/38                 ?367      16?30                #407                	;0	<<876
	879  343   INIT_FCALL_BY_NAME/59     ?0        ?0                   640:'file_exists'   	;1
	880  343   SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	881  343   DO_FCALL_BY_NAME/131      $409=     ?0                   ?0                  	;0
	882  343   BOOL_NOT/13               #410=     $409                 ?0                  	;0
	883  343   JMPZ/43                   ?0        #410                 ?885                	;0	>>885
	884  344   GOTO/253                  ?0        ?887                 ?642                	;0
	885  346   ASSIGN/38                 ?370      16?5                 643:array (
  'result' => true,
  'dirs' => 
  array (
  ),
  'files' => 
  array (
  ),
)	;0	<<883
	886  347   GOTO/253                  ?0        ?892                 ?644                	;0
	887  350   INIT_FCALL_BY_NAME/59     ?0        ?0                   645:'json_encode'   	;1
	888  350   SEND_VAL_EX/116           ?80       647:array (
  'result' => false,
) ?1                  	;0
	889  350   DO_FCALL_BY_NAME/131      $412=     ?0                   ?0                  	;0
	890  350   EXIT/79                   ?0        $412                 ?0                  	;0
	891  351   GOTO/253                  ?0        ?963                 ?648                	;0
	892  353   INIT_FCALL_BY_NAME/59     ?0        ?0                   649:'scanDir'       	;1
	893  353   SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	894  353   DO_FCALL_BY_NAME/131      $413=     ?0                   ?0                  	;0
	895  353   ASSIGN/38                 ?373      16?6                 $413                	;0
	896  354   FE_RESET_R/77             $415=     16?6                 ?956                	;0
	897  354   FE_FETCH_R/78             #416=     $415                 16?31               	;956	>>956	<<955
	898  354   ASSIGN/38                 ?376      16?32                #416                	;0
	899  355   NOP/0                     ?0        ?0                   ?0                  	;1
	900  355   GOTO/253                  ?0        ?901                 ?651                	;0
	901  357   INIT_FCALL_BY_NAME/59     ?0        ?0                   652:'in_array'      	;2
	902  357   SEND_VAR_EX/66            ?80       16?31                ?1                  	;0
	903  357   SEND_VAL_EX/116           ?96       654:array (
  0 => '.',
  1 => '..',
) ?2                  	;0
	904  357   DO_FCALL_BY_NAME/131      $418=     ?0                   ?0                  	;0
	905  357   JMPZ/43                   ?0        $418                 ?908                	;0	>>908
	906  358   NOP/0                     ?0        ?0                   ?0                  	;1
	907  358   GOTO/253                  ?0        ?946                 ?655                	;0
	908  360   INIT_FCALL_BY_NAME/59     ?0        ?0                   656:'is_dir'        	;1	<<905
	909  360   CONCAT/8                  #419=     16?29                658:'/'             	;0
	910  360   CONCAT/8                  #420=     #419                 16?31               	;0
	911  360   SEND_VAL_EX/116           ?80       #420                 ?1                  	;0
	912  360   DO_FCALL_BY_NAME/131      $421=     ?0                   ?0                  	;0
	913  360   JMPZ/43                   ?0        $421                 ?916                	;0	>>916
	914  361   NOP/0                     ?0        ?0                   ?0                  	;1
	915  361   GOTO/253                  ?0        ?950                 ?659                	;0
	916  363   INIT_FCALL_BY_NAME/59     ?0        ?0                   660:'strtolower'    	;1	<<913
	917  363   INIT_FCALL_BY_NAME/59     ?0        ?0                   662:'pathinfo'      	;1
	918  363   SEND_VAR_EX/66            ?80       16?31                ?1                  	;0
	919  363   DO_FCALL_BY_NAME/131      $422=     ?0                   ?0                  	;0
	920  363   SEPARATE/156              $422=     $422                 ?0                  	;0
	921  363   FETCH_DIM_FUNC_ARG/93     $423=     $422                 664:'extension'     	;1
	922  363   SEND_VAR_EX/66            ?80       $423                 ?1                  	;0
	923  363   DO_FCALL_BY_NAME/131      $424=     ?0                   ?0                  	;0
	924  363   ASSIGN/38                 ?384      16?33                $424                	;0
	925  364   INIT_FCALL_BY_NAME/59     ?0        ?0                   665:'is_array'      	;1
	926  364   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
	927  364   DO_FCALL_BY_NAME/131      $426=     ?0                   ?0                  	;0
	928  364   JMPZ_EX/46                #427=     $426                 ?934                	;0	>>934
	929  364   INIT_FCALL_BY_NAME/59     ?0        ?0                   667:'in_array'      	;2
	930  364   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	931  364   SEND_VAR_EX/66            ?96       16?30                ?2                  	;0
	932  364   DO_FCALL_BY_NAME/131      $428=     ?0                   ?0                  	;0
	933  364   BOOL/52                   #427=     $428                 ?0                  	;0
	934  364   JMPNZ_EX/47               #427=     #427                 ?937                	;0	>>937	<<928
	935  364   BOOL_NOT/13               #429=     16?30                ?0                  	;0
	936  364   BOOL/52                   #427=     #429                 ?0                  	;0
	937  364   BOOL_NOT/13               #430=     #427                 ?0                  	;0	<<934
	938  364   JMPZ/43                   ?0        #430                 ?941                	;0	>>941
	939  365   NOP/0                     ?0        ?0                   ?0                  	;1
	940  365   GOTO/253                  ?0        ?948                 ?669                	;0
	941  367   FETCH_DIM_W/84            $431=     16?5                 670:'files'         	;0	<<938
	942  367   ASSIGN_DIM/147            ?391      $431                 ?4397406            	;0
	943  367   OP_DATA/137               ?0        16?31                ?0                  	;0
	944  368   NOP/0                     ?0        ?0                   ?0                  	;1
	945  368   GOTO/253                  ?0        ?948                 ?671                	;0
	946  372   NOP/0                     ?0        ?0                   ?0                  	;1
	947  372   GOTO/253                  ?0        ?955                 ?672                	;0
	948  375   NOP/0                     ?0        ?0                   ?0                  	;1
	949  375   GOTO/253                  ?0        ?953                 ?673                	;0
	950  377   FETCH_DIM_W/84            $433=     16?5                 674:'dirs'          	;0
	951  377   ASSIGN_DIM/147            ?393      $433                 ?0                  	;0
	952  377   OP_DATA/137               ?0        16?31                ?0                  	;0
	953  379   NOP/0                     ?0        ?0                   ?0                  	;1
	954  379   GOTO/253                  ?0        ?946                 ?675                	;0
	955  380   JMP/42                    ?0        ?897                 ?0                  	;0	>>897
	956  380   FE_FREE/127               ?0        $415                 ?0                  	;0	<<896
	957  383   INIT_FCALL_BY_NAME/59     ?0        ?0                   676:'json_encode'   	;1
	958  383   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	959  383   DO_FCALL_BY_NAME/131      $435=     ?0                   ?0                  	;0
	960  383   ECHO/40                   ?0        $435                 ?0                  	;0
	961  384   EXIT/79                   ?0        ?0                   ?0                  	;0
	962  385   GOTO/253                  ?0        ?887                 ?678                	;0
	963  388   INIT_FCALL_BY_NAME/59     ?0        ?0                   679:'exec'          	;2	<<71
	964  388   SEND_VAL_EX/116           ?80       681:'df -h'          ?1                  	;0
	965  388   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	966  388   DO_FCALL_BY_NAME/131      ?395      ?0                   ?0                  	;0
	967  389   INIT_FCALL_BY_NAME/59     ?0        ?0                   682:'json_encode'   	;1
	968  389   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	969  389   DO_FCALL_BY_NAME/131      $437=     ?0                   ?0                  	;0
	970  389   ECHO/40                   ?0        $437                 ?0                  	;0
	971  390   EXIT/79                   ?0        ?0                   ?0                  	;0
	972  392   INIT_FCALL_BY_NAME/59     ?0        ?0                   684:'exec'          	;2	<<73
	973  392   SEND_VAL_EX/116           ?80       686:'ps -e -o user,pid,%cpu,%mem,vsz,rss,tty,stat,time,etime,command' ?1                  	;0
	974  392   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	975  392   DO_FCALL_BY_NAME/131      ?397      ?0                   ?0                  	;0
	976  393   INIT_FCALL_BY_NAME/59     ?0        ?0                   687:'json_encode'   	;1
	977  393   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	978  393   DO_FCALL_BY_NAME/131      $439=     ?0                   ?0                  	;0
	979  393   ECHO/40                   ?0        $439                 ?0                  	;0
	980  394   EXIT/79                   ?0        ?0                   ?0                  	;0
	981  396   INIT_FCALL_BY_NAME/59     ?0        ?0                   689:'exec'          	;1	<<75
	982  396   FETCH_CONSTANT/99         #440=     ?0                   691:'XUI_HOME'      	;16
	983  396   CONCAT/8                  #441=     694:'rm -rf '        #440                	;0
	984  396   CONCAT/8                  #442=     #441                 695:'tmp/*'         	;0
	985  396   SEND_VAL_EX/116           ?80       #442                 ?1                  	;0
	986  396   DO_FCALL_BY_NAME/131      ?402      ?0                   ?0                  	;0
	987  397   INIT_FCALL_BY_NAME/59     ?0        ?0                   696:'shell_exec'    	;1
	988  397   FETCH_CONSTANT/99         #444=     ?0                   698:'PHP_BIN'       	;16
	989  397   CONCAT/8                  #445=     #444                 701:' '             	;0
	990  397   FETCH_CONSTANT/99         #446=     ?0                   702:'CRON_PATH'     	;16
	991  397   CONCAT/8                  #447=     #445                 #446                	;0
	992  397   CONCAT/8                  #448=     #447                 705:'cache.php'     	;0
	993  397   SEND_VAL_EX/116           ?80       #448                 ?1                  	;0
	994  397   DO_FCALL_BY_NAME/131      ?408      ?0                   ?0                  	;0
	995  398   INIT_FCALL_BY_NAME/59     ?0        ?0                   706:'json_encode'   	;1
	996  398   SEND_VAL_EX/116           ?80       708:array (
  'result' => true,
) ?1                  	;0
	997  398   DO_FCALL_BY_NAME/131      $450=     ?0                   ?0                  	;0
	998  398   ECHO/40                   ?0        $450                 ?0                  	;0
	999  399   GOTO/253                  ?0        ?1456                ?709                	;0
	1000 401   INIT_FCALL_BY_NAME/59     ?0        ?0                   710:'exec'          	;1	<<77
	1001 401   FETCH_CONSTANT/99         #451=     ?0                   712:'XUI_HOME'      	;16
	1002 401   CONCAT/8                  #452=     715:'rm '            #451                	;0
	1003 401   CONCAT/8                  #453=     #452                 716:'content/streams/*'	;0
	1004 401   SEND_VAL_EX/116           ?80       #453                 ?1                  	;0
	1005 401   DO_FCALL_BY_NAME/131      ?413      ?0                   ?0                  	;0
	1006 402   INIT_FCALL_BY_NAME/59     ?0        ?0                   717:'json_encode'   	;1
	1007 402   SEND_VAL_EX/116           ?80       719:array (
  'result' => true,
) ?1                  	;0
	1008 402   DO_FCALL_BY_NAME/131      $455=     ?0                   ?0                  	;0
	1009 402   ECHO/40                   ?0        $455                 ?0                  	;0
	1010 403   GOTO/253                  ?0        ?1456                ?720                	;0
	1011 405   FETCH_STATIC_PROP_IS/176  $456=     721:'rRequest'       722:'XUI'           	;0	<<79
	1012 405   ISSET_ISEMPTY_DIM_OBJ/115 #457=     $456                 724:'message'       	;16777216
	1013 405   BOOL_NOT/13               #458=     #457                 ?0                  	;0
	1014 405   JMPZ_EX/46                #458=     #458                 ?1019               	;0	>>1019
	1015 405   FETCH_STATIC_PROP_IS/176  $459=     725:'rRequest'       726:'XUI'           	;0
	1016 405   ISSET_ISEMPTY_DIM_OBJ/115 #460=     $459                 728:'uuid'          	;16777216
	1017 405   BOOL_NOT/13               #461=     #460                 ?0                  	;0
	1018 405   BOOL/52                   #458=     #461                 ?0                  	;0
	1019 405   JMPZ_EX/46                #458=     #458                 ?1026               	;0	>>1026	<<1014
	1020 405   INIT_FCALL_BY_NAME/59     ?0        ?0                   729:'ctype_xdigit'  	;1
	1021 405   FETCH_STATIC_PROP_FUNC_ARG/177 $462=     731:'rRequest'       732:'XUI'           	;1
	1022 405   FETCH_DIM_FUNC_ARG/93     $463=     $462                 734:'uuid'          	;1
	1023 405   SEND_VAR_EX/66            ?80       $463                 ?1                  	;0
	1024 405   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
	1025 405   BOOL/52                   #458=     $464                 ?0                  	;0
	1026 405   BOOL_NOT/13               #465=     #458                 ?0                  	;0	<<1019
	1027 405   JMPZ/43                   ?0        #465                 ?1029               	;0	>>1029
	1028 406   GOTO/253                  ?0        ?1041                ?735                	;0
	1029 408   INIT_FCALL_BY_NAME/59     ?0        ?0                   736:'file_put_contents'	;2	<<1027
	1030 408   FETCH_CONSTANT/99         #466=     ?0                   738:'SIGNALS_PATH'  	;16
	1031 408   FETCH_STATIC_PROP_R/173   $467=     741:'rRequest'       742:'XUI'           	;0
	1032 408   FETCH_DIM_R/81            $468=     $467                 744:'uuid'          	;0
	1033 408   CONCAT/8                  #469=     #466                 $468                	;0
	1034 408   SEND_VAL_EX/116           ?80       #469                 ?1                  	;0
	1035 408   INIT_FCALL_BY_NAME/59     ?0        ?0                   745:'json_encode'   	;1
	1036 408   FETCH_STATIC_PROP_FUNC_ARG/177 $470=     747:'rRequest'       748:'XUI'           	;1
	1037 408   SEND_VAR_EX/66            ?80       $470                 ?1                  	;0
	1038 408   DO_FCALL_BY_NAME/131      $471=     ?0                   ?0                  	;0
	1039 408   SEND_VAR_NO_REF_EX/50     ?96       $471                 ?2                  	;0
	1040 408   DO_FCALL_BY_NAME/131      ?431      ?0                   ?0                  	;0
	1041 410   GOTO/253                  ?0        ?1456                ?750                	;0
	1042 412   INIT_FCALL_BY_NAME/59     ?0        ?0                   751:'json_encode'   	;1	<<81
	1043 412   INIT_STATIC_METHOD_CALL/113 ?0        753:'XUI'            755:'D6A9d4057776E78d'	;0
	1044 412   DO_FCALL/60               $473=     ?0                   ?0                  	;0
	1045 412   SEND_VAR_NO_REF_EX/50     ?80       $473                 ?1                  	;0
	1046 412   DO_FCALL_BY_NAME/131      $474=     ?0                   ?0                  	;0
	1047 412   ECHO/40                   ?0        $474                 ?0                  	;0
	1048 413   EXIT/79                   ?0        ?0                   ?0                  	;0
	1049 415   INIT_FCALL_BY_NAME/59     ?0        ?0                   757:'shell_exec'    	;1	<<83
	1050 415   FETCH_CONSTANT/99         #475=     ?0                   759:'PHP_BIN'       	;16
	1051 415   CONCAT/8                  #476=     #475                 762:' '             	;0
	1052 415   FETCH_CONSTANT/99         #477=     ?0                   763:'CRON_PATH'     	;16
	1053 415   CONCAT/8                  #478=     #476                 #477                	;0
	1054 415   CONCAT/8                  #479=     #478                 766:'watch.php '    	;0
	1055 415   INIT_FCALL_BY_NAME/59     ?0        ?0                   767:'intval'        	;1
	1056 415   FETCH_STATIC_PROP_FUNC_ARG/177 $480=     769:'rRequest'       770:'XUI'           	;1
	1057 415   FETCH_DIM_FUNC_ARG/93     $481=     $480                 772:'id'            	;1
	1058 415   SEND_VAR_EX/66            ?80       $481                 ?1                  	;0
	1059 415   DO_FCALL_BY_NAME/131      $482=     ?0                   ?0                  	;0
	1060 415   CONCAT/8                  #483=     #479                 $482                	;0
	1061 415   CONCAT/8                  #484=     #483                 773:' >/dev/null 2>/dev/null &'	;0
	1062 415   SEND_VAL_EX/116           ?80       #484                 ?1                  	;0
	1063 415   DO_FCALL_BY_NAME/131      ?444      ?0                   ?0                  	;0
	1064 416   GOTO/253                  ?0        ?1456                ?774                	;0
	1065 418   INIT_FCALL_BY_NAME/59     ?0        ?0                   775:'shell_exec'    	;1	<<85
	1066 418   FETCH_CONSTANT/99         #486=     ?0                   777:'PHP_BIN'       	;16
	1067 418   CONCAT/8                  #487=     #486                 780:' '             	;0
	1068 418   FETCH_CONSTANT/99         #488=     ?0                   781:'CRON_PATH'     	;16
	1069 418   CONCAT/8                  #489=     #487                 #488                	;0
	1070 418   CONCAT/8                  #490=     #489                 784:'plex.php '     	;0
	1071 418   INIT_FCALL_BY_NAME/59     ?0        ?0                   785:'intval'        	;1
	1072 418   FETCH_STATIC_PROP_FUNC_ARG/177 $491=     787:'rRequest'       788:'XUI'           	;1
	1073 418   FETCH_DIM_FUNC_ARG/93     $492=     $491                 790:'id'            	;1
	1074 418   SEND_VAR_EX/66            ?80       $492                 ?1                  	;0
	1075 418   DO_FCALL_BY_NAME/131      $493=     ?0                   ?0                  	;0
	1076 418   CONCAT/8                  #494=     #490                 $493                	;0
	1077 418   CONCAT/8                  #495=     #494                 791:' >/dev/null 2>/dev/null &'	;0
	1078 418   SEND_VAL_EX/116           ?80       #495                 ?1                  	;0
	1079 418   DO_FCALL_BY_NAME/131      ?455      ?0                   ?0                  	;0
	1080 419   GOTO/253                  ?0        ?1456                ?792                	;0
	1081 421   INIT_FCALL_BY_NAME/59     ?0        ?0                   793:'intval'        	;1	<<87
	1082 421   FETCH_STATIC_PROP_FUNC_ARG/177 $497=     795:'rRequest'       796:'XUI'           	;1
	1083 421   FETCH_DIM_FUNC_ARG/93     $498=     $497                 798:'stream_id'     	;1
	1084 421   SEND_VAR_EX/66            ?80       $498                 ?1                  	;0
	1085 421   DO_FCALL_BY_NAME/131      $499=     ?0                   ?0                  	;0
	1086 421   ASSIGN/38                 ?459      16?4                 $499                	;0
	1087 422   INIT_FCALL_BY_NAME/59     ?0        ?0                   799:'json_encode'   	;1
	1088 422   INIT_ARRAY/71             #501=     801:true             802:'result'        	;10
	1089 422   INIT_FCALL_BY_NAME/59     ?0        ?0                   803:'glob'          	;1
	1090 422   FETCH_CONSTANT/99         #502=     ?0                   805:'ARCHIVE_PATH'  	;16
	1091 422   CONCAT/8                  #503=     #502                 16?4                	;0
	1092 422   CONCAT/8                  #504=     #503                 808:'/*.ts'         	;0
	1093 422   SEND_VAL_EX/116           ?80       #504                 ?1                  	;0
	1094 422   DO_FCALL_BY_NAME/131      $505=     ?0                   ?0                  	;0
	1095 422   ADD_ARRAY_ELEMENT/72      #501=     $505                 809:'data'          	;0
	1096 422   SEND_VAL_EX/116           ?80       #501                 ?1                  	;0
	1097 422   DO_FCALL_BY_NAME/131      $506=     ?0                   ?0                  	;0
	1098 422   ECHO/40                   ?0        $506                 ?0                  	;0
	1099 423   EXIT/79                   ?0        ?0                   ?0                  	;0
	1100 425   GOTO/253                  ?0        ?1150                ?810                	;0	<<89
	1101 428   INIT_FCALL_BY_NAME/59     ?0        ?0                   811:'file_exists'   	;1
	1102 428   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	1103 428   DO_FCALL_BY_NAME/131      $507=     ?0                   ?0                  	;0
	1104 428   BOOL_NOT/13               #508=     $507                 ?0                  	;0
	1105 428   JMPZ/43                   ?0        #508                 ?1107               	;0	>>1107
	1106 429   GOTO/253                  ?0        ?1145                ?813                	;0
	1107 431   INIT_FCALL_BY_NAME/59     ?0        ?0                   814:'md5_file'      	;1	<<1105
	1108 431   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	1109 431   DO_FCALL_BY_NAME/131      $509=     ?0                   ?0                  	;0
	1110 431   ASSIGN/38                 ?469      16?34                $509                	;0
	1111 432   FETCH_CONSTANT/99         #512=     ?0                   819:'SERVER_ID'     	;16
	1112 432   FETCH_STATIC_PROP_R/173   $511=     816:'rServers'       817:'XUI'           	;0
	1113 432   FETCH_DIM_R/81            $513=     $511                 #512                	;0
	1114 432   FETCH_DIM_R/81            $514=     $513                 822:'server_ip'     	;0
	1115 432   CONCAT/8                  #515=     823:'http://'        $514                	;0
	1116 432   CONCAT/8                  #516=     #515                 824:':'             	;0
	1117 432   FETCH_CONSTANT/99         #518=     ?0                   828:'SERVER_ID'     	;16
	1118 432   FETCH_STATIC_PROP_R/173   $517=     825:'rServers'       826:'XUI'           	;0
	1119 432   FETCH_DIM_R/81            $519=     $517                 #518                	;0
	1120 432   FETCH_DIM_R/81            $520=     $519                 831:'http_broadcast_port'	;0
	1121 432   CONCAT/8                  #521=     #516                 $520                	;0
	1122 432   CONCAT/8                  #522=     #521                 832:'/api?password='	;0
	1123 432   FETCH_STATIC_PROP_R/173   $523=     833:'rSettings'      834:'XUI'           	;0
	1124 432   FETCH_DIM_R/81            $524=     $523                 836:'live_streaming_pass'	;0
	1125 432   CONCAT/8                  #525=     #522                 $524                	;0
	1126 432   CONCAT/8                  #526=     #525                 837:'&action=getFile&filename='	;0
	1127 432   INIT_FCALL_BY_NAME/59     ?0        ?0                   838:'urlencode'     	;1
	1128 432   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	1129 432   DO_FCALL_BY_NAME/131      $527=     ?0                   ?0                  	;0
	1130 432   CONCAT/8                  #528=     #526                 $527                	;0
	1131 432   ASSIGN/38                 ?488      16?35                #528                	;0
	1132 433   INIT_FCALL_BY_NAME/59     ?0        ?0                   840:'json_encode'   	;1
	1133 433   INIT_ARRAY/71             #530=     842:true             843:'result'        	;18
	1134 433   ADD_ARRAY_ELEMENT/72      #530=     16?34                844:'md5'           	;0
	1135 433   ADD_ARRAY_ELEMENT/72      #530=     16?35                845:'url'           	;0
	1136 433   FETCH_CONSTANT/99         #532=     ?0                   849:'SERVER_ID'     	;16
	1137 433   FETCH_STATIC_PROP_R/173   $531=     846:'rServers'       847:'XUI'           	;0
	1138 433   FETCH_DIM_R/81            $533=     $531                 #532                	;0
	1139 433   FETCH_DIM_R/81            $534=     $533                 852:'xui_version'   	;0
	1140 433   ADD_ARRAY_ELEMENT/72      #530=     $534                 853:'version'       	;0
	1141 433   SEND_VAL_EX/116           ?80       #530                 ?1                  	;0
	1142 433   DO_FCALL_BY_NAME/131      $535=     ?0                   ?0                  	;0
	1143 433   EXIT/79                   ?0        $535                 ?0                  	;0
	1144 434   GOTO/253                  ?0        ?1145                ?854                	;0
	1145 437   INIT_FCALL_BY_NAME/59     ?0        ?0                   855:'json_encode'   	;1
	1146 437   SEND_VAL_EX/116           ?80       857:array (
  'result' => false,
) ?1                  	;0
	1147 437   DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
	1148 437   EXIT/79                   ?0        $536                 ?0                  	;0
	1149 438   GOTO/253                  ?0        ?1161                ?858                	;0
	1150 440   FETCH_STATIC_PROP_R/173   $537=     859:'rRequest'       860:'XUI'           	;0
	1151 440   FETCH_DIM_R/81            $538=     $537                 862:'type'          	;0
	1152 440   IS_EQUAL/17               #539=     $538                 863:0               	;0
	1153 440   JMPZ/43                   ?0        #539                 ?1155               	;0	>>1155
	1154 441   GOTO/253                  ?0        ?1158                ?864                	;0
	1155 443   FETCH_CONSTANT/99         #540=     ?0                   865:'PROXY_UPDATE'  	;16	<<1153
	1156 443   ASSIGN/38                 ?500      16?7                 #540                	;0
	1157 444   GOTO/253                  ?0        ?1101                ?868                	;0
	1158 446   FETCH_CONSTANT/99         #542=     ?0                   869:'LOADBALANCER_UPDATE'	;16
	1159 446   ASSIGN/38                 ?502      16?7                 #542                	;0
	1160 447   GOTO/253                  ?0        ?1101                ?872                	;0
	1161 450   GOTO/253                  ?0        ?1218                ?873                	;0	<<91
	1162 452   FE_RESET_R/77             $544=     16?16                ?1191               	;0
	1163 452   FE_FETCH_R/78             ?0        $544                 16?36               	;1191	>>1191	<<1190
	1164 453   INIT_FCALL_BY_NAME/59     ?0        ?0                   874:'intval'        	;1
	1165 453   INIT_FCALL_BY_NAME/59     ?0        ?0                   876:'basename'      	;2
	1166 453   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1167 453   SEND_VAL_EX/116           ?96       878:'.wpid'          ?2                  	;0
	1168 453   DO_FCALL_BY_NAME/131      $545=     ?0                   ?0                  	;0
	1169 453   SEND_VAR_NO_REF_EX/50     ?80       $545                 ?1                  	;0
	1170 453   DO_FCALL_BY_NAME/131      $546=     ?0                   ?0                  	;0
	1171 453   ASSIGN/38                 ?506      16?13                $546                	;0
	1172 454   JMPZ_EX/46                #548=     16?13                ?1178               	;0	>>1178
	1173 454   INIT_STATIC_METHOD_CALL/113 ?0        879:'XUI'            881:'e764F10e99c26365'	;2
	1174 454   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	1175 454   SEND_VAL_EX/116           ?96       883:'php'            ?2                  	;0
	1176 454   DO_FCALL/60               $549=     ?0                   ?0                  	;0
	1177 454   BOOL/52                   #548=     $549                 ?0                  	;0
	1178 454   BOOL_NOT/13               #550=     #548                 ?0                  	;0	<<1172
	1179 454   JMPZ/43                   ?0        #550                 ?1182               	;0	>>1182
	1180 455   NOP/0                     ?0        ?0                   ?0                  	;1
	1181 455   GOTO/253                  ?0        ?1187                ?884                	;0
	1182 457   INIT_FCALL_BY_NAME/59     ?0        ?0                   885:'shell_exec'    	;1	<<1179
	1183 457   NOP/0                     ?0        ?0                   ?0                  	;0
	1184 457   FAST_CONCAT/53            #551=     887:'kill -9 '       16?13               	;0
	1185 457   SEND_VAL_EX/116           ?80       #551                 ?1                  	;0
	1186 457   DO_FCALL_BY_NAME/131      ?511      ?0                   ?0                  	;0
	1187 459   INIT_FCALL_BY_NAME/59     ?0        ?0                   888:'unlink'        	;1
	1188 459   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1189 459   DO_FCALL_BY_NAME/131      ?512      ?0                   ?0                  	;0
	1190 460   JMP/42                    ?0        ?1163                ?0                  	;0	>>1163
	1191 460   FE_FREE/127               ?0        $544                 ?0                  	;0	<<1162
	1192 463   INIT_FCALL_BY_NAME/59     ?0        ?0                   890:'json_encode'   	;1
	1193 463   SEND_VAL_EX/116           ?80       892:array (
  'result' => true,
) ?1                  	;0
	1194 463   DO_FCALL_BY_NAME/131      $554=     ?0                   ?0                  	;0
	1195 463   EXIT/79                   ?0        $554                 ?0                  	;0
	1196 464   GOTO/253                  ?0        ?1237                ?893                	;0
	1197 467   JMPZ_EX/46                #555=     16?37                ?1203               	;0	>>1203
	1198 467   INIT_STATIC_METHOD_CALL/113 ?0        894:'XUI'            896:'E764f10e99c26365'	;2
	1199 467   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	1200 467   SEND_VAL_EX/116           ?96       898:'php'            ?2                  	;0
	1201 467   DO_FCALL/60               $556=     ?0                   ?0                  	;0
	1202 467   BOOL/52                   #555=     $556                 ?0                  	;0
	1203 467   BOOL_NOT/13               #557=     #555                 ?0                  	;0	<<1197
	1204 467   JMPZ/43                   ?0        #557                 ?1206               	;0	>>1206
	1205 468   GOTO/253                  ?0        ?1211                ?899                	;0
	1206 470   INIT_FCALL_BY_NAME/59     ?0        ?0                   900:'shell_exec'    	;1	<<1204
	1207 470   NOP/0                     ?0        ?0                   ?0                  	;0
	1208 470   FAST_CONCAT/53            #558=     902:'kill -9 '       16?37               	;0
	1209 470   SEND_VAL_EX/116           ?80       #558                 ?1                  	;0
	1210 470   DO_FCALL_BY_NAME/131      ?518      ?0                   ?0                  	;0
	1211 472   INIT_FCALL_BY_NAME/59     ?0        ?0                   903:'glob'          	;1
	1212 472   FETCH_CONSTANT/99         #560=     ?0                   905:'WATCH_TMP_PATH'	;16
	1213 472   CONCAT/8                  #561=     #560                 908:'*.wpid'        	;0
	1214 472   SEND_VAL_EX/116           ?80       #561                 ?1                  	;0
	1215 472   DO_FCALL_BY_NAME/131      $562=     ?0                   ?0                  	;0
	1216 472   ASSIGN/38                 ?522      16?16                $562                	;0
	1217 473   GOTO/253                  ?0        ?1162                ?909                	;0
	1218 475   INIT_FCALL_BY_NAME/59     ?0        ?0                   910:'file_exists'   	;1
	1219 475   FETCH_CONSTANT/99         #564=     ?0                   912:'CACHE_TMP_PATH'	;16
	1220 475   CONCAT/8                  #565=     #564                 915:'watch_pid'     	;0
	1221 475   SEND_VAL_EX/116           ?80       #565                 ?1                  	;0
	1222 475   DO_FCALL_BY_NAME/131      $566=     ?0                   ?0                  	;0
	1223 475   JMPZ/43                   ?0        $566                 ?1225               	;0	>>1225
	1224 476   GOTO/253                  ?0        ?1227                ?916                	;0
	1225 478   ASSIGN/38                 ?526      16?37                917:NULL            	;0	<<1223
	1226 479   GOTO/253                  ?0        ?1197                ?918                	;0
	1227 481   INIT_FCALL_BY_NAME/59     ?0        ?0                   919:'intval'        	;1
	1228 481   INIT_FCALL_BY_NAME/59     ?0        ?0                   921:'file_get_contents'	;1
	1229 481   FETCH_CONSTANT/99         #568=     ?0                   923:'CACHE_TMP_PATH'	;16
	1230 481   CONCAT/8                  #569=     #568                 926:'watch_pid'     	;0
	1231 481   SEND_VAL_EX/116           ?80       #569                 ?1                  	;0
	1232 481   DO_FCALL_BY_NAME/131      $570=     ?0                   ?0                  	;0
	1233 481   SEND_VAR_NO_REF_EX/50     ?80       $570                 ?1                  	;0
	1234 481   DO_FCALL_BY_NAME/131      $571=     ?0                   ?0                  	;0
	1235 481   ASSIGN/38                 ?531      16?37                $571                	;0
	1236 482   GOTO/253                  ?0        ?1197                ?927                	;0
	1237 485   GOTO/253                  ?0        ?1238                ?928                	;0	<<93
	1238 487   INIT_FCALL_BY_NAME/59     ?0        ?0                   929:'file_exists'   	;1
	1239 487   FETCH_CONSTANT/99         #573=     ?0                   931:'CACHE_TMP_PATH'	;16
	1240 487   CONCAT/8                  #574=     #573                 934:'plex_pid'      	;0
	1241 487   SEND_VAL_EX/116           ?80       #574                 ?1                  	;0
	1242 487   DO_FCALL_BY_NAME/131      $575=     ?0                   ?0                  	;0
	1243 487   JMPZ/43                   ?0        $575                 ?1245               	;0	>>1245
	1244 488   GOTO/253                  ?0        ?1247                ?935                	;0
	1245 490   ASSIGN/38                 ?535      16?37                936:NULL            	;0	<<1243
	1246 491   GOTO/253                  ?0        ?1292                ?937                	;0
	1247 493   INIT_FCALL_BY_NAME/59     ?0        ?0                   938:'intval'        	;1
	1248 493   INIT_FCALL_BY_NAME/59     ?0        ?0                   940:'file_get_contents'	;1
	1249 493   FETCH_CONSTANT/99         #577=     ?0                   942:'CACHE_TMP_PATH'	;16
	1250 493   CONCAT/8                  #578=     #577                 945:'plex_pid'      	;0
	1251 493   SEND_VAL_EX/116           ?80       #578                 ?1                  	;0
	1252 493   DO_FCALL_BY_NAME/131      $579=     ?0                   ?0                  	;0
	1253 493   SEND_VAR_NO_REF_EX/50     ?80       $579                 ?1                  	;0
	1254 493   DO_FCALL_BY_NAME/131      $580=     ?0                   ?0                  	;0
	1255 493   ASSIGN/38                 ?540      16?37                $580                	;0
	1256 494   GOTO/253                  ?0        ?1292                ?946                	;0
	1257 496   FE_RESET_R/77             $582=     16?16                ?1286               	;0
	1258 496   FE_FETCH_R/78             ?0        $582                 16?36               	;1286	>>1286	<<1285
	1259 497   INIT_FCALL_BY_NAME/59     ?0        ?0                   947:'intval'        	;1
	1260 497   INIT_FCALL_BY_NAME/59     ?0        ?0                   949:'basename'      	;2
	1261 497   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1262 497   SEND_VAL_EX/116           ?96       951:'.ppid'          ?2                  	;0
	1263 497   DO_FCALL_BY_NAME/131      $583=     ?0                   ?0                  	;0
	1264 497   SEND_VAR_NO_REF_EX/50     ?80       $583                 ?1                  	;0
	1265 497   DO_FCALL_BY_NAME/131      $584=     ?0                   ?0                  	;0
	1266 497   ASSIGN/38                 ?544      16?13                $584                	;0
	1267 498   JMPZ_EX/46                #586=     16?13                ?1273               	;0	>>1273
	1268 498   INIT_STATIC_METHOD_CALL/113 ?0        952:'XUI'            954:'E764F10e99C26365'	;2
	1269 498   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	1270 498   SEND_VAL_EX/116           ?96       956:'php'            ?2                  	;0
	1271 498   DO_FCALL/60               $587=     ?0                   ?0                  	;0
	1272 498   BOOL/52                   #586=     $587                 ?0                  	;0
	1273 498   BOOL_NOT/13               #588=     #586                 ?0                  	;0	<<1267
	1274 498   JMPZ/43                   ?0        #588                 ?1277               	;0	>>1277
	1275 499   NOP/0                     ?0        ?0                   ?0                  	;1
	1276 499   GOTO/253                  ?0        ?1282                ?957                	;0
	1277 501   INIT_FCALL_BY_NAME/59     ?0        ?0                   958:'shell_exec'    	;1	<<1274
	1278 501   NOP/0                     ?0        ?0                   ?0                  	;0
	1279 501   FAST_CONCAT/53            #589=     960:'kill -9 '       16?13               	;0
	1280 501   SEND_VAL_EX/116           ?80       #589                 ?1                  	;0
	1281 501   DO_FCALL_BY_NAME/131      ?549      ?0                   ?0                  	;0
	1282 503   INIT_FCALL_BY_NAME/59     ?0        ?0                   961:'unlink'        	;1
	1283 503   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
	1284 503   DO_FCALL_BY_NAME/131      ?550      ?0                   ?0                  	;0
	1285 504   JMP/42                    ?0        ?1258                ?0                  	;0	>>1258
	1286 504   FE_FREE/127               ?0        $582                 ?0                  	;0	<<1257
	1287 507   INIT_FCALL_BY_NAME/59     ?0        ?0                   963:'json_encode'   	;1
	1288 507   SEND_VAL_EX/116           ?80       965:array (
  'result' => true,
) ?1                  	;0
	1289 507   DO_FCALL_BY_NAME/131      $592=     ?0                   ?0                  	;0
	1290 507   EXIT/79                   ?0        $592                 ?0                  	;0
	1291 508   GOTO/253                  ?0        ?1313                ?966                	;0
	1292 511   JMPZ_EX/46                #593=     16?37                ?1298               	;0	>>1298
	1293 511   INIT_STATIC_METHOD_CALL/113 ?0        967:'XUI'            969:'E764F10E99C26365'	;2
	1294 511   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
	1295 511   SEND_VAL_EX/116           ?96       971:'php'            ?2                  	;0
	1296 511   DO_FCALL/60               $594=     ?0                   ?0                  	;0
	1297 511   BOOL/52                   #593=     $594                 ?0                  	;0
	1298 511   BOOL_NOT/13               #595=     #593                 ?0                  	;0	<<1292
	1299 511   JMPZ/43                   ?0        #595                 ?1301               	;0	>>1301
	1300 512   GOTO/253                  ?0        ?1306                ?972                	;0
	1301 514   INIT_FCALL_BY_NAME/59     ?0        ?0                   973:'shell_exec'    	;1	<<1299
	1302 514   NOP/0                     ?0        ?0                   ?0                  	;0
	1303 514   FAST_CONCAT/53            #596=     975:'kill -9 '       16?37               	;0
	1304 514   SEND_VAL_EX/116           ?80       #596                 ?1                  	;0
	1305 514   DO_FCALL_BY_NAME/131      ?556      ?0                   ?0                  	;0
	1306 516   INIT_FCALL_BY_NAME/59     ?0        ?0                   976:'glob'          	;1
	1307 516   FETCH_CONSTANT/99         #598=     ?0                   978:'WATCH_TMP_PATH'	;16
	1308 516   CONCAT/8                  #599=     #598                 981:'*.ppid'        	;0
	1309 516   SEND_VAL_EX/116           ?80       #599                 ?1                  	;0
	1310 516   DO_FCALL_BY_NAME/131      $600=     ?0                   ?0                  	;0
	1311 516   ASSIGN/38                 ?560      16?16                $600                	;0
	1312 517   GOTO/253                  ?0        ?1257                ?982                	;0
	1313 520   GOTO/253                  ?0        ?1336                ?983                	;0	<<95
	1314 523   FETCH_STATIC_PROP_R/173   $602=     984:'rRequest'       985:'XUI'           	;0
	1315 523   FETCH_DIM_R/81            $603=     $602                 987:'http_proxy'    	;0
	1316 523   BOOL_NOT/13               #604=     $603                 ?0                  	;0
	1317 523   JMPZ/43                   ?0        #604                 ?1319               	;0	>>1319
	1318 524   GOTO/253                  ?0        ?1330                ?988                	;0
	1319 526   INIT_FCALL_BY_NAME/59     ?0        ?0                   989:'sprintf'       	;2	<<1317
	1320 526   SEND_VAL_EX/116           ?80       991:'-http_proxy \'%s\'' ?1                  	;0
	1321 526   INIT_FCALL_BY_NAME/59     ?0        ?0                   992:'escapeshellcmd'	;1
	1322 526   FETCH_STATIC_PROP_FUNC_ARG/177 $606=     994:'rRequest'       995:'XUI'           	;1
	1323 526   FETCH_DIM_FUNC_ARG/93     $607=     $606                 997:'http_proxy'    	;1
	1324 526   SEND_VAR_EX/66            ?80       $607                 ?1                  	;0
	1325 526   DO_FCALL_BY_NAME/131      $608=     ?0                   ?0                  	;0
	1326 526   SEND_VAR_NO_REF_EX/50     ?96       $608                 ?2                  	;0
	1327 526   DO_FCALL_BY_NAME/131      $609=     ?0                   ?0                  	;0
	1328 526   ASSIGN_DIM/147            ?564      16?38                ?4397406            	;0
	1329 526   OP_DATA/137               ?0        $609                 ?0                  	;0
	1330 528   FETCH_STATIC_PROP_R/173   $610=     998:'rRequest'       999:'XUI'           	;0
	1331 528   FETCH_DIM_R/81            $611=     $610                 1001:'cookies'      	;0
	1332 528   BOOL_NOT/13               #612=     $611                 ?0                  	;0
	1333 528   JMPZ/43                   ?0        #612                 ?1335               	;0	>>1335
	1334 529   GOTO/253                  ?0        ?1375                ?1002               	;0
	1335 531   GOTO/253                  ?0        ?1364                ?1003               	;0	<<1333
	1336 533   FETCH_STATIC_PROP_IS/176  $613=     1004:'rRequest'      1005:'XUI'          	;0
	1337 533   ISSET_ISEMPTY_DIM_OBJ/115 #614=     $613                 1007:'url'          	;16777216
	1338 533   JMPZ/43                   ?0        #614                 ?1340               	;0	>>1340
	1339 534   GOTO/253                  ?0        ?1412                ?1008               	;0
	1340 536   INIT_FCALL_BY_NAME/59     ?0        ?0                   1009:'escapeshellcmd'	;1	<<1338
	1341 536   FETCH_STATIC_PROP_FUNC_ARG/177 $615=     1011:'rRequest'      1012:'XUI'          	;1
	1342 536   FETCH_DIM_FUNC_ARG/93     $616=     $615                 1014:'url'          	;1
	1343 536   SEND_VAR_EX/66            ?80       $616                 ?1                  	;0
	1344 536   DO_FCALL_BY_NAME/131      $617=     ?0                   ?0                  	;0
	1345 536   ASSIGN/38                 ?577      16?35                $617                	;0
	1346 537   ASSIGN/38                 ?578      16?38                1015:array (
)      	;0
	1347 538   FETCH_STATIC_PROP_R/173   $620=     1016:'rRequest'      1017:'XUI'          	;0
	1348 538   FETCH_DIM_R/81            $621=     $620                 1019:'user_agent'   	;0
	1349 538   BOOL_NOT/13               #622=     $621                 ?0                  	;0
	1350 538   JMPZ/43                   ?0        #622                 ?1352               	;0	>>1352
	1351 539   GOTO/253                  ?0        ?1314                ?1020               	;0
	1352 541   INIT_FCALL_BY_NAME/59     ?0        ?0                   1021:'sprintf'      	;2	<<1350
	1353 541   SEND_VAL_EX/116           ?80       1023:'-user_agent \'%s\'' ?1                  	;0
	1354 541   INIT_FCALL_BY_NAME/59     ?0        ?0                   1024:'escapeshellcmd'	;1
	1355 541   FETCH_STATIC_PROP_FUNC_ARG/177 $624=     1026:'rRequest'      1027:'XUI'          	;1
	1356 541   FETCH_DIM_FUNC_ARG/93     $625=     $624                 1029:'user_agent'   	;1
	1357 541   SEND_VAR_EX/66            ?80       $625                 ?1                  	;0
	1358 541   DO_FCALL_BY_NAME/131      $626=     ?0                   ?0                  	;0
	1359 541   SEND_VAR_NO_REF_EX/50     ?96       $626                 ?2                  	;0
	1360 541   DO_FCALL_BY_NAME/131      $627=     ?0                   ?0                  	;0
	1361 541   ASSIGN_DIM/147            ?582      16?38                ?4397406            	;0
	1362 541   OP_DATA/137               ?0        $627                 ?0                  	;0
	1363 542   GOTO/253                  ?0        ?1314                ?1030               	;0
	1364 544   INIT_FCALL_BY_NAME/59     ?0        ?0                   1031:'sprintf'      	;2
	1365 544   SEND_VAL_EX/116           ?80       1033:'-cookies \'%s\'' ?1                  	;0
	1366 544   INIT_FCALL_BY_NAME/59     ?0        ?0                   1034:'escapeshellcmd'	;1
	1367 544   FETCH_STATIC_PROP_FUNC_ARG/177 $629=     1036:'rRequest'      1037:'XUI'          	;1
	1368 544   FETCH_DIM_FUNC_ARG/93     $630=     $629                 1039:'cookies'      	;1
	1369 544   SEND_VAR_EX/66            ?80       $630                 ?1                  	;0
	1370 544   DO_FCALL_BY_NAME/131      $631=     ?0                   ?0                  	;0
	1371 544   SEND_VAR_NO_REF_EX/50     ?96       $631                 ?2                  	;0
	1372 544   DO_FCALL_BY_NAME/131      $632=     ?0                   ?0                  	;0
	1373 544   ASSIGN_DIM/147            ?587      16?38                ?0                  	;0
	1374 544   OP_DATA/137               ?0        $632                 ?0                  	;0
	1375 546   FETCH_STATIC_PROP_R/173   $633=     1040:'rRequest'      1041:'XUI'          	;0
	1376 546   FETCH_DIM_R/81            $634=     $633                 1043:'headers'      	;0
	1377 546   JMPZ/43                   ?0        $634                 ?1387               	;0	>>1387
	1378 546   INIT_FCALL_BY_NAME/59     ?0        ?0                   1044:'rtrim'        	;2
	1379 546   FETCH_STATIC_PROP_FUNC_ARG/177 $635=     1046:'rRequest'      1047:'XUI'          	;1
	1380 546   FETCH_DIM_FUNC_ARG/93     $636=     $635                 1049:'headers'      	;1
	1381 546   SEND_VAR_EX/66            ?80       $636                 ?1                  	;0
	1382 546   SEND_VAL_EX/116           ?96       1050:'
'            ?2                  	;0
	1383 546   DO_FCALL_BY_NAME/131      $637=     ?0                   ?0                  	;0
	1384 546   CONCAT/8                  #638=     $637                 1051:'
'           	;0
	1385 546   QM_ASSIGN/22              #639=     #638                 ?0                  	;0
	1386 546   JMP/42                    ?0        ?1388                ?0                  	;0	>>1388
	1387 546   QM_ASSIGN/22              #639=     1052:''              ?0                  	;0	<<1377
	1388 546   ASSIGN/38                 ?599      16?39                #639                	;0	<<1386
	1389 547   ASSIGN_CONCAT/30          ?600      16?39                1053:'X-XUI-Prebuffer:1
'	;0
	1390 548   INIT_FCALL_BY_NAME/59     ?0        ?0                   1054:'sprintf'      	;2
	1391 548   SEND_VAL_EX/116           ?80       1056:'-headers %s'   ?1                  	;0
	1392 548   INIT_FCALL_BY_NAME/59     ?0        ?0                   1057:'escapeshellarg'	;1
	1393 548   SEND_VAR_EX/66            ?80       16?39                ?1                  	;0
	1394 548   DO_FCALL_BY_NAME/131      $643=     ?0                   ?0                  	;0
	1395 548   SEND_VAR_NO_REF_EX/50     ?96       $643                 ?2                  	;0
	1396 548   DO_FCALL_BY_NAME/131      $644=     ?0                   ?0                  	;0
	1397 548   ASSIGN_DIM/147            ?601      16?38                ?4397406            	;0
	1398 548   OP_DATA/137               ?0        $644                 ?0                  	;0
	1399 549   GOTO/253                  ?0        ?1400                ?1059               	;0
	1400 551   INIT_FCALL_BY_NAME/59     ?0        ?0                   1060:'json_encode'  	;1
	1401 551   INIT_ARRAY/71             #645=     1062:true            1063:'result'       	;10
	1402 551   INIT_STATIC_METHOD_CALL/113 ?0        1064:'XUI'           1066:'e57006536Cd5655D'	;4
	1403 551   SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
	1404 551   SEND_VAR_EX/66            ?96       16?38                ?2                  	;0
	1405 551   SEND_VAL_EX/116           ?112      1068:''              ?3                  	;0
	1406 551   SEND_VAL_EX/116           ?128      1069:false           ?4                  	;0
	1407 551   DO_FCALL/60               $646=     ?0                   ?0                  	;0
	1408 551   ADD_ARRAY_ELEMENT/72      #645=     $646                 1070:'data'         	;0
	1409 551   SEND_VAL_EX/116           ?80       #645                 ?1                  	;0
	1410 551   DO_FCALL_BY_NAME/131      $647=     ?0                   ?0                  	;0
	1411 551   EXIT/79                   ?0        $647                 ?0                  	;0
	1412 553   INIT_FCALL_BY_NAME/59     ?0        ?0                   1071:'json_encode'  	;1
	1413 553   SEND_VAL_EX/116           ?80       1073:array (
  'result' => false,
) ?1                  	;0
	1414 553   DO_FCALL_BY_NAME/131      $648=     ?0                   ?0                  	;0
	1415 553   EXIT/79                   ?0        $648                 ?0                  	;0
	1416 554   GOTO/253                  ?0        ?1417                ?1074               	;0
	1417 557   INIT_FCALL_BY_NAME/59     ?0        ?0                   1075:'json_encode'  	;1	<<96
	1418 557   SEND_VAL_EX/116           ?80       1077:array (
  'result' => false,
) ?1                  	;0
	1419 557   DO_FCALL_BY_NAME/131      $649=     ?0                   ?0                  	;0
	1420 557   EXIT/79                   ?0        $649                 ?0                  	;0
	1421 560   GOTO/253                  ?0        ?1456                ?1078               	;0
	1422 562   BIND_GLOBAL/168           ?0        16?3                 1079:'f76e05a7b2c4a341'	;0	<<0
	1423 563   FETCH_STATIC_PROP_IS/176  $650=     1080:'rRequest'      1081:'XUI'          	;0
	1424 563   ISSET_ISEMPTY_DIM_OBJ/115 #651=     $650                 1083:'status'       	;16777216
	1425 563   JMPZ/43                   ?0        #651                 ?1427               	;0	>>1427
	1426 564   GOTO/253                  ?0        ?1438                ?1084               	;0
	1427 566   INIT_STATIC_METHOD_CALL/113 ?0        1085:'Xui\\Functions' 1087:'checkStatus'  	;1	<<1425
	1428 566   FETCH_STATIC_PROP_FUNC_ARG/177 $652=     1089:'rRequest'      1090:'XUI'          	;1
	1429 566   FETCH_DIM_FUNC_ARG/93     $653=     $652                 1092:'data'         	;1
	1430 566   SEND_VAR_EX/66            ?80       $653                 ?1                  	;0
	1431 566   DO_FCALL/60               $654=     ?0                   ?0                  	;0
	1432 566   ASSIGN/38                 $655=     16?40                $654                	;0
	1433 566   BOOL_NOT/13               #656=     $655                 ?0                  	;0
	1434 566   JMPZ/43                   ?0        #656                 ?1436               	;0	>>1436
	1435 567   GOTO/253                  ?0        ?1437                ?1093               	;0
	1436 569   EXIT/79                   ?0        16?40                ?0                  	;0	<<1434
	1437 571   GOTO/253                  ?0        ?1438                ?1094               	;0
	1438 574   FETCH_STATIC_PROP_IS/176  $657=     1095:'rRequest'      1096:'XUI'          	;0
	1439 574   ISSET_ISEMPTY_DIM_OBJ/115 #658=     $657                 1098:'password'     	;16777216
	1440 574   JMPNZ_EX/47               #658=     #658                 ?1447               	;0	>>1447
	1441 574   FETCH_STATIC_PROP_R/173   $659=     1099:'rRequest'      1100:'XUI'          	;0
	1442 574   FETCH_DIM_R/81            $660=     $659                 1102:'password'     	;0
	1443 574   FETCH_STATIC_PROP_R/173   $661=     1103:'rSettings'     1104:'XUI'          	;0
	1444 574   FETCH_DIM_R/81            $662=     $661                 1106:'live_streaming_pass'	;0
	1445 574   IS_NOT_EQUAL/18           #663=     $660                 $662                	;0
	1446 574   BOOL/52                   #658=     #663                 ?0                  	;0
	1447 574   BOOL_NOT/13               #664=     #658                 ?0                  	;0	<<1440
	1448 574   JMPZ/43                   ?0        #664                 ?1450               	;0	>>1450
	1449 575   GOTO/253                  ?0        ?1453                ?1107               	;0
	1450 577   INIT_FCALL_BY_NAME/59     ?0        ?0                   1108:'generateError'	;1	<<1448
	1451 577   SEND_VAL_EX/116           ?80       1110:'INVALID_API_PASSWORD' ?1                  	;0
	1452 577   DO_FCALL_BY_NAME/131      ?624      ?0                   ?0                  	;0
	1453 579   FETCH_STATIC_PROP_UNSET/178 $666=     1111:'rRequest'      1112:'XUI'          	;0
	1454 579   UNSET_DIM/75              ?0        $666                 1114:'password'     	;0
	1455 580   GOTO/253                  ?0        ?1                   ?1115               	;0
	1456 583   GOTO/253                  ?0        ?1457                ?1116               	;0
	1457 585   NOP/0                     ?0        1117:NULL            ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   589  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   589  BIND_GLOBAL/168           ?0        16?1                 1:'f76e05a7b2c4a341'	;0
	2   590  BOOL_NOT/13               #2=       16?1                 ?0                  	;0
	3   590  JMPZ/43                   ?0        #2                   ?5                  	;0	>>5
	4   591  GOTO/253                  ?0        ?7                   ?2                  	;0
	5   593  INIT_STATIC_METHOD_CALL/113 ?0        3:'XUI'              5:'AEEa5D3137274F80'	;0	<<3
	6   593  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	7   595  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'is_object'       	;1
	8   595  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	9   595  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	10  595  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	11  595  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
	12  596  GOTO/253                  ?0        ?15                  ?9                  	;0
	13  598  INIT_METHOD_CALL/112      ?0        16?0                 10:'close_mysql'    	;0	<<11
	14  598  DO_FCALL/60               ?4        ?0                   ?0                  	;0
	15  600  NOP/0                     ?0        12:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'register_shutdown_function'	;1
1   3    SEND_VAL_EX/116           ?80       2:'shutdown'         ?1                  	;0
2   3    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
3   4    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'set_time_limit'  	;1
4   4    SEND_VAL_EX/116           ?80       5:0                  ?1                  	;0
5   4    DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
6   5    INCLUDE_OR_EVAL/73        ?2        6:'init.php'         ?0                  	;8
7   6    ASSIGN/38                 ?3        16?0                 7:true              	;0
8   8    NOP/0                     ?0        ?0                   ?0                  	;0
9   586  INIT_FCALL/61             ?0        ?10752               8:'e5b50a3e1ae37f5f'	;0
10  586  DO_FCALL/60               ?4        ?0                   ?0                  	;0
11  587  NOP/0                     ?0        ?0                   ?0                  	;0
12  601  NOP/0                     ?0        9:1                  ?0                  	;4294967295
*/

?>