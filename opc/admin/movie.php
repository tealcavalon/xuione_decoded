<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?573                 ?0                  	;0	>>573
1    5     ISSET_ISEMPTY_CV/197      #28=      16?0                 ?0                  	;33554432
2    5     JMPZ/43                   ?0        #28                  ?4                  	;0	>>4
3    6     GOTO/253                  ?0        ?18                  ?1                  	;0
4    8     FE_RESET_R/77             $29=      16?1                 ?16                 	;0	<<2
5    8     FE_FETCH_R/78             ?0        $29                  16?2                	;16	>>16	<<15
6    9     FETCH_DIM_R/81            $31=      16?2                 2:'id'              	;0
7    9     INIT_ARRAY/71             #32=      $31                  3:'id'              	;22
8    9     ADD_ARRAY_ELEMENT/72      #32=      4:'offline'          5:'parent'          	;0
9    9     FETCH_DIM_R/81            $33=      16?2                 6:'server_name'     	;0
10   9     ADD_ARRAY_ELEMENT/72      #32=      $33                  7:'text'            	;0
11   9     ADD_ARRAY_ELEMENT/72      #32=      8:'mdi mdi-server-network' 9:'icon'            	;0
12   9     ADD_ARRAY_ELEMENT/72      #32=      10:array (
  'opened' => true,
) 11:'state'          	;0
13   9     ASSIGN_DIM/147            ?2        16?3                 ?1669504208         	;0
14   9     OP_DATA/137               ?0        #32                  ?0                  	;0
15   10    JMP/42                    ?0        ?5                   ?0                  	;0	>>5
16   10    FE_FREE/127               ?0        $29                  ?0                  	;0	<<4
17   13    GOTO/253                  ?0        ?776                 ?12                 	;0
18   15    GOTO/253                  ?0        ?714                 ?13                 	;0
19   17    INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'htmlspecialchars'	;1
20   17    FETCH_DIM_FUNC_ARG/93     $34=      16?0                 16:'properties'     	;1
21   17    FETCH_DIM_FUNC_ARG/93     $35=      $34                  17:'backdrop_path'  	;1
22   17    FETCH_DIM_FUNC_ARG/93     $36=      $35                  18:0                	;1
23   17    SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
24   17    DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
25   17    ECHO/40                   ?0        $37                  ?0                  	;0
26   19    ECHO/40                   ?0        19:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="plot">' ?0                  	;0
27   20    FETCH_DIM_R/81            $38=      16?4                 20:'plot'           	;0
28   20    ECHO/40                   ?0        $38                  ?0                  	;0
29   21    ECHO/40                   ?0        21:'</label>
													<div class="col-md-8">
														<textarea rows="6" class="form-control" id="plot" name="plot">' ?0                  	;0
30   22    GOTO/253                  ?0        ?499                 ?22                 	;0
31   24    ECHO/40                   ?0        23:'</label>
													<div class="col-md-5">
														<select id="tmdb_search" class="form-control" data-toggle="select2"></select>
													</div>
                                                    <div class="col-md-3">
														<select name="tmdb_language" id="tmdb_language" class="form-control" data-toggle="select2">
                                                            ' ?0                  	;0
32   25    ISSET_ISEMPTY_DIM_OBJ/115 #39=      16?0                 24:'tmdb_language'  	;16777216
33   25    BOOL_NOT/13               #40=      #39                  ?0                  	;0
34   25    JMPZ/43                   ?0        #40                  ?38                 	;0	>>38
35   25    FETCH_DIM_R/81            $41=      16?0                 25:'tmdb_language'  	;0
36   25    QM_ASSIGN/22              #42=      $41                  ?0                  	;0
37   25    JMP/42                    ?0        ?40                  ?0                  	;0	>>40
38   25    FETCH_DIM_R/81            $43=      16?6                 26:'tmdb_language'  	;0	<<34
39   25    QM_ASSIGN/22              #42=      $43                  ?0                  	;0
40   25    ASSIGN/38                 ?16       16?5                 #42                 	;0	<<37
41   26    FE_RESET_R/77             $45=      16?7                 ?57                 	;0
42   26    FE_FETCH_R/78             #46=      $45                  16?8                	;57	>>57	<<56
43   26    ASSIGN/38                 ?19       16?9                 #46                 	;0
44   27    ECHO/40                   ?0        27:'                                                            <option' ?0                  	;0
45   28    IS_EQUAL/17               #48=      16?9                 16?5                	;0
46   28    BOOL_NOT/13               #49=      #48                  ?0                  	;0
47   28    JMPZ/43                   ?0        #49                  ?50                 	;0	>>50
48   29    NOP/0                     ?0        ?0                   ?0                  	;1
49   29    GOTO/253                  ?0        ?51                  ?28                 	;0
50   31    ECHO/40                   ?0        29:' selected'       ?0                  	;0	<<47
51   33    ECHO/40                   ?0        30:' value="'        ?0                  	;0
52   34    ECHO/40                   ?0        16?9                 ?0                  	;0
53   35    ECHO/40                   ?0        31:'">'              ?0                  	;0
54   36    ECHO/40                   ?0        16?8                 ?0                  	;0
55   37    ECHO/40                   ?0        32:'</option>
                                                            ' ?0                  	;0
56   38    JMP/42                    ?0        ?42                  ?0                  	;0	>>42
57   38    FE_FREE/127               ?0        $45                  ?0                  	;0	<<41
58   41    ECHO/40                   ?0        33:'                                                        </select>
													</div>
												</div>
												' ?0                  	;0
59   42    GOTO/253                  ?0        ?346                 ?34                 	;0
60   45    ECHO/40                   ?0        35:'Categories</label>
													<div class="col-md-8">
                                                        <select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
61   46    INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'F769E3F0C739D1A6'	;1
62   46    SEND_VAL_EX/116           ?80       38:'movie'           ?1                  	;0
63   46    DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
64   46    FE_RESET_R/77             $51=      $50                  ?106                	;0
65   46    FE_FETCH_R/78             ?0        $51                  16?10               	;106	>>106	<<105
66   47    NOP/0                     ?0        ?0                   ?0                  	;1
67   47    GOTO/253                  ?0        ?68                  ?39                 	;0
68   49    ECHO/40                   ?0        40:'                                                            <option ' ?0                  	;0
69   50    ISSET_ISEMPTY_CV/197      #52=      16?0                 ?0                  	;33554432
70   50    BOOL_NOT/13               #53=      #52                  ?0                  	;0
71   50    JMPZ/43                   ?0        #53                  ?74                 	;0	>>74
72   51    NOP/0                     ?0        ?0                   ?0                  	;1
73   51    GOTO/253                  ?0        ?94                  ?41                 	;0
74   53    INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'in_array'       	;2	<<71
75   53    INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'intval'         	;1
76   53    FETCH_DIM_FUNC_ARG/93     $54=      16?10                46:'id'             	;1
77   53    SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
78   53    DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
79   53    SEND_VAR_NO_REF_EX/50     ?80       $55                  ?1                  	;0
80   53    INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'json_decode'    	;2
81   53    FETCH_DIM_FUNC_ARG/93     $56=      16?0                 49:'category_id'    	;1
82   53    SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
83   53    SEND_VAL_EX/116           ?96       50:true              ?2                  	;0
84   53    DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
85   53    SEND_VAR_NO_REF_EX/50     ?96       $57                  ?2                  	;0
86   53    DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
87   53    BOOL_NOT/13               #59=      $58                  ?0                  	;0
88   53    JMPZ/43                   ?0        #59                  ?91                 	;0	>>91
89   54    NOP/0                     ?0        ?0                   ?0                  	;1
90   54    GOTO/253                  ?0        ?92                  ?51                 	;0
91   56    ECHO/40                   ?0        52:'selected '       ?0                  	;0	<<88
92   58    NOP/0                     ?0        ?0                   ?0                  	;1
93   58    GOTO/253                  ?0        ?94                  ?53                 	;0
94   61    ECHO/40                   ?0        54:'value="'         ?0                  	;0
95   62    FETCH_DIM_R/81            $60=      16?10                55:'id'             	;0
96   62    ECHO/40                   ?0        $60                  ?0                  	;0
97   63    ECHO/40                   ?0        56:'">'              ?0                  	;0
98   64    FETCH_DIM_R/81            $61=      16?10                57:'category_name'  	;0
99   64    ECHO/40                   ?0        $61                  ?0                  	;0
100  65    NOP/0                     ?0        ?0                   ?0                  	;1
101  65    GOTO/253                  ?0        ?102                 ?58                 	;0
102  67    ECHO/40                   ?0        59:'</option>
															' ?0                  	;0
103  69    NOP/0                     ?0        ?0                   ?0                  	;1
104  69    GOTO/253                  ?0        ?105                 ?60                 	;0
105  70    JMP/42                    ?0        ?65                  ?0                  	;0	>>65
106  70    FE_FREE/127               ?0        $51                  ?0                  	;0	<<64
107  73    ECHO/40                   ?0        61:'														</select>
                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Categories:</strong> <span id="category_new"></span>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bouquets">' ?0                  	;0
108  74    GOTO/253                  ?0        ?325                 ?62                 	;0
109  77    ECHO/40                   ?0        63:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="release_date">' ?0                  	;0
110  78    FETCH_DIM_R/81            $62=      16?4                 64:'release_date'   	;0
111  78    ECHO/40                   ?0        $62                  ?0                  	;0
112  79    ECHO/40                   ?0        65:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="release_date" name="release_date" value="' ?0                  	;0
113  80    ISSET_ISEMPTY_CV/197      #63=      16?0                 ?0                  	;33554432
114  80    BOOL_NOT/13               #64=      #63                  ?0                  	;0
115  80    JMPZ/43                   ?0        #64                  ?117                	;0	>>117
116  81    GOTO/253                  ?0        ?1003                ?66                 	;0
117  83    GOTO/253                  ?0        ?997                 ?67                 	;0	<<115
118  85    FETCH_DIM_R/81            $65=      16?4                 68:'choose'         	;0
119  85    ECHO/40                   ?0        $65                  ?0                  	;0
120  86    ECHO/40                   ?0        69:'...">
															' ?0                  	;0
121  87    INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'F964b9222b35aDDD'	;0
122  87    DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
123  87    FE_RESET_R/77             $67=      $66                  ?162                	;0
124  87    FE_FETCH_R/78             ?0        $67                  16?11               	;162	>>162	<<161
125  88    NOP/0                     ?0        ?0                   ?0                  	;1
126  88    GOTO/253                  ?0        ?127                 ?72                 	;0
127  90    ECHO/40                   ?0        73:'															<option ' ?0                  	;0
128  91    ISSET_ISEMPTY_CV/197      #68=      16?0                 ?0                  	;33554432
129  91    BOOL_NOT/13               #69=      #68                  ?0                  	;0
130  91    JMPZ/43                   ?0        #69                  ?133                	;0	>>133
131  92    NOP/0                     ?0        ?0                   ?0                  	;1
132  92    GOTO/253                  ?0        ?150                 ?74                 	;0
133  94    INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'in_array'       	;2	<<130
134  94    FETCH_DIM_FUNC_ARG/93     $70=      16?0                 77:'id'             	;1
135  94    SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
136  94    INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'json_decode'    	;2
137  94    FETCH_DIM_FUNC_ARG/93     $71=      16?11                80:'bouquet_movies' 	;1
138  94    SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
139  94    SEND_VAL_EX/116           ?96       81:true              ?2                  	;0
140  94    DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
141  94    SEND_VAR_NO_REF_EX/50     ?96       $72                  ?2                  	;0
142  94    DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
143  94    BOOL_NOT/13               #74=      $73                  ?0                  	;0
144  94    JMPZ/43                   ?0        #74                  ?147                	;0	>>147
145  95    NOP/0                     ?0        ?0                   ?0                  	;1
146  95    GOTO/253                  ?0        ?148                 ?82                 	;0
147  97    ECHO/40                   ?0        83:'selected '       ?0                  	;0	<<144
148  99    NOP/0                     ?0        ?0                   ?0                  	;1
149  99    GOTO/253                  ?0        ?150                 ?84                 	;0
150  102   ECHO/40                   ?0        85:'value="'         ?0                  	;0
151  103   FETCH_DIM_R/81            $75=      16?11                86:'id'             	;0
152  103   ECHO/40                   ?0        $75                  ?0                  	;0
153  104   ECHO/40                   ?0        87:'">'              ?0                  	;0
154  105   FETCH_DIM_R/81            $76=      16?11                88:'bouquet_name'   	;0
155  105   ECHO/40                   ?0        $76                  ?0                  	;0
156  106   NOP/0                     ?0        ?0                   ?0                  	;1
157  106   GOTO/253                  ?0        ?158                 ?89                 	;0
158  108   ECHO/40                   ?0        90:'</option>
															' ?0                  	;0
