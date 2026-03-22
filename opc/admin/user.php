<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?210                 ?0                  	;0	>>210
1   5    ECHO/40                   ?0        1:' style="display: none;"' ?0                  	;0
2   7    ECHO/40                   ?0        2:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
3   8    INCLUDE_OR_EVAL/73        ?0        3:'topbar.php'       ?0                  	;2
4   9    ECHO/40                   ?0        4:'					</div>
					<h4 class="page-title">' ?0                  	;0
5   10   GOTO/253                  ?0        ?68                  ?5                  	;0
6   12   ECHO/40                   ?0        6:'Change '          ?0                  	;0
7   14   ECHO/40                   ?0        7:'Password</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="password" name="password"' ?0                  	;0
8   15   ISSET_ISEMPTY_CV/197      #10=      16?0                 ?0                  	;33554432
9   15   BOOL_NOT/13               #11=      #10                  ?0                  	;0
10  15   JMPZ/43                   ?0        #11                  ?12                 	;0	>>12
11  16   GOTO/253                  ?0        ?313                 ?8                  	;0
12  18   ECHO/40                   ?0        9:' placeholder="Enter a new password here to change it"' ?0                  	;0	<<10
13  19   GOTO/253                  ?0        ?313                 ?10                 	;0
14  21   ECHO/40                   ?0        11:'</textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_user" type="submit" class="btn btn-primary" value="' ?0                  	;0
15  22   ISSET_ISEMPTY_CV/197      #12=      16?0                 ?0                  	;33554432
16  22   JMPZ/43                   ?0        #12                  ?18                 	;0	>>18
17  23   GOTO/253                  ?0        ?20                  ?12                 	;0
18  25   ECHO/40                   ?0        13:'Add'             ?0                  	;0	<<16
19  26   GOTO/253                  ?0        ?42                  ?14                 	;0
20  28   GOTO/253                  ?0        ?41                  ?15                 	;0
21  31   ECHO/40                   ?0        16:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="user-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="username">Username</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="username" name="username" value="' ?0                  	;0
22  32   ISSET_ISEMPTY_CV/197      #13=      16?0                 ?0                  	;33554432
23  32   JMPZ/43                   ?0        #13                  ?25                 	;0	>>25
24  33   GOTO/253                  ?0        ?57                  ?17                 	;0
25  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'fc34407B2842461b'	;1	<<23
26  35   SEND_VAL_EX/116           ?80       20:10                ?1                  	;0
27  35   DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
28  35   ECHO/40                   ?0        $14                  ?0                  	;0
29  36   GOTO/253                  ?0        ?62                  ?21                 	;0
30  37   GOTO/253                  ?0        ?57                  ?22                 	;0
31  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'intval'         	;1
32  39   FETCH_DIM_FUNC_ARG/93     $15=      16?1                 25:'id'             	;1
33  39   SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
34  39   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
35  39   ECHO/40                   ?0        $16                  ?0                  	;0
36  40   ECHO/40                   ?0        26:'" selected="selected">' ?0                  	;0
37  41   FETCH_DIM_R/81            $17=      16?1                 27:'username'       	;0
38  41   ECHO/40                   ?0        $17                  ?0                  	;0
39  42   ECHO/40                   ?0        28:'</option>
                                                            ' ?0                  	;0
40  44   GOTO/253                  ?0        ?336                 ?29                 	;0
41  46   ECHO/40                   ?0        30:'Edit'            ?0                  	;0
42  48   ECHO/40                   ?0        31:' User" />
											</li>
										</ul>
									</div>
                                    ' ?0                  	;0
43  49   ISSET_ISEMPTY_CV/197      #18=      16?0                 ?0                  	;33554432
44  49   BOOL_NOT/13               #19=      #18                  ?0                  	;0
45  49   JMPZ/43                   ?0        #19                  ?47                 	;0	>>47
46  50   GOTO/253                  ?0        ?202                 ?32                 	;0
47  52   ECHO/40                   ?0        33:'									<div class="tab-pane" id="override">
										<div class="row">
											<div class="col-12">
                                                ' ?0                  	;0	<<45
