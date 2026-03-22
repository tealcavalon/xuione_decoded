<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?128                 ?0                  	;0	>>128
1   5    FETCH_DIM_R/81            $29=      16?1                 1:'streams'         	;0
2   5    ASSIGN/38                 ?1        16?0                 $29                 	;0
3   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'shuffle'         	;1
4   6    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
5   6    DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
6   7    FE_RESET_R/77             $32=      16?0                 ?26                 	;0
7   7    FE_FETCH_R/78             ?0        $32                  16?2                	;26	>>26	<<25
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'json_decode'     	;2
9   8    FETCH_DIM_FUNC_ARG/93     $33=      16?2                 6:'backdrop_path'   	;1
10  8    SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
11  8    SEND_VAL_EX/116           ?96       7:true               ?2                  	;0
12  8    DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
13  8    ASSIGN/38                 ?6        16?3                 $34                 	;0
14  9    ISSET_ISEMPTY_DIM_OBJ/115 #36=      16?3                 8:0                 	;16777216
15  9    JMPZ/43                   ?0        #36                  ?18                 	;0	>>18
16  10   NOP/0                     ?0        ?0                   ?0                  	;1
17  10   GOTO/253                  ?0        ?25                  ?9                  	;0
18  12   INIT_STATIC_METHOD_CALL/113 ?0        10:'XUI'             12:'FCA722697178454b'	;1	<<15
19  12   FETCH_DIM_FUNC_ARG/93     $37=      16?3                 14:0                	;1
20  12   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
21  12   DO_FCALL/60               $38=      ?0                   ?0                  	;0
22  12   ASSIGN/38                 ?10       16?4                 $38                 	;0
23  13   FE_FREE/127               ?0        $32                  ?0                  	;1
24  13   GOTO/253                  ?0        ?27                  ?15                 	;0
25  15   JMP/42                    ?0        ?7                   ?0                  	;0	>>7
26  15   FE_FREE/127               ?0        $32                  ?0                  	;0	<<6
27  18   BOOL_NOT/13               #40=      16?5                 ?0                  	;0
28  18   JMPZ_EX/46                #40=      #40                  ?31                 	;0	>>31
29  18   BOOL_NOT/13               #41=      16?6                 ?0                  	;0
30  18   BOOL/52                   #40=      #41                  ?0                  	;0
31  18   BOOL_NOT/13               #42=      #40                  ?0                  	;0	<<28
32  18   JMPZ/43                   ?0        #42                  ?34                 	;0	>>34
33  19   GOTO/253                  ?0        ?294                 ?16                 	;0
34  21   GOTO/253                  ?0        ?640                 ?17                 	;0	<<32
35  23   ASSIGN/38                 ?14       16?7                 18:10.0             	;0
36  25   IS_SMALLER/19             #44=      19:0.0               16?8                	;0
37  25   JMPNZ_EX/47               #44=      #44                  ?40                 	;0	>>40
38  25   IS_SMALLER/19             #45=      16?7                 20:10.0             	;0
39  25   BOOL/52                   #44=      #45                  ?0                  	;0
40  25   BOOL_NOT/13               #46=      #44                  ?0                  	;0	<<37
41  25   JMPZ/43                   ?0        #46                  ?43                 	;0	>>43
42  26   GOTO/253                  ?0        ?47                  ?21                 	;0
43  28   INIT_ARRAY/71             #48=      16?8                 ?0                  	;8	<<41
44  28   ADD_ARRAY_ELEMENT/72      #48=      16?7                 ?0                  	;0
45  28   ASSIGN_DIM/147            ?18       16?9                 22:'rating_range'   	;0
46  28   OP_DATA/137               ?0        #48                  ?0                  	;0
47  30   GOTO/253                  ?0        ?347                 ?23                 	;0
48  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1
49  32   FETCH_STATIC_PROP_FUNC_ARG/177 $49=      26:'rRequest'        27:'XUI'            	;1
50  32   FETCH_DIM_FUNC_ARG/93     $50=      $49                  29:'rating_e'       	;1
51  32   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
52  32   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
53  32   JMP_SET/152               #52=      $51                  ?55                 	;0
54  32   QM_ASSIGN/22              #52=      30:10.0              ?0                  	;0
55  32   ASSIGN/38                 ?24       16?7                 #52                 	;0
56  33   IS_SMALLER/19             #54=      16?8                 31:0.0              	;0
57  33   JMPNZ_EX/47               #54=      #54                  ?60                 	;0	>>60
58  33   IS_SMALLER/19             #55=      32:10.0              16?8                	;0
59  33   BOOL/52                   #54=      #55                  ?0                  	;0
60  33   BOOL_NOT/13               #56=      #54                  ?0                  	;0	<<57
61  33   JMPZ/43                   ?0        #56                  ?63                 	;0	>>63
62  34   GOTO/253                  ?0        ?64                  ?33                 	;0
63  36   ASSIGN/38                 ?28       16?8                 34:0.0              	;0	<<61
64  38   IS_SMALLER/19             #58=      16?7                 35:0.0              	;0
65  38   JMPNZ_EX/47               #58=      #58                  ?68                 	;0	>>68
66  38   IS_SMALLER/19             #59=      36:10.0              16?7                	;0
67  38   BOOL/52                   #58=      #59                  ?0                  	;0
68  38   JMPNZ_EX/47               #58=      #58                  ?71                 	;0	>>71	<<65
69  38   IS_SMALLER/19             #60=      16?7                 16?8                	;0
70  38   BOOL/52                   #58=      #60                  ?0                  	;0
71  38   BOOL_NOT/13               #61=      #58                  ?0                  	;0	<<68
72  38   JMPZ/43                   ?0        #61                  ?74                 	;0	>>74
73  39   GOTO/253                  ?0        ?36                  ?37                 	;0
74  41   GOTO/253                  ?0        ?35                  ?38                 	;0	<<72
75  44   IS_SMALLER/19             #62=      39:1900              16?10               	;0
76  44   JMPNZ_EX/47               #62=      #62                  ?82                 	;0	>>82
77  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'date'           	;1
78  44   SEND_VAL_EX/116           ?80       42:'Y'               ?1                  	;0
79  44   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
80  44   IS_SMALLER/19             #64=      16?11                $63                 	;0
81  44   BOOL/52                   #62=      #64                  ?0                  	;0
82  44   BOOL_NOT/13               #65=      #62                  ?0                  	;0	<<76
83  44   JMPZ/43                   ?0        #65                  ?85                 	;0	>>85
84  45   GOTO/253                  ?0        ?89                  ?43                 	;0
85  47   INIT_ARRAY/71             #67=      16?10                ?0                  	;8	<<83
86  47   ADD_ARRAY_ELEMENT/72      #67=      16?11                ?0                  	;0
87  47   ASSIGN_DIM/147            ?37       16?9                 44:'year_range'     	;0
88  47   OP_DATA/137               ?0        #67                  ?0                  	;0
89  49   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'intval'         	;1
90  49   FETCH_STATIC_PROP_FUNC_ARG/177 $68=      47:'rRequest'        48:'XUI'            	;1
91  49   FETCH_DIM_FUNC_ARG/93     $69=      $68                  50:'rating_s'       	;1
92  49   SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
93  49   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
94  49   JMP_SET/152               #71=      $70                  ?96                 	;0
95  49   QM_ASSIGN/22              #71=      51:0.0               ?0                  	;0
96  49   ASSIGN/38                 ?43       16?8                 #71                 	;0
97  50   GOTO/253                  ?0        ?48                  ?52                 	;0
98  52   INIT_STATIC_METHOD_CALL/113 ?0        53:'XUI'             55:'unserialize'    	;1
99  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'file_get_contents'	;1
100 52   FETCH_CONSTANT/99         #73=      ?0                   59:'CONTENT_PATH'   	;16
101 52   CONCAT/8                  #74=      #73                  62:'tmdb_popular'   	;0
102 52   SEND_VAL_EX/116           ?80       #74                  ?1                  	;0
103 52   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
104 52   SEND_VAR_NO_REF_EX/50     ?80       $75                  ?1                  	;0
105 52   DO_FCALL/60               $76=      ?0                   ?0                  	;0
106 52   FETCH_DIM_R/81            $77=      $76                  63:'series'         	;0
107 52   JMP_SET/152               #78=      $77                  ?109                	;0
108 52   QM_ASSIGN/22              #78=      64:array (
)         ?0                  	;0
109 52   ASSIGN/38                 ?50       16?5                 #78                 	;0
110 53   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'count'          	;1
111 53   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
112 53   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
113 53   IS_SMALLER/19             #81=      67:0                 $80                 	;0
114 53   JMPZ_EX/46                #81=      #81                  ?121                	;0	>>121
115 53   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'count'          	;1
116 53   FETCH_DIM_FUNC_ARG/93     $82=      16?12                70:'series_ids'     	;1
117 53   SEND_VAR_EX/66            ?80       $82                  ?1                  	;0
118 53   DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
119 53   IS_SMALLER/19             #84=      71:0                 $83                 	;0
120 53   BOOL/52                   #81=      #84                  ?0                  	;0
121 53   JMPZ/43                   ?0        #81                  ?123                	;0	>>123	<<114
122 54   GOTO/253                  ?0        ?127                 ?72                 	;0
123 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'header'         	;1	<<121
124 56   SEND_VAL_EX/116           ?80       75:'Location: series.php' ?1                  	;0
125 56   DO_FCALL_BY_NAME/131      ?56       ?0                   ?0                  	;0
126 57   GOTO/253                  ?0        ?405                 ?76                 	;0
127 59   GOTO/253                  ?0        ?669                 ?77                 	;0
128 61   INCLUDE_OR_EVAL/73        ?57       78:'functions.php'   ?0                  	;2	<<0
129 62   FETCH_STATIC_PROP_IS/176  $87=      79:'rRequest'        80:'XUI'            	;0
130 62   ISSET_ISEMPTY_DIM_OBJ/115 #88=      $87                  82:'sort'           	;33554432
131 62   JMPZ_EX/46                #88=      #88                  ?136                	;0	>>136
132 62   FETCH_STATIC_PROP_R/173   $89=      83:'rRequest'        84:'XUI'            	;0
133 62   FETCH_DIM_R/81            $90=      $89                  86:'sort'           	;0
134 62   IS_EQUAL/17               #91=      $90                  87:'popular'        	;0
135 62   BOOL/52                   #88=      #91                  ?0                  	;0
136 62   JMPZ/43                   ?0        #88                  ?138                	;0	>>138	<<131
137 63   GOTO/253                  ?0        ?553                 ?88                 	;0
138 65   ASSIGN/38                 ?63       16?5                 89:false            	;0	<<136
139 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'intval'         	;1
140 66   FETCH_STATIC_PROP_FUNC_ARG/177 $93=      92:'rRequest'        93:'XUI'            	;1
141 66   FETCH_DIM_FUNC_ARG/93     $94=      $93                  95:'page'           	;1
142 66   SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
143 66   DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
144 66   JMP_SET/152               #96=      $95                  ?146                	;0
145 66   QM_ASSIGN/22              #96=      96:1                 ?0                  	;0
146 66   ASSIGN/38                 ?68       16?13                #96                 	;0
147 67   ASSIGN/38                 ?69       16?14                97:48               	;0
148 68   GOTO/253                  ?0        ?366                 ?98                 	;0
149 70   FETCH_CONSTANT/99         #99=      ?0                   99:'PLATFORM'       	;16
150 70   IS_EQUAL/17               #100=     #99                  102:'xui'           	;0
151 70   JMPZ/43                   ?0        #100                 ?153                	;0	>>153
152 71   GOTO/253                  ?0        ?176                 ?103                	;0
153 73   INIT_METHOD_CALL/112      ?0        16?15                104:'query'         	;1	<<151
154 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'implode'       	;2
155 73   SEND_VAL_EX/116           ?80       108:','              ?1                  	;0
156 73   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
157 73   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
158 73   CONCAT/8                  #102=     109:'SELECT `id`, `title`, `releaseDate`, `rating`, `cover`, `backdrop_path` FROM `series` WHERE `id` IN (' $101                	;0
159 73   CONCAT/8                  #103=     #102                 110:') AND `id` IN ('	;0
160 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'implode'       	;2
161 73   SEND_VAL_EX/116           ?80       113:','              ?1                  	;0
162 73   FETCH_DIM_FUNC_ARG/93     $104=     16?12                114:'series_ids'    	;2
163 73   SEND_VAR_EX/66            ?96       $104                 ?2                  	;0
164 73   DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
165 73   CONCAT/8                  #106=     #103                 $105                	;0
166 73   CONCAT/8                  #107=     #106                 115:') ORDER BY FIELD(id, '	;0
167 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'implode'       	;2
168 73   SEND_VAL_EX/116           ?80       118:','              ?1                  	;0
169 73   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
170 73   DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
171 73   CONCAT/8                  #109=     #107                 $108                	;0
172 73   CONCAT/8                  #110=     #109                 119:') ASC LIMIT 6;'	;0
173 73   SEND_VAL_EX/116           ?80       #110                 ?1                  	;0
174 73   DO_FCALL/60               ?82       ?0                   ?0                  	;0
175 74   GOTO/253                  ?0        ?721                 ?120                	;0
176 76   INIT_METHOD_CALL/112      ?0        16?15                121:'query'         	;1
177 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   123:'implode'       	;2
178 76   SEND_VAL_EX/116           ?80       125:','              ?1                  	;0
179 76   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
180 76   DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
181 76   CONCAT/8                  #113=     126:'SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' $112                	;0
182 76   CONCAT/8                  #114=     #113                 127:') AND `id` IN ('	;0
183 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'implode'       	;2
184 76   SEND_VAL_EX/116           ?80       130:','              ?1                  	;0
185 76   FETCH_DIM_FUNC_ARG/93     $115=     16?12                131:'series_ids'    	;2
186 76   SEND_VAR_EX/66            ?96       $115                 ?2                  	;0
187 76   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
188 76   CONCAT/8                  #117=     #114                 $116                	;0
189 76   CONCAT/8                  #118=     #117                 132:') ORDER BY FIELD(id, '	;0
190 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'implode'       	;2
191 76   SEND_VAL_EX/116           ?80       135:','              ?1                  	;0
192 76   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
193 76   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
194 76   CONCAT/8                  #120=     #118                 $119                	;0
195 76   CONCAT/8                  #121=     #120                 136:') ASC LIMIT 6;'	;0
196 76   SEND_VAL_EX/116           ?80       #121                 ?1                  	;0
197 76   DO_FCALL/60               ?93       ?0                   ?0                  	;0
198 77   GOTO/253                  ?0        ?721                 ?137                	;0
199 79   FETCH_DIM_R/81            $123=     16?1                 138:'streams'       	;0
200 79   FE_RESET_R/77             $124=     $123                 ?275                	;0
201 79   FE_FETCH_R/78             #125=     $124                 16?2                	;275	>>275	<<274
202 79   ASSIGN/38                 ?97       16?16                #125                	;0
203 80   NOP/0                     ?0        ?0                   ?0                  	;1
204 80   GOTO/253                  ?0        ?242                 ?139                	;0
205 82   FETCH_DIM_R/81            $127=     16?2                 140:'id'            	;0
206 82   ECHO/40                   ?0        $127                 ?0                  	;0
207 83   ECHO/40                   ?0        141:'">'             ?0                  	;0
208 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'htmlspecialchars'	;1
209 84   FETCH_DIM_FUNC_ARG/93     $128=     16?2                 144:'title'         	;1
210 84   SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
211 84   DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
212 84   ECHO/40                   ?0        $129                 ?0                  	;0
213 85   ECHO/40                   ?0        145:'</a></h3>
                                <span class="card__rate">' ?0                  	;0