159  110   NOP/0                     ?0        ?0                   ?0                  	;1
160  110   GOTO/253                  ?0        ?161                 ?91                 	;0
161  111   JMP/42                    ?0        ?124                 ?0                  	;0	>>124
162  111   FE_FREE/127               ?0        $67                  ?0                  	;0	<<123
163  114   ECHO/40                   ?0        92:'														</select>
                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>
                                                        </div>
													</div>
												</div>
                                                ' ?0                  	;0
164  115   GOTO/253                  ?0        ?315                 ?93                 	;0
165  117   ECHO/40                   ?0        94:'</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_movie" type="submit" class="btn btn-primary" value="' ?0                  	;0
166  118   ISSET_ISEMPTY_CV/197      #77=      16?0                 ?0                  	;33554432
167  118   JMPZ/43                   ?0        #77                  ?169                	;0	>>169
168  119   GOTO/253                  ?0        ?171                 ?95                 	;0
169  121   ECHO/40                   ?0        96:'Add'             ?0                  	;0	<<167
170  122   GOTO/253                  ?0        ?593                 ?97                 	;0
171  124   GOTO/253                  ?0        ?592                 ?98                 	;0
172  127   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'htmlspecialchars'	;1
173  127   FETCH_STATIC_PROP_FUNC_ARG/177 $78=      101:'rRequest'       102:'XUI'           	;1
174  127   FETCH_DIM_FUNC_ARG/93     $79=      $78                  104:'path'          	;1
175  127   SEND_VAR_EX/66            ?80       $79                  ?1                  	;0
176  127   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
177  127   ASSIGN/38                 ?53       16?12                $80                 	;0
178  129   GOTO/253                  ?0        ?1081                ?105                	;0
179  131   GOTO/253                  ?0        ?1074                ?106                	;0
180  133   FETCH_STATIC_PROP_IS/176  $82=      107:'rRequest'       108:'XUI'           	;0
181  133   ISSET_ISEMPTY_DIM_OBJ/115 #83=      $82                  110:'title'         	;33554432
182  133   BOOL_NOT/13               #84=      #83                  ?0                  	;0
183  133   JMPZ/43                   ?0        #84                  ?185                	;0	>>185
184  134   GOTO/253                  ?0        ?193                 ?111                	;0
185  136   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'str_replace'   	;3	<<183
186  136   SEND_VAL_EX/116           ?80       114:'"'              ?1                  	;0
187  136   SEND_VAL_EX/116           ?96       115:'&quot;'         ?2                  	;0
188  136   FETCH_STATIC_PROP_FUNC_ARG/177 $85=      116:'rRequest'       117:'XUI'           	;3
189  136   FETCH_DIM_FUNC_ARG/93     $86=      $85                  119:'title'         	;3
190  136   SEND_VAR_EX/66            ?112      $86                  ?3                  	;0
191  136   DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
192  136   ECHO/40                   ?0        $87                  ?0                  	;0
193  138   GOTO/253                  ?0        ?811                 ?120                	;0
194  140   GOTO/253                  ?0        ?806                 ?121                	;0
195  142   FETCH_DIM_R/81            $88=      16?0                 122:'read_native'   	;0
196  142   IS_EQUAL/17               #89=      $88                  123:1               	;0
197  142   BOOL_NOT/13               #90=      #89                  ?0                  	;0
198  142   JMPZ/43                   ?0        #90                  ?200                	;0	>>200
199  143   GOTO/253                  ?0        ?201                 ?124                	;0
200  145   ECHO/40                   ?0        125:'checked '       ?0                  	;0	<<198
201  148   ECHO/40                   ?0        126:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="movie_symlink">' ?0                  	;0
202  149   GOTO/253                  ?0        ?900                 ?127                	;0
203  151   INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'F769e3F0C739d1A6'	;1
204  151   SEND_VAL_EX/116           ?80       130:'movie'          ?1                  	;0
205  151   DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
206  151   ASSIGN/38                 ?64       16?13                $91                 	;0
207  152   INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'F93E9343c3D7fD99'	;0
208  152   DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
209  152   ASSIGN/38                 ?66       16?14                $93                 	;0
210  153   FETCH_STATIC_PROP_IS/176  $95=      133:'rRequest'       134:'XUI'           	;0
211  153   ISSET_ISEMPTY_DIM_OBJ/115 #96=      $95                  136:'id'            	;33554432
212  153   BOOL_NOT/13               #97=      #96                  ?0                  	;0
213  153   JMPZ/43                   ?0        #97                  ?215                	;0	>>215
214  154   GOTO/253                  ?0        ?565                 ?137                	;0
215  156   INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'F260b7A31f021e39'	;1	<<213
216  156   FETCH_STATIC_PROP_FUNC_ARG/177 $98=      140:'rRequest'       141:'XUI'           	;1
217  156   FETCH_DIM_FUNC_ARG/93     $99=      $98                  143:'id'            	;1
218  156   SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
219  156   DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
220  156   ASSIGN/38                 ?73       16?0                 $100                	;0
221  157   BOOL_NOT/13               #102=     16?0                 ?0                  	;0
222  157   JMPNZ_EX/47               #102=     #102                 ?226                	;0	>>226
223  157   FETCH_DIM_R/81            $103=     16?0                 144:'type'          	;0
224  157   IS_NOT_EQUAL/18           #104=     $103                 145:2               	;0
225  157   BOOL/52                   #102=     #104                 ?0                  	;0
226  157   BOOL_NOT/13               #105=     #102                 ?0                  	;0	<<222
227  157   JMPZ/43                   ?0        #105                 ?229                	;0	>>229
228  158   GOTO/253                  ?0        ?565                 ?146                	;0
229  160   GOTO/253                  ?0        ?563                 ?147                	;0	<<227
230  162   FETCH_STATIC_PROP_IS/176  $106=     148:'rRequest'       149:'XUI'           	;0
231  162   ISSET_ISEMPTY_DIM_OBJ/115 #107=     $106                 151:'import'        	;33554432
232  162   JMPZ/43                   ?0        #107                 ?234                	;0	>>234
233  163   GOTO/253                  ?0        ?569                 ?152                	;0
234  165   ASSIGN/38                 ?80       16?15                153:''              	;0	<<232
235  166   ISSET_ISEMPTY_CV/197      #109=     16?0                 ?0                  	;33554432
236  166   BOOL_NOT/13               #110=     #109                 ?0                  	;0
237  166   JMPZ/43                   ?0        #110                 ?239                	;0	>>239
238  167   GOTO/253                  ?0        ?883                 ?154                	;0
239  169   INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'json_decode'   	;2	<<237
240  169   FETCH_DIM_FUNC_ARG/93     $111=     16?0                 157:'movie_subtitles'	;1
241  169   SEND_VAR_EX/66            ?80       $111                 ?1                  	;0
242  169   SEND_VAL_EX/116           ?96       158:true             ?2                  	;0
243  169   DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
244  169   ASSIGN/38                 ?85       16?16                $112                	;0
245  170   ISSET_ISEMPTY_DIM_OBJ/115 #114=     16?16                159:'location'      	;33554432
246  170   BOOL_NOT/13               #115=     #114                 ?0                  	;0
247  170   JMPZ/43                   ?0        #115                 ?249                	;0	>>249
248  171   GOTO/253                  ?0        ?883                 ?160                	;0
249  173   GOTO/253                  ?0        ?876                 ?161                	;0	<<247
250  176   ECHO/40                   ?0        162:'				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0
251  177   FETCH_DIM_R/81            $116=     16?4                 163:'movies_info_2' 	;0
252  177   ECHO/40                   ?0        $116                 ?0                  	;0
253  178   ECHO/40                   ?0        164:'				</div>
				' ?0                  	;0
254  180   GOTO/253                  ?0        ?598                 ?165                	;0
255  183   ECHO/40                   ?0        166:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="backdrop_path">' ?0                  	;0
256  184   FETCH_DIM_R/81            $117=     16?4                 167:'backdrop_url'  	;0
257  184   ECHO/40                   ?0        $117                 ?0                  	;0
258  185   ECHO/40                   ?0        168:'</label>
													<div class="col-md-8 input-group">
														<input type="text" class="form-control" id="backdrop_path" name="backdrop_path" value="' ?0                  	;0
259  186   ISSET_ISEMPTY_CV/197      #118=     16?0                 ?0                  	;33554432
260  186   BOOL_NOT/13               #119=     #118                 ?0                  	;0
261  186   JMPZ/43                   ?0        #119                 ?263                	;0	>>263
262  187   GOTO/253                  ?0        ?26                  ?169                	;0
263  189   GOTO/253                  ?0        ?19                  ?170                	;0	<<261
264  192   ECHO/40                   ?0        171:'">
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
265  193   FETCH_DIM_R/81            $120=     16?4                 172:'prev'          	;0
266  193   ECHO/40                   ?0        $120                 ?0                  	;0
267  194   ECHO/40                   ?0        173:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
268  195   FETCH_DIM_R/81            $121=     16?4                 174:'next'          	;0
269  195   ECHO/40                   ?0        $121                 ?0                  	;0
270  196   GOTO/253                  ?0        ?855                 ?175                	;0
271  198   FETCH_DIM_R/81            $122=     16?4                 176:'type'          	;0
272  198   ECHO/40                   ?0        $122                 ?0                  	;0
273  199   ECHO/40                   ?0        177:'</label>
													<div class="col-md-8">
														<div class="custom-control custom-radio mt-1">
															<span>
																<input type="radio" id="import_type_1" name="customRadio" class="custom-control-input" checked>
																<label class="custom-control-label" for="import_type_1">' ?0                  	;0
274  200   FETCH_DIM_R/81            $123=     16?4                 178:'m3u'           	;0
275  200   ECHO/40                   ?0        $123                 ?0                  	;0
276  201   ECHO/40                   ?0        179:'</label>
															</span>
															<span style="padding-left:50px;">
																<input type="radio" id="import_type_2" name="customRadio" class="custom-control-input">
																<label class="custom-control-label" for="import_type_2">' ?0                  	;0
277  202   FETCH_DIM_R/81            $124=     16?4                 180:'folder'        	;0
278  202   ECHO/40                   ?0        $124                 ?0                  	;0
279  203   GOTO/253                  ?0        ?470                 ?181                	;0
280  205   ISSET_ISEMPTY_CV/197      #125=     16?0                 ?0                  	;33554432
281  205   BOOL_NOT/13               #126=     #125                 ?0                  	;0
282  205   JMPZ/43                   ?0        #126                 ?284                	;0	>>284
283  206   GOTO/253                  ?0        ?290                 ?182                	;0
284  208   FETCH_DIM_R/81            $127=     16?0                 183:'direct_source' 	;0	<<282
285  208   IS_EQUAL/17               #128=     $127                 184:1               	;0
286  208   BOOL_NOT/13               #129=     #128                 ?0                  	;0
287  208   JMPZ/43                   ?0        #129                 ?289                	;0	>>289
288  209   GOTO/253                  ?0        ?290                 ?185                	;0
289  211   ECHO/40                   ?0        186:'checked '       ?0                  	;0	<<287
290  214   GOTO/253                  ?0        ?433                 ?187                	;0
291  216   FETCH_STATIC_PROP_IS/176  $130=     188:'rRequest'       189:'XUI'           	;0
292  216   ISSET_ISEMPTY_DIM_OBJ/115 #131=     $130                 191:'import'        	;33554432
293  216   JMPZ/43                   ?0        #131                 ?295                	;0	>>295
294  217   GOTO/253                  ?0        ?895                 ?192                	;0
295  219   ECHO/40                   ?0        193:'								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="search">' ?0                  	;0	<<293
296  220   FETCH_DIM_R/81            $132=     16?4                 194:'search_directory'	;0
297  220   ECHO/40                   ?0        $132                 ?0                  	;0
298  221   ECHO/40                   ?0        195:'</label>
									<div class="col-md-8 input-group">
										<input type="text" id="search" name="search" class="form-control" placeholder="' ?0                  	;0
