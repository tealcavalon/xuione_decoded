<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?460                 ?0                  	;0	>>460
1   5    ECHO/40                   ?0        1:'														</select>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="fallback_bouquets">Fallback Bouquets</label>
													<div class="col-md-8">
														<select name="fallback_bouquets[]" id="fallback_bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
2   6    FE_RESET_R/77             $13=      16?0                 ?31                 	;0
3   6    FE_FETCH_R/78             ?0        $13                  16?1                	;31	>>31	<<30
4   7    ECHO/40                   ?0        2:'															<option ' ?0                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'in_array'        	;2
6   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'intval'          	;1
7   8    FETCH_DIM_FUNC_ARG/93     $14=      16?1                 7:'id'              	;1
8   8    SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
9   8    DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
10  8    SEND_VAR_NO_REF_EX/50     ?80       $15                  ?1                  	;0
11  8    INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'json_decode'     	;2
12  8    FETCH_DIM_FUNC_ARG/93     $16=      16?2                 10:'fb_bouquets'    	;1
13  8    SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
14  8    SEND_VAL_EX/116           ?96       11:true              ?2                  	;0
15  8    DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
16  8    SEND_VAR_NO_REF_EX/50     ?96       $17                  ?2                  	;0
17  8    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
18  8    BOOL_NOT/13               #19=      $18                  ?0                  	;0
19  8    JMPZ/43                   ?0        #19                  ?22                 	;0	>>22
20  9    NOP/0                     ?0        ?0                   ?0                  	;1
21  9    GOTO/253                  ?0        ?23                  ?12                 	;0
22  11   ECHO/40                   ?0        13:'selected '       ?0                  	;0	<<19
23  13   ECHO/40                   ?0        14:'value="'         ?0                  	;0
24  14   FETCH_DIM_R/81            $20=      16?1                 15:'id'             	;0
25  14   ECHO/40                   ?0        $20                  ?0                  	;0
26  15   ECHO/40                   ?0        16:'">'              ?0                  	;0
27  16   FETCH_DIM_R/81            $21=      16?1                 17:'bouquet_name'   	;0
28  16   ECHO/40                   ?0        $21                  ?0                  	;0
29  17   ECHO/40                   ?0        18:'</option>
															' ?0                  	;0
30  18   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
31  18   FE_FREE/127               ?0        $13                  ?0                  	;0	<<2
32  21   ECHO/40                   ?0        19:'														</select>
													</div>
                                                </div>
                                                <div class="form-group row mb-4" id="override_category">
													<label class="col-md-4 col-form-label" for="override_category">Override Category</label>
													<div class="col-md-8">
														<select name="override_category" id="override_category" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
33  22   ISSET_ISEMPTY_CV/197      #22=      16?2                 ?0                  	;33554432
34  22   BOOL_NOT/13               #23=      #22                  ?0                  	;0
35  22   JMPZ/43                   ?0        #23                  ?37                 	;0	>>37
36  23   GOTO/253                  ?0        ?142                 ?20                 	;0
37  25   GOTO/253                  ?0        ?133                 ?21                 	;0	<<35
38  27   ISSET_ISEMPTY_CV/197      #24=      16?2                 ?0                  	;33554432
39  27   BOOL_NOT/13               #25=      #24                  ?0                  	;0
40  27   JMPZ/43                   ?0        #25                  ?42                 	;0	>>42
41  28   GOTO/253                  ?0        ?49                  ?22                 	;0
42  30   ECHO/40                   ?0        23:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<40
43  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'intval'         	;1
44  31   FETCH_DIM_FUNC_ARG/93     $26=      16?2                 26:'id'             	;1
45  31   SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
46  31   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
47  31   ECHO/40                   ?0        $27                  ?0                  	;0
48  32   ECHO/40                   ?0        27:'" />
							'    ?0                  	;0
49  34   GOTO/253                  ?0        ?217                 ?28                 	;0
50  36   ECHO/40                   ?0        29:'checked '        ?0                  	;0
51  39   ECHO/40                   ?0        30:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="scan_missing">Scan Missing ID\'s <i title="Check all Plex ID\'s in the XUI database against Plex database and scan missing items too. If this is off, XUI will only request items modified after the last scan date. Turning this on will increase time taken to scan as the entire library needs to be scanned instead of the recent items." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="scan_missing" id="scan_missing" type="checkbox" ' ?0                  	;0
52  40   ISSET_ISEMPTY_CV/197      #28=      16?2                 ?0                  	;33554432
53  40   BOOL_NOT/13               #29=      #28                  ?0                  	;0
54  40   JMPZ/43                   ?0        #29                  ?56                 	;0	>>56
55  41   GOTO/253                  ?0        ?62                  ?31                 	;0
56  43   GOTO/253                  ?0        ?57                  ?32                 	;0	<<54
57  45   FETCH_DIM_R/81            $30=      16?2                 33:'scan_missing'   	;0
58  45   BOOL_NOT/13               #31=      $30                  ?0                  	;0
59  45   JMPZ/43                   ?0        #31                  ?61                 	;0	>>61
60  46   GOTO/253                  ?0        ?62                  ?34                 	;0
61  48   ECHO/40                   ?0        35:'checked '        ?0                  	;0	<<59
62  51   ECHO/40                   ?0        36:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="auto_upgrade">Auto-Upgrade Quality <i title="Automatically upgrade quality if the system finds a new file with better quality that has the same Plex or TMDb ID." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="auto_upgrade" id="auto_upgrade" type="checkbox" ' ?0                  	;0
63  52   GOTO/253                  ?0        ?665                 ?37                 	;0
64  54   FE_RESET_R/77             $32=      38:array (
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
) ?93                 	;0
65  54   FE_FETCH_R/78             ?0        $32                  16?3                	;93	>>93	<<92
66  55   NOP/0                     ?0        ?0                   ?0                  	;1
67  55   GOTO/253                  ?0        ?71                  ?39                 	;0
68  57   ECHO/40                   ?0        40:'</option>
															' ?0                  	;0
69  59   NOP/0                     ?0        ?0                   ?0                  	;1
70  59   GOTO/253                  ?0        ?92                  ?41                 	;0
71  61   ECHO/40                   ?0        42:'															<option ' ?0                  	;0
72  62   ISSET_ISEMPTY_CV/197      #33=      16?2                 ?0                  	;33554432
73  62   BOOL_NOT/13               #34=      #33                  ?0                  	;0
74  62   JMPZ/43                   ?0        #34                  ?77                 	;0	>>77
75  63   NOP/0                     ?0        ?0                   ?0                  	;1
76  63   GOTO/253                  ?0        ?86                  ?43                 	;0
77  65   FETCH_DIM_R/81            $35=      16?2                 44:'target_container'	;0	<<74
78  65   IS_EQUAL/17               #36=      $35                  16?3                	;0
79  65   BOOL_NOT/13               #37=      #36                  ?0                  	;0
80  65   JMPZ/43                   ?0        #37                  ?83                 	;0	>>83
81  66   NOP/0                     ?0        ?0                   ?0                  	;1
82  66   GOTO/253                  ?0        ?84                  ?45                 	;0
83  68   ECHO/40                   ?0        46:'selected '       ?0                  	;0	<<80
84  70   NOP/0                     ?0        ?0                   ?0                  	;1
85  70   GOTO/253                  ?0        ?86                  ?47                 	;0
86  73   ECHO/40                   ?0        48:'value="'         ?0                  	;0
87  74   ECHO/40                   ?0        16?3                 ?0                  	;0
88  75   ECHO/40                   ?0        49:'">'              ?0                  	;0
89  76   ECHO/40                   ?0        16?3                 ?0                  	;0
90  77   NOP/0                     ?0        ?0                   ?0                  	;1
91  77   GOTO/253                  ?0        ?68                  ?50                 	;0
92  78   JMP/42                    ?0        ?65                  ?0                  	;0	>>65
93  78   FE_FREE/127               ?0        $32                  ?0                  	;0	<<64
94  81   ECHO/40                   ?0        51:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="override_bouquets">Override Bouquets</label>
													<div class="col-md-8">
														<select name="override_bouquets[]" id="override_bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
