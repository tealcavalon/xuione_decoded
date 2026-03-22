<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?732                 ?0                  	;0	>>732
1   5    ECHO/40                   ?0        1:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="is_reseller">' ?0                  	;0
2   6    FETCH_DIM_R/81            $13=      16?0                 2:'is_reseller'     	;0
3   6    ECHO/40                   ?0        $13                  ?0                  	;0
4   7    ECHO/40                   ?0        3:'</label>
													<div class="col-md-2">
														<input name="is_reseller" id="is_reseller" type="checkbox" ' ?0                  	;0
5   8    ISSET_ISEMPTY_CV/197      #14=      16?1                 ?0                  	;33554432
6   8    BOOL_NOT/13               #15=      #14                  ?0                  	;0
7   8    JMPZ/43                   ?0        #15                  ?9                  	;0	>>9
8   9    GOTO/253                  ?0        ?414                 ?4                  	;0
9   11   FETCH_DIM_R/81            $16=      16?1                 5:'is_reseller'     	;0	<<7
10  11   BOOL_NOT/13               #17=      $16                  ?0                  	;0
11  11   JMPZ/43                   ?0        #17                  ?13                 	;0	>>13
12  12   GOTO/253                  ?0        ?630                 ?6                  	;0
13  14   GOTO/253                  ?0        ?629                 ?7                  	;0	<<11
14  16   ECHO/40                   ?0        8:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="group_name" name="group_name" value="' ?0                  	;0
15  17   ISSET_ISEMPTY_CV/197      #18=      16?1                 ?0                  	;33554432
16  17   BOOL_NOT/13               #19=      #18                  ?0                  	;0
17  17   JMPZ/43                   ?0        #19                  ?19                 	;0	>>19
18  18   GOTO/253                  ?0        ?24                  ?9                  	;0
19  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'htmlspecialchars'	;1	<<17
20  20   FETCH_DIM_FUNC_ARG/93     $20=      16?1                 12:'group_name'     	;1
21  20   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
22  20   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
23  20   ECHO/40                   ?0        $21                  ?0                  	;0
24  22   ECHO/40                   ?0        13:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_admin">' ?0                  	;0
25  23   GOTO/253                  ?0        ?608                 ?14                 	;0
26  25   INIT_METHOD_CALL/112      ?0        16?2                 15:'query'          	;2
27  25   SEND_VAL_EX/116           ?80       17:'SELECT `id` FROM `users_packages` WHERE JSON_CONTAINS(`groups`, ?, \'$\');' ?1                  	;0
28  25   FETCH_DIM_FUNC_ARG/93     $22=      16?1                 18:'group_id'       	;2
29  25   SEND_VAR_EX/66            ?96       $22                  ?2                  	;0
30  25   DO_FCALL/60               ?10       ?0                   ?0                  	;0
31  26   INIT_METHOD_CALL/112      ?0        16?2                 19:'get_rows'       	;0
32  26   DO_FCALL/60               $24=      ?0                   ?0                  	;0
33  26   FE_RESET_R/77             $25=      $24                  ?39                 	;0
34  26   FE_FETCH_R/78             ?0        $25                  16?3                	;39	>>39	<<38
35  27   FETCH_DIM_R/81            $27=      16?3                 21:'id'             	;0
36  27   ASSIGN_DIM/147            ?13       16?4                 ?4414262            	;0
37  27   OP_DATA/137               ?0        $27                  ?0                  	;0
38  28   JMP/42                    ?0        ?34                  ?0                  	;0	>>34
39  28   FE_FREE/127               ?0        $25                  ?0                  	;0	<<33
40  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'json_decode'    	;2
41  31   FETCH_DIM_FUNC_ARG/93     $28=      16?1                 24:'subresellers'   	;1
42  31   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
43  31   SEND_VAL_EX/116           ?96       25:true              ?2                  	;0
44  31   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
45  31   ASSIGN/38                 ?17       16?5                 $29                 	;0
46  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'html_entity_decode'	;1
47  32   FETCH_DIM_FUNC_ARG/93     $31=      16?1                 28:'notice_html'    	;1
48  32   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
49  32   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
50  32   ASSIGN/38                 ?20       16?6                 $32                 	;0
51  33   GOTO/253                  ?0        ?489                 ?29                 	;0
52  35   ECHO/40                   ?0        30:'" />
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="subreseller">
										<div class="row">
											<div class="col-12">
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-10 col-form-label" for="create_sub_resellers">Allow Subreseller Creation</label>
													<div class="col-md-2 mb-4">
														<input name="create_sub_resellers" id="create_sub_resellers" type="checkbox" ' ?0                  	;0
53  36   ISSET_ISEMPTY_CV/197      #34=      16?1                 ?0                  	;33554432
54  36   BOOL_NOT/13               #35=      #34                  ?0                  	;0
55  36   JMPZ/43                   ?0        #35                  ?57                 	;0	>>57
56  37   GOTO/253                  ?0        ?142                 ?31                 	;0
57  39   FETCH_DIM_R/81            $36=      16?1                 32:'create_sub_resellers'	;0	<<55
58  39   BOOL_NOT/13               #37=      $36                  ?0                  	;0
59  39   JMPZ/43                   ?0        #37                  ?61                 	;0	>>61
60  40   GOTO/253                  ?0        ?62                  ?33                 	;0
61  42   ECHO/40                   ?0        34:'checked '        ?0                  	;0	<<59
62  44   GOTO/253                  ?0        ?142                 ?35                 	;0
63  48   ECHO/40                   ?0        36:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="allow_change_password">Change Passwords</label>
													<div class="col-md-2">
														<input name="allow_change_password" id="allow_change_password" type="checkbox" ' ?0                  	;0
64  49   ISSET_ISEMPTY_CV/197      #38=      16?1                 ?0                  	;33554432
65  49   JMPZ/43                   ?0        #38                  ?67                 	;0	>>67
66  50   GOTO/253                  ?0        ?543                 ?37                 	;0
67  52   ECHO/40                   ?0        38:'checked '        ?0                  	;0	<<65
68  53   GOTO/253                  ?0        ?542                 ?39                 	;0
69  55   ECHO/40                   ?0        40:'data-plugin="switchery" class="js-switch" data-color="#414d5f"/>
													</div>
													<label class="col-md-4 col-form-label" for="allow_change_bouquets">Allow Bouquet Editing</label>
													<div class="col-md-2">
														<input name="allow_change_bouquets" id="allow_change_bouquets" type="checkbox" ' ?0                  	;0
70  56   ISSET_ISEMPTY_CV/197      #39=      16?1                 ?0                  	;33554432
71  56   BOOL_NOT/13               #40=      #39                  ?0                  	;0
72  56   JMPZ/43                   ?0        #40                  ?74                 	;0	>>74
73  57   GOTO/253                  ?0        ?520                 ?41                 	;0
74  59   FETCH_DIM_R/81            $41=      16?1                 42:'allow_change_bouquets'	;0	<<72
75  59   BOOL_NOT/13               #42=      $41                  ?0                  	;0
76  59   JMPZ/43                   ?0        #42                  ?78                 	;0	>>78
77  60   GOTO/253                  ?0        ?79                  ?43                 	;0
78  62   ECHO/40                   ?0        44:'checked '        ?0                  	;0	<<76
79  64   GOTO/253                  ?0        ?520                 ?45                 	;0
80  66   GOTO/253                  ?0        ?86                  ?46                 	;0
81  68   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'intval'         	;1
82  68   FETCH_DIM_FUNC_ARG/93     $43=      16?1                 49:'total_allowed_gen_trials'	;1
83  68   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
84  68   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
85  68   ECHO/40                   ?0        $44                  ?0                  	;0
86  70   ECHO/40                   ?0        50:'" required data-parsley-trigger="change">
													</div>
													<label class="col-md-4 col-form-label" for="total_allowed_gen_in">' ?0                  	;0
