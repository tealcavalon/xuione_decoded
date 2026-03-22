<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?444                 ?0                  	;0	>>444
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'count'           	;1
2   5    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
3   5    DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
4   5    SUB/2                     #24=      $23                  3:1                 	;0
5   5    FETCH_DIM_R/81            $25=      16?0                 #24                 	;0
6   5    IS_SMALLER/19             #26=      $25                  16?1                	;0
7   5    BOOL_NOT/13               #27=      #26                  ?0                  	;0
8   5    JMPZ/43                   ?0        #27                  ?10                 	;0	>>10
9   6    GOTO/253                  ?0        ?251                 ?4                  	;0
10  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'count'           	;1	<<8
11  8    SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
12  8    DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
13  8    IS_SMALLER/19             #29=      7:1                  $28                 	;0
14  8    BOOL_NOT/13               #30=      #29                  ?0                  	;0
15  8    JMPZ/43                   ?0        #30                  ?17                 	;0	>>17
16  9    GOTO/253                  ?0        ?18                  ?8                  	;0
17  11   ECHO/40                   ?0        9:'<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>' ?0                  	;0	<<15
18  13   IS_EQUAL/17               #31=      16?2                 16?1                	;0
19  13   JMPZ/43                   ?0        #31                  ?22                 	;0	>>22
20  13   QM_ASSIGN/22              #32=      10:' paginator__item--active' ?0                  	;0
21  13   JMP/42                    ?0        ?23                  ?0                  	;0	>>23
22  13   QM_ASSIGN/22              #32=      11:''                ?0                  	;0	<<19
23  13   CONCAT/8                  #33=      12:'<li class="paginator__item' #32                 	;0	<<21
24  13   CONCAT/8                  #34=      #33                  13:'"><a href="epg_view?search='	;0
25  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'urlencode'      	;1
26  13   FETCH_STATIC_PROP_FUNC_ARG/177 $35=      16:'rRequest'        17:'XUI'            	;1
27  13   FETCH_DIM_FUNC_ARG/93     $36=      $35                  19:'search'         	;1
28  13   SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
29  13   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
30  13   JMP_SET/152               #38=      $37                  ?32                 	;0
31  13   QM_ASSIGN/22              #38=      20:''                ?0                  	;0
32  13   CONCAT/8                  #39=      #34                  #38                 	;0
33  13   CONCAT/8                  #40=      #39                  21:'&category='     	;0
34  13   FETCH_STATIC_PROP_R/173   $41=      22:'rRequest'        23:'XUI'            	;0
35  13   FETCH_DIM_R/81            $42=      $41                  25:'category'       	;0
36  13   JMPZ/43                   ?0        $42                  ?44                 	;0	>>44
37  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'intval'         	;1
38  13   FETCH_STATIC_PROP_FUNC_ARG/177 $43=      28:'rRequest'        29:'XUI'            	;1
39  13   FETCH_DIM_FUNC_ARG/93     $44=      $43                  31:'category'       	;1
40  13   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
41  13   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
42  13   QM_ASSIGN/22              #46=      $45                  ?0                  	;0
43  13   JMP/42                    ?0        ?45                  ?0                  	;0	>>45
44  13   QM_ASSIGN/22              #46=      32:''                ?0                  	;0	<<36
45  13   CONCAT/8                  #47=      #40                  #46                 	;0	<<43
46  13   CONCAT/8                  #48=      #47                  33:'&sort='         	;0
47  13   FETCH_STATIC_PROP_R/173   $49=      34:'rRequest'        35:'XUI'            	;0
48  13   FETCH_DIM_R/81            $50=      $49                  37:'sort'           	;0
49  13   JMPZ/43                   ?0        $50                  ?57                 	;0	>>57
50  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'urlencode'      	;1
51  13   FETCH_STATIC_PROP_FUNC_ARG/177 $51=      40:'rRequest'        41:'XUI'            	;1
52  13   FETCH_DIM_FUNC_ARG/93     $52=      $51                  43:'sort'           	;1
53  13   SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
54  13   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
55  13   QM_ASSIGN/22              #54=      $53                  ?0                  	;0
56  13   JMP/42                    ?0        ?58                  ?0                  	;0	>>58
57  13   QM_ASSIGN/22              #54=      44:''                ?0                  	;0	<<49
58  13   CONCAT/8                  #55=      #48                  #54                 	;0	<<56
59  13   CONCAT/8                  #56=      #55                  45:'&entries='      	;0
60  13   FETCH_STATIC_PROP_R/173   $57=      46:'rRequest'        47:'XUI'            	;0
61  13   FETCH_DIM_R/81            $58=      $57                  49:'entries'        	;0
62  13   JMPZ/43                   ?0        $58                  ?70                 	;0	>>70
63  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'intval'         	;1
64  13   FETCH_STATIC_PROP_FUNC_ARG/177 $59=      52:'rRequest'        53:'XUI'            	;1
65  13   FETCH_DIM_FUNC_ARG/93     $60=      $59                  55:'entries'        	;1
66  13   SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
67  13   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
68  13   QM_ASSIGN/22              #62=      $61                  ?0                  	;0
69  13   JMP/42                    ?0        ?71                  ?0                  	;0	>>71
70  13   QM_ASSIGN/22              #62=      56:''                ?0                  	;0	<<62
71  13   CONCAT/8                  #63=      #56                  #62                 	;0	<<69
72  13   CONCAT/8                  #64=      #63                  57:'&page='         	;0
73  13   CONCAT/8                  #65=      #64                  16?1                	;0
74  13   CONCAT/8                  #66=      #65                  58:'">'             	;0
75  13   CONCAT/8                  #67=      #66                  16?1                	;0
76  13   CONCAT/8                  #68=      #67                  59:'</a></li>'      	;0
77  13   ECHO/40                   ?0        #68                  ?0                  	;0
78  14   GOTO/253                  ?0        ?251                 ?60                 	;0
79  17   ECHO/40                   ?0        61:'				<div class="listings-grid-container">
					<a href="#" class="listings-direction-link left day-nav-arrow js-day-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>
					<a href="#" class="listings-direction-link right day-nav-arrow js-day-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>
					<div class="listings-day-slider-wrapper">
						<div class="listings-day-slider js-listings-day-slider">
							<div class="js-listings-day-nav-inner"></div>
						</div>
					</div>
					<div class="js-billboard-fix-point"></div>
					<div class="listings-grid-inner">
						<div class="time-nav-bar cf js-time-nav-bar">
							<div class="listings-mobile-nav">
								<a class="listings-now-btn js-now-btn" href="#">NOW</a>
							</div>
							<div class="listings-times-wrapper">
								<a href="#" class="listings-direction-link left js-time-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir text-white"></span></a>
								<a href="#" class="listings-direction-link right js-time-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir text-white"></span></a>
								<div class="times-slider js-times-slider"></div>
							</div>
							<div class="listings-loader js-listings-loader"><span class="isvg isvg-loader animate-spin"></span></div>
						</div>
						<div class="listings-wrapper cf js-listings-wrapper">
							<div class="listings-timeline js-listings-timeline"></div>
							<div class="js-listings-container"></div>
						</div>
					</div>
					' ?0                  	;0
80  18   IS_SMALLER/19             #69=      62:1                 16?1                	;0
81  18   BOOL_NOT/13               #70=      #69                  ?0                  	;0
82  18   JMPZ/43                   ?0        #70                  ?84                 	;0	>>84
83  19   GOTO/253                  ?0        ?508                 ?63                 	;0
84  21   ECHO/40                   ?0        64:'					<ul class="paginator">
						' ?0                  	;0	<<82
