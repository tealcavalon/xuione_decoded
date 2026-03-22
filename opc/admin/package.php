<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?278                 ?0                  	;0	>>278
1   5    ECHO/40                   ?0        1:'0'                ?0                  	;0
2   6    GOTO/253                  ?0        ?8                   ?2                  	;0
3   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'htmlspecialchars'	;1
4   8    FETCH_DIM_FUNC_ARG/93     $12=      16?0                 5:'official_duration'	;1
5   8    SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
6   8    DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
7   8    ECHO/40                   ?0        $13                  ?0                  	;0
8   10   GOTO/253                  ?0        ?349                 ?6                  	;0
9   12   ISSET_ISEMPTY_CV/197      #14=      16?0                 ?0                  	;33554432
10  12   JMPZ/43                   ?0        #14                  ?12                 	;0	>>12
11  13   GOTO/253                  ?0        ?15                  ?7                  	;0
12  15   FETCH_DIM_R/81            $15=      16?1                 8:'add'             	;0	<<10
13  15   ECHO/40                   ?0        $15                  ?0                  	;0
14  16   GOTO/253                  ?0        ?176                 ?9                  	;0
15  18   FETCH_DIM_R/81            $16=      16?1                 10:'edit'           	;0
16  18   ECHO/40                   ?0        $16                  ?0                  	;0
17  19   GOTO/253                  ?0        ?176                 ?11                 	;0
18  21   ECHO/40                   ?0        12:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="bouquets">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<table id="datatable-bouquets" class="table table-striped table-borderless mb-0">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
19  22   FETCH_DIM_R/81            $17=      16?1                 13:'id'             	;0
20  22   ECHO/40                   ?0        $17                  ?0                  	;0
21  23   ECHO/40                   ?0        14:'</th>
																<th>' ?0                  	;0
22  24   FETCH_DIM_R/81            $18=      16?1                 15:'bouquet_name'   	;0
23  24   ECHO/40                   ?0        $18                  ?0                  	;0
24  25   ECHO/40                   ?0        16:'</th>
																<th class="text-center">' ?0                  	;0
25  26   GOTO/253                  ?0        ?617                 ?17                 	;0
26  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'htmlspecialchars'	;1
27  28   FETCH_DIM_FUNC_ARG/93     $19=      16?0                 20:'package_name'   	;1
28  28   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
29  28   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
30  28   ECHO/40                   ?0        $20                  ?0                  	;0
31  30   ECHO/40                   ?0        21:'">
													</div>
												</div>
                                                <h4 class="m-t-0 header-title mb-4">Trial Package</h4>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_trial">Enabled</label>
													<div class="col-md-2">
														<input name="is_trial" id="is_trial" type="checkbox" ' ?0                  	;0
32  31   ISSET_ISEMPTY_CV/197      #21=      16?0                 ?0                  	;33554432
33  31   BOOL_NOT/13               #22=      #21                  ?0                  	;0
34  31   JMPZ/43                   ?0        #22                  ?36                 	;0	>>36
35  32   GOTO/253                  ?0        ?605                 ?22                 	;0
36  34   FETCH_DIM_R/81            $23=      16?0                 23:'is_trial'       	;0	<<34
37  34   IS_EQUAL/17               #24=      $23                  24:1                	;0
38  34   BOOL_NOT/13               #25=      #24                  ?0                  	;0
39  34   JMPZ/43                   ?0        #25                  ?41                 	;0	>>41
40  35   GOTO/253                  ?0        ?605                 ?25                 	;0
41  37   GOTO/253                  ?0        ?604                 ?26                 	;0	<<39
42  39   INCLUDE_OR_EVAL/73        ?14       27:'header.php'      ?0                  	;2
43  40   ECHO/40                   ?0        28:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
44  41   FETCH_IS/89               $27=      29:'_SERVER'         ?0                  	;0
45  41   ISSET_ISEMPTY_DIM_OBJ/115 #28=      $27                  30:'HTTP_X_REQUESTED_WITH'	;16777216
46  41   BOOL_NOT/13               #29=      #28                  ?0                  	;0
47  41   JMPZ_EX/46                #29=      #29                  ?55                 	;0	>>55
48  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'strtolower'     	;1
49  41   FETCH_FUNC_ARG/92         $30=      33:'_SERVER'         ?0                  	;1
50  41   FETCH_DIM_FUNC_ARG/93     $31=      $30                  34:'HTTP_X_REQUESTED_WITH'	;1
51  41   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
52  41   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
53  41   IS_EQUAL/17               #33=      $32                  35:'xmlhttprequest' 	;0
54  41   BOOL/52                   #29=      #33                  ?0                  	;0
55  41   BOOL_NOT/13               #34=      #29                  ?0                  	;0	<<47
56  41   JMPZ/43                   ?0        #34                  ?58                 	;0	>>58
57  42   GOTO/253                  ?0        ?59                  ?36                 	;0
58  44   ECHO/40                   ?0        37:' style="display: none;"' ?0                  	;0	<<56
59  46   GOTO/253                  ?0        ?544                 ?38                 	;0
60  48   ECHO/40                   ?0        39:'</a>
											</li>
										</ul>
									</div>
                                    <div class="tab-pane" id="options">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_mag">MAG Device</label>
													<div class="col-md-2">
														<input name="is_mag" id="is_mag" type="checkbox" ' ?0                  	;0
61  49   ISSET_ISEMPTY_CV/197      #35=      16?0                 ?0                  	;33554432
62  49   BOOL_NOT/13               #36=      #35                  ?0                  	;0
63  49   JMPZ/43                   ?0        #36                  ?65                 	;0	>>65
64  50   GOTO/253                  ?0        ?287                 ?40                 	;0
65  52   FETCH_DIM_R/81            $37=      16?0                 41:'is_mag'         	;0	<<63
66  52   IS_EQUAL/17               #38=      $37                  42:1                	;0
67  52   BOOL_NOT/13               #39=      #38                  ?0                  	;0
68  52   JMPZ/43                   ?0        #39                  ?70                 	;0	>>70
69  53   GOTO/253                  ?0        ?71                  ?43                 	;0
70  55   ECHO/40                   ?0        44:'checked '        ?0                  	;0	<<68
71  57   GOTO/253                  ?0        ?287                 ?45                 	;0
72  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'htmlspecialchars'	;1
73  60   FETCH_DIM_FUNC_ARG/93     $40=      16?0                 48:'max_connections'	;1
74  60   SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
75  60   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
76  60   ECHO/40                   ?0        $41                  ?0                  	;0
77  62   ECHO/40                   ?0        49:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="output_formats">' ?0                  	;0
78  63   FETCH_DIM_R/81            $42=      16?1                 50:'access_output'  	;0
79  63   ECHO/40                   ?0        $42                  ?0                  	;0
80  64   GOTO/253                  ?0        ?102                 ?51                 	;0
81  67   ECHO/40                   ?0        52:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>
													<div class="col-md-2">
														<input name="is_isplock" id="is_isplock" type="checkbox" ' ?0                  	;0
