<?php


function ab8369074DF2aaa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   26   JMP/42                    ?0        ?777                 ?0                  	;0	>>777
	1   29   INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'glob'            	;1
	2   29   FETCH_CONSTANT/99         #40=      ?0                   3:'STREAMS_PATH'    	;16
	3   29   CONCAT/8                  #41=      #40                  6:'*'               	;0
	4   29   SEND_VAL_EX/116           ?80       #41                  ?1                  	;0
	5   29   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	6   29   FE_RESET_R/77             $43=      $42                  ?45                 	;0
	7   29   FE_FETCH_R/78             ?0        $43                  16?0                	;45	>>45	<<44
	8   30   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'intval'          	;1
	9   30   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'rtrim'           	;2
	10  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'explode'        	;2
	11  30   SEND_VAL_EX/116           ?80       13:'.'               ?1                  	;0
	12  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'basename'       	;1
	13  30   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	14  30   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
	15  30   SEND_VAR_NO_REF_EX/50     ?96       $44                  ?2                  	;0
	16  30   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
	17  30   SEPARATE/156              $45=      $45                  ?0                  	;0
	18  30   FETCH_DIM_FUNC_ARG/93     $46=      $45                  16:0                	;1
	19  30   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
	20  30   SEND_VAL_EX/116           ?96       17:'_'               ?2                  	;0
	21  30   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
	22  30   SEND_VAR_NO_REF_EX/50     ?80       $47                  ?1                  	;0
	23  30   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
	24  30   CONCAT/8                  #49=      $48                  18:'
'              	;0
	25  30   ASSIGN/38                 ?10       16?1                 #49                 	;0
	26  31   IS_SMALLER/19             #51=      19:0                 16?1                	;0
	27  31   JMPZ_EX/46                #51=      #51                  ?34                 	;0	>>34
	28  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'in_array'       	;2
	29  31   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	30  31   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	31  31   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
	32  31   BOOL_NOT/13               #53=      $52                  ?0                  	;0
	33  31   BOOL/52                   #51=      #53                  ?0                  	;0
	34  31   BOOL_NOT/13               #54=      #51                  ?0                  	;0	<<27
	35  31   JMPZ/43                   ?0        #54                  ?38                 	;0	>>38
	36  32   NOP/0                     ?0        ?0                   ?0                  	;1
	37  32   GOTO/253                  ?0        ?44                  ?22                 	;0
	38  34   CONCAT/8                  #55=      23:'Deleting: '      16?0                	;0	<<35
	39  34   CONCAT/8                  #56=      #55                  24:'
'              	;0
	40  34   ECHO/40                   ?0        #56                  ?0                  	;0
	41  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'unlink'         	;1
	42  35   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	43  35   DO_FCALL_BY_NAME/131      ?17       ?0                   ?0                  	;0
	44  37   JMP/42                    ?0        ?7                   ?0                  	;0	>>7
	45  37   FE_FREE/127               ?0        $43                  ?0                  	;0	<<6
	46  40   ASSIGN/38                 ?18       16?3                 27:array (
)        	;0
	47  41   INIT_METHOD_CALL/112      ?0        16?4                 28:'query'          	;2
	48  41   SEND_VAL_EX/116           ?80       30:'SELECT `id`, `tv_archive_duration` FROM `streams` WHERE `type` = 1 AND `tv_archive_server_id` = ? AND `tv_archive_duration` > 0;' ?1                  	;0
	49  41   FETCH_CONSTANT/99         #59=      ?0                   31:'SERVER_ID'      	;16
	50  41   SEND_VAL_EX/116           ?96       #59                  ?2                  	;0
	51  41   DO_FCALL/60               ?20       ?0                   ?0                  	;0
	52  42   GOTO/253                  ?0        ?292                 ?34                 	;0
	53  45   ASSIGN/38                 ?21       16?5                 35:array (
  'lines_activity' => 
  array (
    0 => 'keep_activity',
    1 => 'date_end',
  ),
  'lines_logs' => 
  array (
    0 => 'keep_client',
    1 => 'date',
  ),
  'login_logs' => 
  array (
    0 => 'keep_login',
    1 => 'date',
  ),
  'streams_errors' => 
  array (
    0 => 'keep_errors',
    1 => 'date',
  ),
  'streams_logs' => 
  array (
    0 => 'keep_restarts',
    1 => 'date',
  ),
  'ondemand_check' => 
  array (
    0 => 'on_demand_scan_keep',
    1 => 'date',
  ),
)	;0
	54  46   FE_RESET_R/77             $62=      16?5                 ?90                 	;0
	55  46   FE_FETCH_R/78             #63=      $62                  16?6                	;90	>>90	<<89
	56  46   ASSIGN/38                 ?24       16?7                 #63                 	;0
	57  47   FETCH_DIM_R/81            $66=      16?6                 39:0                	;0
	58  47   FETCH_STATIC_PROP_R/173   $65=      36:'rSettings'       37:'XUI'            	;0
	59  47   FETCH_DIM_R/81            $67=      $65                  $66                 	;0
	60  47   JMPZ_EX/46                #68=      $67                  ?66                 	;0	>>66
	61  47   FETCH_DIM_R/81            $70=      16?6                 43:0                	;0
	62  47   FETCH_STATIC_PROP_R/173   $69=      40:'rSettings'       41:'XUI'            	;0
	63  47   FETCH_DIM_R/81            $71=      $69                  $70                 	;0
	64  47   IS_SMALLER/19             #72=      44:0                 $71                 	;0
	65  47   BOOL/52                   #68=      #72                  ?0                  	;0
	66  47   BOOL_NOT/13               #73=      #68                  ?0                  	;0	<<60
	67  47   JMPZ/43                   ?0        #73                  ?70                 	;0	>>70
	68  48   NOP/0                     ?0        ?0                   ?0                  	;1
	69  48   GOTO/253                  ?0        ?89                  ?45                 	;0
	70  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'time'           	;0	<<67
	71  50   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	72  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'intval'         	;1
	73  50   FETCH_DIM_R/81            $76=      16?6                 53:0                	;0
	74  50   FETCH_STATIC_PROP_FUNC_ARG/177 $75=      50:'rSettings'       51:'XUI'            	;1
	75  50   FETCH_DIM_FUNC_ARG/93     $77=      $75                  $76                 	;1
	76  50   SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
	77  50   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
	78  50   SUB/2                     #79=      $74                  $78                 	;0
	79  50   ASSIGN/38                 ?40       16?8                 #79                 	;0
	80  51   INIT_METHOD_CALL/112      ?0        16?4                 54:'query'          	;2
	81  51   CONCAT/8                  #81=      56:'DELETE FROM `'   16?7                	;0
	82  51   CONCAT/8                  #82=      #81                  57:'` WHERE `'      	;0
	83  51   FETCH_DIM_R/81            $83=      16?6                 58:1                	;0
	84  51   CONCAT/8                  #84=      #82                  $83                 	;0
	85  51   CONCAT/8                  #85=      #84                  59:'` < ?;'         	;0
	86  51   SEND_VAL_EX/116           ?80       #85                  ?1                  	;0
	87  51   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
	88  51   DO_FCALL/60               ?46       ?0                   ?0                  	;0
	89  53   JMP/42                    ?0        ?55                  ?0                  	;0	>>55
	90  53   FE_FREE/127               ?0        $62                  ?0                  	;0	<<54
	91  56   GOTO/253                  ?0        ?806                 ?60                 	;0
	92  58   ASSIGN/38                 ?47       16?9                 61:array (
)        	;0
	93  59   INIT_METHOD_CALL/112      ?0        16?4                 62:'query'          	;2
	94  59   SEND_VAL_EX/116           ?80       64:'SELECT `id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`type` = 3 AND `streams_servers`.`server_id` = ?;' ?1                  	;0
	95  59   FETCH_CONSTANT/99         #88=      ?0                   65:'SERVER_ID'      	;16
	96  59   SEND_VAL_EX/116           ?96       #88                  ?2                  	;0
	97  59   DO_FCALL/60               ?49       ?0                   ?0                  	;0
	98  60   INIT_METHOD_CALL/112      ?0        16?4                 68:'get_rows'       	;0
	99  60   DO_FCALL/60               $90=      ?0                   ?0                  	;0
	100 60   FE_RESET_R/77             $91=      $90                  ?109                	;0
	101 60   FE_FETCH_R/78             ?0        $91                  16?10               	;109	>>109	<<108
	102 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'intval'         	;1
	103 61   FETCH_DIM_FUNC_ARG/93     $93=      16?10                72:'id'             	;1
	104 61   SEND_VAR_EX/66            ?80       $93                  ?1                  	;0
	105 61   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
	106 61   ASSIGN_DIM/147            ?52       16?9                 ?4414262            	;0
	107 61   OP_DATA/137               ?0        $94                  ?0                  	;0
	108 62   JMP/42                    ?0        ?101                 ?0                  	;0	>>101
	109 62   FE_FREE/127               ?0        $91                  ?0                  	;0	<<100
	110 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'glob'           	;1
	111 65   FETCH_CONSTANT/99         #95=      ?0                   75:'CREATED_PATH'   	;16
	112 65   CONCAT/8                  #96=      #95                  78:'*'              	;0
	113 65   SEND_VAL_EX/116           ?80       #96                  ?1                  	;0
	114 65   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
	115 65   FE_RESET_R/77             $98=      $97                  ?154                	;0
	116 65   FE_FETCH_R/78             ?0        $98                  16?0                	;154	>>154	<<153
	117 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'intval'         	;1
	118 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'rtrim'          	;2
	119 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'explode'        	;2
	120 66   SEND_VAL_EX/116           ?80       85:'.'               ?1                  	;0
	121 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'basename'       	;1
	122 66   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	123 66   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
	124 66   SEND_VAR_NO_REF_EX/50     ?96       $99                  ?2                  	;0
	125 66   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
	126 66   SEPARATE/156              $100=     $100                 ?0                  	;0
	127 66   FETCH_DIM_FUNC_ARG/93     $101=     $100                 88:0                	;1
	128 66   SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
	129 66   SEND_VAL_EX/116           ?96       89:'_'               ?2                  	;0
	130 66   DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
	131 66   SEND_VAR_NO_REF_EX/50     ?80       $102                 ?1                  	;0
	132 66   DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
	133 66   CONCAT/8                  #104=     $103                 90:'