85  22   IS_SMALLER/19             #71=      65:1                 16?2                	;0
86  22   BOOL_NOT/13               #72=      #71                  ?0                  	;0
87  22   JMPZ/43                   ?0        #72                  ?89                 	;0	>>89
88  23   GOTO/253                  ?0        ?578                 ?66                 	;0
89  25   GOTO/253                  ?0        ?526                 ?67                 	;0	<<87
90  27   BOOL_NOT/13               #73=      16?3                 ?0                  	;0
91  27   JMPZ/43                   ?0        #73                  ?93                 	;0	>>93
92  28   GOTO/253                  ?0        ?96                  ?68                 	;0
93  30   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'header'         	;1	<<91
94  30   SEND_VAL_EX/116           ?80       71:'Location: dashboard' ?1                  	;0
95  30   DO_FCALL_BY_NAME/131      ?51       ?0                   ?0                  	;0
96  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'intval'         	;1
97  32   FETCH_STATIC_PROP_FUNC_ARG/177 $75=      74:'rRequest'        75:'XUI'            	;1
98  32   FETCH_DIM_FUNC_ARG/93     $76=      $75                  77:'page'           	;1
99  32   SEND_VAR_EX/66            ?80       $76                  ?1                  	;0
100 32   DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
101 32   IS_SMALLER/19             #78=      78:0                 $77                 	;0
102 32   JMPZ/43                   ?0        #78                  ?110                	;0	>>110
103 32   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'intval'         	;1
104 32   FETCH_STATIC_PROP_FUNC_ARG/177 $79=      81:'rRequest'        82:'XUI'            	;1
105 32   FETCH_DIM_FUNC_ARG/93     $80=      $79                  84:'page'           	;1
106 32   SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
107 32   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
108 32   QM_ASSIGN/22              #82=      $81                  ?0                  	;0
109 32   JMP/42                    ?0        ?111                 ?0                  	;0	>>111
110 32   QM_ASSIGN/22              #82=      85:1                 ?0                  	;0	<<102
111 32   ASSIGN/38                 ?60       16?2                 #82                 	;0	<<109
112 33   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'intval'         	;1
113 33   FETCH_STATIC_PROP_FUNC_ARG/177 $84=      88:'rRequest'        89:'XUI'            	;1
114 33   FETCH_DIM_FUNC_ARG/93     $85=      $84                  91:'entries'        	;1
115 33   SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
116 33   DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
117 33   IS_SMALLER/19             #87=      92:0                 $86                 	;0
118 33   JMPZ/43                   ?0        #87                  ?126                	;0	>>126
119 33   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'intval'         	;1
120 33   FETCH_STATIC_PROP_FUNC_ARG/177 $88=      95:'rRequest'        96:'XUI'            	;1
121 33   FETCH_DIM_FUNC_ARG/93     $89=      $88                  98:'entries'        	;1
122 33   SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
123 33   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
124 33   QM_ASSIGN/22              #91=      $90                  ?0                  	;0
125 33   JMP/42                    ?0        ?129                 ?0                  	;0	>>129
126 33   FETCH_STATIC_PROP_R/173   $92=      99:'rSettings'       100:'XUI'           	;0	<<118
127 33   FETCH_DIM_R/81            $93=      $92                  102:'default_entries'	;0
128 33   QM_ASSIGN/22              #91=      $93                  ?0                  	;0
129 33   ASSIGN/38                 ?71       16?4                 #91                 	;0	<<125
130 34   GOTO/253                  ?0        ?309                 ?103                	;0
131 36   INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'ceil'          	;1
132 36   DIV/4                     #95=      16?5                 16?4                	;0
133 36   SEND_VAL_EX/116           ?80       #95                  ?1                  	;0
134 36   DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
135 36   ASSIGN/38                 ?74       16?1                 $96                 	;0
136 37   ASSIGN/38                 ?75       16?0                 106:array (
)       	;0
137 38   INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'range'         	;2
138 38   SUB/2                     #99=      16?2                 109:2               	;0
139 38   SEND_VAL_EX/116           ?80       #99                  ?1                  	;0
140 38   ADD/1                     #100=     16?2                 110:2               	;0
141 38   SEND_VAL_EX/116           ?96       #100                 ?2                  	;0
142 38   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
143 38   FE_RESET_R/77             $102=     $101                 ?156                	;0
144 38   FE_FETCH_R/78             ?0        $102                 16?6                	;156	>>156	<<155
145 39   IS_SMALLER_OR_EQUAL/20    #103=     111:1                16?6                	;0
146 39   JMPZ_EX/46                #103=     #103                 ?149                	;0	>>149
147 39   IS_SMALLER_OR_EQUAL/20    #104=     16?6                 16?1                	;0
148 39   BOOL/52                   #103=     #104                 ?0                  	;0
149 39   BOOL_NOT/13               #105=     #103                 ?0                  	;0	<<146
150 39   JMPZ/43                   ?0        #105                 ?153                	;0	>>153
151 40   NOP/0                     ?0        ?0                   ?0                  	;1
152 40   GOTO/253                  ?0        ?155                 ?112                	;0
153 42   ASSIGN_DIM/147            ?83       16?0                 ?4397406            	;0	<<150
154 42   OP_DATA/137               ?0        16?6                 ?0                  	;0
155 44   JMP/42                    ?0        ?144                 ?0                  	;0	>>144
156 44   FE_FREE/127               ?0        $102                 ?0                  	;0	<<143
157 47   ASSIGN/38                 ?84       16?7                 113:'TV Guide'      	;0
158 48   GOTO/253                  ?0        ?409                 ?114                	;0
159 50   INIT_METHOD_CALL/112      ?0        16?8                 115:'get_row'       	;0
160 50   DO_FCALL/60               $108=     ?0                   ?0                  	;0
161 50   FETCH_DIM_R/81            $109=     $108                 117:'count'         	;0
162 50   ASSIGN/38                 ?87       16?5                 $109                	;0
163 51   INIT_METHOD_CALL/112      ?0        16?8                 118:'query'         	;1
164 51   ROPE_INIT/54              #112=     ?0                   120:'SELECT `id` FROM `streams` '	;9
165 51   ROPE_ADD/55               #112=     #112                 16?9                	;1
166 51   ROPE_ADD/55               #112=     #112                 121:' ORDER BY '    	;2
167 51   ROPE_ADD/55               #112=     #112                 16?10               	;3
168 51   ROPE_ADD/55               #112=     #112                 122:' LIMIT '       	;4
169 51   ROPE_ADD/55               #112=     #112                 16?11               	;5
170 51   ROPE_ADD/55               #112=     #112                 123:', '            	;6
171 51   ROPE_ADD/55               #112=     #112                 16?4                	;7
172 51   ROPE_END/56               #111=     #112                 124:';'             	;8
173 51   SEND_VAL_EX/116           ?80       #111                 ?1                  	;0
174 51   SEND_UNPACK/165           ?80       16?12                ?1                  	;0
175 51   DO_FCALL/60               ?94       ?0                   ?0                  	;0
176 52   GOTO/253                  ?0        ?381                 ?125                	;0
177 54   INIT_METHOD_CALL/112      ?0        16?8                 126:'query'         	;1
178 54   ROPE_INIT/54              #119=     ?0                   128:'SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` '	;3
179 54   ROPE_ADD/55               #119=     #119                 16?9                	;1
180 54   ROPE_END/56               #118=     #119                 129:';'             	;2
181 54   SEND_VAL_EX/116           ?80       #118                 ?1                  	;0
182 54   SEND_UNPACK/165           ?80       16?12                ?1                  	;0
183 54   DO_FCALL/60               ?98       ?0                   ?0                  	;0
184 55   GOTO/253                  ?0        ?365                 ?130                	;0
185 57   ECHO/40                   ?0        131:'<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>' ?0                  	;0
186 60   FE_RESET_R/77             $122=     16?0                 ?249                	;0
187 60   FE_FETCH_R/78             ?0        $122                 16?6                	;249	>>249	<<248
188 61   IS_EQUAL/17               #123=     16?2                 16?6                	;0
189 61   JMPZ/43                   ?0        #123                 ?192                	;0	>>192
190 61   QM_ASSIGN/22              #124=     132:' paginator__item--active' ?0                  	;0
191 61   JMP/42                    ?0        ?193                 ?0                  	;0	>>193
192 61   QM_ASSIGN/22              #124=     133:''               ?0                  	;0	<<189
193 61   CONCAT/8                  #125=     134:'<li class="paginator__item' #124                	;0	<<191
194 61   CONCAT/8                  #126=     #125                 135:'"><a href="epg_view?search='	;0
195 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   136:'urlencode'     	;1
196 61   FETCH_STATIC_PROP_FUNC_ARG/177 $127=     138:'rRequest'       139:'XUI'           	;1
197 61   FETCH_DIM_FUNC_ARG/93     $128=     $127                 141:'search'        	;1
198 61   SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
199 61   DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
200 61   JMP_SET/152               #130=     $129                 ?202                	;0
201 61   QM_ASSIGN/22              #130=     142:''               ?0                  	;0
202 61   CONCAT/8                  #131=     #126                 #130                	;0
203 61   CONCAT/8                  #132=     #131                 143:'&category='    	;0
204 61   FETCH_STATIC_PROP_R/173   $133=     144:'rRequest'       145:'XUI'           	;0
205 61   FETCH_DIM_R/81            $134=     $133                 147:'category'      	;0
206 61   JMPZ/43                   ?0        $134                 ?214                	;0	>>214
207 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'intval'        	;1
208 61   FETCH_STATIC_PROP_FUNC_ARG/177 $135=     150:'rRequest'       151:'XUI'           	;1
209 61   FETCH_DIM_FUNC_ARG/93     $136=     $135                 153:'category'      	;1
210 61   SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
211 61   DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
212 61   QM_ASSIGN/22              #138=     $137                 ?0                  	;0
213 61   JMP/42                    ?0        ?215                 ?0                  	;0	>>215
214 61   QM_ASSIGN/22              #138=     154:''               ?0                  	;0	<<206
215 61   CONCAT/8                  #139=     #132                 #138                	;0	<<213
216 61   CONCAT/8                  #140=     #139                 155:'&sort='        	;0
217 61   FETCH_STATIC_PROP_R/173   $141=     156:'rRequest'       157:'XUI'           	;0
218 61   FETCH_DIM_R/81            $142=     $141                 159:'sort'          	;0
219 61   JMPZ/43                   ?0        $142                 ?227                	;0	>>227
220 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'urlencode'     	;1
221 61   FETCH_STATIC_PROP_FUNC_ARG/177 $143=     162:'rRequest'       163:'XUI'           	;1
222 61   FETCH_DIM_FUNC_ARG/93     $144=     $143                 165:'sort'          	;1
223 61   SEND_VAR_EX/66            ?80       $144                 ?1                  	;0
224 61   DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
225 61   QM_ASSIGN/22              #146=     $145                 ?0                  	;0
226 61   JMP/42                    ?0        ?228                 ?0                  	;0	>>228
227 61   QM_ASSIGN/22              #146=     166:''               ?0                  	;0	<<219
228 61   CONCAT/8                  #147=     #140                 #146                	;0	<<226
229 61   CONCAT/8                  #148=     #147                 167:'&entries='     	;0
230 61   FETCH_STATIC_PROP_R/173   $149=     168:'rRequest'       169:'XUI'           	;0
231 61   FETCH_DIM_R/81            $150=     $149                 171:'entries'       	;0
232 61   JMPZ/43                   ?0        $150                 ?240                	;0	>>240
233 61   INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'intval'        	;1
234 61   FETCH_STATIC_PROP_FUNC_ARG/177 $151=     174:'rRequest'       175:'XUI'           	;1
235 61   FETCH_DIM_FUNC_ARG/93     $152=     $151                 177:'entries'       	;1
236 61   SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
237 61   DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
238 61   QM_ASSIGN/22              #154=     $153                 ?0                  	;0
239 61   JMP/42                    ?0        ?241                 ?0                  	;0	>>241
240 61   QM_ASSIGN/22              #154=     178:''               ?0                  	;0	<<232
241 61   CONCAT/8                  #155=     #148                 #154                	;0	<<239
242 61   CONCAT/8                  #156=     #155                 179:'&page='        	;0
243 61   CONCAT/8                  #157=     #156                 16?6                	;0
244 61   CONCAT/8                  #158=     #157                 180:'">'            	;0
245 61   CONCAT/8                  #159=     #158                 16?6                	;0
246 61   CONCAT/8                  #160=     #159                 181:'</a></li>'     	;0
247 61   ECHO/40                   ?0        #160                 ?0                  	;0
248 62   JMP/42                    ?0        ?187                 ?0                  	;0	>>187
249 62   FE_FREE/127               ?0        $122                 ?0                  	;0	<<186
250 65   GOTO/253                  ?0        ?1                   ?182                	;0
251 68   IS_SMALLER/19             #161=     16?2                 16?1                	;0
252 68   BOOL_NOT/13               #162=     #161                 ?0                  	;0
253 68   JMPZ/43                   ?0        #162                 ?255                	;0	>>255
254 69   GOTO/253                  ?0        ?307                 ?183                	;0
255 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'urlencode'     	;1	<<253
256 71   FETCH_STATIC_PROP_FUNC_ARG/177 $163=     186:'rRequest'       187:'XUI'           	;1
257 71   FETCH_DIM_FUNC_ARG/93     $164=     $163                 189:'search'        	;1
258 71   SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
259 71   DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
260 71   JMP_SET/152               #166=     $165                 ?262                	;0
261 71   QM_ASSIGN/22              #166=     190:''               ?0                  	;0
262 71   CONCAT/8                  #167=     191:'<li class="paginator__item paginator__item--next">
								<a href="epg_view?search=' #166                	;0
