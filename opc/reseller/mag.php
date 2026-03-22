<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?26                  ?0                  	;0	>>26
1   5    ECHO/40                   ?0        1:'">
													</div>
													<label class="col-md-2 col-form-label" for="stb_type">STB Type</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="stb_type" name="stb_type" value="' ?0                  	;0
2   6    INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'htmlspecialchars'	;1
3   6    FETCH_DIM_FUNC_ARG/93     $15=      16?0                 4:'stb_type'        	;1
4   6    SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
5   6    DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
6   6    ECHO/40                   ?0        $16                  ?0                  	;0
7   7    ECHO/40                   ?0        5:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="image_version">Image Version</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="image_version" name="image_version" value="' ?0                  	;0
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'htmlspecialchars'	;1
9   8    FETCH_DIM_FUNC_ARG/93     $17=      16?0                 8:'image_version'   	;1
10  8    SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
11  8    DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
12  8    ECHO/40                   ?0        $18                  ?0                  	;0
13  9    ECHO/40                   ?0        9:'">
													</div>
													<label class="col-md-2 col-form-label" for="hw_version">HW Version</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="hw_version" name="hw_version" value="' ?0                  	;0
14  10   GOTO/253                  ?0        ?195                 ?10                 	;0
15  13   ECHO/40                   ?0        11:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>
                                                        <div class="col-md-8 input-group">
                                                            <input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="' ?0                  	;0
16  14   ISSET_ISEMPTY_CV/197      #19=      16?1                 ?0                  	;33554432
17  14   BOOL_NOT/13               #20=      #19                  ?0                  	;0
18  14   JMPZ/43                   ?0        #20                  ?20                 	;0	>>20
19  15   GOTO/253                  ?0        ?25                  ?12                 	;0
20  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'htmlspecialchars'	;1	<<18
21  17   FETCH_DIM_FUNC_ARG/93     $21=      16?1                 15:'isp_desc'       	;1
22  17   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
23  17   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
24  17   ECHO/40                   ?0        $22                  ?0                  	;0
25  19   GOTO/253                  ?0        ?367                 ?16                 	;0
26  21   INCLUDE_OR_EVAL/73        ?8        17:'session.php'     ?0                  	;2	<<0
27  22   INCLUDE_OR_EVAL/73        ?9        18:'functions.php'   ?0                  	;2
28  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'baf6e9Ef7775B5A9'	;0
29  23   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
30  23   JMPZ/43                   ?0        $25                  ?32                 	;0	>>32
31  24   GOTO/253                  ?0        ?34                  ?21                 	;0
32  26   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'e72f42a93714ba87'	;0	<<30
33  26   DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
34  28   GOTO/253                  ?0        ?521                 ?24                 	;0
35  30   ECHO/40                   ?0        25:'>'               ?0                  	;0
36  31   FETCH_DIM_R/81            $27=      16?2                 26:'username'       	;0
37  31   ECHO/40                   ?0        $27                  ?0                  	;0
38  32   ECHO/40                   ?0        27:'</option>
                                                            </optgroup>
                                                            ' ?0                  	;0
39  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'count'          	;1
40  33   FETCH_DIM_FUNC_ARG/93     $28=      16?3                 30:'direct_reports' 	;1
41  33   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
42  33   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
43  33   IS_SMALLER/19             #30=      31:0                 $29                 	;0
44  33   BOOL_NOT/13               #31=      #30                  ?0                  	;0
45  33   JMPZ/43                   ?0        #31                  ?47                 	;0	>>47
46  34   GOTO/253                  ?0        ?294                 ?32                 	;0
47  36   ECHO/40                   ?0        33:'                                                            <optgroup label="Direct Reports">
                                                                ' ?0                  	;0	<<45
48  37   GOTO/253                  ?0        ?260                 ?34                 	;0
49  40   FETCH_STATIC_PROP_IS/176  $32=      35:'rRequest'        36:'XUI'            	;0
50  40   ISSET_ISEMPTY_DIM_OBJ/115 #33=      $32                  38:'trial'          	;33554432
51  40   BOOL_NOT/13               #34=      #33                  ?0                  	;0
52  40   JMPZ/43                   ?0        #34                  ?54                 	;0	>>54
53  41   GOTO/253                  ?0        ?55                  ?39                 	;0
54  43   ECHO/40                   ?0        40:' Trial'          ?0                  	;0	<<52
55  45   ECHO/40                   ?0        41:' MAG Device</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
                ' ?0                  	;0
56  46   GOTO/253                  ?0        ?401                 ?42                 	;0
57  48   FETCH_DIM_R/81            $35=      16?2                 43:'id'             	;0
58  48   ECHO/40                   ?0        $35                  ?0                  	;0
59  49   ECHO/40                   ?0        44:'"'               ?0                  	;0
60  50   ISSET_ISEMPTY_DIM_OBJ/115 #36=      16?1                 45:'member_id'      	;33554432
61  50   JMPZ_EX/46                #36=      #36                  ?66                 	;0	>>66
62  50   FETCH_DIM_R/81            $37=      16?1                 46:'member_id'      	;0
63  50   FETCH_DIM_R/81            $38=      16?2                 47:'id'             	;0
64  50   IS_EQUAL/17               #39=      $37                  $38                 	;0
65  50   BOOL/52                   #36=      #39                  ?0                  	;0
66  50   BOOL_NOT/13               #40=      #36                  ?0                  	;0	<<61
67  50   JMPZ/43                   ?0        #40                  ?69                 	;0	>>69
68  51   GOTO/253                  ?0        ?70                  ?48                 	;0
69  53   ECHO/40                   ?0        49:' selected'       ?0                  	;0	<<67
70  55   GOTO/253                  ?0        ?35                  ?50                 	;0
71  57   ECHO/40                   ?0        51:'" disabled="disabled' ?0                  	;0
72  58   GOTO/253                  ?0        ?79                  ?52                 	;0
73  60   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'date'           	;2
74  60   SEND_VAL_EX/116           ?80       55:'Y-m-d H:i'       ?1                  	;0
75  60   FETCH_DIM_FUNC_ARG/93     $41=      16?1                 56:'exp_date'       	;2
76  60   SEND_VAR_EX/66            ?96       $41                  ?2                  	;0
77  60   DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
78  60   ECHO/40                   ?0        $42                  ?0                  	;0
79  62   GOTO/253                  ?0        ?557                 ?57                 	;0
80  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'htmlspecialchars'	;1
81  64   FETCH_DIM_FUNC_ARG/93     $43=      16?1                 60:'reseller_notes' 	;1
82  64   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
83  64   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
84  64   ECHO/40                   ?0        $44                  ?0                  	;0
85  66   ECHO/40                   ?0        61:'</textarea>
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
86  67   ISSET_ISEMPTY_DIM_OBJ/115 #45=      16?0                 62:'mag_id'         	;33554432
87  67   BOOL_NOT/13               #46=      #45                  ?0                  	;0
88  67   JMPZ/43                   ?0        #46                  ?90                 	;0	>>90
89  68   GOTO/253                  ?0        ?132                 ?63                 	;0
90  70   ECHO/40                   ?0        64:'									<div class="tab-pane" id="device-info">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Username</label>
													<div class="col-md-8">
														<input type="text" readonly class="form-control sticky" id="username" value="' ?0                  	;0	<<88
