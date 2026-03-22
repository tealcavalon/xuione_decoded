<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?546                 ?0                  	;0	>>546
1   5    ECHO/40                   ?0        1:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="image_version">Image Version</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="image_version" name="image_version" value="' ?0                  	;0
2   6    FETCH_DIM_R/81            $12=      16?0                 2:'image_version'   	;0
3   6    ECHO/40                   ?0        $12                  ?0                  	;0
4   7    ECHO/40                   ?0        3:'">
													</div>
													<label class="col-md-2 col-form-label" for="hw_version">HW Version</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="hw_version" name="hw_version" value="' ?0                  	;0
5   8    FETCH_DIM_R/81            $13=      16?0                 4:'hw_version'      	;0
6   8    ECHO/40                   ?0        $13                  ?0                  	;0
7   9    ECHO/40                   ?0        5:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="device_id">Primary Device ID</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="device_id" name="device_id" value="' ?0                  	;0
8   10   GOTO/253                  ?0        ?136                 ?6                  	;0
9   14   ECHO/40                   ?0        7:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                        <label class="col-md-3 col-form-label" for="is_isplock">Lock to ISP</label>
                                                        <div class="col-md-2">
                                                            <input name="is_isplock" id="is_isplock" type="checkbox" ' ?0                  	;0
10  15   ISSET_ISEMPTY_CV/197      #14=      16?0                 ?0                  	;33554432
11  15   BOOL_NOT/13               #15=      #14                  ?0                  	;0
12  15   JMPZ/43                   ?0        #15                  ?14                 	;0	>>14
13  16   GOTO/253                  ?0        ?33                  ?8                  	;0
14  18   FETCH_DIM_R/81            $16=      16?0                 9:'user'            	;0	<<12
15  18   FETCH_DIM_R/81            $17=      $16                  10:'is_isplock'     	;0
16  18   IS_EQUAL/17               #18=      $17                  11:1                	;0
17  18   BOOL_NOT/13               #19=      #18                  ?0                  	;0
18  18   JMPZ/43                   ?0        #19                  ?20                 	;0	>>20
19  19   GOTO/253                  ?0        ?33                  ?12                 	;0
20  21   GOTO/253                  ?0        ?32                  ?13                 	;0	<<18
21  23   ECHO/40                   ?0        14:'</textarea>
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
22  24   ISSET_ISEMPTY_DIM_OBJ/115 #20=      16?0                 15:'mag_id'         	;33554432
23  24   BOOL_NOT/13               #21=      #20                  ?0                  	;0
24  24   JMPZ/43                   ?0        #21                  ?26                 	;0	>>26
25  25   GOTO/253                  ?0        ?352                 ?16                 	;0
26  27   ECHO/40                   ?0        17:'									<div class="tab-pane" id="device-info">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Username</label>
													<div class="col-md-8">
														<input type="text" class="form-control sticky" id="username" name="username" value="' ?0                  	;0	<<24
27  28   FETCH_DIM_R/81            $22=      16?0                 18:'user'           	;0
28  28   FETCH_DIM_R/81            $23=      $22                  19:'username'       	;0
29  28   ECHO/40                   ?0        $23                  ?0                  	;0
30  29   ECHO/40                   ?0        20:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control sticky" id="password" name="password" value="' ?0                  	;0
31  30   GOTO/253                  ?0        ?145                 ?21                 	;0
32  32   ECHO/40                   ?0        22:'checked '        ?0                  	;0
33  35   ECHO/40                   ?0        23:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="exp_date">Expiry</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="' ?0                  	;0
34  36   ISSET_ISEMPTY_CV/197      #24=      16?0                 ?0                  	;33554432
35  36   JMPZ/43                   ?0        #24                  ?37                 	;0	>>37
36  37   GOTO/253                  ?0        ?123                 ?24                 	;0
37  39   GOTO/253                  ?0        ?114                 ?25                 	;0	<<35
38  41   GOTO/253                  ?0        ?46                  ?26                 	;0
39  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'date'           	;2
40  43   SEND_VAL_EX/116           ?80       29:'Y-m-d H:i:s'     ?1                  	;0
41  43   FETCH_DIM_FUNC_ARG/93     $25=      16?0                 30:'user'           	;2
42  43   FETCH_DIM_FUNC_ARG/93     $26=      $25                  31:'exp_date'       	;2
43  43   SEND_VAR_EX/66            ?96       $26                  ?2                  	;0
44  43   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
45  43   ECHO/40                   ?0        $27                  ?0                  	;0
46  46   GOTO/253                  ?0        ?210                 ?32                 	;0
47  48   GOTO/253                  ?0        ?49                  ?33                 	;0
48  50   ECHO/40                   ?0        34:'Edit'            ?0                  	;0
49  52   ECHO/40                   ?0        35:' MAG Device</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
50  53   GOTO/253                  ?0        ?70                  ?36                 	;0
51  55   ECHO/40                   ?0        37:'checked '        ?0                  	;0
52  56   GOTO/253                  ?0        ?102                 ?38                 	;0
53  58   FETCH_DIM_R/81            $28=      16?0                 39:'lock_device'    	;0
54  58   IS_EQUAL/17               #29=      $28                  40:1                	;0
55  58   BOOL_NOT/13               #30=      #29                  ?0                  	;0
56  58   JMPZ/43                   ?0        #30                  ?58                 	;0	>>58
57  59   GOTO/253                  ?0        ?102                 ?41                 	;0
58  61   ECHO/40                   ?0        42:'checked '        ?0                  	;0	<<56
59  62   GOTO/253                  ?0        ?102                 ?43                 	;0
60  65   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'htmlspecialchars'	;1
61  65   FETCH_DIM_FUNC_ARG/93     $31=      16?0                 46:'parent_password'	;1
62  65   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
63  65   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
64  65   ECHO/40                   ?0        $32                  ?0                  	;0
65  67   ECHO/40                   ?0        47:'">
													</div>
													<label class="col-md-3 col-form-label" for="lock_device">Device Lock</label>
													<div class="col-md-2">
														<input name="lock_device" id="lock_device" type="checkbox" ' ?0                  	;0
