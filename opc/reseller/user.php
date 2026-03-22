<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?241                 ?0                  	;0	>>241
1   5    FETCH_DIM_R/81            $9=       16?0                 1:'allow_change_password'	;0
2   5    JMPNZ_EX/47               #10=      $9                   ?6                  	;0	>>6
3   5    ISSET_ISEMPTY_CV/197      #11=      16?1                 ?0                  	;33554432
4   5    BOOL_NOT/13               #12=      #11                  ?0                  	;0
5   5    BOOL/52                   #10=      #12                  ?0                  	;0
6   5    BOOL_NOT/13               #13=      #10                  ?0                  	;0	<<2
7   5    JMPZ/43                   ?0        #13                  ?9                  	;0	>>9
8   6    GOTO/253                  ?0        ?55                  ?2                  	;0
9   8    ECHO/40                   ?0        3:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="password">' ?0                  	;0	<<7
10  9    ISSET_ISEMPTY_CV/197      #14=      16?1                 ?0                  	;33554432
11  9    BOOL_NOT/13               #15=      #14                  ?0                  	;0
12  9    JMPZ/43                   ?0        #15                  ?14                 	;0	>>14
13  10   GOTO/253                  ?0        ?15                  ?4                  	;0
14  12   ECHO/40                   ?0        5:'Change '          ?0                  	;0	<<12
15  14   GOTO/253                  ?0        ?233                 ?6                  	;0
16  17   ECHO/40                   ?0        7:'                                                            </optgroup>
                                                            ' ?0                  	;0
17  19   ECHO/40                   ?0        8:'														</select>
													</div>
												</div>
                                                ' ?0                  	;0
18  21   GOTO/253                  ?0        ?327                 ?9                  	;0
19  23   ECHO/40                   ?0        10:'							<input type="hidden" name="edit" value="' ?0                  	;0
20  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'intval'         	;1
21  24   FETCH_DIM_FUNC_ARG/93     $16=      16?1                 13:'id'             	;1
22  24   SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
23  24   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
24  24   ECHO/40                   ?0        $17                  ?0                  	;0
25  25   ECHO/40                   ?0        14:'" />
							'    ?0                  	;0
26  27   ECHO/40                   ?0        15:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									' ?0                  	;0
27  28   GOTO/253                  ?0        ?414                 ?16                 	;0
28  31   ECHO/40                   ?0        17:'name="submit_user" type="submit" class="btn btn-primary purchase" value="Purchase" />
                                            </li>
                                        </ul>
                                    </div>
                                    ' ?0                  	;0
29  33   ECHO/40                   ?0        18:'								</div> 
							</div> 
						</form>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
30  34   GOTO/253                  ?0        ?489                 ?19                 	;0
31  36   ISSET_ISEMPTY_CV/197      #18=      16?1                 ?0                  	;33554432
32  36   JMPZ/43                   ?0        #18                  ?35                 	;0	>>35
33  36   QM_ASSIGN/22              #19=      20:''                ?0                  	;0
34  36   JMP/42                    ?0        ?53                  ?0                  	;0	>>53
35  36   FETCH_DIM_R/81            $20=      16?0                 21:'allow_change_username'	;0	<<32
36  36   JMPZ/43                   ?0        $20                  ?51                 	;0	>>51
37  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'fC34407b2842461b'	;1
38  36   FETCH_STATIC_PROP_R/173   $21=      24:'rSettings'       25:'XUI'            	;0
39  36   FETCH_DIM_R/81            $22=      $21                  27:'pass_length'    	;0
40  36   IS_SMALLER/19             #23=      28:10                $22                 	;0
41  36   JMPZ/43                   ?0        #23                  ?46                 	;0	>>46
42  36   FETCH_STATIC_PROP_R/173   $24=      29:'rSettings'       30:'XUI'            	;0
43  36   FETCH_DIM_R/81            $25=      $24                  32:'pass_length'    	;0
44  36   QM_ASSIGN/22              #26=      $25                  ?0                  	;0
45  36   JMP/42                    ?0        ?47                  ?0                  	;0	>>47
46  36   QM_ASSIGN/22              #26=      33:10                ?0                  	;0	<<41
47  36   SEND_VAL_EX/116           ?80       #26                  ?1                  	;0	<<45
48  36   DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
49  36   QM_ASSIGN/22              #28=      $27                  ?0                  	;0
50  36   JMP/42                    ?0        ?52                  ?0                  	;0	>>52
51  36   QM_ASSIGN/22              #28=      34:''                ?0                  	;0	<<36
52  36   QM_ASSIGN/22              #19=      #28                  ?0                  	;0	<<50
53  36   ECHO/40                   ?0        #19                  ?0                  	;0	<<34
54  37   ECHO/40                   ?0        35:'" data-indicator="pwindicator">
                                                        <div id="pwindicator">
                                                            <div class="bar"></div>
                                                            <div class="label"></div>
                                                        </div>
													</div>
												</div>
                                                ' ?0                  	;0
