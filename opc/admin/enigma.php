<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?334                 ?0                  	;0	>>334
1   5    ECHO/40                   ?0        1:'                                                                <option value="' ?0                  	;0
2   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'intval'          	;1
3   6    FETCH_DIM_FUNC_ARG/93     $12=      16?0                 4:'id'              	;1
4   6    SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
5   6    DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
6   6    ECHO/40                   ?0        $13                  ?0                  	;0
7   7    ECHO/40                   ?0        5:'" selected="selected">' ?0                  	;0
8   8    FETCH_DIM_R/81            $14=      16?0                 6:'username'        	;0
9   8    ECHO/40                   ?0        $14                  ?0                  	;0
10  9    ECHO/40                   ?0        7:'</option>
                                                                ' ?0                  	;0
11  10   GOTO/253                  ?0        ?380                 ?8                  	;0
12  12   ECHO/40                   ?0        9:'									<div class="tab-pane" id="device-info">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Username</label>
													<div class="col-md-8">
														<input type="text" class="form-control sticky" id="username" name="username" value="' ?0                  	;0
13  13   FETCH_DIM_R/81            $15=      16?1                 10:'user'           	;0
14  13   FETCH_DIM_R/81            $16=      $15                  11:'username'       	;0
15  13   ECHO/40                   ?0        $16                  ?0                  	;0
16  14   ECHO/40                   ?0        12:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control sticky" id="password" name="password" value="' ?0                  	;0
17  15   FETCH_DIM_R/81            $17=      16?1                 13:'user'           	;0
18  15   FETCH_DIM_R/81            $18=      $17                  14:'password'       	;0
19  15   ECHO/40                   ?0        $18                  ?0                  	;0
20  16   ECHO/40                   ?0        15:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="modem_mac">Modem MAC</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="modem_mac" name="modem_mac" value="' ?0                  	;0
21  17   GOTO/253                  ?0        ?233                 ?16                 	;0
22  19   FETCH_DIM_R/81            $19=      16?1                 17:'token'          	;0
23  19   ECHO/40                   ?0        $19                  ?0                  	;0
24  20   ECHO/40                   ?0        18:'">
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
25  22   ECHO/40                   ?0        19:'									<div class="tab-pane" id="advanced-options">
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
26  23   ISSET_ISEMPTY_CV/197      #20=      16?1                 ?0                  	;33554432
27  23   BOOL_NOT/13               #21=      #20                  ?0                  	;0
28  23   JMPZ/43                   ?0        #21                  ?30                 	;0	>>30
29  24   GOTO/253                  ?0        ?218                 ?20                 	;0
30  26   GOTO/253                  ?0        ?208                 ?21                 	;0	<<28
31  28   ECHO/40                   ?0        22:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
32  29   INCLUDE_OR_EVAL/73        ?10       23:'topbar.php'      ?0                  	;2
33  30   ECHO/40                   ?0        24:'					</div>
					<h4 class="page-title">' ?0                  	;0
34  31   ISSET_ISEMPTY_CV/197      #23=      16?1                 ?0                  	;33554432
35  31   JMPZ/43                   ?0        #23                  ?37                 	;0	>>37
36  32   GOTO/253                  ?0        ?107                 ?25                 	;0
37  34   ECHO/40                   ?0        26:'Add'             ?0                  	;0	<<35
38  35   GOTO/253                  ?0        ?106                 ?27                 	;0
39  37   ECHO/40                   ?0        28:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="admin_notes">Admin Notes</label>
													<div class="col-md-8">
														<textarea id="admin_notes" name="admin_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
40  38   ISSET_ISEMPTY_CV/197      #24=      16?1                 ?0                  	;33554432
41  38   BOOL_NOT/13               #25=      #24                  ?0                  	;0
42  38   JMPZ/43                   ?0        #25                  ?44                 	;0	>>44
43  39   GOTO/253                  ?0        ?50                  ?29                 	;0
44  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'htmlspecialchars'	;1	<<42
45  41   FETCH_DIM_FUNC_ARG/93     $26=      16?1                 32:'user'           	;1
46  41   FETCH_DIM_FUNC_ARG/93     $27=      $26                  33:'admin_notes'    	;1
47  41   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
48  41   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
49  41   ECHO/40                   ?0        $28                  ?0                  	;0
50  43   ECHO/40                   ?0        34:'</textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>
													<div class="col-md-8">
														<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
51  44   GOTO/253                  ?0        ?242                 ?35                 	;0
52  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'is_null'        	;1
53  46   FETCH_DIM_FUNC_ARG/93     $29=      16?1                 38:'user'           	;1
54  46   FETCH_DIM_FUNC_ARG/93     $30=      $29                  39:'exp_date'       	;1
55  46   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
56  46   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
57  46   BOOL_NOT/13               #32=      $31                  ?0                  	;0
58  46   JMPZ/43                   ?0        #32                  ?60                 	;0	>>60
59  47   GOTO/253                  ?0        ?61                  ?40                 	;0
60  49   ECHO/40                   ?0        41:'checked '        ?0                  	;0	<<58
61  52   ECHO/40                   ?0        42:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="is_trial">Trial Device</label>
                                                        <div class="col-md-3">
                                                            <input name="is_trial" id="is_trial" type="checkbox" ' ?0                  	;0
