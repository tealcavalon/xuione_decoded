<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?238                 ?0                  	;0	>>238
1   6    ECHO/40                   ?0        1:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="release_date">Release Date</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="release_date" name="release_date" value="' ?0                  	;0
2   7    ISSET_ISEMPTY_CV/197      #17=      16?0                 ?0                  	;33554432
3   7    BOOL_NOT/13               #18=      #17                  ?0                  	;0
4   7    JMPZ/43                   ?0        #18                  ?6                  	;0	>>6
5   8    GOTO/253                  ?0        ?11                  ?2                  	;0
6   10   INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'htmlspecialchars'	;1	<<4
7   10   FETCH_DIM_FUNC_ARG/93     $19=      16?0                 5:'release_date'    	;1
8   10   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
9   10   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
10  10   ECHO/40                   ?0        $20                  ?0                  	;0
11  12   GOTO/253                  ?0        ?119                 ?6                  	;0
12  14   ISSET_ISEMPTY_CV/197      #21=      16?0                 ?0                  	;33554432
13  14   BOOL_NOT/13               #22=      #21                  ?0                  	;0
14  14   JMPZ/43                   ?0        #22                  ?16                 	;0	>>16
15  15   GOTO/253                  ?0        ?21                  ?7                  	;0
16  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'htmlspecialchars'	;1	<<14
17  17   FETCH_DIM_FUNC_ARG/93     $23=      16?0                 10:'youtube_trailer'	;1
18  17   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
19  17   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
20  17   ECHO/40                   ?0        $24                  ?0                  	;0
21  19   ECHO/40                   ?0        11:'">
													</div>
													<label class="col-md-2 col-form-label" for="rating">Rating</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="rating" name="rating" value="' ?0                  	;0
22  20   ISSET_ISEMPTY_CV/197      #25=      16?0                 ?0                  	;33554432
23  20   BOOL_NOT/13               #26=      #25                  ?0                  	;0
24  20   JMPZ/43                   ?0        #26                  ?26                 	;0	>>26
25  21   GOTO/253                  ?0        ?496                 ?12                 	;0
26  23   GOTO/253                  ?0        ?491                 ?13                 	;0	<<24
27  25   ECHO/40                   ?0        14:' <i title="'     ?0                  	;0
28  26   FETCH_DIM_R/81            $27=      16?1                 15:'episode_tooltip_1'	;0
29  26   ECHO/40                   ?0        $27                  ?0                  	;0
30  27   ECHO/40                   ?0        16:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="read_native">' ?0                  	;0
31  28   FETCH_DIM_R/81            $28=      16?1                 17:'native_frames'  	;0
32  28   ECHO/40                   ?0        $28                  ?0                  	;0
33  29   ECHO/40                   ?0        18:'</label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="movie_symlink">' ?0                  	;0
34  30   GOTO/253                  ?0        ?212                 ?19                 	;0
35  32   ECHO/40                   ?0        20:' <i title="'     ?0                  	;0
36  33   FETCH_DIM_R/81            $29=      16?1                 21:'episode_tooltip_3'	;0
37  33   ECHO/40                   ?0        $29                  ?0                  	;0
38  34   ECHO/40                   ?0        22:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="remove_subtitles" id="remove_subtitles" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="transcode_profile_id">' ?0                  	;0
39  35   FETCH_DIM_R/81            $30=      16?1                 23:'transcoding_profile'	;0
40  35   ECHO/40                   ?0        $30                  ?0                  	;0
41  36   ECHO/40                   ?0        24:' <i title="'     ?0                  	;0
42  37   GOTO/253                  ?0        ?432                 ?25                 	;0
43  40   ECHO/40                   ?0        26:'								</div> 
							</div> 
						</form>
                        <div id="file-browser" class="mfp-hide white-popup-block">
							<div class="col-12">
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="server_id">' ?0                  	;0
44  41   FETCH_DIM_R/81            $31=      16?1                 27:'server_name'    	;0
45  41   ECHO/40                   ?0        $31                  ?0                  	;0
46  42   ECHO/40                   ?0        28:'</label>
									<div class="col-md-8">
										<select id="server_id" class="form-control" data-toggle="select2">
											' ?0                  	;0
47  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   29:'c6a90BfCD425EB63'	;0
48  43   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
49  43   FE_RESET_R/77             $33=      $32                  ?62                 	;0
50  43   FE_FETCH_R/78             ?0        $33                  16?2                	;62	>>62	<<61
51  44   ECHO/40                   ?0        31:'											<option value="' ?0                  	;0
52  45   FETCH_DIM_R/81            $34=      16?2                 32:'id'             	;0
53  45   ECHO/40                   ?0        $34                  ?0                  	;0
54  46   ECHO/40                   ?0        33:'">'              ?0                  	;0
55  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'htmlspecialchars'	;1
56  47   FETCH_DIM_FUNC_ARG/93     $35=      16?2                 36:'server_name'    	;1
57  47   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
58  47   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
59  47   ECHO/40                   ?0        $36                  ?0                  	;0
60  48   ECHO/40                   ?0        37:'</option>
											' ?0                  	;0
61  49   JMP/42                    ?0        ?50                  ?0                  	;0	>>50
62  49   FE_FREE/127               ?0        $33                  ?0                  	;0	<<49
63  51   GOTO/253                  ?0        ?522                 ?38                 	;0
64  54   ECHO/40                   ?0        39:'														</select>
                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Categories:</strong> <span id="category_new"></span>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bouquets">' ?0                  	;0
65  55   FETCH_STATIC_PROP_IS/176  $37=      40:'rRequest'        41:'XUI'            	;0
66  55   ISSET_ISEMPTY_DIM_OBJ/115 #38=      $37                  43:'import'         	;33554432
67  55   JMPZ/43                   ?0        #38                  ?70                 	;0	>>70
68  55   QM_ASSIGN/22              #39=      44:'Fallback '       ?0                  	;0
69  55   JMP/42                    ?0        ?71                  ?0                  	;0	>>71
70  55   QM_ASSIGN/22              #39=      45:''                ?0                  	;0	<<67
71  55   ECHO/40                   ?0        #39                  ?0                  	;0	<<69
72  56   ECHO/40                   ?0        46:'Bouquets</label>
													<div class="col-md-8">
														<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