214 86   FETCH_DIM_R/81            $130=     16?2                 146:'year'          	;0
215 86   JMPZ/43                   ?0        $130                 ?223                	;0	>>223
216 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'intval'        	;1
217 86   FETCH_DIM_FUNC_ARG/93     $131=     16?2                 149:'year'          	;1
218 86   SEND_VAR_EX/66            ?80       $131                 ?1                  	;0
219 86   DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
220 86   CONCAT/8                  #133=     $132                 150:' &nbsp; '      	;0
221 86   QM_ASSIGN/22              #134=     #133                 ?0                  	;0
222 86   JMP/42                    ?0        ?239                 ?0                  	;0	>>239
223 86   FETCH_DIM_R/81            $135=     16?2                 151:'releaseDate'   	;0	<<215
224 86   JMPZ/43                   ?0        $135                 ?237                	;0	>>237
225 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'intval'        	;1
226 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'substr'        	;3
227 86   FETCH_DIM_FUNC_ARG/93     $136=     16?2                 156:'releaseDate'   	;1
228 86   SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
229 86   SEND_VAL_EX/116           ?96       157:0                ?2                  	;0
230 86   SEND_VAL_EX/116           ?112      158:4                ?3                  	;0
231 86   DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
232 86   SEND_VAR_NO_REF_EX/50     ?80       $137                 ?1                  	;0
233 86   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
234 86   CONCAT/8                  #139=     $138                 159:' &nbsp; '      	;0
235 86   QM_ASSIGN/22              #140=     #139                 ?0                  	;0
236 86   JMP/42                    ?0        ?238                 ?0                  	;0	>>238
237 86   QM_ASSIGN/22              #140=     160:''               ?0                  	;0	<<224
238 86   QM_ASSIGN/22              #134=     #140                 ?0                  	;0	<<236
239 86   ECHO/40                   ?0        #134                 ?0                  	;0	<<222
240 87   NOP/0                     ?0        ?0                   ?0                  	;1
241 87   GOTO/253                  ?0        ?259                 ?161                	;0
242 89   ECHO/40                   ?0        162:'                    <div class="col-6 col-sm-4 col-lg-3 col-xl-3">
                        <div class="card">
                            <div class="card__cover">
                                <img loading="lazy" src="resize.php?url=' ?0                  	;0