62  53   GOTO/253                  ?0        ?63                  ?43                 	;0
63  55   ISSET_ISEMPTY_CV/197      #33=      16?1                 ?0                  	;33554432
64  55   BOOL_NOT/13               #34=      #33                  ?0                  	;0
65  55   JMPZ/43                   ?0        #34                  ?67                 	;0	>>67
66  56   GOTO/253                  ?0        ?74                  ?44                 	;0
67  58   FETCH_DIM_R/81            $35=      16?1                 45:'user'           	;0	<<65
68  58   FETCH_DIM_R/81            $36=      $35                  46:'is_trial'       	;0
69  58   IS_EQUAL/17               #37=      $36                  47:1                	;0
70  58   BOOL_NOT/13               #38=      #37                  ?0                  	;0
71  58   JMPZ/43                   ?0        #38                  ?73                 	;0	>>73
72  59   GOTO/253                  ?0        ?74                  ?48                 	;0
73  61   ECHO/40                   ?0        49:'checked '        ?0                  	;0	<<71
74  64   GOTO/253                  ?0        ?110                 ?50                 	;0
75  66   ECHO/40                   ?0        51:'															<option value="' ?0                  	;0
76  67   FETCH_DIM_R/81            $39=      16?1                 52:'user'           	;0
77  67   FETCH_DIM_R/81            $40=      $39                  53:'pair_id'        	;0
78  67   ECHO/40                   ?0        $40                  ?0                  	;0
79  68   ECHO/40                   ?0        54:'" selected="selected">' ?0                  	;0
80  69   FETCH_DIM_R/81            $41=      16?1                 55:'paired'         	;0
81  69   FETCH_DIM_R/81            $42=      $41                  56:'username'       	;0
82  69   ECHO/40                   ?0        $42                  ?0                  	;0
83  70   ECHO/40                   ?0        57:'</option>
															' ?0                  	;0
84  71   GOTO/253                  ?0        ?403                 ?58                 	;0
85  73   ECHO/40                   ?0        59:'                                                            </select>
                                                        </div>
                                                    </div>
													<div class="form-group row mb-4">
														<label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>
														<div class="col-md-8 input-group">
															<input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="' ?0                  	;0
86  74   ISSET_ISEMPTY_DIM_OBJ/115 #43=      16?1                 60:'user'           	;33554432
87  74   BOOL_NOT/13               #44=      #43                  ?0                  	;0
88  74   JMPZ/43                   ?0        #44                  ?90                 	;0	>>90
89  75   GOTO/253                  ?0        ?96                  ?61                 	;0
90  77   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'htmlspecialchars'	;1	<<88
91  77   FETCH_DIM_FUNC_ARG/93     $45=      16?1                 64:'user'           	;1
92  77   FETCH_DIM_FUNC_ARG/93     $46=      $45                  65:'isp_desc'       	;1
93  77   SEND_VAR_EX/66            ?80       $46                  ?1                  	;0
94  77   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
95  77   ECHO/40                   ?0        $47                  ?0                  	;0
96  79   ECHO/40                   ?0        66:'">
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
97  80   GOTO/253                  ?0        ?258                 ?67                 	;0
98  83   FETCH_DIM_IS/90           $48=      16?1                 68:'user'           	;0
99  83   ISSET_ISEMPTY_DIM_OBJ/115 #49=      $48                  69:'exp_date'       	;16777216
100 83   BOOL_NOT/13               #50=      #49                  ?0                  	;0
101 83   JMPZ/43                   ?0        #50                  ?103                	;0	>>103
102 84   GOTO/253                  ?0        ?105                 ?70                 	;0
103 86   ECHO/40                   ?0        71:'" disabled="disabled' ?0                  	;0	<<101
104 87   GOTO/253                  ?0        ?227                 ?72                 	;0
105 89   GOTO/253                  ?0        ?220                 ?73                 	;0
106 91   GOTO/253                  ?0        ?108                 ?74                 	;0
107 93   ECHO/40                   ?0        75:'Edit'            ?0                  	;0
108 95   ECHO/40                   ?0        76:' Enigma Device</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
109 96   GOTO/253                  ?0        ?286                 ?77                 	;0
110 98   ECHO/40                   ?0        78:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                        <label class="col-md-3 col-form-label" for="is_isplock">Lock to ISP</label>
                                                        <div class="col-md-2">
                                                            <input name="is_isplock" id="is_isplock" type="checkbox" ' ?0                  	;0
111 99   ISSET_ISEMPTY_CV/197      #51=      16?1                 ?0                  	;33554432
112 99   BOOL_NOT/13               #52=      #51                  ?0                  	;0
113 99   JMPZ/43                   ?0        #52                  ?115                	;0	>>115
114 100  GOTO/253                  ?0        ?279                 ?79                 	;0
115 102  FETCH_DIM_R/81            $53=      16?1                 80:'user'           	;0	<<113
116 102  FETCH_DIM_R/81            $54=      $53                  81:'is_isplock'     	;0
117 102  IS_EQUAL/17               #55=      $54                  82:1                	;0
118 102  BOOL_NOT/13               #56=      #55                  ?0                  	;0
119 102  JMPZ/43                   ?0        #56                  ?121                	;0	>>121
120 103  GOTO/253                  ?0        ?122                 ?83                 	;0
121 105  ECHO/40                   ?0        84:'checked '        ?0                  	;0	<<119
122 107  GOTO/253                  ?0        ?279                 ?85                 	;0
123 109  FE_RESET_R/77             $57=      16?2                 ?165                	;0
124 109  FE_FETCH_R/78             ?0        $57                  16?3                	;165	>>165	<<164
125 110  NOP/0                     ?0        ?0                   ?0                  	;1
126 110  GOTO/253                  ?0        ?141                 ?86                 	;0
127 112  ECHO/40                   ?0        87:'</option>
                                                                ' ?0                  	;0
