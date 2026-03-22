<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?106                 ?0                  	;0	>>106
1   5    FE_RESET_R/77             $11=      16?0                 ?18                 	;0
2   5    FE_FETCH_R/78             #12=      $11                  16?1                	;18	>>18	<<17
3   5    ASSIGN/38                 ?2        16?2                 #12                 	;0
4   6    ECHO/40                   ?0        1:'															<option ' ?0                  	;0
5   7    FETCH_DIM_R/81            $14=      16?3                 2:'hue'             	;0
6   7    IS_EQUAL/17               #15=      $14                  16?2                	;0
7   7    BOOL_NOT/13               #16=      #15                  ?0                  	;0
8   7    JMPZ/43                   ?0        #16                  ?11                 	;0	>>11
9   8    NOP/0                     ?0        ?0                   ?0                  	;1
10  8    GOTO/253                  ?0        ?12                  ?3                  	;0
11  10   ECHO/40                   ?0        4:'selected '        ?0                  	;0	<<8
12  12   ECHO/40                   ?0        5:'value="'          ?0                  	;0
13  13   ECHO/40                   ?0        16?2                 ?0                  	;0
14  14   ECHO/40                   ?0        6:'">'               ?0                  	;0
15  15   ECHO/40                   ?0        16?1                 ?0                  	;0
16  16   ECHO/40                   ?0        7:'</option>
															' ?0                  	;0
17  17   JMP/42                    ?0        ?2                   ?0                  	;0	>>2
18  17   FE_FREE/127               ?0        $11                  ?0                  	;0	<<1
19  20   ECHO/40                   ?0        8:'														</select>
													</div>
												</div>
                                                ' ?0                  	;0
20  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'EfadB87D8C867176'	;0
21  21   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
22  21   FE_RESET_R/77             $18=      $17                  ?60                 	;0
23  21   FE_FETCH_R/78             ?0        $18                  16?4                	;60	>>60	<<59
24  22   FETCH_DIM_R/81            $19=      16?4                 11:'type'           	;0
25  22   IS_EQUAL/17               #20=      $19                  12:3                	;0
26  22   JMPZ_EX/46                #20=      #20                  ?38                 	;0	>>38
27  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'in_array'       	;2
28  22   FETCH_DIM_FUNC_ARG/93     $21=      16?3                 15:'member_group_id'	;1
29  22   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
30  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'json_decode'    	;2
31  22   FETCH_DIM_FUNC_ARG/93     $22=      16?4                 18:'groups'         	;1
32  22   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
33  22   SEND_VAL_EX/116           ?96       19:true              ?2                  	;0
34  22   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
35  22   SEND_VAR_NO_REF_EX/50     ?96       $23                  ?2                  	;0
36  22   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
37  22   BOOL/52                   #20=      $24                  ?0                  	;0
38  22   BOOL_NOT/13               #25=      #20                  ?0                  	;0	<<26
39  22   JMPZ/43                   ?0        #25                  ?42                 	;0	>>42
40  23   NOP/0                     ?0        ?0                   ?0                  	;1
41  23   GOTO/253                  ?0        ?59                  ?20                 	;0
42  25   ECHO/40                   ?0        21:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="api_key">API Key <i title="API URL:<br/>' ?0                  	;0	<<39
43  26   FETCH_CONSTANT/99         #27=      ?0                   25:'SERVER_ID'      	;16
44  26   FETCH_STATIC_PROP_R/173   $26=      22:'rServers'        23:'XUI'            	;0
45  26   FETCH_DIM_R/81            $28=      $26                  #27                 	;0
46  26   FETCH_DIM_R/81            $29=      $28                  28:'site_url'       	;0
47  26   FETCH_DIM_R/81            $30=      16?4                 29:'code'           	;0
48  26   CONCAT/8                  #31=      $29                  $30                 	;0
49  26   ECHO/40                   ?0        #31                  ?0                  	;0
50  27   ECHO/40                   ?0        30:'/" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8 input-group">
														<input readonly type="text" maxlength="32" class="form-control" id="api_key" name="api_key" value="' ?0                  	;0
51  28   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'htmlspecialchars'	;1
52  28   FETCH_DIM_FUNC_ARG/93     $32=      16?3                 33:'api_key'        	;1
53  28   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
54  28   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
55  28   ECHO/40                   ?0        $33                  ?0                  	;0
56  29   ECHO/40                   ?0        34:'">
														<div class="input-group-append">
															<button class="btn btn-danger waves-effect waves-light" onClick="clearCode();" type="button"><i class="mdi mdi-close"></i></button>
                                                            <button class="btn btn-info waves-effect waves-light" onClick="generateCode();" type="button"><i class="mdi mdi-refresh"></i></button>
														</div>
													</div>
												</div>
                                                ' ?0                  	;0