243 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'urlencode'     	;1
244 90   INIT_STATIC_METHOD_CALL/113 ?0        165:'XUI'            167:'Fca722697178454b'	;1
245 90   FETCH_DIM_FUNC_ARG/93     $141=     16?2                 169:'cover'         	;1
246 90   SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
247 90   DO_FCALL/60               $142=     ?0                   ?0                  	;0
248 90   JMP_SET/152               #143=     $142                 ?250                	;0
249 90   QM_ASSIGN/22              #143=     170:''               ?0                  	;0
250 90   SEND_VAL_EX/116           ?80       #143                 ?1                  	;0
251 90   DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
252 90   ECHO/40                   ?0        $144                 ?0                  	;0
253 91   ECHO/40                   ?0        171:'&w=267&h=400" alt="">
                                <a href="episodes.php?id=' ?0                  	;0
254 92   FETCH_DIM_R/81            $145=     16?2                 172:'id'            	;0
255 92   ECHO/40                   ?0        $145                 ?0                  	;0
256 93   ECHO/40                   ?0        173:'" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a href="episodes.php?id=' ?0                  	;0
257 94   NOP/0                     ?0        ?0                   ?0                  	;1
258 94   GOTO/253                  ?0        ?205                 ?174                	;0
259 96   ECHO/40                   ?0        175:'<i class="icon ion-ios-star"></i>' ?0                  	;0
260 97   FETCH_DIM_R/81            $146=     16?2                 176:'rating'        	;0
261 97   JMPZ/43                   ?0        $146                 ?269                	;0	>>269
262 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'number_format' 	;2
263 97   FETCH_DIM_FUNC_ARG/93     $147=     16?2                 179:'rating'        	;1
264 97   SEND_VAR_EX/66            ?80       $147                 ?1                  	;0
265 97   SEND_VAL_EX/116           ?96       180:0                ?2                  	;0
266 97   DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
267 97   QM_ASSIGN/22              #149=     $148                 ?0                  	;0
268 97   JMP/42                    ?0        ?270                 ?0                  	;0	>>270
269 97   QM_ASSIGN/22              #149=     181:'N/A'            ?0                  	;0	<<261
270 97   ECHO/40                   ?0        #149                 ?0                  	;0	<<268
271 98   ECHO/40                   ?0        182:'</span>
                            </div>
                        </div>
                    </div>
                ' ?0                  	;0
272 100  NOP/0                     ?0        ?0                   ?0                  	;1
273 100  GOTO/253                  ?0        ?274                 ?183                	;0
274 101  JMP/42                    ?0        ?201                 ?0                  	;0	>>201
275 101  FE_FREE/127               ?0        $124                 ?0                  	;0	<<200
276 104  JMPZ/43                   ?0        16?5                 ?278                	;0	>>278
277 105  GOTO/253                  ?0        ?407                 ?184                	;0
278 107  ECHO/40                   ?0        185:'				<div class="col-12">
					<ul class="paginator">
                        ' ?0                  	;0	<<276
279 108  IS_SMALLER/19             #150=     186:1                16?13               	;0
280 108  BOOL_NOT/13               #151=     #150                 ?0                  	;0
281 108  JMPZ/43                   ?0        #151                 ?283                	;0	>>283
282 109  GOTO/253                  ?0        ?590                 ?187                	;0
283 111  GOTO/253                  ?0        ?586                 ?188                	;0	<<281
284 114  IS_SMALLER/19             #152=     16?13                16?17               	;0
285 114  BOOL_NOT/13               #153=     #152                 ?0                  	;0
286 114  JMPZ/43                   ?0        #153                 ?288                	;0	>>288
287 115  GOTO/253                  ?0        ?292                 ?189                	;0
288 117  ADD/1                     #154=     16?13                190:1               	;0	<<286
289 117  CONCAT/8                  #155=     191:'<li class="paginator__item paginator__item--next">
                                <a href="series.php?page=' #154                	;0
290 117  CONCAT/8                  #156=     #155                 192:'"><i class="icon ion-ios-arrow-forward"></i></a>
                            </li>'	;0
291 117  ECHO/40                   ?0        #156                 ?0                  	;0
292 119  ECHO/40                   ?0        193:'					</ul>
				</div>
                ' ?0                  	;0
293 120  GOTO/253                  ?0        ?407                 ?194                	;0
294 123  ASSIGN/38                 ?128      16?18                195:'TV Series'     	;0
295 124  INCLUDE_OR_EVAL/73        ?129      196:'header.php'     ?0                  	;2
296 125  ECHO/40                   ?0        197:'	<section class="section section--first">
        <div class="details__bg" data-bg="' ?0                  	;0