128 114  NOP/0                     ?0        ?0                   ?0                  	;1
129 114  GOTO/253                  ?0        ?164                 ?88                 	;0
130 117  ECHO/40                   ?0        89:'value="'         ?0                  	;0
131 118  FETCH_DIM_R/81            $58=      16?3                 90:'id'             	;0
132 118  ECHO/40                   ?0        $58                  ?0                  	;0
133 119  ECHO/40                   ?0        91:'">'              ?0                  	;0
134 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'htmlspecialchars'	;1
135 120  FETCH_DIM_FUNC_ARG/93     $59=      16?3                 94:'server_name'    	;1
136 120  SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
137 120  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
138 120  ECHO/40                   ?0        $60                  ?0                  	;0
139 121  NOP/0                     ?0        ?0                   ?0                  	;1
140 121  GOTO/253                  ?0        ?127                 ?95                 	;0
141 123  ECHO/40                   ?0        96:'                                                                <option ' ?0                  	;0
142 124  ISSET_ISEMPTY_CV/197      #61=      16?1                 ?0                  	;33554432
143 124  BOOL_NOT/13               #62=      #61                  ?0                  	;0
144 124  JMPZ/43                   ?0        #62                  ?147                	;0	>>147
145 125  NOP/0                     ?0        ?0                   ?0                  	;1
146 125  GOTO/253                  ?0        ?130                 ?97                 	;0
147 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   98:'intval'         	;1	<<144
148 127  FETCH_DIM_FUNC_ARG/93     $63=      16?1                 100:'user'          	;1
149 127  FETCH_DIM_FUNC_ARG/93     $64=      $63                  101:'force_server_id'	;1
150 127  SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
151 127  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
152 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'intval'        	;1
153 127  FETCH_DIM_FUNC_ARG/93     $66=      16?3                 104:'id'            	;1
154 127  SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
155 127  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
156 127  IS_EQUAL/17               #68=      $65                  $67                 	;0
157 127  BOOL_NOT/13               #69=      #68                  ?0                  	;0
158 127  JMPZ/43                   ?0        #69                  ?161                	;0	>>161
159 128  NOP/0                     ?0        ?0                   ?0                  	;1
160 128  GOTO/253                  ?0        ?162                 ?105                	;0
161 130  ECHO/40                   ?0        106:'selected '      ?0                  	;0	<<158
162 132  NOP/0                     ?0        ?0                   ?0                  	;1
163 132  GOTO/253                  ?0        ?130                 ?107                	;0
164 133  JMP/42                    ?0        ?124                 ?0                  	;0	>>124
165 133  FE_FREE/127               ?0        $57                  ?0                  	;0	<<123
166 136  ECHO/40                   ?0        108:'                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="forced_country">Forced Country <i title="Force user to connect to loadbalancer associated with the selected country." class="tooltip text-secondary far fa-circle"></i></label>
                                                        <div class="col-md-8">
                                                            <select name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">
                                                                ' ?0                  	;0
167 137  FE_RESET_R/77             $70=      16?4                 ?200                	;0
168 137  FE_FETCH_R/78             ?0        $70                  16?5                	;200	>>200	<<199
169 138  NOP/0                     ?0        ?0                   ?0                  	;1
170 138  GOTO/253                  ?0        ?174                 ?109                	;0
171 140  ECHO/40                   ?0        110:'</option>
                                                                ' ?0                  	;0
172 142  NOP/0                     ?0        ?0                   ?0                  	;1
173 142  GOTO/253                  ?0        ?199                 ?111                	;0
174 144  ECHO/40                   ?0        112:'                                                                <option ' ?0                  	;0
175 145  ISSET_ISEMPTY_CV/197      #71=      16?1                 ?0                  	;33554432
176 145  BOOL_NOT/13               #72=      #71                  ?0                  	;0
177 145  JMPZ/43                   ?0        #72                  ?180                	;0	>>180
178 146  NOP/0                     ?0        ?0                   ?0                  	;1
179 146  GOTO/253                  ?0        ?191                 ?113                	;0
180 148  FETCH_DIM_R/81            $73=      16?1                 114:'user'          	;0	<<177
181 148  FETCH_DIM_R/81            $74=      $73                  115:'forced_country'	;0
182 148  FETCH_DIM_R/81            $75=      16?5                 116:'id'            	;0
183 148  IS_EQUAL/17               #76=      $74                  $75                 	;0
184 148  BOOL_NOT/13               #77=      #76                  ?0                  	;0
185 148  JMPZ/43                   ?0        #77                  ?188                	;0	>>188
186 149  NOP/0                     ?0        ?0                   ?0                  	;1
187 149  GOTO/253                  ?0        ?189                 ?117                	;0
188 151  ECHO/40                   ?0        118:'selected '      ?0                  	;0	<<185
189 153  NOP/0                     ?0        ?0                   ?0                  	;1
190 153  GOTO/253                  ?0        ?191                 ?119                	;0
191 156  ECHO/40                   ?0        120:'value="'        ?0                  	;0
192 157  FETCH_DIM_R/81            $78=      16?5                 121:'id'            	;0
193 157  ECHO/40                   ?0        $78                  ?0                  	;0
194 158  ECHO/40                   ?0        122:'">'             ?0                  	;0
195 159  FETCH_DIM_R/81            $79=      16?5                 123:'name'          	;0
196 159  ECHO/40                   ?0        $79                  ?0                  	;0
197 160  NOP/0                     ?0        ?0                   ?0                  	;1
198 160  GOTO/253                  ?0        ?171                 ?124                	;0
199 161  JMP/42                    ?0        ?168                 ?0                  	;0	>>168
200 161  FE_FREE/127               ?0        $70                  ?0                  	;0	<<167
201 164  GOTO/253                  ?0        ?85                  ?125                	;0
202 166  ECHO/40                   ?0        126:'">'             ?0                  	;0
203 167  FETCH_DIM_R/81            $80=      16?6                 127:'username'      	;0
204 167  ECHO/40                   ?0        $80                  ?0                  	;0
205 168  ECHO/40                   ?0        128:'</option>
                                                                ' ?0                  	;0