263 71   CONCAT/8                  #168=     #167                 192:'&category='    	;0
264 71   FETCH_STATIC_PROP_R/173   $169=     193:'rRequest'       194:'XUI'           	;0
265 71   FETCH_DIM_R/81            $170=     $169                 196:'category'      	;0
266 71   JMPZ/43                   ?0        $170                 ?274                	;0	>>274
267 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'intval'        	;1
268 71   FETCH_STATIC_PROP_FUNC_ARG/177 $171=     199:'rRequest'       200:'XUI'           	;1
269 71   FETCH_DIM_FUNC_ARG/93     $172=     $171                 202:'category'      	;1
270 71   SEND_VAR_EX/66            ?80       $172                 ?1                  	;0
271 71   DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
272 71   QM_ASSIGN/22              #174=     $173                 ?0                  	;0
273 71   JMP/42                    ?0        ?275                 ?0                  	;0	>>275
274 71   QM_ASSIGN/22              #174=     203:''               ?0                  	;0	<<266
275 71   CONCAT/8                  #175=     #168                 #174                	;0	<<273
276 71   CONCAT/8                  #176=     #175                 204:'&sort='        	;0
277 71   FETCH_STATIC_PROP_R/173   $177=     205:'rRequest'       206:'XUI'           	;0
278 71   FETCH_DIM_R/81            $178=     $177                 208:'sort'          	;0
279 71   JMPZ/43                   ?0        $178                 ?287                	;0	>>287
280 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'urlencode'     	;1
281 71   FETCH_STATIC_PROP_FUNC_ARG/177 $179=     211:'rRequest'       212:'XUI'           	;1
282 71   FETCH_DIM_FUNC_ARG/93     $180=     $179                 214:'sort'          	;1
283 71   SEND_VAR_EX/66            ?80       $180                 ?1                  	;0
284 71   DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
285 71   QM_ASSIGN/22              #182=     $181                 ?0                  	;0
286 71   JMP/42                    ?0        ?288                 ?0                  	;0	>>288
287 71   QM_ASSIGN/22              #182=     215:''               ?0                  	;0	<<279
288 71   CONCAT/8                  #183=     #176                 #182                	;0	<<286
289 71   CONCAT/8                  #184=     #183                 216:'&entries='     	;0
290 71   FETCH_STATIC_PROP_R/173   $185=     217:'rRequest'       218:'XUI'           	;0
291 71   FETCH_DIM_R/81            $186=     $185                 220:'entries'       	;0
292 71   JMPZ/43                   ?0        $186                 ?300                	;0	>>300
293 71   INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'intval'        	;1
294 71   FETCH_STATIC_PROP_FUNC_ARG/177 $187=     223:'rRequest'       224:'XUI'           	;1
295 71   FETCH_DIM_FUNC_ARG/93     $188=     $187                 226:'entries'       	;1
296 71   SEND_VAR_EX/66            ?80       $188                 ?1                  	;0
297 71   DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
298 71   QM_ASSIGN/22              #190=     $189                 ?0                  	;0
299 71   JMP/42                    ?0        ?301                 ?0                  	;0	>>301
300 71   QM_ASSIGN/22              #190=     227:''               ?0                  	;0	<<292
301 71   CONCAT/8                  #191=     #184                 #190                	;0	<<299
302 71   CONCAT/8                  #192=     #191                 228:'&page='        	;0
303 71   ADD/1                     #193=     16?2                 229:1               	;0
304 71   CONCAT/8                  #194=     #192                 #193                	;0
305 71   CONCAT/8                  #195=     #194                 230:'"><i class="mdi mdi-chevron-right"></i></a>
							</li>'	;0