'              	;0
	134 66   ASSIGN/38                 ?65       16?1                 #104                	;0
	135 67   IS_SMALLER/19             #106=     91:0                 16?1                	;0
	136 67   JMPZ_EX/46                #106=     #106                 ?143                	;0	>>143
	137 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'in_array'       	;2
	138 67   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	139 67   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
	140 67   DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
	141 67   BOOL_NOT/13               #108=     $107                 ?0                  	;0
	142 67   BOOL/52                   #106=     #108                 ?0                  	;0
	143 67   BOOL_NOT/13               #109=     #106                 ?0                  	;0	<<136
	144 67   JMPZ/43                   ?0        #109                 ?147                	;0	>>147
	145 68   NOP/0                     ?0        ?0                   ?0                  	;1
	146 68   GOTO/253                  ?0        ?153                 ?94                 	;0
	147 70   CONCAT/8                  #110=     95:'Deleting: '      16?0                	;0	<<144
	148 70   CONCAT/8                  #111=     #110                 96:'
'              	;0
	149 70   ECHO/40                   ?0        #111                 ?0                  	;0
	150 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'unlink'         	;1
	151 71   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	152 71   DO_FCALL_BY_NAME/131      ?72       ?0                   ?0                  	;0
	153 73   JMP/42                    ?0        ?116                 ?0                  	;0	>>116
	154 73   FE_FREE/127               ?0        $98                  ?0                  	;0	<<115
	155 75   GOTO/253                  ?0        ?425                 ?99                 	;0
	156 77   INIT_METHOD_CALL/112      ?0        16?4                 100:'num_rows'      	;0
	157 77   DO_FCALL/60               $113=     ?0                   ?0                  	;0
	158 77   IS_SMALLER/19             #114=     102:0                $113                	;0
	159 77   BOOL_NOT/13               #115=     #114                 ?0                  	;0
	160 77   JMPZ/43                   ?0        #115                 ?162                	;0	>>162
	161 78   GOTO/253                  ?0        ?291                 ?103                	;0
	162 80   INIT_METHOD_CALL/112      ?0        16?4                 104:'get_rows'      	;0	<<160
	163 80   DO_FCALL/60               $116=     ?0                   ?0                  	;0
	164 80   ASSIGN/38                 ?77       16?2                 $116                	;0
	165 81   FE_RESET_R/77             $118=     16?2                 ?290                	;0
	166 81   FE_FETCH_R/78             ?0        $118                 16?11               	;290	>>290	<<289
	167 82   NOP/0                     ?0        ?0                   ?0                  	;1
	168 82   GOTO/253                  ?0        ?262                 ?106                	;0
	169 84   NOP/0                     ?0        ?0                   ?0                  	;1
	170 84   GOTO/253                  ?0        ?260                 ?107                	;0
	171 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'explode'       	;2
	172 86   SEND_VAL_EX/116           ?80       110:'
'              ?1                  	;0
	173 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'file_get_contents'	;1
	174 86   FETCH_CONSTANT/99         #119=     ?0                   113:'CREATED_PATH'  	;16
	175 86   FETCH_DIM_R/81            $120=     16?11                116:'id'            	;0
	176 86   CONCAT/8                  #121=     #119                 $120                	;0
	177 86   CONCAT/8                  #122=     #121                 117:'_.list'        	;0
	178 86   SEND_VAL_EX/116           ?80       #122                 ?1                  	;0
	179 86   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
	180 86   SEND_VAR_NO_REF_EX/50     ?96       $123                 ?2                  	;0
	181 86   DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
	182 86   ASSIGN/38                 ?85       16?12                $124                	;0
	183 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'glob'          	;1
	184 87   FETCH_CONSTANT/99         #126=     ?0                   120:'CREATED_PATH'  	;16
	185 87   FETCH_DIM_R/81            $127=     16?11                123:'id'            	;0
	186 87   CONCAT/8                  #128=     #126                 $127                	;0
	187 87   CONCAT/8                  #129=     #128                 124:'*.*'           	;0
	188 87   SEND_VAL_EX/116           ?80       #129                 ?1                  	;0
	189 87   DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
	190 87   ASSIGN/38                 ?91       16?13                $130                	;0
	191 88   ASSIGN/38                 ?92       16?14                125:false           	;0
	192 89   NOP/0                     ?0        ?0                   ?0                  	;1
	193 89   GOTO/253                  ?0        ?194                 ?126                	;0
	194 91   ASSIGN/38                 ?93       16?15                127:array (
)       	;0
	195 92   FE_RESET_R/77             $134=     16?12                ?237                	;0
	196 92   FE_FETCH_R/78             ?0        $134                 16?16               	;237	>>237	<<236
	197 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'trim'          	;1
	198 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'explode'       	;2
	199 93   SEND_VAL_EX/116           ?80       132:'\''             ?1                  	;0
	200 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'explode'       	;2
	201 93   SEND_VAL_EX/116           ?80       135:'\''             ?1                  	;0
	202 93   SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
	203 93   DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
	204 93   SEPARATE/156              $135=     $135                 ?0                  	;0
	205 93   FETCH_DIM_FUNC_ARG/93     $136=     $135                 136:1               	;2
	206 93   SEND_VAR_EX/66            ?96       $136                 ?2                  	;0
	207 93   DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
	208 93   SEPARATE/156              $137=     $137                 ?0                  	;0
	209 93   FETCH_DIM_FUNC_ARG/93     $138=     $137                 137:0               	;1
	210 93   SEND_VAR_EX/66            ?80       $138                 ?1                  	;0
	211 93   DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
	212 93   ASSIGN/38                 ?100      16?0                 $139                	;0
	213 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'strlen'        	;1
	214 94   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	215 94   DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
	216 94   IS_SMALLER/19             #142=     140:0                $141                	;0
	217 94   BOOL_NOT/13               #143=     #142                 ?0                  	;0
	218 94   JMPZ/43                   ?0        #143                 ?222                	;0	>>222
	219 95   NOP/0                     ?0        ?0                   ?0                  	;1
	220 95   NOP/0                     ?0        ?0                   ?0                  	;1
	221 95   GOTO/253                  ?0        ?236                 ?141                	;0
	222 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'in_array'      	;2	<<218
	223 97   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	224 97   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
	225 97   DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
	226 97   JMPZ/43                   ?0        $144                 ?230                	;0	>>230
	227 98   NOP/0                     ?0        ?0                   ?0                  	;1
	228 98   NOP/0                     ?0        ?0                   ?0                  	;1
	229 98   GOTO/253                  ?0        ?234                 ?144                	;0
	230 100  ASSIGN/38                 ?105      16?14                145:true            	;0	<<226
	231 101  NOP/0                     ?0        ?0                   ?0                  	;1
	232 101  NOP/0                     ?0        ?0                   ?0                  	;1
	233 101  GOTO/253                  ?0        ?236                 ?146                	;0
	234 103  ASSIGN_DIM/147            ?106      16?15                ?2670194032         	;0
	235 103  OP_DATA/137               ?0        16?0                 ?0                  	;0
	236 106  JMP/42                    ?0        ?196                 ?0                  	;0	>>196
	237 106  FE_FREE/127               ?0        $134                 ?0                  	;0	<<195
	238 109  BOOL_NOT/13               #147=     16?14                ?0                  	;0
	239 109  JMPZ/43                   ?0        #147                 ?242                	;0	>>242
	240 110  NOP/0                     ?0        ?0                   ?0                  	;1
	241 110  GOTO/253                  ?0        ?260                 ?147                	;0
	242 112  ECHO/40                   ?0        148:'BAD CHANNEL
