<?php


class EPG
{
	public $rValid = false;
	public $rEPGSource;
	public $rFilename;

	public function __construct($fd51b5505224fc7c, $A66eee85d9566710)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0  46  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1  46  RECV_INIT/64              16?1=     ?2                   0:false             	;0
		2  48  INIT_METHOD_CALL/112      ?0        ?4375549             1:'dE800Ff553c72d02'	;2
		3  48  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		4  48  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		5  48  DO_FCALL/60               ?0        ?0                   ?0                  	;0
		6  49  NOP/0                     ?0        3:NULL               ?0                  	;4294967295
		*/
	}

	public function A898aCe49e8E74A0()
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   53   JMP/42                    ?0        ?71                  ?0                  	;0	>>71
		1   56   FETCH_OBJ_R/82            $8=       16?1                 1:'title'           	;0
		2   56   ASSIGN/38                 ?1        16?0                 $8                  	;0
		3   57   FE_RESET_R/77             $10=      16?0                 ?30                 	;0
		4   57   FE_FETCH_R/78             ?0        $10                  16?2                	;30	>>30	<<29
		5   58   INIT_METHOD_CALL/112      ?0        16?2                 2:'attributes'      	;0
		6   58   DO_FCALL/60               $11=      ?0                   ?0                  	;0
		7   58   FETCH_OBJ_R/82            $12=      $11                  4:'lang'            	;0
		8   58   CAST/21                   #13=      $12                  ?0                  	;6
		9   58   ASSIGN/38                 ?6        16?3                 #13                 	;0
		10  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'in_array'        	;2
		11  59   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		12  59   FETCH_DIM_FUNC_ARG/93     $15=      16?4                 16?5                	;2
		13  59   FETCH_DIM_FUNC_ARG/93     $16=      $15                  7:'langs'           	;2
		14  59   SEND_VAR_EX/66            ?96       $16                  ?2                  	;0
		15  59   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		16  59   BOOL_NOT/13               #18=      $17                  ?0                  	;0
		17  59   JMPZ_EX/46                #18=      #18                  ?21                 	;0	>>21
		18  59   ISSET_ISEMPTY_CV/197      #19=      16?3                 ?0                  	;16777216
		19  59   BOOL_NOT/13               #20=      #19                  ?0                  	;0
		20  59   BOOL/52                   #18=      #20                  ?0                  	;0
		21  59   BOOL_NOT/13               #21=      #18                  ?0                  	;0	<<17
		22  59   JMPZ/43                   ?0        #21                  ?25                 	;0	>>25
		23  60   NOP/0                     ?0        ?0                   ?0                  	;1
		24  60   GOTO/253                  ?0        ?29                  ?8                  	;0
		25  62   FETCH_DIM_W/84            $22=      16?4                 16?5                	;0	<<22
		26  62   FETCH_DIM_W/84            $23=      $22                  9:'langs'           	;0
		27  62   ASSIGN_DIM/147            ?16       $23                  ?4397406            	;0
		28  62   OP_DATA/137               ?0        16?3                 ?0                  	;0
		29  64   JMP/42                    ?0        ?4                   ?0                  	;0	>>4
		30  64   FE_FREE/127               ?0        $10                  ?0                  	;0	<<3
		31  68   GOTO/253                  ?0        ?32                  ?10                 	;0
		32  70   GOTO/253                  ?0        ?114                 ?11                 	;0
		33  72   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'trim'           	;1
		34  72   INIT_METHOD_CALL/112      ?0        16?1                 14:'attributes'     	;0
		35  72   DO_FCALL/60               $25=      ?0                   ?0                  	;0
		36  72   FETCH_OBJ_R/82            $26=      $25                  16:'id'             	;0
		37  72   CAST/21                   #27=      $26                  ?0                  	;6
		38  72   SEND_VAL_EX/116           ?80       #27                  ?1                  	;0
		39  72   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
		40  72   ASSIGN/38                 ?21       16?5                 $28                 	;0
		41  73   ISSET_ISEMPTY_PROP_OBJ/148 #30=      16?1                 17:'display-name'   	;16777216
		42  73   BOOL_NOT/13               #31=      #30                  ?0                  	;0
		43  73   JMPZ/43                   ?0        #31                  ?51                 	;0	>>51
		44  73   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'trim'           	;1
		45  73   FETCH_OBJ_R/82            $32=      16?1                 20:'display-name'   	;0
		46  73   CAST/21                   #33=      $32                  ?0                  	;6
		47  73   SEND_VAL_EX/116           ?80       #33                  ?1                  	;0
		48  73   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
		49  73   QM_ASSIGN/22              #35=      $34                  ?0                  	;0
		50  73   JMP/42                    ?0        ?52                  ?0                  	;0	>>52
		51  73   QM_ASSIGN/22              #35=      21:''                ?0                  	;0	<<43
		52  73   ASSIGN/38                 ?28       16?6                 #35                 	;0	<<50
		53  74   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'array_key_exists'	;2
		54  74   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		55  74   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
		56  74   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
		57  74   BOOL_NOT/13               #38=      $37                  ?0                  	;0
		58  74   JMPZ/43                   ?0        #38                  ?60                 	;0	>>60
		59  75   GOTO/253                  ?0        ?62                  ?24                 	;0
		60  77   GOTO/253                  ?0        ?61                  ?25                 	;0	<<58
		61  79   GOTO/253                  ?0        ?72                  ?26                 	;0
		62  81   ASSIGN_DIM/147            ?31       16?4                 16?5                	;0
		63  81   OP_DATA/137               ?0        27:array (
)         ?0                  	;0
		64  82   FETCH_DIM_W/84            $40=      16?4                 16?5                	;0
		65  82   ASSIGN_DIM/147            ?33       $40                  28:'display_name'   	;0
		66  82   OP_DATA/137               ?0        16?6                 ?0                  	;0
		67  83   FETCH_DIM_W/84            $42=      16?4                 16?5                	;0
		68  83   ASSIGN_DIM/147            ?35       $42                  29:'langs'          	;0
		69  83   OP_DATA/137               ?0        30:array (
)         ?0                  	;0
		70  84   GOTO/253                  ?0        ?114                 ?31                 	;0
		71  86   ASSIGN/38                 ?36       16?4                 32:array (
)        	;0	<<0
		72  88   FETCH_OBJ_R/82            $45=      ?2670193280          33:'rEPGSource'     	;0
		73  88   INIT_METHOD_CALL/112      ?0        $45                  34:'getNode'        	;0
		74  88   DO_FCALL/60               $46=      ?0                   ?0                  	;0
		75  88   ASSIGN/38                 $47=      16?7                 $46                 	;0
		76  88   BOOL_NOT/13               #48=      $47                  ?0                  	;0
		77  88   JMPZ/43                   ?0        #48                  ?79                 	;0	>>79
		78  89   GOTO/253                  ?0        ?115                 ?36                 	;0
		79  91   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'simplexml_load_string'	;1	<<77
		80  91   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		81  91   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
		82  91   ASSIGN/38                 ?42       16?1                 $49                 	;0
		83  92   BOOL_NOT/13               #51=      16?1                 ?0                  	;0
		84  92   JMPZ/43                   ?0        #51                  ?86                 	;0	>>86
		85  93   GOTO/253                  ?0        ?114                 ?39                 	;0
		86  95   GOTO/253                  ?0        ?87                  ?40                 	;0	<<84
		87  97   INIT_METHOD_CALL/112      ?0        16?1                 41:'getName'        	;0
		88  97   DO_FCALL/60               $52=      ?0                   ?0                  	;0
		89  97   IS_EQUAL/17               #53=      $52                  43:'channel'        	;0
		90  97   JMPZ/43                   ?0        #53                  ?92                 	;0	>>92
		91  98   GOTO/253                  ?0        ?33                  ?44                 	;0
		92  100  INIT_METHOD_CALL/112      ?0        16?1                 45:'getName'        	;0	<<90
		93  100  DO_FCALL/60               $54=      ?0                   ?0                  	;0
		94  100  IS_EQUAL/17               #55=      $54                  47:'programme'      	;0
		95  100  BOOL_NOT/13               #56=      #55                  ?0                  	;0
		96  100  JMPZ/43                   ?0        #56                  ?98                 	;0	>>98
		97  101  GOTO/253                  ?0        ?31                  ?48                 	;0
		98  103  INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'trim'           	;1	<<96
		99  103  INIT_METHOD_CALL/112      ?0        16?1                 51:'attributes'     	;0
		100 103  DO_FCALL/60               $57=      ?0                   ?0                  	;0
		101 103  FETCH_OBJ_R/82            $58=      $57                  53:'channel'        	;0
		102 103  CAST/21                   #59=      $58                  ?0                  	;6
		103 103  SEND_VAL_EX/116           ?80       #59                  ?1                  	;0
		104 103  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
		105 103  ASSIGN/38                 ?53       16?5                 $60                 	;0
		106 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'array_key_exists'	;2
		107 104  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
		108 104  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
		109 104  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
		110 104  JMPZ/43                   ?0        $62                  ?112                	;0	>>112
		111 105  GOTO/253                  ?0        ?1                   ?56                 	;0
		112 107  GOTO/253                  ?0        ?72                  ?57                 	;0	<<110
		113 108  GOTO/253                  ?0        ?1                   ?58                 	;0
		114 112  GOTO/253                  ?0        ?72                  ?59                 	;0
		115 114  RETURN/62                 ?0        16?4                 ?0                  	;0
		116 115  GOTO/253                  ?0        ?117                 ?60                 	;0
		117 117  NOP/0                     ?0        61:NULL              ?0                  	;4294967295
		*/
	}

	public function a6Ab1BB29714429d($E7cba019ce58e458, $Bf9899a172ecff52, $A486d2019332744a)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   119  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   119  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   119  RECV_INIT/64              16?2=     ?3                   0:0                 	;0
		3   121  GOTO/253                  ?0        ?91                  ?1                  	;0
		4   126  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'addslashes'      	;1
		5   126  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		6   126  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		7   126  ASSIGN/38                 ?1        16?3                 $17                 	;0
		8   127  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'addslashes'      	;1
		9   127  FETCH_DIM_FUNC_ARG/93     $21=      16?1                 16?3                	;1
		10  127  FETCH_DIM_FUNC_ARG/93     $22=      $21                  7:'epg_lang'        	;1
		11  127  SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
		12  127  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
		13  127  FETCH_DIM_W/84            $19=      16?1                 16?3                	;0
		14  127  ASSIGN_DIM/147            ?3        $19                  4:'epg_lang'        	;0
		15  127  OP_DATA/137               ?0        $23                  ?0                  	;0
		16  128  GOTO/253                  ?0        ?17                  ?8                  	;0
		17  130  INIT_METHOD_CALL/112      ?0        16?5                 9:'escape'          	;1
		18  130  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		19  130  DO_FCALL/60               $25=      ?0                   ?0                  	;0
		20  130  CONCAT/8                  #26=      11:'('               $25                 	;0
		21  130  CONCAT/8                  #27=      #26                  12:', '             	;0
		22  130  INIT_METHOD_CALL/112      ?0        16?5                 13:'escape'         	;1
		23  130  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		24  130  DO_FCALL/60               $28=      ?0                   ?0                  	;0
		25  130  CONCAT/8                  #29=      #27                  $28                 	;0
		26  130  CONCAT/8                  #30=      #29                  15:', '             	;0
		27  130  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'intval'         	;1
		28  130  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
		29  130  DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
		30  130  CONCAT/8                  #32=      #30                  $31                 	;0
		31  130  CONCAT/8                  #33=      #32                  18:', '             	;0
		32  130  INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'intval'         	;1
		33  130  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
		34  130  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
		35  130  CONCAT/8                  #35=      #33                  $34                 	;0
		36  130  CONCAT/8                  #36=      #35                  21:', '             	;0
		37  130  INIT_METHOD_CALL/112      ?0        16?5                 22:'escape'         	;1
		38  130  FETCH_DIM_FUNC_ARG/93     $37=      16?1                 16?3                	;1
		39  130  FETCH_DIM_FUNC_ARG/93     $38=      $37                  24:'epg_lang'       	;1
		40  130  SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
		41  130  DO_FCALL/60               $39=      ?0                   ?0                  	;0
		42  130  CONCAT/8                  #40=      #36                  $39                 	;0
		43  130  CONCAT/8                  #41=      #40                  25:', '             	;0
		44  130  INIT_METHOD_CALL/112      ?0        16?5                 26:'escape'         	;1
		45  130  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
		46  130  DO_FCALL/60               $42=      ?0                   ?0                  	;0
		47  130  CONCAT/8                  #43=      #41                  $42                 	;0
		48  130  CONCAT/8                  #44=      #43                  28:', '             	;0
		49  130  INIT_METHOD_CALL/112      ?0        16?5                 29:'escape'         	;1
		50  130  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
		51  130  DO_FCALL/60               $45=      ?0                   ?0                  	;0
		52  130  CONCAT/8                  #46=      #44                  $45                 	;0
		53  130  CONCAT/8                  #47=      #46                  31:')'              	;0
		54  130  ASSIGN_DIM/147            ?7        16?4                 ?0                  	;0
		55  130  OP_DATA/137               ?0        #47                  ?0                  	;0
		56  133  GOTO/253                  ?0        ?93                  ?32                 	;0
		57  135  GOTO/253                  ?0        ?127                 ?33                 	;0
		58  138  ASSIGN/38                 $48=      16?9                 34:''               	;0
		59  138  ASSIGN/38                 ?32       16?8                 $48                 	;0
		60  139  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'strtotime'      	;1
		61  139  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'strval'         	;1
		62  139  INIT_METHOD_CALL/112      ?0        16?10                39:'attributes'     	;0
		63  139  DO_FCALL/60               $50=      ?0                   ?0                  	;0
		64  139  SEPARATE/156              $50=      $50                  ?0                  	;0
		65  139  FETCH_OBJ_FUNC_ARG/94     $51=      $50                  41:'start'          	;1
		66  139  SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
		67  139  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
		68  139  SEND_VAR_NO_REF_EX/50     ?80       $52                  ?1                  	;0
		69  139  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
		70  139  MUL/3                     #54=      16?2                 42:60               	;0
		71  139  ADD/1                     #55=      $53                  #54                 	;0
		72  139  ASSIGN/38                 ?39       16?6                 #55                 	;0
		73  140  INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'strtotime'      	;1
		74  140  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'strval'         	;1
		75  140  INIT_METHOD_CALL/112      ?0        16?10                47:'attributes'     	;0
		76  140  DO_FCALL/60               $57=      ?0                   ?0                  	;0
		77  140  SEPARATE/156              $57=      $57                  ?0                  	;0
		78  140  FETCH_OBJ_FUNC_ARG/94     $58=      $57                  49:'stop'           	;1
		79  140  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
		80  140  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
		81  140  SEND_VAR_NO_REF_EX/50     ?80       $59                  ?1                  	;0
		82  140  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
		83  140  MUL/3                     #61=      16?2                 50:60               	;0
		84  140  ADD/1                     #62=      $60                  #61                 	;0
		85  140  ASSIGN/38                 ?46       16?7                 #62                 	;0
		86  141  ISSET_ISEMPTY_PROP_OBJ/148 #64=      16?10                51:'title'          	;16777216
		87  141  BOOL_NOT/13               #65=      #64                  ?0                  	;0
		88  141  JMPZ/43                   ?0        #65                  ?90                 	;0	>>90
		89  142  GOTO/253                  ?0        ?200                 ?52                 	;0
		90  144  GOTO/253                  ?0        ?199                 ?53                 	;0	<<88
		91  146  BIND_GLOBAL/168           ?0        16?5                 54:'b62d6460eb33ea07'	;0
		92  147  ASSIGN/38                 ?49       16?4                 55:array (
)        	;0
		93  149  FETCH_OBJ_R/82            $67=      ?4397406             56:'rEPGSource'     	;0
		94  149  INIT_METHOD_CALL/112      ?0        $67                  57:'getNode'        	;0
		95  149  DO_FCALL/60               $68=      ?0                   ?0                  	;0
		96  149  ASSIGN/38                 $69=      16?11                $68                 	;0
		97  149  BOOL_NOT/13               #70=      $69                  ?0                  	;0
		98  149  JMPZ/43                   ?0        #70                  ?100                	;0	>>100
		99  150  GOTO/253                  ?0        ?57                  ?59                 	;0
		100 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'simplexml_load_string'	;1	<<98
		101 152  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
		102 152  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
		103 152  ASSIGN/38                 ?55       16?10                $71                 	;0
		104 153  GOTO/253                  ?0        ?105                 ?62                 	;0
		105 155  BOOL_NOT/13               #73=      16?10                ?0                  	;0
		106 155  JMPZ/43                   ?0        #73                  ?108                	;0	>>108
		107 156  GOTO/253                  ?0        ?56                  ?63                 	;0
		108 158  INIT_METHOD_CALL/112      ?0        16?10                64:'getName'        	;0	<<106
		109 158  DO_FCALL/60               $74=      ?0                   ?0                  	;0
		110 158  IS_EQUAL/17               #75=      $74                  66:'programme'      	;0
		111 158  BOOL_NOT/13               #76=      #75                  ?0                  	;0
		112 158  JMPZ/43                   ?0        #76                  ?114                	;0	>>114
		113 159  GOTO/253                  ?0        ?56                  ?67                 	;0
		114 161  INIT_METHOD_CALL/112      ?0        16?10                68:'attributes'     	;0	<<112
		115 161  DO_FCALL/60               $77=      ?0                   ?0                  	;0
		116 161  FETCH_OBJ_R/82            $78=      $77                  70:'channel'        	;0
		117 161  CAST/21                   #79=      $78                  ?0                  	;6
		118 161  ASSIGN/38                 ?63       16?3                 #79                 	;0
		119 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'array_key_exists'	;2
		120 162  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
		121 162  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
		122 162  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
		123 162  JMPZ/43                   ?0        $81                  ?125                	;0	>>125
		124 163  GOTO/253                  ?0        ?58                  ?73                 	;0
		125 165  GOTO/253                  ?0        ?93                  ?74                 	;0	<<123
		126 166  GOTO/253                  ?0        ?58                  ?75                 	;0
		127 168  ISSET_ISEMPTY_CV/197      #82=      16?4                 ?0                  	;16777216
		128 168  BOOL_NOT/13               #83=      #82                  ?0                  	;0
		129 168  JMPZ/43                   ?0        #83                  ?132                	;0	>>132
		130 168  QM_ASSIGN/22              #84=      16?4                 ?0                  	;0
		131 168  JMP/42                    ?0        ?133                 ?0                  	;0	>>133
		132 168  QM_ASSIGN/22              #84=      76:false             ?0                  	;0	<<129
		133 168  RETURN/62                 ?0        #84                  ?0                  	;0	<<131
		134 169  GOTO/253                  ?0        ?209                 ?77                 	;0
		135 171  GOTO/253                  ?0        ?171                 ?78                 	;0
		136 173  ASSIGN/38                 ?68       16?12                79:false            	;0
		137 174  FE_RESET_R/77             $86=      16?13                ?154                	;0
		138 174  FE_FETCH_R/78             ?0        $86                  16?14               	;154	>>154	<<153
		139 175  INIT_METHOD_CALL/112      ?0        16?14                80:'attributes'     	;0
		140 175  DO_FCALL/60               $87=      ?0                   ?0                  	;0
		141 175  FETCH_OBJ_R/82            $88=      $87                  82:'lang'           	;0
		142 175  FETCH_DIM_R/81            $89=      16?1                 16?3                	;0
		143 175  FETCH_DIM_R/81            $90=      $89                  83:'epg_lang'       	;0
		144 175  IS_EQUAL/17               #91=      $88                  $90                 	;0
		145 175  BOOL_NOT/13               #92=      #91                  ?0                  	;0
		146 175  JMPZ/43                   ?0        #92                  ?149                	;0	>>149
		147 176  NOP/0                     ?0        ?0                   ?0                  	;1
		148 176  GOTO/253                  ?0        ?153                 ?84                 	;0
		149 178  ASSIGN/38                 ?76       16?12                85:true             	;0	<<146
		150 179  ASSIGN/38                 ?77       16?8                 16?14               	;0
		151 180  FE_FREE/127               ?0        $86                  ?9                  	;1
		152 180  GOTO/253                  ?0        ?155                 ?86                 	;0
		153 182  JMP/42                    ?0        ?138                 ?0                  	;0	>>138
		154 182  FE_FREE/127               ?0        $86                  ?0                  	;0	<<137
		155 185  GOTO/253                  ?0        ?167                 ?87                 	;0
		156 187  FETCH_OBJ_R/82            $95=      16?10                88:'desc'           	;0
		157 187  ASSIGN/38                 ?79       16?15                $95                 	;0
		158 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'is_object'      	;1
		159 188  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
		160 188  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
		161 188  JMPZ/43                   ?0        $97                  ?163                	;0	>>163
		162 189  GOTO/253                  ?0        ?166                 ?91                 	;0
		163 191  FETCH_OBJ_R/82            $98=      16?10                92:'desc'           	;0	<<161
		164 191  ASSIGN/38                 ?82       16?9                 $98                 	;0
		165 192  GOTO/253                  ?0        ?4                   ?93                 	;0
		166 194  GOTO/253                  ?0        ?175                 ?94                 	;0
		167 196  JMPZ/43                   ?0        16?12                ?169                	;0	>>169
		168 197  GOTO/253                  ?0        ?171                 ?95                 	;0
		169 199  FETCH_DIM_R/81            $100=     16?13                96:0                	;0	<<167
		170 199  ASSIGN/38                 ?84       16?8                 $100                	;0
		171 202  ISSET_ISEMPTY_PROP_OBJ/148 #102=     16?10                97:'desc'           	;16777216
		172 202  JMPZ/43                   ?0        #102                 ?174                	;0	>>174
		173 203  GOTO/253                  ?0        ?4                   ?98                 	;0
		174 205  GOTO/253                  ?0        ?156                 ?99                 	;0	<<172
		175 207  ASSIGN/38                 ?86       16?12                100:false           	;0
		176 208  FE_RESET_R/77             $104=     16?15                ?193                	;0
		177 208  FE_FETCH_R/78             ?0        $104                 16?16               	;193	>>193	<<192
		178 209  INIT_METHOD_CALL/112      ?0        16?16                101:'attributes'    	;0
		179 209  DO_FCALL/60               $105=     ?0                   ?0                  	;0
		180 209  FETCH_OBJ_R/82            $106=     $105                 103:'lang'          	;0
		181 209  FETCH_DIM_R/81            $107=     16?1                 16?3                	;0
		182 209  FETCH_DIM_R/81            $108=     $107                 104:'epg_lang'      	;0
		183 209  IS_EQUAL/17               #109=     $106                 $108                	;0
		184 209  BOOL_NOT/13               #110=     #109                 ?0                  	;0
		185 209  JMPZ/43                   ?0        #110                 ?188                	;0	>>188
		186 210  NOP/0                     ?0        ?0                   ?0                  	;1
		187 210  GOTO/253                  ?0        ?192                 ?105                	;0
		188 212  ASSIGN/38                 ?94       16?12                106:true            	;0	<<185
		189 213  ASSIGN/38                 ?95       16?9                 16?16               	;0
		190 214  FE_FREE/127               ?0        $104                 ?11                 	;1
		191 214  GOTO/253                  ?0        ?194                 ?107                	;0
		192 216  JMP/42                    ?0        ?177                 ?0                  	;0	>>177
		193 216  FE_FREE/127               ?0        $104                 ?0                  	;0	<<176
		194 219  JMPZ/43                   ?0        16?12                ?196                	;0	>>196
		195 220  GOTO/253                  ?0        ?4                   ?108                	;0
		196 222  FETCH_DIM_R/81            $113=     16?15                109:0               	;0	<<194
		197 222  ASSIGN/38                 ?97       16?9                 $113                	;0
		198 223  GOTO/253                  ?0        ?4                   ?110                	;0
		199 225  GOTO/253                  ?0        ?93                  ?111                	;0
		200 227  FETCH_OBJ_R/82            $115=     16?10                112:'title'         	;0
		201 227  ASSIGN/38                 ?99       16?13                $115                	;0
		202 228  INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'is_object'     	;1
		203 228  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
		204 228  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
		205 228  JMPZ/43                   ?0        $117                 ?207                	;0	>>207
		206 229  GOTO/253                  ?0        ?136                 ?115                	;0
		207 231  ASSIGN/38                 ?101      16?8                 16?13               	;0	<<205
		208 232  GOTO/253                  ?0        ?135                 ?116                	;0
		209 234  NOP/0                     ?0        117:NULL             ?0                  	;4294967295
		*/
	}

	public function e06C9333d872bb8F($fd51b5505224fc7c, $F48d5724f3b4ec96)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   236  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   236  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   238  JMP/42                    ?0        ?29                  ?0                  	;0	>>29
		3   241  GOTO/253                  ?0        ?5                   ?1                  	;0
		4   243  ASSIGN/38                 ?0        16?2                 2:' | gunzip -c'    	;0
		5   245  GOTO/253                  ?0        ?6                   ?3                  	;0
		6   247  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'shell_exec'      	;1
		7   247  CONCAT/8                  #5=       6:'wget -U "Mozilla/5.0" -O - "' 16?0                	;0
		8   247  CONCAT/8                  #6=       #5                   7:'"'               	;0
		9   247  CONCAT/8                  #7=       #6                   16?2                	;0
		10  247  CONCAT/8                  #8=       #7                   8:' > '             	;0
		11  247  CONCAT/8                  #9=       #8                   16?1                	;0
		12  247  SEND_VAL_EX/116           ?80       #9                   ?1                  	;0
		13  247  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
		14  248  INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'file_exists'     	;1
		15  248  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		16  248  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
		17  248  JMPZ_EX/46                #12=      $11                  ?23                 	;0	>>23
		18  248  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'filesize'       	;1
		19  248  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
		20  248  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
		21  248  IS_SMALLER/19             #14=      13:0                 $13                 	;0
		22  248  BOOL/52                   #12=      #14                  ?0                  	;0
		23  248  BOOL_NOT/13               #15=      #12                  ?0                  	;0	<<17
		24  248  JMPZ/43                   ?0        #15                  ?26                 	;0	>>26
		25  249  GOTO/253                  ?0        ?27                  ?14                 	;0
		26  251  RETURN/62                 ?0        15:true              ?0                  	;0	<<24
		27  253  RETURN/62                 ?0        16:false             ?0                  	;0
		28  254  GOTO/253                  ?0        ?45                  ?17                 	;0
		29  256  INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'pathinfo'       	;2	<<2
		30  256  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		31  256  FETCH_CONSTANT/99         #16=      ?0                   20:'PATHINFO_EXTENSION'	;16
		32  256  SEND_VAL_EX/116           ?96       #16                  ?2                  	;0
		33  256  DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
		34  256  ASSIGN/38                 ?14       16?3                 $17                 	;0
		35  257  ASSIGN/38                 ?15       16?2                 23:''               	;0
		36  258  IS_EQUAL/17               #20=      16?3                 24:'gz'             	;0
		37  258  JMPZ/43                   ?0        #20                  ?39                 	;0	>>39
		38  259  GOTO/253                  ?0        ?4                   ?25                 	;0
		39  261  IS_EQUAL/17               #21=      16?3                 26:'xz'             	;0	<<37
		40  261  BOOL_NOT/13               #22=      #21                  ?0                  	;0
		41  261  JMPZ/43                   ?0        #22                  ?43                 	;0	>>43
		42  262  GOTO/253                  ?0        ?3                   ?27                 	;0
		43  264  ASSIGN/38                 ?19       16?2                 28:' | unxz -c'     	;0	<<41
		44  265  GOTO/253                  ?0        ?3                   ?29                 	;0
		45  267  NOP/0                     ?0        30:NULL              ?0                  	;4294967295
		*/
	}

	public function dE800FF553C72d02($fd51b5505224fc7c, $A66eee85d9566710)
	{
		/*
		#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
		0   269  RECV/63                   16?0=     ?1                   ?4294967294         	;0
		1   269  RECV/63                   16?1=     ?2                   ?4294967294         	;0
		2   272  JMP/42                    ?0        ?3                   ?0                  	;0	>>3	<<58
		3   274  FETCH_CONSTANT/99         #5=       ?0                   2:'TMP_PATH'        	;16	<<2
		4   274  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'md5'             	;1
		5   274  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		6   274  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
		7   274  CONCAT/8                  #7=       #5                   $6                  	;0
		8   274  CONCAT/8                  #8=       #7                   7:'.xml'            	;0
		9   274  ASSIGN_OBJ/136            ?0        ?4397406             1:'rFilename'       	;0
		10  274  OP_DATA/137               ?0        #8                   ?0                  	;0
		11  275  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'file_exists'     	;1
		12  275  FETCH_OBJ_FUNC_ARG/94     $9=       ?4583821             10:'rFilename'      	;1
		13  275  SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
		14  275  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
		15  275  BOOL_NOT/13               #11=      $10                  ?0                  	;0
		16  275  JMPNZ_EX/47               #11=      #11                  ?19                 	;0	>>19
		17  275  BOOL_NOT/13               #12=      16?1                 ?0                  	;0
		18  275  BOOL/52                   #11=      #12                  ?0                  	;0
		19  275  BOOL_NOT/13               #13=      #11                  ?0                  	;0	<<16
		20  275  JMPZ/43                   ?0        #13                  ?22                 	;0	>>22
		21  276  GOTO/253                  ?0        ?27                  ?11                 	;0
		22  278  INIT_METHOD_CALL/112      ?0        ?1663989152          12:'E06c9333D872bb8f'	;2	<<20
		23  278  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
		24  278  FETCH_OBJ_FUNC_ARG/94     $14=      ?4419182             14:'rFilename'      	;2
		25  278  SEND_VAR_EX/66            ?96       $14                  ?2                  	;0
		26  278  DO_FCALL/60               ?11       ?0                   ?0                  	;0
		27  280  FETCH_OBJ_R/82            $16=      ?0                   15:'rFilename'      	;0
		28  280  JMPZ/43                   ?0        $16                  ?30                 	;0	>>30
		29  281  GOTO/253                  ?0        ?38                  ?16                 	;0
		30  283  GOTO/253                  ?0        ?32                  ?17                 	;0	<<28
		31  287  GOTO/253                  ?0        ?57                  ?18                 	;0
		32  289  INIT_STATIC_METHOD_CALL/113 ?0        19:'XUI'             21:'FC023Cd5AafC77F3'	;2
		33  289  SEND_VAL_EX/116           ?80       23:'epg'             ?1                  	;0
		34  289  CONCAT/8                  #17=      24:'No XML found at: ' 16?0                	;0
		35  289  SEND_VAL_EX/116           ?96       #17                  ?2                  	;0
		36  289  DO_FCALL/60               ?14       ?0                   ?0                  	;0
		37  290  GOTO/253                  ?0        ?31                  ?25                 	;0
		38  292  INIT_STATIC_METHOD_CALL/113 ?0        26:'XmlStringStreamer' 28:'createStringWalkerParser'	;1
		39  292  FETCH_OBJ_FUNC_ARG/94     $19=      ?1                   30:'rFilename'      	;1
		40  292  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
		41  292  DO_FCALL/60               $20=      ?0                   ?0                  	;0
		42  292  ASSIGN/38                 ?17       16?2                 $20                 	;0
		43  293  JMPZ/43                   ?0        16?2                 ?45                 	;0	>>45
		44  294  GOTO/253                  ?0        ?52                  ?31                 	;0
		45  296  GOTO/253                  ?0        ?46                  ?32                 	;0	<<43
		46  298  INIT_STATIC_METHOD_CALL/113 ?0        33:'XUI'             35:'Fc023cd5AaFC77f3'	;2
		47  298  SEND_VAL_EX/116           ?80       37:'epg'             ?1                  	;0
		48  298  CONCAT/8                  #22=      38:'Not a valid EPG source: ' 16?0                	;0
		49  298  SEND_VAL_EX/116           ?96       #22                  ?2                  	;0
		50  298  DO_FCALL/60               ?19       ?0                   ?0                  	;0
		51  299  GOTO/253                  ?0        ?31                  ?39                 	;0
		52  301  ASSIGN_OBJ/136            ?20       ?1664568768          40:'rEPGSource'     	;0
		53  301  OP_DATA/137               ?0        16?2                 ?0                  	;0
		54  302  ASSIGN_OBJ/136            ?21       ?1664568768          41:'rValid'         	;0
		55  302  OP_DATA/137               ?0        42:true              ?0                  	;0
		56  303  GOTO/253                  ?0        ?31                  ?43                 	;0
		57  304  JMP/42                    ?0        ?64                  ?0                  	;0	>>64
		58  305  CATCH/107                 ?1        44:'Exception'       16?3                	;0 CB	>>64,2
		59  306  INIT_STATIC_METHOD_CALL/113 ?0        46:'XUI'             48:'Fc023cD5aAfC77F3'	;2
		60  306  SEND_VAL_EX/116           ?80       50:'epg'             ?1                  	;0
		61  306  CONCAT/8                  #26=      51:'EPG failed to process: ' 16?0                	;0
		62  306  SEND_VAL_EX/116           ?96       #26                  ?2                  	;0
		63  306  DO_FCALL/60               ?23       ?0                   ?0                  	;0
		64  308  NOP/0                     ?0        52:NULL              ?0                  	;4294967295	<<57,58
		*/
	}
}