82  68   ISSET_ISEMPTY_CV/197      #43=      16?0                 ?0                  	;33554432
83  68   BOOL_NOT/13               #44=      #43                  ?0                  	;0
84  68   JMPZ/43                   ?0        #44                  ?86                 	;0	>>86
85  69   GOTO/253                  ?0        ?299                 ?53                 	;0
86  71   FETCH_DIM_R/81            $45=      16?0                 54:'is_isplock'     	;0	<<84
87  71   IS_EQUAL/17               #46=      $45                  55:1                	;0
88  71   BOOL_NOT/13               #47=      #46                  ?0                  	;0
89  71   JMPZ/43                   ?0        #47                  ?91                 	;0	>>91
90  72   GOTO/253                  ?0        ?299                 ?56                 	;0
91  74   ECHO/40                   ?0        57:'checked '        ?0                  	;0	<<89
92  75   GOTO/253                  ?0        ?299                 ?58                 	;0
93  77   ECHO/40                   ?0        59:'checked '        ?0                  	;0
94  78   GOTO/253                  ?0        ?335                 ?60                 	;0
95  80   FETCH_DIM_R/81            $48=      16?0                 61:'check_compatible'	;0
96  80   IS_EQUAL/17               #49=      $48                  62:1                	;0
97  80   BOOL_NOT/13               #50=      #49                  ?0                  	;0
98  80   JMPZ/43                   ?0        #50                  ?100                	;0	>>100
99  81   GOTO/253                  ?0        ?335                 ?63                 	;0
100 83   ECHO/40                   ?0        64:'checked '        ?0                  	;0	<<98
101 84   GOTO/253                  ?0        ?335                 ?65                 	;0
102 86   ECHO/40                   ?0        66:'</label>
													<div class="col-md-8">
														' ?0                  	;0
103 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'Bf80879C11cDDcc0'	;0
104 87   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
105 87   FE_RESET_R/77             $52=      $51                  ?154                	;0
106 87   FE_FETCH_R/78             ?0        $52                  16?2                	;154	>>154	<<153
107 88   NOP/0                     ?0        ?0                   ?0                  	;1
108 88   GOTO/253                  ?0        ?115                 ?69                 	;0
109 90   ECHO/40                   ?0        70:'"> '             ?0                  	;0
110 91   FETCH_DIM_R/81            $53=      16?2                 71:'output_name'    	;0
111 91   ECHO/40                   ?0        $53                  ?0                  	;0
112 92   ECHO/40                   ?0        72:' </label>
														</div>
														' ?0                  	;0
113 94   NOP/0                     ?0        ?0                   ?0                  	;1
114 94   GOTO/253                  ?0        ?153                 ?73                 	;0
115 96   ECHO/40                   ?0        74:'														<div class="checkbox form-check-inline">
															<input data-size="large" type="checkbox" id="output_formats_' ?0                  	;0
116 97   FETCH_DIM_R/81            $54=      16?2                 75:'access_output_id'	;0
117 97   ECHO/40                   ?0        $54                  ?0                  	;0
118 98   ECHO/40                   ?0        76:'" name="output_formats[]" value="' ?0                  	;0
119 99   FETCH_DIM_R/81            $55=      16?2                 77:'access_output_id'	;0
120 99   ECHO/40                   ?0        $55                  ?0                  	;0
121 100  ECHO/40                   ?0        78:'"'               ?0                  	;0
122 101  NOP/0                     ?0        ?0                   ?0                  	;1
123 101  GOTO/253                  ?0        ?124                 ?79                 	;0
124 103  ISSET_ISEMPTY_CV/197      #56=      16?0                 ?0                  	;33554432
125 103  JMPZ/43                   ?0        #56                  ?128                	;0	>>128
126 104  NOP/0                     ?0        ?0                   ?0                  	;1
127 104  GOTO/253                  ?0        ?131                 ?80                 	;0
128 106  ECHO/40                   ?0        81:' checked'        ?0                  	;0	<<125
129 107  NOP/0                     ?0        ?0                   ?0                  	;1
130 107  GOTO/253                  ?0        ?148                 ?82                 	;0
131 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'in_array'       	;2
132 109  FETCH_DIM_FUNC_ARG/93     $57=      16?2                 85:'access_output_id'	;1
133 109  SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
134 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'json_decode'    	;2
135 109  FETCH_DIM_FUNC_ARG/93     $58=      16?0                 88:'output_formats' 	;1
136 109  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
137 109  SEND_VAL_EX/116           ?96       89:true              ?2                  	;0
138 109  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
139 109  SEND_VAR_NO_REF_EX/50     ?96       $59                  ?2                  	;0
140 109  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
141 109  BOOL_NOT/13               #61=      $60                  ?0                  	;0
142 109  JMPZ/43                   ?0        #61                  ?145                	;0	>>145
143 110  NOP/0                     ?0        ?0                   ?0                  	;1
144 110  GOTO/253                  ?0        ?148                 ?90                 	;0
145 112  NOP/0                     ?0        ?0                   ?0                  	;1	<<142
146 112  GOTO/253                  ?0        ?147                 ?91                 	;0
147 114  ECHO/40                   ?0        92:' checked'        ?0                  	;0
148 117  ECHO/40                   ?0        93:' />
															<label for="output_formats_' ?0                  	;0
149 118  FETCH_DIM_R/81            $62=      16?2                 94:'access_output_id'	;0
150 118  ECHO/40                   ?0        $62                  ?0                  	;0
151 119  NOP/0                     ?0        ?0                   ?0                  	;1
152 119  GOTO/253                  ?0        ?109                 ?95                 	;0
153 120  JMP/42                    ?0        ?106                 ?0                  	;0	>>106
154 120  FE_FREE/127               ?0        $52                  ?0                  	;0	<<105
155 123  ECHO/40                   ?0        96:'													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
156 124  FETCH_DIM_R/81            $63=      16?1                 97:'prev'           	;0
157 124  ECHO/40                   ?0        $63                  ?0                  	;0
158 125  GOTO/253                  ?0        ?519                 ?98                 	;0
159 127  FETCH_DIM_R/81            $64=      16?1                 99:'max_connections'	;0
160 127  ECHO/40                   ?0        $64                  ?0                  	;0
161 128  ECHO/40                   ?0        100:'</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="max_connections" name="max_connections" value="' ?0                  	;0
162 129  ISSET_ISEMPTY_CV/197      #65=      16?0                 ?0                  	;33554432
163 129  JMPZ/43                   ?0        #65                  ?165                	;0	>>165
164 130  GOTO/253                  ?0        ?72                  ?101                	;0
165 132  ECHO/40                   ?0        102:'1'              ?0                  	;0	<<163
166 133  GOTO/253                  ?0        ?77                  ?103                	;0
167 134  GOTO/253                  ?0        ?72                  ?104                	;0
168 136  ECHO/40                   ?0        105:'0'              ?0                  	;0
169 137  GOTO/253                  ?0        ?175                 ?106                	;0
170 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'htmlspecialchars'	;1
171 139  FETCH_DIM_FUNC_ARG/93     $66=      16?0                 109:'trial_credits' 	;1
172 139  SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
173 139  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
174 139  ECHO/40                   ?0        $67                  ?0                  	;0
175 141  GOTO/253                  ?0        ?610                 ?110                	;0
176 144  ECHO/40                   ?0        111:'" />
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
177 145  GOTO/253                  ?0        ?685                 ?112                	;0
178 147  GOTO/253                  ?0        ?81                  ?113                	;0
179 149  FETCH_DIM_R/81            $68=      16?0                 114:'is_line'       	;0
180 149  IS_EQUAL/17               #69=      $68                  115:1               	;0
181 149  BOOL_NOT/13               #70=      #69                  ?0                  	;0
182 149  JMPZ/43                   ?0        #70                  ?184                	;0	>>184
183 150  GOTO/253                  ?0        ?185                 ?116                	;0
184 152  ECHO/40                   ?0        117:'checked '       ?0                  	;0	<<182
185 154  GOTO/253                  ?0        ?81                  ?118                	;0
186 156  INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'htmlspecialchars'	;1
187 156  FETCH_DIM_FUNC_ARG/93     $71=      16?0                 121:'trial_duration'	;1
188 156  SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
189 156  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
190 156  ECHO/40                   ?0        $72                  ?0                  	;0
191 158  ECHO/40                   ?0        122:'">
													</div>
													<div class="col-md-6">
														<select name="trial_duration_in" id="trial_duration_in" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
