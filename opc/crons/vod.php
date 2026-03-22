<?php


function Ab8369074dF2aaa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   27   JMP/42                    ?0        ?385                 ?0                  	;0	>>385
	1   29   FE_RESET_R/77             $27=      16?0                 ?369                	;0
	2   29   FE_FETCH_R/78             ?0        $27                  16?1                	;369	>>369	<<368
	3   30   INIT_METHOD_CALL/112      ?0        16?2                 1:'query'           	;2
	4   30   CONCAT/8                  #28=      3:'SELECT t1.*,t2.* FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.direct_source = 0 INNER JOIN `streams_types` t3 ON t3.type_id = t2.type AND t3.live = 0 WHERE t1.to_analyze = 1 AND t1.server_id = ? LIMIT ' 16?1                	;0
	5   30   CONCAT/8                  #29=      #28                  4:', 1000'          	;0
	6   30   SEND_VAL_EX/116           ?80       #29                  ?1                  	;0
	7   30   FETCH_CONSTANT/99         #30=      ?0                   5:'SERVER_ID'       	;16
	8   30   SEND_VAL_EX/116           ?96       #30                  ?2                  	;0
	9   30   DO_FCALL/60               ?4        ?0                   ?0                  	;0
	10  31   INIT_METHOD_CALL/112      ?0        16?2                 8:'num_rows'        	;0
	11  31   DO_FCALL/60               $32=      ?0                   ?0                  	;0
	12  31   IS_SMALLER/19             #33=      10:0                 $32                 	;0
	13  31   BOOL_NOT/13               #34=      #33                  ?0                  	;0
	14  31   JMPZ/43                   ?0        #34                  ?17                 	;0	>>17
	15  32   NOP/0                     ?0        ?0                   ?0                  	;1
	16  32   GOTO/253                  ?0        ?368                 ?11                 	;0
	17  34   INIT_METHOD_CALL/112      ?0        16?2                 12:'get_rows'       	;0	<<14
	18  34   DO_FCALL/60               $35=      ?0                   ?0                  	;0
	19  34   ASSIGN/38                 ?9        16?3                 $35                 	;0
	20  35   FE_RESET_R/77             $37=      16?3                 ?367                	;0
	21  35   FE_FETCH_R/78             ?0        $37                  16?4                	;367	>>367	<<366
	22  36   NOP/0                     ?0        ?0                   ?0                  	;1
	23  36   NOP/0                     ?0        ?0                   ?0                  	;1
	24  36   GOTO/253                  ?0        ?125                 ?14                 	;0
	25  38   FETCH_DIM_R/81            $38=      16?6                 15:'codecs'         	;0
	26  38   FETCH_DIM_R/81            $39=      $38                  16:'video'          	;0
	27  38   FETCH_DIM_R/81            $40=      $39                  17:'codec_name'     	;0
	28  38   JMP_SET/152               #41=      $40                  ?30                 	;0
	29  38   QM_ASSIGN/22              #41=      18:NULL              ?0                  	;0
	30  38   ASSIGN/38                 ?15       16?5                 #41                 	;0
	31  39   FETCH_DIM_R/81            $43=      16?6                 19:'codecs'         	;0
	32  39   FETCH_DIM_R/81            $44=      $43                  20:'video'          	;0
	33  39   FETCH_DIM_R/81            $45=      $44                  21:'height'         	;0
	34  39   JMP_SET/152               #46=      $45                  ?36                 	;0
	35  39   QM_ASSIGN/22              #46=      22:NULL              ?0                  	;0
	36  39   ASSIGN/38                 ?20       16?7                 #46                 	;0
	37  40   BOOL_NOT/13               #48=      16?7                 ?0                  	;0
	38  40   JMPZ/43                   ?0        #48                  ?42                 	;0	>>42
	39  41   NOP/0                     ?0        ?0                   ?0                  	;1
	40  41   NOP/0                     ?0        ?0                   ?0                  	;1
	41  41   GOTO/253                  ?0        ?47                  ?23                 	;0
	42  43   INIT_STATIC_METHOD_CALL/113 ?0        24:'XUI'             26:'B954Bd7c2bec3c82'	;2	<<38
	43  43   SEND_VAL_EX/116           ?80       28:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?1                  	;0
	44  43   SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	45  43   DO_FCALL/60               $49=      ?0                   ?0                  	;0
	46  43   ASSIGN/38                 ?23       16?7                 $49                 	;0
	47  45   NOP/0                     ?0        ?0                   ?0                  	;1
	48  45   NOP/0                     ?0        ?0                   ?0                  	;1
	49  45   GOTO/253                  ?0        ?200                 ?29                 	;0
	50  48   ISSET_ISEMPTY_DIM_OBJ/115 #51=      16?8                 30:'video'          	;33554432
	51  48   BOOL_NOT/13               #52=      #51                  ?0                  	;0
	52  48   JMPNZ_EX/47               #52=      #52                  ?59                 	;0	>>59
	53  48   FETCH_DIM_R/81            $53=      16?6                 31:'codecs'         	;0
	54  48   FETCH_DIM_R/81            $54=      $53                  32:'video'          	;0
	55  48   FETCH_DIM_R/81            $55=      $54                  33:'codec_name'     	;0
	56  48   FETCH_DIM_R/81            $56=      16?8                 34:'video'          	;0
	57  48   IS_NOT_EQUAL/18           #57=      $55                  $56                 	;0
	58  48   BOOL/52                   #52=      #57                  ?0                  	;0
	59  48   BOOL_NOT/13               #58=      #52                  ?0                  	;0	<<52
	60  48   JMPZ/43                   ?0        #58                  ?64                 	;0	>>64
	61  49   NOP/0                     ?0        ?0                   ?0                  	;1
	62  49   NOP/0                     ?0        ?0                   ?0                  	;1
	63  49   GOTO/253                  ?0        ?68                  ?35                 	;0
	64  51   FETCH_DIM_R/81            $60=      16?6                 37:'codecs'         	;0	<<60
	65  51   FETCH_DIM_R/81            $61=      $60                  38:'video'          	;0
	66  51   ASSIGN_DIM/147            ?32       16?8                 36:'video'          	;0
	67  51   OP_DATA/137               ?0        $61                  ?0                  	;0
	68  53   ISSET_ISEMPTY_DIM_OBJ/115 #62=      16?8                 39:'audio'          	;33554432
	69  53   BOOL_NOT/13               #63=      #62                  ?0                  	;0
	70  53   JMPNZ_EX/47               #63=      #63                  ?77                 	;0	>>77
	71  53   FETCH_DIM_R/81            $64=      16?6                 40:'codecs'         	;0
	72  53   FETCH_DIM_R/81            $65=      $64                  41:'audio'          	;0
	73  53   FETCH_DIM_R/81            $66=      $65                  42:'codec_name'     	;0
	74  53   FETCH_DIM_R/81            $67=      16?8                 43:'audio'          	;0
	75  53   IS_NOT_EQUAL/18           #68=      $66                  $67                 	;0
	76  53   BOOL/52                   #63=      #68                  ?0                  	;0
	77  53   BOOL_NOT/13               #69=      #63                  ?0                  	;0	<<70
	78  53   JMPZ/43                   ?0        #69                  ?82                 	;0	>>82
	79  54   NOP/0                     ?0        ?0                   ?0                  	;1
	80  54   NOP/0                     ?0        ?0                   ?0                  	;1
	81  54   GOTO/253                  ?0        ?172                 ?44                 	;0
	82  56   NOP/0                     ?0        ?0                   ?0                  	;1	<<78
	83  56   NOP/0                     ?0        ?0                   ?0                  	;1
	84  56   GOTO/253                  ?0        ?168                 ?45                 	;0
	85  58   FETCH_DIM_IS/90           $70=      16?6                 46:'codecs'         	;0
	86  58   ISSET_ISEMPTY_DIM_OBJ/115 #71=      $70                  47:'subtitle'       	;33554432
	87  58   JMPZ_EX/46                #71=      #71                  ?91                 	;0	>>91
	88  58   FETCH_STATIC_PROP_R/173   $72=      48:'rSettings'       49:'XUI'            	;0
	89  58   FETCH_DIM_R/81            $73=      $72                  51:'extract_subtitles'	;0
	90  58   BOOL/52                   #71=      $73                  ?0                  	;0
	91  58   BOOL_NOT/13               #74=      #71                  ?0                  	;0	<<87
	92  58   JMPZ/43                   ?0        #74                  ?96                 	;0	>>96
	93  59   NOP/0                     ?0        ?0                   ?0                  	;1
	94  59   NOP/0                     ?0        ?0                   ?0                  	;1
	95  59   GOTO/253                  ?0        ?111                 ?52                 	;0
	96  61   ASSIGN/38                 ?48       16?9                 53:0                	;0	<<92
	97  62   FETCH_DIM_R/81            $76=      16?6                 54:'codecs'         	;0
	98  62   FETCH_DIM_R/81            $77=      $76                  55:'subtitle'       	;0
	99  62   FE_RESET_R/77             $78=      $77                  ?110                	;0
	100 62   FE_FETCH_R/78             ?0        $78                  16?10               	;110	>>110	<<109
	101 63   INIT_STATIC_METHOD_CALL/113 ?0        56:'XUI'             58:'extractSubtitle'	;3
	102 63   FETCH_DIM_FUNC_ARG/93     $79=      16?4                 60:'stream_id'      	;1
	103 63   SEND_VAR_EX/66            ?80       $79                  ?1                  	;0
	104 63   SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
	105 63   SEND_VAR_EX/66            ?112      16?9                 ?3                  	;0
	106 63   DO_FCALL/60               ?53       ?0                   ?0                  	;0
	107 64   POST_INC/36               #81=      16?9                 ?0                  	;0
	108 64   FREE/70                   ?0        #81                  ?0                  	;0
	109 65   JMP/42                    ?0        ?100                 ?0                  	;0	>>100
	110 65   FE_FREE/127               ?0        $78                  ?0                  	;0	<<99
	111 69   NOP/0                     ?0        ?0                   ?0                  	;1
	112 69   NOP/0                     ?0        ?0                   ?0                  	;1
	113 69   GOTO/253                  ?0        ?271                 ?61                 	;0
	114 71   INIT_STATIC_METHOD_CALL/113 ?0        62:'XUI'             64:'CAc325153A658C37'	;1
	115 71   FETCH_DIM_FUNC_ARG/93     $82=      16?4                 66:'stream_id'      	;1
	116 71   SEND_VAR_EX/66            ?80       $82                  ?1                  	;0
	117 71   DO_FCALL/60               ?56       ?0                   ?0                  	;0
	118 72   NOP/0                     ?0        ?0                   ?0                  	;1
	119 72   NOP/0                     ?0        ?0                   ?0                  	;1
	120 72   GOTO/253                  ?0        ?122                 ?67                 	;0
	121 74   ECHO/40                   ?0        68:'ENCODING...
