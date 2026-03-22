<?php


function Ed8dBF4549416Fa2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   11   JMP/42                    ?0        ?167                 ?0                  	;0	>>167
	1   13   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'file_put_contents'	;2
	2   13   FETCH_CONSTANT/99         #23=      ?0                   3:'BIN_PATH'        	;16
	3   13   CONCAT/8                  #24=      #23                  6:'nginx/conf/ssl.conf'	;0
	4   13   SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
	5   13   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	6   13   DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
	7   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'shell_exec'      	;1
	8   14   FETCH_CONSTANT/99         #26=      ?0                   9:'BIN_PATH'        	;16
	9   14   CONCAT/8                  #27=      12:'chown xui:xui '  #26                 	;0
	10  14   CONCAT/8                  #28=      #27                  13:'nginx/conf/ssl.conf'	;0
	11  14   SEND_VAL_EX/116           ?80       #28                  ?1                  	;0
	12  14   DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
	13  15   INIT_METHOD_CALL/112      ?0        16?1                 14:'query'          	;3
	14  15   SEND_VAL_EX/116           ?80       16:'UPDATE `servers` SET `certbot_ssl` = ? WHERE `id` = ?;' ?1                  	;0
	15  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'json_encode'    	;1
	16  15   FETCH_DIM_FUNC_ARG/93     $30=      16?2                 19:1                	;1
	17  15   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
	18  15   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	19  15   SEND_VAR_NO_REF_EX/50     ?96       $31                  ?2                  	;0
	20  15   FETCH_CONSTANT/99         #32=      ?0                   20:'SERVER_ID'      	;16
	21  15   SEND_VAL_EX/116           ?112      #32                  ?3                  	;0
	22  15   DO_FCALL/60               ?10       ?0                   ?0                  	;0
	23  16   ASSIGN/38                 ?11       16?3                 23:true             	;0
	24  18   GOTO/253                  ?0        ?114                 ?24                 	;0
	25  21   FE_RESET_R/77             $35=      25:array (
  0 => 'logs',
  1 => 'config',
  2 => 'work',
) ?46                 	;0
	26  21   FE_FETCH_R/78             ?0        $35                  16?4                	;46	>>46	<<45
	27  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'file_exists'    	;1
	28  22   FETCH_CONSTANT/99         #36=      ?0                   28:'BIN_PATH'       	;16
	29  22   CONCAT/8                  #37=      #36                  31:'certbot/'       	;0
	30  22   CONCAT/8                  #38=      #37                  16?4                	;0
	31  22   CONCAT/8                  #39=      #38                  32:'/.certbot.lock' 	;0
	32  22   SEND_VAL_EX/116           ?80       #39                  ?1                  	;0
	33  22   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	34  22   BOOL_NOT/13               #41=      $40                  ?0                  	;0
	35  22   JMPZ/43                   ?0        #41                  ?38                 	;0	>>38
	36  23   NOP/0                     ?0        ?0                   ?0                  	;1
	37  23   GOTO/253                  ?0        ?45                  ?33                 	;0
	38  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'unlink'         	;1	<<35
	39  25   FETCH_CONSTANT/99         #42=      ?0                   36:'BIN_PATH'       	;16
	40  25   CONCAT/8                  #43=      #42                  39:'certbot/'       	;0
	41  25   CONCAT/8                  #44=      #43                  16?4                	;0
	42  25   CONCAT/8                  #45=      #44                  40:'/.certbot.lock' 	;0
	43  25   SEND_VAL_EX/116           ?80       #45                  ?1                  	;0
	44  25   DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
	45  27   JMP/42                    ?0        ?26                  ?0                  	;0	>>26
	46  27   FE_FREE/127               ?0        $35                  ?0                  	;0	<<25
	47  30   ASSIGN/38                 ?24       16?5                 41:array (
)        	;0
	48  31   FETCH_DIM_R/81            $48=      16?6                 42:'domain'         	;0
	49  31   FE_RESET_R/77             $49=      $48                  ?62                 	;0
	50  31   FE_FETCH_R/78             ?0        $49                  16?7                	;62	>>62	<<61
	51  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'filter_var'     	;2
	52  32   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	53  32   FETCH_CONSTANT/99         #50=      ?0                   45:'FILTER_VALIDATE_IP'	;16
	54  32   SEND_VAL_EX/116           ?96       #50                  ?2                  	;0
	55  32   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
	56  32   JMPZ/43                   ?0        $51                  ?59                 	;0	>>59
	57  33   NOP/0                     ?0        ?0                   ?0                  	;1
	58  33   GOTO/253                  ?0        ?61                  ?48                 	;0
	59  35   ASSIGN_DIM/147            ?29       16?5                 ?4397406            	;0	<<56
	60  35   OP_DATA/137               ?0        16?7                 ?0                  	;0
	61  37   JMP/42                    ?0        ?50                  ?0                  	;0	>>50
	62  37   FE_FREE/127               ?0        $49                  ?0                  	;0	<<49
	63  39   GOTO/253                  ?0        ?157                 ?49                 	;0
	64  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'in_array'       	;2
	65  42   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	66  42   SEND_VAL_EX/116           ?96       52:array (
  0 => 0,
  1 => 1,
) ?2                  	;0
	67  42   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
	68  42   BOOL_NOT/13               #54=      $53                  ?0                  	;0
	69  42   JMPZ/43                   ?0        #54                  ?71                 	;0	>>71
	70  43   GOTO/253                  ?0        ?114                 ?53                 	;0
	71  45   INIT_METHOD_CALL/112      ?0        16?1                 54:'query'          	;2	<<69
	72  45   SEND_VAL_EX/116           ?80       56:'SELECT `certbot_ssl` FROM `servers` WHERE `id` = ?;' ?1                  	;0
	73  45   FETCH_CONSTANT/99         #55=      ?0                   57:'SERVER_ID'      	;16
	74  45   SEND_VAL_EX/116           ?96       #55                  ?2                  	;0
	75  45   DO_FCALL/60               ?33       ?0                   ?0                  	;0
	76  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'json_decode'    	;2
	77  46   INIT_METHOD_CALL/112      ?0        16?1                 62:'get_row'        	;0
	78  46   DO_FCALL/60               $57=      ?0                   ?0                  	;0
	79  46   SEPARATE/156              $57=      $57                  ?0                  	;0
	80  46   FETCH_DIM_FUNC_ARG/93     $58=      $57                  64:'certbot_ssl'    	;1
	81  46   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
	82  46   SEND_VAL_EX/116           ?96       65:true              ?2                  	;0
	83  46   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	84  46   ASSIGN/38                 ?37       16?9                 $59                 	;0
	85  47   JMPZ/43                   ?0        16?9                 ?87                 	;0	>>87
	86  48   GOTO/253                  ?0        ?114                 ?66                 	;0
	87  50   GOTO/253                  ?0        ?423                 ?67                 	;0	<<85
	88  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'file_put_contents'	;2
	89  52   FETCH_CONSTANT/99         #61=      ?0                   70:'BIN_PATH'       	;16
	90  52   CONCAT/8                  #62=      #61                  73:'certbot/logs/xui.log'	;0
	91  52   SEND_VAL_EX/116           ?80       #62                  ?1                  	;0
	92  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'json_encode'    	;1
	93  52   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
	94  52   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
	95  52   SEND_VAR_NO_REF_EX/50     ?96       $63                  ?2                  	;0
	96  52   DO_FCALL_BY_NAME/131      ?41       ?0                   ?0                  	;0
	97  53   BOOL_NOT/13               #65=      16?3                 ?0                  	;0
	98  53   JMPZ/43                   ?0        #65                  ?100                	;0	>>100
	99  54   GOTO/253                  ?0        ?105                 ?76                 	;0
	100 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'shell_exec'     	;1	<<98
	101 56   FETCH_CONSTANT/99         #66=      ?0                   79:'XUI_HOME'       	;16
	102 56   CONCAT/8                  #67=      #66                  82:'service reload' 	;0
	103 56   SEND_VAL_EX/116           ?80       #67                  ?1                  	;0
	104 56   DO_FCALL_BY_NAME/131      ?45       ?0                   ?0                  	;0
	105 58   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'shell_exec'     	;1
	106 58   FETCH_CONSTANT/99         #69=      ?0                   85:'PHP_BIN'        	;16
	107 58   CONCAT/8                  #70=      #69                  88:' '              	;0
	108 58   FETCH_CONSTANT/99         #71=      ?0                   89:'CRON_PATH'      	;16
	109 58   CONCAT/8                  #72=      #70                  #71                 	;0
	110 58   CONCAT/8                  #73=      #72                  92:'certbot.php 1 > /dev/null 2>/dev/null &'	;0
	111 58   SEND_VAL_EX/116           ?80       #73                  ?1                  	;0
	112 58   DO_FCALL_BY_NAME/131      ?51       ?0                   ?0                  	;0
	113 59   GOTO/253                  ?0        ?156                 ?93                 	;0
	114 64   INIT_ARRAY/71             #75=      16?3                 94:'status'         	;14
	115 64   ADD_ARRAY_ELEMENT/72      #75=      16?8                 95:'error'          	;0
	116 64   ADD_ARRAY_ELEMENT/72      #75=      16?11                96:'output'         	;0
	117 64   ASSIGN/38                 ?53       16?10                #75                 	;0
	118 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'shell_exec'     	;1
	119 65   FETCH_CONSTANT/99         #77=      ?0                   99:'BIN_PATH'       	;16
	120 65   CONCAT/8                  #78=      102:'chown -R xui:xui ' #77                 	;0
	121 65   CONCAT/8                  #79=      #78                  103:'certbot/'      	;0
	122 65   SEND_VAL_EX/116           ?80       #79                  ?1                  	;0
	123 65   DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
	124 66   GOTO/253                  ?0        ?88                  ?104                	;0
	125 68   CONCAT/8                  #81=      16?13                105:'/fullchain.pem'	;0
	126 68   ASSIGN/38                 ?59       16?12                #81                 	;0
	127 69   CONCAT/8                  #83=      16?13                106:'/chain.pem'    	;0
	128 69   ASSIGN/38                 ?61       16?14                #83                 	;0
	129 70   CONCAT/8                  #85=      16?13                107:'/privkey.pem'  	;0
	130 70   ASSIGN/38                 ?63       16?15                #85                 	;0
	131 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'file_exists'   	;1
	132 71   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	133 71   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
	134 71   JMPZ_EX/46                #88=      $87                  ?139                	;0	>>139
	135 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'file_exists'   	;1
	136 71   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	137 71   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
	138 71   BOOL/52                   #88=      $89                  ?0                  	;0
	139 71   JMPZ_EX/46                #88=      #88                  ?144                	;0	>>144	<<134
	140 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'file_exists'   	;1
	141 71   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	142 71   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	143 71   BOOL/52                   #88=      $90                  ?0                  	;0
	144 71   BOOL_NOT/13               #91=      #88                  ?0                  	;0	<<139
	145 71   JMPZ/43                   ?0        #91                  ?147                	;0	>>147
	146 72   GOTO/253                  ?0        ?24                  ?114                	;0
	147 74   ROPE_INIT/54              #93=      ?0                   115:'ssl_certificate '	;7	<<145
	148 74   ROPE_ADD/55               #93=      #93                  16?12               	;1
	149 74   ROPE_ADD/55               #93=      #93                  116:';