55  39   ISSET_ISEMPTY_CV/197      #29=      16?1                 ?0                  	;33554432
56  39   BOOL_NOT/13               #30=      #29                  ?0                  	;0
57  39   JMPZ/43                   ?0        #30                  ?59                 	;0	>>59
58  40   GOTO/253                  ?0        ?401                 ?36                 	;0
59  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'array_search'   	;2	<<57
60  42   FETCH_DIM_FUNC_ARG/93     $31=      16?1                 39:'id'             	;1
61  42   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
62  42   FETCH_DIM_FUNC_ARG/93     $32=      16?0                 40:'all_reports'    	;2
63  42   SEND_VAR_EX/66            ?96       $32                  ?2                  	;0
64  42   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
65  42   ASSIGN/38                 $34=      16?2                 $33                 	;0
66  42   IS_NOT_IDENTICAL/16       #35=      $34                  41:false            	;0
67  42   BOOL_NOT/13               #36=      #35                  ?0                  	;0
68  42   JMPZ/43                   ?0        #36                  ?70                 	;0	>>70
69  43   GOTO/253                  ?0        ?434                 ?42                 	;0
70  45   GOTO/253                  ?0        ?432                 ?43                 	;0	<<68
71  48   ECHO/40                   ?0        44:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="email">Email Address</label>
													<div class="col-md-8">
														<input type="email" id="email" class="form-control" name="email" value="' ?0                  	;0
72  49   ISSET_ISEMPTY_CV/197      #37=      16?1                 ?0                  	;33554432
73  49   BOOL_NOT/13               #38=      #37                  ?0                  	;0
74  49   JMPZ/43                   ?0        #38                  ?76                 	;0	>>76
75  50   GOTO/253                  ?0        ?81                  ?45                 	;0
76  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'htmlspecialchars'	;1	<<74
77  52   FETCH_DIM_FUNC_ARG/93     $39=      16?1                 48:'email'          	;1
78  52   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
79  52   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
80  52   ECHO/40                   ?0        $40                  ?0                  	;0
81  54   GOTO/253                  ?0        ?185                 ?49                 	;0
82  56   ECHO/40                   ?0        50:'<div class="wrapper boxed-layout">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
83  57   INCLUDE_OR_EVAL/73        ?32       51:'topbar.php'      ?0                  	;2
84  58   ECHO/40                   ?0        52:'					</div>
					<h4 class="page-title">' ?0                  	;0
85  59   ISSET_ISEMPTY_CV/197      #42=      16?1                 ?0                  	;33554432
86  59   JMPZ/43                   ?0        #42                  ?88                 	;0	>>88
87  60   GOTO/253                  ?0        ?486                 ?53                 	;0
88  62   ECHO/40                   ?0        54:'Add'             ?0                  	;0	<<86
89  63   GOTO/253                  ?0        ?485                 ?55                 	;0
90  65   ECHO/40                   ?0        56:'disabled '       ?0                  	;0
91  67   ECHO/40                   ?0        57:'type="text" class="form-control" id="username" name="username" value="' ?0                  	;0
92  68   ISSET_ISEMPTY_CV/197      #43=      16?1                 ?0                  	;33554432
93  68   JMPZ/43                   ?0        #43                  ?95                 	;0	>>95
94  69   GOTO/253                  ?0        ?394                 ?58                 	;0
95  71   FETCH_DIM_R/81            $44=      16?0                 59:'allow_change_username'	;0	<<93
96  71   JMPZ/43                   ?0        $44                  ?102                	;0	>>102
97  71   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'FC34407b2842461B'	;1
98  71   SEND_VAL_EX/116           ?80       62:10                ?1                  	;0
99  71   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
100 71   QM_ASSIGN/22              #46=      $45                  ?0                  	;0
101 71   JMP/42                    ?0        ?103                 ?0                  	;0	>>103
102 71   QM_ASSIGN/22              #46=      63:''                ?0                  	;0	<<96
103 71   ECHO/40                   ?0        #46                  ?0                  	;0	<<101
104 72   GOTO/253                  ?0        ?393                 ?64                 	;0
105 75   ECHO/40                   ?0        65:'                                                <div class="form-group row mb-4">
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
106 76   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'number_format'  	;2
107 76   FETCH_DIM_FUNC_ARG/93     $47=      16?3                 68:'credits'        	;1
108 76   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
109 76   SEND_VAL_EX/116           ?96       69:0                 ?2                  	;0
110 76   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
111 76   ECHO/40                   ?0        $48                  ?0                  	;0
112 77   ECHO/40                   ?0        70:'</td>
                                                                <td class="text-center" id="cost_credits">' ?0                  	;0
113 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'number_format'  	;2
114 78   FETCH_DIM_FUNC_ARG/93     $49=      16?0                 73:'create_sub_resellers_price'	;1
115 78   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
116 78   SEND_VAL_EX/116           ?96       74:0                 ?2                  	;0
117 78   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
118 78   ECHO/40                   ?0        $50                  ?0                  	;0
119 79   GOTO/253                  ?0        ?294                 ?75                 	;0
120 81   ECHO/40                   ?0        76:'                                                            </optgroup>
                                                            ' ?0                  	;0
