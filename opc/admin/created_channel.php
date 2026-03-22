<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?265                 ?0                  	;0	>>265
1   5    ECHO/40                   ?0        1:'													<label class="col-md-4 col-form-label" for="reencode_on_edit">Full re-encode on Edit</label>
													<div class="col-md-2">
														<input name="reencode_on_edit" id="reencode_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
													</div>
                                                    ' ?0                  	;0
2   7    ECHO/40                   ?0        2:'                                                    <label class="col-md-4 col-form-label" for="restart_on_edit">' ?0                  	;0
3   8    ISSET_ISEMPTY_CV/197      #29=      16?0                 ?0                  	;33554432
4   8    JMPZ/43                   ?0        #29                  ?6                  	;0	>>6
5   9    GOTO/253                  ?0        ?397                 ?3                  	;0
6   11   ECHO/40                   ?0        4:'Start After Creation' ?0                  	;0	<<4
7   12   GOTO/253                  ?0        ?396                 ?5                  	;0
8   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'f964b9222b35aDDD'	;0
9   14   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
10  14   FE_RESET_R/77             $31=      $30                  ?49                 	;0
11  14   FE_FETCH_R/78             ?0        $31                  16?1                	;49	>>49	<<48
12  15   NOP/0                     ?0        ?0                   ?0                  	;1
13  15   GOTO/253                  ?0        ?25                  ?8                  	;0
14  18   ECHO/40                   ?0        9:'value="'          ?0                  	;0
15  19   FETCH_DIM_R/81            $32=      16?1                 10:'id'             	;0
16  19   ECHO/40                   ?0        $32                  ?0                  	;0
17  20   ECHO/40                   ?0        11:'">'              ?0                  	;0
18  21   FETCH_DIM_R/81            $33=      16?1                 12:'bouquet_name'   	;0
19  21   ECHO/40                   ?0        $33                  ?0                  	;0
20  22   NOP/0                     ?0        ?0                   ?0                  	;1
21  22   GOTO/253                  ?0        ?22                  ?13                 	;0
22  24   ECHO/40                   ?0        14:'</option>
															' ?0                  	;0
23  26   NOP/0                     ?0        ?0                   ?0                  	;1
24  26   GOTO/253                  ?0        ?48                  ?15                 	;0
25  28   ECHO/40                   ?0        16:'															<option ' ?0                  	;0
26  29   ISSET_ISEMPTY_CV/197      #34=      16?0                 ?0                  	;33554432
27  29   BOOL_NOT/13               #35=      #34                  ?0                  	;0
28  29   JMPZ/43                   ?0        #35                  ?31                 	;0	>>31
29  30   NOP/0                     ?0        ?0                   ?0                  	;1
30  30   GOTO/253                  ?0        ?14                  ?17                 	;0
31  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'in_array'       	;2	<<28
32  32   FETCH_DIM_FUNC_ARG/93     $36=      16?0                 20:'id'             	;1
33  32   SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
34  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'json_decode'    	;2
35  32   FETCH_DIM_FUNC_ARG/93     $37=      16?1                 23:'bouquet_channels'	;1
36  32   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
37  32   SEND_VAL_EX/116           ?96       24:true              ?2                  	;0
38  32   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
39  32   SEND_VAR_NO_REF_EX/50     ?96       $38                  ?2                  	;0
40  32   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
41  32   BOOL_NOT/13               #40=      $39                  ?0                  	;0
42  32   JMPZ/43                   ?0        #40                  ?45                 	;0	>>45
43  33   NOP/0                     ?0        ?0                   ?0                  	;1
44  33   GOTO/253                  ?0        ?46                  ?25                 	;0
45  35   ECHO/40                   ?0        26:'selected '       ?0                  	;0	<<42
46  37   NOP/0                     ?0        ?0                   ?0                  	;1
47  37   GOTO/253                  ?0        ?14                  ?27                 	;0
48  38   JMP/42                    ?0        ?11                  ?0                  	;0	>>11
49  38   FE_FREE/127               ?0        $31                  ?0                  	;0	<<10
50  41   ECHO/40                   ?0        28:'														</select>
                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="channel_type">Selection Type <i title="You can create a channel by either syncing it to an existing series, selecting VOD you already have on your servers or by individually selecting files." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="channel_type" id="channel_type" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
51  42   FE_RESET_R/77             $41=      29:array (
  0 => 'Series',
  1 => 'File Browser',
  2 => 'VOD Selection',
) ?81                 	;0
52  42   FE_FETCH_R/78             #42=      $41                  16?2                	;81	>>81	<<80
53  42   ASSIGN/38                 ?14       16?3                 #42                 	;0
54  43   NOP/0                     ?0        ?0                   ?0                  	;1
55  43   GOTO/253                  ?0        ?65                  ?30                 	;0
56  45   ECHO/40                   ?0        31:'</option>
															' ?0                  	;0
57  47   NOP/0                     ?0        ?0                   ?0                  	;1
58  47   GOTO/253                  ?0        ?80                  ?32                 	;0
59  50   ECHO/40                   ?0        33:'value="'         ?0                  	;0
60  51   ECHO/40                   ?0        16?3                 ?0                  	;0
61  52   ECHO/40                   ?0        34:'">'              ?0                  	;0
62  53   ECHO/40                   ?0        16?2                 ?0                  	;0
63  54   NOP/0                     ?0        ?0                   ?0                  	;1
64  54   GOTO/253                  ?0        ?56                  ?35                 	;0
65  56   ECHO/40                   ?0        36:'															<option ' ?0                  	;0
66  57   ISSET_ISEMPTY_CV/197      #44=      16?0                 ?0                  	;33554432
67  57   BOOL_NOT/13               #45=      #44                  ?0                  	;0
68  57   JMPZ/43                   ?0        #45                  ?71                 	;0	>>71
69  58   NOP/0                     ?0        ?0                   ?0                  	;1
70  58   GOTO/253                  ?0        ?59                  ?37                 	;0
71  60   FETCH_DIM_R/81            $46=      16?4                 38:'type'           	;0	<<68
72  60   IS_EQUAL/17               #47=      $46                  16?3                	;0
73  60   BOOL_NOT/13               #48=      #47                  ?0                  	;0
74  60   JMPZ/43                   ?0        #48                  ?77                 	;0	>>77
75  61   NOP/0                     ?0        ?0                   ?0                  	;1
76  61   GOTO/253                  ?0        ?78                  ?39                 	;0
77  63   ECHO/40                   ?0        40:'selected '       ?0                  	;0	<<74
78  65   NOP/0                     ?0        ?0                   ?0                  	;1
79  65   GOTO/253                  ?0        ?59                  ?41                 	;0
80  66   JMP/42                    ?0        ?52                  ?0                  	;0	>>52
81  66   FE_FREE/127               ?0        $41                  ?0                  	;0	<<51
82  69   GOTO/253                  ?0        ?798                 ?42                 	;0
83  71   INIT_FCALL_BY_NAME/59     ?0        ?0                   43:'F769E3F0c739D1a6'	;1
84  71   SEND_VAL_EX/116           ?80       45:'live'            ?1                  	;0
85  71   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
86  71   ASSIGN/38                 ?21       16?5                 $49                 	;0
87  72   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'F93E9343c3D7Fd99'	;0
88  72   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
89  72   ASSIGN/38                 ?23       16?6                 $51                 	;0
90  73   FETCH_STATIC_PROP_IS/176  $53=      48:'rRequest'        49:'XUI'            	;0
91  73   ISSET_ISEMPTY_DIM_OBJ/115 #54=      $53                  51:'id'             	;33554432
92  73   BOOL_NOT/13               #55=      #54                  ?0                  	;0
93  73   JMPZ/43                   ?0        #55                  ?95                 	;0	>>95
94  74   GOTO/253                  ?0        ?549                 ?52                 	;0
95  76   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'f260B7a31f021e39'	;1	<<93
96  76   FETCH_STATIC_PROP_FUNC_ARG/177 $56=      55:'rRequest'        56:'XUI'            	;1
97  76   FETCH_DIM_FUNC_ARG/93     $57=      $56                  58:'id'             	;1
98  76   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
99  76   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
100 76   ASSIGN/38                 ?30       16?0                 $58                 	;0
101 77   BOOL_NOT/13               #60=      16?0                 ?0                  	;0
102 77   JMPNZ_EX/47               #60=      #60                  ?106                	;0	>>106
103 77   FETCH_DIM_R/81            $61=      16?0                 59:'type'           	;0
104 77   IS_NOT_EQUAL/18           #62=      $61                  60:3                	;0
105 77   BOOL/52                   #60=      #62                  ?0                  	;0
106 77   BOOL_NOT/13               #63=      #60                  ?0                  	;0	<<102
107 77   JMPZ/43                   ?0        #63                  ?109                	;0	>>109
108 78   GOTO/253                  ?0        ?549                 ?61                 	;0
109 80   GOTO/253                  ?0        ?547                 ?62                 	;0	<<107
110 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'f769e3f0c739d1a6'	;1
111 82   SEND_VAL_EX/116           ?80       65:'movie'           ?1                  	;0
112 82   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
113 82   FE_RESET_R/77             $65=      $64                  ?123                	;0
114 82   FE_FETCH_R/78             ?0        $65                  16?7                	;123	>>123	<<122
115 83   ECHO/40                   ?0        66:'															<option value="0:' ?0                  	;0
116 84   FETCH_DIM_R/81            $66=      16?7                 67:'id'             	;0
117 84   ECHO/40                   ?0        $66                  ?0                  	;0
118 85   ECHO/40                   ?0        68:'">'              ?0                  	;0
119 86   FETCH_DIM_R/81            $67=      16?7                 69:'category_name'  	;0
120 86   ECHO/40                   ?0        $67                  ?0                  	;0
121 87   ECHO/40                   ?0        70:'</option>
															' ?0                  	;0
