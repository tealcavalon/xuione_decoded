<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?261                 ?0                  	;0	>>261
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'intval'          	;1
2   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'strtotime'       	;1
3   5    FETCH_STATIC_PROP_FUNC_ARG/177 $34=      5:'rRequest'         6:'XUI'             	;1
4   5    FETCH_DIM_FUNC_ARG/93     $35=      $34                  8:'startdate'       	;1
5   5    SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
6   5    DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
7   5    SEND_VAR_NO_REF_EX/50     ?80       $36                  ?1                  	;0
8   5    DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
9   5    JMP_SET/152               #38=      $37                  ?13                 	;0
10  5    INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'time'            	;0
11  5    DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
12  5    QM_ASSIGN/22              #38=      $39                  ?0                  	;0
13  5    ASSIGN/38                 ?6        16?0                 #38                 	;0
14  6    MUL/3                     #41=      16?2                 11:3600             	;0
15  6    ADD/1                     #42=      16?0                 #41                 	;0
16  6    ASSIGN/38                 ?9        16?1                 #42                 	;0
17  7    INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'floatval'       	;1
18  7    MUL/3                     #44=      16?2                 14:60               	;0
19  7    DIV/4                     #45=      15:100               #44                 	;0
20  7    SEND_VAL_EX/116           ?80       #45                  ?1                  	;0
21  7    DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
22  7    ASSIGN/38                 ?13       16?3                 $46                 	;0
23  8    ASSIGN/38                 ?14       16?4                 16?5                	;0
24  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'sort'           	;1
25  9    SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
26  9    DO_FCALL_BY_NAME/131      ?15       ?0                   ?0                  	;0
27  10   GOTO/253                  ?0        ?335                 ?18                 	;0
28  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'file_put_contents'	;2
29  13   FETCH_CONSTANT/99         #50=      ?0                   21:'TMP_PATH'       	;16
30  13   CONCAT/8                  #51=      #50                  24:'cache_'         	;0
31  13   CONCAT/8                  #52=      #51                  16?6                	;0
32  13   SEND_VAL_EX/116           ?80       #52                  ?1                  	;0
33  13   INIT_STATIC_METHOD_CALL/113 ?0        25:'XUI'             27:'serialize'      	;1
34  13   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
35  13   DO_FCALL/60               $53=      ?0                   ?0                  	;0
36  13   SEND_VAR_NO_REF_EX/50     ?96       $53                  ?2                  	;0
37  13   DO_FCALL_BY_NAME/131      ?20       ?0                   ?0                  	;0
38  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'json_encode'    	;1
39  15   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
40  15   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
41  15   ECHO/40                   ?0        $55                  ?0                  	;0
42  16   GOTO/253                  ?0        ?771                 ?31                 	;0
43  17   GOTO/253                  ?0        ?209                 ?32                 	;0
44  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'json_encode'    	;1
45  21   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
46  21   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
47  21   ECHO/40                   ?0        $56                  ?0                  	;0
48  22   GOTO/253                  ?0        ?771                 ?35                 	;0
49  24   FETCH_CONSTANT/99         #57=      ?0                   36:'PLATFORM'       	;16
50  24   IS_EQUAL/17               #58=      #57                  39:'xui'            	;0
51  24   JMPZ/43                   ?0        #58                  ?53                 	;0	>>53
52  25   GOTO/253                  ?0        ?61                  ?40                 	;0
53  27   INIT_METHOD_CALL/112      ?0        16?8                 41:'query'          	;3	<<51
54  27   SEND_VAL_EX/116           ?80       43:'SELECT FROM_BASE64(`title`) AS `title`, FROM_BASE64(`description`) AS `description`, UNIX_TIMESTAMP(`start`) AS `start`, UNIX_TIMESTAMP(`end`) AS `end` FROM `epg_data` WHERE UNIX_TIMESTAMP() >= UNIX_TIMESTAMP(`start`) AND UNIX_TIMESTAMP() < UNIX_TIMESTAMP(`end`) AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;' ?1                  	;0
55  27   FETCH_DIM_FUNC_ARG/93     $59=      16?9                 44:'epg_id'         	;2
56  27   SEND_VAR_EX/66            ?96       $59                  ?2                  	;0
57  27   FETCH_DIM_FUNC_ARG/93     $60=      16?9                 45:'channel_id'     	;3
58  27   SEND_VAR_EX/66            ?112      $60                  ?3                  	;0
59  27   DO_FCALL/60               ?27       ?0                   ?0                  	;0
60  28   GOTO/253                  ?0        ?411                 ?46                 	;0
61  30   INIT_METHOD_CALL/112      ?0        16?8                 47:'query'          	;3
62  30   SEND_VAL_EX/116           ?80       49:'SELECT `title`, `description`, `start`, `end` FROM `epg_data` WHERE UNIX_TIMESTAMP() >= `start` AND UNIX_TIMESTAMP() < `end` AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;' ?1                  	;0
63  30   FETCH_DIM_FUNC_ARG/93     $62=      16?9                 50:'epg_id'         	;2
64  30   SEND_VAR_EX/66            ?96       $62                  ?2                  	;0
65  30   FETCH_DIM_FUNC_ARG/93     $63=      16?9                 51:'channel_id'     	;3
66  30   SEND_VAR_EX/66            ?112      $63                  ?3                  	;0
67  30   DO_FCALL/60               ?30       ?0                   ?0                  	;0
68  31   GOTO/253                  ?0        ?411                 ?52                 	;0
69  35   ASSIGN/38                 ?31       16?10                53:array (
  'ChannelId' => NULL,
  'Title' => 'No Programme Information...',
  'RelativeSize' => 100,
  'StartTime' => 'N/A',
  'EndTime' => '',
  'Specialisation' => 'tv',
  'Archive' => NULL,
)	;0
70  36   INIT_METHOD_CALL/112      ?0        16?8                 54:'query'          	;1
71  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'implode'        	;2
72  36   SEND_VAL_EX/116           ?80       58:','               ?1                  	;0
73  36   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
74  36   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
75  36   CONCAT/8                  #67=      59:'SELECT `id`, `stream_icon`, `stream_display_name`, `tv_archive_duration`, `tv_archive_server_id`, `category_id` FROM `streams` WHERE `id` IN (' $66                 	;0
76  36   CONCAT/8                  #68=      #67                  60:') ORDER BY FIELD(`id`, '	;0
77  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'implode'        	;2
78  36   SEND_VAL_EX/116           ?80       63:','               ?1                  	;0
79  36   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
80  36   DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
81  36   CONCAT/8                  #70=      #68                  $69                 	;0
82  36   CONCAT/8                  #71=      #70                  64:') ASC;'         	;0
83  36   SEND_VAL_EX/116           ?80       #71                  ?1                  	;0
84  36   DO_FCALL/60               ?38       ?0                   ?0                  	;0
85  37   INIT_METHOD_CALL/112      ?0        16?8                 65:'get_rows'       	;0
86  37   DO_FCALL/60               $73=      ?0                   ?0                  	;0
87  37   FE_RESET_R/77             $74=      $73                  ?207                	;0
88  37   FE_FETCH_R/78             ?0        $74                  16?9                	;207	>>207	<<206
89  38   NOP/0                     ?0        ?0                   ?0                  	;1
90  38   GOTO/253                  ?0        ?155                 ?67                 	;0
91  40   INIT_STATIC_METHOD_CALL/113 ?0        68:'XUI'             70:'c721Bd954a5F072F'	;1
92  40   SEND_VAL_EX/116           ?80       72:'live'            ?1                  	;0
93  40   DO_FCALL/60               $75=      ?0                   ?0                  	;0
94  40   ASSIGN/38                 ?42       16?11                $75                 	;0
95  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'strlen'         	;1
96  41   FETCH_STATIC_PROP_FUNC_ARG/177 $77=      75:'rRequest'        76:'XUI'            	;1
97  41   FETCH_DIM_FUNC_ARG/93     $78=      $77                  78:'category'       	;1
98  41   SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
99  41   DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
100 41   IS_SMALLER/19             #80=      79:0                 $79                 	;0
101 41   JMPZ/43                   ?0        #80                  ?104                	;0	>>104
102 42   NOP/0                     ?0        ?0                   ?0                  	;1
103 42   GOTO/253                  ?0        ?112                 ?80                 	;0
104 44   FETCH_DIM_R/81            $81=      16?13                81:0                	;0	<<101
105 44   FETCH_DIM_R/81            $82=      16?11                $81                 	;0
106 44   FETCH_DIM_R/81            $83=      $82                  82:'category_name'  	;0
107 44   JMP_SET/152               #84=      $83                  ?109                	;0
108 44   QM_ASSIGN/22              #84=      83:'No Category'     ?0                  	;0
109 44   ASSIGN/38                 ?51       16?12                #84                 	;0
110 45   NOP/0                     ?0        ?0                   ?0                  	;1
111 45   GOTO/253                  ?0        ?124                 ?84                 	;0
112 47   NOP/0                     ?0        ?0                   ?0                  	;1
113 47   GOTO/253                  ?0        ?114                 ?85                 	;0
114 49   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'intval'         	;1
115 49   FETCH_STATIC_PROP_FUNC_ARG/177 $86=      88:'rRequest'        89:'XUI'            	;1
116 49   FETCH_DIM_FUNC_ARG/93     $87=      $86                  91:'category'       	;1
117 49   SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
118 49   DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
119 49   FETCH_DIM_R/81            $89=      16?11                $88                 	;0
120 49   FETCH_DIM_R/81            $90=      $89                  92:'category_name'  	;0
121 49   JMP_SET/152               #91=      $90                  ?123                	;0
122 49   QM_ASSIGN/22              #91=      93:'No Category'     ?0                  	;0
123 49   ASSIGN/38                 ?58       16?12                #91                 	;0
124 51   INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'count'          	;1
125 51   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
126 51   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
127 51   IS_SMALLER/19             #94=      96:1                 $93                 	;0
128 51   BOOL_NOT/13               #95=      #94                  ?0                  	;0
129 51   JMPZ/43                   ?0        #95                  ?132                	;0	>>132
130 52   NOP/0                     ?0        ?0                   ?0                  	;1
131 52   GOTO/253                  ?0        ?139                 ?97                 	;0
132 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'count'          	;1	<<129
133 54   SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
134 54   DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
135 54   SUB/2                     #97=      $96                  100:1               	;0
136 54   CONCAT/8                  #98=      101:' (+'            #97                 	;0
137 54   CONCAT/8                  #99=      #98                  102:' others)'      	;0
138 54   ASSIGN_CONCAT/30          ?66       16?12                #99                 	;0
139 56   NOP/0                     ?0        ?0                   ?0                  	;1
140 56   GOTO/253                  ?0        ?182                 ?103                	;0
141 58   FETCH_DIM_R/81            $101=     16?9                 104:'tv_archive_duration'	;0
142 58   ASSIGN/38                 ?68       16?14                $101                	;0
143 60   ASSIGN/38                 ?69       16?15                16?10               	;0
144 61   FETCH_DIM_R/81            $105=     16?9                 106:'id'            	;0
145 61   ASSIGN_DIM/147            ?70       16?15                105:'ChannelId'     	;0
146 61   OP_DATA/137               ?0        $105                 ?0                  	;0
147 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'json_decode'   	;2
148 62   FETCH_DIM_FUNC_ARG/93     $106=     16?9                 109:'category_id'   	;1
149 62   SEND_VAR_EX/66            ?80       $106                 ?1                  	;0
150 62   SEND_VAL_EX/116           ?96       110:true             ?2                  	;0
151 62   DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
152 62   ASSIGN/38                 ?74       16?13                $107                	;0
153 63   NOP/0                     ?0        ?0                   ?0                  	;1
154 63   GOTO/253                  ?0        ?91                  ?111                	;0
155 65   BOOL_NOT/13               #109=     16?16                ?0                  	;0
156 65   JMPNZ_EX/47               #109=     #109                 ?164                	;0	>>164
157 65   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'count'         	;1
158 65   FETCH_DIM_R/81            $110=     16?9                 114:'id'            	;0
159 65   FETCH_DIM_FUNC_ARG/93     $111=     16?17                $110                	;1
160 65   SEND_VAR_EX/66            ?80       $111                 ?1                  	;0
161 65   DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
162 65   IS_SMALLER/19             #113=     115:0                $112                	;0
163 65   BOOL/52                   #109=     #113                 ?0                  	;0
164 65   BOOL_NOT/13               #114=     #109                 ?0                  	;0	<<156
165 65   JMPZ/43                   ?0        #114                 ?168                	;0	>>168
166 66   NOP/0                     ?0        ?0                   ?0                  	;1
167 66   GOTO/253                  ?0        ?204                 ?116                	;0
168 68   FETCH_DIM_R/81            $115=     16?9                 117:'tv_archive_duration'	;0	<<165
169 68   IS_SMALLER/19             #116=     118:0                $115                	;0
170 68   JMPZ_EX/46                #116=     #116                 ?174                	;0	>>174
171 68   FETCH_DIM_R/81            $117=     16?9                 119:'tv_archive_server_id'	;0
172 68   IS_SMALLER/19             #118=     120:0                $117                	;0
173 68   BOOL/52                   #116=     #118                 ?0                  	;0
174 68   JMPZ/43                   ?0        #116                 ?177                	;0	>>177	<<170
175 69   NOP/0                     ?0        ?0                   ?0                  	;1
176 69   GOTO/253                  ?0        ?180                 ?121                	;0
177 71   ASSIGN/38                 ?85       16?14                122:0               	;0	<<174
178 72   NOP/0                     ?0        ?0                   ?0                  	;1
179 72   GOTO/253                  ?0        ?143                 ?123                	;0
180 74   NOP/0                     ?0        ?0                   ?0                  	;1
181 74   GOTO/253                  ?0        ?141                 ?124                	;0
182 76   FETCH_DIM_R/81            $122=     16?9                 126:'id'            	;0
183 76   INIT_ARRAY/71             #123=     $122                 127:'Id'            	;26
184 76   FETCH_DIM_R/81            $124=     16?9                 128:'stream_display_name'	;0
185 76   ADD_ARRAY_ELEMENT/72      #123=     $124                 129:'DisplayName'   	;0
186 76   ADD_ARRAY_ELEMENT/72      #123=     16?12                130:'CategoryName'  	;0
187 76   ADD_ARRAY_ELEMENT/72      #123=     16?14                131:'Archive'       	;0
188 76   INIT_STATIC_METHOD_CALL/113 ?0        132:'XUI'            134:'fcA722697178454b'	;1
189 76   FETCH_DIM_FUNC_ARG/93     $125=     16?9                 136:'stream_icon'   	;1
190 76   SEND_VAR_EX/66            ?80       $125                 ?1                  	;0
191 76   DO_FCALL/60               $126=     ?0                   ?0                  	;0
192 76   JMP_SET/152               #127=     $126                 ?194                	;0
193 76   QM_ASSIGN/22              #127=     137:''               ?0                  	;0
194 76   ADD_ARRAY_ELEMENT/72      #123=     #127                 138:'Image'         	;0
195 76   FETCH_DIM_R/81            $128=     16?9                 139:'id'            	;0
196 76   FETCH_DIM_R/81            $129=     16?17                $128                	;0
197 76   JMP_SET/152               #130=     $129                 ?200                	;0
198 76   INIT_ARRAY/71             #131=     16?15                ?0                  	;4
199 76   QM_ASSIGN/22              #130=     #131                 ?0                  	;0
200 76   ADD_ARRAY_ELEMENT/72      #123=     #130                 140:'TvListings'    	;0
201 76   FETCH_DIM_W/84            $120=     16?7                 125:'Channels'      	;0
202 76   ASSIGN_DIM/147            ?87       $120                 ?2670194944         	;0
203 76   OP_DATA/137               ?0        #123                 ?0                  	;0
204 79   NOP/0                     ?0        ?0                   ?0                  	;1
205 79   GOTO/253                  ?0        ?206                 ?141                	;0
206 80   JMP/42                    ?0        ?88                  ?0                  	;0	>>88
207 80   FE_FREE/127               ?0        $74                  ?0                  	;0	<<87
208 82   GOTO/253                  ?0        ?28                  ?142                	;0
209 85   FETCH_STATIC_PROP_R/173   $132=     143:'rRequest'       144:'XUI'           	;0
210 85   FETCH_DIM_R/81            $133=     $132                 146:'id'            	;0
211 85   INIT_ARRAY/71             #134=     $133                 147:'id'            	;22
212 85   ADD_ARRAY_ELEMENT/72      #134=     148:'LIVE TV'        149:'title'         	;0
213 85   ADD_ARRAY_ELEMENT/72      #134=     150:'No Programme Information...' 151:'epg_title'     	;0
214 85   ADD_ARRAY_ELEMENT/72      #134=     152:''               153:'epg_description'	;0
215 85   ADD_ARRAY_ELEMENT/72      #134=     154:NULL             155:'url'           	;0
216 85   ASSIGN/38                 ?101      16?7                 #134                	;0
217 86   FETCH_STATIC_PROP_R/173   $136=     156:'rRequest'       157:'XUI'           	;0
218 86   FETCH_DIM_R/81            $137=     $136                 159:'id'            	;0
219 86   ISSET_ISEMPTY_DIM_OBJ/115 #138=     16?18                $137                	;33554432
220 86   BOOL_NOT/13               #139=     #138                 ?0                  	;0
221 86   JMPZ/43                   ?0        #139                 ?223                	;0	>>223
222 87   GOTO/253                  ?0        ?44                  ?160                	;0
223 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'intval'        	;1	<<221
224 89   FETCH_STATIC_PROP_FUNC_ARG/177 $140=     163:'rRequest'       164:'XUI'           	;1
225 89   FETCH_DIM_FUNC_ARG/93     $141=     $140                 166:'start'         	;1
226 89   SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
227 89   DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
228 89   JMP_SET/152               #143=     $142                 ?230                	;0
229 89   QM_ASSIGN/22              #143=     167:''               ?0                  	;0
230 89   ASSIGN/38                 ?110      16?19                #143                	;0
231 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   168:'intval'        	;1
232 90   FETCH_STATIC_PROP_FUNC_ARG/177 $145=     170:'rRequest'       171:'XUI'           	;1
233 90   FETCH_DIM_FUNC_ARG/93     $146=     $145                 173:'duration'      	;1
234 90   SEND_VAR_EX/66            ?80       $146                 ?1                  	;0
235 90   DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
236 90   JMP_SET/152               #148=     $147                 ?238                	;0
237 90   QM_ASSIGN/22              #148=     174:''               ?0                  	;0
238 90   ASSIGN/38                 ?115      16?20                #148                	;0
239 91   GOTO/253                  ?0        ?453                 ?175                	;0
240 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'count'         	;1
241 93   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
242 93   DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
243 93   IS_EQUAL/17               #151=     $150                 178:0               	;0
244 93   BOOL_NOT/13               #152=     #151                 ?0                  	;0
245 93   JMPZ/43                   ?0        #152                 ?247                	;0	>>247
246 94   GOTO/253                  ?0        ?252                 ?179                	;0
247 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'json_encode'   	;1	<<245
248 96   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
249 96   DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
250 96   ECHO/40                   ?0        $153                 ?0                  	;0
251 97   EXIT/79                   ?0        ?0                   ?0                  	;0
252 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'intval'        	;1
253 99   FETCH_STATIC_PROP_FUNC_ARG/177 $154=     184:'rRequest'       185:'XUI'           	;1
254 99   FETCH_DIM_FUNC_ARG/93     $155=     $154                 187:'hours'         	;1
255 99   SEND_VAR_EX/66            ?80       $155                 ?1                  	;0
256 99   DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
257 99   JMP_SET/152               #157=     $156                 ?259                	;0
258 99   QM_ASSIGN/22              #157=     188:3                ?0                  	;0
259 99   ASSIGN/38                 ?124      16?2                 #157                	;0
260 100  GOTO/253                  ?0        ?1                   ?189                	;0
261 102  INCLUDE_OR_EVAL/73        ?125      190:'functions.php'  ?0                  	;2	<<0
262 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'array_flip'    	;1
263 103  FETCH_DIM_FUNC_ARG/93     $160=     16?21                193:'channel_ids'   	;1
264 103  SEND_VAR_EX/66            ?80       $160                 ?1                  	;0
265 103  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
266 103  ASSIGN/38                 ?128      16?18                $161                	;0
267 104  FETCH_STATIC_PROP_R/173   $163=     194:'rRequest'       195:'XUI'           	;0
268 104  FETCH_DIM_R/81            $164=     $163                 197:'timezone'      	;0
269 104  JMP_SET/152               #165=     $164                 ?271                	;0
270 104  QM_ASSIGN/22              #165=     198:'Europe/London'  ?0                  	;0
271 104  ASSIGN/38                 ?132      16?22                #165                	;0
272 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'date_default_timezone_set'	;1
273 105  SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
274 105  DO_FCALL_BY_NAME/131      ?133      ?0                   ?0                  	;0
275 106  FETCH_STATIC_PROP_IS/176  $168=     201:'rRequest'       202:'XUI'           	;0
276 106  ISSET_ISEMPTY_DIM_OBJ/115 #169=     $168                 204:'id'            	;33554432
277 106  JMPZ/43                   ?0        #169                 ?279                	;0	>>279
278 107  GOTO/253                  ?0        ?209                 ?205                	;0
279 109  GOTO/253                  ?0        ?301                 ?206                	;0	<<277
280 112  GOTO/253                  ?0        ?44                  ?207                	;0
281 114  FETCH_CONSTANT/99         #170=     ?0                   208:'PLATFORM'      	;16
282 114  IS_EQUAL/17               #171=     #170                 211:'xui'           	;0
283 114  JMPZ/43                   ?0        #171                 ?285                	;0	>>285
284 115  GOTO/253                  ?0        ?750                 ?212                	;0
285 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'date'          	;2	<<283
286 117  SEND_VAL_EX/116           ?80       215:'Y-m-d:H-i'      ?1                  	;0
287 117  SEND_VAR_EX/66            ?96       16?19                ?2                  	;0
288 117  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
289 117  ASSIGN/38                 ?139      16?23                $172                	;0
290 118  GOTO/253                  ?0        ?729                 ?216                	;0
291 120  GOTO/253                  ?0        ?300                 ?217                	;0
292 122  INIT_METHOD_CALL/112      ?0        16?8                 218:'query'         	;4
293 122  SEND_VAL_EX/116           ?80       220:'SELECT `title`, `description`, `start`, `end` FROM `epg_data` WHERE `start` = ? AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;' ?1                  	;0
294 122  SEND_VAR_EX/66            ?96       16?19                ?2                  	;0
295 122  FETCH_DIM_FUNC_ARG/93     $174=     16?9                 221:'epg_id'        	;3
296 122  SEND_VAR_EX/66            ?112      $174                 ?3                  	;0
297 122  FETCH_DIM_FUNC_ARG/93     $175=     16?9                 222:'channel_id'    	;4
298 122  SEND_VAR_EX/66            ?128      $175                 ?4                  	;0
299 122  DO_FCALL/60               ?142      ?0                   ?0                  	;0
300 125  GOTO/253                  ?0        ?672                 ?223                	;0
301 127  ASSIGN/38                 ?143      16?7                 224:array (
  'Channels' => 
  array (
  ),
)	;0
302 128  ASSIGN/38                 ?144      16?5                 225:array (
)       	;0
303 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'intval'        	;1
304 129  FETCH_STATIC_PROP_FUNC_ARG/177 $179=     228:'rRequest'       229:'XUI'           	;1
305 129  FETCH_DIM_FUNC_ARG/93     $180=     $179                 231:'hideempty'     	;1
306 129  SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
307 129  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
308 129  JMP_SET/152               #182=     $181                 ?310                	;0
309 129  QM_ASSIGN/22              #182=     232:0                ?0                  	;0
310 129  ASSIGN/38                 ?149      16?16                #182                	;0
311 130  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'array_map'     	;2
312 130  SEND_VAL_EX/116           ?80       235:'intval'         ?1                  	;0
313 130  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'explode'       	;2
314 130  SEND_VAL_EX/116           ?80       238:','              ?1                  	;0
315 130  FETCH_STATIC_PROP_FUNC_ARG/177 $184=     239:'rRequest'       240:'XUI'           	;2
316 130  FETCH_DIM_FUNC_ARG/93     $185=     $184                 242:'channels'      	;2
317 130  SEND_VAR_EX/66            ?96       $185                 ?2                  	;0
318 130  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
319 130  SEND_VAR_NO_REF_EX/50     ?96       $186                 ?2                  	;0
320 130  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
321 130  FE_RESET_R/77             $188=     $187                 ?333                	;0
322 130  FE_FETCH_R/78             ?0        $188                 16?24               	;333	>>333	<<332
323 131  JMPZ_EX/46                #189=     16?24                ?326                	;0	>>326
324 131  ISSET_ISEMPTY_DIM_OBJ/115 #190=     16?18                16?24               	;33554432
325 131  BOOL/52                   #189=     #190                 ?0                  	;0
326 131  BOOL_NOT/13               #191=     #189                 ?0                  	;0	<<323
327 131  JMPZ/43                   ?0        #191                 ?330                	;0	>>330
328 132  NOP/0                     ?0        ?0                   ?0                  	;1
329 132  GOTO/253                  ?0        ?332                 ?243                	;0
330 134  ASSIGN_DIM/147            ?158      16?5                 ?4397406            	;0	<<327
331 134  OP_DATA/137               ?0        16?24                ?0                  	;0
332 136  JMP/42                    ?0        ?322                 ?0                  	;0	>>322
333 136  FE_FREE/127               ?0        $188                 ?0                  	;0	<<321
334 139  GOTO/253                  ?0        ?240                 ?244                	;0
335 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'md5'           	;1
336 141  CONCAT/8                  #193=     16?22                247:'_'             	;0
337 141  CONCAT/8                  #194=     #193                 16?0                	;0
338 141  CONCAT/8                  #195=     #194                 248:'_'             	;0
339 141  CONCAT/8                  #196=     #195                 16?2                	;0
340 141  CONCAT/8                  #197=     #196                 249:'_'             	;0
341 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'implode'       	;2
342 141  SEND_VAL_EX/116           ?80       252:','              ?1                  	;0
343 141  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
344 141  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
345 141  CONCAT/8                  #199=     #197                 $198                	;0
346 141  CONCAT/8                  #200=     #199                 253:'_'             	;0
347 141  CONCAT/8                  #201=     #200                 16?16               	;0
348 141  SEND_VAL_EX/116           ?80       #201                 ?1                  	;0
349 141  DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
350 141  ASSIGN/38                 ?169      16?6                 $202                	;0
351 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   254:'file_exists'   	;1
352 142  FETCH_CONSTANT/99         #204=     ?0                   256:'TMP_PATH'      	;16
353 142  CONCAT/8                  #205=     #204                 259:'cache_'        	;0
354 142  CONCAT/8                  #206=     #205                 16?6                	;0
355 142  SEND_VAL_EX/116           ?80       #206                 ?1                  	;0
356 142  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
357 142  BOOL_NOT/13               #208=     $207                 ?0                  	;0
358 142  JMPNZ_EX/47               #208=     #208                 ?370                	;0	>>370
359 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'time'          	;0
360 142  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
361 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'filemtime'     	;1
362 142  FETCH_CONSTANT/99         #210=     ?0                   264:'TMP_PATH'      	;16
363 142  CONCAT/8                  #211=     #210                 267:'cache_'        	;0
364 142  CONCAT/8                  #212=     #211                 16?6                	;0
365 142  SEND_VAL_EX/116           ?80       #212                 ?1                  	;0
366 142  DO_FCALL_BY_NAME/131      $213=     ?0                   ?0                  	;0
367 142  SUB/2                     #214=     $209                 $213                	;0
368 142  IS_SMALLER/19             #215=     268:600              #214                	;0
369 142  BOOL/52                   #208=     #215                 ?0                  	;0
370 142  JMPZ/43                   ?0        #208                 ?372                	;0	>>372	<<358
371 143  GOTO/253                  ?0        ?383                 ?269                	;0
372 145  INIT_STATIC_METHOD_CALL/113 ?0        270:'XUI'            272:'unserialize'   	;1	<<370
373 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   274:'file_get_contents'	;1
374 145  FETCH_CONSTANT/99         #216=     ?0                   276:'TMP_PATH'      	;16
375 145  CONCAT/8                  #217=     #216                 279:'cache_'        	;0
376 145  CONCAT/8                  #218=     #217                 16?6                	;0
377 145  SEND_VAL_EX/116           ?80       #218                 ?1                  	;0
378 145  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
379 145  SEND_VAR_NO_REF_EX/50     ?80       $219                 ?1                  	;0
380 145  DO_FCALL/60               $220=     ?0                   ?0                  	;0
381 145  ASSIGN/38                 ?187      16?7                 $220                	;0
382 146  GOTO/253                  ?0        ?38                  ?280                	;0
383 148  GOTO/253                  ?0        ?704                 ?281                	;0
384 150  INIT_METHOD_CALL/112      ?0        16?8                 282:'query'         	;2
385 150  SEND_VAL_EX/116           ?80       284:'SELECT `id`, `stream_display_name`, `channel_id`, `epg_id` FROM `streams` WHERE `id` = ?;' ?1                  	;0
386 150  FETCH_STATIC_PROP_FUNC_ARG/177 $222=     285:'rRequest'       286:'XUI'           	;2
387 150  FETCH_DIM_FUNC_ARG/93     $223=     $222                 288:'id'            	;2
388 150  SEND_VAR_EX/66            ?96       $223                 ?2                  	;0
389 150  DO_FCALL/60               ?190      ?0                   ?0                  	;0
390 151  INIT_METHOD_CALL/112      ?0        16?8                 289:'num_rows'      	;0
391 151  DO_FCALL/60               $225=     ?0                   ?0                  	;0
392 151  IS_EQUAL/17               #226=     $225                 291:1               	;0
393 151  BOOL_NOT/13               #227=     #226                 ?0                  	;0
394 151  JMPZ/43                   ?0        #227                 ?396                	;0	>>396
395 152  GOTO/253                  ?0        ?425                 ?292                	;0
396 154  INIT_METHOD_CALL/112      ?0        16?8                 293:'get_row'       	;0	<<394
397 154  DO_FCALL/60               $228=     ?0                   ?0                  	;0
398 154  ASSIGN/38                 ?195      16?9                 $228                	;0
399 155  FETCH_DIM_R/81            $231=     16?9                 296:'stream_display_name'	;0
400 155  ASSIGN_DIM/147            ?196      16?7                 295:'title'         	;0
401 155  OP_DATA/137               ?0        $231                 ?0                  	;0
402 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   297:'time'          	;0
403 156  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
404 156  IS_SMALLER/19             #233=     16?19                $232                	;0
405 156  JMPZ_EX/46                #233=     #233                 ?408                	;0	>>408
406 156  IS_SMALLER/19             #234=     299:0                16?20               	;0
407 156  BOOL/52                   #233=     #234                 ?0                  	;0
408 156  JMPZ/43                   ?0        #233                 ?410                	;0	>>410	<<405
409 157  GOTO/253                  ?0        ?412                 ?300                	;0
410 159  GOTO/253                  ?0        ?49                  ?301                	;0	<<408
411 162  GOTO/253                  ?0        ?300                 ?302                	;0
412 164  FETCH_CONSTANT/99         #235=     ?0                   303:'PLATFORM'      	;16
413 164  IS_EQUAL/17               #236=     #235                 306:'xui'           	;0
414 164  JMPZ/43                   ?0        #236                 ?416                	;0	>>416
415 165  GOTO/253                  ?0        ?292                 ?307                	;0
416 167  INIT_METHOD_CALL/112      ?0        16?8                 308:'query'         	;4	<<414
417 167  SEND_VAL_EX/116           ?80       310:'SELECT FROM_BASE64(`title`) AS `title`, FROM_BASE64(`description`) AS `description`, UNIX_TIMESTAMP(`start`) AS `start`, UNIX_TIMESTAMP(`end`) AS `end` FROM `epg_data` WHERE UNIX_TIMESTAMP(`start`) = ? AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;' ?1                  	;0
418 167  SEND_VAR_EX/66            ?96       16?19                ?2                  	;0
419 167  FETCH_DIM_FUNC_ARG/93     $237=     16?9                 311:'epg_id'        	;3
420 167  SEND_VAR_EX/66            ?112      $237                 ?3                  	;0
421 167  FETCH_DIM_FUNC_ARG/93     $238=     16?9                 312:'channel_id'    	;4
422 167  SEND_VAR_EX/66            ?128      $238                 ?4                  	;0
423 167  DO_FCALL/60               ?205      ?0                   ?0                  	;0
424 168  GOTO/253                  ?0        ?291                 ?313                	;0
425 173  INIT_STATIC_METHOD_CALL/113 ?0        314:'XUI'            316:'C65C7f64E35c199f'	;1
426 173  FETCH_IS/89               $240=     318:'_SERVER'        ?0                  	;0
427 173  ISSET_ISEMPTY_DIM_OBJ/115 #241=     $240                 319:'HTTPS'         	;16777216
428 173  BOOL_NOT/13               #242=     #241                 ?0                  	;0
429 173  JMPZ_EX/46                #242=     #242                 ?434                	;0	>>434
430 173  FETCH_R/80                $243=     320:'_SERVER'        ?0                  	;0
431 173  FETCH_DIM_R/81            $244=     $243                 321:'HTTPS'         	;0
432 173  IS_NOT_IDENTICAL/16       #245=     $244                 322:'off'           	;0
433 173  BOOL/52                   #242=     #245                 ?0                  	;0
434 173  JMPNZ_EX/47               #242=     #242                 ?439                	;0	>>439	<<429
435 173  FETCH_R/80                $246=     323:'_SERVER'        ?0                  	;0
436 173  FETCH_DIM_R/81            $247=     $246                 324:'SERVER_PORT'   	;0
437 173  IS_EQUAL/17               #248=     $247                 325:443             	;0
438 173  BOOL/52                   #242=     #248                 ?0                  	;0
439 173  SEND_VAL_EX/116           ?80       #242                 ?1                  	;0	<<434
440 173  DO_FCALL/60               $249=     ?0                   ?0                  	;0
441 173  ASSIGN/38                 ?216      16?25                $249                	;0
442 174  MUL/3                     #251=     16?20                326:60              	;0
443 174  ADD/1                     #252=     16?19                #251                	;0
444 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'time'          	;0
445 174  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
446 174  IS_SMALLER/19             #254=     #252                 $253                	;0
447 174  JMPZ_EX/46                #254=     #254                 ?450                	;0	>>450
448 174  IS_SMALLER/19             #255=     329:0                16?20               	;0
449 174  BOOL/52                   #254=     #255                 ?0                  	;0
450 174  JMPZ/43                   ?0        #254                 ?452                	;0	>>452	<<447
451 175  GOTO/253                  ?0        ?281                 ?330                	;0
452 177  GOTO/253                  ?0        ?498                 ?331                	;0	<<450
453 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   332:'md5'           	;1
454 179  CONCAT/8                  #256=     16?22                334:'_'             	;0
455 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'intval'        	;1
456 179  FETCH_STATIC_PROP_FUNC_ARG/177 $257=     337:'rRequest'       338:'XUI'           	;1
457 179  FETCH_DIM_FUNC_ARG/93     $258=     $257                 340:'id'            	;1
458 179  SEND_VAR_EX/66            ?80       $258                 ?1                  	;0
459 179  DO_FCALL_BY_NAME/131      $259=     ?0                   ?0                  	;0
460 179  CONCAT/8                  #260=     #256                 $259                	;0
461 179  CONCAT/8                  #261=     #260                 341:'_'             	;0
462 179  CONCAT/8                  #262=     #261                 16?19               	;0
463 179  CONCAT/8                  #263=     #262                 342:'_'             	;0
464 179  CONCAT/8                  #264=     #263                 16?20               	;0
465 179  SEND_VAL_EX/116           ?80       #264                 ?1                  	;0
466 179  DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
467 179  ASSIGN/38                 ?232      16?6                 $265                	;0
468 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'file_exists'   	;1
469 180  FETCH_CONSTANT/99         #267=     ?0                   345:'TMP_PATH'      	;16
470 180  CONCAT/8                  #268=     #267                 16?6                	;0
471 180  SEND_VAL_EX/116           ?80       #268                 ?1                  	;0
472 180  DO_FCALL_BY_NAME/131      $269=     ?0                   ?0                  	;0
473 180  BOOL_NOT/13               #270=     $269                 ?0                  	;0
474 180  JMPNZ_EX/47               #270=     #270                 ?485                	;0	>>485
475 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'time'          	;0
476 180  DO_FCALL_BY_NAME/131      $271=     ?0                   ?0                  	;0
477 180  INIT_FCALL_BY_NAME/59     ?0        ?0                   350:'filemtime'     	;1
478 180  FETCH_CONSTANT/99         #272=     ?0                   352:'TMP_PATH'      	;16
479 180  CONCAT/8                  #273=     #272                 16?6                	;0
480 180  SEND_VAL_EX/116           ?80       #273                 ?1                  	;0
481 180  DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
482 180  SUB/2                     #275=     $271                 $274                	;0
483 180  IS_SMALLER/19             #276=     355:60               #275                	;0
484 180  BOOL/52                   #270=     #276                 ?0                  	;0
485 180  JMPZ/43                   ?0        #270                 ?487                	;0	>>487	<<474
486 181  GOTO/253                  ?0        ?497                 ?356                	;0
487 183  INIT_STATIC_METHOD_CALL/113 ?0        357:'XUI'            359:'unserialize'   	;1	<<485
488 183  INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'file_get_contents'	;1
489 183  FETCH_CONSTANT/99         #277=     ?0                   363:'TMP_PATH'      	;16
490 183  CONCAT/8                  #278=     #277                 16?6                	;0
491 183  SEND_VAL_EX/116           ?80       #278                 ?1                  	;0
492 183  DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
493 183  SEND_VAR_NO_REF_EX/50     ?80       $279                 ?1                  	;0
494 183  DO_FCALL/60               $280=     ?0                   ?0                  	;0
495 183  ASSIGN/38                 ?247      16?7                 $280                	;0
496 184  GOTO/253                  ?0        ?425                 ?366                	;0
497 186  GOTO/253                  ?0        ?384                 ?367                	;0
498 188  FETCH_CONSTANT/99         #282=     ?0                   368:'PLATFORM'      	;16
499 188  IS_EQUAL/17               #283=     #282                 371:'xui'           	;0
500 188  JMPZ/43                   ?0        #283                 ?502                	;0	>>502
501 189  GOTO/253                  ?0        ?519                 ?372                	;0
502 191  CONCAT/8                  #285=     16?25                374:'live/'         	;0	<<500
503 191  FETCH_DIM_R/81            $286=     16?21                375:'username'      	;0
504 191  CONCAT/8                  #287=     #285                 $286                	;0
505 191  CONCAT/8                  #288=     #287                 376:'/'             	;0
506 191  FETCH_DIM_R/81            $289=     16?21                377:'password'      	;0
507 191  CONCAT/8                  #290=     #288                 $289                	;0
508 191  CONCAT/8                  #291=     #290                 378:'/'             	;0
509 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   379:'intval'        	;1
510 191  FETCH_STATIC_PROP_FUNC_ARG/177 $292=     381:'rRequest'       382:'XUI'           	;1
511 191  FETCH_DIM_FUNC_ARG/93     $293=     $292                 384:'id'            	;1
512 191  SEND_VAR_EX/66            ?80       $293                 ?1                  	;0
513 191  DO_FCALL_BY_NAME/131      $294=     ?0                   ?0                  	;0
514 191  CONCAT/8                  #295=     #291                 $294                	;0
515 191  CONCAT/8                  #296=     #295                 385:'.m3u8'         	;0
516 191  ASSIGN_DIM/147            ?250      16?7                 373:'url'           	;0
517 191  OP_DATA/137               ?0        #296                 ?0                  	;0
518 192  GOTO/253                  ?0        ?280                 ?386                	;0
519 194  FETCH_DIM_R/81            $298=     16?21                388:'username'      	;0
520 194  CONCAT/8                  #299=     16?25                $298                	;0
521 194  CONCAT/8                  #300=     #299                 389:'/'             	;0
522 194  FETCH_DIM_R/81            $301=     16?21                390:'password'      	;0
523 194  CONCAT/8                  #302=     #300                 $301                	;0
524 194  CONCAT/8                  #303=     #302                 391:'/'             	;0
525 194  INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'intval'        	;1
526 194  FETCH_STATIC_PROP_FUNC_ARG/177 $304=     394:'rRequest'       395:'XUI'           	;1
527 194  FETCH_DIM_FUNC_ARG/93     $305=     $304                 397:'id'            	;1
528 194  SEND_VAR_EX/66            ?80       $305                 ?1                  	;0
529 194  DO_FCALL_BY_NAME/131      $306=     ?0                   ?0                  	;0
530 194  CONCAT/8                  #307=     #303                 $306                	;0
531 194  CONCAT/8                  #308=     #307                 398:'.m3u8'         	;0
532 194  ASSIGN_DIM/147            ?263      16?7                 387:'url'           	;0
533 194  OP_DATA/137               ?0        #308                 ?0                  	;0
534 195  GOTO/253                  ?0        ?280                 ?399                	;0
535 198  INIT_METHOD_CALL/112      ?0        16?8                 400:'query'         	;3
536 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'implode'       	;2
537 198  SEND_VAL_EX/116           ?80       404:','              ?1                  	;0
538 198  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
539 198  DO_FCALL_BY_NAME/131      $309=     ?0                   ?0                  	;0
540 198  CONCAT/8                  #310=     405:'SELECT `streams`.`id`, `streams`.`tv_archive_duration`, `tv_archive_server_id`, `epg_data`.`title`, `epg_data`.`description`, `epg_data`.`start`, `epg_data`.`end` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `streams`.`id` IN (' $309                	;0
541 198  CONCAT/8                  #311=     #310                 406:') AND (`end` > ? AND `start` < ?) ORDER BY `id` ASC, `start` ASC;'	;0
542 198  SEND_VAL_EX/116           ?80       #311                 ?1                  	;0
543 198  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
544 198  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
545 198  DO_FCALL/60               ?278      ?0                   ?0                  	;0
546 200  INIT_METHOD_CALL/112      ?0        16?8                 407:'get_rows'      	;3
547 200  SEND_VAL_EX/116           ?80       409:true             ?1                  	;0
548 200  SEND_VAL_EX/116           ?96       410:'id'             ?2                  	;0
549 200  SEND_VAL_EX/116           ?112      411:false            ?3                  	;0
550 200  DO_FCALL/60               $313=     ?0                   ?0                  	;0
551 200  ASSIGN/38                 ?280      16?26                $313                	;0
552 201  FE_RESET_R/77             $315=     16?26                ?670                	;0
553 201  FE_FETCH_R/78             #316=     $315                 16?27               	;670	>>670	<<669
554 201  ASSIGN/38                 ?283      16?24                #316                	;0
555 202  ASSIGN/38                 ?284      16?28                412:0               	;0
556 203  FE_RESET_R/77             $319=     16?27                ?668                	;0
557 203  FE_FETCH_R/78             ?0        $319                 16?29               	;668	>>668	<<667
558 204  NOP/0                     ?0        ?0                   ?0                  	;1
559 204  NOP/0                     ?0        ?0                   ?0                  	;1
560 204  GOTO/253                  ?0        ?561                 ?413                	;0
561 206  FETCH_DIM_R/81            $320=     16?29                414:'start'         	;0
562 206  IS_SMALLER/19             #321=     $320                 16?0                	;0
563 206  JMPZ/43                   ?0        #321                 ?566                	;0	>>566
564 206  QM_ASSIGN/22              #322=     16?0                 ?0                  	;0
565 206  JMP/42                    ?0        ?568                 ?0                  	;0	>>568
566 206  FETCH_DIM_R/81            $323=     16?29                415:'start'         	;0	<<563
567 206  QM_ASSIGN/22              #322=     $323                 ?0                  	;0
568 206  ASSIGN/38                 ?290      16?30                #322                	;0	<<565
569 207  FETCH_DIM_R/81            $325=     16?29                416:'end'           	;0
570 207  IS_SMALLER/19             #326=     16?1                 $325                	;0
571 207  JMPZ/43                   ?0        #326                 ?574                	;0	>>574
572 207  QM_ASSIGN/22              #327=     16?1                 ?0                  	;0
573 207  JMP/42                    ?0        ?576                 ?0                  	;0	>>576
574 207  FETCH_DIM_R/81            $328=     16?29                417:'end'           	;0	<<571
575 207  QM_ASSIGN/22              #327=     $328                 ?0                  	;0
576 207  ASSIGN/38                 ?295      16?31                #327                	;0	<<573
577 208  SUB/2                     #330=     16?31                16?30               	;0
578 208  DIV/4                     #331=     #330                 418:60              	;0
579 208  ASSIGN/38                 ?298      16?20                #331                	;0
580 209  ASSIGN/38                 ?299      16?14                419:NULL            	;0
581 210  FETCH_DIM_R/81            $334=     16?29                420:'tv_archive_server_id'	;0
582 210  IS_SMALLER/19             #335=     421:0                $334                	;0
583 210  JMPZ_EX/46                #335=     #335                 ?587                	;0	>>587
584 210  FETCH_DIM_R/81            $336=     16?29                422:'tv_archive_duration'	;0
585 210  IS_SMALLER/19             #337=     423:0                $336                	;0
586 210  BOOL/52                   #335=     #337                 ?0                  	;0
587 210  BOOL_NOT/13               #338=     #335                 ?0                  	;0	<<583
588 210  JMPZ/43                   ?0        #338                 ?592                	;0	>>592
589 211  NOP/0                     ?0        ?0                   ?0                  	;1
590 211  NOP/0                     ?0        ?0                   ?0                  	;1
591 211  GOTO/253                  ?0        ?658                 ?424                	;0
592 213  NOP/0                     ?0        ?0                   ?0                  	;1	<<588
593 213  NOP/0                     ?0        ?0                   ?0                  	;1
594 213  GOTO/253                  ?0        ?635                 ?425                	;0
595 215  ASSIGN_ADD/23             ?305      16?28                16?32               	;0
596 216  IS_SMALLER/19             #340=     426:100              16?28               	;0
597 216  BOOL_NOT/13               #341=     #340                 ?0                  	;0
598 216  JMPZ/43                   ?0        #341                 ?602                	;0	>>602
599 217  NOP/0                     ?0        ?0                   ?0                  	;1
600 217  NOP/0                     ?0        ?0                   ?0                  	;1
601 217  GOTO/253                  ?0        ?604                 ?427                	;0
602 219  SUB/2                     #342=     16?28                428:100             	;0	<<598
603 219  ASSIGN_SUB/24             ?309      16?32                #342                	;0
604 221  FETCH_DIM_R/81            $344=     16?29                429:'id'            	;0
605 221  FETCH_DIM_R/81            $347=     16?29                430:'id'            	;0
606 221  INIT_ARRAY/71             #348=     $347                 431:'ChannelId'     	;38
607 221  FETCH_DIM_R/81            $349=     16?29                432:'title'         	;0
608 221  ADD_ARRAY_ELEMENT/72      #348=     $349                 433:'Title'         	;0
609 221  ADD_ARRAY_ELEMENT/72      #348=     16?32                434:'RelativeSize'  	;0
610 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   435:'date'          	;2
611 221  SEND_VAL_EX/116           ?80       437:'h:ia'           ?1                  	;0
612 221  SEND_VAR_EX/66            ?96       16?30                ?2                  	;0
613 221  DO_FCALL_BY_NAME/131      $350=     ?0                   ?0                  	;0
614 221  ADD_ARRAY_ELEMENT/72      #348=     $350                 438:'StartTime'     	;0
615 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   439:'date'          	;2
616 221  SEND_VAL_EX/116           ?80       441:'h:ia'           ?1                  	;0
617 221  SEND_VAR_EX/66            ?96       16?31                ?2                  	;0
618 221  DO_FCALL_BY_NAME/131      $351=     ?0                   ?0                  	;0
619 221  ADD_ARRAY_ELEMENT/72      #348=     $351                 442:'EndTime'       	;0
620 221  FETCH_DIM_R/81            $352=     16?29                443:'start'         	;0
621 221  ADD_ARRAY_ELEMENT/72      #348=     $352                 444:'Start'         	;0
622 221  FETCH_DIM_R/81            $353=     16?29                445:'end'           	;0
623 221  ADD_ARRAY_ELEMENT/72      #348=     $353                 446:'End'           	;0
624 221  ADD_ARRAY_ELEMENT/72      #348=     447:'tv'             448:'Specialisation'	;0
625 221  ADD_ARRAY_ELEMENT/72      #348=     16?14                449:'Archive'       	;0
626 221  FETCH_DIM_W/84            $345=     16?17                $344                	;0
627 221  ASSIGN_DIM/147            ?312      $345                 ?4397406            	;0
628 221  OP_DATA/137               ?0        #348                 ?0                  	;0
629 222  NOP/0                     ?0        ?0                   ?0                  	;1
630 222  NOP/0                     ?0        ?0                   ?0                  	;1
631 222  GOTO/253                  ?0        ?632                 ?450                	;0
632 225  NOP/0                     ?0        ?0                   ?0                  	;1
633 225  NOP/0                     ?0        ?0                   ?0                  	;1
634 225  GOTO/253                  ?0        ?667                 ?451                	;0
635 227  FETCH_DIM_R/81            $354=     16?29                452:'start'         	;0
636 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'time'          	;0
637 227  DO_FCALL_BY_NAME/131      $355=     ?0                   ?0                  	;0
638 227  FETCH_DIM_R/81            $356=     16?29                455:'tv_archive_duration'	;0
639 227  MUL/3                     #357=     $356                 456:86400           	;0
640 227  SUB/2                     #358=     $355                 #357                	;0
641 227  IS_SMALLER_OR_EQUAL/20    #359=     #358                 $354                	;0
642 227  BOOL_NOT/13               #360=     #359                 ?0                  	;0
643 227  JMPZ/43                   ?0        #360                 ?647                	;0	>>647
644 228  NOP/0                     ?0        ?0                   ?0                  	;1
645 228  NOP/0                     ?0        ?0                   ?0                  	;1
646 228  GOTO/253                  ?0        ?658                 ?457                	;0
647 230  FETCH_DIM_R/81            $361=     16?29                458:'start'         	;0	<<643
648 230  INIT_ARRAY/71             #362=     $361                 ?0                  	;8
649 230  INIT_FCALL_BY_NAME/59     ?0        ?0                   459:'intval'        	;1
650 230  FETCH_DIM_R/81            $363=     16?29                461:'end'           	;0
651 230  FETCH_DIM_R/81            $364=     16?29                462:'start'         	;0
652 230  SUB/2                     #365=     $363                 $364                	;0
653 230  DIV/4                     #366=     #365                 463:60              	;0
654 230  SEND_VAL_EX/116           ?80       #366                 ?1                  	;0
655 230  DO_FCALL_BY_NAME/131      $367=     ?0                   ?0                  	;0
656 230  ADD_ARRAY_ELEMENT/72      #362=     $367                 ?0                  	;0
657 230  ASSIGN/38                 ?334      16?14                #362                	;0
658 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   464:'round'         	;2
659 233  MUL/3                     #369=     16?20                16?3                	;0
660 233  SEND_VAL_EX/116           ?80       #369                 ?1                  	;0
661 233  SEND_VAL_EX/116           ?96       466:2                ?2                  	;0
662 233  DO_FCALL_BY_NAME/131      $370=     ?0                   ?0                  	;0
663 233  ASSIGN/38                 ?337      16?32                $370                	;0
664 234  NOP/0                     ?0        ?0                   ?0                  	;1
665 234  NOP/0                     ?0        ?0                   ?0                  	;1
666 234  GOTO/253                  ?0        ?595                 ?467                	;0
667 235  JMP/42                    ?0        ?557                 ?0                  	;0	>>557
668 235  FE_FREE/127               ?0        $319                 ?0                  	;0	<<556
669 238  JMP/42                    ?0        ?553                 ?0                  	;0	>>553
670 238  FE_FREE/127               ?0        $315                 ?0                  	;0	<<552
671 240  GOTO/253                  ?0        ?69                  ?468                	;0
672 242  INIT_METHOD_CALL/112      ?0        16?8                 469:'num_rows'      	;0
673 242  DO_FCALL/60               $372=     ?0                   ?0                  	;0
674 242  IS_EQUAL/17               #373=     $372                 471:1               	;0
675 242  BOOL_NOT/13               #374=     #373                 ?0                  	;0
676 242  JMPZ/43                   ?0        #374                 ?678                	;0	>>678
677 243  GOTO/253                  ?0        ?425                 ?472                	;0
678 245  INIT_METHOD_CALL/112      ?0        16?8                 473:'get_row'       	;0	<<676
679 245  DO_FCALL/60               $375=     ?0                   ?0                  	;0
680 245  ASSIGN/38                 ?342      16?33                $375                	;0
681 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   476:'date'          	;2
682 246  SEND_VAL_EX/116           ?80       478:'h:ia'           ?1                  	;0
683 246  FETCH_DIM_FUNC_ARG/93     $378=     16?33                479:'start'         	;2
684 246  SEND_VAR_EX/66            ?96       $378                 ?2                  	;0
685 246  DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
686 246  CONCAT/8                  #380=     $379                 480:' - '           	;0
687 246  FETCH_DIM_R/81            $381=     16?33                481:'title'         	;0
688 246  CONCAT/8                  #382=     #380                 $381                	;0
689 246  ASSIGN_DIM/147            ?343      16?7                 475:'epg_title'     	;0
690 246  OP_DATA/137               ?0        #382                 ?0                  	;0
691 247  FETCH_DIM_R/81            $384=     16?33                483:'description'   	;0
692 247  ASSIGN_DIM/147            ?349      16?7                 482:'epg_description'	;0
693 247  OP_DATA/137               ?0        $384                 ?0                  	;0
694 248  INIT_FCALL_BY_NAME/59     ?0        ?0                   484:'file_put_contents'	;2
695 248  FETCH_CONSTANT/99         #385=     ?0                   486:'TMP_PATH'      	;16
696 248  CONCAT/8                  #386=     #385                 16?6                	;0
697 248  SEND_VAL_EX/116           ?80       #386                 ?1                  	;0
698 248  INIT_STATIC_METHOD_CALL/113 ?0        489:'XUI'            491:'serialize'     	;1
699 248  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
700 248  DO_FCALL/60               $387=     ?0                   ?0                  	;0
701 248  SEND_VAR_NO_REF_EX/50     ?96       $387                 ?2                  	;0
702 248  DO_FCALL_BY_NAME/131      ?354      ?0                   ?0                  	;0
703 249  GOTO/253                  ?0        ?425                 ?493                	;0
704 251  ASSIGN/38                 ?355      16?17                494:array (
)       	;0
705 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   495:'count'         	;1
706 252  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
707 252  DO_FCALL_BY_NAME/131      $390=     ?0                   ?0                  	;0
708 252  IS_SMALLER/19             #391=     497:0                $390                	;0
709 252  BOOL_NOT/13               #392=     #391                 ?0                  	;0
710 252  JMPZ/43                   ?0        #392                 ?712                	;0	>>712
711 253  GOTO/253                  ?0        ?69                  ?498                	;0
712 255  FETCH_CONSTANT/99         #393=     ?0                   499:'PLATFORM'      	;16	<<710
713 255  IS_EQUAL/17               #394=     #393                 502:'xui'           	;0
714 255  JMPZ/43                   ?0        #394                 ?716                	;0	>>716
715 256  GOTO/253                  ?0        ?535                 ?503                	;0
716 258  INIT_METHOD_CALL/112      ?0        16?8                 504:'query'         	;3	<<714
717 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   506:'implode'       	;2
718 258  SEND_VAL_EX/116           ?80       508:','              ?1                  	;0
719 258  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
720 258  DO_FCALL_BY_NAME/131      $395=     ?0                   ?0                  	;0
721 258  CONCAT/8                  #396=     509:'SELECT `streams`.`id`, `streams`.`tv_archive_duration`, `tv_archive_server_id`, FROM_BASE64(`epg_data`.`title`) AS `title`, FROM_BASE64(`epg_data`.`description`) AS `description`, UNIX_TIMESTAMP(`epg_data`.`start`) AS `start`, UNIX_TIMESTAMP(`epg_data`.`end`) AS `end` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `streams`.`id` IN (' $395                	;0
722 258  CONCAT/8                  #397=     #396                 510:') AND (UNIX_TIMESTAMP(`end`) > ? AND UNIX_TIMESTAMP(`start`) < ?) ORDER BY `id` ASC, `start` ASC;'	;0
723 258  SEND_VAL_EX/116           ?80       #397                 ?1                  	;0
724 258  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
725 258  SEND_VAR_EX/66            ?112      16?1                 ?3                  	;0
726 258  DO_FCALL/60               ?364      ?0                   ?0                  	;0
727 259  GOTO/253                  ?0        ?546                 ?511                	;0
728 260  GOTO/253                  ?0        ?535                 ?512                	;0
729 262  CONCAT/8                  #400=     16?25                514:'timeshift/'    	;0
730 262  FETCH_DIM_R/81            $401=     16?21                515:'username'      	;0
731 262  CONCAT/8                  #402=     #400                 $401                	;0
732 262  CONCAT/8                  #403=     #402                 516:'/'             	;0
733 262  FETCH_DIM_R/81            $404=     16?21                517:'password'      	;0
734 262  CONCAT/8                  #405=     #403                 $404                	;0
735 262  CONCAT/8                  #406=     #405                 518:'/'             	;0
736 262  CONCAT/8                  #407=     #406                 16?20               	;0
737 262  CONCAT/8                  #408=     #407                 519:'/'             	;0
738 262  CONCAT/8                  #409=     #408                 16?23               	;0
739 262  CONCAT/8                  #410=     #409                 520:'/'             	;0
740 262  INIT_FCALL_BY_NAME/59     ?0        ?0                   521:'intval'        	;1
741 262  FETCH_STATIC_PROP_FUNC_ARG/177 $411=     523:'rRequest'       524:'XUI'           	;1
742 262  FETCH_DIM_FUNC_ARG/93     $412=     $411                 526:'id'            	;1
743 262  SEND_VAR_EX/66            ?80       $412                 ?1                  	;0
744 262  DO_FCALL_BY_NAME/131      $413=     ?0                   ?0                  	;0
745 262  CONCAT/8                  #414=     #410                 $413                	;0
746 262  CONCAT/8                  #415=     #414                 527:'.m3u8'         	;0
747 262  ASSIGN_DIM/147            ?365      16?7                 513:'url'           	;0
748 262  OP_DATA/137               ?0        #415                 ?0                  	;0
749 263  GOTO/253                  ?0        ?770                 ?528                	;0
750 265  CONCAT/8                  #417=     16?25                530:'timeshift/'    	;0
751 265  FETCH_DIM_R/81            $418=     16?21                531:'username'      	;0
752 265  CONCAT/8                  #419=     #417                 $418                	;0
753 265  CONCAT/8                  #420=     #419                 532:'/'             	;0
754 265  FETCH_DIM_R/81            $421=     16?21                533:'password'      	;0
755 265  CONCAT/8                  #422=     #420                 $421                	;0
756 265  CONCAT/8                  #423=     #422                 534:'/'             	;0
757 265  CONCAT/8                  #424=     #423                 16?20               	;0
758 265  CONCAT/8                  #425=     #424                 535:'/'             	;0
759 265  CONCAT/8                  #426=     #425                 16?19               	;0
760 265  CONCAT/8                  #427=     #426                 536:'/'             	;0
761 265  INIT_FCALL_BY_NAME/59     ?0        ?0                   537:'intval'        	;1
762 265  FETCH_STATIC_PROP_FUNC_ARG/177 $428=     539:'rRequest'       540:'XUI'           	;1
763 265  FETCH_DIM_FUNC_ARG/93     $429=     $428                 542:'id'            	;1
764 265  SEND_VAR_EX/66            ?80       $429                 ?1                  	;0
765 265  DO_FCALL_BY_NAME/131      $430=     ?0                   ?0                  	;0
766 265  CONCAT/8                  #431=     #427                 $430                	;0
767 265  CONCAT/8                  #432=     #431                 543:'.m3u8'         	;0
768 265  ASSIGN_DIM/147            ?382      16?7                 529:'url'           	;0
769 265  OP_DATA/137               ?0        #432                 ?0                  	;0
770 267  GOTO/253                  ?0        ?44                  ?544                	;0
771 270  NOP/0                     ?0        545:1                ?0                  	;4294967295
*/

?>