73  57   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'f964b9222b35ADDD'	;0
74  57   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
75  57   FE_RESET_R/77             $41=      $40                  ?117                	;0
76  57   FE_FETCH_R/78             ?0        $41                  16?3                	;117	>>117	<<116
77  58   NOP/0                     ?0        ?0                   ?0                  	;1
78  58   GOTO/253                  ?0        ?79                  ?49                 	;0
79  60   ECHO/40                   ?0        50:'															<option ' ?0                  	;0
80  61   ISSET_ISEMPTY_CV/197      #42=      16?0                 ?0                  	;33554432
81  61   BOOL_NOT/13               #43=      #42                  ?0                  	;0
82  61   JMPZ/43                   ?0        #43                  ?85                 	;0	>>85
83  62   NOP/0                     ?0        ?0                   ?0                  	;1
84  62   GOTO/253                  ?0        ?105                 ?51                 	;0
85  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'in_array'       	;2	<<82
86  64   FETCH_DIM_FUNC_ARG/93     $44=      16?0                 54:'id'             	;1
87  64   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
88  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'json_decode'    	;2
89  64   FETCH_DIM_FUNC_ARG/93     $45=      16?3                 57:'bouquet_series' 	;1
90  64   SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
91  64   SEND_VAL_EX/116           ?96       58:true              ?2                  	;0
92  64   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
93  64   SEND_VAR_NO_REF_EX/50     ?96       $46                  ?2                  	;0
94  64   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
95  64   BOOL_NOT/13               #48=      $47                  ?0                  	;0
96  64   JMPZ/43                   ?0        #48                  ?99                 	;0	>>99
97  65   NOP/0                     ?0        ?0                   ?0                  	;1
98  65   GOTO/253                  ?0        ?100                 ?59                 	;0
99  67   ECHO/40                   ?0        60:'selected '       ?0                  	;0	<<96
100 69   NOP/0                     ?0        ?0                   ?0                  	;1
101 69   GOTO/253                  ?0        ?105                 ?61                 	;0
102 71   ECHO/40                   ?0        62:'</option>
															' ?0                  	;0
103 73   NOP/0                     ?0        ?0                   ?0                  	;1
104 73   GOTO/253                  ?0        ?116                 ?63                 	;0
105 76   ECHO/40                   ?0        64:'value="'         ?0                  	;0
106 77   FETCH_DIM_R/81            $49=      16?3                 65:'id'             	;0
107 77   ECHO/40                   ?0        $49                  ?0                  	;0
108 78   ECHO/40                   ?0        66:'">'              ?0                  	;0
109 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'htmlspecialchars'	;1
110 79   FETCH_DIM_FUNC_ARG/93     $50=      16?3                 69:'bouquet_name'   	;1
111 79   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
112 79   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
113 79   ECHO/40                   ?0        $51                  ?0                  	;0
114 80   NOP/0                     ?0        ?0                   ?0                  	;1
115 80   GOTO/253                  ?0        ?102                 ?70                 	;0
116 81   JMP/42                    ?0        ?76                  ?0                  	;0	>>76
117 81   FE_FREE/127               ?0        $41                  ?0                  	;0	<<75
118 83   GOTO/253                  ?0        ?247                 ?71                 	;0
119 85   ECHO/40                   ?0        72:'">
													</div>
													<label class="col-md-2 col-form-label" for="episode_run_time">Runtime</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="' ?0                  	;0
120 86   ISSET_ISEMPTY_CV/197      #52=      16?0                 ?0                  	;33554432
121 86   BOOL_NOT/13               #53=      #52                  ?0                  	;0
122 86   JMPZ/43                   ?0        #53                  ?124                	;0	>>124
123 87   GOTO/253                  ?0        ?129                 ?73                 	;0
124 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'htmlspecialchars'	;1	<<122
125 89   FETCH_DIM_FUNC_ARG/93     $54=      16?0                 76:'episode_run_time'	;1
126 89   SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
127 89   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
128 89   ECHO/40                   ?0        $55                  ?0                  	;0
129 91   ECHO/40                   ?0        77:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="youtube_trailer">Youtube Trailer</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="youtube_trailer" name="youtube_trailer" value="' ?0                  	;0
130 92   GOTO/253                  ?0        ?12                  ?78                 	;0
131 95   ECHO/40                   ?0        79:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="target_container">' ?0                  	;0
132 96   FETCH_DIM_R/81            $56=      16?1                 80:'target_container'	;0
133 96   ECHO/40                   ?0        $56                  ?0                  	;0
134 97   ECHO/40                   ?0        81:' <i title="'     ?0                  	;0
135 98   FETCH_DIM_R/81            $57=      16?1                 82:'episode_tooltip_4'	;0
136 98   ECHO/40                   ?0        $57                  ?0                  	;0
137 99   GOTO/253                  ?0        ?372                 ?83                 	;0
138 101  ECHO/40                   ?0        84:'                            <input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            ' ?0                  	;0
139 102  GOTO/253                  ?0        ?319                 ?85                 	;0
140 104  ISSET_ISEMPTY_CV/197      #58=      16?0                 ?0                  	;33554432
141 104  BOOL_NOT/13               #59=      #58                  ?0                  	;0
142 104  JMPZ/43                   ?0        #59                  ?144                	;0	>>144
143 105  GOTO/253                  ?0        ?295                 ?86                 	;0
144 107  ECHO/40                   ?0        87:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<142
145 108  GOTO/253                  ?0        ?292                 ?88                 	;0
146 110  ECHO/40                   ?0        89:'</th>
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
147 111  FETCH_DIM_R/81            $60=      16?1                 90:'filename'       	;0
148 111  ECHO/40                   ?0        $60                  ?0                  	;0
149 112  ECHO/40                   ?0        91:'</th>
												</tr>
											</thead>
											<tbody></tbody>
										</table>
									</div>
								</div>
								<div class="float-right">
									<input id="select_folder" type="button" class="btn btn-info" value="Select" />
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
150 113  GOTO/253                  ?0        ?589                 ?92                 	;0
151 115  ISSET_ISEMPTY_CV/197      #61=      16?0                 ?0                  	;33554432
152 115  BOOL_NOT/13               #62=      #61                  ?0                  	;0
153 115  JMPZ/43                   ?0        #62                  ?155                	;0	>>155
154 116  GOTO/253                  ?0        ?160                 ?93                 	;0
155 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'htmlspecialchars'	;1	<<153
156 118  FETCH_DIM_FUNC_ARG/93     $63=      16?0                 96:'title'          	;1
157 118  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
158 118  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
159 118  ECHO/40                   ?0        $64                  ?0                  	;0
160 120  ECHO/40                   ?0        97:'" required data-parsley-trigger="change">
													</div>
                                                    <div class="col-md-3">
														<input type="text" class="form-control text-center" placeholder="Year" id="year" name="year" value="' ?0                  	;0
