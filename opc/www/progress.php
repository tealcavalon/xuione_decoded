<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  2   JMP/42                    ?0        ?2                   ?0                  	;0	>>2
1  2   GOTO/253                  ?0        ?70                  ?1                  	;0
2  2   INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'ignore_user_abort'	;1	<<0
3  2   SEND_VAL_EX/116           ?80       4:true               ?1                  	;0
4  2   DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
5  2   INCLUDE_OR_EVAL/73        ?1        5:'constants.php'    ?0                  	;8
6  2   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'trim'            	;1
7  2   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'file_get_contents'	;1
8  2   SEND_VAL_EX/116           ?80       10:'php://input'     ?1                  	;0
9  2   DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
10 2   SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
11 2   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
12 2   ASSIGN/38                 ?4        16?0                 $10                 	;0
13 2   FETCH_R/80                $12=      11:'_SERVER'         ?0                  	;0
14 2   FETCH_DIM_R/81            $13=      $12                  12:'REMOTE_ADDR'    	;0
15 2   IS_NOT_EQUAL/18           #14=      $13                  13:'127.0.0.1'      	;0
16 2   JMPNZ_EX/47               #14=      #14                  ?20                 	;0	>>20
17 2   FETCH_IS/89               $15=      14:'_GET'            ?0                  	;0
18 2   ISSET_ISEMPTY_DIM_OBJ/115 #16=      $15                  15:'stream_id'      	;16777216
19 2   BOOL/52                   #14=      #16                  ?0                  	;0
20 2   JMPNZ_EX/47               #14=      #14                  ?23                 	;0	>>23	<<16
21 2   ISSET_ISEMPTY_CV/197      #17=      16?0                 ?0                  	;16777216
22 2   BOOL/52                   #14=      #17                  ?0                  	;0
23 2   BOOL_NOT/13               #18=      #14                  ?0                  	;0	<<20
24 2   JMPZ/43                   ?0        #18                  ?26                 	;0	>>26
25 2   GOTO/253                  ?0        ?29                  ?16                 	;0
26 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'F82199EFF9017bc9'	;0	<<24
27 2   DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
28 2   GOTO/253                  ?0        ?29                  ?19                 	;0
29 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1
30 2   FETCH_FUNC_ARG/92         $20=      22:'_GET'            ?0                  	;1
31 2   FETCH_DIM_FUNC_ARG/93     $21=      $20                  23:'stream_id'      	;1
32 2   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
33 2   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
34 2   ASSIGN/38                 ?16       16?1                 $22                 	;0
35 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'array_filter'   	;1
36 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'array_map'      	;2
37 2   SEND_VAL_EX/116           ?80       28:'trim'            ?1                  	;0
38 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'explode'        	;2
39 2   SEND_VAL_EX/116           ?80       31:'
'               ?1                  	;0
40 2   SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
41 2   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
42 2   SEND_VAR_NO_REF_EX/50     ?96       $24                  ?2                  	;0
43 2   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
44 2   SEND_VAR_NO_REF_EX/50     ?80       $25                  ?1                  	;0
45 2   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
46 2   ASSIGN/38                 ?20       16?2                 $26                 	;0
47 2   ASSIGN/38                 ?21       16?3                 32:array (
)        	;0
48 2   FE_RESET_R/77             $29=      16?2                 ?68                 	;0
49 2   FE_FETCH_R/78             ?0        $29                  16?4                	;68	>>68	<<67
50 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'explode'        	;2
51 2   SEND_VAL_EX/116           ?80       35:'='               ?1                  	;0
52 2   SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
53 2   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
54 2   FETCH_LIST/98             $31=      $30                  36:0                	;0
55 2   ASSIGN/38                 ?25       16?5                 $31                 	;0
56 2   FETCH_LIST/98             $33=      $30                  37:1                	;0
57 2   ASSIGN/38                 ?27       16?6                 $33                 	;0
58 2   FREE/70                   ?0        $30                  ?0                  	;0
59 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'trim'           	;1
60 2   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
61 2   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
62 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'trim'           	;1
63 2   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
64 2   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
65 2   ASSIGN_DIM/147            ?29       16?3                 $35                 	;0
66 2   OP_DATA/137               ?0        $37                  ?0                  	;0
67 2   JMP/42                    ?0        ?49                  ?0                  	;0	>>49
68 2   FE_FREE/127               ?0        $29                  ?0                  	;0	<<48
69 2   GOTO/253                  ?0        ?1                   ?42                 	;0
70 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'file_put_contents'	;2
71 2   FETCH_CONSTANT/99         #38=      ?0                   45:'STREAMS_PATH'   	;16
72 2   NOP/0                     ?0        ?0                   ?0                  	;0
73 2   FAST_CONCAT/53            #39=      16?1                 48:'_.progress'     	;0
74 2   CONCAT/8                  #40=      #38                  #39                 	;0
75 2   SEND_VAL_EX/116           ?80       #40                  ?1                  	;0
76 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'json_encode'    	;1
77 2   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
78 2   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
79 2   SEND_VAR_NO_REF_EX/50     ?96       $41                  ?2                  	;0
80 2   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
81 3   NOP/0                     ?0        51:1                 ?0                  	;4294967295
*/

?>