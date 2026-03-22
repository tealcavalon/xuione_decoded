<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?340                 ?0                  	;0	>>340
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'htmlspecialchars'	;1
2   5    FETCH_DIM_FUNC_ARG/93     $8=       16?0                 3:'max_genres'      	;1
3   5    SEND_VAR_EX/66            ?80       $8                   ?1                  	;0
4   5    DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
5   5    ECHO/40                   ?0        $9                   ?0                  	;0
6   6    ECHO/40                   ?0        4:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="max_items">Max Items <i title="Maximum number of items to add per folder per scan. Set this to 0 to scan everything." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="max_items" name="max_items" value="' ?0                  	;0
7   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'htmlspecialchars'	;1
8   7    FETCH_DIM_FUNC_ARG/93     $10=      16?0                 7:'max_items'       	;1
9   7    SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
10  7    DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
11  7    ECHO/40                   ?0        $11                  ?0                  	;0
12  8    ECHO/40                   ?0        8:'" required data-parsley-trigger="change">
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="alternative_titles">Check Alternative Titles <i title="If a title partially matches a TMDb result, check the alternative titles of that Movie or TV Show to see if any of those match the title." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="alternative_titles" id="alternative_titles" type="checkbox"' ?0                  	;0
13  9    FETCH_DIM_R/81            $12=      16?0                 9:'alternative_titles'	;0
14  9    IS_EQUAL/17               #13=      $12                  10:1                	;0
15  9    BOOL_NOT/13               #14=      #13                  ?0                  	;0
16  9    JMPZ/43                   ?0        #14                  ?18                 	;0	>>18
17  10   GOTO/253                  ?0        ?41                  ?11                 	;0
18  12   GOTO/253                  ?0        ?40                  ?12                 	;0	<<16
19  14   ECHO/40                   ?0        13:' style="display: none;"' ?0                  	;0
20  16   ECHO/40                   ?0        14:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
21  17   INCLUDE_OR_EVAL/73        ?7        15:'topbar.php'      ?0                  	;2
22  18   ECHO/40                   ?0        16:'                    </div>
					<h4 class="page-title">Folder Watch Settings</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
23  19   GOTO/253                  ?0        ?24                  ?17                 	;0
24  21   ISSET_ISEMPTY_CV/197      #16=      16?1                 ?0                  	;33554432
25  21   JMPZ_EX/46                #16=      #16                  ?29                 	;0	>>29
26  21   FETCH_CONSTANT/99         #17=      ?0                   18:'STATUS_SUCCESS' 	;16
27  21   IS_EQUAL/17               #18=      16?1                 #17                 	;0
28  21   BOOL/52                   #16=      #18                  ?0                  	;0
29  21   BOOL_NOT/13               #19=      #16                  ?0                  	;0	<<25
30  21   JMPZ/43                   ?0        #19                  ?32                 	;0	>>32
31  22   GOTO/253                  ?0        ?33                  ?21                 	;0
32  24   ECHO/40                   ?0        22:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Watch settings sucessfully updated!
				</div>
				' ?0                  	;0	<<30
33  26   ECHO/40                   ?0        23:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST">
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#setup" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Setup</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#categories" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-movie mr-1"></i>
											<span class="d-none d-sm-inline">Movie Categories</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#categories-tv" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-youtube-tv mr-1"></i>
											<span class="d-none d-sm-inline">TV Categories</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="setup">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="scan_seconds">Scan Frequency <i title="Scan a folder every X seconds." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="scan_seconds" name="scan_seconds" value="' ?0                  	;0