299  222   FETCH_DIM_R/81            $133=     16?4                 196:'filter_files'  	;0
300  222   ECHO/40                   ?0        $133                 ?0                  	;0
301  223   GOTO/253                  ?0        ?894                 ?197                	;0
302  225   ECHO/40                   ?0        198:'</label>
                                                    <div class="col-md-3 input-group">
														<input type="text" class="form-control text-center" id="youtube_trailer" name="youtube_trailer" value="' ?0                  	;0
303  226   ISSET_ISEMPTY_CV/197      #134=     16?0                 ?0                  	;33554432
304  226   BOOL_NOT/13               #135=     #134                 ?0                  	;0
305  226   JMPZ/43                   ?0        #135                 ?307                	;0	>>307
306  227   GOTO/253                  ?0        ?313                 ?199                	;0
307  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'htmlspecialchars'	;1	<<305
308  229   FETCH_DIM_FUNC_ARG/93     $136=     16?0                 202:'properties'    	;1
309  229   FETCH_DIM_FUNC_ARG/93     $137=     $136                 203:'youtube_trailer'	;1
310  229   SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
311  229   DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
312  229   ECHO/40                   ?0        $138                 ?0                  	;0
313  231   ECHO/40                   ?0        204:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onClick="openYouTube(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
													<label class="col-md-2 col-form-label" for="rating">' ?0                  	;0
314  232   GOTO/253                  ?0        ?966                 ?205                	;0
315  234   FETCH_STATIC_PROP_IS/176  $139=     206:'rRequest'       207:'XUI'           	;0
316  234   ISSET_ISEMPTY_DIM_OBJ/115 #140=     $139                 209:'import'        	;33554432
317  234   BOOL_NOT/13               #141=     #140                 ?0                  	;0
318  234   JMPZ/43                   ?0        #141                 ?320                	;0	>>320
319  235   GOTO/253                  ?0        ?321                 ?210                	;0
320  237   ECHO/40                   ?0        211:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_tmdb">Disable TMDb <i title="Do not use TMDb to match the content." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_tmdb" id="disable_tmdb" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="ignore_no_match">Ignore No Match <i title="Add to database even if no TMDb match is found." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ignore_no_match" id="ignore_no_match" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                ' ?0                  	;0	<<318
321  239   ECHO/40                   ?0        212:'											</div>
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
322  240   FETCH_DIM_R/81            $142=     16?4                 213:'next'          	;0
323  240   ECHO/40                   ?0        $142                 ?0                  	;0
324  241   GOTO/253                  ?0        ?640                 ?214                	;0
325  243   FETCH_STATIC_PROP_R/173   $143=     215:'rRequest'       216:'XUI'           	;0
326  243   FETCH_DIM_R/81            $144=     $143                 218:'import'        	;0
327  243   BOOL_NOT/13               #145=     $144                 ?0                  	;0
328  243   JMPZ/43                   ?0        #145                 ?330                	;0	>>330
329  244   GOTO/253                  ?0        ?331                 ?219                	;0
330  246   ECHO/40                   ?0        220:'Fallback '      ?0                  	;0	<<328
331  248   FETCH_DIM_R/81            $146=     16?4                 221:'bouquets'      	;0
332  248   ECHO/40                   ?0        $146                 ?0                  	;0
333  249   ECHO/40                   ?0        222:'</label>
													<div class="col-md-8">
														<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="' ?0                  	;0
334  250   GOTO/253                  ?0        ?118                 ?223                	;0
335  252   FETCH_DIM_R/81            $147=     16?4                 224:'movies_info_4' 	;0
336  252   ECHO/40                   ?0        $147                 ?0                  	;0
337  253   ECHO/40                   ?0        225:'				</div>
				' ?0                  	;0
338  255   GOTO/253                  ?0        ?344                 ?226                	;0
339  257   GOTO/253                  ?0        ?340                 ?227                	;0
340  259   ECHO/40                   ?0        228:'				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0
341  260   FETCH_DIM_R/81            $148=     16?4                 229:'movies_info_3' 	;0
342  260   ECHO/40                   ?0        $148                 ?0                  	;0
343  261   ECHO/40                   ?0        230:'				</div>
				' ?0                  	;0
344  263   GOTO/253                  ?0        ?254                 ?231                	;0
345  264   GOTO/253                  ?0        ?250                 ?232                	;0
346  267   ISSET_ISEMPTY_CV/197      #149=     16?0                 ?0                  	;33554432
347  267   JMPZ/43                   ?0        #149                 ?349                	;0	>>349
348  268   GOTO/253                  ?0        ?179                 ?233                	;0
349  270   FETCH_STATIC_PROP_IS/176  $150=     234:'rRequest'       235:'XUI'           	;0	<<347
350  270   ISSET_ISEMPTY_DIM_OBJ/115 #151=     $150                 237:'path'          	;33554432
351  270   JMPZ/43                   ?0        #151                 ?353                	;0	>>353
352  271   GOTO/253                  ?0        ?172                 ?238                	;0
353  273   ASSIGN/38                 ?124      16?12                239:''              	;0	<<351
354  274   GOTO/253                  ?0        ?178                 ?240                	;0
355  275   GOTO/253                  ?0        ?172                 ?241                	;0
356  277   ECHO/40                   ?0        242:' <i title="'    ?0                  	;0
357  278   FETCH_DIM_R/81            $153=     16?4                 243:'episode_tooltip_4'	;0
358  278   ECHO/40                   ?0        $153                 ?0                  	;0
359  279   ECHO/40                   ?0        244:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="target_container" id="target_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
360  280   FE_RESET_R/77             $154=     245:array (
  0 => 'mp4',
  1 => 'mkv',
  2 => 'avi',
  3 => 'mpg',
  4 => 'flv',
  5 => '3gp',
  6 => 'm4v',
  7 => 'wmv',
  8 => 'mov',
  9 => 'ts',
) ?389                	;0
361  280   FE_FETCH_R/78             ?0        $154                 16?17               	;389	>>389	<<388
362  281   NOP/0                     ?0        ?0                   ?0                  	;1
363  281   GOTO/253                  ?0        ?373                 ?246                	;0
364  283   ECHO/40                   ?0        247:'</option>
															' ?0                  	;0
365  285   NOP/0                     ?0        ?0                   ?0                  	;1
366  285   GOTO/253                  ?0        ?388                 ?248                	;0
367  288   ECHO/40                   ?0        249:'value="'        ?0                  	;0
368  289   ECHO/40                   ?0        16?17                ?0                  	;0
369  290   ECHO/40                   ?0        250:'">'             ?0                  	;0
370  291   ECHO/40                   ?0        16?17                ?0                  	;0
371  292   NOP/0                     ?0        ?0                   ?0                  	;1
372  292   GOTO/253                  ?0        ?364                 ?251                	;0
373  294   ECHO/40                   ?0        252:'															<option ' ?0                  	;0
374  295   ISSET_ISEMPTY_CV/197      #155=     16?0                 ?0                  	;33554432
375  295   BOOL_NOT/13               #156=     #155                 ?0                  	;0
376  295   JMPZ/43                   ?0        #156                 ?379                	;0	>>379
377  296   NOP/0                     ?0        ?0                   ?0                  	;1
378  296   GOTO/253                  ?0        ?367                 ?253                	;0
379  298   FETCH_DIM_R/81            $157=     16?0                 254:'target_container'	;0	<<376
380  298   IS_EQUAL/17               #158=     $157                 16?17               	;0
381  298   BOOL_NOT/13               #159=     #158                 ?0                  	;0
382  298   JMPZ/43                   ?0        #159                 ?385                	;0	>>385
383  299   NOP/0                     ?0        ?0                   ?0                  	;1
384  299   GOTO/253                  ?0        ?386                 ?255                	;0
385  301   ECHO/40                   ?0        256:'selected '      ?0                  	;0	<<382
386  303   NOP/0                     ?0        ?0                   ?0                  	;1
387  303   GOTO/253                  ?0        ?367                 ?257                	;0
388  304   JMP/42                    ?0        ?361                 ?0                  	;0	>>361
389  304   FE_FREE/127               ?0        $154                 ?0                  	;0	<<360
390  307   GOTO/253                  ?0        ?478                 ?258                	;0
391  309   ECHO/40                   ?0        16?12                ?0                  	;0
392  310   ECHO/40                   ?0        259:'">
															<div class="input-group-append">
																<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
															</div>
														</div>
													</div>
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="scan_recursive">' ?0                  	;0
393  311   FETCH_DIM_R/81            $160=     16?4                 260:'scan_recursively'	;0
394  311   ECHO/40                   ?0        $160                 ?0                  	;0
395  312   ECHO/40                   ?0        261:'</label>
														<div class="col-md-2">
															<input name="scan_recursive" id="scan_recursive" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
														</div>
													</div>
												</div>
												' ?0                  	;0
396  313   GOTO/253                  ?0        ?487                 ?262                	;0
397  314   GOTO/253                  ?0        ?1039                ?263                	;0
398  316   INIT_FCALL_BY_NAME/59     ?0        ?0                   264:'c6A90bfCD425Eb63'	;0
399  316   DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
400  316   FE_RESET_R/77             $162=     $161                 ?427                	;0
401  316   FE_FETCH_R/78             ?0        $162                 16?2                	;427	>>427	<<426
402  317   ECHO/40                   ?0        266:'											<option value="' ?0                  	;0
403  318   FETCH_DIM_R/81            $163=     16?2                 267:'id'            	;0
404  318   ECHO/40                   ?0        $163                 ?0                  	;0
405  319   ECHO/40                   ?0        268:'"'              ?0                  	;0
406  320   FETCH_STATIC_PROP_IS/176  $164=     269:'rRequest'       270:'XUI'           	;0
407  320   ISSET_ISEMPTY_DIM_OBJ/115 #165=     $164                 272:'server'        	;33554432
408  320   JMPZ_EX/46                #165=     #165                 ?414                	;0	>>414
409  320   FETCH_STATIC_PROP_R/173   $166=     273:'rRequest'       274:'XUI'           	;0
410  320   FETCH_DIM_R/81            $167=     $166                 276:'server'        	;0
411  320   FETCH_DIM_R/81            $168=     16?2                 277:'id'            	;0
412  320   IS_EQUAL/17               #169=     $167                 $168                	;0
413  320   BOOL/52                   #165=     #169                 ?0                  	;0
414  320   BOOL_NOT/13               #170=     #165                 ?0                  	;0	<<408
415  320   JMPZ/43                   ?0        #170                 ?418                	;0	>>418
416  321   NOP/0                     ?0        ?0                   ?0                  	;1
417  321   GOTO/253                  ?0        ?419                 ?278                	;0
418  323   ECHO/40                   ?0        279:' selected'      ?0                  	;0	<<415
419  325   ECHO/40                   ?0        280:'>'              ?0                  	;0
420  326   INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'htmlspecialchars'	;1
421  326   FETCH_DIM_FUNC_ARG/93     $171=     16?2                 283:'server_name'   	;1
422  326   SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
423  326   DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
424  326   ECHO/40                   ?0        $172                 ?0                  	;0
425  327   ECHO/40                   ?0        284:'</option>
											' ?0                  	;0
426  328   JMP/42                    ?0        ?401                 ?0                  	;0	>>401
427  328   FE_FREE/127               ?0        $162                 ?0                  	;0	<<400
428  331   ECHO/40                   ?0        285:'										</select>
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="current_path">' ?0                  	;0
429  332   FETCH_DIM_R/81            $173=     16?4                 286:'current_path'  	;0
430  332   ECHO/40                   ?0        $173                 ?0                  	;0
431  333   ECHO/40                   ?0        287:'</label>
									<div class="col-md-8 input-group">
										<input type="text" id="current_path" name="current_path" class="form-control" value="/">
										<div class="input-group-append">
											<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>
										</div>
									</div>
								</div>
								' ?0                  	;0