95  82   FE_RESET_R/77             $38=      16?0                 ?124                	;0
96  82   FE_FETCH_R/78             ?0        $38                  16?1                	;124	>>124	<<123
97  83   ECHO/40                   ?0        52:'															<option ' ?0                  	;0
98  84   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'in_array'       	;2
99  84   INIT_FCALL_BY_NAME/59     ?0        ?0                   55:'intval'         	;1
100 84   FETCH_DIM_FUNC_ARG/93     $39=      16?1                 57:'id'             	;1
101 84   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
102 84   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
103 84   SEND_VAR_NO_REF_EX/50     ?80       $40                  ?1                  	;0
104 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'json_decode'    	;2
105 84   FETCH_DIM_FUNC_ARG/93     $41=      16?2                 60:'bouquets'       	;1
106 84   SEND_VAR_EX/66            ?80       $41                  ?1                  	;0
107 84   SEND_VAL_EX/116           ?96       61:true              ?2                  	;0
108 84   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
109 84   SEND_VAR_NO_REF_EX/50     ?96       $42                  ?2                  	;0
110 84   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
111 84   BOOL_NOT/13               #44=      $43                  ?0                  	;0
112 84   JMPZ/43                   ?0        #44                  ?115                	;0	>>115
113 85   NOP/0                     ?0        ?0                   ?0                  	;1
114 85   GOTO/253                  ?0        ?116                 ?62                 	;0
115 87   ECHO/40                   ?0        63:'selected '       ?0                  	;0	<<112
116 89   ECHO/40                   ?0        64:'value="'         ?0                  	;0
117 90   FETCH_DIM_R/81            $45=      16?1                 65:'id'             	;0
118 90   ECHO/40                   ?0        $45                  ?0                  	;0
119 91   ECHO/40                   ?0        66:'">'              ?0                  	;0
120 92   FETCH_DIM_R/81            $46=      16?1                 67:'bouquet_name'   	;0
121 92   ECHO/40                   ?0        $46                  ?0                  	;0
122 93   ECHO/40                   ?0        68:'</option>
															' ?0                  	;0
123 94   JMP/42                    ?0        ?96                  ?0                  	;0	>>96
124 94   FE_FREE/127               ?0        $38                  ?0                  	;0	<<95
125 97   GOTO/253                  ?0        ?1                   ?69                 	;0
126 100  ECHO/40                   ?0        70:'														</select>
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
127 101  ISSET_ISEMPTY_CV/197      #47=      16?2                 ?0                  	;33554432
128 101  JMPZ/43                   ?0        #47                  ?130                	;0	>>130
129 102  GOTO/253                  ?0        ?503                 ?71                 	;0
130 104  ECHO/40                   ?0        72:'Add'             ?0                  	;0	<<128
131 105  GOTO/253                  ?0        ?504                 ?73                 	;0
132 106  GOTO/253                  ?0        ?503                 ?74                 	;0
133 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'intval'         	;1
134 108  FETCH_DIM_FUNC_ARG/93     $48=      16?2                 77:'category_id'    	;1
135 108  SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
136 108  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
137 108  IS_EQUAL/17               #50=      $49                  78:0                	;0
138 108  BOOL_NOT/13               #51=      #50                  ?0                  	;0
139 108  JMPZ/43                   ?0        #51                  ?141                	;0	>>141
140 109  GOTO/253                  ?0        ?142                 ?79                 	;0
141 111  ECHO/40                   ?0        80:'selected '       ?0                  	;0	<<139
142 114  ECHO/40                   ?0        81:'value="0">Do Not Use</option>
                                                            <optgroup label="Movies">
															' ?0                  	;0
143 115  GOTO/253                  ?0        ?329                 ?82                 	;0
144 117  ISSET_ISEMPTY_CV/197      #52=      16?2                 ?0                  	;33554432
145 117  BOOL_NOT/13               #53=      #52                  ?0                  	;0
146 117  JMPZ/43                   ?0        #53                  ?148                	;0	>>148
147 118  GOTO/253                  ?0        ?153                 ?83                 	;0
148 120  FETCH_DIM_R/81            $54=      16?2                 84:'read_native'    	;0	<<146
149 120  BOOL_NOT/13               #55=      $54                  ?0                  	;0
150 120  JMPZ/43                   ?0        #55                  ?152                	;0	>>152
151 121  GOTO/253                  ?0        ?153                 ?85                 	;0
152 123  ECHO/40                   ?0        86:'checked '        ?0                  	;0	<<150
153 126  GOTO/253                  ?0        ?443                 ?87                 	;0
154 128  GOTO/253                  ?0        ?156                 ?88                 	;0
155 130  ECHO/40                   ?0        89:'Edit'            ?0                  	;0
156 132  ECHO/40                   ?0        90:' Library</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
157 133  GOTO/253                  ?0        ?38                  ?91                 	;0
158 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'F769e3f0c739d1A6'	;1
159 135  SEND_VAL_EX/116           ?80       94:'series'          ?1                  	;0
160 135  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
161 135  FE_RESET_R/77             $57=      $56                  ?202                	;0
162 135  FE_FETCH_R/78             ?0        $57                  16?4                	;202	>>202	<<201
163 136  NOP/0                     ?0        ?0                   ?0                  	;1
164 136  GOTO/253                  ?0        ?179                 ?95                 	;0
165 139  ECHO/40                   ?0        96:'value="'         ?0                  	;0
166 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'intval'         	;1
167 140  FETCH_DIM_FUNC_ARG/93     $58=      16?4                 99:'id'             	;1
168 140  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
169 140  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
170 140  ECHO/40                   ?0        $59                  ?0                  	;0
171 141  ECHO/40                   ?0        100:'">'             ?0                  	;0
172 142  FETCH_DIM_R/81            $60=      16?4                 101:'category_name' 	;0
173 142  ECHO/40                   ?0        $60                  ?0                  	;0
174 143  NOP/0                     ?0        ?0                   ?0                  	;1
175 143  GOTO/253                  ?0        ?176                 ?102                	;0
176 145  ECHO/40                   ?0        103:'</option>
															' ?0                  	;0