192 159  FETCH_DIM_R/81            $73=      16?1                 123:'hours'         	;0
193 159  INIT_ARRAY/71             #74=      124:'hours'          $73                 	;8
194 159  FETCH_DIM_R/81            $75=      16?1                 125:'days'          	;0
195 159  ADD_ARRAY_ELEMENT/72      #74=      126:'Days'           $75                 	;0
196 159  FE_RESET_R/77             $76=      #74                  ?226                	;0
197 159  FE_FETCH_R/78             #77=      $76                  16?3                	;226	>>226	<<225
198 159  ASSIGN/38                 ?66       16?4                 #77                 	;0
199 160  NOP/0                     ?0        ?0                   ?0                  	;1
200 160  GOTO/253                  ?0        ?201                 ?127                	;0
201 162  ECHO/40                   ?0        128:'															<option ' ?0                  	;0
202 163  ISSET_ISEMPTY_CV/197      #79=      16?0                 ?0                  	;33554432
203 163  BOOL_NOT/13               #80=      #79                  ?0                  	;0
204 163  JMPZ/43                   ?0        #80                  ?207                	;0	>>207
205 164  NOP/0                     ?0        ?0                   ?0                  	;1
206 164  GOTO/253                  ?0        ?216                 ?129                	;0
207 166  FETCH_DIM_R/81            $81=      16?0                 130:'trial_duration_in'	;0	<<204
208 166  IS_EQUAL/17               #82=      $81                  16?3                	;0
209 166  BOOL_NOT/13               #83=      #82                  ?0                  	;0
210 166  JMPZ/43                   ?0        #83                  ?213                	;0	>>213
211 167  NOP/0                     ?0        ?0                   ?0                  	;1
212 167  GOTO/253                  ?0        ?214                 ?131                	;0
213 169  ECHO/40                   ?0        132:'selected '      ?0                  	;0	<<210
214 171  NOP/0                     ?0        ?0                   ?0                  	;1
215 171  GOTO/253                  ?0        ?216                 ?133                	;0
216 174  ECHO/40                   ?0        134:'value="'        ?0                  	;0
217 175  ECHO/40                   ?0        16?3                 ?0                  	;0
218 176  ECHO/40                   ?0        135:'">'             ?0                  	;0
219 177  ECHO/40                   ?0        16?4                 ?0                  	;0
220 178  NOP/0                     ?0        ?0                   ?0                  	;1
221 178  GOTO/253                  ?0        ?222                 ?136                	;0
222 180  ECHO/40                   ?0        137:'</option>
															' ?0                  	;0
223 182  NOP/0                     ?0        ?0                   ?0                  	;1
224 182  GOTO/253                  ?0        ?225                 ?138                	;0
225 183  JMP/42                    ?0        ?197                 ?0                  	;0	>>197
226 183  FE_FREE/127               ?0        $76                  ?0                  	;0	<<196
227 186  GOTO/253                  ?0        ?637                 ?139                	;0
228 188  FETCH_DIM_R/81            $84=      16?1                 140:'group_name'    	;0
229 188  ECHO/40                   ?0        $84                  ?0                  	;0
230 189  ECHO/40                   ?0        141:'</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
231 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'aD052A625C6ac011'	;0
232 190  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
233 190  FE_RESET_R/77             $86=      $85                  ?275                	;0
234 190  FE_FETCH_R/78             ?0        $86                  16?5                	;275	>>275	<<274
235 191  NOP/0                     ?0        ?0                   ?0                  	;1
236 191  GOTO/253                  ?0        ?237                 ?144                	;0
237 193  FETCH_DIM_R/81            $87=      16?5                 145:'is_reseller'   	;0
238 193  BOOL_NOT/13               #88=      $87                  ?0                  	;0
239 193  JMPZ/43                   ?0        #88                  ?242                	;0	>>242
240 194  NOP/0                     ?0        ?0                   ?0                  	;1
241 194  GOTO/253                  ?0        ?263                 ?146                	;0
242 196  ECHO/40                   ?0        147:'															<tr' ?0                  	;0	<<239
243 197  ISSET_ISEMPTY_CV/197      #89=      16?0                 ?0                  	;33554432
244 197  JMPZ_EX/46                #89=      #89                  ?256                	;0	>>256
245 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'in_array'      	;2
246 197  FETCH_DIM_FUNC_ARG/93     $90=      16?5                 150:'group_id'      	;1
247 197  SEND_VAR_EX/66            ?80       $90                  ?1                  	;0
248 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'json_decode'   	;2
249 197  FETCH_DIM_FUNC_ARG/93     $91=      16?0                 153:'groups'        	;1
250 197  SEND_VAR_EX/66            ?80       $91                  ?1                  	;0
251 197  SEND_VAL_EX/116           ?96       154:true             ?2                  	;0
252 197  DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
253 197  SEND_VAR_NO_REF_EX/50     ?96       $92                  ?2                  	;0
254 197  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
255 197  BOOL/52                   #89=      $93                  ?0                  	;0
256 197  BOOL_NOT/13               #94=      #89                  ?0                  	;0	<<244
257 197  JMPZ/43                   ?0        #94                  ?260                	;0	>>260
258 198  NOP/0                     ?0        ?0                   ?0                  	;1
259 198  GOTO/253                  ?0        ?261                 ?155                	;0
260 200  ECHO/40                   ?0        156:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0	<<257
261 202  NOP/0                     ?0        ?0                   ?0                  	;1
262 202  GOTO/253                  ?0        ?265                 ?157                	;0
263 206  NOP/0                     ?0        ?0                   ?0                  	;1
264 206  GOTO/253                  ?0        ?274                 ?158                	;0
265 208  ECHO/40                   ?0        159:'>
																<td class="text-center">' ?0                  	;0
266 209  FETCH_DIM_R/81            $95=      16?5                 160:'group_id'      	;0
267 209  ECHO/40                   ?0        $95                  ?0                  	;0
268 210  ECHO/40                   ?0        161:'</td>
																<td>' ?0                  	;0
