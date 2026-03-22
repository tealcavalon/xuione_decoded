<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?279                 ?0                  	;0	>>279
1   5    INIT_METHOD_CALL/112      ?0        16?0                 1:'get_rows'        	;0
2   5    DO_FCALL/60               $11=      ?0                   ?0                  	;0
3   5    FE_RESET_R/77             $12=      $11                  ?33                 	;0
4   5    FE_FETCH_R/78             ?0        $12                  16?1                	;33	>>33	<<32
5   6    FETCH_DIM_R/81            $13=      16?1                 3:'pid'             	;0
6   6    JMPZ_EX/46                #14=      $13                  ?21                 	;0	>>21
7   6    INIT_STATIC_METHOD_CALL/113 ?0        4:'XUI'              6:'E764f10E99C26365'	;2
8   6    FETCH_DIM_FUNC_ARG/93     $15=      16?1                 8:'pid'             	;1
9   6    SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
10  6    SEND_VAL_EX/116           ?96       9:'ffmpeg'           ?2                  	;0
11  6    DO_FCALL/60               $16=      ?0                   ?0                  	;0
12  6    JMPNZ_EX/47               #17=      $16                  ?20                 	;0	>>20
13  6    INIT_STATIC_METHOD_CALL/113 ?0        10:'XUI'             12:'e764f10E99C26365'	;2
14  6    FETCH_DIM_FUNC_ARG/93     $18=      16?1                 14:'pid'            	;1
15  6    SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
16  6    FETCH_CONSTANT/99         #19=      ?0                   15:'PHP_BIN'        	;16
17  6    SEND_VAL_EX/116           ?96       #19                  ?2                  	;0
18  6    DO_FCALL/60               $20=      ?0                   ?0                  	;0
19  6    BOOL/52                   #17=      $20                  ?0                  	;0
20  6    BOOL/52                   #14=      #17                  ?0                  	;0	<<12
21  6    JMPZ/43                   ?0        #14                  ?24                 	;0	>>24	<<6
22  7    NOP/0                     ?0        ?0                   ?0                  	;1
23  7    GOTO/253                  ?0        ?29                  ?18                 	;0
24  9    FETCH_DIM_R/81            $22=      16?1                 19:'id'             	;0	<<21
25  9    ASSIGN_DIM/147            ?10       16?2                 ?4397406            	;0
26  9    OP_DATA/137               ?0        $22                  ?0                  	;0
27  10   NOP/0                     ?0        ?0                   ?0                  	;1
28  10   GOTO/253                  ?0        ?32                  ?20                 	;0
29  12   FETCH_DIM_R/81            $24=      16?1                 21:'pid'            	;0
30  12   ASSIGN_DIM/147            ?12       16?3                 ?0                  	;0
31  12   OP_DATA/137               ?0        $24                  ?0                  	;0
32  14   JMP/42                    ?0        ?4                   ?0                  	;0	>>4
33  14   FE_FREE/127               ?0        $12                  ?0                  	;0	<<3
34  18   FETCH_STATIC_PROP_R/173   $25=      22:'rSettings'       23:'XUI'            	;0
35  18   FETCH_DIM_R/81            $26=      $25                  25:'max_encode_movies'	;0
36  18   IS_SMALLER/19             #27=      26:0                 $26                 	;0
37  18   JMPZ/43                   ?0        #27                  ?49                 	;0	>>49
38  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'intval'         	;1
39  18   FETCH_STATIC_PROP_FUNC_ARG/177 $28=      29:'rSettings'       30:'XUI'            	;1
40  18   FETCH_DIM_FUNC_ARG/93     $29=      $28                  32:'max_encode_movies'	;1
41  18   SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
42  18   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
43  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'count'          	;1
44  18   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
45  18   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
46  18   SUB/2                     #32=      $30                  $31                 	;0
47  18   QM_ASSIGN/22              #33=      #32                  ?0                  	;0
48  18   JMP/42                    ?0        ?50                  ?0                  	;0	>>50
49  18   QM_ASSIGN/22              #33=      35:50                ?0                  	;0	<<37
50  18   ASSIGN/38                 ?23       16?4                 #33                 	;0	<<48
51  19   IS_SMALLER/19             #35=      36:0                 16?4                	;0
52  19   BOOL_NOT/13               #36=      #35                  ?0                  	;0
53  19   JMPZ/43                   ?0        #36                  ?55                 	;0	>>55
54  20   GOTO/253                  ?0        ?79                  ?37                 	;0
55  22   GOTO/253                  ?0        ?297                 ?38                 	;0	<<53
56  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'set_time_limit' 	;1
57  25   SEND_VAL_EX/116           ?80       41:0                 ?1                  	;0
58  25   DO_FCALL_BY_NAME/131      ?26       ?0                   ?0                  	;0
59  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'str_replace'    	;3
60  26   SEND_VAL_EX/116           ?80       44:'\\'              ?1                  	;0
61  26   SEND_VAL_EX/116           ?96       45:'/'               ?2                  	;0
62  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'dirname'        	;1
63  26   FETCH_DIM_FUNC_ARG/93     $38=      16?5                 48:0                	;1
64  26   SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
65  26   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
66  26   SEND_VAR_NO_REF_EX/50     ?112      $39                  ?3                  	;0
67  26   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
68  26   CONCAT/8                  #41=      $40                  49:'/../../www/init.php'	;0
69  26   INCLUDE_OR_EVAL/73        ?31       #41                  ?0                  	;8
70  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'shell_exec'     	;1
71  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'getmypid'       	;0
72  27   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
73  27   CONCAT/8                  #44=      54:'kill -9 $(ps aux | grep queue | grep -v grep | grep -v ' $43                 	;0
74  27   CONCAT/8                  #45=      #44                  55:' | awk \'{print $2}\')'	;0
75  27   SEND_VAL_EX/116           ?80       #45                  ?1                  	;0
76  27   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
77  28   ASSIGN/38                 ?36       16?6                 56:NULL             	;0
78  29   GOTO/253                  ?0        ?408                 ?57                 	;0
79  34   INIT_METHOD_CALL/112      ?0        16?0                 58:'query'          	;2
80  34   SEND_VAL_EX/116           ?80       60:'SELECT `id`, `pid` FROM `queue` WHERE `server_id` = ? AND `pid` IS NOT NULL AND `type` = \'channel\' ORDER BY `added` ASC;' ?1                  	;0
81  34   FETCH_CONSTANT/99         #48=      ?0                   61:'SERVER_ID'      	;16
82  34   SEND_VAL_EX/116           ?96       #48                  ?2                  	;0
83  34   DO_FCALL/60               $49=      ?0                   ?0                  	;0
84  34   JMPZ/43                   ?0        $49                  ?86                 	;0	>>86
85  35   GOTO/253                  ?0        ?203                 ?64                 	;0
86  37   GOTO/253                  ?0        ?270                 ?65                 	;0	<<84
87  38   GOTO/253                  ?0        ?203                 ?66                 	;0
88  41   INIT_METHOD_CALL/112      ?0        16?0                 67:'num_rows'       	;0
89  41   DO_FCALL/60               $50=      ?0                   ?0                  	;0
90  41   IS_SMALLER/19             #51=      69:0                 $50                 	;0
91  41   BOOL_NOT/13               #52=      #51                  ?0                  	;0
92  41   JMPZ/43                   ?0        #52                  ?94                 	;0	>>94
93  42   GOTO/253                  ?0        ?192                 ?70                 	;0
94  44   INIT_METHOD_CALL/112      ?0        16?0                 71:'get_rows'       	;0	<<92
95  44   DO_FCALL/60               $53=      ?0                   ?0                  	;0
96  44   FE_RESET_R/77             $54=      $53                  ?191                	;0
97  44   FE_FETCH_R/78             ?0        $54                  16?1                	;191	>>191	<<190
98  45   NOP/0                     ?0        ?0                   ?0                  	;1
99  45   GOTO/253                  ?0        ?155                 ?73                 	;0
100 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'range'          	;2
101 47   SEND_VAL_EX/116           ?80       76:1                 ?1                  	;0
102 47   SEND_VAL_EX/116           ?96       77:3                 ?2                  	;0
103 47   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
104 47   FE_RESET_R/77             $56=      $55                  ?136                	;0
105 47   FE_FETCH_R/78             ?0        $56                  16?7                	;136	>>136	<<135
106 48   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'file_exists'    	;1
107 48   FETCH_CONSTANT/99         #57=      ?0                   80:'CREATED_PATH'   	;16
108 48   FETCH_DIM_R/81            $58=      16?1                 83:'stream_id'      	;0
109 48   CONCAT/8                  #59=      #57                  $58                 	;0
110 48   CONCAT/8                  #60=      #59                  84:'_.create'       	;0
111 48   SEND_VAL_EX/116           ?80       #60                  ?1                  	;0
112 48   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
113 48   BOOL_NOT/13               #62=      $61                  ?0                  	;0
114 48   JMPZ/43                   ?0        #62                  ?118                	;0	>>118
115 49   NOP/0                     ?0        ?0                   ?0                  	;1
116 49   NOP/0                     ?0        ?0                   ?0                  	;1
117 49   GOTO/253                  ?0        ?132                 ?85                 	;0
118 51   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'intval'         	;1	<<114
119 51   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'file_get_contents'	;1
120 51   FETCH_CONSTANT/99         #63=      ?0                   90:'CREATED_PATH'   	;16
121 51   FETCH_DIM_R/81            $64=      16?1                 93:'stream_id'      	;0
122 51   CONCAT/8                  #65=      #63                  $64                 	;0
123 51   CONCAT/8                  #66=      #65                  94:'_.create'       	;0
124 51   SEND_VAL_EX/116           ?80       #66                  ?1                  	;0
125 51   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
126 51   SEND_VAR_NO_REF_EX/50     ?80       $67                  ?1                  	;0
127 51   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
128 51   ASSIGN/38                 ?58       16?8                 $68                 	;0
129 52   FE_FREE/127               ?0        $56                  ?3                  	;1
130 52   NOP/0                     ?0        ?0                   ?0                  	;1
131 52   GOTO/253                  ?0        ?137                 ?95                 	;0
132 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'usleep'         	;1
133 54   SEND_VAL_EX/116           ?80       98:100000            ?1                  	;0
134 54   DO_FCALL_BY_NAME/131      ?59       ?0                   ?0                  	;0
135 55   JMP/42                    ?0        ?105                 ?0                  	;0	>>105
136 55   FE_FREE/127               ?0        $56                  ?0                  	;0	<<104
137 58   JMPZ/43                   ?0        16?8                 ?140                	;0	>>140
138 59   NOP/0                     ?0        ?0                   ?0                  	;1
139 59   GOTO/253                  ?0        ?147                 ?99                 	;0
140 61   FETCH_DIM_R/81            $72=      16?1                 100:'id'            	;0	<<137
141 61   ASSIGN_DIM/147            ?60       16?2                 ?4397406            	;0
142 61   OP_DATA/137               ?0        $72                  ?0                  	;0
143 62   NOP/0                     ?0        ?0                   ?0                  	;1
144 62   GOTO/253                  ?0        ?153                 ?101                	;0
145 63   NOP/0                     ?0        ?0                   ?0                  	;1
146 63   GOTO/253                  ?0        ?147                 ?102                	;0
147 66   INIT_METHOD_CALL/112      ?0        16?0                 103:'query'         	;3
148 66   SEND_VAL_EX/116           ?80       105:'UPDATE `queue` SET `pid` = ? WHERE `id` = ?;' ?1                  	;0
149 66   SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
150 66   FETCH_DIM_FUNC_ARG/93     $73=      16?1                 106:'id'            	;3
151 66   SEND_VAR_EX/66            ?112      $73                  ?3                  	;0
152 66   DO_FCALL/60               ?63       ?0                   ?0                  	;0
153 69   NOP/0                     ?0        ?0                   ?0                  	;1
154 69   GOTO/253                  ?0        ?190                 ?107                	;0
155 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'file_exists'   	;1
156 71   FETCH_CONSTANT/99         #75=      ?0                   110:'CREATED_PATH'  	;16
157 71   FETCH_DIM_R/81            $76=      16?1                 113:'stream_id'     	;0
158 71   CONCAT/8                  #77=      #75                  $76                 	;0
159 71   CONCAT/8                  #78=      #77                  114:'_.create'      	;0
160 71   SEND_VAL_EX/116           ?80       #78                  ?1                  	;0
161 71   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
162 71   BOOL_NOT/13               #80=      $79                  ?0                  	;0
163 71   JMPZ/43                   ?0        #80                  ?166                	;0	>>166
164 72   NOP/0                     ?0        ?0                   ?0                  	;1
165 72   GOTO/253                  ?0        ?173                 ?115                	;0
166 74   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'unlink'        	;1	<<163
167 74   FETCH_CONSTANT/99         #81=      ?0                   118:'CREATED_PATH'  	;16
168 74   FETCH_DIM_R/81            $82=      16?1                 121:'stream_id'     	;0
169 74   CONCAT/8                  #83=      #81                  $82                 	;0
170 74   CONCAT/8                  #84=      #83                  122:'_.create'      	;0
171 74   SEND_VAL_EX/116           ?80       #84                  ?1                  	;0
172 74   DO_FCALL_BY_NAME/131      ?74       ?0                   ?0                  	;0
173 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'shell_exec'    	;1
174 76   FETCH_CONSTANT/99         #86=      ?0                   125:'PHP_BIN'       	;16
175 76   CONCAT/8                  #87=      #86                  128:' '             	;0
176 76   FETCH_CONSTANT/99         #88=      ?0                   129:'CLI_PATH'      	;16
177 76   CONCAT/8                  #89=      #87                  #88                 	;0
178 76   CONCAT/8                  #90=      #89                  132:'created.php '  	;0
179 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'intval'        	;1
180 76   FETCH_DIM_FUNC_ARG/93     $91=      16?1                 135:'stream_id'     	;1
181 76   SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
182 76   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
183 76   CONCAT/8                  #93=      #90                  $92                 	;0
184 76   CONCAT/8                  #94=      #93                  136:' >/dev/null 2>/dev/null &'	;0
185 76   SEND_VAL_EX/116           ?80       #94                  ?1                  	;0
186 76   DO_FCALL_BY_NAME/131      ?84       ?0                   ?0                  	;0
187 77   ASSIGN/38                 ?85       16?8                 137:NULL            	;0
188 78   NOP/0                     ?0        ?0                   ?0                  	;1
189 78   GOTO/253                  ?0        ?100                 ?138                	;0
190 79   JMP/42                    ?0        ?97                  ?0                  	;0	>>97
191 79   FE_FREE/127               ?0        $54                  ?0                  	;0	<<96
192 83   GOTO/253                  ?0        ?359                 ?139                	;0
193 85   GOTO/253                  ?0        ?270                 ?140                	;0
194 87   INIT_STATIC_METHOD_CALL/113 ?0        144:'XUI'            146:'Ac49B56dBE10e52C'	;1
195 87   SEND_VAL_EX/116           ?80       148:true             ?1                  	;0
196 87   DO_FCALL/60               $98=      ?0                   ?0                  	;0
197 87   FETCH_STATIC_PROP_W/174   $97=      141:'rSettings'      142:'XUI'           	;0
198 87   ASSIGN/38                 ?88       $97                  $98                 	;0
199 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'time'          	;0
200 88   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
201 88   ASSIGN/38                 ?90       16?6                 $100                	;0
202 90   GOTO/253                  ?0        ?391                 ?151                	;0
203 93   ASSIGN/38                 ?91       16?3                 152:array (
)       	;0
204 94   INIT_METHOD_CALL/112      ?0        16?0                 153:'num_rows'      	;0
205 94   DO_FCALL/60               $103=     ?0                   ?0                  	;0
206 94   IS_SMALLER/19             #104=     155:0                $103                	;0
207 94   BOOL_NOT/13               #105=     #104                 ?0                  	;0
208 94   JMPZ/43                   ?0        #105                 ?210                	;0	>>210
209 95   GOTO/253                  ?0        ?237                 ?156                	;0
210 97   INIT_METHOD_CALL/112      ?0        16?0                 157:'get_rows'      	;0	<<208
211 97   DO_FCALL/60               $106=     ?0                   ?0                  	;0
212 97   FE_RESET_R/77             $107=     $106                 ?235                	;0
213 97   FE_FETCH_R/78             ?0        $107                 16?1                	;235	>>235	<<234
214 98   FETCH_DIM_R/81            $108=     16?1                 159:'pid'           	;0
215 98   JMPZ_EX/46                #109=     $108                 ?223                	;0	>>223
216 98   INIT_STATIC_METHOD_CALL/113 ?0        160:'XUI'            162:'E764f10E99c26365'	;2
217 98   FETCH_DIM_FUNC_ARG/93     $110=     16?1                 164:'pid'           	;1
218 98   SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
219 98   FETCH_CONSTANT/99         #111=     ?0                   165:'PHP_BIN'       	;16
220 98   SEND_VAL_EX/116           ?96       #111                 ?2                  	;0
221 98   DO_FCALL/60               $112=     ?0                   ?0                  	;0
222 98   BOOL/52                   #109=     $112                 ?0                  	;0
223 98   JMPZ/43                   ?0        #109                 ?226                	;0	>>226	<<215
224 99   NOP/0                     ?0        ?0                   ?0                  	;1
225 99   GOTO/253                  ?0        ?231                 ?168                	;0
226 101  FETCH_DIM_R/81            $114=     16?1                 169:'id'            	;0	<<223
227 101  ASSIGN_DIM/147            ?102      16?2                 ?4397406            	;0
228 101  OP_DATA/137               ?0        $114                 ?0                  	;0
229 102  NOP/0                     ?0        ?0                   ?0                  	;1
230 102  GOTO/253                  ?0        ?234                 ?170                	;0
231 104  FETCH_DIM_R/81            $116=     16?1                 171:'pid'           	;0
232 104  ASSIGN_DIM/147            ?104      16?3                 ?0                  	;0
233 104  OP_DATA/137               ?0        $116                 ?0                  	;0
234 106  JMP/42                    ?0        ?213                 ?0                  	;0	>>213
235 106  FE_FREE/127               ?0        $107                 ?0                  	;0	<<212
236 109  GOTO/253                  ?0        ?237                 ?172                	;0
237 112  FETCH_STATIC_PROP_R/173   $117=     173:'rSettings'      174:'XUI'           	;0
238 112  FETCH_DIM_R/81            $118=     $117                 176:'max_encode_cc' 	;0
239 112  IS_SMALLER/19             #119=     177:0                $118                	;0
240 112  JMPZ/43                   ?0        #119                 ?252                	;0	>>252
241 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'intval'        	;1
242 112  FETCH_STATIC_PROP_FUNC_ARG/177 $120=     180:'rSettings'      181:'XUI'           	;1
243 112  FETCH_DIM_FUNC_ARG/93     $121=     $120                 183:'max_encode_cc' 	;1
244 112  SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
245 112  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
246 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'count'         	;1
247 112  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
248 112  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
249 112  SUB/2                     #124=     $122                 $123                	;0
250 112  QM_ASSIGN/22              #125=     #124                 ?0                  	;0
251 112  JMP/42                    ?0        ?253                 ?0                  	;0	>>253
252 112  QM_ASSIGN/22              #125=     186:1                ?0                  	;0	<<240
253 112  ASSIGN/38                 ?115      16?4                 #125                	;0	<<251
254 113  IS_SMALLER/19             #127=     187:0                16?4                	;0
255 113  BOOL_NOT/13               #128=     #127                 ?0                  	;0
256 113  JMPZ/43                   ?0        #128                 ?258                	;0	>>258
257 114  GOTO/253                  ?0        ?359                 ?188                	;0
258 116  INIT_METHOD_CALL/112      ?0        16?0                 189:'query'         	;2	<<256
259 116  CONCAT/8                  #129=     191:'SELECT `id`, `stream_id` FROM `queue` WHERE `server_id` = ? AND `pid` IS NULL AND `type` = \'channel\' ORDER BY `added` ASC LIMIT ' 16?4                	;0
260 116  CONCAT/8                  #130=     #129                 192:';'             	;0
261 116  SEND_VAL_EX/116           ?80       #130                 ?1                  	;0
262 116  FETCH_CONSTANT/99         #131=     ?0                   193:'SERVER_ID'     	;16
263 116  SEND_VAL_EX/116           ?96       #131                 ?2                  	;0
264 116  DO_FCALL/60               $132=     ?0                   ?0                  	;0
265 116  JMPZ/43                   ?0        $132                 ?267                	;0	>>267
266 117  GOTO/253                  ?0        ?88                  ?196                	;0
267 119  GOTO/253                  ?0        ?270                 ?197                	;0	<<265
268 120  GOTO/253                  ?0        ?88                  ?198                	;0
269 122  GOTO/253                  ?0        ?413                 ?199                	;0
270 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'is_object'     	;1
271 124  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
272 124  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
273 124  BOOL_NOT/13               #134=     $133                 ?0                  	;0
274 124  JMPZ/43                   ?0        #134                 ?276                	;0	>>276
275 125  GOTO/253                  ?0        ?278                 ?202                	;0
276 127  INIT_METHOD_CALL/112      ?0        16?0                 203:'close_mysql'   	;0	<<274
277 127  DO_FCALL/60               ?124      ?0                   ?0                  	;0
278 129  GOTO/253                  ?0        ?420                 ?205                	;0
279 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'posix_getpwuid'	;1	<<0
280 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'posix_geteuid' 	;0
281 131  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
282 131  SEND_VAR_NO_REF_EX/50     ?80       $136                 ?1                  	;0
283 131  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
284 131  FETCH_DIM_R/81            $138=     $137                 210:'name'          	;0
285 131  IS_NOT_EQUAL/18           #139=     $138                 211:'xui'           	;0
286 131  BOOL_NOT/13               #140=     #139                 ?0                  	;0
287 131  JMPZ/43                   ?0        #140                 ?289                	;0	>>289
288 132  GOTO/253                  ?0        ?290                 ?212                	;0
289 134  EXIT/79                   ?0        213:'Please run as XUI!
' ?0                  	;0	<<287
290 136  BEGIN_SILENCE/57          #141=     ?0                   ?0                  	;0
291 136  FETCH_R/80                $142=     214:'argc'           ?0                  	;268435456
292 136  END_SILENCE/58            ?0        #141                 ?0                  	;0
293 136  JMPZ/43                   ?0        $142                 ?295                	;0	>>295
294 137  GOTO/253                  ?0        ?56                  ?215                	;0
295 139  EXIT/79                   ?0        216:0                ?0                  	;0	<<293
296 140  GOTO/253                  ?0        ?56                  ?217                	;0
297 142  INIT_METHOD_CALL/112      ?0        16?0                 218:'query'         	;2
298 142  CONCAT/8                  #143=     220:'SELECT `id`, `stream_id` FROM `queue` WHERE `server_id` = ? AND `pid` IS NULL AND `type` = \'movie\' ORDER BY `added` ASC LIMIT ' 16?4                	;0
299 142  CONCAT/8                  #144=     #143                 221:';'             	;0
300 142  SEND_VAL_EX/116           ?80       #144                 ?1                  	;0
301 142  FETCH_CONSTANT/99         #145=     ?0                   222:'SERVER_ID'     	;16
302 142  SEND_VAL_EX/116           ?96       #145                 ?2                  	;0
303 142  DO_FCALL/60               $146=     ?0                   ?0                  	;0
304 142  JMPZ/43                   ?0        $146                 ?306                	;0	>>306
305 143  GOTO/253                  ?0        ?307                 ?225                	;0
306 145  GOTO/253                  ?0        ?270                 ?226                	;0	<<304
307 147  INIT_METHOD_CALL/112      ?0        16?0                 227:'num_rows'      	;0
308 147  DO_FCALL/60               $147=     ?0                   ?0                  	;0
309 147  IS_SMALLER/19             #148=     229:0                $147                	;0
310 147  BOOL_NOT/13               #149=     #148                 ?0                  	;0
311 147  JMPZ/43                   ?0        #149                 ?313                	;0	>>313
312 148  GOTO/253                  ?0        ?79                  ?230                	;0
313 150  INIT_METHOD_CALL/112      ?0        16?0                 231:'get_rows'      	;0	<<311
314 150  DO_FCALL/60               $150=     ?0                   ?0                  	;0
315 150  FE_RESET_R/77             $151=     $150                 ?337                	;0
316 150  FE_FETCH_R/78             ?0        $151                 16?1                	;337	>>337	<<336
317 151  INIT_STATIC_METHOD_CALL/113 ?0        233:'XUI'            235:'a0D6dA3165B447b7'	;1
318 151  FETCH_DIM_FUNC_ARG/93     $152=     16?1                 237:'stream_id'     	;1
319 151  SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
320 151  DO_FCALL/60               $153=     ?0                   ?0                  	;0
321 151  ASSIGN/38                 ?143      16?8                 $153                	;0
322 152  JMPZ/43                   ?0        16?8                 ?325                	;0	>>325
323 153  NOP/0                     ?0        ?0                   ?0                  	;1
324 153  GOTO/253                  ?0        ?330                 ?238                	;0
325 155  FETCH_DIM_R/81            $156=     16?1                 239:'id'            	;0	<<322
326 155  ASSIGN_DIM/147            ?144      16?2                 ?4397406            	;0
327 155  OP_DATA/137               ?0        $156                 ?0                  	;0
328 156  NOP/0                     ?0        ?0                   ?0                  	;1
329 156  GOTO/253                  ?0        ?336                 ?240                	;0
330 158  INIT_METHOD_CALL/112      ?0        16?0                 241:'query'         	;3
331 158  SEND_VAL_EX/116           ?80       243:'UPDATE `queue` SET `pid` = ? WHERE `id` = ?;' ?1                  	;0
332 158  SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
333 158  FETCH_DIM_FUNC_ARG/93     $157=     16?1                 244:'id'            	;3
334 158  SEND_VAR_EX/66            ?112      $157                 ?3                  	;0
335 158  DO_FCALL/60               ?147      ?0                   ?0                  	;0
336 160  JMP/42                    ?0        ?316                 ?0                  	;0	>>316
337 160  FE_FREE/127               ?0        $151                 ?0                  	;0	<<315
338 162  GOTO/253                  ?0        ?79                  ?245                	;0
339 164  GOTO/253                  ?0        ?270                 ?246                	;0
340 166  BOOL_NOT/13               #159=     16?6                 ?0                  	;0
341 166  JMPNZ_EX/47               #159=     #159                 ?347                	;0	>>347
342 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   247:'time'          	;0
343 166  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
344 166  SUB/2                     #161=     $160                 16?6                	;0
345 166  IS_SMALLER_OR_EQUAL/20    #162=     16?9                 #161                	;0
346 166  BOOL/52                   #159=     #162                 ?0                  	;0
347 166  BOOL_NOT/13               #163=     #159                 ?0                  	;0	<<341
348 166  JMPZ/43                   ?0        #163                 ?350                	;0	>>350
349 167  GOTO/253                  ?0        ?202                 ?249                	;0
350 169  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'md5_file'      	;1	<<348
351 169  SEND_VAL_EX/116           ?80       252:'includes\\cli\\queue.php' ?1                  	;0
352 169  DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
353 169  IS_NOT_EQUAL/18           #165=     $164                 16?10               	;0
354 169  BOOL_NOT/13               #166=     #165                 ?0                  	;0
355 169  JMPZ/43                   ?0        #166                 ?357                	;0	>>357
356 170  GOTO/253                  ?0        ?194                 ?253                	;0
357 172  ECHO/40                   ?0        254:'File changed! Break.
' ?0                  	;0	<<355
358 173  GOTO/253                  ?0        ?193                 ?255                	;0
359 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'count'         	;1
360 176  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
361 176  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
362 176  IS_SMALLER/19             #168=     258:0                $167                	;0
363 176  BOOL_NOT/13               #169=     #168                 ?0                  	;0
364 176  JMPZ/43                   ?0        #169                 ?366                	;0	>>366
365 177  GOTO/253                  ?0        ?375                 ?259                	;0
366 179  INIT_METHOD_CALL/112      ?0        16?0                 260:'query'         	;1	<<364
367 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'implode'       	;2
368 179  SEND_VAL_EX/116           ?80       264:','              ?1                  	;0
369 179  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
370 179  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
371 179  CONCAT/8                  #171=     265:'DELETE FROM `queue` WHERE `id` IN (' $170                	;0
372 179  CONCAT/8                  #172=     #171                 266:');'            	;0
373 179  SEND_VAL_EX/116           ?80       #172                 ?1                  	;0
374 179  DO_FCALL/60               ?162      ?0                   ?0                  	;0
375 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   267:'sleep'         	;1
376 181  FETCH_STATIC_PROP_R/173   $174=     269:'rSettings'      270:'XUI'           	;0
377 181  FETCH_DIM_R/81            $175=     $174                 272:'queue_loop'    	;0
378 181  IS_SMALLER/19             #176=     273:0                $175                	;0
379 181  JMPZ/43                   ?0        #176                 ?387                	;0	>>387
380 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   274:'intval'        	;1
381 181  FETCH_STATIC_PROP_FUNC_ARG/177 $177=     276:'rSettings'      277:'XUI'           	;1
382 181  FETCH_DIM_FUNC_ARG/93     $178=     $177                 279:'queue_loop'    	;1
383 181  SEND_VAR_EX/66            ?80       $178                 ?1                  	;0
384 181  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
385 181  QM_ASSIGN/22              #180=     $179                 ?0                  	;0
386 181  JMP/42                    ?0        ?388                 ?0                  	;0	>>388
387 181  QM_ASSIGN/22              #180=     280:5                ?0                  	;0	<<379
388 181  SEND_VAL_EX/116           ?80       #180                 ?1                  	;0	<<386
389 181  DO_FCALL_BY_NAME/131      ?170      ?0                   ?0                  	;0
390 182  GOTO/253                  ?0        ?269                 ?281                	;0
391 184  INIT_METHOD_CALL/112      ?0        16?0                 282:'query'         	;2
392 184  SEND_VAL_EX/116           ?80       284:'SELECT `id`, `pid` FROM `queue` WHERE `server_id` = ? AND `pid` IS NOT NULL AND `type` = \'movie\' ORDER BY `added` ASC;' ?1                  	;0
393 184  FETCH_CONSTANT/99         #182=     ?0                   285:'SERVER_ID'     	;16
394 184  SEND_VAL_EX/116           ?96       #182                 ?2                  	;0
395 184  DO_FCALL/60               $183=     ?0                   ?0                  	;0
396 184  JMPZ/43                   ?0        $183                 ?398                	;0	>>398
397 185  GOTO/253                  ?0        ?399                 ?288                	;0
398 187  GOTO/253                  ?0        ?270                 ?289                	;0	<<396
399 189  ASSIGN/38                 $184=     16?3                 290:array (
)       	;0
400 189  ASSIGN/38                 ?174      16?2                 $184                	;0
401 190  INIT_METHOD_CALL/112      ?0        16?0                 291:'num_rows'      	;0
402 190  DO_FCALL/60               $186=     ?0                   ?0                  	;0
403 190  IS_SMALLER/19             #187=     293:0                $186                	;0
404 190  BOOL_NOT/13               #188=     #187                 ?0                  	;0
405 190  JMPZ/43                   ?0        #188                 ?407                	;0	>>407
406 191  GOTO/253                  ?0        ?34                  ?294                	;0
407 193  GOTO/253                  ?0        ?1                   ?295                	;0	<<405
408 195  ASSIGN/38                 ?178      16?9                 296:60              	;0
409 196  INIT_FCALL_BY_NAME/59     ?0        ?0                   297:'md5_file'      	;1
410 196  SEND_VAL_EX/116           ?80       299:'includes\\cli\\queue.php' ?1                  	;0
411 196  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
412 196  ASSIGN/38                 ?180      16?10                $190                	;0
413 198  JMPZ/43                   ?0        300:false            ?415                	;0	>>415
414 199  GOTO/253                  ?0        ?270                 ?301                	;0
415 201  INIT_METHOD_CALL/112      ?0        16?0                 302:'ping'          	;0	<<413
416 201  DO_FCALL/60               $192=     ?0                   ?0                  	;0
417 201  JMPZ/43                   ?0        $192                 ?419                	;0	>>419
418 202  GOTO/253                  ?0        ?340                 ?304                	;0
419 204  GOTO/253                  ?0        ?339                 ?305                	;0	<<417
420 206  INIT_FCALL_BY_NAME/59     ?0        ?0                   306:'shell_exec'    	;1
421 206  FETCH_CONSTANT/99         #193=     ?0                   308:'PHP_BIN'       	;16
422 206  CONCAT/8                  #194=     311:'(sleep 1; '     #193                	;0
423 206  CONCAT/8                  #195=     #194                 312:' '             	;0
424 206  CONCAT/8                  #196=     #195                 313:'includes\\cli\\queue.php'	;0
425 206  CONCAT/8                  #197=     #196                 314:' ) > /dev/null 2>/dev/null &'	;0
426 206  SEND_VAL_EX/116           ?80       #197                 ?1                  	;0
427 206  DO_FCALL_BY_NAME/131      ?187      ?0                   ?0                  	;0
428 207  NOP/0                     ?0        315:1                ?0                  	;4294967295
*/

?>