87  71   GOTO/253                  ?0        ?316                 ?51                 	;0
88  73   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'preg_replace'   	;3
89  73   SEND_VAL_EX/116           ?80       54:'#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?expression[\\x00-\\x20]*\\([^>]*+>#i' ?1                  	;0
90  73   SEND_VAL_EX/116           ?96       55:'$1>'             ?2                  	;0
91  73   SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
92  73   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
93  73   ASSIGN/38                 ?33       16?6                 $45                 	;0
94  74   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'preg_replace'   	;3
95  74   SEND_VAL_EX/116           ?80       58:'#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?behaviour[\\x00-\\x20]*\\([^>]*+>#i' ?1                  	;0
96  74   SEND_VAL_EX/116           ?96       59:'$1>'             ?2                  	;0
97  74   SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
98  74   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
99  74   ASSIGN/38                 ?35       16?6                 $47                 	;0
100 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'preg_replace'   	;3
101 75   SEND_VAL_EX/116           ?80       62:'#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:*[^>]*+>#iu' ?1                  	;0
102 75   SEND_VAL_EX/116           ?96       63:'$1>'             ?2                  	;0
103 75   SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
104 75   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
105 75   ASSIGN/38                 ?37       16?6                 $49                 	;0
106 77   ASSIGN/38                 ?38       16?7                 64:'Group'          	;0
107 78   GOTO/253                  ?0        ?238                 ?65                 	;0
108 82   ECHO/40                   ?0        66:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="allow_download">Show M3U Download</label>
													<div class="col-md-2">
														<input name="allow_download" id="allow_download" type="checkbox" ' ?0                  	;0
109 83   ISSET_ISEMPTY_CV/197      #52=      16?1                 ?0                  	;33554432
110 83   JMPZ/43                   ?0        #52                  ?112                	;0	>>112
111 84   GOTO/253                  ?0        ?529                 ?67                 	;0
112 86   ECHO/40                   ?0        68:'checked '        ?0                  	;0	<<110
113 87   GOTO/253                  ?0        ?528                 ?69                 	;0
114 90   ECHO/40                   ?0        70:'" />
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="permissions">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													' ?0                  	;0
115 91   FETCH_DIM_R/81            $53=      16?0                 71:'advanced_permissions_info'	;0
116 91   ECHO/40                   ?0        $53                  ?0                  	;0
117 92   ECHO/40                   ?0        72:'												</p>
												<div class="form-group row mb-4">
													<table id="datatable-permissions" class="table table-borderless mb-0">
														<thead class="bg-light">
															<tr>
																<th style="display:none;">' ?0                  	;0
118 93   FETCH_DIM_R/81            $54=      16?0                 73:'id'             	;0
119 93   ECHO/40                   ?0        $54                  ?0                  	;0
120 94   GOTO/253                  ?0        ?665                 ?74                 	;0
121 96   ECHO/40                   ?0        75:'checked '        ?0                  	;0
122 97   GOTO/253                  ?0        ?441                 ?76                 	;0
123 99   FETCH_DIM_R/81            $55=      16?1                 77:'can_view_vod'   	;0
124 99   BOOL_NOT/13               #56=      $55                  ?0                  	;0
125 99   JMPZ/43                   ?0        #56                  ?127                	;0	>>127
126 100  GOTO/253                  ?0        ?441                 ?78                 	;0
127 102  ECHO/40                   ?0        79:'checked '        ?0                  	;0	<<125
128 103  GOTO/253                  ?0        ?441                 ?80                 	;0
129 105  ECHO/40                   ?0        81:'</th>
																<th>' ?0                  	;0
130 106  FETCH_DIM_R/81            $57=      16?0                 82:'package_name'   	;0
131 106  ECHO/40                   ?0        $57                  ?0                  	;0
132 107  ECHO/40                   ?0        83:'</th>
                                                                <th class="text-center">' ?0                  	;0
133 108  FETCH_DIM_R/81            $58=      16?0                 84:'trial'          	;0
134 108  ECHO/40                   ?0        $58                  ?0                  	;0
135 109  ECHO/40                   ?0        85:'</th>
                                                                <th class="text-center">' ?0                  	;0
136 110  GOTO/253                  ?0        ?549                 ?86                 	;0
137 112  GOTO/253                  ?0        ?140                 ?87                 	;0
138 114  FETCH_DIM_R/81            $59=      16?0                 88:'edit_group'     	;0
139 114  ECHO/40                   ?0        $59                  ?0                  	;0
140 116  ECHO/40                   ?0        89:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
141 117  GOTO/253                  ?0        ?270                 ?90                 	;0
142 120  ECHO/40                   ?0        91:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<table id="datatable-groups" class="table table-striped table-borderless mb-0">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
143 121  FETCH_DIM_R/81            $60=      16?0                 92:'id'             	;0
144 121  ECHO/40                   ?0        $60                  ?0                  	;0
145 122  ECHO/40                   ?0        93:'</th>
																<th>Group Name</th>
                                                                <th class="text-center">Allowed Subresellers</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
146 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'Ad052a625c6ac011'	;0
147 123  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
148 123  FE_RESET_R/77             $62=      $61                  ?204                	;0
149 123  FE_FETCH_R/78             ?0        $62                  16?8                	;204	>>204	<<203
150 124  NOP/0                     ?0        ?0                   ?0                  	;1
151 124  GOTO/253                  ?0        ?175                 ?96                 	;0
152 126  ECHO/40                   ?0        97:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0
153 128  ECHO/40                   ?0        98:'>
																<td class="text-center">' ?0                  	;0
154 129  FETCH_DIM_R/81            $63=      16?8                 99:'group_id'       	;0
155 129  ECHO/40                   ?0        $63                  ?0                  	;0
156 130  ECHO/40                   ?0        100:'</td>
																<td>' ?0                  	;0
157 131  NOP/0                     ?0        ?0                   ?0                  	;1
158 131  GOTO/253                  ?0        ?163                 ?101                	;0
159 134  ECHO/40                   ?0        102:'                                                                    <i class=\'text-success mdi mdi-circle\'></i>
                                                                    ' ?0                  	;0
160 136  ECHO/40                   ?0        103:'                                                                </td>
															</tr>
															' ?0                  	;0
161 138  NOP/0                     ?0        ?0                   ?0                  	;1
162 138  GOTO/253                  ?0        ?203                 ?104                	;0
163 140  FETCH_DIM_R/81            $64=      16?8                 105:'group_name'    	;0
164 140  ECHO/40                   ?0        $64                  ?0                  	;0
165 141  ECHO/40                   ?0        106:'</td>
                                                                <td class="text-center">
                                                                    ' ?0                  	;0
166 142  FETCH_DIM_R/81            $65=      16?8                 107:'create_sub_resellers'	;0
167 142  JMPZ/43                   ?0        $65                  ?170                	;0	>>170
168 143  NOP/0                     ?0        ?0                   ?0                  	;1
169 143  GOTO/253                  ?0        ?159                 ?108                	;0
170 145  ECHO/40                   ?0        109:'                                                                    <i class=\'text-secondary mdi mdi-circle\'></i>
                                                                    ' ?0                  	;0	<<167