34  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'htmlspecialchars'	;1
35  27   FETCH_DIM_FUNC_ARG/93     $20=      16?0                 26:'scan_seconds'   	;1
36  27   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
37  27   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
38  27   ECHO/40                   ?0        $21                  ?0                  	;0
39  28   GOTO/253                  ?0        ?167                 ?27                 	;0
40  30   ECHO/40                   ?0        28:' checked '       ?0                  	;0
41  32   ECHO/40                   ?0        29:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="fallback_parser">Use Fallback Parser <i title="If no match is found using your preferred title parser, fallback to the parser you didn\'t select and run again." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="fallback_parser" id="fallback_parser" type="checkbox"' ?0                  	;0
42  33   FETCH_DIM_R/81            $22=      16?0                 30:'fallback_parser'	;0
43  33   IS_EQUAL/17               #23=      $22                  31:1                	;0
44  33   BOOL_NOT/13               #24=      #23                  ?0                  	;0
45  33   JMPZ/43                   ?0        #24                  ?47                 	;0	>>47
46  34   GOTO/253                  ?0        ?181                 ?32                 	;0
47  36   ECHO/40                   ?0        33:' checked '       ?0                  	;0	<<45
48  37   GOTO/253                  ?0        ?181                 ?34                 	;0
49  39   INIT_METHOD_CALL/112      ?0        16?2                 35:'get_rows'       	;0
50  39   DO_FCALL/60               $25=      ?0                   ?0                  	;0
51  39   FE_RESET_R/77             $26=      $25                  ?164                	;0
52  39   FE_FETCH_R/78             ?0        $26                  16?3                	;164	>>164	<<163
53  40   NOP/0                     ?0        ?0                   ?0                  	;1
54  40   GOTO/253                  ?0        ?55                  ?37                 	;0
55  42   ECHO/40                   ?0        38:'												<div class="form-group row mb-4">
													<label class="col-md-2 col-form-label" for="genretv_' ?0                  	;0
56  43   FETCH_DIM_R/81            $27=      16?3                 39:'genre_id'       	;0
57  43   ECHO/40                   ?0        $27                  ?0                  	;0
58  44   ECHO/40                   ?0        40:'">'              ?0                  	;0
59  45   FETCH_DIM_R/81            $28=      16?3                 41:'genre'          	;0
60  45   ECHO/40                   ?0        $28                  ?0                  	;0
61  46   ECHO/40                   ?0        42:'</label>
													<div class="col-md-4">
														<select name="genretv_' ?0                  	;0
62  47   NOP/0                     ?0        ?0                   ?0                  	;1
63  47   GOTO/253                  ?0        ?144                 ?43                 	;0
64  49   ECHO/40                   ?0        44:'selected '       ?0                  	;0
65  51   ECHO/40                   ?0        45:'value="0">Do Not Use</option>
															' ?0                  	;0
66  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'F769E3F0C739D1a6'	;1
67  52   SEND_VAL_EX/116           ?80       48:'series'          ?1                  	;0
68  52   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
69  52   FE_RESET_R/77             $30=      $29                  ?95                 	;0
70  52   FE_FETCH_R/78             ?0        $30                  16?4                	;95	>>95	<<94
71  53   ECHO/40                   ?0        49:'																<option ' ?0                  	;0
72  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'intval'         	;1
73  54   FETCH_DIM_FUNC_ARG/93     $31=      16?3                 52:'category_id'    	;1
74  54   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
75  54   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
76  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'intval'         	;1
77  54   FETCH_DIM_FUNC_ARG/93     $33=      16?4                 55:'id'             	;1
78  54   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
79  54   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
80  54   IS_EQUAL/17               #35=      $32                  $34                 	;0
81  54   BOOL_NOT/13               #36=      #35                  ?0                  	;0
82  54   JMPZ/43                   ?0        #36                  ?86                 	;0	>>86
83  55   NOP/0                     ?0        ?0                   ?0                  	;1
84  55   NOP/0                     ?0        ?0                   ?0                  	;1
85  55   GOTO/253                  ?0        ?87                  ?56                 	;0
86  57   ECHO/40                   ?0        57:'selected '       ?0                  	;0	<<82
87  59   ECHO/40                   ?0        58:'value="'         ?0                  	;0
88  60   FETCH_DIM_R/81            $37=      16?4                 59:'id'             	;0
89  60   ECHO/40                   ?0        $37                  ?0                  	;0
90  61   ECHO/40                   ?0        60:'">'              ?0                  	;0
91  62   FETCH_DIM_R/81            $38=      16?4                 61:'category_name'  	;0
92  62   ECHO/40                   ?0        $38                  ?0                  	;0
93  63   ECHO/40                   ?0        62:'</option>
															' ?0                  	;0