91  71   GOTO/253                  ?0        ?349                 ?65                 	;0
92  73   ASSIGN/38                 ?32       16?4                 66:'MAG Device'     	;0
93  74   INCLUDE_OR_EVAL/73        ?33       67:'header.php'      ?0                  	;2
94  75   ECHO/40                   ?0        68:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
95  76   INCLUDE_OR_EVAL/73        ?34       69:'topbar.php'      ?0                  	;2
96  77   ECHO/40                   ?0        70:'					</div>
					<h4 class="page-title">' ?0                  	;0
97  78   GOTO/253                  ?0        ?98                  ?71                 	;0
98  80   ISSET_ISEMPTY_CV/197      #50=      16?0                 ?0                  	;33554432
99  80   JMPZ/43                   ?0        #50                  ?101                	;0	>>101
100 81   GOTO/253                  ?0        ?103                 ?72                 	;0
101 83   ECHO/40                   ?0        73:'Add'             ?0                  	;0	<<99
102 84   GOTO/253                  ?0        ?49                  ?74                 	;0
103 86   ECHO/40                   ?0        75:'Edit'            ?0                  	;0
104 87   GOTO/253                  ?0        ?49                  ?76                 	;0
105 89   ECHO/40                   ?0        77:'									<div class="tab-pane" id="advanced-options">
										<div class="row">
											<div class="col-12">
                                                <div class="alert alert-warning" role="alert" id="advanced_warning" style="display: none;">
                                                    This device is linked to a user, the options for that user will be used.
                                                </div>
                                                <div id="advanced_info">
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
106 90   ISSET_ISEMPTY_CV/197      #51=      16?0                 ?0                  	;33554432
107 90   BOOL_NOT/13               #52=      #51                  ?0                  	;0
108 90   JMPZ/43                   ?0        #52                  ?110                	;0	>>110
109 91   GOTO/253                  ?0        ?124                 ?78                 	;0
110 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'json_decode'    	;2	<<108
111 93   FETCH_DIM_FUNC_ARG/93     $53=      16?1                 81:'allowed_ips'    	;1
112 93   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
113 93   SEND_VAL_EX/116           ?96       82:true              ?2                  	;0
114 93   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
115 93   FE_RESET_R/77             $55=      $54                  ?123                	;0
116 93   FE_FETCH_R/78             ?0        $55                  16?5                	;123	>>123	<<122
117 94   ECHO/40                   ?0        83:'                                                            <option value="' ?0                  	;0
118 95   ECHO/40                   ?0        16?5                 ?0                  	;0
119 96   ECHO/40                   ?0        84:'">'              ?0                  	;0
120 97   ECHO/40                   ?0        16?5                 ?0                  	;0
121 98   ECHO/40                   ?0        85:'</option>
                                                            ' ?0                  	;0
122 99   JMP/42                    ?0        ?116                 ?0                  	;0	>>116
123 99   FE_FREE/127               ?0        $55                  ?0                  	;0	<<115
124 103  GOTO/253                  ?0        ?315                 ?86                 	;0
125 105  ECHO/40                   ?0        87:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="ver">Version</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="ver" name="ver" value="' ?0                  	;0
126 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'htmlspecialchars'	;1
127 106  FETCH_DIM_FUNC_ARG/93     $56=      16?0                 90:'ver'            	;1
128 106  SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
129 106  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
130 106  ECHO/40                   ?0        $57                  ?0                  	;0
131 107  ECHO/40                   ?0        91:'">
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
132 109  FETCH_DIM_R/81            $58=      16?3                 92:'allow_restrictions'	;0
133 109  BOOL_NOT/13               #59=      $58                  ?0                  	;0
134 109  JMPZ/43                   ?0        #59                  ?136                	;0	>>136
135 110  GOTO/253                  ?0        ?368                 ?93                 	;0
136 112  GOTO/253                  ?0        ?105                 ?94                 	;0	<<134
137 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'htmlspecialchars'	;1
138 115  FETCH_DIM_FUNC_ARG/93     $60=      16?0                 97:'parent_password'	;1
139 115  SEND_VAR_EX/66            ?80       $60                  ?1                  	;0
140 115  DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
141 115  ECHO/40                   ?0        $61                  ?0                  	;0
142 117  ECHO/40                   ?0        98:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>
													<div class="col-md-8">
														<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
143 118  ISSET_ISEMPTY_CV/197      #62=      16?0                 ?0                  	;33554432
144 118  BOOL_NOT/13               #63=      #62                  ?0                  	;0
145 118  JMPZ/43                   ?0        #63                  ?147                	;0	>>147
146 119  GOTO/253                  ?0        ?85                  ?99                 	;0
147 121  GOTO/253                  ?0        ?80                  ?100                	;0	<<145
148 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'Ba89228Dc958Ce05'	;1
149 123  FETCH_DIM_FUNC_ARG/93     $64=      16?1                 103:'member_id'     	;1
150 123  SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
151 123  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
152 123  ASSIGN/38                 ?51       16?6                 $65                 	;0
153 124  ECHO/40                   ?0        104:'                <div class="alert alert-info" role="alert">
                    This device does not belong to you, although you have the right to edit this device you should notify the device\'s owner <strong><a href="user?id=' ?0                  	;0
154 125  FETCH_DIM_R/81            $67=      16?6                 105:'id'            	;0
155 125  ECHO/40                   ?0        $67                  ?0                  	;0
156 126  ECHO/40                   ?0        106:'">'             ?0                  	;0
157 127  FETCH_DIM_R/81            $68=      16?6                 107:'username'      	;0
158 127  ECHO/40                   ?0        $68                  ?0                  	;0
159 128  GOTO/253                  ?0        ?327                 ?108                	;0
160 130  ECHO/40                   ?0        109:'														</select>
													</div>
												</div>
                                                ' ?0                  	;0
