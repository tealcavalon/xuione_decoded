<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?371                 ?0                  	;0	>>371
1   5    ECHO/40                   ?0        1:'                                                            </optgroup>
                                                            ' ?0                  	;0
2   7    ECHO/40                   ?0        2:'														</select>
													</div>
												</div>
                                                ' ?0                  	;0
3   9    ISSET_ISEMPTY_CV/197      #15=      16?0                 ?0                  	;33554432
4   9    BOOL_NOT/13               #16=      #15                  ?0                  	;0
5   9    JMPZ/43                   ?0        #16                  ?7                  	;0	>>7
6   10   GOTO/253                  ?0        ?439                 ?3                  	;0
7   12   GOTO/253                  ?0        ?435                 ?4                  	;0	<<5
8   14   FETCH_DIM_R/81            $17=      16?2                 5:'user'            	;0
9   14   ASSIGN/38                 ?3        16?1                 $17                 	;0
10  15   FETCH_DIM_R/81            $19=      16?1                 6:'package_id'      	;0
11  15   IS_SMALLER/19             #20=      7:0                  $19                 	;0
12  15   BOOL_NOT/13               #21=      #20                  ?0                  	;0
13  15   JMPZ/43                   ?0        #21                  ?15                 	;0	>>15
14  16   GOTO/253                  ?0        ?20                  ?8                  	;0
15  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'Fddf8Da6ab3Fe47b'	;1	<<13
16  18   FETCH_DIM_FUNC_ARG/93     $22=      16?1                 11:'package_id'     	;1
17  18   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
18  18   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
19  18   ASSIGN/38                 ?9        16?0                 $23                 	;0
20  21   GOTO/253                  ?0        ?21                  ?12                 	;0
21  23   ASSIGN/38                 ?10       16?3                 13:'Enigma Device'  	;0
22  24   INCLUDE_OR_EVAL/73        ?11       14:'header.php'      ?0                  	;2
23  25   ECHO/40                   ?0        15:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
24  26   INCLUDE_OR_EVAL/73        ?12       16:'topbar.php'      ?0                  	;2
25  27   ECHO/40                   ?0        17:'					</div>
					<h4 class="page-title">' ?0                  	;0
26  28   GOTO/253                  ?0        ?74                  ?18                 	;0
27  30   ISSET_ISEMPTY_CV/197      #28=      16?1                 ?0                  	;33554432
28  30   BOOL_NOT/13               #29=      #28                  ?0                  	;0
29  30   JMPZ/43                   ?0        #29                  ?31                 	;0	>>31
30  31   GOTO/253                  ?0        ?32                  ?19                 	;0
31  33   ECHO/40                   ?0        20:'Add '            ?0                  	;0	<<29
32  35   ECHO/40                   ?0        21:'Package</label>
                                                    <div class="col-md-8">
                                                        <select name="package" id="package" class="form-control select2" data-toggle="select2">
                                                            ' ?0                  	;0
33  36   ISSET_ISEMPTY_CV/197      #30=      16?1                 ?0                  	;33554432
34  36   BOOL_NOT/13               #31=      #30                  ?0                  	;0
35  36   JMPZ/43                   ?0        #31                  ?37                 	;0	>>37
36  37   GOTO/253                  ?0        ?267                 ?22                 	;0
37  39   GOTO/253                  ?0        ?266                 ?23                 	;0	<<35
38  42   ECHO/40                   ?0        24:'			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
39  43   GOTO/253                  ?0        ?558                 ?25                 	;0
40  45   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'htmlspecialchars'	;1
41  45   FETCH_DIM_FUNC_ARG/93     $32=      16?1                 28:'reseller_notes' 	;1
42  45   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
43  45   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
44  45   ECHO/40                   ?0        $33                  ?0                  	;0
45  47   ECHO/40                   ?0        29:'</textarea>
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
46  48   ISSET_ISEMPTY_DIM_OBJ/115 #34=      16?2                 30:'device_id'      	;33554432
47  48   BOOL_NOT/13               #35=      #34                  ?0                  	;0
48  48   JMPZ/43                   ?0        #35                  ?50                 	;0	>>50
49  49   GOTO/253                  ?0        ?475                 ?31                 	;0
50  51   ECHO/40                   ?0        32:'									<div class="tab-pane" id="device-info">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Username</label>
													<div class="col-md-8">
														<input type="text" readonly class="form-control sticky" id="username" value="' ?0                  	;0	<<48
51  52   GOTO/253                  ?0        ?166                 ?33                 	;0
52  54   ECHO/40                   ?0        34:' selected'       ?0                  	;0
53  56   ECHO/40                   ?0        35:'>'               ?0                  	;0
54  57   FETCH_DIM_R/81            $36=      16?4                 36:'username'       	;0
55  57   ECHO/40                   ?0        $36                  ?0                  	;0
56  58   ECHO/40                   ?0        37:'</option>
                                                            </optgroup>
                                                            ' ?0                  	;0
57  59   GOTO/253                  ?0        ?196                 ?38                 	;0
58  61   ECHO/40                   ?0        39:'									<div class="tab-pane" id="review-purchase">
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
59  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'number_format'  	;2
60  62   FETCH_DIM_FUNC_ARG/93     $37=      16?4                 42:'credits'        	;1
61  62   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
62  62   SEND_VAL_EX/116           ?96       43:0                 ?2                  	;0
63  62   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
64  62   ECHO/40                   ?0        $38                  ?0                  	;0
65  63   ECHO/40                   ?0        44:'</td>
                                                                <td class="text-center" id="cost_credits">0</td>
                                                                <td class="text-center" id="remaining_credits">' ?0                  	;0
66  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'number_format'  	;2
67  64   FETCH_DIM_FUNC_ARG/93     $39=      16?4                 47:'credits'        	;1
68  64   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
69  64   SEND_VAL_EX/116           ?96       48:0                 ?2                  	;0
70  64   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
71  64   ECHO/40                   ?0        $40                  ?0                  	;0
72  65   ECHO/40                   ?0        49:'</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id="datatable-review" class="table table-striped table-borderless dt-responsive nowrap" style="margin-top:30px;">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center"></th>
                                                                <th>' ?0                  	;0