'    ?0                  	;0
	122 76   NOP/0                     ?0        ?0                   ?0                  	;1
	123 76   NOP/0                     ?0        ?0                   ?0                  	;1
	124 76   GOTO/253                  ?0        ?363                 ?69                 	;0
	125 78   FETCH_DIM_R/81            $84=      16?4                 70:'stream_display_name'	;0
	126 78   ROPE_INIT/54              #86=      ?0                   71:'[*] Checking Movie '	;3
	127 78   ROPE_ADD/55               #86=      #86                  $84                 	;1
	128 78   ROPE_END/56               #85=      #86                  72:' 		---> '       	;2
	129 78   ECHO/40                   ?0        #85                  ?0                  	;0
	130 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'in_array'       	;2
	131 79   FETCH_DIM_FUNC_ARG/93     $88=      16?4                 75:'pid'            	;1
	132 79   SEND_VAR_EX/66            ?80       $88                  ?1                  	;0
	133 79   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
	134 79   DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
	135 79   JMPZ/43                   ?0        $89                  ?139                	;0	>>139
	136 80   NOP/0                     ?0        ?0                   ?0                  	;1
	137 80   NOP/0                     ?0        ?0                   ?0                  	;1
	138 80   GOTO/253                  ?0        ?121                 ?76                 	;0
	139 82   FETCH_CONSTANT/99         #90=      ?0                   77:'VOD_PATH'       	;16	<<135
	140 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'intval'         	;1
	141 82   FETCH_DIM_FUNC_ARG/93     $91=      16?4                 82:'stream_id'      	;1
	142 82   SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
	143 82   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
	144 82   CONCAT/8                  #93=      #90                  $92                 	;0
	145 82   CONCAT/8                  #94=      #93                  83:'.'              	;0
	146 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'escapeshellcmd' 	;1
	147 82   FETCH_DIM_FUNC_ARG/93     $95=      16?4                 86:'target_container'	;1
	148 82   SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
	149 82   DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
	150 82   CONCAT/8                  #97=      #94                  $96                 	;0
	151 82   ASSIGN/38                 ?71       16?11                #97                 	;0
	152 83   INIT_STATIC_METHOD_CALL/113 ?0        87:'XUI'             89:'e57006536Cd5655d'	;1
	153 83   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	154 83   DO_FCALL/60               $99=      ?0                   ?0                  	;0
	155 83   ASSIGN/38                 $100=     16?6                 $99                 	;0
	156 83   JMPZ/43                   ?0        $100                 ?160                	;0	>>160
	157 84   NOP/0                     ?0        ?0                   ?0                  	;1
	158 84   NOP/0                     ?0        ?0                   ?0                  	;1
	159 84   GOTO/253                  ?0        ?346                 ?91                 	;0
	160 86   INIT_METHOD_CALL/112      ?0        16?2                 92:'query'          	;2	<<156
	161 86   SEND_VAL_EX/116           ?80       94:'UPDATE `streams_servers` SET `to_analyze` = 0,`stream_status` = 1 WHERE `server_stream_id` = ?' ?1                  	;0
	162 86   FETCH_DIM_FUNC_ARG/93     $101=     16?4                 95:'server_stream_id'	;2
	163 86   SEND_VAR_EX/66            ?96       $101                 ?2                  	;0
	164 86   DO_FCALL/60               ?75       ?0                   ?0                  	;0
	165 87   NOP/0                     ?0        ?0                   ?0                  	;1
	166 87   NOP/0                     ?0        ?0                   ?0                  	;1
	167 87   GOTO/253                  ?0        ?342                 ?96                 	;0
	168 89   FETCH_DIM_R/81            $104=     16?6                 98:'codecs'         	;0
	169 89   FETCH_DIM_R/81            $105=     $104                 99:'audio'          	;0
	170 89   ASSIGN_DIM/147            ?76       16?8                 97:'audio'          	;0
	171 89   OP_DATA/137               ?0        $105                 ?0                  	;0
	172 91   FETCH_STATIC_PROP_R/173   $106=     100:'rSettings'      101:'XUI'           	;0
	173 91   FETCH_DIM_R/81            $107=     $106                 103:'extract_subtitles'	;0
	174 91   BOOL_NOT/13               #108=     $107                 ?0                  	;0
	175 91   JMPZ/43                   ?0        #108                 ?179                	;0	>>179
	176 92   NOP/0                     ?0        ?0                   ?0                  	;1
	177 92   NOP/0                     ?0        ?0                   ?0                  	;1
	178 92   GOTO/253                  ?0        ?231                 ?104                	;0
	179 94   ISSET_ISEMPTY_DIM_OBJ/115 #109=     16?8                 105:'subtitle'      	;33554432	<<175
	180 94   BOOL_NOT/13               #110=     #109                 ?0                  	;0
	181 94   JMPNZ_EX/47               #110=     #110                 ?188                	;0	>>188
	182 94   FETCH_DIM_R/81            $111=     16?6                 106:'codecs'        	;0
	183 94   FETCH_DIM_R/81            $112=     $111                 107:'subtitle'      	;0
	184 94   FETCH_DIM_R/81            $113=     $112                 108:'codec_name'    	;0
	185 94   FETCH_DIM_R/81            $114=     16?8                 109:'subtitle'      	;0
	186 94   IS_NOT_EQUAL/18           #115=     $113                 $114                	;0
	187 94   BOOL/52                   #110=     #115                 ?0                  	;0
	188 94   BOOL_NOT/13               #116=     #110                 ?0                  	;0	<<181
	189 94   JMPZ/43                   ?0        #116                 ?193                	;0	>>193
	190 95   NOP/0                     ?0        ?0                   ?0                  	;1
	191 95   NOP/0                     ?0        ?0                   ?0                  	;1
	192 95   GOTO/253                  ?0        ?231                 ?110                	;0
	193 97   FETCH_DIM_R/81            $118=     16?6                 112:'codecs'        	;0	<<189
	194 97   FETCH_DIM_R/81            $119=     $118                 113:'subtitle'      	;0
	195 97   ASSIGN_DIM/147            ?90       16?8                 111:'subtitle'      	;0
	196 97   OP_DATA/137               ?0        $119                 ?0                  	;0
	197 98   NOP/0                     ?0        ?0                   ?0                  	;1
	198 98   NOP/0                     ?0        ?0                   ?0                  	;1
	199 98   GOTO/253                  ?0        ?231                 ?114                	;0
	200 101  INIT_METHOD_CALL/112      ?0        16?2                 115:'query'         	;3
	201 101  SEND_VAL_EX/116           ?80       117:'UPDATE `streams` SET `movie_properties` = ? WHERE `id` = ?' ?1                  	;0
	202 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'json_encode'   	;2
	203 101  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	204 101  FETCH_CONSTANT/99         #120=     ?0                   120:'JSON_UNESCAPED_UNICODE'	;16
	205 101  SEND_VAL_EX/116           ?96       #120                 ?2                  	;0
	206 101  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
	207 101  SEND_VAR_NO_REF_EX/50     ?96       $121                 ?2                  	;0
	208 101  FETCH_DIM_FUNC_ARG/93     $122=     16?4                 123:'stream_id'     	;3
	209 101  SEND_VAR_EX/66            ?112      $122                 ?3                  	;0
	210 101  DO_FCALL/60               ?96       ?0                   ?0                  	;0
	211 102  INIT_METHOD_CALL/112      ?0        16?2                 124:'query'         	;8
	212 102  SEND_VAL_EX/116           ?80       126:'UPDATE `streams_servers` SET `bitrate` = ?,`to_analyze` = 0,`stream_status` = 0,`stream_info` = ?,`audio_codec` = ?,`video_codec` = ?,`resolution` = ?,`compatible` = ? WHERE `server_stream_id` = ?' ?1                  	;0
	213 102  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
	214 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'json_encode'   	;2
	215 102  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	216 102  FETCH_CONSTANT/99         #124=     ?0                   129:'JSON_UNESCAPED_UNICODE'	;16
	217 102  SEND_VAL_EX/116           ?96       #124                 ?2                  	;0
	218 102  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
	219 102  SEND_VAR_NO_REF_EX/50     ?112      $125                 ?3                  	;0
	220 102  SEND_VAR_EX/66            ?128      16?14                ?4                  	;0
	221 102  SEND_VAR_EX/66            ?144      16?5                 ?5                  	;0
	222 102  SEND_VAR_EX/66            ?160      16?7                 ?6                  	;0
	223 102  SEND_VAR_EX/66            ?176      16?15                ?7                  	;0
	224 102  FETCH_DIM_FUNC_ARG/93     $126=     16?4                 132:'server_stream_id'	;8
	225 102  SEND_VAR_EX/66            ?192      $126                 ?8                  	;0
	226 102  DO_FCALL/60               ?100      ?0                   ?0                  	;0
	227 103  ECHO/40                   ?0        133:'VALID