94  64   JMP/42                    ?0        ?70                  ?0                  	;0	>>70
95  64   FE_FREE/127               ?0        $30                  ?0                  	;0	<<69
96  67   NOP/0                     ?0        ?0                   ?0                  	;1
97  67   GOTO/253                  ?0        ?135                 ?63                 	;0
98  69   FETCH_DIM_R/81            $39=      16?3                 64:'genre_id'       	;0
99  69   ECHO/40                   ?0        $39                  ?0                  	;0
100 70   ECHO/40                   ?0        65:'" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
101 71   FE_RESET_R/77             $40=      16?5                 ?131                	;0
102 71   FE_FETCH_R/78             ?0        $40                  16?6                	;131	>>131	<<130
103 72   ECHO/40                   ?0        66:'															<option ' ?0                  	;0
104 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'in_array'       	;2
105 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'intval'         	;1
106 73   FETCH_DIM_FUNC_ARG/93     $41=      16?6                 71:'id'             	;1
107 73   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
108 73   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
109 73   SEND_VAR_NO_REF_EX/50     ?80       $42                  ?1                  	;0
110 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'json_decode'    	;2
111 73   FETCH_DIM_FUNC_ARG/93     $43=      16?3                 74:'bouquets'       	;1
112 73   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
113 73   SEND_VAL_EX/116           ?96       75:true              ?2                  	;0
114 73   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
115 73   SEND_VAR_NO_REF_EX/50     ?96       $44                  ?2                  	;0
116 73   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
117 73   BOOL_NOT/13               #46=      $45                  ?0                  	;0
118 73   JMPZ/43                   ?0        #46                  ?122                	;0	>>122
119 74   NOP/0                     ?0        ?0                   ?0                  	;1
120 74   NOP/0                     ?0        ?0                   ?0                  	;1
121 74   GOTO/253                  ?0        ?123                 ?76                 	;0
122 76   ECHO/40                   ?0        77:'selected '       ?0                  	;0	<<118
123 78   ECHO/40                   ?0        78:'value="'         ?0                  	;0
124 79   FETCH_DIM_R/81            $47=      16?6                 79:'id'             	;0
125 79   ECHO/40                   ?0        $47                  ?0                  	;0
126 80   ECHO/40                   ?0        80:'">'              ?0                  	;0
127 81   FETCH_DIM_R/81            $48=      16?6                 81:'bouquet_name'   	;0
128 81   ECHO/40                   ?0        $48                  ?0                  	;0
129 82   ECHO/40                   ?0        82:'</option>
															' ?0                  	;0
130 83   JMP/42                    ?0        ?102                 ?0                  	;0	>>102
131 83   FE_FREE/127               ?0        $40                  ?0                  	;0	<<101
132 86   ECHO/40                   ?0        83:'														</select>
													</div>
												</div>
												' ?0                  	;0
133 87   NOP/0                     ?0        ?0                   ?0                  	;1
134 87   GOTO/253                  ?0        ?161                 ?84                 	;0
135 89   ECHO/40                   ?0        85:'														</select>
													</div>
													<label class="col-md-2 col-form-label" for="bouquettv_' ?0                  	;0
136 90   FETCH_DIM_R/81            $49=      16?3                 86:'genre_id'       	;0
137 90   ECHO/40                   ?0        $49                  ?0                  	;0
138 91   ECHO/40                   ?0        87:'">Bouquets</label>
													<div class="col-md-4">
														<select name="bouquettv_' ?0                  	;0