73  66   GOTO/253                  ?0        ?380                 ?50                 	;0
74  68   ISSET_ISEMPTY_CV/197      #41=      16?2                 ?0                  	;33554432
75  68   JMPZ/43                   ?0        #41                  ?77                 	;0	>>77
76  69   GOTO/253                  ?0        ?79                  ?51                 	;0
77  71   ECHO/40                   ?0        52:'Add'             ?0                  	;0	<<75
78  72   GOTO/253                  ?0        ?158                 ?53                 	;0
79  74   ECHO/40                   ?0        54:'Edit'            ?0                  	;0
80  75   GOTO/253                  ?0        ?158                 ?55                 	;0
81  77   ISSET_ISEMPTY_CV/197      #42=      16?1                 ?0                  	;33554432
82  77   BOOL_NOT/13               #43=      #42                  ?0                  	;0
83  77   JMPZ/43                   ?0        #43                  ?85                 	;0	>>85
84  78   GOTO/253                  ?0        ?454                 ?56                 	;0
85  80   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'is_null'        	;1	<<83
86  80   FETCH_DIM_FUNC_ARG/93     $44=      16?1                 59:'exp_date'       	;1
87  80   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
88  80   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
89  80   BOOL_NOT/13               #46=      $45                  ?0                  	;0
90  80   JMPZ/43                   ?0        #46                  ?92                 	;0	>>92
91  81   GOTO/253                  ?0        ?94                  ?60                 	;0
92  83   ECHO/40                   ?0        61:'" disabled="disabled' ?0                  	;0	<<90
93  84   GOTO/253                  ?0        ?454                 ?62                 	;0
94  86   GOTO/253                  ?0        ?448                 ?63                 	;0
95  88   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'json_decode'    	;2
96  88   FETCH_DIM_FUNC_ARG/93     $47=      16?1                 66:'allowed_ips'    	;1
97  88   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
98  88   SEND_VAL_EX/116           ?96       67:true              ?2                  	;0
99  88   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
100 88   FE_RESET_R/77             $49=      $48                  ?108                	;0
101 88   FE_FETCH_R/78             ?0        $49                  16?5                	;108	>>108	<<107
102 89   ECHO/40                   ?0        68:'                                                            <option value="' ?0                  	;0
103 90   ECHO/40                   ?0        16?5                 ?0                  	;0
104 91   ECHO/40                   ?0        69:'">'              ?0                  	;0
105 92   ECHO/40                   ?0        16?5                 ?0                  	;0
106 93   ECHO/40                   ?0        70:'</option>
                                                            ' ?0                  	;0
107 94   JMP/42                    ?0        ?101                 ?0                  	;0	>>101
108 94   FE_FREE/127               ?0        $49                  ?0                  	;0	<<100
109 98   ECHO/40                   ?0        71:'                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>
                                                        <div class="col-md-2">
                                                            <input name="is_isplock" id="is_isplock" type="checkbox" ' ?0                  	;0
110 99   ISSET_ISEMPTY_CV/197      #50=      16?1                 ?0                  	;33554432
111 99   BOOL_NOT/13               #51=      #50                  ?0                  	;0
112 99   JMPZ/43                   ?0        #51                  ?114                	;0	>>114
113 100  GOTO/253                  ?0        ?410                 ?72                 	;0
114 102  GOTO/253                  ?0        ?404                 ?73                 	;0	<<112
115 104  ECHO/40                   ?0        74:'									<li class="nav-item">
										<a href="#device-info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi mdi-cellphone-key mr-1"></i>
											<span class="d-none d-sm-inline">Device Info</span>
										</a>
									</li>
									' ?0                  	;0
116 106  FETCH_DIM_R/81            $52=      16?6                 75:'allow_restrictions'	;0
117 106  BOOL_NOT/13               #53=      $52                  ?0                  	;0
118 106  JMPZ/43                   ?0        #53                  ?120                	;0	>>120
119 107  GOTO/253                  ?0        ?121                 ?76                 	;0
120 109  ECHO/40                   ?0        77:'									<li class="nav-item">
										<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-hazard-lights mr-1"></i>
											<span class="d-none d-sm-inline">Restrictions</span>
										</a>
									</li>
                                    ' ?0                  	;0	<<118