ssl_certificate_key '	;2
	150 74   ROPE_ADD/55               #93=      #93                  16?15               	;3
	151 74   ROPE_ADD/55               #93=      #93                  117:';
ssl_trusted_certificate '	;4
	152 74   ROPE_ADD/55               #93=      #93                  16?14               	;5
	153 74   ROPE_END/56               #92=      #93                  118:';
ssl_protocols TLSv1.2 TLSv1.3;
ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;
ssl_prefer_server_ciphers off;
ssl_ecdh_curve auto;
ssl_session_timeout 10m;
ssl_session_cache shared:MozSSL:10m;
ssl_session_tickets off;'	;6
	154 74   ASSIGN/38                 ?74       16?0                 #92                 	;0
	155 75   GOTO/253                  ?0        ?1                   ?119                	;0
	156 78   GOTO/253                  ?0        ?533                 ?120                	;0
	157 81   ASSIGN/38                 ?75       16?8                 121:NULL            	;0
	158 82   ASSIGN/38                 ?76       16?11                122:array (
)       	;0
	159 83   ASSIGN/38                 ?77       16?3                 123:false           	;0
	160 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'count'         	;1
	161 84   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	162 84   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
	163 84   IS_SMALLER/19             #102=     126:0                $101                	;0
	164 84   JMPZ/43                   ?0        #102                 ?166                	;0	>>166
	165 85   GOTO/253                  ?0        ?199                 ?127                	;0
	166 87   GOTO/253                  ?0        ?197                 ?128                	;0	<<164
	167 89   BIND_GLOBAL/168           ?0        16?1                 129:'b62d6460eb33ea07'	;0	<<0
	168 89   BIND_GLOBAL/168           ?0        16?16                130:'argv'          	;0
	169 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'json_decode'   	;2
	170 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'base64_decode' 	;1
	171 90   FETCH_DIM_FUNC_ARG/93     $103=     16?16                135:1               	;1
	172 90   SEND_VAR_EX/66            ?80       $103                 ?1                  	;0
	173 90   DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
	174 90   SEND_VAR_NO_REF_EX/50     ?80       $104                 ?1                  	;0
	175 90   SEND_VAL_EX/116           ?96       136:true             ?2                  	;0
	176 90   DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
	177 90   ASSIGN/38                 ?83       16?6                 $105                	;0
	178 91   FETCH_DIM_R/81            $107=     16?6                 137:'action'        	;0
	179 91   IS_EQUAL/17               #108=     $107                 138:'certbot_generate'	;0
	180 91   BOOL_NOT/13               #109=     #108                 ?0                  	;0
	181 91   JMPZ/43                   ?0        #109                 ?183                	;0	>>183
	182 92   GOTO/253                  ?0        ?156                 ?139                	;0
	183 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'file_exists'   	;1	<<181
	184 94   FETCH_CONSTANT/99         #110=     ?0                   142:'BIN_PATH'      	;16
	185 94   CONCAT/8                  #111=     #110                 145:'certbot/logs/xui.log'	;0
	186 94   SEND_VAL_EX/116           ?80       #111                 ?1                  	;0
	187 94   DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
	188 94   BOOL_NOT/13               #113=     $112                 ?0                  	;0
	189 94   JMPZ/43                   ?0        #113                 ?191                	;0	>>191
	190 95   GOTO/253                  ?0        ?25                  ?146                	;0
	191 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'unlink'        	;1	<<189
	192 97   FETCH_CONSTANT/99         #114=     ?0                   149:'BIN_PATH'      	;16
	193 97   CONCAT/8                  #115=     #114                 152:'certbot/logs/xui.log'	;0
	194 97   SEND_VAL_EX/116           ?80       #115                 ?1                  	;0
	195 97   DO_FCALL_BY_NAME/131      ?93       ?0                   ?0                  	;0
	196 98   GOTO/253                  ?0        ?25                  ?153                	;0
	197 100  ASSIGN/38                 ?94       16?8                 154:3               	;0
	198 101  GOTO/253                  ?0        ?64                  ?155                	;0
	199 103  FE_RESET_R/77             $118=     156:array (
  0 => '--dry-run ',
  1 => '',
) ?421                	;0
	200 103  FE_FETCH_R/78             ?0        $118                 16?17               	;421	>>421	<<420
	201 104  NOP/0                     ?0        ?0                   ?0                  	;1
	202 104  GOTO/253                  ?0        ?315                 ?157                	;0
	203 106  NOP/0                     ?0        ?0                   ?0                  	;1
	204 106  GOTO/253                  ?0        ?354                 ?158                	;0
	205 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'stripos'       	;2
	206 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'implode'       	;2
	207 108  SEND_VAL_EX/116           ?80       163:'