171 146  NOP/0                     ?0        ?0                   ?0                  	;1
172 146  GOTO/253                  ?0        ?160                 ?110                	;0
173 147  NOP/0                     ?0        ?0                   ?0                  	;1
174 147  GOTO/253                  ?0        ?159                 ?111                	;0
175 149  FETCH_DIM_R/81            $66=      16?8                 112:'is_reseller'   	;0
176 149  BOOL_NOT/13               #67=      $66                  ?0                  	;0
177 149  JMPNZ_EX/47               #67=      #67                  ?185                	;0	>>185
178 149  ISSET_ISEMPTY_CV/197      #68=      16?1                 ?0                  	;33554432
179 149  JMPZ_EX/46                #68=      #68                  ?184                	;0	>>184
180 149  FETCH_DIM_R/81            $69=      16?1                 113:'group_id'      	;0
181 149  FETCH_DIM_R/81            $70=      16?8                 114:'group_id'      	;0
182 149  IS_EQUAL/17               #71=      $69                  $70                 	;0
183 149  BOOL/52                   #68=      #71                  ?0                  	;0
184 149  BOOL/52                   #67=      #68                  ?0                  	;0	<<179
185 149  BOOL_NOT/13               #72=      #67                  ?0                  	;0	<<177
186 149  JMPZ/43                   ?0        #72                  ?189                	;0	>>189
187 150  NOP/0                     ?0        ?0                   ?0                  	;1
188 150  GOTO/253                  ?0        ?191                 ?115                	;0
189 152  NOP/0                     ?0        ?0                   ?0                  	;1	<<186
190 152  GOTO/253                  ?0        ?161                 ?116                	;0
191 154  ECHO/40                   ?0        117:'															<tr' ?0                  	;0
192 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'in_array'      	;2
193 155  FETCH_DIM_FUNC_ARG/93     $73=      16?8                 120:'group_id'      	;1
194 155  SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
195 155  SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
196 155  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
197 155  BOOL_NOT/13               #75=      $74                  ?0                  	;0
198 155  JMPZ/43                   ?0        #75                  ?201                	;0	>>201
199 156  NOP/0                     ?0        ?0                   ?0                  	;1
200 156  GOTO/253                  ?0        ?153                 ?121                	;0
201 158  NOP/0                     ?0        ?0                   ?0                  	;1	<<198
202 158  GOTO/253                  ?0        ?152                 ?122                	;0
203 159  JMP/42                    ?0        ?149                 ?0                  	;0	>>149
204 159  FE_FREE/127               ?0        $62                  ?0                  	;0	<<148
205 161  GOTO/253                  ?0        ?446                 ?123                	;0
206 163  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'html_entity_decode'	;3
207 163  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
208 163  FETCH_CONSTANT/99         #76=      ?0                   126:'ENT_COMPAT'    	;16
209 163  SEND_VAL_EX/116           ?96       #76                  ?2                  	;0
210 163  SEND_VAL_EX/116           ?112      129:'UTF-8'          ?3                  	;0
211 163  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
212 163  ASSIGN/38                 ?65       16?6                 $77                 	;0
213 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   130:'preg_replace'  	;3
214 164  SEND_VAL_EX/116           ?80       132:'#(<[^>]+?[\\x00-\\x20"\'])(?:on|xmlns)[^>]*+[>\\b]?#iu' ?1                  	;0
215 164  SEND_VAL_EX/116           ?96       133:'$1>'            ?2                  	;0
216 164  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
217 164  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
218 164  ASSIGN/38                 ?67       16?6                 $79                 	;0
219 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'preg_replace'  	;3
220 165  SEND_VAL_EX/116           ?80       136:'#([a-z]*)[\\x00-\\x20]*=[\\x00-\\x20]*([`\'"]*)[\\x00-\\x20]*j[\\x00-\\x20]*a[\\x00-\\x20]*v[\\x00-\\x20]*a[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu' ?1                  	;0
221 165  SEND_VAL_EX/116           ?96       137:'$1=$2nojavascript...' ?2                  	;0
222 165  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
223 165  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
224 165  ASSIGN/38                 ?69       16?6                 $81                 	;0
225 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'preg_replace'  	;3
226 166  SEND_VAL_EX/116           ?80       140:'#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*v[\\x00-\\x20]*b[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu' ?1                  	;0
227 166  SEND_VAL_EX/116           ?96       141:'$1=$2novbscript...' ?2                  	;0
228 166  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
229 166  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
230 166  ASSIGN/38                 ?71       16?6                 $83                 	;0
231 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'preg_replace'  	;3
232 167  SEND_VAL_EX/116           ?80       144:'#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*-moz-binding[\\x00-\\x20]*:#u' ?1                  	;0
233 167  SEND_VAL_EX/116           ?96       145:'$1=$2nomozbinding...' ?2                  	;0
234 167  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
235 167  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
236 167  ASSIGN/38                 ?73       16?6                 $85                 	;0
237 168  GOTO/253                  ?0        ?88                  ?146                	;0
238 170  INCLUDE_OR_EVAL/73        ?74       147:'header.php'     ?0                  	;2
239 171  ECHO/40                   ?0        148:'<div class="wrapper boxed-layout"' ?0                  	;0
240 172  FETCH_IS/89               $88=      149:'_SERVER'        ?0                  	;0
241 172  ISSET_ISEMPTY_DIM_OBJ/115 #89=      $88                  150:'HTTP_X_REQUESTED_WITH'	;16777216
242 172  BOOL_NOT/13               #90=      #89                  ?0                  	;0
243 172  JMPZ_EX/46                #90=      #90                  ?251                	;0	>>251
244 172  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'strtolower'    	;1
245 172  FETCH_FUNC_ARG/92         $91=      153:'_SERVER'        ?0                  	;1
246 172  FETCH_DIM_FUNC_ARG/93     $92=      $91                  154:'HTTP_X_REQUESTED_WITH'	;1
247 172  SEND_VAR_EX/66            ?80       $92                  ?1                  	;0
248 172  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
249 172  IS_EQUAL/17               #94=      $93                  155:'xmlhttprequest'	;0
250 172  BOOL/52                   #90=      #94                  ?0                  	;0
251 172  BOOL_NOT/13               #95=      #90                  ?0                  	;0	<<243
252 172  JMPZ/43                   ?0        #95                  ?254                	;0	>>254
253 173  GOTO/253                  ?0        ?255                 ?156                	;0
254 175  ECHO/40                   ?0        157:' style="display: none;"' ?0                  	;0	<<252
255 177  GOTO/253                  ?0        ?688                 ?158                	;0
256 179  GOTO/253                  ?0        ?262                 ?159                	;0
257 181  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'intval'        	;1
258 181  FETCH_DIM_FUNC_ARG/93     $96=      16?1                 162:'minimum_username_length'	;1
259 181  SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
260 181  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
261 181  ECHO/40                   ?0        $97                  ?0                  	;0
262 183  ECHO/40                   ?0        163:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-4 col-form-label" for="minimum_password_length">Minimum Password Length</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="minimum_password_length" name="minimum_password_length" value="' ?0                  	;0
263 184  GOTO/253                  ?0        ?643                 ?164                	;0
264 186  ECHO/40                   ?0        165:'checked '       ?0                  	;0
265 189  ECHO/40                   ?0        166:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="allow_change_username">Change Usernames</label>
													<div class="col-md-2">
														<input name="allow_change_username" id="allow_change_username" type="checkbox" ' ?0                  	;0
266 190  ISSET_ISEMPTY_CV/197      #98=      16?1                 ?0                  	;33554432
267 190  JMPZ/43                   ?0        #98                  ?269                	;0	>>269
268 191  GOTO/253                  ?0        ?766                 ?167                	;0
269 193  GOTO/253                  ?0        ?764                 ?168                	;0	<<267
270 195  ISSET_ISEMPTY_CV/197      #99=      16?1                 ?0                  	;33554432
271 195  BOOL_NOT/13               #100=     #99                  ?0                  	;0
272 195  JMPZ/43                   ?0        #100                 ?274                	;0	>>274
273 196  GOTO/253                  ?0        ?278                 ?169                	;0
274 198  ECHO/40                   ?0        170:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<272
275 199  FETCH_DIM_R/81            $101=     16?1                 171:'group_id'      	;0
276 199  ECHO/40                   ?0        $101                 ?0                  	;0
277 200  ECHO/40                   ?0        172:'" />
							'   ?0                  	;0
278 202  GOTO/253                  ?0        ?279                 ?173                	;0
279 204  ECHO/40                   ?0        174:'							<input type="hidden" name="permissions_selected" id="permissions_selected" value="" />
                            <input type="hidden" name="packages_selected" id="packages_selected" value="" />
                            <input type="hidden" name="groups_selected" id="groups_selected" value="" />
                            <input type="hidden" name="notice_html" id="notice_html" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#group-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
280 205  FETCH_DIM_R/81            $102=     16?0                 175:'details'       	;0
281 205  ECHO/40                   ?0        $102                 ?0                  	;0
282 206  ECHO/40                   ?0        176:'</span>
										</a>
									</li>
                                    <li class="nav-item" id="package_tab">
										<a href="#packages" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-package mr-1"></i>
											<span class="d-none d-sm-inline">Packages</span>
										</a>
									</li>
									<li class="nav-item" id="reseller_tab">
										<a href="#reseller" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-badge-outline mr-1"></i>
											<span class="d-none d-sm-inline">Permissions</span>
										</a>
									</li>
                                    <li class="nav-item" id="subreseller_tab">
										<a href="#subreseller" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-multiple-outline mr-1"></i>
											<span class="d-none d-sm-inline">Subresellers</span>
										</a>
									</li>
                                    <li class="nav-item" id="notice_tab">
										<a href="#notice" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-note mr-1"></i>
											<span class="d-none d-sm-inline">Dashboard</span>
										</a>
									</li>
									' ?0                  	;0
