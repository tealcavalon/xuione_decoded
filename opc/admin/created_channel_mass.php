<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?84                  ?0                  	;0	>>84
1   5    ECHO/40                   ?0        1:'                                                </select>
                                            </div>
											<div class="col-md-3 col-6">
												<select id="category_search" class="form-control" data-toggle="select2">
													<option value="" selected>All Categories</option>
                                                    <option value="-1">No Categories</option>
													' ?0                  	;0
2   6    FE_RESET_R/77             $15=      16?0                 ?32                 	;0
3   6    FE_FETCH_R/78             ?0        $15                  16?1                	;32	>>32	<<31
4   7    ECHO/40                   ?0        2:'													<option value="' ?0                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'intval'          	;1
6   8    FETCH_DIM_FUNC_ARG/93     $16=      16?1                 5:'id'              	;1
7   8    SEND_VAR_EX/66            ?80       $16                  ?1                  	;0
8   8    DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
9   8    ECHO/40                   ?0        $17                  ?0                  	;0
10  9    ECHO/40                   ?0        6:'"'                ?0                  	;0
11  10   FETCH_STATIC_PROP_IS/176  $18=      7:'rRequest'         8:'XUI'             	;0
12  10   ISSET_ISEMPTY_DIM_OBJ/115 #19=      $18                  10:'category'       	;33554432
13  10   JMPZ_EX/46                #19=      #19                  ?19                 	;0	>>19
14  10   FETCH_STATIC_PROP_R/173   $20=      11:'rRequest'        12:'XUI'            	;0
15  10   FETCH_DIM_R/81            $21=      $20                  14:'category'       	;0
16  10   FETCH_DIM_R/81            $22=      16?1                 15:'id'             	;0
17  10   IS_EQUAL/17               #23=      $21                  $22                 	;0
18  10   BOOL/52                   #19=      #23                  ?0                  	;0
19  10   BOOL_NOT/13               #24=      #19                  ?0                  	;0	<<13
20  10   JMPZ/43                   ?0        #24                  ?23                 	;0	>>23
21  11   NOP/0                     ?0        ?0                   ?0                  	;1
22  11   GOTO/253                  ?0        ?24                  ?16                 	;0
23  13   ECHO/40                   ?0        17:' selected'       ?0                  	;0	<<20
24  15   ECHO/40                   ?0        18:'>'               ?0                  	;0
25  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   19:'htmlspecialchars'	;1
26  16   FETCH_DIM_FUNC_ARG/93     $25=      16?1                 21:'category_name'  	;1
27  16   SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
28  16   DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
29  16   ECHO/40                   ?0        $26                  ?0                  	;0
30  17   ECHO/40                   ?0        22:'</option>
													' ?0                  	;0
31  18   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
32  18   FE_FREE/127               ?0        $15                  ?0                  	;0	<<2
33  21   ECHO/40                   ?0        23:'												</select>
											</div>
                                            <div class="col-md-2 col-6">
                                                <select id="stream_filter" class="form-control" data-toggle="select2">
                                                    <option value="">No Filter</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Stopped</option>
													<option value="3">Creating</option>
                                                    <option value="4">Transcoding</option>
                                                </select>
                                            </div>
											<div class="col-md-1 col-8">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
34  22   FE_RESET_R/77             $27=      24:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?50                 	;0
35  22   FE_FETCH_R/78             ?0        $27                  16?2                	;50	>>50	<<49
36  23   ECHO/40                   ?0        25:'													<option' ?0                  	;0
37  24   FETCH_DIM_R/81            $28=      16?3                 26:'default_entries'	;0
38  24   IS_EQUAL/17               #29=      $28                  16?2                	;0
39  24   BOOL_NOT/13               #30=      #29                  ?0                  	;0
40  24   JMPZ/43                   ?0        #30                  ?43                 	;0	>>43
41  25   NOP/0                     ?0        ?0                   ?0                  	;1
42  25   GOTO/253                  ?0        ?44                  ?27                 	;0
43  27   ECHO/40                   ?0        28:' selected'       ?0                  	;0	<<40
44  29   ECHO/40                   ?0        29:' value="'        ?0                  	;0
45  30   ECHO/40                   ?0        16?2                 ?0                  	;0
46  31   ECHO/40                   ?0        30:'">'              ?0                  	;0
47  32   ECHO/40                   ?0        16?2                 ?0                  	;0
48  33   ECHO/40                   ?0        31:'</option>
													' ?0                  	;0