'              ?1                  	;0
	208 108  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	209 108  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
	210 108  SEND_VAR_NO_REF_EX/50     ?80       $119                 ?1                  	;0
	211 108  SEND_VAL_EX/116           ?96       164:'certificate and chain have been saved at' ?2                  	;0
	212 108  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
	213 108  IS_NOT_IDENTICAL/16       #121=     $120                 165:false           	;0
	214 108  JMPZ/43                   ?0        #121                 ?217                	;0	>>217
	215 109  NOP/0                     ?0        ?0                   ?0                  	;1
	216 109  GOTO/253                  ?0        ?358                 ?166                	;0
	217 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'stripos'       	;2	<<214
	218 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'implode'       	;2
	219 111  SEND_VAL_EX/116           ?80       171:'
'              ?1                  	;0
	220 111  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	221 111  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
	222 111  SEND_VAR_NO_REF_EX/50     ?80       $122                 ?1                  	;0
	223 111  SEND_VAL_EX/116           ?96       172:'cert not yet due for renewal' ?2                  	;0
	224 111  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
	225 111  IS_NOT_IDENTICAL/16       #124=     $123                 173:false           	;0
	226 111  JMPZ/43                   ?0        #124                 ?229                	;0	>>229
	227 112  NOP/0                     ?0        ?0                   ?0                  	;1
	228 112  GOTO/253                  ?0        ?304                 ?174                	;0
	229 114  ECHO/40                   ?0        175:'Error: An error occured!
