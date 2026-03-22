<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1   5    INCLUDE_OR_EVAL/73        ?0        1:'session.php'      ?0                  	;2	<<0
2   6    INCLUDE_OR_EVAL/73        ?1        2:'functions.php'    ?0                  	;2
3   7    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'e6D500E19634D513'	;0
4   7    DO_FCALL_BY_NAME/131      $14=      ?0                   ?0                  	;0
5   7    JMPZ/43                   ?0        $14                  ?7                  	;0	>>7
6   8    GOTO/253                  ?0        ?9                   ?5                  	;0
7   10   INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'e72F42A93714Ba87'	;0	<<5
8   10   DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
9   12   GOTO/253                  ?0        ?195                 ?8                  	;0
10  14   ECHO/40                   ?0        9:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass edit of lines was successfully executed!
				</div>
				' ?0                  	;0
11  16   ECHO/40                   ?0        10:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST">
							<input type="hidden" name="users_selected" id="users_selected" value="" />
							<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-group mr-1"></i>
											<span class="d-none d-sm-inline">Lines</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
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
									<div class="tab-pane" id="user-selection">
										<div class="row">
											<div class="col-md-3 col-6">
												<input type="text" class="form-control" id="user_search" value="" placeholder="Search Lines...">
											</div>
                                            <div class="col-md-3">
                                                <select id="reseller_search" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
12  17   FETCH_STATIC_PROP_IS/176  $16=      11:'rRequest'        12:'XUI'            	;0
13  17   ISSET_ISEMPTY_DIM_OBJ/115 #17=      $16                  14:'owner'          	;33554432
14  17   JMPZ_EX/46                #17=      #17                  ?25                 	;0	>>25
15  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'Ba89228dC958Ce05'	;1
16  17   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'intval'         	;1
17  17   FETCH_STATIC_PROP_FUNC_ARG/177 $18=      19:'rRequest'        20:'XUI'            	;1
18  17   FETCH_DIM_FUNC_ARG/93     $19=      $18                  22:'owner'          	;1
19  17   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
20  17   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
21  17   SEND_VAR_NO_REF_EX/50     ?80       $20                  ?1                  	;0
22  17   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
23  17   ASSIGN/38                 $22=      16?0                 $21                 	;0
24  17   BOOL/52                   #17=      $22                  ?0                  	;0
25  17   BOOL_NOT/13               #23=      #17                  ?0                  	;0	<<14
26  17   JMPZ/43                   ?0        #23                  ?28                 	;0	>>28
27  18   GOTO/253                  ?0        ?39                  ?23                 	;0
28  20   ECHO/40                   ?0        24:'                                                    <option value="' ?0                  	;0	<<26
29  21   GOTO/253                  ?0        ?30                  ?25                 	;0
30  23   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'intval'         	;1
31  23   FETCH_DIM_FUNC_ARG/93     $24=      16?0                 28:'id'             	;1
32  23   SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
33  23   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
34  23   ECHO/40                   ?0        $25                  ?0                  	;0
35  24   ECHO/40                   ?0        29:'" selected="selected">' ?0                  	;0
36  25   FETCH_DIM_R/81            $26=      16?0                 30:'username'       	;0
37  25   ECHO/40                   ?0        $26                  ?0                  	;0
38  26   ECHO/40                   ?0        31:'</option>
                                                    ' ?0                  	;0
39  28   GOTO/253                  ?0        ?162                 ?32                 	;0
40  31   ECHO/40                   ?0        33:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
41  32   INCLUDE_OR_EVAL/73        ?15       34:'topbar.php'      ?0                  	;2
42  33   ECHO/40                   ?0        35:'					</div>
					<h4 class="page-title">Mass Edit Lines <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
