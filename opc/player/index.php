<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?594                 ?0                  	;0	>>594
1   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'shuffle'         	;1
2   7    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
3   7    DO_FCALL_BY_NAME/131      ?0        ?0                   ?0                  	;0
4   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'array_slice'     	;3
5   8    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
6   8    SEND_VAL_EX/116           ?96       5:0                  ?2                  	;0
7   8    SEND_VAL_EX/116           ?112      6:20                 ?3                  	;0
8   8    DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
9   8    ASSIGN/38                 ?2        16?0                 $15                 	;0
10  9    INIT_STATIC_METHOD_CALL/113 ?0        7:'XUI'              9:'Ca290dC77E86B74B'	;9
11  9    SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
12  9    SEND_VAL_EX/116           ?96       11:array (
  0 => 'movie',
) ?2                  	;0
13  9    SEND_VAL_EX/116           ?112      12:NULL              ?3                  	;0
14  9    SEND_VAL_EX/116           ?128      13:NULL              ?4                  	;0
15  9    SEND_VAL_EX/116           ?144      14:'added'           ?5                  	;0
16  9    SEND_VAL_EX/116           ?160      15:NULL              ?6                  	;0
17  9    SEND_VAL_EX/116           ?176      16:NULL              ?7                  	;0
18  9    SEND_VAL_EX/116           ?192      17:0                 ?8                  	;0
19  9    SEND_VAL_EX/116           ?208      18:20                ?9                  	;0
20  9    DO_FCALL/60               $17=      ?0                   ?0                  	;0
21  9    ASSIGN/38                 ?4        16?1                 $17                 	;0
22  10   GOTO/253                  ?0        ?360                 ?19                 	;0
23  12   ECHO/40                   ?0        20:'					</div>
				</div>
			</div>
		</div>
	</section>
    ' ?0                  	;0
