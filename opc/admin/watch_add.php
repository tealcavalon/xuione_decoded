<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?780                 ?0                  	;0	>>780
1   5    ECHO/40                   ?0        1:'value="0">Do Not Use</option>
															' ?0                  	;0
2   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'F769E3F0c739d1a6'	;1
3   6    SEND_VAL_EX/116           ?80       4:'movie'            ?1                  	;0
4   6    DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
5   6    FE_RESET_R/77             $16=      $15                  ?46                 	;0
6   6    FE_FETCH_R/78             ?0        $16                  16?0                	;46	>>46	<<45
7   7    NOP/0                     ?0        ?0                   ?0                  	;1
8   7    GOTO/253                  ?0        ?23                  ?5                  	;0
9   9    ECHO/40                   ?0        6:'</option>
															' ?0                  	;0
10  11   NOP/0                     ?0        ?0                   ?0                  	;1
11  11   GOTO/253                  ?0        ?45                  ?7                  	;0
12  14   ECHO/40                   ?0        8:'value="'          ?0                  	;0
13  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'intval'          	;1
14  15   FETCH_DIM_FUNC_ARG/93     $17=      16?0                 11:'id'             	;1
15  15   SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
16  15   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
17  15   ECHO/40                   ?0        $18                  ?0                  	;0
18  16   ECHO/40                   ?0        12:'">'              ?0                  	;0
19  17   FETCH_DIM_R/81            $19=      16?0                 13:'category_name'  	;0
20  17   ECHO/40                   ?0        $19                  ?0                  	;0
21  18   NOP/0                     ?0        ?0                   ?0                  	;1
22  18   GOTO/253                  ?0        ?9                   ?14                 	;0
23  20   ECHO/40                   ?0        15:'																<option ' ?0                  	;0
24  21   ISSET_ISEMPTY_CV/197      #20=      16?1                 ?0                  	;33554432
25  21   BOOL_NOT/13               #21=      #20                  ?0                  	;0
26  21   JMPZ/43                   ?0        #21                  ?29                 	;0	>>29
27  22   NOP/0                     ?0        ?0                   ?0                  	;1
28  22   GOTO/253                  ?0        ?12                  ?16                 	;0
29  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'intval'         	;1	<<26
30  24   FETCH_DIM_FUNC_ARG/93     $22=      16?1                 19:'fb_category_id' 	;1
31  24   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
32  24   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
33  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1
34  24   FETCH_DIM_FUNC_ARG/93     $24=      16?0                 22:'id'             	;1
35  24   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
36  24   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
37  24   IS_EQUAL/17               #26=      $23                  $25                 	;0
38  24   BOOL_NOT/13               #27=      #26                  ?0                  	;0
39  24   JMPZ/43                   ?0        #27                  ?42                 	;0	>>42
40  25   NOP/0                     ?0        ?0                   ?0                  	;1
41  25   GOTO/253                  ?0        ?43                  ?23                 	;0
42  27   ECHO/40                   ?0        24:'selected '       ?0                  	;0	<<39
43  29   NOP/0                     ?0        ?0                   ?0                  	;1
44  29   GOTO/253                  ?0        ?12                  ?25                 	;0
45  30   JMP/42                    ?0        ?6                   ?0                  	;0	>>6
46  30   FE_FREE/127               ?0        $16                  ?0                  	;0	<<5
47  33   ECHO/40                   ?0        26:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4" id="fb_category_series"' ?0                  	;0
48  34   ISSET_ISEMPTY_CV/197      #28=      16?1                 ?0                  	;33554432
49  34   JMPZ/43                   ?0        #28                  ?51                 	;0	>>51
50  35   GOTO/253                  ?0        ?824                 ?27                 	;0
51  37   GOTO/253                  ?0        ?822                 ?28                 	;0	<<49
52  39   INCLUDE_OR_EVAL/73        ?14       29:'header.php'      ?0                  	;2
53  40   ECHO/40                   ?0        30:'<div class="wrapper boxed-layout"' ?0                  	;0
54  41   FETCH_IS/89               $30=      31:'_SERVER'         ?0                  	;0
55  41   ISSET_ISEMPTY_DIM_OBJ/115 #31=      $30                  32:'HTTP_X_REQUESTED_WITH'	;16777216
56  41   BOOL_NOT/13               #32=      #31                  ?0                  	;0
57  41   JMPZ_EX/46                #32=      #32                  ?65                 	;0	>>65
58  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'strtolower'     	;1
59  41   FETCH_FUNC_ARG/92         $33=      35:'_SERVER'         ?0                  	;1
60  41   FETCH_DIM_FUNC_ARG/93     $34=      $33                  36:'HTTP_X_REQUESTED_WITH'	;1
61  41   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
62  41   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
63  41   IS_EQUAL/17               #36=      $35                  37:'xmlhttprequest' 	;0
64  41   BOOL/52                   #32=      #36                  ?0                  	;0
65  41   BOOL_NOT/13               #37=      #32                  ?0                  	;0	<<57
66  41   JMPZ/43                   ?0        #37                  ?68                 	;0	>>68
67  42   GOTO/253                  ?0        ?69                  ?38                 	;0
68  44   ECHO/40                   ?0        39:' style="display: none;"' ?0                  	;0	<<66
69  46   GOTO/253                  ?0        ?592                 ?40                 	;0
70  50   ECHO/40                   ?0        41:'value="0">Do Not Use</option>
															' ?0                  	;0
71  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'f769E3F0c739d1a6'	;1
72  51   SEND_VAL_EX/116           ?80       44:'series'          ?1                  	;0
73  51   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
74  51   FE_RESET_R/77             $39=      $38                  ?115                	;0
75  51   FE_FETCH_R/78             ?0        $39                  16?0                	;115	>>115	<<114
76  52   NOP/0                     ?0        ?0                   ?0                  	;1
77  52   GOTO/253                  ?0        ?89                  ?45                 	;0
78  55   ECHO/40                   ?0        46:'value="'         ?0                  	;0
79  56   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'intval'         	;1
80  56   FETCH_DIM_FUNC_ARG/93     $40=      16?0                 49:'id'             	;1
81  56   SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
82  56   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
83  56   ECHO/40                   ?0        $41                  ?0                  	;0
84  57   ECHO/40                   ?0        50:'">'              ?0                  	;0
85  58   FETCH_DIM_R/81            $42=      16?0                 51:'category_name'  	;0
86  58   ECHO/40                   ?0        $42                  ?0                  	;0
87  59   NOP/0                     ?0        ?0                   ?0                  	;1
88  59   GOTO/253                  ?0        ?111                 ?52                 	;0
89  61   ECHO/40                   ?0        53:'																<option ' ?0                  	;0
90  62   ISSET_ISEMPTY_CV/197      #43=      16?1                 ?0                  	;33554432
91  62   BOOL_NOT/13               #44=      #43                  ?0                  	;0
92  62   JMPZ/43                   ?0        #44                  ?95                 	;0	>>95
93  63   NOP/0                     ?0        ?0                   ?0                  	;1
94  63   GOTO/253                  ?0        ?78                  ?54                 	;0
95  65   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'intval'         	;1	<<92
96  65   FETCH_DIM_FUNC_ARG/93     $45=      16?1                 57:'category_id'    	;1
97  65   SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
98  65   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
99  65   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'intval'         	;1
100 65   FETCH_DIM_FUNC_ARG/93     $47=      16?0                 60:'id'             	;1
101 65   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
102 65   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
103 65   IS_EQUAL/17               #49=      $46                  $48                 	;0
104 65   BOOL_NOT/13               #50=      #49                  ?0                  	;0
105 65   JMPZ/43                   ?0        #50                  ?108                	;0	>>108
106 66   NOP/0                     ?0        ?0                   ?0                  	;1
107 66   GOTO/253                  ?0        ?109                 ?61                 	;0
108 68   ECHO/40                   ?0        62:'selected '       ?0                  	;0	<<105
109 70   NOP/0                     ?0        ?0                   ?0                  	;1
110 70   GOTO/253                  ?0        ?78                  ?63                 	;0
111 72   ECHO/40                   ?0        64:'</option>
															' ?0                  	;0
112 74   NOP/0                     ?0        ?0                   ?0                  	;1
113 74   GOTO/253                  ?0        ?114                 ?65                 	;0
114 75   JMP/42                    ?0        ?75                  ?0                  	;0	>>75
115 75   FE_FREE/127               ?0        $39                  ?0                  	;0	<<74
116 78   GOTO/253                  ?0        ?539                 ?66                 	;0
117 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'f769E3f0c739d1a6'	;1
118 80   SEND_VAL_EX/116           ?80       69:'movie'           ?1                  	;0
119 80   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
120 80   FE_RESET_R/77             $52=      $51                  ?161                	;0
121 80   FE_FETCH_R/78             ?0        $52                  16?0                	;161	>>161	<<160
122 81   NOP/0                     ?0        ?0                   ?0                  	;1
123 81   GOTO/253                  ?0        ?138                 ?70                 	;0
124 84   ECHO/40                   ?0        71:'value="'         ?0                  	;0
125 85   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'intval'         	;1
126 85   FETCH_DIM_FUNC_ARG/93     $53=      16?0                 74:'id'             	;1
127 85   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
128 85   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
129 85   ECHO/40                   ?0        $54                  ?0                  	;0
130 86   ECHO/40                   ?0        75:'">'              ?0                  	;0
131 87   FETCH_DIM_R/81            $55=      16?0                 76:'category_name'  	;0
132 87   ECHO/40                   ?0        $55                  ?0                  	;0
133 88   NOP/0                     ?0        ?0                   ?0                  	;1
134 88   GOTO/253                  ?0        ?135                 ?77                 	;0
135 90   ECHO/40                   ?0        78:'</option>
															' ?0                  	;0