122 88   JMP/42                    ?0        ?114                 ?0                  	;0	>>114
123 88   FE_FREE/127               ?0        $65                  ?0                  	;0	<<113
124 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'deCBAb9141f9eE50'	;0
125 91   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
126 91   FE_RESET_R/77             $69=      $68                  ?136                	;0
127 91   FE_FETCH_R/78             ?0        $69                  16?8                	;136	>>136	<<135
128 92   ECHO/40                   ?0        73:'															<option value="1:' ?0                  	;0
129 93   FETCH_DIM_R/81            $70=      16?8                 74:'id'             	;0
130 93   ECHO/40                   ?0        $70                  ?0                  	;0
131 94   ECHO/40                   ?0        75:'">'              ?0                  	;0
132 95   FETCH_DIM_R/81            $71=      16?8                 76:'title'          	;0
133 95   ECHO/40                   ?0        $71                  ?0                  	;0
134 96   ECHO/40                   ?0        77:'</option>
															' ?0                  	;0
135 97   JMP/42                    ?0        ?127                 ?0                  	;0	>>127
136 97   FE_FREE/127               ?0        $69                  ?0                  	;0	<<126
137 100  ECHO/40                   ?0        78:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="vod_search">Search</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="vod_search" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<table id="datatable-movies" class="table table-striped table-borderless nowrap">
														<thead>
															<tr>
																<th class="text-center">ID</th>
																<th>Name</th>
																<th>Category / Series</th>
																<th class="text-center">Actions</th>
															</tr>
														</thead>
														<tbody></tbody>
													</table>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
138 101  GOTO/253                  ?0        ?651                 ?79                 	;0
139 103  ASSIGN/38                 ?43       16?9                 80:0                	;0
140 104  FE_RESET_R/77             $73=      16?10                ?183                	;0
141 104  FE_FETCH_R/78             #74=      $73                  16?11               	;183	>>183	<<182
142 104  ASSIGN/38                 ?46       16?12                #74                 	;0
143 105  FE_RESET_R/77             $76=      16?11                ?181                	;0
144 105  FE_FETCH_R/78             ?0        $76                  16?13               	;181	>>181	<<180
145 106  ECHO/40                   ?0        81:'                                                                <tr class="rtmp_info">
                                                                    <td class="rtmp_server">
                                                                        <select id="rtmp_push_' ?0                  	;0
146 107  ECHO/40                   ?0        16?9                 ?0                  	;0
147 108  ECHO/40                   ?0        82:'" class="form-control select2" data-toggle="select2">
                                                                            ' ?0                  	;0
148 109  FE_RESET_R/77             $77=      16?14                ?171                	;0
149 109  FE_FETCH_R/78             ?0        $77                  16?15               	;171	>>171	<<170
150 110  ECHO/40                   ?0        83:'                                                                            <option value="' ?0                  	;0
151 111  FETCH_DIM_R/81            $78=      16?15                84:'id'             	;0
152 111  ECHO/40                   ?0        $78                  ?0                  	;0
153 112  ECHO/40                   ?0        85:'"'               ?0                  	;0
154 113  ISSET_ISEMPTY_CV/197      #79=      16?0                 ?0                  	;33554432
155 113  JMPZ_EX/46                #79=      #79                  ?159                	;0	>>159
156 113  FETCH_DIM_R/81            $80=      16?15                86:'id'             	;0
157 113  IS_EQUAL/17               #81=      16?12                $80                 	;0
158 113  BOOL/52                   #79=      #81                  ?0                  	;0
159 113  BOOL_NOT/13               #82=      #79                  ?0                  	;0	<<155
160 113  JMPZ/43                   ?0        #82                  ?165                	;0	>>165
161 114  NOP/0                     ?0        ?0                   ?0                  	;1
162 114  NOP/0                     ?0        ?0                   ?0                  	;1
163 114  NOP/0                     ?0        ?0                   ?0                  	;1
164 114  GOTO/253                  ?0        ?166                 ?87                 	;0
165 116  ECHO/40                   ?0        88:' selected'       ?0                  	;0	<<160
166 118  ECHO/40                   ?0        89:'>'               ?0                  	;0
167 119  FETCH_DIM_R/81            $83=      16?15                90:'server_name'    	;0
168 119  ECHO/40                   ?0        $83                  ?0                  	;0
169 120  ECHO/40                   ?0        91:'</option>
                                                                            ' ?0                  	;0
170 121  JMP/42                    ?0        ?149                 ?0                  	;0	>>149
171 121  FE_FREE/127               ?0        $77                  ?0                  	;0	<<148
172 124  ECHO/40                   ?0        92:'                                                                        </select>
                                                                    </td>
                                                                    <td class="input-group">
                                                                        <input type="text" class="form-control" value="' ?0                  	;0
173 125  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'htmlspecialchars'	;1
174 125  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
175 125  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
176 125  ECHO/40                   ?0        $84                  ?0                  	;0
177 126  ECHO/40                   ?0        95:'">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btn-danger waves-effect waves-light btn-fixed-xs" onClick="removeRTMP(this);" type="button"><i class="mdi mdi-close"></i></button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            ' ?0                  	;0
178 127  POST_INC/36               #85=      16?9                 ?0                  	;0
179 127  FREE/70                   ?0        #85                  ?0                  	;0
180 128  JMP/42                    ?0        ?144                 ?0                  	;0	>>144
181 128  FE_FREE/127               ?0        $76                  ?0                  	;0	<<143
182 131  JMP/42                    ?0        ?141                 ?0                  	;0	>>141
183 131  FE_FREE/127               ?0        $73                  ?0                  	;0	<<140
184 134  ECHO/40                   ?0        96:'                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <ul class="list-inline wizard mb-0" style="padding-top: 30px;">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
185 135  FETCH_DIM_R/81            $86=      16?16                97:'prev'           	;0
186 135  ECHO/40                   ?0        $86                  ?0                  	;0
187 136  GOTO/253                  ?0        ?561                 ?98                 	;0
188 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'htmlspecialchars'	;1
189 138  FETCH_DIM_FUNC_ARG/93     $87=      16?0                 101:'custom_sid'    	;1
190 138  SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
191 138  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
192 138  ECHO/40                   ?0        $88                  ?0                  	;0
193 140  ECHO/40                   ?0        102:'">
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="notes">Notes</label>
													<div class="col-md-8">
														<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
194 141  ISSET_ISEMPTY_CV/197      #89=      16?0                 ?0                  	;33554432
195 141  BOOL_NOT/13               #90=      #89                  ?0                  	;0
196 141  JMPZ/43                   ?0        #90                  ?198                	;0	>>198
197 142  GOTO/253                  ?0        ?515                 ?103                	;0
198 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'htmlspecialchars'	;1	<<196
199 144  FETCH_DIM_FUNC_ARG/93     $91=      16?0                 106:'notes'         	;1
200 144  SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
201 144  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
202 144  ECHO/40                   ?0        $92                  ?0                  	;0
203 145  GOTO/253                  ?0        ?515                 ?107                	;0
204 147  ECHO/40                   ?0        108:'							<input type="hidden" name="edit" value="' ?0                  	;0
205 148  FETCH_DIM_R/81            $93=      16?0                 109:'id'            	;0
206 148  ECHO/40                   ?0        $93                  ?0                  	;0
207 149  ECHO/40                   ?0        110:'" />
							'  ?0                  	;0
208 151  ECHO/40                   ?0        111:'							<input type="hidden" name="video_files" id="video_files" value="" />
							<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            <input type="hidden" name="external_push" id="external_push" value="" />
                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />
                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									<li class="nav-item" id="selection_nav">
										<a href="#selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-movie mr-1"></i>
											<span class="d-none d-sm-inline">Selection</span>
										</a>
									</li>
									<li class="nav-item" id="review_nav">
										<a href="#review" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-marker mr-1"></i>
											<span class="d-none d-sm-inline">Review</span>
										</a>
									</li>
									<li class="nav-item" id="videos_nav">
										<a href="#videos" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-movie mr-1"></i>
											<span class="d-none d-sm-inline">Videos</span>
										</a>
									</li>
                                    ' ?0                  	;0
209 152  GOTO/253                  ?0        ?642                 ?112                	;0
210 155  ASSIGN/38                 ?65       16?4                 113:array (
  'type' => 0,
)	;0
211 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'B25F6f50dfA04eb7'	;1
212 158  FETCH_STATIC_PROP_FUNC_ARG/177 $95=      116:'rRequest'       117:'XUI'           	;1
213 158  FETCH_DIM_FUNC_ARG/93     $96=      $95                  119:'id'            	;1
214 158  SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
215 158  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
216 158  ASSIGN/38                 ?69       16?17                $97                 	;0
217 159  GOTO/253                  ?0        ?431                 ?120                	;0
218 161  ISSET_ISEMPTY_CV/197      #99=      16?0                 ?0                  	;33554432
219 161  JMPZ/43                   ?0        #99                  ?221                	;0	>>221
220 162  GOTO/253                  ?0        ?223                 ?121                	;0
221 164  ECHO/40                   ?0        122:'checked '       ?0                  	;0	<<219
222 165  GOTO/253                  ?0        ?425                 ?123                	;0
223 167  FETCH_DIM_R/81            $100=     16?0                 124:'allow_record'  	;0
224 167  IS_EQUAL/17               #101=     $100                 125:1               	;0
225 167  BOOL_NOT/13               #102=     #101                 ?0                  	;0
226 167  JMPZ/43                   ?0        #102                 ?228                	;0	>>228
227 168  GOTO/253                  ?0        ?425                 ?126                	;0
228 170  GOTO/253                  ?0        ?424                 ?127                	;0	<<226
229 172  FETCH_STATIC_PROP_IS/176  $103=     128:'rRequest'       129:'XUI'           	;0
230 172  ISSET_ISEMPTY_DIM_OBJ/115 #104=     $103                 131:'id'            	;33554432
231 172  BOOL_NOT/13               #105=     #104                 ?0                  	;0
232 172  JMPZ/43                   ?0        #105                 ?234                	;0	>>234
233 173  GOTO/253                  ?0        ?241                 ?132                	;0
234 175  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'intval'        	;1	<<232
235 175  FETCH_STATIC_PROP_FUNC_ARG/177 $106=     135:'rRequest'       136:'XUI'           	;1
236 175  FETCH_DIM_FUNC_ARG/93     $107=     $106                 138:'id'            	;1
237 175  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
238 175  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
239 175  CONCAT/8                  #109=     139:'?id='           $108                	;0
240 175  ECHO/40                   ?0        #109                 ?0                  	;0
241 177  ECHO/40                   ?0        140:'" method="POST" id="stream_form" data-parsley-validate="">
							' ?0                  	;0