121 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'count'          	;1
122 83   FETCH_DIM_FUNC_ARG/93     $51=      16?0                 79:'all_reports'    	;1
123 83   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
124 83   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
125 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'count'          	;1
126 83   FETCH_DIM_FUNC_ARG/93     $53=      16?0                 82:'direct_reports' 	;1
127 83   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
128 83   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
129 83   IS_SMALLER/19             #55=      $54                  $52                 	;0
130 83   BOOL_NOT/13               #56=      #55                  ?0                  	;0
131 83   JMPZ/43                   ?0        #56                  ?133                	;0	>>133
132 84   GOTO/253                  ?0        ?17                  ?83                 	;0
133 86   ECHO/40                   ?0        84:'                                                            <optgroup label="Indirect Reports">
                                                                ' ?0                  	;0	<<131
134 87   FETCH_DIM_R/81            $57=      16?0                 85:'all_reports'    	;0
135 87   FE_RESET_R/77             $58=      $57                  ?174                	;0
136 87   FE_FETCH_R/78             ?0        $58                  16?4                	;174	>>174	<<173
137 88   NOP/0                     ?0        ?0                   ?0                  	;1
138 88   GOTO/253                  ?0        ?157                 ?86                 	;0
139 90   ECHO/40                   ?0        87:'</option>
                                                                    ' ?0                  	;0
140 93   NOP/0                     ?0        ?0                   ?0                  	;1
141 93   GOTO/253                  ?0        ?173                 ?88                 	;0
142 95   ISSET_ISEMPTY_DIM_OBJ/115 #59=      16?1                 89:'owner_id'       	;33554432
143 95   JMPZ_EX/46                #59=      #59                  ?147                	;0	>>147
144 95   FETCH_DIM_R/81            $60=      16?1                 90:'owner_id'       	;0
145 95   IS_EQUAL/17               #61=      $60                  16?4                	;0
146 95   BOOL/52                   #59=      #61                  ?0                  	;0
147 95   BOOL_NOT/13               #62=      #59                  ?0                  	;0	<<143
148 95   JMPZ/43                   ?0        #62                  ?151                	;0	>>151
149 96   NOP/0                     ?0        ?0                   ?0                  	;1
150 96   GOTO/253                  ?0        ?152                 ?91                 	;0
151 98   ECHO/40                   ?0        92:' selected'       ?0                  	;0	<<148
152 100  ECHO/40                   ?0        93:'>'               ?0                  	;0
153 101  FETCH_DIM_R/81            $63=      16?5                 94:'username'       	;0
154 101  ECHO/40                   ?0        $63                  ?0                  	;0
155 102  NOP/0                     ?0        ?0                   ?0                  	;1
156 102  GOTO/253                  ?0        ?139                 ?95                 	;0
157 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'in_array'       	;2
158 104  SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
159 104  FETCH_DIM_FUNC_ARG/93     $64=      16?0                 98:'direct_reports' 	;2
160 104  SEND_VAR_EX/66            ?96       $64                  ?2                  	;0
161 104  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
162 104  JMPZ/43                   ?0        $65                  ?165                	;0	>>165
163 105  NOP/0                     ?0        ?0                   ?0                  	;1
164 105  GOTO/253                  ?0        ?140                 ?99                 	;0
165 107  FETCH_DIM_R/81            $66=      16?0                 100:'users'         	;0	<<162
166 107  FETCH_DIM_R/81            $67=      $66                  16?4                	;0
167 107  ASSIGN/38                 ?59       16?5                 $67                 	;0
168 108  ECHO/40                   ?0        101:'                                                                    <option value="' ?0                  	;0
169 109  ECHO/40                   ?0        16?4                 ?0                  	;0
170 110  ECHO/40                   ?0        102:'"'              ?0                  	;0
171 111  NOP/0                     ?0        ?0                   ?0                  	;1
172 111  GOTO/253                  ?0        ?142                 ?103                	;0
173 112  JMP/42                    ?0        ?136                 ?0                  	;0	>>136
174 112  FE_FREE/127               ?0        $58                  ?0                  	;0	<<135
175 114  GOTO/253                  ?0        ?16                  ?104                	;0
176 116  FETCH_DIM_R/81            $69=      16?6                 105:'username'      	;0
177 116  ECHO/40                   ?0        $69                  ?0                  	;0
178 117  ECHO/40                   ?0        106:'</a></strong> when doing so.
                </div>
                ' ?0                  	;0
179 119  ECHO/40                   ?0        107:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
180 120  ISSET_ISEMPTY_CV/197      #70=      16?1                 ?0                  	;33554432
181 120  BOOL_NOT/13               #71=      #70                  ?0                  	;0
182 120  JMPZ/43                   ?0        #71                  ?184                	;0	>>184
183 121  GOTO/253                  ?0        ?26                  ?108                	;0
184 123  GOTO/253                  ?0        ?19                  ?109                	;0	<<182
185 125  ECHO/40                   ?0        110:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_dns">Custom DNS</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="reseller_dns" name="reseller_dns" value="' ?0                  	;0
186 126  ISSET_ISEMPTY_CV/197      #72=      16?1                 ?0                  	;33554432
187 126  BOOL_NOT/13               #73=      #72                  ?0                  	;0
188 126  JMPZ/43                   ?0        #73                  ?190                	;0	>>190
189 127  GOTO/253                  ?0        ?195                 ?111                	;0
190 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'htmlspecialchars'	;1	<<188
191 129  FETCH_DIM_FUNC_ARG/93     $74=      16?1                 114:'reseller_dns'  	;1
192 129  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
193 129  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
194 129  ECHO/40                   ?0        $75                  ?0                  	;0
195 131  ECHO/40                   ?0        115:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="notes">Notes</label>
													<div class="col-md-8">
														<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