161 121  ISSET_ISEMPTY_CV/197      #65=      16?0                 ?0                  	;33554432
162 121  BOOL_NOT/13               #66=      #65                  ?0                  	;0
163 121  JMPZ/43                   ?0        #66                  ?165                	;0	>>165
164 122  GOTO/253                  ?0        ?262                 ?98                 	;0
165 124  GOTO/253                  ?0        ?257                 ?99                 	;0	<<163
166 126  FETCH_STATIC_PROP_IS/176  $67=      100:'rRequest'       101:'XUI'           	;0
167 126  ISSET_ISEMPTY_DIM_OBJ/115 #68=      $67                  103:'id'            	;33554432
168 126  JMPZ_EX/46                #68=      #68                  ?177                	;0	>>177
169 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'a2297542D8BD35F6'	;1
170 126  FETCH_STATIC_PROP_FUNC_ARG/177 $69=      106:'rRequest'       107:'XUI'           	;1
171 126  FETCH_DIM_FUNC_ARG/93     $70=      $69                  109:'id'            	;1
172 126  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
173 126  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
174 126  ASSIGN/38                 $72=      16?0                 $71                 	;0
175 126  BOOL_NOT/13               #73=      $72                  ?0                  	;0
176 126  BOOL/52                   #68=      #73                  ?0                  	;0
177 126  BOOL_NOT/13               #74=      #68                  ?0                  	;0	<<168
178 126  JMPZ/43                   ?0        #74                  ?180                	;0	>>180
179 127  GOTO/253                  ?0        ?182                 ?110                	;0
180 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'e72F42A93714ba87'	;0	<<178
181 129  DO_FCALL_BY_NAME/131      ?58       ?0                   ?0                  	;0
182 131  ISSET_ISEMPTY_CV/197      #76=      16?0                 ?0                  	;33554432
183 131  JMPZ_EX/46                #76=      #76                  ?187                	;0	>>187
184 131  FETCH_STATIC_PROP_IS/176  $77=      113:'rRequest'       114:'XUI'           	;0
185 131  ISSET_ISEMPTY_DIM_OBJ/115 #78=      $77                  116:'import'        	;33554432
186 131  BOOL/52                   #76=      #78                  ?0                  	;0
187 131  BOOL_NOT/13               #79=      #76                  ?0                  	;0	<<183
188 131  JMPZ/43                   ?0        #79                  ?190                	;0	>>190
189 132  GOTO/253                  ?0        ?395                 ?117                	;0
190 134  FETCH_STATIC_PROP_UNSET/178 $80=      118:'rRequest'       119:'XUI'           	;0	<<188
191 134  UNSET_DIM/75              ?0        $80                  121:'import'        	;0
192 135  GOTO/253                  ?0        ?395                 ?122                	;0
193 137  ECHO/40                   ?0        123:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
194 138  INCLUDE_OR_EVAL/73        ?64       124:'topbar.php'     ?0                  	;2
195 139  ECHO/40                   ?0        125:'					</div>
                    <h4 class="page-title">' ?0                  	;0
196 140  ISSET_ISEMPTY_DIM_OBJ/115 #82=      16?0                 126:'id'            	;33554432
197 140  JMPZ/43                   ?0        #82                  ?199                	;0	>>199
198 141  GOTO/253                  ?0        ?518                 ?127                	;0
199 143  FETCH_STATIC_PROP_IS/176  $83=      128:'rRequest'       129:'XUI'           	;0	<<197
200 143  ISSET_ISEMPTY_DIM_OBJ/115 #84=      $83                  131:'import'        	;33554432
201 143  JMPZ/43                   ?0        #84                  ?203                	;0	>>203
202 144  GOTO/253                  ?0        ?587                 ?132                	;0
203 146  GOTO/253                  ?0        ?585                 ?133                	;0	<<201
204 148  ECHO/40                   ?0        134:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
205 149  FETCH_DIM_R/81            $85=      16?1                 135:'next'          	;0
206 149  ECHO/40                   ?0        $85                  ?0                  	;0
207 150  ECHO/40                   ?0        136:'</a>
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="load-balancing">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="servers">' ?0                  	;0
208 151  FETCH_DIM_R/81            $86=      16?1                 137:'server_tree'   	;0
209 151  ECHO/40                   ?0        $86                  ?0                  	;0
210 152  ECHO/40                   ?0        138:'</label>
													<div class="col-md-8">
														<div id="server_tree"></div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="restart_on_edit">Process Episodes</label>
													<div class="col-md-2">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_series" type="submit" class="btn btn-primary" value="Import" />
											</li>
										</ul>
									</div>
                                    ' ?0                  	;0
211 153  GOTO/253                  ?0        ?479                 ?139                	;0
212 155  FETCH_DIM_R/81            $87=      16?1                 140:'create_symlink'	;0
213 155  ECHO/40                   ?0        $87                  ?0                  	;0
214 156  ECHO/40                   ?0        141:' <i title="'    ?0                  	;0
215 157  FETCH_DIM_R/81            $88=      16?1                 142:'episode_tooltip_2'	;0
216 157  ECHO/40                   ?0        $88                  ?0                  	;0
217 158  ECHO/40                   ?0        143:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="movie_symlink" id="movie_symlink" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="remove_subtitles">' ?0                  	;0
218 159  FETCH_DIM_R/81            $89=      16?1                 144:'remove_existing_subtitles'	;0
219 159  ECHO/40                   ?0        $89                  ?0                  	;0
220 160  GOTO/253                  ?0        ?35                  ?145                	;0
221 163  ECHO/40                   ?0        146:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="backdrop_path">Backdrop URL</label>
													<div class="col-md-8 input-group">
														<input type="text" class="form-control" id="backdrop_path" name="backdrop_path" value="' ?0                  	;0