177 147  NOP/0                     ?0        ?0                   ?0                  	;1
178 147  GOTO/253                  ?0        ?201                 ?104                	;0
179 149  ECHO/40                   ?0        105:'																<option ' ?0                  	;0
180 150  ISSET_ISEMPTY_CV/197      #61=      16?2                 ?0                  	;33554432
181 150  BOOL_NOT/13               #62=      #61                  ?0                  	;0
182 150  JMPZ/43                   ?0        #62                  ?185                	;0	>>185
183 151  NOP/0                     ?0        ?0                   ?0                  	;1
184 151  GOTO/253                  ?0        ?165                 ?106                	;0
185 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'intval'        	;1	<<182
186 153  FETCH_DIM_FUNC_ARG/93     $63=      16?2                 109:'fb_category_id'	;1
187 153  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
188 153  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
189 153  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'intval'        	;1
190 153  FETCH_DIM_FUNC_ARG/93     $65=      16?4                 112:'id'            	;1
191 153  SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
192 153  DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
193 153  IS_EQUAL/17               #67=      $64                  $66                 	;0
194 153  BOOL_NOT/13               #68=      #67                  ?0                  	;0
195 153  JMPZ/43                   ?0        #68                  ?198                	;0	>>198
196 154  NOP/0                     ?0        ?0                   ?0                  	;1
197 154  GOTO/253                  ?0        ?199                 ?113                	;0
198 156  ECHO/40                   ?0        114:'selected '      ?0                  	;0	<<195
199 158  NOP/0                     ?0        ?0                   ?0                  	;1
200 158  GOTO/253                  ?0        ?165                 ?115                	;0
201 159  JMP/42                    ?0        ?162                 ?0                  	;0	>>162
202 159  FE_FREE/127               ?0        $57                  ?0                  	;0	<<161
203 162  ECHO/40                   ?0        116:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Select a transcoding profile to autoamtically encode videos." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option ' ?0                  	;0
204 163  ISSET_ISEMPTY_CV/197      #69=      16?2                 ?0                  	;33554432
205 163  BOOL_NOT/13               #70=      #69                  ?0                  	;0
206 163  JMPZ/43                   ?0        #70                  ?208                	;0	>>208
207 164  GOTO/253                  ?0        ?537                 ?117                	;0
208 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'intval'        	;1	<<206
209 166  FETCH_DIM_FUNC_ARG/93     $71=      16?2                 120:'transcode_profile_id'	;1
210 166  SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
211 166  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
212 166  IS_EQUAL/17               #73=      $72                  121:0               	;0
213 166  BOOL_NOT/13               #74=      #73                  ?0                  	;0
214 166  JMPZ/43                   ?0        #74                  ?216                	;0	>>216
215 167  GOTO/253                  ?0        ?537                 ?122                	;0
216 169  GOTO/253                  ?0        ?536                 ?123                	;0	<<214
217 171  ECHO/40                   ?0        124:'                            <input type="hidden" name="libraries" id="libraries" value="' ?0                  	;0
218 172  ISSET_ISEMPTY_DIM_OBJ/115 #75=      16?2                 125:'plex_libraries'	;33554432
219 172  JMPZ/43                   ?0        #75                  ?226                	;0	>>226
220 172  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'htmlspecialchars'	;1
221 172  FETCH_DIM_FUNC_ARG/93     $76=      16?2                 128:'plex_libraries'	;1
222 172  SEND_VAR_EX/66            ?80       $76                  ?1                  	;0
223 172  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
224 172  QM_ASSIGN/22              #78=      $77                  ?0                  	;0
225 172  JMP/42                    ?0        ?227                 ?0                  	;0	>>227
226 172  QM_ASSIGN/22              #78=      129:''               ?0                  	;0	<<219
227 172  ECHO/40                   ?0        #78                  ?0                  	;0	<<225
228 173  ECHO/40                   ?0        130:'" />
							<div id="basicwizard">
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
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="folder-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="server_id">Server Name</label>
													<div class="col-md-8">
                                                        <select name="server_id[]" id="server_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
229 174  ASSIGN/38                 ?66       16?5                 131:array (
)       	;0
230 175  ISSET_ISEMPTY_CV/197      #80=      16?2                 ?0                  	;33554432
231 175  BOOL_NOT/13               #81=      #80                  ?0                  	;0
232 175  JMPZ/43                   ?0        #81                  ?234                	;0	>>234
233 176  GOTO/253                  ?0        ?709                 ?132                	;0
234 178  GOTO/253                  ?0        ?421                 ?133                	;0	<<232
235 180  ECHO/40                   ?0        134:'checked '       ?0                  	;0
236 181  GOTO/253                  ?0        ?323                 ?135                	;0
237 183  FETCH_DIM_R/81            $82=      16?2                 136:'store_categories'	;0
238 183  BOOL_NOT/13               #83=      $82                  ?0                  	;0
239 183  JMPZ/43                   ?0        #83                  ?241                	;0	>>241
240 184  GOTO/253                  ?0        ?323                 ?137                	;0
241 186  ECHO/40                   ?0        138:'checked '       ?0                  	;0	<<239
242 187  GOTO/253                  ?0        ?323                 ?139                	;0
243 189  ECHO/40                   ?0        140:'checked '       ?0                  	;0
244 192  ECHO/40                   ?0        141:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="store_categories">Store Categories <i title="Save unrecognised categories to Plex Settings, this will allow you to allocate a category after the first run and it will then be added on the second run." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="store_categories" id="store_categories" type="checkbox" ' ?0                  	;0
245 193  ISSET_ISEMPTY_CV/197      #84=      16?2                 ?0                  	;33554432
246 193  JMPZ/43                   ?0        #84                  ?248                	;0	>>248
247 194  GOTO/253                  ?0        ?237                 ?142                	;0
248 196  GOTO/253                  ?0        ?235                 ?143                	;0	<<246
249 198  ECHO/40                   ?0        144:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4" id="fallback_category">
													<label class="col-md-4 col-form-label" for="fallback_category">Fallback Category</label>
													<div class="col-md-8">
														<select name="fallback_category" id="fallback_category" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
250 199  ISSET_ISEMPTY_CV/197      #85=      16?2                 ?0                  	;33554432
251 199  BOOL_NOT/13               #86=      #85                  ?0                  	;0
252 199  JMPZ/43                   ?0        #86                  ?254                	;0	>>254
253 200  GOTO/253                  ?0        ?264                 ?145                	;0
254 202  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'intval'        	;1	<<252
255 202  FETCH_DIM_FUNC_ARG/93     $87=      16?2                 148:'fb_category_id'	;1
256 202  SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
257 202  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
258 202  IS_EQUAL/17               #89=      $88                  149:0               	;0
259 202  BOOL_NOT/13               #90=      #89                  ?0                  	;0
260 202  JMPZ/43                   ?0        #90                  ?262                	;0	>>262
261 203  GOTO/253                  ?0        ?263                 ?150                	;0
262 205  ECHO/40                   ?0        151:'selected '      ?0                  	;0	<<260
263 207  GOTO/253                  ?0        ?264                 ?152                	;0
264 210  ECHO/40                   ?0        153:'value="0">Do Not Use</option>
                                                            <optgroup label="Movies">
															' ?0                  	;0
265 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   154:'F769e3f0C739D1A6'	;1
266 211  SEND_VAL_EX/116           ?80       156:'movie'          ?1                  	;0
267 211  DO_FCALL_BY_NAME/131      $91=      ?0                   ?0                  	;0
268 211  FE_RESET_R/77             $92=      $91                  ?309                	;0
269 211  FE_FETCH_R/78             ?0        $92                  16?4                	;309	>>309	<<308
270 212  NOP/0                     ?0        ?0                   ?0                  	;1
271 212  GOTO/253                  ?0        ?272                 ?157                	;0
272 214  ECHO/40                   ?0        158:'																<option ' ?0                  	;0
273 215  ISSET_ISEMPTY_CV/197      #93=      16?2                 ?0                  	;33554432
274 215  BOOL_NOT/13               #94=      #93                  ?0                  	;0
275 215  JMPZ/43                   ?0        #94                  ?278                	;0	>>278
276 216  NOP/0                     ?0        ?0                   ?0                  	;1
277 216  GOTO/253                  ?0        ?294                 ?159                	;0
278 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'intval'        	;1	<<275
279 218  FETCH_DIM_FUNC_ARG/93     $95=      16?2                 162:'fb_category_id'	;1
280 218  SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
281 218  DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
282 218  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'intval'        	;1
283 218  FETCH_DIM_FUNC_ARG/93     $97=      16?4                 165:'id'            	;1
284 218  SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
285 218  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
286 218  IS_EQUAL/17               #99=      $96                  $98                 	;0
287 218  BOOL_NOT/13               #100=     #99                  ?0                  	;0
288 218  JMPZ/43                   ?0        #100                 ?291                	;0	>>291
289 219  NOP/0                     ?0        ?0                   ?0                  	;1
290 219  GOTO/253                  ?0        ?292                 ?166                	;0
291 221  ECHO/40                   ?0        167:'selected '      ?0                  	;0	<<288
292 223  NOP/0                     ?0        ?0                   ?0                  	;1
293 223  GOTO/253                  ?0        ?294                 ?168                	;0
294 226  ECHO/40                   ?0        169:'value="'        ?0                  	;0
295 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'intval'        	;1
296 227  FETCH_DIM_FUNC_ARG/93     $101=     16?4                 172:'id'            	;1
297 227  SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
298 227  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
299 227  ECHO/40                   ?0        $102                 ?0                  	;0
300 228  ECHO/40                   ?0        173:'">'             ?0                  	;0
301 229  FETCH_DIM_R/81            $103=     16?4                 174:'category_name' 	;0
302 229  ECHO/40                   ?0        $103                 ?0                  	;0
303 230  NOP/0                     ?0        ?0                   ?0                  	;1
304 230  GOTO/253                  ?0        ?305                 ?175                	;0
305 232  ECHO/40                   ?0        176:'</option>
															' ?0                  	;0