24  14   ECHO/40                   ?0        21:'	<section class="content"' ?0                  	;0
25  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'count'          	;1
26  15   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
27  15   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
28  15   IS_EQUAL/17               #20=      $19                  24:0                	;0
29  15   BOOL_NOT/13               #21=      #20                  ?0                  	;0
30  15   JMPZ/43                   ?0        #21                  ?32                 	;0	>>32
31  16   GOTO/253                  ?0        ?160                 ?25                 	;0
32  18   ECHO/40                   ?0        26:' style="margin-top: 10px;"' ?0                  	;0	<<30
33  19   GOTO/253                  ?0        ?160                 ?27                 	;0
34  21   GOTO/253                  ?0        ?59                  ?28                 	;0
35  23   INIT_METHOD_CALL/112      ?0        16?3                 29:'query'          	;1
36  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'implode'        	;2
37  23   SEND_VAL_EX/116           ?80       33:','               ?1                  	;0
38  23   FETCH_DIM_FUNC_ARG/93     $22=      16?4                 34:'series'         	;2
39  23   SEND_VAR_EX/66            ?96       $22                  ?2                  	;0
40  23   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
41  23   CONCAT/8                  #24=      35:'SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' $23                 	;0
42  23   CONCAT/8                  #25=      #24                  36:') AND `id` IN ('	;0
43  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'implode'        	;2
44  23   SEND_VAL_EX/116           ?80       39:','               ?1                  	;0
45  23   FETCH_DIM_FUNC_ARG/93     $26=      16?2                 40:'series_ids'     	;2
46  23   SEND_VAR_EX/66            ?96       $26                  ?2                  	;0
47  23   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
48  23   CONCAT/8                  #28=      #25                  $27                 	;0
49  23   CONCAT/8                  #29=      #28                  41:') ORDER BY FIELD(id, '	;0
50  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'implode'        	;2
51  23   SEND_VAL_EX/116           ?80       44:','               ?1                  	;0
52  23   FETCH_DIM_FUNC_ARG/93     $30=      16?4                 45:'series'         	;2
53  23   SEND_VAR_EX/66            ?96       $30                  ?2                  	;0
54  23   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
55  23   CONCAT/8                  #32=      #29                  $31                 	;0
56  23   CONCAT/8                  #33=      #32                  46:') ASC LIMIT 50;'	;0
57  23   SEND_VAL_EX/116           ?80       #33                  ?1                  	;0
58  23   DO_FCALL/60               ?20       ?0                   ?0                  	;0
59  25   GOTO/253                  ?0        ?111                 ?47                 	;0
60  26   GOTO/253                  ?0        ?87                  ?48                 	;0
61  29   INIT_METHOD_CALL/112      ?0        16?3                 49:'query'          	;1
62  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   51:'implode'        	;2
63  29   SEND_VAL_EX/116           ?80       53:','               ?1                  	;0
64  29   FETCH_DIM_FUNC_ARG/93     $35=      16?4                 54:'movies'         	;2
65  29   SEND_VAR_EX/66            ?96       $35                  ?2                  	;0
66  29   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
67  29   CONCAT/8                  #37=      55:'SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_properties` FROM `streams` WHERE `id` IN (' $36                 	;0
68  29   CONCAT/8                  #38=      #37                  56:') AND `id` IN ('	;0
69  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'implode'        	;2
70  29   SEND_VAL_EX/116           ?80       59:','               ?1                  	;0
71  29   FETCH_DIM_FUNC_ARG/93     $39=      16?2                 60:'vod_ids'        	;2
72  29   SEND_VAR_EX/66            ?96       $39                  ?2                  	;0
73  29   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
74  29   CONCAT/8                  #41=      #38                  $40                 	;0
75  29   CONCAT/8                  #42=      #41                  61:') ORDER BY FIELD(id, '	;0
76  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'implode'        	;2
77  29   SEND_VAL_EX/116           ?80       64:','               ?1                  	;0
78  29   FETCH_DIM_FUNC_ARG/93     $43=      16?4                 65:'movies'         	;2
79  29   SEND_VAR_EX/66            ?96       $43                  ?2                  	;0
80  29   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
81  29   CONCAT/8                  #45=      #42                  $44                 	;0
82  29   CONCAT/8                  #46=      #45                  66:') ASC LIMIT 50;'	;0
83  29   SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
84  29   DO_FCALL/60               ?33       ?0                   ?0                  	;0
85  31   GOTO/253                  ?0        ?418                 ?67                 	;0
86  33   GOTO/253                  ?0        ?394                 ?68                 	;0
87  36   INIT_METHOD_CALL/112      ?0        16?3                 69:'query'          	;1
88  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'implode'        	;2
89  36   SEND_VAL_EX/116           ?80       73:','               ?1                  	;0
90  36   FETCH_DIM_FUNC_ARG/93     $48=      16?4                 74:'series'         	;2
91  36   SEND_VAR_EX/66            ?96       $48                  ?2                  	;0
92  36   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
93  36   CONCAT/8                  #50=      75:'SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' $49                 	;0
94  36   CONCAT/8                  #51=      #50                  76:') AND `id` IN ('	;0
95  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'implode'        	;2
96  36   SEND_VAL_EX/116           ?80       79:','               ?1                  	;0
97  36   FETCH_DIM_FUNC_ARG/93     $52=      16?2                 80:'series_ids'     	;2
98  36   SEND_VAR_EX/66            ?96       $52                  ?2                  	;0
99  36   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
100 36   CONCAT/8                  #54=      #51                  $53                 	;0
101 36   CONCAT/8                  #55=      #54                  81:') AND (SELECT MAX(`compatible`) FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) = 1 ORDER BY FIELD(id, '	;0
102 36   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'implode'        	;2
103 36   SEND_VAL_EX/116           ?80       84:','               ?1                  	;0
104 36   FETCH_DIM_FUNC_ARG/93     $56=      16?4                 85:'series'         	;2
105 36   SEND_VAR_EX/66            ?96       $56                  ?2                  	;0
106 36   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
107 36   CONCAT/8                  #58=      #55                  $57                 	;0
108 36   CONCAT/8                  #59=      #58                  86:') ASC LIMIT 50;'	;0
109 36   SEND_VAL_EX/116           ?80       #59                  ?1                  	;0
110 36   DO_FCALL/60               ?46       ?0                   ?0                  	;0
111 38   INIT_METHOD_CALL/112      ?0        16?3                 87:'get_rows'       	;0
112 38   DO_FCALL/60               $61=      ?0                   ?0                  	;0
113 38   ASSIGN/38                 ?48       16?5                 $61                 	;0
114 39   FE_RESET_R/77             $63=      16?5                 ?158                	;0
115 39   FE_FETCH_R/78             ?0        $63                  16?6                	;158	>>158	<<157
116 40   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'json_decode'    	;2
117 40   FETCH_DIM_FUNC_ARG/93     $64=      16?6                 91:'backdrop_path'  	;1
118 40   SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
119 40   SEND_VAL_EX/116           ?96       92:true              ?2                  	;0
120 40   DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
121 40   ASSIGN/38                 ?52       16?7                 $65                 	;0
122 41   INIT_ARRAY/71             #68=      93:'episodes'        94:'type'           	;30
123 41   FETCH_DIM_R/81            $69=      16?6                 95:'id'             	;0
124 41   ADD_ARRAY_ELEMENT/72      #68=      $69                  96:'id'             	;0
125 41   FETCH_DIM_R/81            $70=      16?6                 97:'title'          	;0
126 41   ADD_ARRAY_ELEMENT/72      #68=      $70                  98:'title'          	;0
127 41   FETCH_DIM_R/81            $71=      16?6                 99:'year'           	;0
128 41   JMP_SET/152               #72=      $71                  ?138                	;0
129 41   INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'substr'        	;3
130 41   FETCH_DIM_FUNC_ARG/93     $73=      16?6                 102:'releaseDate'   	;1
131 41   SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
132 41   SEND_VAL_EX/116           ?96       103:0                ?2                  	;0
133 41   SEND_VAL_EX/116           ?112      104:4                ?3                  	;0
134 41   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
135 41   JMP_SET/152               #75=      $74                  ?137                	;0
136 41   QM_ASSIGN/22              #75=      105:NULL             ?0                  	;0
137 41   QM_ASSIGN/22              #72=      #75                  ?0                  	;0
138 41   ADD_ARRAY_ELEMENT/72      #68=      #72                  106:'year'          	;0
139 41   FETCH_DIM_R/81            $76=      16?6                 107:'rating'        	;0
140 41   ADD_ARRAY_ELEMENT/72      #68=      $76                  108:'rating'        	;0
141 41   INIT_STATIC_METHOD_CALL/113 ?0        109:'XUI'            111:'Fca722697178454B'	;1
142 41   FETCH_DIM_FUNC_ARG/93     $77=      16?6                 113:'cover'         	;1
143 41   SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
144 41   DO_FCALL/60               $78=      ?0                   ?0                  	;0
145 41   JMP_SET/152               #79=      $78                  ?147                	;0
146 41   QM_ASSIGN/22              #79=      114:''               ?0                  	;0
147 41   ADD_ARRAY_ELEMENT/72      #68=      #79                  115:'cover'         	;0
148 41   INIT_STATIC_METHOD_CALL/113 ?0        116:'XUI'            118:'Fca722697178454b'	;1
149 41   FETCH_DIM_FUNC_ARG/93     $80=      16?7                 120:0               	;1
150 41   SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
151 41   DO_FCALL/60               $81=      ?0                   ?0                  	;0
152 41   JMP_SET/152               #82=      $81                  ?154                	;0
153 41   QM_ASSIGN/22              #82=      121:''               ?0                  	;0
154 41   ADD_ARRAY_ELEMENT/72      #68=      #82                  122:'backdrop'      	;0
155 41   ASSIGN_DIM/147            ?53       16?0                 ?2670194944         	;0
156 41   OP_DATA/137               ?0        #68                  ?0                  	;0
157 42   JMP/42                    ?0        ?115                 ?0                  	;0	>>115
158 42   FE_FREE/127               ?0        $63                  ?0                  	;0	<<114
159 44   GOTO/253                  ?0        ?1                   ?123                	;0
160 47   ECHO/40                   ?0        124:'>
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="home__title" style="margin-top:30px;">NEWLY <b>ADDED</b></h1>
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="true">MOVIES</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#series" role="tab" aria-controls="series" aria-selected="false">TV SERIES</a>
							</li>
						</ul>
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Movies">
								<span></span>
							</div>
							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="true">MOVIES</a></li>
									<li class="nav-item"><a class="nav-link" id="series-tab" data-toggle="tab" href="#series" role="tab" aria-controls="series" aria-selected="false">TV SERIES</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="movies" role="tabpanel" aria-labelledby="movies-tab">
					<div class="row">
						' ?0                  	;0
