<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?629                 ?0                  	;0	>>629
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_null'         	;1
2   5    FETCH_DIM_FUNC_ARG/93     $14=      16?0                 3:'exp_date'        	;1
3   5    SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
4   5    DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
5   5    BOOL_NOT/13               #16=      $15                  ?0                  	;0
6   5    JMPZ/43                   ?0        #16                  ?8                  	;0	>>8
7   6    GOTO/253                  ?0        ?10                  ?4                  	;0
8   8    ECHO/40                   ?0        5:'" disabled="disabled' ?0                  	;0	<<6
9   9    GOTO/253                  ?0        ?193                 ?6                  	;0
10  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'date'            	;2
11  11   SEND_VAL_EX/116           ?80       9:'Y-m-d H:i:s'      ?1                  	;0
12  11   FETCH_DIM_FUNC_ARG/93     $17=      16?0                 10:'exp_date'       	;2
13  11   SEND_VAR_EX/66            ?96       $17                  ?2                  	;0
14  11   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
15  11   ECHO/40                   ?0        $18                  ?0                  	;0
16  12   GOTO/253                  ?0        ?193                 ?11                 	;0
17  15   ECHO/40                   ?0        12:'" data-indicator="unindicator">
                                                        <div id="unindicator">
                                                            <div class="bar"></div>
                                                            <div class="label"></div>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="password">Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="password" name="password" placeholder="Auto-generate if blank" value="' ?0                  	;0
18  16   ISSET_ISEMPTY_CV/197      #19=      16?0                 ?0                  	;33554432
19  16   BOOL_NOT/13               #20=      #19                  ?0                  	;0
20  16   JMPZ/43                   ?0        #20                  ?22                 	;0	>>22
21  17   GOTO/253                  ?0        ?27                  ?13                 	;0
22  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'htmlspecialchars'	;1	<<20
23  19   FETCH_DIM_FUNC_ARG/93     $21=      16?0                 16:'password'       	;1
24  19   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
25  19   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
26  19   ECHO/40                   ?0        $22                  ?0                  	;0
27  21   GOTO/253                  ?0        ?256                 ?17                 	;0
28  23   INIT_METHOD_CALL/112      ?0        16?1                 18:'query'          	;2
29  23   SEND_VAL_EX/116           ?80       20:'SELECT `device_id` FROM `enigma2_devices` WHERE `user_id` = ?;' ?1                  	;0
30  23   FETCH_DIM_FUNC_ARG/93     $23=      16?0                 21:'id'             	;2
31  23   SEND_VAR_EX/66            ?96       $23                  ?2                  	;0
32  23   DO_FCALL/60               ?10       ?0                   ?0                  	;0
33  24   INIT_METHOD_CALL/112      ?0        16?1                 22:'num_rows'       	;0
34  24   DO_FCALL/60               $25=      ?0                   ?0                  	;0
35  24   IS_SMALLER/19             #26=      24:0                 $25                 	;0
36  24   JMPZ/43                   ?0        #26                  ?38                 	;0	>>38
37  25   GOTO/253                  ?0        ?41                  ?25                 	;0
38  27   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'E72f42a93714bA87'	;0	<<36
39  27   DO_FCALL_BY_NAME/131      ?13       ?0                   ?0                  	;0
40  28   GOTO/253                  ?0        ?599                 ?28                 	;0
41  30   GOTO/253                  ?0        ?588                 ?29                 	;0
42  32   ECHO/40                   ?0        30:'" />
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
43  33   GOTO/253                  ?0        ?658                 ?31                 	;0
44  36   ECHO/40                   ?0        32:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="access_output">Access Output</label>
													<div class="col-md-8">
														' ?0                  	;0
45  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'Bf80879C11CddCc0'	;0
46  37   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
47  37   FE_RESET_R/77             $29=      $28                  ?96                 	;0
48  37   FE_FETCH_R/78             ?0        $29                  16?2                	;96	>>96	<<95
49  38   NOP/0                     ?0        ?0                   ?0                  	;1
50  38   GOTO/253                  ?0        ?51                  ?35                 	;0
51  40   ECHO/40                   ?0        36:'														<div class="checkbox form-check-inline">
															<input data-size="large" type="checkbox" id="access_output_' ?0                  	;0
52  41   FETCH_DIM_R/81            $30=      16?2                 37:'access_output_id'	;0
53  41   ECHO/40                   ?0        $30                  ?0                  	;0
54  42   ECHO/40                   ?0        38:'" name="access_output[]" value="' ?0                  	;0
55  43   FETCH_DIM_R/81            $31=      16?2                 39:'access_output_id'	;0
56  43   ECHO/40                   ?0        $31                  ?0                  	;0
57  44   ECHO/40                   ?0        40:'"'               ?0                  	;0
58  45   NOP/0                     ?0        ?0                   ?0                  	;1
59  45   GOTO/253                  ?0        ?60                  ?41                 	;0
60  47   ISSET_ISEMPTY_CV/197      #32=      16?0                 ?0                  	;33554432
61  47   JMPZ/43                   ?0        #32                  ?64                 	;0	>>64
62  48   NOP/0                     ?0        ?0                   ?0                  	;1
63  48   GOTO/253                  ?0        ?67                  ?42                 	;0
64  50   ECHO/40                   ?0        43:' checked'        ?0                  	;0	<<61
65  51   NOP/0                     ?0        ?0                   ?0                  	;1
66  51   GOTO/253                  ?0        ?84                  ?44                 	;0
67  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'in_array'       	;2
68  53   FETCH_DIM_FUNC_ARG/93     $33=      16?2                 47:'access_output_id'	;1
69  53   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
70  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'json_decode'    	;2
71  53   FETCH_DIM_FUNC_ARG/93     $34=      16?0                 50:'allowed_outputs'	;1
72  53   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
73  53   SEND_VAL_EX/116           ?96       51:true              ?2                  	;0
74  53   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
75  53   SEND_VAR_NO_REF_EX/50     ?96       $35                  ?2                  	;0
76  53   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
77  53   BOOL_NOT/13               #37=      $36                  ?0                  	;0
78  53   JMPZ/43                   ?0        #37                  ?81                 	;0	>>81
79  54   NOP/0                     ?0        ?0                   ?0                  	;1
80  54   GOTO/253                  ?0        ?84                  ?52                 	;0
81  56   NOP/0                     ?0        ?0                   ?0                  	;1	<<78
82  56   GOTO/253                  ?0        ?83                  ?53                 	;0
83  58   ECHO/40                   ?0        54:' checked'        ?0                  	;0
84  61   ECHO/40                   ?0        55:'>
															<label for="access_output_' ?0                  	;0
85  62   FETCH_DIM_R/81            $38=      16?2                 56:'access_output_id'	;0
86  62   ECHO/40                   ?0        $38                  ?0                  	;0
87  63   NOP/0                     ?0        ?0                   ?0                  	;1
88  63   GOTO/253                  ?0        ?89                  ?57                 	;0
89  65   ECHO/40                   ?0        58:'"> '             ?0                  	;0
90  66   FETCH_DIM_R/81            $39=      16?2                 59:'output_name'    	;0
91  66   ECHO/40                   ?0        $39                  ?0                  	;0
92  67   ECHO/40                   ?0        60:' </label>
														</div>
														' ?0                  	;0
93  69   NOP/0                     ?0        ?0                   ?0                  	;1
94  69   GOTO/253                  ?0        ?95                  ?61                 	;0
95  70   JMP/42                    ?0        ?48                  ?0                  	;0	>>48
96  70   FE_FREE/127               ?0        $29                  ?0                  	;0	<<47
97  73   ECHO/40                   ?0        62:'													</div>
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
									<div class="tab-pane" id="restrictions">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ip_field">Allowed IP Addresses</label>
													<div class="col-md-8 input-group">
														<input type="text" id="ip_field" class="form-control" value="">
														<div class="input-group-append">
															<a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>
															<a href="javascript:void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="allowed_ips">&nbsp;</label>
													<div class="col-md-8">
														<select id="allowed_ips" name="allowed_ips[]" size=6 class="form-control" multiple="multiple">
														' ?0                  	;0
98  74   GOTO/253                  ?0        ?568                 ?63                 	;0
99  76   FETCH_DIM_R/81            $40=      16?3                 64:'username'       	;0
100 76   ECHO/40                   ?0        $40                  ?0                  	;0
101 77   ECHO/40                   ?0        65:'</option>
                                                            ' ?0                  	;0
102 78   GOTO/253                  ?0        ?508                 ?66                 	;0
103 80   ECHO/40                   ?0        67:'                                                            <option value="' ?0                  	;0
104 81   GOTO/253                  ?0        ?499                 ?68                 	;0
105 83   ECHO/40                   ?0        69:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
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
									<div class="tab-pane" id="bouquets">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<table id="datatable-bouquets" class="table table-borderless mb-0">
														<thead class="bg-light">
															<tr>
																<th class="text-center">ID</th>
																<th>Bouquet Name</th>
																<th class="text-center">Streams</th>
                                                                <th class="text-center">Movies</th>
                                                                <th class="text-center">Series</th>
																<th class="text-center">Stations</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
106 84   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'F964b9222B35addd'	;0
107 84   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
108 84   FE_RESET_R/77             $42=      $41                  ?187                	;0
109 84   FE_FETCH_R/78             ?0        $42                  16?4                	;187	>>187	<<186
110 85   NOP/0                     ?0        ?0                   ?0                  	;1
111 85   GOTO/253                  ?0        ?129                 ?72                 	;0
112 87   FETCH_DIM_R/81            $43=      16?4                 73:'id'             	;0
113 87   ECHO/40                   ?0        $43                  ?0                  	;0
114 88   ECHO/40                   ?0        74:'</td>
																<td>' ?0                  	;0
115 89   FETCH_DIM_R/81            $44=      16?4                 75:'bouquet_name'   	;0
116 89   ECHO/40                   ?0        $44                  ?0                  	;0
117 90   ECHO/40                   ?0        76:'</td>
																<td class="text-center">' ?0                  	;0