43  34   ISSET_ISEMPTY_CV/197      #28=      16?1                 ?0                  	;33554432
44  34   JMPZ_EX/46                #28=      #28                  ?48                 	;0	>>48
45  34   FETCH_CONSTANT/99         #29=      ?0                   36:'STATUS_SUCCESS' 	;16
46  34   IS_EQUAL/17               #30=      16?1                 #29                 	;0
47  34   BOOL/52                   #28=      #30                  ?0                  	;0
48  34   BOOL_NOT/13               #31=      #28                  ?0                  	;0	<<44
49  34   JMPZ/43                   ?0        #31                  ?51                 	;0	>>51
50  35   GOTO/253                  ?0        ?11                  ?39                 	;0
51  37   GOTO/253                  ?0        ?10                  ?40                 	;0	<<49
52  40   ECHO/40                   ?0        41:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="max_connections" name="c_max_connections">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="max_connections">Max Connections</label>
													<div class="col-md-2">
														<input disabled type="text" class="form-control text-center" id="max_connections" name="max_connections" value="1">
													</div>
													<label class="col-md-1 col-form-label" for="exp_date">Expiry</label>
													<div class="col-md-3">
														<input disabled type="text" disabled class="form-control text-center date" id="exp_date" name="exp_date" value="" data-toggle="date-picker" data-single-date-picker="true">
													</div>
													<div class="col-md-1">
														<div class="custom-control custom-checkbox mt-1">
															<input disabled type="checkbox" class="custom-control-input" id="no_expire" name="no_expire">
															<label class="custom-control-label" for="no_expire">Never</label>
														</div>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="exp_date" name="c_exp_date">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="admin_notes" name="c_admin_notes">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="admin_notes">Admin Notes</label>
													<div class="col-md-8">
														<textarea disabled id="admin_notes" name="admin_notes" class="form-control" rows="3" placeholder=""></textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="reseller_notes" name="c_reseller_notes">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="reseller_notes">Reseller Notes</label>
													<div class="col-md-8">
														<textarea disabled id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder=""></textarea>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="force_server_id" name="c_force_server_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="force_server_id">Forced Connection</label>
													<div class="col-md-8">
														<select disabled name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">
															<option selected value="0">Disabled</option>
															' ?0                  	;0
53  41   FE_RESET_R/77             $32=      16?2                 ?63                 	;0
54  41   FE_FETCH_R/78             ?0        $32                  16?3                	;63	>>63	<<62
55  42   ECHO/40                   ?0        42:'															<option value="' ?0                  	;0
56  43   FETCH_DIM_R/81            $33=      16?3                 43:'id'             	;0
57  43   ECHO/40                   ?0        $33                  ?0                  	;0
58  44   ECHO/40                   ?0        44:'">'              ?0                  	;0
59  45   FETCH_DIM_R/81            $34=      16?3                 45:'server_name'    	;0
60  45   ECHO/40                   ?0        $34                  ?0                  	;0
61  46   ECHO/40                   ?0        46:'</option>
															' ?0                  	;0
62  47   JMP/42                    ?0        ?54                  ?0                  	;0	>>54
63  47   FE_FREE/127               ?0        $32                  ?0                  	;0	<<53
64  50   ECHO/40                   ?0        47:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="is_stalker" data-type="switch" name="c_is_stalker">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="is_stalker">Ministra Portal</label>
													<div class="col-md-2">
														<input disabled name="is_stalker" id="is_stalker" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="is_restreamer">Restreamer</label>
													<div class="col-md-2">
														<input disabled name="is_restreamer" id="is_restreamer" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="is_restreamer" data-type="switch" name="c_is_restreamer">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="is_isplock" data-type="switch" name="c_is_isplock">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="is_isplock">Lock to ISP</label>
													<div class="col-md-2">
														<input disabled name="is_isplock" id="is_isplock" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-5 col-form-label" for="reset_isp_lock">Reset Current ISP</label>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" name="reset_isp_lock">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="is_trial" data-type="switch" name="c_is_trial">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="is_trial">Trial Account</label>
													<div class="col-md-2">
														<input disabled name="is_trial" id="is_trial" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-2 col-form-label" for="access_output">Access Output</label>
													<div class="col-md-3">
														' ?0                  	;0
65  51   GOTO/253                  ?0        ?66                  ?48                 	;0
66  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'Bf80879c11cDdCC0'	;0
67  53   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
68  53   FE_RESET_R/77             $36=      $35                  ?84                 	;0
69  53   FE_FETCH_R/78             ?0        $36                  16?4                	;84	>>84	<<83
70  54   ECHO/40                   ?0        51:'														<div class="checkbox form-check-inline">
															<input disabled class="output" data-size="large" type="checkbox" id="access_output_' ?0                  	;0
71  55   FETCH_DIM_R/81            $37=      16?4                 52:'access_output_id'	;0
72  55   ECHO/40                   ?0        $37                  ?0                  	;0
73  56   ECHO/40                   ?0        53:'" name="access_output[]" value="' ?0                  	;0
74  57   FETCH_DIM_R/81            $38=      16?4                 54:'access_output_id'	;0
75  57   ECHO/40                   ?0        $38                  ?0                  	;0
76  58   ECHO/40                   ?0        55:'" checked>
															<label for="access_output_' ?0                  	;0