139 92   FETCH_DIM_R/81            $50=      16?3                 88:'genre_id'       	;0
140 92   ECHO/40                   ?0        $50                  ?0                  	;0
141 93   ECHO/40                   ?0        89:'[]" id="bouquettv_' ?0                  	;0
142 94   NOP/0                     ?0        ?0                   ?0                  	;1
143 94   GOTO/253                  ?0        ?98                  ?90                 	;0
144 96   FETCH_DIM_R/81            $51=      16?3                 91:'genre_id'       	;0
145 96   ECHO/40                   ?0        $51                  ?0                  	;0
146 97   ECHO/40                   ?0        92:'" id="genretv_'  ?0                  	;0
147 98   FETCH_DIM_R/81            $52=      16?3                 93:'genre_id'       	;0
148 98   ECHO/40                   ?0        $52                  ?0                  	;0
149 99   ECHO/40                   ?0        94:'" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
150 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'intval'         	;1
151 100  FETCH_DIM_FUNC_ARG/93     $53=      16?3                 97:'category_id'    	;1
152 100  SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
153 100  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
154 100  IS_EQUAL/17               #55=      $54                  98:0                	;0
155 100  BOOL_NOT/13               #56=      #55                  ?0                  	;0
156 100  JMPZ/43                   ?0        #56                  ?159                	;0	>>159
157 101  NOP/0                     ?0        ?0                   ?0                  	;1
158 101  GOTO/253                  ?0        ?65                  ?99                 	;0
159 103  NOP/0                     ?0        ?0                   ?0                  	;1	<<156
160 103  GOTO/253                  ?0        ?64                  ?100                	;0
161 106  NOP/0                     ?0        ?0                   ?0                  	;1
162 106  GOTO/253                  ?0        ?163                 ?101                	;0
163 107  JMP/42                    ?0        ?52                  ?0                  	;0	>>52
164 107  FE_FREE/127               ?0        $26                  ?0                  	;0	<<51
165 111  ECHO/40                   ?0        102:'											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />
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
166 112  GOTO/253                  ?0        ?349                 ?103                	;0
167 114  ECHO/40                   ?0        104:'" required data-parsley-trigger="change">
													</div>
													<label class="col-md-4 col-form-label" for="percentage_match">Match Percentage <i title="TMDb match tolerance. Will not accept match if below this percentage threshold." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="percentage_match" name="percentage_match" value="' ?0                  	;0
168 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'htmlspecialchars'	;1
169 115  FETCH_DIM_FUNC_ARG/93     $57=      16?0                 107:'percentage_match'	;1
170 115  SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
171 115  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
172 115  ECHO/40                   ?0        $58                  ?0                  	;0
173 116  ECHO/40                   ?0        108:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="thread_count">Thread Count <i title="Number of threads to run simultaneously." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="thread_count" name="thread_count" value="' ?0                  	;0
174 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   109:'htmlspecialchars'	;1
175 117  FETCH_DIM_FUNC_ARG/93     $59=      16?0                 111:'thread_count'  	;1
176 117  SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
177 117  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
178 117  ECHO/40                   ?0        $60                  ?0                  	;0
179 118  ECHO/40                   ?0        112:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-4 col-form-label" for="max_genres">Max Categories & Bouquets <i title="Maximum number of TMDb genres to convert into categories and bouquets. Enter 0 for unlimited." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="max_genres" name="max_genres" value="' ?0                  	;0
180 119  GOTO/253                  ?0        ?1                   ?113                	;0
181 122  ECHO/40                   ?0        114:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="categories">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													Select a Category and / or Bouquet to apply to each Genre.
												</p>
												' ?0                  	;0
182 123  INIT_METHOD_CALL/112      ?0        16?2                 115:'query'         	;1
183 123  SEND_VAL_EX/116           ?80       117:'SELECT * FROM `watch_categories` WHERE `type` = 1 ORDER BY `genre` ASC;' ?1                  	;0
184 123  DO_FCALL/60               ?53       ?0                   ?0                  	;0
185 124  INIT_METHOD_CALL/112      ?0        16?2                 118:'num_rows'      	;0
186 124  DO_FCALL/60               $62=      ?0                   ?0                  	;0
187 124  IS_SMALLER/19             #63=      120:0                $62                 	;0
188 124  BOOL_NOT/13               #64=      #63                  ?0                  	;0
189 124  JMPZ/43                   ?0        #64                  ?191                	;0	>>191
190 125  GOTO/253                  ?0        ?329                 ?121                	;0
191 127  INIT_METHOD_CALL/112      ?0        16?2                 122:'get_rows'      	;0	<<189
192 127  DO_FCALL/60               $65=      ?0                   ?0                  	;0
193 127  FE_RESET_R/77             $66=      $65                  ?306                	;0
194 127  FE_FETCH_R/78             ?0        $66                  16?3                	;306	>>306	<<305
195 128  NOP/0                     ?0        ?0                   ?0                  	;1
196 128  GOTO/253                  ?0        ?233                 ?124                	;0
197 131  NOP/0                     ?0        ?0                   ?0                  	;1
198 131  GOTO/253                  ?0        ?305                 ?125                	;0
199 133  ECHO/40                   ?0        126:'selected '      ?0                  	;0
200 135  ECHO/40                   ?0        127:'value="0">Do Not Use</option>
															' ?0                  	;0