242 178  ISSET_ISEMPTY_CV/197      #110=     16?0                 ?0                  	;33554432
243 178  BOOL_NOT/13               #111=     #110                 ?0                  	;0
244 178  JMPZ/43                   ?0        #111                 ?246                	;0	>>246
245 179  GOTO/253                  ?0        ?208                 ?141                	;0
246 181  GOTO/253                  ?0        ?204                 ?142                	;0	<<244
247 183  ECHO/40                   ?0        143:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
248 184  FETCH_IS/89               $112=     144:'_SERVER'        ?0                  	;0
249 184  ISSET_ISEMPTY_DIM_OBJ/115 #113=     $112                 145:'HTTP_X_REQUESTED_WITH'	;16777216
250 184  BOOL_NOT/13               #114=     #113                 ?0                  	;0
251 184  JMPZ_EX/46                #114=     #114                 ?259                	;0	>>259
252 184  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'strtolower'    	;1
253 184  FETCH_FUNC_ARG/92         $115=     148:'_SERVER'        ?0                  	;1
254 184  FETCH_DIM_FUNC_ARG/93     $116=     $115                 149:'HTTP_X_REQUESTED_WITH'	;1
255 184  SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
256 184  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
257 184  IS_EQUAL/17               #118=     $117                 150:'xmlhttprequest'	;0
258 184  BOOL/52                   #114=     #118                 ?0                  	;0
259 184  BOOL_NOT/13               #119=     #114                 ?0                  	;0	<<251
260 184  JMPZ/43                   ?0        #119                 ?262                	;0	>>262
261 185  GOTO/253                  ?0        ?263                 ?151                	;0
262 187  ECHO/40                   ?0        152:' style="display: none;"' ?0                  	;0	<<260
263 189  ECHO/40                   ?0        153:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
264 190  GOTO/253                  ?0        ?507                 ?154                	;0
265 192  INCLUDE_OR_EVAL/73        ?91       155:'session.php'    ?0                  	;2	<<0
266 193  INCLUDE_OR_EVAL/73        ?92       156:'functions.php'  ?0                  	;2
267 194  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'E6D500e19634D513'	;0
268 194  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
269 194  JMPZ/43                   ?0        $122                 ?271                	;0	>>271
270 195  GOTO/253                  ?0        ?273                 ?159                	;0
271 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'E72f42A93714BA87'	;0	<<269
272 197  DO_FCALL_BY_NAME/131      ?94       ?0                   ?0                  	;0
273 199  GOTO/253                  ?0        ?83                  ?162                	;0
274 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'json_decode'   	;2
275 201  FETCH_DIM_FUNC_ARG/93     $124=     16?0                 165:'external_push' 	;1
276 201  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
277 201  SEND_VAL_EX/116           ?96       166:true             ?2                  	;0
278 201  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
279 201  ASSIGN/38                 ?97       16?10                $125                	;0
280 202  JMPZ/43                   ?0        16?10                ?282                	;0	>>282
281 203  GOTO/253                  ?0        ?283                 ?167                	;0
282 205  ASSIGN/38                 ?98       16?10                168:array (
  0 => 
  array (
    0 => '',
  ),
)	;0	<<280
283 208  GOTO/253                  ?0        ?139                 ?169                	;0
284 211  ECHO/40                   ?0        170:'Edit'           ?0                  	;0
285 213  ECHO/40                   ?0        171:'" />
											</li>
										</ul>
									</div>
								</div>
							</div>
						</form>
						<div id="file-browser" class="mfp-hide white-popup-block">
							<div class="col-12">
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="server_id">Server Name</label>
									<div class="col-md-8">
										<select id="server_id" class="form-control select2" data-toggle="select2">
											' ?0                  	;0
286 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'c6A90bfCd425eB63'	;0
287 214  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
288 214  FE_RESET_R/77             $129=     $128                 ?298                	;0
289 214  FE_FETCH_R/78             ?0        $129                 16?15               	;298	>>298	<<297
290 215  ECHO/40                   ?0        174:'											<option value="' ?0                  	;0
291 216  FETCH_DIM_R/81            $130=     16?15                175:'id'            	;0
292 216  ECHO/40                   ?0        $130                 ?0                  	;0
293 217  ECHO/40                   ?0        176:'">'             ?0                  	;0
294 218  FETCH_DIM_R/81            $131=     16?15                177:'server_name'   	;0
295 218  ECHO/40                   ?0        $131                 ?0                  	;0
296 219  ECHO/40                   ?0        178:'</option>
											' ?0                  	;0
297 220  JMP/42                    ?0        ?289                 ?0                  	;0	>>289
298 220  FE_FREE/127               ?0        $129                 ?0                  	;0	<<288
299 222  GOTO/253                  ?0        ?383                 ?179                	;0
300 224  ECHO/40                   ?0        180:'value="-1">Don\'t Transcode - Symlink Files</option>
															' ?0                  	;0
301 225  FE_RESET_R/77             $132=     16?6                 ?351                	;0
302 225  FE_FETCH_R/78             ?0        $132                 16?18               	;351	>>351	<<350
303 226  NOP/0                     ?0        ?0                   ?0                  	;1
304 226  GOTO/253                  ?0        ?316                 ?181                	;0
305 228  ECHO/40                   ?0        182:'</option>
															' ?0                  	;0
306 230  NOP/0                     ?0        ?0                   ?0                  	;1
307 230  GOTO/253                  ?0        ?350                 ?183                	;0
308 233  ECHO/40                   ?0        184:'value="'        ?0                  	;0
309 234  FETCH_DIM_R/81            $133=     16?18                185:'profile_id'    	;0
310 234  ECHO/40                   ?0        $133                 ?0                  	;0
311 235  ECHO/40                   ?0        186:'">'             ?0                  	;0
312 236  FETCH_DIM_R/81            $134=     16?18                187:'profile_name'  	;0
313 236  ECHO/40                   ?0        $134                 ?0                  	;0
314 237  NOP/0                     ?0        ?0                   ?0                  	;1
315 237  GOTO/253                  ?0        ?305                 ?188                	;0
316 239  ECHO/40                   ?0        189:'															<option ' ?0                  	;0
317 240  ISSET_ISEMPTY_CV/197      #135=     16?0                 ?0                  	;33554432
318 240  JMPZ/43                   ?0        #135                 ?321                	;0	>>321
319 241  NOP/0                     ?0        ?0                   ?0                  	;1
320 241  GOTO/253                  ?0        ?334                 ?190                	;0
321 243  FETCH_DIM_R/81            $136=     16?18                191:'profile_id'    	;0	<<318
322 243  FETCH_DIM_R/81            $137=     16?6                 192:0               	;0
323 243  FETCH_DIM_R/81            $138=     $137                 193:'profile_id'    	;0
324 243  IS_EQUAL/17               #139=     $136                 $138                	;0
325 243  BOOL_NOT/13               #140=     #139                 ?0                  	;0
326 243  JMPZ/43                   ?0        #140                 ?329                	;0	>>329
327 244  NOP/0                     ?0        ?0                   ?0                  	;1
328 244  GOTO/253                  ?0        ?330                 ?194                	;0
329 246  ECHO/40                   ?0        195:'selected '      ?0                  	;0	<<326
330 248  NOP/0                     ?0        ?0                   ?0                  	;1
331 248  GOTO/253                  ?0        ?332                 ?196                	;0
332 250  NOP/0                     ?0        ?0                   ?0                  	;1
333 250  GOTO/253                  ?0        ?308                 ?197                	;0
334 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   198:'intval'        	;1
335 252  FETCH_DIM_FUNC_ARG/93     $141=     16?0                 200:'transcode_profile_id'	;1
336 252  SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
337 252  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
338 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'intval'        	;1
339 252  FETCH_DIM_FUNC_ARG/93     $143=     16?18                203:'profile_id'    	;1
340 252  SEND_VAR_EX/66            ?80       $143                 ?1                  	;0
341 252  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
342 252  IS_EQUAL/17               #145=     $142                 $144                	;0
343 252  BOOL_NOT/13               #146=     #145                 ?0                  	;0
344 252  JMPZ/43                   ?0        #146                 ?347                	;0	>>347
345 253  NOP/0                     ?0        ?0                   ?0                  	;1
346 253  GOTO/253                  ?0        ?348                 ?204                	;0
347 255  ECHO/40                   ?0        205:'selected '      ?0                  	;0	<<344
348 257  NOP/0                     ?0        ?0                   ?0                  	;1
349 257  GOTO/253                  ?0        ?308                 ?206                	;0
350 258  JMP/42                    ?0        ?302                 ?0                  	;0	>>302
351 258  FE_FREE/127               ?0        $132                 ?0                  	;0	<<301
352 261  ECHO/40                   ?0        207:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="rtmp_output">Output RTMP <i title="Feed stream to the RTMP server for output to RTMP clients." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-3">
														<input name="rtmp_output" id="rtmp_output" type="checkbox" ' ?0                  	;0