'         ?0                  	;0
	228 105  NOP/0                     ?0        ?0                   ?0                  	;1
	229 105  NOP/0                     ?0        ?0                   ?0                  	;1
	230 105  GOTO/253                  ?0        ?114                 ?134                	;0
	231 109  ISSET_ISEMPTY_DIM_OBJ/115 #128=     16?8                 135:'bitrate'       	;33554432
	232 109  BOOL_NOT/13               #129=     #128                 ?0                  	;0
	233 109  JMPNZ_EX/47               #129=     #129                 ?237                	;0	>>237
	234 109  FETCH_DIM_R/81            $130=     16?8                 136:'bitrate'       	;0
	235 109  IS_NOT_EQUAL/18           #131=     16?13                $130                	;0
	236 109  BOOL/52                   #129=     #131                 ?0                  	;0
	237 109  BOOL_NOT/13               #132=     #129                 ?0                  	;0	<<233
	238 109  JMPZ/43                   ?0        #132                 ?242                	;0	>>242
	239 110  NOP/0                     ?0        ?0                   ?0                  	;1
	240 110  NOP/0                     ?0        ?0                   ?0                  	;1
	241 110  GOTO/253                  ?0        ?301                 ?137                	;0
	242 112  IS_SMALLER/19             #133=     138:0                16?13               	;0	<<238
	243 112  JMPZ/43                   ?0        #133                 ?247                	;0	>>247
	244 113  NOP/0                     ?0        ?0                   ?0                  	;1
	245 113  NOP/0                     ?0        ?0                   ?0                  	;1
	246 113  GOTO/253                  ?0        ?299                 ?139                	;0
	247 115  FETCH_DIM_R/81            $134=     16?8                 140:'bitrate'       	;0	<<243
	248 115  ASSIGN/38                 ?108      16?13                $134                	;0
	249 116  NOP/0                     ?0        ?0                   ?0                  	;1
	250 116  NOP/0                     ?0        ?0                   ?0                  	;1
	251 116  GOTO/253                  ?0        ?296                 ?141                	;0
	252 118  ASSIGN/38                 ?109      16?8                 142:array (
)       	;0
	253 120  ISSET_ISEMPTY_DIM_OBJ/115 #137=     16?8                 143:'duration_secs' 	;33554432
	254 120  BOOL_NOT/13               #138=     #137                 ?0                  	;0
	255 120  JMPNZ_EX/47               #138=     #138                 ?259                	;0	>>259
	256 120  FETCH_DIM_R/81            $139=     16?8                 144:'duration_secs' 	;0
	257 120  IS_NOT_EQUAL/18           #140=     16?16                $139                	;0
	258 120  BOOL/52                   #138=     #140                 ?0                  	;0
	259 120  BOOL_NOT/13               #141=     #138                 ?0                  	;0	<<255
	260 120  JMPZ/43                   ?0        #141                 ?264                	;0	>>264
	261 121  NOP/0                     ?0        ?0                   ?0                  	;1
	262 121  NOP/0                     ?0        ?0                   ?0                  	;1
	263 121  GOTO/253                  ?0        ?50                  ?145                	;0
	264 123  ASSIGN_DIM/147            ?115      16?8                 146:'duration_secs' 	;0	<<260
	265 123  OP_DATA/137               ?0        16?16                ?0                  	;0
	266 124  ASSIGN_DIM/147            ?116      16?8                 147:'duration'      	;0
	267 124  OP_DATA/137               ?0        16?17                ?0                  	;0
	268 125  NOP/0                     ?0        ?0                   ?0                  	;1
	269 125  NOP/0                     ?0        ?0                   ?0                  	;1
	270 125  GOTO/253                  ?0        ?50                  ?148                	;0
	271 127  ASSIGN/38                 ?117      16?15                149:0               	;0
	272 128  ASSIGN/38                 $145=     16?7                 150:NULL            	;0
	273 128  ASSIGN/38                 $146=     16?5                 $145                	;0
	274 128  ASSIGN/38                 ?120      16?14                $146                	;0
	275 129  BOOL_NOT/13               #148=     16?6                 ?0                  	;0
	276 129  JMPZ/43                   ?0        #148                 ?280                	;0	>>280
	277 130  NOP/0                     ?0        ?0                   ?0                  	;1
	278 130  NOP/0                     ?0        ?0                   ?0                  	;1
	279 130  GOTO/253                  ?0        ?200                 ?151                	;0
	280 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'intval'        	;1	<<276
	281 132  INIT_STATIC_METHOD_CALL/113 ?0        154:'XUI'            156:'d00C33C8075D14A5'	;1
	282 132  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
	283 132  DO_FCALL/60               $149=     ?0                   ?0                  	;0
	284 132  SEND_VAR_NO_REF_EX/50     ?80       $149                 ?1                  	;0
	285 132  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
	286 132  ASSIGN/38                 ?124      16?15                $150                	;0
	287 133  FETCH_DIM_R/81            $152=     16?6                 158:'codecs'        	;0
	288 133  FETCH_DIM_R/81            $153=     $152                 159:'audio'         	;0
	289 133  FETCH_DIM_R/81            $154=     $153                 160:'codec_name'    	;0
	290 133  JMP_SET/152               #155=     $154                 ?292                	;0
	291 133  QM_ASSIGN/22              #155=     161:NULL             ?0                  	;0
	292 133  ASSIGN/38                 ?129      16?14                #155                	;0
	293 134  NOP/0                     ?0        ?0                   ?0                  	;1
	294 134  NOP/0                     ?0        ?0                   ?0                  	;1
	295 134  GOTO/253                  ?0        ?25                  ?162                	;0
	296 136  NOP/0                     ?0        ?0                   ?0                  	;1
	297 136  NOP/0                     ?0        ?0                   ?0                  	;1
	298 136  GOTO/253                  ?0        ?301                 ?163                	;0
	299 138  ASSIGN_DIM/147            ?130      16?8                 164:'bitrate'       	;0
	300 138  OP_DATA/137               ?0        16?13                ?0                  	;0
	301 141  NOP/0                     ?0        ?0                   ?0                  	;1
	302 141  NOP/0                     ?0        ?0                   ?0                  	;1
	303 141  GOTO/253                  ?0        ?85                  ?165                	;0
	304 143  ISSET_ISEMPTY_CV/197      #158=     16?16                ?0                  	;33554432
	305 143  JMPZ/43                   ?0        #158                 ?312                	;0	>>312
	306 143  MUL/3                     #159=     16?18                166:3600            	;0
	307 143  MUL/3                     #160=     16?19                167:60              	;0
	308 143  ADD/1                     #161=     #159                 #160                	;0
	309 143  ADD/1                     #162=     #161                 16?16               	;0
	310 143  QM_ASSIGN/22              #163=     #162                 ?0                  	;0
	311 143  JMP/42                    ?0        ?315                 ?0                  	;0	>>315
	312 143  MUL/3                     #164=     16?18                168:60              	;0	<<305
	313 143  ADD/1                     #165=     #164                 16?19               	;0
	314 143  QM_ASSIGN/22              #163=     #165                 ?0                  	;0
	315 143  ASSIGN/38                 ?139      16?16                #163                	;0	<<311
	316 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'filesize'      	;1
	317 144  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
	318 144  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
	319 144  ASSIGN/38                 ?141      16?20                $167                	;0
	320 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'round'         	;1
	321 145  MUL/3                     #169=     16?20                173:0.008           	;0
	322 145  DIV/4                     #170=     #169                 16?16               	;0
	323 145  SEND_VAL_EX/116           ?80       #170                 ?1                  	;0
	324 145  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
	325 145  ASSIGN/38                 ?145      16?13                $171                	;0
	326 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'json_decode'   	;2
	327 146  FETCH_DIM_FUNC_ARG/93     $173=     16?4                 176:'movie_properties'	;1
	328 146  SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
	329 146  SEND_VAL_EX/116           ?96       177:true             ?2                  	;0
	330 146  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
	331 146  ASSIGN/38                 ?148      16?8                 $174                	;0
	332 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'is_array'      	;1
	333 147  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	334 147  DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
	335 147  JMPZ/43                   ?0        $176                 ?339                	;0	>>339
	336 148  NOP/0                     ?0        ?0                   ?0                  	;1
	337 148  NOP/0                     ?0        ?0                   ?0                  	;1
	338 148  GOTO/253                  ?0        ?253                 ?180                	;0
	339 150  NOP/0                     ?0        ?0                   ?0                  	;1	<<335
	340 150  NOP/0                     ?0        ?0                   ?0                  	;1
	341 150  GOTO/253                  ?0        ?252                 ?181                	;0
	342 152  ECHO/40                   ?0        182:'BROKEN