222 164  ISSET_ISEMPTY_CV/197      #90=      16?0                 ?0                  	;33554432
223 164  BOOL_NOT/13               #91=      #90                  ?0                  	;0
224 164  JMPZ/43                   ?0        #91                  ?226                	;0	>>226
225 165  GOTO/253                  ?0        ?237                 ?147                	;0
226 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'htmlspecialchars'	;1	<<224
227 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'json_decode'   	;2
228 167  FETCH_DIM_FUNC_ARG/93     $92=      16?0                 152:'backdrop_path' 	;1
229 167  SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
230 167  SEND_VAL_EX/116           ?96       153:true             ?2                  	;0
231 167  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
232 167  SEPARATE/156              $93=      $93                  ?0                  	;0
233 167  FETCH_DIM_FUNC_ARG/93     $94=      $93                  154:0               	;1
234 167  SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
235 167  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
236 167  ECHO/40                   ?0        $95                  ?0                  	;0
237 169  GOTO/253                  ?0        ?301                 ?155                	;0
238 171  INCLUDE_OR_EVAL/73        ?79       156:'session.php'    ?0                  	;2	<<0
239 172  INCLUDE_OR_EVAL/73        ?80       157:'functions.php'  ?0                  	;2
240 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'e6d500E19634d513'	;0
241 173  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
242 173  JMPZ/43                   ?0        $98                  ?244                	;0	>>244
243 174  GOTO/253                  ?0        ?246                 ?160                	;0
244 176  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'E72f42A93714BA87'	;0	<<242
245 176  DO_FCALL_BY_NAME/131      ?82       ?0                   ?0                  	;0
246 178  GOTO/253                  ?0        ?166                 ?163                	;0
247 181  ECHO/40                   ?0        164:'														</select>
                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">
                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>
                                                        </div>
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
                                    ' ?0                  	;0
248 182  FETCH_STATIC_PROP_IS/176  $100=     165:'rRequest'       166:'XUI'           	;0
249 182  ISSET_ISEMPTY_DIM_OBJ/115 #101=     $100                 168:'import'        	;33554432
250 182  BOOL_NOT/13               #102=     #101                 ?0                  	;0
251 182  JMPZ/43                   ?0        #102                 ?253                	;0	>>253
252 183  GOTO/253                  ?0        ?480                 ?169                	;0
253 185  ECHO/40                   ?0        170:'                                    <div class="tab-pane" id="advanced-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="direct_source">' ?0                  	;0	<<251
254 186  FETCH_DIM_R/81            $103=     16?1                 171:'direct_source' 	;0
255 186  ECHO/40                   ?0        $103                 ?0                  	;0
256 187  GOTO/253                  ?0        ?27                  ?172                	;0
257 189  INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'htmlspecialchars'	;1
258 189  FETCH_DIM_FUNC_ARG/93     $104=     16?0                 175:'year'          	;1
259 189  SEND_VAR_EX/66            ?80       $104                 ?1                  	;0
260 189  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
261 189  ECHO/40                   ?0        $105                 ?0                  	;0
262 191  ECHO/40                   ?0        176:'">
													</div>
												</div>
												' ?0                  	;0
263 192  INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'strlen'        	;1
264 192  FETCH_STATIC_PROP_FUNC_ARG/177 $106=     179:'rSettings'      180:'XUI'           	;1
265 192  FETCH_DIM_FUNC_ARG/93     $107=     $106                 182:'tmdb_api_key'  	;1
266 192  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
267 192  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
268 192  IS_SMALLER/19             #109=     183:0                $108                	;0
269 192  BOOL_NOT/13               #110=     #109                 ?0                  	;0
270 192  JMPZ/43                   ?0        #110                 ?272                	;0	>>272
271 193  GOTO/253                  ?0        ?348                 ?184                	;0
272 195  ECHO/40                   ?0        185:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="tmdb_search">TMDb Results</label>
													<div class="col-md-5">
														<select id="tmdb_search" class="form-control" data-toggle="select2"></select>
													</div>
                                                    <div class="col-md-3">
														<select name="tmdb_language" id="tmdb_language" class="form-control" data-toggle="select2">
                                                            ' ?0                  	;0	<<270
273 196  GOTO/253                  ?0        ?321                 ?186                	;0
274 198  INCLUDE_OR_EVAL/73        ?94       187:'header.php'     ?0                  	;2
275 199  ECHO/40                   ?0        188:'<div class="wrapper boxed-layout"' ?0                  	;0
276 200  FETCH_IS/89               $112=     189:'_SERVER'        ?0                  	;0
277 200  ISSET_ISEMPTY_DIM_OBJ/115 #113=     $112                 190:'HTTP_X_REQUESTED_WITH'	;16777216
278 200  BOOL_NOT/13               #114=     #113                 ?0                  	;0
279 200  JMPZ_EX/46                #114=     #114                 ?287                	;0	>>287
280 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'strtolower'    	;1
281 200  FETCH_FUNC_ARG/92         $115=     193:'_SERVER'        ?0                  	;1
282 200  FETCH_DIM_FUNC_ARG/93     $116=     $115                 194:'HTTP_X_REQUESTED_WITH'	;1
283 200  SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
284 200  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
285 200  IS_EQUAL/17               #118=     $117                 195:'xmlhttprequest'	;0
286 200  BOOL/52                   #114=     #118                 ?0                  	;0
287 200  BOOL_NOT/13               #119=     #114                 ?0                  	;0	<<279
288 200  JMPZ/43                   ?0        #119                 ?290                	;0	>>290
289 201  GOTO/253                  ?0        ?291                 ?196                	;0
290 203  ECHO/40                   ?0        197:' style="display: none;"' ?0                  	;0	<<288
291 205  GOTO/253                  ?0        ?193                 ?198                	;0
292 207  FETCH_DIM_R/81            $120=     16?0                 199:'id'            	;0
293 207  ECHO/40                   ?0        $120                 ?0                  	;0
294 208  ECHO/40                   ?0        200:'" />
							'   ?0                  	;0
295 210  ECHO/40                   ?0        201:'							<input type="hidden" id="tmdb_id" name="tmdb_id" value="' ?0                  	;0
296 211  ISSET_ISEMPTY_CV/197      #121=     16?0                 ?0                  	;33554432
297 211  BOOL_NOT/13               #122=     #121                 ?0                  	;0
298 211  JMPZ/43                   ?0        #122                 ?300                	;0	>>300
299 212  GOTO/253                  ?0        ?318                 ?202                	;0
300 214  GOTO/253                  ?0        ?313                 ?203                	;0	<<298
301 216  ECHO/40                   ?0        204:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="plot">Plot</label>
													<div class="col-md-8">
														<textarea rows="6" class="form-control" id="plot" name="plot">' ?0                  	;0