161 132  ISSET_ISEMPTY_CV/197      #69=      16?7                 ?0                  	;33554432
162 132  BOOL_NOT/13               #70=      #69                  ?0                  	;0
163 132  JMPZ/43                   ?0        #70                  ?165                	;0	>>165
164 133  GOTO/253                  ?0        ?378                 ?110                	;0
165 135  ECHO/40                   ?0        111:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="orig_package">Original Package</label>
                                                    <div class="col-md-8">
                                                        <input type="text" readonly class="form-control" id="orig_package" name="orig_package" value="' ?0                  	;0	<<163
166 136  FETCH_DIM_R/81            $71=      16?7                 112:'package_name'  	;0
167 136  ECHO/40                   ?0        $71                  ?0                  	;0
168 137  GOTO/253                  ?0        ?377                 ?113                	;0
169 139  FETCH_DIM_R/81            $72=      16?8                 114:'stations'      	;0
170 139  ECHO/40                   ?0        $72                  ?0                  	;0
171 140  ECHO/40                   ?0        115:'</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                        <ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                            </li>
                                            <li class="next list-inline-item float-right">
                                                <input name="submit_line" id="submit_button" type="submit" class="btn btn-primary purchase" value="Purchase" />
                                            </li>
                                        </ul>
                                    </div>
								</div> 
							</div> 
						</form>
					</div> 
				</div>
                ' ?0                  	;0
172 141  GOTO/253                  ?0        ?214                 ?116                	;0
173 143  ECHO/40                   ?0        117:'                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ' ?0                  	;0
174 144  GOTO/253                  ?0        ?571                 ?118                	;0
175 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'number_format' 	;2
176 146  FETCH_DIM_FUNC_ARG/93     $73=      16?2                 121:'credits'       	;1
177 146  SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
178 146  SEND_VAL_EX/116           ?96       122:0                ?2                  	;0
179 146  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
180 146  ECHO/40                   ?0        $74                  ?0                  	;0
181 147  ECHO/40                   ?0        123:'</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id="datatable-review" class="table table-striped table-borderless dt-responsive nowrap" style="margin-top:30px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center"></th>
                                                                <th>' ?0                  	;0
182 148  FETCH_DIM_R/81            $75=      16?8                 124:'bouquet_name'  	;0
183 148  ECHO/40                   ?0        $75                  ?0                  	;0
184 149  ECHO/40                   ?0        125:'</th>
                                                                <th class="text-center">' ?0                  	;0
185 150  FETCH_DIM_R/81            $76=      16?8                 126:'streams'       	;0
186 150  ECHO/40                   ?0        $76                  ?0                  	;0
187 151  GOTO/253                  ?0        ?307                 ?127                	;0
188 153  ECHO/40                   ?0        128:'									<li class="nav-item">
										<a href="#device-info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi mdi-cellphone-key mr-1"></i>
											<span class="d-none d-sm-inline">Device Info</span>
										</a>
									</li>
									' ?0                  	;0
189 155  FETCH_DIM_R/81            $77=      16?3                 129:'allow_restrictions'	;0
190 155  BOOL_NOT/13               #78=      $77                  ?0                  	;0
191 155  JMPZ/43                   ?0        #78                  ?193                	;0	>>193
192 156  GOTO/253                  ?0        ?194                 ?130                	;0
193 158  ECHO/40                   ?0        131:'									<li class="nav-item">
										<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-hazard-lights mr-1"></i>
											<span class="d-none d-sm-inline">Restrictions</span>
										</a>
									</li>
                                    ' ?0                  	;0	<<191
194 160  GOTO/253                  ?0        ?564                 ?132                	;0
195 162  INIT_FCALL_BY_NAME/59     ?0        ?0                   133:'htmlspecialchars'	;1
196 162  FETCH_DIM_FUNC_ARG/93     $79=      16?0                 135:'hw_version'    	;1
197 162  SEND_VAR_EX/66            ?80       $79                  ?1                  	;0
198 162  DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
199 162  ECHO/40                   ?0        $80                  ?0                  	;0
200 163  ECHO/40                   ?0        136:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="device_id">Primary Device ID</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="device_id" name="device_id" value="' ?0                  	;0
201 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'htmlspecialchars'	;1
202 164  FETCH_DIM_FUNC_ARG/93     $81=      16?0                 139:'device_id'     	;1
203 164  SEND_VAR_EX/66            ?80       $81                  ?1                  	;0
204 164  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
205 164  ECHO/40                   ?0        $82                  ?0                  	;0
206 165  ECHO/40                   ?0        140:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="device_id2">Secondary Device ID</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="device_id2" name="device_id2" value="' ?0                  	;0
207 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   141:'htmlspecialchars'	;1
208 166  FETCH_DIM_FUNC_ARG/93     $83=      16?0                 143:'device_id2'    	;1
209 166  SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
210 166  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
211 166  ECHO/40                   ?0        $84                  ?0                  	;0
212 167  GOTO/253                  ?0        ?125                 ?144                	;0
213 170  ECHO/40                   ?0        145:'                </div>
                ' ?0                  	;0
214 172  ECHO/40                   ?0        146:'			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
215 173  GOTO/253                  ?0        ?578                 ?147                	;0
216 175  ECHO/40                   ?0        148:'                                                            <optgroup label="Indirect Reports">
                                                                ' ?0                  	;0