'        ?0                  	;0
	343 153  NOP/0                     ?0        ?0                   ?0                  	;1
	344 153  NOP/0                     ?0        ?0                   ?0                  	;1
	345 153  GOTO/253                  ?0        ?228                 ?183                	;0
	346 155  ISSET_ISEMPTY_DIM_OBJ/115 #177=     16?6                 184:'duration'      	;33554432
	347 155  JMPZ/43                   ?0        #177                 ?351                	;0	>>351
	348 155  FETCH_DIM_R/81            $178=     16?6                 185:'duration'      	;0
	349 155  QM_ASSIGN/22              #179=     $178                 ?0                  	;0
	350 155  JMP/42                    ?0        ?352                 ?0                  	;0	>>352
	351 155  QM_ASSIGN/22              #179=     186:0                ?0                  	;0	<<347
	352 155  ASSIGN/38                 ?153      16?17                #179                	;0	<<350
	353 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'sscanf'        	;5
	354 156  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
	355 156  SEND_VAL_EX/116           ?96       189:'%d:%d:%d'       ?2                  	;0
	356 156  SEND_VAR_EX/66            ?112      16?18                ?3                  	;0
	357 156  SEND_VAR_EX/66            ?128      16?19                ?4                  	;0
	358 156  SEND_VAR_EX/66            ?144      16?16                ?5                  	;0
	359 156  DO_FCALL_BY_NAME/131      ?154      ?0                   ?0                  	;0
	360 157  NOP/0                     ?0        ?0                   ?0                  	;1
	361 157  NOP/0                     ?0        ?0                   ?0                  	;1
	362 157  GOTO/253                  ?0        ?304                 ?190                	;0
	363 160  NOP/0                     ?0        ?0                   ?0                  	;1
	364 160  NOP/0                     ?0        ?0                   ?0                  	;1
	365 160  GOTO/253                  ?0        ?366                 ?191                	;0
	366 161  JMP/42                    ?0        ?21                  ?0                  	;0	>>21
	367 161  FE_FREE/127               ?0        $37                  ?0                  	;0	<<20
	368 165  JMP/42                    ?0        ?2                   ?0                  	;0	>>2
	369 165  FE_FREE/127               ?0        $27                  ?0                  	;0	<<1
	370 169  GOTO/253                  ?0        ?558                 ?192                	;0
	371 171  IS_SMALLER/19             #182=     193:0                16?21               	;0
	372 171  BOOL_NOT/13               #183=     #182                 ?0                  	;0
	373 171  JMPZ/43                   ?0        #183                 ?375                	;0	>>375
	374 172  GOTO/253                  ?0        ?370                 ?194                	;0
	375 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'range'         	;3	<<373
	376 174  SEND_VAL_EX/116           ?80       197:0                ?1                  	;0
	377 174  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
	378 174  SEND_VAL_EX/116           ?112      198:1000             ?3                  	;0
	379 174  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
	380 174  ASSIGN/38                 ?158      16?0                 $184                	;0
	381 175  JMPZ/43                   ?0        16?0                 ?383                	;0	>>383
	382 176  GOTO/253                  ?0        ?384                 ?199                	;0
	383 178  ASSIGN/38                 ?159      16?0                 200:array (
  0 => 0,
)	;0	<<381
	384 180  GOTO/253                  ?0        ?1                   ?201                	;0
	385 182  BIND_GLOBAL/168           ?0        16?2                 202:'b62d6460eb33ea07'	;0	<<0
	386 183  INIT_METHOD_CALL/112      ?0        16?2                 203:'query'         	;2
	387 183  SEND_VAL_EX/116           ?80       205:'SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t3 ON t3.stream_id = t1.id LEFT JOIN `profiles` t2 ON t2.profile_id = t1.transcode_profile_id WHERE t1.type = 3 AND t3.server_id = ? AND t3.parent_id IS NULL;' ?1                  	;0
	388 183  FETCH_CONSTANT/99         #187=     ?0                   206:'SERVER_ID'     	;16
	389 183  SEND_VAL_EX/116           ?96       #187                 ?2                  	;0
	390 183  DO_FCALL/60               ?161      ?0                   ?0                  	;0
	391 184  INIT_METHOD_CALL/112      ?0        16?2                 209:'num_rows'      	;0
	392 184  DO_FCALL/60               $189=     ?0                   ?0                  	;0
	393 184  IS_SMALLER/19             #190=     211:0                $189                	;0
	394 184  BOOL_NOT/13               #191=     #190                 ?0                  	;0
	395 184  JMPZ/43                   ?0        #191                 ?397                	;0	>>397
	396 185  GOTO/253                  ?0        ?512                 ?212                	;0
	397 187  INIT_METHOD_CALL/112      ?0        16?2                 213:'get_rows'      	;0	<<395
	398 187  DO_FCALL/60               $192=     ?0                   ?0                  	;0
	399 187  ASSIGN/38                 ?166      16?22                $192                	;0
	400 188  FE_RESET_R/77             $194=     16?22                ?510                	;0
	401 188  FE_FETCH_R/78             ?0        $194                 16?23               	;510	>>510	<<509
	402 189  NOP/0                     ?0        ?0                   ?0                  	;1
	403 189  GOTO/253                  ?0        ?404                 ?215                	;0
	404 191  FETCH_DIM_R/81            $195=     16?23                216:'stream_display_name'	;0
	405 191  ROPE_INIT/54              #197=     ?0                   217:'