306 234  NOP/0                     ?0        ?0                   ?0                  	;1
307 234  GOTO/253                  ?0        ?308                 ?177                	;0
308 235  JMP/42                    ?0        ?269                 ?0                  	;0	>>269
309 235  FE_FREE/127               ?0        $92                  ?0                  	;0	<<268
310 238  ECHO/40                   ?0        178:'                                                            <optgroup label="Series">
															' ?0                  	;0
311 239  GOTO/253                  ?0        ?158                 ?179                	;0
312 242  FETCH_DIM_R/81            $104=     16?2                 180:'active'        	;0
313 242  BOOL_NOT/13               #105=     $104                 ?0                  	;0
314 242  JMPZ/43                   ?0        #105                 ?316                	;0	>>316
315 243  GOTO/253                  ?0        ?317                 ?181                	;0
316 245  ECHO/40                   ?0        182:'checked '       ?0                  	;0	<<314
317 248  GOTO/253                  ?0        ?469                 ?183                	;0
318 252  ECHO/40                   ?0        184:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="target_container">' ?0                  	;0
319 253  FETCH_DIM_R/81            $106=     16?6                 185:'target_container'	;0
320 253  ECHO/40                   ?0        $106                 ?0                  	;0
321 254  ECHO/40                   ?0        186:' <i title="Which container to use when transcoding files." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<select name="target_container" id="target_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
322 255  GOTO/253                  ?0        ?64                  ?187                	;0
323 259  ECHO/40                   ?0        188:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="check_tmdb">Check Against TMDb <i title="If the item has a TMDb ID, check it against the database to ensure duplicates aren\'t created due to previous content in the XUI system." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="check_tmdb" id="check_tmdb" type="checkbox" ' ?0                  	;0
324 260  ISSET_ISEMPTY_CV/197      #107=     16?2                 ?0                  	;33554432
325 260  JMPZ/43                   ?0        #107                 ?327                	;0	>>327
326 261  GOTO/253                  ?0        ?581                 ?189                	;0
327 263  ECHO/40                   ?0        190:'checked '       ?0                  	;0	<<325
328 264  GOTO/253                  ?0        ?580                 ?191                	;0
329 266  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'f769E3f0c739D1A6'	;1
330 266  SEND_VAL_EX/116           ?80       194:'movie'          ?1                  	;0
331 266  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
332 266  FE_RESET_R/77             $109=     $108                 ?373                	;0
333 266  FE_FETCH_R/78             ?0        $109                 16?4                	;373	>>373	<<372
334 267  NOP/0                     ?0        ?0                   ?0                  	;1
335 267  GOTO/253                  ?0        ?336                 ?195                	;0
336 269  ECHO/40                   ?0        196:'																<option ' ?0                  	;0
337 270  ISSET_ISEMPTY_CV/197      #110=     16?2                 ?0                  	;33554432
338 270  BOOL_NOT/13               #111=     #110                 ?0                  	;0
339 270  JMPZ/43                   ?0        #111                 ?342                	;0	>>342
340 271  NOP/0                     ?0        ?0                   ?0                  	;1
341 271  GOTO/253                  ?0        ?361                 ?197                	;0
342 273  INIT_FCALL_BY_NAME/59     ?0        ?0                   198:'intval'        	;1	<<339
343 273  FETCH_DIM_FUNC_ARG/93     $112=     16?2                 200:'category_id'   	;1
344 273  SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
345 273  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
346 273  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'intval'        	;1
347 273  FETCH_DIM_FUNC_ARG/93     $114=     16?4                 203:'id'            	;1
348 273  SEND_VAR_EX/66            ?80       $114                 ?1                  	;0
349 273  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
350 273  IS_EQUAL/17               #116=     $113                 $115                	;0
351 273  BOOL_NOT/13               #117=     #116                 ?0                  	;0
352 273  JMPZ/43                   ?0        #117                 ?355                	;0	>>355
353 274  NOP/0                     ?0        ?0                   ?0                  	;1
354 274  GOTO/253                  ?0        ?356                 ?204                	;0
355 276  ECHO/40                   ?0        205:'selected '      ?0                  	;0	<<352
356 278  NOP/0                     ?0        ?0                   ?0                  	;1
357 278  GOTO/253                  ?0        ?361                 ?206                	;0
358 280  ECHO/40                   ?0        207:'</option>
															' ?0                  	;0
359 282  NOP/0                     ?0        ?0                   ?0                  	;1
360 282  GOTO/253                  ?0        ?372                 ?208                	;0
361 285  ECHO/40                   ?0        209:'value="'        ?0                  	;0
362 286  INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'intval'        	;1
363 286  FETCH_DIM_FUNC_ARG/93     $118=     16?4                 212:'id'            	;1
364 286  SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
365 286  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
366 286  ECHO/40                   ?0        $119                 ?0                  	;0
367 287  ECHO/40                   ?0        213:'">'             ?0                  	;0
368 288  FETCH_DIM_R/81            $120=     16?4                 214:'category_name' 	;0
369 288  ECHO/40                   ?0        $120                 ?0                  	;0
370 289  NOP/0                     ?0        ?0                   ?0                  	;1
371 289  GOTO/253                  ?0        ?358                 ?215                	;0
372 290  JMP/42                    ?0        ?333                 ?0                  	;0	>>333
373 290  FE_FREE/127               ?0        $109                 ?0                  	;0	<<332
374 293  ECHO/40                   ?0        216:'                                                            <optgroup label="Series">
															' ?0                  	;0
375 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   217:'f769e3f0c739d1a6'	;1
376 294  SEND_VAL_EX/116           ?80       219:'series'         ?1                  	;0
377 294  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
378 294  FE_RESET_R/77             $122=     $121                 ?419                	;0
379 294  FE_FETCH_R/78             ?0        $122                 16?4                	;419	>>419	<<418
380 295  NOP/0                     ?0        ?0                   ?0                  	;1
381 295  GOTO/253                  ?0        ?385                 ?220                	;0
382 297  ECHO/40                   ?0        221:'</option>
															' ?0                  	;0
