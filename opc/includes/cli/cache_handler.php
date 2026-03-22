<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?46                  ?0                  	;0	>>46
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'set_time_limit'  	;1
2   6    SEND_VAL_EX/116           ?80       3:0                  ?1                  	;0
3   6    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'getmypid'        	;0
5   7    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
6   7    ASSIGN/38                 ?2        16?0                 $18                 	;0
7   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'str_replace'     	;3
8   8    SEND_VAL_EX/116           ?80       8:'\\'               ?1                  	;0
9   8    SEND_VAL_EX/116           ?96       9:'/'                ?2                  	;0
10  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'dirname'        	;1
11  8    FETCH_DIM_FUNC_ARG/93     $20=      16?1                 12:0                	;1
12  8    SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
13  8    DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
14  8    SEND_VAR_NO_REF_EX/50     ?112      $21                  ?3                  	;0
15  8    DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
16  8    CONCAT/8                  #23=      $22                  13:'/../../www/init.php'	;0
17  8    INCLUDE_OR_EVAL/73        ?7        #23                  ?0                  	;8
18  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'shell_exec'     	;1
19  9    CONCAT/8                  #25=      16:'kill -9 $(ps aux | grep cache_handler | grep -v grep | grep -v ' 16?0                	;0
20  9    CONCAT/8                  #26=      #25                  17:' | awk \'{print $2}\')'	;0
21  9    SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
22  9    DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
23  10   GOTO/253                  ?0        ?24                  ?18                 	;0
24  12   ASSIGN/38                 ?11       16?2                 19:NULL             	;0
25  13   ASSIGN/38                 ?12       16?3                 20:60               	;0
26  14   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'md5_file'       	;1
27  14   SEND_VAL_EX/116           ?80       23:'includes\\cli\\cache_handler.php' ?1                  	;0
28  14   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
29  14   ASSIGN/38                 ?14       16?4                 $30                 	;0
30  15   INIT_STATIC_METHOD_CALL/113 ?0        27:'XUI'             29:'AC49B56dbE10E52c'	;1
31  15   SEND_VAL_EX/116           ?80       31:true              ?1                  	;0
32  15   DO_FCALL/60               $33=      ?0                   ?0                  	;0
33  15   FETCH_STATIC_PROP_W/174   $32=      24:'rSettings'       25:'XUI'            	;0
34  15   ASSIGN/38                 ?17       $32                  $33                 	;0
35  16   FETCH_STATIC_PROP_R/173   $35=      32:'rSettings'       33:'XUI'            	;0
36  16   FETCH_DIM_R/81            $36=      $35                  35:'enable_cache'   	;0
37  16   JMPZ/43                   ?0        $36                  ?39                 	;0	>>39
38  17   GOTO/253                  ?0        ?42                  ?36                 	;0
39  19   GOTO/253                  ?0        ?40                  ?37                 	;0	<<37
40  21   ECHO/40                   ?0        38:'Cache disabled.
' ?0                  	;0
41  22   EXIT/79                   ?0        ?0                   ?0                  	;0
42  25   JMPZ/43                   ?0        39:false             ?44                 	;0	>>44
43  26   GOTO/253                  ?0        ?325                 ?40                 	;0
44  28   GOTO/253                  ?0        ?64                  ?41                 	;0	<<42
45  31   GOTO/253                  ?0        ?334                 ?42                 	;0
46  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'posix_getpwuid' 	;1	<<0
47  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'posix_geteuid'  	;0
48  33   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
49  33   SEND_VAR_NO_REF_EX/50     ?80       $37                  ?1                  	;0
50  33   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
51  33   FETCH_DIM_R/81            $39=      $38                  47:'name'           	;0
52  33   IS_NOT_EQUAL/18           #40=      $39                  48:'xui'            	;0
53  33   BOOL_NOT/13               #41=      #40                  ?0                  	;0
54  33   JMPZ/43                   ?0        #41                  ?56                 	;0	>>56
55  34   GOTO/253                  ?0        ?57                  ?49                 	;0
56  36   EXIT/79                   ?0        50:'Please run as XUI!
' ?0                  	;0	<<54
57  38   BEGIN_SILENCE/57          #42=      ?0                   ?0                  	;0
58  38   FETCH_R/80                $43=      51:'argc'            ?0                  	;268435456
59  38   END_SILENCE/58            ?0        #42                  ?0                  	;0
60  38   JMPZ/43                   ?0        $43                  ?62                 	;0	>>62
61  39   GOTO/253                  ?0        ?1                   ?52                 	;0
62  41   EXIT/79                   ?0        53:0                 ?0                  	;0	<<60
63  42   GOTO/253                  ?0        ?1                   ?54                 	;0
64  44   NOP/0                     ?0        ?0                   ?0                  	;0
65  45   GOTO/253                  ?0        ?66                  ?55                 	;0	<<321
66  47   INIT_METHOD_CALL/112      ?0        16?5                 56:'ping'           	;0
67  47   DO_FCALL/60               $44=      ?0                   ?0                  	;0
68  47   JMPZ/43                   ?0        $44                  ?70                 	;0	>>70
69  48   GOTO/253                  ?0        ?71                  ?58                 	;0
70  50   GOTO/253                  ?0        ?325                 ?59                 	;0	<<68
71  52   BOOL_NOT/13               #45=      16?2                 ?0                  	;0
72  52   JMPNZ_EX/47               #45=      #45                  ?78                 	;0	>>78
73  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'time'           	;0
74  52   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
75  52   SUB/2                     #47=      $46                  16?2                	;0
76  52   IS_SMALLER_OR_EQUAL/20    #48=      16?3                 #47                 	;0
77  52   BOOL/52                   #45=      #48                  ?0                  	;0
78  52   BOOL_NOT/13               #49=      #45                  ?0                  	;0	<<72
79  52   JMPZ/43                   ?0        #49                  ?81                 	;0	>>81
80  53   GOTO/253                  ?0        ?112                 ?62                 	;0
81  55   INIT_STATIC_METHOD_CALL/113 ?0        66:'XUI'             68:'ac49b56DBe10E52C'	;1	<<79
82  55   SEND_VAL_EX/116           ?80       70:true              ?1                  	;0
83  55   DO_FCALL/60               $51=      ?0                   ?0                  	;0
84  55   FETCH_STATIC_PROP_W/174   $50=      63:'rSettings'       64:'XUI'            	;0
85  55   ASSIGN/38                 ?35       $50                  $51                 	;0
86  56   GOTO/253                  ?0        ?100                 ?71                 	;0
87  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'md5_file'       	;1
88  58   SEND_VAL_EX/116           ?80       74:'includes\\cli\\cache_handler.php' ?1                  	;0
89  58   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
90  58   IS_NOT_EQUAL/18           #54=      $53                  16?4                	;0
91  58   BOOL_NOT/13               #55=      #54                  ?0                  	;0
92  58   JMPZ/43                   ?0        #55                  ?94                 	;0	>>94
93  59   GOTO/253                  ?0        ?96                  ?75                 	;0
94  61   ECHO/40                   ?0        76:'File changed! Break.
' ?0                  	;0	<<92
95  62   GOTO/253                  ?0        ?325                 ?77                 	;0
96  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'time'           	;0
97  64   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
98  64   ASSIGN/38                 ?40       16?2                 $56                 	;0
99  65   GOTO/253                  ?0        ?112                 ?80                 	;0
100 67   INIT_STATIC_METHOD_CALL/113 ?0        84:'XUI'             86:'f76008F8DfE1898C'	;1
101 67   SEND_VAL_EX/116           ?80       88:true              ?1                  	;0
102 67   DO_FCALL/60               $59=      ?0                   ?0                  	;0
103 67   FETCH_STATIC_PROP_W/174   $58=      81:'rServers'        82:'XUI'            	;0
104 67   ASSIGN/38                 ?43       $58                  $59                 	;0
105 68   FETCH_STATIC_PROP_R/173   $61=      89:'rSettings'       90:'XUI'            	;0
106 68   FETCH_DIM_R/81            $62=      $61                  92:'enable_cache'   	;0
107 68   JMPZ/43                   ?0        $62                  ?109                	;0	>>109
108 69   GOTO/253                  ?0        ?111                 ?93                 	;0
109 71   ECHO/40                   ?0        94:'Cache disabled! Break.
' ?0                  	;0	<<107
110 72   GOTO/253                  ?0        ?325                 ?95                 	;0
111 74   GOTO/253                  ?0        ?87                  ?96                 	;0
112 77   ASSIGN/38                 ?46       16?6                 97:array (
)        	;0
113 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'glob'           	;1
114 78   FETCH_CONSTANT/99         #64=      ?0                   100:'SIGNALS_TMP_PATH'	;16
115 78   CONCAT/8                  #65=      #64                  103:'cache_*'       	;0
116 78   SEND_VAL_EX/116           ?80       #65                  ?1                  	;0
117 78   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
118 78   FE_RESET_R/77             $67=      $66                  ?303                	;0
119 78   FE_FETCH_R/78             ?0        $67                  16?7                	;303	>>303	<<302
120 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'json_decode'   	;2
121 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'file_get_contents'	;1
122 79   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
123 79   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
124 79   SEND_VAR_NO_REF_EX/50     ?80       $68                  ?1                  	;0
125 79   SEND_VAL_EX/116           ?96       108:true             ?2                  	;0
126 79   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
127 79   FETCH_LIST/98             $70=      $69                  109:0               	;0
128 79   ASSIGN/38                 ?54       16?8                 $70                 	;0
129 79   FETCH_LIST/98             $72=      $69                  110:1               	;0
130 79   ASSIGN/38                 ?56       16?9                 $72                 	;0
131 79   FREE/70                   ?0        $69                  ?0                  	;0
132 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'explode'       	;2
133 80   SEND_VAL_EX/116           ?80       113:'/'              ?1                  	;0
134 80   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
135 80   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
136 80   FETCH_DIM_R/81            $75=      $74                  114:0               	;0
137 80   ASSIGN/38                 ?59       16?10                $75                 	;0
138 81   SWITCH_STRING/188         ?0        16?10                115:array (
  'restream_block_user' => 152,
  'forced_country' => 182,
  'isp' => 201,
  'expiring' => 228,
  'flood_attack' => 249,
  'bruteforce_attack' => 274,
)	;299
139 82   CASE/48                   #77=      16?10                116:'restream_block_user'	;0	>>141
140 82   JMPNZ/44                  ?0        #77                  ?152                	;0	>>152
141 88   CASE/48                   #77=      16?10                117:'forced_country'	;0	>>143	<<139
142 88   JMPNZ/44                  ?0        #77                  ?182                	;0	>>182
143 93   CASE/48                   #77=      16?10                118:'isp'           	;0	>>145	<<141
144 93   JMPNZ/44                  ?0        #77                  ?201                	;0	>>201
145 99   CASE/48                   #77=      16?10                119:'expiring'      	;0	>>147	<<143
146 99   JMPNZ/44                  ?0        #77                  ?228                	;0	>>228
147 104  CASE/48                   #77=      16?10                120:'flood_attack'  	;0	>>149	<<145
148 104  JMPNZ/44                  ?0        #77                  ?249                	;0	>>249
149 109  CASE/48                   #77=      16?10                121:'bruteforce_attack'	;0	>>151	<<147
150 109  JMPNZ/44                  ?0        #77                  ?274                	;0	>>274
151 109  JMP/42                    ?0        ?299                 ?0                  	;0	>>299	<<149
152 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'explode'       	;2	<<140
153 83   SEND_VAL_EX/116           ?80       124:'/'              ?1                  	;0
154 83   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
155 83   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
156 83   FETCH_LIST/98             $79=      $78                  125:0               	;0
157 83   ASSIGN/38                 ?63       16?11                $79                 	;0
158 83   FETCH_LIST/98             $81=      $78                  126:1               	;0
159 83   ASSIGN/38                 ?65       16?12                $81                 	;0
160 83   FETCH_LIST/98             $83=      $78                  127:2               	;0
161 83   ASSIGN/38                 ?67       16?13                $83                 	;0
162 83   FETCH_LIST/98             $85=      $78                  128:3               	;0
163 83   ASSIGN/38                 ?69       16?14                $85                 	;0
164 83   FREE/70                   ?0        $78                  ?0                  	;0
165 84   INIT_METHOD_CALL/112      ?0        16?5                 129:'query'         	;2
166 84   SEND_VAL_EX/116           ?80       131:'UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;' ?1                  	;0
167 84   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
168 84   DO_FCALL/60               ?70       ?0                   ?0                  	;0
169 85   INIT_METHOD_CALL/112      ?0        16?5                 132:'query'         	;5
170 85   SEND_VAL_EX/116           ?80       134:'INSERT INTO `detect_restream_logs`(`user_id`, `stream_id`, `ip`, `time`) VALUES(?, ?, ?, ?);' ?1                  	;0
171 85   SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
172 85   SEND_VAR_EX/66            ?112      16?13                ?3                  	;0
173 85   SEND_VAR_EX/66            ?128      16?14                ?4                  	;0
174 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'time'          	;0
175 85   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
176 85   SEND_VAR_NO_REF_EX/50     ?144      $88                  ?5                  	;0
177 85   DO_FCALL/60               ?72       ?0                   ?0                  	;0
178 86   ASSIGN_DIM/147            ?73       16?6                 ?5126               	;0
179 86   OP_DATA/137               ?0        16?12                ?0                  	;0
180 87   NOP/0                     ?0        ?0                   ?0                  	;1
181 87   GOTO/253                  ?0        ?299                 ?137                	;0
182 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'intval'        	;1	<<142
183 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'explode'       	;2
184 89   SEND_VAL_EX/116           ?80       142:'/'              ?1                  	;0
185 89   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
186 89   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
187 89   SEPARATE/156              $91=      $91                  ?0                  	;0
188 89   FETCH_DIM_FUNC_ARG/93     $92=      $91                  143:1               	;1
189 89   SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
190 89   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
191 89   ASSIGN/38                 ?77       16?12                $93                 	;0
192 90   INIT_METHOD_CALL/112      ?0        16?5                 144:'query'         	;3
193 90   SEND_VAL_EX/116           ?80       146:'UPDATE `lines` SET `forced_country` = ? WHERE `id` = ?' ?1                  	;0
194 90   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
195 90   SEND_VAR_EX/66            ?112      16?12                ?3                  	;0
196 90   DO_FCALL/60               ?78       ?0                   ?0                  	;0
197 91   ASSIGN_DIM/147            ?79       16?6                 ?5126               	;0
198 91   OP_DATA/137               ?0        16?12                ?0                  	;0
199 92   NOP/0                     ?0        ?0                   ?0                  	;1
200 92   GOTO/253                  ?0        ?299                 ?147                	;0
201 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'intval'        	;1	<<144
202 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'explode'       	;2
203 94   SEND_VAL_EX/116           ?80       152:'/'              ?1                  	;0
204 94   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
205 94   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
206 94   SEPARATE/156              $97=      $97                  ?0                  	;0
207 94   FETCH_DIM_FUNC_ARG/93     $98=      $97                  153:1               	;1
208 94   SEND_VAR_EX/66            ?80       $98                  ?1                  	;0
209 94   DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
210 94   ASSIGN/38                 ?83       16?12                $99                 	;0
211 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'json_decode'   	;2
212 95   SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
213 95   SEND_VAL_EX/116           ?96       156:true             ?2                  	;0
214 95   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
215 95   ASSIGN/38                 ?85       16?15                $101                	;0
216 96   INIT_METHOD_CALL/112      ?0        16?5                 157:'query'         	;4
217 96   SEND_VAL_EX/116           ?80       159:'UPDATE `lines` SET `isp_desc` = ?, `as_number` = ? WHERE `id` = ?' ?1                  	;0
218 96   FETCH_DIM_FUNC_ARG/93     $103=     16?15                160:0               	;2
219 96   SEND_VAR_EX/66            ?96       $103                 ?2                  	;0
220 96   FETCH_DIM_FUNC_ARG/93     $104=     16?15                161:1               	;3
221 96   SEND_VAR_EX/66            ?112      $104                 ?3                  	;0
222 96   SEND_VAR_EX/66            ?128      16?12                ?4                  	;0
223 96   DO_FCALL/60               ?88       ?0                   ?0                  	;0
224 97   ASSIGN_DIM/147            ?89       16?6                 ?5126               	;0
225 97   OP_DATA/137               ?0        16?12                ?0                  	;0
226 98   NOP/0                     ?0        ?0                   ?0                  	;1
227 98   GOTO/253                  ?0        ?299                 ?162                	;0
228 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'intval'        	;1	<<146
229 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'explode'       	;2
230 100  SEND_VAL_EX/116           ?80       167:'/'              ?1                  	;0
231 100  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
232 100  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
233 100  SEPARATE/156              $107=     $107                 ?0                  	;0
234 100  FETCH_DIM_FUNC_ARG/93     $108=     $107                 168:1               	;1
235 100  SEND_VAR_EX/66            ?80       $108                 ?1                  	;0
236 100  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
237 100  ASSIGN/38                 ?93       16?12                $109                	;0
238 101  INIT_METHOD_CALL/112      ?0        16?5                 169:'query'         	;3
239 101  SEND_VAL_EX/116           ?80       171:'UPDATE `lines` SET `last_expiration_video` = ? WHERE `id` = ?;' ?1                  	;0
240 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'time'          	;0
241 101  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
242 101  SEND_VAR_NO_REF_EX/50     ?96       $111                 ?2                  	;0
243 101  SEND_VAR_EX/66            ?112      16?12                ?3                  	;0
244 101  DO_FCALL/60               ?95       ?0                   ?0                  	;0
245 102  ASSIGN_DIM/147            ?96       16?6                 ?5126               	;0
246 102  OP_DATA/137               ?0        16?12                ?0                  	;0
247 103  NOP/0                     ?0        ?0                   ?0                  	;1
248 103  GOTO/253                  ?0        ?299                 ?174                	;0
249 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'explode'       	;2	<<148
250 105  SEND_VAL_EX/116           ?80       177:'/'              ?1                  	;0
251 105  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
252 105  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
253 105  FETCH_LIST/98             $115=     $114                 178:0               	;0
254 105  ASSIGN/38                 ?99       16?11                $115                	;0
255 105  FETCH_LIST/98             $117=     $114                 179:1               	;0
256 105  ASSIGN/38                 ?101      16?14                $117                	;0
257 105  FREE/70                   ?0        $114                 ?0                  	;0
258 106  INIT_METHOD_CALL/112      ?0        16?5                 180:'query'         	;4
259 106  SEND_VAL_EX/116           ?80       182:'INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES(?,?,?)' ?1                  	;0
260 106  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
261 106  SEND_VAL_EX/116           ?112      183:'FLOOD ATTACK'   ?3                  	;0
262 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'time'          	;0
263 106  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
264 106  SEND_VAR_NO_REF_EX/50     ?128      $119                 ?4                  	;0
265 106  DO_FCALL/60               ?103      ?0                   ?0                  	;0
266 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'touch'         	;1
267 107  FETCH_CONSTANT/99         #121=     ?0                   188:'FLOOD_TMP_PATH'	;16
268 107  CONCAT/8                  #122=     #121                 191:'block_'        	;0
269 107  CONCAT/8                  #123=     #122                 16?14               	;0
270 107  SEND_VAL_EX/116           ?80       #123                 ?1                  	;0
271 107  DO_FCALL_BY_NAME/131      ?107      ?0                   ?0                  	;0
272 108  NOP/0                     ?0        ?0                   ?0                  	;1
273 108  GOTO/253                  ?0        ?299                 ?192                	;0
274 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'explode'       	;2	<<150
275 110  SEND_VAL_EX/116           ?80       195:'/'              ?1                  	;0
276 110  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
277 110  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
278 110  FETCH_LIST/98             $126=     $125                 196:0               	;0
279 110  ASSIGN/38                 ?110      16?11                $126                	;0
280 110  FETCH_LIST/98             $128=     $125                 197:1               	;0
281 110  ASSIGN/38                 ?112      16?14                $128                	;0
282 110  FREE/70                   ?0        $125                 ?0                  	;0
283 111  INIT_METHOD_CALL/112      ?0        16?5                 198:'query'         	;4
284 111  SEND_VAL_EX/116           ?80       200:'INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES(?,?,?)' ?1                  	;0
285 111  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
286 111  SEND_VAL_EX/116           ?112      201:'BRUTEFORCE ATTACK' ?3                  	;0
287 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'time'          	;0
288 111  DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
289 111  SEND_VAR_NO_REF_EX/50     ?128      $130                 ?4                  	;0
290 111  DO_FCALL/60               ?114      ?0                   ?0                  	;0
291 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'touch'         	;1
292 112  FETCH_CONSTANT/99         #132=     ?0                   206:'FLOOD_TMP_PATH'	;16
293 112  CONCAT/8                  #133=     #132                 209:'block_'        	;0
294 112  CONCAT/8                  #134=     #133                 16?14               	;0
295 112  SEND_VAL_EX/116           ?80       #134                 ?1                  	;0
296 112  DO_FCALL_BY_NAME/131      ?118      ?0                   ?0                  	;0
297 113  NOP/0                     ?0        ?0                   ?0                  	;1
298 113  GOTO/253                  ?0        ?299                 ?210                	;0
299 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'unlink'        	;1	<<151
300 117  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
301 117  DO_FCALL_BY_NAME/131      ?119      ?0                   ?0                  	;0
302 118  JMP/42                    ?0        ?119                 ?0                  	;0	>>119
303 118  FE_FREE/127               ?0        $67                  ?0                  	;0	<<118
304 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'array_unique'  	;1
305 121  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
306 121  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
307 121  ASSIGN/38                 ?121      16?6                 $137                	;0
308 122  GOTO/253                  ?0        ?309                 ?215                	;0
309 124  FE_RESET_R/77             $139=     16?6                 ?315                	;0
310 124  FE_FETCH_R/78             ?0        $139                 16?12               	;315	>>315	<<314
311 125  INIT_STATIC_METHOD_CALL/113 ?0        216:'XUI'            218:'cCb5075c679E7314'	;1
312 125  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
313 125  DO_FCALL/60               ?123      ?0                   ?0                  	;0
314 126  JMP/42                    ?0        ?310                 ?0                  	;0	>>310
315 126  FE_FREE/127               ?0        $139                 ?0                  	;0	<<309
316 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'sleep'         	;1
317 129  SEND_VAL_EX/116           ?80       222:1                ?1                  	;0
318 129  DO_FCALL_BY_NAME/131      ?124      ?0                   ?0                  	;0
319 130  GOTO/253                  ?0        ?320                 ?223                	;0
320 131  JMP/42                    ?0        ?324                 ?0                  	;0	>>324
321 132  CATCH/107                 ?1        224:'Exception'      16?16               	;0 CB	>>324,65
322 133  ECHO/40                   ?0        226:'Error!
'        ?0                  	;0
323 134  GOTO/253                  ?0        ?325                 ?227                	;0
324 136  GOTO/253                  ?0        ?42                  ?228                	;0	<<320,321
325 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'is_object'     	;1
326 138  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
327 138  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
328 138  BOOL_NOT/13               #143=     $142                 ?0                  	;0
329 138  JMPZ/43                   ?0        #143                 ?331                	;0	>>331
330 139  GOTO/253                  ?0        ?45                  ?231                	;0
331 141  INIT_METHOD_CALL/112      ?0        16?5                 232:'close_mysql'   	;0	<<329
332 141  DO_FCALL/60               ?127      ?0                   ?0                  	;0
333 142  GOTO/253                  ?0        ?45                  ?234                	;0
334 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'shell_exec'    	;1
335 144  FETCH_CONSTANT/99         #145=     ?0                   237:'PHP_BIN'       	;16
336 144  CONCAT/8                  #146=     240:'(sleep 1; '     #145                	;0
337 144  CONCAT/8                  #147=     #146                 241:' '             	;0
338 144  CONCAT/8                  #148=     #147                 242:'includes\\cli\\cache_handler.php'	;0
339 144  CONCAT/8                  #149=     #148                 243:' ) > /dev/null 2>/dev/null &'	;0
340 144  SEND_VAL_EX/116           ?80       #149                 ?1                  	;0
341 144  DO_FCALL_BY_NAME/131      ?133      ?0                   ?0                  	;0
342 145  NOP/0                     ?0        244:1                ?0                  	;4294967295
*/

?>