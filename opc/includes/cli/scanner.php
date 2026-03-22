<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?591                 ?0                  	;0	>>591
1   5    GOTO/253                  ?0        ?563                 ?1                  	;0
2   7    INIT_METHOD_CALL/112      ?0        16?0                 2:'num_rows'        	;0
3   7    DO_FCALL/60               $34=      ?0                   ?0                  	;0
4   7    IS_SMALLER/19             #35=      4:0                  $34                 	;0
5   7    BOOL_NOT/13               #36=      #35                  ?0                  	;0
6   7    JMPZ/43                   ?0        #36                  ?8                  	;0	>>8
7   8    GOTO/253                  ?0        ?559                 ?5                  	;0
8   10   INIT_METHOD_CALL/112      ?0        16?0                 6:'get_rows'        	;0	<<6
9   10   DO_FCALL/60               $37=      ?0                   ?0                  	;0
10  10   FE_RESET_R/77             $38=      $37                  ?557                	;0
11  10   FE_FETCH_R/78             ?0        $38                  16?1                	;557	>>557	<<556
12  11   NOP/0                     ?0        ?0                   ?0                  	;1
13  11   GOTO/253                  ?0        ?66                  ?8                  	;0
14  13   FETCH_DIM_R/81            $39=      16?3                 9:'codecs'          	;0
15  13   FETCH_DIM_R/81            $40=      $39                  10:'video'          	;0
16  13   FETCH_DIM_R/81            $41=      $40                  11:'height'         	;0
17  13   JMP_SET/152               #42=      $41                  ?19                 	;0
18  13   QM_ASSIGN/22              #42=      12:NULL              ?0                  	;0
19  13   ASSIGN/38                 ?9        16?2                 #42                 	;0
20  14   FETCH_DIM_R/81            $44=      16?3                 13:'codecs'         	;0
21  14   FETCH_DIM_R/81            $45=      $44                  14:'video'          	;0
22  14   FETCH_DIM_R/81            $46=      $45                  15:'bit_rate'       	;0
23  14   JMP_SET/152               #47=      $46                  ?25                 	;0
24  14   QM_ASSIGN/22              #47=      16:0                 ?0                  	;0
25  14   ASSIGN/38                 ?14       16?4                 #47                 	;0
26  15   FETCH_DIM_R/81            $49=      16?3                 17:'codecs'         	;0
27  15   FETCH_DIM_R/81            $50=      $49                  18:'audio'          	;0
28  15   FETCH_DIM_R/81            $51=      $50                  19:'bit_rate'       	;0
29  15   JMP_SET/152               #52=      $51                  ?31                 	;0
30  15   QM_ASSIGN/22              #52=      20:0                 ?0                  	;0
31  15   ASSIGN/38                 ?19       16?5                 #52                 	;0
32  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'intval'         	;1
33  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'explode'        	;2
34  16   SEND_VAL_EX/116           ?80       25:'/'               ?1                  	;0
35  16   FETCH_DIM_FUNC_ARG/93     $54=      16?3                 26:'codecs'         	;2
36  16   FETCH_DIM_FUNC_ARG/93     $55=      $54                  27:'video'          	;2
37  16   FETCH_DIM_FUNC_ARG/93     $56=      $55                  28:'r_frame_rate'   	;2
38  16   SEND_VAR_EX/66            ?96       $56                  ?2                  	;0
39  16   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
40  16   SEPARATE/156              $57=      $57                  ?0                  	;0
41  16   FETCH_DIM_FUNC_ARG/93     $58=      $57                  29:0                	;1
42  16   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
43  16   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
44  16   JMP_SET/152               #60=      $59                  ?46                 	;0
45  16   QM_ASSIGN/22              #60=      30:0                 ?0                  	;0
46  16   ASSIGN/38                 ?27       16?6                 #60                 	;0
47  17   IS_EQUAL/17               #62=      16?6                 31:0                	;0
48  17   BOOL_NOT/13               #63=      #62                  ?0                  	;0
49  17   JMPZ/43                   ?0        #63                  ?52                 	;0	>>52
50  18   NOP/0                     ?0        ?0                   ?0                  	;1
51  18   GOTO/253                  ?0        ?544                 ?32                 	;0
52  20   NOP/0                     ?0        ?0                   ?0                  	;1	<<49
53  20   GOTO/253                  ?0        ?529                 ?33                 	;0
54  22   BOOL_NOT/13               #64=      16?2                 ?0                  	;0
55  22   JMPZ/43                   ?0        #64                  ?58                 	;0	>>58
56  23   NOP/0                     ?0        ?0                   ?0                  	;1
57  23   GOTO/253                  ?0        ?63                  ?34                 	;0
58  25   INIT_STATIC_METHOD_CALL/113 ?0        35:'XUI'             37:'b954Bd7c2BEc3C82'	;2	<<55
59  25   SEND_VAL_EX/116           ?80       39:array (
  0 => 240,
  1 => 360,
  2 => 480,
  3 => 576,
  4 => 720,
  5 => 1080,
  6 => 1440,
  7 => 2160,
) ?1                  	;0
60  25   SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
61  25   DO_FCALL/60               $65=      ?0                   ?0                  	;0
62  25   ASSIGN/38                 ?32       16?2                 $65                 	;0
63  27   ASSIGN/38                 ?33       16?7                 40:1                	;0
64  29   NOP/0                     ?0        ?0                   ?0                  	;1
65  29   GOTO/253                  ?0        ?92                  ?41                 	;0
66  31   FETCH_DIM_R/81            $68=      16?1                 42:'id'             	;0
67  31   ROPE_INIT/54              #71=      ?0                   43:'['              	;5
68  31   ROPE_ADD/55               #71=      #71                  $68                 	;1
69  31   FETCH_DIM_R/81            $69=      16?1                 44:'stream_display_name'	;0
70  31   ROPE_ADD/55               #71=      #71                  45:'] - '           	;2
71  31   ROPE_ADD/55               #71=      #71                  $69                 	;3
72  31   ROPE_END/56               #70=      #71                  46:'
'              	;4
73  31   ECHO/40                   ?0        #70                  ?0                  	;0
74  32   INIT_METHOD_CALL/112      ?0        16?0                 47:'query'          	;2
75  32   SEND_VAL_EX/116           ?80       49:'SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id' ?1                  	;0
76  32   FETCH_DIM_FUNC_ARG/93     $74=      16?1                 50:'id'             	;2
77  32   SEND_VAR_EX/66            ?96       $74                  ?2                  	;0
78  32   DO_FCALL/60               ?41       ?0                   ?0                  	;0
79  33   INIT_METHOD_CALL/112      ?0        16?0                 51:'get_rows'       	;0
80  33   DO_FCALL/60               $76=      ?0                   ?0                  	;0
81  33   ASSIGN/38                 ?43       16?8                 $76                 	;0
82  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'intval'         	;1
83  34   FETCH_DIM_FUNC_ARG/93     $78=      16?1                 55:'probesize_ondemand'	;1
84  34   SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
85  34   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
86  34   JMP_SET/152               #80=      $79                  ?88                 	;0
87  34   QM_ASSIGN/22              #80=      56:512000            ?0                  	;0
88  34   ASSIGN/38                 ?47       16?9                 #80                 	;0
89  35   ASSIGN/38                 ?48       16?10                57:'10000000'       	;0
90  36   NOP/0                     ?0        ?0                   ?0                  	;1
91  36   GOTO/253                  ?0        ?484                 ?58                 	;0
92  38   FETCH_DIM_R/81            $83=      16?12                16?13               	;0
93  38   ASSIGN/38                 ?50       16?11                $83                 	;0
94  39   INIT_METHOD_CALL/112      ?0        16?0                 59:'query'          	;13
95  39   SEND_VAL_EX/116           ?80       61:'INSERT INTO `ondemand_check`(`stream_id`, `server_id`, `status`, `source_id`, `source_url`, `fps`, `video_codec`, `audio_codec`, `resolution`, `response`, `errors`, `date`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' ?1                  	;0
96  39   FETCH_DIM_FUNC_ARG/93     $85=      16?1                 62:'id'             	;2
97  39   SEND_VAR_EX/66            ?96       $85                  ?2                  	;0
98  39   FETCH_CONSTANT/99         #86=      ?0                   63:'SERVER_ID'      	;16
99  39   SEND_VAL_EX/116           ?112      #86                  ?3                  	;0
100 39   SEND_VAR_EX/66            ?128      16?7                 ?4                  	;0
101 39   SEND_VAR_EX/66            ?144      16?13                ?5                  	;0
102 39   SEND_VAR_EX/66            ?160      16?11                ?6                  	;0
103 39   SEND_VAR_EX/66            ?176      16?6                 ?7                  	;0
104 39   SEND_VAR_EX/66            ?192      16?14                ?8                  	;0
105 39   SEND_VAR_EX/66            ?208      16?15                ?9                  	;0
106 39   SEND_VAR_EX/66            ?224      16?2                 ?10                 	;0
107 39   SEND_VAR_EX/66            ?240      16?16                ?11                 	;0
108 39   SEND_VAR_EX/66            ?256      16?17                ?12                 	;0
109 39   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'time'           	;0
110 39   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
111 39   SEND_VAR_NO_REF_EX/50     ?272      $87                  ?13                 	;0
112 39   DO_FCALL/60               ?54       ?0                   ?0                  	;0
113 40   INIT_METHOD_CALL/112      ?0        16?0                 68:'query'          	;4
114 40   SEND_VAL_EX/116           ?80       70:'UPDATE `streams_servers` SET `ondemand_check` = ? WHERE `stream_id` = ? AND `server_id` = ?;' ?1                  	;0
115 40   INIT_METHOD_CALL/112      ?0        16?0                 71:'last_insert_id' 	;0
116 40   DO_FCALL/60               $89=      ?0                   ?0                  	;0
117 40   SEND_VAR_NO_REF_EX/50     ?96       $89                  ?2                  	;0
118 40   FETCH_DIM_FUNC_ARG/93     $90=      16?1                 73:'id'             	;3
119 40   SEND_VAR_EX/66            ?112      $90                  ?3                  	;0
120 40   FETCH_CONSTANT/99         #91=      ?0                   74:'SERVER_ID'      	;16
121 40   SEND_VAL_EX/116           ?128      #91                  ?4                  	;0
122 40   DO_FCALL/60               ?58       ?0                   ?0                  	;0
123 41   ECHO/40                   ?0        77:'
'               ?0                  	;0
124 43   NOP/0                     ?0        ?0                   ?0                  	;1
125 43   GOTO/253                  ?0        ?556                 ?78                 	;0
126 45   ISSET_ISEMPTY_CV/197      #93=      16?3                 ?0                  	;16777216
127 45   BOOL_NOT/13               #94=      #93                  ?0                  	;0
128 45   JMPZ/43                   ?0        #94                  ?131                	;0	>>131
129 46   NOP/0                     ?0        ?0                   ?0                  	;1
130 46   GOTO/253                  ?0        ?143                 ?79                 	;0
131 48   ECHO/40                   ?0        80:'Source down!
'   ?0                  	;0	<<128
132 49   ASSIGN/38                 $95=      16?16                81:NULL             	;0
133 49   ASSIGN/38                 $96=      16?2                 $95                 	;0
134 49   ASSIGN/38                 $97=      16?14                $96                 	;0
135 49   ASSIGN/38                 $98=      16?15                $97                 	;0
136 49   ASSIGN/38                 ?65       16?6                 $98                 	;0
137 50   ASSIGN/38                 $100=     16?7                 82:0                	;0
138 50   ASSIGN/38                 ?67       16?13                $100                	;0
139 51   NOP/0                     ?0        ?0                   ?0                  	;1
140 51   GOTO/253                  ?0        ?64                  ?83                 	;0
141 52   NOP/0                     ?0        ?0                   ?0                  	;1
142 52   GOTO/253                  ?0        ?143                 ?84                 	;0
143 55   ECHO/40                   ?0        85:'Source live!
'   ?0                  	;0
144 56   INIT_STATIC_METHOD_CALL/113 ?0        86:'XUI'             88:'C24aC2006B36a530'	;1
145 56   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
146 56   DO_FCALL/60               $102=     ?0                   ?0                  	;0
147 56   ASSIGN/38                 ?69       16?3                 $102                	;0
148 57   FETCH_DIM_R/81            $104=     16?3                 90:'codecs'         	;0
149 57   FETCH_DIM_R/81            $105=     $104                 91:'audio'          	;0
150 57   FETCH_DIM_R/81            $106=     $105                 92:'codec_name'     	;0
151 57   JMP_SET/152               #107=     $106                 ?153                	;0
152 57   QM_ASSIGN/22              #107=     93:NULL              ?0                  	;0
153 57   ASSIGN/38                 ?74       16?15                #107                	;0
154 58   FETCH_DIM_R/81            $109=     16?3                 94:'codecs'         	;0
155 58   FETCH_DIM_R/81            $110=     $109                 95:'video'          	;0
156 58   FETCH_DIM_R/81            $111=     $110                 96:'codec_name'     	;0
157 58   JMP_SET/152               #112=     $111                 ?159                	;0
158 58   QM_ASSIGN/22              #112=     97:NULL              ?0                  	;0
159 58   ASSIGN/38                 ?79       16?14                #112                	;0
160 59   NOP/0                     ?0        ?0                   ?0                  	;1
161 59   GOTO/253                  ?0        ?14                  ?98                 	;0
162 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'json_decode'    	;2
163 61   FETCH_DIM_FUNC_ARG/93     $114=     16?1                 101:'stream_source' 	;1
164 61   SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
165 61   SEND_VAL_EX/116           ?96       102:true             ?2                  	;0
166 61   DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
167 61   ASSIGN/38                 ?82       16?12                $115                	;0
168 62   ASSIGN/38                 ?83       16?13                103:0               	;0
169 63   ASSIGN/38                 ?84       16?17                104:NULL            	;0
170 64   FE_RESET_R/77             $119=     16?12                ?481                	;0
171 64   FE_FETCH_R/78             ?0        $119                 16?11               	;481	>>481	<<480
172 65   NOP/0                     ?0        ?0                   ?0                  	;1
173 65   NOP/0                     ?0        ?0                   ?0                  	;1
174 65   GOTO/253                  ?0        ?276                 ?105                	;0
175 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'round'         	;1
176 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'microtime'     	;1
177 69   SEND_VAL_EX/116           ?80       110:true             ?1                  	;0
178 69   DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
179 69   MUL/3                     #121=     $120                 111:1000            	;0
180 69   SEND_VAL_EX/116           ?80       #121                 ?1                  	;0
181 69   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
182 69   ASSIGN/38                 ?89       16?18                $122                	;0
183 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'json_decode'   	;2
184 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'shell_exec'    	;1
185 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'str_replace'   	;3
186 70   SEND_VAL_EX/116           ?80       118:array (
  0 => '{FETCH_OPTIONS}',
  1 => '{STREAM_SOURCE}',
) ?1                  	;0
187 70   INIT_ARRAY/71             #124=     16?19                ?0                  	;8
188 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'escapeshellarg'	;1
189 70   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
190 70   DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
191 70   ADD_ARRAY_ELEMENT/72      #124=     $125                 ?0                  	;0
192 70   SEND_VAL_EX/116           ?96       #124                 ?2                  	;0
193 70   SEND_VAR_EX/66            ?112      16?21                ?3                  	;0
194 70   DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
195 70   SEND_VAR_NO_REF_EX/50     ?80       $126                 ?1                  	;0
196 70   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
197 70   SEND_VAR_NO_REF_EX/50     ?80       $127                 ?1                  	;0
198 70   SEND_VAL_EX/116           ?96       121:true             ?2                  	;0
199 70   DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
200 70   ASSIGN/38                 ?95       16?3                 $128                	;0
201 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'round'         	;1
202 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'microtime'     	;1
203 71   SEND_VAL_EX/116           ?80       126:true             ?1                  	;0
204 71   DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
205 71   MUL/3                     #131=     $130                 127:1000            	;0
206 71   SEND_VAL_EX/116           ?80       #131                 ?1                  	;0
207 71   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
208 71   SUB/2                     #133=     $132                 16?18               	;0
209 71   ASSIGN/38                 ?100      16?16                #133                	;0
210 72   NOP/0                     ?0        ?0                   ?0                  	;1
211 72   NOP/0                     ?0        ?0                   ?0                  	;1
212 72   GOTO/253                  ?0        ?227                 ?128                	;0
213 74   FETCH_DIM_R/81            $135=     16?1                 129:'llod'          	;0
214 74   BOOL_NOT/13               #136=     $135                 ?0                  	;0
215 74   JMPZ/43                   ?0        #136                 ?219                	;0	>>219
216 75   NOP/0                     ?0        ?0                   ?0                  	;1
217 75   NOP/0                     ?0        ?0                   ?0                  	;1
218 75   GOTO/253                  ?0        ?222                 ?130                	;0
219 77   FE_FREE/127               ?0        $119                 ?2                  	;1	<<215
220 77   NOP/0                     ?0        ?0                   ?0                  	;1
221 77   GOTO/253                  ?0        ?482                 ?131                	;0
222 79   POST_INC/36               #137=     16?13                ?0                  	;0
223 79   FREE/70                   ?0        #137                 ?0                  	;0
224 81   NOP/0                     ?0        ?0                   ?0                  	;1
225 81   NOP/0                     ?0        ?0                   ?0                  	;1
226 81   GOTO/253                  ?0        ?480                 ?132                	;0
227 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'file_exists'   	;1
228 83   FETCH_CONSTANT/99         #138=     ?0                   135:'STREAMS_TMP_PATH'	;16
229 83   FETCH_DIM_R/81            $139=     16?1                 138:'id'            	;0
230 83   CONCAT/8                  #140=     #138                 $139                	;0
231 83   CONCAT/8                  #141=     #140                 139:'._errors'      	;0
232 83   SEND_VAL_EX/116           ?80       #141                 ?1                  	;0
233 83   DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
234 83   JMPZ_EX/46                #143=     $142                 ?244                	;0	>>244
235 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'filesize'      	;1
236 83   FETCH_CONSTANT/99         #144=     ?0                   142:'STREAMS_TMP_PATH'	;16
237 83   FETCH_DIM_R/81            $145=     16?1                 145:'id'            	;0
238 83   CONCAT/8                  #146=     #144                 $145                	;0
239 83   CONCAT/8                  #147=     #146                 146:'._errors'      	;0
240 83   SEND_VAL_EX/116           ?80       #147                 ?1                  	;0
241 83   DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
242 83   IS_SMALLER/19             #149=     147:0                $148                	;0
243 83   BOOL/52                   #143=     #149                 ?0                  	;0
244 83   BOOL_NOT/13               #150=     #143                 ?0                  	;0	<<234
245 83   JMPZ/43                   ?0        #150                 ?249                	;0	>>249
246 84   NOP/0                     ?0        ?0                   ?0                  	;1
247 84   NOP/0                     ?0        ?0                   ?0                  	;1
248 84   GOTO/253                  ?0        ?465                 ?148                	;0
249 86   BOOL_NOT/13               #151=     16?17                ?0                  	;0	<<245
250 86   JMPZ_EX/46                #151=     #151                 ?253                	;0	>>253
251 86   IS_EQUAL/17               #152=     16?13                149:0               	;0
252 86   BOOL/52                   #151=     #152                 ?0                  	;0
253 86   BOOL_NOT/13               #153=     #151                 ?0                  	;0	<<250
254 86   JMPZ/43                   ?0        #153                 ?258                	;0	>>258
255 87   NOP/0                     ?0        ?0                   ?0                  	;1
256 87   NOP/0                     ?0        ?0                   ?0                  	;1
257 87   GOTO/253                  ?0        ?266                 ?150                	;0
258 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'file_get_contents'	;1	<<254
259 89   FETCH_CONSTANT/99         #154=     ?0                   153:'STREAMS_TMP_PATH'	;16
260 89   FETCH_DIM_R/81            $155=     16?1                 156:'id'            	;0
261 89   CONCAT/8                  #156=     #154                 $155                	;0
262 89   CONCAT/8                  #157=     #156                 157:'._errors'      	;0
263 89   SEND_VAL_EX/116           ?80       #157                 ?1                  	;0
264 89   DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
265 89   ASSIGN/38                 ?125      16?17                $158                	;0
266 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'unlink'        	;1
267 91   FETCH_CONSTANT/99         #160=     ?0                   160:'STREAMS_TMP_PATH'	;16
268 91   FETCH_DIM_R/81            $161=     16?1                 163:'id'            	;0
269 91   CONCAT/8                  #162=     #160                 $161                	;0
270 91   CONCAT/8                  #163=     #162                 164:'._errors'      	;0
271 91   SEND_VAL_EX/116           ?80       #163                 ?1                  	;0
272 91   DO_FCALL_BY_NAME/131      ?130      ?0                   ?0                  	;0
273 92   NOP/0                     ?0        ?0                   ?0                  	;1
274 92   NOP/0                     ?0        ?0                   ?0                  	;1
275 92   GOTO/253                  ?0        ?465                 ?165                	;0
276 94   ASSIGN/38                 ?131      16?22                166:false           	;0
277 95   ASSIGN/38                 ?132      16?23                16?11               	;0
278 96   INIT_STATIC_METHOD_CALL/113 ?0        167:'XUI'            169:'C1f42cA38AD7A48D'	;1
279 96   SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
280 96   DO_FCALL/60               $167=     ?0                   ?0                  	;0
281 96   ASSIGN/38                 ?134      16?20                $167                	;0
282 97   CONCAT/8                  #169=     171:'Checking source: ' 16?11               	;0
283 97   CONCAT/8                  #170=     #169                 172:'
'             	;0
284 97   ECHO/40                   ?0        #170                 ?0                  	;0
285 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'parse_url'     	;1
286 98   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
287 98   DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
288 98   ASSIGN/38                 ?138      16?24                $171                	;0
289 99   NOP/0                     ?0        ?0                   ?0                  	;1
290 99   NOP/0                     ?0        ?0                   ?0                  	;1
291 99   GOTO/253                  ?0        ?292                 ?175                	;0
292 101  INIT_STATIC_METHOD_CALL/113 ?0        176:'XUI'            178:'c6C3738aeeBB9958'	;1
293 101  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
294 101  DO_FCALL/60               $173=     ?0                   ?0                  	;0
295 101  ASSIGN/38                 ?140      16?25                $173                	;0
296 102  JMPZ_EX/46                #175=     16?25                ?300                	;0	>>300
297 102  FETCH_STATIC_PROP_R/173   $176=     180:'rSettings'      181:'XUI'           	;0
298 102  FETCH_DIM_R/81            $177=     $176                 183:'send_xui_header'	;0
299 102  BOOL/52                   #175=     $177                 ?0                  	;0
300 102  BOOL_NOT/13               #178=     #175                 ?0                  	;0	<<296
301 102  JMPZ/43                   ?0        #178                 ?305                	;0	>>305
302 103  NOP/0                     ?0        ?0                   ?0                  	;1
303 103  NOP/0                     ?0        ?0                   ?0                  	;1
304 103  GOTO/253                  ?0        ?334                 ?184                	;0
305 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'array_keys'    	;1	<<301
306 105  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
307 105  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
308 105  FE_RESET_R/77             $180=     $179                 ?324                	;0
309 105  FE_FETCH_R/78             ?0        $180                 16?26               	;324	>>324	<<323
310 106  FETCH_DIM_R/81            $181=     16?8                 16?26               	;0
311 106  FETCH_DIM_R/81            $182=     $181                 187:'argument_key'  	;0
312 106  IS_EQUAL/17               #183=     $182                 188:'headers'       	;0
313 106  BOOL_NOT/13               #184=     #183                 ?0                  	;0
314 106  JMPZ/43                   ?0        #184                 ?319                	;0	>>319
315 107  NOP/0                     ?0        ?0                   ?0                  	;1
316 107  NOP/0                     ?0        ?0                   ?0                  	;1
317 107  NOP/0                     ?0        ?0                   ?0                  	;1
318 107  GOTO/253                  ?0        ?323                 ?189                	;0
319 109  FETCH_DIM_RW/87           $185=     16?8                 16?26               	;0	<<314
320 109  ASSIGN_CONCAT/30          ?152      $185                 190:'value'         	;147
321 109  OP_DATA/137               ?0        191:'
X-XUI-Detect:1' ?0                  	;0
322 110  ASSIGN/38                 ?153      16?22                192:true            	;0
323 112  JMP/42                    ?0        ?309                 ?0                  	;0	>>309
324 112  FE_FREE/127               ?0        $180                 ?0                  	;0	<<308
325 115  JMPZ/43                   ?0        16?22                ?329                	;0	>>329
326 116  NOP/0                     ?0        ?0                   ?0                  	;1
327 116  NOP/0                     ?0        ?0                   ?0                  	;1
328 116  GOTO/253                  ?0        ?334                 ?193                	;0
329 118  NOP/0                     ?0        ?0                   ?0                  	;1	<<325
330 118  NOP/0                     ?0        ?0                   ?0                  	;1
331 118  GOTO/253                  ?0        ?332                 ?194                	;0
332 120  ASSIGN_DIM/147            ?154      16?8                 ?4397406            	;0
333 120  OP_DATA/137               ?0        195:array (
  'value' => 'X-XUI-Detect:1',
  'argument_key' => 'headers',
  'argument_cat' => 'fetch',
  'argument_wprotocol' => 'http',
  'argument_type' => 'text',
  'argument_cmd' => '-headers \'%s
\'',
) ?0                  	;0
334 123  JMPZ_EX/46                #189=     16?25                ?339                	;0	>>339
335 123  FETCH_STATIC_PROP_R/173   $190=     196:'rSettings'      197:'XUI'           	;0
336 123  FETCH_DIM_R/81            $191=     $190                 199:'request_prebuffer'	;0
337 123  IS_EQUAL/17               #192=     $191                 200:1               	;0
338 123  BOOL/52                   #189=     #192                 ?0                  	;0
339 123  BOOL_NOT/13               #193=     #189                 ?0                  	;0	<<334
340 123  JMPZ/43                   ?0        #193                 ?344                	;0	>>344
341 124  NOP/0                     ?0        ?0                   ?0                  	;1
342 124  NOP/0                     ?0        ?0                   ?0                  	;1
343 124  GOTO/253                  ?0        ?462                 ?201                	;0
344 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'array_keys'    	;1	<<340
345 126  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
346 126  DO_FCALL_BY_NAME/131      $194=     ?0                   ?0                  	;0
347 126  FE_RESET_R/77             $195=     $194                 ?363                	;0
348 126  FE_FETCH_R/78             ?0        $195                 16?26               	;363	>>363	<<362
349 127  FETCH_DIM_R/81            $196=     16?8                 16?26               	;0
350 127  FETCH_DIM_R/81            $197=     $196                 204:'argument_key'  	;0
351 127  IS_EQUAL/17               #198=     $197                 205:'headers'       	;0
352 127  BOOL_NOT/13               #199=     #198                 ?0                  	;0
353 127  JMPZ/43                   ?0        #199                 ?358                	;0	>>358
354 128  NOP/0                     ?0        ?0                   ?0                  	;1
355 128  NOP/0                     ?0        ?0                   ?0                  	;1
356 128  NOP/0                     ?0        ?0                   ?0                  	;1
357 128  GOTO/253                  ?0        ?362                 ?206                	;0
358 130  FETCH_DIM_RW/87           $200=     16?8                 16?26               	;0	<<353
359 130  ASSIGN_CONCAT/30          ?167      $200                 207:'value'         	;147
360 130  OP_DATA/137               ?0        208:'
X-XUI-Prebuffer:1' ?0                  	;0
361 131  ASSIGN/38                 ?168      16?22                209:true            	;0
362 133  JMP/42                    ?0        ?348                 ?0                  	;0	>>348
363 133  FE_FREE/127               ?0        $195                 ?0                  	;0	<<347
364 135  NOP/0                     ?0        ?0                   ?0                  	;1
365 135  NOP/0                     ?0        ?0                   ?0                  	;1
366 135  GOTO/253                  ?0        ?456                 ?210                	;0
367 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'strtolower'    	;1
368 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'substr'        	;3
369 137  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
370 137  SEND_VAL_EX/116           ?96       215:0                ?2                  	;0
371 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'strpos'        	;2
372 137  SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
373 137  SEND_VAL_EX/116           ?96       218:'://'            ?2                  	;0
374 137  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
375 137  SEND_VAR_NO_REF_EX/50     ?112      $203                 ?3                  	;0
376 137  DO_FCALL_BY_NAME/131      $204=     ?0                   ?0                  	;0
377 137  SEND_VAR_NO_REF_EX/50     ?80       $204                 ?1                  	;0
378 137  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
379 137  ASSIGN/38                 ?172      16?27                $205                	;0
380 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'implode'       	;2
381 138  SEND_VAL_EX/116           ?80       221:' '              ?1                  	;0
382 138  INIT_STATIC_METHOD_CALL/113 ?0        222:'XUI'            224:'a0779cB0A5bDf6fF'	;3
383 138  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
384 138  SEND_VAR_EX/66            ?96       16?27                ?2                  	;0
385 138  SEND_VAL_EX/116           ?112      226:'fetch'          ?3                  	;0
386 138  DO_FCALL/60               $207=     ?0                   ?0                  	;0
387 138  SEND_VAR_NO_REF_EX/50     ?96       $207                 ?2                  	;0
388 138  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
389 138  ASSIGN/38                 ?175      16?19                $208                	;0
390 139  JMPZ_EX/46                #210=     16?25                ?394                	;0	>>394
391 139  FETCH_STATIC_PROP_R/173   $211=     227:'rSettings'      228:'XUI'           	;0
392 139  FETCH_DIM_R/81            $212=     $211                 230:'api_probe'     	;0
393 139  BOOL/52                   #210=     $212                 ?0                  	;0
394 139  BOOL_NOT/13               #213=     #210                 ?0                  	;0	<<390
395 139  JMPZ/43                   ?0        #213                 ?399                	;0	>>399
396 140  NOP/0                     ?0        ?0                   ?0                  	;1
397 140  NOP/0                     ?0        ?0                   ?0                  	;1
398 140  GOTO/253                  ?0        ?175                 ?231                	;0
399 142  FETCH_DIM_R/81            $214=     16?24                232:'scheme'        	;0	<<395
400 142  CONCAT/8                  #215=     $214                 233:'://'           	;0
401 142  FETCH_DIM_R/81            $216=     16?24                234:'host'          	;0
402 142  CONCAT/8                  #217=     #215                 $216                	;0
403 142  CONCAT/8                  #218=     #217                 235:':'             	;0
404 142  FETCH_DIM_R/81            $219=     16?24                236:'port'          	;0
405 142  CONCAT/8                  #220=     #218                 $219                	;0
406 142  CONCAT/8                  #221=     #220                 237:'/probe/'       	;0
407 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'base64_encode' 	;1
408 142  FETCH_DIM_FUNC_ARG/93     $222=     16?24                240:'path'          	;1
409 142  SEND_VAR_EX/66            ?80       $222                 ?1                  	;0
410 142  DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
411 142  CONCAT/8                  #224=     #221                 $223                	;0
412 142  ASSIGN/38                 ?191      16?28                #224                	;0
413 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'round'         	;1
414 143  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'microtime'     	;1
415 143  SEND_VAL_EX/116           ?80       245:true             ?1                  	;0
416 143  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
417 143  MUL/3                     #227=     $226                 246:1000            	;0
418 143  SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
419 143  DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
420 143  ASSIGN/38                 ?195      16?18                $228                	;0
421 144  NOP/0                     ?0        ?0                   ?0                  	;1
422 144  NOP/0                     ?0        ?0                   ?0                  	;1
423 144  GOTO/253                  ?0        ?424                 ?247                	;0
424 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'json_decode'   	;2
425 146  INIT_STATIC_METHOD_CALL/113 ?0        250:'XUI'            252:'C6CEEC588476Ec43'	;1
426 146  SEND_VAR_EX/66            ?80       16?28                ?1                  	;0
427 146  DO_FCALL/60               $230=     ?0                   ?0                  	;0
428 146  SEND_VAR_NO_REF_EX/50     ?80       $230                 ?1                  	;0
429 146  SEND_VAL_EX/116           ?96       254:true             ?2                  	;0
430 146  DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
431 146  ASSIGN/38                 ?198      16?3                 $231                	;0
432 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   255:'round'         	;1
433 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'microtime'     	;1
434 147  SEND_VAL_EX/116           ?80       259:true             ?1                  	;0
435 147  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
436 147  MUL/3                     #234=     $233                 260:1000            	;0
437 147  SEND_VAL_EX/116           ?80       #234                 ?1                  	;0
438 147  DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
439 147  SUB/2                     #236=     $235                 16?18               	;0
440 147  ASSIGN/38                 ?203      16?16                #236                	;0
441 148  JMPZ_EX/46                #238=     16?3                 ?444                	;0	>>444
442 148  ISSET_ISEMPTY_DIM_OBJ/115 #239=     16?3                 261:'streams'       	;33554432
443 148  BOOL/52                   #238=     #239                 ?0                  	;0
444 148  BOOL_NOT/13               #240=     #238                 ?0                  	;0	<<441
445 148  JMPZ/43                   ?0        #240                 ?449                	;0	>>449
446 149  NOP/0                     ?0        ?0                   ?0                  	;1
447 149  NOP/0                     ?0        ?0                   ?0                  	;1
448 149  GOTO/253                  ?0        ?175                 ?262                	;0
449 151  ECHO/40                   ?0        263:'Got stream information via API
' ?0                  	;0	<<445
450 152  FE_FREE/127               ?0        $119                 ?2                  	;1
451 152  NOP/0                     ?0        ?0                   ?0                  	;1
452 152  GOTO/253                  ?0        ?482                 ?264                	;0
453 153  NOP/0                     ?0        ?0                   ?0                  	;1
454 153  NOP/0                     ?0        ?0                   ?0                  	;1
455 153  GOTO/253                  ?0        ?175                 ?265                	;0
456 156  JMPZ/43                   ?0        16?22                ?460                	;0	>>460
457 157  NOP/0                     ?0        ?0                   ?0                  	;1
458 157  NOP/0                     ?0        ?0                   ?0                  	;1
459 157  GOTO/253                  ?0        ?462                 ?266                	;0
460 159  ASSIGN_DIM/147            ?207      16?8                 ?4397406            	;0	<<456
461 159  OP_DATA/137               ?0        267:array (
  'value' => 'X-XUI-Prebuffer:1',
  'argument_key' => 'headers',
  'argument_cat' => 'fetch',
  'argument_wprotocol' => 'http',
  'argument_type' => 'text',
  'argument_cmd' => '-headers \'%s
\'',
) ?0                  	;0
462 162  NOP/0                     ?0        ?0                   ?0                  	;1
463 162  NOP/0                     ?0        ?0                   ?0                  	;1
464 162  GOTO/253                  ?0        ?367                 ?268                	;0
465 165  JMPZ_EX/46                #242=     16?3                 ?468                	;0	>>468
466 165  ISSET_ISEMPTY_DIM_OBJ/115 #243=     16?3                 269:'streams'       	;33554432
467 165  BOOL/52                   #242=     #243                 ?0                  	;0
468 165  BOOL_NOT/13               #244=     #242                 ?0                  	;0	<<465
469 165  JMPZ/43                   ?0        #244                 ?473                	;0	>>473
470 166  NOP/0                     ?0        ?0                   ?0                  	;1
471 166  NOP/0                     ?0        ?0                   ?0                  	;1
472 166  GOTO/253                  ?0        ?477                 ?270                	;0
473 168  ECHO/40                   ?0        271:'Got stream information via ffprobe
' ?0                  	;0	<<469
474 169  FE_FREE/127               ?0        $119                 ?2                  	;1
475 169  NOP/0                     ?0        ?0                   ?0                  	;1
476 169  GOTO/253                  ?0        ?482                 ?272                	;0
477 171  NOP/0                     ?0        ?0                   ?0                  	;1
478 171  NOP/0                     ?0        ?0                   ?0                  	;1
479 171  GOTO/253                  ?0        ?213                 ?273                	;0
480 172  JMP/42                    ?0        ?171                 ?0                  	;0	>>171
481 172  FE_FREE/127               ?0        $119                 ?0                  	;0	<<170
482 175  NOP/0                     ?0        ?0                   ?0                  	;1
483 175  GOTO/253                  ?0        ?126                 ?274                	;0
484 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'intval'        	;1
485 177  DIV/4                     #245=     16?10                277:1000000         	;0
486 177  SEND_VAL_EX/116           ?80       #245                 ?1                  	;0
487 177  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
488 177  FETCH_STATIC_PROP_R/173   $247=     278:'rSettings'      279:'XUI'           	;0
489 177  FETCH_DIM_R/81            $248=     $247                 281:'probe_extra_wait'	;0
490 177  ADD/1                     #249=     $246                 $248                	;0
491 177  ASSIGN/38                 ?216      16?29                #249                	;0
492 178  FETCH_STATIC_PROP_R/173   $251=     282:'rSettings'      283:'XUI'           	;0
493 178  FETCH_DIM_R/81            $252=     $251                 285:'on_demand_max_probe'	;0
494 178  IS_SMALLER/19             #253=     $252                 16?29               	;0
495 178  JMPZ_EX/46                #253=     #253                 ?500                	;0	>>500
496 178  FETCH_STATIC_PROP_R/173   $254=     286:'rSettings'      287:'XUI'           	;0
497 178  FETCH_DIM_R/81            $255=     $254                 289:'on_demand_max_probe'	;0
498 178  IS_SMALLER/19             #256=     290:0                $255                	;0
499 178  BOOL/52                   #253=     #256                 ?0                  	;0
500 178  BOOL_NOT/13               #257=     #253                 ?0                  	;0	<<495
501 178  JMPZ/43                   ?0        #257                 ?504                	;0	>>504
502 179  NOP/0                     ?0        ?0                   ?0                  	;1
503 179  GOTO/253                  ?0        ?510                 ?291                	;0
504 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'intval'        	;1	<<501
505 181  FETCH_STATIC_PROP_FUNC_ARG/177 $258=     294:'rSettings'      295:'XUI'           	;1
506 181  FETCH_DIM_FUNC_ARG/93     $259=     $258                 297:'on_demand_max_probe'	;1
507 181  SEND_VAR_EX/66            ?80       $259                 ?1                  	;0
508 181  DO_FCALL_BY_NAME/131      $260=     ?0                   ?0                  	;0
509 181  ASSIGN/38                 ?227      16?29                $260                	;0
510 183  ROPE_INIT/54              #263=     ?0                   298:'timeout '      	;3
511 183  ROPE_ADD/55               #263=     #263                 16?29               	;1
512 183  ROPE_END/56               #262=     #263                 299:' '             	;2
513 183  FETCH_STATIC_PROP_R/173   $265=     300:'rFFPROBE'       301:'XUI'           	;0
514 183  CONCAT/8                  #266=     #262                 $265                	;0
515 183  ROPE_INIT/54              #268=     ?0                   303:' {FETCH_OPTIONS} -probesize '	;5
516 183  ROPE_ADD/55               #268=     #268                 16?9                	;1
517 183  ROPE_ADD/55               #268=     #268                 304:' -analyzeduration '	;2
518 183  ROPE_ADD/55               #268=     #268                 16?10               	;3
519 183  ROPE_END/56               #267=     #268                 305:' -i {STREAM_SOURCE} -loglevel error -print_format json -show_streams -show_format 2>'	;4
520 183  CONCAT/8                  #271=     #266                 #267                	;0
521 183  FETCH_CONSTANT/99         #272=     ?0                   306:'STREAMS_TMP_PATH'	;16
522 183  CONCAT/8                  #273=     #271                 #272                	;0
523 183  FETCH_DIM_R/81            $274=     16?1                 309:'id'            	;0
524 183  CONCAT/8                  #275=     #273                 $274                	;0
525 183  CONCAT/8                  #276=     #275                 310:'._errors'      	;0
526 183  ASSIGN/38                 ?243      16?21                #276                	;0
527 184  NOP/0                     ?0        ?0                   ?0                  	;1
528 184  GOTO/253                  ?0        ?162                 ?311                	;0
529 186  INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'intval'        	;1
530 186  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'explode'       	;2
531 186  SEND_VAL_EX/116           ?80       316:'/'              ?1                  	;0
532 186  FETCH_DIM_FUNC_ARG/93     $278=     16?3                 317:'codecs'        	;2
533 186  FETCH_DIM_FUNC_ARG/93     $279=     $278                 318:'video'         	;2
534 186  FETCH_DIM_FUNC_ARG/93     $280=     $279                 319:'avg_frame_rate'	;2
535 186  SEND_VAR_EX/66            ?96       $280                 ?2                  	;0
536 186  DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
537 186  SEPARATE/156              $281=     $281                 ?0                  	;0
538 186  FETCH_DIM_FUNC_ARG/93     $282=     $281                 320:0               	;1
539 186  SEND_VAR_EX/66            ?80       $282                 ?1                  	;0
540 186  DO_FCALL_BY_NAME/131      $283=     ?0                   ?0                  	;0
541 186  JMP_SET/152               #284=     $283                 ?543                	;0
542 186  QM_ASSIGN/22              #284=     321:0                ?0                  	;0
543 186  ASSIGN/38                 ?251      16?6                 #284                	;0
544 188  IS_SMALLER_OR_EQUAL/20    #286=     322:1000             16?6                	;0
545 188  BOOL_NOT/13               #287=     #286                 ?0                  	;0
546 188  JMPZ/43                   ?0        #287                 ?549                	;0	>>549
547 189  NOP/0                     ?0        ?0                   ?0                  	;1
548 189  GOTO/253                  ?0        ?554                 ?323                	;0
549 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   324:'intval'        	;1	<<546
550 191  DIV/4                     #288=     16?6                 326:1000            	;0
551 191  SEND_VAL_EX/116           ?80       #288                 ?1                  	;0
552 191  DO_FCALL_BY_NAME/131      $289=     ?0                   ?0                  	;0
553 191  ASSIGN/38                 ?256      16?6                 $289                	;0
554 193  NOP/0                     ?0        ?0                   ?0                  	;1
555 193  GOTO/253                  ?0        ?54                  ?327                	;0
556 194  JMP/42                    ?0        ?11                  ?0                  	;0	>>11
557 194  FE_FREE/127               ?0        $38                  ?0                  	;0	<<10
558 197  GOTO/253                  ?0        ?559                 ?328                	;0
559 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'sleep'         	;1
560 200  SEND_VAL_EX/116           ?80       331:60               ?1                  	;0
561 200  DO_FCALL_BY_NAME/131      ?257      ?0                   ?0                  	;0
562 201  GOTO/253                  ?0        ?642                 ?332                	;0
563 203  INIT_FCALL_BY_NAME/59     ?0        ?0                   333:'is_object'     	;1
564 203  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
565 203  DO_FCALL_BY_NAME/131      $292=     ?0                   ?0                  	;0
566 203  BOOL_NOT/13               #293=     $292                 ?0                  	;0
567 203  JMPZ/43                   ?0        #293                 ?569                	;0	>>569
568 204  GOTO/253                  ?0        ?637                 ?335                	;0
569 206  GOTO/253                  ?0        ?635                 ?336                	;0	<<567
570 209  INIT_STATIC_METHOD_CALL/113 ?0        340:'XUI'            342:'AC49b56DbE10e52c'	;1
571 209  SEND_VAL_EX/116           ?80       344:true             ?1                  	;0
572 209  DO_FCALL/60               $295=     ?0                   ?0                  	;0
573 209  FETCH_STATIC_PROP_W/174   $294=     337:'rSettings'      338:'XUI'           	;0
574 209  ASSIGN/38                 ?262      $294                 $295                	;0
575 210  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'time'          	;0
576 210  DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
577 210  ASSIGN/38                 ?264      16?30                $297                	;0
578 212  INIT_METHOD_CALL/112      ?0        16?0                 347:'query'         	;3
579 212  SEND_VAL_EX/116           ?80       349:'SELECT `streams`.* FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams_servers`.`pid` IS NULL AND `streams_servers`.`on_demand` = 1 AND `streams_servers`.`parent_id` IS NULL AND `streams`.`type` = 1 AND `streams`.`direct_source` = 0 AND `streams_servers`.`server_id` = ? AND (UNIX_TIMESTAMP() - (SELECT MAX(`date`) FROM `ondemand_check` WHERE `stream_id` = `streams`.`id` AND `server_id` = `streams_servers`.`server_id`) > ? OR (SELECT MAX(`date`) FROM `ondemand_check` WHERE `stream_id` = `streams`.`id` AND `server_id` = `streams_servers`.`server_id`) IS NULL);' ?1                  	;0
580 212  FETCH_CONSTANT/99         #299=     ?0                   350:'SERVER_ID'     	;16
581 212  SEND_VAL_EX/116           ?96       #299                 ?2                  	;0
582 212  FETCH_STATIC_PROP_R/173   $300=     353:'rSettings'      354:'XUI'           	;0
583 212  FETCH_DIM_R/81            $301=     $300                 356:'on_demand_scan_time'	;0
584 212  JMP_SET/152               #302=     $301                 ?586                	;0
585 212  QM_ASSIGN/22              #302=     357:3600             ?0                  	;0
586 212  SEND_VAL_EX/116           ?112      #302                 ?3                  	;0
587 212  DO_FCALL/60               $303=     ?0                   ?0                  	;0
588 212  JMPZ/43                   ?0        $303                 ?590                	;0	>>590
589 213  GOTO/253                  ?0        ?2                   ?358                	;0
590 215  GOTO/253                  ?0        ?1                   ?359                	;0	<<588
591 217  INIT_FCALL_BY_NAME/59     ?0        ?0                   360:'posix_getpwuid'	;1	<<0
592 217  INIT_FCALL_BY_NAME/59     ?0        ?0                   362:'posix_geteuid' 	;0
593 217  DO_FCALL_BY_NAME/131      $304=     ?0                   ?0                  	;0
594 217  SEND_VAR_NO_REF_EX/50     ?80       $304                 ?1                  	;0
595 217  DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
596 217  FETCH_DIM_R/81            $306=     $305                 364:'name'          	;0
597 217  IS_NOT_EQUAL/18           #307=     $306                 365:'xui'           	;0
598 217  BOOL_NOT/13               #308=     #307                 ?0                  	;0
599 217  JMPZ/43                   ?0        #308                 ?601                	;0	>>601
600 218  GOTO/253                  ?0        ?602                 ?366                	;0
601 220  EXIT/79                   ?0        367:'Please run as XUI!
' ?0                  	;0	<<599
602 222  BEGIN_SILENCE/57          #309=     ?0                   ?0                  	;0
603 222  FETCH_R/80                $310=     368:'argc'           ?0                  	;268435456
604 222  END_SILENCE/58            ?0        #309                 ?0                  	;0
605 222  JMPZ/43                   ?0        $310                 ?607                	;0	>>607
606 223  GOTO/253                  ?0        ?609                 ?369                	;0
607 225  EXIT/79                   ?0        370:0                ?0                  	;0	<<605
608 226  GOTO/253                  ?0        ?609                 ?371                	;0
609 229  INIT_FCALL_BY_NAME/59     ?0        ?0                   372:'set_time_limit'	;1
610 229  SEND_VAL_EX/116           ?80       374:0                ?1                  	;0
611 229  DO_FCALL_BY_NAME/131      ?277      ?0                   ?0                  	;0
612 230  INIT_FCALL_BY_NAME/59     ?0        ?0                   375:'str_replace'   	;3
613 230  SEND_VAL_EX/116           ?80       377:'\\'             ?1                  	;0
614 230  SEND_VAL_EX/116           ?96       378:'/'              ?2                  	;0
615 230  INIT_FCALL_BY_NAME/59     ?0        ?0                   379:'dirname'       	;1
616 230  FETCH_DIM_FUNC_ARG/93     $312=     16?31                381:0               	;1
617 230  SEND_VAR_EX/66            ?80       $312                 ?1                  	;0
618 230  DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
619 230  SEND_VAR_NO_REF_EX/50     ?112      $313                 ?3                  	;0
620 230  DO_FCALL_BY_NAME/131      $314=     ?0                   ?0                  	;0
621 230  CONCAT/8                  #315=     $314                 382:'/../../www/init.php'	;0
622 230  INCLUDE_OR_EVAL/73        ?282      #315                 ?0                  	;8
623 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'shell_exec'    	;1
624 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   385:'getmypid'      	;0
625 231  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
626 231  CONCAT/8                  #318=     387:'kill -9 $(ps aux | grep scanner | grep -v grep | grep -v ' $317                	;0
627 231  CONCAT/8                  #319=     #318                 388:' | awk \'{print $2}\')'	;0
628 231  SEND_VAL_EX/116           ?80       #319                 ?1                  	;0
629 231  DO_FCALL_BY_NAME/131      ?286      ?0                   ?0                  	;0
630 232  FETCH_STATIC_PROP_R/173   $321=     389:'rSettings'      390:'XUI'           	;0
631 232  FETCH_DIM_R/81            $322=     $321                 392:'on_demand_checker'	;0
632 232  JMPZ/43                   ?0        $322                 ?634                	;0	>>634
633 233  GOTO/253                  ?0        ?652                 ?393                	;0
634 235  GOTO/253                  ?0        ?650                 ?394                	;0	<<632
635 237  INIT_METHOD_CALL/112      ?0        16?0                 395:'close_mysql'   	;0
636 237  DO_FCALL/60               ?289      ?0                   ?0                  	;0
637 239  GOTO/253                  ?0        ?675                 ?397                	;0
638 241  INIT_FCALL_BY_NAME/59     ?0        ?0                   398:'md5_file'      	;1
639 241  SEND_VAL_EX/116           ?80       400:'includes\\cli\\scanner.php' ?1                  	;0
640 241  DO_FCALL_BY_NAME/131      $324=     ?0                   ?0                  	;0
641 241  ASSIGN/38                 ?291      16?32                $324                	;0
642 243  JMPZ/43                   ?0        401:false            ?644                	;0	>>644
643 244  GOTO/253                  ?0        ?563                 ?402                	;0
644 246  INIT_METHOD_CALL/112      ?0        16?0                 403:'ping'          	;0	<<642
645 246  DO_FCALL/60               $326=     ?0                   ?0                  	;0
646 246  JMPZ/43                   ?0        $326                 ?648                	;0	>>648
647 247  GOTO/253                  ?0        ?655                 ?405                	;0
648 249  GOTO/253                  ?0        ?563                 ?406                	;0	<<646
649 250  GOTO/253                  ?0        ?655                 ?407                	;0
650 252  ECHO/40                   ?0        408:'On-Demand - Source Scanner is disabled.
' ?0                  	;0
651 253  EXIT/79                   ?0        ?0                   ?0                  	;0
652 255  ASSIGN/38                 ?293      16?30                409:NULL            	;0
653 256  ASSIGN/38                 ?294      16?33                410:60              	;0
654 257  GOTO/253                  ?0        ?638                 ?411                	;0
655 260  BOOL_NOT/13               #329=     16?30                ?0                  	;0
656 260  JMPNZ_EX/47               #329=     #329                 ?662                	;0	>>662
657 260  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'time'          	;0
658 260  DO_FCALL_BY_NAME/131      $330=     ?0                   ?0                  	;0
659 260  SUB/2                     #331=     $330                 16?30               	;0
660 260  IS_SMALLER_OR_EQUAL/20    #332=     16?33                #331                	;0
661 260  BOOL/52                   #329=     #332                 ?0                  	;0
662 260  BOOL_NOT/13               #333=     #329                 ?0                  	;0	<<656
663 260  JMPZ/43                   ?0        #333                 ?665                	;0	>>665
664 261  GOTO/253                  ?0        ?578                 ?414                	;0
665 263  INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'md5_file'      	;1	<<663
666 263  SEND_VAL_EX/116           ?80       417:'includes\\cli\\scanner.php' ?1                  	;0
667 263  DO_FCALL_BY_NAME/131      $334=     ?0                   ?0                  	;0
668 263  IS_NOT_EQUAL/18           #335=     $334                 16?32               	;0
669 263  BOOL_NOT/13               #336=     #335                 ?0                  	;0
670 263  JMPZ/43                   ?0        #336                 ?672                	;0	>>672
671 264  GOTO/253                  ?0        ?570                 ?418                	;0
672 266  ECHO/40                   ?0        419:'File changed! Break.
' ?0                  	;0	<<670
673 267  GOTO/253                  ?0        ?563                 ?420                	;0
674 268  GOTO/253                  ?0        ?570                 ?421                	;0
675 270  INIT_FCALL_BY_NAME/59     ?0        ?0                   422:'shell_exec'    	;1
676 270  FETCH_CONSTANT/99         #337=     ?0                   424:'PHP_BIN'       	;16
677 270  CONCAT/8                  #338=     427:'(sleep 1; '     #337                	;0
678 270  CONCAT/8                  #339=     #338                 428:' '             	;0
679 270  CONCAT/8                  #340=     #339                 429:'includes\\cli\\scanner.php'	;0
680 270  CONCAT/8                  #341=     #340                 430:' ) > /dev/null 2>/dev/null &'	;0
681 270  SEND_VAL_EX/116           ?80       #341                 ?1                  	;0
682 270  DO_FCALL_BY_NAME/131      ?308      ?0                   ?0                  	;0
683 271  NOP/0                     ?0        431:1                ?0                  	;4294967295
*/

?>