function getBouquetGroups()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  10  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1  11  INIT_METHOD_CALL/112      ?0        16?0                 1:'query'           	;1
	2  11  SEND_VAL_EX/116           ?80       3:'SELECT DISTINCT(`bouquet`) AS `bouquet` FROM `lines`;' ?1                  	;0
	3  11  DO_FCALL/60               ?0        ?0                   ?0                  	;0
	4  12  ASSIGN/38                 ?1        16?1                 4:array (
  'all' => 
  array (
    'streams' => 
    array (
    ),
    'bouquets' => 
    array (
    ),
  ),
)	;0
	5  13  INIT_METHOD_CALL/112      ?0        16?0                 5:'get_rows'        	;0
	6  13  DO_FCALL/60               $10=      ?0                   ?0                  	;0
	7  13  FE_RESET_R/77             $11=      $10                  ?27                 	;0
	8  13  FE_FETCH_R/78             ?0        $11                  16?2                	;27	>>27	<<26
	9  14  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'json_decode'     	;2
	10 14  FETCH_DIM_FUNC_ARG/93     $12=      16?2                 9:'bouquet'         	;1
	11 14  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
	12 14  SEND_VAL_EX/116           ?96       10:true              ?2                  	;0
	13 14  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	14 14  ASSIGN/38                 ?6        16?3                 $13                 	;0
	15 15  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'sort'           	;1
	16 15  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	17 15  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
	18 16  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'implode'        	;2
	19 16  SEND_VAL_EX/116           ?80       15:'_'               ?1                  	;0
	20 16  SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
	21 16  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	22 16  INIT_ARRAY/71             #18=      16:array (
)         17:'streams'        	;10
	23 16  ADD_ARRAY_ELEMENT/72      #18=      16?3                 18:'bouquets'       	;0
	24 16  ASSIGN_DIM/147            ?9        16?1                 $16                 	;0
	25 16  OP_DATA/137               ?0        #18                  ?0                  	;0
	26 17  JMP/42                    ?0        ?8                   ?0                  	;0	>>8
	27 17  FE_FREE/127               ?0        $11                  ?0                  	;0	<<7
	28 20  FE_RESET_R/77             $19=      16?1                 ?75                 	;0
	29 20  FE_FETCH_R/78             #20=      $19                  16?4                	;75	>>75	<<74
	30 20  ASSIGN/38                 ?13       16?5                 #20                 	;0
	31 21  ASSIGN/38                 ?14       16?6                 19:array (
)        	;0
	32 22  FETCH_DIM_R/81            $23=      16?4                 20:'bouquets'       	;0
	33 22  FE_RESET_R/77             $24=      $23                  ?70                 	;0
	34 22  FE_FETCH_R/78             ?0        $24                  16?7                	;70	>>70	<<69
	35 23  INIT_METHOD_CALL/112      ?0        16?0                 21:'query'          	;2
	36 23  SEND_VAL_EX/116           ?80       23:'SELECT `bouquet_channels` FROM `bouquets` WHERE `id` = ?;' ?1                  	;0
	37 23  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
	38 23  DO_FCALL/60               ?17       ?0                   ?0                  	;0
	39 24  INIT_METHOD_CALL/112      ?0        16?0                 24:'get_rows'       	;0
	40 24  DO_FCALL/60               $26=      ?0                   ?0                  	;0
	41 24  FE_RESET_R/77             $27=      $26                  ?60                 	;0
	42 24  FE_FETCH_R/78             ?0        $27                  16?2                	;60	>>60	<<59
	43 25  ASSIGN_DIM/147            ?20       16?6                 ?4414262            	;0
	44 25  OP_DATA/137               ?0        16?7                 ?0                  	;0
	45 26  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'array_merge'    	;2
	46 26  FETCH_DIM_FUNC_ARG/93     $31=      16?1                 16?5                	;1
	47 26  FETCH_DIM_FUNC_ARG/93     $32=      $31                  29:'streams'        	;1
	48 26  SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
	49 26  INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'json_decode'    	;2
	50 26  FETCH_DIM_FUNC_ARG/93     $33=      16?2                 32:'bouquet_channels'	;1
	51 26  SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
	52 26  SEND_VAL_EX/116           ?96       33:true              ?2                  	;0
	53 26  DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
	54 26  SEND_VAR_NO_REF_EX/50     ?96       $34                  ?2                  	;0
	55 26  DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
	56 26  FETCH_DIM_W/84            $29=      16?1                 16?5                	;0
	57 26  ASSIGN_DIM/147            ?22       $29                  26:'streams'        	;0
	58 26  OP_DATA/137               ?0        $35                  ?0                  	;0
	59 27  JMP/42                    ?0        ?42                  ?0                  	;0	>>42
	60 27  FE_FREE/127               ?0        $27                  ?0                  	;0	<<41
	61 30  INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'array_unique'   	;1
	62 30  FETCH_DIM_FUNC_ARG/93     $38=      16?1                 16?5                	;1
	63 30  FETCH_DIM_FUNC_ARG/93     $39=      $38                  37:'streams'        	;1
	64 30  SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
	65 30  DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
	66 30  FETCH_DIM_W/84            $36=      16?1                 16?5                	;0
	67 30  ASSIGN_DIM/147            ?29       $36                  34:'streams'        	;0
	68 30  OP_DATA/137               ?0        $40                  ?0                  	;0
	69 31  JMP/42                    ?0        ?34                  ?0                  	;0	>>34
	70 31  FE_FREE/127               ?0        $24                  ?0                  	;0	<<33
	71 34  FETCH_DIM_W/84            $41=      16?1                 16?5                	;0
	72 34  ASSIGN_DIM/147            ?34       $41                  38:'bouquets'       	;0
	73 34  OP_DATA/137               ?0        16?6                 ?0                  	;0
	74 35  JMP/42                    ?0        ?29                  ?0                  	;0	>>29
	75 35  FE_FREE/127               ?0        $19                  ?0                  	;0	<<28
	76 38  RETURN/62                 ?0        16?1                 ?0                  	;0
	77 39  NOP/0                     ?0        39:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   833  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   834  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   834  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   834  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   834  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   834  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   835  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   837  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   837  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   839  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?1343                ?0                  	;0	>>1343