206 169  GOTO/253                  ?0        ?380                 ?129                	;0
207 171  GOTO/253                  ?0        ?1                   ?130                	;0
208 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'intval'        	;1
209 173  FETCH_DIM_FUNC_ARG/93     $81=      16?1                 133:'user'          	;1
210 173  FETCH_DIM_FUNC_ARG/93     $82=      $81                  134:'force_server_id'	;1
211 173  SEND_VAR_EX/66            ?80       $82                  ?1                  	;0
212 173  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
213 173  IS_EQUAL/17               #84=      $83                  135:0               	;0
214 173  BOOL_NOT/13               #85=      #84                  ?0                  	;0
215 173  JMPZ/43                   ?0        #85                  ?217                	;0	>>217
216 174  GOTO/253                  ?0        ?218                 ?136                	;0
217 176  ECHO/40                   ?0        137:'selected '      ?0                  	;0	<<215
218 179  ECHO/40                   ?0        138:'value="0">Disabled</option>
                                                                ' ?0                  	;0
219 180  GOTO/253                  ?0        ?123                 ?139                	;0
220 182  INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'date'          	;2
221 182  SEND_VAL_EX/116           ?80       142:'Y-m-d H:i:s'    ?1                  	;0
222 182  FETCH_DIM_FUNC_ARG/93     $86=      16?1                 143:'user'          	;2
223 182  FETCH_DIM_FUNC_ARG/93     $87=      $86                  144:'exp_date'      	;2
224 182  SEND_VAR_EX/66            ?96       $87                  ?2                  	;0
225 182  DO_FCALL_BY_NAME/131      $88=      ?0                   ?0                  	;0
226 182  ECHO/40                   ?0        $88                  ?0                  	;0
227 185  ECHO/40                   ?0        145:'" data-toggle="date-picker" data-single-date-picker="true">
                                                        </div>
                                                        <label class="col-md-3 col-form-label" for="exp_date">Never Expire</label>
                                                        <div class="col-md-2">
                                                            <input name="no_expire" id="no_expire" type="checkbox" ' ?0                  	;0
228 186  ISSET_ISEMPTY_CV/197      #89=      16?1                 ?0                  	;33554432
229 186  BOOL_NOT/13               #90=      #89                  ?0                  	;0
230 186  JMPZ/43                   ?0        #90                  ?232                	;0	>>232
231 187  GOTO/253                  ?0        ?61                  ?146                	;0
232 189  GOTO/253                  ?0        ?52                  ?147                	;0	<<230
233 191  FETCH_DIM_R/81            $91=      16?1                 148:'modem_mac'     	;0
234 191  ECHO/40                   ?0        $91                  ?0                  	;0
235 192  ECHO/40                   ?0        149:'">
													</div>
													<label class="col-md-2 col-form-label" for="local_ip">Local IP</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="local_ip" name="local_ip" value="' ?0                  	;0
236 193  FETCH_DIM_R/81            $92=      16?1                 150:'local_ip'      	;0
237 193  ECHO/40                   ?0        $92                  ?0                  	;0
238 194  ECHO/40                   ?0        151:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="enigma_version">Enigma Version</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="enigma_version" name="enigma_version" value="' ?0                  	;0
239 195  FETCH_DIM_R/81            $93=      16?1                 152:'enigma_version'	;0
240 195  ECHO/40                   ?0        $93                  ?0                  	;0
241 196  GOTO/253                  ?0        ?526                 ?153                	;0
242 198  ISSET_ISEMPTY_CV/197      #94=      16?1                 ?0                  	;33554432
243 198  BOOL_NOT/13               #95=      #94                  ?0                  	;0
244 198  JMPZ/43                   ?0        #95                  ?246                	;0	>>246
245 199  GOTO/253                  ?0        ?252                 ?154                	;0
246 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'htmlspecialchars'	;1	<<244
247 201  FETCH_DIM_FUNC_ARG/93     $96=      16?1                 157:'user'          	;1
248 201  FETCH_DIM_FUNC_ARG/93     $97=      $96                  158:'reseller_notes'	;1
249 201  SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
250 201  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
251 201  ECHO/40                   ?0        $98                  ?0                  	;0
252 203  ECHO/40                   ?0        159:'</textarea>
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
253 204  ISSET_ISEMPTY_DIM_OBJ/115 #99=      16?1                 160:'device_id'     	;33554432
254 204  BOOL_NOT/13               #100=     #99                  ?0                  	;0
255 204  JMPZ/43                   ?0        #100                 ?257                	;0	>>257
256 205  GOTO/253                  ?0        ?25                  ?161                	;0
257 207  GOTO/253                  ?0        ?12                  ?162                	;0	<<255
258 209  ISSET_ISEMPTY_CV/197      #101=     16?1                 ?0                  	;33554432
259 209  BOOL_NOT/13               #102=     #101                 ?0                  	;0
260 209  JMPZ/43                   ?0        #102                 ?262                	;0	>>262
261 210  GOTO/253                  ?0        ?277                 ?163                	;0
262 212  INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'json_decode'   	;2	<<260
263 212  FETCH_DIM_FUNC_ARG/93     $103=     16?1                 166:'user'          	;1
264 212  FETCH_DIM_FUNC_ARG/93     $104=     $103                 167:'allowed_ips'   	;1
265 212  SEND_VAR_EX/66            ?80       $104                 ?1                  	;0
266 212  SEND_VAL_EX/116           ?96       168:true             ?2                  	;0
267 212  DO_FCALL_BY_NAME/131      $105=     ?0                   ?0                  	;0
268 212  FE_RESET_R/77             $106=     $105                 ?276                	;0
269 212  FE_FETCH_R/78             ?0        $106                 16?7                	;276	>>276	<<275
270 213  ECHO/40                   ?0        169:'                                                            <option value="' ?0                  	;0
271 214  ECHO/40                   ?0        16?7                 ?0                  	;0
272 215  ECHO/40                   ?0        170:'">'             ?0                  	;0
273 216  ECHO/40                   ?0        16?7                 ?0                  	;0
274 217  ECHO/40                   ?0        171:'</option>
                                                            ' ?0                  	;0
