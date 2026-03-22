<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?207                 ?0                  	;0	>>207
1   5    ASSIGN/38                 ?0        16?0                 1:'Mass Edit Devices'	;0
2   6    INCLUDE_OR_EVAL/73        ?1        2:'header.php'       ?0                  	;2
3   7    ECHO/40                   ?0        3:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
4   8    FETCH_IS/89               $14=      4:'_SERVER'          ?0                  	;0
5   8    ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  5:'HTTP_X_REQUESTED_WITH'	;16777216
6   8    BOOL_NOT/13               #16=      #15                  ?0                  	;0
7   8    JMPZ_EX/46                #16=      #16                  ?15                 	;0	>>15
8   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'strtolower'      	;1
9   8    FETCH_FUNC_ARG/92         $17=      8:'_SERVER'          ?0                  	;1
10  8    FETCH_DIM_FUNC_ARG/93     $18=      $17                  9:'HTTP_X_REQUESTED_WITH'	;1
11  8    SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
12  8    DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
13  8    IS_EQUAL/17               #20=      $19                  10:'xmlhttprequest' 	;0
14  8    BOOL/52                   #16=      #20                  ?0                  	;0
15  8    BOOL_NOT/13               #21=      #16                  ?0                  	;0	<<7
16  8    JMPZ/43                   ?0        #21                  ?18                 	;0	>>18
17  9    GOTO/253                  ?0        ?62                  ?11                 	;0
18  11   ECHO/40                   ?0        12:' style="display: none;"' ?0                  	;0	<<16
19  12   GOTO/253                  ?0        ?62                  ?13                 	;0
20  14   FE_RESET_R/77             $22=      16?1                 ?30                 	;0
21  14   FE_FETCH_R/78             ?0        $22                  16?2                	;30	>>30	<<29
22  15   ECHO/40                   ?0        14:'															<option value="' ?0                  	;0
23  16   FETCH_DIM_R/81            $23=      16?2                 15:'id'             	;0
24  16   ECHO/40                   ?0        $23                  ?0                  	;0
25  17   ECHO/40                   ?0        16:'">'              ?0                  	;0
26  18   FETCH_DIM_R/81            $24=      16?2                 17:'server_name'    	;0
27  18   ECHO/40                   ?0        $24                  ?0                  	;0
28  19   ECHO/40                   ?0        18:'</option>
															' ?0                  	;0
29  20   JMP/42                    ?0        ?21                  ?0                  	;0	>>21
30  20   FE_FREE/127               ?0        $22                  ?0                  	;0	<<20
31  23   ECHO/40                   ?0        19:'														</select>
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
32  24   FE_RESET_R/77             $25=      16?3                 ?42                 	;0
33  24   FE_FETCH_R/78             ?0        $25                  16?4                	;42	>>42	<<41
34  25   ECHO/40                   ?0        20:'															<option value="' ?0                  	;0
35  26   FETCH_DIM_R/81            $26=      16?4                 21:'id'             	;0
36  26   ECHO/40                   ?0        $26                  ?0                  	;0
37  27   ECHO/40                   ?0        22:'">'              ?0                  	;0
38  28   FETCH_DIM_R/81            $27=      16?4                 23:'name'           	;0
39  28   ECHO/40                   ?0        $27                  ?0                  	;0
40  29   ECHO/40                   ?0        24:'</option>
															' ?0                  	;0
41  30   JMP/42                    ?0        ?33                  ?0                  	;0	>>33
42  30   FE_FREE/127               ?0        $25                  ?0                  	;0	<<32
43  33   GOTO/253                  ?0        ?123                 ?25                 	;0
44  35   ECHO/40                   ?0        26:'</th>
                                                        <th class="text-center">' ?0                  	;0
45  36   FETCH_DIM_R/81            $28=      16?5                 27:'trial'          	;0
46  36   ECHO/40                   ?0        $28                  ?0                  	;0
47  37   ECHO/40                   ?0        28:'</th>
                                                        <th class="text-center">' ?0                  	;0
