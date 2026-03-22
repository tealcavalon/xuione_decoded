<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?183                 ?0                  	;0	>>183
1   6    FETCH_DIM_R/81            $6=       16?0                 1:'edit'            	;0
2   6    ECHO/40                   ?0        $6                   ?0                  	;0
3   8    ECHO/40                   ?0        2:' Provider</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
4   9    ISSET_ISEMPTY_CV/197      #7=       16?1                 ?0                  	;33554432
5   9    BOOL_NOT/13               #8=       #7                   ?0                  	;0
6   9    JMPZ/43                   ?0        #8                   ?8                  	;0	>>8
7   10   GOTO/253                  ?0        ?13                  ?3                  	;0
8   12   GOTO/253                  ?0        ?9                   ?4                  	;0	<<6
9   14   ECHO/40                   ?0        5:'							<input type="hidden" name="edit" value="' ?0                  	;0
10  15   FETCH_DIM_R/81            $9=       16?1                 6:'id'              	;0
11  15   ECHO/40                   ?0        $9                   ?0                  	;0
12  16   ECHO/40                   ?0        7:'" />
                            <input class=\'copyfrom\' tabindex=\'-1\' aria-hidden=\'true\' id="stream_url" value="" style="position: absolute; left: -9999px;">
							' ?0                  	;0
13  18   ECHO/40                   ?0        8:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#category-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
14  19   GOTO/253                  ?0        ?163                 ?9                  	;0
15  21   FETCH_DIM_R/81            $10=      16?1                 10:'legacy'         	;0
16  21   IS_EQUAL/17               #11=      $10                  11:1                	;0
17  21   BOOL_NOT/13               #12=      #11                  ?0                  	;0
18  21   JMPZ/43                   ?0        #12                  ?20                 	;0	>>20
19  22   GOTO/253                  ?0        ?21                  ?12                 	;0
20  24   ECHO/40                   ?0        13:'checked '        ?0                  	;0	<<18
21  27   ECHO/40                   ?0        14:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="hls">Use HLS</label>
													<div class="col-md-3">
														<input name="hls" id="hls" type="checkbox" ' ?0                  	;0
22  28   GOTO/253                  ?0        ?152                 ?15                 	;0
23  30   ISSET_ISEMPTY_CV/197      #13=      16?1                 ?0                  	;33554432
24  30   BOOL_NOT/13               #14=      #13                  ?0                  	;0
25  30   JMPZ/43                   ?0        #14                  ?27                 	;0	>>27
26  31   GOTO/253                  ?0        ?32                  ?16                 	;0
27  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'htmlspecialchars'	;1	<<25
28  33   FETCH_DIM_FUNC_ARG/93     $15=      16?1                 19:'ip'             	;1
29  33   SEND_VAR_EX/66            ?80       $15                  ?1                  	;0
30  33   DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
31  33   ECHO/40                   ?0        $16                  ?0                  	;0
32  35   ECHO/40                   ?0        20:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-3 col-form-label" for="port">Broadcast Port</label>
                                                    <div class="col-md-3">
														<input type="text" class="form-control text-center" id="port" name="port" value="' ?0                  	;0
33  36   ISSET_ISEMPTY_CV/197      #17=      16?1                 ?0                  	;33554432
34  36   JMPZ/43                   ?0        #17                  ?36                 	;0	>>36
35  37   GOTO/253                  ?0        ?115                 ?21                 	;0
36  39   GOTO/253                  ?0        ?113                 ?22                 	;0	<<34
37  41   FETCH_DIM_R/81            $18=      16?0                 23:'edit'           	;0
38  41   ECHO/40                   ?0        $18                  ?0                  	;0
39  43   ECHO/40                   ?0        24:'" />
											</li>
										</ul>
									</div>
                                    ' ?0                  	;0
40  44   ISSET_ISEMPTY_CV/197      #19=      16?1                 ?0                  	;33554432
41  44   BOOL_NOT/13               #20=      #19                  ?0                  	;0
42  44   JMPZ/43                   ?0        #20                  ?44                 	;0	>>44
43  45   GOTO/253                  ?0        ?288                 ?25                 	;0
44  47   ECHO/40                   ?0        26:'									<div class="tab-pane" id="view-streams">
										<div class="row">
											<div class="col-12" style="overflow-x:auto;">
												<table id="datatable-streams" class="table table-striped table-borderless dt-responsive nowrap">
													<thead>
														<tr>
															<th class="text-center">ID</th>
															<th>Stream Name</th>
															<th>Categories</th>
                                                            <th class="text-center">Modified</th>
                                                            <th class="text-center">Actions</th>
														</tr>
													</thead>
													<tbody>
														' ?0                  	;0	<<42
