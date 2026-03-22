<?php


function AB8369074Df2aAA3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   12   JMP/42                    ?0        ?70                  ?0                  	;0	>>70
	1   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'count'           	;1
	2   14   FETCH_DIM_FUNC_ARG/93     $14=      16?0                 3:'domain'          	;1
	3   14   SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
	4   14   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	5   14   IS_SMALLER/19             #16=      4:0                  $15                 	;0
	6   14   BOOL_NOT/13               #17=      #16                  ?0                  	;0
	7   14   JMPZ/43                   ?0        #17                  ?9                  	;0	>>9
	8   15   GOTO/253                  ?0        ?21                  ?5                  	;0
	9   17   INIT_METHOD_CALL/112      ?0        16?1                 6:'query'           	;4	<<7
	10  17   SEND_VAL_EX/116           ?80       8:'INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);' ?1                  	;0
	11  17   FETCH_CONSTANT/99         #18=      ?0                   9:'SERVER_ID'       	;16
	12  17   SEND_VAL_EX/116           ?96       #18                  ?2                  	;0
	13  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'time'           	;0
	14  17   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	15  17   SEND_VAR_NO_REF_EX/50     ?112      $19                  ?3                  	;0
	16  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_encode'    	;1
	17  17   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	18  17   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	19  17   SEND_VAR_NO_REF_EX/50     ?128      $20                  ?4                  	;0
	20  17   DO_FCALL/60               ?7        ?0                   ?0                  	;0
	21  21   GOTO/253                  ?0        ?82                  ?16                 	;0
	22  23   INIT_STATIC_METHOD_CALL/113 ?0        17:'XUI'             19:'D6a9D4057776E78D'	;0
	23  23   DO_FCALL/60               $22=      ?0                   ?0                  	;0
	24  23   ASSIGN/38                 ?9        16?2                 $22                 	;0
	25  24   FETCH_CONSTANT/99         #25=      ?0                   24:'SERVER_ID'      	;16
	26  24   FETCH_STATIC_PROP_R/173   $24=      21:'rServers'        22:'XUI'            	;0
	27  24   FETCH_DIM_R/81            $26=      $24                  #25                 	;0
	28  24   FETCH_DIM_R/81            $27=      $26                  27:'enable_https'   	;0
	29  24   JMPZ_EX/46                #28=      $27                  ?31                 	;0	>>31
	30  24   BOOL/52                   #28=      16?2                 ?0                  	;0
	31  24   BOOL_NOT/13               #29=      #28                  ?0                  	;0	<<29
	32  24   JMPZ/43                   ?0        #29                  ?34                 	;0	>>34
	33  25   GOTO/253                  ?0        ?21                  ?28                 	;0
	34  27   FETCH_DIM_R/81            $30=      16?2                 29:'expiration'     	;0	<<32
	35  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'time'           	;0
	36  27   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
	37  27   SUB/2                     #32=      $30                  $31                 	;0
	38  27   IS_SMALLER/19             #33=      #32                  32:604800           	;0
	39  27   JMPZ/43                   ?0        #33                  ?41                 	;0	>>41
	40  28   GOTO/253                  ?0        ?44                  ?33                 	;0
	41  30   ECHO/40                   ?0        34:'Certificate valid, not due for renewal.
' ?0                  	;0	<<39
	42  31   GOTO/253                  ?0        ?21                  ?35                 	;0
	43  32   GOTO/253                  ?0        ?44                  ?36                 	;0
	44  35   ECHO/40                   ?0        37:'Certificate due for renewal.