432  334   GOTO/253                  ?0        ?291                 ?288                	;0
433  336   ECHO/40                   ?0        289:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently. Make sure to set the correct target container." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_proxy" id="direct_proxy" type="checkbox" ' ?0                  	;0
434  337   ISSET_ISEMPTY_CV/197      #174=     16?0                 ?0                  	;33554432
435  337   BOOL_NOT/13               #175=     #174                 ?0                  	;0
436  337   JMPZ/43                   ?0        #175                 ?438                	;0	>>438
437  338   GOTO/253                  ?0        ?554                 ?290                	;0
438  340   FETCH_DIM_R/81            $176=     16?0                 291:'direct_proxy'  	;0	<<436
439  340   IS_EQUAL/17               #177=     $176                 292:1               	;0
440  340   BOOL_NOT/13               #178=     #177                 ?0                  	;0
441  340   JMPZ/43                   ?0        #178                 ?443                	;0	>>443
442  341   GOTO/253                  ?0        ?444                 ?293                	;0
443  343   ECHO/40                   ?0        294:'checked '       ?0                  	;0	<<441
444  345   GOTO/253                  ?0        ?554                 ?295                	;0
445  347   ECHO/40                   ?0        296:'</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
446  348   ISSET_ISEMPTY_CV/197      #179=     16?18                ?0                  	;33554432
447  348   JMPZ_EX/46                #179=     #179                 ?451                	;0	>>451
448  348   FETCH_CONSTANT/99         #180=     ?0                   297:'STATUS_FAILURE'	;16
449  348   IS_EQUAL/17               #181=     16?18                #180                	;0
450  348   BOOL/52                   #179=     #181                 ?0                  	;0
451  348   JMPZ/43                   ?0        #179                 ?453                	;0	>>453	<<447
452  349   GOTO/253                  ?0        ?250                 ?300                	;0
453  351   ISSET_ISEMPTY_CV/197      #182=     16?18                ?0                  	;33554432	<<451
454  351   JMPZ_EX/46                #182=     #182                 ?458                	;0	>>458
455  351   FETCH_CONSTANT/99         #183=     ?0                   301:'STATUS_EXISTS_NAME'	;16
456  351   IS_EQUAL/17               #184=     16?18                #183                	;0
457  351   BOOL/52                   #182=     #184                 ?0                  	;0
458  351   JMPZ/43                   ?0        #182                 ?460                	;0	>>460	<<454
459  352   GOTO/253                  ?0        ?339                 ?304                	;0
460  354   ISSET_ISEMPTY_CV/197      #185=     16?18                ?0                  	;33554432	<<458
461  354   JMPZ_EX/46                #185=     #185                 ?465                	;0	>>465
462  354   FETCH_CONSTANT/99         #186=     ?0                   305:'STATUS_NO_SOURCES'	;16
463  354   IS_EQUAL/17               #187=     16?18                #186                	;0
464  354   BOOL/52                   #185=     #187                 ?0                  	;0
465  354   BOOL_NOT/13               #188=     #185                 ?0                  	;0	<<461
466  354   JMPZ/43                   ?0        #188                 ?468                	;0	>>468
467  355   GOTO/253                  ?0        ?338                 ?308                	;0
468  357   ECHO/40                   ?0        309:'				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0	<<466
469  358   GOTO/253                  ?0        ?335                 ?310                	;0
470  360   ECHO/40                   ?0        311:'</label>
															</span>
														</div>
													</div>
												</div>
												<div id="import_m3uf_toggle">
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="m3u_file">' ?0                  	;0
471  361   FETCH_DIM_R/81            $189=     16?4                 312:'m3u_file'      	;0
472  361   ECHO/40                   ?0        $189                 ?0                  	;0
473  362   ECHO/40                   ?0        313:'</label>
														<div class="col-md-8">
															<input type="file" id="m3u_file" name="m3u_file" />
														</div>
													</div>
												</div>
												<div id="import_folder_toggle" style="display:none;">
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="import_folder">' ?0                  	;0
474  363   FETCH_DIM_R/81            $190=     16?4                 314:'folder'        	;0
475  363   ECHO/40                   ?0        $190                 ?0                  	;0
476  364   ECHO/40                   ?0        315:'</label>
														<div class="col-md-8 input-group">
															<input type="text" id="import_folder" name="import_folder" class="form-control" value="' ?0                  	;0
477  365   GOTO/253                  ?0        ?391                 ?316                	;0
478  367   ECHO/40                   ?0        317:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
479  368   FETCH_DIM_R/81            $191=     16?4                 318:'prev'          	;0
480  368   ECHO/40                   ?0        $191                 ?0                  	;0
481  369   ECHO/40                   ?0        319:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
482  370   FETCH_DIM_R/81            $192=     16?4                 320:'next'          	;0
483  370   ECHO/40                   ?0        $192                 ?0                  	;0
484  371   ECHO/40                   ?0        321:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="load-balancing">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="servers">' ?0                  	;0
485  372   GOTO/253                  ?0        ?1047                ?322                	;0
486  374   ECHO/40                   ?0        323:'														</div>
													</div>
												</div>
												' ?0                  	;0
487  376   ECHO/40                   ?0        324:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_id">' ?0                  	;0
488  377   FETCH_STATIC_PROP_R/173   $193=     325:'rRequest'       326:'XUI'           	;0
489  377   FETCH_DIM_R/81            $194=     $193                 328:'import'        	;0
490  377   BOOL_NOT/13               #195=     $194                 ?0                  	;0
491  377   JMPZ/43                   ?0        #195                 ?493                	;0	>>493
492  378   GOTO/253                  ?0        ?60                  ?329                	;0
493  380   ECHO/40                   ?0        330:'Fallback '      ?0                  	;0	<<491
494  381   GOTO/253                  ?0        ?60                  ?331                	;0
495  384   GOTO/253                  ?0        ?498                 ?332                	;0
496  386   FETCH_DIM_R/81            $196=     16?0                 333:'stream_display_name'	;0
497  386   ECHO/40                   ?0        $196                 ?0                  	;0
498  388   GOTO/253                  ?0        ?445                 ?334                	;0
499  390   ISSET_ISEMPTY_CV/197      #197=     16?0                 ?0                  	;33554432
500  390   BOOL_NOT/13               #198=     #197                 ?0                  	;0
501  390   JMPZ/43                   ?0        #198                 ?503                	;0	>>503
502  391   GOTO/253                  ?0        ?509                 ?335                	;0
503  393   INIT_FCALL_BY_NAME/59     ?0        ?0                   336:'htmlspecialchars'	;1	<<501
504  393   FETCH_DIM_FUNC_ARG/93     $199=     16?0                 338:'properties'    	;1
505  393   FETCH_DIM_FUNC_ARG/93     $200=     $199                 339:'plot'          	;1
506  393   SEND_VAR_EX/66            ?80       $200                 ?1                  	;0
507  393   DO_FCALL_BY_NAME/131      $201=     ?0                   ?0                  	;0
508  393   ECHO/40                   ?0        $201                 ?0                  	;0
509  395   ECHO/40                   ?0        340:'</textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="cast">' ?0                  	;0
510  396   FETCH_DIM_R/81            $202=     16?4                 341:'cast'          	;0
511  396   ECHO/40                   ?0        $202                 ?0                  	;0
512  397   GOTO/253                  ?0        ?523                 ?342                	;0
513  399   FETCH_DIM_R/81            $203=     16?4                 343:'filename'      	;0
514  399   ECHO/40                   ?0        $203                 ?0                  	;0
515  400   ECHO/40                   ?0        344:'</th>
												</tr>
											</thead>
											<tbody></tbody>
										</table>
									</div>
								</div>
								' ?0                  	;0
516  401   FETCH_STATIC_PROP_IS/176  $204=     345:'rRequest'       346:'XUI'           	;0
517  401   ISSET_ISEMPTY_DIM_OBJ/115 #205=     $204                 348:'import'        	;33554432
518  401   BOOL_NOT/13               #206=     #205                 ?0                  	;0
519  401   JMPZ/43                   ?0        #206                 ?521                	;0	>>521
520  402   GOTO/253                  ?0        ?522                 ?349                	;0
521  404   ECHO/40                   ?0        350:'								<div class="float-right">
									<input id="select_folder" type="button" class="btn btn-info" value="Select" />
								</div>
								' ?0                  	;0	<<519
522  406   GOTO/253                  ?0        ?1057                ?351                	;0
523  408   ECHO/40                   ?0        352:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="cast" name="cast" value="' ?0                  	;0
524  409   ISSET_ISEMPTY_CV/197      #207=     16?0                 ?0                  	;33554432
525  409   BOOL_NOT/13               #208=     #207                 ?0                  	;0
526  409   JMPZ/43                   ?0        #208                 ?528                	;0	>>528
527  410   GOTO/253                  ?0        ?534                 ?353                	;0
528  412   INIT_FCALL_BY_NAME/59     ?0        ?0                   354:'htmlspecialchars'	;1	<<526
529  412   FETCH_DIM_FUNC_ARG/93     $209=     16?0                 356:'properties'    	;1
530  412   FETCH_DIM_FUNC_ARG/93     $210=     $209                 357:'cast'          	;1
531  412   SEND_VAR_EX/66            ?80       $210                 ?1                  	;0
532  412   DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
533  412   ECHO/40                   ?0        $211                 ?0                  	;0
534  414   ECHO/40                   ?0        358:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="director">' ?0                  	;0
535  415   GOTO/253                  ?0        ?681                 ?359                	;0
536  417   ECHO/40                   ?0        360:'" />
							<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />
                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
537  418   FETCH_DIM_R/81            $212=     16?4                 361:'details'       	;0
538  418   ECHO/40                   ?0        $212                 ?0                  	;0
539  419   ECHO/40                   ?0        362:'</span>
										</a>
									</li>
									' ?0                  	;0
540  420   FETCH_STATIC_PROP_IS/176  $213=     363:'rRequest'       364:'XUI'           	;0
541  420   ISSET_ISEMPTY_DIM_OBJ/115 #214=     $213                 366:'import'        	;33554432
542  420   JMPZ/43                   ?0        #214                 ?544                	;0	>>544
543  421   GOTO/253                  ?0        ?802                 ?367                	;0
544  423   ECHO/40                   ?0        368:'									<li class="nav-item">
										<a href="#movie-information" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-movie-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0	<<542
545  424   GOTO/253                  ?0        ?799                 ?369                	;0
546  426   FETCH_DIM_R/81            $215=     16?0                 370:'movie_symlink' 	;0
547  426   IS_EQUAL/17               #216=     $215                 371:1               	;0
548  426   BOOL_NOT/13               #217=     #216                 ?0                  	;0
549  426   JMPZ/43                   ?0        #217                 ?551                	;0	>>551
550  427   GOTO/253                  ?0        ?552                 ?372                	;0
551  429   ECHO/40                   ?0        373:'checked '       ?0                  	;0	<<549
552  432   ECHO/40                   ?0        374:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">' ?0                  	;0
553  433   GOTO/253                  ?0        ?1028                ?375                	;0
554  436   ECHO/40                   ?0        376:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="read_native">' ?0                  	;0
555  437   FETCH_DIM_R/81            $218=     16?4                 377:'native_frames' 	;0
556  437   ECHO/40                   ?0        $218                 ?0                  	;0
557  438   ECHO/40                   ?0        378:'</label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" ' ?0                  	;0
558  439   ISSET_ISEMPTY_CV/197      #219=     16?0                 ?0                  	;33554432
559  439   BOOL_NOT/13               #220=     #219                 ?0                  	;0
560  439   JMPZ/43                   ?0        #220                 ?562                	;0	>>562
561  440   GOTO/253                  ?0        ?201                 ?379                	;0
562  442   GOTO/253                  ?0        ?195                 ?380                	;0	<<560
563  444   INIT_FCALL_BY_NAME/59     ?0        ?0                   381:'E72f42a93714Ba87'	;0
564  444   DO_FCALL_BY_NAME/131      ?193      ?0                   ?0                  	;0
565  447   ASSIGN/38                 ?194      16?3                 383:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Active</strong>',
    'icon' => 'mdi mdi-play',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
  1 => 
  array (
    'id' => 'offline',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-secondary waves-effect waves-light btn-xs\'>Offline</strong>',
    'icon' => 'mdi mdi-stop',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
)	;0
566  448   ASSIGN/38                 ?195      16?19                384:array (
)       	;0
567  449   GOTO/253                  ?0        ?1                   ?385                	;0
568  452   ECHO/40                   ?0        386:'">
														<div class="input-group-append">
															<a href="#file-browser" id="filebrowser-sub" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
														</div>
													</div>
												</div>
												' ?0                  	;0