45  48   GOTO/253                  ?0        ?290                 ?27                 	;0
46  50   ECHO/40                   ?0        28:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="username">Username</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="username" name="username" value="' ?0                  	;0
47  51   ISSET_ISEMPTY_CV/197      #21=      16?1                 ?0                  	;33554432
48  51   BOOL_NOT/13               #22=      #21                  ?0                  	;0
49  51   JMPZ/43                   ?0        #22                  ?51                 	;0	>>51
50  52   GOTO/253                  ?0        ?56                  ?29                 	;0
51  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'htmlspecialchars'	;1	<<49
52  54   FETCH_DIM_FUNC_ARG/93     $23=      16?1                 32:'username'       	;1
53  54   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
54  54   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
55  54   ECHO/40                   ?0        $24                  ?0                  	;0
56  56   ECHO/40                   ?0        33:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-3 col-form-label" for="password">Password</label>
                                                    <div class="col-md-3">
														<input type="text" class="form-control" id="password" name="password" value="' ?0                  	;0
57  57   GOTO/253                  ?0        ?138                 ?34                 	;0
58  59   ECHO/40                   ?0        35:'checked '        ?0                  	;0
59  62   ECHO/40                   ?0        36:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="legacy">Legacy XC</label>
													<div class="col-md-3">
														<input name="legacy" id="legacy" type="checkbox" ' ?0                  	;0
60  63   ISSET_ISEMPTY_CV/197      #25=      16?1                 ?0                  	;33554432
61  63   BOOL_NOT/13               #26=      #25                  ?0                  	;0
62  63   JMPZ/43                   ?0        #26                  ?64                 	;0	>>64
63  64   GOTO/253                  ?0        ?21                  ?37                 	;0
64  66   GOTO/253                  ?0        ?15                  ?38                 	;0	<<62
65  68   ECHO/40                   ?0        39:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
66  69   FETCH_IS/89               $27=      40:'_SERVER'         ?0                  	;0
67  69   ISSET_ISEMPTY_DIM_OBJ/115 #28=      $27                  41:'HTTP_X_REQUESTED_WITH'	;16777216
68  69   BOOL_NOT/13               #29=      #28                  ?0                  	;0
69  69   JMPZ_EX/46                #29=      #29                  ?77                 	;0	>>77
70  69   INIT_FCALL_BY_NAME/59     ?0        ?0                   42:'strtolower'     	;1
71  69   FETCH_FUNC_ARG/92         $30=      44:'_SERVER'         ?0                  	;1
72  69   FETCH_DIM_FUNC_ARG/93     $31=      $30                  45:'HTTP_X_REQUESTED_WITH'	;1
73  69   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
74  69   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
75  69   IS_EQUAL/17               #33=      $32                  46:'xmlhttprequest' 	;0
76  69   BOOL/52                   #29=      #33                  ?0                  	;0
77  69   BOOL_NOT/13               #34=      #29                  ?0                  	;0	<<69
78  69   JMPZ/43                   ?0        #34                  ?80                 	;0	>>80
79  70   GOTO/253                  ?0        ?81                  ?47                 	;0
80  72   ECHO/40                   ?0        48:' style="display: none;"' ?0                  	;0	<<78
81  74   ECHO/40                   ?0        49:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
82  75   GOTO/253                  ?0        ?129                 ?50                 	;0
83  77   ECHO/40                   ?0        51:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="category-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="name">Provider Name</label>
													<div class="col-md-9">
														<input type="text" class="form-control" id="name" name="name" value="' ?0                  	;0
84  78   ISSET_ISEMPTY_CV/197      #35=      16?1                 ?0                  	;33554432
85  78   BOOL_NOT/13               #36=      #35                  ?0                  	;0
86  78   JMPZ/43                   ?0        #36                  ?88                 	;0	>>88
87  79   GOTO/253                  ?0        ?93                  ?52                 	;0
88  81   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'htmlspecialchars'	;1	<<86
89  81   FETCH_DIM_FUNC_ARG/93     $37=      16?1                 55:'name'           	;1
90  81   SEND_VAR_EX/66            ?80       $37                  ?1                  	;0
91  81   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
92  81   ECHO/40                   ?0        $38                  ?0                  	;0
93  83   ECHO/40                   ?0        56:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-3 col-form-label" for="ip">Server IP / Domain</label>
													<div class="col-md-3">
														<input type="text" class="form-control" id="ip" name="ip" value="' ?0                  	;0