118 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'count'          	;1
119 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'json_decode'    	;2
120 91   FETCH_DIM_FUNC_ARG/93     $45=      16?4                 81:'bouquet_channels'	;1
121 91   SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
122 91   SEND_VAL_EX/116           ?96       82:true              ?2                  	;0
123 91   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
124 91   SEND_VAR_NO_REF_EX/50     ?80       $46                  ?1                  	;0
125 91   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
126 91   ECHO/40                   ?0        $47                  ?0                  	;0
127 92   NOP/0                     ?0        ?0                   ?0                  	;1
128 92   GOTO/253                  ?0        ?163                 ?83                 	;0
129 94   ECHO/40                   ?0        84:'															<tr' ?0                  	;0
130 95   ISSET_ISEMPTY_CV/197      #48=      16?0                 ?0                  	;33554432
131 95   JMPZ_EX/46                #48=      #48                  ?143                	;0	>>143
132 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'in_array'       	;2
133 95   FETCH_DIM_FUNC_ARG/93     $49=      16?4                 87:'id'             	;1
134 95   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
135 95   INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'json_decode'    	;2
136 95   FETCH_DIM_FUNC_ARG/93     $50=      16?0                 90:'bouquet'        	;1
137 95   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
138 95   SEND_VAL_EX/116           ?96       91:true              ?2                  	;0
139 95   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
140 95   SEND_VAR_NO_REF_EX/50     ?96       $51                  ?2                  	;0
141 95   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
142 95   BOOL/52                   #48=      $52                  ?0                  	;0
143 95   BOOL_NOT/13               #53=      #48                  ?0                  	;0	<<131
144 95   JMPZ/43                   ?0        #53                  ?147                	;0	>>147
145 96   NOP/0                     ?0        ?0                   ?0                  	;1
146 96   GOTO/253                  ?0        ?148                 ?92                 	;0
147 98   ECHO/40                   ?0        93:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0	<<144
148 100  ECHO/40                   ?0        94:'>
																<td class="text-center">' ?0                  	;0
149 101  NOP/0                     ?0        ?0                   ?0                  	;1
150 101  GOTO/253                  ?0        ?112                 ?95                 	;0
151 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'count'          	;1
152 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'json_decode'    	;2
153 103  FETCH_DIM_FUNC_ARG/93     $54=      16?4                 100:'bouquet_radios'	;1
154 103  SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
155 103  SEND_VAL_EX/116           ?96       101:true             ?2                  	;0
156 103  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
157 103  SEND_VAR_NO_REF_EX/50     ?80       $55                  ?1                  	;0
158 103  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
159 103  ECHO/40                   ?0        $56                  ?0                  	;0
160 104  ECHO/40                   ?0        102:'</td>
															</tr>
															' ?0                  	;0
161 106  NOP/0                     ?0        ?0                   ?0                  	;1
162 106  GOTO/253                  ?0        ?186                 ?103                	;0
163 108  ECHO/40                   ?0        104:'</td>
                                                                <td class="text-center">' ?0                  	;0
164 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   105:'count'         	;1
165 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'json_decode'   	;2
166 109  FETCH_DIM_FUNC_ARG/93     $57=      16?4                 109:'bouquet_movies'	;1
167 109  SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
168 109  SEND_VAL_EX/116           ?96       110:true             ?2                  	;0
169 109  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
170 109  SEND_VAR_NO_REF_EX/50     ?80       $58                  ?1                  	;0
171 109  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
172 109  ECHO/40                   ?0        $59                  ?0                  	;0
173 110  ECHO/40                   ?0        111:'</td>
																<td class="text-center">' ?0                  	;0
174 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'count'         	;1
175 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'json_decode'   	;2
176 111  FETCH_DIM_FUNC_ARG/93     $60=      16?4                 116:'bouquet_series'	;1
177 111  SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
178 111  SEND_VAL_EX/116           ?96       117:true             ?2                  	;0
179 111  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
180 111  SEND_VAR_NO_REF_EX/50     ?80       $61                  ?1                  	;0
181 111  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
182 111  ECHO/40                   ?0        $62                  ?0                  	;0
183 112  ECHO/40                   ?0        118:'</td>
                                                                <td class="text-center">' ?0                  	;0
184 113  NOP/0                     ?0        ?0                   ?0                  	;1
185 113  GOTO/253                  ?0        ?151                 ?119                	;0
186 114  JMP/42                    ?0        ?109                 ?0                  	;0	>>109
187 114  FE_FREE/127               ?0        $42                  ?0                  	;0	<<108
188 117  ECHO/40                   ?0        120:'														</tbody>
													</table>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="list-inline-item float-right">
												<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info">Toggle All</a>
												<input name="submit_line" type="submit" class="btn btn-primary" value="' ?0                  	;0
189 118  ISSET_ISEMPTY_CV/197      #63=      16?0                 ?0                  	;33554432
190 118  JMPZ/43                   ?0        #63                  ?192                	;0	>>192
191 119  GOTO/253                  ?0        ?332                 ?121                	;0
192 121  GOTO/253                  ?0        ?330                 ?122                	;0	<<190
193 125  ECHO/40                   ?0        123:'" data-toggle="date-picker" data-single-date-picker="true">
													</div>
                                                    <label class="col-md-3 col-form-label" for="exp_date">Never Expire</label>
                                                    <div class="col-md-2">
														<input name="no_expire" id="no_expire" type="checkbox" ' ?0                  	;0
194 126  ISSET_ISEMPTY_CV/197      #64=      16?0                 ?0                  	;33554432
195 126  BOOL_NOT/13               #65=      #64                  ?0                  	;0
196 126  JMPZ/43                   ?0        #65                  ?198                	;0	>>198
197 127  GOTO/253                  ?0        ?335                 ?124                	;0
198 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'is_null'       	;1	<<196
199 129  FETCH_DIM_FUNC_ARG/93     $66=      16?0                 127:'exp_date'      	;1
200 129  SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
201 129  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
202 129  BOOL_NOT/13               #68=      $67                  ?0                  	;0
203 129  JMPZ/43                   ?0        #68                  ?205                	;0	>>205
204 130  GOTO/253                  ?0        ?335                 ?128                	;0
205 132  GOTO/253                  ?0        ?334                 ?129                	;0	<<203
206 134  ISSET_ISEMPTY_CV/197      #69=      16?0                 ?0                  	;33554432
207 134  JMPZ/43                   ?0        #69                  ?209                	;0	>>209
208 135  GOTO/253                  ?0        ?211                 ?130                	;0
209 137  ECHO/40                   ?0        131:'Add'            ?0                  	;0	<<207
210 138  GOTO/253                  ?0        ?384                 ?132                	;0
211 140  ECHO/40                   ?0        133:'Edit'           ?0                  	;0
212 141  GOTO/253                  ?0        ?384                 ?134                	;0
213 143  ECHO/40                   ?0        135:'" />
							'   ?0                  	;0
214 145  ECHO/40                   ?0        136:'							<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">Advanced</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#restrictions" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-hazard-lights mr-1"></i>
											<span class="d-none d-sm-inline">Restrictions</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#bouquets" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-flower-tulip mr-1"></i>
											<span class="d-none d-sm-inline">Bouquets</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="user-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Username</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="username" name="username" placeholder="Auto-generate if blank" value="' ?0                  	;0
215 146  ISSET_ISEMPTY_CV/197      #70=      16?0                 ?0                  	;33554432
216 146  BOOL_NOT/13               #71=      #70                  ?0                  	;0
217 146  JMPZ/43                   ?0        #71                  ?219                	;0	>>219
218 147  GOTO/253                  ?0        ?17                  ?137                	;0
219 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'htmlspecialchars'	;1	<<217
220 149  FETCH_DIM_FUNC_ARG/93     $72=      16?0                 140:'username'      	;1
221 149  SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
222 149  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
223 149  ECHO/40                   ?0        $73                  ?0                  	;0
224 150  GOTO/253                  ?0        ?17                  ?141                	;0
225 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'htmlspecialchars'	;1
226 152  FETCH_DIM_FUNC_ARG/93     $74=      16?0                 144:'reseller_notes'	;1
227 152  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
228 152  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
229 152  ECHO/40                   ?0        $75                  ?0                  	;0
230 154  ECHO/40                   ?0        145:'</textarea>
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
									<div class="tab-pane" id="advanced-options">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="force_server_id">Forced Connection <i title="Force this user to connect to a specific server. Otherwise, the server with the lowest load will be selected." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
231 155  ISSET_ISEMPTY_CV/197      #76=      16?0                 ?0                  	;33554432
232 155  BOOL_NOT/13               #77=      #76                  ?0                  	;0
233 155  JMPZ/43                   ?0        #77                  ?235                	;0	>>235
234 156  GOTO/253                  ?0        ?394                 ?146                	;0
235 158  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'intval'        	;1	<<233
236 158  FETCH_DIM_FUNC_ARG/93     $78=      16?0                 149:'force_server_id'	;1
237 158  SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
238 158  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
239 158  IS_EQUAL/17               #80=      $79                  150:0               	;0
240 158  BOOL_NOT/13               #81=      #80                  ?0                  	;0
241 158  JMPZ/43                   ?0        #81                  ?243                	;0	>>243
242 159  GOTO/253                  ?0        ?394                 ?151                	;0
243 161  GOTO/253                  ?0        ?393                 ?152                	;0	<<241
244 163  ECHO/40                   ?0        153:'" required data-parsley-trigger="change">
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="contact">Contact Email</label>
                                                    <div class="col-md-8">
														<input type="text" class="form-control" id="contact" name="contact" value="' ?0                  	;0
245 164  ISSET_ISEMPTY_CV/197      #82=      16?0                 ?0                  	;33554432
246 164  BOOL_NOT/13               #83=      #82                  ?0                  	;0
247 164  JMPZ/43                   ?0        #83                  ?249                	;0	>>249
248 165  GOTO/253                  ?0        ?254                 ?154                	;0
249 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'htmlspecialchars'	;1	<<247
250 167  FETCH_DIM_FUNC_ARG/93     $84=      16?0                 157:'contact'       	;1
251 167  SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
252 167  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
253 167  ECHO/40                   ?0        $85                  ?0                  	;0
254 169  ECHO/40                   ?0        158:'">
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="admin_notes">Admin Notes</label>
													<div class="col-md-8">
														<textarea id="admin_notes" name="admin_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