297 126  ECHO/40                   ?0        16?4                 ?0                  	;0
298 127  GOTO/253                  ?0        ?564                 ?198                	;0
299 129  IS_SMALLER/19             #159=     16?10                199:1900            	;0
300 129  JMPNZ_EX/47               #159=     #159                 ?306                	;0	>>306
301 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'date'          	;1
302 129  SEND_VAL_EX/116           ?80       202:'Y'              ?1                  	;0
303 129  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
304 129  IS_SMALLER/19             #161=     $160                 16?10               	;0
305 129  BOOL/52                   #159=     #161                 ?0                  	;0
306 129  BOOL_NOT/13               #162=     #159                 ?0                  	;0	<<300
307 129  JMPZ/43                   ?0        #162                 ?309                	;0	>>309
308 130  GOTO/253                  ?0        ?310                 ?203                	;0
309 132  ASSIGN/38                 ?134      16?10                204:1900            	;0	<<307
310 134  IS_SMALLER/19             #164=     16?11                205:1900            	;0
311 134  JMPNZ_EX/47               #164=     #164                 ?317                	;0	>>317
312 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'date'          	;1
313 134  SEND_VAL_EX/116           ?80       208:'Y'              ?1                  	;0
314 134  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
315 134  IS_SMALLER/19             #166=     $165                 16?11               	;0
316 134  BOOL/52                   #164=     #166                 ?0                  	;0
317 134  JMPNZ_EX/47               #164=     #164                 ?320                	;0	>>320	<<311
318 134  IS_SMALLER/19             #167=     16?11                16?10               	;0
319 134  BOOL/52                   #164=     #167                 ?0                  	;0
320 134  BOOL_NOT/13               #168=     #164                 ?0                  	;0	<<317
321 134  JMPZ/43                   ?0        #168                 ?323                	;0	>>323
322 135  GOTO/253                  ?0        ?75                  ?209                	;0
323 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'date'          	;1	<<321
324 137  SEND_VAL_EX/116           ?80       212:'Y'              ?1                  	;0
325 137  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
326 137  ASSIGN/38                 ?141      16?11                $169                	;0
327 138  GOTO/253                  ?0        ?75                  ?213                	;0
328 141  ECHO/40                   ?0        214:'					</div>
				</div>
			</div>
		</div>
	</section>
    ' ?0                  	;0
329 142  BOOL_NOT/13               #171=     16?5                 ?0                  	;0
330 142  JMPZ_EX/46                #171=     #171                 ?333                	;0	>>333
331 142  BOOL_NOT/13               #172=     16?6                 ?0                  	;0
332 142  BOOL/52                   #171=     #172                 ?0                  	;0
333 142  BOOL_NOT/13               #173=     #171                 ?0                  	;0	<<330
334 142  JMPZ/43                   ?0        #173                 ?336                	;0	>>336
335 143  GOTO/253                  ?0        ?639                 ?215                	;0
336 145  ECHO/40                   ?0        216:'	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">GENRE:</span>
								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="' ?0                  	;0	<<334
337 146  ISSET_ISEMPTY_CV/197      #174=     16?19                ?0                  	;33554432
338 146  JMPZ/43                   ?0        #174                 ?344                	;0	>>344
339 146  FETCH_STATIC_PROP_R/173   $175=     217:'rCategories'    218:'XUI'           	;0
340 146  FETCH_DIM_R/81            $176=     $175                 16?19               	;0
341 146  FETCH_DIM_R/81            $177=     $176                 220:'category_name' 	;0
342 146  QM_ASSIGN/22              #178=     $177                 ?0                  	;0
343 146  JMP/42                    ?0        ?345                 ?0                  	;0	>>345
344 146  QM_ASSIGN/22              #178=     221:'All Genres'     ?0                  	;0	<<338
345 146  ECHO/40                   ?0        #178                 ?0                  	;0	<<343
346 147  GOTO/253                  ?0        ?437                 ?222                	;0
347 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'intval'        	;1
348 149  FETCH_STATIC_PROP_FUNC_ARG/177 $179=     225:'rRequest'       226:'XUI'           	;1
349 149  FETCH_DIM_FUNC_ARG/93     $180=     $179                 228:'category'      	;1
350 149  SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
351 149  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
352 149  JMP_SET/152               #182=     $181                 ?354                	;0
353 149  QM_ASSIGN/22              #182=     229:NULL             ?0                  	;0
354 149  ASSIGN/38                 ?154      16?19                #182                	;0
355 150  FETCH_STATIC_PROP_R/173   $184=     230:'rRequest'       231:'XUI'           	;0
356 150  FETCH_DIM_R/81            $185=     $184                 233:'search'        	;0
357 150  JMP_SET/152               #186=     $185                 ?359                	;0
358 150  QM_ASSIGN/22              #186=     234:NULL             ?0                  	;0
359 150  ASSIGN/38                 ?158      16?6                 #186                	;0
360 151  BOOL_NOT/13               #188=     16?6                 ?0                  	;0
361 151  JMPZ/43                   ?0        #188                 ?363                	;0	>>363
362 152  GOTO/253                  ?0        ?539                 ?235                	;0
363 154  ASSIGN/38                 ?160      16?13                236:1               	;0	<<361
364 155  ASSIGN/38                 ?161      16?14                237:100             	;0
365 156  GOTO/253                  ?0        ?539                 ?238                	;0
366 158  ASSIGN/38                 ?162      16?20                239:array (
  'number' => 'Default',
  'added' => 'Last Updated',
  'release' => 'Air Date',
  'name' => 'Title A-Z',
  'top' => 'Rating',
)	;0
367 159  FETCH_STATIC_PROP_R/173   $192=     240:'rRequest'       241:'XUI'           	;0
368 159  FETCH_DIM_R/81            $193=     $192                 243:'sort'          	;0
369 159  ISSET_ISEMPTY_DIM_OBJ/115 #194=     16?20                $193                	;33554432
370 159  JMPZ/43                   ?0        #194                 ?375                	;0	>>375
371 159  FETCH_STATIC_PROP_R/173   $195=     244:'rRequest'       245:'XUI'           	;0
372 159  FETCH_DIM_R/81            $196=     $195                 247:'sort'          	;0
373 159  QM_ASSIGN/22              #197=     $196                 ?0                  	;0
374 159  JMP/42                    ?0        ?376                 ?0                  	;0	>>376
375 159  QM_ASSIGN/22              #197=     248:'number'         ?0                  	;0	<<370
376 159  ASSIGN/38                 ?169      16?21                #197                	;0	<<374
377 160  ASSIGN/38                 ?170      16?9                 249:array (
)       	;0
378 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'intval'        	;1
379 161  FETCH_STATIC_PROP_FUNC_ARG/177 $200=     252:'rRequest'       253:'XUI'           	;1
380 161  FETCH_DIM_FUNC_ARG/93     $201=     $200                 255:'year_s'        	;1
381 161  SEND_VAR_EX/66            ?80       $201                 ?1                  	;0
382 161  DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
383 161  JMP_SET/152               #203=     $202                 ?385                	;0
384 161  QM_ASSIGN/22              #203=     256:1900             ?0                  	;0
385 161  ASSIGN/38                 ?175      16?10                #203                	;0
386 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   257:'intval'        	;1
387 162  FETCH_STATIC_PROP_FUNC_ARG/177 $205=     259:'rRequest'       260:'XUI'           	;1
388 162  FETCH_DIM_FUNC_ARG/93     $206=     $205                 262:'year_e'        	;1
389 162  SEND_VAR_EX/66            ?80       $206                 ?1                  	;0
390 162  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
391 162  JMP_SET/152               #208=     $207                 ?396                	;0
392 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'date'          	;1
393 162  SEND_VAL_EX/116           ?80       265:'Y'              ?1                  	;0
394 162  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
395 162  QM_ASSIGN/22              #208=     $209                 ?0                  	;0
396 162  ASSIGN/38                 ?181      16?11                #208                	;0
397 163  GOTO/253                  ?0        ?299                 ?266                	;0
398 166  INIT_METHOD_CALL/112      ?0        16?15                267:'num_rows'      	;0
399 166  DO_FCALL/60               $211=     ?0                   ?0                  	;0
400 166  INIT_ARRAY/71             #212=     $211                 269:'count'         	;10
401 166  INIT_METHOD_CALL/112      ?0        16?15                270:'get_rows'      	;0
402 166  DO_FCALL/60               $213=     ?0                   ?0                  	;0
403 166  ADD_ARRAY_ELEMENT/72      #212=     $213                 272:'streams'       	;0
404 166  ASSIGN/38                 ?185      16?1                 #212                	;0
405 169  ASSIGN/38                 ?186      16?4                 273:''              	;0
406 170  GOTO/253                  ?0        ?1                   ?274                	;0
407 173  ECHO/40                   ?0        275:'			</div>
		</div>
	</div>
    ' ?0                  	;0