302 217  ISSET_ISEMPTY_CV/197      #123=     16?0                 ?0                  	;33554432
303 217  BOOL_NOT/13               #124=     #123                 ?0                  	;0
304 217  JMPZ/43                   ?0        #124                 ?306                	;0	>>306
305 218  GOTO/253                  ?0        ?311                 ?205                	;0
306 220  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'htmlspecialchars'	;1	<<304
307 220  FETCH_DIM_FUNC_ARG/93     $125=     16?0                 208:'plot'          	;1
308 220  SEND_VAR_EX/66            ?80       $125                 ?1                  	;0
309 220  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
310 220  ECHO/40                   ?0        $126                 ?0                  	;0
311 222  ECHO/40                   ?0        209:'</textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="cast">Cast</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="cast" name="cast" value="' ?0                  	;0
312 223  GOTO/253                  ?0        ?417                 ?210                	;0
313 225  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'htmlspecialchars'	;1
314 225  FETCH_DIM_FUNC_ARG/93     $127=     16?0                 213:'tmdb_id'       	;1
315 225  SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
316 225  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
317 225  ECHO/40                   ?0        $128                 ?0                  	;0
318 227  ECHO/40                   ?0        214:'" />
                            ' ?0                  	;0
319 229  ECHO/40                   ?0        215:'                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />
                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
                                    ' ?0                  	;0
320 230  GOTO/253                  ?0        ?349                 ?216                	;0
321 232  ISSET_ISEMPTY_DIM_OBJ/115 #129=     16?0                 217:'tmdb_language' 	;16777216
322 232  BOOL_NOT/13               #130=     #129                 ?0                  	;0
323 232  JMPZ/43                   ?0        #130                 ?327                	;0	>>327
324 232  FETCH_DIM_R/81            $131=     16?0                 218:'tmdb_language' 	;0
325 232  QM_ASSIGN/22              #132=     $131                 ?0                  	;0
326 232  JMP/42                    ?0        ?329                 ?0                  	;0	>>329
327 232  FETCH_DIM_R/81            $133=     16?5                 219:'tmdb_language' 	;0	<<323
328 232  QM_ASSIGN/22              #132=     $133                 ?0                  	;0
329 232  ASSIGN/38                 ?117      16?4                 #132                	;0	<<326
330 233  FE_RESET_R/77             $135=     16?6                 ?346                	;0
331 233  FE_FETCH_R/78             #136=     $135                 16?7                	;346	>>346	<<345
332 233  ASSIGN/38                 ?120      16?8                 #136                	;0
333 234  ECHO/40                   ?0        220:'                                                            <option' ?0                  	;0
334 235  IS_EQUAL/17               #138=     16?8                 16?4                	;0
335 235  BOOL_NOT/13               #139=     #138                 ?0                  	;0
336 235  JMPZ/43                   ?0        #139                 ?339                	;0	>>339
337 236  NOP/0                     ?0        ?0                   ?0                  	;1
338 236  GOTO/253                  ?0        ?340                 ?221                	;0
339 238  ECHO/40                   ?0        222:' selected'      ?0                  	;0	<<336
340 240  ECHO/40                   ?0        223:' value="'       ?0                  	;0
341 241  ECHO/40                   ?0        16?8                 ?0                  	;0
342 242  ECHO/40                   ?0        224:'">'             ?0                  	;0
343 243  ECHO/40                   ?0        16?7                 ?0                  	;0
344 244  ECHO/40                   ?0        225:'</option>
                                                            ' ?0                  	;0
345 245  JMP/42                    ?0        ?331                 ?0                  	;0	>>331
346 245  FE_FREE/127               ?0        $135                 ?0                  	;0	<<330
347 248  ECHO/40                   ?0        226:'                                                        </select>
													</div>
												</div>
												' ?0                  	;0
348 250  GOTO/253                  ?0        ?529                 ?227                	;0
349 252  FETCH_STATIC_PROP_IS/176  $140=     228:'rRequest'       229:'XUI'           	;0
350 252  ISSET_ISEMPTY_DIM_OBJ/115 #141=     $140                 231:'import'        	;33554432
351 252  BOOL_NOT/13               #142=     #141                 ?0                  	;0
352 252  JMPZ/43                   ?0        #142                 ?354                	;0	>>354
353 253  GOTO/253                  ?0        ?515                 ?232                	;0
354 255  ECHO/40                   ?0        233:'                                    <li class="nav-item">
										<a href="#advanced-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0	<<352
355 256  FETCH_DIM_R/81            $143=     16?1                 234:'advanced'      	;0
356 256  ECHO/40                   ?0        $143                 ?0                  	;0
357 257  ECHO/40                   ?0        235:'</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
358 258  FETCH_DIM_R/81            $144=     16?1                 236:'server'        	;0
359 258  ECHO/40                   ?0        $144                 ?0                  	;0
360 259  GOTO/253                  ?0        ?513                 ?237                	;0
361 261  GOTO/253                  ?0        ?363                 ?238                	;0
362 263  ECHO/40                   ?0        239:'Edit'           ?0                  	;0
363 265  ECHO/40                   ?0        240:'" />
											</li>
										</ul>
									</div>
                                    ' ?0                  	;0
364 266  GOTO/253                  ?0        ?43                  ?241                	;0
365 268  ECHO/40                   ?0        242:'</label>
														<div class="col-md-8">
															<input type="file" id="m3u_file" name="m3u_file" />
														</div>
													</div>
												</div>
												<div id="import_folder_toggle" style="display:none;">
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="import_folder">' ?0                  	;0
366 269  FETCH_DIM_R/81            $145=     16?1                 243:'folder'        	;0
367 269  ECHO/40                   ?0        $145                 ?0                  	;0
368 270  ECHO/40                   ?0        244:'</label>
														<div class="col-md-8 input-group">
															<input type="text" id="import_folder" name="import_folder" class="form-control" value="' ?0                  	;0
369 271  ECHO/40                   ?0        16?9                 ?0                  	;0
370 272  ECHO/40                   ?0        245:'">
															<div class="input-group-append">
																<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>
															</div>
														</div>
													</div>
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="scan_recursive">' ?0                  	;0
371 273  GOTO/253                  ?0        ?411                 ?246                	;0
372 275  ECHO/40                   ?0        247:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="target_container" id="target_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
373 276  FE_RESET_R/77             $146=     248:array (
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
) ?381                	;0
374 276  FE_FETCH_R/78             ?0        $146                 16?10               	;381	>>381	<<380
375 277  ECHO/40                   ?0        249:'															<option value="' ?0                  	;0
376 278  ECHO/40                   ?0        16?10                ?0                  	;0
377 279  ECHO/40                   ?0        250:'">'             ?0                  	;0
378 280  ECHO/40                   ?0        16?10                ?0                  	;0
379 281  ECHO/40                   ?0        251:'</option>
															' ?0                  	;0