136 92   NOP/0                     ?0        ?0                   ?0                  	;1
137 92   GOTO/253                  ?0        ?160                 ?79                 	;0
138 94   ECHO/40                   ?0        80:'																<option ' ?0                  	;0
139 95   ISSET_ISEMPTY_CV/197      #56=      16?1                 ?0                  	;33554432
140 95   BOOL_NOT/13               #57=      #56                  ?0                  	;0
141 95   JMPZ/43                   ?0        #57                  ?144                	;0	>>144
142 96   NOP/0                     ?0        ?0                   ?0                  	;1
143 96   GOTO/253                  ?0        ?124                 ?81                 	;0
144 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'intval'         	;1	<<141
145 98   FETCH_DIM_FUNC_ARG/93     $58=      16?1                 84:'category_id'    	;1
146 98   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
147 98   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
148 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'intval'         	;1
149 98   FETCH_DIM_FUNC_ARG/93     $60=      16?0                 87:'id'             	;1
150 98   SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
151 98   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
152 98   IS_EQUAL/17               #62=      $59                  $61                 	;0
153 98   BOOL_NOT/13               #63=      #62                  ?0                  	;0
154 98   JMPZ/43                   ?0        #63                  ?157                	;0	>>157
155 99   NOP/0                     ?0        ?0                   ?0                  	;1
156 99   GOTO/253                  ?0        ?158                 ?88                 	;0
157 101  ECHO/40                   ?0        89:'selected '       ?0                  	;0	<<154
158 103  NOP/0                     ?0        ?0                   ?0                  	;1
159 103  GOTO/253                  ?0        ?124                 ?90                 	;0
160 104  JMP/42                    ?0        ?121                 ?0                  	;0	>>121
161 104  FE_FREE/127               ?0        $52                  ?0                  	;0	<<120
162 107  ECHO/40                   ?0        91:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4" id="category_series"' ?0                  	;0
163 108  ISSET_ISEMPTY_CV/197      #64=      16?1                 ?0                  	;33554432
164 108  JMPZ/43                   ?0        #64                  ?166                	;0	>>166
165 109  GOTO/253                  ?0        ?832                 ?92                 	;0
166 111  ECHO/40                   ?0        93:' style="display: none;"' ?0                  	;0	<<164
167 112  GOTO/253                  ?0        ?831                 ?94                 	;0
168 116  ECHO/40                   ?0        95:'>
													<label class="col-md-4 col-form-label" for="fb_category_id_series">Fallback Category <i title="Add to this category if the Genre isn\'t found in the category allocation list." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="fb_category_id_series" id="fb_category_id_series" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
169 117  ISSET_ISEMPTY_CV/197      #65=      16?1                 ?0                  	;33554432
170 117  BOOL_NOT/13               #66=      #65                  ?0                  	;0
171 117  JMPZ/43                   ?0        #66                  ?173                	;0	>>173
172 118  GOTO/253                  ?0        ?653                 ?96                 	;0
173 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'intval'         	;1	<<171
174 120  FETCH_DIM_FUNC_ARG/93     $67=      16?1                 99:'fb_category_id' 	;1
175 120  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
176 120  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
177 120  IS_EQUAL/17               #69=      $68                  100:0               	;0
178 120  BOOL_NOT/13               #70=      #69                  ?0                  	;0
179 120  JMPZ/43                   ?0        #70                  ?181                	;0	>>181
180 121  GOTO/253                  ?0        ?653                 ?101                	;0
181 123  GOTO/253                  ?0        ?652                 ?102                	;0	<<179
182 126  ECHO/40                   ?0        103:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<div class="col-md-6">
														<table id="datatable" class="table">
															<thead>
																<tr>
																	<th width="20px"></th>
																	<th>Directory</th>
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
																	<th>Filename</th>
																</tr>
															</thead>
															<tbody></tbody>
														</table>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="settings">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="disable_tmdb">Disable TMDb <i title="Do not use TMDb to match the content." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="disable_tmdb" id="disable_tmdb" type="checkbox" ' ?0                  	;0
183 127  ISSET_ISEMPTY_CV/197      #71=      16?1                 ?0                  	;33554432
184 127  BOOL_NOT/13               #72=      #71                  ?0                  	;0
185 127  JMPZ/43                   ?0        #72                  ?187                	;0	>>187
186 128  GOTO/253                  ?0        ?201                 ?104                	;0
187 130  FETCH_DIM_R/81            $73=      16?1                 105:'disable_tmdb'  	;0	<<185
188 130  BOOL_NOT/13               #74=      $73                  ?0                  	;0
189 130  JMPZ/43                   ?0        #74                  ?191                	;0	>>191
190 131  GOTO/253                  ?0        ?201                 ?106                	;0
191 133  ECHO/40                   ?0        107:'checked '       ?0                  	;0	<<189
192 134  GOTO/253                  ?0        ?201                 ?108                	;0
193 136  FETCH_DIM_R/81            $75=      16?1                 109:'rclone_dir'    	;0
194 136  ECHO/40                   ?0        $75                  ?0                  	;0
195 138  ECHO/40                   ?0        110:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="active">Enabled</label>
													<div class="col-md-2">
														<input name="active" id="active" type="checkbox" ' ?0                  	;0
196 139  ISSET_ISEMPTY_CV/197      #76=      16?1                 ?0                  	;33554432
197 139  JMPZ/43                   ?0        #76                  ?199                	;0	>>199
198 140  GOTO/253                  ?0        ?760                 ?111                	;0
199 142  ECHO/40                   ?0        112:'checked '       ?0                  	;0	<<197
200 143  GOTO/253                  ?0        ?759                 ?113                	;0
201 147  ECHO/40                   ?0        114:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="ignore_no_match">Ignore No Match <i title="Add to database even if no TMDb match is found." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ignore_no_match" id="ignore_no_match" type="checkbox" ' ?0                  	;0
202 148  ISSET_ISEMPTY_CV/197      #77=      16?1                 ?0                  	;33554432
203 148  BOOL_NOT/13               #78=      #77                  ?0                  	;0
204 148  JMPZ/43                   ?0        #78                  ?206                	;0	>>206
205 149  GOTO/253                  ?0        ?351                 ?115                	;0
206 151  FETCH_DIM_R/81            $79=      16?1                 116:'ignore_no_match'	;0	<<204
207 151  BOOL_NOT/13               #80=      $79                  ?0                  	;0
208 151  JMPZ/43                   ?0        #80                  ?210                	;0	>>210
209 152  GOTO/253                  ?0        ?351                 ?117                	;0
210 154  GOTO/253                  ?0        ?350                 ?118                	;0	<<208
211 156  ECHO/40                   ?0        119:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#folder-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#settings" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-wrench mr-1"></i>
											<span class="d-none d-sm-inline">Settings</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#override" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-movie mr-1"></i>
											<span class="d-none d-sm-inline">Overrides</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="folder-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="folder_type">Folder Type</label>
													<div class="col-md-8">
														<select id="folder_type" name="folder_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
212 157  FE_RESET_R/77             $81=      120:array (
  'movie' => 'Movies',
  'series' => 'TV Series',
) ?232                	;0
213 157  FE_FETCH_R/78             #82=      $81                  16?2                	;232	>>232	<<231
214 157  ASSIGN/38                 ?68       16?3                 #82                 	;0
215 158  ECHO/40                   ?0        121:'															<option value="' ?0                  	;0
216 159  ECHO/40                   ?0        16?3                 ?0                  	;0
217 160  ECHO/40                   ?0        122:'"'              ?0                  	;0
218 161  ISSET_ISEMPTY_CV/197      #84=      16?1                 ?0                  	;33554432
219 161  JMPZ_EX/46                #84=      #84                  ?223                	;0	>>223
220 161  FETCH_DIM_R/81            $85=      16?1                 123:'type'          	;0
221 161  IS_EQUAL/17               #86=      $85                  16?3                	;0
222 161  BOOL/52                   #84=      #86                  ?0                  	;0
223 161  BOOL_NOT/13               #87=      #84                  ?0                  	;0	<<219
224 161  JMPZ/43                   ?0        #87                  ?227                	;0	>>227
225 162  NOP/0                     ?0        ?0                   ?0                  	;1
226 162  GOTO/253                  ?0        ?228                 ?124                	;0
227 164  ECHO/40                   ?0        125:' selected'      ?0                  	;0	<<224
228 166  ECHO/40                   ?0        126:'>'              ?0                  	;0
229 167  ECHO/40                   ?0        16?2                 ?0                  	;0
230 168  ECHO/40                   ?0        127:'</option>
															' ?0                  	;0