283 207  ISSET_ISEMPTY_CV/197      #103=     16?1                 ?0                  	;33554432
284 207  BOOL_NOT/13               #104=     #103                 ?0                  	;0
285 207  JMPNZ_EX/47               #104=     #104                 ?288                	;0	>>288
286 207  FETCH_DIM_R/81            $105=     16?1                 177:'can_delete'    	;0
287 207  BOOL/52                   #104=     $105                 ?0                  	;0
288 207  BOOL_NOT/13               #106=     #104                 ?0                  	;0	<<285
289 207  JMPZ/43                   ?0        #106                 ?291                	;0	>>291
290 208  GOTO/253                  ?0        ?760                 ?178                	;0
291 210  ECHO/40                   ?0        179:'									<li class="nav-item"  id="admin_tab">
										<a href="#permissions" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-badge-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0	<<289
292 211  GOTO/253                  ?0        ?757                 ?180                	;0
293 213  FETCH_STATIC_PROP_IS/176  $107=     181:'rRequest'       182:'XUI'           	;0
294 213  ISSET_ISEMPTY_DIM_OBJ/115 #108=     $107                 184:'id'            	;33554432
295 213  JMPZ_EX/46                #108=     #108                 ?304                	;0	>>304
296 213  INIT_FCALL_BY_NAME/59     ?0        ?0                   185:'a752238c4005cBBc'	;1
297 213  FETCH_STATIC_PROP_FUNC_ARG/177 $109=     187:'rRequest'       188:'XUI'           	;1
298 213  FETCH_DIM_FUNC_ARG/93     $110=     $109                 190:'id'            	;1
299 213  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
300 213  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
301 213  ASSIGN/38                 $112=     16?1                 $111                	;0
302 213  BOOL_NOT/13               #113=     $112                 ?0                  	;0
303 213  BOOL/52                   #108=     #113                 ?0                  	;0
304 213  BOOL_NOT/13               #114=     #108                 ?0                  	;0	<<295
305 213  JMPZ/43                   ?0        #114                 ?307                	;0	>>307
306 214  GOTO/253                  ?0        ?309                 ?191                	;0
307 216  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'e72f42A93714BA87'	;0	<<305
308 216  DO_FCALL_BY_NAME/131      ?102      ?0                   ?0                  	;0
309 218  ASSIGN/38                 $116=     16?4                 194:array (
)       	;0
310 218  ASSIGN/38                 ?104      16?5                 $116                	;0
311 219  ISSET_ISEMPTY_CV/197      #118=     16?1                 ?0                  	;33554432
312 219  BOOL_NOT/13               #119=     #118                 ?0                  	;0
313 219  JMPZ/43                   ?0        #119                 ?315                	;0	>>315
314 220  GOTO/253                  ?0        ?106                 ?195                	;0
315 222  GOTO/253                  ?0        ?26                  ?196                	;0	<<313
316 224  FETCH_DIM_R/81            $120=     16?0                 197:'allowed_trials_in'	;0
317 224  ECHO/40                   ?0        $120                 ?0                  	;0
318 225  ECHO/40                   ?0        198:'</label>
													<div class="col-md-2">
														<select name="total_allowed_gen_in" id="total_allowed_gen_in" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
319 226  FE_RESET_R/77             $121=     199:array (
  0 => 'Day',
  1 => 'Month',
) ?354                	;0
320 226  FE_FETCH_R/78             ?0        $121                 16?9                	;354	>>354	<<353
321 227  NOP/0                     ?0        ?0                   ?0                  	;1
322 227  GOTO/253                  ?0        ?335                 ?200                	;0
323 229  ECHO/40                   ?0        201:'</option>
															' ?0                  	;0
324 231  NOP/0                     ?0        ?0                   ?0                  	;1
325 231  GOTO/253                  ?0        ?353                 ?202                	;0
326 234  ECHO/40                   ?0        203:'value="'        ?0                  	;0
327 235  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'strtolower'    	;1
328 235  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
329 235  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
330 235  ECHO/40                   ?0        $122                 ?0                  	;0
331 236  ECHO/40                   ?0        206:'">'             ?0                  	;0
332 237  ECHO/40                   ?0        16?9                 ?0                  	;0
333 238  NOP/0                     ?0        ?0                   ?0                  	;1
334 238  GOTO/253                  ?0        ?323                 ?207                	;0
335 240  ECHO/40                   ?0        208:'															<option ' ?0                  	;0
336 241  ISSET_ISEMPTY_CV/197      #123=     16?1                 ?0                  	;33554432
337 241  BOOL_NOT/13               #124=     #123                 ?0                  	;0
338 241  JMPZ/43                   ?0        #124                 ?341                	;0	>>341
339 242  NOP/0                     ?0        ?0                   ?0                  	;1
340 242  GOTO/253                  ?0        ?326                 ?209                	;0
341 244  FETCH_DIM_R/81            $125=     16?1                 210:'total_allowed_gen_in'	;0	<<338
342 244  INIT_FCALL_BY_NAME/59     ?0        ?0                   211:'strtolower'    	;1
343 244  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
344 244  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
345 244  IS_EQUAL/17               #127=     $125                 $126                	;0
346 244  BOOL_NOT/13               #128=     #127                 ?0                  	;0
347 244  JMPZ/43                   ?0        #128                 ?350                	;0	>>350
348 245  NOP/0                     ?0        ?0                   ?0                  	;1
349 245  GOTO/253                  ?0        ?351                 ?213                	;0
350 247  ECHO/40                   ?0        214:'selected '      ?0                  	;0	<<347
351 249  NOP/0                     ?0        ?0                   ?0                  	;1
352 249  GOTO/253                  ?0        ?326                 ?215                	;0
353 250  JMP/42                    ?0        ?320                 ?0                  	;0	>>320
354 250  FE_FREE/127               ?0        $121                 ?0                  	;0	<<319
355 253  ECHO/40                   ?0        216:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="minimum_trial_credits">' ?0                  	;0
356 254  GOTO/253                  ?0        ?656                 ?217                	;0
357 256  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'htmlspecialchars'	;1
358 256  FETCH_DIM_FUNC_ARG/93     $129=     16?1                 220:'create_sub_resellers_price'	;1
359 256  SEND_VAR_EX/66            ?80       $129                 ?1                  	;0
360 256  DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
361 256  ECHO/40                   ?0        $130                 ?0                  	;0
362 258  ECHO/40                   ?0        221:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="minimum_username_length">Minimum Username Length</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="minimum_username_length" name="minimum_username_length" value="' ?0                  	;0
363 259  ISSET_ISEMPTY_CV/197      #131=     16?1                 ?0                  	;33554432
364 259  JMPZ/43                   ?0        #131                 ?366                	;0	>>366
365 260  GOTO/253                  ?0        ?257                 ?222                	;0
366 262  ECHO/40                   ?0        223:'8'              ?0                  	;0	<<364
367 263  GOTO/253                  ?0        ?256                 ?224                	;0
368 265  FE_RESET_R/77             $132=     16?10                ?408                	;0
369 265  FE_FETCH_R/78             ?0        $132                 16?11               	;408	>>408	<<407
370 266  NOP/0                     ?0        ?0                   ?0                  	;1
371 266  GOTO/253                  ?0        ?385                 ?225                	;0
372 268  ECHO/40                   ?0        226:'</td>
															</tr>
															' ?0                  	;0
373 270  NOP/0                     ?0        ?0                   ?0                  	;1
374 270  GOTO/253                  ?0        ?407                 ?227                	;0
375 272  FETCH_DIM_R/81            $133=     16?11                228:0               	;0
376 272  ECHO/40                   ?0        $133                 ?0                  	;0
377 273  ECHO/40                   ?0        229:'</td>
																<td>' ?0                  	;0
378 274  FETCH_DIM_R/81            $134=     16?11                230:1               	;0
379 274  ECHO/40                   ?0        $134                 ?0                  	;0
380 275  ECHO/40                   ?0        231:'</td>
																<td>' ?0                  	;0
