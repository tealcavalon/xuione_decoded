<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?236                 ?0                  	;0	>>236
1   6    ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
2   7    INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3   8    ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Mass Edit Devices <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
4   9    ISSET_ISEMPTY_CV/197      #13=      16?0                 ?0                  	;33554432
5   9    JMPZ_EX/46                #13=      #13                  ?9                  	;0	>>9
6   9    FETCH_CONSTANT/99         #14=      ?0                   4:'STATUS_SUCCESS'  	;16
7   9    IS_EQUAL/17               #15=      16?0                 #14                 	;0
8   9    BOOL/52                   #13=      #15                  ?0                  	;0
9   9    BOOL_NOT/13               #16=      #13                  ?0                  	;0	<<5
10  9    JMPZ/43                   ?0        #16                  ?12                 	;0	>>12
11  10   GOTO/253                  ?0        ?23                  ?7                  	;0
12  12   GOTO/253                  ?0        ?22                  ?8                  	;0	<<10
13  14   FETCH_DIM_R/81            $17=      16?1                 9:'reload_portal'   	;0
14  14   ECHO/40                   ?0        $17                  ?0                  	;0
15  15   ECHO/40                   ?0        10:'</option>
                                                                <option value="reboot">' ?0                  	;0
16  16   FETCH_DIM_R/81            $18=      16?1                 11:'reboot_device'  	;0
17  16   ECHO/40                   ?0        $18                  ?0                  	;0
18  17   ECHO/40                   ?0        12:'</option>
                                                                <option value="send_msg">' ?0                  	;0
19  18   FETCH_DIM_R/81            $19=      16?1                 13:'send_message'   	;0
20  18   ECHO/40                   ?0        $19                  ?0                  	;0
21  19   GOTO/253                  ?0        ?178                 ?14                 	;0
22  21   ECHO/40                   ?0        15:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass edit of devices was successfully executed!
				</div>
				' ?0                  	;0
23  23   ECHO/40                   ?0        16:'				<div class="card">
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
										<a href="#events" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-email mr-1"></i>
											<span class="d-none d-sm-inline">Events</span>
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
24  24   FETCH_STATIC_PROP_IS/176  $20=      17:'rRequest'        18:'XUI'            	;0
25  24   ISSET_ISEMPTY_DIM_OBJ/115 #21=      $20                  20:'owner'          	;33554432
26  24   JMPZ_EX/46                #21=      #21                  ?37                 	;0	>>37
27  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'BA89228dc958cE05'	;1
28  24   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'intval'         	;1
29  24   FETCH_STATIC_PROP_FUNC_ARG/177 $22=      25:'rRequest'        26:'XUI'            	;1
30  24   FETCH_DIM_FUNC_ARG/93     $23=      $22                  28:'owner'          	;1
31  24   SEND_VAR_EX/66            ?80       $23                  ?1                  	;0
32  24   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
33  24   SEND_VAR_NO_REF_EX/50     ?80       $24                  ?1                  	;0
34  24   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
35  24   ASSIGN/38                 $26=      16?2                 $25                 	;0
36  24   BOOL/52                   #21=      $26                  ?0                  	;0
37  24   BOOL_NOT/13               #27=      #21                  ?0                  	;0	<<26
38  24   JMPZ/43                   ?0        #27                  ?40                 	;0	>>40
39  25   GOTO/253                  ?0        ?195                 ?29                 	;0
40  27   ECHO/40                   ?0        30:'                                                    <option value="' ?0                  	;0	<<38
41  28   GOTO/253                  ?0        ?186                 ?31                 	;0
42  30   ECHO/40                   ?0        32:'</th>
                                                        <th>' ?0                  	;0
43  31   FETCH_DIM_R/81            $28=      16?1                 33:'username'       	;0
44  31   ECHO/40                   ?0        $28                  ?0                  	;0
45  32   ECHO/40                   ?0        34:'</th>
                                                        <th class="text-center">' ?0                  	;0
46  33   FETCH_DIM_R/81            $29=      16?1                 35:'mac_address'    	;0
47  33   ECHO/40                   ?0        $29                  ?0                  	;0
48  34   ECHO/40                   ?0        36:'</th>
                                                        <th class="text-center">Device</th>
                                                        <th>' ?0                  	;0
49  35   GOTO/253                  ?0        ?50                  ?37                 	;0
50  37   FETCH_DIM_R/81            $30=      16?1                 38:'owner'          	;0
51  37   ECHO/40                   ?0        $30                  ?0                  	;0
52  38   ECHO/40                   ?0        39:'</th>
                                                        <th class="text-center">' ?0                  	;0