' ?0                  	;0
	45  36   ASSIGN/38                 ?20       16?0                 38:array (
  'action' => 'certbot_generate',
  'domain' => 
  array (
  ),
)	;0
	46  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'explode'        	;2
	47  37   SEND_VAL_EX/116           ?80       41:','               ?1                  	;0
	48  37   FETCH_CONSTANT/99         #36=      ?0                   45:'SERVER_ID'      	;16
	49  37   FETCH_STATIC_PROP_FUNC_ARG/177 $35=      42:'rServers'        43:'XUI'            	;2
	50  37   FETCH_DIM_FUNC_ARG/93     $37=      $35                  #36                 	;2
	51  37   FETCH_DIM_FUNC_ARG/93     $38=      $37                  48:'domain_name'    	;2
	52  37   SEND_VAR_EX/66            ?96       $38                  ?2                  	;0
	53  37   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
	54  37   FE_RESET_R/77             $40=      $39                  ?68                 	;0
	55  37   FE_FETCH_R/78             ?0        $40                  16?3                	;68	>>68	<<67
	56  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'filter_var'     	;2
	57  38   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	58  38   FETCH_CONSTANT/99         #41=      ?0                   51:'FILTER_VALIDATE_IP'	;16
	59  38   SEND_VAL_EX/116           ?96       #41                  ?2                  	;0
	60  38   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	61  38   JMPZ/43                   ?0        $42                  ?64                 	;0	>>64
	62  39   NOP/0                     ?0        ?0                   ?0                  	;1
	63  39   GOTO/253                  ?0        ?67                  ?54                 	;0
	64  41   FETCH_DIM_W/84            $43=      16?0                 55:'domain'         	;0	<<61
	65  41   ASSIGN_DIM/147            ?30       $43                  ?4397406            	;0
	66  41   OP_DATA/137               ?0        16?3                 ?0                  	;0
	67  43   JMP/42                    ?0        ?55                  ?0                  	;0	>>55
	68  43   FE_FREE/127               ?0        $40                  ?0                  	;0	<<54
	69  46   GOTO/253                  ?0        ?1                   ?56                 	;0
	70  48   BIND_GLOBAL/168           ?0        16?1                 57:'b62d6460eb33ea07'	;0	<<0
	71  48   BIND_GLOBAL/168           ?0        16?4                 58:'a6691616d494dd58'	;0
	72  49   JMPZ/43                   ?0        16?4                 ?74                 	;0	>>74
	73  50   GOTO/253                  ?0        ?82                  ?59                 	;0
	74  52   FETCH_STATIC_PROP_R/173   $45=      60:'rSettings'       61:'XUI'            	;0	<<72
	75  52   FETCH_DIM_R/81            $46=      $45                  63:'auto_send_logs' 	;0
	76  52   BOOL_NOT/13               #47=      $46                  ?0                  	;0
	77  52   JMPZ/43                   ?0        #47                  ?79                 	;0	>>79
	78  53   GOTO/253                  ?0        ?81                  ?64                 	;0
	79  55   INIT_STATIC_METHOD_CALL/113 ?0        65:'XUI'             67:'submitPanelLogs'	;0	<<77
	80  55   DO_FCALL/60               ?34       ?0                   ?0                  	;0
	81  57   GOTO/253                  ?0        ?22                  ?69                 	;0
	82  60   INIT_METHOD_CALL/112      ?0        16?1                 70:'query'          	;2
	83  60   SEND_VAL_EX/116           ?80       72:'SELECT `certbot_ssl` FROM `servers` WHERE `id` = ?;' ?1                  	;0
	84  60   FETCH_CONSTANT/99         #49=      ?0                   73:'SERVER_ID'      	;16
	85  60   SEND_VAL_EX/116           ?96       #49                  ?2                  	;0
	86  60   DO_FCALL/60               ?36       ?0                   ?0                  	;0
	87  61   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'json_decode'    	;2
	88  61   INIT_METHOD_CALL/112      ?0        16?1                 78:'get_row'        	;0
	89  61   DO_FCALL/60               $51=      ?0                   ?0                  	;0
	90  61   SEPARATE/156              $51=      $51                  ?0                  	;0
	91  61   FETCH_DIM_FUNC_ARG/93     $52=      $51                  80:'certbot_ssl'    	;1
	92  61   SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
	93  61   SEND_VAL_EX/116           ?96       81:true              ?2                  	;0
	94  61   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
	95  61   ASSIGN/38                 ?40       16?5                 $53                 	;0
	96  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'explode'        	;2
	97  62   SEND_VAL_EX/116           ?80       84:'