1    5     INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'date_default_timezone_set'	;1
2    5     SEND_VAL_EX/116           ?80       3:'UTC'              ?1                  	;0
3    5     DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4    8     NOP/0                     ?0        ?0                   ?0                  	;0
5    40    NOP/0                     ?0        ?0                   ?0                  	;0
6    310   JMPZ/43                   ?0        16?0                 ?8                  	;0	>>8
7    311   GOTO/253                  ?0        ?16                  ?4                  	;0
8    313   GOTO/253                  ?0        ?9                   ?5                  	;0	<<6
9    315   INIT_METHOD_CALL/112      ?0        16?1                 6:'query'           	;1
10   315   SEND_VAL_EX/116           ?80       8:'TRUNCATE `epg_channels`;' ?1                  	;0
11   315   DO_FCALL/60               ?2        ?0                   ?0                  	;0
12   316   INIT_METHOD_CALL/112      ?0        16?1                 9:'query'           	;1
13   316   SEND_VAL_EX/116           ?80       11:'SELECT * FROM `epg`' ?1                  	;0
14   316   DO_FCALL/60               ?3        ?0                   ?0                  	;0
15   317   GOTO/253                  ?0        ?25                  ?12                 	;0
16   319   INIT_METHOD_CALL/112      ?0        16?1                 13:'query'          	;2
17   319   SEND_VAL_EX/116           ?80       15:'DELETE FROM `epg_channels` WHERE `epg_id` = ?;' ?1                  	;0
18   319   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
19   319   DO_FCALL/60               ?4        ?0                   ?0                  	;0
20   320   GOTO/253                  ?0        ?21                  ?16                 	;0
21   322   INIT_METHOD_CALL/112      ?0        16?1                 17:'query'          	;2
22   322   SEND_VAL_EX/116           ?80       19:'SELECT * FROM `epg` WHERE `id` = ?;' ?1                  	;0
23   322   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
24   322   DO_FCALL/60               ?5        ?0                   ?0                  	;0
25   324   INIT_METHOD_CALL/112      ?0        16?1                 20:'get_rows'       	;0
26   324   DO_FCALL/60               $52=      ?0                   ?0                  	;0
27   324   FE_RESET_R/77             $53=      $52                  ?75                 	;0
28   324   FE_FETCH_R/78             ?0        $53                  16?2                	;75	>>75	<<74
29   325   NEW/68                    $54=      22:'EPG'             ?128                	;1
30   325   FETCH_DIM_FUNC_ARG/93     $55=      16?2                 24:'epg_file'       	;1
31   325   SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
32   325   DO_FCALL/60               ?10       ?8                   ?0                  	;0
33   325   ASSIGN/38                 ?11       16?3                 $54                 	;0
34   326   FETCH_OBJ_R/82            $58=      16?3                 25:'rValid'         	;0
35   326   BOOL_NOT/13               #59=      $58                  ?0                  	;0
36   326   JMPZ/43                   ?0        #59                  ?39                 	;0	>>39
37   327   NOP/0                     ?0        ?0                   ?0                  	;1
38   327   GOTO/253                  ?0        ?74                  ?26                 	;0
39   329   INIT_METHOD_CALL/112      ?0        16?3                 27:'A898Ace49e8e74a0'	;0	<<36
40   329   DO_FCALL/60               $60=      ?0                   ?0                  	;0
41   329   ASSIGN/38                 ?15       16?4                 $60                 	;0
42   330   INIT_METHOD_CALL/112      ?0        16?1                 29:'query'          	;4
43   330   SEND_VAL_EX/116           ?80       31:'UPDATE `epg` SET `data` = ?, `last_updated` = ? WHERE `id` = ?' ?1                  	;0
44   330   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'json_encode'    	;2
45   330   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
46   330   FETCH_CONSTANT/99         #62=      ?0                   34:'JSON_UNESCAPED_UNICODE'	;16
47   330   SEND_VAL_EX/116           ?96       #62                  ?2                  	;0
48   330   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
49   330   SEND_VAR_NO_REF_EX/50     ?96       $63                  ?2                  	;0
50   330   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'time'           	;0
51   330   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
52   330   SEND_VAR_NO_REF_EX/50     ?112      $64                  ?3                  	;0
53   330   FETCH_DIM_FUNC_ARG/93     $65=      16?2                 39:'id'             	;4
54   330   SEND_VAR_EX/66            ?128      $65                  ?4                  	;0
55   330   DO_FCALL/60               ?20       ?0                   ?0                  	;0
56   331   FE_RESET_R/77             $67=      16?4                 ?73                 	;0
57   331   FE_FETCH_R/78             #68=      $67                  16?5                	;73	>>73	<<72
58   331   ASSIGN/38                 ?23       16?6                 #68                 	;0
59   332   INIT_METHOD_CALL/112      ?0        16?1                 40:'query'          	;5
60   332   SEND_VAL_EX/116           ?80       42:'INSERT INTO `epg_channels`(`epg_id`, `channel_id`, `name`, `langs`) VALUES(?, ?, ?, ?);' ?1                  	;0
61   332   FETCH_DIM_FUNC_ARG/93     $70=      16?2                 43:'id'             	;2
62   332   SEND_VAR_EX/66            ?96       $70                  ?2                  	;0
63   332   SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
64   332   FETCH_DIM_FUNC_ARG/93     $71=      16?5                 44:'display_name'   	;4
65   332   SEND_VAR_EX/66            ?128      $71                  ?4                  	;0
66   332   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'json_encode'    	;1
67   332   FETCH_DIM_FUNC_ARG/93     $72=      16?5                 47:'langs'          	;1
68   332   SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
69   332   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
70   332   SEND_VAR_NO_REF_EX/50     ?144      $73                  ?5                  	;0
71   332   DO_FCALL/60               ?28       ?0                   ?0                  	;0
72   333   JMP/42                    ?0        ?57                  ?0                  	;0	>>57
73   333   FE_FREE/127               ?0        $67                  ?0                  	;0	<<56
74   337   JMP/42                    ?0        ?28                  ?0                  	;0	>>28
75   337   FE_FREE/127               ?0        $53                  ?0                  	;0	<<27
76   340   FETCH_STATIC_PROP_R/173   $75=      48:'rSettings'       49:'XUI'            	;0
77   340   FETCH_DIM_R/81            $76=      $75                  51:'enable_epg_api' 	;0
78   340   JMPZ_EX/46                #77=      $76                  ?81                 	;0	>>81
79   340   BOOL_NOT/13               #78=      16?0                 ?0                  	;0
80   340   BOOL/52                   #77=      #78                  ?0                  	;0
81   340   BOOL_NOT/13               #79=      #77                  ?0                  	;0	<<78
82   340   JMPZ/43                   ?0        #79                  ?84                 	;0	>>84
83   341   GOTO/253                  ?0        ?1375                ?52                 	;0
84   343   GOTO/253                  ?0        ?1100                ?53                 	;0	<<82
85   345   INIT_METHOD_CALL/112      ?0        16?1                 54:'query'          	;1
86   345   SEND_VAL_EX/116           ?80       56:'TRUNCATE `epg_api`;' ?1                  	;0
87   345   DO_FCALL/60               ?34       ?0                   ?0                  	;0
88   346   FE_RESET_R/77             $81=      16?7                 ?128                	;0
89   346   FE_FETCH_R/78             ?0        $81                  16?8                	;128	>>128	<<127
90   347   INIT_METHOD_CALL/112      ?0        16?1                 57:'query'          	;11
91   347   SEND_VAL_EX/116           ?80       59:'INSERT INTO `epg_api`(`stationId`, `callSign`, `name`, `bcastLangs`, `type`, `signalType`, `videoType`, `affiliateId`, `affiliateCallSign`, `picon`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' ?1                  	;0
92   347   FETCH_DIM_FUNC_ARG/93     $82=      16?8                 60:0                	;2
93   347   SEND_VAR_EX/66            ?96       $82                  ?2                  	;0
94   347   FETCH_DIM_FUNC_ARG/93     $83=      16?8                 61:1                	;3
95   347   SEND_VAR_EX/66            ?112      $83                  ?3                  	;0
96   347   FETCH_DIM_FUNC_ARG/93     $84=      16?8                 62:2                	;4
97   347   SEND_VAR_EX/66            ?128      $84                  ?4                  	;0
98   347   FETCH_DIM_FUNC_ARG/93     $85=      16?8                 63:3                	;5
99   347   SEND_VAR_EX/66            ?144      $85                  ?5                  	;0
100  347   FETCH_DIM_FUNC_ARG/93     $86=      16?8                 64:4                	;6
101  347   SEND_VAR_EX/66            ?160      $86                  ?6                  	;0
102  347   FETCH_DIM_FUNC_ARG/93     $87=      16?8                 65:5                	;7
103  347   SEND_VAR_EX/66            ?176      $87                  ?7                  	;0
104  347   FETCH_DIM_FUNC_ARG/93     $88=      16?8                 66:6                	;8
105  347   SEND_VAR_EX/66            ?192      $88                  ?8                  	;0
106  347   FETCH_DIM_FUNC_ARG/93     $89=      16?8                 67:7                	;9
107  347   SEND_VAR_EX/66            ?208      $89                  ?9                  	;0
108  347   FETCH_DIM_FUNC_ARG/93     $90=      16?8                 68:8                	;10
109  347   SEND_VAR_EX/66            ?224      $90                  ?10                 	;0
110  347   FETCH_DIM_FUNC_ARG/93     $91=      16?8                 69:9                	;11
111  347   SEND_VAR_EX/66            ?240      $91                  ?11                 	;0
112  347   DO_FCALL/60               ?46       ?0                   ?0                  	;0
113  348   FETCH_DIM_R/81            $93=      16?8                 70:1                	;0
114  348   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'intval'         	;1
115  348   FETCH_DIM_FUNC_ARG/93     $95=      16?8                 73:0                	;1
116  348   SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
117  348   DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
118  348   ASSIGN_DIM/147            ?48       16?9                 $93                 	;0
119  348   OP_DATA/137               ?0        $96                  ?0                  	;0
120  349   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'intval'         	;1
121  349   FETCH_DIM_FUNC_ARG/93     $97=      16?8                 76:0                	;1
122  349   SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
123  349   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
124  349   FETCH_DIM_R/81            $100=     16?8                 77:1                	;0
125  349   ASSIGN_DIM/147            ?53       16?10                $98                 	;0
126  349   OP_DATA/137               ?0        $100                 ?0                  	;0
127  350   JMP/42                    ?0        ?89                  ?0                  	;0	>>89
128  350   FE_FREE/127               ?0        $81                  ?0                  	;0	<<88
129  354   IS_EQUAL/17               #101=     16?11                78:0                	;0
130  354   BOOL_NOT/13               #102=     #101                 ?0                  	;0
131  354   JMPZ/43                   ?0        #102                 ?133                	;0	>>133
132  355   GOTO/253                  ?0        ?386                 ?79                 	;0
133  357   GOTO/253                  ?0        ?383                 ?80                 	;0	<<131
134  359   INIT_METHOD_CALL/112      ?0        16?1                 81:'get_rows'       	;0
135  359   DO_FCALL/60               $103=     ?0                   ?0                  	;0
136  359   FE_RESET_R/77             $104=     $103                 ?187                	;0
137  359   FE_FETCH_R/78             ?0        $104                 16?2                	;187	>>187	<<186
138  360   ASSIGN/38                 $105=     16?12                83:array (
)        	;0
139  360   ASSIGN/38                 ?60       16?3                 $105                	;0
140  361   INIT_METHOD_CALL/112      ?0        16?1                 84:'query'          	;3
141  361   SEND_VAL_EX/116           ?80       86:'SELECT * FROM `epg_data` WHERE `epg_id` = ? AND `channel_id` = ? ORDER BY `start` ASC;' ?1                  	;0
142  361   FETCH_DIM_FUNC_ARG/93     $107=     16?2                 87:'epg_id'         	;2
143  361   SEND_VAR_EX/66            ?96       $107                 ?2                  	;0
144  361   FETCH_DIM_FUNC_ARG/93     $108=     16?2                 88:'channel_id'     	;3
145  361   SEND_VAR_EX/66            ?112      $108                 ?3                  	;0
146  361   DO_FCALL/60               ?63       ?0                   ?0                  	;0
147  362   INIT_METHOD_CALL/112      ?0        16?1                 89:'get_rows'       	;0
148  362   DO_FCALL/60               $110=     ?0                   ?0                  	;0
149  362   FE_RESET_R/77             $111=     $110                 ?166                	;0
150  362   FE_FETCH_R/78             ?0        $111                 16?13               	;166	>>166	<<165
151  363   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'in_array'       	;2
152  363   FETCH_DIM_FUNC_ARG/93     $112=     16?13                93:'start'          	;1
153  363   SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
154  363   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
155  363   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
156  363   JMPZ/43                   ?0        $113                 ?160                	;0	>>160
157  364   NOP/0                     ?0        ?0                   ?0                  	;1
158  364   NOP/0                     ?0        ?0                   ?0                  	;1
159  364   GOTO/253                  ?0        ?165                 ?94                 	;0
160  366   FETCH_DIM_R/81            $115=     16?13                95:'start'          	;0	<<156
161  366   ASSIGN_DIM/147            ?68       16?12                ?4397406            	;0
162  366   OP_DATA/137               ?0        $115                 ?0                  	;0
163  367   ASSIGN_DIM/147            ?70       16?3                 ?0                  	;0
164  367   OP_DATA/137               ?0        16?13                ?0                  	;0
165  369   JMP/42                    ?0        ?150                 ?0                  	;0	>>150
166  369   FE_FREE/127               ?0        $111                 ?0                  	;0	<<149
167  372   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'count'          	;1
168  372   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
169  372   DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
170  372   IS_SMALLER/19             #118=     98:0                 $117                	;0
171  372   BOOL_NOT/13               #119=     #118                 ?0                  	;0
172  372   JMPZ/43                   ?0        #119                 ?175                	;0	>>175
173  373   NOP/0                     ?0        ?0                   ?0                  	;1
174  373   GOTO/253                  ?0        ?186                 ?99                 	;0
175  375   INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'file_put_contents'	;2	<<172
176  375   FETCH_CONSTANT/99         #120=     ?0                   102:'EPG_PATH'      	;16
177  375   CONCAT/8                  #121=     #120                 105:'stream_'       	;0
178  375   FETCH_DIM_R/81            $122=     16?2                 106:'id'            	;0
179  375   CONCAT/8                  #123=     #121                 $122                	;0
180  375   SEND_VAL_EX/116           ?80       #123                 ?1                  	;0
181  375   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'igbinary_serialize'	;1
182  375   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
183  375   DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
184  375   SEND_VAR_NO_REF_EX/50     ?96       $124                 ?2                  	;0
185  375   DO_FCALL_BY_NAME/131      ?79       ?0                   ?0                  	;0
186  377   JMP/42                    ?0        ?137                 ?0                  	;0	>>137
187  377   FE_FREE/127               ?0        $104                 ?0                  	;0	<<136
188  380   INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'scandir'       	;1
189  380   FETCH_CONSTANT/99         #126=     ?0                   111:'EPG_PATH'      	;16
190  380   SEND_VAL_EX/116           ?80       #126                 ?1                  	;0
191  380   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
192  380   FE_RESET_R/77             $128=     $127                 ?218                	;0
193  380   FE_FETCH_R/78             ?0        $128                 16?14               	;218	>>218	<<217
194  381   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'in_array'      	;2
195  381   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
196  381   SEND_VAL_EX/116           ?96       116:array (
  0 => '.',
  1 => '..',
) ?2                  	;0
197  381   DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
198  381   JMPZ/43                   ?0        $129                 ?201                	;0	>>201
199  382   NOP/0                     ?0        ?0                   ?0                  	;1
200  382   GOTO/253                  ?0        ?217                 ?117                	;0
201  384   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'filemtime'     	;1	<<198
202  384   FETCH_CONSTANT/99         #130=     ?0                   120:'EPG_PATH'      	;16
203  384   CONCAT/8                  #131=     #130                 16?14               	;0
204  384   SEND_VAL_EX/116           ?80       #131                 ?1                  	;0
205  384   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
206  384   SUB/2                     #133=     16?15                123:10              	;0
207  384   IS_SMALLER/19             #134=     $132                 #133                	;0
208  384   BOOL_NOT/13               #135=     #134                 ?0                  	;0
209  384   JMPZ/43                   ?0        #135                 ?212                	;0	>>212
210  385   NOP/0                     ?0        ?0                   ?0                  	;1
211  385   GOTO/253                  ?0        ?217                 ?124                	;0
212  387   INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'unlink'        	;1	<<209
213  387   FETCH_CONSTANT/99         #136=     ?0                   127:'EPG_PATH'      	;16
214  387   CONCAT/8                  #137=     #136                 16?14               	;0
215  387   SEND_VAL_EX/116           ?80       #137                 ?1                  	;0
216  387   DO_FCALL_BY_NAME/131      ?92       ?0                   ?0                  	;0
217  390   JMP/42                    ?0        ?193                 ?0                  	;0	>>193
218  390   FE_FREE/127               ?0        $128                 ?0                  	;0	<<192
219  393   GOTO/253                  ?0        ?1378                ?130                	;0
220  395   INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'array_keys'    	;1
221  395   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
222  395   DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
223  395   FE_RESET_R/77             $140=     $139                 ?371                	;0
224  395   FE_FETCH_R/78             ?0        $140                 16?17               	;371	>>371	<<370
225  396   ASSIGN/38                 ?95       16?12                133:array (
)       	;0
226  397   INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'time'          	;0
227  397   DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
228  397   ASSIGN/38                 ?97       16?18                $142                	;0
229  398   FETCH_DIM_R/81            $144=     16?16                16?17               	;0
230  398   FE_RESET_R/77             $145=     $144                 ?245                	;0
231  398   FE_FETCH_R/78             ?0        $145                 16?19               	;245	>>245	<<244
232  399   INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'strtotime'     	;1
233  399   FETCH_DIM_FUNC_ARG/93     $146=     16?19                138:'startTime'     	;1
234  399   SEND_VAR_EX/66            ?80       $146                 ?1                  	;0
235  399   DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
236  399   ASSIGN/38                 ?102      16?20                $147                	;0
237  400   IS_SMALLER/19             #149=     16?20                16?18               	;0
238  400   BOOL_NOT/13               #150=     #149                 ?0                  	;0
239  400   JMPZ/43                   ?0        #150                 ?243                	;0	>>243
240  401   NOP/0                     ?0        ?0                   ?0                  	;1
241  401   NOP/0                     ?0        ?0                   ?0                  	;1
242  401   GOTO/253                  ?0        ?244                 ?139                	;0
243  403   ASSIGN/38                 ?105      16?18                16?20               	;0	<<239
244  405   JMP/42                    ?0        ?231                 ?0                  	;0	>>231
245  405   FE_FREE/127               ?0        $145                 ?0                  	;0	<<230
246  408   INIT_METHOD_CALL/112      ?0        16?1                 140:'query'         	;3
247  408   SEND_VAL_EX/116           ?80       142:'DELETE FROM `epg_data` WHERE `start` >= ? AND `epg_id` = 0 AND `channel_id` = ?;' ?1                  	;0
248  408   SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
249  408   SEND_VAR_EX/66            ?112      16?21                ?3                  	;0
250  408   DO_FCALL/60               ?106      ?0                   ?0                  	;0
251  409   FETCH_DIM_R/81            $153=     16?16                16?17               	;0
252  409   FE_RESET_R/77             $154=     $153                 ?369                	;0
253  409   FE_FETCH_R/78             ?0        $154                 16?19               	;369	>>369	<<368
254  410   NOP/0                     ?0        ?0                   ?0                  	;1
255  410   NOP/0                     ?0        ?0                   ?0                  	;1
256  410   GOTO/253                  ?0        ?312                 ?143                	;0
257  412   ASSIGN_DIM/147            ?109      16?12                ?4410621            	;0
258  412   OP_DATA/137               ?0        16?20                ?0                  	;0
259  413   INIT_METHOD_CALL/112      ?0        16?1                 144:'query'         	;7
260  413   SEND_VAL_EX/116           ?80       146:'INSERT INTO `epg_data` (`epg_id`,`channel_id`,`start`,`end`,`lang`,`title`,`description`) VALUES (0, ?, ?, ?, ?, ?, ?);' ?1                  	;0
261  413   SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
262  413   SEND_VAR_EX/66            ?112      16?20                ?3                  	;0
263  413   SEND_VAR_EX/66            ?128      16?22                ?4                  	;0
264  413   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'substr'        	;3
265  413   FETCH_DIM_FUNC_ARG/93     $156=     16?19                149:'program'       	;1
266  413   FETCH_DIM_FUNC_ARG/93     $157=     $156                 150:'titleLang'     	;1
267  413   SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
268  413   SEND_VAL_EX/116           ?96       151:0                ?2                  	;0
269  413   SEND_VAL_EX/116           ?112      152:2                ?3                  	;0
270  413   DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
271  413   SEND_VAR_NO_REF_EX/50     ?144      $158                 ?5                  	;0
272  413   SEND_VAR_EX/66            ?160      16?23                ?6                  	;0
273  413   SEND_VAR_EX/66            ?176      16?24                ?7                  	;0
274  413   DO_FCALL/60               ?113      ?0                   ?0                  	;0
275  414   INIT_METHOD_CALL/112      ?0        16?1                 153:'last_insert_id'	;0
276  414   DO_FCALL/60               $161=     ?0                   ?0                  	;0
277  414   INIT_ARRAY/71             #162=     $161                 155:'id'            	;34
278  414   ADD_ARRAY_ELEMENT/72      #162=     156:0                157:'epg_id'        	;0
279  414   ADD_ARRAY_ELEMENT/72      #162=     16?21                158:'channel_id'    	;0
280  414   ADD_ARRAY_ELEMENT/72      #162=     16?20                159:'start'         	;0
281  414   ADD_ARRAY_ELEMENT/72      #162=     16?22                160:'end'           	;0
282  414   INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'substr'        	;3
283  414   FETCH_DIM_FUNC_ARG/93     $163=     16?19                163:'program'       	;1
284  414   FETCH_DIM_FUNC_ARG/93     $164=     $163                 164:'titleLang'     	;1
285  414   SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
286  414   SEND_VAL_EX/116           ?96       165:0                ?2                  	;0
287  414   SEND_VAL_EX/116           ?112      166:2                ?3                  	;0
288  414   DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
289  414   ADD_ARRAY_ELEMENT/72      #162=     $165                 167:'lang'          	;0
290  414   ADD_ARRAY_ELEMENT/72      #162=     16?23                168:'title'         	;0
291  414   ADD_ARRAY_ELEMENT/72      #162=     16?24                169:'description'   	;0
292  414   ASSIGN_DIM/147            ?114      16?3                 ?5126               	;0
293  414   OP_DATA/137               ?0        #162                 ?0                  	;0
294  417   NOP/0                     ?0        ?0                   ?0                  	;1
295  417   NOP/0                     ?0        ?0                   ?0                  	;1
296  417   GOTO/253                  ?0        ?368                 ?170                	;0
297  419   FETCH_DIM_R/81            $166=     16?19                171:'program'       	;0
298  419   FETCH_DIM_R/81            $167=     $166                 172:'extended'      	;0
299  419   CONCAT/8                  #168=     $167                 173:' - '           	;0
300  419   CONCAT/8                  #169=     #168                 16?24               	;0
301  419   ASSIGN/38                 ?124      16?24                #169                	;0
302  421   NOP/0                     ?0        ?0                   ?0                  	;1
303  421   NOP/0                     ?0        ?0                   ?0                  	;1
304  421   GOTO/253                  ?0        ?347                 ?174                	;0
305  423   FETCH_DIM_R/81            $171=     16?19                175:'program'       	;0
306  423   FETCH_DIM_R/81            $172=     $171                 176:'extended'      	;0
307  423   CONCAT/8                  #173=     177:' - '            $172                	;0
308  423   ASSIGN_CONCAT/30          ?128      16?23                #173                	;0
309  424   NOP/0                     ?0        ?0                   ?0                  	;1
310  424   NOP/0                     ?0        ?0                   ?0                  	;1
311  424   GOTO/253                  ?0        ?347                 ?178                	;0
312  426   FETCH_DIM_R/81            $175=     16?19                179:'program'       	;0
313  426   FETCH_DIM_R/81            $176=     $175                 180:'title'         	;0
314  426   ASSIGN/38                 ?131      16?23                $176                	;0
315  427   FETCH_DIM_R/81            $178=     16?19                181:'program'       	;0
316  427   FETCH_DIM_R/81            $179=     $178                 182:'longDescription'	;0
317  427   ASSIGN/38                 ?134      16?24                $179                	;0
318  428   INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'strlen'        	;1
319  428   FETCH_DIM_FUNC_ARG/93     $181=     16?19                185:'program'       	;1
320  428   FETCH_DIM_FUNC_ARG/93     $182=     $181                 186:'extended'      	;1
321  428   SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
322  428   DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
323  428   IS_SMALLER/19             #184=     187:0                $183                	;0
324  428   BOOL_NOT/13               #185=     #184                 ?0                  	;0
325  428   JMPZ/43                   ?0        #185                 ?329                	;0	>>329
326  429   NOP/0                     ?0        ?0                   ?0                  	;1
327  429   NOP/0                     ?0        ?0                   ?0                  	;1
328  429   GOTO/253                  ?0        ?347                 ?188                	;0
329  431   FETCH_STATIC_PROP_R/173   $186=     189:'rSettings'      190:'XUI'           	;0	<<325
330  431   FETCH_DIM_R/81            $187=     $186                 192:'epg_api_extended'	;0
331  431   IS_EQUAL/17               #188=     $187                 193:1               	;0
332  431   JMPZ/43                   ?0        #188                 ?336                	;0	>>336
333  432   NOP/0                     ?0        ?0                   ?0                  	;1
334  432   NOP/0                     ?0        ?0                   ?0                  	;1
335  432   GOTO/253                  ?0        ?305                 ?194                	;0
336  434   FETCH_STATIC_PROP_R/173   $189=     195:'rSettings'      196:'XUI'           	;0	<<332
337  434   FETCH_DIM_R/81            $190=     $189                 198:'epg_api_extended'	;0
338  434   IS_EQUAL/17               #191=     $190                 199:2               	;0
339  434   BOOL_NOT/13               #192=     #191                 ?0                  	;0
340  434   JMPZ/43                   ?0        #192                 ?344                	;0	>>344
341  435   NOP/0                     ?0        ?0                   ?0                  	;1
342  435   NOP/0                     ?0        ?0                   ?0                  	;1
343  435   GOTO/253                  ?0        ?302                 ?200                	;0
344  437   NOP/0                     ?0        ?0                   ?0                  	;1	<<340
345  437   NOP/0                     ?0        ?0                   ?0                  	;1
346  437   GOTO/253                  ?0        ?297                 ?201                	;0
347  441   INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'strtotime'     	;1
348  441   FETCH_DIM_FUNC_ARG/93     $193=     16?19                204:'startTime'     	;1
349  441   SEND_VAR_EX/66            ?80       $193                 ?1                  	;0
350  441   DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
351  441   ASSIGN/38                 ?149      16?20                $194                	;0
352  442   INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'strtotime'     	;1
353  442   FETCH_DIM_FUNC_ARG/93     $196=     16?19                207:'endTime'       	;1
354  442   SEND_VAR_EX/66            ?80       $196                 ?1                  	;0
355  442   DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
356  442   ASSIGN/38                 ?152      16?22                $197                	;0
357  443   INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'in_array'      	;2
358  443   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
359  443   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
360  443   DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
361  443   JMPZ/43                   ?0        $199                 ?365                	;0	>>365
362  444   NOP/0                     ?0        ?0                   ?0                  	;1
363  444   NOP/0                     ?0        ?0                   ?0                  	;1
364  444   GOTO/253                  ?0        ?294                 ?210                	;0
365  446   NOP/0                     ?0        ?0                   ?0                  	;1	<<361
366  446   NOP/0                     ?0        ?0                   ?0                  	;1
367  446   GOTO/253                  ?0        ?257                 ?211                	;0
368  447   JMP/42                    ?0        ?253                 ?0                  	;0	>>253
369  447   FE_FREE/127               ?0        $154                 ?0                  	;0	<<252
370  450   JMP/42                    ?0        ?224                 ?0                  	;0	>>224
371  450   FE_FREE/127               ?0        $140                 ?0                  	;0	<<223
372  454   INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'file_put_contents'	;2
373  454   FETCH_CONSTANT/99         #200=     ?0                   214:'EPG_PATH'      	;16
374  454   CONCAT/8                  #201=     #200                 217:'stream_'       	;0
375  454   CONCAT/8                  #202=     #201                 16?25               	;0
376  454   SEND_VAL_EX/116           ?80       #202                 ?1                  	;0
377  454   INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'igbinary_serialize'	;1
378  454   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
379  454   DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
380  454   SEND_VAR_NO_REF_EX/50     ?96       $203                 ?2                  	;0
381  454   DO_FCALL_BY_NAME/131      ?158      ?0                   ?0                  	;0
382  456   GOTO/253                  ?0        ?1271                ?220                	;0
383  458   INIT_METHOD_CALL/112      ?0        16?1                 221:'query'         	;1
384  458   SEND_VAL_EX/116           ?80       223:'DELETE FROM `epg_data` WHERE `epg_id` = 0;' ?1                  	;0
385  458   DO_FCALL/60               ?159      ?0                   ?0                  	;0
386  460   INIT_METHOD_CALL/112      ?0        16?1                 224:'query'         	;1
387  460   SEND_VAL_EX/116           ?80       226:'SELECT `channel_id` FROM `streams` WHERE `epg_api` = 1;' ?1                  	;0
388  460   DO_FCALL/60               ?160      ?0                   ?0                  	;0
389  461   ASSIGN/38                 ?161      16?26                227:array (
)       	;0
390  462   INIT_METHOD_CALL/112      ?0        16?1                 228:'get_rows'      	;0
391  462   DO_FCALL/60               $208=     ?0                   ?0                  	;0
392  462   FE_RESET_R/77             $209=     $208                 ?405                	;0
393  462   FE_FETCH_R/78             ?0        $209                 16?2                	;405	>>405	<<404
394  463   FETCH_DIM_R/81            $210=     16?2                 230:'channel_id'    	;0
395  463   ISSET_ISEMPTY_DIM_OBJ/115 #211=     16?9                 $210                	;33554432
396  463   BOOL_NOT/13               #212=     #211                 ?0                  	;0
397  463   JMPZ/43                   ?0        #212                 ?400                	;0	>>400
398  464   NOP/0                     ?0        ?0                   ?0                  	;1
399  464   GOTO/253                  ?0        ?404                 ?231                	;0
400  466   FETCH_DIM_R/81            $214=     16?2                 232:'channel_id'    	;0	<<397
401  466   FETCH_DIM_R/81            $215=     16?9                 $214                	;0
402  466   ASSIGN_DIM/147            ?167      16?26                ?4397406            	;0
403  466   OP_DATA/137               ?0        $215                 ?0                  	;0
404  468   JMP/42                    ?0        ?393                 ?0                  	;0	>>393
405  468   FE_FREE/127               ?0        $209                 ?0                  	;0	<<392
406  470   GOTO/253                  ?0        ?407                 ?233                	;0
407  473   INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'count'         	;1
408  473   SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
409  473   DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
410  473   IS_SMALLER/19             #217=     236:0                $216                	;0
411  473   BOOL_NOT/13               #218=     #217                 ?0                  	;0
412  473   JMPZ/43                   ?0        #218                 ?414                	;0	>>414
413  474   GOTO/253                  ?0        ?602                 ?237                	;0
414  476   INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'array_chunk'   	;2	<<412
415  476   INIT_FCALL_BY_NAME/59     ?0        ?0                   240:'array_map'     	;2
416  476   SEND_VAL_EX/116           ?80       242:'intval'         ?1                  	;0
417  476   INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'array_unique'  	;1
418  476   SEND_VAR_EX/66            ?80       16?26                ?1                  	;0
419  476   DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
420  476   SEND_VAR_NO_REF_EX/50     ?96       $219                 ?2                  	;0
421  476   DO_FCALL_BY_NAME/131      $220=     ?0                   ?0                  	;0
422  476   SEND_VAR_NO_REF_EX/50     ?80       $220                 ?1                  	;0
423  476   SEND_VAL_EX/116           ?96       245:50               ?2                  	;0
424  476   DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
425  476   FE_RESET_R/77             $222=     $221                 ?601                	;0
426  476   FE_FETCH_R/78             ?0        $222                 16?27               	;601	>>601	<<600
427  477   INIT_ARRAY/71             #223=     246:'epg'            247:'action'        	;18
428  477   INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'implode'       	;2
429  477   SEND_VAL_EX/116           ?80       250:','              ?1                  	;0
430  477   SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
431  477   DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
432  477   ADD_ARRAY_ELEMENT/72      #223=     $224                 251:'id'            	;0
433  477   ADD_ARRAY_ELEMENT/72      #223=     16?29                252:'days'          	;0
434  477   ADD_ARRAY_ELEMENT/72      #223=     16?11                253:'keep'          	;0
435  477   ASSIGN/38                 ?179      16?28                #223                	;0
436  478   INIT_STATIC_METHOD_CALL/113 ?0        254:'Xui\\Functions' 256:'getEPG'        	;2
437  478   SEND_VAL_EX/116           ?80       258:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
438  478   SEND_VAR_EX/66            ?96       16?28                ?2                  	;0
439  478   DO_FCALL/60               $226=     ?0                   ?0                  	;0
440  478   ASSIGN/38                 ?181      16?16                $226                	;0
441  479   INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'is_array'      	;1
442  479   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
443  479   DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
444  479   JMPZ_EX/46                #229=     $228                 ?450                	;0	>>450
445  479   INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'count'         	;1
446  479   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
447  479   DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
448  479   IS_SMALLER/19             #231=     263:0                $230                	;0
449  479   BOOL/52                   #229=     #231                 ?0                  	;0
450  479   BOOL_NOT/13               #232=     #229                 ?0                  	;0	<<444
451  479   JMPZ/43                   ?0        #232                 ?454                	;0	>>454
452  480   NOP/0                     ?0        ?0                   ?0                  	;1
453  480   GOTO/253                  ?0        ?600                 ?264                	;0
454  482   INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'array_keys'    	;1	<<451
455  482   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
456  482   DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
457  482   FE_RESET_R/77             $234=     $233                 ?599                	;0
458  482   FE_FETCH_R/78             ?0        $234                 16?17               	;599	>>599	<<598
459  483   ASSIGN/38                 ?189      16?12                267:array (
)       	;0
460  484   INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'time'          	;0
461  484   DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
462  484   ASSIGN/38                 ?191      16?18                $236                	;0
463  485   FETCH_DIM_R/81            $238=     16?16                16?17               	;0
464  485   FE_RESET_R/77             $239=     $238                 ?480                	;0
465  485   FE_FETCH_R/78             ?0        $239                 16?19               	;480	>>480	<<479
466  486   INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'strtotime'     	;1
467  486   FETCH_DIM_FUNC_ARG/93     $240=     16?19                272:'startTime'     	;1
468  486   SEND_VAR_EX/66            ?80       $240                 ?1                  	;0
469  486   DO_FCALL_BY_NAME/131      $241=     ?0                   ?0                  	;0
470  486   ASSIGN/38                 ?196      16?20                $241                	;0
471  487   IS_SMALLER/19             #243=     16?20                16?18               	;0
472  487   BOOL_NOT/13               #244=     #243                 ?0                  	;0
473  487   JMPZ/43                   ?0        #244                 ?478                	;0	>>478
474  488   NOP/0                     ?0        ?0                   ?0                  	;1
475  488   NOP/0                     ?0        ?0                   ?0                  	;1
476  488   NOP/0                     ?0        ?0                   ?0                  	;1
477  488   GOTO/253                  ?0        ?479                 ?273                	;0
478  490   ASSIGN/38                 ?199      16?18                16?20               	;0	<<473
479  492   JMP/42                    ?0        ?465                 ?0                  	;0	>>465
480  492   FE_FREE/127               ?0        $239                 ?0                  	;0	<<464
481  495   INIT_METHOD_CALL/112      ?0        16?1                 274:'query'         	;3
482  495   SEND_VAL_EX/116           ?80       276:'DELETE FROM `epg_data` WHERE `start` >= ? AND `epg_id` = 0 AND `channel_id` = ?;' ?1                  	;0
483  495   SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
484  495   FETCH_DIM_FUNC_ARG/93     $246=     16?10                16?17               	;3
485  495   SEND_VAR_EX/66            ?112      $246                 ?3                  	;0
486  495   DO_FCALL/60               ?201      ?0                   ?0                  	;0
487  496   FETCH_DIM_R/81            $248=     16?16                16?17               	;0
488  496   FE_RESET_R/77             $249=     $248                 ?597                	;0
489  496   FE_FETCH_R/78             ?0        $249                 16?19               	;597	>>597	<<596
490  497   NOP/0                     ?0        ?0                   ?0                  	;1
491  497   NOP/0                     ?0        ?0                   ?0                  	;1
492  497   NOP/0                     ?0        ?0                   ?0                  	;1
493  497   GOTO/253                  ?0        ?557                 ?277                	;0
494  499   ASSIGN_DIM/147            ?204      16?12                ?4410621            	;0
495  499   OP_DATA/137               ?0        16?20                ?0                  	;0
496  500   INIT_METHOD_CALL/112      ?0        16?1                 278:'query'         	;7
497  500   SEND_VAL_EX/116           ?80       280:'INSERT INTO `epg_data` (`epg_id`,`channel_id`,`start`,`end`,`lang`,`title`,`description`) VALUES (0, ?, ?, ?, ?, ?, ?)' ?1                  	;0
498  500   FETCH_DIM_FUNC_ARG/93     $251=     16?10                16?17               	;2
499  500   SEND_VAR_EX/66            ?96       $251                 ?2                  	;0
500  500   SEND_VAR_EX/66            ?112      16?20                ?3                  	;0
501  500   SEND_VAR_EX/66            ?128      16?22                ?4                  	;0
502  500   INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'substr'        	;3
503  500   FETCH_DIM_FUNC_ARG/93     $252=     16?19                283:'program'       	;1
504  500   FETCH_DIM_FUNC_ARG/93     $253=     $252                 284:'titleLang'     	;1
505  500   SEND_VAR_EX/66            ?80       $253                 ?1                  	;0
506  500   SEND_VAL_EX/116           ?96       285:0                ?2                  	;0
507  500   SEND_VAL_EX/116           ?112      286:2                ?3                  	;0
508  500   DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
509  500   SEND_VAR_NO_REF_EX/50     ?144      $254                 ?5                  	;0
510  500   SEND_VAR_EX/66            ?160      16?23                ?6                  	;0
511  500   SEND_VAR_EX/66            ?176      16?24                ?7                  	;0
512  500   DO_FCALL/60               ?209      ?0                   ?0                  	;0
513  503   NOP/0                     ?0        ?0                   ?0                  	;1
514  503   NOP/0                     ?0        ?0                   ?0                  	;1
515  503   NOP/0                     ?0        ?0                   ?0                  	;1
516  503   GOTO/253                  ?0        ?596                 ?287                	;0
517  507   INIT_FCALL_BY_NAME/59     ?0        ?0                   288:'strtotime'     	;1
518  507   FETCH_DIM_FUNC_ARG/93     $256=     16?19                290:'startTime'     	;1
519  507   SEND_VAR_EX/66            ?80       $256                 ?1                  	;0
520  507   DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
521  507   ASSIGN/38                 ?212      16?20                $257                	;0
522  508   INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'strtotime'     	;1
523  508   FETCH_DIM_FUNC_ARG/93     $259=     16?19                293:'endTime'       	;1
524  508   SEND_VAR_EX/66            ?80       $259                 ?1                  	;0
525  508   DO_FCALL_BY_NAME/131      $260=     ?0                   ?0                  	;0
526  508   ASSIGN/38                 ?215      16?22                $260                	;0
527  509   INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'in_array'      	;2
528  509   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
529  509   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
530  509   DO_FCALL_BY_NAME/131      $262=     ?0                   ?0                  	;0
531  509   JMPZ/43                   ?0        $262                 ?536                	;0	>>536
532  510   NOP/0                     ?0        ?0                   ?0                  	;1
533  510   NOP/0                     ?0        ?0                   ?0                  	;1
534  510   NOP/0                     ?0        ?0                   ?0                  	;1
535  510   GOTO/253                  ?0        ?513                 ?296                	;0
536  512   NOP/0                     ?0        ?0                   ?0                  	;1	<<531
537  512   NOP/0                     ?0        ?0                   ?0                  	;1
538  512   NOP/0                     ?0        ?0                   ?0                  	;1
539  512   GOTO/253                  ?0        ?494                 ?297                	;0
540  514   FETCH_DIM_R/81            $263=     16?19                298:'program'       	;0
541  514   FETCH_DIM_R/81            $264=     $263                 299:'extended'      	;0
542  514   CONCAT/8                  #265=     $264                 300:' - '           	;0
543  514   CONCAT/8                  #266=     #265                 16?24               	;0
544  514   ASSIGN/38                 ?221      16?24                #266                	;0
545  516   NOP/0                     ?0        ?0                   ?0                  	;1
546  516   NOP/0                     ?0        ?0                   ?0                  	;1
547  516   NOP/0                     ?0        ?0                   ?0                  	;1
548  516   GOTO/253                  ?0        ?517                 ?301                	;0
549  518   FETCH_DIM_R/81            $268=     16?19                302:'program'       	;0
550  518   FETCH_DIM_R/81            $269=     $268                 303:'extended'      	;0
551  518   CONCAT/8                  #270=     304:' - '            $269                	;0
552  518   ASSIGN_CONCAT/30          ?225      16?23                #270                	;0
553  519   NOP/0                     ?0        ?0                   ?0                  	;1
554  519   NOP/0                     ?0        ?0                   ?0                  	;1
555  519   NOP/0                     ?0        ?0                   ?0                  	;1
556  519   GOTO/253                  ?0        ?517                 ?305                	;0
557  521   FETCH_DIM_R/81            $272=     16?19                306:'program'       	;0
558  521   FETCH_DIM_R/81            $273=     $272                 307:'title'         	;0
559  521   ASSIGN/38                 ?228      16?23                $273                	;0
560  522   FETCH_DIM_R/81            $275=     16?19                308:'program'       	;0
561  522   FETCH_DIM_R/81            $276=     $275                 309:'longDescription'	;0
562  522   ASSIGN/38                 ?231      16?24                $276                	;0
563  523   INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'strlen'        	;1
564  523   FETCH_DIM_FUNC_ARG/93     $278=     16?19                312:'program'       	;1
565  523   FETCH_DIM_FUNC_ARG/93     $279=     $278                 313:'extended'      	;1
566  523   SEND_VAR_EX/66            ?80       $279                 ?1                  	;0
567  523   DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
568  523   IS_SMALLER/19             #281=     314:0                $280                	;0
569  523   BOOL_NOT/13               #282=     #281                 ?0                  	;0
570  523   JMPZ/43                   ?0        #282                 ?575                	;0	>>575
571  524   NOP/0                     ?0        ?0                   ?0                  	;1
572  524   NOP/0                     ?0        ?0                   ?0                  	;1
573  524   NOP/0                     ?0        ?0                   ?0                  	;1
574  524   GOTO/253                  ?0        ?517                 ?315                	;0
575  526   FETCH_STATIC_PROP_R/173   $283=     316:'rSettings'      317:'XUI'           	;0	<<570
576  526   FETCH_DIM_R/81            $284=     $283                 319:'epg_api_extended'	;0
577  526   IS_EQUAL/17               #285=     $284                 320:1               	;0
578  526   JMPZ/43                   ?0        #285                 ?583                	;0	>>583
579  527   NOP/0                     ?0        ?0                   ?0                  	;1
580  527   NOP/0                     ?0        ?0                   ?0                  	;1
581  527   NOP/0                     ?0        ?0                   ?0                  	;1
582  527   GOTO/253                  ?0        ?549                 ?321                	;0
583  529   FETCH_STATIC_PROP_R/173   $286=     322:'rSettings'      323:'XUI'           	;0	<<578
584  529   FETCH_DIM_R/81            $287=     $286                 325:'epg_api_extended'	;0
585  529   IS_EQUAL/17               #288=     $287                 326:2               	;0
586  529   BOOL_NOT/13               #289=     #288                 ?0                  	;0
587  529   JMPZ/43                   ?0        #289                 ?592                	;0	>>592
588  530   NOP/0                     ?0        ?0                   ?0                  	;1
589  530   NOP/0                     ?0        ?0                   ?0                  	;1
590  530   NOP/0                     ?0        ?0                   ?0                  	;1
591  530   GOTO/253                  ?0        ?545                 ?327                	;0
592  532   NOP/0                     ?0        ?0                   ?0                  	;1	<<587
593  532   NOP/0                     ?0        ?0                   ?0                  	;1
594  532   NOP/0                     ?0        ?0                   ?0                  	;1
595  532   GOTO/253                  ?0        ?540                 ?328                	;0
596  533   JMP/42                    ?0        ?489                 ?0                  	;0	>>489
597  533   FE_FREE/127               ?0        $249                 ?0                  	;0	<<488
598  536   JMP/42                    ?0        ?458                 ?0                  	;0	>>458
599  536   FE_FREE/127               ?0        $234                 ?0                  	;0	<<457
600  540   JMP/42                    ?0        ?426                 ?0                  	;0	>>426
601  540   FE_FREE/127               ?0        $222                 ?0                  	;0	<<425
602  544   GOTO/253                  ?0        ?1361                ?329                	;0
603  546   JMPZ_EX/46                #290=     16?25                ?608                	;0	>>608
604  546   INIT_METHOD_CALL/112      ?0        16?1                 330:'num_rows'      	;0
605  546   DO_FCALL/60               $291=     ?0                   ?0                  	;0
606  546   IS_EQUAL/17               #292=     $291                 332:1               	;0
607  546   BOOL/52                   #290=     #292                 ?0                  	;0
608  546   BOOL_NOT/13               #293=     #290                 ?0                  	;0	<<603
609  546   JMPZ/43                   ?0        #293                 ?611                	;0	>>611
610  547   GOTO/253                  ?0        ?382                 ?333                	;0
611  549   ASSIGN/38                 ?248      16?3                 334:array (
)       	;0	<<609
612  550   INIT_ARRAY/71             #295=     335:'epg'            336:'action'        	;18
613  550   INIT_METHOD_CALL/112      ?0        16?1                 337:'get_row'       	;0
614  550   DO_FCALL/60               $296=     ?0                   ?0                  	;0
615  550   FETCH_DIM_R/81            $297=     $296                 339:'stationId'     	;0
616  550   ADD_ARRAY_ELEMENT/72      #295=     $297                 340:'id'            	;0
617  550   INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'intval'        	;1
618  550   FETCH_STATIC_PROP_FUNC_ARG/177 $298=     343:'rSettings'      344:'XUI'           	;1
619  550   FETCH_DIM_FUNC_ARG/93     $299=     $298                 346:'epg_api_days_fetch'	;1
620  550   SEND_VAR_EX/66            ?80       $299                 ?1                  	;0
621  550   DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
622  550   ADD_ARRAY_ELEMENT/72      #295=     $300                 347:'days'          	;0
623  550   INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'intval'        	;1
624  550   FETCH_STATIC_PROP_FUNC_ARG/177 $301=     350:'rSettings'      351:'XUI'           	;1
625  550   FETCH_DIM_FUNC_ARG/93     $302=     $301                 353:'epg_api_days_keep'	;1
626  550   SEND_VAR_EX/66            ?80       $302                 ?1                  	;0
627  550   DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
628  550   ADD_ARRAY_ELEMENT/72      #295=     $303                 354:'keep'          	;0
629  550   ASSIGN/38                 ?258      16?28                #295                	;0
630  551   INIT_STATIC_METHOD_CALL/113 ?0        355:'Xui\\Functions' 357:'getEPG'        	;2
631  551   SEND_VAL_EX/116           ?80       359:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
632  551   SEND_VAR_EX/66            ?96       16?28                ?2                  	;0
633  551   DO_FCALL/60               $305=     ?0                   ?0                  	;0
634  551   ASSIGN/38                 ?260      16?16                $305                	;0
635  552   INIT_FCALL_BY_NAME/59     ?0        ?0                   360:'is_array'      	;1
636  552   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
637  552   DO_FCALL_BY_NAME/131      $307=     ?0                   ?0                  	;0
638  552   JMPZ_EX/46                #308=     $307                 ?644                	;0	>>644
639  552   INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'count'         	;1
640  552   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
641  552   DO_FCALL_BY_NAME/131      $309=     ?0                   ?0                  	;0
642  552   IS_SMALLER/19             #310=     364:0                $309                	;0
643  552   BOOL/52                   #308=     #310                 ?0                  	;0
644  552   BOOL_NOT/13               #311=     #308                 ?0                  	;0	<<638
645  552   JMPZ/43                   ?0        #311                 ?647                	;0	>>647
646  553   GOTO/253                  ?0        ?372                 ?365                	;0
647  555   GOTO/253                  ?0        ?220                 ?366                	;0	<<645
648  557   INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'time'          	;0
649  557   DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
650  557   ASSIGN/38                 ?267      16?15                $312                	;0
651  558   INIT_FCALL_BY_NAME/59     ?0        ?0                   369:'count'         	;1
652  558   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
653  558   DO_FCALL_BY_NAME/131      $314=     ?0                   ?0                  	;0
654  558   IS_EQUAL/17               #315=     $314                 371:3               	;0
655  558   BOOL_NOT/13               #316=     #315                 ?0                  	;0
656  558   JMPZ/43                   ?0        #316                 ?658                	;0	>>658
657  559   GOTO/253                  ?0        ?1272                ?372                	;0
658  561   INIT_FCALL_BY_NAME/59     ?0        ?0                   373:'intval'        	;1	<<656
659  561   FETCH_DIM_FUNC_ARG/93     $317=     16?30                375:1               	;1
660  561   SEND_VAR_EX/66            ?80       $317                 ?1                  	;0
661  561   DO_FCALL_BY_NAME/131      $318=     ?0                   ?0                  	;0
662  561   ASSIGN/38                 ?273      16?25                $318                	;0
663  562   FETCH_DIM_R/81            $320=     16?30                376:2               	;0
664  562   ASSIGN/38                 ?275      16?21                $320                	;0
665  563   INIT_METHOD_CALL/112      ?0        16?1                 377:'query'         	;2
666  563   SEND_VAL_EX/116           ?80       379:'SELECT `stationId` FROM `epg_api` WHERE `callSign` = ?;' ?1                  	;0
667  563   SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
668  563   DO_FCALL/60               ?276      ?0                   ?0                  	;0
669  564   GOTO/253                  ?0        ?603                 ?380                	;0
670  566   INIT_FCALL/61             ?0        ?768                 381:'getbouquetgroups'	;0
671  566   DO_FCALL/60               $323=     ?0                   ?0                  	;0
672  566   ASSIGN/38                 ?278      16?31                $323                	;0
673  567   FE_RESET_R/77             $325=     16?31                ?1094               	;0
674  567   FE_FETCH_R/78             #326=     $325                 16?32               	;1094	>>1094	<<1093
675  567   ASSIGN/38                 ?281      16?33                #326                	;0
676  568   NOP/0                     ?0        ?0                   ?0                  	;1
677  568   GOTO/253                  ?0        ?862                 ?382                	;0
678  570   INIT_METHOD_CALL/112      ?0        16?1                 383:'get_rows'      	;0
679  570   DO_FCALL/60               $328=     ?0                   ?0                  	;0
680  570   ASSIGN/38                 ?283      16?34                $328                	;0
681  571   FE_RESET_R/77             $330=     16?34                ?820                	;0
682  571   FE_FETCH_R/78             ?0        $330                 16?2                	;820	>>820	<<819
683  572   NOP/0                     ?0        ?0                   ?0                  	;1
684  572   NOP/0                     ?0        ?0                   ?0                  	;1
685  572   GOTO/253                  ?0        ?689                 ?385                	;0
686  575   NOP/0                     ?0        ?0                   ?0                  	;1
687  575   NOP/0                     ?0        ?0                   ?0                  	;1
688  575   GOTO/253                  ?0        ?819                 ?386                	;0
689  577   FETCH_DIM_R/81            $331=     16?2                 387:'channel_id'    	;0
690  577   ISSET_ISEMPTY_DIM_OBJ/115 #332=     16?12                $331                	;33554432
691  577   BOOL_NOT/13               #333=     #332                 ?0                  	;0
692  577   JMPNZ_EX/47               #333=     #333                 ?702                	;0	>>702
693  577   INIT_FCALL_BY_NAME/59     ?0        ?0                   388:'in_array'      	;2
694  577   FETCH_DIM_FUNC_ARG/93     $334=     16?2                 390:'start'         	;1
695  577   SEND_VAR_EX/66            ?80       $334                 ?1                  	;0
696  577   FETCH_DIM_R/81            $335=     16?2                 391:'channel_id'    	;0
697  577   FETCH_DIM_FUNC_ARG/93     $336=     16?12                $335                	;2
698  577   SEND_VAR_EX/66            ?96       $336                 ?2                  	;0
699  577   DO_FCALL_BY_NAME/131      $337=     ?0                   ?0                  	;0
700  577   BOOL_NOT/13               #338=     $337                 ?0                  	;0
701  577   BOOL/52                   #333=     #338                 ?0                  	;0
702  577   BOOL_NOT/13               #339=     #333                 ?0                  	;0	<<692
703  577   JMPZ/43                   ?0        #339                 ?707                	;0	>>707
704  578   NOP/0                     ?0        ?0                   ?0                  	;1
705  578   NOP/0                     ?0        ?0                   ?0                  	;1
706  578   GOTO/253                  ?0        ?745                 ?392                	;0
707  580   FETCH_DIM_R/81            $340=     16?2                 393:'channel_id'    	;0	<<703
708  580   ISSET_ISEMPTY_DIM_OBJ/115 #341=     16?12                $340                	;33554432
709  580   JMPZ/43                   ?0        #341                 ?713                	;0	>>713
710  581   NOP/0                     ?0        ?0                   ?0                  	;1
711  581   NOP/0                     ?0        ?0                   ?0                  	;1
712  581   GOTO/253                  ?0        ?716                 ?394                	;0
713  583   FETCH_DIM_R/81            $342=     16?2                 395:'channel_id'    	;0	<<709
714  583   ASSIGN_DIM/147            ?297      16?12                $342                	;0
715  583   OP_DATA/137               ?0        396:array (
)        ?0                  	;0
716  585   FETCH_DIM_R/81            $344=     16?2                 397:'channel_id'    	;0
717  585   FETCH_DIM_R/81            $347=     16?2                 398:'start'         	;0
718  585   FETCH_DIM_W/84            $345=     16?12                $344                	;0
719  585   ASSIGN_DIM/147            ?300      $345                 ?0                  	;0
720  585   OP_DATA/137               ?0        $347                 ?0                  	;0
721  586   NOP/0                     ?0        ?0                   ?0                  	;1
722  586   NOP/0                     ?0        ?0                   ?0                  	;1
723  586   GOTO/253                  ?0        ?748                 ?399                	;0
724  588   ROPE_INIT/54              #351=     ?0                   400:'	<programme start="'	;11
725  588   ROPE_ADD/55               #351=     #351                 16?20               	;1
726  588   ROPE_ADD/55               #351=     #351                 401:'" stop="'      	;2
727  588   ROPE_ADD/55               #351=     #351                 16?22               	;3
728  588   FETCH_DIM_R/81            $348=     16?2                 402:'start'         	;0
729  588   ROPE_ADD/55               #351=     #351                 403:'" start_timestamp="'	;4
730  588   ROPE_ADD/55               #351=     #351                 $348                	;5
731  588   FETCH_DIM_R/81            $349=     16?2                 404:'end'           	;0
732  588   ROPE_ADD/55               #351=     #351                 405:'" stop_timestamp="'	;6
733  588   ROPE_ADD/55               #351=     #351                 $349                	;7
734  588   ROPE_ADD/55               #351=     #351                 406:'" channel="'   	;8
735  588   ROPE_ADD/55               #351=     #351                 16?21               	;9
736  588   ROPE_END/56               #350=     #351                 407:'" >
'          	;10
737  588   ASSIGN_CONCAT/30          ?311      16?35                #350                	;0
738  589   CONCAT/8                  #358=     408:'		<title>'      16?23               	;0
739  589   CONCAT/8                  #359=     #358                 409:'</title>
'     	;0
740  589   ASSIGN_CONCAT/30          ?314      16?35                #359                	;0
741  590   CONCAT/8                  #361=     410:'		<desc>'       16?24               	;0
742  590   CONCAT/8                  #362=     #361                 411:'</desc>
'      	;0
743  590   ASSIGN_CONCAT/30          ?317      16?35                #362                	;0
744  591   ASSIGN_CONCAT/30          ?318      16?35                412:'	</programme>
'	;0
745  593   NOP/0                     ?0        ?0                   ?0                  	;1
746  593   NOP/0                     ?0        ?0                   ?0                  	;1
747  593   GOTO/253                  ?0        ?686                 ?413                	;0
748  595   INIT_FCALL_BY_NAME/59     ?0        ?0                   414:'htmlspecialchars'	;3
749  595   FETCH_DIM_FUNC_ARG/93     $365=     16?2                 416:'title'         	;1
750  595   SEND_VAR_EX/66            ?80       $365                 ?1                  	;0
751  595   FETCH_CONSTANT/99         #366=     ?0                   417:'ENT_XML1'      	;16
752  595   FETCH_CONSTANT/99         #367=     ?0                   420:'ENT_QUOTES'    	;16
753  595   BW_OR/9                   #368=     #366                 #367                	;0
754  595   FETCH_CONSTANT/99         #369=     ?0                   423:'ENT_DISALLOWED'	;16
755  595   BW_OR/9                   #370=     #368                 #369                	;0
756  595   SEND_VAL_EX/116           ?96       #370                 ?2                  	;0
757  595   SEND_VAL_EX/116           ?112      426:'UTF-8'          ?3                  	;0
758  595   DO_FCALL_BY_NAME/131      $371=     ?0                   ?0                  	;0
759  595   ASSIGN/38                 ?326      16?23                $371                	;0
760  596   INIT_FCALL_BY_NAME/59     ?0        ?0                   427:'htmlspecialchars'	;3
761  596   FETCH_DIM_FUNC_ARG/93     $373=     16?2                 429:'description'   	;1
762  596   SEND_VAR_EX/66            ?80       $373                 ?1                  	;0
763  596   FETCH_CONSTANT/99         #374=     ?0                   430:'ENT_XML1'      	;16
764  596   FETCH_CONSTANT/99         #375=     ?0                   433:'ENT_QUOTES'    	;16
765  596   BW_OR/9                   #376=     #374                 #375                	;0
766  596   FETCH_CONSTANT/99         #377=     ?0                   436:'ENT_DISALLOWED'	;16
767  596   BW_OR/9                   #378=     #376                 #377                	;0
768  596   SEND_VAL_EX/116           ?96       #378                 ?2                  	;0
769  596   SEND_VAL_EX/116           ?112      439:'UTF-8'          ?3                  	;0
770  596   DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
771  596   ASSIGN/38                 ?334      16?24                $379                	;0
772  597   INIT_FCALL_BY_NAME/59     ?0        ?0                   440:'htmlspecialchars'	;3
773  597   FETCH_DIM_FUNC_ARG/93     $381=     16?2                 442:'channel_id'    	;1
774  597   SEND_VAR_EX/66            ?80       $381                 ?1                  	;0
775  597   FETCH_CONSTANT/99         #382=     ?0                   443:'ENT_XML1'      	;16
776  597   FETCH_CONSTANT/99         #383=     ?0                   446:'ENT_QUOTES'    	;16
777  597   BW_OR/9                   #384=     #382                 #383                	;0
778  597   FETCH_CONSTANT/99         #385=     ?0                   449:'ENT_DISALLOWED'	;16
779  597   BW_OR/9                   #386=     #384                 #385                	;0
780  597   SEND_VAL_EX/116           ?96       #386                 ?2                  	;0
781  597   SEND_VAL_EX/116           ?112      452:'UTF-8'          ?3                  	;0
782  597   DO_FCALL_BY_NAME/131      $387=     ?0                   ?0                  	;0
783  597   ASSIGN/38                 ?342      16?21                $387                	;0
784  598   INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'date'          	;2
785  598   SEND_VAL_EX/116           ?80       455:'YmdHis'         ?1                  	;0
786  598   FETCH_DIM_FUNC_ARG/93     $389=     16?2                 456:'start'         	;2
787  598   SEND_VAR_EX/66            ?96       $389                 ?2                  	;0
788  598   DO_FCALL_BY_NAME/131      $390=     ?0                   ?0                  	;0
789  598   CONCAT/8                  #391=     $390                 457:' '             	;0
790  598   INIT_FCALL_BY_NAME/59     ?0        ?0                   458:'str_replace'   	;3
791  598   SEND_VAL_EX/116           ?80       460:':'              ?1                  	;0
792  598   SEND_VAL_EX/116           ?96       461:''               ?2                  	;0
793  598   INIT_FCALL_BY_NAME/59     ?0        ?0                   462:'date'          	;1
794  598   SEND_VAL_EX/116           ?80       464:'P'              ?1                  	;0
795  598   DO_FCALL_BY_NAME/131      $392=     ?0                   ?0                  	;0
796  598   SEND_VAR_NO_REF_EX/50     ?112      $392                 ?3                  	;0
797  598   DO_FCALL_BY_NAME/131      $393=     ?0                   ?0                  	;0
798  598   CONCAT/8                  #394=     #391                 $393                	;0
799  598   ASSIGN/38                 ?349      16?20                #394                	;0
800  599   INIT_FCALL_BY_NAME/59     ?0        ?0                   465:'date'          	;2
801  599   SEND_VAL_EX/116           ?80       467:'YmdHis'         ?1                  	;0
802  599   FETCH_DIM_FUNC_ARG/93     $396=     16?2                 468:'end'           	;2
803  599   SEND_VAR_EX/66            ?96       $396                 ?2                  	;0
804  599   DO_FCALL_BY_NAME/131      $397=     ?0                   ?0                  	;0
805  599   CONCAT/8                  #398=     $397                 469:' '             	;0
806  599   INIT_FCALL_BY_NAME/59     ?0        ?0                   470:'str_replace'   	;3
807  599   SEND_VAL_EX/116           ?80       472:':'              ?1                  	;0
808  599   SEND_VAL_EX/116           ?96       473:''               ?2                  	;0
809  599   INIT_FCALL_BY_NAME/59     ?0        ?0                   474:'date'          	;1
810  599   SEND_VAL_EX/116           ?80       476:'P'              ?1                  	;0
811  599   DO_FCALL_BY_NAME/131      $399=     ?0                   ?0                  	;0
812  599   SEND_VAR_NO_REF_EX/50     ?112      $399                 ?3                  	;0
813  599   DO_FCALL_BY_NAME/131      $400=     ?0                   ?0                  	;0
814  599   CONCAT/8                  #401=     #398                 $400                	;0
815  599   ASSIGN/38                 ?356      16?22                #401                	;0
816  600   NOP/0                     ?0        ?0                   ?0                  	;1
817  600   NOP/0                     ?0        ?0                   ?0                  	;1
818  600   GOTO/253                  ?0        ?724                 ?477                	;0
819  601   JMP/42                    ?0        ?682                 ?0                  	;0	>>682
820  601   FE_FREE/127               ?0        $330                 ?0                  	;0	<<681
821  604   UNSET_CV/196              ?0        16?12                ?0                  	;0
822  606   NOP/0                     ?0        ?0                   ?0                  	;1
823  606   GOTO/253                  ?0        ?1042                ?478                	;0
824  609   INIT_FCALL_BY_NAME/59     ?0        ?0                   479:'array_unique'  	;1
825  609   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
826  609   DO_FCALL_BY_NAME/131      $403=     ?0                   ?0                  	;0
827  609   ASSIGN/38                 ?358      16?36                $403                	;0
828  610   INIT_FCALL_BY_NAME/59     ?0        ?0                   481:'count'         	;1
829  610   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
830  610   DO_FCALL_BY_NAME/131      $405=     ?0                   ?0                  	;0
831  610   IS_SMALLER/19             #406=     483:0                $405                	;0
832  610   BOOL_NOT/13               #407=     #406                 ?0                  	;0
833  610   JMPZ/43                   ?0        #407                 ?836                	;0	>>836
834  611   NOP/0                     ?0        ?0                   ?0                  	;1
835  611   GOTO/253                  ?0        ?822                 ?484                	;0
836  613   INIT_FCALL_BY_NAME/59     ?0        ?0                   485:'in_array'      	;2	<<833
837  613   FETCH_DIM_R/81            $408=     16?2                 487:'epg_id'        	;0
838  613   CONCAT/8                  #409=     $408                 488:'_'             	;0
839  613   FETCH_DIM_R/81            $410=     16?2                 489:'channel_id'    	;0
840  613   CONCAT/8                  #411=     #409                 $410                	;0
841  613   SEND_VAL_EX/116           ?80       #411                 ?1                  	;0
842  613   SEND_VAR_EX/66            ?96       16?37                ?2                  	;0
843  613   DO_FCALL_BY_NAME/131      $412=     ?0                   ?0                  	;0
844  613   JMPZ/43                   ?0        $412                 ?847                	;0	>>847
845  614   NOP/0                     ?0        ?0                   ?0                  	;1
846  614   GOTO/253                  ?0        ?1077                ?490                	;0
847  616   INIT_METHOD_CALL/112      ?0        16?1                 491:'query'         	;1	<<844
848  616   INIT_FCALL_BY_NAME/59     ?0        ?0                   493:'implode'       	;2
849  616   SEND_VAL_EX/116           ?80       495:','              ?1                  	;0
850  616   INIT_FCALL_BY_NAME/59     ?0        ?0                   496:'array_map'     	;2
851  616   SEND_VAL_EX/116           ?80       498:'intval'         ?1                  	;0
852  616   SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
853  616   DO_FCALL_BY_NAME/131      $413=     ?0                   ?0                  	;0
854  616   SEND_VAR_NO_REF_EX/50     ?96       $413                 ?2                  	;0
855  616   DO_FCALL_BY_NAME/131      $414=     ?0                   ?0                  	;0
856  616   CONCAT/8                  #415=     499:'SELECT * FROM `epg_data` WHERE `epg_id` IN (' $414                	;0
857  616   CONCAT/8                  #416=     #415                 500:') AND `end` >= UNIX_TIMESTAMP();'	;0
858  616   SEND_VAL_EX/116           ?80       #416                 ?1                  	;0
859  616   DO_FCALL/60               ?371      ?0                   ?0                  	;0
860  617   NOP/0                     ?0        ?0                   ?0                  	;1
861  617   GOTO/253                  ?0        ?1075                ?501                	;0
862  619   INIT_FCALL_BY_NAME/59     ?0        ?0                   502:'strlen'        	;1
863  619   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
864  619   DO_FCALL_BY_NAME/131      $418=     ?0                   ?0                  	;0
865  619   IS_SMALLER/19             #419=     504:0                $418                	;0
866  619   JMPZ_EX/46                #419=     #419                 ?876                	;0	>>876
867  619   INIT_FCALL_BY_NAME/59     ?0        ?0                   505:'count'         	;1
868  619   FETCH_DIM_FUNC_ARG/93     $420=     16?32                507:'streams'       	;1
869  619   SEND_VAR_EX/66            ?80       $420                 ?1                  	;0
870  619   DO_FCALL_BY_NAME/131      $421=     ?0                   ?0                  	;0
871  619   IS_SMALLER/19             #422=     508:0                $421                	;0
872  619   JMPNZ_EX/47               #422=     #422                 ?875                	;0	>>875
873  619   IS_EQUAL/17               #423=     16?33                509:'all'           	;0
874  619   BOOL/52                   #422=     #423                 ?0                  	;0
875  619   BOOL/52                   #419=     #422                 ?0                  	;0	<<872
876  619   BOOL_NOT/13               #424=     #419                 ?0                  	;0	<<866
877  619   JMPZ/43                   ?0        #424                 ?880                	;0	>>880
878  620   NOP/0                     ?0        ?0                   ?0                  	;1
879  620   GOTO/253                  ?0        ?1013                ?510                	;0
880  622   ASSIGN/38                 ?379      16?35                511:''              	;0	<<877
881  623   INIT_FCALL_BY_NAME/59     ?0        ?0                   512:'htmlspecialchars'	;3
882  623   FETCH_STATIC_PROP_FUNC_ARG/177 $426=     514:'rSettings'      515:'XUI'           	;1
883  623   FETCH_DIM_FUNC_ARG/93     $427=     $426                 517:'server_name'   	;1
884  623   SEND_VAR_EX/66            ?80       $427                 ?1                  	;0
885  623   FETCH_CONSTANT/99         #428=     ?0                   518:'ENT_XML1'      	;16
886  623   FETCH_CONSTANT/99         #429=     ?0                   521:'ENT_QUOTES'    	;16
887  623   BW_OR/9                   #430=     #428                 #429                	;0
888  623   FETCH_CONSTANT/99         #431=     ?0                   524:'ENT_DISALLOWED'	;16
889  623   BW_OR/9                   #432=     #430                 #431                	;0
890  623   SEND_VAL_EX/116           ?96       #432                 ?2                  	;0
891  623   SEND_VAL_EX/116           ?112      527:'UTF-8'          ?3                  	;0
892  623   DO_FCALL_BY_NAME/131      $433=     ?0                   ?0                  	;0
893  623   ASSIGN/38                 ?388      16?38                $433                	;0
894  624   ASSIGN_CONCAT/30          ?389      16?35                528:'<?xml version="1.0" encoding="utf-8" ?><!DOCTYPE tv SYSTEM "xmltv.dtd">
'	;0
895  625   ROPE_INIT/54              #437=     ?0                   529:'<tv generator-info-name="'	;3
896  625   ROPE_ADD/55               #437=     #437                 16?38               	;1
897  625   ROPE_END/56               #436=     #437                 530:'">
'           	;2
898  625   ASSIGN_CONCAT/30          ?393      16?35                #436                	;0
899  626   NOP/0                     ?0        ?0                   ?0                  	;1
900  626   GOTO/253                  ?0        ?1015                ?531                	;0
901  629   INIT_METHOD_CALL/112      ?0        16?1                 532:'get_rows'      	;0
902  629   DO_FCALL/60               $440=     ?0                   ?0                  	;0
903  629   ASSIGN/38                 ?395      16?34                $440                	;0
904  630   ASSIGN/38                 ?396      16?36                534:array (
)       	;0
905  631   ASSIGN/38                 ?397      16?37                535:array (
)       	;0
906  632   FE_RESET_R/77             $444=     16?34                ?994                	;0
907  632   FE_FETCH_R/78             ?0        $444                 16?2                	;994	>>994	<<993
908  633   NOP/0                     ?0        ?0                   ?0                  	;1
909  633   NOP/0                     ?0        ?0                   ?0                  	;1
910  633   GOTO/253                  ?0        ?950                 ?536                	;0
911  636   ASSIGN_CONCAT/30          ?399      16?35                537:'	</channel>
'  	;0
912  637   FETCH_DIM_R/81            $447=     16?2                 538:'epg_id'        	;0
913  637   ASSIGN_DIM/147            ?400      16?36                ?4397406            	;0
914  637   OP_DATA/137               ?0        $447                 ?0                  	;0
915  639   NOP/0                     ?0        ?0                   ?0                  	;1
916  639   NOP/0                     ?0        ?0                   ?0                  	;1
917  639   GOTO/253                  ?0        ?993                 ?539                	;0
918  641   INIT_FCALL_BY_NAME/59     ?0        ?0                   540:'htmlspecialchars'	;3
919  641   FETCH_DIM_FUNC_ARG/93     $448=     16?2                 542:'channel_id'    	;1
920  641   SEND_VAR_EX/66            ?80       $448                 ?1                  	;0
921  641   FETCH_CONSTANT/99         #449=     ?0                   543:'ENT_XML1'      	;16
922  641   FETCH_CONSTANT/99         #450=     ?0                   546:'ENT_QUOTES'    	;16
923  641   BW_OR/9                   #451=     #449                 #450                	;0
924  641   FETCH_CONSTANT/99         #452=     ?0                   549:'ENT_DISALLOWED'	;16
925  641   BW_OR/9                   #453=     #451                 #452                	;0
926  641   SEND_VAL_EX/116           ?96       #453                 ?2                  	;0
927  641   SEND_VAL_EX/116           ?112      552:'UTF-8'          ?3                  	;0
928  641   DO_FCALL_BY_NAME/131      $454=     ?0                   ?0                  	;0
929  641   ASSIGN/38                 ?409      16?21                $454                	;0
930  642   ROPE_INIT/54              #457=     ?0                   553:'	<channel id="'	;3
931  642   ROPE_ADD/55               #457=     #457                 16?21               	;1
932  642   ROPE_END/56               #456=     #457                 554:'">
'           	;2
933  642   ASSIGN_CONCAT/30          ?413      16?35                #456                	;0
934  643   ROPE_INIT/54              #461=     ?0                   555:'		<display-name>'	;3
935  643   ROPE_ADD/55               #461=     #461                 16?39               	;1
936  643   ROPE_END/56               #460=     #461                 556:'</display-name>
'	;2
937  643   ASSIGN_CONCAT/30          ?417      16?35                #460                	;0
938  644   ISSET_ISEMPTY_DIM_OBJ/115 #464=     16?2                 557:'stream_icon'   	;16777216
939  644   JMPZ/43                   ?0        #464                 ?943                	;0	>>943
940  645   NOP/0                     ?0        ?0                   ?0                  	;1
941  645   NOP/0                     ?0        ?0                   ?0                  	;1
942  645   GOTO/253                  ?0        ?911                 ?558                	;0
943  647   ROPE_INIT/54              #466=     ?0                   559:'		<icon src="' 	;3	<<939
944  647   ROPE_ADD/55               #466=     #466                 16?40               	;1
945  647   ROPE_END/56               #465=     #466                 560:'" />
'         	;2
946  647   ASSIGN_CONCAT/30          ?422      16?35                #465                	;0
947  648   NOP/0                     ?0        ?0                   ?0                  	;1
948  648   NOP/0                     ?0        ?0                   ?0                  	;1
949  648   GOTO/253                  ?0        ?911                 ?561                	;0
950  650   FETCH_DIM_R/81            $469=     16?2                 562:'tv_archive_duration'	;0
951  650   IS_SMALLER/19             #470=     563:0                $469                	;0
952  650   BOOL_NOT/13               #471=     #470                 ?0                  	;0
953  650   JMPZ/43                   ?0        #471                 ?957                	;0	>>957
954  651   NOP/0                     ?0        ?0                   ?0                  	;1
955  651   NOP/0                     ?0        ?0                   ?0                  	;1
956  651   GOTO/253                  ?0        ?963                 ?564                	;0
957  653   FETCH_DIM_R/81            $473=     16?2                 565:'epg_id'        	;0	<<953
958  653   CONCAT/8                  #474=     $473                 566:'_'             	;0
959  653   FETCH_DIM_R/81            $475=     16?2                 567:'channel_id'    	;0
960  653   CONCAT/8                  #476=     #474                 $475                	;0
961  653   ASSIGN_DIM/147            ?426      16?37                ?4397406            	;0
962  653   OP_DATA/137               ?0        #476                 ?0                  	;0
963  655   INIT_FCALL_BY_NAME/59     ?0        ?0                   568:'htmlspecialchars'	;3
964  655   FETCH_DIM_FUNC_ARG/93     $477=     16?2                 570:'stream_display_name'	;1
965  655   SEND_VAR_EX/66            ?80       $477                 ?1                  	;0
966  655   FETCH_CONSTANT/99         #478=     ?0                   571:'ENT_XML1'      	;16
967  655   FETCH_CONSTANT/99         #479=     ?0                   574:'ENT_QUOTES'    	;16
968  655   BW_OR/9                   #480=     #478                 #479                	;0
969  655   FETCH_CONSTANT/99         #481=     ?0                   577:'ENT_DISALLOWED'	;16
970  655   BW_OR/9                   #482=     #480                 #481                	;0
971  655   SEND_VAL_EX/116           ?96       #482                 ?2                  	;0
972  655   SEND_VAL_EX/116           ?112      580:'UTF-8'          ?3                  	;0
973  655   DO_FCALL_BY_NAME/131      $483=     ?0                   ?0                  	;0
974  655   ASSIGN/38                 ?438      16?39                $483                	;0
975  656   INIT_FCALL_BY_NAME/59     ?0        ?0                   581:'htmlspecialchars'	;3
976  656   INIT_STATIC_METHOD_CALL/113 ?0        583:'XUI'            585:'FCA722697178454b'	;1
977  656   FETCH_DIM_FUNC_ARG/93     $485=     16?2                 587:'stream_icon'   	;1
978  656   SEND_VAR_EX/66            ?80       $485                 ?1                  	;0
979  656   DO_FCALL/60               $486=     ?0                   ?0                  	;0
980  656   SEND_VAR_NO_REF_EX/50     ?80       $486                 ?1                  	;0
981  656   FETCH_CONSTANT/99         #487=     ?0                   588:'ENT_XML1'      	;16
982  656   FETCH_CONSTANT/99         #488=     ?0                   591:'ENT_QUOTES'    	;16
983  656   BW_OR/9                   #489=     #487                 #488                	;0
984  656   FETCH_CONSTANT/99         #490=     ?0                   594:'ENT_DISALLOWED'	;16
985  656   BW_OR/9                   #491=     #489                 #490                	;0
986  656   SEND_VAL_EX/116           ?96       #491                 ?2                  	;0
987  656   SEND_VAL_EX/116           ?112      597:'UTF-8'          ?3                  	;0
988  656   DO_FCALL_BY_NAME/131      $492=     ?0                   ?0                  	;0
989  656   ASSIGN/38                 ?447      16?40                $492                	;0
990  657   NOP/0                     ?0        ?0                   ?0                  	;1
991  657   NOP/0                     ?0        ?0                   ?0                  	;1
992  657   GOTO/253                  ?0        ?918                 ?598                	;0
993  658   JMP/42                    ?0        ?907                 ?0                  	;0	>>907
994  658   FE_FREE/127               ?0        $444                 ?0                  	;0	<<906
995  660   NOP/0                     ?0        ?0                   ?0                  	;1
996  660   GOTO/253                  ?0        ?824                 ?599                	;0
997  662   INIT_FCALL_BY_NAME/59     ?0        ?0                   600:'gzclose'       	;1
998  662   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
999  662   DO_FCALL_BY_NAME/131      ?448      ?0                   ?0                  	;0
1000 663   IS_EQUAL/17               #495=     16?33                602:'all'           	;0
1001 663   JMPZ_EX/46                #495=     #495                 ?1007               	;0	>>1007
1002 663   INIT_FCALL_BY_NAME/59     ?0        ?0                   603:'strlen'        	;1
1003 663   SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
1004 663   DO_FCALL_BY_NAME/131      $496=     ?0                   ?0                  	;0
1005 663   IS_SMALLER/19             #497=     605:10485760         $496                	;0
1006 663   BOOL/52                   #495=     #497                 ?0                  	;0
1007 663   BOOL_NOT/13               #498=     #495                 ?0                  	;0	<<1001
1008 663   JMPZ/43                   ?0        #498                 ?1011               	;0	>>1011
1009 664   NOP/0                     ?0        ?0                   ?0                  	;1
1010 664   GOTO/253                  ?0        ?1013                ?606                	;0
1011 666   FE_FREE/127               ?0        $325                 ?21                 	;1	<<1008
1012 666   GOTO/253                  ?0        ?1095                ?607                	;0
1013 669   NOP/0                     ?0        ?0                   ?0                  	;1
1014 669   GOTO/253                  ?0        ?1040                ?608                	;0
1015 671   IS_EQUAL/17               #499=     16?33                609:'all'           	;0
1016 671   JMPZ/43                   ?0        #499                 ?1019               	;0	>>1019
1017 672   NOP/0                     ?0        ?0                   ?0                  	;1
1018 672   GOTO/253                  ?0        ?1035                ?610                	;0
1019 674   INIT_METHOD_CALL/112      ?0        16?1                 611:'query'         	;1	<<1016
1020 674   INIT_FCALL_BY_NAME/59     ?0        ?0                   613:'implode'       	;2
1021 674   SEND_VAL_EX/116           ?80       615:','              ?1                  	;0
1022 674   INIT_FCALL_BY_NAME/59     ?0        ?0                   616:'array_map'     	;2
1023 674   SEND_VAL_EX/116           ?80       618:'intval'         ?1                  	;0
1024 674   FETCH_DIM_FUNC_ARG/93     $500=     16?32                619:'streams'       	;2
1025 674   SEND_VAR_EX/66            ?96       $500                 ?2                  	;0
1026 674   DO_FCALL_BY_NAME/131      $501=     ?0                   ?0                  	;0
1027 674   SEND_VAR_NO_REF_EX/50     ?96       $501                 ?2                  	;0
1028 674   DO_FCALL_BY_NAME/131      $502=     ?0                   ?0                  	;0
1029 674   CONCAT/8                  #503=     620:'SELECT `stream_display_name`,`stream_icon`,`channel_id`,`epg_id`,`tv_archive_duration` FROM `streams` WHERE `epg_id` IS NOT NULL AND `channel_id` IS NOT NULL AND `id` IN (' $502                	;0
1030 674   CONCAT/8                  #504=     #503                 621:');'            	;0
1031 674   SEND_VAL_EX/116           ?80       #504                 ?1                  	;0
1032 674   DO_FCALL/60               ?459      ?0                   ?0                  	;0
1033 675   NOP/0                     ?0        ?0                   ?0                  	;1
1034 675   GOTO/253                  ?0        ?901                 ?622                	;0
1035 677   INIT_METHOD_CALL/112      ?0        16?1                 623:'query'         	;1
1036 677   SEND_VAL_EX/116           ?80       625:'SELECT `stream_display_name`,`stream_icon`,`channel_id`,`epg_id`,`tv_archive_duration` FROM `streams` WHERE `epg_id` IS NOT NULL AND `channel_id` IS NOT NULL;' ?1                  	;0
1037 677   DO_FCALL/60               ?460      ?0                   ?0                  	;0
1038 678   NOP/0                     ?0        ?0                   ?0                  	;1
1039 678   GOTO/253                  ?0        ?901                 ?626                	;0
1040 681   NOP/0                     ?0        ?0                   ?0                  	;1
1041 681   GOTO/253                  ?0        ?1093                ?627                	;0
1042 683   ASSIGN_CONCAT/30          ?461      16?35                628:'</tv>'         	;0
1043 684   IS_EQUAL/17               #508=     16?33                629:'all'           	;0
1044 684   JMPZ/43                   ?0        #508                 ?1047               	;0	>>1047
1045 684   QM_ASSIGN/22              #509=     630:'all'            ?0                  	;0
1046 684   JMP/42                    ?0        ?1051                ?0                  	;0	>>1051
1047 684   INIT_FCALL_BY_NAME/59     ?0        ?0                   631:'md5'           	;1	<<1044
1048 684   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
1049 684   DO_FCALL_BY_NAME/131      $510=     ?0                   ?0                  	;0
1050 684   QM_ASSIGN/22              #509=     $510                 ?0                  	;0
1051 684   ASSIGN/38                 ?465      16?41                #509                	;0	<<1046
1052 685   INIT_FCALL_BY_NAME/59     ?0        ?0                   633:'file_put_contents'	;2
1053 685   FETCH_CONSTANT/99         #512=     ?0                   635:'EPG_PATH'      	;16
1054 685   CONCAT/8                  #513=     #512                 638:'epg_'          	;0
1055 685   CONCAT/8                  #514=     #513                 16?41               	;0
1056 685   CONCAT/8                  #515=     #514                 639:'.xml'          	;0
1057 685   SEND_VAL_EX/116           ?80       #515                 ?1                  	;0
1058 685   SEND_VAR_EX/66            ?96       16?35                ?2                  	;0
1059 685   DO_FCALL_BY_NAME/131      ?470      ?0                   ?0                  	;0
1060 686   INIT_FCALL_BY_NAME/59     ?0        ?0                   640:'gzopen'        	;2
1061 686   FETCH_CONSTANT/99         #517=     ?0                   642:'EPG_PATH'      	;16
1062 686   CONCAT/8                  #518=     #517                 645:'epg_'          	;0
1063 686   CONCAT/8                  #519=     #518                 16?41               	;0
1064 686   CONCAT/8                  #520=     #519                 646:'.xml.gz'       	;0
1065 686   SEND_VAL_EX/116           ?80       #520                 ?1                  	;0
1066 686   SEND_VAL_EX/116           ?96       647:'w9'             ?2                  	;0
1067 686   DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
1068 686   ASSIGN/38                 ?476      16?14                $521                	;0
1069 687   INIT_FCALL_BY_NAME/59     ?0        ?0                   648:'gzwrite'       	;2
1070 687   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
1071 687   SEND_VAR_EX/66            ?96       16?35                ?2                  	;0
1072 687   DO_FCALL_BY_NAME/131      ?477      ?0                   ?0                  	;0
1073 688   NOP/0                     ?0        ?0                   ?0                  	;1
1074 688   GOTO/253                  ?0        ?997                 ?650                	;0
1075 690   NOP/0                     ?0        ?0                   ?0                  	;1
1076 690   GOTO/253                  ?0        ?1090                ?651                	;0
1077 692   INIT_METHOD_CALL/112      ?0        16?1                 652:'query'         	;1
1078 692   INIT_FCALL_BY_NAME/59     ?0        ?0                   654:'implode'       	;2
1079 692   SEND_VAL_EX/116           ?80       656:','              ?1                  	;0
1080 692   INIT_FCALL_BY_NAME/59     ?0        ?0                   657:'array_map'     	;2
1081 692   SEND_VAL_EX/116           ?80       659:'intval'         ?1                  	;0
1082 692   SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
1083 692   DO_FCALL_BY_NAME/131      $524=     ?0                   ?0                  	;0
1084 692   SEND_VAR_NO_REF_EX/50     ?96       $524                 ?2                  	;0
1085 692   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
1086 692   CONCAT/8                  #526=     660:'SELECT * FROM `epg_data` WHERE `epg_id` IN (' $525                	;0
1087 692   CONCAT/8                  #527=     #526                 661:');'            	;0
1088 692   SEND_VAL_EX/116           ?80       #527                 ?1                  	;0
1089 692   DO_FCALL/60               ?482      ?0                   ?0                  	;0
1090 694   ASSIGN/38                 ?483      16?12                662:array (
)       	;0
1091 695   NOP/0                     ?0        ?0                   ?0                  	;1
1092 695   GOTO/253                  ?0        ?678                 ?663                	;0
1093 696   JMP/42                    ?0        ?674                 ?0                  	;0	>>674
1094 696   FE_FREE/127               ?0        $325                 ?0                  	;0	<<673
1095 699   ASSIGN/38                 ?484      16?42                664:array (
)       	;0
1096 700   INIT_METHOD_CALL/112      ?0        16?1                 665:'query'         	;1
1097 700   SEND_VAL_EX/116           ?80       667:'SELECT `id`, `epg_id`, `channel_id` FROM `streams` WHERE `type` = 1 AND `epg_id` IS NOT NULL AND `channel_id` IS NOT NULL;' ?1                  	;0
1098 700   DO_FCALL/60               ?485      ?0                   ?0                  	;0
1099 701   GOTO/253                  ?0        ?134                 ?668                	;0
1100 703   INIT_FCALL_BY_NAME/59     ?0        ?0                   669:'intval'        	;1
1101 703   FETCH_STATIC_PROP_FUNC_ARG/177 $532=     671:'rSettings'      672:'XUI'           	;1
1102 703   FETCH_DIM_FUNC_ARG/93     $533=     $532                 674:'epg_api_days_fetch'	;1
1103 703   SEND_VAR_EX/66            ?80       $533                 ?1                  	;0
1104 703   DO_FCALL_BY_NAME/131      $534=     ?0                   ?0                  	;0
1105 703   ASSIGN/38                 ?489      16?29                $534                	;0
1106 704   INIT_FCALL_BY_NAME/59     ?0        ?0                   675:'intval'        	;1
1107 704   FETCH_STATIC_PROP_FUNC_ARG/177 $536=     677:'rSettings'      678:'XUI'           	;1
1108 704   FETCH_DIM_FUNC_ARG/93     $537=     $536                 680:'epg_api_days_keep'	;1
1109 704   SEND_VAR_EX/66            ?80       $537                 ?1                  	;0
1110 704   DO_FCALL_BY_NAME/131      $538=     ?0                   ?0                  	;0
1111 704   ASSIGN/38                 ?493      16?11                $538                	;0
1112 705   INIT_STATIC_METHOD_CALL/113 ?0        681:'Xui\\Functions' 683:'getEPGChannels'	;1
1113 705   SEND_VAL_EX/116           ?80       685:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
1114 705   DO_FCALL/60               $540=     ?0                   ?0                  	;0
1115 705   ASSIGN/38                 ?495      16?7                 $540                	;0
1116 706   ASSIGN/38                 $542=     16?9                 686:array (
)       	;0
1117 706   ASSIGN/38                 ?497      16?10                $542                	;0
1118 707   INIT_FCALL_BY_NAME/59     ?0        ?0                   687:'is_array'      	;1
1119 707   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1120 707   DO_FCALL_BY_NAME/131      $544=     ?0                   ?0                  	;0
1121 707   JMPZ_EX/46                #545=     $544                 ?1127               	;0	>>1127
1122 707   INIT_FCALL_BY_NAME/59     ?0        ?0                   689:'count'         	;1
1123 707   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1124 707   DO_FCALL_BY_NAME/131      $546=     ?0                   ?0                  	;0
1125 707   IS_SMALLER/19             #547=     691:0                $546                	;0
1126 707   BOOL/52                   #545=     #547                 ?0                  	;0
1127 707   JMPZ/43                   ?0        #545                 ?1129               	;0	>>1129	<<1121
1128 708   GOTO/253                  ?0        ?1317                ?692                	;0
1129 710   GOTO/253                  ?0        ?1293                ?693                	;0	<<1127
1130 713   ASSIGN/38                 $548=     16?0                 694:NULL            	;0
1131 713   ASSIGN/38                 $549=     16?25                $548                	;0
1132 713   ASSIGN/38                 ?504      16?21                $549                	;0
1133 714   INIT_FCALL_BY_NAME/59     ?0        ?0                   695:'count'         	;1
1134 714   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
1135 714   DO_FCALL_BY_NAME/131      $551=     ?0                   ?0                  	;0
1136 714   IS_EQUAL/17               #552=     $551                 697:2               	;0
1137 714   BOOL_NOT/13               #553=     #552                 ?0                  	;0
1138 714   JMPZ/43                   ?0        #553                 ?1140               	;0	>>1140
1139 715   GOTO/253                  ?0        ?1145                ?698                	;0
1140 717   INIT_FCALL_BY_NAME/59     ?0        ?0                   699:'intval'        	;1	<<1138
1141 717   FETCH_DIM_FUNC_ARG/93     $554=     16?30                701:1               	;1
1142 717   SEND_VAR_EX/66            ?80       $554                 ?1                  	;0
1143 717   DO_FCALL_BY_NAME/131      $555=     ?0                   ?0                  	;0
1144 717   ASSIGN/38                 ?510      16?0                 $555                	;0
1145 719   GOTO/253                  ?0        ?1318                ?702                	;0
1146 721   INIT_METHOD_CALL/112      ?0        16?1                 703:'get_rows'      	;0
1147 721   DO_FCALL/60               $557=     ?0                   ?0                  	;0
1148 721   ASSIGN/38                 ?512      16?43                $557                	;0
1149 722   FE_RESET_R/77             $559=     16?43                ?1260               	;0
1150 722   FE_FETCH_R/78             ?0        $559                 16?4                	;1260	>>1260	<<1259
1151 723   NOP/0                     ?0        ?0                   ?0                  	;1
1152 723   GOTO/253                  ?0        ?1181                ?705                	;0
1153 725   INIT_METHOD_CALL/112      ?0        16?1                 706:'query'         	;3
1154 725   SEND_VAL_EX/116           ?80       708:'SELECT t1.`channel_id`, t1.`epg_lang`, t1.`epg_offset`, last_row.start FROM `streams` t1 LEFT JOIN (SELECT channel_id, MAX(`start`) as start FROM epg_data WHERE epg_id = ? GROUP BY channel_id) last_row ON last_row.channel_id = t1.channel_id WHERE `epg_id` = ?;' ?1                  	;0
1155 725   FETCH_DIM_FUNC_ARG/93     $560=     16?4                 709:'epg_id'        	;2
1156 725   SEND_VAR_EX/66            ?96       $560                 ?2                  	;0
1157 725   FETCH_DIM_FUNC_ARG/93     $561=     16?4                 710:'epg_id'        	;3
1158 725   SEND_VAR_EX/66            ?112      $561                 ?3                  	;0
1159 725   DO_FCALL/60               ?516      ?0                   ?0                  	;0
1160 726   INIT_METHOD_CALL/112      ?0        16?1                 711:'get_rows'      	;2
1161 726   SEND_VAL_EX/116           ?80       713:true             ?1                  	;0
1162 726   SEND_VAL_EX/116           ?96       714:'channel_id'     ?2                  	;0
1163 726   DO_FCALL/60               $563=     ?0                   ?0                  	;0
1164 726   ASSIGN/38                 ?518      16?7                 $563                	;0
1165 727   INIT_METHOD_CALL/112      ?0        16?3                 715:'a6Ab1bb29714429d'	;3
1166 727   FETCH_DIM_FUNC_ARG/93     $565=     16?4                 717:'epg_id'        	;1
1167 727   SEND_VAR_EX/66            ?80       $565                 ?1                  	;0
1168 727   SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
1169 727   INIT_FCALL_BY_NAME/59     ?0        ?0                   718:'intval'        	;1
1170 727   FETCH_DIM_FUNC_ARG/93     $566=     16?4                 720:'offset'        	;1
1171 727   SEND_VAR_EX/66            ?80       $566                 ?1                  	;0
1172 727   DO_FCALL_BY_NAME/131      $567=     ?0                   ?0                  	;0
1173 727   JMP_SET/152               #568=     $567                 ?1175               	;0
1174 727   QM_ASSIGN/22              #568=     721:0                ?0                  	;0
1175 727   SEND_VAL_EX/116           ?112      #568                 ?3                  	;0
1176 727   DO_FCALL/60               $569=     ?0                   ?0                  	;0
1177 727   ASSIGN/38                 ?524      16?44                $569                	;0
1178 728   ASSIGN/38                 ?525      16?45                722:0               	;0
1179 730   NOP/0                     ?0        ?0                   ?0                  	;1
1180 730   GOTO/253                  ?0        ?1205                ?723                	;0
1181 732   FETCH_DIM_R/81            $572=     16?4                 724:'days_keep'     	;0
1182 732   IS_EQUAL/17               #573=     $572                 725:0               	;0
1183 732   BOOL_NOT/13               #574=     #573                 ?0                  	;0
1184 732   JMPZ/43                   ?0        #574                 ?1187               	;0	>>1187
1185 733   NOP/0                     ?0        ?0                   ?0                  	;1
1186 733   GOTO/253                  ?0        ?1192                ?726                	;0
1187 735   INIT_METHOD_CALL/112      ?0        16?1                 727:'query'         	;2	<<1184
1188 735   SEND_VAL_EX/116           ?80       729:'DELETE FROM `epg_data` WHERE `epg_id` = ?' ?1                  	;0
1189 735   FETCH_DIM_FUNC_ARG/93     $575=     16?4                 730:'epg_id'        	;2
1190 735   SEND_VAR_EX/66            ?96       $575                 ?2                  	;0
1191 735   DO_FCALL/60               ?530      ?0                   ?0                  	;0
1192 737   NEW/68                    $577=     731:'EPG'            ?160                	;2
1193 737   FETCH_DIM_FUNC_ARG/93     $578=     16?4                 733:'epg_file'      	;1
1194 737   SEND_VAR_EX/66            ?80       $578                 ?1                  	;0
1195 737   SEND_VAL_EX/116           ?96       734:true             ?2                  	;0
1196 737   DO_FCALL/60               ?533      ?8                   ?0                  	;0
1197 737   ASSIGN/38                 ?534      16?3                 $577                	;0
1198 738   FETCH_OBJ_R/82            $581=     16?3                 735:'rValid'        	;0
1199 738   BOOL_NOT/13               #582=     $581                 ?0                  	;0
1200 738   JMPZ/43                   ?0        #582                 ?1203               	;0	>>1203
1201 739   NOP/0                     ?0        ?0                   ?0                  	;1
1202 739   GOTO/253                  ?0        ?1236                ?736                	;0
1203 741   NOP/0                     ?0        ?0                   ?0                  	;1	<<1200
1204 741   GOTO/253                  ?0        ?1153                ?737                	;0
1205 743   INIT_FCALL_BY_NAME/59     ?0        ?0                   738:'count'         	;1
1206 743   SEND_VAR_EX/66            ?80       16?44                ?1                  	;0
1207 743   DO_FCALL_BY_NAME/131      $583=     ?0                   ?0                  	;0
1208 743   IS_SMALLER/19             #584=     16?45                $583                	;0
1209 743   BOOL_NOT/13               #585=     #584                 ?0                  	;0
1210 743   JMPZ/43                   ?0        #585                 ?1213               	;0	>>1213
1211 744   NOP/0                     ?0        ?0                   ?0                  	;1
1212 744   GOTO/253                  ?0        ?1228                ?740                	;0
1213 746   ISSET_ISEMPTY_DIM_OBJ/115 #586=     16?44                16?45               	;16777216	<<1210
1214 746   JMPZ/43                   ?0        #586                 ?1217               	;0	>>1217
1215 747   NOP/0                     ?0        ?0                   ?0                  	;1
1216 747   GOTO/253                  ?0        ?1222                ?741                	;0
1217 749   INIT_METHOD_CALL/112      ?0        16?1                 742:'simple_query'  	;1	<<1214
1218 749   FETCH_DIM_R/81            $587=     16?44                16?45               	;0
1219 749   CONCAT/8                  #588=     744:'INSERT INTO `epg_data` (`epg_id`,`channel_id`,`start`,`end`,`lang`,`title`,`description`) VALUES ' $587                	;0
1220 749   SEND_VAL_EX/116           ?80       #588                 ?1                  	;0
1221 749   DO_FCALL/60               ?543      ?0                   ?0                  	;0
1222 752   NOP/0                     ?0        ?0                   ?0                  	;1
1223 752   GOTO/253                  ?0        ?1224                ?745                	;0
1224 754   POST_INC/36               #590=     16?45                ?0                  	;0
1225 754   FREE/70                   ?0        #590                 ?0                  	;0
1226 755   NOP/0                     ?0        ?0                   ?0                  	;1
1227 755   GOTO/253                  ?0        ?1179                ?746                	;0
1228 757   INIT_METHOD_CALL/112      ?0        16?1                 747:'query'         	;3
1229 757   SEND_VAL_EX/116           ?80       749:'UPDATE `epg` SET `last_updated` = ? WHERE `id` = ?' ?1                  	;0
1230 757   INIT_FCALL_BY_NAME/59     ?0        ?0                   750:'time'          	;0
1231 757   DO_FCALL_BY_NAME/131      $591=     ?0                   ?0                  	;0
1232 757   SEND_VAR_NO_REF_EX/50     ?96       $591                 ?2                  	;0
1233 757   FETCH_DIM_FUNC_ARG/93     $592=     16?4                 752:'epg_id'        	;3
1234 757   SEND_VAR_EX/66            ?112      $592                 ?3                  	;0
1235 757   DO_FCALL/60               ?547      ?0                   ?0                  	;0
1236 759   NOP/0                     ?0        ?0                   ?0                  	;1
1237 759   GOTO/253                  ?0        ?1238                ?753                	;0
1238 761   FETCH_DIM_R/81            $594=     16?4                 754:'days_keep'     	;0
1239 761   IS_SMALLER/19             #595=     755:0                $594                	;0
1240 761   BOOL_NOT/13               #596=     #595                 ?0                  	;0
1241 761   JMPZ/43                   ?0        #596                 ?1244               	;0	>>1244
1242 762   NOP/0                     ?0        ?0                   ?0                  	;1
1243 762   GOTO/253                  ?0        ?1257                ?756                	;0
1244 764   INIT_METHOD_CALL/112      ?0        16?1                 757:'query'         	;3	<<1241
1245 764   SEND_VAL_EX/116           ?80       759:'DELETE FROM `epg_data` WHERE `epg_id` = ? AND `start` < ?' ?1                  	;0
1246 764   FETCH_DIM_FUNC_ARG/93     $597=     16?4                 760:'epg_id'        	;2
1247 764   SEND_VAR_EX/66            ?96       $597                 ?2                  	;0
1248 764   INIT_FCALL_BY_NAME/59     ?0        ?0                   761:'strtotime'     	;1
1249 764   FETCH_DIM_R/81            $598=     16?4                 763:'days_keep'     	;0
1250 764   ROPE_INIT/54              #600=     ?0                   764:'-'             	;3
1251 764   ROPE_ADD/55               #600=     #600                 $598                	;1
1252 764   ROPE_END/56               #599=     #600                 765:' days'         	;2
1253 764   SEND_VAL_EX/116           ?80       #599                 ?1                  	;0
1254 764   DO_FCALL_BY_NAME/131      $602=     ?0                   ?0                  	;0
1255 764   SEND_VAR_NO_REF_EX/50     ?112      $602                 ?3                  	;0
1256 764   DO_FCALL/60               ?557      ?0                   ?0                  	;0
1257 767   NOP/0                     ?0        ?0                   ?0                  	;1
1258 767   GOTO/253                  ?0        ?1259                ?766                	;0
1259 768   JMP/42                    ?0        ?1150                ?0                  	;0	>>1150
1260 768   FE_FREE/127               ?0        $559                 ?0                  	;0	<<1149
1261 771   INIT_METHOD_CALL/112      ?0        16?1                 767:'query'         	;1
1262 771   SEND_VAL_EX/116           ?80       769:'DELETE n1 FROM `epg_data` n1, `epg_data` n2 WHERE n1.id < n2.id AND n1.epg_id = n2.epg_id AND n1.channel_id = n2.channel_id AND n1.start = n2.start;' ?1                  	;0
1263 771   DO_FCALL/60               ?558      ?0                   ?0                  	;0
1264 772   INIT_FCALL_BY_NAME/59     ?0        ?0                   770:'shell_exec'    	;1
1265 772   FETCH_CONSTANT/99         #605=     ?0                   772:'TMP_PATH'      	;16
1266 772   CONCAT/8                  #606=     775:'rm -f '         #605                	;0
1267 772   CONCAT/8                  #607=     #606                 776:'*.xml'         	;0
1268 772   SEND_VAL_EX/116           ?80       #607                 ?1                  	;0
1269 772   DO_FCALL_BY_NAME/131      ?562      ?0                   ?0                  	;0
1270 773   GOTO/253                  ?0        ?670                 ?777                	;0
1271 775   EXIT/79                   ?0        ?0                   ?0                  	;0
1272 777   INIT_FCALL_BY_NAME/59     ?0        ?0                   778:'shell_exec'    	;1
1273 777   SEND_VAL_EX/116           ?80       780:'kill -9 `ps -ef | grep \'XUI\\[EPG\\]\' | grep -v grep | awk \'{print $2}\'`;' ?1                  	;0
1274 777   DO_FCALL_BY_NAME/131      ?563      ?0                   ?0                  	;0
1275 778   INIT_FCALL_BY_NAME/59     ?0        ?0                   781:'cli_set_process_title'	;1
1276 778   SEND_VAL_EX/116           ?80       783:'XUI[EPG]'       ?1                  	;0
1277 778   DO_FCALL_BY_NAME/131      ?564      ?0                   ?0                  	;0
1278 779   FETCH_STATIC_PROP_R/173   $611=     784:'rSettings'      785:'XUI'           	;0
1279 779   FETCH_DIM_R/81            $612=     $611                 787:'force_epg_timezone'	;0
1280 779   BOOL_NOT/13               #613=     $612                 ?0                  	;0
1281 779   JMPZ/43                   ?0        #613                 ?1283               	;0	>>1283
1282 780   GOTO/253                  ?0        ?4                   ?788                	;0
1283 782   GOTO/253                  ?0        ?1                   ?789                	;0	<<1281
1284 784   INIT_METHOD_CALL/112      ?0        16?1                 790:'query'         	;1
1285 784   SEND_VAL_EX/116           ?80       792:'SELECT DISTINCT(t1.`epg_id`), t2.* FROM `streams` t1 INNER JOIN `epg` t2 ON t2.id = t1.epg_id WHERE t1.`epg_id` IS NOT NULL;' ?1                  	;0
1286 784   DO_FCALL/60               ?568      ?0                   ?0                  	;0
1287 785   GOTO/253                  ?0        ?1292                ?793                	;0
1288 787   INIT_METHOD_CALL/112      ?0        16?1                 794:'query'         	;2
1289 787   SEND_VAL_EX/116           ?80       796:'SELECT DISTINCT(t1.`epg_id`), t2.* FROM `streams` t1 INNER JOIN `epg` t2 ON t2.id = t1.epg_id WHERE t1.`epg_id` IS NOT NULL AND t2.id = ?;' ?1                  	;0
1290 787   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
1291 787   DO_FCALL/60               ?569      ?0                   ?0                  	;0
1292 789   GOTO/253                  ?0        ?1146                ?797                	;0
1293 791   INIT_METHOD_CALL/112      ?0        16?1                 798:'query'         	;1
1294 791   SEND_VAL_EX/116           ?80       800:'SELECT `stationId`, `callSign` FROM `epg_api`;' ?1                  	;0
1295 791   DO_FCALL/60               ?570      ?0                   ?0                  	;0
1296 792   INIT_METHOD_CALL/112      ?0        16?1                 801:'get_rows'      	;0
1297 792   DO_FCALL/60               $617=     ?0                   ?0                  	;0
1298 792   FE_RESET_R/77             $618=     $617                 ?1315               	;0
1299 792   FE_FETCH_R/78             ?0        $618                 16?2                	;1315	>>1315	<<1314
1300 793   FETCH_DIM_R/81            $619=     16?2                 803:'callSign'      	;0
1301 793   INIT_FCALL_BY_NAME/59     ?0        ?0                   804:'intval'        	;1
1302 793   FETCH_DIM_FUNC_ARG/93     $621=     16?2                 806:'stationId'     	;1
1303 793   SEND_VAR_EX/66            ?80       $621                 ?1                  	;0
1304 793   DO_FCALL_BY_NAME/131      $622=     ?0                   ?0                  	;0
1305 793   ASSIGN_DIM/147            ?574      16?9                 $619                	;0
1306 793   OP_DATA/137               ?0        $622                 ?0                  	;0
1307 794   INIT_FCALL_BY_NAME/59     ?0        ?0                   807:'intval'        	;1
1308 794   FETCH_DIM_FUNC_ARG/93     $623=     16?2                 809:'stationId'     	;1
1309 794   SEND_VAR_EX/66            ?80       $623                 ?1                  	;0
1310 794   DO_FCALL_BY_NAME/131      $624=     ?0                   ?0                  	;0
1311 794   FETCH_DIM_R/81            $626=     16?2                 810:'callSign'      	;0
1312 794   ASSIGN_DIM/147            ?579      16?10                $624                	;0
1313 794   OP_DATA/137               ?0        $626                 ?0                  	;0
1314 795   JMP/42                    ?0        ?1299                ?0                  	;0	>>1299
1315 795   FE_FREE/127               ?0        $618                 ?0                  	;0	<<1298
1316 798   GOTO/253                  ?0        ?129                 ?811                	;0
1317 800   GOTO/253                  ?0        ?85                  ?812                	;0
1318 802   INIT_FCALL_BY_NAME/59     ?0        ?0                   813:'set_time_limit'	;1
1319 802   SEND_VAL_EX/116           ?80       815:0                ?1                  	;0
1320 802   DO_FCALL_BY_NAME/131      ?581      ?0                   ?0                  	;0
1321 803   INIT_FCALL_BY_NAME/59     ?0        ?0                   816:'ini_set'       	;2
1322 803   SEND_VAL_EX/116           ?80       818:'memory_limit'   ?1                  	;0
1323 803   SEND_VAL_EX/116           ?96       819:-1               ?2                  	;0
1324 803   DO_FCALL_BY_NAME/131      ?582      ?0                   ?0                  	;0
1325 804   INIT_FCALL_BY_NAME/59     ?0        ?0                   820:'register_shutdown_function'	;1
1326 804   SEND_VAL_EX/116           ?80       822:'shutdown'       ?1                  	;0
1327 804   DO_FCALL_BY_NAME/131      ?583      ?0                   ?0                  	;0
1328 805   INIT_FCALL_BY_NAME/59     ?0        ?0                   823:'str_replace'   	;3
1329 805   SEND_VAL_EX/116           ?80       825:'\\'             ?1                  	;0
1330 805   SEND_VAL_EX/116           ?96       826:'/'              ?2                  	;0
1331 805   INIT_FCALL_BY_NAME/59     ?0        ?0                   827:'dirname'       	;1
1332 805   FETCH_DIM_FUNC_ARG/93     $630=     16?30                829:0               	;1
1333 805   SEND_VAR_EX/66            ?80       $630                 ?1                  	;0
1334 805   DO_FCALL_BY_NAME/131      $631=     ?0                   ?0                  	;0
1335 805   SEND_VAR_NO_REF_EX/50     ?112      $631                 ?3                  	;0
1336 805   DO_FCALL_BY_NAME/131      $632=     ?0                   ?0                  	;0
1337 805   CONCAT/8                  #633=     $632                 830:'/../www/init.php'	;0
1338 805   INCLUDE_OR_EVAL/73        ?588      #633                 ?0                  	;8
1339 806   FETCH_CONSTANT/99         #635=     ?0                   831:'INCLUDES_PATH' 	;16
1340 806   CONCAT/8                  #636=     #635                 834:'libs/XmlStringStreamer.php'	;0
1341 806   INCLUDE_OR_EVAL/73        ?591      #636                 ?0                  	;8
1342 807   GOTO/253                  ?0        ?648                 ?835                	;0
1343 809   INIT_FCALL_BY_NAME/59     ?0        ?0                   836:'posix_getpwuid'	;1	<<0
1344 809   INIT_FCALL_BY_NAME/59     ?0        ?0                   838:'posix_geteuid' 	;0
1345 809   DO_FCALL_BY_NAME/131      $638=     ?0                   ?0                  	;0
1346 809   SEND_VAR_NO_REF_EX/50     ?80       $638                 ?1                  	;0
1347 809   DO_FCALL_BY_NAME/131      $639=     ?0                   ?0                  	;0
1348 809   FETCH_DIM_R/81            $640=     $639                 840:'name'          	;0
1349 809   IS_NOT_EQUAL/18           #641=     $640                 841:'xui'           	;0
1350 809   BOOL_NOT/13               #642=     #641                 ?0                  	;0
1351 809   JMPZ/43                   ?0        #642                 ?1353               	;0	>>1353
1352 810   GOTO/253                  ?0        ?1354                ?842                	;0
1353 812   EXIT/79                   ?0        843:'Please run as XUI!
' ?0                  	;0	<<1351
1354 814   BEGIN_SILENCE/57          #643=     ?0                   ?0                  	;0
1355 814   FETCH_R/80                $644=     844:'argc'           ?0                  	;268435456
1356 814   END_SILENCE/58            ?0        #643                 ?0                  	;0
1357 814   JMPZ/43                   ?0        $644                 ?1359               	;0	>>1359
1358 815   GOTO/253                  ?0        ?1130                ?845                	;0
1359 817   EXIT/79                   ?0        846:0                ?0                  	;0	<<1357
1360 818   GOTO/253                  ?0        ?1130                ?847                	;0
1361 820   IS_SMALLER/19             #645=     848:0                16?11               	;0
1362 820   BOOL_NOT/13               #646=     #645                 ?0                  	;0
1363 820   JMPZ/43                   ?0        #646                 ?1365               	;0	>>1365
1364 821   GOTO/253                  ?0        ?1375                ?849                	;0
1365 823   INIT_METHOD_CALL/112      ?0        16?1                 850:'query'         	;2	<<1363
1366 823   SEND_VAL_EX/116           ?80       852:'DELETE FROM `epg_data` WHERE `epg_id` = 0 AND `start` < ?' ?1                  	;0
1367 823   INIT_FCALL_BY_NAME/59     ?0        ?0                   853:'strtotime'     	;1
1368 823   ROPE_INIT/54              #648=     ?0                   855:'-'             	;3
1369 823   ROPE_ADD/55               #648=     #648                 16?11               	;1
1370 823   ROPE_END/56               #647=     #648                 856:' days'         	;2
1371 823   SEND_VAL_EX/116           ?80       #647                 ?1                  	;0
1372 823   DO_FCALL_BY_NAME/131      $650=     ?0                   ?0                  	;0
1373 823   SEND_VAR_NO_REF_EX/50     ?96       $650                 ?2                  	;0
1374 823   DO_FCALL/60               ?605      ?0                   ?0                  	;0
1375 826   JMPZ/43                   ?0        16?0                 ?1377               	;0	>>1377
1376 827   GOTO/253                  ?0        ?1288                ?857                	;0
1377 829   GOTO/253                  ?0        ?1284                ?858                	;0	<<1375
1378 831   NOP/0                     ?0        ?0                   ?0                  	;0
1379 840   NOP/0                     ?0        859:1                ?0                  	;4294967295
*/

?>