161 48   FETCH_DIM_R/81            $83=      16?1                 125:'streams'       	;0
162 48   FE_RESET_R/77             $84=      $83                  ?235                	;0
163 48   FE_FETCH_R/78             #85=      $84                  16?6                	;235	>>235	<<234
164 48   ASSIGN/38                 ?72       16?8                 #85                 	;0
165 49   NOP/0                     ?0        ?0                   ?0                  	;1
166 49   GOTO/253                  ?0        ?167                 ?126                	;0
167 51   INIT_FCALL_BY_NAME/59     ?0        ?0                   127:'json_decode'   	;2
168 51   FETCH_CONSTANT/99         #87=      ?0                   129:'PLATFORM'      	;16
169 51   IS_EQUAL/17               #88=      #87                  132:'xui'           	;0
170 51   JMPZ/43                   ?0        #88                  ?174                	;0	>>174
171 51   FETCH_DIM_R/81            $89=      16?6                 133:'movie_properties'	;0
172 51   QM_ASSIGN/22              #90=      $89                  ?0                  	;0
173 51   JMP/42                    ?0        ?176                 ?0                  	;0	>>176
174 51   FETCH_DIM_R/81            $91=      16?6                 134:'movie_propeties'	;0	<<170
175 51   QM_ASSIGN/22              #90=      $91                  ?0                  	;0
176 51   SEND_VAL_EX/116           ?80       #90                  ?1                  	;0	<<173
177 51   SEND_VAL_EX/116           ?96       135:true             ?2                  	;0
178 51   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
179 51   ASSIGN/38                 ?79       16?9                 $92                 	;0
180 52   ECHO/40                   ?0        136:'                            <div class="col-6 col-sm-4 col-lg-3 col-xl-3">
                                <div class="card">
                                    <div class="card__cover">
                                        <img loading="lazy" src="resize.php?url=' ?0                  	;0
181 53   INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'urlencode'     	;1
182 53   INIT_STATIC_METHOD_CALL/113 ?0        139:'XUI'            141:'FcA722697178454b'	;1
183 53   FETCH_DIM_FUNC_ARG/93     $94=      16?9                 143:'movie_image'   	;1
184 53   SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
185 53   DO_FCALL/60               $95=      ?0                   ?0                  	;0
186 53   JMP_SET/152               #96=      $95                  ?188                	;0
187 53   QM_ASSIGN/22              #96=      144:''               ?0                  	;0
188 53   SEND_VAL_EX/116           ?80       #96                  ?1                  	;0
189 53   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
190 53   ECHO/40                   ?0        $97                  ?0                  	;0
191 54   ECHO/40                   ?0        145:'&w=267&h=400" alt="">
                                        <a href="movie.php?id=' ?0                  	;0
192 55   FETCH_DIM_R/81            $98=      16?6                 146:'id'            	;0
193 55   ECHO/40                   ?0        $98                  ?0                  	;0
194 56   NOP/0                     ?0        ?0                   ?0                  	;1
195 56   GOTO/253                  ?0        ?222                 ?147                	;0
196 58   FETCH_DIM_R/81            $99=      16?6                 148:'year'          	;0
197 58   JMPZ/43                   ?0        $99                  ?205                	;0	>>205
198 58   INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'intval'        	;1
199 58   FETCH_DIM_FUNC_ARG/93     $100=     16?6                 151:'year'          	;1
200 58   SEND_VAR_EX/66            ?80       $100                 ?1                  	;0
201 58   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
202 58   CONCAT/8                  #102=     $101                 152:' &nbsp; '      	;0
203 58   QM_ASSIGN/22              #103=     #102                 ?0                  	;0
204 58   JMP/42                    ?0        ?206                 ?0                  	;0	>>206
205 58   QM_ASSIGN/22              #103=     153:''               ?0                  	;0	<<197
206 58   ECHO/40                   ?0        #103                 ?0                  	;0	<<204
207 59   ECHO/40                   ?0        154:'<i class="icon ion-ios-star"></i>' ?0                  	;0
208 60   FETCH_DIM_R/81            $104=     16?9                 155:'rating'        	;0
209 60   JMPZ/43                   ?0        $104                 ?217                	;0	>>217
210 60   INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'number_format' 	;2
211 60   FETCH_DIM_FUNC_ARG/93     $105=     16?9                 158:'rating'        	;1
212 60   SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
213 60   SEND_VAL_EX/116           ?96       159:1                ?2                  	;0
214 60   DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
215 60   QM_ASSIGN/22              #107=     $106                 ?0                  	;0
216 60   JMP/42                    ?0        ?218                 ?0                  	;0	>>218
217 60   QM_ASSIGN/22              #107=     160:'N/A'            ?0                  	;0	<<209
218 60   ECHO/40                   ?0        #107                 ?0                  	;0	<<216
219 61   ECHO/40                   ?0        161:'</span>
                                    </div>
                                </div>
                            </div>
                        ' ?0                  	;0
220 63   NOP/0                     ?0        ?0                   ?0                  	;1
221 63   GOTO/253                  ?0        ?234                 ?162                	;0
222 65   ECHO/40                   ?0        163:'" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="movie.php?id=' ?0                  	;0
223 66   FETCH_DIM_R/81            $108=     16?6                 164:'id'            	;0
224 66   ECHO/40                   ?0        $108                 ?0                  	;0
225 67   ECHO/40                   ?0        165:'">'             ?0                  	;0
226 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'htmlspecialchars'	;1
227 68   FETCH_DIM_FUNC_ARG/93     $109=     16?6                 168:'stream_display_name'	;1
228 68   SEND_VAR_EX/66            ?80       $109                 ?1                  	;0
229 68   DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
230 68   ECHO/40                   ?0        $110                 ?0                  	;0
231 69   ECHO/40                   ?0        169:'</a></h3>
                                        <span class="card__rate">' ?0                  	;0
232 70   NOP/0                     ?0        ?0                   ?0                  	;1
233 70   GOTO/253                  ?0        ?196                 ?170                	;0
234 71   JMP/42                    ?0        ?163                 ?0                  	;0	>>163
235 71   FE_FREE/127               ?0        $84                  ?0                  	;0	<<162
236 74   ECHO/40                   ?0        171:'					</div>
				</div>
				<div class="tab-pane fade" id="series" role="tabpanel" aria-labelledby="series-tab">
					<div class="row">
                        ' ?0                  	;0
