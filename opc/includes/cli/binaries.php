<?php


function Ed8dbF4549416fa2()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   27   JMP/42                    ?0        ?177                 ?0                  	;0	>>177
	1   29   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_array'        	;1
	2   29   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   29   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	4   29   BOOL_NOT/13               #16=      $15                  ?0                  	;0
	5   29   JMPZ/43                   ?0        #16                  ?7                  	;0	>>7
	6   30   GOTO/253                  ?0        ?147                 ?3                  	;0
	7   32   FETCH_DIM_R/81            $17=      16?0                 4:'files'           	;0	<<5
	8   32   FE_RESET_R/77             $18=      $17                  ?146                	;0
	9   32   FE_FETCH_R/78             ?0        $18                  16?1                	;146	>>146	<<145
	10  33   NOP/0                     ?0        ?0                   ?0                  	;1
	11  33   GOTO/253                  ?0        ?108                 ?5                  	;0
	12  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'curl_init'       	;0
	13  35   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
	14  35   ASSIGN/38                 ?5        16?2                 $19                 	;0
	15  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'curl_setopt'     	;3
	16  36   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	17  36   FETCH_CONSTANT/99         #21=      ?0                   10:'CURLOPT_URL'    	;16
	18  36   SEND_VAL_EX/116           ?96       #21                  ?2                  	;0
	19  36   FETCH_DIM_R/81            $22=      16?1                 13:'md5'            	;0
	20  36   CONCAT/8                  #23=      16?3                 $22                 	;0
	21  36   SEND_VAL_EX/116           ?112      #23                  ?3                  	;0
	22  36   DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
	23  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'curl_setopt'    	;3
	24  37   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	25  37   FETCH_CONSTANT/99         #25=      ?0                   16:'CURLOPT_RETURNTRANSFER'	;16
	26  37   SEND_VAL_EX/116           ?96       #25                  ?2                  	;0
	27  37   SEND_VAL_EX/116           ?112      19:true              ?3                  	;0
	28  37   DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
	29  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'curl_setopt'    	;3
	30  38   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	31  38   FETCH_CONSTANT/99         #27=      ?0                   22:'CURLOPT_CONNECTTIMEOUT'	;16
	32  38   SEND_VAL_EX/116           ?96       #27                  ?2                  	;0
	33  38   SEND_VAL_EX/116           ?112      25:30                ?3                  	;0
	34  38   DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
	35  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'curl_setopt'    	;3
	36  39   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	37  39   FETCH_CONSTANT/99         #29=      ?0                   28:'CURLOPT_TIMEOUT'	;16
	38  39   SEND_VAL_EX/116           ?96       #29                  ?2                  	;0
	39  39   SEND_VAL_EX/116           ?112      31:300               ?3                  	;0
	40  39   DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
	41  40   NOP/0                     ?0        ?0                   ?0                  	;1
	42  40   GOTO/253                  ?0        ?46                  ?32                 	;0
	43  42   ASSIGN/38                 ?16       16?4                 33:true             	;0
	44  47   NOP/0                     ?0        ?0                   ?0                  	;1
	45  47   GOTO/253                  ?0        ?145                 ?34                 	;0
	46  49   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'curl_exec'      	;1
	47  49   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	48  49   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
	49  49   ASSIGN/38                 ?18       16?5                 $32                 	;0
	50  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'md5'            	;1
	51  50   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
	52  50   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	53  50   ASSIGN/38                 ?20       16?6                 $34                 	;0
	54  51   FETCH_DIM_R/81            $36=      16?1                 39:'md5'            	;0
	55  51   IS_EQUAL/17               #37=      $36                  16?6                	;0
	56  51   BOOL_NOT/13               #38=      #37                  ?0                  	;0
	57  51   JMPZ/43                   ?0        #38                  ?60                 	;0	>>60
	58  52   NOP/0                     ?0        ?0                   ?0                  	;1
	59  52   GOTO/253                  ?0        ?44                  ?40                 	;0
	60  54   FETCH_DIM_R/81            $39=      16?1                 41:'path'           	;0	<<57
	61  54   CONCAT/8                  #40=      42:'Updated binary: ' $39                 	;0
	62  54   CONCAT/8                  #41=      #40                  43:'