48  38   FETCH_DIM_R/81            $29=      16?5                 29:'expiration'     	;0
49  38   ECHO/40                   ?0        $29                  ?0                  	;0
50  39   ECHO/40                   ?0        30:'</th>
                                                        <th class="text-center">' ?0                  	;0
51  40   GOTO/253                  ?0        ?105                 ?31                 	;0
52  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'intval'         	;1
53  42   FETCH_DIM_FUNC_ARG/93     $30=      16?6                 34:'id'             	;1
54  42   SEND_VAR_EX/66            ?80       $30                  ?1                  	;0
55  42   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
56  42   ECHO/40                   ?0        $31                  ?0                  	;0
57  43   ECHO/40                   ?0        35:'" selected="selected">' ?0                  	;0
58  44   FETCH_DIM_R/81            $32=      16?6                 36:'username'       	;0
59  44   ECHO/40                   ?0        $32                  ?0                  	;0
60  45   ECHO/40                   ?0        37:'</option>
                                                    ' ?0                  	;0
61  47   GOTO/253                  ?0        ?83                  ?38                 	;0
62  50   ECHO/40                   ?0        39:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
63  51   INCLUDE_OR_EVAL/73        ?21       40:'topbar.php'      ?0                  	;2
64  52   ECHO/40                   ?0        41:'					</div>
					<h4 class="page-title">Mass Edit Devices <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
65  53   ISSET_ISEMPTY_CV/197      #34=      16?7                 ?0                  	;33554432
66  53   JMPZ_EX/46                #34=      #34                  ?70                 	;0	>>70
67  53   FETCH_CONSTANT/99         #35=      ?0                   42:'STATUS_SUCCESS' 	;16
68  53   IS_EQUAL/17               #36=      16?7                 #35                 	;0
69  53   BOOL/52                   #34=      #36                  ?0                  	;0
70  53   BOOL_NOT/13               #37=      #34                  ?0                  	;0	<<66
71  53   JMPZ/43                   ?0        #37                  ?73                 	;0	>>73
72  54   GOTO/253                  ?0        ?188                 ?45                 	;0
73  56   GOTO/253                  ?0        ?187                 ?46                 	;0	<<71
74  58   FETCH_DIM_R/81            $38=      16?5                 47:'owner'          	;0
75  58   ECHO/40                   ?0        $38                  ?0                  	;0
76  59   ECHO/40                   ?0        48:'</th>
                                                        <th class="text-center">' ?0                  	;0
77  60   FETCH_DIM_R/81            $39=      16?5                 49:'status'         	;0
78  60   ECHO/40                   ?0        $39                  ?0                  	;0
79  61   ECHO/40                   ?0        50:'</th>
                                                        <th class="text-center">' ?0                  	;0
80  62   FETCH_DIM_R/81            $40=      16?5                 51:'online'         	;0
81  62   ECHO/40                   ?0        $40                  ?0                  	;0
82  63   GOTO/253                  ?0        ?44                  ?52                 	;0
83  65   ECHO/40                   ?0        53:'                                                </select>
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
												</select>
											</div>
											<div class="col-md-2 col-8">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
84  66   FE_RESET_R/77             $41=      54:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?100                	;0
85  66   FE_FETCH_R/78             ?0        $41                  16?8                	;100	>>100	<<99
86  67   ECHO/40                   ?0        55:'													<option' ?0                  	;0
87  68   FETCH_DIM_R/81            $42=      16?9                 56:'default_entries'	;0
88  68   IS_EQUAL/17               #43=      $42                  16?8                	;0
89  68   BOOL_NOT/13               #44=      #43                  ?0                  	;0
90  68   JMPZ/43                   ?0        #44                  ?93                 	;0	>>93
91  69   NOP/0                     ?0        ?0                   ?0                  	;1
92  69   GOTO/253                  ?0        ?94                  ?57                 	;0
93  71   ECHO/40                   ?0        58:' selected'       ?0                  	;0	<<90
94  73   ECHO/40                   ?0        59:' value="'        ?0                  	;0
95  74   ECHO/40                   ?0        16?8                 ?0                  	;0
96  75   ECHO/40                   ?0        60:'">'              ?0                  	;0
97  76   ECHO/40                   ?0        16?8                 ?0                  	;0
98  77   ECHO/40                   ?0        61:'</option>
													' ?0                  	;0