353 262  ISSET_ISEMPTY_CV/197      #147=     16?0                 ?0                  	;33554432
354 262  BOOL_NOT/13               #148=     #147                 ?0                  	;0
355 262  JMPZ/43                   ?0        #148                 ?357                	;0	>>357
356 263  GOTO/253                  ?0        ?537                 ?208                	;0
357 265  GOTO/253                  ?0        ?531                 ?209                	;0	<<355
358 267  ECHO/40                   ?0        210:'</a>
												<a href="javascript: void(0);" onClick="MoveUp(\'videos\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>
												<a href="javascript: void(0);" onClick="MoveDown(\'videos\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>
												<a href="javascript: void(0);" onClick="Remove(\'videos\')" class="btn btn-warning"><i class="mdi mdi-close"></i></a>
												<a href="javascript: void(0);" onClick="AtoZ(\'videos\')" class="btn btn-info">A to Z</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="rtmp-push">
										<div class="row">
											<div class="col-12">
                                                <div class="alert bg-info text-white border-0" role="alert">
													RTMP Push will allow you to push your channels to RTMP servers, such as the one that runs with XUI. The `Push From` server needs to be enabled in the servers tab for this to be activated.
												</div>
                                                <table id="datatable-rtmp" class="table table-striped table-borderless mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Push From</th>
                                                            <th>RTMP URL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="rtmp">
                                                        ' ?0                  	;0
359 268  ISSET_ISEMPTY_CV/197      #149=     16?0                 ?0                  	;33554432
360 268  JMPZ/43                   ?0        #149                 ?362                	;0	>>362
361 269  GOTO/253                  ?0        ?364                 ?211                	;0
362 271  ASSIGN/38                 ?121      16?10                212:array (
  0 => 
  array (
    0 => '',
  ),
)	;0	<<360
363 272  GOTO/253                  ?0        ?283                 ?213                	;0
364 274  GOTO/253                  ?0        ?274                 ?214                	;0
365 276  ISSET_ISEMPTY_CV/197      #151=     16?0                 ?0                  	;33554432
366 276  JMPZ/43                   ?0        #151                 ?368                	;0	>>368
367 277  GOTO/253                  ?0        ?382                 ?215                	;0
368 279  FE_RESET_R/77             $152=     16?14                ?380                	;0	<<366
369 279  FE_FETCH_R/78             ?0        $152                 16?15               	;380	>>380	<<379
370 280  FETCH_DIM_R/81            $154=     16?15                216:'id'            	;0
371 280  INIT_ARRAY/71             #155=     $154                 217:'id'            	;22
372 280  ADD_ARRAY_ELEMENT/72      #155=     218:'offline'        219:'parent'        	;0
373 280  FETCH_DIM_R/81            $156=     16?15                220:'server_name'   	;0
374 280  ADD_ARRAY_ELEMENT/72      #155=     $156                 221:'text'          	;0
375 280  ADD_ARRAY_ELEMENT/72      #155=     222:'mdi mdi-server-network' 223:'icon'          	;0
376 280  ADD_ARRAY_ELEMENT/72      #155=     224:array (
  'opened' => true,
) 225:'state'         	;0
377 280  ASSIGN_DIM/147            ?124      16?19                ?4386466            	;0
378 280  OP_DATA/137               ?0        #155                 ?0                  	;0
379 281  JMP/42                    ?0        ?369                 ?0                  	;0	>>369
380 281  FE_FREE/127               ?0        $152                 ?0                  	;0	<<368
381 284  GOTO/253                  ?0        ?504                 ?226                	;0
382 286  GOTO/253                  ?0        ?846                 ?227                	;0
383 289  ECHO/40                   ?0        228:'										</select>
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="current_path">Current Path</label>
									<div class="col-md-8 input-group">
										<input type="text" id="current_path" name="current_path" class="form-control" value="/">
										<div class="input-group-append">
											<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>
										</div>
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
								<div class="float-right">
									<input id="select_folder" type="button" class="btn btn-info" value="Add This Directory" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
384 290  GOTO/253                  ?0        ?875                 ?229                	;0
385 292  INIT_FCALL_BY_NAME/59     ?0        ?0                   230:'intval'        	;1
386 292  FETCH_DIM_FUNC_ARG/93     $157=     16?0                 232:'transcode_profile_id'	;1
387 292  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
388 292  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
389 292  IS_EQUAL/17               #159=     $158                 233:0               	;0
390 292  BOOL_NOT/13               #160=     #159                 ?0                  	;0
391 292  JMPZ/43                   ?0        #160                 ?393                	;0	>>393
392 293  GOTO/253                  ?0        ?394                 ?234                	;0
393 295  ECHO/40                   ?0        235:'selected '      ?0                  	;0	<<391
394 298  ECHO/40                   ?0        236:'value="0">Quick Transcode - Copy Codecs</option>
                                                            <option ' ?0                  	;0
395 299  GOTO/253                  ?0        ?861                 ?237                	;0
396 301  GOTO/253                  ?0        ?398                 ?238                	;0
397 303  ECHO/40                   ?0        239:'Restart on Edit' ?0                  	;0
398 305  ECHO/40                   ?0        240:'</label>
													<div class="col-md-2">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
399 306  GOTO/253                  ?0        ?552                 ?241                	;0
400 308  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'a6fcc34Ea39454A9'	;1
401 308  FETCH_DIM_FUNC_ARG/93     $161=     16?0                 244:'id'            	;1
402 308  SEND_VAR_EX/66            ?80       $161                 ?1                  	;0
403 308  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
404 308  ASSIGN/38                 ?134      16?20                $162                	;0
405 309  FE_RESET_R/77             $164=     16?20                ?421                	;0
406 309  FE_FETCH_R/78             #165=     $164                 16?21               	;421	>>421	<<420
407 309  ASSIGN/38                 ?137      16?12                #165                	;0
408 310  ECHO/40                   ?0        245:'				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Error on Server - ' ?0                  	;0
409 311  FETCH_DIM_R/81            $167=     16?14                16?12               	;0
410 311  FETCH_DIM_R/81            $168=     $167                 246:'server_name'   	;0
411 311  ECHO/40                   ?0        $168                 ?0                  	;0
412 312  ECHO/40                   ?0        247:'</strong><br/>
					' ?0                  	;0
413 313  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'str_replace'   	;3
414 313  SEND_VAL_EX/116           ?80       250:'
'              ?1                  	;0
415 313  SEND_VAL_EX/116           ?96       251:'<br/>'          ?2                  	;0
416 313  SEND_VAR_EX/66            ?112      16?21                ?3                  	;0
417 313  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
418 313  ECHO/40                   ?0        $169                 ?0                  	;0
419 314  ECHO/40                   ?0        252:'				</div>
				' ?0                  	;0
420 315  JMP/42                    ?0        ?406                 ?0                  	;0	>>406
421 315  FE_FREE/127               ?0        $164                 ?0                  	;0	<<405
422 319  ECHO/40                   ?0        253:'				<div class="card">
					<div class="card-body">
						<form action="./created_channel' ?0                  	;0