569  454   ECHO/40                   ?0        387:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="transcode_profile_id">' ?0                  	;0
570  455   FETCH_DIM_R/81            $224=     16?4                 388:'transcoding_profile'	;0
571  455   ECHO/40                   ?0        $224                 ?0                  	;0
572  456   GOTO/253                  ?0        ?980                 ?389                	;0
573  458   INCLUDE_OR_EVAL/73        ?197      390:'session.php'    ?0                  	;2	<<0
574  459   INCLUDE_OR_EVAL/73        ?198      391:'functions.php'  ?0                  	;2
575  460   INIT_FCALL_BY_NAME/59     ?0        ?0                   392:'E6d500e19634d513'	;0
576  460   DO_FCALL_BY_NAME/131      $227=     ?0                   ?0                  	;0
577  460   JMPZ/43                   ?0        $227                 ?579                	;0	>>579
578  461   GOTO/253                  ?0        ?581                 ?394                	;0
579  463   INIT_FCALL_BY_NAME/59     ?0        ?0                   395:'e72f42A93714Ba87'	;0	<<577
580  463   DO_FCALL_BY_NAME/131      ?200      ?0                   ?0                  	;0
581  465   GOTO/253                  ?0        ?203                 ?397                	;0
582  467   FETCH_STATIC_PROP_IS/176  $229=     398:'rRequest'       399:'XUI'           	;0
583  467   ISSET_ISEMPTY_DIM_OBJ/115 #230=     $229                 401:'import'        	;33554432
584  467   JMPZ/43                   ?0        #230                 ?586                	;0	>>586
585  468   GOTO/253                  ?0        ?589                 ?402                	;0
586  470   FETCH_DIM_R/81            $231=     16?4                 403:'add_movie'     	;0	<<584
587  470   ECHO/40                   ?0        $231                 ?0                  	;0
588  471   GOTO/253                  ?0        ?495                 ?404                	;0
589  473   FETCH_DIM_R/81            $232=     16?4                 405:'import_movies' 	;0
590  473   ECHO/40                   ?0        $232                 ?0                  	;0
591  474   GOTO/253                  ?0        ?495                 ?406                	;0
592  476   ECHO/40                   ?0        407:'Edit'           ?0                  	;0
593  478   ECHO/40                   ?0        408:'" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
						<div id="file-browser" class="mfp-hide white-popup-block">
							<div class="col-12">
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="server_id">' ?0                  	;0
594  479   FETCH_DIM_R/81            $233=     16?4                 409:'server_name'   	;0
595  479   ECHO/40                   ?0        $233                 ?0                  	;0
596  480   ECHO/40                   ?0        410:'</label>
									<div class="col-md-8">
										<select id="server_id" class="form-control" data-toggle="select2">
											' ?0                  	;0
597  481   GOTO/253                  ?0        ?398                 ?411                	;0
598  483   ISSET_ISEMPTY_DIM_OBJ/115 #234=     16?0                 412:'id'            	;33554432
599  483   BOOL_NOT/13               #235=     #234                 ?0                  	;0
600  483   JMPZ/43                   ?0        #235                 ?602                	;0	>>602
601  484   GOTO/253                  ?0        ?791                 ?413                	;0
602  486   ECHO/40                   ?0        414:'				'           ?0                  	;0	<<600
603  487   INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'A6Fcc34Ea39454a9'	;1
604  487   FETCH_DIM_FUNC_ARG/93     $236=     16?0                 417:'id'            	;1
605  487   SEND_VAR_EX/66            ?80       $236                 ?1                  	;0
606  487   DO_FCALL_BY_NAME/131      $237=     ?0                   ?0                  	;0
607  487   ASSIGN/38                 ?210      16?20                $237                	;0
608  488   FE_RESET_R/77             $239=     16?20                ?638                	;0
609  488   FE_FETCH_R/78             #240=     $239                 16?21               	;638	>>638	<<637
610  488   ASSIGN/38                 ?213      16?22                #240                	;0
611  489   INIT_FCALL_BY_NAME/59     ?0        ?0                   418:'in_array'      	;2
612  489   INIT_FCALL_BY_NAME/59     ?0        ?0                   420:'intval'        	;1
613  489   SEND_VAR_EX/66            ?80       16?22                ?1                  	;0
614  489   DO_FCALL_BY_NAME/131      $242=     ?0                   ?0                  	;0
615  489   SEND_VAR_NO_REF_EX/50     ?80       $242                 ?1                  	;0
616  489   SEND_VAR_EX/66            ?96       16?19                ?2                  	;0
617  489   DO_FCALL_BY_NAME/131      $243=     ?0                   ?0                  	;0
618  489   BOOL_NOT/13               #244=     $243                 ?0                  	;0
619  489   JMPZ/43                   ?0        #244                 ?622                	;0	>>622
620  490   NOP/0                     ?0        ?0                   ?0                  	;1
621  490   GOTO/253                  ?0        ?637                 ?422                	;0
622  492   ECHO/40                   ?0        423:'                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>' ?0                  	;0	<<619
623  493   FETCH_DIM_R/81            $245=     16?4                 424:'error_on_server'	;0
624  493   ECHO/40                   ?0        $245                 ?0                  	;0
625  494   ECHO/40                   ?0        425:' - '            ?0                  	;0
626  495   FETCH_DIM_R/81            $246=     16?1                 16?22               	;0
627  495   FETCH_DIM_R/81            $247=     $246                 426:'server_name'   	;0
628  495   ECHO/40                   ?0        $247                 ?0                  	;0
629  496   ECHO/40                   ?0        427:'</strong><br/>
                        ' ?0                  	;0
630  497   INIT_FCALL_BY_NAME/59     ?0        ?0                   428:'str_replace'   	;3
631  497   SEND_VAL_EX/116           ?80       430:'
'              ?1                  	;0
632  497   SEND_VAL_EX/116           ?96       431:'<br/>'          ?2                  	;0
633  497   SEND_VAR_EX/66            ?112      16?21                ?3                  	;0
634  497   DO_FCALL_BY_NAME/131      $248=     ?0                   ?0                  	;0
635  497   ECHO/40                   ?0        $248                 ?0                  	;0
636  498   ECHO/40                   ?0        432:'                    </div>
                ' ?0                  	;0
637  500   JMP/42                    ?0        ?609                 ?0                  	;0	>>609
638  500   FE_FREE/127               ?0        $239                 ?0                  	;0	<<608
639  503   GOTO/253                  ?0        ?791                 ?433                	;0
640  505   ECHO/40                   ?0        434:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="movie-information">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="movie_image">' ?0                  	;0
641  506   FETCH_DIM_R/81            $249=     16?4                 435:'poster_url'    	;0
642  506   ECHO/40                   ?0        $249                 ?0                  	;0
643  507   ECHO/40                   ?0        436:'</label>
													<div class="col-md-8 input-group">
														<input type="text" class="form-control" id="movie_image" name="movie_image" value="' ?0                  	;0
644  508   ISSET_ISEMPTY_CV/197      #250=     16?0                 ?0                  	;33554432
645  508   BOOL_NOT/13               #251=     #250                 ?0                  	;0
646  508   JMPZ/43                   ?0        #251                 ?648                	;0	>>648
647  509   GOTO/253                  ?0        ?255                 ?437                	;0
648  511   INIT_FCALL_BY_NAME/59     ?0        ?0                   438:'htmlspecialchars'	;1	<<646
649  511   FETCH_DIM_FUNC_ARG/93     $252=     16?0                 440:'properties'    	;1
650  511   FETCH_DIM_FUNC_ARG/93     $253=     $252                 441:'movie_image'   	;1
651  511   SEND_VAR_EX/66            ?80       $253                 ?1                  	;0
652  511   DO_FCALL_BY_NAME/131      $254=     ?0                   ?0                  	;0
653  511   ECHO/40                   ?0        $254                 ?0                  	;0
654  512   GOTO/253                  ?0        ?255                 ?442                	;0
655  514   ECHO/40                   ?0        443:'selected '      ?0                  	;0
656  517   ECHO/40                   ?0        444:'value="0">'     ?0                  	;0
657  518   FETCH_DIM_R/81            $255=     16?4                 445:'transcoding_disabled'	;0
658  518   ECHO/40                   ?0        $255                 ?0                  	;0
659  519   GOTO/253                  ?0        ?911                 ?446                	;0
660  521   ECHO/40                   ?0        16?12                ?0                  	;0
661  522   ECHO/40                   ?0        447:'" required data-parsley-trigger="change">
														<div class="input-group-append">
															<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
                                                            ' ?0                  	;0
662  523   JMPZ/43                   ?0        16?23                ?664                	;0	>>664
663  524   GOTO/253                  ?0        ?665                 ?448                	;0
664  526   ECHO/40                   ?0        449:'                                                            <a href="javascript:void(0);" id="provider-streams" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-magnify"></i></a>
                                                            ' ?0                  	;0	<<662