121 111  GOTO/253                  ?0        ?184                 ?78                 	;0
122 113  FETCH_STATIC_PROP_IS/176  $54=      79:'rRequest'        80:'XUI'            	;0
123 113  ISSET_ISEMPTY_DIM_OBJ/115 #55=      $54                  82:'id'             	;33554432
124 113  BOOL_NOT/13               #56=      #55                  ?0                  	;0
125 113  JMPZ/43                   ?0        #56                  ?127                	;0	>>127
126 114  GOTO/253                  ?0        ?20                  ?83                 	;0
127 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'EF70A93E98Fb7ce9'	;1	<<125
128 116  FETCH_STATIC_PROP_FUNC_ARG/177 $57=      86:'rRequest'        87:'XUI'            	;1
129 116  FETCH_DIM_FUNC_ARG/93     $58=      $57                  89:'id'             	;1
130 116  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
131 116  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
132 116  ASSIGN/38                 ?45       16?2                 $59                 	;0
133 117  BOOL_NOT/13               #61=      16?2                 ?0                  	;0
134 117  JMPNZ_EX/47               #61=      #61                  ?138                	;0	>>138
135 117  FETCH_DIM_R/81            $62=      16?2                 90:'user'           	;0
136 117  BOOL_NOT/13               #63=      $62                  ?0                  	;0
137 117  BOOL/52                   #61=      #63                  ?0                  	;0
138 117  JMPNZ_EX/47               #61=      #61                  ?143                	;0	>>143	<<134
139 117  FETCH_DIM_R/81            $64=      16?2                 91:'user'           	;0
140 117  FETCH_DIM_R/81            $65=      $64                  92:'is_e2'          	;0
141 117  BOOL_NOT/13               #66=      $65                  ?0                  	;0
142 117  BOOL/52                   #61=      #66                  ?0                  	;0
143 117  JMPNZ_EX/47               #61=      #61                  ?152                	;0	>>152	<<138
144 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'e589A4bf54A2daD1'	;2
145 117  SEND_VAL_EX/116           ?80       95:'line'            ?1                  	;0
146 117  FETCH_DIM_FUNC_ARG/93     $67=      16?2                 96:'user'           	;2
147 117  FETCH_DIM_FUNC_ARG/93     $68=      $67                  97:'id'             	;2
148 117  SEND_VAR_EX/66            ?96       $68                  ?2                  	;0
149 117  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
150 117  BOOL_NOT/13               #70=      $69                  ?0                  	;0
151 117  BOOL/52                   #61=      #70                  ?0                  	;0
152 117  BOOL_NOT/13               #71=      #61                  ?0                  	;0	<<143
153 117  JMPZ/43                   ?0        #71                  ?155                	;0	>>155
154 118  GOTO/253                  ?0        ?157                 ?98                 	;0
155 120  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'E72F42a93714BA87'	;0	<<153
156 120  DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
157 122  GOTO/253                  ?0        ?8                   ?101                	;0
158 125  FETCH_STATIC_PROP_IS/176  $73=      102:'rRequest'       103:'XUI'           	;0
159 125  ISSET_ISEMPTY_DIM_OBJ/115 #74=      $73                  105:'trial'         	;33554432
160 125  BOOL_NOT/13               #75=      #74                  ?0                  	;0
161 125  JMPZ/43                   ?0        #75                  ?163                	;0	>>163
162 126  GOTO/253                  ?0        ?164                 ?106                	;0
163 128  ECHO/40                   ?0        107:' Trial'         ?0                  	;0	<<161
164 130  ECHO/40                   ?0        108:' Enigma Device</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
                ' ?0                  	;0
165 131  GOTO/253                  ?0        ?308                 ?109                	;0
166 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'htmlspecialchars'	;1
167 133  FETCH_DIM_FUNC_ARG/93     $76=      16?1                 112:'username'      	;1
168 133  SEND_VAR_EX/66            ?80       $76                  ?1                  	;0
169 133  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
170 133  ECHO/40                   ?0        $77                  ?0                  	;0
171 134  ECHO/40                   ?0        113:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Line Password</label>
													<div class="col-md-8">
														<input type="text" readonly class="form-control sticky" id="password" value="' ?0                  	;0
172 135  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'htmlspecialchars'	;1
173 135  FETCH_DIM_FUNC_ARG/93     $78=      16?1                 116:'password'      	;1
174 135  SEND_VAR_EX/66            ?80       $78                  ?1                  	;0
175 135  DO_FCALL_BY_NAME/131      $79=      ?0                   ?0                  	;0
176 135  ECHO/40                   ?0        $79                  ?0                  	;0
177 136  ECHO/40                   ?0        117:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="modem_mac">Modem MAC</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="modem_mac" name="modem_mac" value="' ?0                  	;0
178 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'htmlspecialchars'	;1
179 137  FETCH_DIM_FUNC_ARG/93     $80=      16?2                 120:'modem_mac'     	;1
180 137  SEND_VAR_EX/66            ?80       $80                  ?1                  	;0
181 137  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
182 137  ECHO/40                   ?0        $81                  ?0                  	;0
183 138  GOTO/253                  ?0        ?460                 ?121                	;0
184 140  ECHO/40                   ?0        122:'									<li class="nav-item">
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
185 141  ISSET_ISEMPTY_CV/197      #82=      16?2                 ?0                  	;33554432
186 141  BOOL_NOT/13               #83=      #82                  ?0                  	;0
187 141  JMPZ/43                   ?0        #83                  ?189                	;0	>>189
188 142  GOTO/253                  ?0        ?194                 ?123                	;0
189 144  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'htmlspecialchars'	;1	<<187
190 144  FETCH_DIM_FUNC_ARG/93     $84=      16?2                 126:'mac'           	;1
191 144  SEND_VAR_EX/66            ?80       $84                  ?1                  	;0
192 144  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
193 144  ECHO/40                   ?0        $85                  ?0                  	;0
194 146  ECHO/40                   ?0        127:'">
													</div>
												</div>
                                                ' ?0                  	;0
195 147  GOTO/253                  ?0        ?244                 ?128                	;0
196 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   129:'count'         	;1
197 149  FETCH_DIM_FUNC_ARG/93     $86=      16?6                 131:'direct_reports'	;1
198 149  SEND_VAR_EX/66            ?80       $86                  ?1                  	;0
199 149  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
200 149  IS_SMALLER/19             #88=      132:0                $87                 	;0
201 149  BOOL_NOT/13               #89=      #88                  ?0                  	;0
202 149  JMPZ/43                   ?0        #89                  ?204                	;0	>>204
203 150  GOTO/253                  ?0        ?485                 ?133                	;0
204 152  ECHO/40                   ?0        134:'                                                            <optgroup label="Direct Reports">
                                                                ' ?0                  	;0	<<202