231 169  JMP/42                    ?0        ?213                 ?0                  	;0	>>213
232 169  FE_FREE/127               ?0        $81                  ?0                  	;0	<<212
233 172  ECHO/40                   ?0        128:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="server_id">Server Name</label>
													<div class="col-md-8">
														<select id="server_id" name="server_id" class="form-control" data-toggle="select2">
															' ?0                  	;0
234 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'c6A90bfcd425EB63'	;0
235 173  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
236 173  FE_RESET_R/77             $89=      $88                  ?258                	;0
237 173  FE_FETCH_R/78             ?0        $89                  16?4                	;258	>>258	<<257
238 174  ECHO/40                   ?0        131:'															<option value="' ?0                  	;0
239 175  FETCH_DIM_R/81            $90=      16?4                 132:'id'            	;0
240 175  ECHO/40                   ?0        $90                  ?0                  	;0
241 176  ECHO/40                   ?0        133:'"'              ?0                  	;0
242 177  ISSET_ISEMPTY_CV/197      #91=      16?1                 ?0                  	;33554432
243 177  JMPZ_EX/46                #91=      #91                  ?248                	;0	>>248
244 177  FETCH_DIM_R/81            $92=      16?1                 134:'server_id'     	;0
245 177  FETCH_DIM_R/81            $93=      16?4                 135:'id'            	;0
246 177  IS_EQUAL/17               #94=      $92                  $93                 	;0
247 177  BOOL/52                   #91=      #94                  ?0                  	;0
248 177  BOOL_NOT/13               #95=      #91                  ?0                  	;0	<<243
249 177  JMPZ/43                   ?0        #95                  ?252                	;0	>>252
250 178  NOP/0                     ?0        ?0                   ?0                  	;1
251 178  GOTO/253                  ?0        ?253                 ?136                	;0
252 180  ECHO/40                   ?0        137:' selected'      ?0                  	;0	<<249
253 182  ECHO/40                   ?0        138:'>'              ?0                  	;0
254 183  FETCH_DIM_R/81            $96=      16?4                 139:'server_name'   	;0
255 183  ECHO/40                   ?0        $96                  ?0                  	;0
256 184  ECHO/40                   ?0        140:'</option>
															' ?0                  	;0
257 185  JMP/42                    ?0        ?237                 ?0                  	;0	>>237
258 185  FE_FREE/127               ?0        $89                  ?0                  	;0	<<236
259 187  GOTO/253                  ?0        ?645                 ?141                	;0
260 190  ECHO/40                   ?0        142:'Edit'           ?0                  	;0
261 192  ECHO/40                   ?0        143:'" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
262 193  GOTO/253                  ?0        ?857                 ?144                	;0
263 195  ECHO/40                   ?0        145:'checked '       ?0                  	;0
264 198  ECHO/40                   ?0        146:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="auto_subtitles">Auto-Add Subtitles <i title="Automatically embed subtitles of the same name in the same folder." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="auto_subtitles" id="auto_subtitles" type="checkbox" ' ?0                  	;0
265 199  ISSET_ISEMPTY_CV/197      #97=      16?1                 ?0                  	;33554432
266 199  BOOL_NOT/13               #98=      #97                  ?0                  	;0
267 199  JMPZ/43                   ?0        #98                  ?269                	;0	>>269
268 200  GOTO/253                  ?0        ?771                 ?147                	;0
269 202  GOTO/253                  ?0        ?766                 ?148                	;0	<<267
270 204  ISSET_ISEMPTY_CV/197      #99=      16?1                 ?0                  	;33554432
271 204  BOOL_NOT/13               #100=     #99                  ?0                  	;0
272 204  JMPZ/43                   ?0        #100                 ?274                	;0	>>274
273 205  GOTO/253                  ?0        ?283                 ?149                	;0
274 207  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'intval'        	;1	<<272
275 207  FETCH_DIM_FUNC_ARG/93     $101=     16?1                 152:'fb_category_id'	;1
276 207  SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
277 207  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
278 207  IS_EQUAL/17               #103=     $102                 153:0               	;0
279 207  BOOL_NOT/13               #104=     #103                 ?0                  	;0
280 207  JMPZ/43                   ?0        #104                 ?282                	;0	>>282
281 208  GOTO/253                  ?0        ?283                 ?154                	;0
282 210  ECHO/40                   ?0        155:'selected '      ?0                  	;0	<<280
283 213  GOTO/253                  ?0        ?1                   ?156                	;0
284 215  ISSET_ISEMPTY_CV/197      #105=     16?1                 ?0                  	;33554432
285 215  BOOL_NOT/13               #106=     #105                 ?0                  	;0
286 215  JMPZ/43                   ?0        #106                 ?288                	;0	>>288
287 216  GOTO/253                  ?0        ?293                 ?157                	;0
288 218  FETCH_DIM_R/81            $107=     16?1                 158:'movie_symlink' 	;0	<<286
289 218  BOOL_NOT/13               #108=     $107                 ?0                  	;0
290 218  JMPZ/43                   ?0        #108                 ?292                	;0	>>292
291 219  GOTO/253                  ?0        ?293                 ?159                	;0
292 221  ECHO/40                   ?0        160:'checked '       ?0                  	;0	<<290
293 224  GOTO/253                  ?0        ?800                 ?161                	;0
294 227  ECHO/40                   ?0        162:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="fb_bouquets">Fallback Bouquets <i title="Add to these bouquets if the Genre isn\'t found in the category allocation list." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="fb_bouquets[]" id="fb_bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
295 228  FE_RESET_R/77             $109=     16?5                 ?340                	;0
296 228  FE_FETCH_R/78             ?0        $109                 16?6                	;340	>>340	<<339
297 229  NOP/0                     ?0        ?0                   ?0                  	;1
298 229  GOTO/253                  ?0        ?313                 ?163                	;0
299 232  ECHO/40                   ?0        164:'value="'        ?0                  	;0
300 233  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'intval'        	;1
301 233  FETCH_DIM_FUNC_ARG/93     $110=     16?6                 167:'id'            	;1
302 233  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
303 233  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
304 233  ECHO/40                   ?0        $111                 ?0                  	;0
305 234  ECHO/40                   ?0        168:'">'             ?0                  	;0
306 235  FETCH_DIM_R/81            $112=     16?6                 169:'bouquet_name'  	;0
307 235  ECHO/40                   ?0        $112                 ?0                  	;0
308 236  NOP/0                     ?0        ?0                   ?0                  	;1
309 236  GOTO/253                  ?0        ?310                 ?170                	;0
310 238  ECHO/40                   ?0        171:'</option>
															' ?0                  	;0
311 240  NOP/0                     ?0        ?0                   ?0                  	;1
312 240  GOTO/253                  ?0        ?339                 ?172                	;0
313 242  ECHO/40                   ?0        173:'															<option ' ?0                  	;0
314 243  ISSET_ISEMPTY_CV/197      #113=     16?1                 ?0                  	;33554432
315 243  BOOL_NOT/13               #114=     #113                 ?0                  	;0
316 243  JMPZ/43                   ?0        #114                 ?319                	;0	>>319
317 244  NOP/0                     ?0        ?0                   ?0                  	;1
318 244  GOTO/253                  ?0        ?299                 ?174                	;0
319 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   175:'in_array'      	;2	<<316
320 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'intval'        	;1
321 246  FETCH_DIM_FUNC_ARG/93     $115=     16?6                 179:'id'            	;1
322 246  SEND_VAR_EX/66            ?80       $115                 ?1                  	;0
323 246  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
324 246  SEND_VAR_NO_REF_EX/50     ?80       $116                 ?1                  	;0
325 246  INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'json_decode'   	;2
326 246  FETCH_DIM_FUNC_ARG/93     $117=     16?1                 182:'fb_bouquets'   	;1
327 246  SEND_VAR_EX/66            ?80       $117                 ?1                  	;0
328 246  SEND_VAL_EX/116           ?96       183:true             ?2                  	;0
329 246  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
330 246  SEND_VAR_NO_REF_EX/50     ?96       $118                 ?2                  	;0
331 246  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
332 246  BOOL_NOT/13               #120=     $119                 ?0                  	;0
333 246  JMPZ/43                   ?0        #120                 ?336                	;0	>>336
334 247  NOP/0                     ?0        ?0                   ?0                  	;1
335 247  GOTO/253                  ?0        ?337                 ?184                	;0
336 249  ECHO/40                   ?0        185:'selected '      ?0                  	;0	<<333
337 251  NOP/0                     ?0        ?0                   ?0                  	;1
338 251  GOTO/253                  ?0        ?299                 ?186                	;0
339 252  JMP/42                    ?0        ?296                 ?0                  	;0	>>296
340 252  FE_FREE/127               ?0        $109                 ?0                  	;0	<<295
341 255  ECHO/40                   ?0        187:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="fallback_title">Fallback to Folder Name <i title="If the title of the file isn\'t matched with TMDb, try to match the folder name instead." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="fallback_title" id="fallback_title" type="checkbox" ' ?0                  	;0
342 256  GOTO/253                  ?0        ?847                 ?188                	;0
343 259  ECHO/40                   ?0        189:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                            </li>
											<li class="list-inline-item float-right">
												<input name="submit_folder" type="submit" class="btn btn-primary" value="' ?0                  	;0