423 320  GOTO/253                  ?0        ?229                 ?254                	;0
424 322  ECHO/40                   ?0        255:'checked '       ?0                  	;0
425 325  ECHO/40                   ?0        256:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="custom_sid">Custom Channel SID <i title="Here you can specify the SID of the channel in order to work with the epg on the enigma2 devices. You have to specify the code with the \':\' but without the first number, 1 or 4097 . Example: if we have this code:  \'1:0:1:13f:157c:13e:820000:0:0:0:2097\' then you have to add on this field:  \':0:1:13f:157c:13e:820000:0:0:0:" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="' ?0                  	;0
426 326  ISSET_ISEMPTY_CV/197      #170=     16?0                 ?0                  	;33554432
427 326  BOOL_NOT/13               #171=     #170                 ?0                  	;0
428 326  JMPZ/43                   ?0        #171                 ?430                	;0	>>430
429 327  GOTO/253                  ?0        ?193                 ?257                	;0
430 329  GOTO/253                  ?0        ?188                 ?258                	;0	<<428
431 331  FE_RESET_R/77             $172=     16?14                ?503                	;0
432 331  FE_FETCH_R/78             ?0        $172                 16?15               	;503	>>503	<<502
433 332  NOP/0                     ?0        ?0                   ?0                  	;1
434 332  GOTO/253                  ?0        ?435                 ?259                	;0
435 334  INIT_FCALL_BY_NAME/59     ?0        ?0                   260:'intval'        	;1
436 334  FETCH_DIM_FUNC_ARG/93     $173=     16?15                262:'id'            	;1
437 334  SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
438 334  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
439 334  ISSET_ISEMPTY_DIM_OBJ/115 #175=     16?17                $174                	;33554432
440 334  JMPZ/43                   ?0        #175                 ?443                	;0	>>443
441 335  NOP/0                     ?0        ?0                   ?0                  	;1
442 335  GOTO/253                  ?0        ?446                 ?263                	;0
443 337  ASSIGN/38                 ?147      16?22                264:'offline'       	;0	<<440
444 338  NOP/0                     ?0        ?0                   ?0                  	;1
445 338  GOTO/253                  ?0        ?491                 ?265                	;0
446 340  INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'intval'        	;1
447 340  FETCH_DIM_FUNC_ARG/93     $177=     16?15                268:'id'            	;1
448 340  SEND_VAR_EX/66            ?80       $177                 ?1                  	;0
449 340  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
450 340  FETCH_DIM_R/81            $179=     16?17                $178                	;0
451 340  FETCH_DIM_R/81            $180=     $179                 269:'parent_id'     	;0
452 340  IS_NOT_EQUAL/18           #181=     $180                 270:0               	;0
453 340  JMPZ/43                   ?0        #181                 ?456                	;0	>>456
454 341  NOP/0                     ?0        ?0                   ?0                  	;1
455 341  GOTO/253                  ?0        ?481                 ?271                	;0
456 343  NOP/0                     ?0        ?0                   ?0                  	;1	<<453
457 343  GOTO/253                  ?0        ?458                 ?272                	;0
458 345  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'intval'        	;1
459 345  FETCH_DIM_FUNC_ARG/93     $182=     16?15                275:'id'            	;1
460 345  SEND_VAR_EX/66            ?80       $182                 ?1                  	;0
461 345  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
462 345  FETCH_DIM_R/81            $184=     16?17                $183                	;0
463 345  FETCH_DIM_R/81            $185=     $184                 276:'on_demand'     	;0
464 345  BOOL_NOT/13               #186=     $185                 ?0                  	;0
465 345  JMPZ/43                   ?0        #186                 ?468                	;0	>>468
466 346  NOP/0                     ?0        ?0                   ?0                  	;1
467 346  GOTO/253                  ?0        ?474                 ?277                	;0
468 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'intval'        	;1	<<465
469 348  FETCH_DIM_FUNC_ARG/93     $188=     16?15                280:'id'            	;1
470 348  SEND_VAR_EX/66            ?80       $188                 ?1                  	;0
471 348  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
472 348  ASSIGN_DIM/147            ?158      16?23                ?4397406            	;0
473 348  OP_DATA/137               ?0        $189                 ?0                  	;0
474 350  ASSIGN/38                 ?161      16?22                281:'source'        	;0
475 351  NOP/0                     ?0        ?0                   ?0                  	;1
476 351  GOTO/253                  ?0        ?491                 ?282                	;0
477 352  NOP/0                     ?0        ?0                   ?0                  	;1
478 352  GOTO/253                  ?0        ?481                 ?283                	;0
479 355  NOP/0                     ?0        ?0                   ?0                  	;1
480 355  GOTO/253                  ?0        ?502                 ?284                	;0
481 358  INIT_FCALL_BY_NAME/59     ?0        ?0                   285:'intval'        	;1
482 358  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'intval'        	;1
483 358  FETCH_DIM_FUNC_ARG/93     $191=     16?15                289:'id'            	;1
484 358  SEND_VAR_EX/66            ?80       $191                 ?1                  	;0
485 358  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
486 358  FETCH_DIM_FUNC_ARG/93     $193=     16?17                $192                	;1
487 358  FETCH_DIM_FUNC_ARG/93     $194=     $193                 290:'parent_id'     	;1
488 358  SEND_VAR_EX/66            ?80       $194                 ?1                  	;0
489 358  DO_FCALL_BY_NAME/131      $195=     ?0                   ?0                  	;0
490 358  ASSIGN/38                 ?167      16?22                $195                	;0
491 361  FETCH_DIM_R/81            $198=     16?15                291:'id'            	;0
492 361  INIT_ARRAY/71             #199=     $198                 292:'id'            	;22
493 361  ADD_ARRAY_ELEMENT/72      #199=     16?22                293:'parent'        	;0
494 361  FETCH_DIM_R/81            $200=     16?15                294:'server_name'   	;0
495 361  ADD_ARRAY_ELEMENT/72      #199=     $200                 295:'text'          	;0
496 361  ADD_ARRAY_ELEMENT/72      #199=     296:'mdi mdi-server-network' 297:'icon'          	;0
497 361  ADD_ARRAY_ELEMENT/72      #199=     298:array (
  'opened' => true,
) 299:'state'         	;0
498 361  ASSIGN_DIM/147            ?168      16?19                ?2670194944         	;0
499 361  OP_DATA/137               ?0        #199                 ?0                  	;0
500 362  NOP/0                     ?0        ?0                   ?0                  	;1
501 362  GOTO/253                  ?0        ?479                 ?300                	;0
502 363  JMP/42                    ?0        ?432                 ?0                  	;0	>>432
503 363  FE_FREE/127               ?0        $172                 ?0                  	;0	<<431
504 367  ASSIGN/38                 ?172      16?24                301:'Created Channel'	;0
505 368  INCLUDE_OR_EVAL/73        ?173      302:'header.php'     ?0                  	;2
506 369  GOTO/253                  ?0        ?247                 ?303                	;0
507 371  INCLUDE_OR_EVAL/73        ?174      304:'topbar.php'     ?0                  	;2
508 372  ECHO/40                   ?0        305:'					</div>
					<h4 class="page-title">' ?0                  	;0
509 373  ISSET_ISEMPTY_CV/197      #204=     16?0                 ?0                  	;33554432
510 373  JMPZ/43                   ?0        #204                 ?512                	;0	>>512
511 374  GOTO/253                  ?0        ?539                 ?306                	;0
512 376  ECHO/40                   ?0        307:'Create Channel' ?0                  	;0	<<510
513 377  GOTO/253                  ?0        ?541                 ?308                	;0
514 378  GOTO/253                  ?0        ?539                 ?309                	;0
515 381  ECHO/40                   ?0        310:'</textarea>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item nextb float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="selection">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="server_idc">Server Name</label>
													<div class="col-md-8">
														<select id="server_idc" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
516 382  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'C6a90BFcD425EB63'	;0
517 382  DO_FCALL_BY_NAME/131      $205=     ?0                   ?0                  	;0
518 382  FE_RESET_R/77             $206=     $205                 ?528                	;0
519 382  FE_FETCH_R/78             ?0        $206                 16?15               	;528	>>528	<<527
520 383  ECHO/40                   ?0        313:'															<option value="' ?0                  	;0
521 384  FETCH_DIM_R/81            $207=     16?15                314:'id'            	;0
522 384  ECHO/40                   ?0        $207                 ?0                  	;0
523 385  ECHO/40                   ?0        315:'">'             ?0                  	;0
524 386  FETCH_DIM_R/81            $208=     16?15                316:'server_name'   	;0
525 386  ECHO/40                   ?0        $208                 ?0                  	;0
526 387  ECHO/40                   ?0        317:'</option>
															' ?0                  	;0
527 388  JMP/42                    ?0        ?519                 ?0                  	;0	>>519
528 388  FE_FREE/127               ?0        $206                 ?0                  	;0	<<518
529 391  ECHO/40                   ?0        318:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_name">Category / Series</label>
													<div class="col-md-8">
														<select id="category_idv" class="form-control select2" data-toggle="select2">
															<option value="" selected>No Filter</option>
															' ?0                  	;0
530 392  GOTO/253                  ?0        ?110                 ?319                	;0
531 394  FETCH_DIM_R/81            $209=     16?0                 320:'rtmp_output'   	;0
532 394  IS_EQUAL/17               #210=     $209                 321:1               	;0
533 394  BOOL_NOT/13               #211=     #210                 ?0                  	;0
534 394  JMPZ/43                   ?0        #211                 ?536                	;0	>>536
535 395  GOTO/253                  ?0        ?537                 ?322                	;0
536 397  ECHO/40                   ?0        323:'checked '       ?0                  	;0	<<534
537 400  ECHO/40                   ?0        324:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="allow_record">Allow Recording <i title="Allow MAG devices to record this channel." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="allow_record" id="allow_record" type="checkbox" ' ?0                  	;0
538 401  GOTO/253                  ?0        ?218                 ?325                	;0
539 404  FETCH_DIM_R/81            $212=     16?0                 326:'stream_display_name'	;0
540 404  ECHO/40                   ?0        $212                 ?0                  	;0
541 406  ECHO/40                   ?0        327:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
542 407  ISSET_ISEMPTY_CV/197      #213=     16?0                 ?0                  	;33554432
543 407  BOOL_NOT/13               #214=     #213                 ?0                  	;0
544 407  JMPZ/43                   ?0        #214                 ?546                	;0	>>546
545 408  GOTO/253                  ?0        ?422                 ?328                	;0
546 410  GOTO/253                  ?0        ?400                 ?329                	;0	<<544
547 412  INIT_FCALL_BY_NAME/59     ?0        ?0                   330:'e72f42A93714ba87'	;0
548 412  DO_FCALL_BY_NAME/131      ?186      ?0                   ?0                  	;0
549 415  ASSIGN/38                 ?187      16?23                332:array (
)       	;0
550 416  ASSIGN/38                 ?188      16?19                333:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Online</strong>',
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
551 417  GOTO/253                  ?0        ?365                 ?334                	;0
552 419  FETCH_DIM_R/81            $218=     16?16                335:'prev'          	;0
553 419  ECHO/40                   ?0        $218                 ?0                  	;0
554 420  ECHO/40                   ?0        336:'</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_stream" type="submit" class="btn btn-primary" value="' ?0                  	;0
555 421  ISSET_ISEMPTY_CV/197      #219=     16?0                 ?0                  	;33554432
556 421  JMPZ/43                   ?0        #219                 ?558                	;0	>>558
557 422  GOTO/253                  ?0        ?284                 ?337                	;0
558 424  ECHO/40                   ?0        338:'Create'         ?0                  	;0	<<556
559 425  GOTO/253                  ?0        ?285                 ?339                	;0
560 426  GOTO/253                  ?0        ?284                 ?340                	;0
561 428  ECHO/40                   ?0        341:'</a>
                                            </li>
											<li class="list-inline-item float-right">
                                                <a onClick="addRTMP();" class="btn btn-info btn-pointer">Add RTMP URL</a>
												<a href="javascript: void(0);" class="btn nextb btn-secondary">Next</a>
											</li>
										</ul>
                                    </div>
									<div class="tab-pane" id="load-balancing">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="servers">Server Tree</label>
													<div class="col-md-8">
														<div id="server_tree"></div>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="on_demand">On-Demand Servers</label>
													<div class="col-md-8">
                                                        <select name="on_demand[]" id="on_demand" class="form-control select2-multiple select2" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
