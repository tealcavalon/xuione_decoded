<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?104                 ?0                  	;0	>>104
1   5    ECHO/40                   ?0        1:'                                                </select>
                                            </div>
                                            <label class="col-md-1 col-form-label text-center" for="reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();">CLEAR</button></label>
											<div class="col-md-2">
												<select id="filter" class="form-control" data-toggle="select2">
													<option value="" selected>No Filter</option>
													<option value="1">Active</option>
													<option value="2">Disabled</option>
												</select>
											</div>
											<div class="col-md-2 col-8">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
2   6    FE_RESET_R/77             $8=       2:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?18                 	;0
3   6    FE_FETCH_R/78             ?0        $8                   16?0                	;18	>>18	<<17
4   7    ECHO/40                   ?0        3:'													<option' ?0                  	;0
5   8    FETCH_DIM_R/81            $9=       16?1                 4:'default_entries' 	;0
6   8    IS_EQUAL/17               #10=      $9                   16?0                	;0
7   8    BOOL_NOT/13               #11=      #10                  ?0                  	;0
8   8    JMPZ/43                   ?0        #11                  ?11                 	;0	>>11
9   9    NOP/0                     ?0        ?0                   ?0                  	;1
10  9    GOTO/253                  ?0        ?12                  ?5                  	;0
11  11   ECHO/40                   ?0        6:' selected'        ?0                  	;0	<<8
12  13   ECHO/40                   ?0        7:' value="'         ?0                  	;0
13  14   ECHO/40                   ?0        16?0                 ?0                  	;0
14  15   ECHO/40                   ?0        8:'">'               ?0                  	;0
15  16   ECHO/40                   ?0        16?0                 ?0                  	;0
16  17   ECHO/40                   ?0        9:'</option>
													' ?0                  	;0
17  18   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
18  18   FE_FREE/127               ?0        $8                   ?0                  	;0	<<2
19  21   ECHO/40                   ?0        10:'												</select>
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
                                                        <th>Owner</th>
                                                        <th class="text-center">IP</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Credits</th>
                                                        <th class="text-center">Users</th>
                                                        <th class="text-center">Lines</th>
                                                        <th class="text-center">MAGs</th>
                                                        <th class="text-center">Enigmas</th>
                                                        <th class="text-center">Last Login</th>
                                                        <th class="text-center">Actions</th>
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
														<input type="checkbox" class="activate" data-name="owner_id" name="c_owner_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="owner_id">Owner</label>
													<div class="col-md-8">
														<select disabled name="owner_id" id="owner_id" class="form-control select2" data-toggle="select2">
                                                            <option value="0">No Owner</option>
															' ?0                  	;0
20  22   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'b36ce90e79fb0e76'	;0
21  22   DO_FCALL_BY_NAME/131      $12=      ?0                   ?0                  	;0
22  22   FE_RESET_R/77             $13=      $12                  ?32                 	;0
23  22   FE_FETCH_R/78             ?0        $13                  16?2                	;32	>>32	<<31
24  23   ECHO/40                   ?0        13:'															<option value="' ?0                  	;0
25  24   FETCH_DIM_R/81            $14=      16?2                 14:'id'             	;0
26  24   ECHO/40                   ?0        $14                  ?0                  	;0
27  25   ECHO/40                   ?0        15:'">'              ?0                  	;0
28  26   FETCH_DIM_R/81            $15=      16?2                 16:'username'       	;0
29  26   ECHO/40                   ?0        $15                  ?0                  	;0
30  27   ECHO/40                   ?0        17:'</option>
															' ?0                  	;0