' ?0                  	;0	<<226
	230 115  NOP/0                     ?0        ?0                   ?0                  	;1
	231 115  GOTO/253                  ?0        ?301                 ?176                	;0
	232 117  ECHO/40                   ?0        177:'Error: Failed to generate certificate!
' ?0                  	;0
	233 118  ASSIGN/38                 ?102      16?8                 178:0               	;0
	234 119  NOP/0                     ?0        ?0                   ?0                  	;1
	235 119  GOTO/253                  ?0        ?352                 ?179                	;0
	236 121  ROPE_INIT/54              #127=     ?0                   180:'ssl_certificate '	;7
	237 121  ROPE_ADD/55               #127=     #127                 16?12               	;1
	238 121  ROPE_ADD/55               #127=     #127                 181:';
ssl_certificate_key '	;2
	239 121  ROPE_ADD/55               #127=     #127                 16?15               	;3
	240 121  ROPE_ADD/55               #127=     #127                 182:';
ssl_trusted_certificate '	;4
	241 121  ROPE_ADD/55               #127=     #127                 16?14               	;5
	242 121  ROPE_END/56               #126=     #127                 183:';
ssl_protocols TLSv1.2 TLSv1.3;
ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;
ssl_prefer_server_ciphers off;
ssl_ecdh_curve auto;
ssl_session_timeout 10m;
ssl_session_cache shared:MozSSL:10m;
ssl_session_tickets off;'	;6
	243 121  ASSIGN/38                 ?108      16?0                 #126                	;0
	244 122  NOP/0                     ?0        ?0                   ?0                  	;1
	245 122  GOTO/253                  ?0        ?270                 ?184                	;0
	246 125  CONCAT/8                  #132=     16?13                185:'/fullchain.pem'	;0
	247 125  ASSIGN/38                 ?110      16?12                #132                	;0
	248 126  CONCAT/8                  #134=     16?13                186:'/chain.pem'    	;0
	249 126  ASSIGN/38                 ?112      16?14                #134                	;0
	250 127  CONCAT/8                  #136=     16?13                187:'/privkey.pem'  	;0
	251 127  ASSIGN/38                 ?114      16?15                #136                	;0
	252 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'file_exists'   	;1
	253 128  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	254 128  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
	255 128  JMPZ_EX/46                #139=     $138                 ?260                	;0	>>260
	256 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'file_exists'   	;1
	257 128  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	258 128  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
	259 128  BOOL/52                   #139=     $140                 ?0                  	;0
	260 128  JMPZ_EX/46                #139=     #139                 ?265                	;0	>>265	<<255
	261 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'file_exists'   	;1
	262 128  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	263 128  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
	264 128  BOOL/52                   #139=     $141                 ?0                  	;0
	265 128  JMPZ/43                   ?0        #139                 ?268                	;0	>>268	<<260
	266 129  NOP/0                     ?0        ?0                   ?0                  	;1
	267 129  GOTO/253                  ?0        ?236                 ?194                	;0
	268 131  NOP/0                     ?0        ?0                   ?0                  	;1	<<265
	269 131  GOTO/253                  ?0        ?232                 ?195                	;0
	270 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'file_put_contents'	;2
	271 133  FETCH_CONSTANT/99         #142=     ?0                   198:'BIN_PATH'      	;16
	272 133  CONCAT/8                  #143=     #142                 201:'nginx/conf/ssl.conf'	;0
	273 133  SEND_VAL_EX/116           ?80       #143                 ?1                  	;0
	274 133  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	275 133  DO_FCALL_BY_NAME/131      ?121      ?0                   ?0                  	;0
	276 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'shell_exec'    	;1
	277 134  FETCH_CONSTANT/99         #145=     ?0                   204:'BIN_PATH'      	;16
	278 134  CONCAT/8                  #146=     207:'chown xui:xui ' #145                	;0
	279 134  CONCAT/8                  #147=     #146                 208:'nginx/conf/ssl.conf'	;0
	280 134  SEND_VAL_EX/116           ?80       #147                 ?1                  	;0
	281 134  DO_FCALL_BY_NAME/131      ?125      ?0                   ?0                  	;0
	282 135  INIT_STATIC_METHOD_CALL/113 ?0        209:'XUI'            211:'d6A9D4057776E78D'	;0
	283 135  DO_FCALL/60               $149=     ?0                   ?0                  	;0
	284 135  ASSIGN/38                 ?127      16?18                $149                	;0
	285 136  FETCH_DIM_R/81            $151=     16?18                213:'serial'        	;0
	286 136  BOOL_NOT/13               #152=     $151                 ?0                  	;0
	287 136  JMPZ/43                   ?0        #152                 ?290                	;0	>>290
	288 137  NOP/0                     ?0        ?0                   ?0                  	;1
	289 137  GOTO/253                  ?0        ?351                 ?214                	;0
	290 139  INIT_METHOD_CALL/112      ?0        16?1                 215:'query'         	;3	<<287
	291 139  SEND_VAL_EX/116           ?80       217:'UPDATE `servers` SET `certbot_ssl` = ? WHERE `id` = ?;' ?1                  	;0
	292 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'json_encode'   	;1
	293 139  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
	294 139  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
	295 139  SEND_VAR_NO_REF_EX/50     ?96       $153                 ?2                  	;0
	296 139  FETCH_CONSTANT/99         #154=     ?0                   220:'SERVER_ID'     	;16
	297 139  SEND_VAL_EX/116           ?112      #154                 ?3                  	;0
	298 139  DO_FCALL/60               ?132      ?0                   ?0                  	;0
	299 140  NOP/0                     ?0        ?0                   ?0                  	;1
	300 140  GOTO/253                  ?0        ?351                 ?223                	;0
	301 142  ASSIGN/38                 ?133      16?8                 224:2               	;0
	302 143  NOP/0                     ?0        ?0                   ?0                  	;1
	303 143  GOTO/253                  ?0        ?356                 ?225                	;0
	304 145  ECHO/40                   ?0        226:'Warning: Certificate not due for renewal!
