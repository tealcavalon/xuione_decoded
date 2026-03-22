<?php


function processDeletions($B575e4db9840f393, $D8ff8abc17944d44)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   149  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   149  RECV_INIT/64              16?1=     ?2                   0:array (
)         	;0
	2   151  GOTO/253                  ?0        ?188                 ?1                  	;0
	3   153  FETCH_DIM_R/81            $13=      16?0                 2:'proxy'           	;0
	4   153  FE_RESET_R/77             $14=      $13                  ?14                 	;0
	5   153  FE_FETCH_R/78             #15=      $14                  16?2                	;14	>>14	<<13
	6   153  ASSIGN/38                 ?3        16?3                 #15                 	;0
	7   154  INIT_METHOD_CALL/112      ?0        16?4                 3:'zRem'            	;1
	8   154  NOP/0                     ?0        ?0                   ?0                  	;0
	9   154  FAST_CONCAT/53            #17=      5:'PROXY#'           16?3                	;0
	10  154  SEND_VAL_EX/116           ?80       #17                  ?1                  	;0
	11  154  SEND_UNPACK/165           ?80       16?2                 ?1                  	;0
	12  154  DO_FCALL/60               ?5        ?0                   ?0                  	;0
	13  155  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
	14  155  FE_FREE/127               ?0        $14                  ?0                  	;0	<<4
	15  158  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'count'           	;1
	16  158  FETCH_DIM_FUNC_ARG/93     $19=      16?0                 8:'uuid'            	;1
	17  158  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
	18  158  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	19  158  IS_SMALLER/19             #21=      9:0                  $20                 	;0
	20  158  BOOL_NOT/13               #22=      #21                  ?0                  	;0
	21  158  JMPZ/43                   ?0        #22                  ?23                 	;0	>>23
	22  159  GOTO/253                  ?0        ?44                  ?10                 	;0
	23  161  INIT_METHOD_CALL/112      ?0        16?4                 11:'zRem'           	;1	<<21
	24  161  SEND_VAL_EX/116           ?80       13:'CONNECTIONS'     ?1                  	;0
	25  161  FETCH_DIM_R/81            $23=      16?0                 14:'uuid'           	;0
	26  161  SEND_UNPACK/165           ?80       $23                  ?1                  	;0
	27  161  DO_FCALL/60               ?11       ?0                   ?0                  	;0
	28  162  INIT_METHOD_CALL/112      ?0        16?4                 15:'zRem'           	;1
	29  162  SEND_VAL_EX/116           ?80       17:'LIVE'            ?1                  	;0
	30  162  FETCH_DIM_R/81            $25=      16?0                 18:'uuid'           	;0
	31  162  SEND_UNPACK/165           ?80       $25                  ?1                  	;0
	32  162  DO_FCALL/60               ?13       ?0                   ?0                  	;0
	33  163  GOTO/253                  ?0        ?35                  ?19                 	;0
	34  166  GOTO/253                  ?0        ?219                 ?20                 	;0
	35  168  INIT_METHOD_CALL/112      ?0        16?4                 21:'sRem'           	;1
	36  168  SEND_VAL_EX/116           ?80       23:'ENDED'           ?1                  	;0
	37  168  FETCH_DIM_R/81            $27=      16?0                 24:'uuid'           	;0
	38  168  SEND_UNPACK/165           ?80       $27                  ?1                  	;0
	39  168  DO_FCALL/60               ?15       ?0                   ?0                  	;0
	40  169  INIT_METHOD_CALL/112      ?0        16?4                 25:'del'            	;0
	41  169  FETCH_DIM_R/81            $29=      16?0                 27:'uuid'           	;0
	42  169  SEND_UNPACK/165           ?64       $29                  ?0                  	;0
	43  169  DO_FCALL/60               ?17       ?0                   ?0                  	;0
	44  171  INIT_METHOD_CALL/112      ?0        16?4                 28:'exec'           	;0
	45  171  DO_FCALL/60               ?18       ?0                   ?0                  	;0
	46  173  GOTO/253                  ?0        ?115                 ?30                 	;0
	47  176  FETCH_DIM_R/81            $32=      16?0                 31:'stream'         	;0
	48  176  FE_RESET_R/77             $33=      $32                  ?58                 	;0
	49  176  FE_FETCH_R/78             #34=      $33                  16?2                	;58	>>58	<<57
	50  176  ASSIGN/38                 ?22       16?5                 #34                 	;0
	51  177  INIT_METHOD_CALL/112      ?0        16?4                 32:'zRem'           	;1
	52  177  NOP/0                     ?0        ?0                   ?0                  	;0
	53  177  FAST_CONCAT/53            #36=      34:'STREAM#'         16?5                	;0
	54  177  SEND_VAL_EX/116           ?80       #36                  ?1                  	;0
	55  177  SEND_UNPACK/165           ?80       16?2                 ?1                  	;0
	56  177  DO_FCALL/60               ?24       ?0                   ?0                  	;0
	57  178  JMP/42                    ?0        ?49                  ?0                  	;0	>>49
	58  178  FE_FREE/127               ?0        $33                  ?0                  	;0	<<48
	59  181  FETCH_DIM_R/81            $38=      16?0                 35:'server'         	;0
	60  181  FE_RESET_R/77             $39=      $38                  ?76                 	;0
	61  181  FE_FETCH_R/78             #40=      $39                  16?2                	;76	>>76	<<75
	62  181  ASSIGN/38                 ?28       16?6                 #40                 	;0
	63  182  INIT_METHOD_CALL/112      ?0        16?4                 36:'zRem'           	;1
	64  182  NOP/0                     ?0        ?0                   ?0                  	;0
	65  182  FAST_CONCAT/53            #42=      38:'SERVER#'         16?6                	;0
	66  182  SEND_VAL_EX/116           ?80       #42                  ?1                  	;0
	67  182  SEND_UNPACK/165           ?80       16?2                 ?1                  	;0
	68  182  DO_FCALL/60               ?30       ?0                   ?0                  	;0
	69  183  INIT_METHOD_CALL/112      ?0        16?4                 39:'zRem'           	;1
	70  183  NOP/0                     ?0        ?0                   ?0                  	;0
	71  183  FAST_CONCAT/53            #44=      41:'SERVER_LINES#'   16?6                	;0
	72  183  SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
	73  183  SEND_UNPACK/165           ?80       16?2                 ?1                  	;0
	74  183  DO_FCALL/60               ?32       ?0                   ?0                  	;0
	75  184  JMP/42                    ?0        ?61                  ?0                  	;0	>>61
	76  184  FE_FREE/127               ?0        $39                  ?0                  	;0	<<60
	77  187  GOTO/253                  ?0        ?3                   ?42                 	;0
	78  189  GOTO/253                  ?0        ?115                 ?43                 	;0
	79  191  FETCH_DIM_R/81            $46=      16?0                 44:'count'          	;0
	80  191  IS_SMALLER/19             #47=      45:0                 $46                 	;0
	81  191  BOOL_NOT/13               #48=      #47                  ?0                  	;0
	82  191  JMPZ/43                   ?0        #48                  ?84                 	;0	>>84
	83  192  GOTO/253                  ?0        ?46                  ?46                 	;0
	84  194  FETCH_STATIC_PROP_R/173   $49=      47:'redis'           48:'XUI'            	;0	<<82
	85  194  INIT_METHOD_CALL/112      ?0        $49                  50:'multi'          	;0
	86  194  DO_FCALL/60               $50=      ?0                   ?0                  	;0
	87  194  ASSIGN/38                 ?38       16?4                 $50                 	;0
	88  195  FETCH_DIM_R/81            $52=      16?0                 52:'line'           	;0
	89  195  FE_RESET_R/77             $53=      $52                  ?105                	;0
	90  195  FE_FETCH_R/78             #54=      $53                  16?2                	;105	>>105	<<104
	91  195  ASSIGN/38                 ?42       16?7                 #54                 	;0
	92  196  INIT_METHOD_CALL/112      ?0        16?4                 53:'zRem'           	;1
	93  196  NOP/0                     ?0        ?0                   ?0                  	;0
	94  196  FAST_CONCAT/53            #56=      55:'LINE#'           16?7                	;0
	95  196  SEND_VAL_EX/116           ?80       #56                  ?1                  	;0
	96  196  SEND_UNPACK/165           ?80       16?2                 ?1                  	;0
	97  196  DO_FCALL/60               ?44       ?0                   ?0                  	;0
	98  197  INIT_METHOD_CALL/112      ?0        16?4                 56:'zRem'           	;1
	99  197  NOP/0                     ?0        ?0                   ?0                  	;0
	100 197  FAST_CONCAT/53            #58=      58:'LINE_ALL#'       16?7                	;0
	101 197  SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
	102 197  SEND_UNPACK/165           ?80       16?2                 ?1                  	;0
	103 197  DO_FCALL/60               ?46       ?0                   ?0                  	;0
	104 198  JMP/42                    ?0        ?90                  ?0                  	;0	>>90
	105 198  FE_FREE/127               ?0        $53                  ?0                  	;0	<<89
	106 200  GOTO/253                  ?0        ?47                  ?59                 	;0
	107 202  FETCH_STATIC_PROP_R/173   $60=      60:'rSettings'       61:'XUI'            	;0
	108 202  FETCH_DIM_R/81            $61=      $60                  63:'redis_handler'  	;0
	109 202  JMPZ/43                   ?0        $61                  ?111                	;0	>>111
	110 203  GOTO/253                  ?0        ?113                 ?64                 	;0
	111 205  RETURN/62                 ?0        65:array (
)         ?0                  	;0	<<109
	112 206  GOTO/253                  ?0        ?34                  ?66                 	;0
	113 208  RETURN/62                 ?0        67:array (
  'line' => 
  array (
  ),
  'server' => 
  array (
  ),
  'server_lines' => 
  array (
  ),
  'proxy' => 
  array (
  ),
  'stream' => 
  array (
  ),
  'uuid' => 
  array (
  ),
  'count' => 0,
) ?0                  	;0
	114 209  GOTO/253                  ?0        ?34                  ?68                 	;0
	115 212  FETCH_STATIC_PROP_R/173   $62=      69:'rSettings'       70:'XUI'            	;0
	116 212  FETCH_DIM_R/81            $63=      $62                  72:'redis_handler'  	;0
	117 212  JMPZ/43                   ?0        $63                  ?121                	;0	>>121
	118 212  FETCH_DIM_R/81            $64=      16?0                 73:'server'         	;0
	119 212  QM_ASSIGN/22              #65=      $64                  ?0                  	;0
	120 212  JMP/42                    ?0        ?122                 ?0                  	;0	>>122
	121 212  QM_ASSIGN/22              #65=      16?0                 ?0                  	;0	<<117
	122 212  FE_RESET_R/77             $66=      #65                  ?168                	;0	<<120
	123 212  FE_FETCH_R/78             #67=      $66                  16?8                	;168	>>168	<<167
	124 212  ASSIGN/38                 ?55       16?6                 #67                 	;0
	125 213  FETCH_CONSTANT/99         #69=      ?0                   74:'SERVER_ID'      	;16
	126 213  IS_NOT_EQUAL/18           #70=      16?6                 #69                 	;0
	127 213  BOOL_NOT/13               #71=      #70                  ?0                  	;0
	128 213  JMPZ/43                   ?0        #71                  ?131                	;0	>>131
	129 214  NOP/0                     ?0        ?0                   ?0                  	;1
	130 214  GOTO/253                  ?0        ?167                 ?77                 	;0
	131 216  ASSIGN/38                 ?59       16?9                 78:''               	;0	<<128
	132 217  FE_RESET_R/77             $73=      16?8                 ?151                	;0
	133 217  FE_FETCH_R/78             ?0        $73                  16?10               	;151	>>151	<<150
	134 218  ROPE_INIT/54              #75=      ?0                   79:'('              	;5
	135 218  ROPE_ADD/55               #75=      #75                  16?6                	;1
	136 218  ROPE_ADD/55               #75=      #75                  80:',1,'            	;2
	137 218  ROPE_ADD/55               #75=      #75                  16?11               	;3
	138 218  ROPE_END/56               #74=      #75                  81:','              	;4
	139 218  INIT_METHOD_CALL/112      ?0        16?12                82:'escape'         	;1
	140 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'json_encode'    	;1
	141 218  INIT_ARRAY/71             #78=      86:'delete_con'      87:'type'           	;10
	142 218  ADD_ARRAY_ELEMENT/72      #78=      16?10                88:'uuid'           	;0
	143 218  SEND_VAL_EX/116           ?80       #78                  ?1                  	;0
	144 218  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
	145 218  SEND_VAR_NO_REF_EX/50     ?80       $79                  ?1                  	;0
	146 218  DO_FCALL/60               $80=      ?0                   ?0                  	;0
	147 218  CONCAT/8                  #81=      #74                  $80                 	;0
	148 218  CONCAT/8                  #82=      #81                  89:'),'             	;0
	149 218  ASSIGN_CONCAT/30          ?70       16?9                 #82                 	;0
	150 219  JMP/42                    ?0        ?133                 ?0                  	;0	>>133
	151 219  FE_FREE/127               ?0        $73                  ?0                  	;0	<<132
	152 222  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'rtrim'          	;2
	153 222  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	154 222  SEND_VAL_EX/116           ?96       92:','               ?2                  	;0
	155 222  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
	156 222  ASSIGN/38                 ?72       16?9                 $84                 	;0
	157 223  ISSET_ISEMPTY_CV/197      #86=      16?9                 ?0                  	;16777216
	158 223  JMPZ/43                   ?0        #86                  ?161                	;0	>>161
	159 224  NOP/0                     ?0        ?0                   ?0                  	;1
	160 224  GOTO/253                  ?0        ?167                 ?93                 	;0
	161 226  INIT_METHOD_CALL/112      ?0        16?12                94:'query'          	;1	<<158
	162 226  ROPE_INIT/54              #88=      ?0                   96:'INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES '	;3
	163 226  ROPE_ADD/55               #88=      #88                  16?9                	;1
	164 226  ROPE_END/56               #87=      #88                  97:';'              	;2
	165 226  SEND_VAL_EX/116           ?80       #87                  ?1                  	;0
	166 226  DO_FCALL/60               ?77       ?0                   ?0                  	;0
	167 229  JMP/42                    ?0        ?123                 ?0                  	;0	>>123
	168 229  FE_FREE/127               ?0        $66                  ?0                  	;0	<<122
	169 232  FE_RESET_R/77             $91=      16?1                 ?186                	;0
	170 232  FE_FETCH_R/78             #92=      $91                  16?8                	;186	>>186	<<185
	171 232  ASSIGN/38                 ?80       16?5                 #92                 	;0
	172 233  FE_RESET_R/77             $94=      16?8                 ?184                	;0
	173 233  FE_FETCH_R/78             ?0        $94                  16?10               	;184	>>184	<<183
	174 234  BEGIN_SILENCE/57          #95=      ?0                   ?0                  	;0
	175 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'unlink'         	;1
	176 234  FETCH_CONSTANT/99         #96=      ?0                   100:'CONS_TMP_PATH' 	;16
	177 234  CONCAT/8                  #97=      #96                  16?5                	;0
	178 234  CONCAT/8                  #98=      #97                  103:'/'             	;0
	179 234  CONCAT/8                  #99=      #98                  16?10               	;0
	180 234  SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
	181 234  DO_FCALL_BY_NAME/131      ?87       ?0                   ?0                  	;0
	182 234  END_SILENCE/58            ?0        #95                  ?0                  	;0
	183 235  JMP/42                    ?0        ?173                 ?0                  	;0	>>173
	184 235  FE_FREE/127               ?0        $94                  ?0                  	;0	<<172
	185 238  JMP/42                    ?0        ?170                 ?0                  	;0	>>170
	186 238  FE_FREE/127               ?0        $91                  ?0                  	;0	<<169
	187 241  GOTO/253                  ?0        ?107                 ?104                	;0
	188 243  BIND_GLOBAL/168           ?0        16?12                105:'b62d6460eb33ea07'	;0
	189 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'time'          	;0
	190 244  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
	191 244  ASSIGN/38                 ?89       16?11                $101                	;0
	192 245  FETCH_STATIC_PROP_R/173   $103=     108:'rSettings'      109:'XUI'           	;0
	193 245  FETCH_DIM_R/81            $104=     $103                 111:'redis_handler' 	;0
	194 245  JMPZ/43                   ?0        $104                 ?196                	;0	>>196
	195 246  GOTO/253                  ?0        ?79                  ?112                	;0
	196 248  FE_RESET_R/77             $105=     16?0                 ?217                	;0	<<194
	197 248  FE_FETCH_R/78             #106=     $105                 16?8                	;217	>>217	<<216
	198 248  ASSIGN/38                 ?94       16?6                 #106                	;0
	199 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'count'         	;1
	200 249  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	201 249  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
	202 249  IS_SMALLER/19             #109=     115:0                $108                	;0
	203 249  BOOL_NOT/13               #110=     #109                 ?0                  	;0
	204 249  JMPZ/43                   ?0        #110                 ?207                	;0	>>207
	205 250  NOP/0                     ?0        ?0                   ?0                  	;1
	206 250  GOTO/253                  ?0        ?216                 ?116                	;0
	207 252  INIT_METHOD_CALL/112      ?0        16?12                117:'query'         	;1	<<204
	208 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'implode'       	;2
	209 252  SEND_VAL_EX/116           ?80       121:'\',\''          ?1                  	;0
	210 252  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	211 252  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
	212 252  CONCAT/8                  #112=     122:'DELETE FROM `lines_live` WHERE `uuid` IN (\'' $111                	;0
	213 252  CONCAT/8                  #113=     #112                 123:'\')'           	;0
	214 252  SEND_VAL_EX/116           ?80       #113                 ?1                  	;0
	215 252  DO_FCALL/60               ?101      ?0                   ?0                  	;0
	216 254  JMP/42                    ?0        ?197                 ?0                  	;0	>>197
	217 254  FE_FREE/127               ?0        $105                 ?0                  	;0	<<196
	218 257  GOTO/253                  ?0        ?78                  ?124                	;0
	219 259  NOP/0                     ?0        125:NULL             ?0                  	;4294967295
	*/
}