665  528   GOTO/253                  ?0        ?486                 ?450                	;0
666  530   ECHO/40                   ?0        451:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="country">' ?0                  	;0
667  531   FETCH_DIM_R/81            $256=     16?4                 452:'country'       	;0
668  531   ECHO/40                   ?0        $256                 ?0                  	;0
669  532   ECHO/40                   ?0        453:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="country" name="country" value="' ?0                  	;0
670  533   ISSET_ISEMPTY_CV/197      #257=     16?0                 ?0                  	;33554432
671  533   BOOL_NOT/13               #258=     #257                 ?0                  	;0
672  533   JMPZ/43                   ?0        #258                 ?674                	;0	>>674
673  534   GOTO/253                  ?0        ?264                 ?454                	;0
674  536   INIT_FCALL_BY_NAME/59     ?0        ?0                   455:'htmlspecialchars'	;1	<<672
675  536   FETCH_DIM_FUNC_ARG/93     $259=     16?0                 457:'properties'    	;1
676  536   FETCH_DIM_FUNC_ARG/93     $260=     $259                 458:'country'       	;1
677  536   SEND_VAR_EX/66            ?80       $260                 ?1                  	;0
678  536   DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
679  536   ECHO/40                   ?0        $261                 ?0                  	;0
680  537   GOTO/253                  ?0        ?264                 ?459                	;0
681  539   FETCH_DIM_R/81            $262=     16?4                 460:'director'      	;0
682  539   ECHO/40                   ?0        $262                 ?0                  	;0
683  540   ECHO/40                   ?0        461:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="director" name="director" value="' ?0                  	;0
684  541   ISSET_ISEMPTY_CV/197      #263=     16?0                 ?0                  	;33554432
685  541   BOOL_NOT/13               #264=     #263                 ?0                  	;0
686  541   JMPZ/43                   ?0        #264                 ?688                	;0	>>688
687  542   GOTO/253                  ?0        ?694                 ?462                	;0
688  544   INIT_FCALL_BY_NAME/59     ?0        ?0                   463:'htmlspecialchars'	;1	<<686
689  544   FETCH_DIM_FUNC_ARG/93     $265=     16?0                 465:'properties'    	;1
690  544   FETCH_DIM_FUNC_ARG/93     $266=     $265                 466:'director'      	;1
691  544   SEND_VAR_EX/66            ?80       $266                 ?1                  	;0
692  544   DO_FCALL_BY_NAME/131      $267=     ?0                   ?0                  	;0
693  544   ECHO/40                   ?0        $267                 ?0                  	;0
694  546   GOTO/253                  ?0        ?840                 ?467                	;0
695  548   ASSIGN/38                 ?240      16?24                468:'Movie'         	;0
696  549   INCLUDE_OR_EVAL/73        ?241      469:'header.php'     ?0                  	;2
697  550   ECHO/40                   ?0        470:'<div class="wrapper boxed-layout"' ?0                  	;0
698  551   FETCH_IS/89               $270=     471:'_SERVER'        ?0                  	;0
699  551   ISSET_ISEMPTY_DIM_OBJ/115 #271=     $270                 472:'HTTP_X_REQUESTED_WITH'	;16777216
700  551   BOOL_NOT/13               #272=     #271                 ?0                  	;0
701  551   JMPZ_EX/46                #272=     #272                 ?709                	;0	>>709
702  551   INIT_FCALL_BY_NAME/59     ?0        ?0                   473:'strtolower'    	;1
703  551   FETCH_FUNC_ARG/92         $273=     475:'_SERVER'        ?0                  	;1
704  551   FETCH_DIM_FUNC_ARG/93     $274=     $273                 476:'HTTP_X_REQUESTED_WITH'	;1
705  551   SEND_VAR_EX/66            ?80       $274                 ?1                  	;0
706  551   DO_FCALL_BY_NAME/131      $275=     ?0                   ?0                  	;0
707  551   IS_EQUAL/17               #276=     $275                 477:'xmlhttprequest'	;0
708  551   BOOL/52                   #272=     #276                 ?0                  	;0
709  551   BOOL_NOT/13               #277=     #272                 ?0                  	;0	<<701
710  551   JMPZ/43                   ?0        #277                 ?712                	;0	>>712
711  552   GOTO/253                  ?0        ?887                 ?478                	;0
712  554   ECHO/40                   ?0        479:' style="display: none;"' ?0                  	;0	<<710
713  555   GOTO/253                  ?0        ?887                 ?480                	;0
714  557   INIT_FCALL_BY_NAME/59     ?0        ?0                   482:'json_decode'   	;2
715  557   FETCH_DIM_FUNC_ARG/93     $279=     16?0                 484:'movie_properties'	;1
716  557   SEND_VAR_EX/66            ?80       $279                 ?1                  	;0
717  557   SEND_VAL_EX/116           ?96       485:true             ?2                  	;0
718  557   DO_FCALL_BY_NAME/131      $280=     ?0                   ?0                  	;0
719  557   ASSIGN_DIM/147            ?250      16?0                 481:'properties'    	;0
720  557   OP_DATA/137               ?0        $280                 ?0                  	;0
721  558   INIT_FCALL_BY_NAME/59     ?0        ?0                   486:'b25f6F50dfA04EB7'	;1
722  558   FETCH_STATIC_PROP_FUNC_ARG/177 $281=     488:'rRequest'       489:'XUI'           	;1
723  558   FETCH_DIM_FUNC_ARG/93     $282=     $281                 491:'id'            	;1
724  558   SEND_VAR_EX/66            ?80       $282                 ?1                  	;0
725  558   DO_FCALL_BY_NAME/131      $283=     ?0                   ?0                  	;0
726  558   ASSIGN/38                 ?256      16?25                $283                	;0
727  559   FE_RESET_R/77             $285=     16?1                 ?775                	;0
728  559   FE_FETCH_R/78             ?0        $285                 16?2                	;775	>>775	<<774
729  560   NOP/0                     ?0        ?0                   ?0                  	;1
730  560   GOTO/253                  ?0        ?731                 ?492                	;0
731  562   FETCH_DIM_R/81            $286=     16?2                 493:'direct_source' 	;0
732  562   IS_EQUAL/17               #287=     $286                 494:0               	;0
733  562   JMPZ_EX/46                #287=     #287                 ?737                	;0	>>737
734  562   FETCH_DIM_R/81            $288=     16?2                 495:'stream_status' 	;0
735  562   IS_EQUAL/17               #289=     $288                 496:1               	;0
736  562   BOOL/52                   #287=     #289                 ?0                  	;0
737  562   BOOL_NOT/13               #290=     #287                 ?0                  	;0	<<733
738  562   JMPZ/43                   ?0        #290                 ?741                	;0	>>741
739  563   NOP/0                     ?0        ?0                   ?0                  	;1
740  563   GOTO/253                  ?0        ?747                 ?497                	;0
741  565   INIT_FCALL_BY_NAME/59     ?0        ?0                   498:'intval'        	;1	<<738
742  565   FETCH_DIM_FUNC_ARG/93     $292=     16?2                 500:'id'            	;1
743  565   SEND_VAR_EX/66            ?80       $292                 ?1                  	;0
744  565   DO_FCALL_BY_NAME/131      $293=     ?0                   ?0                  	;0
745  565   ASSIGN_DIM/147            ?263      16?19                ?4397406            	;0
746  565   OP_DATA/137               ?0        $293                 ?0                  	;0
747  567   INIT_FCALL_BY_NAME/59     ?0        ?0                   501:'intval'        	;1
748  567   FETCH_DIM_FUNC_ARG/93     $294=     16?2                 503:'id'            	;1
749  567   SEND_VAR_EX/66            ?80       $294                 ?1                  	;0
750  567   DO_FCALL_BY_NAME/131      $295=     ?0                   ?0                  	;0
751  567   ISSET_ISEMPTY_DIM_OBJ/115 #296=     16?25                $295                	;33554432
752  567   JMPZ/43                   ?0        #296                 ?755                	;0	>>755
753  568   NOP/0                     ?0        ?0                   ?0                  	;1
754  568   GOTO/253                  ?0        ?762                 ?504                	;0
755  570   ASSIGN/38                 ?269      16?26                505:'offline'       	;0	<<752
756  571   NOP/0                     ?0        ?0                   ?0                  	;1
757  571   GOTO/253                  ?0        ?760                 ?506                	;0
758  574   NOP/0                     ?0        ?0                   ?0                  	;1
759  574   GOTO/253                  ?0        ?774                 ?507                	;0
760  576   NOP/0                     ?0        ?0                   ?0                  	;1
761  576   GOTO/253                  ?0        ?763                 ?508                	;0
762  578   ASSIGN/38                 ?270      16?26                509:'source'        	;0
763  580   FETCH_DIM_R/81            $300=     16?2                 510:'id'            	;0
764  580   INIT_ARRAY/71             #301=     $300                 511:'id'            	;22
765  580   ADD_ARRAY_ELEMENT/72      #301=     16?26                512:'parent'        	;0
766  580   FETCH_DIM_R/81            $302=     16?2                 513:'server_name'   	;0
767  580   ADD_ARRAY_ELEMENT/72      #301=     $302                 514:'text'          	;0
768  580   ADD_ARRAY_ELEMENT/72      #301=     515:'mdi mdi-server-network' 516:'icon'          	;0
769  580   ADD_ARRAY_ELEMENT/72      #301=     517:array (
  'opened' => true,
) 518:'state'         	;0
770  580   ASSIGN_DIM/147            ?271      16?3                 ?2670194944         	;0
771  580   OP_DATA/137               ?0        #301                 ?0                  	;0
772  581   NOP/0                     ?0        ?0                   ?0                  	;1
773  581   GOTO/253                  ?0        ?758                 ?519                	;0
774  582   JMP/42                    ?0        ?728                 ?0                  	;0	>>728
775  582   FE_FREE/127               ?0        $285                 ?0                  	;0	<<727
776  586   GOTO/253                  ?0        ?695                 ?520                	;0
777  588   ISSET_ISEMPTY_CV/197      #303=     16?0                 ?0                  	;33554432
778  588   BOOL_NOT/13               #304=     #303                 ?0                  	;0
779  588   JMPZ/43                   ?0        #304                 ?781                	;0	>>781
780  589   GOTO/253                  ?0        ?787                 ?521                	;0
781  591   INIT_FCALL_BY_NAME/59     ?0        ?0                   522:'htmlspecialchars'	;1	<<779
782  591   FETCH_DIM_FUNC_ARG/93     $305=     16?0                 524:'properties'    	;1
783  591   FETCH_DIM_FUNC_ARG/93     $306=     $305                 525:'episode_run_time'	;1
784  591   SEND_VAR_EX/66            ?80       $306                 ?1                  	;0
785  591   DO_FCALL_BY_NAME/131      $307=     ?0                   ?0                  	;0
786  591   ECHO/40                   ?0        $307                 ?0                  	;0
787  593   ECHO/40                   ?0        526:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="youtube_trailer">' ?0                  	;0
788  594   FETCH_DIM_R/81            $308=     16?4                 527:'youtube_trailer'	;0
789  594   ECHO/40                   ?0        $308                 ?0                  	;0
790  595   GOTO/253                  ?0        ?302                 ?528                	;0
791  598   ECHO/40                   ?0        529:'				<div class="card">
					<div class="card-body">
						<form' ?0                  	;0
792  599   FETCH_STATIC_PROP_IS/176  $309=     530:'rRequest'       531:'XUI'           	;0
793  599   ISSET_ISEMPTY_DIM_OBJ/115 #310=     $309                 533:'import'        	;33554432
794  599   BOOL_NOT/13               #311=     #310                 ?0                  	;0
795  599   JMPZ/43                   ?0        #311                 ?797                	;0	>>797
796  600   GOTO/253                  ?0        ?798                 ?534                	;0
797  602   ECHO/40                   ?0        535:' enctype="multipart/form-data"' ?0                  	;0	<<795
798  604   GOTO/253                  ?0        ?822                 ?536                	;0
799  606   FETCH_DIM_R/81            $312=     16?4                 537:'information'   	;0
800  606   ECHO/40                   ?0        $312                 ?0                  	;0
801  607   ECHO/40                   ?0        538:'</span>
										</a>
									</li>
									' ?0                  	;0
802  609   ECHO/40                   ?0        539:'									<li class="nav-item">
										<a href="#advanced-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
803  610   FETCH_DIM_R/81            $313=     16?4                 540:'advanced'      	;0
804  610   ECHO/40                   ?0        $313                 ?0                  	;0
805  611   GOTO/253                  ?0        ?955                 ?541                	;0
806  613   INIT_FCALL_BY_NAME/59     ?0        ?0                   542:'htmlspecialchars'	;1
807  613   FETCH_DIM_FUNC_ARG/93     $314=     16?0                 544:'stream_display_name'	;1
808  613   SEND_VAR_EX/66            ?80       $314                 ?1                  	;0
809  613   DO_FCALL_BY_NAME/131      $315=     ?0                   ?0                  	;0
810  613   ECHO/40                   ?0        $315                 ?0                  	;0
811  615   ECHO/40                   ?0        545:'" required data-parsley-trigger="change">
													</div>
                                                    <div class="col-md-2">
                                                        <input type="text" placeholder="Year" class="form-control text-center" id="year" name="year" value="' ?0                  	;0
812  616   ISSET_ISEMPTY_CV/197      #316=     16?0                 ?0                  	;33554432
813  616   BOOL_NOT/13               #317=     #316                 ?0                  	;0
814  616   JMPZ/43                   ?0        #317                 ?816                	;0	>>816
815  617   GOTO/253                  ?0        ?1014                ?546                	;0
816  619   INIT_FCALL_BY_NAME/59     ?0        ?0                   547:'htmlspecialchars'	;1	<<814
817  619   FETCH_DIM_FUNC_ARG/93     $318=     16?0                 549:'year'          	;1
818  619   SEND_VAR_EX/66            ?80       $318                 ?1                  	;0
819  619   DO_FCALL_BY_NAME/131      $319=     ?0                   ?0                  	;0
820  619   ECHO/40                   ?0        $319                 ?0                  	;0
821  620   GOTO/253                  ?0        ?1014                ?550                	;0
822  622   ECHO/40                   ?0        551:' action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
823  623   ISSET_ISEMPTY_DIM_OBJ/115 #320=     16?0                 552:'id'            	;33554432
824  623   BOOL_NOT/13               #321=     #320                 ?0                  	;0
825  623   JMPZ/43                   ?0        #321                 ?827                	;0	>>827
826  624   GOTO/253                  ?0        ?1059                ?553                	;0
827  626   ECHO/40                   ?0        554:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<825
828  627   FETCH_DIM_R/81            $322=     16?0                 555:'id'            	;0
829  627   ECHO/40                   ?0        $322                 ?0                  	;0
830  628   ECHO/40                   ?0        556:'" />
							'   ?0                  	;0