275 218  JMP/42                    ?0        ?269                 ?0                  	;0	>>269
276 218  FE_FREE/127               ?0        $106                 ?0                  	;0	<<268
277 222  ECHO/40                   ?0        172:'                                                            </select>
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
278 223  GOTO/253                  ?0        ?394                 ?173                	;0
279 226  ECHO/40                   ?0        174:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                    </div>
                                                </div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="lock_device">Device Lock</label>
													<div class="col-md-3">
														<input name="lock_device" id="lock_device" type="checkbox" ' ?0                  	;0
280 227  ISSET_ISEMPTY_CV/197      #107=     16?1                 ?0                  	;33554432
281 227  JMPZ/43                   ?0        #107                 ?283                	;0	>>283
282 228  GOTO/253                  ?0        ?534                 ?175                	;0
283 230  ECHO/40                   ?0        176:'checked '       ?0                  	;0	<<281
284 231  GOTO/253                  ?0        ?540                 ?177                	;0
285 232  GOTO/253                  ?0        ?534                 ?178                	;0
286 234  ISSET_ISEMPTY_DIM_OBJ/115 #108=     16?1                 179:'device_id'     	;33554432
287 234  JMPZ_EX/46                #108=     #108                 ?291                	;0	>>291
288 234  ISSET_ISEMPTY_CV/197      #109=     16?8                 ?0                  	;33554432
289 234  BOOL_NOT/13               #110=     #109                 ?0                  	;0
290 234  BOOL/52                   #108=     #110                 ?0                  	;0
291 234  BOOL_NOT/13               #111=     #108                 ?0                  	;0	<<287
292 234  JMPZ/43                   ?0        #111                 ?294                	;0	>>294
293 235  GOTO/253                  ?0        ?301                 ?180                	;0
294 237  ECHO/40                   ?0        181:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<292
295 238  INIT_FCALL_BY_NAME/59     ?0        ?0                   182:'intval'        	;1
296 238  FETCH_DIM_FUNC_ARG/93     $112=     16?1                 184:'device_id'     	;1
297 238  SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
298 238  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
299 238  ECHO/40                   ?0        $113                 ?0                  	;0
300 239  ECHO/40                   ?0        185:'" />
							'  ?0                  	;0
301 241  GOTO/253                  ?0        ?511                 ?186                	;0
302 244  ISSET_ISEMPTY_CV/197      #114=     16?1                 ?0                  	;33554432
303 244  JMPZ_EX/46                #114=     #114                 ?307                	;0	>>307
304 244  ISSET_ISEMPTY_DIM_OBJ/115 #115=     16?1                 187:'user'          	;33554432
305 244  BOOL_NOT/13               #116=     #115                 ?0                  	;0
306 244  BOOL/52                   #114=     #116                 ?0                  	;0
307 244  BOOL_NOT/13               #117=     #114                 ?0                  	;0	<<303
308 244  JMPZ/43                   ?0        #117                 ?310                	;0	>>310
309 245  GOTO/253                  ?0        ?312                 ?188                	;0
310 247  ASSIGN_DIM/147            ?106      16?1                 189:'user'          	;0	<<308
311 247  OP_DATA/137               ?0        190:array (
  'bouquet' => 
  array (
  ),
) ?0                  	;0
312 249  ASSIGN/38                 ?107      16?9                 191:'Enigma Device' 	;0
313 250  GOTO/253                  ?0        ?359                 ?192                	;0
314 252  ISSET_ISEMPTY_CV/197      #120=     16?1                 ?0                  	;33554432
315 252  BOOL_NOT/13               #121=     #120                 ?0                  	;0
316 252  JMPZ/43                   ?0        #121                 ?318                	;0	>>318
317 253  GOTO/253                  ?0        ?323                 ?193                	;0
318 255  INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'htmlspecialchars'	;1	<<316
319 255  FETCH_DIM_FUNC_ARG/93     $122=     16?1                 196:'mac'           	;1
320 255  SEND_VAR_EX/66            ?80       $122                 ?1                  	;0
321 255  DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
322 255  ECHO/40                   ?0        $123                 ?0                  	;0
323 257  ECHO/40                   ?0        197:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="pair_id">Paired Line</label>
													<div class="col-md-6">
														<select id="pair_id" name="pair_id" class="form-control" data-toggle="select2">
															' ?0                  	;0