381 276  FETCH_DIM_R/81            $135=     16?11                232:2               	;0
382 276  ECHO/40                   ?0        $135                 ?0                  	;0
383 277  NOP/0                     ?0        ?0                   ?0                  	;1
384 277  GOTO/253                  ?0        ?372                 ?233                	;0
385 279  ECHO/40                   ?0        234:'															<tr' ?0                  	;0
386 280  ISSET_ISEMPTY_CV/197      #136=     16?1                 ?0                  	;33554432
387 280  JMPZ_EX/46                #136=     #136                 ?399                	;0	>>399
388 280  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'in_array'      	;2
389 280  FETCH_DIM_FUNC_ARG/93     $137=     16?11                237:0               	;1
390 280  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
391 280  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'json_decode'   	;2
392 280  FETCH_DIM_FUNC_ARG/93     $138=     16?1                 240:'allowed_pages' 	;1
393 280  SEND_VAR_EX/66            ?80       $138                 ?1                  	;0
394 280  SEND_VAL_EX/116           ?96       241:true             ?2                  	;0
395 280  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
396 280  SEND_VAR_NO_REF_EX/50     ?96       $139                 ?2                  	;0
397 280  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
398 280  BOOL/52                   #136=     $140                 ?0                  	;0
399 280  BOOL_NOT/13               #141=     #136                 ?0                  	;0	<<387
400 280  JMPZ/43                   ?0        #141                 ?403                	;0	>>403
401 281  NOP/0                     ?0        ?0                   ?0                  	;1
402 281  GOTO/253                  ?0        ?404                 ?242                	;0
403 283  ECHO/40                   ?0        243:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0	<<400
404 285  ECHO/40                   ?0        244:'>
																<td style="display:none;">' ?0                  	;0
405 286  NOP/0                     ?0        ?0                   ?0                  	;1
406 286  GOTO/253                  ?0        ?375                 ?245                	;0
407 287  JMP/42                    ?0        ?369                 ?0                  	;0	>>369
408 287  FE_FREE/127               ?0        $132                 ?0                  	;0	<<368
409 290  ECHO/40                   ?0        246:'														</tbody>
													</table>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
410 291  FETCH_DIM_R/81            $142=     16?0                 247:'prev'          	;0
411 291  ECHO/40                   ?0        $142                 ?0                  	;0
412 292  ECHO/40                   ?0        248:'</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript: void(0);" onClick="selectAll()" class="btn btn-info">' ?0                  	;0
413 293  GOTO/253                  ?0        ?713                 ?249                	;0
414 296  ECHO/40                   ?0        250:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<input name="submit_group" type="submit" class="btn btn-primary" value="' ?0                  	;0
415 297  ISSET_ISEMPTY_CV/197      #143=     16?1                 ?0                  	;33554432
416 297  JMPZ/43                   ?0        #143                 ?418                	;0	>>418
417 298  GOTO/253                  ?0        ?483                 ?251                	;0
418 300  FETCH_DIM_R/81            $144=     16?0                 252:'add'           	;0	<<416
419 300  ECHO/40                   ?0        $144                 ?0                  	;0
420 301  GOTO/253                  ?0        ?485                 ?253                	;0
421 302  GOTO/253                  ?0        ?483                 ?254                	;0
422 305  FETCH_DIM_R/81            $145=     16?1                 255:'allow_restrictions'	;0
423 305  BOOL_NOT/13               #146=     $145                 ?0                  	;0
424 305  JMPZ/43                   ?0        #146                 ?426                	;0	>>426
425 306  GOTO/253                  ?0        ?427                 ?256                	;0
426 308  ECHO/40                   ?0        257:'checked '       ?0                  	;0	<<424
427 311  GOTO/253                  ?0        ?69                  ?258                	;0
428 313  FETCH_DIM_R/81            $147=     16?0                 259:'add'           	;0
429 313  ECHO/40                   ?0        $147                 ?0                  	;0
430 314  GOTO/253                  ?0        ?433                 ?260                	;0
431 316  FETCH_DIM_R/81            $148=     16?0                 261:'edit'          	;0
432 316  ECHO/40                   ?0        $148                 ?0                  	;0
433 318  GOTO/253                  ?0        ?681                 ?262                	;0
434 320  ECHO/40                   ?0        263:'</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="create_sub_resellers_price" name="create_sub_resellers_price" value="' ?0                  	;0
435 321  ISSET_ISEMPTY_CV/197      #149=     16?1                 ?0                  	;33554432
436 321  JMPZ/43                   ?0        #149                 ?438                	;0	>>438
437 322  GOTO/253                  ?0        ?440                 ?264                	;0
438 324  ECHO/40                   ?0        265:'0'              ?0                  	;0	<<436
439 325  GOTO/253                  ?0        ?362                 ?266                	;0
440 327  GOTO/253                  ?0        ?357                 ?267                	;0
441 331  ECHO/40                   ?0        268:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="reseller_client_connection_logs">' ?0                  	;0
442 332  FETCH_DIM_R/81            $150=     16?0                 269:'can_view_live_connections'	;0
443 332  ECHO/40                   ?0        $150                 ?0                  	;0
444 333  ECHO/40                   ?0        270:'</label>
													<div class="col-md-2">
														<input name="reseller_client_connection_logs" id="reseller_client_connection_logs" type="checkbox" ' ?0                  	;0
445 334  GOTO/253                  ?0        ?747                 ?271                	;0
446 337  ECHO/40                   ?0        272:'														</tbody>
													</table>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
447 338  FETCH_DIM_R/81            $151=     16?0                 273:'prev'          	;0
448 338  ECHO/40                   ?0        $151                 ?0                  	;0
449 339  ECHO/40                   ?0        274:'</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_group" type="submit" class="btn btn-primary" value="' ?0                  	;0
450 340  ISSET_ISEMPTY_CV/197      #152=     16?1                 ?0                  	;33554432
451 340  JMPZ/43                   ?0        #152                 ?453                	;0	>>453
452 341  GOTO/253                  ?0        ?431                 ?275                	;0
453 343  GOTO/253                  ?0        ?428                 ?276                	;0	<<451
454 345  ECHO/40                   ?0        277:'												</p>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="total_allowed_gen_trials">' ?0                  	;0
455 346  FETCH_DIM_R/81            $153=     16?0                 278:'allowed_trials'	;0
456 346  ECHO/40                   ?0        $153                 ?0                  	;0
457 347  ECHO/40                   ?0        279:'</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="total_allowed_gen_trials" name="total_allowed_gen_trials" value="' ?0                  	;0
458 348  ISSET_ISEMPTY_CV/197      #154=     16?1                 ?0                  	;33554432
459 348  JMPZ/43                   ?0        #154                 ?461                	;0	>>461
460 349  GOTO/253                  ?0        ?81                  ?280                	;0
461 351  ECHO/40                   ?0        281:'0'              ?0                  	;0	<<459
462 352  GOTO/253                  ?0        ?80                  ?282                	;0
463 355  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'intval'        	;1
464 355  FETCH_DIM_FUNC_ARG/93     $155=     16?1                 285:'minimum_trial_credits'	;1
465 355  SEND_VAR_EX/66            ?80       $155                 ?1                  	;0
466 355  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
467 355  ECHO/40                   ?0        $156                 ?0                  	;0
468 357  ECHO/40                   ?0        286:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-4 col-form-label" for="create_sub_resellers_price">' ?0                  	;0
469 358  FETCH_DIM_R/81            $157=     16?0                 287:'subreseller_price'	;0
470 358  ECHO/40                   ?0        $157                 ?0                  	;0
471 359  GOTO/253                  ?0        ?434                 ?288                	;0
472 361  FETCH_DIM_R/81            $158=     16?0                 289:'add'           	;0
473 361  ECHO/40                   ?0        $158                 ?0                  	;0
474 362  GOTO/253                  ?0        ?477                 ?290                	;0
475 364  FETCH_DIM_R/81            $159=     16?0                 291:'edit'          	;0
476 364  ECHO/40                   ?0        $159                 ?0                  	;0
477 366  GOTO/253                  ?0        ?52                  ?292                	;0
478 369  FETCH_DIM_R/81            $160=     16?1                 293:'can_delete'    	;0
479 369  JMPZ/43                   ?0        $160                 ?481                	;0	>>481
480 370  GOTO/253                  ?0        ?482                 ?294                	;0
481 372  ECHO/40                   ?0        295:'disabled '      ?0                  	;0	<<479
482 375  GOTO/253                  ?0        ?1                   ?296                	;0
483 378  FETCH_DIM_R/81            $161=     16?0                 297:'edit'          	;0
484 378  ECHO/40                   ?0        $161                 ?0                  	;0
485 380  ECHO/40                   ?0        298:'" />
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="packages">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<table id="datatable-packages" class="table table-striped table-borderless mb-0">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
486 381  FETCH_DIM_R/81            $162=     16?0                 299:'id'            	;0
487 381  ECHO/40                   ?0        $162                 ?0                  	;0
488 382  GOTO/253                  ?0        ?129                 ?300                	;0
489 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'preg_replace'  	;3
490 384  SEND_VAL_EX/116           ?80       303:'#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i' ?1                  	;0
491 384  SEND_VAL_EX/116           ?96       304:''               ?2                  	;0
492 384  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
493 384  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
494 384  ASSIGN/38                 ?151      16?6                 $163                	;0
495 385  INIT_FCALL_BY_NAME/59     ?0        ?0                   305:'preg_replace'  	;3
496 385  SEND_VAL_EX/116           ?80       307:'#</*\\w+:\\w[^>]*+>#i' ?1                  	;0
497 385  SEND_VAL_EX/116           ?96       308:''               ?2                  	;0
498 385  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
499 385  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
500 385  ASSIGN/38                 ?153      16?6                 $165                	;0
501 386  INIT_FCALL_BY_NAME/59     ?0        ?0                   309:'str_replace'   	;3
502 386  SEND_VAL_EX/116           ?80       311:array (
  0 => '&amp;',
  1 => '&lt;',
  2 => '&gt;',
) ?1                  	;0
503 386  SEND_VAL_EX/116           ?96       312:array (
  0 => '&amp;amp;',
  1 => '&amp;lt;',
  2 => '&amp;gt;',
) ?2                  	;0
504 386  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
505 386  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
506 386  ASSIGN/38                 ?155      16?6                 $167                	;0
507 387  INIT_FCALL_BY_NAME/59     ?0        ?0                   313:'preg_replace'  	;3
508 387  SEND_VAL_EX/116           ?80       315:'/(&#*\\w+)[\\x00-\\x20]+;/u' ?1                  	;0
509 387  SEND_VAL_EX/116           ?96       316:'$1;'            ?2                  	;0
510 387  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
511 387  DO_FCALL_BY_NAME/131      $169=     ?0                   ?0                  	;0
512 387  ASSIGN/38                 ?157      16?6                 $169                	;0
513 388  INIT_FCALL_BY_NAME/59     ?0        ?0                   317:'preg_replace'  	;3
514 388  SEND_VAL_EX/116           ?80       319:'/(&#x*[0-9A-F]+);*/iu' ?1                  	;0
515 388  SEND_VAL_EX/116           ?96       320:'$1;'            ?2                  	;0
516 388  SEND_VAR_EX/66            ?112      16?6                 ?3                  	;0
517 388  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
518 388  ASSIGN/38                 ?159      16?6                 $171                	;0
519 389  GOTO/253                  ?0        ?206                 ?321                	;0
520 392  ECHO/40                   ?0        322:'data-plugin="switchery" class="js-switch" data-color="#414d5f"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="delete_users">' ?0                  	;0
521 393  FETCH_DIM_R/81            $173=     16?0                 323:'can_delete_users'	;0
522 393  ECHO/40                   ?0        $173                 ?0                  	;0
523 394  ECHO/40                   ?0        324:'</label>
													<div class="col-md-2">
														<input name="delete_users" id="delete_users" type="checkbox" ' ?0                  	;0