function AB8369074Df2aaA3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    263   JMP/42                    ?0        ?131                 ?0                  	;0	>>131
	1    266   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'count'           	;1
	2    266   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3    266   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
	4    266   IS_SMALLER/19             #39=      3:0                  $38                 	;0
	5    266   BOOL_NOT/13               #40=      #39                  ?0                  	;0
	6    266   JMPZ/43                   ?0        #40                  ?8                  	;0	>>8
	7    267   GOTO/253                  ?0        ?19                  ?4                  	;0
	8    269   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'implode'         	;2	<<6
	9    269   SEND_VAL_EX/116           ?80       7:','                ?1                  	;0
	10   269   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
	11   269   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	12   269   ASSIGN/38                 ?4        16?1                 $41                 	;0
	13   270   INIT_METHOD_CALL/112      ?0        16?2                 8:'query'           	;1
	14   270   ROPE_INIT/54              #44=      ?0                   10:'INSERT INTO `lines_divergence`(`uuid`,`divergence`) VALUES '	;3
	15   270   ROPE_ADD/55               #44=      #44                  16?1                	;1
	16   270   ROPE_END/56               #43=      #44                  11:' ON DUPLICATE KEY UPDATE `divergence`=VALUES(`divergence`);'	;2
	17   270   SEND_VAL_EX/116           ?80       #43                  ?1                  	;0
	18   270   DO_FCALL/60               ?8        ?0                   ?0                  	;0
	19   272   GOTO/253                  ?0        ?1152                ?12                 	;0
	20   275   GOTO/253                  ?0        ?1067                ?13                 	;0
	21   277   ASSIGN/38                 $47=      16?4                 14:array (
)        	;0
	22   277   ASSIGN/38                 ?10       16?3                 $47                 	;0
	23   278   INIT_METHOD_CALL/112      ?0        16?2                 15:'query'          	;2
	24   278   SEND_VAL_EX/116           ?80       17:'SELECT `stream_id`, `bitrate` FROM `streams_servers` WHERE `server_id` = ? AND `bitrate` IS NOT NULL;' ?1                  	;0
	25   278   FETCH_CONSTANT/99         #49=      ?0                   18:'SERVER_ID'      	;16
	26   278   SEND_VAL_EX/116           ?96       #49                  ?2                  	;0
	27   278   DO_FCALL/60               ?12       ?0                   ?0                  	;0
	28   279   GOTO/253                  ?0        ?269                 ?21                 	;0
	29   281   FETCH_STATIC_PROP_R/173   $51=      22:'rSettings'       23:'XUI'            	;0
	30   281   FETCH_DIM_R/81            $52=      $51                  25:'redis_handler'  	;0
	31   281   JMPZ_EX/46                #53=      $52                  ?35                 	;0	>>35
	32   281   FETCH_DIM_R/81            $54=      16?5                 26:'count'          	;0
	33   281   IS_SMALLER/19             #55=      27:0                 $54                 	;0
	34   281   BOOL/52                   #53=      #55                  ?0                  	;0
	35   281   JMPZ/43                   ?0        #53                  ?37                 	;0	>>37	<<31
	36   282   GOTO/253                  ?0        ?1080                ?28                 	;0
	37   284   FETCH_STATIC_PROP_R/173   $56=      29:'rSettings'       30:'XUI'            	;0	<<35
	38   284   FETCH_DIM_R/81            $57=      $56                  32:'redis_handler'  	;0
	39   284   BOOL_NOT/13               #58=      $57                  ?0                  	;0
	40   284   JMPZ_EX/46                #58=      #58                  ?46                 	;0	>>46
	41   284   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'count'          	;1
	42   284   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	43   284   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
	44   284   IS_SMALLER/19             #60=      35:0                 $59                 	;0
	45   284   BOOL/52                   #58=      #60                  ?0                  	;0
	46   284   BOOL_NOT/13               #61=      #58                  ?0                  	;0	<<40
	47   284   JMPZ/43                   ?0        #61                  ?49                 	;0	>>49
	48   285   GOTO/253                  ?0        ?53                  ?36                 	;0
	49   287   INIT_FCALL/61             ?0        ?1920                37:'processdeletions'	;2	<<47
	50   287   SEND_VAR/117              ?80       16?6                 ?1                  	;0
	51   287   SEND_VAR/117              ?96       16?7                 ?2                  	;0
	52   287   DO_FCALL/60               ?24       ?0                   ?0                  	;0
	53   289   GOTO/253                  ?0        ?1085                ?38                 	;0
	54   290   GOTO/253                  ?0        ?1080                ?39                 	;0
	55   292   GOTO/253                  ?0        ?1097                ?40                 	;0
	56   294   UNSET_CV/196              ?0        16?8                 ?0                  	;0
	57   296   ASSIGN/38                 $63=      16?10                41:array (
)        	;0
	58   296   ASSIGN/38                 ?26       16?9                 $63                 	;0
	59   297   GOTO/253                  ?0        ?60                  ?42                 	;0
	60   299   INIT_STATIC_METHOD_CALL/113 ?0        43:'XUI'             45:'confirmIDs'     	;1
	61   299   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'array_keys'     	;1
	62   299   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	63   299   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
	64   299   SEND_VAR_NO_REF_EX/50     ?80       $65                  ?1                  	;0
	65   299   DO_FCALL/60               $66=      ?0                   ?0                  	;0
	66   299   ASSIGN/38                 ?29       16?11                $66                 	;0
	67   300   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'count'          	;1
	68   300   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	69   300   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
	70   300   IS_SMALLER/19             #69=      51:0                 $68                 	;0
	71   300   BOOL_NOT/13               #70=      #69                  ?0                  	;0
	72   300   JMPZ/43                   ?0        #70                  ?74                 	;0	>>74
	73   301   GOTO/253                  ?0        ?158                 ?52                 	;0
	74   303   INIT_METHOD_CALL/112      ?0        16?2                 53:'query'          	;1	<<72
	75   303   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'implode'        	;2
	76   303   SEND_VAL_EX/116           ?80       57:','               ?1                  	;0
	77   303   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	78   303   DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
	79   303   CONCAT/8                  #72=      58:'SELECT `id`, `max_connections`, `is_restreamer` FROM `lines` WHERE `id` IN (' $71                 	;0
	80   303   CONCAT/8                  #73=      #72                  59:');'             	;0
	81   303   SEND_VAL_EX/116           ?80       #73                  ?1                  	;0
	82   303   DO_FCALL/60               ?36       ?0                   ?0                  	;0
	83   304   INIT_METHOD_CALL/112      ?0        16?2                 60:'get_rows'       	;0
	84   304   DO_FCALL/60               $75=      ?0                   ?0                  	;0
	85   304   FE_RESET_R/77             $76=      $75                  ?96                 	;0
	86   304   FE_FETCH_R/78             ?0        $76                  16?13               	;96	>>96	<<95
	87   305   FETCH_DIM_R/81            $77=      16?13                62:'id'             	;0
	88   305   FETCH_DIM_R/81            $79=      16?13                63:'max_connections'	;0
	89   305   ASSIGN_DIM/147            ?40       16?10                $77                 	;0
	90   305   OP_DATA/137               ?0        $79                  ?0                  	;0
	91   306   FETCH_DIM_R/81            $80=      16?13                64:'id'             	;0
	92   306   FETCH_DIM_R/81            $82=      16?13                65:'is_restreamer'  	;0
	93   306   ASSIGN_DIM/147            ?43       16?9                 $80                 	;0
	94   306   OP_DATA/137               ?0        $82                  ?0                  	;0
	95   307   JMP/42                    ?0        ?86                  ?0                  	;0	>>86
	96   307   FE_FREE/127               ?0        $76                  ?0                  	;0	<<85
	97   310   GOTO/253                  ?0        ?158                 ?66                 	;0
	98   312   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'count'          	;1
	99   312   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
	100  312   DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
	101  312   IS_SMALLER/19             #84=      69:0                 $83                 	;0
	102  312   BOOL_NOT/13               #85=      #84                  ?0                  	;0
	103  312   JMPZ/43                   ?0        #85                  ?105                	;0	>>105
	104  313   GOTO/253                  ?0        ?1024                ?70                 	;0
	105  315   FETCH_STATIC_PROP_R/173   $86=      71:'rSettings'       72:'XUI'            	;0	<<103
	106  315   FETCH_DIM_R/81            $87=      $86                  74:'redis_handler'  	;0
	107  315   JMPZ/43                   ?0        $87                  ?109                	;0	>>109
	108  316   GOTO/253                  ?0        ?21                  ?75                 	;0
	109  318   ASSIGN/38                 ?50       16?4                 76:array (
)        	;0	<<107
	110  319   INIT_METHOD_CALL/112      ?0        16?2                 77:'query'          	;2
	111  319   SEND_VAL_EX/116           ?80       79:'SELECT `lines_live`.`uuid`, `streams_servers`.`bitrate` FROM `lines_live` LEFT JOIN `streams_servers` ON `lines_live`.`stream_id` = `streams_servers`.`stream_id` AND `lines_live`.`server_id` = `streams_servers`.`server_id` WHERE `lines_live`.`server_id` = ?;' ?1                  	;0
	112  319   FETCH_CONSTANT/99         #89=      ?0                   80:'SERVER_ID'      	;16
	113  319   SEND_VAL_EX/116           ?96       #89                  ?2                  	;0
	114  319   DO_FCALL/60               ?52       ?0                   ?0                  	;0
	115  320   INIT_METHOD_CALL/112      ?0        16?2                 83:'get_rows'       	;0
	116  320   DO_FCALL/60               $91=      ?0                   ?0                  	;0
	117  320   FE_RESET_R/77             $92=      $91                  ?129                	;0
	118  320   FE_FETCH_R/78             ?0        $92                  16?13               	;129	>>129	<<128
	119  321   FETCH_DIM_R/81            $93=      16?13                85:'uuid'           	;0
	120  321   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'intval'         	;1
	121  321   FETCH_DIM_R/81            $95=      16?13                88:'bitrate'        	;0
	122  321   DIV/4                     #96=      $95                  89:8                	;0
	123  321   MUL/3                     #97=      #96                  90:0.92             	;0
	124  321   SEND_VAL_EX/116           ?80       #97                  ?1                  	;0
	125  321   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
	126  321   ASSIGN_DIM/147            ?56       16?4                 $93                 	;0
	127  321   OP_DATA/137               ?0        $98                  ?0                  	;0
	128  322   JMP/42                    ?0        ?118                 ?0                  	;0	>>118
	129  322   FE_FREE/127               ?0        $92                  ?0                  	;0	<<117
	130  324   GOTO/253                  ?0        ?20                  ?91                 	;0
	131  326   BIND_GLOBAL/168           ?0        16?2                 92:'b62d6460eb33ea07'	;0	<<0
	132  326   BIND_GLOBAL/168           ?0        16?15                93:'daca82e98f511305'	;0
	133  327   FETCH_STATIC_PROP_R/173   $99=      94:'rSettings'       95:'XUI'            	;0
	134  327   FETCH_DIM_R/81            $100=     $99                  97:'redis_handler'  	;0
	135  327   BOOL_NOT/13               #101=     $100                 ?0                  	;0
	136  327   JMPZ/43                   ?0        #101                 ?138                	;0	>>138
	137  328   GOTO/253                  ?0        ?140                 ?98                 	;0
	138  330   INIT_STATIC_METHOD_CALL/113 ?0        99:'XUI'             101:'d6AEB3175A43f301'	;0	<<136
	139  330   DO_FCALL/60               ?64       ?0                   ?0                  	;0
	140  332   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'time'          	;0
	141  332   DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
	142  332   ASSIGN/38                 ?66       16?16                $103                	;0
	143  333   GOTO/253                  ?0        ?1104                ?105                	;0
	144  335   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'is_array'      	;1
	145  335   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	146  335   DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
	147  335   JMPZ/43                   ?0        $105                 ?149                	;0	>>149
	148  336   GOTO/253                  ?0        ?157                 ?108                	;0
	149  338   FETCH_DIM_RW/87           $106=     16?5                 109:'count'         	;0	<<147
	150  338   POST_INC/36               #107=     $106                 ?0                  	;0
	151  338   FREE/70                   ?0        #107                 ?0                  	;0
	152  339   FETCH_DIM_R/81            $110=     16?18                16?19               	;0
	153  339   FETCH_DIM_W/84            $108=     16?5                 110:'uuid'          	;0
	154  339   ASSIGN_DIM/147            ?71       $108                 ?4397406            	;0
	155  339   OP_DATA/137               ?0        $110                 ?0                  	;0
	156  340   GOTO/253                  ?0        ?1064                ?111                	;0
	157  342   GOTO/253                  ?0        ?1057                ?112                	;0
	158  345   FETCH_STATIC_PROP_R/173   $111=     113:'rSettings'      114:'XUI'           	;0
	159  345   FETCH_DIM_R/81            $112=     $111                 116:'redis_handler' 	;0
	160  345   JMPZ_EX/46                #113=     $112                 ?166                	;0	>>166
	161  345   FETCH_CONSTANT/99         #115=     ?0                   120:'SERVER_ID'     	;16
	162  345   FETCH_STATIC_PROP_R/173   $114=     117:'rServers'       118:'XUI'           	;0
	163  345   FETCH_DIM_R/81            $116=     $114                 #115                	;0
	164  345   FETCH_DIM_R/81            $117=     $116                 123:'is_main'       	;0
	165  345   BOOL/52                   #113=     $117                 ?0                  	;0
	166  345   BOOL_NOT/13               #118=     #113                 ?0                  	;0	<<160
	167  345   JMPZ/43                   ?0        #118                 ?169                	;0	>>169
	168  346   GOTO/253                  ?0        ?311                 ?124                	;0
	169  348   INIT_STATIC_METHOD_CALL/113 ?0        125:'XUI'            127:'getEnded'      	;0	<<167
	170  348   DO_FCALL/60               $119=     ?0                   ?0                  	;0
	171  348   FE_RESET_R/77             $120=     $119                 ?262                	;0
	172  348   FE_FETCH_R/78             ?0        $120                 16?17               	;262	>>262	<<261
	173  349   NOP/0                     ?0        ?0                   ?0                  	;1
	174  349   GOTO/253                  ?0        ?217                 ?129                	;0
	175  351   FETCH_DIM_RW/87           $121=     16?5                 130:'count'         	;0
	176  351   POST_INC/36               #122=     $121                 ?0                  	;0
	177  351   FREE/70                   ?0        #122                 ?0                  	;0
	178  352   FETCH_DIM_R/81            $124=     16?17                132:'identity'      	;0
	179  352   FETCH_DIM_R/81            $127=     16?17                133:'uuid'          	;0
	180  352   FETCH_DIM_W/84            $123=     16?5                 131:'line'          	;0
	181  352   FETCH_DIM_W/84            $125=     $123                 $124                	;0
	182  352   ASSIGN_DIM/147            ?88       $125                 ?1664804992         	;0
	183  352   OP_DATA/137               ?0        $127                 ?0                  	;0
	184  353   FETCH_DIM_R/81            $129=     16?17                135:'stream_id'     	;0
	185  353   FETCH_DIM_R/81            $132=     16?17                136:'uuid'          	;0
	186  353   FETCH_DIM_W/84            $128=     16?5                 134:'stream'        	;0
	187  353   FETCH_DIM_W/84            $130=     $128                 $129                	;0
	188  353   ASSIGN_DIM/147            ?93       $130                 ?0                  	;0
	189  353   OP_DATA/137               ?0        $132                 ?0                  	;0
	190  354   FETCH_DIM_R/81            $134=     16?17                138:'server_id'     	;0
	191  354   FETCH_DIM_R/81            $137=     16?17                139:'uuid'          	;0
	192  354   FETCH_DIM_W/84            $133=     16?5                 137:'server'        	;0
	193  354   FETCH_DIM_W/84            $135=     $133                 $134                	;0
	194  354   ASSIGN_DIM/147            ?98       $135                 ?0                  	;0
	195  354   OP_DATA/137               ?0        $137                 ?0                  	;0
	196  355   FETCH_DIM_R/81            $140=     16?17                141:'uuid'          	;0
	197  355   FETCH_DIM_W/84            $138=     16?5                 140:'uuid'          	;0
	198  355   ASSIGN_DIM/147            ?101      $138                 ?0                  	;0
	199  355   OP_DATA/137               ?0        $140                 ?0                  	;0
	200  356   NOP/0                     ?0        ?0                   ?0                  	;1
	201  356   GOTO/253                  ?0        ?204                 ?142                	;0
	202  359   NOP/0                     ?0        ?0                   ?0                  	;1
	203  359   GOTO/253                  ?0        ?261                 ?143                	;0
	204  361   FETCH_DIM_R/81            $141=     16?17                144:'proxy_id'      	;0
	205  361   BOOL_NOT/13               #142=     $141                 ?0                  	;0
	206  361   JMPZ/43                   ?0        #142                 ?209                	;0	>>209
	207  362   NOP/0                     ?0        ?0                   ?0                  	;1
	208  362   GOTO/253                  ?0        ?215                 ?145                	;0
	209  364   FETCH_DIM_R/81            $144=     16?17                147:'proxy_id'      	;0	<<206
	210  364   FETCH_DIM_R/81            $147=     16?17                148:'uuid'          	;0
	211  364   FETCH_DIM_W/84            $143=     16?5                 146:'proxy'         	;0
	212  364   FETCH_DIM_W/84            $145=     $143                 $144                	;0
	213  364   ASSIGN_DIM/147            ?108      $145                 ?4397406            	;0
	214  364   OP_DATA/137               ?0        $147                 ?0                  	;0
	215  368   NOP/0                     ?0        ?0                   ?0                  	;1
	216  368   GOTO/253                  ?0        ?202                 ?149                	;0
	217  370   INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'is_array'      	;1
	218  370   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	219  370   DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
	220  370   BOOL_NOT/13               #149=     $148                 ?0                  	;0
	221  370   JMPZ/43                   ?0        #149                 ?224                	;0	>>224
	222  371   NOP/0                     ?0        ?0                   ?0                  	;1
	223  371   GOTO/253                  ?0        ?215                 ?152                	;0
	224  373   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'in_array'      	;2	<<221
	225  373   FETCH_DIM_FUNC_ARG/93     $150=     16?17                155:'container'     	;1
	226  373   SEND_VAR_EX/66            ?80       $150                 ?1                  	;0
	227  373   SEND_VAL_EX/116           ?96       156:array (
  0 => 'ts',
  1 => 'hls',
  2 => 'rtmp',
) ?2                  	;0
	228  373   DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
	229  373   BOOL_NOT/13               #152=     $151                 ?0                  	;0
	230  373   JMPZ_EX/46                #152=     #152                 ?237                	;0	>>237
	231  373   INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'time'          	;0
	232  373   DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
	233  373   FETCH_DIM_R/81            $154=     16?17                159:'hls_last_read' 	;0
	234  373   SUB/2                     #155=     $153                 $154                	;0
	235  373   IS_SMALLER/19             #156=     #155                 160:300             	;0
	236  373   BOOL/52                   #152=     #156                 ?0                  	;0
	237  373   JMPZ/43                   ?0        #152                 ?240                	;0	>>240	<<230
	238  374   NOP/0                     ?0        ?0                   ?0                  	;1
	239  374   GOTO/253                  ?0        ?243                 ?161                	;0
	240  376   ASSIGN/38                 ?119      16?20                162:true            	;0	<<237
	241  377   NOP/0                     ?0        ?0                   ?0                  	;1
	242  377   GOTO/253                  ?0        ?246                 ?163                	;0
	243  379   NOP/0                     ?0        ?0                   ?0                  	;1
	244  379   GOTO/253                  ?0        ?245                 ?164                	;0
	245  381   ASSIGN/38                 ?120      16?20                165:false           	;0
	246  383   BOOL_NOT/13               #159=     16?20                ?0                  	;0
	247  383   JMPZ/43                   ?0        #159                 ?250                	;0	>>250
	248  384   NOP/0                     ?0        ?0                   ?0                  	;1
	249  384   GOTO/253                  ?0        ?215                 ?166                	;0
	250  386   FETCH_DIM_R/81            $160=     16?17                167:'uuid'          	;0	<<247
	251  386   CONCAT/8                  #161=     168:'Close connection: ' $160                	;0
	252  386   CONCAT/8                  #162=     #161                 169:'