196 132  GOTO/253                  ?0        ?197                 ?116                	;0
197 134  ISSET_ISEMPTY_CV/197      #76=      16?1                 ?0                  	;33554432
198 134  BOOL_NOT/13               #77=      #76                  ?0                  	;0
199 134  JMPZ/43                   ?0        #77                  ?201                	;0	>>201
200 135  GOTO/253                  ?0        ?203                 ?117                	;0
201 137  FETCH_DIM_R/81            $78=      16?1                 118:'notes'         	;0	<<199
202 137  ECHO/40                   ?0        $78                  ?0                  	;0
203 139  ECHO/40                   ?0        119:'</textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
                                            ' ?0                  	;0
204 140  ISSET_ISEMPTY_CV/197      #79=      16?1                 ?0                  	;33554432
205 140  JMPZ/43                   ?0        #79                  ?207                	;0	>>207
206 141  GOTO/253                  ?0        ?430                 ?120                	;0
207 143  GOTO/253                  ?0        ?428                 ?121                	;0	<<205
208 145  FETCH_STATIC_PROP_IS/176  $80=      122:'rRequest'       123:'XUI'           	;0
209 145  ISSET_ISEMPTY_DIM_OBJ/115 #81=      $80                  125:'id'            	;33554432
210 145  JMPZ_EX/46                #81=      #81                  ?225                	;0	>>225
211 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'Ba89228dC958Ce05'	;1
212 145  FETCH_STATIC_PROP_FUNC_ARG/177 $82=      128:'rRequest'       129:'XUI'           	;1
213 145  FETCH_DIM_FUNC_ARG/93     $83=      $82                  131:'id'            	;1
214 145  SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
215 145  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
216 145  ASSIGN/38                 $85=      16?1                 $84                 	;0
217 145  BOOL_NOT/13               #86=      $85                  ?0                  	;0
218 145  JMPNZ_EX/47               #86=      #86                  ?224                	;0	>>224
219 145  FETCH_STATIC_PROP_R/173   $87=      132:'rRequest'       133:'XUI'           	;0
220 145  FETCH_DIM_R/81            $88=      $87                  135:'id'            	;0
221 145  FETCH_DIM_R/81            $89=      16?3                 136:'id'            	;0
222 145  IS_EQUAL/17               #90=      $88                  $89                 	;0
223 145  BOOL/52                   #86=      #90                  ?0                  	;0
224 145  BOOL/52                   #81=      #86                  ?0                  	;0	<<218
225 145  BOOL_NOT/13               #91=      #81                  ?0                  	;0	<<210
226 145  JMPZ/43                   ?0        #91                  ?228                	;0	>>228
227 146  GOTO/253                  ?0        ?230                 ?137                	;0
228 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'E72f42a93714ba87'	;0	<<226
229 148  DO_FCALL_BY_NAME/131      ?83       ?0                   ?0                  	;0
230 150  ASSIGN/38                 ?84       16?7                 140:'User'          	;0
231 151  INCLUDE_OR_EVAL/73        ?85       141:'header.php'     ?0                  	;2
232 152  GOTO/253                  ?0        ?82                  ?142                	;0
233 154  ECHO/40                   ?0        143:'Password</label>
													<div class="col-md-8">
                                                        <input type="text" class="form-control" id="password" name="password"' ?0                  	;0
234 155  ISSET_ISEMPTY_CV/197      #95=      16?1                 ?0                  	;33554432
235 155  BOOL_NOT/13               #96=      #95                  ?0                  	;0
236 155  JMPZ/43                   ?0        #96                  ?238                	;0	>>238
237 156  GOTO/253                  ?0        ?239                 ?144                	;0
238 158  ECHO/40                   ?0        145:' placeholder="Enter a new password here to change it"' ?0                  	;0	<<236
239 160  ECHO/40                   ?0        146:' value="'       ?0                  	;0
240 161  GOTO/253                  ?0        ?31                  ?147                	;0
241 163  INCLUDE_OR_EVAL/73        ?88       148:'session.php'    ?0                  	;2	<<0
242 164  INCLUDE_OR_EVAL/73        ?89       149:'functions.php'  ?0                  	;2
243 165  INIT_FCALL_BY_NAME/59     ?0        ?0                   150:'bAf6e9EF7775B5A9'	;0
244 165  DO_FCALL_BY_NAME/131      $99=      ?0                   ?0                  	;0
245 165  JMPZ/43                   ?0        $99                  ?247                	;0	>>247
246 166  GOTO/253                  ?0        ?249                 ?152                	;0
247 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'e72F42A93714Ba87'	;0	<<245
248 168  DO_FCALL_BY_NAME/131      ?91       ?0                   ?0                  	;0
249 170  GOTO/253                  ?0        ?208                 ?155                	;0
250 172  ECHO/40                   ?0        156:'</option>
                                                            </optgroup>
                                                            ' ?0                  	;0