524 395  ISSET_ISEMPTY_CV/197      #174=     16?1                 ?0                  	;33554432
525 395  JMPZ/43                   ?0        #174                 ?527                	;0	>>527
526 396  GOTO/253                  ?0        ?675                 ?325                	;0
527 398  GOTO/253                  ?0        ?673                 ?326                	;0	<<525
528 400  GOTO/253                  ?0        ?635                 ?327                	;0
529 402  FETCH_DIM_R/81            $175=     16?1                 328:'allow_download'	;0
530 402  BOOL_NOT/13               #176=     $175                 ?0                  	;0
531 402  JMPZ/43                   ?0        #176                 ?533                	;0	>>533
532 403  GOTO/253                  ?0        ?534                 ?329                	;0
533 405  ECHO/40                   ?0        330:'checked '       ?0                  	;0	<<531
534 407  GOTO/253                  ?0        ?635                 ?331                	;0
535 410  ECHO/40                   ?0        332:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="allow_restrictions">Allow Line Restrictions</label>
													<div class="col-md-2">
														<input name="allow_restrictions" id="allow_restrictions" type="checkbox" ' ?0                  	;0
536 411  ISSET_ISEMPTY_CV/197      #177=     16?1                 ?0                  	;33554432
537 411  JMPZ/43                   ?0        #177                 ?539                	;0	>>539
538 412  GOTO/253                  ?0        ?422                 ?333                	;0
539 414  ECHO/40                   ?0        334:'checked '       ?0                  	;0	<<537
540 415  GOTO/253                  ?0        ?427                 ?335                	;0
541 416  GOTO/253                  ?0        ?422                 ?336                	;0
542 418  GOTO/253                  ?0        ?621                 ?337                	;0
543 420  FETCH_DIM_R/81            $178=     16?1                 338:'allow_change_password'	;0
544 420  BOOL_NOT/13               #179=     $178                 ?0                  	;0
545 420  JMPZ/43                   ?0        #179                 ?547                	;0	>>547
546 421  GOTO/253                  ?0        ?548                 ?339                	;0
547 423  ECHO/40                   ?0        340:'checked '       ?0                  	;0	<<545
548 425  GOTO/253                  ?0        ?621                 ?341                	;0
549 427  FETCH_DIM_R/81            $180=     16?0                 342:'official'      	;0
550 427  ECHO/40                   ?0        $180                 ?0                  	;0
551 428  ECHO/40                   ?0        343:'</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
552 429  INIT_FCALL_BY_NAME/59     ?0        ?0                   344:'D8c8284136938eF0'	;0
553 429  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
554 429  FE_RESET_R/77             $182=     $181                 ?605                	;0
555 429  FE_FETCH_R/78             ?0        $182                 16?12               	;605	>>605	<<604
556 430  NOP/0                     ?0        ?0                   ?0                  	;1
557 430  GOTO/253                  ?0        ?570                 ?346                	;0
558 432  FETCH_DIM_R/81            $183=     16?12                347:'id'            	;0
559 432  ECHO/40                   ?0        $183                 ?0                  	;0
560 433  ECHO/40                   ?0        348:'</td>
																<td>' ?0                  	;0
561 434  FETCH_DIM_R/81            $184=     16?12                349:'package_name'  	;0
562 434  ECHO/40                   ?0        $184                 ?0                  	;0
563 435  ECHO/40                   ?0        350:'</td>
                                                                <td class="text-center">
                                                                    ' ?0                  	;0
564 436  FETCH_DIM_R/81            $185=     16?12                351:'is_trial'      	;0
565 436  JMPZ/43                   ?0        $185                 ?568                	;0	>>568
566 437  NOP/0                     ?0        ?0                   ?0                  	;1
567 437  GOTO/253                  ?0        ?587                 ?352                	;0
568 439  NOP/0                     ?0        ?0                   ?0                  	;1	<<565
569 439  GOTO/253                  ?0        ?584                 ?353                	;0
570 441  ECHO/40                   ?0        354:'															<tr' ?0                  	;0
571 442  INIT_FCALL_BY_NAME/59     ?0        ?0                   355:'in_array'      	;2
572 442  FETCH_DIM_FUNC_ARG/93     $186=     16?12                357:'id'            	;1
573 442  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
574 442  SEND_VAR_EX/66            ?96       16?4                 ?2                  	;0
575 442  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
576 442  BOOL_NOT/13               #188=     $187                 ?0                  	;0
577 442  JMPZ/43                   ?0        #188                 ?580                	;0	>>580
578 443  NOP/0                     ?0        ?0                   ?0                  	;1
579 443  GOTO/253                  ?0        ?581                 ?358                	;0
580 445  ECHO/40                   ?0        359:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0	<<577
581 447  ECHO/40                   ?0        360:'>
																<td class="text-center">' ?0                  	;0
582 448  NOP/0                     ?0        ?0                   ?0                  	;1
583 448  GOTO/253                  ?0        ?558                 ?361                	;0
584 450  ECHO/40                   ?0        362:'                                                                    <i class=\'text-secondary mdi mdi-circle\'></i>
                                                                    ' ?0                  	;0
585 451  NOP/0                     ?0        ?0                   ?0                  	;1
586 451  GOTO/253                  ?0        ?588                 ?363                	;0
587 453  ECHO/40                   ?0        364:'                                                                    <i class=\'text-success mdi mdi-circle\'></i>
                                                                    ' ?0                  	;0