306 71   ECHO/40                   ?0        #195                 ?0                  	;0
307 73   ECHO/40                   ?0        231:'					</ul>
					' ?0                  	;0
308 74   GOTO/253                  ?0        ?508                 ?232                	;0
309 76   SUB/2                     #196=     16?2                 233:1               	;0
310 76   MUL/3                     #197=     #196                 16?4                	;0
311 76   ASSIGN/38                 ?175      16?11                #197                	;0
312 77   ASSIGN/38                 $199=     16?12                234:array (
)       	;0
313 77   ASSIGN/38                 ?177      16?13                $199                	;0
314 78   ASSIGN_DIM/147            ?178      16?13                ?2670195408         	;0
315 78   OP_DATA/137               ?0        235:'`streams`.`type` = 1 AND `streams`.`epg_id` IS NOT NULL AND `streams`.`channel_id` IS NOT NULL' ?0                  	;0
316 79   FETCH_STATIC_PROP_IS/176  $202=     236:'rRequest'       237:'XUI'           	;0
317 79   ISSET_ISEMPTY_DIM_OBJ/115 #203=     $202                 239:'category'      	;33554432
318 79   JMPZ_EX/46                #203=     #203                 ?326                	;0	>>326
319 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   240:'intval'        	;1
320 79   FETCH_STATIC_PROP_FUNC_ARG/177 $204=     242:'rRequest'       243:'XUI'           	;1
321 79   FETCH_DIM_FUNC_ARG/93     $205=     $204                 245:'category'      	;1
322 79   SEND_VAR_EX/66            ?80       $205                 ?1                  	;0
323 79   DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
324 79   IS_SMALLER/19             #207=     246:0                $206                	;0
325 79   BOOL/52                   #203=     #207                 ?0                  	;0
326 79   BOOL_NOT/13               #208=     #203                 ?0                  	;0	<<318
327 79   JMPZ/43                   ?0        #208                 ?329                	;0	>>329
328 80   GOTO/253                  ?0        ?431                 ?247                	;0
329 82   ASSIGN_DIM/147            ?186      16?13                ?4397406            	;0	<<327
330 82   OP_DATA/137               ?0        248:'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')' ?0                  	;0
331 83   GOTO/253                  ?0        ?427                 ?249                	;0
332 85   FETCH_STATIC_PROP_IS/176  $210=     250:'rRequest'       251:'XUI'           	;0
333 85   ISSET_ISEMPTY_DIM_OBJ/115 #211=     $210                 253:'sort'          	;16777216
334 85   BOOL_NOT/13               #212=     #211                 ?0                  	;0
335 85   JMPZ_EX/46                #212=     #212                 ?340                	;0	>>340
336 85   FETCH_STATIC_PROP_R/173   $213=     254:'rRequest'       255:'XUI'           	;0
337 85   FETCH_DIM_R/81            $214=     $213                 257:'sort'          	;0
338 85   ISSET_ISEMPTY_DIM_OBJ/115 #215=     16?14                $214                	;33554432
339 85   BOOL/52                   #212=     #215                 ?0                  	;0
340 85   JMPZ/43                   ?0        #212                 ?342                	;0	>>342	<<335
341 86   GOTO/253                  ?0        ?722                 ?258                	;0
342 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'igbinary_unserialize'	;1	<<340
343 88   INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'file_get_contents'	;1
344 88   FETCH_CONSTANT/99         #216=     ?0                   263:'CACHE_TMP_PATH'	;16
345 88   CONCAT/8                  #217=     #216                 266:'channel_order' 	;0
346 88   SEND_VAL_EX/116           ?80       #217                 ?1                  	;0
347 88   DO_FCALL_BY_NAME/131      $218=     ?0                   ?0                  	;0
348 88   SEND_VAR_NO_REF_EX/50     ?80       $218                 ?1                  	;0
349 88   DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
350 88   ASSIGN/38                 ?197      16?15                $219                	;0
351 89   FETCH_STATIC_PROP_R/173   $221=     267:'rSettings'      268:'XUI'           	;0
352 89   FETCH_DIM_R/81            $222=     $221                 270:'channel_number_type'	;0
353 89   IS_NOT_EQUAL/18           #223=     $222                 271:'manual'        	;0
354 89   JMPZ_EX/46                #223=     #223                 ?360                	;0	>>360
355 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'count'         	;1
356 89   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
357 89   DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
358 89   IS_SMALLER/19             #225=     274:0                $224                	;0
359 89   BOOL/52                   #223=     #225                 ?0                  	;0
360 89   JMPZ/43                   ?0        #223                 ?362                	;0	>>362	<<354
361 90   GOTO/253                  ?0        ?714                 ?275                	;0
362 92   ASSIGN/38                 ?203      16?10                276:'`order` ASC'   	;0	<<360
363 93   GOTO/253                  ?0        ?721                 ?277                	;0
364 94   GOTO/253                  ?0        ?714                 ?278                	;0
365 96   INIT_METHOD_CALL/112      ?0        16?8                 279:'num_rows'      	;0
366 96   DO_FCALL/60               $227=     ?0                   ?0                  	;0
367 96   ASSIGN/38                 ?205      16?5                 $227                	;0
368 97   INIT_METHOD_CALL/112      ?0        16?8                 281:'query'         	;1
369 97   ROPE_INIT/54              #230=     ?0                   283:'SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` '	;9
370 97   ROPE_ADD/55               #230=     #230                 16?9                	;1
371 97   ROPE_ADD/55               #230=     #230                 284:' ORDER BY '    	;2
372 97   ROPE_ADD/55               #230=     #230                 16?10               	;3
373 97   ROPE_ADD/55               #230=     #230                 285:' LIMIT '       	;4
374 97   ROPE_ADD/55               #230=     #230                 16?11               	;5
375 97   ROPE_ADD/55               #230=     #230                 286:', '            	;6
376 97   ROPE_ADD/55               #230=     #230                 16?4                	;7
377 97   ROPE_END/56               #229=     #230                 287:';'             	;8
378 97   SEND_VAL_EX/116           ?80       #229                 ?1                  	;0
379 97   SEND_UNPACK/165           ?80       16?12                ?1                  	;0
380 97   DO_FCALL/60               ?212      ?0                   ?0                  	;0
381 99   INIT_METHOD_CALL/112      ?0        16?8                 288:'get_rows'      	;0
382 99   DO_FCALL/60               $236=     ?0                   ?0                  	;0
383 99   FE_RESET_R/77             $237=     $236                 ?389                	;0
384 99   FE_FETCH_R/78             ?0        $237                 16?16               	;389	>>389	<<388
385 100  FETCH_DIM_R/81            $239=     16?16                290:'id'            	;0
386 100  ASSIGN_DIM/147            ?215      16?17                ?4414262            	;0
387 100  OP_DATA/137               ?0        $239                 ?0                  	;0
388 101  JMP/42                    ?0        ?384                 ?0                  	;0	>>384
389 101  FE_FREE/127               ?0        $237                 ?0                  	;0	<<383
390 104  GOTO/253                  ?0        ?131                 ?291                	;0
391 106  FETCH_STATIC_PROP_R/173   $240=     292:'rRequest'       293:'XUI'           	;0
392 106  FETCH_DIM_R/81            $241=     $240                 295:'sort'          	;0
393 106  FETCH_DIM_R/81            $242=     16?14                $241                	;0
394 106  ASSIGN/38                 ?220      16?10                $242                	;0
395 108  ASSIGN/38                 ?221      16?17                296:array (
)       	;0
396 109  FETCH_STATIC_PROP_IS/176  $245=     297:'rRequest'       298:'XUI'           	;0
397 109  ISSET_ISEMPTY_DIM_OBJ/115 #246=     $245                 300:'search'        	;16777216
398 109  BOOL_NOT/13               #247=     #246                 ?0                  	;0
399 109  JMPZ/43                   ?0        #247                 ?401                	;0	>>401
400 110  GOTO/253                  ?0        ?177                 ?301                	;0
401 112  INIT_METHOD_CALL/112      ?0        16?8                 302:'query'         	;1	<<399
402 112  ROPE_INIT/54              #249=     ?0                   304:'SELECT COUNT(`id`) AS `count` FROM `streams` '	;3
403 112  ROPE_ADD/55               #249=     #249                 16?9                	;1
404 112  ROPE_END/56               #248=     #249                 305:';'             	;2
405 112  SEND_VAL_EX/116           ?80       #248                 ?1                  	;0
406 112  SEND_UNPACK/165           ?80       16?12                ?1                  	;0
407 112  DO_FCALL/60               ?228      ?0                   ?0                  	;0
408 113  GOTO/253                  ?0        ?159                 ?306                	;0
409 115  INCLUDE_OR_EVAL/73        ?229      307:'header.php'     ?0                  	;2
410 116  ECHO/40                   ?0        308:'<div class="wrapper "' ?0                  	;0
411 117  FETCH_IS/89               $253=     309:'_SERVER'        ?0                  	;0
412 117  ISSET_ISEMPTY_DIM_OBJ/115 #254=     $253                 310:'HTTP_X_REQUESTED_WITH'	;16777216
413 117  BOOL_NOT/13               #255=     #254                 ?0                  	;0
414 117  JMPZ_EX/46                #255=     #255                 ?422                	;0	>>422
415 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'strtolower'    	;1
416 117  FETCH_FUNC_ARG/92         $256=     313:'_SERVER'        ?0                  	;1
417 117  FETCH_DIM_FUNC_ARG/93     $257=     $256                 314:'HTTP_X_REQUESTED_WITH'	;1
418 117  SEND_VAR_EX/66            ?80       $257                 ?1                  	;0
419 117  DO_FCALL_BY_NAME/131      $258=     ?0                   ?0                  	;0
420 117  IS_EQUAL/17               #259=     $258                 315:'xmlhttprequest'	;0
421 117  BOOL/52                   #255=     #259                 ?0                  	;0
422 117  BOOL_NOT/13               #260=     #255                 ?0                  	;0	<<414
423 117  JMPZ/43                   ?0        #260                 ?425                	;0	>>425
424 118  GOTO/253                  ?0        ?426                 ?316                	;0
425 120  ECHO/40                   ?0        317:' style="display: none;"' ?0                  	;0	<<423
426 122  GOTO/253                  ?0        ?511                 ?318                	;0
427 124  FETCH_STATIC_PROP_R/173   $262=     319:'rRequest'       320:'XUI'           	;0
428 124  FETCH_DIM_R/81            $263=     $262                 322:'category'      	;0
429 124  ASSIGN_DIM/147            ?238      16?12                ?4397406            	;0
430 124  OP_DATA/137               ?0        $263                 ?0                  	;0
431 126  FETCH_STATIC_PROP_IS/176  $264=     323:'rRequest'       324:'XUI'           	;0
432 126  ISSET_ISEMPTY_DIM_OBJ/115 #265=     $264                 326:'search'        	;16777216
433 126  JMPZ/43                   ?0        #265                 ?435                	;0	>>435
434 127  GOTO/253                  ?0        ?657                 ?327                	;0
435 129  ASSIGN_DIM/147            ?243      16?13                ?4397406            	;0	<<433
436 129  OP_DATA/137               ?0        328:'(`epg_data`.`title` LIKE ? AND ((`epg_data`.`start` <= UNIX_TIMESTAMP() AND `epg_data`.`end` > UNIX_TIMESTAMP()) OR (`epg_data`.`start` > UNIX_TIMESTAMP() AND `epg_data`.`start` <= UNIX_TIMESTAMP() + 7200))) OR `streams`.`stream_display_name` LIKE ? OR `streams`.`id` LIKE ?' ?0                  	;0
437 130  FETCH_STATIC_PROP_R/173   $268=     329:'rRequest'       330:'XUI'           	;0
438 130  FETCH_DIM_R/81            $269=     $268                 332:'search'        	;0
439 130  CONCAT/8                  #270=     333:'%'              $269                	;0
440 130  CONCAT/8                  #271=     #270                 334:'%'             	;0
441 130  ASSIGN_DIM/147            ?244      16?12                ?0                  	;0
442 130  OP_DATA/137               ?0        #271                 ?0                  	;0
443 131  GOTO/253                  ?0        ?647                 ?335                	;0
444 133  INCLUDE_OR_EVAL/73        ?249      336:'session.php'    ?0                  	;2	<<0
445 134  INCLUDE_OR_EVAL/73        ?250      337:'functions.php'  ?0                  	;2
446 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'E6d500e19634D513'	;0
447 135  DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
448 135  JMPZ/43                   ?0        $274                 ?450                	;0	>>450
449 136  GOTO/253                  ?0        ?452                 ?340                	;0
450 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'e72f42A93714BA87'	;0	<<448
451 138  DO_FCALL_BY_NAME/131      ?252      ?0                   ?0                  	;0
452 140  GOTO/253                  ?0        ?90                  ?343                	;0
453 142  ECHO/40                   ?0        344:'>'              ?0                  	;0
454 143  FETCH_DIM_R/81            $276=     16?18                345:'all_categories'	;0
455 143  ECHO/40                   ?0        $276                 ?0                  	;0
456 144  ECHO/40                   ?0        346:'</option>
										' ?0                  	;0