408 174  JMPZ/43                   ?0        16?5                 ?410                	;0	>>410
409 175  GOTO/253                  ?0        ?720                 ?276                	;0
410 177  INIT_STATIC_METHOD_CALL/113 ?0        277:'XUI'            279:'unserialize'   	;1	<<408
411 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'file_get_contents'	;1
412 177  FETCH_CONSTANT/99         #216=     ?0                   283:'CONTENT_PATH'  	;16
413 177  CONCAT/8                  #217=     #216                 286:'tmdb_popular'  	;0
414 177  SEND_VAL_EX/116           ?80       #217                 ?1                  	;0
415 177  DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
416 177  SEND_VAR_NO_REF_EX/50     ?80       $218                 ?1                  	;0
417 177  DO_FCALL/60               $219=     ?0                   ?0                  	;0
418 177  FETCH_DIM_R/81            $220=     $219                 287:'series'        	;0
419 177  JMP_SET/152               #221=     $220                 ?421                	;0
420 177  QM_ASSIGN/22              #221=     288:array (
)        ?0                  	;0
421 177  ASSIGN/38                 ?193      16?5                 #221                	;0
422 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   289:'count'         	;1
423 178  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
424 178  DO_FCALL_BY_NAME/131      $223=     ?0                   ?0                  	;0
425 178  IS_SMALLER/19             #224=     291:0                $223                	;0
426 178  JMPZ_EX/46                #224=     #224                 ?433                	;0	>>433
427 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'count'         	;1
428 178  FETCH_DIM_FUNC_ARG/93     $225=     16?12                294:'series_ids'    	;1
429 178  SEND_VAR_EX/66            ?80       $225                 ?1                  	;0
430 178  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
431 178  IS_SMALLER/19             #227=     295:0                $226                	;0
432 178  BOOL/52                   #224=     #227                 ?0                  	;0
433 178  BOOL_NOT/13               #228=     #224                 ?0                  	;0	<<426
434 178  JMPZ/43                   ?0        #228                 ?436                	;0	>>436
435 179  GOTO/253                  ?0        ?720                 ?296                	;0
436 181  GOTO/253                  ?0        ?149                 ?297                	;0	<<434
437 183  ECHO/40                   ?0        298:'">
									<span></span>
								</div>
								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                                    ' ?0                  	;0
438 184  INIT_STATIC_METHOD_CALL/113 ?0        299:'XUI'            301:'D15dcE7A49F71fea'	;2
439 184  FETCH_DIM_FUNC_ARG/93     $229=     16?12                303:'category_ids'  	;1
440 184  SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
441 184  SEND_VAL_EX/116           ?96       304:'series'         ?2                  	;0
442 184  DO_FCALL/60               $230=     ?0                   ?0                  	;0
443 184  FE_RESET_R/77             $231=     $230                 ?450                	;0
444 184  FE_FETCH_R/78             ?0        $231                 16?22               	;450	>>450	<<449
445 185  ECHO/40                   ?0        305:'									<li>'  ?0                  	;0
446 186  FETCH_DIM_R/81            $232=     16?22                306:'title'         	;0
447 186  ECHO/40                   ?0        $232                 ?0                  	;0
448 187  ECHO/40                   ?0        307:'</li>
                                    ' ?0                  	;0
449 188  JMP/42                    ?0        ?444                 ?0                  	;0	>>444
450 188  FE_FREE/127               ?0        $231                 ?0                  	;0	<<443
451 191  ECHO/40                   ?0        308:'								</ul>
							</div>
							<div class="filter__item" id="filter__rate">
								<span class="filter__item-label">RATING:</span>
								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__rating-start"></div>
										<div id="filter__rating-end"></div>
									</div>
									<span></span>
								</div>
								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
									<div id="filter__rating"></div>
								</div>
							</div>
							<div class="filter__item" id="filter__year">
								<span class="filter__item-label">YEAR:</span>
								<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="filter__range">
										<div id="filter__years-start"></div>
										<div id="filter__years-end"></div>
									</div>
									<span></span>
								</div>
								<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
									<div id="filter__years"></div>
								</div>
							</div>
							<div class="filter__item" id="filter__sort">
								<span class="filter__item-label">SORT:</span>
								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="' ?0                  	;0
452 192  ISSET_ISEMPTY_CV/197      #233=     16?21                ?0                  	;33554432
453 192  JMPZ/43                   ?0        #233                 ?457                	;0	>>457
454 192  FETCH_DIM_R/81            $234=     16?20                16?21               	;0
455 192  QM_ASSIGN/22              #235=     $234                 ?0                  	;0
456 192  JMP/42                    ?0        ?458                 ?0                  	;0	>>458
457 192  QM_ASSIGN/22              #235=     309:'Date Added'     ?0                  	;0	<<453
458 192  ECHO/40                   ?0        #235                 ?0                  	;0	<<456
459 193  GOTO/253                  ?0        ?629                 ?310                	;0
460 196  ECHO/40                   ?0        311:'            <section class="section">
                <div class="details__bg" data-bg="' ?0                  	;0
461 197  ECHO/40                   ?0        16?4                 ?0                  	;0
462 198  ECHO/40                   ?0        312:'"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="home__title bottom-margin-sml">POPULAR <b>THIS WEEK</b></h1>
                        </div>
                        ' ?0                  	;0
463 199  FE_RESET_R/77             $236=     16?23                ?537                	;0
464 199  FE_FETCH_R/78             ?0        $236                 16?2                	;537	>>537	<<536
465 200  NOP/0                     ?0        ?0                   ?0                  	;1
466 200  GOTO/253                  ?0        ?467                 ?313                	;0
467 202  ECHO/40                   ?0        314:'                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card__cover">
                                    <img loading="lazy" src="resize.php?url=' ?0                  	;0
468 203  INIT_FCALL_BY_NAME/59     ?0        ?0                   315:'urlencode'     	;1
469 203  INIT_STATIC_METHOD_CALL/113 ?0        317:'XUI'            319:'fCA722697178454B'	;1
470 203  FETCH_DIM_FUNC_ARG/93     $237=     16?2                 321:'cover'         	;1
471 203  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
472 203  DO_FCALL/60               $238=     ?0                   ?0                  	;0
473 203  JMP_SET/152               #239=     $238                 ?475                	;0
474 203  QM_ASSIGN/22              #239=     322:''               ?0                  	;0
475 203  SEND_VAL_EX/116           ?80       #239                 ?1                  	;0
476 203  DO_FCALL_BY_NAME/131      $240=     ?0                   ?0                  	;0
477 203  ECHO/40                   ?0        $240                 ?0                  	;0
478 204  ECHO/40                   ?0        323:'&w=267&h=400" alt="">
                                    <a href="episodes.php?id=' ?0                  	;0
479 205  FETCH_DIM_R/81            $241=     16?2                 324:'id'            	;0
480 205  ECHO/40                   ?0        $241                 ?0                  	;0
481 206  ECHO/40                   ?0        325:'" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="episodes.php?id=' ?0                  	;0
482 207  NOP/0                     ?0        ?0                   ?0                  	;1
483 207  GOTO/253                  ?0        ?499                 ?326                	;0
484 209  ECHO/40                   ?0        327:'<i class="icon ion-ios-star"></i>' ?0                  	;0
485 210  FETCH_DIM_R/81            $242=     16?2                 328:'rating'        	;0
486 210  JMPZ/43                   ?0        $242                 ?494                	;0	>>494
487 210  INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'number_format' 	;2
488 210  FETCH_DIM_FUNC_ARG/93     $243=     16?2                 331:'rating'        	;1
489 210  SEND_VAR_EX/66            ?80       $243                 ?1                  	;0
490 210  SEND_VAL_EX/116           ?96       332:0                ?2                  	;0
491 210  DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
492 210  QM_ASSIGN/22              #245=     $244                 ?0                  	;0
493 210  JMP/42                    ?0        ?495                 ?0                  	;0	>>495
494 210  QM_ASSIGN/22              #245=     333:'N/A'            ?0                  	;0	<<486
495 210  ECHO/40                   ?0        #245                 ?0                  	;0	<<493
496 211  ECHO/40                   ?0        334:'</span>
                                </div>
                            </div>
                        ' ?0                  	;0