66  68   ISSET_ISEMPTY_CV/197      #33=      16?0                 ?0                  	;33554432
67  68   JMPZ/43                   ?0        #33                  ?69                 	;0	>>69
68  69   GOTO/253                  ?0        ?53                  ?48                 	;0
69  71   GOTO/253                  ?0        ?51                  ?49                 	;0	<<67
70  73   ISSET_ISEMPTY_DIM_OBJ/115 #34=      16?0                 50:'mag_id'         	;33554432
71  73   JMPZ_EX/46                #34=      #34                  ?75                 	;0	>>75
72  73   ISSET_ISEMPTY_CV/197      #35=      16?1                 ?0                  	;33554432
73  73   BOOL_NOT/13               #36=      #35                  ?0                  	;0
74  73   BOOL/52                   #34=      #36                  ?0                  	;0
75  73   BOOL_NOT/13               #37=      #34                  ?0                  	;0	<<71
76  73   JMPZ/43                   ?0        #37                  ?78                 	;0	>>78
77  74   GOTO/253                  ?0        ?85                  ?51                 	;0
78  76   ECHO/40                   ?0        52:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<76
79  77   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'intval'         	;1
80  77   FETCH_DIM_FUNC_ARG/93     $38=      16?0                 55:'mag_id'         	;1
81  77   SEND_VAR_EX/66            ?80       $38                  ?1                  	;0
82  77   DO_FCALL_BY_NAME/131      $39=      ?0                   ?0                  	;0
83  77   ECHO/40                   ?0        $39                  ?0                  	;0
84  78   ECHO/40                   ?0        56:'" />
							'   ?0                  	;0
85  80   GOTO/253                  ?0        ?367                 ?57                 	;0
86  82   ISSET_ISEMPTY_DIM_OBJ/115 #40=      16?0                 58:'user'           	;33554432
87  82   BOOL_NOT/13               #41=      #40                  ?0                  	;0
88  82   JMPZ/43                   ?0        #41                  ?90                 	;0	>>90
89  83   GOTO/253                  ?0        ?96                  ?59                 	;0
90  85   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'htmlspecialchars'	;1	<<88
91  85   FETCH_DIM_FUNC_ARG/93     $42=      16?0                 62:'user'           	;1
92  85   FETCH_DIM_FUNC_ARG/93     $43=      $42                  63:'isp_desc'       	;1
93  85   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
94  85   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
95  85   ECHO/40                   ?0        $44                  ?0                  	;0
96  87   ECHO/40                   ?0        64:'">
															<div class="input-group-append">
																<a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
															</div>
														</div>
													</div>
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
97  88   ISSET_ISEMPTY_CV/197      #45=      16?0                 ?0                  	;33554432
98  88   BOOL_NOT/13               #46=      #45                  ?0                  	;0
99  88   JMPZ/43                   ?0        #46                  ?101                	;0	>>101
100 89   GOTO/253                  ?0        ?194                 ?65                 	;0
101 91   GOTO/253                  ?0        ?179                 ?66                 	;0	<<99
102 95   ECHO/40                   ?0        67:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="admin_notes">Admin Notes</label>
													<div class="col-md-8">
														<textarea id="admin_notes" name="admin_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
103 96   ISSET_ISEMPTY_CV/197      #47=      16?0                 ?0                  	;33554432
104 96   BOOL_NOT/13               #48=      #47                  ?0                  	;0
105 96   JMPZ/43                   ?0        #48                  ?107                	;0	>>107
106 97   GOTO/253                  ?0        ?331                 ?68                 	;0
107 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'htmlspecialchars'	;1	<<105
108 99   FETCH_DIM_FUNC_ARG/93     $49=      16?0                 71:'user'           	;1
109 99   FETCH_DIM_FUNC_ARG/93     $50=      $49                  72:'admin_notes'    	;1
110 99   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
111 99   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
112 99   ECHO/40                   ?0        $51                  ?0                  	;0
113 100  GOTO/253                  ?0        ?331                 ?73                 	;0
114 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'date'           	;2
115 102  SEND_VAL_EX/116           ?80       76:'Y-m-d H:i:s'     ?1                  	;0
116 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'time'           	;0
117 102  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
118 102  ADD/1                     #53=      $52                  79:2592000          	;0
119 102  SEND_VAL_EX/116           ?96       #53                  ?2                  	;0
120 102  DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
121 102  ECHO/40                   ?0        $54                  ?0                  	;0
122 103  GOTO/253                  ?0        ?46                  ?80                 	;0
123 105  FETCH_DIM_IS/90           $55=      16?0                 81:'user'           	;0
124 105  ISSET_ISEMPTY_DIM_OBJ/115 #56=      $55                  82:'exp_date'       	;16777216
125 105  BOOL_NOT/13               #57=      #56                  ?0                  	;0
126 105  JMPZ/43                   ?0        #57                  ?128                	;0	>>128
127 106  GOTO/253                  ?0        ?39                  ?83                 	;0
128 108  ECHO/40                   ?0        84:'" disabled="disabled' ?0                  	;0	<<126
129 109  GOTO/253                  ?0        ?38                  ?85                 	;0
130 111  ECHO/40                   ?0        86:'">'              ?0                  	;0
131 112  FETCH_DIM_R/81            $58=      16?2                 87:'username'       	;0
132 112  ECHO/40                   ?0        $58                  ?0                  	;0
133 113  ECHO/40                   ?0        88:'</option>
                                                                ' ?0                  	;0