457 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'F769e3f0C739d1a6'	;1
458 145  SEND_VAL_EX/116           ?80       349:'live'           ?1                  	;0
459 145  DO_FCALL_BY_NAME/131      $277=     ?0                   ?0                  	;0
460 145  FE_RESET_R/77             $278=     $277                 ?487                	;0
461 145  FE_FETCH_R/78             ?0        $278                 16?19               	;487	>>487	<<486
462 146  ECHO/40                   ?0        350:'										<option value="' ?0                  	;0
463 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'intval'        	;1
464 147  FETCH_DIM_FUNC_ARG/93     $279=     16?19                353:'id'            	;1
465 147  SEND_VAR_EX/66            ?80       $279                 ?1                  	;0
466 147  DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
467 147  ECHO/40                   ?0        $280                 ?0                  	;0
468 148  ECHO/40                   ?0        354:'"'              ?0                  	;0
469 149  FETCH_STATIC_PROP_IS/176  $281=     355:'rRequest'       356:'XUI'           	;0
470 149  ISSET_ISEMPTY_DIM_OBJ/115 #282=     $281                 358:'category'      	;33554432
471 149  JMPZ_EX/46                #282=     #282                 ?477                	;0	>>477
472 149  FETCH_STATIC_PROP_R/173   $283=     359:'rRequest'       360:'XUI'           	;0
473 149  FETCH_DIM_R/81            $284=     $283                 362:'category'      	;0
474 149  FETCH_DIM_R/81            $285=     16?19                363:'id'            	;0
475 149  IS_EQUAL/17               #286=     $284                 $285                	;0
476 149  BOOL/52                   #282=     #286                 ?0                  	;0
477 149  BOOL_NOT/13               #287=     #282                 ?0                  	;0	<<471
478 149  JMPZ/43                   ?0        #287                 ?481                	;0	>>481
479 150  NOP/0                     ?0        ?0                   ?0                  	;1
480 150  GOTO/253                  ?0        ?482                 ?364                	;0
481 152  ECHO/40                   ?0        365:' selected'      ?0                  	;0	<<478
482 154  ECHO/40                   ?0        366:'>'              ?0                  	;0
483 155  FETCH_DIM_R/81            $288=     16?19                367:'category_name' 	;0
484 155  ECHO/40                   ?0        $288                 ?0                  	;0
485 156  ECHO/40                   ?0        368:'</option>
										' ?0                  	;0