49  34   JMP/42                    ?0        ?35                  ?0                  	;0	>>35
50  34   FE_FREE/127               ?0        $27                  ?0                  	;0	<<34
51  36   GOTO/253                  ?0        ?208                 ?32                 	;0
52  38   ECHO/40                   ?0        33:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass edit of channels was successfully executed!
				</div>
				' ?0                  	;0
53  40   ECHO/40                   ?0        34:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST">
							<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />
                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />
							<input type="hidden" name="streams" id="streams" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-play mr-1"></i>
											<span class="d-none d-sm-inline">Channels</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">Servers</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-selection">
										<div class="row">
											<div class="col-md-2 col-6">
												<input type="text" class="form-control" id="stream_search" value="" placeholder="Search Channels...">
											</div>
                                            <div class="col-md-3 col-6">
                                                <select id="stream_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
54  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   35:'C6A90bfCd425eb63'	;0
55  41   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
56  41   FE_RESET_R/77             $32=      $31                  ?69                 	;0
57  41   FE_FETCH_R/78             ?0        $32                  16?4                	;69	>>69	<<68
58  42   ECHO/40                   ?0        37:'                                                    <option value="' ?0                  	;0
59  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'intval'         	;1
60  43   FETCH_DIM_FUNC_ARG/93     $33=      16?4                 40:'id'             	;1
61  43   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
62  43   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
63  43   ECHO/40                   ?0        $34                  ?0                  	;0
64  44   ECHO/40                   ?0        41:'">'              ?0                  	;0
65  45   FETCH_DIM_R/81            $35=      16?4                 42:'server_name'    	;0
66  45   ECHO/40                   ?0        $35                  ?0                  	;0
67  46   ECHO/40                   ?0        43:'</option>
                                                    ' ?0                  	;0
68  47   JMP/42                    ?0        ?57                  ?0                  	;0	>>57
69  47   FE_FREE/127               ?0        $32                  ?0                  	;0	<<56
70  50   GOTO/253                  ?0        ?1                   ?44                 	;0
71  53   ECHO/40                   ?0        45:'														</select>
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
									<div class="tab-pane" id="load-balancing">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" data-name="server_tree" class="activate" name="c_server_tree" id="c_server_tree">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="server_tree">Server Tree</label>
													<div class="col-md-8">
														<div id="server_tree"></div>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="server_type">Server Type</label>
                                                    <div class="col-md-2">
                                                        <select disabled name="server_type" id="server_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
72  54   FE_RESET_R/77             $36=      46:array (
  'SET' => 'SET SERVERS',
  'ADD' => 'ADD SELECTED',
  'DEL' => 'DELETE SELECTED',
) ?81                 	;0
73  54   FE_FETCH_R/78             #37=      $36                  16?5                	;81	>>81	<<80
74  54   ASSIGN/38                 ?23       16?6                 #37                 	;0
75  55   ECHO/40                   ?0        47:'															<option value="' ?0                  	;0
76  56   ECHO/40                   ?0        16?6                 ?0                  	;0
77  57   ECHO/40                   ?0        48:'">'              ?0                  	;0
78  58   ECHO/40                   ?0        16?5                 ?0                  	;0
79  59   ECHO/40                   ?0        49:'</option>
															' ?0                  	;0