269 211  FETCH_DIM_R/81            $96=      16?5                 162:'group_name'    	;0
270 211  ECHO/40                   ?0        $96                  ?0                  	;0
271 212  ECHO/40                   ?0        163:'</td>
															</tr>
															' ?0                  	;0
272 213  NOP/0                     ?0        ?0                   ?0                  	;1
273 213  GOTO/253                  ?0        ?263                 ?164                	;0
274 214  JMP/42                    ?0        ?234                 ?0                  	;0	>>234
275 214  FE_FREE/127               ?0        $86                  ?0                  	;0	<<233
276 217  ECHO/40                   ?0        165:'														</tbody>
													</table>
												</div>
											</div> 
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
277 218  GOTO/253                  ?0        ?412                 ?166                	;0
278 220  INCLUDE_OR_EVAL/73        ?85       167:'session.php'    ?0                  	;2	<<0
279 221  INCLUDE_OR_EVAL/73        ?86       168:'functions.php'  ?0                  	;2
280 222  INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'E6D500e19634D513'	;0
281 222  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
282 222  JMPZ/43                   ?0        $99                  ?284                	;0	>>284
283 223  GOTO/253                  ?0        ?286                 ?171                	;0
284 225  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'E72F42A93714ba87'	;0	<<282
285 225  DO_FCALL_BY_NAME/131      ?88       ?0                   ?0                  	;0
286 227  GOTO/253                  ?0        ?393                 ?174                	;0
287 230  ECHO/40                   ?0        175:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="is_e2">Enigma Device</label>
													<div class="col-md-2">
														<input name="is_e2" id="is_e2" type="checkbox" ' ?0                  	;0
288 231  ISSET_ISEMPTY_CV/197      #101=     16?0                 ?0                  	;33554432
289 231  BOOL_NOT/13               #102=     #101                 ?0                  	;0
290 231  JMPZ/43                   ?0        #102                 ?292                	;0	>>292
291 232  GOTO/253                  ?0        ?513                 ?176                	;0
292 234  FETCH_DIM_R/81            $103=     16?0                 177:'is_e2'         	;0	<<290
293 234  IS_EQUAL/17               #104=     $103                 178:1               	;0
294 234  BOOL_NOT/13               #105=     #104                 ?0                  	;0
295 234  JMPZ/43                   ?0        #105                 ?297                	;0	>>297
296 235  GOTO/253                  ?0        ?513                 ?179                	;0
297 237  ECHO/40                   ?0        180:'checked '       ?0                  	;0	<<295
298 238  GOTO/253                  ?0        ?513                 ?181                	;0
299 242  ECHO/40                   ?0        182:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_restreamer">Restreamer</label>
													<div class="col-md-2">
														<input name="is_restreamer" id="is_restreamer" type="checkbox" ' ?0                  	;0
300 243  ISSET_ISEMPTY_CV/197      #106=     16?0                 ?0                  	;33554432
301 243  BOOL_NOT/13               #107=     #106                 ?0                  	;0
302 243  JMPZ/43                   ?0        #107                 ?304                	;0	>>304
303 244  GOTO/253                  ?0        ?554                 ?183                	;0
304 246  FETCH_DIM_R/81            $108=     16?0                 184:'is_restreamer' 	;0	<<302
305 246  IS_EQUAL/17               #109=     $108                 185:1               	;0
306 246  BOOL_NOT/13               #110=     #109                 ?0                  	;0
307 246  JMPZ/43                   ?0        #110                 ?309                	;0	>>309
308 247  GOTO/253                  ?0        ?554                 ?186                	;0
309 249  GOTO/253                  ?0        ?553                 ?187                	;0	<<307
310 252  ECHO/40                   ?0        188:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="official_credits">Credit Cost</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="official_credits" name="official_credits" onkeypress="return isNumberKey(event)" value="' ?0                  	;0
311 253  ISSET_ISEMPTY_CV/197      #111=     16?0                 ?0                  	;33554432
312 253  JMPZ/43                   ?0        #111                 ?314                	;0	>>314
313 254  GOTO/253                  ?0        ?317                 ?189                	;0
314 256  ECHO/40                   ?0        190:'0'              ?0                  	;0	<<312
315 257  GOTO/253                  ?0        ?322                 ?191                	;0
316 258  GOTO/253                  ?0        ?317                 ?192                	;0
317 261  INIT_FCALL_BY_NAME/59     ?0        ?0                   193:'htmlspecialchars'	;1
318 261  FETCH_DIM_FUNC_ARG/93     $112=     16?0                 195:'official_credits'	;1
319 261  SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
320 261  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
321 261  ECHO/40                   ?0        $113                 ?0                  	;0
322 263  ECHO/40                   ?0        196:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="official_duration">Duration</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="official_duration" name="official_duration" value="' ?0                  	;0
323 264  ISSET_ISEMPTY_CV/197      #114=     16?0                 ?0                  	;33554432
324 264  JMPZ/43                   ?0        #114                 ?326                	;0	>>326
325 265  GOTO/253                  ?0        ?3                   ?197                	;0
326 267  GOTO/253                  ?0        ?1                   ?198                	;0	<<324
327 269  ECHO/40                   ?0        199:'							<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />
                            <input type="hidden" name="groups_selected" id="groups_selected" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#package-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
328 270  FETCH_DIM_R/81            $115=     16?1                 200:'details'       	;0
329 270  ECHO/40                   ?0        $115                 ?0                  	;0
330 271  ECHO/40                   ?0        201:'</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">Options</span>
										</a>
                                    </li>
									<li class="nav-item">
										<a href="#groups" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-account-group mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
331 272  FETCH_DIM_R/81            $116=     16?1                 202:'groups'        	;0
332 272  ECHO/40                   ?0        $116                 ?0                  	;0
333 273  ECHO/40                   ?0        203:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#bouquets" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-flower-tulip mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
334 274  GOTO/253                  ?0        ?626                 ?204                	;0
335 278  ECHO/40                   ?0        205:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="force_server_id">Forced Connection <i title="Force this user to connect to a specific server. Otherwise, the server with the lowest load will be selected." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">
															<option ' ?0                  	;0
336 279  ISSET_ISEMPTY_CV/197      #117=     16?0                 ?0                  	;33554432
337 279  BOOL_NOT/13               #118=     #117                 ?0                  	;0
338 279  JMPZ/43                   ?0        #118                 ?340                	;0	>>340
339 280  GOTO/253                  ?0        ?560                 ?206                	;0
340 282  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'intval'        	;1	<<338
341 282  FETCH_DIM_FUNC_ARG/93     $119=     16?0                 209:'force_server_id'	;1
342 282  SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
343 282  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
344 282  IS_EQUAL/17               #121=     $120                 210:0               	;0
345 282  BOOL_NOT/13               #122=     #121                 ?0                  	;0
346 282  JMPZ/43                   ?0        #122                 ?348                	;0	>>348
347 283  GOTO/253                  ?0        ?560                 ?211                	;0
348 285  GOTO/253                  ?0        ?559                 ?212                	;0	<<346
349 287  ECHO/40                   ?0        213:'">
													</div>
													<div class="col-md-6">
														<select name="official_duration_in" id="official_duration_in" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