'               ?1                  	;0
	98  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'file_get_contents'	;1
	99  62   FETCH_CONSTANT/99         #55=      ?0                   87:'XUI_HOME'       	;16
	100 62   CONCAT/8                  #56=      #55                  90:'bin/nginx/conf/ssl.conf'	;0
	101 62   SEND_VAL_EX/116           ?80       #56                  ?1                  	;0
	102 62   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
	103 62   SEND_VAR_NO_REF_EX/50     ?96       $57                  ?2                  	;0
	104 62   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
	105 62   ASSIGN/38                 ?45       16?6                 $58                 	;0
	106 63   FE_RESET_R/77             $60=      16?6                 ?258                	;0
	107 63   FE_FETCH_R/78             ?0        $60                  16?7                	;258	>>258	<<257
	108 64   NOP/0                     ?0        ?0                   ?0                  	;1
	109 64   GOTO/253                  ?0        ?110                 ?91                 	;0
	110 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'explode'        	;2
	111 66   SEND_VAL_EX/116           ?80       94:' '               ?1                  	;0
	112 66   SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	113 66   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	114 66   FETCH_DIM_R/81            $62=      $61                  95:0                	;0
	115 66   IS_EQUAL/17               #63=      $62                  96:'ssl_certificate'	;0
	116 66   BOOL_NOT/13               #64=      #63                  ?0                  	;0
	117 66   JMPZ/43                   ?0        #64                  ?120                	;0	>>120
	118 67   NOP/0                     ?0        ?0                   ?0                  	;1
	119 67   GOTO/253                  ?0        ?191                 ?97                 	;0
	120 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'explode'        	;2	<<117
	121 69   SEND_VAL_EX/116           ?80       100:';'              ?1                  	;0
	122 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'explode'       	;2
	123 69   SEND_VAL_EX/116           ?80       103:' '              ?1                  	;0
	124 69   SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	125 69   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
	126 69   SEPARATE/156              $65=      $65                  ?0                  	;0
	127 69   FETCH_DIM_FUNC_ARG/93     $66=      $65                  104:1               	;2
	128 69   SEND_VAR_EX/66            ?96       $66                  ?2                  	;0
	129 69   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
	130 69   FETCH_DIM_R/81            $68=      $67                  105:0               	;0
	131 69   ASSIGN/38                 ?55       16?8                 $68                 	;0
	132 70   IS_NOT_EQUAL/18           #70=      16?8                 106:'server.crt'    	;0
	133 70   JMPZ/43                   ?0        #70                  ?136                	;0	>>136
	134 71   NOP/0                     ?0        ?0                   ?0                  	;1
	135 71   GOTO/253                  ?0        ?223                 ?107                	;0
	136 73   FETCH_CONSTANT/99         #72=      ?0                   111:'SERVER_ID'     	;16	<<133
	137 73   FETCH_STATIC_PROP_R/173   $71=      108:'rServers'       109:'XUI'           	;0
	138 73   FETCH_DIM_R/81            $73=      $71                  #72                 	;0
	139 73   FETCH_DIM_R/81            $74=      $73                  114:'certbot_ssl'   	;0
	140 73   BOOL_NOT/13               #75=      $74                  ?0                  	;0
	141 73   JMPZ/43                   ?0        #75                  ?144                	;0	>>144
	142 74   NOP/0                     ?0        ?0                   ?0                  	;1
	143 74   GOTO/253                  ?0        ?174                 ?115                	;0
	144 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'json_decode'   	;2	<<141
	145 76   FETCH_CONSTANT/99         #77=      ?0                   121:'SERVER_ID'     	;16
	146 76   FETCH_STATIC_PROP_FUNC_ARG/177 $76=      118:'rServers'       119:'XUI'           	;1
	147 76   FETCH_DIM_FUNC_ARG/93     $78=      $76                  #77                 	;1
	148 76   FETCH_DIM_FUNC_ARG/93     $79=      $78                  124:'certbot_ssl'   	;1
	149 76   SEND_VAR_EX/66            ?80       $79                  ?1                  	;0
	150 76   SEND_VAL_EX/116           ?96       125:true             ?2                  	;0
	151 76   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
	152 76   ASSIGN/38                 ?67       16?2                 $80                 	;0
	153 77   NOP/0                     ?0        ?0                   ?0                  	;1
	154 77   GOTO/253                  ?0        ?193                 ?126                	;0
	155 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'file_put_contents'	;2
	156 79   FETCH_CONSTANT/99         #82=      ?0                   129:'BIN_PATH'      	;16
	157 79   CONCAT/8                  #83=      #82                  132:'nginx/conf/ssl.conf'	;0
	158 79   SEND_VAL_EX/116           ?80       #83                  ?1                  	;0
	159 79   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	160 79   DO_FCALL_BY_NAME/131      ?70       ?0                   ?0                  	;0
	161 80   ECHO/40                   ?0        133:'Fixed ssl configuration file
