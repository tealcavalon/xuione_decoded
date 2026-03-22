<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INCLUDE_OR_EVAL/73        ?0        1:'functions.php'    ?0                  	;2	<<0
2   6    INIT_STATIC_METHOD_CALL/113 ?0        2:'XUI'              4:'Cb6Ee16e86f09e61'	;1
3   6    FETCH_STATIC_PROP_FUNC_ARG/177 $22=      6:'rRequest'         7:'XUI'             	;1
4   6    FETCH_DIM_FUNC_ARG/93     $23=      $22                  9:'id'              	;1
5   6    SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
6   6    DO_FCALL/60               $24=      ?0                   ?0                  	;0
7   6    ASSIGN/38                 $25=      16?0                 $24                 	;0
8   6    BOOL_NOT/13               #26=      $25                  ?0                  	;0
9   6    JMPNZ_EX/47               #26=      #26                  ?19                 	;0	>>19
10  6    INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'in_array'       	;2
11  6    FETCH_STATIC_PROP_FUNC_ARG/177 $27=      12:'rRequest'        13:'XUI'            	;1
12  6    FETCH_DIM_FUNC_ARG/93     $28=      $27                  15:'id'             	;1
13  6    SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
14  6    FETCH_DIM_FUNC_ARG/93     $29=      16?1                 16:'vod_ids'        	;2
15  6    SEND_VAR_EX/66            ?96       $29                  ?2                  	;0
16  6    DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
17  6    BOOL_NOT/13               #31=      $30                  ?0                  	;0
18  6    BOOL/52                   #26=      #31                  ?0                  	;0
19  6    BOOL_NOT/13               #32=      #26                  ?0                  	;0	<<9
20  6    JMPZ/43                   ?0        #32                  ?22                 	;0	>>22
21  7    GOTO/253                  ?0        ?26                  ?17                 	;0
22  9    INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'header'         	;1	<<20
23  9    SEND_VAL_EX/116           ?80       20:'Location: movies.php' ?1                  	;0
24  9    DO_FCALL_BY_NAME/131      ?12       ?0                   ?0                  	;0
25  10   EXIT/79                   ?0        ?0                   ?0                  	;0
26  12   GOTO/253                  ?0        ?396                 ?21                 	;0
27  15   GOTO/253                  ?0        ?49                  ?22                 	;0
28  17   INIT_METHOD_CALL/112      ?0        16?2                 23:'query'          	;2
29  17   ROPE_INIT/54              #35=      ?0                   25:'SELECT `streams`.*, COUNT(`user_id`) AS `count` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `user_id` IN (SELECT DISTINCT(`user_id`) FROM `lines_activity` WHERE `stream_id` = ? AND (`date_end` - `date_start` > 60)) AND `type` = 2 AND '	;3
30  17   ROPE_ADD/55               #35=      #35                  16?3                	;1
31  17   ROPE_END/56               #34=      #35                  26:' `stream_id` IN ('	;2
32  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'implode'        	;2
33  17   SEND_VAL_EX/116           ?80       29:','               ?1                  	;0
34  17   FETCH_DIM_FUNC_ARG/93     $37=      16?1                 30:'vod_ids'        	;2
35  17   SEND_VAR_EX/66            ?96       $37                  ?2                  	;0
36  17   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
37  17   CONCAT/8                  #39=      #34                  $38                 	;0
38  17   CONCAT/8                  #40=      #39                  31:') AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 GROUP BY `stream_id` ORDER BY `count` DESC LIMIT '	;0
39  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'count'          	;1
40  17   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
41  17   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
42  17   SUB/2                     #42=      34:6                 $41                 	;0
43  17   CONCAT/8                  #43=      #40                  #42                 	;0
44  17   CONCAT/8                  #44=      #43                  35:';'              	;0
45  17   SEND_VAL_EX/116           ?80       #44                  ?1                  	;0
46  17   FETCH_DIM_FUNC_ARG/93     $45=      16?0                 36:'id'             	;2
47  17   SEND_VAR_EX/66            ?96       $45                  ?2                  	;0
48  17   DO_FCALL/60               ?25       ?0                   ?0                  	;0
49  19   GOTO/253                  ?0        ?420                 ?37                 	;0
50  21   ECHO/40                   ?0        38:' min</li>
										<li><span><strong>Country:</strong></span> <a href="#">' ?0                  	;0
51  22   FETCH_DIM_R/81            $47=      16?5                 39:'country'        	;0
52  22   ECHO/40                   ?0        $47                  ?0                  	;0
53  23   ECHO/40                   ?0        40:'</a> </li>
                                        <li>
                                            <span><strong>Cast:</strong></span>
                                            ' ?0                  	;0
54  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   41:'implode'        	;2
55  24   SEND_VAL_EX/116           ?80       43:', '              ?1                  	;0
56  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'array_slice'    	;3
57  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'explode'        	;2
58  24   SEND_VAL_EX/116           ?80       48:','               ?1                  	;0
59  24   FETCH_DIM_FUNC_ARG/93     $48=      16?5                 49:'cast'           	;2
60  24   SEND_VAR_EX/66            ?96       $48                  ?2                  	;0
61  24   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
62  24   SEND_VAR_NO_REF_EX/50     ?80       $49                  ?1                  	;0
63  24   SEND_VAL_EX/116           ?96       50:0                 ?2                  	;0
64  24   SEND_VAL_EX/116           ?112      51:5                 ?3                  	;0
65  24   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
66  24   SEND_VAR_NO_REF_EX/50     ?96       $50                  ?2                  	;0
67  24   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
68  24   ECHO/40                   ?0        $51                  ?0                  	;0
69  25   ECHO/40                   ?0        52:'                                        </li>
									</ul>
									<div class="card__description card__description--details">
										' ?0                  	;0