'             	;0
	253  386   ECHO/40                   ?0        #162                 ?0                  	;0
	254  387   INIT_STATIC_METHOD_CALL/113 ?0        170:'XUI'            172:'b0020C716fDF67bB'	;3
	255  387   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	256  387   SEND_VAL_EX/116           ?96       174:false            ?2                  	;0
	257  387   SEND_VAL_EX/116           ?112      175:false            ?3                  	;0
	258  387   DO_FCALL/60               ?125      ?0                   ?0                  	;0
	259  388   NOP/0                     ?0        ?0                   ?0                  	;1
	260  388   GOTO/253                  ?0        ?175                 ?176                	;0
	261  389   JMP/42                    ?0        ?172                 ?0                  	;0	>>172
	262  389   FE_FREE/127               ?0        $120                 ?0                  	;0	<<171
	263  392   FETCH_DIM_R/81            $164=     16?5                 177:'count'         	;0
	264  392   IS_SMALLER_OR_EQUAL/20    #165=     178:1000             $164                	;0
	265  392   BOOL_NOT/13               #166=     #165                 ?0                  	;0
	266  392   JMPZ/43                   ?0        #166                 ?268                	;0	>>268
	267  393   GOTO/253                  ?0        ?311                 ?179                	;0
	268  395   GOTO/253                  ?0        ?305                 ?180                	;0	<<266
	269  397   INIT_METHOD_CALL/112      ?0        16?2                 181:'get_rows'      	;0
	270  397   DO_FCALL/60               $167=     ?0                   ?0                  	;0
	271  397   FE_RESET_R/77             $168=     $167                 ?286                	;0
	272  397   FE_FETCH_R/78             ?0        $168                 16?13               	;286	>>286	<<285
	273  398   INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'intval'        	;1
	274  398   FETCH_DIM_FUNC_ARG/93     $169=     16?13                185:'stream_id'     	;1
	275  398   SEND_VAR_EX/66            ?80       $169                 ?1                  	;0
	276  398   DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
	277  398   INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'intval'        	;1
	278  398   FETCH_DIM_R/81            $172=     16?13                188:'bitrate'       	;0
	279  398   DIV/4                     #173=     $172                 189:8               	;0
	280  398   MUL/3                     #174=     #173                 190:0.92            	;0
	281  398   SEND_VAL_EX/116           ?80       #174                 ?1                  	;0
	282  398   DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
	283  398   ASSIGN_DIM/147            ?133      16?3                 $170                	;0
	284  398   OP_DATA/137               ?0        $175                 ?0                  	;0
	285  399   JMP/42                    ?0        ?272                 ?0                  	;0	>>272
	286  399   FE_FREE/127               ?0        $168                 ?0                  	;0	<<271
	287  402   ASSIGN/38                 ?138      16?21                191:array (
)       	;0
	288  403   FE_RESET_R/77             $177=     16?14                ?303                	;0
	289  403   FE_FETCH_R/78             ?0        $177                 16?22               	;303	>>303	<<302
	290  404   ISSET_ISEMPTY_CV/197      #178=     16?22                ?0                  	;16777216
	291  404   BOOL_NOT/13               #179=     #178                 ?0                  	;0
	292  404   JMPZ/43                   ?0        #179                 ?295                	;0	>>295
	293  405   NOP/0                     ?0        ?0                   ?0                  	;1
	294  405   GOTO/253                  ?0        ?297                 ?192                	;0
	295  407   NOP/0                     ?0        ?0                   ?0                  	;1	<<292
	296  407   GOTO/253                  ?0        ?302                 ?193                	;0
	297  409   INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'basename'      	;1
	298  409   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
	299  409   DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
	300  409   ASSIGN_DIM/147            ?142      16?21                ?4397406            	;0
	301  409   OP_DATA/137               ?0        $181                 ?0                  	;0
	302  410   JMP/42                    ?0        ?289                 ?0                  	;0	>>289
	303  410   FE_FREE/127               ?0        $177                 ?0                  	;0	<<288
	304  413   GOTO/253                  ?0        ?1182                ?196                	;0
	305  415   INIT_FCALL/61             ?0        ?1920                197:'processdeletions'	;2
	306  415   SEND_VAR/117              ?80       16?5                 ?1                  	;0
	307  415   FETCH_DIM_R/81            $182=     16?5                 198:'stream'        	;0
	308  415   SEND_VAR/117              ?96       $182                 ?2                  	;0
	309  415   DO_FCALL/60               $183=     ?0                   ?0                  	;0
	310  415   ASSIGN/38                 ?146      16?5                 $183                	;0
	311  418   FE_RESET_R/77             $185=     16?12                ?1022               	;0
	312  418   FE_FETCH_R/78             #186=     $185                 16?8                	;1022	>>1022	<<1021
	313  418   ASSIGN/38                 ?149      16?23                #186                	;0
	314  419   NOP/0                     ?0        ?0                   ?0                  	;1
	315  419   GOTO/253                  ?0        ?485                 ?199                	;0
	316  421   FETCH_CONSTANT/99         #189=     ?0                   203:'SERVER_ID'     	;16
	317  421   FETCH_STATIC_PROP_R/173   $188=     200:'rServers'       201:'XUI'           	;0
	318  421   FETCH_DIM_R/81            $190=     $188                 #189                	;0
	319  421   FETCH_DIM_R/81            $191=     $190                 206:'is_main'       	;0
	320  421   JMPZ_EX/46                #192=     $191                 ?323                	;0	>>323
	321  421   IS_SMALLER/19             #193=     207:0                16?24               	;0
	322  421   BOOL/52                   #192=     #193                 ?0                  	;0
	323  421   JMPZ_EX/46                #192=     #192                 ?326                	;0	>>326	<<320
	324  421   IS_SMALLER/19             #194=     16?24                16?25               	;0
	325  421   BOOL/52                   #192=     #194                 ?0                  	;0
	326  421   BOOL_NOT/13               #195=     #192                 ?0                  	;0	<<323
	327  421   JMPZ/43                   ?0        #195                 ?330                	;0	>>330
	328  422   NOP/0                     ?0        ?0                   ?0                  	;1
	329  422   GOTO/253                  ?0        ?444                 ?208                	;0
	330  424   FE_RESET_R/77             $196=     16?8                 ?443                	;0	<<327
	331  424   FE_FETCH_R/78             #197=     $196                 16?17               	;443	>>443	<<442
	332  424   ASSIGN/38                 ?160      16?26                #197                	;0
	333  425   NOP/0                     ?0        ?0                   ?0                  	;1
	334  425   NOP/0                     ?0        ?0                   ?0                  	;1
	335  425   GOTO/253                  ?0        ?378                 ?209                	;0
	336  427   FETCH_DIM_R/81            $199=     16?17                210:'proxy_id'      	;0
	337  427   BOOL_NOT/13               #200=     $199                 ?0                  	;0
	338  427   JMPZ/43                   ?0        #200                 ?342                	;0	>>342
	339  428   NOP/0                     ?0        ?0                   ?0                  	;1
	340  428   NOP/0                     ?0        ?0                   ?0                  	;1
	341  428   GOTO/253                  ?0        ?348                 ?211                	;0
	342  430   FETCH_DIM_R/81            $202=     16?17                213:'proxy_id'      	;0	<<338
	343  430   FETCH_DIM_R/81            $205=     16?17                214:'uuid'          	;0
	344  430   FETCH_DIM_W/84            $201=     16?5                 212:'proxy'         	;0
	345  430   FETCH_DIM_W/84            $203=     $201                 $202                	;0
	346  430   ASSIGN_DIM/147            ?166      $203                 ?4397406            	;0
	347  430   OP_DATA/137               ?0        $205                 ?0                  	;0
	348  433   POST_DEC/37               #206=     16?25                ?0                  	;0
	349  433   FREE/70                   ?0        #206                 ?0                  	;0
	350  434   NOP/0                     ?0        ?0                   ?0                  	;1
	351  434   NOP/0                     ?0        ?0                   ?0                  	;1
	352  434   GOTO/253                  ?0        ?430                 ?215                	;0
	353  436   FETCH_DIM_R/81            $208=     16?17                217:'server_id'     	;0
	354  436   FETCH_DIM_R/81            $211=     16?17                218:'uuid'          	;0
	355  436   FETCH_DIM_W/84            $207=     16?5                 216:'server'        	;0
	356  436   FETCH_DIM_W/84            $209=     $207                 $208                	;0
	357  436   ASSIGN_DIM/147            ?172      $209                 ?4583821            	;0
	358  436   OP_DATA/137               ?0        $211                 ?0                  	;0
	359  437   FETCH_DIM_R/81            $214=     16?17                220:'uuid'          	;0
	360  437   FETCH_DIM_W/84            $212=     16?5                 219:'uuid'          	;0
	361  437   ASSIGN_DIM/147            ?175      $212                 ?0                  	;0
	362  437   OP_DATA/137               ?0        $214                 ?0                  	;0
	363  438   FETCH_DIM_R/81            $215=     16?17                221:'user_id'       	;0
	364  438   BOOL_NOT/13               #216=     $215                 ?0                  	;0
	365  438   JMPZ/43                   ?0        #216                 ?369                	;0	>>369
	366  439   NOP/0                     ?0        ?0                   ?0                  	;1
	367  439   NOP/0                     ?0        ?0                   ?0                  	;1
	368  439   GOTO/253                  ?0        ?375                 ?222                	;0
	369  441   FETCH_DIM_R/81            $218=     16?17                224:'server_id'     	;0	<<365
	370  441   FETCH_DIM_R/81            $221=     16?17                225:'uuid'          	;0
	371  441   FETCH_DIM_W/84            $217=     16?5                 223:'server_lines'  	;0
	372  441   FETCH_DIM_W/84            $219=     $217                 $218                	;0
	373  441   ASSIGN_DIM/147            ?182      $219                 ?4397406            	;0
	374  441   OP_DATA/137               ?0        $221                 ?0                  	;0
	375  443   NOP/0                     ?0        ?0                   ?0                  	;1
	376  443   NOP/0                     ?0        ?0                   ?0                  	;1
	377  443   GOTO/253                  ?0        ?336                 ?226                	;0
	378  445   FETCH_DIM_R/81            $222=     16?17                227:'hls_end'       	;0
	379  445   JMPZ/43                   ?0        $222                 ?383                	;0	>>383
	380  446   NOP/0                     ?0        ?0                   ?0                  	;1
	381  446   NOP/0                     ?0        ?0                   ?0                  	;1
	382  446   GOTO/253                  ?0        ?430                 ?228                	;0
	383  448   FETCH_DIM_R/81            $223=     16?17                229:'uuid'          	;0	<<379
	384  448   CONCAT/8                  #224=     230:'Close connection: ' $223                	;0
	385  448   CONCAT/8                  #225=     #224                 231:'
'             	;0
	386  448   ECHO/40                   ?0        #225                 ?0                  	;0
	387  449   INIT_STATIC_METHOD_CALL/113 ?0        232:'XUI'            234:'b0020C716FDf67bB'	;3
	388  449   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	389  449   SEND_VAL_EX/116           ?96       236:false            ?2                  	;0
	390  449   SEND_VAL_EX/116           ?112      237:false            ?3                  	;0
	391  449   DO_FCALL/60               ?188      ?0                   ?0                  	;0
	392  450   FETCH_STATIC_PROP_R/173   $227=     238:'rSettings'      239:'XUI'           	;0
	393  450   FETCH_DIM_R/81            $228=     $227                 241:'redis_handler' 	;0
	394  450   JMPZ/43                   ?0        $228                 ?398                	;0	>>398
	395  451   NOP/0                     ?0        ?0                   ?0                  	;1
	396  451   NOP/0                     ?0        ?0                   ?0                  	;1
	397  451   GOTO/253                  ?0        ?412                 ?242                	;0
	398  453   FETCH_DIM_R/81            $229=     16?17                243:'stream_id'     	;0	<<394
	399  453   FETCH_DIM_R/81            $231=     16?17                244:'server_id'     	;0
	400  453   FETCH_DIM_R/81            $234=     16?17                245:'uuid'          	;0
	401  453   FETCH_DIM_W/84            $232=     16?6                 $231                	;0
	402  453   ASSIGN_DIM/147            $233=     $232                 ?0                  	;0
	403  453   OP_DATA/137               ?0        $234                 ?0                  	;0
	404  453   ASSIGN_DIM/147            ?192      16?7                 $229                	;0
	405  453   OP_DATA/137               ?0        $233                 ?0                  	;0
	406  454   NOP/0                     ?0        ?0                   ?0                  	;1
	407  454   NOP/0                     ?0        ?0                   ?0                  	;1
	408  454   GOTO/253                  ?0        ?409                 ?246                	;0
	409  456   NOP/0                     ?0        ?0                   ?0                  	;1
	410  456   NOP/0                     ?0        ?0                   ?0                  	;1
	411  456   GOTO/253                  ?0        ?348                 ?247                	;0
	412  458   FETCH_DIM_RW/87           $235=     16?5                 248:'count'         	;0
	413  458   POST_INC/36               #236=     $235                 ?0                  	;0
	414  458   FREE/70                   ?0        #236                 ?0                  	;0
	415  459   FETCH_DIM_R/81            $238=     16?17                250:'identity'      	;0
	416  459   FETCH_DIM_R/81            $241=     16?17                251:'uuid'          	;0
	417  459   FETCH_DIM_W/84            $237=     16?5                 249:'line'          	;0
	418  459   FETCH_DIM_W/84            $239=     $237                 $238                	;0
	419  459   ASSIGN_DIM/147            ?202      $239                 ?0                  	;0
	420  459   OP_DATA/137               ?0        $241                 ?0                  	;0
	421  460   FETCH_DIM_R/81            $243=     16?17                253:'stream_id'     	;0
	422  460   FETCH_DIM_R/81            $246=     16?17                254:'uuid'          	;0
	423  460   FETCH_DIM_W/84            $242=     16?5                 252:'stream'        	;0
	424  460   FETCH_DIM_W/84            $244=     $242                 $243                	;0
	425  460   ASSIGN_DIM/147            ?207      $244                 ?0                  	;0
	426  460   OP_DATA/137               ?0        $246                 ?0                  	;0
	427  461   NOP/0                     ?0        ?0                   ?0                  	;1
	428  461   NOP/0                     ?0        ?0                   ?0                  	;1
	429  461   GOTO/253                  ?0        ?353                 ?255                	;0
	430  464   IS_SMALLER_OR_EQUAL/20    #247=     16?25                16?24               	;0
	431  464   BOOL_NOT/13               #248=     #247                 ?0                  	;0
	432  464   JMPZ/43                   ?0        #248                 ?436                	;0	>>436
	433  465   NOP/0                     ?0        ?0                   ?0                  	;1
	434  465   NOP/0                     ?0        ?0                   ?0                  	;1
	435  465   GOTO/253                  ?0        ?439                 ?256                	;0
	436  467   FE_FREE/127               ?0        $196                 ?24                 	;1	<<432
	437  467   NOP/0                     ?0        ?0                   ?0                  	;1
	438  467   GOTO/253                  ?0        ?444                 ?257                	;0
	439  470   NOP/0                     ?0        ?0                   ?0                  	;1
	440  470   NOP/0                     ?0        ?0                   ?0                  	;1
	441  470   GOTO/253                  ?0        ?442                 ?258                	;0
	442  471   JMP/42                    ?0        ?331                 ?0                  	;0	>>331
	443  471   FE_FREE/127               ?0        $196                 ?0                  	;0	<<330
	444  475   FETCH_STATIC_PROP_R/173   $249=     259:'rSettings'      260:'XUI'           	;0
	445  475   FETCH_DIM_R/81            $250=     $249                 262:'redis_handler' 	;0
	446  475   JMPZ_EX/46                #251=     $250                 ?450                	;0	>>450
	447  475   FETCH_DIM_R/81            $252=     16?5                 263:'count'         	;0
	448  475   IS_SMALLER_OR_EQUAL/20    #253=     264:1000             $252                	;0
	449  475   BOOL/52                   #251=     #253                 ?0                  	;0
	450  475   JMPZ/43                   ?0        #251                 ?453                	;0	>>453	<<446
	451  476   NOP/0                     ?0        ?0                   ?0                  	;1
	452  476   GOTO/253                  ?0        ?475                 ?265                	;0
	453  478   NOP/0                     ?0        ?0                   ?0                  	;1	<<450
	454  478   GOTO/253                  ?0        ?455                 ?266                	;0
	455  480   FETCH_STATIC_PROP_R/173   $254=     267:'rSettings'      268:'XUI'           	;0
	456  480   FETCH_DIM_R/81            $255=     $254                 270:'redis_handler' 	;0
	457  480   BOOL_NOT/13               #256=     $255                 ?0                  	;0
	458  480   JMPZ_EX/46                #256=     #256                 ?464                	;0	>>464
	459  480   INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'count'         	;1
	460  480   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	461  480   DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
	462  480   IS_SMALLER_OR_EQUAL/20    #258=     273:1000             $257                	;0
	463  480   BOOL/52                   #256=     #258                 ?0                  	;0
	464  480   BOOL_NOT/13               #259=     #256                 ?0                  	;0	<<458
	465  480   JMPZ/43                   ?0        #259                 ?468                	;0	>>468
	466  481   NOP/0                     ?0        ?0                   ?0                  	;1
	467  481   GOTO/253                  ?0        ?473                 ?274                	;0
	468  483   INIT_FCALL/61             ?0        ?1920                275:'processdeletions'	;2	<<465
	469  483   SEND_VAR/117              ?80       16?6                 ?1                  	;0
	470  483   SEND_VAR/117              ?96       16?7                 ?2                  	;0
	471  483   DO_FCALL/60               $260=     ?0                   ?0                  	;0
	472  483   ASSIGN/38                 ?223      16?6                 $260                	;0
	473  485   NOP/0                     ?0        ?0                   ?0                  	;1
	474  485   GOTO/253                  ?0        ?483                 ?276                	;0
	475  487   NOP/0                     ?0        ?0                   ?0                  	;1
	476  487   GOTO/253                  ?0        ?477                 ?277                	;0
	477  489   INIT_FCALL/61             ?0        ?1920                278:'processdeletions'	;2
	478  489   SEND_VAR/117              ?80       16?5                 ?1                  	;0
	479  489   FETCH_DIM_R/81            $262=     16?5                 279:'stream'        	;0
	480  489   SEND_VAR/117              ?96       $262                 ?2                  	;0
	481  489   DO_FCALL/60               $263=     ?0                   ?0                  	;0
	482  489   ASSIGN/38                 ?226      16?5                 $263                	;0
	483  492   NOP/0                     ?0        ?0                   ?0                  	;1
	484  492   GOTO/253                  ?0        ?1021                ?280                	;0
	485  494   ASSIGN/38                 ?227      16?25                281:0               	;0
	486  495   FETCH_DIM_R/81            $266=     16?10                16?23               	;0
	487  495   ASSIGN/38                 ?229      16?24                $266                	;0
	488  496   FETCH_DIM_R/81            $268=     16?9                 16?23               	;0
	489  496   JMP_SET/152               #269=     $268                 ?491                	;0
	490  496   QM_ASSIGN/22              #269=     282:false            ?0                  	;0
	491  496   ASSIGN/38                 ?232      16?27                #269                	;0
	492  497   FE_RESET_R/77             $271=     16?8                 ?1018               	;0
	493  497   FE_FETCH_R/78             #272=     $271                 16?17               	;1018	>>1018	<<1017
	494  497   ASSIGN/38                 ?235      16?26                #272                	;0
	495  498   NOP/0                     ?0        ?0                   ?0                  	;1
	496  498   NOP/0                     ?0        ?0                   ?0                  	;1
	497  498   GOTO/253                  ?0        ?796                 ?283                	;0
	498  500   INIT_STATIC_METHOD_CALL/113 ?0        284:'XUI'            286:'E764F10e99C26365'	;2
	499  500   FETCH_DIM_FUNC_ARG/93     $274=     16?17                288:'pid'           	;1
	500  500   SEND_VAR_EX/66            ?80       $274                 ?1                  	;0
	501  500   SEND_VAL_EX/116           ?96       289:'php-fpm'        ?2                  	;0
	502  500   DO_FCALL/60               $275=     ?0                   ?0                  	;0
	503  500   ASSIGN/38                 ?238      16?28                $275                	;0
	504  502   FETCH_DIM_R/81            $277=     16?17                290:'hls_end'       	;0
	505  502   IS_EQUAL/17               #278=     $277                 291:1               	;0
	506  502   JMPZ_EX/46                #278=     #278                 ?511                	;0	>>511
	507  502   FETCH_DIM_R/81            $279=     16?17                292:'hls_last_read' 	;0
	508  502   SUB/2                     #280=     16?16                $279                	;0
	509  502   IS_SMALLER_OR_EQUAL/20    #281=     293:300              #280                	;0
	510  502   BOOL/52                   #278=     #281                 ?0                  	;0
	511  502   JMPNZ_EX/47               #278=     #278                 ?514                	;0	>>514	<<506
	512  502   BOOL_NOT/13               #282=     16?28                ?0                  	;0
	513  502   BOOL/52                   #278=     #282                 ?0                  	;0
	514  502   BOOL_NOT/13               #283=     #278                 ?0                  	;0	<<511
	515  502   JMPZ/43                   ?0        #283                 ?519                	;0	>>519
	516  503   NOP/0                     ?0        ?0                   ?0                  	;1
	517  503   NOP/0                     ?0        ?0                   ?0                  	;1
	518  503   GOTO/253                  ?0        ?555                 ?294                	;0
	519  505   FETCH_DIM_R/81            $284=     16?17                295:'uuid'          	;0	<<515
	520  505   CONCAT/8                  #285=     296:'Close connection: ' $284                	;0
	521  505   CONCAT/8                  #286=     #285                 297:'