217 176  FETCH_DIM_R/81            $85=      16?3                 149:'all_reports'   	;0
218 176  FE_RESET_R/77             $86=      $85                  ?257                	;0
219 176  FE_FETCH_R/78             ?0        $86                  16?9                	;257	>>257	<<256
220 177  NOP/0                     ?0        ?0                   ?0                  	;1
221 177  GOTO/253                  ?0        ?237                 ?150                	;0
222 179  ISSET_ISEMPTY_DIM_OBJ/115 #87=      16?1                 151:'member_id'     	;33554432
223 179  JMPZ_EX/46                #87=      #87                  ?227                	;0	>>227
224 179  FETCH_DIM_R/81            $88=      16?1                 152:'member_id'     	;0
225 179  IS_EQUAL/17               #89=      $88                  16?9                	;0
226 179  BOOL/52                   #87=      #89                  ?0                  	;0
227 179  BOOL_NOT/13               #90=      #87                  ?0                  	;0	<<223
228 179  JMPZ/43                   ?0        #90                  ?231                	;0	>>231
229 180  NOP/0                     ?0        ?0                   ?0                  	;1
230 180  GOTO/253                  ?0        ?232                 ?153                	;0
231 182  ECHO/40                   ?0        154:' selected'      ?0                  	;0	<<228
232 184  ECHO/40                   ?0        155:'>'              ?0                  	;0
233 185  FETCH_DIM_R/81            $91=      16?10                156:'username'      	;0
234 185  ECHO/40                   ?0        $91                  ?0                  	;0
235 186  NOP/0                     ?0        ?0                   ?0                  	;1
236 186  GOTO/253                  ?0        ?253                 ?157                	;0
237 188  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'in_array'      	;2
238 188  SEND_VAR_EX/66            ?80       16?9                 ?1                  	;0
239 188  FETCH_DIM_FUNC_ARG/93     $92=      16?3                 160:'direct_reports'	;2
240 188  SEND_VAR_EX/66            ?96       $92                  ?2                  	;0
241 188  DO_FCALL_BY_NAME/131      $93=      ?0                   ?0                  	;0
242 188  JMPZ/43                   ?0        $93                  ?245                	;0	>>245
243 189  NOP/0                     ?0        ?0                   ?0                  	;1
244 189  GOTO/253                  ?0        ?254                 ?161                	;0
245 191  FETCH_DIM_R/81            $94=      16?3                 162:'users'         	;0	<<242
246 191  FETCH_DIM_R/81            $95=      $94                  16?9                	;0
247 191  ASSIGN/38                 ?81       16?10                $95                 	;0
248 192  ECHO/40                   ?0        163:'                                                                    <option value="' ?0                  	;0
249 193  ECHO/40                   ?0        16?9                 ?0                  	;0
250 194  ECHO/40                   ?0        164:'"'              ?0                  	;0
251 195  NOP/0                     ?0        ?0                   ?0                  	;1
252 195  GOTO/253                  ?0        ?222                 ?165                	;0
253 197  ECHO/40                   ?0        166:'</option>
                                                                    ' ?0                  	;0
254 200  NOP/0                     ?0        ?0                   ?0                  	;1
255 200  GOTO/253                  ?0        ?256                 ?167                	;0
256 201  JMP/42                    ?0        ?219                 ?0                  	;0	>>219
257 201  FE_FREE/127               ?0        $86                  ?0                  	;0	<<218
258 204  ECHO/40                   ?0        168:'                                                            </optgroup>
                                                            ' ?0                  	;0
259 206  GOTO/253                  ?0        ?160                 ?169                	;0
260 208  FETCH_DIM_R/81            $97=      16?3                 170:'direct_reports'	;0
261 208  FE_RESET_R/77             $98=      $97                  ?292                	;0
262 208  FE_FETCH_R/78             ?0        $98                  16?9                	;292	>>292	<<291
263 209  NOP/0                     ?0        ?0                   ?0                  	;1
264 209  GOTO/253                  ?0        ?265                 ?171                	;0
265 211  FETCH_DIM_R/81            $99=      16?3                 172:'users'         	;0
266 211  FETCH_DIM_R/81            $100=     $99                  16?9                	;0
267 211  ASSIGN/38                 ?86       16?10                $100                	;0
268 212  ECHO/40                   ?0        173:'                                                                <option value="' ?0                  	;0
269 213  ECHO/40                   ?0        16?9                 ?0                  	;0
270 214  ECHO/40                   ?0        174:'"'              ?0                  	;0
271 215  ISSET_ISEMPTY_DIM_OBJ/115 #102=     16?1                 175:'member_id'     	;33554432
272 215  JMPZ_EX/46                #102=     #102                 ?276                	;0	>>276
273 215  FETCH_DIM_R/81            $103=     16?1                 176:'member_id'     	;0
274 215  IS_EQUAL/17               #104=     $103                 16?9                	;0
275 215  BOOL/52                   #102=     #104                 ?0                  	;0
276 215  BOOL_NOT/13               #105=     #102                 ?0                  	;0	<<272
277 215  JMPZ/43                   ?0        #105                 ?280                	;0	>>280
278 216  NOP/0                     ?0        ?0                   ?0                  	;1
279 216  GOTO/253                  ?0        ?283                 ?177                	;0
280 218  NOP/0                     ?0        ?0                   ?0                  	;1	<<277
281 218  GOTO/253                  ?0        ?282                 ?178                	;0
282 220  ECHO/40                   ?0        179:' selected'      ?0                  	;0
283 222  ECHO/40                   ?0        180:'>'              ?0                  	;0
284 223  FETCH_DIM_R/81            $106=     16?10                181:'username'      	;0
285 223  ECHO/40                   ?0        $106                 ?0                  	;0
286 224  ECHO/40                   ?0        182:'</option>
                                                                ' ?0                  	;0
287 225  NOP/0                     ?0        ?0                   ?0                  	;1
288 225  GOTO/253                  ?0        ?289                 ?183                	;0
289 228  NOP/0                     ?0        ?0                   ?0                  	;1
290 228  GOTO/253                  ?0        ?291                 ?184                	;0
291 229  JMP/42                    ?0        ?262                 ?0                  	;0	>>262
292 229  FE_FREE/127               ?0        $98                  ?0                  	;0	<<261
293 232  ECHO/40                   ?0        185:'                                                            </optgroup>
                                                            ' ?0                  	;0
294 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'count'         	;1
295 234  FETCH_DIM_FUNC_ARG/93     $107=     16?3                 188:'all_reports'   	;1
296 234  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
297 234  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
298 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   189:'count'         	;1
299 234  FETCH_DIM_FUNC_ARG/93     $109=     16?3                 191:'direct_reports'	;1
300 234  SEND_VAR_EX/66            ?80       $109                 ?1                  	;0
301 234  DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
302 234  IS_SMALLER/19             #111=     $110                 $108                	;0
303 234  BOOL_NOT/13               #112=     #111                 ?0                  	;0
304 234  JMPZ/43                   ?0        #112                 ?306                	;0	>>306
305 235  GOTO/253                  ?0        ?259                 ?192                	;0
306 237  GOTO/253                  ?0        ?216                 ?193                	;0	<<304
307 239  ECHO/40                   ?0        194:'</th>
                                                                <th class="text-center">' ?0                  	;0