31  28   JMP/42                    ?0        ?23                  ?0                  	;0	>>23
32  28   FE_FREE/127               ?0        $13                  ?0                  	;0	<<22
33  30   GOTO/253                  ?0        ?73                  ?18                 	;0
34  32   ASSIGN/38                 ?8        16?3                 19:'Mass Edit Users'	;0
35  33   INCLUDE_OR_EVAL/73        ?9        20:'header.php'      ?0                  	;2
36  34   ECHO/40                   ?0        21:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
37  35   FETCH_IS/89               $18=      22:'_SERVER'         ?0                  	;0
38  35   ISSET_ISEMPTY_DIM_OBJ/115 #19=      $18                  23:'HTTP_X_REQUESTED_WITH'	;16777216
39  35   BOOL_NOT/13               #20=      #19                  ?0                  	;0
40  35   JMPZ_EX/46                #20=      #20                  ?48                 	;0	>>48
41  35   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'strtolower'     	;1
42  35   FETCH_FUNC_ARG/92         $21=      26:'_SERVER'         ?0                  	;1
43  35   FETCH_DIM_FUNC_ARG/93     $22=      $21                  27:'HTTP_X_REQUESTED_WITH'	;1
44  35   SEND_VAR_EX/66            ?80       $22                  ?1                  	;0
45  35   DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
46  35   IS_EQUAL/17               #24=      $23                  28:'xmlhttprequest' 	;0
47  35   BOOL/52                   #20=      #24                  ?0                  	;0
48  35   BOOL_NOT/13               #25=      #20                  ?0                  	;0	<<40
49  35   JMPZ/43                   ?0        #25                  ?51                 	;0	>>51
50  36   GOTO/253                  ?0        ?92                  ?29                 	;0
51  38   ECHO/40                   ?0        30:' style="display: none;"' ?0                  	;0	<<49
52  39   GOTO/253                  ?0        ?92                  ?31                 	;0
53  41   ECHO/40                   ?0        32:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass edit of users was successfully executed!
				</div>
				' ?0                  	;0
54  43   ECHO/40                   ?0        33:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST">
							<input type="hidden" name="users_selected" id="users_selected" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#user-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-group mr-1"></i>
											<span class="d-none d-sm-inline">Users</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#package-override" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-flower-tulip mr-1"></i>
											<span class="d-none d-sm-inline">Package Override</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="user-selection">
										<div class="row">
											<div class="col-md-3 col-6">
												<input type="text" class="form-control" id="user_search" value="" placeholder="Search Users...">
											</div>
											<div class="col-md-3">
                                                <select id="reseller_search" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
55  44   FETCH_STATIC_PROP_IS/176  $26=      34:'rRequest'        35:'XUI'            	;0
56  44   ISSET_ISEMPTY_DIM_OBJ/115 #27=      $26                  37:'owner'          	;33554432
57  44   JMPZ_EX/46                #27=      #27                  ?68                 	;0	>>68
58  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'bA89228DC958cE05'	;1
59  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'intval'         	;1
60  44   FETCH_STATIC_PROP_FUNC_ARG/177 $28=      42:'rRequest'        43:'XUI'            	;1
61  44   FETCH_DIM_FUNC_ARG/93     $29=      $28                  45:'owner'          	;1
62  44   SEND_VAR_EX/66            ?80       $29                  ?1                  	;0
63  44   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
64  44   SEND_VAR_NO_REF_EX/50     ?80       $30                  ?1                  	;0
65  44   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
66  44   ASSIGN/38                 $32=      16?4                 $31                 	;0
67  44   BOOL/52                   #27=      $32                  ?0                  	;0
68  44   BOOL_NOT/13               #33=      #27                  ?0                  	;0	<<57
69  44   JMPZ/43                   ?0        #33                  ?71                 	;0	>>71
70  45   GOTO/253                  ?0        ?122                 ?46                 	;0
71  47   ECHO/40                   ?0        47:'                                                    <option value="' ?0                  	;0	<<69
72  48   GOTO/253                  ?0        ?113                 ?48                 	;0
73  51   ECHO/40                   ?0        49:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="member_group_id" name="c_member_group_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="member_group_id">Member Group</label>
													<div class="col-md-8">
														<select disabled name="member_group_id" id="member_group_id" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