831  629   GOTO/253                  ?0        ?1059                ?557                	;0
832  631   FETCH_DIM_R/81            $323=     16?0                 558:'remove_subtitles'	;0
833  631   IS_EQUAL/17               #324=     $323                 559:1               	;0
834  631   BOOL_NOT/13               #325=     #324                 ?0                  	;0
835  631   JMPZ/43                   ?0        #325                 ?837                	;0	>>837
836  632   GOTO/253                  ?0        ?838                 ?560                	;0
837  634   ECHO/40                   ?0        561:'checked '       ?0                  	;0	<<835
838  637   ECHO/40                   ?0        562:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
												' ?0                  	;0
839  638   GOTO/253                  ?0        ?230                 ?563                	;0
840  640   ECHO/40                   ?0        564:'">
													</div>
													<label class="col-md-2 col-form-label" for="genre">' ?0                  	;0
841  641   FETCH_DIM_R/81            $326=     16?4                 565:'genres'        	;0
842  641   ECHO/40                   ?0        $326                 ?0                  	;0
843  642   ECHO/40                   ?0        566:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="genre" name="genre" value="' ?0                  	;0
844  643   ISSET_ISEMPTY_CV/197      #327=     16?0                 ?0                  	;33554432
845  643   BOOL_NOT/13               #328=     #327                 ?0                  	;0
846  643   JMPZ/43                   ?0        #328                 ?848                	;0	>>848
847  644   GOTO/253                  ?0        ?109                 ?567                	;0
848  646   INIT_FCALL_BY_NAME/59     ?0        ?0                   568:'htmlspecialchars'	;1	<<846
849  646   FETCH_DIM_FUNC_ARG/93     $329=     16?0                 570:'properties'    	;1
850  646   FETCH_DIM_FUNC_ARG/93     $330=     $329                 571:'genre'         	;1
851  646   SEND_VAR_EX/66            ?80       $330                 ?1                  	;0
852  646   DO_FCALL_BY_NAME/131      $331=     ?0                   ?0                  	;0
853  646   ECHO/40                   ?0        $331                 ?0                  	;0
854  647   GOTO/253                  ?0        ?109                 ?572                	;0
855  649   ECHO/40                   ?0        573:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="advanced-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="direct_source">' ?0                  	;0
856  650   FETCH_DIM_R/81            $332=     16?4                 574:'direct_source' 	;0
857  650   ECHO/40                   ?0        $332                 ?0                  	;0
858  651   ECHO/40                   ?0        575:' <i title="'    ?0                  	;0
859  652   FETCH_DIM_R/81            $333=     16?4                 576:'episode_tooltip_1'	;0
860  652   ECHO/40                   ?0        $333                 ?0                  	;0
861  653   ECHO/40                   ?0        577:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_source" id="direct_source" type="checkbox" ' ?0                  	;0
862  654   GOTO/253                  ?0        ?280                 ?578                	;0
863  656   ECHO/40                   ?0        579:' <i title="'    ?0                  	;0
864  657   FETCH_DIM_R/81            $334=     16?4                 580:'episode_tooltip_6'	;0
865  657   ECHO/40                   ?0        $334                 ?0                  	;0
866  658   ECHO/40                   ?0        581:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8 input-group">
														<input type="text" id="movie_subtitles" name="movie_subtitles" class="form-control" value="' ?0                  	;0
867  659   ISSET_ISEMPTY_CV/197      #335=     16?0                 ?0                  	;33554432
868  659   BOOL_NOT/13               #336=     #335                 ?0                  	;0
869  659   JMPZ/43                   ?0        #336                 ?871                	;0	>>871
870  660   GOTO/253                  ?0        ?568                 ?582                	;0
871  662   INIT_FCALL_BY_NAME/59     ?0        ?0                   583:'htmlspecialchars'	;1	<<869
872  662   SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
873  662   DO_FCALL_BY_NAME/131      $337=     ?0                   ?0                  	;0
874  662   ECHO/40                   ?0        $337                 ?0                  	;0
875  663   GOTO/253                  ?0        ?568                 ?585                	;0
876  665   FETCH_DIM_R/81            $338=     16?16                586:'location'      	;0
877  665   CONCAT/8                  #339=     587:'s:'             $338                	;0
878  665   CONCAT/8                  #340=     #339                 588:':'             	;0
879  665   FETCH_DIM_R/81            $341=     16?16                589:'files'         	;0
880  665   FETCH_DIM_R/81            $342=     $341                 590:0               	;0
881  665   CONCAT/8                  #343=     #340                 $342                	;0
882  665   ASSIGN/38                 ?316      16?15                #343                	;0
883  668   ECHO/40                   ?0        591:'												<div class="form-group row mb-4 stream-url">
													<label class="col-md-4 col-form-label" for="movie_subtitles">' ?0                  	;0
884  669   FETCH_DIM_R/81            $345=     16?4                 592:'subtitle_location'	;0
885  669   ECHO/40                   ?0        $345                 ?0                  	;0
886  670   GOTO/253                  ?0        ?863                 ?593                	;0
887  673   ECHO/40                   ?0        594:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
888  674   INCLUDE_OR_EVAL/73        ?318      595:'topbar.php'     ?0                  	;2
889  675   ECHO/40                   ?0        596:'					</div>
					<h4 class="page-title">' ?0                  	;0
890  676   ISSET_ISEMPTY_DIM_OBJ/115 #347=     16?0                 597:'id'            	;33554432
891  676   JMPZ/43                   ?0        #347                 ?893                	;0	>>893
892  677   GOTO/253                  ?0        ?496                 ?598                	;0
893  679   GOTO/253                  ?0        ?582                 ?599                	;0	<<891
894  681   ECHO/40                   ?0        600:'...">
										<div class="input-group-append">
											<button class="btn btn-warning waves-effect waves-light" type="button" onClick="clearSearch()"><i class="mdi mdi-close"></i></button>
											<button class="btn btn-primary waves-effect waves-light" type="button" id="doSearch"><i class="mdi mdi-magnify"></i></button>
										</div>
									</div>
								</div>
								' ?0                  	;0
895  683   ECHO/40                   ?0        601:'								<div class="form-group row mb-4">
									<div class="col-md-6">
										<table id="datatable" class="table">
											<thead>
												<tr>
													<th width="20px"></th>
													<th>' ?0                  	;0
896  684   FETCH_DIM_R/81            $348=     16?4                 602:'directory'     	;0
897  684   ECHO/40                   ?0        $348                 ?0                  	;0
898  685   ECHO/40                   ?0        603:'</th>
												</tr>
											</thead>
											<tbody></tbody>
										</table>
									</div>
									<div class="col-md-6">
										<table id="datatable-files" class="table">
											<thead>
												<tr>
													<th width="20px"></th>
													<th>' ?0                  	;0
899  686   GOTO/253                  ?0        ?513                 ?604                	;0
900  688   FETCH_DIM_R/81            $349=     16?4                 605:'create_symlink'	;0
901  688   ECHO/40                   ?0        $349                 ?0                  	;0
902  689   ECHO/40                   ?0        606:' <i title="'    ?0                  	;0
903  690   FETCH_DIM_R/81            $350=     16?4                 607:'episode_tooltip_2'	;0
904  690   ECHO/40                   ?0        $350                 ?0                  	;0
905  691   ECHO/40                   ?0        608:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="movie_symlink" id="movie_symlink" type="checkbox" ' ?0                  	;0
906  692   ISSET_ISEMPTY_CV/197      #351=     16?0                 ?0                  	;33554432
907  692   BOOL_NOT/13               #352=     #351                 ?0                  	;0
908  692   JMPZ/43                   ?0        #352                 ?910                	;0	>>910
909  693   GOTO/253                  ?0        ?552                 ?609                	;0
910  695   GOTO/253                  ?0        ?546                 ?610                	;0	<<908
911  697   ECHO/40                   ?0        611:'</option>
															' ?0                  	;0
912  698   FE_RESET_R/77             $353=     16?14                ?950                	;0
913  698   FE_FETCH_R/78             ?0        $353                 16?27               	;950	>>950	<<949
914  699   NOP/0                     ?0        ?0                   ?0                  	;1
915  699   GOTO/253                  ?0        ?916                 ?612                	;0
916  701   ECHO/40                   ?0        613:'															<option ' ?0                  	;0
917  702   ISSET_ISEMPTY_CV/197      #354=     16?0                 ?0                  	;33554432
918  702   BOOL_NOT/13               #355=     #354                 ?0                  	;0
919  702   JMPZ/43                   ?0        #355                 ?922                	;0	>>922
920  703   NOP/0                     ?0        ?0                   ?0                  	;1
921  703   GOTO/253                  ?0        ?941                 ?614                	;0
922  705   INIT_FCALL_BY_NAME/59     ?0        ?0                   615:'intval'        	;1	<<919
923  705   FETCH_DIM_FUNC_ARG/93     $356=     16?0                 617:'transcode_profile_id'	;1
924  705   SEND_VAR_EX/66            ?80       $356                 ?1                  	;0
925  705   DO_FCALL_BY_NAME/131      $357=     ?0                   ?0                  	;0
926  705   INIT_FCALL_BY_NAME/59     ?0        ?0                   618:'intval'        	;1
927  705   FETCH_DIM_FUNC_ARG/93     $358=     16?27                620:'profile_id'    	;1
928  705   SEND_VAR_EX/66            ?80       $358                 ?1                  	;0
929  705   DO_FCALL_BY_NAME/131      $359=     ?0                   ?0                  	;0
930  705   IS_EQUAL/17               #360=     $357                 $359                	;0
931  705   BOOL_NOT/13               #361=     #360                 ?0                  	;0
932  705   JMPZ/43                   ?0        #361                 ?935                	;0	>>935
933  706   NOP/0                     ?0        ?0                   ?0                  	;1
934  706   GOTO/253                  ?0        ?936                 ?621                	;0
935  708   ECHO/40                   ?0        622:'selected '      ?0                  	;0	<<932
936  710   NOP/0                     ?0        ?0                   ?0                  	;1
937  710   GOTO/253                  ?0        ?941                 ?623                	;0
938  712   ECHO/40                   ?0        624:'</option>
															' ?0                  	;0
939  714   NOP/0                     ?0        ?0                   ?0                  	;1
940  714   GOTO/253                  ?0        ?949                 ?625                	;0
941  717   ECHO/40                   ?0        626:'value="'        ?0                  	;0
942  718   FETCH_DIM_R/81            $362=     16?27                627:'profile_id'    	;0
943  718   ECHO/40                   ?0        $362                 ?0                  	;0
944  719   ECHO/40                   ?0        628:'">'             ?0                  	;0
945  720   FETCH_DIM_R/81            $363=     16?27                629:'profile_name'  	;0
946  720   ECHO/40                   ?0        $363                 ?0                  	;0
947  721   NOP/0                     ?0        ?0                   ?0                  	;1
948  721   GOTO/253                  ?0        ?938                 ?630                	;0
949  722   JMP/42                    ?0        ?913                 ?0                  	;0	>>913
950  722   FE_FREE/127               ?0        $353                 ?0                  	;0	<<912
951  725   ECHO/40                   ?0        631:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="target_container">' ?0                  	;0
952  726   FETCH_DIM_R/81            $364=     16?4                 632:'target_container'	;0
953  726   ECHO/40                   ?0        $364                 ?0                  	;0
954  727   GOTO/253                  ?0        ?356                 ?633                	;0
955  729   ECHO/40                   ?0        634:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
956  730   FETCH_DIM_R/81            $365=     16?4                 635:'server'        	;0
957  730   ECHO/40                   ?0        $365                 ?0                  	;0
958  731   ECHO/40                   ?0        636:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												' ?0                  	;0
959  732   FETCH_STATIC_PROP_IS/176  $366=     637:'rRequest'       638:'XUI'           	;0
960  732   ISSET_ISEMPTY_DIM_OBJ/115 #367=     $366                 640:'import'        	;33554432
961  732   BOOL_NOT/13               #368=     #367                 ?0                  	;0
962  732   JMPZ/43                   ?0        #368                 ?964                	;0	>>964
963  733   GOTO/253                  ?0        ?1039                ?641                	;0
964  735   ECHO/40                   ?0        642:'												<p class="sub-header">
                                                    Importing Movies using this method will parse your M3U or folder and push the individual episodes through Watch Folder. If you have category and bouquet allocation set up in Watch Folder Settings then they will be used here too.
                                                </p>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="import_type">' ?0                  	;0	<<962