48  53   GOTO/253                  ?0        ?190                 ?34                 	;0
49  55   ECHO/40                   ?0        35:'" />
							'    ?0                  	;0
50  57   ECHO/40                   ?0        36:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
                                    ' ?0                  	;0
51  58   ISSET_ISEMPTY_CV/197      #20=      16?0                 ?0                  	;33554432
52  58   BOOL_NOT/13               #21=      #20                  ?0                  	;0
53  58   JMPZ/43                   ?0        #21                  ?55                 	;0	>>55
54  59   GOTO/253                  ?0        ?21                  ?37                 	;0
55  61   ECHO/40                   ?0        38:'									<li class="nav-item">
										<a href="#override" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-pencil-plus mr-1"></i>
											<span class="d-none d-sm-inline">Overrides</span>
										</a>
									</li>
                                    ' ?0                  	;0	<<53
56  62   GOTO/253                  ?0        ?21                  ?39                 	;0
57  65   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'htmlspecialchars'	;1
58  65   FETCH_DIM_FUNC_ARG/93     $22=      16?0                 42:'username'       	;1
59  65   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
60  65   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
61  65   ECHO/40                   ?0        $23                  ?0                  	;0
62  67   ECHO/40                   ?0        43:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="password">' ?0                  	;0
63  68   ISSET_ISEMPTY_CV/197      #24=      16?0                 ?0                  	;33554432
64  68   BOOL_NOT/13               #25=      #24                  ?0                  	;0
65  68   JMPZ/43                   ?0        #25                  ?67                 	;0	>>67
66  69   GOTO/253                  ?0        ?7                   ?44                 	;0
67  71   GOTO/253                  ?0        ?6                   ?45                 	;0	<<65
68  73   ISSET_ISEMPTY_CV/197      #26=      16?0                 ?0                  	;33554432
69  73   JMPZ/43                   ?0        #26                  ?71                 	;0	>>71
70  74   GOTO/253                  ?0        ?73                  ?46                 	;0
71  76   ECHO/40                   ?0        47:'Add'             ?0                  	;0	<<69
72  77   GOTO/253                  ?0        ?282                 ?48                 	;0
73  79   ECHO/40                   ?0        49:'Edit'            ?0                  	;0
74  80   GOTO/253                  ?0        ?282                 ?50                 	;0
75  83   ASSIGN/38                 ?18       16?2                 51:'User'           	;0
76  84   INCLUDE_OR_EVAL/73        ?19       52:'header.php'      ?0                  	;2
77  85   ECHO/40                   ?0        53:'<div class="wrapper boxed-layout"' ?0                  	;0
78  86   FETCH_IS/89               $29=      54:'_SERVER'         ?0                  	;0
79  86   ISSET_ISEMPTY_DIM_OBJ/115 #30=      $29                  55:'HTTP_X_REQUESTED_WITH'	;16777216
80  86   BOOL_NOT/13               #31=      #30                  ?0                  	;0
81  86   JMPZ_EX/46                #31=      #31                  ?89                 	;0	>>89
82  86   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'strtolower'     	;1
83  86   FETCH_FUNC_ARG/92         $32=      58:'_SERVER'         ?0                  	;1
84  86   FETCH_DIM_FUNC_ARG/93     $33=      $32                  59:'HTTP_X_REQUESTED_WITH'	;1
85  86   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
86  86   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
87  86   IS_EQUAL/17               #35=      $34                  60:'xmlhttprequest' 	;0
88  86   BOOL/52                   #31=      #35                  ?0                  	;0
89  86   BOOL_NOT/13               #36=      #31                  ?0                  	;0	<<81
90  86   JMPZ/43                   ?0        #36                  ?92                 	;0	>>92
91  87   GOTO/253                  ?0        ?2                   ?61                 	;0
92  89   GOTO/253                  ?0        ?1                   ?62                 	;0	<<90
93  92   FE_RESET_R/77             $37=      16?3                 ?154                	;0
94  92   FE_FETCH_R/78             ?0        $37                  16?4                	;154	>>154	<<153
95  93   NOP/0                     ?0        ?0                   ?0                  	;1
96  93   GOTO/253                  ?0        ?120                 ?63                 	;0
97  95   FETCH_DIM_R/81            $38=      16?4                 64:'id'             	;0
98  95   ISSET_ISEMPTY_DIM_OBJ/115 #39=      16?5                 $38                 	;33554432
99  95   BOOL_NOT/13               #40=      #39                  ?0                  	;0
100 95   JMPZ/43                   ?0        #40                  ?103                	;0	>>103
101 96   NOP/0                     ?0        ?0                   ?0                  	;1
102 96   GOTO/253                  ?0        ?117                 ?65                 	;0
103 98   FETCH_DIM_R/81            $41=      16?4                 66:'id'             	;0	<<100
104 98   FETCH_DIM_IS/90           $42=      16?5                 $41                 	;0
105 98   ISSET_ISEMPTY_DIM_OBJ/115 #43=      $42                  67:'official_credits'	;16777216
106 98   JMPZ/43                   ?0        #43                  ?109                	;0	>>109
107 98   QM_ASSIGN/22              #44=      68:''                ?0                  	;0
108 98   JMP/42                    ?0        ?116                 ?0                  	;0	>>116
109 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   69:'intval'         	;1	<<106
110 98   FETCH_DIM_R/81            $45=      16?4                 71:'id'             	;0
111 98   FETCH_DIM_FUNC_ARG/93     $46=      16?5                 $45                 	;1
112 98   FETCH_DIM_FUNC_ARG/93     $47=      $46                  72:'official_credits'	;1
113 98   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
114 98   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
115 98   QM_ASSIGN/22              #44=      $48                  ?0                  	;0
116 98   ECHO/40                   ?0        #44                  ?0                  	;0	<<108
117 100  ECHO/40                   ?0        73:'" style="width:100px; display: inline;" class="text-center" />
															</td>
														</tr>
														' ?0                  	;0