' ?0                  	;0
	162 81   INIT_METHOD_CALL/112      ?0        16?1                 134:'query'         	;4
	163 81   SEND_VAL_EX/116           ?80       136:'INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);' ?1                  	;0
	164 81   FETCH_CONSTANT/99         #85=      ?0                   137:'SERVER_ID'     	;16
	165 81   SEND_VAL_EX/116           ?96       #85                  ?2                  	;0
	166 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'time'          	;0
	167 81   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
	168 81   SEND_VAR_NO_REF_EX/50     ?112      $86                  ?3                  	;0
	169 81   INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'json_encode'   	;1
	170 81   SEND_VAL_EX/116           ?80       144:array (
  'action' => 'reload_nginx',
) ?1                  	;0
	171 81   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
	172 81   SEND_VAR_NO_REF_EX/50     ?128      $87                  ?4                  	;0
	173 81   DO_FCALL/60               ?74       ?0                   ?0                  	;0
	174 84   NOP/0                     ?0        ?0                   ?0                  	;1
	175 84   GOTO/253                  ?0        ?221                 ?145                	;0
	176 87   NOP/0                     ?0        ?0                   ?0                  	;1
	177 87   GOTO/253                  ?0        ?257                 ?146                	;0
	178 89   ECHO/40                   ?0        147:'Updated ssl configuration in database
' ?0                  	;0
	179 90   INIT_METHOD_CALL/112      ?0        16?1                 148:'query'         	;4
	180 90   SEND_VAL_EX/116           ?80       150:'INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);' ?1                  	;0
	181 90   FETCH_DIM_FUNC_ARG/93     $89=      16?10                151:'id'            	;2
	182 90   SEND_VAR_EX/66            ?96       $89                  ?2                  	;0
	183 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'time'          	;0
	184 90   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	185 90   SEND_VAR_NO_REF_EX/50     ?112      $90                  ?3                  	;0
	186 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'json_encode'   	;1
	187 90   SEND_VAL_EX/116           ?80       156:array (
  'action' => 'reload_nginx',
) ?1                  	;0
	188 90   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
	189 90   SEND_VAR_NO_REF_EX/50     ?128      $91                  ?4                  	;0
	190 90   DO_FCALL/60               ?78       ?0                   ?0                  	;0
	191 94   NOP/0                     ?0        ?0                   ?0                  	;1
	192 94   GOTO/253                  ?0        ?176                 ?157                	;0
	193 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'file_exists'   	;1
	194 96   FETCH_DIM_R/81            $93=      16?2                 160:'path'          	;0
	195 96   CONCAT/8                  #94=      $93                  161:'/fullchain.pem'	;0
	196 96   SEND_VAL_EX/116           ?80       #94                  ?1                  	;0
	197 96   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
	198 96   BOOL_NOT/13               #96=      $95                  ?0                  	;0
	199 96   JMPZ/43                   ?0        #96                  ?202                	;0	>>202
	200 97   NOP/0                     ?0        ?0                   ?0                  	;1
	201 97   GOTO/253                  ?0        ?174                 ?162                	;0
	202 99   FETCH_DIM_R/81            $97=      16?2                 163:'path'          	;0	<<199
	203 99   CONCAT/8                  #98=      $97                  164:'/fullchain.pem'	;0
	204 99   ASSIGN/38                 ?85       16?8                 #98                 	;0
	205 100  FETCH_DIM_R/81            $100=     16?2                 165:'path'          	;0
	206 100  CONCAT/8                  #101=     $100                 166:'/chain.pem'    	;0
	207 100  ASSIGN/38                 ?88       16?11                #101                	;0
	208 101  FETCH_DIM_R/81            $103=     16?2                 167:'path'          	;0
	209 101  CONCAT/8                  #104=     $103                 168:'/privkey.pem'  	;0
	210 101  ASSIGN/38                 ?91       16?12                #104                	;0
	211 102  ROPE_INIT/54              #107=     ?0                   169:'ssl_certificate '	;7
	212 102  ROPE_ADD/55               #107=     #107                 16?8                	;1
	213 102  ROPE_ADD/55               #107=     #107                 170:';