486 157  JMP/42                    ?0        ?461                 ?0                  	;0	>>461
487 157  FE_FREE/127               ?0        $278                 ?0                  	;0	<<460
488 160  GOTO/253                  ?0        ?672                 ?369                	;0
489 163  ECHO/40                   ?0        370:'									</select>
								</div>
								<div class="btn-group col-md-2">
									<button type="submit" class="btn btn-info">Search</button>
									<button type="button" onClick="clearForm()" class="btn btn-warning"><i class="mdi mdi-filter-remove"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				' ?0                  	;0
490 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'count'         	;1
491 164  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
492 164  DO_FCALL_BY_NAME/131      $289=     ?0                   ?0                  	;0
493 164  IS_SMALLER/19             #290=     373:0                $289                	;0
494 164  JMPZ/43                   ?0        #290                 ?496                	;0	>>496
495 165  GOTO/253                  ?0        ?79                  ?374                	;0
496 167  ECHO/40                   ?0        375:'				<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    No Live Streams or Programmes have been found matching your search terms.
				</div>
				' ?0                  	;0	<<494
497 168  GOTO/253                  ?0        ?509                 ?376                	;0
498 169  GOTO/253                  ?0        ?79                  ?377                	;0
499 171  GOTO/253                  ?0        ?506                 ?378                	;0
500 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   379:'implode'       	;2
501 173  SEND_VAL_EX/116           ?80       381:' AND '          ?1                  	;0
502 173  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
503 173  DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
504 173  CONCAT/8                  #292=     382:'WHERE '         $291                	;0
505 173  ASSIGN/38                 ?270      16?9                 #292                	;0
506 175  ASSIGN/38                 ?271      16?14                383:array (
  'name' => '`stream_display_name` ASC',
  'added' => '`added` DESC',
)	;0
507 176  GOTO/253                  ?0        ?332                 ?384                	;0
508 179  ECHO/40                   ?0        385:'				</div>
				' ?0                  	;0
509 181  ECHO/40                   ?0        386:'			</div>
		</div>
    </div>
</div>
' ?0                  	;0
510 182  GOTO/253                  ?0        ?723                 ?387                	;0
511 184  ECHO/40                   ?0        388:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
512 185  INCLUDE_OR_EVAL/73        ?272      389:'topbar.php'     ?0                  	;2
513 186  ECHO/40                   ?0        390:'					</div>
					<h4 class="page-title">TV Guide</h4>
				</div>
				<form method="GET" action="epg_view">
					<div class="card">
						<div class="card-body">
							<div id="collapse_filters" class="form-group row" style="margin-bottom: 0;">
								<div class="col-md-3">
									<input type="text" class="form-control" id="search" name="search" value="' ?0                  	;0
514 187  FETCH_STATIC_PROP_IS/176  $296=     391:'rRequest'       392:'XUI'           	;0
515 187  ISSET_ISEMPTY_DIM_OBJ/115 #297=     $296                 394:'search'        	;33554432
516 187  BOOL_NOT/13               #298=     #297                 ?0                  	;0
517 187  JMPZ/43                   ?0        #298                 ?519                	;0	>>519
518 188  GOTO/253                  ?0        ?665                 ?395                	;0
519 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   396:'htmlspecialchars'	;1	<<517
520 190  FETCH_STATIC_PROP_FUNC_ARG/177 $299=     398:'rRequest'       399:'XUI'           	;1
521 190  FETCH_DIM_FUNC_ARG/93     $300=     $299                 401:'search'        	;1
522 190  SEND_VAR_EX/66            ?80       $300                 ?1                  	;0
523 190  DO_FCALL_BY_NAME/131      $301=     ?0                   ?0                  	;0
524 190  ECHO/40                   ?0        $301                 ?0                  	;0
525 191  GOTO/253                  ?0        ?665                 ?402                	;0
526 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   403:'urlencode'     	;1
527 193  FETCH_STATIC_PROP_FUNC_ARG/177 $302=     405:'rRequest'       406:'XUI'           	;1
528 193  FETCH_DIM_FUNC_ARG/93     $303=     $302                 408:'search'        	;1
529 193  SEND_VAR_EX/66            ?80       $303                 ?1                  	;0
530 193  DO_FCALL_BY_NAME/131      $304=     ?0                   ?0                  	;0
531 193  JMP_SET/152               #305=     $304                 ?533                	;0
532 193  QM_ASSIGN/22              #305=     409:''               ?0                  	;0
533 193  CONCAT/8                  #306=     410:'<li class="paginator__item paginator__item--prev">
								<a href="epg_view?search=' #305                	;0