134 114  GOTO/253                  ?0        ?166                 ?89                 	;0
135 116  GOTO/253                  ?0        ?383                 ?90                 	;0
136 118  FETCH_DIM_R/81            $59=      16?0                 91:'device_id'      	;0
137 118  ECHO/40                   ?0        $59                  ?0                  	;0
138 119  ECHO/40                   ?0        92:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="device_id2">Secondary Device ID</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="device_id2" name="device_id2" value="' ?0                  	;0
139 120  FETCH_DIM_R/81            $60=      16?0                 93:'device_id2'     	;0
140 120  ECHO/40                   ?0        $60                  ?0                  	;0
141 121  ECHO/40                   ?0        94:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ver">Version</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="ver" name="ver" value="' ?0                  	;0
142 122  FETCH_DIM_R/81            $61=      16?0                 95:'ver'            	;0
143 122  ECHO/40                   ?0        $61                  ?0                  	;0
144 123  GOTO/253                  ?0        ?351                 ?96                 	;0
145 125  FETCH_DIM_R/81            $62=      16?0                 97:'user'           	;0
146 125  FETCH_DIM_R/81            $63=      $62                  98:'password'       	;0
147 125  ECHO/40                   ?0        $63                  ?0                  	;0
148 126  ECHO/40                   ?0        99:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="sn">Serial Number</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="sn" name="sn" value="' ?0                  	;0
149 127  FETCH_DIM_R/81            $64=      16?0                 100:'sn'            	;0
150 127  ECHO/40                   ?0        $64                  ?0                  	;0
151 128  ECHO/40                   ?0        101:'">
													</div>
													<label class="col-md-2 col-form-label" for="stb_type">STB Type</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="stb_type" name="stb_type" value="' ?0                  	;0
152 129  FETCH_DIM_R/81            $65=      16?0                 102:'stb_type'      	;0
153 129  ECHO/40                   ?0        $65                  ?0                  	;0
154 130  GOTO/253                  ?0        ?1                   ?103                	;0
155 132  ISSET_ISEMPTY_CV/197      #66=      16?0                 ?0                  	;33554432
156 132  JMPZ/43                   ?0        #66                  ?158                	;0	>>158
157 133  GOTO/253                  ?0        ?160                 ?104                	;0
158 135  ECHO/40                   ?0        105:'00:1A:79:'      ?0                  	;0	<<156
159 136  GOTO/253                  ?0        ?450                 ?106                	;0
160 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'htmlspecialchars'	;1
161 138  FETCH_DIM_FUNC_ARG/93     $67=      16?0                 109:'mac'           	;1
162 138  SEND_VAR_EX/66            ?80       $67                  ?1                  	;0
163 138  DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
164 138  ECHO/40                   ?0        $68                  ?0                  	;0
165 139  GOTO/253                  ?0        ?450                 ?110                	;0
166 142  ECHO/40                   ?0        111:'                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="javascript: void(0);" onClick="clearOwner();" class="btn btn-warning" style="width: 100%">Clear</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="is_trial">Trial Device</label>
                                                        <div class="col-md-3">
                                                            <input name="is_trial" id="is_trial" type="checkbox" ' ?0                  	;0
167 143  ISSET_ISEMPTY_CV/197      #69=      16?0                 ?0                  	;33554432
168 143  BOOL_NOT/13               #70=      #69                  ?0                  	;0
169 143  JMPZ/43                   ?0        #70                  ?171                	;0	>>171
170 144  GOTO/253                  ?0        ?9                   ?112                	;0
171 146  FETCH_DIM_R/81            $71=      16?0                 113:'user'          	;0	<<169
172 146  FETCH_DIM_R/81            $72=      $71                  114:'is_trial'      	;0
173 146  IS_EQUAL/17               #73=      $72                  115:1               	;0
174 146  BOOL_NOT/13               #74=      #73                  ?0                  	;0
175 146  JMPZ/43                   ?0        #74                  ?177                	;0	>>177
176 147  GOTO/253                  ?0        ?9                   ?116                	;0
177 149  ECHO/40                   ?0        117:'checked '       ?0                  	;0	<<175
178 150  GOTO/253                  ?0        ?9                   ?118                	;0
179 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'json_decode'   	;2
180 152  FETCH_DIM_FUNC_ARG/93     $75=      16?0                 121:'user'          	;1
181 152  FETCH_DIM_FUNC_ARG/93     $76=      $75                  122:'allowed_ips'   	;1
182 152  SEND_VAR_EX/66            ?80       $76                  ?1                  	;0
183 152  SEND_VAL_EX/116           ?96       123:true             ?2                  	;0
184 152  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
185 152  FE_RESET_R/77             $78=      $77                  ?193                	;0
186 152  FE_FETCH_R/78             ?0        $78                  16?3                	;193	>>193	<<192
187 153  ECHO/40                   ?0        124:'                                                            <option value="' ?0                  	;0
188 154  ECHO/40                   ?0        16?3                 ?0                  	;0
189 155  ECHO/40                   ?0        125:'">'             ?0                  	;0
190 156  ECHO/40                   ?0        16?3                 ?0                  	;0
191 157  ECHO/40                   ?0        126:'</option>
                                                            ' ?0                  	;0
192 158  JMP/42                    ?0        ?186                 ?0                  	;0	>>186
193 158  FE_FREE/127               ?0        $78                  ?0                  	;0	<<185
194 162  ECHO/40                   ?0        127:'                                                            </select>
                                                        </div>
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
                                                <div class="alert alert-warning" role="alert" id="bouquet_warning" style="display: none;">
                                                    This device is linked to a user, the bouquets for that user will be used.
                                                </div>
												<div class="form-group row mb-4" id="bouquets_info">
													<table id="datatable-bouquets" class="table table-borderless mb-0">
														<thead class="bg-light">
															<tr>
																<th class="text-center">ID</th>
																<th>Bouquet Name</th>
																<th class="text-center">' ?0                  	;0
195 163  FETCH_DIM_R/81            $79=      16?4                 128:'streams'       	;0
196 163  ECHO/40                   ?0        $79                  ?0                  	;0
197 164  GOTO/253                  ?0        ?375                 ?129                	;0
198 167  ISSET_ISEMPTY_CV/197      #80=      16?0                 ?0                  	;33554432
199 167  JMPZ_EX/46                #80=      #80                  ?203                	;0	>>203
200 167  ISSET_ISEMPTY_DIM_OBJ/115 #81=      16?0                 130:'user'          	;33554432
201 167  BOOL_NOT/13               #82=      #81                  ?0                  	;0
202 167  BOOL/52                   #80=      #82                  ?0                  	;0
203 167  BOOL_NOT/13               #83=      #80                  ?0                  	;0	<<199
204 167  JMPZ/43                   ?0        #83                  ?206                	;0	>>206
205 168  GOTO/253                  ?0        ?208                 ?131                	;0
206 170  ASSIGN_DIM/147            ?72       16?0                 132:'user'          	;0	<<204
207 170  OP_DATA/137               ?0        133:array (
  'bouquet' => 
  array (
  ),
) ?0                  	;0
208 172  ASSIGN/38                 ?73       16?5                 134:'MAG Device'    	;0
209 173  GOTO/253                  ?0        ?225                 ?135                	;0
210 175  ECHO/40                   ?0        136:'" data-toggle="date-picker" data-single-date-picker="true">
                                                        </div>
                                                        <label class="col-md-3 col-form-label" for="exp_date">Never Expire</label>
                                                        <div class="col-md-2">
                                                            <input name="no_expire" id="no_expire" type="checkbox" ' ?0                  	;0
