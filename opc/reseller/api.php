<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    4     JMP/42                    ?0        ?1718                ?0                  	;0	>>1718
1    6     INIT_METHOD_CALL/112      ?0        16?0                 1:'num_rows'        	;0
2    6     DO_FCALL/60               $51=      ?0                   ?0                  	;0
3    6     IS_SMALLER/19             #52=      3:0                  $51                 	;0
4    6     BOOL_NOT/13               #53=      #52                  ?0                  	;0
5    6     JMPZ/43                   ?0        #53                  ?7                  	;0	>>7
6    7     GOTO/253                  ?0        ?16                  ?4                  	;0
7    9     INIT_METHOD_CALL/112      ?0        16?0                 5:'get_rows'        	;0	<<5
8    9     DO_FCALL/60               $54=      ?0                   ?0                  	;0
9    9     FE_RESET_R/77             $55=      $54                  ?15                 	;0
10   9     FE_FETCH_R/78             ?0        $55                  16?1                	;15	>>15	<<14
11   10    INIT_STATIC_METHOD_CALL/113 ?0        7:'XUI'              9:'B0020C716FdF67bb'	;1
12   10    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
13   10    DO_FCALL/60               ?5        ?0                   ?0                  	;0
14   11    JMP/42                    ?0        ?10                  ?0                  	;0	>>10
15   11    FE_FREE/127               ?0        $55                  ?0                  	;0	<<9
16   15    GOTO/253                  ?0        ?280                 ?11                 	;0
17   16    GOTO/253                  ?0        ?267                 ?12                 	;0
18   18    EXIT/79                   ?0        ?0                   ?0                  	;0
19   20    FETCH_STATIC_PROP_R/173   $57=      13:'rSettings'       14:'XUI'            	;0
20   20    FETCH_DIM_R/81            $58=      $57                  16:'redis_handler'  	;0
21   20    JMPZ/43                   ?0        $58                  ?23                 	;0	>>23
22   21    GOTO/253                  ?0        ?45                  ?17                 	;0
23   23    INIT_METHOD_CALL/112      ?0        16?0                 18:'query'          	;2	<<21
24   23    SEND_VAL_EX/116           ?80       20:'SELECT * FROM `lines_live` WHERE `user_id` = ?;' ?1                  	;0
25   23    FETCH_DIM_FUNC_ARG/93     $59=      16?2                 21:'user_id'        	;2
26   23    SEND_VAR_EX/66            ?96       $59                  ?2                  	;0
27   23    DO_FCALL/60               ?9        ?0                   ?0                  	;0
28   24    INIT_METHOD_CALL/112      ?0        16?0                 22:'num_rows'       	;0
29   24    DO_FCALL/60               $61=      ?0                   ?0                  	;0
30   24    IS_SMALLER/19             #62=      24:0                 $61                 	;0
31   24    BOOL_NOT/13               #63=      #62                  ?0                  	;0
32   24    JMPZ/43                   ?0        #63                  ?34                 	;0	>>34
33   25    GOTO/253                  ?0        ?44                  ?25                 	;0
34   27    GOTO/253                  ?0        ?35                  ?26                 	;0	<<32
35   29    INIT_METHOD_CALL/112      ?0        16?0                 27:'get_rows'       	;0
36   29    DO_FCALL/60               $64=      ?0                   ?0                  	;0
37   29    FE_RESET_R/77             $65=      $64                  ?43                 	;0
38   29    FE_FETCH_R/78             ?0        $65                  16?1                	;43	>>43	<<42
39   30    INIT_STATIC_METHOD_CALL/113 ?0        29:'XUI'             31:'B0020c716fDF67bb'	;1
40   30    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
41   30    DO_FCALL/60               ?15       ?0                   ?0                  	;0
42   31    JMP/42                    ?0        ?38                  ?0                  	;0	>>38
43   31    FE_FREE/127               ?0        $65                  ?0                  	;0	<<37
44   35    GOTO/253                  ?0        ?2691                ?33                 	;0
45   37    GOTO/253                  ?0        ?2676                ?34                 	;0
46   40    ASSIGN/38                 ?16       16?3                 35:array (
)        	;0
47   41    INIT_METHOD_CALL/112      ?0        16?0                 36:'query'          	;1
48   41    INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'implode'        	;2
49   41    SEND_VAL_EX/116           ?80       40:','               ?1                  	;0
50   41    FETCH_DIM_FUNC_ARG/93     $68=      16?4                 41:'reports'        	;2
51   41    SEND_VAR_EX/66            ?96       $68                  ?2                  	;0
52   41    DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
53   41    CONCAT/8                  #70=      42:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $69                 	;0
54   41    CONCAT/8                  #71=      #70                  43:');'             	;0
55   41    SEND_VAL_EX/116           ?80       #71                  ?1                  	;0
56   41    DO_FCALL/60               ?21       ?0                   ?0                  	;0
57   42    INIT_METHOD_CALL/112      ?0        16?0                 44:'get_rows'       	;0
58   42    DO_FCALL/60               $73=      ?0                   ?0                  	;0
59   42    FE_RESET_R/77             $74=      $73                  ?65                 	;0
60   42    FE_FETCH_R/78             ?0        $74                  16?1                	;65	>>65	<<64
61   43    FETCH_DIM_R/81            $76=      16?1                 46:'id'             	;0
62   43    ASSIGN_DIM/147            ?24       16?3                 ?4414262            	;0
63   43    OP_DATA/137               ?0        $76                  ?0                  	;0
64   44    JMP/42                    ?0        ?60                  ?0                  	;0	>>60
65   44    FE_FREE/127               ?0        $74                  ?0                  	;0	<<59
66   47    GOTO/253                  ?0        ?205                 ?47                 	;0
67   49    IS_EQUAL/17               #77=      16?5                 48:'kill_line'      	;0
68   49    BOOL_NOT/13               #78=      #77                  ?0                  	;0
69   49    JMPZ/43                   ?0        #78                  ?71                 	;0	>>71
70   50    GOTO/253                  ?0        ?471                 ?49                 	;0
71   52    FETCH_DIM_R/81            $79=      16?6                 50:'reseller_client_connection_logs'	;0	<<69
72   52    JMPZ/43                   ?0        $79                  ?74                 	;0	>>74
73   53    GOTO/253                  ?0        ?75                  ?51                 	;0
74   55    EXIT/79                   ?0        ?0                   ?0                  	;0	<<72
75   57    FETCH_STATIC_PROP_R/173   $80=      52:'rSettings'       53:'XUI'            	;0
76   57    FETCH_DIM_R/81            $81=      $80                  55:'redis_handler'  	;0
77   57    JMPZ/43                   ?0        $81                  ?79                 	;0	>>79
78   58    GOTO/253                  ?0        ?2915                ?56                 	;0
79   60    GOTO/253                  ?0        ?2807                ?57                 	;0	<<77
80   62    INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'floatval'       	;1
81   62    MUL/3                     #82=      16?8                 60:60               	;0
82   62    DIV/4                     #83=      61:100               #82                 	;0
83   62    SEND_VAL_EX/116           ?80       #83                  ?1                  	;0
84   62    DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
85   62    ASSIGN/38                 ?34       16?7                 $84                 	;0
86   63    ASSIGN/38                 ?35       16?9                 16?10               	;0
87   64    INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'sort'           	;1
88   64    SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
89   64    DO_FCALL_BY_NAME/131      ?36       ?0                   ?0                  	;0
90   65    ASSIGN/38                 ?37       16?11                64:array (
)        	;0
91   66    INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'count'          	;1
92   66    SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
93   66    DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
94   66    IS_SMALLER/19             #90=      67:0                 $89                 	;0
95   66    BOOL_NOT/13               #91=      #90                  ?0                  	;0
96   66    JMPZ/43                   ?0        #91                  ?98                 	;0	>>98
97   67    GOTO/253                  ?0        ?804                 ?68                 	;0
98   69    GOTO/253                  ?0        ?680                 ?69                 	;0	<<96
99   71    IS_EQUAL/17               #92=      16?5                 70:'delete'         	;0
100  71    JMPZ/43                   ?0        #92                  ?102                	;0	>>102
101  72    GOTO/253                  ?0        ?2440                ?71                 	;0
102  74    IS_EQUAL/17               #93=      16?5                 72:'enable'         	;0	<<100
103  74    JMPZ/43                   ?0        #93                  ?105                	;0	>>105
104  75    GOTO/253                  ?0        ?465                 ?73                 	;0
105  77    IS_EQUAL/17               #94=      16?5                 74:'disable'        	;0	<<103
106  77    JMPZ/43                   ?0        #94                  ?108                	;0	>>108
107  78    GOTO/253                  ?0        ?927                 ?75                 	;0
108  80    IS_EQUAL/17               #95=      16?5                 76:'convert'        	;0	<<106
109  80    JMPZ/43                   ?0        #95                  ?111                	;0	>>111
110  81    GOTO/253                  ?0        ?877                 ?77                 	;0
111  83    IS_EQUAL/17               #96=      16?5                 78:'reset_isp'      	;0	<<109
112  83    JMPZ/43                   ?0        #96                  ?114                	;0	>>114
113  84    GOTO/253                  ?0        ?472                 ?79                 	;0
114  86    GOTO/253                  ?0        ?67                  ?80                 	;0	<<112
115  88    IS_EQUAL/17               #97=      16?5                 81:'kill_line'      	;0
116  88    JMPZ/43                   ?0        #97                  ?118                	;0	>>118
117  89    GOTO/253                  ?0        ?124                 ?82                 	;0
118  91    INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'json_encode'    	;1	<<116
119  91    SEND_VAL_EX/116           ?80       85:array (
  'result' => false,
) ?1                  	;0
120  91    DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
121  91    ECHO/40                   ?0        $98                  ?0                  	;0
122  92    EXIT/79                   ?0        ?0                   ?0                  	;0
123  93    GOTO/253                  ?0        ?2932                ?86                 	;0
124  95    GOTO/253                  ?0        ?2155                ?87                 	;0
125  97    INIT_METHOD_CALL/112      ?0        16?0                 88:'get_row'        	;0
126  97    DO_FCALL/60               $99=      ?0                   ?0                  	;0
127  97    ASSIGN/38                 ?49       16?12                $99                 	;0
128  98    FETCH_DIM_R/81            $101=     16?12                90:'id'             	;0
129  98    FETCH_DIM_IS/90           $102=     16?13                $101                	;0
130  98    ISSET_ISEMPTY_DIM_OBJ/115 #103=     $102                 91:'official_credits'	;33554432
131  98    JMPZ_EX/46                #103=     #103                 ?140                	;0	>>140
132  98    INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'strlen'         	;1
133  98    FETCH_DIM_R/81            $104=     16?12                94:'id'             	;0
134  98    FETCH_DIM_FUNC_ARG/93     $105=     16?13                $104                	;1
135  98    FETCH_DIM_FUNC_ARG/93     $106=     $105                 95:'official_credits'	;1
136  98    SEND_VAR_EX/66            ?80       $106                 ?1                  	;0
137  98    DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
138  98    IS_SMALLER/19             #108=     96:0                 $107                	;0
139  98    BOOL/52                   #103=     #108                 ?0                  	;0
140  98    BOOL_NOT/13               #109=     #103                 ?0                  	;0	<<131
141  98    JMPZ/43                   ?0        #109                 ?143                	;0	>>143
142  99    GOTO/253                  ?0        ?148                 ?97                 	;0
143  101   FETCH_DIM_R/81            $111=     16?12                99:'id'             	;0	<<141
144  101   FETCH_DIM_R/81            $112=     16?13                $111                	;0
145  101   FETCH_DIM_R/81            $113=     $112                 100:'official_credits'	;0
146  101   ASSIGN_DIM/147            ?59       16?12                98:'cost_credits'   	;0
147  101   OP_DATA/137               ?0        $113                 ?0                  	;0
148  103   FETCH_STATIC_PROP_IS/176  $114=     101:'rRequest'       102:'XUI'           	;0
149  103   ISSET_ISEMPTY_DIM_OBJ/115 #115=     $114                 104:'orig_id'       	;33554432
150  103   JMPZ_EX/46                #115=     #115                 ?153                	;0	>>153
151  103   FETCH_DIM_R/81            $116=     16?12                105:'check_compatible'	;0
152  103   BOOL/52                   #115=     $116                 ?0                  	;0
153  103   JMPZ/43                   ?0        #115                 ?155                	;0	>>155	<<150
154  104   GOTO/253                  ?0        ?1707                ?106                	;0
155  106   GOTO/253                  ?0        ?1704                ?107                	;0	<<153
156  109   GOTO/253                  ?0        ?2845                ?108                	;0
157  111   FETCH_DIM_R/81            $117=     16?6                 109:'create_mag'    	;0
158  111   JMPZ/43                   ?0        $117                 ?160                	;0	>>160
159  112   GOTO/253                  ?0        ?1815                ?110                	;0
160  114   EXIT/79                   ?0        ?0                   ?0                  	;0	<<158
161  115   GOTO/253                  ?0        ?1815                ?111                	;0
162  118   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'json_encode'   	;1
163  118   SEND_VAL_EX/116           ?80       114:array (
  'result' => false,
) ?1                  	;0
164  118   DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
165  118   ECHO/40                   ?0        $118                 ?0                  	;0
166  119   EXIT/79                   ?0        ?0                   ?0                  	;0
167  121   GOTO/253                  ?0        ?1600                ?115                	;0
168  122   GOTO/253                  ?0        ?192                 ?116                	;0
169  124   INIT_METHOD_CALL/112      ?0        16?0                 118:'get_row'       	;0
170  124   DO_FCALL/60               $120=     ?0                   ?0                  	;0
171  124   FETCH_DIM_R/81            $121=     $120                 120:'count'         	;0
172  124   JMP_SET/152               #122=     $121                 ?174                	;0
173  124   QM_ASSIGN/22              #122=     121:0                ?0                  	;0
174  124   ASSIGN_DIM/147            ?68       16?14                117:'open_connections'	;0
175  124   OP_DATA/137               ?0        #122                 ?0                  	;0
176  125   INIT_METHOD_CALL/112      ?0        16?0                 122:'query'         	;1
177  125   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'implode'       	;2
178  125   SEND_VAL_EX/116           ?80       126:','              ?1                  	;0
179  125   FETCH_DIM_FUNC_ARG/93     $123=     16?4                 127:'reports'       	;2
180  125   SEND_VAR_EX/66            ?96       $123                 ?2                  	;0
181  125   DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
182  125   CONCAT/8                  #125=     128:'SELECT `activity_id` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' $124                	;0
183  125   CONCAT/8                  #126=     #125                 129:') GROUP BY `lines_live`.`user_id`;'	;0
184  125   SEND_VAL_EX/116           ?80       #126                 ?1                  	;0
185  125   DO_FCALL/60               ?76       ?0                   ?0                  	;0
186  126   INIT_METHOD_CALL/112      ?0        16?0                 131:'num_rows'      	;0
187  126   DO_FCALL/60               $129=     ?0                   ?0                  	;0
188  126   ASSIGN_DIM/147            ?77       16?14                130:'online_users'  	;0
189  126   OP_DATA/137               ?0        $129                 ?0                  	;0
190  127   GOTO/253                  ?0        ?857                 ?133                	;0
191  129   GOTO/253                  ?0        ?982                 ?134                	;0
192  132   FETCH_DIM_R/81            $130=     16?6                 135:'create_sub_resellers'	;0
193  132   JMPZ/43                   ?0        $130                 ?195                	;0	>>195
194  133   GOTO/253                  ?0        ?196                 ?136                	;0
195  135   EXIT/79                   ?0        ?0                   ?0                  	;0	<<193
196  137   INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'E589a4bF54a2dad1'	;2
197  137   SEND_VAL_EX/116           ?80       139:'user'           ?1                  	;0
198  137   FETCH_STATIC_PROP_FUNC_ARG/177 $131=     140:'rRequest'       141:'XUI'           	;2
199  137   FETCH_DIM_FUNC_ARG/93     $132=     $131                 143:'id'            	;2
200  137   SEND_VAR_EX/66            ?96       $132                 ?2                  	;0
201  137   DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
202  137   JMPZ/43                   ?0        $133                 ?204                	;0	>>204
203  138   GOTO/253                  ?0        ?421                 ?144                	;0
204  140   GOTO/253                  ?0        ?416                 ?145                	;0	<<202
205  142   INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'count'         	;1
206  142   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
207  142   DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
208  142   IS_SMALLER/19             #135=     148:0                $134                	;0
209  142   BOOL_NOT/13               #136=     #135                 ?0                  	;0
210  142   JMPZ/43                   ?0        #136                 ?212                	;0	>>212
211  143   GOTO/253                  ?0        ?231                 ?149                	;0
212  145   INIT_STATIC_METHOD_CALL/113 ?0        150:'XUI'            152:'A96aB74F1921d4ad'	;2	<<210
213  145   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
214  145   SEND_VAL_EX/116           ?96       154:true             ?2                  	;0
215  145   DO_FCALL/60               $137=     ?0                   ?0                  	;0
216  145   FE_RESET_R/77             $138=     $137                 ?230                	;0
217  145   FE_FETCH_R/78             #139=     $138                 16?15               	;230	>>230	<<229
218  145   ASSIGN/38                 ?89       16?16                #139                	;0
219  146   ASSIGN_ADD/23             ?90       16?14                155:'total_connections'	;147
220  146   OP_DATA/137               ?0        16?15                ?0                  	;0
221  147   IS_SMALLER/19             #142=     156:0                16?15               	;0
222  147   BOOL_NOT/13               #143=     #142                 ?0                  	;0
223  147   JMPZ/43                   ?0        #143                 ?226                	;0	>>226
224  148   NOP/0                     ?0        ?0                   ?0                  	;1
225  148   GOTO/253                  ?0        ?229                 ?157                	;0
226  150   FETCH_DIM_RW/87           $144=     16?14                158:'total_users'   	;0	<<223
227  150   POST_INC/36               #145=     $144                 ?0                  	;0
228  150   FREE/70                   ?0        #145                 ?0                  	;0
229  152   JMP/42                    ?0        ?217                 ?0                  	;0	>>217
230  152   FE_FREE/127               ?0        $138                 ?0                  	;0	<<216
231  157   GOTO/253                  ?0        ?1956                ?159                	;0
232  159   EXIT/79                   ?0        ?0                   ?0                  	;0
233  161   ASSIGN/38                 ?95       16?14                160:array (
  'total_count' => 0,
  'items' => 
  array (
  ),
  'result' => true,
)	;0
234  162   FETCH_STATIC_PROP_IS/176  $147=     161:'rRequest'       162:'XUI'           	;0
235  162   ISSET_ISEMPTY_DIM_OBJ/115 #148=     $147                 164:'search'        	;33554432
236  162   BOOL_NOT/13               #149=     #148                 ?0                  	;0
237  162   JMPZ/43                   ?0        #149                 ?239                	;0	>>239
238  163   GOTO/253                  ?0        ?1737                ?165                	;0
239  165   FETCH_STATIC_PROP_IS/176  $150=     166:'rRequest'       167:'XUI'           	;0	<<237
240  165   ISSET_ISEMPTY_DIM_OBJ/115 #151=     $150                 169:'page'          	;33554432
241  165   JMPZ/43                   ?0        #151                 ?243                	;0	>>243
242  166   GOTO/253                  ?0        ?3046                ?170                	;0
243  168   GOTO/253                  ?0        ?3044                ?171                	;0	<<241
244  170   BOOL_NOT/13               #152=     16?17                ?0                  	;0
245  170   JMPZ/43                   ?0        #152                 ?247                	;0	>>247
246  171   GOTO/253                  ?0        ?261                 ?172                	;0
247  173   INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'E589a4BF54A2dAd1'	;2	<<245
248  173   SEND_VAL_EX/116           ?80       175:'line'           ?1                  	;0
249  173   FETCH_DIM_FUNC_ARG/93     $153=     16?17                176:'user_id'       	;2
250  173   SEND_VAR_EX/66            ?96       $153                 ?2                  	;0
251  173   DO_FCALL_BY_NAME/131      $154=     ?0                   ?0                  	;0
252  173   JMPZ/43                   ?0        $154                 ?254                	;0	>>254
253  174   GOTO/253                  ?0        ?259                 ?177                	;0
254  176   INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'json_encode'   	;1	<<252
255  176   SEND_VAL_EX/116           ?80       180:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
256  176   DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
257  176   ECHO/40                   ?0        $155                 ?0                  	;0
258  177   EXIT/79                   ?0        ?0                   ?0                  	;0
259  179   GOTO/253                  ?0        ?99                  ?181                	;0
260  181   EXIT/79                   ?0        ?0                   ?0                  	;0
261  184   INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'json_encode'   	;1
262  184   SEND_VAL_EX/116           ?80       184:array (
  'result' => false,
) ?1                  	;0
263  184   DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
264  184   ECHO/40                   ?0        $156                 ?0                  	;0
265  185   EXIT/79                   ?0        ?0                   ?0                  	;0
266  186   GOTO/253                  ?0        ?1731                ?185                	;0
267  189   INIT_STATIC_METHOD_CALL/113 ?0        186:'XUI'            188:'a96aB74f1921d4aD'	;2
268  189   INIT_ARRAY/71             #157=     16?16                ?0                  	;4
269  189   SEND_VAL_EX/116           ?80       #157                 ?1                  	;0
270  189   SEND_VAL_EX/116           ?96       190:false            ?2                  	;0
271  189   DO_FCALL/60               $158=     ?0                   ?0                  	;0
272  189   FETCH_DIM_R/81            $159=     $158                 16?16               	;0
273  189   FE_RESET_R/77             $160=     $159                 ?279                	;0
274  189   FE_FETCH_R/78             ?0        $160                 16?18               	;279	>>279	<<278
275  190   INIT_STATIC_METHOD_CALL/113 ?0        191:'XUI'            193:'b0020c716FDf67bB'	;1
276  190   SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
277  190   DO_FCALL/60               ?110      ?0                   ?0                  	;0
278  191   JMP/42                    ?0        ?274                 ?0                  	;0	>>274
279  191   FE_FREE/127               ?0        $160                 ?0                  	;0	<<273
280  195   INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'json_encode'   	;1
281  195   SEND_VAL_EX/116           ?80       197:array (
  'result' => true,
) ?1                  	;0
282  195   DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
283  195   ECHO/40                   ?0        $162                 ?0                  	;0
284  196   GOTO/253                  ?0        ?2931                ?198                	;0
285  198   EXIT/79                   ?0        ?0                   ?0                  	;0
286  200   GOTO/253                  ?0        ?156                 ?199                	;0
287  202   FETCH_DIM_R/81            $163=     16?6                 200:'create_mag'    	;0
288  202   BOOL_NOT/13               #164=     $163                 ?0                  	;0
289  202   JMPZ_EX/46                #164=     #164                 ?293                	;0	>>293
290  202   FETCH_DIM_R/81            $165=     16?6                 201:'can_view_vod'  	;0
291  202   BOOL_NOT/13               #166=     $165                 ?0                  	;0
292  202   BOOL/52                   #164=     #166                 ?0                  	;0
293  202   JMPZ_EX/46                #164=     #164                 ?297                	;0	>>297	<<289
294  202   FETCH_DIM_R/81            $167=     16?6                 202:'reseller_client_connection_logs'	;0
295  202   BOOL_NOT/13               #168=     $167                 ?0                  	;0
296  202   BOOL/52                   #164=     #168                 ?0                  	;0
297  202   BOOL_NOT/13               #169=     #164                 ?0                  	;0	<<293
298  202   JMPZ/43                   ?0        #169                 ?300                	;0	>>300
299  203   GOTO/253                  ?0        ?233                 ?203                	;0
300  205   GOTO/253                  ?0        ?232                 ?204                	;0	<<298
301  207   EXIT/79                   ?0        ?0                   ?0                  	;0
302  209   FETCH_STATIC_PROP_R/173   $170=     205:'rRequest'       206:'XUI'           	;0
303  209   FETCH_DIM_R/81            $171=     $170                 208:'sub'           	;0
304  209   ASSIGN/38                 ?121      16?5                 $171                	;0
305  210   IS_EQUAL/17               #173=     16?5                 209:'close'         	;0
306  210   JMPZ/43                   ?0        #173                 ?308                	;0	>>308
307  211   GOTO/253                  ?0        ?2663                ?210                	;0
308  213   IS_EQUAL/17               #174=     16?5                 211:'reopen'        	;0	<<306
309  213   BOOL_NOT/13               #175=     #174                 ?0                  	;0
310  213   JMPZ/43                   ?0        #175                 ?312                	;0	>>312
311  214   GOTO/253                  ?0        ?2662                ?212                	;0
312  216   GOTO/253                  ?0        ?2531                ?213                	;0	<<310
313  219   FETCH_CONSTANT/99         #176=     ?0                   214:'PHP_ERRORS'    	;16
314  219   JMPZ/43                   ?0        #176                 ?316                	;0	>>316
315  220   GOTO/253                  ?0        ?2768                ?217                	;0
316  222   FETCH_IS/89               $177=     218:'_SERVER'        ?0                  	;0	<<314
317  222   ISSET_ISEMPTY_DIM_OBJ/115 #178=     $177                 219:'HTTP_X_REQUESTED_WITH'	;16777216
318  222   JMPNZ_EX/47               #178=     #178                 ?326                	;0	>>326
319  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'strtolower'    	;1
320  222   FETCH_FUNC_ARG/92         $179=     222:'_SERVER'        ?0                  	;1
321  222   FETCH_DIM_FUNC_ARG/93     $180=     $179                 223:'HTTP_X_REQUESTED_WITH'	;1
322  222   SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
323  222   DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
324  222   IS_NOT_EQUAL/18           #182=     $181                 224:'xmlhttprequest'	;0
325  222   BOOL/52                   #178=     #182                 ?0                  	;0
326  222   BOOL_NOT/13               #183=     #178                 ?0                  	;0	<<318
327  222   JMPZ/43                   ?0        #183                 ?329                	;0	>>329
328  223   GOTO/253                  ?0        ?330                 ?225                	;0
329  225   EXIT/79                   ?0        ?0                   ?0                  	;0	<<327
330  227   GOTO/253                  ?0        ?2768                ?226                	;0
331  229   FETCH_STATIC_PROP_R/173   $184=     227:'rRequest'       228:'XUI'           	;0
332  229   FETCH_DIM_R/81            $185=     $184                 230:'action'        	;0
333  229   IS_EQUAL/17               #186=     $185                 231:'get_epg'       	;0
334  229   JMPZ/43                   ?0        #186                 ?336                	;0	>>336
335  230   GOTO/253                  ?0        ?1576                ?232                	;0
336  232   FETCH_STATIC_PROP_R/173   $187=     233:'rRequest'       234:'XUI'           	;0	<<334
337  232   FETCH_DIM_R/81            $188=     $187                 236:'action'        	;0
338  232   IS_EQUAL/17               #189=     $188                 237:'get_programme' 	;0
339  232   BOOL_NOT/13               #190=     #189                 ?0                  	;0
340  232   JMPZ/43                   ?0        #190                 ?342                	;0	>>342
341  233   GOTO/253                  ?0        ?2114                ?238                	;0
342  235   FETCH_DIM_R/81            $191=     16?6                 239:'can_view_vod'  	;0	<<340
343  235   JMPZ/43                   ?0        $191                 ?345                	;0	>>345
344  236   GOTO/253                  ?0        ?346                 ?240                	;0
345  238   EXIT/79                   ?0        ?0                   ?0                  	;0	<<343
346  240   GOTO/253                  ?0        ?1345                ?241                	;0
347  243   FETCH_DIM_R/81            $192=     16?6                 242:'reseller_client_connection_logs'	;0
348  243   JMPZ/43                   ?0        $192                 ?350                	;0	>>350
349  244   GOTO/253                  ?0        ?351                 ?243                	;0
350  246   EXIT/79                   ?0        ?0                   ?0                  	;0	<<348
351  248   FETCH_STATIC_PROP_R/173   $193=     244:'rRequest'       245:'XUI'           	;0
352  248   FETCH_DIM_R/81            $194=     $193                 247:'sub'           	;0
353  248   ASSIGN/38                 ?144      16?5                 $194                	;0
354  249   GOTO/253                  ?0        ?571                 ?248                	;0
355  251   INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'igbinary_unserialize'	;1
356  251   FETCH_STATIC_PROP_R/173   $196=     251:'redis'          252:'XUI'           	;0
357  251   INIT_METHOD_CALL/112      ?0        $196                 254:'get'           	;1
358  251   FETCH_STATIC_PROP_FUNC_ARG/177 $197=     256:'rRequest'       257:'XUI'           	;1
359  251   FETCH_DIM_FUNC_ARG/93     $198=     $197                 259:'uuid'          	;1
360  251   SEND_VAR_EX/66            ?80       $198                 ?1                  	;0
361  251   DO_FCALL/60               $199=     ?0                   ?0                  	;0
362  251   SEND_VAR_NO_REF_EX/50     ?80       $199                 ?1                  	;0
363  251   DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
364  251   ASSIGN/38                 $201=     16?19                $200                	;0
365  251   BOOL_NOT/13               #202=     $201                 ?0                  	;0
366  251   JMPZ/43                   ?0        #202                 ?368                	;0	>>368
367  252   GOTO/253                  ?0        ?876                 ?260                	;0
368  254   INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'E589a4BF54a2DaD1'	;2	<<366
369  254   SEND_VAL_EX/116           ?80       263:'line'           ?1                  	;0
370  254   FETCH_DIM_FUNC_ARG/93     $203=     16?19                264:'user_id'       	;2
371  254   SEND_VAR_EX/66            ?96       $203                 ?2                  	;0
372  254   DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
373  254   JMPZ/43                   ?0        $204                 ?375                	;0	>>375
374  255   GOTO/253                  ?0        ?380                 ?265                	;0
375  257   INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'json_encode'   	;1	<<373
376  257   SEND_VAL_EX/116           ?80       268:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
377  257   DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
378  257   ECHO/40                   ?0        $205                 ?0                  	;0
379  258   EXIT/79                   ?0        ?0                   ?0                  	;0
380  260   GOTO/253                  ?0        ?868                 ?269                	;0
381  262   IS_EQUAL/17               #206=     16?5                 270:'disable'       	;0
382  262   BOOL_NOT/13               #207=     #206                 ?0                  	;0
383  262   JMPZ/43                   ?0        #207                 ?385                	;0	>>385
384  263   GOTO/253                  ?0        ?1022                ?271                	;0
385  265   INIT_METHOD_CALL/112      ?0        16?0                 272:'query'         	;2	<<383
386  265   SEND_VAL_EX/116           ?80       274:'UPDATE `users` SET `status` = 0 WHERE `id` = ?;' ?1                  	;0
387  265   FETCH_STATIC_PROP_FUNC_ARG/177 $208=     275:'rRequest'       276:'XUI'           	;2
388  265   FETCH_DIM_FUNC_ARG/93     $209=     $208                 278:'user_id'       	;2
389  265   SEND_VAR_EX/66            ?96       $209                 ?2                  	;0
390  265   DO_FCALL/60               ?159      ?0                   ?0                  	;0
391  266   INIT_METHOD_CALL/112      ?0        16?0                 279:'query'         	;8
392  266   SEND_VAL_EX/116           ?80       281:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
393  266   FETCH_DIM_FUNC_ARG/93     $211=     16?4                 282:'id'            	;2
394  266   SEND_VAR_EX/66            ?96       $211                 ?2                  	;0
395  266   SEND_VAL_EX/116           ?112      283:'disable'        ?3                  	;0
396  266   FETCH_STATIC_PROP_FUNC_ARG/177 $212=     284:'rRequest'       285:'XUI'           	;4
397  266   FETCH_DIM_FUNC_ARG/93     $213=     $212                 287:'user_id'       	;4
398  266   SEND_VAR_EX/66            ?128      $213                 ?4                  	;0
399  266   SEND_VAL_EX/116           ?144      288:0                ?5                  	;0
400  266   FETCH_DIM_FUNC_ARG/93     $214=     16?4                 289:'credits'       	;6
401  266   SEND_VAR_EX/66            ?160      $214                 ?6                  	;0
402  266   INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'time'          	;0
403  266   DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
404  266   SEND_VAR_NO_REF_EX/50     ?176      $215                 ?7                  	;0
405  266   INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'json_encode'   	;1
406  266   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
407  266   DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
408  266   SEND_VAR_NO_REF_EX/50     ?192      $216                 ?8                  	;0
409  266   DO_FCALL/60               ?166      ?0                   ?0                  	;0
410  267   INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'json_encode'   	;1
411  267   SEND_VAL_EX/116           ?80       296:array (
  'result' => true,
) ?1                  	;0
412  267   DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
413  267   ECHO/40                   ?0        $218                 ?0                  	;0
414  268   EXIT/79                   ?0        ?0                   ?0                  	;0
415  269   GOTO/253                  ?0        ?1022                ?297                	;0
416  271   INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'json_encode'   	;1
417  271   SEND_VAL_EX/116           ?80       300:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
418  271   DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
419  271   ECHO/40                   ?0        $219                 ?0                  	;0
420  272   EXIT/79                   ?0        ?0                   ?0                  	;0
421  274   INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'BA89228dc958ce05'	;1
422  274   FETCH_STATIC_PROP_FUNC_ARG/177 $220=     303:'rRequest'       304:'XUI'           	;1
423  274   FETCH_DIM_FUNC_ARG/93     $221=     $220                 306:'id'            	;1
424  274   SEND_VAR_EX/66            ?80       $221                 ?1                  	;0
425  274   DO_FCALL_BY_NAME/131      $222=     ?0                   ?0                  	;0
426  274   ASSIGN/38                 ?172      16?20                $222                	;0
427  275   JMPZ_EX/46                #224=     16?20                ?434                	;0	>>434
428  275   INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'is_numeric'    	;1
429  275   FETCH_STATIC_PROP_FUNC_ARG/177 $225=     309:'rRequest'       310:'XUI'           	;1
430  275   FETCH_DIM_FUNC_ARG/93     $226=     $225                 312:'credits'       	;1
431  275   SEND_VAR_EX/66            ?80       $226                 ?1                  	;0
432  275   DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
433  275   BOOL/52                   #224=     $227                 ?0                  	;0
434  275   BOOL_NOT/13               #228=     #224                 ?0                  	;0	<<427
435  275   JMPZ/43                   ?0        #228                 ?437                	;0	>>437
436  276   GOTO/253                  ?0        ?1595                ?313                	;0
437  278   GOTO/253                  ?0        ?2046                ?314                	;0	<<435
438  281   ASSIGN/38                 ?178      16?3                 315:array (
)       	;0
439  282   INIT_METHOD_CALL/112      ?0        16?0                 316:'query'         	;1
440  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   318:'implode'       	;2
441  282   SEND_VAL_EX/116           ?80       320:','              ?1                  	;0
442  282   FETCH_DIM_FUNC_ARG/93     $230=     16?4                 321:'reports'       	;2
443  282   SEND_VAR_EX/66            ?96       $230                 ?2                  	;0
444  282   DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
445  282   CONCAT/8                  #232=     322:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $231                	;0
446  282   CONCAT/8                  #233=     #232                 323:');'            	;0
447  282   SEND_VAL_EX/116           ?80       #233                 ?1                  	;0
448  282   DO_FCALL/60               ?183      ?0                   ?0                  	;0
449  283   INIT_METHOD_CALL/112      ?0        16?0                 324:'get_rows'      	;0
450  283   DO_FCALL/60               $235=     ?0                   ?0                  	;0
451  283   FE_RESET_R/77             $236=     $235                 ?457                	;0
452  283   FE_FETCH_R/78             ?0        $236                 16?1                	;457	>>457	<<456
453  284   FETCH_DIM_R/81            $238=     16?1                 326:'id'            	;0
454  284   ASSIGN_DIM/147            ?186      16?3                 ?4414262            	;0
455  284   OP_DATA/137               ?0        $238                 ?0                  	;0
456  285   JMP/42                    ?0        ?452                 ?0                  	;0	>>452
457  285   FE_FREE/127               ?0        $236                 ?0                  	;0	<<451
458  288   GOTO/253                  ?0        ?2008                ?327                	;0
459  290   INIT_FCALL_BY_NAME/59     ?0        ?0                   328:'json_encode'   	;1
460  290   SEND_VAL_EX/116           ?80       330:array (
  'result' => true,
) ?1                  	;0
461  290   DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
462  290   ECHO/40                   ?0        $239                 ?0                  	;0
463  291   EXIT/79                   ?0        ?0                   ?0                  	;0
464  293   GOTO/253                  ?0        ?981                 ?331                	;0
465  295   GOTO/253                  ?0        ?952                 ?332                	;0
466  297   INIT_FCALL_BY_NAME/59     ?0        ?0                   333:'json_encode'   	;1
467  297   SEND_VAL_EX/116           ?80       335:array (
  'result' => true,
) ?1                  	;0
468  297   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
469  297   ECHO/40                   ?0        $240                 ?0                  	;0
470  298   EXIT/79                   ?0        ?0                   ?0                  	;0
471  300   GOTO/253                  ?0        ?1887                ?336                	;0
472  302   GOTO/253                  ?0        ?1876                ?337                	;0
473  305   INIT_METHOD_CALL/112      ?0        16?0                 338:'get_row'       	;0
474  305   DO_FCALL/60               $241=     ?0                   ?0                  	;0
475  305   ASSIGN/38                 ?191      16?12                $241                	;0
476  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'date'          	;2
477  306   SEND_VAL_EX/116           ?80       343:'Y-m-d H:i'      ?1                  	;0
478  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   344:'strtotime'     	;1
479  306   INIT_FCALL_BY_NAME/59     ?0        ?0                   346:'intval'        	;1
480  306   FETCH_DIM_FUNC_ARG/93     $244=     16?12                348:'trial_duration'	;1
481  306   SEND_VAR_EX/66            ?80       $244                 ?1                  	;0
482  306   DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
483  306   CONCAT/8                  #246=     349:'+'              $245                	;0
484  306   CONCAT/8                  #247=     #246                 350:' '             	;0
485  306   FETCH_DIM_R/81            $248=     16?12                351:'trial_duration_in'	;0
486  306   CONCAT/8                  #249=     #247                 $248                	;0
487  306   SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
488  306   DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
489  306   SEND_VAR_NO_REF_EX/50     ?96       $250                 ?2                  	;0
490  306   DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
491  306   ASSIGN_DIM/147            ?192      16?12                340:'exp_date'      	;0
492  306   OP_DATA/137               ?0        $251                 ?0                  	;0
493  307   INIT_FCALL_BY_NAME/59     ?0        ?0                   352:'json_decode'   	;2
494  307   FETCH_DIM_FUNC_ARG/93     $252=     16?12                354:'bouquets'      	;1
495  307   SEND_VAR_EX/66            ?80       $252                 ?1                  	;0
496  307   SEND_VAL_EX/116           ?96       355:true             ?2                  	;0
497  307   DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
498  307   FE_RESET_R/77             $254=     $253                 ?550                	;0
499  307   FE_FETCH_R/78             ?0        $254                 16?21               	;550	>>550	<<549
500  308   INIT_METHOD_CALL/112      ?0        16?0                 356:'query'         	;2
501  308   SEND_VAL_EX/116           ?80       358:'SELECT * FROM `bouquets` WHERE `id` = ?;' ?1                  	;0
502  308   SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
503  308   DO_FCALL/60               ?204      ?0                   ?0                  	;0
504  309   INIT_METHOD_CALL/112      ?0        16?0                 359:'num_rows'      	;0
505  309   DO_FCALL/60               $256=     ?0                   ?0                  	;0
506  309   IS_EQUAL/17               #257=     $256                 361:1               	;0
507  309   BOOL_NOT/13               #258=     #257                 ?0                  	;0
508  309   JMPZ/43                   ?0        #258                 ?511                	;0	>>511
509  310   NOP/0                     ?0        ?0                   ?0                  	;1
510  310   GOTO/253                  ?0        ?549                 ?362                	;0
511  312   INIT_METHOD_CALL/112      ?0        16?0                 363:'get_row'       	;0	<<508
512  312   DO_FCALL/60               $259=     ?0                   ?0                  	;0
513  312   ASSIGN/38                 ?209      16?1                 $259                	;0
514  313   FETCH_DIM_R/81            $262=     16?1                 365:'id'            	;0
515  313   INIT_ARRAY/71             #263=     $262                 366:'id'            	;26
516  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'str_replace'   	;3
517  313   SEND_VAL_EX/116           ?80       369:'\''             ?1                  	;0
518  313   SEND_VAL_EX/116           ?96       370:'\\\''           ?2                  	;0
519  313   FETCH_DIM_FUNC_ARG/93     $264=     16?1                 371:'bouquet_name'  	;3
520  313   SEND_VAR_EX/66            ?112      $264                 ?3                  	;0
521  313   DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
522  313   ADD_ARRAY_ELEMENT/72      #263=     $265                 372:'bouquet_name'  	;0
523  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   373:'json_decode'   	;2
524  313   FETCH_DIM_FUNC_ARG/93     $266=     16?1                 375:'bouquet_channels'	;1
525  313   SEND_VAR_EX/66            ?80       $266                 ?1                  	;0
526  313   SEND_VAL_EX/116           ?96       376:true             ?2                  	;0
527  313   DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
528  313   ADD_ARRAY_ELEMENT/72      #263=     $267                 377:'bouquet_channels'	;0
529  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'json_decode'   	;2
530  313   FETCH_DIM_FUNC_ARG/93     $268=     16?1                 380:'bouquet_radios'	;1
531  313   SEND_VAR_EX/66            ?80       $268                 ?1                  	;0
532  313   SEND_VAL_EX/116           ?96       381:true             ?2                  	;0
533  313   DO_FCALL_BY_NAME/131      $269=     ?0                   ?0                  	;0
534  313   ADD_ARRAY_ELEMENT/72      #263=     $269                 382:'bouquet_radios'	;0
535  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'json_decode'   	;2
536  313   FETCH_DIM_FUNC_ARG/93     $270=     16?1                 385:'bouquet_movies'	;1
537  313   SEND_VAR_EX/66            ?80       $270                 ?1                  	;0
538  313   SEND_VAL_EX/116           ?96       386:true             ?2                  	;0
539  313   DO_FCALL_BY_NAME/131      $271=     ?0                   ?0                  	;0
540  313   ADD_ARRAY_ELEMENT/72      #263=     $271                 387:'bouquet_movies'	;0
541  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   388:'json_decode'   	;2
542  313   FETCH_DIM_FUNC_ARG/93     $272=     16?1                 390:'bouquet_series'	;1
543  313   SEND_VAR_EX/66            ?80       $272                 ?1                  	;0
544  313   SEND_VAL_EX/116           ?96       391:true             ?2                  	;0
545  313   DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
546  313   ADD_ARRAY_ELEMENT/72      #263=     $273                 392:'bouquet_series'	;0
547  313   ASSIGN_DIM/147            ?210      16?14                ?2670194944         	;0
548  313   OP_DATA/137               ?0        #263                 ?0                  	;0
549  315   JMP/42                    ?0        ?499                 ?0                  	;0	>>499
550  315   FE_FREE/127               ?0        $254                 ?0                  	;0	<<498
551  318   GOTO/253                  ?0        ?2712                ?393                	;0
552  320   FETCH_DIM_R/81            $274=     16?6                 394:'create_enigma' 	;0
553  320   JMPZ/43                   ?0        $274                 ?555                	;0	>>555
554  321   GOTO/253                  ?0        ?556                 ?395                	;0
555  323   EXIT/79                   ?0        ?0                   ?0                  	;0	<<553
556  325   FETCH_STATIC_PROP_R/173   $275=     396:'rRequest'       397:'XUI'           	;0
557  325   FETCH_DIM_R/81            $276=     $275                 399:'sub'           	;0
558  325   ASSIGN/38                 ?226      16?5                 $276                	;0
559  326   INIT_FCALL_BY_NAME/59     ?0        ?0                   400:'Ef70A93E98FB7cE9'	;1
560  326   INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'intval'        	;1
561  326   FETCH_STATIC_PROP_FUNC_ARG/177 $278=     404:'rRequest'       405:'XUI'           	;1
562  326   FETCH_DIM_FUNC_ARG/93     $279=     $278                 407:'e2_id'         	;1
563  326   SEND_VAR_EX/66            ?80       $279                 ?1                  	;0
564  326   DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
565  326   SEND_VAR_NO_REF_EX/50     ?80       $280                 ?1                  	;0
566  326   DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
567  326   ASSIGN/38                 ?231      16?17                $281                	;0
568  327   GOTO/253                  ?0        ?244                 ?408                	;0
569  329   EXIT/79                   ?0        ?0                   ?0                  	;0
570  332   GOTO/253                  ?0        ?3053                ?409                	;0
571  334   IS_EQUAL/17               #283=     16?5                 410:'kill'          	;0
572  334   BOOL_NOT/13               #284=     #283                 ?0                  	;0
573  334   JMPZ/43                   ?0        #284                 ?575                	;0	>>575
574  335   GOTO/253                  ?0        ?650                 ?411                	;0
575  337   FETCH_STATIC_PROP_R/173   $285=     412:'rSettings'      413:'XUI'           	;0	<<573
576  337   FETCH_DIM_R/81            $286=     $285                 415:'redis_handler' 	;0
577  337   JMPZ/43                   ?0        $286                 ?579                	;0	>>579
578  338   GOTO/253                  ?0        ?2530                ?416                	;0
579  340   INIT_METHOD_CALL/112      ?0        16?0                 417:'query'         	;2	<<577
580  340   SEND_VAL_EX/116           ?80       419:'SELECT * FROM `lines_live` WHERE `uuid` = ? LIMIT 1;' ?1                  	;0
581  340   FETCH_STATIC_PROP_FUNC_ARG/177 $287=     420:'rRequest'       421:'XUI'           	;2
582  340   FETCH_DIM_FUNC_ARG/93     $288=     $287                 423:'uuid'          	;2
583  340   SEND_VAR_EX/66            ?96       $288                 ?2                  	;0
584  340   DO_FCALL/60               ?238      ?0                   ?0                  	;0
585  341   INIT_METHOD_CALL/112      ?0        16?0                 424:'num_rows'      	;0
586  341   DO_FCALL/60               $290=     ?0                   ?0                  	;0
587  341   IS_EQUAL/17               #291=     $290                 426:1               	;0
588  341   BOOL_NOT/13               #292=     #291                 ?0                  	;0
589  341   JMPZ/43                   ?0        #292                 ?591                	;0	>>591
590  342   GOTO/253                  ?0        ?2529                ?427                	;0
591  344   INIT_METHOD_CALL/112      ?0        16?0                 428:'get_row'       	;0	<<589
592  344   DO_FCALL/60               $293=     ?0                   ?0                  	;0
593  344   ASSIGN/38                 ?243      16?1                 $293                	;0
594  345   GOTO/253                  ?0        ?2469                ?430                	;0
595  347   EXIT/79                   ?0        ?0                   ?0                  	;0
596  349   INIT_FCALL_BY_NAME/59     ?0        ?0                   431:'intval'        	;1
597  349   FETCH_STATIC_PROP_FUNC_ARG/177 $295=     433:'rRequest'       434:'XUI'           	;1
598  349   FETCH_DIM_FUNC_ARG/93     $296=     $295                 436:'hours'         	;1
599  349   SEND_VAR_EX/66            ?80       $296                 ?1                  	;0
600  349   DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
601  349   JMP_SET/152               #298=     $297                 ?603                	;0
602  349   QM_ASSIGN/22              #298=     437:3                ?0                  	;0
603  349   ASSIGN/38                 ?248      16?8                 #298                	;0
604  350   INIT_FCALL_BY_NAME/59     ?0        ?0                   438:'intval'        	;1
605  350   INIT_FCALL_BY_NAME/59     ?0        ?0                   440:'strtotime'     	;1
606  350   FETCH_STATIC_PROP_FUNC_ARG/177 $300=     442:'rRequest'       443:'XUI'           	;1
607  350   FETCH_DIM_FUNC_ARG/93     $301=     $300                 445:'startdate'     	;1
608  350   SEND_VAR_EX/66            ?80       $301                 ?1                  	;0
609  350   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
610  350   SEND_VAR_NO_REF_EX/50     ?80       $302                 ?1                  	;0
611  350   DO_FCALL_BY_NAME/131      $303=     ?0                   ?0                  	;0
612  350   JMP_SET/152               #304=     $303                 ?616                	;0
613  350   INIT_FCALL_BY_NAME/59     ?0        ?0                   446:'time'          	;0
614  350   DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
615  350   QM_ASSIGN/22              #304=     $305                 ?0                  	;0
616  350   ASSIGN/38                 ?255      16?22                #304                	;0
617  351   MUL/3                     #307=     16?8                 448:3600            	;0
618  351   ADD/1                     #308=     16?22                #307                	;0
619  351   ASSIGN/38                 ?258      16?23                #308                	;0
620  352   GOTO/253                  ?0        ?80                  ?449                	;0
621  354   IS_EQUAL/17               #310=     16?5                 450:'disable'       	;0
622  354   JMPZ/43                   ?0        #310                 ?624                	;0	>>624
623  355   GOTO/253                  ?0        ?1315                ?451                	;0
624  357   IS_EQUAL/17               #311=     16?5                 452:'convert'       	;0	<<622
625  357   JMPZ/43                   ?0        #311                 ?627                	;0	>>627
626  358   GOTO/253                  ?0        ?917                 ?453                	;0
627  360   IS_EQUAL/17               #312=     16?5                 454:'reset_isp'     	;0	<<625
628  360   JMPZ/43                   ?0        #312                 ?630                	;0	>>630
629  361   GOTO/253                  ?0        ?1011                ?455                	;0
630  363   IS_EQUAL/17               #313=     16?5                 456:'kill_line'     	;0	<<628
631  363   BOOL_NOT/13               #314=     #313                 ?0                  	;0
632  363   JMPZ/43                   ?0        #314                 ?634                	;0	>>634
633  364   GOTO/253                  ?0        ?1010                ?457                	;0
634  366   FETCH_DIM_R/81            $315=     16?6                 458:'reseller_client_connection_logs'	;0	<<632
635  366   JMPZ/43                   ?0        $315                 ?637                	;0	>>637
636  367   GOTO/253                  ?0        ?19                  ?459                	;0
637  369   GOTO/253                  ?0        ?18                  ?460                	;0	<<635
638  372   ASSIGN/38                 ?265      16?14                461:array (
  'total_count' => 0,
  'items' => 
  array (
  ),
  'result' => true,
)	;0
639  373   FETCH_STATIC_PROP_IS/176  $317=     462:'rRequest'       463:'XUI'           	;0
640  373   ISSET_ISEMPTY_DIM_OBJ/115 #318=     $317                 465:'search'        	;33554432
641  373   BOOL_NOT/13               #319=     #318                 ?0                  	;0
642  373   JMPZ/43                   ?0        #319                 ?644                	;0	>>644
643  374   GOTO/253                  ?0        ?2364                ?466                	;0
644  376   FETCH_STATIC_PROP_IS/176  $320=     467:'rRequest'       468:'XUI'           	;0	<<642
645  376   ISSET_ISEMPTY_DIM_OBJ/115 #321=     $320                 470:'page'          	;33554432
646  376   JMPZ/43                   ?0        #321                 ?648                	;0	>>648
647  377   GOTO/253                  ?0        ?1070                ?471                	;0
648  379   ASSIGN/38                 ?271      16?24                472:1               	;0	<<646
649  380   GOTO/253                  ?0        ?1069                ?473                	;0
650  383   INIT_FCALL_BY_NAME/59     ?0        ?0                   474:'json_encode'   	;1
651  383   SEND_VAL_EX/116           ?80       476:array (
  'result' => false,
) ?1                  	;0
652  383   DO_FCALL_BY_NAME/131      $323=     ?0                   ?0                  	;0
653  383   ECHO/40                   ?0        $323                 ?0                  	;0
654  384   EXIT/79                   ?0        ?0                   ?0                  	;0
655  386   GOTO/253                  ?0        ?1184                ?477                	;0
656  387   GOTO/253                  ?0        ?1152                ?478                	;0
657  390   FETCH_STATIC_PROP_R/173   $324=     479:'rRequest'       480:'XUI'           	;0
658  390   FETCH_DIM_R/81            $325=     $324                 482:'sub'           	;0
659  390   ASSIGN/38                 ?275      16?5                 $325                	;0
660  391   INIT_FCALL_BY_NAME/59     ?0        ?0                   483:'A32d85aEFA28959D'	;1
661  391   INIT_FCALL_BY_NAME/59     ?0        ?0                   485:'intval'        	;1
662  391   FETCH_STATIC_PROP_FUNC_ARG/177 $327=     487:'rRequest'       488:'XUI'           	;1
663  391   FETCH_DIM_FUNC_ARG/93     $328=     $327                 490:'mag_id'        	;1
664  391   SEND_VAR_EX/66            ?80       $328                 ?1                  	;0
665  391   DO_FCALL_BY_NAME/131      $329=     ?0                   ?0                  	;0
666  391   SEND_VAR_NO_REF_EX/50     ?80       $329                 ?1                  	;0
667  391   DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
668  391   ASSIGN/38                 ?280      16?2                 $330                	;0
669  392   BOOL_NOT/13               #332=     16?2                 ?0                  	;0
670  392   JMPZ/43                   ?0        #332                 ?672                	;0	>>672
671  393   GOTO/253                  ?0        ?1743                ?491                	;0
672  395   INIT_FCALL_BY_NAME/59     ?0        ?0                   492:'e589A4bF54a2DAD1'	;2	<<670
673  395   SEND_VAL_EX/116           ?80       494:'line'           ?1                  	;0
674  395   FETCH_DIM_FUNC_ARG/93     $333=     16?2                 495:'user_id'       	;2
675  395   SEND_VAR_EX/66            ?96       $333                 ?2                  	;0
676  395   DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
677  395   JMPZ/43                   ?0        $334                 ?679                	;0	>>679
678  396   GOTO/253                  ?0        ?2852                ?496                	;0
679  398   GOTO/253                  ?0        ?2847                ?497                	;0	<<677
680  400   INIT_METHOD_CALL/112      ?0        16?0                 498:'query'         	;3
681  400   INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'implode'       	;2
682  400   SEND_VAL_EX/116           ?80       502:','              ?1                  	;0
683  400   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
684  400   DO_FCALL_BY_NAME/131      $335=     ?0                   ?0                  	;0
685  400   CONCAT/8                  #336=     503:'SELECT `streams`.`id`, `epg_data`.`id` AS `listing_id`, `streams`.`tv_archive_duration`, `tv_archive_server_id`, `epg_data`.`title`, `epg_data`.`description`, `epg_data`.`start`, `epg_data`.`end` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `streams`.`id` IN (' $335                	;0
686  400   CONCAT/8                  #337=     #336                 504:') AND (`end` > ? AND `start` < ?) ORDER BY `id` ASC, `start` ASC;'	;0
687  400   SEND_VAL_EX/116           ?80       #337                 ?1                  	;0
688  400   SEND_VAR_EX/66            ?96       16?22                ?2                  	;0
689  400   SEND_VAR_EX/66            ?112      16?23                ?3                  	;0
690  400   DO_FCALL/60               ?287      ?0                   ?0                  	;0
691  401   INIT_METHOD_CALL/112      ?0        16?0                 505:'get_rows'      	;3
692  401   SEND_VAL_EX/116           ?80       507:true             ?1                  	;0
693  401   SEND_VAL_EX/116           ?96       508:'id'             ?2                  	;0
694  401   SEND_VAL_EX/116           ?112      509:false            ?3                  	;0
695  401   DO_FCALL/60               $339=     ?0                   ?0                  	;0
696  401   ASSIGN/38                 ?289      16?25                $339                	;0
697  402   FE_RESET_R/77             $341=     16?25                ?803                	;0
698  402   FE_FETCH_R/78             #342=     $341                 16?26               	;803	>>803	<<802
699  402   ASSIGN/38                 ?292      16?27                #342                	;0
700  403   FE_RESET_R/77             $344=     16?26                ?801                	;0
701  403   FE_FETCH_R/78             ?0        $344                 16?28               	;801	>>801	<<800
702  404   NOP/0                     ?0        ?0                   ?0                  	;1
703  404   NOP/0                     ?0        ?0                   ?0                  	;1
704  404   GOTO/253                  ?0        ?708                 ?510                	;0
705  407   NOP/0                     ?0        ?0                   ?0                  	;1
706  407   NOP/0                     ?0        ?0                   ?0                  	;1
707  407   GOTO/253                  ?0        ?800                 ?511                	;0
708  409   FETCH_DIM_R/81            $345=     16?28                512:'start'         	;0
709  409   IS_SMALLER/19             #346=     $345                 16?22               	;0
710  409   JMPZ/43                   ?0        #346                 ?713                	;0	>>713
711  409   QM_ASSIGN/22              #347=     16?22                ?0                  	;0
712  409   JMP/42                    ?0        ?715                 ?0                  	;0	>>715
713  409   FETCH_DIM_R/81            $348=     16?28                513:'start'         	;0	<<710
714  409   QM_ASSIGN/22              #347=     $348                 ?0                  	;0
715  409   ASSIGN/38                 ?298      16?29                #347                	;0	<<712
716  410   FETCH_DIM_R/81            $350=     16?28                514:'end'           	;0
717  410   IS_SMALLER/19             #351=     16?23                $350                	;0
718  410   JMPZ/43                   ?0        #351                 ?721                	;0	>>721
719  410   QM_ASSIGN/22              #352=     16?23                ?0                  	;0
720  410   JMP/42                    ?0        ?723                 ?0                  	;0	>>723
721  410   FETCH_DIM_R/81            $353=     16?28                515:'end'           	;0	<<718
722  410   QM_ASSIGN/22              #352=     $353                 ?0                  	;0
723  410   ASSIGN/38                 ?303      16?30                #352                	;0	<<720
724  411   SUB/2                     #355=     16?30                16?29               	;0
725  411   DIV/4                     #356=     #355                 516:60              	;0
726  411   ASSIGN/38                 ?306      16?31                #356                	;0
727  412   ASSIGN/38                 ?307      16?32                517:NULL            	;0
728  413   FETCH_DIM_R/81            $359=     16?28                518:'tv_archive_server_id'	;0
729  413   IS_SMALLER/19             #360=     519:0                $359                	;0
730  413   JMPZ_EX/46                #360=     #360                 ?734                	;0	>>734
731  413   FETCH_DIM_R/81            $361=     16?28                520:'tv_archive_duration'	;0
732  413   IS_SMALLER/19             #362=     521:0                $361                	;0
733  413   BOOL/52                   #360=     #362                 ?0                  	;0
734  413   BOOL_NOT/13               #363=     #360                 ?0                  	;0	<<730
735  413   JMPZ/43                   ?0        #363                 ?739                	;0	>>739
736  414   NOP/0                     ?0        ?0                   ?0                  	;1
737  414   NOP/0                     ?0        ?0                   ?0                  	;1
738  414   GOTO/253                  ?0        ?765                 ?522                	;0
739  416   NOP/0                     ?0        ?0                   ?0                  	;1	<<735
740  416   NOP/0                     ?0        ?0                   ?0                  	;1
741  416   GOTO/253                  ?0        ?742                 ?523                	;0
742  418   FETCH_DIM_R/81            $364=     16?28                524:'start'         	;0
743  418   INIT_FCALL_BY_NAME/59     ?0        ?0                   525:'time'          	;0
744  418   DO_FCALL_BY_NAME/131      $365=     ?0                   ?0                  	;0
745  418   FETCH_DIM_R/81            $366=     16?28                527:'tv_archive_duration'	;0
746  418   MUL/3                     #367=     $366                 528:86400           	;0
747  418   SUB/2                     #368=     $365                 #367                	;0
748  418   IS_SMALLER_OR_EQUAL/20    #369=     #368                 $364                	;0
749  418   BOOL_NOT/13               #370=     #369                 ?0                  	;0
750  418   JMPZ/43                   ?0        #370                 ?754                	;0	>>754
751  419   NOP/0                     ?0        ?0                   ?0                  	;1
752  419   NOP/0                     ?0        ?0                   ?0                  	;1
753  419   GOTO/253                  ?0        ?765                 ?529                	;0
754  421   FETCH_DIM_R/81            $371=     16?28                530:'start'         	;0	<<750
755  421   INIT_ARRAY/71             #372=     $371                 ?0                  	;8
756  421   INIT_FCALL_BY_NAME/59     ?0        ?0                   531:'intval'        	;1
757  421   FETCH_DIM_R/81            $373=     16?28                533:'end'           	;0
758  421   FETCH_DIM_R/81            $374=     16?28                534:'start'         	;0
759  421   SUB/2                     #375=     $373                 $374                	;0
760  421   DIV/4                     #376=     #375                 535:60              	;0
761  421   SEND_VAL_EX/116           ?80       #376                 ?1                  	;0
762  421   DO_FCALL_BY_NAME/131      $377=     ?0                   ?0                  	;0
763  421   ADD_ARRAY_ELEMENT/72      #372=     $377                 ?0                  	;0
764  421   ASSIGN/38                 ?327      16?32                #372                	;0
765  424   FETCH_DIM_R/81            $379=     16?28                536:'id'            	;0
766  424   FETCH_DIM_R/81            $382=     16?28                537:'listing_id'    	;0
767  424   INIT_ARRAY/71             #383=     $382                 538:'ListingId'     	;42
768  424   FETCH_DIM_R/81            $384=     16?28                539:'id'            	;0
769  424   ADD_ARRAY_ELEMENT/72      #383=     $384                 540:'ChannelId'     	;0
770  424   FETCH_DIM_R/81            $385=     16?28                541:'title'         	;0
771  424   ADD_ARRAY_ELEMENT/72      #383=     $385                 542:'Title'         	;0
772  424   INIT_FCALL_BY_NAME/59     ?0        ?0                   543:'round'         	;2
773  424   MUL/3                     #386=     16?31                16?7                	;0
774  424   SEND_VAL_EX/116           ?80       #386                 ?1                  	;0
775  424   SEND_VAL_EX/116           ?96       545:2                ?2                  	;0
776  424   DO_FCALL_BY_NAME/131      $387=     ?0                   ?0                  	;0
777  424   ADD_ARRAY_ELEMENT/72      #383=     $387                 546:'RelativeSize'  	;0
778  424   INIT_FCALL_BY_NAME/59     ?0        ?0                   547:'date'          	;2
779  424   SEND_VAL_EX/116           ?80       549:'h:ia'           ?1                  	;0
780  424   SEND_VAR_EX/66            ?96       16?29                ?2                  	;0
781  424   DO_FCALL_BY_NAME/131      $388=     ?0                   ?0                  	;0
782  424   ADD_ARRAY_ELEMENT/72      #383=     $388                 550:'StartTime'     	;0
783  424   INIT_FCALL_BY_NAME/59     ?0        ?0                   551:'date'          	;2
784  424   SEND_VAL_EX/116           ?80       553:'h:ia'           ?1                  	;0
785  424   SEND_VAR_EX/66            ?96       16?30                ?2                  	;0
786  424   DO_FCALL_BY_NAME/131      $389=     ?0                   ?0                  	;0
787  424   ADD_ARRAY_ELEMENT/72      #383=     $389                 554:'EndTime'       	;0
788  424   FETCH_DIM_R/81            $390=     16?28                555:'start'         	;0
789  424   ADD_ARRAY_ELEMENT/72      #383=     $390                 556:'Start'         	;0
790  424   FETCH_DIM_R/81            $391=     16?28                557:'end'           	;0
791  424   ADD_ARRAY_ELEMENT/72      #383=     $391                 558:'End'           	;0
792  424   ADD_ARRAY_ELEMENT/72      #383=     559:'tv'             560:'Specialisation'	;0
793  424   ADD_ARRAY_ELEMENT/72      #383=     16?32                561:'Archive'       	;0
794  424   FETCH_DIM_W/84            $380=     16?11                $379                	;0
795  424   ASSIGN_DIM/147            ?330      $380                 ?321                	;0
796  424   OP_DATA/137               ?0        #383                 ?0                  	;0
797  425   NOP/0                     ?0        ?0                   ?0                  	;1
798  425   NOP/0                     ?0        ?0                   ?0                  	;1
799  425   GOTO/253                  ?0        ?705                 ?562                	;0
800  426   JMP/42                    ?0        ?701                 ?0                  	;0	>>701
801  426   FE_FREE/127               ?0        $344                 ?0                  	;0	<<700
802  429   JMP/42                    ?0        ?698                 ?0                  	;0	>>698
803  429   FE_FREE/127               ?0        $341                 ?0                  	;0	<<697
804  433   GOTO/253                  ?0        ?1185                ?563                	;0
805  436   GOTO/253                  ?0        ?2437                ?564                	;0
806  438   INIT_METHOD_CALL/112      ?0        16?0                 565:'query'         	;2
807  438   SEND_VAL_EX/116           ?80       567:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
808  438   FETCH_DIM_FUNC_ARG/93     $392=     16?2                 568:'user_id'       	;2
809  438   SEND_VAR_EX/66            ?96       $392                 ?2                  	;0
810  438   DO_FCALL/60               ?342      ?0                   ?0                  	;0
811  439   INIT_METHOD_CALL/112      ?0        16?0                 569:'query'         	;8
812  439   SEND_VAL_EX/116           ?80       571:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
813  439   FETCH_DIM_FUNC_ARG/93     $394=     16?4                 572:'id'            	;2
814  439   SEND_VAR_EX/66            ?96       $394                 ?2                  	;0
815  439   SEND_VAL_EX/116           ?112      573:'enable'         ?3                  	;0
816  439   FETCH_STATIC_PROP_FUNC_ARG/177 $395=     574:'rRequest'       575:'XUI'           	;4
817  439   FETCH_DIM_FUNC_ARG/93     $396=     $395                 577:'mag_id'        	;4
818  439   SEND_VAR_EX/66            ?128      $396                 ?4                  	;0
819  439   SEND_VAL_EX/116           ?144      578:0                ?5                  	;0
820  439   FETCH_DIM_FUNC_ARG/93     $397=     16?4                 579:'credits'       	;6
821  439   SEND_VAR_EX/66            ?160      $397                 ?6                  	;0
822  439   INIT_FCALL_BY_NAME/59     ?0        ?0                   580:'time'          	;0
823  439   DO_FCALL_BY_NAME/131      $398=     ?0                   ?0                  	;0
824  439   SEND_VAR_NO_REF_EX/50     ?176      $398                 ?7                  	;0
825  439   INIT_FCALL_BY_NAME/59     ?0        ?0                   582:'json_encode'   	;1
826  439   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
827  439   DO_FCALL_BY_NAME/131      $399=     ?0                   ?0                  	;0
828  439   SEND_VAR_NO_REF_EX/50     ?192      $399                 ?8                  	;0
829  439   DO_FCALL/60               ?349      ?0                   ?0                  	;0
830  440   GOTO/253                  ?0        ?2432                ?584                	;0
831  443   GOTO/253                  ?0        ?1963                ?585                	;0
832  445   ASSIGN/38                 ?350      16?14                586:array (
  'total_connections' => 0,
  'total_users' => 0,
)	;0
833  446   FETCH_STATIC_PROP_R/173   $402=     587:'rSettings'      588:'XUI'           	;0
834  446   FETCH_DIM_R/81            $403=     $402                 590:'redis_handler' 	;0
835  446   JMPZ/43                   ?0        $403                 ?837                	;0	>>837
836  447   GOTO/253                  ?0        ?46                  ?591                	;0
837  449   GOTO/253                  ?0        ?2491                ?592                	;0	<<835
838  451   INIT_STATIC_METHOD_CALL/113 ?0        593:'XUI'            595:'a96aB74F1921d4ad'	;2
839  451   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
840  451   SEND_VAL_EX/116           ?96       597:true             ?2                  	;0
841  451   DO_FCALL/60               $404=     ?0                   ?0                  	;0
842  451   FE_RESET_R/77             $405=     $404                 ?856                	;0
843  451   FE_FETCH_R/78             #406=     $405                 16?15               	;856	>>856	<<855
844  451   ASSIGN/38                 ?356      16?16                #406                	;0
845  452   ASSIGN_ADD/23             ?357      16?14                598:'open_connections'	;147
846  452   OP_DATA/137               ?0        16?15                ?0                  	;0
847  453   IS_SMALLER/19             #409=     599:0                16?15               	;0
848  453   BOOL_NOT/13               #410=     #409                 ?0                  	;0
849  453   JMPZ/43                   ?0        #410                 ?852                	;0	>>852
850  454   NOP/0                     ?0        ?0                   ?0                  	;1
851  454   GOTO/253                  ?0        ?855                 ?600                	;0
852  456   FETCH_DIM_RW/87           $411=     16?14                601:'online_users'  	;0	<<849
853  456   POST_INC/36               #412=     $411                 ?0                  	;0
854  456   FREE/70                   ?0        #412                 ?0                  	;0
855  458   JMP/42                    ?0        ?843                 ?0                  	;0	>>843
856  458   FE_FREE/127               ?0        $405                 ?0                  	;0	<<842
857  463   INIT_METHOD_CALL/112      ?0        16?0                 602:'query'         	;1
858  463   INIT_FCALL_BY_NAME/59     ?0        ?0                   604:'implode'       	;2
859  463   SEND_VAL_EX/116           ?80       606:','              ?1                  	;0
860  463   FETCH_DIM_FUNC_ARG/93     $413=     16?4                 607:'reports'       	;2
861  463   SEND_VAR_EX/66            ?96       $413                 ?2                  	;0
862  463   DO_FCALL_BY_NAME/131      $414=     ?0                   ?0                  	;0
863  463   CONCAT/8                  #415=     608:'SELECT COUNT(`id`) AS `count` FROM `lines` WHERE `member_id` IN (' $414                	;0
864  463   CONCAT/8                  #416=     #415                 609:');'            	;0
865  463   SEND_VAL_EX/116           ?80       #416                 ?1                  	;0
866  463   DO_FCALL/60               ?366      ?0                   ?0                  	;0
867  464   GOTO/253                  ?0        ?2116                ?610                	;0
868  466   INIT_STATIC_METHOD_CALL/113 ?0        611:'XUI'            613:'b0020C716fdF67bB'	;1
869  466   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
870  466   DO_FCALL/60               ?367      ?0                   ?0                  	;0
871  467   INIT_FCALL_BY_NAME/59     ?0        ?0                   615:'json_encode'   	;1
872  467   SEND_VAL_EX/116           ?80       617:array (
  'result' => true,
) ?1                  	;0
873  467   DO_FCALL_BY_NAME/131      $419=     ?0                   ?0                  	;0
874  467   ECHO/40                   ?0        $419                 ?0                  	;0
875  468   EXIT/79                   ?0        ?0                   ?0                  	;0
876  471   GOTO/253                  ?0        ?650                 ?618                	;0
877  474   INIT_FCALL_BY_NAME/59     ?0        ?0                   619:'a486863E198221Fa'	;4
878  474   FETCH_STATIC_PROP_FUNC_ARG/177 $420=     621:'rRequest'       622:'XUI'           	;1
879  474   FETCH_DIM_FUNC_ARG/93     $421=     $420                 624:'e2_id'         	;1
880  474   SEND_VAR_EX/66            ?80       $421                 ?1                  	;0
881  474   SEND_VAL_EX/116           ?96       625:false            ?2                  	;0
882  474   SEND_VAL_EX/116           ?112      626:false            ?3                  	;0
883  474   SEND_VAL_EX/116           ?128      627:true             ?4                  	;0
884  474   DO_FCALL_BY_NAME/131      ?371      ?0                   ?0                  	;0
885  475   INIT_METHOD_CALL/112      ?0        16?0                 628:'query'         	;8
886  475   SEND_VAL_EX/116           ?80       630:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
887  475   FETCH_DIM_FUNC_ARG/93     $423=     16?4                 631:'id'            	;2
888  475   SEND_VAR_EX/66            ?96       $423                 ?2                  	;0
889  475   SEND_VAL_EX/116           ?112      632:'convert'        ?3                  	;0
890  475   FETCH_DIM_FUNC_ARG/93     $424=     16?17                633:'user'          	;4
891  475   FETCH_DIM_FUNC_ARG/93     $425=     $424                 634:'id'            	;4
892  475   SEND_VAR_EX/66            ?128      $425                 ?4                  	;0
893  475   SEND_VAL_EX/116           ?144      635:0                ?5                  	;0
894  475   FETCH_DIM_FUNC_ARG/93     $426=     16?4                 636:'credits'       	;6
895  475   SEND_VAR_EX/66            ?160      $426                 ?6                  	;0
896  475   INIT_FCALL_BY_NAME/59     ?0        ?0                   637:'time'          	;0
897  475   DO_FCALL_BY_NAME/131      $427=     ?0                   ?0                  	;0
898  475   SEND_VAR_NO_REF_EX/50     ?176      $427                 ?7                  	;0
899  475   INIT_FCALL_BY_NAME/59     ?0        ?0                   639:'json_encode'   	;1
900  475   FETCH_DIM_FUNC_ARG/93     $428=     16?17                641:'user'          	;1
901  475   SEND_VAR_EX/66            ?80       $428                 ?1                  	;0
902  475   DO_FCALL_BY_NAME/131      $429=     ?0                   ?0                  	;0
903  475   SEND_VAR_NO_REF_EX/50     ?192      $429                 ?8                  	;0
904  475   DO_FCALL/60               ?379      ?0                   ?0                  	;0
905  476   INIT_FCALL_BY_NAME/59     ?0        ?0                   642:'json_encode'   	;1
906  476   INIT_ARRAY/71             #431=     644:true             645:'result'        	;10
907  476   FETCH_DIM_R/81            $432=     16?17                646:'user'          	;0
908  476   FETCH_DIM_R/81            $433=     $432                 647:'id'            	;0
909  476   ADD_ARRAY_ELEMENT/72      #431=     $433                 648:'line_id'       	;0
910  476   SEND_VAL_EX/116           ?80       #431                 ?1                  	;0
911  476   DO_FCALL_BY_NAME/131      $434=     ?0                   ?0                  	;0
912  476   ECHO/40                   ?0        $434                 ?0                  	;0
913  477   EXIT/79                   ?0        ?0                   ?0                  	;0
914  478   GOTO/253                  ?0        ?926                 ?649                	;0
915  480   EXIT/79                   ?0        ?0                   ?0                  	;0
916  482   GOTO/253                  ?0        ?1874                ?650                	;0
917  484   INIT_FCALL_BY_NAME/59     ?0        ?0                   651:'dD81518D00a2dD90'	;4
918  484   FETCH_STATIC_PROP_FUNC_ARG/177 $435=     653:'rRequest'       654:'XUI'           	;1
919  484   FETCH_DIM_FUNC_ARG/93     $436=     $435                 656:'mag_id'        	;1
920  484   SEND_VAR_EX/66            ?80       $436                 ?1                  	;0
921  484   SEND_VAL_EX/116           ?96       657:false            ?2                  	;0
922  484   SEND_VAL_EX/116           ?112      658:false            ?3                  	;0
923  484   SEND_VAL_EX/116           ?128      659:true             ?4                  	;0
924  484   DO_FCALL_BY_NAME/131      ?386      ?0                   ?0                  	;0
925  485   GOTO/253                  ?0        ?1845                ?660                	;0
926  488   GOTO/253                  ?0        ?464                 ?661                	;0
927  490   INIT_METHOD_CALL/112      ?0        16?0                 662:'query'         	;2
928  490   SEND_VAL_EX/116           ?80       664:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
929  490   FETCH_DIM_FUNC_ARG/93     $438=     16?17                665:'user_id'       	;2
930  490   SEND_VAR_EX/66            ?96       $438                 ?2                  	;0
931  490   DO_FCALL/60               ?388      ?0                   ?0                  	;0
932  491   INIT_METHOD_CALL/112      ?0        16?0                 666:'query'         	;8
933  491   SEND_VAL_EX/116           ?80       668:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
934  491   FETCH_DIM_FUNC_ARG/93     $440=     16?4                 669:'id'            	;2
935  491   SEND_VAR_EX/66            ?96       $440                 ?2                  	;0
936  491   SEND_VAL_EX/116           ?112      670:'disable'        ?3                  	;0
937  491   FETCH_STATIC_PROP_FUNC_ARG/177 $441=     671:'rRequest'       672:'XUI'           	;4
938  491   FETCH_DIM_FUNC_ARG/93     $442=     $441                 674:'e2_id'         	;4
939  491   SEND_VAR_EX/66            ?128      $442                 ?4                  	;0
940  491   SEND_VAL_EX/116           ?144      675:0                ?5                  	;0
941  491   FETCH_DIM_FUNC_ARG/93     $443=     16?4                 676:'credits'       	;6
942  491   SEND_VAR_EX/66            ?160      $443                 ?6                  	;0
943  491   INIT_FCALL_BY_NAME/59     ?0        ?0                   677:'time'          	;0
944  491   DO_FCALL_BY_NAME/131      $444=     ?0                   ?0                  	;0
945  491   SEND_VAR_NO_REF_EX/50     ?176      $444                 ?7                  	;0
946  491   INIT_FCALL_BY_NAME/59     ?0        ?0                   679:'json_encode'   	;1
947  491   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
948  491   DO_FCALL_BY_NAME/131      $445=     ?0                   ?0                  	;0
949  491   SEND_VAR_NO_REF_EX/50     ?192      $445                 ?8                  	;0
950  491   DO_FCALL/60               ?395      ?0                   ?0                  	;0
951  492   GOTO/253                  ?0        ?459                 ?681                	;0
952  494   INIT_METHOD_CALL/112      ?0        16?0                 682:'query'         	;2
953  494   SEND_VAL_EX/116           ?80       684:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
954  494   FETCH_DIM_FUNC_ARG/93     $447=     16?17                685:'user_id'       	;2
955  494   SEND_VAR_EX/66            ?96       $447                 ?2                  	;0
956  494   DO_FCALL/60               ?397      ?0                   ?0                  	;0
957  495   INIT_METHOD_CALL/112      ?0        16?0                 686:'query'         	;8
958  495   SEND_VAL_EX/116           ?80       688:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
959  495   FETCH_DIM_FUNC_ARG/93     $449=     16?4                 689:'id'            	;2
960  495   SEND_VAR_EX/66            ?96       $449                 ?2                  	;0
961  495   SEND_VAL_EX/116           ?112      690:'enable'         ?3                  	;0
962  495   FETCH_STATIC_PROP_FUNC_ARG/177 $450=     691:'rRequest'       692:'XUI'           	;4
963  495   FETCH_DIM_FUNC_ARG/93     $451=     $450                 694:'e2_id'         	;4
964  495   SEND_VAR_EX/66            ?128      $451                 ?4                  	;0
965  495   SEND_VAL_EX/116           ?144      695:0                ?5                  	;0
966  495   FETCH_DIM_FUNC_ARG/93     $452=     16?4                 696:'credits'       	;6
967  495   SEND_VAR_EX/66            ?160      $452                 ?6                  	;0
968  495   INIT_FCALL_BY_NAME/59     ?0        ?0                   697:'time'          	;0
969  495   DO_FCALL_BY_NAME/131      $453=     ?0                   ?0                  	;0
970  495   SEND_VAR_NO_REF_EX/50     ?176      $453                 ?7                  	;0
971  495   INIT_FCALL_BY_NAME/59     ?0        ?0                   699:'json_encode'   	;1
972  495   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
973  495   DO_FCALL_BY_NAME/131      $454=     ?0                   ?0                  	;0
974  495   SEND_VAR_NO_REF_EX/50     ?192      $454                 ?8                  	;0
975  495   DO_FCALL/60               ?404      ?0                   ?0                  	;0
976  496   INIT_FCALL_BY_NAME/59     ?0        ?0                   701:'json_encode'   	;1
977  496   SEND_VAL_EX/116           ?80       703:array (
  'result' => true,
) ?1                  	;0
978  496   DO_FCALL_BY_NAME/131      $456=     ?0                   ?0                  	;0
979  496   ECHO/40                   ?0        $456                 ?0                  	;0
980  497   EXIT/79                   ?0        ?0                   ?0                  	;0
981  499   GOTO/253                  ?0        ?2439                ?704                	;0
982  501   ASSIGN/38                 ?406      16?3                 705:array (
)       	;0
983  502   INIT_METHOD_CALL/112      ?0        16?0                 706:'query'         	;1
984  502   INIT_FCALL_BY_NAME/59     ?0        ?0                   708:'implode'       	;2
985  502   SEND_VAL_EX/116           ?80       710:','              ?1                  	;0
986  502   FETCH_DIM_FUNC_ARG/93     $458=     16?4                 711:'reports'       	;2
987  502   SEND_VAR_EX/66            ?96       $458                 ?2                  	;0
988  502   DO_FCALL_BY_NAME/131      $459=     ?0                   ?0                  	;0
989  502   CONCAT/8                  #460=     712:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $459                	;0
990  502   CONCAT/8                  #461=     #460                 713:');'            	;0
991  502   SEND_VAL_EX/116           ?80       #461                 ?1                  	;0
992  502   DO_FCALL/60               ?411      ?0                   ?0                  	;0
993  503   INIT_METHOD_CALL/112      ?0        16?0                 714:'get_rows'      	;0
994  503   DO_FCALL/60               $463=     ?0                   ?0                  	;0
995  503   FE_RESET_R/77             $464=     $463                 ?1001               	;0
996  503   FE_FETCH_R/78             ?0        $464                 16?1                	;1001	>>1001	<<1000
997  504   FETCH_DIM_R/81            $466=     16?1                 716:'id'            	;0
998  504   ASSIGN_DIM/147            ?414      16?3                 ?4414262            	;0
999  504   OP_DATA/137               ?0        $466                 ?0                  	;0
1000 505   JMP/42                    ?0        ?996                 ?0                  	;0	>>996
1001 505   FE_FREE/127               ?0        $464                 ?0                  	;0	<<995
1002 508   INIT_FCALL_BY_NAME/59     ?0        ?0                   717:'count'         	;1
1003 508   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
1004 508   DO_FCALL_BY_NAME/131      $467=     ?0                   ?0                  	;0
1005 508   IS_SMALLER/19             #468=     719:0                $467                	;0
1006 508   BOOL_NOT/13               #469=     #468                 ?0                  	;0
1007 508   JMPZ/43                   ?0        #469                 ?1009               	;0	>>1009
1008 509   GOTO/253                  ?0        ?857                 ?720                	;0
1009 511   GOTO/253                  ?0        ?838                 ?721                	;0	<<1007
1010 514   GOTO/253                  ?0        ?916                 ?722                	;0
1011 516   INIT_METHOD_CALL/112      ?0        16?0                 723:'query'         	;2
1012 516   SEND_VAL_EX/116           ?80       725:'UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `id` = ?;' ?1                  	;0
1013 516   FETCH_DIM_FUNC_ARG/93     $470=     16?2                 726:'user'          	;2
1014 516   FETCH_DIM_FUNC_ARG/93     $471=     $470                 727:'id'            	;2
1015 516   SEND_VAR_EX/66            ?96       $471                 ?2                  	;0
1016 516   DO_FCALL/60               ?421      ?0                   ?0                  	;0
1017 517   INIT_FCALL_BY_NAME/59     ?0        ?0                   728:'json_encode'   	;1
1018 517   SEND_VAL_EX/116           ?80       730:array (
  'result' => true,
) ?1                  	;0
1019 517   DO_FCALL_BY_NAME/131      $473=     ?0                   ?0                  	;0
1020 517   ECHO/40                   ?0        $473                 ?0                  	;0
1021 518   GOTO/253                  ?0        ?915                 ?731                	;0
1022 521   GOTO/253                  ?0        ?1843                ?732                	;0
1023 523   INIT_METHOD_CALL/112      ?0        16?0                 733:'query'         	;2
1024 523   SEND_VAL_EX/116           ?80       735:'UPDATE `users` SET `status` = 1 WHERE `id` = ?;' ?1                  	;0
1025 523   FETCH_STATIC_PROP_FUNC_ARG/177 $474=     736:'rRequest'       737:'XUI'           	;2
1026 523   FETCH_DIM_FUNC_ARG/93     $475=     $474                 739:'user_id'       	;2
1027 523   SEND_VAR_EX/66            ?96       $475                 ?2                  	;0
1028 523   DO_FCALL/60               ?425      ?0                   ?0                  	;0
1029 524   INIT_METHOD_CALL/112      ?0        16?0                 740:'query'         	;8
1030 524   SEND_VAL_EX/116           ?80       742:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1031 524   FETCH_DIM_FUNC_ARG/93     $477=     16?4                 743:'id'            	;2
1032 524   SEND_VAR_EX/66            ?96       $477                 ?2                  	;0
1033 524   SEND_VAL_EX/116           ?112      744:'enable'         ?3                  	;0
1034 524   FETCH_STATIC_PROP_FUNC_ARG/177 $478=     745:'rRequest'       746:'XUI'           	;4
1035 524   FETCH_DIM_FUNC_ARG/93     $479=     $478                 748:'user_id'       	;4
1036 524   SEND_VAR_EX/66            ?128      $479                 ?4                  	;0
1037 524   SEND_VAL_EX/116           ?144      749:0                ?5                  	;0
1038 524   FETCH_DIM_FUNC_ARG/93     $480=     16?4                 750:'credits'       	;6
1039 524   SEND_VAR_EX/66            ?160      $480                 ?6                  	;0
1040 524   INIT_FCALL_BY_NAME/59     ?0        ?0                   751:'time'          	;0
1041 524   DO_FCALL_BY_NAME/131      $481=     ?0                   ?0                  	;0
1042 524   SEND_VAR_NO_REF_EX/50     ?176      $481                 ?7                  	;0
1043 524   INIT_FCALL_BY_NAME/59     ?0        ?0                   753:'json_encode'   	;1
1044 524   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
1045 524   DO_FCALL_BY_NAME/131      $482=     ?0                   ?0                  	;0
1046 524   SEND_VAR_NO_REF_EX/50     ?192      $482                 ?8                  	;0
1047 524   DO_FCALL/60               ?432      ?0                   ?0                  	;0
1048 525   GOTO/253                  ?0        ?1838                ?755                	;0
1049 527   EXIT/79                   ?0        ?0                   ?0                  	;0
1050 529   GOTO/253                  ?0        ?286                 ?756                	;0
1051 531   FETCH_STATIC_PROP_R/173   $484=     757:'rRequest'       758:'XUI'           	;0
1052 531   FETCH_DIM_R/81            $485=     $484                 760:'ip'            	;0
1053 531   ASSIGN/38                 ?435      16?33                $485                	;0
1054 532   GOTO/253                  ?0        ?2613                ?761                	;0
1055 534   INIT_FCALL_BY_NAME/59     ?0        ?0                   762:'json_encode'   	;1
1056 534   SEND_VAL_EX/116           ?80       764:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
1057 534   DO_FCALL_BY_NAME/131      $487=     ?0                   ?0                  	;0
1058 534   ECHO/40                   ?0        $487                 ?0                  	;0
1059 535   EXIT/79                   ?0        ?0                   ?0                  	;0
1060 537   FETCH_DIM_R/81            $488=     16?12                765:'type'          	;0
1061 537   IS_EQUAL/17               #489=     $488                 766:'send_msg'      	;0
1062 537   JMPZ/43                   ?0        #489                 ?1064               	;0	>>1064
1063 538   GOTO/253                  ?0        ?2939                ?767                	;0
1064 540   FETCH_DIM_R/81            $490=     16?12                768:'type'          	;0	<<1062
1065 540   IS_EQUAL/17               #491=     $490                 769:'play_channel'  	;0
1066 540   JMPZ/43                   ?0        #491                 ?1068               	;0	>>1068
1067 541   GOTO/253                  ?0        ?2421                ?770                	;0
1068 543   GOTO/253                  ?0        ?2828                ?771                	;0	<<1066
1069 545   GOTO/253                  ?0        ?1076                ?772                	;0
1070 547   INIT_FCALL_BY_NAME/59     ?0        ?0                   773:'intval'        	;1
1071 547   FETCH_STATIC_PROP_FUNC_ARG/177 $492=     775:'rRequest'       776:'XUI'           	;1
1072 547   FETCH_DIM_FUNC_ARG/93     $493=     $492                 778:'page'          	;1
1073 547   SEND_VAR_EX/66            ?80       $493                 ?1                  	;0
1074 547   DO_FCALL_BY_NAME/131      $494=     ?0                   ?0                  	;0
1075 547   ASSIGN/38                 ?444      16?24                $494                	;0
1076 549   INIT_METHOD_CALL/112      ?0        16?0                 779:'query'         	;4
1077 549   INIT_FCALL_BY_NAME/59     ?0        ?0                   781:'implode'       	;2
1078 549   SEND_VAL_EX/116           ?80       783:','              ?1                  	;0
1079 549   FETCH_DIM_FUNC_ARG/93     $496=     16?4                 784:'reports'       	;2
1080 549   SEND_VAR_EX/66            ?96       $496                 ?2                  	;0
1081 549   DO_FCALL_BY_NAME/131      $497=     ?0                   ?0                  	;0
1082 549   CONCAT/8                  #498=     785:'SELECT COUNT(`id`) AS `id` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `lines`.`member_id` IN (' $497                	;0
1083 549   CONCAT/8                  #499=     #498                 786:') AND (`lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ?);'	;0
1084 549   SEND_VAL_EX/116           ?80       #499                 ?1                  	;0
1085 549   FETCH_STATIC_PROP_R/173   $500=     787:'rRequest'       788:'XUI'           	;0
1086 549   FETCH_DIM_R/81            $501=     $500                 790:'search'        	;0
1087 549   CONCAT/8                  #502=     791:'%'              $501                	;0
1088 549   CONCAT/8                  #503=     #502                 792:'%'             	;0
1089 549   SEND_VAL_EX/116           ?96       #503                 ?2                  	;0
1090 549   FETCH_STATIC_PROP_R/173   $504=     793:'rRequest'       794:'XUI'           	;0
1091 549   FETCH_DIM_R/81            $505=     $504                 796:'search'        	;0
1092 549   CONCAT/8                  #506=     797:'%'              $505                	;0
1093 549   CONCAT/8                  #507=     #506                 798:'%'             	;0
1094 549   SEND_VAL_EX/116           ?112      #507                 ?3                  	;0
1095 549   FETCH_STATIC_PROP_R/173   $508=     799:'rRequest'       800:'XUI'           	;0
1096 549   FETCH_DIM_R/81            $509=     $508                 802:'search'        	;0
1097 549   CONCAT/8                  #510=     803:'%'              $509                	;0
1098 549   CONCAT/8                  #511=     #510                 804:'%'             	;0
1099 549   SEND_VAL_EX/116           ?128      #511                 ?4                  	;0
1100 549   DO_FCALL/60               ?461      ?0                   ?0                  	;0
1101 550   GOTO/253                  ?0        ?2257                ?805                	;0
1102 552   GOTO/253                  ?0        ?1590                ?806                	;0
1103 554   INIT_METHOD_CALL/112      ?0        16?0                 807:'query'         	;2
1104 554   SEND_VAL_EX/116           ?80       809:'UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;' ?1                  	;0
1105 554   SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
1106 554   DO_FCALL/60               ?462      ?0                   ?0                  	;0
1107 555   INIT_METHOD_CALL/112      ?0        16?0                 810:'query'         	;8
1108 555   SEND_VAL_EX/116           ?80       812:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1109 555   FETCH_DIM_FUNC_ARG/93     $514=     16?4                 813:'id'            	;2
1110 555   SEND_VAR_EX/66            ?96       $514                 ?2                  	;0
1111 555   SEND_VAL_EX/116           ?112      814:'enable'         ?3                  	;0
1112 555   FETCH_STATIC_PROP_FUNC_ARG/177 $515=     815:'rRequest'       816:'XUI'           	;4
1113 555   FETCH_DIM_FUNC_ARG/93     $516=     $515                 818:'user_id'       	;4
1114 555   SEND_VAR_EX/66            ?128      $516                 ?4                  	;0
1115 555   SEND_VAL_EX/116           ?144      819:0                ?5                  	;0
1116 555   FETCH_DIM_FUNC_ARG/93     $517=     16?4                 820:'credits'       	;6
1117 555   SEND_VAR_EX/66            ?160      $517                 ?6                  	;0
1118 555   INIT_FCALL_BY_NAME/59     ?0        ?0                   821:'time'          	;0
1119 555   DO_FCALL_BY_NAME/131      $518=     ?0                   ?0                  	;0
1120 555   SEND_VAR_NO_REF_EX/50     ?176      $518                 ?7                  	;0
1121 555   INIT_FCALL_BY_NAME/59     ?0        ?0                   823:'json_encode'   	;1
1122 555   SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
1123 555   DO_FCALL_BY_NAME/131      $519=     ?0                   ?0                  	;0
1124 555   SEND_VAR_NO_REF_EX/50     ?192      $519                 ?8                  	;0
1125 555   DO_FCALL/60               ?469      ?0                   ?0                  	;0
1126 556   INIT_FCALL_BY_NAME/59     ?0        ?0                   825:'json_encode'   	;1
1127 556   SEND_VAL_EX/116           ?80       827:array (
  'result' => true,
) ?1                  	;0
1128 556   DO_FCALL_BY_NAME/131      $521=     ?0                   ?0                  	;0
1129 556   ECHO/40                   ?0        $521                 ?0                  	;0
1130 557   GOTO/253                  ?0        ?1589                ?828                	;0
1131 559   GOTO/253                  ?0        ?2675                ?829                	;0
1132 561   FETCH_DIM_R/81            $522=     16?6                 830:'reseller_client_connection_logs'	;0
1133 561   JMPZ/43                   ?0        $522                 ?1135               	;0	>>1135
1134 562   GOTO/253                  ?0        ?1136                ?831                	;0
1135 564   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1133
1136 566   GOTO/253                  ?0        ?2697                ?832                	;0
1137 568   EXIT/79                   ?0        ?0                   ?0                  	;0
1138 570   INIT_FCALL_BY_NAME/59     ?0        ?0                   833:'e589A4BF54A2DAD1'	;2
1139 570   SEND_VAL_EX/116           ?80       835:'user'           ?1                  	;0
1140 570   FETCH_STATIC_PROP_FUNC_ARG/177 $523=     836:'rRequest'       837:'XUI'           	;2
1141 570   FETCH_DIM_FUNC_ARG/93     $524=     $523                 839:'user_id'       	;2
1142 570   SEND_VAR_EX/66            ?96       $524                 ?2                  	;0
1143 570   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
1144 570   JMPZ/43                   ?0        $525                 ?1146               	;0	>>1146
1145 571   GOTO/253                  ?0        ?1371                ?840                	;0
1146 573   INIT_FCALL_BY_NAME/59     ?0        ?0                   841:'json_encode'   	;1	<<1144
1147 573   SEND_VAL_EX/116           ?80       843:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
1148 573   DO_FCALL_BY_NAME/131      $526=     ?0                   ?0                  	;0
1149 573   ECHO/40                   ?0        $526                 ?0                  	;0
1150 574   EXIT/79                   ?0        ?0                   ?0                  	;0
1151 575   GOTO/253                  ?0        ?1371                ?844                	;0
1152 578   FETCH_DIM_R/81            $527=     16?6                 845:'create_line'   	;0
1153 578   JMPZ/43                   ?0        $527                 ?1155               	;0	>>1155
1154 579   GOTO/253                  ?0        ?1156                ?846                	;0
1155 581   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1153
1156 583   FETCH_STATIC_PROP_R/173   $528=     847:'rRequest'       848:'XUI'           	;0
1157 583   FETCH_DIM_R/81            $529=     $528                 850:'sub'           	;0
1158 583   ASSIGN/38                 ?479      16?5                 $529                	;0
1159 584   GOTO/253                  ?0        ?2780                ?851                	;0
1160 586   INIT_METHOD_CALL/112      ?0        16?0                 852:'query'         	;8
1161 586   SEND_VAL_EX/116           ?80       854:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1162 586   FETCH_DIM_FUNC_ARG/93     $531=     16?4                 855:'id'            	;2
1163 586   SEND_VAR_EX/66            ?96       $531                 ?2                  	;0
1164 586   SEND_VAL_EX/116           ?112      856:'delete'         ?3                  	;0
1165 586   FETCH_STATIC_PROP_FUNC_ARG/177 $532=     857:'rRequest'       858:'XUI'           	;4
1166 586   FETCH_DIM_FUNC_ARG/93     $533=     $532                 860:'user_id'       	;4
1167 586   SEND_VAR_EX/66            ?128      $533                 ?4                  	;0
1168 586   SEND_VAL_EX/116           ?144      861:0                ?5                  	;0
1169 586   FETCH_DIM_FUNC_ARG/93     $534=     16?4                 862:'credits'       	;6
1170 586   SEND_VAR_EX/66            ?160      $534                 ?6                  	;0
1171 586   INIT_FCALL_BY_NAME/59     ?0        ?0                   863:'time'          	;0
1172 586   DO_FCALL_BY_NAME/131      $535=     ?0                   ?0                  	;0
1173 586   SEND_VAR_NO_REF_EX/50     ?176      $535                 ?7                  	;0
1174 586   INIT_FCALL_BY_NAME/59     ?0        ?0                   865:'json_encode'   	;1
1175 586   SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
1176 586   DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
1177 586   SEND_VAR_NO_REF_EX/50     ?192      $536                 ?8                  	;0
1178 586   DO_FCALL/60               ?486      ?0                   ?0                  	;0
1179 587   INIT_FCALL_BY_NAME/59     ?0        ?0                   867:'json_encode'   	;1
1180 587   SEND_VAL_EX/116           ?80       869:array (
  'result' => true,
) ?1                  	;0
1181 587   DO_FCALL_BY_NAME/131      $538=     ?0                   ?0                  	;0
1182 587   ECHO/40                   ?0        $538                 ?0                  	;0
1183 588   EXIT/79                   ?0        ?0                   ?0                  	;0
1184 591   GOTO/253                  ?0        ?1131                ?870                	;0
1185 593   ASSIGN/38                 ?488      16?35                871:array (
  'ChannelId' => NULL,
  'Title' => 'No Programme Information...',
  'RelativeSize' => 100,
  'StartTime' => '',
  'EndTime' => '',
  'Specialisation' => 'tv',
  'Archive' => NULL,
)	;0
1186 594   INIT_METHOD_CALL/112      ?0        16?0                 872:'query'         	;1
1187 594   INIT_FCALL_BY_NAME/59     ?0        ?0                   874:'implode'       	;2
1188 594   SEND_VAL_EX/116           ?80       876:','              ?1                  	;0
1189 594   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
1190 594   DO_FCALL_BY_NAME/131      $540=     ?0                   ?0                  	;0
1191 594   CONCAT/8                  #541=     877:'SELECT `id`, `stream_icon`, `stream_display_name`, `tv_archive_duration`, `tv_archive_server_id`, `category_id` FROM `streams` WHERE `id` IN (' $540                	;0
1192 594   CONCAT/8                  #542=     #541                 878:') ORDER BY FIELD(`id`, '	;0
1193 594   INIT_FCALL_BY_NAME/59     ?0        ?0                   879:'implode'       	;2
1194 594   SEND_VAL_EX/116           ?80       881:','              ?1                  	;0
1195 594   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
1196 594   DO_FCALL_BY_NAME/131      $543=     ?0                   ?0                  	;0
1197 594   CONCAT/8                  #544=     #542                 $543                	;0
1198 594   CONCAT/8                  #545=     #544                 882:') ASC;'        	;0
1199 594   SEND_VAL_EX/116           ?80       #545                 ?1                  	;0
1200 594   DO_FCALL/60               ?495      ?0                   ?0                  	;0
1201 595   INIT_METHOD_CALL/112      ?0        16?0                 883:'get_rows'      	;0
1202 595   DO_FCALL/60               $547=     ?0                   ?0                  	;0
1203 595   FE_RESET_R/77             $548=     $547                 ?1309               	;0
1204 595   FE_FETCH_R/78             ?0        $548                 16?36               	;1309	>>1309	<<1308
1205 596   NOP/0                     ?0        ?0                   ?0                  	;1
1206 596   GOTO/253                  ?0        ?1207                ?885                	;0
1207 598   FETCH_DIM_R/81            $549=     16?36                886:'tv_archive_duration'	;0
1208 598   IS_SMALLER/19             #550=     887:0                $549                	;0
1209 598   JMPZ_EX/46                #550=     #550                 ?1213               	;0	>>1213
1210 598   FETCH_DIM_R/81            $551=     16?36                888:'tv_archive_server_id'	;0
1211 598   IS_SMALLER/19             #552=     889:0                $551                	;0
1212 598   BOOL/52                   #550=     #552                 ?0                  	;0
1213 598   JMPZ/43                   ?0        #550                 ?1216               	;0	>>1216	<<1209
1214 599   NOP/0                     ?0        ?0                   ?0                  	;1
1215 599   GOTO/253                  ?0        ?1219                ?890                	;0
1216 601   ASSIGN/38                 ?502      16?32                891:0               	;0	<<1213
1217 602   NOP/0                     ?0        ?0                   ?0                  	;1
1218 602   GOTO/253                  ?0        ?1252                ?892                	;0
1219 604   FETCH_DIM_R/81            $554=     16?36                893:'tv_archive_duration'	;0
1220 604   ASSIGN/38                 ?504      16?32                $554                	;0
1221 605   NOP/0                     ?0        ?0                   ?0                  	;1
1222 605   GOTO/253                  ?0        ?1252                ?894                	;0
1223 607   INIT_FCALL_BY_NAME/59     ?0        ?0                   895:'strlen'        	;1
1224 607   FETCH_STATIC_PROP_FUNC_ARG/177 $556=     897:'rRequest'       898:'XUI'           	;1
1225 607   FETCH_DIM_FUNC_ARG/93     $557=     $556                 900:'category'      	;1
1226 607   SEND_VAR_EX/66            ?80       $557                 ?1                  	;0
1227 607   DO_FCALL_BY_NAME/131      $558=     ?0                   ?0                  	;0
1228 607   IS_SMALLER/19             #559=     901:0                $558                	;0
1229 607   JMPZ/43                   ?0        #559                 ?1232               	;0	>>1232
1230 608   NOP/0                     ?0        ?0                   ?0                  	;1
1231 608   GOTO/253                  ?0        ?1240                ?902                	;0
1232 610   FETCH_DIM_R/81            $560=     16?39                903:0               	;0	<<1229
1233 610   FETCH_DIM_R/81            $561=     16?38                $560                	;0
1234 610   FETCH_DIM_R/81            $562=     $561                 904:'category_name' 	;0
1235 610   JMP_SET/152               #563=     $562                 ?1237               	;0
1236 610   QM_ASSIGN/22              #563=     905:'No Category'    ?0                  	;0
1237 610   ASSIGN/38                 ?513      16?37                #563                	;0
1238 611   NOP/0                     ?0        ?0                   ?0                  	;1
1239 611   GOTO/253                  ?0        ?1270                ?906                	;0
1240 613   INIT_FCALL_BY_NAME/59     ?0        ?0                   907:'intval'        	;1
1241 613   FETCH_STATIC_PROP_FUNC_ARG/177 $565=     909:'rRequest'       910:'XUI'           	;1
1242 613   FETCH_DIM_FUNC_ARG/93     $566=     $565                 912:'category'      	;1
1243 613   SEND_VAR_EX/66            ?80       $566                 ?1                  	;0
1244 613   DO_FCALL_BY_NAME/131      $567=     ?0                   ?0                  	;0
1245 613   FETCH_DIM_R/81            $568=     16?38                $567                	;0
1246 613   FETCH_DIM_R/81            $569=     $568                 913:'category_name' 	;0
1247 613   JMP_SET/152               #570=     $569                 ?1249               	;0
1248 613   QM_ASSIGN/22              #570=     914:'No Category'    ?0                  	;0
1249 613   ASSIGN/38                 ?520      16?37                #570                	;0
1250 614   NOP/0                     ?0        ?0                   ?0                  	;1
1251 614   GOTO/253                  ?0        ?1270                ?915                	;0
1252 617   ASSIGN/38                 ?521      16?40                16?35               	;0
1253 618   FETCH_DIM_R/81            $574=     16?36                917:'id'            	;0
1254 618   ASSIGN_DIM/147            ?522      16?40                916:'ChannelId'     	;0
1255 618   OP_DATA/137               ?0        $574                 ?0                  	;0
1256 619   INIT_FCALL_BY_NAME/59     ?0        ?0                   918:'json_decode'   	;2
1257 619   FETCH_DIM_FUNC_ARG/93     $575=     16?36                920:'category_id'   	;1
1258 619   SEND_VAR_EX/66            ?80       $575                 ?1                  	;0
1259 619   SEND_VAL_EX/116           ?96       921:true             ?2                  	;0
1260 619   DO_FCALL_BY_NAME/131      $576=     ?0                   ?0                  	;0
1261 619   ASSIGN/38                 ?526      16?39                $576                	;0
1262 620   INIT_FCALL_BY_NAME/59     ?0        ?0                   922:'F769e3f0c739D1A6'	;1
1263 620   SEND_VAL_EX/116           ?80       924:'live'           ?1                  	;0
1264 620   DO_FCALL_BY_NAME/131      $578=     ?0                   ?0                  	;0
1265 620   ASSIGN/38                 ?528      16?38                $578                	;0
1266 621   NOP/0                     ?0        ?0                   ?0                  	;1
1267 621   GOTO/253                  ?0        ?1223                ?925                	;0
1268 624   NOP/0                     ?0        ?0                   ?0                  	;1
1269 624   GOTO/253                  ?0        ?1308                ?926                	;0
1270 627   INIT_FCALL_BY_NAME/59     ?0        ?0                   927:'count'         	;1
1271 627   SEND_VAR_EX/66            ?80       16?39                ?1                  	;0
1272 627   DO_FCALL_BY_NAME/131      $580=     ?0                   ?0                  	;0
1273 627   IS_SMALLER/19             #581=     929:1                $580                	;0
1274 627   BOOL_NOT/13               #582=     #581                 ?0                  	;0
1275 627   JMPZ/43                   ?0        #582                 ?1278               	;0	>>1278
1276 628   NOP/0                     ?0        ?0                   ?0                  	;1
1277 628   GOTO/253                  ?0        ?1285                ?930                	;0
1278 630   INIT_FCALL_BY_NAME/59     ?0        ?0                   931:'count'         	;1	<<1275
1279 630   SEND_VAR_EX/66            ?80       16?39                ?1                  	;0
1280 630   DO_FCALL_BY_NAME/131      $583=     ?0                   ?0                  	;0
1281 630   SUB/2                     #584=     $583                 933:1               	;0
1282 630   CONCAT/8                  #585=     934:' (+'            #584                	;0
1283 630   CONCAT/8                  #586=     #585                 935:' others)'      	;0
1284 630   ASSIGN_CONCAT/30          ?536      16?37                #586                	;0
1285 632   INIT_ARRAY/71             #590=     937:0                938:'Id'            	;26
1286 632   FETCH_DIM_R/81            $591=     16?36                939:'stream_display_name'	;0
1287 632   ADD_ARRAY_ELEMENT/72      #590=     $591                 940:'DisplayName'   	;0
1288 632   ADD_ARRAY_ELEMENT/72      #590=     16?37                941:'CategoryName'  	;0
1289 632   ADD_ARRAY_ELEMENT/72      #590=     16?32                942:'Archive'       	;0
1290 632   INIT_STATIC_METHOD_CALL/113 ?0        943:'XUI'            945:'FCA722697178454B'	;1
1291 632   FETCH_DIM_FUNC_ARG/93     $592=     16?36                947:'stream_icon'   	;1
1292 632   SEND_VAR_EX/66            ?80       $592                 ?1                  	;0
1293 632   DO_FCALL/60               $593=     ?0                   ?0                  	;0
1294 632   JMP_SET/152               #594=     $593                 ?1296               	;0
1295 632   QM_ASSIGN/22              #594=     948:''               ?0                  	;0
1296 632   ADD_ARRAY_ELEMENT/72      #590=     #594                 949:'Image'         	;0
1297 632   FETCH_DIM_R/81            $595=     16?36                950:'id'            	;0
1298 632   FETCH_DIM_R/81            $596=     16?11                $595                	;0
1299 632   JMP_SET/152               #597=     $596                 ?1302               	;0
1300 632   INIT_ARRAY/71             #598=     16?40                ?0                  	;4
1301 632   QM_ASSIGN/22              #597=     #598                 ?0                  	;0
1302 632   ADD_ARRAY_ELEMENT/72      #590=     #597                 951:'TvListings'    	;0
1303 632   FETCH_DIM_W/84            $588=     16?14                936:'Channels'      	;0
1304 632   ASSIGN_DIM/147            ?538      $588                 ?4397406            	;0
1305 632   OP_DATA/137               ?0        #590                 ?0                  	;0
1306 633   NOP/0                     ?0        ?0                   ?0                  	;1
1307 633   GOTO/253                  ?0        ?1268                ?952                	;0
1308 634   JMP/42                    ?0        ?1204                ?0                  	;0	>>1204
1309 634   FE_FREE/127               ?0        $548                 ?0                  	;0	<<1203
1310 637   INIT_FCALL_BY_NAME/59     ?0        ?0                   953:'json_encode'   	;1
1311 637   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
1312 637   DO_FCALL_BY_NAME/131      $599=     ?0                   ?0                  	;0
1313 637   ECHO/40                   ?0        $599                 ?0                  	;0
1314 638   GOTO/253                  ?0        ?1049                ?955                	;0
1315 641   INIT_METHOD_CALL/112      ?0        16?0                 956:'query'         	;2
1316 641   SEND_VAL_EX/116           ?80       958:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
1317 641   FETCH_DIM_FUNC_ARG/93     $600=     16?2                 959:'user_id'       	;2
1318 641   SEND_VAR_EX/66            ?96       $600                 ?2                  	;0
1319 641   DO_FCALL/60               ?550      ?0                   ?0                  	;0
1320 642   INIT_METHOD_CALL/112      ?0        16?0                 960:'query'         	;8
1321 642   SEND_VAL_EX/116           ?80       962:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1322 642   FETCH_DIM_FUNC_ARG/93     $602=     16?4                 963:'id'            	;2
1323 642   SEND_VAR_EX/66            ?96       $602                 ?2                  	;0
1324 642   SEND_VAL_EX/116           ?112      964:'disable'        ?3                  	;0
1325 642   FETCH_STATIC_PROP_FUNC_ARG/177 $603=     965:'rRequest'       966:'XUI'           	;4
1326 642   FETCH_DIM_FUNC_ARG/93     $604=     $603                 968:'mag_id'        	;4
1327 642   SEND_VAR_EX/66            ?128      $604                 ?4                  	;0
1328 642   SEND_VAL_EX/116           ?144      969:0                ?5                  	;0
1329 642   FETCH_DIM_FUNC_ARG/93     $605=     16?4                 970:'credits'       	;6
1330 642   SEND_VAR_EX/66            ?160      $605                 ?6                  	;0
1331 642   INIT_FCALL_BY_NAME/59     ?0        ?0                   971:'time'          	;0
1332 642   DO_FCALL_BY_NAME/131      $606=     ?0                   ?0                  	;0
1333 642   SEND_VAR_NO_REF_EX/50     ?176      $606                 ?7                  	;0
1334 642   INIT_FCALL_BY_NAME/59     ?0        ?0                   973:'json_encode'   	;1
1335 642   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1336 642   DO_FCALL_BY_NAME/131      $607=     ?0                   ?0                  	;0
1337 642   SEND_VAR_NO_REF_EX/50     ?192      $607                 ?8                  	;0
1338 642   DO_FCALL/60               ?557      ?0                   ?0                  	;0
1339 643   INIT_FCALL_BY_NAME/59     ?0        ?0                   975:'json_encode'   	;1
1340 643   SEND_VAL_EX/116           ?80       977:array (
  'result' => true,
) ?1                  	;0
1341 643   DO_FCALL_BY_NAME/131      $609=     ?0                   ?0                  	;0
1342 643   ECHO/40                   ?0        $609                 ?0                  	;0
1343 644   EXIT/79                   ?0        ?0                   ?0                  	;0
1344 645   GOTO/253                  ?0        ?805                 ?978                	;0
1345 647   FETCH_STATIC_PROP_R/173   $610=     979:'rRequest'       980:'XUI'           	;0
1346 647   FETCH_DIM_R/81            $611=     $610                 982:'timezone'      	;0
1347 647   JMP_SET/152               #612=     $611                 ?1349               	;0
1348 647   QM_ASSIGN/22              #612=     983:'Europe/London'  ?0                  	;0
1349 647   ASSIGN/38                 ?562      16?41                #612                	;0
1350 648   INIT_FCALL_BY_NAME/59     ?0        ?0                   984:'date_default_timezone_set'	;1
1351 648   SEND_VAR_EX/66            ?80       16?41                ?1                  	;0
1352 648   DO_FCALL_BY_NAME/131      ?563      ?0                   ?0                  	;0
1353 649   FETCH_STATIC_PROP_IS/176  $615=     986:'rRequest'       987:'XUI'           	;0
1354 649   ISSET_ISEMPTY_DIM_OBJ/115 #616=     $615                 989:'id'            	;33554432
1355 649   BOOL_NOT/13               #617=     #616                 ?0                  	;0
1356 649   JMPZ/43                   ?0        #617                 ?1358               	;0	>>1358
1357 650   GOTO/253                  ?0        ?2109                ?990                	;0
1358 652   INIT_METHOD_CALL/112      ?0        16?0                 991:'query'         	;2	<<1356
1359 652   SEND_VAL_EX/116           ?80       993:'SELECT * FROM `epg_data` WHERE `id` = ?;' ?1                  	;0
1360 652   FETCH_STATIC_PROP_FUNC_ARG/177 $618=     994:'rRequest'       995:'XUI'           	;2
1361 652   FETCH_DIM_FUNC_ARG/93     $619=     $618                 997:'id'            	;2
1362 652   SEND_VAR_EX/66            ?96       $619                 ?2                  	;0
1363 652   DO_FCALL/60               ?569      ?0                   ?0                  	;0
1364 653   INIT_METHOD_CALL/112      ?0        16?0                 998:'num_rows'      	;0
1365 653   DO_FCALL/60               $621=     ?0                   ?0                  	;0
1366 653   IS_SMALLER/19             #622=     1000:0               $621                	;0
1367 653   BOOL_NOT/13               #623=     #622                 ?0                  	;0
1368 653   JMPZ/43                   ?0        #623                 ?1370               	;0	>>1370
1369 654   GOTO/253                  ?0        ?2363                ?1001               	;0
1370 656   GOTO/253                  ?0        ?2339                ?1002               	;0	<<1368
1371 659   FETCH_STATIC_PROP_R/173   $624=     1003:'rRequest'      1004:'XUI'          	;0
1372 659   FETCH_DIM_R/81            $625=     $624                 1006:'sub'          	;0
1373 659   ASSIGN/38                 ?575      16?5                 $625                	;0
1374 660   INIT_FCALL_BY_NAME/59     ?0        ?0                   1007:'bA89228dC958CE05'	;1
1375 660   FETCH_STATIC_PROP_FUNC_ARG/177 $627=     1009:'rRequest'      1010:'XUI'          	;1
1376 660   FETCH_DIM_FUNC_ARG/93     $628=     $627                 1012:'user_id'      	;1
1377 660   SEND_VAR_EX/66            ?80       $628                 ?1                  	;0
1378 660   DO_FCALL_BY_NAME/131      $629=     ?0                   ?0                  	;0
1379 660   ASSIGN/38                 ?579      16?20                $629                	;0
1380 661   IS_EQUAL/17               #631=     16?5                 1013:'delete'       	;0
1381 661   JMPZ/43                   ?0        #631                 ?1383               	;0	>>1383
1382 662   GOTO/253                  ?0        ?1844                ?1014               	;0
1383 664   IS_EQUAL/17               #632=     16?5                 1015:'enable'       	;0	<<1381
1384 664   JMPZ/43                   ?0        #632                 ?1386               	;0	>>1386
1385 665   GOTO/253                  ?0        ?1023                ?1016               	;0
1386 667   GOTO/253                  ?0        ?381                 ?1017               	;0	<<1384
1387 669   INIT_FCALL_BY_NAME/59     ?0        ?0                   1018:'Dd81518d00a2DD90'	;1
1388 669   FETCH_STATIC_PROP_FUNC_ARG/177 $633=     1020:'rRequest'      1021:'XUI'          	;1
1389 669   FETCH_DIM_FUNC_ARG/93     $634=     $633                 1023:'mag_id'       	;1
1390 669   SEND_VAR_EX/66            ?80       $634                 ?1                  	;0
1391 669   DO_FCALL_BY_NAME/131      ?584      ?0                   ?0                  	;0
1392 670   INIT_METHOD_CALL/112      ?0        16?0                 1024:'query'        	;8
1393 670   SEND_VAL_EX/116           ?80       1026:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1394 670   FETCH_DIM_FUNC_ARG/93     $636=     16?4                 1027:'id'           	;2
1395 670   SEND_VAR_EX/66            ?96       $636                 ?2                  	;0
1396 670   SEND_VAL_EX/116           ?112      1028:'delete'        ?3                  	;0
1397 670   FETCH_STATIC_PROP_FUNC_ARG/177 $637=     1029:'rRequest'      1030:'XUI'          	;4
1398 670   FETCH_DIM_FUNC_ARG/93     $638=     $637                 1032:'mag_id'       	;4
1399 670   SEND_VAR_EX/66            ?128      $638                 ?4                  	;0
1400 670   SEND_VAL_EX/116           ?144      1033:0               ?5                  	;0
1401 670   FETCH_DIM_FUNC_ARG/93     $639=     16?4                 1034:'credits'      	;6
1402 670   SEND_VAR_EX/66            ?160      $639                 ?6                  	;0
1403 670   INIT_FCALL_BY_NAME/59     ?0        ?0                   1035:'time'         	;0
1404 670   DO_FCALL_BY_NAME/131      $640=     ?0                   ?0                  	;0
1405 670   SEND_VAR_NO_REF_EX/50     ?176      $640                 ?7                  	;0
1406 670   INIT_FCALL_BY_NAME/59     ?0        ?0                   1037:'json_encode'  	;1
1407 670   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
1408 670   DO_FCALL_BY_NAME/131      $641=     ?0                   ?0                  	;0
1409 670   SEND_VAR_NO_REF_EX/50     ?192      $641                 ?8                  	;0
1410 670   DO_FCALL/60               ?591      ?0                   ?0                  	;0
1411 671   INIT_FCALL_BY_NAME/59     ?0        ?0                   1039:'json_encode'  	;1
1412 671   SEND_VAL_EX/116           ?80       1041:array (
  'result' => true,
) ?1                  	;0
1413 671   DO_FCALL_BY_NAME/131      $643=     ?0                   ?0                  	;0
1414 671   ECHO/40                   ?0        $643                 ?0                  	;0
1415 672   EXIT/79                   ?0        ?0                   ?0                  	;0
1416 674   GOTO/253                  ?0        ?1743                ?1042               	;0
1417 676   INIT_METHOD_CALL/112      ?0        16?0                 1043:'query'        	;1
1418 676   INIT_FCALL_BY_NAME/59     ?0        ?0                   1045:'implode'      	;2
1419 676   SEND_VAL_EX/116           ?80       1047:','             ?1                  	;0
1420 676   FETCH_DIM_FUNC_ARG/93     $644=     16?4                 1048:'reports'      	;2
1421 676   SEND_VAR_EX/66            ?96       $644                 ?2                  	;0
1422 676   DO_FCALL_BY_NAME/131      $645=     ?0                   ?0                  	;0
1423 676   CONCAT/8                  #646=     1049:'SELECT COUNT(`activity_id`) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' $645                	;0
1424 676   CONCAT/8                  #647=     #646                 1050:');'           	;0
1425 676   SEND_VAL_EX/116           ?80       #647                 ?1                  	;0
1426 676   DO_FCALL/60               ?597      ?0                   ?0                  	;0
1427 677   INIT_METHOD_CALL/112      ?0        16?0                 1052:'get_row'      	;0
1428 677   DO_FCALL/60               $650=     ?0                   ?0                  	;0
1429 677   FETCH_DIM_R/81            $651=     $650                 1054:'count'        	;0
1430 677   JMP_SET/152               #652=     $651                 ?1432               	;0
1431 677   QM_ASSIGN/22              #652=     1055:0               ?0                  	;0
1432 677   ASSIGN_DIM/147            ?598      16?14                1051:'open_connections'	;0
1433 677   OP_DATA/137               ?0        #652                 ?0                  	;0
1434 678   INIT_METHOD_CALL/112      ?0        16?0                 1056:'query'        	;1
1435 678   INIT_FCALL_BY_NAME/59     ?0        ?0                   1058:'implode'      	;2
1436 678   SEND_VAL_EX/116           ?80       1060:','             ?1                  	;0
1437 678   FETCH_DIM_FUNC_ARG/93     $653=     16?4                 1061:'reports'      	;2
1438 678   SEND_VAR_EX/66            ?96       $653                 ?2                  	;0
1439 678   DO_FCALL_BY_NAME/131      $654=     ?0                   ?0                  	;0
1440 678   CONCAT/8                  #655=     1062:'SELECT `activity_id` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' $654                	;0
1441 678   CONCAT/8                  #656=     #655                 1063:') GROUP BY `lines_live`.`user_id`;'	;0
1442 678   SEND_VAL_EX/116           ?80       #656                 ?1                  	;0
1443 678   DO_FCALL/60               ?606      ?0                   ?0                  	;0
1444 679   INIT_METHOD_CALL/112      ?0        16?0                 1065:'num_rows'     	;0
1445 679   DO_FCALL/60               $659=     ?0                   ?0                  	;0
1446 679   ASSIGN_DIM/147            ?607      16?14                1064:'online_users' 	;0
1447 679   OP_DATA/137               ?0        $659                 ?0                  	;0
1448 680   GOTO/253                  ?0        ?2034                ?1067               	;0
1449 681   GOTO/253                  ?0        ?438                 ?1068               	;0
1450 683   INIT_FCALL_BY_NAME/59     ?0        ?0                   1069:'json_encode'  	;1
1451 683   SEND_VAL_EX/116           ?80       1071:array (
  'result' => false,
) ?1                  	;0
1452 683   DO_FCALL_BY_NAME/131      $660=     ?0                   ?0                  	;0
1453 683   ECHO/40                   ?0        $660                 ?0                  	;0
1454 685   FETCH_STATIC_PROP_IS/176  $661=     1072:'rRequest'      1073:'XUI'          	;0
1455 685   ISSET_ISEMPTY_DIM_OBJ/115 #662=     $661                 1075:'action'       	;33554432
1456 685   BOOL_NOT/13               #663=     #662                 ?0                  	;0
1457 685   JMPZ/43                   ?0        #663                 ?1459               	;0	>>1459
1458 686   GOTO/253                  ?0        ?570                 ?1076               	;0
1459 688   FETCH_STATIC_PROP_R/173   $664=     1077:'rRequest'      1078:'XUI'          	;0	<<1457
1460 688   FETCH_DIM_R/81            $665=     $664                 1080:'action'       	;0
1461 688   IS_EQUAL/17               #666=     $665                 1081:'dashboard'    	;0
1462 688   JMPZ/43                   ?0        #666                 ?1464               	;0	>>1464
1463 689   GOTO/253                  ?0        ?2241                ?1082               	;0
1464 691   FETCH_STATIC_PROP_R/173   $667=     1083:'rRequest'      1084:'XUI'          	;0	<<1462
1465 691   FETCH_DIM_R/81            $668=     $667                 1086:'action'       	;0
1466 691   IS_EQUAL/17               #669=     $668                 1087:'connections'  	;0
1467 691   JMPZ/43                   ?0        #669                 ?1469               	;0	>>1469
1468 692   GOTO/253                  ?0        ?1132                ?1088               	;0
1469 694   GOTO/253                  ?0        ?1982                ?1089               	;0	<<1467
1470 697   EXIT/79                   ?0        ?0                   ?0                  	;0
1471 699   GOTO/253                  ?0        ?1731                ?1090               	;0
1472 701   GOTO/253                  ?0        ?552                 ?1091               	;0
1473 703   INIT_METHOD_CALL/112      ?0        16?0                 1092:'query'        	;6
1474 703   SEND_VAL_EX/116           ?80       1094:'INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);' ?1                  	;0
1475 703   FETCH_DIM_FUNC_ARG/93     $670=     16?20                1095:'id'           	;2
1476 703   SEND_VAR_EX/66            ?96       $670                 ?2                  	;0
1477 703   FETCH_DIM_FUNC_ARG/93     $671=     16?4                 1096:'id'           	;3
1478 703   SEND_VAR_EX/66            ?112      $671                 ?3                  	;0
1479 703   FETCH_STATIC_PROP_FUNC_ARG/177 $672=     1097:'rRequest'      1098:'XUI'          	;4
1480 703   FETCH_DIM_FUNC_ARG/93     $673=     $672                 1100:'credits'      	;4
1481 703   SEND_VAR_EX/66            ?128      $673                 ?4                  	;0
1482 703   INIT_FCALL_BY_NAME/59     ?0        ?0                   1101:'time'         	;0
1483 703   DO_FCALL_BY_NAME/131      $674=     ?0                   ?0                  	;0
1484 703   SEND_VAR_NO_REF_EX/50     ?144      $674                 ?5                  	;0
1485 703   FETCH_STATIC_PROP_FUNC_ARG/177 $675=     1103:'rRequest'      1104:'XUI'          	;6
1486 703   FETCH_DIM_FUNC_ARG/93     $676=     $675                 1106:'reason'       	;6
1487 703   SEND_VAR_EX/66            ?160      $676                 ?6                  	;0
1488 703   DO_FCALL/60               ?626      ?0                   ?0                  	;0
1489 704   INIT_METHOD_CALL/112      ?0        16?0                 1107:'query'        	;8
1490 704   SEND_VAL_EX/116           ?80       1109:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1491 704   FETCH_DIM_FUNC_ARG/93     $678=     16?4                 1110:'id'           	;2
1492 704   SEND_VAR_EX/66            ?96       $678                 ?2                  	;0
1493 704   SEND_VAL_EX/116           ?112      1111:'adjust_credits' ?3                  	;0
1494 704   FETCH_STATIC_PROP_FUNC_ARG/177 $679=     1112:'rRequest'      1113:'XUI'          	;4
1495 704   FETCH_DIM_FUNC_ARG/93     $680=     $679                 1115:'id'           	;4
1496 704   SEND_VAR_EX/66            ?128      $680                 ?4                  	;0
1497 704   INIT_FCALL_BY_NAME/59     ?0        ?0                   1116:'intval'       	;1
1498 704   FETCH_STATIC_PROP_FUNC_ARG/177 $681=     1118:'rRequest'      1119:'XUI'          	;1
1499 704   FETCH_DIM_FUNC_ARG/93     $682=     $681                 1121:'credits'      	;1
1500 704   SEND_VAR_EX/66            ?80       $682                 ?1                  	;0
1501 704   DO_FCALL_BY_NAME/131      $683=     ?0                   ?0                  	;0
1502 704   SEND_VAR_NO_REF_EX/50     ?144      $683                 ?5                  	;0
1503 704   SEND_VAR_EX/66            ?160      16?42                ?6                  	;0
1504 704   INIT_FCALL_BY_NAME/59     ?0        ?0                   1122:'time'         	;0
1505 704   DO_FCALL_BY_NAME/131      $684=     ?0                   ?0                  	;0
1506 704   SEND_VAR_NO_REF_EX/50     ?176      $684                 ?7                  	;0
1507 704   INIT_FCALL_BY_NAME/59     ?0        ?0                   1124:'json_encode'  	;1
1508 704   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
1509 704   DO_FCALL_BY_NAME/131      $685=     ?0                   ?0                  	;0
1510 704   SEND_VAR_NO_REF_EX/50     ?192      $685                 ?8                  	;0
1511 704   DO_FCALL/60               ?635      ?0                   ?0                  	;0
1512 705   INIT_FCALL_BY_NAME/59     ?0        ?0                   1126:'json_encode'  	;1
1513 705   SEND_VAL_EX/116           ?80       1128:array (
  'result' => true,
) ?1                  	;0
1514 705   DO_FCALL_BY_NAME/131      $687=     ?0                   ?0                  	;0
1515 705   ECHO/40                   ?0        $687                 ?0                  	;0
1516 706   EXIT/79                   ?0        ?0                   ?0                  	;0
1517 708   GOTO/253                  ?0        ?1595                ?1129               	;0
1518 710   INIT_FCALL_BY_NAME/59     ?0        ?0                   1131:'date'         	;2
1519 710   SEND_VAL_EX/116           ?80       1133:'Y-m-d H:i'     ?1                  	;0
1520 710   INIT_FCALL_BY_NAME/59     ?0        ?0                   1134:'strtotime'    	;1
1521 710   INIT_FCALL_BY_NAME/59     ?0        ?0                   1136:'intval'       	;1
1522 710   FETCH_DIM_FUNC_ARG/93     $689=     16?12                1138:'official_duration'	;1
1523 710   SEND_VAR_EX/66            ?80       $689                 ?1                  	;0
1524 710   DO_FCALL_BY_NAME/131      $690=     ?0                   ?0                  	;0
1525 710   CONCAT/8                  #691=     1139:'+'             $690                	;0
1526 710   CONCAT/8                  #692=     #691                 1140:' '            	;0
1527 710   FETCH_DIM_R/81            $693=     16?12                1141:'official_duration_in'	;0
1528 710   CONCAT/8                  #694=     #692                 $693                	;0
1529 710   SEND_VAL_EX/116           ?80       #694                 ?1                  	;0
1530 710   DO_FCALL_BY_NAME/131      $695=     ?0                   ?0                  	;0
1531 710   SEND_VAR_NO_REF_EX/50     ?96       $695                 ?2                  	;0
1532 710   DO_FCALL_BY_NAME/131      $696=     ?0                   ?0                  	;0
1533 710   ASSIGN_DIM/147            ?637      16?12                1130:'exp_date'     	;0
1534 710   OP_DATA/137               ?0        $696                 ?0                  	;0
1535 711   FETCH_STATIC_PROP_IS/176  $697=     1142:'rRequest'      1143:'XUI'          	;0
1536 711   ISSET_ISEMPTY_DIM_OBJ/115 #698=     $697                 1145:'user_id'      	;33554432
1537 711   JMPZ_EX/46                #698=     #698                 ?1540               	;0	>>1540
1538 711   FETCH_DIM_R/81            $699=     16?12                1146:'compatible'   	;0
1539 711   BOOL/52                   #698=     $699                 ?0                  	;0
1540 711   BOOL_NOT/13               #700=     #698                 ?0                  	;0	<<1537
1541 711   JMPZ/43                   ?0        #700                 ?1543               	;0	>>1543
1542 712   GOTO/253                  ?0        ?2168                ?1147               	;0
1543 714   INIT_FCALL_BY_NAME/59     ?0        ?0                   1148:'b5AD1d95a92Ce732'	;1	<<1541
1544 714   FETCH_STATIC_PROP_FUNC_ARG/177 $701=     1150:'rRequest'      1151:'XUI'          	;1
1545 714   FETCH_DIM_FUNC_ARG/93     $702=     $701                 1153:'user_id'      	;1
1546 714   SEND_VAR_EX/66            ?80       $702                 ?1                  	;0
1547 714   DO_FCALL_BY_NAME/131      $703=     ?0                   ?0                  	;0
1548 714   ASSIGN/38                 $704=     16?20                $703                	;0
1549 714   BOOL_NOT/13               #705=     $704                 ?0                  	;0
1550 714   JMPZ/43                   ?0        #705                 ?1552               	;0	>>1552
1551 715   GOTO/253                  ?0        ?2604                ?1154               	;0
1552 717   INIT_FCALL_BY_NAME/59     ?0        ?0                   1155:'time'         	;0	<<1550
1553 717   DO_FCALL_BY_NAME/131      $706=     ?0                   ?0                  	;0
1554 717   FETCH_DIM_R/81            $707=     16?20                1157:'exp_date'     	;0
1555 717   IS_SMALLER/19             #708=     $706                 $707                	;0
1556 717   JMPZ/43                   ?0        #708                 ?1558               	;0	>>1558
1557 718   GOTO/253                  ?0        ?2585                ?1158               	;0
1558 720   INIT_FCALL_BY_NAME/59     ?0        ?0                   1160:'date'         	;2	<<1556
1559 720   SEND_VAL_EX/116           ?80       1162:'Y-m-d H:i'     ?1                  	;0
1560 720   INIT_FCALL_BY_NAME/59     ?0        ?0                   1163:'strtotime'    	;1
1561 720   INIT_FCALL_BY_NAME/59     ?0        ?0                   1165:'intval'       	;1
1562 720   FETCH_DIM_FUNC_ARG/93     $710=     16?12                1167:'official_duration'	;1
1563 720   SEND_VAR_EX/66            ?80       $710                 ?1                  	;0
1564 720   DO_FCALL_BY_NAME/131      $711=     ?0                   ?0                  	;0
1565 720   CONCAT/8                  #712=     1168:'+'             $711                	;0
1566 720   CONCAT/8                  #713=     #712                 1169:' '            	;0
1567 720   FETCH_DIM_R/81            $714=     16?12                1170:'official_duration_in'	;0
1568 720   CONCAT/8                  #715=     #713                 $714                	;0
1569 720   SEND_VAL_EX/116           ?80       #715                 ?1                  	;0
1570 720   DO_FCALL_BY_NAME/131      $716=     ?0                   ?0                  	;0
1571 720   SEND_VAR_NO_REF_EX/50     ?96       $716                 ?2                  	;0
1572 720   DO_FCALL_BY_NAME/131      $717=     ?0                   ?0                  	;0
1573 720   ASSIGN_DIM/147            ?658      16?12                1159:'exp_date'     	;0
1574 720   OP_DATA/137               ?0        $717                 ?0                  	;0
1575 721   GOTO/253                  ?0        ?2584                ?1171               	;0
1576 724   FETCH_DIM_R/81            $718=     16?6                 1172:'can_view_vod' 	;0
1577 724   JMPZ/43                   ?0        $718                 ?1579               	;0	>>1579
1578 725   GOTO/253                  ?0        ?1580                ?1173               	;0
1579 727   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1577
1580 729   INIT_FCALL_BY_NAME/59     ?0        ?0                   1174:'count'        	;1
1581 729   FETCH_DIM_FUNC_ARG/93     $719=     16?6                 1176:'stream_ids'   	;1
1582 729   SEND_VAR_EX/66            ?80       $719                 ?1                  	;0
1583 729   DO_FCALL_BY_NAME/131      $720=     ?0                   ?0                  	;0
1584 729   IS_EQUAL/17               #721=     $720                 1177:0              	;0
1585 729   BOOL_NOT/13               #722=     #721                 ?0                  	;0
1586 729   JMPZ/43                   ?0        #722                 ?1588               	;0	>>1588
1587 730   GOTO/253                  ?0        ?2036                ?1178               	;0
1588 732   GOTO/253                  ?0        ?2035                ?1179               	;0	<<1586
1589 734   EXIT/79                   ?0        ?0                   ?0                  	;0
1590 736   GOTO/253                  ?0        ?1184                ?1180               	;0
1591 738   INIT_FCALL_BY_NAME/59     ?0        ?0                   1181:'c24B1b1fdaD37C5E'	;1
1592 738   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
1593 738   DO_FCALL_BY_NAME/131      ?672      ?0                   ?0                  	;0
1594 739   GOTO/253                  ?0        ?1160                ?1183               	;0
1595 742   INIT_FCALL_BY_NAME/59     ?0        ?0                   1184:'json_encode'  	;1
1596 742   SEND_VAL_EX/116           ?80       1186:array (
  'result' => false,
) ?1                  	;0
1597 742   DO_FCALL_BY_NAME/131      $724=     ?0                   ?0                  	;0
1598 742   ECHO/40                   ?0        $724                 ?0                  	;0
1599 743   EXIT/79                   ?0        ?0                   ?0                  	;0
1600 745   GOTO/253                  ?0        ?655                 ?1187               	;0
1601 746   GOTO/253                  ?0        ?347                 ?1188               	;0
1602 749   INIT_FCALL_BY_NAME/59     ?0        ?0                   1189:'c2789DA0026d2C05'	;1
1603 749   FETCH_DIM_FUNC_ARG/93     $725=     16?12                1191:'id'           	;1
1604 749   SEND_VAR_EX/66            ?80       $725                 ?1                  	;0
1605 749   DO_FCALL_BY_NAME/131      ?675      ?0                   ?0                  	;0
1606 750   INIT_FCALL_BY_NAME/59     ?0        ?0                   1192:'json_encode'  	;1
1607 750   SEND_VAL_EX/116           ?80       1194:array (
  'result' => true,
) ?1                  	;0
1608 750   DO_FCALL_BY_NAME/131      $727=     ?0                   ?0                  	;0
1609 750   ECHO/40                   ?0        $727                 ?0                  	;0
1610 751   EXIT/79                   ?0        ?0                   ?0                  	;0
1611 753   GOTO/253                  ?0        ?2420                ?1195               	;0
1612 755   INIT_METHOD_CALL/112      ?0        16?0                 1196:'num_rows'     	;0
1613 755   DO_FCALL/60               $728=     ?0                   ?0                  	;0
1614 755   IS_SMALLER/19             #729=     1198:0               $728                	;0
1615 755   BOOL_NOT/13               #730=     #729                 ?0                  	;0
1616 755   JMPZ/43                   ?0        #730                 ?1618               	;0	>>1618
1617 756   GOTO/253                  ?0        ?1623                ?1199               	;0
1618 758   INIT_METHOD_CALL/112      ?0        16?0                 1201:'get_row'      	;0	<<1616
1619 758   DO_FCALL/60               $732=     ?0                   ?0                  	;0
1620 758   FETCH_DIM_R/81            $733=     $732                 1203:'type'         	;0
1621 758   ASSIGN_DIM/147            ?680      16?43                1200:'type'         	;0
1622 758   OP_DATA/137               ?0        $733                 ?0                  	;0
1623 761   INIT_FCALL_BY_NAME/59     ?0        ?0                   1204:'json_encode'  	;1
1624 761   INIT_ARRAY/71             #734=     1206:true            1207:'result'       	;10
1625 761   ADD_ARRAY_ELEMENT/72      #734=     16?43                1208:'data'         	;0
1626 761   SEND_VAL_EX/116           ?80       #734                 ?1                  	;0
1627 761   DO_FCALL_BY_NAME/131      $735=     ?0                   ?0                  	;0
1628 761   ECHO/40                   ?0        $735                 ?0                  	;0
1629 762   GOTO/253                  ?0        ?285                 ?1209               	;0
1630 764   ISSET_ISEMPTY_DIM_OBJ/115 #736=     16?4                 1210:'reports'      	;33554432
1631 764   JMPZ/43                   ?0        #736                 ?1633               	;0	>>1633
1632 765   GOTO/253                  ?0        ?1637                ?1211               	;0
1633 767   INIT_FCALL_BY_NAME/59     ?0        ?0                   1212:'json_encode'  	;1	<<1631
1634 767   SEND_VAL_EX/116           ?80       1214:array (
  'result' => false,
) ?1                  	;0
1635 767   DO_FCALL_BY_NAME/131      $737=     ?0                   ?0                  	;0
1636 767   ECHO/40                   ?0        $737                 ?0                  	;0
1637 769   GOTO/253                  ?0        ?1454                ?1215               	;0
1638 771   GOTO/253                  ?0        ?1450                ?1216               	;0
1639 773   INIT_METHOD_CALL/112      ?0        16?44                1217:'close'        	;0
1640 773   DO_FCALL/60               ?687      ?0                   ?0                  	;0
1641 775   ASSIGN_DIM/147            ?688      16?43                1219:'type'         	;0
1642 775   OP_DATA/137               ?0        1220:NULL            ?0                  	;0
1643 776   FETCH_DIM_R/81            $740=     16?43                1221:'isp'          	;0
1644 776   FETCH_DIM_R/81            $741=     $740                 1222:'autonomous_system_number'	;0
1645 776   BOOL_NOT/13               #742=     $741                 ?0                  	;0
1646 776   JMPZ/43                   ?0        #742                 ?1648               	;0	>>1648
1647 777   GOTO/253                  ?0        ?1623                ?1223               	;0
1648 779   INIT_METHOD_CALL/112      ?0        16?0                 1224:'query'        	;2	<<1646
1649 779   SEND_VAL_EX/116           ?80       1226:'SELECT `type` FROM `blocked_asns` WHERE `asn` = ?;' ?1                  	;0
1650 779   FETCH_DIM_FUNC_ARG/93     $743=     16?43                1227:'isp'          	;2
1651 779   FETCH_DIM_FUNC_ARG/93     $744=     $743                 1228:'autonomous_system_number'	;2
1652 779   SEND_VAR_EX/66            ?96       $744                 ?2                  	;0
1653 779   DO_FCALL/60               ?694      ?0                   ?0                  	;0
1654 780   GOTO/253                  ?0        ?1612                ?1229               	;0
1655 783   IS_EQUAL/17               #746=     16?5                 1230:'delete'       	;0
1656 783   JMPZ/43                   ?0        #746                 ?1658               	;0	>>1658
1657 784   GOTO/253                  ?0        ?1591                ?1231               	;0
1658 786   IS_EQUAL/17               #747=     16?5                 1232:'enable'       	;0	<<1656
1659 786   JMPZ/43                   ?0        #747                 ?1661               	;0	>>1661
1660 787   GOTO/253                  ?0        ?1103                ?1233               	;0
1661 789   IS_EQUAL/17               #748=     16?5                 1234:'disable'      	;0	<<1659
1662 789   JMPZ/43                   ?0        #748                 ?1664               	;0	>>1664
1663 790   GOTO/253                  ?0        ?2338                ?1235               	;0
1664 792   IS_EQUAL/17               #749=     16?5                 1236:'reset_isp'    	;0	<<1662
1665 792   JMPZ/43                   ?0        #749                 ?1667               	;0	>>1667
1666 793   GOTO/253                  ?0        ?2933                ?1237               	;0
1667 795   GOTO/253                  ?0        ?115                 ?1238               	;0	<<1665
1668 797   INIT_METHOD_CALL/112      ?0        16?0                 1239:'get_rows'     	;0
1669 797   DO_FCALL/60               $750=     ?0                   ?0                  	;0
1670 797   FE_RESET_R/77             $751=     $750                 ?1676               	;0
1671 797   FE_FETCH_R/78             ?0        $751                 16?1                	;1676	>>1676	<<1675
1672 798   FETCH_DIM_R/81            $753=     16?1                 1241:'id'           	;0
1673 798   ASSIGN_DIM/147            ?701      16?3                 ?4414262            	;0
1674 798   OP_DATA/137               ?0        $753                 ?0                  	;0
1675 799   JMP/42                    ?0        ?1671                ?0                  	;0	>>1671
1676 799   FE_FREE/127               ?0        $751                 ?0                  	;0	<<1670
1677 802   INIT_STATIC_METHOD_CALL/113 ?0        1242:'XUI'           1244:'D72C0f56211b6F7c'	;7
1678 802   SEND_VAL_EX/116           ?80       1246:NULL            ?1                  	;0
1679 802   SEND_VAL_EX/116           ?96       1247:NULL            ?2                  	;0
1680 802   SEND_VAR_EX/66            ?112      16?45                ?3                  	;0
1681 802   SEND_VAL_EX/116           ?128      1248:true            ?4                  	;0
1682 802   SEND_VAL_EX/116           ?144      1249:false           ?5                  	;0
1683 802   SEND_VAL_EX/116           ?160      1250:false           ?6                  	;0
1684 802   SEND_VAL_EX/116           ?176      1251:false           ?7                  	;0
1685 802   DO_FCALL/60               $754=     ?0                   ?0                  	;0
1686 802   ASSIGN/38                 ?704      16?15                $754                	;0
1687 803   FE_RESET_R/77             $756=     16?15                ?1702               	;0
1688 803   FE_FETCH_R/78             ?0        $756                 16?18               	;1702	>>1702	<<1701
1689 804   INIT_FCALL_BY_NAME/59     ?0        ?0                   1252:'in_array'     	;2
1690 804   FETCH_DIM_FUNC_ARG/93     $757=     16?18                1254:'user_id'      	;1
1691 804   SEND_VAR_EX/66            ?80       $757                 ?1                  	;0
1692 804   SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
1693 804   DO_FCALL_BY_NAME/131      $758=     ?0                   ?0                  	;0
1694 804   BOOL_NOT/13               #759=     $758                 ?0                  	;0
1695 804   JMPZ/43                   ?0        #759                 ?1698               	;0	>>1698
1696 805   NOP/0                     ?0        ?0                   ?0                  	;1
1697 805   GOTO/253                  ?0        ?1701                ?1255               	;0
1698 807   INIT_STATIC_METHOD_CALL/113 ?0        1256:'XUI'           1258:'b0020C716fdf67Bb'	;1	<<1695
1699 807   SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
1700 807   DO_FCALL/60               ?709      ?0                   ?0                  	;0
1701 809   JMP/42                    ?0        ?1688                ?0                  	;0	>>1688
1702 809   FE_FREE/127               ?0        $756                 ?0                  	;0	<<1687
1703 812   GOTO/253                  ?0        ?2670                ?1260               	;0
1704 814   ASSIGN_DIM/147            ?710      16?12                1261:'compatible'   	;0
1705 814   OP_DATA/137               ?0        1262:true            ?0                  	;0
1706 815   GOTO/253                  ?0        ?1717                ?1263               	;0
1707 817   INIT_FCALL_BY_NAME/59     ?0        ?0                   1265:'DbA308160C3f6ca5'	;2
1708 817   FETCH_STATIC_PROP_FUNC_ARG/177 $763=     1267:'rRequest'      1268:'XUI'          	;1
1709 817   FETCH_DIM_FUNC_ARG/93     $764=     $763                 1270:'package_id'   	;1
1710 817   SEND_VAR_EX/66            ?80       $764                 ?1                  	;0
1711 817   FETCH_STATIC_PROP_FUNC_ARG/177 $765=     1271:'rRequest'      1272:'XUI'          	;2
1712 817   FETCH_DIM_FUNC_ARG/93     $766=     $765                 1274:'orig_id'      	;2
1713 817   SEND_VAR_EX/66            ?96       $766                 ?2                  	;0
1714 817   DO_FCALL_BY_NAME/131      $767=     ?0                   ?0                  	;0
1715 817   ASSIGN_DIM/147            ?711      16?12                1264:'compatible'   	;0
1716 817   OP_DATA/137               ?0        $767                 ?0                  	;0
1717 819   GOTO/253                  ?0        ?1518                ?1275               	;0
1718 821   INCLUDE_OR_EVAL/73        ?717      1276:'functions.php' ?0                  	;2	<<0
1719 822   INIT_FCALL_BY_NAME/59     ?0        ?0                   1277:'session_write_close'	;0
1720 822   DO_FCALL_BY_NAME/131      ?718      ?0                   ?0                  	;0
1721 823   FETCH_IS/89               $770=     1279:'_SESSION'      ?0                  	;0
1722 823   ISSET_ISEMPTY_DIM_OBJ/115 #771=     $770                 1280:'reseller'     	;33554432
1723 823   JMPZ/43                   ?0        #771                 ?1725               	;0	>>1725
1724 824   GOTO/253                  ?0        ?313                 ?1281               	;0
1725 826   INIT_FCALL_BY_NAME/59     ?0        ?0                   1282:'json_encode'  	;1	<<1723
1726 826   SEND_VAL_EX/116           ?80       1284:array (
  'result' => false,
  'error' => 'Not logged in',
) ?1                  	;0
1727 826   DO_FCALL_BY_NAME/131      $772=     ?0                   ?0                  	;0
1728 826   ECHO/40                   ?0        $772                 ?0                  	;0
1729 827   EXIT/79                   ?0        ?0                   ?0                  	;0
1730 828   GOTO/253                  ?0        ?313                 ?1285               	;0
1731 831   GOTO/253                  ?0        ?1748                ?1286               	;0
1732 833   FETCH_DIM_R/81            $773=     16?6                 1287:'create_mag'   	;0
1733 833   JMPZ/43                   ?0        $773                 ?1735               	;0	>>1735
1734 834   GOTO/253                  ?0        ?657                 ?1288               	;0
1735 836   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1733
1736 837   GOTO/253                  ?0        ?657                 ?1289               	;0
1737 842   INIT_FCALL_BY_NAME/59     ?0        ?0                   1290:'json_encode'  	;1
1738 842   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
1739 842   DO_FCALL_BY_NAME/131      $774=     ?0                   ?0                  	;0
1740 842   ECHO/40                   ?0        $774                 ?0                  	;0
1741 843   EXIT/79                   ?0        ?0                   ?0                  	;0
1742 844   GOTO/253                  ?0        ?156                 ?1292               	;0
1743 847   INIT_FCALL_BY_NAME/59     ?0        ?0                   1293:'json_encode'  	;1
1744 847   SEND_VAL_EX/116           ?80       1295:array (
  'result' => false,
) ?1                  	;0
1745 847   DO_FCALL_BY_NAME/131      $775=     ?0                   ?0                  	;0
1746 847   ECHO/40                   ?0        $775                 ?0                  	;0
1747 848   EXIT/79                   ?0        ?0                   ?0                  	;0
1748 850   GOTO/253                  ?0        ?2486                ?1296               	;0
1749 851   GOTO/253                  ?0        ?2088                ?1297               	;0
1750 853   INIT_FCALL_BY_NAME/59     ?0        ?0                   1298:'json_encode'  	;1
1751 853   SEND_VAL_EX/116           ?80       1300:array (
  'result' => true,
) ?1                  	;0
1752 853   DO_FCALL_BY_NAME/131      $776=     ?0                   ?0                  	;0
1753 853   ECHO/40                   ?0        $776                 ?0                  	;0
1754 854   EXIT/79                   ?0        ?0                   ?0                  	;0
1755 857   INIT_FCALL_BY_NAME/59     ?0        ?0                   1301:'json_encode'  	;1
1756 857   SEND_VAL_EX/116           ?80       1303:array (
  'result' => false,
) ?1                  	;0
1757 857   DO_FCALL_BY_NAME/131      $777=     ?0                   ?0                  	;0
1758 857   ECHO/40                   ?0        $777                 ?0                  	;0
1759 858   GOTO/253                  ?0        ?2485                ?1304               	;0
1760 860   INIT_FCALL_BY_NAME/59     ?0        ?0                   1305:'c05365DCB6d79618'	;4
1761 860   FETCH_STATIC_PROP_FUNC_ARG/177 $778=     1307:'rRequest'      1308:'XUI'          	;1
1762 860   FETCH_DIM_FUNC_ARG/93     $779=     $778                 1310:'user_id'      	;1
1763 860   SEND_VAR_EX/66            ?80       $779                 ?1                  	;0
1764 860   SEND_VAL_EX/116           ?96       1311:false           ?2                  	;0
1765 860   SEND_VAL_EX/116           ?112      1312:false           ?3                  	;0
1766 860   FETCH_DIM_FUNC_ARG/93     $780=     16?4                 1313:'id'           	;4
1767 860   SEND_VAR_EX/66            ?128      $780                 ?4                  	;0
1768 860   DO_FCALL_BY_NAME/131      ?730      ?0                   ?0                  	;0
1769 861   INIT_METHOD_CALL/112      ?0        16?0                 1314:'query'        	;6
1770 861   SEND_VAL_EX/116           ?80       1316:'INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);' ?1                  	;0
1771 861   FETCH_DIM_FUNC_ARG/93     $782=     16?4                 1317:'id'           	;2
1772 861   SEND_VAR_EX/66            ?96       $782                 ?2                  	;0
1773 861   FETCH_DIM_FUNC_ARG/93     $783=     16?4                 1318:'id'           	;3
1774 861   SEND_VAR_EX/66            ?112      $783                 ?3                  	;0
1775 861   INIT_FCALL_BY_NAME/59     ?0        ?0                   1319:'intval'       	;1
1776 861   FETCH_DIM_FUNC_ARG/93     $784=     16?20                1321:'credits'      	;1
1777 861   SEND_VAR_EX/66            ?80       $784                 ?1                  	;0
1778 861   DO_FCALL_BY_NAME/131      $785=     ?0                   ?0                  	;0
1779 861   SEND_VAR_NO_REF_EX/50     ?128      $785                 ?4                  	;0
1780 861   INIT_FCALL_BY_NAME/59     ?0        ?0                   1322:'time'         	;0
1781 861   DO_FCALL_BY_NAME/131      $786=     ?0                   ?0                  	;0
1782 861   SEND_VAR_NO_REF_EX/50     ?144      $786                 ?5                  	;0
1783 861   FETCH_DIM_R/81            $787=     16?20                1324:'username'     	;0
1784 861   CONCAT/8                  #788=     1325:'Deleted user: ' $787                	;0
1785 861   SEND_VAL_EX/116           ?160      #788                 ?6                  	;0
1786 861   DO_FCALL/60               ?738      ?0                   ?0                  	;0
1787 862   INIT_METHOD_CALL/112      ?0        16?0                 1326:'query'        	;8
1788 862   SEND_VAL_EX/116           ?80       1328:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1789 862   FETCH_DIM_FUNC_ARG/93     $790=     16?4                 1329:'id'           	;2
1790 862   SEND_VAR_EX/66            ?96       $790                 ?2                  	;0
1791 862   SEND_VAL_EX/116           ?112      1330:'delete'        ?3                  	;0
1792 862   FETCH_STATIC_PROP_FUNC_ARG/177 $791=     1331:'rRequest'      1332:'XUI'          	;4
1793 862   FETCH_DIM_FUNC_ARG/93     $792=     $791                 1334:'user_id'      	;4
1794 862   SEND_VAR_EX/66            ?128      $792                 ?4                  	;0
1795 862   INIT_FCALL_BY_NAME/59     ?0        ?0                   1335:'intval'       	;1
1796 862   FETCH_DIM_FUNC_ARG/93     $793=     16?20                1337:'credits'      	;1
1797 862   SEND_VAR_EX/66            ?80       $793                 ?1                  	;0
1798 862   DO_FCALL_BY_NAME/131      $794=     ?0                   ?0                  	;0
1799 862   SEND_VAR_NO_REF_EX/50     ?144      $794                 ?5                  	;0
1800 862   SEND_VAR_EX/66            ?160      16?42                ?6                  	;0
1801 862   INIT_FCALL_BY_NAME/59     ?0        ?0                   1338:'time'         	;0
1802 862   DO_FCALL_BY_NAME/131      $795=     ?0                   ?0                  	;0
1803 862   SEND_VAR_NO_REF_EX/50     ?176      $795                 ?7                  	;0
1804 862   INIT_FCALL_BY_NAME/59     ?0        ?0                   1340:'json_encode'  	;1
1805 862   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
1806 862   DO_FCALL_BY_NAME/131      $796=     ?0                   ?0                  	;0
1807 862   SEND_VAR_NO_REF_EX/50     ?192      $796                 ?8                  	;0
1808 862   DO_FCALL/60               ?746      ?0                   ?0                  	;0
1809 863   INIT_FCALL_BY_NAME/59     ?0        ?0                   1342:'json_encode'  	;1
1810 863   SEND_VAL_EX/116           ?80       1344:array (
  'result' => true,
) ?1                  	;0
1811 863   DO_FCALL_BY_NAME/131      $798=     ?0                   ?0                  	;0
1812 863   ECHO/40                   ?0        $798                 ?0                  	;0
1813 864   EXIT/79                   ?0        ?0                   ?0                  	;0
1814 865   GOTO/253                  ?0        ?162                 ?1345               	;0
1815 868   INIT_FCALL_BY_NAME/59     ?0        ?0                   1346:'json_decode'  	;2
1816 868   FETCH_STATIC_PROP_FUNC_ARG/177 $799=     1348:'rRequest'      1349:'XUI'          	;1
1817 868   FETCH_DIM_FUNC_ARG/93     $800=     $799                 1351:'data'         	;1
1818 868   SEND_VAR_EX/66            ?80       $800                 ?1                  	;0
1819 868   SEND_VAL_EX/116           ?96       1352:true            ?2                  	;0
1820 868   DO_FCALL_BY_NAME/131      $801=     ?0                   ?0                  	;0
1821 868   ASSIGN/38                 ?751      16?12                $801                	;0
1822 869   INIT_FCALL_BY_NAME/59     ?0        ?0                   1353:'A32d85AEFa28959d'	;1
1823 869   FETCH_DIM_FUNC_ARG/93     $803=     16?12                1355:'id'           	;1
1824 869   SEND_VAR_EX/66            ?80       $803                 ?1                  	;0
1825 869   DO_FCALL_BY_NAME/131      $804=     ?0                   ?0                  	;0
1826 869   ASSIGN/38                 ?754      16?46                $804                	;0
1827 870   BOOL_NOT/13               #806=     16?46                ?0                  	;0
1828 870   JMPZ/43                   ?0        #806                 ?1830               	;0	>>1830
1829 871   GOTO/253                  ?0        ?2840                ?1356               	;0
1830 873   INIT_FCALL_BY_NAME/59     ?0        ?0                   1357:'e589A4bf54A2dAd1'	;2	<<1828
1831 873   SEND_VAL_EX/116           ?80       1359:'line'          ?1                  	;0
1832 873   FETCH_DIM_FUNC_ARG/93     $807=     16?46                1360:'user_id'      	;2
1833 873   SEND_VAR_EX/66            ?96       $807                 ?2                  	;0
1834 873   DO_FCALL_BY_NAME/131      $808=     ?0                   ?0                  	;0
1835 873   JMPZ/43                   ?0        $808                 ?1837               	;0	>>1837
1836 874   GOTO/253                  ?0        ?1060                ?1361               	;0
1837 876   GOTO/253                  ?0        ?1055                ?1362               	;0	<<1835
1838 878   INIT_FCALL_BY_NAME/59     ?0        ?0                   1363:'json_encode'  	;1
1839 878   SEND_VAL_EX/116           ?80       1365:array (
  'result' => true,
) ?1                  	;0
1840 878   DO_FCALL_BY_NAME/131      $809=     ?0                   ?0                  	;0
1841 878   ECHO/40                   ?0        $809                 ?0                  	;0
1842 879   EXIT/79                   ?0        ?0                   ?0                  	;0
1843 881   GOTO/253                  ?0        ?162                 ?1366               	;0
1844 883   GOTO/253                  ?0        ?2311                ?1367               	;0
1845 885   INIT_METHOD_CALL/112      ?0        16?0                 1368:'query'        	;8
1846 885   SEND_VAL_EX/116           ?80       1370:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
1847 885   FETCH_DIM_FUNC_ARG/93     $810=     16?4                 1371:'id'           	;2
1848 885   SEND_VAR_EX/66            ?96       $810                 ?2                  	;0
1849 885   SEND_VAL_EX/116           ?112      1372:'convert'       ?3                  	;0
1850 885   FETCH_DIM_FUNC_ARG/93     $811=     16?2                 1373:'user'         	;4
1851 885   FETCH_DIM_FUNC_ARG/93     $812=     $811                 1374:'id'           	;4
1852 885   SEND_VAR_EX/66            ?128      $812                 ?4                  	;0
1853 885   SEND_VAL_EX/116           ?144      1375:0               ?5                  	;0
1854 885   FETCH_DIM_FUNC_ARG/93     $813=     16?4                 1376:'credits'      	;6
1855 885   SEND_VAR_EX/66            ?160      $813                 ?6                  	;0
1856 885   INIT_FCALL_BY_NAME/59     ?0        ?0                   1377:'time'         	;0
1857 885   DO_FCALL_BY_NAME/131      $814=     ?0                   ?0                  	;0
1858 885   SEND_VAR_NO_REF_EX/50     ?176      $814                 ?7                  	;0
1859 885   INIT_FCALL_BY_NAME/59     ?0        ?0                   1379:'json_encode'  	;1
1860 885   FETCH_DIM_FUNC_ARG/93     $815=     16?2                 1381:'user'         	;1
1861 885   SEND_VAR_EX/66            ?80       $815                 ?1                  	;0
1862 885   DO_FCALL_BY_NAME/131      $816=     ?0                   ?0                  	;0
1863 885   SEND_VAR_NO_REF_EX/50     ?192      $816                 ?8                  	;0
1864 885   DO_FCALL/60               ?766      ?0                   ?0                  	;0
1865 886   INIT_FCALL_BY_NAME/59     ?0        ?0                   1382:'json_encode'  	;1
1866 886   INIT_ARRAY/71             #818=     1384:true            1385:'result'       	;10
1867 886   FETCH_DIM_R/81            $819=     16?2                 1386:'user'         	;0
1868 886   FETCH_DIM_R/81            $820=     $819                 1387:'id'           	;0
1869 886   ADD_ARRAY_ELEMENT/72      #818=     $820                 1388:'line_id'      	;0
1870 886   SEND_VAL_EX/116           ?80       #818                 ?1                  	;0
1871 886   DO_FCALL_BY_NAME/131      $821=     ?0                   ?0                  	;0
1872 886   ECHO/40                   ?0        $821                 ?0                  	;0
1873 887   EXIT/79                   ?0        ?0                   ?0                  	;0
1874 889   GOTO/253                  ?0        ?805                 ?1389               	;0
1875 890   GOTO/253                  ?0        ?1315                ?1390               	;0
1876 892   INIT_METHOD_CALL/112      ?0        16?0                 1391:'query'        	;2
1877 892   SEND_VAL_EX/116           ?80       1393:'UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `id` = ?;' ?1                  	;0
1878 892   FETCH_DIM_FUNC_ARG/93     $822=     16?17                1394:'user'         	;2
1879 892   FETCH_DIM_FUNC_ARG/93     $823=     $822                 1395:'id'           	;2
1880 892   SEND_VAR_EX/66            ?96       $823                 ?2                  	;0
1881 892   DO_FCALL/60               ?773      ?0                   ?0                  	;0
1882 893   INIT_FCALL_BY_NAME/59     ?0        ?0                   1396:'json_encode'  	;1
1883 893   SEND_VAL_EX/116           ?80       1398:array (
  'result' => true,
) ?1                  	;0
1884 893   DO_FCALL_BY_NAME/131      $825=     ?0                   ?0                  	;0
1885 893   ECHO/40                   ?0        $825                 ?0                  	;0
1886 894   EXIT/79                   ?0        ?0                   ?0                  	;0
1887 896   GOTO/253                  ?0        ?926                 ?1399               	;0
1888 897   GOTO/253                  ?0        ?877                 ?1400               	;0
1889 899   INIT_METHOD_CALL/112      ?0        16?0                 1401:'query'        	;2
1890 899   INIT_FCALL_BY_NAME/59     ?0        ?0                   1403:'implode'      	;2
1891 899   SEND_VAL_EX/116           ?80       1405:','             ?1                  	;0
1892 899   INIT_FCALL_BY_NAME/59     ?0        ?0                   1406:'array_map'    	;2
1893 899   SEND_VAL_EX/116           ?80       1408:'intval'        ?1                  	;0
1894 899   FETCH_DIM_FUNC_ARG/93     $826=     16?6                 1409:'stream_ids'   	;2
1895 899   SEND_VAR_EX/66            ?96       $826                 ?2                  	;0
1896 899   DO_FCALL_BY_NAME/131      $827=     ?0                   ?0                  	;0
1897 899   SEND_VAR_NO_REF_EX/50     ?96       $827                 ?2                  	;0
1898 899   DO_FCALL_BY_NAME/131      $828=     ?0                   ?0                  	;0
1899 899   CONCAT/8                  #829=     1410:'SELECT COUNT(`id`) AS `id` FROM `streams` WHERE `stream_display_name` LIKE ? AND `id` IN (' $828                	;0
1900 899   CONCAT/8                  #830=     #829                 1411:');'           	;0
1901 899   SEND_VAL_EX/116           ?80       #830                 ?1                  	;0
1902 899   FETCH_STATIC_PROP_R/173   $831=     1412:'rRequest'      1413:'XUI'          	;0
1903 899   FETCH_DIM_R/81            $832=     $831                 1415:'search'       	;0
1904 899   CONCAT/8                  #833=     1416:'%'             $832                	;0
1905 899   CONCAT/8                  #834=     #833                 1417:'%'            	;0
1906 899   SEND_VAL_EX/116           ?96       #834                 ?2                  	;0
1907 899   DO_FCALL/60               ?784      ?0                   ?0                  	;0
1908 900   INIT_METHOD_CALL/112      ?0        16?0                 1419:'get_row'      	;0
1909 900   DO_FCALL/60               $837=     ?0                   ?0                  	;0
1910 900   FETCH_DIM_R/81            $838=     $837                 1421:'id'           	;0
1911 900   ASSIGN_DIM/147            ?785      16?14                1418:'total_count'  	;0
1912 900   OP_DATA/137               ?0        $838                 ?0                  	;0
1913 901   INIT_METHOD_CALL/112      ?0        16?0                 1422:'query'        	;2
1914 901   INIT_FCALL_BY_NAME/59     ?0        ?0                   1424:'implode'      	;2
1915 901   SEND_VAL_EX/116           ?80       1426:','             ?1                  	;0
1916 901   INIT_FCALL_BY_NAME/59     ?0        ?0                   1427:'array_map'    	;2
1917 901   SEND_VAL_EX/116           ?80       1429:'intval'        ?1                  	;0
1918 901   FETCH_DIM_FUNC_ARG/93     $839=     16?6                 1430:'stream_ids'   	;2
1919 901   SEND_VAR_EX/66            ?96       $839                 ?2                  	;0
1920 901   DO_FCALL_BY_NAME/131      $840=     ?0                   ?0                  	;0
1921 901   SEND_VAR_NO_REF_EX/50     ?96       $840                 ?2                  	;0
1922 901   DO_FCALL_BY_NAME/131      $841=     ?0                   ?0                  	;0
1923 901   CONCAT/8                  #842=     1431:'SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' $841                	;0
1924 901   CONCAT/8                  #843=     #842                 1432:') AND `stream_display_name` LIKE ? ORDER BY `stream_display_name` ASC LIMIT '	;0
1925 901   SUB/2                     #844=     16?24                1433:1              	;0
1926 901   MUL/3                     #845=     #844                 1434:100            	;0
1927 901   CONCAT/8                  #846=     #843                 #845                	;0
1928 901   CONCAT/8                  #847=     #846                 1435:', 100;'       	;0
1929 901   SEND_VAL_EX/116           ?80       #847                 ?1                  	;0
1930 901   FETCH_STATIC_PROP_R/173   $848=     1436:'rRequest'      1437:'XUI'          	;0
1931 901   FETCH_DIM_R/81            $849=     $848                 1439:'search'       	;0
1932 901   CONCAT/8                  #850=     1440:'%'             $849                	;0
1933 901   CONCAT/8                  #851=     #850                 1441:'%'            	;0
1934 901   SEND_VAL_EX/116           ?96       #851                 ?2                  	;0
1935 901   DO_FCALL/60               ?801      ?0                   ?0                  	;0
1936 902   INIT_METHOD_CALL/112      ?0        16?0                 1442:'num_rows'     	;0
1937 902   DO_FCALL/60               $853=     ?0                   ?0                  	;0
1938 902   IS_SMALLER/19             #854=     1444:0               $853                	;0
1939 902   BOOL_NOT/13               #855=     #854                 ?0                  	;0
1940 902   JMPZ/43                   ?0        #855                 ?1942               	;0	>>1942
1941 903   GOTO/253                  ?0        ?1737                ?1445               	;0
1942 905   INIT_METHOD_CALL/112      ?0        16?0                 1446:'get_rows'     	;0	<<1940
1943 905   DO_FCALL/60               $856=     ?0                   ?0                  	;0
1944 905   FE_RESET_R/77             $857=     $856                 ?1954               	;0
1945 905   FE_FETCH_R/78             ?0        $857                 16?1                	;1954	>>1954	<<1953
1946 906   FETCH_DIM_R/81            $860=     16?1                 1449:'id'           	;0
1947 906   INIT_ARRAY/71             #861=     $860                 1450:'id'           	;10
1948 906   FETCH_DIM_R/81            $862=     16?1                 1451:'stream_display_name'	;0
1949 906   ADD_ARRAY_ELEMENT/72      #861=     $862                 1452:'text'         	;0
1950 906   FETCH_DIM_W/84            $858=     16?14                1448:'items'        	;0
1951 906   ASSIGN_DIM/147            ?808      $858                 ?4414262            	;0
1952 906   OP_DATA/137               ?0        #861                 ?0                  	;0
1953 907   JMP/42                    ?0        ?1945                ?0                  	;0	>>1945
1954 907   FE_FREE/127               ?0        $857                 ?0                  	;0	<<1944
1955 909   GOTO/253                  ?0        ?1737                ?1453               	;0
1956 911   INIT_FCALL_BY_NAME/59     ?0        ?0                   1454:'json_encode'  	;2
1957 911   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
1958 911   FETCH_CONSTANT/99         #863=     ?0                   1456:'JSON_PARTIAL_OUTPUT_ON_ERROR'	;16
1959 911   SEND_VAL_EX/116           ?96       #863                 ?2                  	;0
1960 911   DO_FCALL_BY_NAME/131      $864=     ?0                   ?0                  	;0
1961 911   ECHO/40                   ?0        $864                 ?0                  	;0
1962 912   EXIT/79                   ?0        ?0                   ?0                  	;0
1963 914   GOTO/253                  ?0        ?2549                ?1459               	;0
1964 916   GOTO/253                  ?0        ?2402                ?1460               	;0
1965 918   INIT_METHOD_CALL/112      ?0        16?0                 1461:'query'        	;2
1966 918   SEND_VAL_EX/116           ?80       1463:'SELECT `id`, `bouquets`, `official_credits` AS `cost_credits`, `official_duration`, `official_duration_in`, `max_connections`, `check_compatible`, `is_isplock` FROM `users_packages` WHERE `id` = ?;' ?1                  	;0
1967 918   FETCH_STATIC_PROP_FUNC_ARG/177 $865=     1464:'rRequest'      1465:'XUI'          	;2
1968 918   FETCH_DIM_FUNC_ARG/93     $866=     $865                 1467:'package_id'   	;2
1969 918   SEND_VAR_EX/66            ?96       $866                 ?2                  	;0
1970 918   DO_FCALL/60               ?816      ?0                   ?0                  	;0
1971 919   INIT_METHOD_CALL/112      ?0        16?0                 1468:'num_rows'     	;0
1972 919   DO_FCALL/60               $868=     ?0                   ?0                  	;0
1973 919   IS_EQUAL/17               #869=     $868                 1470:1              	;0
1974 919   JMPZ/43                   ?0        #869                 ?1976               	;0	>>1976
1975 920   GOTO/253                  ?0        ?1981                ?1471               	;0
1976 922   INIT_FCALL_BY_NAME/59     ?0        ?0                   1472:'json_encode'  	;1	<<1974
1977 922   SEND_VAL_EX/116           ?80       1474:array (
  'result' => false,
) ?1                  	;0
1978 922   DO_FCALL_BY_NAME/131      $870=     ?0                   ?0                  	;0
1979 922   ECHO/40                   ?0        $870                 ?0                  	;0
1980 923   GOTO/253                  ?0        ?1470                ?1475               	;0
1981 925   GOTO/253                  ?0        ?125                 ?1476               	;0
1982 927   FETCH_STATIC_PROP_R/173   $871=     1477:'rRequest'      1478:'XUI'          	;0
1983 927   FETCH_DIM_R/81            $872=     $871                 1480:'action'       	;0
1984 927   IS_EQUAL/17               #873=     $872                 1481:'line'         	;0
1985 927   JMPZ/43                   ?0        #873                 ?1987               	;0	>>1987
1986 928   GOTO/253                  ?0        ?1152                ?1482               	;0
1987 930   FETCH_STATIC_PROP_R/173   $874=     1483:'rRequest'      1484:'XUI'          	;0	<<1985
1988 930   FETCH_DIM_R/81            $875=     $874                 1486:'action'       	;0
1989 930   IS_EQUAL/17               #876=     $875                 1487:'line_activity'	;0
1990 930   JMPZ/43                   ?0        #876                 ?1992               	;0	>>1992
1991 931   GOTO/253                  ?0        ?347                 ?1488               	;0
1992 933   FETCH_STATIC_PROP_R/173   $877=     1489:'rRequest'      1490:'XUI'          	;0	<<1990
1993 933   FETCH_DIM_R/81            $878=     $877                 1492:'action'       	;0
1994 933   IS_EQUAL/17               #879=     $878                 1493:'adjust_credits'	;0
1995 933   JMPZ/43                   ?0        #879                 ?1997               	;0	>>1997
1996 934   GOTO/253                  ?0        ?192                 ?1494               	;0
1997 936   FETCH_STATIC_PROP_R/173   $880=     1495:'rRequest'      1496:'XUI'          	;0	<<1995
1998 936   FETCH_DIM_R/81            $881=     $880                 1498:'action'       	;0
1999 936   IS_EQUAL/17               #882=     $881                 1499:'reg_user'     	;0
2000 936   JMPZ/43                   ?0        #882                 ?2002               	;0	>>2002
2001 937   GOTO/253                  ?0        ?2487                ?1500               	;0
2002 939   FETCH_STATIC_PROP_R/173   $883=     1501:'rRequest'      1502:'XUI'          	;0	<<2000
2003 939   FETCH_DIM_R/81            $884=     $883                 1504:'action'       	;0
2004 939   IS_EQUAL/17               #885=     $884                 1505:'ticket'       	;0
2005 939   JMPZ/43                   ?0        #885                 ?2007               	;0	>>2007
2006 940   GOTO/253                  ?0        ?2088                ?1506               	;0
2007 942   GOTO/253                  ?0        ?2729                ?1507               	;0	<<2005
2008 944   INIT_FCALL_BY_NAME/59     ?0        ?0                   1508:'count'        	;1
2009 944   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2010 944   DO_FCALL_BY_NAME/131      $886=     ?0                   ?0                  	;0
2011 944   IS_SMALLER/19             #887=     1510:0               $886                	;0
2012 944   BOOL_NOT/13               #888=     #887                 ?0                  	;0
2013 944   JMPZ/43                   ?0        #888                 ?2015               	;0	>>2015
2014 945   GOTO/253                  ?0        ?2034                ?1511               	;0
2015 947   INIT_STATIC_METHOD_CALL/113 ?0        1512:'XUI'           1514:'a96aB74f1921d4Ad'	;2	<<2013
2016 947   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
2017 947   SEND_VAL_EX/116           ?96       1516:true            ?2                  	;0
2018 947   DO_FCALL/60               $889=     ?0                   ?0                  	;0
2019 947   FE_RESET_R/77             $890=     $889                 ?2033               	;0
2020 947   FE_FETCH_R/78             #891=     $890                 16?15               	;2033	>>2033	<<2032
2021 947   ASSIGN/38                 ?841      16?16                #891                	;0
2022 948   ASSIGN_ADD/23             ?842      16?14                1517:'open_connections'	;147
2023 948   OP_DATA/137               ?0        16?15                ?0                  	;0
2024 949   IS_SMALLER/19             #894=     1518:0               16?15               	;0
2025 949   BOOL_NOT/13               #895=     #894                 ?0                  	;0
2026 949   JMPZ/43                   ?0        #895                 ?2029               	;0	>>2029
2027 950   NOP/0                     ?0        ?0                   ?0                  	;1
2028 950   GOTO/253                  ?0        ?2032                ?1519               	;0
2029 952   FETCH_DIM_RW/87           $896=     16?14                1520:'online_users' 	;0	<<2026
2030 952   POST_INC/36               #897=     $896                 ?0                  	;0
2031 952   FREE/70                   ?0        #897                 ?0                  	;0
2032 954   JMP/42                    ?0        ?2020                ?0                  	;0	>>2020
2033 954   FE_FREE/127               ?0        $890                 ?0                  	;0	<<2019
2034 959   GOTO/253                  ?0        ?2370                ?1521               	;0
2035 961   EXIT/79                   ?0        ?0                   ?0                  	;0
2036 963   FETCH_STATIC_PROP_R/173   $898=     1522:'rRequest'      1523:'XUI'          	;0
2037 963   FETCH_DIM_R/81            $899=     $898                 1525:'timezone'     	;0
2038 963   JMP_SET/152               #900=     $899                 ?2040               	;0
2039 963   QM_ASSIGN/22              #900=     1526:'Europe/London' ?0                  	;0
2040 963   ASSIGN/38                 ?850      16?41                #900                	;0
2041 964   INIT_FCALL_BY_NAME/59     ?0        ?0                   1527:'date_default_timezone_set'	;1
2042 964   SEND_VAR_EX/66            ?80       16?41                ?1                  	;0
2043 964   DO_FCALL_BY_NAME/131      ?851      ?0                   ?0                  	;0
2044 965   ASSIGN/38                 ?852      16?14                1529:array (
  'Channels' => 
  array (
  ),
)	;0
2045 966   GOTO/253                  ?0        ?2985                ?1530               	;0
2046 968   INIT_FCALL_BY_NAME/59     ?0        ?0                   1531:'intval'       	;1
2047 968   FETCH_DIM_FUNC_ARG/93     $904=     16?4                 1533:'credits'      	;1
2048 968   SEND_VAR_EX/66            ?80       $904                 ?1                  	;0
2049 968   DO_FCALL_BY_NAME/131      $905=     ?0                   ?0                  	;0
2050 968   INIT_FCALL_BY_NAME/59     ?0        ?0                   1534:'intval'       	;1
2051 968   FETCH_STATIC_PROP_FUNC_ARG/177 $906=     1536:'rRequest'      1537:'XUI'          	;1
2052 968   FETCH_DIM_FUNC_ARG/93     $907=     $906                 1539:'credits'      	;1
2053 968   SEND_VAR_EX/66            ?80       $907                 ?1                  	;0
2054 968   DO_FCALL_BY_NAME/131      $908=     ?0                   ?0                  	;0
2055 968   SUB/2                     #909=     $905                 $908                	;0
2056 968   ASSIGN/38                 ?859      16?42                #909                	;0
2057 969   INIT_FCALL_BY_NAME/59     ?0        ?0                   1540:'intval'       	;1
2058 969   FETCH_DIM_FUNC_ARG/93     $911=     16?20                1542:'credits'      	;1
2059 969   SEND_VAR_EX/66            ?80       $911                 ?1                  	;0
2060 969   DO_FCALL_BY_NAME/131      $912=     ?0                   ?0                  	;0
2061 969   INIT_FCALL_BY_NAME/59     ?0        ?0                   1543:'intval'       	;1
2062 969   FETCH_STATIC_PROP_FUNC_ARG/177 $913=     1545:'rRequest'      1546:'XUI'          	;1
2063 969   FETCH_DIM_FUNC_ARG/93     $914=     $913                 1548:'credits'      	;1
2064 969   SEND_VAR_EX/66            ?80       $914                 ?1                  	;0
2065 969   DO_FCALL_BY_NAME/131      $915=     ?0                   ?0                  	;0
2066 969   ADD/1                     #916=     $912                 $915                	;0
2067 969   ASSIGN/38                 ?866      16?47                #916                	;0
2068 970   IS_SMALLER_OR_EQUAL/20    #918=     1549:0               16?47               	;0
2069 970   JMPZ_EX/46                #918=     #918                 ?2072               	;0	>>2072
2070 970   IS_SMALLER_OR_EQUAL/20    #919=     1550:0               16?42               	;0
2071 970   BOOL/52                   #918=     #919                 ?0                  	;0
2072 970   BOOL_NOT/13               #920=     #918                 ?0                  	;0	<<2069
2073 970   JMPZ/43                   ?0        #920                 ?2075               	;0	>>2075
2074 971   GOTO/253                  ?0        ?1517                ?1551               	;0
2075 973   INIT_METHOD_CALL/112      ?0        16?0                 1552:'query'        	;3	<<2073
2076 973   SEND_VAL_EX/116           ?80       1554:'UPDATE `users` SET `credits` = ? WHERE `id` = ?;' ?1                  	;0
2077 973   SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
2078 973   FETCH_DIM_FUNC_ARG/93     $921=     16?4                 1555:'id'           	;3
2079 973   SEND_VAR_EX/66            ?112      $921                 ?3                  	;0
2080 973   DO_FCALL/60               ?871      ?0                   ?0                  	;0
2081 974   INIT_METHOD_CALL/112      ?0        16?0                 1556:'query'        	;3
2082 974   SEND_VAL_EX/116           ?80       1558:'UPDATE `users` SET `credits` = ? WHERE `id` = ?;' ?1                  	;0
2083 974   SEND_VAR_EX/66            ?96       16?47                ?2                  	;0
2084 974   FETCH_DIM_FUNC_ARG/93     $923=     16?20                1559:'id'           	;3
2085 974   SEND_VAR_EX/66            ?112      $923                 ?3                  	;0
2086 974   DO_FCALL/60               ?873      ?0                   ?0                  	;0
2087 975   GOTO/253                  ?0        ?1473                ?1560               	;0
2088 978   INIT_FCALL_BY_NAME/59     ?0        ?0                   1561:'def05ECDB21B0A50'	;1
2089 978   FETCH_STATIC_PROP_FUNC_ARG/177 $925=     1563:'rRequest'      1564:'XUI'          	;1
2090 978   FETCH_DIM_FUNC_ARG/93     $926=     $925                 1566:'ticket_id'    	;1
2091 978   SEND_VAR_EX/66            ?80       $926                 ?1                  	;0
2092 978   DO_FCALL_BY_NAME/131      $927=     ?0                   ?0                  	;0
2093 978   ASSIGN/38                 ?877      16?48                $927                	;0
2094 979   BOOL_NOT/13               #929=     16?48                ?0                  	;0
2095 979   JMPZ/43                   ?0        #929                 ?2097               	;0	>>2097
2096 980   GOTO/253                  ?0        ?1755                ?1567               	;0
2097 982   INIT_FCALL_BY_NAME/59     ?0        ?0                   1568:'E589A4bF54A2daD1'	;2	<<2095
2098 982   SEND_VAL_EX/116           ?80       1570:'user'          ?1                  	;0
2099 982   FETCH_DIM_FUNC_ARG/93     $930=     16?48                1571:'member_id'    	;2
2100 982   SEND_VAR_EX/66            ?96       $930                 ?2                  	;0
2101 982   DO_FCALL_BY_NAME/131      $931=     ?0                   ?0                  	;0
2102 982   JMPZ/43                   ?0        $931                 ?2104               	;0	>>2104
2103 983   GOTO/253                  ?0        ?302                 ?1572               	;0
2104 985   INIT_FCALL_BY_NAME/59     ?0        ?0                   1573:'json_encode'  	;1	<<2102
2105 985   SEND_VAL_EX/116           ?80       1575:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
2106 985   DO_FCALL_BY_NAME/131      $932=     ?0                   ?0                  	;0
2107 985   ECHO/40                   ?0        $932                 ?0                  	;0
2108 986   GOTO/253                  ?0        ?301                 ?1576               	;0
2109 989   INIT_FCALL_BY_NAME/59     ?0        ?0                   1577:'json_encode'  	;1
2110 989   SEND_VAL_EX/116           ?80       1579:array (
  'result' => false,
) ?1                  	;0
2111 989   DO_FCALL_BY_NAME/131      $933=     ?0                   ?0                  	;0
2112 989   ECHO/40                   ?0        $933                 ?0                  	;0
2113 990   EXIT/79                   ?0        ?0                   ?0                  	;0
2114 992   GOTO/253                  ?0        ?1050                ?1580               	;0
2115 993   GOTO/253                  ?0        ?1576                ?1581               	;0
2116 995   INIT_METHOD_CALL/112      ?0        16?0                 1583:'get_row'      	;0
2117 995   DO_FCALL/60               $935=     ?0                   ?0                  	;0
2118 995   FETCH_DIM_R/81            $936=     $935                 1585:'count'        	;0
2119 995   JMP_SET/152               #937=     $936                 ?2121               	;0
2120 995   QM_ASSIGN/22              #937=     1586:0               ?0                  	;0
2121 995   ASSIGN_DIM/147            ?883      16?14                1582:'active_accounts'	;0
2122 995   OP_DATA/137               ?0        #937                 ?0                  	;0
2123 996   INIT_METHOD_CALL/112      ?0        16?0                 1587:'query'        	;1
2124 996   INIT_FCALL_BY_NAME/59     ?0        ?0                   1589:'implode'      	;2
2125 996   SEND_VAL_EX/116           ?80       1591:','             ?1                  	;0
2126 996   FETCH_DIM_FUNC_ARG/93     $938=     16?4                 1592:'reports'      	;2
2127 996   SEND_VAR_EX/66            ?96       $938                 ?2                  	;0
2128 996   DO_FCALL_BY_NAME/131      $939=     ?0                   ?0                  	;0
2129 996   CONCAT/8                  #940=     1593:'SELECT SUM(`credits`) AS `credits` FROM `users` WHERE `id` IN (' $939                	;0
2130 996   CONCAT/8                  #941=     #940                 1594:');'           	;0
2131 996   SEND_VAL_EX/116           ?80       #941                 ?1                  	;0
2132 996   DO_FCALL/60               ?891      ?0                   ?0                  	;0
2133 997   INIT_METHOD_CALL/112      ?0        16?0                 1596:'get_row'      	;0
2134 997   DO_FCALL/60               $944=     ?0                   ?0                  	;0
2135 997   FETCH_DIM_R/81            $945=     $944                 1598:'credits'      	;0
2136 997   JMP_SET/152               #946=     $945                 ?2138               	;0
2137 997   QM_ASSIGN/22              #946=     1599:0               ?0                  	;0
2138 997   ASSIGN_DIM/147            ?892      16?14                1595:'credits'      	;0
2139 997   OP_DATA/137               ?0        #946                 ?0                  	;0
2140 998   FETCH_DIM_R/81            $948=     16?14                1601:'credits'      	;0
2141 998   INIT_FCALL_BY_NAME/59     ?0        ?0                   1602:'intval'       	;1
2142 998   FETCH_DIM_FUNC_ARG/93     $949=     16?4                 1604:'credits'      	;1
2143 998   SEND_VAR_EX/66            ?80       $949                 ?1                  	;0
2144 998   DO_FCALL_BY_NAME/131      $950=     ?0                   ?0                  	;0
2145 998   SUB/2                     #951=     $948                 $950                	;0
2146 998   JMP_SET/152               #952=     #951                 ?2148               	;0
2147 998   QM_ASSIGN/22              #952=     1605:0               ?0                  	;0
2148 998   ASSIGN_DIM/147            ?896      16?14                1600:'credits_assigned'	;0
2149 998   OP_DATA/137               ?0        #952                 ?0                  	;0
2150 999   INIT_FCALL_BY_NAME/59     ?0        ?0                   1606:'json_encode'  	;1
2151 999   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
2152 999   DO_FCALL_BY_NAME/131      $953=     ?0                   ?0                  	;0
2153 999   ECHO/40                   ?0        $953                 ?0                  	;0
2154 1000  GOTO/253                  ?0        ?569                 ?1608               	;0
2155 1002  FETCH_DIM_R/81            $954=     16?6                 1609:'reseller_client_connection_logs'	;0
2156 1002  JMPZ/43                   ?0        $954                 ?2158               	;0	>>2158
2157 1003  GOTO/253                  ?0        ?2159                ?1610               	;0
2158 1005  EXIT/79                   ?0        ?0                   ?0                  	;0	<<2156
2159 1007  FETCH_STATIC_PROP_R/173   $955=     1611:'rSettings'     1612:'XUI'          	;0
2160 1007  FETCH_DIM_R/81            $956=     $955                 1614:'redis_handler'	;0
2161 1007  JMPZ/43                   ?0        $956                 ?2163               	;0	>>2163
2162 1008  GOTO/253                  ?0        ?267                 ?1615               	;0
2163 1010  INIT_METHOD_CALL/112      ?0        16?0                 1616:'query'        	;2	<<2161
2164 1010  SEND_VAL_EX/116           ?80       1618:'SELECT * FROM `lines_live` WHERE `user_id` = ?;' ?1                  	;0
2165 1010  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
2166 1010  DO_FCALL/60               ?906      ?0                   ?0                  	;0
2167 1011  GOTO/253                  ?0        ?1                   ?1619               	;0
2168 1014  INIT_FCALL_BY_NAME/59     ?0        ?0                   1620:'json_decode'  	;2
2169 1014  FETCH_DIM_FUNC_ARG/93     $958=     16?12                1622:'bouquets'     	;1
2170 1014  SEND_VAR_EX/66            ?80       $958                 ?1                  	;0
2171 1014  SEND_VAL_EX/116           ?96       1623:true            ?2                  	;0
2172 1014  DO_FCALL_BY_NAME/131      $959=     ?0                   ?0                  	;0
2173 1014  FE_RESET_R/77             $960=     $959                 ?2225               	;0
2174 1014  FE_FETCH_R/78             ?0        $960                 16?21               	;2225	>>2225	<<2224
2175 1015  INIT_METHOD_CALL/112      ?0        16?0                 1624:'query'        	;2
2176 1015  SEND_VAL_EX/116           ?80       1626:'SELECT * FROM `bouquets` WHERE `id` = ?;' ?1                  	;0
2177 1015  SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
2178 1015  DO_FCALL/60               ?910      ?0                   ?0                  	;0
2179 1016  INIT_METHOD_CALL/112      ?0        16?0                 1627:'num_rows'     	;0
2180 1016  DO_FCALL/60               $962=     ?0                   ?0                  	;0
2181 1016  IS_EQUAL/17               #963=     $962                 1629:1              	;0
2182 1016  BOOL_NOT/13               #964=     #963                 ?0                  	;0
2183 1016  JMPZ/43                   ?0        #964                 ?2186               	;0	>>2186
2184 1017  NOP/0                     ?0        ?0                   ?0                  	;1
2185 1017  GOTO/253                  ?0        ?2224                ?1630               	;0
2186 1019  INIT_METHOD_CALL/112      ?0        16?0                 1631:'get_row'      	;0	<<2183
2187 1019  DO_FCALL/60               $965=     ?0                   ?0                  	;0
2188 1019  ASSIGN/38                 ?915      16?1                 $965                	;0
2189 1020  FETCH_DIM_R/81            $968=     16?1                 1633:'id'           	;0
2190 1020  INIT_ARRAY/71             #969=     $968                 1634:'id'           	;26
2191 1020  INIT_FCALL_BY_NAME/59     ?0        ?0                   1635:'str_replace'  	;3
2192 1020  SEND_VAL_EX/116           ?80       1637:'\''            ?1                  	;0
2193 1020  SEND_VAL_EX/116           ?96       1638:'\\\''          ?2                  	;0
2194 1020  FETCH_DIM_FUNC_ARG/93     $970=     16?1                 1639:'bouquet_name' 	;3
2195 1020  SEND_VAR_EX/66            ?112      $970                 ?3                  	;0
2196 1020  DO_FCALL_BY_NAME/131      $971=     ?0                   ?0                  	;0
2197 1020  ADD_ARRAY_ELEMENT/72      #969=     $971                 1640:'bouquet_name' 	;0
2198 1020  INIT_FCALL_BY_NAME/59     ?0        ?0                   1641:'json_decode'  	;2
2199 1020  FETCH_DIM_FUNC_ARG/93     $972=     16?1                 1643:'bouquet_channels'	;1
2200 1020  SEND_VAR_EX/66            ?80       $972                 ?1                  	;0
2201 1020  SEND_VAL_EX/116           ?96       1644:true            ?2                  	;0
2202 1020  DO_FCALL_BY_NAME/131      $973=     ?0                   ?0                  	;0
2203 1020  ADD_ARRAY_ELEMENT/72      #969=     $973                 1645:'bouquet_channels'	;0
2204 1020  INIT_FCALL_BY_NAME/59     ?0        ?0                   1646:'json_decode'  	;2
2205 1020  FETCH_DIM_FUNC_ARG/93     $974=     16?1                 1648:'bouquet_radios'	;1
2206 1020  SEND_VAR_EX/66            ?80       $974                 ?1                  	;0
2207 1020  SEND_VAL_EX/116           ?96       1649:true            ?2                  	;0
2208 1020  DO_FCALL_BY_NAME/131      $975=     ?0                   ?0                  	;0
2209 1020  ADD_ARRAY_ELEMENT/72      #969=     $975                 1650:'bouquet_radios'	;0
2210 1020  INIT_FCALL_BY_NAME/59     ?0        ?0                   1651:'json_decode'  	;2
2211 1020  FETCH_DIM_FUNC_ARG/93     $976=     16?1                 1653:'bouquet_movies'	;1
2212 1020  SEND_VAR_EX/66            ?80       $976                 ?1                  	;0
2213 1020  SEND_VAL_EX/116           ?96       1654:true            ?2                  	;0
2214 1020  DO_FCALL_BY_NAME/131      $977=     ?0                   ?0                  	;0
2215 1020  ADD_ARRAY_ELEMENT/72      #969=     $977                 1655:'bouquet_movies'	;0
2216 1020  INIT_FCALL_BY_NAME/59     ?0        ?0                   1656:'json_decode'  	;2
2217 1020  FETCH_DIM_FUNC_ARG/93     $978=     16?1                 1658:'bouquet_series'	;1
2218 1020  SEND_VAR_EX/66            ?80       $978                 ?1                  	;0
2219 1020  SEND_VAL_EX/116           ?96       1659:true            ?2                  	;0
2220 1020  DO_FCALL_BY_NAME/131      $979=     ?0                   ?0                  	;0
2221 1020  ADD_ARRAY_ELEMENT/72      #969=     $979                 1660:'bouquet_series'	;0
2222 1020  ASSIGN_DIM/147            ?916      16?14                ?2670194944         	;0
2223 1020  OP_DATA/137               ?0        #969                 ?0                  	;0
2224 1022  JMP/42                    ?0        ?2174                ?0                  	;0	>>2174
2225 1022  FE_FREE/127               ?0        $960                 ?0                  	;0	<<2173
2226 1025  FETCH_DIM_R/81            $981=     16?12                1662:'official_duration'	;0
2227 1025  CONCAT/8                  #982=     $981                 1663:' '            	;0
2228 1025  FETCH_DIM_R/81            $983=     16?12                1664:'official_duration_in'	;0
2229 1025  CONCAT/8                  #984=     #982                 $983                	;0
2230 1025  ASSIGN_DIM/147            ?929      16?12                1661:'duration'     	;0
2231 1025  OP_DATA/137               ?0        #984                 ?0                  	;0
2232 1026  INIT_FCALL_BY_NAME/59     ?0        ?0                   1665:'json_encode'  	;1
2233 1026  INIT_ARRAY/71             #985=     1667:true            1668:'result'       	;14
2234 1026  ADD_ARRAY_ELEMENT/72      #985=     16?14                1669:'bouquets'     	;0
2235 1026  ADD_ARRAY_ELEMENT/72      #985=     16?12                1670:'data'         	;0
2236 1026  SEND_VAL_EX/116           ?80       #985                 ?1                  	;0
2237 1026  DO_FCALL_BY_NAME/131      $986=     ?0                   ?0                  	;0
2238 1026  ECHO/40                   ?0        $986                 ?0                  	;0
2239 1027  GOTO/253                  ?0        ?1470                ?1671               	;0
2240 1029  GOTO/253                  ?0        ?570                 ?1672               	;0
2241 1031  ASSIGN/38                 ?936      16?14                1673:array (
  'open_connections' => 0,
  'online_users' => 0,
  'active_accounts' => 0,
  'credits' => 0,
  'credits_assigned' => 0,
)	;0
2242 1032  FETCH_STATIC_PROP_R/173   $988=     1674:'rSettings'     1675:'XUI'          	;0
2243 1032  FETCH_DIM_R/81            $989=     $988                 1677:'redis_handler'	;0
2244 1032  JMPZ/43                   ?0        $989                 ?2246               	;0	>>2246
2245 1033  GOTO/253                  ?0        ?191                 ?1678               	;0
2246 1035  INIT_METHOD_CALL/112      ?0        16?0                 1679:'query'        	;1	<<2244
2247 1035  INIT_FCALL_BY_NAME/59     ?0        ?0                   1681:'implode'      	;2
2248 1035  SEND_VAL_EX/116           ?80       1683:','             ?1                  	;0
2249 1035  FETCH_DIM_FUNC_ARG/93     $990=     16?4                 1684:'reports'      	;2
2250 1035  SEND_VAR_EX/66            ?96       $990                 ?2                  	;0
2251 1035  DO_FCALL_BY_NAME/131      $991=     ?0                   ?0                  	;0
2252 1035  CONCAT/8                  #992=     1685:'SELECT COUNT(`activity_id`) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' $991                	;0
2253 1035  CONCAT/8                  #993=     #992                 1686:');'           	;0
2254 1035  SEND_VAL_EX/116           ?80       #993                 ?1                  	;0
2255 1035  DO_FCALL/60               ?943      ?0                   ?0                  	;0
2256 1036  GOTO/253                  ?0        ?169                 ?1687               	;0
2257 1038  INIT_METHOD_CALL/112      ?0        16?0                 1689:'get_row'      	;0
2258 1038  DO_FCALL/60               $996=     ?0                   ?0                  	;0
2259 1038  FETCH_DIM_R/81            $997=     $996                 1691:'id'           	;0
2260 1038  ASSIGN_DIM/147            ?944      16?14                1688:'total_count'  	;0
2261 1038  OP_DATA/137               ?0        $997                 ?0                  	;0
2262 1039  INIT_METHOD_CALL/112      ?0        16?0                 1692:'query'        	;4
2263 1039  INIT_FCALL_BY_NAME/59     ?0        ?0                   1694:'implode'      	;2
2264 1039  SEND_VAL_EX/116           ?80       1696:','             ?1                  	;0
2265 1039  FETCH_DIM_FUNC_ARG/93     $998=     16?4                 1697:'reports'      	;2
2266 1039  SEND_VAR_EX/66            ?96       $998                 ?2                  	;0
2267 1039  DO_FCALL_BY_NAME/131      $999=     ?0                   ?0                  	;0
2268 1039  CONCAT/8                  #1000=    1698:'SELECT `id`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `member_id` IN (' $999                	;0
2269 1039  CONCAT/8                  #1001=    #1000                1699:') AND (`lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ?) ORDER BY `username` ASC LIMIT '	;0
2270 1039  SUB/2                     #1002=    16?24                1700:1              	;0
2271 1039  MUL/3                     #1003=    #1002                1701:100            	;0
2272 1039  CONCAT/8                  #1004=    #1001                #1003               	;0
2273 1039  CONCAT/8                  #1005=    #1004                1702:', 100;'       	;0
2274 1039  SEND_VAL_EX/116           ?80       #1005                ?1                  	;0
2275 1039  FETCH_STATIC_PROP_R/173   $1006=    1703:'rRequest'      1704:'XUI'          	;0
2276 1039  FETCH_DIM_R/81            $1007=    $1006                1706:'search'       	;0
2277 1039  CONCAT/8                  #1008=    1707:'%'             $1007               	;0
2278 1039  CONCAT/8                  #1009=    #1008                1708:'%'            	;0
2279 1039  SEND_VAL_EX/116           ?96       #1009                ?2                  	;0
2280 1039  FETCH_STATIC_PROP_R/173   $1010=    1709:'rRequest'      1710:'XUI'          	;0
2281 1039  FETCH_DIM_R/81            $1011=    $1010                1712:'search'       	;0
2282 1039  CONCAT/8                  #1012=    1713:'%'             $1011               	;0
2283 1039  CONCAT/8                  #1013=    #1012                1714:'%'            	;0
2284 1039  SEND_VAL_EX/116           ?112      #1013                ?3                  	;0
2285 1039  FETCH_STATIC_PROP_R/173   $1014=    1715:'rRequest'      1716:'XUI'          	;0
2286 1039  FETCH_DIM_R/81            $1015=    $1014                1718:'search'       	;0
2287 1039  CONCAT/8                  #1016=    1719:'%'             $1015               	;0
2288 1039  CONCAT/8                  #1017=    #1016                1720:'%'            	;0
2289 1039  SEND_VAL_EX/116           ?128      #1017                ?4                  	;0
2290 1039  DO_FCALL/60               ?967      ?0                   ?0                  	;0
2291 1040  INIT_METHOD_CALL/112      ?0        16?0                 1721:'num_rows'     	;0
2292 1040  DO_FCALL/60               $1019=    ?0                   ?0                  	;0
2293 1040  IS_SMALLER/19             #1020=    1723:0               $1019               	;0
2294 1040  BOOL_NOT/13               #1021=    #1020                ?0                  	;0
2295 1040  JMPZ/43                   ?0        #1021                ?2297               	;0	>>2297
2296 1041  GOTO/253                  ?0        ?2364                ?1724               	;0
2297 1043  INIT_METHOD_CALL/112      ?0        16?0                 1725:'get_rows'     	;0	<<2295
2298 1043  DO_FCALL/60               $1022=    ?0                   ?0                  	;0
2299 1043  FE_RESET_R/77             $1023=    $1022                ?2309               	;0
2300 1043  FE_FETCH_R/78             ?0        $1023                16?1                	;2309	>>2309	<<2308
2301 1044  FETCH_DIM_R/81            $1026=    16?1                 1728:'id'           	;0
2302 1044  INIT_ARRAY/71             #1027=    $1026                1729:'id'           	;10
2303 1044  FETCH_DIM_R/81            $1028=    16?1                 1730:'username'     	;0
2304 1044  ADD_ARRAY_ELEMENT/72      #1027=    $1028                1731:'text'         	;0
2305 1044  FETCH_DIM_W/84            $1024=    16?14                1727:'items'        	;0
2306 1044  ASSIGN_DIM/147            ?974      $1024                ?4414262            	;0
2307 1044  OP_DATA/137               ?0        #1027                ?0                  	;0
2308 1045  JMP/42                    ?0        ?2300                ?0                  	;0	>>2300
2309 1045  FE_FREE/127               ?0        $1023                ?0                  	;0	<<2299
2310 1048  GOTO/253                  ?0        ?2364                ?1732               	;0
2311 1050  FETCH_DIM_R/81            $1029=    16?6                 1733:'delete_users' 	;0
2312 1050  JMPZ/43                   ?0        $1029                ?2314               	;0	>>2314
2313 1051  GOTO/253                  ?0        ?2315                ?1734               	;0
2314 1053  EXIT/79                   ?0        ?0                   ?0                  	;0	<<2312
2315 1055  INIT_FCALL_BY_NAME/59     ?0        ?0                   1735:'intval'       	;1
2316 1055  FETCH_DIM_FUNC_ARG/93     $1030=    16?4                 1737:'credits'      	;1
2317 1055  SEND_VAR_EX/66            ?80       $1030                ?1                  	;0
2318 1055  DO_FCALL_BY_NAME/131      $1031=    ?0                   ?0                  	;0
2319 1055  INIT_FCALL_BY_NAME/59     ?0        ?0                   1738:'intval'       	;1
2320 1055  FETCH_DIM_FUNC_ARG/93     $1032=    16?20                1740:'credits'      	;1
2321 1055  SEND_VAR_EX/66            ?80       $1032                ?1                  	;0
2322 1055  DO_FCALL_BY_NAME/131      $1033=    ?0                   ?0                  	;0
2323 1055  ADD/1                     #1034=    $1031                $1033               	;0
2324 1055  ASSIGN/38                 ?984      16?42                #1034               	;0
2325 1056  INIT_METHOD_CALL/112      ?0        16?0                 1741:'query'        	;3
2326 1056  SEND_VAL_EX/116           ?80       1743:'UPDATE `users` SET `credits` = ? WHERE `id` = ?;' ?1                  	;0
2327 1056  SEND_VAR_EX/66            ?96       16?42                ?2                  	;0
2328 1056  FETCH_DIM_FUNC_ARG/93     $1036=    16?4                 1744:'id'           	;3
2329 1056  SEND_VAR_EX/66            ?112      $1036                ?3                  	;0
2330 1056  DO_FCALL/60               ?986      ?0                   ?0                  	;0
2331 1057  GOTO/253                  ?0        ?1760                ?1745               	;0
2332 1059  INIT_FCALL_BY_NAME/59     ?0        ?0                   1746:'json_encode'  	;1
2333 1059  SEND_VAL_EX/116           ?80       1748:array (
  'result' => true,
) ?1                  	;0
2334 1059  DO_FCALL_BY_NAME/131      $1038=    ?0                   ?0                  	;0
2335 1059  ECHO/40                   ?0        $1038                ?0                  	;0
2336 1060  EXIT/79                   ?0        ?0                   ?0                  	;0
2337 1062  GOTO/253                  ?0        ?2913                ?1749               	;0
2338 1064  GOTO/253                  ?0        ?2885                ?1750               	;0
2339 1066  INIT_METHOD_CALL/112      ?0        16?0                 1751:'get_row'      	;0
2340 1066  DO_FCALL/60               $1039=    ?0                   ?0                  	;0
2341 1066  ASSIGN/38                 ?989      16?1                 $1039               	;0
2342 1067  INIT_FCALL_BY_NAME/59     ?0        ?0                   1754:'date'         	;2
2343 1067  SEND_VAL_EX/116           ?80       1756:'H:i'           ?1                  	;0
2344 1067  FETCH_DIM_FUNC_ARG/93     $1042=    16?1                 1757:'start'        	;2
2345 1067  SEND_VAR_EX/66            ?96       $1042                ?2                  	;0
2346 1067  DO_FCALL_BY_NAME/131      $1043=    ?0                   ?0                  	;0
2347 1067  CONCAT/8                  #1044=    $1043                1758:' - '          	;0
2348 1067  INIT_FCALL_BY_NAME/59     ?0        ?0                   1759:'date'         	;2
2349 1067  SEND_VAL_EX/116           ?80       1761:'H:i'           ?1                  	;0
2350 1067  FETCH_DIM_FUNC_ARG/93     $1045=    16?1                 1762:'end'          	;2
2351 1067  SEND_VAR_EX/66            ?96       $1045                ?2                  	;0
2352 1067  DO_FCALL_BY_NAME/131      $1046=    ?0                   ?0                  	;0
2353 1067  CONCAT/8                  #1047=    #1044                $1046               	;0
2354 1067  ASSIGN_DIM/147            ?990      16?1                 1753:'date'         	;0
2355 1067  OP_DATA/137               ?0        #1047                ?0                  	;0
2356 1068  INIT_FCALL_BY_NAME/59     ?0        ?0                   1763:'json_encode'  	;1
2357 1068  INIT_ARRAY/71             #1048=    1765:true            1766:'result'       	;10
2358 1068  ADD_ARRAY_ELEMENT/72      #1048=    16?1                 1767:'data'         	;0
2359 1068  SEND_VAL_EX/116           ?80       #1048                ?1                  	;0
2360 1068  DO_FCALL_BY_NAME/131      $1049=    ?0                   ?0                  	;0
2361 1068  ECHO/40                   ?0        $1049                ?0                  	;0
2362 1069  EXIT/79                   ?0        ?0                   ?0                  	;0
2363 1071  GOTO/253                  ?0        ?2109                ?1768               	;0
2364 1075  INIT_FCALL_BY_NAME/59     ?0        ?0                   1769:'json_encode'  	;1
2365 1075  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
2366 1075  DO_FCALL_BY_NAME/131      $1050=    ?0                   ?0                  	;0
2367 1075  ECHO/40                   ?0        $1050                ?0                  	;0
2368 1076  EXIT/79                   ?0        ?0                   ?0                  	;0
2369 1078  GOTO/253                  ?0        ?2605                ?1771               	;0
2370 1080  INIT_METHOD_CALL/112      ?0        16?0                 1772:'query'        	;1
2371 1080  INIT_FCALL_BY_NAME/59     ?0        ?0                   1774:'implode'      	;2
2372 1080  SEND_VAL_EX/116           ?80       1776:','             ?1                  	;0
2373 1080  FETCH_DIM_FUNC_ARG/93     $1051=    16?4                 1777:'reports'      	;2
2374 1080  SEND_VAR_EX/66            ?96       $1051                ?2                  	;0
2375 1080  DO_FCALL_BY_NAME/131      $1052=    ?0                   ?0                  	;0
2376 1080  CONCAT/8                  #1053=    1778:'SELECT COUNT(*) AS `count` FROM `lines` WHERE `member_id` IN (' $1052               	;0
2377 1080  CONCAT/8                  #1054=    #1053                1779:');'           	;0
2378 1080  SEND_VAL_EX/116           ?80       #1054                ?1                  	;0
2379 1080  DO_FCALL/60               ?1004     ?0                   ?0                  	;0
2380 1081  INIT_METHOD_CALL/112      ?0        16?0                 1781:'get_row'      	;0
2381 1081  DO_FCALL/60               $1057=    ?0                   ?0                  	;0
2382 1081  FETCH_DIM_R/81            $1058=    $1057                1783:'count'        	;0
2383 1081  ASSIGN_DIM/147            ?1005     16?14                1780:'total_lines'  	;0
2384 1081  OP_DATA/137               ?0        $1058                ?0                  	;0
2385 1082  INIT_METHOD_CALL/112      ?0        16?0                 1784:'query'        	;1
2386 1082  INIT_FCALL_BY_NAME/59     ?0        ?0                   1786:'implode'      	;2
2387 1082  SEND_VAL_EX/116           ?80       1788:','             ?1                  	;0
2388 1082  FETCH_DIM_FUNC_ARG/93     $1059=    16?4                 1789:'reports'      	;2
2389 1082  SEND_VAR_EX/66            ?96       $1059                ?2                  	;0
2390 1082  DO_FCALL_BY_NAME/131      $1060=    ?0                   ?0                  	;0
2391 1082  CONCAT/8                  #1061=    1790:'SELECT COUNT(*) AS `count`, SUM(`credits`) AS `credits` FROM `users` WHERE `owner_id` IN (' $1060               	;0
2392 1082  CONCAT/8                  #1062=    #1061                1791:');'           	;0
2393 1082  SEND_VAL_EX/116           ?80       #1062                ?1                  	;0
2394 1082  DO_FCALL/60               ?1012     ?0                   ?0                  	;0
2395 1083  INIT_METHOD_CALL/112      ?0        16?0                 1792:'get_row'      	;0
2396 1083  DO_FCALL/60               $1064=    ?0                   ?0                  	;0
2397 1083  ASSIGN/38                 ?1014     16?1                 $1064               	;0
2398 1084  FETCH_DIM_R/81            $1067=    16?1                 1795:'count'        	;0
2399 1084  ASSIGN_DIM/147            ?1015     16?14                1794:'total_users'  	;0
2400 1084  OP_DATA/137               ?0        $1067                ?0                  	;0
2401 1085  GOTO/253                  ?0        ?2644                ?1796               	;0
2402 1087  ASSIGN/38                 ?1017     16?14                1797:array (
)      	;0
2403 1088  INIT_METHOD_CALL/112      ?0        16?0                 1798:'query'        	;2
2404 1088  SEND_VAL_EX/116           ?80       1800:'SELECT `bouquets`, `trial_credits` AS `cost_credits`, `trial_duration`, `trial_duration_in`, `max_connections`, `is_isplock` FROM `users_packages` WHERE `id` = ?;' ?1                  	;0
2405 1088  FETCH_STATIC_PROP_FUNC_ARG/177 $1069=    1801:'rRequest'      1802:'XUI'          	;2
2406 1088  FETCH_DIM_FUNC_ARG/93     $1070=    $1069                1804:'package_id'   	;2
2407 1088  SEND_VAR_EX/66            ?96       $1070                ?2                  	;0
2408 1088  DO_FCALL/60               ?1020     ?0                   ?0                  	;0
2409 1089  INIT_METHOD_CALL/112      ?0        16?0                 1805:'num_rows'     	;0
2410 1089  DO_FCALL/60               $1072=    ?0                   ?0                  	;0
2411 1089  IS_EQUAL/17               #1073=    $1072                1807:1              	;0
2412 1089  JMPZ/43                   ?0        #1073                ?2414               	;0	>>2414
2413 1090  GOTO/253                  ?0        ?473                 ?1808               	;0
2414 1092  INIT_FCALL_BY_NAME/59     ?0        ?0                   1809:'json_encode'  	;1	<<2412
2415 1092  SEND_VAL_EX/116           ?80       1811:array (
  'result' => false,
) ?1                  	;0
2416 1092  DO_FCALL_BY_NAME/131      $1074=    ?0                   ?0                  	;0
2417 1092  ECHO/40                   ?0        $1074                ?0                  	;0
2418 1093  GOTO/253                  ?0        ?2727                ?1812               	;0
2419 1094  GOTO/253                  ?0        ?473                 ?1813               	;0
2420 1096  GOTO/253                  ?0        ?2938                ?1814               	;0
2421 1098  ASSIGN_DIM/147            ?1024     16?12                1815:'need_confirm' 	;0
2422 1098  OP_DATA/137               ?0        1816:0               ?0                  	;0
2423 1099  ASSIGN_DIM/147            ?1025     16?12                1817:'reboot_portal'	;0
2424 1099  OP_DATA/137               ?0        1818:0               ?0                  	;0
2425 1100  INIT_FCALL_BY_NAME/59     ?0        ?0                   1820:'intval'       	;1
2426 1100  FETCH_DIM_FUNC_ARG/93     $1078=    16?12                1822:'channel'      	;1
2427 1100  SEND_VAR_EX/66            ?80       $1078                ?1                  	;0
2428 1100  DO_FCALL_BY_NAME/131      $1079=    ?0                   ?0                  	;0
2429 1100  ASSIGN_DIM/147            ?1026     16?12                1819:'message'      	;0
2430 1100  OP_DATA/137               ?0        $1079                ?0                  	;0
2431 1101  GOTO/253                  ?0        ?2938                ?1823               	;0
2432 1103  INIT_FCALL_BY_NAME/59     ?0        ?0                   1824:'json_encode'  	;1
2433 1103  SEND_VAL_EX/116           ?80       1826:array (
  'result' => true,
) ?1                  	;0
2434 1103  DO_FCALL_BY_NAME/131      $1080=    ?0                   ?0                  	;0
2435 1103  ECHO/40                   ?0        $1080                ?0                  	;0
2436 1104  EXIT/79                   ?0        ?0                   ?0                  	;0
2437 1106  GOTO/253                  ?0        ?1416                ?1827               	;0
2438 1108  GOTO/253                  ?0        ?1387                ?1828               	;0
2439 1110  GOTO/253                  ?0        ?261                 ?1829               	;0
2440 1112  INIT_FCALL_BY_NAME/59     ?0        ?0                   1830:'A486863e198221fa'	;1
2441 1112  FETCH_STATIC_PROP_FUNC_ARG/177 $1081=    1832:'rRequest'      1833:'XUI'          	;1
2442 1112  FETCH_DIM_FUNC_ARG/93     $1082=    $1081                1835:'e2_id'        	;1
2443 1112  SEND_VAR_EX/66            ?80       $1082                ?1                  	;0
2444 1112  DO_FCALL_BY_NAME/131      ?1032     ?0                   ?0                  	;0
2445 1113  INIT_METHOD_CALL/112      ?0        16?0                 1836:'query'        	;8
2446 1113  SEND_VAL_EX/116           ?80       1838:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
2447 1113  FETCH_DIM_FUNC_ARG/93     $1084=    16?4                 1839:'id'           	;2
2448 1113  SEND_VAR_EX/66            ?96       $1084                ?2                  	;0
2449 1113  SEND_VAL_EX/116           ?112      1840:'delete'        ?3                  	;0
2450 1113  FETCH_STATIC_PROP_FUNC_ARG/177 $1085=    1841:'rRequest'      1842:'XUI'          	;4
2451 1113  FETCH_DIM_FUNC_ARG/93     $1086=    $1085                1844:'e2_id'        	;4
2452 1113  SEND_VAR_EX/66            ?128      $1086                ?4                  	;0
2453 1113  SEND_VAL_EX/116           ?144      1845:0               ?5                  	;0
2454 1113  FETCH_DIM_FUNC_ARG/93     $1087=    16?4                 1846:'credits'      	;6
2455 1113  SEND_VAR_EX/66            ?160      $1087                ?6                  	;0
2456 1113  INIT_FCALL_BY_NAME/59     ?0        ?0                   1847:'time'         	;0
2457 1113  DO_FCALL_BY_NAME/131      $1088=    ?0                   ?0                  	;0
2458 1113  SEND_VAR_NO_REF_EX/50     ?176      $1088                ?7                  	;0
2459 1113  INIT_FCALL_BY_NAME/59     ?0        ?0                   1849:'json_encode'  	;1
2460 1113  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
2461 1113  DO_FCALL_BY_NAME/131      $1089=    ?0                   ?0                  	;0
2462 1113  SEND_VAR_NO_REF_EX/50     ?192      $1089                ?8                  	;0
2463 1113  DO_FCALL/60               ?1039     ?0                   ?0                  	;0
2464 1114  INIT_FCALL_BY_NAME/59     ?0        ?0                   1851:'json_encode'  	;1
2465 1114  SEND_VAL_EX/116           ?80       1853:array (
  'result' => true,
) ?1                  	;0
2466 1114  DO_FCALL_BY_NAME/131      $1091=    ?0                   ?0                  	;0
2467 1114  ECHO/40                   ?0        $1091                ?0                  	;0
2468 1115  GOTO/253                  ?0        ?260                 ?1854               	;0
2469 1117  INIT_FCALL_BY_NAME/59     ?0        ?0                   1855:'E589a4bF54A2dad1'	;2
2470 1117  SEND_VAL_EX/116           ?80       1857:'line'          ?1                  	;0
2471 1117  FETCH_DIM_FUNC_ARG/93     $1092=    16?1                 1858:'user_id'      	;2
2472 1117  SEND_VAR_EX/66            ?96       $1092                ?2                  	;0
2473 1117  DO_FCALL_BY_NAME/131      $1093=    ?0                   ?0                  	;0
2474 1117  JMPZ/43                   ?0        $1093                ?2476               	;0	>>2476
2475 1118  GOTO/253                  ?0        ?2481                ?1859               	;0
2476 1120  INIT_FCALL_BY_NAME/59     ?0        ?0                   1860:'json_encode'  	;1	<<2474
2477 1120  SEND_VAL_EX/116           ?80       1862:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
2478 1120  DO_FCALL_BY_NAME/131      $1094=    ?0                   ?0                  	;0
2479 1120  ECHO/40                   ?0        $1094                ?0                  	;0
2480 1121  EXIT/79                   ?0        ?0                   ?0                  	;0
2481 1123  INIT_STATIC_METHOD_CALL/113 ?0        1863:'XUI'           1865:'B0020C716fDF67bb'	;1
2482 1123  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
2483 1123  DO_FCALL/60               ?1044     ?0                   ?0                  	;0
2484 1124  GOTO/253                  ?0        ?2524                ?1867               	;0
2485 1126  EXIT/79                   ?0        ?0                   ?0                  	;0
2486 1128  GOTO/253                  ?0        ?167                 ?1868               	;0
2487 1130  FETCH_DIM_R/81            $1096=    16?6                 1869:'create_sub_resellers'	;0
2488 1130  JMPZ/43                   ?0        $1096                ?2490               	;0	>>2490
2489 1131  GOTO/253                  ?0        ?1138                ?1870               	;0
2490 1133  GOTO/253                  ?0        ?1137                ?1871               	;0	<<2488
2491 1135  INIT_METHOD_CALL/112      ?0        16?0                 1872:'query'        	;1
2492 1135  INIT_FCALL_BY_NAME/59     ?0        ?0                   1874:'implode'      	;2
2493 1135  SEND_VAL_EX/116           ?80       1876:','             ?1                  	;0
2494 1135  FETCH_DIM_FUNC_ARG/93     $1097=    16?4                 1877:'reports'      	;2
2495 1135  SEND_VAR_EX/66            ?96       $1097                ?2                  	;0
2496 1135  DO_FCALL_BY_NAME/131      $1098=    ?0                   ?0                  	;0
2497 1135  CONCAT/8                  #1099=    1878:'SELECT COUNT(`activity_id`) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' $1098               	;0
2498 1135  CONCAT/8                  #1100=    #1099                1879:');'           	;0
2499 1135  SEND_VAL_EX/116           ?80       #1100                ?1                  	;0
2500 1135  DO_FCALL/60               ?1050     ?0                   ?0                  	;0
2501 1136  INIT_METHOD_CALL/112      ?0        16?0                 1881:'get_row'      	;0
2502 1136  DO_FCALL/60               $1103=    ?0                   ?0                  	;0
2503 1136  FETCH_DIM_R/81            $1104=    $1103                1883:'count'        	;0
2504 1136  JMP_SET/152               #1105=    $1104                ?2506               	;0
2505 1136  QM_ASSIGN/22              #1105=    1884:0               ?0                  	;0
2506 1136  ASSIGN_DIM/147            ?1051     16?14                1880:'total_connections'	;0
2507 1136  OP_DATA/137               ?0        #1105                ?0                  	;0
2508 1137  INIT_METHOD_CALL/112      ?0        16?0                 1885:'query'        	;1
2509 1137  INIT_FCALL_BY_NAME/59     ?0        ?0                   1887:'implode'      	;2
2510 1137  SEND_VAL_EX/116           ?80       1889:','             ?1                  	;0
2511 1137  FETCH_DIM_FUNC_ARG/93     $1106=    16?4                 1890:'reports'      	;2
2512 1137  SEND_VAR_EX/66            ?96       $1106                ?2                  	;0
2513 1137  DO_FCALL_BY_NAME/131      $1107=    ?0                   ?0                  	;0
2514 1137  CONCAT/8                  #1108=    1891:'SELECT `activity_id` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' $1107               	;0
2515 1137  CONCAT/8                  #1109=    #1108                1892:') GROUP BY `lines_live`.`user_id`;'	;0
2516 1137  SEND_VAL_EX/116           ?80       #1109                ?1                  	;0
2517 1137  DO_FCALL/60               ?1059     ?0                   ?0                  	;0
2518 1138  INIT_METHOD_CALL/112      ?0        16?0                 1894:'num_rows'     	;0
2519 1138  DO_FCALL/60               $1112=    ?0                   ?0                  	;0
2520 1138  ASSIGN_DIM/147            ?1060     16?14                1893:'total_users'  	;0
2521 1138  OP_DATA/137               ?0        $1112                ?0                  	;0
2522 1139  GOTO/253                  ?0        ?231                 ?1896               	;0
2523 1140  GOTO/253                  ?0        ?46                  ?1897               	;0
2524 1142  INIT_FCALL_BY_NAME/59     ?0        ?0                   1898:'json_encode'  	;1
2525 1142  SEND_VAL_EX/116           ?80       1900:array (
  'result' => true,
) ?1                  	;0
2526 1142  DO_FCALL_BY_NAME/131      $1113=    ?0                   ?0                  	;0
2527 1142  ECHO/40                   ?0        $1113                ?0                  	;0
2528 1143  EXIT/79                   ?0        ?0                   ?0                  	;0
2529 1145  GOTO/253                  ?0        ?876                 ?1901               	;0
2530 1147  GOTO/253                  ?0        ?355                 ?1902               	;0
2531 1149  FETCH_DIM_R/81            $1114=    16?48                1903:'member_id'    	;0
2532 1149  FETCH_DIM_R/81            $1115=    16?4                 1904:'id'           	;0
2533 1149  IS_EQUAL/17               #1116=    $1114                $1115               	;0
2534 1149  BOOL_NOT/13               #1117=    #1116                ?0                  	;0
2535 1149  JMPZ/43                   ?0        #1117                ?2537               	;0	>>2537
2536 1150  GOTO/253                  ?0        ?2538                ?1905               	;0
2537 1152  EXIT/79                   ?0        ?0                   ?0                  	;0	<<2535
2538 1154  INIT_METHOD_CALL/112      ?0        16?0                 1906:'query'        	;2
2539 1154  SEND_VAL_EX/116           ?80       1908:'UPDATE `tickets` SET `status` = 1 WHERE `id` = ?;' ?1                  	;0
2540 1154  FETCH_STATIC_PROP_FUNC_ARG/177 $1118=    1909:'rRequest'      1910:'XUI'          	;2
2541 1154  FETCH_DIM_FUNC_ARG/93     $1119=    $1118                1912:'ticket_id'    	;2
2542 1154  SEND_VAR_EX/66            ?96       $1119                ?2                  	;0
2543 1154  DO_FCALL/60               ?1069     ?0                   ?0                  	;0
2544 1155  INIT_FCALL_BY_NAME/59     ?0        ?0                   1913:'json_encode'  	;1
2545 1155  SEND_VAL_EX/116           ?80       1915:array (
  'result' => true,
) ?1                  	;0
2546 1155  DO_FCALL_BY_NAME/131      $1121=    ?0                   ?0                  	;0
2547 1155  ECHO/40                   ?0        $1121                ?0                  	;0
2548 1156  GOTO/253                  ?0        ?2661                ?1916               	;0
2549 1159  GOTO/253                  ?0        ?1471                ?1917               	;0
2550 1161  ASSIGN/38                 ?1071     16?14                1918:array (
)      	;0
2551 1162  INIT_FCALL_BY_NAME/59     ?0        ?0                   1919:'json_decode'  	;2
2552 1162  FETCH_DIM_FUNC_ARG/93     $1123=    16?4                 1921:'override_packages'	;1
2553 1162  SEND_VAR_EX/66            ?80       $1123                ?1                  	;0
2554 1162  SEND_VAL_EX/116           ?96       1922:true            ?2                  	;0
2555 1162  DO_FCALL_BY_NAME/131      $1124=    ?0                   ?0                  	;0
2556 1162  ASSIGN/38                 ?1074     16?13                $1124               	;0
2557 1163  GOTO/253                  ?0        ?1965                ?1923               	;0
2558 1165  FETCH_STATIC_PROP_R/173   $1126=    1924:'rRequest'      1925:'XUI'          	;0
2559 1165  FETCH_DIM_R/81            $1127=    $1126                1927:'action'       	;0
2560 1165  IS_EQUAL/17               #1128=    $1127                1928:'stats'        	;0
2561 1165  JMPZ/43                   ?0        #1128                ?2563               	;0	>>2563
2562 1166  GOTO/253                  ?0        ?2606                ?1929               	;0
2563 1168  FETCH_STATIC_PROP_R/173   $1129=    1930:'rRequest'      1931:'XUI'          	;0	<<2561
2564 1168  FETCH_DIM_R/81            $1130=    $1129                1933:'action'       	;0
2565 1168  IS_EQUAL/17               #1131=    $1130                1934:'userlist'     	;0
2566 1168  JMPZ/43                   ?0        #1131                ?2568               	;0	>>2568
2567 1169  GOTO/253                  ?0        ?638                 ?1935               	;0
2568 1171  FETCH_STATIC_PROP_R/173   $1132=    1936:'rRequest'      1937:'XUI'          	;0	<<2566
2569 1171  FETCH_DIM_R/81            $1133=    $1132                1939:'action'       	;0
2570 1171  IS_EQUAL/17               #1134=    $1133                1940:'send_event'   	;0
2571 1171  JMPZ/43                   ?0        #1134                ?2573               	;0	>>2573
2572 1172  GOTO/253                  ?0        ?157                 ?1941               	;0
2573 1174  FETCH_STATIC_PROP_R/173   $1135=    1942:'rRequest'      1943:'XUI'          	;0	<<2571
2574 1174  FETCH_DIM_R/81            $1136=    $1135                1945:'action'       	;0
2575 1174  IS_EQUAL/17               #1137=    $1136                1946:'streamlist'   	;0
2576 1174  JMPZ/43                   ?0        #1137                ?2578               	;0	>>2578
2577 1175  GOTO/253                  ?0        ?287                 ?1947               	;0
2578 1177  FETCH_STATIC_PROP_R/173   $1138=    1948:'rRequest'      1949:'XUI'          	;0	<<2576
2579 1177  FETCH_DIM_R/81            $1139=    $1138                1951:'action'       	;0
2580 1177  IS_EQUAL/17               #1140=    $1139                1952:'ip_whois'     	;0
2581 1177  JMPZ/43                   ?0        #1140                ?2583               	;0	>>2583
2582 1178  GOTO/253                  ?0        ?1051                ?1953               	;0
2583 1180  GOTO/253                  ?0        ?331                 ?1954               	;0	<<2581
2584 1182  GOTO/253                  ?0        ?2604                ?1955               	;0
2585 1184  INIT_FCALL_BY_NAME/59     ?0        ?0                   1957:'date'         	;2
2586 1184  SEND_VAL_EX/116           ?80       1959:'Y-m-d H:i'     ?1                  	;0
2587 1184  INIT_FCALL_BY_NAME/59     ?0        ?0                   1960:'strtotime'    	;2
2588 1184  INIT_FCALL_BY_NAME/59     ?0        ?0                   1962:'intval'       	;1
2589 1184  FETCH_DIM_FUNC_ARG/93     $1142=    16?12                1964:'official_duration'	;1
2590 1184  SEND_VAR_EX/66            ?80       $1142                ?1                  	;0
2591 1184  DO_FCALL_BY_NAME/131      $1143=    ?0                   ?0                  	;0
2592 1184  CONCAT/8                  #1144=    1965:'+'             $1143               	;0
2593 1184  CONCAT/8                  #1145=    #1144                1966:' '            	;0
2594 1184  FETCH_DIM_R/81            $1146=    16?12                1967:'official_duration_in'	;0
2595 1184  CONCAT/8                  #1147=    #1145                $1146               	;0
2596 1184  SEND_VAL_EX/116           ?80       #1147                ?1                  	;0
2597 1184  FETCH_DIM_FUNC_ARG/93     $1148=    16?20                1968:'exp_date'     	;2
2598 1184  SEND_VAR_EX/66            ?96       $1148                ?2                  	;0
2599 1184  DO_FCALL_BY_NAME/131      $1149=    ?0                   ?0                  	;0
2600 1184  SEND_VAR_NO_REF_EX/50     ?96       $1149                ?2                  	;0
2601 1184  DO_FCALL_BY_NAME/131      $1150=    ?0                   ?0                  	;0
2602 1184  ASSIGN_DIM/147            ?1090     16?12                1956:'exp_date'     	;0
2603 1184  OP_DATA/137               ?0        $1150                ?0                  	;0
2604 1187  GOTO/253                  ?0        ?2168                ?1969               	;0
2605 1189  GOTO/253                  ?0        ?831                 ?1970               	;0
2606 1191  ASSIGN/38                 ?1100     16?14                1971:array (
  'open_connections' => 0,
  'online_users' => 0,
  'total_lines' => 0,
  'total_users' => 0,
  'owner_credits' => 0,
  'user_credits' => 0,
  'total_credits' => 0,
)	;0
2607 1192  ASSIGN/38                 ?1101     16?49                1972:0              	;0
2608 1193  FETCH_STATIC_PROP_R/173   $1153=    1973:'rSettings'     1974:'XUI'          	;0
2609 1193  FETCH_DIM_R/81            $1154=    $1153                1976:'redis_handler'	;0
2610 1193  JMPZ/43                   ?0        $1154                ?2612               	;0	>>2612
2611 1194  GOTO/253                  ?0        ?438                 ?1977               	;0
2612 1196  GOTO/253                  ?0        ?1417                ?1978               	;0	<<2610
2613 1198  NEW/68                    $1155=    1979:'MaxMind\\Db\\Reader' ?128                	;1
2614 1198  FETCH_CONSTANT/99         #1156=    ?0                   1981:'GEOLITE2C_BIN'	;16
2615 1198  SEND_VAL_EX/116           ?80       #1156                ?1                  	;0
2616 1198  DO_FCALL/60               ?1106     ?8                   ?0                  	;0
2617 1198  ASSIGN/38                 ?1107     16?44                $1155               	;0
2618 1199  INIT_METHOD_CALL/112      ?0        16?44                1984:'get'          	;1
2619 1199  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
2620 1199  DO_FCALL/60               $1159=    ?0                   ?0                  	;0
2621 1199  ASSIGN/38                 ?1109     16?43                $1159               	;0
2622 1200  FETCH_DIM_IS/90           $1161=    16?43                1986:'location'     	;0
2623 1200  ISSET_ISEMPTY_DIM_OBJ/115 #1162=    $1161                1987:'time_zone'    	;33554432
2624 1200  BOOL_NOT/13               #1163=    #1162                ?0                  	;0
2625 1200  JMPZ/43                   ?0        #1163                ?2627               	;0	>>2627
2626 1201  GOTO/253                  ?0        ?3026                ?1988               	;0
2627 1203  NEW/68                    $1164=    1989:'DateTime'      ?288                	;2	<<2625
2628 1203  SEND_VAL_EX/116           ?80       1991:'now'           ?1                  	;0
2629 1203  NEW/68                    $1165=    1992:'DateTimeZone'  ?160                	;1
2630 1203  FETCH_DIM_FUNC_ARG/93     $1166=    16?43                1994:'location'     	;1
2631 1203  FETCH_DIM_FUNC_ARG/93     $1167=    $1166                1995:'time_zone'    	;1
2632 1203  SEND_VAR_EX/66            ?80       $1167                ?1                  	;0
2633 1203  DO_FCALL/60               ?1117     ?8                   ?0                  	;0
2634 1203  SEND_VAR_NO_REF_EX/50     ?96       $1165                ?2                  	;0
2635 1203  DO_FCALL/60               ?1118     ?8                   ?0                  	;0
2636 1203  ASSIGN/38                 ?1119     16?50                $1164               	;0
2637 1204  INIT_METHOD_CALL/112      ?0        16?50                1998:'format'       	;1
2638 1204  SEND_VAL_EX/116           ?80       2000:'Y-m-d H:i:s'   ?1                  	;0
2639 1204  DO_FCALL/60               $1173=    ?0                   ?0                  	;0
2640 1204  FETCH_DIM_W/84            $1171=    16?43                1996:'location'     	;0
2641 1204  ASSIGN_DIM/147            ?1121     $1171                1997:'time'         	;0
2642 1204  OP_DATA/137               ?0        $1173                ?0                  	;0
2643 1205  GOTO/253                  ?0        ?3026                ?2001               	;0
2644 1207  FETCH_DIM_R/81            $1175=    16?1                 2003:'credits'      	;0
2645 1207  ASSIGN_DIM/147            ?1123     16?14                2002:'user_credits' 	;0
2646 1207  OP_DATA/137               ?0        $1175                ?0                  	;0
2647 1208  FETCH_DIM_R/81            $1177=    16?4                 2005:'credits'      	;0
2648 1208  ASSIGN_DIM/147            ?1125     16?14                2004:'owner_credits'	;0
2649 1208  OP_DATA/137               ?0        $1177                ?0                  	;0
2650 1209  FETCH_DIM_R/81            $1179=    16?14                2007:'owner_credits'	;0
2651 1209  FETCH_DIM_R/81            $1180=    16?14                2008:'user_credits' 	;0
2652 1209  ADD/1                     #1181=    $1179                $1180               	;0
2653 1209  ASSIGN_DIM/147            ?1127     16?14                2006:'total_credits'	;0
2654 1209  OP_DATA/137               ?0        #1181                ?0                  	;0
2655 1210  INIT_FCALL_BY_NAME/59     ?0        ?0                   2009:'json_encode'  	;1
2656 1210  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
2657 1210  DO_FCALL_BY_NAME/131      $1182=    ?0                   ?0                  	;0
2658 1210  ECHO/40                   ?0        $1182                ?0                  	;0
2659 1211  EXIT/79                   ?0        ?0                   ?0                  	;0
2660 1212  GOTO/253                  ?0        ?831                 ?2011               	;0
2661 1214  EXIT/79                   ?0        ?0                   ?0                  	;0
2662 1216  GOTO/253                  ?0        ?1755                ?2012               	;0
2663 1218  INIT_METHOD_CALL/112      ?0        16?0                 2013:'query'        	;2
2664 1218  SEND_VAL_EX/116           ?80       2015:'UPDATE `tickets` SET `status` = 0 WHERE `id` = ?;' ?1                  	;0
2665 1218  FETCH_STATIC_PROP_FUNC_ARG/177 $1183=    2016:'rRequest'      2017:'XUI'          	;2
2666 1218  FETCH_DIM_FUNC_ARG/93     $1184=    $1183                2019:'ticket_id'    	;2
2667 1218  SEND_VAR_EX/66            ?96       $1184                ?2                  	;0
2668 1218  DO_FCALL/60               ?1134     ?0                   ?0                  	;0
2669 1219  GOTO/253                  ?0        ?1750                ?2020               	;0
2670 1222  INIT_FCALL_BY_NAME/59     ?0        ?0                   2021:'json_encode'  	;1
2671 1222  SEND_VAL_EX/116           ?80       2023:array (
  'result' => true,
) ?1                  	;0
2672 1222  DO_FCALL_BY_NAME/131      $1186=    ?0                   ?0                  	;0
2673 1222  ECHO/40                   ?0        $1186                ?0                  	;0
2674 1223  EXIT/79                   ?0        ?0                   ?0                  	;0
2675 1226  GOTO/253                  ?0        ?2240                ?2024               	;0
2676 1228  INIT_STATIC_METHOD_CALL/113 ?0        2025:'XUI'           2027:'A96aB74f1921d4Ad'	;2
2677 1228  FETCH_DIM_R/81            $1187=    16?2                 2029:'user_id'      	;0
2678 1228  INIT_ARRAY/71             #1188=    $1187                ?0                  	;4
2679 1228  SEND_VAL_EX/116           ?80       #1188                ?1                  	;0
2680 1228  SEND_VAL_EX/116           ?96       2030:false           ?2                  	;0
2681 1228  DO_FCALL/60               $1189=    ?0                   ?0                  	;0
2682 1228  FETCH_DIM_R/81            $1190=    16?2                 2031:'user_id'      	;0
2683 1228  FETCH_DIM_R/81            $1191=    $1189                $1190               	;0
2684 1228  FE_RESET_R/77             $1192=    $1191                ?2690               	;0
2685 1228  FE_FETCH_R/78             ?0        $1192                16?18               	;2690	>>2690	<<2689
2686 1229  INIT_STATIC_METHOD_CALL/113 ?0        2032:'XUI'           2034:'b0020c716fdf67BB'	;1
2687 1229  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
2688 1229  DO_FCALL/60               ?1142     ?0                   ?0                  	;0
2689 1230  JMP/42                    ?0        ?2685                ?0                  	;0	>>2685
2690 1230  FE_FREE/127               ?0        $1192                ?0                  	;0	<<2684
2691 1234  INIT_FCALL_BY_NAME/59     ?0        ?0                   2036:'json_encode'  	;1
2692 1234  SEND_VAL_EX/116           ?80       2038:array (
  'result' => true,
) ?1                  	;0
2693 1234  DO_FCALL_BY_NAME/131      $1194=    ?0                   ?0                  	;0
2694 1234  ECHO/40                   ?0        $1194                ?0                  	;0
2695 1235  EXIT/79                   ?0        ?0                   ?0                  	;0
2696 1236  GOTO/253                  ?0        ?1010                ?2039               	;0
2697 1238  FETCH_STATIC_PROP_R/173   $1195=    2040:'rRequest'      2041:'XUI'          	;0
2698 1238  FETCH_DIM_R/81            $1196=    $1195                2043:'stream_id'    	;0
2699 1238  ASSIGN/38                 ?1146     16?45                $1196               	;0
2700 1239  FETCH_STATIC_PROP_R/173   $1198=    2044:'rRequest'      2045:'XUI'          	;0
2701 1239  FETCH_DIM_R/81            $1199=    $1198                2047:'sub'          	;0
2702 1239  ASSIGN/38                 ?1149     16?5                 $1199               	;0
2703 1240  IS_EQUAL/17               #1201=    16?5                 2048:'purge'        	;0
2704 1240  JMPZ/43                   ?0        #1201                ?2706               	;0	>>2706
2705 1241  GOTO/253                  ?0        ?2860                ?2049               	;0
2706 1243  INIT_FCALL_BY_NAME/59     ?0        ?0                   2050:'json_encode'  	;1	<<2704
2707 1243  SEND_VAL_EX/116           ?80       2052:array (
  'result' => false,
) ?1                  	;0
2708 1243  DO_FCALL_BY_NAME/131      $1202=    ?0                   ?0                  	;0
2709 1243  ECHO/40                   ?0        $1202                ?0                  	;0
2710 1244  EXIT/79                   ?0        ?0                   ?0                  	;0
2711 1245  GOTO/253                  ?0        ?2859                ?2053               	;0
2712 1247  FETCH_DIM_R/81            $1204=    16?12                2055:'trial_duration'	;0
2713 1247  CONCAT/8                  #1205=    $1204                2056:' '            	;0
2714 1247  FETCH_DIM_R/81            $1206=    16?12                2057:'trial_duration_in'	;0
2715 1247  CONCAT/8                  #1207=    #1205                $1206               	;0
2716 1247  ASSIGN_DIM/147            ?1152     16?12                2054:'duration'     	;0
2717 1247  OP_DATA/137               ?0        #1207                ?0                  	;0
2718 1248  ASSIGN_DIM/147            ?1157     16?12                2058:'compatible'   	;0
2719 1248  OP_DATA/137               ?0        2059:true            ?0                  	;0
2720 1249  INIT_FCALL_BY_NAME/59     ?0        ?0                   2060:'json_encode'  	;1
2721 1249  INIT_ARRAY/71             #1209=    2062:true            2063:'result'       	;14
2722 1249  ADD_ARRAY_ELEMENT/72      #1209=    16?14                2064:'bouquets'     	;0
2723 1249  ADD_ARRAY_ELEMENT/72      #1209=    16?12                2065:'data'         	;0
2724 1249  SEND_VAL_EX/116           ?80       #1209                ?1                  	;0
2725 1249  DO_FCALL_BY_NAME/131      $1210=    ?0                   ?0                  	;0
2726 1249  ECHO/40                   ?0        $1210                ?0                  	;0
2727 1251  EXIT/79                   ?0        ?0                   ?0                  	;0
2728 1252  GOTO/253                  ?0        ?2549                ?2066               	;0
2729 1254  FETCH_STATIC_PROP_R/173   $1211=    2067:'rRequest'      2068:'XUI'          	;0
2730 1254  FETCH_DIM_R/81            $1212=    $1211                2070:'action'       	;0
2731 1254  IS_EQUAL/17               #1213=    $1212                2071:'mag'          	;0
2732 1254  JMPZ/43                   ?0        #1213                ?2734               	;0	>>2734
2733 1255  GOTO/253                  ?0        ?1732                ?2072               	;0
2734 1257  FETCH_STATIC_PROP_R/173   $1214=    2073:'rRequest'      2074:'XUI'          	;0	<<2732
2735 1257  FETCH_DIM_R/81            $1215=    $1214                2076:'action'       	;0
2736 1257  IS_EQUAL/17               #1216=    $1215                2077:'enigma'       	;0
2737 1257  JMPZ/43                   ?0        #1216                ?2739               	;0	>>2739
2738 1258  GOTO/253                  ?0        ?1472                ?2078               	;0
2739 1260  FETCH_STATIC_PROP_R/173   $1217=    2079:'rRequest'      2080:'XUI'          	;0	<<2737
2740 1260  FETCH_DIM_R/81            $1218=    $1217                2082:'action'       	;0
2741 1260  IS_EQUAL/17               #1219=    $1218                2083:'get_package'  	;0
2742 1260  JMPZ/43                   ?0        #1219                ?2744               	;0	>>2744
2743 1261  GOTO/253                  ?0        ?2550                ?2084               	;0
2744 1263  FETCH_STATIC_PROP_R/173   $1220=    2085:'rRequest'      2086:'XUI'          	;0	<<2742
2745 1263  FETCH_DIM_R/81            $1221=    $1220                2088:'action'       	;0
2746 1263  IS_EQUAL/17               #1222=    $1221                2089:'get_package_trial'	;0
2747 1263  JMPZ/43                   ?0        #1222                ?2749               	;0	>>2749
2748 1264  GOTO/253                  ?0        ?1964                ?2090               	;0
2749 1266  FETCH_STATIC_PROP_R/173   $1223=    2091:'rRequest'      2092:'XUI'          	;0	<<2747
2750 1266  FETCH_DIM_R/81            $1224=    $1223                2094:'action'       	;0
2751 1266  IS_EQUAL/17               #1225=    $1224                2095:'header_stats' 	;0
2752 1266  JMPZ/43                   ?0        #1225                ?2754               	;0	>>2754
2753 1267  GOTO/253                  ?0        ?832                 ?2096               	;0
2754 1269  GOTO/253                  ?0        ?2558                ?2097               	;0	<<2752
2755 1272  GOTO/253                  ?0        ?2670                ?2098               	;0
2756 1274  ASSIGN/38                 ?1175     16?3                 2099:array (
)      	;0
2757 1275  INIT_METHOD_CALL/112      ?0        16?0                 2100:'query'        	;1
2758 1275  INIT_FCALL_BY_NAME/59     ?0        ?0                   2102:'implode'      	;2
2759 1275  SEND_VAL_EX/116           ?80       2104:','             ?1                  	;0
2760 1275  FETCH_DIM_FUNC_ARG/93     $1227=    16?4                 2105:'reports'      	;2
2761 1275  SEND_VAR_EX/66            ?96       $1227                ?2                  	;0
2762 1275  DO_FCALL_BY_NAME/131      $1228=    ?0                   ?0                  	;0
2763 1275  CONCAT/8                  #1229=    2106:'SELECT `id` FROM `lines` WHERE `member_id` IN (' $1228               	;0
2764 1275  CONCAT/8                  #1230=    #1229                2107:');'           	;0
2765 1275  SEND_VAL_EX/116           ?80       #1230                ?1                  	;0
2766 1275  DO_FCALL/60               ?1180     ?0                   ?0                  	;0
2767 1276  GOTO/253                  ?0        ?1668                ?2108               	;0
2768 1279  FETCH_STATIC_PROP_R/173   $1232=    2109:'rSettings'     2110:'XUI'          	;0
2769 1279  FETCH_DIM_R/81            $1233=    $1232                2112:'redis_handler'	;0
2770 1279  BOOL_NOT/13               #1234=    $1233                ?0                  	;0
2771 1279  JMPZ/43                   ?0        #1234                ?2773               	;0	>>2773
2772 1280  GOTO/253                  ?0        ?2775                ?2113               	;0
2773 1282  INIT_STATIC_METHOD_CALL/113 ?0        2114:'XUI'           2116:'D6AeB3175A43f301'	;0	<<2771
2774 1282  DO_FCALL/60               ?1184     ?0                   ?0                  	;0
2775 1284  FETCH_DIM_R/81            $1236=    16?4                 2118:'id'           	;0
2776 1284  BOOL_NOT/13               #1237=    $1236                ?0                  	;0
2777 1284  JMPZ/43                   ?0        #1237                ?2779               	;0	>>2779
2778 1285  GOTO/253                  ?0        ?1638                ?2119               	;0
2779 1287  GOTO/253                  ?0        ?1630                ?2120               	;0	<<2777
2780 1289  INIT_FCALL_BY_NAME/59     ?0        ?0                   2121:'intval'       	;1
2781 1289  FETCH_STATIC_PROP_FUNC_ARG/177 $1238=    2123:'rRequest'      2124:'XUI'          	;1
2782 1289  FETCH_DIM_FUNC_ARG/93     $1239=    $1238                2126:'user_id'      	;1
2783 1289  SEND_VAR_EX/66            ?80       $1239                ?1                  	;0
2784 1289  DO_FCALL_BY_NAME/131      $1240=    ?0                   ?0                  	;0
2785 1289  ASSIGN/38                 ?1190     16?16                $1240               	;0
2786 1290  INIT_FCALL_BY_NAME/59     ?0        ?0                   2127:'B5ad1d95A92ce732'	;1
2787 1290  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
2788 1290  DO_FCALL_BY_NAME/131      $1242=    ?0                   ?0                  	;0
2789 1290  ASSIGN/38                 ?1192     16?34                $1242               	;0
2790 1291  INIT_FCALL_BY_NAME/59     ?0        ?0                   2129:'E589a4bf54A2daD1'	;2
2791 1291  SEND_VAL_EX/116           ?80       2131:'line'          ?1                  	;0
2792 1291  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
2793 1291  DO_FCALL_BY_NAME/131      $1244=    ?0                   ?0                  	;0
2794 1291  BOOL_NOT/13               #1245=    $1244                ?0                  	;0
2795 1291  JMPNZ_EX/47               #1245=    #1245                ?2798               	;0	>>2798
2796 1291  BOOL_NOT/13               #1246=    16?34                ?0                  	;0
2797 1291  BOOL/52                   #1245=    #1246                ?0                  	;0
2798 1291  BOOL_NOT/13               #1247=    #1245                ?0                  	;0	<<2795
2799 1291  JMPZ/43                   ?0        #1247                ?2801               	;0	>>2801
2800 1292  GOTO/253                  ?0        ?1655                ?2132               	;0
2801 1294  INIT_FCALL_BY_NAME/59     ?0        ?0                   2133:'json_encode'  	;1	<<2799
2802 1294  SEND_VAL_EX/116           ?80       2135:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
2803 1294  DO_FCALL_BY_NAME/131      $1248=    ?0                   ?0                  	;0
2804 1294  ECHO/40                   ?0        $1248                ?0                  	;0
2805 1295  EXIT/79                   ?0        ?0                   ?0                  	;0
2806 1296  GOTO/253                  ?0        ?1655                ?2136               	;0
2807 1298  INIT_METHOD_CALL/112      ?0        16?0                 2137:'query'        	;2
2808 1298  SEND_VAL_EX/116           ?80       2139:'SELECT * FROM `lines_live` WHERE `user_id` = ?;' ?1                  	;0
2809 1298  FETCH_DIM_FUNC_ARG/93     $1249=    16?17                2140:'user_id'      	;2
2810 1298  SEND_VAR_EX/66            ?96       $1249                ?2                  	;0
2811 1298  DO_FCALL/60               ?1199     ?0                   ?0                  	;0
2812 1299  INIT_METHOD_CALL/112      ?0        16?0                 2141:'num_rows'     	;0
2813 1299  DO_FCALL/60               $1251=    ?0                   ?0                  	;0
2814 1299  IS_SMALLER/19             #1252=    2143:0               $1251               	;0
2815 1299  BOOL_NOT/13               #1253=    #1252                ?0                  	;0
2816 1299  JMPZ/43                   ?0        #1253                ?2818               	;0	>>2818
2817 1300  GOTO/253                  ?0        ?2827                ?2144               	;0
2818 1302  INIT_METHOD_CALL/112      ?0        16?0                 2145:'get_rows'     	;0	<<2816
2819 1302  DO_FCALL/60               $1254=    ?0                   ?0                  	;0
2820 1302  FE_RESET_R/77             $1255=    $1254                ?2826               	;0
2821 1302  FE_FETCH_R/78             ?0        $1255                16?1                	;2826	>>2826	<<2825
2822 1303  INIT_STATIC_METHOD_CALL/113 ?0        2147:'XUI'           2149:'b0020C716Fdf67Bb'	;1
2823 1303  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
2824 1303  DO_FCALL/60               ?1205     ?0                   ?0                  	;0
2825 1304  JMP/42                    ?0        ?2821                ?0                  	;0	>>2821
2826 1304  FE_FREE/127               ?0        $1255                ?0                  	;0	<<2820
2827 1308  GOTO/253                  ?0        ?2914                ?2151               	;0
2828 1310  FETCH_DIM_R/81            $1257=    16?12                2152:'type'         	;0
2829 1310  IS_EQUAL/17               #1258=    $1257                2153:'reset_stb_lock'	;0
2830 1310  JMPZ/43                   ?0        #1258                ?2832               	;0	>>2832
2831 1311  GOTO/253                  ?0        ?1602                ?2154               	;0
2832 1313  ASSIGN_DIM/147            ?1208     16?12                2155:'need_confirm' 	;0	<<2830
2833 1313  OP_DATA/137               ?0        2156:0               ?0                  	;0
2834 1314  ASSIGN_DIM/147            ?1209     16?12                2157:'reboot_portal'	;0
2835 1314  OP_DATA/137               ?0        2158:0               ?0                  	;0
2836 1315  ASSIGN_DIM/147            ?1210     16?12                2159:'message'      	;0
2837 1315  OP_DATA/137               ?0        2160:''              ?0                  	;0
2838 1316  GOTO/253                  ?0        ?1611                ?2161               	;0
2839 1317  GOTO/253                  ?0        ?1602                ?2162               	;0
2840 1320  INIT_FCALL_BY_NAME/59     ?0        ?0                   2163:'json_encode'  	;1
2841 1320  SEND_VAL_EX/116           ?80       2165:array (
  'result' => false,
) ?1                  	;0
2842 1320  DO_FCALL_BY_NAME/131      $1262=    ?0                   ?0                  	;0
2843 1320  ECHO/40                   ?0        $1262                ?0                  	;0
2844 1321  EXIT/79                   ?0        ?0                   ?0                  	;0
2845 1323  GOTO/253                  ?0        ?2369                ?2166               	;0
2846 1324  GOTO/253                  ?0        ?638                 ?2167               	;0
2847 1326  INIT_FCALL_BY_NAME/59     ?0        ?0                   2168:'json_encode'  	;1
2848 1326  SEND_VAL_EX/116           ?80       2170:array (
  'result' => false,
  'error' => 'No permissions.',
) ?1                  	;0
2849 1326  DO_FCALL_BY_NAME/131      $1263=    ?0                   ?0                  	;0
2850 1326  ECHO/40                   ?0        $1263                ?0                  	;0
2851 1327  EXIT/79                   ?0        ?0                   ?0                  	;0
2852 1329  IS_EQUAL/17               #1264=    16?5                 2171:'delete'       	;0
2853 1329  JMPZ/43                   ?0        #1264                ?2855               	;0	>>2855
2854 1330  GOTO/253                  ?0        ?2438                ?2172               	;0
2855 1332  IS_EQUAL/17               #1265=    16?5                 2173:'enable'       	;0	<<2853
2856 1332  JMPZ/43                   ?0        #1265                ?2858               	;0	>>2858
2857 1333  GOTO/253                  ?0        ?806                 ?2174               	;0
2858 1335  GOTO/253                  ?0        ?621                 ?2175               	;0	<<2856
2859 1337  GOTO/253                  ?0        ?2675                ?2176               	;0
2860 1339  FETCH_STATIC_PROP_R/173   $1266=    2177:'rSettings'     2178:'XUI'          	;0
2861 1339  FETCH_DIM_R/81            $1267=    $1266                2180:'redis_handler'	;0
2862 1339  JMPZ/43                   ?0        $1267                ?2864               	;0	>>2864
2863 1340  GOTO/253                  ?0        ?2756                ?2181               	;0
2864 1342  INIT_METHOD_CALL/112      ?0        16?0                 2182:'query'        	;2	<<2862
2865 1342  INIT_FCALL_BY_NAME/59     ?0        ?0                   2184:'implode'      	;2
2866 1342  SEND_VAL_EX/116           ?80       2186:','             ?1                  	;0
2867 1342  FETCH_DIM_FUNC_ARG/93     $1268=    16?4                 2187:'reports'      	;2
2868 1342  SEND_VAR_EX/66            ?96       $1268                ?2                  	;0
2869 1342  DO_FCALL_BY_NAME/131      $1269=    ?0                   ?0                  	;0
2870 1342  CONCAT/8                  #1270=    2188:'SELECT `lines_live`.* FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = ? AND `hls_end` = 0 AND `lines`.`member_id` IN (' $1269               	;0
2871 1342  CONCAT/8                  #1271=    #1270                2189:');'           	;0
2872 1342  SEND_VAL_EX/116           ?80       #1271                ?1                  	;0
2873 1342  SEND_VAR_EX/66            ?96       16?45                ?2                  	;0
2874 1342  DO_FCALL/60               ?1221     ?0                   ?0                  	;0
2875 1343  INIT_METHOD_CALL/112      ?0        16?0                 2190:'get_rows'     	;0
2876 1343  DO_FCALL/60               $1273=    ?0                   ?0                  	;0
2877 1343  FE_RESET_R/77             $1274=    $1273                ?2883               	;0
2878 1343  FE_FETCH_R/78             ?0        $1274                16?1                	;2883	>>2883	<<2882
2879 1344  INIT_STATIC_METHOD_CALL/113 ?0        2192:'XUI'           2194:'b0020c716fDf67bB'	;1
2880 1344  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
2881 1344  DO_FCALL/60               ?1224     ?0                   ?0                  	;0
2882 1345  JMP/42                    ?0        ?2878                ?0                  	;0	>>2878
2883 1345  FE_FREE/127               ?0        $1274                ?0                  	;0	<<2877
2884 1347  GOTO/253                  ?0        ?2755                ?2196               	;0
2885 1349  INIT_METHOD_CALL/112      ?0        16?0                 2197:'query'        	;2
2886 1349  SEND_VAL_EX/116           ?80       2199:'UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;' ?1                  	;0
2887 1349  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
2888 1349  DO_FCALL/60               ?1225     ?0                   ?0                  	;0
2889 1350  INIT_METHOD_CALL/112      ?0        16?0                 2200:'query'        	;8
2890 1350  SEND_VAL_EX/116           ?80       2202:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
2891 1350  FETCH_DIM_FUNC_ARG/93     $1277=    16?4                 2203:'id'           	;2
2892 1350  SEND_VAR_EX/66            ?96       $1277                ?2                  	;0
2893 1350  SEND_VAL_EX/116           ?112      2204:'disable'       ?3                  	;0
2894 1350  FETCH_STATIC_PROP_FUNC_ARG/177 $1278=    2205:'rRequest'      2206:'XUI'          	;4
2895 1350  FETCH_DIM_FUNC_ARG/93     $1279=    $1278                2208:'user_id'      	;4
2896 1350  SEND_VAR_EX/66            ?128      $1279                ?4                  	;0
2897 1350  SEND_VAL_EX/116           ?144      2209:0               ?5                  	;0
2898 1350  FETCH_DIM_FUNC_ARG/93     $1280=    16?4                 2210:'credits'      	;6
2899 1350  SEND_VAR_EX/66            ?160      $1280                ?6                  	;0
2900 1350  INIT_FCALL_BY_NAME/59     ?0        ?0                   2211:'time'         	;0
2901 1350  DO_FCALL_BY_NAME/131      $1281=    ?0                   ?0                  	;0
2902 1350  SEND_VAR_NO_REF_EX/50     ?176      $1281                ?7                  	;0
2903 1350  INIT_FCALL_BY_NAME/59     ?0        ?0                   2213:'json_encode'  	;1
2904 1350  SEND_VAR_EX/66            ?80       16?34                ?1                  	;0
2905 1350  DO_FCALL_BY_NAME/131      $1282=    ?0                   ?0                  	;0
2906 1350  SEND_VAR_NO_REF_EX/50     ?192      $1282                ?8                  	;0
2907 1350  DO_FCALL/60               ?1232     ?0                   ?0                  	;0
2908 1351  INIT_FCALL_BY_NAME/59     ?0        ?0                   2215:'json_encode'  	;1
2909 1351  SEND_VAL_EX/116           ?80       2217:array (
  'result' => true,
) ?1                  	;0
2910 1351  DO_FCALL_BY_NAME/131      $1284=    ?0                   ?0                  	;0
2911 1351  ECHO/40                   ?0        $1284                ?0                  	;0
2912 1352  EXIT/79                   ?0        ?0                   ?0                  	;0
2913 1354  GOTO/253                  ?0        ?1102                ?2218               	;0
2914 1356  GOTO/253                  ?0        ?2930                ?2219               	;0
2915 1358  INIT_STATIC_METHOD_CALL/113 ?0        2220:'XUI'           2222:'A96AB74f1921D4Ad'	;2
2916 1358  FETCH_DIM_R/81            $1285=    16?2                 2224:'user_id'      	;0
2917 1358  INIT_ARRAY/71             #1286=    $1285                ?0                  	;4
2918 1358  SEND_VAL_EX/116           ?80       #1286                ?1                  	;0
2919 1358  SEND_VAL_EX/116           ?96       2225:false           ?2                  	;0
2920 1358  DO_FCALL/60               $1287=    ?0                   ?0                  	;0
2921 1358  FETCH_DIM_R/81            $1288=    16?17                2226:'user_id'      	;0
2922 1358  FETCH_DIM_R/81            $1289=    $1287                $1288               	;0
2923 1358  FE_RESET_R/77             $1290=    $1289                ?2929               	;0
2924 1358  FE_FETCH_R/78             ?0        $1290                16?18               	;2929	>>2929	<<2928
2925 1359  INIT_STATIC_METHOD_CALL/113 ?0        2227:'XUI'           2229:'b0020C716fDF67Bb'	;1
2926 1359  SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
2927 1359  DO_FCALL/60               ?1240     ?0                   ?0                  	;0
2928 1360  JMP/42                    ?0        ?2924                ?0                  	;0	>>2924
2929 1360  FE_FREE/127               ?0        $1290                ?0                  	;0	<<2923
2930 1364  GOTO/253                  ?0        ?466                 ?2231               	;0
2931 1366  EXIT/79                   ?0        ?0                   ?0                  	;0
2932 1368  GOTO/253                  ?0        ?2337                ?2232               	;0
2933 1370  INIT_METHOD_CALL/112      ?0        16?0                 2233:'query'        	;2
2934 1370  SEND_VAL_EX/116           ?80       2235:'UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `id` = ?;' ?1                  	;0
2935 1370  SEND_VAR_EX/66            ?96       16?16                ?2                  	;0
2936 1370  DO_FCALL/60               ?1241     ?0                   ?0                  	;0
2937 1371  GOTO/253                  ?0        ?2332                ?2236               	;0
2938 1374  GOTO/253                  ?0        ?2941                ?2237               	;0
2939 1376  ASSIGN_DIM/147            ?1242     16?12                2238:'need_confirm' 	;0
2940 1376  OP_DATA/137               ?0        2239:1               ?0                  	;0
2941 1378  GOTO/253                  ?0        ?2942                ?2240               	;0
2942 1380  INIT_METHOD_CALL/112      ?0        16?0                 2241:'query'        	;7
2943 1380  SEND_VAL_EX/116           ?80       2243:'INSERT INTO `mag_events`(`status`, `mag_device_id`, `event`, `need_confirm`, `msg`, `reboot_after_ok`, `send_time`) VALUES (0, ?, ?, ?, ?, ?, ?);' ?1                  	;0
2944 1380  FETCH_DIM_FUNC_ARG/93     $1294=    16?12                2244:'id'           	;2
2945 1380  SEND_VAR_EX/66            ?96       $1294                ?2                  	;0
2946 1380  FETCH_DIM_FUNC_ARG/93     $1295=    16?12                2245:'type'         	;3
2947 1380  SEND_VAR_EX/66            ?112      $1295                ?3                  	;0
2948 1380  FETCH_DIM_FUNC_ARG/93     $1296=    16?12                2246:'need_confirm' 	;4
2949 1380  SEND_VAR_EX/66            ?128      $1296                ?4                  	;0
2950 1380  FETCH_DIM_FUNC_ARG/93     $1297=    16?12                2247:'message'      	;5
2951 1380  SEND_VAR_EX/66            ?144      $1297                ?5                  	;0
2952 1380  FETCH_DIM_FUNC_ARG/93     $1298=    16?12                2248:'reboot_portal'	;6
2953 1380  SEND_VAR_EX/66            ?160      $1298                ?6                  	;0
2954 1380  INIT_FCALL_BY_NAME/59     ?0        ?0                   2249:'time'         	;0
2955 1380  DO_FCALL_BY_NAME/131      $1299=    ?0                   ?0                  	;0
2956 1380  SEND_VAR_NO_REF_EX/50     ?176      $1299                ?7                  	;0
2957 1380  DO_FCALL/60               $1300=    ?0                   ?0                  	;0
2958 1380  BOOL_NOT/13               #1301=    $1300                ?0                  	;0
2959 1380  JMPZ/43                   ?0        #1301                ?2961               	;0	>>2961
2960 1381  GOTO/253                  ?0        ?2984                ?2251               	;0
2961 1383  INIT_METHOD_CALL/112      ?0        16?0                 2252:'query'        	;8	<<2959
2962 1383  SEND_VAL_EX/116           ?80       2254:'INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);' ?1                  	;0
2963 1383  FETCH_DIM_FUNC_ARG/93     $1302=    16?4                 2255:'id'           	;2
2964 1383  SEND_VAR_EX/66            ?96       $1302                ?2                  	;0
2965 1383  SEND_VAL_EX/116           ?112      2256:'send_event'    ?3                  	;0
2966 1383  FETCH_DIM_FUNC_ARG/93     $1303=    16?46                2257:'mag_id'       	;4
2967 1383  SEND_VAR_EX/66            ?128      $1303                ?4                  	;0
2968 1383  SEND_VAL_EX/116           ?144      2258:0               ?5                  	;0
2969 1383  FETCH_DIM_FUNC_ARG/93     $1304=    16?4                 2259:'credits'      	;6
2970 1383  SEND_VAR_EX/66            ?160      $1304                ?6                  	;0
2971 1383  INIT_FCALL_BY_NAME/59     ?0        ?0                   2260:'time'         	;0
2972 1383  DO_FCALL_BY_NAME/131      $1305=    ?0                   ?0                  	;0
2973 1383  SEND_VAR_NO_REF_EX/50     ?176      $1305                ?7                  	;0
2974 1383  INIT_FCALL_BY_NAME/59     ?0        ?0                   2262:'json_encode'  	;1
2975 1383  SEND_VAR_EX/66            ?80       16?46                ?1                  	;0
2976 1383  DO_FCALL_BY_NAME/131      $1306=    ?0                   ?0                  	;0
2977 1383  SEND_VAR_NO_REF_EX/50     ?192      $1306                ?8                  	;0
2978 1383  DO_FCALL/60               ?1256     ?0                   ?0                  	;0
2979 1384  INIT_FCALL_BY_NAME/59     ?0        ?0                   2264:'json_encode'  	;1
2980 1384  SEND_VAL_EX/116           ?80       2266:array (
  'result' => true,
) ?1                  	;0
2981 1384  DO_FCALL_BY_NAME/131      $1308=    ?0                   ?0                  	;0
2982 1384  ECHO/40                   ?0        $1308                ?0                  	;0
2983 1385  EXIT/79                   ?0        ?0                   ?0                  	;0
2984 1387  GOTO/253                  ?0        ?2840                ?2267               	;0
2985 1389  ASSIGN/38                 ?1258     16?10                2268:array (
)      	;0
2986 1390  INIT_FCALL_BY_NAME/59     ?0        ?0                   2269:'array_map'    	;2
2987 1390  SEND_VAL_EX/116           ?80       2271:'intval'        ?1                  	;0
2988 1390  INIT_FCALL_BY_NAME/59     ?0        ?0                   2272:'explode'      	;2
2989 1390  SEND_VAL_EX/116           ?80       2274:','             ?1                  	;0
2990 1390  FETCH_STATIC_PROP_FUNC_ARG/177 $1310=    2275:'rRequest'      2276:'XUI'          	;2
2991 1390  FETCH_DIM_FUNC_ARG/93     $1311=    $1310                2278:'channels'     	;2
2992 1390  SEND_VAR_EX/66            ?96       $1311                ?2                  	;0
2993 1390  DO_FCALL_BY_NAME/131      $1312=    ?0                   ?0                  	;0
2994 1390  SEND_VAR_NO_REF_EX/50     ?96       $1312                ?2                  	;0
2995 1390  DO_FCALL_BY_NAME/131      $1313=    ?0                   ?0                  	;0
2996 1390  FE_RESET_R/77             $1314=    $1313                ?3013               	;0
2997 1390  FE_FETCH_R/78             ?0        $1314                16?45               	;3013	>>3013	<<3012
2998 1391  INIT_FCALL_BY_NAME/59     ?0        ?0                   2279:'in_array'     	;2
2999 1391  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
3000 1391  FETCH_DIM_FUNC_ARG/93     $1315=    16?6                 2281:'stream_ids'   	;2
3001 1391  SEND_VAR_EX/66            ?96       $1315                ?2                  	;0
3002 1391  DO_FCALL_BY_NAME/131      $1316=    ?0                   ?0                  	;0
3003 1391  JMPZ_EX/46                #1317=    $1316                ?3006               	;0	>>3006
3004 1391  IS_SMALLER/19             #1318=    2282:0               16?45               	;0
3005 1391  BOOL/52                   #1317=    #1318                ?0                  	;0
3006 1391  BOOL_NOT/13               #1319=    #1317                ?0                  	;0	<<3003
3007 1391  JMPZ/43                   ?0        #1319                ?3010               	;0	>>3010
3008 1392  NOP/0                     ?0        ?0                   ?0                  	;1
3009 1392  GOTO/253                  ?0        ?3012                ?2283               	;0
3010 1394  ASSIGN_DIM/147            ?1269     16?10                ?4397406            	;0	<<3007
3011 1394  OP_DATA/137               ?0        16?45                ?0                  	;0
3012 1396  JMP/42                    ?0        ?2997                ?0                  	;0	>>2997
3013 1396  FE_FREE/127               ?0        $1314                ?0                  	;0	<<2996
3014 1399  INIT_FCALL_BY_NAME/59     ?0        ?0                   2284:'count'        	;1
3015 1399  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
3016 1399  DO_FCALL_BY_NAME/131      $1321=    ?0                   ?0                  	;0
3017 1399  IS_EQUAL/17               #1322=    $1321                2286:0              	;0
3018 1399  BOOL_NOT/13               #1323=    #1322                ?0                  	;0
3019 1399  JMPZ/43                   ?0        #1323                ?3021               	;0	>>3021
3020 1400  GOTO/253                  ?0        ?596                 ?2287               	;0
3021 1402  INIT_FCALL_BY_NAME/59     ?0        ?0                   2288:'json_encode'  	;1	<<3019
3022 1402  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
3023 1402  DO_FCALL_BY_NAME/131      $1324=    ?0                   ?0                  	;0
3024 1402  ECHO/40                   ?0        $1324                ?0                  	;0
3025 1403  GOTO/253                  ?0        ?595                 ?2290               	;0
3026 1406  INIT_METHOD_CALL/112      ?0        16?44                2291:'close'        	;0
3027 1406  DO_FCALL/60               ?1274     ?0                   ?0                  	;0
3028 1407  FETCH_STATIC_PROP_IS/176  $1326=    2293:'rRequest'      2294:'XUI'          	;0
3029 1407  ISSET_ISEMPTY_DIM_OBJ/115 #1327=    $1326                2296:'isp'          	;33554432
3030 1407  BOOL_NOT/13               #1328=    #1327                ?0                  	;0
3031 1407  JMPZ/43                   ?0        #1328                ?3033               	;0	>>3033
3032 1408  GOTO/253                  ?0        ?1641                ?2297               	;0
3033 1410  NEW/68                    $1329=    2298:'MaxMind\\Db\\Reader' ?128                	;1	<<3031
3034 1410  FETCH_CONSTANT/99         #1330=    ?0                   2300:'GEOISP_BIN'   	;16
3035 1410  SEND_VAL_EX/116           ?80       #1330                ?1                  	;0
3036 1410  DO_FCALL/60               ?1280     ?8                   ?0                  	;0
3037 1410  ASSIGN/38                 ?1281     16?44                $1329               	;0
3038 1411  INIT_METHOD_CALL/112      ?0        16?44                2304:'get'          	;1
3039 1411  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
3040 1411  DO_FCALL/60               $1334=    ?0                   ?0                  	;0
3041 1411  ASSIGN_DIM/147            ?1282     16?43                2303:'isp'          	;0
3042 1411  OP_DATA/137               ?0        $1334                ?0                  	;0
3043 1412  GOTO/253                  ?0        ?1639                ?2306               	;0
3044 1414  ASSIGN/38                 ?1284     16?24                2307:1              	;0
3045 1415  GOTO/253                  ?0        ?3052                ?2308               	;0
3046 1417  INIT_FCALL_BY_NAME/59     ?0        ?0                   2309:'intval'       	;1
3047 1417  FETCH_STATIC_PROP_FUNC_ARG/177 $1336=    2311:'rRequest'      2312:'XUI'          	;1
3048 1417  FETCH_DIM_FUNC_ARG/93     $1337=    $1336                2314:'page'         	;1
3049 1417  SEND_VAR_EX/66            ?80       $1337                ?1                  	;0
3050 1417  DO_FCALL_BY_NAME/131      $1338=    ?0                   ?0                  	;0
3051 1417  ASSIGN/38                 ?1288     16?24                $1338               	;0
3052 1419  GOTO/253                  ?0        ?1889                ?2315               	;0
3053 1421  INIT_FCALL_BY_NAME/59     ?0        ?0                   2316:'json_encode'  	;1
3054 1421  SEND_VAL_EX/116           ?80       2318:array (
  'result' => false,
) ?1                  	;0
3055 1421  DO_FCALL_BY_NAME/131      $1340=    ?0                   ?0                  	;0
3056 1421  ECHO/40                   ?0        $1340                ?0                  	;0
3057 1422  NOP/0                     ?0        2319:1               ?0                  	;4294967295
*/

?>