53  39   FETCH_DIM_R/81            $31=      16?1                 40:'status'         	;0
54  39   ECHO/40                   ?0        $31                  ?0                  	;0
55  40   ECHO/40                   ?0        41:'</th>
                                                        <th class="text-center">' ?0                  	;0
56  41   FETCH_DIM_R/81            $32=      16?1                 42:'online'         	;0
57  41   ECHO/40                   ?0        $32                  ?0                  	;0
58  42   GOTO/253                  ?0        ?170                 ?43                 	;0
59  44   ASSIGN/38                 ?21       16?3                 44:'Mass Edit Devices'	;0
60  45   INCLUDE_OR_EVAL/73        ?22       45:'header.php'      ?0                  	;2
61  46   ECHO/40                   ?0        46:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
62  47   FETCH_IS/89               $35=      47:'_SERVER'         ?0                  	;0
63  47   ISSET_ISEMPTY_DIM_OBJ/115 #36=      $35                  48:'HTTP_X_REQUESTED_WITH'	;16777216
64  47   BOOL_NOT/13               #37=      #36                  ?0                  	;0
65  47   JMPZ_EX/46                #37=      #37                  ?73                 	;0	>>73
66  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'strtolower'     	;1
67  47   FETCH_FUNC_ARG/92         $38=      51:'_SERVER'         ?0                  	;1
68  47   FETCH_DIM_FUNC_ARG/93     $39=      $38                  52:'HTTP_X_REQUESTED_WITH'	;1
69  47   SEND_VAR_EX/66            ?80       $39                  ?1                  	;0
70  47   DO_FCALL_BY_NAME/131      $40=      ?0                   ?0                  	;0
71  47   IS_EQUAL/17               #41=      $40                  53:'xmlhttprequest' 	;0
72  47   BOOL/52                   #37=      #41                  ?0                  	;0
73  47   BOOL_NOT/13               #42=      #37                  ?0                  	;0	<<65
74  47   JMPZ/43                   ?0        #42                  ?76                 	;0	>>76
75  48   GOTO/253                  ?0        ?1                   ?54                 	;0
76  50   ECHO/40                   ?0        55:' style="display: none;"' ?0                  	;0	<<74
77  51   GOTO/253                  ?0        ?1                   ?56                 	;0
78  53   FETCH_DIM_R/81            $43=      16?1                 57:'channel'        	;0
79  53   ECHO/40                   ?0        $43                  ?0                  	;0
80  54   ECHO/40                   ?0        58:'</label>
                                                    <div class="col-md-9">
                                                        <select id="m_selected_channel" name="selected_channel" class="form-control select2" data-toggle="select2" style="width:100%;"></select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4" id="m_reboot_portal_form">
                                                    <label class="col-md-9 col-form-label" for="m_reboot_portal">' ?0                  	;0
81  55   FETCH_DIM_R/81            $44=      16?1                 59:'reboot_on_confirmation'	;0
82  55   ECHO/40                   ?0        $44                  ?0                  	;0
83  56   ECHO/40                   ?0        60:'</label>
                                                    <div class="col-md-3">
                                                        <input name="reboot_portal" id="m_reboot_portal" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
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
84  57   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'f964B9222B35adDD'	;0
85  57   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
86  57   FE_RESET_R/77             $46=      $45                  ?144                	;0
87  57   FE_FETCH_R/78             ?0        $46                  16?4                	;144	>>144	<<143
88  58   NOP/0                     ?0        ?0                   ?0                  	;1
89  58   GOTO/253                  ?0        ?134                 ?63                 	;0
90  60   ECHO/40                   ?0        64:'</td>
                                                                <td class="text-center">' ?0                  	;0
91  61   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'count'          	;1
92  61   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'json_decode'    	;2
93  61   FETCH_DIM_FUNC_ARG/93     $47=      16?4                 69:'bouquet_radios' 	;1
94  61   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
95  61   SEND_VAL_EX/116           ?96       70:true              ?2                  	;0
96  61   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
97  61   SEND_VAR_NO_REF_EX/50     ?80       $48                  ?1                  	;0
98  61   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
99  61   ECHO/40                   ?0        $49                  ?0                  	;0
100 62   ECHO/40                   ?0        71:'</td>
															</tr>
															' ?0                  	;0