'   ?0                  	;0	<<239
	243 113  NOP/0                     ?0        ?0                   ?0                  	;1
	244 113  GOTO/253                  ?0        ?245                 ?149                	;0
	245 115  INIT_METHOD_CALL/112      ?0        16?4                 150:'query'         	;3
	246 115  SEND_VAL_EX/116           ?80       152:'UPDATE `streams_servers` SET `cchannel_rsources` = ? WHERE `server_stream_id` = ?;' ?1                  	;0
	247 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'json_encode'   	;2
	248 115  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	249 115  FETCH_CONSTANT/99         #148=     ?0                   155:'JSON_UNESCAPED_UNICODE'	;16
	250 115  SEND_VAL_EX/116           ?96       #148                 ?2                  	;0
	251 115  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
	252 115  SEND_VAR_NO_REF_EX/50     ?96       $149                 ?2                  	;0
	253 115  FETCH_DIM_FUNC_ARG/93     $150=     16?11                158:'server_stream_id'	;3
	254 115  SEND_VAR_EX/66            ?112      $150                 ?3                  	;0
	255 115  DO_FCALL/60               ?111      ?0                   ?0                  	;0
	256 116  INIT_STATIC_METHOD_CALL/113 ?0        159:'XUI'            161:'cac325153A658C37'	;1
	257 116  FETCH_DIM_FUNC_ARG/93     $152=     16?11                163:'id'            	;1
	258 116  SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
	259 116  DO_FCALL/60               ?113      ?0                   ?0                  	;0
	260 120  NOP/0                     ?0        ?0                   ?0                  	;1
	261 120  GOTO/253                  ?0        ?289                 ?164                	;0
	262 122  FETCH_DIM_R/81            $154=     16?11                165:'stream_display_name'	;0
	263 122  ROPE_INIT/54              #156=     ?0                   166:'

[*] Checking Channel '	;3
	264 122  ROPE_ADD/55               #156=     #156                 $154                	;1
	265 122  ROPE_END/56               #155=     #156                 167:'
'             	;2
	266 122  ECHO/40                   ?0        #155                 ?0                  	;0
	267 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'file_exists'   	;1
	268 123  FETCH_CONSTANT/99         #158=     ?0                   170:'CREATED_PATH'  	;16
	269 123  FETCH_DIM_R/81            $159=     16?11                173:'id'            	;0
	270 123  CONCAT/8                  #160=     #158                 $159                	;0
	271 123  CONCAT/8                  #161=     #160                 174:'_.list'        	;0
	272 123  SEND_VAL_EX/116           ?80       #161                 ?1                  	;0
	273 123  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
	274 123  JMPZ/43                   ?0        $162                 ?277                	;0	>>277
	275 124  NOP/0                     ?0        ?0                   ?0                  	;1
	276 124  GOTO/253                  ?0        ?171                 ?175                	;0
	277 126  ECHO/40                   ?0        176:'BAD CHANNEL
'   ?0                  	;0	<<274
	278 127  INIT_METHOD_CALL/112      ?0        16?4                 177:'query'         	;2
	279 127  SEND_VAL_EX/116           ?80       179:'UPDATE `streams_servers` SET `cchannel_rsources` = \'[]\' WHERE `server_stream_id` = ?;' ?1                  	;0
	280 127  FETCH_DIM_FUNC_ARG/93     $163=     16?11                180:'server_stream_id'	;2
	281 127  SEND_VAR_EX/66            ?96       $163                 ?2                  	;0
	282 127  DO_FCALL/60               ?124      ?0                   ?0                  	;0
	283 128  INIT_STATIC_METHOD_CALL/113 ?0        181:'XUI'            183:'caC325153A658C37'	;1
	284 128  FETCH_DIM_FUNC_ARG/93     $165=     16?11                185:'id'            	;1
	285 128  SEND_VAR_EX/66            ?80       $165                 ?1                  	;0
	286 128  DO_FCALL/60               ?126      ?0                   ?0                  	;0
	287 129  NOP/0                     ?0        ?0                   ?0                  	;1
	288 129  GOTO/253                  ?0        ?169                 ?186                	;0
	289 130  JMP/42                    ?0        ?166                 ?0                  	;0	>>166
	290 130  FE_FREE/127               ?0        $118                 ?0                  	;0	<<165
	291 134  GOTO/253                  ?0        ?53                  ?187                	;0
	292 136  INIT_METHOD_CALL/112      ?0        16?4                 188:'get_rows'      	;0
	293 136  DO_FCALL/60               $167=     ?0                   ?0                  	;0
	294 136  FE_RESET_R/77             $168=     $167                 ?304                	;0
	295 136  FE_FETCH_R/78             ?0        $168                 16?10               	;304	>>304	<<303
	296 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'intval'        	;1
	297 137  FETCH_DIM_FUNC_ARG/93     $169=     16?10                192:'id'            	;1
	298 137  SEND_VAR_EX/66            ?80       $169                 ?1                  	;0
	299 137  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
	300 137  FETCH_DIM_R/81            $172=     16?10                193:'tv_archive_duration'	;0
	301 137  ASSIGN_DIM/147            ?131      16?3                 $170                	;0
	302 137  OP_DATA/137               ?0        $172                 ?0                  	;0
	303 138  JMP/42                    ?0        ?295                 ?0                  	;0	>>295
	304 138  FE_FREE/127               ?0        $168                 ?0                  	;0	<<294
	305 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'date_default_timezone_set'	;1
	306 141  SEND_VAL_EX/116           ?80       196:'UTC'            ?1                  	;0
	307 141  DO_FCALL_BY_NAME/131      ?133      ?0                   ?0                  	;0
	308 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'glob'          	;1
	309 142  FETCH_CONSTANT/99         #174=     ?0                   199:'ARCHIVE_PATH'  	;16
	310 142  CONCAT/8                  #175=     #174                 202:'*'             	;0
	311 142  SEND_VAL_EX/116           ?80       #175                 ?1                  	;0
	312 142  DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
	313 142  FE_RESET_R/77             $177=     $176                 ?423                	;0
	314 142  FE_FETCH_R/78             ?0        $177                 16?17               	;423	>>423	<<422
	315 143  NOP/0                     ?0        ?0                   ?0                  	;1
	316 143  GOTO/253                  ?0        ?317                 ?203                	;0
	317 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'intval'        	;1
	318 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'basename'      	;1
	319 145  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	320 145  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
	321 145  SEND_VAR_NO_REF_EX/50     ?80       $178                 ?1                  	;0
	322 145  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
	323 145  ASSIGN/38                 ?140      16?1                 $179                	;0
	324 146  IS_SMALLER/19             #181=     208:0                16?1                	;0
	325 146  JMPZ_EX/46                #181=     #181                 ?332                	;0	>>332
	326 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'is_dir'        	;1
	327 146  FETCH_CONSTANT/99         #182=     ?0                   211:'ARCHIVE_PATH'  	;16
	328 146  CONCAT/8                  #183=     #182                 16?1                	;0
	329 146  SEND_VAL_EX/116           ?80       #183                 ?1                  	;0
	330 146  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
	331 146  BOOL/52                   #181=     $184                 ?0                  	;0
	332 146  BOOL_NOT/13               #185=     #181                 ?0                  	;0	<<325
	333 146  JMPZ/43                   ?0        #185                 ?336                	;0	>>336
	334 147  NOP/0                     ?0        ?0                   ?0                  	;1
	335 147  GOTO/253                  ?0        ?420                 ?214                	;0
	336 149  ISSET_ISEMPTY_DIM_OBJ/115 #186=     16?3                 16?1                	;33554432	<<333
	337 149  BOOL_NOT/13               #187=     #186                 ?0                  	;0
	338 149  JMPZ/43                   ?0        #187                 ?341                	;0	>>341
	339 150  NOP/0                     ?0        ?0                   ?0                  	;1
	340 150  GOTO/253                  ?0        ?411                 ?215                	;0
	341 152  FETCH_DIM_R/81            $188=     16?3                 16?1                	;0	<<338
	342 152  ASSIGN/38                 ?149      16?18                $188                	;0
	343 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'time'          	;0
	344 153  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
	345 153  MUL/3                     #191=     16?18                218:86400           	;0
	346 153  SUB/2                     #192=     $190                 #191                	;0
	347 153  ADD/1                     #193=     #192                 219:3600            	;0
	348 153  ASSIGN/38                 ?154      16?8                 #193                	;0
	349 154  NOP/0                     ?0        ?0                   ?0                  	;1
	350 154  GOTO/253                  ?0        ?351                 ?220                	;0
	351 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'glob'          	;1
	352 156  FETCH_CONSTANT/99         #195=     ?0                   223:'ARCHIVE_PATH'  	;16
	353 156  CONCAT/8                  #196=     #195                 16?1                	;0
	354 156  CONCAT/8                  #197=     #196                 226:'/*'            	;0
	355 156  SEND_VAL_EX/116           ?80       #197                 ?1                  	;0
	356 156  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
	357 156  FE_RESET_R/77             $199=     $198                 ?408                	;0
	358 156  FE_FETCH_R/78             ?0        $199                 16?19               	;408	>>408	<<407
	359 157  INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'explode'       	;2
	360 157  SEND_VAL_EX/116           ?80       229:':'              ?1                  	;0
	361 157  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'explode'       	;2
	362 157  SEND_VAL_EX/116           ?80       232:'.'              ?1                  	;0
	363 157  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'basename'      	;1
	364 157  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	365 157  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
	366 157  SEND_VAR_NO_REF_EX/50     ?96       $200                 ?2                  	;0
	367 157  DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
	368 157  SEPARATE/156              $201=     $201                 ?0                  	;0
	369 157  FETCH_DIM_FUNC_ARG/93     $202=     $201                 235:0               	;2
	370 157  SEND_VAR_EX/66            ?96       $202                 ?2                  	;0
	371 157  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
	372 157  FETCH_LIST/98             $204=     $203                 236:0               	;0
	373 157  ASSIGN/38                 ?165      16?20                $204                	;0
	374 157  FETCH_LIST/98             $206=     $203                 237:1               	;0
	375 157  ASSIGN/38                 ?167      16?21                $206                	;0
	376 157  FREE/70                   ?0        $203                 ?0                  	;0
	377 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'explode'       	;2
	378 158  SEND_VAL_EX/116           ?80       240:'-'              ?1                  	;0
	379 158  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
	380 158  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
	381 158  FETCH_LIST/98             $209=     $208                 241:0               	;0
	382 158  ASSIGN/38                 ?170      16?22                $209                	;0
	383 158  FETCH_LIST/98             $211=     $208                 242:1               	;0
	384 158  ASSIGN/38                 ?172      16?23                $211                	;0
	385 158  FREE/70                   ?0        $208                 ?0                  	;0
	386 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'strtotime'     	;1
	387 159  CONCAT/8                  #213=     16?20                245:' '             	;0
	388 159  CONCAT/8                  #214=     #213                 16?22               	;0
	389 159  CONCAT/8                  #215=     #214                 246:':'             	;0
	390 159  CONCAT/8                  #216=     #215                 16?23               	;0
	391 159  CONCAT/8                  #217=     #216                 247:':00'           	;0
	392 159  SEND_VAL_EX/116           ?80       #217                 ?1                  	;0
	393 159  DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
	394 159  ASSIGN/38                 ?179      16?24                $218                	;0
	395 160  IS_SMALLER/19             #220=     16?24                16?8                	;0
	396 160  BOOL_NOT/13               #221=     #220                 ?0                  	;0
	397 160  JMPZ/43                   ?0        #221                 ?401                	;0	>>401
	398 161  NOP/0                     ?0        ?0                   ?0                  	;1
	399 161  NOP/0                     ?0        ?0                   ?0                  	;1
	400 161  GOTO/253                  ?0        ?407                 ?248                	;0
	401 163  CONCAT/8                  #222=     249:'Deleting: '     16?19               	;0	<<397
	402 163  CONCAT/8                  #223=     #222                 250:'
