<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?1387                ?0                  	;0	>>1387
1    5     GOTO/253                  ?0        ?9                   ?1                  	;0
2    7     CONCAT/8                  #26=      3:'stream?id='       16?1                	;0
3    7     INIT_ARRAY/71             #27=      #26                  ?0                  	;8
4    7     ADD_ARRAY_ELEMENT/72      #27=      4:'edit_stream'      ?0                  	;0
5    7     INIT_ARRAY/71             #28=      #27                  5:'Edit Stream'     	;10
6    7     ADD_ARRAY_ELEMENT/72      #28=      6:array (
  0 => 'streams',
  1 => 'streams',
) 7:'Manage Streams'  	;0
7    7     ASSIGN_DIM/147            ?0        16?0                 2:'stream_view'     	;0
8    7     OP_DATA/137               ?0        #28                  ?0                  	;0
9    10    GOTO/253                  ?0        ?1068                ?8                  	;0
10   12    CONCAT/8                  #30=      10:'radio?id='       16?1                	;0
11   12    INIT_ARRAY/71             #31=      #30                  ?0                  	;8
12   12    ADD_ARRAY_ELEMENT/72      #31=      11:'edit_radio'      ?0                  	;0
13   12    INIT_ARRAY/71             #32=      #31                  12:'Edit Station'   	;10
14   12    ADD_ARRAY_ELEMENT/72      #32=      13:array (
  0 => 'radios',
  1 => 'radio',
) 14:'Manage Stations'	;0
15   12    ASSIGN_DIM/147            ?4        16?0                 9:'stream_view'     	;0
16   12    OP_DATA/137               ?0        #32                  ?0                  	;0
17   14    GOTO/253                  ?0        ?986                 ?15                 	;0
18   16    CONCAT/8                  #34=      17:'created_channel?id=' 16?1                	;0
19   16    INIT_ARRAY/71             #35=      #34                  ?0                  	;8
20   16    ADD_ARRAY_ELEMENT/72      #35=      18:'edit_cchannel'   ?0                  	;0
21   16    INIT_ARRAY/71             #36=      #35                  19:'Edit Channel'   	;10
22   16    ADD_ARRAY_ELEMENT/72      #36=      20:array (
  0 => 'created_channels',
  1 => 'streams',
) 21:'Manage Channels'	;0
23   16    ASSIGN_DIM/147            ?8        16?0                 16:'stream_view'    	;0
24   16    OP_DATA/137               ?0        #36                  ?0                  	;0
25   17    GOTO/253                  ?0        ?986                 ?22                 	;0
26   19    FETCH_DIM_R/81            $37=      16?2                 23:'type'           	;0
27   19    IS_EQUAL/17               #38=      $37                  24:5                	;0
28   19    BOOL_NOT/13               #39=      #38                  ?0                  	;0
29   19    JMPZ/43                   ?0        #39                  ?31                 	;0	>>31
30   20    GOTO/253                  ?0        ?50                  ?25                 	;0
31   22    CONCAT/8                  #41=      27:'episode?id='     16?1                	;0	<<29
32   22    CONCAT/8                  #42=      #41                  28:'&sid='          	;0
33   22    INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'intval'         	;1
34   22    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
35   22    DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
36   22    CONCAT/8                  #44=      #42                  $43                 	;0
37   22    INIT_ARRAY/71             #45=      #44                  ?0                  	;8
38   22    ADD_ARRAY_ELEMENT/72      #45=      31:'edit_episode'    ?0                  	;0
39   22    INIT_ARRAY/71             #46=      #45                  32:'Edit Episode'   	;14
40   22    INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'intval'         	;1
41   22    SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
42   22    DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
43   22    CONCAT/8                  #48=      35:'episodes?series=' $47                 	;0
44   22    INIT_ARRAY/71             #49=      #48                  ?0                  	;8
45   22    ADD_ARRAY_ELEMENT/72      #49=      36:'episodes'        ?0                  	;0
46   22    ADD_ARRAY_ELEMENT/72      #46=      #49                  37:'View Episodes'  	;0
47   22    ADD_ARRAY_ELEMENT/72      #46=      38:array (
  0 => 'series',
  1 => 'series',
) 39:'Manage Series'  	;0
48   22    ASSIGN_DIM/147            ?15       16?0                 26:'stream_view'    	;0
49   22    OP_DATA/137               ?0        #46                  ?0                  	;0
50   24    GOTO/253                  ?0        ?17                  ?40                 	;0
51   26    GOTO/253                  ?0        ?10                  ?41                 	;0
52   29    SWITCH_STRING/188         ?0        16?4                 42:array (
  'streams' => 84,
  'created_channels' => 84,
  'movies' => 84,
  'series' => 84,
  'users' => 84,
  'mags' => 84,
  'client_logs' => 84,
  'line_activity' => 84,
  'live_connections' => 84,
  'lines' => 84,
  'radios' => 84,
  'enigmas' => 84,
  'ondemand' => 84,
  'episodes' => 84,
  'stream_view' => 284,
)	;462
53   30    CASE/48                   #50=      16?4                 43:'streams'        	;0	>>55
54   30    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
55   31    CASE/48                   #50=      16?4                 44:'created_channels'	;0	>>57	<<53
56   31    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
57   32    CASE/48                   #50=      16?4                 45:'movies'         	;0	>>59	<<55
58   32    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
59   33    CASE/48                   #50=      16?4                 46:'series'         	;0	>>61	<<57
60   33    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
61   34    CASE/48                   #50=      16?4                 47:'users'          	;0	>>63	<<59
62   34    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
63   35    CASE/48                   #50=      16?4                 48:'mags'           	;0	>>65	<<61
64   35    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
65   36    CASE/48                   #50=      16?4                 49:'client_logs'    	;0	>>67	<<63
66   36    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
67   37    CASE/48                   #50=      16?4                 50:'line_activity'  	;0	>>69	<<65
68   37    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
69   38    CASE/48                   #50=      16?4                 51:'live_connections'	;0	>>71	<<67
70   38    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
71   39    CASE/48                   #50=      16?4                 52:'lines'          	;0	>>73	<<69
72   39    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
73   40    CASE/48                   #50=      16?4                 53:'radios'         	;0	>>75	<<71
74   40    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
75   41    CASE/48                   #50=      16?4                 54:'enigmas'        	;0	>>77	<<73
76   41    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
77   42    CASE/48                   #50=      16?4                 55:'ondemand'       	;0	>>79	<<75
78   42    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
79   43    CASE/48                   #50=      16?4                 56:'episodes'       	;0	>>81	<<77
80   43    JMPNZ/44                  ?0        #50                  ?84                 	;0	>>84
81   124   CASE/48                   #50=      16?4                 57:'stream_view'    	;0	>>83	<<79
82   124   JMPNZ/44                  ?0        #50                  ?284                	;0	>>284
83   124   JMP/42                    ?0        ?462                 ?0                  	;0	>>462	<<81
84   44    GOTO/253                  ?0        ?158                 ?58                 	;0	<<54,56,58,60,62,64,66,68,70,72,74,76,78,80
85   46    ECHO/40                   ?0        59:'<button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed-sm" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-caret-down"></i></button>
                <div class="dropdown-menu">' ?0                  	;0
86   47    INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'array_slice'    	;3
87   47    SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
88   47    JMPZ/43                   ?0        16?6                 ?91                 	;0	>>91
89   47    QM_ASSIGN/22              #51=      62:0                 ?0                  	;0
90   47    JMP/42                    ?0        ?92                  ?0                  	;0	>>92
91   47    QM_ASSIGN/22              #51=      63:1                 ?0                  	;0	<<88
92   47    SEND_VAL_EX/116           ?96       #51                  ?2                  	;0	<<90
93   47    INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'count'          	;1
94   47    SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
95   47    DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
96   47    SEND_VAR_NO_REF_EX/50     ?112      $52                  ?3                  	;0
97   47    DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
98   47    FE_RESET_R/77             $54=      $53                  ?152                	;0
99   47    FE_FETCH_R/78             #55=      $54                  16?7                	;152	>>152	<<151
100  47    ASSIGN/38                 ?31       16?8                 #55                 	;0
101  48    NOP/0                     ?0        ?0                   ?0                  	;1
102  48    GOTO/253                  ?0        ?103                 ?66                 	;0
103  50    BOOL_NOT/13               #57=      16?8                 ?0                  	;0
104  50    JMPZ/43                   ?0        #57                  ?107                	;0	>>107
105  51    NOP/0                     ?0        ?0                   ?0                  	;1
106  51    GOTO/253                  ?0        ?149                 ?67                 	;0
107  53    JMPZ/43                   ?0        16?7                 ?110                	;0	>>110	<<104
108  54    NOP/0                     ?0        ?0                   ?0                  	;1
109  54    GOTO/253                  ?0        ?115                 ?68                 	;0
110  56    CONCAT/8                  #58=      69:'<a class="dropdown-item" href="javascript: void(0);" onClick="showModal();">' 16?8                	;0	<<107
111  56    CONCAT/8                  #59=      #58                  70:'</a>'           	;0
112  56    ECHO/40                   ?0        #59                  ?0                  	;0
113  57    NOP/0                     ?0        ?0                   ?0                  	;1
114  57    GOTO/253                  ?0        ?149                 ?71                 	;0
115  59    NOP/0                     ?0        ?0                   ?0                  	;1
116  59    GOTO/253                  ?0        ?117                 ?72                 	;0
117  61    INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'substr'         	;3
118  61    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
119  61    SEND_VAL_EX/116           ?96       75:0                 ?2                  	;0
120  61    SEND_VAL_EX/116           ?112      76:5                 ?3                  	;0
121  61    DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
122  61    IS_EQUAL/17               #61=      $60                  77:'code:'          	;0
123  61    JMPZ/43                   ?0        #61                  ?126                	;0	>>126
124  62    NOP/0                     ?0        ?0                   ?0                  	;1
125  62    GOTO/253                  ?0        ?133                 ?78                 	;0
126  64    CONCAT/8                  #62=      79:'<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' 16?7                	;0	<<123
127  64    CONCAT/8                  #63=      #62                  80:'\');">'         	;0
128  64    CONCAT/8                  #64=      #63                  16?8                	;0
129  64    CONCAT/8                  #65=      #64                  81:'</a>'           	;0
130  64    ECHO/40                   ?0        #65                  ?0                  	;0
131  65    NOP/0                     ?0        ?0                   ?0                  	;1
132  65    GOTO/253                  ?0        ?149                 ?82                 	;0
133  67    INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'substr'         	;3
134  67    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
135  67    SEND_VAL_EX/116           ?96       85:5                 ?2                  	;0
136  67    INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'strlen'         	;1
137  67    SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
138  67    DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
139  67    SUB/2                     #67=      $66                  88:5                	;0
140  67    SEND_VAL_EX/116           ?112      #67                  ?3                  	;0
141  67    DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
142  67    CONCAT/8                  #69=      89:'<a class="dropdown-item" href="javascript: void(0);" ' $68                 	;0
143  67    CONCAT/8                  #70=      #69                  90:'>'              	;0
144  67    CONCAT/8                  #71=      #70                  16?8                	;0
145  67    CONCAT/8                  #72=      #71                  91:'</a>'           	;0
146  67    ECHO/40                   ?0        #72                  ?0                  	;0
147  68    NOP/0                     ?0        ?0                   ?0                  	;1
148  68    GOTO/253                  ?0        ?149                 ?92                 	;0
149  74    NOP/0                     ?0        ?0                   ?0                  	;1
150  74    GOTO/253                  ?0        ?151                 ?93                 	;0
151  75    JMP/42                    ?0        ?99                  ?0                  	;0	>>99
152  75    FE_FREE/127               ?0        $54                  ?0                  	;0	<<98
153  78    ECHO/40                   ?0        94:'</div>'          ?0                  	;0
154  80    GOTO/253                  ?0        ?155                 ?95                 	;0
155  82    ECHO/40                   ?0        96:'</div>'          ?0                  	;0
156  83    GOTO/253                  ?0        ?1413                ?97                 	;0
157  84    GOTO/253                  ?0        ?284                 ?98                 	;0
158  86    ECHO/40                   ?0        99:'<div class="btn-group">' ?0                  	;0
159  87    BOOL_NOT/13               #73=      16?6                 ?0                  	;0
160  87    JMPZ_EX/46                #73=      #73                  ?174                	;0	>>174
161  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'e589A4Bf54a2daD1'	;2
162  87    SEND_VAL_EX/116           ?80       102:'adv'            ?1                  	;0
163  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'array_keys'    	;1
164  87    FETCH_DIM_FUNC_ARG/93     $75=      16?0                 16?4                	;1
165  87    SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
166  87    DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
167  87    FETCH_DIM_R/81            $77=      $76                  105:0               	;0
168  87    FETCH_DIM_FUNC_ARG/93     $74=      16?0                 16?4                	;2
169  87    FETCH_DIM_FUNC_ARG/93     $78=      $74                  $77                 	;2
170  87    FETCH_DIM_FUNC_ARG/93     $79=      $78                  106:1               	;2
171  87    SEND_VAR_EX/66            ?96       $79                  ?2                  	;0
172  87    DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
173  87    BOOL/52                   #73=      $80                  ?0                  	;0
174  87    JMPZ_EX/46                #73=      #73                  ?186                	;0	>>186	<<160
175  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'strlen'        	;1
176  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'array_keys'    	;1
177  87    FETCH_DIM_FUNC_ARG/93     $81=      16?0                 16?4                	;1
178  87    SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
179  87    DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
180  87    SEPARATE/156              $82=      $82                  ?0                  	;0
181  87    FETCH_DIM_FUNC_ARG/93     $83=      $82                  111:0               	;1
182  87    SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
183  87    DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
184  87    IS_SMALLER/19             #85=      112:0                $84                 	;0
185  87    BOOL/52                   #73=      #85                  ?0                  	;0
186  87    BOOL_NOT/13               #86=      #73                  ?0                  	;0	<<174
187  87    JMPZ/43                   ?0        #86                  ?189                	;0	>>189
188  88    GOTO/253                  ?0        ?237                 ?113                	;0
189  90    INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'array_keys'    	;1	<<187
190  90    FETCH_DIM_FUNC_ARG/93     $88=      16?0                 16?4                	;1
191  90    SEND_VAR_EX/66            ?80       $88                  ?1                  	;0
192  90    DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
193  90    FETCH_DIM_R/81            $90=      $89                  116:0               	;0
194  90    FETCH_DIM_R/81            $87=      16?0                 16?4                	;0
195  90    FETCH_DIM_R/81            $91=      $87                  $90                 	;0
196  90    FETCH_DIM_R/81            $92=      $91                  117:0               	;0
197  90    JMPZ/43                   ?0        $92                  ?199                	;0	>>199
198  91    GOTO/253                  ?0        ?218                 ?118                	;0
199  93    INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'array_keys'    	;1	<<197
200  93    FETCH_DIM_FUNC_ARG/93     $94=      16?0                 16?4                	;1
201  93    SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
202  93    DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
203  93    FETCH_DIM_R/81            $96=      $95                  121:0               	;0
204  93    FETCH_DIM_IS/90           $93=      16?0                 16?4                	;0
205  93    FETCH_DIM_IS/90           $97=      $93                  $96                 	;0
206  93    ISSET_ISEMPTY_DIM_OBJ/115 #98=      $97                  122:2               	;33554432
207  93    JMPZ/43                   ?0        #98                  ?209                	;0	>>209
208  94    GOTO/253                  ?0        ?264                 ?123                	;0
209  96    INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'array_keys'    	;1	<<207
210  96    FETCH_DIM_FUNC_ARG/93     $99=      16?0                 16?4                	;1
211  96    SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
212  96    DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
213  96    FETCH_DIM_R/81            $101=     $100                 126:0               	;0
214  96    CONCAT/8                  #102=     127:'<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' $101                	;0
215  96    CONCAT/8                  #103=     #102                 128:'</button>'     	;0
216  96    ECHO/40                   ?0        #103                 ?0                  	;0
217  97    GOTO/253                  ?0        ?263                 ?129                	;0
218  100   INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'array_keys'    	;1
219  100   FETCH_DIM_FUNC_ARG/93     $105=     16?0                 16?4                	;1
220  100   SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
221  100   DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
222  100   FETCH_DIM_R/81            $107=     $106                 132:0               	;0
223  100   FETCH_DIM_R/81            $104=     16?0                 16?4                	;0
224  100   FETCH_DIM_R/81            $108=     $104                 $107                	;0
225  100   FETCH_DIM_R/81            $109=     $108                 133:0               	;0
226  100   CONCAT/8                  #110=     134:'<button type="button" onClick="navigate(\'' $109                	;0
227  100   CONCAT/8                  #111=     #110                 135:'\');" class="btn btn-sm btn-info waves-effect waves-light">'	;0
228  100   INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'array_keys'    	;1
229  100   FETCH_DIM_FUNC_ARG/93     $112=     16?0                 16?4                	;1
230  100   SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
231  100   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
232  100   FETCH_DIM_R/81            $114=     $113                 138:0               	;0
233  100   CONCAT/8                  #115=     #111                 $114                	;0
234  100   CONCAT/8                  #116=     #115                 139:'</button>'     	;0
235  100   ECHO/40                   ?0        #116                 ?0                  	;0
236  102   ECHO/40                   ?0        140:'<span class="gap"></span>' ?0                  	;0
237  104   GOTO/253                  ?0        ?238                 ?141                	;0
238  106   BOOL_NOT/13               #117=     16?6                 ?0                  	;0
239  106   JMPZ/43                   ?0        #117                 ?241                	;0	>>241
240  107   GOTO/253                  ?0        ?242                 ?142                	;0
241  109   ECHO/40                   ?0        143:'<a class="btn btn-success waves-effect waves-light btn-sm btn-fixed-sm" data-toggle="collapse" href="#collapse_filters" role="button" aria-expanded="false">
                    <i class="mdi mdi-filter"></i>
                </a>' ?0                  	;0	<<239