99  78   JMP/42                    ?0        ?85                  ?0                  	;0	>>85
100 78   FE_FREE/127               ?0        $41                  ?0                  	;0	<<84
101 81   ECHO/40                   ?0        62:'												</select>
											</div>
											<div class="col-md-1 col-2">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleUsers()">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-mass" class="table table-borderless mb-0" style="overflow-x:auto;">
												<thead class="bg-light">
													<tr>
														<th class="text-center">' ?0                  	;0
102 82   FETCH_DIM_R/81            $45=      16?5                 63:'id'             	;0
103 82   ECHO/40                   ?0        $45                  ?0                  	;0
104 83   GOTO/253                  ?0        ?216                 ?64                 	;0
105 85   FETCH_DIM_R/81            $46=      16?5                 65:'actions'        	;0
106 85   ECHO/40                   ?0        $46                  ?0                  	;0
107 86   ECHO/40                   ?0        66:'</th>
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
108 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'b36CE90E79Fb0E76'	;0
109 87   DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
110 87   FE_RESET_R/77             $48=      $47                  ?120                	;0
111 87   FE_FETCH_R/78             ?0        $48                  16?10               	;120	>>120	<<119
112 88   ECHO/40                   ?0        69:'															<option value="' ?0                  	;0
113 89   FETCH_DIM_R/81            $49=      16?10                70:'id'             	;0
114 89   ECHO/40                   ?0        $49                  ?0                  	;0
115 90   ECHO/40                   ?0        71:'">'              ?0                  	;0
116 91   FETCH_DIM_R/81            $50=      16?10                72:'username'       	;0
117 91   ECHO/40                   ?0        $50                  ?0                  	;0
118 92   ECHO/40                   ?0        73:'</option>
															' ?0                  	;0
119 93   JMP/42                    ?0        ?111                 ?0                  	;0	>>111
120 93   FE_FREE/127               ?0        $48                  ?0                  	;0	<<110
121 96   ECHO/40                   ?0        74:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="exp_date" name="c_exp_date">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="exp_date">Expiry</label>
													<div class="col-md-3">
														<input disabled type="text" disabled class="form-control text-center date" id="exp_date" name="exp_date" value="" data-toggle="date-picker" data-single-date-picker="true">
													</div>
													<div class="col-md-1">
														<div class="custom-control custom-checkbox mt-1">
															<input disabled type="checkbox" class="custom-control-input" id="no_expire" name="no_expire">
															<label class="custom-control-label" for="no_expire">Never</label>
														</div>
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
122 97   GOTO/253                  ?0        ?20                  ?75                 	;0
123 99   ECHO/40                   ?0        76:'														</select>
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
													<label class="col-md-3 col-form-label" for="is_trial">Trial Device</label>
													<div class="col-md-2">
														<input disabled name="is_trial" id="is_trial" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <label class="col-md-5 col-form-label" for="reset_device_lock">Reset Device Lock</label>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" name="reset_device_lock">
														<label></label>
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
124 100  INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'f964B9222B35AddD'	;0
125 100  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
126 100  FE_RESET_R/77             $52=      $51                  ?184                	;0
127 100  FE_FETCH_R/78             ?0        $52                  16?11               	;184	>>184	<<183
128 101  NOP/0                     ?0        ?0                   ?0                  	;1
129 101  GOTO/253                  ?0        ?130                 ?79                 	;0
130 103  ECHO/40                   ?0        80:'															<tr>
																<td class="text-center">' ?0                  	;0
131 104  FETCH_DIM_R/81            $53=      16?11                81:'id'             	;0
132 104  ECHO/40                   ?0        $53                  ?0                  	;0
133 105  ECHO/40                   ?0        82:'</td>
																<td>' ?0                  	;0