324 258  ISSET_ISEMPTY_CV/197      #124=     16?1                 ?0                  	;33554432
325 258  JMPZ_EX/46                #124=     #124                 ?330                	;0	>>330
326 258  FETCH_DIM_R/81            $125=     16?1                 198:'user'          	;0
327 258  FETCH_DIM_R/81            $126=     $125                 199:'pair_id'       	;0
328 258  IS_SMALLER/19             #127=     200:0                $126                	;0
329 258  BOOL/52                   #124=     #127                 ?0                  	;0
330 258  BOOL_NOT/13               #128=     #124                 ?0                  	;0	<<325
331 258  JMPZ/43                   ?0        #128                 ?333                	;0	>>333
332 259  GOTO/253                  ?0        ?403                 ?201                	;0
333 261  GOTO/253                  ?0        ?75                  ?202                	;0	<<331
334 263  INCLUDE_OR_EVAL/73        ?117      203:'session.php'    ?0                  	;2	<<0
335 264  INCLUDE_OR_EVAL/73        ?118      204:'functions.php'  ?0                  	;2
336 265  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'e6D500E19634d513'	;0
337 265  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
338 265  JMPZ/43                   ?0        $131                 ?340                	;0	>>340
339 266  GOTO/253                  ?0        ?342                 ?207                	;0
340 268  INIT_FCALL_BY_NAME/59     ?0        ?0                   208:'e72F42a93714BA87'	;0	<<338
341 268  DO_FCALL_BY_NAME/131      ?120      ?0                   ?0                  	;0
342 270  GOTO/253                  ?0        ?343                 ?210                	;0
343 272  FETCH_STATIC_PROP_IS/176  $133=     211:'rRequest'       212:'XUI'           	;0
344 272  ISSET_ISEMPTY_DIM_OBJ/115 #134=     $133                 214:'id'            	;33554432
345 272  BOOL_NOT/13               #135=     #134                 ?0                  	;0
346 272  JMPZ/43                   ?0        #135                 ?348                	;0	>>348
347 273  GOTO/253                  ?0        ?302                 ?215                	;0
348 275  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'Ef70A93e98fB7cE9'	;1	<<346
349 275  FETCH_STATIC_PROP_FUNC_ARG/177 $136=     218:'rRequest'       219:'XUI'           	;1
350 275  FETCH_DIM_FUNC_ARG/93     $137=     $136                 221:'id'            	;1
351 275  SEND_VAR_EX/66            ?80       $137                 ?1                  	;0
352 275  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
353 275  ASSIGN/38                 ?127      16?1                 $138                	;0
354 276  FETCH_DIM_R/81            $140=     16?1                 222:'user_id'       	;0
355 276  JMPZ/43                   ?0        $140                 ?357                	;0	>>357
356 277  GOTO/253                  ?0        ?358                 ?223                	;0
357 279  EXIT/79                   ?0        ?0                   ?0                  	;0	<<355
358 281  GOTO/253                  ?0        ?302                 ?224                	;0
359 283  INCLUDE_OR_EVAL/73        ?129      225:'header.php'     ?0                  	;2
360 284  ECHO/40                   ?0        226:'<div class="wrapper boxed-layout"' ?0                  	;0
361 285  FETCH_IS/89               $142=     227:'_SERVER'        ?0                  	;0
362 285  ISSET_ISEMPTY_DIM_OBJ/115 #143=     $142                 228:'HTTP_X_REQUESTED_WITH'	;16777216
363 285  BOOL_NOT/13               #144=     #143                 ?0                  	;0
364 285  JMPZ_EX/46                #144=     #144                 ?372                	;0	>>372
365 285  INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'strtolower'    	;1
366 285  FETCH_FUNC_ARG/92         $145=     231:'_SERVER'        ?0                  	;1
367 285  FETCH_DIM_FUNC_ARG/93     $146=     $145                 232:'HTTP_X_REQUESTED_WITH'	;1
368 285  SEND_VAR_EX/66            ?80       $146                 ?1                  	;0
369 285  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
370 285  IS_EQUAL/17               #148=     $147                 233:'xmlhttprequest'	;0
371 285  BOOL/52                   #144=     #148                 ?0                  	;0
372 285  BOOL_NOT/13               #149=     #144                 ?0                  	;0	<<364
373 285  JMPZ/43                   ?0        #149                 ?375                	;0	>>375
374 286  GOTO/253                  ?0        ?376                 ?234                	;0
375 288  ECHO/40                   ?0        235:' style="display: none;"' ?0                  	;0	<<373
376 290  GOTO/253                  ?0        ?31                  ?236                	;0
377 292  ECHO/40                   ?0        237:'Edit'           ?0                  	;0
378 294  ECHO/40                   ?0        238:'" />
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
379 295  GOTO/253                  ?0        ?541                 ?239                	;0
380 298  ECHO/40                   ?0        240:'                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="javascript: void(0);" onClick="clearOwner();" class="btn btn-warning" style="width: 100%">Clear</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="exp_date">Expiry</i></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="' ?0                  	;0
381 299  ISSET_ISEMPTY_CV/197      #150=     16?1                 ?0                  	;33554432
382 299  JMPZ/43                   ?0        #150                 ?384                	;0	>>384
383 300  GOTO/253                  ?0        ?98                  ?241                	;0
384 302  INIT_FCALL_BY_NAME/59     ?0        ?0                   242:'date'          	;2	<<382
385 302  SEND_VAL_EX/116           ?80       244:'Y-m-d H:i:s'    ?1                  	;0
386 302  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'time'          	;0
387 302  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
388 302  ADD/1                     #152=     $151                 247:2592000         	;0
389 302  SEND_VAL_EX/116           ?96       #152                 ?2                  	;0
390 302  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
391 302  ECHO/40                   ?0        $153                 ?0                  	;0
392 303  GOTO/253                  ?0        ?227                 ?248                	;0
393 304  GOTO/253                  ?0        ?98                  ?249                	;0
394 306  FETCH_DIM_R/81            $154=     16?10                250:'streams'       	;0
395 306  ECHO/40                   ?0        $154                 ?0                  	;0
396 307  ECHO/40                   ?0        251:'</th>
                                                                <th class="text-center">' ?0                  	;0
397 308  FETCH_DIM_R/81            $155=     16?10                252:'movies'        	;0
398 308  ECHO/40                   ?0        $155                 ?0                  	;0
399 309  ECHO/40                   ?0        253:'</th>
                                                                <th class="text-center">' ?0                  	;0