350 288  FETCH_DIM_R/81            $123=     16?1                 214:'hours'         	;0
351 288  INIT_ARRAY/71             #124=     215:'hours'          $123                	;16
352 288  FETCH_DIM_R/81            $125=     16?1                 216:'days'          	;0
353 288  ADD_ARRAY_ELEMENT/72      #124=     217:'days'           $125                	;0
354 288  FETCH_DIM_R/81            $126=     16?1                 218:'months'        	;0
355 288  ADD_ARRAY_ELEMENT/72      #124=     219:'months'         $126                	;0
356 288  FETCH_DIM_R/81            $127=     16?1                 220:'years'         	;0
357 288  ADD_ARRAY_ELEMENT/72      #124=     221:'years'          $127                	;0
358 288  FE_RESET_R/77             $128=     #124                 ?388                	;0
359 288  FE_FETCH_R/78             #129=     $128                 16?3                	;388	>>388	<<387
360 288  ASSIGN/38                 ?118      16?4                 #129                	;0
361 289  NOP/0                     ?0        ?0                   ?0                  	;1
362 289  GOTO/253                  ?0        ?372                 ?222                	;0
363 291  ECHO/40                   ?0        223:'</option>
															' ?0                  	;0
364 293  NOP/0                     ?0        ?0                   ?0                  	;1
365 293  GOTO/253                  ?0        ?387                 ?224                	;0
366 296  ECHO/40                   ?0        225:'value="'        ?0                  	;0
367 297  ECHO/40                   ?0        16?3                 ?0                  	;0
368 298  ECHO/40                   ?0        226:'">'             ?0                  	;0
369 299  ECHO/40                   ?0        16?4                 ?0                  	;0
370 300  NOP/0                     ?0        ?0                   ?0                  	;1
371 300  GOTO/253                  ?0        ?363                 ?227                	;0
372 302  ECHO/40                   ?0        228:'															<option ' ?0                  	;0
373 303  ISSET_ISEMPTY_CV/197      #131=     16?0                 ?0                  	;33554432
374 303  BOOL_NOT/13               #132=     #131                 ?0                  	;0
375 303  JMPZ/43                   ?0        #132                 ?378                	;0	>>378
376 304  NOP/0                     ?0        ?0                   ?0                  	;1
377 304  GOTO/253                  ?0        ?366                 ?229                	;0
378 306  FETCH_DIM_R/81            $133=     16?0                 230:'official_duration_in'	;0	<<375
379 306  IS_EQUAL/17               #134=     $133                 16?3                	;0
380 306  BOOL_NOT/13               #135=     #134                 ?0                  	;0
381 306  JMPZ/43                   ?0        #135                 ?384                	;0	>>384
382 307  NOP/0                     ?0        ?0                   ?0                  	;1
383 307  GOTO/253                  ?0        ?385                 ?231                	;0
384 309  ECHO/40                   ?0        232:'selected '      ?0                  	;0	<<381
385 311  NOP/0                     ?0        ?0                   ?0                  	;1
386 311  GOTO/253                  ?0        ?366                 ?233                	;0
387 312  JMP/42                    ?0        ?359                 ?0                  	;0	>>359
388 312  FE_FREE/127               ?0        $128                 ?0                  	;0	<<358
389 315  ECHO/40                   ?0        234:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
390 316  FETCH_DIM_R/81            $136=     16?1                 235:'next'          	;0
391 316  ECHO/40                   ?0        $136                 ?0                  	;0
392 317  GOTO/253                  ?0        ?60                  ?236                	;0
393 319  FETCH_STATIC_PROP_IS/176  $137=     237:'rRequest'       238:'XUI'           	;0
394 319  ISSET_ISEMPTY_DIM_OBJ/115 #138=     $137                 240:'id'            	;33554432
395 319  JMPZ_EX/46                #138=     #138                 ?404                	;0	>>404
396 319  INIT_FCALL_BY_NAME/59     ?0        ?0                   241:'FdDf8Da6ab3fE47B'	;1
397 319  FETCH_STATIC_PROP_FUNC_ARG/177 $139=     243:'rRequest'       244:'XUI'           	;1
398 319  FETCH_DIM_FUNC_ARG/93     $140=     $139                 246:'id'            	;1
399 319  SEND_VAR_EX/66            ?80       $140                 ?1                  	;0
400 319  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
401 319  ASSIGN/38                 $142=     16?0                 $141                	;0
402 319  BOOL_NOT/13               #143=     $142                 ?0                  	;0
403 319  BOOL/52                   #138=     #143                 ?0                  	;0
404 319  BOOL_NOT/13               #144=     #138                 ?0                  	;0	<<395
405 319  JMPZ/43                   ?0        #144                 ?407                	;0	>>407
406 320  GOTO/253                  ?0        ?409                 ?247                	;0
407 322  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'E72f42a93714BA87'	;0	<<405
408 322  DO_FCALL_BY_NAME/131      ?133      ?0                   ?0                  	;0
409 324  ASSIGN/38                 ?134      16?6                 250:array (
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
410 325  ASSIGN/38                 ?135      16?7                 251:'Package'       	;0
411 326  GOTO/253                  ?0        ?42                  ?252                	;0
412 328  FETCH_DIM_R/81            $148=     16?1                 253:'prev'          	;0
413 328  ECHO/40                   ?0        $148                 ?0                  	;0
414 329  ECHO/40                   ?0        254:'</a>
											</li>
											<li class="list-inline-item float-right">
                                                <a href="javascript: void(0);" onClick="toggleGroups()" class="btn btn-info">' ?0                  	;0
415 330  FETCH_DIM_R/81            $149=     16?1                 255:'toggle_groups' 	;0
416 330  ECHO/40                   ?0        $149                 ?0                  	;0
417 331  ECHO/40                   ?0        256:'</a>
												<a href="javascript: void(0);" class="btn btn-secondary nextb">' ?0                  	;0
418 332  FETCH_DIM_R/81            $150=     16?1                 257:'next'          	;0
419 332  ECHO/40                   ?0        $150                 ?0                  	;0
420 333  GOTO/253                  ?0        ?18                  ?258                	;0
421 335  GOTO/253                  ?0        ?424                 ?259                	;0
422 337  FETCH_DIM_R/81            $151=     16?1                 260:'edit_package'  	;0
423 337  ECHO/40                   ?0        $151                 ?0                  	;0
424 339  ECHO/40                   ?0        261:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
425 340  GOTO/253                  ?0        ?535                 ?262                	;0
426 342  ECHO/40                   ?0        263:'</th>
                                                                <th class="text-center">' ?0                  	;0
427 343  FETCH_DIM_R/81            $152=     16?1                 264:'stations'      	;0
428 343  ECHO/40                   ?0        $152                 ?0                  	;0
429 344  ECHO/40                   ?0        265:'</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
430 345  INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'f964b9222b35addD'	;0
431 345  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
432 345  FE_RESET_R/77             $154=     $153                 ?511                	;0
433 345  FE_FETCH_R/78             ?0        $154                 16?8                	;511	>>511	<<510
434 346  NOP/0                     ?0        ?0                   ?0                  	;1
435 346  GOTO/253                  ?0        ?436                 ?268                	;0
436 348  ECHO/40                   ?0        269:'															<tr' ?0                  	;0
437 349  ISSET_ISEMPTY_CV/197      #155=     16?0                 ?0                  	;33554432
438 349  JMPZ_EX/46                #155=     #155                 ?450                	;0	>>450
439 349  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'in_array'      	;2
440 349  FETCH_DIM_FUNC_ARG/93     $156=     16?8                 272:'id'            	;1
441 349  SEND_VAR_EX/66            ?80       $156                 ?1                  	;0
442 349  INIT_FCALL_BY_NAME/59     ?0        ?0                   273:'json_decode'   	;2
443 349  FETCH_DIM_FUNC_ARG/93     $157=     16?0                 275:'bouquets'      	;1
444 349  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
445 349  SEND_VAL_EX/116           ?96       276:true             ?2                  	;0
446 349  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
447 349  SEND_VAR_NO_REF_EX/50     ?96       $158                 ?2                  	;0
448 349  DO_FCALL_BY_NAME/131      $159=     ?0                   ?0                  	;0
449 349  BOOL/52                   #155=     $159                 ?0                  	;0
450 349  BOOL_NOT/13               #160=     #155                 ?0                  	;0	<<438
451 349  JMPZ/43                   ?0        #160                 ?454                	;0	>>454
452 350  NOP/0                     ?0        ?0                   ?0                  	;1
453 350  GOTO/253                  ?0        ?455                 ?277                	;0
454 352  ECHO/40                   ?0        278:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0	<<451
455 354  ECHO/40                   ?0        279:'>
																<td class="text-center">' ?0                  	;0
456 355  NOP/0                     ?0        ?0                   ?0                  	;1
457 355  GOTO/253                  ?0        ?470                 ?280                	;0
458 357  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'count'         	;1
459 357  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'json_decode'   	;2
460 357  FETCH_DIM_FUNC_ARG/93     $161=     16?8                 285:'bouquet_radios'	;1
461 357  SEND_VAR_EX/66            ?80       $161                 ?1                  	;0
462 357  SEND_VAL_EX/116           ?96       286:true             ?2                  	;0
463 357  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
464 357  SEND_VAR_NO_REF_EX/50     ?80       $162                 ?1                  	;0
465 357  DO_FCALL_BY_NAME/131      $163=     ?0                   ?0                  	;0
466 357  ECHO/40                   ?0        $163                 ?0                  	;0
467 358  ECHO/40                   ?0        287:'</td>
															</tr>
															' ?0                  	;0
468 360  NOP/0                     ?0        ?0                   ?0                  	;1
469 360  GOTO/253                  ?0        ?510                 ?288                	;0
470 362  FETCH_DIM_R/81            $164=     16?8                 289:'id'            	;0
471 362  ECHO/40                   ?0        $164                 ?0                  	;0
472 363  ECHO/40                   ?0        290:'</td>
																<td>' ?0                  	;0
473 364  FETCH_DIM_R/81            $165=     16?8                 291:'bouquet_name'  	;0
474 364  ECHO/40                   ?0        $165                 ?0                  	;0
475 365  ECHO/40                   ?0        292:'</td>
																<td class="text-center">' ?0                  	;0
476 366  INIT_FCALL_BY_NAME/59     ?0        ?0                   293:'count'         	;1
477 366  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'json_decode'   	;2
478 366  FETCH_DIM_FUNC_ARG/93     $166=     16?8                 297:'bouquet_channels'	;1
479 366  SEND_VAR_EX/66            ?80       $166                 ?1                  	;0
480 366  SEND_VAL_EX/116           ?96       298:true             ?2                  	;0
481 366  DO_FCALL_BY_NAME/131      $167=     ?0                   ?0                  	;0
482 366  SEND_VAR_NO_REF_EX/50     ?80       $167                 ?1                  	;0
483 366  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
484 366  ECHO/40                   ?0        $168                 ?0                  	;0
485 367  NOP/0                     ?0        ?0                   ?0                  	;1
486 367  GOTO/253                  ?0        ?487                 ?299                	;0
487 369  ECHO/40                   ?0        300:'</td>
                                                                <td class="text-center">' ?0                  	;0
488 370  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'count'         	;1
489 370  INIT_FCALL_BY_NAME/59     ?0        ?0                   303:'json_decode'   	;2
490 370  FETCH_DIM_FUNC_ARG/93     $169=     16?8                 305:'bouquet_movies'	;1
491 370  SEND_VAR_EX/66            ?80       $169                 ?1                  	;0
492 370  SEND_VAL_EX/116           ?96       306:true             ?2                  	;0
493 370  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
494 370  SEND_VAR_NO_REF_EX/50     ?80       $170                 ?1                  	;0
495 370  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
496 370  ECHO/40                   ?0        $171                 ?0                  	;0
497 371  ECHO/40                   ?0        307:'</td>
																<td class="text-center">' ?0                  	;0
498 372  INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'count'         	;1
499 372  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'json_decode'   	;2
500 372  FETCH_DIM_FUNC_ARG/93     $172=     16?8                 312:'bouquet_series'	;1
501 372  SEND_VAR_EX/66            ?80       $172                 ?1                  	;0
502 372  SEND_VAL_EX/116           ?96       313:true             ?2                  	;0
503 372  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
504 372  SEND_VAR_NO_REF_EX/50     ?80       $173                 ?1                  	;0
505 372  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
506 372  ECHO/40                   ?0        $174                 ?0                  	;0
507 373  ECHO/40                   ?0        314:'</td>
                                                                <td class="text-center">' ?0                  	;0
508 374  NOP/0                     ?0        ?0                   ?0                  	;1
509 374  GOTO/253                  ?0        ?458                 ?315                	;0
510 375  JMP/42                    ?0        ?433                 ?0                  	;0	>>433
511 375  FE_FREE/127               ?0        $154                 ?0                  	;0	<<432
512 378  GOTO/253                  ?0        ?527                 ?316                	;0
513 382  ECHO/40                   ?0        317:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_line">Standard Line</label>
													<div class="col-md-2">
														<input name="is_line" id="is_line" type="checkbox" ' ?0                  	;0
514 383  ISSET_ISEMPTY_CV/197      #175=     16?0                 ?0                  	;33554432
515 383  JMPZ/43                   ?0        #175                 ?517                	;0	>>517
516 384  GOTO/253                  ?0        ?179                 ?318                	;0
517 386  ECHO/40                   ?0        319:'checked '       ?0                  	;0	<<515
518 387  GOTO/253                  ?0        ?178                 ?320                	;0
519 389  ECHO/40                   ?0        321:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
520 390  FETCH_DIM_R/81            $176=     16?1                 322:'next'          	;0
521 390  ECHO/40                   ?0        $176                 ?0                  	;0
522 391  ECHO/40                   ?0        323:'</a>
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="groups">
                                        <div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<table id="datatable-groups" class="table table-striped table-borderless mb-0">
														<thead>
															<tr>
																<th class="text-center">' ?0                  	;0
523 392  FETCH_DIM_R/81            $177=     16?1                 324:'id'            	;0
524 392  ECHO/40                   ?0        $177                 ?0                  	;0
525 393  ECHO/40                   ?0        325:'</th>
																<th>' ?0                  	;0
526 394  GOTO/253                  ?0        ?228                 ?326                	;0
527 396  ECHO/40                   ?0        327:'														</tbody>
													</table>
												</div>
											</div> 
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
528 397  FETCH_DIM_R/81            $178=     16?1                 328:'prev'          	;0
529 397  ECHO/40                   ?0        $178                 ?0                  	;0
530 398  ECHO/40                   ?0        329:'</a>
											</li>
											<li class="list-inline-item float-right">
												<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info">' ?0                  	;0
531 399  FETCH_DIM_R/81            $179=     16?1                 330:'toggle_bouquets'	;0
532 399  ECHO/40                   ?0        $179                 ?0                  	;0
533 400  ECHO/40                   ?0        331:'</a>
												<input name="submit_package" type="submit" class="btn btn-primary" value="' ?0                  	;0
534 401  GOTO/253                  ?0        ?9                   ?332                	;0
535 403  ISSET_ISEMPTY_CV/197      #180=     16?0                 ?0                  	;33554432
536 403  BOOL_NOT/13               #181=     #180                 ?0                  	;0
537 403  JMPZ/43                   ?0        #181                 ?539                	;0	>>539
538 404  GOTO/253                  ?0        ?543                 ?333                	;0
539 406  ECHO/40                   ?0        334:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<537
540 407  FETCH_DIM_R/81            $182=     16?0                 335:'id'            	;0
541 407  ECHO/40                   ?0        $182                 ?0                  	;0
542 408  ECHO/40                   ?0        336:'" />
							'   ?0                  	;0
543 410  GOTO/253                  ?0        ?327                 ?337                	;0
544 412  ECHO/40                   ?0        338:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
545 413  INCLUDE_OR_EVAL/73        ?171      339:'topbar.php'     ?0                  	;2
546 414  ECHO/40                   ?0        340:'					</div>
					<h4 class="page-title">' ?0                  	;0
547 415  ISSET_ISEMPTY_CV/197      #184=     16?0                 ?0                  	;33554432
548 415  JMPZ/43                   ?0        #184                 ?550                	;0	>>550
549 416  GOTO/253                  ?0        ?422                 ?341                	;0
550 418  FETCH_DIM_R/81            $185=     16?1                 342:'add_package'   	;0	<<548
551 418  ECHO/40                   ?0        $185                 ?0                  	;0
552 419  GOTO/253                  ?0        ?421                 ?343                	;0
553 421  ECHO/40                   ?0        344:'checked '       ?0                  	;0
554 424  ECHO/40                   ?0        345:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-4 col-form-label" for="check_compatible">Verify Compatibility <i title="Check that the existing package is compatible with the new package when extending lines. If it is not compatible, the package will be replaced with the current date as the original expiration date." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-2">
														<input name="check_compatible" id="check_compatible" type="checkbox" ' ?0                  	;0
555 425  ISSET_ISEMPTY_CV/197      #186=     16?0                 ?0                  	;33554432
556 425  JMPZ/43                   ?0        #186                 ?558                	;0	>>558
557 426  GOTO/253                  ?0        ?95                  ?346                	;0
558 428  GOTO/253                  ?0        ?93                  ?347                	;0	<<556
559 430  ECHO/40                   ?0        348:'selected '      ?0                  	;0
560 433  ECHO/40                   ?0        349:'value="0">Disabled</option>
															' ?0                  	;0
561 434  FE_RESET_R/77             $187=     16?9                 ?602                	;0
562 434  FE_FETCH_R/78             ?0        $187                 16?10               	;602	>>602	<<601
563 435  NOP/0                     ?0        ?0                   ?0                  	;1
564 435  GOTO/253                  ?0        ?565                 ?350                	;0
565 437  ECHO/40                   ?0        351:'															<option ' ?0                  	;0
566 438  ISSET_ISEMPTY_CV/197      #188=     16?0                 ?0                  	;33554432
567 438  BOOL_NOT/13               #189=     #188                 ?0                  	;0
568 438  JMPZ/43                   ?0        #189                 ?571                	;0	>>571
569 439  NOP/0                     ?0        ?0                   ?0                  	;1
570 439  GOTO/253                  ?0        ?587                 ?352                	;0
571 441  INIT_FCALL_BY_NAME/59     ?0        ?0                   353:'intval'        	;1	<<568
572 441  FETCH_DIM_FUNC_ARG/93     $190=     16?0                 355:'force_server_id'	;1
573 441  SEND_VAR_EX/66            ?80       $190                 ?1                  	;0
574 441  DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
575 441  INIT_FCALL_BY_NAME/59     ?0        ?0                   356:'intval'        	;1
576 441  FETCH_DIM_FUNC_ARG/93     $192=     16?10                358:'id'            	;1
577 441  SEND_VAR_EX/66            ?80       $192                 ?1                  	;0
578 441  DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
579 441  IS_EQUAL/17               #194=     $191                 $193                	;0
580 441  BOOL_NOT/13               #195=     #194                 ?0                  	;0
581 441  JMPZ/43                   ?0        #195                 ?584                	;0	>>584
582 442  NOP/0                     ?0        ?0                   ?0                  	;1
583 442  GOTO/253                  ?0        ?585                 ?359                	;0
584 444  ECHO/40                   ?0        360:'selected '      ?0                  	;0	<<581
585 446  NOP/0                     ?0        ?0                   ?0                  	;1
586 446  GOTO/253                  ?0        ?587                 ?361                	;0
587 449  ECHO/40                   ?0        362:'value="'        ?0                  	;0
588 450  FETCH_DIM_R/81            $196=     16?10                363:'id'            	;0
589 450  ECHO/40                   ?0        $196                 ?0                  	;0
590 451  ECHO/40                   ?0        364:'">'             ?0                  	;0
591 452  INIT_FCALL_BY_NAME/59     ?0        ?0                   365:'htmlspecialchars'	;1
592 452  FETCH_DIM_FUNC_ARG/93     $197=     16?10                367:'server_name'   	;1
593 452  SEND_VAR_EX/66            ?80       $197                 ?1                  	;0
594 452  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
595 452  ECHO/40                   ?0        $198                 ?0                  	;0
596 453  NOP/0                     ?0        ?0                   ?0                  	;1
597 453  GOTO/253                  ?0        ?598                 ?368                	;0
598 455  ECHO/40                   ?0        369:'</option>
															' ?0                  	;0
599 457  NOP/0                     ?0        ?0                   ?0                  	;1
600 457  GOTO/253                  ?0        ?601                 ?370                	;0
601 458  JMP/42                    ?0        ?562                 ?0                  	;0	>>562
602 458  FE_FREE/127               ?0        $187                 ?0                  	;0	<<561
603 460  GOTO/253                  ?0        ?649                 ?371                	;0
604 462  ECHO/40                   ?0        372:'checked '       ?0                  	;0
605 465  ECHO/40                   ?0        373:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-4 col-form-label" for="trial_credits">Credit Cost</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="trial_credits" name="trial_credits" onkeypress="return isNumberKey(event)" value="' ?0                  	;0
606 466  ISSET_ISEMPTY_CV/197      #199=     16?0                 ?0                  	;33554432
607 466  JMPZ/43                   ?0        #199                 ?609                	;0	>>609
608 467  GOTO/253                  ?0        ?170                 ?374                	;0
609 469  GOTO/253                  ?0        ?168                 ?375                	;0	<<607
610 471  ECHO/40                   ?0        376:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="trial_duration">Duration</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="trial_duration" name="trial_duration" value="' ?0                  	;0
611 472  ISSET_ISEMPTY_CV/197      #200=     16?0                 ?0                  	;33554432
612 472  JMPZ/43                   ?0        #200                 ?614                	;0	>>614
613 473  GOTO/253                  ?0        ?616                 ?377                	;0
614 475  ECHO/40                   ?0        378:'0'              ?0                  	;0	<<612
615 476  GOTO/253                  ?0        ?191                 ?379                	;0
616 478  GOTO/253                  ?0        ?186                 ?380                	;0
617 480  FETCH_DIM_R/81            $201=     16?1                 381:'streams'       	;0
618 480  ECHO/40                   ?0        $201                 ?0                  	;0
619 481  ECHO/40                   ?0        382:'</th>
                                                                <th class="text-center">' ?0                  	;0
620 482  FETCH_DIM_R/81            $202=     16?1                 383:'movies'        	;0
621 482  ECHO/40                   ?0        $202                 ?0                  	;0
622 483  ECHO/40                   ?0        384:'</th>
																<th class="text-center">' ?0                  	;0
623 484  FETCH_DIM_R/81            $203=     16?1                 385:'series'        	;0
624 484  ECHO/40                   ?0        $203                 ?0                  	;0
625 485  GOTO/253                  ?0        ?426                 ?386                	;0
626 487  FETCH_DIM_R/81            $204=     16?1                 387:'bouquets'      	;0
627 487  ECHO/40                   ?0        $204                 ?0                  	;0
628 488  ECHO/40                   ?0        388:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="package-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="package_name">' ?0                  	;0
629 489  FETCH_DIM_R/81            $205=     16?1                 389:'package_name'  	;0
630 489  ECHO/40                   ?0        $205                 ?0                  	;0
631 490  ECHO/40                   ?0        390:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="package_name" name="package_name" value="' ?0                  	;0
632 491  ISSET_ISEMPTY_CV/197      #206=     16?0                 ?0                  	;33554432
633 491  BOOL_NOT/13               #207=     #206                 ?0                  	;0
634 491  JMPZ/43                   ?0        #207                 ?636                	;0	>>636
635 492  GOTO/253                  ?0        ?31                  ?391                	;0
636 494  GOTO/253                  ?0        ?26                  ?392                	;0	<<634
637 496  ECHO/40                   ?0        393:'														</select>
													</div>
												</div>
                                                <h4 class="m-t-0 header-title mb-4">Standard Package</h4>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="is_official">Enabled</label>
													<div class="col-md-2">
														<input name="is_official" id="is_official" type="checkbox" ' ?0                  	;0
638 497  ISSET_ISEMPTY_CV/197      #208=     16?0                 ?0                  	;33554432
639 497  BOOL_NOT/13               #209=     #208                 ?0                  	;0
640 497  JMPZ/43                   ?0        #209                 ?642                	;0	>>642
641 498  GOTO/253                  ?0        ?310                 ?394                	;0
642 500  FETCH_DIM_R/81            $210=     16?0                 395:'is_official'   	;0	<<640
643 500  IS_EQUAL/17               #211=     $210                 396:1               	;0
644 500  BOOL_NOT/13               #212=     #211                 ?0                  	;0
645 500  JMPZ/43                   ?0        #212                 ?647                	;0	>>647
646 501  GOTO/253                  ?0        ?648                 ?397                	;0
647 503  ECHO/40                   ?0        398:'checked '       ?0                  	;0	<<645
648 505  GOTO/253                  ?0        ?310                 ?399                	;0
649 508  ECHO/40                   ?0        400:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="forced_country">Forced Country <i title="Force user to connect to loadbalancer associated with the selected country." class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8">
														<select name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
650 509  FE_RESET_R/77             $213=     16?6                 ?682                	;0
651 509  FE_FETCH_R/78             ?0        $213                 16?11               	;682	>>682	<<681
652 510  NOP/0                     ?0        ?0                   ?0                  	;1
653 510  GOTO/253                  ?0        ?665                 ?401                	;0
654 513  ECHO/40                   ?0        402:'value="'        ?0                  	;0
655 514  FETCH_DIM_R/81            $214=     16?11                403:'id'            	;0
656 514  ECHO/40                   ?0        $214                 ?0                  	;0
657 515  ECHO/40                   ?0        404:'">'             ?0                  	;0
658 516  FETCH_DIM_R/81            $215=     16?11                405:'name'          	;0
659 516  ECHO/40                   ?0        $215                 ?0                  	;0
660 517  NOP/0                     ?0        ?0                   ?0                  	;1
661 517  GOTO/253                  ?0        ?662                 ?406                	;0
662 519  ECHO/40                   ?0        407:'</option>
															' ?0                  	;0
663 521  NOP/0                     ?0        ?0                   ?0                  	;1
664 521  GOTO/253                  ?0        ?681                 ?408                	;0
665 523  ECHO/40                   ?0        409:'															<option ' ?0                  	;0
666 524  ISSET_ISEMPTY_CV/197      #216=     16?0                 ?0                  	;33554432
667 524  BOOL_NOT/13               #217=     #216                 ?0                  	;0
668 524  JMPZ/43                   ?0        #217                 ?671                	;0	>>671
669 525  NOP/0                     ?0        ?0                   ?0                  	;1
670 525  GOTO/253                  ?0        ?654                 ?410                	;0
671 527  FETCH_DIM_R/81            $218=     16?0                 411:'forced_country'	;0	<<668
672 527  FETCH_DIM_R/81            $219=     16?11                412:'id'            	;0
673 527  IS_EQUAL/17               #220=     $218                 $219                	;0
674 527  BOOL_NOT/13               #221=     #220                 ?0                  	;0
675 527  JMPZ/43                   ?0        #221                 ?678                	;0	>>678
676 528  NOP/0                     ?0        ?0                   ?0                  	;1
677 528  GOTO/253                  ?0        ?679                 ?413                	;0
678 530  ECHO/40                   ?0        414:'selected '      ?0                  	;0	<<675
679 532  NOP/0                     ?0        ?0                   ?0                  	;1
680 532  GOTO/253                  ?0        ?654                 ?415                	;0
681 533  JMP/42                    ?0        ?651                 ?0                  	;0	>>651
682 533  FE_FREE/127               ?0        $213                 ?0                  	;0	<<650
683 536  ECHO/40                   ?0        416:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="max_connections">' ?0                  	;0
684 537  GOTO/253                  ?0        ?159                 ?417                	;0
685 539  INCLUDE_OR_EVAL/73        ?210      418:'footer.php'     ?0                  	;2
686 540  NOP/0                     ?0        419:1                ?0                  	;4294967295
*/

?>