201 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   128:'F769E3f0C739d1a6'	;1
202 136  SEND_VAL_EX/116           ?80       130:'movie'          ?1                  	;0
203 136  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
204 136  FE_RESET_R/77             $68=      $67                  ?230                	;0
205 136  FE_FETCH_R/78             ?0        $68                  16?4                	;230	>>230	<<229
206 137  ECHO/40                   ?0        131:'																<option ' ?0                  	;0
207 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'intval'        	;1
208 138  FETCH_DIM_FUNC_ARG/93     $69=      16?3                 134:'category_id'   	;1
209 138  SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
210 138  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
211 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'intval'        	;1
212 138  FETCH_DIM_FUNC_ARG/93     $71=      16?4                 137:'id'            	;1
213 138  SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
214 138  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
215 138  IS_EQUAL/17               #73=      $70                  $72                 	;0
216 138  BOOL_NOT/13               #74=      #73                  ?0                  	;0
217 138  JMPZ/43                   ?0        #74                  ?221                	;0	>>221
218 139  NOP/0                     ?0        ?0                   ?0                  	;1
219 139  NOP/0                     ?0        ?0                   ?0                  	;1
220 139  GOTO/253                  ?0        ?222                 ?138                	;0
221 141  ECHO/40                   ?0        139:'selected '      ?0                  	;0	<<217
222 143  ECHO/40                   ?0        140:'value="'        ?0                  	;0
223 144  FETCH_DIM_R/81            $75=      16?4                 141:'id'            	;0
224 144  ECHO/40                   ?0        $75                  ?0                  	;0
225 145  ECHO/40                   ?0        142:'">'             ?0                  	;0
226 146  FETCH_DIM_R/81            $76=      16?4                 143:'category_name' 	;0
227 146  ECHO/40                   ?0        $76                  ?0                  	;0
228 147  ECHO/40                   ?0        144:'</option>
															' ?0                  	;0
229 148  JMP/42                    ?0        ?205                 ?0                  	;0	>>205
230 148  FE_FREE/127               ?0        $68                  ?0                  	;0	<<204
231 151  NOP/0                     ?0        ?0                   ?0                  	;1
232 151  GOTO/253                  ?0        ?242                 ?145                	;0
233 153  ECHO/40                   ?0        146:'												<div class="form-group row mb-4">
													<label class="col-md-2 col-form-label" for="genre_' ?0                  	;0
234 154  FETCH_DIM_R/81            $77=      16?3                 147:'genre_id'      	;0
235 154  ECHO/40                   ?0        $77                  ?0                  	;0
236 155  ECHO/40                   ?0        148:'">'             ?0                  	;0
237 156  FETCH_DIM_R/81            $78=      16?3                 149:'genre'         	;0
238 156  ECHO/40                   ?0        $78                  ?0                  	;0
239 157  ECHO/40                   ?0        150:'</label>
													<div class="col-md-4">
														<select name="genre_' ?0                  	;0
240 158  NOP/0                     ?0        ?0                   ?0                  	;1
241 158  GOTO/253                  ?0        ?288                 ?151                	;0
242 160  ECHO/40                   ?0        152:'														</select>
													</div>
													<label class="col-md-2 col-form-label" for="bouquet_' ?0                  	;0
243 161  FETCH_DIM_R/81            $79=      16?3                 153:'genre_id'      	;0
244 161  ECHO/40                   ?0        $79                  ?0                  	;0
245 162  ECHO/40                   ?0        154:'">Bouquets</label>
													<div class="col-md-4">
														<select name="bouquet_' ?0                  	;0