237 75   GOTO/253                  ?0        ?515                 ?172                	;0
238 77   FE_RESET_R/77             $111=     16?0                 ?245                	;0
239 77   FE_FETCH_R/78             ?0        $111                 16?10               	;245	>>245	<<244
240 78   ECHO/40                   ?0        173:'			<div class="item home__cover" data-bg="' ?0                  	;0
241 79   FETCH_DIM_R/81            $112=     16?10                174:'backdrop'      	;0
242 79   ECHO/40                   ?0        $112                 ?0                  	;0
243 80   ECHO/40                   ?0        175:'"></div>
            ' ?0                  	;0
244 81   JMP/42                    ?0        ?239                 ?0                  	;0	>>239
245 81   FE_FREE/127               ?0        $111                 ?0                  	;0	<<238
246 84   ECHO/40                   ?0        176:'		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title">POPULAR <b>NOW</b></h1>
					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>
				<div class="col-12">
					<div class="owl-carousel home__carousel">
                        ' ?0                  	;0
247 85   FE_RESET_R/77             $113=     16?0                 ?309                	;0
248 85   FE_FETCH_R/78             ?0        $113                 16?10               	;309	>>309	<<308
249 86   NOP/0                     ?0        ?0                   ?0                  	;1
250 86   GOTO/253                  ?0        ?251                 ?177                	;0
251 88   ECHO/40                   ?0        178:'						<div class="item">
							<div class="card card--big">
								<div class="card__cover">
									<img loading="lazy" src="resize.php?url=' ?0                  	;0
252 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'urlencode'     	;1
253 89   FETCH_DIM_FUNC_ARG/93     $114=     16?10                181:'cover'         	;1
254 89   SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
255 89   DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
256 89   ECHO/40                   ?0        $115                 ?0                  	;0
257 90   ECHO/40                   ?0        182:'&w=267&h=400" alt="">
                                    <a href="' ?0                  	;0
258 91   FETCH_DIM_R/81            $116=     16?10                183:'type'          	;0
259 91   ECHO/40                   ?0        $116                 ?0                  	;0
260 92   ECHO/40                   ?0        184:'.php?id='       ?0                  	;0
261 93   NOP/0                     ?0        ?0                   ?0                  	;1
262 93   GOTO/253                  ?0        ?298                 ?185                	;0
263 95   FETCH_DIM_R/81            $117=     16?10                186:'rating'        	;0
264 95   JMPZ/43                   ?0        $117                 ?272                	;0	>>272
265 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'number_format' 	;2
266 95   FETCH_DIM_FUNC_ARG/93     $118=     16?10                189:'rating'        	;1
267 95   SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
268 95   SEND_VAL_EX/116           ?96       190:1                ?2                  	;0
269 95   DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
270 95   QM_ASSIGN/22              #120=     $119                 ?0                  	;0
271 95   JMP/42                    ?0        ?273                 ?0                  	;0	>>273
272 95   QM_ASSIGN/22              #120=     191:'N/A'            ?0                  	;0	<<264
273 95   ECHO/40                   ?0        #120                 ?0                  	;0	<<271
274 96   ECHO/40                   ?0        192:'</span>
								</div>
							</div>
						</div>
                        ' ?0                  	;0
275 98   NOP/0                     ?0        ?0                   ?0                  	;1
276 98   GOTO/253                  ?0        ?308                 ?193                	;0
277 100  ECHO/40                   ?0        194:'">'             ?0                  	;0
278 101  INIT_FCALL_BY_NAME/59     ?0        ?0                   195:'htmlspecialchars'	;1
279 101  FETCH_DIM_FUNC_ARG/93     $121=     16?10                197:'title'         	;1
280 101  SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
281 101  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
282 101  ECHO/40                   ?0        $122                 ?0                  	;0
283 102  ECHO/40                   ?0        198:'</a></h3>
                                    <span class="card__rate">' ?0                  	;0
284 103  FETCH_DIM_R/81            $123=     16?10                199:'year'          	;0
285 103  JMPZ/43                   ?0        $123                 ?293                	;0	>>293
286 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'intval'        	;1
287 103  FETCH_DIM_FUNC_ARG/93     $124=     16?10                202:'year'          	;1
288 103  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
289 103  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
290 103  CONCAT/8                  #126=     $125                 203:' &nbsp; '      	;0
291 103  QM_ASSIGN/22              #127=     #126                 ?0                  	;0
292 103  JMP/42                    ?0        ?294                 ?0                  	;0	>>294
293 103  QM_ASSIGN/22              #127=     204:''               ?0                  	;0	<<285
294 103  ECHO/40                   ?0        #127                 ?0                  	;0	<<292
295 104  ECHO/40                   ?0        205:'<i class="icon ion-ios-star"></i>' ?0                  	;0
296 105  NOP/0                     ?0        ?0                   ?0                  	;1
297 105  GOTO/253                  ?0        ?263                 ?206                	;0
298 107  FETCH_DIM_R/81            $128=     16?10                207:'id'            	;0
299 107  ECHO/40                   ?0        $128                 ?0                  	;0
300 108  ECHO/40                   ?0        208:'" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
								</div>
								<div class="card__content">
                                    <h3 class="card__title"><a href="' ?0                  	;0