'             	;0
	522  505   ECHO/40                   ?0        #286                 ?0                  	;0
	523  506   INIT_STATIC_METHOD_CALL/113 ?0        298:'XUI'            300:'b0020C716fDF67bb'	;3
	524  506   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	525  506   SEND_VAL_EX/116           ?96       302:false            ?2                  	;0
	526  506   SEND_VAL_EX/116           ?112      303:false            ?3                  	;0
	527  506   DO_FCALL/60               ?249      ?0                   ?0                  	;0
	528  507   NOP/0                     ?0        ?0                   ?0                  	;1
	529  507   NOP/0                     ?0        ?0                   ?0                  	;1
	530  507   GOTO/253                  ?0        ?994                 ?304                	;0
	531  509   FETCH_DIM_R/81            $289=     16?17                306:'server_id'     	;0
	532  509   FETCH_DIM_R/81            $292=     16?17                307:'uuid'          	;0
	533  509   FETCH_DIM_W/84            $288=     16?5                 305:'server_lines'  	;0
	534  509   FETCH_DIM_W/84            $290=     $288                 $289                	;0
	535  509   ASSIGN_DIM/147            ?253      $290                 ?5126               	;0
	536  509   OP_DATA/137               ?0        $292                 ?0                  	;0
	537  511   FETCH_DIM_R/81            $293=     16?17                308:'proxy_id'      	;0
	538  511   BOOL_NOT/13               #294=     $293                 ?0                  	;0
	539  511   JMPZ/43                   ?0        #294                 ?543                	;0	>>543
	540  512   NOP/0                     ?0        ?0                   ?0                  	;1
	541  512   NOP/0                     ?0        ?0                   ?0                  	;1
	542  512   GOTO/253                  ?0        ?549                 ?309                	;0
	543  514   FETCH_DIM_R/81            $296=     16?17                311:'proxy_id'      	;0	<<539
	544  514   FETCH_DIM_R/81            $299=     16?17                312:'uuid'          	;0
	545  514   FETCH_DIM_W/84            $295=     16?5                 310:'proxy'         	;0
	546  514   FETCH_DIM_W/84            $297=     $295                 $296                	;0
	547  514   ASSIGN_DIM/147            ?260      $297                 ?4397406            	;0
	548  514   OP_DATA/137               ?0        $299                 ?0                  	;0
	549  516   NOP/0                     ?0        ?0                   ?0                  	;1
	550  516   NOP/0                     ?0        ?0                   ?0                  	;1
	551  516   GOTO/253                  ?0        ?552                 ?313                	;0
	552  519   NOP/0                     ?0        ?0                   ?0                  	;1
	553  519   NOP/0                     ?0        ?0                   ?0                  	;1
	554  519   GOTO/253                  ?0        ?776                 ?314                	;0
	555  522   NOP/0                     ?0        ?0                   ?0                  	;1
	556  522   NOP/0                     ?0        ?0                   ?0                  	;1
	557  522   GOTO/253                  ?0        ?696                 ?315                	;0
	558  523   NOP/0                     ?0        ?0                   ?0                  	;1
	559  523   NOP/0                     ?0        ?0                   ?0                  	;1
	560  523   GOTO/253                  ?0        ?623                 ?316                	;0
	561  525   FETCH_DIM_R/81            $301=     16?17                318:'stream_id'     	;0
	562  525   FETCH_DIM_R/81            $304=     16?17                319:'uuid'          	;0
	563  525   FETCH_DIM_W/84            $300=     16?5                 317:'stream'        	;0
	564  525   FETCH_DIM_W/84            $302=     $300                 $301                	;0
	565  525   ASSIGN_DIM/147            ?265      $302                 ?0                  	;0
	566  525   OP_DATA/137               ?0        $304                 ?0                  	;0
	567  526   FETCH_DIM_R/81            $306=     16?17                321:'server_id'     	;0
	568  526   FETCH_DIM_R/81            $309=     16?17                322:'uuid'          	;0
	569  526   FETCH_DIM_W/84            $305=     16?5                 320:'server'        	;0
	570  526   FETCH_DIM_W/84            $307=     $305                 $306                	;0
	571  526   ASSIGN_DIM/147            ?270      $307                 ?0                  	;0
	572  526   OP_DATA/137               ?0        $309                 ?0                  	;0
	573  527   FETCH_DIM_R/81            $312=     16?17                324:'uuid'          	;0
	574  527   FETCH_DIM_W/84            $310=     16?5                 323:'uuid'          	;0
	575  527   ASSIGN_DIM/147            ?273      $310                 ?0                  	;0
	576  527   OP_DATA/137               ?0        $312                 ?0                  	;0
	577  528   FETCH_DIM_R/81            $313=     16?17                325:'user_id'       	;0
	578  528   BOOL_NOT/13               #314=     $313                 ?0                  	;0
	579  528   JMPZ/43                   ?0        #314                 ?583                	;0	>>583
	580  529   NOP/0                     ?0        ?0                   ?0                  	;1
	581  529   NOP/0                     ?0        ?0                   ?0                  	;1
	582  529   GOTO/253                  ?0        ?880                 ?326                	;0
	583  531   FETCH_DIM_R/81            $316=     16?17                328:'server_id'     	;0	<<579
	584  531   FETCH_DIM_R/81            $319=     16?17                329:'uuid'          	;0
	585  531   FETCH_DIM_W/84            $315=     16?5                 327:'server_lines'  	;0
	586  531   FETCH_DIM_W/84            $317=     $315                 $316                	;0
	587  531   ASSIGN_DIM/147            ?280      $317                 ?4397406            	;0
	588  531   OP_DATA/137               ?0        $319                 ?0                  	;0
	589  532   NOP/0                     ?0        ?0                   ?0                  	;1
	590  532   NOP/0                     ?0        ?0                   ?0                  	;1
	591  532   GOTO/253                  ?0        ?880                 ?330                	;0
	592  534   FETCH_DIM_R/81            $321=     16?17                332:'stream_id'     	;0
	593  534   FETCH_DIM_R/81            $324=     16?17                333:'uuid'          	;0
	594  534   FETCH_DIM_W/84            $320=     16?5                 331:'stream'        	;0
	595  534   FETCH_DIM_W/84            $322=     $320                 $321                	;0
	596  534   ASSIGN_DIM/147            ?285      $322                 ?0                  	;0
	597  534   OP_DATA/137               ?0        $324                 ?0                  	;0
	598  535   FETCH_DIM_R/81            $326=     16?17                335:'server_id'     	;0
	599  535   FETCH_DIM_R/81            $329=     16?17                336:'uuid'          	;0
	600  535   FETCH_DIM_W/84            $325=     16?5                 334:'server'        	;0
	601  535   FETCH_DIM_W/84            $327=     $325                 $326                	;0
	602  535   ASSIGN_DIM/147            ?290      $327                 ?0                  	;0
	603  535   OP_DATA/137               ?0        $329                 ?0                  	;0
	604  536   FETCH_DIM_R/81            $332=     16?17                338:'uuid'          	;0
	605  536   FETCH_DIM_W/84            $330=     16?5                 337:'uuid'          	;0
	606  536   ASSIGN_DIM/147            ?293      $330                 ?0                  	;0
	607  536   OP_DATA/137               ?0        $332                 ?0                  	;0
	608  537   FETCH_DIM_R/81            $333=     16?17                339:'user_id'       	;0
	609  537   BOOL_NOT/13               #334=     $333                 ?0                  	;0
	610  537   JMPZ/43                   ?0        #334                 ?614                	;0	>>614
	611  538   NOP/0                     ?0        ?0                   ?0                  	;1
	612  538   NOP/0                     ?0        ?0                   ?0                  	;1
	613  538   GOTO/253                  ?0        ?865                 ?340                	;0
	614  540   FETCH_DIM_R/81            $336=     16?17                342:'server_id'     	;0	<<610
	615  540   FETCH_DIM_R/81            $339=     16?17                343:'uuid'          	;0
	616  540   FETCH_DIM_W/84            $335=     16?5                 341:'server_lines'  	;0
	617  540   FETCH_DIM_W/84            $337=     $335                 $336                	;0
	618  540   ASSIGN_DIM/147            ?300      $337                 ?4397406            	;0
	619  540   OP_DATA/137               ?0        $339                 ?0                  	;0
	620  541   NOP/0                     ?0        ?0                   ?0                  	;1
	621  541   NOP/0                     ?0        ?0                   ?0                  	;1
	622  541   GOTO/253                  ?0        ?865                 ?344                	;0
	623  544   FETCH_DIM_R/81            $340=     16?17                345:'hls_last_read' 	;0
	624  544   SUB/2                     #341=     16?16                $340                	;0
	625  544   IS_SMALLER_OR_EQUAL/20    #342=     346:30               #341                	;0
	626  544   JMPNZ_EX/47               #342=     #342                 ?630                	;0	>>630
	627  544   FETCH_DIM_R/81            $343=     16?17                347:'hls_end'       	;0
	628  544   IS_EQUAL/17               #344=     $343                 348:1               	;0
	629  544   BOOL/52                   #342=     #344                 ?0                  	;0
	630  544   BOOL_NOT/13               #345=     #342                 ?0                  	;0	<<626
	631  544   JMPZ/43                   ?0        #345                 ?635                	;0	>>635
	632  545   NOP/0                     ?0        ?0                   ?0                  	;1
	633  545   NOP/0                     ?0        ?0                   ?0                  	;1
	634  545   GOTO/253                  ?0        ?696                 ?349                	;0
	635  547   FETCH_DIM_R/81            $346=     16?17                350:'uuid'          	;0	<<631
	636  547   CONCAT/8                  #347=     351:'Close connection: ' $346                	;0
	637  547   CONCAT/8                  #348=     #347                 352:'
'             	;0
	638  547   ECHO/40                   ?0        #348                 ?0                  	;0
	639  548   INIT_STATIC_METHOD_CALL/113 ?0        353:'XUI'            355:'b0020C716fdf67Bb'	;3
	640  548   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	641  548   SEND_VAL_EX/116           ?96       357:false            ?2                  	;0
	642  548   SEND_VAL_EX/116           ?112      358:false            ?3                  	;0
	643  548   DO_FCALL/60               ?311      ?0                   ?0                  	;0
	644  549   FETCH_STATIC_PROP_R/173   $350=     359:'rSettings'      360:'XUI'           	;0
	645  549   FETCH_DIM_R/81            $351=     $350                 362:'redis_handler' 	;0
	646  549   JMPZ/43                   ?0        $351                 ?650                	;0	>>650
	647  550   NOP/0                     ?0        ?0                   ?0                  	;1
	648  550   NOP/0                     ?0        ?0                   ?0                  	;1
	649  550   GOTO/253                  ?0        ?934                 ?363                	;0
	650  552   NOP/0                     ?0        ?0                   ?0                  	;1	<<646
	651  552   NOP/0                     ?0        ?0                   ?0                  	;1
	652  552   GOTO/253                  ?0        ?923                 ?364                	;0
	653  554   FETCH_DIM_R/81            $352=     16?17                365:'container'     	;0
	654  554   IS_NOT_EQUAL/18           #353=     $352                 366:'rtmp'          	;0
	655  554   BOOL_NOT/13               #354=     #353                 ?0                  	;0
	656  554   JMPZ/43                   ?0        #354                 ?660                	;0	>>660
	657  555   NOP/0                     ?0        ?0                   ?0                  	;1
	658  555   NOP/0                     ?0        ?0                   ?0                  	;1
	659  555   GOTO/253                  ?0        ?555                 ?367                	;0
	660  557   FETCH_DIM_R/81            $355=     16?17                368:'server_id'     	;0	<<656
	661  557   FETCH_CONSTANT/99         #356=     ?0                   369:'SERVER_ID'     	;16
	662  557   IS_EQUAL/17               #357=     $355                 #356                	;0
	663  557   JMPZ/43                   ?0        #357                 ?667                	;0	>>667
	664  558   NOP/0                     ?0        ?0                   ?0                  	;1
	665  558   NOP/0                     ?0        ?0                   ?0                  	;1
	666  558   GOTO/253                  ?0        ?793                 ?372                	;0
	667  560   FETCH_DIM_R/81            $358=     16?17                373:'date_start'    	;0	<<663
	668  560   FETCH_DIM_R/81            $360=     16?17                377:'server_id'     	;0
	669  560   FETCH_STATIC_PROP_R/173   $359=     374:'rServers'       375:'XUI'           	;0
	670  560   FETCH_DIM_R/81            $361=     $359                 $360                	;0
	671  560   FETCH_DIM_R/81            $362=     $361                 378:'last_check_ago'	;0
	672  560   SUB/2                     #363=     $362                 379:1               	;0
	673  560   IS_SMALLER_OR_EQUAL/20    #364=     $358                 #363                	;0
	674  560   JMPZ_EX/46                #364=     #364                 ?682                	;0	>>682
	675  560   INIT_FCALL_BY_NAME/59     ?0        ?0                   380:'count'         	;1
	676  560   FETCH_DIM_R/81            $365=     16?17                382:'server_id'     	;0
	677  560   FETCH_DIM_FUNC_ARG/93     $366=     16?15                $365                	;1
	678  560   SEND_VAR_EX/66            ?80       $366                 ?1                  	;0
	679  560   DO_FCALL_BY_NAME/131      $367=     ?0                   ?0                  	;0
	680  560   IS_SMALLER/19             #368=     383:0                $367                	;0
	681  560   BOOL/52                   #364=     #368                 ?0                  	;0
	682  560   JMPZ/43                   ?0        #364                 ?686                	;0	>>686	<<674
	683  561   NOP/0                     ?0        ?0                   ?0                  	;1
	684  561   NOP/0                     ?0        ?0                   ?0                  	;1
	685  561   GOTO/253                  ?0        ?779                 ?384                	;0
	686  563   ASSIGN/38                 ?331      16?28                385:true            	;0	<<682
	687  564   NOP/0                     ?0        ?0                   ?0                  	;1
	688  564   NOP/0                     ?0        ?0                   ?0                  	;1
	689  564   GOTO/253                  ?0        ?790                 ?386                	;0
	690  565   NOP/0                     ?0        ?0                   ?0                  	;1
	691  565   NOP/0                     ?0        ?0                   ?0                  	;1
	692  565   GOTO/253                  ?0        ?779                 ?387                	;0
	693  567   NOP/0                     ?0        ?0                   ?0                  	;1
	694  567   NOP/0                     ?0        ?0                   ?0                  	;1
	695  567   GOTO/253                  ?0        ?776                 ?388                	;0
	696  571   FETCH_DIM_R/81            $370=     16?17                389:'hls_end'       	;0
	697  571   JMPZ/43                   ?0        $370                 ?701                	;0	>>701
	698  572   NOP/0                     ?0        ?0                   ?0                  	;1
	699  572   NOP/0                     ?0        ?0                   ?0                  	;1
	700  572   GOTO/253                  ?0        ?776                 ?390                	;0
	701  574   NOP/0                     ?0        ?0                   ?0                  	;1	<<697
	702  574   NOP/0                     ?0        ?0                   ?0                  	;1
	703  574   GOTO/253                  ?0        ?774                 ?391                	;0
	704  578   NOP/0                     ?0        ?0                   ?0                  	;1
	705  578   NOP/0                     ?0        ?0                   ?0                  	;1
	706  578   GOTO/253                  ?0        ?776                 ?392                	;0
	707  580   FETCH_DIM_R/81            $371=     16?17                393:'container'     	;0
	708  580   IS_EQUAL/17               #372=     $371                 394:'hls'           	;0
	709  580   JMPZ/43                   ?0        #372                 ?713                	;0	>>713
	710  581   NOP/0                     ?0        ?0                   ?0                  	;1
	711  581   NOP/0                     ?0        ?0                   ?0                  	;1
	712  581   GOTO/253                  ?0        ?623                 ?395                	;0
	713  583   NOP/0                     ?0        ?0                   ?0                  	;1	<<709
	714  583   NOP/0                     ?0        ?0                   ?0                  	;1
	715  583   GOTO/253                  ?0        ?653                 ?396                	;0
	716  585   FETCH_DIM_R/81            $373=     16?17                397:'user_id'       	;0
	717  585   BOOL_NOT/13               #374=     $373                 ?0                  	;0
	718  585   JMPZ/43                   ?0        #374                 ?722                	;0	>>722
	719  586   NOP/0                     ?0        ?0                   ?0                  	;1
	720  586   NOP/0                     ?0        ?0                   ?0                  	;1
	721  586   GOTO/253                  ?0        ?728                 ?398                	;0
	722  588   FETCH_DIM_R/81            $376=     16?17                400:'server_id'     	;0	<<718
	723  588   FETCH_DIM_R/81            $379=     16?17                401:'uuid'          	;0
	724  588   FETCH_DIM_W/84            $375=     16?5                 399:'server_lines'  	;0
	725  588   FETCH_DIM_W/84            $377=     $375                 $376                	;0
	726  588   ASSIGN_DIM/147            ?340      $377                 ?4397406            	;0
	727  588   OP_DATA/137               ?0        $379                 ?0                  	;0
	728  590   FETCH_DIM_R/81            $380=     16?17                402:'proxy_id'      	;0
	729  590   BOOL_NOT/13               #381=     $380                 ?0                  	;0
	730  590   JMPZ/43                   ?0        #381                 ?734                	;0	>>734
	731  591   NOP/0                     ?0        ?0                   ?0                  	;1
	732  591   NOP/0                     ?0        ?0                   ?0                  	;1
	733  591   GOTO/253                  ?0        ?704                 ?403                	;0
	734  593   FETCH_DIM_R/81            $383=     16?17                405:'proxy_id'      	;0	<<730
	735  593   FETCH_DIM_R/81            $386=     16?17                406:'uuid'          	;0
	736  593   FETCH_DIM_W/84            $382=     16?5                 404:'proxy'         	;0
	737  593   FETCH_DIM_W/84            $384=     $382                 $383                	;0
	738  593   ASSIGN_DIM/147            ?347      $384                 ?4397406            	;0
	739  593   OP_DATA/137               ?0        $386                 ?0                  	;0
	740  594   NOP/0                     ?0        ?0                   ?0                  	;1
	741  594   NOP/0                     ?0        ?0                   ?0                  	;1
	742  594   GOTO/253                  ?0        ?704                 ?407                	;0
	743  596   FETCH_DIM_R/81            $388=     16?17                409:'identity'      	;0
	744  596   FETCH_DIM_R/81            $391=     16?17                410:'uuid'          	;0
	745  596   FETCH_DIM_W/84            $387=     16?5                 408:'line'          	;0
	746  596   FETCH_DIM_W/84            $389=     $387                 $388                	;0
	747  596   ASSIGN_DIM/147            ?352      $389                 ?0                  	;0
	748  596   OP_DATA/137               ?0        $391                 ?0                  	;0
	749  597   FETCH_DIM_R/81            $393=     16?17                412:'stream_id'     	;0
	750  597   FETCH_DIM_R/81            $396=     16?17                413:'uuid'          	;0
	751  597   FETCH_DIM_W/84            $392=     16?5                 411:'stream'        	;0
	752  597   FETCH_DIM_W/84            $394=     $392                 $393                	;0
	753  597   ASSIGN_DIM/147            ?357      $394                 ?0                  	;0
	754  597   OP_DATA/137               ?0        $396                 ?0                  	;0
	755  598   FETCH_DIM_R/81            $398=     16?17                415:'server_id'     	;0
	756  598   FETCH_DIM_R/81            $401=     16?17                416:'uuid'          	;0
	757  598   FETCH_DIM_W/84            $397=     16?5                 414:'server'        	;0
	758  598   FETCH_DIM_W/84            $399=     $397                 $398                	;0
	759  598   ASSIGN_DIM/147            ?362      $399                 ?0                  	;0
	760  598   OP_DATA/137               ?0        $401                 ?0                  	;0
	761  599   FETCH_DIM_R/81            $404=     16?17                418:'uuid'          	;0
	762  599   FETCH_DIM_W/84            $402=     16?5                 417:'uuid'          	;0
	763  599   ASSIGN_DIM/147            ?365      $402                 ?0                  	;0
	764  599   OP_DATA/137               ?0        $404                 ?0                  	;0
	765  600   FETCH_DIM_R/81            $405=     16?17                419:'user_id'       	;0
	766  600   BOOL_NOT/13               #406=     $405                 ?0                  	;0
	767  600   JMPZ/43                   ?0        #406                 ?771                	;0	>>771
	768  601   NOP/0                     ?0        ?0                   ?0                  	;1
	769  601   NOP/0                     ?0        ?0                   ?0                  	;1
	770  601   GOTO/253                  ?0        ?537                 ?420                	;0
	771  603   NOP/0                     ?0        ?0                   ?0                  	;1	<<767
	772  603   NOP/0                     ?0        ?0                   ?0                  	;1
	773  603   GOTO/253                  ?0        ?531                 ?421                	;0
	774  605   POST_INC/36               #407=     16?25                ?0                  	;0
	775  605   FREE/70                   ?0        #407                 ?0                  	;0
	776  608   NOP/0                     ?0        ?0                   ?0                  	;1
	777  608   NOP/0                     ?0        ?0                   ?0                  	;1
	778  608   GOTO/253                  ?0        ?1017                ?422                	;0
	779  611   INIT_FCALL_BY_NAME/59     ?0        ?0                   423:'in_array'      	;2
	780  611   INIT_FCALL_BY_NAME/59     ?0        ?0                   425:'intval'        	;1
	781  611   FETCH_DIM_FUNC_ARG/93     $408=     16?17                427:'pid'           	;1
	782  611   SEND_VAR_EX/66            ?80       $408                 ?1                  	;0
	783  611   DO_FCALL_BY_NAME/131      $409=     ?0                   ?0                  	;0
	784  611   SEND_VAR_NO_REF_EX/50     ?80       $409                 ?1                  	;0
	785  611   FETCH_DIM_R/81            $410=     16?17                428:'server_id'     	;0
	786  611   FETCH_DIM_FUNC_ARG/93     $411=     16?15                $410                	;2
	787  611   SEND_VAR_EX/66            ?96       $411                 ?2                  	;0
	788  611   DO_FCALL_BY_NAME/131      $412=     ?0                   ?0                  	;0
	789  611   ASSIGN/38                 ?375      16?28                $412                	;0
	790  613   NOP/0                     ?0        ?0                   ?0                  	;1
	791  613   NOP/0                     ?0        ?0                   ?0                  	;1
	792  613   GOTO/253                  ?0        ?504                 ?429                	;0
	793  615   NOP/0                     ?0        ?0                   ?0                  	;1
	794  615   NOP/0                     ?0        ?0                   ?0                  	;1
	795  615   GOTO/253                  ?0        ?498                 ?430                	;0
	796  617   FETCH_DIM_R/81            $414=     16?17                431:'server_id'     	;0
	797  617   FETCH_CONSTANT/99         #415=     ?0                   432:'SERVER_ID'     	;16
	798  617   IS_EQUAL/17               #416=     $414                 #415                	;0
	799  617   JMPNZ_EX/47               #416=     #416                 ?803                	;0	>>803
	800  617   FETCH_STATIC_PROP_R/173   $417=     435:'rSettings'      436:'XUI'           	;0
	801  617   FETCH_DIM_R/81            $418=     $417                 438:'redis_handler' 	;0
	802  617   BOOL/52                   #416=     $418                 ?0                  	;0
	803  617   BOOL_NOT/13               #419=     #416                 ?0                  	;0	<<799
	804  617   JMPZ/43                   ?0        #419                 ?808                	;0	>>808
	805  618   NOP/0                     ?0        ?0                   ?0                  	;1
	806  618   NOP/0                     ?0        ?0                   ?0                  	;1
	807  618   GOTO/253                  ?0        ?696                 ?439                	;0
	808  620   INIT_FCALL_BY_NAME/59     ?0        ?0                   440:'is_null'       	;1	<<804
	809  620   FETCH_DIM_FUNC_ARG/93     $420=     16?17                442:'exp_date'      	;1
	810  620   SEND_VAR_EX/66            ?80       $420                 ?1                  	;0
	811  620   DO_FCALL_BY_NAME/131      $421=     ?0                   ?0                  	;0
	812  620   BOOL_NOT/13               #422=     $421                 ?0                  	;0
	813  620   JMPZ_EX/46                #422=     #422                 ?817                	;0	>>817
	814  620   FETCH_DIM_R/81            $423=     16?17                443:'exp_date'      	;0
	815  620   IS_SMALLER/19             #424=     $423                 16?16               	;0
	816  620   BOOL/52                   #422=     #424                 ?0                  	;0
	817  620   BOOL_NOT/13               #425=     #422                 ?0                  	;0	<<813
	818  620   JMPZ/43                   ?0        #425                 ?822                	;0	>>822
	819  621   NOP/0                     ?0        ?0                   ?0                  	;1
	820  621   NOP/0                     ?0        ?0                   ?0                  	;1
	821  621   GOTO/253                  ?0        ?843                 ?444                	;0
	822  623   FETCH_DIM_R/81            $426=     16?17                445:'uuid'          	;0	<<818
	823  623   CONCAT/8                  #427=     446:'Close connection: ' $426                	;0
	824  623   CONCAT/8                  #428=     #427                 447:'