497 213  NOP/0                     ?0        ?0                   ?0                  	;1
498 213  GOTO/253                  ?0        ?536                 ?335                	;0
499 215  FETCH_DIM_R/81            $246=     16?2                 336:'id'            	;0
500 215  ECHO/40                   ?0        $246                 ?0                  	;0
501 216  ECHO/40                   ?0        337:'">'             ?0                  	;0
502 217  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'htmlspecialchars'	;1
503 217  FETCH_DIM_FUNC_ARG/93     $247=     16?2                 340:'title'         	;1
504 217  SEND_VAR_EX/66            ?80       $247                 ?1                  	;0
505 217  DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
506 217  ECHO/40                   ?0        $248                 ?0                  	;0
507 218  ECHO/40                   ?0        341:'</a></h3>
                                    <span class="card__rate">' ?0                  	;0
508 219  FETCH_DIM_R/81            $249=     16?2                 342:'year'          	;0
509 219  JMPZ/43                   ?0        $249                 ?517                	;0	>>517
510 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'intval'        	;1
511 219  FETCH_DIM_FUNC_ARG/93     $250=     16?2                 345:'year'          	;1
512 219  SEND_VAR_EX/66            ?80       $250                 ?1                  	;0
513 219  DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
514 219  CONCAT/8                  #252=     $251                 346:' &nbsp; '      	;0
515 219  QM_ASSIGN/22              #253=     #252                 ?0                  	;0
516 219  JMP/42                    ?0        ?533                 ?0                  	;0	>>533
517 219  FETCH_DIM_R/81            $254=     16?2                 347:'releaseDate'   	;0	<<509
518 219  JMPZ/43                   ?0        $254                 ?531                	;0	>>531
519 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   348:'intval'        	;1
520 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   350:'substr'        	;3
521 219  FETCH_DIM_FUNC_ARG/93     $255=     16?2                 352:'releaseDate'   	;1
522 219  SEND_VAR_EX/66            ?80       $255                 ?1                  	;0
523 219  SEND_VAL_EX/116           ?96       353:0                ?2                  	;0
524 219  SEND_VAL_EX/116           ?112      354:4                ?3                  	;0
525 219  DO_FCALL_BY_NAME/131      $256=     ?0                   ?0                  	;0
526 219  SEND_VAR_NO_REF_EX/50     ?80       $256                 ?1                  	;0
527 219  DO_FCALL_BY_NAME/131      $257=     ?0                   ?0                  	;0
528 219  CONCAT/8                  #258=     $257                 355:' &nbsp; '      	;0
529 219  QM_ASSIGN/22              #259=     #258                 ?0                  	;0
530 219  JMP/42                    ?0        ?532                 ?0                  	;0	>>532
531 219  QM_ASSIGN/22              #259=     356:''               ?0                  	;0	<<518
532 219  QM_ASSIGN/22              #253=     #259                 ?0                  	;0	<<530
533 219  ECHO/40                   ?0        #253                 ?0                  	;0	<<516
534 220  NOP/0                     ?0        ?0                   ?0                  	;1
535 220  GOTO/253                  ?0        ?484                 ?357                	;0
536 221  JMP/42                    ?0        ?464                 ?0                  	;0	>>464
537 221  FE_FREE/127               ?0        $236                 ?0                  	;0	<<463
538 223  GOTO/253                  ?0        ?719                 ?358                	;0
539 226  INIT_STATIC_METHOD_CALL/113 ?0        359:'XUI'            361:'ad7c990925f39c05'	;8
540 226  SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
541 226  SEND_VAR_EX/66            ?96       16?19                ?2                  	;0
542 226  SEND_VAL_EX/116           ?112      363:NULL             ?3                  	;0
543 226  SEND_VAR_EX/66            ?128      16?21                ?4                  	;0
544 226  SEND_VAR_EX/66            ?144      16?6                 ?5                  	;0
545 226  SEND_VAR_EX/66            ?160      16?9                 ?6                  	;0
546 226  SUB/2                     #260=     16?13                364:1               	;0
547 226  MUL/3                     #261=     #260                 16?14               	;0
548 226  SEND_VAL_EX/116           ?176      #261                 ?7                  	;0
549 226  SEND_VAR_EX/66            ?192      16?14                ?8                  	;0
550 226  DO_FCALL/60               $262=     ?0                   ?0                  	;0
551 226  ASSIGN/38                 ?234      16?1                 $262                	;0
552 227  GOTO/253                  ?0        ?405                 ?365                	;0
553 229  ASSIGN/38                 ?235      16?5                 366:true            	;0
554 230  GOTO/253                  ?0        ?98                  ?367                	;0
555 232  ECHO/40                   ?0        368:'	<div class="catalog details' ?0                  	;0
556 233  JMPNZ_EX/47               #265=     16?5                 ?558                	;0	>>558
557 233  BOOL/52                   #265=     16?6                 ?0                  	;0
558 233  BOOL_NOT/13               #266=     #265                 ?0                  	;0	<<556
559 233  JMPZ/43                   ?0        #266                 ?561                	;0	>>561
560 234  GOTO/253                  ?0        ?562                 ?369                	;0
561 236  ECHO/40                   ?0        370:' top-margin-med' ?0                  	;0	<<559
562 238  ECHO/40                   ?0        371:'">
		<div class="container">
			<div class="row">
                ' ?0                  	;0
563 239  GOTO/253                  ?0        ?199                 ?372                	;0
564 241  ECHO/40                   ?0        373:'"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<h2 class="section__title">' ?0                  	;0
565 242  JMPZ/43                   ?0        16?6                 ?574                	;0	>>574
566 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'strtoupper'    	;1
567 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'htmlspecialchars'	;1
568 242  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
569 242  DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
570 242  SEND_VAR_NO_REF_EX/50     ?80       $267                 ?1                  	;0
571 242  DO_FCALL_BY_NAME/131      $268=     ?0                   ?0                  	;0
572 242  QM_ASSIGN/22              #269=     $268                 ?0                  	;0
573 242  JMP/42                    ?0        ?579                 ?0                  	;0	>>579
574 242  JMPZ/43                   ?0        16?5                 ?577                	;0	>>577	<<565
575 242  QM_ASSIGN/22              #270=     378:'POPULAR TV SERIES' ?0                  	;0
576 242  JMP/42                    ?0        ?578                 ?0                  	;0	>>578
577 242  QM_ASSIGN/22              #270=     379:'TV SERIES'      ?0                  	;0	<<574
578 242  QM_ASSIGN/22              #269=     #270                 ?0                  	;0	<<576
579 242  ECHO/40                   ?0        #269                 ?0                  	;0	<<573
580 243  ECHO/40                   ?0        380:'</h2>
                        ' ?0                  	;0
581 244  BOOL_NOT/13               #271=     16?6                 ?0                  	;0
582 244  JMPZ/43                   ?0        #271                 ?584                	;0	>>584
583 245  GOTO/253                  ?0        ?328                 ?381                	;0
584 247  ECHO/40                   ?0        382:'                        <button class="clear__btn wide" type="button">CLEAR</button>
                        ' ?0                  	;0	<<582
585 248  GOTO/253                  ?0        ?328                 ?383                	;0
586 250  SUB/2                     #272=     16?13                384:1               	;0
587 250  CONCAT/8                  #273=     385:'<li class="paginator__item paginator__item--prev">
                                <a href="series.php?page=' #272                	;0
588 250  CONCAT/8                  #274=     #273                 386:'"><i class="icon ion-ios-arrow-back"></i></a>
                            </li>'	;0