301 109  FETCH_DIM_R/81            $129=     16?10                209:'type'          	;0
302 109  ECHO/40                   ?0        $129                 ?0                  	;0
303 110  ECHO/40                   ?0        210:'.php?id='       ?0                  	;0
304 111  FETCH_DIM_R/81            $130=     16?10                211:'id'            	;0
305 111  ECHO/40                   ?0        $130                 ?0                  	;0
306 112  NOP/0                     ?0        ?0                   ?0                  	;1
307 112  GOTO/253                  ?0        ?277                 ?212                	;0
308 113  JMP/42                    ?0        ?248                 ?0                  	;0	>>248
309 113  FE_FREE/127               ?0        $113                 ?0                  	;0	<<247
310 116  GOTO/253                  ?0        ?23                  ?213                	;0
311 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'count'         	;1
312 118  FETCH_DIM_FUNC_ARG/93     $131=     16?4                 216:'movies'        	;1
313 118  SEND_VAR_EX/66            ?80       $131                 ?1                  	;0
314 118  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
315 118  IS_SMALLER/19             #133=     217:0                $132                	;0
316 118  JMPZ_EX/46                #133=     #133                 ?323                	;0	>>323
317 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'count'         	;1
318 118  FETCH_DIM_FUNC_ARG/93     $134=     16?2                 220:'vod_ids'       	;1
319 118  SEND_VAR_EX/66            ?80       $134                 ?1                  	;0
320 118  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
321 118  IS_SMALLER/19             #136=     221:0                $135                	;0
322 118  BOOL/52                   #133=     #136                 ?0                  	;0
323 118  BOOL_NOT/13               #137=     #133                 ?0                  	;0	<<316
324 118  JMPZ/43                   ?0        #137                 ?326                	;0	>>326
325 119  GOTO/253                  ?0        ?467                 ?222                	;0
326 121  FETCH_STATIC_PROP_R/173   $138=     223:'rSettings'      224:'XUI'           	;0	<<324
327 121  FETCH_DIM_R/81            $139=     $138                 226:'player_hide_incompatible'	;0
328 121  JMPZ/43                   ?0        $139                 ?330                	;0	>>330
329 122  GOTO/253                  ?0        ?86                  ?227                	;0
330 124  FETCH_CONSTANT/99         #140=     ?0                   228:'PLATFORM'      	;16	<<328
331 124  IS_EQUAL/17               #141=     #140                 231:'xui'           	;0
332 124  JMPZ/43                   ?0        #141                 ?334                	;0	>>334
333 125  GOTO/253                  ?0        ?61                  ?232                	;0
334 127  INIT_METHOD_CALL/112      ?0        16?3                 233:'query'         	;1	<<332
335 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'implode'       	;2
336 127  SEND_VAL_EX/116           ?80       237:','              ?1                  	;0
337 127  FETCH_DIM_FUNC_ARG/93     $142=     16?4                 238:'movies'        	;2
338 127  SEND_VAR_EX/66            ?96       $142                 ?2                  	;0
339 127  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
340 127  CONCAT/8                  #144=     239:'SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_propeties` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `id` IN (' $143                	;0
341 127  CONCAT/8                  #145=     #144                 240:') AND `id` IN ('	;0
342 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'implode'       	;2
343 127  SEND_VAL_EX/116           ?80       243:','              ?1                  	;0
344 127  FETCH_DIM_FUNC_ARG/93     $146=     16?2                 244:'vod_ids'       	;2
345 127  SEND_VAR_EX/66            ?96       $146                 ?2                  	;0
346 127  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
347 127  CONCAT/8                  #148=     #145                 $147                	;0
348 127  CONCAT/8                  #149=     #148                 245:') ORDER BY FIELD(id, '	;0
349 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'implode'       	;2
350 127  SEND_VAL_EX/116           ?80       248:','              ?1                  	;0
351 127  FETCH_DIM_FUNC_ARG/93     $150=     16?4                 249:'movies'        	;2
352 127  SEND_VAR_EX/66            ?96       $150                 ?2                  	;0
353 127  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
354 127  CONCAT/8                  #152=     #149                 $151                	;0
355 127  CONCAT/8                  #153=     #152                 250:') ASC LIMIT 50;'	;0
356 127  SEND_VAL_EX/116           ?80       #153                 ?1                  	;0
357 127  DO_FCALL/60               ?140      ?0                   ?0                  	;0
358 128  GOTO/253                  ?0        ?85                  ?251                	;0
359 129  GOTO/253                  ?0        ?61                  ?252                	;0
360 131  INIT_STATIC_METHOD_CALL/113 ?0        253:'XUI'            255:'AD7C990925F39C05'	;8
361 131  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
362 131  SEND_VAL_EX/116           ?96       257:NULL             ?2                  	;0
363 131  SEND_VAL_EX/116           ?112      258:NULL             ?3                  	;0
364 131  SEND_VAL_EX/116           ?128      259:'added'          ?4                  	;0
365 131  SEND_VAR_EX/66            ?144      16?12                ?5                  	;0
366 131  SEND_VAL_EX/116           ?160      260:NULL             ?6                  	;0
367 131  SEND_VAL_EX/116           ?176      261:0                ?7                  	;0
368 131  SEND_VAL_EX/116           ?192      262:20               ?8                  	;0
369 131  DO_FCALL/60               $155=     ?0                   ?0                  	;0
370 131  ASSIGN/38                 ?142      16?11                $155                	;0
371 132  ASSIGN/38                 ?143      16?13                263:'Home'          	;0
372 133  INCLUDE_OR_EVAL/73        ?144      264:'header.php'     ?0                  	;2
373 134  INIT_FCALL_BY_NAME/59     ?0        ?0                   265:'count'         	;1
374 134  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
375 134  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
376 134  IS_SMALLER/19             #160=     267:0                $159                	;0
377 134  BOOL_NOT/13               #161=     #160                 ?0                  	;0
378 134  JMPZ/43                   ?0        #161                 ?380                	;0	>>380
379 135  GOTO/253                  ?0        ?24                  ?268                	;0
380 137  ECHO/40                   ?0        269:'	<section class="home">
        <div class="owl-carousel home__bg">
            ' ?0                  	;0	<<378