80  60   JMP/42                    ?0        ?73                  ?0                  	;0	>>73
81  60   FE_FREE/127               ?0        $36                  ?0                  	;0	<<72
82  63   ECHO/40                   ?0        50:'														</select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="on_demand">On-Demand Servers</label>
													<div class="col-md-8">
                                                        <select disabled name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
83  64   GOTO/253                  ?0        ?228                 ?51                 	;0
84  66   INCLUDE_OR_EVAL/73        ?24       52:'session.php'     ?0                  	;2	<<0
85  67   INCLUDE_OR_EVAL/73        ?25       53:'functions.php'   ?0                  	;2
86  68   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'E6d500e19634d513'	;0
87  68   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
88  68   JMPZ/43                   ?0        $41                  ?90                 	;0	>>90
89  69   GOTO/253                  ?0        ?92                  ?56                 	;0
90  71   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'e72f42a93714ba87'	;0	<<88
91  71   DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
92  73   GOTO/253                  ?0        ?168                 ?59                 	;0
93  75   ASSIGN/38                 ?28       16?7                 60:'Mass Edit Channels'	;0
94  76   INCLUDE_OR_EVAL/73        ?29       61:'header.php'      ?0                  	;2
95  77   ECHO/40                   ?0        62:'<div class="wrapper boxed-layout-xl"' ?0                  	;0
96  78   FETCH_IS/89               $45=      63:'_SERVER'         ?0                  	;0
97  78   ISSET_ISEMPTY_DIM_OBJ/115 #46=      $45                  64:'HTTP_X_REQUESTED_WITH'	;16777216
98  78   BOOL_NOT/13               #47=      #46                  ?0                  	;0
99  78   JMPZ_EX/46                #47=      #47                  ?107                	;0	>>107
100 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'strtolower'     	;1
101 78   FETCH_FUNC_ARG/92         $48=      67:'_SERVER'         ?0                  	;1
102 78   FETCH_DIM_FUNC_ARG/93     $49=      $48                  68:'HTTP_X_REQUESTED_WITH'	;1
103 78   SEND_VAR_EX/66            ?80       $49                  ?1                  	;0
104 78   DO_FCALL_BY_NAME/131      $50=      ?0                   ?0                  	;0
105 78   IS_EQUAL/17               #51=      $50                  69:'xmlhttprequest' 	;0
106 78   BOOL/52                   #47=      #51                  ?0                  	;0
107 78   BOOL_NOT/13               #52=      #47                  ?0                  	;0	<<99
108 78   JMPZ/43                   ?0        #52                  ?110                	;0	>>110
109 79   GOTO/253                  ?0        ?196                 ?70                 	;0
110 81   ECHO/40                   ?0        71:' style="display: none;"' ?0                  	;0	<<108
111 82   GOTO/253                  ?0        ?196                 ?72                 	;0
112 84   FE_RESET_R/77             $53=      73:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?120                	;0
113 84   FE_FETCH_R/78             ?0        $53                  16?5                	;120	>>120	<<119
114 85   ECHO/40                   ?0        74:'															<option value="' ?0                  	;0
115 86   ECHO/40                   ?0        16?5                 ?0                  	;0
116 87   ECHO/40                   ?0        75:'">'              ?0                  	;0
117 88   ECHO/40                   ?0        16?5                 ?0                  	;0
118 89   ECHO/40                   ?0        76:'</option>
															' ?0                  	;0
119 90   JMP/42                    ?0        ?113                 ?0                  	;0	>>113
120 90   FE_FREE/127               ?0        $53                  ?0                  	;0	<<112
121 93   ECHO/40                   ?0        77:'														</select>
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="bouquets" name="c_bouquets">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="bouquets">Select Bouquets</label>
													<div class="col-md-6">
														<select disabled name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