380 282  JMP/42                    ?0        ?374                 ?0                  	;0	>>374
381 282  FE_FREE/127               ?0        $146                 ?0                  	;0	<<373
382 285  ECHO/40                   ?0        252:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
383 286  FETCH_DIM_R/81            $147=     16?1                 253:'prev'          	;0
384 286  ECHO/40                   ?0        $147                 ?0                  	;0
385 287  GOTO/253                  ?0        ?204                 ?254                	;0
386 289  FETCH_DIM_R/81            $148=     16?1                 255:'m3u'           	;0
387 289  ECHO/40                   ?0        $148                 ?0                  	;0
388 290  ECHO/40                   ?0        256:'</label>
															</span>
															<span style="padding-left:50px;">
																<input type="radio" id="import_type_2" name="import_type" class="custom-control-input">
																<label class="custom-control-label" for="import_type_2">' ?0                  	;0
389 291  FETCH_DIM_R/81            $149=     16?1                 257:'folder'        	;0
390 291  ECHO/40                   ?0        $149                 ?0                  	;0
391 292  ECHO/40                   ?0        258:'</label>
															</span>
														</div>
													</div>
												</div>
												<div id="import_m3uf_toggle">
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="m3u_file">' ?0                  	;0
392 293  FETCH_DIM_R/81            $150=     16?1                 259:'m3u_file'      	;0
393 293  ECHO/40                   ?0        $150                 ?0                  	;0
394 294  GOTO/253                  ?0        ?365                 ?260                	;0
395 297  ASSIGN/38                 ?134      16?11                261:array (
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
396 298  FE_RESET_R/77             $152=     16?12                ?408                	;0
397 298  FE_FETCH_R/78             ?0        $152                 16?2                	;408	>>408	<<407
398 299  FETCH_DIM_R/81            $154=     16?2                 262:'id'            	;0
399 299  INIT_ARRAY/71             #155=     $154                 263:'id'            	;22
400 299  ADD_ARRAY_ELEMENT/72      #155=     264:'offline'        265:'parent'        	;0
401 299  FETCH_DIM_R/81            $156=     16?2                 266:'server_name'   	;0
402 299  ADD_ARRAY_ELEMENT/72      #155=     $156                 267:'text'          	;0
403 299  ADD_ARRAY_ELEMENT/72      #155=     268:'mdi mdi-server-network' 269:'icon'          	;0
404 299  ADD_ARRAY_ELEMENT/72      #155=     270:array (
  'opened' => true,
) 271:'state'         	;0
405 299  ASSIGN_DIM/147            ?136      16?11                ?4386466            	;0
406 299  OP_DATA/137               ?0        #155                 ?0                  	;0
407 300  JMP/42                    ?0        ?397                 ?0                  	;0	>>397
408 300  FE_FREE/127               ?0        $152                 ?0                  	;0	<<396
409 303  ASSIGN/38                 ?140      16?13                272:'TV Series'     	;0
410 304  GOTO/253                  ?0        ?274                 ?273                	;0
411 306  FETCH_DIM_R/81            $158=     16?1                 274:'scan_recursively'	;0
412 306  ECHO/40                   ?0        $158                 ?0                  	;0
413 307  ECHO/40                   ?0        275:'</label>
														<div class="col-md-2">
															<input name="scan_recursive" id="scan_recursive" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
														</div>
													</div>
												</div>
                                                ' ?0                  	;0
414 308  GOTO/253                  ?0        ?529                 ?276                	;0
415 310  ECHO/40                   ?0        277:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="title">Series Name</label>
													<div class="col-md-5">
														<input type="text" class="form-control" id="title" name="title" value="' ?0                  	;0
416 311  GOTO/253                  ?0        ?151                 ?278                	;0
417 313  ISSET_ISEMPTY_CV/197      #159=     16?0                 ?0                  	;33554432
418 313  BOOL_NOT/13               #160=     #159                 ?0                  	;0
419 313  JMPZ/43                   ?0        #160                 ?421                	;0	>>421
420 314  GOTO/253                  ?0        ?426                 ?279                	;0
421 316  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'htmlspecialchars'	;1	<<419
422 316  FETCH_DIM_FUNC_ARG/93     $161=     16?0                 282:'cast'          	;1
423 316  SEND_VAR_EX/66            ?80       $161                 ?1                  	;0
424 316  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
425 316  ECHO/40                   ?0        $162                 ?0                  	;0
426 318  ECHO/40                   ?0        283:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="director">Director</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="director" name="director" value="' ?0                  	;0
427 319  ISSET_ISEMPTY_CV/197      #163=     16?0                 ?0                  	;33554432
428 319  BOOL_NOT/13               #164=     #163                 ?0                  	;0
429 319  JMPZ/43                   ?0        #164                 ?431                	;0	>>431
430 320  GOTO/253                  ?0        ?455                 ?284                	;0
431 322  GOTO/253                  ?0        ?450                 ?285                	;0	<<429
432 324  FETCH_DIM_R/81            $165=     16?1                 286:'episode_tooltip_7'	;0
433 324  ECHO/40                   ?0        $165                 ?0                  	;0
434 325  ECHO/40                   ?0        287:'" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option value="0">' ?0                  	;0
435 326  FETCH_DIM_R/81            $166=     16?1                 288:'transcoding_disabled'	;0
436 326  ECHO/40                   ?0        $166                 ?0                  	;0
437 327  ECHO/40                   ?0        289:'</option>
															' ?0                  	;0
438 328  FE_RESET_R/77             $167=     16?14                ?448                	;0
439 328  FE_FETCH_R/78             ?0        $167                 16?15               	;448	>>448	<<447
440 329  ECHO/40                   ?0        290:'															<option value="' ?0                  	;0
441 330  FETCH_DIM_R/81            $168=     16?15                291:'profile_id'    	;0
442 330  ECHO/40                   ?0        $168                 ?0                  	;0
443 331  ECHO/40                   ?0        292:'">'             ?0                  	;0
444 332  FETCH_DIM_R/81            $169=     16?15                293:'profile_name'  	;0
445 332  ECHO/40                   ?0        $169                 ?0                  	;0
446 333  ECHO/40                   ?0        294:'</option>
															' ?0                  	;0