400 310  FETCH_DIM_R/81            $156=     16?10                254:'series'        	;0
401 310  ECHO/40                   ?0        $156                 ?0                  	;0
402 311  GOTO/253                  ?0        ?423                 ?255                	;0
403 314  ECHO/40                   ?0        256:'														</select>
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
404 315  FETCH_DIM_IS/90           $157=     16?1                 257:'user'          	;0
405 315  ISSET_ISEMPTY_DIM_OBJ/115 #158=     $157                 258:'member_id'     	;33554432
406 315  JMPZ_EX/46                #158=     #158                 ?417                	;0	>>417
407 315  INIT_FCALL_BY_NAME/59     ?0        ?0                   259:'BA89228DC958cE05'	;1
408 315  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'intval'        	;1
409 315  FETCH_DIM_FUNC_ARG/93     $159=     16?1                 263:'user'          	;1
410 315  FETCH_DIM_FUNC_ARG/93     $160=     $159                 264:'member_id'     	;1
411 315  SEND_VAR_EX/66            ?80       $160                 ?1                  	;0
412 315  DO_FCALL_BY_NAME/131      $161=     ?0                   ?0                  	;0
413 315  SEND_VAR_NO_REF_EX/50     ?80       $161                 ?1                  	;0
414 315  DO_FCALL_BY_NAME/131      $162=     ?0                   ?0                  	;0
415 315  ASSIGN/38                 $163=     16?0                 $162                	;0
416 315  BOOL/52                   #158=     $163                 ?0                  	;0
417 315  JMPZ/43                   ?0        #158                 ?419                	;0	>>419	<<406
418 316  GOTO/253                  ?0        ?207                 ?265                	;0
419 318  ECHO/40                   ?0        266:'                                                                <option value="' ?0                  	;0	<<417
420 319  FETCH_DIM_R/81            $164=     16?6                 267:'id'            	;0
421 319  ECHO/40                   ?0        $164                 ?0                  	;0
422 320  GOTO/253                  ?0        ?202                 ?268                	;0
423 322  ECHO/40                   ?0        269:'</th>
                                                                <th class="text-center">' ?0                  	;0
424 323  FETCH_DIM_R/81            $165=     16?10                270:'stations'      	;0
425 323  ECHO/40                   ?0        $165                 ?0                  	;0
426 324  ECHO/40                   ?0        271:'</th
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
427 325  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'f964b9222b35aDdd'	;0
428 325  DO_FCALL_BY_NAME/131      $166=     ?0                   ?0                  	;0
429 325  FE_RESET_R/77             $167=     $166                 ?509                	;0
430 325  FE_FETCH_R/78             ?0        $167                 16?11               	;509	>>509	<<508
431 326  NOP/0                     ?0        ?0                   ?0                  	;1
432 326  GOTO/253                  ?0        ?485                 ?274                	;0
433 328  FETCH_DIM_R/81            $168=     16?11                275:'id'            	;0
434 328  ECHO/40                   ?0        $168                 ?0                  	;0
435 329  ECHO/40                   ?0        276:'</td>
																<td>' ?0                  	;0
436 330  FETCH_DIM_R/81            $169=     16?11                277:'bouquet_name'  	;0
437 330  ECHO/40                   ?0        $169                 ?0                  	;0
438 331  ECHO/40                   ?0        278:'</td>
																<td class="text-center">' ?0                  	;0
439 332  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'count'         	;1
440 332  INIT_FCALL_BY_NAME/59     ?0        ?0                   281:'json_decode'   	;2
441 332  FETCH_DIM_FUNC_ARG/93     $170=     16?11                283:'bouquet_channels'	;1
442 332  SEND_VAR_EX/66            ?80       $170                 ?1                  	;0
443 332  SEND_VAL_EX/116           ?96       284:true             ?2                  	;0
444 332  DO_FCALL_BY_NAME/131      $171=     ?0                   ?0                  	;0
445 332  SEND_VAR_NO_REF_EX/50     ?80       $171                 ?1                  	;0
446 332  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
447 332  ECHO/40                   ?0        $172                 ?0                  	;0
448 333  NOP/0                     ?0        ?0                   ?0                  	;1
449 333  GOTO/253                  ?0        ?462                 ?285                	;0
450 335  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'count'         	;1
451 335  INIT_FCALL_BY_NAME/59     ?0        ?0                   288:'json_decode'   	;2
452 335  FETCH_DIM_FUNC_ARG/93     $173=     16?11                290:'bouquet_radios'	;1
453 335  SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
454 335  SEND_VAL_EX/116           ?96       291:true             ?2                  	;0
455 335  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
456 335  SEND_VAR_NO_REF_EX/50     ?80       $174                 ?1                  	;0
457 335  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
458 335  ECHO/40                   ?0        $175                 ?0                  	;0
459 336  ECHO/40                   ?0        292:'</td>
															</tr>
															' ?0                  	;0
460 338  NOP/0                     ?0        ?0                   ?0                  	;1
461 338  GOTO/253                  ?0        ?508                 ?293                	;0
462 340  ECHO/40                   ?0        294:'</td>
                                                                <td class="text-center">' ?0                  	;0
463 341  INIT_FCALL_BY_NAME/59     ?0        ?0                   295:'count'         	;1
464 341  INIT_FCALL_BY_NAME/59     ?0        ?0                   297:'json_decode'   	;2
465 341  FETCH_DIM_FUNC_ARG/93     $176=     16?11                299:'bouquet_movies'	;1
466 341  SEND_VAR_EX/66            ?80       $176                 ?1                  	;0
467 341  SEND_VAL_EX/116           ?96       300:true             ?2                  	;0
468 341  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
469 341  SEND_VAR_NO_REF_EX/50     ?80       $177                 ?1                  	;0
470 341  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
471 341  ECHO/40                   ?0        $178                 ?0                  	;0
472 342  ECHO/40                   ?0        301:'</td>
                                                                <td class="text-center">' ?0                  	;0
