<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?123                 ?0                  	;0	>>123
1   5    FETCH_DIM_R/81            $11=      16?0                 1:'change_password' 	;0
2   5    ECHO/40                   ?0        $11                  ?0                  	;0
3   6    ECHO/40                   ?0        2:'</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="password" name="password" placeholder="Enter a new password here to change it" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="email">' ?0                  	;0
4   7    FETCH_DIM_R/81            $12=      16?0                 3:'email_address'   	;0
5   7    ECHO/40                   ?0        $12                  ?0                  	;0
6   8    ECHO/40                   ?0        4:'</label>
													<div class="col-md-8">
														<input type="email" id="email" class="form-control" name="email" value="' ?0                  	;0
7   9    INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'htmlspecialchars'	;1
8   9    FETCH_DIM_FUNC_ARG/93     $13=      16?1                 7:'email'           	;1
9   9    SEND_VAR_EX/66            ?80       $13                  ?1                  	;0
10  9    DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
11  9    ECHO/40                   ?0        $14                  ?0                  	;0
12  10   GOTO/253                  ?0        ?129                 ?8                  	;0
13  12   ECHO/40                   ?0        9:'														</select>
													</div>
												</div>
                                                ' ?0                  	;0
14  13   INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'efAdB87D8C867176'	;0
15  13   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
16  13   FE_RESET_R/77             $16=      $15                  ?71                 	;0
17  13   FE_FETCH_R/78             ?0        $16                  16?2                	;71	>>71	<<70
18  14   FETCH_DIM_R/81            $17=      16?2                 12:'type'           	;0
19  14   IS_EQUAL/17               #18=      $17                  13:4                	;0
20  14   JMPZ_EX/46                #18=      #18                  ?32                 	;0	>>32
21  14   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'in_array'       	;2
22  14   FETCH_DIM_FUNC_ARG/93     $19=      16?1                 16:'member_group_id'	;1
23  14   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
24  14   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'json_decode'    	;2
25  14   FETCH_DIM_FUNC_ARG/93     $20=      16?2                 19:'groups'         	;1
26  14   SEND_VAR_EX/66            ?80       $20                  ?1                  	;0
27  14   SEND_VAL_EX/116           ?96       20:true              ?2                  	;0
28  14   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
29  14   SEND_VAR_NO_REF_EX/50     ?96       $21                  ?2                  	;0
30  14   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
31  14   BOOL/52                   #18=      $22                  ?0                  	;0
32  14   BOOL_NOT/13               #23=      #18                  ?0                  	;0	<<20
33  14   JMPZ/43                   ?0        #23                  ?36                 	;0	>>36
34  15   NOP/0                     ?0        ?0                   ?0                  	;1
35  15   GOTO/253                  ?0        ?70                  ?21                 	;0
36  17   ECHO/40                   ?0        22:'                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="api_key">API Key <i title="API URL:<br/>' ?0                  	;0	<<33
37  18   ISSET_ISEMPTY_DIM_OBJ/115 #24=      16?1                 23:'reseller_dns'   	;16777216
38  18   JMPZ/43                   ?0        #24                  ?45                 	;0	>>45
39  18   FETCH_CONSTANT/99         #26=      ?0                   27:'SERVER_ID'      	;16
40  18   FETCH_STATIC_PROP_R/173   $25=      24:'rServers'        25:'XUI'            	;0
41  18   FETCH_DIM_R/81            $27=      $25                  #26                 	;0
42  18   FETCH_DIM_R/81            $28=      $27                  30:'http_url'       	;0
43  18   QM_ASSIGN/22              #29=      $28                  ?0                  	;0
44  18   JMP/42                    ?0        ?58                  ?0                  	;0	>>58
45  18   FETCH_DIM_R/81            $30=      16?1                 31:'reseller_dns'   	;0	<<38
46  18   CONCAT/8                  #31=      32:'http://'         $30                 	;0
47  18   CONCAT/8                  #32=      #31                  33:':'              	;0
48  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   34:'intval'         	;1
49  18   FETCH_CONSTANT/99         #34=      ?0                   39:'SERVER_ID'      	;16
50  18   FETCH_STATIC_PROP_FUNC_ARG/177 $33=      36:'rServers'        37:'XUI'            	;1
51  18   FETCH_DIM_FUNC_ARG/93     $35=      $33                  #34                 	;1
52  18   FETCH_DIM_FUNC_ARG/93     $36=      $35                  42:'http_broadcast_port'	;1
53  18   SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
54  18   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
55  18   CONCAT/8                  #38=      #32                  $37                 	;0
56  18   CONCAT/8                  #39=      #38                  43:'/'              	;0
57  18   QM_ASSIGN/22              #29=      #39                  ?0                  	;0
58  18   FETCH_DIM_R/81            $40=      16?2                 44:'code'           	;0	<<44
59  18   CONCAT/8                  #41=      #29                  $40                 	;0
60  18   ECHO/40                   ?0        #41                  ?0                  	;0
61  19   ECHO/40                   ?0        45:'/" class="tooltip text-secondary far fa-circle"></i></label>
													<div class="col-md-8 input-group">
														<input readonly type="text" maxlength="32" class="form-control" id="api_key" name="api_key" value="' ?0                  	;0
