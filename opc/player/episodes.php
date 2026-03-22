<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?332                 ?0                  	;0	>>332
1   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'intval'          	;1
2   6    FETCH_STATIC_PROP_FUNC_ARG/177 $26=      3:'rRequest'         4:'XUI'             	;1
3   6    FETCH_DIM_FUNC_ARG/93     $27=      $26                  6:'season'          	;1
4   6    SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
5   6    DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
6   6    JMP_SET/152               #29=      $28                  ?11                 	;0
7   6    FETCH_DIM_R/81            $30=      16?1                 7:0                 	;0
8   6    JMP_SET/152               #31=      $30                  ?10                 	;0
9   6    QM_ASSIGN/22              #31=      8:1                  ?0                  	;0
10  6    QM_ASSIGN/22              #29=      #31                  ?0                  	;0
11  6    ASSIGN/38                 ?6        16?0                 #29                 	;0
12  7    FETCH_STATIC_PROP_R/173   $33=      9:'rSettings'        10:'XUI'            	;0
13  7    FETCH_DIM_R/81            $34=      $33                  12:'player_hide_incompatible'	;0
14  7    JMPZ/43                   ?0        $34                  ?16                 	;0	>>16
15  8    GOTO/253                  ?0        ?423                 ?13                 	;0
16  10   FETCH_CONSTANT/99         #35=      ?0                   14:'PLATFORM'       	;16	<<14
17  10   IS_EQUAL/17               #36=      #35                  17:'xui'            	;0
18  10   JMPZ/43                   ?0        #36                  ?20                 	;0	>>20
19  11   GOTO/253                  ?0        ?788                 ?18                 	;0
20  13   INIT_METHOD_CALL/112      ?0        16?2                 19:'query'          	;3	<<18
21  13   SEND_VAL_EX/116           ?80       21:'SELECT * FROM `series_episodes` LEFT JOIN `streams` ON `streams`.`id` = `series_episodes`.`stream_id` WHERE `series_id` = ? AND `season_num` = ? ORDER BY `sort` ASC;' ?1                  	;0
22  13   FETCH_DIM_FUNC_ARG/93     $37=      16?3                 22:'id'             	;2
23  13   SEND_VAR_EX/66            ?96       $37                  ?2                  	;0
24  13   SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
25  13   DO_FCALL/60               ?12       ?0                   ?0                  	;0
26  14   GOTO/253                  ?0        ?787                 ?23                 	;0
27  16   JMPZ_EX/46                #39=      16?4                 ?30                 	;0	>>30
28  16   FETCH_DIM_R/81            $40=      16?4                 24:'episodes'       	;0
29  16   BOOL/52                   #39=      $40                  ?0                  	;0
30  16   JMPZ/43                   ?0        #39                  ?32                 	;0	>>32	<<27
31  17   GOTO/253                  ?0        ?89                  ?25                 	;0
32  19   FE_RESET_R/77             $41=      16?5                 ?87                 	;0	<<30
33  19   FE_FETCH_R/78             ?0        $41                  16?6                	;87	>>87	<<86
34  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'json_decode'    	;2
35  20   FETCH_CONSTANT/99         #42=      ?0                   28:'PLATFORM'       	;16
36  20   IS_EQUAL/17               #43=      #42                  31:'xui'            	;0
37  20   JMPZ/43                   ?0        #43                  ?41                 	;0	>>41
38  20   FETCH_DIM_R/81            $44=      16?6                 32:'movie_properties'	;0
39  20   QM_ASSIGN/22              #45=      $44                  ?0                  	;0
40  20   JMP/42                    ?0        ?43                  ?0                  	;0	>>43
41  20   FETCH_DIM_R/81            $46=      16?6                 33:'movie_propeties'	;0	<<37
42  20   QM_ASSIGN/22              #45=      $46                  ?0                  	;0
43  20   SEND_VAL_EX/116           ?80       #45                  ?1                  	;0	<<40
44  20   SEND_VAL_EX/116           ?96       34:true              ?2                  	;0
45  20   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
46  20   ASSIGN/38                 ?22       16?7                 $47                 	;0
47  21   FETCH_DIM_R/81            $49=      16?6                 35:'episode_num'    	;0
48  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'intval'         	;1
49  21   FETCH_DIM_FUNC_ARG/93     $51=      16?6                 38:'episode_num'    	;1
50  21   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
51  21   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
52  21   CONCAT/8                  #53=      39:'Episode '        $52                 	;0
53  21   INIT_ARRAY/71             #54=      #53                  40:'title'          	;22
54  21   FETCH_DIM_R/81            $55=      16?7                 41:'plot'           	;0
55  21   JMP_SET/152               #56=      $55                  ?57                 	;0
56  21   QM_ASSIGN/22              #56=      42:'No description is available...' ?0                  	;0
57  21   ADD_ARRAY_ELEMENT/72      #54=      #56                  43:'description'    	;0
58  21   FETCH_DIM_R/81            $57=      16?7                 44:'rating'         	;0
59  21   JMP_SET/152               #58=      $57                  ?61                 	;0
60  21   QM_ASSIGN/22              #58=      45:NULL              ?0                  	;0
61  21   ADD_ARRAY_ELEMENT/72      #54=      #58                  46:'rating'         	;0
62  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'str_replace'    	;3
63  21   SEND_VAL_EX/116           ?80       49:'w600_and_h900_bestv2' ?1                  	;0
64  21   SEND_VAL_EX/116           ?96       50:'w500'            ?2                  	;0
65  21   INIT_STATIC_METHOD_CALL/113 ?0        51:'XUI'             53:'fCA722697178454B'	;1
66  21   FETCH_DIM_FUNC_ARG/93     $59=      16?7                 55:'movie_image'    	;1
67  21   SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
68  21   DO_FCALL/60               $60=      ?0                   ?0                  	;0
69  21   SEND_VAR_NO_REF_EX/50     ?112      $60                  ?3                  	;0
70  21   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
71  21   JMP_SET/152               #62=      $61                  ?73                 	;0
72  21   QM_ASSIGN/22              #62=      56:''                ?0                  	;0
73  21   ADD_ARRAY_ELEMENT/72      #54=      #62                  57:'image'          	;0
74  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'str_replace'    	;3
75  21   SEND_VAL_EX/116           ?80       60:'w600_and_h900_bestv2' ?1                  	;0
76  21   SEND_VAL_EX/116           ?96       61:'w500'            ?2                  	;0
77  21   INIT_STATIC_METHOD_CALL/113 ?0        62:'XUI'             64:'FCa722697178454B'	;1
78  21   FETCH_DIM_FUNC_ARG/93     $63=      16?7                 66:'movie_image'    	;1
79  21   SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
80  21   DO_FCALL/60               $64=      ?0                   ?0                  	;0
81  21   SEND_VAR_NO_REF_EX/50     ?112      $64                  ?3                  	;0
82  21   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
83  21   ADD_ARRAY_ELEMENT/72      #54=      $65                  67:'image_cover'    	;0
84  21   ASSIGN_DIM/147            ?24       16?8                 $49                 	;0
85  21   OP_DATA/137               ?0        #54                  ?0                  	;0
86  22   JMP/42                    ?0        ?33                  ?0                  	;0	>>33
87  22   FE_FREE/127               ?0        $41                  ?0                  	;0	<<32
88  25   GOTO/253                  ?0        ?419                 ?68                 	;0
89  27   GOTO/253                  ?0        ?384                 ?69                 	;0
90  29   POST_INC/36               #66=      16?9                 ?0                  	;0
91  29   FREE/70                   ?0        #66                  ?0                  	;0
92  30   GOTO/253                  ?0        ?290                 ?70                 	;0
93  32   ASSIGN/38                 ?41       16?4                 71:NULL             	;0
94  33   FETCH_DIM_R/81            $68=      16?3                 72:'tmdb_id'        	;0
95  33   BOOL_NOT/13               #69=      $68                  ?0                  	;0
96  33   JMPZ/43                   ?0        #69                  ?98                 	;0	>>98
97  34   GOTO/253                  ?0        ?331                 ?73                 	;0
98  36   GOTO/253                  ?0        ?476                 ?74                 	;0	<<96
99  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'array_slice'    	;3
100 38   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
101 38   SEND_VAL_EX/116           ?96       77:0                 ?2                  	;0
102 38   SEND_VAL_EX/116           ?112      78:6                 ?3                  	;0
103 38   DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
104 38   FE_RESET_R/77             $71=      $70                  ?158                	;0
105 38   FE_FETCH_R/78             ?0        $71                  16?11               	;158	>>158	<<157
106 39   NOP/0                     ?0        ?0                   ?0                  	;1
107 39   GOTO/253                  ?0        ?145                 ?79                 	;0
108 41   FETCH_DIM_R/81            $72=      16?11                80:'id'             	;0
109 41   ECHO/40                   ?0        $72                  ?0                  	;0
110 42   ECHO/40                   ?0        81:'">'              ?0                  	;0
111 43   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'htmlspecialchars'	;1
112 43   FETCH_DIM_FUNC_ARG/93     $73=      16?11                84:'title'          	;1
113 43   SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
114 43   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
115 43   ECHO/40                   ?0        $74                  ?0                  	;0
116 44   ECHO/40                   ?0        85:'</a></h3>
                                    <span class="card__rate">' ?0                  	;0