70  26   GOTO/253                  ?0        ?552                 ?53                 	;0
71  28   ASSIGN/38                 ?31       16?4                 54:array (
)        	;0
72  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'json_decode'    	;2
73  29   FETCH_DIM_FUNC_ARG/93     $53=      16?0                 57:'similar'        	;1
74  29   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
75  29   SEND_VAL_EX/116           ?96       58:true              ?2                  	;0
76  29   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
77  29   ASSIGN/38                 ?34       16?6                 $54                 	;0
78  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'count'          	;1
79  30   SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
80  30   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
81  30   IS_SMALLER/19             #57=      61:0                 $56                 	;0
82  30   BOOL_NOT/13               #58=      #57                  ?0                  	;0
83  30   JMPZ/43                   ?0        #58                  ?85                 	;0	>>85
84  31   GOTO/253                  ?0        ?271                 ?62                 	;0
85  33   FETCH_STATIC_PROP_R/173   $59=      63:'rSettings'       64:'XUI'            	;0	<<83
86  33   FETCH_DIM_R/81            $60=      $59                  66:'player_hide_incompatible'	;0
87  33   JMPZ/43                   ?0        $60                  ?89                 	;0	>>89
88  34   GOTO/253                  ?0        ?149                 ?67                 	;0
89  36   FETCH_CONSTANT/99         #61=      ?0                   68:'PLATFORM'       	;16	<<87
90  36   IS_EQUAL/17               #62=      #61                  71:'xui'            	;0
91  36   JMPZ/43                   ?0        #62                  ?93                 	;0	>>93
92  37   GOTO/253                  ?0        ?596                 ?72                 	;0
93  39   GOTO/253                  ?0        ?586                 ?73                 	;0	<<91
94  41   FETCH_DIM_R/81            $63=      16?8                 74:'_data'          	;0
95  41   FETCH_DIM_R/81            $64=      $63                  75:'images'         	;0
96  41   FETCH_DIM_R/81            $65=      $64                  76:'backdrops'      	;0
97  41   FETCH_DIM_R/81            $66=      $65                  16?9                	;0
98  41   JMPZ/43                   ?0        $66                  ?107                	;0	>>107
99  41   FETCH_DIM_R/81            $67=      16?8                 77:'_data'          	;0
100 41   FETCH_DIM_R/81            $68=      $67                  78:'images'         	;0
101 41   FETCH_DIM_R/81            $69=      $68                  79:'backdrops'      	;0
102 41   FETCH_DIM_R/81            $70=      $69                  16?9                	;0
103 41   FETCH_DIM_R/81            $71=      $70                  80:'file_path'      	;0
104 41   CONCAT/8                  #72=      81:'https://image.tmdb.org/t/p/w1280' $71                 	;0
105 41   QM_ASSIGN/22              #73=      #72                  ?0                  	;0
106 41   JMP/42                    ?0        ?115                 ?0                  	;0	>>115
107 41   INIT_STATIC_METHOD_CALL/113 ?0        82:'XUI'             84:'fCA722697178454B'	;1	<<98
108 41   FETCH_DIM_FUNC_ARG/93     $74=      16?5                 86:'backdrop_path'  	;1
109 41   FETCH_DIM_FUNC_ARG/93     $75=      $74                  87:0                	;1
110 41   SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
111 41   DO_FCALL/60               $76=      ?0                   ?0                  	;0
112 41   JMP_SET/152               #77=      $76                  ?114                	;0
113 41   QM_ASSIGN/22              #77=      88:''                ?0                  	;0
114 41   QM_ASSIGN/22              #73=      #77                  ?0                  	;0
115 41   ASSIGN/38                 ?57       16?7                 #73                 	;0	<<106
116 42   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'array_rand'     	;1
117 42   FETCH_DIM_FUNC_ARG/93     $79=      16?8                 91:'_data'          	;1
118 42   FETCH_DIM_FUNC_ARG/93     $80=      $79                  92:'images'         	;1
119 42   FETCH_DIM_FUNC_ARG/93     $81=      $80                  93:'posters'        	;1
120 42   SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
121 42   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
122 42   ASSIGN/38                 ?62       16?10                $82                 	;0
123 43   FETCH_DIM_R/81            $84=      16?8                 94:'_data'          	;0
124 43   FETCH_DIM_R/81            $85=      $84                  95:'images'         	;0
125 43   FETCH_DIM_R/81            $86=      $85                  96:'posters'        	;0
126 43   FETCH_DIM_R/81            $87=      $86                  16?10               	;0
127 43   JMPZ/43                   ?0        $87                  ?136                	;0	>>136
128 43   FETCH_DIM_R/81            $88=      16?8                 97:'_data'          	;0
129 43   FETCH_DIM_R/81            $89=      $88                  98:'images'         	;0
130 43   FETCH_DIM_R/81            $90=      $89                  99:'posters'        	;0
131 43   FETCH_DIM_R/81            $91=      $90                  16?10               	;0
132 43   FETCH_DIM_R/81            $92=      $91                  100:'file_path'     	;0
133 43   CONCAT/8                  #93=      101:'https://image.tmdb.org/t/p/w600_and_h900_bestv2' $92                 	;0
134 43   QM_ASSIGN/22              #94=      #93                  ?0                  	;0
135 43   JMP/42                    ?0        ?143                 ?0                  	;0	>>143
136 43   INIT_STATIC_METHOD_CALL/113 ?0        102:'XUI'            104:'fCA722697178454b'	;1	<<127
137 43   FETCH_DIM_FUNC_ARG/93     $95=      16?5                 106:'cover'         	;1
138 43   SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
139 43   DO_FCALL/60               $96=      ?0                   ?0                  	;0
140 43   JMP_SET/152               #97=      $96                  ?142                	;0
141 43   QM_ASSIGN/22              #97=      107:''               ?0                  	;0
142 43   QM_ASSIGN/22              #94=      #97                  ?0                  	;0
143 43   ASSIGN/38                 ?77       16?11                #94                 	;0	<<135
144 45   FETCH_DIM_R/81            $99=      16?0                 108:'id'            	;0
145 45   INIT_ARRAY/71             #100=     $99                  ?0                  	;4
146 45   ASSIGN/38                 ?80       16?12                #100                	;0
147 46   GOTO/253                  ?0        ?71                  ?109                	;0
148 48   GOTO/253                  ?0        ?158                 ?110                	;0
149 50   INIT_METHOD_CALL/112      ?0        16?2                 111:'query'         	;1
150 50   INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'implode'       	;2
151 50   SEND_VAL_EX/116           ?80       115:','              ?1                  	;0
152 50   SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
153 50   DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
154 50   CONCAT/8                  #103=     116:'SELECT * FROM `streams` WHERE `tmdb_id` IN (' $102                	;0
155 50   CONCAT/8                  #104=     #103                 117:') AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 LIMIT 6;'	;0
156 50   SEND_VAL_EX/116           ?80       #104                 ?1                  	;0
157 50   DO_FCALL/60               ?84       ?0                   ?0                  	;0
158 52   INIT_METHOD_CALL/112      ?0        16?2                 118:'get_rows'      	;0
159 52   DO_FCALL/60               $106=     ?0                   ?0                  	;0
160 52   FE_RESET_R/77             $107=     $106                 ?210                	;0
161 52   FE_FETCH_R/78             ?0        $107                 16?13               	;210	>>210	<<209
162 53   INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'json_decode'   	;2
163 53   FETCH_CONSTANT/99         #108=     ?0                   122:'PLATFORM'      	;16
164 53   IS_EQUAL/17               #109=     #108                 125:'xui'           	;0
165 53   JMPZ/43                   ?0        #109                 ?169                	;0	>>169
166 53   FETCH_DIM_R/81            $110=     16?13                126:'movie_properties'	;0
167 53   QM_ASSIGN/22              #111=     $110                 ?0                  	;0
168 53   JMP/42                    ?0        ?171                 ?0                  	;0	>>171
169 53   FETCH_DIM_R/81            $112=     16?13                127:'movie_propeties'	;0	<<165
170 53   QM_ASSIGN/22              #111=     $112                 ?0                  	;0
171 53   SEND_VAL_EX/116           ?80       #111                 ?1                  	;0	<<168
172 53   SEND_VAL_EX/116           ?96       128:true             ?2                  	;0
173 53   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
174 53   ASSIGN/38                 ?93       16?14                $113                	;0
175 54   INIT_ARRAY/71             #116=     129:'movie'          130:'type'          	;30
176 54   FETCH_DIM_R/81            $117=     16?13                131:'id'            	;0
177 54   ADD_ARRAY_ELEMENT/72      #116=     $117                 132:'id'            	;0
178 54   FETCH_DIM_R/81            $118=     16?13                133:'title'         	;0
179 54   JMP_SET/152               #119=     $118                 ?182                	;0
180 54   FETCH_DIM_R/81            $120=     16?13                134:'stream_display_name'	;0
181 54   QM_ASSIGN/22              #119=     $120                 ?0                  	;0
182 54   ADD_ARRAY_ELEMENT/72      #116=     #119                 135:'title'         	;0
183 54   FETCH_DIM_R/81            $121=     16?13                136:'year'          	;0
184 54   JMP_SET/152               #122=     $121                 ?186                	;0
185 54   QM_ASSIGN/22              #122=     137:NULL             ?0                  	;0
186 54   ADD_ARRAY_ELEMENT/72      #116=     #122                 138:'year'          	;0
187 54   FETCH_DIM_R/81            $123=     16?14                139:'rating'        	;0
188 54   ADD_ARRAY_ELEMENT/72      #116=     $123                 140:'rating'        	;0
189 54   INIT_STATIC_METHOD_CALL/113 ?0        141:'XUI'            143:'FCA722697178454B'	;1
190 54   FETCH_DIM_FUNC_ARG/93     $124=     16?14                145:'movie_image'   	;1
191 54   SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
192 54   DO_FCALL/60               $125=     ?0                   ?0                  	;0
193 54   JMP_SET/152               #126=     $125                 ?195                	;0
194 54   QM_ASSIGN/22              #126=     146:''               ?0                  	;0
195 54   ADD_ARRAY_ELEMENT/72      #116=     #126                 147:'cover'         	;0
196 54   INIT_STATIC_METHOD_CALL/113 ?0        148:'XUI'            150:'FCA722697178454b'	;1
197 54   FETCH_DIM_FUNC_ARG/93     $127=     16?14                152:'backdrop_path' 	;1
198 54   FETCH_DIM_FUNC_ARG/93     $128=     $127                 153:0               	;1
199 54   SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
200 54   DO_FCALL/60               $129=     ?0                   ?0                  	;0
201 54   JMP_SET/152               #130=     $129                 ?203                	;0
202 54   QM_ASSIGN/22              #130=     154:''               ?0                  	;0
203 54   ADD_ARRAY_ELEMENT/72      #116=     #130                 155:'backdrop'      	;0
204 54   ASSIGN_DIM/147            ?94       16?4                 ?2670194944         	;0
205 54   OP_DATA/137               ?0        #116                 ?0                  	;0
206 55   FETCH_DIM_R/81            $132=     16?13                156:'id'            	;0
207 55   ASSIGN_DIM/147            ?110      16?12                ?0                  	;0
208 55   OP_DATA/137               ?0        $132                 ?0                  	;0
209 56   JMP/42                    ?0        ?161                 ?0                  	;0	>>161
210 56   FE_FREE/127               ?0        $107                 ?0                  	;0	<<160
211 58   GOTO/253                  ?0        ?271                 ?157                	;0
212 60   ECHO/40                   ?0        158:'	<section class="section details">
		<div class="details__bg" data-bg="' ?0                  	;0