'             	;0
	403 163  ECHO/40                   ?0        #223                 ?0                  	;0
	404 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'unlink'        	;1
	405 164  SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
	406 164  DO_FCALL_BY_NAME/131      ?184      ?0                   ?0                  	;0
	407 166  JMP/42                    ?0        ?358                 ?0                  	;0	>>358
	408 166  FE_FREE/127               ?0        $199                 ?0                  	;0	<<357
	409 169  NOP/0                     ?0        ?0                   ?0                  	;1
	410 169  GOTO/253                  ?0        ?420                 ?253                	;0
	411 171  CONCAT/8                  #225=     254:'Deleting: '     16?17               	;0
	412 171  CONCAT/8                  #226=     #225                 255:'
'             	;0
	413 171  ECHO/40                   ?0        #226                 ?0                  	;0
	414 172  NOP/0                     ?0        ?0                   ?0                  	;1
	415 172  GOTO/253                  ?0        ?416                 ?256                	;0
	416 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'exec'          	;1
	417 174  CONCAT/8                  #227=     259:'rm -rf '        16?17               	;0
	418 174  SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
	419 174  DO_FCALL_BY_NAME/131      ?188      ?0                   ?0                  	;0
	420 178  NOP/0                     ?0        ?0                   ?0                  	;1
	421 178  GOTO/253                  ?0        ?422                 ?260                	;0
	422 179  JMP/42                    ?0        ?314                 ?0                  	;0	>>314
	423 179  FE_FREE/127               ?0        $177                 ?0                  	;0	<<313
	424 182  GOTO/253                  ?0        ?92                  ?261                	;0
	425 186  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'intval'        	;1
	426 186  FETCH_STATIC_PROP_FUNC_ARG/177 $229=     264:'rSettings'      265:'XUI'           	;1
	427 186  FETCH_DIM_FUNC_ARG/93     $230=     $229                 267:'check_vod'     	;1
	428 186  SEND_VAR_EX/66            ?80       $230                 ?1                  	;0
	429 186  DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
	430 186  IS_EQUAL/17               #232=     $231                 268:1               	;0
	431 186  BOOL_NOT/13               #233=     #232                 ?0                  	;0
	432 186  JMPZ/43                   ?0        #233                 ?434                	;0	>>434
	433 187  GOTO/253                  ?0        ?53                  ?269                	;0
	434 189  INIT_METHOD_CALL/112      ?0        16?4                 270:'query'         	;2	<<432
	435 189  SEND_VAL_EX/116           ?80       272:'SELECT `server_stream_id`, `id`, `target_container`, `movie_properties`, `stream_status` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `server_id` = ? AND `type` IN (2,5) AND `streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0;' ?1                  	;0
	436 189  FETCH_CONSTANT/99         #234=     ?0                   273:'SERVER_ID'     	;16
	437 189  SEND_VAL_EX/116           ?96       #234                 ?2                  	;0
	438 189  DO_FCALL/60               ?195      ?0                   ?0                  	;0
	439 190  INIT_METHOD_CALL/112      ?0        16?4                 276:'num_rows'      	;0
	440 190  DO_FCALL/60               $236=     ?0                   ?0                  	;0
	441 190  IS_SMALLER/19             #237=     278:0                $236                	;0
	442 190  BOOL_NOT/13               #238=     #237                 ?0                  	;0
	443 190  JMPZ/43                   ?0        #238                 ?445                	;0	>>445
	444 191  GOTO/253                  ?0        ?771                 ?279                	;0
	445 193  GOTO/253                  ?0        ?446                 ?280                	;0	<<443
	446 195  INIT_METHOD_CALL/112      ?0        16?4                 281:'get_rows'      	;0
	447 195  DO_FCALL/60               $239=     ?0                   ?0                  	;0
	448 195  ASSIGN/38                 ?200      16?25                $239                	;0
	449 196  FE_RESET_R/77             $241=     16?25                ?770                	;0
	450 196  FE_FETCH_R/78             ?0        $241                 16?10               	;770	>>770	<<769
	451 197  NOP/0                     ?0        ?0                   ?0                  	;1
	452 197  GOTO/253                  ?0        ?486                 ?283                	;0
	453 201  INIT_METHOD_CALL/112      ?0        16?4                 284:'query'         	;3
	454 201  SEND_VAL_EX/116           ?80       286:'UPDATE `streams` SET `movie_properties` = ? WHERE `id` = ?' ?1                  	;0
	455 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'json_encode'   	;2
	456 201  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	457 201  FETCH_CONSTANT/99         #242=     ?0                   289:'JSON_UNESCAPED_UNICODE'	;16
	458 201  SEND_VAL_EX/116           ?96       #242                 ?2                  	;0
	459 201  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
	460 201  SEND_VAR_NO_REF_EX/50     ?96       $243                 ?2                  	;0
	461 201  FETCH_DIM_FUNC_ARG/93     $244=     16?10                292:'id'            	;3
	462 201  SEND_VAR_EX/66            ?112      $244                 ?3                  	;0
	463 201  DO_FCALL/60               ?205      ?0                   ?0                  	;0
	464 202  INIT_METHOD_CALL/112      ?0        16?4                 293:'query'         	;8
	465 202  SEND_VAL_EX/116           ?80       295:'UPDATE `streams_servers` SET `bitrate` = ?,`to_analyze` = 0,`stream_status` = 0,`stream_info` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `compatible` = ? WHERE `server_stream_id` = ?' ?1                  	;0
	466 202  SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
	467 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'json_encode'   	;2
	468 202  SEND_VAR_EX/66            ?80       16?28                ?1                  	;0
	469 202  FETCH_CONSTANT/99         #246=     ?0                   298:'JSON_UNESCAPED_UNICODE'	;16
	470 202  SEND_VAL_EX/116           ?96       #246                 ?2                  	;0
	471 202  DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
	472 202  SEND_VAR_NO_REF_EX/50     ?112      $247                 ?3                  	;0
	473 202  SEND_VAR_EX/66            ?128      16?29                ?4                  	;0
	474 202  SEND_VAR_EX/66            ?144      16?30                ?5                  	;0
	475 202  SEND_VAR_EX/66            ?160      16?31                ?6                  	;0
	476 202  SEND_VAR_EX/66            ?176      16?32                ?7                  	;0
	477 202  FETCH_DIM_FUNC_ARG/93     $248=     16?10                301:'server_stream_id'	;8
	478 202  SEND_VAR_EX/66            ?192      $248                 ?8                  	;0
	479 202  DO_FCALL/60               ?209      ?0                   ?0                  	;0
	480 203  INIT_STATIC_METHOD_CALL/113 ?0        302:'XUI'            304:'caC325153A658c37'	;1
	481 203  FETCH_DIM_FUNC_ARG/93     $250=     16?10                306:'id'            	;1
	482 203  SEND_VAR_EX/66            ?80       $250                 ?1                  	;0
	483 203  DO_FCALL/60               ?211      ?0                   ?0                  	;0
	484 204  NOP/0                     ?0        ?0                   ?0                  	;1
	485 204  GOTO/253                  ?0        ?764                 ?307                	;0
	486 206  FETCH_CONSTANT/99         #252=     ?0                   308:'VOD_PATH'      	;16
	487 206  FETCH_DIM_R/81            $253=     16?10                311:'id'            	;0
	488 206  CONCAT/8                  #254=     #252                 $253                	;0
	489 206  CONCAT/8                  #255=     #254                 312:'.'             	;0
	490 206  FETCH_DIM_R/81            $256=     16?10                313:'target_container'	;0
	491 206  CONCAT/8                  #257=     #255                 $256                	;0
	492 206  ASSIGN/38                 ?218      16?33                #257                	;0
	493 207  FETCH_DIM_R/81            $259=     16?10                314:'stream_status' 	;0
	494 207  IS_EQUAL/17               #260=     $259                 315:0               	;0
	495 207  JMPZ/43                   ?0        #260                 ?498                	;0	>>498
	496 208  NOP/0                     ?0        ?0                   ?0                  	;1
	497 208  GOTO/253                  ?0        ?767                 ?316                	;0
	498 210  FETCH_DIM_R/81            $261=     16?10                317:'stream_status' 	;0	<<495
	499 210  IS_EQUAL/17               #262=     $261                 318:1               	;0
	500 210  BOOL_NOT/13               #263=     #262                 ?0                  	;0
	501 210  JMPZ/43                   ?0        #263                 ?504                	;0	>>504
	502 211  NOP/0                     ?0        ?0                   ?0                  	;1
	503 211  GOTO/253                  ?0        ?765                 ?319                	;0
	504 213  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'file_exists'   	;1	<<501
	505 213  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	506 213  DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
	507 213  JMPZ_EX/46                #265=     $264                 ?513                	;0	>>513
	508 213  INIT_STATIC_METHOD_CALL/113 ?0        322:'XUI'            324:'E57006536Cd5655d'	;1
	509 213  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	510 213  DO_FCALL/60               $266=     ?0                   ?0                  	;0
	511 213  ASSIGN/38                 $267=     16?28                $266                	;0
	512 213  BOOL/52                   #265=     $267                 ?0                  	;0
	513 213  BOOL_NOT/13               #268=     #265                 ?0                  	;0	<<507
	514 213  JMPZ/43                   ?0        #268                 ?517                	;0	>>517
	515 214  NOP/0                     ?0        ?0                   ?0                  	;1
	516 214  GOTO/253                  ?0        ?765                 ?326                	;0
	517 216  ISSET_ISEMPTY_DIM_OBJ/115 #269=     16?28                327:'duration'      	;33554432	<<514
	518 216  JMPZ/43                   ?0        #269                 ?522                	;0	>>522
	519 216  FETCH_DIM_R/81            $270=     16?28                328:'duration'      	;0
	520 216  QM_ASSIGN/22              #271=     $270                 ?0                  	;0
	521 216  JMP/42                    ?0        ?523                 ?0                  	;0	>>523
	522 216  QM_ASSIGN/22              #271=     329:0                ?0                  	;0	<<518
	523 216  ASSIGN/38                 ?232      16?18                #271                	;0	<<521
	524 217  NOP/0                     ?0        ?0                   ?0                  	;1
	525 217  GOTO/253                  ?0        ?610                 ?330                	;0
	526 220  FETCH_DIM_IS/90           $273=     16?28                331:'codecs'        	;0
	527 220  ISSET_ISEMPTY_DIM_OBJ/115 #274=     $273                 332:'subtitle'      	;33554432
	528 220  JMPZ_EX/46                #274=     #274                 ?532                	;0	>>532
	529 220  FETCH_STATIC_PROP_R/173   $275=     333:'rSettings'      334:'XUI'           	;0
	530 220  FETCH_DIM_R/81            $276=     $275                 336:'extract_subtitles'	;0
	531 220  BOOL/52                   #274=     $276                 ?0                  	;0
	532 220  BOOL_NOT/13               #277=     #274                 ?0                  	;0	<<528
	533 220  JMPZ/43                   ?0        #277                 ?536                	;0	>>536
	534 221  NOP/0                     ?0        ?0                   ?0                  	;1
	535 221  GOTO/253                  ?0        ?553                 ?337                	;0
	536 223  ASSIGN/38                 ?238      16?34                338:0               	;0	<<533
	537 224  FETCH_DIM_R/81            $279=     16?28                339:'codecs'        	;0
	538 224  FETCH_DIM_R/81            $280=     $279                 340:'subtitle'      	;0
	539 224  FE_RESET_R/77             $281=     $280                 ?550                	;0
	540 224  FE_FETCH_R/78             ?0        $281                 16?35               	;550	>>550	<<549
	541 225  INIT_STATIC_METHOD_CALL/113 ?0        341:'XUI'            343:'extractSubtitle'	;3
	542 225  FETCH_DIM_FUNC_ARG/93     $282=     16?10                345:'stream_id'     	;1
	543 225  SEND_VAR_EX/66            ?80       $282                 ?1                  	;0
	544 225  SEND_VAR_EX/66            ?96       16?33                ?2                  	;0
	545 225  SEND_VAR_EX/66            ?112      16?34                ?3                  	;0
	546 225  DO_FCALL/60               ?243      ?0                   ?0                  	;0
	547 226  POST_INC/36               #284=     16?34                ?0                  	;0
	548 226  FREE/70                   ?0        #284                 ?0                  	;0
	549 227  JMP/42                    ?0        ?540                 ?0                  	;0	>>540
	550 227  FE_FREE/127               ?0        $281                 ?0                  	;0	<<539
	551 230  NOP/0                     ?0        ?0                   ?0                  	;1
	552 230  GOTO/253                  ?0        ?553                 ?346                	;0
	553 233  ASSIGN/38                 ?245      16?32                347:0               	;0
	554 234  ASSIGN/38                 $286=     16?31                348:NULL            	;0
	555 234  ASSIGN/38                 $287=     16?30                $286                	;0
	556 234  ASSIGN/38                 ?248      16?29                $287                	;0
	557 235  BOOL_NOT/13               #289=     16?28                ?0                  	;0
	558 235  JMPZ/43                   ?0        #289                 ?561                	;0	>>561
	559 236  NOP/0                     ?0        ?0                   ?0                  	;1
	560 236  GOTO/253                  ?0        ?453                 ?349                	;0
	561 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   350:'intval'        	;1	<<558
	562 238  INIT_STATIC_METHOD_CALL/113 ?0        352:'XUI'            354:'d00C33c8075D14a5'	;1
	563 238  SEND_VAR_EX/66            ?80       16?28                ?1                  	;0
	564 238  DO_FCALL/60               $290=     ?0                   ?0                  	;0
	565 238  SEND_VAR_NO_REF_EX/50     ?80       $290                 ?1                  	;0
	566 238  DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
	567 238  ASSIGN/38                 ?252      16?32                $291                	;0
	568 239  NOP/0                     ?0        ?0                   ?0                  	;1
	569 239  GOTO/253                  ?0        ?647                 ?356                	;0
	570 241  ISSET_ISEMPTY_DIM_OBJ/115 #293=     16?26                357:'audio'         	;33554432
	571 241  BOOL_NOT/13               #294=     #293                 ?0                  	;0
	572 241  JMPNZ_EX/47               #294=     #294                 ?579                	;0	>>579
	573 241  FETCH_DIM_R/81            $295=     16?28                358:'codecs'        	;0
	574 241  FETCH_DIM_R/81            $296=     $295                 359:'audio'         	;0
	575 241  FETCH_DIM_R/81            $297=     $296                 360:'codec_name'    	;0
	576 241  FETCH_DIM_R/81            $298=     16?26                361:'audio'         	;0
	577 241  IS_NOT_EQUAL/18           #299=     $297                 $298                	;0
	578 241  BOOL/52                   #294=     #299                 ?0                  	;0
	579 241  BOOL_NOT/13               #300=     #294                 ?0                  	;0	<<572
	580 241  JMPZ/43                   ?0        #300                 ?583                	;0	>>583
	581 242  NOP/0                     ?0        ?0                   ?0                  	;1
	582 242  GOTO/253                  ?0        ?587                 ?362                	;0
	583 244  FETCH_DIM_R/81            $302=     16?28                364:'codecs'        	;0	<<580
	584 244  FETCH_DIM_R/81            $303=     $302                 365:'audio'         	;0
	585 244  ASSIGN_DIM/147            ?261      16?26                363:'audio'         	;0
	586 244  OP_DATA/137               ?0        $303                 ?0                  	;0
	587 246  FETCH_STATIC_PROP_R/173   $304=     366:'rSettings'      367:'XUI'           	;0
	588 246  FETCH_DIM_R/81            $305=     $304                 369:'extract_subtitles'	;0
	589 246  BOOL_NOT/13               #306=     $305                 ?0                  	;0
	590 246  JMPZ/43                   ?0        #306                 ?593                	;0	>>593
	591 247  NOP/0                     ?0        ?0                   ?0                  	;1
	592 247  GOTO/253                  ?0        ?748                 ?370                	;0
	593 249  ISSET_ISEMPTY_DIM_OBJ/115 #307=     16?26                371:'subtitle'      	;33554432	<<590
	594 249  BOOL_NOT/13               #308=     #307                 ?0                  	;0
	595 249  JMPNZ_EX/47               #308=     #308                 ?602                	;0	>>602
	596 249  FETCH_DIM_R/81            $309=     16?28                372:'codecs'        	;0
	597 249  FETCH_DIM_R/81            $310=     $309                 373:'subtitle'      	;0
	598 249  FETCH_DIM_R/81            $311=     $310                 374:'codec_name'    	;0
	599 249  FETCH_DIM_R/81            $312=     16?26                375:'subtitle'      	;0
	600 249  IS_NOT_EQUAL/18           #313=     $311                 $312                	;0
	601 249  BOOL/52                   #308=     #313                 ?0                  	;0
	602 249  BOOL_NOT/13               #314=     #308                 ?0                  	;0	<<595
	603 249  JMPZ/43                   ?0        #314                 ?606                	;0	>>606
	604 250  NOP/0                     ?0        ?0                   ?0                  	;1
	605 250  GOTO/253                  ?0        ?748                 ?376                	;0
	606 252  NOP/0                     ?0        ?0                   ?0                  	;1	<<603
	607 252  GOTO/253                  ?0        ?744                 ?377                	;0
	608 256  NOP/0                     ?0        ?0                   ?0                  	;1
	609 256  GOTO/253                  ?0        ?769                 ?378                	;0
	610 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   379:'sscanf'        	;5
	611 258  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
	612 258  SEND_VAL_EX/116           ?96       381:'%d:%d:%d'       ?2                  	;0
	613 258  SEND_VAR_EX/66            ?112      16?36                ?3                  	;0
	614 258  SEND_VAR_EX/66            ?128      16?37                ?4                  	;0
	615 258  SEND_VAR_EX/66            ?144      16?38                ?5                  	;0
	616 258  DO_FCALL_BY_NAME/131      ?275      ?0                   ?0                  	;0
	617 259  ISSET_ISEMPTY_CV/197      #316=     16?38                ?0                  	;33554432
	618 259  JMPZ/43                   ?0        #316                 ?625                	;0	>>625
	619 259  MUL/3                     #317=     16?36                382:3600            	;0
	620 259  MUL/3                     #318=     16?37                383:60              	;0
	621 259  ADD/1                     #319=     #317                 #318                	;0
	622 259  ADD/1                     #320=     #319                 16?38               	;0
	623 259  QM_ASSIGN/22              #321=     #320                 ?0                  	;0
	624 259  JMP/42                    ?0        ?628                 ?0                  	;0	>>628
	625 259  MUL/3                     #322=     16?36                384:60              	;0	<<618
	626 259  ADD/1                     #323=     #322                 16?37               	;0
	627 259  QM_ASSIGN/22              #321=     #323                 ?0                  	;0
	628 259  ASSIGN/38                 ?284      16?38                #321                	;0	<<624
	629 260  INIT_FCALL_BY_NAME/59     ?0        ?0                   385:'filesize'      	;1
	630 260  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	631 260  DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
	632 260  ASSIGN/38                 ?286      16?39                $325                	;0
	633 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   387:'round'         	;1
	634 261  MUL/3                     #327=     16?39                389:0.008           	;0
	635 261  DIV/4                     #328=     #327                 16?38               	;0
	636 261  SEND_VAL_EX/116           ?80       #328                 ?1                  	;0
	637 261  DO_FCALL_BY_NAME/131      $329=     ?0                   ?0                  	;0
	638 261  ASSIGN/38                 ?290      16?27                $329                	;0
	639 262  INIT_FCALL_BY_NAME/59     ?0        ?0                   390:'json_decode'   	;2
	640 262  FETCH_DIM_FUNC_ARG/93     $331=     16?10                392:'movie_properties'	;1
	641 262  SEND_VAR_EX/66            ?80       $331                 ?1                  	;0
	642 262  SEND_VAL_EX/116           ?96       393:true             ?2                  	;0
	643 262  DO_FCALL_BY_NAME/131      $332=     ?0                   ?0                  	;0
	644 262  ASSIGN/38                 ?293      16?26                $332                	;0
	645 263  NOP/0                     ?0        ?0                   ?0                  	;1
	646 263  GOTO/253                  ?0        ?715                 ?394                	;0
	647 265  FETCH_DIM_R/81            $334=     16?28                395:'codecs'        	;0
	648 265  FETCH_DIM_R/81            $335=     $334                 396:'audio'         	;0
	649 265  FETCH_DIM_R/81            $336=     $335                 397:'codec_name'    	;0
	650 265  JMP_SET/152               #337=     $336                 ?652                	;0
	651 265  QM_ASSIGN/22              #337=     398:NULL             ?0                  	;0
	652 265  ASSIGN/38                 ?298      16?29                #337                	;0
	653 266  FETCH_DIM_R/81            $339=     16?28                399:'codecs'        	;0
	654 266  FETCH_DIM_R/81            $340=     $339                 400:'video'         	;0
	655 266  FETCH_DIM_R/81            $341=     $340                 401:'codec_name'    	;0
	656 266  JMP_SET/152               #342=     $341                 ?658                	;0
	657 266  QM_ASSIGN/22              #342=     402:NULL             ?0                  	;0
	658 266  ASSIGN/38                 ?303      16?30                #342                	;0
	659 267  FETCH_DIM_R/81            $344=     16?28                403:'codecs'        	;0
	660 267  FETCH_DIM_R/81            $345=     $344                 404:'video'         	;0
	661 267  FETCH_DIM_R/81            $346=     $345                 405:'height'        	;0
	662 267  JMP_SET/152               #347=     $346                 ?664                	;0
	663 267  QM_ASSIGN/22              #347=     406:NULL             ?0                  	;0
	664 267  ASSIGN/38                 ?308      16?31                #347                	;0
	665 268  BOOL_NOT/13               #349=     16?31                ?0                  	;0
	666 268  JMPZ/43                   ?0        #349                 ?669                	;0	>>669
	667 269  NOP/0                     ?0        ?0                   ?0                  	;1
	668 269  GOTO/253                  ?0        ?453                 ?407                	;0
	669 271  INIT_STATIC_METHOD_CALL/113 ?0        408:'XUI'            410:'b954Bd7c2beC3c82'	;2	<<666
	670 271  SEND_VAL_EX/116           ?80       412:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?1                  	;0
	671 271  SEND_VAR_EX/66            ?96       16?31                ?2                  	;0
	672 271  DO_FCALL/60               $350=     ?0                   ?0                  	;0
	673 271  ASSIGN/38                 ?311      16?31                $350                	;0
	674 272  NOP/0                     ?0        ?0                   ?0                  	;1
	675 272  GOTO/253                  ?0        ?453                 ?413                	;0
	676 274  ASSIGN_DIM/147            ?312      16?26                414:'duration'      	;0
	677 274  OP_DATA/137               ?0        16?18                ?0                  	;0
	678 276  ISSET_ISEMPTY_DIM_OBJ/115 #353=     16?26                415:'video'         	;33554432
	679 276  BOOL_NOT/13               #354=     #353                 ?0                  	;0
	680 276  JMPNZ_EX/47               #354=     #354                 ?687                	;0	>>687
	681 276  FETCH_DIM_R/81            $355=     16?28                416:'codecs'        	;0
	682 276  FETCH_DIM_R/81            $356=     $355                 417:'video'         	;0
	683 276  FETCH_DIM_R/81            $357=     $356                 418:'codec_name'    	;0
	684 276  FETCH_DIM_R/81            $358=     16?26                419:'video'         	;0
	685 276  IS_NOT_EQUAL/18           #359=     $357                 $358                	;0
	686 276  BOOL/52                   #354=     #359                 ?0                  	;0
	687 276  BOOL_NOT/13               #360=     #354                 ?0                  	;0	<<680
	688 276  JMPZ/43                   ?0        #360                 ?691                	;0	>>691
	689 277  NOP/0                     ?0        ?0                   ?0                  	;1
	690 277  GOTO/253                  ?0        ?695                 ?420                	;0
	691 279  FETCH_DIM_R/81            $362=     16?28                422:'codecs'        	;0	<<688
	692 279  FETCH_DIM_R/81            $363=     $362                 423:'video'         	;0
	693 279  ASSIGN_DIM/147            ?321      16?26                421:'video'         	;0
	694 279  OP_DATA/137               ?0        $363                 ?0                  	;0
	695 281  NOP/0                     ?0        ?0                   ?0                  	;1
	696 281  GOTO/253                  ?0        ?570                 ?424                	;0
	697 283  INIT_FCALL_BY_NAME/59     ?0        ?0                   425:'file_exists'   	;1
	698 283  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
	699 283  DO_FCALL_BY_NAME/131      $364=     ?0                   ?0                  	;0
	700 283  JMPZ/43                   ?0        $364                 ?703                	;0	>>703
	701 284  NOP/0                     ?0        ?0                   ?0                  	;1
	702 284  GOTO/253                  ?0        ?713                 ?427                	;0
	703 286  ECHO/40                   ?0        428:'BAD MOVIE