473 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   302:'count'         	;1
474 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   304:'json_decode'   	;2
475 343  FETCH_DIM_FUNC_ARG/93     $179=     16?11                306:'bouquet_series'	;1
476 343  SEND_VAR_EX/66            ?80       $179                 ?1                  	;0
477 343  SEND_VAL_EX/116           ?96       307:true             ?2                  	;0
478 343  DO_FCALL_BY_NAME/131      $180=     ?0                   ?0                  	;0
479 343  SEND_VAR_NO_REF_EX/50     ?80       $180                 ?1                  	;0
480 343  DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
481 343  ECHO/40                   ?0        $181                 ?0                  	;0
482 344  ECHO/40                   ?0        308:'</td>
                                                                <td class="text-center">' ?0                  	;0
483 345  NOP/0                     ?0        ?0                   ?0                  	;1
484 345  GOTO/253                  ?0        ?450                 ?309                	;0
485 347  ECHO/40                   ?0        310:'															<tr' ?0                  	;0
486 348  ISSET_ISEMPTY_CV/197      #182=     16?1                 ?0                  	;33554432
487 348  JMPZ_EX/46                #182=     #182                 ?500                	;0	>>500
488 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'in_array'      	;2
489 348  FETCH_DIM_FUNC_ARG/93     $183=     16?11                313:'id'            	;1
490 348  SEND_VAR_EX/66            ?80       $183                 ?1                  	;0
491 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'json_decode'   	;2
492 348  FETCH_DIM_FUNC_ARG/93     $184=     16?1                 316:'user'          	;1
493 348  FETCH_DIM_FUNC_ARG/93     $185=     $184                 317:'bouquet'       	;1
494 348  SEND_VAR_EX/66            ?80       $185                 ?1                  	;0
495 348  SEND_VAL_EX/116           ?96       318:true             ?2                  	;0
496 348  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
497 348  SEND_VAR_NO_REF_EX/50     ?96       $186                 ?2                  	;0
498 348  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
499 348  BOOL/52                   #182=     $187                 ?0                  	;0
500 348  BOOL_NOT/13               #188=     #182                 ?0                  	;0	<<487
501 348  JMPZ/43                   ?0        #188                 ?504                	;0	>>504
502 349  NOP/0                     ?0        ?0                   ?0                  	;1
503 349  GOTO/253                  ?0        ?505                 ?319                	;0
504 351  ECHO/40                   ?0        320:' class=\'selected selectedfilter ui-selected\'' ?0                  	;0	<<501
505 353  ECHO/40                   ?0        321:'>
																<td class="text-center">' ?0                  	;0
506 354  NOP/0                     ?0        ?0                   ?0                  	;1
507 354  GOTO/253                  ?0        ?433                 ?322                	;0
508 355  JMP/42                    ?0        ?430                 ?0                  	;0	>>430
509 355  FE_FREE/127               ?0        $167                 ?0                  	;0	<<429
510 358  GOTO/253                  ?0        ?519                 ?323                	;0
511 360  ECHO/40                   ?0        324:'							<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									' ?0                  	;0
512 361  ISSET_ISEMPTY_DIM_OBJ/115 #189=     16?1                 325:'device_id'     	;33554432
513 361  BOOL_NOT/13               #190=     #189                 ?0                  	;0
514 361  JMPZ/43                   ?0        #190                 ?516                	;0	>>516
515 362  GOTO/253                  ?0        ?517                 ?326                	;0
516 364  ECHO/40                   ?0        327:'									<li class="nav-item">
										<a href="#device-info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi mdi-cellphone-key mr-1"></i>
											<span class="d-none d-sm-inline">Device Info</span>
										</a>
									</li>
									' ?0                  	;0	<<514
517 366  ECHO/40                   ?0        328:'									<li class="nav-item">
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
518 367  GOTO/253                  ?0        ?314                 ?329                	;0
519 369  ECHO/40                   ?0        330:'														</tbody>
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
520 370  ISSET_ISEMPTY_CV/197      #191=     16?1                 ?0                  	;33554432
521 370  JMPZ/43                   ?0        #191                 ?523                	;0	>>523
522 371  GOTO/253                  ?0        ?525                 ?331                	;0
523 373  ECHO/40                   ?0        332:'Add'            ?0                  	;0	<<521
524 374  GOTO/253                  ?0        ?378                 ?333                	;0
525 376  GOTO/253                  ?0        ?377                 ?334                	;0
526 378  ECHO/40                   ?0        335:'">
													</div>
													<label class="col-md-2 col-form-label" for="cpu">CPU</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="cpu" name="cpu" value="' ?0                  	;0
527 379  FETCH_DIM_R/81            $192=     16?1                 336:'cpu'           	;0
528 379  ECHO/40                   ?0        $192                 ?0                  	;0
529 380  ECHO/40                   ?0        337:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="lversion">Linux Version</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="lversion" name="lversion" value="' ?0                  	;0
530 381  FETCH_DIM_R/81            $193=     16?1                 338:'lversion'      	;0
531 381  ECHO/40                   ?0        $193                 ?0                  	;0
532 382  ECHO/40                   ?0        339:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="token">Token</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="token" name="token" value="' ?0                  	;0
533 383  GOTO/253                  ?0        ?22                  ?340                	;0
534 386  FETCH_DIM_R/81            $194=     16?1                 341:'lock_device'   	;0
535 386  IS_EQUAL/17               #195=     $194                 342:1               	;0
536 386  BOOL_NOT/13               #196=     #195                 ?0                  	;0
537 386  JMPZ/43                   ?0        #196                 ?539                	;0	>>539
538 387  GOTO/253                  ?0        ?540                 ?343                	;0
539 389  ECHO/40                   ?0        344:'checked '       ?0                  	;0	<<537
540 392  GOTO/253                  ?0        ?39                  ?345                	;0
541 394  INCLUDE_OR_EVAL/73        ?185      346:'footer.php'     ?0                  	;2
542 395  NOP/0                     ?0        347:1                ?0                  	;4294967295
*/

?>