74  52   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'Ad052a625C6ac011'	;0
75  52   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
76  52   FE_RESET_R/77             $35=      $34                  ?89                 	;0
77  52   FE_FETCH_R/78             ?0        $35                  16?5                	;89	>>89	<<88
78  53   ECHO/40                   ?0        52:'															<option value="' ?0                  	;0
79  54   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'intval'         	;1
80  54   FETCH_DIM_FUNC_ARG/93     $36=      16?5                 55:'group_id'       	;1
81  54   SEND_VAR_EX/66            ?80       $36                  ?1                  	;0
82  54   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
83  54   ECHO/40                   ?0        $37                  ?0                  	;0
84  55   ECHO/40                   ?0        56:'">'              ?0                  	;0
85  56   FETCH_DIM_R/81            $38=      16?5                 57:'group_name'     	;0
86  56   ECHO/40                   ?0        $38                  ?0                  	;0
87  57   ECHO/40                   ?0        58:'</option>
															' ?0                  	;0
88  58   JMP/42                    ?0        ?77                  ?0                  	;0	>>77
89  58   FE_FREE/127               ?0        $35                  ?0                  	;0	<<76
90  61   ECHO/40                   ?0        59:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="reseller_dns" name="c_reseller_dns">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="reseller_dns">Reseller DNS</label>
													<div class="col-md-8">
														<input disabled type="text" class="form-control" id="reseller_dns" name="reseller_dns" value="">
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="status" data-type="switch" name="c_status">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="status">Enabled</label>
													<div class="col-md-2">
														<input disabled name="status" id="status" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
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
									<div class="tab-pane" id="package-override">
										<div class="row mb-4">
											<div class="col-12">
                                                <div class="alert alert-info" role="alert">
                                                    Leave the override cell blank to disable package override for the selected package.<br/>All packages are displayed below, however the users you have selected may not have access to a particular package.
                                                </div>
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
91  62   GOTO/253                  ?0        ?123                 ?60                 	;0
92  65   ECHO/40                   ?0        61:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
93  66   INCLUDE_OR_EVAL/73        ?31       62:'topbar.php'      ?0                  	;2
94  67   ECHO/40                   ?0        63:'					</div>
					<h4 class="page-title">Mass Edit Users <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
95  68   ISSET_ISEMPTY_CV/197      #40=      16?6                 ?0                  	;33554432
96  68   JMPZ_EX/46                #40=      #40                  ?100                	;0	>>100
97  68   FETCH_CONSTANT/99         #41=      ?0                   64:'STATUS_SUCCESS' 	;16
98  68   IS_EQUAL/17               #42=      16?6                 #41                 	;0
99  68   BOOL/52                   #40=      #42                  ?0                  	;0
100 68   BOOL_NOT/13               #43=      #40                  ?0                  	;0	<<96
101 68   JMPZ/43                   ?0        #43                  ?103                	;0	>>103
102 69   GOTO/253                  ?0        ?54                  ?67                 	;0
103 71   GOTO/253                  ?0        ?53                  ?68                 	;0	<<101
104 73   INCLUDE_OR_EVAL/73        ?36       69:'session.php'     ?0                  	;2	<<0
105 74   INCLUDE_OR_EVAL/73        ?37       70:'functions.php'   ?0                  	;2
106 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   71:'E6d500E19634D513'	;0
107 75   DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
108 75   JMPZ/43                   ?0        $46                  ?110                	;0	>>110
109 76   GOTO/253                  ?0        ?112                 ?73                 	;0
110 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   74:'E72F42a93714Ba87'	;0	<<108
111 78   DO_FCALL_BY_NAME/131      ?39       ?0                   ?0                  	;0
112 80   GOTO/253                  ?0        ?34                  ?76                 	;0
113 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'intval'         	;1
114 82   FETCH_DIM_FUNC_ARG/93     $48=      16?4                 79:'id'             	;1
115 82   SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
116 82   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
117 82   ECHO/40                   ?0        $49                  ?0                  	;0
118 83   ECHO/40                   ?0        80:'" selected="selected">' ?0                  	;0
119 84   FETCH_DIM_R/81            $50=      16?4                 81:'username'       	;0
120 84   ECHO/40                   ?0        $50                  ?0                  	;0
121 85   ECHO/40                   ?0        82:'</option>
                                                    ' ?0                  	;0