62  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'htmlspecialchars'	;1
63  20   FETCH_DIM_FUNC_ARG/93     $42=      16?1                 48:'api_key'        	;1
64  20   SEND_VAR_EX/66            ?80       $42                  ?1                  	;0
65  20   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
66  20   ECHO/40                   ?0        $43                  ?0                  	;0
67  21   ECHO/40                   ?0        49:'">
														<div class="input-group-append">
															<button class="btn btn-danger waves-effect waves-light" onClick="clearCode();" type="button"><i class="mdi mdi-close"></i></button>
                                                            <button class="btn btn-info waves-effect waves-light" onClick="generateCode();" type="button"><i class="mdi mdi-refresh"></i></button>
														</div>
													</div>
												</div>
                                                ' ?0                  	;0
68  22   FE_FREE/127               ?0        $16                  ?0                  	;1
69  22   GOTO/253                  ?0        ?72                  ?50                 	;0
70  24   JMP/42                    ?0        ?17                  ?0                  	;0	>>17
71  24   FE_FREE/127               ?0        $16                  ?0                  	;0	<<16
72  27   ECHO/40                   ?0        51:'											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_profile" type="submit" class="btn btn-primary" value="' ?0                  	;0
73  28   FETCH_DIM_R/81            $44=      16?0                 52:'save_profile'   	;0
74  28   ECHO/40                   ?0        $44                  ?0                  	;0
75  29   GOTO/253                  ?0        ?76                  ?53                 	;0
76  31   ECHO/40                   ?0        54:'" />
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
77  32   GOTO/253                  ?0        ?181                 ?55                 	;0
78  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'ucfirst'        	;1
79  34   FETCH_DIM_FUNC_ARG/93     $45=      16?1                 58:'username'       	;1
80  34   SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
81  34   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
82  34   ECHO/40                   ?0        $46                  ?0                  	;0
83  35   ECHO/40                   ?0        59:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
84  36   ISSET_ISEMPTY_CV/197      #47=      16?3                 ?0                  	;33554432
85  36   JMPZ_EX/46                #47=      #47                  ?89                 	;0	>>89
86  36   FETCH_CONSTANT/99         #48=      ?0                   60:'STATUS_SUCCESS' 	;16
87  36   IS_EQUAL/17               #49=      16?3                 #48                 	;0
88  36   BOOL/52                   #47=      #49                  ?0                  	;0
89  36   BOOL_NOT/13               #50=      #47                  ?0                  	;0	<<85
90  36   JMPZ/43                   ?0        #50                  ?92                 	;0	>>92
91  37   GOTO/253                  ?0        ?118                 ?63                 	;0
92  39   ECHO/40                   ?0        64:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0	<<90
93  40   FETCH_DIM_R/81            $51=      16?0                 65:'profile_success'	;0
94  40   ECHO/40                   ?0        $51                  ?0                  	;0
95  41   GOTO/253                  ?0        ?117                 ?66                 	;0
96  44   ECHO/40                   ?0        67:' value="">Server Default</option>
															' ?0                  	;0
