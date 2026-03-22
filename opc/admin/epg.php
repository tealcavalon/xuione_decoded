<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?144                 ?0                  	;0	>>144
1   5    FE_RESET_R/77             $6=       16?0                 ?18                 	;0
2   5    FE_FETCH_R/78             #7=       $6                   16?1                	;18	>>18	<<17
3   5    ASSIGN/38                 ?2        16?2                 #7                  	;0
4   6    ECHO/40                   ?0        1:'														<tr>    
															<td>' ?0                  	;0
5   7    ECHO/40                   ?0        16?2                 ?0                  	;0
6   8    ECHO/40                   ?0        2:'</td>
															<td>' ?0                  	;0
7   9    FETCH_DIM_R/81            $9=       16?1                 3:'display_name'    	;0
8   9    ECHO/40                   ?0        $9                   ?0                  	;0
9   10   ECHO/40                   ?0        4:'</td>
															<td>' ?0                  	;0
10  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'implode'         	;2
11  11   SEND_VAL_EX/116           ?80       7:', '               ?1                  	;0
12  11   FETCH_DIM_FUNC_ARG/93     $10=      16?1                 8:'langs'           	;2
13  11   SEND_VAR_EX/66            ?96       $10                  ?2                  	;0
14  11   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
15  11   ECHO/40                   ?0        $11                  ?0                  	;0
16  12   ECHO/40                   ?0        9:'</td>
														</tr>
														' ?0                  	;0
17  13   JMP/42                    ?0        ?2                   ?0                  	;0	>>2
18  13   FE_FREE/127               ?0        $6                   ?0                  	;0	<<1
19  16   ECHO/40                   ?0        10:'													</tbody>
												</table>
											</div>
										</div>
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
20  17   GOTO/253                  ?0        ?197                 ?11                 	;0
21  20   FETCH_DIM_R/81            $12=      16?3                 12:'edit'           	;0
22  20   ECHO/40                   ?0        $12                  ?0                  	;0
23  22   ECHO/40                   ?0        13:' '               ?0                  	;0
24  23   FETCH_DIM_R/81            $13=      16?3                 14:'epg'            	;0
25  23   ECHO/40                   ?0        $13                  ?0                  	;0
26  24   GOTO/253                  ?0        ?67                  ?15                 	;0
27  26   FETCH_DIM_R/81            $14=      16?3                 16:'key'            	;0
28  26   ECHO/40                   ?0        $14                  ?0                  	;0
29  27   ECHO/40                   ?0        17:'</th>
															<th>' ?0                  	;0
30  28   FETCH_DIM_R/81            $15=      16?3                 18:'channel_name'   	;0
31  28   ECHO/40                   ?0        $15                  ?0                  	;0
32  29   ECHO/40                   ?0        19:'</th>
															<th>' ?0                  	;0
33  30   FETCH_DIM_R/81            $16=      16?3                 20:'languages'      	;0
34  30   ECHO/40                   ?0        $16                  ?0                  	;0
35  31   GOTO/253                  ?0        ?153                 ?21                 	;0
36  33   FETCH_STATIC_PROP_IS/176  $17=      22:'rRequest'        23:'XUI'            	;0
37  33   ISSET_ISEMPTY_DIM_OBJ/115 #18=      $17                  25:'id'             	;33554432
38  33   JMPZ_EX/46                #18=      #18                  ?47                 	;0	>>47
39  33   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'getEPG'         	;1
40  33   FETCH_STATIC_PROP_FUNC_ARG/177 $19=      28:'rRequest'        29:'XUI'            	;1
41  33   FETCH_DIM_FUNC_ARG/93     $20=      $19                  31:'id'             	;1
42  33   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
43  33   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
44  33   ASSIGN/38                 $22=      16?4                 $21                 	;0
45  33   BOOL_NOT/13               #23=      $22                  ?0                  	;0
46  33   BOOL/52                   #18=      #23                  ?0                  	;0
47  33   BOOL_NOT/13               #24=      #18                  ?0                  	;0	<<38
48  33   JMPZ/43                   ?0        #24                  ?50                 	;0	>>50
49  34   GOTO/253                  ?0        ?51                  ?32                 	;0
50  36   EXIT/79                   ?0        ?0                   ?0                  	;0	<<48
51  38   ASSIGN/38                 ?19       16?5                 33:'EPG'            	;0
52  39   INCLUDE_OR_EVAL/73        ?20       34:'header.php'      ?0                  	;2
53  40   GOTO/253                  ?0        ?86                  ?35                 	;0
54  42   ECHO/40                   ?0        36:'									<li class="nav-item">
										<a href="#view-channels" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-play mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