213 61   ECHO/40                   ?0        16?7                 ?0                  	;0
214 62   ECHO/40                   ?0        159:'"></div>
		<div class="container top-margin">
			<div class="row">
				<div class="col-12">
					<h1 class="details__title">' ?0                  	;0
215 63   FETCH_DIM_R/81            $133=     16?0                 160:'stream_display_name'	;0
216 63   ECHO/40                   ?0        $133                 ?0                  	;0
217 64   ECHO/40                   ?0        161:'<br/>
                        <ul class="card__list">
                            ' ?0                  	;0
218 65   GOTO/253                  ?0        ?307                 ?162                	;0
219 67   INIT_STATIC_METHOD_CALL/113 ?0        163:'XUI'            165:'unserialize'   	;1
220 67   INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'file_get_contents'	;1
221 67   FETCH_CONSTANT/99         #134=     ?0                   169:'TMP_PATH'      	;16
222 67   CONCAT/8                  #135=     #134                 172:'tmdb_'         	;0
223 67   FETCH_DIM_R/81            $136=     16?5                 173:'tmdb_id'       	;0
224 67   CONCAT/8                  #137=     #135                 $136                	;0
225 67   SEND_VAL_EX/116           ?80       #137                 ?1                  	;0
226 67   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
227 67   SEND_VAR_NO_REF_EX/50     ?80       $138                 ?1                  	;0
228 67   DO_FCALL/60               $139=     ?0                   ?0                  	;0
229 67   ASSIGN/38                 ?119      16?8                 $139                	;0
230 68   GOTO/253                  ?0        ?345                 ?174                	;0
231 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'json_decode'   	;2
232 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'json_encode'   	;1
233 70   INIT_STATIC_METHOD_CALL/113 ?0        179:'XUI'            181:'getMovieTMDB'  	;1
234 70   FETCH_DIM_FUNC_ARG/93     $141=     16?5                 183:'tmdb_id'       	;1
235 70   SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
236 70   DO_FCALL/60               $142=     ?0                   ?0                  	;0
237 70   SEND_VAR_NO_REF_EX/50     ?80       $142                 ?1                  	;0
238 70   DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
239 70   SEND_VAR_NO_REF_EX/50     ?80       $143                 ?1                  	;0
240 70   SEND_VAL_EX/116           ?96       184:true             ?2                  	;0
241 70   DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
242 70   ASSIGN/38                 ?124      16?8                 $144                	;0
243 71   BOOL_NOT/13               #146=     16?8                 ?0                  	;0
244 71   JMPZ/43                   ?0        #146                 ?246                	;0	>>246
245 72   GOTO/253                  ?0        ?345                 ?185                	;0
246 74   GOTO/253                  ?0        ?334                 ?186                	;0	<<244
247 76   INIT_STATIC_METHOD_CALL/113 ?0        187:'XUI'            189:'FCA722697178454b'	;1
248 76   FETCH_DIM_FUNC_ARG/93     $147=     16?5                 191:'backdrop_path' 	;1
249 76   FETCH_DIM_FUNC_ARG/93     $148=     $147                 192:0               	;1
250 76   SEND_VAR_EX/66            ?80       $148                 ?1                  	;0
251 76   DO_FCALL/60               $149=     ?0                   ?0                  	;0
252 76   JMP_SET/152               #150=     $149                 ?254                	;0
253 76   QM_ASSIGN/22              #150=     193:''               ?0                  	;0
254 76   ASSIGN/38                 ?130      16?7                 #150                	;0
255 77   INIT_STATIC_METHOD_CALL/113 ?0        194:'XUI'            196:'fCA722697178454B'	;1
256 77   FETCH_DIM_FUNC_ARG/93     $152=     16?5                 198:'cover'         	;1
257 77   SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
258 77   DO_FCALL/60               $153=     ?0                   ?0                  	;0
259 77   JMP_SET/152               #154=     $153                 ?261                	;0
260 77   QM_ASSIGN/22              #154=     199:''               ?0                  	;0
261 77   ASSIGN/38                 ?134      16?11                #154                	;0
262 78   GOTO/253                  ?0        ?144                 ?200                	;0
263 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'array_rand'    	;1
264 80   FETCH_DIM_FUNC_ARG/93     $156=     16?8                 203:'_data'         	;1
265 80   FETCH_DIM_FUNC_ARG/93     $157=     $156                 204:'images'        	;1
266 80   FETCH_DIM_FUNC_ARG/93     $158=     $157                 205:'backdrops'     	;1
267 80   SEND_VAR_EX/66            ?80       $158                 ?1                  	;0
268 80   DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
269 80   ASSIGN/38                 ?139      16?9                 $159                	;0
270 81   GOTO/253                  ?0        ?94                  ?206                	;0
271 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'count'         	;1
272 85   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
273 85   DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
274 85   IS_SMALLER/19             #162=     $161                 209:6               	;0
275 85   BOOL_NOT/13               #163=     #162                 ?0                  	;0
276 85   JMPZ/43                   ?0        #163                 ?278                	;0	>>278
277 86   GOTO/253                  ?0        ?478                 ?210                	;0
278 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'count'         	;1	<<276
279 88   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
280 88   DO_FCALL_BY_NAME/131      $164=     ?0                   ?0                  	;0
281 88   IS_SMALLER/19             #165=     213:0                $164                	;0
282 88   JMPZ/43                   ?0        #165                 ?284                	;0	>>284
283 89   GOTO/253                  ?0        ?607                 ?214                	;0
284 91   ASSIGN/38                 ?145      16?3                 215:''              	;0	<<282
285 92   GOTO/253                  ?0        ?606                 ?216                	;0
286 94   FETCH_DIM_R/81            $167=     16?0                 217:'target_container'	;0
287 94   IS_NOT_EQUAL/18           #168=     $167                 218:'mp4'           	;0
288 94   BOOL_NOT/13               #169=     #168                 ?0                  	;0
289 94   JMPZ/43                   ?0        #169                 ?291                	;0	>>291
290 95   GOTO/253                  ?0        ?292                 ?219                	;0
291 97   ASSIGN/38                 ?149      16?15                220:true            	;0	<<289
292 99   FETCH_DIM_R/81            $171=     16?5                 221:'tmdb_id'       	;0
293 99   BOOL_NOT/13               #172=     $171                 ?0                  	;0
294 99   JMPZ/43                   ?0        #172                 ?296                	;0	>>296
295 100  GOTO/253                  ?0        ?345                 ?222                	;0
296 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'file_exists'   	;1	<<294
297 102  FETCH_CONSTANT/99         #173=     ?0                   225:'TMP_PATH'      	;16
298 102  CONCAT/8                  #174=     #173                 228:'tmdb_'         	;0
299 102  FETCH_DIM_R/81            $175=     16?5                 229:'tmdb_id'       	;0
300 102  CONCAT/8                  #176=     #174                 $175                	;0
301 102  SEND_VAL_EX/116           ?80       #176                 ?1                  	;0
302 102  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
303 102  BOOL_NOT/13               #178=     $177                 ?0                  	;0
304 102  JMPZ/43                   ?0        #178                 ?306                	;0	>>306
305 103  GOTO/253                  ?0        ?231                 ?230                	;0
306 105  GOTO/253                  ?0        ?219                 ?231                	;0	<<304
307 107  FETCH_CONSTANT/99         #179=     ?0                   232:'PLATFORM'      	;16
308 107  IS_EQUAL/17               #180=     #179                 235:'xui'           	;0
309 107  JMPZ/43                   ?0        #180                 ?317                	;0	>>317
310 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'json_decode'   	;2
311 107  FETCH_DIM_FUNC_ARG/93     $181=     16?0                 238:'category_id'   	;1
312 107  SEND_VAR_EX/66            ?80       $181                 ?1                  	;0
313 107  SEND_VAL_EX/116           ?96       239:true             ?2                  	;0
314 107  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
315 107  QM_ASSIGN/22              #183=     $182                 ?0                  	;0
316 107  JMP/42                    ?0        ?320                 ?0                  	;0	>>320
317 107  FETCH_DIM_R/81            $184=     16?0                 240:'category_id'   	;0	<<309
318 107  INIT_ARRAY/71             #185=     $184                 ?0                  	;4
319 107  QM_ASSIGN/22              #183=     #185                 ?0                  	;0
320 107  FE_RESET_R/77             $186=     #183                 ?329                	;0	<<316
321 107  FE_FETCH_R/78             ?0        $186                 16?16               	;329	>>329	<<328
322 108  ECHO/40                   ?0        241:'                            <li>' ?0                  	;0
323 109  FETCH_STATIC_PROP_R/173   $187=     242:'rCategories'    243:'XUI'           	;0
324 109  FETCH_DIM_R/81            $188=     $187                 16?16               	;0
325 109  FETCH_DIM_R/81            $189=     $188                 245:'category_name' 	;0
326 109  ECHO/40                   ?0        $189                 ?0                  	;0
327 110  ECHO/40                   ?0        246:'</li>
                            ' ?0                  	;0