447 334  JMP/42                    ?0        ?439                 ?0                  	;0	>>439
448 334  FE_FREE/127               ?0        $167                 ?0                  	;0	<<438
449 336  GOTO/253                  ?0        ?131                 ?295                	;0
450 338  INIT_FCALL_BY_NAME/59     ?0        ?0                   296:'htmlspecialchars'	;1
451 338  FETCH_DIM_FUNC_ARG/93     $170=     16?0                 298:'director'      	;1
452 338  SEND_VAR_EX/66            ?80       $170                 ?1                  	;0
453 338  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
454 338  ECHO/40                   ?0        $171                 ?0                  	;0
455 340  ECHO/40                   ?0        299:'">
													</div>
													<label class="col-md-2 col-form-label" for="genre">Genres</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="genre" name="genre" value="' ?0                  	;0
456 341  ISSET_ISEMPTY_CV/197      #172=     16?0                 ?0                  	;33554432
457 341  BOOL_NOT/13               #173=     #172                 ?0                  	;0
458 341  JMPZ/43                   ?0        #173                 ?460                	;0	>>460
459 342  GOTO/253                  ?0        ?1                   ?300                	;0
460 344  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'htmlspecialchars'	;1	<<458
461 344  FETCH_DIM_FUNC_ARG/93     $174=     16?0                 303:'genre'         	;1
462 344  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
463 344  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
464 344  ECHO/40                   ?0        $175                 ?0                  	;0
465 345  GOTO/253                  ?0        ?1                   ?304                	;0
466 347  FETCH_STATIC_PROP_IS/176  $176=     305:'rRequest'       306:'XUI'           	;0
467 347  ISSET_ISEMPTY_DIM_OBJ/115 #177=     $176                 308:'import'        	;33554432
468 347  BOOL_NOT/13               #178=     #177                 ?0                  	;0
469 347  JMPZ/43                   ?0        #178                 ?471                	;0	>>471
470 348  GOTO/253                  ?0        ?472                 ?309                	;0
471 350  ECHO/40                   ?0        310:' enctype="multipart/form-data"' ?0                  	;0	<<469
472 352  ECHO/40                   ?0        311:' action="#" method="POST" data-parsley-validate="">
                            ' ?0                  	;0
473 353  FETCH_STATIC_PROP_IS/176  $179=     312:'rRequest'       313:'XUI'           	;0
474 353  ISSET_ISEMPTY_DIM_OBJ/115 #180=     $179                 315:'import'        	;33554432
475 353  BOOL_NOT/13               #181=     #180                 ?0                  	;0
476 353  JMPZ/43                   ?0        #181                 ?478                	;0	>>478
477 354  GOTO/253                  ?0        ?140                 ?316                	;0
478 356  GOTO/253                  ?0        ?138                 ?317                	;0	<<476
479 358  GOTO/253                  ?0        ?43                  ?318                	;0
480 360  ECHO/40                   ?0        319:'									<div class="tab-pane" id="movie-information">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="cover">Poster URL</label>
													<div class="col-md-8 input-group">
														<input type="text" class="form-control" id="cover" name="cover" value="' ?0                  	;0
481 361  ISSET_ISEMPTY_CV/197      #182=     16?0                 ?0                  	;33554432
482 361  BOOL_NOT/13               #183=     #182                 ?0                  	;0
483 361  JMPZ/43                   ?0        #183                 ?485                	;0	>>485
484 362  GOTO/253                  ?0        ?221                 ?320                	;0
485 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   321:'htmlspecialchars'	;1	<<483
486 364  FETCH_DIM_FUNC_ARG/93     $184=     16?0                 323:'cover'         	;1
487 364  SEND_VAR_EX/66            ?80       $184                 ?1                  	;0
488 364  DO_FCALL_BY_NAME/131      $185=     ?0                   ?0                  	;0
489 364  ECHO/40                   ?0        $185                 ?0                  	;0
490 365  GOTO/253                  ?0        ?221                 ?324                	;0
491 367  INIT_FCALL_BY_NAME/59     ?0        ?0                   325:'htmlspecialchars'	;1
492 367  FETCH_DIM_FUNC_ARG/93     $186=     16?0                 327:'rating'        	;1
493 367  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
494 367  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
495 367  ECHO/40                   ?0        $187                 ?0                  	;0
496 369  ECHO/40                   ?0        328:'">
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_series" type="submit" class="btn btn-primary" value="' ?0                  	;0
497 370  ISSET_ISEMPTY_CV/197      #188=     16?0                 ?0                  	;33554432
498 370  JMPZ/43                   ?0        #188                 ?500                	;0	>>500
499 371  GOTO/253                  ?0        ?362                 ?329                	;0
500 373  ECHO/40                   ?0        330:'Add'            ?0                  	;0	<<498
501 374  GOTO/253                  ?0        ?361                 ?331                	;0
502 376  ECHO/40                   ?0        332:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
                                                ' ?0                  	;0
503 377  FETCH_STATIC_PROP_IS/176  $189=     333:'rRequest'       334:'XUI'           	;0
504 377  ISSET_ISEMPTY_DIM_OBJ/115 #190=     $189                 336:'import'        	;33554432
505 377  BOOL_NOT/13               #191=     #190                 ?0                  	;0
506 377  JMPZ/43                   ?0        #191                 ?508                	;0	>>508
507 378  GOTO/253                  ?0        ?415                 ?337                	;0
508 380  ECHO/40                   ?0        338:'                                                <p class="sub-header">
                                                    Importing Series using this method will parse your M3U or folder and push the individual episodes through Watch Folder. If you have category and bouquet allocation set up in Watch Folder Settings then they will be used here too.
                                                </p>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="import_type">' ?0                  	;0	<<506
509 381  FETCH_DIM_R/81            $192=     16?1                 339:'type'          	;0
510 381  ECHO/40                   ?0        $192                 ?0                  	;0
511 382  ECHO/40                   ?0        340:'</label>
													<div class="col-md-8">
														<div class="custom-control custom-radio mt-1">
															<span>
																<input type="radio" id="import_type_1" name="import_type" class="custom-control-input" checked>
																<label class="custom-control-label" for="import_type_1">' ?0                  	;0
512 383  GOTO/253                  ?0        ?386                 ?341                	;0
513 385  ECHO/40                   ?0        342:'</span>
										</a>
									</li>
                                    ' ?0                  	;0
514 386  GOTO/253                  ?0        ?516                 ?343                	;0
515 388  ECHO/40                   ?0        344:'									<li class="nav-item">
										<a href="#movie-information" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-movie-outline mr-1"></i>
											<span class="d-none d-sm-inline">Information</span>
										</a>
									</li>
                                    ' ?0                  	;0