[*] Checking Stream '	;3
	406 191  ROPE_ADD/55               #197=     #197                 $195                	;1
	407 191  ROPE_END/56               #196=     #197                 218:'
'             	;2
	408 191  ECHO/40                   ?0        #196                 ?0                  	;0
	409 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'intval'        	;1
	410 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'file_get_contents'	;1
	411 192  FETCH_CONSTANT/99         #199=     ?0                   223:'CREATED_PATH'  	;16
	412 192  FETCH_DIM_R/81            $200=     16?23                226:'id'            	;0
	413 192  CONCAT/8                  #201=     #199                 $200                	;0
	414 192  CONCAT/8                  #202=     #201                 227:'_.create'      	;0
	415 192  SEND_VAL_EX/116           ?80       #202                 ?1                  	;0
	416 192  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
	417 192  SEND_VAR_NO_REF_EX/50     ?80       $203                 ?1                  	;0
	418 192  DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
	419 192  ASSIGN/38                 ?178      16?24                $204                	;0
	420 193  JMPZ_EX/46                #206=     16?24                ?429                	;0	>>429
	421 193  INIT_STATIC_METHOD_CALL/113 ?0        228:'XUI'            230:'a633007D15904F34'	;3
	422 193  FETCH_CONSTANT/99         #207=     ?0                   232:'SERVER_ID'     	;16
	423 193  SEND_VAL_EX/116           ?80       #207                 ?1                  	;0
	424 193  SEND_VAR_EX/66            ?96       16?24                ?2                  	;0
	425 193  FETCH_CONSTANT/99         #208=     ?0                   235:'PHP_BIN'       	;16
	426 193  SEND_VAL_EX/116           ?112      #208                 ?3                  	;0
	427 193  DO_FCALL/60               $209=     ?0                   ?0                  	;0
	428 193  BOOL/52                   #206=     $209                 ?0                  	;0
	429 193  JMPZ/43                   ?0        #206                 ?432                	;0	>>432	<<420
	430 194  NOP/0                     ?0        ?0                   ?0                  	;1
	431 194  GOTO/253                  ?0        ?504                 ?238                	;0
	432 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'array_diff'    	;2	<<429
	433 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'json_decode'   	;2
	434 196  FETCH_DIM_FUNC_ARG/93     $210=     16?23                243:'stream_source' 	;1
	435 196  SEND_VAR_EX/66            ?80       $210                 ?1                  	;0
	436 196  SEND_VAL_EX/116           ?96       244:true             ?2                  	;0
	437 196  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
	438 196  SEND_VAR_NO_REF_EX/50     ?80       $211                 ?1                  	;0
	439 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'json_decode'   	;2
	440 196  FETCH_DIM_FUNC_ARG/93     $212=     16?23                247:'cchannel_rsources'	;1
	441 196  SEND_VAR_EX/66            ?80       $212                 ?1                  	;0
	442 196  SEND_VAL_EX/116           ?96       248:true             ?2                  	;0
	443 196  DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
	444 196  SEND_VAR_NO_REF_EX/50     ?96       $213                 ?2                  	;0
	445 196  DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
	446 196  ASSIGN/38                 ?188      16?25                $214                	;0
	447 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'count'         	;1
	448 197  SEND_VAR_EX/66            ?80       16?25                ?1                  	;0
	449 197  DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
	450 197  IS_SMALLER/19             #217=     251:0                $216                	;0
	451 197  JMPZ/43                   ?0        #217                 ?454                	;0	>>454
	452 198  NOP/0                     ?0        ?0                   ?0                  	;1
	453 198  GOTO/253                  ?0        ?495                 ?252                	;0
	454 200  NOP/0                     ?0        ?0                   ?0                  	;1	<<451
	455 200  GOTO/253                  ?0        ?456                 ?253                	;0
	456 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   254:'file_exists'   	;1
	457 202  FETCH_CONSTANT/99         #218=     ?0                   256:'CREATED_PATH'  	;16
	458 202  FETCH_DIM_R/81            $219=     16?23                259:'id'            	;0
	459 202  CONCAT/8                  #220=     #218                 $219                	;0
	460 202  CONCAT/8                  #221=     #220                 260:'_.info'        	;0
	461 202  SEND_VAL_EX/116           ?80       #221                 ?1                  	;0
	462 202  DO_FCALL_BY_NAME/131      $222=     ?0                   ?0                  	;0
	463 202  BOOL_NOT/13               #223=     $222                 ?0                  	;0
	464 202  JMPZ/43                   ?0        #223                 ?467                	;0	>>467
	465 203  NOP/0                     ?0        ?0                   ?0                  	;1
	466 203  GOTO/253                  ?0        ?490                 ?261                	;0
	467 205  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'file_get_contents'	;1	<<464
	468 205  FETCH_CONSTANT/99         #224=     ?0                   264:'CREATED_PATH'  	;16
	469 205  FETCH_DIM_R/81            $225=     16?23                267:'id'            	;0
	470 205  CONCAT/8                  #226=     #224                 $225                	;0
	471 205  CONCAT/8                  #227=     #226                 268:'_.info'        	;0
	472 205  SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
	473 205  DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
	474 205  ASSIGN/38                 ?202      16?26                $228                	;0
	475 206  INIT_METHOD_CALL/112      ?0        16?2                 269:'query'         	;4
	476 206  SEND_VAL_EX/116           ?80       271:'UPDATE `streams_servers` SET `cc_info` = ? WHERE `server_id` = ? AND `stream_id` = ?;' ?1                  	;0
	477 206  SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
	478 206  FETCH_CONSTANT/99         #230=     ?0                   272:'SERVER_ID'     	;16
	479 206  SEND_VAL_EX/116           ?112      #230                 ?3                  	;0
	480 206  FETCH_DIM_FUNC_ARG/93     $231=     16?23                275:'id'            	;4
	481 206  SEND_VAR_EX/66            ?128      $231                 ?4                  	;0
	482 206  DO_FCALL/60               ?205      ?0                   ?0                  	;0
	483 207  INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'unlink'        	;1
	484 207  FETCH_CONSTANT/99         #233=     ?0                   278:'CREATED_PATH'  	;16
	485 207  FETCH_DIM_R/81            $234=     16?23                281:'id'            	;0
	486 207  CONCAT/8                  #235=     #233                 $234                	;0
	487 207  CONCAT/8                  #236=     #235                 282:'_.info'        	;0
	488 207  SEND_VAL_EX/116           ?80       #236                 ?1                  	;0
	489 207  DO_FCALL_BY_NAME/131      ?210      ?0                   ?0                  	;0
	490 209  NOP/0                     ?0        ?0                   ?0                  	;1
	491 209  GOTO/253                  ?0        ?492                 ?283                	;0
	492 211  ECHO/40                   ?0        284:'	Build Finished
