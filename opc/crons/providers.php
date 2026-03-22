<?php


function readURL($A7ca171405b19571)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  9   RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1  11  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'stream_context_create'	;1
	2  11  SEND_VAL_EX/116           ?80       2:array (
  'http' => 
  array (
    'timeout' => 30,
  ),
) ?1                  	;0
	3  11  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	4  11  ASSIGN/38                 ?1        16?1                 $2                  	;0
	5  12  INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'json_decode'     	;2
	6  12  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'file_get_contents'	;3
	7  12  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	8  12  SEND_VAL_EX/116           ?96       7:false              ?2                  	;0
	9  12  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
	10 12  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	11 12  SEND_VAR_NO_REF_EX/50     ?80       $4                   ?1                  	;0
	12 12  SEND_VAL_EX/116           ?96       8:true               ?2                  	;0
	13 12  DO_FCALL_BY_NAME/131      $5=       ?0                   ?0                  	;0
	14 12  RETURN/62                 ?0        $5                   ?0                  	;0
	15 13  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

function Ab8369074dF2Aaa3()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   17   JMP/42                    ?0        ?1                   ?0                  	;0	>>1
	1   19   BIND_GLOBAL/168           ?0        16?0                 1:'b62d6460eb33ea07'	;0	<<0
	2   19   BIND_GLOBAL/168           ?0        16?1                 2:'A49cd9d2bf9ab4f1'	;0
	3   20   JMPZ/43                   ?0        16?1                 ?5                  	;0	>>5
	4   21   GOTO/253                  ?0        ?9                   ?3                  	;0
	5   23   INIT_METHOD_CALL/112      ?0        16?0                 4:'query'           	;1	<<3
	6   23   SEND_VAL_EX/116           ?80       6:'SELECT `id`, `stream_display_name`, `title_sync` FROM `streams` WHERE `title_sync` IS NOT NULL;' ?1                  	;0
	7   23   DO_FCALL/60               ?0        ?0                   ?0                  	;0
	8   24   GOTO/253                  ?0        ?26                  ?7                  	;0
	9   26   GOTO/253                  ?0        ?21                  ?8                  	;0
	10  28   JMPZ/43                   ?0        16?1                 ?12                 	;0	>>12
	11  29   GOTO/253                  ?0        ?16                  ?9                  	;0
	12  31   INIT_METHOD_CALL/112      ?0        16?0                 10:'query'          	;1	<<10
	13  31   SEND_VAL_EX/116           ?80       12:'SELECT * FROM `providers` WHERE `enabled` = 1;' ?1                  	;0
	14  31   DO_FCALL/60               ?1        ?0                   ?0                  	;0
	15  32   GOTO/253                  ?0        ?61                  ?13                 	;0
	16  34   INIT_METHOD_CALL/112      ?0        16?0                 14:'query'          	;2
	17  34   SEND_VAL_EX/116           ?80       16:'SELECT * FROM `providers` WHERE `id` = ?;' ?1                  	;0
	18  34   SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	19  34   DO_FCALL/60               ?2        ?0                   ?0                  	;0
	20  35   GOTO/253                  ?0        ?61                  ?17                 	;0
	21  37   INIT_METHOD_CALL/112      ?0        16?0                 18:'query'          	;2
	22  37   SEND_VAL_EX/116           ?80       20:'SELECT `id`, `stream_display_name`, `title_sync` FROM `streams` WHERE `title_sync` LIKE ?;' ?1                  	;0
	23  37   CONCAT/8                  #35=      16?1                 21:'_%'             	;0
	24  37   SEND_VAL_EX/116           ?96       #35                  ?2                  	;0
	25  37   DO_FCALL/60               ?4        ?0                   ?0                  	;0
	26  39   ASSIGN/38                 ?5        16?2                 22:array (
)        	;0
	27  40   INIT_METHOD_CALL/112      ?0        16?0                 23:'get_rows'       	;0
	28  40   DO_FCALL/60               $38=      ?0                   ?0                  	;0
	29  40   FE_RESET_R/77             $39=      $38                  ?59                 	;0
	30  40   FE_FETCH_R/78             ?0        $39                  16?3                	;59	>>59	<<58
	31  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'array_map'      	;2
	32  41   SEND_VAL_EX/116           ?80       27:'intval'          ?1                  	;0
	33  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'explode'        	;2
	34  41   SEND_VAL_EX/116           ?80       30:'_'               ?1                  	;0
	35  41   FETCH_DIM_FUNC_ARG/93     $40=      16?3                 31:'title_sync'     	;2
	36  41   SEND_VAR_EX/66            ?96       $40                  ?2                  	;0
	37  41   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
	38  41   SEND_VAR_NO_REF_EX/50     ?96       $41                  ?2                  	;0
	39  41   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	40  41   FETCH_LIST/98             $43=      $42                  32:0                	;0
	41  41   ASSIGN/38                 ?12       16?4                 $43                 	;0
	42  41   FETCH_LIST/98             $45=      $42                  33:1                	;0
	43  41   ASSIGN/38                 ?14       16?5                 $45                 	;0
	44  41   FREE/70                   ?0        $42                  ?0                  	;0
	45  42   ISSET_ISEMPTY_DIM_OBJ/115 #47=      16?2                 16?4                	;33554432
	46  42   JMPZ/43                   ?0        #47                  ?49                 	;0	>>49
	47  43   NOP/0                     ?0        ?0                   ?0                  	;1
	48  43   GOTO/253                  ?0        ?51                  ?34                 	;0
	49  45   ASSIGN_DIM/147            ?16       16?2                 16?4                	;0	<<46
	50  45   OP_DATA/137               ?0        35:array (
)         ?0                  	;0
	51  47   FETCH_DIM_R/81            $51=      16?3                 36:'id'             	;0
	52  47   INIT_ARRAY/71             #52=      $51                  ?0                  	;8
	53  47   FETCH_DIM_R/81            $53=      16?3                 37:'stream_display_name'	;0
	54  47   ADD_ARRAY_ELEMENT/72      #52=      $53                  ?0                  	;0
	55  47   FETCH_DIM_W/84            $49=      16?2                 16?4                	;0
	56  47   ASSIGN_DIM/147            ?18       $49                  16?5                	;0
	57  47   OP_DATA/137               ?0        #52                  ?0                  	;0
	58  48   JMP/42                    ?0        ?30                  ?0                  	;0	>>30
	59  48   FE_FREE/127               ?0        $39                  ?0                  	;0	<<29
	60  51   GOTO/253                  ?0        ?10                  ?38                 	;0
	61  54   INIT_METHOD_CALL/112      ?0        16?0                 39:'get_rows'       	;0
	62  54   DO_FCALL/60               $54=      ?0                   ?0                  	;0
	63  54   FE_RESET_R/77             $55=      $54                  ?520                	;0
	64  54   FE_FETCH_R/78             ?0        $55                  16?3                	;520	>>520	<<519
	65  55   NOP/0                     ?0        ?0                   ?0                  	;1
	66  55   GOTO/253                  ?0        ?490                 ?41                 	;0
	67  58   CONCAT/8                  #56=      16?7                 42:'&action=get_live_streams'	;0
	68  58   ASSIGN/38                 ?25       16?6                 #56                 	;0
	69  59   INIT_FCALL/61             ?0        ?176                 43:'readurl'        	;1
	70  59   SEND_VAR/117              ?80       16?6                 ?1                  	;0
	71  59   DO_FCALL/60               $58=      ?0                   ?0                  	;0
	72  59   ASSIGN/38                 ?27       16?8                 $58                 	;0
	73  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'count'          	;1
	74  60   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
	75  60   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
	76  60   ASSIGN_DIM/147            ?28       16?9                 44:'streams'        	;0
	77  60   OP_DATA/137               ?0        $61                  ?0                  	;0
	78  61   CONCAT/8                  #62=      16?7                 47:'&action=get_vod_streams'	;0
	79  61   ASSIGN/38                 ?31       16?10                #62                 	;0
	80  62   NOP/0                     ?0        ?0                   ?0                  	;1
	81  62   GOTO/253                  ?0        ?438                 ?48                 	;0
	82  65   FETCH_DIM_R/81            $64=      16?3                 49:'username'       	;0
	83  65   CONCAT/8                  #65=      50:'player_api.php?username=' $64                 	;0
	84  65   CONCAT/8                  #66=      #65                  51:'&password='     	;0
	85  65   FETCH_DIM_R/81            $67=      16?3                 52:'password'       	;0
	86  65   CONCAT/8                  #68=      #66                  $67                 	;0
	87  65   ASSIGN_CONCAT/30          ?37       16?7                 #68                 	;0
	88  67   INIT_FCALL/61             ?0        ?176                 53:'readurl'        	;1
	89  67   SEND_VAR/117              ?80       16?7                 ?1                  	;0
	90  67   DO_FCALL/60               $70=      ?0                   ?0                  	;0
	91  67   ASSIGN/38                 ?39       16?11                $70                 	;0
	92  68   JMPZ/43                   ?0        16?11                ?95                 	;0	>>95
	93  69   NOP/0                     ?0        ?0                   ?0                  	;1
	94  69   GOTO/253                  ?0        ?147                 ?54                 	;0
	95  71   NOP/0                     ?0        ?0                   ?0                  	;1	<<92
	96  71   GOTO/253                  ?0        ?139                 ?55                 	;0
	97  73   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'array_keys'     	;1
	98  73   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
	99  73   DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
	100 73   FE_RESET_R/77             $73=      $72                  ?113                	;0
	101 73   FE_FETCH_R/78             ?0        $73                  16?13               	;113	>>113	<<112
	102 74   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'in_array'       	;2
	103 74   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
	104 74   SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
	105 74   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
	106 74   JMPZ/43                   ?0        $74                  ?110                	;0	>>110
	107 75   NOP/0                     ?0        ?0                   ?0                  	;1
	108 75   NOP/0                     ?0        ?0                   ?0                  	;1
	109 75   GOTO/253                  ?0        ?112                 ?60                 	;0
	110 77   ASSIGN_DIM/147            ?43       16?15                ?4397406            	;0	<<106
	111 77   OP_DATA/137               ?0        16?13                ?0                  	;0
	112 79   JMP/42                    ?0        ?101                 ?0                  	;0	>>101
	113 79   FE_FREE/127               ?0        $73                  ?0                  	;0	<<100
	114 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'count'          	;1
	115 82   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
	116 82   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
	117 82   IS_SMALLER/19             #77=      63:0                 $76                 	;0
	118 82   BOOL_NOT/13               #78=      #77                  ?0                  	;0
	119 82   JMPZ/43                   ?0        #78                  ?122                	;0	>>122
	120 83   NOP/0                     ?0        ?0                   ?0                  	;1
	121 83   GOTO/253                  ?0        ?137                 ?64                 	;0
	122 85   INIT_METHOD_CALL/112      ?0        16?0                 65:'query'          	;2	<<119
	123 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'implode'        	;2
	124 85   SEND_VAL_EX/116           ?80       69:','               ?1                  	;0
	125 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'array_map'      	;2
	126 85   SEND_VAL_EX/116           ?80       72:'intval'          ?1                  	;0
	127 85   SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
	128 85   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
	129 85   SEND_VAR_NO_REF_EX/50     ?96       $79                  ?2                  	;0
	130 85   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
	131 85   CONCAT/8                  #81=      73:'DELETE FROM `providers_streams` WHERE `provider_id` = ? AND `stream_id` IN (' $80                 	;0
	132 85   CONCAT/8                  #82=      #81                  74:');'             	;0
	133 85   SEND_VAL_EX/116           ?80       #82                  ?1                  	;0
	134 85   FETCH_DIM_FUNC_ARG/93     $83=      16?3                 75:'id'             	;2
	135 85   SEND_VAR_EX/66            ?96       $83                  ?2                  	;0
	136 85   DO_FCALL/60               ?52       ?0                   ?0                  	;0
	137 87   NOP/0                     ?0        ?0                   ?0                  	;1
	138 87   GOTO/253                  ?0        ?488                 ?76                 	;0
	139 89   ASSIGN/38                 ?53       16?16                77:0                	;0
	140 90   FETCH_DIM_R/81            $87=      16?3                 79:'exp_date'       	;0
	141 90   JMP_SET/152               #88=      $87                  ?143                	;0
	142 90   QM_ASSIGN/22              #88=      80:-1                ?0                  	;0
	143 90   ASSIGN_DIM/147            ?54       16?9                 78:'exp_date'       	;0
	144 90   OP_DATA/137               ?0        #88                  ?0                  	;0
	145 91   NOP/0                     ?0        ?0                   ?0                  	;1
	146 91   GOTO/253                  ?0        ?435                 ?81                 	;0
	147 93   ASSIGN/38                 ?57       16?16                82:1                	;0
	148 94   NOP/0                     ?0        ?0                   ?0                  	;1
	149 94   GOTO/253                  ?0        ?423                 ?83                 	;0
	150 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'time'           	;0
	151 97   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
	152 97   ASSIGN/38                 ?59       16?17                $90                 	;0
	153 98   INIT_ARRAY/71             #92=      16?8                 86:'live'           	;10
	154 98   ADD_ARRAY_ELEMENT/72      #92=      16?18                87:'movie'          	;0
	155 98   FE_RESET_R/77             $93=      #92                  ?368                	;0
	156 98   FE_FETCH_R/78             #94=      $93                  16?19               	;368	>>368	<<367
	157 98   ASSIGN/38                 ?63       16?20                #94                 	;0
	158 99   FE_RESET_R/77             $96=      16?19                ?366                	;0
	159 99   FE_FETCH_R/78             ?0        $96                  16?21               	;366	>>366	<<365
	160 100  NOP/0                     ?0        ?0                   ?0                  	;1
	161 100  NOP/0                     ?0        ?0                   ?0                  	;1
	162 100  NOP/0                     ?0        ?0                   ?0                  	;1
	163 100  GOTO/253                  ?0        ?333                 ?88                 	;0
	164 102  FETCH_DIM_R/81            $97=      16?21                89:'stream_id'      	;0
	165 102  FETCH_DIM_R/81            $98=      16?12                $97                 	;0
	166 102  ASSIGN/38                 ?67       16?22                $98                 	;0
	167 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'md5'            	;1
	168 103  CONCAT/8                  #100=     16?23                92:'_'              	;0
	169 103  FETCH_DIM_R/81            $101=     16?21                93:'name'           	;0
	170 103  JMP_SET/152               #102=     $101                 ?172                	;0
	171 103  QM_ASSIGN/22              #102=     94:''                ?0                  	;0
	172 103  CONCAT/8                  #103=     #100                 #102                	;0
	173 103  CONCAT/8                  #104=     #103                 95:'_'              	;0
	174 103  FETCH_DIM_R/81            $105=     16?21                96:'stream_icon'    	;0
	175 103  JMP_SET/152               #106=     $105                 ?177                	;0
	176 103  QM_ASSIGN/22              #106=     97:''                ?0                  	;0
	177 103  CONCAT/8                  #107=     #104                 #106                	;0
	178 103  CONCAT/8                  #108=     #107                 98:'_'              	;0
	179 103  IS_EQUAL/17               #109=     16?20                99:'live'           	;0
	180 103  JMPZ/43                   ?0        #109                 ?184                	;0	>>184
	181 103  FETCH_DIM_R/81            $110=     16?21                100:'epg_channel_id'	;0
	182 103  QM_ASSIGN/22              #111=     $110                 ?0                  	;0
	183 103  JMP/42                    ?0        ?186                 ?0                  	;0	>>186
	184 103  FETCH_DIM_R/81            $112=     16?21                101:'container_extension'	;0	<<180
	185 103  QM_ASSIGN/22              #111=     $112                 ?0                  	;0
	186 103  JMP_SET/152               #113=     #111                 ?188                	;0	<<183
	187 103  QM_ASSIGN/22              #113=     102:''               ?0                  	;0
	188 103  CONCAT/8                  #114=     #108                 #113                	;0
	189 103  SEND_VAL_EX/116           ?80       #114                 ?1                  	;0
	190 103  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
	191 103  IS_NOT_EQUAL/18           #116=     $115                 16?22               	;0
	192 103  BOOL_NOT/13               #117=     #116                 ?0                  	;0
	193 103  JMPZ/43                   ?0        #117                 ?198                	;0	>>198
	194 104  NOP/0                     ?0        ?0                   ?0                  	;1
	195 104  NOP/0                     ?0        ?0                   ?0                  	;1
	196 104  NOP/0                     ?0        ?0                   ?0                  	;1
	197 104  GOTO/253                  ?0        ?223                 ?103                	;0
	198 106  INIT_METHOD_CALL/112      ?0        16?0                 104:'query'         	;9	<<193
	199 106  SEND_VAL_EX/116           ?80       106:'UPDATE `providers_streams` SET `category_id` = ?, `category_array` = ?, `stream_display_name` = ?, `stream_icon` = ?, `channel_id` = ?, `modified` = ? WHERE `provider_id` = ? AND `stream_id` = ?;' ?1                  	;0
	200 106  SEND_VAR_EX/66            ?96       16?23                ?2                  	;0
	201 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'json_encode'   	;1
	202 106  SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
	203 106  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
	204 106  SEND_VAR_NO_REF_EX/50     ?112      $118                 ?3                  	;0
	205 106  FETCH_DIM_FUNC_ARG/93     $119=     16?21                109:'name'          	;4
	206 106  SEND_VAR_EX/66            ?128      $119                 ?4                  	;0
	207 106  FETCH_DIM_FUNC_ARG/93     $120=     16?21                110:'stream_icon'   	;5
	208 106  SEND_VAR_EX/66            ?144      $120                 ?5                  	;0
	209 106  IS_EQUAL/17               #121=     16?20                111:'live'          	;0
	210 106  JMPZ/43                   ?0        #121                 ?214                	;0	>>214
	211 106  FETCH_DIM_R/81            $122=     16?21                112:'epg_channel_id'	;0
	212 106  QM_ASSIGN/22              #123=     $122                 ?0                  	;0
	213 106  JMP/42                    ?0        ?216                 ?0                  	;0	>>216
	214 106  FETCH_DIM_R/81            $124=     16?21                113:'container_extension'	;0	<<210
	215 106  QM_ASSIGN/22              #123=     $124                 ?0                  	;0
	216 106  SEND_VAL_EX/116           ?160      #123                 ?6                  	;0	<<213
	217 106  SEND_VAR_EX/66            ?176      16?17                ?7                  	;0
	218 106  FETCH_DIM_FUNC_ARG/93     $125=     16?3                 114:'id'            	;8
	219 106  SEND_VAR_EX/66            ?192      $125                 ?8                  	;0
	220 106  FETCH_DIM_FUNC_ARG/93     $126=     16?21                115:'stream_id'     	;9
	221 106  SEND_VAR_EX/66            ?208      $126                 ?9                  	;0
	222 106  DO_FCALL/60               ?95       ?0                   ?0                  	;0
	223 109  NOP/0                     ?0        ?0                   ?0                  	;1
	224 109  NOP/0                     ?0        ?0                   ?0                  	;1
	225 109  NOP/0                     ?0        ?0                   ?0                  	;1
	226 109  GOTO/253                  ?0        ?284                 ?116                	;0
	227 113  NOP/0                     ?0        ?0                   ?0                  	;1
	228 113  NOP/0                     ?0        ?0                   ?0                  	;1
	229 113  NOP/0                     ?0        ?0                   ?0                  	;1
	230 113  GOTO/253                  ?0        ?365                 ?117                	;0
	231 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'implode'       	;2
	232 115  SEND_VAL_EX/116           ?80       120:','              ?1                  	;0
	233 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'array_map'     	;2
	234 115  SEND_VAL_EX/116           ?80       123:'intval'         ?1                  	;0
	235 115  SEND_VAR_EX/66            ?96       16?23                ?2                  	;0
	236 115  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
	237 115  SEND_VAR_NO_REF_EX/50     ?96       $128                 ?2                  	;0
	238 115  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
	239 115  CONCAT/8                  #130=     124:'['              $129                	;0
	240 115  CONCAT/8                  #131=     #130                 125:']'             	;0
	241 115  ASSIGN/38                 ?100      16?23                #131                	;0
	242 116  FETCH_DIM_R/81            $133=     16?21                126:'stream_id'     	;0
	243 116  ISSET_ISEMPTY_DIM_OBJ/115 #134=     16?12                $133                	;33554432
	244 116  JMPZ/43                   ?0        #134                 ?249                	;0	>>249
	245 117  NOP/0                     ?0        ?0                   ?0                  	;1
	246 117  NOP/0                     ?0        ?0                   ?0                  	;1
	247 117  NOP/0                     ?0        ?0                   ?0                  	;1
	248 117  GOTO/253                  ?0        ?280                 ?127                	;0
	249 119  INIT_METHOD_CALL/112      ?0        16?0                 128:'query'         	;11	<<244
	250 119  SEND_VAL_EX/116           ?80       130:'INSERT INTO `providers_streams`(`provider_id`, `type`, `stream_id`, `category_id`, `category_array`, `stream_display_name`, `stream_icon`, `channel_id`, `added`, `modified`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' ?1                  	;0
	251 119  FETCH_DIM_FUNC_ARG/93     $135=     16?3                 131:'id'            	;2
	252 119  SEND_VAR_EX/66            ?96       $135                 ?2                  	;0
	253 119  SEND_VAR_EX/66            ?112      16?20                ?3                  	;0
	254 119  FETCH_DIM_FUNC_ARG/93     $136=     16?21                132:'stream_id'     	;4
	255 119  SEND_VAR_EX/66            ?128      $136                 ?4                  	;0
	256 119  SEND_VAR_EX/66            ?144      16?23                ?5                  	;0
	257 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'json_encode'   	;1
	258 119  SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
	259 119  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
	260 119  SEND_VAR_NO_REF_EX/50     ?160      $137                 ?6                  	;0
	261 119  FETCH_DIM_FUNC_ARG/93     $138=     16?21                135:'name'          	;7
	262 119  SEND_VAR_EX/66            ?176      $138                 ?7                  	;0
	263 119  FETCH_DIM_FUNC_ARG/93     $139=     16?21                136:'stream_icon'   	;8
	264 119  SEND_VAR_EX/66            ?192      $139                 ?8                  	;0
	265 119  IS_EQUAL/17               #140=     16?20                137:'live'          	;0
	266 119  JMPZ/43                   ?0        #140                 ?270                	;0	>>270
	267 119  FETCH_DIM_R/81            $141=     16?21                138:'epg_channel_id'	;0
	268 119  QM_ASSIGN/22              #142=     $141                 ?0                  	;0
	269 119  JMP/42                    ?0        ?272                 ?0                  	;0	>>272
	270 119  FETCH_DIM_R/81            $143=     16?21                139:'container_extension'	;0	<<266
	271 119  QM_ASSIGN/22              #142=     $143                 ?0                  	;0
	272 119  SEND_VAL_EX/116           ?208      #142                 ?9                  	;0	<<269
	273 119  SEND_VAR_EX/66            ?224      16?17                ?10                 	;0
	274 119  SEND_VAR_EX/66            ?240      16?17                ?11                 	;0
	275 119  DO_FCALL/60               ?112      ?0                   ?0                  	;0
	276 120  NOP/0                     ?0        ?0                   ?0                  	;1
	277 120  NOP/0                     ?0        ?0                   ?0                  	;1
	278 120  NOP/0                     ?0        ?0                   ?0                  	;1
	279 120  GOTO/253                  ?0        ?223                 ?140                	;0
	280 122  NOP/0                     ?0        ?0                   ?0                  	;1
	281 122  NOP/0                     ?0        ?0                   ?0                  	;1
	282 122  NOP/0                     ?0        ?0                   ?0                  	;1
	283 122  GOTO/253                  ?0        ?164                 ?141                	;0
	284 124  IS_EQUAL/17               #145=     16?20                142:'live'          	;0
	285 124  JMPZ_EX/46                #145=     #145                 ?291                	;0	>>291
	286 124  FETCH_DIM_R/81            $146=     16?3                 143:'id'            	;0
	287 124  FETCH_DIM_R/81            $148=     16?21                144:'stream_id'     	;0
	288 124  FETCH_DIM_IS/90           $147=     16?2                 $146                	;0
	289 124  ISSET_ISEMPTY_DIM_OBJ/115 #149=     $147                 $148                	;33554432
	290 124  BOOL/52                   #145=     #149                 ?0                  	;0
	291 124  BOOL_NOT/13               #150=     #145                 ?0                  	;0	<<285
	292 124  JMPZ/43                   ?0        #150                 ?297                	;0	>>297
	293 125  NOP/0                     ?0        ?0                   ?0                  	;1
	294 125  NOP/0                     ?0        ?0                   ?0                  	;1
	295 125  NOP/0                     ?0        ?0                   ?0                  	;1
	296 125  GOTO/253                  ?0        ?227                 ?145                	;0
	297 127  FETCH_DIM_R/81            $151=     16?21                146:'name'          	;0	<<292
	298 127  FETCH_DIM_R/81            $152=     16?3                 147:'id'            	;0
	299 127  FETCH_DIM_R/81            $154=     16?21                148:'stream_id'     	;0
	300 127  FETCH_DIM_R/81            $153=     16?2                 $152                	;0
	301 127  FETCH_DIM_R/81            $155=     $153                 $154                	;0
	302 127  FETCH_DIM_R/81            $156=     $155                 149:1               	;0
	303 127  IS_NOT_EQUAL/18           #157=     $151                 $156                	;0
	304 127  BOOL_NOT/13               #158=     #157                 ?0                  	;0
	305 127  JMPZ/43                   ?0        #158                 ?310                	;0	>>310
	306 128  NOP/0                     ?0        ?0                   ?0                  	;1
	307 128  NOP/0                     ?0        ?0                   ?0                  	;1
	308 128  NOP/0                     ?0        ?0                   ?0                  	;1
	309 128  GOTO/253                  ?0        ?329                 ?150                	;0
	310 130  INIT_METHOD_CALL/112      ?0        16?0                 151:'query'         	;3	<<305
	311 130  SEND_VAL_EX/116           ?80       153:'UPDATE `streams` SET `stream_display_name` = ? WHERE `id` = ?;' ?1                  	;0
	312 130  FETCH_DIM_FUNC_ARG/93     $159=     16?21                154:'name'          	;2
	313 130  SEND_VAR_EX/66            ?96       $159                 ?2                  	;0
	314 130  FETCH_DIM_R/81            $160=     16?3                 155:'id'            	;0
	315 130  FETCH_DIM_R/81            $162=     16?21                156:'stream_id'     	;0
	316 130  FETCH_DIM_FUNC_ARG/93     $161=     16?2                 $160                	;3
	317 130  FETCH_DIM_FUNC_ARG/93     $163=     $161                 $162                	;3
	318 130  FETCH_DIM_FUNC_ARG/93     $164=     $163                 157:0               	;3
	319 130  SEND_VAR_EX/66            ?112      $164                 ?3                  	;0
	320 130  DO_FCALL/60               ?133      ?0                   ?0                  	;0
	321 131  INIT_STATIC_METHOD_CALL/113 ?0        158:'XUI'            160:'Cac325153a658C37'	;1
	322 131  FETCH_DIM_R/81            $166=     16?3                 162:'id'            	;0
	323 131  FETCH_DIM_R/81            $168=     16?21                163:'stream_id'     	;0
	324 131  FETCH_DIM_FUNC_ARG/93     $167=     16?2                 $166                	;1
	325 131  FETCH_DIM_FUNC_ARG/93     $169=     $167                 $168                	;1
	326 131  FETCH_DIM_FUNC_ARG/93     $170=     $169                 164:0               	;1
	327 131  SEND_VAR_EX/66            ?80       $170                 ?1                  	;0
	328 131  DO_FCALL/60               ?139      ?0                   ?0                  	;0
	329 133  NOP/0                     ?0        ?0                   ?0                  	;1
	330 133  NOP/0                     ?0        ?0                   ?0                  	;1
	331 133  NOP/0                     ?0        ?0                   ?0                  	;1
	332 133  GOTO/253                  ?0        ?227                 ?165                	;0
	333 135  FETCH_DIM_R/81            $173=     16?21                166:'stream_id'     	;0
	334 135  ASSIGN_DIM/147            ?140      16?14                ?5126               	;0
	335 135  OP_DATA/137               ?0        $173                 ?0                  	;0
	336 136  ISSET_ISEMPTY_DIM_OBJ/115 #174=     16?21                167:'category_ids'  	;33554432
	337 136  JMPZ/43                   ?0        #174                 ?349                	;0	>>349
	338 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'is_array'      	;1
	339 136  FETCH_DIM_FUNC_ARG/93     $175=     16?21                170:'category_ids'  	;1
	340 136  SEND_VAR_EX/66            ?80       $175                 ?1                  	;0
	341 136  DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
	342 136  JMPZ/43                   ?0        $176                 ?346                	;0	>>346
	343 136  FETCH_DIM_R/81            $177=     16?21                171:'category_ids'  	;0
	344 136  QM_ASSIGN/22              #178=     $177                 ?0                  	;0
	345 136  JMP/42                    ?0        ?347                 ?0                  	;0	>>347
	346 136  QM_ASSIGN/22              #178=     172:array (
)        ?0                  	;0	<<342
	347 136  QM_ASSIGN/22              #179=     #178                 ?0                  	;0	<<345
	348 136  JMP/42                    ?0        ?352                 ?0                  	;0	>>352
	349 136  FETCH_DIM_R/81            $180=     16?21                173:'category_id'   	;0	<<337
	350 136  INIT_ARRAY/71             #181=     $180                 ?0                  	;4
	351 136  QM_ASSIGN/22              #179=     #181                 ?0                  	;0
	352 136  ASSIGN/38                 ?150      16?23                #179                	;0	<<348
	353 137  ASSIGN/38                 ?151      16?24                174:array (
)       	;0
	354 138  FE_RESET_R/77             $184=     16?23                ?360                	;0
	355 138  FE_FETCH_R/78             ?0        $184                 16?25               	;360	>>360	<<359
	356 139  FETCH_DIM_R/81            $186=     16?26                16?25               	;0
	357 139  ASSIGN_DIM/147            ?153      16?24                ?135                	;0
	358 139  OP_DATA/137               ?0        $186                 ?0                  	;0
	359 140  JMP/42                    ?0        ?355                 ?0                  	;0	>>355
	360 140  FE_FREE/127               ?0        $184                 ?0                  	;0	<<354
	361 143  NOP/0                     ?0        ?0                   ?0                  	;1
	362 143  NOP/0                     ?0        ?0                   ?0                  	;1
	363 143  NOP/0                     ?0        ?0                   ?0                  	;1
	364 143  GOTO/253                  ?0        ?231                 ?175                	;0
	365 144  JMP/42                    ?0        ?159                 ?0                  	;0	>>159
	366 144  FE_FREE/127               ?0        $96                  ?0                  	;0	<<158
	367 147  JMP/42                    ?0        ?156                 ?0                  	;0	>>156
	368 147  FE_FREE/127               ?0        $93                  ?0                  	;0	<<155
	369 150  ASSIGN/38                 ?155      16?15                176:array (
)       	;0
	370 151  NOP/0                     ?0        ?0                   ?0                  	;1
	371 151  GOTO/253                  ?0        ?97                  ?177                	;0
	372 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'time'          	;0
	373 153  DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
	374 153  ASSIGN/38                 ?157      16?27                $188                	;0
	375 154  INIT_METHOD_CALL/112      ?0        16?0                 180:'query'         	;5
	376 154  SEND_VAL_EX/116           ?80       182:'UPDATE `providers` SET `data` = ?, `last_changed` = ?, `status` = ? WHERE `id` = ?;' ?1                  	;0
	377 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'json_encode'   	;1
	378 154  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
	379 154  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
	380 154  SEND_VAR_NO_REF_EX/50     ?96       $190                 ?2                  	;0
	381 154  SEND_VAR_EX/66            ?112      16?27                ?3                  	;0
	382 154  SEND_VAR_EX/66            ?128      16?16                ?4                  	;0
	383 154  FETCH_DIM_FUNC_ARG/93     $191=     16?3                 185:'id'            	;5
	384 154  SEND_VAR_EX/66            ?144      $191                 ?5                  	;0
	385 154  DO_FCALL/60               ?160      ?0                   ?0                  	;0
	386 155  INIT_METHOD_CALL/112      ?0        16?0                 186:'query'         	;2
	387 155  SEND_VAL_EX/116           ?80       188:'SELECT `type`, `stream_id`, `category_id`, `stream_display_name`, `stream_icon`, `channel_id` FROM `providers_streams` WHERE `provider_id` = ?;' ?1                  	;0
	388 155  FETCH_DIM_FUNC_ARG/93     $193=     16?3                 189:'id'            	;2
	389 155  SEND_VAR_EX/66            ?96       $193                 ?2                  	;0
	390 155  DO_FCALL/60               ?162      ?0                   ?0                  	;0
	391 156  ASSIGN/38                 $195=     16?12                190:array (
)       	;0
	392 156  ASSIGN/38                 ?164      16?14                $195                	;0
	393 157  INIT_METHOD_CALL/112      ?0        16?0                 191:'get_rows'      	;0
	394 157  DO_FCALL/60               $197=     ?0                   ?0                  	;0
	395 157  FE_RESET_R/77             $198=     $197                 ?420                	;0
	396 157  FE_FETCH_R/78             ?0        $198                 16?21               	;420	>>420	<<419
	397 158  FETCH_DIM_R/81            $199=     16?21                193:'stream_id'     	;0
	398 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'md5'           	;1
	399 158  FETCH_DIM_R/81            $201=     16?21                196:'category_id'   	;0
	400 158  CONCAT/8                  #202=     $201                 197:'_'             	;0
	401 158  FETCH_DIM_R/81            $203=     16?21                198:'stream_display_name'	;0
	402 158  JMP_SET/152               #204=     $203                 ?404                	;0
	403 158  QM_ASSIGN/22              #204=     199:''               ?0                  	;0
	404 158  CONCAT/8                  #205=     #202                 #204                	;0
	405 158  CONCAT/8                  #206=     #205                 200:'_'             	;0
	406 158  FETCH_DIM_R/81            $207=     16?21                201:'stream_icon'   	;0
	407 158  JMP_SET/152               #208=     $207                 ?409                	;0
	408 158  QM_ASSIGN/22              #208=     202:''               ?0                  	;0
	409 158  CONCAT/8                  #209=     #206                 #208                	;0
	410 158  CONCAT/8                  #210=     #209                 203:'_'             	;0
	411 158  FETCH_DIM_R/81            $211=     16?21                204:'channel_id'    	;0
	412 158  JMP_SET/152               #212=     $211                 ?414                	;0
	413 158  QM_ASSIGN/22              #212=     205:''               ?0                  	;0
	414 158  CONCAT/8                  #213=     #210                 #212                	;0
	415 158  SEND_VAL_EX/116           ?80       #213                 ?1                  	;0
	416 158  DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
	417 158  ASSIGN_DIM/147            ?168      16?12                $199                	;0
	418 158  OP_DATA/137               ?0        $214                 ?0                  	;0
	419 159  JMP/42                    ?0        ?396                 ?0                  	;0	>>396
	420 159  FE_FREE/127               ?0        $198                 ?0                  	;0	<<395
	421 161  NOP/0                     ?0        ?0                   ?0                  	;1
	422 161  GOTO/253                  ?0        ?150                 ?206                	;0
	423 163  FETCH_DIM_R/81            $216=     16?11                208:'user_info'     	;0
	424 163  FETCH_DIM_R/81            $217=     $216                 209:'max_connections'	;0
	425 163  ASSIGN_DIM/147            ?183      16?9                 207:'max_connections'	;0
	426 163  OP_DATA/137               ?0        $217                 ?0                  	;0
	427 164  FETCH_DIM_R/81            $219=     16?11                211:'user_info'     	;0
	428 164  FETCH_DIM_R/81            $220=     $219                 212:'active_cons'   	;0
	429 164  ASSIGN_DIM/147            ?186      16?9                 210:'active_connections'	;0
	430 164  OP_DATA/137               ?0        $220                 ?0                  	;0
	431 165  FETCH_DIM_R/81            $222=     16?11                214:'user_info'     	;0
	432 165  FETCH_DIM_R/81            $223=     $222                 215:'exp_date'      	;0
	433 165  ASSIGN_DIM/147            ?189      16?9                 213:'exp_date'      	;0
	434 165  OP_DATA/137               ?0        $223                 ?0                  	;0
	435 167  ASSIGN/38                 ?192      16?26                216:array (
)       	;0
	436 168  NOP/0                     ?0        ?0                   ?0                  	;1
	437 168  GOTO/253                  ?0        ?460                 ?217                	;0
	438 170  INIT_FCALL/61             ?0        ?176                 218:'readurl'       	;1
	439 170  SEND_VAR/117              ?80       16?10                ?1                  	;0
	440 170  DO_FCALL/60               $225=     ?0                   ?0                  	;0
	441 170  ASSIGN/38                 ?194      16?18                $225                	;0
	442 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'count'         	;1
	443 171  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
	444 171  DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
	445 171  ASSIGN_DIM/147            ?195      16?9                 219:'movies'        	;0
	446 171  OP_DATA/137               ?0        $228                 ?0                  	;0
	447 172  CONCAT/8                  #229=     16?7                 222:'&action=get_series'	;0
	448 172  ASSIGN/38                 ?198      16?28                #229                	;0
	449 173  INIT_FCALL/61             ?0        ?176                 223:'readurl'       	;1
	450 173  SEND_VAR/117              ?80       16?28                ?1                  	;0
	451 173  DO_FCALL/60               $231=     ?0                   ?0                  	;0
	452 173  ASSIGN/38                 ?200      16?29                $231                	;0
	453 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'count'         	;1
	454 174  SEND_VAR_EX/66            ?80       16?29                ?1                  	;0
	455 174  DO_FCALL_BY_NAME/131      $234=     ?0                   ?0                  	;0
	456 174  ASSIGN_DIM/147            ?201      16?9                 224:'series'        	;0
	457 174  OP_DATA/137               ?0        $234                 ?0                  	;0
	458 175  NOP/0                     ?0        ?0                   ?0                  	;1
	459 175  GOTO/253                  ?0        ?372                 ?227                	;0
	460 177  CONCAT/8                  #235=     16?7                 228:'&action=get_live_categories'	;0
	461 177  ASSIGN/38                 ?204      16?30                #235                	;0
	462 178  INIT_FCALL/61             ?0        ?176                 229:'readurl'       	;1
	463 178  SEND_VAR/117              ?80       16?30                ?1                  	;0
	464 178  DO_FCALL/60               $237=     ?0                   ?0                  	;0
	465 178  FE_RESET_R/77             $238=     $237                 ?472                	;0
	466 178  FE_FETCH_R/78             ?0        $238                 16?31               	;472	>>472	<<471
	467 179  FETCH_DIM_R/81            $239=     16?31                230:'category_id'   	;0
	468 179  FETCH_DIM_R/81            $241=     16?31                231:'category_name' 	;0
	469 179  ASSIGN_DIM/147            ?208      16?26                $239                	;0
	470 179  OP_DATA/137               ?0        $241                 ?0                  	;0
	471 180  JMP/42                    ?0        ?466                 ?0                  	;0	>>466
	472 180  FE_FREE/127               ?0        $238                 ?0                  	;0	<<465
	473 183  CONCAT/8                  #242=     16?7                 232:'&action=get_vod_categories'	;0
	474 183  ASSIGN/38                 ?211      16?30                #242                	;0
	475 184  INIT_FCALL/61             ?0        ?176                 233:'readurl'       	;1
	476 184  SEND_VAR/117              ?80       16?30                ?1                  	;0
	477 184  DO_FCALL/60               $244=     ?0                   ?0                  	;0
	478 184  FE_RESET_R/77             $245=     $244                 ?485                	;0
	479 184  FE_FETCH_R/78             ?0        $245                 16?31               	;485	>>485	<<484
	480 185  FETCH_DIM_R/81            $246=     16?31                234:'category_id'   	;0
	481 185  FETCH_DIM_R/81            $248=     16?31                235:'category_name' 	;0
	482 185  ASSIGN_DIM/147            ?215      16?26                $246                	;0
	483 185  OP_DATA/137               ?0        $248                 ?0                  	;0
	484 186  JMP/42                    ?0        ?479                 ?0                  	;0	>>479
	485 186  FE_FREE/127               ?0        $245                 ?0                  	;0	<<478
	486 188  NOP/0                     ?0        ?0                   ?0                  	;1
	487 188  GOTO/253                  ?0        ?67                  ?236                	;0
	488 191  NOP/0                     ?0        ?0                   ?0                  	;1
	489 191  GOTO/253                  ?0        ?519                 ?237                	;0
	490 193  ASSIGN/38                 ?217      16?9                 238:array (
)       	;0
	491 194  FETCH_DIM_R/81            $250=     16?3                 239:'ssl'           	;0
	492 194  JMPZ/43                   ?0        $250                 ?495                	;0	>>495
	493 194  QM_ASSIGN/22              #251=     240:'https'          ?0                  	;0
	494 194  JMP/42                    ?0        ?496                 ?0                  	;0	>>496
	495 194  QM_ASSIGN/22              #251=     241:'http'           ?0                  	;0	<<492
	496 194  CONCAT/8                  #252=     #251                 242:'://'           	;0	<<494
	497 194  FETCH_DIM_R/81            $253=     16?3                 243:'ip'            	;0
	498 194  CONCAT/8                  #254=     #252                 $253                	;0
	499 194  CONCAT/8                  #255=     #254                 244:':'             	;0
	500 194  FETCH_DIM_R/81            $256=     16?3                 245:'port'          	;0
	501 194  CONCAT/8                  #257=     #255                 $256                	;0
	502 194  CONCAT/8                  #258=     #257                 246:'/'             	;0
	503 194  ASSIGN/38                 ?227      16?7                 #258                	;0
	504 195  FETCH_DIM_R/81            $260=     16?3                 247:'legacy'        	;0
	505 195  JMPZ/43                   ?0        $260                 ?508                	;0	>>508
	506 196  NOP/0                     ?0        ?0                   ?0                  	;1
	507 196  GOTO/253                  ?0        ?82                  ?248                	;0
	508 198  FETCH_DIM_R/81            $261=     16?3                 249:'username'      	;0	<<505
	509 198  CONCAT/8                  #262=     250:'player_api/'    $261                	;0
	510 198  CONCAT/8                  #263=     #262                 251:'/'             	;0
	511 198  FETCH_DIM_R/81            $264=     16?3                 252:'password'      	;0
	512 198  CONCAT/8                  #265=     #263                 $264                	;0
	513 198  CONCAT/8                  #266=     #265                 253:'?connections=1'	;0
	514 198  ASSIGN_CONCAT/30          ?235      16?7                 #266                	;0
	515 199  NOP/0                     ?0        ?0                   ?0                  	;1
	516 199  GOTO/253                  ?0        ?88                  ?254                	;0
	517 200  NOP/0                     ?0        ?0                   ?0                  	;1
	518 200  GOTO/253                  ?0        ?82                  ?255                	;0
	519 201  JMP/42                    ?0        ?64                  ?0                  	;0	>>64
	520 201  FE_FREE/127               ?0        $55                  ?0                  	;0	<<63
	521 204  GOTO/253                  ?0        ?522                 ?256                	;0
	522 206  NOP/0                     ?0        257:NULL             ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   241  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   241  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   242  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   242  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   242  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   242  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   242  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   243  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   245  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   245  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  247  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  247  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  247  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  247  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  247  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  248  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?59                  ?0                  	;0	>>59