246 163  FETCH_DIM_R/81            $80=      16?3                 155:'genre_id'      	;0
247 163  ECHO/40                   ?0        $80                  ?0                  	;0
248 164  ECHO/40                   ?0        156:'[]" id="bouquet_' ?0                  	;0
249 165  NOP/0                     ?0        ?0                   ?0                  	;1
250 165  GOTO/253                  ?0        ?251                 ?157                	;0
251 167  FETCH_DIM_R/81            $81=      16?3                 158:'genre_id'      	;0
252 167  ECHO/40                   ?0        $81                  ?0                  	;0
253 168  ECHO/40                   ?0        159:'" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
254 169  FE_RESET_R/77             $82=      16?5                 ?284                	;0
255 169  FE_FETCH_R/78             ?0        $82                  16?6                	;284	>>284	<<283
256 170  ECHO/40                   ?0        160:'															<option ' ?0                  	;0
257 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'in_array'      	;2
258 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'intval'        	;1
259 171  FETCH_DIM_FUNC_ARG/93     $83=      16?6                 165:'id'            	;1
260 171  SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
261 171  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
262 171  SEND_VAR_NO_REF_EX/50     ?80       $84                  ?1                  	;0
263 171  INIT_FCALL_BY_NAME/59     ?0        ?0                   166:'json_decode'   	;2
264 171  FETCH_DIM_FUNC_ARG/93     $85=      16?3                 168:'bouquets'      	;1
265 171  SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
266 171  SEND_VAL_EX/116           ?96       169:true             ?2                  	;0
267 171  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
268 171  SEND_VAR_NO_REF_EX/50     ?96       $86                  ?2                  	;0
269 171  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
270 171  BOOL_NOT/13               #88=      $87                  ?0                  	;0
271 171  JMPZ/43                   ?0        #88                  ?275                	;0	>>275
272 172  NOP/0                     ?0        ?0                   ?0                  	;1
273 172  NOP/0                     ?0        ?0                   ?0                  	;1
274 172  GOTO/253                  ?0        ?276                 ?170                	;0
275 174  ECHO/40                   ?0        171:'selected '      ?0                  	;0	<<271
276 176  ECHO/40                   ?0        172:'value="'        ?0                  	;0
277 177  FETCH_DIM_R/81            $89=      16?6                 173:'id'            	;0
278 177  ECHO/40                   ?0        $89                  ?0                  	;0
279 178  ECHO/40                   ?0        174:'">'             ?0                  	;0
280 179  FETCH_DIM_R/81            $90=      16?6                 175:'bouquet_name'  	;0
281 179  ECHO/40                   ?0        $90                  ?0                  	;0
282 180  ECHO/40                   ?0        176:'</option>
															' ?0                  	;0
283 181  JMP/42                    ?0        ?255                 ?0                  	;0	>>255
284 181  FE_FREE/127               ?0        $82                  ?0                  	;0	<<254
285 184  ECHO/40                   ?0        177:'														</select>
													</div>
												</div>
												' ?0                  	;0