101 64   NOP/0                     ?0        ?0                   ?0                  	;1
102 64   GOTO/253                  ?0        ?143                 ?72                 	;0
103 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'count'          	;1
104 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'json_decode'    	;2
105 66   FETCH_DIM_FUNC_ARG/93     $50=      16?4                 77:'bouquet_channels'	;1
106 66   SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
107 66   SEND_VAL_EX/116           ?96       78:true              ?2                  	;0
108 66   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
109 66   SEND_VAR_NO_REF_EX/50     ?80       $51                  ?1                  	;0
110 66   DO_FCALL_BY_NAME/131      $52=      ?0                   ?0                  	;0
111 66   ECHO/40                   ?0        $52                  ?0                  	;0
112 67   ECHO/40                   ?0        79:'</td>
                                                                <td class="text-center">' ?0                  	;0
113 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'count'          	;1
114 68   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'json_decode'    	;2
115 68   FETCH_DIM_FUNC_ARG/93     $53=      16?4                 84:'bouquet_movies' 	;1
116 68   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
117 68   SEND_VAL_EX/116           ?96       85:true              ?2                  	;0
118 68   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
119 68   SEND_VAR_NO_REF_EX/50     ?80       $54                  ?1                  	;0
120 68   DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
121 68   ECHO/40                   ?0        $55                  ?0                  	;0
122 69   ECHO/40                   ?0        86:'</td>
																<td class="text-center">' ?0                  	;0
123 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   87:'count'          	;1
124 70   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'json_decode'    	;2
125 70   FETCH_DIM_FUNC_ARG/93     $56=      16?4                 91:'bouquet_series' 	;1
126 70   SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
127 70   SEND_VAL_EX/116           ?96       92:true              ?2                  	;0
128 70   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
129 70   SEND_VAR_NO_REF_EX/50     ?80       $57                  ?1                  	;0
130 70   DO_FCALL_BY_NAME/131      $58=      ?0                   ?0                  	;0
131 70   ECHO/40                   ?0        $58                  ?0                  	;0
132 71   NOP/0                     ?0        ?0                   ?0                  	;1
133 71   GOTO/253                  ?0        ?90                  ?93                 	;0
134 73   ECHO/40                   ?0        94:'															<tr>
																<td class="text-center">' ?0                  	;0
135 74   FETCH_DIM_R/81            $59=      16?4                 95:'id'             	;0
136 74   ECHO/40                   ?0        $59                  ?0                  	;0
137 75   ECHO/40                   ?0        96:'</td>
																<td>' ?0                  	;0
138 76   FETCH_DIM_R/81            $60=      16?4                 97:'bouquet_name'   	;0
139 76   ECHO/40                   ?0        $60                  ?0                  	;0
140 77   ECHO/40                   ?0        98:'</td>
																<td class="text-center">' ?0                  	;0
141 78   NOP/0                     ?0        ?0                   ?0                  	;1
142 78   GOTO/253                  ?0        ?103                 ?99                 	;0
143 79   JMP/42                    ?0        ?87                  ?0                  	;0	>>87
144 79   FE_FREE/127               ?0        $46                  ?0                  	;0	<<86
145 81   GOTO/253                  ?0        ?253                 ?100                	;0
146 83   FE_RESET_R/77             $61=      16?5                 ?156                	;0
147 83   FE_FETCH_R/78             ?0        $61                  16?6                	;156	>>156	<<155
148 84   ECHO/40                   ?0        101:'															<option value="' ?0                  	;0
149 85   FETCH_DIM_R/81            $62=      16?6                 102:'id'            	;0
150 85   ECHO/40                   ?0        $62                  ?0                  	;0
151 86   ECHO/40                   ?0        103:'">'             ?0                  	;0
152 87   FETCH_DIM_R/81            $63=      16?6                 104:'server_name'   	;0
153 87   ECHO/40                   ?0        $63                  ?0                  	;0
154 88   ECHO/40                   ?0        105:'</option>
															' ?0                  	;0
155 89   JMP/42                    ?0        ?147                 ?0                  	;0	>>147
156 89   FE_FREE/127               ?0        $61                  ?0                  	;0	<<146
157 92   ECHO/40                   ?0        106:'														</select>
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
158 93   FE_RESET_R/77             $64=      16?7                 ?168                	;0
159 93   FE_FETCH_R/78             ?0        $64                  16?8                	;168	>>168	<<167
160 94   ECHO/40                   ?0        107:'															<option value="' ?0                  	;0
161 95   FETCH_DIM_R/81            $65=      16?8                 108:'id'            	;0
162 95   ECHO/40                   ?0        $65                  ?0                  	;0
163 96   ECHO/40                   ?0        109:'">'             ?0                  	;0
164 97   FETCH_DIM_R/81            $66=      16?8                 110:'name'          	;0
165 97   ECHO/40                   ?0        $66                  ?0                  	;0
166 98   ECHO/40                   ?0        111:'</option>
															' ?0                  	;0