134 106  FETCH_DIM_R/81            $54=      16?11                83:'bouquet_name'   	;0
135 106  ECHO/40                   ?0        $54                  ?0                  	;0
136 107  ECHO/40                   ?0        84:'</td>
																<td class="text-center">' ?0                  	;0
137 108  NOP/0                     ?0        ?0                   ?0                  	;1
138 108  GOTO/253                  ?0        ?139                 ?85                 	;0
139 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'count'          	;1
140 110  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'json_decode'    	;2
141 110  FETCH_DIM_FUNC_ARG/93     $55=      16?11                90:'bouquet_channels'	;1
142 110  SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
143 110  SEND_VAL_EX/116           ?96       91:true              ?2                  	;0
144 110  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
145 110  SEND_VAR_NO_REF_EX/50     ?80       $56                  ?1                  	;0
146 110  DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
147 110  ECHO/40                   ?0        $57                  ?0                  	;0
148 111  ECHO/40                   ?0        92:'</td>
                                                                <td class="text-center">' ?0                  	;0
149 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'count'          	;1
150 112  INIT_FCALL_BY_NAME/59     ?0        ?0                   95:'json_decode'    	;2
151 112  FETCH_DIM_FUNC_ARG/93     $58=      16?11                97:'bouquet_movies' 	;1
152 112  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
153 112  SEND_VAL_EX/116           ?96       98:true              ?2                  	;0
154 112  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
155 112  SEND_VAR_NO_REF_EX/50     ?80       $59                  ?1                  	;0
156 112  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
157 112  ECHO/40                   ?0        $60                  ?0                  	;0
158 113  ECHO/40                   ?0        99:'</td>
																<td class="text-center">' ?0                  	;0
159 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'count'         	;1
160 114  INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'json_decode'   	;2
161 114  FETCH_DIM_FUNC_ARG/93     $61=      16?11                104:'bouquet_series'	;1
162 114  SEND_VAR_EX/66            ?80       $61                  ?1                  	;0
163 114  SEND_VAL_EX/116           ?96       105:true             ?2                  	;0
164 114  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
165 114  SEND_VAR_NO_REF_EX/50     ?80       $62                  ?1                  	;0
166 114  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
167 114  ECHO/40                   ?0        $63                  ?0                  	;0
168 115  NOP/0                     ?0        ?0                   ?0                  	;1
169 115  GOTO/253                  ?0        ?170                 ?106                	;0
170 117  ECHO/40                   ?0        107:'</td>
                                                                <td class="text-center">' ?0                  	;0
171 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   108:'count'         	;1
172 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'json_decode'   	;2
173 118  FETCH_DIM_FUNC_ARG/93     $64=      16?11                112:'bouquet_radios'	;1
174 118  SEND_VAR_EX/66            ?80       $64                  ?1                  	;0
175 118  SEND_VAL_EX/116           ?96       113:true             ?2                  	;0
176 118  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
177 118  SEND_VAR_NO_REF_EX/50     ?80       $65                  ?1                  	;0
178 118  DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
179 118  ECHO/40                   ?0        $66                  ?0                  	;0
180 119  ECHO/40                   ?0        114:'</td>
															</tr>
															' ?0                  	;0
181 121  NOP/0                     ?0        ?0                   ?0                  	;1
182 121  GOTO/253                  ?0        ?183                 ?115                	;0
183 122  JMP/42                    ?0        ?127                 ?0                  	;0	>>127
184 122  FE_FREE/127               ?0        $52                  ?0                  	;0	<<126
185 125  ECHO/40                   ?0        116:'														</tbody>
													</table>
													<div class="custom-control col-md-12 custom-checkbox text-center" style="margin-top:20px;">
														<input type="checkbox" class="custom-control-input" id="c_bouquets" data-name="bouquets" data-type="bouquet" name="c_bouquets">
														<label class="custom-control-label" for="c_bouquets">Tick this box to apply the above bouquets to all selected devices. Selecting none will remove bouquets from devices.</label>
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
												<input name="submit_device" type="submit" class="btn btn-primary" value="Mass Edit" />
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
186 126  GOTO/253                  ?0        ?224                 ?117                	;0
187 128  ECHO/40                   ?0        118:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass edit of devices was successfully executed!
				</div>
				' ?0                  	;0