381 138  GOTO/253                  ?0        ?238                 ?270                	;0
382 140  EXIT/79                   ?0        ?0                   ?0                  	;0
383 143  ASSIGN/38                 ?148      16?0                 271:array (
)       	;0
384 144  INIT_STATIC_METHOD_CALL/113 ?0        272:'XUI'            274:'unserialize'   	;1
385 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'file_get_contents'	;1
386 144  FETCH_CONSTANT/99         #163=     ?0                   278:'CONTENT_PATH'  	;16
387 144  CONCAT/8                  #164=     #163                 281:'tmdb_popular'  	;0
388 144  SEND_VAL_EX/116           ?80       #164                 ?1                  	;0
389 144  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
390 144  SEND_VAR_NO_REF_EX/50     ?80       $165                 ?1                  	;0
391 144  DO_FCALL/60               $166=     ?0                   ?0                  	;0
392 144  ASSIGN/38                 ?153      16?4                 $166                	;0
393 145  GOTO/253                  ?0        ?311                 ?282                	;0
394 147  INIT_METHOD_CALL/112      ?0        16?3                 283:'query'         	;1
395 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'implode'       	;2
396 147  SEND_VAL_EX/116           ?80       287:','              ?1                  	;0
397 147  FETCH_DIM_FUNC_ARG/93     $168=     16?4                 288:'movies'        	;2
398 147  SEND_VAR_EX/66            ?96       $168                 ?2                  	;0
399 147  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
400 147  CONCAT/8                  #170=     289:'SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_properties` FROM `streams` WHERE `id` IN (' $169                	;0
401 147  CONCAT/8                  #171=     #170                 290:') AND `id` IN ('	;0
402 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   291:'implode'       	;2
403 147  SEND_VAL_EX/116           ?80       293:','              ?1                  	;0
404 147  FETCH_DIM_FUNC_ARG/93     $172=     16?2                 294:'vod_ids'       	;2
405 147  SEND_VAR_EX/66            ?96       $172                 ?2                  	;0
406 147  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
407 147  CONCAT/8                  #174=     #171                 $173                	;0
408 147  CONCAT/8                  #175=     #174                 295:') AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 ORDER BY FIELD(id, '	;0
409 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'implode'       	;2
410 147  SEND_VAL_EX/116           ?80       298:','              ?1                  	;0
411 147  FETCH_DIM_FUNC_ARG/93     $176=     16?4                 299:'movies'        	;2
412 147  SEND_VAR_EX/66            ?96       $176                 ?2                  	;0
413 147  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
414 147  CONCAT/8                  #178=     #175                 $177                	;0
415 147  CONCAT/8                  #179=     #178                 300:') ASC LIMIT 50;'	;0
416 147  SEND_VAL_EX/116           ?80       #179                 ?1                  	;0
417 147  DO_FCALL/60               ?166      ?0                   ?0                  	;0
418 149  INIT_METHOD_CALL/112      ?0        16?3                 301:'get_rows'      	;0
419 149  DO_FCALL/60               $181=     ?0                   ?0                  	;0
420 149  ASSIGN/38                 ?168      16?5                 $181                	;0
421 150  FE_RESET_R/77             $183=     16?5                 ?465                	;0
422 150  FE_FETCH_R/78             ?0        $183                 16?6                	;465	>>465	<<464
423 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'json_decode'   	;2
424 151  FETCH_CONSTANT/99         #184=     ?0                   305:'PLATFORM'      	;16
425 151  IS_EQUAL/17               #185=     #184                 308:'xui'           	;0
426 151  JMPZ/43                   ?0        #185                 ?430                	;0	>>430
427 151  FETCH_DIM_R/81            $186=     16?6                 309:'movie_properties'	;0
428 151  QM_ASSIGN/22              #187=     $186                 ?0                  	;0
429 151  JMP/42                    ?0        ?432                 ?0                  	;0	>>432
430 151  FETCH_DIM_R/81            $188=     16?6                 310:'movie_propeties'	;0	<<426
431 151  QM_ASSIGN/22              #187=     $188                 ?0                  	;0
432 151  SEND_VAL_EX/116           ?80       #187                 ?1                  	;0	<<429
433 151  SEND_VAL_EX/116           ?96       311:true             ?2                  	;0
434 151  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
435 151  ASSIGN/38                 ?176      16?9                 $189                	;0
436 152  INIT_ARRAY/71             #192=     312:'movie'          313:'type'          	;30
437 152  FETCH_DIM_R/81            $193=     16?6                 314:'id'            	;0
438 152  ADD_ARRAY_ELEMENT/72      #192=     $193                 315:'id'            	;0
439 152  FETCH_DIM_R/81            $194=     16?6                 316:'stream_display_name'	;0
440 152  ADD_ARRAY_ELEMENT/72      #192=     $194                 317:'title'         	;0
441 152  FETCH_DIM_R/81            $195=     16?6                 318:'year'          	;0
442 152  JMP_SET/152               #196=     $195                 ?444                	;0
443 152  QM_ASSIGN/22              #196=     319:NULL             ?0                  	;0
444 152  ADD_ARRAY_ELEMENT/72      #192=     #196                 320:'year'          	;0
445 152  FETCH_DIM_R/81            $197=     16?6                 321:'rating'        	;0
446 152  ADD_ARRAY_ELEMENT/72      #192=     $197                 322:'rating'        	;0
447 152  INIT_STATIC_METHOD_CALL/113 ?0        323:'XUI'            325:'fca722697178454B'	;1
448 152  FETCH_DIM_FUNC_ARG/93     $198=     16?9                 327:'movie_image'   	;1
449 152  SEND_VAR_EX/66            ?80       $198                 ?1                  	;0
450 152  DO_FCALL/60               $199=     ?0                   ?0                  	;0
451 152  JMP_SET/152               #200=     $199                 ?453                	;0
452 152  QM_ASSIGN/22              #200=     328:''               ?0                  	;0
453 152  ADD_ARRAY_ELEMENT/72      #192=     #200                 329:'cover'         	;0
454 152  INIT_STATIC_METHOD_CALL/113 ?0        330:'XUI'            332:'fCA722697178454B'	;1
455 152  FETCH_DIM_FUNC_ARG/93     $201=     16?9                 334:'backdrop_path' 	;1
456 152  FETCH_DIM_FUNC_ARG/93     $202=     $201                 335:0               	;1
457 152  SEND_VAR_EX/66            ?80       $202                 ?1                  	;0
458 152  DO_FCALL/60               $203=     ?0                   ?0                  	;0
459 152  JMP_SET/152               #204=     $203                 ?461                	;0
460 152  QM_ASSIGN/22              #204=     336:''               ?0                  	;0
461 152  ADD_ARRAY_ELEMENT/72      #192=     #204                 337:'backdrop'      	;0
462 152  ASSIGN_DIM/147            ?177      16?0                 ?2670194944         	;0
463 152  OP_DATA/137               ?0        #192                 ?0                  	;0
464 153  JMP/42                    ?0        ?422                 ?0                  	;0	>>422
465 153  FE_FREE/127               ?0        $183                 ?0                  	;0	<<421
466 156  GOTO/253                  ?0        ?467                 ?338                	;0
467 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'count'         	;1
468 159  FETCH_DIM_FUNC_ARG/93     $205=     16?4                 341:'series'        	;1
469 159  SEND_VAR_EX/66            ?80       $205                 ?1                  	;0
470 159  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
471 159  IS_SMALLER/19             #207=     342:0                $206                	;0
472 159  JMPZ_EX/46                #207=     #207                 ?479                	;0	>>479
473 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   343:'count'         	;1
474 159  FETCH_DIM_FUNC_ARG/93     $208=     16?2                 345:'series_ids'    	;1
475 159  SEND_VAR_EX/66            ?80       $208                 ?1                  	;0
476 159  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
477 159  IS_SMALLER/19             #210=     346:0                $209                	;0
478 159  BOOL/52                   #207=     #210                 ?0                  	;0
479 159  BOOL_NOT/13               #211=     #207                 ?0                  	;0	<<472
480 159  JMPZ/43                   ?0        #211                 ?482                	;0	>>482
481 160  GOTO/253                  ?0        ?1                   ?347                	;0
482 162  FETCH_STATIC_PROP_R/173   $212=     348:'rSettings'      349:'XUI'           	;0	<<480
483 162  FETCH_DIM_R/81            $213=     $212                 351:'player_hide_incompatible'	;0
484 162  JMPZ/43                   ?0        $213                 ?486                	;0	>>486
485 163  GOTO/253                  ?0        ?87                  ?352                	;0
486 165  FETCH_CONSTANT/99         #214=     ?0                   353:'PLATFORM'      	;16	<<484
487 165  IS_EQUAL/17               #215=     #214                 356:'xui'           	;0
488 165  JMPZ/43                   ?0        #215                 ?490                	;0	>>490
489 166  GOTO/253                  ?0        ?35                  ?357                	;0
490 168  INIT_METHOD_CALL/112      ?0        16?3                 358:'query'         	;1	<<488
491 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   360:'implode'       	;2
492 168  SEND_VAL_EX/116           ?80       362:','              ?1                  	;0
493 168  FETCH_DIM_FUNC_ARG/93     $216=     16?4                 363:'series'        	;2
494 168  SEND_VAR_EX/66            ?96       $216                 ?2                  	;0
495 168  DO_FCALL_BY_NAME/131      $217=     ?0                   ?0                  	;0
496 168  CONCAT/8                  #218=     364:'SELECT `id`, `title`, `releaseDate`, `rating`, `cover`, `backdrop_path` FROM `series` WHERE `id` IN (' $217                	;0
497 168  CONCAT/8                  #219=     #218                 365:') AND `id` IN ('	;0
498 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   366:'implode'       	;2
499 168  SEND_VAL_EX/116           ?80       368:','              ?1                  	;0
500 168  FETCH_DIM_FUNC_ARG/93     $220=     16?2                 369:'series_ids'    	;2
501 168  SEND_VAR_EX/66            ?96       $220                 ?2                  	;0
502 168  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
503 168  CONCAT/8                  #222=     #219                 $221                	;0
504 168  CONCAT/8                  #223=     #222                 370:') ORDER BY FIELD(id, '	;0
505 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'implode'       	;2
506 168  SEND_VAL_EX/116           ?80       373:','              ?1                  	;0
507 168  FETCH_DIM_FUNC_ARG/93     $224=     16?4                 374:'series'        	;2
508 168  SEND_VAR_EX/66            ?96       $224                 ?2                  	;0
509 168  DO_FCALL_BY_NAME/131      $225=     ?0                   ?0                  	;0
510 168  CONCAT/8                  #226=     #223                 $225                	;0
511 168  CONCAT/8                  #227=     #226                 375:') ASC LIMIT 50;'	;0
512 168  SEND_VAL_EX/116           ?80       #227                 ?1                  	;0
513 168  DO_FCALL/60               ?214      ?0                   ?0                  	;0
514 169  GOTO/253                  ?0        ?34                  ?376                	;0
515 171  FETCH_DIM_R/81            $229=     16?11                377:'streams'       	;0
516 171  FE_RESET_R/77             $230=     $229                 ?591                	;0
517 171  FE_FETCH_R/78             #231=     $230                 16?6                	;591	>>591	<<590
518 171  ASSIGN/38                 ?218      16?8                 #231                	;0
519 172  NOP/0                     ?0        ?0                   ?0                  	;1
520 172  GOTO/253                  ?0        ?558                 ?378                	;0
521 174  FETCH_DIM_R/81            $233=     16?6                 379:'id'            	;0
522 174  ECHO/40                   ?0        $233                 ?0                  	;0
523 175  ECHO/40                   ?0        380:'">'             ?0                  	;0
524 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   381:'htmlspecialchars'	;1
525 176  FETCH_DIM_FUNC_ARG/93     $234=     16?6                 383:'title'         	;1
526 176  SEND_VAR_EX/66            ?80       $234                 ?1                  	;0
527 176  DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
528 176  ECHO/40                   ?0        $235                 ?0                  	;0
529 177  ECHO/40                   ?0        384:'</a></h3>
                                        <span class="card__rate">' ?0                  	;0