97  45   FE_RESET_R/77             $52=      16?4                 ?114                	;0
98  45   FE_FETCH_R/78             #53=      $52                  16?5                	;114	>>114	<<113
99  45   ASSIGN/38                 ?43       16?6                 #53                 	;0
100 46   ECHO/40                   ?0        68:'															<option ' ?0                  	;0
101 47   FETCH_DIM_R/81            $55=      16?1                 69:'timezone'       	;0
102 47   IS_EQUAL/17               #56=      $55                  16?6                	;0
103 47   BOOL_NOT/13               #57=      #56                  ?0                  	;0
104 47   JMPZ/43                   ?0        #57                  ?107                	;0	>>107
105 48   NOP/0                     ?0        ?0                   ?0                  	;1
106 48   GOTO/253                  ?0        ?108                 ?70                 	;0
107 50   ECHO/40                   ?0        71:'selected '       ?0                  	;0	<<104
108 52   ECHO/40                   ?0        72:'value="'         ?0                  	;0
109 53   ECHO/40                   ?0        16?6                 ?0                  	;0
110 54   ECHO/40                   ?0        73:'">'              ?0                  	;0
111 55   ECHO/40                   ?0        16?5                 ?0                  	;0
112 56   ECHO/40                   ?0        74:'</option>
															' ?0                  	;0
113 57   JMP/42                    ?0        ?98                  ?0                  	;0	>>98
114 57   FE_FREE/127               ?0        $52                  ?0                  	;0	<<97
115 60   ECHO/40                   ?0        75:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="theme">System Theme</label>
													<div class="col-md-8">
														<select name="theme" id="theme" class="form-control" data-toggle="select2">
															' ?0                  	;0
116 61   GOTO/253                  ?0        ?142                 ?76                 	;0
117 63   ECHO/40                   ?0        77:'				</div>
				' ?0                  	;0
118 65   ECHO/40                   ?0        78:'				<div class="card">
					<div class="card-body">
						<form onSubmit="return false;" action="#" method="POST" data-parsley-validate="">
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
119 66   FETCH_DIM_R/81            $58=      16?0                 79:'details'        	;0
120 66   ECHO/40                   ?0        $58                  ?0                  	;0
121 67   ECHO/40                   ?0        80:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="user-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="password">' ?0                  	;0
122 68   GOTO/253                  ?0        ?1                   ?81                 	;0
123 70   INCLUDE_OR_EVAL/73        ?48       82:'session.php'     ?0                  	;2	<<0
124 71   INCLUDE_OR_EVAL/73        ?49       83:'functions.php'   ?0                  	;2
125 72   ASSIGN/38                 ?50       16?7                 84:'Edit Profile'   	;0
126 73   INCLUDE_OR_EVAL/73        ?51       85:'header.php'      ?0                  	;2
127 74   ECHO/40                   ?0        86:'<div class="wrapper boxed-layout">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">' ?0                  	;0
128 75   GOTO/253                  ?0        ?78                  ?87                 	;0
129 77   ECHO/40                   ?0        88:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="reseller_dns">Custom DNS</label>
													<div class="col-md-8">
														<input type="reseller_dns" id="reseller_dns" class="form-control" name="reseller_dns" value="' ?0                  	;0
130 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'htmlspecialchars'	;1
131 78   FETCH_DIM_FUNC_ARG/93     $63=      16?1                 91:'reseller_dns'   	;1
132 78   SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
133 78   DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
134 78   ECHO/40                   ?0        $64                  ?0                  	;0
135 79   ECHO/40                   ?0        92:'">
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="timezone">Timezone</label>
													<div class="col-md-8">
														<select name="timezone" id="timezone" class="form-control" data-toggle="select2">
                                                            <option ' ?0                  	;0