' ?0                  	;0
	305 146  ASSIGN/38                 ?134      16?8                 227:1               	;0
	306 147  NOP/0                     ?0        ?0                   ?0                  	;1
	307 147  GOTO/253                  ?0        ?356                 ?228                	;0
	308 149  FE_FREE/127               ?0        $118                 ?5                  	;1
	309 149  GOTO/253                  ?0        ?422                 ?229                	;0
	310 150  NOP/0                     ?0        ?0                   ?0                  	;1
	311 150  GOTO/253                  ?0        ?313                 ?230                	;0
	312 152  ECHO/40                   ?0        231:'Dry run successful!
' ?0                  	;0
	313 154  NOP/0                     ?0        ?0                   ?0                  	;1
	314 154  GOTO/253                  ?0        ?203                 ?232                	;0
	315 156  FETCH_CONSTANT/99         #159=     ?0                   236:'SERVER_ID'     	;16
	316 156  FETCH_STATIC_PROP_R/173   $158=     233:'rServers'       234:'XUI'           	;0
	317 156  FETCH_DIM_R/81            $160=     $158                 #159                	;0
	318 156  FETCH_DIM_R/81            $161=     $160                 239:'http_broadcast_port'	;0
	319 156  IS_EQUAL/17               #162=     $161                 240:80              	;0
	320 156  JMPZ/43                   ?0        #162                 ?323                	;0	>>323
	321 157  NOP/0                     ?0        ?0                   ?0                  	;1
	322 157  GOTO/253                  ?0        ?337                 ?241                	;0
	323 159  CONCAT/8                  #163=     242:'sudo certbot '  16?17               	;0	<<320
	324 159  CONCAT/8                  #164=     #163                 243:'--config-dir ' 	;0
	325 159  FETCH_CONSTANT/99         #165=     ?0                   244:'BIN_PATH'      	;16
	326 159  CONCAT/8                  #166=     #164                 #165                	;0
	327 159  CONCAT/8                  #167=     #166                 247:'certbot/config --work-dir '	;0
	328 159  FETCH_CONSTANT/99         #168=     ?0                   248:'BIN_PATH'      	;16
	329 159  CONCAT/8                  #169=     #167                 #168                	;0
	330 159  CONCAT/8                  #170=     #169                 251:'certbot/work --logs-dir '	;0
	331 159  FETCH_CONSTANT/99         #171=     ?0                   252:'BIN_PATH'      	;16
	332 159  CONCAT/8                  #172=     #170                 #171                	;0
	333 159  CONCAT/8                  #173=     #172                 255:'certbot/logs certonly --agree-tos --expand --non-interactive --register-unsafely-without-email --standalone'	;0
	334 159  ASSIGN/38                 ?151      16?19                #173                	;0
	335 160  NOP/0                     ?0        ?0                   ?0                  	;1
	336 160  GOTO/253                  ?0        ?398                 ?256                	;0
	337 162  CONCAT/8                  #175=     257:'sudo certbot '  16?17               	;0
	338 162  CONCAT/8                  #176=     #175                 258:'--config-dir ' 	;0
	339 162  FETCH_CONSTANT/99         #177=     ?0                   259:'BIN_PATH'      	;16
	340 162  CONCAT/8                  #178=     #176                 #177                	;0
	341 162  CONCAT/8                  #179=     #178                 262:'certbot/config --work-dir '	;0
	342 162  FETCH_CONSTANT/99         #180=     ?0                   263:'BIN_PATH'      	;16
	343 162  CONCAT/8                  #181=     #179                 #180                	;0
	344 162  CONCAT/8                  #182=     #181                 266:'certbot/work --logs-dir '	;0
	345 162  FETCH_CONSTANT/99         #183=     ?0                   267:'BIN_PATH'      	;16
	346 162  CONCAT/8                  #184=     #182                 #183                	;0
	347 162  CONCAT/8                  #185=     #184                 270:'certbot/logs certonly --agree-tos --expand --non-interactive --register-unsafely-without-email --webroot -w /home/xui/www/'	;0
	348 162  ASSIGN/38                 ?163      16?19                #185                	;0
	349 163  NOP/0                     ?0        ?0                   ?0                  	;1
	350 163  GOTO/253                  ?0        ?398                 ?271                	;0
	351 166  ASSIGN/38                 ?164      16?3                 272:true            	;0
	352 170  NOP/0                     ?0        ?0                   ?0                  	;1
	353 170  GOTO/253                  ?0        ?354                 ?273                	;0
	354 174  NOP/0                     ?0        ?0                   ?0                  	;1
	355 174  GOTO/253                  ?0        ?420                 ?274                	;0
	356 177  NOP/0                     ?0        ?0                   ?0                  	;1
	357 177  GOTO/253                  ?0        ?352                 ?275                	;0
	358 179  ASSIGN/38                 ?165      16?13                276:NULL            	;0
	359 180  FE_RESET_R/77             $189=     16?11                ?370                	;0
	360 180  FE_FETCH_R/78             ?0        $189                 16?20               	;370	>>370	<<369
	361 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'pathinfo'      	;1
	362 181  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
	363 181  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
	364 181  FETCH_DIM_R/81            $191=     $190                 279:'dirname'       	;0
	365 181  ASSIGN/38                 ?169      16?13                $191                	;0
	366 182  FE_FREE/127               ?0        $189                 ?14                 	;1
	367 182  NOP/0                     ?0        ?0                   ?0                  	;1
	368 182  GOTO/253                  ?0        ?411                 ?280                	;0
	369 183  JMP/42                    ?0        ?360                 ?0                  	;0	>>360
	370 183  FE_FREE/127               ?0        $189                 ?0                  	;0	<<359
	371 185  NOP/0                     ?0        ?0                   ?0                  	;1
	372 185  GOTO/253                  ?0        ?411                 ?281                	;0
	373 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   282:'exec'          	;3
	374 187  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	375 187  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	376 187  SEND_VAR_EX/66            ?112      16?10                ?3                  	;0
	377 187  DO_FCALL_BY_NAME/131      ?170      ?0                   ?0                  	;0
	378 188  ISSET_ISEMPTY_CV/197      #194=     16?17                ?0                  	;16777216
	379 188  JMPZ/43                   ?0        #194                 ?382                	;0	>>382
	380 189  NOP/0                     ?0        ?0                   ?0                  	;1
	381 189  GOTO/253                  ?0        ?205                 ?284                	;0
	382 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'stripos'       	;2	<<379
	383 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'implode'       	;2
	384 191  SEND_VAL_EX/116           ?80       289:'