122 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'F964B9222b35AdDD'	;0
123 94   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
124 94   FE_RESET_R/77             $55=      $54                  ?140                	;0
125 94   FE_FETCH_R/78             ?0        $55                  16?8                	;140	>>140	<<139
126 95   ECHO/40                   ?0        80:'															<option value="' ?0                  	;0
127 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'intval'         	;1
128 96   FETCH_DIM_FUNC_ARG/93     $56=      16?8                 83:'id'             	;1
129 96   SEND_VAR_EX/66            ?80       $56                  ?1                  	;0
130 96   DO_FCALL_BY_NAME/131      $57=      ?0                   ?0                  	;0
131 96   ECHO/40                   ?0        $57                  ?0                  	;0
132 97   ECHO/40                   ?0        84:'">'              ?0                  	;0
133 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'htmlspecialchars'	;1
134 98   FETCH_DIM_FUNC_ARG/93     $58=      16?8                 87:'bouquet_name'   	;1
135 98   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
136 98   DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
137 98   ECHO/40                   ?0        $59                  ?0                  	;0
138 99   ECHO/40                   ?0        88:'</option>
															' ?0                  	;0
139 100  JMP/42                    ?0        ?125                 ?0                  	;0	>>125
140 100  FE_FREE/127               ?0        $55                  ?0                  	;0	<<124
141 103  GOTO/253                  ?0        ?142                 ?89                 	;0
142 105  ECHO/40                   ?0        90:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="bouquets_type" id="bouquets_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
143 106  FE_RESET_R/77             $60=      91:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?151                	;0
144 106  FE_FETCH_R/78             ?0        $60                  16?5                	;151	>>151	<<150
145 107  ECHO/40                   ?0        92:'															<option value="' ?0                  	;0
146 108  ECHO/40                   ?0        16?5                 ?0                  	;0
147 109  ECHO/40                   ?0        93:'">'              ?0                  	;0
148 110  ECHO/40                   ?0        16?5                 ?0                  	;0
149 111  ECHO/40                   ?0        94:'</option>
															' ?0                  	;0
150 112  JMP/42                    ?0        ?144                 ?0                  	;0	>>144
151 112  FE_FREE/127               ?0        $60                  ?0                  	;0	<<143
152 115  ECHO/40                   ?0        95:'														</select>
                                                    </div>
												</div>
												
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="rtmp_output" data-type="switch" name="c_rtmp_output">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="rtmp_output">Output RTMP</label>
													<div class="col-md-2">
														<input name="rtmp_output" id="rtmp_output" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="allow_record">Allow Recording</label>
													<div class="col-md-2">
														<input name="allow_record" id="allow_record" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="allow_record" data-type="switch" name="c_allow_record">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="transcode_profile_id" name="c_transcode_profile_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile</label>
													<div class="col-md-8">
														<select name="transcode_profile_id" disabled id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option selected value="0">Transcoding Disabled</option>
															' ?0                  	;0
153 116  FE_RESET_R/77             $61=      16?9                 ?166                	;0
154 116  FE_FETCH_R/78             ?0        $61                  16?10               	;166	>>166	<<165
155 117  ECHO/40                   ?0        96:'															<option value="' ?0                  	;0
156 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   97:'intval'         	;1
157 118  FETCH_DIM_FUNC_ARG/93     $62=      16?10                99:'profile_id'     	;1
158 118  SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
159 118  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
160 118  ECHO/40                   ?0        $63                  ?0                  	;0
161 119  ECHO/40                   ?0        100:'">'             ?0                  	;0
162 120  FETCH_DIM_R/81            $64=      16?10                101:'profile_name'  	;0
163 120  ECHO/40                   ?0        $64                  ?0                  	;0
164 121  ECHO/40                   ?0        102:'</option>
															' ?0                  	;0