562 429  FE_RESET_R/77             $220=     16?14                ?586                	;0
563 429  FE_FETCH_R/78             ?0        $220                 16?15               	;586	>>586	<<585
564 430  ECHO/40                   ?0        342:'															<option value="' ?0                  	;0
565 431  FETCH_DIM_R/81            $221=     16?15                343:'id'            	;0
566 431  ECHO/40                   ?0        $221                 ?0                  	;0
567 432  ECHO/40                   ?0        344:'"'              ?0                  	;0
568 433  ISSET_ISEMPTY_CV/197      #222=     16?25                ?0                  	;33554432
569 433  JMPZ_EX/46                #222=     #222                 ?576                	;0	>>576
570 433  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'in_array'      	;2
571 433  FETCH_DIM_FUNC_ARG/93     $223=     16?15                347:'id'            	;1
572 433  SEND_VAR_EX/66            ?80       $223                 ?1                  	;0
573 433  SEND_VAR_EX/66            ?96       16?23                ?2                  	;0
574 433  DO_FCALL_BY_NAME/131      $224=     ?0                   ?0                  	;0
575 433  BOOL/52                   #222=     $224                 ?0                  	;0
576 433  BOOL_NOT/13               #225=     #222                 ?0                  	;0	<<569
577 433  JMPZ/43                   ?0        #225                 ?580                	;0	>>580
578 434  NOP/0                     ?0        ?0                   ?0                  	;1
579 434  GOTO/253                  ?0        ?581                 ?348                	;0
580 436  ECHO/40                   ?0        349:' selected'      ?0                  	;0	<<577
581 438  ECHO/40                   ?0        350:'>'              ?0                  	;0
582 439  FETCH_DIM_R/81            $226=     16?15                351:'server_name'   	;0
583 439  ECHO/40                   ?0        $226                 ?0                  	;0
584 440  ECHO/40                   ?0        352:'</option>
															' ?0                  	;0
585 441  JMP/42                    ?0        ?563                 ?0                  	;0	>>563
586 441  FE_FREE/127               ?0        $220                 ?0                  	;0	<<562
587 444  ECHO/40                   ?0        353:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    ' ?0                  	;0
588 445  ISSET_ISEMPTY_CV/197      #227=     16?0                 ?0                  	;33554432
589 445  BOOL_NOT/13               #228=     #227                 ?0                  	;0
590 445  JMPZ/43                   ?0        #228                 ?592                	;0	>>592
591 446  GOTO/253                  ?0        ?2                   ?354                	;0
592 448  GOTO/253                  ?0        ?1                   ?355                	;0	<<590
593 450  INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'json_decode'   	;2
594 450  FETCH_DIM_FUNC_ARG/93     $229=     16?0                 358:'stream_source' 	;1
595 450  SEND_VAR_EX/66            ?80       $229                 ?1                  	;0
596 450  SEND_VAL_EX/116           ?96       359:true             ?2                  	;0
597 450  DO_FCALL_BY_NAME/131      $230=     ?0                   ?0                  	;0
598 450  FE_RESET_R/77             $231=     $230                 ?637                	;0
599 450  FE_FETCH_R/78             ?0        $231                 16?13               	;637	>>637	<<636
600 451  NOP/0                     ?0        ?0                   ?0                  	;1
601 451  GOTO/253                  ?0        ?602                 ?360                	;0
602 453  INIT_FCALL_BY_NAME/59     ?0        ?0                   361:'substr'        	;3
603 453  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
604 453  SEND_VAL_EX/116           ?96       363:0                ?2                  	;0
605 453  SEND_VAL_EX/116           ?112      364:2                ?3                  	;0
606 453  DO_FCALL_BY_NAME/131      $232=     ?0                   ?0                  	;0
607 453  IS_EQUAL/17               #233=     $232                 365:'s:'            	;0
608 453  JMPZ/43                   ?0        #233                 ?611                	;0	>>611
609 454  NOP/0                     ?0        ?0                   ?0                  	;1
610 454  GOTO/253                  ?0        ?614                 ?366                	;0
611 456  ASSIGN/38                 ?205      16?26                16?13               	;0	<<608
612 457  NOP/0                     ?0        ?0                   ?0                  	;1
613 457  GOTO/253                  ?0        ?631                 ?367                	;0
614 459  INIT_FCALL_BY_NAME/59     ?0        ?0                   368:'explode'       	;3
615 459  SEND_VAL_EX/116           ?80       370:':'              ?1                  	;0
616 459  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
617 459  SEND_VAL_EX/116           ?112      371:3                ?3                  	;0
618 459  DO_FCALL_BY_NAME/131      $235=     ?0                   ?0                  	;0
619 459  ASSIGN/38                 ?207      16?27                $235                	;0
620 460  NOP/0                     ?0        ?0                   ?0                  	;1
621 460  GOTO/253                  ?0        ?626                 ?372                	;0
622 462  ECHO/40                   ?0        16?26                ?0                  	;0
623 463  ECHO/40                   ?0        373:'</option>
														' ?0                  	;0
624 465  NOP/0                     ?0        ?0                   ?0                  	;1
625 465  GOTO/253                  ?0        ?636                 ?374                	;0
626 467  INIT_FCALL_BY_NAME/59     ?0        ?0                   375:'urldecode'     	;1
627 467  FETCH_DIM_FUNC_ARG/93     $237=     16?27                377:2               	;1
628 467  SEND_VAR_EX/66            ?80       $237                 ?1                  	;0
629 467  DO_FCALL_BY_NAME/131      $238=     ?0                   ?0                  	;0
630 467  ASSIGN/38                 ?210      16?26                $238                	;0
631 469  ECHO/40                   ?0        378:'															<option value="' ?0                  	;0
632 470  ECHO/40                   ?0        16?13                ?0                  	;0
633 471  ECHO/40                   ?0        379:'">'             ?0                  	;0
634 472  NOP/0                     ?0        ?0                   ?0                  	;1
635 472  GOTO/253                  ?0        ?622                 ?380                	;0
636 473  JMP/42                    ?0        ?599                 ?0                  	;0	>>599
637 473  FE_FREE/127               ?0        $231                 ?0                  	;0	<<598
638 477  ECHO/40                   ?0        381:'														</select>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item">
												<a href="javascript: void(0);" class="prevb btn btn-secondary">' ?0                  	;0
639 478  FETCH_DIM_R/81            $240=     16?16                382:'prev'          	;0
640 478  ECHO/40                   ?0        $240                 ?0                  	;0
641 479  GOTO/253                  ?0        ?358                 ?383                	;0
642 481  JMPZ/43                   ?0        16?28                ?644                	;0	>>644
643 482  GOTO/253                  ?0        ?645                 ?384                	;0
644 484  ECHO/40                   ?0        385:'                                    <li class="nav-item">
										<a href="#rtmp-push" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-upload-network-outline mr-1"></i>
											<span class="d-none d-sm-inline">RTMP Push</span>
										</a>
									</li>
                                    ' ?0                  	;0	<<642
645 486  ECHO/40                   ?0        386:'									<li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">Servers</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_display_name">Channel Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="' ?0                  	;0
646 487  ISSET_ISEMPTY_CV/197      #241=     16?0                 ?0                  	;33554432
647 487  BOOL_NOT/13               #242=     #241                 ?0                  	;0
648 487  JMPZ/43                   ?0        #242                 ?650                	;0	>>650
649 488  GOTO/253                  ?0        ?719                 ?387                	;0
650 490  GOTO/253                  ?0        ?714                 ?388                	;0	<<648
651 492  FETCH_DIM_R/81            $243=     16?16                389:'prev'          	;0
652 492  ECHO/40                   ?0        $243                 ?0                  	;0
653 493  ECHO/40                   ?0        390:'</a>
											</li>
											<span class="float-right">
												<li class="nextb list-inline-item">
													<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
												</li>
											</span>
										</ul>
									</div>
									<div class="tab-pane" id="review">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4 stream-url">
													<div class="col-md-12">
														<select multiple id="review_sort" name="review_sort" class="form-control" style="min-height:400px;">
														' ?0                  	;0
654 494  ISSET_ISEMPTY_CV/197      #244=     16?0                 ?0                  	;33554432
655 494  JMPZ_EX/46                #244=     #244                 ?665                	;0	>>665
656 494  INIT_FCALL_BY_NAME/59     ?0        ?0                   391:'in_array'      	;2
657 494  INIT_FCALL_BY_NAME/59     ?0        ?0                   393:'intval'        	;1
658 494  FETCH_DIM_FUNC_ARG/93     $245=     16?4                 395:'type'          	;1
659 494  SEND_VAR_EX/66            ?80       $245                 ?1                  	;0
660 494  DO_FCALL_BY_NAME/131      $246=     ?0                   ?0                  	;0
661 494  SEND_VAR_NO_REF_EX/50     ?80       $246                 ?1                  	;0
662 494  SEND_VAL_EX/116           ?96       396:array (
  0 => 2,
) ?2                  	;0
663 494  DO_FCALL_BY_NAME/131      $247=     ?0                   ?0                  	;0
664 494  BOOL/52                   #244=     $247                 ?0                  	;0
665 494  BOOL_NOT/13               #248=     #244                 ?0                  	;0	<<655
666 494  JMPZ/43                   ?0        #248                 ?668                	;0	>>668
667 495  GOTO/253                  ?0        ?730                 ?397                	;0
668 497  INIT_FCALL_BY_NAME/59     ?0        ?0                   398:'json_decode'   	;2	<<666
669 497  FETCH_DIM_FUNC_ARG/93     $249=     16?0                 400:'stream_source' 	;1
670 497  SEND_VAR_EX/66            ?80       $249                 ?1                  	;0
671 497  SEND_VAL_EX/116           ?96       401:true             ?2                  	;0
672 497  DO_FCALL_BY_NAME/131      $250=     ?0                   ?0                  	;0
673 497  FE_RESET_R/77             $251=     $250                 ?712                	;0
674 497  FE_FETCH_R/78             ?0        $251                 16?13               	;712	>>712	<<711
675 498  NOP/0                     ?0        ?0                   ?0                  	;1
676 498  GOTO/253                  ?0        ?691                 ?402                	;0
677 500  ECHO/40                   ?0        16?26                ?0                  	;0
678 501  ECHO/40                   ?0        403:'</option>
														' ?0                  	;0