211 176  ISSET_ISEMPTY_CV/197      #86=      16?0                 ?0                  	;33554432
212 176  BOOL_NOT/13               #87=      #86                  ?0                  	;0
213 176  JMPZ/43                   ?0        #87                  ?215                	;0	>>215
214 177  GOTO/253                  ?0        ?480                 ?137                	;0
215 179  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'is_null'       	;1	<<213
216 179  FETCH_DIM_FUNC_ARG/93     $88=      16?0                 140:'user'          	;1
217 179  FETCH_DIM_FUNC_ARG/93     $89=      $88                  141:'exp_date'      	;1
218 179  SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
219 179  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
220 179  BOOL_NOT/13               #91=      $90                  ?0                  	;0
221 179  JMPZ/43                   ?0        #91                  ?223                	;0	>>223
222 180  GOTO/253                  ?0        ?224                 ?142                	;0
223 182  ECHO/40                   ?0        143:'checked '       ?0                  	;0	<<221
224 184  GOTO/253                  ?0        ?480                 ?144                	;0
225 186  INCLUDE_OR_EVAL/73        ?80       145:'header.php'     ?0                  	;2
226 187  ECHO/40                   ?0        146:'<div class="wrapper boxed-layout"' ?0                  	;0
227 188  FETCH_IS/89               $93=      147:'_SERVER'        ?0                  	;0
228 188  ISSET_ISEMPTY_DIM_OBJ/115 #94=      $93                  148:'HTTP_X_REQUESTED_WITH'	;16777216
229 188  BOOL_NOT/13               #95=      #94                  ?0                  	;0
230 188  JMPZ_EX/46                #95=      #95                  ?238                	;0	>>238
231 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'strtolower'    	;1
232 188  FETCH_FUNC_ARG/92         $96=      151:'_SERVER'        ?0                  	;1
233 188  FETCH_DIM_FUNC_ARG/93     $97=      $96                  152:'HTTP_X_REQUESTED_WITH'	;1
234 188  SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
235 188  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
236 188  IS_EQUAL/17               #99=      $98                  153:'xmlhttprequest'	;0
237 188  BOOL/52                   #95=      #99                  ?0                  	;0
238 188  BOOL_NOT/13               #100=     #95                  ?0                  	;0	<<230
239 188  JMPZ/43                   ?0        #100                 ?241                	;0	>>241
240 189  GOTO/253                  ?0        ?242                 ?154                	;0
241 191  ECHO/40                   ?0        155:' style="display: none;"' ?0                  	;0	<<239
242 193  GOTO/253                  ?0        ?343                 ?156                	;0
243 195  FETCH_DIM_R/81            $101=     16?4                 157:'stations'      	;0
244 195  ECHO/40                   ?0        $101                 ?0                  	;0
245 196  ECHO/40                   ?0        158:'</th
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
246 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   159:'F964B9222B35ADDd'	;0
247 197  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
248 197  FE_RESET_R/77             $103=     $102                 ?328                	;0
249 197  FE_FETCH_R/78             ?0        $103                 16?6                	;328	>>328	<<327
250 198  NOP/0                     ?0        ?0                   ?0                  	;1
251 198  GOTO/253                  ?0        ?304                 ?161                	;0
252 200  ECHO/40                   ?0        162:'</td>
                                                                <td class="text-center">' ?0                  	;0
253 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   163:'count'         	;1
254 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'json_decode'   	;2
255 201  FETCH_DIM_FUNC_ARG/93     $104=     16?6                 167:'bouquet_movies'	;1
256 201  SEND_VAR_EX/66            ?80       $104                 ?1                  	;0
257 201  SEND_VAL_EX/116           ?96       168:true             ?2                  	;0
258 201  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
259 201  SEND_VAR_NO_REF_EX/50     ?80       $105                 ?1                  	;0
260 201  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
261 201  ECHO/40                   ?0        $106                 ?0                  	;0
262 202  ECHO/40                   ?0        169:'</td>
                                                                <td class="text-center">' ?0                  	;0
263 203  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'count'         	;1
264 203  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'json_decode'   	;2
265 203  FETCH_DIM_FUNC_ARG/93     $107=     16?6                 174:'bouquet_series'	;1
266 203  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
267 203  SEND_VAL_EX/116           ?96       175:true             ?2                  	;0
268 203  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
269 203  SEND_VAR_NO_REF_EX/50     ?80       $108                 ?1                  	;0
270 203  DO_FCALL_BY_NAME/131      $109=     ?0                   ?0                  	;0
271 203  ECHO/40                   ?0        $109                 ?0                  	;0
272 204  ECHO/40                   ?0        176:'</td>
                                                                <td class="text-center">' ?0                  	;0
273 205  NOP/0                     ?0        ?0                   ?0                  	;1
274 205  GOTO/253                  ?0        ?292                 ?177                	;0
275 207  FETCH_DIM_R/81            $110=     16?6                 178:'id'            	;0
276 207  ECHO/40                   ?0        $110                 ?0                  	;0
277 208  ECHO/40                   ?0        179:'</td>
																<td>' ?0                  	;0
278 209  FETCH_DIM_R/81            $111=     16?6                 180:'bouquet_name'  	;0
279 209  ECHO/40                   ?0        $111                 ?0                  	;0
280 210  ECHO/40                   ?0        181:'</td>
                                                                <td class="text-center">' ?0                  	;0