588 455  NOP/0                     ?0        ?0                   ?0                  	;1
589 455  GOTO/253                  ?0        ?594                 ?365                	;0
590 457  ECHO/40                   ?0        366:'                                                                    <i class=\'text-success mdi mdi-circle\'></i>
                                                                    ' ?0                  	;0
591 459  ECHO/40                   ?0        367:'                                                                </td>
															</tr>
															' ?0                  	;0
592 461  NOP/0                     ?0        ?0                   ?0                  	;1
593 461  GOTO/253                  ?0        ?604                 ?368                	;0
594 463  ECHO/40                   ?0        369:'                                                                </td>
                                                                <td class="text-center">
                                                                    ' ?0                  	;0
595 464  FETCH_DIM_R/81            $189=     16?12                370:'is_official'   	;0
596 464  JMPZ/43                   ?0        $189                 ?599                	;0	>>599
597 465  NOP/0                     ?0        ?0                   ?0                  	;1
598 465  GOTO/253                  ?0        ?602                 ?371                	;0
599 467  ECHO/40                   ?0        372:'                                                                    <i class=\'text-secondary mdi mdi-circle\'></i>
                                                                    ' ?0                  	;0	<<596
600 468  NOP/0                     ?0        ?0                   ?0                  	;1
601 468  GOTO/253                  ?0        ?591                 ?373                	;0
602 470  NOP/0                     ?0        ?0                   ?0                  	;1
603 470  GOTO/253                  ?0        ?590                 ?374                	;0
604 471  JMP/42                    ?0        ?555                 ?0                  	;0	>>555
605 471  FE_FREE/127               ?0        $182                 ?0                  	;0	<<554
606 474  ECHO/40                   ?0        375:'														</tbody>
													</table>
												</div>
											</div> 
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
607 475  GOTO/253                  ?0        ?697                 ?376                	;0
608 477  FETCH_DIM_R/81            $190=     16?0                 377:'is_admin'      	;0
609 477  ECHO/40                   ?0        $190                 ?0                  	;0
610 478  ECHO/40                   ?0        378:'</label>
													<div class="col-md-2">
														<input name="is_admin" id="is_admin" type="checkbox" ' ?0                  	;0
611 479  ISSET_ISEMPTY_CV/197      #191=     16?1                 ?0                  	;33554432
612 479  BOOL_NOT/13               #192=     #191                 ?0                  	;0
613 479  JMPZ/43                   ?0        #192                 ?615                	;0	>>615
614 480  GOTO/253                  ?0        ?482                 ?379                	;0
615 482  FETCH_DIM_R/81            $193=     16?1                 380:'is_admin'      	;0	<<613
616 482  BOOL_NOT/13               #194=     $193                 ?0                  	;0
617 482  JMPZ/43                   ?0        #194                 ?619                	;0	>>619
618 483  GOTO/253                  ?0        ?478                 ?381                	;0
619 485  ECHO/40                   ?0        382:'checked '       ?0                  	;0	<<617
620 486  GOTO/253                  ?0        ?478                 ?383                	;0
621 489  ECHO/40                   ?0        384:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
622 490  FETCH_DIM_R/81            $195=     16?0                 385:'prev'          	;0
623 490  ECHO/40                   ?0        $195                 ?0                  	;0
624 491  ECHO/40                   ?0        386:'</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_group" type="submit" class="btn btn-primary" value="' ?0                  	;0
625 492  ISSET_ISEMPTY_CV/197      #196=     16?1                 ?0                  	;33554432
626 492  JMPZ/43                   ?0        #196                 ?628                	;0	>>628
627 493  GOTO/253                  ?0        ?475                 ?387                	;0
628 495  GOTO/253                  ?0        ?472                 ?388                	;0	<<626
629 497  ECHO/40                   ?0        389:'checked '       ?0                  	;0
630 499  FETCH_DIM_R/81            $197=     16?1                 390:'can_delete'    	;0
631 499  JMPZ/43                   ?0        $197                 ?633                	;0	>>633
632 500  GOTO/253                  ?0        ?634                 ?391                	;0
633 502  ECHO/40                   ?0        392:'disabled '      ?0                  	;0	<<631
634 504  GOTO/253                  ?0        ?414                 ?393                	;0
635 507  ECHO/40                   ?0        394:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="can_view_vod">' ?0                  	;0
636 508  FETCH_DIM_R/81            $198=     16?0                 395:'can_view_vod_streams'	;0
637 508  ECHO/40                   ?0        $198                 ?0                  	;0
638 509  ECHO/40                   ?0        396:'</label>
													<div class="col-md-2">
														<input name="can_view_vod" id="can_view_vod" type="checkbox" ' ?0                  	;0
639 510  ISSET_ISEMPTY_CV/197      #199=     16?1                 ?0                  	;33554432
640 510  JMPZ/43                   ?0        #199                 ?642                	;0	>>642
641 511  GOTO/253                  ?0        ?123                 ?397                	;0
642 513  GOTO/253                  ?0        ?121                 ?398                	;0	<<640
643 515  ISSET_ISEMPTY_CV/197      #200=     16?1                 ?0                  	;33554432
644 515  JMPZ/43                   ?0        #200                 ?646                	;0	>>646
645 516  GOTO/253                  ?0        ?648                 ?399                	;0
646 518  ECHO/40                   ?0        400:'8'              ?0                  	;0	<<644
647 519  GOTO/253                  ?0        ?535                 ?401                	;0
648 521  INIT_FCALL_BY_NAME/59     ?0        ?0                   402:'htmlspecialchars'	;1
649 521  FETCH_DIM_FUNC_ARG/93     $201=     16?1                 404:'minimum_password_length'	;1
650 521  SEND_VAR_EX/66            ?80       $201                 ?1                  	;0
651 521  DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
652 521  ECHO/40                   ?0        $202                 ?0                  	;0
653 522  GOTO/253                  ?0        ?535                 ?405                	;0
654 524  ECHO/40                   ?0        406:'" />
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
655 525  GOTO/253                  ?0        ?772                 ?407                	;0
656 527  FETCH_DIM_R/81            $203=     16?0                 408:'minimum_credit_for_trials'	;0
657 527  ECHO/40                   ?0        $203                 ?0                  	;0
658 528  ECHO/40                   ?0        409:'</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="minimum_trial_credits" name="minimum_trial_credits" value="' ?0                  	;0
659 529  ISSET_ISEMPTY_CV/197      #204=     16?1                 ?0                  	;33554432
660 529  JMPZ/43                   ?0        #204                 ?662                	;0	>>662
661 530  GOTO/253                  ?0        ?463                 ?410                	;0
662 532  ECHO/40                   ?0        411:'0'              ?0                  	;0	<<660
663 533  GOTO/253                  ?0        ?468                 ?412                	;0
664 534  GOTO/253                  ?0        ?463                 ?413                	;0
665 536  ECHO/40                   ?0        414:'</th>
																<th>' ?0                  	;0
666 537  FETCH_DIM_R/81            $205=     16?0                 415:'permission'    	;0
667 537  ECHO/40                   ?0        $205                 ?0                  	;0
668 538  ECHO/40                   ?0        416:'</th>
																<th>' ?0                  	;0
669 539  FETCH_DIM_R/81            $206=     16?0                 417:'description'   	;0
670 539  ECHO/40                   ?0        $206                 ?0                  	;0
671 540  ECHO/40                   ?0        418:'</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
672 541  GOTO/253                  ?0        ?368                 ?419                	;0
673 543  ECHO/40                   ?0        420:'checked '       ?0                  	;0
674 544  GOTO/253                  ?0        ?108                 ?421                	;0
675 546  FETCH_DIM_R/81            $207=     16?1                 422:'delete_users'  	;0
676 546  BOOL_NOT/13               #208=     $207                 ?0                  	;0
677 546  JMPZ/43                   ?0        #208                 ?679                	;0	>>679
678 547  GOTO/253                  ?0        ?108                 ?423                	;0
679 549  ECHO/40                   ?0        424:'checked '       ?0                  	;0	<<677
680 550  GOTO/253                  ?0        ?108                 ?425                	;0
681 552  ECHO/40                   ?0        426:'" />
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="notice">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													Display a notice for this group when they\'ve logged into the Reseller Dashboard.
												</p>
                                                <div class="form-group row mb-4">
                                                    <div id="notice-editor" style="height: 400px;">' ?0                  	;0