344 260  ISSET_ISEMPTY_CV/197      #121=     16?1                 ?0                  	;33554432
345 260  JMPZ/43                   ?0        #121                 ?347                	;0	>>347
346 261  GOTO/253                  ?0        ?260                 ?190                	;0
347 263  ECHO/40                   ?0        191:'Add'            ?0                  	;0	<<345
348 264  GOTO/253                  ?0        ?261                 ?192                	;0
349 265  GOTO/253                  ?0        ?260                 ?193                	;0
350 267  ECHO/40                   ?0        194:'checked '       ?0                  	;0
351 270  ECHO/40                   ?0        195:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="Read input video at native frame rate." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" ' ?0                  	;0
352 271  ISSET_ISEMPTY_CV/197      #122=     16?1                 ?0                  	;33554432
353 271  BOOL_NOT/13               #123=     #122                 ?0                  	;0
354 271  JMPZ/43                   ?0        #123                 ?356                	;0	>>356
355 272  GOTO/253                  ?0        ?362                 ?196                	;0
356 274  GOTO/253                  ?0        ?357                 ?197                	;0	<<354
357 276  FETCH_DIM_R/81            $124=     16?1                 198:'read_native'   	;0
358 276  BOOL_NOT/13               #125=     $124                 ?0                  	;0
359 276  JMPZ/43                   ?0        #125                 ?361                	;0	>>361
360 277  GOTO/253                  ?0        ?362                 ?199                	;0
361 279  ECHO/40                   ?0        200:'checked '       ?0                  	;0	<<359
362 282  ECHO/40                   ?0        201:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="movie_symlink">Create Symlink <i title="Generate a symlink to the original file instead of encoding. File needs to exist on all selected servers." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="movie_symlink" id="movie_symlink" type="checkbox" ' ?0                  	;0
363 283  GOTO/253                  ?0        ?284                 ?202                	;0
364 285  ECHO/40                   ?0        203:' <i title="Which container to use when transcoding files." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="target_container" id="target_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
365 286  FE_RESET_R/77             $126=     204:array (
  0 => 'auto',
  1 => 'mp4',
  2 => 'mkv',
  3 => 'avi',
  4 => 'mpg',
  5 => 'flv',
  6 => '3gp',
  7 => 'm4v',
  8 => 'wmv',
  9 => 'mov',
  10 => 'ts',
) ?394                	;0
366 286  FE_FETCH_R/78             ?0        $126                 16?7                	;394	>>394	<<393
367 287  NOP/0                     ?0        ?0                   ?0                  	;1
368 287  GOTO/253                  ?0        ?369                 ?205                	;0
369 289  ECHO/40                   ?0        206:'															<option ' ?0                  	;0
370 290  ISSET_ISEMPTY_CV/197      #127=     16?1                 ?0                  	;33554432
371 290  BOOL_NOT/13               #128=     #127                 ?0                  	;0
372 290  JMPZ/43                   ?0        #128                 ?375                	;0	>>375
373 291  NOP/0                     ?0        ?0                   ?0                  	;1
374 291  GOTO/253                  ?0        ?384                 ?207                	;0
375 293  FETCH_DIM_R/81            $129=     16?1                 208:'target_container'	;0	<<372
376 293  IS_EQUAL/17               #130=     $129                 16?7                	;0
377 293  BOOL_NOT/13               #131=     #130                 ?0                  	;0
378 293  JMPZ/43                   ?0        #131                 ?381                	;0	>>381
379 294  NOP/0                     ?0        ?0                   ?0                  	;1
380 294  GOTO/253                  ?0        ?382                 ?209                	;0
381 296  ECHO/40                   ?0        210:'selected '      ?0                  	;0	<<378
382 298  NOP/0                     ?0        ?0                   ?0                  	;1
383 298  GOTO/253                  ?0        ?384                 ?211                	;0
384 301  ECHO/40                   ?0        212:'value="'        ?0                  	;0
385 302  ECHO/40                   ?0        16?7                 ?0                  	;0
386 303  ECHO/40                   ?0        213:'">'             ?0                  	;0
387 304  ECHO/40                   ?0        16?7                 ?0                  	;0
388 305  NOP/0                     ?0        ?0                   ?0                  	;1
389 305  GOTO/253                  ?0        ?390                 ?214                	;0
390 307  ECHO/40                   ?0        215:'</option>
															' ?0                  	;0
391 309  NOP/0                     ?0        ?0                   ?0                  	;1
392 309  GOTO/253                  ?0        ?393                 ?216                	;0
393 310  JMP/42                    ?0        ?366                 ?0                  	;0	>>366
394 310  FE_FREE/127               ?0        $126                 ?0                  	;0	<<365
395 313  ECHO/40                   ?0        217:'														</select>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Select a transcoding profile to autoamtically encode videos." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option ' ?0                  	;0
396 314  ISSET_ISEMPTY_CV/197      #132=     16?1                 ?0                  	;33554432
397 314  BOOL_NOT/13               #133=     #132                 ?0                  	;0
398 314  JMPZ/43                   ?0        #133                 ?400                	;0	>>400
399 315  GOTO/253                  ?0        ?453                 ?218                	;0
400 317  GOTO/253                  ?0        ?444                 ?219                	;0	<<398
401 319  FETCH_STATIC_PROP_IS/176  $134=     220:'rRequest'       221:'XUI'           	;0
402 319  ISSET_ISEMPTY_DIM_OBJ/115 #135=     $134                 223:'id'            	;33554432
403 319  JMPZ_EX/46                #135=     #135                 ?412                	;0	>>412
404 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'d8eC9843FC5457DF'	;1
405 319  FETCH_STATIC_PROP_FUNC_ARG/177 $136=     226:'rRequest'       227:'XUI'           	;1
406 319  FETCH_DIM_FUNC_ARG/93     $137=     $136                 229:'id'            	;1
407 319  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
408 319  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
409 319  ASSIGN/38                 $139=     16?1                 $138                	;0
410 319  BOOL_NOT/13               #140=     $139                 ?0                  	;0
411 319  BOOL/52                   #135=     #140                 ?0                  	;0
412 319  BOOL_NOT/13               #141=     #135                 ?0                  	;0	<<403
413 319  JMPZ/43                   ?0        #141                 ?415                	;0	>>415
414 320  GOTO/253                  ?0        ?417                 ?230                	;0
415 322  INIT_FCALL_BY_NAME/59     ?0        ?0                   231:'E72F42a93714BA87'	;0	<<413
416 322  DO_FCALL_BY_NAME/131      ?127      ?0                   ?0                  	;0
417 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'F964b9222b35AdDD'	;0
418 324  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
419 324  ASSIGN/38                 ?129      16?5                 $143                	;0
420 325  ASSIGN/38                 ?130      16?8                 235:'Add Folder'    	;0
421 326  GOTO/253                  ?0        ?52                  ?236                	;0
422 328  ISSET_ISEMPTY_CV/197      #146=     16?1                 ?0                  	;33554432
423 328  BOOL_NOT/13               #147=     #146                 ?0                  	;0
424 328  JMPZ/43                   ?0        #147                 ?426                	;0	>>426
425 329  GOTO/253                  ?0        ?431                 ?237                	;0
426 331  FETCH_DIM_R/81            $148=     16?1                 238:'auto_upgrade'  	;0	<<424
427 331  BOOL_NOT/13               #149=     $148                 ?0                  	;0
428 331  JMPZ/43                   ?0        #149                 ?430                	;0	>>430
429 332  GOTO/253                  ?0        ?431                 ?239                	;0
430 334  ECHO/40                   ?0        240:'checked '       ?0                  	;0	<<428
431 337  GOTO/253                  ?0        ?613                 ?241                	;0
432 339  ISSET_ISEMPTY_CV/197      #150=     16?1                 ?0                  	;33554432
433 339  BOOL_NOT/13               #151=     #150                 ?0                  	;0
434 339  JMPZ/43                   ?0        #151                 ?436                	;0	>>436
435 340  GOTO/253                  ?0        ?443                 ?242                	;0
436 342  ECHO/40                   ?0        243:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<434
437 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'intval'        	;1
438 343  FETCH_DIM_FUNC_ARG/93     $152=     16?1                 246:'id'            	;1
439 343  SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
440 343  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
441 343  ECHO/40                   ?0        $153                 ?0                  	;0
442 344  ECHO/40                   ?0        247:'" />
							'   ?0                  	;0