281 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'count'         	;1
282 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'json_decode'   	;2
283 211  FETCH_DIM_FUNC_ARG/93     $112=     16?6                 186:'bouquet_channels'	;1
284 211  SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
285 211  SEND_VAL_EX/116           ?96       187:true             ?2                  	;0
286 211  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
287 211  SEND_VAR_NO_REF_EX/50     ?80       $113                 ?1                  	;0
288 211  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
289 211  ECHO/40                   ?0        $114                 ?0                  	;0
290 212  NOP/0                     ?0        ?0                   ?0                  	;1
291 212  GOTO/253                  ?0        ?252                 ?188                	;0
292 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'count'         	;1
293 214  INIT_FCALL_BY_NAME/59     ?0        ?0                   191:'json_decode'   	;2
294 214  FETCH_DIM_FUNC_ARG/93     $115=     16?6                 193:'bouquet_radios'	;1
295 214  SEND_VAR_EX/66            ?80       $115                 ?1                  	;0
296 214  SEND_VAL_EX/116           ?96       194:true             ?2                  	;0
297 214  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
298 214  SEND_VAR_NO_REF_EX/50     ?80       $116                 ?1                  	;0
299 214  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
300 214  ECHO/40                   ?0        $117                 ?0                  	;0
301 215  ECHO/40                   ?0        195:'</td>
															</tr>
															' ?0                  	;0
302 217  NOP/0                     ?0        ?0                   ?0                  	;1
303 217  GOTO/253                  ?0        ?327                 ?196                	;0
304 219  ECHO/40                   ?0        197:'															<tr' ?0                  	;0
305 220  ISSET_ISEMPTY_CV/197      #118=     16?0                 ?0                  	;33554432
306 220  JMPZ_EX/46                #118=     #118                 ?319                	;0	>>319
307 220  INIT_FCALL_BY_NAME/59     ?0        ?0                   198:'in_array'      	;2
308 220  FETCH_DIM_FUNC_ARG/93     $119=     16?6                 200:'id'            	;1
309 220  SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
310 220  INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'json_decode'   	;2
311 220  FETCH_DIM_FUNC_ARG/93     $120=     16?0                 203:'user'          	;1
312 220  FETCH_DIM_FUNC_ARG/93     $121=     $120                 204:'bouquet'       	;1
313 220  SEND_VAR_EX/66            ?80       $121                 ?1                  	;0
314 220  SEND_VAL_EX/116           ?96       205:true             ?2                  	;0
315 220  DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
316 220  SEND_VAR_NO_REF_EX/50     ?96       $122                 ?2                  	;0
317 220  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
318 220  BOOL/52                   #118=     $123                 ?0                  	;0
319 220  BOOL_NOT/13               #124=     #118                 ?0                  	;0	<<306
320 220  JMPZ/43                   ?0        #124                 ?323                	;0	>>323
321 221  NOP/0                     ?0        ?0                   ?0                  	;1
322 221  GOTO/253                  ?0        ?324                 ?206                	;0
323 223  ECHO/40                   ?0        207:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0	<<320
324 225  ECHO/40                   ?0        208:'>
																<td class="text-center">' ?0                  	;0
325 226  NOP/0                     ?0        ?0                   ?0                  	;1
326 226  GOTO/253                  ?0        ?275                 ?209                	;0
327 227  JMP/42                    ?0        ?249                 ?0                  	;0	>>249
328 227  FE_FREE/127               ?0        $103                 ?0                  	;0	<<248
329 230  ECHO/40                   ?0        210:'														</tbody>
													</table>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="list-inline-item float-right">
												<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info" id="toggle_bouquets">Toggle All</a>
												<input name="submit_device" type="submit" class="btn btn-primary" value="' ?0                  	;0
330 231  GOTO/253                  ?0        ?555                 ?211                	;0
331 234  ECHO/40                   ?0        212:'</textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>
													<div class="col-md-8">
														<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
332 235  ISSET_ISEMPTY_CV/197      #125=     16?0                 ?0                  	;33554432
333 235  BOOL_NOT/13               #126=     #125                 ?0                  	;0
334 235  JMPZ/43                   ?0        #126                 ?336                	;0	>>336
335 236  GOTO/253                  ?0        ?342                 ?213                	;0
336 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'htmlspecialchars'	;1	<<334
337 238  FETCH_DIM_FUNC_ARG/93     $127=     16?0                 216:'user'          	;1
338 238  FETCH_DIM_FUNC_ARG/93     $128=     $127                 217:'reseller_notes'	;1
339 238  SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
340 238  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
341 238  ECHO/40                   ?0        $129                 ?0                  	;0
342 240  GOTO/253                  ?0        ?21                  ?218                	;0
343 242  ECHO/40                   ?0        219:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
344 243  INCLUDE_OR_EVAL/73        ?118      220:'topbar.php'     ?0                  	;2
345 244  ECHO/40                   ?0        221:'					</div>
					<h4 class="page-title">' ?0                  	;0
346 245  ISSET_ISEMPTY_CV/197      #131=     16?0                 ?0                  	;33554432
347 245  JMPZ/43                   ?0        #131                 ?349                	;0	>>349
348 246  GOTO/253                  ?0        ?48                  ?222                	;0
349 248  ECHO/40                   ?0        223:'Add'            ?0                  	;0	<<347
350 249  GOTO/253                  ?0        ?47                  ?224                	;0
351 251  ECHO/40                   ?0        225:'">
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="list-inline-item">
												<a href="javascript: void(0);" onClick="clearDevice();" class="btn btn-warning">Clear Device Info</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
										</ul>
									</div>
									' ?0                  	;0
352 253  ECHO/40                   ?0        226:'									<div class="tab-pane" id="advanced-options">
										<div class="row">
											<div class="col-12">
                                                <div class="alert alert-warning" role="alert" id="advanced_warning" style="display: none;">
                                                    This device is linked to a user, the options for that user will be used.
                                                </div>
                                                <div id="advanced_info">
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="force_server_id">Forced Connection <i title="Force this user to connect to a specific server. Otherwise, the server with the lowest load will be selected." class="tooltip text-secondary far fa-circle"></i></label>
                                                        <div class="col-md-8">
                                                            <select name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">
                                                                <option ' ?0                  	;0