'              	;0
	63  54   ECHO/40                   ?0        #41                  ?0                  	;0
	64  55   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'shell_exec'     	;1
	65  55   FETCH_DIM_R/81            $42=      16?1                 46:'path'           	;0
	66  55   CONCAT/8                  #43=      47:'sudo rm -rf "'   $42                 	;0
	67  55   CONCAT/8                  #44=      #43                  48:'"'              	;0
	68  55   SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
	69  55   DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
	70  56   NOP/0                     ?0        ?0                   ?0                  	;1
	71  56   GOTO/253                  ?0        ?72                  ?49                 	;0
	72  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'file_put_contents'	;2
	73  58   FETCH_DIM_FUNC_ARG/93     $46=      16?1                 52:'path'           	;1
	74  58   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
	75  58   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
	76  58   DO_FCALL_BY_NAME/131      ?32       ?0                   ?0                  	;0
	77  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'shell_exec'     	;1
	78  59   FETCH_DIM_R/81            $48=      16?1                 55:'path'           	;0
	79  59   CONCAT/8                  #49=      56:'sudo chown xui:xui "' $48                 	;0
	80  59   CONCAT/8                  #50=      #49                  57:'"'              	;0
	81  59   SEND_VAL_EX/116           ?80       #50                  ?1                  	;0
	82  59   DO_FCALL_BY_NAME/131      ?36       ?0                   ?0                  	;0
	83  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'shell_exec'     	;1
	84  60   CONCAT/8                  #52=      60:'sudo chmod '     16?7                	;0
	85  60   CONCAT/8                  #53=      #52                  61:' "'             	;0
	86  60   FETCH_DIM_R/81            $54=      16?1                 62:'path'           	;0
	87  60   CONCAT/8                  #55=      #53                  $54                 	;0
	88  60   CONCAT/8                  #56=      #55                  63:'"'              	;0
	89  60   SEND_VAL_EX/116           ?80       #56                  ?1                  	;0
	90  60   DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
	91  61   ASSIGN/38                 ?43       16?8                 64:true             	;0
	92  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'substr'         	;3
	93  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'basename'       	;1
	94  62   FETCH_DIM_FUNC_ARG/93     $59=      16?1                 69:'path'           	;1
	95  62   SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
	96  62   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
	97  62   SEND_VAR_NO_REF_EX/50     ?80       $60                  ?1                  	;0
	98  62   SEND_VAL_EX/116           ?96       70:0                 ?2                  	;0
	99  62   SEND_VAL_EX/116           ?112      71:3                 ?3                  	;0
	100 62   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	101 62   IS_EQUAL/17               #62=      $61                  72:'php'            	;0
	102 62   BOOL_NOT/13               #63=      #62                  ?0                  	;0
	103 62   JMPZ/43                   ?0        #63                  ?106                	;0	>>106
	104 63   NOP/0                     ?0        ?0                   ?0                  	;1
	105 63   GOTO/253                  ?0        ?44                  ?73                 	;0
	106 65   NOP/0                     ?0        ?0                   ?0                  	;1	<<103
	107 65   GOTO/253                  ?0        ?43                  ?74                 	;0
	108 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'file_exists'    	;1
	109 67   FETCH_DIM_FUNC_ARG/93     $64=      16?1                 77:'path'           	;1
	110 67   SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
	111 67   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
	112 67   BOOL_NOT/13               #66=      $65                  ?0                  	;0
	113 67   JMPNZ_EX/47               #66=      #66                  ?121                	;0	>>121
	114 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'md5_file'       	;1
	115 67   FETCH_DIM_FUNC_ARG/93     $67=      16?1                 80:'path'           	;1
	116 67   SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
	117 67   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
	118 67   FETCH_DIM_R/81            $69=      16?1                 81:'md5'            	;0
	119 67   IS_NOT_EQUAL/18           #70=      $68                  $69                 	;0
	120 67   BOOL/52                   #66=      #70                  ?0                  	;0
	121 67   BOOL_NOT/13               #71=      #66                  ?0                  	;0	<<113
	122 67   JMPZ/43                   ?0        #71                  ?125                	;0	>>125
	123 68   NOP/0                     ?0        ?0                   ?0                  	;1
	124 68   GOTO/253                  ?0        ?44                  ?82                 	;0
	125 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'pathinfo'       	;1	<<122
	126 70   FETCH_DIM_FUNC_ARG/93     $72=      16?1                 85:'path'           	;1
	127 70   SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
	128 70   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
	129 70   FETCH_DIM_R/81            $74=      $73                  86:'dirname'        	;0
	130 70   CONCAT/8                  #75=      $74                  87:'/'              	;0
	131 70   ASSIGN/38                 ?61       16?9                 #75                 	;0
	132 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'file_exists'    	;1
	133 71   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	134 71   DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
	135 71   JMPZ/43                   ?0        $77                  ?138                	;0	>>138
	136 72   NOP/0                     ?0        ?0                   ?0                  	;1
	137 72   GOTO/253                  ?0        ?143                 ?90                 	;0
	138 74   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'shell_exec'     	;1	<<135
	139 74   CONCAT/8                  #78=      93:'sudo mkdir -p "' 16?9                	;0
	140 74   CONCAT/8                  #79=      #78                  94:'"'              	;0
	141 74   SEND_VAL_EX/116           ?80       #79                  ?1                  	;0
	142 74   DO_FCALL_BY_NAME/131      ?65       ?0                   ?0                  	;0
	143 76   NOP/0                     ?0        ?0                   ?0                  	;1
	144 76   GOTO/253                  ?0        ?12                  ?95                 	;0
	145 77   JMP/42                    ?0        ?9                   ?0                  	;0	>>9
	146 77   FE_FREE/127               ?0        $18                  ?0                  	;0	<<8
	147 81   BOOL_NOT/13               #81=      16?8                 ?0                  	;0
	148 81   JMPZ/43                   ?0        #81                  ?150                	;0	>>150
	149 82   GOTO/253                  ?0        ?251                 ?96                 	;0
	150 84   GOTO/253                  ?0        ?246                 ?97                 	;0	<<148
	151 88   ASSIGN/38                 $82=      16?8                 98:false            	;0
	152 88   ASSIGN/38                 ?68       16?4                 $82                 	;0
	153 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'exec'           	;2
	154 89   SEND_VAL_EX/116           ?80       101:'sudo lsb_release -r -s' ?1                  	;0
	155 89   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
	156 89   DO_FCALL_BY_NAME/131      ?69       ?0                   ?0                  	;0
	157 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'json_decode'   	;2
	158 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'file_get_contents'	;1
	159 90   CONCAT/8                  #85=      16?3                 106:'?version='     	;0
	160 90   FETCH_CONSTANT/99         #86=      ?0                   107:'XUI_VERSION'   	;16
	161 90   CONCAT/8                  #87=      #85                  #86                 	;0
	162 90   CONCAT/8                  #88=      #87                  110:'&ubv='         	;0
	163 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'floatval'      	;1
	164 90   FETCH_DIM_FUNC_ARG/93     $89=      16?10                113:0               	;1
	165 90   SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
	166 90   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	167 90   CONCAT/8                  #91=      #88                  $90                 	;0
	168 90   JMP_SET/152               #92=      #91                  ?170                	;0
	169 90   QM_ASSIGN/22              #92=      114:''               ?0                  	;0
	170 90   SEND_VAL_EX/116           ?80       #92                  ?1                  	;0
	171 90   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
	172 90   SEND_VAR_NO_REF_EX/50     ?80       $93                  ?1                  	;0
	173 90   SEND_VAL_EX/116           ?96       115:true             ?2                  	;0
	174 90   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	175 90   ASSIGN/38                 ?80       16?0                 $94                 	;0
	176 91   GOTO/253                  ?0        ?1                   ?116                	;0
	177 93   BIND_GLOBAL/168           ?0        16?3                 117:'cd1012bfb33df5d5'	;0	<<0
	178 93   BIND_GLOBAL/168           ?0        16?7                 118:'db0a61ef32b89a27'	;0
	179 93   BIND_GLOBAL/168           ?0        16?11                119:'d240a42146d16fcc'	;0
	180 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'shell_exec'    	;1
	181 94   SEND_VAL_EX/116           ?80       122:'which apparmor_status' ?1                  	;0
	182 94   DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
	183 94   BOOL_NOT/13               #97=      $96                  ?0                  	;0
	184 94   JMPZ/43                   ?0        #97                  ?186                	;0	>>186
	185 95   GOTO/253                  ?0        ?151                 ?123                	;0
	186 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'exec'          	;2	<<184
	187 97   SEND_VAL_EX/116           ?80       126:'sudo apparmor_status' ?1                  	;0
	188 97   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
	189 97   DO_FCALL_BY_NAME/131      ?83       ?0                   ?0                  	;0
	190 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'strtolower'    	;1
	191 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'trim'          	;1
	192 98   FETCH_DIM_FUNC_ARG/93     $99=      16?12                131:0               	;1
	193 98   SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
	194 98   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	195 98   SEND_VAR_NO_REF_EX/50     ?80       $100                 ?1                  	;0
	196 98   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
	197 98   IS_EQUAL/17               #102=     $101                 132:'apparmor module is loaded.'	;0
	198 98   BOOL_NOT/13               #103=     #102                 ?0                  	;0
	199 98   JMPZ/43                   ?0        #103                 ?201                	;0	>>201
	200 99   GOTO/253                  ?0        ?151                 ?133                	;0
	201 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'exec'          	;2	<<199
	202 101  SEND_VAL_EX/116           ?80       136:'sudo systemctl is-active apparmor' ?1                  	;0
	203 101  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
	204 101  DO_FCALL_BY_NAME/131      ?89       ?0                   ?0                  	;0
	205 102  GOTO/253                  ?0        ?227                 ?137                	;0
	206 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'shell_exec'    	;1
	207 104  FETCH_CONSTANT/99         #105=     ?0                   140:'BIN_PATH'      	;16
	208 104  CONCAT/8                  #106=     143:'sudo ln -sfn '  #105                	;0
	209 104  CONCAT/8                  #107=     #106                 144:'php/sbin/php-fpm_'	;0
	210 104  CONCAT/8                  #108=     #107                 16?14               	;0
	211 104  CONCAT/8                  #109=     #108                 145:' '             	;0
	212 104  FETCH_CONSTANT/99         #110=     ?0                   146:'BIN_PATH'      	;16
	213 104  CONCAT/8                  #111=     #109                 #110                	;0
	214 104  CONCAT/8                  #112=     #111                 149:'php/sbin/php-fpm'	;0
	215 104  SEND_VAL_EX/116           ?80       #112                 ?1                  	;0
	216 104  DO_FCALL_BY_NAME/131      ?98       ?0                   ?0                  	;0
	217 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'shell_exec'    	;1
	218 105  FETCH_CONSTANT/99         #114=     ?0                   152:'BIN_PATH'      	;16
	219 105  CONCAT/8                  #115=     155:'sudo chown -R xui:xui ' #114                	;0
	220 105  CONCAT/8                  #116=     #115                 156:'php'           	;0
	221 105  SEND_VAL_EX/116           ?80       #116                 ?1                  	;0
	222 105  DO_FCALL_BY_NAME/131      ?102      ?0                   ?0                  	;0
	223 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'shell_exec'    	;1
	224 106  SEND_VAL_EX/116           ?80       159:'sudo service xuione restart' ?1                  	;0
	225 106  DO_FCALL_BY_NAME/131      ?103      ?0                   ?0                  	;0
	226 108  GOTO/253                  ?0        ?273                 ?160                	;0
	227 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'strtolower'    	;1
	228 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'trim'          	;1
	229 110  FETCH_DIM_FUNC_ARG/93     $119=     16?13                165:0               	;1
	230 110  SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
	231 110  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
	232 110  SEND_VAR_NO_REF_EX/50     ?80       $120                 ?1                  	;0
	233 110  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	234 110  IS_EQUAL/17               #122=     $121                 166:'active'        	;0
	235 110  BOOL_NOT/13               #123=     #122                 ?0                  	;0
	236 110  JMPZ/43                   ?0        #123                 ?238                	;0	>>238
	237 111  GOTO/253                  ?0        ?245                 ?167                	;0
	238 113  ECHO/40                   ?0        168:'AppArmor is loaded! Disabling...