308 240  FETCH_DIM_R/81            $113=     16?8                 195:'movies'        	;0
309 240  ECHO/40                   ?0        $113                 ?0                  	;0
310 241  ECHO/40                   ?0        196:'</th>
                                                                <th class="text-center">' ?0                  	;0
311 242  FETCH_DIM_R/81            $114=     16?8                 197:'series'        	;0
312 242  ECHO/40                   ?0        $114                 ?0                  	;0
313 243  ECHO/40                   ?0        198:'</th>
                                                                <th class="text-center">' ?0                  	;0
314 244  GOTO/253                  ?0        ?169                 ?199                	;0
315 246  ECHO/40                   ?0        200:'                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>
                                                        <div class="col-md-2">
                                                            <input name="is_isplock" id="is_isplock" type="checkbox" ' ?0                  	;0
316 247  ISSET_ISEMPTY_CV/197      #115=     16?1                 ?0                  	;33554432
317 247  BOOL_NOT/13               #116=     #115                 ?0                  	;0
318 247  JMPZ/43                   ?0        #116                 ?320                	;0	>>320
319 248  GOTO/253                  ?0        ?15                  ?201                	;0
320 250  FETCH_DIM_R/81            $117=     16?1                 202:'is_isplock'    	;0	<<318
321 250  IS_EQUAL/17               #118=     $117                 203:1               	;0
322 250  BOOL_NOT/13               #119=     #118                 ?0                  	;0
323 250  JMPZ/43                   ?0        #119                 ?325                	;0	>>325
324 251  GOTO/253                  ?0        ?326                 ?204                	;0
325 253  ECHO/40                   ?0        205:'checked '       ?0                  	;0	<<323
326 255  GOTO/253                  ?0        ?15                  ?206                	;0
327 257  ECHO/40                   ?0        207:'</a></strong> when doing so.
                </div>
                ' ?0                  	;0
328 259  ECHO/40                   ?0        208:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
329 260  ISSET_ISEMPTY_DIM_OBJ/115 #120=     16?0                 209:'mag_id'        	;33554432
330 260  JMPZ_EX/46                #120=     #120                 ?334                	;0	>>334
331 260  ISSET_ISEMPTY_CV/197      #121=     16?11                ?0                  	;33554432
332 260  BOOL_NOT/13               #122=     #121                 ?0                  	;0
333 260  BOOL/52                   #120=     #122                 ?0                  	;0
334 260  JMPZ/43                   ?0        #120                 ?336                	;0	>>336	<<330
335 261  GOTO/253                  ?0        ?399                 ?210                	;0
336 263  FETCH_STATIC_PROP_IS/176  $123=     211:'rRequest'       212:'XUI'           	;0	<<334
337 263  ISSET_ISEMPTY_DIM_OBJ/115 #124=     $123                 214:'trial'         	;33554432
338 263  BOOL_NOT/13               #125=     #124                 ?0                  	;0
339 263  JMPZ/43                   ?0        #125                 ?341                	;0	>>341
340 264  GOTO/253                  ?0        ?398                 ?215                	;0
341 266  GOTO/253                  ?0        ?397                 ?216                	;0	<<339
342 269  ECHO/40                   ?0        217:'Package</label>
                                                    <div class="col-md-8">
                                                        <select name="package" id="package" class="form-control select2" data-toggle="select2">
                                                            ' ?0                  	;0
343 270  ISSET_ISEMPTY_CV/197      #126=     16?1                 ?0                  	;33554432
344 270  BOOL_NOT/13               #127=     #126                 ?0                  	;0
345 270  JMPZ/43                   ?0        #127                 ?347                	;0	>>347
346 271  GOTO/253                  ?0        ?348                 ?218                	;0
347 273  ECHO/40                   ?0        219:'                                                            <option value="">No Changes</option>
                                                            ' ?0                  	;0	<<345
348 275  GOTO/253                  ?0        ?469                 ?220                	;0
349 277  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'htmlspecialchars'	;1
350 277  FETCH_DIM_FUNC_ARG/93     $128=     16?1                 223:'username'      	;1
351 277  SEND_VAR_EX/66            ?80       $128                 ?1                  	;0
352 277  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
353 277  ECHO/40                   ?0        $129                 ?0                  	;0
354 278  ECHO/40                   ?0        224:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Password</label>
													<div class="col-md-8">
														<input type="text" readonly class="form-control sticky" id="password" value="' ?0                  	;0
355 279  INIT_FCALL_BY_NAME/59     ?0        ?0                   225:'htmlspecialchars'	;1
356 279  FETCH_DIM_FUNC_ARG/93     $130=     16?1                 227:'password'      	;1
357 279  SEND_VAR_EX/66            ?80       $130                 ?1                  	;0
358 279  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
359 279  ECHO/40                   ?0        $131                 ?0                  	;0
360 280  ECHO/40                   ?0        228:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="sn">Serial Number</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="sn" name="sn" value="' ?0                  	;0
361 281  INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'htmlspecialchars'	;1
362 281  FETCH_DIM_FUNC_ARG/93     $132=     16?0                 231:'sn'            	;1
363 281  SEND_VAR_EX/66            ?80       $132                 ?1                  	;0
364 281  DO_FCALL_BY_NAME/131      $133=     ?0                   ?0                  	;0
365 281  ECHO/40                   ?0        $133                 ?0                  	;0
366 282  GOTO/253                  ?0        ?1                   ?232                	;0
367 284  ECHO/40                   ?0        233:'">
                                                            <div class="input-group-append">
                                                                <a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                                            </div>
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
                                    ' ?0                  	;0
368 286  ECHO/40                   ?0        234:'									<div class="tab-pane" id="review-purchase">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="alert alert-danger" role="alert" style="display:none;" id="no-credits">
                                                    <i class="mdi mdi-block-helper mr-2"></i> You do not have enough credits to complete this transaction!
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <table class="table table-striped table-borderless" id="credits-cost">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Total Credits</th>
                                                                <th class="text-center">Purchase Cost</th>
                                                                <th class="text-center">Remaining Credits</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">' ?0                  	;0
369 287  INIT_FCALL_BY_NAME/59     ?0        ?0                   235:'number_format' 	;2
370 287  FETCH_DIM_FUNC_ARG/93     $134=     16?2                 237:'credits'       	;1
371 287  SEND_VAR_EX/66            ?80       $134                 ?1                  	;0
372 287  SEND_VAL_EX/116           ?96       238:0                ?2                  	;0
373 287  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
374 287  ECHO/40                   ?0        $135                 ?0                  	;0
375 288  ECHO/40                   ?0        239:'</td>
                                                                <td class="text-center" id="cost_credits">0</td>
                                                                <td class="text-center" id="remaining_credits">' ?0                  	;0