353 254  ISSET_ISEMPTY_CV/197      #132=     16?0                 ?0                  	;33554432
354 254  BOOL_NOT/13               #133=     #132                 ?0                  	;0
355 254  JMPZ/43                   ?0        #133                 ?357                	;0	>>357
356 255  GOTO/253                  ?0        ?405                 ?227                	;0
357 257  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'intval'        	;1	<<355
358 257  FETCH_DIM_FUNC_ARG/93     $134=     16?0                 230:'user'          	;1
359 257  FETCH_DIM_FUNC_ARG/93     $135=     $134                 231:'force_server_id'	;1
360 257  SEND_VAR_EX/66            ?80       $135                 ?1                  	;0
361 257  DO_FCALL_BY_NAME/131      $136=     ?0                   ?0                  	;0
362 257  IS_EQUAL/17               #137=     $136                 232:0               	;0
363 257  BOOL_NOT/13               #138=     #137                 ?0                  	;0
364 257  JMPZ/43                   ?0        #138                 ?366                	;0	>>366
365 258  GOTO/253                  ?0        ?405                 ?233                	;0
366 260  GOTO/253                  ?0        ?404                 ?234                	;0	<<364
367 262  ECHO/40                   ?0        235:'							<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									' ?0                  	;0
368 263  ISSET_ISEMPTY_DIM_OBJ/115 #139=     16?0                 236:'mag_id'        	;33554432
369 263  BOOL_NOT/13               #140=     #139                 ?0                  	;0
370 263  JMPZ/43                   ?0        #140                 ?372                	;0	>>372
371 264  GOTO/253                  ?0        ?373                 ?237                	;0
372 266  ECHO/40                   ?0        238:'									<li class="nav-item">
										<a href="#device-info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi mdi-cellphone-key mr-1"></i>
											<span class="d-none d-sm-inline">Device Info</span>
										</a>
									</li>
									' ?0                  	;0	<<370
373 268  ECHO/40                   ?0        239:'									<li class="nav-item">
										<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-folder-alert-outline mr-1"></i>
											<span class="d-none d-sm-inline">Advanced</span>
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
													<label class="col-md-4 col-form-label" for="mac">MAC Address</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="mac" name="mac" value="' ?0                  	;0
374 269  GOTO/253                  ?0        ?155                 ?240                	;0
375 271  ECHO/40                   ?0        241:'</th>
                                                                <th class="text-center">' ?0                  	;0
376 272  FETCH_DIM_R/81            $141=     16?4                 242:'movies'        	;0
377 272  ECHO/40                   ?0        $141                 ?0                  	;0
378 273  ECHO/40                   ?0        243:'</th>
                                                                <th class="text-center">' ?0                  	;0
379 274  FETCH_DIM_R/81            $142=     16?4                 244:'series'        	;0
380 274  ECHO/40                   ?0        $142                 ?0                  	;0
381 275  ECHO/40                   ?0        245:'</th>
                                                                <th class="text-center">' ?0                  	;0
382 276  GOTO/253                  ?0        ?243                 ?246                	;0
383 278  ECHO/40                   ?0        247:'                                                                <option value="' ?0                  	;0
384 279  INIT_FCALL_BY_NAME/59     ?0        ?0                   248:'intval'        	;1
385 279  FETCH_DIM_FUNC_ARG/93     $143=     16?7                 250:'id'            	;1
386 279  SEND_VAR_EX/66            ?80       $143                 ?1                  	;0
387 279  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
388 279  ECHO/40                   ?0        $144                 ?0                  	;0
389 280  ECHO/40                   ?0        251:'" selected="selected">' ?0                  	;0
390 281  FETCH_DIM_R/81            $145=     16?7                 252:'username'      	;0
391 281  ECHO/40                   ?0        $145                 ?0                  	;0
392 282  ECHO/40                   ?0        253:'</option>
                                                                ' ?0                  	;0
393 283  GOTO/253                  ?0        ?166                 ?254                	;0
394 285  ECHO/40                   ?0        255:'															<option value="' ?0                  	;0
395 286  FETCH_DIM_R/81            $146=     16?0                 256:'user'          	;0
396 286  FETCH_DIM_R/81            $147=     $146                 257:'pair_id'       	;0
397 286  ECHO/40                   ?0        $147                 ?0                  	;0
398 287  ECHO/40                   ?0        258:'" selected="selected">' ?0                  	;0
399 288  FETCH_DIM_R/81            $148=     16?0                 259:'paired'        	;0
400 288  FETCH_DIM_R/81            $149=     $148                 260:'username'      	;0
401 288  ECHO/40                   ?0        $149                 ?0                  	;0
402 289  ECHO/40                   ?0        261:'</option>
															' ?0                  	;0
403 290  GOTO/253                  ?0        ?526                 ?262                	;0
404 292  ECHO/40                   ?0        263:'selected '      ?0                  	;0
405 295  ECHO/40                   ?0        264:'value="0">Disabled</option>
                                                                ' ?0                  	;0
406 296  FE_RESET_R/77             $150=     16?8                 ?448                	;0
407 296  FE_FETCH_R/78             ?0        $150                 16?9                	;448	>>448	<<447
408 297  NOP/0                     ?0        ?0                   ?0                  	;1
409 297  GOTO/253                  ?0        ?424                 ?265                	;0
410 299  ECHO/40                   ?0        266:'</option>
                                                                ' ?0                  	;0