94  84   GOTO/253                  ?0        ?23                  ?57                 	;0
95  86   FETCH_STATIC_PROP_IS/176  $39=      58:'rRequest'        59:'XUI'            	;0
96  86   ISSET_ISEMPTY_DIM_OBJ/115 #40=      $39                  61:'id'             	;33554432
97  86   JMPZ_EX/46                #40=      #40                  ?106                	;0	>>106
98  86   INIT_FCALL_BY_NAME/59     ?0        ?0                   62:'getStreamProvider'	;1
99  86   FETCH_STATIC_PROP_FUNC_ARG/177 $41=      64:'rRequest'        65:'XUI'            	;1
100 86   FETCH_DIM_FUNC_ARG/93     $42=      $41                  67:'id'             	;1
101 86   SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
102 86   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
103 86   ASSIGN/38                 $44=      16?1                 $43                 	;0
104 86   BOOL_NOT/13               #45=      $44                  ?0                  	;0
105 86   BOOL/52                   #40=      #45                  ?0                  	;0
106 86   BOOL_NOT/13               #46=      #40                  ?0                  	;0	<<97
107 86   JMPZ/43                   ?0        #46                  ?109                	;0	>>109
108 87   GOTO/253                  ?0        ?110                 ?68                 	;0
109 89   EXIT/79                   ?0        ?0                   ?0                  	;0	<<107
110 91   ASSIGN/38                 ?41       16?2                 69:'Stream Provider'	;0
111 92   INCLUDE_OR_EVAL/73        ?42       70:'header.php'      ?0                  	;2
112 93   GOTO/253                  ?0        ?65                  ?71                 	;0
113 95   ECHO/40                   ?0        72:'80'              ?0                  	;0
114 96   GOTO/253                  ?0        ?120                 ?73                 	;0
115 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'htmlspecialchars'	;1
116 98   FETCH_DIM_FUNC_ARG/93     $49=      16?1                 76:'port'           	;1
117 98   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
118 98   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
119 98   ECHO/40                   ?0        $50                  ?0                  	;0
120 100  GOTO/253                  ?0        ?46                  ?77                 	;0
121 102  ECHO/40                   ?0        78:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_provider" type="submit" class="btn btn-primary" value="' ?0                  	;0
122 103  ISSET_ISEMPTY_CV/197      #51=      16?1                 ?0                  	;33554432
123 103  JMPZ/43                   ?0        #51                  ?125                	;0	>>125
124 104  GOTO/253                  ?0        ?128                 ?79                 	;0
125 106  FETCH_DIM_R/81            $52=      16?0                 80:'add'            	;0	<<123
126 106  ECHO/40                   ?0        $52                  ?0                  	;0
127 107  GOTO/253                  ?0        ?39                  ?81                 	;0
128 109  GOTO/253                  ?0        ?37                  ?82                 	;0
129 111  INCLUDE_OR_EVAL/73        ?47       83:'topbar.php'      ?0                  	;2
130 112  ECHO/40                   ?0        84:'					</div>
					<h4 class="page-title">' ?0                  	;0
131 113  ISSET_ISEMPTY_CV/197      #54=      16?1                 ?0                  	;33554432
132 113  JMPZ/43                   ?0        #54                  ?134                	;0	>>134
133 114  GOTO/253                  ?0        ?1                   ?85                 	;0
134 116  FETCH_DIM_R/81            $55=      16?0                 86:'add'            	;0	<<132
135 116  ECHO/40                   ?0        $55                  ?0                  	;0
136 117  GOTO/253                  ?0        ?3                   ?87                 	;0
137 118  GOTO/253                  ?0        ?1                   ?88                 	;0
138 120  ISSET_ISEMPTY_CV/197      #56=      16?1                 ?0                  	;33554432
139 120  BOOL_NOT/13               #57=      #56                  ?0                  	;0
140 120  JMPZ/43                   ?0        #57                  ?142                	;0	>>142
141 121  GOTO/253                  ?0        ?147                 ?89                 	;0
142 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'htmlspecialchars'	;1	<<140
143 123  FETCH_DIM_FUNC_ARG/93     $58=      16?1                 92:'password'       	;1
144 123  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
145 123  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
146 123  ECHO/40                   ?0        $59                  ?0                  	;0
147 125  ECHO/40                   ?0        93:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="enabled">Enabled</label>
													<div class="col-md-3">
														<input name="enabled" id="enabled" type="checkbox" ' ?0                  	;0