589 250  ECHO/40                   ?0        #274                 ?0                  	;0
590 252  FETCH_DIM_R/81            $275=     16?24                387:0               	;0
591 252  IS_SMALLER/19             #276=     388:1                $275                	;0
592 252  BOOL_NOT/13               #277=     #276                 ?0                  	;0
593 252  JMPZ/43                   ?0        #277                 ?595                	;0	>>595
594 253  GOTO/253                  ?0        ?612                 ?389                	;0
595 255  IS_EQUAL/17               #278=     16?13                390:1               	;0	<<593
596 255  JMPZ/43                   ?0        #278                 ?599                	;0	>>599
597 255  QM_ASSIGN/22              #279=     391:' paginator__item--active' ?0                  	;0
598 255  JMP/42                    ?0        ?600                 ?0                  	;0	>>600
599 255  QM_ASSIGN/22              #279=     392:''               ?0                  	;0	<<596
600 255  CONCAT/8                  #280=     393:'<li class="paginator__item' #279                	;0	<<598
601 255  CONCAT/8                  #281=     #280                 394:'"><a href="series.php?page=1">1</a></li>'	;0
602 255  ECHO/40                   ?0        #281                 ?0                  	;0
603 256  INIT_FCALL_BY_NAME/59     ?0        ?0                   395:'count'         	;1
604 256  SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
605 256  DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
606 256  IS_SMALLER/19             #283=     397:1                $282                	;0
607 256  BOOL_NOT/13               #284=     #283                 ?0                  	;0
608 256  JMPZ/43                   ?0        #284                 ?610                	;0	>>610
609 257  GOTO/253                  ?0        ?612                 ?398                	;0
610 259  GOTO/253                  ?0        ?611                 ?399                	;0	<<608
611 261  ECHO/40                   ?0        400:'<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>' ?0                  	;0
612 264  FE_RESET_R/77             $285=     16?24                ?627                	;0
613 264  FE_FETCH_R/78             ?0        $285                 16?25               	;627	>>627	<<626
614 265  IS_EQUAL/17               #286=     16?13                16?25               	;0
615 265  JMPZ/43                   ?0        #286                 ?618                	;0	>>618
616 265  QM_ASSIGN/22              #287=     401:' paginator__item--active' ?0                  	;0
617 265  JMP/42                    ?0        ?619                 ?0                  	;0	>>619
618 265  QM_ASSIGN/22              #287=     402:''               ?0                  	;0	<<615
619 265  CONCAT/8                  #288=     403:'<li class="paginator__item' #287                	;0	<<617
620 265  CONCAT/8                  #289=     #288                 404:'"><a href="series.php?page='	;0
621 265  CONCAT/8                  #290=     #289                 16?25               	;0
622 265  CONCAT/8                  #291=     #290                 405:'">'            	;0
623 265  CONCAT/8                  #292=     #291                 16?25               	;0
624 265  CONCAT/8                  #293=     #292                 406:'</a></li>'     	;0
625 265  ECHO/40                   ?0        #293                 ?0                  	;0
626 266  JMP/42                    ?0        ?613                 ?0                  	;0	>>613
627 266  FE_FREE/127               ?0        $285                 ?0                  	;0	<<612
628 269  GOTO/253                  ?0        ?750                 ?407                	;0
629 271  ECHO/40                   ?0        408:'">
									<span></span>
								</div>
								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
                                    ' ?0                  	;0
630 272  FE_RESET_R/77             $294=     16?20                ?637                	;0
631 272  FE_FETCH_R/78             #295=     $294                 16?26               	;637	>>637	<<636
632 272  ASSIGN/38                 ?267      16?27                #295                	;0
633 273  ECHO/40                   ?0        409:'									<li>'  ?0                  	;0
634 274  ECHO/40                   ?0        16?26                ?0                  	;0
635 275  ECHO/40                   ?0        410:'</li>
                                    ' ?0                  	;0
636 276  JMP/42                    ?0        ?631                 ?0                  	;0	>>631
637 276  FE_FREE/127               ?0        $294                 ?0                  	;0	<<630
638 279  ECHO/40                   ?0        411:'								</ul>
							</div>
						</div>
                        <div>
                            <button class="filter__btn" type="button">filter</button>
                            <button class="clear__btn" type="button">X</button>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    ' ?0                  	;0
639 281  GOTO/253                  ?0        ?555                 ?412                	;0
640 283  FETCH_DIM_R/81            $297=     16?1                 413:'count'         	;0
641 283  ASSIGN/38                 ?269      16?28                $297                	;0
642 284  INIT_FCALL_BY_NAME/59     ?0        ?0                   414:'ceil'          	;1
643 284  DIV/4                     #299=     16?28                16?14               	;0
644 284  SEND_VAL_EX/116           ?80       #299                 ?1                  	;0
645 284  DO_FCALL_BY_NAME/131      $300=     ?0                   ?0                  	;0
646 284  ASSIGN/38                 ?272      16?17                $300                	;0
647 285  ASSIGN/38                 ?273      16?24                416:array (
)       	;0
648 286  INIT_FCALL_BY_NAME/59     ?0        ?0                   417:'range'         	;2
649 286  SUB/2                     #303=     16?13                419:2               	;0
650 286  SEND_VAL_EX/116           ?80       #303                 ?1                  	;0
651 286  ADD/1                     #304=     16?13                420:2               	;0
652 286  SEND_VAL_EX/116           ?96       #304                 ?2                  	;0
653 286  DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
654 286  FE_RESET_R/77             $306=     $305                 ?667                	;0
655 286  FE_FETCH_R/78             ?0        $306                 16?25               	;667	>>667	<<666
656 287  IS_SMALLER_OR_EQUAL/20    #307=     421:1                16?25               	;0
657 287  JMPZ_EX/46                #307=     #307                 ?660                	;0	>>660
658 287  IS_SMALLER_OR_EQUAL/20    #308=     16?25                16?17               	;0
659 287  BOOL/52                   #307=     #308                 ?0                  	;0
660 287  BOOL_NOT/13               #309=     #307                 ?0                  	;0	<<657
661 287  JMPZ/43                   ?0        #309                 ?664                	;0	>>664
662 288  NOP/0                     ?0        ?0                   ?0                  	;1
663 288  GOTO/253                  ?0        ?666                 ?422                	;0
664 290  ASSIGN_DIM/147            ?281      16?24                ?4397406            	;0	<<661
665 290  OP_DATA/137               ?0        16?25                ?0                  	;0
666 292  JMP/42                    ?0        ?655                 ?0                  	;0	>>655
667 292  FE_FREE/127               ?0        $306                 ?0                  	;0	<<654
668 295  GOTO/253                  ?0        ?294                 ?423                	;0
669 297  FETCH_CONSTANT/99         #311=     ?0                   424:'PLATFORM'      	;16
670 297  IS_EQUAL/17               #312=     #311                 427:'xui'           	;0
671 297  JMPZ/43                   ?0        #312                 ?673                	;0	>>673
672 298  GOTO/253                  ?0        ?696                 ?428                	;0
673 300  INIT_METHOD_CALL/112      ?0        16?15                429:'query'         	;1	<<671
674 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   431:'implode'       	;2
675 300  SEND_VAL_EX/116           ?80       433:','              ?1                  	;0
676 300  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
677 300  DO_FCALL_BY_NAME/131      $313=     ?0                   ?0                  	;0
678 300  CONCAT/8                  #314=     434:'SELECT `id`, `title`, `releaseDate`, `rating`, `cover`, `backdrop_path` FROM `series` WHERE `id` IN (' $313                	;0
679 300  CONCAT/8                  #315=     #314                 435:') AND `id` IN ('	;0
680 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   436:'implode'       	;2
681 300  SEND_VAL_EX/116           ?80       438:','              ?1                  	;0
682 300  FETCH_DIM_FUNC_ARG/93     $316=     16?12                439:'series_ids'    	;2
683 300  SEND_VAR_EX/66            ?96       $316                 ?2                  	;0
684 300  DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
685 300  CONCAT/8                  #318=     #315                 $317                	;0
686 300  CONCAT/8                  #319=     #318                 440:') ORDER BY FIELD(id, '	;0
687 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   441:'implode'       	;2
688 300  SEND_VAL_EX/116           ?80       443:','              ?1                  	;0
689 300  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
690 300  DO_FCALL_BY_NAME/131      $320=     ?0                   ?0                  	;0
691 300  CONCAT/8                  #321=     #319                 $320                	;0
692 300  CONCAT/8                  #322=     #321                 444:') ASC LIMIT 100;'	;0
693 300  SEND_VAL_EX/116           ?80       #322                 ?1                  	;0
694 300  DO_FCALL/60               ?294      ?0                   ?0                  	;0
695 301  GOTO/253                  ?0        ?398                 ?445                	;0
696 303  INIT_METHOD_CALL/112      ?0        16?15                446:'query'         	;1
697 303  INIT_FCALL_BY_NAME/59     ?0        ?0                   448:'implode'       	;2
698 303  SEND_VAL_EX/116           ?80       450:','              ?1                  	;0
699 303  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
700 303  DO_FCALL_BY_NAME/131      $324=     ?0                   ?0                  	;0
701 303  CONCAT/8                  #325=     451:'SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' $324                	;0
702 303  CONCAT/8                  #326=     #325                 452:') AND `id` IN ('	;0
703 303  INIT_FCALL_BY_NAME/59     ?0        ?0                   453:'implode'       	;2
704 303  SEND_VAL_EX/116           ?80       455:','              ?1                  	;0
705 303  FETCH_DIM_FUNC_ARG/93     $327=     16?12                456:'series_ids'    	;2
706 303  SEND_VAR_EX/66            ?96       $327                 ?2                  	;0
707 303  DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
708 303  CONCAT/8                  #329=     #326                 $328                	;0
709 303  CONCAT/8                  #330=     #329                 457:') ORDER BY FIELD(id, '	;0
710 303  INIT_FCALL_BY_NAME/59     ?0        ?0                   458:'implode'       	;2
711 303  SEND_VAL_EX/116           ?80       460:','              ?1                  	;0
712 303  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
713 303  DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
714 303  CONCAT/8                  #332=     #330                 $331                	;0
715 303  CONCAT/8                  #333=     #332                 461:') ASC LIMIT 100;'	;0
716 303  SEND_VAL_EX/116           ?80       #333                 ?1                  	;0
717 303  DO_FCALL/60               ?305      ?0                   ?0                  	;0
718 304  GOTO/253                  ?0        ?398                 ?462                	;0
719 307  ECHO/40                   ?0        463:'                        <div class="col-12">
                            <a href="series.php?sort=popular" class="section__btn">Show more</a>
                        </div>
                    </div>
                </div>
            </section>
        ' ?0                  	;0