251 173  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'count'         	;1
252 173  FETCH_DIM_FUNC_ARG/93     $101=     16?0                 159:'direct_reports'	;1
253 173  SEND_VAR_EX/66            ?80       $101                 ?1                  	;0
254 173  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
255 173  IS_SMALLER/19             #103=     160:0                $102                	;0
256 173  BOOL_NOT/13               #104=     #103                 ?0                  	;0
257 173  JMPZ/43                   ?0        #104                 ?259                	;0	>>259
258 174  GOTO/253                  ?0        ?121                 ?161                	;0
259 176  ECHO/40                   ?0        162:'                                                            <optgroup label="Direct Reports">
                                                                ' ?0                  	;0	<<257
260 177  FETCH_DIM_R/81            $105=     16?0                 163:'direct_reports'	;0
261 177  FE_RESET_R/77             $106=     $105                 ?292                	;0
262 177  FE_FETCH_R/78             ?0        $106                 16?4                	;292	>>292	<<291
263 178  NOP/0                     ?0        ?0                   ?0                  	;1
264 178  GOTO/253                  ?0        ?265                 ?164                	;0
265 180  FETCH_DIM_R/81            $107=     16?0                 165:'users'         	;0
266 180  FETCH_DIM_R/81            $108=     $107                 16?4                	;0
267 180  ASSIGN/38                 ?100      16?5                 $108                	;0
268 181  ECHO/40                   ?0        166:'                                                                <option value="' ?0                  	;0
269 182  ECHO/40                   ?0        16?4                 ?0                  	;0
270 183  ECHO/40                   ?0        167:'"'              ?0                  	;0
271 184  ISSET_ISEMPTY_DIM_OBJ/115 #110=     16?1                 168:'owner_id'      	;33554432
272 184  JMPZ_EX/46                #110=     #110                 ?276                	;0	>>276
273 184  FETCH_DIM_R/81            $111=     16?1                 169:'owner_id'      	;0
274 184  IS_EQUAL/17               #112=     $111                 16?4                	;0
275 184  BOOL/52                   #110=     #112                 ?0                  	;0
276 184  BOOL_NOT/13               #113=     #110                 ?0                  	;0	<<272
277 184  JMPZ/43                   ?0        #113                 ?280                	;0	>>280
278 185  NOP/0                     ?0        ?0                   ?0                  	;1
279 185  GOTO/253                  ?0        ?283                 ?170                	;0
280 187  NOP/0                     ?0        ?0                   ?0                  	;1	<<277
281 187  GOTO/253                  ?0        ?282                 ?171                	;0
282 189  ECHO/40                   ?0        172:' selected'      ?0                  	;0
283 191  ECHO/40                   ?0        173:'>'              ?0                  	;0
284 192  FETCH_DIM_R/81            $114=     16?5                 174:'username'      	;0
285 192  ECHO/40                   ?0        $114                 ?0                  	;0
286 193  ECHO/40                   ?0        175:'</option>
                                                                ' ?0                  	;0
287 194  NOP/0                     ?0        ?0                   ?0                  	;1
288 194  GOTO/253                  ?0        ?289                 ?176                	;0
289 197  NOP/0                     ?0        ?0                   ?0                  	;1
290 197  GOTO/253                  ?0        ?291                 ?177                	;0
291 198  JMP/42                    ?0        ?262                 ?0                  	;0	>>262
292 198  FE_FREE/127               ?0        $106                 ?0                  	;0	<<261
293 201  GOTO/253                  ?0        ?120                 ?178                	;0
294 203  ECHO/40                   ?0        179:'</td>
                                                                <td class="text-center" id="remaining_credits">' ?0                  	;0
295 204  INIT_FCALL_BY_NAME/59     ?0        ?0                   180:'number_format' 	;2
296 204  FETCH_DIM_R/81            $115=     16?3                 182:'credits'       	;0
297 204  FETCH_DIM_R/81            $116=     16?0                 183:'create_sub_resellers_price'	;0
298 204  SUB/2                     #117=     $115                 $116                	;0
299 204  SEND_VAL_EX/116           ?80       #117                 ?1                  	;0
300 204  SEND_VAL_EX/116           ?96       184:0                ?2                  	;0
301 204  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
302 204  ECHO/40                   ?0        $118                 ?0                  	;0
303 205  ECHO/40                   ?0        185:'</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-inline wizard mb-0">
                                            <li class="prevb list-inline-item">
                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                            </li>
                                            <li class="list-inline-item float-right">
                                                <input ' ?0                  	;0