148 126  ISSET_ISEMPTY_CV/197      #60=      16?1                 ?0                  	;33554432
149 126  JMPZ/43                   ?0        #60                  ?151                	;0	>>151
150 127  GOTO/253                  ?0        ?194                 ?94                 	;0
151 129  GOTO/253                  ?0        ?192                 ?95                 	;0	<<149
152 131  ISSET_ISEMPTY_CV/197      #61=      16?1                 ?0                  	;33554432
153 131  BOOL_NOT/13               #62=      #61                  ?0                  	;0
154 131  JMPZ/43                   ?0        #62                  ?156                	;0	>>156
155 132  GOTO/253                  ?0        ?162                 ?96                 	;0
156 134  FETCH_DIM_R/81            $63=      16?1                 97:'hls'            	;0	<<154
157 134  IS_EQUAL/17               #64=      $63                  98:1                	;0
158 134  BOOL_NOT/13               #65=      #64                  ?0                  	;0
159 134  JMPZ/43                   ?0        #65                  ?161                	;0	>>161
160 135  GOTO/253                  ?0        ?162                 ?99                 	;0
161 137  ECHO/40                   ?0        100:'checked '       ?0                  	;0	<<159
162 140  GOTO/253                  ?0        ?121                 ?101                	;0
163 142  FETCH_DIM_R/81            $66=      16?0                 102:'details'       	;0
164 142  ECHO/40                   ?0        $66                  ?0                  	;0
165 143  ECHO/40                   ?0        103:'</span>
										</a>
									</li>
									' ?0                  	;0
166 144  ISSET_ISEMPTY_CV/197      #67=      16?1                 ?0                  	;33554432
167 144  BOOL_NOT/13               #68=      #67                  ?0                  	;0
168 144  JMPZ/43                   ?0        #68                  ?170                	;0	>>170
169 145  GOTO/253                  ?0        ?171                 ?104                	;0
170 147  ECHO/40                   ?0        105:'									<li class="nav-item">
										<a href="#view-streams" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-play mr-1"></i>
											<span class="d-none d-sm-inline">Available Streams</span>
										</a>
									</li>
                                    <li class="nav-item">
										<a href="#view-movies" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-movie mr-1"></i>
											<span class="d-none d-sm-inline">Available Movies</span>
										</a>
									</li>
									' ?0                  	;0	<<168
171 149  GOTO/253                  ?0        ?83                  ?106                	;0
172 153  ECHO/40                   ?0        107:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-3 col-form-label" for="ssl">SSL</label>
													<div class="col-md-3">
														<input name="ssl" id="ssl" type="checkbox" ' ?0                  	;0