'              ?1                  	;0
	385 191  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	386 191  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
	387 191  SEND_VAR_NO_REF_EX/50     ?80       $195                 ?1                  	;0
	388 191  SEND_VAL_EX/116           ?96       290:'the dry run was successful' ?2                  	;0
	389 191  DO_FCALL_BY_NAME/131      $196=     ?0                   ?0                  	;0
	390 191  IS_NOT_IDENTICAL/16       #197=     $196                 291:false           	;0
	391 191  JMPZ/43                   ?0        #197                 ?394                	;0	>>394
	392 192  NOP/0                     ?0        ?0                   ?0                  	;1
	393 192  GOTO/253                  ?0        ?312                 ?292                	;0
	394 194  ECHO/40                   ?0        293:'Error: Dry run failed!
' ?0                  	;0	<<391
	395 195  ASSIGN/38                 ?175      16?8                 294:4               	;0
	396 196  NOP/0                     ?0        ?0                   ?0                  	;1
	397 196  GOTO/253                  ?0        ?308                 ?295                	;0
	398 199  FE_RESET_R/77             $199=     16?5                 ?406                	;0
	399 199  FE_FETCH_R/78             ?0        $199                 16?7                	;406	>>406	<<405
	400 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'basename'      	;1
	401 200  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	402 200  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
	403 200  CONCAT/8                  #201=     298:' -d '           $200                	;0
	404 200  ASSIGN_CONCAT/30          ?179      16?19                #201                	;0
	405 201  JMP/42                    ?0        ?399                 ?0                  	;0	>>399
	406 201  FE_FREE/127               ?0        $199                 ?0                  	;0	<<398
	407 204  ASSIGN_CONCAT/30          ?180      16?19                299:' 2>&1'         	;0
	408 205  ASSIGN/38                 ?181      16?11                300:array (
)       	;0
	409 206  NOP/0                     ?0        ?0                   ?0                  	;1
	410 206  GOTO/253                  ?0        ?373                 ?301                	;0
	411 209  JMPZ/43                   ?0        16?13                ?414                	;0	>>414
	412 210  NOP/0                     ?0        ?0                   ?0                  	;1
	413 210  GOTO/253                  ?0        ?246                 ?302                	;0
	414 212  ECHO/40                   ?0        303:'Error: Failed to generate certificate!
