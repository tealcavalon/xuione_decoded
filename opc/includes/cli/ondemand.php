<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?341                 ?0                  	;0	>>341
1   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'usleep'          	;1
2   7    SEND_VAL_EX/116           ?80       3:1000000            ?1                  	;0
3   7    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   8    GOTO/253                  ?0        ?438                 ?4                  	;0
5   10   GOTO/253                  ?0        ?64                  ?5                  	;0
6   12   INIT_METHOD_CALL/112      ?0        16?0                 6:'get_rows'        	;0
7   12   DO_FCALL/60               $17=      ?0                   ?0                  	;0
8   12   FE_RESET_R/77             $18=      $17                  ?18                 	;0
9   12   FE_FETCH_R/78             ?0        $18                  16?1                	;18	>>18	<<17
10  13   FETCH_DIM_R/81            $20=      16?1                 8:'stream_id'       	;0
11  13   ASSIGN_DIM/147            ?3        16?2                 ?4414262            	;0
12  13   OP_DATA/137               ?0        $20                  ?0                  	;0
13  14   FETCH_DIM_R/81            $21=      16?1                 9:'stream_id'       	;0
14  14   FETCH_DIM_R/81            $23=      16?1                 10:'attached'       	;0
15  14   ASSIGN_DIM/147            ?6        16?3                 $21                 	;0
16  14   OP_DATA/137               ?0        $23                  ?0                  	;0
17  15   JMP/42                    ?0        ?9                   ?0                  	;0	>>9
18  15   FE_FREE/127               ?0        $18                  ?0                  	;0	<<8
19  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'count'          	;1
20  18   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
21  18   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
22  18   IS_SMALLER/19             #25=      13:0                 $24                 	;0
23  18   BOOL_NOT/13               #26=      #25                  ?0                  	;0
24  18   JMPZ/43                   ?0        #26                  ?26                 	;0	>>26
25  19   GOTO/253                  ?0        ?107                 ?14                 	;0
26  21   INIT_STATIC_METHOD_CALL/113 ?0        15:'XUI'             17:'getStreamConnections'	;3	<<24
27  21   SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
28  21   SEND_VAL_EX/116           ?96       19:false             ?2                  	;0
29  21   SEND_VAL_EX/116           ?112      20:false             ?3                  	;0
30  21   DO_FCALL/60               $27=      ?0                   ?0                  	;0
31  21   ASSIGN/38                 ?12       16?4                 $27                 	;0
32  22   FE_RESET_R/77             $29=      16?2                 ?51                 	;0
33  22   FE_FETCH_R/78             ?0        $29                  16?5                	;51	>>51	<<50
34  23   INIT_ARRAY/71             #31=      16?5                 21:'stream_id'      	;14
35  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'count'          	;1
36  23   FETCH_CONSTANT/99         #33=      ?0                   24:'SERVER_ID'      	;16
37  23   FETCH_DIM_FUNC_ARG/93     $32=      16?4                 16?5                	;1
38  23   FETCH_DIM_FUNC_ARG/93     $34=      $32                  #33                 	;1
39  23   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
40  23   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
41  23   JMP_SET/152               #36=      $35                  ?43                 	;0
42  23   QM_ASSIGN/22              #36=      27:0                 ?0                  	;0
43  23   ADD_ARRAY_ELEMENT/72      #31=      #36                  28:'online_clients' 	;0
44  23   FETCH_DIM_R/81            $37=      16?3                 16?5                	;0
45  23   JMP_SET/152               #38=      $37                  ?47                 	;0
46  23   QM_ASSIGN/22              #38=      29:0                 ?0                  	;0
47  23   ADD_ARRAY_ELEMENT/72      #31=      #38                  30:'attached'       	;0
48  23   ASSIGN_DIM/147            ?14       16?6                 ?3                  	;0
49  23   OP_DATA/137               ?0        #31                  ?0                  	;0
50  24   JMP/42                    ?0        ?33                  ?0                  	;0	>>33
51  24   FE_FREE/127               ?0        $29                  ?0                  	;0	<<32
52  26   GOTO/253                  ?0        ?107                 ?31                 	;0
53  29   INIT_METHOD_CALL/112      ?0        16?0                 32:'num_rows'       	;0
54  29   DO_FCALL/60               $39=      ?0                   ?0                  	;0
55  29   IS_SMALLER/19             #40=      34:0                 $39                 	;0
56  29   BOOL_NOT/13               #41=      #40                  ?0                  	;0
57  29   JMPZ/43                   ?0        #41                  ?59                 	;0	>>59
58  30   GOTO/253                  ?0        ?62                  ?35                 	;0
59  32   INIT_METHOD_CALL/112      ?0        16?0                 36:'get_rows'       	;0	<<57
60  32   DO_FCALL/60               $42=      ?0                   ?0                  	;0
61  32   ASSIGN/38                 ?27       16?6                 $42                 	;0
62  34   GOTO/253                  ?0        ?107                 ?38                 	;0
63  35   GOTO/253                  ?0        ?370                 ?39                 	;0
64  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'is_object'      	;1
65  37   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
66  37   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
67  37   BOOL_NOT/13               #45=      $44                  ?0                  	;0
68  37   JMPZ/43                   ?0        #45                  ?70                 	;0	>>70
69  38   GOTO/253                  ?0        ?72                  ?42                 	;0
70  40   INIT_METHOD_CALL/112      ?0        16?0                 43:'close_mysql'    	;0	<<68
71  40   DO_FCALL/60               ?30       ?0                   ?0                  	;0
72  42   GOTO/253                  ?0        ?451                 ?45                 	;0
73  44   FETCH_STATIC_PROP_R/173   $47=      46:'rSettings'       47:'XUI'            	;0
74  44   FETCH_DIM_R/81            $48=      $47                  49:'redis_handler'  	;0
75  44   JMPZ_EX/46                #49=      $48                  ?85                 	;0	>>85
76  44   FETCH_STATIC_PROP_R/173   $50=      50:'redis'           51:'XUI'            	;0
77  44   BOOL_NOT/13               #51=      $50                  ?0                  	;0
78  44   JMPNZ_EX/47               #51=      #51                  ?84                 	;0	>>84
79  44   FETCH_STATIC_PROP_R/173   $52=      53:'redis'           54:'XUI'            	;0
80  44   INIT_METHOD_CALL/112      ?0        $52                  56:'ping'           	;0
81  44   DO_FCALL/60               $53=      ?0                   ?0                  	;0
82  44   BOOL_NOT/13               #54=      $53                  ?0                  	;0
83  44   BOOL/52                   #51=      #54                  ?0                  	;0
84  44   BOOL/52                   #49=      #51                  ?0                  	;0	<<78
85  44   BOOL_NOT/13               #55=      #49                  ?0                  	;0	<<75
86  44   JMPZ/43                   ?0        #55                  ?88                 	;0	>>88
87  45   GOTO/253                  ?0        ?89                  ?58                 	;0
88  47   GOTO/253                  ?0        ?5                   ?59                 	;0	<<86
89  49   BOOL_NOT/13               #56=      16?7                 ?0                  	;0
90  49   JMPNZ_EX/47               #56=      #56                  ?96                 	;0	>>96
91  49   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'time'           	;0
92  49   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
93  49   SUB/2                     #58=      $57                  16?7                	;0
94  49   IS_SMALLER_OR_EQUAL/20    #59=      16?8                 #58                 	;0
95  49   BOOL/52                   #56=      #59                  ?0                  	;0
96  49   BOOL_NOT/13               #60=      #56                  ?0                  	;0	<<90
97  49   JMPZ/43                   ?0        #60                  ?99                 	;0	>>99
98  50   GOTO/253                  ?0        ?420                 ?62                 	;0
99  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'md5_file'       	;1	<<97
100 52   SEND_VAL_EX/116           ?80       65:'includes\\cli\\ondemand.php' ?1                  	;0
101 52   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
102 52   IS_NOT_EQUAL/18           #62=      $61                  16?9                	;0
103 52   BOOL_NOT/13               #63=      #62                  ?0                  	;0
104 52   JMPZ/43                   ?0        #63                  ?106                	;0	>>106
105 53   GOTO/253                  ?0        ?361                 ?66                 	;0
106 55   GOTO/253                  ?0        ?359                 ?67                 	;0	<<104
107 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'count'          	;1
108 60   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
109 60   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
110 60   IS_SMALLER/19             #65=      70:0                 $64                 	;0
111 60   BOOL_NOT/13               #66=      #65                  ?0                  	;0
112 60   JMPZ/43                   ?0        #66                  ?114                	;0	>>114
113 61   GOTO/253                  ?0        ?1                   ?71                 	;0
114 63   FE_RESET_R/77             $67=      16?6                 ?329                	;0	<<112
115 63   FE_FETCH_R/78             ?0        $67                  16?1                	;329	>>329	<<328
116 64   NOP/0                     ?0        ?0                   ?0                  	;1
117 64   GOTO/253                  ?0        ?302                 ?72                 	;0
118 66   INIT_METHOD_CALL/112      ?0        16?0                 73:'query'          	;4
119 66   SEND_VAL_EX/116           ?80       75:'INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);' ?1                  	;0
120 66   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
121 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   76:'time'           	;0
122 66   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
123 66   SEND_VAR_NO_REF_EX/50     ?112      $68                  ?3                  	;0
124 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'json_encode'    	;1
125 66   INIT_ARRAY/71             #69=      80:'update_stream'   81:'type'           	;10
126 66   ADD_ARRAY_ELEMENT/72      #69=      16?5                 82:'id'             	;0
127 66   SEND_VAL_EX/116           ?80       #69                  ?1                  	;0
128 66   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
129 66   SEND_VAR_NO_REF_EX/50     ?128      $70                  ?4                  	;0
130 66   DO_FCALL/60               ?55       ?0                   ?0                  	;0
131 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'unlink'         	;1
132 67   FETCH_CONSTANT/99         #72=      ?0                   85:'SIGNALS_TMP_PATH'	;16
133 67   CONCAT/8                  #73=      #72                  88:'queue_'         	;0
134 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'intval'         	;1
135 67   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
136 67   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
137 67   CONCAT/8                  #75=      #73                  $74                 	;0
138 67   SEND_VAL_EX/116           ?80       #75                  ?1                  	;0
139 67   DO_FCALL_BY_NAME/131      ?60       ?0                   ?0                  	;0
140 68   INIT_STATIC_METHOD_CALL/113 ?0        91:'XUI'             93:'cac325153A658C37'	;1
141 68   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
142 68   DO_FCALL/60               ?61       ?0                   ?0                  	;0
143 71   NOP/0                     ?0        ?0                   ?0                  	;1
144 71   GOTO/253                  ?0        ?328                 ?95                 	;0
145 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'intval'         	;1
146 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'file_get_contents'	;1
147 73   FETCH_CONSTANT/99         #78=      ?0                   100:'STREAMS_PATH'  	;16
148 73   CONCAT/8                  #79=      #78                  16?5                	;0
149 73   CONCAT/8                  #80=      #79                  103:'_.monitor'     	;0
150 73   SEND_VAL_EX/116           ?80       #80                  ?1                  	;0
151 73   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
152 73   SEND_VAR_NO_REF_EX/50     ?80       $81                  ?1                  	;0
153 73   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
154 73   ASSIGN/38                 ?67       16?11                $82                 	;0
155 74   ASSIGN/38                 $84=      16?13                104:0               	;0
156 74   ASSIGN/38                 ?69       16?12                $84                 	;0
157 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'file_exists'   	;1
158 75   FETCH_CONSTANT/99         #86=      ?0                   107:'SIGNALS_TMP_PATH'	;16
159 75   CONCAT/8                  #87=      #86                  110:'queue_'        	;0
160 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'intval'        	;1
161 75   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
162 75   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
163 75   CONCAT/8                  #89=      #87                  $88                 	;0
164 75   SEND_VAL_EX/116           ?80       #89                  ?1                  	;0
165 75   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
166 75   BOOL_NOT/13               #91=      $90                  ?0                  	;0
167 75   JMPZ/43                   ?0        #91                  ?170                	;0	>>170
168 76   NOP/0                     ?0        ?0                   ?0                  	;1
169 76   GOTO/253                  ?0        ?233                 ?113                	;0
170 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'igbinary_unserialize'	;1	<<167
171 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'file_get_contents'	;1
172 78   FETCH_CONSTANT/99         #92=      ?0                   118:'SIGNALS_TMP_PATH'	;16
173 78   CONCAT/8                  #93=      #92                  121:'queue_'        	;0
174 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'intval'        	;1
175 78   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
176 78   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
177 78   CONCAT/8                  #95=      #93                  $94                 	;0
178 78   SEND_VAL_EX/116           ?80       #95                  ?1                  	;0
179 78   DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
180 78   SEND_VAR_NO_REF_EX/50     ?80       $96                  ?1                  	;0
181 78   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
182 78   JMP_SET/152               #98=      $97                  ?184                	;0
183 78   QM_ASSIGN/22              #98=      124:array (
)        ?0                  	;0
184 78   FE_RESET_R/77             $99=      #98                  ?198                	;0
185 78   FE_FETCH_R/78             ?0        $99                  16?14               	;198	>>198	<<197
186 79   INIT_STATIC_METHOD_CALL/113 ?0        125:'XUI'            127:'e764f10E99C26365'	;2
187 79   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
188 79   SEND_VAL_EX/116           ?96       129:'php-fpm'        ?2                  	;0
189 79   DO_FCALL/60               $100=     ?0                   ?0                  	;0
190 79   BOOL_NOT/13               #101=     $100                 ?0                  	;0
191 79   JMPZ/43                   ?0        #101                 ?195                	;0	>>195
192 80   NOP/0                     ?0        ?0                   ?0                  	;1
193 80   NOP/0                     ?0        ?0                   ?0                  	;1
194 80   GOTO/253                  ?0        ?197                 ?130                	;0
195 82   POST_INC/36               #102=     16?13                ?0                  	;0	<<191
196 82   FREE/70                   ?0        #102                 ?0                  	;0
197 84   JMP/42                    ?0        ?185                 ?0                  	;0	>>185
198 84   FE_FREE/127               ?0        $99                  ?0                  	;0	<<184
199 87   NOP/0                     ?0        ?0                   ?0                  	;1
200 87   GOTO/253                  ?0        ?233                 ?131                	;0
201 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'is_numeric'    	;1
202 89   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
203 89   DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
204 89   JMPZ_EX/46                #104=     $103                 ?207                	;0	>>207
205 89   IS_SMALLER/19             #105=     134:0                16?14               	;0
206 89   BOOL/52                   #104=     #105                 ?0                  	;0
207 89   BOOL_NOT/13               #106=     #104                 ?0                  	;0	<<204
208 89   JMPZ/43                   ?0        #106                 ?211                	;0	>>211
209 90   NOP/0                     ?0        ?0                   ?0                  	;1
210 90   GOTO/253                  ?0        ?215                 ?135                	;0
211 92   INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'posix_kill'    	;2	<<208
212 92   SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
213 92   SEND_VAL_EX/116           ?96       138:9                ?2                  	;0
214 92   DO_FCALL_BY_NAME/131      ?91       ?0                   ?0                  	;0
215 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'shell_exec'    	;1
216 94   FETCH_CONSTANT/99         #108=     ?0                   141:'STREAMS_PATH'  	;16
217 94   CONCAT/8                  #109=     144:'rm -f '         #108                	;0
218 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'intval'        	;1
219 94   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
220 94   DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
221 94   CONCAT/8                  #111=     #109                 $110                	;0
222 94   CONCAT/8                  #112=     #111                 147:'_*'            	;0
223 94   SEND_VAL_EX/116           ?80       #112                 ?1                  	;0
224 94   DO_FCALL_BY_NAME/131      ?97       ?0                   ?0                  	;0
225 95   INIT_METHOD_CALL/112      ?0        16?0                 148:'query'         	;3
226 95   SEND_VAL_EX/116           ?80       150:'UPDATE `streams_servers` SET `bitrate` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`audio_codec` = NULL,`video_codec` = NULL,`resolution` = NULL,`compatible` = 0,`stream_status` = 0,`monitor_pid` = NULL WHERE `stream_id` = ? AND `server_id` = ?' ?1                  	;0
227 95   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
228 95   FETCH_CONSTANT/99         #114=     ?0                   151:'SERVER_ID'     	;16
229 95   SEND_VAL_EX/116           ?112      #114                 ?3                  	;0
230 95   DO_FCALL/60               ?99       ?0                   ?0                  	;0
231 96   NOP/0                     ?0        ?0                   ?0                  	;1
232 96   GOTO/253                  ?0        ?118                 ?154                	;0
233 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'file_exists'   	;1
234 99   FETCH_CONSTANT/99         #116=     ?0                   157:'SIGNALS_TMP_PATH'	;16
235 99   CONCAT/8                  #117=     #116                 160:'admin_'        	;0
236 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'intval'        	;1
237 99   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
238 99   DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
239 99   CONCAT/8                  #119=     #117                 $118                	;0
240 99   SEND_VAL_EX/116           ?80       #119                 ?1                  	;0
241 99   DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
242 99   JMPZ_EX/46                #121=     $120                 ?257                	;0	>>257
243 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'time'          	;0
244 99   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
245 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'filemtime'     	;1
246 99   FETCH_CONSTANT/99         #123=     ?0                   167:'SIGNALS_TMP_PATH'	;16
247 99   CONCAT/8                  #124=     #123                 170:'admin_'        	;0
248 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'intval'        	;1
249 99   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
250 99   DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
251 99   CONCAT/8                  #126=     #124                 $125                	;0
252 99   SEND_VAL_EX/116           ?80       #126                 ?1                  	;0
253 99   DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
254 99   SUB/2                     #128=     $122                 $127                	;0
255 99   IS_SMALLER_OR_EQUAL/20    #129=     #128                 173:30              	;0
256 99   BOOL/52                   #121=     #129                 ?0                  	;0
257 99   BOOL_NOT/13               #130=     #121                 ?0                  	;0	<<242
258 99   JMPZ/43                   ?0        #130                 ?261                	;0	>>261
259 100  NOP/0                     ?0        ?0                   ?0                  	;1
260 100  GOTO/253                  ?0        ?262                 ?174                	;0
261 102  ASSIGN/38                 ?115      16?12                175:1               	;0	<<258
262 104  ADD/1                     #132=     16?13                16?12               	;0
263 104  CONCAT/8                  #133=     176:'Queue: '        #132                	;0
264 104  CONCAT/8                  #134=     #133                 177:'
'             	;0
265 104  ECHO/40                   ?0        #134                 ?0                  	;0
266 105  NOP/0                     ?0        ?0                   ?0                  	;1
267 105  GOTO/253                  ?0        ?268                 ?178                	;0
268 107  IS_EQUAL/17               #135=     16?13                179:0               	;0
269 107  JMPZ_EX/46                #135=     #135                 ?272                	;0	>>272
270 107  IS_EQUAL/17               #136=     16?12                180:0               	;0
271 107  BOOL/52                   #135=     #136                 ?0                  	;0
272 107  JMPZ_EX/46                #135=     #135                 ?278                	;0	>>278	<<269
273 107  INIT_STATIC_METHOD_CALL/113 ?0        181:'XUI'            183:'d93aF048a0E404f2'	;2
274 107  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
275 107  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
276 107  DO_FCALL/60               $137=     ?0                   ?0                  	;0
277 107  BOOL/52                   #135=     $137                 ?0                  	;0
278 107  BOOL_NOT/13               #138=     #135                 ?0                  	;0	<<272
279 107  JMPZ/43                   ?0        #138                 ?282                	;0	>>282
280 108  NOP/0                     ?0        ?0                   ?0                  	;1
281 108  GOTO/253                  ?0        ?143                 ?185                	;0
282 110  ROPE_INIT/54              #140=     ?0                   186:'Killing ID: '  	;3	<<279
283 110  ROPE_ADD/55               #140=     #140                 16?5                	;1
284 110  ROPE_END/56               #139=     #140                 187:'
'             	;2
285 110  ECHO/40                   ?0        #139                 ?0                  	;0
286 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   188:'is_numeric'    	;1
287 111  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
288 111  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
289 111  JMPZ_EX/46                #143=     $142                 ?292                	;0	>>292
290 111  IS_SMALLER/19             #144=     190:0                16?11               	;0
291 111  BOOL/52                   #143=     #144                 ?0                  	;0
292 111  BOOL_NOT/13               #145=     #143                 ?0                  	;0	<<289
293 111  JMPZ/43                   ?0        #145                 ?296                	;0	>>296
294 112  NOP/0                     ?0        ?0                   ?0                  	;1
295 112  GOTO/253                  ?0        ?300                 ?191                	;0
296 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'posix_kill'    	;2	<<293
297 114  SEND_VAR_EX/66            ?80       16?11                ?1                  	;0
298 114  SEND_VAL_EX/116           ?96       194:9                ?2                  	;0
299 114  DO_FCALL_BY_NAME/131      ?130      ?0                   ?0                  	;0
300 116  NOP/0                     ?0        ?0                   ?0                  	;1
301 116  GOTO/253                  ?0        ?201                 ?195                	;0
302 118  FETCH_DIM_R/81            $147=     16?1                 196:'online_clients'	;0
303 118  IS_SMALLER/19             #148=     197:0                $147                	;0
304 118  JMPNZ_EX/47               #148=     #148                 ?308                	;0	>>308
305 118  FETCH_DIM_R/81            $149=     16?1                 198:'attached'      	;0
306 118  IS_SMALLER/19             #150=     199:0                $149                	;0
307 118  BOOL/52                   #148=     #150                 ?0                  	;0
308 118  BOOL_NOT/13               #151=     #148                 ?0                  	;0	<<304
309 118  JMPZ/43                   ?0        #151                 ?312                	;0	>>312
310 119  NOP/0                     ?0        ?0                   ?0                  	;1
311 119  GOTO/253                  ?0        ?314                 ?200                	;0
312 121  NOP/0                     ?0        ?0                   ?0                  	;1	<<309
313 121  GOTO/253                  ?0        ?143                 ?201                	;0
314 123  FETCH_DIM_R/81            $152=     16?1                 202:'stream_id'     	;0
315 123  ASSIGN/38                 ?137      16?5                 $152                	;0
316 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'intval'        	;1
317 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'file_get_contents'	;1
318 124  FETCH_CONSTANT/99         #154=     ?0                   207:'STREAMS_PATH'  	;16
319 124  CONCAT/8                  #155=     #154                 16?5                	;0
320 124  CONCAT/8                  #156=     #155                 210:'_.pid'         	;0
321 124  SEND_VAL_EX/116           ?80       #156                 ?1                  	;0
322 124  DO_FCALL_BY_NAME/131      $157=     ?0                   ?0                  	;0
323 124  SEND_VAR_NO_REF_EX/50     ?80       $157                 ?1                  	;0
324 124  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
325 124  ASSIGN/38                 ?143      16?14                $158                	;0
326 125  NOP/0                     ?0        ?0                   ?0                  	;1
327 125  GOTO/253                  ?0        ?145                 ?211                	;0
328 126  JMP/42                    ?0        ?115                 ?0                  	;0	>>115
329 126  FE_FREE/127               ?0        $67                  ?0                  	;0	<<114
330 128  GOTO/253                  ?0        ?1                   ?212                	;0
331 130  ECHO/40                   ?0        213:'On-Demand - Instant Off setting is disabled.
' ?0                  	;0
332 131  EXIT/79                   ?0        ?0                   ?0                  	;0
333 133  FETCH_STATIC_PROP_R/173   $160=     214:'rSettings'      215:'XUI'           	;0
334 133  FETCH_DIM_R/81            $161=     $160                 217:'redis_handler' 	;0
335 133  BOOL_NOT/13               #162=     $161                 ?0                  	;0
336 133  JMPZ/43                   ?0        #162                 ?338                	;0	>>338
337 134  GOTO/253                  ?0        ?410                 ?218                	;0
338 136  INIT_STATIC_METHOD_CALL/113 ?0        219:'XUI'            221:'d6aEb3175a43f301'	;0	<<336
339 136  DO_FCALL/60               ?147      ?0                   ?0                  	;0
340 137  GOTO/253                  ?0        ?410                 ?223                	;0
341 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'posix_getpwuid'	;1	<<0
342 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'posix_geteuid' 	;0
343 139  DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
344 139  SEND_VAR_NO_REF_EX/50     ?80       $164                 ?1                  	;0
345 139  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
346 139  FETCH_DIM_R/81            $166=     $165                 228:'name'          	;0
347 139  IS_NOT_EQUAL/18           #167=     $166                 229:'xui'           	;0
348 139  BOOL_NOT/13               #168=     #167                 ?0                  	;0
349 139  JMPZ/43                   ?0        #168                 ?351                	;0	>>351
350 140  GOTO/253                  ?0        ?352                 ?230                	;0
351 142  EXIT/79                   ?0        231:'Please run as XUI!
' ?0                  	;0	<<349
352 144  BEGIN_SILENCE/57          #169=     ?0                   ?0                  	;0
353 144  FETCH_R/80                $170=     232:'argc'           ?0                  	;268435456
354 144  END_SILENCE/58            ?0        #169                 ?0                  	;0
355 144  JMPZ/43                   ?0        $170                 ?357                	;0	>>357
356 145  GOTO/253                  ?0        ?384                 ?233                	;0
357 147  EXIT/79                   ?0        234:0                ?0                  	;0	<<355
358 148  GOTO/253                  ?0        ?384                 ?235                	;0
359 150  ECHO/40                   ?0        236:'File changed! Break.
' ?0                  	;0
360 151  GOTO/253                  ?0        ?5                   ?237                	;0
361 153  INIT_STATIC_METHOD_CALL/113 ?0        241:'XUI'            243:'ac49b56DBE10e52c'	;1
362 153  SEND_VAL_EX/116           ?80       245:true             ?1                  	;0
363 153  DO_FCALL/60               $172=     ?0                   ?0                  	;0
364 153  FETCH_STATIC_PROP_W/174   $171=     238:'rSettings'      239:'XUI'           	;0
365 153  ASSIGN/38                 ?157      $171                 $172                	;0
366 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'time'          	;0
367 154  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
368 154  ASSIGN/38                 ?159      16?7                 $174                	;0
369 155  GOTO/253                  ?0        ?420                 ?248                	;0
370 158  ASSIGN/38                 $176=     16?6                 249:array (
)       	;0
371 158  ASSIGN/38                 $177=     16?3                 $176                	;0
372 158  ASSIGN/38                 ?162      16?2                 $177                	;0
373 159  INIT_METHOD_CALL/112      ?0        16?0                 250:'query'         	;3
374 159  SEND_VAL_EX/116           ?80       252:'SELECT t1.stream_id, servers_attached.attached FROM `streams_servers` t1 LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` WHERE t1.pid IS NOT NULL AND t1.pid > 0 AND t1.server_id = ? AND t1.`on_demand` = 1;' ?1                  	;0
375 159  FETCH_CONSTANT/99         #179=     ?0                   253:'SERVER_ID'     	;16
376 159  SEND_VAL_EX/116           ?96       #179                 ?2                  	;0
377 159  FETCH_CONSTANT/99         #180=     ?0                   256:'SERVER_ID'     	;16
378 159  SEND_VAL_EX/116           ?112      #180                 ?3                  	;0
379 159  DO_FCALL/60               $181=     ?0                   ?0                  	;0
380 159  JMPZ/43                   ?0        $181                 ?382                	;0	>>382
381 160  GOTO/253                  ?0        ?383                 ?259                	;0
382 162  GOTO/253                  ?0        ?5                   ?260                	;0	<<380
383 164  GOTO/253                  ?0        ?6                   ?261                	;0
384 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'set_time_limit'	;1
385 167  SEND_VAL_EX/116           ?80       264:0                ?1                  	;0
386 167  DO_FCALL_BY_NAME/131      ?166      ?0                   ?0                  	;0
387 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'str_replace'   	;3
388 168  SEND_VAL_EX/116           ?80       267:'\\'             ?1                  	;0
389 168  SEND_VAL_EX/116           ?96       268:'/'              ?2                  	;0
390 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'dirname'       	;1
391 168  FETCH_DIM_FUNC_ARG/93     $183=     16?15                271:0               	;1
392 168  SEND_VAR_EX/66            ?80       $183                 ?1                  	;0
393 168  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
394 168  SEND_VAR_NO_REF_EX/50     ?112      $184                 ?3                  	;0
395 168  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
396 168  CONCAT/8                  #186=     $185                 272:'/../../www/init.php'	;0
397 168  INCLUDE_OR_EVAL/73        ?171      #186                 ?0                  	;8
398 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'shell_exec'    	;1
399 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'getmypid'      	;0
400 169  DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
401 169  CONCAT/8                  #189=     277:'kill -9 $(ps aux | grep ondemand | grep -v grep | grep -v ' $188                	;0
402 169  CONCAT/8                  #190=     #189                 278:' | awk \'{print $2}\')'	;0
403 169  SEND_VAL_EX/116           ?80       #190                 ?1                  	;0
404 169  DO_FCALL_BY_NAME/131      ?175      ?0                   ?0                  	;0
405 170  FETCH_STATIC_PROP_R/173   $192=     279:'rSettings'      280:'XUI'           	;0
406 170  FETCH_DIM_R/81            $193=     $192                 282:'on_demand_instant_off'	;0
407 170  JMPZ/43                   ?0        $193                 ?409                	;0	>>409
408 171  GOTO/253                  ?0        ?333                 ?283                	;0
409 173  GOTO/253                  ?0        ?331                 ?284                	;0	<<407
410 176  INIT_STATIC_METHOD_CALL/113 ?0        285:'XUI'            287:'C3520d240f17dCB1'	;0
411 176  DO_FCALL/60               $194=     ?0                   ?0                  	;0
412 176  ASSIGN/38                 ?179      16?10                $194                	;0
413 177  ASSIGN/38                 ?180      16?7                 289:NULL            	;0
414 178  ASSIGN/38                 ?181      16?8                 290:60              	;0
415 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'md5_file'      	;1
416 179  SEND_VAL_EX/116           ?80       293:'includes\\cli\\ondemand.php' ?1                  	;0
417 179  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
418 179  ASSIGN/38                 ?183      16?9                 $198                	;0
419 180  GOTO/253                  ?0        ?438                 ?294                	;0
420 183  ASSIGN/38                 ?184      16?6                 295:array (
)       	;0
421 184  FETCH_STATIC_PROP_R/173   $201=     296:'rSettings'      297:'XUI'           	;0
422 184  FETCH_DIM_R/81            $202=     $201                 299:'redis_handler' 	;0
423 184  JMPZ/43                   ?0        $202                 ?425                	;0	>>425
424 185  GOTO/253                  ?0        ?370                 ?300                	;0
425 187  INIT_METHOD_CALL/112      ?0        16?0                 301:'query'         	;4	<<423
426 187  SEND_VAL_EX/116           ?80       303:'SELECT t1.stream_id, clients.online_clients, servers_attached.attached FROM `streams_servers` t1 LEFT JOIN (SELECT stream_id, COUNT(*) as online_clients FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY stream_id) AS clients ON clients.stream_id = t1.stream_id LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` WHERE t1.pid IS NOT NULL AND t1.pid > 0 AND t1.server_id = ? AND t1.`on_demand` = 1;' ?1                  	;0
427 187  FETCH_CONSTANT/99         #203=     ?0                   304:'SERVER_ID'     	;16
428 187  SEND_VAL_EX/116           ?96       #203                 ?2                  	;0
429 187  FETCH_CONSTANT/99         #204=     ?0                   307:'SERVER_ID'     	;16
430 187  SEND_VAL_EX/116           ?112      #204                 ?3                  	;0
431 187  FETCH_CONSTANT/99         #205=     ?0                   310:'SERVER_ID'     	;16
432 187  SEND_VAL_EX/116           ?128      #205                 ?4                  	;0
433 187  DO_FCALL/60               $206=     ?0                   ?0                  	;0
434 187  JMPZ/43                   ?0        $206                 ?436                	;0	>>436
435 188  GOTO/253                  ?0        ?53                  ?313                	;0
436 190  GOTO/253                  ?0        ?5                   ?314                	;0	<<434
437 191  GOTO/253                  ?0        ?53                  ?315                	;0
438 194  JMPZ/43                   ?0        316:false            ?440                	;0	>>440
439 195  GOTO/253                  ?0        ?5                   ?317                	;0
440 197  BOOL_NOT/13               #207=     16?0                 ?0                  	;0	<<438
441 197  JMPNZ_EX/47               #207=     #207                 ?446                	;0	>>446
442 197  INIT_METHOD_CALL/112      ?0        16?0                 318:'ping'          	;0
443 197  DO_FCALL/60               $208=     ?0                   ?0                  	;0
444 197  BOOL_NOT/13               #209=     $208                 ?0                  	;0
445 197  BOOL/52                   #207=     #209                 ?0                  	;0
446 197  BOOL_NOT/13               #210=     #207                 ?0                  	;0	<<441
447 197  JMPZ/43                   ?0        #210                 ?449                	;0	>>449
448 198  GOTO/253                  ?0        ?450                 ?320                	;0
449 200  GOTO/253                  ?0        ?5                   ?321                	;0	<<447
450 202  GOTO/253                  ?0        ?73                  ?322                	;0
451 204  INIT_FCALL_BY_NAME/59     ?0        ?0                   323:'shell_exec'    	;1
452 204  FETCH_CONSTANT/99         #211=     ?0                   325:'PHP_BIN'       	;16
453 204  CONCAT/8                  #212=     328:'(sleep 1; '     #211                	;0
454 204  CONCAT/8                  #213=     #212                 329:' '             	;0
455 204  CONCAT/8                  #214=     #213                 330:'includes\\cli\\ondemand.php'	;0
456 204  CONCAT/8                  #215=     #214                 331:' ) > /dev/null 2>/dev/null &'	;0
457 204  SEND_VAL_EX/116           ?80       #215                 ?1                  	;0
458 204  DO_FCALL_BY_NAME/131      ?200      ?0                   ?0                  	;0
459 205  NOP/0                     ?0        332:1                ?0                  	;4294967295
*/

?>