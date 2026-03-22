<?php


function getallheaders()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0  2   ASSIGN/38                 ?0        16?0                 0:array (
)         	;0
	1  2   FETCH_R/80                $4=       1:'_SERVER'          ?0                  	;0
	2  2   FE_RESET_R/77             $5=       $4                   ?38                 	;0
	3  2   FE_FETCH_R/78             #6=       $5                   16?1                	;38	>>38	<<37
	4  2   ASSIGN/38                 ?4        16?2                 #6                  	;0
	5  2   INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'substr'          	;3
	6  2   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	7  2   SEND_VAL_EX/116           ?96       4:0                  ?2                  	;0
	8  2   SEND_VAL_EX/116           ?112      5:5                  ?3                  	;0
	9  2   DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
	10 2   IS_EQUAL/17               #9=       $8                   6:'HTTP_'           	;0
	11 2   BOOL_NOT/13               #10=      #9                   ?0                  	;0
	12 2   JMPZ/43                   ?0        #10                  ?15                 	;0	>>15
	13 2   NOP/0                     ?0        ?0                   ?0                  	;1
	14 2   GOTO/253                  ?0        ?37                  ?7                  	;0
	15 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'str_replace'     	;3	<<12
	16 2   SEND_VAL_EX/116           ?80       10:' '               ?1                  	;0
	17 2   SEND_VAL_EX/116           ?96       11:'-'               ?2                  	;0
	18 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'ucwords'        	;1
	19 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'strtolower'     	;1
	20 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'str_replace'    	;3
	21 2   SEND_VAL_EX/116           ?80       18:'_'               ?1                  	;0
	22 2   SEND_VAL_EX/116           ?96       19:' '               ?2                  	;0
	23 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'substr'         	;2
	24 2   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	25 2   SEND_VAL_EX/116           ?96       22:5                 ?2                  	;0
	26 2   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	27 2   SEND_VAR_NO_REF_EX/50     ?112      $11                  ?3                  	;0
	28 2   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
	29 2   SEND_VAR_NO_REF_EX/50     ?80       $12                  ?1                  	;0
	30 2   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	31 2   SEND_VAR_NO_REF_EX/50     ?80       $13                  ?1                  	;0
	32 2   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
	33 2   SEND_VAR_NO_REF_EX/50     ?112      $14                  ?3                  	;0
	34 2   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
	35 2   ASSIGN_DIM/147            ?13       16?0                 $15                 	;0
	36 2   OP_DATA/137               ?0        16?1                 ?0                  	;0
	37 2   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
	38 2   FE_FREE/127               ?0        $5                   ?0                  	;0	<<2
	39 2   RETURN/62                 ?0        16?0                 ?0                  	;0
	40 2   NOP/0                     ?0        23:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  2   JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1  2   INCLUDE_OR_EVAL/73        ?0        1:'constants.php'    ?0                  	;16	<<0