328 111  JMP/42                    ?0        ?321                 ?0                  	;0	>>321
329 111  FE_FREE/127               ?0        $186                 ?0                  	;0	<<320
330 114  ECHO/40                   ?0        247:'                        </ul>
                    </h1>
				</div>
				<div class="col-12 col-xl-12">
					<div class="card card--details">
						<div class="row">
							<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<div class="card__cover">
									<img src="' ?0                  	;0
331 115  ECHO/40                   ?0        16?11                ?0                  	;0
332 116  ECHO/40                   ?0        248:'" alt="">
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate">' ?0                  	;0
333 117  GOTO/253                  ?0        ?560                 ?249                	;0
334 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'file_put_contents'	;2
335 119  FETCH_CONSTANT/99         #190=     ?0                   252:'TMP_PATH'      	;16
336 119  CONCAT/8                  #191=     #190                 255:'tmdb_'         	;0
337 119  FETCH_DIM_R/81            $192=     16?5                 256:'tmdb_id'       	;0
338 119  CONCAT/8                  #193=     #191                 $192                	;0
339 119  SEND_VAL_EX/116           ?80       #193                 ?1                  	;0
340 119  INIT_STATIC_METHOD_CALL/113 ?0        257:'XUI'            259:'serialize'     	;1
341 119  SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
342 119  DO_FCALL/60               $194=     ?0                   ?0                  	;0
343 119  SEND_VAR_NO_REF_EX/50     ?96       $194                 ?2                  	;0
344 119  DO_FCALL_BY_NAME/131      ?174      ?0                   ?0                  	;0
345 123  JMPZ/43                   ?0        16?8                 ?347                	;0	>>347
346 124  GOTO/253                  ?0        ?263                 ?261                	;0
347 126  GOTO/253                  ?0        ?247                 ?262                	;0	<<345
348 128  FETCH_CONSTANT/99         #196=     ?0                   263:'PLATFORM'      	;16
349 128  IS_EQUAL/17               #197=     #196                 266:'xui'           	;0
350 128  JMPZ/43                   ?0        #197                 ?352                	;0	>>352
351 129  GOTO/253                  ?0        ?374                 ?267                	;0
352 131  INIT_METHOD_CALL/112      ?0        16?2                 268:'query'         	;2	<<350
353 131  ROPE_INIT/54              #199=     ?0                   270:'SELECT `streams`.*, COUNT(`user_id`) AS `count` FROM `user_activity` LEFT JOIN `streams` ON `streams`.`id` = `user_activity`.`stream_id` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `user_id` IN (SELECT DISTINCT(`user_id`) FROM `user_activity` WHERE `stream_id` = ? AND (`date_end` - `date_start` > 60)) AND `type` = 2 AND '	;3
354 131  ROPE_ADD/55               #199=     #199                 16?3                	;1
355 131  ROPE_END/56               #198=     #199                 271:' `stream_id` IN ('	;2
356 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'implode'       	;2
357 131  SEND_VAL_EX/116           ?80       274:','              ?1                  	;0
358 131  FETCH_DIM_FUNC_ARG/93     $201=     16?1                 275:'vod_ids'       	;2
359 131  SEND_VAR_EX/66            ?96       $201                 ?2                  	;0
360 131  DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
361 131  CONCAT/8                  #203=     #198                 $202                	;0
362 131  CONCAT/8                  #204=     #203                 276:') GROUP BY `stream_id` ORDER BY `count` DESC LIMIT '	;0
363 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'count'         	;1
364 131  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
365 131  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
366 131  SUB/2                     #206=     279:6                $205                	;0
367 131  CONCAT/8                  #207=     #204                 #206                	;0
368 131  CONCAT/8                  #208=     #207                 280:';'             	;0
369 131  SEND_VAL_EX/116           ?80       #208                 ?1                  	;0
370 131  FETCH_DIM_FUNC_ARG/93     $209=     16?0                 281:'id'            	;2
371 131  SEND_VAR_EX/66            ?96       $209                 ?2                  	;0
372 131  DO_FCALL/60               ?189      ?0                   ?0                  	;0
373 132  GOTO/253                  ?0        ?27                  ?282                	;0
374 134  INIT_METHOD_CALL/112      ?0        16?2                 283:'query'         	;2
375 134  ROPE_INIT/54              #212=     ?0                   285:'SELECT `streams`.*, COUNT(`user_id`) AS `count` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `user_id` IN (SELECT DISTINCT(`user_id`) FROM `lines_activity` WHERE `stream_id` = ? AND (`date_end` - `date_start` > 60)) AND `type` = 2 AND '	;3
376 134  ROPE_ADD/55               #212=     #212                 16?3                	;1
377 134  ROPE_END/56               #211=     #212                 286:' `stream_id` IN ('	;2
378 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'implode'       	;2
379 134  SEND_VAL_EX/116           ?80       289:','              ?1                  	;0
380 134  FETCH_DIM_FUNC_ARG/93     $214=     16?1                 290:'vod_ids'       	;2
381 134  SEND_VAR_EX/66            ?96       $214                 ?2                  	;0
382 134  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
383 134  CONCAT/8                  #216=     #211                 $215                	;0
384 134  CONCAT/8                  #217=     #216                 291:') GROUP BY `stream_id` ORDER BY `count` DESC LIMIT '	;0
385 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'count'         	;1
386 134  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
387 134  DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
388 134  SUB/2                     #219=     294:6                $218                	;0
389 134  CONCAT/8                  #220=     #217                 #219                	;0
390 134  CONCAT/8                  #221=     #220                 295:';'             	;0
391 134  SEND_VAL_EX/116           ?80       #221                 ?1                  	;0
392 134  FETCH_DIM_FUNC_ARG/93     $222=     16?0                 296:'id'            	;2
393 134  SEND_VAR_EX/66            ?96       $222                 ?2                  	;0
394 134  DO_FCALL/60               ?202      ?0                   ?0                  	;0
395 135  GOTO/253                  ?0        ?27                  ?297                	;0
396 137  FETCH_CONSTANT/99         #224=     ?0                   298:'PLATFORM'      	;16
397 137  IS_EQUAL/17               #225=     #224                 301:'xui'           	;0
398 137  JMPZ/43                   ?0        #225                 ?400                	;0	>>400
399 138  GOTO/253                  ?0        ?417                 ?302                	;0
400 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'json_decode'   	;2	<<398
401 140  FETCH_DIM_FUNC_ARG/93     $227=     16?0                 306:'target_container'	;1
402 140  SEND_VAR_EX/66            ?80       $227                 ?1                  	;0
403 140  SEND_VAL_EX/116           ?96       307:true             ?2                  	;0
404 140  DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
405 140  FETCH_DIM_R/81            $229=     $228                 308:0               	;0
406 140  JMP_SET/152               #230=     $229                 ?408                	;0
407 140  QM_ASSIGN/22              #230=     309:'mp4'            ?0                  	;0
408 140  ASSIGN_DIM/147            ?205      16?0                 303:'target_container'	;0
409 140  OP_DATA/137               ?0        #230                 ?0                  	;0
410 141  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'json_decode'   	;2
411 141  FETCH_DIM_FUNC_ARG/93     $231=     16?0                 312:'movie_propeties'	;1
412 141  SEND_VAR_EX/66            ?80       $231                 ?1                  	;0
413 141  SEND_VAL_EX/116           ?96       313:true             ?2                  	;0
414 141  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
415 141  ASSIGN/38                 ?212      16?5                 $232                	;0
416 142  GOTO/253                  ?0        ?625                 ?314                	;0
417 144  GOTO/253                  ?0        ?619                 ?315                	;0
418 146  ECHO/40                   ?0        316:'					</div>
				</div>
			</div>
		</div>
	</section>
    ' ?0                  	;0