383 299  NOP/0                     ?0        ?0                   ?0                  	;1
384 299  GOTO/253                  ?0        ?418                 ?222                	;0
385 301  ECHO/40                   ?0        223:'																<option ' ?0                  	;0
386 302  ISSET_ISEMPTY_CV/197      #123=     16?2                 ?0                  	;33554432
387 302  BOOL_NOT/13               #124=     #123                 ?0                  	;0
388 302  JMPZ/43                   ?0        #124                 ?391                	;0	>>391
389 303  NOP/0                     ?0        ?0                   ?0                  	;1
390 303  GOTO/253                  ?0        ?407                 ?224                	;0
391 305  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'intval'        	;1	<<388
392 305  FETCH_DIM_FUNC_ARG/93     $125=     16?2                 227:'category_id'   	;1
393 305  SEND_VAR_EX/66            ?80       $125                 ?1                  	;0
394 305  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
395 305  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'intval'        	;1
396 305  FETCH_DIM_FUNC_ARG/93     $127=     16?4                 230:'id'            	;1
397 305  SEND_VAR_EX/66            ?80       $127                 ?1                  	;0
398 305  DO_FCALL_BY_NAME/131      $128=     ?0                   ?0                  	;0
399 305  IS_EQUAL/17               #129=     $126                 $128                	;0
400 305  BOOL_NOT/13               #130=     #129                 ?0                  	;0
401 305  JMPZ/43                   ?0        #130                 ?404                	;0	>>404
402 306  NOP/0                     ?0        ?0                   ?0                  	;1
403 306  GOTO/253                  ?0        ?405                 ?231                	;0
404 308  ECHO/40                   ?0        232:'selected '      ?0                  	;0	<<401
405 310  NOP/0                     ?0        ?0                   ?0                  	;1
406 310  GOTO/253                  ?0        ?407                 ?233                	;0
407 313  ECHO/40                   ?0        234:'value="'        ?0                  	;0
408 314  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'intval'        	;1
409 314  FETCH_DIM_FUNC_ARG/93     $131=     16?4                 237:'id'            	;1
410 314  SEND_VAR_EX/66            ?80       $131                 ?1                  	;0
411 314  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
412 314  ECHO/40                   ?0        $132                 ?0                  	;0
413 315  ECHO/40                   ?0        238:'">'             ?0                  	;0
414 316  FETCH_DIM_R/81            $133=     16?4                 239:'category_name' 	;0
415 316  ECHO/40                   ?0        $133                 ?0                  	;0
416 317  NOP/0                     ?0        ?0                   ?0                  	;1
417 317  GOTO/253                  ?0        ?382                 ?240                	;0
418 318  JMP/42                    ?0        ?379                 ?0                  	;0	>>379
419 318  FE_FREE/127               ?0        $122                 ?0                  	;0	<<378
420 321  GOTO/253                  ?0        ?249                 ?241                	;0
421 323  FETCH_DIM_R/81            $134=     16?2                 242:'server_id'     	;0
422 323  BOOL_NOT/13               #135=     $134                 ?0                  	;0
423 323  JMPZ/43                   ?0        #135                 ?425                	;0	>>425
424 324  GOTO/253                  ?0        ?438                 ?243                	;0
425 326  FETCH_DIM_R/81            $137=     16?2                 244:'server_id'     	;0	<<423
426 326  ASSIGN_DIM/147            ?123      16?5                 ?4397406            	;0
427 326  OP_DATA/137               ?0        $137                 ?0                  	;0
428 327  FETCH_DIM_R/81            $138=     16?2                 245:'server_id'     	;0
429 327  CONCAT/8                  #139=     246:'<option value="' $138                	;0
430 327  CONCAT/8                  #140=     #139                 247:'" selected>'   	;0
431 327  FETCH_DIM_R/81            $142=     16?2                 251:'server_id'     	;0
432 327  FETCH_STATIC_PROP_R/173   $141=     248:'rServers'       249:'XUI'           	;0
433 327  FETCH_DIM_R/81            $143=     $141                 $142                	;0
434 327  FETCH_DIM_R/81            $144=     $143                 252:'server_name'   	;0
435 327  CONCAT/8                  #145=     #140                 $144                	;0
436 327  CONCAT/8                  #146=     #145                 253:'</option>'     	;0
437 327  ECHO/40                   ?0        #146                 ?0                  	;0
438 329  FETCH_DIM_R/81            $147=     16?2                 254:'server_add'    	;0
439 329  BOOL_NOT/13               #148=     $147                 ?0                  	;0
440 329  JMPZ/43                   ?0        #148                 ?442                	;0	>>442
441 330  GOTO/253                  ?0        ?709                 ?255                	;0
442 332  GOTO/253                  ?0        ?689                 ?256                	;0	<<440
443 334  ECHO/40                   ?0        257:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="movie_symlink">Create Symlink <i title="Generate a symlink to the original file instead of encoding. File needs to exist on all selected servers." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="movie_symlink" id="movie_symlink" type="checkbox" ' ?0                  	;0
444 335  ISSET_ISEMPTY_CV/197      #149=     16?2                 ?0                  	;33554432
445 335  JMPZ/43                   ?0        #149                 ?447                	;0	>>447
446 336  GOTO/253                  ?0        ?449                 ?258                	;0
447 338  ECHO/40                   ?0        259:'checked '       ?0                  	;0	<<445
448 339  GOTO/253                  ?0        ?501                 ?260                	;0
449 341  GOTO/253                  ?0        ?496                 ?261                	;0
450 343  ISSET_ISEMPTY_CV/197      #150=     16?2                 ?0                  	;33554432
451 343  JMPZ/43                   ?0        #150                 ?453                	;0	>>453
452 344  GOTO/253                  ?0        ?455                 ?262                	;0
453 346  ECHO/40                   ?0        263:'checked '       ?0                  	;0	<<451
454 347  GOTO/253                  ?0        ?51                  ?264                	;0
455 349  FETCH_DIM_R/81            $151=     16?2                 265:'auto_encode'   	;0
456 349  BOOL_NOT/13               #152=     $151                 ?0                  	;0
457 349  JMPZ/43                   ?0        #152                 ?459                	;0	>>459
458 350  GOTO/253                  ?0        ?51                  ?266                	;0
459 352  GOTO/253                  ?0        ?50                  ?267                	;0	<<457
460 354  INCLUDE_OR_EVAL/73        ?140      268:'session.php'    ?0                  	;2	<<0
461 355  INCLUDE_OR_EVAL/73        ?141      269:'functions.php'  ?0                  	;2
462 356  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'e6D500E19634d513'	;0
463 356  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
464 356  JMPZ/43                   ?0        $155                 ?466                	;0	>>466
465 357  GOTO/253                  ?0        ?468                 ?272                	;0
466 359  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'e72F42a93714bA87'	;0	<<464
467 359  DO_FCALL_BY_NAME/131      ?143      ?0                   ?0                  	;0
468 361  GOTO/253                  ?0        ?515                 ?275                	;0
469 363  ECHO/40                   ?0        276:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original Plex URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="direct_proxy" id="direct_proxy" type="checkbox" ' ?0                  	;0
470 364  ISSET_ISEMPTY_CV/197      #157=     16?2                 ?0                  	;33554432
471 364  JMPZ/43                   ?0        #157                 ?473                	;0	>>473
472 365  GOTO/253                  ?0        ?475                 ?277                	;0
473 367  ECHO/40                   ?0        278:'checked '       ?0                  	;0	<<471
474 368  GOTO/253                  ?0        ?687                 ?279                	;0
475 370  GOTO/253                  ?0        ?682                 ?280                	;0
476 372  ISSET_ISEMPTY_CV/197      #158=     16?2                 ?0                  	;33554432
477 372  BOOL_NOT/13               #159=     #158                 ?0                  	;0
478 372  JMPZ/43                   ?0        #159                 ?480                	;0	>>480
479 373  GOTO/253                  ?0        ?482                 ?281                	;0
480 375  FETCH_DIM_R/81            $160=     16?2                 282:'plex_username' 	;0	<<478
481 375  ECHO/40                   ?0        $160                 ?0                  	;0
482 377  ECHO/40                   ?0        283:'" placeholder="Username" required data-parsley-trigger="change">
													</div>
                                                    <div class="col-md-4">
														<input type="password" id="password" name="password" class="form-control" value="' ?0                  	;0