118 102  NOP/0                     ?0        ?0                   ?0                  	;1
119 102  GOTO/253                  ?0        ?136                 ?74                 	;0
120 104  FETCH_DIM_R/81            $49=      16?4                 75:'is_official'    	;0
121 104  BOOL_NOT/13               #50=      $49                  ?0                  	;0
122 104  JMPZ/43                   ?0        #50                  ?125                	;0	>>125
123 105  NOP/0                     ?0        ?0                   ?0                  	;1
124 105  GOTO/253                  ?0        ?118                 ?76                 	;0
125 107  ECHO/40                   ?0        77:'														<tr>
															<td class="text-center">' ?0                  	;0	<<122
126 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'intval'         	;1
127 108  FETCH_DIM_FUNC_ARG/93     $51=      16?4                 80:'id'             	;1
128 108  SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
129 108  DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
130 108  ECHO/40                   ?0        $52                  ?0                  	;0
131 109  ECHO/40                   ?0        81:'</td>
															<td>' ?0                  	;0
132 110  FETCH_DIM_R/81            $53=      16?4                 82:'package_name'   	;0
133 110  ECHO/40                   ?0        $53                  ?0                  	;0
134 111  NOP/0                     ?0        ?0                   ?0                  	;1
135 111  GOTO/253                  ?0        ?138                 ?83                 	;0
136 114  NOP/0                     ?0        ?0                   ?0                  	;1
137 114  GOTO/253                  ?0        ?153                 ?84                 	;0
138 116  ECHO/40                   ?0        85:'</td>
															<td class="text-center">' ?0                  	;0