286 185  NOP/0                     ?0        ?0                   ?0                  	;1
287 185  GOTO/253                  ?0        ?197                 ?178                	;0
288 187  FETCH_DIM_R/81            $91=      16?3                 179:'genre_id'      	;0
289 187  ECHO/40                   ?0        $91                  ?0                  	;0
290 188  ECHO/40                   ?0        180:'" id="genre_'   ?0                  	;0
291 189  FETCH_DIM_R/81            $92=      16?3                 181:'genre_id'      	;0
292 189  ECHO/40                   ?0        $92                  ?0                  	;0
293 190  ECHO/40                   ?0        182:'" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
294 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   183:'intval'        	;1
295 191  FETCH_DIM_FUNC_ARG/93     $93=      16?3                 185:'category_id'   	;1
296 191  SEND_VAR_EX/66            ?80       $93                  ?1                  	;0
297 191  DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
298 191  IS_EQUAL/17               #95=      $94                  186:0               	;0
299 191  BOOL_NOT/13               #96=      #95                  ?0                  	;0
300 191  JMPZ/43                   ?0        #96                  ?303                	;0	>>303
301 192  NOP/0                     ?0        ?0                   ?0                  	;1
302 192  GOTO/253                  ?0        ?200                 ?187                	;0
303 194  NOP/0                     ?0        ?0                   ?0                  	;1	<<300
304 194  GOTO/253                  ?0        ?199                 ?188                	;0
305 195  JMP/42                    ?0        ?194                 ?0                  	;0	>>194
306 195  FE_FREE/127               ?0        $66                  ?0                  	;0	<<193
307 197  GOTO/253                  ?0        ?329                 ?189                	;0
308 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'F964b9222b35aDDd'	;0
309 199  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
310 199  ASSIGN/38                 ?90       16?5                 $97                 	;0
311 200  ASSIGN/38                 ?91       16?7                 192:'Watch Settings'	;0
312 201  INCLUDE_OR_EVAL/73        ?92       193:'header.php'     ?0                  	;2
313 202  ECHO/40                   ?0        194:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
314 203  FETCH_IS/89               $101=     195:'_SERVER'        ?0                  	;0
315 203  ISSET_ISEMPTY_DIM_OBJ/115 #102=     $101                 196:'HTTP_X_REQUESTED_WITH'	;16777216
316 203  BOOL_NOT/13               #103=     #102                 ?0                  	;0
317 203  JMPZ_EX/46                #103=     #103                 ?325                	;0	>>325
318 203  INIT_FCALL_BY_NAME/59     ?0        ?0                   197:'strtolower'    	;1
319 203  FETCH_FUNC_ARG/92         $104=     199:'_SERVER'        ?0                  	;1
320 203  FETCH_DIM_FUNC_ARG/93     $105=     $104                 200:'HTTP_X_REQUESTED_WITH'	;1
321 203  SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
322 203  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
323 203  IS_EQUAL/17               #107=     $106                 201:'xmlhttprequest'	;0
324 203  BOOL/52                   #103=     #107                 ?0                  	;0
325 203  BOOL_NOT/13               #108=     #103                 ?0                  	;0	<<317
326 203  JMPZ/43                   ?0        #108                 ?328                	;0	>>328
327 204  GOTO/253                  ?0        ?20                  ?202                	;0
328 206  GOTO/253                  ?0        ?19                  ?203                	;0	<<326
329 210  ECHO/40                   ?0        204:'											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="categories-tv">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													Select a Category and / or Bouquet to apply to each Genre.
												</p>
                                                ' ?0                  	;0
330 211  INIT_METHOD_CALL/112      ?0        16?2                 205:'query'         	;1
331 211  SEND_VAL_EX/116           ?80       207:'SELECT * FROM `watch_categories` WHERE `type` = 2 ORDER BY `genre` ASC;' ?1                  	;0
332 211  DO_FCALL/60               ?101      ?0                   ?0                  	;0
333 212  INIT_METHOD_CALL/112      ?0        16?2                 208:'num_rows'      	;0
334 212  DO_FCALL/60               $110=     ?0                   ?0                  	;0
335 212  IS_SMALLER/19             #111=     210:0                $110                	;0
336 212  BOOL_NOT/13               #112=     #111                 ?0                  	;0
337 212  JMPZ/43                   ?0        #112                 ?339                	;0	>>339
338 213  GOTO/253                  ?0        ?165                 ?211                	;0
339 215  GOTO/253                  ?0        ?49                  ?212                	;0	<<337
340 217  INCLUDE_OR_EVAL/73        ?105      213:'session.php'    ?0                  	;2	<<0
341 218  INCLUDE_OR_EVAL/73        ?106      214:'functions.php'  ?0                  	;2
342 219  INIT_FCALL_BY_NAME/59     ?0        ?0                   215:'e6d500e19634D513'	;0
343 219  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
344 219  JMPZ/43                   ?0        $115                 ?346                	;0	>>346
345 220  GOTO/253                  ?0        ?348                 ?217                	;0
346 222  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'E72f42a93714ba87'	;0	<<344
347 222  DO_FCALL_BY_NAME/131      ?108      ?0                   ?0                  	;0
348 224  GOTO/253                  ?0        ?308                 ?220                	;0
349 226  INCLUDE_OR_EVAL/73        ?109      221:'footer.php'     ?0                  	;2
350 227  NOP/0                     ?0        222:1                ?0                  	;4294967295
*/

?>