165 122  JMP/42                    ?0        ?154                 ?0                  	;0	>>154
166 122  FE_FREE/127               ?0        $61                  ?0                  	;0	<<153
167 124  GOTO/253                  ?0        ?71                  ?103                	;0
168 126  INIT_FCALL_BY_NAME/59     ?0        ?0                   104:'f769e3F0C739D1A6'	;1
169 126  SEND_VAL_EX/116           ?80       106:'live'           ?1                  	;0
170 126  DO_FCALL_BY_NAME/131      $65=      ?0                   ?0                  	;0
171 126  ASSIGN/38                 ?51       16?0                 $65                 	;0
172 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   107:'f93e9343c3d7FD99'	;0
173 127  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
174 127  ASSIGN/38                 ?53       16?9                 $67                 	;0
175 128  ASSIGN/38                 ?54       16?11                109:array (
  0 => 
  array (
    'id' => 'source',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Active</strong>',
    'icon' => 'mdi mdi-play',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
  1 => 
  array (
    'id' => 'offline',
    'parent' => '#',
    'text' => '<strong class=\'btn btn-secondary waves-effect waves-light btn-xs\'>Offline</strong>',
    'icon' => 'mdi mdi-stop',
    'state' => 
    array (
      'opened' => true,
    ),
  ),
)	;0
176 129  FE_RESET_R/77             $70=      16?12                ?194                	;0
177 129  FE_FETCH_R/78             ?0        $70                  16?4                	;194	>>194	<<193
178 130  INIT_FCALL_BY_NAME/59     ?0        ?0                   110:'intval'        	;1
179 130  FETCH_DIM_FUNC_ARG/93     $72=      16?4                 112:'id'            	;1
180 130  SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
181 130  DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
182 130  INIT_ARRAY/71             #74=      $73                  113:'id'            	;22
183 130  ADD_ARRAY_ELEMENT/72      #74=      114:'offline'        115:'parent'        	;0
184 130  INIT_FCALL_BY_NAME/59     ?0        ?0                   116:'htmlspecialchars'	;1
185 130  FETCH_DIM_FUNC_ARG/93     $75=      16?4                 118:'server_name'   	;1
186 130  SEND_VAR_EX/66            ?80       $75                  ?1                  	;0
187 130  DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
188 130  ADD_ARRAY_ELEMENT/72      #74=      $76                  119:'text'          	;0
189 130  ADD_ARRAY_ELEMENT/72      #74=      120:'mdi mdi-server-network' 121:'icon'          	;0
190 130  ADD_ARRAY_ELEMENT/72      #74=      122:array (
  'opened' => true,
) 123:'state'         	;0
191 130  ASSIGN_DIM/147            ?56       16?11                ?4386466            	;0
192 130  OP_DATA/137               ?0        #74                  ?0                  	;0
193 131  JMP/42                    ?0        ?177                 ?0                  	;0	>>177
194 131  FE_FREE/127               ?0        $70                  ?0                  	;0	<<176
195 134  GOTO/253                  ?0        ?93                  ?124                	;0
196 137  ECHO/40                   ?0        125:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
197 138  INCLUDE_OR_EVAL/73        ?62       126:'topbar.php'     ?0                  	;2
198 139  ECHO/40                   ?0        127:'					</div>
					<h4 class="page-title">Mass Edit Channels <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
199 140  ISSET_ISEMPTY_CV/197      #78=      16?13                ?0                  	;33554432
200 140  JMPZ_EX/46                #78=      #78                  ?204                	;0	>>204
201 140  FETCH_CONSTANT/99         #79=      ?0                   128:'STATUS_SUCCESS'	;16
202 140  IS_EQUAL/17               #80=      16?13                #79                 	;0
203 140  BOOL/52                   #78=      #80                  ?0                  	;0
204 140  BOOL_NOT/13               #81=      #78                  ?0                  	;0	<<200
205 140  JMPZ/43                   ?0        #81                  ?207                	;0	>>207
206 141  GOTO/253                  ?0        ?53                  ?131                	;0
207 143  GOTO/253                  ?0        ?52                  ?132                	;0	<<205
208 146  ECHO/40                   ?0        133:'												</select>
											</div>
											<div class="col-md-1 col-2">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-mass" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">ID</th>
                                                        <th class="text-center">Icon</th>
														<th>Stream Name</th>
														<th>Category</th>
                                                        <th>Server</th>
                                                        <th class="text-center">Status</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="category_id" name="c_category_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="category_id">Select Categories</label>
													<div class="col-md-6">
														<select disabled name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