77  59   FETCH_DIM_R/81            $39=      16?4                 56:'access_output_id'	;0
78  59   ECHO/40                   ?0        $39                  ?0                  	;0
79  60   ECHO/40                   ?0        57:'"> '             ?0                  	;0
80  61   FETCH_DIM_R/81            $40=      16?4                 58:'output_name'    	;0
81  61   ECHO/40                   ?0        $40                  ?0                  	;0
82  62   ECHO/40                   ?0        59:' </label>
														</div>
														' ?0                  	;0
83  63   JMP/42                    ?0        ?69                  ?0                  	;0	>>69
84  63   FE_FREE/127               ?0        $36                  ?0                  	;0	<<68
85  66   ECHO/40                   ?0        60:'													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="access_output" data-type="output" name="c_access_output">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="forced_country" name="c_forced_country">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="forced_country">Forced Country</label>
													<div class="col-md-8">
														<select disabled name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
86  67   FE_RESET_R/77             $41=      16?5                 ?96                 	;0
87  67   FE_FETCH_R/78             ?0        $41                  16?6                	;96	>>96	<<95
88  68   ECHO/40                   ?0        61:'															<option value="' ?0                  	;0
89  69   FETCH_DIM_R/81            $42=      16?6                 62:'id'             	;0
90  69   ECHO/40                   ?0        $42                  ?0                  	;0
91  70   ECHO/40                   ?0        63:'">'              ?0                  	;0
92  71   FETCH_DIM_R/81            $43=      16?6                 64:'name'           	;0
93  71   ECHO/40                   ?0        $43                  ?0                  	;0
94  72   ECHO/40                   ?0        65:'</option>
															' ?0                  	;0
95  73   JMP/42                    ?0        ?87                  ?0                  	;0	>>87
96  73   FE_FREE/127               ?0        $41                  ?0                  	;0	<<86
97  76   GOTO/253                  ?0        ?98                  ?66                 	;0
98  78   ECHO/40                   ?0        67:'														</select>
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
												<div class="form-group row mb-4">
													<table id="datatable-bouquets" class="table table-borderless mb-0">
														<thead class="bg-light">
															<tr>
																<th class="text-center">ID</th>
																<th>Bouquet Name</th>
																<th class="text-center">Streams</th>
                                                                <th class="text-center">Movies</th>
                                                                <th class="text-center">Series</th>
																<th class="text-center">Stations</th>
															</tr>
														</thead>
														<tbody>
															' ?0                  	;0
99  79   INIT_FCALL_BY_NAME/59     ?0        ?0                   68:'f964b9222b35Addd'	;0
100 79   DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
101 79   FE_RESET_R/77             $45=      $44                  ?159                	;0
102 79   FE_FETCH_R/78             ?0        $45                  16?7                	;159	>>159	<<158
103 80   NOP/0                     ?0        ?0                   ?0                  	;1
104 80   GOTO/253                  ?0        ?105                 ?70                 	;0
105 82   ECHO/40                   ?0        71:'															<tr>
																<td class="text-center">' ?0                  	;0
106 83   FETCH_DIM_R/81            $46=      16?7                 72:'id'             	;0
107 83   ECHO/40                   ?0        $46                  ?0                  	;0
108 84   ECHO/40                   ?0        73:'</td>
																<td>' ?0                  	;0
109 85   FETCH_DIM_R/81            $47=      16?7                 74:'bouquet_name'   	;0
110 85   ECHO/40                   ?0        $47                  ?0                  	;0
111 86   ECHO/40                   ?0        75:'</td>
																<td class="text-center">' ?0                  	;0
112 87   NOP/0                     ?0        ?0                   ?0                  	;1
113 87   GOTO/253                  ?0        ?114                 ?76                 	;0
114 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'count'          	;1
115 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'json_decode'    	;2
116 89   FETCH_DIM_FUNC_ARG/93     $48=      16?7                 81:'bouquet_channels'	;1
117 89   SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
118 89   SEND_VAL_EX/116           ?96       82:true              ?2                  	;0
119 89   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
120 89   SEND_VAR_NO_REF_EX/50     ?80       $49                  ?1                  	;0
121 89   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
122 89   ECHO/40                   ?0        $50                  ?0                  	;0
123 90   ECHO/40                   ?0        83:'</td>
                                                                <td class="text-center">' ?0                  	;0