682 553  ECHO/40                   ?0        16?6                 ?0                  	;0
683 554  ECHO/40                   ?0        427:'</div>
                                                </div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
684 555  FETCH_DIM_R/81            $209=     16?0                 428:'prev'          	;0
685 555  ECHO/40                   ?0        $209                 ?0                  	;0
686 556  ECHO/40                   ?0        429:'</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_group" type="submit" class="btn btn-primary" value="' ?0                  	;0
687 557  GOTO/253                  ?0        ?723                 ?430                	;0
688 559  ECHO/40                   ?0        431:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
689 560  INCLUDE_OR_EVAL/73        ?197      432:'topbar.php'     ?0                  	;2
690 561  ECHO/40                   ?0        433:'					</div>
					<h4 class="page-title">' ?0                  	;0
691 562  ISSET_ISEMPTY_CV/197      #211=     16?1                 ?0                  	;33554432
692 562  JMPZ/43                   ?0        #211                 ?694                	;0	>>694
693 563  GOTO/253                  ?0        ?138                 ?434                	;0
694 565  FETCH_DIM_R/81            $212=     16?0                 435:'add_group'     	;0	<<692
695 565  ECHO/40                   ?0        $212                 ?0                  	;0
696 566  GOTO/253                  ?0        ?137                 ?436                	;0
697 568  FETCH_DIM_R/81            $213=     16?0                 437:'prev'          	;0
698 568  ECHO/40                   ?0        $213                 ?0                  	;0
699 569  ECHO/40                   ?0        438:'</a>
											</li>
											<li class="list-inline-item float-right">
                                                <a href="javascript: void(0);" onClick="togglePackages()" class="btn btn-info">Toggle Packages</a>
												<input name="submit_group" type="submit" class="btn btn-primary" value="' ?0                  	;0
700 570  ISSET_ISEMPTY_CV/197      #214=     16?1                 ?0                  	;33554432
701 570  JMPZ/43                   ?0        #214                 ?703                	;0	>>703
702 571  GOTO/253                  ?0        ?707                 ?439                	;0
703 573  FETCH_DIM_R/81            $215=     16?0                 440:'add'           	;0	<<701
704 573  ECHO/40                   ?0        $215                 ?0                  	;0
705 574  GOTO/253                  ?0        ?709                 ?441                	;0
706 575  GOTO/253                  ?0        ?707                 ?442                	;0
707 578  FETCH_DIM_R/81            $216=     16?0                 443:'edit'          	;0
708 578  ECHO/40                   ?0        $216                 ?0                  	;0
709 580  ECHO/40                   ?0        444:'" />
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="reseller">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													' ?0                  	;0
710 581  FETCH_DIM_R/81            $217=     16?0                 445:'permissions_info'	;0
711 581  ECHO/40                   ?0        $217                 ?0                  	;0
712 582  GOTO/253                  ?0        ?454                 ?446                	;0
713 584  FETCH_DIM_R/81            $218=     16?0                 447:'select_all'    	;0
714 584  ECHO/40                   ?0        $218                 ?0                  	;0
715 585  ECHO/40                   ?0        448:'</a>
												<a href="javascript: void(0);" onClick="selectNone()" class="btn btn-warning">' ?0                  	;0
716 586  FETCH_DIM_R/81            $219=     16?0                 449:'deselect_all'  	;0
717 586  ECHO/40                   ?0        $219                 ?0                  	;0
718 587  ECHO/40                   ?0        450:'</a>
											</li>
											<li class="list-inline-item float-right">
												<input name="submit_group" type="submit" class="btn btn-primary" value="' ?0                  	;0
719 588  ISSET_ISEMPTY_CV/197      #220=     16?1                 ?0                  	;33554432
720 588  JMPZ/43                   ?0        #220                 ?722                	;0	>>722
721 589  GOTO/253                  ?0        ?744                 ?451                	;0
722 591  GOTO/253                  ?0        ?741                 ?452                	;0	<<720
723 593  ISSET_ISEMPTY_CV/197      #221=     16?1                 ?0                  	;33554432
724 593  JMPZ/43                   ?0        #221                 ?726                	;0	>>726
725 594  GOTO/253                  ?0        ?729                 ?453                	;0
726 596  FETCH_DIM_R/81            $222=     16?0                 454:'add'           	;0	<<724
727 596  ECHO/40                   ?0        $222                 ?0                  	;0
728 597  GOTO/253                  ?0        ?114                 ?455                	;0
729 599  FETCH_DIM_R/81            $223=     16?0                 456:'edit'          	;0
730 599  ECHO/40                   ?0        $223                 ?0                  	;0
731 600  GOTO/253                  ?0        ?114                 ?457                	;0
732 602  INCLUDE_OR_EVAL/73        ?211      458:'session.php'    ?0                  	;2	<<0
733 603  INCLUDE_OR_EVAL/73        ?212      459:'functions.php'  ?0                  	;2
734 604  INIT_FCALL_BY_NAME/59     ?0        ?0                   460:'e6D500e19634D513'	;0
735 604  DO_FCALL_BY_NAME/131      $226=     ?0                   ?0                  	;0
736 604  JMPZ/43                   ?0        $226                 ?738                	;0	>>738
737 605  GOTO/253                  ?0        ?740                 ?462                	;0
738 607  INIT_FCALL_BY_NAME/59     ?0        ?0                   463:'e72F42a93714Ba87'	;0	<<736
739 607  DO_FCALL_BY_NAME/131      ?214      ?0                   ?0                  	;0
740 609  GOTO/253                  ?0        ?293                 ?465                	;0
741 611  FETCH_DIM_R/81            $228=     16?0                 466:'add'           	;0
742 611  ECHO/40                   ?0        $228                 ?0                  	;0
743 612  GOTO/253                  ?0        ?746                 ?467                	;0
744 614  FETCH_DIM_R/81            $229=     16?0                 468:'edit'          	;0
745 614  ECHO/40                   ?0        $229                 ?0                  	;0
746 616  GOTO/253                  ?0        ?654                 ?469                	;0
747 618  ISSET_ISEMPTY_CV/197      #230=     16?1                 ?0                  	;33554432
748 618  JMPZ/43                   ?0        #230                 ?750                	;0	>>750
749 619  GOTO/253                  ?0        ?752                 ?470                	;0
750 621  ECHO/40                   ?0        471:'checked '       ?0                  	;0	<<748
751 622  GOTO/253                  ?0        ?265                 ?472                	;0
752 624  FETCH_DIM_R/81            $231=     16?1                 473:'reseller_client_connection_logs'	;0
753 624  BOOL_NOT/13               #232=     $231                 ?0                  	;0
754 624  JMPZ/43                   ?0        #232                 ?756                	;0	>>756
755 625  GOTO/253                  ?0        ?265                 ?474                	;0
756 627  GOTO/253                  ?0        ?264                 ?475                	;0	<<754
757 629  FETCH_DIM_R/81            $233=     16?0                 476:'admin_permissions'	;0
758 629  ECHO/40                   ?0        $233                 ?0                  	;0
759 630  ECHO/40                   ?0        477:'</span>
										</a>
									</li>
									' ?0                  	;0
760 632  ECHO/40                   ?0        478:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="group-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="group_name">' ?0                  	;0
761 633  FETCH_DIM_R/81            $234=     16?0                 479:'group_name'    	;0
762 633  ECHO/40                   ?0        $234                 ?0                  	;0
763 634  GOTO/253                  ?0        ?14                  ?480                	;0
764 636  ECHO/40                   ?0        481:'checked '       ?0                  	;0
765 637  GOTO/253                  ?0        ?63                  ?482                	;0
766 639  FETCH_DIM_R/81            $235=     16?1                 483:'allow_change_username'	;0
767 639  BOOL_NOT/13               #236=     $235                 ?0                  	;0
768 639  JMPZ/43                   ?0        #236                 ?770                	;0	>>770
769 640  GOTO/253                  ?0        ?63                  ?484                	;0
770 642  ECHO/40                   ?0        485:'checked '       ?0                  	;0	<<768
771 643  GOTO/253                  ?0        ?63                  ?486                	;0
772 645  INCLUDE_OR_EVAL/73        ?224      487:'footer.php'     ?0                  	;2
773 646  NOP/0                     ?0        488:1                ?0                  	;4294967295
*/

?>