255 170  GOTO/253                  ?0        ?638                 ?159                	;0
256 172  ECHO/40                   ?0        160:'" data-indicator="pwindicator">
                                                        <div id="pwindicator">
                                                            <div class="bar"></div>
                                                            <div class="label"></div>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="member_id">Owner</label>
													<div class="col-md-6">
														<select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">
                                                            ' ?0                  	;0
257 173  ISSET_ISEMPTY_DIM_OBJ/115 #86=      16?0                 161:'member_id'     	;33554432
258 173  JMPZ_EX/46                #86=      #86                  ?268                	;0	>>268
259 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'ba89228Dc958Ce05'	;1
260 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'intval'        	;1
261 173  FETCH_DIM_FUNC_ARG/93     $87=      16?0                 166:'member_id'     	;1
262 173  SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
263 173  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
264 173  SEND_VAR_NO_REF_EX/50     ?80       $88                  ?1                  	;0
265 173  DO_FCALL_BY_NAME/131      $89=      ?0                   ?0                  	;0
266 173  ASSIGN/38                 $90=      16?5                 $89                 	;0
267 173  BOOL/52                   #86=      $90                  ?0                  	;0
268 173  JMPZ/43                   ?0        #86                  ?270                	;0	>>270	<<258
269 174  GOTO/253                  ?0        ?103                 ?167                	;0
270 176  ECHO/40                   ?0        168:'                                                            <option value="' ?0                  	;0	<<268
271 177  FETCH_DIM_R/81            $91=      16?3                 169:'id'            	;0
272 177  ECHO/40                   ?0        $91                  ?0                  	;0
273 178  ECHO/40                   ?0        170:'">'             ?0                  	;0
274 179  GOTO/253                  ?0        ?99                  ?171                	;0
275 181  ASSIGN/38                 ?78       16?6                 172:array (
  0 => 
  array (
    'id' => '',
    'name' => 'Off',
  ),
  1 => 
  array (
    'id' => 'A1',
    'name' => 'Anonymous Proxy',
  ),
  2 => 
  array (
    'id' => 'A2',
    'name' => 'Satellite Provider',
  ),
  3 => 
  array (
    'id' => 'O1',
    'name' => 'Other Country',
  ),
  4 => 
  array (
    'id' => 'AF',
    'name' => 'Afghanistan',
  ),
  5 => 
  array (
    'id' => 'AX',
    'name' => 'Aland Islands',
  ),
  6 => 
  array (
    'id' => 'AL',
    'name' => 'Albania',
  ),
  7 => 
  array (
    'id' => 'DZ',
    'name' => 'Algeria',
  ),
  8 => 
  array (
    'id' => 'AS',
    'name' => 'American Samoa',
  ),
  9 => 
  array (
    'id' => 'AD',
    'name' => 'Andorra',
  ),
  10 => 
  array (
    'id' => 'AO',
    'name' => 'Angola',
  ),
  11 => 
  array (
    'id' => 'AI',
    'name' => 'Anguilla',
  ),
  12 => 
  array (
    'id' => 'AQ',
    'name' => 'Antarctica',
  ),
  13 => 
  array (
    'id' => 'AG',
    'name' => 'Antigua And Barbuda',
  ),
  14 => 
  array (
    'id' => 'AR',
    'name' => 'Argentina',
  ),
  15 => 
  array (
    'id' => 'AM',
    'name' => 'Armenia',
  ),
  16 => 
  array (
    'id' => 'AW',
    'name' => 'Aruba',
  ),
  17 => 
  array (
    'id' => 'AU',
    'name' => 'Australia',
  ),
  18 => 
  array (
    'id' => 'AT',
    'name' => 'Austria',
  ),
  19 => 
  array (
    'id' => 'AZ',
    'name' => 'Azerbaijan',
  ),
  20 => 
  array (
    'id' => 'BS',
    'name' => 'Bahamas',
  ),
  21 => 
  array (
    'id' => 'BH',
    'name' => 'Bahrain',
  ),
  22 => 
  array (
    'id' => 'BD',
    'name' => 'Bangladesh',
  ),
  23 => 
  array (
    'id' => 'BB',
    'name' => 'Barbados',
  ),
  24 => 
  array (
    'id' => 'BY',
    'name' => 'Belarus',
  ),
  25 => 
  array (
    'id' => 'BE',
    'name' => 'Belgium',
  ),
  26 => 
  array (
    'id' => 'BZ',
    'name' => 'Belize',
  ),
  27 => 
  array (
    'id' => 'BJ',
    'name' => 'Benin',
  ),
  28 => 
  array (
    'id' => 'BM',
    'name' => 'Bermuda',
  ),
  29 => 
  array (
    'id' => 'BT',
    'name' => 'Bhutan',
  ),
  30 => 
  array (
    'id' => 'BO',
    'name' => 'Bolivia',
  ),
  31 => 
  array (
    'id' => 'BA',
    'name' => 'Bosnia And Herzegovina',
  ),
  32 => 
  array (
    'id' => 'BW',
    'name' => 'Botswana',
  ),
  33 => 
  array (
    'id' => 'BV',
    'name' => 'Bouvet Island',
  ),
  34 => 
  array (
    'id' => 'BR',
    'name' => 'Brazil',
  ),
  35 => 
  array (
    'id' => 'IO',
    'name' => 'British Indian Ocean Territory',
  ),
  36 => 
  array (
    'id' => 'BN',
    'name' => 'Brunei Darussalam',
  ),
  37 => 
  array (
    'id' => 'BG',
    'name' => 'Bulgaria',
  ),
  38 => 
  array (
    'id' => 'BF',
    'name' => 'Burkina Faso',
  ),
  39 => 
  array (
    'id' => 'BI',
    'name' => 'Burundi',
  ),
  40 => 
  array (
    'id' => 'KH',
    'name' => 'Cambodia',
  ),
  41 => 
  array (
    'id' => 'CM',
    'name' => 'Cameroon',
  ),
  42 => 
  array (
    'id' => 'CA',
    'name' => 'Canada',
  ),
  43 => 
  array (
    'id' => 'CV',
    'name' => 'Cape Verde',
  ),
  44 => 
  array (
    'id' => 'KY',
    'name' => 'Cayman Islands',
  ),
  45 => 
  array (
    'id' => 'CF',
    'name' => 'Central African Republic',
  ),
  46 => 
  array (
    'id' => 'TD',
    'name' => 'Chad',
  ),
  47 => 
  array (
    'id' => 'CL',
    'name' => 'Chile',
  ),
  48 => 
  array (
    'id' => 'CN',
    'name' => 'China',
  ),
  49 => 
  array (
    'id' => 'CX',
    'name' => 'Christmas Island',
  ),
  50 => 
  array (
    'id' => 'CC',
    'name' => 'Cocos (Keeling) Islands',
  ),
  51 => 
  array (
    'id' => 'CO',
    'name' => 'Colombia',
  ),
  52 => 
  array (
    'id' => 'KM',
    'name' => 'Comoros',
  ),
  53 => 
  array (
    'id' => 'CG',
    'name' => 'Congo',
  ),
  54 => 
  array (
    'id' => 'CD',
    'name' => 'Congo, Democratic Republic',
  ),
  55 => 
  array (
    'id' => 'CK',
    'name' => 'Cook Islands',
  ),
  56 => 
  array (
    'id' => 'CR',
    'name' => 'Costa Rica',
  ),
  57 => 
  array (
    'id' => 'CI',
    'name' => 'Cote D\'Ivoire',
  ),
  58 => 
  array (
    'id' => 'HR',
    'name' => 'Croatia',
  ),
  59 => 
  array (
    'id' => 'CU',
    'name' => 'Cuba',
  ),
  60 => 
  array (
    'id' => 'CY',
    'name' => 'Cyprus',
  ),
  61 => 
  array (
    'id' => 'CZ',
    'name' => 'Czech Republic',
  ),
  62 => 
  array (
    'id' => 'DK',
    'name' => 'Denmark',
  ),
  63 => 
  array (
    'id' => 'DJ',
    'name' => 'Djibouti',
  ),
  64 => 
  array (
    'id' => 'DM',
    'name' => 'Dominica',
  ),
  65 => 
  array (
    'id' => 'DO',
    'name' => 'Dominican Republic',
  ),
  66 => 
  array (
    'id' => 'EC',
    'name' => 'Ecuador',
  ),
  67 => 
  array (
    'id' => 'EG',
    'name' => 'Egypt',
  ),
  68 => 
  array (
    'id' => 'SV',
    'name' => 'El Salvador',
  ),
  69 => 
  array (
    'id' => 'GQ',
    'name' => 'Equatorial Guinea',
  ),
  70 => 
  array (
    'id' => 'ER',
    'name' => 'Eritrea',
  ),
  71 => 
  array (
    'id' => 'EE',
    'name' => 'Estonia',
  ),
  72 => 
  array (
    'id' => 'ET',
    'name' => 'Ethiopia',
  ),
  73 => 
  array (
    'id' => 'FK',
    'name' => 'Falkland Islands (Malvinas)',
  ),
  74 => 
  array (
    'id' => 'FO',
    'name' => 'Faroe Islands',
  ),
  75 => 
  array (
    'id' => 'FJ',
    'name' => 'Fiji',
  ),
  76 => 
  array (
    'id' => 'FI',
    'name' => 'Finland',
  ),
  77 => 
  array (
    'id' => 'FR',
    'name' => 'France',
  ),
  78 => 
  array (
    'id' => 'GF',
    'name' => 'French Guiana',
  ),
  79 => 
  array (
    'id' => 'PF',
    'name' => 'French Polynesia',
  ),
  80 => 
  array (
    'id' => 'TF',
    'name' => 'French Southern Territories',
  ),
  81 => 
  array (
    'id' => 'MK',
    'name' => 'Fyrom',
  ),
  82 => 
  array (
    'id' => 'GA',
    'name' => 'Gabon',
  ),
  83 => 
  array (
    'id' => 'GM',
    'name' => 'Gambia',
  ),
  84 => 
  array (
    'id' => 'GE',
    'name' => 'Georgia',
  ),
  85 => 
  array (
    'id' => 'DE',
    'name' => 'Germany',
  ),
  86 => 
  array (
    'id' => 'GH',
    'name' => 'Ghana',
  ),
  87 => 
  array (
    'id' => 'GI',
    'name' => 'Gibraltar',
  ),
  88 => 
  array (
    'id' => 'GR',
    'name' => 'Greece',
  ),
  89 => 
  array (
    'id' => 'GL',
    'name' => 'Greenland',
  ),
  90 => 
  array (
    'id' => 'GD',
    'name' => 'Grenada',
  ),
  91 => 
  array (
    'id' => 'GP',
    'name' => 'Guadeloupe',
  ),
  92 => 
  array (
    'id' => 'GU',
    'name' => 'Guam',
  ),
  93 => 
  array (
    'id' => 'GT',
    'name' => 'Guatemala',
  ),
  94 => 
  array (
    'id' => 'GG',
    'name' => 'Guernsey',
  ),
  95 => 
  array (
    'id' => 'GN',
    'name' => 'Guinea',
  ),
  96 => 
  array (
    'id' => 'GW',
    'name' => 'Guinea-Bissau',
  ),
  97 => 
  array (
    'id' => 'GY',
    'name' => 'Guyana',
  ),
  98 => 
  array (
    'id' => 'HT',
    'name' => 'Haiti',
  ),
  99 => 
  array (
    'id' => 'HM',
    'name' => 'Heard Island & Mcdonald Islands',
  ),
  100 => 
  array (
    'id' => 'VA',
    'name' => 'Holy See (Vatican City State)',
  ),
  101 => 
  array (
    'id' => 'HN',
    'name' => 'Honduras',
  ),
  102 => 
  array (
    'id' => 'HK',
    'name' => 'Hong Kong',
  ),
  103 => 
  array (
    'id' => 'HU',
    'name' => 'Hungary',
  ),
  104 => 
  array (
    'id' => 'IS',
    'name' => 'Iceland',
  ),
  105 => 
  array (
    'id' => 'IN',
    'name' => 'India',
  ),
  106 => 
  array (
    'id' => 'ID',
    'name' => 'Indonesia',
  ),
  107 => 
  array (
    'id' => 'IR',
    'name' => 'Iran, Islamic Republic Of',
  ),
  108 => 
  array (
    'id' => 'IQ',
    'name' => 'Iraq',
  ),
  109 => 
  array (
    'id' => 'IE',
    'name' => 'Ireland',
  ),
  110 => 
  array (
    'id' => 'IM',
    'name' => 'Isle Of Man',
  ),
  111 => 
  array (
    'id' => 'IL',
    'name' => 'Israel',
  ),
  112 => 
  array (
    'id' => 'IT',
    'name' => 'Italy',
  ),
  113 => 
  array (
    'id' => 'JM',
    'name' => 'Jamaica',
  ),
  114 => 
  array (
    'id' => 'JP',
    'name' => 'Japan',
  ),
  115 => 
  array (
    'id' => 'JE',
    'name' => 'Jersey',
  ),
  116 => 
  array (
    'id' => 'JO',
    'name' => 'Jordan',
  ),
  117 => 
  array (
    'id' => 'KZ',
    'name' => 'Kazakhstan',
  ),
  118 => 
  array (
    'id' => 'KE',
    'name' => 'Kenya',
  ),
  119 => 
  array (
    'id' => 'KI',
    'name' => 'Kiribati',
  ),
  120 => 
  array (
    'id' => 'KR',
    'name' => 'Korea',
  ),
  121 => 
  array (
    'id' => 'KW',
    'name' => 'Kuwait',
  ),
  122 => 
  array (
    'id' => 'KG',
    'name' => 'Kyrgyzstan',
  ),
  123 => 
  array (
    'id' => 'LA',
    'name' => 'Lao People\'s Democratic Republic',
  ),
  124 => 
  array (
    'id' => 'LV',
    'name' => 'Latvia',
  ),
  125 => 
  array (
    'id' => 'LB',
    'name' => 'Lebanon',
  ),
  126 => 
  array (
    'id' => 'LS',
    'name' => 'Lesotho',
  ),
  127 => 
  array (
    'id' => 'LR',
    'name' => 'Liberia',
  ),
  128 => 
  array (
    'id' => 'LY',
    'name' => 'Libyan Arab Jamahiriya',
  ),
  129 => 
  array (
    'id' => 'LI',
    'name' => 'Liechtenstein',
  ),
  130 => 
  array (
    'id' => 'LT',
    'name' => 'Lithuania',
  ),
  131 => 
  array (
    'id' => 'LU',
    'name' => 'Luxembourg',
  ),
  132 => 
  array (
    'id' => 'MO',
    'name' => 'Macao',
  ),
  133 => 
  array (
    'id' => 'MG',
    'name' => 'Madagascar',
  ),
  134 => 
  array (
    'id' => 'MW',
    'name' => 'Malawi',
  ),
  135 => 
  array (
    'id' => 'MY',
    'name' => 'Malaysia',
  ),
  136 => 
  array (
    'id' => 'MV',
    'name' => 'Maldives',
  ),
  137 => 
  array (
    'id' => 'ML',
    'name' => 'Mali',
  ),
  138 => 
  array (
    'id' => 'MT',
    'name' => 'Malta',
  ),
  139 => 
  array (
    'id' => 'MH',
    'name' => 'Marshall Islands',
  ),
  140 => 
  array (
    'id' => 'MQ',
    'name' => 'Martinique',
  ),
  141 => 
  array (
    'id' => 'MR',
    'name' => 'Mauritania',
  ),
  142 => 
  array (
    'id' => 'MU',
    'name' => 'Mauritius',
  ),
  143 => 
  array (
    'id' => 'YT',
    'name' => 'Mayotte',
  ),
  144 => 
  array (
    'id' => 'MX',
    'name' => 'Mexico',
  ),
  145 => 
  array (
    'id' => 'FM',
    'name' => 'Micronesia, Federated States Of',
  ),
  146 => 
  array (
    'id' => 'MD',
    'name' => 'Moldova',
  ),
  147 => 
  array (
    'id' => 'MC',
    'name' => 'Monaco',
  ),
  148 => 
  array (
    'id' => 'MN',
    'name' => 'Mongolia',
  ),
  149 => 
  array (
    'id' => 'ME',
    'name' => 'Montenegro',
  ),
  150 => 
  array (
    'id' => 'MS',
    'name' => 'Montserrat',
  ),
  151 => 
  array (
    'id' => 'MA',
    'name' => 'Morocco',
  ),
  152 => 
  array (
    'id' => 'MZ',
    'name' => 'Mozambique',
  ),
  153 => 
  array (
    'id' => 'MM',
    'name' => 'Myanmar',
  ),
  154 => 
  array (
    'id' => 'NA',
    'name' => 'Namibia',
  ),
  155 => 
  array (
    'id' => 'NR',
    'name' => 'Nauru',
  ),
  156 => 
  array (
    'id' => 'NP',
    'name' => 'Nepal',
  ),
  157 => 
  array (
    'id' => 'NL',
    'name' => 'Netherlands',
  ),
  158 => 
  array (
    'id' => 'AN',
    'name' => 'Netherlands Antilles',
  ),
  159 => 
  array (
    'id' => 'NC',
    'name' => 'New Caledonia',
  ),
  160 => 
  array (
    'id' => 'NZ',
    'name' => 'New Zealand',
  ),
  161 => 
  array (
    'id' => 'NI',
    'name' => 'Nicaragua',
  ),
  162 => 
  array (
    'id' => 'NE',
    'name' => 'Niger',
  ),
  163 => 
  array (
    'id' => 'NG',
    'name' => 'Nigeria',
  ),
  164 => 
  array (
    'id' => 'NU',
    'name' => 'Niue',
  ),
  165 => 
  array (
    'id' => 'NF',
    'name' => 'Norfolk Island',
  ),
  166 => 
  array (
    'id' => 'MP',
    'name' => 'Northern Mariana Islands',
  ),
  167 => 
  array (
    'id' => 'NO',
    'name' => 'Norway',
  ),
  168 => 
  array (
    'id' => 'OM',
    'name' => 'Oman',
  ),
  169 => 
  array (
    'id' => 'PK',
    'name' => 'Pakistan',
  ),
  170 => 
  array (
    'id' => 'PW',
    'name' => 'Palau',
  ),
  171 => 
  array (
    'id' => 'PS',
    'name' => 'Palestinian Territory, Occupied',
  ),
  172 => 
  array (
    'id' => 'PA',
    'name' => 'Panama',
  ),
  173 => 
  array (
    'id' => 'PG',
    'name' => 'Papua New Guinea',
  ),
  174 => 
  array (
    'id' => 'PY',
    'name' => 'Paraguay',
  ),
  175 => 
  array (
    'id' => 'PE',
    'name' => 'Peru',
  ),
  176 => 
  array (
    'id' => 'PH',
    'name' => 'Philippines',
  ),
  177 => 
  array (
    'id' => 'PN',
    'name' => 'Pitcairn',
  ),
  178 => 
  array (
    'id' => 'PL',
    'name' => 'Poland',
  ),
  179 => 
  array (
    'id' => 'PT',
    'name' => 'Portugal',
  ),
  180 => 
  array (
    'id' => 'PR',
    'name' => 'Puerto Rico',
  ),
  181 => 
  array (
    'id' => 'QA',
    'name' => 'Qatar',
  ),
  182 => 
  array (
    'id' => 'RE',
    'name' => 'Reunion',
  ),
  183 => 
  array (
    'id' => 'RO',
    'name' => 'Romania',
  ),
  184 => 
  array (
    'id' => 'RU',
    'name' => 'Russian Federation',
  ),
  185 => 
  array (
    'id' => 'RW',
    'name' => 'Rwanda',
  ),
  186 => 
  array (
    'id' => 'BL',
    'name' => 'Saint Barthelemy',
  ),
  187 => 
  array (
    'id' => 'SH',
    'name' => 'Saint Helena',
  ),
  188 => 
  array (
    'id' => 'KN',
    'name' => 'Saint Kitts And Nevis',
  ),
  189 => 
  array (
    'id' => 'LC',
    'name' => 'Saint Lucia',
  ),
  190 => 
  array (
    'id' => 'MF',
    'name' => 'Saint Martin',
  ),
  191 => 
  array (
    'id' => 'PM',
    'name' => 'Saint Pierre And Miquelon',
  ),
  192 => 
  array (
    'id' => 'VC',
    'name' => 'Saint Vincent And Grenadines',
  ),
  193 => 
  array (
    'id' => 'WS',
    'name' => 'Samoa',
  ),
  194 => 
  array (
    'id' => 'SM',
    'name' => 'San Marino',
  ),
  195 => 
  array (
    'id' => 'ST',
    'name' => 'Sao Tome And Principe',
  ),
  196 => 
  array (
    'id' => 'SA',
    'name' => 'Saudi Arabia',
  ),
  197 => 
  array (
    'id' => 'SN',
    'name' => 'Senegal',
  ),
  198 => 
  array (
    'id' => 'RS',
    'name' => 'Serbia',
  ),
  199 => 
  array (
    'id' => 'SC',
    'name' => 'Seychelles',
  ),
  200 => 
  array (
    'id' => 'SL',
    'name' => 'Sierra Leone',
  ),
  201 => 
  array (
    'id' => 'SG',
    'name' => 'Singapore',
  ),
  202 => 
  array (
    'id' => 'SK',
    'name' => 'Slovakia',
  ),
  203 => 
  array (
    'id' => 'SI',
    'name' => 'Slovenia',
  ),
  204 => 
  array (
    'id' => 'SB',
    'name' => 'Solomon Islands',
  ),
  205 => 
  array (
    'id' => 'SO',
    'name' => 'Somalia',
  ),
  206 => 
  array (
    'id' => 'ZA',
    'name' => 'South Africa',
  ),
  207 => 
  array (
    'id' => 'GS',
    'name' => 'South Georgia And Sandwich Isl.',
  ),
  208 => 
  array (
    'id' => 'ES',
    'name' => 'Spain',
  ),
  209 => 
  array (
    'id' => 'LK',
    'name' => 'Sri Lanka',
  ),
  210 => 
  array (
    'id' => 'SD',
    'name' => 'Sudan',
  ),
  211 => 
  array (
    'id' => 'SR',
    'name' => 'Suriname',
  ),
  212 => 
  array (
    'id' => 'SJ',
    'name' => 'Svalbard And Jan Mayen',
  ),
  213 => 
  array (
    'id' => 'SZ',
    'name' => 'Swaziland',
  ),
  214 => 
  array (
    'id' => 'SE',
    'name' => 'Sweden',
  ),
  215 => 
  array (
    'id' => 'CH',
    'name' => 'Switzerland',
  ),
  216 => 
  array (
    'id' => 'SY',
    'name' => 'Syrian Arab Republic',
  ),
  217 => 
  array (
    'id' => 'TW',
    'name' => 'Taiwan',
  ),
  218 => 
  array (
    'id' => 'TJ',
    'name' => 'Tajikistan',
  ),
  219 => 
  array (
    'id' => 'TZ',
    'name' => 'Tanzania',
  ),
  220 => 
  array (
    'id' => 'TH',
    'name' => 'Thailand',
  ),
  221 => 
  array (
    'id' => 'TL',
    'name' => 'Timor-Leste',
  ),
  222 => 
  array (
    'id' => 'TG',
    'name' => 'Togo',
  ),
  223 => 
  array (
    'id' => 'TK',
    'name' => 'Tokelau',
  ),
  224 => 
  array (
    'id' => 'TO',
    'name' => 'Tonga',
  ),
  225 => 
  array (
    'id' => 'TT',
    'name' => 'Trinidad And Tobago',
  ),
  226 => 
  array (
    'id' => 'TN',
    'name' => 'Tunisia',
  ),
  227 => 
  array (
    'id' => 'TR',
    'name' => 'Turkey',
  ),
  228 => 
  array (
    'id' => 'TM',
    'name' => 'Turkmenistan',
  ),
  229 => 
  array (
    'id' => 'TC',
    'name' => 'Turks And Caicos Islands',
  ),
  230 => 
  array (
    'id' => 'TV',
    'name' => 'Tuvalu',
  ),
  231 => 
  array (
    'id' => 'UG',
    'name' => 'Uganda',
  ),
  232 => 
  array (
    'id' => 'UA',
    'name' => 'Ukraine',
  ),
  233 => 
  array (
    'id' => 'AE',
    'name' => 'United Arab Emirates',
  ),
  234 => 
  array (
    'id' => 'GB',
    'name' => 'United Kingdom',
  ),
  235 => 
  array (
    'id' => 'US',
    'name' => 'United States',
  ),
  236 => 
  array (
    'id' => 'UM',
    'name' => 'United States Outlying Islands',
  ),
  237 => 
  array (
    'id' => 'UY',
    'name' => 'Uruguay',
  ),
  238 => 
  array (
    'id' => 'UZ',
    'name' => 'Uzbekistan',
  ),
  239 => 
  array (
    'id' => 'VU',
    'name' => 'Vanuatu',
  ),
  240 => 
  array (
    'id' => 'VE',
    'name' => 'Venezuela',
  ),
  241 => 
  array (
    'id' => 'VN',
    'name' => 'Viet Nam',
  ),
  242 => 
  array (
    'id' => 'VG',
    'name' => 'Virgin Islands, British',
  ),
  243 => 
  array (
    'id' => 'VI',
    'name' => 'Virgin Islands, U.S.',
  ),
  244 => 
  array (
    'id' => 'WF',
    'name' => 'Wallis And Futuna',
  ),
  245 => 
  array (
    'id' => 'EH',
    'name' => 'Western Sahara',
  ),
  246 => 
  array (
    'id' => 'YE',
    'name' => 'Yemen',
  ),
  247 => 
  array (
    'id' => 'ZM',
    'name' => 'Zambia',
  ),
  248 => 
  array (
    'id' => 'ZW',
    'name' => 'Zimbabwe',
  ),
)	;0
276 182  ASSIGN/38                 ?79       16?7                 173:'Line'          	;0
277 183  INCLUDE_OR_EVAL/73        ?80       174:'header.php'     ?0                  	;2
278 184  ECHO/40                   ?0        175:'<div class="wrapper boxed-layout"' ?0                  	;0
279 185  FETCH_IS/89               $95=      176:'_SERVER'        ?0                  	;0
280 185  ISSET_ISEMPTY_DIM_OBJ/115 #96=      $95                  177:'HTTP_X_REQUESTED_WITH'	;16777216
281 185  BOOL_NOT/13               #97=      #96                  ?0                  	;0
282 185  JMPZ_EX/46                #97=      #97                  ?290                	;0	>>290
283 185  INIT_FCALL_BY_NAME/59     ?0        ?0                   178:'strtolower'    	;1
284 185  FETCH_FUNC_ARG/92         $98=      180:'_SERVER'        ?0                  	;1
285 185  FETCH_DIM_FUNC_ARG/93     $99=      $98                  181:'HTTP_X_REQUESTED_WITH'	;1
286 185  SEND_VAR_EX/66            ?80       $99                  ?1                  	;0
287 185  DO_FCALL_BY_NAME/131      $100=     ?0                   ?0                  	;0
288 185  IS_EQUAL/17               #101=     $100                 182:'xmlhttprequest'	;0
289 185  BOOL/52                   #97=      #101                 ?0                  	;0
290 185  BOOL_NOT/13               #102=     #97                  ?0                  	;0	<<282
291 185  JMPZ/43                   ?0        #102                 ?293                	;0	>>293
292 186  GOTO/253                  ?0        ?654                 ?183                	;0
293 188  GOTO/253                  ?0        ?653                 ?184                	;0	<<291
294 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'header'        	;1
295 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'intval'        	;1
296 191  INIT_METHOD_CALL/112      ?0        16?1                 189:'get_row'       	;0
297 191  DO_FCALL/60               $103=     ?0                   ?0                  	;0
298 191  SEPARATE/156              $103=     $103                 ?0                  	;0
299 191  FETCH_DIM_FUNC_ARG/93     $104=     $103                 191:'mag_id'        	;1
300 191  SEND_VAR_EX/66            ?80       $104                 ?1                  	;0
301 191  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
302 191  CONCAT/8                  #106=     192:'Location: mag?id=' $105                	;0
303 191  SEND_VAL_EX/116           ?80       #106                 ?1                  	;0
304 191  DO_FCALL_BY_NAME/131      ?93       ?0                   ?0                  	;0
305 194  FETCH_DIM_R/81            $108=     16?0                 193:'is_e2'         	;0
306 194  BOOL_NOT/13               #109=     $108                 ?0                  	;0
307 194  JMPZ/43                   ?0        #109                 ?309                	;0	>>309
308 195  GOTO/253                  ?0        ?599                 ?194                	;0
309 197  GOTO/253                  ?0        ?28                  ?195                	;0	<<307
310 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'b5ad1d95a92ce732'	;1
311 200  FETCH_STATIC_PROP_FUNC_ARG/177 $110=     198:'rRequest'       199:'XUI'           	;1
312 200  FETCH_DIM_FUNC_ARG/93     $111=     $110                 201:'id'            	;1
313 200  SEND_VAR_EX/66            ?80       $111                 ?1                  	;0
314 200  DO_FCALL_BY_NAME/131      $112=     ?0                   ?0                  	;0
315 200  ASSIGN/38                 ?99       16?0                 $112                	;0
316 201  BOOL_NOT/13               #114=     16?0                 ?0                  	;0
317 201  JMPNZ_EX/47               #114=     #114                 ?324                	;0	>>324
318 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'e589A4BF54a2DaD1'	;2
319 201  SEND_VAL_EX/116           ?80       204:'adv'            ?1                  	;0
320 201  SEND_VAL_EX/116           ?96       205:'edit_user'      ?2                  	;0
321 201  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
322 201  BOOL_NOT/13               #116=     $115                 ?0                  	;0
323 201  BOOL/52                   #114=     #116                 ?0                  	;0
324 201  BOOL_NOT/13               #117=     #114                 ?0                  	;0	<<317
325 201  JMPZ/43                   ?0        #117                 ?327                	;0	>>327
326 202  GOTO/253                  ?0        ?329                 ?206                	;0
327 204  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'E72f42A93714BA87'	;0	<<325
328 204  DO_FCALL_BY_NAME/131      ?104      ?0                   ?0                  	;0
329 206  GOTO/253                  ?0        ?438                 ?209                	;0
330 208  ECHO/40                   ?0        210:'Add'            ?0                  	;0
331 209  GOTO/253                  ?0        ?333                 ?211                	;0
332 211  ECHO/40                   ?0        212:'Edit'           ?0                  	;0
333 213  GOTO/253                  ?0        ?42                  ?213                	;0
334 215  ECHO/40                   ?0        214:'checked '       ?0                  	;0
335 218  ECHO/40                   ?0        215:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="max_connections">Max Connections</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="max_connections" name="max_connections" value="' ?0                  	;0
336 219  ISSET_ISEMPTY_CV/197      #119=     16?0                 ?0                  	;33554432
337 219  JMPZ/43                   ?0        #119                 ?339                	;0	>>339
338 220  GOTO/253                  ?0        ?612                 ?216                	;0
339 222  GOTO/253                  ?0        ?610                 ?217                	;0	<<337
340 224  ISSET_ISEMPTY_CV/197      #120=     16?0                 ?0                  	;33554432
341 224  BOOL_NOT/13               #121=     #120                 ?0                  	;0
342 224  JMPZ/43                   ?0        #121                 ?344                	;0	>>344
343 225  GOTO/253                  ?0        ?349                 ?218                	;0
344 227  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'htmlspecialchars'	;1	<<342
345 227  FETCH_DIM_FUNC_ARG/93     $122=     16?0                 221:'access_token'  	;1
346 227  SEND_VAR_EX/66            ?80       $122                 ?1                  	;0
347 227  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
348 227  ECHO/40                   ?0        $123                 ?0                  	;0
349 229  ECHO/40                   ?0        222:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onclick="generateToken()" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-refresh"></i></a>
                                                            <a href="javascript:void(0)" onclick="clearToken()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
														</div>
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="forced_country">Forced Country <i title="Force user to connect to loadbalancer associated with the selected country." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
350 230  FE_RESET_R/77             $124=     16?6                 ?382                	;0
351 230  FE_FETCH_R/78             ?0        $124                 16?8                	;382	>>382	<<381
352 231  NOP/0                     ?0        ?0                   ?0                  	;1
353 231  GOTO/253                  ?0        ?362                 ?223                	;0
354 234  ECHO/40                   ?0        224:'value="'        ?0                  	;0
355 235  FETCH_DIM_R/81            $125=     16?8                 225:'id'            	;0
356 235  ECHO/40                   ?0        $125                 ?0                  	;0
357 236  ECHO/40                   ?0        226:'">'             ?0                  	;0
358 237  FETCH_DIM_R/81            $126=     16?8                 227:'name'          	;0
359 237  ECHO/40                   ?0        $126                 ?0                  	;0
360 238  NOP/0                     ?0        ?0                   ?0                  	;1
361 238  GOTO/253                  ?0        ?378                 ?228                	;0
362 240  ECHO/40                   ?0        229:'															<option ' ?0                  	;0
363 241  ISSET_ISEMPTY_CV/197      #127=     16?0                 ?0                  	;33554432
364 241  BOOL_NOT/13               #128=     #127                 ?0                  	;0
365 241  JMPZ/43                   ?0        #128                 ?368                	;0	>>368
366 242  NOP/0                     ?0        ?0                   ?0                  	;1
367 242  GOTO/253                  ?0        ?354                 ?230                	;0
368 244  FETCH_DIM_R/81            $129=     16?0                 231:'forced_country'	;0	<<365
369 244  FETCH_DIM_R/81            $130=     16?8                 232:'id'            	;0
370 244  IS_EQUAL/17               #131=     $129                 $130                	;0
371 244  BOOL_NOT/13               #132=     #131                 ?0                  	;0
372 244  JMPZ/43                   ?0        #132                 ?375                	;0	>>375
373 245  NOP/0                     ?0        ?0                   ?0                  	;1
374 245  GOTO/253                  ?0        ?376                 ?233                	;0
375 247  ECHO/40                   ?0        234:'selected '      ?0                  	;0	<<372
376 249  NOP/0                     ?0        ?0                   ?0                  	;1
377 249  GOTO/253                  ?0        ?354                 ?235                	;0
378 251  ECHO/40                   ?0        236:'</option>
															' ?0                  	;0