242  111   ECHO/40                   ?0        144:'<button onClick="clearFilters();" type="button" class="btn btn-warning waves-effect waves-light btn-sm btn-fixed-sm" id="clearFilters">
                <i class="mdi mdi-filter-remove"></i>
            </button>
            <button onClick="refreshTable();" type="button" class="btn btn-pink waves-effect waves-light btn-sm btn-fixed-sm">
                <i class="mdi mdi-refresh"></i>
            </button>' ?0                  	;0
243  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'count'         	;1
244  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'array_slice'   	;3
245  112   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
246  112   JMPZ/43                   ?0        16?6                 ?249                	;0	>>249
247  112   QM_ASSIGN/22              #118=     149:0                ?0                  	;0
248  112   JMP/42                    ?0        ?250                 ?0                  	;0	>>250
249  112   QM_ASSIGN/22              #118=     150:1                ?0                  	;0	<<246
250  112   SEND_VAL_EX/116           ?96       #118                 ?2                  	;0	<<248
251  112   INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'count'         	;1
252  112   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
253  112   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
254  112   SEND_VAR_NO_REF_EX/50     ?112      $119                 ?3                  	;0
255  112   DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
256  112   SEND_VAR_NO_REF_EX/50     ?80       $120                 ?1                  	;0
257  112   DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
258  112   IS_SMALLER/19             #122=     153:0                $121                	;0
259  112   BOOL_NOT/13               #123=     #122                 ?0                  	;0
260  112   JMPZ/43                   ?0        #123                 ?262                	;0	>>262
261  113   GOTO/253                  ?0        ?154                 ?154                	;0
262  115   GOTO/253                  ?0        ?85                  ?155                	;0	<<260
263  117   GOTO/253                  ?0        ?282                 ?156                	;0
264  119   INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'array_keys'    	;1
265  119   FETCH_DIM_FUNC_ARG/93     $125=     16?0                 16?4                	;1
266  119   SEND_VAR_EX/66            ?80       $125                 ?1                  	;0
267  119   DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
268  119   FETCH_DIM_R/81            $127=     $126                 159:0               	;0
269  119   FETCH_DIM_R/81            $124=     16?0                 16?4                	;0
270  119   FETCH_DIM_R/81            $128=     $124                 $127                	;0
271  119   FETCH_DIM_R/81            $129=     $128                 160:2               	;0
272  119   CONCAT/8                  #130=     161:'<button type="button" ' $129                	;0
273  119   CONCAT/8                  #131=     #130                 162:' class="btn btn-sm btn-info waves-effect waves-light">'	;0
274  119   INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'array_keys'    	;1
275  119   FETCH_DIM_FUNC_ARG/93     $132=     16?0                 16?4                	;1
276  119   SEND_VAR_EX/66            ?80       $132                 ?1                  	;0
277  119   DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
278  119   FETCH_DIM_R/81            $134=     $133                 165:0               	;0
279  119   CONCAT/8                  #135=     #131                 $134                	;0
280  119   CONCAT/8                  #136=     #135                 166:'</button>'     	;0
281  119   ECHO/40                   ?0        #136                 ?0                  	;0
282  121   GOTO/253                  ?0        ?236                 ?167                	;0
283  122   GOTO/253                  ?0        ?218                 ?168                	;0
284  125   GOTO/253                  ?0        ?285                 ?169                	;0	<<82
285  127   ECHO/40                   ?0        170:'<div class="btn-group">' ?0                  	;0
286  128   FETCH_DIM_R/81            $137=     16?2                 171:'type'          	;0
287  128   IS_EQUAL/17               #138=     $137                 172:1               	;0
288  128   JMPNZ_EX/47               #138=     #138                 ?292                	;0	>>292
289  128   FETCH_DIM_R/81            $139=     16?2                 173:'type'          	;0
290  128   IS_EQUAL/17               #140=     $139                 174:3               	;0
291  128   BOOL/52                   #138=     #140                 ?0                  	;0
292  128   JMPZ/43                   ?0        #138                 ?294                	;0	>>294	<<288
293  129   GOTO/253                  ?0        ?322                 ?175                	;0
294  131   FETCH_DIM_R/81            $141=     16?2                 176:'type'          	;0	<<292
295  131   IS_EQUAL/17               #142=     $141                 177:2               	;0
296  131   JMPNZ_EX/47               #142=     #142                 ?300                	;0	>>300
297  131   FETCH_DIM_R/81            $143=     16?2                 178:'type'          	;0
298  131   IS_EQUAL/17               #144=     $143                 179:5               	;0
299  131   BOOL/52                   #142=     #144                 ?0                  	;0
300  131   BOOL_NOT/13               #145=     #142                 ?0                  	;0	<<296
301  131   JMPZ/43                   ?0        #145                 ?303                	;0	>>303
302  132   GOTO/253                  ?0        ?316                 ?180                	;0
303  134   INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'intval'        	;1	<<301
304  134   FETCH_DIM_FUNC_ARG/93     $146=     16?2                 183:'id'            	;1
305  134   SEND_VAR_EX/66            ?80       $146                 ?1                  	;0
306  134   DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
307  134   CONCAT/8                  #148=     184:'<a href="javascript:void(0);" onClick="player(' $147                	;0
308  134   CONCAT/8                  #149=     #148                 185:', \''          	;0
309  134   INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'htmlspecialchars'	;1
310  134   FETCH_DIM_FUNC_ARG/93     $150=     16?2                 188:'target_container'	;1
311  134   SEND_VAR_EX/66            ?80       $150                 ?1                  	;0
312  134   DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
313  134   CONCAT/8                  #152=     #149                 $151                	;0
314  134   CONCAT/8                  #153=     #152                 189:'\');">
                    <button type="button" title="Play" class="tooltip btn btn-info waves-effect waves-light btn-sm">
                        <i class="mdi mdi-play"></i>
                    </button>
                </a>'	;0
315  134   ECHO/40                   ?0        #153                 ?0                  	;0
316  136   GOTO/253                  ?0        ?321                 ?190                	;0
317  139   ECHO/40                   ?0        191:'</div>'         ?0                  	;0
318  141   ECHO/40                   ?0        192:'</div>'         ?0                  	;0
319  142   GOTO/253                  ?0        ?1413                ?193                	;0
320  143   GOTO/253                  ?0        ?462                 ?194                	;0
321  145   GOTO/253                  ?0        ?329                 ?195                	;0
322  147   INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'intval'        	;1
323  147   FETCH_DIM_FUNC_ARG/93     $154=     16?2                 198:'id'            	;1
324  147   SEND_VAR_EX/66            ?80       $154                 ?1                  	;0
325  147   DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
326  147   CONCAT/8                  #156=     199:'<a href="javascript:void(0);" onClick="player(' $155                	;0
327  147   CONCAT/8                  #157=     #156                 200:');">
                    <button type="button" title="Play" class="tooltip btn btn-info waves-effect waves-light btn-sm">
                        <i class="mdi mdi-play"></i>
                    </button>
                </a>'	;0
328  147   ECHO/40                   ?0        #157                 ?0                  	;0
329  149   BOOL_NOT/13               #158=     16?6                 ?0                  	;0
330  149   JMPZ_EX/46                #158=     #158                 ?344                	;0	>>344
331  149   INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'e589A4bF54A2dAD1'	;2
332  149   SEND_VAL_EX/116           ?80       203:'adv'            ?1                  	;0
333  149   INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'array_keys'    	;1
334  149   FETCH_DIM_FUNC_ARG/93     $160=     16?0                 16?4                	;1
335  149   SEND_VAR_EX/66            ?80       $160                 ?1                  	;0
336  149   DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
337  149   FETCH_DIM_R/81            $162=     $161                 206:0               	;0
338  149   FETCH_DIM_FUNC_ARG/93     $159=     16?0                 16?4                	;2
339  149   FETCH_DIM_FUNC_ARG/93     $163=     $159                 $162                	;2
340  149   FETCH_DIM_FUNC_ARG/93     $164=     $163                 207:1               	;2
341  149   SEND_VAR_EX/66            ?96       $164                 ?2                  	;0
342  149   DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
343  149   BOOL/52                   #158=     $165                 ?0                  	;0
344  149   JMPZ_EX/46                #158=     #158                 ?356                	;0	>>356	<<330
345  149   INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'strlen'        	;1
346  149   INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'array_keys'    	;1
347  149   FETCH_DIM_FUNC_ARG/93     $166=     16?0                 16?4                	;1
348  149   SEND_VAR_EX/66            ?80       $166                 ?1                  	;0
349  149   DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
350  149   SEPARATE/156              $167=     $167                 ?0                  	;0
351  149   FETCH_DIM_FUNC_ARG/93     $168=     $167                 212:0               	;1
352  149   SEND_VAR_EX/66            ?80       $168                 ?1                  	;0
353  149   DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
354  149   IS_SMALLER/19             #170=     213:0                $169                	;0
355  149   BOOL/52                   #158=     #170                 ?0                  	;0
356  149   BOOL_NOT/13               #171=     #158                 ?0                  	;0	<<344
357  149   JMPZ/43                   ?0        #171                 ?359                	;0	>>359
358  150   GOTO/253                  ?0        ?378                 ?214                	;0
359  152   GOTO/253                  ?0        ?360                 ?215                	;0	<<357
360  154   INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'array_keys'    	;1
361  154   FETCH_DIM_FUNC_ARG/93     $173=     16?0                 16?4                	;1
362  154   SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
363  154   DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
364  154   FETCH_DIM_R/81            $175=     $174                 218:0               	;0
365  154   FETCH_DIM_R/81            $172=     16?0                 16?4                	;0
366  154   FETCH_DIM_R/81            $176=     $172                 $175                	;0
367  154   FETCH_DIM_R/81            $177=     $176                 219:0               	;0
368  154   CONCAT/8                  #178=     220:'<button type="button" onClick="navigate(\'' $177                	;0
369  154   CONCAT/8                  #179=     #178                 221:'\');" class="btn btn-sm btn-info waves-effect waves-light">'	;0
370  154   INIT_FCALL_BY_NAME/59     ?0        ?0                   222:'array_keys'    	;1
371  154   FETCH_DIM_FUNC_ARG/93     $180=     16?0                 16?4                	;1
372  154   SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
373  154   DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
374  154   FETCH_DIM_R/81            $182=     $181                 224:0               	;0
375  154   CONCAT/8                  #183=     #179                 $182                	;0
376  154   CONCAT/8                  #184=     #183                 225:'</button>'     	;0
377  154   ECHO/40                   ?0        #184                 ?0                  	;0
378  156   INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'count'         	;1
379  156   INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'array_slice'   	;3
380  156   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
381  156   JMPZ/43                   ?0        16?6                 ?384                	;0	>>384
382  156   QM_ASSIGN/22              #185=     230:0                ?0                  	;0
383  156   JMP/42                    ?0        ?385                 ?0                  	;0	>>385
384  156   QM_ASSIGN/22              #185=     231:1                ?0                  	;0	<<381
385  156   SEND_VAL_EX/116           ?96       #185                 ?2                  	;0	<<383
386  156   INIT_FCALL_BY_NAME/59     ?0        ?0                   232:'count'         	;1
387  156   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
388  156   DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
389  156   SEND_VAR_NO_REF_EX/50     ?112      $186                 ?3                  	;0
390  156   DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
391  156   SEND_VAR_NO_REF_EX/50     ?80       $187                 ?1                  	;0
392  156   DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
393  156   IS_SMALLER/19             #189=     234:0                $188                	;0
394  156   BOOL_NOT/13               #190=     #189                 ?0                  	;0
395  156   JMPZ/43                   ?0        #190                 ?397                	;0	>>397
396  157   GOTO/253                  ?0        ?318                 ?235                	;0
397  159   JMPZ/43                   ?0        16?6                 ?400                	;0	>>400	<<395
398  159   QM_ASSIGN/22              #191=     236:'-xl'            ?0                  	;0
399  159   JMP/42                    ?0        ?401                 ?0                  	;0	>>401
400  159   QM_ASSIGN/22              #191=     237:'-sm'            ?0                  	;0	<<397
401  159   CONCAT/8                  #192=     238:'<span class="gap"></span><button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed' #191                	;0	<<399
402  159   CONCAT/8                  #193=     #192                 239:'" data-toggle="dropdown" aria-expanded="false">'	;0
403  159   JMPZ/43                   ?0        16?6                 ?406                	;0	>>406
404  159   QM_ASSIGN/22              #194=     240:'Options &nbsp; ' ?0                  	;0
405  159   JMP/42                    ?0        ?407                 ?0                  	;0	>>407
406  159   QM_ASSIGN/22              #194=     241:''               ?0                  	;0	<<403
407  159   CONCAT/8                  #195=     #193                 #194                	;0	<<405
408  159   CONCAT/8                  #196=     #195                 242:'<i class="fas fa-caret-down"></i></button>
                <div class="dropdown-menu">'	;0
409  159   ECHO/40                   ?0        #196                 ?0                  	;0
410  160   INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'array_slice'   	;3
411  160   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
412  160   JMPZ/43                   ?0        16?6                 ?415                	;0	>>415
413  160   QM_ASSIGN/22              #197=     245:0                ?0                  	;0
414  160   JMP/42                    ?0        ?416                 ?0                  	;0	>>416
415  160   QM_ASSIGN/22              #197=     246:1                ?0                  	;0	<<412
416  160   SEND_VAL_EX/116           ?96       #197                 ?2                  	;0	<<414
417  160   INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'count'         	;1
418  160   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
419  160   DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
420  160   SEND_VAR_NO_REF_EX/50     ?112      $198                 ?3                  	;0
421  160   DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
422  160   FE_RESET_R/77             $200=     $199                 ?460                	;0
423  160   FE_FETCH_R/78             #201=     $200                 16?7                	;460	>>460	<<459
424  160   ASSIGN/38                 ?177      16?8                 #201                	;0
425  161   BOOL_NOT/13               #203=     16?8                 ?0                  	;0
426  161   JMPZ/43                   ?0        #203                 ?429                	;0	>>429
427  162   NOP/0                     ?0        ?0                   ?0                  	;1
428  162   GOTO/253                  ?0        ?459                 ?249                	;0
429  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'substr'        	;3	<<426
430  164   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
431  164   SEND_VAL_EX/116           ?96       252:0                ?2                  	;0
432  164   SEND_VAL_EX/116           ?112      253:5                ?3                  	;0
433  164   DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
434  164   IS_EQUAL/17               #205=     $204                 254:'code:'         	;0
435  164   JMPZ/43                   ?0        #205                 ?438                	;0	>>438
436  165   NOP/0                     ?0        ?0                   ?0                  	;1
437  165   GOTO/253                  ?0        ?445                 ?255                	;0
438  167   CONCAT/8                  #206=     256:'<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' 16?7                	;0	<<435
439  167   CONCAT/8                  #207=     #206                 257:'\');">'        	;0
440  167   CONCAT/8                  #208=     #207                 16?8                	;0
441  167   CONCAT/8                  #209=     #208                 258:'</a>'          	;0
442  167   ECHO/40                   ?0        #209                 ?0                  	;0
443  168   NOP/0                     ?0        ?0                   ?0                  	;1
444  168   GOTO/253                  ?0        ?459                 ?259                	;0
445  170   INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'substr'        	;3
446  170   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
447  170   SEND_VAL_EX/116           ?96       262:5                ?2                  	;0
448  170   INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'strlen'        	;1
449  170   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
450  170   DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
451  170   SUB/2                     #211=     $210                 265:5               	;0
452  170   SEND_VAL_EX/116           ?112      #211                 ?3                  	;0
453  170   DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
454  170   CONCAT/8                  #213=     266:'<a class="dropdown-item" href="javascript: void(0);" ' $212                	;0
455  170   CONCAT/8                  #214=     #213                 267:'>'             	;0
456  170   CONCAT/8                  #215=     #214                 16?8                	;0
457  170   CONCAT/8                  #216=     #215                 268:'</a>'          	;0
458  170   ECHO/40                   ?0        #216                 ?0                  	;0
459  173   JMP/42                    ?0        ?423                 ?0                  	;0	>>423
460  173   FE_FREE/127               ?0        $200                 ?0                  	;0	<<422
461  175   GOTO/253                  ?0        ?317                 ?269                	;0
462  178   GOTO/253                  ?0        ?591                 ?270                	;0	<<83
463  180   GOTO/253                  ?0        ?482                 ?271                	;0
464  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'array_keys'    	;1
465  182   FETCH_DIM_FUNC_ARG/93     $218=     16?0                 16?4                	;1
466  182   SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
467  182   DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
468  182   FETCH_DIM_R/81            $220=     $219                 274:0               	;0
469  182   FETCH_DIM_R/81            $217=     16?0                 16?4                	;0
470  182   FETCH_DIM_R/81            $221=     $217                 $220                	;0
471  182   FETCH_DIM_R/81            $222=     $221                 275:2               	;0
472  182   CONCAT/8                  #223=     276:'<button type="button" ' $222                	;0
473  182   CONCAT/8                  #224=     #223                 277:' class="btn btn-sm btn-info waves-effect waves-light">'	;0
474  182   INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'array_keys'    	;1
475  182   FETCH_DIM_FUNC_ARG/93     $225=     16?0                 16?4                	;1
476  182   SEND_VAR_EX/66            ?80       $225                 ?1                  	;0
477  182   DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
478  182   FETCH_DIM_R/81            $227=     $226                 280:0               	;0
479  182   CONCAT/8                  #228=     #224                 $227                	;0
480  182   CONCAT/8                  #229=     #228                 281:'</button>'     	;0
481  182   ECHO/40                   ?0        #229                 ?0                  	;0
482  184   GOTO/253                  ?0        ?568                 ?282                	;0
483  185   GOTO/253                  ?0        ?550                 ?283                	;0
484  187   JMPZ/43                   ?0        16?6                 ?487                	;0	>>487
485  187   QM_ASSIGN/22              #230=     284:'-xl'            ?0                  	;0
486  187   JMP/42                    ?0        ?488                 ?0                  	;0	>>488
487  187   QM_ASSIGN/22              #230=     285:'-sm'            ?0                  	;0	<<484
488  187   CONCAT/8                  #231=     286:'<span class="gap"></span><button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed' #230                	;0	<<486
489  187   CONCAT/8                  #232=     #231                 287:'" data-toggle="dropdown" aria-expanded="false">'	;0
490  187   JMPZ/43                   ?0        16?6                 ?493                	;0	>>493
491  187   QM_ASSIGN/22              #233=     288:'Options &nbsp; ' ?0                  	;0
492  187   JMP/42                    ?0        ?494                 ?0                  	;0	>>494
493  187   QM_ASSIGN/22              #233=     289:''               ?0                  	;0	<<490
494  187   CONCAT/8                  #234=     #232                 #233                	;0	<<492
495  187   CONCAT/8                  #235=     #234                 290:'<i class="fas fa-caret-down"></i></button>
                <div class="dropdown-menu">'	;0