117 45   FETCH_DIM_R/81            $75=      16?11                86:'year'           	;0
118 45   JMPZ/43                   ?0        $75                  ?126                	;0	>>126
119 45   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'intval'         	;1
120 45   FETCH_DIM_FUNC_ARG/93     $76=      16?11                89:'year'           	;1
121 45   SEND_VAR_EX/66            ?80       $76                  ?1                  	;0
122 45   DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
123 45   CONCAT/8                  #78=      $77                  90:' &nbsp; '       	;0
124 45   QM_ASSIGN/22              #79=      #78                  ?0                  	;0
125 45   JMP/42                    ?0        ?127                 ?0                  	;0	>>127
126 45   QM_ASSIGN/22              #79=      91:''                ?0                  	;0	<<118
127 45   ECHO/40                   ?0        #79                  ?0                  	;0	<<125
128 46   NOP/0                     ?0        ?0                   ?0                  	;1
129 46   GOTO/253                  ?0        ?130                 ?92                 	;0
130 48   ECHO/40                   ?0        93:'<i class="icon ion-ios-star"></i>' ?0                  	;0
131 49   FETCH_DIM_R/81            $80=      16?11                94:'rating'         	;0
132 49   JMPZ/43                   ?0        $80                  ?140                	;0	>>140
133 49   INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'number_format'  	;2
134 49   FETCH_DIM_FUNC_ARG/93     $81=      16?11                97:'rating'         	;1
135 49   SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
136 49   SEND_VAL_EX/116           ?96       98:1                 ?2                  	;0
137 49   DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
138 49   QM_ASSIGN/22              #83=      $82                  ?0                  	;0
139 49   JMP/42                    ?0        ?141                 ?0                  	;0	>>141
140 49   QM_ASSIGN/22              #83=      99:'N/A'             ?0                  	;0	<<132
141 49   ECHO/40                   ?0        #83                  ?0                  	;0	<<139
142 50   ECHO/40                   ?0        100:'</span>
								</div>
							</div>
						</div>
                        ' ?0                  	;0
143 52   NOP/0                     ?0        ?0                   ?0                  	;1
144 52   GOTO/253                  ?0        ?157                 ?101                	;0
145 54   ECHO/40                   ?0        102:'						<div class="col-4 col-sm-4 col-lg-2">
							<div class="card">
								<div class="card__cover">
									<img loading="lazy" src="resize.php?url=' ?0                  	;0
146 55   INIT_FCALL_BY_NAME/59     ?0        ?0                   103:'urlencode'     	;1
147 55   FETCH_DIM_FUNC_ARG/93     $84=      16?11                105:'cover'         	;1
148 55   SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
149 55   DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
150 55   ECHO/40                   ?0        $85                  ?0                  	;0
151 56   ECHO/40                   ?0        106:'&w=267&h=400" alt="">
                                    <a href="episodes.php?id=' ?0                  	;0
152 57   FETCH_DIM_R/81            $86=      16?11                107:'id'            	;0
153 57   ECHO/40                   ?0        $86                  ?0                  	;0
154 58   ECHO/40                   ?0        108:'" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
								</div>
								<div class="card__content">
                                    <h3 class="card__title"><a href="episodes.php?id=' ?0                  	;0
155 59   NOP/0                     ?0        ?0                   ?0                  	;1
156 59   GOTO/253                  ?0        ?108                 ?109                	;0
157 60   JMP/42                    ?0        ?105                 ?0                  	;0	>>105
158 60   FE_FREE/127               ?0        $71                  ?0                  	;0	<<104
159 63   ECHO/40                   ?0        110:'					</div>
				</div>
			</div>
		</div>
	</section>
    ' ?0                  	;0
160 65   GOTO/253                  ?0        ?892                 ?111                	;0
161 67   INIT_STATIC_METHOD_CALL/113 ?0        112:'XUI'            114:'c65C7F64e35c199F'	;1
162 67   FETCH_IS/89               $87=      116:'_SERVER'        ?0                  	;0
163 67   ISSET_ISEMPTY_DIM_OBJ/115 #88=      $87                  117:'HTTPS'         	;16777216
164 67   BOOL_NOT/13               #89=      #88                  ?0                  	;0
165 67   JMPZ_EX/46                #89=      #89                  ?170                	;0	>>170
166 67   FETCH_R/80                $90=      118:'_SERVER'        ?0                  	;0
167 67   FETCH_DIM_R/81            $91=      $90                  119:'HTTPS'         	;0
168 67   IS_NOT_IDENTICAL/16       #92=      $91                  120:'off'           	;0
169 67   BOOL/52                   #89=      #92                  ?0                  	;0
170 67   JMPNZ_EX/47               #89=      #89                  ?175                	;0	>>175	<<165
171 67   FETCH_R/80                $93=      121:'_SERVER'        ?0                  	;0
172 67   FETCH_DIM_R/81            $94=      $93                  122:'SERVER_PORT'   	;0
173 67   IS_EQUAL/17               #95=      $94                  123:443             	;0
174 67   BOOL/52                   #89=      #95                  ?0                  	;0
175 67   SEND_VAL_EX/116           ?80       #89                  ?1                  	;0	<<170
176 67   DO_FCALL/60               $96=      ?0                   ?0                  	;0
177 67   ASSIGN/38                 ?71       16?12                $96                 	;0
178 68   ASSIGN/38                 ?72       16?13                124:NULL            	;0
179 69   FETCH_DIM_R/81            $99=      16?3                 125:'tmdb_id'       	;0
180 69   BOOL_NOT/13               #100=     $99                  ?0                  	;0
181 69   JMPZ/43                   ?0        #100                 ?183                	;0	>>183
182 70   GOTO/253                  ?0        ?209                 ?126                	;0
183 72   INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'file_exists'   	;1	<<181
184 72   FETCH_CONSTANT/99         #101=     ?0                   129:'TMP_PATH'      	;16
185 72   CONCAT/8                  #102=     #101                 132:'tmdb_'         	;0
186 72   FETCH_DIM_R/81            $103=     16?3                 133:'tmdb_id'       	;0
187 72   CONCAT/8                  #104=     #102                 $103                	;0
188 72   SEND_VAL_EX/116           ?80       #104                 ?1                  	;0
189 72   DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
190 72   BOOL_NOT/13               #106=     $105                 ?0                  	;0
191 72   JMPZ/43                   ?0        #106                 ?193                	;0	>>193
192 73   GOTO/253                  ?0        ?867                 ?134                	;0
193 75   INIT_STATIC_METHOD_CALL/113 ?0        135:'XUI'            137:'unserialize'   	;1	<<191
194 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'file_get_contents'	;1
195 75   FETCH_CONSTANT/99         #107=     ?0                   141:'TMP_PATH'      	;16
196 75   CONCAT/8                  #108=     #107                 144:'tmdb_'         	;0
197 75   FETCH_DIM_R/81            $109=     16?3                 145:'tmdb_id'       	;0
198 75   CONCAT/8                  #110=     #108                 $109                	;0
199 75   SEND_VAL_EX/116           ?80       #110                 ?1                  	;0
200 75   DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
201 75   SEND_VAR_NO_REF_EX/50     ?80       $111                 ?1                  	;0
202 75   DO_FCALL/60               $112=     ?0                   ?0                  	;0
203 75   ASSIGN/38                 ?87       16?13                $112                	;0
204 76   GOTO/253                  ?0        ?866                 ?146                	;0
205 78   ECHO/40                   ?0        147:'                        <div class="row top-margin-sml">
                            <div class="col-12">
                                <div id="player_row">
                                    <div id="now__playing__player"></div>
                                </div>
                            </div>
                        </div>
                        ' ?0                  	;0
206 79   GOTO/253                  ?0        ?208                 ?148                	;0
207 81   ECHO/40                   ?0        149:'                        <div class="row top-margin-sml" id="player_row" style="display: none;">
                            <div class="col-12">
                                <video controls width="100%" preload="none" id="video__player">
                                    <source src="" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                        ' ?0                  	;0