'             	;0
	825  623   ECHO/40                   ?0        #428                 ?0                  	;0
	826  624   INIT_STATIC_METHOD_CALL/113 ?0        448:'XUI'            450:'B0020C716FDF67bB'	;3
	827  624   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	828  624   SEND_VAL_EX/116           ?96       452:false            ?2                  	;0
	829  624   SEND_VAL_EX/116           ?112      453:false            ?3                  	;0
	830  624   DO_FCALL/60               ?391      ?0                   ?0                  	;0
	831  625   FETCH_STATIC_PROP_R/173   $430=     454:'rSettings'      455:'XUI'           	;0
	832  625   FETCH_DIM_R/81            $431=     $430                 457:'redis_handler' 	;0
	833  625   JMPZ/43                   ?0        $431                 ?837                	;0	>>837
	834  626   NOP/0                     ?0        ?0                   ?0                  	;1
	835  626   NOP/0                     ?0        ?0                   ?0                  	;1
	836  626   GOTO/253                  ?0        ?957                 ?458                	;0
	837  628   NOP/0                     ?0        ?0                   ?0                  	;1	<<833
	838  628   NOP/0                     ?0        ?0                   ?0                  	;1
	839  628   GOTO/253                  ?0        ?946                 ?459                	;0
	840  630   NOP/0                     ?0        ?0                   ?0                  	;1
	841  630   NOP/0                     ?0        ?0                   ?0                  	;1
	842  630   GOTO/253                  ?0        ?776                 ?460                	;0
	843  632   FETCH_DIM_R/81            $432=     16?17                461:'date_start'    	;0
	844  632   SUB/2                     #433=     16?16                $432                	;0
	845  632   ASSIGN/38                 ?396      16?29                #433                	;0
	846  633   IS_NOT_EQUAL/18           #435=     16?30                462:0               	;0
	847  633   JMPZ_EX/46                #435=     #435                 ?850                	;0	>>850
	848  633   IS_SMALLER_OR_EQUAL/20    #436=     16?30                16?29               	;0
	849  633   BOOL/52                   #435=     #436                 ?0                  	;0
	850  633   JMPZ_EX/46                #435=     #435                 ?853                	;0	>>853	<<847
	851  633   BOOL_NOT/13               #437=     16?27                ?0                  	;0
	852  633   BOOL/52                   #435=     #437                 ?0                  	;0
	853  633   BOOL_NOT/13               #438=     #435                 ?0                  	;0	<<850
	854  633   JMPZ/43                   ?0        #438                 ?858                	;0	>>858
	855  634   NOP/0                     ?0        ?0                   ?0                  	;1
	856  634   NOP/0                     ?0        ?0                   ?0                  	;1
	857  634   GOTO/253                  ?0        ?707                 ?463                	;0
	858  636   FETCH_DIM_R/81            $439=     16?17                464:'uuid'          	;0	<<854
	859  636   CONCAT/8                  #440=     465:'Close connection: ' $439                	;0
	860  636   CONCAT/8                  #441=     #440                 466:'