720 310  GOTO/253                  ?0        ?780                 ?464                	;0
721 313  INIT_METHOD_CALL/112      ?0        16?15                465:'get_rows'      	;0
722 313  DO_FCALL/60               $335=     ?0                   ?0                  	;0
723 313  ASSIGN/38                 ?307      16?23                $335                	;0
724 314  ASSIGN/38                 ?308      16?0                 16?23               	;0
725 315  INIT_FCALL_BY_NAME/59     ?0        ?0                   467:'shuffle'       	;1
726 315  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
727 315  DO_FCALL_BY_NAME/131      ?309      ?0                   ?0                  	;0
728 316  FE_RESET_R/77             $339=     16?0                 ?748                	;0
729 316  FE_FETCH_R/78             ?0        $339                 16?2                	;748	>>748	<<747
730 317  INIT_FCALL_BY_NAME/59     ?0        ?0                   469:'json_decode'   	;2
731 317  FETCH_DIM_FUNC_ARG/93     $340=     16?2                 471:'backdrop_path' 	;1
732 317  SEND_VAR_EX/66            ?80       $340                 ?1                  	;0
733 317  SEND_VAL_EX/116           ?96       472:true             ?2                  	;0
734 317  DO_FCALL_BY_NAME/131      $341=     ?0                   ?0                  	;0
735 317  ASSIGN/38                 ?313      16?3                 $341                	;0
736 318  ISSET_ISEMPTY_DIM_OBJ/115 #343=     16?3                 473:0               	;16777216
737 318  JMPZ/43                   ?0        #343                 ?740                	;0	>>740
738 319  NOP/0                     ?0        ?0                   ?0                  	;1
739 319  GOTO/253                  ?0        ?747                 ?474                	;0
740 321  INIT_STATIC_METHOD_CALL/113 ?0        475:'XUI'            477:'fCa722697178454B'	;1	<<737
741 321  FETCH_DIM_FUNC_ARG/93     $344=     16?3                 479:0               	;1
742 321  SEND_VAR_EX/66            ?80       $344                 ?1                  	;0
743 321  DO_FCALL/60               $345=     ?0                   ?0                  	;0
744 321  ASSIGN/38                 ?317      16?4                 $345                	;0
745 322  FE_FREE/127               ?0        $339                 ?18                 	;1
746 322  GOTO/253                  ?0        ?460                 ?480                	;0
747 324  JMP/42                    ?0        ?729                 ?0                  	;0	>>729
748 324  FE_FREE/127               ?0        $339                 ?0                  	;0	<<728
749 326  GOTO/253                  ?0        ?460                 ?481                	;0
750 328  INIT_FCALL_BY_NAME/59     ?0        ?0                   482:'count'         	;1
751 328  SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
752 328  DO_FCALL_BY_NAME/131      $347=     ?0                   ?0                  	;0
753 328  SUB/2                     #348=     $347                 484:1               	;0
754 328  FETCH_DIM_R/81            $349=     16?24                #348                	;0
755 328  IS_SMALLER/19             #350=     $349                 16?17               	;0
756 328  BOOL_NOT/13               #351=     #350                 ?0                  	;0
757 328  JMPZ/43                   ?0        #351                 ?759                	;0	>>759
758 329  GOTO/253                  ?0        ?284                 ?485                	;0
759 331  INIT_FCALL_BY_NAME/59     ?0        ?0                   486:'count'         	;1	<<757
760 331  SEND_VAR_EX/66            ?80       16?24                ?1                  	;0
761 331  DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
762 331  IS_SMALLER/19             #353=     488:1                $352                	;0
763 331  BOOL_NOT/13               #354=     #353                 ?0                  	;0
764 331  JMPZ/43                   ?0        #354                 ?766                	;0	>>766
765 332  GOTO/253                  ?0        ?767                 ?489                	;0
766 334  ECHO/40                   ?0        490:'<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>' ?0                  	;0	<<764
767 336  IS_EQUAL/17               #355=     16?13                16?17               	;0
768 336  JMPZ/43                   ?0        #355                 ?771                	;0	>>771
769 336  QM_ASSIGN/22              #356=     491:' paginator__item--active' ?0                  	;0
770 336  JMP/42                    ?0        ?772                 ?0                  	;0	>>772
771 336  QM_ASSIGN/22              #356=     492:''               ?0                  	;0	<<768
772 336  CONCAT/8                  #357=     493:'<li class="paginator__item' #356                	;0	<<770
773 336  CONCAT/8                  #358=     #357                 494:'"><a href="series.php?page='	;0
774 336  CONCAT/8                  #359=     #358                 16?17               	;0
775 336  CONCAT/8                  #360=     #359                 495:'">'            	;0
776 336  CONCAT/8                  #361=     #360                 16?17               	;0
777 336  CONCAT/8                  #362=     #361                 496:'</a></li>'     	;0
778 336  ECHO/40                   ?0        #362                 ?0                  	;0
779 337  GOTO/253                  ?0        ?284                 ?497                	;0
780 339  INCLUDE_OR_EVAL/73        ?334      498:'footer.php'     ?0                  	;2
781 340  NOP/0                     ?0        499:1                ?0                  	;4294967295
*/

?>