379 253  NOP/0                     ?0        ?0                   ?0                  	;1
380 253  GOTO/253                  ?0        ?381                 ?237                	;0
381 254  JMP/42                    ?0        ?351                 ?0                  	;0	>>351
382 254  FE_FREE/127               ?0        $124                 ?0                  	;0	<<350
383 256  GOTO/253                  ?0        ?44                  ?238                	;0
384 259  ECHO/40                   ?0        239:' Line</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
385 260  ISSET_ISEMPTY_CV/197      #133=     16?0                 ?0                  	;33554432
386 260  BOOL_NOT/13               #134=     #133                 ?0                  	;0
387 260  JMPZ/43                   ?0        #134                 ?389                	;0	>>389
388 261  GOTO/253                  ?0        ?214                 ?240                	;0
389 263  ECHO/40                   ?0        241:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<387
390 264  FETCH_DIM_R/81            $135=     16?0                 242:'id'            	;0
391 264  ECHO/40                   ?0        $135                 ?0                  	;0
392 265  GOTO/253                  ?0        ?213                 ?243                	;0
393 267  ECHO/40                   ?0        244:'selected '      ?0                  	;0
394 270  ECHO/40                   ?0        245:'value="0">Disabled</option>
															' ?0                  	;0
395 271  FE_RESET_R/77             $136=     16?9                 ?436                	;0
396 271  FE_FETCH_R/78             ?0        $136                 16?10               	;436	>>436	<<435
397 272  NOP/0                     ?0        ?0                   ?0                  	;1
398 272  GOTO/253                  ?0        ?413                 ?246                	;0
399 274  ECHO/40                   ?0        247:'</option>
															' ?0                  	;0