' ?0                  	;0	<<236
	239 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'shell_exec'    	;1
	240 114  SEND_VAL_EX/116           ?80       171:'sudo systemctl stop apparmor' ?1                  	;0
	241 114  DO_FCALL_BY_NAME/131      ?109      ?0                   ?0                  	;0
	242 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'shell_exec'    	;1
	243 115  SEND_VAL_EX/116           ?80       174:'sudo systemctl disable apparmor' ?1                  	;0
	244 115  DO_FCALL_BY_NAME/131      ?110      ?0                   ?0                  	;0
	245 117  GOTO/253                  ?0        ?151                 ?175                	;0
	246 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'shell_exec'    	;1
	247 119  CONCAT/8                  #126=     178:'sudo chown -R xui:xui "' 16?11               	;0
	248 119  CONCAT/8                  #127=     #126                 179:'"'             	;0
	249 119  SEND_VAL_EX/116           ?80       #127                 ?1                  	;0
	250 119  DO_FCALL_BY_NAME/131      ?113      ?0                   ?0                  	;0
	251 121  BOOL_NOT/13               #129=     16?4                 ?0                  	;0
	252 121  JMPZ/43                   ?0        #129                 ?254                	;0	>>254
	253 122  GOTO/253                  ?0        ?226                 ?180                	;0
	254 124  FETCH_CONSTANT/99         #131=     ?0                   184:'SERVER_ID'     	;16	<<252
	255 124  FETCH_STATIC_PROP_R/173   $130=     181:'rServers'       182:'XUI'           	;0
	256 124  FETCH_DIM_R/81            $132=     $130                 #131                	;0
	257 124  FETCH_DIM_R/81            $133=     $132                 187:'php_version'   	;0
	258 124  FETCH_DIM_R/81            $134=     188:array (
  72 => '7.2',
  74 => '7.4',
) $133                	;0
	259 124  JMP_SET/152               #135=     $134                 ?261                	;0
	260 124  QM_ASSIGN/22              #135=     189:'7.4'            ?0                  	;0
	261 124  ASSIGN/38                 ?121      16?14                #135                	;0
	262 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'shell_exec'    	;1
	263 125  FETCH_CONSTANT/99         #137=     ?0                   192:'PHP_BIN'       	;16
	264 125  CONCAT/8                  #138=     195:'sudo ln -sfn '  #137                	;0
	265 125  CONCAT/8                  #139=     #138                 196:'_'             	;0
	266 125  CONCAT/8                  #140=     #139                 16?14               	;0
	267 125  CONCAT/8                  #141=     #140                 197:' '             	;0
	268 125  FETCH_CONSTANT/99         #142=     ?0                   198:'PHP_BIN'       	;16
	269 125  CONCAT/8                  #143=     #141                 #142                	;0
	270 125  SEND_VAL_EX/116           ?80       #143                 ?1                  	;0
	271 125  DO_FCALL_BY_NAME/131      ?129      ?0                   ?0                  	;0
	272 126  GOTO/253                  ?0        ?206                 ?201                	;0
	273 128  NOP/0                     ?0        202:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   134  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   135  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   135  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   135  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   135  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   135  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   136  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   138  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   138  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   140  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'posix_getpwuid'  	;1	<<0