122 87   GOTO/253                  ?0        ?1                   ?83                 	;0
123 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   84:'d8c8284136938eF0'	;0
124 89   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
125 89   FE_RESET_R/77             $52=      $51                  ?163                	;0
126 89   FE_FETCH_R/78             ?0        $52                  16?7                	;163	>>163	<<162
127 90   NOP/0                     ?0        ?0                   ?0                  	;1
128 90   GOTO/253                  ?0        ?146                 ?86                 	;0
129 94   NOP/0                     ?0        ?0                   ?0                  	;1
130 94   GOTO/253                  ?0        ?162                 ?87                 	;0
131 96   ECHO/40                   ?0        88:'</td>
															<td class="text-center">' ?0                  	;0
132 97   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'intval'         	;1
133 97   FETCH_DIM_FUNC_ARG/93     $53=      16?7                 91:'official_credits'	;1
134 97   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
135 97   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
136 97   ECHO/40                   ?0        $54                  ?0                  	;0
137 98   ECHO/40                   ?0        92:'</td>
															<td align="center">
																<input class="form-control text-center orinput" onkeypress="return isNumberKey(event)" name="override_' ?0                  	;0
138 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'intval'         	;1
139 99   FETCH_DIM_FUNC_ARG/93     $55=      16?7                 95:'id'             	;1
140 99   SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
141 99   DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
142 99   ECHO/40                   ?0        $56                  ?0                  	;0
143 100  ECHO/40                   ?0        96:'" type="text" value="" style="width:100px; display: inline;" class="text-center" />
															</td>
														</tr>
														' ?0                  	;0
144 101  NOP/0                     ?0        ?0                   ?0                  	;1
145 101  GOTO/253                  ?0        ?129                 ?97                 	;0
146 103  FETCH_DIM_R/81            $57=      16?7                 98:'is_official'    	;0
147 103  BOOL_NOT/13               #58=      $57                  ?0                  	;0
148 103  JMPZ/43                   ?0        #58                  ?151                	;0	>>151
149 104  NOP/0                     ?0        ?0                   ?0                  	;1
150 104  GOTO/253                  ?0        ?129                 ?99                 	;0
151 106  ECHO/40                   ?0        100:'														<tr>
															<td class="text-center">' ?0                  	;0	<<148
152 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'intval'        	;1
153 107  FETCH_DIM_FUNC_ARG/93     $59=      16?7                 103:'id'            	;1
154 107  SEND_VAR_EX/66            ?80       $59                  ?1                  	;0
155 107  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
156 107  ECHO/40                   ?0        $60                  ?0                  	;0
157 108  ECHO/40                   ?0        104:'</td>
															<td>' ?0                  	;0
158 109  FETCH_DIM_R/81            $61=      16?7                 105:'package_name'  	;0
159 109  ECHO/40                   ?0        $61                  ?0                  	;0
160 110  NOP/0                     ?0        ?0                   ?0                  	;1
161 110  GOTO/253                  ?0        ?131                 ?106                	;0
162 111  JMP/42                    ?0        ?126                 ?0                  	;0	>>126
163 111  FE_FREE/127               ?0        $52                  ?0                  	;0	<<125
164 114  ECHO/40                   ?0        107:'													</tbody>
												</table>
                                                <div class="custom-control col-md-12 custom-checkbox text-center" style="margin-top:20px;">
                                                    <input type="checkbox" class="custom-control-input" id="c_override" data-name="override" data-type="override" name="c_override">
                                                    <label class="custom-control-label" for="c_override">Tick this box to apply the above package override to all selected users.</label>
                                                </div>
											</div> 
										</div>
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<input name="submit_user" type="submit" class="btn btn-primary" value="Mass Edit" />
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
165 115  GOTO/253                  ?0        ?166                 ?108                	;0
166 117  INCLUDE_OR_EVAL/73        ?54       109:'footer.php'     ?0                  	;2
167 118  NOP/0                     ?0        110:1                ?0                  	;4294967295
*/

?>