679 503  NOP/0                     ?0        ?0                   ?0                  	;1
680 503  GOTO/253                  ?0        ?711                 ?404                	;0
681 505  INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'urldecode'     	;1
682 505  FETCH_DIM_FUNC_ARG/93     $252=     16?27                407:2               	;1
683 505  SEND_VAR_EX/66            ?80       $252                 ?1                  	;0
684 505  DO_FCALL_BY_NAME/131      $253=     ?0                   ?0                  	;0
685 505  ASSIGN/38                 ?225      16?26                $253                	;0
686 507  ECHO/40                   ?0        408:'															<option value="' ?0                  	;0
687 508  ECHO/40                   ?0        16?13                ?0                  	;0
688 509  ECHO/40                   ?0        409:'">'             ?0                  	;0
689 510  NOP/0                     ?0        ?0                   ?0                  	;1
690 510  GOTO/253                  ?0        ?677                 ?410                	;0
691 512  INIT_FCALL_BY_NAME/59     ?0        ?0                   411:'substr'        	;3
692 512  SEND_VAR_EX/66            ?80       16?13                ?1                  	;0
693 512  SEND_VAL_EX/116           ?96       413:0                ?2                  	;0
694 512  SEND_VAL_EX/116           ?112      414:2                ?3                  	;0
695 512  DO_FCALL_BY_NAME/131      $255=     ?0                   ?0                  	;0
696 512  IS_EQUAL/17               #256=     $255                 415:'s:'            	;0
697 512  JMPZ/43                   ?0        #256                 ?700                	;0	>>700
698 513  NOP/0                     ?0        ?0                   ?0                  	;1
699 513  GOTO/253                  ?0        ?703                 ?416                	;0
700 515  ASSIGN/38                 ?228      16?26                16?13               	;0	<<697
701 516  NOP/0                     ?0        ?0                   ?0                  	;1
702 516  GOTO/253                  ?0        ?686                 ?417                	;0
703 518  INIT_FCALL_BY_NAME/59     ?0        ?0                   418:'explode'       	;3
704 518  SEND_VAL_EX/116           ?80       420:':'              ?1                  	;0
705 518  SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
706 518  SEND_VAL_EX/116           ?112      421:3                ?3                  	;0
707 518  DO_FCALL_BY_NAME/131      $258=     ?0                   ?0                  	;0
708 518  ASSIGN/38                 ?230      16?27                $258                	;0
709 519  NOP/0                     ?0        ?0                   ?0                  	;1
710 519  GOTO/253                  ?0        ?681                 ?422                	;0
711 520  JMP/42                    ?0        ?674                 ?0                  	;0	>>674
712 520  FE_FREE/127               ?0        $251                 ?0                  	;0	<<673
713 523  GOTO/253                  ?0        ?730                 ?423                	;0
714 525  INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'htmlspecialchars'	;1
715 525  FETCH_DIM_FUNC_ARG/93     $260=     16?0                 426:'stream_display_name'	;1
716 525  SEND_VAR_EX/66            ?80       $260                 ?1                  	;0
717 525  DO_FCALL_BY_NAME/131      $261=     ?0                   ?0                  	;0
718 525  ECHO/40                   ?0        $261                 ?0                  	;0
719 527  ECHO/40                   ?0        427:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="stream_icon">Channel Logo</label>
                                                    <div class="col-md-8 input-group">
														<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="' ?0                  	;0
720 528  ISSET_ISEMPTY_CV/197      #262=     16?0                 ?0                  	;33554432
721 528  BOOL_NOT/13               #263=     #262                 ?0                  	;0
722 528  JMPZ/43                   ?0        #263                 ?724                	;0	>>724
723 529  GOTO/253                  ?0        ?749                 ?428                	;0
724 531  INIT_FCALL_BY_NAME/59     ?0        ?0                   429:'htmlspecialchars'	;1	<<722
725 531  FETCH_DIM_FUNC_ARG/93     $264=     16?0                 431:'stream_icon'   	;1
726 531  SEND_VAR_EX/66            ?80       $264                 ?1                  	;0
727 531  DO_FCALL_BY_NAME/131      $265=     ?0                   ?0                  	;0
728 531  ECHO/40                   ?0        $265                 ?0                  	;0
729 532  GOTO/253                  ?0        ?749                 ?432                	;0
730 535  ECHO/40                   ?0        433:'														</select>
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item">
                                                <a href="javascript: void(0);" class="prevb btn btn-secondary">' ?0                  	;0
731 536  FETCH_DIM_R/81            $266=     16?16                434:'prev'          	;0
732 536  ECHO/40                   ?0        $266                 ?0                  	;0
733 537  ECHO/40                   ?0        435:'</a>
												<a href="javascript: void(0);" onClick="MoveUp(\'review\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>
												<a href="javascript: void(0);" onClick="MoveDown(\'review\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>
												<a href="javascript: void(0);" onClick="AtoZ(\'review\')" class="btn btn-info">A to Z</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="videos">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4 stream-url">
													<label class="col-md-3 col-form-label" for="import_folder">Import Folder</label>
													<div class="col-md-9 input-group">
														<input type="text" id="import_folder" name="import_folder" readonly class="form-control" value="">
														<div class="input-group-append">
															<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
														</div>
													</div>
													<div class="col-md-12 add-margin-top-20">
														<select multiple id="videos_sort" name="videos_sort" class="form-control" style="min-height:400px;">
														' ?0                  	;0
734 538  ISSET_ISEMPTY_CV/197      #267=     16?0                 ?0                  	;33554432
735 538  JMPZ_EX/46                #267=     #267                 ?745                	;0	>>745
736 538  INIT_FCALL_BY_NAME/59     ?0        ?0                   436:'in_array'      	;2
737 538  INIT_FCALL_BY_NAME/59     ?0        ?0                   438:'intval'        	;1
738 538  FETCH_DIM_FUNC_ARG/93     $268=     16?4                 440:'type'          	;1
739 538  SEND_VAR_EX/66            ?80       $268                 ?1                  	;0
740 538  DO_FCALL_BY_NAME/131      $269=     ?0                   ?0                  	;0
741 538  SEND_VAR_NO_REF_EX/50     ?80       $269                 ?1                  	;0
742 538  SEND_VAL_EX/116           ?96       441:array (
  0 => 1,
) ?2                  	;0
743 538  DO_FCALL_BY_NAME/131      $270=     ?0                   ?0                  	;0
744 538  BOOL/52                   #267=     $270                 ?0                  	;0
745 538  BOOL_NOT/13               #271=     #267                 ?0                  	;0	<<735
746 538  JMPZ/43                   ?0        #271                 ?748                	;0	>>748
747 539  GOTO/253                  ?0        ?638                 ?442                	;0
748 541  GOTO/253                  ?0        ?593                 ?443                	;0	<<746
749 544  ECHO/40                   ?0        444:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onclick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_id">Categories</label>
													<div class="col-md-8">
                                                        <select name="category_id[]" id="category_id" class="form-control select2 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
750 545  INIT_FCALL_BY_NAME/59     ?0        ?0                   445:'f769E3f0C739d1a6'	;1
751 545  SEND_VAL_EX/116           ?80       447:'live'           ?1                  	;0
752 545  DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
753 545  FE_RESET_R/77             $273=     $272                 ?795                	;0
754 545  FE_FETCH_R/78             ?0        $273                 16?7                	;795	>>795	<<794
755 546  NOP/0                     ?0        ?0                   ?0                  	;1
756 546  GOTO/253                  ?0        ?768                 ?448                	;0
757 549  ECHO/40                   ?0        449:'value="'        ?0                  	;0
758 550  FETCH_DIM_R/81            $274=     16?7                 450:'id'            	;0
759 550  ECHO/40                   ?0        $274                 ?0                  	;0
760 551  ECHO/40                   ?0        451:'">'             ?0                  	;0
761 552  FETCH_DIM_R/81            $275=     16?7                 452:'category_name' 	;0
762 552  ECHO/40                   ?0        $275                 ?0                  	;0
763 553  NOP/0                     ?0        ?0                   ?0                  	;1
764 553  GOTO/253                  ?0        ?765                 ?453                	;0
765 555  ECHO/40                   ?0        454:'</option>
															' ?0                  	;0