304 206  FETCH_DIM_R/81            $119=     16?3                 186:'credits'       	;0
305 206  FETCH_DIM_R/81            $120=     16?0                 187:'create_sub_resellers_price'	;0
306 206  SUB/2                     #121=     $119                 $120                	;0
307 206  IS_SMALLER/19             #122=     #121                 188:0               	;0
308 206  BOOL_NOT/13               #123=     #122                 ?0                  	;0
309 206  JMPZ/43                   ?0        #123                 ?311                	;0	>>311
310 207  GOTO/253                  ?0        ?28                  ?189                	;0
311 209  ECHO/40                   ?0        190:'disabled '      ?0                  	;0	<<309
312 210  GOTO/253                  ?0        ?28                  ?191                	;0
313 212  ISSET_ISEMPTY_DIM_OBJ/115 #124=     16?1                 192:'owner_id'      	;33554432
314 212  JMPZ_EX/46                #124=     #124                 ?319                	;0	>>319
315 212  FETCH_DIM_R/81            $125=     16?1                 193:'owner_id'      	;0
316 212  FETCH_DIM_R/81            $126=     16?3                 194:'id'            	;0
317 212  IS_EQUAL/17               #127=     $125                 $126                	;0
318 212  BOOL/52                   #124=     #127                 ?0                  	;0
319 212  BOOL_NOT/13               #128=     #124                 ?0                  	;0	<<314
320 212  JMPZ/43                   ?0        #128                 ?322                	;0	>>322
321 213  GOTO/253                  ?0        ?323                 ?195                	;0
322 215  ECHO/40                   ?0        196:' selected'      ?0                  	;0	<<320
323 217  ECHO/40                   ?0        197:'>'              ?0                  	;0
324 218  FETCH_DIM_R/81            $129=     16?3                 198:'username'      	;0
325 218  ECHO/40                   ?0        $129                 ?0                  	;0
326 219  GOTO/253                  ?0        ?250                 ?199                	;0
327 221  INIT_FCALL_BY_NAME/59     ?0        ?0                   200:'count'         	;1
328 221  FETCH_DIM_FUNC_ARG/93     $130=     16?0                 202:'subresellers'  	;1
329 221  SEND_VAR_EX/66            ?80       $130                 ?1                  	;0
330 221  DO_FCALL_BY_NAME/131      $131=     ?0                   ?0                  	;0
331 221  IS_SMALLER/19             #132=     203:1                $131                	;0
332 221  BOOL_NOT/13               #133=     #132                 ?0                  	;0
333 221  JMPZ/43                   ?0        #133                 ?335                	;0	>>335
334 222  GOTO/253                  ?0        ?71                  ?204                	;0
335 224  ECHO/40                   ?0        205:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="member_group_id">Member Group</label>
													<div class="col-md-8">
														<select name="member_group_id" id="member_group_id" class="form-control select2" data-toggle="select2">
															' ?0                  	;0	<<333
336 225  INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'ad052A625c6ac011'	;0
337 225  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
338 225  FE_RESET_R/77             $135=     $134                 ?390                	;0
339 225  FE_FETCH_R/78             ?0        $135                 16?8                	;390	>>390	<<389
340 226  NOP/0                     ?0        ?0                   ?0                  	;1
341 226  GOTO/253                  ?0        ?342                 ?208                	;0
342 228  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'in_array'      	;2
343 228  FETCH_DIM_FUNC_ARG/93     $136=     16?8                 211:'group_id'      	;1
344 228  SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
345 228  FETCH_DIM_FUNC_ARG/93     $137=     16?0                 212:'subresellers'  	;2
346 228  SEND_VAR_EX/66            ?96       $137                 ?2                  	;0
347 228  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
348 228  JMPZ/43                   ?0        $138                 ?351                	;0	>>351
349 229  NOP/0                     ?0        ?0                   ?0                  	;1
350 229  GOTO/253                  ?0        ?353                 ?213                	;0
351 231  NOP/0                     ?0        ?0                   ?0                  	;1	<<348
352 231  GOTO/253                  ?0        ?387                 ?214                	;0
353 233  ECHO/40                   ?0        215:'															<option ' ?0                  	;0
354 234  ISSET_ISEMPTY_CV/197      #139=     16?1                 ?0                  	;33554432
355 234  BOOL_NOT/13               #140=     #139                 ?0                  	;0
356 234  JMPZ/43                   ?0        #140                 ?359                	;0	>>359
357 235  NOP/0                     ?0        ?0                   ?0                  	;1
358 235  GOTO/253                  ?0        ?375                 ?216                	;0
359 237  NOP/0                     ?0        ?0                   ?0                  	;1	<<356
360 237  GOTO/253                  ?0        ?361                 ?217                	;0
361 239  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'intval'        	;1
362 239  FETCH_DIM_FUNC_ARG/93     $141=     16?1                 220:'member_group_id'	;1
363 239  SEND_VAR_EX/66            ?80       $141                 ?1                  	;0
364 239  DO_FCALL_BY_NAME/131      $142=     ?0                   ?0                  	;0
365 239  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'intval'        	;1
366 239  FETCH_DIM_FUNC_ARG/93     $143=     16?8                 223:'group_id'      	;1
367 239  SEND_VAR_EX/66            ?80       $143                 ?1                  	;0
368 239  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
369 239  IS_EQUAL/17               #145=     $142                 $144                	;0
370 239  BOOL_NOT/13               #146=     #145                 ?0                  	;0
371 239  JMPZ/43                   ?0        #146                 ?374                	;0	>>374
372 240  NOP/0                     ?0        ?0                   ?0                  	;1
373 240  GOTO/253                  ?0        ?375                 ?224                	;0
374 242  ECHO/40                   ?0        225:'selected '      ?0                  	;0	<<371
375 245  ECHO/40                   ?0        226:'value="'        ?0                  	;0
376 246  NOP/0                     ?0        ?0                   ?0                  	;1
377 246  GOTO/253                  ?0        ?378                 ?227                	;0
378 248  INIT_FCALL_BY_NAME/59     ?0        ?0                   228:'intval'        	;1
379 248  FETCH_DIM_FUNC_ARG/93     $147=     16?8                 230:'group_id'      	;1
380 248  SEND_VAR_EX/66            ?80       $147                 ?1                  	;0
381 248  DO_FCALL_BY_NAME/131      $148=     ?0                   ?0                  	;0
382 248  ECHO/40                   ?0        $148                 ?0                  	;0
383 249  ECHO/40                   ?0        231:'">'             ?0                  	;0
384 250  FETCH_DIM_R/81            $149=     16?8                 232:'group_name'    	;0
385 250  ECHO/40                   ?0        $149                 ?0                  	;0
386 251  ECHO/40                   ?0        233:'</option>
															' ?0                  	;0