965  736   GOTO/253                  ?0        ?271                 ?643                	;0
966  738   FETCH_DIM_R/81            $369=     16?4                 644:'rating'        	;0
967  738   ECHO/40                   ?0        $369                 ?0                  	;0
968  739   ECHO/40                   ?0        645:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="rating" name="rating" value="' ?0                  	;0
969  740   ISSET_ISEMPTY_CV/197      #370=     16?0                 ?0                  	;33554432
970  740   BOOL_NOT/13               #371=     #370                 ?0                  	;0
971  740   JMPZ/43                   ?0        #371                 ?973                	;0	>>973
972  741   GOTO/253                  ?0        ?979                 ?646                	;0
973  743   INIT_FCALL_BY_NAME/59     ?0        ?0                   647:'htmlspecialchars'	;1	<<971
974  743   FETCH_DIM_FUNC_ARG/93     $372=     16?0                 649:'properties'    	;1
975  743   FETCH_DIM_FUNC_ARG/93     $373=     $372                 650:'rating'        	;1
976  743   SEND_VAR_EX/66            ?80       $373                 ?1                  	;0
977  743   DO_FCALL_BY_NAME/131      $374=     ?0                   ?0                  	;0
978  743   ECHO/40                   ?0        $374                 ?0                  	;0
979  745   GOTO/253                  ?0        ?666                 ?651                	;0
980  747   ECHO/40                   ?0        652:' <i title="'    ?0                  	;0
981  748   FETCH_DIM_R/81            $375=     16?4                 653:'episode_tooltip_7'	;0
982  748   ECHO/40                   ?0        $375                 ?0                  	;0
983  749   ECHO/40                   ?0        654:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option ' ?0                  	;0
984  750   ISSET_ISEMPTY_CV/197      #376=     16?0                 ?0                  	;33554432
985  750   BOOL_NOT/13               #377=     #376                 ?0                  	;0
986  750   JMPZ/43                   ?0        #377                 ?988                	;0	>>988
987  751   GOTO/253                  ?0        ?656                 ?655                	;0
988  753   INIT_FCALL_BY_NAME/59     ?0        ?0                   656:'intval'        	;1	<<986
989  753   FETCH_DIM_FUNC_ARG/93     $378=     16?0                 658:'transcode_profile_id'	;1
990  753   SEND_VAR_EX/66            ?80       $378                 ?1                  	;0
991  753   DO_FCALL_BY_NAME/131      $379=     ?0                   ?0                  	;0
992  753   IS_EQUAL/17               #380=     $379                 659:0               	;0
993  753   BOOL_NOT/13               #381=     #380                 ?0                  	;0
994  753   JMPZ/43                   ?0        #381                 ?996                	;0	>>996
995  754   GOTO/253                  ?0        ?656                 ?660                	;0
996  756   GOTO/253                  ?0        ?655                 ?661                	;0	<<994
997  758   INIT_FCALL_BY_NAME/59     ?0        ?0                   662:'htmlspecialchars'	;1
998  758   FETCH_DIM_FUNC_ARG/93     $382=     16?0                 664:'properties'    	;1
999  758   FETCH_DIM_FUNC_ARG/93     $383=     $382                 665:'release_date'  	;1
1000 758   SEND_VAR_EX/66            ?80       $383                 ?1                  	;0
1001 758   DO_FCALL_BY_NAME/131      $384=     ?0                   ?0                  	;0
1002 758   ECHO/40                   ?0        $384                 ?0                  	;0
1003 760   ECHO/40                   ?0        666:'">
													</div>
													<label class="col-md-2 col-form-label" for="episode_run_time">' ?0                  	;0
1004 761   FETCH_DIM_R/81            $385=     16?4                 667:'runtime'       	;0
1005 761   ECHO/40                   ?0        $385                 ?0                  	;0
1006 762   ECHO/40                   ?0        668:'</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="' ?0                  	;0
1007 763   GOTO/253                  ?0        ?777                 ?669                	;0
1008 766   FETCH_DIM_R/81            $386=     16?4                 670:'reprocess_on_edit'	;0
1009 766   ECHO/40                   ?0        $386                 ?0                  	;0
1010 768   ECHO/40                   ?0        671:'</label>
													<div class="col-md-2">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
1011 769   FETCH_DIM_R/81            $387=     16?4                 672:'prev'          	;0
1012 769   ECHO/40                   ?0        $387                 ?0                  	;0
1013 770   GOTO/253                  ?0        ?165                 ?673                	;0
1014 773   ECHO/40                   ?0        674:'">
                                                    </div>
												</div>
												' ?0                  	;0
1015 774   INIT_FCALL_BY_NAME/59     ?0        ?0                   675:'strlen'        	;1
1016 774   FETCH_STATIC_PROP_FUNC_ARG/177 $388=     677:'rSettings'      678:'XUI'           	;1
1017 774   FETCH_DIM_FUNC_ARG/93     $389=     $388                 680:'tmdb_api_key'  	;1
1018 774   SEND_VAR_EX/66            ?80       $389                 ?1                  	;0
1019 774   DO_FCALL_BY_NAME/131      $390=     ?0                   ?0                  	;0
1020 774   IS_SMALLER/19             #391=     681:0                $390                	;0
1021 774   BOOL_NOT/13               #392=     #391                 ?0                  	;0
1022 774   JMPZ/43                   ?0        #392                 ?1024               	;0	>>1024
1023 775   GOTO/253                  ?0        ?346                 ?682                	;0
1024 777   ECHO/40                   ?0        683:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="tmdb_search">' ?0                  	;0	<<1022
1025 778   FETCH_DIM_R/81            $393=     16?4                 684:'tmdb_results'  	;0
1026 778   ECHO/40                   ?0        $393                 ?0                  	;0
1027 779   GOTO/253                  ?0        ?31                  ?685                	;0
1028 781   FETCH_DIM_R/81            $394=     16?4                 686:'remove_existing_subtitles'	;0
1029 781   ECHO/40                   ?0        $394                 ?0                  	;0
1030 782   ECHO/40                   ?0        687:' <i title="'    ?0                  	;0
1031 783   FETCH_DIM_R/81            $395=     16?4                 688:'episode_tooltip_3'	;0
1032 783   ECHO/40                   ?0        $395                 ?0                  	;0
1033 784   ECHO/40                   ?0        689:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ' ?0                  	;0
1034 785   ISSET_ISEMPTY_CV/197      #396=     16?0                 ?0                  	;33554432
1035 785   BOOL_NOT/13               #397=     #396                 ?0                  	;0
1036 785   JMPZ/43                   ?0        #397                 ?1038               	;0	>>1038
1037 786   GOTO/253                  ?0        ?838                 ?690                	;0
1038 788   GOTO/253                  ?0        ?832                 ?691                	;0	<<1036
1039 791   ECHO/40                   ?0        692:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_display_name">' ?0                  	;0
1040 792   FETCH_DIM_R/81            $398=     16?4                 693:'movie_name'    	;0
1041 792   ECHO/40                   ?0        $398                 ?0                  	;0
1042 793   ECHO/40                   ?0        694:'</label>
													<div class="col-md-6">
                                                        <input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="' ?0                  	;0
1043 794   ISSET_ISEMPTY_CV/197      #399=     16?0                 ?0                  	;33554432
1044 794   JMPZ/43                   ?0        #399                 ?1046               	;0	>>1046
1045 795   GOTO/253                  ?0        ?194                 ?695                	;0
1046 797   GOTO/253                  ?0        ?180                 ?696                	;0	<<1044
1047 799   FETCH_DIM_R/81            $400=     16?4                 697:'server_tree'   	;0
1048 799   ECHO/40                   ?0        $400                 ?0                  	;0
1049 800   ECHO/40                   ?0        698:'</label>
													<div class="col-md-8">
														<div id="server_tree"></div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="restart_on_edit">' ?0                  	;0
1050 801   ISSET_ISEMPTY_CV/197      #401=     16?0                 ?0                  	;33554432
1051 801   JMPZ/43                   ?0        #401                 ?1053               	;0	>>1053
1052 802   GOTO/253                  ?0        ?1008                ?699                	;0
1053 804   FETCH_DIM_R/81            $402=     16?4                 700:'process_movie' 	;0	<<1051
1054 804   ECHO/40                   ?0        $402                 ?0                  	;0
1055 805   GOTO/253                  ?0        ?1010                ?701                	;0
1056 806   GOTO/253                  ?0        ?1008                ?702                	;0
1057 808   ECHO/40                   ?0        703:'							</div> 
						</div>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
1058 809   GOTO/253                  ?0        ?1086                ?704                	;0
1059 812   ECHO/40                   ?0        705:'							<input type="hidden" id="tmdb_id" name="tmdb_id" value="' ?0                  	;0
1060 813   ISSET_ISEMPTY_CV/197      #403=     16?0                 ?0                  	;33554432
1061 813   BOOL_NOT/13               #404=     #403                 ?0                  	;0
1062 813   JMPZ/43                   ?0        #404                 ?1064               	;0	>>1064
1063 814   GOTO/253                  ?0        ?1073                ?706                	;0
1064 816   INIT_FCALL_BY_NAME/59     ?0        ?0                   707:'htmlspecialchars'	;1	<<1062
1065 816   FETCH_DIM_R/81            $405=     16?0                 709:'tmdb_id'       	;0
1066 816   JMP_SET/152               #406=     $405                 ?1070               	;0
1067 816   FETCH_DIM_R/81            $407=     16?0                 710:'properties'    	;0
1068 816   FETCH_DIM_R/81            $408=     $407                 711:'tmdb_id'       	;0
1069 816   QM_ASSIGN/22              #406=     $408                 ?0                  	;0
1070 816   SEND_VAL_EX/116           ?80       #406                 ?1                  	;0
1071 816   DO_FCALL_BY_NAME/131      $409=     ?0                   ?0                  	;0
1072 816   ECHO/40                   ?0        $409                 ?0                  	;0
1073 818   GOTO/253                  ?0        ?536                 ?712                	;0
1074 820   INIT_FCALL_BY_NAME/59     ?0        ?0                   713:'json_decode'   	;2
1075 820   FETCH_DIM_FUNC_ARG/93     $410=     16?0                 715:'stream_source' 	;1
1076 820   SEND_VAR_EX/66            ?80       $410                 ?1                  	;0
1077 820   SEND_VAL_EX/116           ?96       716:true             ?2                  	;0
1078 820   DO_FCALL_BY_NAME/131      $411=     ?0                   ?0                  	;0
1079 820   FETCH_DIM_R/81            $412=     $411                 717:0               	;0
1080 820   ASSIGN/38                 ?385      16?12                $412                	;0
1081 822   ECHO/40                   ?0        718:'												<div class="form-group row mb-4 stream-url">
													<label class="col-md-4 col-form-label" for="stream_source">' ?0                  	;0
1082 823   FETCH_DIM_R/81            $414=     16?4                 719:'movie_path_or_url'	;0
1083 823   ECHO/40                   ?0        $414                 ?0                  	;0
1084 824   ECHO/40                   ?0        720:'</label>
													<div class="col-md-8 input-group">
														<input type="text" id="stream_source" name="stream_source" class="form-control" value="' ?0                  	;0
1085 825   GOTO/253                  ?0        ?660                 ?721                	;0
1086 827   INCLUDE_OR_EVAL/73        ?387      722:'footer.php'     ?0                  	;2
1087 828   NOP/0                     ?0        723:1                ?0                  	;4294967295
*/

?>