516 390  GOTO/253                  ?0        ?502                 ?345                	;0
517 392  GOTO/253                  ?0        ?520                 ?346                	;0
518 394  FETCH_DIM_R/81            $193=     16?0                 347:'title'         	;0
519 394  ECHO/40                   ?0        $193                 ?0                  	;0
520 396  ECHO/40                   ?0        348:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form' ?0                  	;0
521 397  GOTO/253                  ?0        ?466                 ?349                	;0
522 400  ECHO/40                   ?0        350:'										</select>
									</div>
								</div>
								<div class="form-group row mb-4">
									<label class="col-md-4 col-form-label" for="current_path">' ?0                  	;0
523 401  FETCH_DIM_R/81            $194=     16?1                 351:'current_path'  	;0
524 401  ECHO/40                   ?0        $194                 ?0                  	;0
525 402  ECHO/40                   ?0        352:'</label>
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
													<th>' ?0                  	;0
526 403  FETCH_DIM_R/81            $195=     16?1                 353:'directory'     	;0
527 403  ECHO/40                   ?0        $195                 ?0                  	;0
528 404  GOTO/253                  ?0        ?146                 ?354                	;0
529 407  ECHO/40                   ?0        355:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_id">' ?0                  	;0
530 408  FETCH_STATIC_PROP_IS/176  $196=     356:'rRequest'       357:'XUI'           	;0
531 408  ISSET_ISEMPTY_DIM_OBJ/115 #197=     $196                 359:'import'        	;33554432
532 408  JMPZ/43                   ?0        #197                 ?535                	;0	>>535
533 408  QM_ASSIGN/22              #198=     360:'Fallback '      ?0                  	;0
534 408  JMP/42                    ?0        ?536                 ?0                  	;0	>>536
535 408  QM_ASSIGN/22              #198=     361:''               ?0                  	;0	<<532
536 408  ECHO/40                   ?0        #198                 ?0                  	;0	<<534
537 409  ECHO/40                   ?0        362:'Categories</label>
													<div class="col-md-8">
                                                        <select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
538 410  INIT_FCALL_BY_NAME/59     ?0        ?0                   363:'f769e3F0c739d1a6'	;1
539 410  SEND_VAL_EX/116           ?80       365:'series'         ?1                  	;0
540 410  DO_FCALL_BY_NAME/131      $199=     ?0                   ?0                  	;0
541 410  FE_RESET_R/77             $200=     $199                 ?583                	;0
542 410  FE_FETCH_R/78             ?0        $200                 16?16               	;583	>>583	<<582
543 411  NOP/0                     ?0        ?0                   ?0                  	;1
544 411  GOTO/253                  ?0        ?556                 ?366                	;0
545 414  ECHO/40                   ?0        367:'value="'        ?0                  	;0
546 415  FETCH_DIM_R/81            $201=     16?16                368:'id'            	;0
547 415  ECHO/40                   ?0        $201                 ?0                  	;0
548 416  ECHO/40                   ?0        369:'">'             ?0                  	;0
549 417  FETCH_DIM_R/81            $202=     16?16                370:'category_name' 	;0
550 417  ECHO/40                   ?0        $202                 ?0                  	;0
551 418  NOP/0                     ?0        ?0                   ?0                  	;1
552 418  GOTO/253                  ?0        ?553                 ?371                	;0
553 420  ECHO/40                   ?0        372:'</option>
															' ?0                  	;0
554 422  NOP/0                     ?0        ?0                   ?0                  	;1
555 422  GOTO/253                  ?0        ?582                 ?373                	;0
556 424  ECHO/40                   ?0        374:'                                                            <option ' ?0                  	;0
557 425  ISSET_ISEMPTY_CV/197      #203=     16?0                 ?0                  	;33554432
558 425  BOOL_NOT/13               #204=     #203                 ?0                  	;0
559 425  JMPZ/43                   ?0        #204                 ?562                	;0	>>562
560 426  NOP/0                     ?0        ?0                   ?0                  	;1
561 426  GOTO/253                  ?0        ?545                 ?375                	;0
562 428  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'in_array'      	;2	<<559
563 428  INIT_FCALL_BY_NAME/59     ?0        ?0                   378:'intval'        	;1
564 428  FETCH_DIM_FUNC_ARG/93     $205=     16?16                380:'id'            	;1
565 428  SEND_VAR_EX/66            ?80       $205                 ?1                  	;0
566 428  DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
567 428  SEND_VAR_NO_REF_EX/50     ?80       $206                 ?1                  	;0
568 428  INIT_FCALL_BY_NAME/59     ?0        ?0                   381:'json_decode'   	;2
569 428  FETCH_DIM_FUNC_ARG/93     $207=     16?0                 383:'category_id'   	;1
570 428  SEND_VAR_EX/66            ?80       $207                 ?1                  	;0
571 428  SEND_VAL_EX/116           ?96       384:true             ?2                  	;0
572 428  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
573 428  SEND_VAR_NO_REF_EX/50     ?96       $208                 ?2                  	;0
574 428  DO_FCALL_BY_NAME/131      $209=     ?0                   ?0                  	;0
575 428  BOOL_NOT/13               #210=     $209                 ?0                  	;0
576 428  JMPZ/43                   ?0        #210                 ?579                	;0	>>579
577 429  NOP/0                     ?0        ?0                   ?0                  	;1
578 429  GOTO/253                  ?0        ?580                 ?385                	;0
579 431  ECHO/40                   ?0        386:'selected '      ?0                  	;0	<<576
580 433  NOP/0                     ?0        ?0                   ?0                  	;1
581 433  GOTO/253                  ?0        ?545                 ?387                	;0
582 434  JMP/42                    ?0        ?542                 ?0                  	;0	>>542
583 434  FE_FREE/127               ?0        $200                 ?0                  	;0	<<541
584 436  GOTO/253                  ?0        ?64                  ?388                	;0
585 438  ECHO/40                   ?0        389:'Add Series'     ?0                  	;0
586 439  GOTO/253                  ?0        ?588                 ?390                	;0
587 441  ECHO/40                   ?0        391:'Import Series'  ?0                  	;0
588 443  GOTO/253                  ?0        ?517                 ?392                	;0
589 445  INCLUDE_OR_EVAL/73        ?194      393:'footer.php'     ?0                  	;2
590 446  NOP/0                     ?0        394:1                ?0                  	;4294967295
*/

?>