387 253  NOP/0                     ?0        ?0                   ?0                  	;1
388 253  GOTO/253                  ?0        ?389                 ?234                	;0
389 254  JMP/42                    ?0        ?339                 ?0                  	;0	>>339
390 254  FE_FREE/127               ?0        $135                 ?0                  	;0	<<338
391 257  ECHO/40                   ?0        235:'														</select>
													</div>
												</div>
                                                ' ?0                  	;0
392 258  GOTO/253                  ?0        ?71                  ?236                	;0
393 260  GOTO/253                  ?0        ?399                 ?237                	;0
394 262  INIT_FCALL_BY_NAME/59     ?0        ?0                   238:'htmlspecialchars'	;1
395 262  FETCH_DIM_FUNC_ARG/93     $150=     16?1                 240:'username'      	;1
396 262  SEND_VAR_EX/66            ?80       $150                 ?1                  	;0
397 262  DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
398 262  ECHO/40                   ?0        $151                 ?0                  	;0
399 264  ECHO/40                   ?0        241:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                ' ?0                  	;0
400 265  GOTO/253                  ?0        ?1                   ?242                	;0
401 268  INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'count'         	;1
402 268  FETCH_DIM_FUNC_ARG/93     $152=     16?0                 245:'all_reports'   	;1
403 268  SEND_VAR_EX/66            ?80       $152                 ?1                  	;0
404 268  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
405 268  IS_SMALLER/19             #154=     246:0                $153                	;0
406 268  BOOL_NOT/13               #155=     #154                 ?0                  	;0
407 268  JMPZ/43                   ?0        #155                 ?409                	;0	>>409
408 269  GOTO/253                  ?0        ?18                  ?247                	;0
409 271  ECHO/40                   ?0        248:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="owner_id">Owner</label>
													<div class="col-md-8">
														<select name="owner_id" id="owner_id" class="form-control select2" data-toggle="select2">
															<optgroup label="Myself">
                                                                <option value="' ?0                  	;0	<<407
410 272  FETCH_DIM_R/81            $156=     16?3                 249:'id'            	;0
411 272  ECHO/40                   ?0        $156                 ?0                  	;0
412 273  ECHO/40                   ?0        250:'"'              ?0                  	;0
413 274  GOTO/253                  ?0        ?313                 ?251                	;0
414 276  ISSET_ISEMPTY_CV/197      #157=     16?1                 ?0                  	;33554432
415 276  JMPZ/43                   ?0        #157                 ?417                	;0	>>417
416 277  GOTO/253                  ?0        ?418                 ?252                	;0
417 279  ECHO/40                   ?0        253:'                                    <li class="nav-item">
                                        <a href="#review-purchase" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-book-open-variant mr-1"></i>
                                            <span class="d-none d-sm-inline">Review Purchase</span>
                                        </a>
                                    </li>
                                    ' ?0                  	;0	<<415
418 281  ECHO/40                   ?0        254:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="user-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Username</label>
													<div class="col-md-8">
														<input ' ?0                  	;0
419 282  FETCH_DIM_R/81            $158=     16?0                 255:'allow_change_username'	;0
420 282  BOOL_NOT/13               #159=     $158                 ?0                  	;0
421 282  JMPZ_EX/46                #159=     #159                 ?424                	;0	>>424
422 282  ISSET_ISEMPTY_CV/197      #160=     16?1                 ?0                  	;33554432
423 282  BOOL/52                   #159=     #160                 ?0                  	;0
424 282  BOOL_NOT/13               #161=     #159                 ?0                  	;0	<<421
425 282  JMPZ/43                   ?0        #161                 ?427                	;0	>>427
426 283  GOTO/253                  ?0        ?91                  ?256                	;0
427 285  GOTO/253                  ?0        ?90                  ?257                	;0	<<425
428 287  ECHO/40                   ?0        258:'											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">Next</a>
											</li>
                                            ' ?0                  	;0
429 288  GOTO/253                  ?0        ?431                 ?259                	;0
430 290  ECHO/40                   ?0        260:'                                            <li class="list-inline-item float-right">
                                                <input name="submit_user" type="submit" class="btn btn-primary purchase" value="Edit" />
                                            </li>
                                            ' ?0                  	;0