208 83   GOTO/253                  ?0        ?807                 ?150                	;0
209 88   JMPZ/43                   ?0        16?13                ?211                	;0	>>211
210 89   GOTO/253                  ?0        ?556                 ?151                	;0
211 91   INIT_STATIC_METHOD_CALL/113 ?0        152:'XUI'            154:'Fca722697178454b'	;1	<<209
212 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'json_decode'   	;2
213 91   FETCH_DIM_FUNC_ARG/93     $114=     16?3                 158:'backdrop_path' 	;1
214 91   SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
215 91   SEND_VAL_EX/116           ?96       159:true             ?2                  	;0
216 91   DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
217 91   SEPARATE/156              $115=     $115                 ?0                  	;0
218 91   FETCH_DIM_FUNC_ARG/93     $116=     $115                 160:0               	;1
219 91   SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
220 91   DO_FCALL/60               $117=     ?0                   ?0                  	;0
221 91   JMP_SET/152               #118=     $117                 ?223                	;0
222 91   QM_ASSIGN/22              #118=     161:''               ?0                  	;0
223 91   ASSIGN/38                 ?93       16?14                #118                	;0
224 92   GOTO/253                  ?0        ?548                 ?162                	;0
225 94   GOTO/253                  ?0        ?235                 ?163                	;0
226 96   INIT_METHOD_CALL/112      ?0        16?2                 164:'query'         	;1
227 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'implode'       	;2
228 96   SEND_VAL_EX/116           ?80       168:','              ?1                  	;0
229 96   SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
230 96   DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
231 96   CONCAT/8                  #121=     169:'SELECT * FROM `streams_series` WHERE `tmdb_id` IN (' $120                	;0
232 96   CONCAT/8                  #122=     #121                 170:') AND (SELECT MAX(`compatible`) FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) = 1 LIMIT 6;'	;0
233 96   SEND_VAL_EX/116           ?80       #122                 ?1                  	;0
234 96   DO_FCALL/60               ?97       ?0                   ?0                  	;0
235 98   INIT_METHOD_CALL/112      ?0        16?2                 171:'get_rows'      	;0
236 98   DO_FCALL/60               $124=     ?0                   ?0                  	;0
237 98   FE_RESET_R/77             $125=     $124                 ?287                	;0
238 98   FE_FETCH_R/78             ?0        $125                 16?16               	;287	>>287	<<286
239 99   INIT_ARRAY/71             #127=     173:'series'         174:'type'          	;30
240 99   FETCH_DIM_R/81            $128=     16?16                175:'id'            	;0
241 99   ADD_ARRAY_ELEMENT/72      #127=     $128                 176:'id'            	;0
242 99   FETCH_DIM_R/81            $129=     16?16                177:'title'         	;0
243 99   ADD_ARRAY_ELEMENT/72      #127=     $129                 178:'title'         	;0
244 99   FETCH_DIM_R/81            $130=     16?16                179:'year'          	;0
245 99   JMP_SET/152               #131=     $130                 ?258                	;0
246 99   FETCH_DIM_R/81            $132=     16?16                180:'releaseDate'   	;0
247 99   JMPZ/43                   ?0        $132                 ?256                	;0	>>256
248 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'substr'        	;3
249 99   FETCH_DIM_FUNC_ARG/93     $133=     16?16                183:'releaseDate'   	;1
250 99   SEND_VAR_EX/66            ?80       $133                 ?1                  	;0
251 99   SEND_VAL_EX/116           ?96       184:0                ?2                  	;0
252 99   SEND_VAL_EX/116           ?112      185:4                ?3                  	;0
253 99   DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
254 99   QM_ASSIGN/22              #135=     $134                 ?0                  	;0
255 99   JMP/42                    ?0        ?257                 ?0                  	;0	>>257
256 99   QM_ASSIGN/22              #135=     186:NULL             ?0                  	;0	<<247
257 99   QM_ASSIGN/22              #131=     #135                 ?0                  	;0	<<255
258 99   ADD_ARRAY_ELEMENT/72      #127=     #131                 187:'year'          	;0
259 99   FETCH_DIM_R/81            $136=     16?16                188:'rating'        	;0
260 99   ADD_ARRAY_ELEMENT/72      #127=     $136                 189:'rating'        	;0
261 99   INIT_STATIC_METHOD_CALL/113 ?0        190:'XUI'            192:'fCa722697178454B'	;1
262 99   FETCH_DIM_FUNC_ARG/93     $137=     16?16                194:'cover'         	;1
263 99   SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
264 99   DO_FCALL/60               $138=     ?0                   ?0                  	;0
265 99   JMP_SET/152               #139=     $138                 ?267                	;0
266 99   QM_ASSIGN/22              #139=     195:''               ?0                  	;0
267 99   ADD_ARRAY_ELEMENT/72      #127=     #139                 196:'cover'         	;0
268 99   INIT_STATIC_METHOD_CALL/113 ?0        197:'XUI'            199:'fCa722697178454B'	;1
269 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'json_decode'   	;2
270 99   FETCH_DIM_FUNC_ARG/93     $140=     16?16                203:'backdrop_path' 	;1
271 99   SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
272 99   SEND_VAL_EX/116           ?96       204:true             ?2                  	;0
273 99   DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
274 99   SEPARATE/156              $141=     $141                 ?0                  	;0
275 99   FETCH_DIM_FUNC_ARG/93     $142=     $141                 205:0               	;1
276 99   SEND_VAR_EX/66            ?80       $142                 ?1                  	;0
277 99   DO_FCALL/60               $143=     ?0                   ?0                  	;0
278 99   JMP_SET/152               #144=     $143                 ?280                	;0
279 99   QM_ASSIGN/22              #144=     206:''               ?0                  	;0
280 99   ADD_ARRAY_ELEMENT/72      #127=     #144                 207:'backdrop'      	;0
281 99   ASSIGN_DIM/147            ?100      16?10                ?4414262            	;0
282 99   OP_DATA/137               ?0        #127                 ?0                  	;0
283 100  FETCH_DIM_R/81            $146=     16?16                208:'id'            	;0
284 100  ASSIGN_DIM/147            ?119      16?17                ?0                  	;0
285 100  OP_DATA/137               ?0        $146                 ?0                  	;0
286 101  JMP/42                    ?0        ?238                 ?0                  	;0	>>238
287 101  FE_FREE/127               ?0        $125                 ?0                  	;0	<<237
288 103  GOTO/253                  ?0        ?887                 ?209                	;0
289 105  ASSIGN/38                 ?121      16?9                 210:0               	;0
290 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'count'         	;1
291 107  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
292 107  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
293 107  IS_SMALLER/19             #149=     16?9                 $148                	;0
294 107  BOOL_NOT/13               #150=     #149                 ?0                  	;0
295 107  JMPZ/43                   ?0        #150                 ?297                	;0	>>297
296 108  GOTO/253                  ?0        ?93                  ?213                	;0
297 110  FETCH_CONSTANT/99         #151=     ?0                   214:'PLATFORM'      	;16	<<295
298 110  IS_NOT_EQUAL/18           #152=     #151                 217:'xui'           	;0
299 110  BOOL_NOT/13               #153=     #152                 ?0                  	;0
300 110  JMPZ/43                   ?0        #153                 ?302                	;0	>>302
301 111  GOTO/253                  ?0        ?514                 ?218                	;0
302 113  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'json_decode'   	;2	<<300
303 113  FETCH_DIM_FUNC_ARG/93     $156=     16?5                 16?9                	;1
304 113  FETCH_DIM_FUNC_ARG/93     $157=     $156                 222:'target_container'	;1
305 113  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
306 113  SEND_VAL_EX/116           ?96       223:true             ?2                  	;0
307 113  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
308 113  FETCH_DIM_R/81            $159=     $158                 224:0               	;0
309 113  JMP_SET/152               #160=     $159                 ?311                	;0
310 113  QM_ASSIGN/22              #160=     225:'mp4'            ?0                  	;0
311 113  FETCH_DIM_W/84            $154=     16?5                 16?9                	;0
312 113  ASSIGN_DIM/147            ?129      $154                 219:'target_container'	;0
313 113  OP_DATA/137               ?0        #160                 ?0                  	;0
314 114  GOTO/253                  ?0        ?509                 ?226                	;0
315 116  BOOL_NOT/13               #161=     16?4                 ?0                  	;0
316 116  JMPZ/43                   ?0        #161                 ?318                	;0	>>318
317 117  GOTO/253                  ?0        ?331                 ?227                	;0
318 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'file_put_contents'	;2	<<316
319 119  FETCH_CONSTANT/99         #162=     ?0                   230:'TMP_PATH'      	;16
320 119  CONCAT/8                  #163=     #162                 233:'tmdb_'         	;0
321 119  FETCH_DIM_R/81            $164=     16?3                 234:'tmdb_id'       	;0
322 119  CONCAT/8                  #165=     #163                 $164                	;0
323 119  CONCAT/8                  #166=     #165                 235:'_'             	;0
324 119  CONCAT/8                  #167=     #166                 16?0                	;0
325 119  SEND_VAL_EX/116           ?80       #167                 ?1                  	;0
326 119  INIT_STATIC_METHOD_CALL/113 ?0        236:'XUI'            238:'serialize'     	;1
327 119  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
328 119  DO_FCALL/60               $168=     ?0                   ?0                  	;0
329 119  SEND_VAR_NO_REF_EX/50     ?96       $168                 ?2                  	;0
330 119  DO_FCALL_BY_NAME/131      ?143      ?0                   ?0                  	;0
331 123  GOTO/253                  ?0        ?27                  ?240                	;0
332 125  INCLUDE_OR_EVAL/73        ?144      241:'functions.php'  ?0                  	;2	<<0
333 126  INIT_STATIC_METHOD_CALL/113 ?0        242:'XUI'            244:'BA2e785f0326D499'	;1
334 126  FETCH_STATIC_PROP_FUNC_ARG/177 $171=     246:'rRequest'       247:'XUI'           	;1
335 126  FETCH_DIM_FUNC_ARG/93     $172=     $171                 249:'id'            	;1
336 126  SEND_VAR_EX/66            ?80       $172                 ?1                  	;0
337 126  DO_FCALL/60               $173=     ?0                   ?0                  	;0
338 126  ASSIGN/38                 $174=     16?3                 $173                	;0
339 126  BOOL_NOT/13               #175=     $174                 ?0                  	;0
340 126  JMPNZ_EX/47               #175=     #175                 ?350                	;0	>>350
341 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'in_array'      	;2
342 126  FETCH_STATIC_PROP_FUNC_ARG/177 $176=     252:'rRequest'       253:'XUI'           	;1
343 126  FETCH_DIM_FUNC_ARG/93     $177=     $176                 255:'id'            	;1
344 126  SEND_VAR_EX/66            ?80       $177                 ?1                  	;0
345 126  FETCH_DIM_FUNC_ARG/93     $178=     16?18                256:'series_ids'    	;2
346 126  SEND_VAR_EX/66            ?96       $178                 ?2                  	;0
347 126  DO_FCALL_BY_NAME/131      $179=     ?0                   ?0                  	;0
348 126  BOOL_NOT/13               #180=     $179                 ?0                  	;0
349 126  BOOL/52                   #175=     #180                 ?0                  	;0
350 126  BOOL_NOT/13               #181=     #175                 ?0                  	;0	<<340
351 126  JMPZ/43                   ?0        #181                 ?353                	;0	>>353
352 127  GOTO/253                  ?0        ?357                 ?257                	;0
353 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'header'        	;1	<<351
354 129  SEND_VAL_EX/116           ?80       260:'Location: series.php' ?1                  	;0
355 129  DO_FCALL_BY_NAME/131      ?156      ?0                   ?0                  	;0
356 130  EXIT/79                   ?0        ?0                   ?0                  	;0
357 132  GOTO/253                  ?0        ?161                 ?261                	;0
358 134  FETCH_DIM_R/81            $183=     16?13                262:'poster_path'   	;0
359 134  JMPZ/43                   ?0        $183                 ?364                	;0	>>364
360 134  FETCH_DIM_R/81            $184=     16?13                263:'poster_path'   	;0
361 134  CONCAT/8                  #185=     264:'https://image.tmdb.org/t/p/w600_and_h900_bestv2' $184                	;0
362 134  QM_ASSIGN/22              #186=     #185                 ?0                  	;0
363 134  JMP/42                    ?0        ?371                 ?0                  	;0	>>371
364 134  INIT_STATIC_METHOD_CALL/113 ?0        265:'XUI'            267:'fCa722697178454b'	;1	<<359
365 134  FETCH_DIM_FUNC_ARG/93     $187=     16?3                 269:'cover'         	;1
366 134  SEND_VAR_EX/66            ?80       $187                 ?1                  	;0
367 134  DO_FCALL/60               $188=     ?0                   ?0                  	;0
368 134  JMP_SET/152               #189=     $188                 ?370                	;0
369 134  QM_ASSIGN/22              #189=     270:''               ?0                  	;0
370 134  QM_ASSIGN/22              #186=     #189                 ?0                  	;0
371 134  ASSIGN/38                 ?164      16?19                #186                	;0	<<363
372 136  ASSIGN/38                 $191=     16?1                 271:array (
)       	;0
373 136  ASSIGN/38                 ?166      16?20                $191                	;0
374 137  FETCH_CONSTANT/99         #193=     ?0                   272:'PLATFORM'      	;16
375 137  IS_EQUAL/17               #194=     #193                 275:'xui'           	;0
376 137  JMPZ/43                   ?0        #194                 ?378                	;0	>>378
377 138  GOTO/253                  ?0        ?589                 ?276                	;0
378 140  INIT_METHOD_CALL/112      ?0        16?2                 277:'query'         	;2	<<376
379 140  SEND_VAL_EX/116           ?80       279:'SELECT DISTINCT(`season_num`) AS `season_num` FROM `series_episodes` WHERE `series_id` = ? ORDER BY `season_num` ASC;' ?1                  	;0
380 140  FETCH_DIM_FUNC_ARG/93     $195=     16?3                 280:'id'            	;2
381 140  SEND_VAR_EX/66            ?96       $195                 ?2                  	;0
382 140  DO_FCALL/60               ?170      ?0                   ?0                  	;0
383 141  GOTO/253                  ?0        ?588                 ?281                	;0
384 143  ASSIGN/38                 ?171      16?8                 282:array (
)       	;0
385 144  FETCH_DIM_R/81            $198=     16?4                 283:'episodes'      	;0
386 144  FE_RESET_R/77             $199=     $198                 ?418                	;0
387 144  FE_FETCH_R/78             ?0        $199                 16?6                	;418	>>418	<<417
388 145  FETCH_DIM_R/81            $200=     16?6                 284:'episode_number'	;0
389 145  FETCH_DIM_R/81            $202=     16?6                 285:'name'          	;0
390 145  INIT_ARRAY/71             #203=     $202                 286:'title'         	;22
391 145  FETCH_DIM_R/81            $204=     16?6                 287:'overview'      	;0
392 145  JMP_SET/152               #205=     $204                 ?394                	;0
393 145  QM_ASSIGN/22              #205=     288:'No description is available...' ?0                  	;0
394 145  ADD_ARRAY_ELEMENT/72      #203=     #205                 289:'description'   	;0
395 145  FETCH_DIM_R/81            $206=     16?6                 290:'vote_average'  	;0
396 145  JMP_SET/152               #207=     $206                 ?398                	;0
397 145  QM_ASSIGN/22              #207=     291:NULL             ?0                  	;0
398 145  ADD_ARRAY_ELEMENT/72      #203=     #207                 292:'rating'        	;0
399 145  FETCH_DIM_R/81            $208=     16?6                 293:'still_path'    	;0
400 145  JMPZ/43                   ?0        $208                 ?405                	;0	>>405
401 145  FETCH_DIM_R/81            $209=     16?6                 294:'still_path'    	;0
402 145  CONCAT/8                  #210=     295:'https://image.tmdb.org/t/p/w500' $209                	;0
403 145  QM_ASSIGN/22              #211=     #210                 ?0                  	;0
404 145  JMP/42                    ?0        ?406                 ?0                  	;0	>>406
405 145  QM_ASSIGN/22              #211=     296:''               ?0                  	;0	<<400
406 145  ADD_ARRAY_ELEMENT/72      #203=     #211                 297:'image'         	;0	<<404
407 145  FETCH_DIM_R/81            $212=     16?6                 298:'still_path'    	;0
408 145  JMPZ/43                   ?0        $212                 ?413                	;0	>>413
409 145  FETCH_DIM_R/81            $213=     16?6                 299:'still_path'    	;0
410 145  CONCAT/8                  #214=     300:'https://image.tmdb.org/t/p/w1280' $213                	;0
411 145  QM_ASSIGN/22              #215=     #214                 ?0                  	;0
412 145  JMP/42                    ?0        ?414                 ?0                  	;0	>>414
413 145  QM_ASSIGN/22              #215=     301:''               ?0                  	;0	<<408
414 145  ADD_ARRAY_ELEMENT/72      #203=     #215                 302:'image_cover'   	;0	<<412
415 145  ASSIGN_DIM/147            ?175      16?8                 $200                	;0
416 145  OP_DATA/137               ?0        #203                 ?0                  	;0
417 146  JMP/42                    ?0        ?387                 ?0                  	;0	>>387
418 146  FE_FREE/127               ?0        $199                 ?0                  	;0	<<386
419 150  FETCH_DIM_R/81            $216=     16?3                 303:'id'            	;0
420 150  INIT_ARRAY/71             #217=     $216                 ?0                  	;4
421 150  ASSIGN/38                 ?192      16?17                #217                	;0
422 151  GOTO/253                  ?0        ?764                 ?304                	;0
423 154  INIT_METHOD_CALL/112      ?0        16?2                 305:'query'         	;3
424 154  SEND_VAL_EX/116           ?80       307:'SELECT * FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `series_id` = ? AND `season_num` = ? AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 ORDER BY `episode_num` ASC;' ?1                  	;0
425 154  FETCH_DIM_FUNC_ARG/93     $219=     16?3                 308:'id'            	;2
426 154  SEND_VAR_EX/66            ?96       $219                 ?2                  	;0
427 154  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
428 154  DO_FCALL/60               ?194      ?0                   ?0                  	;0
429 156  ASSIGN/38                 ?195      16?21                309:false           	;0
430 157  INIT_METHOD_CALL/112      ?0        16?2                 310:'get_rows'      	;0
431 157  DO_FCALL/60               $222=     ?0                   ?0                  	;0
432 157  ASSIGN/38                 ?197      16?5                 $222                	;0
433 158  GOTO/253                  ?0        ?289                 ?312                	;0
434 160  ECHO/40                   ?0        16?14                ?0                  	;0
435 161  ECHO/40                   ?0        313:'"></div>
		<div class="container top-margin">
			<div class="row">
				<div class="col-12">
					<h1 class="details__title">' ?0                  	;0