'             	;0
	861  636   ECHO/40                   ?0        #441                 ?0                  	;0
	862  637   NOP/0                     ?0        ?0                   ?0                  	;1
	863  637   NOP/0                     ?0        ?0                   ?0                  	;1
	864  637   GOTO/253                  ?0        ?969                 ?467                	;0
	865  640   FETCH_DIM_R/81            $442=     16?17                468:'proxy_id'      	;0
	866  640   BOOL_NOT/13               #443=     $442                 ?0                  	;0
	867  640   JMPZ/43                   ?0        #443                 ?871                	;0	>>871
	868  641   NOP/0                     ?0        ?0                   ?0                  	;1
	869  641   NOP/0                     ?0        ?0                   ?0                  	;1
	870  641   GOTO/253                  ?0        ?877                 ?469                	;0
	871  643   FETCH_DIM_R/81            $445=     16?17                471:'proxy_id'      	;0	<<867
	872  643   FETCH_DIM_R/81            $448=     16?17                472:'uuid'          	;0
	873  643   FETCH_DIM_W/84            $444=     16?5                 470:'proxy'         	;0
	874  643   FETCH_DIM_W/84            $446=     $444                 $445                	;0
	875  643   ASSIGN_DIM/147            ?409      $446                 ?4397406            	;0
	876  643   OP_DATA/137               ?0        $448                 ?0                  	;0
	877  646   NOP/0                     ?0        ?0                   ?0                  	;1
	878  646   NOP/0                     ?0        ?0                   ?0                  	;1
	879  646   GOTO/253                  ?0        ?693                 ?473                	;0
	880  649   FETCH_DIM_R/81            $449=     16?17                474:'proxy_id'      	;0
	881  649   BOOL_NOT/13               #450=     $449                 ?0                  	;0
	882  649   JMPZ/43                   ?0        #450                 ?886                	;0	>>886
	883  650   NOP/0                     ?0        ?0                   ?0                  	;1
	884  650   NOP/0                     ?0        ?0                   ?0                  	;1
	885  650   GOTO/253                  ?0        ?892                 ?475                	;0
	886  652   FETCH_DIM_R/81            $452=     16?17                477:'proxy_id'      	;0	<<882
	887  652   FETCH_DIM_R/81            $455=     16?17                478:'uuid'          	;0
	888  652   FETCH_DIM_W/84            $451=     16?5                 476:'proxy'         	;0
	889  652   FETCH_DIM_W/84            $453=     $451                 $452                	;0
	890  652   ASSIGN_DIM/147            ?416      $453                 ?4397406            	;0
	891  652   OP_DATA/137               ?0        $455                 ?0                  	;0
	892  655   NOP/0                     ?0        ?0                   ?0                  	;1
	893  655   NOP/0                     ?0        ?0                   ?0                  	;1
	894  655   GOTO/253                  ?0        ?840                 ?479                	;0
	895  657   FETCH_DIM_RW/87           $456=     16?5                 480:'count'         	;0
	896  657   POST_INC/36               #457=     $456                 ?0                  	;0
	897  657   FREE/70                   ?0        #457                 ?0                  	;0
	898  658   FETCH_DIM_R/81            $459=     16?17                482:'identity'      	;0
	899  658   FETCH_DIM_R/81            $462=     16?17                483:'uuid'          	;0
	900  658   FETCH_DIM_W/84            $458=     16?5                 481:'line'          	;0
	901  658   FETCH_DIM_W/84            $460=     $458                 $459                	;0
	902  658   ASSIGN_DIM/147            ?423      $460                 ?0                  	;0
	903  658   OP_DATA/137               ?0        $462                 ?0                  	;0
	904  659   FETCH_DIM_R/81            $464=     16?17                485:'stream_id'     	;0
	905  659   FETCH_DIM_R/81            $467=     16?17                486:'uuid'          	;0
	906  659   FETCH_DIM_W/84            $463=     16?5                 484:'stream'        	;0
	907  659   FETCH_DIM_W/84            $465=     $463                 $464                	;0
	908  659   ASSIGN_DIM/147            ?428      $465                 ?0                  	;0
	909  659   OP_DATA/137               ?0        $467                 ?0                  	;0
	910  660   FETCH_DIM_R/81            $469=     16?17                488:'server_id'     	;0
	911  660   FETCH_DIM_R/81            $472=     16?17                489:'uuid'          	;0
	912  660   FETCH_DIM_W/84            $468=     16?5                 487:'server'        	;0
	913  660   FETCH_DIM_W/84            $470=     $468                 $469                	;0
	914  660   ASSIGN_DIM/147            ?433      $470                 ?0                  	;0
	915  660   OP_DATA/137               ?0        $472                 ?0                  	;0
	916  661   FETCH_DIM_R/81            $475=     16?17                491:'uuid'          	;0
	917  661   FETCH_DIM_W/84            $473=     16?5                 490:'uuid'          	;0
	918  661   ASSIGN_DIM/147            ?436      $473                 ?0                  	;0
	919  661   OP_DATA/137               ?0        $475                 ?0                  	;0
	920  662   NOP/0                     ?0        ?0                   ?0                  	;1
	921  662   NOP/0                     ?0        ?0                   ?0                  	;1
	922  662   GOTO/253                  ?0        ?716                 ?492                	;0
	923  664   FETCH_DIM_R/81            $476=     16?17                493:'stream_id'     	;0
	924  664   FETCH_DIM_R/81            $478=     16?17                494:'server_id'     	;0
	925  664   FETCH_DIM_R/81            $481=     16?17                495:'uuid'          	;0
	926  664   FETCH_DIM_W/84            $479=     16?6                 $478                	;0
	927  664   ASSIGN_DIM/147            $480=     $479                 ?0                  	;0
	928  664   OP_DATA/137               ?0        $481                 ?0                  	;0
	929  664   ASSIGN_DIM/147            ?439      16?7                 $476                	;0
	930  664   OP_DATA/137               ?0        $480                 ?0                  	;0
	931  665   NOP/0                     ?0        ?0                   ?0                  	;1
	932  665   NOP/0                     ?0        ?0                   ?0                  	;1
	933  665   GOTO/253                  ?0        ?877                 ?496                	;0
	934  667   FETCH_DIM_RW/87           $482=     16?5                 497:'count'         	;0
	935  667   POST_INC/36               #483=     $482                 ?0                  	;0
	936  667   FREE/70                   ?0        #483                 ?0                  	;0
	937  668   FETCH_DIM_R/81            $485=     16?17                499:'identity'      	;0
	938  668   FETCH_DIM_R/81            $488=     16?17                500:'uuid'          	;0
	939  668   FETCH_DIM_W/84            $484=     16?5                 498:'line'          	;0
	940  668   FETCH_DIM_W/84            $486=     $484                 $485                	;0
	941  668   ASSIGN_DIM/147            ?449      $486                 ?0                  	;0
	942  668   OP_DATA/137               ?0        $488                 ?0                  	;0
	943  669   NOP/0                     ?0        ?0                   ?0                  	;1
	944  669   NOP/0                     ?0        ?0                   ?0                  	;1
	945  669   GOTO/253                  ?0        ?592                 ?501                	;0
	946  671   FETCH_DIM_R/81            $489=     16?17                502:'stream_id'     	;0
	947  671   FETCH_DIM_R/81            $491=     16?17                503:'server_id'     	;0
	948  671   FETCH_DIM_R/81            $494=     16?17                504:'uuid'          	;0
	949  671   FETCH_DIM_W/84            $492=     16?6                 $491                	;0
	950  671   ASSIGN_DIM/147            $493=     $492                 ?0                  	;0
	951  671   OP_DATA/137               ?0        $494                 ?0                  	;0
	952  671   ASSIGN_DIM/147            ?452      16?7                 $489                	;0
	953  671   OP_DATA/137               ?0        $493                 ?0                  	;0
	954  672   NOP/0                     ?0        ?0                   ?0                  	;1
	955  672   NOP/0                     ?0        ?0                   ?0                  	;1
	956  672   GOTO/253                  ?0        ?892                 ?505                	;0
	957  674   FETCH_DIM_RW/87           $495=     16?5                 506:'count'         	;0
	958  674   POST_INC/36               #496=     $495                 ?0                  	;0
	959  674   FREE/70                   ?0        #496                 ?0                  	;0
	960  675   FETCH_DIM_R/81            $498=     16?17                508:'identity'      	;0
	961  675   FETCH_DIM_R/81            $501=     16?17                509:'uuid'          	;0
	962  675   FETCH_DIM_W/84            $497=     16?5                 507:'line'          	;0
	963  675   FETCH_DIM_W/84            $499=     $497                 $498                	;0
	964  675   ASSIGN_DIM/147            ?462      $499                 ?0                  	;0
	965  675   OP_DATA/137               ?0        $501                 ?0                  	;0
	966  676   NOP/0                     ?0        ?0                   ?0                  	;1
	967  676   NOP/0                     ?0        ?0                   ?0                  	;1
	968  676   GOTO/253                  ?0        ?561                 ?510                	;0
	969  678   INIT_STATIC_METHOD_CALL/113 ?0        511:'XUI'            513:'B0020c716FdF67bB'	;3
	970  678   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	971  678   SEND_VAL_EX/116           ?96       515:false            ?2                  	;0
	972  678   SEND_VAL_EX/116           ?112      516:false            ?3                  	;0
	973  678   DO_FCALL/60               ?464      ?0                   ?0                  	;0
	974  679   FETCH_STATIC_PROP_R/173   $503=     517:'rSettings'      518:'XUI'           	;0
	975  679   FETCH_DIM_R/81            $504=     $503                 520:'redis_handler' 	;0
	976  679   JMPZ/43                   ?0        $504                 ?980                	;0	>>980
	977  680   NOP/0                     ?0        ?0                   ?0                  	;1
	978  680   NOP/0                     ?0        ?0                   ?0                  	;1
	979  680   GOTO/253                  ?0        ?991                 ?521                	;0
	980  682   FETCH_DIM_R/81            $505=     16?17                522:'stream_id'     	;0	<<976
	981  682   FETCH_DIM_R/81            $507=     16?17                523:'server_id'     	;0
	982  682   FETCH_DIM_R/81            $510=     16?17                524:'uuid'          	;0
	983  682   FETCH_DIM_W/84            $508=     16?6                 $507                	;0
	984  682   ASSIGN_DIM/147            $509=     $508                 ?0                  	;0
	985  682   OP_DATA/137               ?0        $510                 ?0                  	;0
	986  682   ASSIGN_DIM/147            ?468      16?7                 $505                	;0
	987  682   OP_DATA/137               ?0        $509                 ?0                  	;0
	988  683   NOP/0                     ?0        ?0                   ?0                  	;1
	989  683   NOP/0                     ?0        ?0                   ?0                  	;1
	990  683   GOTO/253                  ?0        ?704                 ?525                	;0
	991  685   NOP/0                     ?0        ?0                   ?0                  	;1
	992  685   NOP/0                     ?0        ?0                   ?0                  	;1
	993  685   GOTO/253                  ?0        ?895                 ?526                	;0
	994  687   FETCH_STATIC_PROP_R/173   $511=     527:'rSettings'      528:'XUI'           	;0
	995  687   FETCH_DIM_R/81            $512=     $511                 530:'redis_handler' 	;0
	996  687   JMPZ/43                   ?0        $512                 ?1000               	;0	>>1000
	997  688   NOP/0                     ?0        ?0                   ?0                  	;1
	998  688   NOP/0                     ?0        ?0                   ?0                  	;1
	999  688   GOTO/253                  ?0        ?1011                ?531                	;0
	1000 690   FETCH_DIM_R/81            $513=     16?17                532:'stream_id'     	;0	<<996
	1001 690   FETCH_DIM_R/81            $515=     16?17                533:'server_id'     	;0
	1002 690   FETCH_DIM_R/81            $518=     16?17                534:'uuid'          	;0
	1003 690   FETCH_DIM_W/84            $516=     16?6                 $515                	;0
	1004 690   ASSIGN_DIM/147            $517=     $516                 ?0                  	;0
	1005 690   OP_DATA/137               ?0        $518                 ?0                  	;0
	1006 690   ASSIGN_DIM/147            ?476      16?7                 $513                	;0
	1007 690   OP_DATA/137               ?0        $517                 ?0                  	;0
	1008 691   NOP/0                     ?0        ?0                   ?0                  	;1
	1009 691   NOP/0                     ?0        ?0                   ?0                  	;1
	1010 691   GOTO/253                  ?0        ?552                 ?535                	;0
	1011 693   FETCH_DIM_RW/87           $519=     16?5                 536:'count'         	;0
	1012 693   POST_INC/36               #520=     $519                 ?0                  	;0
	1013 693   FREE/70                   ?0        #520                 ?0                  	;0
	1014 694   NOP/0                     ?0        ?0                   ?0                  	;1
	1015 694   NOP/0                     ?0        ?0                   ?0                  	;1
	1016 694   GOTO/253                  ?0        ?743                 ?537                	;0
	1017 695   JMP/42                    ?0        ?493                 ?0                  	;0	>>493
	1018 695   FE_FREE/127               ?0        $271                 ?0                  	;0	<<492
	1019 698   NOP/0                     ?0        ?0                   ?0                  	;1
	1020 698   GOTO/253                  ?0        ?316                 ?538                	;0
	1021 699   JMP/42                    ?0        ?312                 ?0                  	;0	>>312
	1022 699   FE_FREE/127               ?0        $185                 ?0                  	;0	<<311
	1023 702   GOTO/253                  ?0        ?29                  ?539                	;0
	1024 705   FETCH_CONSTANT/99         #522=     ?0                   543:'SERVER_ID'     	;16
	1025 705   FETCH_STATIC_PROP_R/173   $521=     540:'rServers'       541:'XUI'           	;0
	1026 705   FETCH_DIM_R/81            $523=     $521                 #522                	;0
	1027 705   FETCH_DIM_R/81            $524=     $523                 546:'is_main'       	;0
	1028 705   BOOL_NOT/13               #525=     $524                 ?0                  	;0
	1029 705   JMPZ/43                   ?0        #525                 ?1031               	;0	>>1031
	1030 706   GOTO/253                  ?0        ?1049                ?547                	;0
	1031 708   FETCH_STATIC_PROP_R/173   $526=     548:'rSettings'      549:'XUI'           	;0	<<1029
	1032 708   FETCH_DIM_R/81            $527=     $526                 551:'redis_handler' 	;0
	1033 708   JMPZ/43                   ?0        $527                 ?1035               	;0	>>1035
	1034 709   GOTO/253                  ?0        ?1040                ?552                	;0
	1035 711   INIT_METHOD_CALL/112      ?0        16?2                 553:'query'         	;1	<<1033
	1036 711   SEND_VAL_EX/116           ?80       555:'DELETE FROM `lines_divergence` WHERE `uuid` NOT IN (SELECT `uuid` FROM `lines_live`);' ?1                  	;0
	1037 711   DO_FCALL/60               ?490      ?0                   ?0                  	;0
	1038 712   GOTO/253                  ?0        ?1049                ?556                	;0
	1039 713   GOTO/253                  ?0        ?1040                ?557                	;0
	1040 716   INIT_METHOD_CALL/112      ?0        16?2                 558:'query'         	;1
	1041 716   INIT_FCALL_BY_NAME/59     ?0        ?0                   560:'implode'       	;2
	1042 716   SEND_VAL_EX/116           ?80       562:'\',\''          ?1                  	;0
	1043 716   SEND_VAR_EX/66            ?96       16?31                ?2                  	;0
	1044 716   DO_FCALL_BY_NAME/131      $529=     ?0                   ?0                  	;0
	1045 716   CONCAT/8                  #530=     563:'DELETE FROM `lines_divergence` WHERE `uuid` NOT IN (\'' $529                	;0
	1046 716   CONCAT/8                  #531=     #530                 564:'\');'          	;0
	1047 716   SEND_VAL_EX/116           ?80       #531                 ?1                  	;0
	1048 716   DO_FCALL/60               ?494      ?0                   ?0                  	;0
	1049 719   FETCH_CONSTANT/99         #534=     ?0                   568:'SERVER_ID'     	;16
	1050 719   FETCH_STATIC_PROP_R/173   $533=     565:'rServers'       566:'XUI'           	;0
	1051 719   FETCH_DIM_R/81            $535=     $533                 #534                	;0
	1052 719   FETCH_DIM_R/81            $536=     $535                 571:'is_main'       	;0
	1053 719   BOOL_NOT/13               #537=     $536                 ?0                  	;0
	1054 719   JMPZ/43                   ?0        #537                 ?1056               	;0	>>1056
	1055 720   GOTO/253                  ?0        ?1079                ?572                	;0
	1056 722   GOTO/253                  ?0        ?1076                ?573                	;0	<<1054
	1057 724   FETCH_DIM_R/81            $538=     16?17                574:'identity'      	;0
	1058 724   FETCH_DIM_W/84            $539=     16?12                $538                	;0
	1059 724   ASSIGN_DIM/147            ?502      $539                 ?4397406            	;0
	1060 724   OP_DATA/137               ?0        16?17                ?0                  	;0
	1061 725   FETCH_DIM_R/81            $542=     16?17                575:'uuid'          	;0
	1062 725   ASSIGN_DIM/147            ?503      16?31                ?0                  	;0
	1063 725   OP_DATA/137               ?0        $542                 ?0                  	;0
	1064 728   PRE_INC/34                ?505      16?19                ?0                  	;0
	1065 729   GOTO/253                  ?0        ?55                  ?576                	;0
	1066 731   UNSET_CV/196              ?0        16?3                 ?0                  	;0
	1067 733   FETCH_STATIC_PROP_R/173   $544=     577:'rSettings'      578:'XUI'           	;0
	1068 733   FETCH_DIM_R/81            $545=     $544                 580:'redis_handler' 	;0
	1069 733   JMPZ/43                   ?0        $545                 ?1071               	;0	>>1071
	1070 734   GOTO/253                  ?0        ?1228                ?581                	;0
	1071 736   ASSIGN/38                 ?508      16?32                582:array (
)       	;0	<<1069
	1072 737   INIT_METHOD_CALL/112      ?0        16?2                 583:'query'         	;1
	1073 737   SEND_VAL_EX/116           ?80       585:'SELECT `uuid`, `activity_id` FROM `lines_live`;' ?1                  	;0
	1074 737   DO_FCALL/60               ?509      ?0                   ?0                  	;0
	1075 738   GOTO/253                  ?0        ?1218                ?586                	;0
	1076 740   INIT_METHOD_CALL/112      ?0        16?2                 587:'query'         	;1
	1077 740   SEND_VAL_EX/116           ?80       589:'DELETE FROM `lines_live` WHERE `uuid` IS NULL;' ?1                  	;0
	1078 740   DO_FCALL/60               ?510      ?0                   ?0                  	;0
	1079 742   GOTO/253                  ?0        ?1305                ?590                	;0
	1080 745   INIT_FCALL/61             ?0        ?1920                591:'processdeletions'	;2
	1081 745   SEND_VAR/117              ?80       16?5                 ?1                  	;0
	1082 745   FETCH_DIM_R/81            $549=     16?5                 592:'stream'        	;0
	1083 745   SEND_VAR/117              ?96       $549                 ?2                  	;0
	1084 745   DO_FCALL/60               ?512      ?0                   ?0                  	;0
	1085 748   INIT_FCALL_BY_NAME/59     ?0        ?0                   593:'glob'          	;1
	1086 748   FETCH_CONSTANT/99         #551=     ?0                   595:'DIVERGENCE_TMP_PATH'	;16
	1087 748   CONCAT/8                  #552=     #551                 598:'*'             	;0
	1088 748   SEND_VAL_EX/116           ?80       #552                 ?1                  	;0
	1089 748   DO_FCALL_BY_NAME/131      $553=     ?0                   ?0                  	;0
	1090 748   ASSIGN/38                 ?516      16?14                $553                	;0
	1091 749   GOTO/253                  ?0        ?98                  ?599                	;0
	1092 751   ASSIGN/38                 ?517      16?19                600:0               	;0
	1093 752   INIT_FCALL_BY_NAME/59     ?0        ?0                   601:'count'         	;1
	1094 752   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	1095 752   DO_FCALL_BY_NAME/131      $556=     ?0                   ?0                  	;0
	1096 752   ASSIGN/38                 ?519      16?33                $556                	;0
	1097 754   IS_SMALLER/19             #558=     16?19                16?33               	;0
	1098 754   BOOL_NOT/13               #559=     #558                 ?0                  	;0
	1099 754   JMPZ/43                   ?0        #559                 ?1101               	;0	>>1101
	1100 755   GOTO/253                  ?0        ?56                  ?603                	;0
	1101 757   FETCH_DIM_R/81            $560=     16?8                 16?19               	;0	<<1099
	1102 757   ASSIGN/38                 ?523      16?17                $560                	;0
	1103 758   GOTO/253                  ?0        ?144                 ?604                	;0
	1104 760   FETCH_STATIC_PROP_R/173   $562=     605:'rSettings'      606:'XUI'           	;0
	1105 760   FETCH_DIM_R/81            $563=     $562                 608:'redis_handler' 	;0
	1106 760   BOOL_NOT/13               #564=     $563                 ?0                  	;0
	1107 760   JMPNZ_EX/47               #564=     #564                 ?1113               	;0	>>1113
	1108 760   FETCH_CONSTANT/99         #566=     ?0                   612:'SERVER_ID'     	;16
	1109 760   FETCH_STATIC_PROP_R/173   $565=     609:'rServers'       610:'XUI'           	;0
	1110 760   FETCH_DIM_R/81            $567=     $565                 #566                	;0
	1111 760   FETCH_DIM_R/81            $568=     $567                 615:'is_main'       	;0
	1112 760   BOOL/52                   #564=     $568                 ?0                  	;0
	1113 760   BOOL_NOT/13               #569=     #564                 ?0                  	;0	<<1107
	1114 760   JMPZ/43                   ?0        #569                 ?1116               	;0	>>1116
	1115 761   GOTO/253                  ?0        ?1085                ?616                	;0
	1116 763   FETCH_STATIC_PROP_R/173   $570=     617:'rSettings'      618:'XUI'           	;0	<<1114
	1117 763   FETCH_DIM_R/81            $571=     $570                 620:'user_auto_kick_hours'	;0
	1118 763   MUL/3                     #572=     $571                 621:3600            	;0
	1119 763   ASSIGN/38                 ?535      16?30                #572                	;0
	1120 764   ASSIGN/38                 $574=     16?7                 622:array (
)       	;0
	1121 764   ASSIGN/38                 $575=     16?6                 $574                	;0
	1122 764   ASSIGN/38                 ?538      16?31                $575                	;0
	1123 765   FETCH_STATIC_PROP_R/173   $577=     623:'rSettings'      624:'XUI'           	;0
	1124 765   FETCH_DIM_R/81            $578=     $577                 626:'redis_handler' 	;0
	1125 765   JMPZ/43                   ?0        $578                 ?1127               	;0	>>1127
	1126 766   GOTO/253                  ?0        ?1142                ?627                	;0
	1127 768   INIT_STATIC_METHOD_CALL/113 ?0        628:'XUI'            630:'E7C45286b27f999B'	;1	<<1125
	1128 768   FETCH_CONSTANT/99         #580=     ?0                   635:'SERVER_ID'     	;16
	1129 768   FETCH_STATIC_PROP_R/173   $579=     632:'rServers'       633:'XUI'           	;0
	1130 768   FETCH_DIM_R/81            $581=     $579                 #580                	;0
	1131 768   FETCH_DIM_R/81            $582=     $581                 638:'is_main'       	;0
	1132 768   JMPZ/43                   ?0        $582                 ?1135               	;0	>>1135
	1133 768   QM_ASSIGN/22              #583=     639:NULL             ?0                  	;0
	1134 768   JMP/42                    ?0        ?1137                ?0                  	;0	>>1137
	1135 768   FETCH_CONSTANT/99         #584=     ?0                   640:'SERVER_ID'     	;16	<<1132
	1136 768   QM_ASSIGN/22              #583=     #584                 ?0                  	;0
	1137 768   SEND_VAL_EX/116           ?80       #583                 ?1                  	;0	<<1134
	1138 768   DO_FCALL/60               $585=     ?0                   ?0                  	;0
	1139 768   ASSIGN/38                 ?548      16?12                $585                	;0
	1140 769   GOTO/253                  ?0        ?1141                ?643                	;0
	1141 771   GOTO/253                  ?0        ?57                  ?644                	;0
	1142 773   ASSIGN/38                 ?549      16?5                 645:array (
  'line' => 
  array (
  ),
  'server' => 
  array (
  ),
  'server_lines' => 
  array (
  ),
  'proxy' => 
  array (
  ),
  'stream' => 
  array (
  ),
  'uuid' => 
  array (
  ),
  'count' => 0,
)	;0
	1143 774   ASSIGN/38                 ?550      16?12                646:array (
)       	;0
	1144 775   INIT_STATIC_METHOD_CALL/113 ?0        647:'XUI'            649:'e7C45286b27F999b'	;0
	1145 775   DO_FCALL/60               $589=     ?0                   ?0                  	;0
	1146 775   FETCH_LIST/98             $590=     $589                 651:0               	;0
	1147 775   ASSIGN/38                 ?553      16?18                $590                	;0
	1148 775   FETCH_LIST/98             $592=     $589                 652:1               	;0
	1149 775   ASSIGN/38                 ?555      16?8                 $592                	;0
	1150 775   FREE/70                   ?0        $589                 ?0                  	;0
	1151 776   GOTO/253                  ?0        ?1092                ?653                	;0
	1152 778   FETCH_STATIC_PROP_R/173   $594=     654:'rSettings'      655:'XUI'           	;0
	1153 778   FETCH_DIM_R/81            $595=     $594                 657:'redis_handler' 	;0
	1154 778   BOOL_NOT/13               #596=     $595                 ?0                  	;0
	1155 778   JMPZ_EX/46                #596=     #596                 ?1161               	;0	>>1161
	1156 778   INIT_FCALL_BY_NAME/59     ?0        ?0                   658:'count'         	;1
	1157 778   SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
	1158 778   DO_FCALL_BY_NAME/131      $597=     ?0                   ?0                  	;0
	1159 778   IS_SMALLER/19             #598=     660:0                $597                	;0
	1160 778   BOOL/52                   #596=     #598                 ?0                  	;0
	1161 778   BOOL_NOT/13               #599=     #596                 ?0                  	;0	<<1155
	1162 778   JMPZ/43                   ?0        #599                 ?1164               	;0	>>1164
	1163 779   GOTO/253                  ?0        ?1175                ?661                	;0
	1164 781   INIT_FCALL_BY_NAME/59     ?0        ?0                   662:'implode'       	;2	<<1162
	1165 781   SEND_VAL_EX/116           ?80       664:','              ?1                  	;0
	1166 781   SEND_VAR_EX/66            ?96       16?34                ?2                  	;0
	1167 781   DO_FCALL_BY_NAME/131      $600=     ?0                   ?0                  	;0
	1168 781   ASSIGN/38                 ?563      16?34                $600                	;0
	1169 782   INIT_METHOD_CALL/112      ?0        16?2                 665:'query'         	;1
	1170 782   ROPE_INIT/54              #603=     ?0                   667:'INSERT INTO `lines_live`(`activity_id`,`divergence`) VALUES '	;3
	1171 782   ROPE_ADD/55               #603=     #603                 16?34               	;1
	1172 782   ROPE_END/56               #602=     #603                 668:' ON DUPLICATE KEY UPDATE `divergence`=VALUES(`divergence`);'	;2
	1173 782   SEND_VAL_EX/116           ?80       #602                 ?1                  	;0
	1174 782   DO_FCALL/60               ?567      ?0                   ?0                  	;0
	1175 784   INIT_FCALL_BY_NAME/59     ?0        ?0                   669:'shell_exec'    	;1
	1176 784   FETCH_CONSTANT/99         #606=     ?0                   671:'DIVERGENCE_TMP_PATH'	;16
	1177 784   CONCAT/8                  #607=     674:'rm -f '         #606                	;0
	1178 784   CONCAT/8                  #608=     #607                 675:'*'             	;0
	1179 784   SEND_VAL_EX/116           ?80       #608                 ?1                  	;0
	1180 784   DO_FCALL_BY_NAME/131      ?571      ?0                   ?0                  	;0
	1181 785   GOTO/253                  ?0        ?1024                ?676                	;0
	1182 787   INIT_FCALL_BY_NAME/59     ?0        ?0                   677:'count'         	;1
	1183 787   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
	1184 787   DO_FCALL_BY_NAME/131      $610=     ?0                   ?0                  	;0
	1185 787   IS_SMALLER/19             #611=     679:0                $610                	;0
	1186 787   BOOL_NOT/13               #612=     #611                 ?0                  	;0
	1187 787   JMPZ/43                   ?0        #612                 ?1189               	;0	>>1189
	1188 788   GOTO/253                  ?0        ?1217                ?680                	;0
	1189 790   INIT_FCALL_BY_NAME/59     ?0        ?0                   681:'array_map'     	;2	<<1187
	1190 790   SEND_VAL_EX/116           ?80       683:'igbinary_unserialize' ?1                  	;0
	1191 790   FETCH_STATIC_PROP_R/173   $613=     684:'redis'          685:'XUI'           	;0
	1192 790   INIT_METHOD_CALL/112      ?0        $613                 687:'mGet'          	;1
	1193 790   SEND_VAR_EX/66            ?80       16?21                ?1                  	;0
	1194 790   DO_FCALL/60               $614=     ?0                   ?0                  	;0
	1195 790   SEND_VAR_NO_REF_EX/50     ?96       $614                 ?2                  	;0
	1196 790   DO_FCALL_BY_NAME/131      $615=     ?0                   ?0                  	;0
	1197 790   ASSIGN/38                 ?578      16?8                 $615                	;0
	1198 791   FE_RESET_R/77             $617=     16?8                 ?1216               	;0
	1199 791   FE_FETCH_R/78             ?0        $617                 16?17               	;1216	>>1216	<<1215
	1200 792   INIT_FCALL_BY_NAME/59     ?0        ?0                   689:'is_array'      	;1
	1201 792   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	1202 792   DO_FCALL_BY_NAME/131      $618=     ?0                   ?0                  	;0
	1203 792   BOOL_NOT/13               #619=     $618                 ?0                  	;0
	1204 792   JMPZ/43                   ?0        #619                 ?1207               	;0	>>1207
	1205 793   NOP/0                     ?0        ?0                   ?0                  	;1
	1206 793   GOTO/253                  ?0        ?1215                ?691                	;0
	1207 795   FETCH_DIM_R/81            $620=     16?17                692:'uuid'          	;0	<<1204
	1208 795   INIT_FCALL_BY_NAME/59     ?0        ?0                   693:'intval'        	;1
	1209 795   FETCH_DIM_FUNC_ARG/93     $622=     16?17                695:'stream_id'     	;1
	1210 795   SEND_VAR_EX/66            ?80       $622                 ?1                  	;0
	1211 795   DO_FCALL_BY_NAME/131      $623=     ?0                   ?0                  	;0
	1212 795   FETCH_DIM_R/81            $624=     16?3                 $623                	;0
	1213 795   ASSIGN_DIM/147            ?583      16?4                 $620                	;0
	1214 795   OP_DATA/137               ?0        $624                 ?0                  	;0
	1215 797   JMP/42                    ?0        ?1199                ?0                  	;0	>>1199
	1216 797   FE_FREE/127               ?0        $617                 ?0                  	;0	<<1198
	1217 801   GOTO/253                  ?0        ?1066                ?696                	;0
	1218 803   INIT_METHOD_CALL/112      ?0        16?2                 697:'get_rows'      	;0
	1219 803   DO_FCALL/60               $625=     ?0                   ?0                  	;0
	1220 803   FE_RESET_R/77             $626=     $625                 ?1227               	;0
	1221 803   FE_FETCH_R/78             ?0        $626                 16?13               	;1227	>>1227	<<1226
	1222 804   FETCH_DIM_R/81            $627=     16?13                699:'uuid'          	;0
	1223 804   FETCH_DIM_R/81            $629=     16?13                700:'activity_id'   	;0
	1224 804   ASSIGN_DIM/147            ?590      16?32                $627                	;0
	1225 804   OP_DATA/137               ?0        $629                 ?0                  	;0
	1226 805   JMP/42                    ?0        ?1221                ?0                  	;0	>>1221
	1227 805   FE_FREE/127               ?0        $626                 ?0                  	;0	<<1220
	1228 809   ASSIGN/38                 $630=     16?0                 701:array (
)       	;0
	1229 809   ASSIGN/38                 ?593      16?34                $630                	;0
	1230 810   FE_RESET_R/77             $632=     16?14                ?1303               	;0
	1231 810   FE_FETCH_R/78             ?0        $632                 16?22               	;1303	>>1303	<<1302
	1232 811   NOP/0                     ?0        ?0                   ?0                  	;1
	1233 811   GOTO/253                  ?0        ?1282                ?702                	;0
	1234 813   INIT_FCALL_BY_NAME/59     ?0        ?0                   703:'intval'        	;1
	1235 813   FETCH_DIM_R/81            $633=     16?4                 16?37               	;0
	1236 813   SUB/2                     #634=     16?36                $633                	;0
	1237 813   FETCH_DIM_R/81            $635=     16?4                 16?37               	;0
	1238 813   DIV/4                     #636=     #634                 $635                	;0
	1239 813   MUL/3                     #637=     #636                 705:100             	;0
	1240 813   SEND_VAL_EX/116           ?80       #637                 ?1                  	;0
	1241 813   DO_FCALL_BY_NAME/131      $638=     ?0                   ?0                  	;0
	1242 813   ASSIGN/38                 ?601      16?35                $638                	;0
	1243 814   IS_SMALLER/19             #640=     706:0                16?35               	;0
	1244 814   BOOL_NOT/13               #641=     #640                 ?0                  	;0
	1245 814   JMPZ/43                   ?0        #641                 ?1248               	;0	>>1248
	1246 815   NOP/0                     ?0        ?0                   ?0                  	;1
	1247 815   GOTO/253                  ?0        ?1249                ?707                	;0
	1248 817   ASSIGN/38                 ?604      16?35                708:0               	;0	<<1245
	1249 819   CONCAT/8                  #644=     709:'(\''            16?37               	;0
	1250 819   CONCAT/8                  #645=     #644                 710:'\', '          	;0
	1251 819   INIT_FCALL_BY_NAME/59     ?0        ?0                   711:'abs'           	;1
	1252 819   SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
	1253 819   DO_FCALL_BY_NAME/131      $646=     ?0                   ?0                  	;0
	1254 819   CONCAT/8                  #647=     #645                 $646                	;0
	1255 819   CONCAT/8                  #648=     #647                 713:')'             	;0
	1256 819   ASSIGN_DIM/147            ?605      16?0                 ?2670194496         	;0
	1257 819   OP_DATA/137               ?0        #648                 ?0                  	;0
	1258 820   NOP/0                     ?0        ?0                   ?0                  	;1
	1259 820   GOTO/253                  ?0        ?1260                ?714                	;0
	1260 822   FETCH_STATIC_PROP_R/173   $649=     715:'rSettings'      716:'XUI'           	;0
	1261 822   FETCH_DIM_R/81            $650=     $649                 718:'redis_handler' 	;0
	1262 822   BOOL_NOT/13               #651=     $650                 ?0                  	;0
	1263 822   JMPZ_EX/46                #651=     #651                 ?1266               	;0	>>1266
	1264 822   ISSET_ISEMPTY_DIM_OBJ/115 #652=     16?32                16?37               	;33554432
	1265 822   BOOL/52                   #651=     #652                 ?0                  	;0
	1266 822   BOOL_NOT/13               #653=     #651                 ?0                  	;0	<<1263
	1267 822   JMPZ/43                   ?0        #653                 ?1270               	;0	>>1270
	1268 823   NOP/0                     ?0        ?0                   ?0                  	;1
	1269 823   GOTO/253                  ?0        ?1280                ?719                	;0
	1270 825   FETCH_DIM_R/81            $655=     16?32                16?37               	;0	<<1267
	1271 825   CONCAT/8                  #656=     720:'('              $655                	;0
	1272 825   CONCAT/8                  #657=     #656                 721:', '            	;0
	1273 825   INIT_FCALL_BY_NAME/59     ?0        ?0                   722:'abs'           	;1
	1274 825   SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
	1275 825   DO_FCALL_BY_NAME/131      $658=     ?0                   ?0                  	;0
	1276 825   CONCAT/8                  #659=     #657                 $658                	;0
	1277 825   CONCAT/8                  #660=     #659                 724:')'             	;0
	1278 825   ASSIGN_DIM/147            ?616      16?34                ?4397406            	;0
	1279 825   OP_DATA/137               ?0        #660                 ?0                  	;0
	1280 828   NOP/0                     ?0        ?0                   ?0                  	;1
	1281 828   GOTO/253                  ?0        ?1302                ?725                	;0
	1282 830   ISSET_ISEMPTY_CV/197      #661=     16?22                ?0                  	;16777216
	1283 830   BOOL_NOT/13               #662=     #661                 ?0                  	;0
	1284 830   JMPZ/43                   ?0        #662                 ?1287               	;0	>>1287
	1285 831   NOP/0                     ?0        ?0                   ?0                  	;1
	1286 831   GOTO/253                  ?0        ?1289                ?726                	;0
	1287 833   NOP/0                     ?0        ?0                   ?0                  	;1	<<1284
	1288 833   GOTO/253                  ?0        ?1280                ?727                	;0
	1289 835   INIT_FCALL_BY_NAME/59     ?0        ?0                   728:'basename'      	;1
	1290 835   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
	1291 835   DO_FCALL_BY_NAME/131      $663=     ?0                   ?0                  	;0
	1292 835   ASSIGN/38                 ?626      16?37                $663                	;0
	1293 836   INIT_FCALL_BY_NAME/59     ?0        ?0                   730:'intval'        	;1
	1294 836   INIT_FCALL_BY_NAME/59     ?0        ?0                   732:'file_get_contents'	;1
	1295 836   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
	1296 836   DO_FCALL_BY_NAME/131      $665=     ?0                   ?0                  	;0
	1297 836   SEND_VAR_NO_REF_EX/50     ?80       $665                 ?1                  	;0
	1298 836   DO_FCALL_BY_NAME/131      $666=     ?0                   ?0                  	;0
	1299 836   ASSIGN/38                 ?629      16?36                $666                	;0
	1300 837   NOP/0                     ?0        ?0                   ?0                  	;1
	1301 837   GOTO/253                  ?0        ?1234                ?734                	;0
	1302 838   JMP/42                    ?0        ?1231                ?0                  	;0	>>1231
	1303 838   FE_FREE/127               ?0        $632                 ?0                  	;0	<<1230
	1304 840   GOTO/253                  ?0        ?1                   ?735                	;0
	1305 842   NOP/0                     ?0        736:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   848  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   848  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   849  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   849  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   849  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   849  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   849  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   850  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   852  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   852  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  854  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  854  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  854  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  854  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  854  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  855  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?326                 ?0                  	;0	>>326