443 346  GOTO/253                  ?0        ?211                 ?248                	;0
444 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'intval'        	;1
445 348  FETCH_DIM_FUNC_ARG/93     $154=     16?1                 251:'transcode_profile_id'	;1
446 348  SEND_VAR_EX/66            ?80       $154                 ?1                  	;0
447 348  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
448 348  IS_EQUAL/17               #156=     $155                 252:0               	;0
449 348  BOOL_NOT/13               #157=     #156                 ?0                  	;0
450 348  JMPZ/43                   ?0        #157                 ?452                	;0	>>452
451 349  GOTO/253                  ?0        ?453                 ?253                	;0
452 351  ECHO/40                   ?0        254:'selected '      ?0                  	;0	<<450
453 354  ECHO/40                   ?0        255:'value="0">Transcoding Disabled</option>
															' ?0                  	;0
454 355  GOTO/253                  ?0        ?707                 ?256                	;0
455 357  ISSET_ISEMPTY_CV/197      #158=     16?1                 ?0                  	;33554432
456 357  JMPZ/43                   ?0        #158                 ?458                	;0	>>458
457 358  GOTO/253                  ?0        ?460                 ?257                	;0
458 360  ECHO/40                   ?0        258:'checked '       ?0                  	;0	<<456
459 361  GOTO/253                  ?0        ?264                 ?259                	;0
460 363  FETCH_DIM_R/81            $159=     16?1                 260:'ffprobe_input' 	;0
461 363  BOOL_NOT/13               #160=     $159                 ?0                  	;0
462 363  JMPZ/43                   ?0        #160                 ?464                	;0	>>464
463 364  GOTO/253                  ?0        ?264                 ?261                	;0
464 366  GOTO/253                  ?0        ?263                 ?262                	;0	<<462
465 368  GOTO/253                  ?0        ?467                 ?263                	;0
466 370  ECHO/40                   ?0        264:'Edit'           ?0                  	;0
467 372  ECHO/40                   ?0        265:' Folder</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
468 373  GOTO/253                  ?0        ?432                 ?266                	;0
469 375  ECHO/40                   ?0        267:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="allowed_extensions">Allowed Extensions <i title="Allow scanning of the following extensions only. An empty list will allow all extensions." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="allowed_extensions[]" id="allowed_extensions" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
470 376  FE_RESET_R/77             $161=     268:array (
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
) ?506                	;0
471 376  FE_FETCH_R/78             ?0        $161                 16?9                	;506	>>506	<<505
472 377  NOP/0                     ?0        ?0                   ?0                  	;1
473 377  GOTO/253                  ?0        ?474                 ?269                	;0
474 379  ECHO/40                   ?0        270:'															<option ' ?0                  	;0
475 380  ISSET_ISEMPTY_CV/197      #162=     16?1                 ?0                  	;33554432
476 380  BOOL_NOT/13               #163=     #162                 ?0                  	;0
477 380  JMPZ/43                   ?0        #163                 ?480                	;0	>>480
478 381  NOP/0                     ?0        ?0                   ?0                  	;1
479 381  GOTO/253                  ?0        ?499                 ?271                	;0
480 383  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'in_array'      	;2	<<477
481 383  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
482 383  INIT_FCALL_BY_NAME/59     ?0        ?0                   274:'json_decode'   	;2
483 383  FETCH_DIM_FUNC_ARG/93     $164=     16?1                 276:'allowed_extensions'	;1
484 383  SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
485 383  SEND_VAL_EX/116           ?96       277:true             ?2                  	;0
486 383  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
487 383  SEND_VAR_NO_REF_EX/50     ?96       $165                 ?2                  	;0
488 383  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
489 383  BOOL_NOT/13               #167=     $166                 ?0                  	;0
490 383  JMPZ/43                   ?0        #167                 ?493                	;0	>>493
491 384  NOP/0                     ?0        ?0                   ?0                  	;1
492 384  GOTO/253                  ?0        ?494                 ?278                	;0
493 386  ECHO/40                   ?0        279:'selected '      ?0                  	;0	<<490
494 388  NOP/0                     ?0        ?0                   ?0                  	;1
495 388  GOTO/253                  ?0        ?499                 ?280                	;0
496 390  ECHO/40                   ?0        281:'</option>
															' ?0                  	;0
497 392  NOP/0                     ?0        ?0                   ?0                  	;1
498 392  GOTO/253                  ?0        ?505                 ?282                	;0
499 395  ECHO/40                   ?0        283:'value="'        ?0                  	;0
500 396  ECHO/40                   ?0        16?9                 ?0                  	;0
501 397  ECHO/40                   ?0        284:'">'             ?0                  	;0
502 398  ECHO/40                   ?0        16?9                 ?0                  	;0
503 399  NOP/0                     ?0        ?0                   ?0                  	;1
504 399  GOTO/253                  ?0        ?496                 ?285                	;0
505 400  JMP/42                    ?0        ?471                 ?0                  	;0	>>471
506 400  FE_FREE/127               ?0        $161                 ?0                  	;0	<<470
507 403  ECHO/40                   ?0        286:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="language">Force TMDB Language</i></label>
													<div class="col-md-8">
														<select name="language" id="language" class="form-control" data-toggle="select2">
                                                            <option value="">Do Not Force</option>
															' ?0                  	;0
508 404  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'array_slice'   	;3
509 404  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
510 404  SEND_VAL_EX/116           ?96       289:1                ?2                  	;0
511 404  INIT_FCALL_BY_NAME/59     ?0        ?0                   290:'count'         	;1
512 404  SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
513 404  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
514 404  SUB/2                     #169=     $168                 292:1               	;0
515 404  SEND_VAL_EX/116           ?112      #169                 ?3                  	;0
516 404  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
517 404  FE_RESET_R/77             $171=     $170                 ?537                	;0
518 404  FE_FETCH_R/78             #172=     $171                 16?11               	;537	>>537	<<536
519 404  ASSIGN/38                 ?158      16?12                #172                	;0
520 405  ECHO/40                   ?0        293:'															<option' ?0                  	;0
521 406  ISSET_ISEMPTY_CV/197      #174=     16?1                 ?0                  	;33554432
522 406  JMPZ_EX/46                #174=     #174                 ?526                	;0	>>526
523 406  FETCH_DIM_R/81            $175=     16?1                 294:'language'      	;0
524 406  IS_EQUAL/17               #176=     $175                 16?12               	;0
525 406  BOOL/52                   #174=     #176                 ?0                  	;0
526 406  BOOL_NOT/13               #177=     #174                 ?0                  	;0	<<522
527 406  JMPZ/43                   ?0        #177                 ?530                	;0	>>530
528 407  NOP/0                     ?0        ?0                   ?0                  	;1
529 407  GOTO/253                  ?0        ?531                 ?295                	;0
530 409  ECHO/40                   ?0        296:' selected'      ?0                  	;0	<<527
531 411  ECHO/40                   ?0        297:' value="'       ?0                  	;0
532 412  ECHO/40                   ?0        16?12                ?0                  	;0
533 413  ECHO/40                   ?0        298:'">'             ?0                  	;0
534 414  ECHO/40                   ?0        16?11                ?0                  	;0
535 415  ECHO/40                   ?0        299:'</option>
															' ?0                  	;0
536 416  JMP/42                    ?0        ?518                 ?0                  	;0	>>518
537 416  FE_FREE/127               ?0        $171                 ?0                  	;0	<<517
538 418  GOTO/253                  ?0        ?343                 ?300                	;0
539 420  ECHO/40                   ?0        301:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bouquets">Override Bouquets <i title="Ignore category allocation and force bouquet allocation." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
540 421  FE_RESET_R/77             $178=     16?5                 ?585                	;0
541 421  FE_FETCH_R/78             ?0        $178                 16?6                	;585	>>585	<<584
542 422  NOP/0                     ?0        ?0                   ?0                  	;1
543 422  GOTO/253                  ?0        ?544                 ?302                	;0
544 424  ECHO/40                   ?0        303:'															<option ' ?0                  	;0
545 425  ISSET_ISEMPTY_CV/197      #179=     16?1                 ?0                  	;33554432
546 425  BOOL_NOT/13               #180=     #179                 ?0                  	;0
547 425  JMPZ/43                   ?0        #180                 ?550                	;0	>>550
548 426  NOP/0                     ?0        ?0                   ?0                  	;1
549 426  GOTO/253                  ?0        ?573                 ?304                	;0
550 428  INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'in_array'      	;2	<<547
551 428  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'intval'        	;1
552 428  FETCH_DIM_FUNC_ARG/93     $181=     16?6                 309:'id'            	;1
553 428  SEND_VAR_EX/66            ?80       $181                 ?1                  	;0
554 428  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
555 428  SEND_VAR_NO_REF_EX/50     ?80       $182                 ?1                  	;0
556 428  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'json_decode'   	;2
557 428  FETCH_DIM_FUNC_ARG/93     $183=     16?1                 312:'bouquets'      	;1
558 428  SEND_VAR_EX/66            ?80       $183                 ?1                  	;0
559 428  SEND_VAL_EX/116           ?96       313:true             ?2                  	;0
560 428  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
561 428  SEND_VAR_NO_REF_EX/50     ?96       $184                 ?2                  	;0
562 428  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
563 428  BOOL_NOT/13               #186=     $185                 ?0                  	;0
564 428  JMPZ/43                   ?0        #186                 ?567                	;0	>>567
565 429  NOP/0                     ?0        ?0                   ?0                  	;1
566 429  GOTO/253                  ?0        ?568                 ?314                	;0
567 431  ECHO/40                   ?0        315:'selected '      ?0                  	;0	<<564
568 433  NOP/0                     ?0        ?0                   ?0                  	;1
569 433  GOTO/253                  ?0        ?573                 ?316                	;0
570 435  ECHO/40                   ?0        317:'</option>
															' ?0                  	;0