124 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'count'          	;1
125 91   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'json_decode'    	;2
126 91   FETCH_DIM_FUNC_ARG/93     $51=      16?7                 88:'bouquet_movies' 	;1
127 91   SEND_VAR_EX/66            ?80       $51                  ?1                  	;0
128 91   SEND_VAL_EX/116           ?96       89:true              ?2                  	;0
129 91   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
130 91   SEND_VAR_NO_REF_EX/50     ?80       $52                  ?1                  	;0
131 91   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
132 91   ECHO/40                   ?0        $53                  ?0                  	;0
133 92   ECHO/40                   ?0        90:'</td>
																<td class="text-center">' ?0                  	;0
134 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'count'          	;1
135 93   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'json_decode'    	;2
136 93   FETCH_DIM_FUNC_ARG/93     $54=      16?7                 95:'bouquet_series' 	;1
137 93   SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
138 93   SEND_VAL_EX/116           ?96       96:true              ?2                  	;0
139 93   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
140 93   SEND_VAR_NO_REF_EX/50     ?80       $55                  ?1                  	;0
141 93   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
142 93   ECHO/40                   ?0        $56                  ?0                  	;0
143 94   NOP/0                     ?0        ?0                   ?0                  	;1
144 94   GOTO/253                  ?0        ?145                 ?97                 	;0
145 96   ECHO/40                   ?0        98:'</td>
                                                                <td class="text-center">' ?0                  	;0
146 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   99:'count'          	;1
147 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'json_decode'   	;2
148 97   FETCH_DIM_FUNC_ARG/93     $57=      16?7                 103:'bouquet_radios'	;1
149 97   SEND_VAR_EX/66            ?80       $57                  ?1                  	;0
150 97   SEND_VAL_EX/116           ?96       104:true             ?2                  	;0
151 97   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
152 97   SEND_VAR_NO_REF_EX/50     ?80       $58                  ?1                  	;0
153 97   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
154 97   ECHO/40                   ?0        $59                  ?0                  	;0
155 98   ECHO/40                   ?0        105:'</td>
															</tr>
															' ?0                  	;0
156 100  NOP/0                     ?0        ?0                   ?0                  	;1
157 100  GOTO/253                  ?0        ?158                 ?106                	;0
158 101  JMP/42                    ?0        ?102                 ?0                  	;0	>>102
159 101  FE_FREE/127               ?0        $45                  ?0                  	;0	<<101
160 104  ECHO/40                   ?0        107:'														</tbody>
													</table>
													<div class="custom-control col-md-12 custom-checkbox text-center" style="margin-top:20px;">
														<input type="checkbox" class="custom-control-input" id="c_bouquets" data-name="bouquets" data-type="bouquet" name="c_bouquets">
														<label class="custom-control-label" for="c_bouquets">Tick this box to apply the above bouquets to all selected lines. Selecting none will remove bouquets from lines.</label>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info">Toggle Bouquets</a>
												<input name="submit_line" type="submit" class="btn btn-primary" value="Mass Edit" />
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
161 105  GOTO/253                  ?0        ?214                 ?108                	;0
162 107  ECHO/40                   ?0        109:'                                                </select>
                                            </div>
                                            <label class="col-md-1 col-form-label text-center" for="reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();">CLEAR</button></label>
											<div class="col-md-2">
												<select id="filter" class="form-control" data-toggle="select2">
													<option value="" selected>No Filter</option>
													<option value="1">Active</option>
													<option value="2">Disabled</option>
													<option value="3">Banned</option>
													<option value="4">Expired</option>
													<option value="5">Trial</option>
                                                    <option value="6">Restreamer</option>
                                                    <option value="7">Ministra</option>
												</select>
											</div>
											<div class="col-md-2 col-8">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
163 108  FE_RESET_R/77             $60=      110:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?179                	;0
164 108  FE_FETCH_R/78             ?0        $60                  16?8                	;179	>>179	<<178
165 109  ECHO/40                   ?0        111:'													<option' ?0                  	;0
166 110  FETCH_DIM_R/81            $61=      16?9                 112:'default_entries'	;0
167 110  IS_EQUAL/17               #62=      $61                  16?8                	;0
168 110  BOOL_NOT/13               #63=      #62                  ?0                  	;0
169 110  JMPZ/43                   ?0        #63                  ?172                	;0	>>172
170 111  NOP/0                     ?0        ?0                   ?0                  	;1
171 111  GOTO/253                  ?0        ?173                 ?113                	;0
172 113  ECHO/40                   ?0        114:' selected'      ?0                  	;0	<<169
173 115  ECHO/40                   ?0        115:' value="'       ?0                  	;0
174 116  ECHO/40                   ?0        16?8                 ?0                  	;0
175 117  ECHO/40                   ?0        116:'">'             ?0                  	;0
176 118  ECHO/40                   ?0        16?8                 ?0                  	;0
177 119  ECHO/40                   ?0        117:'</option>
													' ?0                  	;0