766 557  NOP/0                     ?0        ?0                   ?0                  	;1
767 557  GOTO/253                  ?0        ?794                 ?455                	;0
768 559  ECHO/40                   ?0        456:'                                                            <option ' ?0                  	;0
769 560  ISSET_ISEMPTY_CV/197      #276=     16?0                 ?0                  	;33554432
770 560  BOOL_NOT/13               #277=     #276                 ?0                  	;0
771 560  JMPZ/43                   ?0        #277                 ?774                	;0	>>774
772 561  NOP/0                     ?0        ?0                   ?0                  	;1
773 561  GOTO/253                  ?0        ?757                 ?457                	;0
774 563  INIT_FCALL_BY_NAME/59     ?0        ?0                   458:'in_array'      	;2	<<771
775 563  INIT_FCALL_BY_NAME/59     ?0        ?0                   460:'intval'        	;1
776 563  FETCH_DIM_FUNC_ARG/93     $278=     16?7                 462:'id'            	;1
777 563  SEND_VAR_EX/66            ?80       $278                 ?1                  	;0
778 563  DO_FCALL_BY_NAME/131      $279=     ?0                   ?0                  	;0
779 563  SEND_VAR_NO_REF_EX/50     ?80       $279                 ?1                  	;0
780 563  INIT_FCALL_BY_NAME/59     ?0        ?0                   463:'json_decode'   	;2
781 563  FETCH_DIM_FUNC_ARG/93     $280=     16?0                 465:'category_id'   	;1
782 563  SEND_VAR_EX/66            ?80       $280                 ?1                  	;0
783 563  SEND_VAL_EX/116           ?96       466:true             ?2                  	;0
784 563  DO_FCALL_BY_NAME/131      $281=     ?0                   ?0                  	;0
785 563  SEND_VAR_NO_REF_EX/50     ?96       $281                 ?2                  	;0
786 563  DO_FCALL_BY_NAME/131      $282=     ?0                   ?0                  	;0
787 563  BOOL_NOT/13               #283=     $282                 ?0                  	;0
788 563  JMPZ/43                   ?0        #283                 ?791                	;0	>>791
789 564  NOP/0                     ?0        ?0                   ?0                  	;1
790 564  GOTO/253                  ?0        ?792                 ?467                	;0
791 566  ECHO/40                   ?0        468:'selected '      ?0                  	;0	<<788
792 568  NOP/0                     ?0        ?0                   ?0                  	;1
793 568  GOTO/253                  ?0        ?757                 ?469                	;0
794 569  JMP/42                    ?0        ?754                 ?0                  	;0	>>754
795 569  FE_FREE/127               ?0        $273                 ?0                  	;0	<<753
796 572  ECHO/40                   ?0        470:'														</select>
                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Categories:</strong> <span id="category_new"></span>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bouquets">Bouquets</label>
													<div class="col-md-8">
														<select name="bouquets[]" id="bouquets" class="form-control select2-multiple select2" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
797 573  GOTO/253                  ?0        ?8                   ?471                	;0
798 575  ECHO/40                   ?0        472:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4" id="series_nav">
													<label class="col-md-4 col-form-label" for="series_no">24/7 Series <i title="Select a series to sync with." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="series_no" id="series_no" class="form-control select2" data-toggle="select2">
															<option value="0">Select a series...</option>
															' ?0                  	;0
799 576  INIT_FCALL_BY_NAME/59     ?0        ?0                   473:'f5e03449E4B2215c'	;0
800 576  DO_FCALL_BY_NAME/131      $284=     ?0                   ?0                  	;0
801 576  FE_RESET_R/77             $285=     $284                 ?839                	;0
802 576  FE_FETCH_R/78             ?0        $285                 16?8                	;839	>>839	<<838
803 577  NOP/0                     ?0        ?0                   ?0                  	;1
804 577  GOTO/253                  ?0        ?808                 ?475                	;0
805 579  ECHO/40                   ?0        476:'</option>
															' ?0                  	;0
806 581  NOP/0                     ?0        ?0                   ?0                  	;1
807 581  GOTO/253                  ?0        ?838                 ?477                	;0
808 583  ECHO/40                   ?0        478:'															<option ' ?0                  	;0
809 584  ISSET_ISEMPTY_CV/197      #286=     16?0                 ?0                  	;33554432
810 584  BOOL_NOT/13               #287=     #286                 ?0                  	;0
811 584  JMPZ/43                   ?0        #287                 ?814                	;0	>>814
812 585  NOP/0                     ?0        ?0                   ?0                  	;1
813 585  GOTO/253                  ?0        ?830                 ?479                	;0
814 587  INIT_FCALL_BY_NAME/59     ?0        ?0                   480:'intval'        	;1	<<811
815 587  FETCH_DIM_FUNC_ARG/93     $288=     16?0                 482:'series_no'     	;1
816 587  SEND_VAR_EX/66            ?80       $288                 ?1                  	;0
817 587  DO_FCALL_BY_NAME/131      $289=     ?0                   ?0                  	;0
818 587  INIT_FCALL_BY_NAME/59     ?0        ?0                   483:'intval'        	;1
819 587  FETCH_DIM_FUNC_ARG/93     $290=     16?8                 485:'id'            	;1
820 587  SEND_VAR_EX/66            ?80       $290                 ?1                  	;0
821 587  DO_FCALL_BY_NAME/131      $291=     ?0                   ?0                  	;0
822 587  IS_EQUAL/17               #292=     $289                 $291                	;0
823 587  BOOL_NOT/13               #293=     #292                 ?0                  	;0
824 587  JMPZ/43                   ?0        #293                 ?827                	;0	>>827
825 588  NOP/0                     ?0        ?0                   ?0                  	;1
826 588  GOTO/253                  ?0        ?828                 ?486                	;0
827 590  ECHO/40                   ?0        487:'selected '      ?0                  	;0	<<824
828 592  NOP/0                     ?0        ?0                   ?0                  	;1
829 592  GOTO/253                  ?0        ?830                 ?488                	;0
830 595  ECHO/40                   ?0        489:'value="'        ?0                  	;0
831 596  FETCH_DIM_R/81            $294=     16?8                 490:'id'            	;0
832 596  ECHO/40                   ?0        $294                 ?0                  	;0
833 597  ECHO/40                   ?0        491:'">'             ?0                  	;0
834 598  FETCH_DIM_R/81            $295=     16?8                 492:'title'         	;0
835 598  ECHO/40                   ?0        $295                 ?0                  	;0
836 599  NOP/0                     ?0        ?0                   ?0                  	;1
837 599  GOTO/253                  ?0        ?805                 ?493                	;0
838 600  JMP/42                    ?0        ?802                 ?0                  	;0	>>802
839 600  FE_FREE/127               ?0        $285                 ?0                  	;0	<<801
840 603  ECHO/40                   ?0        494:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-12" style="margin-bottom:10px; display:none;" id="warning">
                                                        <div class="alert alert-warning" role="alert">
                                                            Not all videos are supported as-is when streaming live, this could mean no video or audio displays. If this happens, you will need to transcode.<br/>
                                                            Symlink\'s will only be created on the server the file originates from, if you\'re streaming to another server it will be downloaded normally.
                                                        </div>
                                                    </div>
													<label class="col-md-4 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Transcode videos using a profile, copy them or symlink them directly." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="transcode_profile_id" id="transcode_profile_id" class="form-control select2" data-toggle="select2">
                                                            <option ' ?0                  	;0
841 604  ISSET_ISEMPTY_CV/197      #296=     16?0                 ?0                  	;33554432
842 604  BOOL_NOT/13               #297=     #296                 ?0                  	;0
843 604  JMPZ/43                   ?0        #297                 ?845                	;0	>>845
844 605  GOTO/253                  ?0        ?394                 ?495                	;0
845 607  GOTO/253                  ?0        ?385                 ?496                	;0	<<843
846 609  INIT_FCALL_BY_NAME/59     ?0        ?0                   497:'json_decode'   	;2
847 609  FETCH_DIM_FUNC_ARG/93     $298=     16?0                 499:'movie_properties'	;1
848 609  SEND_VAR_EX/66            ?80       $298                 ?1                  	;0
849 609  SEND_VAL_EX/116           ?96       500:true             ?2                  	;0
850 609  DO_FCALL_BY_NAME/131      $299=     ?0                   ?0                  	;0
851 609  ASSIGN/38                 ?271      16?4                 $299                	;0
852 610  JMPZ/43                   ?0        16?4                 ?854                	;0	>>854
853 611  GOTO/253                  ?0        ?211                 ?501                	;0
854 613  FETCH_DIM_R/81            $301=     16?0                 502:'series_no'     	;0	<<852
855 613  IS_SMALLER/19             #302=     503:0                $301                	;0
856 613  JMPZ/43                   ?0        #302                 ?858                	;0	>>858
857 614  GOTO/253                  ?0        ?210                 ?504                	;0
858 616  ASSIGN/38                 ?274      16?4                 505:array (
  'type' => 1,
)	;0	<<856
859 617  GOTO/253                  ?0        ?211                 ?506                	;0
860 618  GOTO/253                  ?0        ?210                 ?507                	;0
861 620  ISSET_ISEMPTY_CV/197      #304=     16?0                 ?0                  	;33554432
862 620  BOOL_NOT/13               #305=     #304                 ?0                  	;0
863 620  JMPZ/43                   ?0        #305                 ?865                	;0	>>865
864 621  GOTO/253                  ?0        ?874                 ?508                	;0
865 623  INIT_FCALL_BY_NAME/59     ?0        ?0                   509:'intval'        	;1	<<863
866 623  FETCH_DIM_FUNC_ARG/93     $306=     16?0                 511:'transcode_profile_id'	;1
867 623  SEND_VAR_EX/66            ?80       $306                 ?1                  	;0
868 623  DO_FCALL_BY_NAME/131      $307=     ?0                   ?0                  	;0
869 623  IS_EQUAL/17               #308=     $307                 512:-1              	;0
870 623  BOOL_NOT/13               #309=     #308                 ?0                  	;0
871 623  JMPZ/43                   ?0        #309                 ?873                	;0	>>873
872 624  GOTO/253                  ?0        ?874                 ?513                	;0
873 626  ECHO/40                   ?0        514:'selected '      ?0                  	;0	<<871
874 629  GOTO/253                  ?0        ?300                 ?515                	;0
875 631  INCLUDE_OR_EVAL/73        ?281      516:'footer.php'     ?0                  	;2
876 632  NOP/0                     ?0        517:1                ?0                  	;4294967295
*/

?>