571 437  NOP/0                     ?0        ?0                   ?0                  	;1
572 437  GOTO/253                  ?0        ?584                 ?318                	;0
573 440  ECHO/40                   ?0        319:'value="'        ?0                  	;0
574 441  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'intval'        	;1
575 441  FETCH_DIM_FUNC_ARG/93     $187=     16?6                 322:'id'            	;1
576 441  SEND_VAR_EX/66            ?80       $187                 ?1                  	;0
577 441  DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
578 441  ECHO/40                   ?0        $188                 ?0                  	;0
579 442  ECHO/40                   ?0        323:'">'             ?0                  	;0
580 443  FETCH_DIM_R/81            $189=     16?6                 324:'bouquet_name'  	;0
581 443  ECHO/40                   ?0        $189                 ?0                  	;0
582 444  NOP/0                     ?0        ?0                   ?0                  	;1
583 444  GOTO/253                  ?0        ?570                 ?325                	;0
584 445  JMP/42                    ?0        ?541                 ?0                  	;0	>>541
585 445  FE_FREE/127               ?0        $178                 ?0                  	;0	<<540
586 448  ECHO/40                   ?0        326:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4" id="fb_category_movie"' ?0                  	;0
587 449  ISSET_ISEMPTY_CV/197      #190=     16?1                 ?0                  	;33554432
588 449  BOOL_NOT/13               #191=     #190                 ?0                  	;0
589 449  JMPZ/43                   ?0        #191                 ?591                	;0	>>591
590 450  GOTO/253                  ?0        ?606                 ?327                	;0
591 452  GOTO/253                  ?0        ?600                 ?328                	;0	<<589
592 454  ECHO/40                   ?0        329:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
593 455  INCLUDE_OR_EVAL/73        ?177      330:'topbar.php'     ?0                  	;2
594 456  ECHO/40                   ?0        331:'					</div>
					<h4 class="page-title">' ?0                  	;0
595 457  ISSET_ISEMPTY_CV/197      #193=     16?1                 ?0                  	;33554432
596 457  JMPZ/43                   ?0        #193                 ?598                	;0	>>598
597 458  GOTO/253                  ?0        ?466                 ?332                	;0
598 460  ECHO/40                   ?0        333:'Add'            ?0                  	;0	<<596
599 461  GOTO/253                  ?0        ?465                 ?334                	;0
600 463  FETCH_DIM_R/81            $194=     16?1                 335:'type'          	;0
601 463  IS_NOT_EQUAL/18           #195=     $194                 336:'movie'         	;0
602 463  BOOL_NOT/13               #196=     #195                 ?0                  	;0
603 463  JMPZ/43                   ?0        #196                 ?605                	;0	>>605
604 464  GOTO/253                  ?0        ?606                 ?337                	;0
605 466  ECHO/40                   ?0        338:' style="display: none;"' ?0                  	;0	<<603
606 469  ECHO/40                   ?0        339:'>
													<label class="col-md-4 col-form-label" for="fb_category_id_movie">Fallback Category <i title="Add to this category if the Genre isn\'t found in the category allocation list." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="fb_category_id_movie" id="fb_category_id_movie" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
607 470  GOTO/253                  ?0        ?270                 ?340                	;0
608 472  ECHO/40                   ?0        341:'checked '       ?0                  	;0
609 475  ECHO/40                   ?0        342:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="target_container">' ?0                  	;0
610 476  FETCH_DIM_R/81            $197=     16?13                343:'target_container'	;0
611 476  ECHO/40                   ?0        $197                 ?0                  	;0
612 477  GOTO/253                  ?0        ?364                 ?344                	;0
613 479  ECHO/40                   ?0        345:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="extract_metadata">Extract Metadata <i title="Use ffprobe to extract metadata information of the file and use that instead of the filename for matching against TMDb." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="extract_metadata" id="extract_metadata" type="checkbox" ' ?0                  	;0
614 480  ISSET_ISEMPTY_CV/197      #198=     16?1                 ?0                  	;33554432
615 480  BOOL_NOT/13               #199=     #198                 ?0                  	;0
616 480  JMPZ/43                   ?0        #199                 ?618                	;0	>>618
617 481  GOTO/253                  ?0        ?789                 ?346                	;0
618 483  FETCH_DIM_R/81            $200=     16?1                 347:'extract_metadata'	;0	<<616
619 483  BOOL_NOT/13               #201=     $200                 ?0                  	;0
620 483  JMPZ/43                   ?0        #201                 ?622                	;0	>>622
621 484  GOTO/253                  ?0        ?623                 ?348                	;0
622 486  ECHO/40                   ?0        349:'checked '       ?0                  	;0	<<620
623 488  GOTO/253                  ?0        ?789                 ?350                	;0
624 490  INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'intval'        	;1
625 490  FETCH_DIM_FUNC_ARG/93     $202=     16?1                 353:'category_id'   	;1
626 490  SEND_VAR_EX/66            ?80       $202                 ?1                  	;0
627 490  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
628 490  IS_EQUAL/17               #204=     $203                 354:0               	;0
629 490  BOOL_NOT/13               #205=     #204                 ?0                  	;0
630 490  JMPZ/43                   ?0        #205                 ?632                	;0	>>632
631 491  GOTO/253                  ?0        ?633                 ?355                	;0
632 493  ECHO/40                   ?0        356:'selected '      ?0                  	;0	<<630
633 496  ECHO/40                   ?0        357:'value="0">Do Not Use</option>
															' ?0                  	;0
634 497  GOTO/253                  ?0        ?117                 ?358                	;0
635 501  ECHO/40                   ?0        359:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">Remove Existing Subtitles <i title="Remove existing subtitles from file before encoding. You can\'t remove hardcoded subtitles using this method." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ' ?0                  	;0
636 502  ISSET_ISEMPTY_CV/197      #206=     16?1                 ?0                  	;33554432
637 502  BOOL_NOT/13               #207=     #206                 ?0                  	;0
638 502  JMPZ/43                   ?0        #207                 ?640                	;0	>>640
639 503  GOTO/253                  ?0        ?609                 ?360                	;0
640 505  FETCH_DIM_R/81            $208=     16?1                 361:'remove_subtitles'	;0	<<638
641 505  BOOL_NOT/13               #209=     $208                 ?0                  	;0
642 505  JMPZ/43                   ?0        #209                 ?644                	;0	>>644
643 506  GOTO/253                  ?0        ?609                 ?362                	;0
644 508  GOTO/253                  ?0        ?608                 ?363                	;0	<<642
645 511  ECHO/40                   ?0        364:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="selected_path">Selected Path</label>
													<div class="col-md-8 input-group">
														<input type="text" id="selected_path" name="selected_path" class="form-control" value="' ?0                  	;0
646 512  ISSET_ISEMPTY_CV/197      #210=     16?1                 ?0                  	;33554432
647 512  JMPZ/43                   ?0        #210                 ?649                	;0	>>649
648 513  GOTO/253                  ?0        ?839                 ?365                	;0
649 515  ECHO/40                   ?0        366:'/'              ?0                  	;0	<<647
650 516  GOTO/253                  ?0        ?841                 ?367                	;0
651 517  GOTO/253                  ?0        ?839                 ?368                	;0
652 519  ECHO/40                   ?0        369:'selected '      ?0                  	;0
653 522  ECHO/40                   ?0        370:'value="0">Do Not Use</option>
															' ?0                  	;0
654 523  INIT_FCALL_BY_NAME/59     ?0        ?0                   371:'F769E3F0c739d1A6'	;1
655 523  SEND_VAL_EX/116           ?80       373:'series'         ?1                  	;0
656 523  DO_FCALL_BY_NAME/131      $211=     ?0                   ?0                  	;0
657 523  FE_RESET_R/77             $212=     $211                 ?698                	;0
658 523  FE_FETCH_R/78             ?0        $212                 16?0                	;698	>>698	<<697
659 524  NOP/0                     ?0        ?0                   ?0                  	;1
660 524  GOTO/253                  ?0        ?675                 ?374                	;0
661 526  ECHO/40                   ?0        375:'</option>
															' ?0                  	;0