534 193  CONCAT/8                  #307=     #306                 411:'&category='    	;0
535 193  FETCH_STATIC_PROP_R/173   $308=     412:'rRequest'       413:'XUI'           	;0
536 193  FETCH_DIM_R/81            $309=     $308                 415:'category'      	;0
537 193  JMPZ/43                   ?0        $309                 ?545                	;0	>>545
538 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   416:'intval'        	;1
539 193  FETCH_STATIC_PROP_FUNC_ARG/177 $310=     418:'rRequest'       419:'XUI'           	;1
540 193  FETCH_DIM_FUNC_ARG/93     $311=     $310                 421:'category'      	;1
541 193  SEND_VAR_EX/66            ?80       $311                 ?1                  	;0
542 193  DO_FCALL_BY_NAME/131      $312=     ?0                   ?0                  	;0
543 193  QM_ASSIGN/22              #313=     $312                 ?0                  	;0
544 193  JMP/42                    ?0        ?546                 ?0                  	;0	>>546
545 193  QM_ASSIGN/22              #313=     422:''               ?0                  	;0	<<537
546 193  CONCAT/8                  #314=     #307                 #313                	;0	<<544
547 193  CONCAT/8                  #315=     #314                 423:'&sort='        	;0
548 193  FETCH_STATIC_PROP_R/173   $316=     424:'rRequest'       425:'XUI'           	;0
549 193  FETCH_DIM_R/81            $317=     $316                 427:'sort'          	;0
550 193  JMPZ/43                   ?0        $317                 ?558                	;0	>>558
551 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'urlencode'     	;1
552 193  FETCH_STATIC_PROP_FUNC_ARG/177 $318=     430:'rRequest'       431:'XUI'           	;1
553 193  FETCH_DIM_FUNC_ARG/93     $319=     $318                 433:'sort'          	;1
554 193  SEND_VAR_EX/66            ?80       $319                 ?1                  	;0
555 193  DO_FCALL_BY_NAME/131      $320=     ?0                   ?0                  	;0
556 193  QM_ASSIGN/22              #321=     $320                 ?0                  	;0
557 193  JMP/42                    ?0        ?559                 ?0                  	;0	>>559
558 193  QM_ASSIGN/22              #321=     434:''               ?0                  	;0	<<550
559 193  CONCAT/8                  #322=     #315                 #321                	;0	<<557
560 193  CONCAT/8                  #323=     #322                 435:'&entries='     	;0
561 193  FETCH_STATIC_PROP_R/173   $324=     436:'rRequest'       437:'XUI'           	;0
562 193  FETCH_DIM_R/81            $325=     $324                 439:'entries'       	;0
563 193  JMPZ/43                   ?0        $325                 ?571                	;0	>>571
564 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   440:'intval'        	;1
565 193  FETCH_STATIC_PROP_FUNC_ARG/177 $326=     442:'rRequest'       443:'XUI'           	;1
566 193  FETCH_DIM_FUNC_ARG/93     $327=     $326                 445:'entries'       	;1
567 193  SEND_VAR_EX/66            ?80       $327                 ?1                  	;0
568 193  DO_FCALL_BY_NAME/131      $328=     ?0                   ?0                  	;0
569 193  QM_ASSIGN/22              #329=     $328                 ?0                  	;0
570 193  JMP/42                    ?0        ?572                 ?0                  	;0	>>572
571 193  QM_ASSIGN/22              #329=     446:''               ?0                  	;0	<<563
572 193  CONCAT/8                  #330=     #323                 #329                	;0	<<570
573 193  CONCAT/8                  #331=     #330                 447:'&page='        	;0
574 193  SUB/2                     #332=     16?2                 448:1               	;0
575 193  CONCAT/8                  #333=     #331                 #332                	;0
576 193  CONCAT/8                  #334=     #333                 449:'"><i class="mdi mdi-chevron-left"></i></a>
							</li>'	;0
577 193  ECHO/40                   ?0        #334                 ?0                  	;0
578 195  FETCH_DIM_R/81            $335=     16?0                 450:0               	;0
579 195  IS_SMALLER/19             #336=     451:1                $335                	;0
580 195  BOOL_NOT/13               #337=     #336                 ?0                  	;0
581 195  JMPZ/43                   ?0        #337                 ?583                	;0	>>583
582 196  GOTO/253                  ?0        ?186                 ?452                	;0
583 198  IS_EQUAL/17               #338=     16?2                 453:1               	;0	<<581
584 198  JMPZ/43                   ?0        #338                 ?587                	;0	>>587
585 198  QM_ASSIGN/22              #339=     454:' paginator__item--active' ?0                  	;0
586 198  JMP/42                    ?0        ?588                 ?0                  	;0	>>588
587 198  QM_ASSIGN/22              #339=     455:''               ?0                  	;0	<<584
588 198  CONCAT/8                  #340=     456:'<li class="paginator__item' #339                	;0	<<586
589 198  CONCAT/8                  #341=     #340                 457:'"><a href="epg_view?search='	;0
590 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   458:'urlencode'     	;1
591 198  FETCH_STATIC_PROP_FUNC_ARG/177 $342=     460:'rRequest'       461:'XUI'           	;1
592 198  FETCH_DIM_FUNC_ARG/93     $343=     $342                 463:'search'        	;1
593 198  SEND_VAR_EX/66            ?80       $343                 ?1                  	;0
594 198  DO_FCALL_BY_NAME/131      $344=     ?0                   ?0                  	;0
595 198  JMP_SET/152               #345=     $344                 ?597                	;0
596 198  QM_ASSIGN/22              #345=     464:''               ?0                  	;0
597 198  CONCAT/8                  #346=     #341                 #345                	;0
598 198  CONCAT/8                  #347=     #346                 465:'&category='    	;0
599 198  FETCH_STATIC_PROP_R/173   $348=     466:'rRequest'       467:'XUI'           	;0
600 198  FETCH_DIM_R/81            $349=     $348                 469:'category'      	;0
601 198  JMPZ/43                   ?0        $349                 ?609                	;0	>>609
602 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   470:'intval'        	;1
603 198  FETCH_STATIC_PROP_FUNC_ARG/177 $350=     472:'rRequest'       473:'XUI'           	;1
604 198  FETCH_DIM_FUNC_ARG/93     $351=     $350                 475:'category'      	;1
605 198  SEND_VAR_EX/66            ?80       $351                 ?1                  	;0
606 198  DO_FCALL_BY_NAME/131      $352=     ?0                   ?0                  	;0
607 198  QM_ASSIGN/22              #353=     $352                 ?0                  	;0
608 198  JMP/42                    ?0        ?610                 ?0                  	;0	>>610
609 198  QM_ASSIGN/22              #353=     476:''               ?0                  	;0	<<601
610 198  CONCAT/8                  #354=     #347                 #353                	;0	<<608
611 198  CONCAT/8                  #355=     #354                 477:'&sort='        	;0
612 198  FETCH_STATIC_PROP_R/173   $356=     478:'rRequest'       479:'XUI'           	;0
613 198  FETCH_DIM_R/81            $357=     $356                 481:'sort'          	;0
614 198  JMPZ/43                   ?0        $357                 ?622                	;0	>>622
615 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   482:'urlencode'     	;1
616 198  FETCH_STATIC_PROP_FUNC_ARG/177 $358=     484:'rRequest'       485:'XUI'           	;1
617 198  FETCH_DIM_FUNC_ARG/93     $359=     $358                 487:'sort'          	;1
618 198  SEND_VAR_EX/66            ?80       $359                 ?1                  	;0
619 198  DO_FCALL_BY_NAME/131      $360=     ?0                   ?0                  	;0
620 198  QM_ASSIGN/22              #361=     $360                 ?0                  	;0
621 198  JMP/42                    ?0        ?623                 ?0                  	;0	>>623
622 198  QM_ASSIGN/22              #361=     488:''               ?0                  	;0	<<614
623 198  CONCAT/8                  #362=     #355                 #361                	;0	<<621
624 198  CONCAT/8                  #363=     #362                 489:'&entries='     	;0
625 198  FETCH_STATIC_PROP_R/173   $364=     490:'rRequest'       491:'XUI'           	;0
626 198  FETCH_DIM_R/81            $365=     $364                 493:'entries'       	;0
627 198  JMPZ/43                   ?0        $365                 ?635                	;0	>>635
628 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   494:'intval'        	;1
629 198  FETCH_STATIC_PROP_FUNC_ARG/177 $366=     496:'rRequest'       497:'XUI'           	;1
630 198  FETCH_DIM_FUNC_ARG/93     $367=     $366                 499:'entries'       	;1
631 198  SEND_VAR_EX/66            ?80       $367                 ?1                  	;0
632 198  DO_FCALL_BY_NAME/131      $368=     ?0                   ?0                  	;0
633 198  QM_ASSIGN/22              #369=     $368                 ?0                  	;0
634 198  JMP/42                    ?0        ?636                 ?0                  	;0	>>636
635 198  QM_ASSIGN/22              #369=     500:''               ?0                  	;0	<<627
636 198  CONCAT/8                  #370=     #363                 #369                	;0	<<634
637 198  CONCAT/8                  #371=     #370                 501:'&page=1">1</a></li>'	;0
638 198  ECHO/40                   ?0        #371                 ?0                  	;0
639 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   502:'count'         	;1
640 199  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
641 199  DO_FCALL_BY_NAME/131      $372=     ?0                   ?0                  	;0
642 199  IS_SMALLER/19             #373=     504:1                $372                	;0
643 199  BOOL_NOT/13               #374=     #373                 ?0                  	;0
644 199  JMPZ/43                   ?0        #374                 ?646                	;0	>>646
645 200  GOTO/253                  ?0        ?186                 ?505                	;0
646 202  GOTO/253                  ?0        ?185                 ?506                	;0	<<644
647 204  FETCH_STATIC_PROP_R/173   $376=     507:'rRequest'       508:'XUI'           	;0
648 204  FETCH_DIM_R/81            $377=     $376                 510:'search'        	;0
649 204  CONCAT/8                  #378=     511:'%'              $377                	;0
650 204  CONCAT/8                  #379=     #378                 512:'%'             	;0
651 204  ASSIGN_DIM/147            ?352      16?12                ?4397406            	;0
652 204  OP_DATA/137               ?0        #379                 ?0                  	;0
653 205  FETCH_STATIC_PROP_R/173   $381=     513:'rRequest'       514:'XUI'           	;0
654 205  FETCH_DIM_R/81            $382=     $381                 516:'search'        	;0
655 205  ASSIGN_DIM/147            ?357      16?12                ?0                  	;0
656 205  OP_DATA/137               ?0        $382                 ?0                  	;0
657 207  INIT_FCALL_BY_NAME/59     ?0        ?0                   517:'count'         	;1
658 207  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
659 207  DO_FCALL_BY_NAME/131      $383=     ?0                   ?0                  	;0
660 207  IS_SMALLER/19             #384=     519:0                $383                	;0
661 207  JMPZ/43                   ?0        #384                 ?663                	;0	>>663
662 208  GOTO/253                  ?0        ?500                 ?520                	;0
663 210  ASSIGN/38                 ?362      16?9                 521:''              	;0	<<661
664 211  GOTO/253                  ?0        ?499                 ?522                	;0
665 214  ECHO/40                   ?0        523:'" placeholder="Search Streams and Programmes...">
								</div>
								<div class="col-md-3">
									<select id="category" name="category" class="form-control" data-toggle="select2">
										<option value=""' ?0                  	;0