'     ?0                  	;0	<<700
	704 287  INIT_METHOD_CALL/112      ?0        16?4                 429:'query'         	;2
	705 287  SEND_VAL_EX/116           ?80       431:'UPDATE `streams_servers` SET `stream_status` = 1 WHERE `server_stream_id` = ?' ?1                  	;0
	706 287  FETCH_DIM_FUNC_ARG/93     $365=     16?10                432:'server_stream_id'	;2
	707 287  SEND_VAR_EX/66            ?96       $365                 ?2                  	;0
	708 287  DO_FCALL/60               ?326      ?0                   ?0                  	;0
	709 288  INIT_STATIC_METHOD_CALL/113 ?0        433:'XUI'            435:'cAC325153A658c37'	;1
	710 288  FETCH_DIM_FUNC_ARG/93     $367=     16?10                437:'id'            	;1
	711 288  SEND_VAR_EX/66            ?80       $367                 ?1                  	;0
	712 288  DO_FCALL/60               ?328      ?0                   ?0                  	;0
	713 290  NOP/0                     ?0        ?0                   ?0                  	;1
	714 290  GOTO/253                  ?0        ?608                 ?438                	;0
	715 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   439:'is_array'      	;1
	716 292  SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
	717 292  DO_FCALL_BY_NAME/131      $369=     ?0                   ?0                  	;0
	718 292  JMPZ/43                   ?0        $369                 ?721                	;0	>>721
	719 293  NOP/0                     ?0        ?0                   ?0                  	;1
	720 293  GOTO/253                  ?0        ?722                 ?441                	;0
	721 295  ASSIGN/38                 ?330      16?26                442:array (
)       	;0	<<718
	722 297  ISSET_ISEMPTY_DIM_OBJ/115 #371=     16?26                443:'duration_secs' 	;33554432
	723 297  BOOL_NOT/13               #372=     #371                 ?0                  	;0
	724 297  JMPNZ_EX/47               #372=     #372                 ?728                	;0	>>728
	725 297  FETCH_DIM_R/81            $373=     16?26                444:'duration_secs' 	;0
	726 297  IS_NOT_EQUAL/18           #374=     16?38                $373                	;0
	727 297  BOOL/52                   #372=     #374                 ?0                  	;0
	728 297  BOOL_NOT/13               #375=     #372                 ?0                  	;0	<<724
	729 297  JMPZ/43                   ?0        #375                 ?732                	;0	>>732
	730 298  NOP/0                     ?0        ?0                   ?0                  	;1
	731 298  GOTO/253                  ?0        ?678                 ?445                	;0
	732 300  ASSIGN_DIM/147            ?336      16?26                446:'duration_secs' 	;0	<<729
	733 300  OP_DATA/137               ?0        16?38                ?0                  	;0
	734 301  NOP/0                     ?0        ?0                   ?0                  	;1
	735 301  GOTO/253                  ?0        ?676                 ?447                	;0
	736 303  FETCH_DIM_R/81            $377=     16?26                448:'bitrate'       	;0
	737 303  ASSIGN/38                 ?338      16?27                $377                	;0
	738 304  NOP/0                     ?0        ?0                   ?0                  	;1
	739 304  GOTO/253                  ?0        ?742                 ?449                	;0
	740 306  ASSIGN_DIM/147            ?339      16?26                450:'bitrate'       	;0
	741 306  OP_DATA/137               ?0        16?27                ?0                  	;0
	742 308  NOP/0                     ?0        ?0                   ?0                  	;1
	743 308  GOTO/253                  ?0        ?526                 ?451                	;0
	744 310  FETCH_DIM_R/81            $381=     16?28                453:'codecs'        	;0
	745 310  FETCH_DIM_R/81            $382=     $381                 454:'subtitle'      	;0
	746 310  ASSIGN_DIM/147            ?340      16?26                452:'subtitle'      	;0
	747 310  OP_DATA/137               ?0        $382                 ?0                  	;0
	748 313  ISSET_ISEMPTY_DIM_OBJ/115 #383=     16?26                455:'bitrate'       	;33554432
	749 313  BOOL_NOT/13               #384=     #383                 ?0                  	;0
	750 313  JMPNZ_EX/47               #384=     #384                 ?754                	;0	>>754
	751 313  FETCH_DIM_R/81            $385=     16?26                456:'bitrate'       	;0
	752 313  IS_NOT_EQUAL/18           #386=     16?27                $385                	;0
	753 313  BOOL/52                   #384=     #386                 ?0                  	;0
	754 313  BOOL_NOT/13               #387=     #384                 ?0                  	;0	<<750
	755 313  JMPZ/43                   ?0        #387                 ?758                	;0	>>758
	756 314  NOP/0                     ?0        ?0                   ?0                  	;1
	757 314  GOTO/253                  ?0        ?526                 ?457                	;0
	758 316  IS_SMALLER/19             #388=     458:0                16?27               	;0	<<755
	759 316  JMPZ/43                   ?0        #388                 ?762                	;0	>>762
	760 317  NOP/0                     ?0        ?0                   ?0                  	;1
	761 317  GOTO/253                  ?0        ?740                 ?459                	;0
	762 319  NOP/0                     ?0        ?0                   ?0                  	;1	<<759
	763 319  GOTO/253                  ?0        ?736                 ?460                	;0
	764 321  ECHO/40                   ?0        461:'VALID MOVIE