139 117  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'intval'         	;1
140 117  FETCH_DIM_FUNC_ARG/93     $54=      16?4                 88:'official_credits'	;1
141 117  SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
142 117  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
143 117  ECHO/40                   ?0        $55                  ?0                  	;0
144 118  ECHO/40                   ?0        89:'</td>
															<td align="center">
																<input class="form-control text-center" onkeypress="return isNumberKey(event)" name="override_' ?0                  	;0
145 119  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'intval'         	;1
146 119  FETCH_DIM_FUNC_ARG/93     $56=      16?4                 92:'id'             	;1
147 119  SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
148 119  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
149 119  ECHO/40                   ?0        $57                  ?0                  	;0
150 120  ECHO/40                   ?0        93:'" type="text" value="' ?0                  	;0
151 121  NOP/0                     ?0        ?0                   ?0                  	;1
152 121  GOTO/253                  ?0        ?97                  ?94                 	;0
153 122  JMP/42                    ?0        ?94                  ?0                  	;0	>>94
154 122  FE_FREE/127               ?0        $37                  ?0                  	;0	<<93
155 125  ECHO/40                   ?0        95:'													</tbody>
												</table><br/><br/>
                                                ' ?0                  	;0
156 127  GOTO/253                  ?0        ?183                 ?96                 	;0
157 129  FETCH_STATIC_PROP_IS/176  $58=      97:'rRequest'        98:'XUI'            	;0
158 129  ISSET_ISEMPTY_DIM_OBJ/115 #59=      $58                  100:'id'            	;33554432
159 129  JMPZ_EX/46                #59=      #59                  ?168                	;0	>>168
160 129  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'Ba89228DC958ce05'	;1
161 129  FETCH_STATIC_PROP_FUNC_ARG/177 $60=      103:'rRequest'       104:'XUI'           	;1
162 129  FETCH_DIM_FUNC_ARG/93     $61=      $60                  106:'id'            	;1
163 129  SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
164 129  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
165 129  ASSIGN/38                 $63=      16?0                 $62                 	;0
166 129  BOOL_NOT/13               #64=      $63                  ?0                  	;0
167 129  BOOL/52                   #59=      #64                  ?0                  	;0
168 129  BOOL_NOT/13               #65=      #59                  ?0                  	;0	<<159
169 129  JMPZ/43                   ?0        #65                  ?171                	;0	>>171
170 130  GOTO/253                  ?0        ?173                 ?107                	;0
171 132  INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'e72F42a93714bA87'	;0	<<169
172 132  DO_FCALL_BY_NAME/131      ?57       ?0                   ?0                  	;0
173 134  ISSET_ISEMPTY_CV/197      #67=      16?0                 ?0                  	;33554432
174 134  BOOL_NOT/13               #68=      #67                  ?0                  	;0
175 134  JMPZ/43                   ?0        #68                  ?177                	;0	>>177
176 135  GOTO/253                  ?0        ?75                  ?110                	;0
177 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'D8C8284136938ef0'	;1	<<175
178 137  FETCH_DIM_FUNC_ARG/93     $69=      16?0                 113:'member_group_id'	;1
179 137  SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
180 137  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
181 137  ASSIGN/38                 ?62       16?3                 $70                 	;0
182 138  GOTO/253                  ?0        ?75                  ?114                	;0
183 140  ECHO/40                   ?0        115:'											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_user" type="submit" class="btn btn-primary" value="' ?0                  	;0
184 141  ISSET_ISEMPTY_CV/197      #72=      16?0                 ?0                  	;33554432
185 141  JMPZ/43                   ?0        #72                  ?187                	;0	>>187
186 142  GOTO/253                  ?0        ?189                 ?116                	;0
187 144  ECHO/40                   ?0        117:'Add'            ?0                  	;0	<<185
188 145  GOTO/253                  ?0        ?201                 ?118                	;0
189 147  GOTO/253                  ?0        ?200                 ?119                	;0
190 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   120:'count'         	;1
191 149  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
192 149  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
193 149  IS_SMALLER/19             #74=      122:0                $73                 	;0
194 149  JMPZ/43                   ?0        #74                  ?196                	;0	>>196
195 150  GOTO/253                  ?0        ?198                 ?123                	;0
196 152  ECHO/40                   ?0        124:'                                                <div class="alert alert-info" role="alert">
                                                    No packages have been allocated to this user group. You can either modify the package to include the group, or the group to include the package you want.
                                                </div>
                                                ' ?0                  	;0	<<194