666 215  FETCH_STATIC_PROP_IS/176  $386=     524:'rRequest'       525:'XUI'           	;0
667 215  ISSET_ISEMPTY_DIM_OBJ/115 #387=     $386                 527:'category'      	;33554432
668 215  JMPZ/43                   ?0        #387                 ?670                	;0	>>670
669 216  GOTO/253                  ?0        ?671                 ?528                	;0
670 218  ECHO/40                   ?0        529:' selected'      ?0                  	;0	<<668
671 220  GOTO/253                  ?0        ?453                 ?530                	;0
672 222  ECHO/40                   ?0        531:'									</select>
								</div>
								<div class="col-md-2">
									<select id="sort" name="sort" class="form-control" data-toggle="select2">
										' ?0                  	;0
673 223  FE_RESET_R/77             $388=     532:array (
  '' => 'Default Sort',
  'name' => 'Alphabetical',
  'added' => 'Date Added',
) ?695                	;0
674 223  FE_FETCH_R/78             #389=     $388                 16?20               	;695	>>695	<<694
675 223  ASSIGN/38                 ?367      16?21                #389                	;0
676 224  ECHO/40                   ?0        533:'										<option value="' ?0                  	;0
677 225  ECHO/40                   ?0        16?21                ?0                  	;0
678 226  ECHO/40                   ?0        534:'"'              ?0                  	;0
679 227  FETCH_STATIC_PROP_IS/176  $391=     535:'rRequest'       536:'XUI'           	;0
680 227  ISSET_ISEMPTY_DIM_OBJ/115 #392=     $391                 538:'sort'          	;33554432
681 227  JMPZ_EX/46                #392=     #392                 ?686                	;0	>>686
682 227  FETCH_STATIC_PROP_R/173   $393=     539:'rRequest'       540:'XUI'           	;0
683 227  FETCH_DIM_R/81            $394=     $393                 542:'sort'          	;0
684 227  IS_EQUAL/17               #395=     $394                 16?21               	;0
685 227  BOOL/52                   #392=     #395                 ?0                  	;0
686 227  BOOL_NOT/13               #396=     #392                 ?0                  	;0	<<681
687 227  JMPZ/43                   ?0        #396                 ?690                	;0	>>690
688 228  NOP/0                     ?0        ?0                   ?0                  	;1
689 228  GOTO/253                  ?0        ?691                 ?543                	;0
690 230  ECHO/40                   ?0        544:' selected'      ?0                  	;0	<<687
691 232  ECHO/40                   ?0        545:'>'              ?0                  	;0
692 233  ECHO/40                   ?0        16?20                ?0                  	;0
693 234  ECHO/40                   ?0        546:'</option>
										' ?0                  	;0
694 235  JMP/42                    ?0        ?674                 ?0                  	;0	>>674
695 235  FE_FREE/127               ?0        $388                 ?0                  	;0	<<673
696 238  ECHO/40                   ?0        547:'									</select>
								</div>
								<label class="col-md-1 col-form-label text-center" for="user_show_entries">Show</label>
								<div class="col-md-1">
									<select id="entries" name="entries" class="form-control" data-toggle="select2">
										' ?0                  	;0
697 239  FE_RESET_R/77             $397=     548:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?712                	;0
698 239  FE_FETCH_R/78             ?0        $397                 16?22               	;712	>>712	<<711
699 240  ECHO/40                   ?0        549:'										<option' ?0                  	;0
700 241  IS_EQUAL/17               #398=     16?4                 16?22               	;0
701 241  BOOL_NOT/13               #399=     #398                 ?0                  	;0
702 241  JMPZ/43                   ?0        #399                 ?705                	;0	>>705
703 242  NOP/0                     ?0        ?0                   ?0                  	;1
704 242  GOTO/253                  ?0        ?706                 ?550                	;0
705 244  ECHO/40                   ?0        551:' selected'      ?0                  	;0	<<702
706 246  ECHO/40                   ?0        552:' value="'       ?0                  	;0
707 247  ECHO/40                   ?0        16?22                ?0                  	;0
708 248  ECHO/40                   ?0        553:'">'             ?0                  	;0
709 249  ECHO/40                   ?0        16?22                ?0                  	;0
710 250  ECHO/40                   ?0        554:'</option>
										' ?0                  	;0
711 251  JMP/42                    ?0        ?698                 ?0                  	;0	>>698
712 251  FE_FREE/127               ?0        $397                 ?0                  	;0	<<697
713 253  GOTO/253                  ?0        ?489                 ?555                	;0
714 256  INIT_FCALL_BY_NAME/59     ?0        ?0                   556:'implode'       	;2
715 256  SEND_VAL_EX/116           ?80       558:','              ?1                  	;0
716 256  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
717 256  DO_FCALL_BY_NAME/131      $400=     ?0                   ?0                  	;0
718 256  CONCAT/8                  #401=     559:'FIELD(`streams`.`id`,' $400                	;0
719 256  CONCAT/8                  #402=     #401                 560:')'             	;0
720 256  ASSIGN/38                 ?380      16?10                #402                	;0
721 258  GOTO/253                  ?0        ?395                 ?561                	;0
722 260  GOTO/253                  ?0        ?391                 ?562                	;0
723 262  INCLUDE_OR_EVAL/73        ?381      563:'footer.php'     ?0                  	;2
724 263  NOP/0                     ?0        564:1                ?0                  	;4294967295
*/

?>