2   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'posix_geteuid'   	;0
3   5    DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
4   5    SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
6   5    FETCH_DIM_R/81            $6=       $5                   5:'name'            	;0
7   5    IS_NOT_EQUAL/18           #7=       $6                   6:'root'            	;0
8   5    BOOL_NOT/13               #8=       #7                   ?0                  	;0
9   5    JMPZ/43                   ?0        #8                   ?11                 	;0	>>11
10  6    GOTO/253                  ?0        ?12                  ?7                  	;0
11  8    EXIT/79                   ?0        8:'Please run as root!
' ?0                  	;0	<<9
12  10   BEGIN_SILENCE/57          #9=       ?0                   ?0                  	;0
13  10   FETCH_R/80                $10=      9:'argc'             ?0                  	;268435456
14  10   END_SILENCE/58            ?0        #9                   ?0                  	;0
15  10   JMPZ/43                   ?0        $10                  ?17                 	;0	>>17
16  11   GOTO/253                  ?0        ?19                  ?10                 	;0
17  13   EXIT/79                   ?0        11:0                 ?0                  	;0	<<15
18  14   GOTO/253                  ?0        ?19                  ?12                 	;0
19  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'register_shutdown_function'	;1
20  17   SEND_VAL_EX/116           ?80       15:'shutdown'        ?1                  	;0
21  17   DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
22  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'str_replace'    	;3
23  18   SEND_VAL_EX/116           ?80       18:'\\'              ?1                  	;0
24  18   SEND_VAL_EX/116           ?96       19:'/'               ?2                  	;0
25  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'dirname'        	;1
26  18   FETCH_DIM_FUNC_ARG/93     $12=      16?0                 22:0                	;1
27  18   SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
28  18   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
29  18   SEND_VAR_NO_REF_EX/50     ?112      $13                  ?3                  	;0
30  18   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
31  18   CONCAT/8                  #15=      $14                  23:'/../../www/init.php'	;0
32  18   INCLUDE_OR_EVAL/73        ?12       #15                  ?0                  	;8
33  19   ASSIGN/38                 ?13       16?1                 24:'/home/xui/bin/' 	;0
34  20   ASSIGN/38                 ?14       16?2                 25:'https://update.xui.one/binaries/'	;0
35  21   GOTO/253                  ?0        ?36                  ?26                 	;0
36  23   ASSIGN/38                 ?15       16?3                 27:'0755'           	;0
37  25   NOP/0                     ?0        ?0                   ?0                  	;0
38  129  INIT_FCALL/61             ?0        ?2400                28:'ed8dbf4549416fa2'	;0
39  129  DO_FCALL/60               ?16       ?0                   ?0                  	;0
40  130  GOTO/253                  ?0        ?41                  ?29                 	;0
41  132  NOP/0                     ?0        ?0                   ?0                  	;0
42  141  NOP/0                     ?0        30:1                 ?0                  	;4294967295
*/

?>