530 178  FETCH_DIM_R/81            $236=     16?6                 385:'year'          	;0
531 178  JMPZ/43                   ?0        $236                 ?539                	;0	>>539
532 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   386:'intval'        	;1
533 178  FETCH_DIM_FUNC_ARG/93     $237=     16?6                 388:'year'          	;1
534 178  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
535 178  DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
536 178  CONCAT/8                  #239=     $238                 389:' &nbsp; '      	;0
537 178  QM_ASSIGN/22              #240=     #239                 ?0                  	;0
538 178  JMP/42                    ?0        ?555                 ?0                  	;0	>>555
539 178  FETCH_DIM_R/81            $241=     16?6                 390:'releaseDate'   	;0	<<531
540 178  JMPZ/43                   ?0        $241                 ?553                	;0	>>553
541 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   391:'intval'        	;1
542 178  INIT_FCALL_BY_NAME/59     ?0        ?0                   393:'substr'        	;3
543 178  FETCH_DIM_FUNC_ARG/93     $242=     16?6                 395:'releaseDate'   	;1
544 178  SEND_VAR_EX/66            ?80       $242                 ?1                  	;0
545 178  SEND_VAL_EX/116           ?96       396:0                ?2                  	;0
546 178  SEND_VAL_EX/116           ?112      397:4                ?3                  	;0
547 178  DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
548 178  SEND_VAR_NO_REF_EX/50     ?80       $243                 ?1                  	;0
549 178  DO_FCALL_BY_NAME/131      $244=     ?0                   ?0                  	;0
550 178  CONCAT/8                  #245=     $244                 398:' &nbsp; '      	;0
551 178  QM_ASSIGN/22              #246=     #245                 ?0                  	;0
552 178  JMP/42                    ?0        ?554                 ?0                  	;0	>>554
553 178  QM_ASSIGN/22              #246=     399:''               ?0                  	;0	<<540
554 178  QM_ASSIGN/22              #240=     #246                 ?0                  	;0	<<552
555 178  ECHO/40                   ?0        #240                 ?0                  	;0	<<538
556 179  NOP/0                     ?0        ?0                   ?0                  	;1
557 179  GOTO/253                  ?0        ?575                 ?400                	;0
558 181  ECHO/40                   ?0        401:'                            <div class="col-6 col-sm-4 col-lg-3 col-xl-3">
                                <div class="card">
                                    <div class="card__cover">
                                        <img loading="lazy" src="resize.php?url=' ?0                  	;0