411 301  NOP/0                     ?0        ?0                   ?0                  	;1
412 301  GOTO/253                  ?0        ?447                 ?267                	;0
413 304  ECHO/40                   ?0        268:'value="'        ?0                  	;0
414 305  FETCH_DIM_R/81            $151=     16?9                 269:'id'            	;0
415 305  ECHO/40                   ?0        $151                 ?0                  	;0
416 306  ECHO/40                   ?0        270:'">'             ?0                  	;0
417 307  INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'htmlspecialchars'	;1
418 307  FETCH_DIM_FUNC_ARG/93     $152=     16?9                 273:'server_name'   	;1
419 307  SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
420 307  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
421 307  ECHO/40                   ?0        $153                 ?0                  	;0
422 308  NOP/0                     ?0        ?0                   ?0                  	;1
423 308  GOTO/253                  ?0        ?410                 ?274                	;0
424 310  ECHO/40                   ?0        275:'                                                                <option ' ?0                  	;0
425 311  ISSET_ISEMPTY_CV/197      #154=     16?0                 ?0                  	;33554432
426 311  BOOL_NOT/13               #155=     #154                 ?0                  	;0
427 311  JMPZ/43                   ?0        #155                 ?430                	;0	>>430
428 312  NOP/0                     ?0        ?0                   ?0                  	;1
429 312  GOTO/253                  ?0        ?413                 ?276                	;0
430 314  INIT_FCALL_BY_NAME/59     ?0        ?0                   277:'intval'        	;1	<<427
431 314  FETCH_DIM_FUNC_ARG/93     $156=     16?0                 279:'user'          	;1
432 314  FETCH_DIM_FUNC_ARG/93     $157=     $156                 280:'force_server_id'	;1
433 314  SEND_VAR_EX/66            ?80       $157                 ?1                  	;0
434 314  DO_FCALL_BY_NAME/131      $158=     ?0                   ?0                  	;0
435 314  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'intval'        	;1
436 314  FETCH_DIM_FUNC_ARG/93     $159=     16?9                 283:'id'            	;1
437 314  SEND_VAR_EX/66            ?80       $159                 ?1                  	;0
438 314  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
439 314  IS_EQUAL/17               #161=     $158                 $160                	;0
440 314  BOOL_NOT/13               #162=     #161                 ?0                  	;0
441 314  JMPZ/43                   ?0        #162                 ?444                	;0	>>444
442 315  NOP/0                     ?0        ?0                   ?0                  	;1
443 315  GOTO/253                  ?0        ?445                 ?284                	;0
444 317  ECHO/40                   ?0        285:'selected '      ?0                  	;0	<<441
445 319  NOP/0                     ?0        ?0                   ?0                  	;1
446 319  GOTO/253                  ?0        ?413                 ?286                	;0
447 320  JMP/42                    ?0        ?407                 ?0                  	;0	>>407
448 320  FE_FREE/127               ?0        $150                 ?0                  	;0	<<406
449 322  GOTO/253                  ?0        ?487                 ?287                	;0
450 325  ECHO/40                   ?0        288:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="pair_id">' ?0                  	;0
451 326  FETCH_DIM_R/81            $163=     16?4                 289:'paired_user'   	;0
452 326  ECHO/40                   ?0        $163                 ?0                  	;0
453 327  ECHO/40                   ?0        290:'</label>
													<div class="col-md-6">
														<select id="pair_id" name="pair_id" class="form-control" data-toggle="select2">
															' ?0                  	;0
454 328  ISSET_ISEMPTY_CV/197      #164=     16?0                 ?0                  	;33554432
455 328  JMPZ_EX/46                #164=     #164                 ?460                	;0	>>460
456 328  FETCH_DIM_R/81            $165=     16?0                 291:'user'          	;0
457 328  FETCH_DIM_R/81            $166=     $165                 292:'pair_id'       	;0
458 328  IS_SMALLER/19             #167=     293:0                $166                	;0
459 328  BOOL/52                   #164=     #167                 ?0                  	;0
460 328  BOOL_NOT/13               #168=     #164                 ?0                  	;0	<<455
461 328  JMPZ/43                   ?0        #168                 ?463                	;0	>>463
462 329  GOTO/253                  ?0        ?526                 ?294                	;0
463 331  GOTO/253                  ?0        ?394                 ?295                	;0	<<461
464 333  FETCH_STATIC_PROP_IS/176  $169=     296:'rRequest'       297:'XUI'           	;0
465 333  ISSET_ISEMPTY_DIM_OBJ/115 #170=     $169                 299:'id'            	;33554432
466 333  BOOL_NOT/13               #171=     #170                 ?0                  	;0
467 333  JMPZ/43                   ?0        #171                 ?469                	;0	>>469
468 334  GOTO/253                  ?0        ?198                 ?300                	;0
469 336  INIT_FCALL_BY_NAME/59     ?0        ?0                   301:'a32D85aEFA28959D'	;1	<<467
470 336  FETCH_STATIC_PROP_FUNC_ARG/177 $172=     303:'rRequest'       304:'XUI'           	;1
471 336  FETCH_DIM_FUNC_ARG/93     $173=     $172                 306:'id'            	;1
472 336  SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
473 336  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
474 336  ASSIGN/38                 ?163      16?0                 $174                	;0
475 337  FETCH_DIM_R/81            $176=     16?0                 307:'user_id'       	;0
476 337  JMPZ/43                   ?0        $176                 ?478                	;0	>>478
477 338  GOTO/253                  ?0        ?479                 ?308                	;0
478 340  EXIT/79                   ?0        ?0                   ?0                  	;0	<<476
479 342  GOTO/253                  ?0        ?198                 ?309                	;0
480 345  ECHO/40                   ?0        310:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="parent_password">Adult Pin</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="parent_password" name="parent_password" value="' ?0                  	;0
481 346  ISSET_ISEMPTY_CV/197      #177=     16?0                 ?0                  	;33554432
482 346  JMPZ/43                   ?0        #177                 ?484                	;0	>>484
483 347  GOTO/253                  ?0        ?60                  ?311                	;0
484 349  ECHO/40                   ?0        312:'0000'           ?0                  	;0	<<482
485 350  GOTO/253                  ?0        ?65                  ?313                	;0
486 351  GOTO/253                  ?0        ?60                  ?314                	;0
487 354  ECHO/40                   ?0        315:'                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="forced_country">Forced Country <i title="Force user to connect to loadbalancer associated with the selected country." class="tooltip text-secondary far fa-circle"></i></label>
                                                        <div class="col-md-8">
                                                            <select name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">
                                                                ' ?0                  	;0
488 355  FE_RESET_R/77             $178=     16?10                ?521                	;0
489 355  FE_FETCH_R/78             ?0        $178                 16?11               	;521	>>521	<<520
490 356  NOP/0                     ?0        ?0                   ?0                  	;1
491 356  GOTO/253                  ?0        ?503                 ?316                	;0
492 359  ECHO/40                   ?0        317:'value="'        ?0                  	;0
493 360  FETCH_DIM_R/81            $179=     16?11                318:'id'            	;0
494 360  ECHO/40                   ?0        $179                 ?0                  	;0
495 361  ECHO/40                   ?0        319:'">'             ?0                  	;0
496 362  FETCH_DIM_R/81            $180=     16?11                320:'name'          	;0
497 362  ECHO/40                   ?0        $180                 ?0                  	;0
498 363  NOP/0                     ?0        ?0                   ?0                  	;1
499 363  GOTO/253                  ?0        ?500                 ?321                	;0
500 365  ECHO/40                   ?0        322:'</option>
                                                                ' ?0                  	;0