400 276  NOP/0                     ?0        ?0                   ?0                  	;1
401 276  GOTO/253                  ?0        ?435                 ?248                	;0
402 279  ECHO/40                   ?0        249:'value="'        ?0                  	;0
403 280  FETCH_DIM_R/81            $137=     16?10                250:'id'            	;0
404 280  ECHO/40                   ?0        $137                 ?0                  	;0
405 281  ECHO/40                   ?0        251:'">'             ?0                  	;0
406 282  INIT_FCALL_BY_NAME/59     ?0        ?0                   252:'htmlspecialchars'	;1
407 282  FETCH_DIM_FUNC_ARG/93     $138=     16?10                254:'server_name'   	;1
408 282  SEND_VAR_EX/66            ?80       $138                 ?1                  	;0
409 282  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
410 282  ECHO/40                   ?0        $139                 ?0                  	;0
411 283  NOP/0                     ?0        ?0                   ?0                  	;1
412 283  GOTO/253                  ?0        ?399                 ?255                	;0
413 285  ECHO/40                   ?0        256:'															<option ' ?0                  	;0
414 286  ISSET_ISEMPTY_CV/197      #140=     16?0                 ?0                  	;33554432
415 286  BOOL_NOT/13               #141=     #140                 ?0                  	;0
416 286  JMPZ/43                   ?0        #141                 ?419                	;0	>>419
417 287  NOP/0                     ?0        ?0                   ?0                  	;1
418 287  GOTO/253                  ?0        ?402                 ?257                	;0
419 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'intval'        	;1	<<416
420 289  FETCH_DIM_FUNC_ARG/93     $142=     16?0                 260:'force_server_id'	;1
421 289  SEND_VAR_EX/66            ?80       $142                 ?1                  	;0
422 289  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
423 289  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'intval'        	;1
424 289  FETCH_DIM_FUNC_ARG/93     $144=     16?10                263:'id'            	;1
425 289  SEND_VAR_EX/66            ?80       $144                 ?1                  	;0
426 289  DO_FCALL_BY_NAME/131      $145=     ?0                   ?0                  	;0
427 289  IS_EQUAL/17               #146=     $143                 $145                	;0
428 289  BOOL_NOT/13               #147=     #146                 ?0                  	;0
429 289  JMPZ/43                   ?0        #147                 ?432                	;0	>>432
430 290  NOP/0                     ?0        ?0                   ?0                  	;1
431 290  GOTO/253                  ?0        ?433                 ?264                	;0
432 292  ECHO/40                   ?0        265:'selected '      ?0                  	;0	<<429
433 294  NOP/0                     ?0        ?0                   ?0                  	;1
434 294  GOTO/253                  ?0        ?402                 ?266                	;0
435 295  JMP/42                    ?0        ?396                 ?0                  	;0	>>396
436 295  FE_FREE/127               ?0        $136                 ?0                  	;0	<<395
437 297  GOTO/253                  ?0        ?476                 ?267                	;0
438 299  FETCH_DIM_R/81            $148=     16?0                 268:'is_mag'        	;0
439 299  BOOL_NOT/13               #149=     $148                 ?0                  	;0
440 299  JMPZ/43                   ?0        #149                 ?442                	;0	>>442
441 300  GOTO/253                  ?0        ?305                 ?269                	;0
442 302  INIT_METHOD_CALL/112      ?0        16?1                 270:'query'         	;2	<<440
443 302  SEND_VAL_EX/116           ?80       272:'SELECT `mag_id` FROM `mag_devices` WHERE `user_id` = ?;' ?1                  	;0
444 302  FETCH_DIM_FUNC_ARG/93     $150=     16?0                 273:'id'            	;2
445 302  SEND_VAR_EX/66            ?96       $150                 ?2                  	;0
446 302  DO_FCALL/60               ?137      ?0                   ?0                  	;0
447 303  INIT_METHOD_CALL/112      ?0        16?1                 274:'num_rows'      	;0
448 303  DO_FCALL/60               $152=     ?0                   ?0                  	;0
449 303  IS_SMALLER/19             #153=     276:0                $152                	;0
450 303  JMPZ/43                   ?0        #153                 ?452                	;0	>>452
451 304  GOTO/253                  ?0        ?294                 ?277                	;0
452 306  INIT_FCALL_BY_NAME/59     ?0        ?0                   278:'e72f42a93714bA87'	;0	<<450
453 306  DO_FCALL_BY_NAME/131      ?140      ?0                   ?0                  	;0
454 307  GOTO/253                  ?0        ?305                 ?280                	;0
455 308  GOTO/253                  ?0        ?294                 ?281                	;0
456 310  ISSET_ISEMPTY_CV/197      #155=     16?0                 ?0                  	;33554432
457 310  BOOL_NOT/13               #156=     #155                 ?0                  	;0
458 310  JMPZ/43                   ?0        #156                 ?460                	;0	>>460
459 311  GOTO/253                  ?0        ?474                 ?282                	;0
460 313  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'json_decode'   	;2	<<458
461 313  FETCH_DIM_FUNC_ARG/93     $157=     16?0                 285:'allowed_ua'    	;1
462 313  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
463 313  SEND_VAL_EX/116           ?96       286:true             ?2                  	;0
464 313  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
465 313  FE_RESET_R/77             $159=     $158                 ?473                	;0
466 313  FE_FETCH_R/78             ?0        $159                 16?11               	;473	>>473	<<472
467 314  ECHO/40                   ?0        287:'														<option value="' ?0                  	;0
468 315  ECHO/40                   ?0        16?11                ?0                  	;0
469 316  ECHO/40                   ?0        288:'">'             ?0                  	;0
470 317  ECHO/40                   ?0        16?11                ?0                  	;0
471 318  ECHO/40                   ?0        289:'</option>
														' ?0                  	;0