205 153  FETCH_DIM_R/81            $90=      16?6                 135:'direct_reports'	;0
206 153  FE_RESET_R/77             $91=      $90                  ?237                	;0
207 153  FE_FETCH_R/78             ?0        $91                  16?7                	;237	>>237	<<236
208 154  NOP/0                     ?0        ?0                   ?0                  	;1
209 154  GOTO/253                  ?0        ?210                 ?136                	;0
210 156  FETCH_DIM_R/81            $92=      16?6                 137:'users'         	;0
211 156  FETCH_DIM_R/81            $93=      $92                  16?7                	;0
212 156  ASSIGN/38                 ?79       16?8                 $93                 	;0
213 157  ECHO/40                   ?0        138:'                                                                <option value="' ?0                  	;0
214 158  ECHO/40                   ?0        16?7                 ?0                  	;0
215 159  ECHO/40                   ?0        139:'"'              ?0                  	;0
216 160  ISSET_ISEMPTY_DIM_OBJ/115 #95=      16?1                 140:'member_id'     	;33554432
217 160  JMPZ_EX/46                #95=      #95                  ?221                	;0	>>221
218 160  FETCH_DIM_R/81            $96=      16?1                 141:'member_id'     	;0
219 160  IS_EQUAL/17               #97=      $96                  16?7                	;0
220 160  BOOL/52                   #95=      #97                  ?0                  	;0
221 160  BOOL_NOT/13               #98=      #95                  ?0                  	;0	<<217
222 160  JMPZ/43                   ?0        #98                  ?225                	;0	>>225
223 161  NOP/0                     ?0        ?0                   ?0                  	;1
224 161  GOTO/253                  ?0        ?228                 ?142                	;0
225 163  NOP/0                     ?0        ?0                   ?0                  	;1	<<222
226 163  GOTO/253                  ?0        ?227                 ?143                	;0
227 165  ECHO/40                   ?0        144:' selected'      ?0                  	;0
228 167  ECHO/40                   ?0        145:'>'              ?0                  	;0
229 168  FETCH_DIM_R/81            $99=      16?8                 146:'username'      	;0
230 168  ECHO/40                   ?0        $99                  ?0                  	;0
231 169  ECHO/40                   ?0        147:'</option>
                                                                ' ?0                  	;0
232 170  NOP/0                     ?0        ?0                   ?0                  	;1
233 170  GOTO/253                  ?0        ?234                 ?148                	;0
234 173  NOP/0                     ?0        ?0                   ?0                  	;1
235 173  GOTO/253                  ?0        ?236                 ?149                	;0
236 174  JMP/42                    ?0        ?207                 ?0                  	;0	>>207
237 174  FE_FREE/127               ?0        $91                  ?0                  	;0	<<206
238 177  ECHO/40                   ?0        150:'                                                            </optgroup>
                                                            ' ?0                  	;0
239 178  GOTO/253                  ?0        ?485                 ?151                	;0
240 180  ECHO/40                   ?0        152:'                            <input type="hidden" name="trial" value="1" />
                            ' ?0                  	;0
241 182  GOTO/253                  ?0        ?418                 ?153                	;0
242 184  ECHO/40                   ?0        154:'							<input type="hidden" name="edit" value="' ?0                  	;0
243 185  GOTO/253                  ?0        ?412                 ?155                	;0
244 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   156:'count'         	;1
245 187  FETCH_DIM_FUNC_ARG/93     $100=     16?6                 158:'all_reports'   	;1
246 187  SEND_VAR_EX/66            ?80       $100                 ?1                  	;0
247 187  DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
248 187  IS_SMALLER/19             #102=     159:0                $101                	;0
249 187  BOOL_NOT/13               #103=     #102                 ?0                  	;0
250 187  JMPZ/43                   ?0        #103                 ?252                	;0	>>252
251 188  GOTO/253                  ?0        ?3                   ?160                	;0
252 190  ECHO/40                   ?0        161:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="member_id">Owner</label>
													<div class="col-md-8">
														<select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">
															<optgroup label="Myself">
                                                                <option value="' ?0                  	;0	<<250
253 191  FETCH_DIM_R/81            $104=     16?4                 162:'id'            	;0
254 191  ECHO/40                   ?0        $104                 ?0                  	;0
255 192  ECHO/40                   ?0        163:'"'              ?0                  	;0
256 193  ISSET_ISEMPTY_DIM_OBJ/115 #105=     16?1                 164:'member_id'     	;33554432
257 193  JMPZ_EX/46                #105=     #105                 ?262                	;0	>>262
258 193  FETCH_DIM_R/81            $106=     16?1                 165:'member_id'     	;0
259 193  FETCH_DIM_R/81            $107=     16?4                 166:'id'            	;0
260 193  IS_EQUAL/17               #108=     $106                 $107                	;0
261 193  BOOL/52                   #105=     #108                 ?0                  	;0
262 193  BOOL_NOT/13               #109=     #105                 ?0                  	;0	<<257
263 193  JMPZ/43                   ?0        #109                 ?265                	;0	>>265
264 194  GOTO/253                  ?0        ?53                  ?167                	;0
265 196  GOTO/253                  ?0        ?52                  ?168                	;0	<<263
266 198  ECHO/40                   ?0        169:'                                                            <option value="">No Changes</option>
                                                            ' ?0                  	;0
267 200  INIT_FCALL_BY_NAME/59     ?0        ?0                   170:'D8c8284136938ef0'	;2
268 200  FETCH_DIM_FUNC_ARG/93     $110=     16?4                 172:'member_group_id'	;1
269 200  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
270 200  SEND_VAL_EX/116           ?96       173:'e2'             ?2                  	;0
271 200  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
272 200  FE_RESET_R/77             $112=     $111                 ?305                	;0
273 200  FE_FETCH_R/78             ?0        $112                 16?9                	;305	>>305	<<304
274 201  FETCH_DIM_R/81            $113=     16?9                 174:'is_trial'      	;0
275 201  JMPZ_EX/46                #114=     $113                 ?279                	;0	>>279
276 201  FETCH_STATIC_PROP_IS/176  $115=     175:'rRequest'       176:'XUI'           	;0
277 201  ISSET_ISEMPTY_DIM_OBJ/115 #116=     $115                 178:'trial'         	;33554432
278 201  BOOL/52                   #114=     #116                 ?0                  	;0
279 201  JMPNZ_EX/47               #114=     #114                 ?287                	;0	>>287	<<275
280 201  FETCH_DIM_R/81            $117=     16?9                 179:'is_official'   	;0
281 201  JMPZ_EX/46                #118=     $117                 ?286                	;0	>>286
282 201  FETCH_STATIC_PROP_IS/176  $119=     180:'rRequest'       181:'XUI'           	;0
283 201  ISSET_ISEMPTY_DIM_OBJ/115 #120=     $119                 183:'trial'         	;33554432
284 201  BOOL_NOT/13               #121=     #120                 ?0                  	;0
285 201  BOOL/52                   #118=     #121                 ?0                  	;0
286 201  BOOL/52                   #114=     #118                 ?0                  	;0	<<281
287 201  BOOL_NOT/13               #122=     #114                 ?0                  	;0	<<279
288 201  JMPZ/43                   ?0        #122                 ?291                	;0	>>291
289 202  NOP/0                     ?0        ?0                   ?0                  	;1
290 202  GOTO/253                  ?0        ?304                 ?184                	;0
291 204  ECHO/40                   ?0        185:'                                                                <option value="' ?0                  	;0	<<288
292 205  INIT_FCALL_BY_NAME/59     ?0        ?0                   186:'intval'        	;1
293 205  FETCH_DIM_FUNC_ARG/93     $123=     16?9                 188:'id'            	;1
294 205  SEND_VAR_EX/66            ?80       $123                 ?1                  	;0
295 205  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
296 205  ECHO/40                   ?0        $124                 ?0                  	;0
297 206  ECHO/40                   ?0        189:'">'             ?0                  	;0
298 207  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'htmlspecialchars'	;1
299 207  FETCH_DIM_FUNC_ARG/93     $125=     16?9                 192:'package_name'  	;1
300 207  SEND_VAR_EX/66            ?80       $125                 ?1                  	;0
301 207  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
302 207  ECHO/40                   ?0        $126                 ?0                  	;0
303 208  ECHO/40                   ?0        193:'</option>
                                                                ' ?0                  	;0