ssl_certificate_key '	;2
	214 102  ROPE_ADD/55               #107=     #107                 16?12               	;3
	215 102  ROPE_ADD/55               #107=     #107                 171:';
ssl_trusted_certificate '	;4
	216 102  ROPE_ADD/55               #107=     #107                 16?11               	;5
	217 102  ROPE_END/56               #106=     #107                 172:';
ssl_protocols TLSv1.2 TLSv1.3;
ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;
ssl_prefer_server_ciphers off;
ssl_ecdh_curve auto;
ssl_session_timeout 10m;
ssl_session_cache shared:MozSSL:10m;
ssl_session_tickets off;'	;6
	218 102  ASSIGN/38                 ?97       16?9                 #106                	;0
	219 103  NOP/0                     ?0        ?0                   ?0                  	;1
	220 103  GOTO/253                  ?0        ?155                 ?173                	;0
	221 105  NOP/0                     ?0        ?0                   ?0                  	;1
	222 105  GOTO/253                  ?0        ?191                 ?174                	;0
	223 107  INIT_STATIC_METHOD_CALL/113 ?0        175:'XUI'            177:'d6A9D4057776E78d'	;1
	224 107  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	225 107  DO_FCALL/60               $112=     ?0                   ?0                  	;0
	226 107  ASSIGN/38                 ?99       16?13                $112                	;0
	227 108  FETCH_DIM_R/81            $114=     16?2                 179:'serial'        	;0
	228 108  FETCH_DIM_R/81            $115=     16?13                180:'serial'        	;0
	229 108  IS_NOT_EQUAL/18           #116=     $114                 $115                	;0
	230 108  JMPNZ_EX/47               #116=     #116                 ?237                	;0	>>237
	231 108  FETCH_CONSTANT/99         #118=     ?0                   184:'SERVER_ID'     	;16
	232 108  FETCH_STATIC_PROP_R/173   $117=     181:'rServers'       182:'XUI'           	;0
	233 108  FETCH_DIM_R/81            $119=     $117                 #118                	;0
	234 108  FETCH_DIM_R/81            $120=     $119                 187:'certbot_ssl'   	;0
	235 108  BOOL_NOT/13               #121=     $120                 ?0                  	;0
	236 108  BOOL/52                   #116=     #121                 ?0                  	;0
	237 108  JMPNZ_EX/47               #116=     #116                 ?242                	;0	>>242	<<230
	238 108  FETCH_DIM_R/81            $122=     16?5                 188:'serial'        	;0
	239 108  FETCH_DIM_R/81            $123=     16?13                189:'serial'        	;0
	240 108  IS_NOT_EQUAL/18           #124=     $122                 $123                	;0
	241 108  BOOL/52                   #116=     #124                 ?0                  	;0
	242 108  BOOL_NOT/13               #125=     #116                 ?0                  	;0	<<237
	243 108  JMPZ/43                   ?0        #125                 ?246                	;0	>>246
	244 109  NOP/0                     ?0        ?0                   ?0                  	;1
	245 109  GOTO/253                  ?0        ?191                 ?190                	;0
	246 111  INIT_METHOD_CALL/112      ?0        16?1                 191:'query'         	;3	<<243
	247 111  SEND_VAL_EX/116           ?80       193:'UPDATE `servers` SET `certbot_ssl` = ? WHERE `id` = ?;' ?1                  	;0
	248 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'json_encode'   	;1
	249 111  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	250 111  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
	251 111  SEND_VAR_NO_REF_EX/50     ?96       $126                 ?2                  	;0
	252 111  FETCH_CONSTANT/99         #127=     ?0                   196:'SERVER_ID'     	;16
	253 111  SEND_VAL_EX/116           ?112      #127                 ?3                  	;0
	254 111  DO_FCALL/60               ?114      ?0                   ?0                  	;0
	255 112  NOP/0                     ?0        ?0                   ?0                  	;1
	256 112  GOTO/253                  ?0        ?178                 ?199                	;0
	257 113  JMP/42                    ?0        ?107                 ?0                  	;0	>>107
	258 113  FE_FREE/127               ?0        $60                  ?0                  	;0	<<106
	259 115  GOTO/253                  ?0        ?260                 ?200                	;0
	260 118  GOTO/253                  ?0        ?261                 ?201                	;0
	261 120  NOP/0                     ?0        202:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   139  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   140  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   140  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   140  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   140  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   140  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   141  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   143  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   143  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   145  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?18                  ?0                  	;0	>>18