197 153  GOTO/253                  ?0        ?156                 ?125                	;0
198 155  ECHO/40                   ?0        126:'												<p class="sub-header">
													Leave the override cell blank to disable package override for the selected package.
												</p>
												<table id="datatable" class="table table-striped table-borderless mb-0">
													<thead>
														<tr>
															<th class="text-center">#</th>
															<th>Package</th>
															<th class="text-center">Credits</th>
															<th class="text-center">Override</th>
														</tr>
													</thead>
													<tbody>
														' ?0                  	;0
199 156  GOTO/253                  ?0        ?219                 ?127                	;0
200 158  ECHO/40                   ?0        128:'Edit'           ?0                  	;0
201 160  ECHO/40                   ?0        129:' User" />
											</li>
										</ul>
									</div>
                                    ' ?0                  	;0
202 162  ECHO/40                   ?0        130:'								</div> 
							</div> 
						</form>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
203 163  GOTO/253                  ?0        ?367                 ?131                	;0
204 165  FETCH_DIM_R/81            $75=      16?6                 132:'username'      	;0
205 165  ECHO/40                   ?0        $75                  ?0                  	;0
206 166  ECHO/40                   ?0        133:'</option>
                                                            ' ?0                  	;0
207 167  GOTO/253                  ?0        ?40                  ?134                	;0
208 169  ECHO/40                   ?0        135:'                                                            <option value="' ?0                  	;0
209 170  GOTO/253                  ?0        ?31                  ?136                	;0
210 172  INCLUDE_OR_EVAL/73        ?67       137:'session.php'    ?0                  	;2	<<0
211 173  INCLUDE_OR_EVAL/73        ?68       138:'functions.php'  ?0                  	;2
212 174  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'e6D500e19634d513'	;0
213 174  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
214 174  JMPZ/43                   ?0        $78                  ?216                	;0	>>216
215 175  GOTO/253                  ?0        ?218                 ?141                	;0
216 177  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'E72f42A93714ba87'	;0	<<214
217 177  DO_FCALL_BY_NAME/131      ?70       ?0                   ?0                  	;0
218 179  GOTO/253                  ?0        ?157                 ?144                	;0
219 181  ISSET_ISEMPTY_CV/197      #80=      16?0                 ?0                  	;33554432
220 181  JMPZ/43                   ?0        #80                  ?222                	;0	>>222
221 182  GOTO/253                  ?0        ?224                 ?145                	;0
222 184  ASSIGN/38                 ?72       16?5                 146:array (
)       	;0	<<220
223 185  GOTO/253                  ?0        ?93                  ?147                	;0
224 187  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'json_decode'   	;2
225 187  FETCH_DIM_FUNC_ARG/93     $82=      16?0                 150:'override_packages'	;1
226 187  SEND_VAR_EX/66            ?80       $82                  ?1                  	;0
227 187  SEND_VAL_EX/116           ?96       151:true             ?2                  	;0
228 187  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
229 187  ASSIGN/38                 ?75       16?5                 $83                 	;0
230 188  GOTO/253                  ?0        ?93                  ?152                	;0
231 190  INIT_FCALL_BY_NAME/59     ?0        ?0                   153:'htmlspecialchars'	;1
232 190  FETCH_DIM_FUNC_ARG/93     $85=      16?0                 155:'email'         	;1
233 190  SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
234 190  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
235 190  ECHO/40                   ?0        $86                  ?0                  	;0
236 192  ECHO/40                   ?0        156:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="member_group_id">Member Group</label>
													<div class="col-md-8">
														<select name="member_group_id" id="member_group_id" class="form-control select2" data-toggle="select2">
                                                            <option></option>
															' ?0                  	;0