559 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'urlencode'     	;1
560 182  INIT_STATIC_METHOD_CALL/113 ?0        404:'XUI'            406:'Fca722697178454B'	;1
561 182  FETCH_DIM_FUNC_ARG/93     $247=     16?6                 408:'cover'         	;1
562 182  SEND_VAR_EX/66            ?80       $247                 ?1                  	;0
563 182  DO_FCALL/60               $248=     ?0                   ?0                  	;0
564 182  JMP_SET/152               #249=     $248                 ?566                	;0
565 182  QM_ASSIGN/22              #249=     409:''               ?0                  	;0
566 182  SEND_VAL_EX/116           ?80       #249                 ?1                  	;0
567 182  DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
568 182  ECHO/40                   ?0        $250                 ?0                  	;0
569 183  ECHO/40                   ?0        410:'&w=267&h=400" alt="">
                                        <a href="episodes.php?id=' ?0                  	;0
570 184  FETCH_DIM_R/81            $251=     16?6                 411:'id'            	;0
571 184  ECHO/40                   ?0        $251                 ?0                  	;0
572 185  ECHO/40                   ?0        412:'" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="episodes.php?id=' ?0                  	;0
573 186  NOP/0                     ?0        ?0                   ?0                  	;1
574 186  GOTO/253                  ?0        ?521                 ?413                	;0
575 188  ECHO/40                   ?0        414:'<i class="icon ion-ios-star"></i>' ?0                  	;0
576 189  FETCH_DIM_R/81            $252=     16?6                 415:'rating'        	;0
577 189  JMPZ/43                   ?0        $252                 ?585                	;0	>>585
578 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'number_format' 	;2
579 189  FETCH_DIM_FUNC_ARG/93     $253=     16?6                 418:'rating'        	;1
580 189  SEND_VAR_EX/66            ?80       $253                 ?1                  	;0
581 189  SEND_VAL_EX/116           ?96       419:0                ?2                  	;0
582 189  DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
583 189  QM_ASSIGN/22              #255=     $254                 ?0                  	;0
584 189  JMP/42                    ?0        ?586                 ?0                  	;0	>>586
585 189  QM_ASSIGN/22              #255=     420:'N/A'            ?0                  	;0	<<577
586 189  ECHO/40                   ?0        #255                 ?0                  	;0	<<584
587 190  ECHO/40                   ?0        421:'</span>
                                    </div>
                                </div>
                            </div>
                        ' ?0                  	;0
588 192  NOP/0                     ?0        ?0                   ?0                  	;1
589 192  GOTO/253                  ?0        ?590                 ?422                	;0
590 193  JMP/42                    ?0        ?517                 ?0                  	;0	>>517
591 193  FE_FREE/127               ?0        $230                 ?0                  	;0	<<516
592 196  ECHO/40                   ?0        423:'                    </div>
				</div>
			</div>
		</div>
	</section>
' ?0                  	;0
593 197  GOTO/253                  ?0        ?629                 ?424                	;0
594 199  INCLUDE_OR_EVAL/73        ?242      425:'functions.php'  ?0                  	;2	<<0
595 200  INIT_STATIC_METHOD_CALL/113 ?0        426:'XUI'            428:'verifyLicense' 	;0
596 200  DO_FCALL/60               ?243      ?0                   ?0                  	;0
597 201  FETCH_STATIC_PROP_IS/176  $258=     430:'rRequest'       431:'XUI'           	;0
598 201  ISSET_ISEMPTY_DIM_OBJ/115 #259=     $258                 433:'search'        	;33554432
599 201  JMPZ_EX/46                #259=     #259                 ?603                	;0	>>603
600 201  FETCH_STATIC_PROP_IS/176  $260=     434:'rRequest'       435:'XUI'           	;0
601 201  ISSET_ISEMPTY_DIM_OBJ/115 #261=     $260                 437:'type'          	;33554432
602 201  BOOL/52                   #259=     #261                 ?0                  	;0
603 201  BOOL_NOT/13               #262=     #259                 ?0                  	;0	<<599
604 201  JMPZ/43                   ?0        #262                 ?606                	;0	>>606
605 202  GOTO/253                  ?0        ?383                 ?438                	;0
606 204  INIT_FCALL_BY_NAME/59     ?0        ?0                   439:'in_array'      	;2	<<604
607 204  FETCH_STATIC_PROP_FUNC_ARG/177 $263=     441:'rRequest'       442:'XUI'           	;1
608 204  FETCH_DIM_FUNC_ARG/93     $264=     $263                 444:'type'          	;1
609 204  SEND_VAR_EX/66            ?80       $264                 ?1                  	;0
610 204  SEND_VAL_EX/116           ?96       445:array (
  0 => 'live',
  1 => 'movies',
  2 => 'series',
) ?2                  	;0
611 204  DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
612 204  BOOL_NOT/13               #266=     $265                 ?0                  	;0
613 204  JMPZ/43                   ?0        #266                 ?615                	;0	>>615
614 205  GOTO/253                  ?0        ?383                 ?446                	;0
615 207  INIT_FCALL_BY_NAME/59     ?0        ?0                   447:'header'        	;1	<<613
616 207  FETCH_STATIC_PROP_R/173   $267=     449:'rRequest'       450:'XUI'           	;0
617 207  FETCH_DIM_R/81            $268=     $267                 452:'type'          	;0
618 207  CONCAT/8                  #269=     453:'Location: '     $268                	;0
619 207  CONCAT/8                  #270=     #269                 454:'.php?search='  	;0
620 207  INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'urlencode'     	;1
621 207  FETCH_STATIC_PROP_FUNC_ARG/177 $271=     457:'rRequest'       458:'XUI'           	;1
622 207  FETCH_DIM_FUNC_ARG/93     $272=     $271                 460:'search'        	;1
623 207  SEND_VAR_EX/66            ?80       $272                 ?1                  	;0
624 207  DO_FCALL_BY_NAME/131      $273=     ?0                   ?0                  	;0
625 207  CONCAT/8                  #274=     #270                 $273                	;0
626 207  SEND_VAL_EX/116           ?80       #274                 ?1                  	;0
627 207  DO_FCALL_BY_NAME/131      ?261      ?0                   ?0                  	;0
628 208  GOTO/253                  ?0        ?382                 ?461                	;0
629 210  INCLUDE_OR_EVAL/73        ?262      462:'footer.php'     ?0                  	;8
630 211  NOP/0                     ?0        463:1                ?0                  	;4294967295
*/

?>