472 319  JMP/42                    ?0        ?466                 ?0                  	;0	>>466
473 319  FE_FREE/127               ?0        $159                 ?0                  	;0	<<465
474 323  ECHO/40                   ?0        290:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="bypass_ua">Bypass UA Restrictions</label>
													<div class="col-md-2">
														<input name="bypass_ua" id="bypass_ua" type="checkbox" ' ?0                  	;0
475 324  GOTO/253                  ?0        ?618                 ?291                	;0
476 327  ECHO/40                   ?0        292:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_stalker">Ministra Portal <i title="Select this option if you intend to use this account with your Ministra portal. Output formats, expiration and connections below will be ignored. Only MPEG-TS output is allowed." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="is_stalker" id="is_stalker" type="checkbox" ' ?0                  	;0
477 328  ISSET_ISEMPTY_CV/197      #160=     16?0                 ?0                  	;33554432
478 328  BOOL_NOT/13               #161=     #160                 ?0                  	;0
479 328  JMPZ/43                   ?0        #161                 ?481                	;0	>>481
480 329  GOTO/253                  ?0        ?543                 ?293                	;0
481 331  FETCH_DIM_R/81            $162=     16?0                 294:'is_stalker'    	;0	<<479
482 331  IS_EQUAL/17               #163=     $162                 295:1               	;0
483 331  BOOL_NOT/13               #164=     #163                 ?0                  	;0
484 331  JMPZ/43                   ?0        #164                 ?486                	;0	>>486
485 332  GOTO/253                  ?0        ?543                 ?296                	;0
486 334  ECHO/40                   ?0        297:'checked '       ?0                  	;0	<<484
487 335  GOTO/253                  ?0        ?543                 ?298                	;0
488 337  ISSET_ISEMPTY_CV/197      #165=     16?0                 ?0                  	;33554432
489 337  BOOL_NOT/13               #166=     #165                 ?0                  	;0
490 337  JMPZ/43                   ?0        #166                 ?492                	;0	>>492
491 338  GOTO/253                  ?0        ?498                 ?299                	;0
492 340  FETCH_DIM_R/81            $167=     16?0                 300:'is_isplock'    	;0	<<490
493 340  IS_EQUAL/17               #168=     $167                 301:1               	;0
494 340  BOOL_NOT/13               #169=     #168                 ?0                  	;0
495 340  JMPZ/43                   ?0        #169                 ?497                	;0	>>497
496 341  GOTO/253                  ?0        ?498                 ?302                	;0
497 343  ECHO/40                   ?0        303:'checked '       ?0                  	;0	<<495
498 346  GOTO/253                  ?0        ?509                 ?304                	;0
499 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'intval'        	;1
500 348  FETCH_DIM_FUNC_ARG/93     $170=     16?5                 307:'id'            	;1
501 348  SEND_VAR_EX/66            ?80       $170                 ?1                  	;0
502 348  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
503 348  ECHO/40                   ?0        $171                 ?0                  	;0
504 349  ECHO/40                   ?0        308:'" selected="selected">' ?0                  	;0
505 350  FETCH_DIM_R/81            $172=     16?5                 309:'username'      	;0
506 350  ECHO/40                   ?0        $172                 ?0                  	;0
507 351  ECHO/40                   ?0        310:'</option>
                                                            ' ?0                  	;0