188 130  ECHO/40                   ?0        119:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST">
							<input type="hidden" name="devices_selected" id="devices_selected" value="" />
							<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-group mr-1"></i>
											<span class="d-none d-sm-inline">Devices</span>
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
												<input type="text" class="form-control" id="user_search" value="" placeholder="Search Devices...">
											</div>
                                            <div class="col-md-3">
                                                <select id="reseller_search" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
189 131  FETCH_STATIC_PROP_IS/176  $67=      120:'rRequest'       121:'XUI'           	;0
190 131  ISSET_ISEMPTY_DIM_OBJ/115 #68=      $67                  123:'owner'         	;33554432
191 131  JMPZ_EX/46                #68=      #68                  ?202                	;0	>>202
192 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'ba89228DC958ce05'	;1
193 131  INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'intval'        	;1
194 131  FETCH_STATIC_PROP_FUNC_ARG/177 $69=      128:'rRequest'       129:'XUI'           	;1
195 131  FETCH_DIM_FUNC_ARG/93     $70=      $69                  131:'owner'         	;1
196 131  SEND_VAR_EX/66            ?80       $70                  ?1                  	;0
197 131  DO_FCALL_BY_NAME/131      $71=      ?0                   ?0                  	;0
198 131  SEND_VAR_NO_REF_EX/50     ?80       $71                  ?1                  	;0
199 131  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
200 131  ASSIGN/38                 $73=      16?6                 $72                 	;0
201 131  BOOL/52                   #68=      $73                  ?0                  	;0
202 131  BOOL_NOT/13               #74=      #68                  ?0                  	;0	<<191
203 131  JMPZ/43                   ?0        #74                  ?205                	;0	>>205
204 132  GOTO/253                  ?0        ?61                  ?132                	;0
205 134  ECHO/40                   ?0        133:'                                                    <option value="' ?0                  	;0	<<203
206 135  GOTO/253                  ?0        ?52                  ?134                	;0
207 137  INCLUDE_OR_EVAL/73        ?63       135:'session.php'    ?0                  	;2	<<0
208 138  INCLUDE_OR_EVAL/73        ?64       136:'functions.php'  ?0                  	;2
209 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'E6d500E19634d513'	;0
210 139  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
211 139  JMPZ/43                   ?0        $77                  ?213                	;0	>>213
212 140  GOTO/253                  ?0        ?215                 ?139                	;0
213 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'e72F42A93714BA87'	;0	<<211
214 142  DO_FCALL_BY_NAME/131      ?66       ?0                   ?0                  	;0
215 144  GOTO/253                  ?0        ?1                   ?142                	;0
216 146  ECHO/40                   ?0        143:'</th>
                                                        <th>' ?0                  	;0
217 147  FETCH_DIM_R/81            $79=      16?5                 144:'username'      	;0
218 147  ECHO/40                   ?0        $79                  ?0                  	;0
219 148  ECHO/40                   ?0        145:'</th>
                                                        <th class="text-center">' ?0                  	;0
220 149  FETCH_DIM_R/81            $80=      16?5                 146:'mac_address'   	;0
221 149  ECHO/40                   ?0        $80                  ?0                  	;0
222 150  ECHO/40                   ?0        147:'</th>
                                                        <th class="text-center">Device</th>
                                                        <th>' ?0                  	;0
223 151  GOTO/253                  ?0        ?74                  ?148                	;0
224 153  INCLUDE_OR_EVAL/73        ?69       149:'footer.php'     ?0                  	;2
225 154  NOP/0                     ?0        150:1                ?0                  	;4294967295
*/

?>