376 289  GOTO/253                  ?0        ?175                 ?240                	;0
377 291  ECHO/40                   ?0        241:'">
                                                    </div>
                                                </div>
                                                ' ?0                  	;0
378 293  ECHO/40                   ?0        242:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="package">' ?0                  	;0
379 294  ISSET_ISEMPTY_CV/197      #136=     16?1                 ?0                  	;33554432
380 294  BOOL_NOT/13               #137=     #136                 ?0                  	;0
381 294  JMPZ/43                   ?0        #137                 ?383                	;0	>>383
382 295  GOTO/253                  ?0        ?342                 ?243                	;0
383 297  ECHO/40                   ?0        244:'Add '           ?0                  	;0	<<381
384 298  GOTO/253                  ?0        ?342                 ?245                	;0
385 300  INIT_FCALL_BY_NAME/59     ?0        ?0                   246:'intval'        	;1
386 300  FETCH_DIM_FUNC_ARG/93     $138=     16?0                 248:'mag_id'        	;1
387 300  SEND_VAR_EX/66            ?80       $138                 ?1                  	;0
388 300  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
389 300  ECHO/40                   ?0        $139                 ?0                  	;0
390 301  ECHO/40                   ?0        249:'" />
							'  ?0                  	;0
391 303  ECHO/40                   ?0        250:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									' ?0                  	;0
392 304  ISSET_ISEMPTY_DIM_OBJ/115 #140=     16?0                 251:'mag_id'        	;33554432
393 304  BOOL_NOT/13               #141=     #140                 ?0                  	;0
394 304  JMPZ/43                   ?0        #141                 ?396                	;0	>>396
395 305  GOTO/253                  ?0        ?189                 ?252                	;0
396 307  GOTO/253                  ?0        ?188                 ?253                	;0	<<394
397 309  ECHO/40                   ?0        254:'                            <input type="hidden" name="trial" value="1" />
                            ' ?0                  	;0
398 311  GOTO/253                  ?0        ?391                 ?255                	;0
399 313  ECHO/40                   ?0        256:'							<input type="hidden" name="edit" value="' ?0                  	;0
400 314  GOTO/253                  ?0        ?385                 ?257                	;0
401 316  BOOL_NOT/13               #142=     16?12                ?0                  	;0
402 316  JMPZ_EX/46                #142=     #142                 ?406                	;0	>>406
403 316  ISSET_ISEMPTY_CV/197      #143=     16?1                 ?0                  	;33554432
404 316  BOOL_NOT/13               #144=     #143                 ?0                  	;0
405 316  BOOL/52                   #142=     #144                 ?0                  	;0
406 316  JMPZ_EX/46                #142=     #142                 ?410                	;0	>>410	<<402
407 316  FETCH_STATIC_PROP_IS/176  $145=     258:'rRequest'       259:'XUI'           	;0
408 316  ISSET_ISEMPTY_DIM_OBJ/115 #146=     $145                 261:'trial'         	;33554432
409 316  BOOL/52                   #142=     #146                 ?0                  	;0
410 316  JMPZ/43                   ?0        #142                 ?412                	;0	>>412	<<406
411 317  GOTO/253                  ?0        ?173                 ?262                	;0
412 319  ISSET_ISEMPTY_CV/197      #147=     16?1                 ?0                  	;33554432	<<410
413 319  JMPZ_EX/46                #147=     #147                 ?416                	;0	>>416
414 319  FETCH_DIM_R/81            $148=     16?1                 263:'is_trial'      	;0
415 319  BOOL/52                   #147=     $148                 ?0                  	;0
416 319  BOOL_NOT/13               #149=     #147                 ?0                  	;0	<<413
417 319  JMPZ/43                   ?0        #149                 ?419                	;0	>>419
418 320  GOTO/253                  ?0        ?420                 ?264                	;0
419 322  ECHO/40                   ?0        265:'                <div class="alert alert-info" role="alert">
                    This device is on a trial package. Adding a new package will convert it to an official package.
                </div>
                ' ?0                  	;0	<<417
420 324  ISSET_ISEMPTY_CV/197      #150=     16?1                 ?0                  	;33554432
421 324  JMPZ_EX/46                #150=     #150                 ?436                	;0	>>436
422 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   266:'in_array'      	;2
423 324  FETCH_DIM_FUNC_ARG/93     $151=     16?1                 268:'member_id'     	;1
424 324  SEND_VAR_EX/66            ?80       $151                 ?1                  	;0
425 324  INIT_FCALL_BY_NAME/59     ?0        ?0                   269:'array_merge'   	;2
426 324  FETCH_DIM_R/81            $152=     16?2                 271:'id'            	;0
427 324  INIT_ARRAY/71             #153=     $152                 ?0                  	;4
428 324  SEND_VAL_EX/116           ?80       #153                 ?1                  	;0
429 324  FETCH_DIM_FUNC_ARG/93     $154=     16?3                 272:'direct_reports'	;2
430 324  SEND_VAR_EX/66            ?96       $154                 ?2                  	;0
431 324  DO_FCALL_BY_NAME/131      $155=     ?0                   ?0                  	;0
432 324  SEND_VAR_NO_REF_EX/50     ?96       $155                 ?2                  	;0
433 324  DO_FCALL_BY_NAME/131      $156=     ?0                   ?0                  	;0
434 324  BOOL_NOT/13               #157=     $156                 ?0                  	;0
435 324  BOOL/52                   #150=     #157                 ?0                  	;0
436 324  BOOL_NOT/13               #158=     #150                 ?0                  	;0	<<421
437 324  JMPZ/43                   ?0        #158                 ?439                	;0	>>439
438 325  GOTO/253                  ?0        ?328                 ?273                	;0
439 327  GOTO/253                  ?0        ?148                 ?274                	;0	<<437
440 329  FETCH_DIM_R/81            $159=     16?0                 275:'user'          	;0
441 329  ASSIGN/38                 ?145      16?1                 $159                	;0
442 330  FETCH_DIM_R/81            $161=     16?1                 276:'package_id'    	;0
443 330  IS_SMALLER/19             #162=     277:0                $161                	;0
444 330  BOOL_NOT/13               #163=     #162                 ?0                  	;0
445 330  JMPZ/43                   ?0        #163                 ?447                	;0	>>447
446 331  GOTO/253                  ?0        ?452                 ?278                	;0
447 333  INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'Fddf8da6AB3fE47b'	;1	<<445
448 333  FETCH_DIM_FUNC_ARG/93     $164=     16?1                 281:'package_id'    	;1
449 333  SEND_VAR_EX/66            ?80       $164                 ?1                  	;0
450 333  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
451 333  ASSIGN/38                 ?151      16?7                 $165                	;0
452 336  GOTO/253                  ?0        ?92                  ?282                	;0
453 338  INIT_FCALL_BY_NAME/59     ?0        ?0                   283:'htmlspecialchars'	;1
454 338  FETCH_DIM_FUNC_ARG/93     $167=     16?0                 285:'mac'           	;1
455 338  SEND_VAR_EX/66            ?80       $167                 ?1                  	;0
456 338  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
457 338  ECHO/40                   ?0        $168                 ?0                  	;0
458 340  ECHO/40                   ?0        286:'">
													</div>
												</div>
                                                ' ?0                  	;0