419 148  GOTO/253                  ?0        ?658                 ?317                	;0
420 150  INIT_METHOD_CALL/112      ?0        16?2                 318:'get_rows'      	;0
421 150  DO_FCALL/60               $234=     ?0                   ?0                  	;0
422 150  FE_RESET_R/77             $235=     $234                 ?477                	;0
423 150  FE_FETCH_R/78             ?0        $235                 16?13               	;477	>>477	<<476
424 151  FETCH_DIM_R/81            $236=     16?13                320:'id'            	;0
425 151  BOOL_NOT/13               #237=     $236                 ?0                  	;0
426 151  JMPZ/43                   ?0        #237                 ?429                	;0	>>429
427 152  NOP/0                     ?0        ?0                   ?0                  	;1
428 152  GOTO/253                  ?0        ?476                 ?321                	;0
429 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'json_decode'   	;2	<<426
430 154  FETCH_CONSTANT/99         #238=     ?0                   324:'PLATFORM'      	;16
431 154  IS_EQUAL/17               #239=     #238                 327:'xui'           	;0
432 154  JMPZ/43                   ?0        #239                 ?436                	;0	>>436
433 154  FETCH_DIM_R/81            $240=     16?13                328:'movie_properties'	;0
434 154  QM_ASSIGN/22              #241=     $240                 ?0                  	;0
435 154  JMP/42                    ?0        ?438                 ?0                  	;0	>>438
436 154  FETCH_DIM_R/81            $242=     16?13                329:'movie_propeties'	;0	<<432
437 154  QM_ASSIGN/22              #241=     $242                 ?0                  	;0
438 154  SEND_VAL_EX/116           ?80       #241                 ?1                  	;0	<<435
439 154  SEND_VAL_EX/116           ?96       330:true             ?2                  	;0
440 154  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
441 154  ASSIGN/38                 ?223      16?14                $243                	;0
442 155  INIT_ARRAY/71             #246=     331:'movie'          332:'type'          	;30
443 155  FETCH_DIM_R/81            $247=     16?13                333:'id'            	;0
444 155  ADD_ARRAY_ELEMENT/72      #246=     $247                 334:'id'            	;0
445 155  FETCH_DIM_R/81            $248=     16?13                335:'title'         	;0
446 155  JMP_SET/152               #249=     $248                 ?449                	;0
447 155  FETCH_DIM_R/81            $250=     16?13                336:'stream_display_name'	;0
448 155  QM_ASSIGN/22              #249=     $250                 ?0                  	;0
449 155  ADD_ARRAY_ELEMENT/72      #246=     #249                 337:'title'         	;0
450 155  FETCH_DIM_R/81            $251=     16?13                338:'year'          	;0
451 155  JMP_SET/152               #252=     $251                 ?453                	;0
452 155  QM_ASSIGN/22              #252=     339:NULL             ?0                  	;0
453 155  ADD_ARRAY_ELEMENT/72      #246=     #252                 340:'year'          	;0
454 155  FETCH_DIM_R/81            $253=     16?14                341:'rating'        	;0
455 155  ADD_ARRAY_ELEMENT/72      #246=     $253                 342:'rating'        	;0
456 155  INIT_STATIC_METHOD_CALL/113 ?0        343:'XUI'            345:'FCa722697178454b'	;1
457 155  FETCH_DIM_FUNC_ARG/93     $254=     16?14                347:'movie_image'   	;1
458 155  SEND_VAR_EX/66            ?80       $254                 ?1                  	;0
459 155  DO_FCALL/60               $255=     ?0                   ?0                  	;0
460 155  JMP_SET/152               #256=     $255                 ?462                	;0
461 155  QM_ASSIGN/22              #256=     348:''               ?0                  	;0
462 155  ADD_ARRAY_ELEMENT/72      #246=     #256                 349:'cover'         	;0
463 155  INIT_STATIC_METHOD_CALL/113 ?0        350:'XUI'            352:'fCa722697178454b'	;1
464 155  FETCH_DIM_FUNC_ARG/93     $257=     16?14                354:'backdrop_path' 	;1
465 155  FETCH_DIM_FUNC_ARG/93     $258=     $257                 355:0               	;1
466 155  SEND_VAR_EX/66            ?80       $258                 ?1                  	;0
467 155  DO_FCALL/60               $259=     ?0                   ?0                  	;0
468 155  JMP_SET/152               #260=     $259                 ?470                	;0
469 155  QM_ASSIGN/22              #260=     356:''               ?0                  	;0
470 155  ADD_ARRAY_ELEMENT/72      #246=     #260                 357:'backdrop'      	;0
471 155  ASSIGN_DIM/147            ?224      16?4                 ?2670194944         	;0
472 155  OP_DATA/137               ?0        #246                 ?0                  	;0
473 156  FETCH_DIM_R/81            $262=     16?13                358:'id'            	;0
474 156  ASSIGN_DIM/147            ?240      16?12                ?0                  	;0
475 156  OP_DATA/137               ?0        $262                 ?0                  	;0
476 158  JMP/42                    ?0        ?423                 ?0                  	;0	>>423
477 158  FE_FREE/127               ?0        $235                 ?0                  	;0	<<422
478 162  FETCH_DIM_R/81            $263=     16?0                 359:'stream_display_name'	;0
479 162  ASSIGN/38                 ?243      16?17                $263                	;0
480 163  INCLUDE_OR_EVAL/73        ?244      360:'header.php'     ?0                  	;2
481 164  GOTO/253                  ?0        ?212                 ?361                	;0
482 166  ECHO/40                   ?0        362:'                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
    ' ?0                  	;0