496  187   ECHO/40                   ?0        #235                 ?0                  	;0
497  188   INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'array_slice'   	;3
498  188   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
499  188   JMPZ/43                   ?0        16?6                 ?502                	;0	>>502
500  188   QM_ASSIGN/22              #236=     293:0                ?0                  	;0
501  188   JMP/42                    ?0        ?503                 ?0                  	;0	>>503
502  188   QM_ASSIGN/22              #236=     294:1                ?0                  	;0	<<499
503  188   SEND_VAL_EX/116           ?96       #236                 ?2                  	;0	<<501
504  188   INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'count'         	;1
505  188   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
506  188   DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
507  188   SEND_VAR_NO_REF_EX/50     ?112      $237                 ?3                  	;0
508  188   DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
509  188   FE_RESET_R/77             $239=     $238                 ?547                	;0
510  188   FE_FETCH_R/78             #240=     $239                 16?7                	;547	>>547	<<546
511  188   ASSIGN/38                 ?216      16?8                 #240                	;0
512  189   BOOL_NOT/13               #242=     16?8                 ?0                  	;0
513  189   JMPZ/43                   ?0        #242                 ?516                	;0	>>516
514  190   NOP/0                     ?0        ?0                   ?0                  	;1
515  190   GOTO/253                  ?0        ?546                 ?297                	;0
516  192   INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'substr'        	;3	<<513
517  192   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
518  192   SEND_VAL_EX/116           ?96       300:0                ?2                  	;0
519  192   SEND_VAL_EX/116           ?112      301:5                ?3                  	;0
520  192   DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
521  192   IS_EQUAL/17               #244=     $243                 302:'code:'         	;0
522  192   JMPZ/43                   ?0        #244                 ?525                	;0	>>525
523  193   NOP/0                     ?0        ?0                   ?0                  	;1
524  193   GOTO/253                  ?0        ?532                 ?303                	;0
525  195   CONCAT/8                  #245=     304:'<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' 16?7                	;0	<<522
526  195   CONCAT/8                  #246=     #245                 305:'\');">'        	;0
527  195   CONCAT/8                  #247=     #246                 16?8                	;0
528  195   CONCAT/8                  #248=     #247                 306:'</a>'          	;0
529  195   ECHO/40                   ?0        #248                 ?0                  	;0
530  196   NOP/0                     ?0        ?0                   ?0                  	;1
531  196   GOTO/253                  ?0        ?546                 ?307                	;0
532  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'substr'        	;3
533  198   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
534  198   SEND_VAL_EX/116           ?96       310:5                ?2                  	;0
535  198   INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'strlen'        	;1
536  198   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
537  198   DO_FCALL_BY_NAME/131      $249=     ?0                   ?0                  	;0
538  198   SUB/2                     #250=     $249                 313:5               	;0
539  198   SEND_VAL_EX/116           ?112      #250                 ?3                  	;0
540  198   DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
541  198   CONCAT/8                  #252=     314:'<a class="dropdown-item" href="javascript: void(0);" ' $251                	;0
542  198   CONCAT/8                  #253=     #252                 315:'>'             	;0
543  198   CONCAT/8                  #254=     #253                 16?8                	;0
544  198   CONCAT/8                  #255=     #254                 316:'</a>'          	;0
545  198   ECHO/40                   ?0        #255                 ?0                  	;0
546  201   JMP/42                    ?0        ?510                 ?0                  	;0	>>510
547  201   FE_FREE/127               ?0        $239                 ?0                  	;0	<<509
548  204   ECHO/40                   ?0        317:'</div>'         ?0                  	;0
549  206   GOTO/253                  ?0        ?588                 ?318                	;0
550  209   INIT_FCALL_BY_NAME/59     ?0        ?0                   319:'array_keys'    	;1
551  209   FETCH_DIM_FUNC_ARG/93     $257=     16?0                 16?4                	;1
552  209   SEND_VAR_EX/66            ?80       $257                 ?1                  	;0
553  209   DO_FCALL_BY_NAME/131      $258=     ?0                   ?0                  	;0
554  209   FETCH_DIM_R/81            $259=     $258                 321:0               	;0
555  209   FETCH_DIM_R/81            $256=     16?0                 16?4                	;0
556  209   FETCH_DIM_R/81            $260=     $256                 $259                	;0
557  209   FETCH_DIM_R/81            $261=     $260                 322:0               	;0
558  209   CONCAT/8                  #262=     323:'<button type="button" onClick="navigate(\'' $261                	;0
559  209   CONCAT/8                  #263=     #262                 324:'\');" class="btn btn-sm btn-info waves-effect waves-light">'	;0
560  209   INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'array_keys'    	;1
561  209   FETCH_DIM_FUNC_ARG/93     $264=     16?0                 16?4                	;1
562  209   SEND_VAR_EX/66            ?80       $264                 ?1                  	;0
563  209   DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
564  209   FETCH_DIM_R/81            $266=     $265                 327:0               	;0
565  209   CONCAT/8                  #267=     #263                 $266                	;0
566  209   CONCAT/8                  #268=     #267                 328:'</button>'     	;0
567  209   ECHO/40                   ?0        #268                 ?0                  	;0
568  212   INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'count'         	;1
569  212   INIT_FCALL_BY_NAME/59     ?0        ?0                   331:'array_slice'   	;3
570  212   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
571  212   JMPZ/43                   ?0        16?6                 ?574                	;0	>>574
572  212   QM_ASSIGN/22              #269=     333:0                ?0                  	;0
573  212   JMP/42                    ?0        ?575                 ?0                  	;0	>>575
574  212   QM_ASSIGN/22              #269=     334:1                ?0                  	;0	<<571
575  212   SEND_VAL_EX/116           ?96       #269                 ?2                  	;0	<<573
576  212   INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'count'         	;1
577  212   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
578  212   DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
579  212   SEND_VAR_NO_REF_EX/50     ?112      $270                 ?3                  	;0
580  212   DO_FCALL_BY_NAME/131      $271=     ?0                   ?0                  	;0
581  212   SEND_VAR_NO_REF_EX/50     ?80       $271                 ?1                  	;0
582  212   DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
583  212   IS_SMALLER/19             #273=     337:0                $272                	;0
584  212   BOOL_NOT/13               #274=     #273                 ?0                  	;0
585  212   JMPZ/43                   ?0        #274                 ?587                	;0	>>587
586  213   GOTO/253                  ?0        ?549                 ?338                	;0
587  215   GOTO/253                  ?0        ?484                 ?339                	;0	<<585
588  217   ECHO/40                   ?0        340:'</div>'         ?0                  	;0
589  218   GOTO/253                  ?0        ?1413                ?341                	;0
590  219   GOTO/253                  ?0        ?651                 ?342                	;0
591  221   ECHO/40                   ?0        343:'<div class="btn-group">' ?0                  	;0
592  222   BOOL_NOT/13               #275=     16?6                 ?0                  	;0
593  222   JMPZ_EX/46                #275=     #275                 ?607                	;0	>>607
594  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   344:'e589a4bf54A2dad1'	;2
595  222   SEND_VAL_EX/116           ?80       346:'adv'            ?1                  	;0
596  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'array_keys'    	;1
597  222   FETCH_DIM_FUNC_ARG/93     $277=     16?0                 16?4                	;1
598  222   SEND_VAR_EX/66            ?80       $277                 ?1                  	;0
599  222   DO_FCALL_BY_NAME/131      $278=     ?0                   ?0                  	;0
600  222   FETCH_DIM_R/81            $279=     $278                 349:0               	;0
601  222   FETCH_DIM_FUNC_ARG/93     $276=     16?0                 16?4                	;2
602  222   FETCH_DIM_FUNC_ARG/93     $280=     $276                 $279                	;2
603  222   FETCH_DIM_FUNC_ARG/93     $281=     $280                 350:1               	;2
604  222   SEND_VAR_EX/66            ?96       $281                 ?2                  	;0
605  222   DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
606  222   BOOL/52                   #275=     $282                 ?0                  	;0
607  222   JMPZ_EX/46                #275=     #275                 ?619                	;0	>>619	<<593
608  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'strlen'        	;1
609  222   INIT_FCALL_BY_NAME/59     ?0        ?0                   353:'array_keys'    	;1
610  222   FETCH_DIM_FUNC_ARG/93     $283=     16?0                 16?4                	;1
611  222   SEND_VAR_EX/66            ?80       $283                 ?1                  	;0
612  222   DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
613  222   SEPARATE/156              $284=     $284                 ?0                  	;0
614  222   FETCH_DIM_FUNC_ARG/93     $285=     $284                 355:0               	;1
615  222   SEND_VAR_EX/66            ?80       $285                 ?1                  	;0
616  222   DO_FCALL_BY_NAME/131      $286=     ?0                   ?0                  	;0
617  222   IS_SMALLER/19             #287=     356:0                $286                	;0
618  222   BOOL/52                   #275=     #287                 ?0                  	;0
619  222   BOOL_NOT/13               #288=     #275                 ?0                  	;0	<<607
620  222   JMPZ/43                   ?0        #288                 ?622                	;0	>>622
621  223   GOTO/253                  ?0        ?568                 ?357                	;0
622  225   INIT_FCALL_BY_NAME/59     ?0        ?0                   358:'array_keys'    	;1	<<620
623  225   FETCH_DIM_FUNC_ARG/93     $290=     16?0                 16?4                	;1
624  225   SEND_VAR_EX/66            ?80       $290                 ?1                  	;0
625  225   DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
626  225   FETCH_DIM_R/81            $292=     $291                 360:0               	;0
627  225   FETCH_DIM_R/81            $289=     16?0                 16?4                	;0
628  225   FETCH_DIM_R/81            $293=     $289                 $292                	;0
629  225   FETCH_DIM_R/81            $294=     $293                 361:0               	;0
630  225   JMPZ/43                   ?0        $294                 ?632                	;0	>>632
631  226   GOTO/253                  ?0        ?550                 ?362                	;0
632  228   INIT_FCALL_BY_NAME/59     ?0        ?0                   363:'array_keys'    	;1	<<630
633  228   FETCH_DIM_FUNC_ARG/93     $296=     16?0                 16?4                	;1
634  228   SEND_VAR_EX/66            ?80       $296                 ?1                  	;0
635  228   DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
636  228   FETCH_DIM_R/81            $298=     $297                 365:0               	;0
637  228   FETCH_DIM_IS/90           $295=     16?0                 16?4                	;0
638  228   FETCH_DIM_IS/90           $299=     $295                 $298                	;0
639  228   ISSET_ISEMPTY_DIM_OBJ/115 #300=     $299                 366:2               	;33554432
640  228   JMPZ/43                   ?0        #300                 ?642                	;0	>>642
641  229   GOTO/253                  ?0        ?464                 ?367                	;0
642  231   INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'array_keys'    	;1	<<640
643  231   FETCH_DIM_FUNC_ARG/93     $301=     16?0                 16?4                	;1
644  231   SEND_VAR_EX/66            ?80       $301                 ?1                  	;0
645  231   DO_FCALL_BY_NAME/131      $302=     ?0                   ?0                  	;0
646  231   FETCH_DIM_R/81            $303=     $302                 370:0               	;0
647  231   CONCAT/8                  #304=     371:'<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' $303                	;0
648  231   CONCAT/8                  #305=     #304                 372:'</button>'     	;0
649  231   ECHO/40                   ?0        #305                 ?0                  	;0
650  232   GOTO/253                  ?0        ?463                 ?373                	;0
651  236   GOTO/253                  ?0        ?1413                ?374                	;0
652  238   IS_EQUAL/17               #306=     16?4                 375:'stream_view'   	;0
653  238   BOOL_NOT/13               #307=     #306                 ?0                  	;0
654  238   JMPZ/43                   ?0        #307                 ?656                	;0	>>656
655  239   GOTO/253                  ?0        ?9                   ?376                	;0
656  241   FETCH_DIM_R/81            $308=     16?2                 377:'type'          	;0	<<654
657  241   IS_EQUAL/17               #309=     $308                 378:1               	;0
658  241   JMPZ/43                   ?0        #309                 ?660                	;0	>>660
659  242   GOTO/253                  ?0        ?2                   ?379                	;0
660  244   FETCH_DIM_R/81            $310=     16?2                 380:'type'          	;0	<<658
661  244   IS_EQUAL/17               #311=     $310                 381:2               	;0
662  244   JMPZ/43                   ?0        #311                 ?664                	;0	>>664
663  245   GOTO/253                  ?0        ?987                 ?382                	;0
664  247   FETCH_DIM_R/81            $312=     16?2                 383:'type'          	;0	<<662
665  247   IS_EQUAL/17               #313=     $312                 384:3               	;0
666  247   JMPZ/43                   ?0        #313                 ?668                	;0	>>668
667  248   GOTO/253                  ?0        ?18                  ?385                	;0
668  250   FETCH_DIM_R/81            $314=     16?2                 386:'type'          	;0	<<666
669  250   IS_EQUAL/17               #315=     $314                 387:4               	;0
670  250   JMPZ/43                   ?0        #315                 ?672                	;0	>>672
671  251   GOTO/253                  ?0        ?51                  ?388                	;0
672  253   GOTO/253                  ?0        ?26                  ?389                	;0	<<670
673  255   FETCH_STATIC_PROP_IS/176  $316=     390:'rRequest'       391:'XUI'           	;0
674  255   ISSET_ISEMPTY_DIM_OBJ/115 #317=     $316                 393:'sid'           	;33554432
675  255   JMPZ/43                   ?0        #317                 ?683                	;0	>>683
676  255   INIT_FCALL_BY_NAME/59     ?0        ?0                   394:'intval'        	;1
677  255   FETCH_STATIC_PROP_FUNC_ARG/177 $318=     396:'rRequest'       397:'XUI'           	;1
678  255   FETCH_DIM_FUNC_ARG/93     $319=     $318                 399:'sid'           	;1
679  255   SEND_VAR_EX/66            ?80       $319                 ?1                  	;0
680  255   DO_FCALL_BY_NAME/131      $320=     ?0                   ?0                  	;0
681  255   QM_ASSIGN/22              #321=     $320                 ?0                  	;0
682  255   JMP/42                    ?0        ?684                 ?0                  	;0	>>684
683  255   QM_ASSIGN/22              #321=     400:NULL             ?0                  	;0	<<675
684  255   ASSIGN/38                 ?297      16?9                 #321                	;0	<<682
685  256   INIT_ARRAY/71             #323=     401:array (
  'Manage Streams' => 
  array (
    0 => 'streams',
    1 => 'streams',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Mass Edit' => 
  array (
    0 => 'stream_mass',
    1 => 'mass_edit_streams',
  ),
  'Stream Tools' => 
  array (
    0 => 'stream_tools',
    1 => 'stream_tools',
  ),
  'Stream Error Logs' => 
  array (
    0 => 'stream_errors',
    1 => 'stream_errors',
  ),
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
) 402:'ondemand'      	;382
686  256   INIT_ARRAY/71             #324=     403:array (
  0 => 'stream',
  1 => 'add_stream',
) 404:'Add Stream'    	;54
687  256   JMPZ/43                   ?0        16?6                 ?690                	;0	>>690
688  256   QM_ASSIGN/22              #325=     405:array (
)        ?0                  	;0
689  256   JMP/42                    ?0        ?691                 ?0                  	;0	>>691
690  256   QM_ASSIGN/22              #325=     406:array (
  0 => 'review?type=1',
  1 => 'import_streams',
) ?0                  	;0	<<687
691  256   ADD_ARRAY_ELEMENT/72      #324=     #325                 407:'Import & Review'	;0	<<689
692  256   ADD_ARRAY_ELEMENT/72      #324=     408:array (
  0 => 'stream_categories',
  1 => 'categories',
) 409:'Categories'    	;0
693  256   JMPZ/43                   ?0        16?6                 ?696                	;0	>>696
694  256   QM_ASSIGN/22              #326=     410:array (
)        ?0                  	;0
695  256   JMP/42                    ?0        ?697                 ?0                  	;0	>>697
696  256   QM_ASSIGN/22              #326=     411:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<693
697  256   ADD_ARRAY_ELEMENT/72      #324=     #326                 412:'Channel Order' 	;0	<<695
698  256   ADD_ARRAY_ELEMENT/72      #324=     413:array (
  0 => 'epgs',
  1 => 'epg',
) 414:'EPG\'s'        	;0
699  256   ADD_ARRAY_ELEMENT/72      #324=     415:array (
  0 => 'fingerprint',
  1 => 'fingerprint',
) 416:'Fingerprint'   	;0
700  256   ADD_ARRAY_ELEMENT/72      #324=     417:array (
  0 => 'ondemand',
  1 => 'streams',
) 418:'On-Demand Scanner'	;0
701  256   ADD_ARRAY_ELEMENT/72      #324=     419:array (
  0 => 'mass_delete',
  1 => 'mass_delete',
) 420:'Mass Delete'   	;0
702  256   ADD_ARRAY_ELEMENT/72      #324=     421:array (
  0 => 'stream_mass',
  1 => 'mass_edit_streams',
) 422:'Mass Edit'     	;0
703  256   ADD_ARRAY_ELEMENT/72      #324=     423:array (
  0 => 'quick_tools',
  1 => 'quick_tools',
) 424:'Quick Tools'   	;0
704  256   ADD_ARRAY_ELEMENT/72      #324=     425:array (
  0 => 'stream_tools',
  1 => 'stream_tools',
) 426:'Stream Tools'  	;0
705  256   ADD_ARRAY_ELEMENT/72      #324=     427:array (
  0 => 'stream_errors',
  1 => 'stream_errors',
) 428:'Stream Error Logs'	;0
706  256   ADD_ARRAY_ELEMENT/72      #324=     429:array (
  0 => NULL,
  1 => NULL,
  2 => 'id="btn-export-csv"',
) 430:'Export as CSV' 	;0
707  256   ADD_ARRAY_ELEMENT/72      #323=     #324                 431:'streams'       	;0
708  256   INIT_ARRAY/71             #327=     432:array (
  0 => 'created_channel',
  1 => 'create_channel',
) 433:'Create Channel'	;26
709  256   ADD_ARRAY_ELEMENT/72      #327=     434:array (
  0 => 'stream_categories',
  1 => 'categories',
) 435:'Categories'    	;0
710  256   JMPZ/43                   ?0        16?6                 ?713                	;0	>>713
711  256   QM_ASSIGN/22              #328=     436:array (
)        ?0                  	;0
712  256   JMP/42                    ?0        ?714                 ?0                  	;0	>>714
713  256   QM_ASSIGN/22              #328=     437:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<710
714  256   ADD_ARRAY_ELEMENT/72      #327=     #328                 438:'Channel Order' 	;0	<<712
715  256   ADD_ARRAY_ELEMENT/72      #327=     439:array (
  0 => 'mass_delete',
  1 => 'mass_delete',
) 440:'Mass Delete'   	;0
716  256   ADD_ARRAY_ELEMENT/72      #327=     441:array (
  0 => 'created_channel_mass',
  1 => NULL,
) 442:'Mass Edit'     	;0
717  256   ADD_ARRAY_ELEMENT/72      #327=     443:array (
  0 => NULL,
  1 => NULL,
  2 => 'id="btn-export-csv"',
) 444:'Export as CSV' 	;0
718  256   ADD_ARRAY_ELEMENT/72      #323=     #327                 445:'created_channels'	;0
719  256   ISSET_ISEMPTY_CV/197      #329=     16?10                ?0                  	;33554432
720  256   JMPZ/43                   ?0        #329                 ?723                	;0	>>723
721  256   QM_ASSIGN/22              #330=     446:'Save Changes'   ?0                  	;0
722  256   JMP/42                    ?0        ?724                 ?0                  	;0	>>724
723  256   QM_ASSIGN/22              #330=     447:'Review Streams' ?0                  	;0	<<720
724  256   INIT_ARRAY/71             #331=     448:array (
  0 => NULL,
  1 => NULL,
  2 => 'id="btn-submit"',
) #330                	;4	<<722
725  256   ADD_ARRAY_ELEMENT/72      #323=     #331                 449:'stream_review' 	;0
726  256   ADD_ARRAY_ELEMENT/72      #323=     450:array (
  'Send to XUI.one' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-send-xui"',
  ),
) 451:'panel_logs'    	;0
727  256   INIT_ARRAY/71             #332=     452:array (
  0 => 'movie',
  1 => 'add_movie',
) 453:'Add Movie'     	;38
728  256   JMPZ/43                   ?0        16?6                 ?731                	;0	>>731
729  256   QM_ASSIGN/22              #333=     454:array (
)        ?0                  	;0
730  256   JMP/42                    ?0        ?732                 ?0                  	;0	>>732
731  256   QM_ASSIGN/22              #333=     455:array (
  0 => 'review?type=2',
  1 => 'import_movies',
) ?0                  	;0	<<728
732  256   ADD_ARRAY_ELEMENT/72      #332=     #333                 456:'Import & Review'	;0	<<730
733  256   ADD_ARRAY_ELEMENT/72      #332=     457:array (
  0 => 'stream_categories',
  1 => 'categories',
) 458:'Categories'    	;0
734  256   JMPZ/43                   ?0        16?6                 ?737                	;0	>>737
735  256   QM_ASSIGN/22              #334=     459:array (
)        ?0                  	;0
736  256   JMP/42                    ?0        ?738                 ?0                  	;0	>>738
737  256   QM_ASSIGN/22              #334=     460:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<734
738  256   ADD_ARRAY_ELEMENT/72      #332=     #334                 461:'Channel Order' 	;0	<<736
739  256   ADD_ARRAY_ELEMENT/72      #332=     462:array (
  0 => 'mass_delete',
  1 => 'mass_delete',
) 463:'Mass Delete'   	;0
740  256   ADD_ARRAY_ELEMENT/72      #332=     464:array (
  0 => 'movie_mass',
  1 => 'mass_sedits_vod',
) 465:'Mass Edit'     	;0
741  256   ADD_ARRAY_ELEMENT/72      #332=     466:array (
  0 => 'watch',
  1 => 'folder_watch',
) 467:'Watch Folder'  	;0
742  256   ADD_ARRAY_ELEMENT/72      #332=     468:array (
  0 => 'watch_output',
  1 => 'folder_watch_output',
) 469:'Watch Output Logs'	;0
743  256   ADD_ARRAY_ELEMENT/72      #332=     470:array (
  0 => NULL,
  1 => NULL,
  2 => 'id="btn-export-csv"',
) 471:'Export as CSV' 	;0
744  256   ADD_ARRAY_ELEMENT/72      #323=     #332                 472:'movies'        	;0
745  256   INIT_ARRAY/71             #335=     473:array (
  0 => 'serie',
  1 => 'add_series',
) 474:'Add Series'    	;38
746  256   ADD_ARRAY_ELEMENT/72      #335=     475:array (
  0 => 'episodes',
  1 => 'episodes',
) 476:'Episodes'      	;0
747  256   ADD_ARRAY_ELEMENT/72      #335=     477:array (
  0 => 'stream_categories',
  1 => 'categories',
) 478:'Categories'    	;0
748  256   JMPZ/43                   ?0        16?6                 ?751                	;0	>>751
749  256   QM_ASSIGN/22              #336=     479:array (
)        ?0                  	;0
750  256   JMP/42                    ?0        ?752                 ?0                  	;0	>>752
751  256   QM_ASSIGN/22              #336=     480:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<748
752  256   ADD_ARRAY_ELEMENT/72      #335=     #336                 481:'Channel Order' 	;0	<<750
753  256   ADD_ARRAY_ELEMENT/72      #335=     482:array (
  0 => 'mass_delete',
  1 => 'mass_delete',
) 483:'Mass Delete'   	;0
754  256   ADD_ARRAY_ELEMENT/72      #335=     484:array (
  0 => 'series_mass',
  1 => 'mass_sedits',
) 485:'Mass Edit'     	;0
755  256   ADD_ARRAY_ELEMENT/72      #335=     486:array (
  0 => 'watch',
  1 => 'folder_watch',
) 487:'Watch Folder'  	;0
756  256   ADD_ARRAY_ELEMENT/72      #335=     488:array (
  0 => 'watch_output',
  1 => 'folder_watch_output',
) 489:'Watch Output Logs'	;0
757  256   ADD_ARRAY_ELEMENT/72      #335=     490:array (
  0 => NULL,
  1 => NULL,
  2 => 'id="btn-export-csv"',
) 491:'Export as CSV' 	;0
758  256   ADD_ARRAY_ELEMENT/72      #323=     #335                 492:'series'        	;0
759  256   INIT_ARRAY/71             #337=     493:array (
  0 => NULL,
  1 => 'add_episode',
) 494:'Add Episode'   	;30
760  256   ADD_ARRAY_ELEMENT/72      #337=     495:array (
  0 => 'series',
  1 => 'series',
) 496:'TV Series'     	;0
761  256   ADD_ARRAY_ELEMENT/72      #337=     497:array (
  0 => 'stream_categories',
  1 => 'categories',
) 498:'Categories'    	;0
762  256   JMPZ/43                   ?0        16?6                 ?765                	;0	>>765
763  256   QM_ASSIGN/22              #338=     499:array (
)        ?0                  	;0
764  256   JMP/42                    ?0        ?766                 ?0                  	;0	>>766
765  256   QM_ASSIGN/22              #338=     500:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<762
766  256   ADD_ARRAY_ELEMENT/72      #337=     #338                 501:'Channel Order' 	;0	<<764
767  256   ADD_ARRAY_ELEMENT/72      #337=     502:array (
  0 => 'mass_delete',
  1 => 'mass_delete',
) 503:'Mass Delete'   	;0
768  256   ADD_ARRAY_ELEMENT/72      #337=     504:array (
  0 => 'episodes_mass',
  1 => 'mass_sedits',
) 505:'Mass Edit'     	;0
769  256   ADD_ARRAY_ELEMENT/72      #337=     506:array (
  0 => NULL,
  1 => NULL,
  2 => 'id="btn-export-csv"',
) 507:'Export as CSV' 	;0
770  256   ADD_ARRAY_ELEMENT/72      #323=     #337                 508:'episodes'      	;0
771  256   INIT_ARRAY/71             #339=     509:array (
  0 => 'radio',
  1 => 'add_radio',
) 510:'Add Station'   	;26
772  256   ADD_ARRAY_ELEMENT/72      #339=     511:array (
  0 => 'stream_categories',
  1 => 'categories',
) 512:'Categories'    	;0
773  256   JMPZ/43                   ?0        16?6                 ?776                	;0	>>776
774  256   QM_ASSIGN/22              #340=     513:array (
)        ?0                  	;0
775  256   JMP/42                    ?0        ?777                 ?0                  	;0	>>777
776  256   QM_ASSIGN/22              #340=     514:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<773
777  256   ADD_ARRAY_ELEMENT/72      #339=     #340                 515:'Channel Order' 	;0	<<775
778  256   ADD_ARRAY_ELEMENT/72      #339=     516:array (
  0 => 'mass_delete',
  1 => 'mass_delete',
) 517:'Mass Delete'   	;0
779  256   ADD_ARRAY_ELEMENT/72      #339=     518:array (
  0 => 'radio_mass',
  1 => 'mass_edit_radio',
) 519:'Mass Edit'     	;0
780  256   ADD_ARRAY_ELEMENT/72      #339=     520:array (
  0 => NULL,
  1 => NULL,
  2 => 'id="btn-export-csv"',
) 521:'Export as CSV' 	;0
781  256   ADD_ARRAY_ELEMENT/72      #323=     #339                 522:'radios'        	;0
782  256   ADD_ARRAY_ELEMENT/72      #323=     523:array (
  'Add Line' => 
  array (
    0 => 'line',
    1 => 'add_user',
  ),
  'Blocked ASN\'s' => 
  array (
    0 => 'asns',
    1 => 'block_isps',
  ),
  'Blocked IP\'s' => 
  array (
    0 => 'ips',
    1 => 'block_ips',
  ),
  'Blocked ISP\'s' => 
  array (
    0 => 'isps',
    1 => 'block_isps',
  ),
  'Blocked User-Agents' => 
  array (
    0 => 'useragents',
    1 => 'block_uas',
  ),
  'Live Connections' => 
  array (
    0 => 'live_connections',
    1 => 'live_connections',
  ),
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'connection_logs',
  ),
  'IP\'s per Line' => 
  array (
    0 => 'line_ips',
    1 => 'connection_logs',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Mass Edit' => 
  array (
    0 => 'line_mass',
    1 => 'mass_edit_users',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
) 524:'lines'         	;0
783  256   ADD_ARRAY_ELEMENT/72      #323=     525:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'connection_logs',
  ),
  'IP\'s per Line' => 
  array (
    0 => 'line_ips',
    1 => 'connection_logs',
  ),
) 526:'live_connections'	;0
784  256   ADD_ARRAY_ELEMENT/72      #323=     527:array (
  'Add Device' => 
  array (
    0 => 'mag',
    1 => 'add_mag',
  ),
  'Blocked IP\'s' => 
  array (
    0 => 'ips',
    1 => 'block_ips',
  ),
  'Blocked ISP\'s' => 
  array (
    0 => 'isps',
    1 => 'block_isps',
  ),
  'Live Connections' => 
  array (
    0 => 'live_connections',
    1 => 'connection_logs',
  ),
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'connection_logs',
  ),
  'MAG Event Logs' => 
  array (
    0 => 'mag_events',
    1 => 'manage_events',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Mass Edit' => 
  array (
    0 => 'mag_mass',
    1 => 'mass_edit_mags',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
) 528:'mags'          	;0
785  256   ADD_ARRAY_ELEMENT/72      #323=     529:array (
  'Add Device' => 
  array (
    0 => 'enigma',
    1 => 'add_e2',
  ),
  'Blocked IP\'s' => 
  array (
    0 => 'ips',
    1 => 'block_ips',
  ),
  'Blocked ISP\'s' => 
  array (
    0 => 'isps',
    1 => 'block_isps',
  ),
  'Live Connections' => 
  array (
    0 => 'live_connections',
    1 => 'connection_logs',
  ),
  'Activity Logs' => 
  array (
    0 => 'line_activity',
    1 => 'connection_logs',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Mass Edit' => 
  array (
    0 => 'enigma_mass',
    1 => 'mass_edit_enigmas',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
) 530:'enigmas'       	;0
786  256   ADD_ARRAY_ELEMENT/72      #323=     531:array (
  'Add User' => 
  array (
    0 => 'user',
    1 => 'add_reguser',
  ),
  'Groups' => 
  array (
    0 => 'groups',
    1 => 'mng_groups',
  ),
  'Packages' => 
  array (
    0 => 'packages',
    1 => 'mng_packages',
  ),
  'Subresellers' => 
  array (
    0 => 'subresellers',
    1 => 'subreseller',
  ),
  'Client Logs' => 
  array (
    0 => 'client_logs',
    1 => 'client_request_log',
  ),
  'Credit Logs' => 
  array (
    0 => 'credit_logs',
    1 => 'credits_log',
  ),
  'Reseller Logs' => 
  array (
    0 => 'user_logs',
    1 => 'reg_userlog',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Mass Edit' => 
  array (
    0 => 'user_mass',
    1 => 'mass_edit_reguser',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
) 532:'users'         	;0
787  256   INIT_ARRAY/71             #341=     533:array (
  0 => 'bouquets',
  1 => 'bouquets',
) 534:'Manage Bouquets'	;10
788  256   CONCAT/8                  #342=     535:'bouquet_sort?id=' 16?1                	;0
789  256   INIT_ARRAY/71             #343=     #342                 ?0                  	;8
790  256   ADD_ARRAY_ELEMENT/72      #343=     536:'edit_bouquet'   ?0                  	;0
791  256   ADD_ARRAY_ELEMENT/72      #341=     #343                 537:'Sort Bouquet'  	;0
792  256   ADD_ARRAY_ELEMENT/72      #323=     #341                 538:'bouquet'       	;0
793  256   INIT_ARRAY/71             #344=     539:array (
  0 => 'bouquets',
  1 => 'bouquets',
) 540:'Manage Bouquets'	;10
794  256   CONCAT/8                  #345=     541:'bouquet?id='    16?1                	;0
795  256   INIT_ARRAY/71             #346=     #345                 ?0                  	;8
796  256   ADD_ARRAY_ELEMENT/72      #346=     542:'edit_bouquet'   ?0                  	;0
797  256   ADD_ARRAY_ELEMENT/72      #344=     #346                 543:'Edit Bouquet'  	;0
798  256   ADD_ARRAY_ELEMENT/72      #323=     #344                 544:'bouquet_sort'  	;0
799  256   ADD_ARRAY_ELEMENT/72      #323=     545:array (
  'Manage Bouquets' => 
  array (
    0 => 'bouquets',
    1 => 'bouquets',
  ),
  'Add Bouquet' => 
  array (
    0 => 'bouquet',
    1 => 'add_bouquet',
  ),
) 546:'bouquet_order' 	;0
800  256   CONCAT/8                  #347=     547:'stream_view?id=' 16?1                	;0
801  256   INIT_ARRAY/71             #348=     #347                 ?0                  	;8
802  256   ADD_ARRAY_ELEMENT/72      #348=     548:'streams'        ?0                  	;0
803  256   INIT_ARRAY/71             #349=     #348                 549:'View Stream'   	;18
804  256   CONCAT/8                  #350=     550:'stream?id='     16?1                	;0
805  256   INIT_ARRAY/71             #351=     #350                 ?0                  	;8
806  256   ADD_ARRAY_ELEMENT/72      #351=     551:'edit_stream'    ?0                  	;0
807  256   ADD_ARRAY_ELEMENT/72      #349=     #351                 552:'Edit Stream'   	;0
808  256   ADD_ARRAY_ELEMENT/72      #349=     553:array (
  0 => 'record',
  1 => 'add_movie',
) 554:'Create Recording'	;0
809  256   ADD_ARRAY_ELEMENT/72      #349=     555:array (
  0 => 'streams',
  1 => 'streams',
) 556:'Manage Streams'	;0
810  256   ADD_ARRAY_ELEMENT/72      #323=     #349                 557:'archive'       	;0
811  256   ADD_ARRAY_ELEMENT/72      #323=     558:array (
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
) 559:'asns'          	;0
812  256   ADD_ARRAY_ELEMENT/72      #323=     560:array (
  'General Settings' => 
  array (
    0 => 'settings',
    1 => 'settings',
  ),
  'Watch Settings' => 
  array (
    0 => 'settings_watch',
    1 => 'folder_watch_settings',
  ),
  'Plex Settings' => 
  array (
    0 => 'settings_plex',
    1 => 'folder_watch_settings',
  ),
  'Cache Settings' => 
  array (
    0 => 'cache',
    1 => 'backups',
  ),
) 561:'backups'       	;0
813  256   ADD_ARRAY_ELEMENT/72      #323=     562:array (
  'General Settings' => 
  array (
    0 => 'settings',
    1 => 'settings',
  ),
  'Watch Settings' => 
  array (
    0 => 'settings_watch',
    1 => 'folder_watch_settings',
  ),
  'Plex Settings' => 
  array (
    0 => 'settings_plex',
    1 => 'folder_watch_settings',
  ),
  'Backup Settings' => 
  array (
    0 => 'backups',
    1 => 'database',
  ),
) 563:'cache'         	;0
814  256   ADD_ARRAY_ELEMENT/72      #323=     564:array (
  'Backup Settings' => 
  array (
    0 => 'backups',
    1 => 'database',
  ),
  'Watch Settings' => 
  array (
    0 => 'settings_watch',
    1 => 'folder_watch_settings',
  ),
  'Plex Settings' => 
  array (
    0 => 'settings_plex',
    1 => 'folder_watch_settings',
  ),
  'Cache Settings' => 
  array (
    0 => 'cache',
    1 => 'backups',
  ),
) 565:'settings'      	;0
815  256   ADD_ARRAY_ELEMENT/72      #323=     566:array (
  'Folders' => 
  array (
    0 => 'watch',
    1 => 'folder_watch',
  ),
  'General Settings' => 
  array (
    0 => 'settings',
    1 => 'settings',
  ),
  'Backup Settings' => 
  array (
    0 => 'backups',
    1 => 'database',
  ),
  'Plex Settings' => 
  array (
    0 => 'settings_plex',
    1 => 'folder_watch_settings',
  ),
  'Watch Folder Logs' => 
  array (
    0 => 'watch_output',
    1 => 'folder_watch_output',
  ),
) 567:'settings_watch'	;0
816  256   ADD_ARRAY_ELEMENT/72      #323=     568:array (
  'Libraries' => 
  array (
    0 => 'plex',
    1 => 'folder_watch',
  ),
  'General Settings' => 
  array (
    0 => 'settings',
    1 => 'settings',
  ),
  'Backup Settings' => 
  array (
    0 => 'backups',
    1 => 'database',
  ),
  'Watch Settings' => 
  array (
    0 => 'settings_watch',
    1 => 'folder_watch_settings',
  ),
  'Watch Folder Logs' => 
  array (
    0 => 'watch_output',
    1 => 'folder_watch_output',
  ),
) 569:'settings_plex' 	;0
817  256   ADD_ARRAY_ELEMENT/72      #323=     570:array (
  'Categories' => 
  array (
    0 => 'stream_categories',
    1 => 'categories',
  ),
  'Bouquets' => 
  array (
    0 => 'bouquets',
    1 => 'bouquets',
  ),
) 571:'channel_order' 	;0
818  256   INIT_ARRAY/71             #352=     572:array (
  0 => 'bouquet',
  1 => 'add_bouquet',
) 573:'Add Bouquet'   	;18
819  256   JMPZ/43                   ?0        16?6                 ?822                	;0	>>822
820  256   QM_ASSIGN/22              #353=     574:array (
)        ?0                  	;0
821  256   JMP/42                    ?0        ?823                 ?0                  	;0	>>823
822  256   QM_ASSIGN/22              #353=     575:array (
  0 => 'bouquet_order',
  1 => 'edit_bouquet',
) ?0                  	;0	<<819
823  256   ADD_ARRAY_ELEMENT/72      #352=     #353                 576:'Order Bouquets'	;0	<<821
824  256   JMPZ/43                   ?0        16?6                 ?827                	;0	>>827
825  256   QM_ASSIGN/22              #354=     577:array (
)        ?0                  	;0
826  256   JMP/42                    ?0        ?828                 ?0                  	;0	>>828
827  256   QM_ASSIGN/22              #354=     578:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<824
828  256   ADD_ARRAY_ELEMENT/72      #352=     #354                 579:'Channel Order' 	;0	<<826
829  256   ADD_ARRAY_ELEMENT/72      #352=     580:array (
  0 => 'stream_categories',
  1 => 'categories',
) 581:'Categories'    	;0
830  256   ADD_ARRAY_ELEMENT/72      #323=     #352                 582:'bouquets'      	;0
831  256   INIT_ARRAY/71             #355=     583:array (
  0 => 'stream_category',
  1 => 'add_cat',
) 584:'Add Category'  	;14
832  256   JMPZ/43                   ?0        16?6                 ?835                	;0	>>835
833  256   QM_ASSIGN/22              #356=     585:array (
)        ?0                  	;0
834  256   JMP/42                    ?0        ?836                 ?0                  	;0	>>836
835  256   QM_ASSIGN/22              #356=     586:array (
  0 => 'channel_order',
  1 => 'channel_order',
) ?0                  	;0	<<832
836  256   ADD_ARRAY_ELEMENT/72      #355=     #356                 587:'Channel Order' 	;0	<<834
837  256   ADD_ARRAY_ELEMENT/72      #355=     588:array (
  0 => 'bouquets',
  1 => 'bouquets',
) 589:'Bouquets'      	;0
838  256   ADD_ARRAY_ELEMENT/72      #323=     #355                 590:'stream_categories'	;0
839  256   ADD_ARRAY_ELEMENT/72      #323=     591:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'Clear Logs' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-clear-logs"',
  ),
) 592:'client_logs'   	;0
840  256   ADD_ARRAY_ELEMENT/72      #323=     593:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'Clear Logs' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-clear-logs"',
  ),
) 594:'credit_logs'   	;0
841  256   ADD_ARRAY_ELEMENT/72      #323=     595:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'Clear Logs' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-clear-logs"',
  ),
) 596:'user_logs'     	;0
842  256   ADD_ARRAY_ELEMENT/72      #323=     597:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'Clear Logs' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-clear-logs"',
  ),
) 598:'stream_errors' 	;0
843  256   ADD_ARRAY_ELEMENT/72      #323=     599:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'Clear Logs' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-clear-logs"',
  ),
) 600:'line_activity' 	;0
844  256   ADD_ARRAY_ELEMENT/72      #323=     601:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'Clear Logs' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-clear-logs"',
  ),
  'Watch Folder' => 
  array (
    0 => 'watch',
    1 => 'folder_watch',
  ),
) 602:'watch_output'  	;0
845  256   ADD_ARRAY_ELEMENT/72      #323=     603:array (
  'Access Codes' => 
  array (
    0 => 'codes',
    1 => 'add_code',
  ),
) 604:'code'          	;0
846  256   ADD_ARRAY_ELEMENT/72      #323=     605:array (
  'Add Code' => 
  array (
    0 => 'code',
    1 => 'add_code',
  ),
) 606:'codes'         	;0
847  256   ADD_ARRAY_ELEMENT/72      #323=     607:array (
  'Add HMAC' => 
  array (
    0 => 'hmac',
    1 => 'add_hmac',
  ),
) 608:'hmacs'         	;0
848  256   ADD_ARRAY_ELEMENT/72      #323=     609:array (
  'HMAC Keys' => 
  array (
    0 => 'hmacs',
    1 => 'add_hmac',
  ),
) 610:'hmac'          	;0
849  256   CONCAT/8                  #357=     611:'stream_view?id=' 16?1                	;0
850  256   INIT_ARRAY/71             #358=     #357                 ?0                  	;8
851  256   ADD_ARRAY_ELEMENT/72      #358=     612:'streams'        ?0                  	;0
852  256   INIT_ARRAY/71             #359=     #358                 613:'View Stream'   	;22
853  256   ADD_ARRAY_ELEMENT/72      #359=     614:array (
  0 => 'stream?import',
  1 => 'import_streams',
) 615:'Import'        	;0
854  256   ADD_ARRAY_ELEMENT/72      #359=     616:array (
  0 => 'stream',
  1 => 'add_stream',
) 617:'Add Single'    	;0
855  256   ADD_ARRAY_ELEMENT/72      #359=     618:array (
  0 => 'streams',
  1 => 'streams',
) 619:'Manage Streams'	;0
856  256   JMPZ/43                   ?0        16?6                 ?859                	;0	>>859
857  256   QM_ASSIGN/22              #360=     620:array (
)        ?0                  	;0
858  256   JMP/42                    ?0        ?860                 ?0                  	;0	>>860
859  256   QM_ASSIGN/22              #360=     621:array (
  0 => 'review?type=1',
  1 => 'import_streams',
) ?0                  	;0	<<856
860  256   ADD_ARRAY_ELEMENT/72      #359=     #360                 622:'Import & Review'	;0	<<858
861  256   ADD_ARRAY_ELEMENT/72      #323=     #359                 623:'stream'        	;0
862  256   CONCAT/8                  #361=     624:'stream_view?id=' 16?1                	;0
863  256   INIT_ARRAY/71             #362=     #361                 ?0                  	;8
864  256   ADD_ARRAY_ELEMENT/72      #362=     625:'movies'         ?0                  	;0
865  256   INIT_ARRAY/71             #363=     #362                 626:'View Movie'    	;22
866  256   ADD_ARRAY_ELEMENT/72      #363=     627:array (
  0 => 'movie?import',
  1 => 'import_movies',
) 628:'Import'        	;0
867  256   ADD_ARRAY_ELEMENT/72      #363=     629:array (
  0 => 'movie',
  1 => 'add_movie',
) 630:'Add Single'    	;0
868  256   ADD_ARRAY_ELEMENT/72      #363=     631:array (
  0 => 'movies',
  1 => 'movies',
) 632:'Manage Movies' 	;0
869  256   JMPZ/43                   ?0        16?6                 ?872                	;0	>>872
870  256   QM_ASSIGN/22              #364=     633:array (
)        ?0                  	;0
871  256   JMP/42                    ?0        ?873                 ?0                  	;0	>>873
872  256   QM_ASSIGN/22              #364=     634:array (
  0 => 'review?type=2',
  1 => 'import_movies',
) ?0                  	;0	<<869
873  256   ADD_ARRAY_ELEMENT/72      #363=     #364                 635:'Import & Review'	;0	<<871
874  256   ADD_ARRAY_ELEMENT/72      #323=     #363                 636:'movie'         	;0
875  256   CONCAT/8                  #365=     637:'episode?sid='   16?9                	;0
876  256   CONCAT/8                  #366=     #365                 638:'&multi'        	;0
877  256   INIT_ARRAY/71             #367=     #366                 ?0                  	;8
878  256   ADD_ARRAY_ELEMENT/72      #367=     639:'add_episode'    ?0                  	;0
879  256   INIT_ARRAY/71             #368=     #367                 640:'Add Multiple'  	;18
880  256   CONCAT/8                  #369=     641:'episode?sid='   16?9                	;0
881  256   INIT_ARRAY/71             #370=     #369                 ?0                  	;8
882  256   ADD_ARRAY_ELEMENT/72      #370=     642:'add_episode'    ?0                  	;0
883  256   ADD_ARRAY_ELEMENT/72      #368=     #370                 643:'Add Single'    	;0
884  256   CONCAT/8                  #371=     644:'episodes?series=' 16?9                	;0
885  256   INIT_ARRAY/71             #372=     #371                 ?0                  	;8
886  256   ADD_ARRAY_ELEMENT/72      #372=     645:'episodes'       ?0                  	;0
887  256   ADD_ARRAY_ELEMENT/72      #368=     #372                 646:'View Episodes' 	;0
888  256   ADD_ARRAY_ELEMENT/72      #368=     647:array (
  0 => 'series',
  1 => 'series',
) 648:'Manage Series' 	;0
889  256   ADD_ARRAY_ELEMENT/72      #323=     #368                 649:'episode'       	;0
890  256   INIT_ARRAY/71             #373=     650:array (
  0 => 'serie?import',
  1 => 'import_streams',
) 651:'Import'        	;18
891  256   ADD_ARRAY_ELEMENT/72      #373=     652:array (
  0 => 'serie',
  1 => 'add_series',
) 653:'Add Single'    	;0
892  256   ADD_ARRAY_ELEMENT/72      #373=     654:array (
  0 => 'series',
  1 => 'series',
) 655:'Manage Series' 	;0
893  256   CONCAT/8                  #374=     656:'episodes?series=' 16?1                	;0
894  256   INIT_ARRAY/71             #375=     #374                 ?0                  	;8
895  256   ADD_ARRAY_ELEMENT/72      #375=     657:'episodes'       ?0                  	;0
896  256   ADD_ARRAY_ELEMENT/72      #373=     #375                 658:'View Episodes' 	;0
897  256   ADD_ARRAY_ELEMENT/72      #323=     #373                 659:'serie'         	;0
898  256   CONCAT/8                  #376=     660:'stream_view?id=' 16?1                	;0
899  256   INIT_ARRAY/71             #377=     #376                 ?0                  	;8
900  256   ADD_ARRAY_ELEMENT/72      #377=     661:'streams'        ?0                  	;0
901  256   INIT_ARRAY/71             #378=     #377                 662:'View Channel'  	;10
902  256   ADD_ARRAY_ELEMENT/72      #378=     663:array (
  0 => 'created_channels',
  1 => 'streams',
) 664:'Manage Channels'	;0
903  256   ADD_ARRAY_ELEMENT/72      #323=     #378                 665:'created_channel'	;0
904  256   ADD_ARRAY_ELEMENT/72      #323=     666:array (
  'Manage EPG\'s' => 
  array (
    0 => 'epgs',
    1 => 'epg',
  ),
) 667:'epg'           	;0
905  256   ADD_ARRAY_ELEMENT/72      #323=     668:array (
  'Add EPG' => 
  array (
    0 => 'epg',
    1 => 'add_epg',
  ),
  'Force Reload' => 
  array (
    0 => NULL,
    1 => 'add_epg',
    2 => 'onClick="forceUpdate();" id="force_update"',
  ),
) 669:'epgs'          	;0
906  256   ADD_ARRAY_ELEMENT/72      #323=     670:array (
  'Manage Streams' => 
  array (
    0 => 'streams',
    1 => 'streams',
  ),
) 671:'fingerprint'   	;0
907  256   ADD_ARRAY_ELEMENT/72      #323=     672:array (
  'Manage Groups' => 
  array (
    0 => 'groups',
    1 => 'mng_groups',
  ),
) 673:'group'         	;0
908  256   ADD_ARRAY_ELEMENT/72      #323=     674:array (
  'Add Group' => 
  array (
    0 => 'group',
    1 => 'add_group',
  ),
) 675:'groups'        	;0
909  256   ADD_ARRAY_ELEMENT/72      #323=     676:array (
  'Manage Packages' => 
  array (
    0 => 'packages',
    1 => 'mng_packages',
  ),
) 677:'package'       	;0
910  256   ADD_ARRAY_ELEMENT/72      #323=     678:array (
  'Add Package' => 
  array (
    0 => 'package',
    1 => 'add_packages',
  ),
) 679:'packages'      	;0
911  256   ADD_ARRAY_ELEMENT/72      #323=     680:array (
  'Providers' => 
  array (
    0 => 'providers',
    1 => 'streams',
  ),
) 681:'provider'      	;0
912  256   ADD_ARRAY_ELEMENT/72      #323=     682:array (
  'Add Provider' => 
  array (
    0 => 'provider',
    1 => 'streams',
  ),
) 683:'providers'     	;0
913  256   ADD_ARRAY_ELEMENT/72      #323=     684:array (
  'Blocked IPs' => 
  array (
    0 => 'ips',
    1 => 'block_ips',
  ),
) 685:'ip'            	;0
914  256   ADD_ARRAY_ELEMENT/72      #323=     686:array (
  'Block IP' => 
  array (
    0 => 'ip',
    1 => 'block_ips',
  ),
  'Flush Blocks' => 
  array (
    0 => 'ips?flush=1',
    1 => 'block_ips',
  ),
) 687:'ips'           	;0
915  256   ADD_ARRAY_ELEMENT/72      #323=     688:array (
  'Blocked ISPs' => 
  array (
    0 => 'isps',
    1 => 'block_isps',
  ),
) 689:'isp'           	;0
916  256   ADD_ARRAY_ELEMENT/72      #323=     690:array (
  'Block ISP' => 
  array (
    0 => 'isp',
    1 => 'block_isps',
  ),
) 691:'isps'          	;0
917  256   ADD_ARRAY_ELEMENT/72      #323=     692:array (
  'Manage Lines' => 
  array (
    0 => 'lines',
    1 => 'users',
  ),
) 693:'line'          	;0
918  256   ADD_ARRAY_ELEMENT/72      #323=     694:array (
  'Manage Users' => 
  array (
    0 => 'users',
    1 => 'mng_regusers',
  ),
) 695:'user'          	;0
919  256   ADD_ARRAY_ELEMENT/72      #323=     696:array (
  'MAG Devices' => 
  array (
    0 => 'mags',
    1 => 'manage_mag',
  ),
) 697:'mag'           	;0
920  256   ADD_ARRAY_ELEMENT/72      #323=     698:array (
  'Enigma Devices' => 
  array (
    0 => 'enigmas',
    1 => 'manage_e2',
  ),
) 699:'enigma'        	;0
921  256   ADD_ARRAY_ELEMENT/72      #323=     700:array (
  'Manage Lines' => 
  array (
    0 => 'lines',
    1 => 'users',
  ),
) 701:'line_ips'      	;0
922  256   ADD_ARRAY_ELEMENT/72      #323=     702:array (
  'Manage Lines' => 
  array (
    0 => 'lines',
    1 => 'users',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
) 703:'line_mass'     	;0
923  256   ADD_ARRAY_ELEMENT/72      #323=     704:array (
  'Manage Users' => 
  array (
    0 => 'users',
    1 => 'mng_regusers',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
) 705:'user_mass'     	;0
924  256   ADD_ARRAY_ELEMENT/72      #323=     706:array (
  'Manage Devices' => 
  array (
    0 => 'mags',
    1 => 'manage_mag',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
) 707:'mag_mass'      	;0
925  256   ADD_ARRAY_ELEMENT/72      #323=     708:array (
  'Manage Devices' => 
  array (
    0 => 'enigmas',
    1 => 'manage_e2',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
) 709:'enigma_mass'   	;0
926  256   ADD_ARRAY_ELEMENT/72      #323=     710:array (
  'Manage Streams' => 
  array (
    0 => 'streams',
    1 => 'streams',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Stream Tools' => 
  array (
    0 => 'stream_tools',
    1 => 'stream_tools',
  ),
) 711:'stream_mass'   	;0
927  256   ADD_ARRAY_ELEMENT/72      #323=     712:array (
  'Manage Channels' => 
  array (
    0 => 'created_channels',
    1 => 'streams',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Stream Tools' => 
  array (
    0 => 'stream_tools',
    1 => 'stream_tools',
  ),
) 713:'created_channel_mass'	;0
928  256   ADD_ARRAY_ELEMENT/72      #323=     714:array (
  'Manage Movies' => 
  array (
    0 => 'movies',
    1 => 'movies',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Stream Tools' => 
  array (
    0 => 'stream_tools',
    1 => 'stream_tools',
  ),
) 715:'movie_mass'    	;0
929  256   ADD_ARRAY_ELEMENT/72      #323=     716:array (
  'Manage Stations' => 
  array (
    0 => 'radios',
    1 => 'radio',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Stream Tools' => 
  array (
    0 => 'stream_tools',
    1 => 'stream_tools',
  ),
) 717:'radio_mass'    	;0
930  256   ADD_ARRAY_ELEMENT/72      #323=     718:array (
  'Manage Series' => 
  array (
    0 => 'series',
    1 => 'series',
  ),
  'Manage Episodes' => 
  array (
    0 => 'episodes',
    1 => 'episodes',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
) 719:'series_mass'   	;0
931  256   ADD_ARRAY_ELEMENT/72      #323=     720:array (
  'Manage Episodes' => 
  array (
    0 => 'episodes',
    1 => 'episodes',
  ),
  'Manage Series' => 
  array (
    0 => 'series',
    1 => 'series',
  ),
  'Mass Delete' => 
  array (
    0 => 'mass_delete',
    1 => 'mass_delete',
  ),
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
  'Stream Tools' => 
  array (
    0 => 'stream_tools',
    1 => 'stream_tools',
  ),
) 721:'episodes_mass' 	;0
932  256   ADD_ARRAY_ELEMENT/72      #323=     722:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
  'MAG Devices' => 
  array (
    0 => 'mags',
    1 => 'manage_mag',
  ),
) 723:'mag_events'    	;0
933  256   ADD_ARRAY_ELEMENT/72      #323=     724:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
) 725:'login_logs'    	;0
934  256   ADD_ARRAY_ELEMENT/72      #323=     726:array (
  'Export as CSV' => 
  array (
    0 => NULL,
    1 => NULL,
    2 => 'id="btn-export-csv"',
  ),
) 727:'mysql_syslog'  	;0
935  256   ADD_ARRAY_ELEMENT/72      #323=     728:array (
  'Manage Streams' => 
  array (
    0 => 'streams',
    1 => 'streams',
  ),
  'Manage Channels' => 
  array (
    0 => 'created_channels',
    1 => 'streams',
  ),
  'Manage Series' => 
  array (
    0 => 'series',
    1 => 'series',
  ),
  'Manage Episodes' => 
  array (
    0 => 'episodes',
    1 => 'episodes',
  ),
  'Manage Stations' => 
  array (
    0 => 'radios',
    1 => 'radio',
  ),
  'Manage Lines' => 
  array (
    0 => 'lines',
    1 => 'users',
  ),
  'Manage Users' => 
  array (
    0 => 'users',
    1 => 'mng_regusers',
  ),
  'Manage MAGs' => 
  array (
    0 => 'mags',
    1 => 'manage_mag',
  ),
  'Manage Enigmas' => 
  array (
    0 => 'enigmas',
    1 => 'manage_e2',
  ),
) 729:'mass_delete'   	;0
936  256   ADD_ARRAY_ELEMENT/72      #323=     730:array (
  'Stream Tools' => 
  array (
    0 => 'stream_tools',
    1 => 'stream_tools',
  ),
) 731:'quick_tools'   	;0
937  256   ADD_ARRAY_ELEMENT/72      #323=     732:array (
  'Quick Tools' => 
  array (
    0 => 'quick_tools',
    1 => 'quick_tools',
  ),
) 733:'stream_tools'  	;0
938  256   ADD_ARRAY_ELEMENT/72      #323=     734:array (
  'Manage Profiles' => 
  array (
    0 => 'profiles',
    1 => 'tprofiles',
  ),
) 735:'profile'       	;0
939  256   ADD_ARRAY_ELEMENT/72      #323=     736:array (
  'Create Profile' => 
  array (
    0 => 'profile',
    1 => 'tprofile',
  ),
) 737:'profiles'      	;0
940  256   ADD_ARRAY_ELEMENT/72      #323=     738:array (
  'Add IP' => 
  array (
    0 => 'rtmp_ip',
    1 => 'add_rtmp',
  ),
) 739:'rtmp_ips'      	;0
941  256   ADD_ARRAY_ELEMENT/72      #323=     740:array (
  'RTMP IPs' => 
  array (
    0 => 'rtmp_ips',
    1 => 'rtmp',
  ),
) 741:'rtmp_ip'       	;0
942  256   CONCAT/8                  #379=     742:'server_view?id=' 16?1                	;0
943  256   INIT_ARRAY/71             #380=     #379                 ?0                  	;8
944  256   ADD_ARRAY_ELEMENT/72      #380=     743:'servers'        ?0                  	;0
945  256   INIT_ARRAY/71             #381=     #380                 744:'View Server'   	;10
946  256   ADD_ARRAY_ELEMENT/72      #381=     745:array (
  0 => 'servers',
  1 => 'servers',
) 746:'Manage Servers'	;0
947  256   ADD_ARRAY_ELEMENT/72      #323=     #381                 747:'server'        	;0
948  256   CONCAT/8                  #382=     748:'server_view?id=' 16?1                	;0
949  256   INIT_ARRAY/71             #383=     #382                 ?0                  	;8
950  256   ADD_ARRAY_ELEMENT/72      #383=     749:'servers'        ?0                  	;0
951  256   INIT_ARRAY/71             #384=     #383                 750:'View Proxy'    	;10
952  256   ADD_ARRAY_ELEMENT/72      #384=     751:array (
  0 => 'proxies',
  1 => 'servers',
) 752:'Manage Proxies'	;0
953  256   ADD_ARRAY_ELEMENT/72      #323=     #384                 753:'proxy'         	;0
954  256   ADD_ARRAY_ELEMENT/72      #323=     754:array (
  'Manage Servers' => 
  array (
    0 => 'servers',
    1 => 'servers',
  ),
  'Manage Proxies' => 
  array (
    0 => 'proxies',
    1 => 'servers',
  ),
) 755:'server_install'	;0
955  256   ADD_ARRAY_ELEMENT/72      #323=     756:array (
  'Install Server' => 
  array (
    0 => 'server_install',
    1 => 'add_server',
  ),
  'Server Order' => 
  array (
    0 => 'server_order',
    1 => 'servers',
  ),
  'Proxies' => 
  array (
    0 => 'proxies',
    1 => 'servers',
  ),
  'Process Monitor' => 
  array (
    0 => 'process_monitor',
    1 => 'process_monitor',
  ),
  'Update All Servers' => 
  array (
    0 => NULL,
    1 => 'servers',
    2 => 'onClick="updateAll();"',
  ),
  'Update All Binaries' => 
  array (
    0 => NULL,
    1 => 'servers',
    2 => 'onClick="updateBinaries();"',
  ),
  'Restart All Services' => 
  array (
    0 => NULL,
    1 => 'servers',
    2 => 'onClick="restartServices();"',
  ),
) 757:'servers'       	;0
956  256   ADD_ARRAY_ELEMENT/72      #323=     758:array (
  'Servers' => 
  array (
    0 => 'servers',
    1 => 'servers',
  ),
  'Proxies' => 
  array (
    0 => 'proxies',
    1 => 'servers',
  ),
  'Process Monitor' => 
  array (
    0 => 'process_monitor',
    1 => 'process_monitor',
  ),
) 759:'server_order'  	;0
957  256   ADD_ARRAY_ELEMENT/72      #323=     760:array (
  'Install Proxy' => 
  array (
    0 => 'server_install?proxy=1',
    1 => 'add_server',
  ),
  'Servers' => 
  array (
    0 => 'servers',
    1 => 'servers',
  ),
  'Process Monitor' => 
  array (
    0 => 'process_monitor',
    1 => 'process_monitor',
  ),
) 761:'proxies'       	;0
958  256   ADD_ARRAY_ELEMENT/72      #323=     762:array (
  'Manage Categories' => 
  array (
    0 => 'stream_categories',
    1 => 'categories',
  ),
) 763:'stream_category'	;0
959  256   CONCAT/8                  #385=     764:'ticket_view?id=' 16?1                	;0
960  256   INIT_ARRAY/71             #386=     #385                 ?0                  	;8
961  256   ADD_ARRAY_ELEMENT/72      #386=     765:'ticket'         ?0                  	;0
962  256   INIT_ARRAY/71             #387=     #386                 766:'View Ticket'   	;10
963  256   ADD_ARRAY_ELEMENT/72      #387=     767:array (
  0 => 'tickets',
  1 => 'manage_tickets',
) 768:'View Tickets'  	;0
964  256   ADD_ARRAY_ELEMENT/72      #323=     #387                 769:'ticket'        	;0
965  256   CONCAT/8                  #388=     770:'ticket?id='     16?1                	;0
966  256   INIT_ARRAY/71             #389=     #388                 ?0                  	;8
967  256   ADD_ARRAY_ELEMENT/72      #389=     771:'ticket'         ?0                  	;0
968  256   INIT_ARRAY/71             #390=     #389                 772:'Add Response'  	;10
969  256   ADD_ARRAY_ELEMENT/72      #390=     773:array (
  0 => 'tickets',
  1 => 'manage_tickets',
) 774:'View Tickets'  	;0
970  256   ADD_ARRAY_ELEMENT/72      #323=     #390                 775:'ticket_view'   	;0
971  256   ADD_ARRAY_ELEMENT/72      #323=     776:array (
  'Blocked User-Agents' => 
  array (
    0 => 'useragents',
    1 => 'block_uas',
  ),
) 777:'useragent'     	;0
972  256   ADD_ARRAY_ELEMENT/72      #323=     778:array (
  'Block User-Agent' => 
  array (
    0 => 'useragent',
    1 => 'block_uas',
  ),
) 779:'useragents'    	;0
973  256   ADD_ARRAY_ELEMENT/72      #323=     780:array (
  'Add Folder' => 
  array (
    0 => 'watch_add',
    1 => 'folder_watch_add',
  ),
  'Settings' => 
  array (
    0 => 'settings_watch',
    1 => 'folder_watch_settings',
  ),
  'Watch Output Logs' => 
  array (
    0 => 'watch_output',
    1 => 'folder_watch_output',
  ),
  'Kill Running' => 
  array (
    0 => NULL,
    1 => 'folder_watch_settings',
    2 => 'onClick="killWatchFolder();"',
  ),
  'Enable All' => 
  array (
    0 => NULL,
    1 => 'folder_watch_settings',
    2 => 'onClick="enableAll();"',
  ),
  'Disable All' => 
  array (
    0 => NULL,
    1 => 'folder_watch_settings',
    2 => 'onClick="disableAll();"',
  ),
) 781:'watch'         	;0
974  256   ADD_ARRAY_ELEMENT/72      #323=     782:array (
  'Manage Folders' => 
  array (
    0 => 'watch',
    1 => 'folder_watch',
  ),
) 783:'watch_add'     	;0
975  256   ADD_ARRAY_ELEMENT/72      #323=     784:array (
  'Add Library' => 
  array (
    0 => 'plex_add',
    1 => 'folder_watch_add',
  ),
  'Settings' => 
  array (
    0 => 'settings_plex',
    1 => 'folder_watch_settings',
  ),
  'Watch Folder Logs' => 
  array (
    0 => 'watch_output',
    1 => 'folder_watch_output',
  ),
  'Kill Running' => 
  array (
    0 => NULL,
    1 => 'folder_watch_settings',
    2 => 'onClick="killPlexSync();"',
  ),
  'Enable All' => 
  array (
    0 => NULL,
    1 => 'folder_watch_settings',
    2 => 'onClick="enableAll();"',
  ),
  'Disable All' => 
  array (
    0 => NULL,
    1 => 'folder_watch_settings',
    2 => 'onClick="disableAll();"',
  ),
) 785:'plex'          	;0
976  256   ADD_ARRAY_ELEMENT/72      #323=     786:array (
  'Manage Libraries' => 
  array (
    0 => 'plex',
    1 => 'folder_watch',
  ),
) 787:'plex_add'      	;0
977  256   ASSIGN/38                 ?366      16?0                 #323                	;0
978  257   JMPNZ_EX/47               #392=     16?11                ?980                	;0	>>980
979  257   BOOL/52                   #392=     16?12                ?0                  	;0
980  257   BOOL_NOT/13               #393=     #392                 ?0                  	;0	<<978
981  257   JMPZ/43                   ?0        #393                 ?983                	;0	>>983
982  258   GOTO/253                  ?0        ?985                 ?788                	;0
983  260   ASSIGN_DIM/147            ?369      16?0                 789:'servers'       	;0	<<981
984  260   OP_DATA/137               ?0        790:array (
  'Proxies' => 
  array (
    0 => 'proxies',
    1 => 'servers',
  ),
  'Process Monitor' => 
  array (
    0 => 'process_monitor',
    1 => 'process_monitor',
  ),
) ?0                  	;0
985  262   GOTO/253                  ?0        ?652                 ?791                	;0
986  265   GOTO/253                  ?0        ?994                 ?792                	;0
987  267   CONCAT/8                  #396=     794:'movie?id='      16?1                	;0
988  267   INIT_ARRAY/71             #397=     #396                 ?0                  	;8
989  267   ADD_ARRAY_ELEMENT/72      #397=     795:'edit_movie'     ?0                  	;0
990  267   INIT_ARRAY/71             #398=     #397                 796:'Edit Movie'    	;10
991  267   ADD_ARRAY_ELEMENT/72      #398=     797:array (
  0 => 'movies',
  1 => 'movies',
) 798:'Manage Movies' 	;0
992  267   ASSIGN_DIM/147            ?370      16?0                 793:'stream_view'   	;0
993  267   OP_DATA/137               ?0        #398                 ?0                  	;0
994  269   GOTO/253                  ?0        ?1                   ?799                	;0
995  272   ASSIGN/38                 ?374      16?5                 800:array (
)       	;0
996  273   ISSET_ISEMPTY_DIM_OBJ/115 #400=     16?0                 16?4                	;33554432
997  273   BOOL_NOT/13               #401=     #400                 ?0                  	;0
998  273   JMPZ/43                   ?0        #401                 ?1000               	;0	>>1000
999  274   GOTO/253                  ?0        ?52                  ?801                	;0
1000 276   FETCH_DIM_R/81            $402=     16?0                 16?4                	;0	<<998
1001 276   FE_RESET_R/77             $403=     $402                 ?1066               	;0
1002 276   FE_FETCH_R/78             #404=     $403                 16?13               	;1066	>>1066	<<1065
1003 276   ASSIGN/38                 ?380      16?8                 #404                	;0
1004 277   NOP/0                     ?0        ?0                   ?0                  	;1
1005 277   GOTO/253                  ?0        ?1021                ?802                	;0
1006 279   INIT_FCALL_BY_NAME/59     ?0        ?0                   803:'count'         	;1
1007 279   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
1008 279   DO_FCALL_BY_NAME/131      $406=     ?0                   ?0                  	;0
1009 279   IS_SMALLER/19             #407=     805:0                $406                	;0
1010 279   BOOL_NOT/13               #408=     #407                 ?0                  	;0
1011 279   JMPZ/43                   ?0        #408                 ?1014               	;0	>>1014
1012 280   NOP/0                     ?0        ?0                   ?0                  	;1
1013 280   GOTO/253                  ?0        ?1017                ?806                	;0
1014 282   FETCH_DIM_R/81            $410=     16?13                807:0               	;0	<<1011
1015 282   ASSIGN_DIM/147            ?384      16?5                 16?8                	;0
1016 282   OP_DATA/137               ?0        $410                 ?0                  	;0
1017 284   NOP/0                     ?0        ?0                   ?0                  	;1
1018 284   GOTO/253                  ?0        ?1063                ?808                	;0
1019 286   NOP/0                     ?0        ?0                   ?0                  	;1
1020 286   GOTO/253                  ?0        ?1059                ?809                	;0
1021 288   IS_EQUAL/17               #411=     16?8                 810:'Export as CSV' 	;0
1022 288   JMPZ_EX/46                #411=     #411                 ?1029               	;0	>>1029
1023 288   INIT_FCALL_BY_NAME/59     ?0        ?0                   811:'E589a4Bf54A2dAd1'	;2
1024 288   SEND_VAL_EX/116           ?80       813:'adv'            ?1                  	;0
1025 288   SEND_VAL_EX/116           ?96       814:'backups'        ?2                  	;0
1026 288   DO_FCALL_BY_NAME/131      $412=     ?0                   ?0                  	;0
1027 288   BOOL_NOT/13               #413=     $412                 ?0                  	;0
1028 288   BOOL/52                   #411=     #413                 ?0                  	;0
1029 288   BOOL_NOT/13               #414=     #411                 ?0                  	;0	<<1022
1030 288   JMPZ/43                   ?0        #414                 ?1033               	;0	>>1033
1031 289   NOP/0                     ?0        ?0                   ?0                  	;1
1032 289   GOTO/253                  ?0        ?1035                ?815                	;0
1033 291   NOP/0                     ?0        ?0                   ?0                  	;1	<<1030
1034 291   GOTO/253                  ?0        ?1063                ?816                	;0
1035 293   JMPZ_EX/46                #415=     16?8                 ?1046               	;0	>>1046
1036 293   FETCH_DIM_R/81            $416=     16?13                817:1               	;0
1037 293   BOOL_NOT/13               #417=     $416                 ?0                  	;0
1038 293   JMPNZ_EX/47               #417=     #417                 ?1045               	;0	>>1045
1039 293   INIT_FCALL_BY_NAME/59     ?0        ?0                   818:'e589A4Bf54a2dAd1'	;2
1040 293   SEND_VAL_EX/116           ?80       820:'adv'            ?1                  	;0
1041 293   FETCH_DIM_FUNC_ARG/93     $418=     16?13                821:1               	;2
1042 293   SEND_VAR_EX/66            ?96       $418                 ?2                  	;0
1043 293   DO_FCALL_BY_NAME/131      $419=     ?0                   ?0                  	;0
1044 293   BOOL/52                   #417=     $419                 ?0                  	;0
1045 293   BOOL/52                   #415=     #417                 ?0                  	;0	<<1038
1046 293   BOOL_NOT/13               #420=     #415                 ?0                  	;0	<<1035
1047 293   JMPZ/43                   ?0        #420                 ?1050               	;0	>>1050
1048 294   NOP/0                     ?0        ?0                   ?0                  	;1
1049 294   GOTO/253                  ?0        ?1063                ?822                	;0
1050 296   INIT_FCALL_BY_NAME/59     ?0        ?0                   823:'count'         	;1	<<1047
1051 296   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
1052 296   DO_FCALL_BY_NAME/131      $421=     ?0                   ?0                  	;0
1053 296   IS_EQUAL/17               #422=     $421                 825:3               	;0
1054 296   JMPZ/43                   ?0        #422                 ?1057               	;0	>>1057
1055 297   NOP/0                     ?0        ?0                   ?0                  	;1
1056 297   GOTO/253                  ?0        ?1019                ?826                	;0
1057 299   NOP/0                     ?0        ?0                   ?0                  	;1	<<1054
1058 299   GOTO/253                  ?0        ?1006                ?827                	;0
1059 301   FETCH_DIM_R/81            $424=     16?13                828:2               	;0
1060 301   CONCAT/8                  #425=     829:'code:'          $424                	;0
1061 301   ASSIGN_DIM/147            ?398      16?5                 16?8                	;0
1062 301   OP_DATA/137               ?0        #425                 ?0                  	;0
1063 305   NOP/0                     ?0        ?0                   ?0                  	;1
1064 305   GOTO/253                  ?0        ?1065                ?830                	;0
1065 306   JMP/42                    ?0        ?1002                ?0                  	;0	>>1002
1066 306   FE_FREE/127               ?0        $403                 ?0                  	;0	<<1001
1067 309   GOTO/253                  ?0        ?52                  ?831                	;0
1068 311   IS_EQUAL/17               #426=     16?4                 832:'server_view'   	;0
1069 311   BOOL_NOT/13               #427=     #426                 ?0                  	;0
1070 311   JMPZ/43                   ?0        #427                 ?1072               	;0	>>1072
1071 312   GOTO/253                  ?0        ?1110                ?833                	;0
1072 314   FETCH_DIM_R/81            $428=     16?14                834:'server_type'   	;0	<<1070
1073 314   IS_EQUAL/17               #429=     $428                 835:0               	;0
1074 314   JMPZ/43                   ?0        #429                 ?1076               	;0	>>1076
1075 315   GOTO/253                  ?0        ?1088                ?836                	;0
1076 317   CONCAT/8                  #431=     838:'proxy?id='      16?1                	;0	<<1074
1077 317   INIT_ARRAY/71             #432=     #431                 ?0                  	;8
1078 317   ADD_ARRAY_ELEMENT/72      #432=     839:'edit_server'    ?0                  	;0
1079 317   INIT_ARRAY/71             #433=     #432                 840:'Edit Proxy'    	;14
1080 317   CONCAT/8                  #434=     841:'server_install?proxy=1&id=' 16?1                	;0
1081 317   INIT_ARRAY/71             #435=     #434                 ?0                  	;8
1082 317   ADD_ARRAY_ELEMENT/72      #435=     842:'add_server'     ?0                  	;0
1083 317   ADD_ARRAY_ELEMENT/72      #433=     #435                 843:'Reinstall Proxy'	;0
1084 317   ADD_ARRAY_ELEMENT/72      #433=     844:array (
  0 => 'proxies',
  1 => 'servers',
) 845:'Manage Proxies'	;0
1085 317   ASSIGN_DIM/147            ?405      16?0                 837:'server_view'   	;0
1086 317   OP_DATA/137               ?0        #433                 ?0                  	;0
1087 318   GOTO/253                  ?0        ?1110                ?846                	;0
1088 320   GOTO/253                  ?0        ?1089                ?847                	;0
1089 322   CONCAT/8                  #437=     849:'process_monitor?server=' 16?1                	;0
1090 322   INIT_ARRAY/71             #438=     #437                 ?0                  	;8
1091 322   ADD_ARRAY_ELEMENT/72      #438=     850:'process_monitor' ?0                  	;0
1092 322   INIT_ARRAY/71             #439=     #438                 851:'Process Monitor'	;22
1093 322   CONCAT/8                  #440=     852:'server?id='     16?1                	;0
1094 322   INIT_ARRAY/71             #441=     #440                 ?0                  	;8
1095 322   ADD_ARRAY_ELEMENT/72      #441=     853:'edit_server'    ?0                  	;0
1096 322   ADD_ARRAY_ELEMENT/72      #439=     #441                 854:'Edit Server'   	;0
1097 322   CONCAT/8                  #442=     855:'server_install?id=' 16?1                	;0
1098 322   INIT_ARRAY/71             #443=     #442                 ?0                  	;8
1099 322   ADD_ARRAY_ELEMENT/72      #443=     856:'add_server'     ?0                  	;0
1100 322   ADD_ARRAY_ELEMENT/72      #439=     #443                 857:'Reinstall Server'	;0
1101 322   INIT_ARRAY/71             #444=     858:NULL             ?0                  	;12
1102 322   ADD_ARRAY_ELEMENT/72      #444=     859:'servers'        ?0                  	;0
1103 322   CONCAT/8                  #445=     860:'onClick="getFPMStatus(' 16?1                	;0
1104 322   CONCAT/8                  #446=     #445                 861:');"'           	;0
1105 322   ADD_ARRAY_ELEMENT/72      #444=     #446                 ?0                  	;0
1106 322   ADD_ARRAY_ELEMENT/72      #439=     #444                 862:'View FPM Status'	;0
1107 322   ADD_ARRAY_ELEMENT/72      #439=     863:array (
  0 => 'servers',
  1 => 'servers',
) 864:'Manage Servers'	;0
1108 322   ASSIGN_DIM/147            ?411      16?0                 848:'server_view'   	;0
1109 322   OP_DATA/137               ?0        #439                 ?0                  	;0
1110 325   SWITCH_STRING/188         ?0        16?4                 865:array (
  'archive' => 1142,
  'movie' => 1171,
  'stream' => 1171,
  'episode' => 1233,
  'serie' => 1275,
  'mag' => 1306,
  'enigma' => 1306,
  'line' => 1306,
  'server' => 1307,
  'proxy' => 1307,
  'server_install' => 1318,
  'ticket' => 1337,
  'ticket_view' => 1348,
  'bouquet' => 1364,
  'created_channel' => 1375,
)	;1386
1111 326   CASE/48                   #447=     16?4                 866:'archive'       	;0	>>1113
1112 326   JMPNZ/44                  ?0        #447                 ?1142               	;0	>>1142
1113 337   CASE/48                   #447=     16?4                 867:'movie'         	;0	>>1115	<<1111
1114 337   JMPNZ/44                  ?0        #447                 ?1171               	;0	>>1171
1115 338   CASE/48                   #447=     16?4                 868:'stream'        	;0	>>1117	<<1113
1116 338   JMPNZ/44                  ?0        #447                 ?1171               	;0	>>1171
1117 366   CASE/48                   #447=     16?4                 869:'episode'       	;0	>>1119	<<1115
1118 366   JMPNZ/44                  ?0        #447                 ?1233               	;0	>>1233
1119 392   CASE/48                   #447=     16?4                 870:'serie'         	;0	>>1121	<<1117
1120 392   JMPNZ/44                  ?0        #447                 ?1275               	;0	>>1275
1121 407   CASE/48                   #447=     16?4                 871:'mag'           	;0	>>1123	<<1119
1122 407   JMPNZ/44                  ?0        #447                 ?1306               	;0	>>1306
1123 408   CASE/48                   #447=     16?4                 872:'enigma'        	;0	>>1125	<<1121
1124 408   JMPNZ/44                  ?0        #447                 ?1306               	;0	>>1306
1125 409   CASE/48                   #447=     16?4                 873:'line'          	;0	>>1127	<<1123
1126 409   JMPNZ/44                  ?0        #447                 ?1306               	;0	>>1306
1127 411   CASE/48                   #447=     16?4                 874:'server'        	;0	>>1129	<<1125
1128 411   JMPNZ/44                  ?0        #447                 ?1307               	;0	>>1307
1129 412   CASE/48                   #447=     16?4                 875:'proxy'         	;0	>>1131	<<1127
1130 412   JMPNZ/44                  ?0        #447                 ?1307               	;0	>>1307
1131 419   CASE/48                   #447=     16?4                 876:'server_install'	;0	>>1133	<<1129
1132 419   JMPNZ/44                  ?0        #447                 ?1318               	;0	>>1318
1133 429   CASE/48                   #447=     16?4                 877:'ticket'        	;0	>>1135	<<1131
1134 429   JMPNZ/44                  ?0        #447                 ?1337               	;0	>>1337
1135 436   CASE/48                   #447=     16?4                 878:'ticket_view'   	;0	>>1137	<<1133
1136 436   JMPNZ/44                  ?0        #447                 ?1348               	;0	>>1348
1137 443   CASE/48                   #447=     16?4                 879:'bouquet'       	;0	>>1139	<<1135
1138 443   JMPNZ/44                  ?0        #447                 ?1364               	;0	>>1364
1139 450   CASE/48                   #447=     16?4                 880:'created_channel'	;0	>>1141	<<1137
1140 450   JMPNZ/44                  ?0        #447                 ?1375               	;0	>>1375
1141 450   JMP/42                    ?0        ?1386                ?0                  	;0	>>1386	<<1139
1142 327   INIT_FCALL_BY_NAME/59     ?0        ?0                   881:'is_null'       	;1	<<1112
1143 327   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
1144 327   DO_FCALL_BY_NAME/131      $448=     ?0                   ?0                  	;0
1145 327   BOOL_NOT/13               #449=     $448                 ?0                  	;0
1146 327   JMPZ/43                   ?0        #449                 ?1148               	;0	>>1148
1147 328   GOTO/253                  ?0        ?1156                ?883                	;0
1148 330   INIT_FCALL_BY_NAME/59     ?0        ?0                   884:'array_keys'    	;1	<<1146
1149 330   FETCH_DIM_FUNC_ARG/93     $451=     16?0                 16?4                	;1
1150 330   SEND_VAR_EX/66            ?80       $451                 ?1                  	;0
1151 330   DO_FCALL_BY_NAME/131      $452=     ?0                   ?0                  	;0
1152 330   FETCH_DIM_R/81            $453=     $452                 886:2               	;0
1153 330   FETCH_DIM_UNSET/96        $450=     16?0                 16?4                	;0
1154 330   UNSET_DIM/75              ?0        $450                 $453                	;0
1155 331   GOTO/253                  ?0        ?1170                ?887                	;0
1156 333   INIT_FCALL_BY_NAME/59     ?0        ?0                   888:'array_keys'    	;1
1157 333   FETCH_DIM_FUNC_ARG/93     $455=     16?0                 16?4                	;1
1158 333   SEND_VAR_EX/66            ?80       $455                 ?1                  	;0
1159 333   DO_FCALL_BY_NAME/131      $456=     ?0                   ?0                  	;0
1160 333   FETCH_DIM_R/81            $457=     $456                 890:1               	;0
1161 333   FETCH_DIM_UNSET/96        $454=     16?0                 16?4                	;0
1162 333   UNSET_DIM/75              ?0        $454                 $457                	;0
1163 334   INIT_FCALL_BY_NAME/59     ?0        ?0                   891:'array_keys'    	;1
1164 334   FETCH_DIM_FUNC_ARG/93     $459=     16?0                 16?4                	;1
1165 334   SEND_VAR_EX/66            ?80       $459                 ?1                  	;0
1166 334   DO_FCALL_BY_NAME/131      $460=     ?0                   ?0                  	;0
1167 334   FETCH_DIM_R/81            $461=     $460                 893:0               	;0
1168 334   FETCH_DIM_UNSET/96        $458=     16?0                 16?4                	;0
1169 334   UNSET_DIM/75              ?0        $458                 $461                	;0
1170 336   GOTO/253                  ?0        ?995                 ?894                	;0
1171 339   GOTO/253                  ?0        ?1188                ?895                	;0	<<1114,1116
1172 341   INIT_FCALL_BY_NAME/59     ?0        ?0                   896:'array_keys'    	;1
1173 341   FETCH_DIM_FUNC_ARG/93     $463=     16?0                 16?4                	;1
1174 341   SEND_VAR_EX/66            ?80       $463                 ?1                  	;0
1175 341   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
1176 341   FETCH_DIM_R/81            $465=     $464                 898:2               	;0
1177 341   FETCH_DIM_UNSET/96        $462=     16?0                 16?4                	;0
1178 341   UNSET_DIM/75              ?0        $462                 $465                	;0
1179 343   INIT_FCALL_BY_NAME/59     ?0        ?0                   899:'array_keys'    	;1
1180 343   FETCH_DIM_FUNC_ARG/93     $467=     16?0                 16?4                	;1
1181 343   SEND_VAR_EX/66            ?80       $467                 ?1                  	;0
1182 343   DO_FCALL_BY_NAME/131      $468=     ?0                   ?0                  	;0
1183 343   FETCH_DIM_R/81            $469=     $468                 901:0               	;0
1184 343   FETCH_DIM_UNSET/96        $466=     16?0                 16?4                	;0
1185 343   UNSET_DIM/75              ?0        $466                 $469                	;0
1186 345   GOTO/253                  ?0        ?995                 ?902                	;0
1187 346   GOTO/253                  ?0        ?1233                ?903                	;0
1188 348   ISSET_ISEMPTY_CV/197      #470=     16?2                 ?0                  	;33554432
1189 348   BOOL_NOT/13               #471=     #470                 ?0                  	;0
1190 348   JMPZ_EX/46                #471=     #471                 ?1194               	;0	>>1194
1191 348   ISSET_ISEMPTY_CV/197      #472=     16?16                ?0                  	;33554432
1192 348   BOOL_NOT/13               #473=     #472                 ?0                  	;0
1193 348   BOOL/52                   #471=     #473                 ?0                  	;0
1194 348   JMPZ/43                   ?0        #471                 ?1196               	;0	>>1196	<<1190
1195 349   GOTO/253                  ?0        ?1219                ?904                	;0
1196 351   INIT_FCALL_BY_NAME/59     ?0        ?0                   905:'array_keys'    	;1	<<1194
1197 351   FETCH_DIM_FUNC_ARG/93     $475=     16?0                 16?4                	;1
1198 351   SEND_VAR_EX/66            ?80       $475                 ?1                  	;0
1199 351   DO_FCALL_BY_NAME/131      $476=     ?0                   ?0                  	;0
1200 351   FETCH_DIM_R/81            $477=     $476                 907:4               	;0
1201 351   FETCH_DIM_UNSET/96        $474=     16?0                 16?4                	;0
1202 351   UNSET_DIM/75              ?0        $474                 $477                	;0
1203 352   INIT_FCALL_BY_NAME/59     ?0        ?0                   908:'array_keys'    	;1
1204 352   FETCH_DIM_FUNC_ARG/93     $479=     16?0                 16?4                	;1
1205 352   SEND_VAR_EX/66            ?80       $479                 ?1                  	;0
1206 352   DO_FCALL_BY_NAME/131      $480=     ?0                   ?0                  	;0
1207 352   FETCH_DIM_R/81            $481=     $480                 910:2               	;0
1208 352   FETCH_DIM_UNSET/96        $478=     16?0                 16?4                	;0
1209 352   UNSET_DIM/75              ?0        $478                 $481                	;0
1210 353   INIT_FCALL_BY_NAME/59     ?0        ?0                   911:'array_keys'    	;1
1211 353   FETCH_DIM_FUNC_ARG/93     $483=     16?0                 16?4                	;1
1212 353   SEND_VAR_EX/66            ?80       $483                 ?1                  	;0
1213 353   DO_FCALL_BY_NAME/131      $484=     ?0                   ?0                  	;0
1214 353   FETCH_DIM_R/81            $485=     $484                 913:1               	;0
1215 353   FETCH_DIM_UNSET/96        $482=     16?0                 16?4                	;0
1216 353   UNSET_DIM/75              ?0        $482                 $485                	;0
1217 354   GOTO/253                  ?0        ?1186                ?914                	;0
1218 355   GOTO/253                  ?0        ?1219                ?915                	;0
1219 358   FETCH_STATIC_PROP_IS/176  $486=     916:'rRequest'       917:'XUI'           	;0
1220 358   ISSET_ISEMPTY_DIM_OBJ/115 #487=     $486                 919:'import'        	;33554432
1221 358   BOOL_NOT/13               #488=     #487                 ?0                  	;0
1222 358   JMPZ/43                   ?0        #488                 ?1224               	;0	>>1224
1223 359   GOTO/253                  ?0        ?1232                ?920                	;0
1224 361   INIT_FCALL_BY_NAME/59     ?0        ?0                   921:'array_keys'    	;1	<<1222
1225 361   FETCH_DIM_FUNC_ARG/93     $490=     16?0                 16?4                	;1
1226 361   SEND_VAR_EX/66            ?80       $490                 ?1                  	;0
1227 361   DO_FCALL_BY_NAME/131      $491=     ?0                   ?0                  	;0
1228 361   FETCH_DIM_R/81            $492=     $491                 923:1               	;0
1229 361   FETCH_DIM_UNSET/96        $489=     16?0                 16?4                	;0
1230 361   UNSET_DIM/75              ?0        $489                 $492                	;0
1231 362   GOTO/253                  ?0        ?1179                ?924                	;0
1232 364   GOTO/253                  ?0        ?1172                ?925                	;0
1233 367   GOTO/253                  ?0        ?1255                ?926                	;0	<<1118
1234 371   GOTO/253                  ?0        ?995                 ?927                	;0
1235 372   GOTO/253                  ?0        ?1275                ?928                	;0
1236 374   ISSET_ISEMPTY_CV/197      #493=     16?17                ?0                  	;33554432
1237 374   JMPZ/43                   ?0        #493                 ?1239               	;0	>>1239
1238 375   GOTO/253                  ?0        ?1247                ?929                	;0
1239 377   INIT_FCALL_BY_NAME/59     ?0        ?0                   930:'array_keys'    	;1	<<1237
1240 377   FETCH_DIM_FUNC_ARG/93     $495=     16?0                 16?4                	;1
1241 377   SEND_VAR_EX/66            ?80       $495                 ?1                  	;0
1242 377   DO_FCALL_BY_NAME/131      $496=     ?0                   ?0                  	;0
1243 377   FETCH_DIM_R/81            $497=     $496                 932:1               	;0
1244 377   FETCH_DIM_UNSET/96        $494=     16?0                 16?4                	;0
1245 377   UNSET_DIM/75              ?0        $494                 $497                	;0
1246 378   GOTO/253                  ?0        ?1234                ?933                	;0
1247 380   INIT_FCALL_BY_NAME/59     ?0        ?0                   934:'array_keys'    	;1
1248 380   FETCH_DIM_FUNC_ARG/93     $499=     16?0                 16?4                	;1
1249 380   SEND_VAR_EX/66            ?80       $499                 ?1                  	;0
1250 380   DO_FCALL_BY_NAME/131      $500=     ?0                   ?0                  	;0
1251 380   FETCH_DIM_R/81            $501=     $500                 936:0               	;0
1252 380   FETCH_DIM_UNSET/96        $498=     16?0                 16?4                	;0
1253 380   UNSET_DIM/75              ?0        $498                 $501                	;0
1254 381   GOTO/253                  ?0        ?1234                ?937                	;0
1255 383   ISSET_ISEMPTY_CV/197      #502=     16?18                ?0                  	;33554432
1256 383   BOOL_NOT/13               #503=     #502                 ?0                  	;0
1257 383   JMPZ/43                   ?0        #503                 ?1259               	;0	>>1259
1258 384   GOTO/253                  ?0        ?1274                ?938                	;0
1259 386   INIT_FCALL_BY_NAME/59     ?0        ?0                   939:'array_keys'    	;1	<<1257
1260 386   FETCH_DIM_FUNC_ARG/93     $505=     16?0                 16?4                	;1
1261 386   SEND_VAR_EX/66            ?80       $505                 ?1                  	;0
1262 386   DO_FCALL_BY_NAME/131      $506=     ?0                   ?0                  	;0
1263 386   FETCH_DIM_R/81            $507=     $506                 941:1               	;0
1264 386   FETCH_DIM_UNSET/96        $504=     16?0                 16?4                	;0
1265 386   UNSET_DIM/75              ?0        $504                 $507                	;0
1266 387   INIT_FCALL_BY_NAME/59     ?0        ?0                   942:'array_keys'    	;1
1267 387   FETCH_DIM_FUNC_ARG/93     $509=     16?0                 16?4                	;1
1268 387   SEND_VAR_EX/66            ?80       $509                 ?1                  	;0
1269 387   DO_FCALL_BY_NAME/131      $510=     ?0                   ?0                  	;0
1270 387   FETCH_DIM_R/81            $511=     $510                 944:0               	;0
1271 387   FETCH_DIM_UNSET/96        $508=     16?0                 16?4                	;0
1272 387   UNSET_DIM/75              ?0        $508                 $511                	;0
1273 388   GOTO/253                  ?0        ?1234                ?945                	;0
1274 390   GOTO/253                  ?0        ?1236                ?946                	;0
1275 393   ISSET_ISEMPTY_CV/197      #512=     16?19                ?0                  	;33554432	<<1120
1276 393   JMPZ/43                   ?0        #512                 ?1278               	;0	>>1278
1277 394   GOTO/253                  ?0        ?1285                ?947                	;0
1278 396   INIT_FCALL_BY_NAME/59     ?0        ?0                   948:'array_keys'    	;1	<<1276
1279 396   FETCH_DIM_FUNC_ARG/93     $514=     16?0                 16?4                	;1
1280 396   SEND_VAR_EX/66            ?80       $514                 ?1                  	;0
1281 396   DO_FCALL_BY_NAME/131      $515=     ?0                   ?0                  	;0
1282 396   FETCH_DIM_R/81            $516=     $515                 950:3               	;0
1283 396   FETCH_DIM_UNSET/96        $513=     16?0                 16?4                	;0
1284 396   UNSET_DIM/75              ?0        $513                 $516                	;0
1285 398   FETCH_STATIC_PROP_IS/176  $517=     951:'rRequest'       952:'XUI'           	;0
1286 398   ISSET_ISEMPTY_DIM_OBJ/115 #518=     $517                 954:'import'        	;33554432
1287 398   BOOL_NOT/13               #519=     #518                 ?0                  	;0
1288 398   JMPZ/43                   ?0        #519                 ?1290               	;0	>>1290
1289 399   GOTO/253                  ?0        ?1298                ?955                	;0
1290 401   INIT_FCALL_BY_NAME/59     ?0        ?0                   956:'array_keys'    	;1	<<1288
1291 401   FETCH_DIM_FUNC_ARG/93     $521=     16?0                 16?4                	;1
1292 401   SEND_VAR_EX/66            ?80       $521                 ?1                  	;0
1293 401   DO_FCALL_BY_NAME/131      $522=     ?0                   ?0                  	;0
1294 401   FETCH_DIM_R/81            $523=     $522                 958:0               	;0
1295 401   FETCH_DIM_UNSET/96        $520=     16?0                 16?4                	;0
1296 401   UNSET_DIM/75              ?0        $520                 $523                	;0
1297 402   GOTO/253                  ?0        ?1305                ?959                	;0
1298 404   INIT_FCALL_BY_NAME/59     ?0        ?0                   960:'array_keys'    	;1
1299 404   FETCH_DIM_FUNC_ARG/93     $525=     16?0                 16?4                	;1
1300 404   SEND_VAR_EX/66            ?80       $525                 ?1                  	;0
1301 404   DO_FCALL_BY_NAME/131      $526=     ?0                   ?0                  	;0
1302 404   FETCH_DIM_R/81            $527=     $526                 962:1               	;0
1303 404   FETCH_DIM_UNSET/96        $524=     16?0                 16?4                	;0
1304 404   UNSET_DIM/75              ?0        $524                 $527                	;0
1305 406   GOTO/253                  ?0        ?995                 ?963                	;0
1306 410   GOTO/253                  ?0        ?995                 ?964                	;0	<<1122,1124,1126
1307 413   ISSET_ISEMPTY_CV/197      #528=     16?14                ?0                  	;33554432	<<1128,1130
1308 413   JMPZ/43                   ?0        #528                 ?1310               	;0	>>1310
1309 414   GOTO/253                  ?0        ?1317                ?965                	;0
1310 416   INIT_FCALL_BY_NAME/59     ?0        ?0                   966:'array_keys'    	;1	<<1308
1311 416   FETCH_DIM_FUNC_ARG/93     $530=     16?0                 16?4                	;1
1312 416   SEND_VAR_EX/66            ?80       $530                 ?1                  	;0
1313 416   DO_FCALL_BY_NAME/131      $531=     ?0                   ?0                  	;0
1314 416   FETCH_DIM_R/81            $532=     $531                 968:0               	;0
1315 416   FETCH_DIM_UNSET/96        $529=     16?0                 16?4                	;0
1316 416   UNSET_DIM/75              ?0        $529                 $532                	;0
1317 418   GOTO/253                  ?0        ?995                 ?969                	;0
1318 420   IS_EQUAL/17               #533=     16?20                970:1               	;0	<<1132
1319 420   JMPZ/43                   ?0        #533                 ?1321               	;0	>>1321
1320 421   GOTO/253                  ?0        ?1329                ?971                	;0
1321 423   INIT_FCALL_BY_NAME/59     ?0        ?0                   972:'array_keys'    	;1	<<1319
1322 423   FETCH_DIM_FUNC_ARG/93     $535=     16?0                 16?4                	;1
1323 423   SEND_VAR_EX/66            ?80       $535                 ?1                  	;0
1324 423   DO_FCALL_BY_NAME/131      $536=     ?0                   ?0                  	;0
1325 423   FETCH_DIM_R/81            $537=     $536                 974:1               	;0
1326 423   FETCH_DIM_UNSET/96        $534=     16?0                 16?4                	;0
1327 423   UNSET_DIM/75              ?0        $534                 $537                	;0
1328 424   GOTO/253                  ?0        ?1336                ?975                	;0
1329 426   INIT_FCALL_BY_NAME/59     ?0        ?0                   976:'array_keys'    	;1
1330 426   FETCH_DIM_FUNC_ARG/93     $539=     16?0                 16?4                	;1
1331 426   SEND_VAR_EX/66            ?80       $539                 ?1                  	;0
1332 426   DO_FCALL_BY_NAME/131      $540=     ?0                   ?0                  	;0
1333 426   FETCH_DIM_R/81            $541=     $540                 978:0               	;0
1334 426   FETCH_DIM_UNSET/96        $538=     16?0                 16?4                	;0
1335 426   UNSET_DIM/75              ?0        $538                 $541                	;0
1336 428   GOTO/253                  ?0        ?995                 ?979                	;0
1337 430   ISSET_ISEMPTY_CV/197      #542=     16?21                ?0                  	;33554432	<<1134
1338 430   JMPZ/43                   ?0        #542                 ?1340               	;0	>>1340
1339 431   GOTO/253                  ?0        ?1347                ?980                	;0
1340 433   INIT_FCALL_BY_NAME/59     ?0        ?0                   981:'array_keys'    	;1	<<1338
1341 433   FETCH_DIM_FUNC_ARG/93     $544=     16?0                 16?4                	;1
1342 433   SEND_VAR_EX/66            ?80       $544                 ?1                  	;0
1343 433   DO_FCALL_BY_NAME/131      $545=     ?0                   ?0                  	;0
1344 433   FETCH_DIM_R/81            $546=     $545                 983:0               	;0
1345 433   FETCH_DIM_UNSET/96        $543=     16?0                 16?4                	;0
1346 433   UNSET_DIM/75              ?0        $543                 $546                	;0
1347 435   GOTO/253                  ?0        ?995                 ?984                	;0
1348 437   ISSET_ISEMPTY_CV/197      #547=     16?22                ?0                  	;33554432	<<1136
1349 437   JMPZ_EX/46                #547=     #547                 ?1353               	;0	>>1353
1350 437   FETCH_DIM_R/81            $548=     16?22                985:'status'        	;0
1351 437   IS_EQUAL/17               #549=     $548                 986:0               	;0
1352 437   BOOL/52                   #547=     #549                 ?0                  	;0
1353 437   BOOL_NOT/13               #550=     #547                 ?0                  	;0	<<1349
1354 437   JMPZ/43                   ?0        #550                 ?1356               	;0	>>1356
1355 438   GOTO/253                  ?0        ?1363                ?987                	;0
1356 440   INIT_FCALL_BY_NAME/59     ?0        ?0                   988:'array_keys'    	;1	<<1354
1357 440   FETCH_DIM_FUNC_ARG/93     $552=     16?0                 16?4                	;1
1358 440   SEND_VAR_EX/66            ?80       $552                 ?1                  	;0
1359 440   DO_FCALL_BY_NAME/131      $553=     ?0                   ?0                  	;0
1360 440   FETCH_DIM_R/81            $554=     $553                 990:0               	;0
1361 440   FETCH_DIM_UNSET/96        $551=     16?0                 16?4                	;0
1362 440   UNSET_DIM/75              ?0        $551                 $554                	;0
1363 442   GOTO/253                  ?0        ?995                 ?991                	;0
1364 444   ISSET_ISEMPTY_CV/197      #555=     16?23                ?0                  	;33554432	<<1138
1365 444   JMPZ/43                   ?0        #555                 ?1367               	;0	>>1367
1366 445   GOTO/253                  ?0        ?1374                ?992                	;0
1367 447   INIT_FCALL_BY_NAME/59     ?0        ?0                   993:'array_keys'    	;1	<<1365
1368 447   FETCH_DIM_FUNC_ARG/93     $557=     16?0                 16?4                	;1
1369 447   SEND_VAR_EX/66            ?80       $557                 ?1                  	;0
1370 447   DO_FCALL_BY_NAME/131      $558=     ?0                   ?0                  	;0
1371 447   FETCH_DIM_R/81            $559=     $558                 995:1               	;0
1372 447   FETCH_DIM_UNSET/96        $556=     16?0                 16?4                	;0
1373 447   UNSET_DIM/75              ?0        $556                 $559                	;0
1374 449   GOTO/253                  ?0        ?995                 ?996                	;0
1375 451   ISSET_ISEMPTY_CV/197      #560=     16?24                ?0                  	;33554432	<<1140
1376 451   JMPZ/43                   ?0        #560                 ?1378               	;0	>>1378
1377 452   GOTO/253                  ?0        ?1385                ?997                	;0
1378 454   INIT_FCALL_BY_NAME/59     ?0        ?0                   998:'array_keys'    	;1	<<1376
1379 454   FETCH_DIM_FUNC_ARG/93     $562=     16?0                 16?4                	;1
1380 454   SEND_VAR_EX/66            ?80       $562                 ?1                  	;0
1381 454   DO_FCALL_BY_NAME/131      $563=     ?0                   ?0                  	;0
1382 454   FETCH_DIM_R/81            $564=     $563                 1000:0              	;0
1383 454   FETCH_DIM_UNSET/96        $561=     16?0                 16?4                	;0
1384 454   UNSET_DIM/75              ?0        $561                 $564                	;0
1385 456   GOTO/253                  ?0        ?995                 ?1001               	;0
1386 459   GOTO/253                  ?0        ?995                 ?1002               	;0	<<1141
1387 461   INIT_FCALL_BY_NAME/59     ?0        ?0                   1003:'count'        	;1	<<0
1388 461   INIT_FCALL_BY_NAME/59     ?0        ?0                   1005:'get_included_files'	;0
1389 461   DO_FCALL_BY_NAME/131      $565=     ?0                   ?0                  	;0
1390 461   SEND_VAR_NO_REF_EX/50     ?80       $565                 ?1                  	;0
1391 461   DO_FCALL_BY_NAME/131      $566=     ?0                   ?0                  	;0
1392 461   IS_EQUAL/17               #567=     $566                 1007:1              	;0
1393 461   BOOL_NOT/13               #568=     #567                 ?0                  	;0
1394 461   JMPZ/43                   ?0        #568                 ?1396               	;0	>>1396
1395 462   GOTO/253                  ?0        ?1397                ?1008               	;0
1396 464   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1394
1397 466   INIT_FCALL_BY_NAME/59     ?0        ?0                   1009:'D60F670923aDBf13'	;0
1398 466   DO_FCALL_BY_NAME/131      $569=     ?0                   ?0                  	;0
1399 466   ASSIGN/38                 ?545      16?4                 $569                	;0
1400 467   FETCH_STATIC_PROP_IS/176  $571=     1011:'rRequest'      1012:'XUI'          	;0
1401 467   ISSET_ISEMPTY_DIM_OBJ/115 #572=     $571                 1014:'id'           	;33554432
1402 467   JMPZ/43                   ?0        #572                 ?1410               	;0	>>1410
1403 467   INIT_FCALL_BY_NAME/59     ?0        ?0                   1015:'intval'       	;1
1404 467   FETCH_STATIC_PROP_FUNC_ARG/177 $573=     1017:'rRequest'      1018:'XUI'          	;1
1405 467   FETCH_DIM_FUNC_ARG/93     $574=     $573                 1020:'id'           	;1
1406 467   SEND_VAR_EX/66            ?80       $574                 ?1                  	;0
1407 467   DO_FCALL_BY_NAME/131      $575=     ?0                   ?0                  	;0
1408 467   QM_ASSIGN/22              #576=     $575                 ?0                  	;0
1409 467   JMP/42                    ?0        ?1411                ?0                  	;0	>>1411
1410 467   QM_ASSIGN/22              #576=     1021:NULL            ?0                  	;0	<<1402
1411 467   ASSIGN/38                 ?552      16?1                 #576                	;0	<<1409
1412 468   GOTO/253                  ?0        ?673                 ?1022               	;0
1413 471   NOP/0                     ?0        1023:1               ?0                  	;4294967295
*/

?>