<?php


function filterRow($Fb9da1713bff19ce, $C17543903e9aa6ae, $c733678227713664)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    3256  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1    3256  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2    3256  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3    3258  BOOL_NOT/13               #5=       16?1                 ?0                  	;0
	4    3258  JMPZ_EX/46                #5=       #5                   ?7                  	;0	>>7
	5    3258  BOOL_NOT/13               #6=       16?2                 ?0                  	;0
	6    3258  BOOL/52                   #5=       #6                   ?0                  	;0
	7    3258  BOOL_NOT/13               #7=       #5                   ?0                  	;0	<<4
	8    3258  JMPZ/43                   ?0        #7                   ?10                 	;0	>>10
	9    3259  JMP/42                    ?0        ?11                  ?0                  	;0	>>11
	10   3261  RETURN/62                 ?0        16?0                 ?0                  	;0	<<8
	11   3263  ASSIGN/38                 ?3        16?3                 1:array (
)         	;0	<<9
	12   3264  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'array_keys'      	;1
	13   3264  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	14   3264  DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
	15   3264  FE_RESET_R/77             $10=      $9                   ?56                 	;0
	16   3264  FE_FETCH_R/78             ?0        $10                  16?4                	;56	>>56	<<55
	17   3265  NOP/0                     ?0        ?0                   ?0                  	;1
	18   3265  GOTO/253                  ?0        ?36                  ?4                  	;0
	19   3270  NOP/0                     ?0        ?0                   ?0                  	;1
	20   3270  GOTO/253                  ?0        ?55                  ?5                  	;0
	21   3273  NOP/0                     ?0        ?0                   ?0                  	;1
	22   3273  GOTO/253                  ?0        ?19                  ?6                  	;0
	23   3275  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'in_array'        	;2
	24   3275  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	25   3275  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	26   3275  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	27   3275  BOOL_NOT/13               #12=      $11                  ?0                  	;0
	28   3275  JMPZ/43                   ?0        #12                  ?31                 	;0	>>31
	29   3276  NOP/0                     ?0        ?0                   ?0                  	;1
	30   3276  GOTO/253                  ?0        ?19                  ?9                  	;0
	31   3278  FETCH_DIM_R/81            $14=      16?0                 16?4                	;0	<<28
	32   3278  ASSIGN_DIM/147            ?8        16?3                 16?4                	;0
	33   3278  OP_DATA/137               ?0        $14                  ?0                  	;0
	34   3279  NOP/0                     ?0        ?0                   ?0                  	;1
	35   3279  GOTO/253                  ?0        ?19                  ?10                 	;0
	36   3281  JMPZ/43                   ?0        16?1                 ?39                 	;0	>>39
	37   3282  NOP/0                     ?0        ?0                   ?0                  	;1
	38   3282  GOTO/253                  ?0        ?23                  ?11                 	;0
	39   3284  BOOL_NOT/13               #15=      16?2                 ?0                  	;0	<<36
	40   3284  JMPZ/43                   ?0        #15                  ?43                 	;0	>>43
	41   3285  NOP/0                     ?0        ?0                   ?0                  	;1
	42   3285  GOTO/253                  ?0        ?21                  ?12                 	;0
	43   3287  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'in_array'       	;2	<<40
	44   3287  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
	45   3287  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
	46   3287  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	47   3287  JMPZ/43                   ?0        $16                  ?50                 	;0	>>50
	48   3288  NOP/0                     ?0        ?0                   ?0                  	;1
	49   3288  GOTO/253                  ?0        ?53                  ?15                 	;0
	50   3290  FETCH_DIM_R/81            $18=      16?0                 16?4                	;0	<<47
	51   3290  ASSIGN_DIM/147            ?12       16?3                 16?4                	;0
	52   3290  OP_DATA/137               ?0        $18                  ?0                  	;0
	53   3292  NOP/0                     ?0        ?0                   ?0                  	;1
	54   3292  GOTO/253                  ?0        ?21                  ?16                 	;0
	55   3293  JMP/42                    ?0        ?16                  ?0                  	;0	>>16
	56   3293  FE_FREE/127               ?0        $10                  ?0                  	;0	<<15
	57   3296  RETURN/62                 ?0        16?3                 ?0                  	;0
	58   3297  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?4362                ?0                  	;0	>>4362
1    6     INCLUDE_OR_EVAL/73        ?0        1:'../www/init.php'  ?0                  	;16
2    8     FETCH_CONSTANT/99         #83=      ?0                   2:'PHP_ERRORS'      	;16
3    8     JMPZ/43                   ?0        #83                  ?5                  	;0	>>5
4    9     GOTO/253                  ?0        ?2639                ?5                  	;0
5    11    FETCH_IS/89               $84=      6:'_SERVER'          ?0                  	;0	<<3
6    11    ISSET_ISEMPTY_DIM_OBJ/115 #85=      $84                  7:'HTTP_X_REQUESTED_WITH'	;16777216
7    11    JMPNZ_EX/47               #85=      #85                  ?15                 	;0	>>15
8    11    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'strtolower'      	;1
9    11    FETCH_FUNC_ARG/92         $86=      10:'_SERVER'         ?0                  	;1
10   11    FETCH_DIM_FUNC_ARG/93     $87=      $86                  11:'HTTP_X_REQUESTED_WITH'	;1
11   11    SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
12   11    DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
13   11    IS_NOT_EQUAL/18           #89=      $88                  12:'xmlhttprequest' 	;0
14   11    BOOL/52                   #85=      #89                  ?0                  	;0
15   11    BOOL_NOT/13               #90=      #85                  ?0                  	;0	<<7
16   11    JMPZ/43                   ?0        #90                  ?18                 	;0	>>18
17   12    GOTO/253                  ?0        ?2639                ?13                 	;0
18   14    GOTO/253                  ?0        ?2638                ?14                 	;0	<<16
19   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'count'          	;1
20   16    FETCH_DIM_FUNC_ARG/93     $91=      16?0                 17:'stream_ids'     	;1
21   16    SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
22   16    DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
23   16    IS_SMALLER/19             #93=      18:0                 $92                 	;0
24   16    JMPZ/43                   ?0        #93                  ?26                 	;0	>>26
25   17    GOTO/253                  ?0        ?32                  ?19                 	;0
26   19    INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'json_encode'    	;1	<<24
27   19    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
28   19    DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
29   19    ECHO/40                   ?0        $94                  ?0                  	;0
30   20    EXIT/79                   ?0        ?0                   ?0                  	;0
31   21    GOTO/253                  ?0        ?6684                ?22                 	;0
32   23    GOTO/253                  ?0        ?6671                ?23                 	;0
33   26    INIT_METHOD_CALL/112      ?0        16?3                 24:'get_row'        	;0
34   26    DO_FCALL/60               $95=      ?0                   ?0                  	;0
35   26    FETCH_DIM_R/81            $96=      $95                  26:'id'             	;0
36   26    ASSIGN/38                 ?15       16?2                 $96                 	;0
37   27    ASSIGN/38                 ?16       16?4                 27:true             	;0
38   28    FETCH_CONSTANT/99         #99=      ?0                   28:'XUI_HOME'       	;16
39   28    CONCAT/8                  #100=     #99                  31:'includes/admin.php'	;0
40   28    INCLUDE_OR_EVAL/73        ?19       #100                 ?0                  	;16
41   29    INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'bA89228dC958ce05'	;1
42   29    SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
43   29    DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
44   29    ASSIGN/38                 ?21       16?5                 $102                	;0
45   30    GOTO/253                  ?0        ?3529                ?34                 	;0
46   33    INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'count'          	;1
47   33    SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
48   33    DO_FCALL_BY_NAME/131      $104=     ?0                   ?0                  	;0
49   33    IS_SMALLER/19             #105=     37:0                 $104                	;0
50   33    BOOL_NOT/13               #106=     #105                 ?0                  	;0
51   33    JMPZ/43                   ?0        #106                 ?53                 	;0	>>53
52   34    GOTO/253                  ?0        ?2215                ?38                 	;0
53   36    INIT_METHOD_CALL/112      ?0        16?3                 39:'query'          	;1	<<51
54   36    INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'implode'        	;2
55   36    SEND_VAL_EX/116           ?80       43:','               ?1                  	;0
56   36    SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
57   36    DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
58   36    CONCAT/8                  #108=     44:'SELECT `users`.`username`, `lines`.`id` FROM `users` LEFT JOIN `lines` ON `lines`.`member_id` = `users`.`id` WHERE `lines`.`id` IN (' $107                	;0
59   36    CONCAT/8                  #109=     #108                 45:');'             	;0
60   36    SEND_VAL_EX/116           ?80       #109                 ?1                  	;0
61   36    DO_FCALL/60               ?28       ?0                   ?0                  	;0
62   37    INIT_METHOD_CALL/112      ?0        16?3                 46:'get_rows'       	;0
63   37    DO_FCALL/60               $111=     ?0                   ?0                  	;0
64   37    FE_RESET_R/77             $112=     $111                 ?72                 	;0
65   37    FE_FETCH_R/78             ?0        $112                 16?7                	;72	>>72	<<71
66   38    FETCH_DIM_R/81            $113=     16?7                 48:'id'             	;0
67   38    FETCH_DIM_R/81            $116=     16?7                 50:'username'       	;0
68   38    FETCH_DIM_W/84            $114=     16?8                 $113                	;0
69   38    ASSIGN_DIM/147            ?33       $114                 49:'owner_name'     	;0
70   38    OP_DATA/137               ?0        $116                 ?0                  	;0
71   39    JMP/42                    ?0        ?65                  ?0                  	;0	>>65
72   39    FE_FREE/127               ?0        $112                 ?0                  	;0	<<64
73   42    GOTO/253                  ?0        ?799                 ?51                 	;0
74   44    INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'strlen'         	;1
75   44    FETCH_STATIC_PROP_FUNC_ARG/177 $117=     54:'rRequest'        55:'XUI'            	;1
76   44    FETCH_DIM_FUNC_ARG/93     $118=     $117                 57:'search'         	;1
77   44    FETCH_DIM_FUNC_ARG/93     $119=     $118                 58:'value'          	;1
78   44    SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
79   44    DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
80   44    IS_SMALLER/19             #121=     59:0                 $120                	;0
81   44    BOOL_NOT/13               #122=     #121                 ?0                  	;0
82   44    JMPZ/43                   ?0        #122                 ?84                 	;0	>>84
83   45    GOTO/253                  ?0        ?101                 ?60                 	;0
84   47    INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'range'          	;2	<<82
85   47    SEND_VAL_EX/116           ?80       63:1                 ?1                  	;0
86   47    SEND_VAL_EX/116           ?96       64:9                 ?2                  	;0
87   47    DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
88   47    FE_RESET_R/77             $124=     $123                 ?98                 	;0
89   47    FE_FETCH_R/78             ?0        $124                 16?9                	;98	>>98	<<97
90   48    FETCH_STATIC_PROP_R/173   $126=     65:'rRequest'        66:'XUI'            	;0
91   48    FETCH_DIM_R/81            $127=     $126                 68:'search'         	;0
92   48    FETCH_DIM_R/81            $128=     $127                 69:'value'          	;0
93   48    CONCAT/8                  #129=     70:'%'               $128                	;0
94   48    CONCAT/8                  #130=     #129                 71:'%'              	;0
95   48    ASSIGN_DIM/147            ?43       16?10                ?1658856248         	;0
96   48    OP_DATA/137               ?0        #130                 ?0                  	;0
97   49    JMP/42                    ?0        ?89                  ?0                  	;0	>>89
98   49    FE_FREE/127               ?0        $124                 ?0                  	;0	<<88
99   52    ASSIGN_DIM/147            ?49       16?11                ?2                  	;0
100  52    OP_DATA/137               ?0        72:'(`users`.`id` LIKE ? OR `users`.`username` LIKE ? OR `users`.`notes` LIKE ? OR `r`.`username` LIKE ? OR FROM_UNIXTIME(`users`.`date_registered`) LIKE ? OR FROM_UNIXTIME(`users`.`last_login`) LIKE ? OR `users`.`email` LIKE ? OR `users`.`ip` LIKE ? OR `users_groups`.`group_name` LIKE ?)' ?0                  	;0
101  54    GOTO/253                  ?0        ?4853                ?73                 	;0
102  56    INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'strlen'         	;1
103  56    FETCH_STATIC_PROP_FUNC_ARG/177 $132=     76:'rRequest'        77:'XUI'            	;1
104  56    FETCH_DIM_FUNC_ARG/93     $133=     $132                 79:'reseller'       	;1
105  56    SEND_VAR_EX/66            ?80       $133                 ?1                  	;0
106  56    DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
107  56    IS_SMALLER/19             #135=     80:0                 $134                	;0
108  56    BOOL_NOT/13               #136=     #135                 ?0                  	;0
109  56    JMPZ/43                   ?0        #136                 ?111                	;0	>>111
110  57    GOTO/253                  ?0        ?117                 ?81                 	;0
111  59    ASSIGN_DIM/147            ?55       16?11                ?4397406            	;0	<<109
112  59    OP_DATA/137               ?0        82:'`users`.`owner_id` = ?' ?0                  	;0
113  60    FETCH_STATIC_PROP_R/173   $139=     83:'rRequest'        84:'XUI'            	;0
114  60    FETCH_DIM_R/81            $140=     $139                 86:'reseller'       	;0
115  60    ASSIGN_DIM/147            ?56       16?10                ?0                  	;0
116  60    OP_DATA/137               ?0        $140                 ?0                  	;0
117  62    INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'count'          	;1
118  62    SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
119  62    DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
120  62    IS_SMALLER/19             #142=     89:0                 $141                	;0
121  62    JMPZ/43                   ?0        #142                 ?123                	;0	>>123
122  63    GOTO/253                  ?0        ?3186                ?90                 	;0
123  65    GOTO/253                  ?0        ?3184                ?91                 	;0	<<121
124  68    INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'json_encode'    	;1
125  68    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
126  68    DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
127  68    ECHO/40                   ?0        $143                 ?0                  	;0
128  69    EXIT/79                   ?0        ?0                   ?0                  	;0
129  70    GOTO/253                  ?0        ?6751                ?94                 	;0
130  74    INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'json_encode'    	;1
131  74    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
132  74    DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
133  74    ECHO/40                   ?0        $144                 ?0                  	;0
134  75    EXIT/79                   ?0        ?0                   ?0                  	;0
135  77    GOTO/253                  ?0        ?3374                ?97                 	;0
136  79    ASSIGN_DIM/147            ?63       16?11                ?5126               	;0
137  79    OP_DATA/137               ?0        98:'`lines`.`member_id` = ?' ?0                  	;0
138  80    FETCH_STATIC_PROP_R/173   $147=     99:'rRequest'        100:'XUI'           	;0
139  80    FETCH_DIM_R/81            $148=     $147                 102:'user'          	;0
140  80    ASSIGN_DIM/147            ?64       16?10                ?0                  	;0
141  80    OP_DATA/137               ?0        $148                 ?0                  	;0
142  82    INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'strlen'        	;1
143  82    FETCH_STATIC_PROP_FUNC_ARG/177 $149=     105:'rRequest'       106:'XUI'           	;1
144  82    FETCH_DIM_FUNC_ARG/93     $150=     $149                 108:'line'          	;1
145  82    SEND_VAR_EX/66            ?80       $150                 ?1                  	;0
146  82    DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
147  82    IS_SMALLER/19             #152=     109:0                $151                	;0
148  82    BOOL_NOT/13               #153=     #152                 ?0                  	;0
149  82    JMPZ/43                   ?0        #153                 ?151                	;0	>>151
150  83    GOTO/253                  ?0        ?3298                ?110                	;0
151  85    ASSIGN_DIM/147            ?72       16?11                ?4397406            	;0	<<149
152  85    OP_DATA/137               ?0        111:'`lines_activity`.`user_id` = ?' ?0                  	;0
153  86    GOTO/253                  ?0        ?3294                ?112                	;0
154  88    INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'f769e3F0c739d1a6'	;1
155  88    SEND_VAL_EX/116           ?80       115:'live'           ?1                  	;0
156  88    DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
157  88    ASSIGN/38                 ?74       16?12                $155                	;0
158  89    ASSIGN/38                 ?75       16?13                116:array (
  0 => '`id`',
  1 => false,
  2 => '`stream_display_name`',
  3 => '`category_id`',
  4 => '`clients`',
  5 => false,
)	;0
159  90    FETCH_STATIC_PROP_IS/176  $158=     117:'rRequest'       118:'XUI'           	;0
160  90    ISSET_ISEMPTY_DIM_OBJ/115 #159=     $158                 120:'order'         	;33554432
161  90    JMPZ_EX/46                #159=     #159                 ?171                	;0	>>171
162  90    INIT_FCALL_BY_NAME/59     ?0        ?0                   121:'strlen'        	;1
163  90    FETCH_STATIC_PROP_FUNC_ARG/177 $160=     123:'rRequest'       124:'XUI'           	;1
164  90    FETCH_DIM_FUNC_ARG/93     $161=     $160                 126:'order'         	;1
165  90    FETCH_DIM_FUNC_ARG/93     $162=     $161                 127:0               	;1
166  90    FETCH_DIM_FUNC_ARG/93     $163=     $162                 128:'column'        	;1
167  90    SEND_VAR_EX/66            ?80       $163                 ?1                  	;0
168  90    DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
169  90    IS_SMALLER/19             #165=     129:0                $164                	;0
170  90    BOOL/52                   #159=     #165                 ?0                  	;0
171  90    JMPZ/43                   ?0        #159                 ?173                	;0	>>173	<<161
172  91    GOTO/253                  ?0        ?1436                ?130                	;0
173  93    ASSIGN/38                 ?84       16?14                131:0               	;0	<<171
174  94    GOTO/253                  ?0        ?1444                ?132                	;0
175  95    GOTO/253                  ?0        ?1436                ?133                	;0
176  97    INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'json_encode'   	;1
177  97    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
178  97    DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
179  97    ECHO/40                   ?0        $167                 ?0                  	;0
180  98    EXIT/79                   ?0        ?0                   ?0                  	;0
181  99    GOTO/253                  ?0        ?3113                ?136                	;0
182  101   INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'implode'       	;2
183  101   SEND_VAL_EX/116           ?80       139:','              ?1                  	;0
184  101   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'array_map'     	;2
185  101   SEND_VAL_EX/116           ?80       142:'intval'         ?1                  	;0
186  101   FETCH_DIM_FUNC_ARG/93     $169=     16?0                 143:'stream_ids'    	;2
187  101   SEND_VAR_EX/66            ?96       $169                 ?2                  	;0
188  101   DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
189  101   SEND_VAR_NO_REF_EX/50     ?96       $170                 ?2                  	;0
190  101   DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
191  101   CONCAT/8                  #172=     144:'`streams`.`id` IN (' $171                	;0
192  101   CONCAT/8                  #173=     #172                 145:')'             	;0
193  101   ASSIGN_DIM/147            ?86       16?11                ?5126               	;0
194  101   OP_DATA/137               ?0        #173                 ?0                  	;0
195  102   GOTO/253                  ?0        ?3113                ?146                	;0
196  104   INIT_METHOD_CALL/112      ?0        16?3                 147:'query'         	;1
197  104   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
198  104   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
199  104   DO_FCALL/60               ?92       ?0                   ?0                  	;0
200  105   INIT_METHOD_CALL/112      ?0        16?3                 149:'num_rows'      	;0
201  105   DO_FCALL/60               $175=     ?0                   ?0                  	;0
202  105   IS_EQUAL/17               #176=     $175                 151:1               	;0
203  105   JMPZ/43                   ?0        #176                 ?205                	;0	>>205
204  106   GOTO/253                  ?0        ?208                 ?152                	;0
205  108   ASSIGN_DIM/147            ?95       16?1                 153:'recordsTotal'  	;0	<<203
206  108   OP_DATA/137               ?0        154:0                ?0                  	;0
207  109   GOTO/253                  ?0        ?4608                ?155                	;0
208  111   GOTO/253                  ?0        ?4603                ?156                	;0
209  113   INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'strlen'        	;1
210  113   FETCH_STATIC_PROP_FUNC_ARG/177 $178=     159:'rRequest'       160:'XUI'           	;1
211  113   FETCH_DIM_FUNC_ARG/93     $179=     $178                 162:'search'        	;1
212  113   FETCH_DIM_FUNC_ARG/93     $180=     $179                 163:'value'         	;1
213  113   SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
214  113   DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
215  113   IS_SMALLER/19             #182=     164:0                $181                	;0
216  113   BOOL_NOT/13               #183=     #182                 ?0                  	;0
217  113   JMPZ/43                   ?0        #183                 ?219                	;0	>>219
218  114   GOTO/253                  ?0        ?236                 ?165                	;0
219  116   INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'range'         	;2	<<217
220  116   SEND_VAL_EX/116           ?80       168:1                ?1                  	;0
221  116   SEND_VAL_EX/116           ?96       169:2                ?2                  	;0
222  116   DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
223  116   FE_RESET_R/77             $185=     $184                 ?233                	;0
224  116   FE_FETCH_R/78             ?0        $185                 16?9                	;233	>>233	<<232
225  117   FETCH_STATIC_PROP_R/173   $187=     170:'rRequest'       171:'XUI'           	;0
226  117   FETCH_DIM_R/81            $188=     $187                 173:'search'        	;0
227  117   FETCH_DIM_R/81            $189=     $188                 174:'value'         	;0
228  117   CONCAT/8                  #190=     175:'%'              $189                	;0
229  117   CONCAT/8                  #191=     #190                 176:'%'             	;0
230  117   ASSIGN_DIM/147            ?104      16?10                ?1658865568         	;0
231  117   OP_DATA/137               ?0        #191                 ?0                  	;0
232  118   JMP/42                    ?0        ?224                 ?0                  	;0	>>224
233  118   FE_FREE/127               ?0        $185                 ?0                  	;0	<<223
234  121   ASSIGN_DIM/147            ?110      16?11                ?2                  	;0
235  121   OP_DATA/137               ?0        177:'(`id` LIKE ? OR `stream_display_name` LIKE ?)' ?0                  	;0
236  123   GOTO/253                  ?0        ?2587                ?178                	;0
237  125   FE_RESET_R/77             $193=     16?16                ?499                	;0
238  125   FE_FETCH_R/78             ?0        $193                 16?7                	;499	>>499	<<498
239  126   NOP/0                     ?0        ?0                   ?0                  	;1
240  126   GOTO/253                  ?0        ?459                 ?179                	;0
241  129   INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'strtolower'    	;1
242  129   FETCH_DIM_FUNC_ARG/93     $194=     16?7                 182:'geoip_country_code'	;1
243  129   SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
244  129   DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
245  129   CONCAT/8                  #196=     183:'<img loading=\'lazy\' src=\'assets/images/countries/' $195                	;0
246  129   CONCAT/8                  #197=     #196                 184:'.png\'></img> &nbsp;'	;0
247  129   ASSIGN/38                 ?116      16?17                #197                	;0
248  131   FETCH_DIM_R/81            $199=     16?7                 185:'user_ip'       	;0
249  131   JMPZ/43                   ?0        $199                 ?252                	;0	>>252
250  132   NOP/0                     ?0        ?0                   ?0                  	;1
251  132   GOTO/253                  ?0        ?402                 ?186                	;0
252  134   ASSIGN/38                 ?118      16?18                187:''              	;0	<<249
253  135   NOP/0                     ?0        ?0                   ?0                  	;1
254  135   GOTO/253                  ?0        ?400                 ?188                	;0
255  137   INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'sprintf'       	;3
256  137   SEND_VAL_EX/116           ?80       191:'%02dh %02dm'    ?1                  	;0
257  137   DIV/4                     #201=     16?19                192:3600            	;0
258  137   SEND_VAL_EX/116           ?96       #201                 ?2                  	;0
259  137   DIV/4                     #202=     16?19                193:60              	;0
260  137   MOD/5                     #203=     #202                 194:60              	;0
261  137   SEND_VAL_EX/116           ?112      #203                 ?3                  	;0
262  137   DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
263  137   ASSIGN/38                 ?123      16?19                $204                	;0
264  139   NOP/0                     ?0        ?0                   ?0                  	;1
265  139   GOTO/253                  ?0        ?315                 ?195                	;0
266  141   INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'sprintf'       	;3
267  141   SEND_VAL_EX/116           ?80       198:'%02dd %02dh'    ?1                  	;0
268  141   DIV/4                     #206=     16?19                199:86400           	;0
269  141   SEND_VAL_EX/116           ?96       #206                 ?2                  	;0
270  141   DIV/4                     #207=     16?19                200:3600            	;0
271  141   MOD/5                     #208=     #207                 201:24              	;0
272  141   SEND_VAL_EX/116           ?112      #208                 ?3                  	;0
273  141   DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
274  141   ASSIGN/38                 ?128      16?19                $209                	;0
275  142   NOP/0                     ?0        ?0                   ?0                  	;1
276  142   GOTO/253                  ?0        ?314                 ?202                	;0
277  144   FETCH_DIM_R/81            $211=     16?7                 203:'device_id'     	;0
278  144   CONCAT/8                  #212=     204:'<a href=\'enigma?id=' $211                	;0
279  144   CONCAT/8                  #213=     #212                 205:'\'>'           	;0
280  144   FETCH_DIM_R/81            $214=     16?7                 206:'username'      	;0
281  144   CONCAT/8                  #215=     #213                 $214                	;0
282  144   CONCAT/8                  #216=     #215                 207:'</a>'          	;0
283  144   ASSIGN/38                 ?135      16?20                #216                	;0
284  146   NOP/0                     ?0        ?0                   ?0                  	;1
285  146   GOTO/253                  ?0        ?373                 ?208                	;0
286  148   FETCH_DIM_R/81            $218=     16?7                 209:'mag_id'        	;0
287  148   CONCAT/8                  #219=     210:'<a href=\'mag?id=' $218                	;0
288  148   CONCAT/8                  #220=     #219                 211:'\'>'           	;0
289  148   FETCH_DIM_R/81            $221=     16?7                 212:'username'      	;0
290  148   CONCAT/8                  #222=     #220                 $221                	;0
291  148   CONCAT/8                  #223=     #222                 213:'</a>'          	;0
292  148   ASSIGN/38                 ?142      16?20                #223                	;0
293  149   NOP/0                     ?0        ?0                   ?0                  	;1
294  149   GOTO/253                  ?0        ?373                 ?214                	;0
295  151   FETCH_DIM_R/81            $225=     16?7                 215:'is_mag'        	;0
296  151   JMPZ/43                   ?0        $225                 ?299                	;0	>>299
297  152   NOP/0                     ?0        ?0                   ?0                  	;1
298  152   GOTO/253                  ?0        ?286                 ?216                	;0
299  154   FETCH_DIM_R/81            $226=     16?7                 217:'is_e2'         	;0	<<296
300  154   JMPZ/43                   ?0        $226                 ?303                	;0	>>303
301  155   NOP/0                     ?0        ?0                   ?0                  	;1
302  155   GOTO/253                  ?0        ?312                 ?218                	;0
303  157   FETCH_DIM_R/81            $227=     16?7                 219:'user_id'       	;0	<<300
304  157   CONCAT/8                  #228=     220:'<a href=\'line?id=' $227                	;0
305  157   CONCAT/8                  #229=     #228                 221:'\'>'           	;0
306  157   FETCH_DIM_R/81            $230=     16?7                 222:'username'      	;0
307  157   CONCAT/8                  #231=     #229                 $230                	;0
308  157   CONCAT/8                  #232=     #231                 223:'</a>'          	;0
309  157   ASSIGN/38                 ?151      16?20                #232                	;0
310  158   NOP/0                     ?0        ?0                   ?0                  	;1
311  158   GOTO/253                  ?0        ?284                 ?224                	;0
312  160   NOP/0                     ?0        ?0                   ?0                  	;1
313  160   GOTO/253                  ?0        ?277                 ?225                	;0
314  162   ASSIGN/38                 ?152      16?21                226:'danger'        	;0
315  164   ROPE_INIT/54              #236=     ?0                   227:'<button type=\'button\' class=\'btn btn-'	;5
316  164   ROPE_ADD/55               #236=     #236                 16?21               	;1
317  164   ROPE_ADD/55               #236=     #236                 228:' btn-xs waves-effect waves-light btn-fixed\'>'	;2
318  164   ROPE_ADD/55               #236=     #236                 16?19               	;3
319  164   ROPE_END/56               #235=     #236                 229:'</button>'     	;4
320  164   ASSIGN/38                 ?157      16?19                #235                	;0
321  165   FETCH_DIM_R/81            $240=     16?7                 230:'uuid'          	;0
322  165   CONCAT/8                  #241=     231:'<button title="Kill Connection" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' $240                	;0
323  165   CONCAT/8                  #242=     #241                 232:'\', \'kill\');"><i class="fas fa-hammer"></i></button>'	;0
324  165   ASSIGN/38                 ?161      16?22                #242                	;0
325  166   FETCH_DIM_R/81            $246=     16?7                 234:'activity_id'   	;0
326  166   INIT_ARRAY/71             #247=     $246                 ?0                  	;40
327  166   ADD_ARRAY_ELEMENT/72      #247=     16?23                ?0                  	;0
328  166   ADD_ARRAY_ELEMENT/72      #247=     16?20                ?0                  	;0
329  166   ADD_ARRAY_ELEMENT/72      #247=     16?24                ?0                  	;0
330  166   ADD_ARRAY_ELEMENT/72      #247=     16?25                ?0                  	;0
331  166   FETCH_DIM_R/81            $248=     16?7                 235:'isp'           	;0
332  166   ADD_ARRAY_ELEMENT/72      #247=     $248                 ?0                  	;0
333  166   ADD_ARRAY_ELEMENT/72      #247=     16?18                ?0                  	;0
334  166   ADD_ARRAY_ELEMENT/72      #247=     16?19                ?0                  	;0
335  166   INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'strtoupper'    	;1
336  166   FETCH_DIM_FUNC_ARG/93     $249=     16?7                 238:'container'     	;1
337  166   SEND_VAR_EX/66            ?80       $249                 ?1                  	;0
338  166   DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
339  166   ADD_ARRAY_ELEMENT/72      #247=     $250                 ?0                  	;0
340  166   ADD_ARRAY_ELEMENT/72      #247=     16?22                ?0                  	;0
341  166   FETCH_DIM_W/84            $244=     16?1                 233:'data'          	;0
342  166   ASSIGN_DIM/147            ?163      $244                 ?2670194944         	;0
343  166   OP_DATA/137               ?0        #247                 ?0                  	;0
344  167   NOP/0                     ?0        ?0                   ?0                  	;1
345  167   GOTO/253                  ?0        ?346                 ?239                	;0
346  170   NOP/0                     ?0        ?0                   ?0                  	;1
347  170   GOTO/253                  ?0        ?498                 ?240                	;0
348  172   FETCH_DIM_R/81            $251=     16?7                 241:'divergence'    	;0
349  172   IS_SMALLER_OR_EQUAL/20    #252=     $251                 242:80              	;0
350  172   JMPZ/43                   ?0        #252                 ?353                	;0	>>353
351  173   NOP/0                     ?0        ?0                   ?0                  	;1
352  173   GOTO/253                  ?0        ?363                 ?243                	;0
353  175   INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'intval'        	;1	<<350
354  175   FETCH_DIM_R/81            $253=     16?7                 246:'divergence'    	;0
355  175   SUB/2                     #254=     247:100              $253                	;0
356  175   SEND_VAL_EX/116           ?80       #254                 ?1                  	;0
357  175   DO_FCALL_BY_NAME/131      $255=     ?0                   ?0                  	;0
358  175   CONCAT/8                  #256=     248:'<i class="text-danger fas fa-square tooltip" title="' $255                	;0
359  175   CONCAT/8                  #257=     #256                 249:'%"></i>'       	;0
360  175   ASSIGN/38                 ?176      16?23                #257                	;0
361  176   NOP/0                     ?0        ?0                   ?0                  	;1
362  176   GOTO/253                  ?0        ?388                 ?250                	;0
363  178   INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'intval'        	;1
364  178   FETCH_DIM_R/81            $259=     16?7                 253:'divergence'    	;0
365  178   SUB/2                     #260=     254:100              $259                	;0
366  178   SEND_VAL_EX/116           ?80       #260                 ?1                  	;0
367  178   DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
368  178   CONCAT/8                  #262=     255:'<i class="text-warning fas fa-square tooltip" title="' $261                	;0
369  178   CONCAT/8                  #263=     #262                 256:'%"></i>'       	;0
370  178   ASSIGN/38                 ?182      16?23                #263                	;0
371  179   NOP/0                     ?0        ?0                   ?0                  	;1
372  179   GOTO/253                  ?0        ?388                 ?257                	;0
373  182   FETCH_DIM_R/81            $265=     16?7                 258:'stream_display_name'	;0
374  182   ASSIGN/38                 ?184      16?24                $265                	;0
375  183   INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'strlen'        	;1
376  183   FETCH_DIM_FUNC_ARG/93     $267=     16?7                 261:'geoip_country_code'	;1
377  183   SEND_VAR_EX/66            ?80       $267                 ?1                  	;0
378  183   DO_FCALL_BY_NAME/131      $268=     ?0                   ?0                  	;0
379  183   IS_SMALLER/19             #269=     262:0                $268                	;0
380  183   JMPZ/43                   ?0        #269                 ?383                	;0	>>383
381  184   NOP/0                     ?0        ?0                   ?0                  	;1
382  184   GOTO/253                  ?0        ?241                 ?263                	;0
383  186   ASSIGN/38                 ?188      16?17                264:''              	;0	<<380
384  187   NOP/0                     ?0        ?0                   ?0                  	;1
385  187   GOTO/253                  ?0        ?248                 ?265                	;0
386  188   NOP/0                     ?0        ?0                   ?0                  	;1
387  188   GOTO/253                  ?0        ?241                 ?266                	;0
388  191   NOP/0                     ?0        ?0                   ?0                  	;1
389  191   GOTO/253                  ?0        ?398                 ?267                	;0
390  193   INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'intval'        	;1
391  193   FETCH_DIM_R/81            $271=     16?7                 270:'divergence'    	;0
392  193   SUB/2                     #272=     271:100              $271                	;0
393  193   SEND_VAL_EX/116           ?80       #272                 ?1                  	;0
394  193   DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
395  193   CONCAT/8                  #274=     272:'<i class="text-success fas fa-square tooltip" title="' $273                	;0
396  193   CONCAT/8                  #275=     #274                 273:'%"></i>'       	;0
397  193   ASSIGN/38                 ?194      16?23                #275                	;0
398  195   NOP/0                     ?0        ?0                   ?0                  	;1
399  195   GOTO/253                  ?0        ?295                 ?274                	;0
400  197   NOP/0                     ?0        ?0                   ?0                  	;1
401  197   GOTO/253                  ?0        ?410                 ?275                	;0
402  199   CONCAT/8                  #277=     16?17                276:'<a onClick="whois(\''	;0
403  199   FETCH_DIM_R/81            $278=     16?7                 277:'user_ip'       	;0
404  199   CONCAT/8                  #279=     #277                 $278                	;0
405  199   CONCAT/8                  #280=     #279                 278:'\');" href=\'javascript: void(0);\'>'	;0
406  199   FETCH_DIM_R/81            $281=     16?7                 279:'user_ip'       	;0
407  199   CONCAT/8                  #282=     #280                 $281                	;0
408  199   CONCAT/8                  #283=     #282                 280:'</a>'          	;0
409  199   ASSIGN/38                 ?202      16?18                #283                	;0
410  201   INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'trim'          	;1
411  201   INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'explode'       	;2
412  201   SEND_VAL_EX/116           ?80       285:'('              ?1                  	;0
413  201   FETCH_DIM_FUNC_ARG/93     $285=     16?7                 286:'user_agent'    	;2
414  201   SEND_VAR_EX/66            ?96       $285                 ?2                  	;0
415  201   DO_FCALL_BY_NAME/131      $286=     ?0                   ?0                  	;0
416  201   SEPARATE/156              $286=     $286                 ?0                  	;0
417  201   FETCH_DIM_FUNC_ARG/93     $287=     $286                 287:0               	;1
418  201   SEND_VAR_EX/66            ?80       $287                 ?1                  	;0
419  201   DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
420  201   ASSIGN/38                 ?207      16?25                $288                	;0
421  202   NOP/0                     ?0        ?0                   ?0                  	;1
422  202   GOTO/253                  ?0        ?428                 ?288                	;0
423  205   NOP/0                     ?0        ?0                   ?0                  	;1
424  205   GOTO/253                  ?0        ?426                 ?289                	;0
425  207   ASSIGN/38                 ?208      16?21                290:'warning'       	;0
426  209   NOP/0                     ?0        ?0                   ?0                  	;1
427  209   GOTO/253                  ?0        ?255                 ?291                	;0
428  211   INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'intval'        	;1
429  211   INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'time'          	;0
430  211   DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
431  211   SEND_VAR_NO_REF_EX/50     ?80       $291                 ?1                  	;0
432  211   DO_FCALL_BY_NAME/131      $292=     ?0                   ?0                  	;0
433  211   INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'intval'        	;1
434  211   FETCH_DIM_FUNC_ARG/93     $293=     16?7                 298:'date_start'    	;1
435  211   SEND_VAR_EX/66            ?80       $293                 ?1                  	;0
436  211   DO_FCALL_BY_NAME/131      $294=     ?0                   ?0                  	;0
437  211   SUB/2                     #295=     $292                 $294                	;0
438  211   ASSIGN/38                 ?214      16?19                #295                	;0
439  212   ASSIGN/38                 ?215      16?21                299:'success'       	;0
440  213   IS_SMALLER_OR_EQUAL/20    #298=     300:86400            16?19               	;0
441  213   JMPZ/43                   ?0        #298                 ?444                	;0	>>444
442  214   NOP/0                     ?0        ?0                   ?0                  	;1
443  214   GOTO/253                  ?0        ?266                 ?301                	;0
444  216   IS_SMALLER_OR_EQUAL/20    #299=     302:3600             16?19               	;0	<<441
445  216   JMPZ/43                   ?0        #299                 ?448                	;0	>>448
446  217   NOP/0                     ?0        ?0                   ?0                  	;1
447  217   GOTO/253                  ?0        ?486                 ?303                	;0
448  219   INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'sprintf'       	;3	<<445
449  219   SEND_VAL_EX/116           ?80       306:'%02dm %02ds'    ?1                  	;0
450  219   DIV/4                     #300=     16?19                307:60              	;0
451  219   MOD/5                     #301=     #300                 308:60              	;0
452  219   SEND_VAL_EX/116           ?96       #301                 ?2                  	;0
453  219   MOD/5                     #302=     16?19                309:60              	;0
454  219   SEND_VAL_EX/116           ?112      #302                 ?3                  	;0
455  219   DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
456  219   ASSIGN/38                 ?222      16?19                $303                	;0
457  220   NOP/0                     ?0        ?0                   ?0                  	;1
458  220   GOTO/253                  ?0        ?484                 ?310                	;0
459  222   BOOL_NOT/13               #305=     16?4                 ?0                  	;0
460  222   JMPZ/43                   ?0        #305                 ?463                	;0	>>463
461  223   NOP/0                     ?0        ?0                   ?0                  	;1
462  223   GOTO/253                  ?0        ?477                 ?311                	;0
463  225   INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'filterRow'     	;3	<<460
464  225   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
465  225   FETCH_STATIC_PROP_FUNC_ARG/177 $308=     315:'rRequest'       316:'XUI'           	;2
466  225   FETCH_DIM_FUNC_ARG/93     $309=     $308                 318:'show_columns'  	;2
467  225   SEND_VAR_EX/66            ?96       $309                 ?2                  	;0
468  225   FETCH_STATIC_PROP_FUNC_ARG/177 $310=     319:'rRequest'       320:'XUI'           	;3
469  225   FETCH_DIM_FUNC_ARG/93     $311=     $310                 322:'hide_columns'  	;3
470  225   SEND_VAR_EX/66            ?112      $311                 ?3                  	;0
471  225   DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
472  225   FETCH_DIM_W/84            $306=     16?1                 312:'data'          	;0
473  225   ASSIGN_DIM/147            ?225      $306                 ?4397406            	;0
474  225   OP_DATA/137               ?0        $312                 ?0                  	;0
475  226   NOP/0                     ?0        ?0                   ?0                  	;1
476  226   GOTO/253                  ?0        ?346                 ?323                	;0
477  228   FETCH_DIM_R/81            $313=     16?7                 324:'divergence'    	;0
478  228   IS_SMALLER_OR_EQUAL/20    #314=     $313                 325:50              	;0
479  228   JMPZ/43                   ?0        #314                 ?482                	;0	>>482
480  229   NOP/0                     ?0        ?0                   ?0                  	;1
481  229   GOTO/253                  ?0        ?390                 ?326                	;0
482  231   NOP/0                     ?0        ?0                   ?0                  	;1	<<479
483  231   GOTO/253                  ?0        ?348                 ?327                	;0
484  233   NOP/0                     ?0        ?0                   ?0                  	;1
485  233   GOTO/253                  ?0        ?264                 ?328                	;0
486  235   IS_SMALLER/19             #315=     329:14400            16?19               	;0
487  235   JMPZ/43                   ?0        #315                 ?490                	;0	>>490
488  236   NOP/0                     ?0        ?0                   ?0                  	;1
489  236   GOTO/253                  ?0        ?425                 ?330                	;0
490  238   IS_SMALLER/19             #316=     331:43200            16?19               	;0	<<487
491  238   BOOL_NOT/13               #317=     #316                 ?0                  	;0
492  238   JMPZ/43                   ?0        #317                 ?495                	;0	>>495
493  239   NOP/0                     ?0        ?0                   ?0                  	;1
494  239   GOTO/253                  ?0        ?423                 ?332                	;0
495  241   ASSIGN/38                 ?236      16?21                333:'danger'        	;0	<<492
496  242   NOP/0                     ?0        ?0                   ?0                  	;1
497  242   GOTO/253                  ?0        ?423                 ?334                	;0
498  243   JMP/42                    ?0        ?238                 ?0                  	;0	>>238
499  243   FE_FREE/127               ?0        $193                 ?0                  	;0	<<237
500  247   INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'json_encode'   	;1
501  247   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
502  247   DO_FCALL_BY_NAME/131      $319=     ?0                   ?0                  	;0
503  247   ECHO/40                   ?0        $319                 ?0                  	;0
504  248   EXIT/79                   ?0        ?0                   ?0                  	;0
505  249   GOTO/253                  ?0        ?2254                ?337                	;0
506  251   GOTO/253                  ?0        ?2254                ?338                	;0
507  253   FETCH_DIM_R/81            $320=     16?0                 339:'reseller_client_connection_logs'	;0
508  253   JMPZ/43                   ?0        $320                 ?510                	;0	>>510
509  254   GOTO/253                  ?0        ?511                 ?340                	;0
510  256   EXIT/79                   ?0        ?0                   ?0                  	;0	<<508
511  258   GOTO/253                  ?0        ?5686                ?341                	;0
512  261   FETCH_DIM_R/81            $321=     16?0                 342:'create_mag'    	;0
513  261   JMPZ/43                   ?0        $321                 ?515                	;0	>>515
514  262   GOTO/253                  ?0        ?516                 ?343                	;0
515  264   EXIT/79                   ?0        ?0                   ?0                  	;0	<<513
516  266   ASSIGN/38                 ?240      16?13                344:array (
  0 => '`lines`.`id`',
  1 => '`lines`.`username`',
  2 => '`mag_devices`.`mac`',
  3 => '`mag_devices`.`stb_type`',
  4 => '`users`.`username`',
  5 => '`lines`.`enabled`',
  6 => '`active_connections`',
  7 => '`lines`.`is_trial`',
  8 => '`lines`.`exp_date`',
  9 => false,
)	;0
517  267   GOTO/253                  ?0        ?2994                ?345                	;0
518  269   INIT_METHOD_CALL/112      ?0        16?3                 346:'get_rows'      	;0
519  269   DO_FCALL/60               $323=     ?0                   ?0                  	;0
520  269   FE_RESET_R/77             $324=     $323                 ?759                	;0
521  269   FE_FETCH_R/78             ?0        $324                 16?7                	;759	>>759	<<758
522  270   NOP/0                     ?0        ?0                   ?0                  	;1
523  270   GOTO/253                  ?0        ?712                 ?348                	;0
524  272   NOP/0                     ?0        ?0                   ?0                  	;1
525  272   GOTO/253                  ?0        ?533                 ?349                	;0
526  274   INIT_FCALL_BY_NAME/59     ?0        ?0                   350:'date'          	;2
527  274   FETCH_DIM_FUNC_ARG/93     $325=     16?27                352:'datetime_format'	;1
528  274   SEND_VAR_EX/66            ?80       $325                 ?1                  	;0
529  274   FETCH_DIM_FUNC_ARG/93     $326=     16?7                 353:'date_start'    	;2
530  274   SEND_VAR_EX/66            ?96       $326                 ?2                  	;0
531  274   DO_FCALL_BY_NAME/131      $327=     ?0                   ?0                  	;0
532  274   ASSIGN/38                 ?246      16?26                $327                	;0
533  276   FETCH_DIM_R/81            $329=     16?7                 354:'date_end'      	;0
534  276   JMPZ/43                   ?0        $329                 ?537                	;0	>>537
535  277   NOP/0                     ?0        ?0                   ?0                  	;1
536  277   GOTO/253                  ?0        ?660                 ?355                	;0
537  279   NOP/0                     ?0        ?0                   ?0                  	;1	<<534
538  279   GOTO/253                  ?0        ?657                 ?356                	;0
539  282   NOP/0                     ?0        ?0                   ?0                  	;1
540  282   GOTO/253                  ?0        ?758                 ?357                	;0
541  284   INIT_FCALL_BY_NAME/59     ?0        ?0                   358:'strtolower'    	;1
542  284   FETCH_DIM_FUNC_ARG/93     $330=     16?7                 360:'geoip_country_code'	;1
543  284   SEND_VAR_EX/66            ?80       $330                 ?1                  	;0
544  284   DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
545  284   CONCAT/8                  #332=     361:'<img loading=\'lazy\' src=\'assets/images/countries/' $331                	;0
546  284   CONCAT/8                  #333=     #332                 362:'.png\'></img> &nbsp;'	;0
547  284   ASSIGN/38                 ?252      16?17                #333                	;0
548  286   FETCH_DIM_R/81            $335=     16?7                 363:'user_ip'       	;0
549  286   JMPZ/43                   ?0        $335                 ?552                	;0	>>552
550  287   NOP/0                     ?0        ?0                   ?0                  	;1
551  287   GOTO/253                  ?0        ?557                 ?364                	;0
552  289   ASSIGN/38                 ?254      16?18                365:''              	;0	<<549
553  290   NOP/0                     ?0        ?0                   ?0                  	;1
554  290   GOTO/253                  ?0        ?565                 ?366                	;0
555  291   NOP/0                     ?0        ?0                   ?0                  	;1
556  291   GOTO/253                  ?0        ?557                 ?367                	;0
557  294   CONCAT/8                  #337=     16?17                368:'<a onClick="whois(\''	;0
558  294   FETCH_DIM_R/81            $338=     16?7                 369:'user_ip'       	;0
559  294   CONCAT/8                  #339=     #337                 $338                	;0
560  294   CONCAT/8                  #340=     #339                 370:'\');" href=\'javascript: void(0);\'>'	;0
561  294   FETCH_DIM_R/81            $341=     16?7                 371:'user_ip'       	;0
562  294   CONCAT/8                  #342=     #340                 $341                	;0
563  294   CONCAT/8                  #343=     #342                 372:'</a>'          	;0
564  294   ASSIGN/38                 ?262      16?18                #343                	;0
565  296   FETCH_DIM_R/81            $345=     16?7                 373:'date_start'    	;0
566  296   JMPZ/43                   ?0        $345                 ?569                	;0	>>569
567  297   NOP/0                     ?0        ?0                   ?0                  	;1
568  297   GOTO/253                  ?0        ?526                 ?374                	;0
569  299   ASSIGN/38                 ?264      16?26                375:''              	;0	<<566
570  300   NOP/0                     ?0        ?0                   ?0                  	;1
571  300   GOTO/253                  ?0        ?524                 ?376                	;0
572  302   FETCH_DIM_R/81            $347=     16?7                 377:'is_e2'         	;0
573  302   JMPZ/43                   ?0        $347                 ?576                	;0	>>576
574  303   NOP/0                     ?0        ?0                   ?0                  	;1
575  303   GOTO/253                  ?0        ?585                 ?378                	;0
576  305   FETCH_DIM_R/81            $348=     16?7                 379:'user_id'       	;0	<<573
577  305   CONCAT/8                  #349=     380:'<a href=\'line?id=' $348                	;0
578  305   CONCAT/8                  #350=     #349                 381:'\'>'           	;0
579  305   FETCH_DIM_R/81            $351=     16?7                 382:'username'      	;0
580  305   CONCAT/8                  #352=     #350                 $351                	;0
581  305   CONCAT/8                  #353=     #352                 383:'</a>'          	;0
582  305   ASSIGN/38                 ?272      16?20                #353                	;0
583  306   NOP/0                     ?0        ?0                   ?0                  	;1
584  306   GOTO/253                  ?0        ?675                 ?384                	;0
585  308   FETCH_DIM_R/81            $355=     16?7                 385:'device_id'     	;0
586  308   CONCAT/8                  #356=     386:'<a href=\'enigma?id=' $355                	;0
587  308   CONCAT/8                  #357=     #356                 387:'\'>'           	;0
588  308   FETCH_DIM_R/81            $358=     16?7                 388:'username'      	;0
589  308   CONCAT/8                  #359=     #357                 $358                	;0
590  308   CONCAT/8                  #360=     #359                 389:'</a>'          	;0
591  308   ASSIGN/38                 ?279      16?20                #360                	;0
592  309   NOP/0                     ?0        ?0                   ?0                  	;1
593  309   GOTO/253                  ?0        ?675                 ?390                	;0
594  311   FETCH_DIM_R/81            $362=     16?7                 391:'stream_display_name'	;0
595  311   ASSIGN/38                 ?281      16?24                $362                	;0
596  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'strlen'        	;1
597  312   FETCH_DIM_FUNC_ARG/93     $364=     16?7                 394:'geoip_country_code'	;1
598  312   SEND_VAR_EX/66            ?80       $364                 ?1                  	;0
599  312   DO_FCALL_BY_NAME/131      $365=     ?0                   ?0                  	;0
600  312   IS_SMALLER/19             #366=     395:0                $365                	;0
601  312   JMPZ/43                   ?0        #366                 ?604                	;0	>>604
602  313   NOP/0                     ?0        ?0                   ?0                  	;1
603  313   GOTO/253                  ?0        ?607                 ?396                	;0
604  315   ASSIGN/38                 ?285      16?17                397:''              	;0	<<601
605  316   NOP/0                     ?0        ?0                   ?0                  	;1
606  316   GOTO/253                  ?0        ?548                 ?398                	;0
607  318   NOP/0                     ?0        ?0                   ?0                  	;1
608  318   GOTO/253                  ?0        ?541                 ?399                	;0
609  321   INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'sprintf'       	;3
610  321   SEND_VAL_EX/116           ?80       402:'%02dh %02dm'    ?1                  	;0
611  321   DIV/4                     #368=     16?19                403:3600            	;0
612  321   SEND_VAL_EX/116           ?96       #368                 ?2                  	;0
613  321   DIV/4                     #369=     16?19                404:60              	;0
614  321   MOD/5                     #370=     #369                 405:60              	;0
615  321   SEND_VAL_EX/116           ?112      #370                 ?3                  	;0
616  321   DO_FCALL_BY_NAME/131      $371=     ?0                   ?0                  	;0
617  321   ASSIGN/38                 ?290      16?19                $371                	;0
618  323   NOP/0                     ?0        ?0                   ?0                  	;1
619  323   GOTO/253                  ?0        ?632                 ?406                	;0
620  325   NOP/0                     ?0        ?0                   ?0                  	;1
621  325   GOTO/253                  ?0        ?622                 ?407                	;0
622  327   INIT_FCALL_BY_NAME/59     ?0        ?0                   408:'sprintf'       	;3
623  327   SEND_VAL_EX/116           ?80       410:'%02dd %02dh'    ?1                  	;0
624  327   DIV/4                     #373=     16?19                411:86400           	;0
625  327   SEND_VAL_EX/116           ?96       #373                 ?2                  	;0
626  327   DIV/4                     #374=     16?19                412:3600            	;0
627  327   MOD/5                     #375=     #374                 413:24              	;0
628  327   SEND_VAL_EX/116           ?112      #375                 ?3                  	;0
629  327   DO_FCALL_BY_NAME/131      $376=     ?0                   ?0                  	;0
630  327   ASSIGN/38                 ?295      16?19                $376                	;0
631  328   ASSIGN/38                 ?296      16?21                414:'danger'        	;0
632  330   ROPE_INIT/54              #380=     ?0                   415:'<button type=\'button\' class=\'btn btn-'	;5
633  330   ROPE_ADD/55               #380=     #380                 16?21               	;1
634  330   ROPE_ADD/55               #380=     #380                 416:' btn-xs waves-effect waves-light btn-fixed\'>'	;2
635  330   ROPE_ADD/55               #380=     #380                 16?19               	;3
636  330   ROPE_END/56               #379=     #380                 417:'</button>'     	;4
637  330   ASSIGN/38                 ?301      16?19                #379                	;0
638  331   INIT_ARRAY/71             #386=     16?20                ?0                  	;36
639  331   ADD_ARRAY_ELEMENT/72      #386=     16?24                ?0                  	;0
640  331   ADD_ARRAY_ELEMENT/72      #386=     16?25                ?0                  	;0
641  331   FETCH_DIM_R/81            $387=     16?7                 419:'isp'           	;0
642  331   ADD_ARRAY_ELEMENT/72      #386=     $387                 ?0                  	;0
643  331   ADD_ARRAY_ELEMENT/72      #386=     16?18                ?0                  	;0
644  331   ADD_ARRAY_ELEMENT/72      #386=     16?26                ?0                  	;0
645  331   ADD_ARRAY_ELEMENT/72      #386=     16?28                ?0                  	;0
646  331   ADD_ARRAY_ELEMENT/72      #386=     16?19                ?0                  	;0
647  331   INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'strtoupper'    	;1
648  331   FETCH_DIM_FUNC_ARG/93     $388=     16?7                 422:'container'     	;1
649  331   SEND_VAR_EX/66            ?80       $388                 ?1                  	;0
650  331   DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
651  331   ADD_ARRAY_ELEMENT/72      #386=     $389                 ?0                  	;0
652  331   FETCH_DIM_W/84            $384=     16?1                 418:'data'          	;0
653  331   ASSIGN_DIM/147            ?303      $384                 ?2670194944         	;0
654  331   OP_DATA/137               ?0        #386                 ?0                  	;0
655  332   NOP/0                     ?0        ?0                   ?0                  	;1
656  332   GOTO/253                  ?0        ?539                 ?423                	;0
657  334   ASSIGN/38                 ?308      16?28                424:''              	;0
658  335   NOP/0                     ?0        ?0                   ?0                  	;1
659  335   GOTO/253                  ?0        ?667                 ?425                	;0
660  337   INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'date'          	;2
661  337   FETCH_DIM_FUNC_ARG/93     $391=     16?27                428:'datetime_format'	;1
662  337   SEND_VAR_EX/66            ?80       $391                 ?1                  	;0
663  337   FETCH_DIM_FUNC_ARG/93     $392=     16?7                 429:'date_end'      	;2
664  337   SEND_VAR_EX/66            ?96       $392                 ?2                  	;0
665  337   DO_FCALL_BY_NAME/131      $393=     ?0                   ?0                  	;0
666  337   ASSIGN/38                 ?312      16?28                $393                	;0
667  339   NOP/0                     ?0        ?0                   ?0                  	;1
668  339   GOTO/253                  ?0        ?686                 ?430                	;0
669  341   ASSIGN/38                 ?313      16?21                431:'danger'        	;0
670  343   NOP/0                     ?0        ?0                   ?0                  	;1
671  343   GOTO/253                  ?0        ?609                 ?432                	;0
672  345   ASSIGN/38                 ?314      16?21                433:'warning'       	;0
673  346   NOP/0                     ?0        ?0                   ?0                  	;1
674  346   GOTO/253                  ?0        ?609                 ?434                	;0
675  349   NOP/0                     ?0        ?0                   ?0                  	;1
676  349   GOTO/253                  ?0        ?684                 ?435                	;0
677  351   FETCH_DIM_R/81            $397=     16?7                 436:'mag_id'        	;0
678  351   CONCAT/8                  #398=     437:'<a href=\'mag?id=' $397                	;0
679  351   CONCAT/8                  #399=     #398                 438:'\'>'           	;0
680  351   FETCH_DIM_R/81            $400=     16?7                 439:'username'      	;0
681  351   CONCAT/8                  #401=     #399                 $400                	;0
682  351   CONCAT/8                  #402=     #401                 440:'</a>'          	;0
683  351   ASSIGN/38                 ?321      16?20                #402                	;0
684  353   NOP/0                     ?0        ?0                   ?0                  	;1
685  353   GOTO/253                  ?0        ?594                 ?441                	;0
686  355   INIT_FCALL_BY_NAME/59     ?0        ?0                   442:'trim'          	;1
687  355   INIT_FCALL_BY_NAME/59     ?0        ?0                   444:'explode'       	;2
688  355   SEND_VAL_EX/116           ?80       446:'('              ?1                  	;0
689  355   FETCH_DIM_FUNC_ARG/93     $404=     16?7                 447:'user_agent'    	;2
690  355   SEND_VAR_EX/66            ?96       $404                 ?2                  	;0
691  355   DO_FCALL_BY_NAME/131      $405=     ?0                   ?0                  	;0
692  355   SEPARATE/156              $405=     $405                 ?0                  	;0
693  355   FETCH_DIM_FUNC_ARG/93     $406=     $405                 448:0               	;1
694  355   SEND_VAR_EX/66            ?80       $406                 ?1                  	;0
695  355   DO_FCALL_BY_NAME/131      $407=     ?0                   ?0                  	;0
696  355   ASSIGN/38                 ?326      16?25                $407                	;0
697  356   FETCH_DIM_R/81            $409=     16?7                 449:'date_end'      	;0
698  356   FETCH_DIM_R/81            $410=     16?7                 450:'date_start'    	;0
699  356   SUB/2                     #411=     $409                 $410                	;0
700  356   ASSIGN/38                 ?330      16?19                #411                	;0
701  357   ASSIGN/38                 ?331      16?21                451:'success'       	;0
702  358   IS_SMALLER_OR_EQUAL/20    #414=     452:86400            16?19               	;0
703  358   JMPZ/43                   ?0        #414                 ?706                	;0	>>706
704  359   NOP/0                     ?0        ?0                   ?0                  	;1
705  359   GOTO/253                  ?0        ?620                 ?453                	;0
706  361   IS_SMALLER_OR_EQUAL/20    #415=     454:3600             16?19               	;0	<<703
707  361   JMPZ/43                   ?0        #415                 ?710                	;0	>>710
708  362   NOP/0                     ?0        ?0                   ?0                  	;1
709  362   GOTO/253                  ?0        ?747                 ?455                	;0
710  364   NOP/0                     ?0        ?0                   ?0                  	;1	<<707
711  364   GOTO/253                  ?0        ?736                 ?456                	;0
712  366   BOOL_NOT/13               #416=     16?4                 ?0                  	;0
713  366   JMPZ/43                   ?0        #416                 ?716                	;0	>>716
714  367   NOP/0                     ?0        ?0                   ?0                  	;1
715  367   GOTO/253                  ?0        ?730                 ?457                	;0
716  369   INIT_FCALL_BY_NAME/59     ?0        ?0                   459:'filterRow'     	;3	<<713
717  369   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
718  369   FETCH_STATIC_PROP_FUNC_ARG/177 $419=     461:'rRequest'       462:'XUI'           	;2
719  369   FETCH_DIM_FUNC_ARG/93     $420=     $419                 464:'show_columns'  	;2
720  369   SEND_VAR_EX/66            ?96       $420                 ?2                  	;0
721  369   FETCH_STATIC_PROP_FUNC_ARG/177 $421=     465:'rRequest'       466:'XUI'           	;3
722  369   FETCH_DIM_FUNC_ARG/93     $422=     $421                 468:'hide_columns'  	;3
723  369   SEND_VAR_EX/66            ?112      $422                 ?3                  	;0
724  369   DO_FCALL_BY_NAME/131      $423=     ?0                   ?0                  	;0
725  369   FETCH_DIM_W/84            $417=     16?1                 458:'data'          	;0
726  369   ASSIGN_DIM/147            ?336      $417                 ?4397406            	;0
727  369   OP_DATA/137               ?0        $423                 ?0                  	;0
728  370   NOP/0                     ?0        ?0                   ?0                  	;1
729  370   GOTO/253                  ?0        ?539                 ?469                	;0
730  372   FETCH_DIM_R/81            $424=     16?7                 470:'is_mag'        	;0
731  372   JMPZ/43                   ?0        $424                 ?734                	;0	>>734
732  373   NOP/0                     ?0        ?0                   ?0                  	;1
733  373   GOTO/253                  ?0        ?677                 ?471                	;0
734  375   NOP/0                     ?0        ?0                   ?0                  	;1	<<731
735  375   GOTO/253                  ?0        ?572                 ?472                	;0
736  377   INIT_FCALL_BY_NAME/59     ?0        ?0                   473:'sprintf'       	;3
737  377   SEND_VAL_EX/116           ?80       475:'%02dm %02ds'    ?1                  	;0
738  377   DIV/4                     #425=     16?19                476:60              	;0
739  377   MOD/5                     #426=     #425                 477:60              	;0
740  377   SEND_VAL_EX/116           ?96       #426                 ?2                  	;0
741  377   MOD/5                     #427=     16?19                478:60              	;0
742  377   SEND_VAL_EX/116           ?112      #427                 ?3                  	;0
743  377   DO_FCALL_BY_NAME/131      $428=     ?0                   ?0                  	;0
744  377   ASSIGN/38                 ?347      16?19                $428                	;0
745  378   NOP/0                     ?0        ?0                   ?0                  	;1
746  378   GOTO/253                  ?0        ?618                 ?479                	;0
747  380   IS_SMALLER/19             #430=     480:14400            16?19               	;0
748  380   JMPZ/43                   ?0        #430                 ?751                	;0	>>751
749  381   NOP/0                     ?0        ?0                   ?0                  	;1
750  381   GOTO/253                  ?0        ?672                 ?481                	;0
751  383   IS_SMALLER/19             #431=     482:43200            16?19               	;0	<<748
752  383   BOOL_NOT/13               #432=     #431                 ?0                  	;0
753  383   JMPZ/43                   ?0        #432                 ?756                	;0	>>756
754  384   NOP/0                     ?0        ?0                   ?0                  	;1
755  384   GOTO/253                  ?0        ?670                 ?483                	;0
756  386   NOP/0                     ?0        ?0                   ?0                  	;1	<<753
757  386   GOTO/253                  ?0        ?669                 ?484                	;0
758  387   JMP/42                    ?0        ?521                 ?0                  	;0	>>521
759  387   FE_FREE/127               ?0        $324                 ?0                  	;0	<<520
760  392   INIT_FCALL_BY_NAME/59     ?0        ?0                   485:'json_encode'   	;1
761  392   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
762  392   DO_FCALL_BY_NAME/131      $433=     ?0                   ?0                  	;0
763  392   ECHO/40                   ?0        $433                 ?0                  	;0
764  393   GOTO/253                  ?0        ?5602                ?487                	;0
765  395   ASSIGN/38                 ?352      16?14                488:0               	;0
766  396   GOTO/253                  ?0        ?775                 ?489                	;0
767  398   INIT_FCALL_BY_NAME/59     ?0        ?0                   490:'intval'        	;1
768  398   FETCH_STATIC_PROP_FUNC_ARG/177 $435=     492:'rRequest'       493:'XUI'           	;1
769  398   FETCH_DIM_FUNC_ARG/93     $436=     $435                 495:'order'         	;1
770  398   FETCH_DIM_FUNC_ARG/93     $437=     $436                 496:0               	;1
771  398   FETCH_DIM_FUNC_ARG/93     $438=     $437                 497:'column'        	;1
772  398   SEND_VAR_EX/66            ?80       $438                 ?1                  	;0
773  398   DO_FCALL_BY_NAME/131      $439=     ?0                   ?0                  	;0
774  398   ASSIGN/38                 ?358      16?14                $439                	;0
775  400   GOTO/253                  ?0        ?3488                ?498                	;0
776  403   FETCH_DIM_R/81            $441=     16?13                16?14               	;0
777  403   BOOL_NOT/13               #442=     $441                 ?0                  	;0
778  403   JMPZ/43                   ?0        #442                 ?780                	;0	>>780
779  404   GOTO/253                  ?0        ?798                 ?499                	;0
780  406   INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'strtolower'    	;1	<<778
781  406   FETCH_STATIC_PROP_FUNC_ARG/177 $443=     502:'rRequest'       503:'XUI'           	;1
782  406   FETCH_DIM_FUNC_ARG/93     $444=     $443                 505:'order'         	;1
783  406   FETCH_DIM_FUNC_ARG/93     $445=     $444                 506:0               	;1
784  406   FETCH_DIM_FUNC_ARG/93     $446=     $445                 507:'dir'           	;1
785  406   SEND_VAR_EX/66            ?80       $446                 ?1                  	;0
786  406   DO_FCALL_BY_NAME/131      $447=     ?0                   ?0                  	;0
787  406   IS_IDENTICAL/15           #448=     $447                 508:'desc'          	;0
788  406   JMPZ/43                   ?0        #448                 ?791                	;0	>>791
789  406   QM_ASSIGN/22              #449=     509:'desc'           ?0                  	;0
790  406   JMP/42                    ?0        ?792                 ?0                  	;0	>>792
791  406   QM_ASSIGN/22              #449=     510:'asc'            ?0                  	;0	<<788
792  406   ASSIGN/38                 ?368      16?29                #449                	;0	<<790
793  407   FETCH_DIM_R/81            $451=     16?13                16?14               	;0
794  407   CONCAT/8                  #452=     511:'ORDER BY '      $451                	;0
795  407   CONCAT/8                  #453=     #452                 512:' '             	;0
796  407   CONCAT/8                  #454=     #453                 16?29               	;0
797  407   ASSIGN/38                 ?373      16?30                #454                	;0
798  409   GOTO/253                  ?0        ?4627                ?513                	;0
799  411   FETCH_STATIC_PROP_R/173   $456=     514:'rSettings'      515:'XUI'           	;0
800  411   FETCH_DIM_R/81            $457=     $456                 517:'redis_handler' 	;0
801  411   JMPZ/43                   ?0        $457                 ?803                	;0	>>803
802  412   GOTO/253                  ?0        ?944                 ?518                	;0
803  414   INIT_METHOD_CALL/112      ?0        16?3                 519:'query'         	;1	<<801
804  414   INIT_FCALL_BY_NAME/59     ?0        ?0                   521:'implode'       	;2
805  414   SEND_VAL_EX/116           ?80       523:','              ?1                  	;0
806  414   SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
807  414   DO_FCALL_BY_NAME/131      $458=     ?0                   ?0                  	;0
808  414   CONCAT/8                  #459=     524:'SELECT `lines_live`.`user_id`, `lines_live`.`stream_id`, `lines_live`.`date_start` AS `last_active`, `streams`.`stream_display_name` FROM `lines_live` LEFT JOIN `streams` ON `streams`.`id` = `lines_live`.`stream_id` INNER JOIN (SELECT `user_id`, MAX(`date_start`) AS `ts` FROM `lines_live` GROUP BY `user_id`) `maxt` ON (`lines_live`.`user_id` = `maxt`.`user_id` AND `lines_live`.`date_start` = `maxt`.`ts`) WHERE `lines_live`.`user_id` IN (' $458                	;0
809  414   CONCAT/8                  #460=     #459                 525:');'            	;0
810  414   SEND_VAL_EX/116           ?80       #460                 ?1                  	;0
811  414   DO_FCALL/60               ?379      ?0                   ?0                  	;0
812  415   INIT_METHOD_CALL/112      ?0        16?3                 526:'get_rows'      	;0
813  415   DO_FCALL/60               $462=     ?0                   ?0                  	;0
814  415   FE_RESET_R/77             $463=     $462                 ?832                	;0
815  415   FE_FETCH_R/78             ?0        $463                 16?7                	;832	>>832	<<831
816  416   FETCH_DIM_R/81            $464=     16?7                 528:'user_id'       	;0
817  416   FETCH_DIM_R/81            $467=     16?7                 530:'stream_display_name'	;0
818  416   FETCH_DIM_W/84            $465=     16?8                 $464                	;0
819  416   ASSIGN_DIM/147            ?384      $465                 529:'stream_display_name'	;0
820  416   OP_DATA/137               ?0        $467                 ?0                  	;0
821  417   FETCH_DIM_R/81            $468=     16?7                 531:'user_id'       	;0
822  417   FETCH_DIM_R/81            $471=     16?7                 533:'stream_id'     	;0
823  417   FETCH_DIM_W/84            $469=     16?8                 $468                	;0
824  417   ASSIGN_DIM/147            ?388      $469                 532:'stream_id'     	;0
825  417   OP_DATA/137               ?0        $471                 ?0                  	;0
826  418   FETCH_DIM_R/81            $472=     16?7                 534:'user_id'       	;0
827  418   FETCH_DIM_R/81            $475=     16?7                 536:'last_active'   	;0
828  418   FETCH_DIM_W/84            $473=     16?8                 $472                	;0
829  418   ASSIGN_DIM/147            ?392      $473                 535:'last_active'   	;0
830  418   OP_DATA/137               ?0        $475                 ?0                  	;0
831  419   JMP/42                    ?0        ?815                 ?0                  	;0	>>815
832  419   FE_FREE/127               ?0        $463                 ?0                  	;0	<<814
833  422   GOTO/253                  ?0        ?2215                ?537                	;0
834  423   GOTO/253                  ?0        ?944                 ?538                	;0
835  425   FETCH_DIM_R/81            $476=     16?13                16?14               	;0
836  425   CONCAT/8                  #477=     539:'ORDER BY '      $476                	;0
837  425   CONCAT/8                  #478=     #477                 540:' '             	;0
838  425   CONCAT/8                  #479=     #478                 16?29               	;0
839  425   ASSIGN/38                 ?398      16?30                #479                	;0
840  427   ROPE_INIT/54              #482=     ?0                   541:'SELECT COUNT(*) AS `count` FROM `lines_activity` LEFT JOIN `lines` ON `lines_activity`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_activity`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_activity`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_activity`.`user_id` '	;3
841  427   ROPE_ADD/55               #482=     #482                 16?31               	;1
842  427   ROPE_END/56               #481=     #482                 542:';'             	;2
843  427   ASSIGN/38                 ?402      16?15                #481                	;0
844  428   INIT_METHOD_CALL/112      ?0        16?3                 543:'query'         	;1
845  428   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
846  428   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
847  428   DO_FCALL/60               ?403      ?0                   ?0                  	;0
848  429   INIT_METHOD_CALL/112      ?0        16?3                 545:'num_rows'      	;0
849  429   DO_FCALL/60               $486=     ?0                   ?0                  	;0
850  429   IS_EQUAL/17               #487=     $486                 547:1               	;0
851  429   JMPZ/43                   ?0        #487                 ?853                	;0	>>853
852  430   GOTO/253                  ?0        ?4645                ?548                	;0
853  432   GOTO/253                  ?0        ?4642                ?549                	;0	<<851
854  434   INIT_METHOD_CALL/112      ?0        16?3                 551:'get_row'       	;0
855  434   DO_FCALL/60               $489=     ?0                   ?0                  	;0
856  434   FETCH_DIM_R/81            $490=     $489                 553:'count'         	;0
857  434   ASSIGN_DIM/147            ?406      16?1                 550:'recordsTotal'  	;0
858  434   OP_DATA/137               ?0        $490                 ?0                  	;0
859  436   FETCH_DIM_R/81            $492=     16?1                 555:'recordsTotal'  	;0
860  436   ASSIGN_DIM/147            ?409      16?1                 554:'recordsFiltered'	;0
861  436   OP_DATA/137               ?0        $492                 ?0                  	;0
862  437   FETCH_DIM_R/81            $493=     16?1                 556:'recordsTotal'  	;0
863  437   IS_SMALLER/19             #494=     557:0                $493                	;0
864  437   BOOL_NOT/13               #495=     #494                 ?0                  	;0
865  437   JMPZ/43                   ?0        #495                 ?867                	;0	>>867
866  438   GOTO/253                  ?0        ?130                 ?558                	;0
867  440   INIT_FCALL_BY_NAME/59     ?0        ?0                   559:'implode'       	;2	<<865
868  440   SEND_VAL_EX/116           ?80       561:','              ?1                  	;0
869  440   FETCH_DIM_FUNC_ARG/93     $496=     16?5                 562:'reports'       	;2
870  440   SEND_VAR_EX/66            ?96       $496                 ?2                  	;0
871  440   DO_FCALL_BY_NAME/131      $497=     ?0                   ?0                  	;0
872  440   CONCAT/8                  #498=     563:'SELECT `id`, `stream_icon`, `stream_display_name`, `category_id`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' $497                	;0
873  440   ROPE_INIT/54              #500=     ?0                   564:')) AS `clients` FROM `streams` '	;9
874  440   ROPE_ADD/55               #500=     #500                 16?31               	;1
875  440   ROPE_ADD/55               #500=     #500                 565:' '             	;2
876  440   ROPE_ADD/55               #500=     #500                 16?30               	;3
877  440   ROPE_ADD/55               #500=     #500                 566:' LIMIT '       	;4
878  440   ROPE_ADD/55               #500=     #500                 16?26               	;5
879  440   ROPE_ADD/55               #500=     #500                 567:', '            	;6
880  440   ROPE_ADD/55               #500=     #500                 16?33               	;7
881  440   ROPE_END/56               #499=     #500                 568:';'             	;8
882  440   CONCAT/8                  #505=     #498                 #499                	;0
883  440   ASSIGN/38                 ?424      16?32                #505                	;0
884  441   GOTO/253                  ?0        ?3065                ?569                	;0
885  443   INIT_FCALL_BY_NAME/59     ?0        ?0                   570:'intval'        	;1
886  443   FETCH_STATIC_PROP_FUNC_ARG/177 $507=     572:'rRequest'       573:'XUI'           	;1
887  443   FETCH_DIM_FUNC_ARG/93     $508=     $507                 575:'stream_id'     	;1
888  443   SEND_VAR_EX/66            ?80       $508                 ?1                  	;0
889  443   DO_FCALL_BY_NAME/131      $509=     ?0                   ?0                  	;0
890  443   IS_SMALLER/19             #510=     576:0                $509                	;0
891  443   JMPZ/43                   ?0        #510                 ?899                	;0	>>899
892  443   INIT_FCALL_BY_NAME/59     ?0        ?0                   577:'intval'        	;1
893  443   FETCH_STATIC_PROP_FUNC_ARG/177 $511=     579:'rRequest'       580:'XUI'           	;1
894  443   FETCH_DIM_FUNC_ARG/93     $512=     $511                 582:'stream_id'     	;1
895  443   SEND_VAR_EX/66            ?80       $512                 ?1                  	;0
896  443   DO_FCALL_BY_NAME/131      $513=     ?0                   ?0                  	;0
897  443   QM_ASSIGN/22              #514=     $513                 ?0                  	;0
898  443   JMP/42                    ?0        ?900                 ?0                  	;0	>>900
899  443   QM_ASSIGN/22              #514=     583:NULL             ?0                  	;0	<<891
900  443   ASSIGN/38                 ?433      16?34                #514                	;0	<<898
901  444   JMPZ_EX/46                #516=     16?2                 ?908                	;0	>>908
902  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   584:'in_array'      	;2
903  444   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
904  444   FETCH_DIM_FUNC_ARG/93     $517=     16?5                 586:'reports'       	;2
905  444   SEND_VAR_EX/66            ?96       $517                 ?2                  	;0
906  444   DO_FCALL_BY_NAME/131      $518=     ?0                   ?0                  	;0
907  444   BOOL/52                   #516=     $518                 ?0                  	;0
908  444   JMPZ/43                   ?0        #516                 ?910                	;0	>>910	<<901
909  445   GOTO/253                  ?0        ?921                 ?587                	;0
910  447   INIT_METHOD_CALL/112      ?0        16?3                 588:'query'         	;1	<<908
911  447   INIT_FCALL_BY_NAME/59     ?0        ?0                   590:'implode'       	;2
912  447   SEND_VAL_EX/116           ?80       592:','              ?1                  	;0
913  447   FETCH_DIM_FUNC_ARG/93     $519=     16?5                 593:'reports'       	;2
914  447   SEND_VAR_EX/66            ?96       $519                 ?2                  	;0
915  447   DO_FCALL_BY_NAME/131      $520=     ?0                   ?0                  	;0
916  447   CONCAT/8                  #521=     594:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $520                	;0
917  447   CONCAT/8                  #522=     #521                 595:');'            	;0
918  447   SEND_VAL_EX/116           ?80       #522                 ?1                  	;0
919  447   DO_FCALL/60               ?441      ?0                   ?0                  	;0
920  448   GOTO/253                  ?0        ?4289                ?596                	;0
921  450   GOTO/253                  ?0        ?4285                ?597                	;0
922  452   INIT_METHOD_CALL/112      ?0        16?3                 598:'query'         	;1
923  452   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
924  452   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
925  452   DO_FCALL/60               ?442      ?0                   ?0                  	;0
926  453   INIT_METHOD_CALL/112      ?0        16?3                 600:'num_rows'      	;0
927  453   DO_FCALL/60               $525=     ?0                   ?0                  	;0
928  453   IS_EQUAL/17               #526=     $525                 602:1               	;0
929  453   JMPZ/43                   ?0        #526                 ?931                	;0	>>931
930  454   GOTO/253                  ?0        ?934                 ?603                	;0
931  456   ASSIGN_DIM/147            ?445      16?1                 604:'recordsTotal'  	;0	<<929
932  456   OP_DATA/137               ?0        605:0                ?0                  	;0
933  457   GOTO/253                  ?0        ?859                 ?606                	;0
934  459   GOTO/253                  ?0        ?854                 ?607                	;0
935  461   ASSIGN_DIM/147            ?446      16?1                 608:'recordsTotal'  	;0
936  461   OP_DATA/137               ?0        609:0                ?0                  	;0
937  462   GOTO/253                  ?0        ?943                 ?610                	;0
938  464   INIT_METHOD_CALL/112      ?0        16?3                 612:'get_row'       	;0
939  464   DO_FCALL/60               $530=     ?0                   ?0                  	;0
940  464   FETCH_DIM_R/81            $531=     $530                 614:'count'         	;0
941  464   ASSIGN_DIM/147            ?447      16?1                 611:'recordsTotal'  	;0
942  464   OP_DATA/137               ?0        $531                 ?0                  	;0
943  466   GOTO/253                  ?0        ?6494                ?615                	;0
944  469   ASSIGN/38                 ?450      16?35                616:array (
)       	;0
945  470   INIT_STATIC_METHOD_CALL/113 ?0        617:'XUI'            619:'a96AB74f1921d4AD'	;2
946  470   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
947  470   SEND_VAL_EX/116           ?96       621:false            ?2                  	;0
948  470   DO_FCALL/60               $533=     ?0                   ?0                  	;0
949  470   ASSIGN/38                 ?452      16?36                $533                	;0
950  471   ASSIGN/38                 ?453      16?37                622:array (
)       	;0
951  472   FE_RESET_R/77             $536=     16?36                ?974                	;0
952  472   FE_FETCH_R/78             #537=     $536                 16?38               	;974	>>974	<<973
953  472   ASSIGN/38                 ?456      16?2                 #537                	;0
954  473   FE_RESET_R/77             $539=     16?38                ?972                	;0
955  473   FE_FETCH_R/78             ?0        $539                 16?39               	;972	>>972	<<971
956  474   INIT_FCALL_BY_NAME/59     ?0        ?0                   623:'in_array'      	;2
957  474   FETCH_DIM_FUNC_ARG/93     $540=     16?39                625:'stream_id'     	;1
958  474   SEND_VAR_EX/66            ?80       $540                 ?1                  	;0
959  474   SEND_VAR_EX/66            ?96       16?37                ?2                  	;0
960  474   DO_FCALL_BY_NAME/131      $541=     ?0                   ?0                  	;0
961  474   JMPZ/43                   ?0        $541                 ?965                	;0	>>965
962  475   NOP/0                     ?0        ?0                   ?0                  	;1
963  475   NOP/0                     ?0        ?0                   ?0                  	;1
964  475   GOTO/253                  ?0        ?971                 ?626                	;0
965  477   INIT_FCALL_BY_NAME/59     ?0        ?0                   627:'intval'        	;1	<<961
966  477   FETCH_DIM_FUNC_ARG/93     $543=     16?39                629:'stream_id'     	;1
967  477   SEND_VAR_EX/66            ?80       $543                 ?1                  	;0
968  477   DO_FCALL_BY_NAME/131      $544=     ?0                   ?0                  	;0
969  477   ASSIGN_DIM/147            ?460      16?37                ?4397406            	;0
970  477   OP_DATA/137               ?0        $544                 ?0                  	;0
971  479   JMP/42                    ?0        ?955                 ?0                  	;0	>>955
972  479   FE_FREE/127               ?0        $539                 ?0                  	;0	<<954
973  482   JMP/42                    ?0        ?952                 ?0                  	;0	>>952
974  482   FE_FREE/127               ?0        $536                 ?0                  	;0	<<951
975  484   GOTO/253                  ?0        ?1227                ?630                	;0
976  487   INIT_FCALL_BY_NAME/59     ?0        ?0                   631:'array_slice'   	;3
977  487   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
978  487   SEND_VAR_EX/66            ?96       16?26                ?2                  	;0
979  487   SEND_VAR_EX/66            ?112      16?33                ?3                  	;0
980  487   DO_FCALL_BY_NAME/131      $545=     ?0                   ?0                  	;0
981  487   ASSIGN/38                 ?464      16?16                $545                	;0
982  488   ASSIGN/38                 $547=     16?41                633:array (
)       	;0
983  488   ASSIGN/38                 $548=     16?37                $547                	;0
984  488   ASSIGN/38                 ?467      16?40                $548                	;0
985  489   FE_RESET_R/77             $550=     16?16                ?1018               	;0
986  489   FE_FETCH_R/78             ?0        $550                 16?7                	;1018	>>1018	<<1017
987  490   FETCH_DIM_R/81            $551=     16?7                 634:'stream_id'     	;0
988  490   BOOL_NOT/13               #552=     $551                 ?0                  	;0
989  490   JMPZ/43                   ?0        #552                 ?992                	;0	>>992
990  491   NOP/0                     ?0        ?0                   ?0                  	;1
991  491   GOTO/253                  ?0        ?998                 ?635                	;0
992  493   INIT_FCALL_BY_NAME/59     ?0        ?0                   636:'intval'        	;1	<<989
993  493   FETCH_DIM_FUNC_ARG/93     $554=     16?7                 638:'stream_id'     	;1
994  493   SEND_VAR_EX/66            ?80       $554                 ?1                  	;0
995  493   DO_FCALL_BY_NAME/131      $555=     ?0                   ?0                  	;0
996  493   ASSIGN_DIM/147            ?471      16?37                ?4397406            	;0
997  493   OP_DATA/137               ?0        $555                 ?0                  	;0
998  495   FETCH_DIM_R/81            $556=     16?7                 639:'user_id'       	;0
999  495   BOOL_NOT/13               #557=     $556                 ?0                  	;0
1000 495   JMPZ/43                   ?0        #557                 ?1003               	;0	>>1003
1001 496   NOP/0                     ?0        ?0                   ?0                  	;1
1002 496   GOTO/253                  ?0        ?1009                ?640                	;0
1003 498   INIT_FCALL_BY_NAME/59     ?0        ?0                   641:'intval'        	;1	<<1000
1004 498   FETCH_DIM_FUNC_ARG/93     $559=     16?7                 643:'user_id'       	;1
1005 498   SEND_VAR_EX/66            ?80       $559                 ?1                  	;0
1006 498   DO_FCALL_BY_NAME/131      $560=     ?0                   ?0                  	;0
1007 498   ASSIGN_DIM/147            ?476      16?41                ?4397406            	;0
1008 498   OP_DATA/137               ?0        $560                 ?0                  	;0
1009 500   FETCH_DIM_R/81            $561=     16?7                 644:'uuid'          	;0
1010 500   BOOL_NOT/13               #562=     $561                 ?0                  	;0
1011 500   JMPZ/43                   ?0        #562                 ?1014               	;0	>>1014
1012 501   NOP/0                     ?0        ?0                   ?0                  	;1
1013 501   GOTO/253                  ?0        ?1017                ?645                	;0
1014 503   FETCH_DIM_R/81            $564=     16?7                 646:'uuid'          	;0	<<1011
1015 503   ASSIGN_DIM/147            ?481      16?40                ?4397406            	;0
1016 503   OP_DATA/137               ?0        $564                 ?0                  	;0
1017 505   JMP/42                    ?0        ?986                 ?0                  	;0	>>986
1018 505   FE_FREE/127               ?0        $550                 ?0                  	;0	<<985
1019 508   GOTO/253                  ?0        ?3978                ?647                	;0
1020 510   INIT_FCALL_BY_NAME/59     ?0        ?0                   648:'strlen'        	;1
1021 510   FETCH_STATIC_PROP_FUNC_ARG/177 $565=     650:'rRequest'       651:'XUI'           	;1
1022 510   FETCH_DIM_FUNC_ARG/93     $566=     $565                 653:'reseller'      	;1
1023 510   SEND_VAR_EX/66            ?80       $566                 ?1                  	;0
1024 510   DO_FCALL_BY_NAME/131      $567=     ?0                   ?0                  	;0
1025 510   IS_SMALLER/19             #568=     654:0                $567                	;0
1026 510   BOOL_NOT/13               #569=     #568                 ?0                  	;0
1027 510   JMPZ/43                   ?0        #569                 ?1029               	;0	>>1029
1028 511   GOTO/253                  ?0        ?1035                ?655                	;0
1029 513   ASSIGN_DIM/147            ?488      16?11                ?4397406            	;0	<<1027
1030 513   OP_DATA/137               ?0        656:'`users_logs`.`owner` = ?' ?0                  	;0
1031 514   FETCH_STATIC_PROP_R/173   $572=     657:'rRequest'       658:'XUI'           	;0
1032 514   FETCH_DIM_R/81            $573=     $572                 660:'reseller'      	;0
1033 514   ASSIGN_DIM/147            ?489      16?10                ?0                  	;0
1034 514   OP_DATA/137               ?0        $573                 ?0                  	;0
1035 516   INIT_FCALL_BY_NAME/59     ?0        ?0                   661:'count'         	;1
1036 516   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
1037 516   DO_FCALL_BY_NAME/131      $574=     ?0                   ?0                  	;0
1038 516   IS_SMALLER/19             #575=     663:0                $574                	;0
1039 516   JMPZ/43                   ?0        #575                 ?1041               	;0	>>1041
1040 517   GOTO/253                  ?0        ?4307                ?664                	;0
1041 519   GOTO/253                  ?0        ?4305                ?665                	;0	<<1039
1042 521   INIT_METHOD_CALL/112      ?0        16?3                 666:'query'         	;1
1043 521   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
1044 521   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
1045 521   DO_FCALL/60               ?494      ?0                   ?0                  	;0
1046 522   INIT_METHOD_CALL/112      ?0        16?3                 668:'num_rows'      	;0
1047 522   DO_FCALL/60               $577=     ?0                   ?0                  	;0
1048 522   IS_SMALLER/19             #578=     670:0                $577                	;0
1049 522   BOOL_NOT/13               #579=     #578                 ?0                  	;0
1050 522   JMPZ/43                   ?0        #579                 ?1052               	;0	>>1052
1051 523   GOTO/253                  ?0        ?1055                ?671                	;0
1052 525   INIT_METHOD_CALL/112      ?0        16?3                 672:'get_rows'      	;0	<<1050
1053 525   DO_FCALL/60               $580=     ?0                   ?0                  	;0
1054 525   ASSIGN/38                 ?499      16?16                $580                	;0
1055 528   GOTO/253                  ?0        ?4821                ?674                	;0
1056 530   FETCH_DIM_R/81            $582=     16?1                 675:'recordsTotal'  	;0
1057 530   IS_SMALLER/19             #583=     676:0                $582                	;0
1058 530   BOOL_NOT/13               #584=     #583                 ?0                  	;0
1059 530   JMPZ/43                   ?0        #584                 ?1061               	;0	>>1061
1060 531   GOTO/253                  ?0        ?1932                ?677                	;0
1061 533   ROPE_INIT/54              #586=     ?0                   678:'SELECT `lines`.`id`, `lines`.`username`, `lines`.`member_id`, `lines`.`is_isplock`, `enigma2_devices`.`mac`, `enigma2_devices`.`public_ip`, `enigma2_devices`.`device_id`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`enabled`, `lines`.`reseller_notes`, `lines`.`max_connections`,  `lines`.`is_trial`, `users`.`username` AS `owner_name`, (SELECT count(*) FROM `lines_live` WHERE `lines`.`id` = `lines_live`.`user_id` AND `hls_end` = 0) AS `active_connections` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` '	;9	<<1059
1062 533   ROPE_ADD/55               #586=     #586                 16?31               	;1
1063 533   ROPE_ADD/55               #586=     #586                 679:' '             	;2
1064 533   ROPE_ADD/55               #586=     #586                 16?30               	;3
1065 533   ROPE_ADD/55               #586=     #586                 680:' LIMIT '       	;4
1066 533   ROPE_ADD/55               #586=     #586                 16?26               	;5
1067 533   ROPE_ADD/55               #586=     #586                 681:', '            	;6
1068 533   ROPE_ADD/55               #586=     #586                 16?33               	;7
1069 533   ROPE_END/56               #585=     #586                 682:';'             	;8
1070 533   ASSIGN/38                 ?509      16?32                #585                	;0
1071 534   INIT_METHOD_CALL/112      ?0        16?3                 683:'query'         	;1
1072 534   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
1073 534   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
1074 534   DO_FCALL/60               ?510      ?0                   ?0                  	;0
1075 535   INIT_METHOD_CALL/112      ?0        16?3                 685:'num_rows'      	;0
1076 535   DO_FCALL/60               $593=     ?0                   ?0                  	;0
1077 535   IS_SMALLER/19             #594=     687:0                $593                	;0
1078 535   BOOL_NOT/13               #595=     #594                 ?0                  	;0
1079 535   JMPZ/43                   ?0        #595                 ?1081               	;0	>>1081
1080 536   GOTO/253                  ?0        ?3977                ?688                	;0
1081 538   INIT_METHOD_CALL/112      ?0        16?3                 689:'get_rows'      	;0	<<1079
1082 538   DO_FCALL/60               $596=     ?0                   ?0                  	;0
1083 538   ASSIGN/38                 ?515      16?16                $596                	;0
1084 539   GOTO/253                  ?0        ?2965                ?691                	;0
1085 541   FETCH_DIM_R/81            $598=     16?1                 692:'recordsTotal'  	;0
1086 541   IS_SMALLER/19             #599=     693:0                $598                	;0
1087 541   BOOL_NOT/13               #600=     #599                 ?0                  	;0
1088 541   JMPZ/43                   ?0        #600                 ?1090               	;0	>>1090
1089 542   GOTO/253                  ?0        ?2122                ?694                	;0
1090 544   INIT_FCALL_BY_NAME/59     ?0        ?0                   695:'implode'       	;2	<<1088
1091 544   SEND_VAL_EX/116           ?80       697:','              ?1                  	;0
1092 544   FETCH_DIM_FUNC_ARG/93     $601=     16?5                 698:'reports'       	;2
1093 544   SEND_VAR_EX/66            ?96       $601                 ?2                  	;0
1094 544   DO_FCALL_BY_NAME/131      $602=     ?0                   ?0                  	;0
1095 544   CONCAT/8                  #603=     699:'SELECT `id`, `stream_icon`, `stream_display_name`, `movie_properties`, `category_id`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' $602                	;0
1096 544   ROPE_INIT/54              #605=     ?0                   700:')) AS `clients` FROM `streams` '	;9
1097 544   ROPE_ADD/55               #605=     #605                 16?31               	;1
1098 544   ROPE_ADD/55               #605=     #605                 701:' '             	;2
1099 544   ROPE_ADD/55               #605=     #605                 16?30               	;3
1100 544   ROPE_ADD/55               #605=     #605                 702:' LIMIT '       	;4
1101 544   ROPE_ADD/55               #605=     #605                 16?26               	;5
1102 544   ROPE_ADD/55               #605=     #605                 703:', '            	;6
1103 544   ROPE_ADD/55               #605=     #605                 16?33               	;7
1104 544   ROPE_END/56               #604=     #605                 704:';'             	;8
1105 544   CONCAT/8                  #610=     #603                 #604                	;0
1106 544   ASSIGN/38                 ?529      16?32                #610                	;0
1107 545   INIT_METHOD_CALL/112      ?0        16?3                 705:'query'         	;1
1108 545   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
1109 545   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
1110 545   DO_FCALL/60               ?530      ?0                   ?0                  	;0
1111 546   INIT_METHOD_CALL/112      ?0        16?3                 707:'num_rows'      	;0
1112 546   DO_FCALL/60               $613=     ?0                   ?0                  	;0
1113 546   IS_SMALLER/19             #614=     709:0                $613                	;0
1114 546   BOOL_NOT/13               #615=     #614                 ?0                  	;0
1115 546   JMPZ/43                   ?0        #615                 ?1117               	;0	>>1117
1116 547   GOTO/253                  ?0        ?2122                ?710                	;0
1117 549   INIT_METHOD_CALL/112      ?0        16?3                 711:'get_rows'      	;0	<<1115
1118 549   DO_FCALL/60               $616=     ?0                   ?0                  	;0
1119 549   ASSIGN/38                 ?535      16?16                $616                	;0
1120 550   GOTO/253                  ?0        ?1336                ?713                	;0
1121 552   FETCH_DIM_R/81            $619=     16?1                 715:'recordsTotal'  	;0
1122 552   ASSIGN_DIM/147            ?536      16?1                 714:'recordsFiltered'	;0
1123 552   OP_DATA/137               ?0        $619                 ?0                  	;0
1124 553   FETCH_DIM_R/81            $620=     16?1                 716:'recordsTotal'  	;0
1125 553   IS_SMALLER/19             #621=     717:0                $620                	;0
1126 553   BOOL_NOT/13               #622=     #621                 ?0                  	;0
1127 553   JMPZ/43                   ?0        #622                 ?1129               	;0	>>1129
1128 554   GOTO/253                  ?0        ?760                 ?718                	;0
1129 556   ROPE_INIT/54              #624=     ?0                   719:'SELECT `mag_devices`.`mag_id`, `enigma2_devices`.`device_id`, `lines`.`is_e2`, `lines`.`is_mag`, `lines_activity`.`activity_id`, `lines_activity`.`container`, `lines_activity`.`isp`, `lines_activity`.`user_id`, `lines_activity`.`stream_id`, `streams`.`series_no`, `lines_activity`.`server_id`, `lines_activity`.`user_agent`, `lines_activity`.`user_ip`, `lines_activity`.`container`, `lines_activity`.`date_start`, `lines_activity`.`date_end`, `lines_activity`.`geoip_country_code`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username`, `streams`.`stream_display_name`, `streams`.`type`, `lines`.`is_restreamer` FROM `lines_activity` LEFT JOIN `lines` ON `lines_activity`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_activity`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_activity`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_activity`.`user_id` '	;9	<<1127
1130 556   ROPE_ADD/55               #624=     #624                 16?31               	;1
1131 556   ROPE_ADD/55               #624=     #624                 720:' '             	;2
1132 556   ROPE_ADD/55               #624=     #624                 16?30               	;3
1133 556   ROPE_ADD/55               #624=     #624                 721:' LIMIT '       	;4
1134 556   ROPE_ADD/55               #624=     #624                 16?26               	;5
1135 556   ROPE_ADD/55               #624=     #624                 722:', '            	;6
1136 556   ROPE_ADD/55               #624=     #624                 16?33               	;7
1137 556   ROPE_END/56               #623=     #624                 723:';'             	;8
1138 556   ASSIGN/38                 ?547      16?32                #623                	;0
1139 557   INIT_METHOD_CALL/112      ?0        16?3                 724:'query'         	;1
1140 557   SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
1141 557   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
1142 557   DO_FCALL/60               ?548      ?0                   ?0                  	;0
1143 558   INIT_METHOD_CALL/112      ?0        16?3                 726:'num_rows'      	;0
1144 558   DO_FCALL/60               $631=     ?0                   ?0                  	;0
1145 558   IS_SMALLER/19             #632=     728:0                $631                	;0
1146 558   BOOL_NOT/13               #633=     #632                 ?0                  	;0
1147 558   JMPZ/43                   ?0        #633                 ?1149               	;0	>>1149
1148 559   GOTO/253                  ?0        ?760                 ?729                	;0
1149 561   GOTO/253                  ?0        ?518                 ?730                	;0	<<1147
1150 563   INIT_FCALL_BY_NAME/59     ?0        ?0                   731:'strlen'        	;1
1151 563   FETCH_STATIC_PROP_FUNC_ARG/177 $634=     733:'rRequest'       734:'XUI'           	;1
1152 563   FETCH_DIM_FUNC_ARG/93     $635=     $634                 736:'reseller'      	;1
1153 563   SEND_VAR_EX/66            ?80       $635                 ?1                  	;0
1154 563   DO_FCALL_BY_NAME/131      $636=     ?0                   ?0                  	;0
1155 563   IS_SMALLER/19             #637=     737:0                $636                	;0
1156 563   BOOL_NOT/13               #638=     #637                 ?0                  	;0
1157 563   JMPZ/43                   ?0        #638                 ?1159               	;0	>>1159
1158 564   GOTO/253                  ?0        ?1165                ?738                	;0
1159 566   ASSIGN_DIM/147            ?557      16?11                ?4397406            	;0	<<1157
1160 566   OP_DATA/137               ?0        739:'`lines`.`member_id` = ?' ?0                  	;0
1161 567   FETCH_STATIC_PROP_R/173   $641=     740:'rRequest'       741:'XUI'           	;0
1162 567   FETCH_DIM_R/81            $642=     $641                 743:'reseller'      	;0
1163 567   ASSIGN_DIM/147            ?558      16?10                ?0                  	;0
1164 567   OP_DATA/137               ?0        $642                 ?0                  	;0
1165 569   INIT_FCALL_BY_NAME/59     ?0        ?0                   744:'count'         	;1
1166 569   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
1167 569   DO_FCALL_BY_NAME/131      $643=     ?0                   ?0                  	;0
1168 569   IS_SMALLER/19             #644=     746:0                $643                	;0
1169 569   JMPZ/43                   ?0        #644                 ?1171               	;0	>>1171
1170 570   GOTO/253                  ?0        ?6646                ?747                	;0
1171 572   GOTO/253                  ?0        ?6644                ?748                	;0	<<1169
1172 574   FETCH_DIM_R/81            $645=     16?5                 749:'id'            	;0
1173 574   BOOL_NOT/13               #646=     $645                 ?0                  	;0
1174 574   JMPZ/43                   ?0        #646                 ?1176               	;0	>>1176
1175 575   GOTO/253                  ?0        ?3609                ?750                	;0
1176 577   ISSET_ISEMPTY_DIM_OBJ/115 #647=     16?5                 751:'reports'       	;33554432	<<1174
1177 577   JMPZ/43                   ?0        #647                 ?1179               	;0	>>1179
1178 578   GOTO/253                  ?0        ?1184                ?752                	;0
1179 580   INIT_FCALL_BY_NAME/59     ?0        ?0                   753:'json_encode'   	;1	<<1177
1180 580   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1181 580   DO_FCALL_BY_NAME/131      $648=     ?0                   ?0                  	;0
1182 580   ECHO/40                   ?0        $648                 ?0                  	;0
1183 581   EXIT/79                   ?0        ?0                   ?0                  	;0
1184 583   GOTO/253                  ?0        ?3608                ?755                	;0
1185 586   INIT_FCALL_BY_NAME/59     ?0        ?0                   756:'strtotime'     	;1
1186 586   CONCAT/8                  #649=     16?42                758:' 23:59:59'     	;0
1187 586   SEND_VAL_EX/116           ?80       #649                 ?1                  	;0
1188 586   DO_FCALL_BY_NAME/131      $650=     ?0                   ?0                  	;0
1189 586   ASSIGN/38                 $651=     16?42                $650                	;0
1190 586   JMPZ/43                   ?0        $651                 ?1192               	;0	>>1192
1191 587   GOTO/253                  ?0        ?1193                ?759                	;0
1192 589   ASSIGN/38                 ?570      16?42                760:NULL            	;0	<<1190
1193 591   JMPZ_EX/46                #653=     16?43                ?1195               	;0	>>1195
1194 591   BOOL/52                   #653=     16?42                ?0                  	;0
1195 591   BOOL_NOT/13               #654=     #653                 ?0                  	;0	<<1193
1196 591   JMPZ/43                   ?0        #654                 ?1198               	;0	>>1198
1197 592   GOTO/253                  ?0        ?5679                ?761                	;0
1198 594   GOTO/253                  ?0        ?5673                ?762                	;0	<<1196
1199 597   ASSIGN_DIM/147            ?573      16?11                ?4397406            	;0
1200 597   OP_DATA/137               ?0        763:'`type` = 3'     ?0                  	;0
1201 599   INIT_FCALL_BY_NAME/59     ?0        ?0                   764:'strlen'        	;1
1202 599   FETCH_STATIC_PROP_FUNC_ARG/177 $656=     766:'rRequest'       767:'XUI'           	;1
1203 599   FETCH_DIM_FUNC_ARG/93     $657=     $656                 769:'search'        	;1
1204 599   FETCH_DIM_FUNC_ARG/93     $658=     $657                 770:'value'         	;1
1205 599   SEND_VAR_EX/66            ?80       $658                 ?1                  	;0
1206 599   DO_FCALL_BY_NAME/131      $659=     ?0                   ?0                  	;0
1207 599   IS_SMALLER/19             #660=     771:0                $659                	;0
1208 599   BOOL_NOT/13               #661=     #660                 ?0                  	;0
1209 599   JMPZ/43                   ?0        #661                 ?1211               	;0	>>1211
1210 600   GOTO/253                  ?0        ?1452                ?772                	;0
1211 602   INIT_FCALL_BY_NAME/59     ?0        ?0                   773:'range'         	;2	<<1209
1212 602   SEND_VAL_EX/116           ?80       775:1                ?1                  	;0
1213 602   SEND_VAL_EX/116           ?96       776:2                ?2                  	;0
1214 602   DO_FCALL_BY_NAME/131      $662=     ?0                   ?0                  	;0
1215 602   FE_RESET_R/77             $663=     $662                 ?1225               	;0
1216 602   FE_FETCH_R/78             ?0        $663                 16?9                	;1225	>>1225	<<1224
1217 603   FETCH_STATIC_PROP_R/173   $665=     777:'rRequest'       778:'XUI'           	;0
1218 603   FETCH_DIM_R/81            $666=     $665                 780:'search'        	;0
1219 603   FETCH_DIM_R/81            $667=     $666                 781:'value'         	;0
1220 603   CONCAT/8                  #668=     782:'%'              $667                	;0
1221 603   CONCAT/8                  #669=     #668                 783:'%'             	;0
1222 603   ASSIGN_DIM/147            ?582      16?10                ?1659899728         	;0
1223 603   OP_DATA/137               ?0        #669                 ?0                  	;0
1224 604   JMP/42                    ?0        ?1216                ?0                  	;0	>>1216
1225 604   FE_FREE/127               ?0        $663                 ?0                  	;0	<<1215
1226 606   GOTO/253                  ?0        ?1450                ?784                	;0
1227 609   ASSIGN/38                 ?588      16?44                785:array (
)       	;0
1228 610   INIT_FCALL_BY_NAME/59     ?0        ?0                   786:'count'         	;1
1229 610   SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
1230 610   DO_FCALL_BY_NAME/131      $671=     ?0                   ?0                  	;0
1231 610   IS_SMALLER/19             #672=     788:0                $671                	;0
1232 610   BOOL_NOT/13               #673=     #672                 ?0                  	;0
1233 610   JMPZ/43                   ?0        #673                 ?1235               	;0	>>1235
1234 611   GOTO/253                  ?0        ?2655                ?789                	;0
1235 613   INIT_METHOD_CALL/112      ?0        16?3                 790:'query'         	;1	<<1233
1236 613   INIT_FCALL_BY_NAME/59     ?0        ?0                   792:'implode'       	;2
1237 613   SEND_VAL_EX/116           ?80       794:','              ?1                  	;0
1238 613   SEND_VAR_EX/66            ?96       16?37                ?2                  	;0
1239 613   DO_FCALL_BY_NAME/131      $674=     ?0                   ?0                  	;0
1240 613   CONCAT/8                  #675=     795:'SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' $674                	;0
1241 613   CONCAT/8                  #676=     #675                 796:');'            	;0
1242 613   SEND_VAL_EX/116           ?80       #676                 ?1                  	;0
1243 613   DO_FCALL/60               ?595      ?0                   ?0                  	;0
1244 614   INIT_METHOD_CALL/112      ?0        16?3                 797:'get_rows'      	;0
1245 614   DO_FCALL/60               $678=     ?0                   ?0                  	;0
1246 614   FE_RESET_R/77             $679=     $678                 ?1253               	;0
1247 614   FE_FETCH_R/78             ?0        $679                 16?7                	;1253	>>1253	<<1252
1248 615   FETCH_DIM_R/81            $680=     16?7                 799:'id'            	;0
1249 615   FETCH_DIM_R/81            $682=     16?7                 800:'stream_display_name'	;0
1250 615   ASSIGN_DIM/147            ?599      16?44                $680                	;0
1251 615   OP_DATA/137               ?0        $682                 ?0                  	;0
1252 616   JMP/42                    ?0        ?1247                ?0                  	;0	>>1247
1253 616   FE_FREE/127               ?0        $679                 ?0                  	;0	<<1246
1254 618   GOTO/253                  ?0        ?2655                ?801                	;0
1255 620   INIT_FCALL_BY_NAME/59     ?0        ?0                   802:'strlen'        	;1
1256 620   FETCH_STATIC_PROP_FUNC_ARG/177 $683=     804:'rRequest'       805:'XUI'           	;1
1257 620   FETCH_DIM_FUNC_ARG/93     $684=     $683                 807:'search'        	;1
1258 620   FETCH_DIM_FUNC_ARG/93     $685=     $684                 808:'value'         	;1
1259 620   SEND_VAR_EX/66            ?80       $685                 ?1                  	;0
1260 620   DO_FCALL_BY_NAME/131      $686=     ?0                   ?0                  	;0
1261 620   IS_SMALLER/19             #687=     809:0                $686                	;0
1262 620   BOOL_NOT/13               #688=     #687                 ?0                  	;0
1263 620   JMPZ/43                   ?0        #688                 ?1265               	;0	>>1265
1264 621   GOTO/253                  ?0        ?1282                ?810                	;0
1265 623   INIT_FCALL_BY_NAME/59     ?0        ?0                   811:'range'         	;2	<<1263
1266 623   SEND_VAL_EX/116           ?80       813:1                ?1                  	;0
1267 623   SEND_VAL_EX/116           ?96       814:10               ?2                  	;0
1268 623   DO_FCALL_BY_NAME/131      $689=     ?0                   ?0                  	;0
1269 623   FE_RESET_R/77             $690=     $689                 ?1279               	;0
1270 623   FE_FETCH_R/78             ?0        $690                 16?9                	;1279	>>1279	<<1278
1271 624   FETCH_STATIC_PROP_R/173   $692=     815:'rRequest'       816:'XUI'           	;0
1272 624   FETCH_DIM_R/81            $693=     $692                 818:'search'        	;0
1273 624   FETCH_DIM_R/81            $694=     $693                 819:'value'         	;0
1274 624   CONCAT/8                  #695=     820:'%'              $694                	;0
1275 624   CONCAT/8                  #696=     #695                 821:'%'             	;0
1276 624   ASSIGN_DIM/147            ?609      16?10                ?1659906640         	;0
1277 624   OP_DATA/137               ?0        #696                 ?0                  	;0
1278 625   JMP/42                    ?0        ?1270                ?0                  	;0	>>1270
1279 625   FE_FREE/127               ?0        $690                 ?0                  	;0	<<1269
1280 628   ASSIGN_DIM/147            ?615      16?11                ?2                  	;0
1281 628   OP_DATA/137               ?0        822:'(`lines_activity`.`user_agent` LIKE ? OR `lines_activity`.`user_ip` LIKE ? OR `lines_activity`.`container` LIKE ? OR FROM_UNIXTIME(`lines_activity`.`date_start`) LIKE ? OR FROM_UNIXTIME(`lines_activity`.`date_end`) LIKE ? OR `lines_activity`.`geoip_country_code` LIKE ? OR `lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `streams`.`stream_display_name` LIKE ?)' ?0                  	;0
1282 630   GOTO/253                  ?0        ?1296                ?823                	;0
1283 632   INIT_METHOD_CALL/112      ?0        16?3                 824:'query'         	;1
1284 632   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
1285 632   SEND_UNPACK/165           ?80       16?10                ?1                  	;0
1286 632   DO_FCALL/60               ?616      ?0                   ?0                  	;0
1287 633   INIT_METHOD_CALL/112      ?0        16?3                 826:'num_rows'      	;0
1288 633   DO_FCALL/60               $699=     ?0                   ?0                  	;0
1289 633   IS_EQUAL/17               #700=     $699                 828:1               	;0
1290 633   JMPZ/43                   ?0        #700                 ?1292               	;0	>>1292
1291 634   GOTO/253                  ?0        ?1295                ?829                	;0
1292 636   ASSIGN_DIM/147            ?619      16?1                 830:'recordsTotal'  	;0	<<1290
1293 636   OP_DATA/137               ?0        831:0                ?0                  	;0
1294 637   GOTO/253                  ?0        ?6475                ?832                	;0
1295 639   GOTO/253                  ?0        ?6470                ?833                	;0
1296 641   INIT_FCALL_BY_NAME/59     ?0        ?0                   834:'strlen'        	;1
1297 641   FETCH_STATIC_PROP_FUNC_ARG/177 $702=     836:'rRequest'       837:'XUI'           	;1
1298 641   FETCH_DIM_FUNC_ARG/93     $703=     $702                 839:'range'         	;1
1299 641   SEND_VAR_EX/66            ?80       $703                 ?1                  	;0
1300 641   DO_FCALL_BY_NAME/131      $704=     ?0                   ?0                  	;0
1301 641   IS_SMALLER/19             #705=     840:0                $704                	;0
1302 641   BOOL_NOT/13               #706=     #705                 ?0                  	;0
1303 641   JMPZ/43                   ?0        #706                 ?1305               	;0	>>1305
1304 642   GOTO/253                  ?0        ?5601                ?841                	;0
1305 644   INIT_FCALL_BY_NAME/59     ?0        ?0                   842:'substr'        	;3	<<1303
1306 644   FETCH_STATIC_PROP_FUNC_ARG/177 $707=     844:'rRequest'       845:'XUI'           	;1
1307 644   FETCH_DIM_FUNC_ARG/93     $708=     $707                 847:'range'         	;1
1308 644   SEND_VAR_EX/66            ?80       $708                 ?1                  	;0
1309 644   SEND_VAL_EX/116           ?96       848:0                ?2                  	;0
1310 644   SEND_VAL_EX/116           ?112      849:10               ?3                  	;0
1311 644   DO_FCALL_BY_NAME/131      $709=     ?0                   ?0                  	;0
1312 644   ASSIGN/38                 ?628      16?43                $709                	;0
1313 645   INIT_FCALL_BY_NAME/59     ?0        ?0                   850:'substr'        	;3
1314 645   FETCH_STATIC_PROP_FUNC_ARG/177 $711=     852:'rRequest'       853:'XUI'           	;1
1315 645   FETCH_DIM_FUNC_ARG/93     $712=     $711                 855:'range'         	;1
1316 645   SEND_VAR_EX/66            ?80       $712                 ?1                  	;0
1317 645   INIT_FCALL_BY_NAME/59     ?0        ?0                   856:'strlen'        	;1
1318 645   FETCH_STATIC_PROP_FUNC_ARG/177 $713=     858:'rRequest'       859:'XUI'           	;1
1319 645   FETCH_DIM_FUNC_ARG/93     $714=     $713                 861:'range'         	;1
1320 645   SEND_VAR_EX/66            ?80       $714                 ?1                  	;0
1321 645   DO_FCALL_BY_NAME/131      $715=     ?0                   ?0                  	;0
1322 645   SUB/2                     #716=     $715                 862:10              	;0
1323 645   SEND_VAL_EX/116           ?96       #716                 ?2                  	;0
1324 645   SEND_VAL_EX/116           ?112      863:10               ?3                  	;0
1325 645   DO_FCALL_BY_NAME/131      $717=     ?0                   ?0                  	;0
1326 645   ASSIGN/38                 ?636      16?42                $717                	;0
1327 646   INIT_FCALL_BY_NAME/59     ?0        ?0                   864:'strtotime'     	;1
1328 646   CONCAT/8                  #719=     16?43                866:' 00:00:00'     	;0
1329 646   SEND_VAL_EX/116           ?80       #719                 ?1                  	;0
1330 646   DO_FCALL_BY_NAME/131      $720=     ?0                   ?0                  	;0
1331 646   ASSIGN/38                 $721=     16?43                $720                	;0
1332 646   JMPZ/43                   ?0        $721                 ?1334               	;0	>>1334
1333 647   GOTO/253                  ?0        ?5191                ?867                	;0
1334 649   ASSIGN/38                 ?640      16?43                868:NULL            	;0	<<1332
1335 650   GOTO/253                  ?0        ?5191                ?869                	;0
1336 652   FETCH_STATIC_PROP_R/173   $723=     870:'rSettings'      871:'XUI'           	;0
1337 652   FETCH_DIM_R/81            $724=     $723                 873:'redis_handler' 	;0
1338 652   BOOL_NOT/13               #725=     $724                 ?0                  	;0
1339 652   JMPZ/43                   ?0        #725                 ?1341               	;0	>>1341
1340 653   GOTO/253                  ?0        ?4756                ?874                	;0
1341 655   ASSIGN/38                 $726=     16?45                875:array (
)       	;0	<<1339
1342 655   ASSIGN/38                 ?645      16?35                $726                	;0
1343 656   INIT_METHOD_CALL/112      ?0        16?3                 876:'query'         	;1
1344 656   INIT_FCALL_BY_NAME/59     ?0        ?0                   878:'implode'       	;2
1345 656   SEND_VAL_EX/116           ?80       880:','              ?1                  	;0
1346 656   FETCH_DIM_FUNC_ARG/93     $728=     16?5                 881:'reports'       	;2
1347 656   SEND_VAR_EX/66            ?96       $728                 ?2                  	;0
1348 656   DO_FCALL_BY_NAME/131      $729=     ?0                   ?0                  	;0
1349 656   CONCAT/8                  #730=     882:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $729                	;0
1350 656   CONCAT/8                  #731=     #730                 883:');'            	;0
1351 656   SEND_VAL_EX/116           ?80       #731                 ?1                  	;0
1352 656   DO_FCALL/60               ?650      ?0                   ?0                  	;0
1353 657   INIT_METHOD_CALL/112      ?0        16?3                 884:'get_rows'      	;0
1354 657   DO_FCALL/60               $733=     ?0                   ?0                  	;0
1355 657   FE_RESET_R/77             $734=     $733                 ?1361               	;0
1356 657   FE_FETCH_R/78             ?0        $734                 16?7                	;1361	>>1361	<<1360
1357 658   FETCH_DIM_R/81            $736=     16?7                 886:'id'            	;0
1358 658   ASSIGN_DIM/147            ?653      16?45                ?4414262            	;0
1359 658   OP_DATA/137               ?0        $736                 ?0                  	;0
1360 659   JMP/42                    ?0        ?1356                ?0                  	;0	>>1356
1361 659   FE_FREE/127               ?0        $734                 ?0                  	;0	<<1355
1362 662   GOTO/253                  ?0        ?4732                ?887                	;0
1363 664   GOTO/253                  ?0        ?1369                ?888                	;0
1364 666   INIT_METHOD_CALL/112      ?0        16?3                 890:'get_row'       	;0
1365 666   DO_FCALL/60               $738=     ?0                   ?0                  	;0
1366 666   FETCH_DIM_R/81            $739=     $738                 892:'count'         	;0
1367 666   ASSIGN_DIM/147            ?655      16?1                 889:'recordsTotal'  	;0
1368 666   OP_DATA/137               ?0        $739                 ?0                  	;0
1369 668   FETCH_DIM_R/81            $741=     16?1                 894:'recordsTotal'  	;0
1370 668   ASSIGN_DIM/147            ?658      16?1                 893:'recordsFiltered'	;0
1371 668   OP_DATA/137               ?0        $741                 ?0                  	;0
1372 669   GOTO/253                  ?0        ?1085                ?895                	;0
1373 671   ASSIGN/38                 ?660      16?33                896:1000            	;0
1374 673   IS_EQUAL/17               #743=     16?46                897:'lines'         	;0
1375 673   JMPZ/43                   ?0        #743                 ?1377               	;0	>>1377
1376 674   GOTO/253                  ?0        ?3556                ?898                	;0
1377 676   IS_EQUAL/17               #744=     16?46                899:'mags'          	;0	<<1375
1378 676   JMPZ/43                   ?0        #744                 ?1380               	;0	>>1380
1379 677   GOTO/253                  ?0        ?512                 ?900                	;0
1380 679   IS_EQUAL/17               #745=     16?46                901:'enigmas'       	;0	<<1378
1381 679   JMPZ/43                   ?0        #745                 ?1383               	;0	>>1383
1382 680   GOTO/253                  ?0        ?2266                ?902                	;0
1383 682   GOTO/253                  ?0        ?4394                ?903                	;0	<<1381
1384 684   INIT_FCALL_BY_NAME/59     ?0        ?0                   904:'strtolower'    	;1
1385 684   FETCH_STATIC_PROP_FUNC_ARG/177 $746=     906:'rRequest'       907:'XUI'           	;1
1386 684   FETCH_DIM_FUNC_ARG/93     $747=     $746                 909:'order'         	;1
1387 684   FETCH_DIM_FUNC_ARG/93     $748=     $747                 910:0               	;1
1388 684   FETCH_DIM_FUNC_ARG/93     $749=     $748                 911:'dir'           	;1
1389 684   SEND_VAR_EX/66            ?80       $749                 ?1                  	;0
1390 684   DO_FCALL_BY_NAME/131      $750=     ?0                   ?0                  	;0
1391 684   IS_IDENTICAL/15           #751=     $750                 912:'desc'          	;0
1392 684   JMPZ/43                   ?0        #751                 ?1395               	;0	>>1395
1393 684   QM_ASSIGN/22              #752=     913:'desc'           ?0                  	;0
1394 684   JMP/42                    ?0        ?1396                ?0                  	;0	>>1396
1395 684   QM_ASSIGN/22              #752=     914:'asc'            ?0                  	;0	<<1392
1396 684   ASSIGN/38                 ?671      16?29                #752                	;0	<<1394
1397 685   FETCH_DIM_R/81            $754=     16?13                16?14               	;0
1398 685   CONCAT/8                  #755=     915:'ORDER BY '      $754                	;0
1399 685   CONCAT/8                  #756=     #755                 916:' '             	;0
1400 685   CONCAT/8                  #757=     #756                 16?29               	;0
1401 685   ASSIGN/38                 ?676      16?30                #757                	;0
1402 687   INIT_FCALL_BY_NAME/59     ?0        ?0                   917:'count'         	;1
1403 687   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
1404 687   DO_FCALL_BY_NAME/131      $759=     ?0                   ?0                  	;0
1405 687   IS_SMALLER/19             #760=     919:0                $759                	;0
1406 687   JMPZ/43                   ?0        #760                 ?1408               	;0	>>1408
1407 688   GOTO/253                  ?0        ?3597                ?920                	;0
1408 690   ASSIGN/38                 ?679      16?31                921:''              	;0	<<1406
1409 691   GOTO/253                  ?0        ?3596                ?922                	;0
1410 694   INIT_FCALL_BY_NAME/59     ?0        ?0                   923:'json_encode'   	;1
1411 694   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1412 694   DO_FCALL_BY_NAME/131      $762=     ?0                   ?0                  	;0
1413 694   ECHO/40                   ?0        $762                 ?0                  	;0
1414 695   EXIT/79                   ?0        ?0                   ?0                  	;0
1415 697   GOTO/253                  ?0        ?5681                ?925                	;0
1416 698   GOTO/253                  ?0        ?6102                ?926                	;0
1417 700   GOTO/253                  ?0        ?1423                ?927                	;0
1418 702   INIT_METHOD_CALL/112      ?0        16?3                 929:'get_row'       	;0
1419 702   DO_FCALL/60               $764=     ?0                   ?0                  	;0
1420 702   FETCH_DIM_R/81            $765=     $764                 931:'count'         	;0
1421 702   ASSIGN_DIM/147            ?681      16?1                 928:'recordsTotal'  	;0
1422 702   OP_DATA/137               ?0        $765                 ?0                  	;0
1423 704   FETCH_DIM_R/81            $767=     16?1                 933:'recordsTotal'  	;0
1424 704   ASSIGN_DIM/147            ?684      16?1                 932:'recordsFiltered'	;0
1425 704   OP_DATA/137               ?0        $767                 ?0                  	;0
1426 705   GOTO/253                  ?0        ?1056                ?934                	;0
1427 707   ASSIGN_DIM/147            ?686      16?1                 935:'recordsTotal'  	;0
1428 707   OP_DATA/137               ?0        936:0                ?0                  	;0
1429 708   GOTO/253                  ?0        ?1435                ?937                	;0
1430 710   INIT_METHOD_CALL/112      ?0        16?3                 939:'get_row'       	;0
1431 710   DO_FCALL/60               $770=     ?0                   ?0                  	;0
1432 710   FETCH_DIM_R/81            $771=     $770                 941:'count'         	;0
1433 710   ASSIGN_DIM/147            ?687      16?1                 938:'recordsTotal'  	;0
1434 710   OP_DATA/137               ?0        $771                 ?0                  	;0
1435 712   GOTO/253                  ?0        ?4530                ?942                	;0
1436 715   INIT_FCALL_BY_NAME/59     ?0        ?0                   943:'intval'        	;1
1437 715   FETCH_STATIC_PROP_FUNC_ARG/177 $772=     945:'rRequest'       946:'XUI'           	;1
1438 715   FETCH_DIM_FUNC_ARG/93     $773=     $772                 948:'order'         	;1
1439 715   FETCH_DIM_FUNC_ARG/93     $774=     $773                 949:0               	;1
1440 715   FETCH_DIM_FUNC_ARG/93     $775=     $774                 950:'column'        	;1
1441 715   SEND_VAR_EX/66            ?80       $775                 ?1                  	;0
1442 715   DO_FCALL_BY_NAME/131      $776=     ?0                   ?0                  	;0
1443 715   ASSIGN/38                 ?695      16?14                $776                	;0
1444 717   FETCH_STATIC_PROP_IS/176  $778=     951:'rRequest'       952:'XUI'           	;0
1445 717   ISSET_ISEMPTY_DIM_OBJ/115 #779=     $778                 954:'created'       	;33554432
1446 717   ASSIGN/38                 ?698      16?47                #779                	;0
1447 718   ASSIGN/38                 $781=     16?10                955:array (
)       	;0
1448 718   ASSIGN/38                 ?700      16?11                $781                	;0
1449 719   GOTO/253                  ?0        ?19                  ?956                	;0
1450 722   ASSIGN_DIM/147            ?701      16?11                ?2670195408         	;0
1451 722   OP_DATA/137               ?0        957:'(`id` LIKE ? OR `stream_display_name` LIKE ?)' ?0                  	;0
1452 724   INIT_FCALL_BY_NAME/59     ?0        ?0                   958:'strlen'        	;1
1453 724   FETCH_STATIC_PROP_FUNC_ARG/177 $784=     960:'rRequest'       961:'XUI'           	;1
1454 724   FETCH_DIM_FUNC_ARG/93     $785=     $784                 963:'category'      	;1
1455 724   SEND_VAR_EX/66            ?80       $785                 ?1                  	;0
1456 724   DO_FCALL_BY_NAME/131      $786=     ?0                   ?0                  	;0
1457 724   IS_SMALLER/19             #787=     964:0                $786                	;0
1458 724   BOOL_NOT/13               #788=     #787                 ?0                  	;0
1459 724   JMPZ/43                   ?0        #788                 ?1461               	;0	>>1461
1460 725   GOTO/253                  ?0        ?5724                ?965                	;0
1461 727   ASSIGN_DIM/147            ?707      16?11                ?4397406            	;0	<<1459
1462 727   OP_DATA/137               ?0        966:'JSON_CONTAINS(`category_id`, ?, \'$\')' ?0                  	;0
1463 728   GOTO/253                  ?0        ?5720                ?967                	;0
1464 732   FE_RESET_R/77             $790=     16?16                ?1900               	;0
1465 732   FE_FETCH_R/78             ?0        $790                 16?7                	;1900	>>1900	<<1899
1466 733   NOP/0                     ?0        ?0                   ?0                  	;1
1467 733   GOTO/253                  ?0        ?1757                ?968                	;0
1468 735   FETCH_DIM_R/81            $791=     16?7                 969:'exp_date'      	;0
1469 735   INIT_FCALL_BY_NAME/59     ?0        ?0                   970:'time'          	;0
1470 735   DO_FCALL_BY_NAME/131      $792=     ?0                   ?0                  	;0
1471 735   IS_SMALLER/19             #793=     $791                 $792                	;0
1472 735   JMPZ/43                   ?0        #793                 ?1475               	;0	>>1475
1473 736   NOP/0                     ?0        ?0                   ?0                  	;1
1474 736   GOTO/253                  ?0        ?1492                ?972                	;0
1475 738   INIT_FCALL_BY_NAME/59     ?0        ?0                   973:'date'          	;2	<<1472
1476 738   FETCH_DIM_FUNC_ARG/93     $794=     16?27                975:'date_format'   	;1
1477 738   SEND_VAR_EX/66            ?80       $794                 ?1                  	;0
1478 738   FETCH_DIM_FUNC_ARG/93     $795=     16?7                 976:'exp_date'      	;2
1479 738   SEND_VAR_EX/66            ?96       $795                 ?2                  	;0
1480 738   DO_FCALL_BY_NAME/131      $796=     ?0                   ?0                  	;0
1481 738   CONCAT/8                  #797=     $796                 977:'<br/><small class=\'text-secondary\'>'	;0
1482 738   INIT_FCALL_BY_NAME/59     ?0        ?0                   978:'date'          	;2
1483 738   SEND_VAL_EX/116           ?80       980:'H:i:s'          ?1                  	;0
1484 738   FETCH_DIM_FUNC_ARG/93     $798=     16?7                 981:'exp_date'      	;2
1485 738   SEND_VAR_EX/66            ?96       $798                 ?2                  	;0
1486 738   DO_FCALL_BY_NAME/131      $799=     ?0                   ?0                  	;0
1487 738   CONCAT/8                  #800=     #797                 $799                	;0
1488 738   CONCAT/8                  #801=     #800                 982:'</small>'      	;0
1489 738   ASSIGN/38                 ?720      16?48                #801                	;0
1490 739   NOP/0                     ?0        ?0                   ?0                  	;1
1491 739   GOTO/253                  ?0        ?1747                ?983                	;0
1492 741   INIT_FCALL_BY_NAME/59     ?0        ?0                   984:'date'          	;2
1493 741   FETCH_DIM_FUNC_ARG/93     $803=     16?27                986:'date_format'   	;1
1494 741   SEND_VAR_EX/66            ?80       $803                 ?1                  	;0
1495 741   FETCH_DIM_FUNC_ARG/93     $804=     16?7                 987:'exp_date'      	;2
1496 741   SEND_VAR_EX/66            ?96       $804                 ?2                  	;0
1497 741   DO_FCALL_BY_NAME/131      $805=     ?0                   ?0                  	;0
1498 741   CONCAT/8                  #806=     988:'<span class="expired">' $805                	;0
1499 741   CONCAT/8                  #807=     #806                 989:'<br/><small>'  	;0
1500 741   INIT_FCALL_BY_NAME/59     ?0        ?0                   990:'date'          	;2
1501 741   SEND_VAL_EX/116           ?80       992:'H:i:s'          ?1                  	;0
1502 741   FETCH_DIM_FUNC_ARG/93     $808=     16?7                 993:'exp_date'      	;2
1503 741   SEND_VAR_EX/66            ?96       $808                 ?2                  	;0
1504 741   DO_FCALL_BY_NAME/131      $809=     ?0                   ?0                  	;0
1505 741   CONCAT/8                  #810=     #807                 $809                	;0
1506 741   CONCAT/8                  #811=     #810                 994:'</small></span>'	;0
1507 741   ASSIGN/38                 ?730      16?48                #811                	;0
1508 742   NOP/0                     ?0        ?0                   ?0                  	;1
1509 742   GOTO/253                  ?0        ?1747                ?995                	;0
1510 744   ASSIGN/38                 ?731      16?49                996:'<i class="text-secondary far fa-square"></i>'	;0
1511 745   NOP/0                     ?0        ?0                   ?0                  	;1
1512 745   GOTO/253                  ?0        ?1514                ?997                	;0
1513 747   ASSIGN/38                 ?732      16?49                998:'<i class="text-success fas fa-square"></i>'	;0
1514 749   NOP/0                     ?0        ?0                   ?0                  	;1
1515 749   GOTO/253                  ?0        ?1786                ?999                	;0
1516 751   ASSIGN/38                 ?733      16?50                1000:''             	;0
1517 752   INIT_FCALL_BY_NAME/59     ?0        ?0                   1001:'strlen'       	;1
1518 752   FETCH_DIM_FUNC_ARG/93     $816=     16?7                 1003:'reseller_notes'	;1
1519 752   SEND_VAR_EX/66            ?80       $816                 ?1                  	;0
1520 752   DO_FCALL_BY_NAME/131      $817=     ?0                   ?0                  	;0
1521 752   IS_SMALLER/19             #818=     1004:0               $817                	;0
1522 752   BOOL_NOT/13               #819=     #818                 ?0                  	;0
1523 752   JMPZ/43                   ?0        #819                 ?1526               	;0	>>1526
1524 753   NOP/0                     ?0        ?0                   ?0                  	;1
1525 753   GOTO/253                  ?0        ?1839                ?1005               	;0
1526 755   INIT_FCALL_BY_NAME/59     ?0        ?0                   1006:'strlen'       	;1	<<1523
1527 755   SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
1528 755   DO_FCALL_BY_NAME/131      $820=     ?0                   ?0                  	;0
1529 755   IS_NOT_EQUAL/18           #821=     $820                 1008:0              	;0
1530 755   BOOL_NOT/13               #822=     #821                 ?0                  	;0
1531 755   JMPZ/43                   ?0        #822                 ?1534               	;0	>>1534
1532 756   NOP/0                     ?0        ?0                   ?0                  	;1
1533 756   GOTO/253                  ?0        ?1535                ?1009               	;0
1534 758   ASSIGN_CONCAT/30          ?741      16?50                1010:'
'            	;0	<<1531
1535 760   NOP/0                     ?0        ?0                   ?0                  	;1
1536 760   GOTO/253                  ?0        ?1837                ?1011               	;0
1537 762   FETCH_DIM_R/81            $824=     16?7                 1012:'username'     	;0
1538 762   CONCAT/8                  #825=     1013:'<button type="button" title="Download Playlist" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="download(\'' $824                	;0
1539 762   CONCAT/8                  #826=     #825                 1014:'\', \''       	;0
1540 762   FETCH_DIM_R/81            $827=     16?7                 1015:'password'     	;0
1541 762   CONCAT/8                  #828=     #826                 $827                	;0
1542 762   CONCAT/8                  #829=     #828                 1016:'\');"><i class="mdi mdi-download"></i></button>'	;0
1543 762   ASSIGN_CONCAT/30          ?748      16?22                #829                	;0
1544 764   FETCH_DIM_R/81            $831=     16?0                 1017:'reseller_client_connection_logs'	;0
1545 764   BOOL_NOT/13               #832=     $831                 ?0                  	;0
1546 764   JMPZ/43                   ?0        #832                 ?1549               	;0	>>1549
1547 765   NOP/0                     ?0        ?0                   ?0                  	;1
1548 765   GOTO/253                  ?0        ?1857                ?1018               	;0
1549 767   FETCH_DIM_R/81            $833=     16?7                 1019:'active_connections'	;0	<<1546
1550 767   IS_SMALLER/19             #834=     1020:0               $833                	;0
1551 767   JMPZ/43                   ?0        #834                 ?1554               	;0	>>1554
1552 768   NOP/0                     ?0        ?0                   ?0                  	;1
1553 768   GOTO/253                  ?0        ?1853                ?1021               	;0
1554 770   ASSIGN_CONCAT/30          ?753      16?22                1022:'<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="fas fa-hammer"></i></button>'	;0	<<1551
1555 771   NOP/0                     ?0        ?0                   ?0                  	;1
1556 771   GOTO/253                  ?0        ?1851                ?1023               	;0
1557 774   FETCH_DIM_R/81            $836=     16?7                 1024:'exp_date'     	;0
1558 774   JMPZ/43                   ?0        $836                 ?1561               	;0	>>1561
1559 775   NOP/0                     ?0        ?0                   ?0                  	;1
1560 775   GOTO/253                  ?0        ?1564                ?1025               	;0
1561 777   ASSIGN/38                 ?755      16?48                1026:'&infin;'      	;0	<<1558
1562 778   NOP/0                     ?0        ?0                   ?0                  	;1
1563 778   GOTO/253                  ?0        ?1747                ?1027               	;0
1564 780   NOP/0                     ?0        ?0                   ?0                  	;1
1565 780   GOTO/253                  ?0        ?1468                ?1028               	;0
1566 783   INIT_FCALL_BY_NAME/59     ?0        ?0                   1029:'date'         	;2
1567 783   FETCH_DIM_FUNC_ARG/93     $838=     16?27                1031:'date_format'  	;1
1568 783   SEND_VAR_EX/66            ?80       $838                 ?1                  	;0
1569 783   FETCH_DIM_FUNC_ARG/93     $839=     16?7                 1032:'last_active'  	;2
1570 783   SEND_VAR_EX/66            ?96       $839                 ?2                  	;0
1571 783   DO_FCALL_BY_NAME/131      $840=     ?0                   ?0                  	;0
1572 783   CONCAT/8                  #841=     $840                 1033:'<br/><small class=\'text-secondary\'>'	;0
1573 783   INIT_FCALL_BY_NAME/59     ?0        ?0                   1034:'date'         	;2
1574 783   SEND_VAL_EX/116           ?80       1036:'H:i:s'         ?1                  	;0
1575 783   FETCH_DIM_FUNC_ARG/93     $842=     16?7                 1037:'last_active'  	;2
1576 783   SEND_VAR_EX/66            ?96       $842                 ?2                  	;0
1577 783   DO_FCALL_BY_NAME/131      $843=     ?0                   ?0                  	;0
1578 783   CONCAT/8                  #844=     #841                 $843                	;0
1579 783   CONCAT/8                  #845=     #844                 1038:'</small>'     	;0
1580 783   ASSIGN/38                 ?764      16?51                #845                	;0
1581 785   NOP/0                     ?0        ?0                   ?0                  	;1
1582 785   GOTO/253                  ?0        ?1617                ?1039               	;0
1583 787   NOP/0                     ?0        ?0                   ?0                  	;1
1584 787   GOTO/253                  ?0        ?1601                ?1040               	;0
1585 789   FETCH_DIM_R/81            $847=     16?7                 1041:'exp_date'     	;0
1586 789   JMPZ_EX/46                #848=     $847                 ?1592               	;0	>>1592
1587 789   FETCH_DIM_R/81            $849=     16?7                 1042:'exp_date'     	;0
1588 789   INIT_FCALL_BY_NAME/59     ?0        ?0                   1043:'time'         	;0
1589 789   DO_FCALL_BY_NAME/131      $850=     ?0                   ?0                  	;0
1590 789   IS_SMALLER/19             #851=     $849                 $850                	;0
1591 789   BOOL/52                   #848=     #851                 ?0                  	;0
1592 789   JMPZ/43                   ?0        #848                 ?1595               	;0	>>1595	<<1586
1593 790   NOP/0                     ?0        ?0                   ?0                  	;1
1594 790   GOTO/253                  ?0        ?1598                ?1045               	;0
1595 792   ASSIGN/38                 ?770      16?52                1046:'<i class="text-success fas fa-square tooltip" title="Active"></i>'	;0	<<1592
1596 793   NOP/0                     ?0        ?0                   ?0                  	;1
1597 793   GOTO/253                  ?0        ?1832                ?1047               	;0
1598 795   ASSIGN/38                 ?771      16?52                1048:'<i class="text-warning far fa-square tooltip" title="Expired"></i>'	;0
1599 796   NOP/0                     ?0        ?0                   ?0                  	;1
1600 796   GOTO/253                  ?0        ?1832                ?1049               	;0
1601 798   FETCH_DIM_R/81            $854=     16?7                 1050:'stream_id'    	;0
1602 798   CONCAT/8                  #855=     1051:'<a href=\'stream_view?id=' $854                	;0
1603 798   CONCAT/8                  #856=     #855                 1052:'\'>'          	;0
1604 798   FETCH_DIM_R/81            $857=     16?7                 1053:'stream_display_name'	;0
1605 798   CONCAT/8                  #858=     #856                 $857                	;0
1606 798   CONCAT/8                  #859=     #858                 1054:'</a><br/><small class=\'text-secondary\'>Online: '	;0
1607 798   INIT_STATIC_METHOD_CALL/113 ?0        1055:'XUI'           1057:'A5d0a3407690F047'	;1
1608 798   INIT_FCALL_BY_NAME/59     ?0        ?0                   1059:'time'         	;0
1609 798   DO_FCALL_BY_NAME/131      $860=     ?0                   ?0                  	;0
1610 798   FETCH_DIM_R/81            $861=     16?7                 1061:'last_active'  	;0
1611 798   SUB/2                     #862=     $860                 $861                	;0
1612 798   SEND_VAL_EX/116           ?80       #862                 ?1                  	;0
1613 798   DO_FCALL/60               $863=     ?0                   ?0                  	;0
1614 798   CONCAT/8                  #864=     #859                 $863                	;0
1615 798   CONCAT/8                  #865=     #864                 1062:'</small>'     	;0
1616 798   ASSIGN/38                 ?784      16?51                #865                	;0
1617 800   INIT_FCALL_BY_NAME/59     ?0        ?0                   1063:'in_array'     	;2
1618 800   FETCH_DIM_FUNC_ARG/93     $867=     16?7                 1065:'member_id'    	;1
1619 800   SEND_VAR_EX/66            ?80       $867                 ?1                  	;0
1620 800   INIT_FCALL_BY_NAME/59     ?0        ?0                   1066:'array_merge'  	;2
1621 800   FETCH_DIM_FUNC_ARG/93     $868=     16?0                 1068:'direct_reports'	;1
1622 800   SEND_VAR_EX/66            ?80       $868                 ?1                  	;0
1623 800   FETCH_DIM_R/81            $869=     16?5                 1069:'id'           	;0
1624 800   INIT_ARRAY/71             #870=     $869                 ?0                  	;4
1625 800   SEND_VAL_EX/116           ?96       #870                 ?2                  	;0
1626 800   DO_FCALL_BY_NAME/131      $871=     ?0                   ?0                  	;0
1627 800   SEND_VAR_NO_REF_EX/50     ?96       $871                 ?2                  	;0
1628 800   DO_FCALL_BY_NAME/131      $872=     ?0                   ?0                  	;0
1629 800   JMPZ/43                   ?0        $872                 ?1632               	;0	>>1632
1630 801   NOP/0                     ?0        ?0                   ?0                  	;1
1631 801   GOTO/253                  ?0        ?1646                ?1070               	;0
1632 803   INIT_FCALL_BY_NAME/59     ?0        ?0                   1071:'intval'       	;1	<<1629
1633 803   FETCH_DIM_FUNC_ARG/93     $873=     16?7                 1073:'member_id'    	;1
1634 803   SEND_VAR_EX/66            ?80       $873                 ?1                  	;0
1635 803   DO_FCALL_BY_NAME/131      $874=     ?0                   ?0                  	;0
1636 803   CONCAT/8                  #875=     1074:'<a href=\'user?id=' $874                	;0
1637 803   CONCAT/8                  #876=     #875                 1075:'\'>'          	;0
1638 803   FETCH_DIM_R/81            $877=     16?7                 1076:'owner_name'   	;0
1639 803   CONCAT/8                  #878=     #876                 $877                	;0
1640 803   CONCAT/8                  #879=     #878                 1077:'<br/><small class=\'text-pink\'>(indirect)</small></a>'	;0
1641 803   ASSIGN/38                 ?798      16?53                #879                	;0
1642 804   NOP/0                     ?0        ?0                   ?0                  	;1
1643 804   GOTO/253                  ?0        ?1656                ?1078               	;0
1644 805   NOP/0                     ?0        ?0                   ?0                  	;1
1645 805   GOTO/253                  ?0        ?1646                ?1079               	;0
1646 808   INIT_FCALL_BY_NAME/59     ?0        ?0                   1080:'intval'       	;1
1647 808   FETCH_DIM_FUNC_ARG/93     $881=     16?7                 1082:'member_id'    	;1
1648 808   SEND_VAR_EX/66            ?80       $881                 ?1                  	;0
1649 808   DO_FCALL_BY_NAME/131      $882=     ?0                   ?0                  	;0
1650 808   CONCAT/8                  #883=     1083:'<a href=\'user?id=' $882                	;0
1651 808   CONCAT/8                  #884=     #883                 1084:'\'>'          	;0
1652 808   FETCH_DIM_R/81            $885=     16?7                 1085:'owner_name'   	;0
1653 808   CONCAT/8                  #886=     #884                 $885                	;0
1654 808   CONCAT/8                  #887=     #886                 1086:'</a>'         	;0
1655 808   ASSIGN/38                 ?806      16?53                #887                	;0
1656 810   FETCH_DIM_R/81            $891=     16?7                 1088:'id'           	;0
1657 810   CONCAT/8                  #892=     1089:'<a href=\'line?id=' $891                	;0
1658 810   CONCAT/8                  #893=     #892                 1090:'\'>'          	;0
1659 810   FETCH_DIM_R/81            $894=     16?7                 1091:'id'           	;0
1660 810   CONCAT/8                  #895=     #893                 $894                	;0
1661 810   CONCAT/8                  #896=     #895                 1092:'</a>'         	;0
1662 810   INIT_ARRAY/71             #897=     #896                 ?0                  	;48
1663 810   FETCH_DIM_R/81            $898=     16?7                 1093:'id'           	;0
1664 810   CONCAT/8                  #899=     1094:'<a href=\'line?id=' $898                	;0
1665 810   CONCAT/8                  #900=     #899                 1095:'\'>'          	;0
1666 810   FETCH_DIM_R/81            $901=     16?7                 1096:'username'     	;0
1667 810   CONCAT/8                  #902=     #900                 $901                	;0
1668 810   CONCAT/8                  #903=     #902                 1097:'</a>'         	;0
1669 810   ADD_ARRAY_ELEMENT/72      #897=     #903                 ?0                  	;0
1670 810   FETCH_DIM_R/81            $904=     16?7                 1098:'password'     	;0
1671 810   ADD_ARRAY_ELEMENT/72      #897=     $904                 ?0                  	;0
1672 810   ADD_ARRAY_ELEMENT/72      #897=     16?53                ?0                  	;0
1673 810   ADD_ARRAY_ELEMENT/72      #897=     16?52                ?0                  	;0
1674 810   ADD_ARRAY_ELEMENT/72      #897=     16?49                ?0                  	;0
1675 810   ADD_ARRAY_ELEMENT/72      #897=     16?54                ?0                  	;0
1676 810   ADD_ARRAY_ELEMENT/72      #897=     16?55                ?0                  	;0
1677 810   ADD_ARRAY_ELEMENT/72      #897=     16?56                ?0                  	;0
1678 810   ADD_ARRAY_ELEMENT/72      #897=     16?48                ?0                  	;0
1679 810   ADD_ARRAY_ELEMENT/72      #897=     16?51                ?0                  	;0
1680 810   ADD_ARRAY_ELEMENT/72      #897=     16?22                ?0                  	;0
1681 810   FETCH_DIM_W/84            $889=     16?1                 1087:'data'         	;0
1682 810   ASSIGN_DIM/147            ?808      $889                 ?2670194944         	;0
1683 810   OP_DATA/137               ?0        #897                 ?0                  	;0
1684 812   NOP/0                     ?0        ?0                   ?0                  	;1
1685 812   GOTO/253                  ?0        ?1899                ?1099               	;0
1686 814   ASSIGN_CONCAT/30          ?823      16?22                1100:'</div>'       	;0
1687 815   FETCH_DIM_R/81            $906=     16?7                 1101:'active_connections'	;0
1688 815   JMPZ_EX/46                #907=     $906                 ?1691               	;0	>>1691
1689 815   FETCH_DIM_R/81            $908=     16?7                 1102:'last_active'  	;0
1690 815   BOOL/52                   #907=     $908                 ?0                  	;0
1691 815   JMPZ/43                   ?0        #907                 ?1694               	;0	>>1694	<<1688
1692 816   NOP/0                     ?0        ?0                   ?0                  	;1
1693 816   GOTO/253                  ?0        ?1583                ?1103               	;0
1694 818   FETCH_DIM_R/81            $909=     16?7                 1104:'last_active'  	;0	<<1691
1695 818   JMPZ/43                   ?0        $909                 ?1698               	;0	>>1698
1696 819   NOP/0                     ?0        ?0                   ?0                  	;1
1697 819   GOTO/253                  ?0        ?1566                ?1105               	;0
1698 821   ASSIGN/38                 ?828      16?51                1106:'Never'        	;0	<<1695
1699 822   NOP/0                     ?0        ?0                   ?0                  	;1
1700 822   GOTO/253                  ?0        ?1581                ?1107               	;0
1701 823   NOP/0                     ?0        ?0                   ?0                  	;1
1702 823   GOTO/253                  ?0        ?1566                ?1108               	;0
1703 825   NOP/0                     ?0        ?0                   ?0                  	;1
1704 825   GOTO/253                  ?0        ?1706                ?1109               	;0
1705 827   ASSIGN/38                 ?829      16?56                1110:'<button type=\'button\' class=\'btn btn-dark text-white btn-xs waves-effect waves-light\'>&infin;</button>'	;0
1706 829   ASSIGN/38                 ?830      16?22                1111:'<div class="btn-group">'	;0
1707 830   NOP/0                     ?0        ?0                   ?0                  	;1
1708 830   GOTO/253                  ?0        ?1516                ?1112               	;0
1709 833   CONCAT/8                  #913=     1113:'<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' 16?50               	;0
1710 833   CONCAT/8                  #914=     #913                 1114:'"><i class="mdi mdi-note"></i></button>'	;0
1711 833   ASSIGN_CONCAT/30          ?833      16?22                #914                	;0
1712 835   FETCH_DIM_R/81            $916=     16?7                 1115:'id'           	;0
1713 835   CONCAT/8                  #917=     1116:'<a href="line?id=' $916                	;0
1714 835   CONCAT/8                  #918=     #917                 1117:'"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>'	;0
1715 835   ASSIGN_CONCAT/30          ?837      16?22                #918                	;0
1716 836   FETCH_DIM_R/81            $920=     16?0                 1118:'allow_download'	;0
1717 836   BOOL_NOT/13               #921=     $920                 ?0                  	;0
1718 836   JMPZ/43                   ?0        #921                 ?1721               	;0	>>1721
1719 837   NOP/0                     ?0        ?0                   ?0                  	;1
1720 837   GOTO/253                  ?0        ?1544                ?1119               	;0
1721 839   NOP/0                     ?0        ?0                   ?0                  	;1	<<1718
1722 839   GOTO/253                  ?0        ?1537                ?1120               	;0
1723 841   NOP/0                     ?0        ?0                   ?0                  	;1
1724 841   GOTO/253                  ?0        ?1729                ?1121               	;0
1725 843   FETCH_DIM_R/81            $922=     16?7                 1122:'id'           	;0
1726 843   CONCAT/8                  #923=     1123:'<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $922                	;0
1727 843   CONCAT/8                  #924=     #923                 1124:', \'disable\');"><i class="mdi mdi-lock"></i></button>'	;0
1728 843   ASSIGN_CONCAT/30          ?843      16?22                #924                	;0
1729 845   FETCH_DIM_R/81            $926=     16?7                 1125:'id'           	;0
1730 845   CONCAT/8                  #927=     1126:'<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $926                	;0
1731 845   CONCAT/8                  #928=     #927                 1127:', \'delete\');"><i class="mdi mdi-close"></i></button>'	;0
1732 845   ASSIGN_CONCAT/30          ?847      16?22                #928                	;0
1733 846   NOP/0                     ?0        ?0                   ?0                  	;1
1734 846   GOTO/253                  ?0        ?1686                ?1128               	;0
1735 849   FETCH_DIM_R/81            $930=     16?0                 1129:'reseller_client_connection_logs'	;0
1736 849   JMPZ/43                   ?0        $930                 ?1739               	;0	>>1739
1737 850   NOP/0                     ?0        ?0                   ?0                  	;1
1738 850   GOTO/253                  ?0        ?1745                ?1130               	;0
1739 852   FETCH_DIM_R/81            $931=     16?7                 1131:'active_connections'	;0	<<1736
1740 852   CONCAT/8                  #932=     1132:'<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' $931                	;0
1741 852   CONCAT/8                  #933=     #932                 1133:'</button>'    	;0
1742 852   ASSIGN/38                 ?852      16?55                #933                	;0
1743 853   NOP/0                     ?0        ?0                   ?0                  	;1
1744 853   GOTO/253                  ?0        ?1869                ?1134               	;0
1745 855   NOP/0                     ?0        ?0                   ?0                  	;1
1746 855   GOTO/253                  ?0        ?1859                ?1135               	;0
1747 859   FETCH_DIM_R/81            $935=     16?7                 1136:'active_connections'	;0
1748 859   IS_SMALLER/19             #936=     1137:0               $935                	;0
1749 859   JMPZ/43                   ?0        #936                 ?1752               	;0	>>1752
1750 860   NOP/0                     ?0        ?0                   ?0                  	;1
1751 860   GOTO/253                  ?0        ?1735                ?1138               	;0
1752 862   ASSIGN/38                 ?855      16?55                1139:'<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>'	;0	<<1749
1753 863   NOP/0                     ?0        ?0                   ?0                  	;1
1754 863   GOTO/253                  ?0        ?1869                ?1140               	;0
1755 864   NOP/0                     ?0        ?0                   ?0                  	;1
1756 864   GOTO/253                  ?0        ?1735                ?1141               	;0
1757 866   INIT_FCALL_BY_NAME/59     ?0        ?0                   1142:'array_merge'  	;2
1758 866   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1759 866   FETCH_DIM_R/81            $938=     16?7                 1144:'id'           	;0
1760 866   FETCH_DIM_FUNC_ARG/93     $939=     16?8                 $938                	;2
1761 866   SEND_VAR_EX/66            ?96       $939                 ?2                  	;0
1762 866   DO_FCALL_BY_NAME/131      $940=     ?0                   ?0                  	;0
1763 866   ASSIGN/38                 ?859      16?7                 $940                	;0
1764 867   FETCH_STATIC_PROP_R/173   $942=     1145:'rSettings'     1146:'XUI'          	;0
1765 867   FETCH_DIM_R/81            $943=     $942                 1148:'redis_handler'	;0
1766 867   BOOL_NOT/13               #944=     $943                 ?0                  	;0
1767 867   JMPZ/43                   ?0        #944                 ?1770               	;0	>>1770
1768 868   NOP/0                     ?0        ?0                   ?0                  	;1
1769 868   GOTO/253                  ?0        ?1780                ?1149               	;0
1770 870   FETCH_DIM_R/81            $946=     16?7                 1151:'id'           	;0	<<1767
1771 870   ISSET_ISEMPTY_DIM_OBJ/115 #947=     16?35                $946                	;33554432
1772 870   JMPZ/43                   ?0        #947                 ?1777               	;0	>>1777
1773 870   FETCH_DIM_R/81            $948=     16?7                 1152:'id'           	;0
1774 870   FETCH_DIM_R/81            $949=     16?35                $948                	;0
1775 870   QM_ASSIGN/22              #950=     $949                 ?0                  	;0
1776 870   JMP/42                    ?0        ?1778                ?0                  	;0	>>1778
1777 870   QM_ASSIGN/22              #950=     1153:0               ?0                  	;0	<<1772
1778 870   ASSIGN_DIM/147            ?863      16?7                 1150:'active_connections'	;0	<<1776
1779 870   OP_DATA/137               ?0        #950                 ?0                  	;0
1780 872   BOOL_NOT/13               #951=     16?4                 ?0                  	;0
1781 872   JMPZ/43                   ?0        #951                 ?1784               	;0	>>1784
1782 873   NOP/0                     ?0        ?0                   ?0                  	;1
1783 873   GOTO/253                  ?0        ?1810                ?1154               	;0
1784 875   NOP/0                     ?0        ?0                   ?0                  	;1	<<1781
1785 875   GOTO/253                  ?0        ?1796                ?1155               	;0
1786 877   FETCH_DIM_R/81            $952=     16?7                 1156:'is_trial'     	;0
1787 877   JMPZ/43                   ?0        $952                 ?1790               	;0	>>1790
1788 878   NOP/0                     ?0        ?0                   ?0                  	;1
1789 878   GOTO/253                  ?0        ?1793                ?1157               	;0
1790 880   ASSIGN/38                 ?871      16?54                1158:'<i class="text-secondary far fa-square"></i>'	;0	<<1787
1791 881   NOP/0                     ?0        ?0                   ?0                  	;1
1792 881   GOTO/253                  ?0        ?1557                ?1159               	;0
1793 883   ASSIGN/38                 ?872      16?54                1160:'<i class="text-warning fas fa-square"></i>'	;0
1794 884   NOP/0                     ?0        ?0                   ?0                  	;1
1795 884   GOTO/253                  ?0        ?1557                ?1161               	;0
1796 886   INIT_FCALL_BY_NAME/59     ?0        ?0                   1163:'filterRow'    	;3
1797 886   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
1798 886   FETCH_STATIC_PROP_FUNC_ARG/177 $957=     1165:'rRequest'      1166:'XUI'          	;2
1799 886   FETCH_DIM_FUNC_ARG/93     $958=     $957                 1168:'show_columns' 	;2
1800 886   SEND_VAR_EX/66            ?96       $958                 ?2                  	;0
1801 886   FETCH_STATIC_PROP_FUNC_ARG/177 $959=     1169:'rRequest'      1170:'XUI'          	;3
1802 886   FETCH_DIM_FUNC_ARG/93     $960=     $959                 1172:'hide_columns' 	;3
1803 886   SEND_VAR_EX/66            ?112      $960                 ?3                  	;0
1804 886   DO_FCALL_BY_NAME/131      $961=     ?0                   ?0                  	;0
1805 886   FETCH_DIM_W/84            $955=     16?1                 1162:'data'         	;0
1806 886   ASSIGN_DIM/147            ?874      $955                 ?2670194944         	;0
1807 886   OP_DATA/137               ?0        $961                 ?0                  	;0
1808 887   NOP/0                     ?0        ?0                   ?0                  	;1
1809 887   GOTO/253                  ?0        ?1684                ?1173               	;0
1810 889   FETCH_DIM_R/81            $962=     16?7                 1174:'admin_enabled'	;0
1811 889   BOOL_NOT/13               #963=     $962                 ?0                  	;0
1812 889   JMPZ/43                   ?0        #963                 ?1815               	;0	>>1815
1813 890   NOP/0                     ?0        ?0                   ?0                  	;1
1814 890   GOTO/253                  ?0        ?1824                ?1175               	;0
1815 892   FETCH_DIM_R/81            $964=     16?7                 1176:'enabled'      	;0	<<1812
1816 892   BOOL_NOT/13               #965=     $964                 ?0                  	;0
1817 892   JMPZ/43                   ?0        #965                 ?1820               	;0	>>1820
1818 893   NOP/0                     ?0        ?0                   ?0                  	;1
1819 893   GOTO/253                  ?0        ?1834                ?1177               	;0
1820 895   NOP/0                     ?0        ?0                   ?0                  	;1	<<1817
1821 895   GOTO/253                  ?0        ?1585                ?1178               	;0
1822 897   NOP/0                     ?0        ?0                   ?0                  	;1
1823 897   GOTO/253                  ?0        ?1825                ?1179               	;0
1824 899   ASSIGN/38                 ?884      16?52                1180:'<i class="text-danger fas fa-square tooltip" title="Banned"></i>'	;0
1825 901   FETCH_DIM_R/81            $967=     16?7                 1181:'active_connections'	;0
1826 901   IS_SMALLER/19             #968=     1182:0               $967                	;0
1827 901   JMPZ/43                   ?0        #968                 ?1830               	;0	>>1830
1828 902   NOP/0                     ?0        ?0                   ?0                  	;1
1829 902   GOTO/253                  ?0        ?1513                ?1183               	;0
1830 904   NOP/0                     ?0        ?0                   ?0                  	;1	<<1827
1831 904   GOTO/253                  ?0        ?1510                ?1184               	;0
1832 907   NOP/0                     ?0        ?0                   ?0                  	;1
1833 907   GOTO/253                  ?0        ?1835                ?1185               	;0
1834 909   ASSIGN/38                 ?887      16?52                1186:'<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>'	;0
1835 911   NOP/0                     ?0        ?0                   ?0                  	;1
1836 911   GOTO/253                  ?0        ?1822                ?1187               	;0
1837 913   FETCH_DIM_R/81            $970=     16?7                 1188:'reseller_notes'	;0
1838 913   ASSIGN_CONCAT/30          ?889      16?50                $970                	;0
1839 915   INIT_FCALL_BY_NAME/59     ?0        ?0                   1189:'strlen'       	;1
1840 915   SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
1841 915   DO_FCALL_BY_NAME/131      $972=     ?0                   ?0                  	;0
1842 915   IS_SMALLER/19             #973=     1191:0               $972                	;0
1843 915   JMPZ/43                   ?0        #973                 ?1846               	;0	>>1846
1844 916   NOP/0                     ?0        ?0                   ?0                  	;1
1845 916   GOTO/253                  ?0        ?1709                ?1192               	;0
1846 918   ASSIGN_CONCAT/30          ?892      16?22                1193:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>'	;0	<<1843
1847 919   NOP/0                     ?0        ?0                   ?0                  	;1
1848 919   GOTO/253                  ?0        ?1712                ?1194               	;0
1849 920   NOP/0                     ?0        ?0                   ?0                  	;1
1850 920   GOTO/253                  ?0        ?1709                ?1195               	;0
1851 922   NOP/0                     ?0        ?0                   ?0                  	;1
1852 922   GOTO/253                  ?0        ?1857                ?1196               	;0
1853 924   FETCH_DIM_R/81            $975=     16?7                 1197:'id'           	;0
1854 924   CONCAT/8                  #976=     1198:'<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $975                	;0
1855 924   CONCAT/8                  #977=     #976                 1199:', \'kill_line\');"><i class="fas fa-hammer"></i></button>'	;0
1856 924   ASSIGN_CONCAT/30          ?896      16?22                #977                	;0
1857 927   NOP/0                     ?0        ?0                   ?0                  	;1
1858 927   GOTO/253                  ?0        ?1880                ?1200               	;0
1859 929   INIT_FCALL_BY_NAME/59     ?0        ?0                   1201:'intval'       	;1
1860 929   FETCH_DIM_FUNC_ARG/93     $979=     16?7                 1203:'id'           	;1
1861 929   SEND_VAR_EX/66            ?80       $979                 ?1                  	;0
1862 929   DO_FCALL_BY_NAME/131      $980=     ?0                   ?0                  	;0
1863 929   CONCAT/8                  #981=     1204:'<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' $980                	;0
1864 929   CONCAT/8                  #982=     #981                 1205:');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>'	;0
1865 929   FETCH_DIM_R/81            $983=     16?7                 1206:'active_connections'	;0
1866 929   CONCAT/8                  #984=     #982                 $983                	;0
1867 929   CONCAT/8                  #985=     #984                 1207:'</button></a>'	;0
1868 929   ASSIGN/38                 ?904      16?55                #985                	;0
1869 932   FETCH_DIM_R/81            $987=     16?7                 1208:'max_connections'	;0
1870 932   IS_EQUAL/17               #988=     $987                 1209:0              	;0
1871 932   JMPZ/43                   ?0        #988                 ?1874               	;0	>>1874
1872 933   NOP/0                     ?0        ?0                   ?0                  	;1
1873 933   GOTO/253                  ?0        ?1705                ?1210               	;0
1874 935   FETCH_DIM_R/81            $989=     16?7                 1211:'max_connections'	;0	<<1871
1875 935   CONCAT/8                  #990=     1212:'<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>' $989                	;0
1876 935   CONCAT/8                  #991=     #990                 1213:'</button>'    	;0
1877 935   ASSIGN/38                 ?910      16?56                #991                	;0
1878 936   NOP/0                     ?0        ?0                   ?0                  	;1
1879 936   GOTO/253                  ?0        ?1703                ?1214               	;0
1880 938   FETCH_DIM_R/81            $993=     16?7                 1215:'is_isplock'   	;0
1881 938   BOOL_NOT/13               #994=     $993                 ?0                  	;0
1882 938   JMPZ/43                   ?0        #994                 ?1885               	;0	>>1885
1883 939   NOP/0                     ?0        ?0                   ?0                  	;1
1884 939   GOTO/253                  ?0        ?1889                ?1216               	;0
1885 941   FETCH_DIM_R/81            $995=     16?7                 1217:'id'           	;0	<<1882
1886 941   CONCAT/8                  #996=     1218:'<button title="Reset ISP Lock" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $995                	;0
1887 941   CONCAT/8                  #997=     #996                 1219:', \'reset_isp\');"><i class="mdi mdi-lock-reset"></i></button>'	;0
1888 941   ASSIGN_CONCAT/30          ?916      16?22                #997                	;0
1889 943   FETCH_DIM_R/81            $999=     16?7                 1220:'enabled'      	;0
1890 943   JMPZ/43                   ?0        $999                 ?1893               	;0	>>1893
1891 944   NOP/0                     ?0        ?0                   ?0                  	;1
1892 944   GOTO/253                  ?0        ?1725                ?1221               	;0
1893 946   FETCH_DIM_R/81            $1000=    16?7                 1222:'id'           	;0	<<1890
1894 946   CONCAT/8                  #1001=    1223:'<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1000               	;0
1895 946   CONCAT/8                  #1002=    #1001                1224:', \'enable\');"><i class="mdi mdi-lock"></i></button>'	;0
1896 946   ASSIGN_CONCAT/30          ?921      16?22                #1002               	;0
1897 947   NOP/0                     ?0        ?0                   ?0                  	;1
1898 947   GOTO/253                  ?0        ?1723                ?1225               	;0
1899 948   JMP/42                    ?0        ?1465                ?0                  	;0	>>1465
1900 948   FE_FREE/127               ?0        $790                 ?0                  	;0	<<1464
1901 952   GOTO/253                  ?0        ?124                 ?1226               	;0
1902 954   INIT_METHOD_CALL/112      ?0        16?3                 1227:'get_rows'     	;0
1903 954   DO_FCALL/60               $1004=    ?0                   ?0                  	;0
1904 954   ASSIGN/38                 ?923      16?16                $1004               	;0
1905 955   FETCH_STATIC_PROP_R/173   $1006=    1229:'rSettings'     1230:'XUI'          	;0
1906 955   FETCH_DIM_R/81            $1007=    $1006                1232:'redis_handler'	;0
1907 955   BOOL_NOT/13               #1008=    $1007                ?0                  	;0
1908 955   JMPZ/43                   ?0        #1008                ?1910               	;0	>>1910
1909 956   GOTO/253                  ?0        ?2398                ?1233               	;0
1910 958   ASSIGN/38                 $1009=    16?45                1234:array (
)      	;0	<<1908
1911 958   ASSIGN/38                 ?928      16?35                $1009               	;0
1912 959   INIT_METHOD_CALL/112      ?0        16?3                 1235:'query'        	;1
1913 959   INIT_FCALL_BY_NAME/59     ?0        ?0                   1237:'implode'      	;2
1914 959   SEND_VAL_EX/116           ?80       1239:','             ?1                  	;0
1915 959   FETCH_DIM_FUNC_ARG/93     $1011=    16?5                 1240:'reports'      	;2
1916 959   SEND_VAR_EX/66            ?96       $1011                ?2                  	;0
1917 959   DO_FCALL_BY_NAME/131      $1012=    ?0                   ?0                  	;0
1918 959   CONCAT/8                  #1013=    1241:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $1012               	;0
1919 959   CONCAT/8                  #1014=    #1013                1242:');'           	;0
1920 959   SEND_VAL_EX/116           ?80       #1014                ?1                  	;0
1921 959   DO_FCALL/60               ?933      ?0                   ?0                  	;0
1922 960   INIT_METHOD_CALL/112      ?0        16?3                 1243:'get_rows'     	;0
1923 960   DO_FCALL/60               $1016=    ?0                   ?0                  	;0
1924 960   FE_RESET_R/77             $1017=    $1016                ?1930               	;0
1925 960   FE_FETCH_R/78             ?0        $1017                16?7                	;1930	>>1930	<<1929
1926 961   FETCH_DIM_R/81            $1019=    16?7                 1245:'id'           	;0
1927 961   ASSIGN_DIM/147            ?936      16?45                ?4414262            	;0
1928 961   OP_DATA/137               ?0        $1019                ?0                  	;0
1929 962   JMP/42                    ?0        ?1925                ?0                  	;0	>>1925
1930 962   FE_FREE/127               ?0        $1017                ?0                  	;0	<<1924
1931 964   GOTO/253                  ?0        ?3159                ?1246               	;0
1932 967   INIT_FCALL_BY_NAME/59     ?0        ?0                   1247:'json_encode'  	;1
1933 967   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
1934 967   DO_FCALL_BY_NAME/131      $1020=    ?0                   ?0                  	;0
1935 967   ECHO/40                   ?0        $1020                ?0                  	;0
1936 968   EXIT/79                   ?0        ?0                   ?0                  	;0
1937 970   GOTO/253                  ?0        ?4246                ?1249               	;0
1938 971   GOTO/253                  ?0        ?512                 ?1250               	;0
1939 974   ASSIGN_DIM/147            ?939      16?11                ?5126               	;0
1940 974   OP_DATA/137               ?0        1251:'(`lines_live`.`user_agent` LIKE ? OR `lines_live`.`user_ip` LIKE ? OR `lines_live`.`container` LIKE ? OR FROM_UNIXTIME(`lines_live`.`date_start`) LIKE ? OR `lines_live`.`geoip_country_code` LIKE ? OR `lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `streams`.`stream_display_name` LIKE ?)' ?0                  	;0
1941 976   INIT_FCALL_BY_NAME/59     ?0        ?0                   1252:'intval'       	;1
1942 976   FETCH_STATIC_PROP_FUNC_ARG/177 $1022=    1254:'rRequest'      1255:'XUI'          	;1
1943 976   FETCH_DIM_FUNC_ARG/93     $1023=    $1022                1257:'stream'       	;1
1944 976   SEND_VAR_EX/66            ?80       $1023                ?1                  	;0
1945 976   DO_FCALL_BY_NAME/131      $1024=    ?0                   ?0                  	;0
1946 976   IS_SMALLER/19             #1025=    1258:0               $1024               	;0
1947 976   BOOL_NOT/13               #1026=    #1025                ?0                  	;0
1948 976   JMPZ/43                   ?0        #1026                ?1950               	;0	>>1950
1949 977   GOTO/253                  ?0        ?4378                ?1259               	;0
1950 979   ASSIGN_DIM/147            ?945      16?11                ?4397406            	;0	<<1948
1951 979   OP_DATA/137               ?0        1260:'`lines_live`.`stream_id` = ?' ?0                  	;0
1952 980   GOTO/253                  ?0        ?4374                ?1261               	;0
1953 982   FE_RESET_R/77             $1028=    16?16                ?2121               	;0
1954 982   FE_FETCH_R/78             ?0        $1028                16?7                	;2121	>>2121	<<2120
1955 983   NOP/0                     ?0        ?0                   ?0                  	;1
1956 983   GOTO/253                  ?0        ?2017                ?1262               	;0
1957 985   NOP/0                     ?0        ?0                   ?0                  	;1
1958 985   GOTO/253                  ?0        ?1969                ?1263               	;0
1959 987   INIT_FCALL_BY_NAME/59     ?0        ?0                   1264:'intval'       	;1
1960 987   FETCH_STATIC_PROP_FUNC_ARG/177 $1029=    1266:'rRequest'      1267:'XUI'          	;1
1961 987   FETCH_DIM_FUNC_ARG/93     $1030=    $1029                1269:'category'     	;1
1962 987   SEND_VAR_EX/66            ?80       $1030                ?1                  	;0
1963 987   DO_FCALL_BY_NAME/131      $1031=    ?0                   ?0                  	;0
1964 987   FETCH_DIM_R/81            $1032=    16?12                $1031               	;0
1965 987   FETCH_DIM_R/81            $1033=    $1032                1270:'category_name'	;0
1966 987   JMP_SET/152               #1034=    $1033                ?1968               	;0
1967 987   QM_ASSIGN/22              #1034=    1271:'No Category'   ?0                  	;0
1968 987   ASSIGN/38                 ?953      16?57                #1034               	;0
1969 989   INIT_FCALL_BY_NAME/59     ?0        ?0                   1272:'count'        	;1
1970 989   SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
1971 989   DO_FCALL_BY_NAME/131      $1036=    ?0                   ?0                  	;0
1972 989   IS_SMALLER/19             #1037=    1274:1               $1036               	;0
1973 989   BOOL_NOT/13               #1038=    #1037                ?0                  	;0
1974 989   JMPZ/43                   ?0        #1038                ?1977               	;0	>>1977
1975 990   NOP/0                     ?0        ?0                   ?0                  	;1
1976 990   GOTO/253                  ?0        ?2074                ?1275               	;0
1977 992   NOP/0                     ?0        ?0                   ?0                  	;1	<<1974
1978 992   GOTO/253                  ?0        ?2067                ?1276               	;0
1979 994   NOP/0                     ?0        ?0                   ?0                  	;1
1980 994   GOTO/253                  ?0        ?2065                ?1277               	;0
1981 996   INIT_FCALL_BY_NAME/59     ?0        ?0                   1278:'json_decode'  	;2
1982 996   FETCH_DIM_FUNC_ARG/93     $1039=    16?7                 1280:'category_id'  	;1
1983 996   SEND_VAR_EX/66            ?80       $1039                ?1                  	;0
1984 996   SEND_VAL_EX/116           ?96       1281:true            ?2                  	;0
1985 996   DO_FCALL_BY_NAME/131      $1040=    ?0                   ?0                  	;0
1986 996   ASSIGN/38                 ?959      16?58                $1040               	;0
1987 997   INIT_FCALL_BY_NAME/59     ?0        ?0                   1282:'strlen'       	;1
1988 997   FETCH_STATIC_PROP_FUNC_ARG/177 $1042=    1284:'rRequest'      1285:'XUI'          	;1
1989 997   FETCH_DIM_FUNC_ARG/93     $1043=    $1042                1287:'category'     	;1
1990 997   SEND_VAR_EX/66            ?80       $1043                ?1                  	;0
1991 997   DO_FCALL_BY_NAME/131      $1044=    ?0                   ?0                  	;0
1992 997   IS_SMALLER/19             #1045=    1288:0               $1044               	;0
1993 997   JMPZ/43                   ?0        #1045                ?1996               	;0	>>1996
1994 998   NOP/0                     ?0        ?0                   ?0                  	;1
1995 998   GOTO/253                  ?0        ?1959                ?1289               	;0
1996 1000  FETCH_DIM_R/81            $1046=    16?58                1290:0              	;0	<<1993
1997 1000  FETCH_DIM_R/81            $1047=    16?12                $1046               	;0
1998 1000  FETCH_DIM_R/81            $1048=    $1047                1291:'category_name'	;0
1999 1000  JMP_SET/152               #1049=    $1048                ?2001               	;0
2000 1000  QM_ASSIGN/22              #1049=    1292:'No Category'   ?0                  	;0
2001 1000  ASSIGN/38                 ?968      16?57                #1049               	;0
2002 1001  NOP/0                     ?0        ?0                   ?0                  	;1
2003 1001  GOTO/253                  ?0        ?1957                ?1293               	;0
2004 1003  NOP/0                     ?0        ?0                   ?0                  	;1
2005 1003  GOTO/253                  ?0        ?2083                ?1294               	;0
2006 1005  FETCH_DIM_R/81            $1051=    16?0                 1295:'reseller_client_connection_logs'	;0
2007 1005  JMPZ/43                   ?0        $1051                ?2010               	;0	>>2010
2008 1006  NOP/0                     ?0        ?0                   ?0                  	;1
2009 1006  GOTO/253                  ?0        ?2104                ?1296               	;0
2010 1008  ASSIGN/38                 ?970      16?22                1297:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0	<<2007
2011 1009  FETCH_DIM_R/81            $1053=    16?7                 1298:'clients'      	;0
2012 1009  CONCAT/8                  #1054=    1299:'<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' $1053               	;0
2013 1009  CONCAT/8                  #1055=    #1054                1300:'</button>'    	;0
2014 1009  ASSIGN/38                 ?974      16?59                #1055               	;0
2015 1010  NOP/0                     ?0        ?0                   ?0                  	;1
2016 1010  GOTO/253                  ?0        ?2102                ?1301               	;0
2017 1012  FETCH_STATIC_PROP_R/173   $1057=    1302:'rSettings'     1303:'XUI'          	;0
2018 1012  FETCH_DIM_R/81            $1058=    $1057                1305:'redis_handler'	;0
2019 1012  BOOL_NOT/13               #1059=    $1058                ?0                  	;0
2020 1012  JMPZ/43                   ?0        #1059                ?2023               	;0	>>2023
2021 1013  NOP/0                     ?0        ?0                   ?0                  	;1
2022 1013  GOTO/253                  ?0        ?2029                ?1306               	;0
2023 1015  FETCH_DIM_R/81            $1061=    16?7                 1308:'id'           	;0	<<2020
2024 1015  FETCH_DIM_R/81            $1062=    16?35                $1061               	;0
2025 1015  JMP_SET/152               #1063=    $1062                ?2027               	;0
2026 1015  QM_ASSIGN/22              #1063=    1309:0               ?0                  	;0
2027 1015  ASSIGN_DIM/147            ?978      16?7                 1307:'clients'      	;0
2028 1015  OP_DATA/137               ?0        #1063                ?0                  	;0
2029 1017  BOOL_NOT/13               #1064=    16?4                 ?0                  	;0
2030 1017  JMPZ/43                   ?0        #1064                ?2033               	;0	>>2033
2031 1018  NOP/0                     ?0        ?0                   ?0                  	;1
2032 1018  GOTO/253                  ?0        ?1981                ?1310               	;0
2033 1020  INIT_FCALL_BY_NAME/59     ?0        ?0                   1312:'filterRow'    	;3	<<2030
2034 1020  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2035 1020  FETCH_STATIC_PROP_FUNC_ARG/177 $1067=    1314:'rRequest'      1315:'XUI'          	;2
2036 1020  FETCH_DIM_FUNC_ARG/93     $1068=    $1067                1317:'show_columns' 	;2
2037 1020  SEND_VAR_EX/66            ?96       $1068                ?2                  	;0
2038 1020  FETCH_STATIC_PROP_FUNC_ARG/177 $1069=    1318:'rRequest'      1319:'XUI'          	;3
2039 1020  FETCH_DIM_FUNC_ARG/93     $1070=    $1069                1321:'hide_columns' 	;3
2040 1020  SEND_VAR_EX/66            ?112      $1070                ?3                  	;0
2041 1020  DO_FCALL_BY_NAME/131      $1071=    ?0                   ?0                  	;0
2042 1020  FETCH_DIM_W/84            $1065=    16?1                 1311:'data'         	;0
2043 1020  ASSIGN_DIM/147            ?984      $1065                ?4397406            	;0
2044 1020  OP_DATA/137               ?0        $1071                ?0                  	;0
2045 1021  NOP/0                     ?0        ?0                   ?0                  	;1
2046 1021  GOTO/253                  ?0        ?1979                ?1322               	;0
2047 1024  FETCH_DIM_R/81            $1072=    16?61                1323:'movie_image'  	;0
2048 1024  CONCAT/8                  #1073=    1324:'<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' $1072               	;0
2049 1024  CONCAT/8                  #1074=    #1073                1325:'\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url='	;0
2050 1024  FETCH_DIM_R/81            $1075=    16?61                1326:'movie_image'  	;0
2051 1024  CONCAT/8                  #1076=    #1074                $1075               	;0
2052 1024  CONCAT/8                  #1077=    #1076                1327:'\' /></a>'    	;0
2053 1024  ASSIGN/38                 ?996      16?60                #1077               	;0
2054 1026  FETCH_DIM_R/81            $1081=    16?7                 1329:'id'           	;0
2055 1026  INIT_ARRAY/71             #1082=    $1081                ?0                  	;24
2056 1026  ADD_ARRAY_ELEMENT/72      #1082=    16?60                ?0                  	;0
2057 1026  FETCH_DIM_R/81            $1083=    16?7                 1330:'stream_display_name'	;0
2058 1026  ADD_ARRAY_ELEMENT/72      #1082=    $1083                ?0                  	;0
2059 1026  ADD_ARRAY_ELEMENT/72      #1082=    16?57                ?0                  	;0
2060 1026  ADD_ARRAY_ELEMENT/72      #1082=    16?59                ?0                  	;0
2061 1026  ADD_ARRAY_ELEMENT/72      #1082=    16?22                ?0                  	;0
2062 1026  FETCH_DIM_W/84            $1079=    16?1                 1328:'data'         	;0
2063 1026  ASSIGN_DIM/147            ?998      $1079                ?2670194944         	;0
2064 1026  OP_DATA/137               ?0        #1082                ?0                  	;0
2065 1028  NOP/0                     ?0        ?0                   ?0                  	;1
2066 1028  GOTO/253                  ?0        ?2120                ?1331               	;0
2067 1030  INIT_FCALL_BY_NAME/59     ?0        ?0                   1332:'count'        	;1
2068 1030  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
2069 1030  DO_FCALL_BY_NAME/131      $1084=    ?0                   ?0                  	;0
2070 1030  SUB/2                     #1085=    $1084                1334:1              	;0
2071 1030  CONCAT/8                  #1086=    1335:' (+'           #1085               	;0
2072 1030  CONCAT/8                  #1087=    #1086                1336:' others)'     	;0
2073 1030  ASSIGN_CONCAT/30          ?1006     16?57                #1087               	;0
2074 1032  FETCH_DIM_R/81            $1089=    16?7                 1337:'clients'      	;0
2075 1032  IS_SMALLER/19             #1090=    1338:0               $1089               	;0
2076 1032  JMPZ/43                   ?0        #1090                ?2079               	;0	>>2079
2077 1033  NOP/0                     ?0        ?0                   ?0                  	;1
2078 1033  GOTO/253                  ?0        ?2006                ?1339               	;0
2079 1035  ASSIGN/38                 ?1009     16?22                1340:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0	<<2076
2080 1036  ASSIGN/38                 ?1010     16?59                1341:'<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>'	;0
2081 1037  NOP/0                     ?0        ?0                   ?0                  	;1
2082 1037  GOTO/253                  ?0        ?2004                ?1342               	;0
2083 1040  INIT_FCALL_BY_NAME/59     ?0        ?0                   1343:'json_decode'  	;2
2084 1040  FETCH_DIM_FUNC_ARG/93     $1093=    16?7                 1345:'movie_properties'	;1
2085 1040  SEND_VAR_EX/66            ?80       $1093                ?1                  	;0
2086 1040  SEND_VAL_EX/116           ?96       1346:true            ?2                  	;0
2087 1040  DO_FCALL_BY_NAME/131      $1094=    ?0                   ?0                  	;0
2088 1040  ASSIGN/38                 ?1013     16?61                $1094               	;0
2089 1041  INIT_FCALL_BY_NAME/59     ?0        ?0                   1347:'strlen'       	;1
2090 1041  FETCH_DIM_FUNC_ARG/93     $1096=    16?61                1349:'movie_image'  	;1
2091 1041  SEND_VAR_EX/66            ?80       $1096                ?1                  	;0
2092 1041  DO_FCALL_BY_NAME/131      $1097=    ?0                   ?0                  	;0
2093 1041  IS_SMALLER/19             #1098=    1350:0               $1097               	;0
2094 1041  JMPZ/43                   ?0        #1098                ?2097               	;0	>>2097
2095 1042  NOP/0                     ?0        ?0                   ?0                  	;1
2096 1042  GOTO/253                  ?0        ?2047                ?1351               	;0
2097 1044  ASSIGN/38                 ?1017     16?60                1352:''             	;0	<<2094
2098 1045  NOP/0                     ?0        ?0                   ?0                  	;1
2099 1045  GOTO/253                  ?0        ?2054                ?1353               	;0
2100 1046  NOP/0                     ?0        ?0                   ?0                  	;1
2101 1046  GOTO/253                  ?0        ?2047                ?1354               	;0
2102 1048  NOP/0                     ?0        ?0                   ?0                  	;1
2103 1048  GOTO/253                  ?0        ?2118                ?1355               	;0
2104 1050  FETCH_DIM_R/81            $1100=    16?7                 1356:'id'           	;0
2105 1050  CONCAT/8                  #1101=    1357:'<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1100               	;0
2106 1050  CONCAT/8                  #1102=    #1101                1358:', \'purge\');"><i class="mdi mdi-hammer"></i></button>'	;0
2107 1050  ASSIGN/38                 ?1021     16?22                #1102               	;0
2108 1051  INIT_FCALL_BY_NAME/59     ?0        ?0                   1359:'intval'       	;1
2109 1051  FETCH_DIM_FUNC_ARG/93     $1104=    16?7                 1361:'id'           	;1
2110 1051  SEND_VAR_EX/66            ?80       $1104                ?1                  	;0
2111 1051  DO_FCALL_BY_NAME/131      $1105=    ?0                   ?0                  	;0
2112 1051  CONCAT/8                  #1106=    1362:'<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' $1105               	;0
2113 1051  CONCAT/8                  #1107=    #1106                1363:');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>'	;0
2114 1051  FETCH_DIM_R/81            $1108=    16?7                 1364:'clients'      	;0
2115 1051  CONCAT/8                  #1109=    #1107                $1108               	;0
2116 1051  CONCAT/8                  #1110=    #1109                1365:'</button></a>'	;0
2117 1051  ASSIGN/38                 ?1029     16?59                #1110               	;0
2118 1053  NOP/0                     ?0        ?0                   ?0                  	;1
2119 1053  GOTO/253                  ?0        ?2083                ?1366               	;0
2120 1054  JMP/42                    ?0        ?1954                ?0                  	;0	>>1954
2121 1054  FE_FREE/127               ?0        $1028                ?0                  	;0	<<1953
2122 1059  INIT_FCALL_BY_NAME/59     ?0        ?0                   1367:'json_encode'  	;1
2123 1059  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
2124 1059  DO_FCALL_BY_NAME/131      $1112=    ?0                   ?0                  	;0
2125 1059  ECHO/40                   ?0        $1112                ?0                  	;0
2126 1060  GOTO/253                  ?0        ?5680                ?1369               	;0
2127 1062  ASSIGN/38                 ?1031     16?13                1370:array (
  0 => '`lines`.`id`',
  1 => '`lines`.`username`',
  2 => '`lines`.`password`',
  3 => '`users`.`username`',
  4 => '`lines`.`enabled` - `lines`.`admin_enabled`',
  5 => '`active_connections` > 0',
  6 => '`lines`.`is_trial`',
  7 => '`active_connections`',
  8 => '`lines`.`max_connections`',
  9 => '`lines`.`exp_date`',
  10 => '`last_activity`',
  11 => false,
)	;0
2128 1063  FETCH_STATIC_PROP_IS/176  $1114=    1371:'rRequest'      1372:'XUI'          	;0
2129 1063  ISSET_ISEMPTY_DIM_OBJ/115 #1115=    $1114                1374:'order'        	;33554432
2130 1063  JMPZ_EX/46                #1115=    #1115                ?2140               	;0	>>2140
2131 1063  INIT_FCALL_BY_NAME/59     ?0        ?0                   1375:'strlen'       	;1
2132 1063  FETCH_STATIC_PROP_FUNC_ARG/177 $1116=    1377:'rRequest'      1378:'XUI'          	;1
2133 1063  FETCH_DIM_FUNC_ARG/93     $1117=    $1116                1380:'order'        	;1
2134 1063  FETCH_DIM_FUNC_ARG/93     $1118=    $1117                1381:0              	;1
2135 1063  FETCH_DIM_FUNC_ARG/93     $1119=    $1118                1382:'column'       	;1
2136 1063  SEND_VAR_EX/66            ?80       $1119                ?1                  	;0
2137 1063  DO_FCALL_BY_NAME/131      $1120=    ?0                   ?0                  	;0
2138 1063  IS_SMALLER/19             #1121=    1383:0               $1120               	;0
2139 1063  BOOL/52                   #1115=    #1121                ?0                  	;0
2140 1063  JMPZ/43                   ?0        #1115                ?2142               	;0	>>2142	<<2130
2141 1064  GOTO/253                  ?0        ?2144                ?1384               	;0
2142 1066  ASSIGN/38                 ?1040     16?14                1385:0              	;0	<<2140
2143 1067  GOTO/253                  ?0        ?2715                ?1386               	;0
2144 1069  GOTO/253                  ?0        ?2707                ?1387               	;0
2145 1071  FETCH_STATIC_PROP_R/173   $1124=    1388:'rRequest'      1389:'XUI'          	;0
2146 1071  FETCH_DIM_R/81            $1125=    $1124                1391:'reseller'     	;0
2147 1071  ASSIGN_DIM/147            ?1041     16?10                ?2670195408         	;0
2148 1071  OP_DATA/137               ?0        $1125                ?0                  	;0
2149 1073  INIT_FCALL_BY_NAME/59     ?0        ?0                   1392:'count'        	;1
2150 1073  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
2151 1073  DO_FCALL_BY_NAME/131      $1126=    ?0                   ?0                  	;0
2152 1073  IS_SMALLER/19             #1127=    1394:0               $1126               	;0
2153 1073  JMPZ/43                   ?0        #1127                ?2155               	;0	>>2155
2154 1074  GOTO/253                  ?0        ?3247                ?1395               	;0
2155 1076  ASSIGN/38                 ?1046     16?31                1396:''             	;0	<<2153
2156 1077  GOTO/253                  ?0        ?3253                ?1397               	;0
2157 1078  GOTO/253                  ?0        ?3247                ?1398               	;0
2158 1081  ASSIGN_DIM/147            ?1047     16?1                 1399:'recordsTotal' 	;0
2159 1081  OP_DATA/137               ?0        16?62                ?0                  	;0
2160 1082  JMPZ/43                   ?0        16?4                 ?2170               	;0	>>2170
2161 1082  FETCH_DIM_R/81            $1131=    16?1                 1401:'recordsTotal' 	;0
2162 1082  IS_SMALLER/19             #1132=    $1131                16?33               	;0
2163 1082  JMPZ/43                   ?0        #1132                ?2167               	;0	>>2167
2164 1082  FETCH_DIM_R/81            $1133=    16?1                 1402:'recordsTotal' 	;0
2165 1082  QM_ASSIGN/22              #1134=    $1133                ?0                  	;0
2166 1082  JMP/42                    ?0        ?2168                ?0                  	;0	>>2168
2167 1082  QM_ASSIGN/22              #1134=    16?33                ?0                  	;0	<<2163
2168 1082  QM_ASSIGN/22              #1135=    #1134                ?0                  	;0	<<2166
2169 1082  JMP/42                    ?0        ?2172                ?0                  	;0	>>2172
2170 1082  FETCH_DIM_R/81            $1136=    16?1                 1403:'recordsTotal' 	;0	<<2160
2171 1082  QM_ASSIGN/22              #1135=    $1136                ?0                  	;0
2172 1082  ASSIGN_DIM/147            ?1048     16?1                 1400:'recordsFiltered'	;0	<<2169
2173 1082  OP_DATA/137               ?0        #1135                ?0                  	;0
2174 1084  INIT_FCALL_BY_NAME/59     ?0        ?0                   1404:'count'        	;1
2175 1084  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
2176 1084  DO_FCALL_BY_NAME/131      $1137=    ?0                   ?0                  	;0
2177 1084  IS_SMALLER/19             #1138=    1406:0               $1137               	;0
2178 1084  BOOL_NOT/13               #1139=    #1138                ?0                  	;0
2179 1084  JMPZ/43                   ?0        #1139                ?2181               	;0	>>2181
2180 1085  GOTO/253                  ?0        ?500                 ?1407               	;0
2181 1087  GOTO/253                  ?0        ?237                 ?1408               	;0	<<2179
2182 1090  INIT_FCALL_BY_NAME/59     ?0        ?0                   1409:'count'        	;1
2183 1090  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
2184 1090  DO_FCALL_BY_NAME/131      $1140=    ?0                   ?0                  	;0
2185 1090  IS_SMALLER/19             #1141=    16?63                $1140               	;0
2186 1090  BOOL_NOT/13               #1142=    #1141                ?0                  	;0
2187 1090  JMPZ/43                   ?0        #1142                ?2189               	;0	>>2189
2188 1091  GOTO/253                  ?0        ?2158                ?1411               	;0
2189 1093  FETCH_DIM_R/81            $1145=    16?16                16?63               	;0	<<2187
2190 1093  FETCH_DIM_R/81            $1146=    $1145                1413:'uuid'         	;0
2191 1093  FETCH_DIM_R/81            $1147=    16?64                $1146               	;0
2192 1093  JMP_SET/152               #1148=    $1147                ?2194               	;0
2193 1093  QM_ASSIGN/22              #1148=    1414:0               ?0                  	;0
2194 1093  FETCH_DIM_W/84            $1143=    16?16                16?63               	;0
2195 1093  ASSIGN_DIM/147            ?1062     $1143                1412:'divergence'   	;0
2196 1093  OP_DATA/137               ?0        #1148                ?0                  	;0
2197 1094  FETCH_DIM_R/81            $1151=    16?16                16?63               	;0
2198 1094  FETCH_DIM_R/81            $1152=    $1151                1416:'stream_id'    	;0
2199 1094  FETCH_DIM_R/81            $1153=    16?65                $1152               	;0
2200 1094  JMP_SET/152               #1154=    $1153                ?2202               	;0
2201 1094  QM_ASSIGN/22              #1154=    1417:NULL            ?0                  	;0
2202 1094  FETCH_DIM_W/84            $1149=    16?16                16?63               	;0
2203 1094  ASSIGN_DIM/147            ?1068     $1149                1415:'series_no'    	;0
2204 1094  OP_DATA/137               ?0        #1154                ?0                  	;0
2205 1095  FETCH_DIM_R/81            $1157=    16?16                16?63               	;0
2206 1095  FETCH_DIM_R/81            $1158=    $1157                1419:'stream_id'    	;0
2207 1095  FETCH_DIM_R/81            $1159=    16?66                $1158               	;0
2208 1095  FETCH_DIM_R/81            $1160=    $1159                1420:0              	;0
2209 1095  JMP_SET/152               #1161=    $1160                ?2211               	;0
2210 1095  QM_ASSIGN/22              #1161=    1421:''              ?0                  	;0
2211 1095  FETCH_DIM_W/84            $1155=    16?16                16?63               	;0
2212 1095  ASSIGN_DIM/147            ?1074     $1155                1418:'stream_display_name'	;0
2213 1095  OP_DATA/137               ?0        #1161                ?0                  	;0
2214 1096  GOTO/253                  ?0        ?4916                ?1422               	;0
2215 1100  INIT_FCALL_BY_NAME/59     ?0        ?0                   1423:'count'        	;1
2216 1100  SEND_VAR_EX/66            ?80       16?67                ?1                  	;0
2217 1100  DO_FCALL_BY_NAME/131      $1162=    ?0                   ?0                  	;0
2218 1100  IS_SMALLER/19             #1163=    1425:0               $1162               	;0
2219 1100  BOOL_NOT/13               #1164=    #1163                ?0                  	;0
2220 1100  JMPZ/43                   ?0        #1164                ?2222               	;0	>>2222
2221 1101  GOTO/253                  ?0        ?1464                ?1426               	;0
2222 1103  INIT_METHOD_CALL/112      ?0        16?3                 1427:'query'        	;1	<<2220
2223 1103  INIT_FCALL_BY_NAME/59     ?0        ?0                   1429:'implode'      	;2
2224 1103  SEND_VAL_EX/116           ?80       1431:','             ?1                  	;0
2225 1103  SEND_VAR_EX/66            ?96       16?67                ?2                  	;0
2226 1103  DO_FCALL_BY_NAME/131      $1165=    ?0                   ?0                  	;0
2227 1103  CONCAT/8                  #1166=    1432:'SELECT `user_id`, `stream_id`, `date_end` AS `last_active` FROM `lines_activity` WHERE `activity_id` IN (' $1165               	;0
2228 1103  CONCAT/8                  #1167=    #1166                1433:');'           	;0
2229 1103  SEND_VAL_EX/116           ?80       #1167                ?1                  	;0
2230 1103  DO_FCALL/60               ?1086     ?0                   ?0                  	;0
2231 1104  INIT_METHOD_CALL/112      ?0        16?3                 1434:'get_rows'     	;0
2232 1104  DO_FCALL/60               $1169=    ?0                   ?0                  	;0
2233 1104  FE_RESET_R/77             $1170=    $1169                ?2252               	;0
2234 1104  FE_FETCH_R/78             ?0        $1170                16?7                	;2252	>>2252	<<2251
2235 1105  FETCH_DIM_R/81            $1171=    16?7                 1436:'user_id'      	;0
2236 1105  FETCH_DIM_IS/90           $1172=    16?8                 $1171               	;0
2237 1105  ISSET_ISEMPTY_DIM_OBJ/115 #1173=    $1172                1437:'stream_id'    	;33554432
2238 1105  JMPZ/43                   ?0        #1173                ?2241               	;0	>>2241
2239 1106  NOP/0                     ?0        ?0                   ?0                  	;1
2240 1106  GOTO/253                  ?0        ?2251                ?1438               	;0
2241 1108  FETCH_DIM_R/81            $1174=    16?7                 1439:'user_id'      	;0	<<2238
2242 1108  FETCH_DIM_R/81            $1177=    16?7                 1441:'stream_id'    	;0
2243 1108  FETCH_DIM_W/84            $1175=    16?8                 $1174               	;0
2244 1108  ASSIGN_DIM/147            ?1094     $1175                1440:'stream_id'    	;0
2245 1108  OP_DATA/137               ?0        $1177                ?0                  	;0
2246 1109  FETCH_DIM_R/81            $1178=    16?7                 1442:'user_id'      	;0
2247 1109  FETCH_DIM_R/81            $1181=    16?7                 1444:'last_active'  	;0
2248 1109  FETCH_DIM_W/84            $1179=    16?8                 $1178               	;0
2249 1109  ASSIGN_DIM/147            ?1098     $1179                1443:'last_active'  	;0
2250 1109  OP_DATA/137               ?0        $1181                ?0                  	;0
2251 1111  JMP/42                    ?0        ?2234                ?0                  	;0	>>2234
2252 1111  FE_FREE/127               ?0        $1170                ?0                  	;0	<<2233
2253 1113  GOTO/253                  ?0        ?1464                ?1445               	;0
2254 1116  GOTO/253                  ?0        ?5603                ?1446               	;0
2255 1118  FETCH_DIM_R/81            $1182=    16?0                 1447:'reseller_client_connection_logs'	;0
2256 1118  JMPZ/43                   ?0        $1182                ?2258               	;0	>>2258
2257 1119  GOTO/253                  ?0        ?6653                ?1448               	;0
2258 1121  EXIT/79                   ?0        ?0                   ?0                  	;0	<<2256
2259 1122  GOTO/253                  ?0        ?6653                ?1449               	;0
2260 1124  INIT_FCALL_BY_NAME/59     ?0        ?0                   1450:'json_encode'  	;1
2261 1124  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
2262 1124  DO_FCALL_BY_NAME/131      $1183=    ?0                   ?0                  	;0
2263 1124  ECHO/40                   ?0        $1183                ?0                  	;0
2264 1125  EXIT/79                   ?0        ?0                   ?0                  	;0
2265 1127  GOTO/253                  ?0        ?1937                ?1452               	;0
2266 1129  GOTO/253                  ?0        ?4576                ?1453               	;0
2267 1131  INIT_METHOD_CALL/112      ?0        16?3                 1454:'query'        	;1
2268 1131  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
2269 1131  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
2270 1131  DO_FCALL/60               ?1102     ?0                   ?0                  	;0
2271 1132  INIT_METHOD_CALL/112      ?0        16?3                 1456:'num_rows'     	;0
2272 1132  DO_FCALL/60               $1185=    ?0                   ?0                  	;0
2273 1132  IS_SMALLER/19             #1186=    1458:0               $1185               	;0
2274 1132  BOOL_NOT/13               #1187=    #1186                ?0                  	;0
2275 1132  JMPZ/43                   ?0        #1187                ?2277               	;0	>>2277
2276 1133  GOTO/253                  ?0        ?1901                ?1459               	;0
2277 1135  INIT_METHOD_CALL/112      ?0        16?3                 1460:'get_rows'     	;0	<<2275
2278 1135  DO_FCALL/60               $1188=    ?0                   ?0                  	;0
2279 1135  ASSIGN/38                 ?1107     16?16                $1188               	;0
2280 1136  ASSIGN/38                 $1190=    16?6                 1462:array (
)      	;0
2281 1136  ASSIGN/38                 $1191=    16?8                 $1190               	;0
2282 1136  ASSIGN/38                 ?1110     16?67                $1191               	;0
2283 1137  FE_RESET_R/77             $1193=    16?16                ?2344               	;0
2284 1137  FE_FETCH_R/78             ?0        $1193                16?7                	;2344	>>2344	<<2343
2285 1138  NOP/0                     ?0        ?0                   ?0                  	;1
2286 1138  GOTO/253                  ?0        ?2309                ?1463               	;0
2287 1141  NOP/0                     ?0        ?0                   ?0                  	;1
2288 1141  GOTO/253                  ?0        ?2307                ?1464               	;0
2289 1143  INIT_FCALL_BY_NAME/59     ?0        ?0                   1465:'intval'       	;1
2290 1143  FETCH_DIM_FUNC_ARG/93     $1194=    16?7                 1467:'id'           	;1
2291 1143  SEND_VAR_EX/66            ?80       $1194                ?1                  	;0
2292 1143  DO_FCALL_BY_NAME/131      $1195=    ?0                   ?0                  	;0
2293 1143  FETCH_DIM_R/81            $1198=    16?68                1469:'stream_id'    	;0
2294 1143  FETCH_DIM_W/84            $1196=    16?8                 $1195               	;0
2295 1143  ASSIGN_DIM/147            ?1115     $1196                1468:'stream_id'    	;0
2296 1143  OP_DATA/137               ?0        $1198                ?0                  	;0
2297 1144  INIT_FCALL_BY_NAME/59     ?0        ?0                   1470:'intval'       	;1
2298 1144  FETCH_DIM_FUNC_ARG/93     $1199=    16?7                 1472:'id'           	;1
2299 1144  SEND_VAR_EX/66            ?80       $1199                ?1                  	;0
2300 1144  DO_FCALL_BY_NAME/131      $1200=    ?0                   ?0                  	;0
2301 1144  FETCH_DIM_R/81            $1203=    16?68                1474:'date_end'     	;0
2302 1144  FETCH_DIM_W/84            $1201=    16?8                 $1200               	;0
2303 1144  ASSIGN_DIM/147            ?1120     $1201                1473:'last_active'  	;0
2304 1144  OP_DATA/137               ?0        $1203                ?0                  	;0
2305 1145  NOP/0                     ?0        ?0                   ?0                  	;1
2306 1145  GOTO/253                  ?0        ?2307                ?1475               	;0
2307 1149  NOP/0                     ?0        ?0                   ?0                  	;1
2308 1149  GOTO/253                  ?0        ?2343                ?1476               	;0
2309 1151  INIT_FCALL_BY_NAME/59     ?0        ?0                   1477:'intval'       	;1
2310 1151  FETCH_DIM_FUNC_ARG/93     $1205=    16?7                 1479:'id'           	;1
2311 1151  SEND_VAR_EX/66            ?80       $1205                ?1                  	;0
2312 1151  DO_FCALL_BY_NAME/131      $1206=    ?0                   ?0                  	;0
2313 1151  ASSIGN_DIM/147            ?1122     16?6                 ?0                  	;0
2314 1151  OP_DATA/137               ?0        $1206                ?0                  	;0
2315 1152  INIT_FCALL_BY_NAME/59     ?0        ?0                   1480:'intval'       	;1
2316 1152  FETCH_DIM_FUNC_ARG/93     $1207=    16?7                 1482:'id'           	;1
2317 1152  SEND_VAR_EX/66            ?80       $1207                ?1                  	;0
2318 1152  DO_FCALL_BY_NAME/131      $1208=    ?0                   ?0                  	;0
2319 1152  ASSIGN_DIM/147            ?1127     16?8                 $1208               	;0
2320 1152  OP_DATA/137               ?0        1483:array (
  'owner_name' => NULL,
  'stream_display_name' => NULL,
  'stream_id' => NULL,
  'last_active' => NULL,
) ?0                  	;0
2321 1153  INIT_FCALL_BY_NAME/59     ?0        ?0                   1484:'json_decode'  	;2
2322 1153  FETCH_DIM_FUNC_ARG/93     $1210=    16?7                 1486:'last_activity_array'	;1
2323 1153  SEND_VAR_EX/66            ?80       $1210                ?1                  	;0
2324 1153  SEND_VAL_EX/116           ?96       1487:true            ?2                  	;0
2325 1153  DO_FCALL_BY_NAME/131      $1211=    ?0                   ?0                  	;0
2326 1153  ASSIGN/38                 $1212=    16?68                $1211               	;0
2327 1153  JMPZ/43                   ?0        $1212                ?2330               	;0	>>2330
2328 1154  NOP/0                     ?0        ?0                   ?0                  	;1
2329 1154  GOTO/253                  ?0        ?2289                ?1488               	;0
2330 1156  FETCH_DIM_R/81            $1213=    16?7                 1489:'last_activity'	;0	<<2327
2331 1156  BOOL_NOT/13               #1214=    $1213                ?0                  	;0
2332 1156  JMPZ/43                   ?0        #1214                ?2335               	;0	>>2335
2333 1157  NOP/0                     ?0        ?0                   ?0                  	;1
2334 1157  GOTO/253                  ?0        ?2287                ?1490               	;0
2335 1159  INIT_FCALL_BY_NAME/59     ?0        ?0                   1491:'intval'       	;1	<<2332
2336 1159  FETCH_DIM_FUNC_ARG/93     $1216=    16?7                 1493:'last_activity'	;1
2337 1159  SEND_VAR_EX/66            ?80       $1216                ?1                  	;0
2338 1159  DO_FCALL_BY_NAME/131      $1217=    ?0                   ?0                  	;0
2339 1159  ASSIGN_DIM/147            ?1133     16?67                ?4397406            	;0
2340 1159  OP_DATA/137               ?0        $1217                ?0                  	;0
2341 1160  NOP/0                     ?0        ?0                   ?0                  	;1
2342 1160  GOTO/253                  ?0        ?2287                ?1494               	;0
2343 1161  JMP/42                    ?0        ?2284                ?0                  	;0	>>2284
2344 1161  FE_FREE/127               ?0        $1193                ?0                  	;0	<<2283
2345 1163  GOTO/253                  ?0        ?46                  ?1495               	;0
2346 1166  INIT_FCALL_BY_NAME/59     ?0        ?0                   1496:'implode'      	;2
2347 1166  SEND_VAL_EX/116           ?80       1498:' AND '         ?1                  	;0
2348 1166  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
2349 1166  DO_FCALL_BY_NAME/131      $1218=    ?0                   ?0                  	;0
2350 1166  CONCAT/8                  #1219=    1499:'WHERE '        $1218               	;0
2351 1166  ASSIGN/38                 ?1138     16?31                #1219               	;0
2352 1168  ROPE_INIT/54              #1222=    ?0                   1500:'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` '	;3
2353 1168  ROPE_ADD/55               #1222=    #1222                16?31               	;1
2354 1168  ROPE_END/56               #1221=    #1222                1501:';'            	;2
2355 1168  ASSIGN/38                 ?1142     16?15                #1221               	;0
2356 1169  INIT_METHOD_CALL/112      ?0        16?3                 1502:'query'        	;1
2357 1169  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
2358 1169  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
2359 1169  DO_FCALL/60               ?1143     ?0                   ?0                  	;0
2360 1170  GOTO/253                  ?0        ?3561                ?1504               	;0
2361 1173  ASSIGN/38                 $1226=    16?10                1505:array (
)      	;0
2362 1173  ASSIGN/38                 ?1145     16?11                $1226               	;0
2363 1174  INIT_FCALL_BY_NAME/59     ?0        ?0                   1506:'implode'      	;2
2364 1174  SEND_VAL_EX/116           ?80       1508:','             ?1                  	;0
2365 1174  FETCH_DIM_FUNC_ARG/93     $1229=    16?5                 1509:'reports'      	;2
2366 1174  SEND_VAR_EX/66            ?96       $1229                ?2                  	;0
2367 1174  DO_FCALL_BY_NAME/131      $1230=    ?0                   ?0                  	;0
2368 1174  CONCAT/8                  #1231=    1510:'`lines`.`member_id` IN (' $1230               	;0
2369 1174  CONCAT/8                  #1232=    #1231                1511:')'            	;0
2370 1174  ASSIGN_DIM/147            ?1146     16?11                ?2670195408         	;0
2371 1174  OP_DATA/137               ?0        #1232                ?0                  	;0
2372 1175  INIT_FCALL_BY_NAME/59     ?0        ?0                   1512:'strlen'       	;1
2373 1175  FETCH_STATIC_PROP_FUNC_ARG/177 $1233=    1514:'rRequest'      1515:'XUI'          	;1
2374 1175  FETCH_DIM_FUNC_ARG/93     $1234=    $1233                1517:'search'       	;1
2375 1175  FETCH_DIM_FUNC_ARG/93     $1235=    $1234                1518:'value'        	;1
2376 1175  SEND_VAR_EX/66            ?80       $1235                ?1                  	;0
2377 1175  DO_FCALL_BY_NAME/131      $1236=    ?0                   ?0                  	;0
2378 1175  IS_SMALLER/19             #1237=    1519:0               $1236               	;0
2379 1175  BOOL_NOT/13               #1238=    #1237                ?0                  	;0
2380 1175  JMPZ/43                   ?0        #1238                ?2382               	;0	>>2382
2381 1176  GOTO/253                  ?0        ?5176                ?1520               	;0
2382 1178  INIT_FCALL_BY_NAME/59     ?0        ?0                   1521:'range'        	;2	<<2380
2383 1178  SEND_VAL_EX/116           ?80       1523:1               ?1                  	;0
2384 1178  SEND_VAL_EX/116           ?96       1524:6               ?2                  	;0
2385 1178  DO_FCALL_BY_NAME/131      $1239=    ?0                   ?0                  	;0
2386 1178  FE_RESET_R/77             $1240=    $1239                ?2396               	;0
2387 1178  FE_FETCH_R/78             ?0        $1240                16?9                	;2396	>>2396	<<2395
2388 1179  FETCH_STATIC_PROP_R/173   $1242=    1525:'rRequest'      1526:'XUI'          	;0
2389 1179  FETCH_DIM_R/81            $1243=    $1242                1528:'search'       	;0
2390 1179  FETCH_DIM_R/81            $1244=    $1243                1529:'value'        	;0
2391 1179  CONCAT/8                  #1245=    1530:'%'             $1244               	;0
2392 1179  CONCAT/8                  #1246=    #1245                1531:'%'            	;0
2393 1179  ASSIGN_DIM/147            ?1159     16?10                ?1660008528         	;0
2394 1179  OP_DATA/137               ?0        #1246                ?0                  	;0
2395 1180  JMP/42                    ?0        ?2387                ?0                  	;0	>>2387
2396 1180  FE_FREE/127               ?0        $1240                ?0                  	;0	<<2386
2397 1182  GOTO/253                  ?0        ?5174                ?1532               	;0
2398 1185  FE_RESET_R/77             $1247=    16?16                ?2574               	;0
2399 1185  FE_FETCH_R/78             ?0        $1247                16?7                	;2574	>>2574	<<2573
2400 1186  NOP/0                     ?0        ?0                   ?0                  	;1
2401 1186  GOTO/253                  ?0        ?2543                ?1533               	;0
2402 1188  FETCH_DIM_R/81            $1248=    16?7                 1534:'clients'      	;0
2403 1188  IS_SMALLER/19             #1249=    1535:0               $1248               	;0
2404 1188  JMPZ/43                   ?0        #1249                ?2407               	;0	>>2407
2405 1189  NOP/0                     ?0        ?0                   ?0                  	;1
2406 1189  GOTO/253                  ?0        ?2411                ?1536               	;0
2407 1191  ASSIGN/38                 ?1168     16?22                1537:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0	<<2404
2408 1192  ASSIGN/38                 ?1169     16?59                1538:'<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>'	;0
2409 1193  NOP/0                     ?0        ?0                   ?0                  	;1
2410 1193  GOTO/253                  ?0        ?2520                ?1539               	;0
2411 1195  NOP/0                     ?0        ?0                   ?0                  	;1
2412 1195  GOTO/253                  ?0        ?2530                ?1540               	;0
2413 1197  NOP/0                     ?0        ?0                   ?0                  	;1
2414 1197  GOTO/253                  ?0        ?2504                ?1541               	;0
2415 1199  INIT_FCALL_BY_NAME/59     ?0        ?0                   1542:'json_decode'  	;2
2416 1199  FETCH_DIM_FUNC_ARG/93     $1252=    16?7                 1544:'category_id'  	;1
2417 1199  SEND_VAR_EX/66            ?80       $1252                ?1                  	;0
2418 1199  SEND_VAL_EX/116           ?96       1545:true            ?2                  	;0
2419 1199  DO_FCALL_BY_NAME/131      $1253=    ?0                   ?0                  	;0
2420 1199  ASSIGN/38                 ?1172     16?58                $1253               	;0
2421 1200  INIT_FCALL_BY_NAME/59     ?0        ?0                   1546:'strlen'       	;1
2422 1200  FETCH_STATIC_PROP_FUNC_ARG/177 $1255=    1548:'rRequest'      1549:'XUI'          	;1
2423 1200  FETCH_DIM_FUNC_ARG/93     $1256=    $1255                1551:'category'     	;1
2424 1200  SEND_VAR_EX/66            ?80       $1256                ?1                  	;0
2425 1200  DO_FCALL_BY_NAME/131      $1257=    ?0                   ?0                  	;0
2426 1200  IS_SMALLER/19             #1258=    1552:0               $1257               	;0
2427 1200  JMPZ/43                   ?0        #1258                ?2430               	;0	>>2430
2428 1201  NOP/0                     ?0        ?0                   ?0                  	;1
2429 1201  GOTO/253                  ?0        ?2473                ?1553               	;0
2430 1203  FETCH_DIM_R/81            $1259=    16?58                1554:0              	;0	<<2427
2431 1203  FETCH_DIM_R/81            $1260=    16?12                $1259               	;0
2432 1203  FETCH_DIM_R/81            $1261=    $1260                1555:'category_name'	;0
2433 1203  JMP_SET/152               #1262=    $1261                ?2435               	;0
2434 1203  QM_ASSIGN/22              #1262=    1556:'No Category'   ?0                  	;0
2435 1203  ASSIGN/38                 ?1181     16?57                #1262               	;0
2436 1204  NOP/0                     ?0        ?0                   ?0                  	;1
2437 1204  GOTO/253                  ?0        ?2471                ?1557               	;0
2438 1206  ASSIGN/38                 ?1182     16?69                1558:''             	;0
2439 1207  NOP/0                     ?0        ?0                   ?0                  	;1
2440 1207  GOTO/253                  ?0        ?2448                ?1559               	;0
2441 1209  FETCH_DIM_R/81            $1265=    16?7                 1560:'stream_icon'  	;0
2442 1209  CONCAT/8                  #1266=    1561:'<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' $1265               	;0
2443 1209  CONCAT/8                  #1267=    #1266                1562:'\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url='	;0
2444 1209  FETCH_DIM_R/81            $1268=    16?7                 1563:'stream_icon'  	;0
2445 1209  CONCAT/8                  #1269=    #1267                $1268               	;0
2446 1209  CONCAT/8                  #1270=    #1269                1564:'\' /></a>'    	;0
2447 1209  ASSIGN/38                 ?1189     16?69                #1270               	;0
2448 1211  NOP/0                     ?0        ?0                   ?0                  	;1
2449 1211  GOTO/253                  ?0        ?2493                ?1565               	;0
2450 1213  INIT_FCALL_BY_NAME/59     ?0        ?0                   1566:'count'        	;1
2451 1213  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
2452 1213  DO_FCALL_BY_NAME/131      $1272=    ?0                   ?0                  	;0
2453 1213  SUB/2                     #1273=    $1272                1568:1              	;0
2454 1213  CONCAT/8                  #1274=    1569:' (+'           #1273               	;0
2455 1213  CONCAT/8                  #1275=    #1274                1570:' others)'     	;0
2456 1213  ASSIGN_CONCAT/30          ?1194     16?57                #1275               	;0
2457 1215  FETCH_DIM_R/81            $1277=    16?7                 1571:'tv_archive_duration'	;0
2458 1215  IS_SMALLER/19             #1278=    1572:0               $1277               	;0
2459 1215  JMPZ_EX/46                #1278=    #1278                ?2463               	;0	>>2463
2460 1215  FETCH_DIM_R/81            $1279=    16?7                 1573:'tv_archive_server_id'	;0
2461 1215  IS_SMALLER/19             #1280=    1574:0               $1279               	;0
2462 1215  BOOL/52                   #1278=    #1280                ?0                  	;0
2463 1215  BOOL_NOT/13               #1281=    #1278                ?0                  	;0	<<2459
2464 1215  JMPZ/43                   ?0        #1281                ?2467               	;0	>>2467
2465 1216  NOP/0                     ?0        ?0                   ?0                  	;1
2466 1216  GOTO/253                  ?0        ?2469                ?1575               	;0
2467 1218  ASSIGN_CONCAT/30          ?1200     16?7                 1576:'stream_display_name'	;147	<<2464
2468 1218  OP_DATA/137               ?0        1577:' <i class=\'text-danger mdi mdi-record\'></i>' ?0                  	;0
2469 1220  NOP/0                     ?0        ?0                   ?0                  	;1
2470 1220  GOTO/253                  ?0        ?2402                ?1578               	;0
2471 1222  NOP/0                     ?0        ?0                   ?0                  	;1
2472 1222  GOTO/253                  ?0        ?2483                ?1579               	;0
2473 1224  INIT_FCALL_BY_NAME/59     ?0        ?0                   1580:'intval'       	;1
2474 1224  FETCH_STATIC_PROP_FUNC_ARG/177 $1283=    1582:'rRequest'      1583:'XUI'          	;1
2475 1224  FETCH_DIM_FUNC_ARG/93     $1284=    $1283                1585:'category'     	;1
2476 1224  SEND_VAR_EX/66            ?80       $1284                ?1                  	;0
2477 1224  DO_FCALL_BY_NAME/131      $1285=    ?0                   ?0                  	;0
2478 1224  FETCH_DIM_R/81            $1286=    16?12                $1285               	;0
2479 1224  FETCH_DIM_R/81            $1287=    $1286                1586:'category_name'	;0
2480 1224  JMP_SET/152               #1288=    $1287                ?2482               	;0
2481 1224  QM_ASSIGN/22              #1288=    1587:'No Category'   ?0                  	;0
2482 1224  ASSIGN/38                 ?1207     16?57                #1288               	;0
2483 1226  INIT_FCALL_BY_NAME/59     ?0        ?0                   1588:'count'        	;1
2484 1226  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
2485 1226  DO_FCALL_BY_NAME/131      $1290=    ?0                   ?0                  	;0
2486 1226  IS_SMALLER/19             #1291=    1590:1               $1290               	;0
2487 1226  BOOL_NOT/13               #1292=    #1291                ?0                  	;0
2488 1226  JMPZ/43                   ?0        #1292                ?2491               	;0	>>2491
2489 1227  NOP/0                     ?0        ?0                   ?0                  	;1
2490 1227  GOTO/253                  ?0        ?2457                ?1591               	;0
2491 1229  NOP/0                     ?0        ?0                   ?0                  	;1	<<2488
2492 1229  GOTO/253                  ?0        ?2450                ?1592               	;0
2493 1231  FETCH_DIM_R/81            $1295=    16?7                 1594:'id'           	;0
2494 1231  INIT_ARRAY/71             #1296=    $1295                ?0                  	;24
2495 1231  ADD_ARRAY_ELEMENT/72      #1296=    16?69                ?0                  	;0
2496 1231  FETCH_DIM_R/81            $1297=    16?7                 1595:'stream_display_name'	;0
2497 1231  ADD_ARRAY_ELEMENT/72      #1296=    $1297                ?0                  	;0
2498 1231  ADD_ARRAY_ELEMENT/72      #1296=    16?57                ?0                  	;0
2499 1231  ADD_ARRAY_ELEMENT/72      #1296=    16?59                ?0                  	;0
2500 1231  ADD_ARRAY_ELEMENT/72      #1296=    16?22                ?0                  	;0
2501 1231  FETCH_DIM_W/84            $1293=    16?1                 1593:'data'         	;0
2502 1231  ASSIGN_DIM/147            ?1212     $1293                ?4397406            	;0
2503 1231  OP_DATA/137               ?0        #1296                ?0                  	;0
2504 1233  NOP/0                     ?0        ?0                   ?0                  	;1
2505 1233  GOTO/253                  ?0        ?2573                ?1596               	;0
2506 1235  FETCH_DIM_R/81            $1298=    16?7                 1597:'id'           	;0
2507 1235  CONCAT/8                  #1299=    1598:'<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1298               	;0
2508 1235  CONCAT/8                  #1300=    #1299                1599:', \'purge\');"><i class="mdi mdi-hammer"></i></button>'	;0
2509 1235  ASSIGN/38                 ?1219     16?22                #1300               	;0
2510 1236  INIT_FCALL_BY_NAME/59     ?0        ?0                   1600:'intval'       	;1
2511 1236  FETCH_DIM_FUNC_ARG/93     $1302=    16?7                 1602:'id'           	;1
2512 1236  SEND_VAR_EX/66            ?80       $1302                ?1                  	;0
2513 1236  DO_FCALL_BY_NAME/131      $1303=    ?0                   ?0                  	;0
2514 1236  CONCAT/8                  #1304=    1603:'<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' $1303               	;0
2515 1236  CONCAT/8                  #1305=    #1304                1604:');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>'	;0
2516 1236  FETCH_DIM_R/81            $1306=    16?7                 1605:'clients'      	;0
2517 1236  CONCAT/8                  #1307=    #1305                $1306               	;0
2518 1236  CONCAT/8                  #1308=    #1307                1606:'</button></a>'	;0
2519 1236  ASSIGN/38                 ?1227     16?59                #1308               	;0
2520 1239  INIT_FCALL_BY_NAME/59     ?0        ?0                   1607:'strlen'       	;1
2521 1239  FETCH_DIM_FUNC_ARG/93     $1310=    16?7                 1609:'stream_icon'  	;1
2522 1239  SEND_VAR_EX/66            ?80       $1310                ?1                  	;0
2523 1239  DO_FCALL_BY_NAME/131      $1311=    ?0                   ?0                  	;0
2524 1239  IS_SMALLER/19             #1312=    1610:0               $1311               	;0
2525 1239  JMPZ/43                   ?0        #1312                ?2528               	;0	>>2528
2526 1240  NOP/0                     ?0        ?0                   ?0                  	;1
2527 1240  GOTO/253                  ?0        ?2441                ?1611               	;0
2528 1242  NOP/0                     ?0        ?0                   ?0                  	;1	<<2525
2529 1242  GOTO/253                  ?0        ?2438                ?1612               	;0
2530 1244  FETCH_DIM_R/81            $1313=    16?0                 1613:'reseller_client_connection_logs'	;0
2531 1244  JMPZ/43                   ?0        $1313                ?2534               	;0	>>2534
2532 1245  NOP/0                     ?0        ?0                   ?0                  	;1
2533 1245  GOTO/253                  ?0        ?2541                ?1614               	;0
2534 1247  ASSIGN/38                 ?1232     16?22                1615:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0	<<2531
2535 1248  FETCH_DIM_R/81            $1315=    16?7                 1616:'clients'      	;0
2536 1248  CONCAT/8                  #1316=    1617:'<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' $1315               	;0
2537 1248  CONCAT/8                  #1317=    #1316                1618:'</button>'    	;0
2538 1248  ASSIGN/38                 ?1236     16?59                #1317               	;0
2539 1249  NOP/0                     ?0        ?0                   ?0                  	;1
2540 1249  GOTO/253                  ?0        ?2520                ?1619               	;0
2541 1251  NOP/0                     ?0        ?0                   ?0                  	;1
2542 1251  GOTO/253                  ?0        ?2506                ?1620               	;0
2543 1253  FETCH_STATIC_PROP_R/173   $1319=    1621:'rSettings'     1622:'XUI'          	;0
2544 1253  FETCH_DIM_R/81            $1320=    $1319                1624:'redis_handler'	;0
2545 1253  BOOL_NOT/13               #1321=    $1320                ?0                  	;0
2546 1253  JMPZ/43                   ?0        #1321                ?2549               	;0	>>2549
2547 1254  NOP/0                     ?0        ?0                   ?0                  	;1
2548 1254  GOTO/253                  ?0        ?2555                ?1625               	;0
2549 1256  FETCH_DIM_R/81            $1323=    16?7                 1627:'id'           	;0	<<2546
2550 1256  FETCH_DIM_R/81            $1324=    16?35                $1323               	;0
2551 1256  JMP_SET/152               #1325=    $1324                ?2553               	;0
2552 1256  QM_ASSIGN/22              #1325=    1628:0               ?0                  	;0
2553 1256  ASSIGN_DIM/147            ?1240     16?7                 1626:'clients'      	;0
2554 1256  OP_DATA/137               ?0        #1325                ?0                  	;0
2555 1258  BOOL_NOT/13               #1326=    16?4                 ?0                  	;0
2556 1258  JMPZ/43                   ?0        #1326                ?2559               	;0	>>2559
2557 1259  NOP/0                     ?0        ?0                   ?0                  	;1
2558 1259  GOTO/253                  ?0        ?2415                ?1629               	;0
2559 1261  INIT_FCALL_BY_NAME/59     ?0        ?0                   1631:'filterRow'    	;3	<<2556
2560 1261  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2561 1261  FETCH_STATIC_PROP_FUNC_ARG/177 $1329=    1633:'rRequest'      1634:'XUI'          	;2
2562 1261  FETCH_DIM_FUNC_ARG/93     $1330=    $1329                1636:'show_columns' 	;2
2563 1261  SEND_VAR_EX/66            ?96       $1330                ?2                  	;0
2564 1261  FETCH_STATIC_PROP_FUNC_ARG/177 $1331=    1637:'rRequest'      1638:'XUI'          	;3
2565 1261  FETCH_DIM_FUNC_ARG/93     $1332=    $1331                1640:'hide_columns' 	;3
2566 1261  SEND_VAR_EX/66            ?112      $1332                ?3                  	;0
2567 1261  DO_FCALL_BY_NAME/131      $1333=    ?0                   ?0                  	;0
2568 1261  FETCH_DIM_W/84            $1327=    16?1                 1630:'data'         	;0
2569 1261  ASSIGN_DIM/147            ?1246     $1327                ?4397406            	;0
2570 1261  OP_DATA/137               ?0        $1333                ?0                  	;0
2571 1262  NOP/0                     ?0        ?0                   ?0                  	;1
2572 1262  GOTO/253                  ?0        ?2413                ?1641               	;0
2573 1263  JMP/42                    ?0        ?2399                ?0                  	;0	>>2399
2574 1263  FE_FREE/127               ?0        $1247                ?0                  	;0	<<2398
2575 1268  GOTO/253                  ?0        ?2260                ?1642               	;0
2576 1270  ASSIGN/38                 ?1252     16?14                1643:0              	;0
2577 1271  GOTO/253                  ?0        ?2586                ?1644               	;0
2578 1273  INIT_FCALL_BY_NAME/59     ?0        ?0                   1645:'intval'       	;1
2579 1273  FETCH_STATIC_PROP_FUNC_ARG/177 $1335=    1647:'rRequest'      1648:'XUI'          	;1
2580 1273  FETCH_DIM_FUNC_ARG/93     $1336=    $1335                1650:'order'        	;1
2581 1273  FETCH_DIM_FUNC_ARG/93     $1337=    $1336                1651:0              	;1
2582 1273  FETCH_DIM_FUNC_ARG/93     $1338=    $1337                1652:'column'       	;1
2583 1273  SEND_VAR_EX/66            ?80       $1338                ?1                  	;0
2584 1273  DO_FCALL_BY_NAME/131      $1339=    ?0                   ?0                  	;0
2585 1273  ASSIGN/38                 ?1258     16?14                $1339               	;0
2586 1275  GOTO/253                  ?0        ?4267                ?1653               	;0
2587 1277  INIT_FCALL_BY_NAME/59     ?0        ?0                   1654:'strlen'       	;1
2588 1277  FETCH_STATIC_PROP_FUNC_ARG/177 $1341=    1656:'rRequest'      1657:'XUI'          	;1
2589 1277  FETCH_DIM_FUNC_ARG/93     $1342=    $1341                1659:'category'     	;1
2590 1277  SEND_VAR_EX/66            ?80       $1342                ?1                  	;0
2591 1277  DO_FCALL_BY_NAME/131      $1343=    ?0                   ?0                  	;0
2592 1277  IS_SMALLER/19             #1344=    1660:0               $1343               	;0
2593 1277  BOOL_NOT/13               #1345=    #1344                ?0                  	;0
2594 1277  JMPZ/43                   ?0        #1345                ?2596               	;0	>>2596
2595 1278  GOTO/253                  ?0        ?2602                ?1661               	;0
2596 1280  ASSIGN_DIM/147            ?1264     16?11                ?4397406            	;0	<<2594
2597 1280  OP_DATA/137               ?0        1662:'JSON_CONTAINS(`category_id`, ?, \'$\')' ?0                  	;0
2598 1281  FETCH_STATIC_PROP_R/173   $1348=    1663:'rRequest'      1664:'XUI'          	;0
2599 1281  FETCH_DIM_R/81            $1349=    $1348                1666:'category'     	;0
2600 1281  ASSIGN_DIM/147            ?1265     16?10                ?0                  	;0
2601 1281  OP_DATA/137               ?0        $1349                ?0                  	;0
2602 1283  FETCH_DIM_R/81            $1350=    16?13                16?14               	;0
2603 1283  BOOL_NOT/13               #1351=    $1350                ?0                  	;0
2604 1283  JMPZ/43                   ?0        #1351                ?2606               	;0	>>2606
2605 1284  GOTO/253                  ?0        ?1402                ?1667               	;0
2606 1286  GOTO/253                  ?0        ?1384                ?1668               	;0	<<2604
2607 1290  INIT_FCALL_BY_NAME/59     ?0        ?0                   1669:'json_encode'  	;1
2608 1290  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
2609 1290  DO_FCALL_BY_NAME/131      $1352=    ?0                   ?0                  	;0
2610 1290  ECHO/40                   ?0        $1352                ?0                  	;0
2611 1291  EXIT/79                   ?0        ?0                   ?0                  	;0
2612 1293  GOTO/253                  ?0        ?506                 ?1671               	;0
2613 1295  INIT_FCALL_BY_NAME/59     ?0        ?0                   1672:'strlen'       	;1
2614 1295  FETCH_STATIC_PROP_FUNC_ARG/177 $1353=    1674:'rRequest'      1675:'XUI'          	;1
2615 1295  FETCH_DIM_FUNC_ARG/93     $1354=    $1353                1677:'stream'       	;1
2616 1295  SEND_VAR_EX/66            ?80       $1354                ?1                  	;0
2617 1295  DO_FCALL_BY_NAME/131      $1355=    ?0                   ?0                  	;0
2618 1295  IS_SMALLER/19             #1356=    1678:0               $1355               	;0
2619 1295  BOOL_NOT/13               #1357=    #1356                ?0                  	;0
2620 1295  JMPZ/43                   ?0        #1357                ?2622               	;0	>>2622
2621 1296  GOTO/253                  ?0        ?2628                ?1679               	;0
2622 1298  ASSIGN_DIM/147            ?1276     16?11                ?4397406            	;0	<<2620
2623 1298  OP_DATA/137               ?0        1680:'`lines_activity`.`stream_id` = ?' ?0                  	;0
2624 1299  FETCH_STATIC_PROP_R/173   $1360=    1681:'rRequest'      1682:'XUI'          	;0
2625 1299  FETCH_DIM_R/81            $1361=    $1360                1684:'stream'       	;0
2626 1299  ASSIGN_DIM/147            ?1277     16?10                ?0                  	;0
2627 1299  OP_DATA/137               ?0        $1361                ?0                  	;0
2628 1301  INIT_FCALL_BY_NAME/59     ?0        ?0                   1685:'strlen'       	;1
2629 1301  FETCH_STATIC_PROP_FUNC_ARG/177 $1362=    1687:'rRequest'      1688:'XUI'          	;1
2630 1301  FETCH_DIM_FUNC_ARG/93     $1363=    $1362                1690:'user'         	;1
2631 1301  SEND_VAR_EX/66            ?80       $1363                ?1                  	;0
2632 1301  DO_FCALL_BY_NAME/131      $1364=    ?0                   ?0                  	;0
2633 1301  IS_SMALLER/19             #1365=    1691:0               $1364               	;0
2634 1301  BOOL_NOT/13               #1366=    #1365                ?0                  	;0
2635 1301  JMPZ/43                   ?0        #1366                ?2637               	;0	>>2637
2636 1302  GOTO/253                  ?0        ?142                 ?1692               	;0
2637 1304  GOTO/253                  ?0        ?136                 ?1693               	;0	<<2635
2638 1306  EXIT/79                   ?0        ?0                   ?0                  	;0
2639 1309  INIT_FCALL_BY_NAME/59     ?0        ?0                   1694:'intval'       	;1
2640 1309  FETCH_STATIC_PROP_FUNC_ARG/177 $1367=    1696:'rRequest'      1697:'XUI'          	;1
2641 1309  FETCH_DIM_FUNC_ARG/93     $1368=    $1367                1699:'draw'         	;1
2642 1309  SEND_VAR_EX/66            ?80       $1368                ?1                  	;0
2643 1309  DO_FCALL_BY_NAME/131      $1369=    ?0                   ?0                  	;0
2644 1309  INIT_ARRAY/71             #1370=    $1369                1700:'draw'         	;18
2645 1309  ADD_ARRAY_ELEMENT/72      #1370=    1701:0               1702:'recordsTotal' 	;0
2646 1309  ADD_ARRAY_ELEMENT/72      #1370=    1703:0               1704:'recordsFiltered'	;0
2647 1309  ADD_ARRAY_ELEMENT/72      #1370=    1705:array (
)       1706:'data'         	;0
2648 1309  ASSIGN/38                 ?1289     16?1                 #1370               	;0
2649 1310  ASSIGN/38                 ?1290     16?4                 1707:false          	;0
2650 1311  GOTO/253                  ?0        ?4660                ?1708               	;0
2651 1314  ASSIGN_DIM/147            ?1291     16?11                ?2670195408         	;0
2652 1314  OP_DATA/137               ?0        1709:'`lines`.`enabled` = 0' ?0                  	;0
2653 1316  GOTO/253                  ?0        ?5583                ?1710               	;0
2654 1318  GOTO/253                  ?0        ?5581                ?1711               	;0
2655 1322  INIT_FCALL_BY_NAME/59     ?0        ?0                   1712:'array_keys'   	;1
2656 1322  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
2657 1322  DO_FCALL_BY_NAME/131      $1374=    ?0                   ?0                  	;0
2658 1322  FE_RESET_R/77             $1375=    $1374                ?2698               	;0
2659 1322  FE_FETCH_R/78             ?0        $1375                16?2                	;2698	>>2698	<<2697
2660 1323  INIT_FCALL_BY_NAME/59     ?0        ?0                   1714:'array_multisort'	;3
2661 1323  INIT_FCALL_BY_NAME/59     ?0        ?0                   1716:'array_column' 	;2
2662 1323  FETCH_DIM_FUNC_ARG/93     $1376=    16?36                16?2                	;1
2663 1323  SEND_VAR_EX/66            ?80       $1376                ?1                  	;0
2664 1323  SEND_VAL_EX/116           ?96       1718:'date_start'    ?2                  	;0
2665 1323  DO_FCALL_BY_NAME/131      $1377=    ?0                   ?0                  	;0
2666 1323  SEND_VAR_NO_REF_EX/50     ?80       $1377                ?1                  	;0
2667 1323  FETCH_CONSTANT/99         #1378=    ?0                   1719:'SORT_DESC'    	;16
2668 1323  SEND_VAL_EX/116           ?96       #1378                ?2                  	;0
2669 1323  FETCH_DIM_FUNC_ARG/93     $1379=    16?36                16?2                	;3
2670 1323  SEND_VAR_EX/66            ?112      $1379                ?3                  	;0
2671 1323  DO_FCALL_BY_NAME/131      ?1298     ?0                   ?0                  	;0
2672 1324  FETCH_DIM_R/81            $1383=    16?36                16?2                	;0
2673 1324  FETCH_DIM_R/81            $1384=    $1383                1723:0              	;0
2674 1324  FETCH_DIM_R/81            $1385=    $1384                1724:'stream_id'    	;0
2675 1324  FETCH_DIM_R/81            $1386=    16?44                $1385               	;0
2676 1324  FETCH_DIM_W/84            $1381=    16?8                 16?2                	;0
2677 1324  ASSIGN_DIM/147            ?1300     $1381                1722:'stream_display_name'	;0
2678 1324  OP_DATA/137               ?0        $1386                ?0                  	;0
2679 1325  FETCH_DIM_R/81            $1389=    16?36                16?2                	;0
2680 1325  FETCH_DIM_R/81            $1390=    $1389                1726:0              	;0
2681 1325  FETCH_DIM_R/81            $1391=    $1390                1727:'stream_id'    	;0
2682 1325  FETCH_DIM_W/84            $1387=    16?8                 16?2                	;0
2683 1325  ASSIGN_DIM/147            ?1306     $1387                1725:'stream_id'    	;0
2684 1325  OP_DATA/137               ?0        $1391                ?0                  	;0
2685 1326  FETCH_DIM_R/81            $1394=    16?36                16?2                	;0
2686 1326  FETCH_DIM_R/81            $1395=    $1394                1729:0              	;0
2687 1326  FETCH_DIM_R/81            $1396=    $1395                1730:'date_start'   	;0
2688 1326  FETCH_DIM_W/84            $1392=    16?8                 16?2                	;0
2689 1326  ASSIGN_DIM/147            ?1311     $1392                1728:'last_active'  	;0
2690 1326  OP_DATA/137               ?0        $1396                ?0                  	;0
2691 1327  INIT_FCALL_BY_NAME/59     ?0        ?0                   1731:'count'        	;1
2692 1327  FETCH_DIM_FUNC_ARG/93     $1398=    16?36                16?2                	;1
2693 1327  SEND_VAR_EX/66            ?80       $1398                ?1                  	;0
2694 1327  DO_FCALL_BY_NAME/131      $1399=    ?0                   ?0                  	;0
2695 1327  ASSIGN_DIM/147            ?1315     16?35                16?2                	;0
2696 1327  OP_DATA/137               ?0        $1399                ?0                  	;0
2697 1328  JMP/42                    ?0        ?2659                ?0                  	;0	>>2659
2698 1328  FE_FREE/127               ?0        $1375                ?0                  	;0	<<2658
2699 1331  UNSET_CV/196              ?0        16?36                ?0                  	;0
2700 1332  GOTO/253                  ?0        ?2215                ?1733               	;0
2701 1334  ASSIGN_DIM/147            ?1318     16?11                ?6                  	;0
2702 1334  OP_DATA/137               ?0        1734:'(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())' ?0                  	;0
2703 1336  GOTO/253                  ?0        ?5747                ?1735               	;0
2704 1338  ASSIGN_DIM/147            ?1319     16?11                ?0                  	;0
2705 1338  OP_DATA/137               ?0        1736:'`lines`.`admin_enabled` = 0' ?0                  	;0
2706 1339  GOTO/253                  ?0        ?5747                ?1737               	;0
2707 1341  INIT_FCALL_BY_NAME/59     ?0        ?0                   1738:'intval'       	;1
2708 1341  FETCH_STATIC_PROP_FUNC_ARG/177 $1402=    1740:'rRequest'      1741:'XUI'          	;1
2709 1341  FETCH_DIM_FUNC_ARG/93     $1403=    $1402                1743:'order'        	;1
2710 1341  FETCH_DIM_FUNC_ARG/93     $1404=    $1403                1744:0              	;1
2711 1341  FETCH_DIM_FUNC_ARG/93     $1405=    $1404                1745:'column'       	;1
2712 1341  SEND_VAR_EX/66            ?80       $1405                ?1                  	;0
2713 1341  DO_FCALL_BY_NAME/131      $1406=    ?0                   ?0                  	;0
2714 1341  ASSIGN/38                 ?1325     16?14                $1406               	;0
2715 1343  ASSIGN/38                 $1408=    16?10                1746:array (
)      	;0
2716 1343  ASSIGN/38                 ?1327     16?11                $1408               	;0
2717 1344  ASSIGN_DIM/147            ?1328     16?11                ?2670195408         	;0
2718 1344  OP_DATA/137               ?0        1747:'`lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0' ?0                  	;0
2719 1345  INIT_FCALL_BY_NAME/59     ?0        ?0                   1748:'implode'      	;2
2720 1345  SEND_VAL_EX/116           ?80       1750:','             ?1                  	;0
2721 1345  FETCH_DIM_FUNC_ARG/93     $1412=    16?5                 1751:'reports'      	;2
2722 1345  SEND_VAR_EX/66            ?96       $1412                ?2                  	;0
2723 1345  DO_FCALL_BY_NAME/131      $1413=    ?0                   ?0                  	;0
2724 1345  CONCAT/8                  #1414=    1752:'`lines`.`member_id` IN (' $1413               	;0
2725 1345  CONCAT/8                  #1415=    #1414                1753:')'            	;0
2726 1345  ASSIGN_DIM/147            ?1329     16?11                ?0                  	;0
2727 1345  OP_DATA/137               ?0        #1415                ?0                  	;0
2728 1346  GOTO/253                  ?0        ?4437                ?1754               	;0
2729 1349  INCLUDE_OR_EVAL/73        ?1334     1755:'functions.php' ?0                  	;2
2730 1351  GOTO/253                  ?0        ?3554                ?1756               	;0
2731 1353  GOTO/253                  ?0        ?5223                ?1757               	;0
2732 1355  BOOL_NOT/13               #1417=    16?29                ?0                  	;0
2733 1355  JMPZ/43                   ?0        #1417                ?2735               	;0	>>2735
2734 1356  GOTO/253                  ?0        ?2739                ?1758               	;0
2735 1358  INIT_FCALL_BY_NAME/59     ?0        ?0                   1759:'array_reverse'	;1	<<2733
2736 1358  SEND_VAR_EX/66            ?80       16?70                ?1                  	;0
2737 1358  DO_FCALL_BY_NAME/131      $1418=    ?0                   ?0                  	;0
2738 1358  ASSIGN/38                 ?1337     16?70                $1418               	;0
2739 1360  INIT_FCALL_BY_NAME/59     ?0        ?0                   1761:'count'        	;1
2740 1360  SEND_VAR_EX/66            ?80       16?70                ?1                  	;0
2741 1360  DO_FCALL_BY_NAME/131      $1420=    ?0                   ?0                  	;0
2742 1360  ASSIGN/38                 ?1339     16?62                $1420               	;0
2743 1361  FETCH_STATIC_PROP_R/173   $1422=    1763:'redis'         1764:'XUI'          	;0
2744 1361  INIT_METHOD_CALL/112      ?0        $1422                1766:'mGet'         	;1
2745 1361  SEND_VAR_EX/66            ?80       16?70                ?1                  	;0
2746 1361  DO_FCALL/60               $1423=    ?0                   ?0                  	;0
2747 1361  FE_RESET_R/77             $1424=    $1423                ?2831               	;0
2748 1361  FE_FETCH_R/78             ?0        $1424                16?7                	;2831	>>2831	<<2830
2749 1362  NOP/0                     ?0        ?0                   ?0                  	;1
2750 1362  GOTO/253                  ?0        ?2784                ?1768               	;0
2751 1364  JMPZ/43                   ?0        16?71                ?2754               	;0	>>2754
2752 1365  NOP/0                     ?0        ?0                   ?0                  	;1
2753 1365  GOTO/253                  ?0        ?2780                ?1769               	;0
2754 1367  JMPZ_EX/46                #1425=    16?34                ?2758               	;0	>>2758	<<2751
2755 1367  FETCH_DIM_R/81            $1426=    16?7                 1770:'stream_id'    	;0
2756 1367  IS_NOT_EQUAL/18           #1427=    16?34                $1426               	;0
2757 1367  BOOL/52                   #1425=    #1427                ?0                  	;0
2758 1367  BOOL_NOT/13               #1428=    #1425                ?0                  	;0	<<2754
2759 1367  JMPZ/43                   ?0        #1428                ?2762               	;0	>>2762
2760 1368  NOP/0                     ?0        ?0                   ?0                  	;1
2761 1368  GOTO/253                  ?0        ?2766                ?1771               	;0
2762 1370  POST_DEC/37               #1429=    16?62                ?0                  	;0	<<2759
2763 1370  FREE/70                   ?0        #1429                ?0                  	;0
2764 1371  NOP/0                     ?0        ?0                   ?0                  	;1
2765 1371  GOTO/253                  ?0        ?2782                ?1772               	;0
2766 1373  NOP/0                     ?0        ?0                   ?0                  	;1
2767 1373  GOTO/253                  ?0        ?2768                ?1773               	;0
2768 1375  INIT_FCALL_BY_NAME/59     ?0        ?0                   1774:'in_array'     	;2
2769 1375  FETCH_DIM_FUNC_ARG/93     $1430=    16?7                 1776:'user_id'      	;1
2770 1375  SEND_VAR_EX/66            ?80       $1430                ?1                  	;0
2771 1375  SEND_VAR_EX/66            ?96       16?45                ?2                  	;0
2772 1375  DO_FCALL_BY_NAME/131      $1431=    ?0                   ?0                  	;0
2773 1375  JMPZ/43                   ?0        $1431                ?2776               	;0	>>2776
2774 1376  NOP/0                     ?0        ?0                   ?0                  	;1
2775 1376  GOTO/253                  ?0        ?2780                ?1777               	;0
2776 1378  POST_DEC/37               #1432=    16?62                ?0                  	;0	<<2773
2777 1378  FREE/70                   ?0        #1432                ?0                  	;0
2778 1379  NOP/0                     ?0        ?0                   ?0                  	;1
2779 1379  GOTO/253                  ?0        ?2782                ?1778               	;0
2780 1382  NOP/0                     ?0        ?0                   ?0                  	;1
2781 1382  GOTO/253                  ?0        ?2800                ?1779               	;0
2782 1385  NOP/0                     ?0        ?0                   ?0                  	;1
2783 1385  GOTO/253                  ?0        ?2830                ?1780               	;0
2784 1387  INIT_FCALL_BY_NAME/59     ?0        ?0                   1781:'igbinary_unserialize'	;1
2785 1387  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2786 1387  DO_FCALL_BY_NAME/131      $1433=    ?0                   ?0                  	;0
2787 1387  ASSIGN/38                 ?1352     16?7                 $1433               	;0
2788 1388  INIT_FCALL_BY_NAME/59     ?0        ?0                   1783:'is_array'     	;1
2789 1388  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
2790 1388  DO_FCALL_BY_NAME/131      $1435=    ?0                   ?0                  	;0
2791 1388  JMPZ/43                   ?0        $1435                ?2794               	;0	>>2794
2792 1389  NOP/0                     ?0        ?0                   ?0                  	;1
2793 1389  GOTO/253                  ?0        ?2798                ?1785               	;0
2794 1391  POST_DEC/37               #1436=    16?62                ?0                  	;0	<<2791
2795 1391  FREE/70                   ?0        #1436                ?0                  	;0
2796 1392  NOP/0                     ?0        ?0                   ?0                  	;1
2797 1392  GOTO/253                  ?0        ?2782                ?1786               	;0
2798 1394  NOP/0                     ?0        ?0                   ?0                  	;1
2799 1394  GOTO/253                  ?0        ?2751                ?1787               	;0
2800 1396  FETCH_DIM_R/81            $1438=    16?7                 1789:'uuid'         	;0
2801 1396  ASSIGN_DIM/147            ?1355     16?7                 1788:'activity_id'  	;0
2802 1396  OP_DATA/137               ?0        $1438                ?0                  	;0
2803 1397  FETCH_DIM_R/81            $1440=    16?7                 1791:'user_id'      	;0
2804 1397  JMP_SET/152               #1441=    $1440                ?2810               	;0
2805 1397  FETCH_DIM_R/81            $1442=    16?7                 1792:'hmac_id'      	;0
2806 1397  CONCAT/8                  #1443=    $1442                1793:'_'            	;0
2807 1397  FETCH_DIM_R/81            $1444=    16?7                 1794:'hmac_identifier'	;0
2808 1397  CONCAT/8                  #1445=    #1443                $1444               	;0
2809 1397  QM_ASSIGN/22              #1441=    #1445                ?0                  	;0
2810 1397  ASSIGN_DIM/147            ?1357     16?7                 1790:'identifier'   	;0
2811 1397  OP_DATA/137               ?0        #1441                ?0                  	;0
2812 1398  INIT_FCALL_BY_NAME/59     ?0        ?0                   1796:'time'         	;0
2813 1398  DO_FCALL_BY_NAME/131      $1447=    ?0                   ?0                  	;0
2814 1398  FETCH_DIM_R/81            $1448=    16?7                 1798:'date_start'   	;0
2815 1398  SUB/2                     #1449=    $1447                $1448               	;0
2816 1398  ASSIGN_DIM/147            ?1364     16?7                 1795:'active_time'  	;0
2817 1398  OP_DATA/137               ?0        #1449                ?0                  	;0
2818 1399  FETCH_DIM_R/81            $1452=    16?7                 1803:'server_id'    	;0
2819 1399  FETCH_STATIC_PROP_R/173   $1451=    1800:'rServers'      1801:'XUI'          	;0
2820 1399  FETCH_DIM_R/81            $1453=    $1451                $1452               	;0
2821 1399  FETCH_DIM_R/81            $1454=    $1453                1804:'server_name'  	;0
2822 1399  JMP_SET/152               #1455=    $1454                ?2824               	;0
2823 1399  QM_ASSIGN/22              #1455=    1805:''              ?0                  	;0
2824 1399  ASSIGN_DIM/147            ?1368     16?7                 1799:'server_name'  	;0
2825 1399  OP_DATA/137               ?0        #1455                ?0                  	;0
2826 1400  ASSIGN_DIM/147            ?1374     16?16                ?0                  	;0
2827 1400  OP_DATA/137               ?0        16?7                 ?0                  	;0
2828 1401  NOP/0                     ?0        ?0                   ?0                  	;1
2829 1401  GOTO/253                  ?0        ?2782                ?1806               	;0
2830 1402  JMP/42                    ?0        ?2748                ?0                  	;0	>>2748
2831 1402  FE_FREE/127               ?0        $1424                ?0                  	;0	<<2747
2832 1404  GOTO/253                  ?0        ?3047                ?1807               	;0
2833 1406  FETCH_DIM_R/81            $1457=    16?13                16?14               	;0
2834 1406  CONCAT/8                  #1458=    1808:'ORDER BY '     $1457               	;0
2835 1406  CONCAT/8                  #1459=    #1458                1809:' '            	;0
2836 1406  CONCAT/8                  #1460=    #1459                16?29               	;0
2837 1406  ASSIGN/38                 ?1379     16?30                #1460               	;0
2838 1408  INIT_FCALL_BY_NAME/59     ?0        ?0                   1810:'count'        	;1
2839 1408  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
2840 1408  DO_FCALL_BY_NAME/131      $1462=    ?0                   ?0                  	;0
2841 1408  IS_SMALLER/19             #1463=    1812:0               $1462               	;0
2842 1408  JMPZ/43                   ?0        #1463                ?2844               	;0	>>2844
2843 1409  GOTO/253                  ?0        ?2346                ?1813               	;0
2844 1411  ASSIGN/38                 ?1382     16?31                1814:''             	;0	<<2842
2845 1412  GOTO/253                  ?0        ?2352                ?1815               	;0
2846 1413  GOTO/253                  ?0        ?2346                ?1816               	;0
2847 1415  ASSIGN/38                 ?1383     16?13                1817:array (
  0 => '`id`',
  1 => false,
  2 => '`stream_display_name`',
  3 => '`category_id`',
  4 => '`clients`',
  5 => false,
)	;0
2848 1416  FETCH_STATIC_PROP_IS/176  $1466=    1818:'rRequest'      1819:'XUI'          	;0
2849 1416  ISSET_ISEMPTY_DIM_OBJ/115 #1467=    $1466                1821:'order'        	;33554432
2850 1416  JMPZ_EX/46                #1467=    #1467                ?2860               	;0	>>2860
2851 1416  INIT_FCALL_BY_NAME/59     ?0        ?0                   1822:'strlen'       	;1
2852 1416  FETCH_STATIC_PROP_FUNC_ARG/177 $1468=    1824:'rRequest'      1825:'XUI'          	;1
2853 1416  FETCH_DIM_FUNC_ARG/93     $1469=    $1468                1827:'order'        	;1
2854 1416  FETCH_DIM_FUNC_ARG/93     $1470=    $1469                1828:0              	;1
2855 1416  FETCH_DIM_FUNC_ARG/93     $1471=    $1470                1829:'column'       	;1
2856 1416  SEND_VAR_EX/66            ?80       $1471                ?1                  	;0
2857 1416  DO_FCALL_BY_NAME/131      $1472=    ?0                   ?0                  	;0
2858 1416  IS_SMALLER/19             #1473=    1830:0               $1472               	;0
2859 1416  BOOL/52                   #1467=    #1473                ?0                  	;0
2860 1416  JMPZ/43                   ?0        #1467                ?2862               	;0	>>2862	<<2850
2861 1417  GOTO/253                  ?0        ?2864                ?1831               	;0
2862 1419  ASSIGN/38                 ?1392     16?14                1832:0              	;0	<<2860
2863 1420  GOTO/253                  ?0        ?4949                ?1833               	;0
2864 1422  GOTO/253                  ?0        ?4941                ?1834               	;0
2865 1424  INIT_FCALL_BY_NAME/59     ?0        ?0                   1835:'strlen'       	;1
2866 1424  FETCH_STATIC_PROP_FUNC_ARG/177 $1475=    1837:'rRequest'      1838:'XUI'          	;1
2867 1424  FETCH_DIM_FUNC_ARG/93     $1476=    $1475                1840:'filter'       	;1
2868 1424  SEND_VAR_EX/66            ?80       $1476                ?1                  	;0
2869 1424  DO_FCALL_BY_NAME/131      $1477=    ?0                   ?0                  	;0
2870 1424  IS_SMALLER/19             #1478=    1841:0               $1477               	;0
2871 1424  BOOL_NOT/13               #1479=    #1478                ?0                  	;0
2872 1424  JMPZ/43                   ?0        #1479                ?2874               	;0	>>2874
2873 1425  GOTO/253                  ?0        ?3022                ?1842               	;0
2874 1427  FETCH_STATIC_PROP_R/173   $1480=    1843:'rRequest'      1844:'XUI'          	;0	<<2872
2875 1427  FETCH_DIM_R/81            $1481=    $1480                1846:'filter'       	;0
2876 1427  IS_EQUAL/17               #1482=    $1481                1847:1              	;0
2877 1427  JMPZ/43                   ?0        #1482                ?2879               	;0	>>2879
2878 1428  GOTO/253                  ?0        ?3020                ?1848               	;0
2879 1430  FETCH_STATIC_PROP_R/173   $1483=    1849:'rRequest'      1850:'XUI'          	;0	<<2877
2880 1430  FETCH_DIM_R/81            $1484=    $1483                1852:'filter'       	;0
2881 1430  IS_EQUAL/17               #1485=    $1484                1853:2              	;0
2882 1430  JMPZ/43                   ?0        #1485                ?2884               	;0	>>2884
2883 1431  GOTO/253                  ?0        ?5748                ?1854               	;0
2884 1433  FETCH_STATIC_PROP_R/173   $1486=    1855:'rRequest'      1856:'XUI'          	;0	<<2882
2885 1433  FETCH_DIM_R/81            $1487=    $1486                1858:'filter'       	;0
2886 1433  IS_EQUAL/17               #1488=    $1487                1859:3              	;0
2887 1433  JMPZ/43                   ?0        #1488                ?2889               	;0	>>2889
2888 1434  GOTO/253                  ?0        ?2704                ?1860               	;0
2889 1436  FETCH_STATIC_PROP_R/173   $1489=    1861:'rRequest'      1862:'XUI'          	;0	<<2887
2890 1436  FETCH_DIM_R/81            $1490=    $1489                1864:'filter'       	;0
2891 1436  IS_EQUAL/17               #1491=    $1490                1865:4              	;0
2892 1436  JMPZ/43                   ?0        #1491                ?2894               	;0	>>2894
2893 1437  GOTO/253                  ?0        ?5796                ?1866               	;0
2894 1439  GOTO/253                  ?0        ?5787                ?1867               	;0	<<2892
2895 1441  INIT_FCALL_BY_NAME/59     ?0        ?0                   1868:'strlen'       	;1
2896 1441  FETCH_STATIC_PROP_FUNC_ARG/177 $1492=    1870:'rRequest'      1871:'XUI'          	;1
2897 1441  FETCH_DIM_FUNC_ARG/93     $1493=    $1492                1873:'search'       	;1
2898 1441  FETCH_DIM_FUNC_ARG/93     $1494=    $1493                1874:'value'        	;1
2899 1441  SEND_VAR_EX/66            ?80       $1494                ?1                  	;0
2900 1441  DO_FCALL_BY_NAME/131      $1495=    ?0                   ?0                  	;0
2901 1441  IS_SMALLER/19             #1496=    1875:0               $1495               	;0
2902 1441  BOOL_NOT/13               #1497=    #1496                ?0                  	;0
2903 1441  JMPZ/43                   ?0        #1497                ?2905               	;0	>>2905
2904 1442  GOTO/253                  ?0        ?2922                ?1876               	;0
2905 1444  INIT_FCALL_BY_NAME/59     ?0        ?0                   1877:'range'        	;2	<<2903
2906 1444  SEND_VAL_EX/116           ?80       1879:1               ?1                  	;0
2907 1444  SEND_VAL_EX/116           ?96       1880:3               ?2                  	;0
2908 1444  DO_FCALL_BY_NAME/131      $1498=    ?0                   ?0                  	;0
2909 1444  FE_RESET_R/77             $1499=    $1498                ?2919               	;0
2910 1444  FE_FETCH_R/78             ?0        $1499                16?9                	;2919	>>2919	<<2918
2911 1445  FETCH_STATIC_PROP_R/173   $1501=    1881:'rRequest'      1882:'XUI'          	;0
2912 1445  FETCH_DIM_R/81            $1502=    $1501                1884:'search'       	;0
2913 1445  FETCH_DIM_R/81            $1503=    $1502                1885:'value'        	;0
2914 1445  CONCAT/8                  #1504=    1886:'%'             $1503               	;0
2915 1445  CONCAT/8                  #1505=    #1504                1887:'%'            	;0
2916 1445  ASSIGN_DIM/147            ?1418     16?10                ?1660056344         	;0
2917 1445  OP_DATA/137               ?0        #1505                ?0                  	;0
2918 1446  JMP/42                    ?0        ?2910                ?0                  	;0	>>2910
2919 1446  FE_FREE/127               ?0        $1499                ?0                  	;0	<<2909
2920 1449  ASSIGN_DIM/147            ?1424     16?11                ?2                  	;0
2921 1449  OP_DATA/137               ?0        1888:'(`streams`.`id` LIKE ? OR `stream_display_name` LIKE ? OR `streams_series`.`title` LIKE ?)' ?0                  	;0
2922 1451  GOTO/253                  ?0        ?3442                ?1889               	;0
2923 1453  ASSIGN/38                 ?1425     16?35                1890:array (
)      	;0
2924 1454  INIT_STATIC_METHOD_CALL/113 ?0        1891:'XUI'           1893:'a96ab74f1921d4Ad'	;2
2925 1454  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
2926 1454  SEND_VAL_EX/116           ?96       1895:false           ?2                  	;0
2927 1454  DO_FCALL/60               $1508=    ?0                   ?0                  	;0
2928 1454  ASSIGN/38                 ?1427     16?36                $1508               	;0
2929 1455  INIT_FCALL_BY_NAME/59     ?0        ?0                   1896:'array_keys'   	;1
2930 1455  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
2931 1455  DO_FCALL_BY_NAME/131      $1510=    ?0                   ?0                  	;0
2932 1455  FE_RESET_R/77             $1511=    $1510                ?2941               	;0
2933 1455  FE_FETCH_R/78             ?0        $1511                16?2                	;2941	>>2941	<<2940
2934 1456  INIT_FCALL_BY_NAME/59     ?0        ?0                   1898:'count'        	;1
2935 1456  FETCH_DIM_FUNC_ARG/93     $1513=    16?36                16?2                	;1
2936 1456  SEND_VAR_EX/66            ?80       $1513                ?1                  	;0
2937 1456  DO_FCALL_BY_NAME/131      $1514=    ?0                   ?0                  	;0
2938 1456  ASSIGN_DIM/147            ?1430     16?35                16?2                	;0
2939 1456  OP_DATA/137               ?0        $1514                ?0                  	;0
2940 1457  JMP/42                    ?0        ?2933                ?0                  	;0	>>2933
2941 1457  FE_FREE/127               ?0        $1511                ?0                  	;0	<<2932
2942 1460  UNSET_CV/196              ?0        16?36                ?0                  	;0
2943 1461  GOTO/253                  ?0        ?3642                ?1900               	;0
2944 1463  INIT_METHOD_CALL/112      ?0        16?3                 1901:'query'        	;1
2945 1463  INIT_FCALL_BY_NAME/59     ?0        ?0                   1903:'implode'      	;2
2946 1463  SEND_VAL_EX/116           ?80       1905:'\',\''         ?1                  	;0
2947 1463  SEND_VAR_EX/66            ?96       16?40                ?2                  	;0
2948 1463  DO_FCALL_BY_NAME/131      $1515=    ?0                   ?0                  	;0
2949 1463  CONCAT/8                  #1516=    1906:'SELECT `uuid`, `divergence` FROM `lines_divergence` WHERE `uuid` IN (\'' $1515               	;0
2950 1463  CONCAT/8                  #1517=    #1516                1907:'\');'         	;0
2951 1463  SEND_VAL_EX/116           ?80       #1517                ?1                  	;0
2952 1463  DO_FCALL/60               ?1436     ?0                   ?0                  	;0
2953 1464  INIT_METHOD_CALL/112      ?0        16?3                 1908:'get_rows'     	;0
2954 1464  DO_FCALL/60               $1519=    ?0                   ?0                  	;0
2955 1464  FE_RESET_R/77             $1520=    $1519                ?2962               	;0
2956 1464  FE_FETCH_R/78             ?0        $1520                16?7                	;2962	>>2962	<<2961
2957 1465  FETCH_DIM_R/81            $1521=    16?7                 1910:'uuid'         	;0
2958 1465  FETCH_DIM_R/81            $1523=    16?7                 1911:'divergence'   	;0
2959 1465  ASSIGN_DIM/147            ?1440     16?64                $1521               	;0
2960 1465  OP_DATA/137               ?0        $1523                ?0                  	;0
2961 1466  JMP/42                    ?0        ?2956                ?0                  	;0	>>2956
2962 1466  FE_FREE/127               ?0        $1520                ?0                  	;0	<<2955
2963 1470  ASSIGN/38                 ?1442     16?63                1912:0              	;0
2964 1471  GOTO/253                  ?0        ?2182                ?1913               	;0
2965 1473  ASSIGN/38                 ?1443     16?6                 1914:array (
)      	;0
2966 1474  FE_RESET_R/77             $1526=    16?16                ?2980               	;0
2967 1474  FE_FETCH_R/78             ?0        $1526                16?7                	;2980	>>2980	<<2979
2968 1475  FETCH_DIM_R/81            $1527=    16?7                 1915:'id'           	;0
2969 1475  BOOL_NOT/13               #1528=    $1527                ?0                  	;0
2970 1475  JMPZ/43                   ?0        #1528                ?2973               	;0	>>2973
2971 1476  NOP/0                     ?0        ?0                   ?0                  	;1
2972 1476  GOTO/253                  ?0        ?2979                ?1916               	;0
2973 1478  INIT_FCALL_BY_NAME/59     ?0        ?0                   1917:'intval'       	;1	<<2970
2974 1478  FETCH_DIM_FUNC_ARG/93     $1530=    16?7                 1919:'id'           	;1
2975 1478  SEND_VAR_EX/66            ?80       $1530                ?1                  	;0
2976 1478  DO_FCALL_BY_NAME/131      $1531=    ?0                   ?0                  	;0
2977 1478  ASSIGN_DIM/147            ?1447     16?6                 ?4397406            	;0
2978 1478  OP_DATA/137               ?0        $1531                ?0                  	;0
2979 1480  JMP/42                    ?0        ?2967                ?0                  	;0	>>2967
2980 1480  FE_FREE/127               ?0        $1526                ?0                  	;0	<<2966
2981 1483  INIT_FCALL_BY_NAME/59     ?0        ?0                   1920:'count'        	;1
2982 1483  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
2983 1483  DO_FCALL_BY_NAME/131      $1532=    ?0                   ?0                  	;0
2984 1483  IS_SMALLER/19             #1533=    1922:0               $1532               	;0
2985 1483  BOOL_NOT/13               #1534=    #1533                ?0                  	;0
2986 1483  JMPZ/43                   ?0        #1534                ?2988               	;0	>>2988
2987 1484  GOTO/253                  ?0        ?3642                ?1923               	;0
2988 1486  FETCH_STATIC_PROP_R/173   $1535=    1924:'rSettings'     1925:'XUI'          	;0	<<2986
2989 1486  FETCH_DIM_R/81            $1536=    $1535                1927:'redis_handler'	;0
2990 1486  BOOL_NOT/13               #1537=    $1536                ?0                  	;0
2991 1486  JMPZ/43                   ?0        #1537                ?2993               	;0	>>2993
2992 1487  GOTO/253                  ?0        ?3642                ?1928               	;0
2993 1489  GOTO/253                  ?0        ?2923                ?1929               	;0	<<2991
2994 1491  FETCH_STATIC_PROP_IS/176  $1538=    1930:'rRequest'      1931:'XUI'          	;0
2995 1491  ISSET_ISEMPTY_DIM_OBJ/115 #1539=    $1538                1933:'order'        	;33554432
2996 1491  JMPZ_EX/46                #1539=    #1539                ?3006               	;0	>>3006
2997 1491  INIT_FCALL_BY_NAME/59     ?0        ?0                   1934:'strlen'       	;1
2998 1491  FETCH_STATIC_PROP_FUNC_ARG/177 $1540=    1936:'rRequest'      1937:'XUI'          	;1
2999 1491  FETCH_DIM_FUNC_ARG/93     $1541=    $1540                1939:'order'        	;1
3000 1491  FETCH_DIM_FUNC_ARG/93     $1542=    $1541                1940:0              	;1
3001 1491  FETCH_DIM_FUNC_ARG/93     $1543=    $1542                1941:'column'       	;1
3002 1491  SEND_VAR_EX/66            ?80       $1543                ?1                  	;0
3003 1491  DO_FCALL_BY_NAME/131      $1544=    ?0                   ?0                  	;0
3004 1491  IS_SMALLER/19             #1545=    1942:0               $1544               	;0
3005 1491  BOOL/52                   #1539=    #1545                ?0                  	;0
3006 1491  JMPZ/43                   ?0        #1539                ?3008               	;0	>>3008	<<2996
3007 1492  GOTO/253                  ?0        ?3010                ?1943               	;0
3008 1494  ASSIGN/38                 ?1464     16?14                1944:0              	;0	<<3006
3009 1495  GOTO/253                  ?0        ?2361                ?1945               	;0
3010 1497  INIT_FCALL_BY_NAME/59     ?0        ?0                   1946:'intval'       	;1
3011 1497  FETCH_STATIC_PROP_FUNC_ARG/177 $1547=    1948:'rRequest'      1949:'XUI'          	;1
3012 1497  FETCH_DIM_FUNC_ARG/93     $1548=    $1547                1951:'order'        	;1
3013 1497  FETCH_DIM_FUNC_ARG/93     $1549=    $1548                1952:0              	;1
3014 1497  FETCH_DIM_FUNC_ARG/93     $1550=    $1549                1953:'column'       	;1
3015 1497  SEND_VAR_EX/66            ?80       $1550                ?1                  	;0
3016 1497  DO_FCALL_BY_NAME/131      $1551=    ?0                   ?0                  	;0
3017 1497  ASSIGN/38                 ?1470     16?14                $1551               	;0
3018 1498  GOTO/253                  ?0        ?2361                ?1954               	;0
3019 1500  GOTO/253                  ?0        ?3022                ?1955               	;0
3020 1502  ASSIGN_DIM/147            ?1471     16?11                ?2670195408         	;0
3021 1502  OP_DATA/137               ?0        1956:'(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))' ?0                  	;0
3022 1505  GOTO/253                  ?0        ?1150                ?1957               	;0
3023 1508  INIT_FCALL_BY_NAME/59     ?0        ?0                   1958:'implode'      	;2
3024 1508  SEND_VAL_EX/116           ?80       1960:' AND '         ?1                  	;0
3025 1508  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
3026 1508  DO_FCALL_BY_NAME/131      $1554=    ?0                   ?0                  	;0
3027 1508  CONCAT/8                  #1555=    1961:'WHERE '        $1554               	;0
3028 1508  ASSIGN/38                 ?1474     16?31                #1555               	;0
3029 1510  FETCH_DIM_R/81            $1557=    16?13                16?14               	;0
3030 1510  BOOL_NOT/13               #1558=    $1557                ?0                  	;0
3031 1510  JMPZ/43                   ?0        #1558                ?3033               	;0	>>3033
3032 1511  GOTO/253                  ?0        ?840                 ?1962               	;0
3033 1513  INIT_FCALL_BY_NAME/59     ?0        ?0                   1963:'strtolower'   	;1	<<3031
3034 1513  FETCH_STATIC_PROP_FUNC_ARG/177 $1559=    1965:'rRequest'      1966:'XUI'          	;1
3035 1513  FETCH_DIM_FUNC_ARG/93     $1560=    $1559                1968:'order'        	;1
3036 1513  FETCH_DIM_FUNC_ARG/93     $1561=    $1560                1969:0              	;1
3037 1513  FETCH_DIM_FUNC_ARG/93     $1562=    $1561                1970:'dir'          	;1
3038 1513  SEND_VAR_EX/66            ?80       $1562                ?1                  	;0
3039 1513  DO_FCALL_BY_NAME/131      $1563=    ?0                   ?0                  	;0
3040 1513  IS_IDENTICAL/15           #1564=    $1563                1971:'desc'         	;0
3041 1513  JMPZ/43                   ?0        #1564                ?3044               	;0	>>3044
3042 1513  QM_ASSIGN/22              #1565=    1972:'desc'          ?0                  	;0
3043 1513  JMP/42                    ?0        ?3045                ?0                  	;0	>>3045
3044 1513  QM_ASSIGN/22              #1565=    1973:'asc'           ?0                  	;0	<<3041
3045 1513  ASSIGN/38                 ?1484     16?29                #1565               	;0	<<3043
3046 1514  GOTO/253                  ?0        ?835                 ?1974               	;0
3047 1517  ASSIGN/38                 ?1485     16?13                1975:array (
  0 => 'uuid',
  1 => 'divergence',
  2 => 'identifier',
  3 => 'stream_display_name',
  4 => 'user_agent',
  5 => 'isp',
  6 => 'user_ip',
  7 => 'active_time',
  8 => 'container',
  9 => NULL,
)	;0
3048 1518  FETCH_STATIC_PROP_IS/176  $1568=    1976:'rRequest'      1977:'XUI'          	;0
3049 1518  ISSET_ISEMPTY_DIM_OBJ/115 #1569=    $1568                1979:'order'        	;33554432
3050 1518  JMPZ_EX/46                #1569=    #1569                ?3060               	;0	>>3060
3051 1518  INIT_FCALL_BY_NAME/59     ?0        ?0                   1980:'strlen'       	;1
3052 1518  FETCH_STATIC_PROP_FUNC_ARG/177 $1570=    1982:'rRequest'      1983:'XUI'          	;1
3053 1518  FETCH_DIM_FUNC_ARG/93     $1571=    $1570                1985:'order'        	;1
3054 1518  FETCH_DIM_FUNC_ARG/93     $1572=    $1571                1986:0              	;1
3055 1518  FETCH_DIM_FUNC_ARG/93     $1573=    $1572                1987:'column'       	;1
3056 1518  SEND_VAR_EX/66            ?80       $1573                ?1                  	;0
3057 1518  DO_FCALL_BY_NAME/131      $1574=    ?0                   ?0                  	;0
3058 1518  IS_SMALLER/19             #1575=    1988:0               $1574               	;0
3059 1518  BOOL/52                   #1569=    #1575                ?0                  	;0
3060 1518  JMPZ/43                   ?0        #1569                ?3062               	;0	>>3062	<<3050
3061 1519  GOTO/253                  ?0        ?4703                ?1989               	;0
3062 1521  ASSIGN/38                 ?1494     16?14                1990:0              	;0	<<3060
3063 1522  GOTO/253                  ?0        ?4711                ?1991               	;0
3064 1523  GOTO/253                  ?0        ?4703                ?1992               	;0
3065 1525  INIT_METHOD_CALL/112      ?0        16?3                 1993:'query'        	;1
3066 1525  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
3067 1525  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
3068 1525  DO_FCALL/60               ?1495     ?0                   ?0                  	;0
3069 1526  INIT_METHOD_CALL/112      ?0        16?3                 1995:'num_rows'     	;0
3070 1526  DO_FCALL/60               $1578=    ?0                   ?0                  	;0
3071 1526  IS_SMALLER/19             #1579=    1997:0               $1578               	;0
3072 1526  BOOL_NOT/13               #1580=    #1579                ?0                  	;0
3073 1526  JMPZ/43                   ?0        #1580                ?3075               	;0	>>3075
3074 1527  GOTO/253                  ?0        ?130                 ?1998               	;0
3075 1529  INIT_METHOD_CALL/112      ?0        16?3                 1999:'get_rows'     	;0	<<3073
3076 1529  DO_FCALL/60               $1581=    ?0                   ?0                  	;0
3077 1529  ASSIGN/38                 ?1500     16?16                $1581               	;0
3078 1530  FETCH_STATIC_PROP_R/173   $1583=    2001:'rSettings'     2002:'XUI'          	;0
3079 1530  FETCH_DIM_R/81            $1584=    $1583                2004:'redis_handler'	;0
3080 1530  BOOL_NOT/13               #1585=    $1584                ?0                  	;0
3081 1530  JMPZ/43                   ?0        #1585                ?3083               	;0	>>3083
3082 1531  GOTO/253                  ?0        ?4991                ?2005               	;0
3083 1533  ASSIGN/38                 $1586=    16?45                2006:array (
)      	;0	<<3081
3084 1533  ASSIGN/38                 ?1505     16?35                $1586               	;0
3085 1534  GOTO/253                  ?0        ?4757                ?2007               	;0
3086 1536  INIT_METHOD_CALL/112      ?0        16?3                 2008:'get_rows'     	;0
3087 1536  DO_FCALL/60               $1588=    ?0                   ?0                  	;0
3088 1536  ASSIGN/38                 ?1507     16?16                $1588               	;0
3089 1537  ASSIGN/38                 ?1508     16?6                 2010:array (
)      	;0
3090 1538  FE_RESET_R/77             $1591=    16?16                ?3104               	;0
3091 1538  FE_FETCH_R/78             ?0        $1591                16?7                	;3104	>>3104	<<3103
3092 1539  FETCH_DIM_R/81            $1592=    16?7                 2011:'id'           	;0
3093 1539  BOOL_NOT/13               #1593=    $1592                ?0                  	;0
3094 1539  JMPZ/43                   ?0        #1593                ?3097               	;0	>>3097
3095 1540  NOP/0                     ?0        ?0                   ?0                  	;1
3096 1540  GOTO/253                  ?0        ?3103                ?2012               	;0
3097 1542  INIT_FCALL_BY_NAME/59     ?0        ?0                   2013:'intval'       	;1	<<3094
3098 1542  FETCH_DIM_FUNC_ARG/93     $1595=    16?7                 2015:'id'           	;1
3099 1542  SEND_VAR_EX/66            ?80       $1595                ?1                  	;0
3100 1542  DO_FCALL_BY_NAME/131      $1596=    ?0                   ?0                  	;0
3101 1542  ASSIGN_DIM/147            ?1512     16?6                 ?4397406            	;0
3102 1542  OP_DATA/137               ?0        $1596                ?0                  	;0
3103 1544  JMP/42                    ?0        ?3091                ?0                  	;0	>>3091
3104 1544  FE_FREE/127               ?0        $1591                ?0                  	;0	<<3090
3105 1547  INIT_FCALL_BY_NAME/59     ?0        ?0                   2016:'count'        	;1
3106 1547  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
3107 1547  DO_FCALL_BY_NAME/131      $1597=    ?0                   ?0                  	;0
3108 1547  IS_SMALLER/19             #1598=    2018:0               $1597               	;0
3109 1547  BOOL_NOT/13               #1599=    #1598                ?0                  	;0
3110 1547  JMPZ/43                   ?0        #1599                ?3112               	;0	>>3112
3111 1548  GOTO/253                  ?0        ?5243                ?2019               	;0
3112 1550  GOTO/253                  ?0        ?5608                ?2020               	;0	<<3110
3113 1553  ASSIGN_DIM/147            ?1518     16?11                ?4397406            	;0
3114 1553  OP_DATA/137               ?0        2021:'`type` = 2'    ?0                  	;0
3115 1554  INIT_FCALL_BY_NAME/59     ?0        ?0                   2022:'strlen'       	;1
3116 1554  FETCH_STATIC_PROP_FUNC_ARG/177 $1601=    2024:'rRequest'      2025:'XUI'          	;1
3117 1554  FETCH_DIM_FUNC_ARG/93     $1602=    $1601                2027:'search'       	;1
3118 1554  FETCH_DIM_FUNC_ARG/93     $1603=    $1602                2028:'value'        	;1
3119 1554  SEND_VAR_EX/66            ?80       $1603                ?1                  	;0
3120 1554  DO_FCALL_BY_NAME/131      $1604=    ?0                   ?0                  	;0
3121 1554  IS_SMALLER/19             #1605=    2029:0               $1604               	;0
3122 1554  BOOL_NOT/13               #1606=    #1605                ?0                  	;0
3123 1554  JMPZ/43                   ?0        #1606                ?3125               	;0	>>3125
3124 1555  GOTO/253                  ?0        ?3143                ?2030               	;0
3125 1557  INIT_FCALL_BY_NAME/59     ?0        ?0                   2031:'range'        	;2	<<3123
3126 1557  SEND_VAL_EX/116           ?80       2033:1               ?1                  	;0
3127 1557  SEND_VAL_EX/116           ?96       2034:2               ?2                  	;0
3128 1557  DO_FCALL_BY_NAME/131      $1607=    ?0                   ?0                  	;0
3129 1557  FE_RESET_R/77             $1608=    $1607                ?3139               	;0
3130 1557  FE_FETCH_R/78             ?0        $1608                16?9                	;3139	>>3139	<<3138
3131 1558  FETCH_STATIC_PROP_R/173   $1610=    2035:'rRequest'      2036:'XUI'          	;0
3132 1558  FETCH_DIM_R/81            $1611=    $1610                2038:'search'       	;0
3133 1558  FETCH_DIM_R/81            $1612=    $1611                2039:'value'        	;0
3134 1558  CONCAT/8                  #1613=    2040:'%'             $1612               	;0
3135 1558  CONCAT/8                  #1614=    #1613                2041:'%'            	;0
3136 1558  ASSIGN_DIM/147            ?1527     16?10                ?1660081960         	;0
3137 1558  OP_DATA/137               ?0        #1614                ?0                  	;0
3138 1559  JMP/42                    ?0        ?3130                ?0                  	;0	>>3130
3139 1559  FE_FREE/127               ?0        $1608                ?0                  	;0	<<3129
3140 1562  GOTO/253                  ?0        ?3141                ?2042               	;0
3141 1564  ASSIGN_DIM/147            ?1533     16?11                ?2                  	;0
3142 1564  OP_DATA/137               ?0        2043:'(`id` LIKE ? OR `stream_display_name` LIKE ?)' ?0                  	;0
3143 1566  INIT_FCALL_BY_NAME/59     ?0        ?0                   2044:'strlen'       	;1
3144 1566  FETCH_STATIC_PROP_FUNC_ARG/177 $1616=    2046:'rRequest'      2047:'XUI'          	;1
3145 1566  FETCH_DIM_FUNC_ARG/93     $1617=    $1616                2049:'category'     	;1
3146 1566  SEND_VAR_EX/66            ?80       $1617                ?1                  	;0
3147 1566  DO_FCALL_BY_NAME/131      $1618=    ?0                   ?0                  	;0
3148 1566  IS_SMALLER/19             #1619=    2050:0               $1618               	;0
3149 1566  BOOL_NOT/13               #1620=    #1619                ?0                  	;0
3150 1566  JMPZ/43                   ?0        #1620                ?3152               	;0	>>3152
3151 1567  GOTO/253                  ?0        ?776                 ?2051               	;0
3152 1569  ASSIGN_DIM/147            ?1539     16?11                ?4397406            	;0	<<3150
3153 1569  OP_DATA/137               ?0        2052:'JSON_CONTAINS(`category_id`, ?, \'$\')' ?0                  	;0
3154 1570  FETCH_STATIC_PROP_R/173   $1623=    2053:'rRequest'      2054:'XUI'          	;0
3155 1570  FETCH_DIM_R/81            $1624=    $1623                2056:'category'     	;0
3156 1570  ASSIGN_DIM/147            ?1540     16?10                ?0                  	;0
3157 1570  OP_DATA/137               ?0        $1624                ?0                  	;0
3158 1571  GOTO/253                  ?0        ?776                 ?2057               	;0
3159 1574  INIT_FCALL_BY_NAME/59     ?0        ?0                   2058:'count'        	;1
3160 1574  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
3161 1574  DO_FCALL_BY_NAME/131      $1625=    ?0                   ?0                  	;0
3162 1574  IS_SMALLER/19             #1626=    2060:0               $1625               	;0
3163 1574  BOOL_NOT/13               #1627=    #1626                ?0                  	;0
3164 1574  JMPZ/43                   ?0        #1627                ?3166               	;0	>>3166
3165 1575  GOTO/253                  ?0        ?3183                ?2061               	;0
3166 1577  INIT_STATIC_METHOD_CALL/113 ?0        2062:'XUI'           2064:'a96AB74f1921d4Ad'	;2	<<3164
3167 1577  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
3168 1577  SEND_VAL_EX/116           ?96       2066:false           ?2                  	;0
3169 1577  DO_FCALL/60               $1628=    ?0                   ?0                  	;0
3170 1577  FE_RESET_R/77             $1629=    $1628                ?3182               	;0
3171 1577  FE_FETCH_R/78             #1630=    $1629                16?38               	;3182	>>3182	<<3181
3172 1577  ASSIGN/38                 ?1549     16?2                 #1630               	;0
3173 1578  FE_RESET_R/77             $1632=    16?38                ?3180               	;0
3174 1578  FE_FETCH_R/78             ?0        $1632                16?39               	;3180	>>3180	<<3179
3175 1579  FETCH_DIM_R/81            $1633=    16?39                2067:'stream_id'    	;0
3176 1579  FETCH_DIM_RW/87           $1634=    16?35                $1633               	;0
3177 1579  POST_INC/36               #1635=    $1634                ?0                  	;0
3178 1579  FREE/70                   ?0        #1635                ?0                  	;0
3179 1580  JMP/42                    ?0        ?3174                ?0                  	;0	>>3174
3180 1580  FE_FREE/127               ?0        $1632                ?0                  	;0	<<3173
3181 1583  JMP/42                    ?0        ?3171                ?0                  	;0	>>3171
3182 1583  FE_FREE/127               ?0        $1629                ?0                  	;0	<<3170
3183 1587  GOTO/253                  ?0        ?2398                ?2068               	;0
3184 1589  ASSIGN/38                 ?1554     16?31                2069:''             	;0
3185 1590  GOTO/253                  ?0        ?3192                ?2070               	;0
3186 1592  INIT_FCALL_BY_NAME/59     ?0        ?0                   2071:'implode'      	;2
3187 1592  SEND_VAL_EX/116           ?80       2073:' AND '         ?1                  	;0
3188 1592  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
3189 1592  DO_FCALL_BY_NAME/131      $1637=    ?0                   ?0                  	;0
3190 1592  CONCAT/8                  #1638=    2074:'WHERE '        $1637               	;0
3191 1592  ASSIGN/38                 ?1557     16?31                #1638               	;0
3192 1594  GOTO/253                  ?0        ?4410                ?2075               	;0
3193 1597  INIT_FCALL_BY_NAME/59     ?0        ?0                   2076:'intval'       	;1
3194 1597  FETCH_STATIC_PROP_FUNC_ARG/177 $1640=    2078:'rRequest'      2079:'XUI'          	;1
3195 1597  FETCH_DIM_FUNC_ARG/93     $1641=    $1640                2081:'order'        	;1
3196 1597  FETCH_DIM_FUNC_ARG/93     $1642=    $1641                2082:0              	;1
3197 1597  FETCH_DIM_FUNC_ARG/93     $1643=    $1642                2083:'column'       	;1
3198 1597  SEND_VAR_EX/66            ?80       $1643                ?1                  	;0
3199 1597  DO_FCALL_BY_NAME/131      $1644=    ?0                   ?0                  	;0
3200 1597  ASSIGN/38                 ?1563     16?14                $1644               	;0
3201 1599  ASSIGN/38                 $1646=    16?10                2084:array (
)      	;0
3202 1599  ASSIGN/38                 ?1565     16?11                $1646               	;0
3203 1600  INIT_FCALL_BY_NAME/59     ?0        ?0                   2085:'implode'      	;2
3204 1600  SEND_VAL_EX/116           ?80       2087:','             ?1                  	;0
3205 1600  FETCH_DIM_FUNC_ARG/93     $1649=    16?5                 2088:'reports'      	;2
3206 1600  SEND_VAR_EX/66            ?96       $1649                ?2                  	;0
3207 1600  DO_FCALL_BY_NAME/131      $1650=    ?0                   ?0                  	;0
3208 1600  CONCAT/8                  #1651=    2089:'`users_logs`.`owner` IN (' $1650               	;0
3209 1600  CONCAT/8                  #1652=    #1651                2090:')'            	;0
3210 1600  ASSIGN_DIM/147            ?1566     16?11                ?2670195408         	;0
3211 1600  OP_DATA/137               ?0        #1652                ?0                  	;0
3212 1601  GOTO/253                  ?0        ?4675                ?2091               	;0
3213 1603  INIT_METHOD_CALL/112      ?0        16?3                 2092:'get_rows'     	;0
3214 1603  DO_FCALL/60               $1653=    ?0                   ?0                  	;0
3215 1603  FE_RESET_R/77             $1654=    $1653                ?3221               	;0
3216 1603  FE_FETCH_R/78             ?0        $1654                16?7                	;3221	>>3221	<<3220
3217 1604  FETCH_DIM_R/81            $1656=    16?7                 2094:'id'           	;0
3218 1604  ASSIGN_DIM/147            ?1573     16?45                ?4414262            	;0
3219 1604  OP_DATA/137               ?0        $1656                ?0                  	;0
3220 1605  JMP/42                    ?0        ?3216                ?0                  	;0	>>3216
3221 1605  FE_FREE/127               ?0        $1654                ?0                  	;0	<<3215
3222 1608  INIT_FCALL_BY_NAME/59     ?0        ?0                   2095:'count'        	;1
3223 1608  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
3224 1608  DO_FCALL_BY_NAME/131      $1657=    ?0                   ?0                  	;0
3225 1608  IS_SMALLER/19             #1658=    2097:0               $1657               	;0
3226 1608  BOOL_NOT/13               #1659=    #1658                ?0                  	;0
3227 1608  JMPZ/43                   ?0        #1659                ?3229               	;0	>>3229
3228 1609  GOTO/253                  ?0        ?4010                ?2098               	;0
3229 1611  INIT_STATIC_METHOD_CALL/113 ?0        2099:'XUI'           2101:'a96Ab74f1921D4ad'	;2	<<3227
3230 1611  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
3231 1611  SEND_VAL_EX/116           ?96       2103:false           ?2                  	;0
3232 1611  DO_FCALL/60               $1660=    ?0                   ?0                  	;0
3233 1611  FE_RESET_R/77             $1661=    $1660                ?3245               	;0
3234 1611  FE_FETCH_R/78             #1662=    $1661                16?38               	;3245	>>3245	<<3244
3235 1611  ASSIGN/38                 ?1581     16?2                 #1662               	;0
3236 1612  FE_RESET_R/77             $1664=    16?38                ?3243               	;0
3237 1612  FE_FETCH_R/78             ?0        $1664                16?39               	;3243	>>3243	<<3242
3238 1613  FETCH_DIM_R/81            $1665=    16?39                2104:'stream_id'    	;0
3239 1613  FETCH_DIM_RW/87           $1666=    16?35                $1665               	;0
3240 1613  POST_INC/36               #1667=    $1666                ?0                  	;0
3241 1613  FREE/70                   ?0        #1667                ?0                  	;0
3242 1614  JMP/42                    ?0        ?3237                ?0                  	;0	>>3237
3243 1614  FE_FREE/127               ?0        $1664                ?0                  	;0	<<3236
3244 1617  JMP/42                    ?0        ?3234                ?0                  	;0	>>3234
3245 1617  FE_FREE/127               ?0        $1661                ?0                  	;0	<<3233
3246 1620  GOTO/253                  ?0        ?4010                ?2105               	;0
3247 1623  INIT_FCALL_BY_NAME/59     ?0        ?0                   2106:'implode'      	;2
3248 1623  SEND_VAL_EX/116           ?80       2108:' AND '         ?1                  	;0
3249 1623  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
3250 1623  DO_FCALL_BY_NAME/131      $1668=    ?0                   ?0                  	;0
3251 1623  CONCAT/8                  #1669=    2109:'WHERE '        $1668               	;0
3252 1623  ASSIGN/38                 ?1588     16?31                #1669               	;0
3253 1625  FETCH_DIM_R/81            $1671=    16?13                16?14               	;0
3254 1625  BOOL_NOT/13               #1672=    $1671                ?0                  	;0
3255 1625  JMPZ/43                   ?0        #1672                ?3257               	;0	>>3257
3256 1626  GOTO/253                  ?0        ?6566                ?2110               	;0
3257 1628  INIT_FCALL_BY_NAME/59     ?0        ?0                   2111:'strtolower'   	;1	<<3255
3258 1628  FETCH_STATIC_PROP_FUNC_ARG/177 $1673=    2113:'rRequest'      2114:'XUI'          	;1
3259 1628  FETCH_DIM_FUNC_ARG/93     $1674=    $1673                2116:'order'        	;1
3260 1628  FETCH_DIM_FUNC_ARG/93     $1675=    $1674                2117:0              	;1
3261 1628  FETCH_DIM_FUNC_ARG/93     $1676=    $1675                2118:'dir'          	;1
3262 1628  SEND_VAR_EX/66            ?80       $1676                ?1                  	;0
3263 1628  DO_FCALL_BY_NAME/131      $1677=    ?0                   ?0                  	;0
3264 1628  IS_IDENTICAL/15           #1678=    $1677                2119:'desc'         	;0
3265 1628  JMPZ/43                   ?0        #1678                ?3268               	;0	>>3268
3266 1628  QM_ASSIGN/22              #1679=    2120:'desc'          ?0                  	;0
3267 1628  JMP/42                    ?0        ?3269                ?0                  	;0	>>3269
3268 1628  QM_ASSIGN/22              #1679=    2121:'asc'           ?0                  	;0	<<3265
3269 1628  ASSIGN/38                 ?1598     16?29                #1679               	;0	<<3267
3270 1629  GOTO/253                  ?0        ?6561                ?2122               	;0
3271 1631  GOTO/253                  ?0        ?3285                ?2123               	;0
3272 1633  INIT_FCALL_BY_NAME/59     ?0        ?0                   2124:'implode'      	;2
3273 1633  SEND_VAL_EX/116           ?80       2126:','             ?1                  	;0
3274 1633  INIT_FCALL_BY_NAME/59     ?0        ?0                   2127:'array_map'    	;2
3275 1633  SEND_VAL_EX/116           ?80       2129:'intval'        ?1                  	;0
3276 1633  FETCH_DIM_FUNC_ARG/93     $1682=    16?0                 2130:'stream_ids'   	;2
3277 1633  SEND_VAR_EX/66            ?96       $1682                ?2                  	;0
3278 1633  DO_FCALL_BY_NAME/131      $1683=    ?0                   ?0                  	;0
3279 1633  SEND_VAR_NO_REF_EX/50     ?96       $1683                ?2                  	;0
3280 1633  DO_FCALL_BY_NAME/131      $1684=    ?0                   ?0                  	;0
3281 1633  CONCAT/8                  #1685=    2131:'`streams`.`id` IN (' $1684               	;0
3282 1633  CONCAT/8                  #1686=    #1685                2132:')'            	;0
3283 1633  ASSIGN_DIM/147            ?1599     16?11                ?2670195408         	;0
3284 1633  OP_DATA/137               ?0        #1686                ?0                  	;0
3285 1635  ASSIGN_DIM/147            ?1605     16?11                ?0                  	;0
3286 1635  OP_DATA/137               ?0        2133:'`type` = 5'    ?0                  	;0
3287 1636  GOTO/253                  ?0        ?2895                ?2134               	;0
3288 1638  ASSIGN_DIM/147            ?1606     16?11                ?0                  	;0
3289 1638  OP_DATA/137               ?0        2135:'`lines`.`enabled` = 0' ?0                  	;0
3290 1640  GOTO/253                  ?0        ?5633                ?2136               	;0
3291 1642  ASSIGN_DIM/147            ?1607     16?11                ?0                  	;0
3292 1642  OP_DATA/137               ?0        2137:'(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))' ?0                  	;0
3293 1643  GOTO/253                  ?0        ?5633                ?2138               	;0
3294 1645  FETCH_STATIC_PROP_R/173   $1691=    2139:'rRequest'      2140:'XUI'          	;0
3295 1645  FETCH_DIM_R/81            $1692=    $1691                2142:'line'         	;0
3296 1645  ASSIGN_DIM/147            ?1608     16?10                ?0                  	;0
3297 1645  OP_DATA/137               ?0        $1692                ?0                  	;0
3298 1647  INIT_FCALL_BY_NAME/59     ?0        ?0                   2143:'count'        	;1
3299 1647  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
3300 1647  DO_FCALL_BY_NAME/131      $1693=    ?0                   ?0                  	;0
3301 1647  IS_SMALLER/19             #1694=    2145:0               $1693               	;0
3302 1647  JMPZ/43                   ?0        #1694                ?3304               	;0	>>3304
3303 1648  GOTO/253                  ?0        ?3023                ?2146               	;0
3304 1650  ASSIGN/38                 ?1613     16?31                2147:''             	;0	<<3302
3305 1651  GOTO/253                  ?0        ?3029                ?2148               	;0
3306 1652  GOTO/253                  ?0        ?3023                ?2149               	;0
3307 1654  GOTO/253                  ?0        ?3321                ?2150               	;0
3308 1656  INIT_FCALL_BY_NAME/59     ?0        ?0                   2151:'implode'      	;2
3309 1656  SEND_VAL_EX/116           ?80       2153:','             ?1                  	;0
3310 1656  INIT_FCALL_BY_NAME/59     ?0        ?0                   2154:'array_map'    	;2
3311 1656  SEND_VAL_EX/116           ?80       2156:'intval'        ?1                  	;0
3312 1656  FETCH_DIM_FUNC_ARG/93     $1697=    16?0                 2157:'stream_ids'   	;2
3313 1656  SEND_VAR_EX/66            ?96       $1697                ?2                  	;0
3314 1656  DO_FCALL_BY_NAME/131      $1698=    ?0                   ?0                  	;0
3315 1656  SEND_VAR_NO_REF_EX/50     ?96       $1698                ?2                  	;0
3316 1656  DO_FCALL_BY_NAME/131      $1699=    ?0                   ?0                  	;0
3317 1656  CONCAT/8                  #1700=    2158:'`streams`.`id` IN (' $1699               	;0
3318 1656  CONCAT/8                  #1701=    #1700                2159:')'            	;0
3319 1656  ASSIGN_DIM/147            ?1614     16?11                ?2670195408         	;0
3320 1656  OP_DATA/137               ?0        #1701                ?0                  	;0
3321 1658  ASSIGN_DIM/147            ?1620     16?11                ?0                  	;0
3322 1658  OP_DATA/137               ?0        2160:'`type` = 4'    ?0                  	;0
3323 1659  GOTO/253                  ?0        ?209                 ?2161               	;0
3324 1662  FETCH_DIM_R/81            $1704=    16?1                 2163:'recordsTotal' 	;0
3325 1662  ASSIGN_DIM/147            ?1621     16?1                 2162:'recordsFiltered'	;0
3326 1662  OP_DATA/137               ?0        $1704                ?0                  	;0
3327 1663  FETCH_DIM_R/81            $1705=    16?1                 2164:'recordsTotal' 	;0
3328 1663  IS_SMALLER/19             #1706=    2165:0               $1705               	;0
3329 1663  BOOL_NOT/13               #1707=    #1706                ?0                  	;0
3330 1663  JMPZ/43                   ?0        #1707                ?3332               	;0	>>3332
3331 1664  GOTO/253                  ?0        ?1410                ?2166               	;0
3332 1666  INIT_FCALL_BY_NAME/59     ?0        ?0                   2167:'implode'      	;2	<<3330
3333 1666  SEND_VAL_EX/116           ?80       2169:','             ?1                  	;0
3334 1666  FETCH_DIM_FUNC_ARG/93     $1708=    16?5                 2170:'reports'      	;2
3335 1666  SEND_VAR_EX/66            ?96       $1708                ?2                  	;0
3336 1666  DO_FCALL_BY_NAME/131      $1709=    ?0                   ?0                  	;0
3337 1666  CONCAT/8                  #1710=    2171:'SELECT `streams`.`id`, `stream_icon`, `stream_display_name`, `movie_properties`, `streams_series`.`category_id`, `streams_series`.`title`, `streams_episodes`.`season_num`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' $1709               	;0
3338 1666  ROPE_INIT/54              #1712=    ?0                   2172:')) AS `clients` FROM `streams` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` '	;9
3339 1666  ROPE_ADD/55               #1712=    #1712                16?31               	;1
3340 1666  ROPE_ADD/55               #1712=    #1712                2173:' '            	;2
3341 1666  ROPE_ADD/55               #1712=    #1712                16?30               	;3
3342 1666  ROPE_ADD/55               #1712=    #1712                2174:' LIMIT '      	;4
3343 1666  ROPE_ADD/55               #1712=    #1712                16?26               	;5
3344 1666  ROPE_ADD/55               #1712=    #1712                2175:', '           	;6
3345 1666  ROPE_ADD/55               #1712=    #1712                16?33               	;7
3346 1666  ROPE_END/56               #1711=    #1712                2176:';'            	;8
3347 1666  CONCAT/8                  #1717=    #1710                #1711               	;0
3348 1666  ASSIGN/38                 ?1636     16?32                #1717               	;0
3349 1667  INIT_METHOD_CALL/112      ?0        16?3                 2177:'query'        	;1
3350 1667  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
3351 1667  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
3352 1667  DO_FCALL/60               ?1637     ?0                   ?0                  	;0
3353 1668  GOTO/253                  ?0        ?3615                ?2179               	;0
3354 1670  INIT_FCALL_BY_NAME/59     ?0        ?0                   2180:'implode'      	;2
3355 1670  SEND_VAL_EX/116           ?80       2182:' AND '         ?1                  	;0
3356 1670  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
3357 1670  DO_FCALL_BY_NAME/131      $1720=    ?0                   ?0                  	;0
3358 1670  CONCAT/8                  #1721=    2183:'WHERE '        $1720               	;0
3359 1670  ASSIGN/38                 ?1640     16?31                #1721               	;0
3360 1671  FETCH_DIM_R/81            $1723=    16?13                16?14               	;0
3361 1671  BOOL_NOT/13               #1724=    $1723                ?0                  	;0
3362 1671  JMPZ/43                   ?0        #1724                ?3364               	;0	>>3364
3363 1672  GOTO/253                  ?0        ?3369                ?2184               	;0
3364 1674  FETCH_DIM_R/81            $1725=    16?13                16?14               	;0	<<3362
3365 1674  CONCAT/8                  #1726=    2185:'ORDER BY '     $1725               	;0
3366 1674  CONCAT/8                  #1727=    #1726                2186:' '            	;0
3367 1674  CONCAT/8                  #1728=    #1727                16?29               	;0
3368 1674  ASSIGN/38                 ?1647     16?30                #1728               	;0
3369 1676  ROPE_INIT/54              #1731=    ?0                   2187:'SELECT COUNT(*) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines_live`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_live`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_live`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_live`.`user_id` '	;3
3370 1676  ROPE_ADD/55               #1731=    #1731                16?31               	;1
3371 1676  ROPE_END/56               #1730=    #1731                2188:';'            	;2
3372 1676  ASSIGN/38                 ?1651     16?15                #1730               	;0
3373 1677  GOTO/253                  ?0        ?4962                ?2189               	;0
3374 1679  GOTO/253                  ?0        ?2265                ?2190               	;0
3375 1681  FETCH_DIM_R/81            $1734=    16?0                 2191:'can_view_vod' 	;0
3376 1681  JMPZ/43                   ?0        $1734                ?3378               	;0	>>3378
3377 1682  GOTO/253                  ?0        ?3379                ?2192               	;0
3378 1684  EXIT/79                   ?0        ?0                   ?0                  	;0	<<3376
3379 1686  GOTO/253                  ?0        ?154                 ?2193               	;0
3380 1688  ASSIGN_DIM/147            ?1653     16?11                ?4397406            	;0
3381 1688  OP_DATA/137               ?0        2194:'(`lines`.`username` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `enigma2_devices`.`public_ip` LIKE ? OR `users`.`username` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`reseller_notes` LIKE ?)' ?0                  	;0
3382 1690  INIT_FCALL_BY_NAME/59     ?0        ?0                   2195:'strlen'       	;1
3383 1690  FETCH_STATIC_PROP_FUNC_ARG/177 $1736=    2197:'rRequest'      2198:'XUI'          	;1
3384 1690  FETCH_DIM_FUNC_ARG/93     $1737=    $1736                2200:'filter'       	;1
3385 1690  SEND_VAR_EX/66            ?80       $1737                ?1                  	;0
3386 1690  DO_FCALL_BY_NAME/131      $1738=    ?0                   ?0                  	;0
3387 1690  IS_SMALLER/19             #1739=    2201:0               $1738               	;0
3388 1690  BOOL_NOT/13               #1740=    #1739                ?0                  	;0
3389 1690  JMPZ/43                   ?0        #1740                ?3391               	;0	>>3391
3390 1691  GOTO/253                  ?0        ?5633                ?2202               	;0
3391 1693  FETCH_STATIC_PROP_R/173   $1741=    2203:'rRequest'      2204:'XUI'          	;0	<<3389
3392 1693  FETCH_DIM_R/81            $1742=    $1741                2206:'filter'       	;0
3393 1693  IS_EQUAL/17               #1743=    $1742                2207:1              	;0
3394 1693  JMPZ/43                   ?0        #1743                ?3396               	;0	>>3396
3395 1694  GOTO/253                  ?0        ?3291                ?2208               	;0
3396 1696  FETCH_STATIC_PROP_R/173   $1744=    2209:'rRequest'      2210:'XUI'          	;0	<<3394
3397 1696  FETCH_DIM_R/81            $1745=    $1744                2212:'filter'       	;0
3398 1696  IS_EQUAL/17               #1746=    $1745                2213:2              	;0
3399 1696  JMPZ/43                   ?0        #1746                ?3401               	;0	>>3401
3400 1697  GOTO/253                  ?0        ?3528                ?2214               	;0
3401 1699  GOTO/253                  ?0        ?5159                ?2215               	;0	<<3399
3402 1702  ROPE_INIT/54              #1748=    ?0                   2216:'SELECT COUNT(`lines`.`id`) AS `count` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` '	;3
3403 1702  ROPE_ADD/55               #1748=    #1748                16?31               	;1
3404 1702  ROPE_END/56               #1747=    #1748                2217:';'            	;2
3405 1702  ASSIGN/38                 ?1668     16?15                #1747               	;0
3406 1703  INIT_METHOD_CALL/112      ?0        16?3                 2218:'query'        	;1
3407 1703  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
3408 1703  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
3409 1703  DO_FCALL/60               ?1669     ?0                   ?0                  	;0
3410 1704  INIT_METHOD_CALL/112      ?0        16?3                 2220:'num_rows'     	;0
3411 1704  DO_FCALL/60               $1752=    ?0                   ?0                  	;0
3412 1704  IS_EQUAL/17               #1753=    $1752                2222:1              	;0
3413 1704  JMPZ/43                   ?0        #1753                ?3415               	;0	>>3415
3414 1705  GOTO/253                  ?0        ?1418                ?2223               	;0
3415 1707  ASSIGN_DIM/147            ?1672     16?1                 2224:'recordsTotal' 	;0	<<3413
3416 1707  OP_DATA/137               ?0        2225:0               ?0                  	;0
3417 1708  GOTO/253                  ?0        ?1417                ?2226               	;0
3418 1710  ASSIGN_DIM/147            ?1673     16?11                ?0                  	;0
3419 1710  OP_DATA/137               ?0        2227:'`streams_series`.`id` = ?' ?0                  	;0
3420 1711  FETCH_STATIC_PROP_R/173   $1757=    2228:'rRequest'      2229:'XUI'          	;0
3421 1711  FETCH_DIM_R/81            $1758=    $1757                2231:'series'       	;0
3422 1711  ASSIGN_DIM/147            ?1674     16?10                ?0                  	;0
3423 1711  OP_DATA/137               ?0        $1758                ?0                  	;0
3424 1713  FETCH_DIM_R/81            $1759=    16?13                16?14               	;0
3425 1713  BOOL_NOT/13               #1760=    $1759                ?0                  	;0
3426 1713  JMPZ/43                   ?0        #1760                ?3428               	;0	>>3428
3427 1714  GOTO/253                  ?0        ?2838                ?2232               	;0
3428 1716  INIT_FCALL_BY_NAME/59     ?0        ?0                   2233:'strtolower'   	;1	<<3426
3429 1716  FETCH_STATIC_PROP_FUNC_ARG/177 $1761=    2235:'rRequest'      2236:'XUI'          	;1
3430 1716  FETCH_DIM_FUNC_ARG/93     $1762=    $1761                2238:'order'        	;1
3431 1716  FETCH_DIM_FUNC_ARG/93     $1763=    $1762                2239:0              	;1
3432 1716  FETCH_DIM_FUNC_ARG/93     $1764=    $1763                2240:'dir'          	;1
3433 1716  SEND_VAR_EX/66            ?80       $1764                ?1                  	;0
3434 1716  DO_FCALL_BY_NAME/131      $1765=    ?0                   ?0                  	;0
3435 1716  IS_IDENTICAL/15           #1766=    $1765                2241:'desc'         	;0
3436 1716  JMPZ/43                   ?0        #1766                ?3439               	;0	>>3439
3437 1716  QM_ASSIGN/22              #1767=    2242:'desc'          ?0                  	;0
3438 1716  JMP/42                    ?0        ?3440                ?0                  	;0	>>3440
3439 1716  QM_ASSIGN/22              #1767=    2243:'asc'           ?0                  	;0	<<3436
3440 1716  ASSIGN/38                 ?1686     16?29                #1767               	;0	<<3438
3441 1717  GOTO/253                  ?0        ?2833                ?2244               	;0
3442 1719  INIT_FCALL_BY_NAME/59     ?0        ?0                   2245:'strlen'       	;1
3443 1719  FETCH_STATIC_PROP_FUNC_ARG/177 $1769=    2247:'rRequest'      2248:'XUI'          	;1
3444 1719  FETCH_DIM_FUNC_ARG/93     $1770=    $1769                2250:'category'     	;1
3445 1719  SEND_VAR_EX/66            ?80       $1770                ?1                  	;0
3446 1719  DO_FCALL_BY_NAME/131      $1771=    ?0                   ?0                  	;0
3447 1719  IS_SMALLER/19             #1772=    2251:0               $1771               	;0
3448 1719  BOOL_NOT/13               #1773=    #1772                ?0                  	;0
3449 1719  JMPZ/43                   ?0        #1773                ?3451               	;0	>>3451
3450 1720  GOTO/253                  ?0        ?3457                ?2252               	;0
3451 1722  ASSIGN_DIM/147            ?1692     16?11                ?4397406            	;0	<<3449
3452 1722  OP_DATA/137               ?0        2253:'JSON_CONTAINS(`streams_series`.`category_id`, ?, \'$\')' ?0                  	;0
3453 1723  FETCH_STATIC_PROP_R/173   $1776=    2254:'rRequest'      2255:'XUI'          	;0
3454 1723  FETCH_DIM_R/81            $1777=    $1776                2257:'category'     	;0
3455 1723  ASSIGN_DIM/147            ?1693     16?10                ?0                  	;0
3456 1723  OP_DATA/137               ?0        $1777                ?0                  	;0
3457 1725  INIT_FCALL_BY_NAME/59     ?0        ?0                   2258:'strlen'       	;1
3458 1725  FETCH_STATIC_PROP_FUNC_ARG/177 $1778=    2260:'rRequest'      2261:'XUI'          	;1
3459 1725  FETCH_DIM_FUNC_ARG/93     $1779=    $1778                2263:'series'       	;1
3460 1725  SEND_VAR_EX/66            ?80       $1779                ?1                  	;0
3461 1725  DO_FCALL_BY_NAME/131      $1780=    ?0                   ?0                  	;0
3462 1725  IS_SMALLER/19             #1781=    2264:0               $1780               	;0
3463 1725  BOOL_NOT/13               #1782=    #1781                ?0                  	;0
3464 1725  JMPZ/43                   ?0        #1782                ?3466               	;0	>>3466
3465 1726  GOTO/253                  ?0        ?3424                ?2265               	;0
3466 1728  GOTO/253                  ?0        ?3418                ?2266               	;0	<<3464
3467 1730  EXIT/79                   ?0        ?0                   ?0                  	;0
3468 1732  INIT_FCALL_BY_NAME/59     ?0        ?0                   2267:'F769E3F0c739d1a6'	;1
3469 1732  SEND_VAL_EX/116           ?80       2269:'series'        ?1                  	;0
3470 1732  DO_FCALL_BY_NAME/131      $1783=    ?0                   ?0                  	;0
3471 1732  ASSIGN/38                 ?1702     16?12                $1783               	;0
3472 1733  ASSIGN/38                 ?1703     16?13                2270:array (
  0 => '`id`',
  1 => false,
  2 => '`stream_display_name`',
  3 => '`category_id`',
  4 => '`clients`',
  5 => false,
)	;0
3473 1734  FETCH_STATIC_PROP_IS/176  $1786=    2271:'rRequest'      2272:'XUI'          	;0
3474 1734  ISSET_ISEMPTY_DIM_OBJ/115 #1787=    $1786                2274:'order'        	;33554432
3475 1734  JMPZ_EX/46                #1787=    #1787                ?3485               	;0	>>3485
3476 1734  INIT_FCALL_BY_NAME/59     ?0        ?0                   2275:'strlen'       	;1
3477 1734  FETCH_STATIC_PROP_FUNC_ARG/177 $1788=    2277:'rRequest'      2278:'XUI'          	;1
3478 1734  FETCH_DIM_FUNC_ARG/93     $1789=    $1788                2280:'order'        	;1
3479 1734  FETCH_DIM_FUNC_ARG/93     $1790=    $1789                2281:0              	;1
3480 1734  FETCH_DIM_FUNC_ARG/93     $1791=    $1790                2282:'column'       	;1
3481 1734  SEND_VAR_EX/66            ?80       $1791                ?1                  	;0
3482 1734  DO_FCALL_BY_NAME/131      $1792=    ?0                   ?0                  	;0
3483 1734  IS_SMALLER/19             #1793=    2283:0               $1792               	;0
3484 1734  BOOL/52                   #1787=    #1793                ?0                  	;0
3485 1734  JMPZ/43                   ?0        #1787                ?3487               	;0	>>3487	<<3475
3486 1735  GOTO/253                  ?0        ?2578                ?2284               	;0
3487 1737  GOTO/253                  ?0        ?2576                ?2285               	;0	<<3485
3488 1739  ASSIGN/38                 $1794=    16?10                2286:array (
)      	;0
3489 1739  ASSIGN/38                 ?1713     16?11                $1794               	;0
3490 1740  INIT_FCALL_BY_NAME/59     ?0        ?0                   2287:'implode'      	;2
3491 1740  SEND_VAL_EX/116           ?80       2289:','             ?1                  	;0
3492 1740  FETCH_DIM_FUNC_ARG/93     $1797=    16?5                 2290:'reports'      	;2
3493 1740  SEND_VAR_EX/66            ?96       $1797                ?2                  	;0
3494 1740  DO_FCALL_BY_NAME/131      $1798=    ?0                   ?0                  	;0
3495 1740  CONCAT/8                  #1799=    2291:'`lines`.`member_id` IN (' $1798               	;0
3496 1740  CONCAT/8                  #1800=    #1799                2292:')'            	;0
3497 1740  ASSIGN_DIM/147            ?1714     16?11                ?2670195408         	;0
3498 1740  OP_DATA/137               ?0        #1800                ?0                  	;0
3499 1741  INIT_FCALL_BY_NAME/59     ?0        ?0                   2293:'strlen'       	;1
3500 1741  FETCH_STATIC_PROP_FUNC_ARG/177 $1801=    2295:'rRequest'      2296:'XUI'          	;1
3501 1741  FETCH_DIM_FUNC_ARG/93     $1802=    $1801                2298:'search'       	;1
3502 1741  FETCH_DIM_FUNC_ARG/93     $1803=    $1802                2299:'value'        	;1
3503 1741  SEND_VAR_EX/66            ?80       $1803                ?1                  	;0
3504 1741  DO_FCALL_BY_NAME/131      $1804=    ?0                   ?0                  	;0
3505 1741  IS_SMALLER/19             #1805=    2300:0               $1804               	;0
3506 1741  BOOL_NOT/13               #1806=    #1805                ?0                  	;0
3507 1741  JMPZ/43                   ?0        #1806                ?3509               	;0	>>3509
3508 1742  GOTO/253                  ?0        ?3382                ?2301               	;0
3509 1744  INIT_FCALL_BY_NAME/59     ?0        ?0                   2302:'range'        	;2	<<3507
3510 1744  SEND_VAL_EX/116           ?80       2304:1               ?1                  	;0
3511 1744  SEND_VAL_EX/116           ?96       2305:6               ?2                  	;0
3512 1744  DO_FCALL_BY_NAME/131      $1807=    ?0                   ?0                  	;0
3513 1744  FE_RESET_R/77             $1808=    $1807                ?3523               	;0
3514 1744  FE_FETCH_R/78             ?0        $1808                16?9                	;3523	>>3523	<<3522
3515 1745  FETCH_STATIC_PROP_R/173   $1810=    2306:'rRequest'      2307:'XUI'          	;0
3516 1745  FETCH_DIM_R/81            $1811=    $1810                2309:'search'       	;0
3517 1745  FETCH_DIM_R/81            $1812=    $1811                2310:'value'        	;0
3518 1745  CONCAT/8                  #1813=    2311:'%'             $1812               	;0
3519 1745  CONCAT/8                  #1814=    #1813                2312:'%'            	;0
3520 1745  ASSIGN_DIM/147            ?1727     16?10                ?1660103640         	;0
3521 1745  OP_DATA/137               ?0        #1814                ?0                  	;0
3522 1746  JMP/42                    ?0        ?3514                ?0                  	;0	>>3514
3523 1746  FE_FREE/127               ?0        $1808                ?0                  	;0	<<3513
3524 1749  GOTO/253                  ?0        ?3380                ?2313               	;0
3525 1752  ASSIGN_DIM/147            ?1733     16?11                ?2                  	;0
3526 1752  OP_DATA/137               ?0        2314:'(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())' ?0                  	;0
3527 1754  GOTO/253                  ?0        ?3290                ?2315               	;0
3528 1756  GOTO/253                  ?0        ?3288                ?2316               	;0
3529 1758  INIT_FCALL_BY_NAME/59     ?0        ?0                   2317:'array_merge'  	;2
3530 1758  INIT_FCALL_BY_NAME/59     ?0        ?0                   2319:'ACeb5cFe4194f4F0'	;1
3531 1758  FETCH_DIM_FUNC_ARG/93     $1816=    16?5                 2321:'member_group_id'	;1
3532 1758  SEND_VAR_EX/66            ?80       $1816                ?1                  	;0
3533 1758  DO_FCALL_BY_NAME/131      $1817=    ?0                   ?0                  	;0
3534 1758  SEND_VAR_NO_REF_EX/50     ?80       $1817                ?1                  	;0
3535 1758  INIT_FCALL_BY_NAME/59     ?0        ?0                   2322:'a0Bb5aDf0F9ccC8E'	;1
3536 1758  FETCH_DIM_FUNC_ARG/93     $1818=    16?5                 2324:'id'           	;1
3537 1758  SEND_VAR_EX/66            ?80       $1818                ?1                  	;0
3538 1758  DO_FCALL_BY_NAME/131      $1819=    ?0                   ?0                  	;0
3539 1758  SEND_VAR_NO_REF_EX/50     ?96       $1819                ?2                  	;0
3540 1758  DO_FCALL_BY_NAME/131      $1820=    ?0                   ?0                  	;0
3541 1758  ASSIGN/38                 ?1739     16?0                 $1820               	;0
3542 1759  INIT_FCALL_BY_NAME/59     ?0        ?0                   2325:'strlen'       	;1
3543 1759  FETCH_DIM_FUNC_ARG/93     $1822=    16?5                 2327:'timezone'     	;1
3544 1759  SEND_VAR_EX/66            ?80       $1822                ?1                  	;0
3545 1759  DO_FCALL_BY_NAME/131      $1823=    ?0                   ?0                  	;0
3546 1759  IS_SMALLER/19             #1824=    2328:0               $1823               	;0
3547 1759  BOOL_NOT/13               #1825=    #1824                ?0                  	;0
3548 1759  JMPZ/43                   ?0        #1825                ?3550               	;0	>>3550
3549 1760  GOTO/253                  ?0        ?3554                ?2329               	;0
3550 1762  INIT_FCALL_BY_NAME/59     ?0        ?0                   2330:'date_default_timezone_set'	;1	<<3548
3551 1762  FETCH_DIM_FUNC_ARG/93     $1826=    16?5                 2332:'timezone'     	;1
3552 1762  SEND_VAR_EX/66            ?80       $1826                ?1                  	;0
3553 1762  DO_FCALL_BY_NAME/131      ?1745     ?0                   ?0                  	;0
3554 1765  GOTO/253                  ?0        ?1172                ?2333               	;0
3555 1767  GOTO/253                  ?0        ?6751                ?2334               	;0
3556 1769  FETCH_DIM_R/81            $1828=    16?0                 2335:'create_line'  	;0
3557 1769  JMPZ/43                   ?0        $1828                ?3559               	;0	>>3559
3558 1770  GOTO/253                  ?0        ?3560                ?2336               	;0
3559 1772  EXIT/79                   ?0        ?0                   ?0                  	;0	<<3557
3560 1774  GOTO/253                  ?0        ?2127                ?2337               	;0
3561 1776  INIT_METHOD_CALL/112      ?0        16?3                 2338:'num_rows'     	;0
3562 1776  DO_FCALL/60               $1829=    ?0                   ?0                  	;0
3563 1776  IS_EQUAL/17               #1830=    $1829                2340:1              	;0
3564 1776  JMPZ/43                   ?0        #1830                ?3566               	;0	>>3566
3565 1777  GOTO/253                  ?0        ?3569                ?2341               	;0
3566 1779  ASSIGN_DIM/147            ?1749     16?1                 2342:'recordsTotal' 	;0	<<3564
3567 1779  OP_DATA/137               ?0        2343:0               ?0                  	;0
3568 1780  GOTO/253                  ?0        ?3324                ?2344               	;0
3569 1782  INIT_METHOD_CALL/112      ?0        16?3                 2346:'get_row'      	;0
3570 1782  DO_FCALL/60               $1833=    ?0                   ?0                  	;0
3571 1782  FETCH_DIM_R/81            $1834=    $1833                2348:'count'        	;0
3572 1782  ASSIGN_DIM/147            ?1750     16?1                 2345:'recordsTotal' 	;0
3573 1782  OP_DATA/137               ?0        $1834                ?0                  	;0
3574 1783  GOTO/253                  ?0        ?3324                ?2349               	;0
3575 1785  EXIT/79                   ?0        ?0                   ?0                  	;0
3576 1787  INIT_FCALL_BY_NAME/59     ?0        ?0                   2350:'F769e3f0C739D1A6'	;1
3577 1787  SEND_VAL_EX/116           ?80       2352:'radio'         ?1                  	;0
3578 1787  DO_FCALL_BY_NAME/131      $1835=    ?0                   ?0                  	;0
3579 1787  ASSIGN/38                 ?1754     16?12                $1835               	;0
3580 1788  ASSIGN/38                 ?1755     16?13                2353:array (
  0 => '`id`',
  1 => false,
  2 => '`stream_display_name`',
  3 => '`category_id`',
  4 => '`clients`',
  5 => false,
)	;0
3581 1789  FETCH_STATIC_PROP_IS/176  $1838=    2354:'rRequest'      2355:'XUI'          	;0
3582 1789  ISSET_ISEMPTY_DIM_OBJ/115 #1839=    $1838                2357:'order'        	;33554432
3583 1789  JMPZ_EX/46                #1839=    #1839                ?3593               	;0	>>3593
3584 1789  INIT_FCALL_BY_NAME/59     ?0        ?0                   2358:'strlen'       	;1
3585 1789  FETCH_STATIC_PROP_FUNC_ARG/177 $1840=    2360:'rRequest'      2361:'XUI'          	;1
3586 1789  FETCH_DIM_FUNC_ARG/93     $1841=    $1840                2363:'order'        	;1
3587 1789  FETCH_DIM_FUNC_ARG/93     $1842=    $1841                2364:0              	;1
3588 1789  FETCH_DIM_FUNC_ARG/93     $1843=    $1842                2365:'column'       	;1
3589 1789  SEND_VAR_EX/66            ?80       $1843                ?1                  	;0
3590 1789  DO_FCALL_BY_NAME/131      $1844=    ?0                   ?0                  	;0
3591 1789  IS_SMALLER/19             #1845=    2366:0               $1844               	;0
3592 1789  BOOL/52                   #1839=    #1845                ?0                  	;0
3593 1789  JMPZ/43                   ?0        #1839                ?3595               	;0	>>3595	<<3583
3594 1790  GOTO/253                  ?0        ?6532                ?2367               	;0
3595 1792  GOTO/253                  ?0        ?6530                ?2368               	;0	<<3593
3596 1794  GOTO/253                  ?0        ?3603                ?2369               	;0
3597 1796  INIT_FCALL_BY_NAME/59     ?0        ?0                   2370:'implode'      	;2
3598 1796  SEND_VAL_EX/116           ?80       2372:' AND '         ?1                  	;0
3599 1796  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
3600 1796  DO_FCALL_BY_NAME/131      $1846=    ?0                   ?0                  	;0
3601 1796  CONCAT/8                  #1847=    2373:'WHERE '        $1846               	;0
3602 1796  ASSIGN/38                 ?1766     16?31                #1847               	;0
3603 1798  ROPE_INIT/54              #1850=    ?0                   2374:'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` '	;3
3604 1798  ROPE_ADD/55               #1850=    #1850                16?31               	;1
3605 1798  ROPE_END/56               #1849=    #1850                2375:';'            	;2
3606 1798  ASSIGN/38                 ?1770     16?15                #1849               	;0
3607 1799  GOTO/253                  ?0        ?922                 ?2376               	;0
3608 1801  GOTO/253                  ?0        ?3614                ?2377               	;0
3609 1803  INIT_FCALL_BY_NAME/59     ?0        ?0                   2378:'json_encode'  	;1
3610 1803  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
3611 1803  DO_FCALL_BY_NAME/131      $1853=    ?0                   ?0                  	;0
3612 1803  ECHO/40                   ?0        $1853                ?0                  	;0
3613 1804  EXIT/79                   ?0        ?0                   ?0                  	;0
3614 1806  GOTO/253                  ?0        ?6607                ?2380               	;0
3615 1808  INIT_METHOD_CALL/112      ?0        16?3                 2381:'num_rows'     	;0
3616 1808  DO_FCALL/60               $1854=    ?0                   ?0                  	;0
3617 1808  IS_SMALLER/19             #1855=    2383:0               $1854               	;0
3618 1808  BOOL_NOT/13               #1856=    #1855                ?0                  	;0
3619 1808  JMPZ/43                   ?0        #1856                ?3621               	;0	>>3621
3620 1809  GOTO/253                  ?0        ?4192                ?2384               	;0
3621 1811  INIT_METHOD_CALL/112      ?0        16?3                 2385:'get_rows'     	;0	<<3619
3622 1811  DO_FCALL/60               $1857=    ?0                   ?0                  	;0
3623 1811  ASSIGN/38                 ?1776     16?16                $1857               	;0
3624 1812  FETCH_STATIC_PROP_R/173   $1859=    2387:'rSettings'     2388:'XUI'          	;0
3625 1812  FETCH_DIM_R/81            $1860=    $1859                2390:'redis_handler'	;0
3626 1812  BOOL_NOT/13               #1861=    $1860                ?0                  	;0
3627 1812  JMPZ/43                   ?0        #1861                ?3629               	;0	>>3629
3628 1813  GOTO/253                  ?0        ?4010                ?2391               	;0
3629 1815  ASSIGN/38                 $1862=    16?45                2392:array (
)      	;0	<<3627
3630 1815  ASSIGN/38                 ?1781     16?35                $1862               	;0
3631 1816  INIT_METHOD_CALL/112      ?0        16?3                 2393:'query'        	;1
3632 1816  INIT_FCALL_BY_NAME/59     ?0        ?0                   2395:'implode'      	;2
3633 1816  SEND_VAL_EX/116           ?80       2397:','             ?1                  	;0
3634 1816  FETCH_DIM_FUNC_ARG/93     $1864=    16?5                 2398:'reports'      	;2
3635 1816  SEND_VAR_EX/66            ?96       $1864                ?2                  	;0
3636 1816  DO_FCALL_BY_NAME/131      $1865=    ?0                   ?0                  	;0
3637 1816  CONCAT/8                  #1866=    2399:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $1865               	;0
3638 1816  CONCAT/8                  #1867=    #1866                2400:');'           	;0
3639 1816  SEND_VAL_EX/116           ?80       #1867                ?1                  	;0
3640 1816  DO_FCALL/60               ?1786     ?0                   ?0                  	;0
3641 1817  GOTO/253                  ?0        ?3213                ?2401               	;0
3642 1821  FE_RESET_R/77             $1869=    16?16                ?3976               	;0
3643 1821  FE_FETCH_R/78             ?0        $1869                16?7                	;3976	>>3976	<<3975
3644 1822  NOP/0                     ?0        ?0                   ?0                  	;1
3645 1822  GOTO/253                  ?0        ?3821                ?2402               	;0
3646 1824  FETCH_DIM_R/81            $1870=    16?7                 2403:'device_id'    	;0
3647 1824  CONCAT/8                  #1871=    2404:'<button title="Convert to User Line" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1870               	;0
3648 1824  CONCAT/8                  #1872=    #1871                2405:', \'convert\');"><i class="fas fa-retweet"></i></button>'	;0
3649 1824  ASSIGN_CONCAT/30          ?1791     16?22                #1872               	;0
3650 1826  FETCH_DIM_R/81            $1874=    16?0                 2406:'reseller_client_connection_logs'	;0
3651 1826  BOOL_NOT/13               #1875=    $1874                ?0                  	;0
3652 1826  JMPZ/43                   ?0        #1875                ?3655               	;0	>>3655
3653 1827  NOP/0                     ?0        ?0                   ?0                  	;1
3654 1827  GOTO/253                  ?0        ?3956                ?2407               	;0
3655 1829  FETCH_DIM_R/81            $1876=    16?7                 2408:'active_connections'	;0	<<3652
3656 1829  IS_SMALLER/19             #1877=    2409:0               $1876               	;0
3657 1829  JMPZ/43                   ?0        #1877                ?3660               	;0	>>3660
3658 1830  NOP/0                     ?0        ?0                   ?0                  	;1
3659 1830  GOTO/253                  ?0        ?3952                ?2410               	;0
3660 1832  ASSIGN_CONCAT/30          ?1796     16?22                2411:'<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="fas fa-hammer"></i></button>'	;0	<<3657
3661 1833  NOP/0                     ?0        ?0                   ?0                  	;1
3662 1833  GOTO/253                  ?0        ?3950                ?2412               	;0
3663 1835  FETCH_DIM_R/81            $1879=    16?7                 2413:'exp_date'     	;0
3664 1835  JMPZ/43                   ?0        $1879                ?3667               	;0	>>3667
3665 1836  NOP/0                     ?0        ?0                   ?0                  	;1
3666 1836  GOTO/253                  ?0        ?3670                ?2414               	;0
3667 1838  ASSIGN/38                 ?1798     16?48                2415:'&infin;'      	;0	<<3664
3668 1839  NOP/0                     ?0        ?0                   ?0                  	;1
3669 1839  GOTO/253                  ?0        ?3922                ?2416               	;0
3670 1841  FETCH_DIM_R/81            $1881=    16?7                 2417:'exp_date'     	;0
3671 1841  INIT_FCALL_BY_NAME/59     ?0        ?0                   2418:'time'         	;0
3672 1841  DO_FCALL_BY_NAME/131      $1882=    ?0                   ?0                  	;0
3673 1841  IS_SMALLER/19             #1883=    $1881                $1882               	;0
3674 1841  JMPZ/43                   ?0        #1883                ?3677               	;0	>>3677
3675 1842  NOP/0                     ?0        ?0                   ?0                  	;1
3676 1842  GOTO/253                  ?0        ?3904                ?2420               	;0
3677 1844  NOP/0                     ?0        ?0                   ?0                  	;1	<<3674
3678 1844  GOTO/253                  ?0        ?3887                ?2421               	;0
3679 1846  ASSIGN_CONCAT/30          ?1802     16?50                2422:'
'            	;0
3680 1848  FETCH_DIM_R/81            $1885=    16?7                 2423:'reseller_notes'	;0
3681 1848  ASSIGN_CONCAT/30          ?1804     16?50                $1885               	;0
3682 1850  INIT_FCALL_BY_NAME/59     ?0        ?0                   2424:'strlen'       	;1
3683 1850  SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
3684 1850  DO_FCALL_BY_NAME/131      $1887=    ?0                   ?0                  	;0
3685 1850  IS_SMALLER/19             #1888=    2426:0               $1887               	;0
3686 1850  JMPZ/43                   ?0        #1888                ?3689               	;0	>>3689
3687 1851  NOP/0                     ?0        ?0                   ?0                  	;1
3688 1851  GOTO/253                  ?0        ?3970                ?2427               	;0
3689 1853  NOP/0                     ?0        ?0                   ?0                  	;1	<<3686
3690 1853  GOTO/253                  ?0        ?3967                ?2428               	;0
3691 1855  ASSIGN/38                 ?1807     16?54                2429:'<i class="text-secondary far fa-square"></i>'	;0
3692 1856  NOP/0                     ?0        ?0                   ?0                  	;1
3693 1856  GOTO/253                  ?0        ?3695                ?2430               	;0
3694 1858  ASSIGN/38                 ?1808     16?54                2431:'<i class="text-warning fas fa-square"></i>'	;0
3695 1860  NOP/0                     ?0        ?0                   ?0                  	;1
3696 1860  GOTO/253                  ?0        ?3663                ?2432               	;0
3697 1862  NOP/0                     ?0        ?0                   ?0                  	;1
3698 1862  GOTO/253                  ?0        ?3709                ?2433               	;0
3699 1864  INIT_FCALL_BY_NAME/59     ?0        ?0                   2434:'intval'       	;1
3700 1864  FETCH_DIM_FUNC_ARG/93     $1891=    16?7                 2436:'member_id'    	;1
3701 1864  SEND_VAR_EX/66            ?80       $1891                ?1                  	;0
3702 1864  DO_FCALL_BY_NAME/131      $1892=    ?0                   ?0                  	;0
3703 1864  CONCAT/8                  #1893=    2437:'<a href=\'user?id=' $1892               	;0
3704 1864  CONCAT/8                  #1894=    #1893                2438:'\'>'          	;0
3705 1864  FETCH_DIM_R/81            $1895=    16?7                 2439:'owner_name'   	;0
3706 1864  CONCAT/8                  #1896=    #1894                $1895               	;0
3707 1864  CONCAT/8                  #1897=    #1896                2440:'</a>'         	;0
3708 1864  ASSIGN/38                 ?1816     16?53                #1897               	;0
3709 1866  FETCH_DIM_R/81            $1901=    16?7                 2442:'device_id'    	;0
3710 1866  CONCAT/8                  #1902=    2443:'<a href=\'enigma?id=' $1901               	;0
3711 1866  CONCAT/8                  #1903=    #1902                2444:'\'>'          	;0
3712 1866  FETCH_DIM_R/81            $1904=    16?7                 2445:'device_id'    	;0
3713 1866  CONCAT/8                  #1905=    #1903                $1904               	;0
3714 1866  CONCAT/8                  #1906=    #1905                2446:'</a>'         	;0
3715 1866  INIT_ARRAY/71             #1907=    #1906                ?0                  	;40
3716 1866  FETCH_DIM_R/81            $1908=    16?7                 2447:'username'     	;0
3717 1866  ADD_ARRAY_ELEMENT/72      #1907=    $1908                ?0                  	;0
3718 1866  FETCH_DIM_R/81            $1909=    16?7                 2448:'device_id'    	;0
3719 1866  CONCAT/8                  #1910=    2449:'<a href=\'enigma?id=' $1909               	;0
3720 1866  CONCAT/8                  #1911=    #1910                2450:'\'>'          	;0
3721 1866  FETCH_DIM_R/81            $1912=    16?7                 2451:'mac'          	;0
3722 1866  CONCAT/8                  #1913=    #1911                $1912               	;0
3723 1866  CONCAT/8                  #1914=    #1913                2452:'</a>'         	;0
3724 1866  ADD_ARRAY_ELEMENT/72      #1907=    #1914                ?0                  	;0
3725 1866  FETCH_DIM_R/81            $1915=    16?7                 2453:'public_ip'    	;0
3726 1866  CONCAT/8                  #1916=    2454:'<a onClick="whois(\'' $1915               	;0
3727 1866  CONCAT/8                  #1917=    #1916                2455:'\');" href=\'javascript: void(0);\'>'	;0
3728 1866  FETCH_DIM_R/81            $1918=    16?7                 2456:'public_ip'    	;0
3729 1866  CONCAT/8                  #1919=    #1917                $1918               	;0
3730 1866  CONCAT/8                  #1920=    #1919                2457:'</a>'         	;0
3731 1866  ADD_ARRAY_ELEMENT/72      #1907=    #1920                ?0                  	;0
3732 1866  ADD_ARRAY_ELEMENT/72      #1907=    16?53                ?0                  	;0
3733 1866  ADD_ARRAY_ELEMENT/72      #1907=    16?52                ?0                  	;0
3734 1866  ADD_ARRAY_ELEMENT/72      #1907=    16?49                ?0                  	;0
3735 1866  ADD_ARRAY_ELEMENT/72      #1907=    16?54                ?0                  	;0
3736 1866  ADD_ARRAY_ELEMENT/72      #1907=    16?48                ?0                  	;0
3737 1866  ADD_ARRAY_ELEMENT/72      #1907=    16?22                ?0                  	;0
3738 1866  FETCH_DIM_W/84            $1899=    16?1                 2441:'data'         	;0
3739 1866  ASSIGN_DIM/147            ?1818     $1899                ?2670194944         	;0
3740 1866  OP_DATA/137               ?0        #1907                ?0                  	;0
3741 1867  NOP/0                     ?0        ?0                   ?0                  	;1
3742 1867  GOTO/253                  ?0        ?3819                ?2458               	;0
3743 1869  NOP/0                     ?0        ?0                   ?0                  	;1
3744 1869  GOTO/253                  ?0        ?3746                ?2459               	;0
3745 1871  ASSIGN/38                 ?1839     16?49                2460:'<i class="text-success fas fa-square"></i>'	;0
3746 1873  FETCH_DIM_R/81            $1922=    16?7                 2461:'is_trial'     	;0
3747 1873  JMPZ/43                   ?0        $1922                ?3750               	;0	>>3750
3748 1874  NOP/0                     ?0        ?0                   ?0                  	;1
3749 1874  GOTO/253                  ?0        ?3694                ?2462               	;0
3750 1876  NOP/0                     ?0        ?0                   ?0                  	;1	<<3747
3751 1876  GOTO/253                  ?0        ?3691                ?2463               	;0
3752 1878  NOP/0                     ?0        ?0                   ?0                  	;1
3753 1878  GOTO/253                  ?0        ?3819                ?2464               	;0
3754 1880  FETCH_DIM_R/81            $1923=    16?7                 2465:'admin_enabled'	;0
3755 1880  BOOL_NOT/13               #1924=    $1923                ?0                  	;0
3756 1880  JMPZ/43                   ?0        #1924                ?3759               	;0	>>3759
3757 1881  NOP/0                     ?0        ?0                   ?0                  	;1
3758 1881  GOTO/253                  ?0        ?3958                ?2466               	;0
3759 1883  FETCH_DIM_R/81            $1925=    16?7                 2467:'enabled'      	;0	<<3756
3760 1883  BOOL_NOT/13               #1926=    $1925                ?0                  	;0
3761 1883  JMPZ/43                   ?0        #1926                ?3764               	;0	>>3764
3762 1884  NOP/0                     ?0        ?0                   ?0                  	;1
3763 1884  GOTO/253                  ?0        ?3945                ?2468               	;0
3764 1886  FETCH_DIM_R/81            $1927=    16?7                 2469:'exp_date'     	;0	<<3761
3765 1886  JMPZ_EX/46                #1928=    $1927                ?3771               	;0	>>3771
3766 1886  FETCH_DIM_R/81            $1929=    16?7                 2470:'exp_date'     	;0
3767 1886  INIT_FCALL_BY_NAME/59     ?0        ?0                   2471:'time'         	;0
3768 1886  DO_FCALL_BY_NAME/131      $1930=    ?0                   ?0                  	;0
3769 1886  IS_SMALLER/19             #1931=    $1929                $1930               	;0
3770 1886  BOOL/52                   #1928=    #1931                ?0                  	;0
3771 1886  JMPZ/43                   ?0        #1928                ?3774               	;0	>>3774	<<3765
3772 1887  NOP/0                     ?0        ?0                   ?0                  	;1
3773 1887  GOTO/253                  ?0        ?3799                ?2473               	;0
3774 1889  NOP/0                     ?0        ?0                   ?0                  	;1	<<3771
3775 1889  GOTO/253                  ?0        ?3796                ?2474               	;0
3776 1891  FETCH_DIM_R/81            $1932=    16?7                 2475:'device_id'    	;0
3777 1891  CONCAT/8                  #1933=    2476:'<a href="enigma?id=' $1932               	;0
3778 1891  CONCAT/8                  #1934=    #1933                2477:'"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>'	;0
3779 1891  ASSIGN_CONCAT/30          ?1853     16?22                #1934               	;0
3780 1892  FETCH_DIM_R/81            $1936=    16?7                 2478:'is_isplock'   	;0
3781 1892  BOOL_NOT/13               #1937=    $1936                ?0                  	;0
3782 1892  JMPZ/43                   ?0        #1937                ?3785               	;0	>>3785
3783 1893  NOP/0                     ?0        ?0                   ?0                  	;1
3784 1893  GOTO/253                  ?0        ?3789                ?2479               	;0
3785 1895  FETCH_DIM_R/81            $1938=    16?7                 2480:'device_id'    	;0	<<3782
3786 1895  CONCAT/8                  #1939=    2481:'<button title="Reset ISP Lock" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1938               	;0
3787 1895  CONCAT/8                  #1940=    #1939                2482:', \'reset_isp\');"><i class="mdi mdi-lock-reset"></i></button>'	;0
3788 1895  ASSIGN_CONCAT/30          ?1859     16?22                #1940               	;0
3789 1897  FETCH_DIM_R/81            $1942=    16?0                 2483:'create_line'  	;0
3790 1897  BOOL_NOT/13               #1943=    $1942                ?0                  	;0
3791 1897  JMPZ/43                   ?0        #1943                ?3794               	;0	>>3794
3792 1898  NOP/0                     ?0        ?0                   ?0                  	;1
3793 1898  GOTO/253                  ?0        ?3650                ?2484               	;0
3794 1900  NOP/0                     ?0        ?0                   ?0                  	;1	<<3791
3795 1900  GOTO/253                  ?0        ?3646                ?2485               	;0
3796 1902  ASSIGN/38                 ?1862     16?52                2486:'<i class="text-success fas fa-square"></i>'	;0
3797 1903  NOP/0                     ?0        ?0                   ?0                  	;1
3798 1903  GOTO/253                  ?0        ?3800                ?2487               	;0
3799 1905  ASSIGN/38                 ?1863     16?52                2488:'<i class="text-warning far fa-square"></i>'	;0
3800 1907  NOP/0                     ?0        ?0                   ?0                  	;1
3801 1907  GOTO/253                  ?0        ?3943                ?2489               	;0
3802 1909  FETCH_DIM_R/81            $1946=    16?7                 2490:'enabled'      	;0
3803 1909  IS_EQUAL/17               #1947=    $1946                2491:1              	;0
3804 1909  JMPZ/43                   ?0        #1947                ?3807               	;0	>>3807
3805 1910  NOP/0                     ?0        ?0                   ?0                  	;1
3806 1910  GOTO/253                  ?0        ?3813                ?2492               	;0
3807 1912  FETCH_DIM_R/81            $1948=    16?7                 2493:'device_id'    	;0	<<3804
3808 1912  CONCAT/8                  #1949=    2494:'<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1948               	;0
3809 1912  CONCAT/8                  #1950=    #1949                2495:', \'enable\');"><i class="mdi mdi-lock"></i></button>'	;0
3810 1912  ASSIGN_CONCAT/30          ?1869     16?22                #1950               	;0
3811 1913  NOP/0                     ?0        ?0                   ?0                  	;1
3812 1913  GOTO/253                  ?0        ?3855                ?2496               	;0
3813 1915  FETCH_DIM_R/81            $1952=    16?7                 2497:'device_id'    	;0
3814 1915  CONCAT/8                  #1953=    2498:'<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1952               	;0
3815 1915  CONCAT/8                  #1954=    #1953                2499:', \'disable\');"><i class="mdi mdi-lock"></i></button>'	;0
3816 1915  ASSIGN_CONCAT/30          ?1873     16?22                #1954               	;0
3817 1916  NOP/0                     ?0        ?0                   ?0                  	;1
3818 1916  GOTO/253                  ?0        ?3855                ?2500               	;0
3819 1919  NOP/0                     ?0        ?0                   ?0                  	;1
3820 1919  GOTO/253                  ?0        ?3975                ?2501               	;0
3821 1921  FETCH_STATIC_PROP_R/173   $1956=    2502:'rSettings'     2503:'XUI'          	;0
3822 1921  FETCH_DIM_R/81            $1957=    $1956                2505:'redis_handler'	;0
3823 1921  BOOL_NOT/13               #1958=    $1957                ?0                  	;0
3824 1921  JMPZ/43                   ?0        #1958                ?3827               	;0	>>3827
3825 1922  NOP/0                     ?0        ?0                   ?0                  	;1
3826 1922  GOTO/253                  ?0        ?3837                ?2506               	;0
3827 1924  FETCH_DIM_R/81            $1960=    16?7                 2508:'id'           	;0	<<3824
3828 1924  ISSET_ISEMPTY_DIM_OBJ/115 #1961=    16?35                $1960               	;33554432
3829 1924  JMPZ/43                   ?0        #1961                ?3834               	;0	>>3834
3830 1924  FETCH_DIM_R/81            $1962=    16?7                 2509:'id'           	;0
3831 1924  FETCH_DIM_R/81            $1963=    16?35                $1962               	;0
3832 1924  QM_ASSIGN/22              #1964=    $1963                ?0                  	;0
3833 1924  JMP/42                    ?0        ?3835                ?0                  	;0	>>3835
3834 1924  QM_ASSIGN/22              #1964=    2510:0               ?0                  	;0	<<3829
3835 1924  ASSIGN_DIM/147            ?1877     16?7                 2507:'active_connections'	;0	<<3833
3836 1924  OP_DATA/137               ?0        #1964                ?0                  	;0
3837 1926  BOOL_NOT/13               #1965=    16?4                 ?0                  	;0
3838 1926  JMPZ/43                   ?0        #1965                ?3841               	;0	>>3841
3839 1927  NOP/0                     ?0        ?0                   ?0                  	;1
3840 1927  GOTO/253                  ?0        ?3754                ?2511               	;0
3841 1929  INIT_FCALL_BY_NAME/59     ?0        ?0                   2513:'filterRow'    	;3	<<3838
3842 1929  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
3843 1929  FETCH_STATIC_PROP_FUNC_ARG/177 $1968=    2515:'rRequest'      2516:'XUI'          	;2
3844 1929  FETCH_DIM_FUNC_ARG/93     $1969=    $1968                2518:'show_columns' 	;2
3845 1929  SEND_VAR_EX/66            ?96       $1969                ?2                  	;0
3846 1929  FETCH_STATIC_PROP_FUNC_ARG/177 $1970=    2519:'rRequest'      2520:'XUI'          	;3
3847 1929  FETCH_DIM_FUNC_ARG/93     $1971=    $1970                2522:'hide_columns' 	;3
3848 1929  SEND_VAR_EX/66            ?112      $1971                ?3                  	;0
3849 1929  DO_FCALL_BY_NAME/131      $1972=    ?0                   ?0                  	;0
3850 1929  FETCH_DIM_W/84            $1966=    16?1                 2512:'data'         	;0
3851 1929  ASSIGN_DIM/147            ?1885     $1966                ?4397406            	;0
3852 1929  OP_DATA/137               ?0        $1972                ?0                  	;0
3853 1930  NOP/0                     ?0        ?0                   ?0                  	;1
3854 1930  GOTO/253                  ?0        ?3752                ?2523               	;0
3855 1933  FETCH_DIM_R/81            $1973=    16?7                 2524:'device_id'    	;0
3856 1933  CONCAT/8                  #1974=    2525:'<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $1973               	;0
3857 1933  CONCAT/8                  #1975=    #1974                2526:', \'delete\');"><i class="mdi mdi-close"></i></button>'	;0
3858 1933  ASSIGN_CONCAT/30          ?1894     16?22                #1975               	;0
3859 1934  ASSIGN_CONCAT/30          ?1895     16?22                2527:'</div>'       	;0
3860 1935  INIT_FCALL_BY_NAME/59     ?0        ?0                   2528:'in_array'     	;2
3861 1935  FETCH_DIM_FUNC_ARG/93     $1978=    16?7                 2530:'member_id'    	;1
3862 1935  SEND_VAR_EX/66            ?80       $1978                ?1                  	;0
3863 1935  INIT_FCALL_BY_NAME/59     ?0        ?0                   2531:'array_merge'  	;2
3864 1935  FETCH_DIM_FUNC_ARG/93     $1979=    16?0                 2533:'direct_reports'	;1
3865 1935  SEND_VAR_EX/66            ?80       $1979                ?1                  	;0
3866 1935  FETCH_DIM_R/81            $1980=    16?5                 2534:'id'           	;0
3867 1935  INIT_ARRAY/71             #1981=    $1980                ?0                  	;4
3868 1935  SEND_VAL_EX/116           ?96       #1981                ?2                  	;0
3869 1935  DO_FCALL_BY_NAME/131      $1982=    ?0                   ?0                  	;0
3870 1935  SEND_VAR_NO_REF_EX/50     ?96       $1982                ?2                  	;0
3871 1935  DO_FCALL_BY_NAME/131      $1983=    ?0                   ?0                  	;0
3872 1935  JMPZ/43                   ?0        $1983                ?3875               	;0	>>3875
3873 1936  NOP/0                     ?0        ?0                   ?0                  	;1
3874 1936  GOTO/253                  ?0        ?3699                ?2535               	;0
3875 1938  INIT_FCALL_BY_NAME/59     ?0        ?0                   2536:'intval'       	;1	<<3872
3876 1938  FETCH_DIM_FUNC_ARG/93     $1984=    16?7                 2538:'member_id'    	;1
3877 1938  SEND_VAR_EX/66            ?80       $1984                ?1                  	;0
3878 1938  DO_FCALL_BY_NAME/131      $1985=    ?0                   ?0                  	;0
3879 1938  CONCAT/8                  #1986=    2539:'<a href=\'user?id=' $1985               	;0
3880 1938  CONCAT/8                  #1987=    #1986                2540:'\'>'          	;0
3881 1938  FETCH_DIM_R/81            $1988=    16?7                 2541:'owner_name'   	;0
3882 1938  CONCAT/8                  #1989=    #1987                $1988               	;0
3883 1938  CONCAT/8                  #1990=    #1989                2542:'<br/><small class=\'text-pink\'>(indirect)</small></a>'	;0
3884 1938  ASSIGN/38                 ?1909     16?53                #1990               	;0
3885 1939  NOP/0                     ?0        ?0                   ?0                  	;1
3886 1939  GOTO/253                  ?0        ?3697                ?2543               	;0
3887 1941  INIT_FCALL_BY_NAME/59     ?0        ?0                   2544:'date'         	;2
3888 1941  FETCH_DIM_FUNC_ARG/93     $1992=    16?27                2546:'date_format'  	;1
3889 1941  SEND_VAR_EX/66            ?80       $1992                ?1                  	;0
3890 1941  FETCH_DIM_FUNC_ARG/93     $1993=    16?7                 2547:'exp_date'     	;2
3891 1941  SEND_VAR_EX/66            ?96       $1993                ?2                  	;0
3892 1941  DO_FCALL_BY_NAME/131      $1994=    ?0                   ?0                  	;0
3893 1941  CONCAT/8                  #1995=    $1994                2548:'<br/><small class=\'text-secondary\'>'	;0
3894 1941  INIT_FCALL_BY_NAME/59     ?0        ?0                   2549:'date'         	;2
3895 1941  SEND_VAL_EX/116           ?80       2551:'H:i:s'         ?1                  	;0
3896 1941  FETCH_DIM_FUNC_ARG/93     $1996=    16?7                 2552:'exp_date'     	;2
3897 1941  SEND_VAR_EX/66            ?96       $1996                ?2                  	;0
3898 1941  DO_FCALL_BY_NAME/131      $1997=    ?0                   ?0                  	;0
3899 1941  CONCAT/8                  #1998=    #1995                $1997               	;0
3900 1941  CONCAT/8                  #1999=    #1998                2553:'</small>'     	;0
3901 1941  ASSIGN/38                 ?1918     16?48                #1999               	;0
3902 1942  NOP/0                     ?0        ?0                   ?0                  	;1
3903 1942  GOTO/253                  ?0        ?3920                ?2554               	;0
3904 1944  INIT_FCALL_BY_NAME/59     ?0        ?0                   2555:'date'         	;2
3905 1944  FETCH_DIM_FUNC_ARG/93     $2001=    16?27                2557:'date_format'  	;1
3906 1944  SEND_VAR_EX/66            ?80       $2001                ?1                  	;0
3907 1944  FETCH_DIM_FUNC_ARG/93     $2002=    16?7                 2558:'exp_date'     	;2
3908 1944  SEND_VAR_EX/66            ?96       $2002                ?2                  	;0
3909 1944  DO_FCALL_BY_NAME/131      $2003=    ?0                   ?0                  	;0
3910 1944  CONCAT/8                  #2004=    2559:'<span class="expired">' $2003               	;0
3911 1944  CONCAT/8                  #2005=    #2004                2560:'<br/><small>' 	;0
3912 1944  INIT_FCALL_BY_NAME/59     ?0        ?0                   2561:'date'         	;2
3913 1944  SEND_VAL_EX/116           ?80       2563:'H:i:s'         ?1                  	;0
3914 1944  FETCH_DIM_FUNC_ARG/93     $2006=    16?7                 2564:'exp_date'     	;2
3915 1944  SEND_VAR_EX/66            ?96       $2006                ?2                  	;0
3916 1944  DO_FCALL_BY_NAME/131      $2007=    ?0                   ?0                  	;0
3917 1944  CONCAT/8                  #2008=    #2005                $2007               	;0
3918 1944  CONCAT/8                  #2009=    #2008                2565:'</small></span>'	;0
3919 1944  ASSIGN/38                 ?1928     16?48                #2009               	;0
3920 1946  NOP/0                     ?0        ?0                   ?0                  	;1
3921 1946  GOTO/253                  ?0        ?3922                ?2566               	;0
3922 1949  ASSIGN/38                 ?1929     16?22                2567:'<div class="btn-group">'	;0
3923 1950  ASSIGN/38                 ?1930     16?50                2568:''             	;0
3924 1951  INIT_FCALL_BY_NAME/59     ?0        ?0                   2569:'strlen'       	;1
3925 1951  FETCH_DIM_FUNC_ARG/93     $2013=    16?7                 2571:'reseller_notes'	;1
3926 1951  SEND_VAR_EX/66            ?80       $2013                ?1                  	;0
3927 1951  DO_FCALL_BY_NAME/131      $2014=    ?0                   ?0                  	;0
3928 1951  IS_SMALLER/19             #2015=    2572:0               $2014               	;0
3929 1951  BOOL_NOT/13               #2016=    #2015                ?0                  	;0
3930 1951  JMPZ/43                   ?0        #2016                ?3933               	;0	>>3933
3931 1952  NOP/0                     ?0        ?0                   ?0                  	;1
3932 1952  GOTO/253                  ?0        ?3682                ?2573               	;0
3933 1954  INIT_FCALL_BY_NAME/59     ?0        ?0                   2574:'strlen'       	;1	<<3930
3934 1954  SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
3935 1954  DO_FCALL_BY_NAME/131      $2017=    ?0                   ?0                  	;0
3936 1954  IS_NOT_EQUAL/18           #2018=    $2017                2576:0              	;0
3937 1954  BOOL_NOT/13               #2019=    #2018                ?0                  	;0
3938 1954  JMPZ/43                   ?0        #2019                ?3941               	;0	>>3941
3939 1955  NOP/0                     ?0        ?0                   ?0                  	;1
3940 1955  GOTO/253                  ?0        ?3680                ?2577               	;0
3941 1957  NOP/0                     ?0        ?0                   ?0                  	;1	<<3938
3942 1957  GOTO/253                  ?0        ?3679                ?2578               	;0
3943 1959  NOP/0                     ?0        ?0                   ?0                  	;1
3944 1959  GOTO/253                  ?0        ?3946                ?2579               	;0
3945 1961  ASSIGN/38                 ?1938     16?52                2580:'<i class="text-secondary fas fa-square"></i>'	;0
3946 1963  NOP/0                     ?0        ?0                   ?0                  	;1
3947 1963  GOTO/253                  ?0        ?3959                ?2581               	;0
3948 1964  NOP/0                     ?0        ?0                   ?0                  	;1
3949 1964  GOTO/253                  ?0        ?3958                ?2582               	;0
3950 1966  NOP/0                     ?0        ?0                   ?0                  	;1
3951 1966  GOTO/253                  ?0        ?3956                ?2583               	;0
3952 1968  FETCH_DIM_R/81            $2021=    16?7                 2584:'device_id'    	;0
3953 1968  CONCAT/8                  #2022=    2585:'<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2021               	;0
3954 1968  CONCAT/8                  #2023=    #2022                2586:', \'kill_line\');"><i class="fas fa-hammer"></i></button>'	;0
3955 1968  ASSIGN_CONCAT/30          ?1942     16?22                #2023               	;0
3956 1971  NOP/0                     ?0        ?0                   ?0                  	;1
3957 1971  GOTO/253                  ?0        ?3802                ?2587               	;0
3958 1974  ASSIGN/38                 ?1943     16?52                2588:'<i class="text-danger fas fa-square"></i>'	;0
3959 1976  FETCH_DIM_R/81            $2026=    16?7                 2589:'active_connections'	;0
3960 1976  IS_SMALLER/19             #2027=    2590:0               $2026               	;0
3961 1976  JMPZ/43                   ?0        #2027                ?3964               	;0	>>3964
3962 1977  NOP/0                     ?0        ?0                   ?0                  	;1
3963 1977  GOTO/253                  ?0        ?3745                ?2591               	;0
3964 1979  ASSIGN/38                 ?1946     16?49                2592:'<i class="text-warning far fa-square"></i>'	;0	<<3961
3965 1980  NOP/0                     ?0        ?0                   ?0                  	;1
3966 1980  GOTO/253                  ?0        ?3743                ?2593               	;0
3967 1982  ASSIGN_CONCAT/30          ?1947     16?22                2594:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>'	;0
3968 1983  NOP/0                     ?0        ?0                   ?0                  	;1
3969 1983  GOTO/253                  ?0        ?3973                ?2595               	;0
3970 1985  CONCAT/8                  #2030=    2596:'<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' 16?50               	;0
3971 1985  CONCAT/8                  #2031=    #2030                2597:'"><i class="mdi mdi-note"></i></button>'	;0
3972 1985  ASSIGN_CONCAT/30          ?1950     16?22                #2031               	;0
3973 1987  NOP/0                     ?0        ?0                   ?0                  	;1
3974 1987  GOTO/253                  ?0        ?3776                ?2598               	;0
3975 1988  JMP/42                    ?0        ?3643                ?0                  	;0	>>3643
3976 1988  FE_FREE/127               ?0        $1869                ?0                  	;0	<<3642
3977 1992  GOTO/253                  ?0        ?1932                ?2599               	;0
3978 1994  ASSIGN/38                 $2033=    16?72                2600:array (
)      	;0
3979 1994  ASSIGN/38                 $2034=    16?65                $2033               	;0
3980 1994  ASSIGN/38                 $2035=    16?64                $2034               	;0
3981 1994  ASSIGN/38                 ?1954     16?66                $2035               	;0
3982 1995  INIT_FCALL_BY_NAME/59     ?0        ?0                   2601:'count'        	;1
3983 1995  SEND_VAR_EX/66            ?80       16?41                ?1                  	;0
3984 1995  DO_FCALL_BY_NAME/131      $2037=    ?0                   ?0                  	;0
3985 1995  IS_SMALLER/19             #2038=    2603:0               $2037               	;0
3986 1995  BOOL_NOT/13               #2039=    #2038                ?0                  	;0
3987 1995  JMPZ/43                   ?0        #2039                ?3989               	;0	>>3989
3988 1996  GOTO/253                  ?0        ?5760                ?2604               	;0
3989 1998  INIT_METHOD_CALL/112      ?0        16?3                 2605:'query'        	;1	<<3987
3990 1998  INIT_FCALL_BY_NAME/59     ?0        ?0                   2607:'implode'      	;2
3991 1998  SEND_VAL_EX/116           ?80       2609:','             ?1                  	;0
3992 1998  SEND_VAR_EX/66            ?96       16?41                ?2                  	;0
3993 1998  DO_FCALL_BY_NAME/131      $2040=    ?0                   ?0                  	;0
3994 1998  CONCAT/8                  #2041=    2610:'SELECT `lines`.`id`, `lines`.`is_mag`, `lines`.`is_e2`, `lines`.`is_restreamer`, `lines`.`username`, `mag_devices`.`mag_id`, `enigma2_devices`.`device_id` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `lines`.`id` IN (' $2040               	;0
3995 1998  CONCAT/8                  #2042=    #2041                2611:');'           	;0
3996 1998  SEND_VAL_EX/116           ?80       #2042                ?1                  	;0
3997 1998  DO_FCALL/60               ?1961     ?0                   ?0                  	;0
3998 1999  INIT_METHOD_CALL/112      ?0        16?3                 2612:'get_rows'     	;0
3999 1999  DO_FCALL/60               $2044=    ?0                   ?0                  	;0
4000 1999  FE_RESET_R/77             $2045=    $2044                ?4008               	;0
4001 1999  FE_FETCH_R/78             ?0        $2045                16?7                	;4008	>>4008	<<4007
4002 2000  FETCH_DIM_R/81            $2046=    16?7                 2614:'id'           	;0
4003 2000  ASSIGN/38                 ?1965     16?2                 $2046               	;0
4004 2001  UNSET_DIM/75              ?0        16?7                 2615:'id'           	;0
4005 2002  ASSIGN_DIM/147            ?1966     16?72                16?2                	;0
4006 2002  OP_DATA/137               ?0        16?7                 ?0                  	;0
4007 2003  JMP/42                    ?0        ?4001                ?0                  	;0	>>4001
4008 2003  FE_FREE/127               ?0        $2045                ?0                  	;0	<<4000
4009 2006  GOTO/253                  ?0        ?5760                ?2616               	;0
4010 2010  FE_RESET_R/77             $2049=    16?16                ?4191               	;0
4011 2010  FE_FETCH_R/78             ?0        $2049                16?7                	;4191	>>4191	<<4190
4012 2011  NOP/0                     ?0        ?0                   ?0                  	;1
4013 2011  GOTO/253                  ?0        ?4112                ?2617               	;0
4014 2013  ASSIGN/38                 ?1968     16?22                2618:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0
4015 2014  FETCH_DIM_R/81            $2051=    16?7                 2619:'clients'      	;0
4016 2014  CONCAT/8                  #2052=    2620:'<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' $2051               	;0
4017 2014  CONCAT/8                  #2053=    #2052                2621:'</button>'    	;0
4018 2014  ASSIGN/38                 ?1972     16?59                #2053               	;0
4019 2015  NOP/0                     ?0        ?0                   ?0                  	;1
4020 2015  GOTO/253                  ?0        ?4152                ?2622               	;0
4021 2017  FETCH_DIM_R/81            $2055=    16?7                 2623:'id'           	;0
4022 2017  CONCAT/8                  #2056=    2624:'<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2055               	;0
4023 2017  CONCAT/8                  #2057=    #2056                2625:', \'purge\');"><i class="mdi mdi-hammer"></i></button>'	;0
4024 2017  ASSIGN/38                 ?1976     16?22                #2057               	;0
4025 2018  NOP/0                     ?0        ?0                   ?0                  	;1
4026 2018  GOTO/253                  ?0        ?4142                ?2626               	;0
4027 2020  ASSIGN/38                 ?1977     16?60                2627:''             	;0
4028 2021  NOP/0                     ?0        ?0                   ?0                  	;1
4029 2021  GOTO/253                  ?0        ?4037                ?2628               	;0
4030 2023  FETCH_DIM_R/81            $2060=    16?61                2629:'movie_image'  	;0
4031 2023  CONCAT/8                  #2061=    2630:'<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' $2060               	;0
4032 2023  CONCAT/8                  #2062=    #2061                2631:'\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url='	;0
4033 2023  FETCH_DIM_R/81            $2063=    16?61                2632:'movie_image'  	;0
4034 2023  CONCAT/8                  #2064=    #2062                $2063               	;0
4035 2023  CONCAT/8                  #2065=    #2064                2633:'\' /></a>'    	;0
4036 2023  ASSIGN/38                 ?1984     16?60                #2065               	;0
4037 2025  NOP/0                     ?0        ?0                   ?0                  	;1
4038 2025  GOTO/253                  ?0        ?4168                ?2634               	;0
4039 2027  INIT_FCALL_BY_NAME/59     ?0        ?0                   2635:'strlen'       	;1
4040 2027  FETCH_STATIC_PROP_FUNC_ARG/177 $2067=    2637:'rRequest'      2638:'XUI'          	;1
4041 2027  FETCH_DIM_FUNC_ARG/93     $2068=    $2067                2640:'category'     	;1
4042 2027  SEND_VAR_EX/66            ?80       $2068                ?1                  	;0
4043 2027  DO_FCALL_BY_NAME/131      $2069=    ?0                   ?0                  	;0
4044 2027  IS_SMALLER/19             #2070=    2641:0               $2069               	;0
4045 2027  JMPZ/43                   ?0        #2070                ?4048               	;0	>>4048
4046 2028  NOP/0                     ?0        ?0                   ?0                  	;1
4047 2028  GOTO/253                  ?0        ?4056                ?2642               	;0
4048 2030  FETCH_DIM_R/81            $2071=    16?58                2643:0              	;0	<<4045
4049 2030  FETCH_DIM_R/81            $2072=    16?12                $2071               	;0
4050 2030  FETCH_DIM_R/81            $2073=    $2072                2644:'category_name'	;0
4051 2030  JMP_SET/152               #2074=    $2073                ?4053               	;0
4052 2030  QM_ASSIGN/22              #2074=    2645:'No Category'   ?0                  	;0
4053 2030  ASSIGN/38                 ?1993     16?57                #2074               	;0
4054 2031  NOP/0                     ?0        ?0                   ?0                  	;1
4055 2031  GOTO/253                  ?0        ?4090                ?2646               	;0
4056 2033  INIT_FCALL_BY_NAME/59     ?0        ?0                   2647:'intval'       	;1
4057 2033  FETCH_STATIC_PROP_FUNC_ARG/177 $2076=    2649:'rRequest'      2650:'XUI'          	;1
4058 2033  FETCH_DIM_FUNC_ARG/93     $2077=    $2076                2652:'category'     	;1
4059 2033  SEND_VAR_EX/66            ?80       $2077                ?1                  	;0
4060 2033  DO_FCALL_BY_NAME/131      $2078=    ?0                   ?0                  	;0
4061 2033  FETCH_DIM_R/81            $2079=    16?12                $2078               	;0
4062 2033  FETCH_DIM_R/81            $2080=    $2079                2653:'category_name'	;0
4063 2033  JMP_SET/152               #2081=    $2080                ?4065               	;0
4064 2033  QM_ASSIGN/22              #2081=    2654:'No Category'   ?0                  	;0
4065 2033  ASSIGN/38                 ?2000     16?57                #2081               	;0
4066 2034  NOP/0                     ?0        ?0                   ?0                  	;1
4067 2034  GOTO/253                  ?0        ?4090                ?2655               	;0
4068 2036  NOP/0                     ?0        ?0                   ?0                  	;1
4069 2036  GOTO/253                  ?0        ?4178                ?2656               	;0
4070 2038  FETCH_DIM_R/81            $2083=    16?7                 2657:'title'        	;0
4071 2038  CONCAT/8                  #2084=    $2083                2658:' - Season '   	;0
4072 2038  FETCH_DIM_R/81            $2085=    16?7                 2659:'season_num'   	;0
4073 2038  CONCAT/8                  #2086=    #2084                $2085               	;0
4074 2038  ASSIGN/38                 ?2005     16?73                #2086               	;0
4075 2039  FETCH_DIM_R/81            $2088=    16?7                 2660:'stream_display_name'	;0
4076 2039  CONCAT/8                  #2089=    2661:'<b>'           $2088               	;0
4077 2039  ROPE_INIT/54              #2091=    ?0                   2662:'</b><br><span style=\'font-size:11px;\'>'	;3
4078 2039  ROPE_ADD/55               #2091=    #2091                16?73               	;1
4079 2039  ROPE_END/56               #2090=    #2091                2663:'</span>'      	;2
4080 2039  CONCAT/8                  #2093=    #2089                #2090               	;0
4081 2039  ASSIGN/38                 ?2012     16?74                #2093               	;0
4082 2040  INIT_FCALL_BY_NAME/59     ?0        ?0                   2664:'json_decode'  	;2
4083 2040  FETCH_DIM_FUNC_ARG/93     $2095=    16?7                 2666:'category_id'  	;1
4084 2040  SEND_VAR_EX/66            ?80       $2095                ?1                  	;0
4085 2040  SEND_VAL_EX/116           ?96       2667:true            ?2                  	;0
4086 2040  DO_FCALL_BY_NAME/131      $2096=    ?0                   ?0                  	;0
4087 2040  ASSIGN/38                 ?2015     16?58                $2096               	;0
4088 2041  NOP/0                     ?0        ?0                   ?0                  	;1
4089 2041  GOTO/253                  ?0        ?4039                ?2668               	;0
4090 2044  INIT_FCALL_BY_NAME/59     ?0        ?0                   2669:'count'        	;1
4091 2044  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
4092 2044  DO_FCALL_BY_NAME/131      $2098=    ?0                   ?0                  	;0
4093 2044  IS_SMALLER/19             #2099=    2671:1               $2098               	;0
4094 2044  BOOL_NOT/13               #2100=    #2099                ?0                  	;0
4095 2044  JMPZ/43                   ?0        #2100                ?4098               	;0	>>4098
4096 2045  NOP/0                     ?0        ?0                   ?0                  	;1
4097 2045  GOTO/253                  ?0        ?4105                ?2672               	;0
4098 2047  INIT_FCALL_BY_NAME/59     ?0        ?0                   2673:'count'        	;1	<<4095
4099 2047  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
4100 2047  DO_FCALL_BY_NAME/131      $2101=    ?0                   ?0                  	;0
4101 2047  SUB/2                     #2102=    $2101                2675:1              	;0
4102 2047  CONCAT/8                  #2103=    2676:' (+'           #2102               	;0
4103 2047  CONCAT/8                  #2104=    #2103                2677:' others)'     	;0
4104 2047  ASSIGN_CONCAT/30          ?2023     16?57                #2104               	;0
4105 2049  FETCH_DIM_R/81            $2106=    16?7                 2678:'clients'      	;0
4106 2049  IS_SMALLER/19             #2107=    2679:0               $2106               	;0
4107 2049  JMPZ/43                   ?0        #2107                ?4110               	;0	>>4110
4108 2050  NOP/0                     ?0        ?0                   ?0                  	;1
4109 2050  GOTO/253                  ?0        ?4184                ?2680               	;0
4110 2052  NOP/0                     ?0        ?0                   ?0                  	;1	<<4107
4111 2052  GOTO/253                  ?0        ?4180                ?2681               	;0
4112 2054  FETCH_STATIC_PROP_R/173   $2108=    2682:'rSettings'     2683:'XUI'          	;0
4113 2054  FETCH_DIM_R/81            $2109=    $2108                2685:'redis_handler'	;0
4114 2054  BOOL_NOT/13               #2110=    $2109                ?0                  	;0
4115 2054  JMPZ/43                   ?0        #2110                ?4118               	;0	>>4118
4116 2055  NOP/0                     ?0        ?0                   ?0                  	;1
4117 2055  GOTO/253                  ?0        ?4124                ?2686               	;0
4118 2057  FETCH_DIM_R/81            $2112=    16?7                 2688:'id'           	;0	<<4115
4119 2057  FETCH_DIM_R/81            $2113=    16?35                $2112               	;0
4120 2057  JMP_SET/152               #2114=    $2113                ?4122               	;0
4121 2057  QM_ASSIGN/22              #2114=    2689:0               ?0                  	;0
4122 2057  ASSIGN_DIM/147            ?2029     16?7                 2687:'clients'      	;0
4123 2057  OP_DATA/137               ?0        #2114                ?0                  	;0
4124 2059  BOOL_NOT/13               #2115=    16?4                 ?0                  	;0
4125 2059  JMPZ/43                   ?0        #2115                ?4128               	;0	>>4128
4126 2060  NOP/0                     ?0        ?0                   ?0                  	;1
4127 2060  GOTO/253                  ?0        ?4070                ?2690               	;0
4128 2062  INIT_FCALL_BY_NAME/59     ?0        ?0                   2692:'filterRow'    	;3	<<4125
4129 2062  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
4130 2062  FETCH_STATIC_PROP_FUNC_ARG/177 $2118=    2694:'rRequest'      2695:'XUI'          	;2
4131 2062  FETCH_DIM_FUNC_ARG/93     $2119=    $2118                2697:'show_columns' 	;2
4132 2062  SEND_VAR_EX/66            ?96       $2119                ?2                  	;0
4133 2062  FETCH_STATIC_PROP_FUNC_ARG/177 $2120=    2698:'rRequest'      2699:'XUI'          	;3
4134 2062  FETCH_DIM_FUNC_ARG/93     $2121=    $2120                2701:'hide_columns' 	;3
4135 2062  SEND_VAR_EX/66            ?112      $2121                ?3                  	;0
4136 2062  DO_FCALL_BY_NAME/131      $2122=    ?0                   ?0                  	;0
4137 2062  FETCH_DIM_W/84            $2116=    16?1                 2691:'data'         	;0
4138 2062  ASSIGN_DIM/147            ?2035     $2116                ?4397406            	;0
4139 2062  OP_DATA/137               ?0        $2122                ?0                  	;0
4140 2063  NOP/0                     ?0        ?0                   ?0                  	;1
4141 2063  GOTO/253                  ?0        ?4068                ?2702               	;0
4142 2065  INIT_FCALL_BY_NAME/59     ?0        ?0                   2703:'intval'       	;1
4143 2065  FETCH_DIM_FUNC_ARG/93     $2123=    16?7                 2705:'id'           	;1
4144 2065  SEND_VAR_EX/66            ?80       $2123                ?1                  	;0
4145 2065  DO_FCALL_BY_NAME/131      $2124=    ?0                   ?0                  	;0
4146 2065  CONCAT/8                  #2125=    2706:'<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' $2124               	;0
4147 2065  CONCAT/8                  #2126=    #2125                2707:');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>'	;0
4148 2065  FETCH_DIM_R/81            $2127=    16?7                 2708:'clients'      	;0
4149 2065  CONCAT/8                  #2128=    #2126                $2127               	;0
4150 2065  CONCAT/8                  #2129=    #2128                2709:'</button></a>'	;0
4151 2065  ASSIGN/38                 ?2048     16?59                #2129               	;0
4152 2068  INIT_FCALL_BY_NAME/59     ?0        ?0                   2710:'json_decode'  	;2
4153 2068  FETCH_DIM_FUNC_ARG/93     $2131=    16?7                 2712:'movie_properties'	;1
4154 2068  SEND_VAR_EX/66            ?80       $2131                ?1                  	;0
4155 2068  SEND_VAL_EX/116           ?96       2713:true            ?2                  	;0
4156 2068  DO_FCALL_BY_NAME/131      $2132=    ?0                   ?0                  	;0
4157 2068  ASSIGN/38                 ?2051     16?61                $2132               	;0
4158 2069  INIT_FCALL_BY_NAME/59     ?0        ?0                   2714:'strlen'       	;1
4159 2069  FETCH_DIM_FUNC_ARG/93     $2134=    16?61                2716:'movie_image'  	;1
4160 2069  SEND_VAR_EX/66            ?80       $2134                ?1                  	;0
4161 2069  DO_FCALL_BY_NAME/131      $2135=    ?0                   ?0                  	;0
4162 2069  IS_SMALLER/19             #2136=    2717:0               $2135               	;0
4163 2069  JMPZ/43                   ?0        #2136                ?4166               	;0	>>4166
4164 2070  NOP/0                     ?0        ?0                   ?0                  	;1
4165 2070  GOTO/253                  ?0        ?4030                ?2718               	;0
4166 2072  NOP/0                     ?0        ?0                   ?0                  	;1	<<4163
4167 2072  GOTO/253                  ?0        ?4027                ?2719               	;0
4168 2074  FETCH_DIM_R/81            $2139=    16?7                 2721:'id'           	;0
4169 2074  INIT_ARRAY/71             #2140=    $2139                ?0                  	;24
4170 2074  ADD_ARRAY_ELEMENT/72      #2140=    16?60                ?0                  	;0
4171 2074  ADD_ARRAY_ELEMENT/72      #2140=    16?74                ?0                  	;0
4172 2074  ADD_ARRAY_ELEMENT/72      #2140=    16?57                ?0                  	;0
4173 2074  ADD_ARRAY_ELEMENT/72      #2140=    16?59                ?0                  	;0
4174 2074  ADD_ARRAY_ELEMENT/72      #2140=    16?22                ?0                  	;0
4175 2074  FETCH_DIM_W/84            $2137=    16?1                 2720:'data'         	;0
4176 2074  ASSIGN_DIM/147            ?2056     $2137                ?4397406            	;0
4177 2074  OP_DATA/137               ?0        #2140                ?0                  	;0
4178 2076  NOP/0                     ?0        ?0                   ?0                  	;1
4179 2076  GOTO/253                  ?0        ?4190                ?2722               	;0
4180 2078  ASSIGN/38                 ?2059     16?22                2723:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0
4181 2079  ASSIGN/38                 ?2060     16?59                2724:'<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>'	;0
4182 2080  NOP/0                     ?0        ?0                   ?0                  	;1
4183 2080  GOTO/253                  ?0        ?4152                ?2725               	;0
4184 2082  FETCH_DIM_R/81            $2143=    16?0                 2726:'reseller_client_connection_logs'	;0
4185 2082  JMPZ/43                   ?0        $2143                ?4188               	;0	>>4188
4186 2083  NOP/0                     ?0        ?0                   ?0                  	;1
4187 2083  GOTO/253                  ?0        ?4021                ?2727               	;0
4188 2085  NOP/0                     ?0        ?0                   ?0                  	;1	<<4185
4189 2085  GOTO/253                  ?0        ?4014                ?2728               	;0
4190 2086  JMP/42                    ?0        ?4011                ?0                  	;0	>>4011
4191 2086  FE_FREE/127               ?0        $2049                ?0                  	;0	<<4010
4192 2090  GOTO/253                  ?0        ?1410                ?2729               	;0
4193 2093  ASSIGN/38                 ?2062     16?13                2730:array (
  0 => '`users_logs`.`id`',
  1 => '`users`.`username`',
  2 => '`users_logs`.`log_id`',
  3 => '`users_logs`.`type`, `users_logs`.`action`',
  4 => '`users_logs`.`cost`',
  5 => '`users_logs`.`credits_after`',
  6 => '`users_logs`.`date`',
)	;0
4194 2094  FETCH_STATIC_PROP_IS/176  $2145=    2731:'rRequest'      2732:'XUI'          	;0
4195 2094  ISSET_ISEMPTY_DIM_OBJ/115 #2146=    $2145                2734:'order'        	;33554432
4196 2094  JMPZ_EX/46                #2146=    #2146                ?4206               	;0	>>4206
4197 2094  INIT_FCALL_BY_NAME/59     ?0        ?0                   2735:'strlen'       	;1
4198 2094  FETCH_STATIC_PROP_FUNC_ARG/177 $2147=    2737:'rRequest'      2738:'XUI'          	;1
4199 2094  FETCH_DIM_FUNC_ARG/93     $2148=    $2147                2740:'order'        	;1
4200 2094  FETCH_DIM_FUNC_ARG/93     $2149=    $2148                2741:0              	;1
4201 2094  FETCH_DIM_FUNC_ARG/93     $2150=    $2149                2742:'column'       	;1
4202 2094  SEND_VAR_EX/66            ?80       $2150                ?1                  	;0
4203 2094  DO_FCALL_BY_NAME/131      $2151=    ?0                   ?0                  	;0
4204 2094  IS_SMALLER/19             #2152=    2743:0               $2151               	;0
4205 2094  BOOL/52                   #2146=    #2152                ?0                  	;0
4206 2094  JMPZ/43                   ?0        #2146                ?4208               	;0	>>4208	<<4196
4207 2095  GOTO/253                  ?0        ?3193                ?2744               	;0
4208 2097  ASSIGN/38                 ?2071     16?14                2745:0              	;0	<<4206
4209 2098  GOTO/253                  ?0        ?3201                ?2746               	;0
4210 2099  GOTO/253                  ?0        ?3193                ?2747               	;0
4211 2101  INIT_METHOD_CALL/112      ?0        16?3                 2748:'query'        	;1
4212 2101  INIT_FCALL_BY_NAME/59     ?0        ?0                   2750:'implode'      	;2
4213 2101  SEND_VAL_EX/116           ?80       2752:','             ?1                  	;0
4214 2101  SEND_VAR_EX/66            ?96       16?37                ?2                  	;0
4215 2101  DO_FCALL_BY_NAME/131      $2154=    ?0                   ?0                  	;0
4216 2101  CONCAT/8                  #2155=    2753:'SELECT `id`, `type`, `stream_display_name` FROM `streams` WHERE `id` IN (' $2154               	;0
4217 2101  CONCAT/8                  #2156=    #2155                2754:');'           	;0
4218 2101  SEND_VAL_EX/116           ?80       #2156                ?1                  	;0
4219 2101  DO_FCALL/60               ?2075     ?0                   ?0                  	;0
4220 2102  INIT_METHOD_CALL/112      ?0        16?3                 2755:'get_rows'     	;0
4221 2102  DO_FCALL/60               $2158=    ?0                   ?0                  	;0
4222 2102  FE_RESET_R/77             $2159=    $2158                ?4232               	;0
4223 2102  FE_FETCH_R/78             ?0        $2159                16?7                	;4232	>>4232	<<4231
4224 2103  FETCH_DIM_R/81            $2160=    16?7                 2757:'id'           	;0
4225 2103  FETCH_DIM_R/81            $2162=    16?7                 2758:'stream_display_name'	;0
4226 2103  INIT_ARRAY/71             #2163=    $2162                ?0                  	;8
4227 2103  FETCH_DIM_R/81            $2164=    16?7                 2759:'type'         	;0
4228 2103  ADD_ARRAY_ELEMENT/72      #2163=    $2164                ?0                  	;0
4229 2103  ASSIGN_DIM/147            ?2079     16?66                $2160               	;0
4230 2103  OP_DATA/137               ?0        #2163                ?0                  	;0
4231 2104  JMP/42                    ?0        ?4223                ?0                  	;0	>>4223
4232 2104  FE_FREE/127               ?0        $2159                ?0                  	;0	<<4222
4233 2108  INIT_FCALL_BY_NAME/59     ?0        ?0                   2760:'count'        	;1
4234 2108  SEND_VAR_EX/66            ?80       16?40                ?1                  	;0
4235 2108  DO_FCALL_BY_NAME/131      $2165=    ?0                   ?0                  	;0
4236 2108  IS_SMALLER/19             #2166=    2762:0               $2165               	;0
4237 2108  BOOL_NOT/13               #2167=    #2166                ?0                  	;0
4238 2108  JMPZ/43                   ?0        #2167                ?4240               	;0	>>4240
4239 2109  GOTO/253                  ?0        ?2963                ?2763               	;0
4240 2111  GOTO/253                  ?0        ?2944                ?2764               	;0	<<4238
4241 2115  INIT_FCALL_BY_NAME/59     ?0        ?0                   2765:'json_encode'  	;1
4242 2115  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
4243 2115  DO_FCALL_BY_NAME/131      $2168=    ?0                   ?0                  	;0
4244 2115  ECHO/40                   ?0        $2168                ?0                  	;0
4245 2116  EXIT/79                   ?0        ?0                   ?0                  	;0
4246 2118  GOTO/253                  ?0        ?3555                ?2767               	;0
4247 2120  INIT_FCALL_BY_NAME/59     ?0        ?0                   2768:'implode'      	;2
4248 2120  SEND_VAL_EX/116           ?80       2770:' AND '         ?1                  	;0
4249 2120  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
4250 2120  DO_FCALL_BY_NAME/131      $2169=    ?0                   ?0                  	;0
4251 2120  CONCAT/8                  #2170=    2771:'WHERE '        $2169               	;0
4252 2120  ASSIGN/38                 ?2089     16?31                #2170               	;0
4253 2122  ROPE_INIT/54              #2173=    ?0                   2772:'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` '	;3
4254 2122  ROPE_ADD/55               #2173=    #2173                16?31               	;1
4255 2122  ROPE_END/56               #2172=    #2173                2773:';'            	;2
4256 2122  ASSIGN/38                 ?2093     16?15                #2172               	;0
4257 2123  INIT_METHOD_CALL/112      ?0        16?3                 2774:'query'        	;1
4258 2123  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
4259 2123  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
4260 2123  DO_FCALL/60               ?2094     ?0                   ?0                  	;0
4261 2124  INIT_METHOD_CALL/112      ?0        16?3                 2776:'num_rows'     	;0
4262 2124  DO_FCALL/60               $2177=    ?0                   ?0                  	;0
4263 2124  IS_EQUAL/17               #2178=    $2177                2778:1              	;0
4264 2124  JMPZ/43                   ?0        #2178                ?4266               	;0	>>4266
4265 2125  GOTO/253                  ?0        ?938                 ?2779               	;0
4266 2127  GOTO/253                  ?0        ?935                 ?2780               	;0	<<4264
4267 2129  FETCH_STATIC_PROP_IS/176  $2179=    2781:'rRequest'      2782:'XUI'          	;0
4268 2129  ISSET_ISEMPTY_DIM_OBJ/115 #2180=    $2179                2784:'created'      	;33554432
4269 2129  ASSIGN/38                 ?2099     16?47                #2180               	;0
4270 2130  ASSIGN/38                 $2182=    16?10                2785:array (
)      	;0
4271 2130  ASSIGN/38                 ?2101     16?11                $2182               	;0
4272 2131  INIT_FCALL_BY_NAME/59     ?0        ?0                   2786:'count'        	;1
4273 2131  FETCH_DIM_FUNC_ARG/93     $2184=    16?0                 2788:'stream_ids'   	;1
4274 2131  SEND_VAR_EX/66            ?80       $2184                ?1                  	;0
4275 2131  DO_FCALL_BY_NAME/131      $2185=    ?0                   ?0                  	;0
4276 2131  IS_SMALLER/19             #2186=    2789:0               $2185               	;0
4277 2131  JMPZ/43                   ?0        #2186                ?4279               	;0	>>4279
4278 2132  GOTO/253                  ?0        ?3272                ?2790               	;0
4279 2134  INIT_FCALL_BY_NAME/59     ?0        ?0                   2791:'json_encode'  	;1	<<4277
4280 2134  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
4281 2134  DO_FCALL_BY_NAME/131      $2187=    ?0                   ?0                  	;0
4282 2134  ECHO/40                   ?0        $2187                ?0                  	;0
4283 2135  EXIT/79                   ?0        ?0                   ?0                  	;0
4284 2136  GOTO/253                  ?0        ?3271                ?2793               	;0
4285 2138  INIT_METHOD_CALL/112      ?0        16?3                 2794:'query'        	;2
4286 2138  SEND_VAL_EX/116           ?80       2796:'SELECT `id` FROM `lines` WHERE `member_id` = ?;' ?1                  	;0
4287 2138  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
4288 2138  DO_FCALL/60               ?2106     ?0                   ?0                  	;0
4289 2140  INIT_METHOD_CALL/112      ?0        16?3                 2797:'get_rows'     	;0
4290 2140  DO_FCALL/60               $2189=    ?0                   ?0                  	;0
4291 2140  FE_RESET_R/77             $2190=    $2189                ?4297               	;0
4292 2140  FE_FETCH_R/78             ?0        $2190                16?7                	;4297	>>4297	<<4296
4293 2141  FETCH_DIM_R/81            $2192=    16?7                 2799:'id'           	;0
4294 2141  ASSIGN_DIM/147            ?2109     16?45                ?4414262            	;0
4295 2141  OP_DATA/137               ?0        $2192                ?0                  	;0
4296 2142  JMP/42                    ?0        ?4292                ?0                  	;0	>>4292
4297 2142  FE_FREE/127               ?0        $2190                ?0                  	;0	<<4291
4298 2145  INIT_STATIC_METHOD_CALL/113 ?0        2800:'XUI'           2802:'A96aB74F1921d4aD'	;3
4299 2145  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
4300 2145  SEND_VAL_EX/116           ?96       2804:false           ?2                  	;0
4301 2145  SEND_VAL_EX/116           ?112      2805:true            ?3                  	;0
4302 2145  DO_FCALL/60               $2193=    ?0                   ?0                  	;0
4303 2145  ASSIGN/38                 ?2112     16?70                $2193               	;0
4304 2146  GOTO/253                  ?0        ?2732                ?2806               	;0
4305 2148  ASSIGN/38                 ?2113     16?31                2807:''             	;0
4306 2149  GOTO/253                  ?0        ?4313                ?2808               	;0
4307 2151  INIT_FCALL_BY_NAME/59     ?0        ?0                   2809:'implode'      	;2
4308 2151  SEND_VAL_EX/116           ?80       2811:' AND '         ?1                  	;0
4309 2151  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
4310 2151  DO_FCALL_BY_NAME/131      $2196=    ?0                   ?0                  	;0
4311 2151  CONCAT/8                  #2197=    2812:'WHERE '        $2196               	;0
4312 2151  ASSIGN/38                 ?2116     16?31                #2197               	;0
4313 2153  GOTO/253                  ?0        ?6580                ?2813               	;0
4314 2155  FETCH_STATIC_PROP_R/173   $2199=    2814:'rRequest'      2815:'XUI'          	;0
4315 2155  FETCH_DIM_R/81            $2200=    $2199                2817:'filter'       	;0
4316 2155  IS_EQUAL/17               #2201=    $2200                2818:2              	;0
4317 2155  JMPZ/43                   ?0        #2201                ?4319               	;0	>>4319
4318 2156  GOTO/253                  ?0        ?2651                ?2819               	;0
4319 2158  FETCH_STATIC_PROP_R/173   $2202=    2820:'rRequest'      2821:'XUI'          	;0	<<4317
4320 2158  FETCH_DIM_R/81            $2203=    $2202                2823:'filter'       	;0
4321 2158  IS_EQUAL/17               #2204=    $2203                2824:3              	;0
4322 2158  JMPZ/43                   ?0        #2204                ?4324               	;0	>>4324
4323 2159  GOTO/253                  ?0        ?6098                ?2825               	;0
4324 2161  FETCH_STATIC_PROP_R/173   $2205=    2826:'rRequest'      2827:'XUI'          	;0	<<4322
4325 2161  FETCH_DIM_R/81            $2206=    $2205                2829:'filter'       	;0
4326 2161  IS_EQUAL/17               #2207=    $2206                2830:4              	;0
4327 2161  BOOL_NOT/13               #2208=    #2207                ?0                  	;0
4328 2161  JMPZ/43                   ?0        #2208                ?4330               	;0	>>4330
4329 2162  GOTO/253                  ?0        ?4332                ?2831               	;0
4330 2164  ASSIGN_DIM/147            ?2127     16?11                ?4397406            	;0	<<4328
4331 2164  OP_DATA/137               ?0        2832:'`lines`.`is_trial` = 1' ?0                  	;0
4332 2166  GOTO/253                  ?0        ?6097                ?2833               	;0
4333 2168  INIT_FCALL_BY_NAME/59     ?0        ?0                   2834:'implode'      	;2
4334 2168  SEND_VAL_EX/116           ?80       2836:' AND '         ?1                  	;0
4335 2168  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
4336 2168  DO_FCALL_BY_NAME/131      $2210=    ?0                   ?0                  	;0
4337 2168  CONCAT/8                  #2211=    2837:'WHERE '        $2210               	;0
4338 2168  ASSIGN/38                 ?2130     16?31                #2211               	;0
4339 2170  FETCH_DIM_R/81            $2213=    16?13                16?14               	;0
4340 2170  BOOL_NOT/13               #2214=    $2213                ?0                  	;0
4341 2170  JMPZ/43                   ?0        #2214                ?4343               	;0	>>4343
4342 2171  GOTO/253                  ?0        ?3402                ?2838               	;0
4343 2173  INIT_FCALL_BY_NAME/59     ?0        ?0                   2839:'strtolower'   	;1	<<4341
4344 2173  FETCH_STATIC_PROP_FUNC_ARG/177 $2215=    2841:'rRequest'      2842:'XUI'          	;1
4345 2173  FETCH_DIM_FUNC_ARG/93     $2216=    $2215                2844:'order'        	;1
4346 2173  FETCH_DIM_FUNC_ARG/93     $2217=    $2216                2845:0              	;1
4347 2173  FETCH_DIM_FUNC_ARG/93     $2218=    $2217                2846:'dir'          	;1
4348 2173  SEND_VAR_EX/66            ?80       $2218                ?1                  	;0
4349 2173  DO_FCALL_BY_NAME/131      $2219=    ?0                   ?0                  	;0
4350 2173  IS_IDENTICAL/15           #2220=    $2219                2847:'desc'         	;0
4351 2173  JMPZ/43                   ?0        #2220                ?4354               	;0	>>4354
4352 2173  QM_ASSIGN/22              #2221=    2848:'desc'          ?0                  	;0
4353 2173  JMP/42                    ?0        ?4355                ?0                  	;0	>>4355
4354 2173  QM_ASSIGN/22              #2221=    2849:'asc'           ?0                  	;0	<<4351
4355 2173  ASSIGN/38                 ?2140     16?29                #2221               	;0	<<4353
4356 2174  FETCH_DIM_R/81            $2223=    16?13                16?14               	;0
4357 2174  CONCAT/8                  #2224=    2850:'ORDER BY '     $2223               	;0
4358 2174  CONCAT/8                  #2225=    #2224                2851:' '            	;0
4359 2174  CONCAT/8                  #2226=    #2225                16?29               	;0
4360 2174  ASSIGN/38                 ?2145     16?30                #2226               	;0
4361 2175  GOTO/253                  ?0        ?3402                ?2852               	;0
4362 2177  INIT_FCALL_BY_NAME/59     ?0        ?0                   2853:'session_start'	;0	<<0
4363 2177  DO_FCALL_BY_NAME/131      ?2146     ?0                   ?0                  	;0
4364 2178  INIT_FCALL_BY_NAME/59     ?0        ?0                   2855:'session_write_close'	;0
4365 2178  DO_FCALL_BY_NAME/131      ?2147     ?0                   ?0                  	;0
4366 2179  INIT_FCALL_BY_NAME/59     ?0        ?0                   2857:'file_exists'  	;1
4367 2179  SEND_VAL_EX/116           ?80       2859:'../www/init.php' ?1                  	;0
4368 2179  DO_FCALL_BY_NAME/131      $2230=    ?0                   ?0                  	;0
4369 2179  JMPZ/43                   ?0        $2230                ?4371               	;0	>>4371
4370 2180  GOTO/253                  ?0        ?1                   ?2860               	;0
4371 2182  INCLUDE_OR_EVAL/73        ?2149     2861:'../../../www/init.php' ?0                  	;16	<<4369
4372 2183  GOTO/253                  ?0        ?2                   ?2862               	;0
4373 2184  GOTO/253                  ?0        ?1                   ?2863               	;0
4374 2186  FETCH_STATIC_PROP_R/173   $2233=    2864:'rRequest'      2865:'XUI'          	;0
4375 2186  FETCH_DIM_R/81            $2234=    $2233                2867:'stream'       	;0
4376 2186  ASSIGN_DIM/147            ?2150     16?10                ?4397406            	;0
4377 2186  OP_DATA/137               ?0        $2234                ?0                  	;0
4378 2188  INIT_FCALL_BY_NAME/59     ?0        ?0                   2868:'intval'       	;1
4379 2188  FETCH_STATIC_PROP_FUNC_ARG/177 $2235=    2870:'rRequest'      2871:'XUI'          	;1
4380 2188  FETCH_DIM_FUNC_ARG/93     $2236=    $2235                2873:'user'         	;1
4381 2188  SEND_VAR_EX/66            ?80       $2236                ?1                  	;0
4382 2188  DO_FCALL_BY_NAME/131      $2237=    ?0                   ?0                  	;0
4383 2188  IS_SMALLER/19             #2238=    2874:0               $2237               	;0
4384 2188  BOOL_NOT/13               #2239=    #2238                ?0                  	;0
4385 2188  JMPZ/43                   ?0        #2239                ?4387               	;0	>>4387
4386 2189  GOTO/253                  ?0        ?6708                ?2875               	;0
4387 2191  ASSIGN_DIM/147            ?2158     16?11                ?4397406            	;0	<<4385
4388 2191  OP_DATA/137               ?0        2876:'`lines`.`member_id` = ?' ?0                  	;0
4389 2192  FETCH_STATIC_PROP_R/173   $2242=    2877:'rRequest'      2878:'XUI'          	;0
4390 2192  FETCH_DIM_R/81            $2243=    $2242                2880:'user'         	;0
4391 2192  ASSIGN_DIM/147            ?2159     16?10                ?0                  	;0
4392 2192  OP_DATA/137               ?0        $2243                ?0                  	;0
4393 2193  GOTO/253                  ?0        ?6708                ?2881               	;0
4394 2195  IS_EQUAL/17               #2244=    16?46                2882:'streams'      	;0
4395 2195  JMPZ/43                   ?0        #2244                ?4397               	;0	>>4397
4396 2196  GOTO/253                  ?0        ?3375                ?2883               	;0
4397 2198  IS_EQUAL/17               #2245=    16?46                2884:'radios'       	;0	<<4395
4398 2198  JMPZ/43                   ?0        #2245                ?4400               	;0	>>4400
4399 2199  GOTO/253                  ?0        ?5682                ?2885               	;0
4400 2201  IS_EQUAL/17               #2246=    16?46                2886:'movies'       	;0	<<4398
4401 2201  JMPZ/43                   ?0        #2246                ?4403               	;0	>>4403
4402 2202  GOTO/253                  ?0        ?6102                ?2887               	;0
4403 2204  IS_EQUAL/17               #2247=    16?46                2888:'episodes'     	;0	<<4401
4404 2204  JMPZ/43                   ?0        #2247                ?4406               	;0	>>4406
4405 2205  GOTO/253                  ?0        ?5604                ?2889               	;0
4406 2207  IS_EQUAL/17               #2248=    16?46                2890:'line_activity'	;0	<<4404
4407 2207  JMPZ/43                   ?0        #2248                ?4409               	;0	>>4409
4408 2208  GOTO/253                  ?0        ?2255                ?2891               	;0
4409 2210  GOTO/253                  ?0        ?4476                ?2892               	;0	<<4407
4410 2212  FETCH_DIM_R/81            $2249=    16?13                16?14               	;0
4411 2212  BOOL_NOT/13               #2250=    $2249                ?0                  	;0
4412 2212  JMPZ/43                   ?0        #2250                ?4414               	;0	>>4414
4413 2213  GOTO/253                  ?0        ?4432                ?2893               	;0
4414 2215  INIT_FCALL_BY_NAME/59     ?0        ?0                   2894:'strtolower'   	;1	<<4412
4415 2215  FETCH_STATIC_PROP_FUNC_ARG/177 $2251=    2896:'rRequest'      2897:'XUI'          	;1
4416 2215  FETCH_DIM_FUNC_ARG/93     $2252=    $2251                2899:'order'        	;1
4417 2215  FETCH_DIM_FUNC_ARG/93     $2253=    $2252                2900:0              	;1
4418 2215  FETCH_DIM_FUNC_ARG/93     $2254=    $2253                2901:'dir'          	;1
4419 2215  SEND_VAR_EX/66            ?80       $2254                ?1                  	;0
4420 2215  DO_FCALL_BY_NAME/131      $2255=    ?0                   ?0                  	;0
4421 2215  IS_IDENTICAL/15           #2256=    $2255                2902:'desc'         	;0
4422 2215  JMPZ/43                   ?0        #2256                ?4425               	;0	>>4425
4423 2215  QM_ASSIGN/22              #2257=    2903:'desc'          ?0                  	;0
4424 2215  JMP/42                    ?0        ?4426                ?0                  	;0	>>4426
4425 2215  QM_ASSIGN/22              #2257=    2904:'asc'           ?0                  	;0	<<4422
4426 2215  ASSIGN/38                 ?2176     16?29                #2257               	;0	<<4424
4427 2216  FETCH_DIM_R/81            $2259=    16?13                16?14               	;0
4428 2216  CONCAT/8                  #2260=    2905:'ORDER BY '     $2259               	;0
4429 2216  CONCAT/8                  #2261=    #2260                2906:' '            	;0
4430 2216  CONCAT/8                  #2262=    #2261                16?29               	;0
4431 2216  ASSIGN/38                 ?2181     16?30                #2262               	;0
4432 2218  ROPE_INIT/54              #2265=    ?0                   2907:'SELECT COUNT(*) AS `count` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` LEFT JOIN `users` AS `r` on `r`.`id` = `users`.`owner_id` '	;3
4433 2218  ROPE_ADD/55               #2265=    #2265                16?31               	;1
4434 2218  ROPE_END/56               #2264=    #2265                2908:';'            	;2
4435 2218  ASSIGN/38                 ?2185     16?15                #2264               	;0
4436 2219  GOTO/253                  ?0        ?196                 ?2909               	;0
4437 2221  INIT_FCALL_BY_NAME/59     ?0        ?0                   2910:'strlen'       	;1
4438 2221  FETCH_STATIC_PROP_FUNC_ARG/177 $2268=    2912:'rRequest'      2913:'XUI'          	;1
4439 2221  FETCH_DIM_FUNC_ARG/93     $2269=    $2268                2915:'search'       	;1
4440 2221  FETCH_DIM_FUNC_ARG/93     $2270=    $2269                2916:'value'        	;1
4441 2221  SEND_VAR_EX/66            ?80       $2270                ?1                  	;0
4442 2221  DO_FCALL_BY_NAME/131      $2271=    ?0                   ?0                  	;0
4443 2221  IS_SMALLER/19             #2272=    2917:0               $2271               	;0
4444 2221  BOOL_NOT/13               #2273=    #2272                ?0                  	;0
4445 2221  JMPZ/43                   ?0        #2273                ?4447               	;0	>>4447
4446 2222  GOTO/253                  ?0        ?4464                ?2918               	;0
4447 2224  INIT_FCALL_BY_NAME/59     ?0        ?0                   2919:'range'        	;2	<<4445
4448 2224  SEND_VAL_EX/116           ?80       2921:1               ?1                  	;0
4449 2224  SEND_VAL_EX/116           ?96       2922:6               ?2                  	;0
4450 2224  DO_FCALL_BY_NAME/131      $2274=    ?0                   ?0                  	;0
4451 2224  FE_RESET_R/77             $2275=    $2274                ?4461               	;0
4452 2224  FE_FETCH_R/78             ?0        $2275                16?9                	;4461	>>4461	<<4460
4453 2225  FETCH_STATIC_PROP_R/173   $2277=    2923:'rRequest'      2924:'XUI'          	;0
4454 2225  FETCH_DIM_R/81            $2278=    $2277                2926:'search'       	;0
4455 2225  FETCH_DIM_R/81            $2279=    $2278                2927:'value'        	;0
4456 2225  CONCAT/8                  #2280=    2928:'%'             $2279               	;0
4457 2225  CONCAT/8                  #2281=    #2280                2929:'%'            	;0
4458 2225  ASSIGN_DIM/147            ?2194     16?10                ?1658257528         	;0
4459 2225  OP_DATA/137               ?0        #2281                ?0                  	;0
4460 2226  JMP/42                    ?0        ?4452                ?0                  	;0	>>4452
4461 2226  FE_FREE/127               ?0        $2275                ?0                  	;0	<<4451
4462 2229  ASSIGN_DIM/147            ?2200     16?11                ?2                  	;0
4463 2229  OP_DATA/137               ?0        2930:'(`lines`.`username` LIKE ? OR `lines`.`password` LIKE ? OR `users`.`username` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`max_connections` LIKE ? OR `lines`.`reseller_notes` LIKE ?)' ?0                  	;0
4464 2231  GOTO/253                  ?0        ?2865                ?2931               	;0
4465 2233  ASSIGN/38                 ?2201     16?14                2932:0              	;0
4466 2234  GOTO/253                  ?0        ?4475                ?2933               	;0
4467 2236  INIT_FCALL_BY_NAME/59     ?0        ?0                   2934:'intval'       	;1
4468 2236  FETCH_STATIC_PROP_FUNC_ARG/177 $2284=    2936:'rRequest'      2937:'XUI'          	;1
4469 2236  FETCH_DIM_FUNC_ARG/93     $2285=    $2284                2939:'order'        	;1
4470 2236  FETCH_DIM_FUNC_ARG/93     $2286=    $2285                2940:0              	;1
4471 2236  FETCH_DIM_FUNC_ARG/93     $2287=    $2286                2941:'column'       	;1
4472 2236  SEND_VAR_EX/66            ?80       $2287                ?1                  	;0
4473 2236  DO_FCALL_BY_NAME/131      $2288=    ?0                   ?0                  	;0
4474 2236  ASSIGN/38                 ?2207     16?14                $2288               	;0
4475 2238  GOTO/253                  ?0        ?4491                ?2942               	;0
4476 2240  IS_EQUAL/17               #2290=    16?46                2943:'live_connections'	;0
4477 2240  JMPZ/43                   ?0        #2290                ?4479               	;0	>>4479
4478 2241  GOTO/253                  ?0        ?507                 ?2944               	;0
4479 2243  IS_EQUAL/17               #2291=    16?46                2945:'reg_user_logs'	;0	<<4477
4480 2243  JMPZ/43                   ?0        #2291                ?4482               	;0	>>4482
4481 2244  GOTO/253                  ?0        ?4193                ?2946               	;0
4482 2246  IS_EQUAL/17               #2292=    16?46                2947:'reg_users'    	;0	<<4480
4483 2246  BOOL_NOT/13               #2293=    #2292                ?0                  	;0
4484 2246  JMPZ/43                   ?0        #2293                ?4486               	;0	>>4486
4485 2247  GOTO/253                  ?0        ?4601                ?2948               	;0
4486 2249  FETCH_DIM_R/81            $2294=    16?0                 2949:'create_sub_resellers'	;0	<<4484
4487 2249  JMPZ/43                   ?0        $2294                ?4489               	;0	>>4489
4488 2250  GOTO/253                  ?0        ?6690                ?2950               	;0
4489 2252  EXIT/79                   ?0        ?0                   ?0                  	;0	<<4487
4490 2253  GOTO/253                  ?0        ?6690                ?2951               	;0
4491 2255  ASSIGN/38                 $2295=    16?10                2952:array (
)      	;0
4492 2255  ASSIGN/38                 ?2214     16?11                $2295               	;0
4493 2256  ASSIGN_DIM/147            ?2215     16?11                ?2670195408         	;0
4494 2256  OP_DATA/137               ?0        2953:'`hls_end` = 0' ?0                  	;0
4495 2257  INIT_FCALL_BY_NAME/59     ?0        ?0                   2954:'implode'      	;2
4496 2257  SEND_VAL_EX/116           ?80       2956:','             ?1                  	;0
4497 2257  FETCH_DIM_FUNC_ARG/93     $2299=    16?5                 2957:'reports'      	;2
4498 2257  SEND_VAR_EX/66            ?96       $2299                ?2                  	;0
4499 2257  DO_FCALL_BY_NAME/131      $2300=    ?0                   ?0                  	;0
4500 2257  CONCAT/8                  #2301=    2958:'`lines`.`member_id` IN (' $2300               	;0
4501 2257  CONCAT/8                  #2302=    #2301                2959:')'            	;0
4502 2257  ASSIGN_DIM/147            ?2216     16?11                ?0                  	;0
4503 2257  OP_DATA/137               ?0        #2302                ?0                  	;0
4504 2258  INIT_FCALL_BY_NAME/59     ?0        ?0                   2960:'strlen'       	;1
4505 2258  FETCH_STATIC_PROP_FUNC_ARG/177 $2303=    2962:'rRequest'      2963:'XUI'          	;1
4506 2258  FETCH_DIM_FUNC_ARG/93     $2304=    $2303                2965:'search'       	;1
4507 2258  FETCH_DIM_FUNC_ARG/93     $2305=    $2304                2966:'value'        	;1
4508 2258  SEND_VAR_EX/66            ?80       $2305                ?1                  	;0
4509 2258  DO_FCALL_BY_NAME/131      $2306=    ?0                   ?0                  	;0
4510 2258  IS_SMALLER/19             #2307=    2967:0               $2306               	;0
4511 2258  BOOL_NOT/13               #2308=    #2307                ?0                  	;0
4512 2258  JMPZ/43                   ?0        #2308                ?4514               	;0	>>4514
4513 2259  GOTO/253                  ?0        ?1941                ?2968               	;0
4514 2261  INIT_FCALL_BY_NAME/59     ?0        ?0                   2969:'range'        	;2	<<4512
4515 2261  SEND_VAL_EX/116           ?80       2971:1               ?1                  	;0
4516 2261  SEND_VAL_EX/116           ?96       2972:9               ?2                  	;0
4517 2261  DO_FCALL_BY_NAME/131      $2309=    ?0                   ?0                  	;0
4518 2261  FE_RESET_R/77             $2310=    $2309                ?4528               	;0
4519 2261  FE_FETCH_R/78             ?0        $2310                16?9                	;4528	>>4528	<<4527
4520 2262  FETCH_STATIC_PROP_R/173   $2312=    2973:'rRequest'      2974:'XUI'          	;0
4521 2262  FETCH_DIM_R/81            $2313=    $2312                2976:'search'       	;0
4522 2262  FETCH_DIM_R/81            $2314=    $2313                2977:'value'        	;0
4523 2262  CONCAT/8                  #2315=    2978:'%'             $2314               	;0
4524 2262  CONCAT/8                  #2316=    #2315                2979:'%'            	;0
4525 2262  ASSIGN_DIM/147            ?2229     16?10                ?1658261400         	;0
4526 2262  OP_DATA/137               ?0        #2316                ?0                  	;0
4527 2263  JMP/42                    ?0        ?4519                ?0                  	;0	>>4519
4528 2263  FE_FREE/127               ?0        $2310                ?0                  	;0	<<4518
4529 2265  GOTO/253                  ?0        ?1939                ?2980               	;0
4530 2267  FETCH_DIM_R/81            $2318=    16?1                 2982:'recordsTotal' 	;0
4531 2267  ASSIGN_DIM/147            ?2235     16?1                 2981:'recordsFiltered'	;0
4532 2267  OP_DATA/137               ?0        $2318                ?0                  	;0
4533 2268  FETCH_DIM_R/81            $2319=    16?1                 2983:'recordsTotal' 	;0
4534 2268  IS_SMALLER/19             #2320=    2984:0               $2319               	;0
4535 2268  BOOL_NOT/13               #2321=    #2320                ?0                  	;0
4536 2268  JMPZ/43                   ?0        #2321                ?4538               	;0	>>4538
4537 2269  GOTO/253                  ?0        ?4241                ?2985               	;0
4538 2271  ROPE_INIT/54              #2323=    ?0                   2986:'SELECT `lines`.`id`, `lines`.`username`, `lines`.`member_id`, `lines`.`is_isplock`, `mag_devices`.`mac`, `mag_devices`.`stb_type`, `mag_devices`.`mag_id`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`enabled`, `lines`.`reseller_notes`, `lines`.`max_connections`,  `lines`.`is_trial`, `users`.`username` AS `owner_name`, (SELECT count(*) FROM `lines_live` WHERE `lines`.`id` = `lines_live`.`user_id` AND `hls_end` = 0) AS `active_connections` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` '	;9	<<4536
4539 2271  ROPE_ADD/55               #2323=    #2323                16?31               	;1
4540 2271  ROPE_ADD/55               #2323=    #2323                2987:' '            	;2
4541 2271  ROPE_ADD/55               #2323=    #2323                16?30               	;3
4542 2271  ROPE_ADD/55               #2323=    #2323                2988:' LIMIT '      	;4
4543 2271  ROPE_ADD/55               #2323=    #2323                16?26               	;5
4544 2271  ROPE_ADD/55               #2323=    #2323                2989:', '           	;6
4545 2271  ROPE_ADD/55               #2323=    #2323                16?33               	;7
4546 2271  ROPE_END/56               #2322=    #2323                2990:';'            	;8
4547 2271  ASSIGN/38                 ?2246     16?32                #2322               	;0
4548 2272  INIT_METHOD_CALL/112      ?0        16?3                 2991:'query'        	;1
4549 2272  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
4550 2272  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
4551 2272  DO_FCALL/60               ?2247     ?0                   ?0                  	;0
4552 2273  INIT_METHOD_CALL/112      ?0        16?3                 2993:'num_rows'     	;0
4553 2273  DO_FCALL/60               $2330=    ?0                   ?0                  	;0
4554 2273  IS_SMALLER/19             #2331=    2995:0               $2330               	;0
4555 2273  BOOL_NOT/13               #2332=    #2331                ?0                  	;0
4556 2273  JMPZ/43                   ?0        #2332                ?4558               	;0	>>4558
4557 2274  GOTO/253                  ?0        ?4241                ?2996               	;0
4558 2276  GOTO/253                  ?0        ?3086                ?2997               	;0	<<4556
4559 2278  INIT_METHOD_CALL/112      ?0        16?3                 2999:'get_row'      	;0
4560 2278  DO_FCALL/60               $2334=    ?0                   ?0                  	;0
4561 2278  FETCH_DIM_R/81            $2335=    $2334                3001:'count'        	;0
4562 2278  ASSIGN_DIM/147            ?2251     16?1                 2998:'recordsTotal' 	;0
4563 2278  OP_DATA/137               ?0        $2335                ?0                  	;0
4564 2280  FETCH_DIM_R/81            $2337=    16?1                 3003:'recordsTotal' 	;0
4565 2280  ASSIGN_DIM/147            ?2254     16?1                 3002:'recordsFiltered'	;0
4566 2280  OP_DATA/137               ?0        $2337                ?0                  	;0
4567 2281  FETCH_DIM_R/81            $2338=    16?1                 3004:'recordsTotal' 	;0
4568 2281  IS_SMALLER/19             #2339=    3005:0               $2338               	;0
4569 2281  BOOL_NOT/13               #2340=    #2339                ?0                  	;0
4570 2281  JMPZ/43                   ?0        #2340                ?4572               	;0	>>4572
4571 2282  GOTO/253                  ?0        ?2607                ?3006               	;0
4572 2284  INIT_FCALL_BY_NAME/59     ?0        ?0                   3007:'d8C8284136938eF0'	;0	<<4570
4573 2284  DO_FCALL_BY_NAME/131      $2341=    ?0                   ?0                  	;0
4574 2284  ASSIGN/38                 ?2260     16?75                $2341               	;0
4575 2285  GOTO/253                  ?0        ?6111                ?3009               	;0
4576 2287  FETCH_DIM_R/81            $2343=    16?0                 3010:'create_enigma'	;0
4577 2287  JMPZ/43                   ?0        $2343                ?4579               	;0	>>4579
4578 2288  GOTO/253                  ?0        ?4580                ?3011               	;0
4579 2290  EXIT/79                   ?0        ?0                   ?0                  	;0	<<4577
4580 2292  ASSIGN/38                 ?2262     16?13                3012:array (
  0 => '`lines`.`id`',
  1 => '`lines`.`username`',
  2 => '`enigma2_devices`.`mac`',
  3 => '`enigma2_devices`.`public_ip`',
  4 => '`users`.`username`',
  5 => '`lines`.`enabled`',
  6 => '`active_connections`',
  7 => '`lines`.`is_trial`',
  8 => '`lines`.`exp_date`',
  9 => false,
)	;0
4581 2293  FETCH_STATIC_PROP_IS/176  $2345=    3013:'rRequest'      3014:'XUI'          	;0
4582 2293  ISSET_ISEMPTY_DIM_OBJ/115 #2346=    $2345                3016:'order'        	;33554432
4583 2293  JMPZ_EX/46                #2346=    #2346                ?4593               	;0	>>4593
4584 2293  INIT_FCALL_BY_NAME/59     ?0        ?0                   3017:'strlen'       	;1
4585 2293  FETCH_STATIC_PROP_FUNC_ARG/177 $2347=    3019:'rRequest'      3020:'XUI'          	;1
4586 2293  FETCH_DIM_FUNC_ARG/93     $2348=    $2347                3022:'order'        	;1
4587 2293  FETCH_DIM_FUNC_ARG/93     $2349=    $2348                3023:0              	;1
4588 2293  FETCH_DIM_FUNC_ARG/93     $2350=    $2349                3024:'column'       	;1
4589 2293  SEND_VAR_EX/66            ?80       $2350                ?1                  	;0
4590 2293  DO_FCALL_BY_NAME/131      $2351=    ?0                   ?0                  	;0
4591 2293  IS_SMALLER/19             #2352=    3025:0               $2351               	;0
4592 2293  BOOL/52                   #2346=    #2352                ?0                  	;0
4593 2293  JMPZ/43                   ?0        #2346                ?4595               	;0	>>4595	<<4583
4594 2294  GOTO/253                  ?0        ?767                 ?3026               	;0
4595 2296  GOTO/253                  ?0        ?765                 ?3027               	;0	<<4593
4596 2299  INIT_FCALL_BY_NAME/59     ?0        ?0                   3028:'json_encode'  	;1
4597 2299  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
4598 2299  DO_FCALL_BY_NAME/131      $2353=    ?0                   ?0                  	;0
4599 2299  ECHO/40                   ?0        $2353                ?0                  	;0
4600 2300  EXIT/79                   ?0        ?0                   ?0                  	;0
4601 2302  GOTO/253                  ?0        ?2612                ?3030               	;0
4602 2303  GOTO/253                  ?0        ?4193                ?3031               	;0
4603 2305  INIT_METHOD_CALL/112      ?0        16?3                 3033:'get_row'      	;0
4604 2305  DO_FCALL/60               $2355=    ?0                   ?0                  	;0
4605 2305  FETCH_DIM_R/81            $2356=    $2355                3035:'count'        	;0
4606 2305  ASSIGN_DIM/147            ?2272     16?1                 3032:'recordsTotal' 	;0
4607 2305  OP_DATA/137               ?0        $2356                ?0                  	;0
4608 2307  FETCH_DIM_R/81            $2358=    16?1                 3037:'recordsTotal' 	;0
4609 2307  ASSIGN_DIM/147            ?2275     16?1                 3036:'recordsFiltered'	;0
4610 2307  OP_DATA/137               ?0        $2358                ?0                  	;0
4611 2308  FETCH_DIM_R/81            $2359=    16?1                 3038:'recordsTotal' 	;0
4612 2308  IS_SMALLER/19             #2360=    3039:0               $2359               	;0
4613 2308  BOOL_NOT/13               #2361=    #2360                ?0                  	;0
4614 2308  JMPZ/43                   ?0        #2361                ?4616               	;0	>>4616
4615 2309  GOTO/253                  ?0        ?4596                ?3040               	;0
4616 2311  ROPE_INIT/54              #2363=    ?0                   3041:'SELECT `users`.`id`, `users`.`status`, `users_groups`.`is_reseller`, `users`.`notes`, `users`.`owner_id`, `users`.`credits`, `users`.`username`, `users`.`email`, `users`.`ip`, FROM_UNIXTIME(`users`.`date_registered`) AS `date_registered`, FROM_UNIXTIME(`users`.`last_login`) AS `last_login`, `r`.`username` as `owner_username`, `users_groups`.`group_name`, `users`.`status`, (SELECT COUNT(`id`) FROM `lines` WHERE `member_id` = `users`.`id`) AS `user_count` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` LEFT JOIN `users` AS `r` on `r`.`id` = `users`.`owner_id` '	;9	<<4614
4617 2311  ROPE_ADD/55               #2363=    #2363                16?31               	;1
4618 2311  ROPE_ADD/55               #2363=    #2363                3042:' '            	;2
4619 2311  ROPE_ADD/55               #2363=    #2363                16?30               	;3
4620 2311  ROPE_ADD/55               #2363=    #2363                3043:' LIMIT '      	;4
4621 2311  ROPE_ADD/55               #2363=    #2363                16?26               	;5
4622 2311  ROPE_ADD/55               #2363=    #2363                3044:', '           	;6
4623 2311  ROPE_ADD/55               #2363=    #2363                16?33               	;7
4624 2311  ROPE_END/56               #2362=    #2363                3045:';'            	;8
4625 2311  ASSIGN/38                 ?2286     16?32                #2362               	;0
4626 2312  GOTO/253                  ?0        ?5797                ?3046               	;0
4627 2314  INIT_FCALL_BY_NAME/59     ?0        ?0                   3047:'count'        	;1
4628 2314  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
4629 2314  DO_FCALL_BY_NAME/131      $2369=    ?0                   ?0                  	;0
4630 2314  IS_SMALLER/19             #2370=    3049:0               $2369               	;0
4631 2314  JMPZ/43                   ?0        #2370                ?4633               	;0	>>4633
4632 2315  GOTO/253                  ?0        ?4635                ?3050               	;0
4633 2317  ASSIGN/38                 ?2289     16?31                3051:''             	;0	<<4631
4634 2318  GOTO/253                  ?0        ?4975                ?3052               	;0
4635 2320  INIT_FCALL_BY_NAME/59     ?0        ?0                   3053:'implode'      	;2
4636 2320  SEND_VAL_EX/116           ?80       3055:' AND '         ?1                  	;0
4637 2320  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
4638 2320  DO_FCALL_BY_NAME/131      $2372=    ?0                   ?0                  	;0
4639 2320  CONCAT/8                  #2373=    3056:'WHERE '        $2372               	;0
4640 2320  ASSIGN/38                 ?2292     16?31                #2373               	;0
4641 2321  GOTO/253                  ?0        ?4975                ?3057               	;0
4642 2323  ASSIGN_DIM/147            ?2293     16?1                 3058:'recordsTotal' 	;0
4643 2323  OP_DATA/137               ?0        3059:0               ?0                  	;0
4644 2324  GOTO/253                  ?0        ?4650                ?3060               	;0
4645 2326  INIT_METHOD_CALL/112      ?0        16?3                 3062:'get_row'      	;0
4646 2326  DO_FCALL/60               $2377=    ?0                   ?0                  	;0
4647 2326  FETCH_DIM_R/81            $2378=    $2377                3064:'count'        	;0
4648 2326  ASSIGN_DIM/147            ?2294     16?1                 3061:'recordsTotal' 	;0
4649 2326  OP_DATA/137               ?0        $2378                ?0                  	;0
4650 2328  GOTO/253                  ?0        ?1121                ?3065               	;0
4651 2331  INIT_FCALL_BY_NAME/59     ?0        ?0                   3066:'count'        	;1
4652 2331  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
4653 2331  DO_FCALL_BY_NAME/131      $2379=    ?0                   ?0                  	;0
4654 2331  IS_SMALLER/19             #2380=    3068:0               $2379               	;0
4655 2331  JMPZ/43                   ?0        #2380                ?4657               	;0	>>4657
4656 2332  GOTO/253                  ?0        ?4659                ?3069               	;0
4657 2334  ASSIGN/38                 ?2299     16?31                3070:''             	;0	<<4655
4658 2335  GOTO/253                  ?0        ?4253                ?3071               	;0
4659 2337  GOTO/253                  ?0        ?4247                ?3072               	;0
4660 2339  FETCH_STATIC_PROP_IS/176  $2382=    3073:'rRequest'      3074:'XUI'          	;0
4661 2339  ISSET_ISEMPTY_DIM_OBJ/115 #2383=    $2382                3076:'api_key'      	;33554432
4662 2339  JMPZ/43                   ?0        #2383                ?4664               	;0	>>4664
4663 2340  GOTO/253                  ?0        ?2731                ?3077               	;0
4664 2342  FETCH_IS/89               $2384=    3078:'_SESSION'      ?0                  	;0	<<4662
4665 2342  ISSET_ISEMPTY_DIM_OBJ/115 #2385=    $2384                3079:'reseller'     	;33554432
4666 2342  JMPZ/43                   ?0        #2385                ?4668               	;0	>>4668
4667 2343  GOTO/253                  ?0        ?2729                ?3080               	;0
4668 2345  INIT_FCALL_BY_NAME/59     ?0        ?0                   3081:'json_encode'  	;1	<<4666
4669 2345  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
4670 2345  DO_FCALL_BY_NAME/131      $2386=    ?0                   ?0                  	;0
4671 2345  ECHO/40                   ?0        $2386                ?0                  	;0
4672 2346  EXIT/79                   ?0        ?0                   ?0                  	;0
4673 2347  GOTO/253                  ?0        ?2730                ?3083               	;0
4674 2348  GOTO/253                  ?0        ?2729                ?3084               	;0
4675 2350  INIT_FCALL_BY_NAME/59     ?0        ?0                   3085:'strlen'       	;1
4676 2350  FETCH_STATIC_PROP_FUNC_ARG/177 $2387=    3087:'rRequest'      3088:'XUI'          	;1
4677 2350  FETCH_DIM_FUNC_ARG/93     $2388=    $2387                3090:'search'       	;1
4678 2350  FETCH_DIM_FUNC_ARG/93     $2389=    $2388                3091:'value'        	;1
4679 2350  SEND_VAR_EX/66            ?80       $2389                ?1                  	;0
4680 2350  DO_FCALL_BY_NAME/131      $2390=    ?0                   ?0                  	;0
4681 2350  IS_SMALLER/19             #2391=    3092:0               $2390               	;0
4682 2350  BOOL_NOT/13               #2392=    #2391                ?0                  	;0
4683 2350  JMPZ/43                   ?0        #2392                ?4685               	;0	>>4685
4684 2351  GOTO/253                  ?0        ?4702                ?3093               	;0
4685 2353  INIT_FCALL_BY_NAME/59     ?0        ?0                   3094:'range'        	;2	<<4683
4686 2353  SEND_VAL_EX/116           ?80       3096:1               ?1                  	;0
4687 2353  SEND_VAL_EX/116           ?96       3097:3               ?2                  	;0
4688 2353  DO_FCALL_BY_NAME/131      $2393=    ?0                   ?0                  	;0
4689 2353  FE_RESET_R/77             $2394=    $2393                ?4699               	;0
4690 2353  FE_FETCH_R/78             ?0        $2394                16?9                	;4699	>>4699	<<4698
4691 2354  FETCH_STATIC_PROP_R/173   $2396=    3098:'rRequest'      3099:'XUI'          	;0
4692 2354  FETCH_DIM_R/81            $2397=    $2396                3101:'search'       	;0
4693 2354  FETCH_DIM_R/81            $2398=    $2397                3102:'value'        	;0
4694 2354  CONCAT/8                  #2399=    3103:'%'             $2398               	;0
4695 2354  CONCAT/8                  #2400=    #2399                3104:'%'            	;0
4696 2354  ASSIGN_DIM/147            ?2313     16?10                ?1658301144         	;0
4697 2354  OP_DATA/137               ?0        #2400                ?0                  	;0
4698 2355  JMP/42                    ?0        ?4690                ?0                  	;0	>>4690
4699 2355  FE_FREE/127               ?0        $2394                ?0                  	;0	<<4689
4700 2358  ASSIGN_DIM/147            ?2319     16?11                ?2                  	;0
4701 2358  OP_DATA/137               ?0        3105:'(`users`.`username` LIKE ? OR `users_logs`.`type` LIKE ? OR `users_logs`.`action` LIKE ?)' ?0                  	;0
4702 2360  GOTO/253                  ?0        ?4876                ?3106               	;0
4703 2363  INIT_FCALL_BY_NAME/59     ?0        ?0                   3107:'intval'       	;1
4704 2363  FETCH_STATIC_PROP_FUNC_ARG/177 $2402=    3109:'rRequest'      3110:'XUI'          	;1
4705 2363  FETCH_DIM_FUNC_ARG/93     $2403=    $2402                3112:'order'        	;1
4706 2363  FETCH_DIM_FUNC_ARG/93     $2404=    $2403                3113:0              	;1
4707 2363  FETCH_DIM_FUNC_ARG/93     $2405=    $2404                3114:'column'       	;1
4708 2363  SEND_VAR_EX/66            ?80       $2405                ?1                  	;0
4709 2363  DO_FCALL_BY_NAME/131      $2406=    ?0                   ?0                  	;0
4710 2363  ASSIGN/38                 ?2325     16?14                $2406               	;0
4711 2365  FETCH_DIM_R/81            $2408=    16?13                16?14               	;0
4712 2365  BOOL_NOT/13               #2409=    $2408                ?0                  	;0
4713 2365  JMPZ/43                   ?0        #2409                ?4715               	;0	>>4715
4714 2366  GOTO/253                  ?0        ?976                 ?3115               	;0
4715 2368  INIT_FCALL_BY_NAME/59     ?0        ?0                   3116:'array_multisort'	;3	<<4713
4716 2368  INIT_FCALL_BY_NAME/59     ?0        ?0                   3118:'array_column' 	;2
4717 2368  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
4718 2368  FETCH_DIM_FUNC_ARG/93     $2410=    16?13                16?14               	;2
4719 2368  SEND_VAR_EX/66            ?96       $2410                ?2                  	;0
4720 2368  DO_FCALL_BY_NAME/131      $2411=    ?0                   ?0                  	;0
4721 2368  SEND_VAR_NO_REF_EX/50     ?80       $2411                ?1                  	;0
4722 2368  JMPZ/43                   ?0        16?29                ?4726               	;0	>>4726
4723 2368  FETCH_CONSTANT/99         #2412=    ?0                   3120:'SORT_ASC'     	;16
4724 2368  QM_ASSIGN/22              #2413=    #2412                ?0                  	;0
4725 2368  JMP/42                    ?0        ?4728                ?0                  	;0	>>4728
4726 2368  FETCH_CONSTANT/99         #2414=    ?0                   3123:'SORT_DESC'    	;16	<<4722
4727 2368  QM_ASSIGN/22              #2413=    #2414                ?0                  	;0
4728 2368  SEND_VAL_EX/116           ?96       #2413                ?2                  	;0	<<4725
4729 2368  SEND_VAR_EX/66            ?112      16?16                ?3                  	;0
4730 2368  DO_FCALL_BY_NAME/131      ?2333     ?0                   ?0                  	;0
4731 2369  GOTO/253                  ?0        ?976                 ?3126               	;0
4732 2371  INIT_FCALL_BY_NAME/59     ?0        ?0                   3127:'count'        	;1
4733 2371  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
4734 2371  DO_FCALL_BY_NAME/131      $2416=    ?0                   ?0                  	;0
4735 2371  IS_SMALLER/19             #2417=    3129:0               $2416               	;0
4736 2371  BOOL_NOT/13               #2418=    #2417                ?0                  	;0
4737 2371  JMPZ/43                   ?0        #2418                ?4739               	;0	>>4739
4738 2372  GOTO/253                  ?0        ?4756                ?3130               	;0
4739 2374  INIT_STATIC_METHOD_CALL/113 ?0        3131:'XUI'           3133:'a96aB74f1921d4ad'	;2	<<4737
4740 2374  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
4741 2374  SEND_VAL_EX/116           ?96       3135:false           ?2                  	;0
4742 2374  DO_FCALL/60               $2419=    ?0                   ?0                  	;0
4743 2374  FE_RESET_R/77             $2420=    $2419                ?4755               	;0
4744 2374  FE_FETCH_R/78             #2421=    $2420                16?38               	;4755	>>4755	<<4754
4745 2374  ASSIGN/38                 ?2340     16?2                 #2421               	;0
4746 2375  FE_RESET_R/77             $2423=    16?38                ?4753               	;0
4747 2375  FE_FETCH_R/78             ?0        $2423                16?39               	;4753	>>4753	<<4752
4748 2376  FETCH_DIM_R/81            $2424=    16?39                3136:'stream_id'    	;0
4749 2376  FETCH_DIM_RW/87           $2425=    16?35                $2424               	;0
4750 2376  POST_INC/36               #2426=    $2425                ?0                  	;0
4751 2376  FREE/70                   ?0        #2426                ?0                  	;0
4752 2377  JMP/42                    ?0        ?4747                ?0                  	;0	>>4747
4753 2377  FE_FREE/127               ?0        $2423                ?0                  	;0	<<4746
4754 2380  JMP/42                    ?0        ?4744                ?0                  	;0	>>4744
4755 2380  FE_FREE/127               ?0        $2420                ?0                  	;0	<<4743
4756 2385  GOTO/253                  ?0        ?1953                ?3137               	;0
4757 2387  INIT_METHOD_CALL/112      ?0        16?3                 3138:'query'        	;1
4758 2387  INIT_FCALL_BY_NAME/59     ?0        ?0                   3140:'implode'      	;2
4759 2387  SEND_VAL_EX/116           ?80       3142:','             ?1                  	;0
4760 2387  FETCH_DIM_FUNC_ARG/93     $2427=    16?5                 3143:'reports'      	;2
4761 2387  SEND_VAR_EX/66            ?96       $2427                ?2                  	;0
4762 2387  DO_FCALL_BY_NAME/131      $2428=    ?0                   ?0                  	;0
4763 2387  CONCAT/8                  #2429=    3144:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $2428               	;0
4764 2387  CONCAT/8                  #2430=    #2429                3145:');'           	;0
4765 2387  SEND_VAL_EX/116           ?80       #2430                ?1                  	;0
4766 2387  DO_FCALL/60               ?2349     ?0                   ?0                  	;0
4767 2388  INIT_METHOD_CALL/112      ?0        16?3                 3146:'get_rows'     	;0
4768 2388  DO_FCALL/60               $2432=    ?0                   ?0                  	;0
4769 2388  FE_RESET_R/77             $2433=    $2432                ?4775               	;0
4770 2388  FE_FETCH_R/78             ?0        $2433                16?7                	;4775	>>4775	<<4774
4771 2389  FETCH_DIM_R/81            $2435=    16?7                 3148:'id'           	;0
4772 2389  ASSIGN_DIM/147            ?2352     16?45                ?4414262            	;0
4773 2389  OP_DATA/137               ?0        $2435                ?0                  	;0
4774 2390  JMP/42                    ?0        ?4770                ?0                  	;0	>>4770
4775 2390  FE_FREE/127               ?0        $2433                ?0                  	;0	<<4769
4776 2393  INIT_FCALL_BY_NAME/59     ?0        ?0                   3149:'count'        	;1
4777 2393  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
4778 2393  DO_FCALL_BY_NAME/131      $2436=    ?0                   ?0                  	;0
4779 2393  IS_SMALLER/19             #2437=    3151:0               $2436               	;0
4780 2393  BOOL_NOT/13               #2438=    #2437                ?0                  	;0
4781 2393  JMPZ/43                   ?0        #2438                ?4783               	;0	>>4783
4782 2394  GOTO/253                  ?0        ?4991                ?3152               	;0
4783 2396  INIT_STATIC_METHOD_CALL/113 ?0        3153:'XUI'           3155:'a96Ab74f1921d4AD'	;2	<<4781
4784 2396  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
4785 2396  SEND_VAL_EX/116           ?96       3157:false           ?2                  	;0
4786 2396  DO_FCALL/60               $2439=    ?0                   ?0                  	;0
4787 2396  FE_RESET_R/77             $2440=    $2439                ?4799               	;0
4788 2396  FE_FETCH_R/78             #2441=    $2440                16?38               	;4799	>>4799	<<4798
4789 2396  ASSIGN/38                 ?2360     16?2                 #2441               	;0
4790 2397  FE_RESET_R/77             $2443=    16?38                ?4797               	;0
4791 2397  FE_FETCH_R/78             ?0        $2443                16?39               	;4797	>>4797	<<4796
4792 2398  FETCH_DIM_R/81            $2444=    16?39                3158:'stream_id'    	;0
4793 2398  FETCH_DIM_RW/87           $2445=    16?35                $2444               	;0
4794 2398  POST_INC/36               #2446=    $2445                ?0                  	;0
4795 2398  FREE/70                   ?0        #2446                ?0                  	;0
4796 2399  JMP/42                    ?0        ?4791                ?0                  	;0	>>4791
4797 2399  FE_FREE/127               ?0        $2443                ?0                  	;0	<<4790
4798 2402  JMP/42                    ?0        ?4788                ?0                  	;0	>>4788
4799 2402  FE_FREE/127               ?0        $2440                ?0                  	;0	<<4787
4800 2404  GOTO/253                  ?0        ?4991                ?3159               	;0
4801 2407  INIT_FCALL_BY_NAME/59     ?0        ?0                   3160:'intval'       	;1
4802 2407  FETCH_STATIC_PROP_FUNC_ARG/177 $2447=    3162:'rRequest'      3163:'XUI'          	;1
4803 2407  FETCH_DIM_FUNC_ARG/93     $2448=    $2447                3165:'order'        	;1
4804 2407  FETCH_DIM_FUNC_ARG/93     $2449=    $2448                3166:0              	;1
4805 2407  FETCH_DIM_FUNC_ARG/93     $2450=    $2449                3167:'column'       	;1
4806 2407  SEND_VAR_EX/66            ?80       $2450                ?1                  	;0
4807 2407  DO_FCALL_BY_NAME/131      $2451=    ?0                   ?0                  	;0
4808 2407  ASSIGN/38                 ?2370     16?14                $2451               	;0
4809 2409  ASSIGN/38                 $2453=    16?10                3168:array (
)      	;0
4810 2409  ASSIGN/38                 ?2372     16?11                $2453               	;0
4811 2410  INIT_FCALL_BY_NAME/59     ?0        ?0                   3169:'implode'      	;2
4812 2410  SEND_VAL_EX/116           ?80       3171:','             ?1                  	;0
4813 2410  FETCH_DIM_FUNC_ARG/93     $2456=    16?5                 3172:'reports'      	;2
4814 2410  SEND_VAR_EX/66            ?96       $2456                ?2                  	;0
4815 2410  DO_FCALL_BY_NAME/131      $2457=    ?0                   ?0                  	;0
4816 2410  CONCAT/8                  #2458=    3173:'`lines`.`member_id` IN (' $2457               	;0
4817 2410  CONCAT/8                  #2459=    #2458                3174:')'            	;0
4818 2410  ASSIGN_DIM/147            ?2373     16?11                ?2670195408         	;0
4819 2410  OP_DATA/137               ?0        #2459                ?0                  	;0
4820 2411  GOTO/253                  ?0        ?1255                ?3175               	;0
4821 2413  GOTO/253                  ?0        ?2174                ?3176               	;0
4822 2415  INIT_FCALL_BY_NAME/59     ?0        ?0                   3177:'strtolower'   	;1
4823 2415  FETCH_STATIC_PROP_FUNC_ARG/177 $2460=    3179:'rRequest'      3180:'XUI'          	;1
4824 2415  FETCH_DIM_FUNC_ARG/93     $2461=    $2460                3182:'order'        	;1
4825 2415  FETCH_DIM_FUNC_ARG/93     $2462=    $2461                3183:0              	;1
4826 2415  FETCH_DIM_FUNC_ARG/93     $2463=    $2462                3184:'dir'          	;1
4827 2415  SEND_VAR_EX/66            ?80       $2463                ?1                  	;0
4828 2415  DO_FCALL_BY_NAME/131      $2464=    ?0                   ?0                  	;0
4829 2415  IS_IDENTICAL/15           #2465=    $2464                3185:'desc'         	;0
4830 2415  JMPZ/43                   ?0        #2465                ?4833               	;0	>>4833
4831 2415  QM_ASSIGN/22              #2466=    3186:false           ?0                  	;0
4832 2415  JMP/42                    ?0        ?4834                ?0                  	;0	>>4834
4833 2415  QM_ASSIGN/22              #2466=    3187:true            ?0                  	;0	<<4830
4834 2415  ASSIGN/38                 ?2385     16?29                #2466               	;0	<<4832
4835 2416  ASSIGN/38                 ?2386     16?45                3188:array (
)      	;0
4836 2417  INIT_FCALL_BY_NAME/59     ?0        ?0                   3189:'intval'       	;1
4837 2417  FETCH_STATIC_PROP_FUNC_ARG/177 $2469=    3191:'rRequest'      3192:'XUI'          	;1
4838 2417  FETCH_DIM_FUNC_ARG/93     $2470=    $2469                3194:'user'         	;1
4839 2417  SEND_VAR_EX/66            ?80       $2470                ?1                  	;0
4840 2417  DO_FCALL_BY_NAME/131      $2471=    ?0                   ?0                  	;0
4841 2417  IS_SMALLER/19             #2472=    3195:0               $2471               	;0
4842 2417  JMPZ/43                   ?0        #2472                ?4850               	;0	>>4850
4843 2417  INIT_FCALL_BY_NAME/59     ?0        ?0                   3196:'intval'       	;1
4844 2417  FETCH_STATIC_PROP_FUNC_ARG/177 $2473=    3198:'rRequest'      3199:'XUI'          	;1
4845 2417  FETCH_DIM_FUNC_ARG/93     $2474=    $2473                3201:'user'         	;1
4846 2417  SEND_VAR_EX/66            ?80       $2474                ?1                  	;0
4847 2417  DO_FCALL_BY_NAME/131      $2475=    ?0                   ?0                  	;0
4848 2417  QM_ASSIGN/22              #2476=    $2475                ?0                  	;0
4849 2417  JMP/42                    ?0        ?4851                ?0                  	;0	>>4851
4850 2417  QM_ASSIGN/22              #2476=    3202:NULL            ?0                  	;0	<<4842
4851 2417  ASSIGN/38                 ?2395     16?2                 #2476               	;0	<<4849
4852 2418  GOTO/253                  ?0        ?885                 ?3203               	;0
4853 2420  INIT_FCALL_BY_NAME/59     ?0        ?0                   3204:'strlen'       	;1
4854 2420  FETCH_STATIC_PROP_FUNC_ARG/177 $2478=    3206:'rRequest'      3207:'XUI'          	;1
4855 2420  FETCH_DIM_FUNC_ARG/93     $2479=    $2478                3209:'filter'       	;1
4856 2420  SEND_VAR_EX/66            ?80       $2479                ?1                  	;0
4857 2420  DO_FCALL_BY_NAME/131      $2480=    ?0                   ?0                  	;0
4858 2420  IS_SMALLER/19             #2481=    3210:0               $2480               	;0
4859 2420  BOOL_NOT/13               #2482=    #2481                ?0                  	;0
4860 2420  JMPZ/43                   ?0        #2482                ?4862               	;0	>>4862
4861 2421  GOTO/253                  ?0        ?5158                ?3211               	;0
4862 2423  FETCH_STATIC_PROP_R/173   $2483=    3212:'rRequest'      3213:'XUI'          	;0	<<4860
4863 2423  FETCH_DIM_R/81            $2484=    $2483                3215:'filter'       	;0
4864 2423  IS_EQUAL/17               #2485=    $2484                3216:1              	;0
4865 2423  JMPZ/43                   ?0        #2485                ?4867               	;0	>>4867
4866 2424  GOTO/253                  ?0        ?5156                ?3217               	;0
4867 2426  FETCH_STATIC_PROP_R/173   $2486=    3218:'rRequest'      3219:'XUI'          	;0	<<4865
4868 2426  FETCH_DIM_R/81            $2487=    $2486                3221:'filter'       	;0
4869 2426  IS_EQUAL/17               #2488=    $2487                3222:2              	;0
4870 2426  BOOL_NOT/13               #2489=    #2488                ?0                  	;0
4871 2426  JMPZ/43                   ?0        #2489                ?4873               	;0	>>4873
4872 2427  GOTO/253                  ?0        ?4875                ?3223               	;0
4873 2429  ASSIGN_DIM/147            ?2408     16?11                ?4397406            	;0	<<4871
4874 2429  OP_DATA/137               ?0        3224:'`users`.`status` = 0' ?0                  	;0
4875 2431  GOTO/253                  ?0        ?5155                ?3225               	;0
4876 2433  INIT_FCALL_BY_NAME/59     ?0        ?0                   3226:'strlen'       	;1
4877 2433  FETCH_STATIC_PROP_FUNC_ARG/177 $2491=    3228:'rRequest'      3229:'XUI'          	;1
4878 2433  FETCH_DIM_FUNC_ARG/93     $2492=    $2491                3231:'range'        	;1
4879 2433  SEND_VAR_EX/66            ?80       $2492                ?1                  	;0
4880 2433  DO_FCALL_BY_NAME/131      $2493=    ?0                   ?0                  	;0
4881 2433  IS_SMALLER/19             #2494=    3232:0               $2493               	;0
4882 2433  BOOL_NOT/13               #2495=    #2494                ?0                  	;0
4883 2433  JMPZ/43                   ?0        #2495                ?4885               	;0	>>4885
4884 2434  GOTO/253                  ?0        ?5679                ?3233               	;0
4885 2436  INIT_FCALL_BY_NAME/59     ?0        ?0                   3234:'substr'       	;3	<<4883
4886 2436  FETCH_STATIC_PROP_FUNC_ARG/177 $2496=    3236:'rRequest'      3237:'XUI'          	;1
4887 2436  FETCH_DIM_FUNC_ARG/93     $2497=    $2496                3239:'range'        	;1
4888 2436  SEND_VAR_EX/66            ?80       $2497                ?1                  	;0
4889 2436  SEND_VAL_EX/116           ?96       3240:0               ?2                  	;0
4890 2436  SEND_VAL_EX/116           ?112      3241:10              ?3                  	;0
4891 2436  DO_FCALL_BY_NAME/131      $2498=    ?0                   ?0                  	;0
4892 2436  ASSIGN/38                 ?2417     16?43                $2498               	;0
4893 2437  INIT_FCALL_BY_NAME/59     ?0        ?0                   3242:'substr'       	;3
4894 2437  FETCH_STATIC_PROP_FUNC_ARG/177 $2500=    3244:'rRequest'      3245:'XUI'          	;1
4895 2437  FETCH_DIM_FUNC_ARG/93     $2501=    $2500                3247:'range'        	;1
4896 2437  SEND_VAR_EX/66            ?80       $2501                ?1                  	;0
4897 2437  INIT_FCALL_BY_NAME/59     ?0        ?0                   3248:'strlen'       	;1
4898 2437  FETCH_STATIC_PROP_FUNC_ARG/177 $2502=    3250:'rRequest'      3251:'XUI'          	;1
4899 2437  FETCH_DIM_FUNC_ARG/93     $2503=    $2502                3253:'range'        	;1
4900 2437  SEND_VAR_EX/66            ?80       $2503                ?1                  	;0
4901 2437  DO_FCALL_BY_NAME/131      $2504=    ?0                   ?0                  	;0
4902 2437  SUB/2                     #2505=    $2504                3254:10             	;0
4903 2437  SEND_VAL_EX/116           ?96       #2505                ?2                  	;0
4904 2437  SEND_VAL_EX/116           ?112      3255:10              ?3                  	;0
4905 2437  DO_FCALL_BY_NAME/131      $2506=    ?0                   ?0                  	;0
4906 2437  ASSIGN/38                 ?2425     16?42                $2506               	;0
4907 2438  INIT_FCALL_BY_NAME/59     ?0        ?0                   3256:'strtotime'    	;1
4908 2438  CONCAT/8                  #2508=    16?43                3258:' 00:00:00'    	;0
4909 2438  SEND_VAL_EX/116           ?80       #2508                ?1                  	;0
4910 2438  DO_FCALL_BY_NAME/131      $2509=    ?0                   ?0                  	;0
4911 2438  ASSIGN/38                 $2510=    16?43                $2509               	;0
4912 2438  JMPZ/43                   ?0        $2510                ?4914               	;0	>>4914
4913 2439  GOTO/253                  ?0        ?1185                ?3259               	;0
4914 2441  ASSIGN/38                 ?2429     16?43                3260:NULL           	;0	<<4912
4915 2442  GOTO/253                  ?0        ?1185                ?3261               	;0
4916 2444  FETCH_DIM_R/81            $2514=    16?16                16?63               	;0
4917 2444  FETCH_DIM_R/81            $2515=    $2514                3263:'stream_id'    	;0
4918 2444  FETCH_DIM_R/81            $2516=    16?66                $2515               	;0
4919 2444  FETCH_DIM_R/81            $2517=    $2516                3264:1              	;0
4920 2444  JMP_SET/152               #2518=    $2517                ?4922               	;0
4921 2444  QM_ASSIGN/22              #2518=    3265:1               ?0                  	;0
4922 2444  FETCH_DIM_W/84            $2512=    16?16                16?63               	;0
4923 2444  ASSIGN_DIM/147            ?2431     $2512                3262:'type'         	;0
4924 2444  OP_DATA/137               ?0        #2518                ?0                  	;0
4925 2445  INIT_FCALL_BY_NAME/59     ?0        ?0                   3266:'array_merge'  	;2
4926 2445  FETCH_DIM_FUNC_ARG/93     $2520=    16?16                16?63               	;1
4927 2445  SEND_VAR_EX/66            ?80       $2520                ?1                  	;0
4928 2445  FETCH_DIM_R/81            $2521=    16?16                16?63               	;0
4929 2445  FETCH_DIM_R/81            $2522=    $2521                3268:'user_id'      	;0
4930 2445  FETCH_DIM_R/81            $2523=    16?72                $2522               	;0
4931 2445  JMP_SET/152               #2524=    $2523                ?4933               	;0
4932 2445  QM_ASSIGN/22              #2524=    3269:array (
)       ?0                  	;0
4933 2445  SEND_VAL_EX/116           ?96       #2524                ?2                  	;0
4934 2445  DO_FCALL_BY_NAME/131      $2525=    ?0                   ?0                  	;0
4935 2445  ASSIGN_DIM/147            ?2437     16?16                16?63               	;0
4936 2445  OP_DATA/137               ?0        $2525                ?0                  	;0
4937 2447  POST_INC/36               #2526=    16?63                ?0                  	;0
4938 2447  FREE/70                   ?0        #2526                ?0                  	;0
4939 2448  GOTO/253                  ?0        ?2182                ?3270               	;0
4940 2449  GOTO/253                  ?0        ?2158                ?3271               	;0
4941 2451  INIT_FCALL_BY_NAME/59     ?0        ?0                   3272:'intval'       	;1
4942 2451  FETCH_STATIC_PROP_FUNC_ARG/177 $2527=    3274:'rRequest'      3275:'XUI'          	;1
4943 2451  FETCH_DIM_FUNC_ARG/93     $2528=    $2527                3277:'order'        	;1
4944 2451  FETCH_DIM_FUNC_ARG/93     $2529=    $2528                3278:0              	;1
4945 2451  FETCH_DIM_FUNC_ARG/93     $2530=    $2529                3279:'column'       	;1
4946 2451  SEND_VAR_EX/66            ?80       $2530                ?1                  	;0
4947 2451  DO_FCALL_BY_NAME/131      $2531=    ?0                   ?0                  	;0
4948 2451  ASSIGN/38                 ?2450     16?14                $2531               	;0
4949 2453  FETCH_STATIC_PROP_IS/176  $2533=    3280:'rRequest'      3281:'XUI'          	;0
4950 2453  ISSET_ISEMPTY_DIM_OBJ/115 #2534=    $2533                3283:'created'      	;33554432
4951 2453  ASSIGN/38                 ?2453     16?47                #2534               	;0
4952 2454  ASSIGN/38                 $2536=    16?10                3284:array (
)      	;0
4953 2454  ASSIGN/38                 ?2455     16?11                $2536               	;0
4954 2455  INIT_FCALL_BY_NAME/59     ?0        ?0                   3285:'count'        	;1
4955 2455  FETCH_DIM_FUNC_ARG/93     $2538=    16?0                 3287:'stream_ids'   	;1
4956 2455  SEND_VAR_EX/66            ?80       $2538                ?1                  	;0
4957 2455  DO_FCALL_BY_NAME/131      $2539=    ?0                   ?0                  	;0
4958 2455  IS_SMALLER/19             #2540=    3288:0               $2539               	;0
4959 2455  JMPZ/43                   ?0        #2540                ?4961               	;0	>>4961
4960 2456  GOTO/253                  ?0        ?182                 ?3289               	;0
4961 2458  GOTO/253                  ?0        ?176                 ?3290               	;0	<<4959
4962 2460  INIT_METHOD_CALL/112      ?0        16?3                 3291:'query'        	;1
4963 2460  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
4964 2460  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
4965 2460  DO_FCALL/60               ?2459     ?0                   ?0                  	;0
4966 2461  INIT_METHOD_CALL/112      ?0        16?3                 3293:'num_rows'     	;0
4967 2461  DO_FCALL/60               $2542=    ?0                   ?0                  	;0
4968 2461  IS_EQUAL/17               #2543=    $2542                3295:1              	;0
4969 2461  JMPZ/43                   ?0        #2543                ?4971               	;0	>>4971
4970 2462  GOTO/253                  ?0        ?4974                ?3296               	;0
4971 2464  ASSIGN_DIM/147            ?2462     16?1                 3297:'recordsTotal' 	;0	<<4969
4972 2464  OP_DATA/137               ?0        3298:0               ?0                  	;0
4973 2465  GOTO/253                  ?0        ?5654                ?3299               	;0
4974 2467  GOTO/253                  ?0        ?5649                ?3300               	;0
4975 2470  ROPE_INIT/54              #2546=    ?0                   3301:'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` '	;3
4976 2470  ROPE_ADD/55               #2546=    #2546                16?31               	;1
4977 2470  ROPE_END/56               #2545=    #2546                3302:';'            	;2
4978 2470  ASSIGN/38                 ?2466     16?15                #2545               	;0
4979 2471  INIT_METHOD_CALL/112      ?0        16?3                 3303:'query'        	;1
4980 2471  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
4981 2471  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
4982 2471  DO_FCALL/60               ?2467     ?0                   ?0                  	;0
4983 2472  INIT_METHOD_CALL/112      ?0        16?3                 3305:'num_rows'     	;0
4984 2472  DO_FCALL/60               $2550=    ?0                   ?0                  	;0
4985 2472  IS_EQUAL/17               #2551=    $2550                3307:1              	;0
4986 2472  JMPZ/43                   ?0        #2551                ?4988               	;0	>>4988
4987 2473  GOTO/253                  ?0        ?1364                ?3308               	;0
4988 2475  ASSIGN_DIM/147            ?2470     16?1                 3309:'recordsTotal' 	;0	<<4986
4989 2475  OP_DATA/137               ?0        3310:0               ?0                  	;0
4990 2476  GOTO/253                  ?0        ?1363                ?3311               	;0
4991 2481  FE_RESET_R/77             $2553=    16?16                ?5153               	;0
4992 2481  FE_FETCH_R/78             ?0        $2553                16?7                	;5153	>>5153	<<5152
4993 2482  NOP/0                     ?0        ?0                   ?0                  	;1
4994 2482  GOTO/253                  ?0        ?5037                ?3312               	;0
4995 2484  NOP/0                     ?0        ?0                   ?0                  	;1
4996 2484  GOTO/253                  ?0        ?5007                ?3313               	;0
4997 2486  INIT_FCALL_BY_NAME/59     ?0        ?0                   3314:'intval'       	;1
4998 2486  FETCH_STATIC_PROP_FUNC_ARG/177 $2554=    3316:'rRequest'      3317:'XUI'          	;1
4999 2486  FETCH_DIM_FUNC_ARG/93     $2555=    $2554                3319:'category'     	;1
5000 2486  SEND_VAR_EX/66            ?80       $2555                ?1                  	;0
5001 2486  DO_FCALL_BY_NAME/131      $2556=    ?0                   ?0                  	;0
5002 2486  FETCH_DIM_R/81            $2557=    16?12                $2556               	;0
5003 2486  FETCH_DIM_R/81            $2558=    $2557                3320:'category_name'	;0
5004 2486  JMP_SET/152               #2559=    $2558                ?5006               	;0
5005 2486  QM_ASSIGN/22              #2559=    3321:'No Category'   ?0                  	;0
5006 2486  ASSIGN/38                 ?2478     16?57                #2559               	;0
5007 2488  INIT_FCALL_BY_NAME/59     ?0        ?0                   3322:'count'        	;1
5008 2488  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
5009 2488  DO_FCALL_BY_NAME/131      $2561=    ?0                   ?0                  	;0
5010 2488  IS_SMALLER/19             #2562=    3324:1               $2561               	;0
5011 2488  BOOL_NOT/13               #2563=    #2562                ?0                  	;0
5012 2488  JMPZ/43                   ?0        #2563                ?5015               	;0	>>5015
5013 2489  NOP/0                     ?0        ?0                   ?0                  	;1
5014 2489  GOTO/253                  ?0        ?5099                ?3325               	;0
5015 2491  NOP/0                     ?0        ?0                   ?0                  	;1	<<5012
5016 2491  GOTO/253                  ?0        ?5092                ?3326               	;0
5017 2493  FETCH_DIM_R/81            $2564=    16?7                 3327:'stream_icon'  	;0
5018 2493  CONCAT/8                  #2565=    3328:'<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' $2564               	;0
5019 2493  CONCAT/8                  #2566=    #2565                3329:'\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url='	;0
5020 2493  FETCH_DIM_R/81            $2567=    16?7                 3330:'stream_icon'  	;0
5021 2493  CONCAT/8                  #2568=    #2566                $2567               	;0
5022 2493  CONCAT/8                  #2569=    #2568                3331:'\' /></a>'    	;0
5023 2493  ASSIGN/38                 ?2488     16?69                #2569               	;0
5024 2495  FETCH_DIM_R/81            $2573=    16?7                 3333:'id'           	;0
5025 2495  INIT_ARRAY/71             #2574=    $2573                ?0                  	;24
5026 2495  ADD_ARRAY_ELEMENT/72      #2574=    16?69                ?0                  	;0
5027 2495  FETCH_DIM_R/81            $2575=    16?7                 3334:'stream_display_name'	;0
5028 2495  ADD_ARRAY_ELEMENT/72      #2574=    $2575                ?0                  	;0
5029 2495  ADD_ARRAY_ELEMENT/72      #2574=    16?57                ?0                  	;0
5030 2495  ADD_ARRAY_ELEMENT/72      #2574=    16?59                ?0                  	;0
5031 2495  ADD_ARRAY_ELEMENT/72      #2574=    16?22                ?0                  	;0
5032 2495  FETCH_DIM_W/84            $2571=    16?1                 3332:'data'         	;0
5033 2495  ASSIGN_DIM/147            ?2490     $2571                ?2670194944         	;0
5034 2495  OP_DATA/137               ?0        #2574                ?0                  	;0
5035 2497  NOP/0                     ?0        ?0                   ?0                  	;1
5036 2497  GOTO/253                  ?0        ?5152                ?3335               	;0
5037 2499  FETCH_STATIC_PROP_R/173   $2576=    3336:'rSettings'     3337:'XUI'          	;0
5038 2499  FETCH_DIM_R/81            $2577=    $2576                3339:'redis_handler'	;0
5039 2499  BOOL_NOT/13               #2578=    $2577                ?0                  	;0
5040 2499  JMPZ/43                   ?0        #2578                ?5043               	;0	>>5043
5041 2500  NOP/0                     ?0        ?0                   ?0                  	;1
5042 2500  GOTO/253                  ?0        ?5049                ?3340               	;0
5043 2502  FETCH_DIM_R/81            $2580=    16?7                 3342:'id'           	;0	<<5040
5044 2502  FETCH_DIM_R/81            $2581=    16?35                $2580               	;0
5045 2502  JMP_SET/152               #2582=    $2581                ?5047               	;0
5046 2502  QM_ASSIGN/22              #2582=    3343:0               ?0                  	;0
5047 2502  ASSIGN_DIM/147            ?2497     16?7                 3341:'clients'      	;0
5048 2502  OP_DATA/137               ?0        #2582                ?0                  	;0
5049 2504  BOOL_NOT/13               #2583=    16?4                 ?0                  	;0
5050 2504  JMPZ/43                   ?0        #2583                ?5053               	;0	>>5053
5051 2505  NOP/0                     ?0        ?0                   ?0                  	;1
5052 2505  GOTO/253                  ?0        ?5069                ?3344               	;0
5053 2507  INIT_FCALL_BY_NAME/59     ?0        ?0                   3346:'filterRow'    	;3	<<5050
5054 2507  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
5055 2507  FETCH_STATIC_PROP_FUNC_ARG/177 $2586=    3348:'rRequest'      3349:'XUI'          	;2
5056 2507  FETCH_DIM_FUNC_ARG/93     $2587=    $2586                3351:'show_columns' 	;2
5057 2507  SEND_VAR_EX/66            ?96       $2587                ?2                  	;0
5058 2507  FETCH_STATIC_PROP_FUNC_ARG/177 $2588=    3352:'rRequest'      3353:'XUI'          	;3
5059 2507  FETCH_DIM_FUNC_ARG/93     $2589=    $2588                3355:'hide_columns' 	;3
5060 2507  SEND_VAR_EX/66            ?112      $2589                ?3                  	;0
5061 2507  DO_FCALL_BY_NAME/131      $2590=    ?0                   ?0                  	;0
5062 2507  FETCH_DIM_W/84            $2584=    16?1                 3345:'data'         	;0
5063 2507  ASSIGN_DIM/147            ?2503     $2584                ?4397406            	;0
5064 2507  OP_DATA/137               ?0        $2590                ?0                  	;0
5065 2508  NOP/0                     ?0        ?0                   ?0                  	;1
5066 2508  GOTO/253                  ?0        ?5067                ?3356               	;0
5067 2510  NOP/0                     ?0        ?0                   ?0                  	;1
5068 2510  GOTO/253                  ?0        ?5035                ?3357               	;0
5069 2512  INIT_FCALL_BY_NAME/59     ?0        ?0                   3358:'json_decode'  	;2
5070 2512  FETCH_DIM_FUNC_ARG/93     $2591=    16?7                 3360:'category_id'  	;1
5071 2512  SEND_VAR_EX/66            ?80       $2591                ?1                  	;0
5072 2512  SEND_VAL_EX/116           ?96       3361:true            ?2                  	;0
5073 2512  DO_FCALL_BY_NAME/131      $2592=    ?0                   ?0                  	;0
5074 2512  ASSIGN/38                 ?2511     16?58                $2592               	;0
5075 2513  INIT_FCALL_BY_NAME/59     ?0        ?0                   3362:'strlen'       	;1
5076 2513  FETCH_STATIC_PROP_FUNC_ARG/177 $2594=    3364:'rRequest'      3365:'XUI'          	;1
5077 2513  FETCH_DIM_FUNC_ARG/93     $2595=    $2594                3367:'category'     	;1
5078 2513  SEND_VAR_EX/66            ?80       $2595                ?1                  	;0
5079 2513  DO_FCALL_BY_NAME/131      $2596=    ?0                   ?0                  	;0
5080 2513  IS_SMALLER/19             #2597=    3368:0               $2596               	;0
5081 2513  JMPZ/43                   ?0        #2597                ?5084               	;0	>>5084
5082 2514  NOP/0                     ?0        ?0                   ?0                  	;1
5083 2514  GOTO/253                  ?0        ?4997                ?3369               	;0
5084 2516  FETCH_DIM_R/81            $2598=    16?58                3370:0              	;0	<<5081
5085 2516  FETCH_DIM_R/81            $2599=    16?12                $2598               	;0
5086 2516  FETCH_DIM_R/81            $2600=    $2599                3371:'category_name'	;0
5087 2516  JMP_SET/152               #2601=    $2600                ?5089               	;0
5088 2516  QM_ASSIGN/22              #2601=    3372:'No Category'   ?0                  	;0
5089 2516  ASSIGN/38                 ?2520     16?57                #2601               	;0
5090 2517  NOP/0                     ?0        ?0                   ?0                  	;1
5091 2517  GOTO/253                  ?0        ?4995                ?3373               	;0
5092 2519  INIT_FCALL_BY_NAME/59     ?0        ?0                   3374:'count'        	;1
5093 2519  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
5094 2519  DO_FCALL_BY_NAME/131      $2603=    ?0                   ?0                  	;0
5095 2519  SUB/2                     #2604=    $2603                3376:1              	;0
5096 2519  CONCAT/8                  #2605=    3377:' (+'           #2604               	;0
5097 2519  CONCAT/8                  #2606=    #2605                3378:' others)'     	;0
5098 2519  ASSIGN_CONCAT/30          ?2525     16?57                #2606               	;0
5099 2521  FETCH_DIM_R/81            $2608=    16?7                 3379:'clients'      	;0
5100 2521  IS_SMALLER/19             #2609=    3380:0               $2608               	;0
5101 2521  JMPZ/43                   ?0        #2609                ?5104               	;0	>>5104
5102 2522  NOP/0                     ?0        ?0                   ?0                  	;1
5103 2522  GOTO/253                  ?0        ?5123                ?3381               	;0
5104 2524  ASSIGN/38                 ?2528     16?22                3382:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0	<<5101
5105 2525  ASSIGN/38                 ?2529     16?59                3383:'<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>'	;0
5106 2526  NOP/0                     ?0        ?0                   ?0                  	;1
5107 2526  GOTO/253                  ?0        ?5121                ?3384               	;0
5108 2529  INIT_FCALL_BY_NAME/59     ?0        ?0                   3385:'strlen'       	;1
5109 2529  FETCH_DIM_FUNC_ARG/93     $2612=    16?7                 3387:'stream_icon'  	;1
5110 2529  SEND_VAR_EX/66            ?80       $2612                ?1                  	;0
5111 2529  DO_FCALL_BY_NAME/131      $2613=    ?0                   ?0                  	;0
5112 2529  IS_SMALLER/19             #2614=    3388:0               $2613               	;0
5113 2529  JMPZ/43                   ?0        #2614                ?5116               	;0	>>5116
5114 2530  NOP/0                     ?0        ?0                   ?0                  	;1
5115 2530  GOTO/253                  ?0        ?5119                ?3389               	;0
5116 2532  ASSIGN/38                 ?2533     16?69                3390:''             	;0	<<5113
5117 2533  NOP/0                     ?0        ?0                   ?0                  	;1
5118 2533  GOTO/253                  ?0        ?5024                ?3391               	;0
5119 2535  NOP/0                     ?0        ?0                   ?0                  	;1
5120 2535  GOTO/253                  ?0        ?5017                ?3392               	;0
5121 2537  NOP/0                     ?0        ?0                   ?0                  	;1
5122 2537  GOTO/253                  ?0        ?5108                ?3393               	;0
5123 2539  FETCH_DIM_R/81            $2616=    16?0                 3394:'reseller_client_connection_logs'	;0
5124 2539  JMPZ/43                   ?0        $2616                ?5127               	;0	>>5127
5125 2540  NOP/0                     ?0        ?0                   ?0                  	;1
5126 2540  GOTO/253                  ?0        ?5136                ?3395               	;0
5127 2542  ASSIGN/38                 ?2535     16?22                3396:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>'	;0	<<5124
5128 2543  FETCH_DIM_R/81            $2618=    16?7                 3397:'clients'      	;0
5129 2543  CONCAT/8                  #2619=    3398:'<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' $2618               	;0
5130 2543  CONCAT/8                  #2620=    #2619                3399:'</button>'    	;0
5131 2543  ASSIGN/38                 ?2539     16?59                #2620               	;0
5132 2544  NOP/0                     ?0        ?0                   ?0                  	;1
5133 2544  GOTO/253                  ?0        ?5134                ?3400               	;0
5134 2546  NOP/0                     ?0        ?0                   ?0                  	;1
5135 2546  GOTO/253                  ?0        ?5150                ?3401               	;0
5136 2548  FETCH_DIM_R/81            $2622=    16?7                 3402:'id'           	;0
5137 2548  CONCAT/8                  #2623=    3403:'<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2622               	;0
5138 2548  CONCAT/8                  #2624=    #2623                3404:', \'purge\');"><i class="mdi mdi-hammer"></i></button>'	;0
5139 2548  ASSIGN/38                 ?2543     16?22                #2624               	;0
5140 2549  INIT_FCALL_BY_NAME/59     ?0        ?0                   3405:'intval'       	;1
5141 2549  FETCH_DIM_FUNC_ARG/93     $2626=    16?7                 3407:'id'           	;1
5142 2549  SEND_VAR_EX/66            ?80       $2626                ?1                  	;0
5143 2549  DO_FCALL_BY_NAME/131      $2627=    ?0                   ?0                  	;0
5144 2549  CONCAT/8                  #2628=    3408:'<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' $2627               	;0
5145 2549  CONCAT/8                  #2629=    #2628                3409:');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>'	;0
5146 2549  FETCH_DIM_R/81            $2630=    16?7                 3410:'clients'      	;0
5147 2549  CONCAT/8                  #2631=    #2629                $2630               	;0
5148 2549  CONCAT/8                  #2632=    #2631                3411:'</button></a>'	;0
5149 2549  ASSIGN/38                 ?2551     16?59                #2632               	;0
5150 2551  NOP/0                     ?0        ?0                   ?0                  	;1
5151 2551  GOTO/253                  ?0        ?5108                ?3412               	;0
5152 2552  JMP/42                    ?0        ?4992                ?0                  	;0	>>4992
5153 2552  FE_FREE/127               ?0        $2553                ?0                  	;0	<<4991
5154 2555  GOTO/253                  ?0        ?130                 ?3413               	;0
5155 2557  GOTO/253                  ?0        ?5158                ?3414               	;0
5156 2559  ASSIGN_DIM/147            ?2552     16?11                ?57                 	;0
5157 2559  OP_DATA/137               ?0        3415:'`users`.`status` = 1' ?0                  	;0
5158 2562  GOTO/253                  ?0        ?102                 ?3416               	;0
5159 2564  FETCH_STATIC_PROP_R/173   $2635=    3417:'rRequest'      3418:'XUI'          	;0
5160 2564  FETCH_DIM_R/81            $2636=    $2635                3420:'filter'       	;0
5161 2564  IS_EQUAL/17               #2637=    $2636                3421:3              	;0
5162 2564  JMPZ/43                   ?0        #2637                ?5164               	;0	>>5164
5163 2565  GOTO/253                  ?0        ?3525                ?3422               	;0
5164 2567  FETCH_STATIC_PROP_R/173   $2638=    3423:'rRequest'      3424:'XUI'          	;0	<<5162
5165 2567  FETCH_DIM_R/81            $2639=    $2638                3426:'filter'       	;0
5166 2567  IS_EQUAL/17               #2640=    $2639                3427:4              	;0
5167 2567  BOOL_NOT/13               #2641=    #2640                ?0                  	;0
5168 2567  JMPZ/43                   ?0        #2641                ?5170               	;0	>>5170
5169 2568  GOTO/253                  ?0        ?5172                ?3428               	;0
5170 2570  ASSIGN_DIM/147            ?2560     16?11                ?4397406            	;0	<<5168
5171 2570  OP_DATA/137               ?0        3429:'`lines`.`is_trial` = 1' ?0                  	;0
5172 2572  GOTO/253                  ?0        ?3527                ?3430               	;0
5173 2573  GOTO/253                  ?0        ?3525                ?3431               	;0
5174 2576  ASSIGN_DIM/147            ?2561     16?11                ?0                  	;0
5175 2576  OP_DATA/137               ?0        3432:'(`lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `mag_devices`.`stb_type` LIKE ? OR `users`.`username` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`reseller_notes` LIKE ?)' ?0                  	;0
5176 2578  INIT_FCALL_BY_NAME/59     ?0        ?0                   3433:'strlen'       	;1
5177 2578  FETCH_STATIC_PROP_FUNC_ARG/177 $2644=    3435:'rRequest'      3436:'XUI'          	;1
5178 2578  FETCH_DIM_FUNC_ARG/93     $2645=    $2644                3438:'filter'       	;1
5179 2578  SEND_VAR_EX/66            ?80       $2645                ?1                  	;0
5180 2578  DO_FCALL_BY_NAME/131      $2646=    ?0                   ?0                  	;0
5181 2578  IS_SMALLER/19             #2647=    3439:0               $2646               	;0
5182 2578  BOOL_NOT/13               #2648=    #2647                ?0                  	;0
5183 2578  JMPZ/43                   ?0        #2648                ?5185               	;0	>>5185
5184 2579  GOTO/253                  ?0        ?5583                ?3440               	;0
5185 2581  FETCH_STATIC_PROP_R/173   $2649=    3441:'rRequest'      3442:'XUI'          	;0	<<5183
5186 2581  FETCH_DIM_R/81            $2650=    $2649                3444:'filter'       	;0
5187 2581  IS_EQUAL/17               #2651=    $2650                3445:1              	;0
5188 2581  JMPZ/43                   ?0        #2651                ?5190               	;0	>>5190
5189 2582  GOTO/253                  ?0        ?2654                ?3446               	;0
5190 2584  GOTO/253                  ?0        ?4314                ?3447               	;0	<<5188
5191 2587  INIT_FCALL_BY_NAME/59     ?0        ?0                   3448:'strtotime'    	;1
5192 2587  CONCAT/8                  #2652=    16?42                3450:' 23:59:59'    	;0
5193 2587  SEND_VAL_EX/116           ?80       #2652                ?1                  	;0
5194 2587  DO_FCALL_BY_NAME/131      $2653=    ?0                   ?0                  	;0
5195 2587  ASSIGN/38                 $2654=    16?42                $2653               	;0
5196 2587  JMPZ/43                   ?0        $2654                ?5198               	;0	>>5198
5197 2588  GOTO/253                  ?0        ?5199                ?3451               	;0
5198 2590  ASSIGN/38                 ?2573     16?42                3452:NULL           	;0	<<5196
5199 2592  JMPZ_EX/46                #2656=    16?43                ?5201               	;0	>>5201
5200 2592  BOOL/52                   #2656=    16?42                ?0                  	;0
5201 2592  BOOL_NOT/13               #2657=    #2656                ?0                  	;0	<<5199
5202 2592  JMPZ/43                   ?0        #2657                ?5204               	;0	>>5204
5203 2593  GOTO/253                  ?0        ?5601                ?3453               	;0
5204 2595  GOTO/253                  ?0        ?5595                ?3454               	;0	<<5202
5205 2597  FETCH_STATIC_PROP_IS/176  $2658=    3455:'rRequest'      3456:'XUI'          	;0
5206 2597  ISSET_ISEMPTY_DIM_OBJ/115 #2659=    $2658                3458:'created'      	;33554432
5207 2597  ASSIGN/38                 ?2578     16?47                #2659               	;0
5208 2598  ASSIGN/38                 $2661=    16?10                3459:array (
)      	;0
5209 2598  ASSIGN/38                 ?2580     16?11                $2661               	;0
5210 2599  INIT_FCALL_BY_NAME/59     ?0        ?0                   3460:'count'        	;1
5211 2599  FETCH_DIM_FUNC_ARG/93     $2663=    16?0                 3462:'stream_ids'   	;1
5212 2599  SEND_VAR_EX/66            ?80       $2663                ?1                  	;0
5213 2599  DO_FCALL_BY_NAME/131      $2664=    ?0                   ?0                  	;0
5214 2599  IS_SMALLER/19             #2665=    3463:0               $2664               	;0
5215 2599  JMPZ/43                   ?0        #2665                ?5217               	;0	>>5217
5216 2600  GOTO/253                  ?0        ?3308                ?3464               	;0
5217 2602  INIT_FCALL_BY_NAME/59     ?0        ?0                   3465:'json_encode'  	;1	<<5215
5218 2602  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
5219 2602  DO_FCALL_BY_NAME/131      $2666=    ?0                   ?0                  	;0
5220 2602  ECHO/40                   ?0        $2666                ?0                  	;0
5221 2603  EXIT/79                   ?0        ?0                   ?0                  	;0
5222 2604  GOTO/253                  ?0        ?3307                ?3467               	;0
5223 2606  ASSIGN/38                 ?2585     16?1                 3468:array (
  'status' => 'STATUS_SUCCESS',
  'data' => 
  array (
  ),
)	;0
5224 2607  INIT_METHOD_CALL/112      ?0        16?3                 3469:'query'        	;2
5225 2607  SEND_VAL_EX/116           ?80       3471:'SELECT `id` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `api_key` = ? AND LENGTH(`api_key`) > 0 AND `is_reseller` = 1 AND `status` = 1;' ?1                  	;0
5226 2607  FETCH_STATIC_PROP_FUNC_ARG/177 $2668=    3472:'rRequest'      3473:'XUI'          	;2
5227 2607  FETCH_DIM_FUNC_ARG/93     $2669=    $2668                3475:'api_key'      	;2
5228 2607  SEND_VAR_EX/66            ?96       $2669                ?2                  	;0
5229 2607  DO_FCALL/60               ?2588     ?0                   ?0                  	;0
5230 2608  INIT_METHOD_CALL/112      ?0        16?3                 3476:'num_rows'     	;0
5231 2608  DO_FCALL/60               $2671=    ?0                   ?0                  	;0
5232 2608  IS_EQUAL/17               #2672=    $2671                3478:0              	;0
5233 2608  BOOL_NOT/13               #2673=    #2672                ?0                  	;0
5234 2608  JMPZ/43                   ?0        #2673                ?5236               	;0	>>5236
5235 2609  GOTO/253                  ?0        ?33                  ?3479               	;0
5236 2611  INIT_FCALL_BY_NAME/59     ?0        ?0                   3480:'json_encode'  	;1	<<5234
5237 2611  SEND_VAL_EX/116           ?80       3482:array (
  'status' => 'STATUS_FAILURE',
  'error' => 'Invalid API key.',
) ?1                  	;0
5238 2611  DO_FCALL_BY_NAME/131      $2674=    ?0                   ?0                  	;0
5239 2611  ECHO/40                   ?0        $2674                ?0                  	;0
5240 2612  EXIT/79                   ?0        ?0                   ?0                  	;0
5241 2613  GOTO/253                  ?0        ?33                  ?3483               	;0
5242 2615  UNSET_CV/196              ?0        16?36                ?0                  	;0
5243 2618  FE_RESET_R/77             $2675=    16?16                ?5579               	;0
5244 2618  FE_FETCH_R/78             ?0        $2675                16?7                	;5579	>>5579	<<5578
5245 2619  NOP/0                     ?0        ?0                   ?0                  	;1
5246 2619  GOTO/253                  ?0        ?5299                ?3484               	;0
5247 2621  FETCH_DIM_R/81            $2676=    16?7                 3485:'mag_id'       	;0
5248 2621  CONCAT/8                  #2677=    3486:'<button title="MAG Event" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="message(' $2676               	;0
5249 2621  CONCAT/8                  #2678=    #2677                3487:', \''         	;0
5250 2621  FETCH_DIM_R/81            $2679=    16?7                 3488:'mac'          	;0
5251 2621  CONCAT/8                  #2680=    #2678                $2679               	;0
5252 2621  CONCAT/8                  #2681=    #2680                3489:'\');"><i class="mdi mdi-message-alert"></i></button>'	;0
5253 2621  ASSIGN_CONCAT/30          ?2600     16?22                #2681               	;0
5254 2622  FETCH_DIM_R/81            $2683=    16?7                 3490:'mag_id'       	;0
5255 2622  CONCAT/8                  #2684=    3491:'<a href="mag?id=' $2683               	;0
5256 2622  CONCAT/8                  #2685=    #2684                3492:'"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>'	;0
5257 2622  ASSIGN_CONCAT/30          ?2604     16?22                #2685               	;0
5258 2623  FETCH_DIM_R/81            $2687=    16?7                 3493:'is_isplock'   	;0
5259 2623  BOOL_NOT/13               #2688=    $2687                ?0                  	;0
5260 2623  JMPZ/43                   ?0        #2688                ?5263               	;0	>>5263
5261 2624  NOP/0                     ?0        ?0                   ?0                  	;1
5262 2624  GOTO/253                  ?0        ?5267                ?3494               	;0
5263 2626  FETCH_DIM_R/81            $2689=    16?7                 3495:'mag_id'       	;0	<<5260
5264 2626  CONCAT/8                  #2690=    3496:'<button title="Reset ISP Lock" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2689               	;0
5265 2626  CONCAT/8                  #2691=    #2690                3497:', \'reset_isp\');"><i class="mdi mdi-lock-reset"></i></button>'	;0
5266 2626  ASSIGN_CONCAT/30          ?2610     16?22                #2691               	;0
5267 2628  NOP/0                     ?0        ?0                   ?0                  	;1
5268 2628  GOTO/253                  ?0        ?5539                ?3498               	;0
5269 2630  ASSIGN/38                 ?2611     16?54                3499:'<i class="text-secondary far fa-square"></i>'	;0
5270 2631  NOP/0                     ?0        ?0                   ?0                  	;1
5271 2631  GOTO/253                  ?0        ?5273                ?3500               	;0
5272 2633  ASSIGN/38                 ?2612     16?54                3501:'<i class="text-warning fas fa-square"></i>'	;0
5273 2635  NOP/0                     ?0        ?0                   ?0                  	;1
5274 2635  GOTO/253                  ?0        ?5502                ?3502               	;0
5275 2637  INIT_FCALL_BY_NAME/59     ?0        ?0                   3503:'intval'       	;1
5276 2637  FETCH_DIM_FUNC_ARG/93     $2695=    16?7                 3505:'member_id'    	;1
5277 2637  SEND_VAR_EX/66            ?80       $2695                ?1                  	;0
5278 2637  DO_FCALL_BY_NAME/131      $2696=    ?0                   ?0                  	;0
5279 2637  CONCAT/8                  #2697=    3506:'<a href=\'user?id=' $2696               	;0
5280 2637  CONCAT/8                  #2698=    #2697                3507:'\'>'          	;0
5281 2637  FETCH_DIM_R/81            $2699=    16?7                 3508:'owner_name'   	;0
5282 2637  CONCAT/8                  #2700=    #2698                $2699               	;0
5283 2637  CONCAT/8                  #2701=    #2700                3509:'<br/><small class=\'text-pink\'>(indirect)</small></a>'	;0
5284 2637  ASSIGN/38                 ?2620     16?53                #2701               	;0
5285 2638  NOP/0                     ?0        ?0                   ?0                  	;1
5286 2638  GOTO/253                  ?0        ?5297                ?3510               	;0
5287 2640  INIT_FCALL_BY_NAME/59     ?0        ?0                   3511:'intval'       	;1
5288 2640  FETCH_DIM_FUNC_ARG/93     $2703=    16?7                 3513:'member_id'    	;1
5289 2640  SEND_VAR_EX/66            ?80       $2703                ?1                  	;0
5290 2640  DO_FCALL_BY_NAME/131      $2704=    ?0                   ?0                  	;0
5291 2640  CONCAT/8                  #2705=    3514:'<a href=\'user?id=' $2704               	;0
5292 2640  CONCAT/8                  #2706=    #2705                3515:'\'>'          	;0
5293 2640  FETCH_DIM_R/81            $2707=    16?7                 3516:'owner_name'   	;0
5294 2640  CONCAT/8                  #2708=    #2706                $2707               	;0
5295 2640  CONCAT/8                  #2709=    #2708                3517:'</a>'         	;0
5296 2640  ASSIGN/38                 ?2628     16?53                #2709               	;0
5297 2642  NOP/0                     ?0        ?0                   ?0                  	;1
5298 2642  GOTO/253                  ?0        ?5473                ?3518               	;0
5299 2644  FETCH_STATIC_PROP_R/173   $2711=    3519:'rSettings'     3520:'XUI'          	;0
5300 2644  FETCH_DIM_R/81            $2712=    $2711                3522:'redis_handler'	;0
5301 2644  BOOL_NOT/13               #2713=    $2712                ?0                  	;0
5302 2644  JMPZ/43                   ?0        #2713                ?5305               	;0	>>5305
5303 2645  NOP/0                     ?0        ?0                   ?0                  	;1
5304 2645  GOTO/253                  ?0        ?5315                ?3523               	;0
5305 2647  FETCH_DIM_R/81            $2715=    16?7                 3525:'id'           	;0	<<5302
5306 2647  ISSET_ISEMPTY_DIM_OBJ/115 #2716=    16?35                $2715               	;33554432
5307 2647  JMPZ/43                   ?0        #2716                ?5312               	;0	>>5312
5308 2647  FETCH_DIM_R/81            $2717=    16?7                 3526:'id'           	;0
5309 2647  FETCH_DIM_R/81            $2718=    16?35                $2717               	;0
5310 2647  QM_ASSIGN/22              #2719=    $2718                ?0                  	;0
5311 2647  JMP/42                    ?0        ?5313                ?0                  	;0	>>5313
5312 2647  QM_ASSIGN/22              #2719=    3527:0               ?0                  	;0	<<5307
5313 2647  ASSIGN_DIM/147            ?2632     16?7                 3524:'active_connections'	;0	<<5311
5314 2647  OP_DATA/137               ?0        #2719                ?0                  	;0
5315 2649  BOOL_NOT/13               #2720=    16?4                 ?0                  	;0
5316 2649  JMPZ/43                   ?0        #2720                ?5319               	;0	>>5319
5317 2650  NOP/0                     ?0        ?0                   ?0                  	;1
5318 2650  GOTO/253                  ?0        ?5335                ?3528               	;0
5319 2652  INIT_FCALL_BY_NAME/59     ?0        ?0                   3530:'filterRow'    	;3	<<5316
5320 2652  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
5321 2652  FETCH_STATIC_PROP_FUNC_ARG/177 $2723=    3532:'rRequest'      3533:'XUI'          	;2
5322 2652  FETCH_DIM_FUNC_ARG/93     $2724=    $2723                3535:'show_columns' 	;2
5323 2652  SEND_VAR_EX/66            ?96       $2724                ?2                  	;0
5324 2652  FETCH_STATIC_PROP_FUNC_ARG/177 $2725=    3536:'rRequest'      3537:'XUI'          	;3
5325 2652  FETCH_DIM_FUNC_ARG/93     $2726=    $2725                3539:'hide_columns' 	;3
5326 2652  SEND_VAR_EX/66            ?112      $2726                ?3                  	;0
5327 2652  DO_FCALL_BY_NAME/131      $2727=    ?0                   ?0                  	;0
5328 2652  FETCH_DIM_W/84            $2721=    16?1                 3529:'data'         	;0
5329 2652  ASSIGN_DIM/147            ?2640     $2721                ?4397406            	;0
5330 2652  OP_DATA/137               ?0        $2727                ?0                  	;0
5331 2653  NOP/0                     ?0        ?0                   ?0                  	;1
5332 2653  GOTO/253                  ?0        ?5333                ?3540               	;0
5333 2655  NOP/0                     ?0        ?0                   ?0                  	;1
5334 2655  GOTO/253                  ?0        ?5500                ?3541               	;0
5335 2657  FETCH_DIM_R/81            $2728=    16?7                 3542:'admin_enabled'	;0
5336 2657  BOOL_NOT/13               #2729=    $2728                ?0                  	;0
5337 2657  JMPZ/43                   ?0        #2729                ?5340               	;0	>>5340
5338 2658  NOP/0                     ?0        ?0                   ?0                  	;1
5339 2658  GOTO/253                  ?0        ?5560                ?3543               	;0
5340 2660  FETCH_DIM_R/81            $2730=    16?7                 3544:'enabled'      	;0	<<5337
5341 2660  BOOL_NOT/13               #2731=    $2730                ?0                  	;0
5342 2660  JMPZ/43                   ?0        #2731                ?5345               	;0	>>5345
5343 2661  NOP/0                     ?0        ?0                   ?0                  	;1
5344 2661  GOTO/253                  ?0        ?5359                ?3545               	;0
5345 2663  FETCH_DIM_R/81            $2732=    16?7                 3546:'exp_date'     	;0	<<5342
5346 2663  JMPZ_EX/46                #2733=    $2732                ?5352               	;0	>>5352
5347 2663  FETCH_DIM_R/81            $2734=    16?7                 3547:'exp_date'     	;0
5348 2663  INIT_FCALL_BY_NAME/59     ?0        ?0                   3548:'time'         	;0
5349 2663  DO_FCALL_BY_NAME/131      $2735=    ?0                   ?0                  	;0
5350 2663  IS_SMALLER/19             #2736=    $2734                $2735               	;0
5351 2663  BOOL/52                   #2733=    #2736                ?0                  	;0
5352 2663  JMPZ/43                   ?0        #2733                ?5355               	;0	>>5355	<<5346
5353 2664  NOP/0                     ?0        ?0                   ?0                  	;1
5354 2664  GOTO/253                  ?0        ?5415                ?3550               	;0
5355 2666  NOP/0                     ?0        ?0                   ?0                  	;1	<<5352
5356 2666  GOTO/253                  ?0        ?5412                ?3551               	;0
5357 2668  NOP/0                     ?0        ?0                   ?0                  	;1
5358 2668  GOTO/253                  ?0        ?5360                ?3552               	;0
5359 2670  ASSIGN/38                 ?2655     16?52                3553:'<i class="text-secondary fas fa-square"></i>'	;0
5360 2672  NOP/0                     ?0        ?0                   ?0                  	;1
5361 2672  GOTO/253                  ?0        ?5561                ?3554               	;0
5362 2673  NOP/0                     ?0        ?0                   ?0                  	;1
5363 2673  GOTO/253                  ?0        ?5560                ?3555               	;0
5364 2676  FETCH_DIM_R/81            $2738=    16?7                 3556:'enabled'      	;0
5365 2676  IS_EQUAL/17               #2739=    $2738                3557:1              	;0
5366 2676  JMPZ/43                   ?0        #2739                ?5369               	;0	>>5369
5367 2677  NOP/0                     ?0        ?0                   ?0                  	;1
5368 2677  GOTO/253                  ?0        ?5375                ?3558               	;0
5369 2679  FETCH_DIM_R/81            $2740=    16?7                 3559:'mag_id'       	;0	<<5366
5370 2679  CONCAT/8                  #2741=    3560:'<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2740               	;0
5371 2679  CONCAT/8                  #2742=    #2741                3561:', \'enable\');"><i class="mdi mdi-lock"></i></button>'	;0
5372 2679  ASSIGN_CONCAT/30          ?2661     16?22                #2742               	;0
5373 2680  NOP/0                     ?0        ?0                   ?0                  	;1
5374 2680  GOTO/253                  ?0        ?5451                ?3562               	;0
5375 2682  NOP/0                     ?0        ?0                   ?0                  	;1
5376 2682  GOTO/253                  ?0        ?5447                ?3563               	;0
5377 2684  INIT_FCALL_BY_NAME/59     ?0        ?0                   3564:'date'         	;2
5378 2684  FETCH_DIM_FUNC_ARG/93     $2744=    16?27                3566:'date_format'  	;1
5379 2684  SEND_VAR_EX/66            ?80       $2744                ?1                  	;0
5380 2684  FETCH_DIM_FUNC_ARG/93     $2745=    16?7                 3567:'exp_date'     	;2
5381 2684  SEND_VAR_EX/66            ?96       $2745                ?2                  	;0
5382 2684  DO_FCALL_BY_NAME/131      $2746=    ?0                   ?0                  	;0
5383 2684  CONCAT/8                  #2747=    $2746                3568:'<br/><small class=\'text-secondary\'>'	;0
5384 2684  INIT_FCALL_BY_NAME/59     ?0        ?0                   3569:'date'         	;2
5385 2684  SEND_VAL_EX/116           ?80       3571:'H:i:s'         ?1                  	;0
5386 2684  FETCH_DIM_FUNC_ARG/93     $2748=    16?7                 3572:'exp_date'     	;2
5387 2684  SEND_VAR_EX/66            ?96       $2748                ?2                  	;0
5388 2684  DO_FCALL_BY_NAME/131      $2749=    ?0                   ?0                  	;0
5389 2684  CONCAT/8                  #2750=    #2747                $2749               	;0
5390 2684  CONCAT/8                  #2751=    #2750                3573:'</small>'     	;0
5391 2684  ASSIGN/38                 ?2670     16?48                #2751               	;0
5392 2685  NOP/0                     ?0        ?0                   ?0                  	;1
5393 2685  GOTO/253                  ?0        ?5410                ?3574               	;0
5394 2687  INIT_FCALL_BY_NAME/59     ?0        ?0                   3575:'date'         	;2
5395 2687  FETCH_DIM_FUNC_ARG/93     $2753=    16?27                3577:'date_format'  	;1
5396 2687  SEND_VAR_EX/66            ?80       $2753                ?1                  	;0
5397 2687  FETCH_DIM_FUNC_ARG/93     $2754=    16?7                 3578:'exp_date'     	;2
5398 2687  SEND_VAR_EX/66            ?96       $2754                ?2                  	;0
5399 2687  DO_FCALL_BY_NAME/131      $2755=    ?0                   ?0                  	;0
5400 2687  CONCAT/8                  #2756=    3579:'<span class="expired">' $2755               	;0
5401 2687  CONCAT/8                  #2757=    #2756                3580:'<br/><small>' 	;0
5402 2687  INIT_FCALL_BY_NAME/59     ?0        ?0                   3581:'date'         	;2
5403 2687  SEND_VAL_EX/116           ?80       3583:'H:i:s'         ?1                  	;0
5404 2687  FETCH_DIM_FUNC_ARG/93     $2758=    16?7                 3584:'exp_date'     	;2
5405 2687  SEND_VAR_EX/66            ?96       $2758                ?2                  	;0
5406 2687  DO_FCALL_BY_NAME/131      $2759=    ?0                   ?0                  	;0
5407 2687  CONCAT/8                  #2760=    #2757                $2759               	;0
5408 2687  CONCAT/8                  #2761=    #2760                3585:'</small></span>'	;0
5409 2687  ASSIGN/38                 ?2680     16?48                #2761               	;0
5410 2689  NOP/0                     ?0        ?0                   ?0                  	;1
5411 2689  GOTO/253                  ?0        ?5518                ?3586               	;0
5412 2691  ASSIGN/38                 ?2681     16?52                3587:'<i class="text-success fas fa-square"></i>'	;0
5413 2692  NOP/0                     ?0        ?0                   ?0                  	;1
5414 2692  GOTO/253                  ?0        ?5416                ?3588               	;0
5415 2694  ASSIGN/38                 ?2682     16?52                3589:'<i class="text-warning far fa-square"></i>'	;0
5416 2696  NOP/0                     ?0        ?0                   ?0                  	;1
5417 2696  GOTO/253                  ?0        ?5357                ?3590               	;0
5418 2698  ASSIGN_CONCAT/30          ?2683     16?22                3591:'<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>'	;0
5419 2699  NOP/0                     ?0        ?0                   ?0                  	;1
5420 2699  GOTO/253                  ?0        ?5424                ?3592               	;0
5421 2701  CONCAT/8                  #2766=    3593:'<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' 16?50               	;0
5422 2701  CONCAT/8                  #2767=    #2766                3594:'"><i class="mdi mdi-note"></i></button>'	;0
5423 2701  ASSIGN_CONCAT/30          ?2686     16?22                #2767               	;0
5424 2703  NOP/0                     ?0        ?0                   ?0                  	;1
5425 2703  GOTO/253                  ?0        ?5247                ?3595               	;0
5426 2705  ASSIGN_CONCAT/30          ?2687     16?50                3596:'
'            	;0
5427 2707  FETCH_DIM_R/81            $2770=    16?7                 3597:'reseller_notes'	;0
5428 2707  ASSIGN_CONCAT/30          ?2689     16?50                $2770               	;0
5429 2709  INIT_FCALL_BY_NAME/59     ?0        ?0                   3598:'strlen'       	;1
5430 2709  SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
5431 2709  DO_FCALL_BY_NAME/131      $2772=    ?0                   ?0                  	;0
5432 2709  IS_SMALLER/19             #2773=    3600:0               $2772               	;0
5433 2709  JMPZ/43                   ?0        #2773                ?5436               	;0	>>5436
5434 2710  NOP/0                     ?0        ?0                   ?0                  	;1
5435 2710  GOTO/253                  ?0        ?5421                ?3601               	;0
5436 2712  NOP/0                     ?0        ?0                   ?0                  	;1	<<5433
5437 2712  GOTO/253                  ?0        ?5418                ?3602               	;0
5438 2714  ASSIGN_CONCAT/30          ?2692     16?22                3603:'<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="fas fa-hammer"></i></button>'	;0
5439 2715  NOP/0                     ?0        ?0                   ?0                  	;1
5440 2715  GOTO/253                  ?0        ?5445                ?3604               	;0
5441 2717  FETCH_DIM_R/81            $2775=    16?7                 3605:'mag_id'       	;0
5442 2717  CONCAT/8                  #2776=    3606:'<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2775               	;0
5443 2717  CONCAT/8                  #2777=    #2776                3607:', \'kill_line\');"><i class="fas fa-hammer"></i></button>'	;0
5444 2717  ASSIGN_CONCAT/30          ?2696     16?22                #2777               	;0
5445 2719  NOP/0                     ?0        ?0                   ?0                  	;1
5446 2719  GOTO/253                  ?0        ?5364                ?3608               	;0
5447 2721  FETCH_DIM_R/81            $2779=    16?7                 3609:'mag_id'       	;0
5448 2721  CONCAT/8                  #2780=    3610:'<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2779               	;0
5449 2721  CONCAT/8                  #2781=    #2780                3611:', \'disable\');"><i class="mdi mdi-lock"></i></button>'	;0
5450 2721  ASSIGN_CONCAT/30          ?2700     16?22                #2781               	;0
5451 2723  FETCH_DIM_R/81            $2783=    16?7                 3612:'mag_id'       	;0
5452 2723  CONCAT/8                  #2784=    3613:'<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2783               	;0
5453 2723  CONCAT/8                  #2785=    #2784                3614:', \'delete\');"><i class="mdi mdi-close"></i></button>'	;0
5454 2723  ASSIGN_CONCAT/30          ?2704     16?22                #2785               	;0
5455 2724  ASSIGN_CONCAT/30          ?2705     16?22                3615:'</div>'       	;0
5456 2725  INIT_FCALL_BY_NAME/59     ?0        ?0                   3616:'in_array'     	;2
5457 2725  FETCH_DIM_FUNC_ARG/93     $2788=    16?7                 3618:'member_id'    	;1
5458 2725  SEND_VAR_EX/66            ?80       $2788                ?1                  	;0
5459 2725  INIT_FCALL_BY_NAME/59     ?0        ?0                   3619:'array_merge'  	;2
5460 2725  FETCH_DIM_FUNC_ARG/93     $2789=    16?0                 3621:'direct_reports'	;1
5461 2725  SEND_VAR_EX/66            ?80       $2789                ?1                  	;0
5462 2725  FETCH_DIM_R/81            $2790=    16?5                 3622:'id'           	;0
5463 2725  INIT_ARRAY/71             #2791=    $2790                ?0                  	;4
5464 2725  SEND_VAL_EX/116           ?96       #2791                ?2                  	;0
5465 2725  DO_FCALL_BY_NAME/131      $2792=    ?0                   ?0                  	;0
5466 2725  SEND_VAR_NO_REF_EX/50     ?96       $2792                ?2                  	;0
5467 2725  DO_FCALL_BY_NAME/131      $2793=    ?0                   ?0                  	;0
5468 2725  JMPZ/43                   ?0        $2793                ?5471               	;0	>>5471
5469 2726  NOP/0                     ?0        ?0                   ?0                  	;1
5470 2726  GOTO/253                  ?0        ?5287                ?3623               	;0
5471 2728  NOP/0                     ?0        ?0                   ?0                  	;1	<<5468
5472 2728  GOTO/253                  ?0        ?5275                ?3624               	;0
5473 2730  FETCH_DIM_R/81            $2796=    16?7                 3626:'mag_id'       	;0
5474 2730  CONCAT/8                  #2797=    3627:'<a href=\'mag?id=' $2796               	;0
5475 2730  CONCAT/8                  #2798=    #2797                3628:'\'>'          	;0
5476 2730  FETCH_DIM_R/81            $2799=    16?7                 3629:'mag_id'       	;0
5477 2730  CONCAT/8                  #2800=    #2798                $2799               	;0
5478 2730  CONCAT/8                  #2801=    #2800                3630:'</a>'         	;0
5479 2730  INIT_ARRAY/71             #2802=    #2801                ?0                  	;40
5480 2730  FETCH_DIM_R/81            $2803=    16?7                 3631:'username'     	;0
5481 2730  ADD_ARRAY_ELEMENT/72      #2802=    $2803                ?0                  	;0
5482 2730  FETCH_DIM_R/81            $2804=    16?7                 3632:'mag_id'       	;0
5483 2730  CONCAT/8                  #2805=    3633:'<a href=\'mag?id=' $2804               	;0
5484 2730  CONCAT/8                  #2806=    #2805                3634:'\'>'          	;0
5485 2730  FETCH_DIM_R/81            $2807=    16?7                 3635:'mac'          	;0
5486 2730  CONCAT/8                  #2808=    #2806                $2807               	;0
5487 2730  CONCAT/8                  #2809=    #2808                3636:'</a>'         	;0
5488 2730  ADD_ARRAY_ELEMENT/72      #2802=    #2809                ?0                  	;0
5489 2730  FETCH_DIM_R/81            $2810=    16?7                 3637:'stb_type'     	;0
5490 2730  ADD_ARRAY_ELEMENT/72      #2802=    $2810                ?0                  	;0
5491 2730  ADD_ARRAY_ELEMENT/72      #2802=    16?53                ?0                  	;0
5492 2730  ADD_ARRAY_ELEMENT/72      #2802=    16?52                ?0                  	;0
5493 2730  ADD_ARRAY_ELEMENT/72      #2802=    16?49                ?0                  	;0
5494 2730  ADD_ARRAY_ELEMENT/72      #2802=    16?54                ?0                  	;0
5495 2730  ADD_ARRAY_ELEMENT/72      #2802=    16?48                ?0                  	;0
5496 2730  ADD_ARRAY_ELEMENT/72      #2802=    16?22                ?0                  	;0
5497 2730  FETCH_DIM_W/84            $2794=    16?1                 3625:'data'         	;0
5498 2730  ASSIGN_DIM/147            ?2713     $2794                ?4397406            	;0
5499 2730  OP_DATA/137               ?0        #2802                ?0                  	;0
5500 2732  NOP/0                     ?0        ?0                   ?0                  	;1
5501 2732  GOTO/253                  ?0        ?5578                ?3638               	;0
5502 2734  FETCH_DIM_R/81            $2811=    16?7                 3639:'exp_date'     	;0
5503 2734  JMPZ/43                   ?0        $2811                ?5506               	;0	>>5506
5504 2735  NOP/0                     ?0        ?0                   ?0                  	;1
5505 2735  GOTO/253                  ?0        ?5509                ?3640               	;0
5506 2737  ASSIGN/38                 ?2730     16?48                3641:'&infin;'      	;0	<<5503
5507 2738  NOP/0                     ?0        ?0                   ?0                  	;1
5508 2738  GOTO/253                  ?0        ?5518                ?3642               	;0
5509 2740  FETCH_DIM_R/81            $2813=    16?7                 3643:'exp_date'     	;0
5510 2740  INIT_FCALL_BY_NAME/59     ?0        ?0                   3644:'time'         	;0
5511 2740  DO_FCALL_BY_NAME/131      $2814=    ?0                   ?0                  	;0
5512 2740  IS_SMALLER/19             #2815=    $2813                $2814               	;0
5513 2740  JMPZ/43                   ?0        #2815                ?5516               	;0	>>5516
5514 2741  NOP/0                     ?0        ?0                   ?0                  	;1
5515 2741  GOTO/253                  ?0        ?5394                ?3646               	;0
5516 2743  NOP/0                     ?0        ?0                   ?0                  	;1	<<5513
5517 2743  GOTO/253                  ?0        ?5377                ?3647               	;0
5518 2746  ASSIGN/38                 ?2734     16?22                3648:'<div class="btn-group">'	;0
5519 2747  ASSIGN/38                 ?2735     16?50                3649:''             	;0
5520 2748  INIT_FCALL_BY_NAME/59     ?0        ?0                   3650:'strlen'       	;1
5521 2748  FETCH_DIM_FUNC_ARG/93     $2818=    16?7                 3652:'reseller_notes'	;1
5522 2748  SEND_VAR_EX/66            ?80       $2818                ?1                  	;0
5523 2748  DO_FCALL_BY_NAME/131      $2819=    ?0                   ?0                  	;0
5524 2748  IS_SMALLER/19             #2820=    3653:0               $2819               	;0
5525 2748  BOOL_NOT/13               #2821=    #2820                ?0                  	;0
5526 2748  JMPZ/43                   ?0        #2821                ?5529               	;0	>>5529
5527 2749  NOP/0                     ?0        ?0                   ?0                  	;1
5528 2749  GOTO/253                  ?0        ?5429                ?3654               	;0
5529 2751  INIT_FCALL_BY_NAME/59     ?0        ?0                   3655:'strlen'       	;1	<<5526
5530 2751  SEND_VAR_EX/66            ?80       16?50                ?1                  	;0
5531 2751  DO_FCALL_BY_NAME/131      $2822=    ?0                   ?0                  	;0
5532 2751  IS_NOT_EQUAL/18           #2823=    $2822                3657:0              	;0
5533 2751  BOOL_NOT/13               #2824=    #2823                ?0                  	;0
5534 2751  JMPZ/43                   ?0        #2824                ?5537               	;0	>>5537
5535 2752  NOP/0                     ?0        ?0                   ?0                  	;1
5536 2752  GOTO/253                  ?0        ?5427                ?3658               	;0
5537 2754  NOP/0                     ?0        ?0                   ?0                  	;1	<<5534
5538 2754  GOTO/253                  ?0        ?5426                ?3659               	;0
5539 2756  FETCH_DIM_R/81            $2825=    16?0                 3660:'create_line'  	;0
5540 2756  BOOL_NOT/13               #2826=    $2825                ?0                  	;0
5541 2756  JMPZ/43                   ?0        #2826                ?5544               	;0	>>5544
5542 2757  NOP/0                     ?0        ?0                   ?0                  	;1
5543 2757  GOTO/253                  ?0        ?5548                ?3661               	;0
5544 2759  FETCH_DIM_R/81            $2827=    16?7                 3662:'mag_id'       	;0	<<5541
5545 2759  CONCAT/8                  #2828=    3663:'<button title="Convert to User Line" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2827               	;0
5546 2759  CONCAT/8                  #2829=    #2828                3664:', \'convert\');"><i class="fas fa-retweet"></i></button>'	;0
5547 2759  ASSIGN_CONCAT/30          ?2748     16?22                #2829               	;0
5548 2761  FETCH_DIM_R/81            $2831=    16?0                 3665:'reseller_client_connection_logs'	;0
5549 2761  BOOL_NOT/13               #2832=    $2831                ?0                  	;0
5550 2761  JMPZ/43                   ?0        #2832                ?5553               	;0	>>5553
5551 2762  NOP/0                     ?0        ?0                   ?0                  	;1
5552 2762  GOTO/253                  ?0        ?5364                ?3666               	;0
5553 2764  FETCH_DIM_R/81            $2833=    16?7                 3667:'active_connections'	;0	<<5550
5554 2764  IS_SMALLER/19             #2834=    3668:0               $2833               	;0
5555 2764  JMPZ/43                   ?0        #2834                ?5558               	;0	>>5558
5556 2765  NOP/0                     ?0        ?0                   ?0                  	;1
5557 2765  GOTO/253                  ?0        ?5441                ?3669               	;0
5558 2767  NOP/0                     ?0        ?0                   ?0                  	;1	<<5555
5559 2767  GOTO/253                  ?0        ?5438                ?3670               	;0
5560 2770  ASSIGN/38                 ?2753     16?52                3671:'<i class="text-danger fas fa-square"></i>'	;0
5561 2772  FETCH_DIM_R/81            $2836=    16?7                 3672:'active_connections'	;0
5562 2772  IS_SMALLER/19             #2837=    3673:0               $2836               	;0
5563 2772  JMPZ/43                   ?0        #2837                ?5566               	;0	>>5566
5564 2773  NOP/0                     ?0        ?0                   ?0                  	;1
5565 2773  GOTO/253                  ?0        ?5571                ?3674               	;0
5566 2775  ASSIGN/38                 ?2756     16?49                3675:'<i class="text-warning far fa-square"></i>'	;0	<<5563
5567 2776  NOP/0                     ?0        ?0                   ?0                  	;1
5568 2776  GOTO/253                  ?0        ?5569                ?3676               	;0
5569 2778  NOP/0                     ?0        ?0                   ?0                  	;1
5570 2778  GOTO/253                  ?0        ?5572                ?3677               	;0
5571 2780  ASSIGN/38                 ?2757     16?49                3678:'<i class="text-success fas fa-square"></i>'	;0
5572 2782  FETCH_DIM_R/81            $2840=    16?7                 3679:'is_trial'     	;0
5573 2782  JMPZ/43                   ?0        $2840                ?5576               	;0	>>5576
5574 2783  NOP/0                     ?0        ?0                   ?0                  	;1
5575 2783  GOTO/253                  ?0        ?5272                ?3680               	;0
5576 2785  NOP/0                     ?0        ?0                   ?0                  	;1	<<5573
5577 2785  GOTO/253                  ?0        ?5269                ?3681               	;0
5578 2786  JMP/42                    ?0        ?5244                ?0                  	;0	>>5244
5579 2786  FE_FREE/127               ?0        $2675                ?0                  	;0	<<5243
5580 2789  GOTO/253                  ?0        ?4241                ?3682               	;0
5581 2791  ASSIGN_DIM/147            ?2759     16?11                ?132                	;0
5582 2791  OP_DATA/137               ?0        3683:'(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))' ?0                  	;0
5583 2794  INIT_FCALL_BY_NAME/59     ?0        ?0                   3684:'strlen'       	;1
5584 2794  FETCH_STATIC_PROP_FUNC_ARG/177 $2842=    3686:'rRequest'      3687:'XUI'          	;1
5585 2794  FETCH_DIM_FUNC_ARG/93     $2843=    $2842                3689:'reseller'     	;1
5586 2794  SEND_VAR_EX/66            ?80       $2843                ?1                  	;0
5587 2794  DO_FCALL_BY_NAME/131      $2844=    ?0                   ?0                  	;0
5588 2794  IS_SMALLER/19             #2845=    3690:0               $2844               	;0
5589 2794  BOOL_NOT/13               #2846=    #2845                ?0                  	;0
5590 2794  JMPZ/43                   ?0        #2846                ?5592               	;0	>>5592
5591 2795  GOTO/253                  ?0        ?2149                ?3691               	;0
5592 2797  ASSIGN_DIM/147            ?2765     16?11                ?4397406            	;0	<<5590
5593 2797  OP_DATA/137               ?0        3692:'`lines`.`member_id` = ?' ?0                  	;0
5594 2798  GOTO/253                  ?0        ?2145                ?3693               	;0
5595 2800  ASSIGN_DIM/147            ?2766     16?11                ?0                  	;0
5596 2800  OP_DATA/137               ?0        3694:'(`lines_activity`.`date_start` >= ? AND `lines_activity`.`date_end` <= ?)' ?0                  	;0
5597 2801  ASSIGN_DIM/147            ?2767     16?10                ?0                  	;0
5598 2801  OP_DATA/137               ?0        16?43                ?0                  	;0
5599 2802  ASSIGN_DIM/147            ?2768     16?10                ?0                  	;0
5600 2802  OP_DATA/137               ?0        16?42                ?0                  	;0
5601 2805  GOTO/253                  ?0        ?2613                ?3695               	;0
5602 2807  EXIT/79                   ?0        ?0                   ?0                  	;0
5603 2809  GOTO/253                  ?0        ?1415                ?3696               	;0
5604 2811  FETCH_DIM_R/81            $2851=    16?0                 3697:'can_view_vod' 	;0
5605 2811  JMPZ/43                   ?0        $2851                ?5607               	;0	>>5607
5606 2812  GOTO/253                  ?0        ?3468                ?3698               	;0
5607 2814  GOTO/253                  ?0        ?3467                ?3699               	;0	<<5605
5608 2816  FETCH_STATIC_PROP_R/173   $2852=    3700:'rSettings'     3701:'XUI'          	;0
5609 2816  FETCH_DIM_R/81            $2853=    $2852                3703:'redis_handler'	;0
5610 2816  BOOL_NOT/13               #2854=    $2853                ?0                  	;0
5611 2816  JMPZ/43                   ?0        #2854                ?5613               	;0	>>5613
5612 2817  GOTO/253                  ?0        ?5243                ?3704               	;0
5613 2819  ASSIGN/38                 ?2773     16?35                3705:array (
)      	;0	<<5611
5614 2820  INIT_STATIC_METHOD_CALL/113 ?0        3706:'XUI'           3708:'a96ab74F1921d4Ad'	;2
5615 2820  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
5616 2820  SEND_VAL_EX/116           ?96       3710:false           ?2                  	;0
5617 2820  DO_FCALL/60               $2856=    ?0                   ?0                  	;0
5618 2820  ASSIGN/38                 ?2775     16?36                $2856               	;0
5619 2821  INIT_FCALL_BY_NAME/59     ?0        ?0                   3711:'array_keys'   	;1
5620 2821  SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
5621 2821  DO_FCALL_BY_NAME/131      $2858=    ?0                   ?0                  	;0
5622 2821  FE_RESET_R/77             $2859=    $2858                ?5631               	;0
5623 2821  FE_FETCH_R/78             ?0        $2859                16?2                	;5631	>>5631	<<5630
5624 2822  INIT_FCALL_BY_NAME/59     ?0        ?0                   3713:'count'        	;1
5625 2822  FETCH_DIM_FUNC_ARG/93     $2861=    16?36                16?2                	;1
5626 2822  SEND_VAR_EX/66            ?80       $2861                ?1                  	;0
5627 2822  DO_FCALL_BY_NAME/131      $2862=    ?0                   ?0                  	;0
5628 2822  ASSIGN_DIM/147            ?2778     16?35                16?2                	;0
5629 2822  OP_DATA/137               ?0        $2862                ?0                  	;0
5630 2823  JMP/42                    ?0        ?5623                ?0                  	;0	>>5623
5631 2823  FE_FREE/127               ?0        $2859                ?0                  	;0	<<5622
5632 2826  GOTO/253                  ?0        ?5242                ?3715               	;0
5633 2830  INIT_FCALL_BY_NAME/59     ?0        ?0                   3716:'strlen'       	;1
5634 2830  FETCH_STATIC_PROP_FUNC_ARG/177 $2863=    3718:'rRequest'      3719:'XUI'          	;1
5635 2830  FETCH_DIM_FUNC_ARG/93     $2864=    $2863                3721:'reseller'     	;1
5636 2830  SEND_VAR_EX/66            ?80       $2864                ?1                  	;0
5637 2830  DO_FCALL_BY_NAME/131      $2865=    ?0                   ?0                  	;0
5638 2830  IS_SMALLER/19             #2866=    3722:0               $2865               	;0
5639 2830  BOOL_NOT/13               #2867=    #2866                ?0                  	;0
5640 2830  JMPZ/43                   ?0        #2867                ?5642               	;0	>>5642
5641 2831  GOTO/253                  ?0        ?5751                ?3723               	;0
5642 2833  ASSIGN_DIM/147            ?2786     16?11                ?4397406            	;0	<<5640
5643 2833  OP_DATA/137               ?0        3724:'`lines`.`member_id` = ?' ?0                  	;0
5644 2834  FETCH_STATIC_PROP_R/173   $2870=    3725:'rRequest'      3726:'XUI'          	;0
5645 2834  FETCH_DIM_R/81            $2871=    $2870                3728:'reseller'     	;0
5646 2834  ASSIGN_DIM/147            ?2787     16?10                ?0                  	;0
5647 2834  OP_DATA/137               ?0        $2871                ?0                  	;0
5648 2835  GOTO/253                  ?0        ?5751                ?3729               	;0
5649 2837  INIT_METHOD_CALL/112      ?0        16?3                 3731:'get_row'      	;0
5650 2837  DO_FCALL/60               $2873=    ?0                   ?0                  	;0
5651 2837  FETCH_DIM_R/81            $2874=    $2873                3733:'count'        	;0
5652 2837  ASSIGN_DIM/147            ?2790     16?1                 3730:'recordsTotal' 	;0
5653 2837  OP_DATA/137               ?0        $2874                ?0                  	;0
5654 2839  FETCH_DIM_R/81            $2876=    16?1                 3735:'recordsTotal' 	;0
5655 2839  ASSIGN_DIM/147            ?2793     16?1                 3734:'recordsFiltered'	;0
5656 2839  OP_DATA/137               ?0        $2876                ?0                  	;0
5657 2840  FETCH_DIM_R/81            $2877=    16?1                 3736:'recordsTotal' 	;0
5658 2840  IS_SMALLER/19             #2878=    3737:0               $2877               	;0
5659 2840  BOOL_NOT/13               #2879=    #2878                ?0                  	;0
5660 2840  JMPZ/43                   ?0        #2879                ?5662               	;0	>>5662
5661 2841  GOTO/253                  ?0        ?1055                ?3738               	;0
5662 2843  ROPE_INIT/54              #2881=    ?0                   3739:'SELECT `mag_devices`.`mag_id`, `enigma2_devices`.`device_id`, `lines`.`is_e2`, `lines`.`is_mag`, `lines_live`.`activity_id`, `lines_live`.`divergence`, `lines_live`.`user_id`, `lines_live`.`stream_id`, `streams`.`series_no`, `lines`.`is_restreamer`, `lines_live`.`isp`, `lines_live`.`server_id`, `lines_live`.`user_agent`, `lines_live`.`user_ip`, `lines_live`.`container`, `lines_live`.`uuid`, `lines_live`.`date_start`, `lines_live`.`geoip_country_code`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username`, `streams`.`stream_display_name`, `streams`.`type` FROM `lines_live` LEFT JOIN `lines` ON `lines_live`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_live`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_live`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_live`.`user_id` '	;9	<<5660
5663 2843  ROPE_ADD/55               #2881=    #2881                16?31               	;1
5664 2843  ROPE_ADD/55               #2881=    #2881                3740:' '            	;2
5665 2843  ROPE_ADD/55               #2881=    #2881                16?30               	;3
5666 2843  ROPE_ADD/55               #2881=    #2881                3741:' LIMIT '      	;4
5667 2843  ROPE_ADD/55               #2881=    #2881                16?26               	;5
5668 2843  ROPE_ADD/55               #2881=    #2881                3742:', '           	;6
5669 2843  ROPE_ADD/55               #2881=    #2881                16?33               	;7
5670 2843  ROPE_END/56               #2880=    #2881                3743:';'            	;8
5671 2843  ASSIGN/38                 ?2804     16?32                #2880               	;0
5672 2844  GOTO/253                  ?0        ?1042                ?3744               	;0
5673 2846  ASSIGN_DIM/147            ?2805     16?11                ?2670195408         	;0
5674 2846  OP_DATA/137               ?0        3745:'(`users_logs`.`date` >= ? AND `users_logs`.`date` <= ?)' ?0                  	;0
5675 2847  ASSIGN_DIM/147            ?2806     16?10                ?0                  	;0
5676 2847  OP_DATA/137               ?0        16?43                ?0                  	;0
5677 2848  ASSIGN_DIM/147            ?2807     16?10                ?0                  	;0
5678 2848  OP_DATA/137               ?0        16?42                ?0                  	;0
5679 2851  GOTO/253                  ?0        ?1020                ?3746               	;0
5680 2853  EXIT/79                   ?0        ?0                   ?0                  	;0
5681 2855  GOTO/253                  ?0        ?135                 ?3747               	;0
5682 2857  FETCH_DIM_R/81            $2890=    16?0                 3748:'can_view_vod' 	;0
5683 2857  JMPZ/43                   ?0        $2890                ?5685               	;0	>>5685
5684 2858  GOTO/253                  ?0        ?3576                ?3749               	;0
5685 2860  GOTO/253                  ?0        ?3575                ?3750               	;0	<<5683
5686 2862  ASSIGN/38                 ?2809     16?16                3751:array (
)      	;0
5687 2863  FETCH_STATIC_PROP_R/173   $2892=    3752:'rSettings'     3753:'XUI'          	;0
5688 2863  FETCH_DIM_R/81            $2893=    $2892                3755:'redis_handler'	;0
5689 2863  JMPZ/43                   ?0        $2893                ?5691               	;0	>>5691
5690 2864  GOTO/253                  ?0        ?4822                ?3756               	;0
5691 2866  INIT_FCALL_BY_NAME/59     ?0        ?0                   3757:'strtolower'   	;1	<<5689
5692 2866  FETCH_STATIC_PROP_FUNC_ARG/177 $2894=    3759:'rRequest'      3760:'XUI'          	;1
5693 2866  FETCH_DIM_FUNC_ARG/93     $2895=    $2894                3762:'order'        	;1
5694 2866  FETCH_DIM_FUNC_ARG/93     $2896=    $2895                3763:0              	;1
5695 2866  FETCH_DIM_FUNC_ARG/93     $2897=    $2896                3764:'dir'          	;1
5696 2866  SEND_VAR_EX/66            ?80       $2897                ?1                  	;0
5697 2866  DO_FCALL_BY_NAME/131      $2898=    ?0                   ?0                  	;0
5698 2866  IS_IDENTICAL/15           #2899=    $2898                3765:'desc'         	;0
5699 2866  JMPZ/43                   ?0        #2899                ?5702               	;0	>>5702
5700 2866  QM_ASSIGN/22              #2900=    3766:'desc'          ?0                  	;0
5701 2866  JMP/42                    ?0        ?5703                ?0                  	;0	>>5703
5702 2866  QM_ASSIGN/22              #2900=    3767:'asc'           ?0                  	;0	<<5699
5703 2866  ASSIGN/38                 ?2819     16?29                #2900               	;0	<<5701
5704 2867  ASSIGN/38                 ?2820     16?13                3768:array (
  0 => '`lines_live`.`activity_id`',
  1 => '`lines_live`.`divergence`',
  2 => '`username`',
  3 => '`streams`.`stream_display_name`',
  4 => '`lines_live`.`user_agent`',
  5 => '`lines_live`.`isp`',
  6 => '`lines_live`.`user_ip`',
  7 => 'UNIX_TIMESTAMP() - `lines_live`.`date_start`',
  8 => '`lines_live`.`container`',
  9 => false,
)	;0
5705 2868  FETCH_STATIC_PROP_IS/176  $2903=    3769:'rRequest'      3770:'XUI'          	;0
5706 2868  ISSET_ISEMPTY_DIM_OBJ/115 #2904=    $2903                3772:'order'        	;33554432
5707 2868  JMPZ_EX/46                #2904=    #2904                ?5717               	;0	>>5717
5708 2868  INIT_FCALL_BY_NAME/59     ?0        ?0                   3773:'strlen'       	;1
5709 2868  FETCH_STATIC_PROP_FUNC_ARG/177 $2905=    3775:'rRequest'      3776:'XUI'          	;1
5710 2868  FETCH_DIM_FUNC_ARG/93     $2906=    $2905                3778:'order'        	;1
5711 2868  FETCH_DIM_FUNC_ARG/93     $2907=    $2906                3779:0              	;1
5712 2868  FETCH_DIM_FUNC_ARG/93     $2908=    $2907                3780:'column'       	;1
5713 2868  SEND_VAR_EX/66            ?80       $2908                ?1                  	;0
5714 2868  DO_FCALL_BY_NAME/131      $2909=    ?0                   ?0                  	;0
5715 2868  IS_SMALLER/19             #2910=    3781:0               $2909               	;0
5716 2868  BOOL/52                   #2904=    #2910                ?0                  	;0
5717 2868  JMPZ/43                   ?0        #2904                ?5719               	;0	>>5719	<<5707
5718 2869  GOTO/253                  ?0        ?4467                ?3782               	;0
5719 2871  GOTO/253                  ?0        ?4465                ?3783               	;0	<<5717
5720 2873  FETCH_STATIC_PROP_R/173   $2912=    3784:'rRequest'      3785:'XUI'          	;0
5721 2873  FETCH_DIM_R/81            $2913=    $2912                3787:'category'     	;0
5722 2873  ASSIGN_DIM/147            ?2829     16?10                ?4397406            	;0
5723 2873  OP_DATA/137               ?0        $2913                ?0                  	;0
5724 2875  FETCH_DIM_R/81            $2914=    16?13                16?14               	;0
5725 2875  BOOL_NOT/13               #2915=    $2914                ?0                  	;0
5726 2875  JMPZ/43                   ?0        #2915                ?5728               	;0	>>5728
5727 2876  GOTO/253                  ?0        ?4651                ?3788               	;0
5728 2878  INIT_FCALL_BY_NAME/59     ?0        ?0                   3789:'strtolower'   	;1	<<5726
5729 2878  FETCH_STATIC_PROP_FUNC_ARG/177 $2916=    3791:'rRequest'      3792:'XUI'          	;1
5730 2878  FETCH_DIM_FUNC_ARG/93     $2917=    $2916                3794:'order'        	;1
5731 2878  FETCH_DIM_FUNC_ARG/93     $2918=    $2917                3795:0              	;1
5732 2878  FETCH_DIM_FUNC_ARG/93     $2919=    $2918                3796:'dir'          	;1
5733 2878  SEND_VAR_EX/66            ?80       $2919                ?1                  	;0
5734 2878  DO_FCALL_BY_NAME/131      $2920=    ?0                   ?0                  	;0
5735 2878  IS_IDENTICAL/15           #2921=    $2920                3797:'desc'         	;0
5736 2878  JMPZ/43                   ?0        #2921                ?5739               	;0	>>5739
5737 2878  QM_ASSIGN/22              #2922=    3798:'desc'          ?0                  	;0
5738 2878  JMP/42                    ?0        ?5740                ?0                  	;0	>>5740
5739 2878  QM_ASSIGN/22              #2922=    3799:'asc'           ?0                  	;0	<<5736
5740 2878  ASSIGN/38                 ?2841     16?29                #2922               	;0	<<5738
5741 2879  FETCH_DIM_R/81            $2924=    16?13                16?14               	;0
5742 2879  CONCAT/8                  #2925=    3800:'ORDER BY '     $2924               	;0
5743 2879  CONCAT/8                  #2926=    #2925                3801:' '            	;0
5744 2879  CONCAT/8                  #2927=    #2926                16?29               	;0
5745 2879  ASSIGN/38                 ?2846     16?30                #2927               	;0
5746 2880  GOTO/253                  ?0        ?4651                ?3802               	;0
5747 2883  GOTO/253                  ?0        ?5750                ?3803               	;0
5748 2885  ASSIGN_DIM/147            ?2847     16?11                ?2670195408         	;0
5749 2885  OP_DATA/137               ?0        3804:'`lines`.`enabled` = 0' ?0                  	;0
5750 2887  GOTO/253                  ?0        ?3019                ?3805               	;0
5751 2890  INIT_FCALL_BY_NAME/59     ?0        ?0                   3806:'count'        	;1
5752 2890  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
5753 2890  DO_FCALL_BY_NAME/131      $2930=    ?0                   ?0                  	;0
5754 2890  IS_SMALLER/19             #2931=    3808:0               $2930               	;0
5755 2890  JMPZ/43                   ?0        #2931                ?5757               	;0	>>5757
5756 2891  GOTO/253                  ?0        ?5759                ?3809               	;0
5757 2893  ASSIGN/38                 ?2850     16?31                3810:''             	;0	<<5755
5758 2894  GOTO/253                  ?0        ?4339                ?3811               	;0
5759 2896  GOTO/253                  ?0        ?4333                ?3812               	;0
5760 2899  INIT_FCALL_BY_NAME/59     ?0        ?0                   3813:'count'        	;1
5761 2899  SEND_VAR_EX/66            ?80       16?37                ?1                  	;0
5762 2899  DO_FCALL_BY_NAME/131      $2933=    ?0                   ?0                  	;0
5763 2899  IS_SMALLER/19             #2934=    3815:0               $2933               	;0
5764 2899  BOOL_NOT/13               #2935=    #2934                ?0                  	;0
5765 2899  JMPZ/43                   ?0        #2935                ?5767               	;0	>>5767
5766 2900  GOTO/253                  ?0        ?4233                ?3816               	;0
5767 2902  INIT_METHOD_CALL/112      ?0        16?3                 3817:'query'        	;1	<<5765
5768 2902  INIT_FCALL_BY_NAME/59     ?0        ?0                   3819:'implode'      	;2
5769 2902  SEND_VAL_EX/116           ?80       3821:','             ?1                  	;0
5770 2902  SEND_VAR_EX/66            ?96       16?37                ?2                  	;0
5771 2902  DO_FCALL_BY_NAME/131      $2936=    ?0                   ?0                  	;0
5772 2902  CONCAT/8                  #2937=    3822:'SELECT `stream_id`, `series_id` FROM `streams_episodes` WHERE `stream_id` IN (' $2936               	;0
5773 2902  CONCAT/8                  #2938=    #2937                3823:');'           	;0
5774 2902  SEND_VAL_EX/116           ?80       #2938                ?1                  	;0
5775 2902  DO_FCALL/60               ?2857     ?0                   ?0                  	;0
5776 2903  INIT_METHOD_CALL/112      ?0        16?3                 3824:'get_rows'     	;0
5777 2903  DO_FCALL/60               $2940=    ?0                   ?0                  	;0
5778 2903  FE_RESET_R/77             $2941=    $2940                ?5785               	;0
5779 2903  FE_FETCH_R/78             ?0        $2941                16?7                	;5785	>>5785	<<5784
5780 2904  FETCH_DIM_R/81            $2942=    16?7                 3826:'stream_id'    	;0
5781 2904  FETCH_DIM_R/81            $2944=    16?7                 3827:'series_id'    	;0
5782 2904  ASSIGN_DIM/147            ?2861     16?65                $2942               	;0
5783 2904  OP_DATA/137               ?0        $2944                ?0                  	;0
5784 2905  JMP/42                    ?0        ?5779                ?0                  	;0	>>5779
5785 2905  FE_FREE/127               ?0        $2941                ?0                  	;0	<<5778
5786 2908  GOTO/253                  ?0        ?4211                ?3828               	;0
5787 2910  FETCH_STATIC_PROP_R/173   $2945=    3829:'rRequest'      3830:'XUI'          	;0
5788 2910  FETCH_DIM_R/81            $2946=    $2945                3832:'filter'       	;0
5789 2910  IS_EQUAL/17               #2947=    $2946                3833:5              	;0
5790 2910  BOOL_NOT/13               #2948=    #2947                ?0                  	;0
5791 2910  JMPZ/43                   ?0        #2948                ?5793               	;0	>>5793
5792 2911  GOTO/253                  ?0        ?5795                ?3834               	;0
5793 2913  ASSIGN_DIM/147            ?2867     16?11                ?4397406            	;0	<<5791
5794 2913  OP_DATA/137               ?0        3835:'`lines`.`is_trial` = 1' ?0                  	;0
5795 2915  GOTO/253                  ?0        ?2703                ?3836               	;0
5796 2917  GOTO/253                  ?0        ?2701                ?3837               	;0
5797 2919  INIT_METHOD_CALL/112      ?0        16?3                 3838:'query'        	;1
5798 2919  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
5799 2919  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
5800 2919  DO_FCALL/60               ?2868     ?0                   ?0                  	;0
5801 2920  INIT_METHOD_CALL/112      ?0        16?3                 3840:'num_rows'     	;0
5802 2920  DO_FCALL/60               $2951=    ?0                   ?0                  	;0
5803 2920  IS_SMALLER/19             #2952=    3842:0               $2951               	;0
5804 2920  BOOL_NOT/13               #2953=    #2952                ?0                  	;0
5805 2920  JMPZ/43                   ?0        #2953                ?5807               	;0	>>5807
5806 2921  GOTO/253                  ?0        ?6096                ?3843               	;0
5807 2923  INIT_METHOD_CALL/112      ?0        16?3                 3844:'get_rows'     	;0	<<5805
5808 2923  DO_FCALL/60               $2954=    ?0                   ?0                  	;0
5809 2923  FE_RESET_R/77             $2955=    $2954                ?6095               	;0
5810 2923  FE_FETCH_R/78             ?0        $2955                16?7                	;6095	>>6095	<<6094
5811 2924  NOP/0                     ?0        ?0                   ?0                  	;1
5812 2924  GOTO/253                  ?0        ?5915                ?3846               	;0
5813 2926  FETCH_DIM_R/81            $2956=    16?0                 3847:'delete_users' 	;0
5814 2926  BOOL_NOT/13               #2957=    $2956                ?0                  	;0
5815 2926  JMPZ/43                   ?0        #2957                ?5818               	;0	>>5818
5816 2927  NOP/0                     ?0        ?0                   ?0                  	;1
5817 2927  GOTO/253                  ?0        ?5822                ?3848               	;0
5818 2929  FETCH_DIM_R/81            $2958=    16?7                 3849:'id'           	;0	<<5815
5819 2929  CONCAT/8                  #2959=    3850:'<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2958               	;0
5820 2929  CONCAT/8                  #2960=    #2959                3851:', \'delete\');"><i class="mdi mdi-close"></i></button>'	;0
5821 2929  ASSIGN_CONCAT/30          ?2879     16?22                #2960               	;0
5822 2931  ASSIGN_CONCAT/30          ?2880     16?22                3852:'</div>'       	;0
5823 2932  INIT_FCALL_BY_NAME/59     ?0        ?0                   3853:'strlen'       	;1
5824 2932  FETCH_DIM_FUNC_ARG/93     $2963=    16?7                 3855:'ip'           	;1
5825 2932  SEND_VAR_EX/66            ?80       $2963                ?1                  	;0
5826 2932  DO_FCALL_BY_NAME/131      $2964=    ?0                   ?0                  	;0
5827 2932  IS_SMALLER/19             #2965=    3856:0               $2964               	;0
5828 2932  JMPZ/43                   ?0        #2965                ?5831               	;0	>>5831
5829 2933  NOP/0                     ?0        ?0                   ?0                  	;1
5830 2933  GOTO/253                  ?0        ?6085                ?3857               	;0
5831 2935  NOP/0                     ?0        ?0                   ?0                  	;1	<<5828
5832 2935  GOTO/253                  ?0        ?6082                ?3858               	;0
5833 2938  INIT_FCALL_BY_NAME/59     ?0        ?0                   3859:'intval'       	;1
5834 2938  FETCH_DIM_FUNC_ARG/93     $2966=    16?7                 3861:'owner_id'     	;1
5835 2938  SEND_VAR_EX/66            ?80       $2966                ?1                  	;0
5836 2938  DO_FCALL_BY_NAME/131      $2967=    ?0                   ?0                  	;0
5837 2938  CONCAT/8                  #2968=    3862:'<a href=\'user?id=' $2967               	;0
5838 2938  CONCAT/8                  #2969=    #2968                3863:'\'>'          	;0
5839 2938  FETCH_DIM_R/81            $2970=    16?7                 3864:'owner_username'	;0
5840 2938  CONCAT/8                  #2971=    #2969                $2970               	;0
5841 2938  CONCAT/8                  #2972=    #2971                3865:'</a>'         	;0
5842 2938  ASSIGN/38                 ?2891     16?53                #2972               	;0
5843 2940  INIT_FCALL_BY_NAME/59     ?0        ?0                   3867:'intval'       	;1
5844 2940  FETCH_DIM_FUNC_ARG/93     $2976=    16?7                 3869:'id'           	;1
5845 2940  SEND_VAR_EX/66            ?80       $2976                ?1                  	;0
5846 2940  DO_FCALL_BY_NAME/131      $2977=    ?0                   ?0                  	;0
5847 2940  CONCAT/8                  #2978=    3870:'<a href=\'user?id=' $2977               	;0
5848 2940  CONCAT/8                  #2979=    #2978                3871:'\'>'          	;0
5849 2940  FETCH_DIM_R/81            $2980=    16?7                 3872:'id'           	;0
5850 2940  CONCAT/8                  #2981=    #2979                $2980               	;0
5851 2940  CONCAT/8                  #2982=    #2981                3873:'</a>'         	;0
5852 2940  INIT_ARRAY/71             #2983=    #2982                ?0                  	;36
5853 2940  ADD_ARRAY_ELEMENT/72      #2983=    16?20                ?0                  	;0
5854 2940  ADD_ARRAY_ELEMENT/72      #2983=    16?53                ?0                  	;0
5855 2940  ADD_ARRAY_ELEMENT/72      #2983=    16?18                ?0                  	;0
5856 2940  ADD_ARRAY_ELEMENT/72      #2983=    16?52                ?0                  	;0
5857 2940  ADD_ARRAY_ELEMENT/72      #2983=    16?76                ?0                  	;0
5858 2940  ADD_ARRAY_ELEMENT/72      #2983=    16?77                ?0                  	;0
5859 2940  FETCH_DIM_R/81            $2984=    16?7                 3874:'last_login'   	;0
5860 2940  ADD_ARRAY_ELEMENT/72      #2983=    $2984                ?0                  	;0
5861 2940  ADD_ARRAY_ELEMENT/72      #2983=    16?22                ?0                  	;0
5862 2940  FETCH_DIM_W/84            $2974=    16?1                 3866:'data'         	;0
5863 2940  ASSIGN_DIM/147            ?2893     $2974                ?2670194944         	;0
5864 2940  OP_DATA/137               ?0        #2983                ?0                  	;0
5865 2942  NOP/0                     ?0        ?0                   ?0                  	;1
5866 2942  GOTO/253                  ?0        ?6094                ?3875               	;0
5867 2944  ASSIGN_CONCAT/30          ?2903     16?22                3876:'<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>'	;0
5868 2945  NOP/0                     ?0        ?0                   ?0                  	;1
5869 2945  GOTO/253                  ?0        ?5874                ?3877               	;0
5870 2947  FETCH_DIM_R/81            $2986=    16?7                 3878:'notes'        	;0
5871 2947  CONCAT/8                  #2987=    3879:'<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' $2986               	;0
5872 2947  CONCAT/8                  #2988=    #2987                3880:'"><i class="mdi mdi-note"></i></button>'	;0
5873 2947  ASSIGN_CONCAT/30          ?2907     16?22                #2988               	;0
5874 2949  NOP/0                     ?0        ?0                   ?0                  	;1
5875 2949  GOTO/253                  ?0        ?6020                ?3881               	;0
5876 2951  FETCH_DIM_R/81            $2990=    16?7                 3882:'id'           	;0
5877 2951  CONCAT/8                  #2991=    3883:'<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2990               	;0
5878 2951  CONCAT/8                  #2992=    #2991                3884:', \'enable\');"><i class="mdi mdi-lock"></i></button>'	;0
5879 2951  ASSIGN_CONCAT/30          ?2911     16?22                #2992               	;0
5880 2952  NOP/0                     ?0        ?0                   ?0                  	;1
5881 2952  GOTO/253                  ?0        ?5886                ?3885               	;0
5882 2954  FETCH_DIM_R/81            $2994=    16?7                 3886:'id'           	;0
5883 2954  CONCAT/8                  #2995=    3887:'<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' $2994               	;0
5884 2954  CONCAT/8                  #2996=    #2995                3888:', \'disable\');"><i class="mdi mdi-lock"></i></button>'	;0
5885 2954  ASSIGN_CONCAT/30          ?2915     16?22                #2996               	;0
5886 2956  NOP/0                     ?0        ?0                   ?0                  	;1
5887 2956  GOTO/253                  ?0        ?5813                ?3889               	;0
5888 2959  FETCH_DIM_R/81            $2998=    16?7                 3890:'user_count'   	;0
5889 2959  IS_SMALLER/19             #2999=    3891:0               $2998               	;0
5890 2959  JMPZ/43                   ?0        #2999                ?5893               	;0	>>5893
5891 2960  NOP/0                     ?0        ?0                   ?0                  	;1
5892 2960  GOTO/253                  ?0        ?5896                ?3892               	;0
5893 2962  ASSIGN/38                 ?2918     16?77                3893:'<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">0</button>'	;0	<<5890
5894 2963  NOP/0                     ?0        ?0                   ?0                  	;1
5895 2963  GOTO/253                  ?0        ?5991                ?3894               	;0
5896 2965  NOP/0                     ?0        ?0                   ?0                  	;1
5897 2965  GOTO/253                  ?0        ?5983                ?3895               	;0
5898 2967  FETCH_DIM_R/81            $3001=    16?7                 3896:'last_login'   	;0
5899 2967  JMPZ/43                   ?0        $3001                ?5902               	;0	>>5902
5900 2968  NOP/0                     ?0        ?0                   ?0                  	;1
5901 2968  GOTO/253                  ?0        ?5904                ?3897               	;0
5902 2970  ASSIGN_DIM/147            ?2920     16?7                 3898:'last_login'   	;0	<<5899
5903 2970  OP_DATA/137               ?0        3899:'NEVER'         ?0                  	;0
5904 2972  ASSIGN/38                 ?2921     16?22                3900:'<div class="btn-group">'	;0
5905 2973  INIT_FCALL_BY_NAME/59     ?0        ?0                   3901:'strlen'       	;1
5906 2973  FETCH_DIM_FUNC_ARG/93     $3004=    16?7                 3903:'notes'        	;1
5907 2973  SEND_VAR_EX/66            ?80       $3004                ?1                  	;0
5908 2973  DO_FCALL_BY_NAME/131      $3005=    ?0                   ?0                  	;0
5909 2973  IS_SMALLER/19             #3006=    3904:0               $3005               	;0
5910 2973  JMPZ/43                   ?0        #3006                ?5913               	;0	>>5913
5911 2974  NOP/0                     ?0        ?0                   ?0                  	;1
5912 2974  GOTO/253                  ?0        ?5870                ?3905               	;0
5913 2976  NOP/0                     ?0        ?0                   ?0                  	;1	<<5910
5914 2976  GOTO/253                  ?0        ?5867                ?3906               	;0
5915 2978  BOOL_NOT/13               #3007=    16?4                 ?0                  	;0
5916 2978  JMPZ/43                   ?0        #3007                ?5919               	;0	>>5919
5917 2979  NOP/0                     ?0        ?0                   ?0                  	;1
5918 2979  GOTO/253                  ?0        ?5933                ?3907               	;0
5919 2981  INIT_FCALL_BY_NAME/59     ?0        ?0                   3909:'filterRow'    	;3	<<5916
5920 2981  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
5921 2981  FETCH_STATIC_PROP_FUNC_ARG/177 $3010=    3911:'rRequest'      3912:'XUI'          	;2
5922 2981  FETCH_DIM_FUNC_ARG/93     $3011=    $3010                3914:'show_columns' 	;2
5923 2981  SEND_VAR_EX/66            ?96       $3011                ?2                  	;0
5924 2981  FETCH_STATIC_PROP_FUNC_ARG/177 $3012=    3915:'rRequest'      3916:'XUI'          	;3
5925 2981  FETCH_DIM_FUNC_ARG/93     $3013=    $3012                3918:'hide_columns' 	;3
5926 2981  SEND_VAR_EX/66            ?112      $3013                ?3                  	;0
5927 2981  DO_FCALL_BY_NAME/131      $3014=    ?0                   ?0                  	;0
5928 2981  FETCH_DIM_W/84            $3008=    16?1                 3908:'data'         	;0
5929 2981  ASSIGN_DIM/147            ?2927     $3008                ?4397406            	;0
5930 2981  OP_DATA/137               ?0        $3014                ?0                  	;0
5931 2982  NOP/0                     ?0        ?0                   ?0                  	;1
5932 2982  GOTO/253                  ?0        ?5865                ?3919               	;0
5933 2984  FETCH_DIM_R/81            $3015=    16?7                 3920:'status'       	;0
5934 2984  IS_EQUAL/17               #3016=    $3015                3921:1              	;0
5935 2984  JMPZ/43                   ?0        #3016                ?5938               	;0	>>5938
5936 2985  NOP/0                     ?0        ?0                   ?0                  	;1
5937 2985  GOTO/253                  ?0        ?5980                ?3922               	;0
5938 2987  NOP/0                     ?0        ?0                   ?0                  	;1	<<5935
5939 2987  GOTO/253                  ?0        ?5977                ?3923               	;0
5940 2989  FETCH_DIM_R/81            $3017=    16?7                 3924:'id'           	;0
5941 2989  CONCAT/8                  #3018=    3925:'<button title="Adjust Credits" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="addCredits(' $3017               	;0
5942 2989  CONCAT/8                  #3019=    #3018                3926:', \''         	;0
5943 2989  INIT_FCALL_BY_NAME/59     ?0        ?0                   3927:'addslashes'   	;1
5944 2989  FETCH_DIM_FUNC_ARG/93     $3020=    16?7                 3929:'username'     	;1
5945 2989  SEND_VAR_EX/66            ?80       $3020                ?1                  	;0
5946 2989  DO_FCALL_BY_NAME/131      $3021=    ?0                   ?0                  	;0
5947 2989  CONCAT/8                  #3022=    #3019                $3021               	;0
5948 2989  CONCAT/8                  #3023=    #3022                3930:'\', '         	;0
5949 2989  INIT_FCALL_BY_NAME/59     ?0        ?0                   3931:'intval'       	;1
5950 2989  FETCH_DIM_FUNC_ARG/93     $3024=    16?7                 3933:'credits'      	;1
5951 2989  SEND_VAR_EX/66            ?80       $3024                ?1                  	;0
5952 2989  DO_FCALL_BY_NAME/131      $3025=    ?0                   ?0                  	;0
5953 2989  CONCAT/8                  #3026=    #3023                $3025               	;0
5954 2989  CONCAT/8                  #3027=    #3026                3934:');"><i class="mdi mdi-coin"></i></button>'	;0
5955 2989  ASSIGN_CONCAT/30          ?2946     16?22                #3027               	;0
5956 2990  INIT_FCALL_BY_NAME/59     ?0        ?0                   3935:'intval'       	;1
5957 2990  FETCH_DIM_FUNC_ARG/93     $3029=    16?7                 3937:'id'           	;1
5958 2990  SEND_VAR_EX/66            ?80       $3029                ?1                  	;0
5959 2990  DO_FCALL_BY_NAME/131      $3030=    ?0                   ?0                  	;0
5960 2990  CONCAT/8                  #3031=    3938:'<a href=\'user?id=' $3030               	;0
5961 2990  CONCAT/8                  #3032=    #3031                3939:'\'>'          	;0
5962 2990  FETCH_DIM_R/81            $3033=    16?7                 3940:'username'     	;0
5963 2990  CONCAT/8                  #3034=    #3032                $3033               	;0
5964 2990  CONCAT/8                  #3035=    #3034                3941:'</a>'         	;0
5965 2990  ASSIGN/38                 ?2954     16?20                #3035               	;0
5966 2992  FETCH_DIM_R/81            $3037=    16?7                 3942:'id'           	;0
5967 2992  CONCAT/8                  #3038=    3943:'<a href="user?id=' $3037               	;0
5968 2992  CONCAT/8                  #3039=    #3038                3944:'"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>'	;0
5969 2992  ASSIGN_CONCAT/30          ?2958     16?22                #3039               	;0
5970 2993  FETCH_DIM_R/81            $3041=    16?7                 3945:'status'       	;0
5971 2993  IS_EQUAL/17               #3042=    $3041                3946:1              	;0
5972 2993  JMPZ/43                   ?0        #3042                ?5975               	;0	>>5975
5973 2994  NOP/0                     ?0        ?0                   ?0                  	;1
5974 2994  GOTO/253                  ?0        ?5882                ?3947               	;0
5975 2996  NOP/0                     ?0        ?0                   ?0                  	;1	<<5972
5976 2996  GOTO/253                  ?0        ?5876                ?3948               	;0
5977 2998  ASSIGN/38                 ?2961     16?52                3949:'<i class="text-secondary fas fa-square"></i>'	;0
5978 2999  NOP/0                     ?0        ?0                   ?0                  	;1
5979 2999  GOTO/253                  ?0        ?5981                ?3950               	;0
5980 3001  ASSIGN/38                 ?2962     16?52                3951:'<i class="text-success fas fa-square"></i>'	;0
5981 3003  NOP/0                     ?0        ?0                   ?0                  	;1
5982 3003  GOTO/253                  ?0        ?5898                ?3952               	;0
5983 3005  INIT_FCALL_BY_NAME/59     ?0        ?0                   3953:'number_format'	;2
5984 3005  FETCH_DIM_FUNC_ARG/93     $3045=    16?7                 3955:'user_count'   	;1
5985 3005  SEND_VAR_EX/66            ?80       $3045                ?1                  	;0
5986 3005  SEND_VAL_EX/116           ?96       3956:0               ?2                  	;0
5987 3005  DO_FCALL_BY_NAME/131      $3046=    ?0                   ?0                  	;0
5988 3005  CONCAT/8                  #3047=    3957:'<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' $3046               	;0
5989 3005  CONCAT/8                  #3048=    #3047                3958:'</button>'    	;0
5990 3005  ASSIGN/38                 ?2967     16?77                #3048               	;0
5991 3007  INIT_FCALL_BY_NAME/59     ?0        ?0                   3959:'in_array'     	;2
5992 3007  FETCH_DIM_FUNC_ARG/93     $3050=    16?7                 3961:'owner_id'     	;1
5993 3007  SEND_VAR_EX/66            ?80       $3050                ?1                  	;0
5994 3007  INIT_FCALL_BY_NAME/59     ?0        ?0                   3962:'array_merge'  	;2
5995 3007  FETCH_DIM_FUNC_ARG/93     $3051=    16?0                 3964:'direct_reports'	;1
5996 3007  SEND_VAR_EX/66            ?80       $3051                ?1                  	;0
5997 3007  FETCH_DIM_R/81            $3052=    16?5                 3965:'id'           	;0
5998 3007  INIT_ARRAY/71             #3053=    $3052                ?0                  	;4
5999 3007  SEND_VAL_EX/116           ?96       #3053                ?2                  	;0
6000 3007  DO_FCALL_BY_NAME/131      $3054=    ?0                   ?0                  	;0
6001 3007  SEND_VAR_NO_REF_EX/50     ?96       $3054                ?2                  	;0
6002 3007  DO_FCALL_BY_NAME/131      $3055=    ?0                   ?0                  	;0
6003 3007  JMPZ/43                   ?0        $3055                ?6006               	;0	>>6006
6004 3008  NOP/0                     ?0        ?0                   ?0                  	;1
6005 3008  GOTO/253                  ?0        ?5833                ?3966               	;0
6006 3010  INIT_FCALL_BY_NAME/59     ?0        ?0                   3967:'intval'       	;1	<<6003
6007 3010  FETCH_DIM_FUNC_ARG/93     $3056=    16?7                 3969:'owner_id'     	;1
6008 3010  SEND_VAR_EX/66            ?80       $3056                ?1                  	;0
6009 3010  DO_FCALL_BY_NAME/131      $3057=    ?0                   ?0                  	;0
6010 3010  CONCAT/8                  #3058=    3970:'<a href=\'user?id=' $3057               	;0
6011 3010  CONCAT/8                  #3059=    #3058                3971:'\'>'          	;0
6012 3010  FETCH_DIM_R/81            $3060=    16?7                 3972:'owner_username'	;0
6013 3010  CONCAT/8                  #3061=    #3059                $3060               	;0
6014 3010  CONCAT/8                  #3062=    #3061                3973:'<br/><small class=\'text-pink\'>(indirect)</small></a>'	;0
6015 3010  ASSIGN/38                 ?2981     16?53                #3062               	;0
6016 3011  NOP/0                     ?0        ?0                   ?0                  	;1
6017 3011  GOTO/253                  ?0        ?5843                ?3974               	;0
6018 3012  NOP/0                     ?0        ?0                   ?0                  	;1
6019 3012  GOTO/253                  ?0        ?5833                ?3975               	;0
6020 3014  INIT_FCALL_BY_NAME/59     ?0        ?0                   3976:'in_array'     	;2
6021 3014  FETCH_DIM_FUNC_ARG/93     $3064=    16?7                 3978:'id'           	;1
6022 3014  SEND_VAR_EX/66            ?80       $3064                ?1                  	;0
6023 3014  INIT_FCALL_BY_NAME/59     ?0        ?0                   3979:'array_merge'  	;2
6024 3014  FETCH_DIM_FUNC_ARG/93     $3065=    16?0                 3981:'direct_reports'	;1
6025 3014  SEND_VAR_EX/66            ?80       $3065                ?1                  	;0
6026 3014  FETCH_DIM_R/81            $3066=    16?5                 3982:'id'           	;0
6027 3014  INIT_ARRAY/71             #3067=    $3066                ?0                  	;4
6028 3014  SEND_VAL_EX/116           ?96       #3067                ?2                  	;0
6029 3014  DO_FCALL_BY_NAME/131      $3068=    ?0                   ?0                  	;0
6030 3014  SEND_VAR_NO_REF_EX/50     ?96       $3068                ?2                  	;0
6031 3014  DO_FCALL_BY_NAME/131      $3069=    ?0                   ?0                  	;0
6032 3014  JMPZ/43                   ?0        $3069                ?6035               	;0	>>6035
6033 3015  NOP/0                     ?0        ?0                   ?0                  	;1
6034 3015  GOTO/253                  ?0        ?6063                ?3983               	;0
6035 3017  FETCH_DIM_R/81            $3070=    16?7                 3984:'id'           	;0	<<6032
6036 3017  CONCAT/8                  #3071=    3985:'<button title="Adjust Credits" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="addCredits(' $3070               	;0
6037 3017  CONCAT/8                  #3072=    #3071                3986:', \''         	;0
6038 3017  INIT_FCALL_BY_NAME/59     ?0        ?0                   3987:'addslashes'   	;1
6039 3017  FETCH_DIM_FUNC_ARG/93     $3073=    16?7                 3989:'username'     	;1
6040 3017  SEND_VAR_EX/66            ?80       $3073                ?1                  	;0
6041 3017  DO_FCALL_BY_NAME/131      $3074=    ?0                   ?0                  	;0
6042 3017  CONCAT/8                  #3075=    #3072                $3074               	;0
6043 3017  CONCAT/8                  #3076=    #3075                3990:'\', '         	;0
6044 3017  INIT_FCALL_BY_NAME/59     ?0        ?0                   3991:'intval'       	;1
6045 3017  FETCH_DIM_FUNC_ARG/93     $3077=    16?7                 3993:'credits'      	;1
6046 3017  SEND_VAR_EX/66            ?80       $3077                ?1                  	;0
6047 3017  DO_FCALL_BY_NAME/131      $3078=    ?0                   ?0                  	;0
6048 3017  CONCAT/8                  #3079=    #3076                $3078               	;0
6049 3017  CONCAT/8                  #3080=    #3079                3994:', true);"><i class="mdi mdi-coin"></i></button>'	;0
6050 3017  ASSIGN_CONCAT/30          ?2999     16?22                #3080               	;0
6051 3018  INIT_FCALL_BY_NAME/59     ?0        ?0                   3995:'intval'       	;1
6052 3018  FETCH_DIM_FUNC_ARG/93     $3082=    16?7                 3997:'id'           	;1
6053 3018  SEND_VAR_EX/66            ?80       $3082                ?1                  	;0
6054 3018  DO_FCALL_BY_NAME/131      $3083=    ?0                   ?0                  	;0
6055 3018  CONCAT/8                  #3084=    3998:'<a href=\'user?id=' $3083               	;0
6056 3018  CONCAT/8                  #3085=    #3084                3999:'\'>'          	;0
6057 3018  FETCH_DIM_R/81            $3086=    16?7                 4000:'username'     	;0
6058 3018  CONCAT/8                  #3087=    #3085                $3086               	;0
6059 3018  CONCAT/8                  #3088=    #3087                4001:'<br/><small class=\'text-pink\'>(indirect)</small></a>'	;0
6060 3018  ASSIGN/38                 ?3007     16?20                #3088               	;0
6061 3019  NOP/0                     ?0        ?0                   ?0                  	;1
6062 3019  GOTO/253                  ?0        ?5966                ?4002               	;0
6063 3021  NOP/0                     ?0        ?0                   ?0                  	;1
6064 3021  GOTO/253                  ?0        ?5940                ?4003               	;0
6065 3023  FETCH_DIM_R/81            $3090=    16?7                 4004:'is_reseller'  	;0
6066 3023  JMPZ/43                   ?0        $3090                ?6069               	;0	>>6069
6067 3024  NOP/0                     ?0        ?0                   ?0                  	;1
6068 3024  GOTO/253                  ?0        ?6072                ?4005               	;0
6069 3026  ASSIGN/38                 ?3009     16?76                4006:'<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">-</button>'	;0	<<6066
6070 3027  NOP/0                     ?0        ?0                   ?0                  	;1
6071 3027  GOTO/253                  ?0        ?5888                ?4007               	;0
6072 3029  INIT_FCALL_BY_NAME/59     ?0        ?0                   4008:'number_format'	;2
6073 3029  FETCH_DIM_FUNC_ARG/93     $3092=    16?7                 4010:'credits'      	;1
6074 3029  SEND_VAR_EX/66            ?80       $3092                ?1                  	;0
6075 3029  SEND_VAL_EX/116           ?96       4011:0               ?2                  	;0
6076 3029  DO_FCALL_BY_NAME/131      $3093=    ?0                   ?0                  	;0
6077 3029  CONCAT/8                  #3094=    4012:'<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' $3093               	;0
6078 3029  CONCAT/8                  #3095=    #3094                4013:'</button>'    	;0
6079 3029  ASSIGN/38                 ?3014     16?76                #3095               	;0
6080 3030  NOP/0                     ?0        ?0                   ?0                  	;1
6081 3030  GOTO/253                  ?0        ?5888                ?4014               	;0
6082 3032  ASSIGN/38                 ?3015     16?18                4015:''             	;0
6083 3033  NOP/0                     ?0        ?0                   ?0                  	;1
6084 3033  GOTO/253                  ?0        ?6092                ?4016               	;0
6085 3035  FETCH_DIM_R/81            $3098=    16?7                 4017:'ip'           	;0
6086 3035  CONCAT/8                  #3099=    4018:'<a onClick="whois(\'' $3098               	;0
6087 3035  CONCAT/8                  #3100=    #3099                4019:'\');" href=\'javascript: void(0);\'>'	;0
6088 3035  FETCH_DIM_R/81            $3101=    16?7                 4020:'ip'           	;0
6089 3035  CONCAT/8                  #3102=    #3100                $3101               	;0
6090 3035  CONCAT/8                  #3103=    #3102                4021:'</a>'         	;0
6091 3035  ASSIGN/38                 ?3022     16?18                #3103               	;0
6092 3037  NOP/0                     ?0        ?0                   ?0                  	;1
6093 3037  GOTO/253                  ?0        ?6065                ?4022               	;0
6094 3038  JMP/42                    ?0        ?5810                ?0                  	;0	>>5810
6095 3038  FE_FREE/127               ?0        $2955                ?0                  	;0	<<5809
6096 3042  GOTO/253                  ?0        ?4596                ?4023               	;0
6097 3044  GOTO/253                  ?0        ?6100                ?4024               	;0
6098 3046  ASSIGN_DIM/147            ?3023     16?11                ?93                 	;0
6099 3046  OP_DATA/137               ?0        4025:'(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())' ?0                  	;0
6100 3048  GOTO/253                  ?0        ?2653                ?4026               	;0
6101 3049  GOTO/253                  ?0        ?2651                ?4027               	;0
6102 3052  FETCH_DIM_R/81            $3106=    16?0                 4028:'can_view_vod' 	;0
6103 3052  JMPZ/43                   ?0        $3106                ?6105               	;0	>>6105
6104 3053  GOTO/253                  ?0        ?6106                ?4029               	;0
6105 3055  EXIT/79                   ?0        ?0                   ?0                  	;0	<<6103
6106 3057  INIT_FCALL_BY_NAME/59     ?0        ?0                   4030:'F769E3F0C739D1a6'	;1
6107 3057  SEND_VAL_EX/116           ?80       4032:'movie'         ?1                  	;0
6108 3057  DO_FCALL_BY_NAME/131      $3107=    ?0                   ?0                  	;0
6109 3057  ASSIGN/38                 ?3026     16?12                $3107               	;0
6110 3058  GOTO/253                  ?0        ?2847                ?4033               	;0
6111 3060  ROPE_INIT/54              #3110=    ?0                   4034:'SELECT `users`.`username`, `users_logs`.`id`, `users_logs`.`owner`, `users_logs`.`type`, `users_logs`.`action`, `users_logs`.`log_id`, `users_logs`.`package_id`, `users_logs`.`cost`, `users_logs`.`credits_after`, `users_logs`.`date`, `users_logs`.`deleted_info` FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` '	;9
6112 3060  ROPE_ADD/55               #3110=    #3110                16?31               	;1
6113 3060  ROPE_ADD/55               #3110=    #3110                4035:' '            	;2
6114 3060  ROPE_ADD/55               #3110=    #3110                16?30               	;3
6115 3060  ROPE_ADD/55               #3110=    #3110                4036:' LIMIT '      	;4
6116 3060  ROPE_ADD/55               #3110=    #3110                16?26               	;5
6117 3060  ROPE_ADD/55               #3110=    #3110                4037:', '           	;6
6118 3060  ROPE_ADD/55               #3110=    #3110                16?33               	;7
6119 3060  ROPE_END/56               #3109=    #3110                4038:';'            	;8
6120 3060  ASSIGN/38                 ?3033     16?32                #3109               	;0
6121 3061  INIT_METHOD_CALL/112      ?0        16?3                 4039:'query'        	;1
6122 3061  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
6123 3061  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
6124 3061  DO_FCALL/60               ?3034     ?0                   ?0                  	;0
6125 3062  INIT_METHOD_CALL/112      ?0        16?3                 4041:'num_rows'     	;0
6126 3062  DO_FCALL/60               $3117=    ?0                   ?0                  	;0
6127 3062  IS_SMALLER/19             #3118=    4043:0               $3117               	;0
6128 3062  BOOL_NOT/13               #3119=    #3118                ?0                  	;0
6129 3062  JMPZ/43                   ?0        #3119                ?6131               	;0	>>6131
6130 3063  GOTO/253                  ?0        ?2607                ?4044               	;0
6131 3065  INIT_METHOD_CALL/112      ?0        16?3                 4045:'get_rows'     	;0	<<6129
6132 3065  DO_FCALL/60               $3120=    ?0                   ?0                  	;0
6133 3065  FE_RESET_R/77             $3121=    $3120                ?6468               	;0
6134 3065  FE_FETCH_R/78             ?0        $3121                16?7                	;6468	>>6468	<<6467
6135 3066  NOP/0                     ?0        ?0                   ?0                  	;1
6136 3066  GOTO/253                  ?0        ?6176                ?4047               	;0
6137 3068  INIT_FCALL_BY_NAME/59     ?0        ?0                   4048:'in_array'     	;2
6138 3068  FETCH_DIM_FUNC_ARG/93     $3122=    16?7                 4050:'owner'        	;1
6139 3068  SEND_VAR_EX/66            ?80       $3122                ?1                  	;0
6140 3068  INIT_FCALL_BY_NAME/59     ?0        ?0                   4051:'array_merge'  	;2
6141 3068  FETCH_DIM_FUNC_ARG/93     $3123=    16?0                 4053:'direct_reports'	;1
6142 3068  SEND_VAR_EX/66            ?80       $3123                ?1                  	;0
6143 3068  FETCH_DIM_R/81            $3124=    16?5                 4054:'id'           	;0
6144 3068  INIT_ARRAY/71             #3125=    $3124                ?0                  	;4
6145 3068  SEND_VAL_EX/116           ?96       #3125                ?2                  	;0
6146 3068  DO_FCALL_BY_NAME/131      $3126=    ?0                   ?0                  	;0
6147 3068  SEND_VAR_NO_REF_EX/50     ?96       $3126                ?2                  	;0
6148 3068  DO_FCALL_BY_NAME/131      $3127=    ?0                   ?0                  	;0
6149 3068  JMPZ/43                   ?0        $3127                ?6152               	;0	>>6152
6150 3069  NOP/0                     ?0        ?0                   ?0                  	;1
6151 3069  GOTO/253                  ?0        ?6164                ?4055               	;0
6152 3071  INIT_FCALL_BY_NAME/59     ?0        ?0                   4056:'intval'       	;1	<<6149
6153 3071  FETCH_DIM_FUNC_ARG/93     $3128=    16?7                 4058:'owner'        	;1
6154 3071  SEND_VAR_EX/66            ?80       $3128                ?1                  	;0
6155 3071  DO_FCALL_BY_NAME/131      $3129=    ?0                   ?0                  	;0
6156 3071  CONCAT/8                  #3130=    4059:'<a href=\'user?id=' $3129               	;0
6157 3071  CONCAT/8                  #3131=    #3130                4060:'\'>'          	;0
6158 3071  FETCH_DIM_R/81            $3132=    16?7                 4061:'username'     	;0
6159 3071  CONCAT/8                  #3133=    #3131                $3132               	;0
6160 3071  CONCAT/8                  #3134=    #3133                4062:'<br/><small class=\'text-pink\'>(indirect)</small></a>'	;0
6161 3071  ASSIGN/38                 ?3053     16?53                #3134               	;0
6162 3072  NOP/0                     ?0        ?0                   ?0                  	;1
6163 3072  GOTO/253                  ?0        ?6345                ?4063               	;0
6164 3074  INIT_FCALL_BY_NAME/59     ?0        ?0                   4064:'intval'       	;1
6165 3074  FETCH_DIM_FUNC_ARG/93     $3136=    16?7                 4066:'owner'        	;1
6166 3074  SEND_VAR_EX/66            ?80       $3136                ?1                  	;0
6167 3074  DO_FCALL_BY_NAME/131      $3137=    ?0                   ?0                  	;0
6168 3074  CONCAT/8                  #3138=    4067:'<a href=\'user?id=' $3137               	;0
6169 3074  CONCAT/8                  #3139=    #3138                4068:'\'>'          	;0
6170 3074  FETCH_DIM_R/81            $3140=    16?7                 4069:'username'     	;0
6171 3074  CONCAT/8                  #3141=    #3139                $3140               	;0
6172 3074  CONCAT/8                  #3142=    #3141                4070:'</a>'         	;0
6173 3074  ASSIGN/38                 ?3061     16?53                #3142               	;0
6174 3075  NOP/0                     ?0        ?0                   ?0                  	;1
6175 3075  GOTO/253                  ?0        ?6345                ?4071               	;0
6176 3077  BOOL_NOT/13               #3144=    16?4                 ?0                  	;0
6177 3077  JMPZ/43                   ?0        #3144                ?6180               	;0	>>6180
6178 3078  NOP/0                     ?0        ?0                   ?0                  	;1
6179 3078  GOTO/253                  ?0        ?6195                ?4072               	;0
6180 3080  UNSET_DIM/75              ?0        16?7                 4073:'deleted_info' 	;0	<<6177
6181 3081  INIT_FCALL_BY_NAME/59     ?0        ?0                   4075:'filterRow'    	;3
6182 3081  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
6183 3081  FETCH_STATIC_PROP_FUNC_ARG/177 $3147=    4077:'rRequest'      4078:'XUI'          	;2
6184 3081  FETCH_DIM_FUNC_ARG/93     $3148=    $3147                4080:'show_columns' 	;2
6185 3081  SEND_VAR_EX/66            ?96       $3148                ?2                  	;0
6186 3081  FETCH_STATIC_PROP_FUNC_ARG/177 $3149=    4081:'rRequest'      4082:'XUI'          	;3
6187 3081  FETCH_DIM_FUNC_ARG/93     $3150=    $3149                4084:'hide_columns' 	;3
6188 3081  SEND_VAR_EX/66            ?112      $3150                ?3                  	;0
6189 3081  DO_FCALL_BY_NAME/131      $3151=    ?0                   ?0                  	;0
6190 3081  FETCH_DIM_W/84            $3145=    16?1                 4074:'data'         	;0
6191 3081  ASSIGN_DIM/147            ?3064     $3145                ?5                  	;0
6192 3081  OP_DATA/137               ?0        $3151                ?0                  	;0
6193 3082  NOP/0                     ?0        ?0                   ?0                  	;1
6194 3082  GOTO/253                  ?0        ?6224                ?4085               	;0
6195 3084  NOP/0                     ?0        ?0                   ?0                  	;1
6196 3084  GOTO/253                  ?0        ?6137                ?4086               	;0
6197 3089  FETCH_DIM_R/81            $3154=    16?7                 4088:'id'           	;0
6198 3089  INIT_ARRAY/71             #3155=    $3154                ?0                  	;28
6199 3089  ADD_ARRAY_ELEMENT/72      #3155=    16?53                ?0                  	;0
6200 3089  ADD_ARRAY_ELEMENT/72      #3155=    16?8                 ?0                  	;0
6201 3089  ADD_ARRAY_ELEMENT/72      #3155=    16?78                ?0                  	;0
6202 3089  INIT_FCALL_BY_NAME/59     ?0        ?0                   4089:'number_format'	;2
6203 3089  FETCH_DIM_FUNC_ARG/93     $3156=    16?7                 4091:'cost'         	;1
6204 3089  SEND_VAR_EX/66            ?80       $3156                ?1                  	;0
6205 3089  SEND_VAL_EX/116           ?96       4092:0               ?2                  	;0
6206 3089  DO_FCALL_BY_NAME/131      $3157=    ?0                   ?0                  	;0
6207 3089  ADD_ARRAY_ELEMENT/72      #3155=    $3157                ?0                  	;0
6208 3089  INIT_FCALL_BY_NAME/59     ?0        ?0                   4093:'number_format'	;2
6209 3089  FETCH_DIM_FUNC_ARG/93     $3158=    16?7                 4095:'credits_after'	;1
6210 3089  SEND_VAR_EX/66            ?80       $3158                ?1                  	;0
6211 3089  SEND_VAL_EX/116           ?96       4096:0               ?2                  	;0
6212 3089  DO_FCALL_BY_NAME/131      $3159=    ?0                   ?0                  	;0
6213 3089  ADD_ARRAY_ELEMENT/72      #3155=    $3159                ?0                  	;0
6214 3089  INIT_FCALL_BY_NAME/59     ?0        ?0                   4097:'date'         	;2
6215 3089  FETCH_DIM_FUNC_ARG/93     $3160=    16?27                4099:'datetime_format'	;1
6216 3089  SEND_VAR_EX/66            ?80       $3160                ?1                  	;0
6217 3089  FETCH_DIM_FUNC_ARG/93     $3161=    16?7                 4100:'date'         	;2
6218 3089  SEND_VAR_EX/66            ?96       $3161                ?2                  	;0
6219 3089  DO_FCALL_BY_NAME/131      $3162=    ?0                   ?0                  	;0
6220 3089  ADD_ARRAY_ELEMENT/72      #3155=    $3162                ?0                  	;0
6221 3089  FETCH_DIM_W/84            $3152=    16?1                 4087:'data'         	;0
6222 3089  ASSIGN_DIM/147            ?3071     $3152                ?0                  	;0
6223 3089  OP_DATA/137               ?0        #3155                ?0                  	;0
6224 3091  NOP/0                     ?0        ?0                   ?0                  	;1
6225 3091  GOTO/253                  ?0        ?6467                ?4101               	;0
6226 3093  INIT_FCALL_BY_NAME/59     ?0        ?0                   4102:'json_decode'  	;2
6227 3093  FETCH_DIM_FUNC_ARG/93     $3163=    16?7                 4104:'deleted_info' 	;1
6228 3093  SEND_VAR_EX/66            ?80       $3163                ?1                  	;0
6229 3093  SEND_VAL_EX/116           ?96       4105:true            ?2                  	;0
6230 3093  DO_FCALL_BY_NAME/131      $3164=    ?0                   ?0                  	;0
6231 3093  ASSIGN/38                 ?3083     16?79                $3164               	;0
6232 3094  INIT_FCALL_BY_NAME/59     ?0        ?0                   4106:'is_array'     	;1
6233 3094  SEND_VAR_EX/66            ?80       16?79                ?1                  	;0
6234 3094  DO_FCALL_BY_NAME/131      $3166=    ?0                   ?0                  	;0
6235 3094  JMPZ/43                   ?0        $3166                ?6238               	;0	>>6238
6236 3095  NOP/0                     ?0        ?0                   ?0                  	;1
6237 3095  GOTO/253                  ?0        ?6241                ?4108               	;0
6238 3097  ASSIGN/38                 ?3085     16?8                 4109:'<span class=\'text-secondary\'>DELETED</span>'	;0	<<6235
6239 3098  NOP/0                     ?0        ?0                   ?0                  	;1
6240 3098  GOTO/253                  ?0        ?6197                ?4110               	;0
6241 3100  NOP/0                     ?0        ?0                   ?0                  	;1
6242 3100  GOTO/253                  ?0        ?6451                ?4111               	;0
6243 3102  ASSIGN/38                 ?3086     16?8                 4112:NULL           	;0
6244 3103  FETCH_DIM_R/81            $3169=    16?7                 4113:'type'         	;0
6245 3103  SWITCH_STRING/188         ?0        $3169                4114:array (
  'line' => 6255,
  'user' => 6276,
  'mag' => 6297,
  'enigma' => 6318,
)	;6339
6246 3104  CASE/48                   #3170=    $3169                4115:'line'         	;0	>>6248
6247 3104  JMPNZ/44                  ?0        #3170                ?6255               	;0	>>6255
6248 3112  CASE/48                   #3170=    $3169                4116:'user'         	;0	>>6250	<<6246
6249 3112  JMPNZ/44                  ?0        #3170                ?6276               	;0	>>6276
6250 3120  CASE/48                   #3170=    $3169                4117:'mag'          	;0	>>6252	<<6248
6251 3120  JMPNZ/44                  ?0        #3170                ?6297               	;0	>>6297
6252 3128  CASE/48                   #3170=    $3169                4118:'enigma'       	;0	>>6254	<<6250
6253 3128  JMPNZ/44                  ?0        #3170                ?6318               	;0	>>6318
6254 3128  JMP/42                    ?0        ?6339                ?0                  	;0	>>6339	<<6252
6255 3105  INIT_FCALL_BY_NAME/59     ?0        ?0                   4119:'b5ad1d95A92Ce732'	;1	<<6247
6256 3105  FETCH_DIM_FUNC_ARG/93     $3171=    16?7                 4121:'log_id'       	;1
6257 3105  SEND_VAR_EX/66            ?80       $3171                ?1                  	;0
6258 3105  DO_FCALL_BY_NAME/131      $3172=    ?0                   ?0                  	;0
6259 3105  ASSIGN/38                 ?3091     16?80                $3172               	;0
6260 3106  BOOL_NOT/13               #3174=    16?80                ?0                  	;0
6261 3106  JMPZ/43                   ?0        #3174                ?6265               	;0	>>6265
6262 3107  NOP/0                     ?0        ?0                   ?0                  	;1
6263 3107  NOP/0                     ?0        ?0                   ?0                  	;1
6264 3107  GOTO/253                  ?0        ?6273                ?4122               	;0
6265 3109  FETCH_DIM_R/81            $3175=    16?7                 4123:'log_id'       	;0	<<6261
6266 3109  ROPE_INIT/54              #3178=    ?0                   4124:'<a href=\'line?id='	;5
6267 3109  ROPE_ADD/55               #3178=    #3178                $3175               	;1
6268 3109  FETCH_DIM_R/81            $3176=    16?80                4125:'username'     	;0
6269 3109  ROPE_ADD/55               #3178=    #3178                4126:'\'>'          	;2
6270 3109  ROPE_ADD/55               #3178=    #3178                $3176               	;3
6271 3109  ROPE_END/56               #3177=    #3178                4127:'</a>'         	;4
6272 3109  ASSIGN/38                 ?3099     16?8                 #3177               	;0
6273 3111  FREE/70                   ?0        $3169                ?196                	;1
6274 3111  NOP/0                     ?0        ?0                   ?0                  	;1
6275 3111  GOTO/253                  ?0        ?6340                ?4128               	;0
6276 3113  INIT_FCALL_BY_NAME/59     ?0        ?0                   4129:'ba89228Dc958cE05'	;1	<<6249
6277 3113  FETCH_DIM_FUNC_ARG/93     $3182=    16?7                 4131:'log_id'       	;1
6278 3113  SEND_VAR_EX/66            ?80       $3182                ?1                  	;0
6279 3113  DO_FCALL_BY_NAME/131      $3183=    ?0                   ?0                  	;0
6280 3113  ASSIGN/38                 ?3102     16?80                $3183               	;0
6281 3114  BOOL_NOT/13               #3185=    16?80                ?0                  	;0
6282 3114  JMPZ/43                   ?0        #3185                ?6286               	;0	>>6286
6283 3115  NOP/0                     ?0        ?0                   ?0                  	;1
6284 3115  NOP/0                     ?0        ?0                   ?0                  	;1
6285 3115  GOTO/253                  ?0        ?6294                ?4132               	;0
6286 3117  FETCH_DIM_R/81            $3186=    16?7                 4133:'log_id'       	;0	<<6282
6287 3117  ROPE_INIT/54              #3189=    ?0                   4134:'<a href=\'user?id='	;5
6288 3117  ROPE_ADD/55               #3189=    #3189                $3186               	;1
6289 3117  FETCH_DIM_R/81            $3187=    16?80                4135:'username'     	;0
6290 3117  ROPE_ADD/55               #3189=    #3189                4136:'\'>'          	;2
6291 3117  ROPE_ADD/55               #3189=    #3189                $3187               	;3
6292 3117  ROPE_END/56               #3188=    #3189                4137:'</a>'         	;4
6293 3117  ASSIGN/38                 ?3110     16?8                 #3188               	;0
6294 3119  FREE/70                   ?0        $3169                ?196                	;1
6295 3119  NOP/0                     ?0        ?0                   ?0                  	;1
6296 3119  GOTO/253                  ?0        ?6340                ?4138               	;0
6297 3121  INIT_FCALL_BY_NAME/59     ?0        ?0                   4139:'a32D85aEfA28959D'	;1	<<6251
6298 3121  FETCH_DIM_FUNC_ARG/93     $3193=    16?7                 4141:'log_id'       	;1
6299 3121  SEND_VAR_EX/66            ?80       $3193                ?1                  	;0
6300 3121  DO_FCALL_BY_NAME/131      $3194=    ?0                   ?0                  	;0
6301 3121  ASSIGN/38                 ?3113     16?80                $3194               	;0
6302 3122  BOOL_NOT/13               #3196=    16?80                ?0                  	;0
6303 3122  JMPZ/43                   ?0        #3196                ?6307               	;0	>>6307
6304 3123  NOP/0                     ?0        ?0                   ?0                  	;1
6305 3123  NOP/0                     ?0        ?0                   ?0                  	;1
6306 3123  GOTO/253                  ?0        ?6315                ?4142               	;0
6307 3125  FETCH_DIM_R/81            $3197=    16?7                 4143:'log_id'       	;0	<<6303
6308 3125  ROPE_INIT/54              #3200=    ?0                   4144:'<a href=\'mag?id='	;5
6309 3125  ROPE_ADD/55               #3200=    #3200                $3197               	;1
6310 3125  FETCH_DIM_R/81            $3198=    16?80                4145:'mac'          	;0
6311 3125  ROPE_ADD/55               #3200=    #3200                4146:'\'>'          	;2
6312 3125  ROPE_ADD/55               #3200=    #3200                $3198               	;3
6313 3125  ROPE_END/56               #3199=    #3200                4147:'</a>'         	;4
6314 3125  ASSIGN/38                 ?3121     16?8                 #3199               	;0
6315 3127  FREE/70                   ?0        $3169                ?196                	;1
6316 3127  NOP/0                     ?0        ?0                   ?0                  	;1
6317 3127  GOTO/253                  ?0        ?6340                ?4148               	;0
6318 3129  INIT_FCALL_BY_NAME/59     ?0        ?0                   4149:'Ef70A93E98FB7Ce9'	;1	<<6253
6319 3129  FETCH_DIM_FUNC_ARG/93     $3204=    16?7                 4151:'log_id'       	;1
6320 3129  SEND_VAR_EX/66            ?80       $3204                ?1                  	;0
6321 3129  DO_FCALL_BY_NAME/131      $3205=    ?0                   ?0                  	;0
6322 3129  ASSIGN/38                 ?3124     16?80                $3205               	;0
6323 3130  BOOL_NOT/13               #3207=    16?80                ?0                  	;0
6324 3130  JMPZ/43                   ?0        #3207                ?6328               	;0	>>6328
6325 3131  NOP/0                     ?0        ?0                   ?0                  	;1
6326 3131  NOP/0                     ?0        ?0                   ?0                  	;1
6327 3131  GOTO/253                  ?0        ?6336                ?4152               	;0
6328 3133  FETCH_DIM_R/81            $3208=    16?7                 4153:'log_id'       	;0	<<6324
6329 3133  ROPE_INIT/54              #3211=    ?0                   4154:'<a href=\'enigma?id='	;5
6330 3133  ROPE_ADD/55               #3211=    #3211                $3208               	;1
6331 3133  FETCH_DIM_R/81            $3209=    16?80                4155:'mac'          	;0
6332 3133  ROPE_ADD/55               #3211=    #3211                4156:'\'>'          	;2
6333 3133  ROPE_ADD/55               #3211=    #3211                $3209               	;3
6334 3133  ROPE_END/56               #3210=    #3211                4157:'</a>'         	;4
6335 3133  ASSIGN/38                 ?3132     16?8                 #3210               	;0
6336 3135  FREE/70                   ?0        $3169                ?196                	;1
6337 3135  NOP/0                     ?0        ?0                   ?0                  	;1
6338 3135  GOTO/253                  ?0        ?6340                ?4158               	;0
6339 3135  FREE/70                   ?0        $3169                ?0                  	;0	<<6254
6340 3139  JMPZ/43                   ?0        16?8                 ?6343               	;0	>>6343
6341 3140  NOP/0                     ?0        ?0                   ?0                  	;1
6342 3140  GOTO/253                  ?0        ?6197                ?4159               	;0
6343 3142  NOP/0                     ?0        ?0                   ?0                  	;1	<<6340
6344 3142  GOTO/253                  ?0        ?6226                ?4160               	;0
6345 3145  FETCH_DIM_R/81            $3215=    16?7                 4161:'type'         	;0
6346 3145  FETCH_DIM_R/81            $3216=    4162:array (
  'line' => 'User Line',
  'mag' => 'MAG Device',
  'enigma' => 'Enigma2 Device',
  'user' => 'Reseller',
) $3215               	;0
6347 3145  ASSIGN/38                 ?3135     16?81                $3216               	;0
6348 3146  FETCH_DIM_R/81            $3218=    16?7                 4163:'action'       	;0
6349 3146  SWITCH_STRING/188         ?0        $3218                4164:array (
  'new' => 6367,
  'extend' => 6389,
  'edit' => 6411,
  'enable' => 6417,
  'disable' => 6423,
  'delete' => 6429,
  'send_event' => 6435,
  'adjust_credits' => 6441,
)	;6448
6350 3147  CASE/48                   #3219=    $3218                4165:'new'          	;0	>>6352
6351 3147  JMPNZ/44                  ?0        #3219                ?6367               	;0	>>6367
6352 3157  CASE/48                   #3219=    $3218                4166:'extend'       	;0	>>6354	<<6350
6353 3157  JMPNZ/44                  ?0        #3219                ?6389               	;0	>>6389
6354 3167  CASE/48                   #3219=    $3218                4167:'edit'         	;0	>>6356	<<6352
6355 3167  JMPNZ/44                  ?0        #3219                ?6411               	;0	>>6411
6356 3170  CASE/48                   #3219=    $3218                4168:'enable'       	;0	>>6358	<<6354
6357 3170  JMPNZ/44                  ?0        #3219                ?6417               	;0	>>6417
6358 3173  CASE/48                   #3219=    $3218                4169:'disable'      	;0	>>6360	<<6356
6359 3173  JMPNZ/44                  ?0        #3219                ?6423               	;0	>>6423
6360 3176  CASE/48                   #3219=    $3218                4170:'delete'       	;0	>>6362	<<6358
6361 3176  JMPNZ/44                  ?0        #3219                ?6429               	;0	>>6429
6362 3179  CASE/48                   #3219=    $3218                4171:'send_event'   	;0	>>6364	<<6360
6363 3179  JMPNZ/44                  ?0        #3219                ?6435               	;0	>>6435
6364 3182  CASE/48                   #3219=    $3218                4172:'adjust_credits'	;0	>>6366	<<6362
6365 3182  JMPNZ/44                  ?0        #3219                ?6441               	;0	>>6441
6366 3182  JMP/42                    ?0        ?6448                ?0                  	;0	>>6448	<<6364
6367 3148  FETCH_DIM_R/81            $3220=    16?7                 4173:'package_id'   	;0	<<6351
6368 3148  JMPZ/43                   ?0        $3220                ?6372               	;0	>>6372
6369 3149  NOP/0                     ?0        ?0                   ?0                  	;1
6370 3149  NOP/0                     ?0        ?0                   ?0                  	;1
6371 3149  GOTO/253                  ?0        ?6378                ?4174               	;0
6372 3151  NOP/0                     ?0        ?0                   ?0                  	;0	<<6368
6373 3151  FAST_CONCAT/53            #3221=    4175:'Created New '  16?81               	;0
6374 3151  ASSIGN/38                 ?3140     16?78                #3221               	;0
6375 3152  NOP/0                     ?0        ?0                   ?0                  	;1
6376 3152  NOP/0                     ?0        ?0                   ?0                  	;1
6377 3152  GOTO/253                  ?0        ?6386                ?4176               	;0
6378 3154  ROPE_INIT/54              #3227=    ?0                   4177:'Created New ' 	;4
6379 3154  ROPE_ADD/55               #3227=    #3227                16?81               	;1
6380 3154  FETCH_DIM_R/81            $3223=    16?7                 4178:'package_id'   	;0
6381 3154  FETCH_DIM_R/81            $3224=    16?75                $3223               	;0
6382 3154  FETCH_DIM_R/81            $3225=    $3224                4179:'package_name' 	;0
6383 3154  ROPE_ADD/55               #3227=    #3227                4180:' with Package: '	;2
6384 3154  ROPE_END/56               #3226=    #3227                $3225               	;3
6385 3154  ASSIGN/38                 ?3147     16?78                #3226               	;0
6386 3156  FREE/70                   ?0        $3218                ?201                	;1
6387 3156  NOP/0                     ?0        ?0                   ?0                  	;1
6388 3156  GOTO/253                  ?0        ?6449                ?4181               	;0
6389 3158  FETCH_DIM_R/81            $3230=    16?7                 4182:'package_id'   	;0	<<6353
6390 3158  JMPZ/43                   ?0        $3230                ?6394               	;0	>>6394
6391 3159  NOP/0                     ?0        ?0                   ?0                  	;1
6392 3159  NOP/0                     ?0        ?0                   ?0                  	;1
6393 3159  GOTO/253                  ?0        ?6400                ?4183               	;0
6394 3161  NOP/0                     ?0        ?0                   ?0                  	;0	<<6390
6395 3161  FAST_CONCAT/53            #3231=    4184:'Extended '     16?81               	;0
6396 3161  ASSIGN/38                 ?3150     16?78                #3231               	;0
6397 3162  NOP/0                     ?0        ?0                   ?0                  	;1
6398 3162  NOP/0                     ?0        ?0                   ?0                  	;1
6399 3162  GOTO/253                  ?0        ?6408                ?4185               	;0
6400 3164  ROPE_INIT/54              #3237=    ?0                   4186:'Extended '    	;4
6401 3164  ROPE_ADD/55               #3237=    #3237                16?81               	;1
6402 3164  FETCH_DIM_R/81            $3233=    16?7                 4187:'package_id'   	;0
6403 3164  FETCH_DIM_R/81            $3234=    16?75                $3233               	;0
6404 3164  FETCH_DIM_R/81            $3235=    $3234                4188:'package_name' 	;0
6405 3164  ROPE_ADD/55               #3237=    #3237                4189:' with Package: '	;2
6406 3164  ROPE_END/56               #3236=    #3237                $3235               	;3
6407 3164  ASSIGN/38                 ?3157     16?78                #3236               	;0
6408 3166  FREE/70                   ?0        $3218                ?201                	;1
6409 3166  NOP/0                     ?0        ?0                   ?0                  	;1
6410 3166  GOTO/253                  ?0        ?6449                ?4190               	;0
6411 3168  NOP/0                     ?0        ?0                   ?0                  	;0	<<6355
6412 3168  FAST_CONCAT/53            #3240=    4191:'Edited '       16?81               	;0
6413 3168  ASSIGN/38                 ?3159     16?78                #3240               	;0
6414 3169  FREE/70                   ?0        $3218                ?201                	;1
6415 3169  NOP/0                     ?0        ?0                   ?0                  	;1
6416 3169  GOTO/253                  ?0        ?6449                ?4192               	;0
6417 3171  NOP/0                     ?0        ?0                   ?0                  	;0	<<6357
6418 3171  FAST_CONCAT/53            #3242=    4193:'Enabled '      16?81               	;0
6419 3171  ASSIGN/38                 ?3161     16?78                #3242               	;0
6420 3172  FREE/70                   ?0        $3218                ?201                	;1
6421 3172  NOP/0                     ?0        ?0                   ?0                  	;1
6422 3172  GOTO/253                  ?0        ?6449                ?4194               	;0
6423 3174  NOP/0                     ?0        ?0                   ?0                  	;0	<<6359
6424 3174  FAST_CONCAT/53            #3244=    4195:'Disabled '     16?81               	;0
6425 3174  ASSIGN/38                 ?3163     16?78                #3244               	;0
6426 3175  FREE/70                   ?0        $3218                ?201                	;1
6427 3175  NOP/0                     ?0        ?0                   ?0                  	;1
6428 3175  GOTO/253                  ?0        ?6449                ?4196               	;0
6429 3177  NOP/0                     ?0        ?0                   ?0                  	;0	<<6361
6430 3177  FAST_CONCAT/53            #3246=    4197:'Deleted '      16?81               	;0
6431 3177  ASSIGN/38                 ?3165     16?78                #3246               	;0
6432 3178  FREE/70                   ?0        $3218                ?201                	;1
6433 3178  NOP/0                     ?0        ?0                   ?0                  	;1
6434 3178  GOTO/253                  ?0        ?6449                ?4198               	;0
6435 3180  NOP/0                     ?0        ?0                   ?0                  	;0	<<6363
6436 3180  FAST_CONCAT/53            #3248=    4199:'Sent Event to ' 16?81               	;0
6437 3180  ASSIGN/38                 ?3167     16?78                #3248               	;0
6438 3181  FREE/70                   ?0        $3218                ?201                	;1
6439 3181  NOP/0                     ?0        ?0                   ?0                  	;1
6440 3181  GOTO/253                  ?0        ?6449                ?4200               	;0
6441 3183  FETCH_DIM_R/81            $3250=    16?7                 4201:'cost'         	;0	<<6365
6442 3183  NOP/0                     ?0        ?0                   ?0                  	;0
6443 3183  FAST_CONCAT/53            #3251=    4202:'Adjusted Credits by ' $3250               	;0
6444 3183  ASSIGN/38                 ?3170     16?78                #3251               	;0
6445 3184  FREE/70                   ?0        $3218                ?201                	;1
6446 3184  NOP/0                     ?0        ?0                   ?0                  	;1
6447 3184  GOTO/253                  ?0        ?6449                ?4203               	;0
6448 3184  FREE/70                   ?0        $3218                ?0                  	;0	<<6366
6449 3188  NOP/0                     ?0        ?0                   ?0                  	;1
6450 3188  GOTO/253                  ?0        ?6243                ?4204               	;0
6451 3190  ISSET_ISEMPTY_DIM_OBJ/115 #3253=    16?79                4205:'mac'          	;33554432
6452 3190  JMPZ/43                   ?0        #3253                ?6455               	;0	>>6455
6453 3191  NOP/0                     ?0        ?0                   ?0                  	;1
6454 3191  GOTO/253                  ?0        ?6461                ?4206               	;0
6455 3193  FETCH_DIM_R/81            $3254=    16?79                4207:'username'     	;0	<<6452
6456 3193  CONCAT/8                  #3255=    4208:'<span class=\'text-secondary\'>' $3254               	;0
6457 3193  CONCAT/8                  #3256=    #3255                4209:'</span>'      	;0
6458 3193  ASSIGN/38                 ?3175     16?8                 #3256               	;0
6459 3194  NOP/0                     ?0        ?0                   ?0                  	;1
6460 3194  GOTO/253                  ?0        ?6197                ?4210               	;0
6461 3196  FETCH_DIM_R/81            $3258=    16?79                4211:'mac'          	;0
6462 3196  CONCAT/8                  #3259=    4212:'<span class=\'text-secondary\'>' $3258               	;0
6463 3196  CONCAT/8                  #3260=    #3259                4213:'</span>'      	;0
6464 3196  ASSIGN/38                 ?3179     16?8                 #3260               	;0
6465 3197  NOP/0                     ?0        ?0                   ?0                  	;1
6466 3197  GOTO/253                  ?0        ?6197                ?4214               	;0
6467 3198  JMP/42                    ?0        ?6134                ?0                  	;0	>>6134
6468 3198  FE_FREE/127               ?0        $3121                ?0                  	;0	<<6133
6469 3201  GOTO/253                  ?0        ?2607                ?4215               	;0
6470 3203  INIT_METHOD_CALL/112      ?0        16?3                 4217:'get_row'      	;0
6471 3203  DO_FCALL/60               $3263=    ?0                   ?0                  	;0
6472 3203  FETCH_DIM_R/81            $3264=    $3263                4219:'count'        	;0
6473 3203  ASSIGN_DIM/147            ?3180     16?1                 4216:'recordsTotal' 	;0
6474 3203  OP_DATA/137               ?0        $3264                ?0                  	;0
6475 3205  FETCH_DIM_R/81            $3266=    16?1                 4221:'recordsTotal' 	;0
6476 3205  ASSIGN_DIM/147            ?3183     16?1                 4220:'recordsFiltered'	;0
6477 3205  OP_DATA/137               ?0        $3266                ?0                  	;0
6478 3206  FETCH_DIM_R/81            $3267=    16?1                 4222:'recordsTotal' 	;0
6479 3206  IS_SMALLER/19             #3268=    4223:0               $3267               	;0
6480 3206  BOOL_NOT/13               #3269=    #3268                ?0                  	;0
6481 3206  JMPZ/43                   ?0        #3269                ?6483               	;0	>>6483
6482 3207  GOTO/253                  ?0        ?124                 ?4224               	;0
6483 3209  ROPE_INIT/54              #3271=    ?0                   4225:'SELECT `lines`.`id`, `lines`.`member_id`, `lines`.`last_activity`, `lines`.`last_activity_array`, `lines`.`username`, `lines`.`password`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`is_restreamer`, `lines`.`enabled`, `lines`.`admin_notes`, `lines`.`reseller_notes`, `lines`.`max_connections`, `lines`.`is_trial`, (SELECT COUNT(*) AS `active_connections` FROM `lines_live` WHERE `user_id` = `lines`.`id` AND `hls_end` = 0) AS `active_connections` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` '	;9	<<6481
6484 3209  ROPE_ADD/55               #3271=    #3271                16?31               	;1
6485 3209  ROPE_ADD/55               #3271=    #3271                4226:' '            	;2
6486 3209  ROPE_ADD/55               #3271=    #3271                16?30               	;3
6487 3209  ROPE_ADD/55               #3271=    #3271                4227:' LIMIT '      	;4
6488 3209  ROPE_ADD/55               #3271=    #3271                16?26               	;5
6489 3209  ROPE_ADD/55               #3271=    #3271                4228:', '           	;6
6490 3209  ROPE_ADD/55               #3271=    #3271                16?33               	;7
6491 3209  ROPE_END/56               #3270=    #3271                4229:';'            	;8
6492 3209  ASSIGN/38                 ?3194     16?32                #3270               	;0
6493 3210  GOTO/253                  ?0        ?2267                ?4230               	;0
6494 3212  FETCH_DIM_R/81            $3278=    16?1                 4232:'recordsTotal' 	;0
6495 3212  ASSIGN_DIM/147            ?3195     16?1                 4231:'recordsFiltered'	;0
6496 3212  OP_DATA/137               ?0        $3278                ?0                  	;0
6497 3213  FETCH_DIM_R/81            $3279=    16?1                 4233:'recordsTotal' 	;0
6498 3213  IS_SMALLER/19             #3280=    4234:0               $3279               	;0
6499 3213  BOOL_NOT/13               #3281=    #3280                ?0                  	;0
6500 3213  JMPZ/43                   ?0        #3281                ?6502               	;0	>>6502
6501 3214  GOTO/253                  ?0        ?2575                ?4235               	;0
6502 3216  INIT_FCALL_BY_NAME/59     ?0        ?0                   4236:'implode'      	;2	<<6500
6503 3216  SEND_VAL_EX/116           ?80       4238:','             ?1                  	;0
6504 3216  FETCH_DIM_FUNC_ARG/93     $3282=    16?5                 4239:'reports'      	;2
6505 3216  SEND_VAR_EX/66            ?96       $3282                ?2                  	;0
6506 3216  DO_FCALL_BY_NAME/131      $3283=    ?0                   ?0                  	;0
6507 3216  CONCAT/8                  #3284=    4240:'SELECT `id`, `stream_icon`, `stream_display_name`, `tv_archive_duration`, `tv_archive_server_id`, `category_id`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' $3283               	;0
6508 3216  ROPE_INIT/54              #3286=    ?0                   4241:')) AS `clients` FROM `streams` '	;9
6509 3216  ROPE_ADD/55               #3286=    #3286                16?31               	;1
6510 3216  ROPE_ADD/55               #3286=    #3286                4242:' '            	;2
6511 3216  ROPE_ADD/55               #3286=    #3286                16?30               	;3
6512 3216  ROPE_ADD/55               #3286=    #3286                4243:' LIMIT '      	;4
6513 3216  ROPE_ADD/55               #3286=    #3286                16?26               	;5
6514 3216  ROPE_ADD/55               #3286=    #3286                4244:', '           	;6
6515 3216  ROPE_ADD/55               #3286=    #3286                16?33               	;7
6516 3216  ROPE_END/56               #3285=    #3286                4245:';'            	;8
6517 3216  CONCAT/8                  #3291=    #3284                #3285               	;0
6518 3216  ASSIGN/38                 ?3210     16?32                #3291               	;0
6519 3217  INIT_METHOD_CALL/112      ?0        16?3                 4246:'query'        	;1
6520 3217  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
6521 3217  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
6522 3217  DO_FCALL/60               ?3211     ?0                   ?0                  	;0
6523 3218  INIT_METHOD_CALL/112      ?0        16?3                 4248:'num_rows'     	;0
6524 3218  DO_FCALL/60               $3294=    ?0                   ?0                  	;0
6525 3218  IS_SMALLER/19             #3295=    4250:0               $3294               	;0
6526 3218  BOOL_NOT/13               #3296=    #3295                ?0                  	;0
6527 3218  JMPZ/43                   ?0        #3296                ?6529               	;0	>>6529
6528 3219  GOTO/253                  ?0        ?2575                ?4251               	;0
6529 3221  GOTO/253                  ?0        ?1902                ?4252               	;0	<<6527
6530 3223  ASSIGN/38                 ?3215     16?14                4253:0              	;0
6531 3224  GOTO/253                  ?0        ?6540                ?4254               	;0
6532 3226  INIT_FCALL_BY_NAME/59     ?0        ?0                   4255:'intval'       	;1
6533 3226  FETCH_STATIC_PROP_FUNC_ARG/177 $3298=    4257:'rRequest'      4258:'XUI'          	;1
6534 3226  FETCH_DIM_FUNC_ARG/93     $3299=    $3298                4260:'order'        	;1
6535 3226  FETCH_DIM_FUNC_ARG/93     $3300=    $3299                4261:0              	;1
6536 3226  FETCH_DIM_FUNC_ARG/93     $3301=    $3300                4262:'column'       	;1
6537 3226  SEND_VAR_EX/66            ?80       $3301                ?1                  	;0
6538 3226  DO_FCALL_BY_NAME/131      $3302=    ?0                   ?0                  	;0
6539 3226  ASSIGN/38                 ?3221     16?14                $3302               	;0
6540 3228  GOTO/253                  ?0        ?5205                ?4263               	;0
6541 3231  INIT_FCALL_BY_NAME/59     ?0        ?0                   4264:'intval'       	;1
6542 3231  FETCH_STATIC_PROP_FUNC_ARG/177 $3304=    4266:'rRequest'      4267:'XUI'          	;1
6543 3231  FETCH_DIM_FUNC_ARG/93     $3305=    $3304                4269:'order'        	;1
6544 3231  FETCH_DIM_FUNC_ARG/93     $3306=    $3305                4270:0              	;1
6545 3231  FETCH_DIM_FUNC_ARG/93     $3307=    $3306                4271:'column'       	;1
6546 3231  SEND_VAR_EX/66            ?80       $3307                ?1                  	;0
6547 3231  DO_FCALL_BY_NAME/131      $3308=    ?0                   ?0                  	;0
6548 3231  ASSIGN/38                 ?3227     16?14                $3308               	;0
6549 3233  ASSIGN/38                 $3310=    16?10                4272:array (
)      	;0
6550 3233  ASSIGN/38                 ?3229     16?11                $3310               	;0
6551 3234  INIT_FCALL_BY_NAME/59     ?0        ?0                   4273:'implode'      	;2
6552 3234  SEND_VAL_EX/116           ?80       4275:','             ?1                  	;0
6553 3234  FETCH_DIM_FUNC_ARG/93     $3313=    16?5                 4276:'reports'      	;2
6554 3234  SEND_VAR_EX/66            ?96       $3313                ?2                  	;0
6555 3234  DO_FCALL_BY_NAME/131      $3314=    ?0                   ?0                  	;0
6556 3234  CONCAT/8                  #3315=    4277:'`users`.`owner_id` IN (' $3314               	;0
6557 3234  CONCAT/8                  #3316=    #3315                4278:')'            	;0
6558 3234  ASSIGN_DIM/147            ?3230     16?11                ?2670195408         	;0
6559 3234  OP_DATA/137               ?0        #3316                ?0                  	;0
6560 3235  GOTO/253                  ?0        ?74                  ?4279               	;0
6561 3237  FETCH_DIM_R/81            $3317=    16?13                16?14               	;0
6562 3237  CONCAT/8                  #3318=    4280:'ORDER BY '     $3317               	;0
6563 3237  CONCAT/8                  #3319=    #3318                4281:' '            	;0
6564 3237  CONCAT/8                  #3320=    #3319                16?29               	;0
6565 3237  ASSIGN/38                 ?3239     16?30                #3320               	;0
6566 3239  ROPE_INIT/54              #3323=    ?0                   4282:'SELECT COUNT(`lines`.`id`) AS `count` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` '	;3
6567 3239  ROPE_ADD/55               #3323=    #3323                16?31               	;1
6568 3239  ROPE_END/56               #3322=    #3323                4283:';'            	;2
6569 3239  ASSIGN/38                 ?3243     16?15                #3322               	;0
6570 3240  INIT_METHOD_CALL/112      ?0        16?3                 4284:'query'        	;1
6571 3240  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
6572 3240  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
6573 3240  DO_FCALL/60               ?3244     ?0                   ?0                  	;0
6574 3241  INIT_METHOD_CALL/112      ?0        16?3                 4286:'num_rows'     	;0
6575 3241  DO_FCALL/60               $3327=    ?0                   ?0                  	;0
6576 3241  IS_EQUAL/17               #3328=    $3327                4288:1              	;0
6577 3241  JMPZ/43                   ?0        #3328                ?6579               	;0	>>6579
6578 3242  GOTO/253                  ?0        ?1430                ?4289               	;0
6579 3244  GOTO/253                  ?0        ?1427                ?4290               	;0	<<6577
6580 3246  FETCH_DIM_R/81            $3329=    16?13                16?14               	;0
6581 3246  BOOL_NOT/13               #3330=    $3329                ?0                  	;0
6582 3246  JMPZ/43                   ?0        #3330                ?6584               	;0	>>6584
6583 3247  GOTO/253                  ?0        ?6602                ?4291               	;0
6584 3249  INIT_FCALL_BY_NAME/59     ?0        ?0                   4292:'strtolower'   	;1	<<6582
6585 3249  FETCH_STATIC_PROP_FUNC_ARG/177 $3331=    4294:'rRequest'      4295:'XUI'          	;1
6586 3249  FETCH_DIM_FUNC_ARG/93     $3332=    $3331                4297:'order'        	;1
6587 3249  FETCH_DIM_FUNC_ARG/93     $3333=    $3332                4298:0              	;1
6588 3249  FETCH_DIM_FUNC_ARG/93     $3334=    $3333                4299:'dir'          	;1
6589 3249  SEND_VAR_EX/66            ?80       $3334                ?1                  	;0
6590 3249  DO_FCALL_BY_NAME/131      $3335=    ?0                   ?0                  	;0
6591 3249  IS_IDENTICAL/15           #3336=    $3335                4300:'desc'         	;0
6592 3249  JMPZ/43                   ?0        #3336                ?6595               	;0	>>6595
6593 3249  QM_ASSIGN/22              #3337=    4301:'desc'          ?0                  	;0
6594 3249  JMP/42                    ?0        ?6596                ?0                  	;0	>>6596
6595 3249  QM_ASSIGN/22              #3337=    4302:'asc'           ?0                  	;0	<<6592
6596 3249  ASSIGN/38                 ?3256     16?29                #3337               	;0	<<6594
6597 3250  FETCH_DIM_R/81            $3339=    16?13                16?14               	;0
6598 3250  CONCAT/8                  #3340=    4303:'ORDER BY '     $3339               	;0
6599 3250  CONCAT/8                  #3341=    #3340                4304:' '            	;0
6600 3250  CONCAT/8                  #3342=    #3341                16?29               	;0
6601 3250  ASSIGN/38                 ?3261     16?30                #3342               	;0
6602 3252  ROPE_INIT/54              #3345=    ?0                   4305:'SELECT COUNT(*) AS `count` FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` '	;3
6603 3252  ROPE_ADD/55               #3345=    #3345                16?31               	;1
6604 3252  ROPE_END/56               #3344=    #3345                4306:';'            	;2
6605 3252  ASSIGN/38                 ?3265     16?15                #3344               	;0
6606 3253  GOTO/253                  ?0        ?6631                ?4307               	;0
6607 3256  NOP/0                     ?0        ?0                   ?0                  	;0
6608 3298  FETCH_STATIC_PROP_R/173   $3348=    4308:'rRequest'      4309:'XUI'          	;0
6609 3298  FETCH_DIM_R/81            $3349=    $3348                4311:'id'           	;0
6610 3298  ASSIGN/38                 ?3268     16?46                $3349               	;0
6611 3299  INIT_FCALL_BY_NAME/59     ?0        ?0                   4312:'intval'       	;1
6612 3299  FETCH_STATIC_PROP_FUNC_ARG/177 $3351=    4314:'rRequest'      4315:'XUI'          	;1
6613 3299  FETCH_DIM_FUNC_ARG/93     $3352=    $3351                4317:'start'        	;1
6614 3299  SEND_VAR_EX/66            ?80       $3352                ?1                  	;0
6615 3299  DO_FCALL_BY_NAME/131      $3353=    ?0                   ?0                  	;0
6616 3299  ASSIGN/38                 ?3272     16?26                $3353               	;0
6617 3300  INIT_FCALL_BY_NAME/59     ?0        ?0                   4318:'intval'       	;1
6618 3300  FETCH_STATIC_PROP_FUNC_ARG/177 $3355=    4320:'rRequest'      4321:'XUI'          	;1
6619 3300  FETCH_DIM_FUNC_ARG/93     $3356=    $3355                4323:'length'       	;1
6620 3300  SEND_VAR_EX/66            ?80       $3356                ?1                  	;0
6621 3300  DO_FCALL_BY_NAME/131      $3357=    ?0                   ?0                  	;0
6622 3300  ASSIGN/38                 ?3276     16?33                $3357               	;0
6623 3301  IS_SMALLER/19             #3359=    4324:1000            16?33               	;0
6624 3301  JMPNZ_EX/47               #3359=    #3359                ?6627               	;0	>>6627
6625 3301  IS_SMALLER_OR_EQUAL/20    #3360=    16?33                4325:0              	;0
6626 3301  BOOL/52                   #3359=    #3360                ?0                  	;0
6627 3301  BOOL_NOT/13               #3361=    #3359                ?0                  	;0	<<6624
6628 3301  JMPZ/43                   ?0        #3361                ?6630               	;0	>>6630
6629 3302  GOTO/253                  ?0        ?1374                ?4326               	;0
6630 3304  GOTO/253                  ?0        ?1373                ?4327               	;0	<<6628
6631 3306  INIT_METHOD_CALL/112      ?0        16?3                 4328:'query'        	;1
6632 3306  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
6633 3306  SEND_UNPACK/165           ?80       16?10                ?1                  	;0
6634 3306  DO_FCALL/60               ?3280     ?0                   ?0                  	;0
6635 3307  INIT_METHOD_CALL/112      ?0        16?3                 4330:'num_rows'     	;0
6636 3307  DO_FCALL/60               $3363=    ?0                   ?0                  	;0
6637 3307  IS_EQUAL/17               #3364=    $3363                4332:1              	;0
6638 3307  JMPZ/43                   ?0        #3364                ?6640               	;0	>>6640
6639 3308  GOTO/253                  ?0        ?6643                ?4333               	;0
6640 3310  ASSIGN_DIM/147            ?3283     16?1                 4334:'recordsTotal' 	;0	<<6638
6641 3310  OP_DATA/137               ?0        4335:0               ?0                  	;0
6642 3311  GOTO/253                  ?0        ?4564                ?4336               	;0
6643 3313  GOTO/253                  ?0        ?4559                ?4337               	;0
6644 3315  ASSIGN/38                 ?3284     16?31                4338:''             	;0
6645 3316  GOTO/253                  ?0        ?6652                ?4339               	;0
6646 3318  INIT_FCALL_BY_NAME/59     ?0        ?0                   4340:'implode'      	;2
6647 3318  SEND_VAL_EX/116           ?80       4342:' AND '         ?1                  	;0
6648 3318  SEND_VAR_EX/66            ?96       16?11                ?2                  	;0
6649 3318  DO_FCALL_BY_NAME/131      $3367=    ?0                   ?0                  	;0
6650 3318  CONCAT/8                  #3368=    4343:'WHERE '        $3367               	;0
6651 3318  ASSIGN/38                 ?3287     16?31                #3368               	;0
6652 3320  GOTO/253                  ?0        ?6724                ?4344               	;0
6653 3323  ASSIGN/38                 ?3288     16?13                4345:array (
  0 => '`username`',
  1 => '`streams`.`stream_display_name`',
  2 => '`lines_activity`.`user_agent`',
  3 => '`lines_activity`.`isp`',
  4 => '`lines_activity`.`user_ip`',
  5 => '`lines_activity`.`date_start`',
  6 => '`lines_activity`.`date_end`',
  7 => '`lines_activity`.`date_end` - `lines_activity`.`date_start`',
  8 => '`lines_activity`.`container`',
)	;0
6654 3324  FETCH_STATIC_PROP_IS/176  $3371=    4346:'rRequest'      4347:'XUI'          	;0
6655 3324  ISSET_ISEMPTY_DIM_OBJ/115 #3372=    $3371                4349:'order'        	;33554432
6656 3324  JMPZ_EX/46                #3372=    #3372                ?6666               	;0	>>6666
6657 3324  INIT_FCALL_BY_NAME/59     ?0        ?0                   4350:'strlen'       	;1
6658 3324  FETCH_STATIC_PROP_FUNC_ARG/177 $3373=    4352:'rRequest'      4353:'XUI'          	;1
6659 3324  FETCH_DIM_FUNC_ARG/93     $3374=    $3373                4355:'order'        	;1
6660 3324  FETCH_DIM_FUNC_ARG/93     $3375=    $3374                4356:0              	;1
6661 3324  FETCH_DIM_FUNC_ARG/93     $3376=    $3375                4357:'column'       	;1
6662 3324  SEND_VAR_EX/66            ?80       $3376                ?1                  	;0
6663 3324  DO_FCALL_BY_NAME/131      $3377=    ?0                   ?0                  	;0
6664 3324  IS_SMALLER/19             #3378=    4358:0               $3377               	;0
6665 3324  BOOL/52                   #3372=    #3378                ?0                  	;0
6666 3324  JMPZ/43                   ?0        #3372                ?6668               	;0	>>6668	<<6656
6667 3325  GOTO/253                  ?0        ?4801                ?4359               	;0
6668 3327  ASSIGN/38                 ?3297     16?14                4360:0              	;0	<<6666
6669 3328  GOTO/253                  ?0        ?4809                ?4361               	;0
6670 3329  GOTO/253                  ?0        ?4801                ?4362               	;0
6671 3331  INIT_FCALL_BY_NAME/59     ?0        ?0                   4363:'implode'      	;2
6672 3331  SEND_VAL_EX/116           ?80       4365:','             ?1                  	;0
6673 3331  INIT_FCALL_BY_NAME/59     ?0        ?0                   4366:'array_map'    	;2
6674 3331  SEND_VAL_EX/116           ?80       4368:'intval'        ?1                  	;0
6675 3331  FETCH_DIM_FUNC_ARG/93     $3381=    16?0                 4369:'stream_ids'   	;2
6676 3331  SEND_VAR_EX/66            ?96       $3381                ?2                  	;0
6677 3331  DO_FCALL_BY_NAME/131      $3382=    ?0                   ?0                  	;0
6678 3331  SEND_VAR_NO_REF_EX/50     ?96       $3382                ?2                  	;0
6679 3331  DO_FCALL_BY_NAME/131      $3383=    ?0                   ?0                  	;0
6680 3331  CONCAT/8                  #3384=    4370:'`streams`.`id` IN (' $3383               	;0
6681 3331  CONCAT/8                  #3385=    #3384                4371:')'            	;0
6682 3331  ASSIGN_DIM/147            ?3298     16?11                ?2670195408         	;0
6683 3331  OP_DATA/137               ?0        #3385                ?0                  	;0
6684 3333  JMPZ/43                   ?0        16?47                ?6686               	;0	>>6686
6685 3334  GOTO/253                  ?0        ?1199                ?4372               	;0
6686 3336  ASSIGN_DIM/147            ?3304     16?11                ?4397406            	;0	<<6684
6687 3336  OP_DATA/137               ?0        4373:'`type` = 1'    ?0                  	;0
6688 3337  GOTO/253                  ?0        ?1201                ?4374               	;0
6689 3338  GOTO/253                  ?0        ?1199                ?4375               	;0
6690 3341  ASSIGN/38                 ?3305     16?13                4376:array (
  0 => '`users`.`id`',
  1 => '`users`.`username`',
  2 => '`r`.`username`',
  3 => '`users`.`ip`',
  4 => '`users`.`status`',
  5 => '`users`.`credits`',
  6 => '`user_count`',
  7 => '`users`.`last_login`',
  8 => false,
)	;0
6691 3342  FETCH_STATIC_PROP_IS/176  $3388=    4377:'rRequest'      4378:'XUI'          	;0
6692 3342  ISSET_ISEMPTY_DIM_OBJ/115 #3389=    $3388                4380:'order'        	;33554432
6693 3342  JMPZ_EX/46                #3389=    #3389                ?6703               	;0	>>6703
6694 3342  INIT_FCALL_BY_NAME/59     ?0        ?0                   4381:'strlen'       	;1
6695 3342  FETCH_STATIC_PROP_FUNC_ARG/177 $3390=    4383:'rRequest'      4384:'XUI'          	;1
6696 3342  FETCH_DIM_FUNC_ARG/93     $3391=    $3390                4386:'order'        	;1
6697 3342  FETCH_DIM_FUNC_ARG/93     $3392=    $3391                4387:0              	;1
6698 3342  FETCH_DIM_FUNC_ARG/93     $3393=    $3392                4388:'column'       	;1
6699 3342  SEND_VAR_EX/66            ?80       $3393                ?1                  	;0
6700 3342  DO_FCALL_BY_NAME/131      $3394=    ?0                   ?0                  	;0
6701 3342  IS_SMALLER/19             #3395=    4389:0               $3394               	;0
6702 3342  BOOL/52                   #3389=    #3395                ?0                  	;0
6703 3342  JMPZ/43                   ?0        #3389                ?6705               	;0	>>6705	<<6693
6704 3343  GOTO/253                  ?0        ?6541                ?4390               	;0
6705 3345  ASSIGN/38                 ?3314     16?14                4391:0              	;0	<<6703
6706 3346  GOTO/253                  ?0        ?6549                ?4392               	;0
6707 3347  GOTO/253                  ?0        ?6541                ?4393               	;0
6708 3350  INIT_FCALL_BY_NAME/59     ?0        ?0                   4394:'intval'       	;1
6709 3350  FETCH_STATIC_PROP_FUNC_ARG/177 $3397=    4396:'rRequest'      4397:'XUI'          	;1
6710 3350  FETCH_DIM_FUNC_ARG/93     $3398=    $3397                4399:'line'         	;1
6711 3350  SEND_VAR_EX/66            ?80       $3398                ?1                  	;0
6712 3350  DO_FCALL_BY_NAME/131      $3399=    ?0                   ?0                  	;0
6713 3350  IS_SMALLER/19             #3400=    4400:0               $3399               	;0
6714 3350  BOOL_NOT/13               #3401=    #3400                ?0                  	;0
6715 3350  JMPZ/43                   ?0        #3401                ?6717               	;0	>>6717
6716 3351  GOTO/253                  ?0        ?6723                ?4401               	;0
6717 3353  ASSIGN_DIM/147            ?3320     16?11                ?4397406            	;0	<<6715
6718 3353  OP_DATA/137               ?0        4402:'`lines_live`.`user_id` = ?' ?0                  	;0
6719 3354  FETCH_STATIC_PROP_R/173   $3404=    4403:'rRequest'      4404:'XUI'          	;0
6720 3354  FETCH_DIM_R/81            $3405=    $3404                4406:'line'         	;0
6721 3354  ASSIGN_DIM/147            ?3321     16?10                ?0                  	;0
6722 3354  OP_DATA/137               ?0        $3405                ?0                  	;0
6723 3356  GOTO/253                  ?0        ?3354                ?4407               	;0
6724 3358  ROPE_INIT/54              #3407=    ?0                   4408:'SELECT COUNT(`lines`.`id`) AS `count` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` '	;3
6725 3358  ROPE_ADD/55               #3407=    #3407                16?31               	;1
6726 3358  ROPE_END/56               #3406=    #3407                4409:';'            	;2
6727 3358  ASSIGN/38                 ?3327     16?15                #3406               	;0
6728 3359  FETCH_DIM_R/81            $3410=    16?13                16?14               	;0
6729 3359  BOOL_NOT/13               #3411=    $3410                ?0                  	;0
6730 3359  JMPZ/43                   ?0        #3411                ?6732               	;0	>>6732
6731 3360  GOTO/253                  ?0        ?6750                ?4410               	;0
6732 3362  INIT_FCALL_BY_NAME/59     ?0        ?0                   4411:'strtolower'   	;1	<<6730
6733 3362  FETCH_STATIC_PROP_FUNC_ARG/177 $3412=    4413:'rRequest'      4414:'XUI'          	;1
6734 3362  FETCH_DIM_FUNC_ARG/93     $3413=    $3412                4416:'order'        	;1
6735 3362  FETCH_DIM_FUNC_ARG/93     $3414=    $3413                4417:0              	;1
6736 3362  FETCH_DIM_FUNC_ARG/93     $3415=    $3414                4418:'dir'          	;1
6737 3362  SEND_VAR_EX/66            ?80       $3415                ?1                  	;0
6738 3362  DO_FCALL_BY_NAME/131      $3416=    ?0                   ?0                  	;0
6739 3362  IS_IDENTICAL/15           #3417=    $3416                4419:'desc'         	;0
6740 3362  JMPZ/43                   ?0        #3417                ?6743               	;0	>>6743
6741 3362  QM_ASSIGN/22              #3418=    4420:'desc'          ?0                  	;0
6742 3362  JMP/42                    ?0        ?6744                ?0                  	;0	>>6744
6743 3362  QM_ASSIGN/22              #3418=    4421:'asc'           ?0                  	;0	<<6740
6744 3362  ASSIGN/38                 ?3337     16?29                #3418               	;0	<<6742
6745 3363  FETCH_DIM_R/81            $3420=    16?13                16?14               	;0
6746 3363  CONCAT/8                  #3421=    4422:'ORDER BY '     $3420               	;0
6747 3363  CONCAT/8                  #3422=    #3421                4423:' '            	;0
6748 3363  CONCAT/8                  #3423=    #3422                16?29               	;0
6749 3363  ASSIGN/38                 ?3342     16?30                #3423               	;0
6750 3365  GOTO/253                  ?0        ?1283                ?4424               	;0
6751 3368  NOP/0                     ?0        4425:1               ?0                  	;4294967295
*/

?>