483 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   363:'count'         	;1
484 167  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
485 167  DO_FCALL_BY_NAME/131      $266=     ?0                   ?0                  	;0
486 167  IS_SMALLER/19             #267=     365:0                $266                	;0
487 167  BOOL_NOT/13               #268=     #267                 ?0                  	;0
488 167  JMPZ/43                   ?0        #268                 ?490                	;0	>>490
489 168  GOTO/253                  ?0        ?419                 ?366                	;0
490 170  ECHO/40                   ?0        367:'	<section class="content">
		<div class="container" style="margin-top: 30px;">
			<div class="row">
				<div class="col-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">Users Also Watched</h2>
						</div>
                        ' ?0                  	;0	<<488
491 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'array_slice'   	;3
492 171  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
493 171  SEND_VAL_EX/116           ?96       370:0                ?2                  	;0
494 171  SEND_VAL_EX/116           ?112      371:6                ?3                  	;0
495 171  DO_FCALL_BY_NAME/131      $269=     ?0                   ?0                  	;0
496 171  FE_RESET_R/77             $270=     $269                 ?550                	;0
497 171  FE_FETCH_R/78             ?0        $270                 16?18               	;550	>>550	<<549
498 172  NOP/0                     ?0        ?0                   ?0                  	;1
499 172  GOTO/253                  ?0        ?500                 ?372                	;0
500 174  ECHO/40                   ?0        373:'						<div class="col-4 col-sm-4 col-lg-2">
							<div class="card">
								<div class="card__cover">
									<img loading="lazy" src="resize.php?url=' ?0                  	;0