237 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'aD052A625C6Ac011'	;0
238 193  DO_FCALL_BY_NAME/131      $87=      ?0                   ?0                  	;0
239 193  FE_RESET_R/77             $88=      $87                  ?280                	;0
240 193  FE_FETCH_R/78             ?0        $88                  16?7                	;280	>>280	<<279
241 194  NOP/0                     ?0        ?0                   ?0                  	;1
242 194  GOTO/253                  ?0        ?257                 ?159                	;0
243 197  ECHO/40                   ?0        160:'value="'        ?0                  	;0
244 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   161:'intval'        	;1
245 198  FETCH_DIM_FUNC_ARG/93     $89=      16?7                 163:'group_id'      	;1
246 198  SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
247 198  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
248 198  ECHO/40                   ?0        $90                  ?0                  	;0
249 199  ECHO/40                   ?0        164:'">'             ?0                  	;0
250 200  FETCH_DIM_R/81            $91=      16?7                 165:'group_name'    	;0
251 200  ECHO/40                   ?0        $91                  ?0                  	;0
252 201  NOP/0                     ?0        ?0                   ?0                  	;1
253 201  GOTO/253                  ?0        ?254                 ?166                	;0
254 203  ECHO/40                   ?0        167:'</option>
															' ?0                  	;0
255 205  NOP/0                     ?0        ?0                   ?0                  	;1
256 205  GOTO/253                  ?0        ?279                 ?168                	;0
257 207  ECHO/40                   ?0        169:'															<option ' ?0                  	;0
258 208  ISSET_ISEMPTY_CV/197      #92=      16?0                 ?0                  	;33554432
259 208  BOOL_NOT/13               #93=      #92                  ?0                  	;0
260 208  JMPZ/43                   ?0        #93                  ?263                	;0	>>263
261 209  NOP/0                     ?0        ?0                   ?0                  	;1
262 209  GOTO/253                  ?0        ?243                 ?170                	;0
263 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   171:'intval'        	;1	<<260
264 211  FETCH_DIM_FUNC_ARG/93     $94=      16?0                 173:'member_group_id'	;1
265 211  SEND_VAR_EX/66            ?80       $94                  ?1                  	;0
266 211  DO_FCALL_BY_NAME/131      $95=      ?0                   ?0                  	;0
267 211  INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'intval'        	;1
268 211  FETCH_DIM_FUNC_ARG/93     $96=      16?7                 176:'group_id'      	;1
269 211  SEND_VAR_EX/66            ?80       $96                  ?1                  	;0
270 211  DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
271 211  IS_EQUAL/17               #98=      $95                  $97                 	;0
272 211  BOOL_NOT/13               #99=      #98                  ?0                  	;0
273 211  JMPZ/43                   ?0        #99                  ?276                	;0	>>276
274 212  NOP/0                     ?0        ?0                   ?0                  	;1
275 212  GOTO/253                  ?0        ?277                 ?177                	;0
276 214  ECHO/40                   ?0        178:'selected '      ?0                  	;0	<<273
277 216  NOP/0                     ?0        ?0                   ?0                  	;1
278 216  GOTO/253                  ?0        ?243                 ?179                	;0
279 217  JMP/42                    ?0        ?240                 ?0                  	;0	>>240
280 217  FE_FREE/127               ?0        $88                  ?0                  	;0	<<239
281 220  GOTO/253                  ?0        ?294                 ?180                	;0
282 223  ECHO/40                   ?0        181:' User</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
283 224  ISSET_ISEMPTY_CV/197      #100=     16?0                 ?0                  	;33554432
284 224  BOOL_NOT/13               #101=     #100                 ?0                  	;0
285 224  JMPZ/43                   ?0        #101                 ?287                	;0	>>287
286 225  GOTO/253                  ?0        ?50                  ?182                	;0
287 227  ECHO/40                   ?0        183:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<285
288 228  INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'intval'        	;1
289 228  FETCH_DIM_FUNC_ARG/93     $102=     16?0                 186:'id'            	;1
290 228  SEND_VAR_EX/66            ?80       $102                 ?1                  	;0
291 228  DO_FCALL_BY_NAME/131      $103=     ?0                   ?0                  	;0
292 228  ECHO/40                   ?0        $103                 ?0                  	;0
293 229  GOTO/253                  ?0        ?49                  ?187                	;0
294 231  ECHO/40                   ?0        188:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="owner_id">Owner</label>
													<div class="col-md-6">
														<select name="owner_id" id="owner_id" class="form-control select2" data-toggle="select2">
                                                            ' ?0                  	;0
