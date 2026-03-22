<?php


function getOutputFormats($d936054a94607c0a)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   107  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   109  ASSIGN/38                 ?0        16?1                 0:array (
  1 => 'm3u8',
  2 => 'ts',
  3 => 'rtmp',
)	;0
	2   110  ASSIGN/38                 ?1        16?2                 1:array (
)         	;0
	3   111  FE_RESET_R/77             $6=       16?0                 ?9                  	;0
	4   111  FE_FETCH_R/78             ?0        $6                   16?3                	;9	>>9	<<8
	5   112  FETCH_DIM_R/81            $8=       16?1                 16?3                	;0
	6   112  ASSIGN_DIM/147            ?3        16?2                 ?2670194464         	;0
	7   112  OP_DATA/137               ?0        $8                   ?0                  	;0
	8   113  JMP/42                    ?0        ?4                   ?0                  	;0	>>4
	9   113  FE_FREE/127               ?0        $6                   ?0                  	;0	<<3
	10  116  RETURN/62                 ?0        16?2                 ?0                  	;0
	11  117  NOP/0                     ?0        2:NULL               ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0    1379  BIND_GLOBAL/168           ?0        16?0                 0:'f76e05a7b2c4a341'	;0
	1    1380  BOOL_NOT/13               #1=       16?0                 ?0                  	;0
	2    1380  JMPZ/43                   ?0        #1                   ?4                  	;0	>>4
	3    1381  GOTO/253                  ?0        ?6                   ?1                  	;0
	4    1383  INIT_STATIC_METHOD_CALL/113 ?0        2:'XUI'              4:'aeEa5D3137274f80'	;0	<<2
	5    1383  DO_FCALL/60               ?1        ?0                   ?0                  	;0
	6    1385  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'is_object'       	;1
	7    1385  FETCH_STATIC_PROP_FUNC_ARG/177 $3=       8:'db'               9:'XUI'             	;1
	8    1385  SEND_VAR_EX/66            ?80       $3                   ?1                  	;0
	9    1385  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	10   1385  BOOL_NOT/13               #5=       $4                   ?0                  	;0
	11   1385  JMPZ/43                   ?0        #5                   ?13                 	;0	>>13
	12   1386  GOTO/253                  ?0        ?16                  ?11                 	;0
	13   1388  FETCH_STATIC_PROP_R/173   $6=       12:'db'              13:'XUI'            	;0	<<11
	14   1388  INIT_METHOD_CALL/112      ?0        $6                   15:'close_mysql'    	;0
	15   1388  DO_FCALL/60               ?6        ?0                   ?0                  	;0
	16   1390  NOP/0                     ?0        17:NULL              ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?3637                ?0                  	;0	>>3637
1    5     JMPZ_EX/46                #68=      16?0                 ?4                  	;0	>>4
2    5     ISSET_ISEMPTY_CV/197      #69=      16?1                 ?0                  	;16777216
3    5     BOOL/52                   #68=      #69                  ?0                  	;0
4    5     JMPZ/43                   ?0        #68                  ?6                  	;0	>>6	<<1
5    6     GOTO/253                  ?0        ?12                  ?1                  	;0
6    8     INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'in_array'        	;2	<<4
7    8     SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
8    8     SEND_VAL_EX/116           ?96       4:array (
  0 => 'get_series',
  1 => 'get_vod_streams',
  2 => 'get_live_streams',
) ?2                  	;0
9    8     DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
10   8     ASSIGN/38                 ?3        16?2                 $70                 	;0
11   9     GOTO/253                  ?0        ?174                 ?5                  	;0
12   11    ASSIGN/38                 ?4        16?2                 6:true              	;0
13   12    GOTO/253                  ?0        ?174                 ?7                  	;0
14   15    ASSIGN/38                 ?5        16?0                 8:false             	;0
15   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'strtolower'      	;1
16   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'explode'        	;2
17   16    SEND_VAL_EX/116           ?80       13:'.'               ?1                  	;0
18   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'ltrim'          	;2
19   16    INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'parse_url'      	;1
20   16    FETCH_FUNC_ARG/92         $74=      18:'_SERVER'         ?0                  	;1
21   16    FETCH_DIM_FUNC_ARG/93     $75=      $74                  19:'REQUEST_URI'    	;1
22   16    SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
23   16    DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
24   16    SEPARATE/156              $76=      $76                  ?0                  	;0
25   16    FETCH_DIM_FUNC_ARG/93     $77=      $76                  20:'path'           	;1
26   16    SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
27   16    SEND_VAL_EX/116           ?96       21:'/'               ?2                  	;0
28   16    DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
29   16    SEND_VAR_NO_REF_EX/50     ?96       $78                  ?2                  	;0
30   16    DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
31   16    SEPARATE/156              $79=      $79                  ?0                  	;0
32   16    FETCH_DIM_FUNC_ARG/93     $80=      $79                  22:0                	;1
33   16    SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
34   16    DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
35   16    IS_EQUAL/17               #82=      $81                  23:'panel_api'      	;0
36   16    BOOL_NOT/13               #83=      #82                  ?0                  	;0
37   16    JMPZ/43                   ?0        #83                  ?39                 	;0	>>39
38   17    GOTO/253                  ?0        ?200                 ?24                 	;0
39   19    FETCH_STATIC_PROP_R/173   $84=      25:'rSettings'       26:'XUI'            	;0	<<37
40   19    FETCH_DIM_R/81            $85=      $84                  28:'legacy_panel_api'	;0
41   19    BOOL_NOT/13               #86=      $85                  ?0                  	;0
42   19    JMPZ/43                   ?0        #86                  ?44                 	;0	>>44
43   20    GOTO/253                  ?0        ?3672                ?29                 	;0
44   22    ASSIGN/38                 ?19       16?0                 30:true             	;0	<<42
45   23    GOTO/253                  ?0        ?3671                ?31                 	;0
46   26    GOTO/253                  ?0        ?135                 ?32                 	;0
47   28    FETCH_STATIC_PROP_R/173   $88=      33:'rRequest'        34:'XUI'            	;0
48   28    FETCH_DIM_R/81            $89=      $88                  36:'username'       	;0
49   28    ASSIGN/38                 ?22       16?3                 $89                 	;0
50   29    FETCH_STATIC_PROP_R/173   $91=      37:'rRequest'        38:'XUI'            	;0
51   29    FETCH_DIM_R/81            $92=      $91                  40:'password'       	;0
52   29    ASSIGN/38                 ?25       16?4                 $92                 	;0
53   30    GOTO/253                  ?0        ?118                 ?41                 	;0
54   32    FETCH_STATIC_PROP_R/173   $94=      42:'rRequest'        43:'XUI'            	;0
55   32    FETCH_DIM_R/81            $95=      $94                  45:'token'          	;0
56   32    ASSIGN/38                 ?28       16?5                 $95                 	;0
57   33    ISSET_ISEMPTY_CV/197      #97=      16?5                 ?0                  	;16777216
58   33    BOOL_NOT/13               #98=      #97                  ?0                  	;0
59   33    JMPZ/43                   ?0        #98                  ?61                 	;0	>>61
60   34    GOTO/253                  ?0        ?64                  ?46                 	;0
61   36    INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'generateError'  	;1	<<59
62   36    SEND_VAL_EX/116           ?80       49:'NO_CREDENTIALS'  ?1                  	;0
63   36    DO_FCALL_BY_NAME/131      ?31       ?0                   ?0                  	;0
64   38    INIT_STATIC_METHOD_CALL/113 ?0        50:'XUI'             52:'cc988751eEBBF271'	;4
65   38    SEND_VAL_EX/116           ?80       54:NULL              ?1                  	;0
66   38    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
67   38    SEND_VAL_EX/116           ?112      55:NULL              ?3                  	;0
68   38    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
69   38    DO_FCALL/60               $100=     ?0                   ?0                  	;0
70   38    ASSIGN/38                 ?33       16?6                 $100                	;0
71   39    GOTO/253                  ?0        ?46                  ?56                 	;0
72   41    FETCH_DIM_R/81            $102=     16?6                 57:'enabled'        	;0
73   41    BOOL_NOT/13               #103=     $102                 ?0                  	;0
74   41    JMPZ/43                   ?0        #103                 ?76                 	;0	>>76
75   42    GOTO/253                  ?0        ?80                  ?58                 	;0
76   44    INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'generateError'  	;1	<<74
77   44    SEND_VAL_EX/116           ?80       61:'EXPIRED'         ?1                  	;0
78   44    DO_FCALL_BY_NAME/131      ?36       ?0                   ?0                  	;0
79   45    GOTO/253                  ?0        ?195                 ?62                 	;0
80   47    INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'generateError'  	;1
81   47    SEND_VAL_EX/116           ?80       65:'DISABLED'        ?1                  	;0
82   47    DO_FCALL_BY_NAME/131      ?37       ?0                   ?0                  	;0
83   48    GOTO/253                  ?0        ?195                 ?66                 	;0
84   50    ASSIGN/38                 ?38       16?7                 67:array (
)        	;0
85   51    FETCH_STATIC_PROP_IS/176  $107=     68:'rRequest'        69:'XUI'            	;0
86   51    ISSET_ISEMPTY_DIM_OBJ/115 #108=     $107                 71:'action'         	;16777216
87   51    BOOL_NOT/13               #109=     #108                 ?0                  	;0
88   51    JMPZ_EX/46                #109=     #109                 ?104                	;0	>>104
89   51    INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'in_array'       	;2
90   51    FETCH_STATIC_PROP_FUNC_ARG/177 $110=     74:'rRequest'        75:'XUI'            	;1
91   51    FETCH_DIM_FUNC_ARG/93     $111=     $110                 77:'action'         	;1
92   51    SEND_VAR_EX/66            ?80       $111                 ?1                  	;0
93   51    SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
94   51    DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
95   51    JMPNZ_EX/47               #113=     $112                 ?103                	;0	>>103
96   51    INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'array_key_exists'	;2
97   51    FETCH_STATIC_PROP_FUNC_ARG/177 $114=     80:'rRequest'        81:'XUI'            	;1
98   51    FETCH_DIM_FUNC_ARG/93     $115=     $114                 83:'action'         	;1
99   51    SEND_VAR_EX/66            ?80       $115                 ?1                  	;0
100  51    SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
101  51    DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
102  51    BOOL/52                   #113=     $116                 ?0                  	;0
103  51    BOOL/52                   #109=     #113                 ?0                  	;0	<<95
104  51    JMPZ/43                   ?0        #109                 ?109                	;0	>>109	<<88
105  51    FETCH_STATIC_PROP_R/173   $117=     84:'rRequest'        85:'XUI'            	;0
106  51    FETCH_DIM_R/81            $118=     $117                 87:'action'         	;0
107  51    QM_ASSIGN/22              #119=     $118                 ?0                  	;0
108  51    JMP/42                    ?0        ?110                 ?0                  	;0	>>110
109  51    QM_ASSIGN/22              #119=     88:''                ?0                  	;0	<<104
110  51    ASSIGN/38                 ?52       16?1                 #119                	;0	<<108
111  52    ISSET_ISEMPTY_DIM_OBJ/115 #121=     16?8                 16?1                	;33554432
112  52    BOOL_NOT/13               #122=     #121                 ?0                  	;0
113  52    JMPZ/43                   ?0        #122                 ?115                	;0	>>115
114  53    GOTO/253                  ?0        ?117                 ?89                 	;0
115  55    FETCH_DIM_R/81            $123=     16?8                 16?1                	;0	<<113
116  55    ASSIGN/38                 ?56       16?1                 $123                	;0
117  57    GOTO/253                  ?0        ?1                   ?90                 	;0
118  59    ISSET_ISEMPTY_CV/197      #125=     16?3                 ?0                  	;16777216
119  59    JMPNZ_EX/47               #125=     #125                 ?122                	;0	>>122
120  59    ISSET_ISEMPTY_CV/197      #126=     16?4                 ?0                  	;16777216
121  59    BOOL/52                   #125=     #126                 ?0                  	;0
122  59    BOOL_NOT/13               #127=     #125                 ?0                  	;0	<<119
123  59    JMPZ/43                   ?0        #127                 ?125                	;0	>>125
124  60    GOTO/253                  ?0        ?128                 ?91                 	;0
125  62    INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'generateError'  	;1	<<123
126  62    SEND_VAL_EX/116           ?80       94:'NO_CREDENTIALS'  ?1                  	;0
127  62    DO_FCALL_BY_NAME/131      ?60       ?0                   ?0                  	;0
128  64    INIT_STATIC_METHOD_CALL/113 ?0        95:'XUI'             97:'cc988751eebbF271'	;4
129  64    SEND_VAL_EX/116           ?80       99:NULL              ?1                  	;0
130  64    SEND_VAR_EX/66            ?96       16?3                 ?2                  	;0
131  64    SEND_VAR_EX/66            ?112      16?4                 ?3                  	;0
132  64    SEND_VAR_EX/66            ?128      16?2                 ?4                  	;0
133  64    DO_FCALL/60               $129=     ?0                   ?0                  	;0
134  64    ASSIGN/38                 ?62       16?6                 $129                	;0
135  66    GOTO/253                  ?0        ?3677                ?100                	;0
136  69    ASSIGN/38                 ?63       16?9                 101:false           	;0
137  70    ASSIGN/38                 ?64       16?10                102:false           	;0
138  71    FETCH_DIM_R/81            $133=     16?6                 103:'admin_enabled' 	;0
139  71    IS_EQUAL/17               #134=     $133                 104:1               	;0
140  71    JMPZ_EX/46                #134=     #134                 ?144                	;0	>>144
141  71    FETCH_DIM_R/81            $135=     16?6                 105:'enabled'       	;0
142  71    IS_EQUAL/17               #136=     $135                 106:1               	;0
143  71    BOOL/52                   #134=     #136                 ?0                  	;0
144  71    JMPZ_EX/46                #134=     #134                 ?156                	;0	>>156	<<140
145  71    INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'is_null'       	;1
146  71    FETCH_DIM_FUNC_ARG/93     $137=     16?6                 109:'exp_date'      	;1
147  71    SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
148  71    DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
149  71    JMPNZ_EX/47               #139=     $138                 ?155                	;0	>>155
150  71    FETCH_DIM_R/81            $140=     16?6                 110:'exp_date'      	;0
151  71    INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'time'          	;0
152  71    DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
153  71    IS_SMALLER/19             #142=     $141                 $140                	;0
154  71    BOOL/52                   #139=     #142                 ?0                  	;0
155  71    BOOL/52                   #134=     #139                 ?0                  	;0	<<149
156  71    JMPZ/43                   ?0        #134                 ?158                	;0	>>158	<<144
157  72    GOTO/253                  ?0        ?3722                ?113                	;0
158  74    FETCH_DIM_R/81            $143=     16?6                 114:'admin_enabled' 	;0	<<156
159  74    BOOL_NOT/13               #144=     $143                 ?0                  	;0
160  74    JMPZ/43                   ?0        #144                 ?162                	;0	>>162
161  75    GOTO/253                  ?0        ?196                 ?115                	;0
162  77    GOTO/253                  ?0        ?72                  ?116                	;0	<<160
163  80    ASSIGN/38                 ?77       16?9                 117:true            	;0
164  81    FETCH_STATIC_PROP_R/173   $146=     118:'rSettings'      119:'XUI'           	;0
165  81    FETCH_DIM_R/81            $147=     $146                 121:'disable_player_api'	;0
166  81    BOOL_NOT/13               #148=     $147                 ?0                  	;0
167  81    JMPZ/43                   ?0        #148                 ?169                	;0	>>169
168  82    GOTO/253                  ?0        ?14                  ?122                	;0
169  84    ASSIGN/38                 ?81       16?9                 123:false           	;0	<<167
170  85    INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'generateError' 	;1
171  85    SEND_VAL_EX/116           ?80       126:'PLAYER_API_DISABLED' ?1                  	;0
172  85    DO_FCALL_BY_NAME/131      ?82       ?0                   ?0                  	;0
173  86    GOTO/253                  ?0        ?14                  ?127                	;0
174  89    BOOL_NOT/13               #151=     16?2                 ?0                  	;0
175  89    JMPZ/43                   ?0        #151                 ?177                	;0	>>177
176  90    GOTO/253                  ?0        ?182                 ?128                	;0
177  92    INIT_STATIC_METHOD_CALL/113 ?0        132:'XUI'            134:'e74a9A4510c4ffE4'	;1	<<175
178  92    SEND_VAL_EX/116           ?80       136:'bouquets'       ?1                  	;0
179  92    DO_FCALL/60               $153=     ?0                   ?0                  	;0
180  92    FETCH_STATIC_PROP_W/174   $152=     129:'rBouquets'      130:'XUI'           	;0
181  92    ASSIGN/38                 ?86       $152                 $153                	;0
182  94    JMPZ_EX/46                #155=     16?0                 ?185                	;0	>>185
183  94    ISSET_ISEMPTY_CV/197      #156=     16?1                 ?0                  	;16777216
184  94    BOOL/52                   #155=     #156                 ?0                  	;0
185  94    JMPNZ_EX/47               #155=     #155                 ?191                	;0	>>191	<<182
186  94    INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'in_array'      	;2
187  94    SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
188  94    SEND_VAL_EX/116           ?96       139:array (
  0 => 'get_vod_categories',
  1 => 'get_series_categories',
  2 => 'get_live_categories',
) ?2                  	;0
189  94    DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
190  94    BOOL/52                   #155=     $157                 ?0                  	;0
191  94    BOOL_NOT/13               #158=     #155                 ?0                  	;0	<<185
192  94    JMPZ/43                   ?0        #158                 ?194                	;0	>>194
193  95    GOTO/253                  ?0        ?233                 ?140                	;0
194  97    GOTO/253                  ?0        ?228                 ?141                	;0	<<192
195  100   GOTO/253                  ?0        ?199                 ?142                	;0
196  102   INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'generateError' 	;1
197  102   SEND_VAL_EX/116           ?80       145:'BANNED'         ?1                  	;0
198  102   DO_FCALL_BY_NAME/131      ?91       ?0                   ?0                  	;0
199  104   GOTO/253                  ?0        ?3721                ?146                	;0
200  107   NOP/0                     ?0        ?0                   ?0                  	;0
201  118   FETCH_R/80                $160=     147:'_SERVER'        ?0                  	;0
202  118   FETCH_DIM_R/81            $161=     $160                 148:'REMOTE_ADDR'   	;0
203  118   ASSIGN/38                 ?94       16?11                $161                	;0
204  119   INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'trim'          	;1
205  119   FETCH_FUNC_ARG/92         $163=     151:'_SERVER'        ?0                  	;1
206  119   FETCH_DIM_FUNC_ARG/93     $164=     $163                 152:'HTTP_USER_AGENT'	;1
207  119   SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
208  119   DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
209  119   ASSIGN/38                 ?98       16?12                $165                	;0
210  120   FETCH_STATIC_PROP_IS/176  $167=     153:'rRequest'       154:'XUI'           	;0
211  120   FETCH_DIM_IS/90           $168=     $167                 156:'params'        	;0
212  120   ISSET_ISEMPTY_DIM_OBJ/115 #169=     $168                 157:'offset'        	;16777216
213  120   JMPZ/43                   ?0        #169                 ?216                	;0	>>216
214  120   QM_ASSIGN/22              #170=     158:0                ?0                  	;0
215  120   JMP/42                    ?0        ?226                 ?0                  	;0	>>226
216  120   INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'abs'           	;1	<<213
217  120   INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'intval'        	;1
218  120   FETCH_STATIC_PROP_FUNC_ARG/177 $171=     163:'rRequest'       164:'XUI'           	;1
219  120   FETCH_DIM_FUNC_ARG/93     $172=     $171                 166:'params'        	;1
220  120   FETCH_DIM_FUNC_ARG/93     $173=     $172                 167:'offset'        	;1
221  120   SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
222  120   DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
223  120   SEND_VAR_NO_REF_EX/50     ?80       $174                 ?1                  	;0
224  120   DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
225  120   QM_ASSIGN/22              #170=     $175                 ?0                  	;0
226  120   ASSIGN/38                 ?108      16?13                #170                	;0	<<215
227  121   GOTO/253                  ?0        ?3693                ?168                	;0
228  123   INIT_STATIC_METHOD_CALL/113 ?0        172:'XUI'            174:'e74a9a4510c4fFE4'	;1
229  123   SEND_VAL_EX/116           ?80       176:'categories'     ?1                  	;0
230  123   DO_FCALL/60               $178=     ?0                   ?0                  	;0
231  123   FETCH_STATIC_PROP_W/174   $177=     169:'rCategories'    170:'XUI'           	;0
232  123   ASSIGN/38                 ?111      $177                 $178                	;0
233  125   INIT_ARRAY/71             #180=     16?13                177:'offset'        	;10
234  125   ADD_ARRAY_ELEMENT/72      #180=     16?15                178:'items_per_page'	;0
235  125   ASSIGN/38                 ?113      16?14                #180                	;0
236  126   FETCH_STATIC_PROP_IS/176  $182=     179:'rRequest'       180:'XUI'           	;0
237  126   ISSET_ISEMPTY_DIM_OBJ/115 #183=     $182                 182:'username'      	;33554432
238  126   JMPZ_EX/46                #183=     #183                 ?242                	;0	>>242
239  126   FETCH_STATIC_PROP_IS/176  $184=     183:'rRequest'       184:'XUI'           	;0
240  126   ISSET_ISEMPTY_DIM_OBJ/115 #185=     $184                 186:'password'      	;33554432
241  126   BOOL/52                   #183=     #185                 ?0                  	;0
242  126   JMPZ/43                   ?0        #183                 ?244                	;0	>>244	<<238
243  127   GOTO/253                  ?0        ?47                  ?187                	;0
244  129   FETCH_STATIC_PROP_IS/176  $186=     188:'rRequest'       189:'XUI'           	;0	<<242
245  129   ISSET_ISEMPTY_DIM_OBJ/115 #187=     $186                 191:'token'         	;33554432
246  129   BOOL_NOT/13               #188=     #187                 ?0                  	;0
247  129   JMPZ/43                   ?0        #188                 ?249                	;0	>>249
248  130   GOTO/253                  ?0        ?46                  ?192                	;0
249  132   GOTO/253                  ?0        ?54                  ?193                	;0	<<247
250  134   SWITCH_STRING/188         ?0        16?1                 194:array (
  'get_epg' => 274,
  'get_series_info' => 592,
  'get_series' => 1023,
  'get_vod_categories' => 1410,
  'get_series_categories' => 1439,
  'get_live_categories' => 1468,
  'get_simple_data_table' => 1504,
  'get_short_epg' => 1987,
  'get_live_streams' => 2296,
  'get_vod_info' => 2646,
  'get_vod_streams' => 2910,
)	;3221
251  135   CASE/48                   #189=     16?1                 195:'get_epg'       	;0	>>253
252  135   JMPNZ/44                  ?0        #189                 ?274                	;0	>>274
253  271   CASE/48                   #189=     16?1                 196:'get_series_info'	;0	>>255	<<251
254  271   JMPNZ/44                  ?0        #189                 ?592                	;0	>>592
255  403   CASE/48                   #189=     16?1                 197:'get_series'    	;0	>>257	<<253
256  403   JMPNZ/44                  ?0        #189                 ?1023               	;0	>>1023
257  519   CASE/48                   #189=     16?1                 198:'get_vod_categories'	;0	>>259	<<255
258  519   JMPNZ/44                  ?0        #189                 ?1410               	;0	>>1410
259  531   CASE/48                   #189=     16?1                 199:'get_series_categories'	;0	>>261	<<257
260  531   JMPNZ/44                  ?0        #189                 ?1439               	;0	>>1439
261  543   CASE/48                   #189=     16?1                 200:'get_live_categories'	;0	>>263	<<259
262  543   JMPNZ/44                  ?0        #189                 ?1468               	;0	>>1468
263  555   CASE/48                   #189=     16?1                 201:'get_simple_data_table'	;0	>>265	<<261
264  555   JMPNZ/44                  ?0        #189                 ?1504               	;0	>>1504
265  725   CASE/48                   #189=     16?1                 202:'get_short_epg' 	;0	>>267	<<263
266  725   JMPNZ/44                  ?0        #189                 ?1987               	;0	>>1987
267  847   CASE/48                   #189=     16?1                 203:'get_live_streams'	;0	>>269	<<265
268  847   JMPNZ/44                  ?0        #189                 ?2296               	;0	>>2296
269  977   CASE/48                   #189=     16?1                 204:'get_vod_info'  	;0	>>271	<<267
270  977   JMPNZ/44                  ?0        #189                 ?2646               	;0	>>2646
271  1066  CASE/48                   #189=     16?1                 205:'get_vod_streams'	;0	>>273	<<269
272  1066  JMPNZ/44                  ?0        #189                 ?2910               	;0	>>2910
273  1066  JMP/42                    ?0        ?3221                ?0                  	;0	>>3221	<<271
274  136   GOTO/253                  ?0        ?526                 ?206                	;0	<<252
275  139   ASSIGN/38                 ?122      16?16                207:false           	;0
276  140   INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'intval'        	;1
277  140   FETCH_STATIC_PROP_FUNC_ARG/177 $191=     210:'rRequest'       211:'XUI'           	;1
278  140   FETCH_DIM_FUNC_ARG/93     $192=     $191                 213:'stream_id'     	;1
279  140   SEND_VAR_EX/66            ?80       $192                 ?1                  	;0
280  140   DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
281  140   INIT_ARRAY/71             #194=     $193                 ?0                  	;4
282  140   ASSIGN/38                 ?127      16?17                #194                	;0
283  142   ASSIGN/38                 ?128      16?18                214:array (
)       	;0
284  143   GOTO/253                  ?0        ?551                 ?215                	;0
285  146   FETCH_STATIC_PROP_R/173   $197=     216:'db'             217:'XUI'           	;0
286  146   INIT_METHOD_CALL/112      ?0        $197                 219:'query'         	;2
287  146   INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'implode'       	;2
288  146   SEND_VAL_EX/116           ?80       223:'\',\''          ?1                  	;0
289  146   INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'array_keys'    	;1
290  146   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
291  146   DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
292  146   SEND_VAR_NO_REF_EX/50     ?96       $198                 ?2                  	;0
293  146   DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
294  146   CONCAT/8                  #200=     226:'SELECT * FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' $199                	;0
295  146   CONCAT/8                  #201=     #200                 227:'\') AND `end` >= ?;'	;0
296  146   SEND_VAL_EX/116           ?80       #201                 ?1                  	;0
297  146   INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'time'          	;0
298  146   DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
299  146   SEND_VAR_NO_REF_EX/50     ?96       $202                 ?2                  	;0
300  146   DO_FCALL/60               ?135      ?0                   ?0                  	;0
301  148   FETCH_STATIC_PROP_R/173   $204=     230:'db'             231:'XUI'           	;0
302  148   INIT_METHOD_CALL/112      ?0        $204                 233:'get_rows'      	;0
303  148   DO_FCALL/60               $205=     ?0                   ?0                  	;0
304  148   ASSIGN/38                 ?138      16?20                $205                	;0
305  149   FE_RESET_R/77             $207=     16?20                ?364                	;0
306  149   FE_FETCH_R/78             ?0        $207                 16?21               	;364	>>364	<<363
307  150   NOP/0                     ?0        ?0                   ?0                  	;1
308  150   GOTO/253                  ?0        ?323                 ?235                	;0
309  154   NOP/0                     ?0        ?0                   ?0                  	;1
310  154   GOTO/253                  ?0        ?363                 ?236                	;0
311  156   JMPZ/43                   ?0        16?16                ?314                	;0	>>314
312  157   NOP/0                     ?0        ?0                   ?0                  	;1
313  157   GOTO/253                  ?0        ?318                 ?237                	;0
314  159   ASSIGN_DIM/147            ?140      16?18                ?4397406            	;0	<<311
315  159   OP_DATA/137               ?0        16?21                ?0                  	;0
316  160   NOP/0                     ?0        ?0                   ?0                  	;1
317  160   GOTO/253                  ?0        ?309                 ?238                	;0
318  162   FETCH_DIM_W/84            $209=     16?18                16?22               	;0
319  162   ASSIGN_DIM/147            ?142      $209                 ?0                  	;0
320  162   OP_DATA/137               ?0        16?21                ?0                  	;0
321  163   NOP/0                     ?0        ?0                   ?0                  	;1
322  163   GOTO/253                  ?0        ?309                 ?239                	;0
323  165   INIT_FCALL_BY_NAME/59     ?0        ?0                   240:'intval'        	;1
324  165   INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'str_replace'   	;3
325  165   SEND_VAL_EX/116           ?80       244:'\''             ?1                  	;0
326  165   SEND_VAL_EX/116           ?96       245:'\\\''           ?2                  	;0
327  165   FETCH_DIM_R/81            $211=     16?21                246:'epg_id'        	;0
328  165   CONCAT/8                  #212=     $211                 247:'_'             	;0
329  165   FETCH_DIM_R/81            $213=     16?21                248:'channel_id'    	;0
330  165   CONCAT/8                  #214=     #212                 $213                	;0
331  165   SEND_VAL_EX/116           ?112      #214                 ?3                  	;0
332  165   DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
333  165   FETCH_DIM_FUNC_ARG/93     $216=     16?19                $215                	;1
334  165   SEND_VAR_EX/66            ?80       $216                 ?1                  	;0
335  165   DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
336  165   ASSIGN/38                 ?150      16?22                $217                	;0
337  166   INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'base64_encode' 	;1
338  166   FETCH_DIM_FUNC_ARG/93     $220=     16?21                252:'title'         	;1
339  166   SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
340  166   DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
341  166   ASSIGN_DIM/147            ?151      16?21                249:'title'         	;0
342  166   OP_DATA/137               ?0        $221                 ?0                  	;0
343  167   INIT_FCALL_BY_NAME/59     ?0        ?0                   254:'base64_encode' 	;1
344  167   FETCH_DIM_FUNC_ARG/93     $223=     16?21                256:'description'   	;1
345  167   SEND_VAR_EX/66            ?80       $223                 ?1                  	;0
346  167   DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
347  167   ASSIGN_DIM/147            ?154      16?21                253:'description'   	;0
348  167   OP_DATA/137               ?0        $224                 ?0                  	;0
349  168   INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'intval'        	;1
350  168   FETCH_DIM_FUNC_ARG/93     $226=     16?21                260:'start'         	;1
351  168   SEND_VAR_EX/66            ?80       $226                 ?1                  	;0
352  168   DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
353  168   ASSIGN_DIM/147            ?157      16?21                257:'start'         	;0
354  168   OP_DATA/137               ?0        $227                 ?0                  	;0
355  169   INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'intval'        	;1
356  169   FETCH_DIM_FUNC_ARG/93     $229=     16?21                264:'end'           	;1
357  169   SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
358  169   DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
359  169   ASSIGN_DIM/147            ?160      16?21                261:'end'           	;0
360  169   OP_DATA/137               ?0        $230                 ?0                  	;0
361  170   NOP/0                     ?0        ?0                   ?0                  	;1
362  170   GOTO/253                  ?0        ?311                 ?265                	;0
363  171   JMP/42                    ?0        ?306                 ?0                  	;0	>>306
364  171   FE_FREE/127               ?0        $207                 ?0                  	;0	<<305
365  173   GOTO/253                  ?0        ?431                 ?266                	;0
366  176   INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'count'         	;1
367  176   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
368  176   DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
369  176   IS_SMALLER/19             #232=     269:0                $231                	;0
370  176   BOOL_NOT/13               #233=     #232                 ?0                  	;0
371  176   JMPZ/43                   ?0        #233                 ?373                	;0	>>373
372  177   GOTO/253                  ?0        ?431                 ?270                	;0
373  179   JMPZ/43                   ?0        16?23                ?375                	;0	>>375	<<371
374  180   GOTO/253                  ?0        ?285                 ?271                	;0
375  182   FETCH_STATIC_PROP_R/173   $234=     272:'db'             273:'XUI'           	;0	<<373
376  182   INIT_METHOD_CALL/112      ?0        $234                 275:'query'         	;1
377  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'implode'       	;2
378  182   SEND_VAL_EX/116           ?80       279:'\',\''          ?1                  	;0
379  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'array_keys'    	;1
380  182   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
381  182   DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
382  182   SEND_VAR_NO_REF_EX/50     ?96       $235                 ?2                  	;0
383  182   DO_FCALL_BY_NAME/131      $236=     ?0                   ?0                  	;0
384  182   CONCAT/8                  #237=     282:'SELECT * FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' $236                	;0
385  182   CONCAT/8                  #238=     #237                 283:'\');'          	;0
386  182   SEND_VAL_EX/116           ?80       #238                 ?1                  	;0
387  182   DO_FCALL/60               ?171      ?0                   ?0                  	;0
388  183   GOTO/253                  ?0        ?301                 ?284                	;0
389  184   GOTO/253                  ?0        ?285                 ?285                	;0
390  189   INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'json_encode'   	;1
391  189   SEND_VAR_EX/66            ?80       16?18                ?1                  	;0
392  189   DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
393  189   ECHO/40                   ?0        $240                 ?0                  	;0
394  190   EXIT/79                   ?0        ?0                   ?0                  	;0
395  191   GOTO/253                  ?0        ?550                 ?288                	;0
396  193   FETCH_STATIC_PROP_IS/176  $241=     289:'rRequest'       290:'XUI'           	;0
397  193   ISSET_ISEMPTY_DIM_OBJ/115 #242=     $241                 292:'from_now'      	;16777216
398  193   BOOL_NOT/13               #243=     #242                 ?0                  	;0
399  193   JMPZ_EX/46                #243=     #243                 ?404                	;0	>>404
400  193   FETCH_STATIC_PROP_R/173   $244=     293:'rRequest'       294:'XUI'           	;0
401  193   FETCH_DIM_R/81            $245=     $244                 296:'from_now'      	;0
402  193   IS_SMALLER/19             #246=     297:0                $245                	;0
403  193   BOOL/52                   #243=     #246                 ?0                  	;0
404  193   ASSIGN/38                 ?179      16?23                #243                	;0	<<399
405  194   INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'is_numeric'    	;1
406  194   FETCH_STATIC_PROP_FUNC_ARG/177 $248=     300:'rRequest'       301:'XUI'           	;1
407  194   FETCH_DIM_FUNC_ARG/93     $249=     $248                 303:'stream_id'     	;1
408  194   SEND_VAR_EX/66            ?80       $249                 ?1                  	;0
409  194   DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
410  194   JMPZ_EX/46                #251=     $250                 ?415                	;0	>>415
411  194   FETCH_STATIC_PROP_IS/176  $252=     304:'rRequest'       305:'XUI'           	;0
412  194   ISSET_ISEMPTY_DIM_OBJ/115 #253=     $252                 307:'multi'         	;33554432
413  194   BOOL_NOT/13               #254=     #253                 ?0                  	;0
414  194   BOOL/52                   #251=     #254                 ?0                  	;0
415  194   JMPZ/43                   ?0        #251                 ?417                	;0	>>417	<<410
416  195   GOTO/253                  ?0        ?275                 ?308                	;0
417  197   ASSIGN/38                 ?187      16?16                309:true            	;0	<<415
418  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'array_map'     	;2
419  198   SEND_VAL_EX/116           ?80       312:'intval'         ?1                  	;0
420  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'explode'       	;2
421  198   SEND_VAL_EX/116           ?80       315:','              ?1                  	;0
422  198   FETCH_STATIC_PROP_FUNC_ARG/177 $256=     316:'rRequest'       317:'XUI'           	;2
423  198   FETCH_DIM_FUNC_ARG/93     $257=     $256                 319:'stream_id'     	;2
424  198   SEND_VAR_EX/66            ?96       $257                 ?2                  	;0
425  198   DO_FCALL_BY_NAME/131      $258=     ?0                   ?0                  	;0
426  198   SEND_VAR_NO_REF_EX/50     ?96       $258                 ?2                  	;0
427  198   DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
428  198   ASSIGN/38                 ?192      16?17                $259                	;0
429  199   GOTO/253                  ?0        ?283                 ?320                	;0
430  200   GOTO/253                  ?0        ?275                 ?321                	;0
431  204   GOTO/253                  ?0        ?390                 ?322                	;0
432  206   FE_RESET_R/77             $261=     16?17                ?524                	;0
433  206   FE_FETCH_R/78             ?0        $261                 16?22               	;524	>>524	<<523
434  207   INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'file_exists'   	;1
435  207   FETCH_CONSTANT/99         #262=     ?0                   325:'EPG_PATH'      	;16
436  207   CONCAT/8                  #263=     #262                 328:'stream_'       	;0
437  207   INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'intval'        	;1
438  207   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
439  207   DO_FCALL_BY_NAME/131      $264=     ?0                   ?0                  	;0
440  207   CONCAT/8                  #265=     #263                 $264                	;0
441  207   SEND_VAL_EX/116           ?80       #265                 ?1                  	;0
442  207   DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
443  207   BOOL_NOT/13               #267=     $266                 ?0                  	;0
444  207   JMPZ/43                   ?0        #267                 ?447                	;0	>>447
445  208   NOP/0                     ?0        ?0                   ?0                  	;1
446  208   GOTO/253                  ?0        ?523                 ?331                	;0
447  210   INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'igbinary_unserialize'	;1	<<444
448  210   INIT_FCALL_BY_NAME/59     ?0        ?0                   334:'file_get_contents'	;1
449  210   FETCH_CONSTANT/99         #268=     ?0                   336:'EPG_PATH'      	;16
450  210   CONCAT/8                  #269=     #268                 339:'stream_'       	;0
451  210   CONCAT/8                  #270=     #269                 16?22               	;0
452  210   SEND_VAL_EX/116           ?80       #270                 ?1                  	;0
453  210   DO_FCALL_BY_NAME/131      $271=     ?0                   ?0                  	;0
454  210   SEND_VAR_NO_REF_EX/50     ?80       $271                 ?1                  	;0
455  210   DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
456  210   ASSIGN/38                 ?205      16?20                $272                	;0
457  211   FE_RESET_R/77             $274=     16?20                ?522                	;0
458  211   FE_FETCH_R/78             ?0        $274                 16?21               	;522	>>522	<<521
459  212   NOP/0                     ?0        ?0                   ?0                  	;1
460  212   NOP/0                     ?0        ?0                   ?0                  	;1
461  212   GOTO/253                  ?0        ?462                 ?340                	;0
462  214   JMPZ_EX/46                #275=     16?23                ?468                	;0	>>468
463  214   FETCH_DIM_R/81            $276=     16?21                341:'end'           	;0
464  214   INIT_FCALL_BY_NAME/59     ?0        ?0                   342:'time'          	;0
465  214   DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
466  214   IS_SMALLER/19             #278=     $276                 $277                	;0
467  214   BOOL/52                   #275=     #278                 ?0                  	;0
468  214   BOOL_NOT/13               #279=     #275                 ?0                  	;0	<<462
469  214   JMPZ/43                   ?0        #279                 ?473                	;0	>>473
470  215   NOP/0                     ?0        ?0                   ?0                  	;1
471  215   NOP/0                     ?0        ?0                   ?0                  	;1
472  215   GOTO/253                  ?0        ?476                 ?344                	;0
473  217   NOP/0                     ?0        ?0                   ?0                  	;1	<<469
474  217   NOP/0                     ?0        ?0                   ?0                  	;1
475  217   GOTO/253                  ?0        ?494                 ?345                	;0
476  219   INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'base64_encode' 	;1
477  219   FETCH_DIM_FUNC_ARG/93     $281=     16?21                349:'title'         	;1
478  219   SEND_VAR_EX/66            ?80       $281                 ?1                  	;0
479  219   DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
480  219   ASSIGN_DIM/147            ?212      16?21                346:'title'         	;0
481  219   OP_DATA/137               ?0        $282                 ?0                  	;0
482  220   INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'base64_encode' 	;1
483  220   FETCH_DIM_FUNC_ARG/93     $284=     16?21                353:'description'   	;1
484  220   SEND_VAR_EX/66            ?80       $284                 ?1                  	;0
485  220   DO_FCALL_BY_NAME/131      $285=     ?0                   ?0                  	;0
486  220   ASSIGN_DIM/147            ?215      16?21                350:'description'   	;0
487  220   OP_DATA/137               ?0        $285                 ?0                  	;0
488  221   NOP/0                     ?0        ?0                   ?0                  	;1
489  221   NOP/0                     ?0        ?0                   ?0                  	;1
490  221   GOTO/253                  ?0        ?497                 ?354                	;0
491  224   FETCH_DIM_W/84            $286=     16?18                16?22               	;0
492  224   ASSIGN_DIM/147            ?219      $286                 ?0                  	;0
493  224   OP_DATA/137               ?0        16?21                ?0                  	;0
494  227   NOP/0                     ?0        ?0                   ?0                  	;1
495  227   NOP/0                     ?0        ?0                   ?0                  	;1
496  227   GOTO/253                  ?0        ?521                 ?355                	;0
497  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   357:'intval'        	;1
498  229   FETCH_DIM_FUNC_ARG/93     $289=     16?21                359:'start'         	;1
499  229   SEND_VAR_EX/66            ?80       $289                 ?1                  	;0
500  229   DO_FCALL_BY_NAME/131      $290=     ?0                   ?0                  	;0
501  229   ASSIGN_DIM/147            ?220      16?21                356:'start'         	;0
502  229   OP_DATA/137               ?0        $290                 ?0                  	;0
503  230   INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'intval'        	;1
504  230   FETCH_DIM_FUNC_ARG/93     $292=     16?21                363:'end'           	;1
505  230   SEND_VAR_EX/66            ?80       $292                 ?1                  	;0
506  230   DO_FCALL_BY_NAME/131      $293=     ?0                   ?0                  	;0
507  230   ASSIGN_DIM/147            ?223      16?21                360:'end'           	;0
508  230   OP_DATA/137               ?0        $293                 ?0                  	;0
509  231   JMPZ/43                   ?0        16?16                ?513                	;0	>>513
510  232   NOP/0                     ?0        ?0                   ?0                  	;1
511  232   NOP/0                     ?0        ?0                   ?0                  	;1
512  232   GOTO/253                  ?0        ?491                 ?364                	;0
513  234   ASSIGN_DIM/147            ?226      16?18                ?4397406            	;0	<<509
514  234   OP_DATA/137               ?0        16?21                ?0                  	;0
515  235   NOP/0                     ?0        ?0                   ?0                  	;1
516  235   NOP/0                     ?0        ?0                   ?0                  	;1
517  235   GOTO/253                  ?0        ?494                 ?365                	;0
518  236   NOP/0                     ?0        ?0                   ?0                  	;1
519  236   NOP/0                     ?0        ?0                   ?0                  	;1
520  236   GOTO/253                  ?0        ?491                 ?366                	;0
521  237   JMP/42                    ?0        ?458                 ?0                  	;0	>>458
522  237   FE_FREE/127               ?0        $274                 ?0                  	;0	<<457
523  241   JMP/42                    ?0        ?433                 ?0                  	;0	>>433
524  241   FE_FREE/127               ?0        $261                 ?0                  	;0	<<432
525  243   GOTO/253                  ?0        ?390                 ?367                	;0
526  245   FETCH_STATIC_PROP_IS/176  $295=     368:'rRequest'       369:'XUI'           	;0
527  245   ISSET_ISEMPTY_DIM_OBJ/115 #296=     $295                 371:'stream_id'     	;16777216
528  245   BOOL_NOT/13               #297=     #296                 ?0                  	;0
529  245   JMPZ_EX/46                #297=     #297                 ?541                	;0	>>541
530  245   INIT_FCALL_BY_NAME/59     ?0        ?0                   372:'is_null'       	;1
531  245   FETCH_DIM_FUNC_ARG/93     $298=     16?6                 374:'exp_date'      	;1
532  245   SEND_VAR_EX/66            ?80       $298                 ?1                  	;0
533  245   DO_FCALL_BY_NAME/131      $299=     ?0                   ?0                  	;0
534  245   JMPNZ_EX/47               #300=     $299                 ?540                	;0	>>540
535  245   FETCH_DIM_R/81            $301=     16?6                 375:'exp_date'      	;0
536  245   INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'time'          	;0
537  245   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
538  245   IS_SMALLER/19             #303=     $302                 $301                	;0
539  245   BOOL/52                   #300=     #303                 ?0                  	;0
540  245   BOOL/52                   #297=     #300                 ?0                  	;0	<<534
541  245   JMPZ/43                   ?0        #297                 ?543                	;0	>>543	<<529
542  246   GOTO/253                  ?0        ?549                 ?378                	;0
543  248   INIT_FCALL_BY_NAME/59     ?0        ?0                   379:'json_encode'   	;1	<<541
544  248   SEND_VAL_EX/116           ?80       381:array (
)        ?1                  	;0
545  248   DO_FCALL_BY_NAME/131      $304=     ?0                   ?0                  	;0
546  248   ECHO/40                   ?0        $304                 ?0                  	;0
547  249   EXIT/79                   ?0        ?0                   ?0                  	;0
548  250   GOTO/253                  ?0        ?550                 ?382                	;0
549  252   GOTO/253                  ?0        ?396                 ?383                	;0
550  255   GOTO/253                  ?0        ?592                 ?384                	;0
551  257   INIT_FCALL_BY_NAME/59     ?0        ?0                   385:'count'         	;1
552  257   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
553  257   DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
554  257   IS_SMALLER/19             #306=     387:0                $305                	;0
555  257   BOOL_NOT/13               #307=     #306                 ?0                  	;0
556  257   JMPZ/43                   ?0        #307                 ?558                	;0	>>558
557  258   GOTO/253                  ?0        ?390                 ?388                	;0
558  260   FETCH_STATIC_PROP_R/173   $308=     389:'rCached'        390:'XUI'           	;0	<<556
559  260   JMPZ/43                   ?0        $308                 ?561                	;0	>>561
560  261   GOTO/253                  ?0        ?432                 ?392                	;0
561  263   ASSIGN/38                 ?241      16?19                393:array (
)       	;0	<<559
562  264   FETCH_STATIC_PROP_R/173   $310=     394:'db'             395:'XUI'           	;0
563  264   INIT_METHOD_CALL/112      ?0        $310                 397:'query'         	;1
564  264   INIT_FCALL_BY_NAME/59     ?0        ?0                   399:'implode'       	;2
565  264   SEND_VAL_EX/116           ?80       401:','              ?1                  	;0
566  264   SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
567  264   DO_FCALL_BY_NAME/131      $311=     ?0                   ?0                  	;0
568  264   CONCAT/8                  #312=     402:'SELECT `id`, `epg_id`, `channel_id` FROM `streams` WHERE `id` IN (' $311                	;0
569  264   CONCAT/8                  #313=     #312                 403:');'            	;0
570  264   SEND_VAL_EX/116           ?80       #313                 ?1                  	;0
571  264   DO_FCALL/60               ?246      ?0                   ?0                  	;0
572  265   FETCH_STATIC_PROP_R/173   $315=     404:'db'             405:'XUI'           	;0
573  265   INIT_METHOD_CALL/112      ?0        $315                 407:'get_rows'      	;0
574  265   DO_FCALL/60               $316=     ?0                   ?0                  	;0
575  265   FE_RESET_R/77             $317=     $316                 ?590                	;0
576  265   FE_FETCH_R/78             ?0        $317                 16?21               	;590	>>590	<<589
577  266   INIT_FCALL_BY_NAME/59     ?0        ?0                   409:'str_replace'   	;3
578  266   SEND_VAL_EX/116           ?80       411:'\''             ?1                  	;0
579  266   SEND_VAL_EX/116           ?96       412:'\\\''           ?2                  	;0
580  266   FETCH_DIM_R/81            $318=     16?21                413:'epg_id'        	;0
581  266   CONCAT/8                  #319=     $318                 414:'_'             	;0
582  266   FETCH_DIM_R/81            $320=     16?21                415:'channel_id'    	;0
583  266   CONCAT/8                  #321=     #319                 $320                	;0
584  266   SEND_VAL_EX/116           ?112      #321                 ?3                  	;0
585  266   DO_FCALL_BY_NAME/131      $322=     ?0                   ?0                  	;0
586  266   FETCH_DIM_R/81            $324=     16?21                416:'id'            	;0
587  266   ASSIGN_DIM/147            ?255      16?19                $322                	;0
588  266   OP_DATA/137               ?0        $324                 ?0                  	;0
589  267   JMP/42                    ?0        ?576                 ?0                  	;0	>>576
590  267   FE_FREE/127               ?0        $317                 ?0                  	;0	<<575
591  269   GOTO/253                  ?0        ?366                 ?417                	;0
592  272   GOTO/253                  ?0        ?687                 ?418                	;0	<<254
593  274   INIT_FCALL_BY_NAME/59     ?0        ?0                   419:'count'         	;1
594  274   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
595  274   DO_FCALL_BY_NAME/131      $325=     ?0                   ?0                  	;0
596  274   IS_SMALLER/19             #326=     421:0                $325                	;0
597  274   BOOL_NOT/13               #327=     #326                 ?0                  	;0
598  274   JMPZ/43                   ?0        #327                 ?600                	;0	>>600
599  275   GOTO/253                  ?0        ?618                 ?422                	;0
600  277   INIT_FCALL_BY_NAME/59     ?0        ?0                   423:'range'         	;2	<<598
601  277   SEND_VAL_EX/116           ?80       425:0                ?1                  	;0
602  277   INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'count'         	;1
603  277   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
604  277   DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
605  277   SUB/2                     #329=     $328                 428:1               	;0
606  277   SEND_VAL_EX/116           ?96       #329                 ?2                  	;0
607  277   DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
608  277   FE_RESET_R/77             $331=     $330                 ?617                	;0
609  277   FE_FETCH_R/78             ?0        $331                 16?25               	;617	>>617	<<616
610  278   INIT_STATIC_METHOD_CALL/113 ?0        429:'XUI'            431:'FcA722697178454b'	;1
611  278   FETCH_DIM_FUNC_ARG/93     $333=     16?24                16?25               	;1
612  278   SEND_VAR_EX/66            ?80       $333                 ?1                  	;0
613  278   DO_FCALL/60               $334=     ?0                   ?0                  	;0
614  278   ASSIGN_DIM/147            ?264      16?24                16?25               	;0
615  278   OP_DATA/137               ?0        $334                 ?0                  	;0
616  279   JMP/42                    ?0        ?609                 ?0                  	;0	>>609
617  279   FE_FREE/127               ?0        $331                 ?0                  	;0	<<608
618  283   INIT_STATIC_METHOD_CALL/113 ?0        434:'XUI'            436:'cF5D4a2f3De8982C'	;2
619  283   FETCH_DIM_FUNC_ARG/93     $336=     16?26                438:'title'         	;1
620  283   SEND_VAR_EX/66            ?80       $336                 ?1                  	;0
621  283   FETCH_DIM_FUNC_ARG/93     $337=     16?26                439:'year'          	;2
622  283   SEND_VAR_EX/66            ?96       $337                 ?2                  	;0
623  283   DO_FCALL/60               $338=     ?0                   ?0                  	;0
624  283   INIT_ARRAY/71             #339=     $338                 440:'name'          	;74
625  283   FETCH_DIM_R/81            $340=     16?26                441:'title'         	;0
626  283   ADD_ARRAY_ELEMENT/72      #339=     $340                 442:'title'         	;0
627  283   FETCH_DIM_R/81            $341=     16?26                443:'year'          	;0
628  283   ADD_ARRAY_ELEMENT/72      #339=     $341                 444:'year'          	;0
629  283   INIT_STATIC_METHOD_CALL/113 ?0        445:'XUI'            447:'fca722697178454b'	;1
630  283   FETCH_DIM_FUNC_ARG/93     $342=     16?26                449:'cover'         	;1
631  283   SEND_VAR_EX/66            ?80       $342                 ?1                  	;0
632  283   DO_FCALL/60               $343=     ?0                   ?0                  	;0
633  283   ADD_ARRAY_ELEMENT/72      #339=     $343                 450:'cover'         	;0
634  283   FETCH_DIM_R/81            $344=     16?26                451:'plot'          	;0
635  283   ADD_ARRAY_ELEMENT/72      #339=     $344                 452:'plot'          	;0
636  283   FETCH_DIM_R/81            $345=     16?26                453:'cast'          	;0
637  283   ADD_ARRAY_ELEMENT/72      #339=     $345                 454:'cast'          	;0
638  283   FETCH_DIM_R/81            $346=     16?26                455:'director'      	;0
639  283   ADD_ARRAY_ELEMENT/72      #339=     $346                 456:'director'      	;0
640  283   FETCH_DIM_R/81            $347=     16?26                457:'genre'         	;0
641  283   ADD_ARRAY_ELEMENT/72      #339=     $347                 458:'genre'         	;0
642  283   FETCH_DIM_R/81            $348=     16?26                459:'release_date'  	;0
643  283   ADD_ARRAY_ELEMENT/72      #339=     $348                 460:'release_date'  	;0
644  283   FETCH_DIM_R/81            $349=     16?26                461:'release_date'  	;0
645  283   ADD_ARRAY_ELEMENT/72      #339=     $349                 462:'releaseDate'   	;0
646  283   FETCH_DIM_R/81            $350=     16?26                463:'last_modified' 	;0
647  283   ADD_ARRAY_ELEMENT/72      #339=     $350                 464:'last_modified' 	;0
648  283   INIT_FCALL_BY_NAME/59     ?0        ?0                   465:'number_format' 	;2
649  283   FETCH_DIM_FUNC_ARG/93     $351=     16?26                467:'rating'        	;1
650  283   SEND_VAR_EX/66            ?80       $351                 ?1                  	;0
651  283   SEND_VAL_EX/116           ?96       468:0                ?2                  	;0
652  283   DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
653  283   ADD_ARRAY_ELEMENT/72      #339=     $352                 469:'rating'        	;0
654  283   INIT_FCALL_BY_NAME/59     ?0        ?0                   470:'number_format' 	;2
655  283   FETCH_DIM_R/81            $353=     16?26                472:'rating'        	;0
656  283   MUL/3                     #354=     $353                 473:0.5             	;0
657  283   SEND_VAL_EX/116           ?80       #354                 ?1                  	;0
658  283   SEND_VAL_EX/116           ?96       474:1                ?2                  	;0
659  283   DO_FCALL_BY_NAME/131      $355=     ?0                   ?0                  	;0
660  283   ADD/1                     #356=     $355                 475:0               	;0
661  283   ADD_ARRAY_ELEMENT/72      #339=     #356                 476:'rating_5based' 	;0
662  283   ADD_ARRAY_ELEMENT/72      #339=     16?24                477:'backdrop_path' 	;0
663  283   FETCH_DIM_R/81            $357=     16?26                478:'youtube_trailer'	;0
664  283   ADD_ARRAY_ELEMENT/72      #339=     $357                 479:'youtube_trailer'	;0
665  283   FETCH_DIM_R/81            $358=     16?26                480:'episode_run_time'	;0
666  283   ADD_ARRAY_ELEMENT/72      #339=     $358                 481:'episode_run_time'	;0
667  283   INIT_FCALL_BY_NAME/59     ?0        ?0                   482:'strval'        	;1
668  283   INIT_FCALL_BY_NAME/59     ?0        ?0                   484:'json_decode'   	;2
669  283   FETCH_DIM_FUNC_ARG/93     $359=     16?26                486:'category_id'   	;1
670  283   SEND_VAR_EX/66            ?80       $359                 ?1                  	;0
671  283   SEND_VAL_EX/116           ?96       487:true             ?2                  	;0
672  283   DO_FCALL_BY_NAME/131      $360=     ?0                   ?0                  	;0
673  283   SEPARATE/156              $360=     $360                 ?0                  	;0
674  283   FETCH_DIM_FUNC_ARG/93     $361=     $360                 488:0               	;1
675  283   SEND_VAR_EX/66            ?80       $361                 ?1                  	;0
676  283   DO_FCALL_BY_NAME/131      $362=     ?0                   ?0                  	;0
677  283   ADD_ARRAY_ELEMENT/72      #339=     $362                 489:'category_id'   	;0
678  283   INIT_FCALL_BY_NAME/59     ?0        ?0                   490:'json_decode'   	;2
679  283   FETCH_DIM_FUNC_ARG/93     $363=     16?26                492:'category_id'   	;1
680  283   SEND_VAR_EX/66            ?80       $363                 ?1                  	;0
681  283   SEND_VAL_EX/116           ?96       493:true             ?2                  	;0
682  283   DO_FCALL_BY_NAME/131      $364=     ?0                   ?0                  	;0
683  283   ADD_ARRAY_ELEMENT/72      #339=     $364                 494:'category_ids'  	;0
684  283   ASSIGN_DIM/147            ?267      16?7                 433:'info'          	;0
685  283   OP_DATA/137               ?0        #339                 ?0                  	;0
686  284   GOTO/253                  ?0        ?762                 ?495                	;0
687  286   FETCH_STATIC_PROP_IS/176  $365=     496:'rRequest'       497:'XUI'           	;0
688  286   ISSET_ISEMPTY_DIM_OBJ/115 #366=     $365                 499:'series_id'     	;16777216
689  286   JMPZ/43                   ?0        #366                 ?692                	;0	>>692
690  286   QM_ASSIGN/22              #367=     500:0                ?0                  	;0
691  286   JMP/42                    ?0        ?698                 ?0                  	;0	>>698
692  286   INIT_FCALL_BY_NAME/59     ?0        ?0                   501:'intval'        	;1	<<689
693  286   FETCH_STATIC_PROP_FUNC_ARG/177 $368=     503:'rRequest'       504:'XUI'           	;1
694  286   FETCH_DIM_FUNC_ARG/93     $369=     $368                 506:'series_id'     	;1
695  286   SEND_VAR_EX/66            ?80       $369                 ?1                  	;0
696  286   DO_FCALL_BY_NAME/131      $370=     ?0                   ?0                  	;0
697  286   QM_ASSIGN/22              #367=     $370                 ?0                  	;0
698  286   ASSIGN/38                 ?303      16?27                #367                	;0	<<691
699  287   FETCH_STATIC_PROP_R/173   $372=     507:'rCached'        508:'XUI'           	;0
700  287   JMPZ/43                   ?0        $372                 ?702                	;0	>>702
701  288   GOTO/253                  ?0        ?1002                ?510                	;0
702  290   FETCH_STATIC_PROP_R/173   $373=     511:'db'             512:'XUI'           	;0	<<700
703  290   INIT_METHOD_CALL/112      ?0        $373                 514:'query'         	;2
704  290   SEND_VAL_EX/116           ?80       516:'SELECT * FROM `streams_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = ? ORDER BY t1.season_num ASC, t1.episode_num ASC' ?1                  	;0
705  290   SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
706  290   DO_FCALL/60               ?306      ?0                   ?0                  	;0
707  291   FETCH_STATIC_PROP_R/173   $375=     517:'db'             518:'XUI'           	;0
708  291   INIT_METHOD_CALL/112      ?0        $375                 520:'get_rows'      	;3
709  291   SEND_VAL_EX/116           ?80       522:true             ?1                  	;0
710  291   SEND_VAL_EX/116           ?96       523:'season_num'     ?2                  	;0
711  291   SEND_VAL_EX/116           ?112      524:false            ?3                  	;0
712  291   DO_FCALL/60               $376=     ?0                   ?0                  	;0
713  291   ASSIGN/38                 ?309      16?20                $376                	;0
714  292   FETCH_STATIC_PROP_R/173   $378=     525:'db'             526:'XUI'           	;0
715  292   INIT_METHOD_CALL/112      ?0        $378                 528:'query'         	;2
716  292   SEND_VAL_EX/116           ?80       530:'SELECT * FROM `streams_series` WHERE `id` = ?' ?1                  	;0
717  292   SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
718  292   DO_FCALL/60               ?311      ?0                   ?0                  	;0
719  293   GOTO/253                  ?0        ?997                 ?531                	;0
720  296   ASSIGN_DIM/147            ?312      16?7                 532:'seasons'       	;0
721  296   OP_DATA/137               ?0        533:array (
)        ?0                  	;0
722  297   ISSET_ISEMPTY_DIM_OBJ/115 #381=     16?26                534:'seasons'       	;16777216
723  297   BOOL_NOT/13               #382=     #381                 ?0                  	;0
724  297   JMPZ/43                   ?0        #382                 ?735                	;0	>>735
725  297   INIT_FCALL_BY_NAME/59     ?0        ?0                   535:'array_values'  	;1
726  297   INIT_FCALL_BY_NAME/59     ?0        ?0                   537:'json_decode'   	;2
727  297   FETCH_DIM_FUNC_ARG/93     $383=     16?26                539:'seasons'       	;1
728  297   SEND_VAR_EX/66            ?80       $383                 ?1                  	;0
729  297   SEND_VAL_EX/116           ?96       540:true             ?2                  	;0
730  297   DO_FCALL_BY_NAME/131      $384=     ?0                   ?0                  	;0
731  297   SEND_VAR_NO_REF_EX/50     ?80       $384                 ?1                  	;0
732  297   DO_FCALL_BY_NAME/131      $385=     ?0                   ?0                  	;0
733  297   QM_ASSIGN/22              #386=     $385                 ?0                  	;0
734  297   JMP/42                    ?0        ?736                 ?0                  	;0	>>736
735  297   QM_ASSIGN/22              #386=     541:array (
)        ?0                  	;0	<<724
736  297   FE_RESET_R/77             $387=     #386                 ?754                	;0	<<734
737  297   FE_FETCH_R/78             ?0        $387                 16?28               	;754	>>754	<<753
738  298   INIT_STATIC_METHOD_CALL/113 ?0        543:'XUI'            545:'fcA722697178454b'	;1
739  298   FETCH_DIM_FUNC_ARG/93     $389=     16?28                547:'cover'         	;1
740  298   SEND_VAR_EX/66            ?80       $389                 ?1                  	;0
741  298   DO_FCALL/60               $390=     ?0                   ?0                  	;0
742  298   ASSIGN_DIM/147            ?320      16?28                542:'cover'         	;0
743  298   OP_DATA/137               ?0        $390                 ?0                  	;0
744  299   INIT_STATIC_METHOD_CALL/113 ?0        549:'XUI'            551:'FcA722697178454B'	;1
745  299   FETCH_DIM_FUNC_ARG/93     $392=     16?28                553:'cover_big'     	;1
746  299   SEND_VAR_EX/66            ?80       $392                 ?1                  	;0
747  299   DO_FCALL/60               $393=     ?0                   ?0                  	;0
748  299   ASSIGN_DIM/147            ?323      16?28                548:'cover_big'     	;0
749  299   OP_DATA/137               ?0        $393                 ?0                  	;0
750  300   FETCH_DIM_W/84            $394=     16?7                 554:'seasons'       	;0
751  300   ASSIGN_DIM/147            ?327      $394                 ?0                  	;0
752  300   OP_DATA/137               ?0        16?28                ?0                  	;0
753  301   JMP/42                    ?0        ?737                 ?0                  	;0	>>737
754  301   FE_FREE/127               ?0        $387                 ?0                  	;0	<<736
755  304   INIT_FCALL_BY_NAME/59     ?0        ?0                   555:'json_decode'   	;2
756  304   FETCH_DIM_FUNC_ARG/93     $396=     16?26                557:'backdrop_path' 	;1
757  304   SEND_VAR_EX/66            ?80       $396                 ?1                  	;0
758  304   SEND_VAL_EX/116           ?96       558:true             ?2                  	;0
759  304   DO_FCALL_BY_NAME/131      $397=     ?0                   ?0                  	;0
760  304   ASSIGN/38                 ?330      16?24                $397                	;0
761  305   GOTO/253                  ?0        ?593                 ?559                	;0
762  307   FE_RESET_R/77             $399=     16?20                ?994                	;0
763  307   FE_FETCH_R/78             #400=     $399                 16?29               	;994	>>994	<<993
764  307   ASSIGN/38                 ?333      16?28                #400                	;0
765  308   ASSIGN/38                 ?334      16?30                560:1               	;0
766  309   FE_RESET_R/77             $403=     16?29                ?992                	;0
767  309   FE_FETCH_R/78             ?0        $403                 16?31               	;992	>>992	<<991
768  310   NOP/0                     ?0        ?0                   ?0                  	;1
769  310   NOP/0                     ?0        ?0                   ?0                  	;1
770  310   GOTO/253                  ?0        ?964                 ?561                	;0
771  313   FETCH_STATIC_PROP_R/173   $404=     562:'rSettings'      563:'XUI'           	;0
772  313   FETCH_DIM_R/81            $405=     $404                 565:'api_redirect'  	;0
773  313   JMPZ/43                   ?0        $405                 ?777                	;0	>>777
774  314   NOP/0                     ?0        ?0                   ?0                  	;1
775  314   NOP/0                     ?0        ?0                   ?0                  	;1
776  314   GOTO/253                  ?0        ?781                 ?566                	;0
777  316   ASSIGN/38                 ?338      16?32                567:''              	;0	<<773
778  317   NOP/0                     ?0        ?0                   ?0                  	;1
779  317   NOP/0                     ?0        ?0                   ?0                  	;1
780  317   GOTO/253                  ?0        ?810                 ?568                	;0
781  319   NOP/0                     ?0        ?0                   ?0                  	;1
782  319   NOP/0                     ?0        ?0                   ?0                  	;1
783  319   GOTO/253                  ?0        ?784                 ?569                	;0
784  321   FETCH_DIM_R/81            $407=     16?6                 570:'username'      	;0
785  321   ROPE_INIT/54              #412=     ?0                   571:'series/'       	;8
786  321   ROPE_ADD/55               #412=     #412                 $407                	;1
787  321   FETCH_DIM_R/81            $408=     16?6                 572:'password'      	;0
788  321   ROPE_ADD/55               #412=     #412                 573:'/'             	;2
789  321   ROPE_ADD/55               #412=     #412                 $408                	;3
790  321   FETCH_DIM_R/81            $409=     16?34                574:'id'            	;0
791  321   ROPE_ADD/55               #412=     #412                 575:'/'             	;4
792  321   ROPE_ADD/55               #412=     #412                 $409                	;5
793  321   FETCH_DIM_R/81            $410=     16?34                576:'target_container'	;0
794  321   ROPE_ADD/55               #412=     #412                 577:'/'             	;6
795  321   ROPE_END/56               #411=     #412                 $410                	;7
796  321   ASSIGN/38                 ?348      16?33                #411                	;0
797  322   INIT_STATIC_METHOD_CALL/113 ?0        578:'Xui\\Functions' 580:'encrypt'       	;3
798  322   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
799  322   FETCH_STATIC_PROP_FUNC_ARG/177 $417=     582:'rSettings'      583:'XUI'           	;2
800  322   FETCH_DIM_FUNC_ARG/93     $418=     $417                 585:'live_streaming_pass'	;2
801  322   SEND_VAR_EX/66            ?96       $418                 ?2                  	;0
802  322   FETCH_CONSTANT/99         #419=     ?0                   586:'OPENSSL_EXTRA' 	;16
803  322   SEND_VAL_EX/116           ?112      #419                 ?3                  	;0
804  322   DO_FCALL/60               $420=     ?0                   ?0                  	;0
805  322   ASSIGN/38                 ?353      16?5                 $420                	;0
806  323   NOP/0                     ?0        ?0                   ?0                  	;0
807  323   FAST_CONCAT/53            #422=     589:'play/'          16?5                	;0
808  323   CONCAT/8                  #423=     16?35                #422                	;0
809  323   ASSIGN/38                 ?356      16?32                #423                	;0
810  325   ISSET_ISEMPTY_DIM_OBJ/115 #425=     16?34                590:'movie_properties'	;16777216
811  325   BOOL_NOT/13               #426=     #425                 ?0                  	;0
812  325   JMPZ/43                   ?0        #426                 ?820                	;0	>>820
813  325   INIT_FCALL_BY_NAME/59     ?0        ?0                   591:'json_decode'   	;2
814  325   FETCH_DIM_FUNC_ARG/93     $427=     16?34                593:'movie_properties'	;1
815  325   SEND_VAR_EX/66            ?80       $427                 ?1                  	;0
816  325   SEND_VAL_EX/116           ?96       594:true             ?2                  	;0
817  325   DO_FCALL_BY_NAME/131      $428=     ?0                   ?0                  	;0
818  325   QM_ASSIGN/22              #429=     $428                 ?0                  	;0
819  325   JMP/42                    ?0        ?821                 ?0                  	;0	>>821
820  325   QM_ASSIGN/22              #429=     595:''               ?0                  	;0	<<812
821  325   ASSIGN/38                 ?362      16?36                #429                	;0	<<819
822  326   NOP/0                     ?0        ?0                   ?0                  	;1
823  326   NOP/0                     ?0        ?0                   ?0                  	;1
824  326   GOTO/253                  ?0        ?858                 ?596                	;0
825  328   INIT_FCALL_BY_NAME/59     ?0        ?0                   597:'is_array'      	;1
826  328   FETCH_DIM_FUNC_ARG/93     $431=     16?36                599:'subtitle'      	;1
827  328   SEND_VAR_EX/66            ?80       $431                 ?1                  	;0
828  328   DO_FCALL_BY_NAME/131      $432=     ?0                   ?0                  	;0
829  328   BOOL_NOT/13               #433=     $432                 ?0                  	;0
830  328   JMPZ/43                   ?0        #433                 ?834                	;0	>>834
831  329   NOP/0                     ?0        ?0                   ?0                  	;1
832  329   NOP/0                     ?0        ?0                   ?0                  	;1
833  329   GOTO/253                  ?0        ?855                 ?600                	;0
834  331   ASSIGN/38                 ?366      16?25                601:0               	;0	<<830
835  332   FETCH_DIM_R/81            $435=     16?36                602:'subtitle'      	;0
836  332   FE_RESET_R/77             $436=     $435                 ?854                	;0
837  332   FE_FETCH_R/78             ?0        $436                 16?37               	;854	>>854	<<853
838  333   INIT_ARRAY/71             #438=     16?25                603:'index'         	;14
839  333   FETCH_DIM_R/81            $439=     16?37                604:'tags'          	;0
840  333   FETCH_DIM_R/81            $440=     $439                 605:'language'      	;0
841  333   JMP_SET/152               #441=     $440                 ?843                	;0
842  333   QM_ASSIGN/22              #441=     606:NULL             ?0                  	;0
843  333   ADD_ARRAY_ELEMENT/72      #438=     #441                 607:'language'      	;0
844  333   FETCH_DIM_R/81            $442=     16?37                608:'tags'          	;0
845  333   FETCH_DIM_R/81            $443=     $442                 609:'title'         	;0
846  333   JMP_SET/152               #444=     $443                 ?848                	;0
847  333   QM_ASSIGN/22              #444=     610:NULL             ?0                  	;0
848  333   ADD_ARRAY_ELEMENT/72      #438=     #444                 611:'title'         	;0
849  333   ASSIGN_DIM/147            ?369      16?38                ?0                  	;0
850  333   OP_DATA/137               ?0        #438                 ?0                  	;0
851  334   POST_INC/36               #445=     16?25                ?0                  	;0
852  334   FREE/70                   ?0        #445                 ?0                  	;0
853  335   JMP/42                    ?0        ?837                 ?0                  	;0	>>837
854  335   FE_FREE/127               ?0        $436                 ?0                  	;0	<<836
855  339   NOP/0                     ?0        ?0                   ?0                  	;1
856  339   NOP/0                     ?0        ?0                   ?0                  	;1
857  339   GOTO/253                  ?0        ?881                 ?612                	;0
858  341   INIT_STATIC_METHOD_CALL/113 ?0        614:'XUI'            616:'Fca722697178454B'	;1
859  341   FETCH_DIM_FUNC_ARG/93     $447=     16?36                618:'cover_big'     	;1
860  341   SEND_VAR_EX/66            ?80       $447                 ?1                  	;0
861  341   DO_FCALL/60               $448=     ?0                   ?0                  	;0
862  341   ASSIGN_DIM/147            ?378      16?36                613:'cover_big'     	;0
863  341   OP_DATA/137               ?0        $448                 ?0                  	;0
864  342   INIT_STATIC_METHOD_CALL/113 ?0        620:'XUI'            622:'FCa722697178454B'	;1
865  342   FETCH_DIM_FUNC_ARG/93     $450=     16?36                624:'movie_image'   	;1
866  342   SEND_VAR_EX/66            ?80       $450                 ?1                  	;0
867  342   DO_FCALL/60               $451=     ?0                   ?0                  	;0
868  342   ASSIGN_DIM/147            ?381      16?36                619:'movie_image'   	;0
869  342   OP_DATA/137               ?0        $451                 ?0                  	;0
870  343   FETCH_DIM_R/81            $452=     16?36                625:'cover_big'     	;0
871  343   JMPZ/43                   ?0        $452                 ?875                	;0	>>875
872  344   NOP/0                     ?0        ?0                   ?0                  	;1
873  344   NOP/0                     ?0        ?0                   ?0                  	;1
874  344   GOTO/253                  ?0        ?878                 ?626                	;0
875  346   FETCH_DIM_R/81            $454=     16?36                628:'movie_image'   	;0	<<871
876  346   ASSIGN_DIM/147            ?385      16?36                627:'cover_big'     	;0
877  346   OP_DATA/137               ?0        $454                 ?0                  	;0
878  348   NOP/0                     ?0        ?0                   ?0                  	;1
879  348   NOP/0                     ?0        ?0                   ?0                  	;1
880  348   GOTO/253                  ?0        ?921                 ?629                	;0
881  350   FE_RESET_R/77             $455=     630:array (
  0 => 'audio',
  1 => 'video',
  2 => 'subtitle',
) ?892                	;0
882  350   FE_FETCH_R/78             ?0        $455                 16?39               	;892	>>892	<<891
883  351   ISSET_ISEMPTY_DIM_OBJ/115 #456=     16?36                16?39               	;33554432
884  351   BOOL_NOT/13               #457=     #456                 ?0                  	;0
885  351   JMPZ/43                   ?0        #457                 ?890                	;0	>>890
886  352   NOP/0                     ?0        ?0                   ?0                  	;1
887  352   NOP/0                     ?0        ?0                   ?0                  	;1
888  352   NOP/0                     ?0        ?0                   ?0                  	;1
889  352   GOTO/253                  ?0        ?891                 ?631                	;0
890  354   UNSET_DIM/75              ?0        16?36                16?39               	;0	<<885
891  356   JMP/42                    ?0        ?882                 ?0                  	;0	>>882
892  356   FE_FREE/127               ?0        $455                 ?0                  	;0	<<881
893  359   FETCH_DIM_R/81            $461=     16?31                633:'stream_id'     	;0
894  359   INIT_ARRAY/71             #462=     $461                 634:'id'            	;42
895  359   FETCH_DIM_R/81            $463=     16?31                635:'episode_num'   	;0
896  359   ADD_ARRAY_ELEMENT/72      #462=     $463                 636:'episode_num'   	;0
897  359   FETCH_DIM_R/81            $464=     16?34                637:'stream_display_name'	;0
898  359   ADD_ARRAY_ELEMENT/72      #462=     $464                 638:'title'         	;0
899  359   FETCH_DIM_R/81            $465=     16?34                639:'target_container'	;0
900  359   ADD_ARRAY_ELEMENT/72      #462=     $465                 640:'container_extension'	;0
901  359   ADD_ARRAY_ELEMENT/72      #462=     16?36                641:'info'          	;0
902  359   ADD_ARRAY_ELEMENT/72      #462=     16?38                642:'subtitles'     	;0
903  359   INIT_FCALL_BY_NAME/59     ?0        ?0                   643:'strval'        	;1
904  359   FETCH_DIM_FUNC_ARG/93     $466=     16?34                645:'custom_sid'    	;1
905  359   SEND_VAR_EX/66            ?80       $466                 ?1                  	;0
906  359   DO_FCALL_BY_NAME/131      $467=     ?0                   ?0                  	;0
907  359   ADD_ARRAY_ELEMENT/72      #462=     $467                 646:'custom_sid'    	;0
908  359   FETCH_DIM_R/81            $468=     16?34                647:'added'         	;0
909  359   JMP_SET/152               #469=     $468                 ?911                	;0
910  359   QM_ASSIGN/22              #469=     648:''               ?0                  	;0
911  359   ADD_ARRAY_ELEMENT/72      #462=     #469                 649:'added'         	;0
912  359   ADD_ARRAY_ELEMENT/72      #462=     16?28                650:'season'        	;0
913  359   ADD_ARRAY_ELEMENT/72      #462=     16?32                651:'direct_source' 	;0
914  359   FETCH_DIM_W/84            $458=     16?7                 632:'episodes'      	;0
915  359   FETCH_DIM_W/84            $459=     $458                 16?28               	;0
916  359   ASSIGN_DIM/147            ?392      $459                 ?4                  	;0
917  359   OP_DATA/137               ?0        #462                 ?0                  	;0
918  361   NOP/0                     ?0        ?0                   ?0                  	;1
919  361   NOP/0                     ?0        ?0                   ?0                  	;1
920  361   GOTO/253                  ?0        ?991                 ?652                	;0
921  363   INIT_FCALL_BY_NAME/59     ?0        ?0                   653:'count'         	;1
922  363   FETCH_DIM_FUNC_ARG/93     $470=     16?36                655:'backdrop_path' 	;1
923  363   SEND_VAR_EX/66            ?80       $470                 ?1                  	;0
924  363   DO_FCALL_BY_NAME/131      $471=     ?0                   ?0                  	;0
925  363   IS_SMALLER/19             #472=     656:0                $471                	;0
926  363   BOOL_NOT/13               #473=     #472                 ?0                  	;0
927  363   JMPZ/43                   ?0        #473                 ?931                	;0	>>931
928  364   NOP/0                     ?0        ?0                   ?0                  	;1
929  364   NOP/0                     ?0        ?0                   ?0                  	;1
930  364   GOTO/253                  ?0        ?960                 ?657                	;0
931  366   INIT_FCALL_BY_NAME/59     ?0        ?0                   658:'range'         	;2	<<927
932  366   SEND_VAL_EX/116           ?80       660:0                ?1                  	;0
933  366   INIT_FCALL_BY_NAME/59     ?0        ?0                   661:'count'         	;1
934  366   FETCH_DIM_FUNC_ARG/93     $474=     16?36                663:'backdrop_path' 	;1
935  366   SEND_VAR_EX/66            ?80       $474                 ?1                  	;0
936  366   DO_FCALL_BY_NAME/131      $475=     ?0                   ?0                  	;0
937  366   SUB/2                     #476=     $475                 664:1               	;0
938  366   SEND_VAL_EX/116           ?96       #476                 ?2                  	;0
939  366   DO_FCALL_BY_NAME/131      $477=     ?0                   ?0                  	;0
940  366   FE_RESET_R/77             $478=     $477                 ?959                	;0
941  366   FE_FETCH_R/78             ?0        $478                 16?25               	;959	>>959	<<958
942  367   FETCH_DIM_R/81            $479=     16?36                665:'backdrop_path' 	;0
943  367   FETCH_DIM_R/81            $480=     $479                 16?25               	;0
944  367   BOOL_NOT/13               #481=     $480                 ?0                  	;0
945  367   JMPZ/43                   ?0        #481                 ?950                	;0	>>950
946  368   NOP/0                     ?0        ?0                   ?0                  	;1
947  368   NOP/0                     ?0        ?0                   ?0                  	;1
948  368   NOP/0                     ?0        ?0                   ?0                  	;1
949  368   GOTO/253                  ?0        ?958                 ?666                	;0
950  370   INIT_STATIC_METHOD_CALL/113 ?0        668:'XUI'            670:'fca722697178454B'	;1	<<945
951  370   FETCH_DIM_FUNC_ARG/93     $484=     16?36                672:'backdrop_path' 	;1
952  370   FETCH_DIM_FUNC_ARG/93     $485=     $484                 16?25               	;1
953  370   SEND_VAR_EX/66            ?80       $485                 ?1                  	;0
954  370   DO_FCALL/60               $486=     ?0                   ?0                  	;0
955  370   FETCH_DIM_W/84            $482=     16?36                667:'backdrop_path' 	;0
956  370   ASSIGN_DIM/147            ?415      $482                 16?25               	;0
957  370   OP_DATA/137               ?0        $486                 ?0                  	;0
958  372   JMP/42                    ?0        ?941                 ?0                  	;0	>>941
959  372   FE_FREE/127               ?0        $478                 ?0                  	;0	<<940
960  376   ASSIGN/38                 ?419      16?38                673:array (
)       	;0
961  377   NOP/0                     ?0        ?0                   ?0                  	;1
962  377   NOP/0                     ?0        ?0                   ?0                  	;1
963  377   GOTO/253                  ?0        ?825                 ?674                	;0
964  379   FETCH_STATIC_PROP_R/173   $488=     675:'rCached'        676:'XUI'           	;0
965  379   JMPZ/43                   ?0        $488                 ?969                	;0	>>969
966  380   NOP/0                     ?0        ?0                   ?0                  	;1
967  380   NOP/0                     ?0        ?0                   ?0                  	;1
968  380   GOTO/253                  ?0        ?973                 ?678                	;0
969  382   ASSIGN/38                 ?421      16?34                16?31               	;0	<<965
970  383   NOP/0                     ?0        ?0                   ?0                  	;1
971  383   NOP/0                     ?0        ?0                   ?0                  	;1
972  383   GOTO/253                  ?0        ?771                 ?679                	;0
973  385   INIT_FCALL_BY_NAME/59     ?0        ?0                   680:'igbinary_unserialize'	;1
974  385   INIT_FCALL_BY_NAME/59     ?0        ?0                   682:'file_get_contents'	;1
975  385   FETCH_CONSTANT/99         #490=     ?0                   684:'STREAMS_TMP_PATH'	;16
976  385   CONCAT/8                  #491=     #490                 687:'stream_'       	;0
977  385   INIT_FCALL_BY_NAME/59     ?0        ?0                   688:'intval'        	;1
978  385   FETCH_DIM_FUNC_ARG/93     $492=     16?31                690:'stream_id'     	;1
979  385   SEND_VAR_EX/66            ?80       $492                 ?1                  	;0
980  385   DO_FCALL_BY_NAME/131      $493=     ?0                   ?0                  	;0
981  385   CONCAT/8                  #494=     #491                 $493                	;0
982  385   SEND_VAL_EX/116           ?80       #494                 ?1                  	;0
983  385   DO_FCALL_BY_NAME/131      $495=     ?0                   ?0                  	;0
984  385   SEND_VAR_NO_REF_EX/50     ?80       $495                 ?1                  	;0
985  385   DO_FCALL_BY_NAME/131      $496=     ?0                   ?0                  	;0
986  385   FETCH_DIM_R/81            $497=     $496                 691:'info'          	;0
987  385   ASSIGN/38                 ?430      16?34                $497                	;0
988  386   NOP/0                     ?0        ?0                   ?0                  	;1
989  386   NOP/0                     ?0        ?0                   ?0                  	;1
990  386   GOTO/253                  ?0        ?771                 ?692                	;0
991  387   JMP/42                    ?0        ?767                 ?0                  	;0	>>767
992  387   FE_FREE/127               ?0        $403                 ?0                  	;0	<<766
993  390   JMP/42                    ?0        ?763                 ?0                  	;0	>>763
994  390   FE_FREE/127               ?0        $399                 ?0                  	;0	<<762
995  393   GOTO/253                  ?0        ?3630                ?693                	;0
996  394   GOTO/253                  ?0        ?1023                ?694                	;0
997  396   FETCH_STATIC_PROP_R/173   $499=     695:'db'             696:'XUI'           	;0
998  396   INIT_METHOD_CALL/112      ?0        $499                 698:'get_row'       	;0
999  396   DO_FCALL/60               $500=     ?0                   ?0                  	;0
1000 396   ASSIGN/38                 ?433      16?26                $500                	;0
1001 397   GOTO/253                  ?0        ?720                 ?700                	;0
1002 399   INIT_FCALL_BY_NAME/59     ?0        ?0                   701:'igbinary_unserialize'	;1
1003 399   INIT_FCALL_BY_NAME/59     ?0        ?0                   703:'file_get_contents'	;1
1004 399   FETCH_CONSTANT/99         #502=     ?0                   705:'SERIES_TMP_PATH'	;16
1005 399   CONCAT/8                  #503=     #502                 708:'series_'       	;0
1006 399   CONCAT/8                  #504=     #503                 16?27               	;0
1007 399   SEND_VAL_EX/116           ?80       #504                 ?1                  	;0
1008 399   DO_FCALL_BY_NAME/131      $505=     ?0                   ?0                  	;0
1009 399   SEND_VAR_NO_REF_EX/50     ?80       $505                 ?1                  	;0
1010 399   DO_FCALL_BY_NAME/131      $506=     ?0                   ?0                  	;0
1011 399   ASSIGN/38                 ?439      16?26                $506                	;0
1012 400   INIT_FCALL_BY_NAME/59     ?0        ?0                   709:'igbinary_unserialize'	;1
1013 400   INIT_FCALL_BY_NAME/59     ?0        ?0                   711:'file_get_contents'	;1
1014 400   FETCH_CONSTANT/99         #508=     ?0                   713:'SERIES_TMP_PATH'	;16
1015 400   CONCAT/8                  #509=     #508                 716:'episodes_'     	;0
1016 400   CONCAT/8                  #510=     #509                 16?27               	;0
1017 400   SEND_VAL_EX/116           ?80       #510                 ?1                  	;0
1018 400   DO_FCALL_BY_NAME/131      $511=     ?0                   ?0                  	;0
1019 400   SEND_VAR_NO_REF_EX/50     ?80       $511                 ?1                  	;0
1020 400   DO_FCALL_BY_NAME/131      $512=     ?0                   ?0                  	;0
1021 400   ASSIGN/38                 ?445      16?20                $512                	;0
1022 401   GOTO/253                  ?0        ?720                 ?717                	;0
1023 404   GOTO/253                  ?0        ?1037                ?718                	;0	<<256
1024 406   GOTO/253                  ?0        ?1365                ?719                	;0
1025 408   FETCH_STATIC_PROP_R/173   $514=     720:'rSettings'      721:'XUI'           	;0
1026 408   FETCH_DIM_R/81            $515=     $514                 723:'vod_sort_newest'	;0
1027 408   BOOL_NOT/13               #516=     $515                 ?0                  	;0
1028 408   JMPZ/43                   ?0        #516                 ?1030               	;0	>>1030
1029 409   GOTO/253                  ?0        ?1036                ?724                	;0
1030 411   INIT_STATIC_METHOD_CALL/113 ?0        726:'XUI'            728:'sortSeries'    	;1	<<1028
1031 411   FETCH_DIM_FUNC_ARG/93     $518=     16?6                 730:'series_ids'    	;1
1032 411   SEND_VAR_EX/66            ?80       $518                 ?1                  	;0
1033 411   DO_FCALL/60               $519=     ?0                   ?0                  	;0
1034 411   ASSIGN_DIM/147            ?449      16?6                 725:'series_ids'    	;0
1035 411   OP_DATA/137               ?0        $519                 ?0                  	;0
1036 413   GOTO/253                  ?0        ?1223                ?731                	;0
1037 415   FETCH_STATIC_PROP_IS/176  $520=     732:'rRequest'       733:'XUI'           	;0
1038 415   ISSET_ISEMPTY_DIM_OBJ/115 #521=     $520                 735:'category_id'   	;16777216
1039 415   JMPZ/43                   ?0        #521                 ?1042               	;0	>>1042
1040 415   QM_ASSIGN/22              #522=     736:NULL             ?0                  	;0
1041 415   JMP/42                    ?0        ?1048                ?0                  	;0	>>1048
1042 415   INIT_FCALL_BY_NAME/59     ?0        ?0                   737:'intval'        	;1	<<1039
1043 415   FETCH_STATIC_PROP_FUNC_ARG/177 $523=     739:'rRequest'       740:'XUI'           	;1
1044 415   FETCH_DIM_FUNC_ARG/93     $524=     $523                 742:'category_id'   	;1
1045 415   SEND_VAR_EX/66            ?80       $524                 ?1                  	;0
1046 415   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
1047 415   QM_ASSIGN/22              #522=     $525                 ?0                  	;0
1048 415   ASSIGN/38                 ?458      16?40                #522                	;0	<<1041
1049 416   ASSIGN/38                 ?459      16?41                743:0               	;0
1050 417   INIT_FCALL_BY_NAME/59     ?0        ?0                   744:'count'         	;1
1051 417   FETCH_DIM_FUNC_ARG/93     $528=     16?6                 746:'series_ids'    	;1
1052 417   SEND_VAR_EX/66            ?80       $528                 ?1                  	;0
1053 417   DO_FCALL_BY_NAME/131      $529=     ?0                   ?0                  	;0
1054 417   IS_SMALLER/19             #530=     747:0                $529                	;0
1055 417   BOOL_NOT/13               #531=     #530                 ?0                  	;0
1056 417   JMPZ/43                   ?0        #531                 ?1058               	;0	>>1058
1057 418   GOTO/253                  ?0        ?1365                ?748                	;0
1058 420   FETCH_STATIC_PROP_R/173   $532=     749:'rCached'        750:'XUI'           	;0	<<1056
1059 420   JMPZ/43                   ?0        $532                 ?1061               	;0	>>1061
1060 421   GOTO/253                  ?0        ?1025                ?752                	;0
1061 423   ISSET_ISEMPTY_DIM_OBJ/115 #533=     16?6                 753:'series_ids'    	;16777216	<<1059
1062 423   JMPZ/43                   ?0        #533                 ?1064               	;0	>>1064
1063 424   GOTO/253                  ?0        ?1222                ?754                	;0
1064 426   GOTO/253                  ?0        ?1367                ?755                	;0	<<1062
1065 429   FETCH_STATIC_PROP_R/173   $534=     756:'db'             757:'XUI'           	;0
1066 429   INIT_METHOD_CALL/112      ?0        $534                 759:'get_rows'      	;2
1067 429   SEND_VAL_EX/116           ?80       761:true             ?1                  	;0
1068 429   SEND_VAL_EX/116           ?96       762:'id'             ?2                  	;0
1069 429   DO_FCALL/60               $535=     ?0                   ?0                  	;0
1070 429   ASSIGN/38                 ?468      16?42                $535                	;0
1071 430   FE_RESET_R/77             $537=     16?42                ?1221               	;0
1072 430   FE_FETCH_R/78             ?0        $537                 16?43               	;1221	>>1221	<<1220
1073 431   NOP/0                     ?0        ?0                   ?0                  	;1
1074 431   GOTO/253                  ?0        ?1190                ?763                	;0
1075 433   INIT_FCALL_BY_NAME/59     ?0        ?0                   764:'range'         	;2
1076 433   SEND_VAL_EX/116           ?80       766:0                ?1                  	;0
1077 433   INIT_FCALL_BY_NAME/59     ?0        ?0                   767:'count'         	;1
1078 433   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
1079 433   DO_FCALL_BY_NAME/131      $538=     ?0                   ?0                  	;0
1080 433   SUB/2                     #539=     $538                 769:1               	;0
1081 433   SEND_VAL_EX/116           ?96       #539                 ?2                  	;0
1082 433   DO_FCALL_BY_NAME/131      $540=     ?0                   ?0                  	;0
1083 433   FE_RESET_R/77             $541=     $540                 ?1092               	;0
1084 433   FE_FETCH_R/78             ?0        $541                 16?25               	;1092	>>1092	<<1091
1085 434   INIT_STATIC_METHOD_CALL/113 ?0        770:'XUI'            772:'FCA722697178454B'	;1
1086 434   FETCH_DIM_FUNC_ARG/93     $543=     16?24                16?25               	;1
1087 434   SEND_VAR_EX/66            ?80       $543                 ?1                  	;0
1088 434   DO_FCALL/60               $544=     ?0                   ?0                  	;0
1089 434   ASSIGN_DIM/147            ?474      16?24                16?25               	;0
1090 434   OP_DATA/137               ?0        $544                 ?0                  	;0
1091 435   JMP/42                    ?0        ?1084                ?0                  	;0	>>1084
1092 435   FE_FREE/127               ?0        $541                 ?0                  	;0	<<1083
1093 439   INIT_FCALL_BY_NAME/59     ?0        ?0                   774:'json_decode'   	;2
1094 439   FETCH_DIM_FUNC_ARG/93     $545=     16?43                776:'category_id'   	;1
1095 439   SEND_VAR_EX/66            ?80       $545                 ?1                  	;0
1096 439   SEND_VAL_EX/116           ?96       777:true             ?2                  	;0
1097 439   DO_FCALL_BY_NAME/131      $546=     ?0                   ?0                  	;0
1098 439   ASSIGN/38                 ?479      16?44                $546                	;0
1099 440   FE_RESET_R/77             $548=     16?44                ?1187               	;0
1100 440   FE_FETCH_R/78             ?0        $548                 16?45               	;1187	>>1187	<<1186
1101 441   BOOL_NOT/13               #549=     16?40                ?0                  	;0
1102 441   JMPNZ_EX/47               #549=     #549                 ?1105               	;0	>>1105
1103 441   IS_EQUAL/17               #550=     16?40                16?45               	;0
1104 441   BOOL/52                   #549=     #550                 ?0                  	;0
1105 441   BOOL_NOT/13               #551=     #549                 ?0                  	;0	<<1102
1106 441   JMPZ/43                   ?0        #551                 ?1110               	;0	>>1110
1107 442   NOP/0                     ?0        ?0                   ?0                  	;1
1108 442   NOP/0                     ?0        ?0                   ?0                  	;1
1109 442   GOTO/253                  ?0        ?1172                ?778                	;0
1110 444   PRE_INC/34                $553=     16?41                ?0                  	;0	<<1106
1111 444   INIT_ARRAY/71             #554=     $553                 779:'num'           	;86
1112 444   INIT_STATIC_METHOD_CALL/113 ?0        780:'XUI'            782:'CF5D4A2F3De8982c'	;2
1113 444   FETCH_DIM_FUNC_ARG/93     $555=     16?43                784:'title'         	;1
1114 444   SEND_VAR_EX/66            ?80       $555                 ?1                  	;0
1115 444   FETCH_DIM_FUNC_ARG/93     $556=     16?43                785:'year'          	;2
1116 444   SEND_VAR_EX/66            ?96       $556                 ?2                  	;0
1117 444   DO_FCALL/60               $557=     ?0                   ?0                  	;0
1118 444   ADD_ARRAY_ELEMENT/72      #554=     $557                 786:'name'          	;0
1119 444   FETCH_DIM_R/81            $558=     16?43                787:'title'         	;0
1120 444   ADD_ARRAY_ELEMENT/72      #554=     $558                 788:'title'         	;0
1121 444   FETCH_DIM_R/81            $559=     16?43                789:'year'          	;0
1122 444   ADD_ARRAY_ELEMENT/72      #554=     $559                 790:'year'          	;0
1123 444   ADD_ARRAY_ELEMENT/72      #554=     791:'series'         792:'stream_type'   	;0
1124 444   FETCH_DIM_R/81            $560=     16?43                793:'id'            	;0
1125 444   CAST/21                   #561=     $560                 ?0                  	;4
1126 444   ADD_ARRAY_ELEMENT/72      #554=     #561                 794:'series_id'     	;0
1127 444   INIT_STATIC_METHOD_CALL/113 ?0        795:'XUI'            797:'fcA722697178454b'	;1
1128 444   FETCH_DIM_FUNC_ARG/93     $562=     16?43                799:'cover'         	;1
1129 444   SEND_VAR_EX/66            ?80       $562                 ?1                  	;0
1130 444   DO_FCALL/60               $563=     ?0                   ?0                  	;0
1131 444   ADD_ARRAY_ELEMENT/72      #554=     $563                 800:'cover'         	;0
1132 444   FETCH_DIM_R/81            $564=     16?43                801:'plot'          	;0
1133 444   ADD_ARRAY_ELEMENT/72      #554=     $564                 802:'plot'          	;0
1134 444   FETCH_DIM_R/81            $565=     16?43                803:'cast'          	;0
1135 444   ADD_ARRAY_ELEMENT/72      #554=     $565                 804:'cast'          	;0
1136 444   FETCH_DIM_R/81            $566=     16?43                805:'director'      	;0
1137 444   ADD_ARRAY_ELEMENT/72      #554=     $566                 806:'director'      	;0
1138 444   FETCH_DIM_R/81            $567=     16?43                807:'genre'         	;0
1139 444   ADD_ARRAY_ELEMENT/72      #554=     $567                 808:'genre'         	;0
1140 444   FETCH_DIM_R/81            $568=     16?43                809:'release_date'  	;0
1141 444   ADD_ARRAY_ELEMENT/72      #554=     $568                 810:'release_date'  	;0
1142 444   FETCH_DIM_R/81            $569=     16?43                811:'release_date'  	;0
1143 444   ADD_ARRAY_ELEMENT/72      #554=     $569                 812:'releaseDate'   	;0
1144 444   FETCH_DIM_R/81            $570=     16?43                813:'last_modified' 	;0
1145 444   ADD_ARRAY_ELEMENT/72      #554=     $570                 814:'last_modified' 	;0
1146 444   INIT_FCALL_BY_NAME/59     ?0        ?0                   815:'number_format' 	;2
1147 444   FETCH_DIM_FUNC_ARG/93     $571=     16?43                817:'rating'        	;1
1148 444   SEND_VAR_EX/66            ?80       $571                 ?1                  	;0
1149 444   SEND_VAL_EX/116           ?96       818:0                ?2                  	;0
1150 444   DO_FCALL_BY_NAME/131      $572=     ?0                   ?0                  	;0
1151 444   ADD_ARRAY_ELEMENT/72      #554=     $572                 819:'rating'        	;0
1152 444   INIT_FCALL_BY_NAME/59     ?0        ?0                   820:'number_format' 	;2
1153 444   FETCH_DIM_R/81            $573=     16?43                822:'rating'        	;0
1154 444   MUL/3                     #574=     $573                 823:0.5             	;0
1155 444   SEND_VAL_EX/116           ?80       #574                 ?1                  	;0
1156 444   SEND_VAL_EX/116           ?96       824:1                ?2                  	;0
1157 444   DO_FCALL_BY_NAME/131      $575=     ?0                   ?0                  	;0
1158 444   ADD/1                     #576=     $575                 825:0               	;0
1159 444   ADD_ARRAY_ELEMENT/72      #554=     #576                 826:'rating_5based' 	;0
1160 444   ADD_ARRAY_ELEMENT/72      #554=     16?24                827:'backdrop_path' 	;0
1161 444   FETCH_DIM_R/81            $577=     16?43                828:'youtube_trailer'	;0
1162 444   ADD_ARRAY_ELEMENT/72      #554=     $577                 829:'youtube_trailer'	;0
1163 444   FETCH_DIM_R/81            $578=     16?43                830:'episode_run_time'	;0
1164 444   ADD_ARRAY_ELEMENT/72      #554=     $578                 831:'episode_run_time'	;0
1165 444   INIT_FCALL_BY_NAME/59     ?0        ?0                   832:'strval'        	;1
1166 444   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
1167 444   DO_FCALL_BY_NAME/131      $579=     ?0                   ?0                  	;0
1168 444   ADD_ARRAY_ELEMENT/72      #554=     $579                 834:'category_id'   	;0
1169 444   ADD_ARRAY_ELEMENT/72      #554=     16?44                835:'category_ids'  	;0
1170 444   ASSIGN_DIM/147            ?484      16?7                 ?4397406            	;0
1171 444   OP_DATA/137               ?0        #554                 ?0                  	;0
1172 446   BOOL_NOT/13               #580=     16?40                ?0                  	;0
1173 446   JMPZ_EX/46                #580=     #580                 ?1178               	;0	>>1178
1174 446   FETCH_STATIC_PROP_R/173   $581=     836:'rSettings'      837:'XUI'           	;0
1175 446   FETCH_DIM_R/81            $582=     $581                 839:'show_category_duplicates'	;0
1176 446   BOOL_NOT/13               #583=     $582                 ?0                  	;0
1177 446   BOOL/52                   #580=     #583                 ?0                  	;0
1178 446   BOOL_NOT/13               #584=     #580                 ?0                  	;0	<<1173
1179 446   JMPZ/43                   ?0        #584                 ?1183               	;0	>>1183
1180 447   NOP/0                     ?0        ?0                   ?0                  	;1
1181 447   NOP/0                     ?0        ?0                   ?0                  	;1
1182 447   GOTO/253                  ?0        ?1186                ?840                	;0
1183 449   FE_FREE/127               ?0        $548                 ?29                 	;1	<<1179
1184 449   NOP/0                     ?0        ?0                   ?0                  	;1
1185 449   GOTO/253                  ?0        ?1218                ?841                	;0
1186 451   JMP/42                    ?0        ?1100                ?0                  	;0	>>1100
1187 451   FE_FREE/127               ?0        $548                 ?0                  	;0	<<1099
1188 453   NOP/0                     ?0        ?0                   ?0                  	;1
1189 453   GOTO/253                  ?0        ?1218                ?842                	;0
1190 455   ISSET_ISEMPTY_DIM_OBJ/115 #585=     16?43                843:'last_modified_stream'	;33554432
1191 455   JMPZ_EX/46                #585=     #585                 ?1195               	;0	>>1195
1192 455   ISSET_ISEMPTY_DIM_OBJ/115 #586=     16?43                844:'last_modified_stream'	;16777216
1193 455   BOOL_NOT/13               #587=     #586                 ?0                  	;0
1194 455   BOOL/52                   #585=     #587                 ?0                  	;0
1195 455   BOOL_NOT/13               #588=     #585                 ?0                  	;0	<<1191
1196 455   JMPZ/43                   ?0        #588                 ?1199               	;0	>>1199
1197 456   NOP/0                     ?0        ?0                   ?0                  	;1
1198 456   GOTO/253                  ?0        ?1202                ?845                	;0
1199 458   FETCH_DIM_R/81            $590=     16?43                847:'last_modified_stream'	;0	<<1196
1200 458   ASSIGN_DIM/147            ?521      16?43                846:'last_modified' 	;0
1201 458   OP_DATA/137               ?0        $590                 ?0                  	;0
1202 460   INIT_FCALL_BY_NAME/59     ?0        ?0                   848:'json_decode'   	;2
1203 460   FETCH_DIM_FUNC_ARG/93     $591=     16?43                850:'backdrop_path' 	;1
1204 460   SEND_VAR_EX/66            ?80       $591                 ?1                  	;0
1205 460   SEND_VAL_EX/116           ?96       851:true             ?2                  	;0
1206 460   DO_FCALL_BY_NAME/131      $592=     ?0                   ?0                  	;0
1207 460   ASSIGN/38                 ?525      16?24                $592                	;0
1208 461   INIT_FCALL_BY_NAME/59     ?0        ?0                   852:'count'         	;1
1209 461   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
1210 461   DO_FCALL_BY_NAME/131      $594=     ?0                   ?0                  	;0
1211 461   IS_SMALLER/19             #595=     854:0                $594                	;0
1212 461   BOOL_NOT/13               #596=     #595                 ?0                  	;0
1213 461   JMPZ/43                   ?0        #596                 ?1216               	;0	>>1216
1214 462   NOP/0                     ?0        ?0                   ?0                  	;1
1215 462   GOTO/253                  ?0        ?1093                ?855                	;0
1216 464   NOP/0                     ?0        ?0                   ?0                  	;1	<<1213
1217 464   GOTO/253                  ?0        ?1075                ?856                	;0
1218 468   NOP/0                     ?0        ?0                   ?0                  	;1
1219 468   GOTO/253                  ?0        ?1220                ?857                	;0
1220 469   JMP/42                    ?0        ?1072                ?0                  	;0	>>1072
1221 469   FE_FREE/127               ?0        $537                 ?0                  	;0	<<1071
1222 473   GOTO/253                  ?0        ?1024                ?858                	;0
1223 475   FETCH_DIM_R/81            $597=     16?6                 859:'series_ids'    	;0
1224 475   FE_RESET_R/77             $598=     $597                 ?1364               	;0
1225 475   FE_FETCH_R/78             ?0        $598                 16?27               	;1364	>>1364	<<1363
1226 476   INIT_FCALL_BY_NAME/59     ?0        ?0                   860:'igbinary_unserialize'	;1
1227 476   INIT_FCALL_BY_NAME/59     ?0        ?0                   862:'file_get_contents'	;1
1228 476   FETCH_CONSTANT/99         #599=     ?0                   864:'SERIES_TMP_PATH'	;16
1229 476   CONCAT/8                  #600=     #599                 867:'series_'       	;0
1230 476   CONCAT/8                  #601=     #600                 16?27               	;0
1231 476   SEND_VAL_EX/116           ?80       #601                 ?1                  	;0
1232 476   DO_FCALL_BY_NAME/131      $602=     ?0                   ?0                  	;0
1233 476   SEND_VAR_NO_REF_EX/50     ?80       $602                 ?1                  	;0
1234 476   DO_FCALL_BY_NAME/131      $603=     ?0                   ?0                  	;0
1235 476   ASSIGN/38                 ?536      16?43                $603                	;0
1236 477   INIT_FCALL_BY_NAME/59     ?0        ?0                   868:'json_decode'   	;2
1237 477   FETCH_DIM_FUNC_ARG/93     $605=     16?43                870:'backdrop_path' 	;1
1238 477   SEND_VAR_EX/66            ?80       $605                 ?1                  	;0
1239 477   SEND_VAL_EX/116           ?96       871:true             ?2                  	;0
1240 477   DO_FCALL_BY_NAME/131      $606=     ?0                   ?0                  	;0
1241 477   ASSIGN/38                 ?539      16?24                $606                	;0
1242 478   INIT_FCALL_BY_NAME/59     ?0        ?0                   872:'count'         	;1
1243 478   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
1244 478   DO_FCALL_BY_NAME/131      $608=     ?0                   ?0                  	;0
1245 478   IS_SMALLER/19             #609=     874:0                $608                	;0
1246 478   BOOL_NOT/13               #610=     #609                 ?0                  	;0
1247 478   JMPZ/43                   ?0        #610                 ?1250               	;0	>>1250
1248 479   NOP/0                     ?0        ?0                   ?0                  	;1
1249 479   GOTO/253                  ?0        ?1268                ?875                	;0
1250 481   INIT_FCALL_BY_NAME/59     ?0        ?0                   876:'range'         	;2	<<1247
1251 481   SEND_VAL_EX/116           ?80       878:0                ?1                  	;0
1252 481   INIT_FCALL_BY_NAME/59     ?0        ?0                   879:'count'         	;1
1253 481   SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
1254 481   DO_FCALL_BY_NAME/131      $611=     ?0                   ?0                  	;0
1255 481   SUB/2                     #612=     $611                 881:1               	;0
1256 481   SEND_VAL_EX/116           ?96       #612                 ?2                  	;0
1257 481   DO_FCALL_BY_NAME/131      $613=     ?0                   ?0                  	;0
1258 481   FE_RESET_R/77             $614=     $613                 ?1267               	;0
1259 481   FE_FETCH_R/78             ?0        $614                 16?25               	;1267	>>1267	<<1266
1260 482   INIT_STATIC_METHOD_CALL/113 ?0        882:'XUI'            884:'fca722697178454b'	;1
1261 482   FETCH_DIM_FUNC_ARG/93     $616=     16?24                16?25               	;1
1262 482   SEND_VAR_EX/66            ?80       $616                 ?1                  	;0
1263 482   DO_FCALL/60               $617=     ?0                   ?0                  	;0
1264 482   ASSIGN_DIM/147            ?547      16?24                16?25               	;0
1265 482   OP_DATA/137               ?0        $617                 ?0                  	;0
1266 483   JMP/42                    ?0        ?1259                ?0                  	;0	>>1259
1267 483   FE_FREE/127               ?0        $614                 ?0                  	;0	<<1258
1268 487   INIT_FCALL_BY_NAME/59     ?0        ?0                   886:'json_decode'   	;2
1269 487   FETCH_DIM_FUNC_ARG/93     $618=     16?43                888:'category_id'   	;1
1270 487   SEND_VAR_EX/66            ?80       $618                 ?1                  	;0
1271 487   SEND_VAL_EX/116           ?96       889:true             ?2                  	;0
1272 487   DO_FCALL_BY_NAME/131      $619=     ?0                   ?0                  	;0
1273 487   ASSIGN/38                 ?552      16?44                $619                	;0
1274 488   FE_RESET_R/77             $621=     16?44                ?1362               	;0
1275 488   FE_FETCH_R/78             ?0        $621                 16?45               	;1362	>>1362	<<1361
1276 489   BOOL_NOT/13               #622=     16?40                ?0                  	;0
1277 489   JMPNZ_EX/47               #622=     #622                 ?1280               	;0	>>1280
1278 489   IS_EQUAL/17               #623=     16?40                16?45               	;0
1279 489   BOOL/52                   #622=     #623                 ?0                  	;0
1280 489   BOOL_NOT/13               #624=     #622                 ?0                  	;0	<<1277
1281 489   JMPZ/43                   ?0        #624                 ?1285               	;0	>>1285
1282 490   NOP/0                     ?0        ?0                   ?0                  	;1
1283 490   NOP/0                     ?0        ?0                   ?0                  	;1
1284 490   GOTO/253                  ?0        ?1347                ?890                	;0
1285 492   PRE_INC/34                $626=     16?41                ?0                  	;0	<<1281
1286 492   INIT_ARRAY/71             #627=     $626                 891:'num'           	;86
1287 492   INIT_STATIC_METHOD_CALL/113 ?0        892:'XUI'            894:'cF5D4A2F3DE8982c'	;2
1288 492   FETCH_DIM_FUNC_ARG/93     $628=     16?43                896:'title'         	;1
1289 492   SEND_VAR_EX/66            ?80       $628                 ?1                  	;0
1290 492   FETCH_DIM_FUNC_ARG/93     $629=     16?43                897:'year'          	;2
1291 492   SEND_VAR_EX/66            ?96       $629                 ?2                  	;0
1292 492   DO_FCALL/60               $630=     ?0                   ?0                  	;0
1293 492   ADD_ARRAY_ELEMENT/72      #627=     $630                 898:'name'          	;0
1294 492   FETCH_DIM_R/81            $631=     16?43                899:'title'         	;0
1295 492   ADD_ARRAY_ELEMENT/72      #627=     $631                 900:'title'         	;0
1296 492   FETCH_DIM_R/81            $632=     16?43                901:'year'          	;0
1297 492   ADD_ARRAY_ELEMENT/72      #627=     $632                 902:'year'          	;0
1298 492   ADD_ARRAY_ELEMENT/72      #627=     903:'series'         904:'stream_type'   	;0
1299 492   FETCH_DIM_R/81            $633=     16?43                905:'id'            	;0
1300 492   CAST/21                   #634=     $633                 ?0                  	;4
1301 492   ADD_ARRAY_ELEMENT/72      #627=     #634                 906:'series_id'     	;0
1302 492   INIT_STATIC_METHOD_CALL/113 ?0        907:'XUI'            909:'fcA722697178454B'	;1
1303 492   FETCH_DIM_FUNC_ARG/93     $635=     16?43                911:'cover'         	;1
1304 492   SEND_VAR_EX/66            ?80       $635                 ?1                  	;0
1305 492   DO_FCALL/60               $636=     ?0                   ?0                  	;0
1306 492   ADD_ARRAY_ELEMENT/72      #627=     $636                 912:'cover'         	;0
1307 492   FETCH_DIM_R/81            $637=     16?43                913:'plot'          	;0
1308 492   ADD_ARRAY_ELEMENT/72      #627=     $637                 914:'plot'          	;0
1309 492   FETCH_DIM_R/81            $638=     16?43                915:'cast'          	;0
1310 492   ADD_ARRAY_ELEMENT/72      #627=     $638                 916:'cast'          	;0
1311 492   FETCH_DIM_R/81            $639=     16?43                917:'director'      	;0
1312 492   ADD_ARRAY_ELEMENT/72      #627=     $639                 918:'director'      	;0
1313 492   FETCH_DIM_R/81            $640=     16?43                919:'genre'         	;0
1314 492   ADD_ARRAY_ELEMENT/72      #627=     $640                 920:'genre'         	;0
1315 492   FETCH_DIM_R/81            $641=     16?43                921:'release_date'  	;0
1316 492   ADD_ARRAY_ELEMENT/72      #627=     $641                 922:'release_date'  	;0
1317 492   FETCH_DIM_R/81            $642=     16?43                923:'release_date'  	;0
1318 492   ADD_ARRAY_ELEMENT/72      #627=     $642                 924:'releaseDate'   	;0
1319 492   FETCH_DIM_R/81            $643=     16?43                925:'last_modified' 	;0
1320 492   ADD_ARRAY_ELEMENT/72      #627=     $643                 926:'last_modified' 	;0
1321 492   INIT_FCALL_BY_NAME/59     ?0        ?0                   927:'number_format' 	;2
1322 492   FETCH_DIM_FUNC_ARG/93     $644=     16?43                929:'rating'        	;1
1323 492   SEND_VAR_EX/66            ?80       $644                 ?1                  	;0
1324 492   SEND_VAL_EX/116           ?96       930:0                ?2                  	;0
1325 492   DO_FCALL_BY_NAME/131      $645=     ?0                   ?0                  	;0
1326 492   ADD_ARRAY_ELEMENT/72      #627=     $645                 931:'rating'        	;0
1327 492   INIT_FCALL_BY_NAME/59     ?0        ?0                   932:'number_format' 	;2
1328 492   FETCH_DIM_R/81            $646=     16?43                934:'rating'        	;0
1329 492   MUL/3                     #647=     $646                 935:0.5             	;0
1330 492   SEND_VAL_EX/116           ?80       #647                 ?1                  	;0
1331 492   SEND_VAL_EX/116           ?96       936:1                ?2                  	;0
1332 492   DO_FCALL_BY_NAME/131      $648=     ?0                   ?0                  	;0
1333 492   ADD/1                     #649=     $648                 937:0               	;0
1334 492   ADD_ARRAY_ELEMENT/72      #627=     #649                 938:'rating_5based' 	;0
1335 492   ADD_ARRAY_ELEMENT/72      #627=     16?24                939:'backdrop_path' 	;0
1336 492   FETCH_DIM_R/81            $650=     16?43                940:'youtube_trailer'	;0
1337 492   ADD_ARRAY_ELEMENT/72      #627=     $650                 941:'youtube_trailer'	;0
1338 492   FETCH_DIM_R/81            $651=     16?43                942:'episode_run_time'	;0
1339 492   ADD_ARRAY_ELEMENT/72      #627=     $651                 943:'episode_run_time'	;0
1340 492   INIT_FCALL_BY_NAME/59     ?0        ?0                   944:'strval'        	;1
1341 492   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
1342 492   DO_FCALL_BY_NAME/131      $652=     ?0                   ?0                  	;0
1343 492   ADD_ARRAY_ELEMENT/72      #627=     $652                 946:'category_id'   	;0
1344 492   ADD_ARRAY_ELEMENT/72      #627=     16?44                947:'category_ids'  	;0
1345 492   ASSIGN_DIM/147            ?557      16?7                 ?4397406            	;0
1346 492   OP_DATA/137               ?0        #627                 ?0                  	;0
1347 494   BOOL_NOT/13               #653=     16?40                ?0                  	;0
1348 494   JMPZ_EX/46                #653=     #653                 ?1353               	;0	>>1353
1349 494   FETCH_STATIC_PROP_R/173   $654=     948:'rSettings'      949:'XUI'           	;0
1350 494   FETCH_DIM_R/81            $655=     $654                 951:'show_category_duplicates'	;0
1351 494   BOOL_NOT/13               #656=     $655                 ?0                  	;0
1352 494   BOOL/52                   #653=     #656                 ?0                  	;0
1353 494   BOOL_NOT/13               #657=     #653                 ?0                  	;0	<<1348
1354 494   JMPZ/43                   ?0        #657                 ?1358               	;0	>>1358
1355 495   NOP/0                     ?0        ?0                   ?0                  	;1
1356 495   NOP/0                     ?0        ?0                   ?0                  	;1
1357 495   GOTO/253                  ?0        ?1361                ?952                	;0
1358 497   FE_FREE/127               ?0        $621                 ?33                 	;1	<<1354
1359 497   NOP/0                     ?0        ?0                   ?0                  	;1
1360 497   GOTO/253                  ?0        ?1363                ?953                	;0
1361 499   JMP/42                    ?0        ?1275                ?0                  	;0	>>1275
1362 499   FE_FREE/127               ?0        $621                 ?0                  	;0	<<1274
1363 502   JMP/42                    ?0        ?1225                ?0                  	;0	>>1225
1364 502   FE_FREE/127               ?0        $598                 ?0                  	;0	<<1224
1365 507   GOTO/253                  ?0        ?3630                ?954                	;0
1366 508   GOTO/253                  ?0        ?1410                ?955                	;0
1367 510   FETCH_STATIC_PROP_R/173   $658=     956:'rSettings'      957:'XUI'           	;0
1368 510   FETCH_DIM_R/81            $659=     $658                 959:'vod_sort_newest'	;0
1369 510   JMPZ/43                   ?0        $659                 ?1371               	;0	>>1371
1370 511   GOTO/253                  ?0        ?1394                ?960                	;0
1371 513   FETCH_STATIC_PROP_R/173   $660=     961:'db'             962:'XUI'           	;0	<<1369
1372 513   INIT_METHOD_CALL/112      ?0        $660                 964:'query'         	;1
1373 513   INIT_FCALL_BY_NAME/59     ?0        ?0                   966:'implode'       	;2
1374 513   SEND_VAL_EX/116           ?80       968:','              ?1                  	;0
1375 513   INIT_FCALL_BY_NAME/59     ?0        ?0                   969:'array_map'     	;2
1376 513   SEND_VAL_EX/116           ?80       971:'intval'         ?1                  	;0
1377 513   FETCH_DIM_FUNC_ARG/93     $661=     16?6                 972:'series_ids'    	;2
1378 513   SEND_VAR_EX/66            ?96       $661                 ?2                  	;0
1379 513   DO_FCALL_BY_NAME/131      $662=     ?0                   ?0                  	;0
1380 513   SEND_VAR_NO_REF_EX/50     ?96       $662                 ?2                  	;0
1381 513   DO_FCALL_BY_NAME/131      $663=     ?0                   ?0                  	;0
1382 513   CONCAT/8                  #664=     973:'SELECT * FROM `streams_series` WHERE `id` IN (' $663                	;0
1383 513   CONCAT/8                  #665=     #664                 974:') ORDER BY FIELD(`id`,'	;0
1384 513   INIT_FCALL_BY_NAME/59     ?0        ?0                   975:'implode'       	;2
1385 513   SEND_VAL_EX/116           ?80       977:','              ?1                  	;0
1386 513   FETCH_DIM_FUNC_ARG/93     $666=     16?6                 978:'series_ids'    	;2
1387 513   SEND_VAR_EX/66            ?96       $666                 ?2                  	;0
1388 513   DO_FCALL_BY_NAME/131      $667=     ?0                   ?0                  	;0
1389 513   CONCAT/8                  #668=     #665                 $667                	;0
1390 513   CONCAT/8                  #669=     #668                 979:') ASC;'        	;0
1391 513   SEND_VAL_EX/116           ?80       #669                 ?1                  	;0
1392 513   DO_FCALL/60               ?602      ?0                   ?0                  	;0
1393 514   GOTO/253                  ?0        ?1065                ?980                	;0
1394 516   FETCH_STATIC_PROP_R/173   $671=     981:'db'             982:'XUI'           	;0
1395 516   INIT_METHOD_CALL/112      ?0        $671                 984:'query'         	;1
1396 516   INIT_FCALL_BY_NAME/59     ?0        ?0                   986:'implode'       	;2
1397 516   SEND_VAL_EX/116           ?80       988:','              ?1                  	;0
1398 516   INIT_FCALL_BY_NAME/59     ?0        ?0                   989:'array_map'     	;2
1399 516   SEND_VAL_EX/116           ?80       991:'intval'         ?1                  	;0
1400 516   FETCH_DIM_FUNC_ARG/93     $672=     16?6                 992:'series_ids'    	;2
1401 516   SEND_VAR_EX/66            ?96       $672                 ?2                  	;0
1402 516   DO_FCALL_BY_NAME/131      $673=     ?0                   ?0                  	;0
1403 516   SEND_VAR_NO_REF_EX/50     ?96       $673                 ?2                  	;0
1404 516   DO_FCALL_BY_NAME/131      $674=     ?0                   ?0                  	;0
1405 516   CONCAT/8                  #675=     993:'SELECT *, (SELECT MAX(`streams`.`added`) FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) AS `last_modified_stream` FROM `streams_series` WHERE `id` IN (' $674                	;0
1406 516   CONCAT/8                  #676=     #675                 994:') ORDER BY `last_modified_stream` DESC, `last_modified` DESC;'	;0
1407 516   SEND_VAL_EX/116           ?80       #676                 ?1                  	;0
1408 516   DO_FCALL/60               ?609      ?0                   ?0                  	;0
1409 517   GOTO/253                  ?0        ?1065                ?995                	;0
1410 520   INIT_STATIC_METHOD_CALL/113 ?0        996:'XUI'            998:'C721Bd954A5F072f'	;1	<<258
1411 520   SEND_VAL_EX/116           ?80       1000:'movie'         ?1                  	;0
1412 520   DO_FCALL/60               $678=     ?0                   ?0                  	;0
1413 520   ASSIGN/38                 ?611      16?46                $678                	;0
1414 521   FE_RESET_R/77             $680=     16?46                ?1437               	;0
1415 521   FE_FETCH_R/78             ?0        $680                 16?47               	;1437	>>1437	<<1436
1416 522   INIT_FCALL_BY_NAME/59     ?0        ?0                   1001:'in_array'     	;2
1417 522   FETCH_DIM_FUNC_ARG/93     $681=     16?47                1003:'id'           	;1
1418 522   SEND_VAR_EX/66            ?80       $681                 ?1                  	;0
1419 522   FETCH_DIM_FUNC_ARG/93     $682=     16?6                 1004:'category_ids' 	;2
1420 522   SEND_VAR_EX/66            ?96       $682                 ?2                  	;0
1421 522   DO_FCALL_BY_NAME/131      $683=     ?0                   ?0                  	;0
1422 522   BOOL_NOT/13               #684=     $683                 ?0                  	;0
1423 522   JMPZ/43                   ?0        #684                 ?1426               	;0	>>1426
1424 523   NOP/0                     ?0        ?0                   ?0                  	;1
1425 523   GOTO/253                  ?0        ?1436                ?1005               	;0
1426 525   INIT_FCALL_BY_NAME/59     ?0        ?0                   1006:'strval'       	;1	<<1423
1427 525   FETCH_DIM_FUNC_ARG/93     $686=     16?47                1008:'id'           	;1
1428 525   SEND_VAR_EX/66            ?80       $686                 ?1                  	;0
1429 525   DO_FCALL_BY_NAME/131      $687=     ?0                   ?0                  	;0
1430 525   INIT_ARRAY/71             #688=     $687                 1009:'category_id'  	;14
1431 525   FETCH_DIM_R/81            $689=     16?47                1010:'category_name'	;0
1432 525   ADD_ARRAY_ELEMENT/72      #688=     $689                 1011:'category_name'	;0
1433 525   ADD_ARRAY_ELEMENT/72      #688=     1012:0               1013:'parent_id'    	;0
1434 525   ASSIGN_DIM/147            ?617      16?7                 ?4397406            	;0
1435 525   OP_DATA/137               ?0        #688                 ?0                  	;0
1436 527   JMP/42                    ?0        ?1415                ?0                  	;0	>>1415
1437 527   FE_FREE/127               ?0        $680                 ?0                  	;0	<<1414
1438 530   GOTO/253                  ?0        ?3630                ?1014               	;0
1439 532   INIT_STATIC_METHOD_CALL/113 ?0        1015:'XUI'           1017:'c721BD954A5f072f'	;1	<<260
1440 532   SEND_VAL_EX/116           ?80       1019:'series'        ?1                  	;0
1441 532   DO_FCALL/60               $690=     ?0                   ?0                  	;0
1442 532   ASSIGN/38                 ?623      16?46                $690                	;0
1443 533   FE_RESET_R/77             $692=     16?46                ?1466               	;0
1444 533   FE_FETCH_R/78             ?0        $692                 16?47               	;1466	>>1466	<<1465
1445 534   INIT_FCALL_BY_NAME/59     ?0        ?0                   1020:'in_array'     	;2
1446 534   FETCH_DIM_FUNC_ARG/93     $693=     16?47                1022:'id'           	;1
1447 534   SEND_VAR_EX/66            ?80       $693                 ?1                  	;0
1448 534   FETCH_DIM_FUNC_ARG/93     $694=     16?6                 1023:'category_ids' 	;2
1449 534   SEND_VAR_EX/66            ?96       $694                 ?2                  	;0
1450 534   DO_FCALL_BY_NAME/131      $695=     ?0                   ?0                  	;0
1451 534   BOOL_NOT/13               #696=     $695                 ?0                  	;0
1452 534   JMPZ/43                   ?0        #696                 ?1455               	;0	>>1455
1453 535   NOP/0                     ?0        ?0                   ?0                  	;1
1454 535   GOTO/253                  ?0        ?1465                ?1024               	;0
1455 537   INIT_FCALL_BY_NAME/59     ?0        ?0                   1025:'strval'       	;1	<<1452
1456 537   FETCH_DIM_FUNC_ARG/93     $698=     16?47                1027:'id'           	;1
1457 537   SEND_VAR_EX/66            ?80       $698                 ?1                  	;0
1458 537   DO_FCALL_BY_NAME/131      $699=     ?0                   ?0                  	;0
1459 537   INIT_ARRAY/71             #700=     $699                 1028:'category_id'  	;14
1460 537   FETCH_DIM_R/81            $701=     16?47                1029:'category_name'	;0
1461 537   ADD_ARRAY_ELEMENT/72      #700=     $701                 1030:'category_name'	;0
1462 537   ADD_ARRAY_ELEMENT/72      #700=     1031:0               1032:'parent_id'    	;0
1463 537   ASSIGN_DIM/147            ?629      16?7                 ?4397406            	;0
1464 537   OP_DATA/137               ?0        #700                 ?0                  	;0
1465 539   JMP/42                    ?0        ?1444                ?0                  	;0	>>1444
1466 539   FE_FREE/127               ?0        $692                 ?0                  	;0	<<1443
1467 542   GOTO/253                  ?0        ?3630                ?1033               	;0
1468 544   INIT_FCALL_BY_NAME/59     ?0        ?0                   1034:'array_merge'  	;2	<<262
1469 544   INIT_STATIC_METHOD_CALL/113 ?0        1036:'XUI'           1038:'c721Bd954a5F072F'	;1
1470 544   SEND_VAL_EX/116           ?80       1040:'live'          ?1                  	;0
1471 544   DO_FCALL/60               $702=     ?0                   ?0                  	;0
1472 544   SEND_VAR_NO_REF_EX/50     ?80       $702                 ?1                  	;0
1473 544   INIT_STATIC_METHOD_CALL/113 ?0        1041:'XUI'           1043:'C721BD954a5f072f'	;1
1474 544   SEND_VAL_EX/116           ?80       1045:'radio'         ?1                  	;0
1475 544   DO_FCALL/60               $703=     ?0                   ?0                  	;0
1476 544   SEND_VAR_NO_REF_EX/50     ?96       $703                 ?2                  	;0
1477 544   DO_FCALL_BY_NAME/131      $704=     ?0                   ?0                  	;0
1478 544   ASSIGN/38                 ?637      16?46                $704                	;0
1479 545   FE_RESET_R/77             $706=     16?46                ?1502               	;0
1480 545   FE_FETCH_R/78             ?0        $706                 16?47               	;1502	>>1502	<<1501
1481 546   INIT_FCALL_BY_NAME/59     ?0        ?0                   1046:'in_array'     	;2
1482 546   FETCH_DIM_FUNC_ARG/93     $707=     16?47                1048:'id'           	;1
1483 546   SEND_VAR_EX/66            ?80       $707                 ?1                  	;0
1484 546   FETCH_DIM_FUNC_ARG/93     $708=     16?6                 1049:'category_ids' 	;2
1485 546   SEND_VAR_EX/66            ?96       $708                 ?2                  	;0
1486 546   DO_FCALL_BY_NAME/131      $709=     ?0                   ?0                  	;0
1487 546   BOOL_NOT/13               #710=     $709                 ?0                  	;0
1488 546   JMPZ/43                   ?0        #710                 ?1491               	;0	>>1491
1489 547   NOP/0                     ?0        ?0                   ?0                  	;1
1490 547   GOTO/253                  ?0        ?1501                ?1050               	;0
1491 549   INIT_FCALL_BY_NAME/59     ?0        ?0                   1051:'strval'       	;1	<<1488
1492 549   FETCH_DIM_FUNC_ARG/93     $712=     16?47                1053:'id'           	;1
1493 549   SEND_VAR_EX/66            ?80       $712                 ?1                  	;0
1494 549   DO_FCALL_BY_NAME/131      $713=     ?0                   ?0                  	;0
1495 549   INIT_ARRAY/71             #714=     $713                 1054:'category_id'  	;14
1496 549   FETCH_DIM_R/81            $715=     16?47                1055:'category_name'	;0
1497 549   ADD_ARRAY_ELEMENT/72      #714=     $715                 1056:'category_name'	;0
1498 549   ADD_ARRAY_ELEMENT/72      #714=     1057:0               1058:'parent_id'    	;0
1499 549   ASSIGN_DIM/147            ?643      16?7                 ?4397406            	;0
1500 549   OP_DATA/137               ?0        #714                 ?0                  	;0
1501 551   JMP/42                    ?0        ?1480                ?0                  	;0	>>1480
1502 551   FE_FREE/127               ?0        $706                 ?0                  	;0	<<1479
1503 554   GOTO/253                  ?0        ?3630                ?1059               	;0
1504 556   GOTO/253                  ?0        ?1515                ?1060               	;0	<<264
1505 558   GOTO/253                  ?0        ?1514                ?1061               	;0
1506 560   ASSIGN/38                 ?648      16?16                1062:false          	;0
1507 561   INIT_FCALL_BY_NAME/59     ?0        ?0                   1063:'intval'       	;1
1508 561   FETCH_STATIC_PROP_FUNC_ARG/177 $717=     1065:'rRequest'      1066:'XUI'          	;1
1509 561   FETCH_DIM_FUNC_ARG/93     $718=     $717                 1068:'stream_id'    	;1
1510 561   SEND_VAR_EX/66            ?80       $718                 ?1                  	;0
1511 561   DO_FCALL_BY_NAME/131      $719=     ?0                   ?0                  	;0
1512 561   INIT_ARRAY/71             #720=     $719                 ?0                  	;4
1513 561   ASSIGN/38                 ?653      16?17                #720                	;0
1514 563   GOTO/253                  ?0        ?1775                ?1069               	;0
1515 565   ASSIGN_DIM/147            ?654      16?7                 1070:'epg_listings' 	;0
1516 565   OP_DATA/137               ?0        1071:array (
)       ?0                  	;0
1517 566   FETCH_STATIC_PROP_IS/176  $723=     1072:'rRequest'      1073:'XUI'          	;0
1518 566   ISSET_ISEMPTY_DIM_OBJ/115 #724=     $723                 1075:'stream_id'    	;16777216
1519 566   JMPZ/43                   ?0        #724                 ?1521               	;0	>>1521
1520 567   GOTO/253                  ?0        ?1985                ?1076               	;0
1521 569   INIT_FCALL_BY_NAME/59     ?0        ?0                   1077:'is_numeric'   	;1	<<1519
1522 569   FETCH_STATIC_PROP_FUNC_ARG/177 $725=     1079:'rRequest'      1080:'XUI'          	;1
1523 569   FETCH_DIM_FUNC_ARG/93     $726=     $725                 1082:'stream_id'    	;1
1524 569   SEND_VAR_EX/66            ?80       $726                 ?1                  	;0
1525 569   DO_FCALL_BY_NAME/131      $727=     ?0                   ?0                  	;0
1526 569   JMPZ_EX/46                #728=     $727                 ?1531               	;0	>>1531
1527 569   FETCH_STATIC_PROP_IS/176  $729=     1083:'rRequest'      1084:'XUI'          	;0
1528 569   ISSET_ISEMPTY_DIM_OBJ/115 #730=     $729                 1086:'multi'        	;33554432
1529 569   BOOL_NOT/13               #731=     #730                 ?0                  	;0
1530 569   BOOL/52                   #728=     #731                 ?0                  	;0
1531 569   JMPZ/43                   ?0        #728                 ?1533               	;0	>>1533	<<1526
1532 570   GOTO/253                  ?0        ?1506                ?1087               	;0
1533 572   ASSIGN/38                 ?664      16?16                1088:true           	;0	<<1531
1534 573   INIT_FCALL_BY_NAME/59     ?0        ?0                   1089:'array_map'    	;2
1535 573   SEND_VAL_EX/116           ?80       1091:'intval'        ?1                  	;0
1536 573   INIT_FCALL_BY_NAME/59     ?0        ?0                   1092:'explode'      	;2
1537 573   SEND_VAL_EX/116           ?80       1094:','             ?1                  	;0
1538 573   FETCH_STATIC_PROP_FUNC_ARG/177 $733=     1095:'rRequest'      1096:'XUI'          	;2
1539 573   FETCH_DIM_FUNC_ARG/93     $734=     $733                 1098:'stream_id'    	;2
1540 573   SEND_VAR_EX/66            ?96       $734                 ?2                  	;0
1541 573   DO_FCALL_BY_NAME/131      $735=     ?0                   ?0                  	;0
1542 573   SEND_VAR_NO_REF_EX/50     ?96       $735                 ?2                  	;0
1543 573   DO_FCALL_BY_NAME/131      $736=     ?0                   ?0                  	;0
1544 573   ASSIGN/38                 ?669      16?17                $736                	;0
1545 574   GOTO/253                  ?0        ?1505                ?1099               	;0
1546 576   FE_RESET_R/77             $738=     16?17                ?1590               	;0
1547 576   FE_FETCH_R/78             ?0        $738                 16?22               	;1590	>>1590	<<1589
1548 577   INIT_FCALL_BY_NAME/59     ?0        ?0                   1100:'file_exists'  	;1
1549 577   FETCH_CONSTANT/99         #739=     ?0                   1102:'STREAMS_TMP_PATH'	;16
1550 577   CONCAT/8                  #740=     #739                 1105:'stream_'      	;0
1551 577   INIT_FCALL_BY_NAME/59     ?0        ?0                   1106:'intval'       	;1
1552 577   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
1553 577   DO_FCALL_BY_NAME/131      $741=     ?0                   ?0                  	;0
1554 577   CONCAT/8                  #742=     #740                 $741                	;0
1555 577   SEND_VAL_EX/116           ?80       #742                 ?1                  	;0
1556 577   DO_FCALL_BY_NAME/131      $743=     ?0                   ?0                  	;0
1557 577   BOOL_NOT/13               #744=     $743                 ?0                  	;0
1558 577   JMPZ/43                   ?0        #744                 ?1561               	;0	>>1561
1559 578   NOP/0                     ?0        ?0                   ?0                  	;1
1560 578   GOTO/253                  ?0        ?1589                ?1108               	;0
1561 580   INIT_FCALL_BY_NAME/59     ?0        ?0                   1109:'igbinary_unserialize'	;1	<<1558
1562 580   INIT_FCALL_BY_NAME/59     ?0        ?0                   1111:'file_get_contents'	;1
1563 580   FETCH_CONSTANT/99         #745=     ?0                   1113:'STREAMS_TMP_PATH'	;16
1564 580   CONCAT/8                  #746=     #745                 1116:'stream_'      	;0
1565 580   INIT_FCALL_BY_NAME/59     ?0        ?0                   1117:'intval'       	;1
1566 580   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
1567 580   DO_FCALL_BY_NAME/131      $747=     ?0                   ?0                  	;0
1568 580   CONCAT/8                  #748=     #746                 $747                	;0
1569 580   SEND_VAL_EX/116           ?80       #748                 ?1                  	;0
1570 580   DO_FCALL_BY_NAME/131      $749=     ?0                   ?0                  	;0
1571 580   SEND_VAR_NO_REF_EX/50     ?80       $749                 ?1                  	;0
1572 580   DO_FCALL_BY_NAME/131      $750=     ?0                   ?0                  	;0
1573 580   FETCH_DIM_R/81            $751=     $750                 1119:'info'         	;0
1574 580   ASSIGN/38                 ?684      16?21                $751                	;0
1575 581   INIT_FCALL_BY_NAME/59     ?0        ?0                   1120:'str_replace'  	;3
1576 581   SEND_VAL_EX/116           ?80       1122:'\''            ?1                  	;0
1577 581   SEND_VAL_EX/116           ?96       1123:'\\\''          ?2                  	;0
1578 581   FETCH_DIM_R/81            $753=     16?21                1124:'epg_id'       	;0
1579 581   CONCAT/8                  #754=     $753                 1125:'_'            	;0
1580 581   FETCH_DIM_R/81            $755=     16?21                1126:'channel_id'   	;0
1581 581   CONCAT/8                  #756=     #754                 $755                	;0
1582 581   SEND_VAL_EX/116           ?112      #756                 ?3                  	;0
1583 581   DO_FCALL_BY_NAME/131      $757=     ?0                   ?0                  	;0
1584 581   INIT_ARRAY/71             #759=     16?22                1127:'stream_id'    	;10
1585 581   FETCH_DIM_R/81            $760=     16?21                1128:'tv_archive_duration'	;0
1586 581   ADD_ARRAY_ELEMENT/72      #759=     $760                 1129:'tv_archive_duration'	;0
1587 581   ASSIGN_DIM/147            ?690      16?19                $757                	;0
1588 581   OP_DATA/137               ?0        #759                 ?0                  	;0
1589 583   JMP/42                    ?0        ?1547                ?0                  	;0	>>1547
1590 583   FE_FREE/127               ?0        $738                 ?0                  	;0	<<1546
1591 586   INIT_FCALL_BY_NAME/59     ?0        ?0                   1130:'count'        	;1
1592 586   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
1593 586   DO_FCALL_BY_NAME/131      $761=     ?0                   ?0                  	;0
1594 586   IS_SMALLER/19             #762=     1132:0               $761                	;0
1595 586   BOOL_NOT/13               #763=     #762                 ?0                  	;0
1596 586   JMPZ/43                   ?0        #763                 ?1598               	;0	>>1598
1597 587   GOTO/253                  ?0        ?1985                ?1133               	;0
1598 589   FE_RESET_R/77             $764=     16?17                ?1773               	;0	<<1596
1599 589   FE_FETCH_R/78             ?0        $764                 16?22               	;1773	>>1773	<<1772
1600 590   INIT_FCALL_BY_NAME/59     ?0        ?0                   1134:'file_exists'  	;1
1601 590   FETCH_CONSTANT/99         #765=     ?0                   1136:'EPG_PATH'     	;16
1602 590   CONCAT/8                  #766=     #765                 1139:'stream_'      	;0
1603 590   INIT_FCALL_BY_NAME/59     ?0        ?0                   1140:'intval'       	;1
1604 590   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
1605 590   DO_FCALL_BY_NAME/131      $767=     ?0                   ?0                  	;0
1606 590   CONCAT/8                  #768=     #766                 $767                	;0
1607 590   SEND_VAL_EX/116           ?80       #768                 ?1                  	;0
1608 590   DO_FCALL_BY_NAME/131      $769=     ?0                   ?0                  	;0
1609 590   BOOL_NOT/13               #770=     $769                 ?0                  	;0
1610 590   JMPZ/43                   ?0        #770                 ?1613               	;0	>>1613
1611 591   NOP/0                     ?0        ?0                   ?0                  	;1
1612 591   GOTO/253                  ?0        ?1772                ?1142               	;0
1613 593   INIT_FCALL_BY_NAME/59     ?0        ?0                   1143:'igbinary_unserialize'	;1	<<1610
1614 593   INIT_FCALL_BY_NAME/59     ?0        ?0                   1145:'file_get_contents'	;1
1615 593   FETCH_CONSTANT/99         #771=     ?0                   1147:'EPG_PATH'     	;16
1616 593   CONCAT/8                  #772=     #771                 1150:'stream_'      	;0
1617 593   CONCAT/8                  #773=     #772                 16?22               	;0
1618 593   SEND_VAL_EX/116           ?80       #773                 ?1                  	;0
1619 593   DO_FCALL_BY_NAME/131      $774=     ?0                   ?0                  	;0
1620 593   SEND_VAR_NO_REF_EX/50     ?80       $774                 ?1                  	;0
1621 593   DO_FCALL_BY_NAME/131      $775=     ?0                   ?0                  	;0
1622 593   ASSIGN/38                 ?708      16?20                $775                	;0
1623 594   FE_RESET_R/77             $777=     16?20                ?1771               	;0
1624 594   FE_FETCH_R/78             ?0        $777                 16?48               	;1771	>>1771	<<1770
1625 595   NOP/0                     ?0        ?0                   ?0                  	;1
1626 595   NOP/0                     ?0        ?0                   ?0                  	;1
1627 595   GOTO/253                  ?0        ?1628                ?1151               	;0
1628 597   ASSIGN/38                 ?710      16?49                1152:0              	;0
1629 598   ASSIGN/38                 ?711      16?50                1153:0              	;0
1630 599   FETCH_DIM_R/81            $781=     16?48                1155:'start'        	;0
1631 599   ASSIGN_DIM/147            ?712      16?48                1154:'start_timestamp'	;0
1632 599   OP_DATA/137               ?0        $781                 ?0                  	;0
1633 600   FETCH_DIM_R/81            $783=     16?48                1157:'end'          	;0
1634 600   ASSIGN_DIM/147            ?714      16?48                1156:'stop_timestamp'	;0
1635 600   OP_DATA/137               ?0        $783                 ?0                  	;0
1636 601   FETCH_DIM_R/81            $784=     16?48                1158:'start_timestamp'	;0
1637 601   INIT_FCALL_BY_NAME/59     ?0        ?0                   1159:'time'         	;0
1638 601   DO_FCALL_BY_NAME/131      $785=     ?0                   ?0                  	;0
1639 601   IS_SMALLER_OR_EQUAL/20    #786=     $784                 $785                	;0
1640 601   JMPZ_EX/46                #786=     #786                 ?1646               	;0	>>1646
1641 601   FETCH_DIM_R/81            $787=     16?48                1161:'stop_timestamp'	;0
1642 601   INIT_FCALL_BY_NAME/59     ?0        ?0                   1162:'time'         	;0
1643 601   DO_FCALL_BY_NAME/131      $788=     ?0                   ?0                  	;0
1644 601   IS_SMALLER_OR_EQUAL/20    #789=     $788                 $787                	;0
1645 601   BOOL/52                   #786=     #789                 ?0                  	;0
1646 601   BOOL_NOT/13               #790=     #786                 ?0                  	;0	<<1640
1647 601   JMPZ/43                   ?0        #790                 ?1651               	;0	>>1651
1648 602   NOP/0                     ?0        ?0                   ?0                  	;1
1649 602   NOP/0                     ?0        ?0                   ?0                  	;1
1650 602   GOTO/253                  ?0        ?1723                ?1164               	;0
1651 604   NOP/0                     ?0        ?0                   ?0                  	;1	<<1647
1652 604   NOP/0                     ?0        ?0                   ?0                  	;1
1653 604   GOTO/253                  ?0        ?1722                ?1165               	;0
1654 606   INIT_FCALL_BY_NAME/59     ?0        ?0                   1167:'date'         	;2
1655 606   SEND_VAL_EX/116           ?80       1169:'Y-m-d H:i:s'   ?1                  	;0
1656 606   FETCH_DIM_FUNC_ARG/93     $792=     16?48                1170:'start_timestamp'	;2
1657 606   SEND_VAR_EX/66            ?96       $792                 ?2                  	;0
1658 606   DO_FCALL_BY_NAME/131      $793=     ?0                   ?0                  	;0
1659 606   ASSIGN_DIM/147            ?723      16?48                1166:'start'        	;0
1660 606   OP_DATA/137               ?0        $793                 ?0                  	;0
1661 607   INIT_FCALL_BY_NAME/59     ?0        ?0                   1172:'date'         	;2
1662 607   SEND_VAL_EX/116           ?80       1174:'Y-m-d H:i:s'   ?1                  	;0
1663 607   FETCH_DIM_FUNC_ARG/93     $795=     16?48                1175:'stop_timestamp'	;2
1664 607   SEND_VAR_EX/66            ?96       $795                 ?2                  	;0
1665 607   DO_FCALL_BY_NAME/131      $796=     ?0                   ?0                  	;0
1666 607   ASSIGN_DIM/147            ?726      16?48                1171:'end'          	;0
1667 607   OP_DATA/137               ?0        $796                 ?0                  	;0
1668 608   JMPZ/43                   ?0        16?16                ?1672               	;0	>>1672
1669 609   NOP/0                     ?0        ?0                   ?0                  	;1
1670 609   NOP/0                     ?0        ?0                   ?0                  	;1
1671 609   GOTO/253                  ?0        ?1715                ?1176               	;0
1672 611   FETCH_DIM_W/84            $797=     16?7                 1177:'epg_listings' 	;0	<<1668
1673 611   ASSIGN_DIM/147            ?730      $797                 ?4397406            	;0
1674 611   OP_DATA/137               ?0        16?48                ?0                  	;0
1675 612   NOP/0                     ?0        ?0                   ?0                  	;1
1676 612   NOP/0                     ?0        ?0                   ?0                  	;1
1677 612   GOTO/253                  ?0        ?1719                ?1178               	;0
1678 613   NOP/0                     ?0        ?0                   ?0                  	;1
1679 613   NOP/0                     ?0        ?0                   ?0                  	;1
1680 613   GOTO/253                  ?0        ?1715                ?1179               	;0
1681 615   INIT_FCALL_BY_NAME/59     ?0        ?0                   1180:'intval'       	;1
1682 615   INIT_FCALL_BY_NAME/59     ?0        ?0                   1182:'str_replace'  	;3
1683 615   SEND_VAL_EX/116           ?80       1184:'\''            ?1                  	;0
1684 615   SEND_VAL_EX/116           ?96       1185:'\\\''          ?2                  	;0
1685 615   FETCH_DIM_R/81            $799=     16?48                1186:'epg_id'       	;0
1686 615   CONCAT/8                  #800=     $799                 1187:'_'            	;0
1687 615   FETCH_DIM_R/81            $801=     16?48                1188:'channel_id'   	;0
1688 615   CONCAT/8                  #802=     #800                 $801                	;0
1689 615   SEND_VAL_EX/116           ?112      #802                 ?3                  	;0
1690 615   DO_FCALL_BY_NAME/131      $803=     ?0                   ?0                  	;0
1691 615   FETCH_DIM_FUNC_ARG/93     $804=     16?19                $803                	;1
1692 615   FETCH_DIM_FUNC_ARG/93     $805=     $804                 1189:'stream_id'    	;1
1693 615   SEND_VAR_EX/66            ?80       $805                 ?1                  	;0
1694 615   DO_FCALL_BY_NAME/131      $806=     ?0                   ?0                  	;0
1695 615   ASSIGN/38                 ?739      16?22                $806                	;0
1696 616   ASSIGN_DIM/147            ?740      16?48                1190:'now_playing'  	;0
1697 616   OP_DATA/137               ?0        16?49                ?0                  	;0
1698 617   ASSIGN_DIM/147            ?741      16?48                1191:'has_archive'  	;0
1699 617   OP_DATA/137               ?0        16?50                ?0                  	;0
1700 618   INIT_FCALL_BY_NAME/59     ?0        ?0                   1193:'base64_encode'	;1
1701 618   FETCH_DIM_FUNC_ARG/93     $811=     16?48                1195:'title'        	;1
1702 618   SEND_VAR_EX/66            ?80       $811                 ?1                  	;0
1703 618   DO_FCALL_BY_NAME/131      $812=     ?0                   ?0                  	;0
1704 618   ASSIGN_DIM/147            ?742      16?48                1192:'title'        	;0
1705 618   OP_DATA/137               ?0        $812                 ?0                  	;0
1706 619   INIT_FCALL_BY_NAME/59     ?0        ?0                   1197:'base64_encode'	;1
1707 619   FETCH_DIM_FUNC_ARG/93     $814=     16?48                1199:'description'  	;1
1708 619   SEND_VAR_EX/66            ?80       $814                 ?1                  	;0
1709 619   DO_FCALL_BY_NAME/131      $815=     ?0                   ?0                  	;0
1710 619   ASSIGN_DIM/147            ?745      16?48                1196:'description'  	;0
1711 619   OP_DATA/137               ?0        $815                 ?0                  	;0
1712 620   NOP/0                     ?0        ?0                   ?0                  	;1
1713 620   NOP/0                     ?0        ?0                   ?0                  	;1
1714 620   GOTO/253                  ?0        ?1654                ?1200               	;0
1715 623   FETCH_DIM_W/84            $816=     16?7                 1201:'epg_listings' 	;0
1716 623   FETCH_DIM_W/84            $817=     $816                 16?22               	;0
1717 623   ASSIGN_DIM/147            ?750      $817                 ?0                  	;0
1718 623   OP_DATA/137               ?0        16?48                ?0                  	;0
1719 626   NOP/0                     ?0        ?0                   ?0                  	;1
1720 626   NOP/0                     ?0        ?0                   ?0                  	;1
1721 626   GOTO/253                  ?0        ?1770                ?1202               	;0
1722 628   ASSIGN/38                 ?751      16?49                1203:1              	;0
1723 630   INIT_FCALL_BY_NAME/59     ?0        ?0                   1204:'str_replace'  	;3
1724 630   SEND_VAL_EX/116           ?80       1206:'\''            ?1                  	;0
1725 630   SEND_VAL_EX/116           ?96       1207:'\\\''          ?2                  	;0
1726 630   FETCH_DIM_R/81            $820=     16?48                1208:'epg_id'       	;0
1727 630   CONCAT/8                  #821=     $820                 1209:'_'            	;0
1728 630   FETCH_DIM_R/81            $822=     16?48                1210:'channel_id'   	;0
1729 630   CONCAT/8                  #823=     #821                 $822                	;0
1730 630   SEND_VAL_EX/116           ?112      #823                 ?3                  	;0
1731 630   DO_FCALL_BY_NAME/131      $824=     ?0                   ?0                  	;0
1732 630   FETCH_DIM_IS/90           $825=     16?19                $824                	;0
1733 630   ISSET_ISEMPTY_DIM_OBJ/115 #826=     $825                 1211:'tv_archive_duration'	;16777216
1734 630   BOOL_NOT/13               #827=     #826                 ?0                  	;0
1735 630   JMPZ_EX/46                #827=     #827                 ?1741               	;0	>>1741
1736 630   INIT_FCALL_BY_NAME/59     ?0        ?0                   1212:'time'         	;0
1737 630   DO_FCALL_BY_NAME/131      $828=     ?0                   ?0                  	;0
1738 630   FETCH_DIM_R/81            $829=     16?48                1214:'stop_timestamp'	;0
1739 630   IS_SMALLER/19             #830=     $829                 $828                	;0
1740 630   BOOL/52                   #827=     #830                 ?0                  	;0
1741 630   JMPZ_EX/46                #827=     #827                 ?1761               	;0	>>1761	<<1735
1742 630   INIT_FCALL_BY_NAME/59     ?0        ?0                   1215:'strtotime'    	;1
1743 630   INIT_FCALL_BY_NAME/59     ?0        ?0                   1217:'str_replace'  	;3
1744 630   SEND_VAL_EX/116           ?80       1219:'\''            ?1                  	;0
1745 630   SEND_VAL_EX/116           ?96       1220:'\\\''          ?2                  	;0
1746 630   FETCH_DIM_R/81            $831=     16?48                1221:'epg_id'       	;0
1747 630   CONCAT/8                  #832=     $831                 1222:'_'            	;0
1748 630   FETCH_DIM_R/81            $833=     16?48                1223:'channel_id'   	;0
1749 630   CONCAT/8                  #834=     #832                 $833                	;0
1750 630   SEND_VAL_EX/116           ?112      #834                 ?3                  	;0
1751 630   DO_FCALL_BY_NAME/131      $835=     ?0                   ?0                  	;0
1752 630   FETCH_DIM_R/81            $836=     16?19                $835                	;0
1753 630   FETCH_DIM_R/81            $837=     $836                 1224:'tv_archive_duration'	;0
1754 630   CONCAT/8                  #838=     1225:'-'             $837                	;0
1755 630   CONCAT/8                  #839=     #838                 1226:' days'        	;0
1756 630   SEND_VAL_EX/116           ?80       #839                 ?1                  	;0
1757 630   DO_FCALL_BY_NAME/131      $840=     ?0                   ?0                  	;0
1758 630   FETCH_DIM_R/81            $841=     16?48                1227:'stop_timestamp'	;0
1759 630   IS_SMALLER_OR_EQUAL/20    #842=     $840                 $841                	;0
1760 630   BOOL/52                   #827=     #842                 ?0                  	;0
1761 630   BOOL_NOT/13               #843=     #827                 ?0                  	;0	<<1741
1762 630   JMPZ/43                   ?0        #843                 ?1766               	;0	>>1766
1763 631   NOP/0                     ?0        ?0                   ?0                  	;1
1764 631   NOP/0                     ?0        ?0                   ?0                  	;1
1765 631   GOTO/253                  ?0        ?1767                ?1228               	;0
1766 633   ASSIGN/38                 ?776      16?50                1229:1              	;0	<<1762
1767 635   NOP/0                     ?0        ?0                   ?0                  	;1
1768 635   NOP/0                     ?0        ?0                   ?0                  	;1
1769 635   GOTO/253                  ?0        ?1681                ?1230               	;0
1770 636   JMP/42                    ?0        ?1624                ?0                  	;0	>>1624
1771 636   FE_FREE/127               ?0        $777                 ?0                  	;0	<<1623
1772 640   JMP/42                    ?0        ?1599                ?0                  	;0	>>1599
1773 640   FE_FREE/127               ?0        $764                 ?0                  	;0	<<1598
1774 643   GOTO/253                  ?0        ?1985                ?1231               	;0
1775 645   INIT_FCALL_BY_NAME/59     ?0        ?0                   1232:'count'        	;1
1776 645   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
1777 645   DO_FCALL_BY_NAME/131      $845=     ?0                   ?0                  	;0
1778 645   IS_SMALLER/19             #846=     1234:0               $845                	;0
1779 645   BOOL_NOT/13               #847=     #846                 ?0                  	;0
1780 645   JMPZ/43                   ?0        #847                 ?1782               	;0	>>1782
1781 646   GOTO/253                  ?0        ?1985                ?1235               	;0
1782 648   ASSIGN/38                 ?780      16?19                1236:array (
)      	;0	<<1780
1783 649   FETCH_STATIC_PROP_R/173   $849=     1237:'rCached'       1238:'XUI'          	;0
1784 649   JMPZ/43                   ?0        $849                 ?1786               	;0	>>1786
1785 650   GOTO/253                  ?0        ?1984                ?1240               	;0
1786 652   FETCH_STATIC_PROP_R/173   $850=     1241:'db'            1242:'XUI'          	;0	<<1784
1787 652   INIT_METHOD_CALL/112      ?0        $850                 1244:'query'        	;1
1788 652   INIT_FCALL_BY_NAME/59     ?0        ?0                   1246:'implode'      	;2
1789 652   SEND_VAL_EX/116           ?80       1248:','             ?1                  	;0
1790 652   SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
1791 652   DO_FCALL_BY_NAME/131      $851=     ?0                   ?0                  	;0
1792 652   CONCAT/8                  #852=     1249:'SELECT `id`, `tv_archive_duration`, `epg_id`, `channel_id` FROM `streams` WHERE `id` IN (' $851                	;0
1793 652   CONCAT/8                  #853=     #852                 1250:');'           	;0
1794 652   SEND_VAL_EX/116           ?80       #853                 ?1                  	;0
1795 652   DO_FCALL/60               ?786      ?0                   ?0                  	;0
1796 653   FETCH_STATIC_PROP_R/173   $855=     1251:'db'            1252:'XUI'          	;0
1797 653   INIT_METHOD_CALL/112      ?0        $855                 1254:'get_rows'     	;0
1798 653   DO_FCALL/60               $856=     ?0                   ?0                  	;0
1799 653   FE_RESET_R/77             $857=     $856                 ?1817               	;0
1800 653   FE_FETCH_R/78             ?0        $857                 16?21               	;1817	>>1817	<<1816
1801 654   INIT_FCALL_BY_NAME/59     ?0        ?0                   1256:'str_replace'  	;3
1802 654   SEND_VAL_EX/116           ?80       1258:'\''            ?1                  	;0
1803 654   SEND_VAL_EX/116           ?96       1259:'\\\''          ?2                  	;0
1804 654   FETCH_DIM_R/81            $858=     16?21                1260:'epg_id'       	;0
1805 654   CONCAT/8                  #859=     $858                 1261:'_'            	;0
1806 654   FETCH_DIM_R/81            $860=     16?21                1262:'channel_id'   	;0
1807 654   CONCAT/8                  #861=     #859                 $860                	;0
1808 654   SEND_VAL_EX/116           ?112      #861                 ?3                  	;0
1809 654   DO_FCALL_BY_NAME/131      $862=     ?0                   ?0                  	;0
1810 654   FETCH_DIM_R/81            $864=     16?21                1263:'id'           	;0
1811 654   INIT_ARRAY/71             #865=     $864                 1264:'stream_id'    	;10
1812 654   FETCH_DIM_R/81            $866=     16?21                1265:'tv_archive_duration'	;0
1813 654   ADD_ARRAY_ELEMENT/72      #865=     $866                 1266:'tv_archive_duration'	;0
1814 654   ASSIGN_DIM/147            ?795      16?19                $862                	;0
1815 654   OP_DATA/137               ?0        #865                 ?0                  	;0
1816 655   JMP/42                    ?0        ?1800                ?0                  	;0	>>1800
1817 655   FE_FREE/127               ?0        $857                 ?0                  	;0	<<1799
1818 657   GOTO/253                  ?0        ?1819                ?1267               	;0
1819 660   INIT_FCALL_BY_NAME/59     ?0        ?0                   1268:'count'        	;1
1820 660   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
1821 660   DO_FCALL_BY_NAME/131      $867=     ?0                   ?0                  	;0
1822 660   IS_SMALLER/19             #868=     1270:0               $867                	;0
1823 660   BOOL_NOT/13               #869=     #868                 ?0                  	;0
1824 660   JMPZ/43                   ?0        #869                 ?1826               	;0	>>1826
1825 661   GOTO/253                  ?0        ?1983                ?1271               	;0
1826 663   FETCH_STATIC_PROP_R/173   $870=     1272:'db'            1273:'XUI'          	;0	<<1824
1827 663   INIT_METHOD_CALL/112      ?0        $870                 1275:'query'        	;1
1828 663   INIT_FCALL_BY_NAME/59     ?0        ?0                   1277:'implode'      	;2
1829 663   SEND_VAL_EX/116           ?80       1279:'\',\''         ?1                  	;0
1830 663   INIT_FCALL_BY_NAME/59     ?0        ?0                   1280:'array_keys'   	;1
1831 663   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
1832 663   DO_FCALL_BY_NAME/131      $871=     ?0                   ?0                  	;0
1833 663   SEND_VAR_NO_REF_EX/50     ?96       $871                 ?2                  	;0
1834 663   DO_FCALL_BY_NAME/131      $872=     ?0                   ?0                  	;0
1835 663   CONCAT/8                  #873=     1282:'SELECT *, start as start_timestamp, end as stop_timestamp FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' $872                	;0
1836 663   CONCAT/8                  #874=     #873                 1283:'\') ORDER BY `start` ASC'	;0
1837 663   SEND_VAL_EX/116           ?80       #874                 ?1                  	;0
1838 663   DO_FCALL/60               ?807      ?0                   ?0                  	;0
1839 664   FETCH_STATIC_PROP_R/173   $876=     1284:'db'            1285:'XUI'          	;0
1840 664   INIT_METHOD_CALL/112      ?0        $876                 1287:'num_rows'     	;0
1841 664   DO_FCALL/60               $877=     ?0                   ?0                  	;0
1842 664   IS_SMALLER/19             #878=     1289:0               $877                	;0
1843 664   BOOL_NOT/13               #879=     #878                 ?0                  	;0
1844 664   JMPZ/43                   ?0        #879                 ?1846               	;0	>>1846
1845 665   GOTO/253                  ?0        ?1983                ?1290               	;0
1846 667   FETCH_STATIC_PROP_R/173   $880=     1291:'db'            1292:'XUI'          	;0	<<1844
1847 667   INIT_METHOD_CALL/112      ?0        $880                 1294:'get_rows'     	;0
1848 667   DO_FCALL/60               $881=     ?0                   ?0                  	;0
1849 667   FE_RESET_R/77             $882=     $881                 ?1981               	;0
1850 667   FE_FETCH_R/78             ?0        $882                 16?48               	;1981	>>1981	<<1980
1851 668   NOP/0                     ?0        ?0                   ?0                  	;1
1852 668   GOTO/253                  ?0        ?1853                ?1296               	;0
1853 670   ASSIGN/38                 ?815      16?49                1297:0              	;0
1854 671   ASSIGN/38                 ?816      16?50                1298:0              	;0
1855 672   FETCH_DIM_R/81            $885=     16?48                1299:'start_timestamp'	;0
1856 672   INIT_FCALL_BY_NAME/59     ?0        ?0                   1300:'time'         	;0
1857 672   DO_FCALL_BY_NAME/131      $886=     ?0                   ?0                  	;0
1858 672   IS_SMALLER_OR_EQUAL/20    #887=     $885                 $886                	;0
1859 672   JMPZ_EX/46                #887=     #887                 ?1865               	;0	>>1865
1860 672   FETCH_DIM_R/81            $888=     16?48                1302:'stop_timestamp'	;0
1861 672   INIT_FCALL_BY_NAME/59     ?0        ?0                   1303:'time'         	;0
1862 672   DO_FCALL_BY_NAME/131      $889=     ?0                   ?0                  	;0
1863 672   IS_SMALLER_OR_EQUAL/20    #890=     $889                 $888                	;0
1864 672   BOOL/52                   #887=     #890                 ?0                  	;0
1865 672   BOOL_NOT/13               #891=     #887                 ?0                  	;0	<<1859
1866 672   JMPZ/43                   ?0        #891                 ?1869               	;0	>>1869
1867 673   NOP/0                     ?0        ?0                   ?0                  	;1
1868 673   GOTO/253                  ?0        ?1870                ?1305               	;0
1869 675   ASSIGN/38                 ?824      16?49                1306:1              	;0	<<1866
1870 677   NOP/0                     ?0        ?0                   ?0                  	;1
1871 677   GOTO/253                  ?0        ?1874                ?1307               	;0
1872 681   NOP/0                     ?0        ?0                   ?0                  	;1
1873 681   GOTO/253                  ?0        ?1980                ?1308               	;0
1874 683   INIT_FCALL_BY_NAME/59     ?0        ?0                   1309:'str_replace'  	;3
1875 683   SEND_VAL_EX/116           ?80       1311:'\''            ?1                  	;0
1876 683   SEND_VAL_EX/116           ?96       1312:'\\\''          ?2                  	;0
1877 683   FETCH_DIM_R/81            $893=     16?48                1313:'epg_id'       	;0
1878 683   CONCAT/8                  #894=     $893                 1314:'_'            	;0
1879 683   FETCH_DIM_R/81            $895=     16?48                1315:'channel_id'   	;0
1880 683   CONCAT/8                  #896=     #894                 $895                	;0
1881 683   SEND_VAL_EX/116           ?112      #896                 ?3                  	;0
1882 683   DO_FCALL_BY_NAME/131      $897=     ?0                   ?0                  	;0
1883 683   FETCH_DIM_IS/90           $898=     16?19                $897                	;0
1884 683   ISSET_ISEMPTY_DIM_OBJ/115 #899=     $898                 1316:'tv_archive_duration'	;16777216
1885 683   BOOL_NOT/13               #900=     #899                 ?0                  	;0
1886 683   JMPZ_EX/46                #900=     #900                 ?1892               	;0	>>1892
1887 683   INIT_FCALL_BY_NAME/59     ?0        ?0                   1317:'time'         	;0
1888 683   DO_FCALL_BY_NAME/131      $901=     ?0                   ?0                  	;0
1889 683   FETCH_DIM_R/81            $902=     16?48                1319:'stop_timestamp'	;0
1890 683   IS_SMALLER/19             #903=     $902                 $901                	;0
1891 683   BOOL/52                   #900=     #903                 ?0                  	;0
1892 683   JMPZ_EX/46                #900=     #900                 ?1912               	;0	>>1912	<<1886
1893 683   INIT_FCALL_BY_NAME/59     ?0        ?0                   1320:'strtotime'    	;1
1894 683   INIT_FCALL_BY_NAME/59     ?0        ?0                   1322:'str_replace'  	;3
1895 683   SEND_VAL_EX/116           ?80       1324:'\''            ?1                  	;0
1896 683   SEND_VAL_EX/116           ?96       1325:'\\\''          ?2                  	;0
1897 683   FETCH_DIM_R/81            $904=     16?48                1326:'epg_id'       	;0
1898 683   CONCAT/8                  #905=     $904                 1327:'_'            	;0
1899 683   FETCH_DIM_R/81            $906=     16?48                1328:'channel_id'   	;0
1900 683   CONCAT/8                  #907=     #905                 $906                	;0
1901 683   SEND_VAL_EX/116           ?112      #907                 ?3                  	;0
1902 683   DO_FCALL_BY_NAME/131      $908=     ?0                   ?0                  	;0
1903 683   FETCH_DIM_R/81            $909=     16?19                $908                	;0
1904 683   FETCH_DIM_R/81            $910=     $909                 1329:'tv_archive_duration'	;0
1905 683   CONCAT/8                  #911=     1330:'-'             $910                	;0
1906 683   CONCAT/8                  #912=     #911                 1331:' days'        	;0
1907 683   SEND_VAL_EX/116           ?80       #912                 ?1                  	;0
1908 683   DO_FCALL_BY_NAME/131      $913=     ?0                   ?0                  	;0
1909 683   FETCH_DIM_R/81            $914=     16?48                1332:'stop_timestamp'	;0
1910 683   IS_SMALLER_OR_EQUAL/20    #915=     $913                 $914                	;0
1911 683   BOOL/52                   #900=     #915                 ?0                  	;0
1912 683   BOOL_NOT/13               #916=     #900                 ?0                  	;0	<<1892
1913 683   JMPZ/43                   ?0        #916                 ?1916               	;0	>>1916
1914 684   NOP/0                     ?0        ?0                   ?0                  	;1
1915 684   GOTO/253                  ?0        ?1917                ?1333               	;0
1916 686   ASSIGN/38                 ?849      16?50                1334:1              	;0	<<1913
1917 688   INIT_FCALL_BY_NAME/59     ?0        ?0                   1335:'intval'       	;1
1918 688   INIT_FCALL_BY_NAME/59     ?0        ?0                   1337:'str_replace'  	;3
1919 688   SEND_VAL_EX/116           ?80       1339:'\''            ?1                  	;0
1920 688   SEND_VAL_EX/116           ?96       1340:'\\\''          ?2                  	;0
1921 688   FETCH_DIM_R/81            $918=     16?48                1341:'epg_id'       	;0
1922 688   CONCAT/8                  #919=     $918                 1342:'_'            	;0
1923 688   FETCH_DIM_R/81            $920=     16?48                1343:'channel_id'   	;0
1924 688   CONCAT/8                  #921=     #919                 $920                	;0
1925 688   SEND_VAL_EX/116           ?112      #921                 ?3                  	;0
1926 688   DO_FCALL_BY_NAME/131      $922=     ?0                   ?0                  	;0
1927 688   FETCH_DIM_FUNC_ARG/93     $923=     16?19                $922                	;1
1928 688   FETCH_DIM_FUNC_ARG/93     $924=     $923                 1344:'stream_id'    	;1
1929 688   SEND_VAR_EX/66            ?80       $924                 ?1                  	;0
1930 688   DO_FCALL_BY_NAME/131      $925=     ?0                   ?0                  	;0
1931 688   ASSIGN/38                 ?858      16?22                $925                	;0
1932 689   ASSIGN_DIM/147            ?859      16?48                1345:'now_playing'  	;0
1933 689   OP_DATA/137               ?0        16?49                ?0                  	;0
1934 690   NOP/0                     ?0        ?0                   ?0                  	;1
1935 690   GOTO/253                  ?0        ?1950                ?1346               	;0
1936 692   JMPZ/43                   ?0        16?16                ?1939               	;0	>>1939
1937 693   NOP/0                     ?0        ?0                   ?0                  	;1
1938 693   GOTO/253                  ?0        ?1944                ?1347               	;0
1939 695   FETCH_DIM_W/84            $928=     16?7                 1348:'epg_listings' 	;0	<<1936
1940 695   ASSIGN_DIM/147            ?861      $928                 ?4397406            	;0
1941 695   OP_DATA/137               ?0        16?48                ?0                  	;0
1942 696   NOP/0                     ?0        ?0                   ?0                  	;1
1943 696   GOTO/253                  ?0        ?1872                ?1349               	;0
1944 698   FETCH_DIM_W/84            $930=     16?7                 1350:'epg_listings' 	;0
1945 698   FETCH_DIM_W/84            $931=     $930                 16?22               	;0
1946 698   ASSIGN_DIM/147            ?864      $931                 ?0                  	;0
1947 698   OP_DATA/137               ?0        16?48                ?0                  	;0
1948 699   NOP/0                     ?0        ?0                   ?0                  	;1
1949 699   GOTO/253                  ?0        ?1872                ?1351               	;0
1950 701   ASSIGN_DIM/147            ?865      16?48                1352:'has_archive'  	;0
1951 701   OP_DATA/137               ?0        16?50                ?0                  	;0
1952 702   INIT_FCALL_BY_NAME/59     ?0        ?0                   1354:'base64_encode'	;1
1953 702   FETCH_DIM_FUNC_ARG/93     $935=     16?48                1356:'title'        	;1
1954 702   SEND_VAR_EX/66            ?80       $935                 ?1                  	;0
1955 702   DO_FCALL_BY_NAME/131      $936=     ?0                   ?0                  	;0
1956 702   ASSIGN_DIM/147            ?866      16?48                1353:'title'        	;0
1957 702   OP_DATA/137               ?0        $936                 ?0                  	;0
1958 703   INIT_FCALL_BY_NAME/59     ?0        ?0                   1358:'base64_encode'	;1
1959 703   FETCH_DIM_FUNC_ARG/93     $938=     16?48                1360:'description'  	;1
1960 703   SEND_VAR_EX/66            ?80       $938                 ?1                  	;0
1961 703   DO_FCALL_BY_NAME/131      $939=     ?0                   ?0                  	;0
1962 703   ASSIGN_DIM/147            ?869      16?48                1357:'description'  	;0
1963 703   OP_DATA/137               ?0        $939                 ?0                  	;0
1964 704   INIT_FCALL_BY_NAME/59     ?0        ?0                   1362:'date'         	;2
1965 704   SEND_VAL_EX/116           ?80       1364:'Y-m-d H:i:s'   ?1                  	;0
1966 704   FETCH_DIM_FUNC_ARG/93     $941=     16?48                1365:'start_timestamp'	;2
1967 704   SEND_VAR_EX/66            ?96       $941                 ?2                  	;0
1968 704   DO_FCALL_BY_NAME/131      $942=     ?0                   ?0                  	;0
1969 704   ASSIGN_DIM/147            ?872      16?48                1361:'start'        	;0
1970 704   OP_DATA/137               ?0        $942                 ?0                  	;0
1971 705   INIT_FCALL_BY_NAME/59     ?0        ?0                   1367:'date'         	;2
1972 705   SEND_VAL_EX/116           ?80       1369:'Y-m-d H:i:s'   ?1                  	;0
1973 705   FETCH_DIM_FUNC_ARG/93     $944=     16?48                1370:'stop_timestamp'	;2
1974 705   SEND_VAR_EX/66            ?96       $944                 ?2                  	;0
1975 705   DO_FCALL_BY_NAME/131      $945=     ?0                   ?0                  	;0
1976 705   ASSIGN_DIM/147            ?875      16?48                1366:'end'          	;0
1977 705   OP_DATA/137               ?0        $945                 ?0                  	;0
1978 706   NOP/0                     ?0        ?0                   ?0                  	;1
1979 706   GOTO/253                  ?0        ?1936                ?1371               	;0
1980 707   JMP/42                    ?0        ?1850                ?0                  	;0	>>1850
1981 707   FE_FREE/127               ?0        $882                 ?0                  	;0	<<1849
1982 709   GOTO/253                  ?0        ?1983                ?1372               	;0
1983 714   GOTO/253                  ?0        ?1985                ?1373               	;0
1984 716   GOTO/253                  ?0        ?1546                ?1374               	;0
1985 722   GOTO/253                  ?0        ?3630                ?1375               	;0
1986 723   GOTO/253                  ?0        ?1987                ?1376               	;0
1987 726   GOTO/253                  ?0        ?2185                ?1377               	;0	<<266
1988 729   INIT_FCALL_BY_NAME/59     ?0        ?0                   1378:'time'         	;0
1989 729   DO_FCALL_BY_NAME/131      $946=     ?0                   ?0                  	;0
1990 729   ASSIGN/38                 ?879      16?51                $946                	;0
1991 730   FE_RESET_R/77             $948=     16?17                ?2110               	;0
1992 730   FE_FETCH_R/78             ?0        $948                 16?22               	;2110	>>2110	<<2109
1993 731   INIT_FCALL_BY_NAME/59     ?0        ?0                   1380:'file_exists'  	;1
1994 731   FETCH_CONSTANT/99         #949=     ?0                   1382:'EPG_PATH'     	;16
1995 731   CONCAT/8                  #950=     #949                 1385:'stream_'      	;0
1996 731   INIT_FCALL_BY_NAME/59     ?0        ?0                   1386:'intval'       	;1
1997 731   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
1998 731   DO_FCALL_BY_NAME/131      $951=     ?0                   ?0                  	;0
1999 731   CONCAT/8                  #952=     #950                 $951                	;0
2000 731   SEND_VAL_EX/116           ?80       #952                 ?1                  	;0
2001 731   DO_FCALL_BY_NAME/131      $953=     ?0                   ?0                  	;0
2002 731   BOOL_NOT/13               #954=     $953                 ?0                  	;0
2003 731   JMPZ/43                   ?0        #954                 ?2006               	;0	>>2006
2004 732   NOP/0                     ?0        ?0                   ?0                  	;1
2005 732   GOTO/253                  ?0        ?2109                ?1388               	;0
2006 734   INIT_FCALL_BY_NAME/59     ?0        ?0                   1389:'igbinary_unserialize'	;1	<<2003
2007 734   INIT_FCALL_BY_NAME/59     ?0        ?0                   1391:'file_get_contents'	;1
2008 734   FETCH_CONSTANT/99         #955=     ?0                   1393:'EPG_PATH'     	;16
2009 734   CONCAT/8                  #956=     #955                 1396:'stream_'      	;0
2010 734   CONCAT/8                  #957=     #956                 16?22               	;0
2011 734   SEND_VAL_EX/116           ?80       #957                 ?1                  	;0
2012 734   DO_FCALL_BY_NAME/131      $958=     ?0                   ?0                  	;0
2013 734   SEND_VAR_NO_REF_EX/50     ?80       $958                 ?1                  	;0
2014 734   DO_FCALL_BY_NAME/131      $959=     ?0                   ?0                  	;0
2015 734   ASSIGN/38                 ?892      16?20                $959                	;0
2016 735   FE_RESET_R/77             $961=     16?20                ?2108               	;0
2017 735   FE_FETCH_R/78             ?0        $961                 16?21               	;2108	>>2108	<<2107
2018 736   NOP/0                     ?0        ?0                   ?0                  	;1
2019 736   NOP/0                     ?0        ?0                   ?0                  	;1
2020 736   GOTO/253                  ?0        ?2071                ?1397               	;0
2021 738   INIT_FCALL_BY_NAME/59     ?0        ?0                   1399:'date'         	;2
2022 738   SEND_VAL_EX/116           ?80       1401:'Y-m-d H:i:s'   ?1                  	;0
2023 738   FETCH_DIM_FUNC_ARG/93     $963=     16?21                1402:'start'        	;2
2024 738   SEND_VAR_EX/66            ?96       $963                 ?2                  	;0
2025 738   DO_FCALL_BY_NAME/131      $964=     ?0                   ?0                  	;0
2026 738   ASSIGN_DIM/147            ?894      16?21                1398:'start'        	;0
2027 738   OP_DATA/137               ?0        $964                 ?0                  	;0
2028 739   INIT_FCALL_BY_NAME/59     ?0        ?0                   1404:'date'         	;2
2029 739   SEND_VAL_EX/116           ?80       1406:'Y-m-d H:i:s'   ?1                  	;0
2030 739   FETCH_DIM_FUNC_ARG/93     $966=     16?21                1407:'end'          	;2
2031 739   SEND_VAR_EX/66            ?96       $966                 ?2                  	;0
2032 739   DO_FCALL_BY_NAME/131      $967=     ?0                   ?0                  	;0
2033 739   ASSIGN_DIM/147            ?897      16?21                1403:'stop'         	;0
2034 739   OP_DATA/137               ?0        $967                 ?0                  	;0
2035 740   JMPZ/43                   ?0        16?16                ?2039               	;0	>>2039
2036 741   NOP/0                     ?0        ?0                   ?0                  	;1
2037 741   NOP/0                     ?0        ?0                   ?0                  	;1
2038 741   GOTO/253                  ?0        ?2048                ?1408               	;0
2039 743   FETCH_DIM_W/84            $968=     16?7                 1409:'epg_listings' 	;0	<<2035
2040 743   ASSIGN_DIM/147            ?901      $968                 ?4397406            	;0
2041 743   OP_DATA/137               ?0        16?21                ?0                  	;0
2042 744   NOP/0                     ?0        ?0                   ?0                  	;1
2043 744   NOP/0                     ?0        ?0                   ?0                  	;1
2044 744   GOTO/253                  ?0        ?2052                ?1410               	;0
2045 745   NOP/0                     ?0        ?0                   ?0                  	;1
2046 745   NOP/0                     ?0        ?0                   ?0                  	;1
2047 745   GOTO/253                  ?0        ?2048                ?1411               	;0
2048 748   FETCH_DIM_W/84            $970=     16?7                 1412:'epg_listings' 	;0
2049 748   FETCH_DIM_W/84            $971=     $970                 16?22               	;0
2050 748   ASSIGN_DIM/147            ?904      $971                 ?0                  	;0
2051 748   OP_DATA/137               ?0        16?21                ?0                  	;0
2052 750   INIT_FCALL_BY_NAME/59     ?0        ?0                   1413:'count'        	;1
2053 750   FETCH_DIM_FUNC_ARG/93     $973=     16?7                 1415:'epg_listings' 	;1
2054 750   SEND_VAR_EX/66            ?80       $973                 ?1                  	;0
2055 750   DO_FCALL_BY_NAME/131      $974=     ?0                   ?0                  	;0
2056 750   IS_SMALLER_OR_EQUAL/20    #975=     16?15                $974                	;0
2057 750   BOOL_NOT/13               #976=     #975                 ?0                  	;0
2058 750   JMPZ/43                   ?0        #976                 ?2062               	;0	>>2062
2059 751   NOP/0                     ?0        ?0                   ?0                  	;1
2060 751   NOP/0                     ?0        ?0                   ?0                  	;1
2061 751   GOTO/253                  ?0        ?2068                ?1416               	;0
2062 753   FE_FREE/127               ?0        $961                 ?72                 	;1	<<2058
2063 753   NOP/0                     ?0        ?0                   ?0                  	;1
2064 753   GOTO/253                  ?0        ?2109                ?1417               	;0
2065 754   NOP/0                     ?0        ?0                   ?0                  	;1
2066 754   NOP/0                     ?0        ?0                   ?0                  	;1
2067 754   GOTO/253                  ?0        ?2068                ?1418               	;0
2068 759   NOP/0                     ?0        ?0                   ?0                  	;1
2069 759   NOP/0                     ?0        ?0                   ?0                  	;1
2070 759   GOTO/253                  ?0        ?2107                ?1419               	;0
2071 761   FETCH_DIM_R/81            $977=     16?21                1420:'start'        	;0
2072 761   IS_SMALLER_OR_EQUAL/20    #978=     $977                 16?51               	;0
2073 761   JMPZ_EX/46                #978=     #978                 ?2077               	;0	>>2077
2074 761   FETCH_DIM_R/81            $979=     16?21                1421:'end'          	;0
2075 761   IS_SMALLER_OR_EQUAL/20    #980=     16?51                $979                	;0
2076 761   BOOL/52                   #978=     #980                 ?0                  	;0
2077 761   JMPNZ_EX/47               #978=     #978                 ?2081               	;0	>>2081	<<2073
2078 761   FETCH_DIM_R/81            $981=     16?21                1422:'start'        	;0
2079 761   IS_SMALLER_OR_EQUAL/20    #982=     16?51                $981                	;0
2080 761   BOOL/52                   #978=     #982                 ?0                  	;0
2081 761   BOOL_NOT/13               #983=     #978                 ?0                  	;0	<<2077
2082 761   JMPZ/43                   ?0        #983                 ?2086               	;0	>>2086
2083 762   NOP/0                     ?0        ?0                   ?0                  	;1
2084 762   NOP/0                     ?0        ?0                   ?0                  	;1
2085 762   GOTO/253                  ?0        ?2068                ?1423               	;0
2086 764   FETCH_DIM_R/81            $985=     16?21                1425:'start'        	;0	<<2082
2087 764   ASSIGN_DIM/147            ?916      16?21                1424:'start_timestamp'	;0
2088 764   OP_DATA/137               ?0        $985                 ?0                  	;0
2089 765   FETCH_DIM_R/81            $987=     16?21                1427:'end'          	;0
2090 765   ASSIGN_DIM/147            ?918      16?21                1426:'stop_timestamp'	;0
2091 765   OP_DATA/137               ?0        $987                 ?0                  	;0
2092 766   INIT_FCALL_BY_NAME/59     ?0        ?0                   1429:'base64_encode'	;1
2093 766   FETCH_DIM_FUNC_ARG/93     $989=     16?21                1431:'title'        	;1
2094 766   SEND_VAR_EX/66            ?80       $989                 ?1                  	;0
2095 766   DO_FCALL_BY_NAME/131      $990=     ?0                   ?0                  	;0
2096 766   ASSIGN_DIM/147            ?920      16?21                1428:'title'        	;0
2097 766   OP_DATA/137               ?0        $990                 ?0                  	;0
2098 767   INIT_FCALL_BY_NAME/59     ?0        ?0                   1433:'base64_encode'	;1
2099 767   FETCH_DIM_FUNC_ARG/93     $992=     16?21                1435:'description'  	;1
2100 767   SEND_VAR_EX/66            ?80       $992                 ?1                  	;0
2101 767   DO_FCALL_BY_NAME/131      $993=     ?0                   ?0                  	;0
2102 767   ASSIGN_DIM/147            ?923      16?21                1432:'description'  	;0
2103 767   OP_DATA/137               ?0        $993                 ?0                  	;0
2104 768   NOP/0                     ?0        ?0                   ?0                  	;1
2105 768   NOP/0                     ?0        ?0                   ?0                  	;1
2106 768   GOTO/253                  ?0        ?2021                ?1436               	;0
2107 769   JMP/42                    ?0        ?2017                ?0                  	;0	>>2017
2108 769   FE_FREE/127               ?0        $961                 ?0                  	;0	<<2016
2109 773   JMP/42                    ?0        ?1992                ?0                  	;0	>>1992
2110 773   FE_FREE/127               ?0        $948                 ?0                  	;0	<<1991
2111 777   GOTO/253                  ?0        ?2161                ?1437               	;0
2112 779   FETCH_STATIC_PROP_R/173   $994=     1438:'db'            1439:'XUI'          	;0
2113 779   INIT_METHOD_CALL/112      ?0        $994                 1441:'get_rows'     	;0
2114 779   DO_FCALL/60               $995=     ?0                   ?0                  	;0
2115 779   FE_RESET_R/77             $996=     $995                 ?2158               	;0
2116 779   FE_FETCH_R/78             ?0        $996                 16?21               	;2158	>>2158	<<2157
2117 780   INIT_FCALL_BY_NAME/59     ?0        ?0                   1443:'intval'       	;1
2118 780   INIT_FCALL_BY_NAME/59     ?0        ?0                   1445:'str_replace'  	;3
2119 780   SEND_VAL_EX/116           ?80       1447:'\''            ?1                  	;0
2120 780   SEND_VAL_EX/116           ?96       1448:'\\\''          ?2                  	;0
2121 780   FETCH_DIM_R/81            $997=     16?21                1449:'epg_id'       	;0
2122 780   CONCAT/8                  #998=     $997                 1450:'_'            	;0
2123 780   FETCH_DIM_R/81            $999=     16?21                1451:'channel_id'   	;0
2124 780   CONCAT/8                  #1000=    #998                 $999                	;0
2125 780   SEND_VAL_EX/116           ?112      #1000                ?3                  	;0
2126 780   DO_FCALL_BY_NAME/131      $1001=    ?0                   ?0                  	;0
2127 780   FETCH_DIM_FUNC_ARG/93     $1002=    16?19                $1001               	;1
2128 780   SEND_VAR_EX/66            ?80       $1002                ?1                  	;0
2129 780   DO_FCALL_BY_NAME/131      $1003=    ?0                   ?0                  	;0
2130 780   ASSIGN/38                 ?936      16?22                $1003               	;0
2131 781   INIT_FCALL_BY_NAME/59     ?0        ?0                   1453:'date'         	;2
2132 781   SEND_VAL_EX/116           ?80       1455:'Y-m-d H:i:s'   ?1                  	;0
2133 781   FETCH_DIM_FUNC_ARG/93     $1006=    16?21                1456:'start'        	;2
2134 781   SEND_VAR_EX/66            ?96       $1006                ?2                  	;0
2135 781   DO_FCALL_BY_NAME/131      $1007=    ?0                   ?0                  	;0
2136 781   ASSIGN_DIM/147            ?937      16?21                1452:'start'        	;0
2137 781   OP_DATA/137               ?0        $1007                ?0                  	;0
2138 782   INIT_FCALL_BY_NAME/59     ?0        ?0                   1458:'date'         	;2
2139 782   SEND_VAL_EX/116           ?80       1460:'Y-m-d H:i:s'   ?1                  	;0
2140 782   FETCH_DIM_FUNC_ARG/93     $1009=    16?21                1461:'end'          	;2
2141 782   SEND_VAR_EX/66            ?96       $1009                ?2                  	;0
2142 782   DO_FCALL_BY_NAME/131      $1010=    ?0                   ?0                  	;0
2143 782   ASSIGN_DIM/147            ?940      16?21                1457:'stop'         	;0
2144 782   OP_DATA/137               ?0        $1010                ?0                  	;0
2145 783   JMPZ/43                   ?0        16?16                ?2148               	;0	>>2148
2146 784   NOP/0                     ?0        ?0                   ?0                  	;1
2147 784   GOTO/253                  ?0        ?2153                ?1462               	;0
2148 786   FETCH_DIM_W/84            $1011=    16?7                 1463:'epg_listings' 	;0	<<2145
2149 786   ASSIGN_DIM/147            ?944      $1011                ?4397406            	;0
2150 786   OP_DATA/137               ?0        16?21                ?0                  	;0
2151 787   NOP/0                     ?0        ?0                   ?0                  	;1
2152 787   GOTO/253                  ?0        ?2157                ?1464               	;0
2153 789   FETCH_DIM_W/84            $1013=    16?7                 1465:'epg_listings' 	;0
2154 789   FETCH_DIM_W/84            $1014=    $1013                16?22               	;0
2155 789   ASSIGN_DIM/147            ?947      $1014                ?0                  	;0
2156 789   OP_DATA/137               ?0        16?21                ?0                  	;0
2157 791   JMP/42                    ?0        ?2116                ?0                  	;0	>>2116
2158 791   FE_FREE/127               ?0        $996                 ?0                  	;0	<<2115
2159 796   GOTO/253                  ?0        ?2111                ?1466               	;0
2160 797   GOTO/253                  ?0        ?1988                ?1467               	;0
2161 801   GOTO/253                  ?0        ?3630                ?1468               	;0
2162 802   GOTO/253                  ?0        ?2296                ?1469               	;0
2163 805   INIT_FCALL_BY_NAME/59     ?0        ?0                   1470:'count'        	;1
2164 805   SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
2165 805   DO_FCALL_BY_NAME/131      $1016=    ?0                   ?0                  	;0
2166 805   IS_SMALLER/19             #1017=    1472:0               $1016               	;0
2167 805   BOOL_NOT/13               #1018=    #1017                ?0                  	;0
2168 805   JMPZ/43                   ?0        #1018                ?2170               	;0	>>2170
2169 806   GOTO/253                  ?0        ?2161                ?1473               	;0
2170 808   FETCH_STATIC_PROP_R/173   $1019=    1474:'rCached'       1475:'XUI'          	;0	<<2168
2171 808   JMPZ/43                   ?0        $1019                ?2173               	;0	>>2173
2172 809   GOTO/253                  ?0        ?1988                ?1477               	;0
2173 811   ASSIGN/38                 ?952      16?19                1478:array (
)      	;0	<<2171
2174 812   FETCH_STATIC_PROP_R/173   $1021=    1479:'db'            1480:'XUI'          	;0
2175 812   INIT_METHOD_CALL/112      ?0        $1021                1482:'query'        	;1
2176 812   INIT_FCALL_BY_NAME/59     ?0        ?0                   1484:'implode'      	;2
2177 812   SEND_VAL_EX/116           ?80       1486:','             ?1                  	;0
2178 812   SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
2179 812   DO_FCALL_BY_NAME/131      $1022=    ?0                   ?0                  	;0
2180 812   CONCAT/8                  #1023=    1487:'SELECT `id`, `epg_id`, `channel_id` FROM `streams` WHERE `id` IN (' $1022               	;0
2181 812   CONCAT/8                  #1024=    #1023                1488:');'           	;0
2182 812   SEND_VAL_EX/116           ?80       #1024                ?1                  	;0
2183 812   DO_FCALL/60               ?957      ?0                   ?0                  	;0
2184 813   GOTO/253                  ?0        ?2217                ?1489               	;0
2185 815   ASSIGN_DIM/147            ?958      16?7                 1490:'epg_listings' 	;0
2186 815   OP_DATA/137               ?0        1491:array (
)       ?0                  	;0
2187 816   FETCH_STATIC_PROP_IS/176  $1027=    1492:'rRequest'      1493:'XUI'          	;0
2188 816   ISSET_ISEMPTY_DIM_OBJ/115 #1028=    $1027                1495:'stream_id'    	;16777216
2189 816   JMPZ/43                   ?0        #1028                ?2191               	;0	>>2191
2190 817   GOTO/253                  ?0        ?2161                ?1496               	;0
2191 819   FETCH_STATIC_PROP_IS/176  $1029=    1497:'rRequest'      1498:'XUI'          	;0	<<2189
2192 819   ISSET_ISEMPTY_DIM_OBJ/115 #1030=    $1029                1500:'limit'        	;16777216
2193 819   JMPZ/43                   ?0        #1030                ?2196               	;0	>>2196
2194 819   QM_ASSIGN/22              #1031=    1501:4               ?0                  	;0
2195 819   JMP/42                    ?0        ?2202                ?0                  	;0	>>2202
2196 819   INIT_FCALL_BY_NAME/59     ?0        ?0                   1502:'intval'       	;1	<<2193
2197 819   FETCH_STATIC_PROP_FUNC_ARG/177 $1032=    1504:'rRequest'      1505:'XUI'          	;1
2198 819   FETCH_DIM_FUNC_ARG/93     $1033=    $1032                1507:'limit'        	;1
2199 819   SEND_VAR_EX/66            ?80       $1033                ?1                  	;0
2200 819   DO_FCALL_BY_NAME/131      $1034=    ?0                   ?0                  	;0
2201 819   QM_ASSIGN/22              #1031=    $1034                ?0                  	;0
2202 819   ASSIGN/38                 ?967      16?15                #1031               	;0	<<2195
2203 820   INIT_FCALL_BY_NAME/59     ?0        ?0                   1508:'is_numeric'   	;1
2204 820   FETCH_STATIC_PROP_FUNC_ARG/177 $1036=    1510:'rRequest'      1511:'XUI'          	;1
2205 820   FETCH_DIM_FUNC_ARG/93     $1037=    $1036                1513:'stream_id'    	;1
2206 820   SEND_VAR_EX/66            ?80       $1037                ?1                  	;0
2207 820   DO_FCALL_BY_NAME/131      $1038=    ?0                   ?0                  	;0
2208 820   JMPZ_EX/46                #1039=    $1038                ?2213               	;0	>>2213
2209 820   FETCH_STATIC_PROP_IS/176  $1040=    1514:'rRequest'      1515:'XUI'          	;0
2210 820   ISSET_ISEMPTY_DIM_OBJ/115 #1041=    $1040                1517:'multi'        	;33554432
2211 820   BOOL_NOT/13               #1042=    #1041                ?0                  	;0
2212 820   BOOL/52                   #1039=    #1042                ?0                  	;0
2213 820   JMPZ/43                   ?0        #1039                ?2215               	;0	>>2215	<<2208
2214 821   GOTO/253                  ?0        ?2287                ?1518               	;0
2215 823   ASSIGN/38                 ?975      16?16                1519:true           	;0	<<2213
2216 824   GOTO/253                  ?0        ?2275                ?1520               	;0
2217 826   FETCH_STATIC_PROP_R/173   $1044=    1521:'db'            1522:'XUI'          	;0
2218 826   INIT_METHOD_CALL/112      ?0        $1044                1524:'get_rows'     	;0
2219 826   DO_FCALL/60               $1045=    ?0                   ?0                  	;0
2220 826   FE_RESET_R/77             $1046=    $1045                ?2235               	;0
2221 826   FE_FETCH_R/78             ?0        $1046                16?21               	;2235	>>2235	<<2234
2222 827   INIT_FCALL_BY_NAME/59     ?0        ?0                   1526:'str_replace'  	;3
2223 827   SEND_VAL_EX/116           ?80       1528:'\''            ?1                  	;0
2224 827   SEND_VAL_EX/116           ?96       1529:'\\\''          ?2                  	;0
2225 827   FETCH_DIM_R/81            $1047=    16?21                1530:'epg_id'       	;0
2226 827   CONCAT/8                  #1048=    $1047                1531:'_'            	;0
2227 827   FETCH_DIM_R/81            $1049=    16?21                1532:'channel_id'   	;0
2228 827   CONCAT/8                  #1050=    #1048                $1049               	;0
2229 827   SEND_VAL_EX/116           ?112      #1050                ?3                  	;0
2230 827   DO_FCALL_BY_NAME/131      $1051=    ?0                   ?0                  	;0
2231 827   FETCH_DIM_R/81            $1053=    16?21                1533:'id'           	;0
2232 827   ASSIGN_DIM/147            ?984      16?19                $1051               	;0
2233 827   OP_DATA/137               ?0        $1053                ?0                  	;0
2234 828   JMP/42                    ?0        ?2221                ?0                  	;0	>>2221
2235 828   FE_FREE/127               ?0        $1046                ?0                  	;0	<<2220
2236 831   INIT_FCALL_BY_NAME/59     ?0        ?0                   1534:'count'        	;1
2237 831   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
2238 831   DO_FCALL_BY_NAME/131      $1054=    ?0                   ?0                  	;0
2239 831   IS_SMALLER/19             #1055=    1536:0               $1054               	;0
2240 831   BOOL_NOT/13               #1056=    #1055                ?0                  	;0
2241 831   JMPZ/43                   ?0        #1056                ?2243               	;0	>>2243
2242 832   GOTO/253                  ?0        ?2159                ?1537               	;0
2243 834   FETCH_STATIC_PROP_R/173   $1057=    1538:'db'            1539:'XUI'          	;0	<<2241
2244 834   INIT_METHOD_CALL/112      ?0        $1057                1541:'query'        	;3
2245 834   INIT_FCALL_BY_NAME/59     ?0        ?0                   1543:'implode'      	;2
2246 834   SEND_VAL_EX/116           ?80       1545:'\',\''         ?1                  	;0
2247 834   INIT_FCALL_BY_NAME/59     ?0        ?0                   1546:'array_keys'   	;1
2248 834   SEND_VAR_EX/66            ?80       16?19                ?1                  	;0
2249 834   DO_FCALL_BY_NAME/131      $1058=    ?0                   ?0                  	;0
2250 834   SEND_VAR_NO_REF_EX/50     ?96       $1058                ?2                  	;0
2251 834   DO_FCALL_BY_NAME/131      $1059=    ?0                   ?0                  	;0
2252 834   CONCAT/8                  #1060=    1548:'SELECT `id`, `channel_id`, `epg_id`, `start`, `end`, `start` as `start_timestamp`, `end` as `stop_timestamp`, TO_BASE64(`title`) AS `title`, TO_BASE64(`description`) AS `description`, `lang` FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' $1059               	;0
2253 834   CONCAT/8                  #1061=    #1060                1549:'\') AND (? BETWEEN `start` AND `end` OR `start` >= ?) ORDER BY `start` LIMIT '	;0
2254 834   INIT_FCALL_BY_NAME/59     ?0        ?0                   1550:'intval'       	;1
2255 834   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
2256 834   DO_FCALL_BY_NAME/131      $1062=    ?0                   ?0                  	;0
2257 834   CONCAT/8                  #1063=    #1061                $1062               	;0
2258 834   CONCAT/8                  #1064=    #1063                1552:';'            	;0
2259 834   SEND_VAL_EX/116           ?80       #1064                ?1                  	;0
2260 834   INIT_FCALL_BY_NAME/59     ?0        ?0                   1553:'time'         	;0
2261 834   DO_FCALL_BY_NAME/131      $1065=    ?0                   ?0                  	;0
2262 834   SEND_VAR_NO_REF_EX/50     ?96       $1065                ?2                  	;0
2263 834   INIT_FCALL_BY_NAME/59     ?0        ?0                   1555:'time'         	;0
2264 834   DO_FCALL_BY_NAME/131      $1066=    ?0                   ?0                  	;0
2265 834   SEND_VAR_NO_REF_EX/50     ?112      $1066                ?3                  	;0
2266 834   DO_FCALL/60               ?999      ?0                   ?0                  	;0
2267 835   FETCH_STATIC_PROP_R/173   $1068=    1557:'db'            1558:'XUI'          	;0
2268 835   INIT_METHOD_CALL/112      ?0        $1068                1560:'num_rows'     	;0
2269 835   DO_FCALL/60               $1069=    ?0                   ?0                  	;0
2270 835   IS_SMALLER/19             #1070=    1562:0               $1069               	;0
2271 835   BOOL_NOT/13               #1071=    #1070                ?0                  	;0
2272 835   JMPZ/43                   ?0        #1071                ?2274               	;0	>>2274
2273 836   GOTO/253                  ?0        ?2159                ?1563               	;0
2274 838   GOTO/253                  ?0        ?2112                ?1564               	;0	<<2272
2275 840   INIT_FCALL_BY_NAME/59     ?0        ?0                   1565:'array_map'    	;2
2276 840   SEND_VAL_EX/116           ?80       1567:'intval'        ?1                  	;0
2277 840   INIT_FCALL_BY_NAME/59     ?0        ?0                   1568:'explode'      	;2
2278 840   SEND_VAL_EX/116           ?80       1570:','             ?1                  	;0
2279 840   FETCH_STATIC_PROP_FUNC_ARG/177 $1072=    1571:'rRequest'      1572:'XUI'          	;2
2280 840   FETCH_DIM_FUNC_ARG/93     $1073=    $1072                1574:'stream_id'    	;2
2281 840   SEND_VAR_EX/66            ?96       $1073                ?2                  	;0
2282 840   DO_FCALL_BY_NAME/131      $1074=    ?0                   ?0                  	;0
2283 840   SEND_VAR_NO_REF_EX/50     ?96       $1074                ?2                  	;0
2284 840   DO_FCALL_BY_NAME/131      $1075=    ?0                   ?0                  	;0
2285 840   ASSIGN/38                 ?1008     16?17                $1075               	;0
2286 841   GOTO/253                  ?0        ?2163                ?1575               	;0
2287 843   ASSIGN/38                 ?1009     16?16                1576:false          	;0
2288 844   INIT_FCALL_BY_NAME/59     ?0        ?0                   1577:'intval'       	;1
2289 844   FETCH_STATIC_PROP_FUNC_ARG/177 $1078=    1579:'rRequest'      1580:'XUI'          	;1
2290 844   FETCH_DIM_FUNC_ARG/93     $1079=    $1078                1582:'stream_id'    	;1
2291 844   SEND_VAR_EX/66            ?80       $1079                ?1                  	;0
2292 844   DO_FCALL_BY_NAME/131      $1080=    ?0                   ?0                  	;0
2293 844   INIT_ARRAY/71             #1081=    $1080                ?0                  	;4
2294 844   ASSIGN/38                 ?1014     16?17                #1081               	;0
2295 845   GOTO/253                  ?0        ?2163                ?1583               	;0
2296 848   GOTO/253                  ?0        ?2327                ?1584               	;0	<<268
2297 851   INIT_STATIC_METHOD_CALL/113 ?0        1586:'XUI'           1588:'Ee26f6aDbd1e84E9'	;1
2298 851   FETCH_DIM_FUNC_ARG/93     $1084=    16?6                 1590:'live_ids'     	;1
2299 851   SEND_VAR_EX/66            ?80       $1084                ?1                  	;0
2300 851   DO_FCALL/60               $1085=    ?0                   ?0                  	;0
2301 851   ASSIGN_DIM/147            ?1015     16?6                 1585:'live_ids'     	;0
2302 851   OP_DATA/137               ?0        $1085                ?0                  	;0
2303 852   FETCH_STATIC_PROP_R/173   $1086=    1591:'rCached'       1592:'XUI'          	;0
2304 852   BOOL_NOT/13               #1087=    $1086                ?0                  	;0
2305 852   JMPZ/43                   ?0        #1087                ?2307               	;0	>>2307
2306 853   GOTO/253                  ?0        ?2382                ?1594               	;0
2307 855   FETCH_DIM_R/81            $1088=    16?6                 1595:'live_ids'     	;0	<<2305
2308 855   ASSIGN/38                 ?1021     16?52                $1088               	;0
2309 856   GOTO/253                  ?0        ?2645                ?1596               	;0
2310 857   GOTO/253                  ?0        ?2382                ?1597               	;0
2311 859   FETCH_STATIC_PROP_R/173   $1090=    1598:'rSettings'     1599:'XUI'          	;0
2312 859   FETCH_DIM_R/81            $1091=    $1090                1601:'channel_number_type'	;0
2313 859   IS_NOT_EQUAL/18           #1092=    $1091                1602:'manual'       	;0
2314 859   JMPZ/43                   ?0        #1092                ?2316               	;0	>>2316
2315 860   GOTO/253                  ?0        ?2318                ?1603               	;0
2316 862   ASSIGN/38                 ?1025     16?53                1604:'`order`'      	;0	<<2314
2317 863   GOTO/253                  ?0        ?2631                ?1605               	;0
2318 865   INIT_FCALL_BY_NAME/59     ?0        ?0                   1606:'implode'      	;2
2319 865   SEND_VAL_EX/116           ?80       1608:','             ?1                  	;0
2320 865   FETCH_DIM_FUNC_ARG/93     $1094=    16?6                 1609:'live_ids'     	;2
2321 865   SEND_VAR_EX/66            ?96       $1094                ?2                  	;0
2322 865   DO_FCALL_BY_NAME/131      $1095=    ?0                   ?0                  	;0
2323 865   CONCAT/8                  #1096=    1610:'FIELD(`t1`.`id`,' $1095               	;0
2324 865   CONCAT/8                  #1097=    #1096                1611:')'            	;0
2325 865   ASSIGN/38                 ?1030     16?53                #1097               	;0
2326 866   GOTO/253                  ?0        ?2631                ?1612               	;0
2327 868   FETCH_STATIC_PROP_IS/176  $1099=    1613:'rRequest'      1614:'XUI'          	;0
2328 868   ISSET_ISEMPTY_DIM_OBJ/115 #1100=    $1099                1616:'category_id'  	;16777216
2329 868   JMPZ/43                   ?0        #1100                ?2332               	;0	>>2332
2330 868   QM_ASSIGN/22              #1101=    1617:NULL            ?0                  	;0
2331 868   JMP/42                    ?0        ?2338                ?0                  	;0	>>2338
2332 868   INIT_FCALL_BY_NAME/59     ?0        ?0                   1618:'intval'       	;1	<<2329
2333 868   FETCH_STATIC_PROP_FUNC_ARG/177 $1102=    1620:'rRequest'      1621:'XUI'          	;1
2334 868   FETCH_DIM_FUNC_ARG/93     $1103=    $1102                1623:'category_id'  	;1
2335 868   SEND_VAR_EX/66            ?80       $1103                ?1                  	;0
2336 868   DO_FCALL_BY_NAME/131      $1104=    ?0                   ?0                  	;0
2337 868   QM_ASSIGN/22              #1101=    $1104                ?0                  	;0
2338 868   ASSIGN/38                 ?1037     16?40                #1101               	;0	<<2331
2339 869   ASSIGN/38                 ?1038     16?54                1624:0              	;0
2340 870   INIT_FCALL_BY_NAME/59     ?0        ?0                   1626:'array_merge'  	;2
2341 870   FETCH_DIM_FUNC_ARG/93     $1108=    16?6                 1628:'live_ids'     	;1
2342 870   SEND_VAR_EX/66            ?80       $1108                ?1                  	;0
2343 870   FETCH_DIM_FUNC_ARG/93     $1109=    16?6                 1629:'radio_ids'    	;2
2344 870   SEND_VAR_EX/66            ?96       $1109                ?2                  	;0
2345 870   DO_FCALL_BY_NAME/131      $1110=    ?0                   ?0                  	;0
2346 870   ASSIGN_DIM/147            ?1039     16?6                 1625:'live_ids'     	;0
2347 870   OP_DATA/137               ?0        $1110                ?0                  	;0
2348 871   ISSET_ISEMPTY_DIM_OBJ/115 #1111=    16?14                1630:'items_per_page'	;16777216
2349 871   JMPZ/43                   ?0        #1111                ?2351               	;0	>>2351
2350 872   GOTO/253                  ?0        ?2297                ?1631               	;0
2351 874   INIT_FCALL_BY_NAME/59     ?0        ?0                   1633:'array_slice'  	;3	<<2349
2352 874   FETCH_DIM_FUNC_ARG/93     $1113=    16?6                 1635:'live_ids'     	;1
2353 874   SEND_VAR_EX/66            ?80       $1113                ?1                  	;0
2354 874   FETCH_DIM_FUNC_ARG/93     $1114=    16?14                1636:'offset'       	;2
2355 874   SEND_VAR_EX/66            ?96       $1114                ?2                  	;0
2356 874   FETCH_DIM_FUNC_ARG/93     $1115=    16?14                1637:'items_per_page'	;3
2357 874   SEND_VAR_EX/66            ?112      $1115                ?3                  	;0
2358 874   DO_FCALL_BY_NAME/131      $1116=    ?0                   ?0                  	;0
2359 874   ASSIGN_DIM/147            ?1044     16?6                 1632:'live_ids'     	;0
2360 874   OP_DATA/137               ?0        $1116                ?0                  	;0
2361 875   GOTO/253                  ?0        ?2297                ?1638               	;0
2362 877   ASSIGN_DIM/147            ?1049     16?55                ?0                  	;0
2363 877   OP_DATA/137               ?0        1639:'JSON_CONTAINS(`category_id`, ?, \'$\')' ?0                  	;0
2364 878   ASSIGN_DIM/147            ?1050     16?56                ?0                  	;0
2365 878   OP_DATA/137               ?0        16?40                ?0                  	;0
2366 880   INIT_FCALL_BY_NAME/59     ?0        ?0                   1640:'implode'      	;2
2367 880   SEND_VAL_EX/116           ?80       1642:','             ?1                  	;0
2368 880   FETCH_DIM_FUNC_ARG/93     $1120=    16?6                 1643:'live_ids'     	;2
2369 880   SEND_VAR_EX/66            ?96       $1120                ?2                  	;0
2370 880   DO_FCALL_BY_NAME/131      $1121=    ?0                   ?0                  	;0
2371 880   CONCAT/8                  #1122=    1644:'`t1`.`id` IN (' $1121               	;0
2372 880   CONCAT/8                  #1123=    #1122                1645:')'            	;0
2373 880   ASSIGN_DIM/147            ?1051     16?55                ?0                  	;0
2374 880   OP_DATA/137               ?0        #1123                ?0                  	;0
2375 881   INIT_FCALL_BY_NAME/59     ?0        ?0                   1646:'implode'      	;2
2376 881   SEND_VAL_EX/116           ?80       1648:' AND '         ?1                  	;0
2377 881   SEND_VAR_EX/66            ?96       16?55                ?2                  	;0
2378 881   DO_FCALL_BY_NAME/131      $1124=    ?0                   ?0                  	;0
2379 881   CONCAT/8                  #1125=    1649:'WHERE '        $1124               	;0
2380 881   ASSIGN/38                 ?1058     16?57                #1125               	;0
2381 882   GOTO/253                  ?0        ?2311                ?1650               	;0
2382 885   ASSIGN/38                 ?1059     16?52                1651:array (
)      	;0
2383 886   INIT_FCALL_BY_NAME/59     ?0        ?0                   1652:'count'        	;1
2384 886   FETCH_DIM_FUNC_ARG/93     $1128=    16?6                 1654:'live_ids'     	;1
2385 886   SEND_VAR_EX/66            ?80       $1128                ?1                  	;0
2386 886   DO_FCALL_BY_NAME/131      $1129=    ?0                   ?0                  	;0
2387 886   IS_SMALLER/19             #1130=    1655:0               $1129               	;0
2388 886   BOOL_NOT/13               #1131=    #1130                ?0                  	;0
2389 886   JMPZ/43                   ?0        #1131                ?2391               	;0	>>2391
2390 887   GOTO/253                  ?0        ?2645                ?1656               	;0
2391 889   ASSIGN/38                 $1132=    16?55                1657:array (
)      	;0	<<2389
2392 889   ASSIGN/38                 ?1065     16?56                $1132               	;0
2393 890   ISSET_ISEMPTY_CV/197      #1134=    16?40                ?0                  	;16777216
2394 890   JMPZ/43                   ?0        #1134                ?2396               	;0	>>2396
2395 891   GOTO/253                  ?0        ?2366                ?1658               	;0
2396 893   GOTO/253                  ?0        ?2362                ?1659               	;0	<<2394
2397 895   FE_RESET_R/77             $1135=    16?52                ?2628               	;0
2398 895   FE_FETCH_R/78             ?0        $1135                16?58               	;2628	>>2628	<<2627
2399 896   FETCH_STATIC_PROP_R/173   $1136=    1660:'rCached'       1661:'XUI'          	;0
2400 896   BOOL_NOT/13               #1137=    $1136                ?0                  	;0
2401 896   JMPZ/43                   ?0        #1137                ?2404               	;0	>>2404
2402 897   NOP/0                     ?0        ?0                   ?0                  	;1
2403 897   GOTO/253                  ?0        ?2418                ?1663               	;0
2404 899   INIT_FCALL_BY_NAME/59     ?0        ?0                   1664:'igbinary_unserialize'	;1	<<2401
2405 899   INIT_FCALL_BY_NAME/59     ?0        ?0                   1666:'file_get_contents'	;1
2406 899   FETCH_CONSTANT/99         #1138=    ?0                   1668:'STREAMS_TMP_PATH'	;16
2407 899   CONCAT/8                  #1139=    #1138                1671:'stream_'      	;0
2408 899   INIT_FCALL_BY_NAME/59     ?0        ?0                   1672:'intval'       	;1
2409 899   SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
2410 899   DO_FCALL_BY_NAME/131      $1140=    ?0                   ?0                  	;0
2411 899   CONCAT/8                  #1141=    #1139                $1140               	;0
2412 899   SEND_VAL_EX/116           ?80       #1141                ?1                  	;0
2413 899   DO_FCALL_BY_NAME/131      $1142=    ?0                   ?0                  	;0
2414 899   SEND_VAR_NO_REF_EX/50     ?80       $1142                ?1                  	;0
2415 899   DO_FCALL_BY_NAME/131      $1143=    ?0                   ?0                  	;0
2416 899   FETCH_DIM_R/81            $1144=    $1143                1674:'info'         	;0
2417 899   ASSIGN/38                 ?1077     16?58                $1144               	;0
2418 901   INIT_FCALL_BY_NAME/59     ?0        ?0                   1675:'in_array'     	;2
2419 901   FETCH_DIM_FUNC_ARG/93     $1146=    16?58                1677:'type_key'     	;1
2420 901   SEND_VAR_EX/66            ?80       $1146                ?1                  	;0
2421 901   SEND_VAL_EX/116           ?96       1678:array (
  0 => 'live',
  1 => 'created_live',
  2 => 'radio_streams',
) ?2                  	;0
2422 901   DO_FCALL_BY_NAME/131      $1147=    ?0                   ?0                  	;0
2423 901   JMPZ/43                   ?0        $1147                ?2426               	;0	>>2426
2424 902   NOP/0                     ?0        ?0                   ?0                  	;1
2425 902   GOTO/253                  ?0        ?2428                ?1679               	;0
2426 904   NOP/0                     ?0        ?0                   ?0                  	;1	<<2423
2427 904   GOTO/253                  ?0        ?2627                ?1680               	;0
2428 906   INIT_FCALL_BY_NAME/59     ?0        ?0                   1681:'json_decode'  	;2
2429 906   FETCH_DIM_FUNC_ARG/93     $1148=    16?58                1683:'category_id'  	;1
2430 906   SEND_VAR_EX/66            ?80       $1148                ?1                  	;0
2431 906   SEND_VAL_EX/116           ?96       1684:true            ?2                  	;0
2432 906   DO_FCALL_BY_NAME/131      $1149=    ?0                   ?0                  	;0
2433 906   ASSIGN/38                 ?1082     16?44                $1149               	;0
2434 907   FE_RESET_R/77             $1151=    16?44                ?2626               	;0
2435 907   FE_FETCH_R/78             ?0        $1151                16?45               	;2626	>>2626	<<2625
2436 908   NOP/0                     ?0        ?0                   ?0                  	;1
2437 908   NOP/0                     ?0        ?0                   ?0                  	;1
2438 908   GOTO/253                  ?0        ?2588                ?1685               	;0
2439 910   FETCH_DIM_R/81            $1152=    16?6                 1686:'username'     	;0
2440 910   ROPE_INIT/54              #1156=    ?0                   1687:'thumb/'       	;6
2441 910   ROPE_ADD/55               #1156=    #1156                $1152               	;1
2442 910   FETCH_DIM_R/81            $1153=    16?6                 1688:'password'     	;0
2443 910   ROPE_ADD/55               #1156=    #1156                1689:'/'            	;2
2444 910   ROPE_ADD/55               #1156=    #1156                $1153               	;3
2445 910   FETCH_DIM_R/81            $1154=    16?58                1690:'id'           	;0
2446 910   ROPE_ADD/55               #1156=    #1156                1691:'/'            	;4
2447 910   ROPE_END/56               #1155=    #1156                $1154               	;5
2448 910   ASSIGN/38                 ?1091     16?33                #1155               	;0
2449 911   INIT_STATIC_METHOD_CALL/113 ?0        1692:'Xui\\Functions' 1694:'encrypt'      	;3
2450 911   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
2451 911   FETCH_STATIC_PROP_FUNC_ARG/177 $1160=    1696:'rSettings'     1697:'XUI'          	;2
2452 911   FETCH_DIM_FUNC_ARG/93     $1161=    $1160                1699:'live_streaming_pass'	;2
2453 911   SEND_VAR_EX/66            ?96       $1161                ?2                  	;0
2454 911   FETCH_CONSTANT/99         #1162=    ?0                   1700:'OPENSSL_EXTRA'	;16
2455 911   SEND_VAL_EX/116           ?112      #1162                ?3                  	;0
2456 911   DO_FCALL/60               $1163=    ?0                   ?0                  	;0
2457 911   ASSIGN/38                 ?1096     16?5                 $1163               	;0
2458 912   NOP/0                     ?0        ?0                   ?0                  	;0
2459 912   FAST_CONCAT/53            #1165=    1703:'play/'         16?5                	;0
2460 912   CONCAT/8                  #1166=    16?35                #1165               	;0
2461 912   ASSIGN/38                 ?1099     16?59                #1166               	;0
2462 914   PRE_INC/34                $1169=    16?54                ?0                  	;0
2463 914   INIT_ARRAY/71             #1170=    $1169                1704:'num'          	;58
2464 914   FETCH_DIM_R/81            $1171=    16?58                1705:'stream_display_name'	;0
2465 914   ADD_ARRAY_ELEMENT/72      #1170=    $1171                1706:'name'         	;0
2466 914   FETCH_DIM_R/81            $1172=    16?58                1707:'type_key'     	;0
2467 914   ADD_ARRAY_ELEMENT/72      #1170=    $1172                1708:'stream_type'  	;0
2468 914   FETCH_DIM_R/81            $1173=    16?58                1709:'id'           	;0
2469 914   CAST/21                   #1174=    $1173                ?0                  	;4
2470 914   ADD_ARRAY_ELEMENT/72      #1170=    #1174                1710:'stream_id'    	;0
2471 914   ADD_ARRAY_ELEMENT/72      #1170=    16?60                1711:'stream_icon'  	;0
2472 914   FETCH_DIM_R/81            $1175=    16?58                1712:'channel_id'   	;0
2473 914   ADD_ARRAY_ELEMENT/72      #1170=    $1175                1713:'epg_channel_id'	;0
2474 914   FETCH_DIM_R/81            $1176=    16?58                1714:'added'        	;0
2475 914   JMP_SET/152               #1177=    $1176                ?2477               	;0
2476 914   QM_ASSIGN/22              #1177=    1715:''              ?0                  	;0
2477 914   ADD_ARRAY_ELEMENT/72      #1170=    #1177                1716:'added'        	;0
2478 914   INIT_FCALL_BY_NAME/59     ?0        ?0                   1717:'strval'       	;1
2479 914   FETCH_DIM_FUNC_ARG/93     $1178=    16?58                1719:'custom_sid'   	;1
2480 914   SEND_VAR_EX/66            ?80       $1178                ?1                  	;0
2481 914   DO_FCALL_BY_NAME/131      $1179=    ?0                   ?0                  	;0
2482 914   ADD_ARRAY_ELEMENT/72      #1170=    $1179                1720:'custom_sid'   	;0
2483 914   ADD_ARRAY_ELEMENT/72      #1170=    16?61                1721:'tv_archive'   	;0
2484 914   ADD_ARRAY_ELEMENT/72      #1170=    16?32                1722:'direct_source'	;0
2485 914   JMPZ/43                   ?0        16?61                ?2492               	;0	>>2492
2486 914   INIT_FCALL_BY_NAME/59     ?0        ?0                   1723:'intval'       	;1
2487 914   FETCH_DIM_FUNC_ARG/93     $1180=    16?58                1725:'tv_archive_duration'	;1
2488 914   SEND_VAR_EX/66            ?80       $1180                ?1                  	;0
2489 914   DO_FCALL_BY_NAME/131      $1181=    ?0                   ?0                  	;0
2490 914   QM_ASSIGN/22              #1182=    $1181                ?0                  	;0
2491 914   JMP/42                    ?0        ?2493                ?0                  	;0	>>2493
2492 914   QM_ASSIGN/22              #1182=    1726:0               ?0                  	;0	<<2485
2493 914   ADD_ARRAY_ELEMENT/72      #1170=    #1182                1727:'tv_archive_duration'	;0	<<2491
2494 914   INIT_FCALL_BY_NAME/59     ?0        ?0                   1728:'strval'       	;1
2495 914   SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
2496 914   DO_FCALL_BY_NAME/131      $1183=    ?0                   ?0                  	;0
2497 914   ADD_ARRAY_ELEMENT/72      #1170=    $1183                1730:'category_id'  	;0
2498 914   ADD_ARRAY_ELEMENT/72      #1170=    16?44                1731:'category_ids' 	;0
2499 914   ADD_ARRAY_ELEMENT/72      #1170=    16?59                1732:'thumbnail'    	;0
2500 914   ASSIGN_DIM/147            ?1100     16?7                 ?2670194016         	;0
2501 914   OP_DATA/137               ?0        #1170                ?0                  	;0
2502 915   NOP/0                     ?0        ?0                   ?0                  	;1
2503 915   NOP/0                     ?0        ?0                   ?0                  	;1
2504 915   GOTO/253                  ?0        ?2571                ?1733               	;0
2505 917   NOP/0                     ?0        ?0                   ?0                  	;1
2506 917   NOP/0                     ?0        ?0                   ?0                  	;1
2507 917   GOTO/253                  ?0        ?2559                ?1734               	;0
2508 919   FETCH_DIM_R/81            $1184=    16?6                 1735:'username'     	;0
2509 919   ROPE_INIT/54              #1188=    ?0                   1736:'live/'        	;6
2510 919   ROPE_ADD/55               #1188=    #1188                $1184               	;1
2511 919   FETCH_DIM_R/81            $1185=    16?6                 1737:'password'     	;0
2512 919   ROPE_ADD/55               #1188=    #1188                1738:'/'            	;2
2513 919   ROPE_ADD/55               #1188=    #1188                $1185               	;3
2514 919   FETCH_DIM_R/81            $1186=    16?58                1739:'id'           	;0
2515 919   ROPE_ADD/55               #1188=    #1188                1740:'/'            	;4
2516 919   ROPE_END/56               #1187=    #1188                $1186               	;5
2517 919   ASSIGN/38                 ?1123     16?33                #1187               	;0
2518 920   INIT_STATIC_METHOD_CALL/113 ?0        1741:'Xui\\Functions' 1743:'encrypt'      	;3
2519 920   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
2520 920   FETCH_STATIC_PROP_FUNC_ARG/177 $1192=    1745:'rSettings'     1746:'XUI'          	;2
2521 920   FETCH_DIM_FUNC_ARG/93     $1193=    $1192                1748:'live_streaming_pass'	;2
2522 920   SEND_VAR_EX/66            ?96       $1193                ?2                  	;0
2523 920   FETCH_CONSTANT/99         #1194=    ?0                   1749:'OPENSSL_EXTRA'	;16
2524 920   SEND_VAL_EX/116           ?112      #1194                ?3                  	;0
2525 920   DO_FCALL/60               $1195=    ?0                   ?0                  	;0
2526 920   ASSIGN/38                 ?1128     16?5                 $1195               	;0
2527 921   FETCH_STATIC_PROP_R/173   $1197=    1752:'rSettings'     1753:'XUI'          	;0
2528 921   FETCH_DIM_R/81            $1198=    $1197                1755:'cloudflare'   	;0
2529 921   JMPZ_EX/46                #1199=    $1198                ?2534               	;0	>>2534
2530 921   FETCH_STATIC_PROP_R/173   $1200=    1756:'rSettings'     1757:'XUI'          	;0
2531 921   FETCH_DIM_R/81            $1201=    $1200                1759:'api_container'	;0
2532 921   IS_EQUAL/17               #1202=    $1201                1760:'ts'           	;0
2533 921   BOOL/52                   #1199=    #1202                ?0                  	;0
2534 921   JMPZ/43                   ?0        #1199                ?2538               	;0	>>2538	<<2529
2535 922   NOP/0                     ?0        ?0                   ?0                  	;1
2536 922   NOP/0                     ?0        ?0                   ?0                  	;1
2537 922   GOTO/253                  ?0        ?2552                ?1761               	;0
2538 924   NOP/0                     ?0        ?0                   ?0                  	;1	<<2534
2539 924   NOP/0                     ?0        ?0                   ?0                  	;1
2540 924   GOTO/253                  ?0        ?2541                ?1762               	;0
2541 926   ROPE_INIT/54              #1204=    ?0                   1763:'play/'        	;3
2542 926   ROPE_ADD/55               #1204=    #1204                16?5                	;1
2543 926   ROPE_END/56               #1203=    #1204                1764:'/'            	;2
2544 926   CONCAT/8                  #1206=    16?35                #1203               	;0
2545 926   FETCH_STATIC_PROP_R/173   $1207=    1765:'rSettings'     1766:'XUI'          	;0
2546 926   FETCH_DIM_R/81            $1208=    $1207                1768:'api_container'	;0
2547 926   CONCAT/8                  #1209=    #1206                $1208               	;0
2548 926   ASSIGN/38                 ?1142     16?32                #1209               	;0
2549 927   NOP/0                     ?0        ?0                   ?0                  	;1
2550 927   NOP/0                     ?0        ?0                   ?0                  	;1
2551 927   GOTO/253                  ?0        ?2556                ?1769               	;0
2552 929   NOP/0                     ?0        ?0                   ?0                  	;0
2553 929   FAST_CONCAT/53            #1211=    1770:'play/'         16?5                	;0
2554 929   CONCAT/8                  #1212=    16?35                #1211               	;0
2555 929   ASSIGN/38                 ?1145     16?32                #1212               	;0
2556 931   NOP/0                     ?0        ?0                   ?0                  	;1
2557 931   NOP/0                     ?0        ?0                   ?0                  	;1
2558 931   GOTO/253                  ?0        ?2559                ?1771               	;0
2559 934   FETCH_DIM_R/81            $1214=    16?58                1772:'vframes_server_id'	;0
2560 934   JMPZ/43                   ?0        $1214                ?2564               	;0	>>2564
2561 935   NOP/0                     ?0        ?0                   ?0                  	;1
2562 935   NOP/0                     ?0        ?0                   ?0                  	;1
2563 935   GOTO/253                  ?0        ?2568                ?1773               	;0
2564 937   ASSIGN/38                 ?1147     16?59                1774:''             	;0	<<2560
2565 938   NOP/0                     ?0        ?0                   ?0                  	;1
2566 938   NOP/0                     ?0        ?0                   ?0                  	;1
2567 938   GOTO/253                  ?0        ?2462                ?1775               	;0
2568 940   NOP/0                     ?0        ?0                   ?0                  	;1
2569 940   NOP/0                     ?0        ?0                   ?0                  	;1
2570 940   GOTO/253                  ?0        ?2439                ?1776               	;0
2571 943   BOOL_NOT/13               #1216=    16?40                ?0                  	;0
2572 943   JMPZ_EX/46                #1216=    #1216                ?2577               	;0	>>2577
2573 943   FETCH_STATIC_PROP_R/173   $1217=    1777:'rSettings'     1778:'XUI'          	;0
2574 943   FETCH_DIM_R/81            $1218=    $1217                1780:'show_category_duplicates'	;0
2575 943   BOOL_NOT/13               #1219=    $1218                ?0                  	;0
2576 943   BOOL/52                   #1216=    #1219                ?0                  	;0
2577 943   BOOL_NOT/13               #1220=    #1216                ?0                  	;0	<<2572
2578 943   JMPZ/43                   ?0        #1220                ?2582               	;0	>>2582
2579 944   NOP/0                     ?0        ?0                   ?0                  	;1
2580 944   NOP/0                     ?0        ?0                   ?0                  	;1
2581 944   GOTO/253                  ?0        ?2585                ?1781               	;0
2582 946   FE_FREE/127               ?0        $1151                ?81                 	;1	<<2578
2583 946   NOP/0                     ?0        ?0                   ?0                  	;1
2584 946   GOTO/253                  ?0        ?2627                ?1782               	;0
2585 949   NOP/0                     ?0        ?0                   ?0                  	;1
2586 949   NOP/0                     ?0        ?0                   ?0                  	;1
2587 949   GOTO/253                  ?0        ?2625                ?1783               	;0
2588 951   BOOL_NOT/13               #1221=    16?40                ?0                  	;0
2589 951   JMPNZ_EX/47               #1221=    #1221                ?2592               	;0	>>2592
2590 951   IS_EQUAL/17               #1222=    16?40                16?45               	;0
2591 951   BOOL/52                   #1221=    #1222                ?0                  	;0
2592 951   BOOL_NOT/13               #1223=    #1221                ?0                  	;0	<<2589
2593 951   JMPZ/43                   ?0        #1223                ?2597               	;0	>>2597
2594 952   NOP/0                     ?0        ?0                   ?0                  	;1
2595 952   NOP/0                     ?0        ?0                   ?0                  	;1
2596 952   GOTO/253                  ?0        ?2571                ?1784               	;0
2597 954   INIT_STATIC_METHOD_CALL/113 ?0        1785:'XUI'           1787:'fCA722697178454b'	;1	<<2593
2598 954   FETCH_DIM_FUNC_ARG/93     $1224=    16?58                1789:'stream_icon'  	;1
2599 954   SEND_VAR_EX/66            ?80       $1224                ?1                  	;0
2600 954   DO_FCALL/60               $1225=    ?0                   ?0                  	;0
2601 954   JMP_SET/152               #1226=    $1225                ?2603               	;0
2602 954   QM_ASSIGN/22              #1226=    1790:''              ?0                  	;0
2603 954   ASSIGN/38                 ?1159     16?60                #1226               	;0
2604 955   ISSET_ISEMPTY_DIM_OBJ/115 #1228=    16?58                1791:'tv_archive_server_id'	;16777216
2605 955   BOOL_NOT/13               #1229=    #1228                ?0                  	;0
2606 955   JMPZ_EX/46                #1229=    #1229                ?2610               	;0	>>2610
2607 955   ISSET_ISEMPTY_DIM_OBJ/115 #1230=    16?58                1792:'tv_archive_duration'	;16777216
2608 955   BOOL_NOT/13               #1231=    #1230                ?0                  	;0
2609 955   BOOL/52                   #1229=    #1231                ?0                  	;0
2610 955   JMPZ/43                   ?0        #1229                ?2613               	;0	>>2613	<<2606
2611 955   QM_ASSIGN/22              #1232=    1793:1               ?0                  	;0
2612 955   JMP/42                    ?0        ?2614                ?0                  	;0	>>2614
2613 955   QM_ASSIGN/22              #1232=    1794:0               ?0                  	;0	<<2610
2614 955   ASSIGN/38                 ?1165     16?61                #1232               	;0	<<2612
2615 956   FETCH_STATIC_PROP_R/173   $1234=    1795:'rSettings'     1796:'XUI'          	;0
2616 956   FETCH_DIM_R/81            $1235=    $1234                1798:'api_redirect' 	;0
2617 956   JMPZ/43                   ?0        $1235                ?2621               	;0	>>2621
2618 957   NOP/0                     ?0        ?0                   ?0                  	;1
2619 957   NOP/0                     ?0        ?0                   ?0                  	;1
2620 957   GOTO/253                  ?0        ?2508                ?1799               	;0
2621 959   ASSIGN/38                 ?1168     16?32                1800:''             	;0	<<2617
2622 960   NOP/0                     ?0        ?0                   ?0                  	;1
2623 960   NOP/0                     ?0        ?0                   ?0                  	;1
2624 960   GOTO/253                  ?0        ?2505                ?1801               	;0
2625 961   JMP/42                    ?0        ?2435                ?0                  	;0	>>2435
2626 961   FE_FREE/127               ?0        $1151                ?0                  	;0	<<2434
2627 964   JMP/42                    ?0        ?2398                ?0                  	;0	>>2398
2628 964   FE_FREE/127               ?0        $1135                ?0                  	;0	<<2397
2629 967   GOTO/253                  ?0        ?3630                ?1802               	;0
2630 968   GOTO/253                  ?0        ?2646                ?1803               	;0
2631 971   FETCH_STATIC_PROP_R/173   $1237=    1804:'db'            1805:'XUI'          	;0
2632 971   INIT_METHOD_CALL/112      ?0        $1237                1807:'query'        	;1
2633 971   ROPE_INIT/54              #1239=    ?0                   1809:'SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type '	;5
2634 971   ROPE_ADD/55               #1239=    #1239                16?57               	;1
2635 971   ROPE_ADD/55               #1239=    #1239                1810:' ORDER BY '   	;2
2636 971   ROPE_ADD/55               #1239=    #1239                16?53               	;3
2637 971   ROPE_END/56               #1238=    #1239                1811:';'            	;4
2638 971   SEND_VAL_EX/116           ?80       #1238                ?1                  	;0
2639 971   SEND_UNPACK/165           ?80       16?56                ?1                  	;0
2640 971   DO_FCALL/60               ?1174     ?0                   ?0                  	;0
2641 972   FETCH_STATIC_PROP_R/173   $1243=    1812:'db'            1813:'XUI'          	;0
2642 972   INIT_METHOD_CALL/112      ?0        $1243                1815:'get_rows'     	;0
2643 972   DO_FCALL/60               $1244=    ?0                   ?0                  	;0
2644 972   ASSIGN/38                 ?1177     16?52                $1244               	;0
2645 975   GOTO/253                  ?0        ?2397                ?1817               	;0
2646 978   GOTO/253                  ?0        ?2647                ?1818               	;0	<<270
2647 980   ASSIGN_DIM/147            ?1178     16?7                 1819:'info'         	;0
2648 980   OP_DATA/137               ?0        1820:array (
)       ?0                  	;0
2649 981   FETCH_STATIC_PROP_IS/176  $1247=    1821:'rRequest'      1822:'XUI'          	;0
2650 981   ISSET_ISEMPTY_DIM_OBJ/115 #1248=    $1247                1824:'vod_id'       	;16777216
2651 981   JMPZ/43                   ?0        #1248                ?2653               	;0	>>2653
2652 982   GOTO/253                  ?0        ?2834                ?1825               	;0
2653 984   INIT_FCALL_BY_NAME/59     ?0        ?0                   1826:'intval'       	;1	<<2651
2654 984   FETCH_STATIC_PROP_FUNC_ARG/177 $1249=    1828:'rRequest'      1829:'XUI'          	;1
2655 984   FETCH_DIM_FUNC_ARG/93     $1250=    $1249                1831:'vod_id'       	;1
2656 984   SEND_VAR_EX/66            ?80       $1250                ?1                  	;0
2657 984   DO_FCALL_BY_NAME/131      $1251=    ?0                   ?0                  	;0
2658 984   ASSIGN/38                 ?1184     16?62                $1251               	;0
2659 985   FETCH_STATIC_PROP_R/173   $1253=    1832:'rCached'       1833:'XUI'          	;0
2660 985   JMPZ/43                   ?0        $1253                ?2662               	;0	>>2662
2661 986   GOTO/253                  ?0        ?2819                ?1835               	;0
2662 988   FETCH_STATIC_PROP_R/173   $1254=    1836:'db'            1837:'XUI'          	;0	<<2660
2663 988   INIT_METHOD_CALL/112      ?0        $1254                1839:'query'        	;2
2664 988   SEND_VAL_EX/116           ?80       1841:'SELECT * FROM `streams` WHERE `id` = ?' ?1                  	;0
2665 988   SEND_VAR_EX/66            ?96       16?62                ?2                  	;0
2666 988   DO_FCALL/60               ?1187     ?0                   ?0                  	;0
2667 989   GOTO/253                  ?0        ?2814                ?1842               	;0
2668 991   FETCH_DIM_R/81            $1256=    16?6                 1843:'username'     	;0
2669 991   ROPE_INIT/54              #1261=    ?0                   1844:'movie/'       	;8
2670 991   ROPE_ADD/55               #1261=    #1261                $1256               	;1
2671 991   FETCH_DIM_R/81            $1257=    16?6                 1845:'password'     	;0
2672 991   ROPE_ADD/55               #1261=    #1261                1846:'/'            	;2
2673 991   ROPE_ADD/55               #1261=    #1261                $1257               	;3
2674 991   FETCH_DIM_R/81            $1258=    16?21                1847:'id'           	;0
2675 991   ROPE_ADD/55               #1261=    #1261                1848:'/'            	;4
2676 991   ROPE_ADD/55               #1261=    #1261                $1258               	;5
2677 991   FETCH_DIM_R/81            $1259=    16?21                1849:'target_container'	;0
2678 991   ROPE_ADD/55               #1261=    #1261                1850:'/'            	;6
2679 991   ROPE_END/56               #1260=    #1261                $1259               	;7
2680 991   ASSIGN/38                 ?1197     16?33                #1260               	;0
2681 992   INIT_STATIC_METHOD_CALL/113 ?0        1851:'Xui\\Functions' 1853:'encrypt'      	;3
2682 992   SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
2683 992   FETCH_STATIC_PROP_FUNC_ARG/177 $1266=    1855:'rSettings'     1856:'XUI'          	;2
2684 992   FETCH_DIM_FUNC_ARG/93     $1267=    $1266                1858:'live_streaming_pass'	;2
2685 992   SEND_VAR_EX/66            ?96       $1267                ?2                  	;0
2686 992   FETCH_CONSTANT/99         #1268=    ?0                   1859:'OPENSSL_EXTRA'	;16
2687 992   SEND_VAL_EX/116           ?112      #1268                ?3                  	;0
2688 992   DO_FCALL/60               $1269=    ?0                   ?0                  	;0
2689 992   ASSIGN/38                 ?1202     16?5                 $1269               	;0
2690 993   NOP/0                     ?0        ?0                   ?0                  	;0
2691 993   FAST_CONCAT/53            #1271=    1862:'play/'         16?5                	;0
2692 993   CONCAT/8                  #1272=    16?35                #1271               	;0
2693 993   ASSIGN/38                 ?1205     16?32                #1272               	;0
2694 995   INIT_FCALL_BY_NAME/59     ?0        ?0                   1864:'json_decode'  	;2
2695 995   FETCH_DIM_FUNC_ARG/93     $1275=    16?21                1866:'movie_properties'	;1
2696 995   SEND_VAR_EX/66            ?80       $1275                ?1                  	;0
2697 995   SEND_VAL_EX/116           ?96       1867:true            ?2                  	;0
2698 995   DO_FCALL_BY_NAME/131      $1276=    ?0                   ?0                  	;0
2699 995   ASSIGN_DIM/147            ?1206     16?7                 1863:'info'         	;0
2700 995   OP_DATA/137               ?0        $1276                ?0                  	;0
2701 996   GOTO/253                  ?0        ?2836                ?1868               	;0
2702 999   FE_RESET_R/77             $1277=    1869:array (
  0 => 'audio',
  1 => 'video',
  2 => 'subtitle',
) ?2713               	;0
2703 999   FE_FETCH_R/78             ?0        $1277                16?39               	;2713	>>2713	<<2712
2704 1000  FETCH_DIM_IS/90           $1278=    16?7                 1870:'info'         	;0
2705 1000  ISSET_ISEMPTY_DIM_OBJ/115 #1279=    $1278                16?39               	;33554432
2706 1000  BOOL_NOT/13               #1280=    #1279                ?0                  	;0
2707 1000  JMPZ/43                   ?0        #1280                ?2710               	;0	>>2710
2708 1001  NOP/0                     ?0        ?0                   ?0                  	;1
2709 1001  GOTO/253                  ?0        ?2712                ?1871               	;0
2710 1003  FETCH_DIM_UNSET/96        $1281=    16?7                 1872:'info'         	;0	<<2707
2711 1003  UNSET_DIM/75              ?0        $1281                16?39               	;0
2712 1005  JMP/42                    ?0        ?2703                ?0                  	;0	>>2703
2713 1005  FE_FREE/127               ?0        $1277                ?0                  	;0	<<2702
2714 1008  FETCH_DIM_R/81            $1283=    16?21                1874:'id'           	;0
2715 1008  CAST/21                   #1284=    $1283                ?0                  	;4
2716 1008  INIT_ARRAY/71             #1285=    #1284                1875:'stream_id'    	;42
2717 1008  INIT_STATIC_METHOD_CALL/113 ?0        1876:'XUI'           1878:'CF5D4a2f3de8982c'	;2
2718 1008  FETCH_DIM_FUNC_ARG/93     $1286=    16?21                1880:'stream_display_name'	;1
2719 1008  SEND_VAR_EX/66            ?80       $1286                ?1                  	;0
2720 1008  FETCH_DIM_FUNC_ARG/93     $1287=    16?21                1881:'year'         	;2
2721 1008  SEND_VAR_EX/66            ?96       $1287                ?2                  	;0
2722 1008  DO_FCALL/60               $1288=    ?0                   ?0                  	;0
2723 1008  ADD_ARRAY_ELEMENT/72      #1285=    $1288                1882:'name'         	;0
2724 1008  FETCH_DIM_R/81            $1289=    16?21                1883:'stream_display_name'	;0
2725 1008  ADD_ARRAY_ELEMENT/72      #1285=    $1289                1884:'title'        	;0
2726 1008  FETCH_DIM_R/81            $1290=    16?21                1885:'year'         	;0
2727 1008  ADD_ARRAY_ELEMENT/72      #1285=    $1290                1886:'year'         	;0
2728 1008  FETCH_DIM_R/81            $1291=    16?21                1887:'added'        	;0
2729 1008  JMP_SET/152               #1292=    $1291                ?2731               	;0
2730 1008  QM_ASSIGN/22              #1292=    1888:''              ?0                  	;0
2731 1008  ADD_ARRAY_ELEMENT/72      #1285=    #1292                1889:'added'        	;0
2732 1008  INIT_FCALL_BY_NAME/59     ?0        ?0                   1890:'strval'       	;1
2733 1008  INIT_FCALL_BY_NAME/59     ?0        ?0                   1892:'json_decode'  	;2
2734 1008  FETCH_DIM_FUNC_ARG/93     $1293=    16?21                1894:'category_id'  	;1
2735 1008  SEND_VAR_EX/66            ?80       $1293                ?1                  	;0
2736 1008  SEND_VAL_EX/116           ?96       1895:true            ?2                  	;0
2737 1008  DO_FCALL_BY_NAME/131      $1294=    ?0                   ?0                  	;0
2738 1008  SEPARATE/156              $1294=    $1294                ?0                  	;0
2739 1008  FETCH_DIM_FUNC_ARG/93     $1295=    $1294                1896:0              	;1
2740 1008  SEND_VAR_EX/66            ?80       $1295                ?1                  	;0
2741 1008  DO_FCALL_BY_NAME/131      $1296=    ?0                   ?0                  	;0
2742 1008  ADD_ARRAY_ELEMENT/72      #1285=    $1296                1897:'category_id'  	;0
2743 1008  INIT_FCALL_BY_NAME/59     ?0        ?0                   1898:'json_decode'  	;2
2744 1008  FETCH_DIM_FUNC_ARG/93     $1297=    16?21                1900:'category_id'  	;1
2745 1008  SEND_VAR_EX/66            ?80       $1297                ?1                  	;0
2746 1008  SEND_VAL_EX/116           ?96       1901:true            ?2                  	;0
2747 1008  DO_FCALL_BY_NAME/131      $1298=    ?0                   ?0                  	;0
2748 1008  ADD_ARRAY_ELEMENT/72      #1285=    $1298                1902:'category_ids' 	;0
2749 1008  FETCH_DIM_R/81            $1299=    16?21                1903:'target_container'	;0
2750 1008  ADD_ARRAY_ELEMENT/72      #1285=    $1299                1904:'container_extension'	;0
2751 1008  INIT_FCALL_BY_NAME/59     ?0        ?0                   1905:'strval'       	;1
2752 1008  FETCH_DIM_FUNC_ARG/93     $1300=    16?21                1907:'custom_sid'   	;1
2753 1008  SEND_VAR_EX/66            ?80       $1300                ?1                  	;0
2754 1008  DO_FCALL_BY_NAME/131      $1301=    ?0                   ?0                  	;0
2755 1008  ADD_ARRAY_ELEMENT/72      #1285=    $1301                1908:'custom_sid'   	;0
2756 1008  ADD_ARRAY_ELEMENT/72      #1285=    16?32                1909:'direct_source'	;0
2757 1008  ASSIGN_DIM/147            ?1214     16?7                 1873:'movie_data'   	;0
2758 1008  OP_DATA/137               ?0        #1285                ?0                  	;0
2759 1010  GOTO/253                  ?0        ?2834                ?1910               	;0
2760 1012  BOOL_NOT/13               #1302=    16?21                ?0                  	;0
2761 1012  JMPZ/43                   ?0        #1302                ?2763               	;0	>>2763
2762 1013  GOTO/253                  ?0        ?2759                ?1911               	;0
2763 1015  FETCH_STATIC_PROP_R/173   $1303=    1912:'rSettings'     1913:'XUI'          	;0	<<2761
2764 1015  FETCH_DIM_R/81            $1304=    $1303                1915:'api_redirect' 	;0
2765 1015  JMPZ/43                   ?0        $1304                ?2767               	;0	>>2767
2766 1016  GOTO/253                  ?0        ?2769                ?1916               	;0
2767 1018  ASSIGN/38                 ?1237     16?32                1917:''             	;0	<<2765
2768 1019  GOTO/253                  ?0        ?2694                ?1918               	;0
2769 1021  GOTO/253                  ?0        ?2668                ?1919               	;0
2770 1023  INIT_FCALL_BY_NAME/59     ?0        ?0                   1922:'number_format'	;2
2771 1023  FETCH_DIM_FUNC_ARG/93     $1308=    16?7                 1924:'info'         	;1
2772 1023  FETCH_DIM_FUNC_ARG/93     $1309=    $1308                1925:'rating'       	;1
2773 1023  SEND_VAR_EX/66            ?80       $1309                ?1                  	;0
2774 1023  SEND_VAL_EX/116           ?96       1926:2               ?2                  	;0
2775 1023  DO_FCALL_BY_NAME/131      $1310=    ?0                   ?0                  	;0
2776 1023  ADD/1                     #1311=    $1310                1927:0              	;0
2777 1023  FETCH_DIM_W/84            $1306=    16?7                 1920:'info'         	;0
2778 1023  ASSIGN_DIM/147            ?1239     $1306                1921:'rating'       	;0
2779 1023  OP_DATA/137               ?0        #1311                ?0                  	;0
2780 1024  INIT_FCALL_BY_NAME/59     ?0        ?0                   1928:'count'        	;1
2781 1024  FETCH_DIM_FUNC_ARG/93     $1312=    16?7                 1930:'info'         	;1
2782 1024  FETCH_DIM_FUNC_ARG/93     $1313=    $1312                1931:'backdrop_path'	;1
2783 1024  SEND_VAR_EX/66            ?80       $1313                ?1                  	;0
2784 1024  DO_FCALL_BY_NAME/131      $1314=    ?0                   ?0                  	;0
2785 1024  IS_SMALLER/19             #1315=    1932:0               $1314               	;0
2786 1024  BOOL_NOT/13               #1316=    #1315                ?0                  	;0
2787 1024  JMPZ/43                   ?0        #1316                ?2789               	;0	>>2789
2788 1025  GOTO/253                  ?0        ?2813                ?1933               	;0
2789 1027  INIT_FCALL_BY_NAME/59     ?0        ?0                   1934:'range'        	;2	<<2787
2790 1027  SEND_VAL_EX/116           ?80       1936:0               ?1                  	;0
2791 1027  INIT_FCALL_BY_NAME/59     ?0        ?0                   1937:'count'        	;1
2792 1027  FETCH_DIM_FUNC_ARG/93     $1317=    16?7                 1939:'info'         	;1
2793 1027  FETCH_DIM_FUNC_ARG/93     $1318=    $1317                1940:'backdrop_path'	;1
2794 1027  SEND_VAR_EX/66            ?80       $1318                ?1                  	;0
2795 1027  DO_FCALL_BY_NAME/131      $1319=    ?0                   ?0                  	;0
2796 1027  SUB/2                     #1320=    $1319                1941:1              	;0
2797 1027  SEND_VAL_EX/116           ?96       #1320                ?2                  	;0
2798 1027  DO_FCALL_BY_NAME/131      $1321=    ?0                   ?0                  	;0
2799 1027  FE_RESET_R/77             $1322=    $1321                ?2812               	;0
2800 1027  FE_FETCH_R/78             ?0        $1322                16?25               	;2812	>>2812	<<2811
2801 1028  INIT_STATIC_METHOD_CALL/113 ?0        1944:'XUI'           1946:'Fca722697178454b'	;1
2802 1028  FETCH_DIM_FUNC_ARG/93     $1326=    16?7                 1948:'info'         	;1
2803 1028  FETCH_DIM_FUNC_ARG/93     $1327=    $1326                1949:'backdrop_path'	;1
2804 1028  FETCH_DIM_FUNC_ARG/93     $1328=    $1327                16?25               	;1
2805 1028  SEND_VAR_EX/66            ?80       $1328                ?1                  	;0
2806 1028  DO_FCALL/60               $1329=    ?0                   ?0                  	;0
2807 1028  FETCH_DIM_W/84            $1323=    16?7                 1942:'info'         	;0
2808 1028  FETCH_DIM_W/84            $1324=    $1323                1943:'backdrop_path'	;0
2809 1028  ASSIGN_DIM/147            ?1257     $1324                16?25               	;0
2810 1028  OP_DATA/137               ?0        $1329                ?0                  	;0
2811 1029  JMP/42                    ?0        ?2800                ?0                  	;0	>>2800
2812 1029  FE_FREE/127               ?0        $1322                ?0                  	;0	<<2799
2813 1033  GOTO/253                  ?0        ?2874                ?1950               	;0
2814 1035  FETCH_STATIC_PROP_R/173   $1330=    1951:'db'            1952:'XUI'          	;0
2815 1035  INIT_METHOD_CALL/112      ?0        $1330                1954:'get_row'      	;0
2816 1035  DO_FCALL/60               $1331=    ?0                   ?0                  	;0
2817 1035  ASSIGN/38                 ?1264     16?21                $1331               	;0
2818 1036  GOTO/253                  ?0        ?2833                ?1956               	;0
2819 1038  INIT_FCALL_BY_NAME/59     ?0        ?0                   1957:'igbinary_unserialize'	;1
2820 1038  INIT_FCALL_BY_NAME/59     ?0        ?0                   1959:'file_get_contents'	;1
2821 1038  FETCH_CONSTANT/99         #1333=    ?0                   1961:'STREAMS_TMP_PATH'	;16
2822 1038  CONCAT/8                  #1334=    #1333                1964:'stream_'      	;0
2823 1038  INIT_FCALL_BY_NAME/59     ?0        ?0                   1965:'intval'       	;1
2824 1038  SEND_VAR_EX/66            ?80       16?62                ?1                  	;0
2825 1038  DO_FCALL_BY_NAME/131      $1335=    ?0                   ?0                  	;0
2826 1038  CONCAT/8                  #1336=    #1334                $1335               	;0
2827 1038  SEND_VAL_EX/116           ?80       #1336                ?1                  	;0
2828 1038  DO_FCALL_BY_NAME/131      $1337=    ?0                   ?0                  	;0
2829 1038  SEND_VAR_NO_REF_EX/50     ?80       $1337                ?1                  	;0
2830 1038  DO_FCALL_BY_NAME/131      $1338=    ?0                   ?0                  	;0
2831 1038  FETCH_DIM_R/81            $1339=    $1338                1967:'info'         	;0
2832 1038  ASSIGN/38                 ?1272     16?21                $1339               	;0
2833 1040  GOTO/253                  ?0        ?2760                ?1968               	;0
2834 1043  GOTO/253                  ?0        ?3630                ?1969               	;0
2835 1044  GOTO/253                  ?0        ?2910                ?1970               	;0
2836 1046  INIT_FCALL_BY_NAME/59     ?0        ?0                   1973:'intval'       	;1
2837 1046  FETCH_DIM_FUNC_ARG/93     $1343=    16?7                 1975:'info'         	;1
2838 1046  FETCH_DIM_FUNC_ARG/93     $1344=    $1343                1976:'tmdb_id'      	;1
2839 1046  SEND_VAR_EX/66            ?80       $1344                ?1                  	;0
2840 1046  DO_FCALL_BY_NAME/131      $1345=    ?0                   ?0                  	;0
2841 1046  FETCH_DIM_W/84            $1341=    16?7                 1971:'info'         	;0
2842 1046  ASSIGN_DIM/147            ?1274     $1341                1972:'tmdb_id'      	;0
2843 1046  OP_DATA/137               ?0        $1345                ?0                  	;0
2844 1047  INIT_FCALL_BY_NAME/59     ?0        ?0                   1979:'intval'       	;1
2845 1047  FETCH_DIM_FUNC_ARG/93     $1348=    16?7                 1981:'info'         	;1
2846 1047  FETCH_DIM_FUNC_ARG/93     $1349=    $1348                1982:'episode_run_time'	;1
2847 1047  SEND_VAR_EX/66            ?80       $1349                ?1                  	;0
2848 1047  DO_FCALL_BY_NAME/131      $1350=    ?0                   ?0                  	;0
2849 1047  FETCH_DIM_W/84            $1346=    16?7                 1977:'info'         	;0
2850 1047  ASSIGN_DIM/147            ?1279     $1346                1978:'episode_run_time'	;0
2851 1047  OP_DATA/137               ?0        $1350                ?0                  	;0
2852 1048  FETCH_DIM_R/81            $1353=    16?7                 1985:'info'         	;0
2853 1048  FETCH_DIM_R/81            $1354=    $1353                1986:'release_date' 	;0
2854 1048  FETCH_DIM_W/84            $1351=    16?7                 1983:'info'         	;0
2855 1048  ASSIGN_DIM/147            ?1284     $1351                1984:'releasedate'  	;0
2856 1048  OP_DATA/137               ?0        $1354                ?0                  	;0
2857 1049  INIT_STATIC_METHOD_CALL/113 ?0        1989:'XUI'           1991:'fca722697178454b'	;1
2858 1049  FETCH_DIM_FUNC_ARG/93     $1357=    16?7                 1993:'info'         	;1
2859 1049  FETCH_DIM_FUNC_ARG/93     $1358=    $1357                1994:'cover_big'    	;1
2860 1049  SEND_VAR_EX/66            ?80       $1358                ?1                  	;0
2861 1049  DO_FCALL/60               $1359=    ?0                   ?0                  	;0
2862 1049  FETCH_DIM_W/84            $1355=    16?7                 1987:'info'         	;0
2863 1049  ASSIGN_DIM/147            ?1288     $1355                1988:'cover_big'    	;0
2864 1049  OP_DATA/137               ?0        $1359                ?0                  	;0
2865 1050  INIT_STATIC_METHOD_CALL/113 ?0        1997:'XUI'           1999:'Fca722697178454b'	;1
2866 1050  FETCH_DIM_FUNC_ARG/93     $1362=    16?7                 2001:'info'         	;1
2867 1050  FETCH_DIM_FUNC_ARG/93     $1363=    $1362                2002:'movie_image'  	;1
2868 1050  SEND_VAR_EX/66            ?80       $1363                ?1                  	;0
2869 1050  DO_FCALL/60               $1364=    ?0                   ?0                  	;0
2870 1050  FETCH_DIM_W/84            $1360=    16?7                 1995:'info'         	;0
2871 1050  ASSIGN_DIM/147            ?1293     $1360                1996:'movie_image'  	;0
2872 1050  OP_DATA/137               ?0        $1364                ?0                  	;0
2873 1051  GOTO/253                  ?0        ?2770                ?2003               	;0
2874 1053  FETCH_DIM_W/84            $1365=    16?7                 2004:'info'         	;0
2875 1053  ASSIGN_DIM/147            ?1298     $1365                2005:'subtitles'    	;0
2876 1053  OP_DATA/137               ?0        2006:array (
)       ?0                  	;0
2877 1054  INIT_FCALL_BY_NAME/59     ?0        ?0                   2007:'is_array'     	;1
2878 1054  FETCH_DIM_FUNC_ARG/93     $1367=    16?7                 2009:'info'         	;1
2879 1054  FETCH_DIM_FUNC_ARG/93     $1368=    $1367                2010:'subtitle'     	;1
2880 1054  SEND_VAR_EX/66            ?80       $1368                ?1                  	;0
2881 1054  DO_FCALL_BY_NAME/131      $1369=    ?0                   ?0                  	;0
2882 1054  BOOL_NOT/13               #1370=    $1369                ?0                  	;0
2883 1054  JMPZ/43                   ?0        #1370                ?2885               	;0	>>2885
2884 1055  GOTO/253                  ?0        ?2702                ?2011               	;0
2885 1057  ASSIGN/38                 ?1303     16?25                2012:0              	;0	<<2883
2886 1058  FETCH_DIM_R/81            $1372=    16?7                 2013:'info'         	;0
2887 1058  FETCH_DIM_R/81            $1373=    $1372                2014:'subtitle'     	;0
2888 1058  FE_RESET_R/77             $1374=    $1373                ?2908               	;0
2889 1058  FE_FETCH_R/78             ?0        $1374                16?37               	;2908	>>2908	<<2907
2890 1059  INIT_ARRAY/71             #1378=    16?25                2017:'index'        	;14
2891 1059  FETCH_DIM_R/81            $1379=    16?37                2018:'tags'         	;0
2892 1059  FETCH_DIM_R/81            $1380=    $1379                2019:'language'     	;0
2893 1059  JMP_SET/152               #1381=    $1380                ?2895               	;0
2894 1059  QM_ASSIGN/22              #1381=    2020:NULL            ?0                  	;0
2895 1059  ADD_ARRAY_ELEMENT/72      #1378=    #1381                2021:'language'     	;0
2896 1059  FETCH_DIM_R/81            $1382=    16?37                2022:'tags'         	;0
2897 1059  FETCH_DIM_R/81            $1383=    $1382                2023:'title'        	;0
2898 1059  JMP_SET/152               #1384=    $1383                ?2900               	;0
2899 1059  QM_ASSIGN/22              #1384=    2024:NULL            ?0                  	;0
2900 1059  ADD_ARRAY_ELEMENT/72      #1378=    #1384                2025:'title'        	;0
2901 1059  FETCH_DIM_W/84            $1375=    16?7                 2015:'info'         	;0
2902 1059  FETCH_DIM_W/84            $1376=    $1375                2016:'subtitles'    	;0
2903 1059  ASSIGN_DIM/147            ?1309     $1376                ?2670194112         	;0
2904 1059  OP_DATA/137               ?0        #1378                ?0                  	;0
2905 1060  POST_INC/36               #1385=    16?25                ?0                  	;0
2906 1060  FREE/70                   ?0        #1385                ?0                  	;0
2907 1061  JMP/42                    ?0        ?2889                ?0                  	;0	>>2889
2908 1061  FE_FREE/127               ?0        $1374                ?0                  	;0	<<2888
2909 1064  GOTO/253                  ?0        ?2702                ?2026               	;0
2910 1067  GOTO/253                  ?0        ?2925                ?2027               	;0	<<272
2911 1069  INIT_STATIC_METHOD_CALL/113 ?0        2029:'XUI'           2031:'Ee26f6aDBd1E84E9'	;1
2912 1069  FETCH_DIM_FUNC_ARG/93     $1387=    16?6                 2033:'vod_ids'      	;1
2913 1069  SEND_VAR_EX/66            ?80       $1387                ?1                  	;0
2914 1069  DO_FCALL/60               $1388=    ?0                   ?0                  	;0
2915 1069  ASSIGN_DIM/147            ?1318     16?6                 2028:'vod_ids'      	;0
2916 1069  OP_DATA/137               ?0        $1388                ?0                  	;0
2917 1070  FETCH_STATIC_PROP_R/173   $1389=    2034:'rCached'       2035:'XUI'          	;0
2918 1070  BOOL_NOT/13               #1390=    $1389                ?0                  	;0
2919 1070  JMPZ/43                   ?0        #1390                ?2921               	;0	>>2921
2920 1071  GOTO/253                  ?0        ?2924                ?2037               	;0
2921 1073  FETCH_DIM_R/81            $1391=    16?6                 2038:'vod_ids'      	;0	<<2919
2922 1073  ASSIGN/38                 ?1324     16?52                $1391               	;0
2923 1074  GOTO/253                  ?0        ?2994                ?2039               	;0
2924 1076  GOTO/253                  ?0        ?2952                ?2040               	;0
2925 1078  FETCH_STATIC_PROP_IS/176  $1393=    2041:'rRequest'      2042:'XUI'          	;0
2926 1078  ISSET_ISEMPTY_DIM_OBJ/115 #1394=    $1393                2044:'category_id'  	;16777216
2927 1078  JMPZ/43                   ?0        #1394                ?2930               	;0	>>2930
2928 1078  QM_ASSIGN/22              #1395=    2045:NULL            ?0                  	;0
2929 1078  JMP/42                    ?0        ?2936                ?0                  	;0	>>2936
2930 1078  INIT_FCALL_BY_NAME/59     ?0        ?0                   2046:'intval'       	;1	<<2927
2931 1078  FETCH_STATIC_PROP_FUNC_ARG/177 $1396=    2048:'rRequest'      2049:'XUI'          	;1
2932 1078  FETCH_DIM_FUNC_ARG/93     $1397=    $1396                2051:'category_id'  	;1
2933 1078  SEND_VAR_EX/66            ?80       $1397                ?1                  	;0
2934 1078  DO_FCALL_BY_NAME/131      $1398=    ?0                   ?0                  	;0
2935 1078  QM_ASSIGN/22              #1395=    $1398                ?0                  	;0
2936 1078  ASSIGN/38                 ?1331     16?40                #1395               	;0	<<2929
2937 1079  ASSIGN/38                 ?1332     16?41                2052:0              	;0
2938 1080  ISSET_ISEMPTY_DIM_OBJ/115 #1401=    16?14                2053:'items_per_page'	;16777216
2939 1080  JMPZ/43                   ?0        #1401                ?2941               	;0	>>2941
2940 1081  GOTO/253                  ?0        ?2951                ?2054               	;0
2941 1083  INIT_FCALL_BY_NAME/59     ?0        ?0                   2056:'array_slice'  	;3	<<2939
2942 1083  FETCH_DIM_FUNC_ARG/93     $1403=    16?6                 2058:'vod_ids'      	;1
2943 1083  SEND_VAR_EX/66            ?80       $1403                ?1                  	;0
2944 1083  FETCH_DIM_FUNC_ARG/93     $1404=    16?14                2059:'offset'       	;2
2945 1083  SEND_VAR_EX/66            ?96       $1404                ?2                  	;0
2946 1083  FETCH_DIM_FUNC_ARG/93     $1405=    16?14                2060:'items_per_page'	;3
2947 1083  SEND_VAR_EX/66            ?112      $1405                ?3                  	;0
2948 1083  DO_FCALL_BY_NAME/131      $1406=    ?0                   ?0                  	;0
2949 1083  ASSIGN_DIM/147            ?1334     16?6                 2055:'vod_ids'      	;0
2950 1083  OP_DATA/137               ?0        $1406                ?0                  	;0
2951 1085  GOTO/253                  ?0        ?2911                ?2061               	;0
2952 1087  ASSIGN/38                 ?1339     16?52                2062:array (
)      	;0
2953 1088  INIT_FCALL_BY_NAME/59     ?0        ?0                   2063:'count'        	;1
2954 1088  FETCH_DIM_FUNC_ARG/93     $1408=    16?6                 2065:'vod_ids'      	;1
2955 1088  SEND_VAR_EX/66            ?80       $1408                ?1                  	;0
2956 1088  DO_FCALL_BY_NAME/131      $1409=    ?0                   ?0                  	;0
2957 1088  IS_SMALLER/19             #1410=    2066:0               $1409               	;0
2958 1088  BOOL_NOT/13               #1411=    #1410                ?0                  	;0
2959 1088  JMPZ/43                   ?0        #1411                ?2961               	;0	>>2961
2960 1089  GOTO/253                  ?0        ?2994                ?2067               	;0
2961 1091  ASSIGN/38                 $1412=    16?55                2068:array (
)      	;0	<<2959
2962 1091  ASSIGN/38                 ?1345     16?56                $1412               	;0
2963 1092  ISSET_ISEMPTY_CV/197      #1414=    16?40                ?0                  	;16777216
2964 1092  JMPZ/43                   ?0        #1414                ?2966               	;0	>>2966
2965 1093  GOTO/253                  ?0        ?3200                ?2069               	;0
2966 1095  ASSIGN_DIM/147            ?1347     16?55                ?4397406            	;0	<<2964
2967 1095  OP_DATA/137               ?0        2070:'JSON_CONTAINS(`category_id`, ?, \'$\')' ?0                  	;0
2968 1096  GOTO/253                  ?0        ?3198                ?2071               	;0
2969 1098  ASSIGN/38                 ?1348     16?53                2072:'`order`'      	;0
2970 1099  GOTO/253                  ?0        ?2979                ?2073               	;0
2971 1101  INIT_FCALL_BY_NAME/59     ?0        ?0                   2074:'implode'      	;2
2972 1101  SEND_VAL_EX/116           ?80       2076:','             ?1                  	;0
2973 1101  FETCH_DIM_FUNC_ARG/93     $1417=    16?6                 2077:'vod_ids'      	;2
2974 1101  SEND_VAR_EX/66            ?96       $1417                ?2                  	;0
2975 1101  DO_FCALL_BY_NAME/131      $1418=    ?0                   ?0                  	;0
2976 1101  CONCAT/8                  #1419=    2078:'FIELD(`t1`.`id`,' $1418               	;0
2977 1101  CONCAT/8                  #1420=    #1419                2079:')'            	;0
2978 1101  ASSIGN/38                 ?1353     16?53                #1420               	;0
2979 1103  GOTO/253                  ?0        ?2980                ?2080               	;0
2980 1105  FETCH_STATIC_PROP_R/173   $1422=    2081:'db'            2082:'XUI'          	;0
2981 1105  INIT_METHOD_CALL/112      ?0        $1422                2084:'query'        	;1
2982 1105  ROPE_INIT/54              #1424=    ?0                   2086:'SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type '	;5
2983 1105  ROPE_ADD/55               #1424=    #1424                16?57               	;1
2984 1105  ROPE_ADD/55               #1424=    #1424                2087:' ORDER BY '   	;2
2985 1105  ROPE_ADD/55               #1424=    #1424                16?53               	;3
2986 1105  ROPE_END/56               #1423=    #1424                2088:';'            	;4
2987 1105  SEND_VAL_EX/116           ?80       #1423                ?1                  	;0
2988 1105  SEND_UNPACK/165           ?80       16?56                ?1                  	;0
2989 1105  DO_FCALL/60               ?1359     ?0                   ?0                  	;0
2990 1106  FETCH_STATIC_PROP_R/173   $1428=    2089:'db'            2090:'XUI'          	;0
2991 1106  INIT_METHOD_CALL/112      ?0        $1428                2092:'get_rows'     	;0
2992 1106  DO_FCALL/60               $1429=    ?0                   ?0                  	;0
2993 1106  ASSIGN/38                 ?1362     16?52                $1429               	;0
2994 1109  FE_RESET_R/77             $1431=    16?52                ?3194               	;0
2995 1109  FE_FETCH_R/78             ?0        $1431                16?58               	;3194	>>3194	<<3193
2996 1110  NOP/0                     ?0        ?0                   ?0                  	;1
2997 1110  GOTO/253                  ?0        ?3000                ?2094               	;0
2998 1113  NOP/0                     ?0        ?0                   ?0                  	;1
2999 1113  GOTO/253                  ?0        ?3193                ?2095               	;0
3000 1115  FETCH_STATIC_PROP_R/173   $1432=    2096:'rCached'       2097:'XUI'          	;0
3001 1115  BOOL_NOT/13               #1433=    $1432                ?0                  	;0
3002 1115  JMPZ/43                   ?0        #1433                ?3005               	;0	>>3005
3003 1116  NOP/0                     ?0        ?0                   ?0                  	;1
3004 1116  GOTO/253                  ?0        ?3019                ?2099               	;0
3005 1118  INIT_FCALL_BY_NAME/59     ?0        ?0                   2100:'igbinary_unserialize'	;1	<<3002
3006 1118  INIT_FCALL_BY_NAME/59     ?0        ?0                   2102:'file_get_contents'	;1
3007 1118  FETCH_CONSTANT/99         #1434=    ?0                   2104:'STREAMS_TMP_PATH'	;16
3008 1118  CONCAT/8                  #1435=    #1434                2107:'stream_'      	;0
3009 1118  INIT_FCALL_BY_NAME/59     ?0        ?0                   2108:'intval'       	;1
3010 1118  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
3011 1118  DO_FCALL_BY_NAME/131      $1436=    ?0                   ?0                  	;0
3012 1118  CONCAT/8                  #1437=    #1435                $1436               	;0
3013 1118  SEND_VAL_EX/116           ?80       #1437                ?1                  	;0
3014 1118  DO_FCALL_BY_NAME/131      $1438=    ?0                   ?0                  	;0
3015 1118  SEND_VAR_NO_REF_EX/50     ?80       $1438                ?1                  	;0
3016 1118  DO_FCALL_BY_NAME/131      $1439=    ?0                   ?0                  	;0
3017 1118  FETCH_DIM_R/81            $1440=    $1439                2110:'info'         	;0
3018 1118  ASSIGN/38                 ?1373     16?58                $1440               	;0
3019 1120  INIT_FCALL_BY_NAME/59     ?0        ?0                   2111:'in_array'     	;2
3020 1120  FETCH_DIM_FUNC_ARG/93     $1442=    16?58                2113:'type_key'     	;1
3021 1120  SEND_VAR_EX/66            ?80       $1442                ?1                  	;0
3022 1120  SEND_VAL_EX/116           ?96       2114:array (
  0 => 'movie',
) ?2                  	;0
3023 1120  DO_FCALL_BY_NAME/131      $1443=    ?0                   ?0                  	;0
3024 1120  JMPZ/43                   ?0        $1443                ?3027               	;0	>>3027
3025 1121  NOP/0                     ?0        ?0                   ?0                  	;1
3026 1121  GOTO/253                  ?0        ?3031                ?2115               	;0
3027 1123  NOP/0                     ?0        ?0                   ?0                  	;1	<<3024
3028 1123  GOTO/253                  ?0        ?2998                ?2116               	;0
3029 1124  NOP/0                     ?0        ?0                   ?0                  	;1
3030 1124  GOTO/253                  ?0        ?3031                ?2117               	;0
3031 1127  INIT_FCALL_BY_NAME/59     ?0        ?0                   2118:'json_decode'  	;2
3032 1127  FETCH_DIM_FUNC_ARG/93     $1444=    16?58                2120:'movie_properties'	;1
3033 1127  SEND_VAR_EX/66            ?80       $1444                ?1                  	;0
3034 1127  SEND_VAL_EX/116           ?96       2121:true            ?2                  	;0
3035 1127  DO_FCALL_BY_NAME/131      $1445=    ?0                   ?0                  	;0
3036 1127  ASSIGN/38                 ?1378     16?36                $1445               	;0
3037 1128  INIT_FCALL_BY_NAME/59     ?0        ?0                   2122:'json_decode'  	;2
3038 1128  FETCH_DIM_FUNC_ARG/93     $1447=    16?58                2124:'category_id'  	;1
3039 1128  SEND_VAR_EX/66            ?80       $1447                ?1                  	;0
3040 1128  SEND_VAL_EX/116           ?96       2125:true            ?2                  	;0
3041 1128  DO_FCALL_BY_NAME/131      $1448=    ?0                   ?0                  	;0
3042 1128  ASSIGN/38                 ?1381     16?44                $1448               	;0
3043 1129  FE_RESET_R/77             $1450=    16?44                ?3190               	;0
3044 1129  FE_FETCH_R/78             ?0        $1450                16?45               	;3190	>>3190	<<3189
3045 1130  NOP/0                     ?0        ?0                   ?0                  	;1
3046 1130  NOP/0                     ?0        ?0                   ?0                  	;1
3047 1130  GOTO/253                  ?0        ?3150                ?2126               	;0
3048 1132  FETCH_DIM_R/81            $1451=    16?6                 2127:'username'     	;0
3049 1132  ROPE_INIT/54              #1456=    ?0                   2128:'movie/'       	;8
3050 1132  ROPE_ADD/55               #1456=    #1456                $1451               	;1
3051 1132  FETCH_DIM_R/81            $1452=    16?6                 2129:'password'     	;0
3052 1132  ROPE_ADD/55               #1456=    #1456                2130:'/'            	;2
3053 1132  ROPE_ADD/55               #1456=    #1456                $1452               	;3
3054 1132  FETCH_DIM_R/81            $1453=    16?58                2131:'id'           	;0
3055 1132  ROPE_ADD/55               #1456=    #1456                2132:'/'            	;4
3056 1132  ROPE_ADD/55               #1456=    #1456                $1453               	;5
3057 1132  FETCH_DIM_R/81            $1454=    16?58                2133:'target_container'	;0
3058 1132  ROPE_ADD/55               #1456=    #1456                2134:'/'            	;6
3059 1132  ROPE_END/56               #1455=    #1456                $1454               	;7
3060 1132  ASSIGN/38                 ?1392     16?33                #1455               	;0
3061 1133  INIT_STATIC_METHOD_CALL/113 ?0        2135:'Xui\\Functions' 2137:'encrypt'      	;3
3062 1133  SEND_VAR_EX/66            ?80       16?33                ?1                  	;0
3063 1133  FETCH_STATIC_PROP_FUNC_ARG/177 $1461=    2139:'rSettings'     2140:'XUI'          	;2
3064 1133  FETCH_DIM_FUNC_ARG/93     $1462=    $1461                2142:'live_streaming_pass'	;2
3065 1133  SEND_VAR_EX/66            ?96       $1462                ?2                  	;0
3066 1133  FETCH_CONSTANT/99         #1463=    ?0                   2143:'OPENSSL_EXTRA'	;16
3067 1133  SEND_VAL_EX/116           ?112      #1463                ?3                  	;0
3068 1133  DO_FCALL/60               $1464=    ?0                   ?0                  	;0
3069 1133  ASSIGN/38                 ?1397     16?5                 $1464               	;0
3070 1134  NOP/0                     ?0        ?0                   ?0                  	;0
3071 1134  FAST_CONCAT/53            #1466=    2146:'play/'         16?5                	;0
3072 1134  CONCAT/8                  #1467=    16?35                #1466               	;0
3073 1134  ASSIGN/38                 ?1400     16?32                #1467               	;0
3074 1136  PRE_INC/34                $1470=    16?41                ?0                  	;0
3075 1136  INIT_ARRAY/71             #1471=    $1470                2147:'num'          	;90
3076 1136  INIT_STATIC_METHOD_CALL/113 ?0        2148:'XUI'           2150:'Cf5D4A2f3DE8982C'	;2
3077 1136  FETCH_DIM_FUNC_ARG/93     $1472=    16?58                2152:'stream_display_name'	;1
3078 1136  SEND_VAR_EX/66            ?80       $1472                ?1                  	;0
3079 1136  FETCH_DIM_FUNC_ARG/93     $1473=    16?58                2153:'year'         	;2
3080 1136  SEND_VAR_EX/66            ?96       $1473                ?2                  	;0
3081 1136  DO_FCALL/60               $1474=    ?0                   ?0                  	;0
3082 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1474                2154:'name'         	;0
3083 1136  FETCH_DIM_R/81            $1475=    16?58                2155:'stream_display_name'	;0
3084 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1475                2156:'title'        	;0
3085 1136  FETCH_DIM_R/81            $1476=    16?58                2157:'year'         	;0
3086 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1476                2158:'year'         	;0
3087 1136  FETCH_DIM_R/81            $1477=    16?58                2159:'type_key'     	;0
3088 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1477                2160:'stream_type'  	;0
3089 1136  FETCH_DIM_R/81            $1478=    16?58                2161:'id'           	;0
3090 1136  CAST/21                   #1479=    $1478                ?0                  	;4
3091 1136  ADD_ARRAY_ELEMENT/72      #1471=    #1479                2162:'stream_id'    	;0
3092 1136  INIT_STATIC_METHOD_CALL/113 ?0        2163:'XUI'           2165:'fca722697178454B'	;1
3093 1136  FETCH_DIM_FUNC_ARG/93     $1480=    16?36                2167:'movie_image'  	;1
3094 1136  SEND_VAR_EX/66            ?80       $1480                ?1                  	;0
3095 1136  DO_FCALL/60               $1481=    ?0                   ?0                  	;0
3096 1136  JMP_SET/152               #1482=    $1481                ?3098               	;0
3097 1136  QM_ASSIGN/22              #1482=    2168:''              ?0                  	;0
3098 1136  ADD_ARRAY_ELEMENT/72      #1471=    #1482                2169:'stream_icon'  	;0
3099 1136  INIT_FCALL_BY_NAME/59     ?0        ?0                   2170:'number_format'	;2
3100 1136  FETCH_DIM_FUNC_ARG/93     $1483=    16?36                2172:'rating'       	;1
3101 1136  SEND_VAR_EX/66            ?80       $1483                ?1                  	;0
3102 1136  SEND_VAL_EX/116           ?96       2173:1               ?2                  	;0
3103 1136  DO_FCALL_BY_NAME/131      $1484=    ?0                   ?0                  	;0
3104 1136  ADD/1                     #1485=    $1484                2174:0              	;0
3105 1136  ADD_ARRAY_ELEMENT/72      #1471=    #1485                2175:'rating'       	;0
3106 1136  INIT_FCALL_BY_NAME/59     ?0        ?0                   2176:'number_format'	;2
3107 1136  FETCH_DIM_R/81            $1486=    16?36                2178:'rating'       	;0
3108 1136  MUL/3                     #1487=    $1486                2179:0.5            	;0
3109 1136  SEND_VAL_EX/116           ?80       #1487                ?1                  	;0
3110 1136  SEND_VAL_EX/116           ?96       2180:1               ?2                  	;0
3111 1136  DO_FCALL_BY_NAME/131      $1488=    ?0                   ?0                  	;0
3112 1136  ADD/1                     #1489=    $1488                2181:0              	;0
3113 1136  ADD_ARRAY_ELEMENT/72      #1471=    #1489                2182:'rating_5based'	;0
3114 1136  FETCH_DIM_R/81            $1490=    16?58                2183:'added'        	;0
3115 1136  JMP_SET/152               #1491=    $1490                ?3117               	;0
3116 1136  QM_ASSIGN/22              #1491=    2184:''              ?0                  	;0
3117 1136  ADD_ARRAY_ELEMENT/72      #1471=    #1491                2185:'added'        	;0
3118 1136  FETCH_DIM_R/81            $1492=    16?36                2186:'plot'         	;0
3119 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1492                2187:'plot'         	;0
3120 1136  FETCH_DIM_R/81            $1493=    16?36                2188:'cast'         	;0
3121 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1493                2189:'cast'         	;0
3122 1136  FETCH_DIM_R/81            $1494=    16?36                2190:'director'     	;0
3123 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1494                2191:'director'     	;0
3124 1136  FETCH_DIM_R/81            $1495=    16?36                2192:'genre'        	;0
3125 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1495                2193:'genre'        	;0
3126 1136  FETCH_DIM_R/81            $1496=    16?36                2194:'release_date' 	;0
3127 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1496                2195:'release_date' 	;0
3128 1136  FETCH_DIM_R/81            $1497=    16?36                2196:'youtube_trailer'	;0
3129 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1497                2197:'youtube_trailer'	;0
3130 1136  FETCH_DIM_R/81            $1498=    16?36                2198:'episode_run_time'	;0
3131 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1498                2199:'episode_run_time'	;0
3132 1136  INIT_FCALL_BY_NAME/59     ?0        ?0                   2200:'strval'       	;1
3133 1136  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
3134 1136  DO_FCALL_BY_NAME/131      $1499=    ?0                   ?0                  	;0
3135 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1499                2202:'category_id'  	;0
3136 1136  ADD_ARRAY_ELEMENT/72      #1471=    16?44                2203:'category_ids' 	;0
3137 1136  FETCH_DIM_R/81            $1500=    16?58                2204:'target_container'	;0
3138 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1500                2205:'container_extension'	;0
3139 1136  INIT_FCALL_BY_NAME/59     ?0        ?0                   2206:'strval'       	;1
3140 1136  FETCH_DIM_FUNC_ARG/93     $1501=    16?58                2208:'custom_sid'   	;1
3141 1136  SEND_VAR_EX/66            ?80       $1501                ?1                  	;0
3142 1136  DO_FCALL_BY_NAME/131      $1502=    ?0                   ?0                  	;0
3143 1136  ADD_ARRAY_ELEMENT/72      #1471=    $1502                2209:'custom_sid'   	;0
3144 1136  ADD_ARRAY_ELEMENT/72      #1471=    16?32                2210:'direct_source'	;0
3145 1136  ASSIGN_DIM/147            ?1401     16?7                 ?2670194016         	;0
3146 1136  OP_DATA/137               ?0        #1471                ?0                  	;0
3147 1137  NOP/0                     ?0        ?0                   ?0                  	;1
3148 1137  NOP/0                     ?0        ?0                   ?0                  	;1
3149 1137  GOTO/253                  ?0        ?3172                ?2211               	;0
3150 1139  BOOL_NOT/13               #1503=    16?40                ?0                  	;0
3151 1139  JMPNZ_EX/47               #1503=    #1503                ?3154               	;0	>>3154
3152 1139  IS_EQUAL/17               #1504=    16?40                16?45               	;0
3153 1139  BOOL/52                   #1503=    #1504                ?0                  	;0
3154 1139  BOOL_NOT/13               #1505=    #1503                ?0                  	;0	<<3151
3155 1139  JMPZ/43                   ?0        #1505                ?3159               	;0	>>3159
3156 1140  NOP/0                     ?0        ?0                   ?0                  	;1
3157 1140  NOP/0                     ?0        ?0                   ?0                  	;1
3158 1140  GOTO/253                  ?0        ?3172                ?2212               	;0
3159 1142  FETCH_STATIC_PROP_R/173   $1506=    2213:'rSettings'     2214:'XUI'          	;0	<<3155
3160 1142  FETCH_DIM_R/81            $1507=    $1506                2216:'api_redirect' 	;0
3161 1142  JMPZ/43                   ?0        $1507                ?3165               	;0	>>3165
3162 1143  NOP/0                     ?0        ?0                   ?0                  	;1
3163 1143  NOP/0                     ?0        ?0                   ?0                  	;1
3164 1143  GOTO/253                  ?0        ?3169                ?2217               	;0
3165 1145  ASSIGN/38                 ?1440     16?32                2218:''             	;0	<<3161
3166 1146  NOP/0                     ?0        ?0                   ?0                  	;1
3167 1146  NOP/0                     ?0        ?0                   ?0                  	;1
3168 1146  GOTO/253                  ?0        ?3074                ?2219               	;0
3169 1148  NOP/0                     ?0        ?0                   ?0                  	;1
3170 1148  NOP/0                     ?0        ?0                   ?0                  	;1
3171 1148  GOTO/253                  ?0        ?3048                ?2220               	;0
3172 1151  BOOL_NOT/13               #1509=    16?40                ?0                  	;0
3173 1151  JMPZ_EX/46                #1509=    #1509                ?3178               	;0	>>3178
3174 1151  FETCH_STATIC_PROP_R/173   $1510=    2221:'rSettings'     2222:'XUI'          	;0
3175 1151  FETCH_DIM_R/81            $1511=    $1510                2224:'show_category_duplicates'	;0
3176 1151  BOOL_NOT/13               #1512=    $1511                ?0                  	;0
3177 1151  BOOL/52                   #1509=    #1512                ?0                  	;0
3178 1151  BOOL_NOT/13               #1513=    #1509                ?0                  	;0	<<3173
3179 1151  JMPZ/43                   ?0        #1513                ?3183               	;0	>>3183
3180 1152  NOP/0                     ?0        ?0                   ?0                  	;1
3181 1152  NOP/0                     ?0        ?0                   ?0                  	;1
3182 1152  GOTO/253                  ?0        ?3186                ?2225               	;0
3183 1154  FE_FREE/127               ?0        $1450                ?105                	;1	<<3179
3184 1154  NOP/0                     ?0        ?0                   ?0                  	;1
3185 1154  GOTO/253                  ?0        ?3191                ?2226               	;0
3186 1157  NOP/0                     ?0        ?0                   ?0                  	;1
3187 1157  NOP/0                     ?0        ?0                   ?0                  	;1
3188 1157  GOTO/253                  ?0        ?3189                ?2227               	;0
3189 1158  JMP/42                    ?0        ?3044                ?0                  	;0	>>3044
3190 1158  FE_FREE/127               ?0        $1450                ?0                  	;0	<<3043
3191 1161  NOP/0                     ?0        ?0                   ?0                  	;1
3192 1161  GOTO/253                  ?0        ?2998                ?2228               	;0
3193 1162  JMP/42                    ?0        ?2995                ?0                  	;0	>>2995
3194 1162  FE_FREE/127               ?0        $1431                ?0                  	;0	<<2994
3195 1164  GOTO/253                  ?0        ?3196                ?2229               	;0
3196 1167  GOTO/253                  ?0        ?3630                ?2230               	;0
3197 1168  GOTO/253                  ?0        ?3221                ?2231               	;0
3198 1170  ASSIGN_DIM/147            ?1446     16?56                ?19                 	;0
3199 1170  OP_DATA/137               ?0        16?40                ?0                  	;0
3200 1172  INIT_FCALL_BY_NAME/59     ?0        ?0                   2232:'implode'      	;2
3201 1172  SEND_VAL_EX/116           ?80       2234:','             ?1                  	;0
3202 1172  FETCH_DIM_FUNC_ARG/93     $1516=    16?6                 2235:'vod_ids'      	;2
3203 1172  SEND_VAR_EX/66            ?96       $1516                ?2                  	;0
3204 1172  DO_FCALL_BY_NAME/131      $1517=    ?0                   ?0                  	;0
3205 1172  CONCAT/8                  #1518=    2236:'`t1`.`id` IN (' $1517               	;0
3206 1172  CONCAT/8                  #1519=    #1518                2237:')'            	;0
3207 1172  ASSIGN_DIM/147            ?1447     16?55                ?0                  	;0
3208 1172  OP_DATA/137               ?0        #1519                ?0                  	;0
3209 1173  INIT_FCALL_BY_NAME/59     ?0        ?0                   2238:'implode'      	;2
3210 1173  SEND_VAL_EX/116           ?80       2240:' AND '         ?1                  	;0
3211 1173  SEND_VAR_EX/66            ?96       16?55                ?2                  	;0
3212 1173  DO_FCALL_BY_NAME/131      $1520=    ?0                   ?0                  	;0
3213 1173  CONCAT/8                  #1521=    2241:'WHERE '        $1520               	;0
3214 1173  ASSIGN/38                 ?1454     16?57                #1521               	;0
3215 1174  FETCH_STATIC_PROP_R/173   $1523=    2242:'rSettings'     2243:'XUI'          	;0
3216 1174  FETCH_DIM_R/81            $1524=    $1523                2245:'channel_number_type'	;0
3217 1174  IS_NOT_EQUAL/18           #1525=    $1524                2246:'manual'       	;0
3218 1174  JMPZ/43                   ?0        #1525                ?3220               	;0	>>3220
3219 1175  GOTO/253                  ?0        ?2971                ?2247               	;0
3220 1177  GOTO/253                  ?0        ?2969                ?2248               	;0	<<3218
3221 1180  GOTO/253                  ?0        ?3368                ?2249               	;0	<<273
3222 1182  ISSET_ISEMPTY_CV/197      #1526=    16?5                 ?0                  	;33554432
3223 1182  BOOL_NOT/13               #1527=    #1526                ?0                  	;0
3224 1182  JMPZ/43                   ?0        #1527                ?3226               	;0	>>3226
3225 1183  GOTO/253                  ?0        ?3229                ?2250               	;0
3226 1185  FETCH_DIM_W/84            $1528=    16?7                 2251:'user_info'    	;0	<<3224
3227 1185  ASSIGN_DIM/147            ?1461     $1528                2252:'token'        	;0
3228 1185  OP_DATA/137               ?0        16?5                 ?0                  	;0
3229 1187  FETCH_STATIC_PROP_R/173   $1532=    2255:'rSettings'     2256:'XUI'          	;0
3230 1187  FETCH_DIM_R/81            $1533=    $1532                2258:'message_of_day'	;0
3231 1187  FETCH_DIM_W/84            $1530=    16?7                 2253:'user_info'    	;0
3232 1187  ASSIGN_DIM/147            ?1463     $1530                2254:'message'      	;0
3233 1187  OP_DATA/137               ?0        $1533                ?0                  	;0
3234 1188  FETCH_DIM_W/84            $1534=    16?7                 2259:'user_info'    	;0
3235 1188  ASSIGN_DIM/147            ?1467     $1534                2260:'auth'         	;0
3236 1188  OP_DATA/137               ?0        2261:1               ?0                  	;0
3237 1189  GOTO/253                  ?0        ?3324                ?2262               	;0
3238 1191  INIT_FCALL_BY_NAME/59     ?0        ?0                   2263:'count'        	;1
3239 1191  FETCH_DIM_FUNC_ARG/93     $1536=    16?6                 2265:'channel_ids'  	;1
3240 1191  SEND_VAR_EX/66            ?80       $1536                ?1                  	;0
3241 1191  DO_FCALL_BY_NAME/131      $1537=    ?0                   ?0                  	;0
3242 1191  IS_SMALLER/19             #1538=    2266:0               $1537               	;0
3243 1191  BOOL_NOT/13               #1539=    #1538                ?0                  	;0
3244 1191  JMPZ/43                   ?0        #1539                ?3246               	;0	>>3246
3245 1192  GOTO/253                  ?0        ?3430                ?2267               	;0
3246 1194  ASSIGN/38                 $1540=    16?55                2268:array (
)      	;0	<<3244
3247 1194  ASSIGN/38                 ?1473     16?56                $1540               	;0
3248 1195  INIT_FCALL_BY_NAME/59     ?0        ?0                   2269:'implode'      	;2
3249 1195  SEND_VAL_EX/116           ?80       2271:','             ?1                  	;0
3250 1195  FETCH_DIM_FUNC_ARG/93     $1543=    16?6                 2272:'channel_ids'  	;2
3251 1195  SEND_VAR_EX/66            ?96       $1543                ?2                  	;0
3252 1195  DO_FCALL_BY_NAME/131      $1544=    ?0                   ?0                  	;0
3253 1195  CONCAT/8                  #1545=    2273:'`t1`.`id` IN (' $1544               	;0
3254 1195  CONCAT/8                  #1546=    #1545                2274:')'            	;0
3255 1195  ASSIGN_DIM/147            ?1474     16?55                ?2670194944         	;0
3256 1195  OP_DATA/137               ?0        #1546                ?0                  	;0
3257 1196  INIT_FCALL_BY_NAME/59     ?0        ?0                   2275:'implode'      	;2
3258 1196  SEND_VAL_EX/116           ?80       2277:' AND '         ?1                  	;0
3259 1196  SEND_VAR_EX/66            ?96       16?55                ?2                  	;0
3260 1196  DO_FCALL_BY_NAME/131      $1547=    ?0                   ?0                  	;0
3261 1196  CONCAT/8                  #1548=    2278:'WHERE '        $1547               	;0
3262 1196  ASSIGN/38                 ?1481     16?57                #1548               	;0
3263 1197  FETCH_STATIC_PROP_R/173   $1550=    2279:'rSettings'     2280:'XUI'          	;0
3264 1197  FETCH_DIM_R/81            $1551=    $1550                2282:'channel_number_type'	;0
3265 1197  IS_NOT_EQUAL/18           #1552=    $1551                2283:'manual'       	;0
3266 1197  JMPZ/43                   ?0        #1552                ?3268               	;0	>>3268
3267 1198  GOTO/253                  ?0        ?3283                ?2284               	;0
3268 1200  GOTO/253                  ?0        ?3281                ?2285               	;0	<<3266
3269 1203  FETCH_DIM_W/84            $1553=    16?7                 2286:'server_info'  	;0
3270 1203  ASSIGN_DIM/147            ?1486     $1553                2287:'timezone'     	;0
3271 1203  OP_DATA/137               ?0        2288:'UTC'           ?0                  	;0
3272 1205  FETCH_DIM_R/81            $1557=    16?6                 2291:'username'     	;0
3273 1205  FETCH_DIM_W/84            $1555=    16?7                 2289:'user_info'    	;0
3274 1205  ASSIGN_DIM/147            ?1488     $1555                2290:'username'     	;0
3275 1205  OP_DATA/137               ?0        $1557                ?0                  	;0
3276 1206  FETCH_DIM_R/81            $1560=    16?6                 2294:'password'     	;0
3277 1206  FETCH_DIM_W/84            $1558=    16?7                 2292:'user_info'    	;0
3278 1206  ASSIGN_DIM/147            ?1491     $1558                2293:'password'     	;0
3279 1206  OP_DATA/137               ?0        $1560                ?0                  	;0
3280 1207  GOTO/253                  ?0        ?3222                ?2295               	;0
3281 1209  ASSIGN/38                 ?1493     16?53                2296:'`order`'      	;0
3282 1210  GOTO/253                  ?0        ?3291                ?2297               	;0
3283 1212  INIT_FCALL_BY_NAME/59     ?0        ?0                   2298:'implode'      	;2
3284 1212  SEND_VAL_EX/116           ?80       2300:','             ?1                  	;0
3285 1212  FETCH_DIM_FUNC_ARG/93     $1562=    16?6                 2301:'channel_ids'  	;2
3286 1212  SEND_VAR_EX/66            ?96       $1562                ?2                  	;0
3287 1212  DO_FCALL_BY_NAME/131      $1563=    ?0                   ?0                  	;0
3288 1212  CONCAT/8                  #1564=    2302:'FIELD(`t1`.`id`,' $1563               	;0
3289 1212  CONCAT/8                  #1565=    #1564                2303:')'            	;0
3290 1212  ASSIGN/38                 ?1498     16?53                #1565               	;0
3291 1214  GOTO/253                  ?0        ?3416                ?2304               	;0
3292 1216  INIT_STATIC_METHOD_CALL/113 ?0        2305:'XUI'           2307:'C721bd954a5f072f'	;0
3293 1216  DO_FCALL/60               $1567=    ?0                   ?0                  	;0
3294 1216  FE_RESET_R/77             $1568=    $1567                ?3312               	;0
3295 1216  FE_FETCH_R/78             #1569=    $1568                16?47               	;3312	>>3312	<<3311
3296 1216  ASSIGN/38                 ?1502     16?63                #1569               	;0
3297 1217  FETCH_DIM_R/81            $1572=    16?47                2310:'category_type'	;0
3298 1217  FETCH_DIM_R/81            $1575=    16?47                2311:'id'           	;0
3299 1217  INIT_ARRAY/71             #1576=    $1575                2312:'category_id'  	;14
3300 1217  FETCH_DIM_R/81            $1577=    16?47                2313:'category_name'	;0
3301 1217  ADD_ARRAY_ELEMENT/72      #1576=    $1577                2314:'category_name'	;0
3302 1217  ADD_ARRAY_ELEMENT/72      #1576=    2315:0               2316:'parent_id'    	;0
3303 1217  FETCH_DIM_W/84            $1571=    16?7                 2309:'categories'   	;0
3304 1217  FETCH_DIM_W/84            $1573=    $1571                $1572               	;0
3305 1217  ASSIGN_DIM/147            ?1506     $1573                ?1654848320         	;0
3306 1217  OP_DATA/137               ?0        #1576                ?0                  	;0
3307 1218  FETCH_DIM_R/81            $1578=    16?47                2317:'id'           	;0
3308 1218  FETCH_DIM_R/81            $1580=    16?47                2318:'category_name'	;0
3309 1218  ASSIGN_DIM/147            ?1511     16?64                $1578               	;0
3310 1218  OP_DATA/137               ?0        $1580                ?0                  	;0
3311 1219  JMP/42                    ?0        ?3295                ?0                  	;0	>>3295
3312 1219  FE_FREE/127               ?0        $1568                ?0                  	;0	<<3294
3313 1222  ASSIGN_DIM/147            ?1513     16?7                 2319:'available_channels'	;0
3314 1222  OP_DATA/137               ?0        2320:array (
)       ?0                  	;0
3315 1223  ASSIGN/38                 $1582=    16?41                2321:0              	;0
3316 1223  ASSIGN/38                 ?1515     16?54                $1582               	;0
3317 1224  INIT_STATIC_METHOD_CALL/113 ?0        2323:'XUI'           2325:'ee26F6aDbD1e84e9'	;1
3318 1224  FETCH_DIM_FUNC_ARG/93     $1585=    16?6                 2327:'channel_ids'  	;1
3319 1224  SEND_VAR_EX/66            ?80       $1585                ?1                  	;0
3320 1224  DO_FCALL/60               $1586=    ?0                   ?0                  	;0
3321 1224  ASSIGN_DIM/147            ?1516     16?6                 2322:'channel_ids'  	;0
3322 1224  OP_DATA/137               ?0        $1586                ?0                  	;0
3323 1225  GOTO/253                  ?0        ?3586                ?2328               	;0
3324 1227  FETCH_DIM_W/84            $1587=    16?7                 2329:'user_info'    	;0
3325 1227  ASSIGN_DIM/147            ?1520     $1587                2330:'status'       	;0
3326 1227  OP_DATA/137               ?0        2331:'Active'        ?0                  	;0
3327 1228  FETCH_DIM_R/81            $1591=    16?6                 2334:'exp_date'     	;0
3328 1228  FETCH_DIM_W/84            $1589=    16?7                 2332:'user_info'    	;0
3329 1228  ASSIGN_DIM/147            ?1522     $1589                2333:'exp_date'     	;0
3330 1228  OP_DATA/137               ?0        $1591                ?0                  	;0
3331 1229  FETCH_DIM_R/81            $1594=    16?6                 2337:'is_trial'     	;0
3332 1229  FETCH_DIM_W/84            $1592=    16?7                 2335:'user_info'    	;0
3333 1229  ASSIGN_DIM/147            ?1525     $1592                2336:'is_trial'     	;0
3334 1229  OP_DATA/137               ?0        $1594                ?0                  	;0
3335 1230  FETCH_STATIC_PROP_R/173   $1595=    2338:'rSettings'     2339:'XUI'          	;0
3336 1230  FETCH_DIM_R/81            $1596=    $1595                2341:'redis_handler'	;0
3337 1230  JMPZ/43                   ?0        $1596                ?3339               	;0	>>3339
3338 1231  GOTO/253                  ?0        ?3615                ?2342               	;0
3339 1233  FETCH_STATIC_PROP_R/173   $1597=    2343:'rCached'       2344:'XUI'          	;0	<<3337
3340 1233  BOOL_NOT/13               #1598=    $1597                ?0                  	;0
3341 1233  JMPZ/43                   ?0        #1598                ?3343               	;0	>>3343
3342 1234  GOTO/253                  ?0        ?3597                ?2346               	;0
3343 1236  GOTO/253                  ?0        ?3595                ?2347               	;0	<<3341
3344 1240  GOTO/253                  ?0        ?3630                ?2348               	;0
3345 1241  GOTO/253                  ?0        ?3630                ?2349               	;0
3346 1243  FETCH_DIM_R/81            $1601=    16?6                 2352:'created_at'   	;0
3347 1243  FETCH_DIM_W/84            $1599=    16?7                 2350:'user_info'    	;0
3348 1243  ASSIGN_DIM/147            ?1532     $1599                2351:'created_at'   	;0
3349 1243  OP_DATA/137               ?0        $1601                ?0                  	;0
3350 1244  FETCH_DIM_R/81            $1604=    16?6                 2355:'max_connections'	;0
3351 1244  FETCH_DIM_W/84            $1602=    16?7                 2353:'user_info'    	;0
3352 1244  ASSIGN_DIM/147            ?1535     $1602                2354:'max_connections'	;0
3353 1244  OP_DATA/137               ?0        $1604                ?0                  	;0
3354 1245  INIT_FCALL/61             ?0        ?224                 2358:'getoutputformats'	;1
3355 1245  FETCH_DIM_R/81            $1607=    16?6                 2359:'allowed_outputs'	;0
3356 1245  SEND_VAR/117              ?80       $1607                ?1                  	;0
3357 1245  DO_FCALL/60               $1608=    ?0                   ?0                  	;0
3358 1245  FETCH_DIM_W/84            $1605=    16?7                 2356:'user_info'    	;0
3359 1245  ASSIGN_DIM/147            ?1538     $1605                2357:'allowed_output_formats'	;0
3360 1245  OP_DATA/137               ?0        $1608                ?0                  	;0
3361 1246  BOOL_NOT/13               #1609=    16?0                 ?0                  	;0
3362 1246  JMPZ/43                   ?0        #1609                ?3364               	;0	>>3364
3363 1247  GOTO/253                  ?0        ?3344                ?2360               	;0
3364 1249  ASSIGN/38                 $1611=    16?64                2362:array (
)      	;0	<<3362
3365 1249  ASSIGN_DIM/147            ?1542     16?7                 2361:'categories'   	;0
3366 1249  OP_DATA/137               ?0        $1611                ?0                  	;0
3367 1250  GOTO/253                  ?0        ?3292                ?2363               	;0
3368 1252  ASSIGN_DIM/147            ?1544     16?7                 2364:'user_info'    	;0
3369 1252  OP_DATA/137               ?0        2365:array (
)       ?0                  	;0
3370 1253  INIT_ARRAY/71             #1614=    2367:true            2368:'xui'          	;42
3371 1253  FETCH_CONSTANT/99         #1615=    ?0                   2369:'XUI_VERSION'  	;16
3372 1253  ADD_ARRAY_ELEMENT/72      #1614=    #1615                2372:'version'      	;0
3373 1253  FETCH_CONSTANT/99         #1616=    ?0                   2373:'XUI_REVISION' 	;16
3374 1253  ADD_ARRAY_ELEMENT/72      #1614=    #1616                2376:'revision'     	;0
3375 1253  ADD_ARRAY_ELEMENT/72      #1614=    16?65                2377:'url'          	;0
3376 1253  FETCH_CONSTANT/99         #1618=    ?0                   2381:'SERVER_ID'    	;16
3377 1253  FETCH_STATIC_PROP_R/173   $1617=    2378:'rServers'      2379:'XUI'          	;0
3378 1253  FETCH_DIM_R/81            $1619=    $1617                #1618               	;0
3379 1253  FETCH_DIM_R/81            $1620=    $1619                2384:'http_broadcast_port'	;0
3380 1253  ADD_ARRAY_ELEMENT/72      #1614=    $1620                2385:'port'         	;0
3381 1253  FETCH_CONSTANT/99         #1622=    ?0                   2389:'SERVER_ID'    	;16
3382 1253  FETCH_STATIC_PROP_R/173   $1621=    2386:'rServers'      2387:'XUI'          	;0
3383 1253  FETCH_DIM_R/81            $1623=    $1621                #1622               	;0
3384 1253  FETCH_DIM_R/81            $1624=    $1623                2392:'https_broadcast_port'	;0
3385 1253  ADD_ARRAY_ELEMENT/72      #1614=    $1624                2393:'https_port'   	;0
3386 1253  FETCH_CONSTANT/99         #1626=    ?0                   2397:'SERVER_ID'    	;16
3387 1253  FETCH_STATIC_PROP_R/173   $1625=    2394:'rServers'      2395:'XUI'          	;0
3388 1253  FETCH_DIM_R/81            $1627=    $1625                #1626               	;0
3389 1253  FETCH_DIM_R/81            $1628=    $1627                2400:'server_protocol'	;0
3390 1253  ADD_ARRAY_ELEMENT/72      #1614=    $1628                2401:'server_protocol'	;0
3391 1253  FETCH_CONSTANT/99         #1630=    ?0                   2405:'SERVER_ID'    	;16
3392 1253  FETCH_STATIC_PROP_R/173   $1629=    2402:'rServers'      2403:'XUI'          	;0
3393 1253  FETCH_DIM_R/81            $1631=    $1629                #1630               	;0
3394 1253  FETCH_DIM_R/81            $1632=    $1631                2408:'rtmp_port'    	;0
3395 1253  ADD_ARRAY_ELEMENT/72      #1614=    $1632                2409:'rtmp_port'    	;0
3396 1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   2410:'time'         	;0
3397 1253  DO_FCALL_BY_NAME/131      $1633=    ?0                   ?0                  	;0
3398 1253  ADD_ARRAY_ELEMENT/72      #1614=    $1633                2412:'timestamp_now'	;0
3399 1253  INIT_FCALL_BY_NAME/59     ?0        ?0                   2413:'date'         	;1
3400 1253  SEND_VAL_EX/116           ?80       2415:'Y-m-d H:i:s'   ?1                  	;0
3401 1253  DO_FCALL_BY_NAME/131      $1634=    ?0                   ?0                  	;0
3402 1253  ADD_ARRAY_ELEMENT/72      #1614=    $1634                2416:'time_now'     	;0
3403 1253  ASSIGN_DIM/147            ?1545     16?7                 2366:'server_info'  	;0
3404 1253  OP_DATA/137               ?0        #1614                ?0                  	;0
3405 1254  FETCH_STATIC_PROP_R/173   $1635=    2417:'rSettings'     2418:'XUI'          	;0
3406 1254  FETCH_DIM_R/81            $1636=    $1635                2420:'force_epg_timezone'	;0
3407 1254  JMPZ/43                   ?0        $1636                ?3409               	;0	>>3409
3408 1255  GOTO/253                  ?0        ?3269                ?2421               	;0
3409 1257  FETCH_STATIC_PROP_R/173   $1639=    2424:'rSettings'     2425:'XUI'          	;0	<<3407
3410 1257  FETCH_DIM_R/81            $1640=    $1639                2427:'default_timezone'	;0
3411 1257  FETCH_DIM_W/84            $1637=    16?7                 2422:'server_info'  	;0
3412 1257  ASSIGN_DIM/147            ?1570     $1637                2423:'timezone'     	;0
3413 1257  OP_DATA/137               ?0        $1640                ?0                  	;0
3414 1258  GOTO/253                  ?0        ?3272                ?2428               	;0
3415 1259  GOTO/253                  ?0        ?3269                ?2429               	;0
3416 1261  FETCH_STATIC_PROP_R/173   $1641=    2430:'db'            2431:'XUI'          	;0
3417 1261  INIT_METHOD_CALL/112      ?0        $1641                2433:'query'        	;1
3418 1261  ROPE_INIT/54              #1643=    ?0                   2435:'SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type '	;5
3419 1261  ROPE_ADD/55               #1643=    #1643                16?57               	;1
3420 1261  ROPE_ADD/55               #1643=    #1643                2436:' ORDER BY '   	;2
3421 1261  ROPE_ADD/55               #1643=    #1643                16?53               	;3
3422 1261  ROPE_END/56               #1642=    #1643                2437:';'            	;4
3423 1261  SEND_VAL_EX/116           ?80       #1642                ?1                  	;0
3424 1261  SEND_UNPACK/165           ?80       16?56                ?1                  	;0
3425 1261  DO_FCALL/60               ?1578     ?0                   ?0                  	;0
3426 1262  FETCH_STATIC_PROP_R/173   $1647=    2438:'db'            2439:'XUI'          	;0
3427 1262  INIT_METHOD_CALL/112      ?0        $1647                2441:'get_rows'     	;0
3428 1262  DO_FCALL/60               $1648=    ?0                   ?0                  	;0
3429 1262  ASSIGN/38                 ?1581     16?52                $1648               	;0
3430 1265  FE_RESET_R/77             $1650=    16?52                ?3584               	;0
3431 1265  FE_FETCH_R/78             ?0        $1650                16?58               	;3584	>>3584	<<3583
3432 1266  NOP/0                     ?0        ?0                   ?0                  	;1
3433 1266  GOTO/253                  ?0        ?3541                ?2443               	;0
3434 1269  ISSET_ISEMPTY_DIM_OBJ/115 #1651=    16?58                2444:'tv_archive_server_id'	;16777216
3435 1269  BOOL_NOT/13               #1652=    #1651                ?0                  	;0
3436 1269  JMPZ_EX/46                #1652=    #1652                ?3440               	;0	>>3440
3437 1269  ISSET_ISEMPTY_DIM_OBJ/115 #1653=    16?58                2445:'tv_archive_duration'	;16777216
3438 1269  BOOL_NOT/13               #1654=    #1653                ?0                  	;0
3439 1269  BOOL/52                   #1652=    #1654                ?0                  	;0
3440 1269  JMPZ/43                   ?0        #1652                ?3443               	;0	>>3443	<<3436
3441 1269  QM_ASSIGN/22              #1655=    2446:1               ?0                  	;0
3442 1269  JMP/42                    ?0        ?3444                ?0                  	;0	>>3444
3443 1269  QM_ASSIGN/22              #1655=    2447:0               ?0                  	;0	<<3440
3444 1269  ASSIGN/38                 ?1588     16?61                #1655               	;0	<<3442
3445 1270  INIT_FCALL_BY_NAME/59     ?0        ?0                   2448:'json_decode'  	;2
3446 1270  FETCH_DIM_FUNC_ARG/93     $1657=    16?58                2450:'category_id'  	;1
3447 1270  SEND_VAR_EX/66            ?80       $1657                ?1                  	;0
3448 1270  SEND_VAL_EX/116           ?96       2451:true            ?2                  	;0
3449 1270  DO_FCALL_BY_NAME/131      $1658=    ?0                   ?0                  	;0
3450 1270  FE_RESET_R/77             $1659=    $1658                ?3538               	;0
3451 1270  FE_FETCH_R/78             ?0        $1659                16?45               	;3538	>>3538	<<3537
3452 1271  FETCH_DIM_R/81            $1661=    16?58                2453:'id'           	;0
3453 1271  FETCH_DIM_R/81            $1663=    16?58                2454:'live'         	;0
3454 1271  JMPZ/43                   ?0        $1663                ?3457               	;0	>>3457
3455 1271  QM_ASSIGN/22              #1664=    16?54                ?0                  	;0
3456 1271  JMP/42                    ?0        ?3458                ?0                  	;0	>>3458
3457 1271  QM_ASSIGN/22              #1664=    16?41                ?0                  	;0	<<3454
3458 1271  INIT_ARRAY/71             #1665=    #1664                2455:'num'          	;78	<<3456
3459 1271  INIT_STATIC_METHOD_CALL/113 ?0        2456:'XUI'           2458:'Cf5d4A2F3de8982C'	;2
3460 1271  FETCH_DIM_FUNC_ARG/93     $1666=    16?58                2460:'stream_display_name'	;1
3461 1271  SEND_VAR_EX/66            ?80       $1666                ?1                  	;0
3462 1271  FETCH_DIM_FUNC_ARG/93     $1667=    16?58                2461:'year'         	;2
3463 1271  SEND_VAR_EX/66            ?96       $1667                ?2                  	;0
3464 1271  DO_FCALL/60               $1668=    ?0                   ?0                  	;0
3465 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1668                2462:'name'         	;0
3466 1271  FETCH_DIM_R/81            $1669=    16?58                2463:'stream_display_name'	;0
3467 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1669                2464:'title'        	;0
3468 1271  FETCH_DIM_R/81            $1670=    16?58                2465:'year'         	;0
3469 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1670                2466:'year'         	;0
3470 1271  FETCH_DIM_R/81            $1671=    16?58                2467:'type_key'     	;0
3471 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1671                2468:'stream_type'  	;0
3472 1271  FETCH_DIM_R/81            $1672=    16?58                2469:'type_key'     	;0
3473 1271  FETCH_DIM_R/81            $1673=    16?66                $1672               	;0
3474 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1673                2470:'type_name'    	;0
3475 1271  FETCH_DIM_R/81            $1674=    16?58                2471:'id'           	;0
3476 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1674                2472:'stream_id'    	;0
3477 1271  INIT_STATIC_METHOD_CALL/113 ?0        2473:'XUI'           2475:'fCA722697178454B'	;1
3478 1271  SEND_VAR_EX/66            ?80       16?67                ?1                  	;0
3479 1271  DO_FCALL/60               $1675=    ?0                   ?0                  	;0
3480 1271  JMP_SET/152               #1676=    $1675                ?3482               	;0
3481 1271  QM_ASSIGN/22              #1676=    2477:''              ?0                  	;0
3482 1271  ADD_ARRAY_ELEMENT/72      #1665=    #1676                2478:'stream_icon'  	;0
3483 1271  FETCH_DIM_R/81            $1677=    16?58                2479:'channel_id'   	;0
3484 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1677                2480:'epg_channel_id'	;0
3485 1271  FETCH_DIM_R/81            $1678=    16?58                2481:'added'        	;0
3486 1271  JMP_SET/152               #1679=    $1678                ?3488               	;0
3487 1271  QM_ASSIGN/22              #1679=    2482:''              ?0                  	;0
3488 1271  ADD_ARRAY_ELEMENT/72      #1665=    #1679                2483:'added'        	;0
3489 1271  FETCH_DIM_R/81            $1680=    16?64                16?45               	;0
3490 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1680                2484:'category_name'	;0
3491 1271  INIT_FCALL_BY_NAME/59     ?0        ?0                   2485:'strval'       	;1
3492 1271  SEND_VAR_EX/66            ?80       16?45                ?1                  	;0
3493 1271  DO_FCALL_BY_NAME/131      $1681=    ?0                   ?0                  	;0
3494 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1681                2487:'category_id'  	;0
3495 1271  ISSET_ISEMPTY_DIM_OBJ/115 #1682=    16?58                2488:'series_no'    	;16777216
3496 1271  BOOL_NOT/13               #1683=    #1682                ?0                  	;0
3497 1271  JMPZ/43                   ?0        #1683                ?3501               	;0	>>3501
3498 1271  FETCH_DIM_R/81            $1684=    16?58                2489:'series_no'    	;0
3499 1271  QM_ASSIGN/22              #1685=    $1684                ?0                  	;0
3500 1271  JMP/42                    ?0        ?3502                ?0                  	;0	>>3502
3501 1271  QM_ASSIGN/22              #1685=    2490:NULL            ?0                  	;0	<<3497
3502 1271  ADD_ARRAY_ELEMENT/72      #1665=    #1685                2491:'series_no'    	;0	<<3500
3503 1271  FETCH_DIM_R/81            $1686=    16?58                2492:'live'         	;0
3504 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1686                2493:'live'         	;0
3505 1271  FETCH_DIM_R/81            $1687=    16?58                2494:'target_container'	;0
3506 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1687                2495:'container_extension'	;0
3507 1271  INIT_FCALL_BY_NAME/59     ?0        ?0                   2496:'strval'       	;1
3508 1271  FETCH_DIM_FUNC_ARG/93     $1688=    16?58                2498:'custom_sid'   	;1
3509 1271  SEND_VAR_EX/66            ?80       $1688                ?1                  	;0
3510 1271  DO_FCALL_BY_NAME/131      $1689=    ?0                   ?0                  	;0
3511 1271  ADD_ARRAY_ELEMENT/72      #1665=    $1689                2499:'custom_sid'   	;0
3512 1271  ADD_ARRAY_ELEMENT/72      #1665=    16?61                2500:'tv_archive'   	;0
3513 1271  FETCH_DIM_R/81            $1690=    16?58                2501:'direct_source'	;0
3514 1271  JMPZ/43                   ?0        $1690                ?3523               	;0	>>3523
3515 1271  INIT_FCALL_BY_NAME/59     ?0        ?0                   2502:'json_decode'  	;2
3516 1271  FETCH_DIM_FUNC_ARG/93     $1691=    16?58                2504:'stream_source'	;1
3517 1271  SEND_VAR_EX/66            ?80       $1691                ?1                  	;0
3518 1271  SEND_VAL_EX/116           ?96       2505:true            ?2                  	;0
3519 1271  DO_FCALL_BY_NAME/131      $1692=    ?0                   ?0                  	;0
3520 1271  FETCH_DIM_R/81            $1693=    $1692                2506:0              	;0
3521 1271  QM_ASSIGN/22              #1694=    $1693                ?0                  	;0
3522 1271  JMP/42                    ?0        ?3524                ?0                  	;0	>>3524
3523 1271  QM_ASSIGN/22              #1694=    2507:''              ?0                  	;0	<<3514
3524 1271  ADD_ARRAY_ELEMENT/72      #1665=    #1694                2508:'direct_source'	;0	<<3522
3525 1271  JMPZ/43                   ?0        16?61                ?3532               	;0	>>3532
3526 1271  INIT_FCALL_BY_NAME/59     ?0        ?0                   2509:'intval'       	;1
3527 1271  FETCH_DIM_FUNC_ARG/93     $1695=    16?58                2511:'tv_archive_duration'	;1
3528 1271  SEND_VAR_EX/66            ?80       $1695                ?1                  	;0
3529 1271  DO_FCALL_BY_NAME/131      $1696=    ?0                   ?0                  	;0
3530 1271  QM_ASSIGN/22              #1697=    $1696                ?0                  	;0
3531 1271  JMP/42                    ?0        ?3533                ?0                  	;0	>>3533
3532 1271  QM_ASSIGN/22              #1697=    2512:0               ?0                  	;0	<<3525
3533 1271  ADD_ARRAY_ELEMENT/72      #1665=    #1697                2513:'tv_archive_duration'	;0	<<3531
3534 1271  FETCH_DIM_W/84            $1660=    16?7                 2452:'available_channels'	;0
3535 1271  ASSIGN_DIM/147            ?1594     $1660                $1661               	;0
3536 1271  OP_DATA/137               ?0        #1665                ?0                  	;0
3537 1272  JMP/42                    ?0        ?3451                ?0                  	;0	>>3451
3538 1272  FE_FREE/127               ?0        $1659                ?0                  	;0	<<3450
3539 1276  NOP/0                     ?0        ?0                   ?0                  	;1
3540 1276  GOTO/253                  ?0        ?3583                ?2514               	;0
3541 1278  FETCH_STATIC_PROP_R/173   $1698=    2515:'rCached'       2516:'XUI'          	;0
3542 1278  BOOL_NOT/13               #1699=    $1698                ?0                  	;0
3543 1278  JMPZ/43                   ?0        #1699                ?3546               	;0	>>3546
3544 1279  NOP/0                     ?0        ?0                   ?0                  	;1
3545 1279  GOTO/253                  ?0        ?3560                ?2518               	;0
3546 1281  INIT_FCALL_BY_NAME/59     ?0        ?0                   2519:'igbinary_unserialize'	;1	<<3543
3547 1281  INIT_FCALL_BY_NAME/59     ?0        ?0                   2521:'file_get_contents'	;1
3548 1281  FETCH_CONSTANT/99         #1700=    ?0                   2523:'STREAMS_TMP_PATH'	;16
3549 1281  CONCAT/8                  #1701=    #1700                2526:'stream_'      	;0
3550 1281  INIT_FCALL_BY_NAME/59     ?0        ?0                   2527:'intval'       	;1
3551 1281  SEND_VAR_EX/66            ?80       16?58                ?1                  	;0
3552 1281  DO_FCALL_BY_NAME/131      $1702=    ?0                   ?0                  	;0
3553 1281  CONCAT/8                  #1703=    #1701                $1702               	;0
3554 1281  SEND_VAL_EX/116           ?80       #1703                ?1                  	;0
3555 1281  DO_FCALL_BY_NAME/131      $1704=    ?0                   ?0                  	;0
3556 1281  SEND_VAR_NO_REF_EX/50     ?80       $1704                ?1                  	;0
3557 1281  DO_FCALL_BY_NAME/131      $1705=    ?0                   ?0                  	;0
3558 1281  FETCH_DIM_R/81            $1706=    $1705                2529:'info'         	;0
3559 1281  ASSIGN/38                 ?1639     16?58                $1706               	;0
3560 1283  FETCH_DIM_R/81            $1708=    16?58                2530:'live'         	;0
3561 1283  JMPZ/43                   ?0        $1708                ?3564               	;0	>>3564
3562 1284  NOP/0                     ?0        ?0                   ?0                  	;1
3563 1284  GOTO/253                  ?0        ?3577                ?2531               	;0
3564 1286  POST_INC/36               #1709=    16?41                ?0                  	;0	<<3561
3565 1286  FREE/70                   ?0        #1709                ?0                  	;0
3566 1287  NOP/0                     ?0        ?0                   ?0                  	;1
3567 1287  GOTO/253                  ?0        ?3568                ?2532               	;0
3568 1289  INIT_FCALL_BY_NAME/59     ?0        ?0                   2533:'json_decode'  	;2
3569 1289  FETCH_DIM_FUNC_ARG/93     $1710=    16?58                2535:'movie_properties'	;1
3570 1289  SEND_VAR_EX/66            ?80       $1710                ?1                  	;0
3571 1289  SEND_VAL_EX/116           ?96       2536:true            ?2                  	;0
3572 1289  DO_FCALL_BY_NAME/131      $1711=    ?0                   ?0                  	;0
3573 1289  FETCH_DIM_R/81            $1712=    $1711                2537:'movie_image'  	;0
3574 1289  ASSIGN/38                 ?1645     16?67                $1712               	;0
3575 1290  NOP/0                     ?0        ?0                   ?0                  	;1
3576 1290  GOTO/253                  ?0        ?3434                ?2538               	;0
3577 1292  POST_INC/36               #1714=    16?54                ?0                  	;0
3578 1292  FREE/70                   ?0        #1714                ?0                  	;0
3579 1293  FETCH_DIM_R/81            $1715=    16?58                2539:'stream_icon'  	;0
3580 1293  ASSIGN/38                 ?1648     16?67                $1715               	;0
3581 1294  NOP/0                     ?0        ?0                   ?0                  	;1
3582 1294  GOTO/253                  ?0        ?3434                ?2540               	;0
3583 1295  JMP/42                    ?0        ?3431                ?0                  	;0	>>3431
3584 1295  FE_FREE/127               ?0        $1650                ?0                  	;0	<<3430
3585 1297  GOTO/253                  ?0        ?3344                ?2541               	;0
3586 1299  FETCH_STATIC_PROP_R/173   $1717=    2542:'rCached'       2543:'XUI'          	;0
3587 1299  BOOL_NOT/13               #1718=    $1717                ?0                  	;0
3588 1299  JMPZ/43                   ?0        #1718                ?3590               	;0	>>3590
3589 1300  GOTO/253                  ?0        ?3593                ?2545               	;0
3590 1302  FETCH_DIM_R/81            $1719=    16?6                 2546:'channel_ids'  	;0	<<3588
3591 1302  ASSIGN/38                 ?1652     16?52                $1719               	;0
3592 1303  GOTO/253                  ?0        ?3430                ?2547               	;0
3593 1305  ASSIGN/38                 ?1653     16?52                2548:array (
)      	;0
3594 1306  GOTO/253                  ?0        ?3238                ?2549               	;0
3595 1308  INIT_STATIC_METHOD_CALL/113 ?0        2550:'XUI'           2552:'e43c27EBF86B4C47'	;0
3596 1308  DO_FCALL/60               ?1654     ?0                   ?0                  	;0
3597 1310  FETCH_STATIC_PROP_R/173   $1723=    2554:'db'            2555:'XUI'          	;0
3598 1310  INIT_METHOD_CALL/112      ?0        $1723                2557:'query'        	;2
3599 1310  SEND_VAL_EX/116           ?80       2559:'SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `user_id` = ? AND `hls_end` = 0 ORDER BY activity_id ASC' ?1                  	;0
3600 1310  FETCH_DIM_FUNC_ARG/93     $1724=    16?6                 2560:'id'           	;2
3601 1310  SEND_VAR_EX/66            ?96       $1724                ?2                  	;0
3602 1310  DO_FCALL/60               ?1657     ?0                   ?0                  	;0
3603 1311  FETCH_STATIC_PROP_R/173   $1728=    2563:'db'            2564:'XUI'          	;0
3604 1311  INIT_METHOD_CALL/112      ?0        $1728                2566:'get_row'      	;0
3605 1311  DO_FCALL/60               $1729=    ?0                   ?0                  	;0
3606 1311  FETCH_DIM_R/81            $1730=    $1729                2568:'count'        	;0
3607 1311  FETCH_DIM_W/84            $1726=    16?7                 2561:'user_info'    	;0
3608 1311  ASSIGN_DIM/147            ?1659     $1726                2562:'active_cons'  	;0
3609 1311  OP_DATA/137               ?0        $1730                ?0                  	;0
3610 1312  FETCH_STATIC_PROP_R/173   $1731=    2569:'db'            2570:'XUI'          	;0
3611 1312  INIT_METHOD_CALL/112      ?0        $1731                2572:'close_mysql'  	;0
3612 1312  DO_FCALL/60               ?1664     ?0                   ?0                  	;0
3613 1313  GOTO/253                  ?0        ?3614                ?2574               	;0
3614 1315  GOTO/253                  ?0        ?3629                ?2575               	;0
3615 1317  INIT_STATIC_METHOD_CALL/113 ?0        2576:'XUI'           2578:'d6aEB3175A43F301'	;0
3616 1317  DO_FCALL/60               ?1665     ?0                   ?0                  	;0
3617 1318  INIT_FCALL_BY_NAME/59     ?0        ?0                   2582:'count'        	;1
3618 1318  INIT_STATIC_METHOD_CALL/113 ?0        2584:'XUI'           2586:'E7c45286b27f999b'	;3
3619 1318  FETCH_DIM_FUNC_ARG/93     $1736=    16?6                 2588:'id'           	;1
3620 1318  SEND_VAR_EX/66            ?80       $1736                ?1                  	;0
3621 1318  SEND_VAL_EX/116           ?96       2589:true            ?2                  	;0
3622 1318  SEND_VAL_EX/116           ?112      2590:true            ?3                  	;0
3623 1318  DO_FCALL/60               $1737=    ?0                   ?0                  	;0
3624 1318  SEND_VAR_NO_REF_EX/50     ?80       $1737                ?1                  	;0
3625 1318  DO_FCALL_BY_NAME/131      $1738=    ?0                   ?0                  	;0
3626 1318  FETCH_DIM_W/84            $1734=    16?7                 2580:'user_info'    	;0
3627 1318  ASSIGN_DIM/147            ?1667     $1734                2581:'active_cons'  	;0
3628 1318  OP_DATA/137               ?0        $1738                ?0                  	;0
3629 1320  GOTO/253                  ?0        ?3346                ?2591               	;0
3630 1325  INIT_FCALL_BY_NAME/59     ?0        ?0                   2592:'json_encode'  	;2
3631 1325  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
3632 1325  FETCH_CONSTANT/99         #1739=    ?0                   2594:'JSON_PARTIAL_OUTPUT_ON_ERROR'	;16
3633 1325  SEND_VAL_EX/116           ?96       #1739                ?2                  	;0
3634 1325  DO_FCALL_BY_NAME/131      $1740=    ?0                   ?0                  	;0
3635 1325  EXIT/79                   ?0        $1740                ?0                  	;0
3636 1327  GOTO/253                  ?0        ?3727                ?2597               	;0
3637 1329  INIT_FCALL_BY_NAME/59     ?0        ?0                   2598:'register_shutdown_function'	;1	<<0
3638 1329  SEND_VAL_EX/116           ?80       2600:'shutdown'      ?1                  	;0
3639 1329  DO_FCALL_BY_NAME/131      ?1673     ?0                   ?0                  	;0
3640 1330  INCLUDE_OR_EVAL/73        ?1674     2601:'./stream/init.php' ?0                  	;8
3641 1331  INIT_FCALL_BY_NAME/59     ?0        ?0                   2602:'set_time_limit'	;1
3642 1331  SEND_VAL_EX/116           ?80       2604:0               ?1                  	;0
3643 1331  DO_FCALL_BY_NAME/131      ?1675     ?0                   ?0                  	;0
3644 1332  FETCH_STATIC_PROP_R/173   $1744=    2605:'rSettings'     2606:'XUI'          	;0
3645 1332  FETCH_DIM_R/81            $1745=    $1744                2608:'force_epg_timezone'	;0
3646 1332  BOOL_NOT/13               #1746=    $1745                ?0                  	;0
3647 1332  JMPZ/43                   ?0        #1746                ?3649               	;0	>>3649
3648 1333  GOTO/253                  ?0        ?163                 ?2609               	;0
3649 1335  INIT_FCALL_BY_NAME/59     ?0        ?0                   2610:'date_default_timezone_set'	;1	<<3647
3650 1335  SEND_VAL_EX/116           ?80       2612:'UTC'           ?1                  	;0
3651 1335  DO_FCALL_BY_NAME/131      ?1679     ?0                   ?0                  	;0
3652 1336  GOTO/253                  ?0        ?163                 ?2613               	;0
3653 1338  INIT_FCALL_BY_NAME/59     ?0        ?0                   2614:'header'       	;1
3654 1338  SEND_VAL_EX/116           ?80       2616:'Content-Type: application/json' ?1                  	;0
3655 1338  DO_FCALL_BY_NAME/131      ?1680     ?0                   ?0                  	;0
3656 1339  FETCH_IS/89               $1749=    2617:'_SERVER'       ?0                  	;0
3657 1339  ISSET_ISEMPTY_DIM_OBJ/115 #1750=    $1749                2618:'HTTP_ORIGIN'  	;33554432
3658 1339  BOOL_NOT/13               #1751=    #1750                ?0                  	;0
3659 1339  JMPZ/43                   ?0        #1751                ?3661               	;0	>>3661
3660 1340  GOTO/253                  ?0        ?3667                ?2619               	;0
3661 1342  INIT_FCALL_BY_NAME/59     ?0        ?0                   2620:'header'       	;1	<<3659
3662 1342  FETCH_R/80                $1752=    2622:'_SERVER'       ?0                  	;0
3663 1342  FETCH_DIM_R/81            $1753=    $1752                2623:'HTTP_ORIGIN'  	;0
3664 1342  CONCAT/8                  #1754=    2624:'Access-Control-Allow-Origin: ' $1753               	;0
3665 1342  SEND_VAL_EX/116           ?80       #1754                ?1                  	;0
3666 1342  DO_FCALL_BY_NAME/131      ?1687     ?0                   ?0                  	;0
3667 1344  INIT_FCALL_BY_NAME/59     ?0        ?0                   2625:'header'       	;1
3668 1344  SEND_VAL_EX/116           ?80       2627:'Access-Control-Allow-Credentials: true' ?1                  	;0
3669 1344  DO_FCALL_BY_NAME/131      ?1688     ?0                   ?0                  	;0
3670 1345  GOTO/253                  ?0        ?250                 ?2628               	;0
3671 1347  GOTO/253                  ?0        ?3676                ?2629               	;0
3672 1349  ASSIGN/38                 ?1689     16?9                 2630:false          	;0
3673 1350  INIT_FCALL_BY_NAME/59     ?0        ?0                   2631:'generateError'	;1
3674 1350  SEND_VAL_EX/116           ?80       2633:'LEGACY_PANEL_API_DISABLED' ?1                  	;0
3675 1350  DO_FCALL_BY_NAME/131      ?1690     ?0                   ?0                  	;0
3676 1352  GOTO/253                  ?0        ?200                 ?2634               	;0
3677 1354  INIT_FCALL_BY_NAME/59     ?0        ?0                   2635:'ini_set'      	;2
3678 1354  SEND_VAL_EX/116           ?80       2637:'memory_limit'  ?1                  	;0
3679 1354  SEND_VAL_EX/116           ?96       2638:-1              ?2                  	;0
3680 1354  DO_FCALL_BY_NAME/131      ?1691     ?0                   ?0                  	;0
3681 1355  JMPZ/43                   ?0        16?6                 ?3683               	;0	>>3683
3682 1356  GOTO/253                  ?0        ?136                 ?2639               	;0
3683 1358  INIT_STATIC_METHOD_CALL/113 ?0        2640:'XUI'           2642:'A1fEF6439c28608e'	;3	<<3681
3684 1358  SEND_VAL_EX/116           ?80       2644:NULL            ?1                  	;0
3685 1358  SEND_VAL_EX/116           ?96       2645:NULL            ?2                  	;0
3686 1358  SEND_VAR_EX/66            ?112      16?3                 ?3                  	;0
3687 1358  DO_FCALL/60               ?1692     ?0                   ?0                  	;0
3688 1359  INIT_FCALL_BY_NAME/59     ?0        ?0                   2646:'generateError'	;1
3689 1359  SEND_VAL_EX/116           ?80       2648:'INVALID_CREDENTIALS' ?1                  	;0
3690 1359  DO_FCALL_BY_NAME/131      ?1693     ?0                   ?0                  	;0
3691 1360  GOTO/253                  ?0        ?3636                ?2649               	;0
3692 1361  GOTO/253                  ?0        ?136                 ?2650               	;0
3693 1363  FETCH_STATIC_PROP_IS/176  $1762=    2651:'rRequest'      2652:'XUI'          	;0
3694 1363  FETCH_DIM_IS/90           $1763=    $1762                2654:'params'       	;0
3695 1363  ISSET_ISEMPTY_DIM_OBJ/115 #1764=    $1763                2655:'items_per_page'	;16777216
3696 1363  JMPZ/43                   ?0        #1764                ?3699               	;0	>>3699
3697 1363  QM_ASSIGN/22              #1765=    2656:0               ?0                  	;0
3698 1363  JMP/42                    ?0        ?3709                ?0                  	;0	>>3709
3699 1363  INIT_FCALL_BY_NAME/59     ?0        ?0                   2657:'abs'          	;1	<<3696
3700 1363  INIT_FCALL_BY_NAME/59     ?0        ?0                   2659:'intval'       	;1
3701 1363  FETCH_STATIC_PROP_FUNC_ARG/177 $1766=    2661:'rRequest'      2662:'XUI'          	;1
3702 1363  FETCH_DIM_FUNC_ARG/93     $1767=    $1766                2664:'params'       	;1
3703 1363  FETCH_DIM_FUNC_ARG/93     $1768=    $1767                2665:'items_per_page'	;1
3704 1363  SEND_VAR_EX/66            ?80       $1768                ?1                  	;0
3705 1363  DO_FCALL_BY_NAME/131      $1769=    ?0                   ?0                  	;0
3706 1363  SEND_VAR_NO_REF_EX/50     ?80       $1769                ?1                  	;0
3707 1363  DO_FCALL_BY_NAME/131      $1770=    ?0                   ?0                  	;0
3708 1363  QM_ASSIGN/22              #1765=    $1770                ?0                  	;0
3709 1363  ASSIGN/38                 ?1703     16?15                #1765               	;0	<<3698
3710 1364  ASSIGN/38                 ?1704     16?66                2666:array (
  'live' => 'Live Streams',
  'movie' => 'Movies',
  'created_live' => 'Created Channels',
  'radio_streams' => 'Radio Stations',
  'series' => 'TV Series',
)	;0
3711 1365  INIT_STATIC_METHOD_CALL/113 ?0        2667:'XUI'           2669:'c65c7f64e35c199f'	;0
3712 1365  DO_FCALL/60               $1773=    ?0                   ?0                  	;0
3713 1365  ASSIGN/38                 ?1706     16?35                $1773               	;0
3714 1366  INIT_FCALL_BY_NAME/59     ?0        ?0                   2671:'parse_url'    	;1
3715 1366  SEND_VAR_EX/66            ?80       16?35                ?1                  	;0
3716 1366  DO_FCALL_BY_NAME/131      $1775=    ?0                   ?0                  	;0
3717 1366  FETCH_DIM_R/81            $1776=    $1775                2673:'host'         	;0
3718 1366  ASSIGN/38                 ?1709     16?65                $1776               	;0
3719 1367  ASSIGN/38                 ?1710     16?8                 2674:array (
  0 => 'get_epg',
  200 => 'get_vod_categories',
  201 => 'get_live_categories',
  202 => 'get_live_streams',
  203 => 'get_vod_streams',
  204 => 'get_series_info',
  205 => 'get_short_epg',
  206 => 'get_series_categories',
  207 => 'get_simple_data_table',
  208 => 'get_series',
  209 => 'get_vod_info',
)	;0
3720 1368  GOTO/253                  ?0        ?84                  ?2675               	;0
3721 1370  GOTO/253                  ?0        ?3723                ?2676               	;0
3722 1372  ASSIGN/38                 ?1711     16?10                2677:true           	;0
3723 1374  INIT_STATIC_METHOD_CALL/113 ?0        2678:'XUI'           2680:'F1359F4b41c091Ec'	;1
3724 1374  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
3725 1374  DO_FCALL/60               ?1712     ?0                   ?0                  	;0
3726 1375  GOTO/253                  ?0        ?3653                ?2682               	;0
3727 1377  NOP/0                     ?0        ?0                   ?0                  	;0
3728 1391  NOP/0                     ?0        2683:1               ?0                  	;4294967295
*/

?>