57  30   FE_FREE/127               ?0        $18                  ?1                  	;1
58  30   GOTO/253                  ?0        ?61                  ?35                 	;0
59  32   JMP/42                    ?0        ?23                  ?0                  	;0	>>23
60  32   FE_FREE/127               ?0        $18                  ?0                  	;0	<<22
61  35   GOTO/253                  ?0        ?101                 ?36                 	;0
62  37   ISSET_ISEMPTY_DIM_OBJ/115 #34=      16?3                 37:'timezone'       	;16777216
63  37   BOOL_NOT/13               #35=      #34                  ?0                  	;0
64  37   JMPZ/43                   ?0        #35                  ?66                 	;0	>>66
65  38   GOTO/253                  ?0        ?67                  ?38                 	;0
66  40   ECHO/40                   ?0        39:'selected '       ?0                  	;0	<<64
67  42   ECHO/40                   ?0        40:' value="">Server Default</option>
															' ?0                  	;0
68  43   FE_RESET_R/77             $36=      16?5                 ?85                 	;0
69  43   FE_FETCH_R/78             #37=      $36                  16?1                	;85	>>85	<<84
70  43   ASSIGN/38                 ?27       16?2                 #37                 	;0
71  44   ECHO/40                   ?0        41:'															<option ' ?0                  	;0
72  45   FETCH_DIM_R/81            $39=      16?3                 42:'timezone'       	;0
73  45   IS_EQUAL/17               #40=      $39                  16?2                	;0
74  45   BOOL_NOT/13               #41=      #40                  ?0                  	;0
75  45   JMPZ/43                   ?0        #41                  ?78                 	;0	>>78
76  46   NOP/0                     ?0        ?0                   ?0                  	;1
77  46   GOTO/253                  ?0        ?79                  ?43                 	;0
78  48   ECHO/40                   ?0        44:'selected '       ?0                  	;0	<<75
79  50   ECHO/40                   ?0        45:'value="'         ?0                  	;0
80  51   ECHO/40                   ?0        16?2                 ?0                  	;0
81  52   ECHO/40                   ?0        46:'">'              ?0                  	;0
82  53   ECHO/40                   ?0        16?1                 ?0                  	;0
83  54   ECHO/40                   ?0        47:'</option>
															' ?0                  	;0
84  55   JMP/42                    ?0        ?69                  ?0                  	;0	>>69
85  55   FE_FREE/127               ?0        $36                  ?0                  	;0	<<68
86  57   GOTO/253                  ?0        ?152                 ?48                 	;0
87  59   ECHO/40                   ?0        49:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
88  60   ISSET_ISEMPTY_CV/197      #42=      16?6                 ?0                  	;33554432
89  60   JMPZ_EX/46                #42=      #42                  ?93                 	;0	>>93
90  60   FETCH_CONSTANT/99         #43=      ?0                   50:'STATUS_SUCCESS' 	;16
91  60   IS_EQUAL/17               #44=      16?6                 #43                 	;0
92  60   BOOL/52                   #42=      #44                  ?0                  	;0
93  60   BOOL_NOT/13               #45=      #42                  ?0                  	;0	<<89
94  60   JMPZ/43                   ?0        #45                  ?96                 	;0	>>96
95  61   GOTO/253                  ?0        ?123                 ?53                 	;0
96  63   ECHO/40                   ?0        54:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0	<<94
97  64   FETCH_DIM_R/81            $46=      16?7                 55:'profile_success'	;0
98  64   ECHO/40                   ?0        $46                  ?0                  	;0
99  65   ECHO/40                   ?0        56:'				</div>
				' ?0                  	;0
100 66   GOTO/253                  ?0        ?123                 ?57                 	;0
101 68   ECHO/40                   ?0        58:'											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_profile" type="submit" class="btn btn-primary" value="' ?0                  	;0
102 69   FETCH_DIM_R/81            $47=      16?7                 59:'save_profile'   	;0
103 69   ECHO/40                   ?0        $47                  ?0                  	;0
104 70   ECHO/40                   ?0        60:'" />
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
105 71   GOTO/253                  ?0        ?174                 ?61                 	;0
106 73   INCLUDE_OR_EVAL/73        ?37       62:'session.php'     ?0                  	;2	<<0
107 74   INCLUDE_OR_EVAL/73        ?38       63:'functions.php'   ?0                  	;2
108 75   ASSIGN/38                 ?39       16?8                 64:'Edit Profile'   	;0
109 76   INCLUDE_OR_EVAL/73        ?40       65:'header.php'      ?0                  	;2
110 77   ECHO/40                   ?0        66:'<div class="wrapper boxed-layout"' ?0                  	;0
111 78   GOTO/253                  ?0        ?130                 ?67                 	;0
112 80   ECHO/40                   ?0        68:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="password" name="password" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="email">' ?0                  	;0
113 81   FETCH_DIM_R/81            $52=      16?7                 69:'email_address'  	;0
114 81   ECHO/40                   ?0        $52                  ?0                  	;0
115 82   ECHO/40                   ?0        70:'</label>
													<div class="col-md-8">
														<input type="email" id="email" class="form-control" name="email" value="' ?0                  	;0