459 341  INIT_FCALL_BY_NAME/59     ?0        ?0                   287:'count'         	;1
460 341  FETCH_DIM_FUNC_ARG/93     $169=     16?3                 289:'all_reports'   	;1
461 341  SEND_VAR_EX/66            ?80       $169                 ?1                  	;0
462 341  DO_FCALL_BY_NAME/131      $170=     ?0                   ?0                  	;0
463 341  IS_SMALLER/19             #171=     290:0                $170                	;0
464 341  BOOL_NOT/13               #172=     #171                 ?0                  	;0
465 341  JMPZ/43                   ?0        #172                 ?467                	;0	>>467
466 342  GOTO/253                  ?0        ?161                 ?291                	;0
467 344  ECHO/40                   ?0        292:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="member_id">Owner</label>
													<div class="col-md-8">
														<select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">
															<optgroup label="Myself">
                                                                <option value="' ?0                  	;0	<<465
468 345  GOTO/253                  ?0        ?57                  ?293                	;0
469 347  INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'d8c8284136938ef0'	;2
470 347  FETCH_DIM_FUNC_ARG/93     $173=     16?2                 296:'member_group_id'	;1
471 347  SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
472 347  SEND_VAL_EX/116           ?96       297:'mag'            ?2                  	;0
473 347  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
474 347  FE_RESET_R/77             $175=     $174                 ?507                	;0
475 347  FE_FETCH_R/78             ?0        $175                 16?13               	;507	>>507	<<506
476 348  FETCH_DIM_R/81            $176=     16?13                298:'is_trial'      	;0
477 348  JMPZ_EX/46                #177=     $176                 ?481                	;0	>>481
478 348  FETCH_STATIC_PROP_IS/176  $178=     299:'rRequest'       300:'XUI'           	;0
479 348  ISSET_ISEMPTY_DIM_OBJ/115 #179=     $178                 302:'trial'         	;33554432
480 348  BOOL/52                   #177=     #179                 ?0                  	;0
481 348  JMPNZ_EX/47               #177=     #177                 ?489                	;0	>>489	<<477
482 348  FETCH_DIM_R/81            $180=     16?13                303:'is_official'   	;0
483 348  JMPZ_EX/46                #181=     $180                 ?488                	;0	>>488
484 348  FETCH_STATIC_PROP_IS/176  $182=     304:'rRequest'       305:'XUI'           	;0
485 348  ISSET_ISEMPTY_DIM_OBJ/115 #183=     $182                 307:'trial'         	;33554432
486 348  BOOL_NOT/13               #184=     #183                 ?0                  	;0
487 348  BOOL/52                   #181=     #184                 ?0                  	;0
488 348  BOOL/52                   #177=     #181                 ?0                  	;0	<<483
489 348  BOOL_NOT/13               #185=     #177                 ?0                  	;0	<<481
490 348  JMPZ/43                   ?0        #185                 ?493                	;0	>>493
491 349  NOP/0                     ?0        ?0                   ?0                  	;1
492 349  GOTO/253                  ?0        ?506                 ?308                	;0
493 351  ECHO/40                   ?0        309:'                                                                <option value="' ?0                  	;0	<<490
494 352  INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'intval'        	;1
495 352  FETCH_DIM_FUNC_ARG/93     $186=     16?13                312:'id'            	;1
496 352  SEND_VAR_EX/66            ?80       $186                 ?1                  	;0
497 352  DO_FCALL_BY_NAME/131      $187=     ?0                   ?0                  	;0
498 352  ECHO/40                   ?0        $187                 ?0                  	;0
499 353  ECHO/40                   ?0        313:'">'             ?0                  	;0
500 354  INIT_FCALL_BY_NAME/59     ?0        ?0                   314:'htmlspecialchars'	;1
501 354  FETCH_DIM_FUNC_ARG/93     $188=     16?13                316:'package_name'  	;1
502 354  SEND_VAR_EX/66            ?80       $188                 ?1                  	;0
503 354  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
504 354  ECHO/40                   ?0        $189                 ?0                  	;0
505 355  ECHO/40                   ?0        317:'</option>
                                                                ' ?0                  	;0
506 357  JMP/42                    ?0        ?475                 ?0                  	;0	>>475
507 357  FE_FREE/127               ?0        $175                 ?0                  	;0	<<474
508 360  ECHO/40                   ?0        318:'                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="package_info" style="display: none;">
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="package_cost">Package Cost</label>
                                                        <div class="col-md-3">
                                                            <input readonly type="text" class="form-control text-center" id="package_cost" name="package_cost" value="">
                                                        </div>
                                                        <label class="col-md-2 col-form-label" for="package_duration">Duration</label>
                                                        <div class="col-md-3">
                                                            <input readonly type="text" class="form-control text-center" id="package_duration" name="package_duration" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4" id="package_warning" style="display:none;">
                                                    <label class="col-md-4 col-form-label" for="max_connections">Warning Notice</label>
                                                    <div class="col-md-8">
                                                        <div class="alert alert-warning" role="alert">
                                                            The package you have selected is incompatible with the existing package. This could be due to the number of connections or other restrictions.<br/><br/>You can still upgrade to this package, however the time added will be from today and not from the end of the original package.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="exp_date">Expiration Date</label>
                                                    <div class="col-md-3">
                                                        <input readonly type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="' ?0                  	;0