' ?0                  	;0	<<411
	415 213  ASSIGN/38                 ?182      16?8                 304:0               	;0
	416 214  NOP/0                     ?0        ?0                   ?0                  	;1
	417 214  GOTO/253                  ?0        ?352                 ?305                	;0
	418 215  NOP/0                     ?0        ?0                   ?0                  	;1
	419 215  GOTO/253                  ?0        ?246                 ?306                	;0
	420 216  JMP/42                    ?0        ?200                 ?0                  	;0	>>200
	421 216  FE_FREE/127               ?0        $118                 ?0                  	;0	<<199
	422 219  GOTO/253                  ?0        ?64                  ?307                	;0
	423 221  ASSIGN/38                 ?183      16?2                 308:array (
  0 => NULL,
  1 => NULL,
)	;0
	424 222  INIT_FCALL_BY_NAME/59     ?0        ?0                   309:'scandir'       	;1
	425 222  FETCH_CONSTANT/99         #207=     ?0                   311:'BIN_PATH'      	;16
	426 222  CONCAT/8                  #208=     #207                 314:'certbot/config/live/'	;0
	427 222  SEND_VAL_EX/116           ?80       #208                 ?1                  	;0
	428 222  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
	429 222  FE_RESET_R/77             $210=     $209                 ?524                	;0
	430 222  FE_FETCH_R/78             ?0        $210                 16?21               	;524	>>524	<<523
	431 223  NOP/0                     ?0        ?0                   ?0                  	;1
	432 223  GOTO/253                  ?0        ?435                 ?315                	;0
	433 226  NOP/0                     ?0        ?0                   ?0                  	;1
	434 226  GOTO/253                  ?0        ?523                 ?316                	;0
	435 228  IS_NOT_EQUAL/18           #211=     16?21                317:'.'             	;0
	436 228  JMPZ_EX/46                #211=     #211                 ?439                	;0	>>439
	437 228  IS_NOT_EQUAL/18           #212=     16?21                318:'..'            	;0
	438 228  BOOL/52                   #211=     #212                 ?0                  	;0
	439 228  BOOL_NOT/13               #213=     #211                 ?0                  	;0	<<436
	440 228  JMPZ/43                   ?0        #213                 ?443                	;0	>>443
	441 229  NOP/0                     ?0        ?0                   ?0                  	;1
	442 229  GOTO/253                  ?0        ?482                 ?319                	;0
	443 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'explode'       	;2	<<440
	444 231  SEND_VAL_EX/116           ?80       322:'-'              ?1                  	;0
	445 231  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
	446 231  DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
	447 231  ASSIGN/38                 ?192      16?22                $214                	;0
	448 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'is_numeric'    	;1
	449 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'count'         	;1
	450 232  SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
	451 232  DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
	452 232  SUB/2                     #217=     $216                 327:1               	;0
	453 232  FETCH_DIM_FUNC_ARG/93     $218=     16?22                #217                	;1
	454 232  SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
	455 232  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
	456 232  JMPZ/43                   ?0        $219                 ?459                	;0	>>459
	457 233  NOP/0                     ?0        ?0                   ?0                  	;1
	458 233  GOTO/253                  ?0        ?484                 ?328                	;0
	459 235  ASSIGN/38                 ?197      16?7                 16?21               	;0	<<456
	460 236  NOP/0                     ?0        ?0                   ?0                  	;1
	461 236  GOTO/253                  ?0        ?498                 ?329                	;0
	462 237  NOP/0                     ?0        ?0                   ?0                  	;1
	463 237  GOTO/253                  ?0        ?484                 ?330                	;0
	464 239  FETCH_DIM_R/81            $221=     16?18                331:'serial'        	;0
	465 239  JMPZ_EX/46                #222=     $221                 ?470                	;0	>>470
	466 239  FETCH_DIM_R/81            $223=     16?18                332:'expiration'    	;0
	467 239  FETCH_DIM_R/81            $224=     16?2                 333:0               	;0
	468 239  IS_SMALLER/19             #225=     $224                 $223                	;0
	469 239  BOOL/52                   #222=     #225                 ?0                  	;0
	470 239  JMPNZ_EX/47               #222=     #222                 ?474                	;0	>>474	<<465
	471 239  FETCH_DIM_R/81            $226=     16?2                 334:0               	;0
	472 239  BOOL_NOT/13               #227=     $226                 ?0                  	;0
	473 239  BOOL/52                   #222=     #227                 ?0                  	;0
	474 239  BOOL_NOT/13               #228=     #222                 ?0                  	;0	<<470
	475 239  JMPZ/43                   ?0        #228                 ?478                	;0	>>478
	476 240  NOP/0                     ?0        ?0                   ?0                  	;1
	477 240  GOTO/253                  ?0        ?482                 ?335                	;0
	478 242  FETCH_DIM_R/81            $229=     16?18                336:'expiration'    	;0	<<475
	479 242  INIT_ARRAY/71             #230=     $229                 ?0                  	;8
	480 242  ADD_ARRAY_ELEMENT/72      #230=     16?18                ?0                  	;0
	481 242  ASSIGN/38                 ?208      16?2                 #230                	;0
	482 246  NOP/0                     ?0        ?0                   ?0                  	;1
	483 246  GOTO/253                  ?0        ?433                 ?337                	;0
	484 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'implode'       	;2
	485 249  SEND_VAL_EX/116           ?80       340:'-'              ?1                  	;0
	486 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'array_slice'   	;3
	487 249  SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
	488 249  SEND_VAL_EX/116           ?96       343:0                ?2                  	;0
	489 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   344:'count'         	;1
	490 249  SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
	491 249  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
	492 249  SUB/2                     #233=     $232                 346:1               	;0
	493 249  SEND_VAL_EX/116           ?112      #233                 ?3                  	;0
	494 249  DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
	495 249  SEND_VAR_NO_REF_EX/50     ?96       $234                 ?2                  	;0
	496 249  DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
	497 249  ASSIGN/38                 ?213      16?7                 $235                	;0
	498 251  INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'in_array'      	;2
	499 251  INIT_FCALL_BY_NAME/59     ?0        ?0                   349:'strtolower'    	;1
	500 251  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	501 251  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
	502 251  SEND_VAR_NO_REF_EX/50     ?80       $237                 ?1                  	;0
	503 251  INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'array_map'     	;2
	504 251  SEND_VAL_EX/116           ?80       353:'strtolower'     ?1                  	;0
	505 251  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	506 251  DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
	507 251  SEND_VAR_NO_REF_EX/50     ?96       $238                 ?2                  	;0
	508 251  DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
	509 251  BOOL_NOT/13               #240=     $239                 ?0                  	;0
	510 251  JMPZ/43                   ?0        #240                 ?513                	;0	>>513
	511 252  NOP/0                     ?0        ?0                   ?0                  	;1
	512 252  GOTO/253                  ?0        ?482                 ?354                	;0
	513 254  INIT_STATIC_METHOD_CALL/113 ?0        355:'XUI'            357:'D6a9D4057776e78d'	;1	<<510
	514 254  FETCH_CONSTANT/99         #241=     ?0                   359:'BIN_PATH'      	;16
	515 254  CONCAT/8                  #242=     #241                 362:'certbot/config/live/'	;0
	516 254  CONCAT/8                  #243=     #242                 16?21               	;0
	517 254  CONCAT/8                  #244=     #243                 363:'/fullchain.pem'	;0
	518 254  SEND_VAL_EX/116           ?80       #244                 ?1                  	;0
	519 254  DO_FCALL/60               $245=     ?0                   ?0                  	;0
	520 254  ASSIGN/38                 ?223      16?18                $245                	;0
	521 255  NOP/0                     ?0        ?0                   ?0                  	;1
	522 255  GOTO/253                  ?0        ?464                 ?364                	;0
	523 256  JMP/42                    ?0        ?430                 ?0                  	;0	>>430
	524 256  FE_FREE/127               ?0        $210                 ?0                  	;0	<<429
	525 259  FETCH_DIM_R/81            $247=     16?2                 365:0               	;0
	526 259  BOOL_NOT/13               #248=     $247                 ?0                  	;0
	527 259  JMPZ/43                   ?0        #248                 ?529                	;0	>>529
	528 260  GOTO/253                  ?0        ?114                 ?366                	;0
	529 262  FETCH_DIM_R/81            $249=     16?2                 367:1               	;0	<<527
	530 262  FETCH_DIM_R/81            $250=     $249                 368:'path'          	;0
	531 262  ASSIGN/38                 ?228      16?13                $250                	;0
	532 263  GOTO/253                  ?0        ?125                 ?369                	;0
	533 265  NOP/0                     ?0        370:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   282  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   283  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   283  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   283  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   283  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   283  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   284  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   286  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   286  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   288  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?19                  ?0                  	;0	>>19
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'register_shutdown_function'	;1
2   6    SEND_VAL_EX/116           ?80       3:'shutdown'         ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'str_replace'     	;3
5   7    SEND_VAL_EX/116           ?80       6:'\\'               ?1                  	;0
6   7    SEND_VAL_EX/116           ?96       7:'/'                ?2                  	;0
7   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'dirname'         	;1
8   7    FETCH_DIM_FUNC_ARG/93     $3=       16?0                 10:0                	;1
9   7    SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
10  7    DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
11  7    SEND_VAR_NO_REF_EX/50     ?112      $4                   ?3                  	;0
12  7    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
13  7    CONCAT/8                  #6=       $5                   11:'/../../www/init.php'	;0
14  7    INCLUDE_OR_EVAL/73        ?5        #6                   ?0                  	;8
15  9    NOP/0                     ?0        ?0                   ?0                  	;0
16  266  INIT_FCALL/61             ?0        ?4112                12:'ed8dbf4549416fa2'	;0
17  266  DO_FCALL/60               ?6        ?0                   ?0                  	;0
18  267  GOTO/253                  ?0        ?42                  ?13                 	;0
19  269  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'posix_getpwuid' 	;1	<<0
20  269  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'posix_geteuid'  	;0
21  269  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
22  269  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
23  269  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
24  269  FETCH_DIM_R/81            $11=      $10                  18:'name'           	;0
25  269  IS_NOT_EQUAL/18           #12=      $11                  19:'root'           	;0
26  269  BOOL_NOT/13               #13=      #12                  ?0                  	;0
27  269  JMPZ/43                   ?0        #13                  ?29                 	;0	>>29
28  270  GOTO/253                  ?0        ?30                  ?20                 	;0
29  272  EXIT/79                   ?0        21:'Please run as root!
' ?0                  	;0	<<27
30  274  BEGIN_SILENCE/57          #14=      ?0                   ?0                  	;0
31  274  FETCH_R/80                $15=      22:'argc'            ?0                  	;268435456
32  274  END_SILENCE/58            ?0        #14                  ?0                  	;0
33  274  BOOL_NOT/13               #16=      $15                  ?0                  	;0
34  274  JMPNZ_EX/47               #16=      #16                  ?37                 	;0	>>37
35  274  IS_SMALLER_OR_EQUAL/20    #17=      16?1                 23:1                	;0
36  274  BOOL/52                   #16=      #17                  ?0                  	;0
37  274  BOOL_NOT/13               #18=      #16                  ?0                  	;0	<<34
38  274  JMPZ/43                   ?0        #18                  ?40                 	;0	>>40
39  275  GOTO/253                  ?0        ?1                   ?24                 	;0
40  277  EXIT/79                   ?0        25:0                 ?0                  	;0	<<38
41  278  GOTO/253                  ?0        ?1                   ?26                 	;0
42  280  NOP/0                     ?0        ?0                   ?0                  	;0
43  289  NOP/0                     ?0        27:1                 ?0                  	;4294967295
*/

?>