209 147  FE_RESET_R/77             $82=      16?0                 ?225                	;0
210 147  FE_FETCH_R/78             ?0        $82                  16?1                	;225	>>225	<<224
211 148  ECHO/40                   ?0        134:'															<option value="' ?0                  	;0
212 149  INIT_FCALL_BY_NAME/59     ?0        ?0                   135:'intval'        	;1
213 149  FETCH_DIM_FUNC_ARG/93     $83=      16?1                 137:'id'            	;1
214 149  SEND_VAR_EX/66            ?80       $83                  ?1                  	;0
215 149  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
216 149  ECHO/40                   ?0        $84                  ?0                  	;0
217 150  ECHO/40                   ?0        138:'">'             ?0                  	;0
218 151  INIT_FCALL_BY_NAME/59     ?0        ?0                   139:'htmlspecialchars'	;1
219 151  FETCH_DIM_FUNC_ARG/93     $85=      16?1                 141:'category_name' 	;1
220 151  SEND_VAR_EX/66            ?80       $85                  ?1                  	;0
221 151  DO_FCALL_BY_NAME/131      $86=      ?0                   ?0                  	;0
222 151  ECHO/40                   ?0        $86                  ?0                  	;0
223 152  ECHO/40                   ?0        142:'</option>
															' ?0                  	;0
224 153  JMP/42                    ?0        ?210                 ?0                  	;0	>>210
225 153  FE_FREE/127               ?0        $82                  ?0                  	;0	<<209
226 156  ECHO/40                   ?0        143:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="category_id_type" id="category_id_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
227 157  GOTO/253                  ?0        ?112                 ?144                	;0
228 159  FE_RESET_R/77             $87=      16?12                ?238                	;0
229 159  FE_FETCH_R/78             ?0        $87                  16?4                	;238	>>238	<<237
230 160  ECHO/40                   ?0        145:'															<option value="' ?0                  	;0
231 161  FETCH_DIM_R/81            $88=      16?4                 146:'id'            	;0
232 161  ECHO/40                   ?0        $88                  ?0                  	;0
233 162  ECHO/40                   ?0        147:'">'             ?0                  	;0
234 163  FETCH_DIM_R/81            $89=      16?4                 148:'server_name'   	;0
235 163  ECHO/40                   ?0        $89                  ?0                  	;0
236 164  ECHO/40                   ?0        149:'</option>
															' ?0                  	;0
237 165  JMP/42                    ?0        ?229                 ?0                  	;0	>>229
238 165  FE_FREE/127               ?0        $87                  ?0                  	;0	<<228
239 168  ECHO/40                   ?0        150:'														</select>
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="reencode_on_edit">' ?0                  	;0
240 169  FETCH_DIM_R/81            $90=      16?14                151:'reencode_on_edit'	;0
241 169  ECHO/40                   ?0        $90                  ?0                  	;0
242 170  ECHO/40                   ?0        152:'</label>
													<div class="col-md-2">
														<input name="reencode_on_edit" id="reencode_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
													</div>
                                                    <div class="col-md-1"></div>
                                                    <label class="col-md-3 col-form-label" for="restart_on_edit">Restart on Edit</label>
													<div class="col-md-2">
														<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
													</div>
                                                </div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<input name="submit_stream" type="submit" class="btn btn-primary" value="Edit Channels" />
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
243 171  GOTO/253                  ?0        ?244                 ?153                	;0
244 173  INCLUDE_OR_EVAL/73        ?76       154:'footer.php'     ?0                  	;2
245 174  NOP/0                     ?0        155:1                ?0                  	;4294967295
*/

?>