662 528  NOP/0                     ?0        ?0                   ?0                  	;1
663 528  GOTO/253                  ?0        ?697                 ?376                	;0
664 531  ECHO/40                   ?0        377:'value="'        ?0                  	;0
665 532  INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'intval'        	;1
666 532  FETCH_DIM_FUNC_ARG/93     $213=     16?0                 380:'id'            	;1
667 532  SEND_VAR_EX/66            ?80       $213                 ?1                  	;0
668 532  DO_FCALL_BY_NAME/131      $214=     ?0                   ?0                  	;0
669 532  ECHO/40                   ?0        $214                 ?0                  	;0
670 533  ECHO/40                   ?0        381:'">'             ?0                  	;0
671 534  FETCH_DIM_R/81            $215=     16?0                 382:'category_name' 	;0
672 534  ECHO/40                   ?0        $215                 ?0                  	;0
673 535  NOP/0                     ?0        ?0                   ?0                  	;1
674 535  GOTO/253                  ?0        ?661                 ?383                	;0
675 537  ECHO/40                   ?0        384:'																<option ' ?0                  	;0
676 538  ISSET_ISEMPTY_CV/197      #216=     16?1                 ?0                  	;33554432
677 538  BOOL_NOT/13               #217=     #216                 ?0                  	;0
678 538  JMPZ/43                   ?0        #217                 ?681                	;0	>>681
679 539  NOP/0                     ?0        ?0                   ?0                  	;1
680 539  GOTO/253                  ?0        ?664                 ?385                	;0
681 541  INIT_FCALL_BY_NAME/59     ?0        ?0                   386:'intval'        	;1	<<678
682 541  FETCH_DIM_FUNC_ARG/93     $218=     16?1                 388:'fb_category_id'	;1
683 541  SEND_VAR_EX/66            ?80       $218                 ?1                  	;0
684 541  DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
685 541  INIT_FCALL_BY_NAME/59     ?0        ?0                   389:'intval'        	;1
686 541  FETCH_DIM_FUNC_ARG/93     $220=     16?0                 391:'id'            	;1
687 541  SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
688 541  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
689 541  IS_EQUAL/17               #222=     $219                 $221                	;0
690 541  BOOL_NOT/13               #223=     #222                 ?0                  	;0
691 541  JMPZ/43                   ?0        #223                 ?694                	;0	>>694
692 542  NOP/0                     ?0        ?0                   ?0                  	;1
693 542  GOTO/253                  ?0        ?695                 ?392                	;0
694 544  ECHO/40                   ?0        393:'selected '      ?0                  	;0	<<691
695 546  NOP/0                     ?0        ?0                   ?0                  	;1
696 546  GOTO/253                  ?0        ?664                 ?394                	;0
697 547  JMP/42                    ?0        ?658                 ?0                  	;0	>>658
698 547  FE_FREE/127               ?0        $212                 ?0                  	;0	<<657
699 549  GOTO/253                  ?0        ?294                 ?395                	;0
700 551  FETCH_DIM_R/81            $224=     16?1                 396:'auto_encode'   	;0
701 551  BOOL_NOT/13               #225=     $224                 ?0                  	;0
702 551  JMPZ/43                   ?0        #225                 ?704                	;0	>>704
703 552  GOTO/253                  ?0        ?705                 ?397                	;0
704 554  ECHO/40                   ?0        398:'checked '       ?0                  	;0	<<702
705 557  ECHO/40                   ?0        399:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="ffprobe_input">Probe Input <i title="Use ffmpeg to probe input files to ensure broken / incomplete files aren\'t added. Will increase load." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="ffprobe_input" id="ffprobe_input" type="checkbox" ' ?0                  	;0
706 558  GOTO/253                  ?0        ?455                 ?400                	;0
707 560  INIT_FCALL_BY_NAME/59     ?0        ?0                   401:'f93e9343c3d7FD99'	;0
708 560  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
709 560  FE_RESET_R/77             $227=     $226                 ?747                	;0
710 560  FE_FETCH_R/78             ?0        $227                 16?14               	;747	>>747	<<746
711 561  NOP/0                     ?0        ?0                   ?0                  	;1
712 561  GOTO/253                  ?0        ?713                 ?403                	;0
713 563  ECHO/40                   ?0        404:'															<option ' ?0                  	;0
714 564  ISSET_ISEMPTY_CV/197      #228=     16?1                 ?0                  	;33554432
715 564  BOOL_NOT/13               #229=     #228                 ?0                  	;0
716 564  JMPZ/43                   ?0        #229                 ?719                	;0	>>719
717 565  NOP/0                     ?0        ?0                   ?0                  	;1
718 565  GOTO/253                  ?0        ?738                 ?405                	;0
719 567  INIT_FCALL_BY_NAME/59     ?0        ?0                   406:'intval'        	;1	<<716
720 567  FETCH_DIM_FUNC_ARG/93     $230=     16?1                 408:'transcode_profile_id'	;1
721 567  SEND_VAR_EX/66            ?80       $230                 ?1                  	;0
722 567  DO_FCALL_BY_NAME/131      $231=     ?0                   ?0                  	;0
723 567  INIT_FCALL_BY_NAME/59     ?0        ?0                   409:'intval'        	;1
724 567  FETCH_DIM_FUNC_ARG/93     $232=     16?14                411:'profile_id'    	;1
725 567  SEND_VAR_EX/66            ?80       $232                 ?1                  	;0
726 567  DO_FCALL_BY_NAME/131      $233=     ?0                   ?0                  	;0
727 567  IS_EQUAL/17               #234=     $231                 $233                	;0
728 567  BOOL_NOT/13               #235=     #234                 ?0                  	;0
729 567  JMPZ/43                   ?0        #235                 ?732                	;0	>>732
730 568  NOP/0                     ?0        ?0                   ?0                  	;1
731 568  GOTO/253                  ?0        ?733                 ?412                	;0
732 570  ECHO/40                   ?0        413:'selected '      ?0                  	;0	<<729
733 572  NOP/0                     ?0        ?0                   ?0                  	;1
734 572  GOTO/253                  ?0        ?738                 ?414                	;0
735 574  ECHO/40                   ?0        415:'</option>
															' ?0                  	;0
736 576  NOP/0                     ?0        ?0                   ?0                  	;1
737 576  GOTO/253                  ?0        ?746                 ?416                	;0
738 579  ECHO/40                   ?0        417:'value="'        ?0                  	;0
739 580  FETCH_DIM_R/81            $236=     16?14                418:'profile_id'    	;0
740 580  ECHO/40                   ?0        $236                 ?0                  	;0
741 581  ECHO/40                   ?0        419:'">'             ?0                  	;0
742 582  FETCH_DIM_R/81            $237=     16?14                420:'profile_name'  	;0
743 582  ECHO/40                   ?0        $237                 ?0                  	;0
744 583  NOP/0                     ?0        ?0                   ?0                  	;1
745 583  GOTO/253                  ?0        ?735                 ?421                	;0
746 584  JMP/42                    ?0        ?710                 ?0                  	;0	>>710
747 584  FE_FREE/127               ?0        $227                 ?0                  	;0	<<709
748 587  ECHO/40                   ?0        422:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                            </li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="override">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4" id="category_movie"' ?0                  	;0
749 588  ISSET_ISEMPTY_CV/197      #238=     16?1                 ?0                  	;33554432
750 588  BOOL_NOT/13               #239=     #238                 ?0                  	;0
751 588  JMPZ/43                   ?0        #239                 ?753                	;0	>>753
752 589  GOTO/253                  ?0        ?774                 ?423                	;0
753 591  FETCH_DIM_R/81            $240=     16?1                 424:'type'          	;0	<<751
754 591  IS_NOT_EQUAL/18           #241=     $240                 425:'movie'         	;0
755 591  BOOL_NOT/13               #242=     #241                 ?0                  	;0
756 591  JMPZ/43                   ?0        #242                 ?758                	;0	>>758
757 592  GOTO/253                  ?0        ?774                 ?426                	;0
758 594  GOTO/253                  ?0        ?773                 ?427                	;0	<<756
759 596  GOTO/253                  ?0        ?182                 ?428                	;0
760 598  FETCH_DIM_R/81            $243=     16?1                 429:'active'        	;0
761 598  BOOL_NOT/13               #244=     $243                 ?0                  	;0
762 598  JMPZ/43                   ?0        #244                 ?764                	;0	>>764
763 599  GOTO/253                  ?0        ?765                 ?430                	;0
764 601  ECHO/40                   ?0        431:'checked '       ?0                  	;0	<<762
765 603  GOTO/253                  ?0        ?182                 ?432                	;0
766 605  FETCH_DIM_R/81            $245=     16?1                 433:'auto_subtitles'	;0
767 605  BOOL_NOT/13               #246=     $245                 ?0                  	;0
768 605  JMPZ/43                   ?0        #246                 ?770                	;0	>>770
769 606  GOTO/253                  ?0        ?771                 ?434                	;0
770 608  ECHO/40                   ?0        435:'checked '       ?0                  	;0	<<768
771 611  ECHO/40                   ?0        436:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="auto_upgrade">Auto-Upgrade Quality <i title="Automatically upgrade quality if the system finds a new file with better quality that has the same TMDb ID." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="auto_upgrade" id="auto_upgrade" type="checkbox" ' ?0                  	;0
772 612  GOTO/253                  ?0        ?422                 ?437                	;0
773 614  ECHO/40                   ?0        438:' style="display: none;"' ?0                  	;0
774 617  ECHO/40                   ?0        439:'>
													<label class="col-md-4 col-form-label" for="category_id_movie">Override Category <i title="Ignore category allocation and force category allocation." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="category_id_movie" id="category_id_movie" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
