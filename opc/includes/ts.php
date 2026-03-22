<?php


class TS
{
	static public $rBuffer;
	static public $rPosition;
	static public $rByte;
	static public $rIndex;

	public function setPacket($E6ebe1d751d53850)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  10  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  12  FETCH_STATIC_PROP_W/174   $1=       0:'rBuffer'          ?513                	;0
		2  12  ASSIGN/38                 ?1        $1                   16?0                	;0
		3  13  FETCH_STATIC_PROP_W/174   $3=       1:'rPosition'        ?513                	;0
		4  13  ASSIGN/38                 ?3        $3                   2:7                 	;0
		5  14  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'array_values'    	;1
		6  14  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'unpack'          	;2
		7  14  SEND_VAL_EX/116           ?80       8:'C'                ?1                  	;0
		8  14  FETCH_STATIC_PROP_FUNC_ARG/177 $6=       9:'rBuffer'          ?513                	;2
		9  14  FETCH_DIM_FUNC_ARG/93     $7=       $6                   10:0                	;2
		10 14  SEND_VAR_EX/66            ?96       $7                   ?2                  	;0
		11 14  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		12 14  SEND_VAR_NO_REF_EX/50     ?80       $8                   ?1                  	;0
		13 14  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		14 14  FETCH_DIM_R/81            $10=      $9                   11:0                	;0
		15 14  FETCH_STATIC_PROP_W/174   $5=       3:'rByte'            ?513                	;0
		16 14  ASSIGN/38                 ?10       $5                   $10                 	;0
		17 15  FETCH_STATIC_PROP_W/174   $12=      12:'rIndex'          ?513                	;0
		18 15  ASSIGN/38                 ?12       $12                  13:1                	;0
		19 16  NOP/0                     ?0        14:NULL              ?0                  	;4294967295
		*/
	}

	public function getBits($F55077c7edc722ca)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  18  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  20  JMP/42                    ?0        ?54                  ?0                  	;0	>>54
		2  22  FETCH_STATIC_PROP_W/174   $3=       1:'rByte'            ?513                	;0
		3  22  ASSIGN/38                 ?1        $3                   2:0                 	;0
		4  23  GOTO/253                  ?0        ?18                  ?3                  	;0
		5  25  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'array_values'    	;1
		6  25  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unpack'          	;2
		7  25  SEND_VAL_EX/116           ?80       9:'C'                ?1                  	;0
		8  25  FETCH_STATIC_PROP_R/173   $7=       11:'rIndex'          ?513                	;0
		9  25  FETCH_STATIC_PROP_FUNC_ARG/177 $6=       10:'rBuffer'         ?513                	;2
		10 25  FETCH_DIM_FUNC_ARG/93     $8=       $6                   $7                  	;2
		11 25  SEND_VAR_EX/66            ?96       $8                   ?2                  	;0
		12 25  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
		13 25  SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
		14 25  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		15 25  FETCH_DIM_R/81            $11=      $10                  12:0                	;0
		16 25  FETCH_STATIC_PROP_W/174   $5=       4:'rByte'            ?513                	;0
		17 25  ASSIGN/38                 ?9        $5                   $11                 	;0
		18 27  GOTO/253                  ?0        ?49                  ?13                 	;0
		19 29  ASSIGN_SL/28              ?10       16?1                 14:1                	;0
		20 30  FETCH_STATIC_PROP_R/173   $14=      15:'rByte'           ?513                	;0
		21 30  BW_AND/10                 #15=      $14                  16?2                	;0
		22 30  BOOL_NOT/13               #16=      #15                  ?0                  	;0
		23 30  JMPZ/43                   ?0        #16                  ?25                 	;0	>>25
		24 31  GOTO/253                  ?0        ?26                  ?16                 	;0
		25 33  ASSIGN_BW_OR/31           ?14       16?1                 17:1                	;0	<<23
		26 35  ASSIGN_SR/29              ?15       16?2                 18:1                	;0
		27 36  GOTO/253                  ?0        ?28                  ?19                 	;0
		28 38  FETCH_STATIC_PROP_RW/175  $19=      20:'rPosition'       ?513                	;0
		29 38  ASSIGN_SUB/24             ?17       $19                  21:1                	;0
		30 39  FETCH_STATIC_PROP_R/173   $21=      22:'rPosition'       ?513                	;0
		31 39  IS_SMALLER/19             #22=      $21                  23:0                	;0
		32 39  BOOL_NOT/13               #23=      #22                  ?0                  	;0
		33 39  JMPZ/43                   ?0        #23                  ?35                 	;0	>>35
		34 40  GOTO/253                  ?0        ?51                  ?24                 	;0
		35 42  FETCH_STATIC_PROP_W/174   $24=      25:'rPosition'       ?513                	;0	<<33
		36 42  ASSIGN/38                 ?22       $24                  26:7                	;0
		37 43  FETCH_STATIC_PROP_R/173   $26=      27:'rPosition'       ?513                	;0
		38 43  SL/6                      #27=      28:1                 $26                 	;0
		39 43  ASSIGN/38                 ?25       16?2                 #27                 	;0
		40 44  FETCH_STATIC_PROP_R/173   $29=      29:'rIndex'          ?513                	;0
		41 44  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'strlen'         	;1
		42 44  FETCH_STATIC_PROP_FUNC_ARG/177 $30=      32:'rBuffer'         ?513                	;1
		43 44  SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
		44 44  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		45 44  IS_SMALLER/19             #32=      $29                  $31                 	;0
		46 44  JMPZ/43                   ?0        #32                  ?48                 	;0	>>48
		47 45  GOTO/253                  ?0        ?5                   ?33                 	;0
		48 47  GOTO/253                  ?0        ?2                   ?34                 	;0	<<46
		49 49  FETCH_STATIC_PROP_RW/175  $33=      35:'rIndex'          ?513                	;0
		50 49  ASSIGN_ADD/23             ?31       $33                  36:1                	;0
		51 51  GOTO/253                  ?0        ?58                  ?37                 	;0
		52 53  RETURN/62                 ?0        16?1                 ?0                  	;0
		53 54  GOTO/253                  ?0        ?64                  ?38                 	;0
		54 56  ASSIGN/38                 ?32       16?1                 39:0                	;0	<<1
		55 57  FETCH_STATIC_PROP_R/173   $36=      40:'rPosition'       ?513                	;0
		56 57  SL/6                      #37=      41:1                 $36                 	;0
		57 57  ASSIGN/38                 ?35       16?2                 #37                 	;0
		58 59  IS_SMALLER/19             #39=      42:0                 16?0                	;0
		59 59  BOOL_NOT/13               #40=      #39                  ?0                  	;0
		60 59  JMPZ/43                   ?0        #40                  ?62                 	;0	>>62
		61 60  GOTO/253                  ?0        ?52                  ?43                 	;0
		62 62  ASSIGN_SUB/24             ?38       16?0                 44:1                	;0	<<60
		63 63  GOTO/253                  ?0        ?19                  ?45                 	;0
		64 65  NOP/0                     ?0        46:NULL              ?0                  	;4294967295
		*/
	}

	public function parsePacket()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   69   JMP/42                    ?0        ?125                 ?0                  	;0	>>125
		1   71   FETCH_DIM_R/81            $8=       16?0                 1:'pointer_field'   	;0
		2   71   BOOL_NOT/13               #9=       $8                   ?0                  	;0
		3   71   JMPZ/43                   ?0        #9                   ?5                  	;0	>>5
		4   72   GOTO/253                  ?0        ?9                   ?2                  	;0
		5   74   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 3:'stepBytes'       	;1	<<3
		6   74   FETCH_DIM_FUNC_ARG/93     $10=      16?0                 5:'pointer_field'   	;1
		7   74   SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
		8   74   DO_FCALL/60               ?3        ?0                   ?0                  	;0
		9   76   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'array_merge'     	;2
		10  76   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		11  76   INIT_ARRAY/71             #12=      8:'pat'              9:'type'            	;50
		12  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 10:'getBits'        	;1
		13  76   SEND_VAL/65               ?80       12:8                 ?1                  	;0
		14  76   DO_FCALL/60               $13=      ?0                   ?0                  	;0
		15  76   ADD_ARRAY_ELEMENT/72      #12=      $13                  13:'table_id'       	;0
		16  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 14:'getBits'        	;1
		17  76   SEND_VAL/65               ?80       16:1                 ?1                  	;0
		18  76   DO_FCALL/60               $14=      ?0                   ?0                  	;0
		19  76   ADD_ARRAY_ELEMENT/72      #12=      $14                  17:'section_syntax_indicator'	;0
		20  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 18:'getBits'        	;1
		21  76   SEND_VAL/65               ?80       20:1                 ?1                  	;0
		22  76   DO_FCALL/60               $15=      ?0                   ?0                  	;0
		23  76   ADD_ARRAY_ELEMENT/72      #12=      $15                  21:'marker'         	;0
		24  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 22:'getBits'        	;1
		25  76   SEND_VAL/65               ?80       24:2                 ?1                  	;0
		26  76   DO_FCALL/60               $16=      ?0                   ?0                  	;0
		27  76   ADD_ARRAY_ELEMENT/72      #12=      $16                  25:'reserved_1'     	;0
		28  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 26:'getBits'        	;1
		29  76   SEND_VAL/65               ?80       28:12                ?1                  	;0
		30  76   DO_FCALL/60               $17=      ?0                   ?0                  	;0
		31  76   ADD_ARRAY_ELEMENT/72      #12=      $17                  29:'section_length' 	;0
		32  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 30:'getBits'        	;1
		33  76   SEND_VAL/65               ?80       32:16                ?1                  	;0
		34  76   DO_FCALL/60               $18=      ?0                   ?0                  	;0
		35  76   ADD_ARRAY_ELEMENT/72      #12=      $18                  33:'transport_stream_id'	;0
		36  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 34:'getBits'        	;1
		37  76   SEND_VAL/65               ?80       36:2                 ?1                  	;0
		38  76   DO_FCALL/60               $19=      ?0                   ?0                  	;0
		39  76   ADD_ARRAY_ELEMENT/72      #12=      $19                  37:'reserved_2'     	;0
		40  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 38:'getBits'        	;1
		41  76   SEND_VAL/65               ?80       40:5                 ?1                  	;0
		42  76   DO_FCALL/60               $20=      ?0                   ?0                  	;0
		43  76   ADD_ARRAY_ELEMENT/72      #12=      $20                  41:'version_number' 	;0
		44  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 42:'getBits'        	;1
		45  76   SEND_VAL/65               ?80       44:1                 ?1                  	;0
		46  76   DO_FCALL/60               $21=      ?0                   ?0                  	;0
		47  76   ADD_ARRAY_ELEMENT/72      #12=      $21                  45:'current_next_indicator'	;0
		48  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 46:'getBits'        	;1
		49  76   SEND_VAL/65               ?80       48:8                 ?1                  	;0
		50  76   DO_FCALL/60               $22=      ?0                   ?0                  	;0
		51  76   ADD_ARRAY_ELEMENT/72      #12=      $22                  49:'section_number' 	;0
		52  76   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 50:'getBits'        	;1
		53  76   SEND_VAL/65               ?80       52:8                 ?1                  	;0
		54  76   DO_FCALL/60               $23=      ?0                   ?0                  	;0
		55  76   ADD_ARRAY_ELEMENT/72      #12=      $23                  53:'last_section_number'	;0
		56  76   SEND_VAL_EX/116           ?96       #12                  ?2                  	;0
		57  76   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
		58  76   ASSIGN/38                 ?17       16?0                 $24                 	;0
		59  78   GOTO/253                  ?0        ?286                 ?54                 	;0
		60  80   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 55:'getBits'        	;1
		61  80   SEND_VAL/65               ?80       57:15                ?1                  	;0
		62  80   DO_FCALL/60               $26=      ?0                   ?0                  	;0
		63  80   ASSIGN/38                 ?19       16?1                 $26                 	;0
		64  81   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 58:'getBits'        	;1
		65  81   SEND_VAL/65               ?80       60:1                 ?1                  	;0
		66  81   DO_FCALL/60               ?20       ?0                   ?0                  	;0
		67  82   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 61:'getBits'        	;1
		68  82   SEND_VAL/65               ?80       63:15                ?1                  	;0
		69  82   DO_FCALL/60               $29=      ?0                   ?0                  	;0
		70  82   ASSIGN/38                 ?22       16?2                 $29                 	;0
		71  83   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 64:'getBits'        	;1
		72  83   SEND_VAL/65               ?80       66:1                 ?1                  	;0
		73  83   DO_FCALL/60               ?23       ?0                   ?0                  	;0
		74  84   SL/6                      #33=      16?3                 68:30               	;0
		75  84   SL/6                      #34=      16?1                 69:15               	;0
		76  84   ADD/1                     #35=      #33                  #34                 	;0
		77  84   ADD/1                     #36=      #35                  16?2                	;0
		78  84   ASSIGN_DIM/147            ?24       16?0                 67:'pts'            	;0
		79  84   OP_DATA/137               ?0        #36                  ?0                  	;0
		80  85   GOTO/253                  ?0        ?382                 ?70                 	;0
		81  87   UNSET_DIM/75              ?0        16?0                 71:'adaptation_field_length'	;0
		82  88   GOTO/253                  ?0        ?191                 ?72                 	;0
		83  90   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'array_merge'    	;2
		84  90   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		85  90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 75:'getBits'        	;1
		86  90   SEND_VAL/65               ?80       77:1                 ?1                  	;0
		87  90   DO_FCALL/60               $37=      ?0                   ?0                  	;0
		88  90   INIT_ARRAY/71             #38=      $37                  78:'discontinuity_indicator'	;34
		89  90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 79:'getBits'        	;1
		90  90   SEND_VAL/65               ?80       81:1                 ?1                  	;0
		91  90   DO_FCALL/60               $39=      ?0                   ?0                  	;0
		92  90   ADD_ARRAY_ELEMENT/72      #38=      $39                  82:'random_access_indicator'	;0
		93  90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 83:'getBits'        	;1
		94  90   SEND_VAL/65               ?80       85:1                 ?1                  	;0
		95  90   DO_FCALL/60               $40=      ?0                   ?0                  	;0
		96  90   ADD_ARRAY_ELEMENT/72      #38=      $40                  86:'priority_indicator'	;0
		97  90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 87:'getBits'        	;1
		98  90   SEND_VAL/65               ?80       89:1                 ?1                  	;0
		99  90   DO_FCALL/60               $41=      ?0                   ?0                  	;0
		100 90   ADD_ARRAY_ELEMENT/72      #38=      $41                  90:'pcr_flag'       	;0
		101 90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 91:'getBits'        	;1
		102 90   SEND_VAL/65               ?80       93:1                 ?1                  	;0
		103 90   DO_FCALL/60               $42=      ?0                   ?0                  	;0
		104 90   ADD_ARRAY_ELEMENT/72      #38=      $42                  94:'opcr_flag'      	;0
		105 90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 95:'getBits'        	;1
		106 90   SEND_VAL/65               ?80       97:1                 ?1                  	;0
		107 90   DO_FCALL/60               $43=      ?0                   ?0                  	;0
		108 90   ADD_ARRAY_ELEMENT/72      #38=      $43                  98:'splicing_point_flag'	;0
		109 90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 99:'getBits'        	;1
		110 90   SEND_VAL/65               ?80       101:1                ?1                  	;0
		111 90   DO_FCALL/60               $44=      ?0                   ?0                  	;0
		112 90   ADD_ARRAY_ELEMENT/72      #38=      $44                  102:'transport_private_data_flag'	;0
		113 90   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 103:'getBits'       	;1
		114 90   SEND_VAL/65               ?80       105:1                ?1                  	;0
		115 90   DO_FCALL/60               $45=      ?0                   ?0                  	;0
		116 90   ADD_ARRAY_ELEMENT/72      #38=      $45                  106:'adaptation_field_extension_flag'	;0
		117 90   SEND_VAL_EX/116           ?96       #38                  ?2                  	;0
		118 90   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
		119 90   ASSIGN/38                 ?39       16?0                 $46                 	;0
		120 91   FETCH_DIM_R/81            $48=      16?0                 107:'pcr_flag'      	;0
		121 91   BOOL_NOT/13               #49=      $48                  ?0                  	;0
		122 91   JMPZ/43                   ?0        #49                  ?124                	;0	>>124
		123 92   GOTO/253                  ?0        ?264                 ?108                	;0
		124 94   GOTO/253                  ?0        ?240                 ?109                	;0	<<122
		125 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 110:'getBits'       	;1	<<0
		126 96   SEND_VAL/65               ?80       112:8                ?1                  	;0
		127 96   DO_FCALL/60               $50=      ?0                   ?0                  	;0
		128 96   INIT_ARRAY/71             #51=      $50                  113:'sync_byte'     	;34
		129 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 114:'getBits'       	;1
		130 96   SEND_VAL/65               ?80       116:1                ?1                  	;0
		131 96   DO_FCALL/60               $52=      ?0                   ?0                  	;0
		132 96   ADD_ARRAY_ELEMENT/72      #51=      $52                  117:'transport_error_indicator'	;0
		133 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 118:'getBits'       	;1
		134 96   SEND_VAL/65               ?80       120:1                ?1                  	;0
		135 96   DO_FCALL/60               $53=      ?0                   ?0                  	;0
		136 96   ADD_ARRAY_ELEMENT/72      #51=      $53                  121:'payload_unit_start_indicator'	;0
		137 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 122:'getBits'       	;1
		138 96   SEND_VAL/65               ?80       124:1                ?1                  	;0
		139 96   DO_FCALL/60               $54=      ?0                   ?0                  	;0
		140 96   ADD_ARRAY_ELEMENT/72      #51=      $54                  125:'transport_priority'	;0
		141 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 126:'getBits'       	;1
		142 96   SEND_VAL/65               ?80       128:13               ?1                  	;0
		143 96   DO_FCALL/60               $55=      ?0                   ?0                  	;0
		144 96   ADD_ARRAY_ELEMENT/72      #51=      $55                  129:'pid'           	;0
		145 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 130:'getBits'       	;1
		146 96   SEND_VAL/65               ?80       132:2                ?1                  	;0
		147 96   DO_FCALL/60               $56=      ?0                   ?0                  	;0
		148 96   ADD_ARRAY_ELEMENT/72      #51=      $56                  133:'scrambling_control'	;0
		149 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 134:'getBits'       	;1
		150 96   SEND_VAL/65               ?80       136:2                ?1                  	;0
		151 96   DO_FCALL/60               $57=      ?0                   ?0                  	;0
		152 96   ADD_ARRAY_ELEMENT/72      #51=      $57                  137:'adaptation_field_exist'	;0
		153 96   INIT_STATIC_METHOD_CALL/113 ?0        ?513                 138:'getBits'       	;1
		154 96   SEND_VAL/65               ?80       140:4                ?1                  	;0
		155 96   DO_FCALL/60               $58=      ?0                   ?0                  	;0
		156 96   ADD_ARRAY_ELEMENT/72      #51=      $58                  141:'continuity_counter'	;0
		157 96   ASSIGN/38                 ?51       16?0                 #51                 	;0
		158 97   FETCH_DIM_R/81            $60=      16?0                 142:'adaptation_field_exist'	;0
		159 97   JMPNZ_EX/47               #61=      $60                  ?163                	;0	>>163
		160 97   FETCH_DIM_R/81            $62=      16?0                 143:'adaptation_field_exist'	;0
		161 97   IS_EQUAL/17               #63=      $62                  144:3               	;0
		162 97   BOOL/52                   #61=      #63                  ?0                  	;0
		163 97   BOOL_NOT/13               #64=      #61                  ?0                  	;0	<<159
		164 97   JMPZ/43                   ?0        #64                  ?166                	;0	>>166
		165 98   GOTO/253                  ?0        ?220                 ?145                	;0
		166 100  FETCH_STATIC_PROP_R/173   $65=      146:'rIndex'         ?513                	;0	<<164
		167 100  ASSIGN/38                 ?58       16?4                 $65                 	;0
		168 101  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 148:'getBits'       	;1
		169 101  SEND_VAL/65               ?80       150:8                ?1                  	;0
		170 101  DO_FCALL/60               $68=      ?0                   ?0                  	;0
		171 101  ASSIGN_DIM/147            ?59       16?0                 147:'adaptation_field_length'	;0
		172 101  OP_DATA/137               ?0        $68                  ?0                  	;0
		173 102  FETCH_DIM_R/81            $69=      16?0                 151:'adaptation_field_length'	;0
		174 102  IS_EQUAL/17               #70=      $69                  152:7               	;0
		175 102  JMPZ/43                   ?0        #70                  ?177                	;0	>>177
		176 103  GOTO/253                  ?0        ?83                  ?153                	;0
		177 105  GOTO/253                  ?0        ?81                  ?154                	;0	<<175
		178 107  FETCH_DIM_R/81            $71=      16?0                 155:'transport_private_data_flag'	;0
		179 107  BOOL_NOT/13               #72=      $71                  ?0                  	;0
		180 107  JMPZ/43                   ?0        #72                  ?182                	;0	>>182
		181 108  GOTO/253                  ?0        ?191                 ?156                	;0
		182 110  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 158:'getBits'       	;1	<<180
		183 110  SEND_VAL/65               ?80       160:8                ?1                  	;0
		184 110  DO_FCALL/60               $74=      ?0                   ?0                  	;0
		185 110  ASSIGN_DIM/147            ?65       16?0                 157:'transport_private_data_length'	;0
		186 110  OP_DATA/137               ?0        $74                  ?0                  	;0
		187 111  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 161:'stepBytes'     	;1
		188 111  FETCH_DIM_FUNC_ARG/93     $75=      16?0                 163:'transport_private_data_length'	;1
		189 111  SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
		190 111  DO_FCALL/60               ?68       ?0                   ?0                  	;0
		191 114  GOTO/253                  ?0        ?220                 ?164                	;0
		192 118  GOTO/253                  ?0        ?59                  ?165                	;0
		193 120  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 167:'getBits'       	;1
		194 120  SEND_VAL/65               ?80       169:8                ?1                  	;0
		195 120  DO_FCALL/60               $78=      ?0                   ?0                  	;0
		196 120  ASSIGN_DIM/147            ?69       16?0                 166:'pointer_field' 	;0
		197 120  OP_DATA/137               ?0        $78                  ?0                  	;0
		198 121  GOTO/253                  ?0        ?1                   ?170                	;0
		199 123  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 171:'getBits'       	;1
		200 123  SEND_VAL/65               ?80       173:15               ?1                  	;0
		201 123  DO_FCALL/60               $79=      ?0                   ?0                  	;0
		202 123  ASSIGN/38                 ?72       16?5                 $79                 	;0
		203 124  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 174:'getBits'       	;1
		204 124  SEND_VAL/65               ?80       176:1                ?1                  	;0
		205 124  DO_FCALL/60               ?73       ?0                   ?0                  	;0
		206 125  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 177:'getBits'       	;1
		207 125  SEND_VAL/65               ?80       179:15               ?1                  	;0
		208 125  DO_FCALL/60               $82=      ?0                   ?0                  	;0
		209 125  ASSIGN/38                 ?75       16?6                 $82                 	;0
		210 126  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 180:'getBits'       	;1
		211 126  SEND_VAL/65               ?80       182:1                ?1                  	;0
		212 126  DO_FCALL/60               ?76       ?0                   ?0                  	;0
		213 127  SL/6                      #86=      16?7                 184:30              	;0
		214 127  SL/6                      #87=      16?5                 185:15              	;0
		215 127  ADD/1                     #88=      #86                  #87                 	;0
		216 127  ADD/1                     #89=      #88                  16?6                	;0
		217 127  ASSIGN_DIM/147            ?77       16?0                 183:'dts'           	;0
		218 127  OP_DATA/137               ?0        #89                  ?0                  	;0
		219 128  GOTO/253                  ?0        ?192                 ?186                	;0
		220 131  FETCH_DIM_R/81            $90=      16?0                 187:'pid'           	;0
		221 131  IS_EQUAL/17               #91=      $90                  188:0               	;0
		222 131  JMPZ/43                   ?0        #91                  ?224                	;0	>>224
		223 132  GOTO/253                  ?0        ?193                 ?189                	;0
		224 134  FETCH_DIM_R/81            $92=      16?0                 190:'payload_unit_start_indicator'	;0	<<222
		225 134  BOOL_NOT/13               #93=      $92                  ?0                  	;0
		226 134  JMPZ/43                   ?0        #93                  ?228                	;0	>>228
		227 135  GOTO/253                  ?0        ?192                 ?191                	;0
		228 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'substr'        	;3	<<226
		229 137  FETCH_STATIC_PROP_FUNC_ARG/177 $95=      195:'rBuffer'        ?513                	;1
		230 137  SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
		231 137  FETCH_STATIC_PROP_FUNC_ARG/177 $96=      196:'rIndex'         ?513                	;2
		232 137  SEND_VAR_EX/66            ?96       $96                  ?2                  	;0
		233 137  SEND_VAL_EX/116           ?112      197:188              ?3                  	;0
		234 137  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
		235 137  FETCH_STATIC_PROP_W/174   $94=      192:'rBuffer'        ?513                	;0
		236 137  ASSIGN/38                 ?90       $94                  $97                 	;0
		237 138  FETCH_STATIC_PROP_W/174   $99=      198:'rIndex'         ?513                	;0
		238 138  ASSIGN/38                 ?92       $99                  199:0               	;0
		239 139  GOTO/253                  ?0        ?288                 ?200                	;0
		240 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'array_merge'   	;2
		241 141  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		242 141  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 203:'getBits'       	;1
		243 141  SEND_VAL/65               ?80       205:33               ?1                  	;0
		244 141  DO_FCALL/60               $101=     ?0                   ?0                  	;0
		245 141  INIT_ARRAY/71             #102=     $101                 206:'program_clock_reference_base'	;14
		246 141  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 207:'getBits'       	;1
		247 141  SEND_VAL/65               ?80       209:6                ?1                  	;0
		248 141  DO_FCALL/60               $103=     ?0                   ?0                  	;0
		249 141  ADD_ARRAY_ELEMENT/72      #102=     $103                 210:'reserved_pcr'  	;0
		250 141  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 211:'getBits'       	;1
		251 141  SEND_VAL/65               ?80       213:9                ?1                  	;0
		252 141  DO_FCALL/60               $104=     ?0                   ?0                  	;0
		253 141  ADD_ARRAY_ELEMENT/72      #102=     $104                 214:'program_clock_reference_extension'	;0
		254 141  SEND_VAL_EX/116           ?96       #102                 ?2                  	;0
		255 141  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
		256 141  ASSIGN/38                 ?98       16?0                 $105                	;0
		257 142  FETCH_DIM_R/81            $108=     16?0                 216:'program_clock_reference_base'	;0
		258 142  MUL/3                     #109=     $108                 217:300             	;0
		259 142  FETCH_DIM_R/81            $110=     16?0                 218:'program_clock_reference_extension'	;0
		260 142  ADD/1                     #111=     #109                 $110                	;0
		261 142  DIV/4                     #112=     #111                 219:27000000.0      	;0
		262 142  ASSIGN_DIM/147            ?99       16?0                 215:'pcr'           	;0
		263 142  OP_DATA/137               ?0        #112                 ?0                  	;0
		264 144  FETCH_DIM_R/81            $113=     16?0                 220:'opcr_flag'     	;0
		265 144  BOOL_NOT/13               #114=     $113                 ?0                  	;0
		266 144  JMPZ/43                   ?0        #114                 ?268                	;0	>>268
		267 145  GOTO/253                  ?0        ?405                 ?221                	;0
		268 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'array_merge'   	;2	<<266
		269 147  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		270 147  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 224:'getBits'       	;1
		271 147  SEND_VAL/65               ?80       226:33               ?1                  	;0
		272 147  DO_FCALL/60               $115=     ?0                   ?0                  	;0
		273 147  INIT_ARRAY/71             #116=     $115                 227:'original_program_clock_reference_base'	;14
		274 147  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 228:'getBits'       	;1
		275 147  SEND_VAL/65               ?80       230:6                ?1                  	;0
		276 147  DO_FCALL/60               $117=     ?0                   ?0                  	;0
		277 147  ADD_ARRAY_ELEMENT/72      #116=     $117                 231:'reserved_opcr' 	;0
		278 147  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 232:'getBits'       	;1
		279 147  SEND_VAL/65               ?80       234:9                ?1                  	;0
		280 147  DO_FCALL/60               $118=     ?0                   ?0                  	;0
		281 147  ADD_ARRAY_ELEMENT/72      #116=     $118                 235:'original_program_clock_reference_extension'	;0
		282 147  SEND_VAL_EX/116           ?96       #116                 ?2                  	;0
		283 147  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
		284 147  ASSIGN/38                 ?112      16?0                 $119                	;0
		285 148  GOTO/253                  ?0        ?398                 ?236                	;0
		286 150  RETURN/62                 ?0        16?0                 ?0                  	;0
		287 151  GOTO/253                  ?0        ?415                 ?237                	;0
		288 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'array_merge'   	;2
		289 153  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		290 153  INIT_ARRAY/71             #121=     240:'pes'            241:'type'          	;74
		291 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 242:'getBits'       	;1
		292 153  SEND_VAL/65               ?80       244:24               ?1                  	;0
		293 153  DO_FCALL/60               $122=     ?0                   ?0                  	;0
		294 153  ADD_ARRAY_ELEMENT/72      #121=     $122                 245:'packet_start_prefix'	;0
		295 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 246:'getBits'       	;1
		296 153  SEND_VAL/65               ?80       248:8                ?1                  	;0
		297 153  DO_FCALL/60               $123=     ?0                   ?0                  	;0
		298 153  ADD_ARRAY_ELEMENT/72      #121=     $123                 249:'stream_id'     	;0
		299 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 250:'getBits'       	;1
		300 153  SEND_VAL/65               ?80       252:16               ?1                  	;0
		301 153  DO_FCALL/60               $124=     ?0                   ?0                  	;0
		302 153  ADD_ARRAY_ELEMENT/72      #121=     $124                 253:'pes_packet_length'	;0
		303 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 254:'getBits'       	;1
		304 153  SEND_VAL/65               ?80       256:2                ?1                  	;0
		305 153  DO_FCALL/60               $125=     ?0                   ?0                  	;0
		306 153  ADD_ARRAY_ELEMENT/72      #121=     $125                 257:'marker_bits'   	;0
		307 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 258:'getBits'       	;1
		308 153  SEND_VAL/65               ?80       260:2                ?1                  	;0
		309 153  DO_FCALL/60               $126=     ?0                   ?0                  	;0
		310 153  ADD_ARRAY_ELEMENT/72      #121=     $126                 261:'scrambling_control'	;0
		311 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 262:'getBits'       	;1
		312 153  SEND_VAL/65               ?80       264:1                ?1                  	;0
		313 153  DO_FCALL/60               $127=     ?0                   ?0                  	;0
		314 153  ADD_ARRAY_ELEMENT/72      #121=     $127                 265:'priority'      	;0
		315 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 266:'getBits'       	;1
		316 153  SEND_VAL/65               ?80       268:1                ?1                  	;0
		317 153  DO_FCALL/60               $128=     ?0                   ?0                  	;0
		318 153  ADD_ARRAY_ELEMENT/72      #121=     $128                 269:'data_alignment_indicator'	;0
		319 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 270:'getBits'       	;1
		320 153  SEND_VAL/65               ?80       272:1                ?1                  	;0
		321 153  DO_FCALL/60               $129=     ?0                   ?0                  	;0
		322 153  ADD_ARRAY_ELEMENT/72      #121=     $129                 273:'copyright'     	;0
		323 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 274:'getBits'       	;1
		324 153  SEND_VAL/65               ?80       276:1                ?1                  	;0
		325 153  DO_FCALL/60               $130=     ?0                   ?0                  	;0
		326 153  ADD_ARRAY_ELEMENT/72      #121=     $130                 277:'original_or_copy'	;0
		327 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 278:'getBits'       	;1
		328 153  SEND_VAL/65               ?80       280:2                ?1                  	;0
		329 153  DO_FCALL/60               $131=     ?0                   ?0                  	;0
		330 153  ADD_ARRAY_ELEMENT/72      #121=     $131                 281:'pts_dts_indicator'	;0
		331 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 282:'getBits'       	;1
		332 153  SEND_VAL/65               ?80       284:1                ?1                  	;0
		333 153  DO_FCALL/60               $132=     ?0                   ?0                  	;0
		334 153  ADD_ARRAY_ELEMENT/72      #121=     $132                 285:'escr_flag'     	;0
		335 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 286:'getBits'       	;1
		336 153  SEND_VAL/65               ?80       288:1                ?1                  	;0
		337 153  DO_FCALL/60               $133=     ?0                   ?0                  	;0
		338 153  ADD_ARRAY_ELEMENT/72      #121=     $133                 289:'es_rate_flag'  	;0
		339 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 290:'getBits'       	;1
		340 153  SEND_VAL/65               ?80       292:1                ?1                  	;0
		341 153  DO_FCALL/60               $134=     ?0                   ?0                  	;0
		342 153  ADD_ARRAY_ELEMENT/72      #121=     $134                 293:'dsm_trick_mode_flag'	;0
		343 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 294:'getBits'       	;1
		344 153  SEND_VAL/65               ?80       296:1                ?1                  	;0
		345 153  DO_FCALL/60               $135=     ?0                   ?0                  	;0
		346 153  ADD_ARRAY_ELEMENT/72      #121=     $135                 297:'additional_copy_info_flag'	;0
		347 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 298:'getBits'       	;1
		348 153  SEND_VAL/65               ?80       300:1                ?1                  	;0
		349 153  DO_FCALL/60               $136=     ?0                   ?0                  	;0
		350 153  ADD_ARRAY_ELEMENT/72      #121=     $136                 301:'crc_flag'      	;0
		351 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 302:'getBits'       	;1
		352 153  SEND_VAL/65               ?80       304:1                ?1                  	;0
		353 153  DO_FCALL/60               $137=     ?0                   ?0                  	;0
		354 153  ADD_ARRAY_ELEMENT/72      #121=     $137                 305:'extension_flag'	;0
		355 153  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 306:'getBits'       	;1
		356 153  SEND_VAL/65               ?80       308:8                ?1                  	;0
		357 153  DO_FCALL/60               $138=     ?0                   ?0                  	;0
		358 153  ADD_ARRAY_ELEMENT/72      #121=     $138                 309:'pes_header_length'	;0
		359 153  SEND_VAL_EX/116           ?96       #121                 ?2                  	;0
		360 153  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
		361 153  ASSIGN/38                 ?132      16?0                 $139                	;0
		362 154  FETCH_DIM_R/81            $141=     16?0                 310:'pts_dts_indicator'	;0
		363 154  IS_EQUAL/17               #142=     $141                 311:2               	;0
		364 154  JMPNZ_EX/47               #142=     #142                 ?368                	;0	>>368
		365 154  FETCH_DIM_R/81            $143=     16?0                 312:'pts_dts_indicator'	;0
		366 154  IS_EQUAL/17               #144=     $143                 313:3               	;0
		367 154  BOOL/52                   #142=     #144                 ?0                  	;0
		368 154  BOOL_NOT/13               #145=     #142                 ?0                  	;0	<<364
		369 154  JMPZ/43                   ?0        #145                 ?371                	;0	>>371
		370 155  GOTO/253                  ?0        ?382                 ?314                	;0
		371 157  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 315:'getBits'       	;1	<<369
		372 157  SEND_VAL/65               ?80       317:4                ?1                  	;0
		373 157  DO_FCALL/60               ?138      ?0                   ?0                  	;0
		374 158  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 318:'getBits'       	;1
		375 158  SEND_VAL/65               ?80       320:3                ?1                  	;0
		376 158  DO_FCALL/60               $147=     ?0                   ?0                  	;0
		377 158  ASSIGN/38                 ?140      16?3                 $147                	;0
		378 159  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 321:'getBits'       	;1
		379 159  SEND_VAL/65               ?80       323:1                ?1                  	;0
		380 159  DO_FCALL/60               ?141      ?0                   ?0                  	;0
		381 160  GOTO/253                  ?0        ?60                  ?324                	;0
		382 163  FETCH_DIM_R/81            $150=     16?0                 325:'pts_dts_indicator'	;0
		383 163  IS_EQUAL/17               #151=     $150                 326:3               	;0
		384 163  BOOL_NOT/13               #152=     #151                 ?0                  	;0
		385 163  JMPZ/43                   ?0        #152                 ?387                	;0	>>387
		386 164  GOTO/253                  ?0        ?192                 ?327                	;0
		387 166  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 328:'getBits'       	;1	<<385
		388 166  SEND_VAL/65               ?80       330:4                ?1                  	;0
		389 166  DO_FCALL/60               ?145      ?0                   ?0                  	;0
		390 167  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 331:'getBits'       	;1
		391 167  SEND_VAL/65               ?80       333:3                ?1                  	;0
		392 167  DO_FCALL/60               $154=     ?0                   ?0                  	;0
		393 167  ASSIGN/38                 ?147      16?7                 $154                	;0
		394 168  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 334:'getBits'       	;1
		395 168  SEND_VAL/65               ?80       336:1                ?1                  	;0
		396 168  DO_FCALL/60               ?148      ?0                   ?0                  	;0
		397 169  GOTO/253                  ?0        ?199                 ?337                	;0
		398 171  FETCH_DIM_R/81            $158=     16?0                 339:'original_program_clock_reference_base'	;0
		399 171  MUL/3                     #159=     $158                 340:300             	;0
		400 171  FETCH_DIM_R/81            $160=     16?0                 341:'original_program_clock_reference_extension'	;0
		401 171  ADD/1                     #161=     #159                 $160                	;0
		402 171  DIV/4                     #162=     #161                 342:27000000.0      	;0
		403 171  ASSIGN_DIM/147            ?149      16?0                 338:'opcr'          	;0
		404 171  OP_DATA/137               ?0        #162                 ?0                  	;0
		405 173  FETCH_DIM_R/81            $163=     16?0                 343:'splicing_point_flag'	;0
		406 173  BOOL_NOT/13               #164=     $163                 ?0                  	;0
		407 173  JMPZ/43                   ?0        #164                 ?409                	;0	>>409
		408 174  GOTO/253                  ?0        ?414                 ?344                	;0
		409 176  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 346:'getBits'       	;1	<<407
		410 176  SEND_VAL/65               ?80       348:8                ?1                  	;0
		411 176  DO_FCALL/60               $166=     ?0                   ?0                  	;0
		412 176  ASSIGN_DIM/147            ?157      16?0                 345:'splice_countdown'	;0
		413 176  OP_DATA/137               ?0        $166                 ?0                  	;0
		414 178  GOTO/253                  ?0        ?178                 ?349                	;0
		415 180  NOP/0                     ?0        350:NULL             ?0                  	;4294967295
		*/
	}

	public function stepBytes($daf83d49b4736e8d)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   182  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   184  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'substr'          	;3
		2   184  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       2:'rBuffer'          ?513                	;1
		3   184  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
		4   184  FETCH_STATIC_PROP_R/173   $4=       3:'rIndex'           ?513                	;0
		5   184  SUB/2                     #5=       $4                   4:1                 	;0
		6   184  SEND_VAL_EX/116           ?96       #5                   ?2                  	;0
		7   184  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
		8   184  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		9   184  ASSIGN/38                 ?4        16?1                 $6                  	;0
		10  185  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'range'           	;2
		11  185  SEND_VAL_EX/116           ?80       7:0                  ?1                  	;0
		12  185  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
		13  185  DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
		14  185  FE_RESET_R/77             $9=       $8                   ?20                 	;0
		15  185  FE_FETCH_R/78             ?0        $9                   16?2                	;20	>>20	<<19
		16  186  INIT_STATIC_METHOD_CALL/113 ?0        ?513                 8:'getBits'         	;1
		17  186  SEND_VAL/65               ?80       10:8                 ?1                  	;0
		18  186  DO_FCALL/60               ?7        ?0                   ?0                  	;0
		19  187  JMP/42                    ?0        ?15                  ?0                  	;0	>>15
		20  187  FE_FREE/127               ?0        $9                   ?0                  	;0	<<14
		21  190  RETURN/62                 ?0        16?1                 ?0                  	;0
		22  191  NOP/0                     ?0        11:NULL              ?0                  	;4294967295
		*/
	}
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    NOP/0                     ?0        ?0                   ?0                  	;0
1   193  NOP/0                     ?0        0:1                  ?0                  	;4294967295
*/

?>