508 353  GOTO/253                  ?0        ?554                 ?311                	;0
509 355  ECHO/40                   ?0        312:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>
                                                    <div class="col-md-8 input-group">
														<input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="' ?0                  	;0
510 356  ISSET_ISEMPTY_CV/197      #173=     16?0                 ?0                  	;33554432
511 356  BOOL_NOT/13               #174=     #173                 ?0                  	;0
512 356  JMPZ/43                   ?0        #174                 ?514                	;0	>>514
513 357  GOTO/253                  ?0        ?519                 ?313                	;0
514 359  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'htmlspecialchars'	;1	<<512
515 359  FETCH_DIM_FUNC_ARG/93     $175=     16?0                 316:'isp_desc'      	;1
516 359  SEND_VAR_EX/66            ?80       $175                 ?1                  	;0
517 359  DO_FCALL_BY_NAME/131      $176=     ?0                   ?0                  	;0
518 359  ECHO/40                   ?0        $176                 ?0                  	;0
519 361  ECHO/40                   ?0        317:'">
														<div class="input-group-append">
															<a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
														</div>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="access_token">Access Token <i title="Generate an access token that can be used in place of username and password. If you use this option, playlists generated will contain the access token as auth." class="tooltip text-secondary far fa-circle"></i></label>
                                                    <div class="col-md-8 input-group">
														<input type="text" readonly class="form-control" id="access_token" name="access_token" value="' ?0                  	;0
520 362  GOTO/253                  ?0        ?340                 ?318                	;0
521 364  FETCH_DIM_R/81            $177=     16?0                 319:'is_trial'      	;0
522 364  IS_EQUAL/17               #178=     $177                 320:1               	;0
523 364  BOOL_NOT/13               #179=     #178                 ?0                  	;0
524 364  JMPZ/43                   ?0        #179                 ?526                	;0	>>526
525 365  GOTO/253                  ?0        ?527                 ?321                	;0
526 367  ECHO/40                   ?0        322:'checked '       ?0                  	;0	<<524
527 370  ECHO/40                   ?0        323:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>
													<div class="col-md-2">
														<input name="is_isplock" id="is_isplock" type="checkbox" ' ?0                  	;0
528 371  GOTO/253                  ?0        ?488                 ?324                	;0
529 373  FETCH_STATIC_PROP_IS/176  $180=     325:'rRequest'       326:'XUI'           	;0
530 373  ISSET_ISEMPTY_DIM_OBJ/115 #181=     $180                 328:'id'            	;33554432
531 373  JMPZ/43                   ?0        #181                 ?533                	;0	>>533
532 374  GOTO/253                  ?0        ?310                 ?329                	;0
533 376  INIT_FCALL_BY_NAME/59     ?0        ?0                   330:'e589A4Bf54A2dAD1'	;2	<<531
534 376  SEND_VAL_EX/116           ?80       332:'adv'            ?1                  	;0
535 376  SEND_VAL_EX/116           ?96       333:'add_user'       ?2                  	;0
536 376  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
537 376  JMPZ/43                   ?0        $182                 ?539                	;0	>>539
538 377  GOTO/253                  ?0        ?541                 ?334                	;0
539 379  INIT_FCALL_BY_NAME/59     ?0        ?0                   335:'e72F42a93714Ba87'	;0	<<537
540 379  DO_FCALL_BY_NAME/131      ?169      ?0                   ?0                  	;0
541 381  GOTO/253                  ?0        ?599                 ?337                	;0
542 382  GOTO/253                  ?0        ?310                 ?338                	;0
543 386  ECHO/40                   ?0        339:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="is_restreamer">Restreamer <i title="If selected, this user will not be blocked for restreaming channels." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="is_restreamer" id="is_restreamer" type="checkbox" ' ?0                  	;0
544 387  ISSET_ISEMPTY_CV/197      #184=     16?0                 ?0                  	;33554432
545 387  BOOL_NOT/13               #185=     #184                 ?0                  	;0
546 387  JMPZ/43                   ?0        #185                 ?548                	;0	>>548
547 388  GOTO/253                  ?0        ?604                 ?340                	;0
548 390  FETCH_DIM_R/81            $186=     16?0                 341:'is_restreamer' 	;0	<<546
549 390  IS_EQUAL/17               #187=     $186                 342:1               	;0
550 390  BOOL_NOT/13               #188=     #187                 ?0                  	;0
551 390  JMPZ/43                   ?0        #188                 ?553                	;0	>>553
552 391  GOTO/253                  ?0        ?604                 ?343                	;0
553 393  GOTO/253                  ?0        ?603                 ?344                	;0	<<551
554 395  ECHO/40                   ?0        345:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <a href="javascript: void(0);" onClick="clearOwner();" class="btn btn-warning" style="width: 100%">Clear</a>
                                                    </div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="exp_date">Expiry</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="' ?0                  	;0