775 618  ISSET_ISEMPTY_CV/197      #247=     16?1                 ?0                  	;33554432
776 618  BOOL_NOT/13               #248=     #247                 ?0                  	;0
777 618  JMPZ/43                   ?0        #248                 ?779                	;0	>>779
778 619  GOTO/253                  ?0        ?633                 ?440                	;0
779 621  GOTO/253                  ?0        ?624                 ?441                	;0	<<777
780 623  INCLUDE_OR_EVAL/73        ?234      442:'session.php'    ?0                  	;2	<<0
781 624  INCLUDE_OR_EVAL/73        ?235      443:'functions.php'  ?0                  	;2
782 625  INIT_FCALL_BY_NAME/59     ?0        ?0                   444:'E6d500e19634D513'	;0
783 625  DO_FCALL_BY_NAME/131      $251=     ?0                   ?0                  	;0
784 625  JMPZ/43                   ?0        $251                 ?786                	;0	>>786
785 626  GOTO/253                  ?0        ?788                 ?446                	;0
786 628  INIT_FCALL_BY_NAME/59     ?0        ?0                   447:'e72f42A93714ba87'	;0	<<784
787 628  DO_FCALL_BY_NAME/131      ?237      ?0                   ?0                  	;0
788 630  GOTO/253                  ?0        ?401                 ?449                	;0
789 633  ECHO/40                   ?0        450:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="duplicate_tmdb">Allow TMDb Duplicates <i title="Disable checks for duplicates using the TMDb ID. Turn this on if you want to add duplicates based on different file locations. Auto-upgrade won\'t work if you enable this." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="duplicate_tmdb" id="duplicate_tmdb" type="checkbox" ' ?0                  	;0
790 634  ISSET_ISEMPTY_CV/197      #253=     16?1                 ?0                  	;33554432
791 634  BOOL_NOT/13               #254=     #253                 ?0                  	;0
792 634  JMPZ/43                   ?0        #254                 ?794                	;0	>>794
793 635  GOTO/253                  ?0        ?635                 ?451                	;0
794 637  FETCH_DIM_R/81            $255=     16?1                 452:'duplicate_tmdb'	;0	<<792
795 637  BOOL_NOT/13               #256=     $255                 ?0                  	;0
796 637  JMPZ/43                   ?0        #256                 ?798                	;0	>>798
797 638  GOTO/253                  ?0        ?635                 ?453                	;0
798 640  ECHO/40                   ?0        454:'checked '       ?0                  	;0	<<796
799 641  GOTO/253                  ?0        ?635                 ?455                	;0
800 643  ECHO/40                   ?0        456:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="auto_encode">Auto-Encode <i title="Start encoding as soon as the movie is added." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="auto_encode" id="auto_encode" type="checkbox" ' ?0                  	;0
801 644  ISSET_ISEMPTY_CV/197      #257=     16?1                 ?0                  	;33554432
802 644  JMPZ/43                   ?0        #257                 ?804                	;0	>>804
803 645  GOTO/253                  ?0        ?806                 ?457                	;0
804 647  ECHO/40                   ?0        458:'checked '       ?0                  	;0	<<802
805 648  GOTO/253                  ?0        ?705                 ?459                	;0
806 650  GOTO/253                  ?0        ?700                 ?460                	;0
807 653  ECHO/40                   ?0        461:'>
													<label class="col-md-4 col-form-label" for="category_id_series">Override Category <i title="Ignore category allocation and force category allocation." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="category_id_series" id="category_id_series" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
808 654  ISSET_ISEMPTY_CV/197      #258=     16?1                 ?0                  	;33554432
809 654  BOOL_NOT/13               #259=     #258                 ?0                  	;0
810 654  JMPZ/43                   ?0        #259                 ?812                	;0	>>812
811 655  GOTO/253                  ?0        ?70                  ?462                	;0
812 657  INIT_FCALL_BY_NAME/59     ?0        ?0                   463:'intval'        	;1	<<810
813 657  FETCH_DIM_FUNC_ARG/93     $260=     16?1                 465:'category_id'   	;1
814 657  SEND_VAR_EX/66            ?80       $260                 ?1                  	;0
815 657  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
816 657  IS_EQUAL/17               #262=     $261                 466:0               	;0
817 657  BOOL_NOT/13               #263=     #262                 ?0                  	;0
818 657  JMPZ/43                   ?0        #263                 ?820                	;0	>>820
819 658  GOTO/253                  ?0        ?70                  ?467                	;0
820 660  ECHO/40                   ?0        468:'selected '      ?0                  	;0	<<818
821 661  GOTO/253                  ?0        ?70                  ?469                	;0
822 663  ECHO/40                   ?0        470:' style="display: none;"' ?0                  	;0
823 664  GOTO/253                  ?0        ?168                 ?471                	;0
824 666  FETCH_DIM_R/81            $264=     16?1                 472:'type'          	;0
825 666  IS_NOT_EQUAL/18           #265=     $264                 473:'series'        	;0
826 666  BOOL_NOT/13               #266=     #265                 ?0                  	;0
827 666  JMPZ/43                   ?0        #266                 ?829                	;0	>>829
828 667  GOTO/253                  ?0        ?168                 ?474                	;0
829 669  ECHO/40                   ?0        475:' style="display: none;"' ?0                  	;0	<<827
830 670  GOTO/253                  ?0        ?168                 ?476                	;0
831 672  GOTO/253                  ?0        ?807                 ?477                	;0
832 674  FETCH_DIM_R/81            $267=     16?1                 478:'type'          	;0
833 674  IS_NOT_EQUAL/18           #268=     $267                 479:'series'        	;0
834 674  BOOL_NOT/13               #269=     #268                 ?0                  	;0
835 674  JMPZ/43                   ?0        #269                 ?837                	;0	>>837
836 675  GOTO/253                  ?0        ?838                 ?480                	;0
837 677  ECHO/40                   ?0        481:' style="display: none;"' ?0                  	;0	<<835
838 679  GOTO/253                  ?0        ?807                 ?482                	;0
839 682  FETCH_DIM_R/81            $270=     16?1                 483:'directory'     	;0
840 682  ECHO/40                   ?0        $270                 ?0                  	;0
841 684  ECHO/40                   ?0        484:'" required data-parsley-trigger="change">
														<div class="input-group-append">
															<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>
														</div>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="rclone_dir">Rclone Path <i title="Enter the Rclone path here to scan the folder using the Rclone API, would be quicker for remote drives.<br/><br/>You need to modify the rclone.conf file in the config folder with the correct mount information for this to work." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" id="rclone_dir" name="rclone_dir" class="form-control" value="' ?0                  	;0
842 685  ISSET_ISEMPTY_CV/197      #271=     16?1                 ?0                  	;33554432
843 685  BOOL_NOT/13               #272=     #271                 ?0                  	;0
844 685  JMPZ/43                   ?0        #272                 ?846                	;0	>>846
845 686  GOTO/253                  ?0        ?195                 ?485                	;0
846 688  GOTO/253                  ?0        ?193                 ?486                	;0	<<844
847 690  ISSET_ISEMPTY_CV/197      #273=     16?1                 ?0                  	;33554432
848 690  BOOL_NOT/13               #274=     #273                 ?0                  	;0
849 690  JMPZ/43                   ?0        #274                 ?851                	;0	>>851
850 691  GOTO/253                  ?0        ?856                 ?487                	;0
851 693  FETCH_DIM_R/81            $275=     16?1                 488:'fallback_title'	;0	<<849
852 693  BOOL_NOT/13               #276=     $275                 ?0                  	;0
853 693  JMPZ/43                   ?0        #276                 ?855                	;0	>>855
854 694  GOTO/253                  ?0        ?856                 ?489                	;0
855 696  ECHO/40                   ?0        490:'checked '       ?0                  	;0	<<853
856 699  GOTO/253                  ?0        ?469                 ?491                	;0
857 701  INCLUDE_OR_EVAL/73        ?262      492:'footer.php'     ?0                  	;2
858 702  NOP/0                     ?0        493:1                ?0                  	;4294967295
*/

?>