1   5    BEGIN_SILENCE/57          #15=      ?0                   ?0                  	;0
2   5    FETCH_R/80                $16=      1:'argc'             ?0                  	;268435456
3   5    END_SILENCE/58            ?0        #15                  ?0                  	;0
4   5    JMPZ/43                   ?0        $16                  ?6                  	;0	>>6
5   6    GOTO/253                  ?0        ?7                   ?2                  	;0
6   8    EXIT/79                   ?0        3:0                  ?0                  	;0	<<4
7   10   INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'register_shutdown_function'	;1
8   10   SEND_VAL_EX/116           ?80       6:'shutdown'         ?1                  	;0
9   10   DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
10  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'str_replace'     	;3
11  11   SEND_VAL_EX/116           ?80       9:'\\'               ?1                  	;0
12  11   SEND_VAL_EX/116           ?96       10:'/'               ?2                  	;0
13  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'dirname'        	;1
14  11   FETCH_DIM_FUNC_ARG/93     $18=      16?0                 13:0                	;1
15  11   SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
16  11   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
17  11   SEND_VAR_NO_REF_EX/50     ?112      $19                  ?3                  	;0
18  11   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
19  11   CONCAT/8                  #21=      $20                  14:'/../www/init.php'	;0
20  11   INCLUDE_OR_EVAL/73        ?7        #21                  ?0                  	;8
21  12   GOTO/253                  ?0        ?66                  ?15                 	;0
22  14   INIT_STATIC_METHOD_CALL/113 ?0        16:'XUI'             18:'d6aeB3175a43F301'	;0
23  14   DO_FCALL/60               ?8        ?0                   ?0                  	;0
24  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'is_object'      	;1
25  15   FETCH_STATIC_PROP_FUNC_ARG/177 $24=      22:'redis'           23:'XUI'            	;1
26  15   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
27  15   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
28  15   JMPZ/43                   ?0        $25                  ?30                 	;0	>>30
29  16   GOTO/253                  ?0        ?31                  ?25                 	;0
30  18   EXIT/79                   ?0        26:'Couldn\'t connect to Redis.
' ?0                  	;0	<<28
31  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'intval'         	;1
32  20   FETCH_DIM_FUNC_ARG/93     $26=      16?0                 29:1                	;1
33  20   SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
34  20   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
35  20   ASSIGN/38                 ?13       16?1                 $27                 	;0
36  21   GOTO/253                  ?0        ?345                 ?30                 	;0
37  23   INIT_METHOD_CALL/112      ?0        16?2                 31:'query'          	;1
38  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'implode'        	;2
39  23   SEND_VAL_EX/116           ?80       35:','               ?1                  	;0
40  23   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
41  23   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
42  23   CONCAT/8                  #30=      36:'SELECT `stream_id`, `server_id`, `on_demand` FROM `streams_servers` WHERE `stream_id` IN (' $29                 	;0
43  23   CONCAT/8                  #31=      #30                  37:');'             	;0
44  23   SEND_VAL_EX/116           ?80       #31                  ?1                  	;0
45  23   DO_FCALL/60               ?17       ?0                   ?0                  	;0
46  24   INIT_METHOD_CALL/112      ?0        16?2                 38:'get_rows'       	;0
47  24   DO_FCALL/60               $33=      ?0                   ?0                  	;0
48  24   FE_RESET_R/77             $34=      $33                  ?60                 	;0
49  24   FE_FETCH_R/78             ?0        $34                  16?4                	;60	>>60	<<59
50  25   FETCH_DIM_R/81            $35=      16?4                 40:'stream_id'      	;0
51  25   FETCH_DIM_R/81            $37=      16?4                 41:'server_id'      	;0
52  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'intval'         	;1
53  25   FETCH_DIM_FUNC_ARG/93     $39=      16?4                 44:'on_demand'      	;1
54  25   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
55  25   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
56  25   FETCH_DIM_W/84            $36=      16?5                 $35                 	;0
57  25   ASSIGN_DIM/147            ?23       $36                  $37                 	;0
58  25   OP_DATA/137               ?0        $40                  ?0                  	;0
59  26   JMP/42                    ?0        ?49                  ?0                  	;0	>>49
60  26   FE_FREE/127               ?0        $34                  ?0                  	;0	<<48
61  30   FETCH_STATIC_PROP_R/173   $41=      45:'redis'           46:'XUI'            	;0
62  30   INIT_METHOD_CALL/112      ?0        $41                  48:'multi'          	;0
63  30   DO_FCALL/60               $42=      ?0                   ?0                  	;0
64  30   ASSIGN/38                 ?28       16?6                 $42                 	;0
65  31   GOTO/253                  ?0        ?168                 ?50                 	;0
66  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'cli_set_process_title'	;1
67  33   SEND_VAL_EX/116           ?80       53:'XUI[Users]'      ?1                  	;0
68  33   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
69  34   FETCH_CONSTANT/99         #45=      ?0                   54:'CRONS_TMP_PATH' 	;16
70  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'md5'            	;1
71  34   INIT_STATIC_METHOD_CALL/113 ?0        59:'XUI'             61:'a336B0daD3eaF634'	;0
72  34   DO_FCALL/60               $46=      ?0                   ?0                  	;0
73  34   CONCAT/8                  #47=      $46                  63:'crons\\users.php'	;0
74  34   SEND_VAL_EX/116           ?80       #47                  ?1                  	;0
75  34   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
76  34   CONCAT/8                  #49=      #45                  $48                 	;0
77  34   ASSIGN/38                 ?35       16?7                 #49                 	;0
78  35   INIT_STATIC_METHOD_CALL/113 ?0        64:'XUI'             66:'a3CF732c257Bd804'	;1
79  35   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
80  35   DO_FCALL/60               ?36       ?0                   ?0                  	;0
81  36   ASSIGN/38                 ?37       16?1                 68:NULL             	;0
82  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'count'          	;1
83  37   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
84  37   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
85  37   IS_EQUAL/17               #54=      $53                  71:2                	;0
86  37   JMPZ_EX/46                #54=      #54                  ?92                 	;0	>>92
87  37   FETCH_CONSTANT/99         #56=      ?0                   75:'SERVER_ID'      	;16
88  37   FETCH_STATIC_PROP_R/173   $55=      72:'rServers'        73:'XUI'            	;0
89  37   FETCH_DIM_R/81            $57=      $55                  #56                 	;0
90  37   FETCH_DIM_R/81            $58=      $57                  78:'is_main'        	;0
91  37   BOOL/52                   #54=      $58                  ?0                  	;0
92  37   BOOL_NOT/13               #59=      #54                  ?0                  	;0	<<86
93  37   JMPZ/43                   ?0        #59                  ?95                 	;0	>>95
94  38   GOTO/253                  ?0        ?122                 ?79                 	;0
95  40   GOTO/253                  ?0        ?22                  ?80                 	;0	<<93
96  42   INIT_STATIC_METHOD_CALL/113 ?0        84:'XUI'             86:'F76008f8Dfe1898C'	;1
97  42   SEND_VAL_EX/116           ?80       88:true              ?1                  	;0
98  42   DO_FCALL/60               $61=      ?0                   ?0                  	;0
99  42   FETCH_STATIC_PROP_W/174   $60=      81:'rServers'        82:'XUI'            	;0
100 42   ASSIGN/38                 ?47       $60                  $61                 	;0
101 43   ASSIGN/38                 ?48       16?8                 89:array (
)        	;0
102 44   FETCH_STATIC_PROP_R/173   $64=      90:'rServers'        91:'XUI'            	;0
103 44   FE_RESET_R/77             $65=      $64                  ?120                	;0
104 44   FE_FETCH_R/78             ?0        $65                  16?9                	;120	>>120	<<119
105 45   FETCH_DIM_R/81            $66=      16?9                 93:'id'             	;0
106 45   INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'array_map'      	;2
107 45   SEND_VAL_EX/116           ?80       96:'intval'          ?1                  	;0
108 45   INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'json_decode'    	;2
109 45   FETCH_DIM_FUNC_ARG/93     $68=      16?9                 99:'php_pids'       	;1
110 45   SEND_VAR_EX/66            ?80       $68                  ?1                  	;0
111 45   SEND_VAL_EX/116           ?96       100:true             ?2                  	;0
112 45   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
113 45   SEND_VAR_NO_REF_EX/50     ?96       $69                  ?2                  	;0
114 45   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
115 45   JMP_SET/152               #71=      $70                  ?117                	;0
116 45   QM_ASSIGN/22              #71=      101:array (
)        ?0                  	;0
117 45   ASSIGN_DIM/147            ?52       16?8                 $66                 	;0
118 45   OP_DATA/137               ?0        #71                  ?0                  	;0
119 46   JMP/42                    ?0        ?104                 ?0                  	;0	>>104
120 46   FE_FREE/127               ?0        $65                  ?0                  	;0	<<103
121 50   GOTO/253                  ?0        ?367                 ?102                	;0
122 56   FETCH_STATIC_PROP_R/173   $72=      103:'rSettings'      104:'XUI'           	;0
123 56   FETCH_DIM_R/81            $73=      $72                  106:'redis_handler' 	;0
124 56   JMPZ_EX/46                #74=      $73                  ?130                	;0	>>130
125 56   FETCH_CONSTANT/99         #76=      ?0                   110:'SERVER_ID'     	;16
126 56   FETCH_STATIC_PROP_R/173   $75=      107:'rServers'       108:'XUI'           	;0
127 56   FETCH_DIM_R/81            $77=      $75                  #76                 	;0
128 56   FETCH_DIM_R/81            $78=      $77                  113:'is_main'       	;0
129 56   BOOL/52                   #74=      $78                  ?0                  	;0
130 56   BOOL_NOT/13               #79=      #74                  ?0                  	;0	<<124
131 56   JMPZ/43                   ?0        #79                  ?133                	;0	>>133
132 57   GOTO/253                  ?0        ?121                 ?114                	;0
133 59   GOTO/253                  ?0        ?96                  ?115                	;0	<<131
134 61   ASSIGN/38                 ?65       16?3                 116:array (
)       	;0
135 62   FE_RESET_R/77             $81=      16?10                ?158                	;0
136 62   FE_FETCH_R/78             ?0        $81                  16?4                	;158	>>158	<<157
137 63   INIT_FCALL_BY_NAME/59     ?0        ?0                   117:'in_array'      	;2
138 63   FETCH_DIM_FUNC_ARG/93     $82=      16?4                 119:'stream_id'     	;1
139 63   SEND_VAR_EX/66            ?80       $82                  ?1                  	;0
140 63   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
141 63   DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
142 63   BOOL_NOT/13               #84=      $83                  ?0                  	;0
143 63   JMPZ_EX/46                #84=      #84                  ?147                	;0	>>147
144 63   FETCH_DIM_R/81            $85=      16?4                 120:'stream_id'     	;0
145 63   IS_SMALLER/19             #86=      121:0                $85                 	;0
146 63   BOOL/52                   #84=      #86                  ?0                  	;0
147 63   BOOL_NOT/13               #87=      #84                  ?0                  	;0	<<143
148 63   JMPZ/43                   ?0        #87                  ?151                	;0	>>151
149 64   NOP/0                     ?0        ?0                   ?0                  	;1
150 64   GOTO/253                  ?0        ?157                 ?122                	;0
151 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'intval'        	;1	<<148
152 66   FETCH_DIM_FUNC_ARG/93     $89=      16?4                 125:'stream_id'     	;1
153 66   SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
154 66   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
155 66   ASSIGN_DIM/147            ?73       16?3                 ?4397406            	;0
156 66   OP_DATA/137               ?0        $90                  ?0                  	;0
157 68   JMP/42                    ?0        ?136                 ?0                  	;0	>>136
158 68   FE_FREE/127               ?0        $81                  ?0                  	;0	<<135
159 71   ASSIGN/38                 ?76       16?5                 126:array (
)       	;0
160 72   INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'count'         	;1
161 72   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
162 72   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
163 72   IS_SMALLER/19             #93=      129:0                $92                 	;0
164 72   BOOL_NOT/13               #94=      #93                  ?0                  	;0
165 72   JMPZ/43                   ?0        #94                  ?167                	;0	>>167
166 73   GOTO/253                  ?0        ?61                  ?130                	;0
167 75   GOTO/253                  ?0        ?37                  ?131                	;0	<<165
168 77   FE_RESET_R/77             $95=      16?10                ?306                	;0
169 77   FE_FETCH_R/78             ?0        $95                  16?4                	;306	>>306	<<305
170 78   NOP/0                     ?0        ?0                   ?0                  	;1
171 78   GOTO/253                  ?0        ?273                 ?132                	;0
172 80   FETCH_DIM_R/81            $96=      16?4                 133:'proxy_id'      	;0
173 80   BOOL_NOT/13               #97=      $96                  ?0                  	;0
174 80   JMPZ/43                   ?0        #97                  ?177                	;0	>>177
175 81   NOP/0                     ?0        ?0                   ?0                  	;1
176 81   GOTO/253                  ?0        ?187                 ?134                	;0
177 83   INIT_METHOD_CALL/112      ?0        16?6                 135:'zAdd'          	;3	<<174
178 83   FETCH_DIM_R/81            $98=      16?4                 137:'proxy_id'      	;0
179 83   NOP/0                     ?0        ?0                   ?0                  	;0
180 83   FAST_CONCAT/53            #99=      138:'PROXY#'         $98                 	;0
181 83   SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
182 83   FETCH_DIM_FUNC_ARG/93     $100=     16?4                 139:'date_start'    	;2
183 83   SEND_VAR_EX/66            ?96       $100                 ?2                  	;0
184 83   FETCH_DIM_FUNC_ARG/93     $101=     16?4                 140:'uuid'          	;3
185 83   SEND_VAR_EX/66            ?112      $101                 ?3                  	;0
186 83   DO_FCALL/60               ?87       ?0                   ?0                  	;0
187 85   INIT_METHOD_CALL/112      ?0        16?6                 141:'zAdd'          	;3
188 85   SEND_VAL_EX/116           ?80       143:'CONNECTIONS'    ?1                  	;0
189 85   FETCH_DIM_FUNC_ARG/93     $103=     16?4                 144:'date_start'    	;2
190 85   SEND_VAR_EX/66            ?96       $103                 ?2                  	;0
191 85   FETCH_DIM_FUNC_ARG/93     $104=     16?4                 145:'uuid'          	;3
192 85   SEND_VAR_EX/66            ?112      $104                 ?3                  	;0
193 85   DO_FCALL/60               ?90       ?0                   ?0                  	;0
194 86   INIT_METHOD_CALL/112      ?0        16?6                 146:'zAdd'          	;3
195 86   SEND_VAL_EX/116           ?80       148:'LIVE'           ?1                  	;0
196 86   FETCH_DIM_FUNC_ARG/93     $106=     16?4                 149:'date_start'    	;2
197 86   SEND_VAR_EX/66            ?96       $106                 ?2                  	;0
198 86   FETCH_DIM_FUNC_ARG/93     $107=     16?4                 150:'uuid'          	;3
199 86   SEND_VAR_EX/66            ?112      $107                 ?3                  	;0
200 86   DO_FCALL/60               ?93       ?0                   ?0                  	;0
201 87   NOP/0                     ?0        ?0                   ?0                  	;1
202 87   GOTO/253                  ?0        ?292                 ?151                	;0
203 89   INIT_METHOD_CALL/112      ?0        16?6                 152:'zAdd'          	;3
204 89   FETCH_DIM_R/81            $109=     16?4                 154:'stream_id'     	;0
205 89   NOP/0                     ?0        ?0                   ?0                  	;0
206 89   FAST_CONCAT/53            #110=     155:'STREAM#'        $109                	;0
207 89   SEND_VAL_EX/116           ?80       #110                 ?1                  	;0
208 89   FETCH_DIM_FUNC_ARG/93     $111=     16?4                 156:'date_start'    	;2
209 89   SEND_VAR_EX/66            ?96       $111                 ?2                  	;0
210 89   FETCH_DIM_FUNC_ARG/93     $112=     16?4                 157:'uuid'          	;3
211 89   SEND_VAR_EX/66            ?112      $112                 ?3                  	;0
212 89   DO_FCALL/60               ?98       ?0                   ?0                  	;0
213 90   INIT_METHOD_CALL/112      ?0        16?6                 158:'zAdd'          	;3
214 90   FETCH_DIM_R/81            $114=     16?4                 160:'server_id'     	;0
215 90   NOP/0                     ?0        ?0                   ?0                  	;0
216 90   FAST_CONCAT/53            #115=     161:'SERVER#'        $114                	;0
217 90   SEND_VAL_EX/116           ?80       #115                 ?1                  	;0
218 90   FETCH_DIM_FUNC_ARG/93     $116=     16?4                 162:'date_start'    	;2
219 90   SEND_VAR_EX/66            ?96       $116                 ?2                  	;0
220 90   FETCH_DIM_FUNC_ARG/93     $117=     16?4                 163:'uuid'          	;3
221 90   SEND_VAR_EX/66            ?112      $117                 ?3                  	;0
222 90   DO_FCALL/60               ?103      ?0                   ?0                  	;0
223 91   FETCH_DIM_R/81            $119=     16?4                 164:'user_id'       	;0
224 91   BOOL_NOT/13               #120=     $119                 ?0                  	;0
225 91   JMPZ/43                   ?0        #120                 ?228                	;0	>>228
226 92   NOP/0                     ?0        ?0                   ?0                  	;1
227 92   GOTO/253                  ?0        ?238                 ?165                	;0
228 94   INIT_METHOD_CALL/112      ?0        16?6                 166:'zAdd'          	;3	<<225
229 94   FETCH_DIM_R/81            $121=     16?4                 168:'server_id'     	;0
230 94   NOP/0                     ?0        ?0                   ?0                  	;0
231 94   FAST_CONCAT/53            #122=     169:'SERVER_LINES#'  $121                	;0
232 94   SEND_VAL_EX/116           ?80       #122                 ?1                  	;0
233 94   FETCH_DIM_FUNC_ARG/93     $123=     16?4                 170:'user_id'       	;2
234 94   SEND_VAR_EX/66            ?96       $123                 ?2                  	;0
235 94   FETCH_DIM_FUNC_ARG/93     $124=     16?4                 171:'uuid'          	;3
236 94   SEND_VAR_EX/66            ?112      $124                 ?3                  	;0
237 94   DO_FCALL/60               ?110      ?0                   ?0                  	;0
238 96   NOP/0                     ?0        ?0                   ?0                  	;1
239 96   GOTO/253                  ?0        ?172                 ?172                	;0
240 98   FETCH_DIM_R/81            $127=     16?4                 174:'user_id'       	;0
241 98   ASSIGN_DIM/147            ?111      16?4                 173:'identity'      	;0
242 98   OP_DATA/137               ?0        $127                 ?0                  	;0
243 100  FETCH_DIM_R/81            $129=     16?4                 176:'stream_id'     	;0
244 100  FETCH_DIM_R/81            $131=     16?4                 177:'server_id'     	;0
245 100  FETCH_DIM_R/81            $130=     16?5                 $129                	;0
246 100  FETCH_DIM_R/81            $132=     $130                 $131                	;0
247 100  JMP_SET/152               #133=     $132                 ?249                	;0
248 100  QM_ASSIGN/22              #133=     178:0                ?0                  	;0
249 100  ASSIGN_DIM/147            ?113      16?4                 175:'on_demand'     	;0
250 100  OP_DATA/137               ?0        #133                 ?0                  	;0
251 101  INIT_METHOD_CALL/112      ?0        16?6                 179:'zAdd'          	;3
252 101  FETCH_DIM_R/81            $134=     16?4                 181:'identity'      	;0
253 101  NOP/0                     ?0        ?0                   ?0                  	;0
254 101  FAST_CONCAT/53            #135=     182:'LINE#'          $134                	;0
255 101  SEND_VAL_EX/116           ?80       #135                 ?1                  	;0
256 101  FETCH_DIM_FUNC_ARG/93     $136=     16?4                 183:'date_start'    	;2
257 101  SEND_VAR_EX/66            ?96       $136                 ?2                  	;0
258 101  FETCH_DIM_FUNC_ARG/93     $137=     16?4                 184:'uuid'          	;3
259 101  SEND_VAR_EX/66            ?112      $137                 ?3                  	;0
260 101  DO_FCALL/60               ?123      ?0                   ?0                  	;0
261 102  INIT_METHOD_CALL/112      ?0        16?6                 185:'zAdd'          	;3
262 102  FETCH_DIM_R/81            $139=     16?4                 187:'identity'      	;0
263 102  NOP/0                     ?0        ?0                   ?0                  	;0
264 102  FAST_CONCAT/53            #140=     188:'LINE_ALL#'      $139                	;0
265 102  SEND_VAL_EX/116           ?80       #140                 ?1                  	;0
266 102  FETCH_DIM_FUNC_ARG/93     $141=     16?4                 189:'date_start'    	;2
267 102  SEND_VAR_EX/66            ?96       $141                 ?2                  	;0
268 102  FETCH_DIM_FUNC_ARG/93     $142=     16?4                 190:'uuid'          	;3
269 102  SEND_VAR_EX/66            ?112      $142                 ?3                  	;0
270 102  DO_FCALL/60               ?128      ?0                   ?0                  	;0
271 103  NOP/0                     ?0        ?0                   ?0                  	;1
272 103  GOTO/253                  ?0        ?203                 ?191                	;0
273 105  FETCH_DIM_R/81            $144=     16?4                 192:'uuid'          	;0
274 105  ROPE_INIT/54              #146=     ?0                   193:'Resynchronising UUID: '	;3
275 105  ROPE_ADD/55               #146=     #146                 $144                	;1
276 105  ROPE_END/56               #145=     #146                 194:'
'             	;2
277 105  ECHO/40                   ?0        #145                 ?0                  	;0
278 106  ISSET_ISEMPTY_DIM_OBJ/115 #148=     16?4                 195:'hmac_id'       	;16777216
279 106  JMPZ/43                   ?0        #148                 ?282                	;0	>>282
280 107  NOP/0                     ?0        ?0                   ?0                  	;1
281 107  GOTO/253                  ?0        ?290                 ?196                	;0
282 109  FETCH_DIM_R/81            $150=     16?4                 198:'hmac_id'       	;0	<<279
283 109  CONCAT/8                  #151=     $150                 199:'_'             	;0
284 109  FETCH_DIM_R/81            $152=     16?4                 200:'hmac_identifier'	;0
285 109  CONCAT/8                  #153=     #151                 $152                	;0
286 109  ASSIGN_DIM/147            ?134      16?4                 197:'identity'      	;0
287 109  OP_DATA/137               ?0        #153                 ?0                  	;0
288 110  NOP/0                     ?0        ?0                   ?0                  	;1
289 110  GOTO/253                  ?0        ?243                 ?201                	;0
290 112  NOP/0                     ?0        ?0                   ?0                  	;1
291 112  GOTO/253                  ?0        ?240                 ?202                	;0
292 114  INIT_METHOD_CALL/112      ?0        16?6                 203:'set'           	;2
293 114  FETCH_DIM_FUNC_ARG/93     $154=     16?4                 205:'uuid'          	;1
294 114  SEND_VAR_EX/66            ?80       $154                 ?1                  	;0
295 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'igbinary_serialize'	;1
296 114  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
297 114  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
298 114  SEND_VAR_NO_REF_EX/50     ?96       $155                 ?2                  	;0
299 114  DO_FCALL/60               ?141      ?0                   ?0                  	;0
300 115  FETCH_DIM_R/81            $158=     16?4                 208:'uuid'          	;0
301 115  ASSIGN_DIM/147            ?142      16?11                ?5126               	;0
302 115  OP_DATA/137               ?0        $158                 ?0                  	;0
303 117  NOP/0                     ?0        ?0                   ?0                  	;1
304 117  GOTO/253                  ?0        ?305                 ?209                	;0
305 118  JMP/42                    ?0        ?169                 ?0                  	;0	>>169
306 118  FE_FREE/127               ?0        $95                  ?0                  	;0	<<168
307 121  INIT_METHOD_CALL/112      ?0        16?6                 210:'exec'          	;0
308 121  DO_FCALL/60               ?144      ?0                   ?0                  	;0
309 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'count'         	;1
310 122  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
311 122  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
312 122  IS_SMALLER/19             #161=     214:0                $160                	;0
313 122  BOOL_NOT/13               #162=     #161                 ?0                  	;0
314 122  JMPZ/43                   ?0        #162                 ?316                	;0	>>316
315 123  GOTO/253                  ?0        ?122                 ?215                	;0
316 125  INIT_METHOD_CALL/112      ?0        16?2                 216:'query'         	;1	<<314
317 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'implode'       	;2
318 125  SEND_VAL_EX/116           ?80       220:'\',\''          ?1                  	;0
319 125  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
320 125  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
321 125  CONCAT/8                  #164=     221:'DELETE FROM `lines_live` WHERE `uuid` IN (\'' $163                	;0
322 125  CONCAT/8                  #165=     #164                 222:'\');'          	;0
323 125  SEND_VAL_EX/116           ?80       #165                 ?1                  	;0
324 125  DO_FCALL/60               ?151      ?0                   ?0                  	;0
325 126  GOTO/253                  ?0        ?122                 ?223                	;0
326 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'posix_getpwuid'	;1	<<0
327 128  INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'posix_geteuid' 	;0
328 128  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
329 128  SEND_VAR_NO_REF_EX/50     ?80       $167                 ?1                  	;0
330 128  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
331 128  FETCH_DIM_R/81            $169=     $168                 228:'name'          	;0
332 128  IS_NOT_EQUAL/18           #170=     $169                 229:'xui'           	;0
333 128  BOOL_NOT/13               #171=     #170                 ?0                  	;0
334 128  JMPZ/43                   ?0        #171                 ?336                	;0	>>336
335 129  GOTO/253                  ?0        ?337                 ?230                	;0
336 131  EXIT/79                   ?0        231:'Please run as XUI!
' ?0                  	;0	<<334
337 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'set_time_limit'	;1
338 133  SEND_VAL_EX/116           ?80       234:0                ?1                  	;0
339 133  DO_FCALL_BY_NAME/131      ?157      ?0                   ?0                  	;0
340 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'ini_set'       	;2
341 134  SEND_VAL_EX/116           ?80       237:'memory_limit'   ?1                  	;0
342 134  SEND_VAL_EX/116           ?96       238:-1               ?2                  	;0
343 134  DO_FCALL_BY_NAME/131      ?158      ?0                   ?0                  	;0
344 135  GOTO/253                  ?0        ?1                   ?239                	;0
345 137  IS_EQUAL/17               #174=     16?1                 240:1               	;0
346 137  BOOL_NOT/13               #175=     #174                 ?0                  	;0
347 137  JMPZ/43                   ?0        #175                 ?349                	;0	>>349
348 138  GOTO/253                  ?0        ?122                 ?241                	;0
349 140  ASSIGN/38                 $176=     16?14                242:array (
)       	;0	<<347
350 140  ASSIGN/38                 $177=     16?13                $176                	;0
351 140  ASSIGN/38                 $178=     16?12                $177                	;0
352 140  ASSIGN/38                 ?164      16?11                $178                	;0
353 141  INIT_METHOD_CALL/112      ?0        16?2                 243:'query'         	;1
354 141  SEND_VAL_EX/116           ?80       245:'SELECT * FROM `lines_live` WHERE `hls_end` = 0;' ?1                  	;0
355 141  DO_FCALL/60               ?165      ?0                   ?0                  	;0
356 142  INIT_METHOD_CALL/112      ?0        16?2                 246:'get_rows'      	;0
357 142  DO_FCALL/60               $181=     ?0                   ?0                  	;0
358 142  ASSIGN/38                 ?167      16?10                $181                	;0
359 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'count'         	;1
360 143  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
361 143  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
362 143  IS_SMALLER/19             #184=     250:0                $183                	;0
363 143  BOOL_NOT/13               #185=     #184                 ?0                  	;0
364 143  JMPZ/43                   ?0        #185                 ?366                	;0	>>366
365 144  GOTO/253                  ?0        ?122                 ?251                	;0
366 146  GOTO/253                  ?0        ?134                 ?252                	;0	<<364
367 149  NOP/0                     ?0        ?0                   ?0                  	;0
368 261  NOP/0                     ?0        ?0                   ?0                  	;0
369 843  INIT_FCALL/61             ?0        ?10768               253:'ab8369074df2aaa3'	;0
370 843  DO_FCALL/60               ?171      ?0                   ?0                  	;0
371 844  GOTO/253                  ?0        ?372                 ?254                	;0
372 846  NOP/0                     ?0        ?0                   ?0                  	;0
373 856  NOP/0                     ?0        255:1                ?0                  	;4294967295
*/

?>