136 80   ISSET_ISEMPTY_DIM_OBJ/115 #65=      16?1                 93:'timezone'       	;16777216
137 80   BOOL_NOT/13               #66=      #65                  ?0                  	;0
138 80   JMPZ/43                   ?0        #66                  ?140                	;0	>>140
139 81   GOTO/253                  ?0        ?96                  ?94                 	;0
140 83   ECHO/40                   ?0        95:'selected '       ?0                  	;0	<<138
141 84   GOTO/253                  ?0        ?96                  ?96                 	;0
142 86   FE_RESET_R/77             $67=      16?8                 ?160                	;0
143 86   FE_FETCH_R/78             #68=      $67                  16?9                	;160	>>160	<<159
144 86   ASSIGN/38                 ?58       16?6                 #68                 	;0
145 87   ECHO/40                   ?0        97:'															<option ' ?0                  	;0
146 88   FETCH_DIM_R/81            $70=      16?1                 98:'theme'          	;0
147 88   IS_EQUAL/17               #71=      $70                  16?6                	;0
148 88   BOOL_NOT/13               #72=      #71                  ?0                  	;0
149 88   JMPZ/43                   ?0        #72                  ?152                	;0	>>152
150 89   NOP/0                     ?0        ?0                   ?0                  	;1
151 89   GOTO/253                  ?0        ?153                 ?99                 	;0
152 91   ECHO/40                   ?0        100:'selected '      ?0                  	;0	<<149
153 93   ECHO/40                   ?0        101:'value="'        ?0                  	;0
154 94   ECHO/40                   ?0        16?6                 ?0                  	;0
155 95   ECHO/40                   ?0        102:'">'             ?0                  	;0
156 96   FETCH_DIM_R/81            $73=      16?9                 103:'name'          	;0
157 96   ECHO/40                   ?0        $73                  ?0                  	;0
158 97   ECHO/40                   ?0        104:'</option>
															' ?0                  	;0
159 98   JMP/42                    ?0        ?143                 ?0                  	;0	>>143
160 98   FE_FREE/127               ?0        $67                  ?0                  	;0	<<142
161 101  ECHO/40                   ?0        105:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="hue">Topbar Theme</label>
													<div class="col-md-8">
														<select name="hue" id="hue" class="form-control" data-toggle="select2">
															' ?0                  	;0
162 102  FE_RESET_R/77             $74=      16?10                ?179                	;0
163 102  FE_FETCH_R/78             #75=      $74                  16?5                	;179	>>179	<<178
164 102  ASSIGN/38                 ?65       16?6                 #75                 	;0
165 103  ECHO/40                   ?0        106:'															<option ' ?0                  	;0
166 104  FETCH_DIM_R/81            $77=      16?1                 107:'hue'           	;0
167 104  IS_EQUAL/17               #78=      $77                  16?6                	;0
168 104  BOOL_NOT/13               #79=      #78                  ?0                  	;0
169 104  JMPZ/43                   ?0        #79                  ?172                	;0	>>172
170 105  NOP/0                     ?0        ?0                   ?0                  	;1
171 105  GOTO/253                  ?0        ?173                 ?108                	;0
172 107  ECHO/40                   ?0        109:'selected '      ?0                  	;0	<<169
173 109  ECHO/40                   ?0        110:'value="'        ?0                  	;0
174 110  ECHO/40                   ?0        16?6                 ?0                  	;0
175 111  ECHO/40                   ?0        111:'">'             ?0                  	;0
176 112  ECHO/40                   ?0        16?5                 ?0                  	;0
177 113  ECHO/40                   ?0        112:'</option>
															' ?0                  	;0
178 114  JMP/42                    ?0        ?163                 ?0                  	;0	>>163
179 114  FE_FREE/127               ?0        $74                  ?0                  	;0	<<162
180 117  GOTO/253                  ?0        ?13                  ?113                	;0
181 119  INCLUDE_OR_EVAL/73        ?69       114:'footer.php'     ?0                  	;2
182 120  NOP/0                     ?0        115:1                ?0                  	;4294967295
*/

?>