304 210  JMP/42                    ?0        ?273                 ?0                  	;0	>>273
305 210  FE_FREE/127               ?0        $112                 ?0                  	;0	<<272
306 213  ECHO/40                   ?0        194:'                                                        </select>
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
307 214  GOTO/253                  ?0        ?81                  ?195                	;0
308 216  BOOL_NOT/13               #127=     16?10                ?0                  	;0
309 216  JMPZ_EX/46                #127=     #127                 ?313                	;0	>>313
310 216  ISSET_ISEMPTY_CV/197      #128=     16?1                 ?0                  	;33554432
311 216  BOOL_NOT/13               #129=     #128                 ?0                  	;0
312 216  BOOL/52                   #127=     #129                 ?0                  	;0
313 216  JMPZ_EX/46                #127=     #127                 ?317                	;0	>>317	<<309
314 216  FETCH_STATIC_PROP_IS/176  $130=     196:'rRequest'       197:'XUI'           	;0
315 216  ISSET_ISEMPTY_DIM_OBJ/115 #131=     $130                 199:'trial'         	;33554432
316 216  BOOL/52                   #127=     #131                 ?0                  	;0
317 216  JMPZ/43                   ?0        #127                 ?319                	;0	>>319	<<313
318 217  GOTO/253                  ?0        ?442                 ?200                	;0
319 219  ISSET_ISEMPTY_CV/197      #132=     16?1                 ?0                  	;33554432	<<317
320 219  JMPZ_EX/46                #132=     #132                 ?323                	;0	>>323
321 219  FETCH_DIM_R/81            $133=     16?1                 201:'is_trial'      	;0
322 219  BOOL/52                   #132=     $133                 ?0                  	;0
323 219  BOOL_NOT/13               #134=     #132                 ?0                  	;0	<<320
324 219  JMPZ/43                   ?0        #134                 ?326                	;0	>>326
325 220  GOTO/253                  ?0        ?327                 ?202                	;0
326 222  ECHO/40                   ?0        203:'                <div class="alert alert-info" role="alert">
                    This device is on a trial package. Adding a new package will convert it to an official package.
                </div>
                ' ?0                  	;0	<<324
327 224  ISSET_ISEMPTY_CV/197      #135=     16?1                 ?0                  	;33554432
328 224  JMPZ_EX/46                #135=     #135                 ?343                	;0	>>343
329 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'in_array'      	;2
330 224  FETCH_DIM_FUNC_ARG/93     $136=     16?1                 206:'member_id'     	;1
331 224  SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
332 224  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'array_merge'   	;2
333 224  FETCH_DIM_R/81            $137=     16?4                 209:'id'            	;0
334 224  INIT_ARRAY/71             #138=     $137                 ?0                  	;4
335 224  SEND_VAL_EX/116           ?80       #138                 ?1                  	;0
336 224  FETCH_DIM_FUNC_ARG/93     $139=     16?6                 210:'direct_reports'	;2
337 224  SEND_VAR_EX/66            ?96       $139                 ?2                  	;0
338 224  DO_FCALL_BY_NAME/131      $140=     ?0                   ?0                  	;0
339 224  SEND_VAR_NO_REF_EX/50     ?96       $140                 ?2                  	;0
340 224  DO_FCALL_BY_NAME/131      $141=     ?0                   ?0                  	;0
341 224  BOOL_NOT/13               #142=     $141                 ?0                  	;0
342 224  BOOL/52                   #135=     #142                 ?0                  	;0
343 224  BOOL_NOT/13               #143=     #135                 ?0                  	;0	<<328
344 224  JMPZ/43                   ?0        #143                 ?346                	;0	>>346
345 225  GOTO/253                  ?0        ?390                 ?211                	;0
346 227  GOTO/253                  ?0        ?355                 ?212                	;0	<<344
347 229  ECHO/40                   ?0        213:'</th>
                                                                <th class="text-center">' ?0                  	;0
348 230  FETCH_DIM_R/81            $144=     16?11                214:'series'        	;0
349 230  ECHO/40                   ?0        $144                 ?0                  	;0
350 231  ECHO/40                   ?0        215:'</th>
                                                                <th class="text-center">' ?0                  	;0
