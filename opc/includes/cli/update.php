<?php


function eD8dBF4549416fa2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   26   BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   26   BIND_GLOBAL/168           ?0        16?1                 1:'C6671ac66a4f1c57'	;0
	2   27   SWITCH_STRING/188         ?0        16?1                 2:array (
  'update' => 8,
  'post-update' => 138,
)	;390
	3   28   CASE/48                   #11=      16?1                 3:'update'          	;0	>>5
	4   28   JMPNZ/44                  ?0        #11                  ?8                  	;0	>>8
	5   97   CASE/48                   #11=      16?1                 4:'post-update'     	;0	>>7	<<3
	6   97   JMPNZ/44                  ?0        #11                  ?138                	;0	>>138
	7   97   JMP/42                    ?0        ?390                 ?0                  	;0	>>390	<<5
	8   29   GOTO/253                  ?0        ?96                  ?5                  	;0	<<4
	9   32   GOTO/253                  ?0        ?16                  ?6                  	;0
	10  34   INIT_STATIC_METHOD_CALL/113 ?0        7:'Xui\\Functions'   9:'checkUpdate'     	;2
	11  34   SEND_VAL_EX/116           ?80       11:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
	12  34   FETCH_CONSTANT/99         #12=      ?0                   12:'XUI_VERSION'    	;16
	13  34   SEND_VAL_EX/116           ?96       #12                  ?2                  	;0
	14  34   DO_FCALL/60               $13=      ?0                   ?0                  	;0
	15  34   ASSIGN/38                 ?3        16?2                 $13                 	;0
	16  36   GOTO/253                  ?0        ?36                  ?15                 	;0
	17  38   FETCH_CONSTANT/99         #15=      ?0                   16:'TMP_PATH'       	;16
	18  38   CONCAT/8                  #16=      #15                  19:'.update.tar.gz' 	;0
	19  38   ASSIGN/38                 ?6        16?3                 #16                 	;0
	20  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'fopen'          	;2
	21  39   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	22  39   SEND_VAL_EX/116           ?96       22:'wb'              ?2                  	;0
	23  39   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	24  39   ASSIGN/38                 ?8        16?4                 $18                 	;0
	25  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'stream_copy_to_stream'	;2
	26  40   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	27  40   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
	28  40   DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	29  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'fclose'         	;1
	30  41   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	31  41   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
	32  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'fclose'         	;1
	33  42   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	34  42   DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
	35  43   GOTO/253                  ?0        ?81                  ?29                 	;0
	36  45   JMPZ_EX/46                #23=      16?2                 ?43                 	;0	>>43
	37  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'strlen'         	;1
	38  45   FETCH_DIM_FUNC_ARG/93     $24=      16?2                 32:'url'            	;1
	39  45   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
	40  45   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
	41  45   IS_SMALLER/19             #26=      33:0                 $25                 	;0
	42  45   BOOL/52                   #23=      #26                  ?0                  	;0
	43  45   JMPZ/43                   ?0        #23                  ?45                 	;0	>>45	<<36
	44  46   GOTO/253                  ?0        ?47                  ?34                 	;0
	45  48   EXIT/79                   ?0        35:0                 ?0                  	;0	<<43
	46  49   GOTO/253                  ?0        ?67                  ?36                 	;0
	47  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'fopen'          	;2
	48  51   FETCH_DIM_FUNC_ARG/93     $27=      16?2                 39:'url'            	;1
	49  51   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
	50  51   SEND_VAL_EX/116           ?96       40:'rb'              ?2                  	;0
	51  51   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
	52  51   ASSIGN/38                 ?18       16?5                 $28                 	;0
	53  52   GOTO/253                  ?0        ?17                  ?41                 	;0
	54  54   FETCH_CONSTANT/99         #30=      ?0                   42:'XUI_HOME'       	;16
	55  54   CONCAT/8                  #31=      45:'sudo /usr/bin/python3 ' #30                 	;0
	56  54   CONCAT/8                  #32=      #31                  46:'update "'       	;0
	57  54   CONCAT/8                  #33=      #32                  16?3                	;0
	58  54   CONCAT/8                  #34=      #33                  47:'" "'            	;0
	59  54   FETCH_DIM_R/81            $35=      16?2                 48:'md5'            	;0
	60  54   CONCAT/8                  #36=      #34                  $35                 	;0
	61  54   CONCAT/8                  #37=      #36                  49:'" > /dev/null 2>&1 &'	;0
	62  54   ASSIGN/38                 ?27       16?1                 #37                 	;0
	63  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'shell_exec'     	;1
	64  55   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	65  55   DO_FCALL_BY_NAME/131      ?28       ?0                   ?0                  	;0
	66  56   EXIT/79                   ?0        52:1                 ?0                  	;0
	67  59   GOTO/253                  ?0        ?138                 ?53                 	;0
	68  61   JMPZ/43                   ?0        16?6                 ?70                 	;0	>>70
	69  62   GOTO/253                  ?0        ?72                  ?54                 	;0
	70  64   EXIT/79                   ?0        55:0                 ?0                  	;0	<<68
	71  65   GOTO/253                  ?0        ?9                   ?56                 	;0
	72  67   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'json_decode'    	;2
	73  67   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'file_get_contents'	;1
	74  67   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	75  67   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	76  67   SEND_VAR_NO_REF_EX/50     ?80       $40                  ?1                  	;0
	77  67   SEND_VAL_EX/116           ?96       61:true              ?2                  	;0
	78  67   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	79  67   ASSIGN/38                 ?31       16?2                 $41                 	;0
	80  68   GOTO/253                  ?0        ?9                   ?62                 	;0
	81  70   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'md5_file'       	;1
	82  70   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	83  70   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
	84  70   FETCH_DIM_R/81            $44=      16?2                 65:'md5'            	;0
	85  70   IS_EQUAL/17               #45=      $43                  $44                 	;0
	86  70   JMPZ/43                   ?0        #45                  ?88                 	;0	>>88
	87  71   GOTO/253                  ?0        ?90                  ?66                 	;0
	88  73   EXIT/79                   ?0        67:-1                ?0                  	;0	<<86
	89  74   GOTO/253                  ?0        ?67                  ?68                 	;0
	90  76   INIT_METHOD_CALL/112      ?0        16?0                 69:'query'          	;2
	91  76   SEND_VAL_EX/116           ?80       71:'UPDATE `servers` SET `status` = 5 WHERE `id` = ?;' ?1                  	;0
	92  76   FETCH_CONSTANT/99         #46=      ?0                   72:'SERVER_ID'      	;16
	93  76   SEND_VAL_EX/116           ?96       #46                  ?2                  	;0
	94  76   DO_FCALL/60               ?36       ?0                   ?0                  	;0
	95  77   GOTO/253                  ?0        ?54                  ?75                 	;0
	96  79   FETCH_CONSTANT/99         #49=      ?0                   79:'SERVER_ID'      	;16
	97  79   FETCH_STATIC_PROP_R/173   $48=      76:'rServers'        77:'XUI'            	;0
	98  79   FETCH_DIM_R/81            $50=      $48                  #49                 	;0
	99  79   FETCH_DIM_R/81            $51=      $50                  82:'is_main'        	;0
	100 79   JMPZ/43                   ?0        $51                  ?102                	;0	>>102
	101 80   GOTO/253                  ?0        ?10                  ?83                 	;0
	102 82   ASSIGN/38                 ?41       16?7                 84:NULL             	;0	<<100
	103 83   ASSIGN/38                 ?42       16?6                 85:NULL             	;0
	104 84   FETCH_STATIC_PROP_R/173   $54=      86:'rServers'        87:'XUI'            	;0
	105 84   FE_RESET_R/77             $55=      $54                  ?136                	;0
	106 84   FE_FETCH_R/78             ?0        $55                  16?8                	;136	>>136	<<135
	107 85   FETCH_DIM_R/81            $56=      16?8                 89:'is_main'        	;0
	108 85   BOOL_NOT/13               #57=      $56                  ?0                  	;0
	109 85   JMPZ/43                   ?0        #57                  ?112                	;0	>>112
	110 86   NOP/0                     ?0        ?0                   ?0                  	;1
	111 86   GOTO/253                  ?0        ?135                 ?90                 	;0
	112 88   FETCH_DIM_R/81            $58=      16?8                 91:'server_ip'      	;0	<<109
	113 88   CONCAT/8                  #59=      92:'http://'         $58                 	;0
	114 88   CONCAT/8                  #60=      #59                  93:':'              	;0
	115 88   FETCH_DIM_R/81            $61=      16?8                 94:'http_broadcast_port'	;0
	116 88   CONCAT/8                  #62=      #60                  $61                 	;0
	117 88   CONCAT/8                  #63=      #62                  95:'/api?password=' 	;0
	118 88   FETCH_STATIC_PROP_R/173   $64=      96:'rSettings'       97:'XUI'            	;0
	119 88   FETCH_DIM_R/81            $65=      $64                  99:'live_streaming_pass'	;0
	120 88   CONCAT/8                  #66=      #63                  $65                 	;0
	121 88   CONCAT/8                  #67=      #66                  100:'&action=request_update&type='	;0
	122 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'intval'        	;1
	123 88   FETCH_CONSTANT/99         #69=      ?0                   106:'SERVER_ID'     	;16
	124 88   FETCH_STATIC_PROP_FUNC_ARG/177 $68=      103:'rServers'       104:'XUI'           	;1
	125 88   FETCH_DIM_FUNC_ARG/93     $70=      $68                  #69                 	;1
	126 88   FETCH_DIM_FUNC_ARG/93     $71=      $70                  109:'server_type'   	;1
	127 88   SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
	128 88   DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	129 88   CONCAT/8                  #73=      #67                  $72                 	;0
	130 88   ASSIGN/38                 ?63       16?6                 #73                 	;0
	131 89   FETCH_DIM_R/81            $75=      16?8                 110:'xui_version'   	;0
	132 89   ASSIGN/38                 ?65       16?7                 $75                 	;0
	133 90   FE_FREE/127               ?0        $55                  ?3                  	;1
	134 90   GOTO/253                  ?0        ?137                 ?111                	;0
	135 92   JMP/42                    ?0        ?106                 ?0                  	;0	>>106
	136 92   FE_FREE/127               ?0        $55                  ?0                  	;0	<<105
	137 95   GOTO/253                  ?0        ?68                  ?112                	;0
	138 98   GOTO/253                  ?0        ?332                 ?113                	;0	<<6
	139 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'file_exists'   	;1
	140 100  FETCH_CONSTANT/99         #77=      ?0                   116:'XUI_HOME'      	;16
	141 100  CONCAT/8                  #78=      #77                  119:'crons/status.php'	;0
	142 100  SEND_VAL_EX/116           ?80       #78                  ?1                  	;0
	143 100  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
	144 100  BOOL_NOT/13               #80=      $79                  ?0                  	;0
	145 100  JMPZ/43                   ?0        #80                  ?147                	;0	>>147
	146 101  GOTO/253                  ?0        ?152                 ?120                	;0
	147 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'unlink'        	;1	<<145
	148 103  FETCH_CONSTANT/99         #81=      ?0                   123:'XUI_HOME'      	;16
	149 103  CONCAT/8                  #82=      #81                  126:'crons/status.php'	;0
	150 103  SEND_VAL_EX/116           ?80       #82                  ?1                  	;0
	151 103  DO_FCALL_BY_NAME/131      ?72       ?0                   ?0                  	;0
	152 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'file_exists'   	;1
	153 105  FETCH_CONSTANT/99         #84=      ?0                   129:'XUI_HOME'      	;16
	154 105  CONCAT/8                  #85=      #84                  132:'includes/handler.php'	;0
	155 105  SEND_VAL_EX/116           ?80       #85                  ?1                  	;0
	156 105  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
	157 105  BOOL_NOT/13               #87=      $86                  ?0                  	;0
	158 105  JMPZ/43                   ?0        #87                  ?160                	;0	>>160
	159 106  GOTO/253                  ?0        ?310                 ?133                	;0
	160 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'unlink'        	;1	<<158
	161 108  FETCH_CONSTANT/99         #88=      ?0                   136:'XUI_HOME'      	;16
	162 108  CONCAT/8                  #89=      #88                  139:'includes/handler.php'	;0
	163 108  SEND_VAL_EX/116           ?80       #89                  ?1                  	;0
	164 108  DO_FCALL_BY_NAME/131      ?79       ?0                   ?0                  	;0
	165 109  GOTO/253                  ?0        ?310                 ?140                	;0
	166 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'file_exists'   	;1
	167 111  FETCH_CONSTANT/99         #91=      ?0                   143:'XUI_HOME'      	;16
	168 111  CONCAT/8                  #92=      #91                  146:'bin/ffprobe'   	;0
	169 111  SEND_VAL_EX/116           ?80       #92                  ?1                  	;0
	170 111  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	171 111  BOOL_NOT/13               #94=      $93                  ?0                  	;0
	172 111  JMPZ/43                   ?0        #94                  ?174                	;0	>>174
	173 112  GOTO/253                  ?0        ?179                 ?147                	;0
	174 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'unlink'        	;1	<<172
	175 114  FETCH_CONSTANT/99         #95=      ?0                   150:'XUI_HOME'      	;16
	176 114  CONCAT/8                  #96=      #95                  153:'bin/ffprobe'   	;0
	177 114  SEND_VAL_EX/116           ?80       #96                  ?1                  	;0
	178 114  DO_FCALL_BY_NAME/131      ?86       ?0                   ?0                  	;0
	179 117  FE_RESET_R/77             $98=      154:array (
  0 => 'http',
  1 => 'https',
) ?212                	;0
	180 117  FE_FETCH_R/78             ?0        $98                  16?9                	;212	>>212	<<211
	181 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'file_get_contents'	;1
	182 118  FETCH_CONSTANT/99         #99=      ?0                   157:'XUI_HOME'      	;16
	183 118  CONCAT/8                  #100=     #99                  160:'bin/nginx/ports/'	;0
	184 118  CONCAT/8                  #101=     #100                 16?9                	;0
	185 118  CONCAT/8                  #102=     #101                 161:'.conf'         	;0
	186 118  SEND_VAL_EX/116           ?80       #102                 ?1                  	;0
	187 118  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
	188 118  ASSIGN/38                 ?93       16?10                $103                	;0
	189 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'stripos'       	;2
	190 119  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	191 119  SEND_VAL_EX/116           ?96       164:' reuseport'     ?2                  	;0
	192 119  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
	193 119  IS_NOT_IDENTICAL/16       #106=     $105                 165:false           	;0
	194 119  BOOL_NOT/13               #107=     #106                 ?0                  	;0
	195 119  JMPZ/43                   ?0        #107                 ?198                	;0	>>198
	196 120  NOP/0                     ?0        ?0                   ?0                  	;1
	197 120  GOTO/253                  ?0        ?211                 ?166                	;0
	198 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'file_put_contents'	;2	<<195
	199 122  FETCH_CONSTANT/99         #108=     ?0                   169:'XUI_HOME'      	;16
	200 122  CONCAT/8                  #109=     #108                 172:'bin/nginx/ports/'	;0
	201 122  CONCAT/8                  #110=     #109                 16?9                	;0
	202 122  CONCAT/8                  #111=     #110                 173:'.conf'         	;0
	203 122  SEND_VAL_EX/116           ?80       #111                 ?1                  	;0
	204 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'str_replace'   	;3
	205 122  SEND_VAL_EX/116           ?80       176:' reuseport'     ?1                  	;0
	206 122  SEND_VAL_EX/116           ?96       177:''               ?2                  	;0
	207 122  SEND_VAR_EX/66            ?112      16?10                ?3                  	;0
	208 122  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
	209 122  SEND_VAR_NO_REF_EX/50     ?96       $112                 ?2                  	;0
	210 122  DO_FCALL_BY_NAME/131      ?102      ?0                   ?0                  	;0
	211 124  JMP/42                    ?0        ?180                 ?0                  	;0	>>180
	212 124  FE_FREE/127               ?0        $98                  ?0                  	;0	<<179
	213 126  GOTO/253                  ?0        ?257                 ?178                	;0
	214 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'unlink'        	;1
	215 128  FETCH_CONSTANT/99         #114=     ?0                   181:'XUI_HOME'      	;16
	216 128  CONCAT/8                  #115=     #114                 184:'www/stream/auth.php'	;0
	217 128  SEND_VAL_EX/116           ?80       #115                 ?1                  	;0
	218 128  DO_FCALL_BY_NAME/131      ?105      ?0                   ?0                  	;0
	219 130  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'file_exists'   	;1
	220 130  FETCH_CONSTANT/99         #117=     ?0                   187:'XUI_HOME'      	;16
	221 130  CONCAT/8                  #118=     #117                 190:'includes/aes.php'	;0
	222 130  SEND_VAL_EX/116           ?80       #118                 ?1                  	;0
	223 130  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
	224 130  BOOL_NOT/13               #120=     $119                 ?0                  	;0
	225 130  JMPZ/43                   ?0        #120                 ?227                	;0	>>227
	226 131  GOTO/253                  ?0        ?232                 ?191                	;0
	227 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'unlink'        	;1	<<225
	228 133  FETCH_CONSTANT/99         #121=     ?0                   194:'XUI_HOME'      	;16
	229 133  CONCAT/8                  #122=     #121                 197:'includes/aes.php'	;0
	230 133  SEND_VAL_EX/116           ?80       #122                 ?1                  	;0
	231 133  DO_FCALL_BY_NAME/131      ?112      ?0                   ?0                  	;0
	232 135  GOTO/253                  ?0        ?139                 ?198                	;0
	233 137  FETCH_CONSTANT/99         #125=     ?0                   202:'SERVER_ID'     	;16
	234 137  FETCH_STATIC_PROP_R/173   $124=     199:'rServers'       200:'XUI'           	;0
	235 137  FETCH_DIM_R/81            $126=     $124                 #125                	;0
	236 137  FETCH_DIM_R/81            $127=     $126                 205:'is_main'       	;0
	237 137  JMPZ/43                   ?0        $127                 ?239                	;0	>>239
	238 138  GOTO/253                  ?0        ?179                 ?206                	;0
	239 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'file_exists'   	;1	<<237
	240 140  SEND_VAL_EX/116           ?80       209:'/etc/init.d/xuione' ?1                  	;0
	241 140  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
	242 140  BOOL_NOT/13               #129=     $128                 ?0                  	;0
	243 140  JMPZ/43                   ?0        #129                 ?245                	;0	>>245
	244 141  GOTO/253                  ?0        ?248                 ?210                	;0
	245 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'unlink'        	;1	<<243
	246 143  SEND_VAL_EX/116           ?80       213:'/etc/init.d/xuione' ?1                  	;0
	247 143  DO_FCALL_BY_NAME/131      ?119      ?0                   ?0                  	;0
	248 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'file_exists'   	;1
	249 145  FETCH_CONSTANT/99         #131=     ?0                   216:'XUI_HOME'      	;16
	250 145  CONCAT/8                  #132=     #131                 219:'www/stream/auth.php'	;0
	251 145  SEND_VAL_EX/116           ?80       #132                 ?1                  	;0
	252 145  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
	253 145  BOOL_NOT/13               #134=     $133                 ?0                  	;0
	254 145  JMPZ/43                   ?0        #134                 ?256                	;0	>>256
	255 146  GOTO/253                  ?0        ?219                 ?220                	;0
	256 148  GOTO/253                  ?0        ?214                 ?221                	;0	<<254
	257 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'file_exists'   	;1
	258 151  FETCH_CONSTANT/99         #135=     ?0                   224:'XUI_HOME'      	;16
	259 151  CONCAT/8                  #136=     #135                 227:'bin/redis'     	;0
	260 151  SEND_VAL_EX/116           ?80       #136                 ?1                  	;0
	261 151  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
	262 151  BOOL_NOT/13               #138=     $137                 ?0                  	;0
	263 151  JMPZ/43                   ?0        #138                 ?265                	;0	>>265
	264 152  GOTO/253                  ?0        ?271                 ?228                	;0
	265 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'exec'          	;1	<<263
	266 154  FETCH_CONSTANT/99         #139=     ?0                   231:'XUI_HOME'      	;16
	267 154  CONCAT/8                  #140=     234:'rm -rf '        #139                	;0
	268 154  CONCAT/8                  #141=     #140                 235:'bin/redis'     	;0
	269 154  SEND_VAL_EX/116           ?80       #141                 ?1                  	;0
	270 154  DO_FCALL_BY_NAME/131      ?131      ?0                   ?0                  	;0
	271 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'exec'          	;1
	272 156  FETCH_CONSTANT/99         #143=     ?0                   238:'XUI_HOME'      	;16
	273 156  CONCAT/8                  #144=     241:'sudo chown -R xui:xui ' #143                	;0
	274 156  SEND_VAL_EX/116           ?80       #144                 ?1                  	;0
	275 156  DO_FCALL_BY_NAME/131      ?134      ?0                   ?0                  	;0
	276 157  GOTO/253                  ?0        ?296                 ?242                	;0
	277 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'unlink'        	;1
	278 159  FETCH_CONSTANT/99         #146=     ?0                   245:'XUI_HOME'      	;16
	279 159  CONCAT/8                  #147=     #146                 248:'includes/cli/closed_cons.php'	;0
	280 159  SEND_VAL_EX/116           ?80       #147                 ?1                  	;0
	281 159  DO_FCALL_BY_NAME/131      ?137      ?0                   ?0                  	;0
	282 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'file_exists'   	;1
	283 161  FETCH_CONSTANT/99         #149=     ?0                   251:'XUI_HOME'      	;16
	284 161  CONCAT/8                  #150=     #149                 254:'bin/ffmpeg'    	;0
	285 161  SEND_VAL_EX/116           ?80       #150                 ?1                  	;0
	286 161  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
	287 161  BOOL_NOT/13               #152=     $151                 ?0                  	;0
	288 161  JMPZ/43                   ?0        #152                 ?290                	;0	>>290
	289 162  GOTO/253                  ?0        ?295                 ?255                	;0
	290 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'unlink'        	;1	<<288
	291 164  FETCH_CONSTANT/99         #153=     ?0                   258:'XUI_HOME'      	;16
	292 164  CONCAT/8                  #154=     #153                 261:'bin/ffmpeg'    	;0
	293 164  SEND_VAL_EX/116           ?80       #154                 ?1                  	;0
	294 164  DO_FCALL_BY_NAME/131      ?144      ?0                   ?0                  	;0
	295 166  GOTO/253                  ?0        ?166                 ?262                	;0
	296 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'exec'          	;1
	297 168  SEND_VAL_EX/116           ?80       265:'sudo systemctl daemon-reload' ?1                  	;0
	298 168  DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
	299 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'exec'          	;1
	300 169  SEND_VAL_EX/116           ?80       268:'sudo echo \'net.ipv4.ip_unprivileged_port_start=0\' > /etc/sysctl.d/50-allports-nonroot.conf && sudo sysctl --system' ?1                  	;0
	301 169  DO_FCALL_BY_NAME/131      ?146      ?0                   ?0                  	;0
	302 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'exec'          	;1
	303 170  FETCH_CONSTANT/99         #158=     ?0                   271:'XUI_HOME'      	;16
	304 170  CONCAT/8                  #159=     274:'sudo '          #158                	;0
	305 170  CONCAT/8                  #160=     #159                 275:'status'        	;0
	306 170  SEND_VAL_EX/116           ?80       #160                 ?1                  	;0
	307 170  DO_FCALL_BY_NAME/131      ?150      ?0                   ?0                  	;0
	308 171  GOTO/253                  ?0        ?390                 ?276                	;0
	309 172  GOTO/253                  ?0        ?390                 ?277                	;0
	310 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'file_exists'   	;1
	311 175  FETCH_CONSTANT/99         #162=     ?0                   280:'XUI_HOME'      	;16
	312 175  CONCAT/8                  #163=     #162                 283:'includes/nhandler.php'	;0
	313 175  SEND_VAL_EX/116           ?80       #163                 ?1                  	;0
	314 175  DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
	315 175  BOOL_NOT/13               #165=     $164                 ?0                  	;0
	316 175  JMPZ/43                   ?0        #165                 ?318                	;0	>>318
	317 176  GOTO/253                  ?0        ?323                 ?284                	;0
	318 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'unlink'        	;1	<<316
	319 178  FETCH_CONSTANT/99         #166=     ?0                   287:'XUI_HOME'      	;16
	320 178  CONCAT/8                  #167=     #166                 290:'includes/nhandler.php'	;0
	321 178  SEND_VAL_EX/116           ?80       #167                 ?1                  	;0
	322 178  DO_FCALL_BY_NAME/131      ?157      ?0                   ?0                  	;0
	323 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'file_exists'   	;1
	324 180  FETCH_CONSTANT/99         #169=     ?0                   293:'XUI_HOME'      	;16
	325 180  CONCAT/8                  #170=     #169                 296:'includes/cli/closed_cons.php'	;0
	326 180  SEND_VAL_EX/116           ?80       #170                 ?1                  	;0
	327 180  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
	328 180  BOOL_NOT/13               #172=     $171                 ?0                  	;0
	329 180  JMPZ/43                   ?0        #172                 ?331                	;0	>>331
	330 181  GOTO/253                  ?0        ?282                 ?297                	;0
	331 183  GOTO/253                  ?0        ?277                 ?298                	;0	<<329
	332 185  FETCH_CONSTANT/99         #174=     ?0                   302:'SERVER_ID'     	;16
	333 185  FETCH_STATIC_PROP_R/173   $173=     299:'rServers'       300:'XUI'           	;0
	334 185  FETCH_DIM_R/81            $175=     $173                 #174                	;0
	335 185  FETCH_DIM_R/81            $176=     $175                 305:'is_main'       	;0
	336 185  JMPZ_EX/46                #177=     $176                 ?340                	;0	>>340
	337 185  FETCH_STATIC_PROP_R/173   $178=     306:'rSettings'      307:'XUI'           	;0
	338 185  FETCH_DIM_R/81            $179=     $178                 309:'auto_update_lbs'	;0
	339 185  BOOL/52                   #177=     $179                 ?0                  	;0
	340 185  BOOL_NOT/13               #180=     #177                 ?0                  	;0	<<336
	341 185  JMPZ/43                   ?0        #180                 ?343                	;0	>>343
	342 186  GOTO/253                  ?0        ?380                 ?310                	;0
	343 188  FETCH_STATIC_PROP_R/173   $181=     311:'rServers'       312:'XUI'           	;0	<<341
	344 188  FE_RESET_R/77             $182=     $181                 ?379                	;0
	345 188  FE_FETCH_R/78             ?0        $182                 16?8                	;379	>>379	<<378
	346 189  FETCH_DIM_R/81            $183=     16?8                 314:'enabled'       	;0
	347 189  JMPZ_EX/46                #184=     $183                 ?351                	;0	>>351
	348 189  FETCH_DIM_R/81            $185=     16?8                 315:'status'        	;0
	349 189  IS_EQUAL/17               #186=     $185                 316:1               	;0
	350 189  BOOL/52                   #184=     #186                 ?0                  	;0
	351 189  JMPZ_EX/46                #184=     #184                 ?358                	;0	>>358	<<347
	352 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   317:'time'          	;0
	353 189  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
	354 189  FETCH_DIM_R/81            $188=     16?8                 319:'last_check_ago'	;0
	355 189  SUB/2                     #189=     $187                 $188                	;0
	356 189  IS_SMALLER_OR_EQUAL/20    #190=     #189                 320:180             	;0
	357 189  BOOL/52                   #184=     #190                 ?0                  	;0
	358 189  JMPZ_EX/46                #184=     #184                 ?362                	;0	>>362	<<351
	359 189  FETCH_DIM_R/81            $191=     16?8                 321:'is_main'       	;0
	360 189  BOOL_NOT/13               #192=     $191                 ?0                  	;0
	361 189  BOOL/52                   #184=     #192                 ?0                  	;0
	362 189  BOOL_NOT/13               #193=     #184                 ?0                  	;0	<<358
	363 189  JMPZ/43                   ?0        #193                 ?366                	;0	>>366
	364 190  NOP/0                     ?0        ?0                   ?0                  	;1
	365 190  GOTO/253                  ?0        ?378                 ?322                	;0
	366 192  INIT_METHOD_CALL/112      ?0        16?0                 323:'query'         	;4	<<363
	367 192  SEND_VAL_EX/116           ?80       325:'INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);' ?1                  	;0
	368 192  FETCH_DIM_FUNC_ARG/93     $194=     16?8                 326:'id'            	;2
	369 192  SEND_VAR_EX/66            ?96       $194                 ?2                  	;0
	370 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'time'          	;0
	371 192  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
	372 192  SEND_VAR_NO_REF_EX/50     ?112      $195                 ?3                  	;0
	373 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'json_encode'   	;1
	374 192  SEND_VAL_EX/116           ?80       331:array (
  'action' => 'update',
) ?1                  	;0
	375 192  DO_FCALL_BY_NAME/131      $196=     ?0                   ?0                  	;0
	376 192  SEND_VAR_NO_REF_EX/50     ?128      $196                 ?4                  	;0
	377 192  DO_FCALL/60               ?186      ?0                   ?0                  	;0
	378 194  JMP/42                    ?0        ?345                 ?0                  	;0	>>345
	379 194  FE_FREE/127               ?0        $182                 ?0                  	;0	<<344
	380 198  INIT_METHOD_CALL/112      ?0        16?0                 332:'query'         	;4
	381 198  SEND_VAL_EX/116           ?80       334:'UPDATE `servers` SET `status` = 1, `xui_version` = ?, `xui_revision` = ? WHERE `id` = ?;' ?1                  	;0
	382 198  FETCH_CONSTANT/99         #198=     ?0                   335:'XUI_VERSION'   	;16
	383 198  SEND_VAL_EX/116           ?96       #198                 ?2                  	;0
	384 198  FETCH_CONSTANT/99         #199=     ?0                   338:'XUI_REVISION'  	;16
	385 198  SEND_VAL_EX/116           ?112      #199                 ?3                  	;0
	386 198  FETCH_CONSTANT/99         #200=     ?0                   341:'SERVER_ID'     	;16
	387 198  SEND_VAL_EX/116           ?128      #200                 ?4                  	;0
	388 198  DO_FCALL/60               ?190      ?0                   ?0                  	;0
	389 199  GOTO/253                  ?0        ?233                 ?344                	;0
	390 204  NOP/0                     ?0        345:NULL             ?0                  	;4294967295	<<7
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
0   3    JMP/42                    ?0        ?19                  ?0                  	;0	>>19
1   5    EXIT/79                   ?0        1:'Not supported in Trial Mode.
' ?0                  	;0
2   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'register_shutdown_function'	;1
3   7    SEND_VAL_EX/116           ?80       4:'shutdown'         ?1                  	;0
4   7    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'str_replace'     	;3
6   8    SEND_VAL_EX/116           ?80       7:'\\'               ?1                  	;0
7   8    SEND_VAL_EX/116           ?96       8:'/'                ?2                  	;0
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'dirname'         	;1
9   8    FETCH_DIM_FUNC_ARG/93     $3=       16?0                 11:0                	;1
10  8    SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
11  8    DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
12  8    SEND_VAR_NO_REF_EX/50     ?112      $4                   ?3                  	;0
13  8    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
14  8    CONCAT/8                  #6=       $5                   12:'/../../www/init.php'	;0
15  8    INCLUDE_OR_EVAL/73        ?5        #6                   ?0                  	;8
16  9    FETCH_DIM_R/81            $8=       16?0                 13:1                	;0
17  9    ASSIGN/38                 ?7        16?1                 $8                  	;0
18  10   GOTO/253                  ?0        ?44                  ?14                 	;0
19  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'set_time_limit' 	;1	<<0
20  12   SEND_VAL_EX/116           ?80       17:0                 ?1                  	;0
21  12   DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
22  13   BEGIN_SILENCE/57          #11=      ?0                   ?0                  	;0
23  13   FETCH_R/80                $12=      18:'argc'            ?0                  	;268435456
24  13   END_SILENCE/58            ?0        #11                  ?0                  	;0
25  13   BOOL_NOT/13               #13=      $12                  ?0                  	;0
26  13   JMPNZ_EX/47               #13=      #13                  ?32                 	;0	>>32
27  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'count'          	;1
28  13   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
29  13   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
30  13   IS_NOT_EQUAL/18           #15=      $14                  21:2                	;0
31  13   BOOL/52                   #13=      #15                  ?0                  	;0
32  13   BOOL_NOT/13               #16=      #13                  ?0                  	;0	<<26
33  13   JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
34  14   GOTO/253                  ?0        ?36                  ?22                 	;0
35  16   EXIT/79                   ?0        23:0                 ?0                  	;0	<<33
36  18   INIT_STATIC_METHOD_CALL/113 ?0        24:'Xui\\Functions'  26:'getLicense'     	;0
37  18   DO_FCALL/60               $17=      ?0                   ?0                  	;0
38  18   FETCH_DIM_R/81            $18=      $17                  28:9                	;0
39  18   IS_EQUAL/17               #19=      $18                  29:1                	;0
40  18   BOOL_NOT/13               #20=      #19                  ?0                  	;0
41  18   JMPZ/43                   ?0        #20                  ?43                 	;0	>>43
42  19   GOTO/253                  ?0        ?2                   ?30                 	;0
43  21   GOTO/253                  ?0        ?1                   ?31                 	;0	<<41
44  24   NOP/0                     ?0        ?0                   ?0                  	;0
45  205  INIT_FCALL/61             ?0        ?3312                32:'ed8dbf4549416fa2'	;0
46  205  DO_FCALL/60               ?19       ?0                   ?0                  	;0
47  206  GOTO/253                  ?0        ?48                  ?33                 	;0
48  208  NOP/0                     ?0        ?0                   ?0                  	;0
49  217  NOP/0                     ?0        34:1                 ?0                  	;4294967295
*/

?>