501 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   374:'urlencode'     	;1
502 175  FETCH_DIM_FUNC_ARG/93     $271=     16?18                376:'cover'         	;1
503 175  SEND_VAR_EX/66            ?80       $271                 ?1                  	;0
504 175  DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
505 175  ECHO/40                   ?0        $272                 ?0                  	;0
506 176  ECHO/40                   ?0        377:'&w=267&h=400" alt="">
                                    <a href="movie.php?id=' ?0                  	;0
507 177  FETCH_DIM_R/81            $273=     16?18                378:'id'            	;0
508 177  ECHO/40                   ?0        $273                 ?0                  	;0
509 178  ECHO/40                   ?0        379:'" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
								</div>
								<div class="card__content">
                                    <h3 class="card__title"><a href="movie.php?id=' ?0                  	;0
510 179  NOP/0                     ?0        ?0                   ?0                  	;1
511 179  GOTO/253                  ?0        ?527                 ?380                	;0
512 181  ECHO/40                   ?0        381:'<i class="icon ion-ios-star"></i>' ?0                  	;0
513 182  FETCH_DIM_R/81            $274=     16?18                382:'rating'        	;0
514 182  JMPZ/43                   ?0        $274                 ?522                	;0	>>522
515 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   383:'number_format' 	;2
516 182  FETCH_DIM_FUNC_ARG/93     $275=     16?18                385:'rating'        	;1
517 182  SEND_VAR_EX/66            ?80       $275                 ?1                  	;0
518 182  SEND_VAL_EX/116           ?96       386:1                ?2                  	;0
519 182  DO_FCALL_BY_NAME/131      $276=     ?0                   ?0                  	;0
520 182  QM_ASSIGN/22              #277=     $276                 ?0                  	;0
521 182  JMP/42                    ?0        ?523                 ?0                  	;0	>>523
522 182  QM_ASSIGN/22              #277=     387:'N/A'            ?0                  	;0	<<514
523 182  ECHO/40                   ?0        #277                 ?0                  	;0	<<521
524 183  ECHO/40                   ?0        388:'</span>
								</div>
							</div>
						</div>
                        ' ?0                  	;0
525 185  NOP/0                     ?0        ?0                   ?0                  	;1
526 185  GOTO/253                  ?0        ?549                 ?389                	;0
527 187  FETCH_DIM_R/81            $278=     16?18                390:'id'            	;0
528 187  ECHO/40                   ?0        $278                 ?0                  	;0
529 188  ECHO/40                   ?0        391:'">'             ?0                  	;0
530 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'htmlspecialchars'	;1
531 189  FETCH_DIM_FUNC_ARG/93     $279=     16?18                394:'title'         	;1
532 189  SEND_VAR_EX/66            ?80       $279                 ?1                  	;0
533 189  DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
534 189  ECHO/40                   ?0        $280                 ?0                  	;0
535 190  ECHO/40                   ?0        395:'</a></h3>
                                    <span class="card__rate">' ?0                  	;0
536 191  FETCH_DIM_R/81            $281=     16?18                396:'year'          	;0
537 191  JMPZ/43                   ?0        $281                 ?545                	;0	>>545
538 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   397:'intval'        	;1
539 191  FETCH_DIM_FUNC_ARG/93     $282=     16?18                399:'year'          	;1
540 191  SEND_VAR_EX/66            ?80       $282                 ?1                  	;0
541 191  DO_FCALL_BY_NAME/131      $283=     ?0                   ?0                  	;0
542 191  CONCAT/8                  #284=     $283                 400:' &nbsp; '      	;0
543 191  QM_ASSIGN/22              #285=     #284                 ?0                  	;0
544 191  JMP/42                    ?0        ?546                 ?0                  	;0	>>546
545 191  QM_ASSIGN/22              #285=     401:''               ?0                  	;0	<<537
546 191  ECHO/40                   ?0        #285                 ?0                  	;0	<<544
547 192  NOP/0                     ?0        ?0                   ?0                  	;1
548 192  GOTO/253                  ?0        ?512                 ?402                	;0
549 193  JMP/42                    ?0        ?497                 ?0                  	;0	>>497
550 193  FE_FREE/127               ?0        $270                 ?0                  	;0	<<496
551 196  GOTO/253                  ?0        ?418                 ?403                	;0
552 198  FETCH_DIM_R/81            $286=     16?5                 404:'description'   	;0
553 198  ECHO/40                   ?0        $286                 ?0                  	;0
554 199  ECHO/40                   ?0        405:'									</div>
								</div>
							</div>
						</div>
                        <div class="row top-margin-sml">
                            <div class="col-12">
                                <div class="alert alert-danger" id="player__error" style="display: none;"></div>
                                <div id="player_row">
                                    ' ?0                  	;0
555 200  JMPZ/43                   ?0        16?15                ?557                	;0	>>557
556 201  GOTO/253                  ?0        ?581                 ?406                	;0
557 203  ECHO/40                   ?0        407:'                                    <div id="now__playing__player"></div>
                                    ' ?0                  	;0	<<555
558 204  GOTO/253                  ?0        ?585                 ?408                	;0
559 205  GOTO/253                  ?0        ?581                 ?409                	;0
560 207  FETCH_DIM_R/81            $287=     16?0                 410:'year'          	;0
561 207  JMPZ/43                   ?0        $287                 ?566                	;0	>>566
562 207  FETCH_DIM_R/81            $288=     16?0                 411:'year'          	;0
563 207  CONCAT/8                  #289=     $288                 412:' &nbsp; '      	;0
564 207  QM_ASSIGN/22              #290=     #289                 ?0                  	;0
565 207  JMP/42                    ?0        ?567                 ?0                  	;0	>>567
566 207  QM_ASSIGN/22              #290=     413:''               ?0                  	;0	<<561
567 207  ECHO/40                   ?0        #290                 ?0                  	;0	<<565
568 208  ECHO/40                   ?0        414:'<i class="icon ion-ios-star"></i>' ?0                  	;0
569 209  FETCH_DIM_R/81            $291=     16?5                 415:'rating'        	;0
570 209  JMP_SET/152               #292=     $291                 ?572                	;0
571 209  QM_ASSIGN/22              #292=     416:'N/A'            ?0                  	;0
572 209  ECHO/40                   ?0        #292                 ?0                  	;0
573 210  ECHO/40                   ?0        417:'</span>
									</div>
									<ul class="card__meta">
										<li><span><strong>Duration:</strong></span> ' ?0                  	;0