436 162  FETCH_DIM_R/81            $224=     16?3                 314:'title'         	;0
437 162  ECHO/40                   ?0        $224                 ?0                  	;0
438 163  ECHO/40                   ?0        315:'<br/>
                        <ul class="card__list">
                            ' ?0                  	;0
439 164  FETCH_CONSTANT/99         #225=     ?0                   316:'PLATFORM'      	;16
440 164  IS_EQUAL/17               #226=     #225                 319:'xui'           	;0
441 164  JMPZ/43                   ?0        #226                 ?449                	;0	>>449
442 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'json_decode'   	;2
443 164  FETCH_DIM_FUNC_ARG/93     $227=     16?3                 322:'category_id'   	;1
444 164  SEND_VAR_EX/66            ?80       $227                 ?1                  	;0
445 164  SEND_VAL_EX/116           ?96       323:true             ?2                  	;0
446 164  DO_FCALL_BY_NAME/131      $228=     ?0                   ?0                  	;0
447 164  QM_ASSIGN/22              #229=     $228                 ?0                  	;0
448 164  JMP/42                    ?0        ?452                 ?0                  	;0	>>452
449 164  FETCH_DIM_R/81            $230=     16?3                 324:'category_id'   	;0	<<441
450 164  INIT_ARRAY/71             #231=     $230                 ?0                  	;4
451 164  QM_ASSIGN/22              #229=     #231                 ?0                  	;0
452 164  FE_RESET_R/77             $232=     #229                 ?461                	;0	<<448
453 164  FE_FETCH_R/78             ?0        $232                 16?22               	;461	>>461	<<460
454 165  ECHO/40                   ?0        325:'                            <li>' ?0                  	;0
455 166  FETCH_STATIC_PROP_R/173   $233=     326:'rCategories'    327:'XUI'           	;0
456 166  FETCH_DIM_R/81            $234=     $233                 16?22               	;0
457 166  FETCH_DIM_R/81            $235=     $234                 329:'category_name' 	;0
458 166  ECHO/40                   ?0        $235                 ?0                  	;0
459 167  ECHO/40                   ?0        330:'</li>
                            ' ?0                  	;0