483 378  ISSET_ISEMPTY_CV/197      #161=     16?2                 ?0                  	;33554432
484 378  BOOL_NOT/13               #162=     #161                 ?0                  	;0
485 378  JMPZ/43                   ?0        #162                 ?487                	;0	>>487
486 379  GOTO/253                  ?0        ?626                 ?284                	;0
487 381  GOTO/253                  ?0        ?624                 ?285                	;0	<<485
488 384  ECHO/40                   ?0        286:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="plex_ip">Plex Server</label>
													<div class="col-md-6">
														<input type="text" id="plex_ip" name="plex_ip" class="form-control" value="' ?0                  	;0
489 385  ISSET_ISEMPTY_CV/197      #163=     16?2                 ?0                  	;33554432
490 385  BOOL_NOT/13               #164=     #163                 ?0                  	;0
491 385  JMPZ/43                   ?0        #164                 ?493                	;0	>>493
492 386  GOTO/253                  ?0        ?495                 ?287                	;0
493 388  FETCH_DIM_R/81            $165=     16?2                 288:'plex_ip'       	;0	<<491
494 388  ECHO/40                   ?0        $165                 ?0                  	;0
495 390  GOTO/253                  ?0        ?506                 ?289                	;0
496 392  FETCH_DIM_R/81            $166=     16?2                 290:'movie_symlink' 	;0
497 392  BOOL_NOT/13               #167=     $166                 ?0                  	;0
498 392  JMPZ/43                   ?0        #167                 ?500                	;0	>>500
499 393  GOTO/253                  ?0        ?501                 ?291                	;0
500 395  ECHO/40                   ?0        292:'checked '       ?0                  	;0	<<498
501 398  ECHO/40                   ?0        293:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="auto_encode">Auto-Encode <i title="Start encoding as soon as the movie is added." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="auto_encode" id="auto_encode" type="checkbox" ' ?0                  	;0
502 399  GOTO/253                  ?0        ?450                 ?294                	;0
503 402  ECHO/40                   ?0        295:'Edit'           ?0                  	;0
504 404  ECHO/40                   ?0        296:'" />
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
505 405  GOTO/253                  ?0        ?731                 ?297                	;0
506 407  ECHO/40                   ?0        298:'" placeholder="Server IP" required data-parsley-trigger="change">
													</div>
                                                    <div class="col-md-2">
														<input type="text" id="plex_port" name="plex_port" class="form-control text-center" value="' ?0                  	;0
507 408  ISSET_ISEMPTY_CV/197      #168=     16?2                 ?0                  	;33554432
508 408  BOOL_NOT/13               #169=     #168                 ?0                  	;0
509 408  JMPZ/43                   ?0        #169                 ?511                	;0	>>511
510 409  GOTO/253                  ?0        ?513                 ?299                	;0
511 411  FETCH_DIM_R/81            $170=     16?2                 300:'plex_port'     	;0	<<509
512 411  ECHO/40                   ?0        $170                 ?0                  	;0
513 413  ECHO/40                   ?0        301:'" placeholder="Port" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Credentials</label>
													<div class="col-md-4">
														<input type="text" id="username" name="username" class="form-control" value="' ?0                  	;0
514 414  GOTO/253                  ?0        ?476                 ?302                	;0
515 416  FETCH_STATIC_PROP_IS/176  $171=     303:'rRequest'       304:'XUI'           	;0
516 416  ISSET_ISEMPTY_DIM_OBJ/115 #172=     $171                 306:'id'            	;33554432
517 416  JMPZ_EX/46                #172=     #172                 ?526                	;0	>>526
518 416  INIT_FCALL_BY_NAME/59     ?0        ?0                   307:'D8eC9843fC5457DF'	;1
519 416  FETCH_STATIC_PROP_FUNC_ARG/177 $173=     309:'rRequest'       310:'XUI'           	;1
520 416  FETCH_DIM_FUNC_ARG/93     $174=     $173                 312:'id'            	;1
521 416  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
522 416  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
523 416  ASSIGN/38                 $176=     16?2                 $175                	;0
524 416  BOOL_NOT/13               #177=     $176                 ?0                  	;0
525 416  BOOL/52                   #172=     #177                 ?0                  	;0
526 416  BOOL_NOT/13               #178=     #172                 ?0                  	;0	<<517
527 416  JMPZ/43                   ?0        #178                 ?529                	;0	>>529
528 417  GOTO/253                  ?0        ?531                 ?313                	;0
529 419  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'E72f42A93714BA87'	;0	<<527
530 419  DO_FCALL_BY_NAME/131      ?166      ?0                   ?0                  	;0
531 421  INIT_FCALL_BY_NAME/59     ?0        ?0                   316:'F964b9222b35aDDd'	;0
532 421  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
533 421  ASSIGN/38                 ?168      16?0                 $180                	;0
534 422  ASSIGN/38                 ?169      16?7                 318:'Add Library'   	;0
535 423  GOTO/253                  ?0        ?598                 ?319                	;0
536 425  ECHO/40                   ?0        320:'selected '      ?0                  	;0
537 428  ECHO/40                   ?0        321:'value="0">Transcoding Disabled</option>
															' ?0                  	;0
538 429  INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'f93E9343C3D7FD99'	;0
539 429  DO_FCALL_BY_NAME/131      $183=     ?0                   ?0                  	;0
540 429  FE_RESET_R/77             $184=     $183                 ?578                	;0
541 429  FE_FETCH_R/78             ?0        $184                 16?8                	;578	>>578	<<577
542 430  NOP/0                     ?0        ?0                   ?0                  	;1
543 430  GOTO/253                  ?0        ?544                 ?324                	;0
544 432  ECHO/40                   ?0        325:'															<option ' ?0                  	;0
545 433  ISSET_ISEMPTY_CV/197      #185=     16?2                 ?0                  	;33554432
546 433  BOOL_NOT/13               #186=     #185                 ?0                  	;0
547 433  JMPZ/43                   ?0        #186                 ?550                	;0	>>550
548 434  NOP/0                     ?0        ?0                   ?0                  	;1
549 434  GOTO/253                  ?0        ?569                 ?326                	;0
550 436  INIT_FCALL_BY_NAME/59     ?0        ?0                   327:'intval'        	;1	<<547
551 436  FETCH_DIM_FUNC_ARG/93     $187=     16?2                 329:'transcode_profile_id'	;1
552 436  SEND_VAR_EX/66            ?80       $187                 ?1                  	;0
553 436  DO_FCALL_BY_NAME/131      $188=     ?0                   ?0                  	;0
554 436  INIT_FCALL_BY_NAME/59     ?0        ?0                   330:'intval'        	;1
555 436  FETCH_DIM_FUNC_ARG/93     $189=     16?8                 332:'profile_id'    	;1
556 436  SEND_VAR_EX/66            ?80       $189                 ?1                  	;0
557 436  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
558 436  IS_EQUAL/17               #191=     $188                 $190                	;0
559 436  BOOL_NOT/13               #192=     #191                 ?0                  	;0
560 436  JMPZ/43                   ?0        #192                 ?563                	;0	>>563
561 437  NOP/0                     ?0        ?0                   ?0                  	;1
562 437  GOTO/253                  ?0        ?564                 ?333                	;0
563 439  ECHO/40                   ?0        334:'selected '      ?0                  	;0	<<560
564 441  NOP/0                     ?0        ?0                   ?0                  	;1
565 441  GOTO/253                  ?0        ?569                 ?335                	;0
566 443  ECHO/40                   ?0        336:'</option>
															' ?0                  	;0