116 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'htmlspecialchars'	;1
117 83   FETCH_DIM_FUNC_ARG/93     $53=      16?3                 73:'email'          	;1
118 83   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
119 83   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
120 83   ECHO/40                   ?0        $54                  ?0                  	;0
121 84   ECHO/40                   ?0        74:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="timezone">Timezone</label>
													<div class="col-md-8">
														<select name="timezone" id="timezone" class="form-control" data-toggle="select2">
                                                            <option ' ?0                  	;0
122 85   GOTO/253                  ?0        ?62                  ?75                 	;0
123 88   ECHO/40                   ?0        76:'				<div class="card">
					<div class="card-body">
						<form onSubmit="return false;" action="#" method="POST" data-parsley-validate="">
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
124 89   FETCH_DIM_R/81            $55=      16?7                 77:'details'        	;0
125 89   ECHO/40                   ?0        $55                  ?0                  	;0
126 90   ECHO/40                   ?0        78:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="user-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="password">' ?0                  	;0
127 91   FETCH_DIM_R/81            $56=      16?7                 79:'change_password'	;0
128 91   ECHO/40                   ?0        $56                  ?0                  	;0
129 92   GOTO/253                  ?0        ?112                 ?80                 	;0
130 94   FETCH_IS/89               $57=      81:'_SERVER'         ?0                  	;0
131 94   ISSET_ISEMPTY_DIM_OBJ/115 #58=      $57                  82:'HTTP_X_REQUESTED_WITH'	;16777216
132 94   BOOL_NOT/13               #59=      #58                  ?0                  	;0
133 94   JMPZ_EX/46                #59=      #59                  ?141                	;0	>>141
134 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   83:'strtolower'     	;1
135 94   FETCH_FUNC_ARG/92         $60=      85:'_SERVER'         ?0                  	;1
136 94   FETCH_DIM_FUNC_ARG/93     $61=      $60                  86:'HTTP_X_REQUESTED_WITH'	;1
137 94   SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
138 94   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
139 94   IS_EQUAL/17               #63=      $62                  87:'xmlhttprequest' 	;0
140 94   BOOL/52                   #59=      #63                  ?0                  	;0
141 94   BOOL_NOT/13               #64=      #59                  ?0                  	;0	<<133
142 94   JMPZ/43                   ?0        #64                  ?144                	;0	>>144
143 95   GOTO/253                  ?0        ?145                 ?88                 	;0
144 97   ECHO/40                   ?0        89:' style="display: none;"' ?0                  	;0	<<142
145 99   ECHO/40                   ?0        90:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">' ?0                  	;0
146 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'ucfirst'        	;1
147 100  FETCH_DIM_FUNC_ARG/93     $65=      16?3                 93:'username'       	;1
148 100  SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
149 100  DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
150 100  ECHO/40                   ?0        $66                  ?0                  	;0
151 101  GOTO/253                  ?0        ?87                  ?94                 	;0
152 104  ECHO/40                   ?0        95:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="theme">System Theme</label>
													<div class="col-md-8">
														<select name="theme" id="theme" class="form-control" data-toggle="select2">
															' ?0                  	;0
153 105  FE_RESET_R/77             $67=      16?9                 ?171                	;0
154 105  FE_FETCH_R/78             #68=      $67                  16?10               	;171	>>171	<<170
155 105  ASSIGN/38                 ?58       16?2                 #68                 	;0
156 106  ECHO/40                   ?0        96:'															<option ' ?0                  	;0
157 107  FETCH_DIM_R/81            $70=      16?3                 97:'theme'          	;0
158 107  IS_EQUAL/17               #71=      $70                  16?2                	;0
159 107  BOOL_NOT/13               #72=      #71                  ?0                  	;0
160 107  JMPZ/43                   ?0        #72                  ?163                	;0	>>163
161 108  NOP/0                     ?0        ?0                   ?0                  	;1
162 108  GOTO/253                  ?0        ?164                 ?98                 	;0
163 110  ECHO/40                   ?0        99:'selected '       ?0                  	;0	<<160
164 112  ECHO/40                   ?0        100:'value="'        ?0                  	;0
165 113  ECHO/40                   ?0        16?2                 ?0                  	;0
166 114  ECHO/40                   ?0        101:'">'             ?0                  	;0
167 115  FETCH_DIM_R/81            $73=      16?10                102:'name'          	;0
168 115  ECHO/40                   ?0        $73                  ?0                  	;0
169 116  ECHO/40                   ?0        103:'</option>
															' ?0                  	;0
170 117  JMP/42                    ?0        ?154                 ?0                  	;0	>>154
171 117  FE_FREE/127               ?0        $67                  ?0                  	;0	<<153
172 120  ECHO/40                   ?0        104:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="hue">Topbar Theme</label>
													<div class="col-md-8">
														<select name="hue" id="hue" class="form-control" data-toggle="select2">
															' ?0                  	;0
173 121  GOTO/253                  ?0        ?1                   ?105                	;0
174 123  INCLUDE_OR_EVAL/73        ?63       106:'footer.php'     ?0                  	;2
175 124  NOP/0                     ?0        107:1                ?0                  	;4294967295
*/

?>