295 232  ISSET_ISEMPTY_DIM_OBJ/115 #104=     16?0                 189:'owner_id'      	;33554432
296 232  JMPZ_EX/46                #104=     #104                 ?306                	;0	>>306
297 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'bA89228dC958Ce05'	;1
298 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   192:'intval'        	;1
299 232  FETCH_DIM_FUNC_ARG/93     $105=     16?0                 194:'owner_id'      	;1
300 232  SEND_VAR_EX/66            ?80       $105                 ?1                  	;0
301 232  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
302 232  SEND_VAR_NO_REF_EX/50     ?80       $106                 ?1                  	;0
303 232  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
304 232  ASSIGN/38                 $108=     16?1                 $107                	;0
305 232  BOOL/52                   #104=     $108                 ?0                  	;0
306 232  JMPZ/43                   ?0        #104                 ?308                	;0	>>308	<<296
307 233  GOTO/253                  ?0        ?208                 ?195                	;0
308 235  ECHO/40                   ?0        196:'                                                            <option value="' ?0                  	;0	<<306
309 236  FETCH_DIM_R/81            $109=     16?6                 197:'id'            	;0
310 236  ECHO/40                   ?0        $109                 ?0                  	;0
311 237  ECHO/40                   ?0        198:'">'             ?0                  	;0
312 238  GOTO/253                  ?0        ?204                 ?199                	;0
313 241  ECHO/40                   ?0        200:' value="'       ?0                  	;0
314 242  ISSET_ISEMPTY_CV/197      #110=     16?0                 ?0                  	;33554432
315 242  JMPZ/43                   ?0        #110                 ?318                	;0	>>318
316 242  QM_ASSIGN/22              #111=     201:''               ?0                  	;0
317 242  JMP/42                    ?0        ?329                 ?0                  	;0	>>329
318 242  INIT_FCALL_BY_NAME/59     ?0        ?0                   202:'Fc34407B2842461B'	;1	<<315
319 242  FETCH_DIM_R/81            $112=     16?8                 204:'minimum_password_length'	;0
320 242  IS_SMALLER/19             #113=     205:10               $112                	;0
321 242  JMPZ/43                   ?0        #113                 ?325                	;0	>>325
322 242  FETCH_DIM_R/81            $114=     16?8                 206:'minimum_password_length'	;0
323 242  QM_ASSIGN/22              #115=     $114                 ?0                  	;0
324 242  JMP/42                    ?0        ?326                 ?0                  	;0	>>326
325 242  QM_ASSIGN/22              #115=     207:10               ?0                  	;0	<<321
326 242  SEND_VAL_EX/116           ?80       #115                 ?1                  	;0	<<324
327 242  DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
328 242  QM_ASSIGN/22              #111=     $116                 ?0                  	;0
329 242  ECHO/40                   ?0        #111                 ?0                  	;0	<<317
330 243  ECHO/40                   ?0        208:'" data-indicator="pwindicator">
                                                        <div id="pwindicator">
                                                            <div class="bar"></div>
                                                            <div class="label"></div>
                                                        </div>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="email">Email Address</label>
													<div class="col-md-8">
														<input type="email" id="email" class="form-control" name="email" value="' ?0                  	;0