178 120  JMP/42                    ?0        ?164                 ?0                  	;0	>>164
179 120  FE_FREE/127               ?0        $60                  ?0                  	;0	<<163
180 123  ECHO/40                   ?0        118:'												</select>
											</div>
											<div class="col-md-1 col-2">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleUsers()">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-mass" class="table table-borderless mb-0" style="overflow-x:auto;">
												<thead class="bg-light">
													<tr>
														<th class="text-center">ID</th>
														<th>Username</th>
														<th></th>
														<th>Owner</th>
														<th class="text-center">Status</th>
														<th></th>
														<th class="text-center">Trial</th>
                                                        <th class="text-center">Restreamer</th>
                                                        <th></th>
                                                        <th class="text-center">Connections</th>
														<th class="text-center">Expiration</th>
														<th></th>
														<th></th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="user-details">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													To mass edit any of the below options, tick the checkbox next to it and change the input value.
												</p>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="member_id" name="c_member_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="member_id">Owner</label>
													<div class="col-md-8">
														<select disabled name="member_id" id="member_id" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
181 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   119:'b36Ce90E79Fb0e76'	;0
182 124  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
183 124  FE_RESET_R/77             $65=      $64                  ?193                	;0
184 124  FE_FETCH_R/78             ?0        $65                  16?10               	;193	>>193	<<192
185 125  ECHO/40                   ?0        121:'															<option value="' ?0                  	;0
186 126  FETCH_DIM_R/81            $66=      16?10                122:'id'            	;0
187 126  ECHO/40                   ?0        $66                  ?0                  	;0
188 127  ECHO/40                   ?0        123:'">'             ?0                  	;0
189 128  FETCH_DIM_R/81            $67=      16?10                124:'username'      	;0
190 128  ECHO/40                   ?0        $67                  ?0                  	;0
191 129  ECHO/40                   ?0        125:'</option>
															' ?0                  	;0
192 130  JMP/42                    ?0        ?184                 ?0                  	;0	>>184
193 130  FE_FREE/127               ?0        $65                  ?0                  	;0	<<183
194 132  GOTO/253                  ?0        ?52                  ?126                	;0
195 134  ASSIGN/38                 ?56       16?11                127:'Mass Edit Lines'	;0
196 135  INCLUDE_OR_EVAL/73        ?57       128:'header.php'     ?0                  	;2
197 136  ECHO/40                   ?0        129:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
198 137  FETCH_IS/89               $70=      130:'_SERVER'        ?0                  	;0
199 137  ISSET_ISEMPTY_DIM_OBJ/115 #71=      $70                  131:'HTTP_X_REQUESTED_WITH'	;16777216
200 137  BOOL_NOT/13               #72=      #71                  ?0                  	;0
201 137  JMPZ_EX/46                #72=      #72                  ?209                	;0	>>209
202 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'strtolower'    	;1
203 137  FETCH_FUNC_ARG/92         $73=      134:'_SERVER'        ?0                  	;1
204 137  FETCH_DIM_FUNC_ARG/93     $74=      $73                  135:'HTTP_X_REQUESTED_WITH'	;1
205 137  SEND_VAR_EX/66            ?80       $74                  ?1                  	;0
206 137  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
207 137  IS_EQUAL/17               #76=      $75                  136:'xmlhttprequest'	;0
208 137  BOOL/52                   #72=      #76                  ?0                  	;0
209 137  BOOL_NOT/13               #77=      #72                  ?0                  	;0	<<201
210 137  JMPZ/43                   ?0        #77                  ?212                	;0	>>212
211 138  GOTO/253                  ?0        ?40                  ?137                	;0
212 140  ECHO/40                   ?0        138:' style="display: none;"' ?0                  	;0	<<210
213 141  GOTO/253                  ?0        ?40                  ?139                	;0
214 143  INCLUDE_OR_EVAL/73        ?66       140:'footer.php'     ?0                  	;2
215 144  NOP/0                     ?0        141:1                ?0                  	;4294967295
*/

?>