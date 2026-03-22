<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?103                 ?0                  	;0	>>103
1   5    BOOL_NOT/13               #17=      16?0                 ?0                  	;0
2   5    JMPNZ_EX/47               #17=      #17                  ?8                  	;0	>>8
3   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'time'            	;0
4   5    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
5   5    SUB/2                     #19=      $18                  16?0                	;0
6   5    IS_SMALLER_OR_EQUAL/20    #20=      16?1                 #19                 	;0
7   5    BOOL/52                   #17=      #20                  ?0                  	;0
8   5    BOOL_NOT/13               #21=      #17                  ?0                  	;0	<<2
9   5    JMPZ/43                   ?0        #21                  ?11                 	;0	>>11
10  6    GOTO/253                  ?0        ?129                 ?3                  	;0
11  8    INIT_STATIC_METHOD_CALL/113 ?0        4:'XUI'              6:'ab992b2373f7beca'	;0	<<9
12  8    DO_FCALL/60               $22=      ?0                   ?0                  	;0
13  8    JMPZ/43                   ?0        $22                  ?15                 	;0	>>15
14  9    GOTO/253                  ?0        ?17                  ?8                  	;0
15  11   ECHO/40                   ?0        9:'Not running! Break.
' ?0                  	;0	<<13
16  12   GOTO/253                  ?0        ?48                  ?10                 	;0
17  14   GOTO/253                  ?0        ?451                 ?11                 	;0
18  16   ASSIGN/38                 ?6        16?2                 12:array (
)        	;0
19  17   FETCH_STATIC_PROP_R/173   $24=      13:'redis'           14:'XUI'            	;0
20  17   INIT_METHOD_CALL/112      ?0        $24                  16:'sMembers'       	;1
21  17   FETCH_CONSTANT/99         #25=      ?0                   18:'SERVER_ID'      	;16
22  17   CONCAT/8                  #26=      21:'SIGNALS#'        #25                 	;0
23  17   SEND_VAL_EX/116           ?80       #26                  ?1                  	;0
24  17   DO_FCALL/60               $27=      ?0                   ?0                  	;0
25  17   FE_RESET_R/77             $28=      $27                  ?30                 	;0
26  17   FE_FETCH_R/78             ?0        $28                  16?3                	;30	>>30	<<29
27  18   ASSIGN_DIM/147            ?12       16?2                 ?1667548688         	;0
28  18   OP_DATA/137               ?0        16?3                 ?0                  	;0
29  19   JMP/42                    ?0        ?26                  ?0                  	;0	>>26
30  19   FE_FREE/127               ?0        $28                  ?0                  	;0	<<25
31  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'count'          	;1
32  22   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
33  22   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
34  22   IS_SMALLER/19             #31=      24:0                 $30                 	;0
35  22   BOOL_NOT/13               #32=      #31                  ?0                  	;0
36  22   JMPZ/43                   ?0        #32                  ?38                 	;0	>>38
37  23   GOTO/253                  ?0        ?427                 ?25                 	;0
38  25   FETCH_STATIC_PROP_R/173   $33=      26:'redis'           27:'XUI'            	;0	<<36
39  25   INIT_METHOD_CALL/112      ?0        $33                  29:'mGet'           	;1
40  25   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
41  25   DO_FCALL/60               $34=      ?0                   ?0                  	;0
42  25   ASSIGN/38                 ?18       16?4                 $34                 	;0
43  26   GOTO/253                  ?0        ?343                 ?31                 	;0
44  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'usleep'         	;1
45  29   SEND_VAL_EX/116           ?80       34:250000            ?1                  	;0
46  29   DO_FCALL_BY_NAME/131      ?19       ?0                   ?0                  	;0
47  30   GOTO/253                  ?0        ?566                 ?35                 	;0
48  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'is_object'      	;1
49  32   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
50  32   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
51  32   BOOL_NOT/13               #38=      $37                  ?0                  	;0
52  32   JMPZ/43                   ?0        #38                  ?54                 	;0	>>54
53  33   GOTO/253                  ?0        ?93                  ?38                 	;0
54  35   GOTO/253                  ?0        ?91                  ?39                 	;0	<<52
55  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'shell_exec'     	;1
56  37   FETCH_CONSTANT/99         #39=      ?0                   42:'PHP_BIN'        	;16
57  37   CONCAT/8                  #40=      #39                  45:' '              	;0
58  37   FETCH_CONSTANT/99         #41=      ?0                   46:'CRON_PATH'      	;16
59  37   CONCAT/8                  #42=      #40                  #41                 	;0
60  37   CONCAT/8                  #43=      #42                  49:'cache_engine.php "streams_update" "'	;0
61  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'implode'        	;2
62  37   SEND_VAL_EX/116           ?80       52:','               ?1                  	;0
63  37   SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
64  37   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
65  37   CONCAT/8                  #45=      #43                  $44                 	;0
66  37   CONCAT/8                  #46=      #45                  53:'"'              	;0
67  37   SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
68  37   DO_FCALL_BY_NAME/131      ?30       ?0                   ?0                  	;0
69  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'count'          	;1
70  39   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
71  39   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
72  39   IS_SMALLER/19             #49=      56:0                 $48                 	;0
73  39   BOOL_NOT/13               #50=      #49                  ?0                  	;0
74  39   JMPZ/43                   ?0        #50                  ?76                 	;0	>>76
75  40   GOTO/253                  ?0        ?90                  ?57                 	;0
76  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'shell_exec'     	;1	<<74
77  42   FETCH_CONSTANT/99         #51=      ?0                   60:'PHP_BIN'        	;16
78  42   CONCAT/8                  #52=      #51                  63:' '              	;0
79  42   FETCH_CONSTANT/99         #53=      ?0                   64:'CRON_PATH'      	;16
80  42   CONCAT/8                  #54=      #52                  #53                 	;0
81  42   CONCAT/8                  #55=      #54                  67:'cache_engine.php "lines_update" "'	;0
82  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'implode'        	;2
83  42   SEND_VAL_EX/116           ?80       70:','               ?1                  	;0
84  42   SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
85  42   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
86  42   CONCAT/8                  #57=      #55                  $56                 	;0
87  42   CONCAT/8                  #58=      #57                  71:'"'              	;0
88  42   SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
89  42   DO_FCALL_BY_NAME/131      ?42       ?0                   ?0                  	;0
90  44   GOTO/253                  ?0        ?321                 ?72                 	;0
91  46   INIT_METHOD_CALL/112      ?0        16?5                 73:'close_mysql'    	;0
92  46   DO_FCALL/60               ?43       ?0                   ?0                  	;0
93  48   GOTO/253                  ?0        ?579                 ?75                 	;0
94  52   INIT_METHOD_CALL/112      ?0        16?5                 76:'query'          	;2
95  52   SEND_VAL_EX/116           ?80       78:'SELECT `signal_id`, `custom_data` FROM `signals` WHERE `server_id` = ? AND `cache` = 1 ORDER BY `signal_id` ASC LIMIT 1000;' ?1                  	;0
96  52   FETCH_CONSTANT/99         #61=      ?0                   79:'SERVER_ID'      	;16
97  52   SEND_VAL_EX/116           ?96       #61                  ?2                  	;0
98  52   DO_FCALL/60               $62=      ?0                   ?0                  	;0
99  52   JMPZ/43                   ?0        $62                  ?101                	;0	>>101
100 53   GOTO/253                  ?0        ?102                 ?82                 	;0
101 55   GOTO/253                  ?0        ?48                  ?83                 	;0	<<99
102 57   GOTO/253                  ?0        ?159                 ?84                 	;0
103 59   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'posix_getpwuid' 	;1	<<0
104 59   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'posix_geteuid'  	;0
105 59   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
106 59   SEND_VAR_NO_REF_EX/50     ?80       $63                  ?1                  	;0
107 59   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
108 59   FETCH_DIM_R/81            $65=      $64                  89:'name'           	;0
109 59   IS_NOT_EQUAL/18           #66=      $65                  90:'xui'            	;0
110 59   BOOL_NOT/13               #67=      #66                  ?0                  	;0
111 59   JMPZ/43                   ?0        #67                  ?113                	;0	>>113
112 60   GOTO/253                  ?0        ?114                 ?91                 	;0
113 62   EXIT/79                   ?0        92:'Please run as XUI!
' ?0                  	;0	<<111
114 64   BEGIN_SILENCE/57          #68=      ?0                   ?0                  	;0
115 64   FETCH_R/80                $69=      93:'argc'            ?0                  	;268435456
116 64   END_SILENCE/58            ?0        #68                  ?0                  	;0
117 64   JMPZ/43                   ?0        $69                  ?119                	;0	>>119
118 65   GOTO/253                  ?0        ?428                 ?94                 	;0
119 67   EXIT/79                   ?0        95:0                 ?0                  	;0	<<117
120 68   GOTO/253                  ?0        ?428                 ?96                 	;0
121 70   INIT_STATIC_METHOD_CALL/113 ?0        100:'XUI'            102:'F76008F8dfE1898C'	;1
122 70   SEND_VAL_EX/116           ?80       104:true             ?1                  	;0
123 70   DO_FCALL/60               $71=      ?0                   ?0                  	;0
124 70   FETCH_STATIC_PROP_W/174   $70=      97:'rServers'        98:'XUI'            	;0
125 70   ASSIGN/38                 ?55       $70                  $71                 	;0
126 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'time'          	;0
127 71   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
128 71   ASSIGN/38                 ?57       16?0                 $73                 	;0
129 73   FETCH_STATIC_PROP_R/173   $75=      107:'rSettings'      108:'XUI'           	;0
130 73   FETCH_DIM_R/81            $76=      $75                  110:'redis_handler' 	;0
131 73   JMPZ_EX/46                #77=      $76                  ?141                	;0	>>141
132 73   FETCH_STATIC_PROP_R/173   $78=      111:'redis'          112:'XUI'           	;0
133 73   BOOL_NOT/13               #79=      $78                  ?0                  	;0
134 73   JMPNZ_EX/47               #79=      #79                  ?140                	;0	>>140
135 73   FETCH_STATIC_PROP_R/173   $80=      114:'redis'          115:'XUI'           	;0
136 73   INIT_METHOD_CALL/112      ?0        $80                  117:'ping'          	;0
137 73   DO_FCALL/60               $81=      ?0                   ?0                  	;0
138 73   BOOL_NOT/13               #82=      $81                  ?0                  	;0
139 73   BOOL/52                   #79=      #82                  ?0                  	;0
140 73   BOOL/52                   #77=      #79                  ?0                  	;0	<<134
141 73   BOOL_NOT/13               #83=      #77                  ?0                  	;0	<<131
142 73   JMPZ/43                   ?0        #83                  ?144                	;0	>>144
143 74   GOTO/253                  ?0        ?466                 ?119                	;0
144 76   GOTO/253                  ?0        ?48                  ?120                	;0	<<142
145 77   GOTO/253                  ?0        ?466                 ?121                	;0
146 79   ASSIGN/38                 ?67       16?1                 122:60              	;0
147 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'md5_file'      	;1
148 80   SEND_VAL_EX/116           ?80       125:'includes\\cli\\signals.php' ?1                  	;0
149 80   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
150 80   ASSIGN/38                 ?69       16?8                 $85                 	;0
151 81   FETCH_STATIC_PROP_R/173   $87=      126:'rSettings'      127:'XUI'           	;0
152 81   FETCH_DIM_R/81            $88=      $87                  129:'redis_handler' 	;0
153 81   BOOL_NOT/13               #89=      $88                  ?0                  	;0
154 81   JMPZ/43                   ?0        #89                  ?156                	;0	>>156
155 82   GOTO/253                  ?0        ?158                 ?130                	;0
156 84   INIT_STATIC_METHOD_CALL/113 ?0        131:'XUI'            133:'d6Aeb3175A43F301'	;0	<<154
157 84   DO_FCALL/60               ?73       ?0                   ?0                  	;0
158 86   GOTO/253                  ?0        ?566                 ?135                	;0
159 88   INIT_METHOD_CALL/112      ?0        16?5                 136:'num_rows'      	;0
160 88   DO_FCALL/60               $91=      ?0                   ?0                  	;0
161 88   IS_SMALLER/19             #92=      138:0                $91                 	;0
162 88   BOOL_NOT/13               #93=      #92                  ?0                  	;0
163 88   JMPZ/43                   ?0        #93                  ?165                	;0	>>165
164 89   GOTO/253                  ?0        ?337                 ?139                	;0
165 91   ASSIGN/38                 $94=      16?10                140:array (
)       	;0	<<163
166 91   ASSIGN/38                 $95=      16?7                 $94                 	;0
167 91   ASSIGN/38                 $96=      16?6                 $95                 	;0
168 91   ASSIGN/38                 ?80       16?9                 $96                 	;0
169 92   INIT_METHOD_CALL/112      ?0        16?5                 141:'get_rows'      	;0
170 92   DO_FCALL/60               $98=      ?0                   ?0                  	;0
171 92   FE_RESET_R/77             $99=      $98                  ?312                	;0
172 92   FE_FETCH_R/78             ?0        $99                  16?11               	;312	>>312	<<311
173 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   143:'json_decode'   	;2
174 93   FETCH_DIM_FUNC_ARG/93     $100=     16?11                145:'custom_data'   	;1
175 93   SEND_VAR_EX/66            ?80       $100                 ?1                  	;0
176 93   SEND_VAL_EX/116           ?96       146:true             ?2                  	;0
177 93   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
178 93   ASSIGN/38                 ?85       16?12                $101                	;0
179 94   FETCH_DIM_R/81            $104=     16?11                147:'signal_id'     	;0
180 94   ASSIGN_DIM/147            ?86       16?10                ?2670194880         	;0
181 94   OP_DATA/137               ?0        $104                 ?0                  	;0
182 95   FETCH_DIM_R/81            $105=     16?12                148:'type'          	;0
183 95   SWITCH_STRING/188         ?0        $105                 149:array (
  'update_stream' => 199,
  'update_line' => 214,
  'update_streams' => 229,
  'update_lines' => 248,
  'delete_con' => 267,
  'delete_vod' => 276,
  'delete_vods' => 291,
)	;310
184 96   CASE/48                   #106=     $105                 150:'update_stream' 	;0	>>186
185 96   JMPNZ/44                  ?0        #106                 ?199                	;0	>>199
186 103  CASE/48                   #106=     $105                 151:'update_line'   	;0	>>188	<<184
187 103  JMPNZ/44                  ?0        #106                 ?214                	;0	>>214
188 110  CASE/48                   #106=     $105                 152:'update_streams'	;0	>>190	<<186
189 110  JMPNZ/44                  ?0        #106                 ?229                	;0	>>229
190 121  CASE/48                   #106=     $105                 153:'update_lines'  	;0	>>192	<<188
191 121  JMPNZ/44                  ?0        #106                 ?248                	;0	>>248
192 132  CASE/48                   #106=     $105                 154:'delete_con'    	;0	>>194	<<190
193 132  JMPNZ/44                  ?0        #106                 ?267                	;0	>>267
194 135  CASE/48                   #106=     $105                 155:'delete_vod'    	;0	>>196	<<192
195 135  JMPNZ/44                  ?0        #106                 ?276                	;0	>>276
196 138  CASE/48                   #106=     $105                 156:'delete_vods'   	;0	>>198	<<194
197 138  JMPNZ/44                  ?0        #106                 ?291                	;0	>>291
198 138  JMP/42                    ?0        ?310                 ?0                  	;0	>>310	<<196
199 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'in_array'      	;2	<<185
200 97   FETCH_DIM_FUNC_ARG/93     $107=     16?12                159:'id'            	;1
201 97   SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
202 97   SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
203 97   DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
204 97   JMPZ/43                   ?0        $108                 ?208                	;0	>>208
205 98   NOP/0                     ?0        ?0                   ?0                  	;1
206 98   NOP/0                     ?0        ?0                   ?0                  	;1
207 98   GOTO/253                  ?0        ?211                 ?160                	;0
208 100  FETCH_DIM_R/81            $110=     16?12                161:'id'            	;0	<<204
209 100  ASSIGN_DIM/147            ?92       16?6                 ?4397406            	;0
210 100  OP_DATA/137               ?0        $110                 ?0                  	;0
211 102  FREE/70                   ?0        $105                 ?8                  	;1
212 102  NOP/0                     ?0        ?0                   ?0                  	;1
213 102  GOTO/253                  ?0        ?311                 ?162                	;0
214 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'in_array'      	;2	<<187
215 104  FETCH_DIM_FUNC_ARG/93     $111=     16?12                165:'id'            	;1
216 104  SEND_VAR_EX/66            ?80       $111                 ?1                  	;0
217 104  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
218 104  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
219 104  JMPZ/43                   ?0        $112                 ?223                	;0	>>223
220 105  NOP/0                     ?0        ?0                   ?0                  	;1
221 105  NOP/0                     ?0        ?0                   ?0                  	;1
222 105  GOTO/253                  ?0        ?226                 ?166                	;0
223 107  FETCH_DIM_R/81            $114=     16?12                167:'id'            	;0	<<219
224 107  ASSIGN_DIM/147            ?96       16?7                 ?4397406            	;0
225 107  OP_DATA/137               ?0        $114                 ?0                  	;0
226 109  FREE/70                   ?0        $105                 ?8                  	;1
227 109  NOP/0                     ?0        ?0                   ?0                  	;1
228 109  GOTO/253                  ?0        ?311                 ?168                	;0
229 111  FETCH_DIM_R/81            $115=     16?12                169:'id'            	;0	<<189
230 111  FE_RESET_R/77             $116=     $115                 ?244                	;0
231 111  FE_FETCH_R/78             ?0        $116                 16?13               	;244	>>244	<<243
232 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'in_array'      	;2
233 112  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
234 112  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
235 112  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
236 112  JMPZ/43                   ?0        $117                 ?241                	;0	>>241
237 113  NOP/0                     ?0        ?0                   ?0                  	;1
238 113  NOP/0                     ?0        ?0                   ?0                  	;1
239 113  NOP/0                     ?0        ?0                   ?0                  	;1
240 113  GOTO/253                  ?0        ?243                 ?172                	;0
241 115  ASSIGN_DIM/147            ?101      16?6                 ?4397406            	;0	<<236
242 115  OP_DATA/137               ?0        16?13                ?0                  	;0
243 117  JMP/42                    ?0        ?231                 ?0                  	;0	>>231
244 117  FE_FREE/127               ?0        $116                 ?0                  	;0	<<230
245 120  FREE/70                   ?0        $105                 ?8                  	;1
246 120  NOP/0                     ?0        ?0                   ?0                  	;1
247 120  GOTO/253                  ?0        ?311                 ?173                	;0
248 122  FETCH_DIM_R/81            $119=     16?12                174:'id'            	;0	<<191
249 122  FE_RESET_R/77             $120=     $119                 ?263                	;0
250 122  FE_FETCH_R/78             ?0        $120                 16?13               	;263	>>263	<<262
251 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'in_array'      	;2
252 123  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
253 123  SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
254 123  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
255 123  JMPZ/43                   ?0        $121                 ?260                	;0	>>260
256 124  NOP/0                     ?0        ?0                   ?0                  	;1
257 124  NOP/0                     ?0        ?0                   ?0                  	;1
258 124  NOP/0                     ?0        ?0                   ?0                  	;1
259 124  GOTO/253                  ?0        ?262                 ?177                	;0
260 126  ASSIGN_DIM/147            ?105      16?7                 ?4397406            	;0	<<255
261 126  OP_DATA/137               ?0        16?13                ?0                  	;0
262 128  JMP/42                    ?0        ?250                 ?0                  	;0	>>250
263 128  FE_FREE/127               ?0        $120                 ?0                  	;0	<<249
264 131  FREE/70                   ?0        $105                 ?8                  	;1
265 131  NOP/0                     ?0        ?0                   ?0                  	;1
266 131  GOTO/253                  ?0        ?311                 ?178                	;0
267 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'unlink'        	;1	<<193
268 133  FETCH_CONSTANT/99         #123=     ?0                   181:'CONS_TMP_PATH' 	;16
269 133  FETCH_DIM_R/81            $124=     16?12                184:'uuid'          	;0
270 133  CONCAT/8                  #125=     #123                 $124                	;0
271 133  SEND_VAL_EX/116           ?80       #125                 ?1                  	;0
272 133  DO_FCALL_BY_NAME/131      ?109      ?0                   ?0                  	;0
273 134  FREE/70                   ?0        $105                 ?8                  	;1
274 134  NOP/0                     ?0        ?0                   ?0                  	;1
275 134  GOTO/253                  ?0        ?311                 ?185                	;0
276 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'exec'          	;1	<<195
277 136  FETCH_CONSTANT/99         #127=     ?0                   188:'XUI_HOME'      	;16
278 136  CONCAT/8                  #128=     191:'rm '            #127                	;0
279 136  CONCAT/8                  #129=     #128                 192:'content/vod/'  	;0
280 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'intval'        	;1
281 136  FETCH_DIM_FUNC_ARG/93     $130=     16?12                195:'id'            	;1
282 136  SEND_VAR_EX/66            ?80       $130                 ?1                  	;0
283 136  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
284 136  CONCAT/8                  #132=     #129                 $131                	;0
285 136  CONCAT/8                  #133=     #132                 196:'.*'            	;0
286 136  SEND_VAL_EX/116           ?80       #133                 ?1                  	;0
287 136  DO_FCALL_BY_NAME/131      ?117      ?0                   ?0                  	;0
288 137  FREE/70                   ?0        $105                 ?8                  	;1
289 137  NOP/0                     ?0        ?0                   ?0                  	;1
290 137  GOTO/253                  ?0        ?311                 ?197                	;0
291 139  FETCH_DIM_R/81            $135=     16?12                198:'id'            	;0	<<197
292 139  FE_RESET_R/77             $136=     $135                 ?306                	;0
293 139  FE_FETCH_R/78             ?0        $136                 16?13               	;306	>>306	<<305
294 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'exec'          	;1
295 140  FETCH_CONSTANT/99         #137=     ?0                   201:'XUI_HOME'      	;16
296 140  CONCAT/8                  #138=     204:'rm '            #137                	;0
297 140  CONCAT/8                  #139=     #138                 205:'content/vod/'  	;0
298 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'intval'        	;1
299 140  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
300 140  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
301 140  CONCAT/8                  #141=     #139                 $140                	;0
302 140  CONCAT/8                  #142=     #141                 208:'.*'            	;0
303 140  SEND_VAL_EX/116           ?80       #142                 ?1                  	;0
304 140  DO_FCALL_BY_NAME/131      ?126      ?0                   ?0                  	;0
305 141  JMP/42                    ?0        ?293                 ?0                  	;0	>>293
306 141  FE_FREE/127               ?0        $136                 ?0                  	;0	<<292
307 144  FREE/70                   ?0        $105                 ?8                  	;1
308 144  NOP/0                     ?0        ?0                   ?0                  	;1
309 144  GOTO/253                  ?0        ?311                 ?209                	;0
310 144  FREE/70                   ?0        $105                 ?0                  	;0	<<198
311 148  JMP/42                    ?0        ?172                 ?0                  	;0	>>172
312 148  FE_FREE/127               ?0        $99                  ?0                  	;0	<<171
313 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'count'         	;1
314 151  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
315 151  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
316 151  IS_SMALLER/19             #145=     212:0                $144                	;0
317 151  BOOL_NOT/13               #146=     #145                 ?0                  	;0
318 151  JMPZ/43                   ?0        #146                 ?320                	;0	>>320
319 152  GOTO/253                  ?0        ?69                  ?213                	;0
320 154  GOTO/253                  ?0        ?55                  ?214                	;0	<<318
321 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'count'         	;1
322 156  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
323 156  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
324 156  IS_SMALLER/19             #148=     217:0                $147                	;0
325 156  BOOL_NOT/13               #149=     #148                 ?0                  	;0
326 156  JMPZ/43                   ?0        #149                 ?328                	;0	>>328
327 157  GOTO/253                  ?0        ?337                 ?218                	;0
328 159  INIT_METHOD_CALL/112      ?0        16?5                 219:'query'         	;1	<<326
329 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'implode'       	;2
330 159  SEND_VAL_EX/116           ?80       223:','              ?1                  	;0
331 159  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
332 159  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
333 159  CONCAT/8                  #151=     224:'DELETE FROM `signals` WHERE `signal_id` IN (' $150                	;0
334 159  CONCAT/8                  #152=     #151                 225:')'             	;0
335 159  SEND_VAL_EX/116           ?80       #152                 ?1                  	;0
336 159  DO_FCALL/60               ?136      ?0                   ?0                  	;0
337 162  FETCH_STATIC_PROP_R/173   $154=     226:'rSettings'      227:'XUI'           	;0
338 162  FETCH_DIM_R/81            $155=     $154                 229:'redis_handler' 	;0
339 162  BOOL_NOT/13               #156=     $155                 ?0                  	;0
340 162  JMPZ/43                   ?0        #156                 ?342                	;0	>>342
341 163  GOTO/253                  ?0        ?44                  ?230                	;0
342 165  GOTO/253                  ?0        ?18                  ?231                	;0	<<340
343 167  ASSIGN/38                 ?140      16?10                232:array (
)       	;0
344 168  FE_RESET_R/77             $158=     16?4                 ?412                	;0
345 168  FE_FETCH_R/78             ?0        $158                 16?14               	;412	>>412	<<411
346 169  NOP/0                     ?0        ?0                   ?0                  	;1
347 169  GOTO/253                  ?0        ?348                 ?233                	;0
348 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'igbinary_unserialize'	;1
349 171  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
350 171  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
351 171  ASSIGN/38                 ?143      16?11                $159                	;0
352 172  FETCH_DIM_R/81            $162=     16?11                236:'key'           	;0
353 172  ASSIGN_DIM/147            ?144      16?10                ?2670194880         	;0
354 172  OP_DATA/137               ?0        $162                 ?0                  	;0
355 173  FETCH_DIM_R/81            $163=     16?11                237:'pid'           	;0
356 173  ASSIGN/38                 ?147      16?15                $163                	;0
357 174  FETCH_DIM_R/81            $165=     16?11                238:'rtmp'          	;0
358 174  IS_EQUAL/17               #166=     $165                 239:0               	;0
359 174  JMPZ/43                   ?0        #166                 ?362                	;0	>>362
360 175  NOP/0                     ?0        ?0                   ?0                  	;1
361 175  GOTO/253                  ?0        ?382                 ?240                	;0
362 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'shell_exec'    	;1	<<359
363 177  FETCH_CONSTANT/99         #168=     ?0                   246:'SERVER_ID'     	;16
364 177  FETCH_STATIC_PROP_R/173   $167=     243:'rServers'       244:'XUI'           	;0
365 177  FETCH_DIM_R/81            $169=     $167                 #168                	;0
366 177  FETCH_DIM_R/81            $170=     $169                 249:'rtmp_mport_url'	;0
367 177  CONCAT/8                  #171=     250:'wget --timeout=2 -O /dev/null -o /dev/null "' $170                	;0
368 177  CONCAT/8                  #172=     #171                 251:'control/drop/client?clientid='	;0
369 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'intval'        	;1
370 177  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
371 177  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
372 177  CONCAT/8                  #174=     #172                 $173                	;0
373 177  CONCAT/8                  #175=     #174                 254:'" >/dev/null 2>/dev/null &'	;0
374 177  SEND_VAL_EX/116           ?80       #175                 ?1                  	;0
375 177  DO_FCALL_BY_NAME/131      ?159      ?0                   ?0                  	;0
376 178  NOP/0                     ?0        ?0                   ?0                  	;1
377 178  GOTO/253                  ?0        ?380                 ?255                	;0
378 182  NOP/0                     ?0        ?0                   ?0                  	;1
379 182  GOTO/253                  ?0        ?411                 ?256                	;0
380 184  NOP/0                     ?0        ?0                   ?0                  	;1
381 184  GOTO/253                  ?0        ?378                 ?257                	;0
382 186  ISSET_ISEMPTY_CV/197      #177=     16?15                ?0                  	;16777216
383 186  BOOL_NOT/13               #178=     #177                 ?0                  	;0
384 186  JMPZ_EX/46                #178=     #178                 ?390                	;0	>>390
385 186  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'file_exists'   	;1
386 186  CONCAT/8                  #179=     260:'/proc/'         16?15               	;0
387 186  SEND_VAL_EX/116           ?80       #179                 ?1                  	;0
388 186  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
389 186  BOOL/52                   #178=     $180                 ?0                  	;0
390 186  JMPZ_EX/46                #178=     #178                 ?395                	;0	>>395	<<384
391 186  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'is_numeric'    	;1
392 186  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
393 186  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
394 186  BOOL/52                   #178=     $181                 ?0                  	;0
395 186  JMPZ_EX/46                #178=     #178                 ?398                	;0	>>398	<<390
396 186  IS_SMALLER/19             #182=     263:0                16?15               	;0
397 186  BOOL/52                   #178=     #182                 ?0                  	;0
398 186  BOOL_NOT/13               #183=     #178                 ?0                  	;0	<<395
399 186  JMPZ/43                   ?0        #183                 ?402                	;0	>>402
400 187  NOP/0                     ?0        ?0                   ?0                  	;1
401 187  GOTO/253                  ?0        ?409                 ?264                	;0
402 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'shell_exec'    	;1	<<399
403 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'intval'        	;1
404 189  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
405 189  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
406 189  CONCAT/8                  #185=     269:'kill -9 '       $184                	;0
407 189  SEND_VAL_EX/116           ?80       #185                 ?1                  	;0
408 189  DO_FCALL_BY_NAME/131      ?169      ?0                   ?0                  	;0
409 191  NOP/0                     ?0        ?0                   ?0                  	;1
410 191  GOTO/253                  ?0        ?378                 ?270                	;0
411 192  JMP/42                    ?0        ?345                 ?0                  	;0	>>345
412 192  FE_FREE/127               ?0        $158                 ?0                  	;0	<<344
413 195  FETCH_STATIC_PROP_R/173   $187=     271:'redis'          272:'XUI'           	;0
414 195  INIT_METHOD_CALL/112      ?0        $187                 274:'multi'         	;0
415 195  DO_FCALL/60               $188=     ?0                   ?0                  	;0
416 195  INIT_METHOD_CALL/112      ?0        $188                 276:'del'           	;1
417 195  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
418 195  DO_FCALL/60               $189=     ?0                   ?0                  	;0
419 195  INIT_METHOD_CALL/112      ?0        $189                 278:'sRem'          	;1
420 195  FETCH_CONSTANT/99         #190=     ?0                   280:'SERVER_ID'     	;16
421 195  CONCAT/8                  #191=     283:'SIGNALS#'       #190                	;0
422 195  SEND_VAL_EX/116           ?80       #191                 ?1                  	;0
423 195  SEND_UNPACK/165           ?80       16?2                 ?1                  	;0
424 195  DO_FCALL/60               $192=     ?0                   ?0                  	;0
425 195  INIT_METHOD_CALL/112      ?0        $192                 284:'exec'          	;0
426 195  DO_FCALL/60               ?176      ?0                   ?0                  	;0
427 197  GOTO/253                  ?0        ?44                  ?286                	;0
428 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'set_time_limit'	;1
429 200  SEND_VAL_EX/116           ?80       289:0                ?1                  	;0
430 200  DO_FCALL_BY_NAME/131      ?177      ?0                   ?0                  	;0
431 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'str_replace'   	;3
432 201  SEND_VAL_EX/116           ?80       292:'\\'             ?1                  	;0
433 201  SEND_VAL_EX/116           ?96       293:'/'              ?2                  	;0
434 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'dirname'       	;1
435 201  FETCH_DIM_FUNC_ARG/93     $195=     16?16                296:0               	;1
436 201  SEND_VAR_EX/66            ?80       $195                 ?1                  	;0
437 201  DO_FCALL_BY_NAME/131      $196=     ?0                   ?0                  	;0
438 201  SEND_VAR_NO_REF_EX/50     ?112      $196                 ?3                  	;0
439 201  DO_FCALL_BY_NAME/131      $197=     ?0                   ?0                  	;0
440 201  CONCAT/8                  #198=     $197                 297:'/../../www/init.php'	;0
441 201  INCLUDE_OR_EVAL/73        ?182      #198                 ?0                  	;8
442 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'shell_exec'    	;1
443 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   300:'getmypid'      	;0
444 202  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
445 202  CONCAT/8                  #201=     302:'kill -9 $(ps aux | grep signals | grep -v grep | grep -v ' $200                	;0
446 202  CONCAT/8                  #202=     #201                 303:' | awk \'{print $2}\')'	;0
447 202  SEND_VAL_EX/116           ?80       #202                 ?1                  	;0
448 202  DO_FCALL_BY_NAME/131      ?186      ?0                   ?0                  	;0
449 203  ASSIGN/38                 ?187      16?0                 304:NULL            	;0
450 204  GOTO/253                  ?0        ?146                 ?305                	;0
451 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   306:'md5_file'      	;1
452 206  SEND_VAL_EX/116           ?80       308:'includes\\cli\\signals.php' ?1                  	;0
453 206  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
454 206  IS_NOT_EQUAL/18           #206=     $205                 16?8                	;0
455 206  BOOL_NOT/13               #207=     #206                 ?0                  	;0
456 206  JMPZ/43                   ?0        #207                 ?458                	;0	>>458
457 207  GOTO/253                  ?0        ?460                 ?309                	;0
458 209  ECHO/40                   ?0        310:'File changed! Break.
' ?0                  	;0	<<456
459 210  GOTO/253                  ?0        ?48                  ?311                	;0
460 212  INIT_STATIC_METHOD_CALL/113 ?0        315:'XUI'            317:'ac49B56DbE10e52c'	;1
461 212  SEND_VAL_EX/116           ?80       319:true             ?1                  	;0
462 212  DO_FCALL/60               $209=     ?0                   ?0                  	;0
463 212  FETCH_STATIC_PROP_W/174   $208=     312:'rSettings'      313:'XUI'           	;0
464 212  ASSIGN/38                 ?193      $208                 $209                	;0
465 213  GOTO/253                  ?0        ?121                 ?320                	;0
466 216  INIT_METHOD_CALL/112      ?0        16?5                 321:'query'         	;2
467 216  SEND_VAL_EX/116           ?80       323:'SELECT `signal_id`, `pid`, `rtmp` FROM `signals` WHERE `server_id` = ? AND `pid` IS NOT NULL ORDER BY `signal_id` ASC LIMIT 100' ?1                  	;0
468 216  FETCH_CONSTANT/99         #211=     ?0                   324:'SERVER_ID'     	;16
469 216  SEND_VAL_EX/116           ?96       #211                 ?2                  	;0
470 216  DO_FCALL/60               $212=     ?0                   ?0                  	;0
471 216  JMPZ/43                   ?0        $212                 ?473                	;0	>>473
472 217  GOTO/253                  ?0        ?474                 ?327                	;0
473 219  GOTO/253                  ?0        ?48                  ?328                	;0	<<471
474 221  INIT_METHOD_CALL/112      ?0        16?5                 329:'num_rows'      	;0
475 221  DO_FCALL/60               $213=     ?0                   ?0                  	;0
476 221  IS_SMALLER/19             #214=     331:0                $213                	;0
477 221  BOOL_NOT/13               #215=     #214                 ?0                  	;0
478 221  JMPZ/43                   ?0        #215                 ?480                	;0	>>480
479 222  GOTO/253                  ?0        ?94                  ?332                	;0
480 224  GOTO/253                  ?0        ?481                 ?333                	;0	<<478
481 226  ASSIGN/38                 ?199      16?10                334:array (
)       	;0
482 227  INIT_METHOD_CALL/112      ?0        16?5                 335:'get_rows'      	;0
483 227  DO_FCALL/60               $217=     ?0                   ?0                  	;0
484 227  FE_RESET_R/77             $218=     $217                 ?548                	;0
485 227  FE_FETCH_R/78             ?0        $218                 16?11               	;548	>>548	<<547
486 228  NOP/0                     ?0        ?0                   ?0                  	;1
487 228  GOTO/253                  ?0        ?517                 ?337                	;0
488 231  ISSET_ISEMPTY_CV/197      #219=     16?15                ?0                  	;16777216
489 231  BOOL_NOT/13               #220=     #219                 ?0                  	;0
490 231  JMPZ_EX/46                #220=     #220                 ?496                	;0	>>496
491 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'file_exists'   	;1
492 231  CONCAT/8                  #221=     340:'/proc/'         16?15               	;0
493 231  SEND_VAL_EX/116           ?80       #221                 ?1                  	;0
494 231  DO_FCALL_BY_NAME/131      $222=     ?0                   ?0                  	;0
495 231  BOOL/52                   #220=     $222                 ?0                  	;0
496 231  JMPZ_EX/46                #220=     #220                 ?501                	;0	>>501	<<490
497 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'is_numeric'    	;1
498 231  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
499 231  DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
500 231  BOOL/52                   #220=     $223                 ?0                  	;0
501 231  JMPZ_EX/46                #220=     #220                 ?504                	;0	>>504	<<496
502 231  IS_SMALLER/19             #224=     343:0                16?15               	;0
503 231  BOOL/52                   #220=     #224                 ?0                  	;0
504 231  BOOL_NOT/13               #225=     #220                 ?0                  	;0	<<501
505 231  JMPZ/43                   ?0        #225                 ?508                	;0	>>508
506 232  NOP/0                     ?0        ?0                   ?0                  	;1
507 232  GOTO/253                  ?0        ?515                 ?344                	;0
508 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'shell_exec'    	;1	<<505
509 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'intval'        	;1
510 234  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
511 234  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
512 234  CONCAT/8                  #227=     349:'kill -9 '       $226                	;0
513 234  SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
514 234  DO_FCALL_BY_NAME/131      ?211      ?0                   ?0                  	;0
515 237  NOP/0                     ?0        ?0                   ?0                  	;1
516 237  GOTO/253                  ?0        ?545                 ?350                	;0
517 239  FETCH_DIM_R/81            $230=     16?11                351:'signal_id'     	;0
518 239  ASSIGN_DIM/147            ?212      16?10                ?4442274            	;0
519 239  OP_DATA/137               ?0        $230                 ?0                  	;0
520 240  FETCH_DIM_R/81            $231=     16?11                352:'pid'           	;0
521 240  ASSIGN/38                 ?215      16?15                $231                	;0
522 241  FETCH_DIM_R/81            $233=     16?11                353:'rtmp'          	;0
523 241  IS_EQUAL/17               #234=     $233                 354:0               	;0
524 241  JMPZ/43                   ?0        #234                 ?527                	;0	>>527
525 242  NOP/0                     ?0        ?0                   ?0                  	;1
526 242  GOTO/253                  ?0        ?488                 ?355                	;0
527 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'shell_exec'    	;1	<<524
528 244  FETCH_CONSTANT/99         #236=     ?0                   361:'SERVER_ID'     	;16
529 244  FETCH_STATIC_PROP_R/173   $235=     358:'rServers'       359:'XUI'           	;0
530 244  FETCH_DIM_R/81            $237=     $235                 #236                	;0
531 244  FETCH_DIM_R/81            $238=     $237                 364:'rtmp_mport_url'	;0
532 244  CONCAT/8                  #239=     365:'wget --timeout=2 -O /dev/null -o /dev/null "' $238                	;0
533 244  CONCAT/8                  #240=     #239                 366:'control/drop/client?clientid='	;0
534 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'intval'        	;1
535 244  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
536 244  DO_FCALL_BY_NAME/131      $241=     ?0                   ?0                  	;0
537 244  CONCAT/8                  #242=     #240                 $241                	;0
538 244  CONCAT/8                  #243=     #242                 369:'" >/dev/null 2>/dev/null &'	;0
539 244  SEND_VAL_EX/116           ?80       #243                 ?1                  	;0
540 244  DO_FCALL_BY_NAME/131      ?227      ?0                   ?0                  	;0
541 245  NOP/0                     ?0        ?0                   ?0                  	;1
542 245  GOTO/253                  ?0        ?515                 ?370                	;0
543 246  NOP/0                     ?0        ?0                   ?0                  	;1
544 246  GOTO/253                  ?0        ?488                 ?371                	;0
545 249  NOP/0                     ?0        ?0                   ?0                  	;1
546 249  GOTO/253                  ?0        ?547                 ?372                	;0
547 250  JMP/42                    ?0        ?485                 ?0                  	;0	>>485
548 250  FE_FREE/127               ?0        $218                 ?0                  	;0	<<484
549 253  INIT_FCALL_BY_NAME/59     ?0        ?0                   373:'count'         	;1
550 253  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
551 253  DO_FCALL_BY_NAME/131      $245=     ?0                   ?0                  	;0
552 253  IS_SMALLER/19             #246=     375:0                $245                	;0
553 253  BOOL_NOT/13               #247=     #246                 ?0                  	;0
554 253  JMPZ/43                   ?0        #247                 ?556                	;0	>>556
555 254  GOTO/253                  ?0        ?94                  ?376                	;0
556 256  INIT_METHOD_CALL/112      ?0        16?5                 377:'query'         	;1	<<554
557 256  INIT_FCALL_BY_NAME/59     ?0        ?0                   379:'implode'       	;2
558 256  SEND_VAL_EX/116           ?80       381:','              ?1                  	;0
559 256  SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
560 256  DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
561 256  CONCAT/8                  #249=     382:'DELETE FROM `signals` WHERE `signal_id` IN (' $248                	;0
562 256  CONCAT/8                  #250=     #249                 383:')'             	;0
563 256  SEND_VAL_EX/116           ?80       #250                 ?1                  	;0
564 256  DO_FCALL/60               ?234      ?0                   ?0                  	;0
565 257  GOTO/253                  ?0        ?94                  ?384                	;0
566 260  JMPZ/43                   ?0        385:false            ?568                	;0	>>568
567 261  GOTO/253                  ?0        ?48                  ?386                	;0
568 263  BOOL_NOT/13               #252=     16?5                 ?0                  	;0	<<566
569 263  JMPNZ_EX/47               #252=     #252                 ?574                	;0	>>574
570 263  INIT_METHOD_CALL/112      ?0        16?5                 387:'ping'          	;0
571 263  DO_FCALL/60               $253=     ?0                   ?0                  	;0
572 263  BOOL_NOT/13               #254=     $253                 ?0                  	;0
573 263  BOOL/52                   #252=     #254                 ?0                  	;0
574 263  BOOL_NOT/13               #255=     #252                 ?0                  	;0	<<569
575 263  JMPZ/43                   ?0        #255                 ?577                	;0	>>577
576 264  GOTO/253                  ?0        ?578                 ?389                	;0
577 266  GOTO/253                  ?0        ?48                  ?390                	;0	<<575
578 268  GOTO/253                  ?0        ?1                   ?391                	;0
579 270  INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'shell_exec'    	;1
580 270  FETCH_CONSTANT/99         #256=     ?0                   394:'PHP_BIN'       	;16
581 270  CONCAT/8                  #257=     397:'(sleep 1; '     #256                	;0
582 270  CONCAT/8                  #258=     #257                 398:' '             	;0
583 270  CONCAT/8                  #259=     #258                 399:'includes\\cli\\signals.php'	;0
584 270  CONCAT/8                  #260=     #259                 400:' ) > /dev/null 2>/dev/null &'	;0
585 270  SEND_VAL_EX/116           ?80       #260                 ?1                  	;0
586 270  DO_FCALL_BY_NAME/131      ?244      ?0                   ?0                  	;0
587 271  NOP/0                     ?0        401:1                ?0                  	;4294967295
*/

?>