331 244  ISSET_ISEMPTY_CV/197      #117=     16?0                 ?0                  	;33554432
332 244  BOOL_NOT/13               #118=     #117                 ?0                  	;0
333 244  JMPZ/43                   ?0        #118                 ?335                	;0	>>335
334 245  GOTO/253                  ?0        ?236                 ?209                	;0
335 247  GOTO/253                  ?0        ?231                 ?210                	;0	<<333
336 249  ECHO/40                   ?0        211:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <a href="javascript: void(0);" onClick="clearOwner();" class="btn btn-warning" style="width: 100%">Clear</a>
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="credits">Credits</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="credits" onkeypress="return isNumberKey(event)" name="credits" value="' ?0                  	;0
337 250  ISSET_ISEMPTY_CV/197      #119=     16?0                 ?0                  	;33554432
338 250  JMPZ/43                   ?0        #119                 ?340                	;0	>>340
339 251  GOTO/253                  ?0        ?342                 ?212                	;0
340 253  ECHO/40                   ?0        213:'0'              ?0                  	;0	<<338
341 254  GOTO/253                  ?0        ?348                 ?214                	;0
342 256  GOTO/253                  ?0        ?343                 ?215                	;0
343 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'intval'        	;1
344 258  FETCH_DIM_FUNC_ARG/93     $120=     16?0                 218:'credits'       	;1
345 258  SEND_VAR_EX/66            ?80       $120                 ?1                  	;0
346 258  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
347 258  ECHO/40                   ?0        $121                 ?0                  	;0
348 260  ECHO/40                   ?0        219:'">
													</div>
                                                    <div class="col-md-6">
														<input type="text" class="form-control" id="credits_reason" name="credits_reason" placeholder="Reason for Adjustment..." value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_dns">Reseller DNS</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="reseller_dns" name="reseller_dns" value="' ?0                  	;0
349 261  ISSET_ISEMPTY_CV/197      #122=     16?0                 ?0                  	;33554432
350 261  BOOL_NOT/13               #123=     #122                 ?0                  	;0
351 261  JMPZ/43                   ?0        #123                 ?353                	;0	>>353
352 262  GOTO/253                  ?0        ?359                 ?220                	;0
353 264  INIT_FCALL_BY_NAME/59     ?0        ?0                   221:'htmlspecialchars'	;1	<<351
354 264  FETCH_DIM_FUNC_ARG/93     $124=     16?0                 223:'reseller_dns'  	;1
355 264  SEND_VAR_EX/66            ?80       $124                 ?1                  	;0
356 264  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
357 264  ECHO/40                   ?0        $125                 ?0                  	;0
358 265  GOTO/253                  ?0        ?359                 ?224                	;0
359 268  ECHO/40                   ?0        225:'">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="notes">Notes</label>
													<div class="col-md-8">
														<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">' ?0                  	;0
360 269  ISSET_ISEMPTY_CV/197      #126=     16?0                 ?0                  	;33554432
361 269  BOOL_NOT/13               #127=     #126                 ?0                  	;0
362 269  JMPZ/43                   ?0        #127                 ?364                	;0	>>364
363 270  GOTO/253                  ?0        ?366                 ?226                	;0
364 272  FETCH_DIM_R/81            $128=     16?0                 227:'notes'         	;0	<<362
365 272  ECHO/40                   ?0        $128                 ?0                  	;0
366 274  GOTO/253                  ?0        ?14                  ?228                	;0
367 276  INCLUDE_OR_EVAL/73        ?120      229:'footer.php'     ?0                  	;2
368 277  NOP/0                     ?0        230:1                ?0                  	;4294967295
*/

?>