460 168  JMP/42                    ?0        ?453                 ?0                  	;0	>>453
461 168  FE_FREE/127               ?0        $232                 ?0                  	;0	<<452
462 170  GOTO/253                  ?0        ?628                 ?331                	;0
463 172  ECHO/40                   ?0        332:'<i class="icon ion-ios-star"></i>' ?0                  	;0
464 173  FETCH_DIM_R/81            $236=     16?3                 333:'rating'        	;0
465 173  JMP_SET/152               #237=     $236                 ?467                	;0
466 173  QM_ASSIGN/22              #237=     334:'N/A'            ?0                  	;0
467 173  ECHO/40                   ?0        #237                 ?0                  	;0
468 174  ECHO/40                   ?0        335:'</span>
									</div>
									<ul class="card__meta">
										<li><span><strong>Duration:</strong></span> ' ?0                  	;0
469 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   336:'intval'        	;1
470 175  FETCH_DIM_FUNC_ARG/93     $238=     16?3                 338:'episode_run_time'	;1
471 175  SEND_VAR_EX/66            ?80       $238                 ?1                  	;0
472 175  DO_FCALL_BY_NAME/131      $239=     ?0                   ?0                  	;0
473 175  ECHO/40                   ?0        $239                 ?0                  	;0
474 176  ECHO/40                   ?0        339:' min</li>
                                        <li>
                                            <span><strong>Cast:</strong></span>
                                            ' ?0                  	;0
475 177  GOTO/253                  ?0        ?826                 ?340                	;0
476 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'file_exists'   	;1
477 179  FETCH_CONSTANT/99         #240=     ?0                   343:'TMP_PATH'      	;16
478 179  CONCAT/8                  #241=     #240                 346:'tmdb_'         	;0
479 179  FETCH_DIM_R/81            $242=     16?3                 347:'tmdb_id'       	;0
480 179  CONCAT/8                  #243=     #241                 $242                	;0
481 179  CONCAT/8                  #244=     #243                 348:'_'             	;0
482 179  CONCAT/8                  #245=     #244                 16?0                	;0
483 179  SEND_VAL_EX/116           ?80       #245                 ?1                  	;0
484 179  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
485 179  BOOL_NOT/13               #247=     $246                 ?0                  	;0
486 179  JMPZ/43                   ?0        #247                 ?488                	;0	>>488
487 180  GOTO/253                  ?0        ?502                 ?349                	;0
488 182  INIT_STATIC_METHOD_CALL/113 ?0        350:'XUI'            352:'unserialize'   	;1	<<486
489 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   354:'file_get_contents'	;1
490 182  FETCH_CONSTANT/99         #248=     ?0                   356:'TMP_PATH'      	;16
491 182  CONCAT/8                  #249=     #248                 359:'tmdb_'         	;0
492 182  FETCH_DIM_R/81            $250=     16?3                 360:'tmdb_id'       	;0
493 182  CONCAT/8                  #251=     #249                 $250                	;0
494 182  CONCAT/8                  #252=     #251                 361:'_'             	;0
495 182  CONCAT/8                  #253=     #252                 16?0                	;0
496 182  SEND_VAL_EX/116           ?80       #253                 ?1                  	;0
497 182  DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
498 182  SEND_VAR_NO_REF_EX/50     ?80       $254                 ?1                  	;0
499 182  DO_FCALL/60               $255=     ?0                   ?0                  	;0
500 182  ASSIGN/38                 ?230      16?4                 $255                	;0
501 183  GOTO/253                  ?0        ?331                 ?362                	;0
502 185  INIT_STATIC_METHOD_CALL/113 ?0        363:'XUI'            365:'getSeasonTMDB' 	;2
503 185  FETCH_DIM_FUNC_ARG/93     $257=     16?3                 367:'tmdb_id'       	;1
504 185  SEND_VAR_EX/66            ?80       $257                 ?1                  	;0
505 185  SEND_VAR_EX/66            ?96       16?0                 ?2                  	;0
506 185  DO_FCALL/60               $258=     ?0                   ?0                  	;0
507 185  ASSIGN/38                 ?233      16?4                 $258                	;0
508 186  GOTO/253                  ?0        ?315                 ?368                	;0
509 188  FETCH_DIM_R/81            $262=     16?5                 16?9                	;0
510 188  FETCH_DIM_R/81            $263=     $262                 370:'sort'          	;0
511 188  FETCH_DIM_W/84            $260=     16?5                 16?9                	;0
512 188  ASSIGN_DIM/147            ?235      $260                 369:'episode_num'   	;0
513 188  OP_DATA/137               ?0        $263                 ?0                  	;0
514 190  FETCH_DIM_R/81            $264=     16?5                 16?9                	;0
515 190  FETCH_DIM_R/81            $265=     $264                 371:'id'            	;0
516 190  CONCAT/8                  #267=     16?12                372:'series/'       	;0
517 190  FETCH_DIM_R/81            $268=     16?18                373:'username'      	;0
518 190  CONCAT/8                  #269=     #267                 $268                	;0
519 190  CONCAT/8                  #270=     #269                 374:'/'             	;0
520 190  FETCH_DIM_R/81            $271=     16?18                375:'password'      	;0
521 190  CONCAT/8                  #272=     #270                 $271                	;0
522 190  CONCAT/8                  #273=     #272                 376:'/'             	;0
523 190  FETCH_DIM_R/81            $274=     16?5                 16?9                	;0
524 190  FETCH_DIM_R/81            $275=     $274                 377:'id'            	;0
525 190  CONCAT/8                  #276=     #273                 $275                	;0
526 190  CONCAT/8                  #277=     #276                 378:'.'             	;0
527 190  FETCH_DIM_R/81            $278=     16?5                 16?9                	;0
528 190  FETCH_DIM_R/81            $279=     $278                 379:'target_container'	;0
529 190  CONCAT/8                  #280=     #277                 $279                	;0
530 190  ASSIGN_DIM/147            ?240      16?20                $265                	;0
531 190  OP_DATA/137               ?0        #280                 ?0                  	;0
532 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   380:'json_decode'   	;2
533 191  FETCH_CONSTANT/99         #281=     ?0                   382:'PLATFORM'      	;16
534 191  IS_EQUAL/17               #282=     #281                 385:'xui'           	;0
535 191  JMPZ/43                   ?0        #282                 ?540                	;0	>>540
536 191  FETCH_DIM_R/81            $283=     16?5                 16?9                	;0
537 191  FETCH_DIM_R/81            $284=     $283                 386:'movie_properties'	;0
538 191  QM_ASSIGN/22              #285=     $284                 ?0                  	;0
539 191  JMP/42                    ?0        ?543                 ?0                  	;0	>>543
540 191  FETCH_DIM_R/81            $286=     16?5                 16?9                	;0	<<535
541 191  FETCH_DIM_R/81            $287=     $286                 387:'movie_propeties'	;0
542 191  QM_ASSIGN/22              #285=     $287                 ?0                  	;0
543 191  SEND_VAL_EX/116           ?80       #285                 ?1                  	;0	<<539
544 191  SEND_VAL_EX/116           ?96       388:true             ?2                  	;0
545 191  DO_FCALL_BY_NAME/131      $288=     ?0                   ?0                  	;0
546 191  ASSIGN/38                 ?263      16?7                 $288                	;0
547 193  GOTO/253                  ?0        ?90                  ?389                	;0
548 195  INIT_STATIC_METHOD_CALL/113 ?0        390:'XUI'            392:'Fca722697178454b'	;1
549 195  FETCH_DIM_FUNC_ARG/93     $290=     16?3                 394:'cover'         	;1
550 195  SEND_VAR_EX/66            ?80       $290                 ?1                  	;0
551 195  DO_FCALL/60               $291=     ?0                   ?0                  	;0
552 195  JMP_SET/152               #292=     $291                 ?554                	;0
553 195  QM_ASSIGN/22              #292=     395:''               ?0                  	;0
554 195  ASSIGN/38                 ?267      16?19                #292                	;0
555 196  GOTO/253                  ?0        ?372                 ?396                	;0
556 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   397:'array_rand'    	;1
557 198  FETCH_DIM_FUNC_ARG/93     $294=     16?13                399:'images'        	;1
558 198  FETCH_DIM_FUNC_ARG/93     $295=     $294                 400:'backdrops'     	;1
559 198  SEND_VAR_EX/66            ?80       $295                 ?1                  	;0
560 198  DO_FCALL_BY_NAME/131      $296=     ?0                   ?0                  	;0
561 198  ASSIGN/38                 ?271      16?23                $296                	;0
562 199  FETCH_DIM_R/81            $298=     16?13                401:'images'        	;0
563 199  FETCH_DIM_R/81            $299=     $298                 402:'backdrops'     	;0
564 199  FETCH_DIM_R/81            $300=     $299                 16?23               	;0
565 199  JMPZ/43                   ?0        $300                 ?573                	;0	>>573
566 199  FETCH_DIM_R/81            $301=     16?13                403:'images'        	;0
567 199  FETCH_DIM_R/81            $302=     $301                 404:'backdrops'     	;0
568 199  FETCH_DIM_R/81            $303=     $302                 16?23               	;0
569 199  FETCH_DIM_R/81            $304=     $303                 405:'file_path'     	;0
570 199  CONCAT/8                  #305=     406:'https://image.tmdb.org/t/p/w1280' $304                	;0
571 199  QM_ASSIGN/22              #306=     #305                 ?0                  	;0
572 199  JMP/42                    ?0        ?586                 ?0                  	;0	>>586
573 199  INIT_STATIC_METHOD_CALL/113 ?0        407:'XUI'            409:'FCa722697178454B'	;1	<<565
574 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   411:'json_decode'   	;2
575 199  FETCH_DIM_FUNC_ARG/93     $307=     16?3                 413:'backdrop_path' 	;1
576 199  SEND_VAR_EX/66            ?80       $307                 ?1                  	;0
577 199  SEND_VAL_EX/116           ?96       414:true             ?2                  	;0
578 199  DO_FCALL_BY_NAME/131      $308=     ?0                   ?0                  	;0
579 199  SEPARATE/156              $308=     $308                 ?0                  	;0
580 199  FETCH_DIM_FUNC_ARG/93     $309=     $308                 415:0               	;1
581 199  SEND_VAR_EX/66            ?80       $309                 ?1                  	;0
582 199  DO_FCALL/60               $310=     ?0                   ?0                  	;0
583 199  JMP_SET/152               #311=     $310                 ?585                	;0
584 199  QM_ASSIGN/22              #311=     416:''               ?0                  	;0
585 199  QM_ASSIGN/22              #306=     #311                 ?0                  	;0
586 199  ASSIGN/38                 ?286      16?14                #306                	;0	<<572
587 200  GOTO/253                  ?0        ?358                 ?417                	;0
588 202  GOTO/253                  ?0        ?594                 ?418                	;0
589 204  INIT_METHOD_CALL/112      ?0        16?2                 419:'query'         	;2
590 204  SEND_VAL_EX/116           ?80       421:'SELECT DISTINCT(`season_num`) AS `season_num` FROM `streams_episodes` WHERE `series_id` = ? ORDER BY `season_num` ASC;' ?1                  	;0
591 204  FETCH_DIM_FUNC_ARG/93     $313=     16?3                 422:'id'            	;2
592 204  SEND_VAR_EX/66            ?96       $313                 ?2                  	;0
593 204  DO_FCALL/60               ?288      ?0                   ?0                  	;0
594 206  INIT_METHOD_CALL/112      ?0        16?2                 423:'get_rows'      	;0
595 206  DO_FCALL/60               $315=     ?0                   ?0                  	;0
596 206  FE_RESET_R/77             $316=     $315                 ?626                	;0
597 206  FE_FETCH_R/78             ?0        $316                 16?16               	;626	>>626	<<625
598 207  FETCH_STATIC_PROP_R/173   $317=     425:'rSettings'      426:'XUI'           	;0
599 207  FETCH_DIM_R/81            $318=     $317                 428:'player_hide_incompatible'	;0
600 207  JMPZ/43                   ?0        $318                 ?603                	;0	>>603
601 208  NOP/0                     ?0        ?0                   ?0                  	;1
602 208  GOTO/253                  ?0        ?608                 ?429                	;0
603 210  FETCH_DIM_R/81            $320=     16?16                430:'season_num'    	;0	<<600
604 210  ASSIGN_DIM/147            ?293      16?1                 ?4397406            	;0
605 210  OP_DATA/137               ?0        $320                 ?0                  	;0
606 211  NOP/0                     ?0        ?0                   ?0                  	;1
607 211  GOTO/253                  ?0        ?625                 ?431                	;0
608 213  INIT_METHOD_CALL/112      ?0        16?2                 432:'query'         	;3
609 213  SEND_VAL_EX/116           ?80       434:'SELECT MAX(`compatible`) AS `compatible` FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `series_id` = ? AND `season_num` = ?;' ?1                  	;0
610 213  FETCH_DIM_FUNC_ARG/93     $321=     16?3                 435:'id'            	;2
611 213  SEND_VAR_EX/66            ?96       $321                 ?2                  	;0
612 213  FETCH_DIM_FUNC_ARG/93     $322=     16?16                436:'season_num'    	;3
613 213  SEND_VAR_EX/66            ?112      $322                 ?3                  	;0
614 213  DO_FCALL/60               ?297      ?0                   ?0                  	;0
615 214  INIT_METHOD_CALL/112      ?0        16?2                 437:'get_row'       	;0
616 214  DO_FCALL/60               $324=     ?0                   ?0                  	;0
617 214  FETCH_DIM_R/81            $325=     $324                 439:'compatible'    	;0
618 214  BOOL_NOT/13               #326=     $325                 ?0                  	;0
619 214  JMPZ/43                   ?0        #326                 ?622                	;0	>>622
620 215  NOP/0                     ?0        ?0                   ?0                  	;1
621 215  GOTO/253                  ?0        ?625                 ?440                	;0
622 217  FETCH_DIM_R/81            $328=     16?16                441:'season_num'    	;0	<<619
623 217  ASSIGN_DIM/147            ?301      16?1                 ?4397406            	;0
624 217  OP_DATA/137               ?0        $328                 ?0                  	;0
625 220  JMP/42                    ?0        ?597                 ?0                  	;0	>>597
626 220  FE_FREE/127               ?0        $316                 ?0                  	;0	<<596
627 222  GOTO/253                  ?0        ?1                   ?442                	;0
628 225  ECHO/40                   ?0        443:'                        </ul>
                    </h1>
				</div>
				<div class="col-12 col-xl-12">
					<div class="card card--details">
						<div class="row">
							<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
								<div class="card__cover">
									<img src="' ?0                  	;0