167 99   JMP/42                    ?0        ?159                 ?0                  	;0	>>159
168 99   FE_FREE/127               ?0        $64                  ?0                  	;0	<<158
169 102  GOTO/253                  ?0        ?245                 ?112                	;0
170 104  ECHO/40                   ?0        113:'</th>
                                                        <th class="text-center">' ?0                  	;0
171 105  FETCH_DIM_R/81            $67=      16?1                 114:'trial'         	;0
172 105  ECHO/40                   ?0        $67                  ?0                  	;0
173 106  ECHO/40                   ?0        115:'</th>
                                                        <th class="text-center">' ?0                  	;0
174 107  FETCH_DIM_R/81            $68=      16?1                 116:'expiration'    	;0
175 107  ECHO/40                   ?0        $68                  ?0                  	;0
176 108  ECHO/40                   ?0        117:'</th>
                                                        <th class="text-center">' ?0                  	;0
177 109  GOTO/253                  ?0        ?218                 ?118                	;0
178 111  ECHO/40                   ?0        119:'</option>
                                                                <option value="cut_off">' ?0                  	;0
179 112  FETCH_DIM_R/81            $69=      16?1                 120:'close_portal'  	;0
180 112  ECHO/40                   ?0        $69                  ?0                  	;0
181 113  ECHO/40                   ?0        121:'</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4" id="m_send_msg_form">
                                                    <label class="col-md-3 col-form-label" for="m_message">Message</label>
                                                    <div class="col-md-9">
                                                        <textarea id="m_message" name="message" class="form-control" rows="3" placeholder="' ?0                  	;0
182 114  FETCH_DIM_R/81            $70=      16?1                 122:'enter_a_custom_message'	;0
183 114  ECHO/40                   ?0        $70                  ?0                  	;0
184 115  ECHO/40                   ?0        123:'..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4" id="m_play_channel_form">
                                                    <label class="col-md-3 col-form-label" for="m_selected_channel">' ?0                  	;0
185 116  GOTO/253                  ?0        ?78                  ?124                	;0
186 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   125:'intval'        	;1
187 118  FETCH_DIM_FUNC_ARG/93     $71=      16?2                 127:'id'            	;1
188 118  SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
189 118  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
190 118  ECHO/40                   ?0        $72                  ?0                  	;0
191 119  ECHO/40                   ?0        128:'" selected="selected">' ?0                  	;0
192 120  FETCH_DIM_R/81            $73=      16?2                 129:'username'      	;0
193 120  ECHO/40                   ?0        $73                  ?0                  	;0
194 121  ECHO/40                   ?0        130:'</option>
                                                    ' ?0                  	;0
195 123  GOTO/253                  ?0        ?196                 ?131                	;0
196 125  ECHO/40                   ?0        132:'                                                </select>
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
197 126  FE_RESET_R/77             $74=      133:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?213                	;0
198 126  FE_FETCH_R/78             ?0        $74                  16?9                	;213	>>213	<<212
199 127  ECHO/40                   ?0        134:'													<option' ?0                  	;0
200 128  FETCH_DIM_R/81            $75=      16?10                135:'default_entries'	;0
201 128  IS_EQUAL/17               #76=      $75                  16?9                	;0
202 128  BOOL_NOT/13               #77=      #76                  ?0                  	;0
203 128  JMPZ/43                   ?0        #77                  ?206                	;0	>>206
204 129  NOP/0                     ?0        ?0                   ?0                  	;1
205 129  GOTO/253                  ?0        ?207                 ?136                	;0
206 131  ECHO/40                   ?0        137:' selected'      ?0                  	;0	<<203
207 133  ECHO/40                   ?0        138:' value="'       ?0                  	;0
208 134  ECHO/40                   ?0        16?9                 ?0                  	;0
209 135  ECHO/40                   ?0        139:'">'             ?0                  	;0
210 136  ECHO/40                   ?0        16?9                 ?0                  	;0
211 137  ECHO/40                   ?0        140:'</option>
													' ?0                  	;0