574 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   418:'intval'        	;1
575 211  FETCH_DIM_R/81            $293=     16?5                 420:'duration_secs' 	;0
576 211  DIV/4                     #294=     $293                 421:60              	;0
577 211  SEND_VAL_EX/116           ?80       #294                 ?1                  	;0
578 211  DO_FCALL_BY_NAME/131      $295=     ?0                   ?0                  	;0
579 211  ECHO/40                   ?0        $295                 ?0                  	;0
580 212  GOTO/253                  ?0        ?50                  ?422                	;0
581 215  ECHO/40                   ?0        423:'                                    <video controls width="100%" autoplay>
                                        <source src="' ?0                  	;0
582 216  FETCH_DIM_R/81            $296=     16?19                424:0               	;0
583 216  ECHO/40                   ?0        $296                 ?0                  	;0
584 217  ECHO/40                   ?0        425:'" type="video/mp4" />
                                    </video>
                                    ' ?0                  	;0
585 219  GOTO/253                  ?0        ?482                 ?426                	;0
586 221  INIT_METHOD_CALL/112      ?0        16?2                 427:'query'         	;1
587 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   429:'implode'       	;2
588 221  SEND_VAL_EX/116           ?80       431:','              ?1                  	;0
589 221  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
590 221  DO_FCALL_BY_NAME/131      $297=     ?0                   ?0                  	;0
591 221  CONCAT/8                  #298=     432:'SELECT * FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `tmdb_id` IN (' $297                	;0
592 221  CONCAT/8                  #299=     #298                 433:') LIMIT 6;'    	;0
593 221  SEND_VAL_EX/116           ?80       #299                 ?1                  	;0
594 221  DO_FCALL/60               ?279      ?0                   ?0                  	;0
595 222  GOTO/253                  ?0        ?605                 ?434                	;0
596 224  INIT_METHOD_CALL/112      ?0        16?2                 435:'query'         	;1
597 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   437:'implode'       	;2
598 224  SEND_VAL_EX/116           ?80       439:','              ?1                  	;0
599 224  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
600 224  DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
601 224  CONCAT/8                  #302=     440:'SELECT * FROM `streams` WHERE `tmdb_id` IN (' $301                	;0
602 224  CONCAT/8                  #303=     #302                 441:') LIMIT 6;'    	;0
603 224  SEND_VAL_EX/116           ?80       #303                 ?1                  	;0
604 224  DO_FCALL/60               ?283      ?0                   ?0                  	;0
605 226  GOTO/253                  ?0        ?148                 ?442                	;0
606 228  GOTO/253                  ?0        ?614                 ?443                	;0
607 230  INIT_FCALL_BY_NAME/59     ?0        ?0                   444:'implode'       	;2
608 230  SEND_VAL_EX/116           ?80       446:','              ?1                  	;0
609 230  SEND_VAR_EX/66            ?96       16?12                ?2                  	;0
610 230  DO_FCALL_BY_NAME/131      $305=     ?0                   ?0                  	;0
611 230  CONCAT/8                  #306=     447:'`stream_id` NOT IN (' $305                	;0
612 230  CONCAT/8                  #307=     #306                 448:') AND '        	;0
613 230  ASSIGN/38                 ?287      16?3                 #307                	;0
614 232  FETCH_STATIC_PROP_R/173   $309=     449:'rSettings'      450:'XUI'           	;0
615 232  FETCH_DIM_R/81            $310=     $309                 452:'player_hide_incompatible'	;0
616 232  JMPZ/43                   ?0        $310                 ?618                	;0	>>618
617 233  GOTO/253                  ?0        ?28                  ?453                	;0
618 235  GOTO/253                  ?0        ?348                 ?454                	;0	<<616
619 237  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'json_decode'   	;2
620 237  FETCH_DIM_FUNC_ARG/93     $311=     16?0                 457:'movie_properties'	;1
621 237  SEND_VAR_EX/66            ?80       $311                 ?1                  	;0
622 237  SEND_VAL_EX/116           ?96       458:true             ?2                  	;0
623 237  DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
624 237  ASSIGN/38                 ?292      16?5                 $312                	;0
625 239  INIT_STATIC_METHOD_CALL/113 ?0        459:'XUI'            461:'c65c7F64E35c199F'	;1
626 239  FETCH_IS/89               $314=     463:'_SERVER'        ?0                  	;0
627 239  ISSET_ISEMPTY_DIM_OBJ/115 #315=     $314                 464:'HTTPS'         	;16777216
628 239  BOOL_NOT/13               #316=     #315                 ?0                  	;0
629 239  JMPZ_EX/46                #316=     #316                 ?634                	;0	>>634
630 239  FETCH_R/80                $317=     465:'_SERVER'        ?0                  	;0
631 239  FETCH_DIM_R/81            $318=     $317                 466:'HTTPS'         	;0
632 239  IS_NOT_IDENTICAL/16       #319=     $318                 467:'off'           	;0
633 239  BOOL/52                   #316=     #319                 ?0                  	;0
634 239  JMPNZ_EX/47               #316=     #316                 ?639                	;0	>>639	<<629
635 239  FETCH_R/80                $320=     468:'_SERVER'        ?0                  	;0
636 239  FETCH_DIM_R/81            $321=     $320                 469:'SERVER_PORT'   	;0
637 239  IS_EQUAL/17               #322=     $321                 470:443             	;0
638 239  BOOL/52                   #316=     #322                 ?0                  	;0
639 239  SEND_VAL_EX/116           ?80       #316                 ?1                  	;0	<<634
640 239  DO_FCALL/60               $323=     ?0                   ?0                  	;0
641 239  ASSIGN/38                 ?303      16?20                $323                	;0
642 240  CONCAT/8                  #325=     16?20                471:'movie/'        	;0
643 240  FETCH_DIM_R/81            $326=     16?1                 472:'username'      	;0
644 240  CONCAT/8                  #327=     #325                 $326                	;0
645 240  CONCAT/8                  #328=     #327                 473:'/'             	;0
646 240  FETCH_DIM_R/81            $329=     16?1                 474:'password'      	;0
647 240  CONCAT/8                  #330=     #328                 $329                	;0
648 240  CONCAT/8                  #331=     #330                 475:'/'             	;0
649 240  FETCH_DIM_R/81            $332=     16?0                 476:'id'            	;0
650 240  CONCAT/8                  #333=     #331                 $332                	;0
651 240  CONCAT/8                  #334=     #333                 477:'.'             	;0
652 240  FETCH_DIM_R/81            $335=     16?0                 478:'target_container'	;0
653 240  CONCAT/8                  #336=     #334                 $335                	;0
654 240  INIT_ARRAY/71             #337=     #336                 479:0               	;4
655 240  ASSIGN/38                 ?317      16?19                #337                	;0
656 241  ASSIGN/38                 ?318      16?15                480:false           	;0
657 242  GOTO/253                  ?0        ?286                 ?481                	;0
658 244  INCLUDE_OR_EVAL/73        ?319      482:'footer.php'     ?0                  	;2
659 245  NOP/0                     ?0        483:1                ?0                  	;4294967295
*/

?>