629 226  ECHO/40                   ?0        16?19                ?0                  	;0
630 227  ECHO/40                   ?0        444:'" alt="">
								</div>
							</div>
							<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">
								<div class="card__content">
									<div class="card__wrap">
										<span class="card__rate">' ?0                  	;0
631 228  FETCH_DIM_R/81            $329=     16?3                 445:'year'          	;0
632 228  JMPZ/43                   ?0        $329                 ?637                	;0	>>637
633 228  FETCH_DIM_R/81            $330=     16?3                 446:'year'          	;0
634 228  CONCAT/8                  #331=     $330                 447:' &nbsp; '      	;0
635 228  QM_ASSIGN/22              #332=     #331                 ?0                  	;0
636 228  JMP/42                    ?0        ?638                 ?0                  	;0	>>638
637 228  QM_ASSIGN/22              #332=     448:''               ?0                  	;0	<<632
638 228  ECHO/40                   ?0        #332                 ?0                  	;0	<<636
639 229  GOTO/253                  ?0        ?463                 ?449                	;0
640 231  INIT_METHOD_CALL/112      ?0        16?2                 450:'query'         	;1
641 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   452:'implode'       	;2
642 231  SEND_VAL_EX/116           ?80       454:','              ?1                  	;0
643 231  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
644 231  DO_FCALL_BY_NAME/131      $333=     ?0                   ?0                  	;0
645 231  CONCAT/8                  #334=     455:'SELECT * FROM `series` WHERE `tmdb_id` IN (' $333                	;0
646 231  CONCAT/8                  #335=     #334                 456:') LIMIT 6;'    	;0
647 231  SEND_VAL_EX/116           ?80       #335                 ?1                  	;0
648 231  DO_FCALL/60               ?310      ?0                   ?0                  	;0
649 232  GOTO/253                  ?0        ?659                 ?457                	;0
650 234  INIT_METHOD_CALL/112      ?0        16?2                 458:'query'         	;1
651 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   460:'implode'       	;2
652 234  SEND_VAL_EX/116           ?80       462:','              ?1                  	;0
653 234  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
654 234  DO_FCALL_BY_NAME/131      $337=     ?0                   ?0                  	;0
655 234  CONCAT/8                  #338=     463:'SELECT * FROM `streams_series` WHERE `tmdb_id` IN (' $337                	;0
656 234  CONCAT/8                  #339=     #338                 464:') LIMIT 6;'    	;0
657 234  SEND_VAL_EX/116           ?80       #339                 ?1                  	;0
658 234  DO_FCALL/60               ?314      ?0                   ?0                  	;0
659 236  GOTO/253                  ?0        ?225                 ?465                	;0
660 238  FE_RESET_R/77             $341=     16?5                 ?760                	;0
661 238  FE_FETCH_R/78             ?0        $341                 16?16               	;760	>>760	<<759
662 239  NOP/0                     ?0        ?0                   ?0                  	;1
663 239  GOTO/253                  ?0        ?722                 ?466                	;0
664 241  FETCH_DIM_R/81            $342=     16?24                467:'rating'        	;0
665 241  JMPZ/43                   ?0        $342                 ?673                	;0	>>673
666 241  INIT_FCALL_BY_NAME/59     ?0        ?0                   468:'number_format' 	;2
667 241  FETCH_DIM_FUNC_ARG/93     $343=     16?24                470:'rating'        	;1
668 241  SEND_VAR_EX/66            ?80       $343                 ?1                  	;0
669 241  SEND_VAL_EX/116           ?96       471:1                ?2                  	;0
670 241  DO_FCALL_BY_NAME/131      $344=     ?0                   ?0                  	;0
671 241  QM_ASSIGN/22              #345=     $344                 ?0                  	;0
672 241  JMP/42                    ?0        ?684                 ?0                  	;0	>>684
673 241  FETCH_DIM_R/81            $346=     16?3                 472:'rating'        	;0	<<665
674 241  JMPZ/43                   ?0        $346                 ?682                	;0	>>682
675 241  INIT_FCALL_BY_NAME/59     ?0        ?0                   473:'number_format' 	;2
676 241  FETCH_DIM_FUNC_ARG/93     $347=     16?3                 475:'rating'        	;1
677 241  SEND_VAR_EX/66            ?80       $347                 ?1                  	;0
678 241  SEND_VAL_EX/116           ?96       476:1                ?2                  	;0
679 241  DO_FCALL_BY_NAME/131      $348=     ?0                   ?0                  	;0
680 241  QM_ASSIGN/22              #349=     $348                 ?0                  	;0
681 241  JMP/42                    ?0        ?683                 ?0                  	;0	>>683
682 241  QM_ASSIGN/22              #349=     477:'N/A'            ?0                  	;0	<<674
683 241  QM_ASSIGN/22              #345=     #349                 ?0                  	;0	<<681
684 241  ECHO/40                   ?0        #345                 ?0                  	;0	<<672
685 242  ECHO/40                   ?0        478:'</span>
                                    </div>
                                </div>
                            </div>
                        ' ?0                  	;0