212 138  JMP/42                    ?0        ?198                 ?0                  	;0	>>198
213 138  FE_FREE/127               ?0        $74                  ?0                  	;0	<<197
214 141  ECHO/40                   ?0        141:'												</select>
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
215 142  FETCH_DIM_R/81            $78=      16?1                 142:'id'            	;0
216 142  ECHO/40                   ?0        $78                  ?0                  	;0
217 143  GOTO/253                  ?0        ?42                  ?143                	;0
218 145  FETCH_DIM_R/81            $79=      16?1                 144:'actions'       	;0
219 145  ECHO/40                   ?0        $79                  ?0                  	;0
220 146  ECHO/40                   ?0        145:'</th>
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
221 147  INIT_FCALL_BY_NAME/59     ?0        ?0                   146:'b36ce90e79fB0E76'	;0
222 147  DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
223 147  FE_RESET_R/77             $81=      $80                  ?233                	;0
224 147  FE_FETCH_R/78             ?0        $81                  16?11               	;233	>>233	<<232
225 148  ECHO/40                   ?0        148:'															<option value="' ?0                  	;0
226 149  FETCH_DIM_R/81            $82=      16?11                149:'id'            	;0
227 149  ECHO/40                   ?0        $82                  ?0                  	;0
228 150  ECHO/40                   ?0        150:'">'             ?0                  	;0
229 151  FETCH_DIM_R/81            $83=      16?11                151:'username'      	;0
230 151  ECHO/40                   ?0        $83                  ?0                  	;0
231 152  ECHO/40                   ?0        152:'</option>
															' ?0                  	;0
232 153  JMP/42                    ?0        ?224                 ?0                  	;0	>>224
233 153  FE_FREE/127               ?0        $81                  ?0                  	;0	<<223
234 156  ECHO/40                   ?0        153:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="parent_password" name="c_parent_password">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="parent_password">Adult Pin</label>
													<div class="col-md-2">
														<input disabled type="text" class="form-control text-center" id="parent_password" name="parent_password" value="0000">
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
235 157  GOTO/253                  ?0        ?146                 ?154                	;0
236 159  INCLUDE_OR_EVAL/73        ?72       155:'session.php'    ?0                  	;2	<<0
237 160  INCLUDE_OR_EVAL/73        ?73       156:'functions.php'  ?0                  	;2
238 161  INIT_FCALL_BY_NAME/59     ?0        ?0                   157:'E6d500e19634D513'	;0
239 161  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
240 161  JMPZ/43                   ?0        $86                  ?242                	;0	>>242
241 162  GOTO/253                  ?0        ?244                 ?159                	;0
242 164  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'E72F42a93714bA87'	;0	<<240
243 164  DO_FCALL_BY_NAME/131      ?75       ?0                   ?0                  	;0
244 166  GOTO/253                  ?0        ?59                  ?162                	;0
245 168  ECHO/40                   ?0        163:'														</select>
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
														<input type="checkbox" class="activate" data-name="lock_device" data-type="switch" name="c_lock_device">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="lock_device">Device Lock</label>
													<div class="col-md-2">
														<input disabled name="lock_device" id="lock_device" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-5 col-form-label" for="reset_device_lock">Reset Device Lock</label>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" name="reset_device_lock">
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
                                                    <label class="col-md-3 col-form-label" for="modern_theme">Modern Theme</label>
                                                    <div class="col-md-2">
														<input disabled name="modern_theme" id="modern_theme" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">
														<input type="checkbox" class="activate" data-name="modern_theme" data-type="switch" name="c_modern_theme">
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
                                    <div class="tab-pane" id="events">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
                                                    <label class="col-md-3 col-form-label" for="m_message_type">Event Type</label>
                                                    <div class="col-9">
                                                        <select id="m_message_type" name="message_type" class="form-control" data-toggle="select2" >
                                                            <option value="" selected>' ?0                  	;0
246 169  FETCH_DIM_R/81            $88=      16?1                 164:'select_an_event'	;0
247 169  ECHO/40                   ?0        $88                  ?0                  	;0
248 170  ECHO/40                   ?0        165:':</option>
                                                            <optgroup label="">
                                                                <option value="play_channel">' ?0                  	;0
249 171  FETCH_DIM_R/81            $89=      16?1                 166:'play_channel'  	;0
250 171  ECHO/40                   ?0        $89                  ?0                  	;0
251 172  ECHO/40                   ?0        167:'</option>
                                                                <option value="reload_portal">' ?0                  	;0
252 173  GOTO/253                  ?0        ?13                  ?168                	;0
253 176  ECHO/40                   ?0        169:'														</tbody>
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
254 177  GOTO/253                  ?0        ?255                 ?170                	;0
255 179  INCLUDE_OR_EVAL/73        ?78       171:'footer.php'     ?0                  	;2
256 180  NOP/0                     ?0        172:1                ?0                  	;4294967295
*/

?>