173 154  ISSET_ISEMPTY_CV/197      #69=      16?1                 ?0                  	;33554432
174 154  BOOL_NOT/13               #70=      #69                  ?0                  	;0
175 154  JMPZ/43                   ?0        #70                  ?177                	;0	>>177
176 155  GOTO/253                  ?0        ?59                  ?108                	;0
177 157  FETCH_DIM_R/81            $71=      16?1                 109:'ssl'           	;0	<<175
178 157  IS_EQUAL/17               #72=      $71                  110:1               	;0
179 157  BOOL_NOT/13               #73=      #72                  ?0                  	;0
180 157  JMPZ/43                   ?0        #73                  ?182                	;0	>>182
181 158  GOTO/253                  ?0        ?59                  ?111                	;0
182 160  GOTO/253                  ?0        ?58                  ?112                	;0	<<180
183 162  INCLUDE_OR_EVAL/73        ?68       113:'session.php'    ?0                  	;2	<<0
184 163  INCLUDE_OR_EVAL/73        ?69       114:'functions.php'  ?0                  	;2
185 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'E6D500E19634D513'	;0
186 164  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
187 164  JMPZ/43                   ?0        $76                  ?189                	;0	>>189
188 165  GOTO/253                  ?0        ?191                 ?117                	;0
189 167  INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'e72f42a93714bA87'	;0	<<187
190 167  DO_FCALL_BY_NAME/131      ?71       ?0                   ?0                  	;0
191 169  GOTO/253                  ?0        ?95                  ?120                	;0
192 171  ECHO/40                   ?0        121:'checked '       ?0                  	;0
193 172  GOTO/253                  ?0        ?172                 ?122                	;0
194 174  FETCH_DIM_R/81            $78=      16?1                 123:'enabled'       	;0
195 174  IS_EQUAL/17               #79=      $78                  124:1               	;0
196 174  BOOL_NOT/13               #80=      #79                  ?0                  	;0
197 174  JMPZ/43                   ?0        #80                  ?199                	;0	>>199
198 175  GOTO/253                  ?0        ?172                 ?125                	;0
199 177  ECHO/40                   ?0        126:'checked '       ?0                  	;0	<<197
200 178  GOTO/253                  ?0        ?172                 ?127                	;0
201 180  INIT_METHOD_CALL/112      ?0        16?3                 128:'get_rows'      	;0
202 180  DO_FCALL/60               $81=      ?0                   ?0                  	;0
203 180  FE_RESET_R/77             $82=      $81                  ?286                	;0
204 180  FE_FETCH_R/78             ?0        $82                  16?4                	;286	>>286	<<285
205 181  NOP/0                     ?0        ?0                   ?0                  	;1
206 181  GOTO/253                  ?0        ?207                 ?130                	;0
207 183  FETCH_DIM_R/81            $83=      16?4                 131:'ssl'           	;0
208 183  JMPZ/43                   ?0        $83                  ?211                	;0	>>211
209 183  QM_ASSIGN/22              #84=      132:'https'          ?0                  	;0
210 183  JMP/42                    ?0        ?212                 ?0                  	;0	>>212
211 183  QM_ASSIGN/22              #84=      133:'http'           ?0                  	;0	<<208
212 183  CONCAT/8                  #85=      #84                  134:'://'           	;0	<<210
213 183  FETCH_DIM_R/81            $86=      16?1                 135:'ip'            	;0
214 183  CONCAT/8                  #87=      #85                  $86                 	;0
215 183  CONCAT/8                  #88=      #87                  136:':'             	;0
216 183  FETCH_DIM_R/81            $89=      16?1                 137:'port'          	;0
217 183  CONCAT/8                  #90=      #88                  $89                 	;0
218 183  CONCAT/8                  #91=      #90                  138:'/movie/'       	;0
219 183  FETCH_DIM_R/81            $92=      16?1                 139:'username'      	;0
220 183  CONCAT/8                  #93=      #91                  $92                 	;0
221 183  CONCAT/8                  #94=      #93                  140:'/'             	;0
222 183  FETCH_DIM_R/81            $95=      16?1                 141:'password'      	;0
223 183  CONCAT/8                  #96=      #94                  $95                 	;0
224 183  CONCAT/8                  #97=      #96                  142:'/'             	;0
225 183  FETCH_DIM_R/81            $98=      16?4                 143:'stream_id'     	;0
226 183  CONCAT/8                  #99=      #97                  $98                 	;0
227 183  CONCAT/8                  #100=     #99                  144:'.'             	;0
228 183  FETCH_DIM_R/81            $101=     16?4                 145:'channel_id'    	;0
229 183  CONCAT/8                  #102=     #100                 $101                	;0
230 183  ASSIGN/38                 ?97       16?5                 #102                	;0
231 184  ECHO/40                   ?0        146:'														<tr>    
															<td class="text-center">' ?0                  	;0
232 185  FETCH_DIM_R/81            $104=     16?4                 147:'stream_id'     	;0
233 185  ECHO/40                   ?0        $104                 ?0                  	;0
234 186  ECHO/40                   ?0        148:'</td>
															<td>' ?0                  	;0
235 187  FETCH_DIM_R/81            $105=     16?4                 149:'stream_display_name'	;0
236 187  ECHO/40                   ?0        $105                 ?0                  	;0
237 188  NOP/0                     ?0        ?0                   ?0                  	;1
238 188  GOTO/253                  ?0        ?239                 ?150                	;0
239 190  ECHO/40                   ?0        151:'</td>
															<td>' ?0                  	;0
240 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'implode'       	;2
241 191  SEND_VAL_EX/116           ?80       154:', '             ?1                  	;0
242 191  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'json_decode'   	;2
243 191  FETCH_DIM_FUNC_ARG/93     $106=     16?4                 157:'category_array'	;1
244 191  SEND_VAR_EX/66            ?80       $106                 ?1                  	;0
245 191  SEND_VAL_EX/116           ?96       158:true             ?2                  	;0
246 191  DO_FCALL_BY_NAME/131      $107=     ?0                   ?0                  	;0
247 191  SEND_VAR_NO_REF_EX/50     ?96       $107                 ?2                  	;0
248 191  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
249 191  ECHO/40                   ?0        $108                 ?0                  	;0
250 192  ECHO/40                   ?0        159:'</td>
                                                            <td class="text-center">' ?0                  	;0