567 445  NOP/0                     ?0        ?0                   ?0                  	;1
568 445  GOTO/253                  ?0        ?577                 ?337                	;0
569 448  ECHO/40                   ?0        338:'value="'        ?0                  	;0
570 449  FETCH_DIM_R/81            $193=     16?8                 339:'profile_id'    	;0
571 449  ECHO/40                   ?0        $193                 ?0                  	;0
572 450  ECHO/40                   ?0        340:'">'             ?0                  	;0
573 451  FETCH_DIM_R/81            $194=     16?8                 341:'profile_name'  	;0
574 451  ECHO/40                   ?0        $194                 ?0                  	;0
575 452  NOP/0                     ?0        ?0                   ?0                  	;1
576 452  GOTO/253                  ?0        ?566                 ?342                	;0
577 453  JMP/42                    ?0        ?541                 ?0                  	;0	>>541
578 453  FE_FREE/127               ?0        $184                 ?0                  	;0	<<540
579 455  GOTO/253                  ?0        ?126                 ?343                	;0
580 457  GOTO/253                  ?0        ?587                 ?344                	;0
581 459  FETCH_DIM_R/81            $195=     16?2                 345:'check_tmdb'    	;0
582 459  BOOL_NOT/13               #196=     $195                 ?0                  	;0
583 459  JMPZ/43                   ?0        #196                 ?585                	;0	>>585
584 460  GOTO/253                  ?0        ?586                 ?346                	;0
585 462  ECHO/40                   ?0        347:'checked '       ?0                  	;0	<<583
586 464  GOTO/253                  ?0        ?587                 ?348                	;0
587 467  ECHO/40                   ?0        349:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">Remove Existing Subtitles <i title="Remove existing subtitles from file before encoding. You can\'t remove hardcoded subtitles using this method." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ' ?0                  	;0
588 468  ISSET_ISEMPTY_CV/197      #197=     16?2                 ?0                  	;33554432
589 468  BOOL_NOT/13               #198=     #197                 ?0                  	;0
590 468  JMPZ/43                   ?0        #198                 ?592                	;0	>>592
591 469  GOTO/253                  ?0        ?318                 ?350                	;0
592 471  FETCH_DIM_R/81            $199=     16?2                 351:'remove_subtitles'	;0	<<590
593 471  BOOL_NOT/13               #200=     $199                 ?0                  	;0
594 471  JMPZ/43                   ?0        #200                 ?596                	;0	>>596
595 472  GOTO/253                  ?0        ?318                 ?352                	;0
596 474  ECHO/40                   ?0        353:'checked '       ?0                  	;0	<<594
597 475  GOTO/253                  ?0        ?318                 ?354                	;0
598 477  INCLUDE_OR_EVAL/73        ?188      355:'header.php'     ?0                  	;2
599 478  ECHO/40                   ?0        356:'<div class="wrapper boxed-layout"' ?0                  	;0
600 479  FETCH_IS/89               $202=     357:'_SERVER'        ?0                  	;0
601 479  ISSET_ISEMPTY_DIM_OBJ/115 #203=     $202                 358:'HTTP_X_REQUESTED_WITH'	;16777216
602 479  BOOL_NOT/13               #204=     #203                 ?0                  	;0
603 479  JMPZ_EX/46                #204=     #204                 ?611                	;0	>>611
604 479  INIT_FCALL_BY_NAME/59     ?0        ?0                   359:'strtolower'    	;1
605 479  FETCH_FUNC_ARG/92         $205=     361:'_SERVER'        ?0                  	;1
606 479  FETCH_DIM_FUNC_ARG/93     $206=     $205                 362:'HTTP_X_REQUESTED_WITH'	;1
607 479  SEND_VAR_EX/66            ?80       $206                 ?1                  	;0
608 479  DO_FCALL_BY_NAME/131      $207=     ?0                   ?0                  	;0
609 479  IS_EQUAL/17               #208=     $207                 363:'xmlhttprequest'	;0
610 479  BOOL/52                   #204=     #208                 ?0                  	;0
611 479  BOOL_NOT/13               #209=     #204                 ?0                  	;0	<<603
612 479  JMPZ/43                   ?0        #209                 ?614                	;0	>>614
613 480  GOTO/253                  ?0        ?615                 ?364                	;0
614 482  ECHO/40                   ?0        365:' style="display: none;"' ?0                  	;0	<<612
615 484  GOTO/253                  ?0        ?616                 ?366                	;0
616 486  ECHO/40                   ?0        367:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
617 487  INCLUDE_OR_EVAL/73        ?197      368:'topbar.php'     ?0                  	;2
618 488  ECHO/40                   ?0        369:'					</div>
					<h4 class="page-title">' ?0                  	;0
619 489  ISSET_ISEMPTY_CV/197      #211=     16?2                 ?0                  	;33554432
620 489  JMPZ/43                   ?0        #211                 ?622                	;0	>>622
621 490  GOTO/253                  ?0        ?155                 ?370                	;0
622 492  ECHO/40                   ?0        371:'Add'            ?0                  	;0	<<620
623 493  GOTO/253                  ?0        ?154                 ?372                	;0
624 495  FETCH_DIM_R/81            $212=     16?2                 373:'plex_password' 	;0
625 495  ECHO/40                   ?0        $212                 ?0                  	;0
626 497  ECHO/40                   ?0        374:'" placeholder="Password">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="library_id">Library</label>
													<div class="col-md-7">
														<select id="library_id" name="library_id" class="form-control" data-toggle="select2">
                                                            ' ?0                  	;0