351 232  FETCH_DIM_R/81            $145=     16?11                216:'stations'      	;0
352 232  ECHO/40                   ?0        $145                 ?0                  	;0
353 233  ECHO/40                   ?0        217:'</th>
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
354 234  GOTO/253                  ?0        ?441                 ?218                	;0
355 236  INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'BA89228DC958ce05'	;1
356 236  FETCH_DIM_FUNC_ARG/93     $146=     16?1                 221:'member_id'     	;1
357 236  SEND_VAR_EX/66            ?80       $146                 ?1                  	;0
358 236  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
359 236  ASSIGN/38                 ?133      16?12                $147                	;0
360 237  ECHO/40                   ?0        222:'                <div class="alert alert-info" role="alert">
                    This device does not belong to you, although you have the right to edit this device you should notify the device\'s owner <strong><a href="user?id=' ?0                  	;0
361 238  FETCH_DIM_R/81            $149=     16?12                223:'id'            	;0
362 238  ECHO/40                   ?0        $149                 ?0                  	;0
363 239  ECHO/40                   ?0        224:'">'             ?0                  	;0
364 240  FETCH_DIM_R/81            $150=     16?12                225:'username'      	;0
365 240  ECHO/40                   ?0        $150                 ?0                  	;0
366 241  GOTO/253                  ?0        ?389                 ?226                	;0
367 243  GOTO/253                  ?0        ?369                 ?227                	;0
368 245  ECHO/40                   ?0        228:'Trials have been disabled by the administrator. Please try again later.' ?0                  	;0
369 247  ECHO/40                   ?0        229:'                </div>
                ' ?0                  	;0
370 248  GOTO/253                  ?0        ?38                  ?230                	;0
371 250  INCLUDE_OR_EVAL/73        ?136      231:'session.php'    ?0                  	;2	<<0
372 251  INCLUDE_OR_EVAL/73        ?137      232:'functions.php'  ?0                  	;2
373 252  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'BaF6e9Ef7775B5A9'	;0
374 252  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
375 252  JMPZ/43                   ?0        $153                 ?377                	;0	>>377
376 253  GOTO/253                  ?0        ?379                 ?235                	;0
377 255  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'e72f42a93714Ba87'	;0	<<375
378 255  DO_FCALL_BY_NAME/131      ?139      ?0                   ?0                  	;0
379 257  GOTO/253                  ?0        ?122                 ?238                	;0
380 259  FETCH_DIM_R/81            $155=     16?11                239:'bouquet_name'  	;0
381 259  ECHO/40                   ?0        $155                 ?0                  	;0
382 260  ECHO/40                   ?0        240:'</th>
                                                                <th class="text-center">' ?0                  	;0
383 261  FETCH_DIM_R/81            $156=     16?11                241:'streams'       	;0
384 261  ECHO/40                   ?0        $156                 ?0                  	;0
385 262  ECHO/40                   ?0        242:'</th>
                                                                <th class="text-center">' ?0                  	;0
386 263  FETCH_DIM_R/81            $157=     16?11                243:'movies'        	;0
387 263  ECHO/40                   ?0        $157                 ?0                  	;0
388 264  GOTO/253                  ?0        ?347                 ?244                	;0
389 266  ECHO/40                   ?0        245:'</a></strong> when doing so.
                </div>
                ' ?0                  	;0
390 268  ECHO/40                   ?0        246:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
391 269  ISSET_ISEMPTY_DIM_OBJ/115 #158=     16?2                 247:'device_id'     	;33554432
392 269  JMPZ_EX/46                #158=     #158                 ?396                	;0	>>396
393 269  ISSET_ISEMPTY_CV/197      #159=     16?13                ?0                  	;33554432
394 269  BOOL_NOT/13               #160=     #159                 ?0                  	;0
395 269  BOOL/52                   #158=     #160                 ?0                  	;0
396 269  JMPZ/43                   ?0        #158                 ?398                	;0	>>398	<<392
397 270  GOTO/253                  ?0        ?242                 ?248                	;0
398 272  FETCH_STATIC_PROP_IS/176  $161=     249:'rRequest'       250:'XUI'           	;0	<<396
399 272  ISSET_ISEMPTY_DIM_OBJ/115 #162=     $161                 252:'trial'         	;33554432
400 272  BOOL_NOT/13               #163=     #162                 ?0                  	;0
401 272  JMPZ/43                   ?0        #163                 ?403                	;0	>>403
402 273  GOTO/253                  ?0        ?241                 ?253                	;0
403 275  GOTO/253                  ?0        ?240                 ?254                	;0	<<401
404 277  FETCH_DIM_R/81            $164=     16?1                 255:'is_isplock'    	;0
405 277  IS_EQUAL/17               #165=     $164                 256:1               	;0
406 277  BOOL_NOT/13               #166=     #165                 ?0                  	;0
407 277  JMPZ/43                   ?0        #166                 ?409                	;0	>>409
408 278  GOTO/253                  ?0        ?410                 ?257                	;0
409 280  ECHO/40                   ?0        258:'checked '       ?0                  	;0	<<407
410 283  ECHO/40                   ?0        259:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>
                                                        <div class="col-md-8 input-group">
                                                            <input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="' ?0                  	;0
411 284  GOTO/253                  ?0        ?424                 ?260                	;0
412 286  INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'intval'        	;1
413 286  FETCH_DIM_FUNC_ARG/93     $167=     16?2                 263:'device_id'     	;1
414 286  SEND_VAR_EX/66            ?80       $167                 ?1                  	;0
415 286  DO_FCALL_BY_NAME/131      $168=     ?0                   ?0                  	;0
416 286  ECHO/40                   ?0        $168                 ?0                  	;0
417 287  ECHO/40                   ?0        264:'" />
							'  ?0                  	;0