251 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'date'          	;2
252 193  SEND_VAL_EX/116           ?80       162:'Y-m-d'          ?1                  	;0
253 193  FETCH_DIM_FUNC_ARG/93     $109=     16?4                 163:'modified'      	;2
254 193  SEND_VAR_EX/66            ?96       $109                 ?2                  	;0
255 193  DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
256 193  CONCAT/8                  #111=     $110                 164:'<br/><small class=\'text-secondary\'>'	;0
257 193  INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'date'          	;2
258 193  SEND_VAL_EX/116           ?80       167:'H:i:s'          ?1                  	;0
259 193  FETCH_DIM_FUNC_ARG/93     $112=     16?4                 168:'modified'      	;2
260 193  SEND_VAR_EX/66            ?96       $112                 ?2                  	;0
261 193  DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
262 193  CONCAT/8                  #114=     #111                 $113                	;0
263 193  CONCAT/8                  #115=     #114                 169:'</small>'      	;0
264 193  ECHO/40                   ?0        #115                 ?0                  	;0
265 194  ECHO/40                   ?0        170:'</td>
                                                            <td class="text-center">
                                                                <a href="movie?title=' ?0                  	;0
266 195  NOP/0                     ?0        ?0                   ?0                  	;1
267 195  GOTO/253                  ?0        ?268                 ?171                	;0
268 197  INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'urlencode'     	;1
269 197  FETCH_DIM_FUNC_ARG/93     $116=     16?4                 174:'stream_display_name'	;1
270 197  SEND_VAR_EX/66            ?80       $116                 ?1                  	;0
271 197  DO_FCALL_BY_NAME/131      $117=     ?0                   ?0                  	;0
272 197  ECHO/40                   ?0        $117                 ?0                  	;0
273 198  ECHO/40                   ?0        175:'&path='         ?0                  	;0
274 199  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'urlencode'     	;1
275 199  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
276 199  DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
277 199  ECHO/40                   ?0        $118                 ?0                  	;0
278 200  ECHO/40                   ?0        178:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-plus"></i></button></a>
                                                                <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="Copy URL" onClick="copyURL(\'' ?0                  	;0
279 201  ECHO/40                   ?0        16?5                 ?0                  	;0
280 202  NOP/0                     ?0        ?0                   ?0                  	;1
281 202  GOTO/253                  ?0        ?282                 ?179                	;0
282 204  ECHO/40                   ?0        180:'\');"><i class="mdi mdi-clipboard"></i></button>
                                                            </td>
														</tr>
														' ?0                  	;0
283 206  NOP/0                     ?0        ?0                   ?0                  	;1
284 206  GOTO/253                  ?0        ?285                 ?181                	;0
285 207  JMP/42                    ?0        ?204                 ?0                  	;0	>>204
286 207  FE_FREE/127               ?0        $82                  ?0                  	;0	<<203
287 210  ECHO/40                   ?0        182:'													</tbody>
												</table>
											</div>
										</div>
									</div>
                                    ' ?0                  	;0
288 212  ECHO/40                   ?0        183:'								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
289 213  GOTO/253                  ?0        ?402                 ?184                	;0
290 215  INIT_METHOD_CALL/112      ?0        16?3                 185:'query'         	;2
291 215  SEND_VAL_EX/116           ?80       187:'SELECT `stream_id`, `category_array`, `stream_display_name`, `modified`, `stream_icon` FROM `providers_streams` WHERE `provider_id` = ? AND `type` = \'live\' ORDER BY `modified` DESC, `stream_id` ASC;' ?1                  	;0
292 215  FETCH_DIM_FUNC_ARG/93     $119=     16?1                 188:'id'            	;2
293 215  SEND_VAR_EX/66            ?96       $119                 ?2                  	;0
294 215  DO_FCALL/60               ?114      ?0                   ?0                  	;0
295 216  INIT_METHOD_CALL/112      ?0        16?3                 189:'get_rows'      	;0
296 216  DO_FCALL/60               $121=     ?0                   ?0                  	;0
297 216  FE_RESET_R/77             $122=     $121                 ?394                	;0
298 216  FE_FETCH_R/78             ?0        $122                 16?4                	;394	>>394	<<393
299 217  NOP/0                     ?0        ?0                   ?0                  	;1
300 217  GOTO/253                  ?0        ?353                 ?191                	;0
301 219  ECHO/40                   ?0        192:'"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-plus"></i></button></a>
                                                                <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="Copy URL" onClick="copyURL(\'' ?0                  	;0
302 220  ECHO/40                   ?0        16?5                 ?0                  	;0
303 221  ECHO/40                   ?0        193:'\');"><i class="mdi mdi-clipboard"></i></button>
                                                            </td>
														</tr>
														' ?0                  	;0
304 223  NOP/0                     ?0        ?0                   ?0                  	;1
305 223  GOTO/253                  ?0        ?393                 ?194                	;0
306 225  ECHO/40                   ?0        195:'</td>
															<td>' ?0                  	;0