627 498  ISSET_ISEMPTY_DIM_OBJ/115 #213=     16?2                 375:'plex_libraries'	;33554432
628 498  JMPZ/43                   ?0        #213                 ?636                	;0	>>636
629 498  INIT_FCALL_BY_NAME/59     ?0        ?0                   376:'json_decode'   	;2
630 498  FETCH_DIM_FUNC_ARG/93     $214=     16?2                 378:'plex_libraries'	;1
631 498  SEND_VAR_EX/66            ?80       $214                 ?1                  	;0
632 498  SEND_VAL_EX/116           ?96       379:true             ?2                  	;0
633 498  DO_FCALL_BY_NAME/131      $215=     ?0                   ?0                  	;0
634 498  QM_ASSIGN/22              #216=     $215                 ?0                  	;0
635 498  JMP/42                    ?0        ?637                 ?0                  	;0	>>637
636 498  QM_ASSIGN/22              #216=     380:array (
)        ?0                  	;0	<<628
637 498  ASSIGN/38                 ?204      16?9                 #216                	;0	<<635
638 499  FE_RESET_R/77             $218=     16?9                 ?663                	;0
639 499  FE_FETCH_R/78             ?0        $218                 16?10               	;663	>>663	<<662
640 500  FETCH_DIM_R/81            $219=     16?2                 381:'directory'     	;0
641 500  FETCH_DIM_R/81            $220=     16?10                382:'key'           	;0
642 500  IS_EQUAL/17               #221=     $219                 $220                	;0
643 500  JMPZ/43                   ?0        #221                 ?646                	;0	>>646
644 501  NOP/0                     ?0        ?0                   ?0                  	;1
645 501  GOTO/253                  ?0        ?655                 ?383                	;0
646 503  FETCH_DIM_R/81            $222=     16?10                384:'key'           	;0	<<643
647 503  CONCAT/8                  #223=     385:'<option value="' $222                	;0
648 503  CONCAT/8                  #224=     #223                 386:'">'            	;0
649 503  FETCH_DIM_R/81            $225=     16?10                387:'title'         	;0
650 503  CONCAT/8                  #226=     #224                 $225                	;0
651 503  CONCAT/8                  #227=     #226                 388:'</option>'     	;0
652 503  ECHO/40                   ?0        #227                 ?0                  	;0
653 504  NOP/0                     ?0        ?0                   ?0                  	;1
654 504  GOTO/253                  ?0        ?662                 ?389                	;0
655 506  FETCH_DIM_R/81            $228=     16?10                390:'key'           	;0
656 506  CONCAT/8                  #229=     391:'<option selected value="' $228                	;0
657 506  CONCAT/8                  #230=     #229                 392:'">'            	;0
658 506  FETCH_DIM_R/81            $231=     16?10                393:'title'         	;0
659 506  CONCAT/8                  #232=     #230                 $231                	;0
660 506  CONCAT/8                  #233=     #232                 394:'</option>'     	;0
661 506  ECHO/40                   ?0        #233                 ?0                  	;0
662 508  JMP/42                    ?0        ?639                 ?0                  	;0	>>639
663 508  FE_FREE/127               ?0        $218                 ?0                  	;0	<<638
664 510  GOTO/253                  ?0        ?675                 ?395                	;0
665 512  ISSET_ISEMPTY_CV/197      #234=     16?2                 ?0                  	;33554432
666 512  JMPZ/43                   ?0        #234                 ?668                	;0	>>668
667 513  GOTO/253                  ?0        ?670                 ?396                	;0
668 515  ECHO/40                   ?0        397:'checked '       ?0                  	;0	<<666
669 516  GOTO/253                  ?0        ?244                 ?398                	;0
670 518  FETCH_DIM_R/81            $235=     16?2                 399:'auto_upgrade'  	;0
671 518  BOOL_NOT/13               #236=     $235                 ?0                  	;0
672 518  JMPZ/43                   ?0        #236                 ?674                	;0	>>674
673 519  GOTO/253                  ?0        ?244                 ?400                	;0
674 521  GOTO/253                  ?0        ?243                 ?401                	;0	<<672
675 524  ECHO/40                   ?0        402:'                                                        </select>
													</div>
                                                    <div class="col-md-1">
                                                        <button class="btn btn-primary waves-effect waves-light" type="button" id="scanPlex"><i class="mdi mdi-reload"></i></button>
                                                    </div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="active">Enabled</label>
													<div class="col-md-2">
														<input name="active" id="active" type="checkbox" ' ?0                  	;0
676 525  ISSET_ISEMPTY_CV/197      #237=     16?2                 ?0                  	;33554432
677 525  JMPZ/43                   ?0        #237                 ?679                	;0	>>679
678 526  GOTO/253                  ?0        ?312                 ?403                	;0
679 528  ECHO/40                   ?0        404:'checked '       ?0                  	;0	<<677
680 529  GOTO/253                  ?0        ?317                 ?405                	;0
681 530  GOTO/253                  ?0        ?312                 ?406                	;0
682 532  FETCH_DIM_R/81            $238=     16?2                 407:'direct_proxy'  	;0
683 532  BOOL_NOT/13               #239=     $238                 ?0                  	;0
684 532  JMPZ/43                   ?0        #239                 ?686                	;0	>>686
685 533  GOTO/253                  ?0        ?687                 ?408                	;0
686 535  ECHO/40                   ?0        409:'checked '       ?0                  	;0	<<684
687 538  ECHO/40                   ?0        410:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
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
													<label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="Read input video at native frame rate." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" ' ?0                  	;0
688 539  GOTO/253                  ?0        ?144                 ?411                	;0
689 541  INIT_FCALL_BY_NAME/59     ?0        ?0                   412:'json_decode'   	;2
690 541  FETCH_DIM_FUNC_ARG/93     $240=     16?2                 414:'server_add'    	;1
691 541  SEND_VAR_EX/66            ?80       $240                 ?1                  	;0
692 541  SEND_VAL_EX/116           ?96       415:true             ?2                  	;0
693 541  DO_FCALL_BY_NAME/131      $241=     ?0                   ?0                  	;0
694 541  FE_RESET_R/77             $242=     $241                 ?708                	;0
695 541  FE_FETCH_R/78             ?0        $242                 16?11               	;708	>>708	<<707
696 542  ASSIGN_DIM/147            ?230      16?5                 ?1681292384         	;0
697 542  OP_DATA/137               ?0        16?11                ?0                  	;0
698 543  FETCH_DIM_R/81            $244=     16?11                416:'server_id'     	;0
699 543  CONCAT/8                  #245=     417:'<option value="' $244                	;0
700 543  CONCAT/8                  #246=     #245                 418:'" selected>'   	;0
701 543  FETCH_STATIC_PROP_R/173   $247=     419:'rServers'       420:'XUI'           	;0
702 543  FETCH_DIM_R/81            $248=     $247                 16?11               	;0
703 543  FETCH_DIM_R/81            $249=     $248                 422:'server_name'   	;0
704 543  CONCAT/8                  #250=     #246                 $249                	;0
705 543  CONCAT/8                  #251=     #250                 423:'</option>'     	;0
706 543  ECHO/40                   ?0        #251                 ?0                  	;0
707 544  JMP/42                    ?0        ?695                 ?0                  	;0	>>695
708 544  FE_FREE/127               ?0        $242                 ?0                  	;0	<<694
709 549  INIT_FCALL_BY_NAME/59     ?0        ?0                   424:'C6a90bfcD425Eb63'	;0
710 549  DO_FCALL_BY_NAME/131      $252=     ?0                   ?0                  	;0
711 549  FE_RESET_R/77             $253=     $252                 ?729                	;0
712 549  FE_FETCH_R/78             ?0        $253                 16?12               	;729	>>729	<<728
713 550  INIT_FCALL_BY_NAME/59     ?0        ?0                   426:'in_array'      	;2
714 550  FETCH_DIM_FUNC_ARG/93     $254=     16?12                428:'id'            	;1
715 550  SEND_VAR_EX/66            ?80       $254                 ?1                  	;0
716 550  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
717 550  DO_FCALL_BY_NAME/131      $255=     ?0                   ?0                  	;0
718 550  JMPZ/43                   ?0        $255                 ?721                	;0	>>721
719 551  NOP/0                     ?0        ?0                   ?0                  	;1
720 551  GOTO/253                  ?0        ?728                 ?429                	;0
721 553  FETCH_DIM_R/81            $256=     16?12                430:'id'            	;0	<<718
722 553  CONCAT/8                  #257=     431:'<option value="' $256                	;0
723 553  CONCAT/8                  #258=     #257                 432:'">'            	;0
724 553  FETCH_DIM_R/81            $259=     16?12                433:'server_name'   	;0
725 553  CONCAT/8                  #260=     #258                 $259                	;0
726 553  CONCAT/8                  #261=     #260                 434:'</option>'     	;0
727 553  ECHO/40                   ?0        #261                 ?0                  	;0
728 555  JMP/42                    ?0        ?712                 ?0                  	;0	>>712
729 555  FE_FREE/127               ?0        $253                 ?0                  	;0	<<711
730 557  GOTO/253                  ?0        ?488                 ?435                	;0
731 559  INCLUDE_OR_EVAL/73        ?249      436:'footer.php'     ?0                  	;2
732 560  NOP/0                     ?0        437:1                ?0                  	;4294967295
*/

?>