418 289  ECHO/40                   ?0        265:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									' ?0                  	;0
419 290  ISSET_ISEMPTY_DIM_OBJ/115 #169=     16?2                 266:'device_id'     	;33554432
420 290  BOOL_NOT/13               #170=     #169                 ?0                  	;0
421 290  JMPZ/43                   ?0        #170                 ?423                	;0	>>423
422 291  GOTO/253                  ?0        ?116                 ?267                	;0
423 293  GOTO/253                  ?0        ?115                 ?268                	;0	<<421
424 295  ISSET_ISEMPTY_CV/197      #171=     16?1                 ?0                  	;33554432
425 295  BOOL_NOT/13               #172=     #171                 ?0                  	;0
426 295  JMPZ/43                   ?0        #172                 ?428                	;0	>>428
427 296  GOTO/253                  ?0        ?433                 ?269                	;0
428 298  INIT_FCALL_BY_NAME/59     ?0        ?0                   270:'htmlspecialchars'	;1	<<426
429 298  FETCH_DIM_FUNC_ARG/93     $173=     16?1                 272:'isp_desc'      	;1
430 298  SEND_VAR_EX/66            ?80       $173                 ?1                  	;0
431 298  DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
432 298  ECHO/40                   ?0        $174                 ?0                  	;0
433 300  ECHO/40                   ?0        273:'">
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
434 302  GOTO/253                  ?0        ?58                  ?274                	;0
435 304  ECHO/40                   ?0        275:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="orig_package">Original Package</label>
                                                    <div class="col-md-8">
                                                        <input type="text" readonly class="form-control" id="orig_package" name="orig_package" value="' ?0                  	;0
436 305  FETCH_DIM_R/81            $175=     16?0                 276:'package_name'  	;0
437 305  ECHO/40                   ?0        $175                 ?0                  	;0
438 306  ECHO/40                   ?0        277:'">
                                                    </div>
                                                </div>
                                                ' ?0                  	;0
439 308  ECHO/40                   ?0        278:'                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="package">' ?0                  	;0
440 309  GOTO/253                  ?0        ?27                  ?279                	;0
441 311  GOTO/253                  ?0        ?38                  ?280                	;0
442 313  ECHO/40                   ?0        281:'                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    ' ?0                  	;0
443 314  FETCH_DIM_R/81            $176=     16?14                282:'disable_trial' 	;0
444 314  JMPZ/43                   ?0        $176                 ?446                	;0	>>446
445 315  GOTO/253                  ?0        ?368                 ?283                	;0
446 317  ECHO/40                   ?0        284:'You have used your allowance of trials for this period. Please try again later.' ?0                  	;0	<<444
447 318  GOTO/253                  ?0        ?367                 ?285                	;0
448 320  INIT_FCALL_BY_NAME/59     ?0        ?0                   286:'date'          	;2
449 320  SEND_VAL_EX/116           ?80       288:'Y-m-d H:i'      ?1                  	;0
450 320  FETCH_DIM_FUNC_ARG/93     $177=     16?1                 289:'exp_date'      	;2
451 320  SEND_VAR_EX/66            ?96       $177                 ?2                  	;0
452 320  DO_FCALL_BY_NAME/131      $178=     ?0                   ?0                  	;0
453 320  ECHO/40                   ?0        $178                 ?0                  	;0
454 323  ECHO/40                   ?0        290:'">
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>
													<div class="col-md-8">
														<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
455 324  ISSET_ISEMPTY_CV/197      #179=     16?2                 ?0                  	;33554432
456 324  BOOL_NOT/13               #180=     #179                 ?0                  	;0
457 324  JMPZ/43                   ?0        #180                 ?459                	;0	>>459
458 325  GOTO/253                  ?0        ?45                  ?291                	;0
459 327  GOTO/253                  ?0        ?40                  ?292                	;0	<<457
460 329  ECHO/40                   ?0        293:'">
													</div>
													<label class="col-md-2 col-form-label" for="local_ip">Local IP</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="local_ip" name="local_ip" value="' ?0                  	;0
461 330  INIT_FCALL_BY_NAME/59     ?0        ?0                   294:'htmlspecialchars'	;1
462 330  FETCH_DIM_FUNC_ARG/93     $181=     16?2                 296:'local_ip'      	;1
463 330  SEND_VAR_EX/66            ?80       $181                 ?1                  	;0
464 330  DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
465 330  ECHO/40                   ?0        $182                 ?0                  	;0
466 331  ECHO/40                   ?0        297:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="enigma_version">Enigma Version</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="enigma_version" name="enigma_version" value="' ?0                  	;0
467 332  INIT_FCALL_BY_NAME/59     ?0        ?0                   298:'htmlspecialchars'	;1
468 332  FETCH_DIM_FUNC_ARG/93     $183=     16?2                 300:'enigma_version'	;1
469 332  SEND_VAR_EX/66            ?80       $183                 ?1                  	;0
470 332  DO_FCALL_BY_NAME/131      $184=     ?0                   ?0                  	;0
471 332  ECHO/40                   ?0        $184                 ?0                  	;0
472 333  ECHO/40                   ?0        301:'">
													</div>
													<label class="col-md-2 col-form-label" for="cpu">CPU</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="cpu" name="cpu" value="' ?0                  	;0
473 334  GOTO/253                  ?0        ?540                 ?302                	;0
474 336  ECHO/40                   ?0        303:'">
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
475 338  FETCH_DIM_R/81            $185=     16?6                 304:'allow_restrictions'	;0
476 338  BOOL_NOT/13               #186=     $185                 ?0                  	;0
477 338  JMPZ/43                   ?0        #186                 ?479                	;0	>>479
478 339  GOTO/253                  ?0        ?434                 ?305                	;0
479 341  ECHO/40                   ?0        306:'									<div class="tab-pane" id="advanced-options">
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
                                                            ' ?0                  	;0	<<477
480 342  ISSET_ISEMPTY_CV/197      #187=     16?2                 ?0                  	;33554432
481 342  BOOL_NOT/13               #188=     #187                 ?0                  	;0
482 342  JMPZ/43                   ?0        #188                 ?484                	;0	>>484
483 343  GOTO/253                  ?0        ?109                 ?307                	;0
484 345  GOTO/253                  ?0        ?95                  ?308                	;0	<<482
485 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   309:'count'         	;1
486 348  FETCH_DIM_FUNC_ARG/93     $189=     16?6                 311:'all_reports'   	;1
487 348  SEND_VAR_EX/66            ?80       $189                 ?1                  	;0
488 348  DO_FCALL_BY_NAME/131      $190=     ?0                   ?0                  	;0
489 348  INIT_FCALL_BY_NAME/59     ?0        ?0                   312:'count'         	;1
490 348  FETCH_DIM_FUNC_ARG/93     $191=     16?6                 314:'direct_reports'	;1
491 348  SEND_VAR_EX/66            ?80       $191                 ?1                  	;0
492 348  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
493 348  IS_SMALLER/19             #193=     $192                 $190                	;0
494 348  BOOL_NOT/13               #194=     #193                 ?0                  	;0
495 348  JMPZ/43                   ?0        #194                 ?497                	;0	>>497
496 349  GOTO/253                  ?0        ?2                   ?315                	;0
497 351  ECHO/40                   ?0        316:'                                                            <optgroup label="Indirect Reports">
                                                                ' ?0                  	;0	<<495