555 396  ISSET_ISEMPTY_CV/197      #189=     16?0                 ?0                  	;33554432
556 396  JMPZ/43                   ?0        #189                 ?558                	;0	>>558
557 397  GOTO/253                  ?0        ?567                 ?346                	;0
558 399  INIT_FCALL_BY_NAME/59     ?0        ?0                   347:'date'          	;2	<<556
559 399  SEND_VAL_EX/116           ?80       349:'Y-m-d H:i:s'    ?1                  	;0
560 399  INIT_FCALL_BY_NAME/59     ?0        ?0                   350:'time'          	;0
561 399  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
562 399  ADD/1                     #191=     $190                 352:2592000         	;0
563 399  SEND_VAL_EX/116           ?96       #191                 ?2                  	;0
564 399  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
565 399  ECHO/40                   ?0        $192                 ?0                  	;0
566 400  GOTO/253                  ?0        ?193                 ?353                	;0
567 402  GOTO/253                  ?0        ?1                   ?354                	;0
568 404  ISSET_ISEMPTY_CV/197      #193=     16?0                 ?0                  	;33554432
569 404  BOOL_NOT/13               #194=     #193                 ?0                  	;0
570 404  JMPZ/43                   ?0        #194                 ?572                	;0	>>572
571 405  GOTO/253                  ?0        ?586                 ?355                	;0
572 407  INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'json_decode'   	;2	<<570
573 407  FETCH_DIM_FUNC_ARG/93     $195=     16?0                 358:'allowed_ips'   	;1
574 407  SEND_VAR_EX/66            ?80       $195                 ?1                  	;0
575 407  SEND_VAL_EX/116           ?96       359:true             ?2                  	;0
576 407  DO_FCALL_BY_NAME/131      $196=     ?0                   ?0                  	;0
577 407  FE_RESET_R/77             $197=     $196                 ?585                	;0
578 407  FE_FETCH_R/78             ?0        $197                 16?12               	;585	>>585	<<584
579 408  ECHO/40                   ?0        360:'														<option value="' ?0                  	;0
580 409  ECHO/40                   ?0        16?12                ?0                  	;0
581 410  ECHO/40                   ?0        361:'">'             ?0                  	;0
582 411  ECHO/40                   ?0        16?12                ?0                  	;0
583 412  ECHO/40                   ?0        362:'</option>
														' ?0                  	;0
584 413  JMP/42                    ?0        ?578                 ?0                  	;0	>>578
585 413  FE_FREE/127               ?0        $197                 ?0                  	;0	<<577
586 417  ECHO/40                   ?0        363:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ua_field">Allowed User-Agents</label>
													<div class="col-md-8 input-group">
														<input type="text" id="ua_field" class="form-control" value="">
														<div class="input-group-append">
															<a href="javascript:void(0)" id="add_ua" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>
															<a href="javascript:void(0)" id="remove_ua" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
														</div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="allowed_ua">&nbsp;</label>
													<div class="col-md-8">
														<select id="allowed_ua" name="allowed_ua[]" size=6 class="form-control" multiple="multiple">
														' ?0                  	;0
587 418  GOTO/253                  ?0        ?456                 ?364                	;0
588 420  INIT_FCALL_BY_NAME/59     ?0        ?0                   365:'header'        	;1
589 420  INIT_FCALL_BY_NAME/59     ?0        ?0                   367:'intval'        	;1
590 420  INIT_METHOD_CALL/112      ?0        16?1                 369:'get_row'       	;0
591 420  DO_FCALL/60               $198=     ?0                   ?0                  	;0
592 420  SEPARATE/156              $198=     $198                 ?0                  	;0
593 420  FETCH_DIM_FUNC_ARG/93     $199=     $198                 371:'device_id'     	;1
594 420  SEND_VAR_EX/66            ?80       $199                 ?1                  	;0
595 420  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
596 420  CONCAT/8                  #201=     372:'Location: enigma?id=' $200                	;0
597 420  SEND_VAL_EX/116           ?80       #201                 ?1                  	;0
598 420  DO_FCALL_BY_NAME/131      ?188      ?0                   ?0                  	;0
599 424  INIT_FCALL_BY_NAME/59     ?0        ?0                   373:'B36cE90E79FB0E76'	;0
600 424  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
601 424  ASSIGN/38                 ?190      16?13                $203                	;0
602 425  GOTO/253                  ?0        ?275                 ?375                	;0
603 427  ECHO/40                   ?0        376:'checked '       ?0                  	;0
604 430  ECHO/40                   ?0        377:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_trial">Trial Account</label>
													<div class="col-md-2">
														<input name="is_trial" id="is_trial" type="checkbox" ' ?0                  	;0
605 431  ISSET_ISEMPTY_CV/197      #205=     16?0                 ?0                  	;33554432
606 431  BOOL_NOT/13               #206=     #205                 ?0                  	;0
607 431  JMPZ/43                   ?0        #206                 ?609                	;0	>>609
608 432  GOTO/253                  ?0        ?527                 ?378                	;0
609 434  GOTO/253                  ?0        ?521                 ?379                	;0	<<607
610 436  ECHO/40                   ?0        380:'1'              ?0                  	;0
611 437  GOTO/253                  ?0        ?617                 ?381                	;0
612 439  INIT_FCALL_BY_NAME/59     ?0        ?0                   382:'htmlspecialchars'	;1
613 439  FETCH_DIM_FUNC_ARG/93     $207=     16?0                 384:'max_connections'	;1
614 439  SEND_VAR_EX/66            ?80       $207                 ?1                  	;0
615 439  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
616 439  ECHO/40                   ?0        $208                 ?0                  	;0
617 441  GOTO/253                  ?0        ?244                 ?385                	;0
618 443  ISSET_ISEMPTY_CV/197      #209=     16?0                 ?0                  	;33554432
619 443  BOOL_NOT/13               #210=     #209                 ?0                  	;0
620 443  JMPZ/43                   ?0        #210                 ?622                	;0	>>622
621 444  GOTO/253                  ?0        ?628                 ?386                	;0
622 446  FETCH_DIM_R/81            $211=     16?0                 387:'bypass_ua'     	;0	<<620
623 446  IS_EQUAL/17               #212=     $211                 388:1               	;0
624 446  BOOL_NOT/13               #213=     #212                 ?0                  	;0
625 446  JMPZ/43                   ?0        #213                 ?627                	;0	>>627
626 447  GOTO/253                  ?0        ?628                 ?389                	;0
627 449  ECHO/40                   ?0        390:'checked '       ?0                  	;0	<<625
628 452  GOTO/253                  ?0        ?105                 ?391                	;0
629 454  INCLUDE_OR_EVAL/73        ?200      392:'session.php'    ?0                  	;2	<<0
630 455  INCLUDE_OR_EVAL/73        ?201      393:'functions.php'  ?0                  	;2
631 456  INIT_FCALL_BY_NAME/59     ?0        ?0                   394:'e6D500E19634d513'	;0
632 456  DO_FCALL_BY_NAME/131      $216=     ?0                   ?0                  	;0
633 456  JMPZ/43                   ?0        $216                 ?635                	;0	>>635
634 457  GOTO/253                  ?0        ?637                 ?396                	;0
635 459  INIT_FCALL_BY_NAME/59     ?0        ?0                   397:'e72f42A93714Ba87'	;0	<<633
636 459  DO_FCALL_BY_NAME/131      ?203      ?0                   ?0                  	;0
637 461  GOTO/253                  ?0        ?529                 ?399                	;0
638 463  ISSET_ISEMPTY_CV/197      #218=     16?0                 ?0                  	;33554432
639 463  BOOL_NOT/13               #219=     #218                 ?0                  	;0
640 463  JMPZ/43                   ?0        #219                 ?642                	;0	>>642
641 464  GOTO/253                  ?0        ?647                 ?400                	;0
642 466  INIT_FCALL_BY_NAME/59     ?0        ?0                   401:'htmlspecialchars'	;1	<<640
643 466  FETCH_DIM_FUNC_ARG/93     $220=     16?0                 403:'admin_notes'   	;1
644 466  SEND_VAR_EX/66            ?80       $220                 ?1                  	;0
645 466  DO_FCALL_BY_NAME/131      $221=     ?0                   ?0                  	;0
646 466  ECHO/40                   ?0        $221                 ?0                  	;0
647 468  ECHO/40                   ?0        404:'</textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>
													<div class="col-md-8">
														<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
648 469  ISSET_ISEMPTY_CV/197      #222=     16?0                 ?0                  	;33554432
649 469  BOOL_NOT/13               #223=     #222                 ?0                  	;0
650 469  JMPZ/43                   ?0        #223                 ?652                	;0	>>652
651 470  GOTO/253                  ?0        ?230                 ?405                	;0
652 472  GOTO/253                  ?0        ?225                 ?406                	;0	<<650
653 474  ECHO/40                   ?0        407:' style="display: none;"' ?0                  	;0
654 476  ECHO/40                   ?0        408:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
655 477  INCLUDE_OR_EVAL/73        ?210      409:'topbar.php'     ?0                  	;2
656 478  ECHO/40                   ?0        410:'					</div>
					<h4 class="page-title">' ?0                  	;0
657 479  GOTO/253                  ?0        ?206                 ?411                	;0
658 481  INCLUDE_OR_EVAL/73        ?211      412:'footer.php'     ?0                  	;2
659 482  NOP/0                     ?0        413:1                ?0                  	;4294967295
*/

?>