2  2   FETCH_CONSTANT/99         #3=       ?0                   2:'INCLUDES_PATH'   	;16
3  2   CONCAT/8                  #4=       #3                   5:'xui.php'         	;0
4  2   INCLUDE_OR_EVAL/73        ?3        #4                   ?0                  	;16
5  2   FETCH_CONSTANT/99         #6=       ?0                   6:'INCLUDES_PATH'   	;16
6  2   CONCAT/8                  #7=       #6                   9:'pdo.php'         	;0
7  2   INCLUDE_OR_EVAL/73        ?6        #7                   ?0                  	;16
8  2   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'function_exists'	;1
9  2   SEND_VAL_EX/116           ?80       12:'getallheaders'   ?1                  	;0
10 2   DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
11 2   BOOL_NOT/13               #10=      $9                   ?0                  	;0
12 2   JMPZ/43                   ?0        #10                  ?14                 	;0	>>14
13 2   DECLARE_FUNCTION/141      ?0        13:'getallheaders'   ?0                  	;0
14 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'basename'       	;1	<<12
15 2   SEND_VAL_EX/116           ?80       17:'www\\init.php' ?1                  	;0
16 2   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
17 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'basename'       	;1
18 2   FETCH_FUNC_ARG/92         $12=      20:'_SERVER'         ?0                  	;1
19 2   FETCH_DIM_FUNC_ARG/93     $13=      $12                  21:'SCRIPT_FILENAME'	;1
20 2   SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
21 2   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
22 2   IS_EQUAL/17               #15=      $11                  $14                 	;0
23 2   BOOL_NOT/13               #16=      #15                  ?0                  	;0
24 2   JMPZ/43                   ?0        #16                  ?26                 	;0	>>26
25 2   GOTO/253                  ?0        ?29                  ?22                 	;0
26 2   GOTO/253                  ?0        ?27                  ?23                 	;0	<<24
27 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'f82199EFf9017bC9'	;0
28 2   DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
29 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'strtolower'     	;1
30 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'basename'       	;2
31 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'get_included_files'	;0
32 2   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
33 2   SEPARATE/156              $18=      $18                  ?0                  	;0
34 2   FETCH_DIM_FUNC_ARG/93     $19=      $18                  32:0                	;1
35 2   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
36 2   SEND_VAL_EX/116           ?96       33:'.php'            ?2                  	;0
37 2   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
38 2   SEND_VAR_NO_REF_EX/50     ?80       $20                  ?1                  	;0
39 2   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
40 2   ASSIGN/38                 ?20       16?0                 $21                 	;0
41 2   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'in_array'       	;2
42 2   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
43 2   SEND_VAL_EX/116           ?96       36:array (
  0 => 'enigma2',
  1 => 'epg',
  2 => 'playlist',
  3 => 'api',
  4 => 'xplugin',
  5 => 'live',
  6 => 'proxy_api',
  7 => 'thumb',
  8 => 'timeshift',
  9 => 'vod',
) ?2                  	;0
44 2   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
45 2   BOOL_NOT/13               #24=      $23                  ?0                  	;0
46 2   JMPNZ_EX/47               #24=      #24                  ?51                 	;0	>>51
47 2   BEGIN_SILENCE/57          #25=      ?0                   ?0                  	;0
48 2   FETCH_R/80                $26=      37:'argc'            ?0                  	;268435456
49 2   END_SILENCE/58            ?0        #25                  ?0                  	;0
50 2   BOOL/52                   #24=      $26                  ?0                  	;0
51 2   JMPZ/43                   ?0        #24                  ?53                 	;0	>>53	<<46
52 2   GOTO/253                  ?0        ?74                  ?38                 	;0
53 2   NEW/68                    $27=      39:'Database'        ?96                 	;1	<<51
54 2   SEND_VAL_EX/116           ?80       41:NULL              ?1                  	;0
55 2   DO_FCALL/60               ?26       ?8                   ?0                  	;0
56 2   ASSIGN/38                 ?27       16?1                 $27                 	;0
57 2   GOTO/253                  ?0        ?58                  ?42                 	;0
58 2   FETCH_STATIC_PROP_W/174   $30=      43:'db'              44:'XUI'            	;0
59 2   ASSIGN_REF/39             ?29       $30                  16?1                	;0
60 2   INIT_STATIC_METHOD_CALL/113 ?0        46:'XUI'             48:'init'           	;1
61 2   SEND_VAL_EX/116           ?80       50:true              ?1                  	;0
62 2   DO_FCALL/60               ?30       ?0                   ?0                  	;0
63 2   FETCH_STATIC_PROP_R/173   $33=      51:'rCached'         52:'XUI'            	;0
64 2   JMPZ/43                   ?0        $33                  ?66                 	;0	>>66
65 2   GOTO/253                  ?0        ?73                  ?54                 	;0
66 2   NEW/68                    $34=      55:'Database'        ?96                 	;1	<<64
67 2   SEND_VAL_EX/116           ?80       57:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
68 2   DO_FCALL/60               ?33       ?8                   ?0                  	;0
69 2   ASSIGN/38                 ?34       16?1                 $34                 	;0
70 2   FETCH_STATIC_PROP_W/174   $37=      58:'db'              59:'XUI'            	;0
71 2   ASSIGN_REF/39             ?36       $37                  16?1                	;0
72 2   GOTO/253                  ?0        ?73                  ?61                 	;0
73 2   GOTO/253                  ?0        ?84                  ?62                 	;0
74 2   NEW/68                    $39=      63:'Database'        ?96                 	;1
75 2   SEND_VAL_EX/116           ?80       65:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
76 2   DO_FCALL/60               ?38       ?8                   ?0                  	;0
77 2   ASSIGN/38                 ?39       16?1                 $39                 	;0
78 2   FETCH_STATIC_PROP_W/174   $42=      66:'db'              67:'XUI'            	;0
79 2   ASSIGN_REF/39             ?41       $42                  16?1                	;0
80 2   GOTO/253                  ?0        ?81                  ?69                 	;0
81 2   INIT_STATIC_METHOD_CALL/113 ?0        70:'XUI'             72:'init'           	;0
82 2   DO_FCALL/60               ?42       ?0                   ?0                  	;0
83 2   GOTO/253                  ?0        ?84                  ?74                 	;0
84 3   NOP/0                     ?0        75:1                 ?0                  	;4294967295
*/

?>