498 352  FETCH_DIM_R/81            $195=     16?6                 317:'all_reports'   	;0
499 352  FE_RESET_R/77             $196=     $195                 ?538                	;0
500 352  FE_FETCH_R/78             ?0        $196                 16?7                	;538	>>538	<<537
501 353  NOP/0                     ?0        ?0                   ?0                  	;1
502 353  GOTO/253                  ?0        ?518                 ?318                	;0
503 355  ISSET_ISEMPTY_DIM_OBJ/115 #197=     16?1                 319:'member_id'     	;33554432
504 355  JMPZ_EX/46                #197=     #197                 ?508                	;0	>>508
505 355  FETCH_DIM_R/81            $198=     16?1                 320:'member_id'     	;0
506 355  IS_EQUAL/17               #199=     $198                 16?7                	;0
507 355  BOOL/52                   #197=     #199                 ?0                  	;0
508 355  BOOL_NOT/13               #200=     #197                 ?0                  	;0	<<504
509 355  JMPZ/43                   ?0        #200                 ?512                	;0	>>512
510 356  NOP/0                     ?0        ?0                   ?0                  	;1
511 356  GOTO/253                  ?0        ?513                 ?321                	;0
512 358  ECHO/40                   ?0        322:' selected'      ?0                  	;0	<<509
513 360  ECHO/40                   ?0        323:'>'              ?0                  	;0
514 361  FETCH_DIM_R/81            $201=     16?8                 324:'username'      	;0
515 361  ECHO/40                   ?0        $201                 ?0                  	;0
516 362  NOP/0                     ?0        ?0                   ?0                  	;1
517 362  GOTO/253                  ?0        ?534                 ?325                	;0
518 364  INIT_FCALL_BY_NAME/59     ?0        ?0                   326:'in_array'      	;2
519 364  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
520 364  FETCH_DIM_FUNC_ARG/93     $202=     16?6                 328:'direct_reports'	;2
521 364  SEND_VAR_EX/66            ?96       $202                 ?2                  	;0
522 364  DO_FCALL_BY_NAME/131      $203=     ?0                   ?0                  	;0
523 364  JMPZ/43                   ?0        $203                 ?526                	;0	>>526
524 365  NOP/0                     ?0        ?0                   ?0                  	;1
525 365  GOTO/253                  ?0        ?535                 ?329                	;0
526 367  FETCH_DIM_R/81            $204=     16?6                 330:'users'         	;0	<<523
527 367  FETCH_DIM_R/81            $205=     $204                 16?7                	;0
528 367  ASSIGN/38                 ?191      16?8                 $205                	;0
529 368  ECHO/40                   ?0        331:'                                                                    <option value="' ?0                  	;0
530 369  ECHO/40                   ?0        16?7                 ?0                  	;0
531 370  ECHO/40                   ?0        332:'"'              ?0                  	;0
532 371  NOP/0                     ?0        ?0                   ?0                  	;1
533 371  GOTO/253                  ?0        ?503                 ?333                	;0
534 373  ECHO/40                   ?0        334:'</option>
                                                                    ' ?0                  	;0
535 376  NOP/0                     ?0        ?0                   ?0                  	;1
536 376  GOTO/253                  ?0        ?537                 ?335                	;0
537 377  JMP/42                    ?0        ?500                 ?0                  	;0	>>500
538 377  FE_FREE/127               ?0        $196                 ?0                  	;0	<<499
539 380  GOTO/253                  ?0        ?1                   ?336                	;0
540 382  INIT_FCALL_BY_NAME/59     ?0        ?0                   337:'htmlspecialchars'	;1
541 382  FETCH_DIM_FUNC_ARG/93     $207=     16?2                 339:'cpu'           	;1
542 382  SEND_VAR_EX/66            ?80       $207                 ?1                  	;0
543 382  DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
544 382  ECHO/40                   ?0        $208                 ?0                  	;0
545 383  ECHO/40                   ?0        340:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="lversion">Linux Version</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="lversion" name="lversion" value="' ?0                  	;0
546 384  INIT_FCALL_BY_NAME/59     ?0        ?0                   341:'htmlspecialchars'	;1
547 384  FETCH_DIM_FUNC_ARG/93     $209=     16?2                 343:'lversion'      	;1
548 384  SEND_VAR_EX/66            ?80       $209                 ?1                  	;0
549 384  DO_FCALL_BY_NAME/131      $210=     ?0                   ?0                  	;0
550 384  ECHO/40                   ?0        $210                 ?0                  	;0
551 385  ECHO/40                   ?0        344:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="token">Token</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="token" name="token" value="' ?0                  	;0
552 386  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'htmlspecialchars'	;1
553 386  FETCH_DIM_FUNC_ARG/93     $211=     16?2                 347:'token'         	;1
554 386  SEND_VAR_EX/66            ?80       $211                 ?1                  	;0
555 386  DO_FCALL_BY_NAME/131      $212=     ?0                   ?0                  	;0
556 386  ECHO/40                   ?0        $212                 ?0                  	;0
557 387  GOTO/253                  ?0        ?474                 ?348                	;0
558 389  INCLUDE_OR_EVAL/73        ?198      349:'footer.php'     ?0                  	;2
559 390  NOP/0                     ?0        350:1                ?0                  	;4294967295
*/

?>