1   5    ASSIGN/38                 ?0        16?0                 1:true              	;0
2   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'register_shutdown_function'	;1
3   7    SEND_VAL_EX/116           ?80       4:'shutdown'         ?1                  	;0
4   7    DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'str_replace'     	;3
6   8    SEND_VAL_EX/116           ?80       7:'\\'               ?1                  	;0
7   8    SEND_VAL_EX/116           ?96       8:'/'                ?2                  	;0
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'dirname'         	;1
9   8    FETCH_DIM_FUNC_ARG/93     $4=       16?1                 11:0                	;1
10  8    SEND_VAR_EX/66            ?80       $4                   ?1                  	;0
11  8    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
12  8    SEND_VAR_NO_REF_EX/50     ?112      $5                   ?3                  	;0
13  8    DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
14  8    CONCAT/8                  #7=       $6                   12:'/../www/init.php'	;0
15  8    INCLUDE_OR_EVAL/73        ?6        #7                   ?0                  	;8
16  10   NOP/0                     ?0        ?0                   ?0                  	;0
17  121  GOTO/253                  ?0        ?33                  ?13                 	;0
18  123  BEGIN_SILENCE/57          #9=       ?0                   ?0                  	;0	<<0
19  123  FETCH_R/80                $10=      14:'argc'            ?0                  	;268435456
20  123  END_SILENCE/58            ?0        #9                   ?0                  	;0
21  123  JMPZ/43                   ?0        $10                  ?23                 	;0	>>23
22  124  GOTO/253                  ?0        ?24                  ?15                 	;0
23  126  EXIT/79                   ?0        16:0                 ?0                  	;0	<<21
24  128  ASSIGN/38                 ?9        16?0                 17:false            	;0
25  129  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'count'          	;1
26  129  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
27  129  DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
28  129  IS_EQUAL/17               #13=      $12                  20:2                	;0
29  129  BOOL_NOT/13               #14=      #13                  ?0                  	;0
30  129  JMPZ/43                   ?0        #14                  ?32                 	;0	>>32
31  130  GOTO/253                  ?0        ?2                   ?21                 	;0
32  132  GOTO/253                  ?0        ?1                   ?22                 	;0	<<30
33  134  INIT_FCALL/61             ?0        ?2144                23:'ab8369074df2aaa3'	;0
34  134  DO_FCALL/60               ?13       ?0                   ?0                  	;0
35  135  GOTO/253                  ?0        ?36                  ?24                 	;0
36  137  NOP/0                     ?0        ?0                   ?0                  	;0
37  146  NOP/0                     ?0        25:1                 ?0                  	;4294967295
*/

?>