509 361  ISSET_ISEMPTY_CV/197      #190=     16?1                 ?0                  	;33554432
510 361  BOOL_NOT/13               #191=     #190                 ?0                  	;0
511 361  JMPZ/43                   ?0        #191                 ?513                	;0	>>513
512 362  GOTO/253                  ?0        ?557                 ?319                	;0
513 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   320:'is_null'       	;1	<<511
514 364  FETCH_DIM_FUNC_ARG/93     $192=     16?1                 322:'exp_date'      	;1
515 364  SEND_VAR_EX/66            ?80       $192                 ?1                  	;0
516 364  DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
517 364  BOOL_NOT/13               #194=     $193                 ?0                  	;0
518 364  JMPZ/43                   ?0        #194                 ?520                	;0	>>520
519 365  GOTO/253                  ?0        ?73                  ?323                	;0
520 367  GOTO/253                  ?0        ?71                  ?324                	;0	<<518
521 369  FETCH_STATIC_PROP_IS/176  $195=     325:'rRequest'       326:'XUI'           	;0
522 369  ISSET_ISEMPTY_DIM_OBJ/115 #196=     $195                 328:'id'            	;33554432
523 369  BOOL_NOT/13               #197=     #196                 ?0                  	;0
524 369  JMPZ/43                   ?0        #197                 ?526                	;0	>>526
525 370  GOTO/253                  ?0        ?452                 ?329                	;0
526 372  INIT_FCALL_BY_NAME/59     ?0        ?0                   330:'A32d85AEfA28959D'	;1	<<524
527 372  FETCH_STATIC_PROP_FUNC_ARG/177 $198=     332:'rRequest'       333:'XUI'           	;1
528 372  FETCH_DIM_FUNC_ARG/93     $199=     $198                 335:'id'            	;1
529 372  SEND_VAR_EX/66            ?80       $199                 ?1                  	;0
530 372  DO_FCALL_BY_NAME/131      $200=     ?0                   ?0                  	;0
531 372  ASSIGN/38                 ?186      16?0                 $200                	;0
532 373  BOOL_NOT/13               #202=     16?0                 ?0                  	;0
533 373  JMPNZ_EX/47               #202=     #202                 ?537                	;0	>>537
534 373  FETCH_DIM_R/81            $203=     16?0                 336:'user'          	;0
535 373  BOOL_NOT/13               #204=     $203                 ?0                  	;0
536 373  BOOL/52                   #202=     #204                 ?0                  	;0
537 373  JMPNZ_EX/47               #202=     #202                 ?542                	;0	>>542	<<533
538 373  FETCH_DIM_R/81            $205=     16?0                 337:'user'          	;0
539 373  FETCH_DIM_R/81            $206=     $205                 338:'is_mag'        	;0
540 373  BOOL_NOT/13               #207=     $206                 ?0                  	;0
541 373  BOOL/52                   #202=     #207                 ?0                  	;0
542 373  JMPNZ_EX/47               #202=     #202                 ?551                	;0	>>551	<<537
543 373  INIT_FCALL_BY_NAME/59     ?0        ?0                   339:'e589A4bf54A2dad1'	;2
544 373  SEND_VAL_EX/116           ?80       341:'line'           ?1                  	;0
545 373  FETCH_DIM_FUNC_ARG/93     $208=     16?0                 342:'user'          	;2
546 373  FETCH_DIM_FUNC_ARG/93     $209=     $208                 343:'id'            	;2
547 373  SEND_VAR_EX/66            ?96       $209                 ?2                  	;0
548 373  DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
549 373  BOOL_NOT/13               #211=     $210                 ?0                  	;0
550 373  BOOL/52                   #202=     #211                 ?0                  	;0
551 373  BOOL_NOT/13               #212=     #202                 ?0                  	;0	<<542
552 373  JMPZ/43                   ?0        #212                 ?554                	;0	>>554
553 374  GOTO/253                  ?0        ?556                 ?344                	;0
554 376  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'e72F42a93714BA87'	;0	<<552
555 376  DO_FCALL_BY_NAME/131      ?198      ?0                   ?0                  	;0
556 378  GOTO/253                  ?0        ?440                 ?347                	;0
557 381  ECHO/40                   ?0        348:'">
                                                    </div>
                                                    <label class="col-md-2 col-form-label" for="parent_password">Adult Pin</label>
													<div class="col-md-3">
														<input type="text" class="form-control text-center" id="parent_password" name="parent_password" value="' ?0                  	;0
558 382  ISSET_ISEMPTY_CV/197      #214=     16?0                 ?0                  	;33554432
559 382  JMPZ/43                   ?0        #214                 ?561                	;0	>>561
560 383  GOTO/253                  ?0        ?137                 ?349                	;0
561 385  ECHO/40                   ?0        350:'0000'           ?0                  	;0	<<559
562 386  GOTO/253                  ?0        ?142                 ?351                	;0
563 387  GOTO/253                  ?0        ?137                 ?352                	;0
564 389  ECHO/40                   ?0        353:'									<li class="nav-item">
                                        <a href="#review-purchase" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-book-open-variant mr-1"></i>
                                            <span class="d-none d-sm-inline">Review Purchase</span>
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
565 390  ISSET_ISEMPTY_CV/197      #215=     16?0                 ?0                  	;33554432
566 390  JMPZ/43                   ?0        #215                 ?568                	;0	>>568
567 391  GOTO/253                  ?0        ?570                 ?354                	;0
568 393  ECHO/40                   ?0        355:'00:1A:79:'      ?0                  	;0	<<566
569 394  GOTO/253                  ?0        ?458                 ?356                	;0
570 396  GOTO/253                  ?0        ?453                 ?357                	;0
571 398  FETCH_DIM_R/81            $216=     16?14                358:'disable_trial' 	;0
572 398  JMPZ/43                   ?0        $216                 ?574                	;0	>>574
573 399  GOTO/253                  ?0        ?576                 ?359                	;0
574 401  ECHO/40                   ?0        360:'You have used your allowance of trials for this period. Please try again later.' ?0                  	;0	<<572
575 402  GOTO/253                  ?0        ?213                 ?361                	;0
576 404  ECHO/40                   ?0        362:'Trials have been disabled by the administrator. Please try again later.' ?0                  	;0
577 405  GOTO/253                  ?0        ?213                 ?363                	;0
578 407  INCLUDE_OR_EVAL/73        ?202      364:'footer.php'     ?0                  	;2
579 408  NOP/0                     ?0        365:1                ?0                  	;4294967295
*/

?>