55  43   FETCH_DIM_R/81            $27=      16?3                 37:'view_channels'  	;0
56  43   ECHO/40                   ?0        $27                  ?0                  	;0
57  44   ECHO/40                   ?0        38:'</span>
										</a>
									</li>
									' ?0                  	;0
58  46   ECHO/40                   ?0        39:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="category-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="epg_name">' ?0                  	;0
59  47   GOTO/253                  ?0        ?112                 ?40                 	;0
60  49   ECHO/40                   ?0        41:'" required data-parsley-trigger="change">
													</div>
                                                    <label class="col-md-4 col-form-label" for="offset">Minute Offset</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="offset" name="offset" value="' ?0                  	;0
61  50   ISSET_ISEMPTY_CV/197      #28=      16?4                 ?0                  	;33554432
62  50   JMPZ/43                   ?0        #28                  ?64                 	;0	>>64
63  51   GOTO/253                  ?0        ?66                  ?42                 	;0
64  53   ECHO/40                   ?0        43:'0'               ?0                  	;0	<<62
65  54   GOTO/253                  ?0        ?132                 ?44                 	;0
66  56   GOTO/253                  ?0        ?125                 ?45                 	;0
67  58   ECHO/40                   ?0        46:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
68  59   ISSET_ISEMPTY_CV/197      #29=      16?4                 ?0                  	;33554432
69  59   BOOL_NOT/13               #30=      #29                  ?0                  	;0
70  59   JMPZ/43                   ?0        #30                  ?72                 	;0	>>72
71  60   GOTO/253                  ?0        ?174                 ?47                 	;0
72  62   ECHO/40                   ?0        48:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<70
73  63   FETCH_DIM_R/81            $31=      16?4                 49:'id'             	;0
74  63   ECHO/40                   ?0        $31                  ?0                  	;0
75  64   ECHO/40                   ?0        50:'" />
							'    ?0                  	;0
76  65   GOTO/253                  ?0        ?174                 ?51                 	;0
77  67   INCLUDE_OR_EVAL/73        ?26       52:'topbar.php'      ?0                  	;2
78  68   ECHO/40                   ?0        53:'					</div>
					<h4 class="page-title">' ?0                  	;0
79  69   ISSET_ISEMPTY_CV/197      #33=      16?4                 ?0                  	;33554432
80  69   JMPZ/43                   ?0        #33                  ?82                 	;0	>>82
81  70   GOTO/253                  ?0        ?21                  ?54                 	;0
82  72   FETCH_DIM_R/81            $34=      16?3                 55:'add'            	;0	<<80
83  72   ECHO/40                   ?0        $34                  ?0                  	;0
84  73   GOTO/253                  ?0        ?23                  ?56                 	;0
85  74   GOTO/253                  ?0        ?21                  ?57                 	;0
86  76   ECHO/40                   ?0        58:'<div class="wrapper boxed-layout"' ?0                  	;0
87  77   FETCH_IS/89               $35=      59:'_SERVER'         ?0                  	;0
88  77   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  60:'HTTP_X_REQUESTED_WITH'	;16777216
89  77   BOOL_NOT/13               #37=      #36                  ?0                  	;0
90  77   JMPZ_EX/46                #37=      #37                  ?98                 	;0	>>98
91  77   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'strtolower'     	;1
92  77   FETCH_FUNC_ARG/92         $38=      63:'_SERVER'         ?0                  	;1
93  77   FETCH_DIM_FUNC_ARG/93     $39=      $38                  64:'HTTP_X_REQUESTED_WITH'	;1
94  77   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
95  77   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
96  77   IS_EQUAL/17               #41=      $40                  65:'xmlhttprequest' 	;0
97  77   BOOL/52                   #37=      #41                  ?0                  	;0
98  77   BOOL_NOT/13               #42=      #37                  ?0                  	;0	<<90
99  77   JMPZ/43                   ?0        #42                  ?101                	;0	>>101
100 78   GOTO/253                  ?0        ?102                 ?66                 	;0
101 80   ECHO/40                   ?0        67:' style="display: none;"' ?0                  	;0	<<99
102 82   ECHO/40                   ?0        68:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
103 83   GOTO/253                  ?0        ?77                  ?69                 	;0
104 86   ECHO/40                   ?0        70:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="days_keep">' ?0                  	;0
105 87   FETCH_DIM_R/81            $43=      16?3                 71:'days_to_keep'   	;0
106 87   ECHO/40                   ?0        $43                  ?0                  	;0
107 88   ECHO/40                   ?0        72:'</label>
													<div class="col-md-2">
														<input type="text" class="form-control text-center" id="days_keep" name="days_keep" value="' ?0                  	;0