307 226  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'implode'       	;2
308 226  SEND_VAL_EX/116           ?80       198:', '             ?1                  	;0
309 226  INIT_FCALL_BY_NAME/59     ?0        ?0                   199:'json_decode'   	;2
310 226  FETCH_DIM_FUNC_ARG/93     $123=     16?4                 201:'category_array'	;1
311 226  SEND_VAR_EX/66            ?80       $123                 ?1                  	;0
312 226  SEND_VAL_EX/116           ?96       202:true             ?2                  	;0
313 226  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
314 226  SEND_VAR_NO_REF_EX/50     ?96       $124                 ?2                  	;0
315 226  DO_FCALL_BY_NAME/131      $125=     ?0                   ?0                  	;0
316 226  ECHO/40                   ?0        $125                 ?0                  	;0
317 227  ECHO/40                   ?0        203:'</td>
                                                            <td class="text-center">' ?0                  	;0
318 228  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'date'          	;2
319 228  SEND_VAL_EX/116           ?80       206:'Y-m-d'          ?1                  	;0
320 228  FETCH_DIM_FUNC_ARG/93     $126=     16?4                 207:'modified'      	;2
321 228  SEND_VAR_EX/66            ?96       $126                 ?2                  	;0
322 228  DO_FCALL_BY_NAME/131      $127=     ?0                   ?0                  	;0
323 228  CONCAT/8                  #128=     $127                 208:'<br/><small class=\'text-secondary\'>'	;0
324 228  INIT_FCALL_BY_NAME/59     ?0        ?0                   209:'date'          	;2
325 228  SEND_VAL_EX/116           ?80       211:'H:i:s'          ?1                  	;0
326 228  FETCH_DIM_FUNC_ARG/93     $129=     16?4                 212:'modified'      	;2
327 228  SEND_VAR_EX/66            ?96       $129                 ?2                  	;0
328 228  DO_FCALL_BY_NAME/131      $130=     ?0                   ?0                  	;0
329 228  CONCAT/8                  #131=     #128                 $130                	;0
330 228  CONCAT/8                  #132=     #131                 213:'</small>'      	;0
331 228  ECHO/40                   ?0        #132                 ?0                  	;0
332 229  ECHO/40                   ?0        214:'</td>
                                                            <td class="text-center">
                                                                <a href="stream?title=' ?0                  	;0