686 244  NOP/0                     ?0        ?0                   ?0                  	;1
687 244  GOTO/253                  ?0        ?759                 ?479                	;0
688 246  ECHO/40                   ?0        480:' - '            ?0                  	;0
689 247  FETCH_DIM_R/81            $350=     16?24                481:'title'         	;0
690 247  ECHO/40                   ?0        $350                 ?0                  	;0
691 248  ECHO/40                   ?0        482:'</a></h3>
                                        <span class="card__episode">
                                            ' ?0                  	;0
692 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   483:'strlen'        	;1
693 249  FETCH_DIM_FUNC_ARG/93     $351=     16?24                485:'description'   	;1
694 249  SEND_VAR_EX/66            ?80       $351                 ?1                  	;0
695 249  DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
696 249  IS_SMALLER/19             #353=     486:500              $352                	;0
697 249  JMPZ/43                   ?0        #353                 ?707                	;0	>>707
698 249  INIT_FCALL_BY_NAME/59     ?0        ?0                   487:'substr'        	;3
699 249  FETCH_DIM_FUNC_ARG/93     $354=     16?24                489:'description'   	;1
700 249  SEND_VAR_EX/66            ?80       $354                 ?1                  	;0
701 249  SEND_VAL_EX/116           ?96       490:0                ?2                  	;0
702 249  SEND_VAL_EX/116           ?112      491:500              ?3                  	;0
703 249  DO_FCALL_BY_NAME/131      $355=     ?0                   ?0                  	;0
704 249  CONCAT/8                  #356=     $355                 492:'...'           	;0
705 249  QM_ASSIGN/22              #357=     #356                 ?0                  	;0
706 249  JMP/42                    ?0        ?709                 ?0                  	;0	>>709
707 249  FETCH_DIM_R/81            $358=     16?24                493:'description'   	;0	<<697
708 249  QM_ASSIGN/22              #357=     $358                 ?0                  	;0
709 249  ECHO/40                   ?0        #357                 ?0                  	;0	<<706
710 250  ECHO/40                   ?0        494:'                                        </span>
                                        <ul class="card__list card__danger" style="display: none;">
                                            <li>UNAVAILABLE</li>
                                        </ul>
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>' ?0                  	;0
711 251  NOP/0                     ?0        ?0                   ?0                  	;1
712 251  GOTO/253                  ?0        ?664                 ?495                	;0
713 253  ECHO/40                   ?0        496:'" data-index="' ?0                  	;0
714 254  SUB/2                     #359=     16?9                 497:1               	;0
715 254  ECHO/40                   ?0        #359                 ?0                  	;0
716 255  ECHO/40                   ?0        498:'">
                                <div class="card card--big">
                                    <div class="card__cover">
                                        <img loading="lazy" src="' ?0                  	;0
717 256  FETCH_DIM_R/81            $360=     16?24                499:'image'         	;0
718 256  ECHO/40                   ?0        $360                 ?0                  	;0
719 257  ECHO/40                   ?0        500:'" alt="">
                                        <a href="javascript:void(0)" onClick="openPlayer(' ?0                  	;0
720 258  NOP/0                     ?0        ?0                   ?0                  	;1
721 258  GOTO/253                  ?0        ?745                 ?501                	;0
722 260  POST_INC/36               #361=     16?9                 ?0                  	;0
723 260  FREE/70                   ?0        #361                 ?0                  	;0
724 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   502:'json_decode'   	;2
725 261  FETCH_CONSTANT/99         #362=     ?0                   504:'PLATFORM'      	;16
726 261  IS_EQUAL/17               #363=     #362                 507:'xui'           	;0
727 261  JMPZ/43                   ?0        #363                 ?731                	;0	>>731
728 261  FETCH_DIM_R/81            $364=     16?16                508:'movie_properties'	;0
729 261  QM_ASSIGN/22              #365=     $364                 ?0                  	;0
730 261  JMP/42                    ?0        ?733                 ?0                  	;0	>>733
731 261  FETCH_DIM_R/81            $366=     16?16                509:'movie_propeties'	;0	<<727
732 261  QM_ASSIGN/22              #365=     $366                 ?0                  	;0
733 261  SEND_VAL_EX/116           ?80       #365                 ?1                  	;0	<<730
734 261  SEND_VAL_EX/116           ?96       510:true             ?2                  	;0
735 261  DO_FCALL_BY_NAME/131      $367=     ?0                   ?0                  	;0
736 261  ASSIGN/38                 ?342      16?7                 $367                	;0
737 262  FETCH_DIM_R/81            $369=     16?16                511:'episode_num'   	;0
738 262  FETCH_DIM_R/81            $370=     16?8                 $369                	;0
739 262  ASSIGN/38                 ?345      16?24                $370                	;0
740 263  ECHO/40                   ?0        512:'                            <div class="item" id="episode_' ?0                  	;0
741 264  FETCH_DIM_R/81            $372=     16?16                513:'id'            	;0
742 264  ECHO/40                   ?0        $372                 ?0                  	;0
743 265  NOP/0                     ?0        ?0                   ?0                  	;1
744 265  GOTO/253                  ?0        ?713                 ?514                	;0
745 267  FETCH_DIM_R/81            $373=     16?16                515:'id'            	;0
746 267  ECHO/40                   ?0        $373                 ?0                  	;0
747 268  ECHO/40                   ?0        516:');" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="javascript:void(0);" onClick="openPlayer(' ?0                  	;0
748 269  FETCH_DIM_R/81            $374=     16?16                517:'id'            	;0
749 269  ECHO/40                   ?0        $374                 ?0                  	;0
750 270  ECHO/40                   ?0        518:');">'           ?0                  	;0
751 271  INIT_FCALL_BY_NAME/59     ?0        ?0                   519:'sprintf'       	;2
752 271  SEND_VAL_EX/116           ?80       521:'%02d'           ?1                  	;0
753 271  FETCH_DIM_FUNC_ARG/93     $375=     16?16                522:'episode_num'   	;2
754 271  SEND_VAR_EX/66            ?96       $375                 ?2                  	;0
755 271  DO_FCALL_BY_NAME/131      $376=     ?0                   ?0                  	;0
756 271  ECHO/40                   ?0        $376                 ?0                  	;0
757 272  NOP/0                     ?0        ?0                   ?0                  	;1
758 272  GOTO/253                  ?0        ?688                 ?523                	;0
759 273  JMP/42                    ?0        ?661                 ?0                  	;0	>>661
760 273  FE_FREE/127               ?0        $341                 ?0                  	;0	<<660
761 276  ECHO/40                   ?0        524:'					</div>
				</div>
			</div>
		</div>
        ' ?0                  	;0
762 277  GOTO/253                  ?0        ?797                 ?525                	;0
763 279  GOTO/253                  ?0        ?796                 ?526                	;0
764 281  ASSIGN/38                 ?351      16?10                527:array (
)       	;0
765 282  INIT_FCALL_BY_NAME/59     ?0        ?0                   528:'json_decode'   	;2
766 282  FETCH_DIM_FUNC_ARG/93     $378=     16?3                 530:'similar'       	;1
767 282  SEND_VAR_EX/66            ?80       $378                 ?1                  	;0
768 282  SEND_VAL_EX/116           ?96       531:true             ?2                  	;0
769 282  DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
770 282  ASSIGN/38                 ?354      16?15                $379                	;0
771 283  INIT_FCALL_BY_NAME/59     ?0        ?0                   532:'count'         	;1
772 283  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
773 283  DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
774 283  IS_SMALLER/19             #382=     534:0                $381                	;0
775 283  BOOL_NOT/13               #383=     #382                 ?0                  	;0
776 283  JMPZ/43                   ?0        #383                 ?778                	;0	>>778
777 284  GOTO/253                  ?0        ?887                 ?535                	;0
778 286  FETCH_STATIC_PROP_R/173   $384=     536:'rSettings'      537:'XUI'           	;0	<<776
779 286  FETCH_DIM_R/81            $385=     $384                 539:'player_hide_incompatible'	;0
780 286  JMPZ/43                   ?0        $385                 ?782                	;0	>>782
781 287  GOTO/253                  ?0        ?226                 ?540                	;0
782 289  FETCH_CONSTANT/99         #386=     ?0                   541:'PLATFORM'      	;16	<<780
783 289  IS_EQUAL/17               #387=     #386                 544:'xui'           	;0
784 289  JMPZ/43                   ?0        #387                 ?786                	;0	>>786
785 290  GOTO/253                  ?0        ?650                 ?545                	;0
786 292  GOTO/253                  ?0        ?640                 ?546                	;0	<<784
787 294  GOTO/253                  ?0        ?794                 ?547                	;0
788 296  INIT_METHOD_CALL/112      ?0        16?2                 548:'query'         	;3
789 296  SEND_VAL_EX/116           ?80       550:'SELECT * FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `series_id` = ? AND `season_num` = ? ORDER BY `episode_num` ASC;' ?1                  	;0
790 296  FETCH_DIM_FUNC_ARG/93     $388=     16?3                 551:'id'            	;2
791 296  SEND_VAR_EX/66            ?96       $388                 ?2                  	;0
792 296  SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
793 296  DO_FCALL/60               ?363      ?0                   ?0                  	;0
794 298  GOTO/253                  ?0        ?429                 ?552                	;0
795 299  GOTO/253                  ?0        ?423                 ?553                	;0
796 301  ECHO/40                   ?0        554:'        <div class="container">
			<div class="row">
				<div class="col-12">
                    <div class="alert alert-danger">
                        No episodes are available for this series. Please check back later.
                    </div>
                </div>
            </div>
        </div>
        ' ?0                  	;0