' ?0                  	;0
	493 212  NOP/0                     ?0        ?0                   ?0                  	;1
	494 212  GOTO/253                  ?0        ?502                 ?285                	;0
	495 214  ECHO/40                   ?0        286:'	Needs Updating!
' ?0                  	;0
	496 215  INIT_STATIC_METHOD_CALL/113 ?0        287:'XUI'            289:'queueChannel'  	;1
	497 215  FETCH_DIM_FUNC_ARG/93     $238=     16?23                291:'id'            	;1
	498 215  SEND_VAR_EX/66            ?80       $238                 ?1                  	;0
	499 215  DO_FCALL/60               ?212      ?0                   ?0                  	;0
	500 216  NOP/0                     ?0        ?0                   ?0                  	;1
	501 216  GOTO/253                  ?0        ?502                 ?292                	;0
	502 219  NOP/0                     ?0        ?0                   ?0                  	;1
	503 219  GOTO/253                  ?0        ?505                 ?293                	;0
	504 221  ECHO/40                   ?0        294:'	Build Is Still Going!
' ?0                  	;0
	505 223  NOP/0                     ?0        ?0                   ?0                  	;1
	506 223  GOTO/253                  ?0        ?507                 ?295                	;0
	507 226  NOP/0                     ?0        ?0                   ?0                  	;1
	508 226  GOTO/253                  ?0        ?509                 ?296                	;0
	509 227  JMP/42                    ?0        ?401                 ?0                  	;0	>>401
	510 227  FE_FREE/127               ?0        $194                 ?0                  	;0	<<400
	511 229  GOTO/253                  ?0        ?512                 ?297                	;0
	512 233  INIT_METHOD_CALL/112      ?0        16?2                 298:'query'         	;2
	513 233  SEND_VAL_EX/116           ?80       300:'SELECT `id` FROM `recordings` WHERE `status` NOT IN (1,2) AND `source_id` = ? AND ((`start` <= UNIX_TIMESTAMP() AND `end` > UNIX_TIMESTAMP()) OR (`archive` = 1));' ?1                  	;0
	514 233  FETCH_CONSTANT/99         #240=     ?0                   301:'SERVER_ID'     	;16
	515 233  SEND_VAL_EX/116           ?96       #240                 ?2                  	;0
	516 233  DO_FCALL/60               ?214      ?0                   ?0                  	;0
	517 234  INIT_METHOD_CALL/112      ?0        16?2                 304:'num_rows'      	;0
	518 234  DO_FCALL/60               $242=     ?0                   ?0                  	;0
	519 234  IS_SMALLER/19             #243=     306:0                $242                	;0
	520 234  BOOL_NOT/13               #244=     #243                 ?0                  	;0
	521 234  JMPZ/43                   ?0        #244                 ?523                	;0	>>523
	522 235  GOTO/253                  ?0        ?544                 ?307                	;0
	523 237  INIT_METHOD_CALL/112      ?0        16?2                 308:'get_rows'      	;0	<<521
	524 237  DO_FCALL/60               $245=     ?0                   ?0                  	;0
	525 237  FE_RESET_R/77             $246=     $245                 ?542                	;0
	526 237  FE_FETCH_R/78             ?0        $246                 16?4                	;542	>>542	<<541
	527 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'shell_exec'    	;1
	528 238  FETCH_CONSTANT/99         #247=     ?0                   312:'PHP_BIN'       	;16
	529 238  CONCAT/8                  #248=     #247                 315:' '             	;0
	530 238  FETCH_CONSTANT/99         #249=     ?0                   316:'INCLUDES_PATH' 	;16
	531 238  CONCAT/8                  #250=     #248                 #249                	;0
	532 238  CONCAT/8                  #251=     #250                 319:'cli/record.php '	;0
	533 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'intval'        	;1
	534 238  FETCH_DIM_FUNC_ARG/93     $252=     16?4                 322:'id'            	;1
	535 238  SEND_VAR_EX/66            ?80       $252                 ?1                  	;0
	536 238  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
	537 238  CONCAT/8                  #254=     #251                 $253                	;0
	538 238  CONCAT/8                  #255=     #254                 323:' > /dev/null 2>/dev/null &'	;0
	539 238  SEND_VAL_EX/116           ?80       #255                 ?1                  	;0
	540 238  DO_FCALL_BY_NAME/131      ?229      ?0                   ?0                  	;0
	541 239  JMP/42                    ?0        ?526                 ?0                  	;0	>>526
	542 239  FE_FREE/127               ?0        $246                 ?0                  	;0	<<525
	543 241  GOTO/253                  ?0        ?544                 ?324                	;0
	544 245  INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'exec'          	;2
	545 245  SEND_VAL_EX/116           ?80       327:'ps ax | grep \'ffmpeg\' | awk \'{print $1}\'' ?1                  	;0
	546 245  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
	547 245  DO_FCALL_BY_NAME/131      ?230      ?0                   ?0                  	;0
	548 246  INIT_METHOD_CALL/112      ?0        16?2                 328:'query'         	;2
	549 246  SEND_VAL_EX/116           ?80       330:'SELECT COUNT(*) AS `count` FROM `streams_servers` WHERE `to_analyze` = 1 AND `server_id` = ?' ?1                  	;0
	550 246  FETCH_CONSTANT/99         #258=     ?0                   331:'SERVER_ID'     	;16
	551 246  SEND_VAL_EX/116           ?96       #258                 ?2                  	;0
	552 246  DO_FCALL/60               ?232      ?0                   ?0                  	;0
	553 247  INIT_METHOD_CALL/112      ?0        16?2                 334:'get_row'       	;0
	554 247  DO_FCALL/60               $260=     ?0                   ?0                  	;0
	555 247  FETCH_DIM_R/81            $261=     $260                 336:'count'         	;0
	556 247  ASSIGN/38                 ?235      16?21                $261                	;0
	557 248  GOTO/253                  ?0        ?371                 ?337                	;0
	558 250  NOP/0                     ?0        338:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   256  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   256  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   257  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   257  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   257  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   257  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   257  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   258  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   260  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   260  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  262  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  262  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  262  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  262  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  262  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  263  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'posix_getpwuid'  	;1	<<0