431 292  GOTO/253                  ?0        ?471                 ?261                	;0
432 294  FETCH_DIM_UNSET/96        $162=     16?0                 262:'all_reports'   	;0
433 294  UNSET_DIM/75              ?0        $162                 16?2                	;0
434 296  INIT_FCALL_BY_NAME/59     ?0        ?0                   263:'array_search'  	;2
435 296  FETCH_DIM_FUNC_ARG/93     $163=     16?1                 265:'id'            	;1
436 296  SEND_VAR_EX/66            ?80       $163                 ?1                  	;0
437 296  FETCH_DIM_FUNC_ARG/93     $164=     16?0                 266:'direct_reports'	;2
438 296  SEND_VAR_EX/66            ?96       $164                 ?2                  	;0
439 296  DO_FCALL_BY_NAME/131      $165=     ?0                   ?0                  	;0
440 296  ASSIGN/38                 $166=     16?2                 $165                	;0
441 296  IS_NOT_IDENTICAL/16       #167=     $166                 267:false           	;0
442 296  BOOL_NOT/13               #168=     #167                 ?0                  	;0
443 296  JMPZ/43                   ?0        #168                 ?445                	;0	>>445
444 297  GOTO/253                  ?0        ?447                 ?268                	;0
445 299  FETCH_DIM_UNSET/96        $169=     16?0                 269:'direct_reports'	;0	<<443
446 299  UNSET_DIM/75              ?0        $169                 16?2                	;0
447 301  GOTO/253                  ?0        ?401                 ?270                	;0
448 303  ISSET_ISEMPTY_CV/197      #170=     16?1                 ?0                  	;33554432
449 303  JMPZ_EX/46                #170=     #170                 ?458                	;0	>>458
450 303  INIT_FCALL_BY_NAME/59     ?0        ?0                   271:'in_array'      	;2
451 303  FETCH_DIM_FUNC_ARG/93     $171=     16?1                 273:'id'            	;1
452 303  SEND_VAR_EX/66            ?80       $171                 ?1                  	;0
453 303  FETCH_DIM_FUNC_ARG/93     $172=     16?0                 274:'direct_reports'	;2
454 303  SEND_VAR_EX/66            ?96       $172                 ?2                  	;0
455 303  DO_FCALL_BY_NAME/131      $173=     ?0                   ?0                  	;0
456 303  BOOL_NOT/13               #174=     $173                 ?0                  	;0
457 303  BOOL/52                   #170=     #174                 ?0                  	;0
458 303  BOOL_NOT/13               #175=     #170                 ?0                  	;0	<<449
459 303  JMPZ/43                   ?0        #175                 ?461                	;0	>>461
460 304  GOTO/253                  ?0        ?179                 ?275                	;0
461 306  INIT_FCALL_BY_NAME/59     ?0        ?0                   276:'ba89228Dc958cE05'	;1	<<459
462 306  FETCH_DIM_FUNC_ARG/93     $176=     16?1                 278:'owner_id'      	;1
463 306  SEND_VAR_EX/66            ?80       $176                 ?1                  	;0
464 306  DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
465 306  ASSIGN/38                 ?169      16?6                 $177                	;0
466 307  ECHO/40                   ?0        279:'                <div class="alert alert-info" role="alert">
                    This user does not directly report to you, although you have the right to edit this user you should notify the user\'s parent <strong><a href="user?id=' ?0                  	;0
467 308  FETCH_DIM_R/81            $179=     16?6                 280:'id'            	;0
468 308  ECHO/40                   ?0        $179                 ?0                  	;0
469 309  ECHO/40                   ?0        281:'">'             ?0                  	;0
470 310  GOTO/253                  ?0        ?176                 ?282                	;0
471 312  ECHO/40                   ?0        283:'										</ul>
									</div>
									' ?0                  	;0
472 313  ISSET_ISEMPTY_CV/197      #180=     16?1                 ?0                  	;33554432
473 313  JMPZ/43                   ?0        #180                 ?475                	;0	>>475
474 314  GOTO/253                  ?0        ?29                  ?284                	;0
475 316  ECHO/40                   ?0        285:'                                    <div class="tab-pane" id="review-purchase">
                                        <div class="row">
                                            <div class="col-12">
                                                ' ?0                  	;0	<<473
476 317  FETCH_DIM_R/81            $181=     16?3                 286:'credits'       	;0
477 317  FETCH_DIM_R/81            $182=     16?0                 287:'create_sub_resellers_price'	;0
478 317  SUB/2                     #183=     $181                 $182                	;0
479 317  IS_SMALLER/19             #184=     #183                 288:0               	;0
480 317  BOOL_NOT/13               #185=     #184                 ?0                  	;0
481 317  JMPZ/43                   ?0        #185                 ?483                	;0	>>483
482 318  GOTO/253                  ?0        ?105                 ?289                	;0
483 320  ECHO/40                   ?0        290:'                                                <div class="alert alert-danger" role="alert" id="no-credits">
                                                    <i class="mdi mdi-block-helper mr-2"></i> You do not have enough credits to complete this transaction!
                                                </div>
                                                ' ?0                  	;0	<<481
484 321  GOTO/253                  ?0        ?105                 ?291                	;0
485 323  GOTO/253                  ?0        ?487                 ?292                	;0
486 325  ECHO/40                   ?0        293:'Edit'           ?0                  	;0
487 327  ECHO/40                   ?0        294:' User</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
                ' ?0                  	;0
488 328  GOTO/253                  ?0        ?448                 ?295                	;0
489 330  INCLUDE_OR_EVAL/73        ?177      296:'footer.php'     ?0                  	;2
490 331  NOP/0                     ?0        297:1                ?0                  	;4294967295
*/

?>