'   ?0                  	;0
	765 324  NOP/0                     ?0        ?0                   ?0                  	;1
	766 324  GOTO/253                  ?0        ?608                 ?462                	;0
	767 326  NOP/0                     ?0        ?0                   ?0                  	;1
	768 326  GOTO/253                  ?0        ?697                 ?463                	;0
	769 327  JMP/42                    ?0        ?450                 ?0                  	;0	>>450
	770 327  FE_FREE/127               ?0        $241                 ?0                  	;0	<<449
	771 331  INIT_METHOD_CALL/112      ?0        16?4                 464:'query'         	;2
	772 331  SEND_VAL_EX/116           ?80       466:'SELECT `id`, `stream_display_name`, `server_stream_id` FROM `streams` t1 INNER JOIN `streams_servers` t3 ON t3.stream_id = t1.id LEFT JOIN `profiles` t2 ON t2.profile_id = t1.transcode_profile_id WHERE t1.type = 3 AND t3.server_id = ? AND JSON_CONTAINS(t3.cchannel_rsources, t1.stream_source) AND JSON_CONTAINS(t1.stream_source, t3.cchannel_rsources) AND t3.pids_create_channel = \'[]\';' ?1                  	;0
	773 331  FETCH_CONSTANT/99         #389=     ?0                   467:'SERVER_ID'     	;16
	774 331  SEND_VAL_EX/116           ?96       #389                 ?2                  	;0
	775 331  DO_FCALL/60               ?350      ?0                   ?0                  	;0
	776 332  GOTO/253                  ?0        ?156                 ?470                	;0
	777 334  BIND_GLOBAL/168           ?0        16?4                 471:'b62d6460eb33ea07'	;0	<<0
	778 335  INIT_FCALL_BY_NAME/59     ?0        ?0                   472:'intval'        	;1
	779 335  FETCH_STATIC_PROP_FUNC_ARG/177 $391=     474:'rSettings'      475:'XUI'           	;1
	780 335  FETCH_DIM_FUNC_ARG/93     $392=     $391                 477:'cleanup'       	;1
	781 335  SEND_VAR_EX/66            ?80       $392                 ?1                  	;0
	782 335  DO_FCALL_BY_NAME/131      $393=     ?0                   ?0                  	;0
	783 335  IS_EQUAL/17               #394=     $393                 478:1               	;0
	784 335  BOOL_NOT/13               #395=     #394                 ?0                  	;0
	785 335  JMPZ/43                   ?0        #395                 ?787                	;0	>>787
	786 336  GOTO/253                  ?0        ?425                 ?479                	;0
	787 338  ASSIGN/38                 ?356      16?2                 480:array (
)       	;0	<<785
	788 339  INIT_METHOD_CALL/112      ?0        16?4                 481:'query'         	;2
	789 339  SEND_VAL_EX/116           ?80       483:'SELECT `id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`type` IN (1,3,4) AND `streams_servers`.`server_id` = ?;' ?1                  	;0
	790 339  FETCH_CONSTANT/99         #397=     ?0                   484:'SERVER_ID'     	;16
	791 339  SEND_VAL_EX/116           ?96       #397                 ?2                  	;0
	792 339  DO_FCALL/60               ?358      ?0                   ?0                  	;0
	793 340  INIT_METHOD_CALL/112      ?0        16?4                 487:'get_rows'      	;0
	794 340  DO_FCALL/60               $399=     ?0                   ?0                  	;0
	795 340  FE_RESET_R/77             $400=     $399                 ?804                	;0
	796 340  FE_FETCH_R/78             ?0        $400                 16?10               	;804	>>804	<<803
	797 341  INIT_FCALL_BY_NAME/59     ?0        ?0                   489:'intval'        	;1
	798 341  FETCH_DIM_FUNC_ARG/93     $402=     16?10                491:'id'            	;1
	799 341  SEND_VAR_EX/66            ?80       $402                 ?1                  	;0
	800 341  DO_FCALL_BY_NAME/131      $403=     ?0                   ?0                  	;0
	801 341  ASSIGN_DIM/147            ?361      16?2                 ?4414262            	;0
	802 341  OP_DATA/137               ?0        $403                 ?0                  	;0
	803 342  JMP/42                    ?0        ?796                 ?0                  	;0	>>796
	804 342  FE_FREE/127               ?0        $400                 ?0                  	;0	<<795
	805 344  GOTO/253                  ?0        ?1                   ?492                	;0
	806 346  NOP/0                     ?0        493:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   358  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   358  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   359  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   359  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   359  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   359  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   359  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   360  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   362  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   362  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  364  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  364  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  364  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  364  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  364  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  365  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?4                   ?0                  	;0	>>4
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'ab8369074Df2AAa3'	;0
2   5    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
3   6    GOTO/253                  ?0        ?62                  ?3                  	;0
4   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'posix_getpwuid'  	;1	<<0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'posix_geteuid'   	;0
6   8    DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
7   8    SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
8   8    DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
9   8    FETCH_DIM_R/81            $6=       $5                   8:'name'            	;0
10  8    IS_NOT_EQUAL/18           #7=       $6                   9:'xui'             	;0
11  8    BOOL_NOT/13               #8=       #7                   ?0                  	;0
12  8    JMPZ/43                   ?0        #8                   ?14                 	;0	>>14
13  9    GOTO/253                  ?0        ?15                  ?10                 	;0
14  11   EXIT/79                   ?0        11:'Please run as XUI!
' ?0                  	;0	<<12
15  13   BEGIN_SILENCE/57          #9=       ?0                   ?0                  	;0
16  13   FETCH_R/80                $10=      12:'argc'            ?0                  	;268435456
17  13   END_SILENCE/58            ?0        #9                   ?0                  	;0
18  13   JMPZ/43                   ?0        $10                  ?20                 	;0	>>20
19  14   GOTO/253                  ?0        ?35                  ?13                 	;0
20  16   EXIT/79                   ?0        14:0                 ?0                  	;0	<<18
21  17   GOTO/253                  ?0        ?35                  ?15                 	;0
22  19   INIT_STATIC_METHOD_CALL/113 ?0        16:'XUI'             18:'A3cf732C257Bd804'	;1
23  19   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
24  19   DO_FCALL/60               ?8        ?0                   ?0                  	;0
25  20   ASSIGN/38                 ?9        16?1                 20:3600             	;0
26  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'set_time_limit' 	;1
27  21   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
28  21   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
29  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'ini_set'        	;2
30  22   SEND_VAL_EX/116           ?80       25:'max_execution_time' ?1                  	;0
31  22   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
32  22   DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
33  24   NOP/0                     ?0        ?0                   ?0                  	;0
34  347  GOTO/253                  ?0        ?1                   ?26                 	;0
35  350  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'register_shutdown_function'	;1
36  350  SEND_VAL_EX/116           ?80       29:'shutdown'        ?1                  	;0
37  350  DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
38  351  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'str_replace'    	;3
39  351  SEND_VAL_EX/116           ?80       32:'\\'              ?1                  	;0
40  351  SEND_VAL_EX/116           ?96       33:'/'               ?2                  	;0
41  351  INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'dirname'        	;1
42  351  FETCH_DIM_FUNC_ARG/93     $16=      16?2                 36:0                	;1
43  351  SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
44  351  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
45  351  SEND_VAR_NO_REF_EX/50     ?112      $17                  ?3                  	;0
46  351  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
47  351  CONCAT/8                  #19=      $18                  37:'/../www/init.php'	;0
48  351  INCLUDE_OR_EVAL/73        ?17       #19                  ?0                  	;8
49  352  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'cli_set_process_title'	;1
50  352  SEND_VAL_EX/116           ?80       40:'XUI[Cleanup]'    ?1                  	;0
51  352  DO_FCALL_BY_NAME/131      ?18       ?0                   ?0                  	;0
52  353  FETCH_CONSTANT/99         #22=      ?0                   41:'CRONS_TMP_PATH' 	;16
53  353  INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'md5'            	;1
54  353  INIT_STATIC_METHOD_CALL/113 ?0        46:'XUI'             48:'a336B0Dad3EAF634'	;0
55  353  DO_FCALL/60               $23=      ?0                   ?0                  	;0
56  353  CONCAT/8                  #24=      $23                  50:'crons\\cleanup.php'	;0
57  353  SEND_VAL_EX/116           ?80       #24                  ?1                  	;0
58  353  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
59  353  CONCAT/8                  #26=      #22                  $25                 	;0
60  353  ASSIGN/38                 ?24       16?0                 #26                 	;0
61  354  GOTO/253                  ?0        ?22                  ?51                 	;0
62  356  NOP/0                     ?0        ?0                   ?0                  	;0
63  366  NOP/0                     ?0        52:1                 ?0                  	;4294967295
*/

?>