108 89   ISSET_ISEMPTY_CV/197      #44=      16?4                 ?0                  	;33554432
109 89   JMPZ/43                   ?0        #44                  ?111                	;0	>>111
110 90   GOTO/253                  ?0        ?168                 ?73                 	;0
111 92   GOTO/253                  ?0        ?166                 ?74                 	;0	<<109
112 94   FETCH_DIM_R/81            $45=      16?3                 75:'epg_name'       	;0
113 94   ECHO/40                   ?0        $45                  ?0                  	;0
114 95   ECHO/40                   ?0        76:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="epg_name" name="epg_name" value="' ?0                  	;0
115 96   ISSET_ISEMPTY_CV/197      #46=      16?4                 ?0                  	;33554432
116 96   BOOL_NOT/13               #47=      #46                  ?0                  	;0
117 96   JMPZ/43                   ?0        #47                  ?119                	;0	>>119
118 97   GOTO/253                  ?0        ?124                 ?77                 	;0
119 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'htmlspecialchars'	;1	<<117
120 99   FETCH_DIM_FUNC_ARG/93     $48=      16?4                 80:'epg_name'       	;1
121 99   SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
122 99   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
123 99   ECHO/40                   ?0        $49                  ?0                  	;0
124 101  GOTO/253                  ?0        ?183                 ?81                 	;0
125 103  INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'intval'         	;1
126 103  FETCH_DIM_FUNC_ARG/93     $50=      16?4                 84:'offset'         	;1
127 103  SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
128 103  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
129 103  JMP_SET/152               #52=      $51                  ?131                	;0
130 103  QM_ASSIGN/22              #52=      85:0                 ?0                  	;0
131 103  ECHO/40                   ?0        #52                  ?0                  	;0
132 105  ECHO/40                   ?0        86:'" required data-parsley-trigger="change">
													</div>
												</div>
											</div>
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_epg" type="submit" class="btn btn-primary" value="' ?0                  	;0
133 106  ISSET_ISEMPTY_CV/197      #53=      16?4                 ?0                  	;33554432
134 106  JMPZ/43                   ?0        #53                  ?136                	;0	>>136
135 107  GOTO/253                  ?0        ?140                 ?87                 	;0
136 109  FETCH_DIM_R/81            $54=      16?3                 88:'add'            	;0	<<134
137 109  ECHO/40                   ?0        $54                  ?0                  	;0
138 110  GOTO/253                  ?0        ?139                 ?89                 	;0
139 112  GOTO/253                  ?0        ?142                 ?90                 	;0
140 114  FETCH_DIM_R/81            $55=      16?3                 91:'edit'           	;0
141 114  ECHO/40                   ?0        $55                  ?0                  	;0
142 116  ECHO/40                   ?0        92:'" />
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="view-channels">
										<div class="row">
											<div class="col-12" style="overflow-x:auto;">
												<table id="datatable" class="table dt-responsive nowrap">
													<thead>
														<tr>
															<th>' ?0                  	;0