501 367  NOP/0                     ?0        ?0                   ?0                  	;1
502 367  GOTO/253                  ?0        ?520                 ?323                	;0
503 369  ECHO/40                   ?0        324:'                                                                <option ' ?0                  	;0
504 370  ISSET_ISEMPTY_CV/197      #181=     16?0                 ?0                  	;33554432
505 370  BOOL_NOT/13               #182=     #181                 ?0                  	;0
506 370  JMPZ/43                   ?0        #182                 ?509                	;0	>>509
507 371  NOP/0                     ?0        ?0                   ?0                  	;1
508 371  GOTO/253                  ?0        ?492                 ?325                	;0
509 373  FETCH_DIM_R/81            $183=     16?0                 326:'user'          	;0	<<506
510 373  FETCH_DIM_R/81            $184=     $183                 327:'forced_country'	;0
511 373  FETCH_DIM_R/81            $185=     16?11                328:'id'            	;0
512 373  IS_EQUAL/17               #186=     $184                 $185                	;0
513 373  BOOL_NOT/13               #187=     #186                 ?0                  	;0
514 373  JMPZ/43                   ?0        #187                 ?517                	;0	>>517
515 374  NOP/0                     ?0        ?0                   ?0                  	;1
516 374  GOTO/253                  ?0        ?518                 ?329                	;0
517 376  ECHO/40                   ?0        330:'selected '      ?0                  	;0	<<514
518 378  NOP/0                     ?0        ?0                   ?0                  	;1
519 378  GOTO/253                  ?0        ?492                 ?331                	;0
520 379  JMP/42                    ?0        ?489                 ?0                  	;0	>>489
521 379  FE_FREE/127               ?0        $178                 ?0                  	;0	<<488
522 382  ECHO/40                   ?0        332:'                                                            </select>
                                                        </div>
                                                    </div>
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>
														<div class="col-md-8 input-group">
															<input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="' ?0                  	;0
523 383  GOTO/253                  ?0        ?86                  ?333                	;0
524 386  ECHO/40                   ?0        334:'" />
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
525 387  GOTO/253                  ?0        ?562                 ?335                	;0
526 390  ECHO/40                   ?0        336:'														</select>
													</div>
													<div class="col-md-2">
														<a href="javascript: void(0);" onClick="unpairUser();" class="btn btn-warning" style="width: 100%">Unpair</a>
													</div>
												</div>
                                                <div id="linked_info">
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="member_id">Owner</label>
                                                        <div class="col-md-6">
                                                            <select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">
                                                                ' ?0                  	;0
527 391  FETCH_DIM_IS/90           $188=     16?0                 337:'user'          	;0
528 391  ISSET_ISEMPTY_DIM_OBJ/115 #189=     $188                 338:'member_id'     	;33554432
529 391  JMPZ_EX/46                #189=     #189                 ?540                	;0	>>540
530 391  INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'BA89228dC958ce05'	;1
531 391  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'intval'        	;1
532 391  FETCH_DIM_FUNC_ARG/93     $190=     16?0                 343:'user'          	;1
533 391  FETCH_DIM_FUNC_ARG/93     $191=     $190                 344:'member_id'     	;1
534 391  SEND_VAR_EX/66            ?80       $191                 ?1                  	;0
535 391  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
536 391  SEND_VAR_NO_REF_EX/50     ?80       $192                 ?1                  	;0
537 391  DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
538 391  ASSIGN/38                 $194=     16?7                 $193                	;0
539 391  BOOL/52                   #189=     $194                 ?0                  	;0
540 391  JMPZ/43                   ?0        #189                 ?542                	;0	>>542	<<529
541 392  GOTO/253                  ?0        ?135                 ?345                	;0
542 394  ECHO/40                   ?0        346:'                                                                <option value="' ?0                  	;0	<<540
543 395  FETCH_DIM_R/81            $195=     16?2                 347:'id'            	;0
544 395  ECHO/40                   ?0        $195                 ?0                  	;0
545 396  GOTO/253                  ?0        ?130                 ?348                	;0
546 398  INCLUDE_OR_EVAL/73        ?184      349:'session.php'    ?0                  	;2	<<0
547 399  INCLUDE_OR_EVAL/73        ?185      350:'functions.php'  ?0                  	;2
548 400  INIT_FCALL_BY_NAME/59     ?0        ?0                   351:'e6D500e19634d513'	;0
549 400  DO_FCALL_BY_NAME/131      $198=     ?0                   ?0                  	;0
550 400  JMPZ/43                   ?0        $198                 ?552                	;0	>>552
551 401  GOTO/253                  ?0        ?554                 ?353                	;0
552 403  INIT_FCALL_BY_NAME/59     ?0        ?0                   354:'E72f42A93714Ba87'	;0	<<550
553 403  DO_FCALL_BY_NAME/131      ?187      ?0                   ?0                  	;0
554 405  GOTO/253                  ?0        ?464                 ?356                	;0
555 407  ISSET_ISEMPTY_CV/197      #200=     16?0                 ?0                  	;33554432
556 407  JMPZ/43                   ?0        #200                 ?558                	;0	>>558
557 408  GOTO/253                  ?0        ?560                 ?357                	;0
558 410  ECHO/40                   ?0        358:'Add'            ?0                  	;0	<<556
559 411  GOTO/253                  ?0        ?524                 ?359                	;0
560 413  ECHO/40                   ?0        360:'Edit'           ?0                  	;0
561 414  GOTO/253                  ?0        ?524                 ?361                	;0
562 416  INCLUDE_OR_EVAL/73        ?189      362:'footer.php'     ?0                  	;2
563 417  NOP/0                     ?0        363:1                ?0                  	;4294967295
*/

?>