2   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'posix_geteuid'   	;0
3   5    DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
4   5    SEND_VAR_NO_REF_EX/50     ?80       $2                   ?1                  	;0
5   5    DO_FCALL_BY_NAME/131      $3=       ?0                   ?0                  	;0
6   5    FETCH_DIM_R/81            $4=       $3                   5:'name'            	;0
7   5    IS_NOT_EQUAL/18           #5=       $4                   6:'xui'             	;0
8   5    BOOL_NOT/13               #6=       #5                   ?0                  	;0
9   5    JMPZ/43                   ?0        #6                   ?11                 	;0	>>11
10  6    GOTO/253                  ?0        ?12                  ?7                  	;0
11  8    EXIT/79                   ?0        8:'Please run as XUI!
' ?0                  	;0	<<9
12  10   BEGIN_SILENCE/57          #7=       ?0                   ?0                  	;0
13  10   FETCH_R/80                $8=       9:'argc'             ?0                  	;268435456
14  10   END_SILENCE/58            ?0        #7                   ?0                  	;0
15  10   JMPZ/43                   ?0        $8                   ?17                 	;0	>>17
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
26  18   FETCH_DIM_FUNC_ARG/93     $10=      16?0                 22:0                	;1
27  18   SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
28  18   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
29  18   SEND_VAR_NO_REF_EX/50     ?112      $11                  ?3                  	;0
30  18   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
31  18   CONCAT/8                  #13=      $12                  23:'/../www/init.php'	;0
32  18   INCLUDE_OR_EVAL/73        ?12       #13                  ?0                  	;8
33  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'cli_set_process_title'	;1
34  19   SEND_VAL_EX/116           ?80       26:'XUI[VOD]'        ?1                  	;0
35  19   DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
36  20   FETCH_CONSTANT/99         #16=      ?0                   27:'CRONS_TMP_PATH' 	;16
37  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'md5'            	;1
38  20   INIT_STATIC_METHOD_CALL/113 ?0        32:'XUI'             34:'a336b0dAD3EAF634'	;0
39  20   DO_FCALL/60               $17=      ?0                   ?0                  	;0
40  20   CONCAT/8                  #18=      $17                  36:'crons\\vod.php'	;0
41  20   SEND_VAL_EX/116           ?80       #18                  ?1                  	;0
42  20   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
43  20   CONCAT/8                  #20=      #16                  $19                 	;0
44  20   ASSIGN/38                 ?19       16?1                 #20                 	;0
45  21   GOTO/253                  ?0        ?46                  ?37                 	;0
46  23   INIT_STATIC_METHOD_CALL/113 ?0        38:'XUI'             40:'a3cf732C257Bd804'	;1
47  23   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
48  23   DO_FCALL/60               ?20       ?0                   ?0                  	;0
49  25   NOP/0                     ?0        ?0                   ?0                  	;0
50  251  INIT_FCALL/61             ?0        ?4288                42:'ab8369074df2aaa3'	;0
51  251  DO_FCALL/60               ?21       ?0                   ?0                  	;0
52  252  GOTO/253                  ?0        ?53                  ?43                 	;0
53  254  NOP/0                     ?0        ?0                   ?0                  	;0
54  264  NOP/0                     ?0        44:1                 ?0                  	;4294967295
*/

?>