143 117  GOTO/253                  ?0        ?27                  ?93                 	;0
144 119  INCLUDE_OR_EVAL/73        ?50       94:'session.php'     ?0                  	;2	<<0
145 120  INCLUDE_OR_EVAL/73        ?51       95:'functions.php'   ?0                  	;2
146 121  INIT_FCALL_BY_NAME/59     ?0        ?0                   96:'E6D500E19634D513'	;0
147 121  DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
148 121  JMPZ/43                   ?0        $58                  ?150                	;0	>>150
149 122  GOTO/253                  ?0        ?152                 ?98                 	;0
150 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'e72F42a93714BA87'	;0	<<148
151 124  DO_FCALL_BY_NAME/131      ?53       ?0                   ?0                  	;0
152 126  GOTO/253                  ?0        ?36                  ?101                	;0
153 128  ECHO/40                   ?0        102:'</th>
														</tr>
													</thead>
													<tbody>
														' ?0                  	;0
154 129  ASSIGN/38                 ?54       16?0                 103:array (
)       	;0
155 130  ISSET_ISEMPTY_DIM_OBJ/115 #61=      16?4                 104:'data'          	;33554432
156 130  BOOL_NOT/13               #62=      #61                  ?0                  	;0
157 130  JMPZ/43                   ?0        #62                  ?159                	;0	>>159
158 131  GOTO/253                  ?0        ?165                 ?105                	;0
159 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'json_decode'   	;2	<<157
160 133  FETCH_DIM_FUNC_ARG/93     $63=      16?4                 108:'data'          	;1
161 133  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
162 133  SEND_VAL_EX/116           ?96       109:true             ?2                  	;0
163 133  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
164 133  ASSIGN/38                 ?59       16?0                 $64                 	;0
165 135  GOTO/253                  ?0        ?1                   ?110                	;0
166 137  ECHO/40                   ?0        111:'7'              ?0                  	;0
167 138  GOTO/253                  ?0        ?173                 ?112                	;0
168 140  INIT_FCALL_BY_NAME/59     ?0        ?0                   113:'htmlspecialchars'	;1
169 140  FETCH_DIM_FUNC_ARG/93     $66=      16?4                 115:'days_keep'     	;1
170 140  SEND_VAR_EX/66            ?80       $66                  ?1                  	;0
171 140  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
172 140  ECHO/40                   ?0        $67                  ?0                  	;0
173 142  GOTO/253                  ?0        ?60                  ?116                	;0
174 145  ECHO/40                   ?0        117:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#category-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
175 146  FETCH_DIM_R/81            $68=      16?3                 118:'details'       	;0
176 146  ECHO/40                   ?0        $68                  ?0                  	;0
177 147  ECHO/40                   ?0        119:'</span>
										</a>
									</li>
									' ?0                  	;0
178 148  ISSET_ISEMPTY_CV/197      #69=      16?4                 ?0                  	;33554432
179 148  BOOL_NOT/13               #70=      #69                  ?0                  	;0
180 148  JMPZ/43                   ?0        #70                  ?182                	;0	>>182
181 149  GOTO/253                  ?0        ?58                  ?120                	;0
182 151  GOTO/253                  ?0        ?54                  ?121                	;0	<<180
183 153  ECHO/40                   ?0        122:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="epg_file">' ?0                  	;0
184 154  FETCH_DIM_R/81            $71=      16?3                 123:'source'        	;0
185 154  ECHO/40                   ?0        $71                  ?0                  	;0
186 155  ECHO/40                   ?0        124:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="epg_file" name="epg_file" value="' ?0                  	;0
187 156  ISSET_ISEMPTY_CV/197      #72=      16?4                 ?0                  	;33554432
188 156  BOOL_NOT/13               #73=      #72                  ?0                  	;0
189 156  JMPZ/43                   ?0        #73                  ?191                	;0	>>191
190 157  GOTO/253                  ?0        ?104                 ?125                	;0
191 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'htmlspecialchars'	;1	<<189
192 159  FETCH_DIM_FUNC_ARG/93     $74=      16?4                 128:'epg_file'      	;1
193 159  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
194 159  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
195 159  ECHO/40                   ?0        $75                  ?0                  	;0
196 160  GOTO/253                  ?0        ?104                 ?129                	;0
197 162  INCLUDE_OR_EVAL/73        ?70       130:'footer.php'     ?0                  	;2
198 163  NOP/0                     ?0        131:1                ?0                  	;4294967295
*/

?>