333 230  NOP/0                     ?0        ?0                   ?0                  	;1
334 230  GOTO/253                  ?0        ?335                 ?215                	;0
335 232  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'urlencode'     	;1
336 232  FETCH_DIM_FUNC_ARG/93     $133=     16?4                 218:'stream_display_name'	;1
337 232  SEND_VAR_EX/66            ?80       $133                 ?1                  	;0
338 232  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
339 232  ECHO/40                   ?0        $134                 ?0                  	;0
340 233  ECHO/40                   ?0        219:'&url='          ?0                  	;0
341 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   220:'urlencode'     	;1
342 234  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
343 234  DO_FCALL_BY_NAME/131      $135=     ?0                   ?0                  	;0
344 234  ECHO/40                   ?0        $135                 ?0                  	;0
345 235  ECHO/40                   ?0        222:'&icon='         ?0                  	;0
346 236  INIT_FCALL_BY_NAME/59     ?0        ?0                   223:'urlencode'     	;1
347 236  FETCH_DIM_FUNC_ARG/93     $136=     16?4                 225:'stream_icon'   	;1
348 236  SEND_VAR_EX/66            ?80       $136                 ?1                  	;0
349 236  DO_FCALL_BY_NAME/131      $137=     ?0                   ?0                  	;0
350 236  ECHO/40                   ?0        $137                 ?0                  	;0
351 237  NOP/0                     ?0        ?0                   ?0                  	;1
352 237  GOTO/253                  ?0        ?301                 ?226                	;0
353 239  FETCH_DIM_R/81            $138=     16?1                 227:'ssl'           	;0
354 239  JMPZ/43                   ?0        $138                 ?357                	;0	>>357
355 239  QM_ASSIGN/22              #139=     228:'https'          ?0                  	;0
356 239  JMP/42                    ?0        ?358                 ?0                  	;0	>>358
357 239  QM_ASSIGN/22              #139=     229:'http'           ?0                  	;0	<<354
358 239  CONCAT/8                  #140=     #139                 230:'://'           	;0	<<356
359 239  FETCH_DIM_R/81            $141=     16?1                 231:'ip'            	;0
360 239  CONCAT/8                  #142=     #140                 $141                	;0
361 239  CONCAT/8                  #143=     #142                 232:':'             	;0
362 239  FETCH_DIM_R/81            $144=     16?1                 233:'port'          	;0
363 239  CONCAT/8                  #145=     #143                 $144                	;0
364 239  CONCAT/8                  #146=     #145                 234:'/live/'        	;0
365 239  FETCH_DIM_R/81            $147=     16?1                 235:'username'      	;0
366 239  CONCAT/8                  #148=     #146                 $147                	;0
367 239  CONCAT/8                  #149=     #148                 236:'/'             	;0
368 239  FETCH_DIM_R/81            $150=     16?1                 237:'password'      	;0
369 239  CONCAT/8                  #151=     #149                 $150                	;0
370 239  CONCAT/8                  #152=     #151                 238:'/'             	;0
371 239  FETCH_DIM_R/81            $153=     16?4                 239:'stream_id'     	;0
372 239  CONCAT/8                  #154=     #152                 $153                	;0
373 239  FETCH_DIM_R/81            $155=     16?1                 240:'hls'           	;0
374 239  JMPZ/43                   ?0        $155                 ?377                	;0	>>377
375 239  QM_ASSIGN/22              #156=     241:'.m3u8'          ?0                  	;0
376 239  JMP/42                    ?0        ?383                 ?0                  	;0	>>383
377 239  FETCH_DIM_R/81            $157=     16?1                 242:'legacy'        	;0	<<374
378 239  JMPZ/43                   ?0        $157                 ?381                	;0	>>381
379 239  QM_ASSIGN/22              #158=     243:'.ts'            ?0                  	;0
380 239  JMP/42                    ?0        ?382                 ?0                  	;0	>>382
381 239  QM_ASSIGN/22              #158=     244:''               ?0                  	;0	<<378
382 239  QM_ASSIGN/22              #156=     #158                 ?0                  	;0	<<380
383 239  CONCAT/8                  #159=     #154                 #156                	;0	<<376
384 239  ASSIGN/38                 ?154      16?5                 #159                	;0
385 240  ECHO/40                   ?0        245:'														<tr>    
															<td class="text-center">' ?0                  	;0
386 241  FETCH_DIM_R/81            $161=     16?4                 246:'stream_id'     	;0
387 241  ECHO/40                   ?0        $161                 ?0                  	;0
388 242  ECHO/40                   ?0        247:'</td>
															<td>' ?0                  	;0
389 243  FETCH_DIM_R/81            $162=     16?4                 248:'stream_display_name'	;0
390 243  ECHO/40                   ?0        $162                 ?0                  	;0
391 244  NOP/0                     ?0        ?0                   ?0                  	;1
392 244  GOTO/253                  ?0        ?306                 ?249                	;0
393 245  JMP/42                    ?0        ?298                 ?0                  	;0	>>298
394 245  FE_FREE/127               ?0        $122                 ?0                  	;0	<<297
395 248  ECHO/40                   ?0        250:'													</tbody>
												</table>
											</div>
										</div>
									</div>
                                    <div class="tab-pane" id="view-movies">
										<div class="row">
											<div class="col-12" style="overflow-x:auto;">
												<table id="datatable-movies" class="table table-striped table-borderless dt-responsive nowrap">
													<thead>
														<tr>
															<th class="text-center">ID</th>
															<th>Movie Name</th>
															<th>Categories</th>
                                                            <th class="text-center">Modified</th>
                                                            <th class="text-center">Actions</th>
														</tr>
													</thead>
													<tbody>
														' ?0                  	;0
396 249  INIT_METHOD_CALL/112      ?0        16?3                 251:'query'         	;2
397 249  SEND_VAL_EX/116           ?80       253:'SELECT `stream_id`, `category_array`, `stream_display_name`, `modified`, `stream_icon`, `channel_id` FROM `providers_streams` WHERE `provider_id` = ? AND `type` = \'movie\' ORDER BY `modified` DESC, `stream_id` ASC;' ?1                  	;0
398 249  FETCH_DIM_FUNC_ARG/93     $163=     16?1                 254:'id'            	;2
399 249  SEND_VAR_EX/66            ?96       $163                 ?2                  	;0
400 249  DO_FCALL/60               ?158      ?0                   ?0                  	;0
401 250  GOTO/253                  ?0        ?201                 ?255                	;0
402 252  INCLUDE_OR_EVAL/73        ?159      256:'footer.php'     ?0                  	;2
403 253  NOP/0                     ?0        257:1                ?0                  	;4294967295
*/

?>