1   5    ASSIGN/38                 ?0        16?0                 1:300               	;0
2   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'set_time_limit'  	;1
3   6    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
4   6    DO_FCALL_BY_NAME/131      ?1        ?0                   ?0                  	;0
5   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'ini_set'         	;2
6   7    SEND_VAL_EX/116           ?80       6:'max_execution_time' ?1                  	;0
7   7    SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
8   7    DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
9   9    NOP/0                     ?0        ?0                   ?0                  	;0
10  15   NOP/0                     ?0        ?0                   ?0                  	;0
11  207  GOTO/253                  ?0        ?56                  ?7                  	;0
12  209  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'register_shutdown_function'	;1
13  209  SEND_VAL_EX/116           ?80       10:'shutdown'        ?1                  	;0
14  209  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
15  210  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'str_replace'    	;3
16  210  SEND_VAL_EX/116           ?80       13:'\\'              ?1                  	;0
17  210  SEND_VAL_EX/116           ?96       14:'/'               ?2                  	;0
18  210  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'dirname'        	;1
19  210  FETCH_DIM_FUNC_ARG/93     $8=       16?1                 17:0                	;1
20  210  SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
21  210  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
22  210  SEND_VAR_NO_REF_EX/50     ?112      $9                   ?3                  	;0
23  210  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
24  210  CONCAT/8                  #11=      $10                  18:'/../www/init.php'	;0
25  210  INCLUDE_OR_EVAL/73        ?8        #11                  ?0                  	;8
26  211  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'cli_set_process_title'	;1
27  211  SEND_VAL_EX/116           ?80       21:'XUI[Providers]'  ?1                  	;0
28  211  DO_FCALL_BY_NAME/131      ?9        ?0                   ?0                  	;0
29  212  FETCH_CONSTANT/99         #14=      ?0                   22:'CRONS_TMP_PATH' 	;16
30  212  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'md5'            	;1
31  212  INIT_STATIC_METHOD_CALL/113 ?0        27:'XUI'             29:'a336B0Dad3eaF634'	;0
32  212  DO_FCALL/60               $15=      ?0                   ?0                  	;0
33  212  CONCAT/8                  #16=      $15                  31:'crons\\providers.php'	;0
34  212  SEND_VAL_EX/116           ?80       #16                  ?1                  	;0
35  212  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
36  212  CONCAT/8                  #18=      #14                  $17                 	;0
37  212  ASSIGN/38                 ?15       16?2                 #18                 	;0
38  213  INIT_STATIC_METHOD_CALL/113 ?0        32:'XUI'             34:'a3cF732C257Bd804'	;1
39  213  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
40  213  DO_FCALL/60               ?16       ?0                   ?0                  	;0
41  214  GOTO/253                  ?0        ?1                   ?36                 	;0
42  217  ASSIGN/38                 ?17       16?3                 37:NULL             	;0
43  218  INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'count'          	;1
44  218  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
45  218  DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
46  218  IS_SMALLER/19             #23=      40:1                 $22                 	;0
47  218  BOOL_NOT/13               #24=      #23                  ?0                  	;0
48  218  JMPZ/43                   ?0        #24                  ?50                 	;0	>>50
49  219  GOTO/253                  ?0        ?55                  ?41                 	;0
50  221  INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'intval'         	;1	<<48
51  221  FETCH_DIM_FUNC_ARG/93     $25=      16?1                 44:1                	;1
52  221  SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
53  221  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
54  221  ASSIGN/38                 ?23       16?3                 $26                 	;0
55  223  GOTO/253                  ?0        ?12                  ?45                 	;0
56  225  INIT_FCALL/61             ?0        ?4368                46:'ab8369074df2aaa3'	;0
57  225  DO_FCALL/60               ?24       ?0                   ?0                  	;0
58  226  GOTO/253                  ?0        ?77                  ?47                 	;0
59  228  INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'posix_getpwuid' 	;1	<<0
60  228  INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'posix_geteuid'  	;0
61  228  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
62  228  SEND_VAR_NO_REF_EX/50     ?80       $29                  ?1                  	;0
63  228  DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
64  228  FETCH_DIM_R/81            $31=      $30                  52:'name'           	;0
65  228  IS_NOT_EQUAL/18           #32=      $31                  53:'xui'            	;0
66  228  BOOL_NOT/13               #33=      #32                  ?0                  	;0
67  228  JMPZ/43                   ?0        #33                  ?69                 	;0	>>69
68  229  GOTO/253                  ?0        ?70                  ?54                 	;0
69  231  EXIT/79                   ?0        55:'Please run as XUI!
' ?0                  	;0	<<67
70  233  BEGIN_SILENCE/57          #34=      ?0                   ?0                  	;0
71  233  FETCH_R/80                $35=      56:'argc'            ?0                  	;268435456
72  233  END_SILENCE/58            ?0        #34                  ?0                  	;0
73  233  JMPZ/43                   ?0        $35                  ?75                 	;0	>>75
74  234  GOTO/253                  ?0        ?42                  ?57                 	;0
75  236  EXIT/79                   ?0        58:0                 ?0                  	;0	<<73
76  237  GOTO/253                  ?0        ?42                  ?59                 	;0
77  239  NOP/0                     ?0        ?0                   ?0                  	;0
78  249  NOP/0                     ?0        60:1                 ?0                  	;4294967295
*/

?>