797 303  ECHO/40                   ?0        555:'	</section>
    ' ?0                  	;0
798 304  INIT_FCALL_BY_NAME/59     ?0        ?0                   556:'count'         	;1
799 304  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
800 304  DO_FCALL_BY_NAME/131      $390=     ?0                   ?0                  	;0
801 304  IS_SMALLER/19             #391=     558:0                $390                	;0
802 304  BOOL_NOT/13               #392=     #391                 ?0                  	;0
803 304  JMPZ/43                   ?0        #392                 ?805                	;0	>>805
804 305  GOTO/253                  ?0        ?160                 ?559                	;0
805 307  ECHO/40                   ?0        560:'	<section class="content">
		<div class="container" style="margin-top: 30px;">
			<div class="row">
				<div class="col-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">Users Also Watched</h2>
						</div>
                        ' ?0                  	;0	<<803
806 308  GOTO/253                  ?0        ?99                  ?561                	;0
807 310  ECHO/40                   ?0        562:'					</div>
				</div>
			</div>
		</div>
	</section>
    <section class="seasons">
        ' ?0                  	;0
808 311  INIT_FCALL_BY_NAME/59     ?0        ?0                   563:'count'         	;1
809 311  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
810 311  DO_FCALL_BY_NAME/131      $393=     ?0                   ?0                  	;0
811 311  IS_EQUAL/17               #394=     $393                 565:0               	;0
812 311  JMPZ/43                   ?0        #394                 ?814                	;0	>>814
813 312  GOTO/253                  ?0        ?763                 ?566                	;0
814 314  ECHO/40                   ?0        567:'		<div class="owl-carousel seasons__bg">
            ' ?0                  	;0	<<812
815 315  FE_RESET_R/77             $395=     16?5                 ?824                	;0
816 315  FE_FETCH_R/78             ?0        $395                 16?6                	;824	>>824	<<823
817 316  ECHO/40                   ?0        568:'			<div class="item seasons__cover" data-bg="' ?0                  	;0
818 317  FETCH_DIM_R/81            $396=     16?6                 569:'episode_num'   	;0
819 317  FETCH_DIM_R/81            $397=     16?8                 $396                	;0
820 317  FETCH_DIM_R/81            $398=     $397                 570:'image_cover'   	;0
821 317  ECHO/40                   ?0        $398                 ?0                  	;0
822 318  ECHO/40                   ?0        571:'"></div>
            ' ?0                  	;0
823 319  JMP/42                    ?0        ?816                 ?0                  	;0	>>816
824 319  FE_FREE/127               ?0        $395                 ?0                  	;0	<<815
825 322  GOTO/253                  ?0        ?848                 ?572                	;0
826 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   573:'implode'       	;2
827 324  SEND_VAL_EX/116           ?80       575:', '             ?1                  	;0
828 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   576:'array_slice'   	;3
829 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   578:'explode'       	;2
830 324  SEND_VAL_EX/116           ?80       580:','              ?1                  	;0
831 324  FETCH_DIM_FUNC_ARG/93     $399=     16?3                 581:'cast'          	;2
832 324  SEND_VAR_EX/66            ?96       $399                 ?2                  	;0
833 324  DO_FCALL_BY_NAME/131      $400=     ?0                   ?0                  	;0
834 324  SEND_VAR_NO_REF_EX/50     ?80       $400                 ?1                  	;0
835 324  SEND_VAL_EX/116           ?96       582:0                ?2                  	;0
836 324  SEND_VAL_EX/116           ?112      583:5                ?3                  	;0
837 324  DO_FCALL_BY_NAME/131      $401=     ?0                   ?0                  	;0
838 324  SEND_VAR_NO_REF_EX/50     ?96       $401                 ?2                  	;0
839 324  DO_FCALL_BY_NAME/131      $402=     ?0                   ?0                  	;0
840 324  ECHO/40                   ?0        $402                 ?0                  	;0
841 325  ECHO/40                   ?0        584:'                                        </li>
									</ul>
									<div class="card__description card__description--details">
										' ?0                  	;0
842 326  FETCH_DIM_R/81            $403=     16?3                 585:'plot'          	;0
843 326  ECHO/40                   ?0        $403                 ?0                  	;0
844 327  ECHO/40                   ?0        586:'									</div>
								</div>
							</div>
						</div>
                        ' ?0                  	;0
845 328  JMPZ/43                   ?0        16?21                ?847                	;0	>>847
846 329  GOTO/253                  ?0        ?207                 ?587                	;0
847 331  GOTO/253                  ?0        ?205                 ?588                	;0	<<845
848 333  ECHO/40                   ?0        589:'		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="seasons__title">
                        <select id="season__select">
                            ' ?0                  	;0
849 334  FE_RESET_R/77             $404=     16?1                 ?862                	;0
850 334  FE_FETCH_R/78             ?0        $404                 16?9                	;862	>>862	<<861
851 335  ECHO/40                   ?0        590:'                            <option' ?0                  	;0
852 336  IS_EQUAL/17               #405=     16?0                 16?9                	;0
853 336  BOOL_NOT/13               #406=     #405                 ?0                  	;0
854 336  JMPZ/43                   ?0        #406                 ?857                	;0	>>857
855 337  NOP/0                     ?0        ?0                   ?0                  	;1
856 337  GOTO/253                  ?0        ?858                 ?591                	;0
857 339  ECHO/40                   ?0        592:' selected'      ?0                  	;0	<<854
858 341  ECHO/40                   ?0        593:'>Season '       ?0                  	;0
859 342  ECHO/40                   ?0        16?9                 ?0                  	;0
860 343  ECHO/40                   ?0        594:'</option>
                            ' ?0                  	;0
861 344  JMP/42                    ?0        ?850                 ?0                  	;0	>>850
862 344  FE_FREE/127               ?0        $404                 ?0                  	;0	<<849
863 347  ECHO/40                   ?0        595:'                        </select>
                    </h1>
					<button class="seasons__nav seasons__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="seasons__nav seasons__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>
				<div class="col-12">
					<div class="owl-carousel seasons__carousel">
                        ' ?0                  	;0
864 348  ASSIGN/38                 ?381      16?9                 596:0               	;0
865 349  GOTO/253                  ?0        ?660                 ?597                	;0
866 351  GOTO/253                  ?0        ?209                 ?598                	;0
867 353  INIT_STATIC_METHOD_CALL/113 ?0        599:'XUI'            601:'getSeriesTMDB' 	;1
868 353  FETCH_DIM_FUNC_ARG/93     $408=     16?3                 603:'tmdb_id'       	;1
869 353  SEND_VAR_EX/66            ?80       $408                 ?1                  	;0
870 353  DO_FCALL/60               $409=     ?0                   ?0                  	;0
871 353  ASSIGN/38                 ?384      16?13                $409                	;0
872 354  BOOL_NOT/13               #411=     16?13                ?0                  	;0
873 354  JMPZ/43                   ?0        #411                 ?875                	;0	>>875
874 355  GOTO/253                  ?0        ?209                 ?604                	;0
875 357  INIT_FCALL_BY_NAME/59     ?0        ?0                   605:'file_put_contents'	;2	<<873
876 357  FETCH_CONSTANT/99         #412=     ?0                   607:'TMP_PATH'      	;16
877 357  CONCAT/8                  #413=     #412                 610:'tmdb_'         	;0
878 357  FETCH_DIM_R/81            $414=     16?3                 611:'tmdb_id'       	;0
879 357  CONCAT/8                  #415=     #413                 $414                	;0
880 357  SEND_VAL_EX/116           ?80       #415                 ?1                  	;0
881 357  INIT_STATIC_METHOD_CALL/113 ?0        612:'XUI'            614:'serialize'     	;1
882 357  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
883 357  DO_FCALL/60               $416=     ?0                   ?0                  	;0
884 357  SEND_VAR_NO_REF_EX/50     ?96       $416                 ?2                  	;0
885 357  DO_FCALL_BY_NAME/131      ?391      ?0                   ?0                  	;0
886 358  GOTO/253                  ?0        ?209                 ?616                	;0
887 362  FETCH_DIM_R/81            $418=     16?3                 617:'title'         	;0
888 362  ASSIGN/38                 ?393      16?25                $418                	;0
889 363  INCLUDE_OR_EVAL/73        ?394      618:'header.php'     ?0                  	;2
890 364  ECHO/40                   ?0        619:'	<section class="section details">
		<div class="details__bg" data-bg="' ?0                  	;0
891 365  GOTO/253                  ?0        ?434                 ?620                	;0
892 367  INCLUDE_OR_EVAL/73        ?395      621:'footer.php'     ?0                  	;2
893 368  NOP/0                     ?0        622:1                ?0                  	;4294967295
*/

?>