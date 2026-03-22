<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?377                 ?0                  	;0	>>377
1   5    FETCH_DIM_R/81            $33=      16?1                 1:'cpu_average_array'	;0
2   5    JMP_SET/152               #34=      $33                  ?4                  	;0
3   5    QM_ASSIGN/22              #34=      2:array (
)          ?0                  	;0
4   5    ASSIGN/38                 ?2        16?0                 #34                 	;0
5   7    JMPZ/43                   ?0        3:false              ?7                  	;0	>>7
6   8    GOTO/253                  ?0        ?179                 ?4                  	;0
7   10   INIT_METHOD_CALL/112      ?0        16?2                 5:'ping'            	;0	<<5
8   10   DO_FCALL/60               $36=      ?0                   ?0                  	;0
9   10   JMPZ/43                   ?0        $36                  ?11                 	;0	>>11
10  11   GOTO/253                  ?0        ?416                 ?7                  	;0
11  13   GOTO/253                  ?0        ?179                 ?8                  	;0	<<9
12  14   GOTO/253                  ?0        ?416                 ?9                  	;0
13  16   FE_RESET_R/77             $37=      16?3                 ?25                 	;0
14  16   FE_FETCH_R/78             #38=      $37                  16?4                	;25	>>25	<<24
15  16   ASSIGN/38                 ?6        16?5                 #38                 	;0
16  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'round'          	;2
17  17   DIV/4                     #41=      16?4                 16?7                	;0
18  17   MUL/3                     #42=      #41                  12:100              	;0
19  17   SEND_VAL_EX/116           ?80       #42                  ?1                  	;0
20  17   SEND_VAL_EX/116           ?96       13:2                 ?2                  	;0
21  17   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
22  17   ASSIGN_DIM/147            ?7        16?6                 16?5                	;0
23  17   OP_DATA/137               ?0        $43                  ?0                  	;0
24  18   JMP/42                    ?0        ?14                  ?0                  	;0	>>14
25  18   FE_FREE/127               ?0        $37                  ?0                  	;0	<<13
26  21   FETCH_DIM_R/81            $45=      16?6                 15:'user'           	;0
27  21   FETCH_DIM_R/81            $46=      16?6                 16:'sys'            	;0
28  21   ADD/1                     #47=      $45                  $46                 	;0
29  21   ASSIGN_DIM/147            ?11       16?8                 14:'cpu'            	;0
30  21   OP_DATA/137               ?0        #47                  ?0                  	;0
31  22   FETCH_DIM_R/81            $49=      16?8                 17:'cpu'            	;0
32  22   ASSIGN_DIM/147            ?15       16?0                 ?0                  	;0
33  22   OP_DATA/137               ?0        $49                  ?0                  	;0
34  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'count'          	;1
35  23   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
36  23   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
37  23   IS_SMALLER/19             #51=      20:30                $50                 	;0
38  23   BOOL_NOT/13               #52=      #51                  ?0                  	;0
39  23   JMPZ/43                   ?0        #52                  ?41                 	;0	>>41
40  24   GOTO/253                  ?0        ?369                 ?21                 	;0
41  26   GOTO/253                  ?0        ?359                 ?22                 	;0	<<39
42  28   INIT_METHOD_CALL/112      ?0        16?2                 23:'query'          	;2
43  28   SEND_VAL_EX/116           ?80       25:'UPDATE `settings` SET `total_users` = ?;' ?1                  	;0
44  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'count'          	;1
45  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'array_unique'   	;1
46  28   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
47  28   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
48  28   SEND_VAR_NO_REF_EX/50     ?80       $53                  ?1                  	;0
49  28   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
50  28   SEND_VAR_NO_REF_EX/50     ?96       $54                  ?2                  	;0
51  28   DO_FCALL/60               ?22       ?0                   ?0                  	;0
52  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'sleep'          	;1
53  31   SEND_VAL_EX/116           ?80       32:2                 ?1                  	;0
54  31   DO_FCALL_BY_NAME/131      ?23       ?0                   ?0                  	;0
55  32   GOTO/253                  ?0        ?5                   ?33                 	;0
56  33   GOTO/253                  ?0        ?179                 ?34                 	;0
57  36   JMPZ/43                   ?0        16?10                ?59                 	;0	>>59
58  37   GOTO/253                  ?0        ?61                  ?35                 	;0
59  39   ECHO/40                   ?0        36:'Failed, break.
' ?0                  	;0	<<57
60  40   GOTO/253                  ?0        ?179                 ?37                 	;0
61  42   GOTO/253                  ?0        ?469                 ?38                 	;0
62  44   INIT_METHOD_CALL/112      ?0        16?12                39:'exec'           	;0
63  44   DO_FCALL/60               $57=      ?0                   ?0                  	;0
64  44   ASSIGN/38                 ?25       16?11                $57                 	;0
65  45   ASSIGN/38                 ?26       16?9                 41:array (
)        	;0
66  46   ASSIGN/38                 ?27       16?13                42:0                	;0
67  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'array_keys'     	;1
68  47   FETCH_STATIC_PROP_FUNC_ARG/177 $61=      45:'rServers'        46:'XUI'            	;1
69  47   SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
70  47   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
71  47   FE_RESET_R/77             $63=      $62                  ?114                	;0
72  47   FE_FETCH_R/78             ?0        $63                  16?14               	;114	>>114	<<113
73  48   FETCH_STATIC_PROP_R/173   $64=      48:'rServers'        49:'XUI'            	;0
74  48   FETCH_DIM_R/81            $65=      $64                  16?14               	;0
75  48   FETCH_DIM_R/81            $66=      $65                  51:'server_online'  	;0
76  48   BOOL_NOT/13               #67=      $66                  ?0                  	;0
77  48   JMPZ/43                   ?0        #67                  ?80                 	;0	>>80
78  49   NOP/0                     ?0        ?0                   ?0                  	;1
79  49   GOTO/253                  ?0        ?113                 ?52                 	;0
80  51   INIT_METHOD_CALL/112      ?0        16?2                 53:'query'          	;4	<<77
81  51   SEND_VAL_EX/116           ?80       55:'UPDATE `servers` SET `connections` = ?, `users` = ? WHERE `id` = ?;' ?1                  	;0
82  51   MUL/3                     #68=      16?13                56:2                	;0
83  51   FETCH_DIM_FUNC_ARG/93     $69=      16?11                #68                 	;2
84  51   SEND_VAR_EX/66            ?96       $69                  ?2                  	;0
85  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'count'          	;1
86  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'array_unique'   	;1
87  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'array_values'   	;1
88  51   MUL/3                     #70=      16?13                63:2                	;0
89  51   ADD/1                     #71=      #70                  64:1                	;0
90  51   FETCH_DIM_FUNC_ARG/93     $72=      16?11                #71                 	;1
91  51   SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
92  51   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
93  51   SEND_VAR_NO_REF_EX/50     ?80       $73                  ?1                  	;0
94  51   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
95  51   SEND_VAR_NO_REF_EX/50     ?80       $74                  ?1                  	;0
96  51   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
97  51   SEND_VAR_NO_REF_EX/50     ?112      $75                  ?3                  	;0
98  51   SEND_VAR_EX/66            ?128      16?14                ?4                  	;0
99  51   DO_FCALL/60               ?43       ?0                   ?0                  	;0
100 52   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'array_merge'    	;2
101 52   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'array_values'   	;1
102 52   MUL/3                     #77=      16?13                69:2                	;0
103 52   ADD/1                     #78=      #77                  70:1                	;0
104 52   FETCH_DIM_FUNC_ARG/93     $79=      16?11                #78                 	;1
105 52   SEND_VAR_EX/66            ?80       $79                  ?1                  	;0
106 52   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
107 52   SEND_VAR_NO_REF_EX/50     ?80       $80                  ?1                  	;0
108 52   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
109 52   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
110 52   ASSIGN/38                 ?49       16?9                 $81                 	;0
111 53   POST_INC/36               #83=      16?13                ?0                  	;0
112 53   FREE/70                   ?0        #83                  ?0                  	;0
113 55   JMP/42                    ?0        ?72                  ?0                  	;0	>>72
114 55   FE_FREE/127               ?0        $63                  ?0                  	;0	<<71
115 58   GOTO/253                  ?0        ?42                  ?71                 	;0
116 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'explode'        	;2
117 60   SEND_VAL_EX/116           ?80       74:' '               ?1                  	;0
118 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'trim'           	;1
119 60   FETCH_DIM_FUNC_ARG/93     $84=      16?15                77:2                	;1
120 60   SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
121 60   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
122 60   SEND_VAR_NO_REF_EX/50     ?96       $85                  ?2                  	;0
123 60   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
124 60   FETCH_LIST/98             $87=      $86                  78:0                	;0
125 60   ASSIGN/38                 ?55       16?16                $87                 	;0
126 60   FETCH_LIST/98             $89=      $86                  79:1                	;0
127 60   ASSIGN/38                 ?57       16?17                $89                 	;0
128 60   FETCH_LIST/98             $91=      $86                  80:2                	;0
129 60   ASSIGN/38                 ?59       16?18                $91                 	;0
130 60   FREE/70                   ?0        $86                  ?0                  	;0
131 61   JMPZ/43                   ?0        16?20                ?145                	;0	>>145
132 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'intval'         	;1
133 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'floatval'       	;1
134 61   SUB/2                     #93=      16?18                16?20               	;0
135 61   SEND_VAL_EX/116           ?80       #93                  ?1                  	;0
136 61   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
137 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'time'           	;0
138 61   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
139 61   SUB/2                     #96=      $95                  16?21               	;0
140 61   DIV/4                     #97=      $94                  #96                 	;0
141 61   SEND_VAL_EX/116           ?80       #97                  ?1                  	;0
142 61   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
143 61   QM_ASSIGN/22              #99=      $98                  ?0                  	;0
144 61   JMP/42                    ?0        ?146                 ?0                  	;0	>>146
145 61   QM_ASSIGN/22              #99=      87:0                 ?0                  	;0	<<131
146 61   ASSIGN/38                 ?67       16?19                #99                 	;0	<<144
147 62   ASSIGN/38                 ?68       16?20                16?18               	;0
148 63   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'time'           	;0
149 63   DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
150 63   ASSIGN/38                 ?70       16?21                $102                	;0
151 64   INIT_STATIC_METHOD_CALL/113 ?0        90:'XUI'             92:'aFF015c358EB0964'	;0
152 64   DO_FCALL/60               $104=     ?0                   ?0                  	;0
153 64   ASSIGN/38                 ?72       16?8                 $104                	;0
154 65   GOTO/253                  ?0        ?218                 ?94                 	;0
155 67   INIT_STATIC_METHOD_CALL/113 ?0        95:'XUI'             97:'f79F5d7aFa165cBD'	;1
156 67   SEND_VAL_EX/116           ?80       99:true              ?1                  	;0
157 67   DO_FCALL/60               ?73       ?0                   ?0                  	;0
158 68   INIT_STATIC_METHOD_CALL/113 ?0        100:'XUI'            102:'f79F5D7aFa165Cbd'	;1
159 68   SEND_VAL_EX/116           ?80       104:false            ?1                  	;0
160 68   DO_FCALL/60               ?74       ?0                   ?0                  	;0
161 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'time'          	;0
162 69   DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
163 69   ASSIGN/38                 ?76       16?22                $108                	;0
164 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'explode'       	;2
165 71   SEND_VAL_EX/116           ?80       109:'
'              ?1                  	;0
166 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'file_get_contents'	;1
167 71   FETCH_CONSTANT/99         #111=     ?0                   115:'SERVER_ID'     	;16
168 71   FETCH_STATIC_PROP_R/173   $110=     112:'rServers'       113:'XUI'           	;0
169 71   FETCH_DIM_R/81            $112=     $110                 #111                	;0
170 71   FETCH_DIM_R/81            $113=     $112                 118:'http_broadcast_port'	;0
171 71   CONCAT/8                  #114=     119:'http://127.0.0.1:' $113                	;0
172 71   CONCAT/8                  #115=     #114                 120:'/nginx_status' 	;0
173 71   SEND_VAL_EX/116           ?80       #115                 ?1                  	;0
174 71   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
175 71   SEND_VAR_NO_REF_EX/50     ?96       $116                 ?2                  	;0
176 71   DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
177 71   ASSIGN/38                 ?85       16?15                $117                	;0
178 72   GOTO/253                  ?0        ?116                 ?121                	;0
179 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'is_object'     	;1
180 75   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
181 75   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
182 75   BOOL_NOT/13               #120=     $119                 ?0                  	;0
183 75   JMPZ/43                   ?0        #120                 ?185                	;0	>>185
184 76   GOTO/253                  ?0        ?187                 ?124                	;0
185 78   INIT_METHOD_CALL/112      ?0        16?2                 125:'close_mysql'   	;0	<<183
186 78   DO_FCALL/60               ?88       ?0                   ?0                  	;0
187 80   GOTO/253                  ?0        ?512                 ?127                	;0
188 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'explode'       	;2
189 82   SEND_VAL_EX/116           ?80       130:' '              ?1                  	;0
190 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'preg_replace'  	;3
191 82   SEND_VAL_EX/116           ?80       133:'!cpu +!'        ?1                  	;0
192 82   SEND_VAL_EX/116           ?96       134:''               ?2                  	;0
193 82   FETCH_DIM_FUNC_ARG/93     $122=     16?24                135:0               	;3
194 82   SEND_VAR_EX/66            ?112      $122                 ?3                  	;0
195 82   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
196 82   SEND_VAR_NO_REF_EX/50     ?96       $123                 ?2                  	;0
197 82   DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
198 82   ASSIGN/38                 ?92       16?23                $124                	;0
199 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'explode'       	;2
200 83   SEND_VAL_EX/116           ?80       138:' '              ?1                  	;0
201 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'preg_replace'  	;3
202 83   SEND_VAL_EX/116           ?80       141:'!cpu +!'        ?1                  	;0
203 83   SEND_VAL_EX/116           ?96       142:''               ?2                  	;0
204 83   FETCH_DIM_FUNC_ARG/93     $126=     16?26                143:0               	;3
205 83   SEND_VAR_EX/66            ?112      $126                 ?3                  	;0
206 83   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
207 83   SEND_VAR_NO_REF_EX/50     ?96       $127                 ?2                  	;0
208 83   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
209 83   ASSIGN/38                 ?96       16?25                $128                	;0
210 84   ASSIGN/38                 ?97       16?24                16?26               	;0
211 85   ASSIGN/38                 ?98       16?3                 144:array (
)       	;0
212 86   FETCH_DIM_R/81            $133=     16?25                146:0               	;0
213 86   FETCH_DIM_R/81            $134=     16?23                147:0               	;0
214 86   SUB/2                     #135=     $133                 $134                	;0
215 86   ASSIGN_DIM/147            ?99       16?3                 145:'user'          	;0
216 86   OP_DATA/137               ?0        #135                 ?0                  	;0
217 87   GOTO/253                  ?0        ?395                 ?148                	;0
218 89   JMPZ/43                   ?0        16?24                ?220                	;0	>>220
219 90   GOTO/253                  ?0        ?227                 ?149                	;0
220 92   INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'file'          	;1	<<218
221 92   SEND_VAL_EX/116           ?80       152:'/proc/stat'     ?1                  	;0
222 92   DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
223 92   ASSIGN/38                 ?104      16?24                $136                	;0
224 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'sleep'         	;1
225 93   SEND_VAL_EX/116           ?80       155:2                ?1                  	;0
226 93   DO_FCALL_BY_NAME/131      ?105      ?0                   ?0                  	;0
227 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'file'          	;1
228 95   SEND_VAL_EX/116           ?80       158:'/proc/stat'     ?1                  	;0
229 95   DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
230 95   ASSIGN/38                 ?107      16?26                $139                	;0
231 96   GOTO/253                  ?0        ?188                 ?159                	;0
232 98   ECHO/40                   ?0        160:'File changed! Break.
' ?0                  	;0
233 99   GOTO/253                  ?0        ?179                 ?161                	;0
234 101  INIT_STATIC_METHOD_CALL/113 ?0        165:'XUI'            167:'F76008F8dFe1898C'	;1
235 101  SEND_VAL_EX/116           ?80       169:true             ?1                  	;0
236 101  DO_FCALL/60               $142=     ?0                   ?0                  	;0
237 101  FETCH_STATIC_PROP_W/174   $141=     162:'rServers'       163:'XUI'           	;0
238 101  ASSIGN/38                 ?110      $141                 $142                	;0
239 102  INIT_STATIC_METHOD_CALL/113 ?0        173:'XUI'            175:'ac49b56DBe10e52c'	;1
240 102  SEND_VAL_EX/116           ?80       177:true             ?1                  	;0
241 102  DO_FCALL/60               $145=     ?0                   ?0                  	;0
242 102  FETCH_STATIC_PROP_W/174   $144=     170:'rSettings'      171:'XUI'           	;0
243 102  ASSIGN/38                 ?113      $144                 $145                	;0
244 103  GOTO/253                  ?0        ?155                 ?178                	;0
245 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'str_replace'   	;3
246 106  SEND_VAL_EX/116           ?80       181:'\\'             ?1                  	;0
247 106  SEND_VAL_EX/116           ?96       182:'/'              ?2                  	;0
248 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'dirname'       	;1
249 106  FETCH_DIM_FUNC_ARG/93     $147=     16?27                185:0               	;1
250 106  SEND_VAR_EX/66            ?80       $147                 ?1                  	;0
251 106  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
252 106  SEND_VAR_NO_REF_EX/50     ?112      $148                 ?3                  	;0
253 106  DO_FCALL_BY_NAME/131      $149=     ?0                   ?0                  	;0
254 106  CONCAT/8                  #150=     $149                 186:'/../../www/init.php'	;0
255 106  INCLUDE_OR_EVAL/73        ?118      #150                 ?0                  	;8
256 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'shell_exec'    	;1
257 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'getmypid'      	;0
258 107  DO_FCALL_BY_NAME/131      $152=     ?0                   ?0                  	;0
259 107  CONCAT/8                  #153=     191:'kill $(ps aux | grep watchdog | grep -v grep | grep -v ' $152                	;0
260 107  CONCAT/8                  #154=     #153                 192:' | awk \'{print $2}\')'	;0
261 107  SEND_VAL_EX/116           ?80       #154                 ?1                  	;0
262 107  DO_FCALL_BY_NAME/131      ?122      ?0                   ?0                  	;0
263 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'intval'        	;1
264 108  FETCH_STATIC_PROP_FUNC_ARG/177 $156=     195:'rSettings'      196:'XUI'           	;1
265 108  FETCH_DIM_FUNC_ARG/93     $157=     $156                 198:'online_capacity_interval'	;1
266 108  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
267 108  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
268 108  JMP_SET/152               #159=     $158                 ?270                	;0
269 108  QM_ASSIGN/22              #159=     199:10               ?0                  	;0
270 108  ASSIGN/38                 ?127      16?28                #159                	;0
271 109  ASSIGN/38                 $161=     16?22                200:NULL            	;0
272 109  ASSIGN/38                 $162=     16?24                $161                	;0
273 109  ASSIGN/38                 $163=     16?21                $162                	;0
274 109  ASSIGN/38                 ?131      16?20                $163                	;0
275 110  GOTO/253                  ?0        ?491                 ?201                	;0
276 112  INIT_STATIC_METHOD_CALL/113 ?0        202:'XUI'            204:'AB992B2373F7beCA'	;0
277 112  DO_FCALL/60               $165=     ?0                   ?0                  	;0
278 112  JMPZ/43                   ?0        $165                 ?280                	;0	>>280
279 113  GOTO/253                  ?0        ?282                 ?206                	;0
280 115  ECHO/40                   ?0        207:'Not running! Break.
' ?0                  	;0	<<278
281 116  GOTO/253                  ?0        ?179                 ?208                	;0
282 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'md5_file'      	;1
283 118  SEND_VAL_EX/116           ?80       211:'includes\\cli\\watchdog.php' ?1                  	;0
284 118  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
285 118  IS_NOT_EQUAL/18           #167=     $166                 16?29               	;0
286 118  BOOL_NOT/13               #168=     #167                 ?0                  	;0
287 118  JMPZ/43                   ?0        #168                 ?289                	;0	>>289
288 119  GOTO/253                  ?0        ?234                 ?212                	;0
289 121  GOTO/253                  ?0        ?232                 ?213                	;0	<<287
290 123  INIT_METHOD_CALL/112      ?0        16?2                 214:'query'         	;2
291 123  SEND_VAL_EX/116           ?80       216:'SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0 AND `server_id` = ?;' ?1                  	;0
292 123  FETCH_CONSTANT/99         #169=     ?0                   217:'SERVER_ID'     	;16
293 123  SEND_VAL_EX/116           ?96       #169                 ?2                  	;0
294 123  DO_FCALL/60               ?137      ?0                   ?0                  	;0
295 124  INIT_METHOD_CALL/112      ?0        16?2                 220:'get_row'       	;0
296 124  DO_FCALL/60               $171=     ?0                   ?0                  	;0
297 124  FETCH_DIM_R/81            $172=     $171                 222:'count'         	;0
298 124  ASSIGN/38                 ?140      16?30                $172                	;0
299 125  INIT_METHOD_CALL/112      ?0        16?2                 223:'query'         	;2
300 125  SEND_VAL_EX/116           ?80       225:'SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 AND `server_id` = ? GROUP BY `user_id`;' ?1                  	;0
301 125  FETCH_CONSTANT/99         #174=     ?0                   226:'SERVER_ID'     	;16
302 125  SEND_VAL_EX/116           ?96       #174                 ?2                  	;0
303 125  DO_FCALL/60               ?142      ?0                   ?0                  	;0
304 126  INIT_METHOD_CALL/112      ?0        16?2                 229:'num_rows'      	;0
305 126  DO_FCALL/60               $176=     ?0                   ?0                  	;0
306 126  ASSIGN/38                 ?144      16?31                $176                	;0
307 127  INIT_METHOD_CALL/112      ?0        16?2                 231:'query'         	;7
308 127  SEND_VAL_EX/116           ?80       233:'UPDATE `servers` SET `watchdog_data` = ?, `last_check_ago` = UNIX_TIMESTAMP(), `requests_per_second` = ?, `php_pids` = ?, `connections` = ?, `users` = ? WHERE `id` = ?;' ?1                  	;0
309 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'json_encode'   	;2
310 127  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
311 127  FETCH_CONSTANT/99         #178=     ?0                   236:'JSON_PARTIAL_OUTPUT_ON_ERROR'	;16
312 127  SEND_VAL_EX/116           ?96       #178                 ?2                  	;0
313 127  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
314 127  SEND_VAR_NO_REF_EX/50     ?96       $179                 ?2                  	;0
315 127  SEND_VAR_EX/66            ?112      16?19                ?3                  	;0
316 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'json_encode'   	;1
317 127  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
318 127  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
319 127  SEND_VAR_NO_REF_EX/50     ?128      $180                 ?4                  	;0
320 127  SEND_VAR_EX/66            ?144      16?30                ?5                  	;0
321 127  SEND_VAR_EX/66            ?160      16?31                ?6                  	;0
322 127  FETCH_CONSTANT/99         #181=     ?0                   241:'SERVER_ID'     	;16
323 127  SEND_VAL_EX/116           ?176      #181                 ?7                  	;0
324 127  DO_FCALL/60               $182=     ?0                   ?0                  	;0
325 127  ASSIGN/38                 ?150      16?10                $182                	;0
326 128  GOTO/253                  ?0        ?57                  ?244                	;0
327 130  GOTO/253                  ?0        ?52                  ?245                	;0
328 132  FETCH_STATIC_PROP_R/173   $184=     246:'redis'          247:'XUI'           	;0
329 132  INIT_METHOD_CALL/112      ?0        $184                 249:'multi'         	;0
330 132  DO_FCALL/60               $185=     ?0                   ?0                  	;0
331 132  ASSIGN/38                 ?153      16?12                $185                	;0
332 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   251:'array_keys'    	;1
333 133  FETCH_STATIC_PROP_FUNC_ARG/177 $187=     253:'rServers'       254:'XUI'           	;1
334 133  SEND_VAR_EX/66            ?80       $187                 ?1                  	;0
335 133  DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
336 133  FE_RESET_R/77             $189=     $188                 ?357                	;0
337 133  FE_FETCH_R/78             ?0        $189                 16?14               	;357	>>357	<<356
338 134  FETCH_STATIC_PROP_R/173   $190=     256:'rServers'       257:'XUI'           	;0
339 134  FETCH_DIM_R/81            $191=     $190                 16?14               	;0
340 134  FETCH_DIM_R/81            $192=     $191                 259:'server_online' 	;0
341 134  BOOL_NOT/13               #193=     $192                 ?0                  	;0
342 134  JMPZ/43                   ?0        #193                 ?345                	;0	>>345
343 135  NOP/0                     ?0        ?0                   ?0                  	;1
344 135  GOTO/253                  ?0        ?356                 ?260                	;0
345 137  INIT_METHOD_CALL/112      ?0        16?12                261:'zCard'         	;1	<<342
346 137  CONCAT/8                  #194=     263:'SERVER#'        16?14               	;0
347 137  SEND_VAL_EX/116           ?80       #194                 ?1                  	;0
348 137  DO_FCALL/60               ?162      ?0                   ?0                  	;0
349 138  INIT_METHOD_CALL/112      ?0        16?12                264:'zRangeByScore' 	;4
350 138  CONCAT/8                  #196=     266:'SERVER_LINES#'  16?14               	;0
351 138  SEND_VAL_EX/116           ?80       #196                 ?1                  	;0
352 138  SEND_VAL_EX/116           ?96       267:'-inf'           ?2                  	;0
353 138  SEND_VAL_EX/116           ?112      268:'+inf'           ?3                  	;0
354 138  SEND_VAL_EX/116           ?128      269:array (
  'withscores' => true,
) ?4                  	;0
355 138  DO_FCALL/60               ?164      ?0                   ?0                  	;0
356 140  JMP/42                    ?0        ?337                 ?0                  	;0	>>337
357 140  FE_FREE/127               ?0        $189                 ?0                  	;0	<<336
358 143  GOTO/253                  ?0        ?62                  ?270                	;0
359 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'array_slice'   	;3
360 145  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
361 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'count'         	;1
362 145  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
363 145  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
364 145  SUB/2                     #199=     $198                 275:30              	;0
365 145  SEND_VAL_EX/116           ?96       #199                 ?2                  	;0
366 145  SEND_VAL_EX/116           ?112      276:30               ?3                  	;0
367 145  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
368 145  ASSIGN/38                 ?168      16?0                 $200                	;0
369 147  ASSIGN_DIM/147            ?169      16?8                 277:'cpu_average_array'	;0
370 147  OP_DATA/137               ?0        16?0                 ?0                  	;0
371 148  ASSIGN/38                 ?170      16?32                278:array (
)       	;0
372 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'exec'          	;2
373 149  SEND_VAL_EX/116           ?80       281:'ps -u xui | grep php-fpm | awk {\'print $1\'}' ?1                  	;0
374 149  SEND_VAR_EX/66            ?96       16?32                ?2                  	;0
375 149  DO_FCALL_BY_NAME/131      ?171      ?0                   ?0                  	;0
376 150  GOTO/253                  ?0        ?443                 ?282                	;0
377 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'posix_getpwuid'	;1	<<0
378 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'posix_geteuid' 	;0
379 152  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
380 152  SEND_VAR_NO_REF_EX/50     ?80       $205                 ?1                  	;0
381 152  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
382 152  FETCH_DIM_R/81            $207=     $206                 287:'name'          	;0
383 152  IS_NOT_EQUAL/18           #208=     $207                 288:'xui'           	;0
384 152  BOOL_NOT/13               #209=     #208                 ?0                  	;0
385 152  JMPZ/43                   ?0        #209                 ?387                	;0	>>387
386 153  GOTO/253                  ?0        ?388                 ?289                	;0
387 155  EXIT/79                   ?0        290:'Please run as XUI!
' ?0                  	;0	<<385
388 157  BEGIN_SILENCE/57          #210=     ?0                   ?0                  	;0
389 157  FETCH_R/80                $211=     291:'argc'           ?0                  	;268435456
390 157  END_SILENCE/58            ?0        #210                 ?0                  	;0
391 157  JMPZ/43                   ?0        $211                 ?393                	;0	>>393
392 158  GOTO/253                  ?0        ?245                 ?292                	;0
393 160  EXIT/79                   ?0        293:0                ?0                  	;0	<<391
394 161  GOTO/253                  ?0        ?245                 ?294                	;0
395 163  FETCH_DIM_R/81            $213=     16?25                296:1               	;0
396 163  FETCH_DIM_R/81            $214=     16?23                297:1               	;0
397 163  SUB/2                     #215=     $213                 $214                	;0
398 163  ASSIGN_DIM/147            ?179      16?3                 295:'nice'          	;0
399 163  OP_DATA/137               ?0        #215                 ?0                  	;0
400 164  FETCH_DIM_R/81            $217=     16?25                299:2               	;0
401 164  FETCH_DIM_R/81            $218=     16?23                300:2               	;0
402 164  SUB/2                     #219=     $217                 $218                	;0
403 164  ASSIGN_DIM/147            ?183      16?3                 298:'sys'           	;0
404 164  OP_DATA/137               ?0        #219                 ?0                  	;0
405 165  FETCH_DIM_R/81            $221=     16?25                302:3               	;0
406 165  FETCH_DIM_R/81            $222=     16?23                303:3               	;0
407 165  SUB/2                     #223=     $221                 $222                	;0
408 165  ASSIGN_DIM/147            ?187      16?3                 301:'idle'          	;0
409 165  OP_DATA/137               ?0        #223                 ?0                  	;0
410 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'array_sum'     	;1
411 166  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
412 166  DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
413 166  ASSIGN/38                 ?192      16?7                 $224                	;0
414 167  ASSIGN/38                 ?193      16?6                 306:array (
)       	;0
415 168  GOTO/253                  ?0        ?13                  ?307                	;0
416 171  FETCH_STATIC_PROP_R/173   $227=     308:'rSettings'      309:'XUI'           	;0
417 171  FETCH_DIM_R/81            $228=     $227                 311:'redis_handler' 	;0
418 171  JMPZ_EX/46                #229=     $228                 ?428                	;0	>>428
419 171  FETCH_STATIC_PROP_R/173   $230=     312:'redis'          313:'XUI'           	;0
420 171  BOOL_NOT/13               #231=     $230                 ?0                  	;0
421 171  JMPNZ_EX/47               #231=     #231                 ?427                	;0	>>427
422 171  FETCH_STATIC_PROP_R/173   $232=     315:'redis'          316:'XUI'           	;0
423 171  INIT_METHOD_CALL/112      ?0        $232                 318:'ping'          	;0
424 171  DO_FCALL/60               $233=     ?0                   ?0                  	;0
425 171  BOOL_NOT/13               #234=     $233                 ?0                  	;0
426 171  BOOL/52                   #231=     #234                 ?0                  	;0
427 171  BOOL/52                   #229=     #231                 ?0                  	;0	<<421
428 171  BOOL_NOT/13               #235=     #229                 ?0                  	;0	<<418
429 171  JMPZ/43                   ?0        #235                 ?431                	;0	>>431
430 172  GOTO/253                  ?0        ?432                 ?320                	;0
431 174  GOTO/253                  ?0        ?179                 ?321                	;0	<<429
432 176  BOOL_NOT/13               #236=     16?22                ?0                  	;0
433 176  JMPNZ_EX/47               #236=     #236                 ?439                	;0	>>439
434 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'time'          	;0
435 176  DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
436 176  SUB/2                     #238=     $237                 16?22               	;0
437 176  IS_SMALLER_OR_EQUAL/20    #239=     16?28                #238                	;0
438 176  BOOL/52                   #236=     #239                 ?0                  	;0
439 176  BOOL_NOT/13               #240=     #236                 ?0                  	;0	<<433
440 176  JMPZ/43                   ?0        #240                 ?442                	;0	>>442
441 177  GOTO/253                  ?0        ?164                 ?324                	;0
442 179  GOTO/253                  ?0        ?276                 ?325                	;0	<<440
443 181  ASSIGN/38                 $241=     16?31                326:0               	;0
444 181  ASSIGN/38                 ?209      16?30                $241                	;0
445 182  FETCH_STATIC_PROP_R/173   $243=     327:'rSettings'      328:'XUI'           	;0
446 182  FETCH_DIM_R/81            $244=     $243                 330:'redis_handler' 	;0
447 182  BOOL_NOT/13               #245=     $244                 ?0                  	;0
448 182  JMPZ/43                   ?0        #245                 ?450                	;0	>>450
449 183  GOTO/253                  ?0        ?468                 ?331                	;0
450 185  INIT_METHOD_CALL/112      ?0        16?2                 332:'query'         	;5	<<448
451 185  SEND_VAL_EX/116           ?80       334:'UPDATE `servers` SET `watchdog_data` = ?, `last_check_ago` = UNIX_TIMESTAMP(), `requests_per_second` = ?, `php_pids` = ? WHERE `id` = ?;' ?1                  	;0
452 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'json_encode'   	;2
453 185  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
454 185  FETCH_CONSTANT/99         #246=     ?0                   337:'JSON_PARTIAL_OUTPUT_ON_ERROR'	;16
455 185  SEND_VAL_EX/116           ?96       #246                 ?2                  	;0
456 185  DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
457 185  SEND_VAR_NO_REF_EX/50     ?96       $247                 ?2                  	;0
458 185  SEND_VAR_EX/66            ?112      16?19                ?3                  	;0
459 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   340:'json_encode'   	;1
460 185  SEND_VAR_EX/66            ?80       16?32                ?1                  	;0
461 185  DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
462 185  SEND_VAR_NO_REF_EX/50     ?128      $248                 ?4                  	;0
463 185  FETCH_CONSTANT/99         #249=     ?0                   342:'SERVER_ID'     	;16
464 185  SEND_VAL_EX/116           ?144      #249                 ?5                  	;0
465 185  DO_FCALL/60               $250=     ?0                   ?0                  	;0
466 185  ASSIGN/38                 ?218      16?10                $250                	;0
467 186  GOTO/253                  ?0        ?57                  ?345                	;0
468 188  GOTO/253                  ?0        ?290                 ?346                	;0
469 190  FETCH_CONSTANT/99         #253=     ?0                   350:'SERVER_ID'     	;16
470 190  FETCH_STATIC_PROP_R/173   $252=     347:'rServers'       348:'XUI'           	;0
471 190  FETCH_DIM_R/81            $254=     $252                 #253                	;0
472 190  FETCH_DIM_R/81            $255=     $254                 353:'is_main'       	;0
473 190  BOOL_NOT/13               #256=     $255                 ?0                  	;0
474 190  JMPZ/43                   ?0        #256                 ?476                	;0	>>476
475 191  GOTO/253                  ?0        ?52                  ?354                	;0
476 193  FETCH_STATIC_PROP_R/173   $257=     355:'rSettings'      356:'XUI'           	;0	<<474
477 193  FETCH_DIM_R/81            $258=     $257                 358:'redis_handler' 	;0
478 193  JMPZ/43                   ?0        $258                 ?480                	;0	>>480
479 194  GOTO/253                  ?0        ?328                 ?359                	;0
480 196  INIT_METHOD_CALL/112      ?0        16?2                 360:'query'         	;1	<<478
481 196  SEND_VAL_EX/116           ?80       362:'SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;' ?1                  	;0
482 196  DO_FCALL/60               ?226      ?0                   ?0                  	;0
483 197  INIT_METHOD_CALL/112      ?0        16?2                 363:'num_rows'      	;0
484 197  DO_FCALL/60               $260=     ?0                   ?0                  	;0
485 197  ASSIGN/38                 ?228      16?9                 $260                	;0
486 198  INIT_METHOD_CALL/112      ?0        16?2                 365:'query'         	;2
487 198  SEND_VAL_EX/116           ?80       367:'UPDATE `settings` SET `total_users` = ?;' ?1                  	;0
488 198  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
489 198  DO_FCALL/60               ?229      ?0                   ?0                  	;0
490 199  GOTO/253                  ?0        ?327                 ?368                	;0
491 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   369:'md5_file'      	;1
492 201  SEND_VAL_EX/116           ?80       371:'includes\\cli\\watchdog.php' ?1                  	;0
493 201  DO_FCALL_BY_NAME/131      $263=     ?0                   ?0                  	;0
494 201  ASSIGN/38                 ?231      16?29                $263                	;0
495 202  FETCH_STATIC_PROP_R/173   $265=     372:'rSettings'      373:'XUI'           	;0
496 202  FETCH_DIM_R/81            $266=     $265                 375:'redis_handler' 	;0
497 202  BOOL_NOT/13               #267=     $266                 ?0                  	;0
498 202  JMPZ/43                   ?0        #267                 ?500                	;0	>>500
499 203  GOTO/253                  ?0        ?502                 ?376                	;0
500 205  INIT_STATIC_METHOD_CALL/113 ?0        377:'XUI'            379:'d6aEb3175A43f301'	;0	<<498
501 205  DO_FCALL/60               ?235      ?0                   ?0                  	;0
502 207  INIT_FCALL_BY_NAME/59     ?0        ?0                   381:'json_decode'   	;2
503 207  FETCH_CONSTANT/99         #270=     ?0                   386:'SERVER_ID'     	;16
504 207  FETCH_STATIC_PROP_FUNC_ARG/177 $269=     383:'rServers'       384:'XUI'           	;1
505 207  FETCH_DIM_FUNC_ARG/93     $271=     $269                 #270                	;1
506 207  FETCH_DIM_FUNC_ARG/93     $272=     $271                 389:'watchdog_data' 	;1
507 207  SEND_VAR_EX/66            ?80       $272                 ?1                  	;0
508 207  SEND_VAL_EX/116           ?96       390:true             ?2                  	;0
509 207  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
510 207  ASSIGN/38                 ?241      16?1                 $273                	;0
511 208  GOTO/253                  ?0        ?1                   ?391                	;0
512 210  INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'shell_exec'    	;1
513 210  FETCH_CONSTANT/99         #275=     ?0                   394:'PHP_BIN'       	;16
514 210  CONCAT/8                  #276=     397:'(sleep 1; '     #275                	;0
515 210  CONCAT/8                  #277=     #276                 398:' '             	;0
516 210  CONCAT/8                  #278=     #277                 399:'includes\\cli\\watchdog.php'	;0
517 210  CONCAT/8                  #279=     #278                 400:' ) > /dev/null 2>/dev/null &'	;0
518 210  SEND_VAL_EX/116           ?80       #279                 ?1                  	;0
519 210  DO_FCALL_BY_NAME/131      ?247      ?0                   ?0                  	;0
520 211  NOP/0                     ?0        401:1                ?0                  	;4294967295
*/

?>