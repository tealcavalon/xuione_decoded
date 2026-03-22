<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?99                  ?0                  	;0	>>99
1   5    ECHO/40                   ?0        1:'" selected="selected">' ?0                  	;0
2   6    FETCH_DIM_R/81            $9=       16?0                 2:'username'        	;0
3   6    ECHO/40                   ?0        $9                   ?0                  	;0
4   7    ECHO/40                   ?0        3:'</option>
                                                    ' ?0                  	;0
5   9    ECHO/40                   ?0        4:'                                                </select>
                                            </div>
                                            <label class="col-md-1 col-form-label text-center" for="mag_reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearMagOwner();">CLEAR</button></label>
											<div class="col-md-2">
												<select id="mag_filter" class="form-control" data-toggle="select2">
													<option value="" selected>No Filter</option>
													<option value="1">Active</option>
													<option value="2">Disabled</option>
													<option value="3">Banned</option>
													<option value="4">Expired</option>
													<option value="5">Trial</option>
												</select>
											</div>
											<div class="col-md-2 col-8">
												<select id="mag_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
6   10   GOTO/253                  ?0        ?627                 ?5                  	;0
7   12   ECHO/40                   ?0        6:'												</select>
											</div>
											<div class="col-md-2 col-6">
                                                <select id="radio_filter" class="form-control" data-toggle="select2">
                                                    <option value="">No Filter</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Down</option>
                                                    <option value="3">Stopped</option>
                                                    <option value="4">Starting</option>
                                                    <option value="5">On Demand</option>
                                                    <option value="6">Direct</option>
                                                </select>
                                            </div>
											<div class="col-md-1 col-6">
												<select id="radio_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
8   13   FE_RESET_R/77             $10=      7:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?24                 	;0
9   13   FE_FETCH_R/78             ?0        $10                  16?1                	;24	>>24	<<23
10  14   ECHO/40                   ?0        8:'													<option' ?0                  	;0
11  15   FETCH_DIM_R/81            $11=      16?2                 9:'default_entries' 	;0
12  15   IS_EQUAL/17               #12=      $11                  16?1                	;0
13  15   BOOL_NOT/13               #13=      #12                  ?0                  	;0
14  15   JMPZ/43                   ?0        #13                  ?17                 	;0	>>17
15  16   NOP/0                     ?0        ?0                   ?0                  	;1
16  16   GOTO/253                  ?0        ?18                  ?10                 	;0
17  18   ECHO/40                   ?0        11:' selected'       ?0                  	;0	<<14
18  20   ECHO/40                   ?0        12:' value="'        ?0                  	;0
19  21   ECHO/40                   ?0        16?1                 ?0                  	;0
20  22   ECHO/40                   ?0        13:'">'              ?0                  	;0
21  23   ECHO/40                   ?0        16?1                 ?0                  	;0
22  24   ECHO/40                   ?0        14:'</option>
													' ?0                  	;0
23  25   JMP/42                    ?0        ?9                   ?0                  	;0	>>9
24  25   FE_FREE/127               ?0        $10                  ?0                  	;0	<<8
25  28   ECHO/40                   ?0        15:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleRadios()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md6" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">ID</th>
                                                        <th class="text-center">Icon</th>
														<th>Station Name</th>
														<th>Category</th>
                                                        <th>' ?0                  	;0
26  29   FETCH_DIM_R/81            $14=      16?3                 16:'servers'        	;0
27  29   ECHO/40                   ?0        $14                  ?0                  	;0
28  30   GOTO/253                  ?0        ?301                 ?17                 	;0
29  32   ECHO/40                   ?0        18:'</option>
													<option value="3">' ?0                  	;0
30  33   FETCH_DIM_R/81            $15=      16?3                 19:'down'           	;0
31  33   ECHO/40                   ?0        $15                  ?0                  	;0
32  34   ECHO/40                   ?0        20:'</option>
													<option value="4">' ?0                  	;0
33  35   FETCH_DIM_R/81            $16=      16?3                 21:'ready'          	;0
34  35   ECHO/40                   ?0        $16                  ?0                  	;0
35  36   ECHO/40                   ?0        22:'</option>
													<option value="5">' ?0                  	;0
36  37   GOTO/253                  ?0        ?116                 ?23                 	;0
37  39   ECHO/40                   ?0        24:'</option>
                                                    <option value="-1">No Categories</option>
													' ?0                  	;0
38  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'f769E3f0C739d1a6'	;1
39  40   SEND_VAL_EX/116           ?80       27:'live'            ?1                  	;0
40  40   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
41  40   FE_RESET_R/77             $18=      $17                  ?51                 	;0
42  40   FE_FETCH_R/78             ?0        $18                  16?4                	;51	>>51	<<50
43  41   ECHO/40                   ?0        28:'													<option value="' ?0                  	;0
44  42   FETCH_DIM_R/81            $19=      16?4                 29:'id'             	;0
45  42   ECHO/40                   ?0        $19                  ?0                  	;0
46  43   ECHO/40                   ?0        30:'">'              ?0                  	;0
47  44   FETCH_DIM_R/81            $20=      16?4                 31:'category_name'  	;0
48  44   ECHO/40                   ?0        $20                  ?0                  	;0
49  45   ECHO/40                   ?0        32:'</option>
													' ?0                  	;0
50  46   JMP/42                    ?0        ?42                  ?0                  	;0	>>42
51  46   FE_FREE/127               ?0        $18                  ?0                  	;0	<<41
52  49   ECHO/40                   ?0        33:'												</select>
											</div>
											<div class="col-md-2 col-6">
                                                <select id="stream_filter" class="form-control" data-toggle="select2">
                                                    <option value="">No Filter</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Down</option>
                                                    <option value="3">Stopped</option>
                                                    <option value="4">Starting</option>
                                                    <option value="5">On Demand</option>
                                                    <option value="6">Direct</option>
                                                    <option value="7">Timeshift</option>
                                                    <option value="8">Looping</option>
                                                    <option value="9">Has EPG</option>
                                                    <option value="10">No EPG</option>
                                                    <option value="11">Adaptive Link</option>
                                                    <option value="12">Title Sync</option>
                                                    <option value="13">Transcoding</option>
                                                </select>
                                            </div>
											<div class="col-md-1 col-6">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
53  50   FE_RESET_R/77             $21=      34:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?69                 	;0
54  50   FE_FETCH_R/78             ?0        $21                  16?1                	;69	>>69	<<68
55  51   ECHO/40                   ?0        35:'													<option' ?0                  	;0
56  52   FETCH_DIM_R/81            $22=      16?2                 36:'default_entries'	;0
57  52   IS_EQUAL/17               #23=      $22                  16?1                	;0
58  52   BOOL_NOT/13               #24=      #23                  ?0                  	;0
59  52   JMPZ/43                   ?0        #24                  ?62                 	;0	>>62
60  53   NOP/0                     ?0        ?0                   ?0                  	;1
61  53   GOTO/253                  ?0        ?63                  ?37                 	;0
62  55   ECHO/40                   ?0        38:' selected'       ?0                  	;0	<<59
63  57   ECHO/40                   ?0        39:' value="'        ?0                  	;0
64  58   ECHO/40                   ?0        16?1                 ?0                  	;0
65  59   ECHO/40                   ?0        40:'">'              ?0                  	;0
66  60   ECHO/40                   ?0        16?1                 ?0                  	;0
67  61   ECHO/40                   ?0        41:'</option>
													' ?0                  	;0
68  62   JMP/42                    ?0        ?54                  ?0                  	;0	>>54
69  62   FE_FREE/127               ?0        $21                  ?0                  	;0	<<53
70  64   GOTO/253                  ?0        ?286                 ?42                 	;0
71  66   ECHO/40                   ?0        43:'...">
											</div>
                                            <div class="col-md-3 col-6">
                                                <select id="stream_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
72  67   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'c6A90bFcD425eb63'	;0
73  67   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
74  67   FE_RESET_R/77             $26=      $25                  ?87                 	;0
75  67   FE_FETCH_R/78             ?0        $26                  16?5                	;87	>>87	<<86
76  68   ECHO/40                   ?0        46:'                                                    <option value="' ?0                  	;0
77  69   INIT_FCALL_BY_NAME/59     ?0        ?0                   47:'intval'         	;1
78  69   FETCH_DIM_FUNC_ARG/93     $27=      16?5                 49:'id'             	;1
79  69   SEND_VAR_EX/66            ?80       $27                  ?1                  	;0
80  69   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
81  69   ECHO/40                   ?0        $28                  ?0                  	;0
82  70   ECHO/40                   ?0        50:'">'              ?0                  	;0
83  71   FETCH_DIM_R/81            $29=      16?5                 51:'server_name'    	;0
84  71   ECHO/40                   ?0        $29                  ?0                  	;0
85  72   ECHO/40                   ?0        52:'</option>
                                                    ' ?0                  	;0
86  73   JMP/42                    ?0        ?75                  ?0                  	;0	>>75
87  73   FE_FREE/127               ?0        $26                  ?0                  	;0	<<74
88  76   ECHO/40                   ?0        53:'                                                </select>
                                            </div>
											<div class="col-md-3 col-6">
												<select id="stream_category_search" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
89  77   FETCH_DIM_R/81            $30=      16?3                 54:'all_categories' 	;0
90  77   ECHO/40                   ?0        $30                  ?0                  	;0
91  78   GOTO/253                  ?0        ?37                  ?55                 	;0
92  81   ECHO/40                   ?0        56:'												</select>
											</div>
											<div class="col-md-1 col-2">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleEnigmas()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md9" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">' ?0                  	;0
93  82   FETCH_DIM_R/81            $31=      16?3                 57:'id'             	;0
94  82   ECHO/40                   ?0        $31                  ?0                  	;0
95  83   ECHO/40                   ?0        58:'</th>
                                                        <th>' ?0                  	;0
96  84   FETCH_DIM_R/81            $32=      16?3                 59:'username'       	;0
97  84   ECHO/40                   ?0        $32                  ?0                  	;0
98  85   GOTO/253                  ?0        ?384                 ?60                 	;0
99  87   INCLUDE_OR_EVAL/73        ?24       61:'session.php'     ?0                  	;2	<<0
100 88   INCLUDE_OR_EVAL/73        ?25       62:'functions.php'   ?0                  	;2
101 89   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'E6d500e19634d513'	;0
102 89   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
103 89   JMPZ/43                   ?0        $35                  ?105                	;0	>>105
104 90   GOTO/253                  ?0        ?107                 ?65                 	;0
105 92   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'E72f42A93714ba87'	;0	<<103
106 92   DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
107 94   GOTO/253                  ?0        ?400                 ?68                 	;0
108 96   ECHO/40                   ?0        69:'</th>
                                                        <th class="text-center">' ?0                  	;0
109 97   FETCH_DIM_R/81            $37=      16?3                 70:'status'         	;0
110 97   ECHO/40                   ?0        $37                  ?0                  	;0
111 98   ECHO/40                   ?0        71:'</th>
                                                        <th class="text-center">' ?0                  	;0
112 99   FETCH_DIM_R/81            $38=      16?3                 72:'online'         	;0
113 99   ECHO/40                   ?0        $38                  ?0                  	;0
114 100  ECHO/40                   ?0        73:'</th>
                                                        <th class="text-center">' ?0                  	;0
115 101  GOTO/253                  ?0        ?493                 ?74                 	;0
116 103  FETCH_DIM_R/81            $39=      16?3                 75:'direct'         	;0
117 103  ECHO/40                   ?0        $39                  ?0                  	;0
118 104  ECHO/40                   ?0        76:'</option>
                                                    <option value="7">Transcoding</option>
												</select>
											</div>
											<div class="col-md-1 col-6">
												<select id="episode_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
119 105  FE_RESET_R/77             $40=      77:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?135                	;0
120 105  FE_FETCH_R/78             ?0        $40                  16?1                	;135	>>135	<<134
121 106  ECHO/40                   ?0        78:'													<option' ?0                  	;0
122 107  FETCH_DIM_R/81            $41=      16?2                 79:'default_entries'	;0
123 107  IS_EQUAL/17               #42=      $41                  16?1                	;0
124 107  BOOL_NOT/13               #43=      #42                  ?0                  	;0
125 107  JMPZ/43                   ?0        #43                  ?128                	;0	>>128
126 108  NOP/0                     ?0        ?0                   ?0                  	;1
127 108  GOTO/253                  ?0        ?129                 ?80                 	;0
128 110  ECHO/40                   ?0        81:' selected'       ?0                  	;0	<<125
129 112  ECHO/40                   ?0        82:' value="'        ?0                  	;0
130 113  ECHO/40                   ?0        16?1                 ?0                  	;0
131 114  ECHO/40                   ?0        83:'">'              ?0                  	;0
132 115  ECHO/40                   ?0        16?1                 ?0                  	;0
133 116  ECHO/40                   ?0        84:'</option>
													' ?0                  	;0
134 117  JMP/42                    ?0        ?120                 ?0                  	;0	>>120
135 117  FE_FREE/127               ?0        $40                  ?0                  	;0	<<119
136 120  ECHO/40                   ?0        85:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleEpisodes()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md5" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
                                                        <th class="text-center">' ?0                  	;0
137 121  GOTO/253                  ?0        ?270                 ?86                 	;0
138 123  FETCH_STATIC_PROP_IS/176  $44=      87:'rRequest'        88:'XUI'            	;0
139 123  ISSET_ISEMPTY_DIM_OBJ/115 #45=      $44                  90:'owner'          	;33554432
140 123  JMPZ_EX/46                #45=      #45                  ?151                	;0	>>151
141 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   91:'bA89228DC958Ce05'	;1
142 123  INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'intval'         	;1
143 123  FETCH_STATIC_PROP_FUNC_ARG/177 $46=      95:'rRequest'        96:'XUI'            	;1
144 123  FETCH_DIM_FUNC_ARG/93     $47=      $46                  98:'owner'          	;1
145 123  SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
146 123  DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
147 123  SEND_VAR_NO_REF_EX/50     ?80       $48                  ?1                  	;0
148 123  DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
149 123  ASSIGN/38                 $50=      16?0                 $49                 	;0
150 123  BOOL/52                   #45=      $50                  ?0                  	;0
151 123  BOOL_NOT/13               #51=      #45                  ?0                  	;0	<<140
152 123  JMPZ/43                   ?0        #51                  ?154                	;0	>>154
153 124  GOTO/253                  ?0        ?251                 ?99                 	;0
154 126  ECHO/40                   ?0        100:'                                                    <option value="' ?0                  	;0	<<152
155 127  INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'intval'        	;1
156 127  FETCH_DIM_FUNC_ARG/93     $52=      16?0                 103:'id'            	;1
157 127  SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
158 127  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
159 127  ECHO/40                   ?0        $53                  ?0                  	;0
160 128  ECHO/40                   ?0        104:'" selected="selected">' ?0                  	;0
161 129  FETCH_DIM_R/81            $54=      16?0                 105:'username'      	;0
162 129  ECHO/40                   ?0        $54                  ?0                  	;0
163 130  GOTO/253                  ?0        ?250                 ?106                	;0
164 132  ECHO/40                   ?0        107:'</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_mags" type="submit" class="btn btn-primary" value="Delete Devices" />
											</li>
										</ul>
									</form>
								</div>
                                <div class="tab-pane" id="enigma-selection">
									<form action="#" method="POST" id="enigma_form">
										<input type="hidden" name="enigmas" id="enigmas" value="" />
										<div class="row">
											<div class="col-md-3 col-6">
												<input type="text" class="form-control" id="enigma_search" value="" placeholder="Search Devices...">
											</div>
                                            <div class="col-md-3">
                                                <select id="enigma_reseller_search" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
165 133  FETCH_STATIC_PROP_IS/176  $55=      108:'rRequest'       109:'XUI'           	;0
166 133  ISSET_ISEMPTY_DIM_OBJ/115 #56=      $55                  111:'owner'         	;33554432
167 133  JMPZ_EX/46                #56=      #56                  ?178                	;0	>>178
168 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'bA89228dC958ce05'	;1
169 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'intval'        	;1
170 133  FETCH_STATIC_PROP_FUNC_ARG/177 $57=      116:'rRequest'       117:'XUI'           	;1
171 133  FETCH_DIM_FUNC_ARG/93     $58=      $57                  119:'owner'         	;1
172 133  SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
173 133  DO_FCALL_BY_NAME/131      $59=      ?0                   ?0                  	;0
174 133  SEND_VAR_NO_REF_EX/50     ?80       $59                  ?1                  	;0
175 133  DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
176 133  ASSIGN/38                 $61=      16?0                 $60                 	;0
177 133  BOOL/52                   #56=      $61                  ?0                  	;0
178 133  BOOL_NOT/13               #62=      #56                  ?0                  	;0	<<167
179 133  JMPZ/43                   ?0        #62                  ?181                	;0	>>181
180 134  GOTO/253                  ?0        ?436                 ?120                	;0
181 136  ECHO/40                   ?0        121:'                                                    <option value="' ?0                  	;0	<<179
182 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   122:'intval'        	;1
183 137  FETCH_DIM_FUNC_ARG/93     $63=      16?0                 124:'id'            	;1
184 137  SEND_VAR_EX/66            ?80       $63                  ?1                  	;0
185 137  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
186 137  ECHO/40                   ?0        $64                  ?0                  	;0
187 138  ECHO/40                   ?0        125:'" selected="selected">' ?0                  	;0
188 139  GOTO/253                  ?0        ?433                 ?126                	;0
189 141  ECHO/40                   ?0        127:'												</select>
											</div>
											<div class="col-md-1 col-2">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleLines()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md3" class="table table-borderless mb-0">
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
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_lines" type="submit" class="btn btn-primary" value="Delete Lines" />
											</li>
										</ul>
									</form>
								</div>
                                <div class="tab-pane" id="user-selection">
									<form action="#" method="POST" id="user_form">
										<input type="hidden" name="users" id="users" value="" />
										<div class="row">
											<div class="col-md-3 col-6">
												<input type="text" class="form-control" id="user_search" value="" placeholder="Search Users...">
											</div>
                                            <div class="col-md-3">
                                                <select id="user_reseller_search" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
190 142  FETCH_STATIC_PROP_IS/176  $65=      128:'rRequest'       129:'XUI'           	;0
191 142  ISSET_ISEMPTY_DIM_OBJ/115 #66=      $65                  131:'owner'         	;33554432
192 142  JMPZ_EX/46                #66=      #66                  ?203                	;0	>>203
193 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'bA89228dC958cE05'	;1
194 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'intval'        	;1
195 142  FETCH_STATIC_PROP_FUNC_ARG/177 $67=      136:'rRequest'       137:'XUI'           	;1
196 142  FETCH_DIM_FUNC_ARG/93     $68=      $67                  139:'owner'         	;1
197 142  SEND_VAR_EX/66            ?80       $68                  ?1                  	;0
198 142  DO_FCALL_BY_NAME/131      $69=      ?0                   ?0                  	;0
199 142  SEND_VAR_NO_REF_EX/50     ?80       $69                  ?1                  	;0
200 142  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
201 142  ASSIGN/38                 $71=      16?0                 $70                 	;0
202 142  BOOL/52                   #66=      $71                  ?0                  	;0
203 142  BOOL_NOT/13               #72=      #66                  ?0                  	;0	<<192
204 142  JMPZ/43                   ?0        #72                  ?206                	;0	>>206
205 143  GOTO/253                  ?0        ?532                 ?140                	;0
206 145  ECHO/40                   ?0        141:'                                                    <option value="' ?0                  	;0	<<204
207 146  INIT_FCALL_BY_NAME/59     ?0        ?0                   142:'intval'        	;1
208 146  FETCH_DIM_FUNC_ARG/93     $73=      16?0                 144:'id'            	;1
209 146  SEND_VAR_EX/66            ?80       $73                  ?1                  	;0
210 146  DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
211 146  ECHO/40                   ?0        $74                  ?0                  	;0
212 147  ECHO/40                   ?0        145:'" selected="selected">' ?0                  	;0
213 148  GOTO/253                  ?0        ?529                 ?146                	;0
214 151  ECHO/40                   ?0        147:'												</select>
											</div>
                                            <div class="col-md-3 col-6">
                                                <select id="episode_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
215 152  INIT_FCALL_BY_NAME/59     ?0        ?0                   148:'C6a90bfcD425eb63'	;0
216 152  DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
217 152  FE_RESET_R/77             $76=      $75                  ?230                	;0
218 152  FE_FETCH_R/78             ?0        $76                  16?5                	;230	>>230	<<229
219 153  ECHO/40                   ?0        150:'                                                    <option value="' ?0                  	;0
220 154  INIT_FCALL_BY_NAME/59     ?0        ?0                   151:'intval'        	;1
221 154  FETCH_DIM_FUNC_ARG/93     $77=      16?5                 153:'id'            	;1
222 154  SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
223 154  DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
224 154  ECHO/40                   ?0        $78                  ?0                  	;0
225 155  ECHO/40                   ?0        154:'">'             ?0                  	;0
226 156  FETCH_DIM_R/81            $79=      16?5                 155:'server_name'   	;0
227 156  ECHO/40                   ?0        $79                  ?0                  	;0
228 157  ECHO/40                   ?0        156:'</option>
                                                    ' ?0                  	;0
229 158  JMP/42                    ?0        ?218                 ?0                  	;0	>>218
230 158  FE_FREE/127               ?0        $76                  ?0                  	;0	<<217
231 161  ECHO/40                   ?0        157:'                                                </select>
                                            </div>
											<div class="col-md-2 col-6">
												<select id="episode_filter" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
232 162  GOTO/253                  ?0        ?375                 ?158                	;0
233 164  ECHO/40                   ?0        159:'</span>
									</a>
								</li>
                                <li class="nav-item">
									<a href="#radio-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
										<i class="mdi mdi-radio mr-1"></i>
										<span class="d-none d-sm-inline">' ?0                  	;0
234 165  FETCH_DIM_R/81            $80=      16?3                 160:'stations'      	;0
235 165  ECHO/40                   ?0        $80                  ?0                  	;0
236 166  ECHO/40                   ?0        161:'</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#episodes-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
										<i class="mdi mdi-folder-open-outline mr-1"></i>
										<span class="d-none d-sm-inline">' ?0                  	;0
237 167  FETCH_DIM_R/81            $81=      16?3                 162:'episodes'      	;0
238 167  ECHO/40                   ?0        $81                  ?0                  	;0
239 168  ECHO/40                   ?0        163:'</span>
									</a>
								</li>
                                <li class="nav-item">
									<a href="#series-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
										<i class="mdi mdi-youtube-tv mr-1"></i>
										<span class="d-none d-sm-inline">' ?0                  	;0
240 169  GOTO/253                  ?0        ?241                 ?164                	;0
241 171  FETCH_DIM_R/81            $82=      16?3                 165:'series'        	;0
242 171  ECHO/40                   ?0        $82                  ?0                  	;0
243 172  ECHO/40                   ?0        166:'</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#line-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
										<i class="mdi mdi-wallet-membership mr-1"></i>
										<span class="d-none d-sm-inline">' ?0                  	;0
244 173  FETCH_DIM_R/81            $83=      16?3                 167:'lines'         	;0
245 173  ECHO/40                   ?0        $83                  ?0                  	;0
246 174  ECHO/40                   ?0        168:'</span>
									</a>
								</li>
                                <li class="nav-item">
									<a href="#user-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
										<i class="mdi mdi-account mr-1"></i>
										<span class="d-none d-sm-inline">Users</span>
									</a>
								</li>
                                <li class="nav-item">
									<a href="#mag-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
										<i class="mdi mdi-monitor mr-1"></i>
										<span class="d-none d-sm-inline">MAGs</span>
									</a>
								</li>
                                <li class="nav-item">
									<a href="#enigma-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
										<i class="mdi mdi-desktop-tower-monitor mr-1"></i>
										<span class="d-none d-sm-inline">Enigmas</span>
									</a>
								</li>
							</ul>
							<div class="tab-content b-0 mb-0 pt-0">
								<div class="tab-pane" id="stream-selection">
									<form action="#" method="POST" id="stream_form">
										<input type="hidden" name="streams" id="streams" value="" />
										<div class="row">
											<div class="col-md-2 col-6">
												<input type="text" class="form-control" id="stream_search" value="" placeholder="' ?0                  	;0
247 175  FETCH_DIM_R/81            $84=      16?3                 169:'search_streams'	;0
248 175  ECHO/40                   ?0        $84                  ?0                  	;0
249 176  GOTO/253                  ?0        ?71                  ?170                	;0
250 178  ECHO/40                   ?0        171:'</option>
                                                    ' ?0                  	;0
251 180  ECHO/40                   ?0        172:'                                                </select>
                                            </div>
                                            <label class="col-md-1 col-form-label text-center" for="reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();">CLEAR</button></label>
											<div class="col-md-2">
												<select id="line_filter" class="form-control" data-toggle="select2">
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
												<select id="line_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
252 181  FE_RESET_R/77             $85=      173:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?268                	;0
253 181  FE_FETCH_R/78             ?0        $85                  16?1                	;268	>>268	<<267
254 182  ECHO/40                   ?0        174:'													<option' ?0                  	;0
255 183  FETCH_DIM_R/81            $86=      16?2                 175:'default_entries'	;0
256 183  IS_EQUAL/17               #87=      $86                  16?1                	;0
257 183  BOOL_NOT/13               #88=      #87                  ?0                  	;0
258 183  JMPZ/43                   ?0        #88                  ?261                	;0	>>261
259 184  NOP/0                     ?0        ?0                   ?0                  	;1
260 184  GOTO/253                  ?0        ?262                 ?176                	;0
261 186  ECHO/40                   ?0        177:' selected'      ?0                  	;0	<<258
262 188  ECHO/40                   ?0        178:' value="'       ?0                  	;0
263 189  ECHO/40                   ?0        16?1                 ?0                  	;0
264 190  ECHO/40                   ?0        179:'">'             ?0                  	;0
265 191  ECHO/40                   ?0        16?1                 ?0                  	;0
266 192  ECHO/40                   ?0        180:'</option>
													' ?0                  	;0
267 193  JMP/42                    ?0        ?253                 ?0                  	;0	>>253
268 193  FE_FREE/127               ?0        $85                  ?0                  	;0	<<252
269 196  GOTO/253                  ?0        ?189                 ?181                	;0
270 198  FETCH_DIM_R/81            $89=      16?3                 182:'id'            	;0
271 198  ECHO/40                   ?0        $89                  ?0                  	;0
272 199  ECHO/40                   ?0        183:'</th>
                                                        <th class="text-center">Image</th>
                                                        <th>' ?0                  	;0
273 200  FETCH_DIM_R/81            $90=      16?3                 184:'name'          	;0
274 200  ECHO/40                   ?0        $90                  ?0                  	;0
275 201  ECHO/40                   ?0        185:'</th>
                                                        <th>' ?0                  	;0
276 202  FETCH_DIM_R/81            $91=      16?3                 186:'server'        	;0
277 202  ECHO/40                   ?0        $91                  ?0                  	;0
278 203  GOTO/253                  ?0        ?293                 ?187                	;0
279 206  ECHO/40                   ?0        188:'				<div class="card">
					<div class="card-body">
						<div id="basicwizard">
							<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
								<li class="nav-item">
									<a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-play mr-1"></i>
										<span class="d-none d-sm-inline">' ?0                  	;0
280 207  FETCH_DIM_R/81            $92=      16?3                 189:'streams'       	;0
281 207  ECHO/40                   ?0        $92                  ?0                  	;0
282 208  ECHO/40                   ?0        190:'</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#movie-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-account-card-details-outline mr-1"></i>
										<span class="d-none d-sm-inline">' ?0                  	;0
283 209  FETCH_DIM_R/81            $93=      16?3                 191:'movies'        	;0
284 209  ECHO/40                   ?0        $93                  ?0                  	;0
285 210  GOTO/253                  ?0        ?233                 ?192                	;0
286 213  ECHO/40                   ?0        193:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md1" class="table table-borderless mb-0">
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
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_streams" type="submit" class="btn btn-primary" value="' ?0                  	;0
287 214  FETCH_DIM_R/81            $94=      16?3                 194:'delete_streams'	;0
288 214  ECHO/40                   ?0        $94                  ?0                  	;0
289 215  ECHO/40                   ?0        195:'" />
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="movie-selection">
									<form action="#" method="POST" id="movie_form">
										<input type="hidden" name="movies" id="movies" value="" />
										<div class="row">
											<div class="col-md-2 col-6">
												<input type="text" class="form-control" id="movie_search" value="" placeholder="' ?0                  	;0
290 216  FETCH_DIM_R/81            $95=      16?3                 196:'search_movies' 	;0
291 216  ECHO/40                   ?0        $95                  ?0                  	;0
292 217  GOTO/253                  ?0        ?455                 ?197                	;0
293 219  ECHO/40                   ?0        198:'</th>
                                                        <th class="text-center">' ?0                  	;0
294 220  FETCH_DIM_R/81            $96=      16?3                 199:'status'        	;0
295 220  ECHO/40                   ?0        $96                  ?0                  	;0
296 221  ECHO/40                   ?0        200:'</th>
                                                    </tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_episodes" type="submit" class="btn btn-primary" value="' ?0                  	;0
297 222  FETCH_DIM_R/81            $97=      16?3                 201:'delete_episodes'	;0
298 222  ECHO/40                   ?0        $97                  ?0                  	;0
299 223  ECHO/40                   ?0        202:'" />
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="line-selection">
									<form action="#" method="POST" id="line_form">
										<input type="hidden" name="lines" id="lines" value="" />
										<div class="row">
											<div class="col-md-3 col-6">
												<input type="text" class="form-control" id="line_search" value="" placeholder="Search Lines...">
											</div>
											<div class="col-md-3">
                                                <select id="reseller_search" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
300 224  GOTO/253                  ?0        ?138                 ?203                	;0
301 226  ECHO/40                   ?0        204:'</th>
                                                        <th class="text-center">Status</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_streams" type="submit" class="btn btn-primary" value="Delete Stations" />
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="series-selection">
									<form action="#" method="POST" id="series_form">
										<input type="hidden" name="series" id="series" value="" />
										<div class="row">
											<div class="col-md-6 col-6">
												<input type="text" class="form-control" id="series_search" value="" placeholder="' ?0                  	;0
302 227  FETCH_DIM_R/81            $98=      16?3                 205:'search_series' 	;0
303 227  ECHO/40                   ?0        $98                  ?0                  	;0
304 228  ECHO/40                   ?0        206:'...">
											</div>
											<div class="col-md-3 col-6">
												<select id="series_category_search" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
305 229  FETCH_DIM_R/81            $99=      16?3                 207:'all_categories'	;0
306 229  ECHO/40                   ?0        $99                  ?0                  	;0
307 230  ECHO/40                   ?0        208:'</option>
													<option value="-1">' ?0                  	;0
308 231  GOTO/253                  ?0        ?608                 ?209                	;0
309 233  FETCH_DIM_R/81            $100=     16?3                 210:'search_episodes'	;0
310 233  ECHO/40                   ?0        $100                 ?0                  	;0
311 234  ECHO/40                   ?0        211:'...">
											</div>
											<div class="col-md-3 col-6">
												<select id="episode_series" class="form-control" data-toggle="select2">
													<option value="">' ?0                  	;0
312 235  FETCH_DIM_R/81            $101=     16?3                 212:'all_series'    	;0
313 235  ECHO/40                   ?0        $101                 ?0                  	;0
314 236  ECHO/40                   ?0        213:'</option>
													' ?0                  	;0
315 237  INIT_FCALL_BY_NAME/59     ?0        ?0                   214:'F5E03449E4b2215C'	;0
316 237  DO_FCALL_BY_NAME/131      $102=     ?0                   ?0                  	;0
317 237  FE_RESET_R/77             $103=     $102                 ?327                	;0
318 237  FE_FETCH_R/78             ?0        $103                 16?6                	;327	>>327	<<326
319 238  ECHO/40                   ?0        216:'													<option value="' ?0                  	;0
320 239  FETCH_DIM_R/81            $104=     16?6                 217:'id'            	;0
321 239  ECHO/40                   ?0        $104                 ?0                  	;0
322 240  ECHO/40                   ?0        218:'">'             ?0                  	;0
323 241  FETCH_DIM_R/81            $105=     16?6                 219:'title'         	;0
324 241  ECHO/40                   ?0        $105                 ?0                  	;0
325 242  ECHO/40                   ?0        220:'</option>
													' ?0                  	;0
326 243  JMP/42                    ?0        ?318                 ?0                  	;0	>>318
327 243  FE_FREE/127               ?0        $103                 ?0                  	;0	<<317
328 245  GOTO/253                  ?0        ?214                 ?221                	;0
329 247  ECHO/40                   ?0        222:'					</div>
					<h4 class="page-title">' ?0                  	;0
330 248  FETCH_DIM_R/81            $106=     16?3                 223:'mass_delete'   	;0
331 248  ECHO/40                   ?0        $106                 ?0                  	;0
332 249  ECHO/40                   ?0        224:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
333 250  ISSET_ISEMPTY_CV/197      #107=     16?7                 ?0                  	;33554432
334 250  JMPZ_EX/46                #107=     #107                 ?337                	;0	>>337
335 250  IS_EQUAL/17               #108=     16?7                 225:1               	;0
336 250  BOOL/52                   #107=     #108                 ?0                  	;0
337 250  BOOL_NOT/13               #109=     #107                 ?0                  	;0	<<334
338 250  JMPZ/43                   ?0        #109                 ?340                	;0	>>340
339 251  GOTO/253                  ?0        ?279                 ?226                	;0
340 253  ECHO/40                   ?0        227:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass delete has been executed.
				</div>
				' ?0                  	;0	<<338
341 254  GOTO/253                  ?0        ?279                 ?228                	;0
342 257  ECHO/40                   ?0        229:'												</select>
											</div>
											<div class="col-md-1 col-2">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleUsers()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md7" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">ID</th>
                                                        <th>Username</th>
                                                        <th>Owner</th>
                                                        <th class="text-center">IP</th>
                                                        <th class="text-center">Type</th>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Credits</th>
                                                        <th class="text-center">Users</th>
                                                        <th class="text-center">Last Login</th>
                                                        <th class="text-center">Actions</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_users" type="submit" class="btn btn-primary" value="Delete Users" />
											</li>
										</ul>
									</form>
								</div>
                                <div class="tab-pane" id="mag-selection">
									<form action="#" method="POST" id="mag_form">
										<input type="hidden" name="mags" id="mags" value="" />
										<div class="row">
											<div class="col-md-3 col-6">
												<input type="text" class="form-control" id="mag_search" value="" placeholder="Search Devices...">
											</div>
                                            <div class="col-md-3">
                                                <select id="mag_reseller_search" class="form-control" data-toggle="select2">
                                                    ' ?0                  	;0
343 258  FETCH_STATIC_PROP_IS/176  $110=     230:'rRequest'       231:'XUI'           	;0
344 258  ISSET_ISEMPTY_DIM_OBJ/115 #111=     $110                 233:'owner'         	;33554432
345 258  JMPZ_EX/46                #111=     #111                 ?356                	;0	>>356
346 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'bA89228dc958cE05'	;1
347 258  INIT_FCALL_BY_NAME/59     ?0        ?0                   236:'intval'        	;1
348 258  FETCH_STATIC_PROP_FUNC_ARG/177 $112=     238:'rRequest'       239:'XUI'           	;1
349 258  FETCH_DIM_FUNC_ARG/93     $113=     $112                 241:'owner'         	;1
350 258  SEND_VAR_EX/66            ?80       $113                 ?1                  	;0
351 258  DO_FCALL_BY_NAME/131      $114=     ?0                   ?0                  	;0
352 258  SEND_VAR_NO_REF_EX/50     ?80       $114                 ?1                  	;0
353 258  DO_FCALL_BY_NAME/131      $115=     ?0                   ?0                  	;0
354 258  ASSIGN/38                 $116=     16?0                 $115                	;0
355 258  BOOL/52                   #111=     $116                 ?0                  	;0
356 258  BOOL_NOT/13               #117=     #111                 ?0                  	;0	<<345
357 258  JMPZ/43                   ?0        #117                 ?359                	;0	>>359
358 259  GOTO/253                  ?0        ?5                   ?242                	;0
359 261  ECHO/40                   ?0        243:'                                                    <option value="' ?0                  	;0	<<357
360 262  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'intval'        	;1
361 262  FETCH_DIM_FUNC_ARG/93     $118=     16?0                 246:'id'            	;1
362 262  SEND_VAR_EX/66            ?80       $118                 ?1                  	;0
363 262  DO_FCALL_BY_NAME/131      $119=     ?0                   ?0                  	;0
364 262  ECHO/40                   ?0        $119                 ?0                  	;0
365 263  GOTO/253                  ?0        ?1                   ?247                	;0
366 265  FETCH_DIM_R/81            $120=     16?3                 248:'category'      	;0
367 265  ECHO/40                   ?0        $120                 ?0                  	;0
368 266  ECHO/40                   ?0        249:'</th>
                                                        <th>' ?0                  	;0
369 267  FETCH_DIM_R/81            $121=     16?3                 250:'servers'       	;0
370 267  ECHO/40                   ?0        $121                 ?0                  	;0
371 268  ECHO/40                   ?0        251:'</th>
														<th class="text-center">' ?0                  	;0
372 269  FETCH_DIM_R/81            $122=     16?3                 252:'status'        	;0
373 269  ECHO/40                   ?0        $122                 ?0                  	;0
374 270  GOTO/253                  ?0        ?587                 ?253                	;0
375 272  FETCH_DIM_R/81            $123=     16?3                 254:'no_filter'     	;0
376 272  ECHO/40                   ?0        $123                 ?0                  	;0
377 273  ECHO/40                   ?0        255:'</option>
													<option value="1">' ?0                  	;0
378 274  FETCH_DIM_R/81            $124=     16?3                 256:'encoded'       	;0
379 274  ECHO/40                   ?0        $124                 ?0                  	;0
380 275  ECHO/40                   ?0        257:'</option>
													<option value="2">' ?0                  	;0
381 276  FETCH_DIM_R/81            $125=     16?3                 258:'encoding'      	;0
382 276  ECHO/40                   ?0        $125                 ?0                  	;0
383 277  GOTO/253                  ?0        ?29                  ?259                	;0
384 279  ECHO/40                   ?0        260:'</th>
                                                        <th class="text-center">' ?0                  	;0
385 280  FETCH_DIM_R/81            $126=     16?3                 261:'mac_address'   	;0
386 280  ECHO/40                   ?0        $126                 ?0                  	;0
387 281  ECHO/40                   ?0        262:'</th>
                                                        <th class="text-center">Device</th>
                                                        <th>' ?0                  	;0
388 282  FETCH_DIM_R/81            $127=     16?3                 263:'owner'         	;0
389 282  ECHO/40                   ?0        $127                 ?0                  	;0
390 283  ECHO/40                   ?0        264:'</th>
                                                        <th class="text-center">' ?0                  	;0
391 284  GOTO/253                  ?0        ?578                 ?265                	;0
392 286  ECHO/40                   ?0        266:'</option>
													<option value="1">' ?0                  	;0
393 287  FETCH_DIM_R/81            $128=     16?3                 267:'encoded'       	;0
394 287  ECHO/40                   ?0        $128                 ?0                  	;0
395 288  ECHO/40                   ?0        268:'</option>
													<option value="2">' ?0                  	;0
396 289  FETCH_DIM_R/81            $129=     16?3                 269:'encoding'      	;0
397 289  ECHO/40                   ?0        $129                 ?0                  	;0
398 290  ECHO/40                   ?0        270:'</option>
													<option value="3">' ?0                  	;0
399 291  GOTO/253                  ?0        ?484                 ?271                	;0
400 293  INIT_FCALL_BY_NAME/59     ?0        ?0                   272:'set_time_limit'	;1
401 293  SEND_VAL_EX/116           ?80       274:0                ?1                  	;0
402 293  DO_FCALL_BY_NAME/131      ?121      ?0                   ?0                  	;0
403 294  INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'ini_set'       	;2
404 294  SEND_VAL_EX/116           ?80       277:'max_execution_time' ?1                  	;0
405 294  SEND_VAL_EX/116           ?96       278:0                ?2                  	;0
406 294  DO_FCALL_BY_NAME/131      ?122      ?0                   ?0                  	;0
407 295  ASSIGN/38                 ?123      16?8                 279:'Mass Delete'   	;0
408 296  INCLUDE_OR_EVAL/73        ?124      280:'header.php'     ?0                  	;2
409 297  ECHO/40                   ?0        281:'<div class="wrapper boxed-layout-xl"' ?0                  	;0
410 298  GOTO/253                  ?0        ?551                 ?282                	;0
411 300  FE_RESET_R/77             $134=     283:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?427                	;0
412 300  FE_FETCH_R/78             ?0        $134                 16?1                	;427	>>427	<<426
413 301  ECHO/40                   ?0        284:'													<option' ?0                  	;0
414 302  FETCH_DIM_R/81            $135=     16?2                 285:'default_entries'	;0
415 302  IS_EQUAL/17               #136=     $135                 16?1                	;0
416 302  BOOL_NOT/13               #137=     #136                 ?0                  	;0
417 302  JMPZ/43                   ?0        #137                 ?420                	;0	>>420
418 303  NOP/0                     ?0        ?0                   ?0                  	;1
419 303  GOTO/253                  ?0        ?421                 ?286                	;0
420 305  ECHO/40                   ?0        287:' selected'      ?0                  	;0	<<417
421 307  ECHO/40                   ?0        288:' value="'       ?0                  	;0
422 308  ECHO/40                   ?0        16?1                 ?0                  	;0
423 309  ECHO/40                   ?0        289:'">'             ?0                  	;0
424 310  ECHO/40                   ?0        16?1                 ?0                  	;0
425 311  ECHO/40                   ?0        290:'</option>
													' ?0                  	;0
426 312  JMP/42                    ?0        ?412                 ?0                  	;0	>>412
427 312  FE_FREE/127               ?0        $134                 ?0                  	;0	<<411
428 315  ECHO/40                   ?0        291:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleSeries()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md4" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">ID</th>
                                                        <th class="text-center">Image</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th class="text-center">Seasons</th>
                                                        <th class="text-center">Episodes</th>
                                                        <th class="text-center">TMDb</th>
                                                        <th class="text-center">First Aired</th>
                                                        <th class="text-center">Last Updated</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_series" type="submit" class="btn btn-primary" value="' ?0                  	;0
429 316  FETCH_DIM_R/81            $138=     16?3                 292:'delete_series' 	;0
430 316  ECHO/40                   ?0        $138                 ?0                  	;0
431 317  ECHO/40                   ?0        293:'" />
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="episodes-selection">
									<form action="#" method="POST" id="episodes_form">
										<input type="hidden" name="episodes" id="episodes" value="" />
										<div class="row">
											<div class="col-md-2 col-6">
												<input type="text" class="form-control" id="episode_search" value="" placeholder="' ?0                  	;0
432 318  GOTO/253                  ?0        ?309                 ?294                	;0
433 320  FETCH_DIM_R/81            $139=     16?0                 295:'username'      	;0
434 320  ECHO/40                   ?0        $139                 ?0                  	;0
435 321  ECHO/40                   ?0        296:'</option>
                                                    ' ?0                  	;0
436 323  ECHO/40                   ?0        297:'                                                </select>
                                            </div>
                                            <label class="col-md-1 col-form-label text-center" for="enigma_reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearE2Owner();">CLEAR</button></label>
											<div class="col-md-2">
												<select id="enigma_filter" class="form-control" data-toggle="select2">
													<option value="" selected>No Filter</option>
													<option value="1">Active</option>
													<option value="2">Disabled</option>
													<option value="3">Banned</option>
													<option value="4">Expired</option>
													<option value="5">Trial</option>
												</select>
											</div>
											<div class="col-md-2 col-8">
												<select id="enigma_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
437 324  FE_RESET_R/77             $140=     298:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?453                	;0
438 324  FE_FETCH_R/78             ?0        $140                 16?1                	;453	>>453	<<452
439 325  ECHO/40                   ?0        299:'													<option' ?0                  	;0
440 326  FETCH_DIM_R/81            $141=     16?2                 300:'default_entries'	;0
441 326  IS_EQUAL/17               #142=     $141                 16?1                	;0
442 326  BOOL_NOT/13               #143=     #142                 ?0                  	;0
443 326  JMPZ/43                   ?0        #143                 ?446                	;0	>>446
444 327  NOP/0                     ?0        ?0                   ?0                  	;1
445 327  GOTO/253                  ?0        ?447                 ?301                	;0
446 329  ECHO/40                   ?0        302:' selected'      ?0                  	;0	<<443
447 331  ECHO/40                   ?0        303:' value="'       ?0                  	;0
448 332  ECHO/40                   ?0        16?1                 ?0                  	;0
449 333  ECHO/40                   ?0        304:'">'             ?0                  	;0
450 334  ECHO/40                   ?0        16?1                 ?0                  	;0
451 335  ECHO/40                   ?0        305:'</option>
													' ?0                  	;0
452 336  JMP/42                    ?0        ?438                 ?0                  	;0	>>438
453 336  FE_FREE/127               ?0        $140                 ?0                  	;0	<<437
454 338  GOTO/253                  ?0        ?92                  ?306                	;0
455 340  ECHO/40                   ?0        307:'...">
											</div>
                                            <div class="col-md-3 col-6">
                                                <select id="movie_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
456 341  INIT_FCALL_BY_NAME/59     ?0        ?0                   308:'C6A90bFcD425EB63'	;0
457 341  DO_FCALL_BY_NAME/131      $144=     ?0                   ?0                  	;0
458 341  FE_RESET_R/77             $145=     $144                 ?471                	;0
459 341  FE_FETCH_R/78             ?0        $145                 16?5                	;471	>>471	<<470
460 342  ECHO/40                   ?0        310:'                                                    <option value="' ?0                  	;0
461 343  INIT_FCALL_BY_NAME/59     ?0        ?0                   311:'intval'        	;1
462 343  FETCH_DIM_FUNC_ARG/93     $146=     16?5                 313:'id'            	;1
463 343  SEND_VAR_EX/66            ?80       $146                 ?1                  	;0
464 343  DO_FCALL_BY_NAME/131      $147=     ?0                   ?0                  	;0
465 343  ECHO/40                   ?0        $147                 ?0                  	;0
466 344  ECHO/40                   ?0        314:'">'             ?0                  	;0
467 345  FETCH_DIM_R/81            $148=     16?5                 315:'server_name'   	;0
468 345  ECHO/40                   ?0        $148                 ?0                  	;0
469 346  ECHO/40                   ?0        316:'</option>
                                                    ' ?0                  	;0
470 347  JMP/42                    ?0        ?459                 ?0                  	;0	>>459
471 347  FE_FREE/127               ?0        $145                 ?0                  	;0	<<458
472 350  ECHO/40                   ?0        317:'                                                </select>
                                            </div>
											<div class="col-md-3 col-6">
												<select id="movie_category_search" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
473 351  FETCH_DIM_R/81            $149=     16?3                 318:'all_categories'	;0
474 351  ECHO/40                   ?0        $149                 ?0                  	;0
475 352  GOTO/253                  ?0        ?510                 ?319                	;0
476 354  ECHO/40                   ?0        320:'</th>
                                                        <th class="text-center">' ?0                  	;0
477 355  FETCH_DIM_R/81            $150=     16?3                 321:'expiration'    	;0
478 355  ECHO/40                   ?0        $150                 ?0                  	;0
479 356  ECHO/40                   ?0        322:'</th>
                                                        <th class="text-center">' ?0                  	;0
480 357  FETCH_DIM_R/81            $151=     16?3                 323:'actions'       	;0
481 357  ECHO/40                   ?0        $151                 ?0                  	;0
482 358  ECHO/40                   ?0        324:'</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_enigmas" type="submit" class="btn btn-primary" value="Delete Devices" />
											</li>
										</ul>
									</form>
								</div>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
483 359  GOTO/253                  ?0        ?690                 ?325                	;0
484 361  FETCH_DIM_R/81            $152=     16?3                 326:'down'          	;0
485 361  ECHO/40                   ?0        $152                 ?0                  	;0
486 362  ECHO/40                   ?0        327:'</option>
													<option value="4">' ?0                  	;0
487 363  FETCH_DIM_R/81            $153=     16?3                 328:'ready'         	;0
488 363  ECHO/40                   ?0        $153                 ?0                  	;0
489 364  ECHO/40                   ?0        329:'</option>
													<option value="5">' ?0                  	;0
490 365  FETCH_DIM_R/81            $154=     16?3                 330:'direct'        	;0
491 365  ECHO/40                   ?0        $154                 ?0                  	;0
492 366  GOTO/253                  ?0        ?668                 ?331                	;0
493 368  FETCH_DIM_R/81            $155=     16?3                 332:'trial'         	;0
494 368  ECHO/40                   ?0        $155                 ?0                  	;0
495 369  ECHO/40                   ?0        333:'</th>
                                                        <th class="text-center">' ?0                  	;0
496 370  FETCH_DIM_R/81            $156=     16?3                 334:'expiration'    	;0
497 370  ECHO/40                   ?0        $156                 ?0                  	;0
498 371  ECHO/40                   ?0        335:'</th>
                                                        <th class="text-center">' ?0                  	;0
499 372  FETCH_DIM_R/81            $157=     16?3                 336:'actions'       	;0
500 372  ECHO/40                   ?0        $157                 ?0                  	;0
501 373  GOTO/253                  ?0        ?164                 ?337                	;0
502 375  ECHO/40                   ?0        338:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleMovies()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md2" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">' ?0                  	;0
503 376  FETCH_DIM_R/81            $158=     16?3                 339:'id'            	;0
504 376  ECHO/40                   ?0        $158                 ?0                  	;0
505 377  ECHO/40                   ?0        340:'</th>
                                                        <th class="text-center">Image</th>
														<th>' ?0                  	;0
506 378  FETCH_DIM_R/81            $159=     16?3                 341:'name'          	;0
507 378  ECHO/40                   ?0        $159                 ?0                  	;0
508 379  ECHO/40                   ?0        342:'</th>
														<th>' ?0                  	;0
509 380  GOTO/253                  ?0        ?366                 ?343                	;0
510 382  ECHO/40                   ?0        344:'</option>
                                                    <option value="-1">No Categories</option>
													' ?0                  	;0
511 383  INIT_FCALL_BY_NAME/59     ?0        ?0                   345:'F769E3F0c739D1a6'	;1
512 383  SEND_VAL_EX/116           ?80       347:'movie'          ?1                  	;0
513 383  DO_FCALL_BY_NAME/131      $160=     ?0                   ?0                  	;0
514 383  FE_RESET_R/77             $161=     $160                 ?524                	;0
515 383  FE_FETCH_R/78             ?0        $161                 16?4                	;524	>>524	<<523
516 384  ECHO/40                   ?0        348:'													<option value="' ?0                  	;0
517 385  FETCH_DIM_R/81            $162=     16?4                 349:'id'            	;0
518 385  ECHO/40                   ?0        $162                 ?0                  	;0
519 386  ECHO/40                   ?0        350:'">'             ?0                  	;0
520 387  FETCH_DIM_R/81            $163=     16?4                 351:'category_name' 	;0
521 387  ECHO/40                   ?0        $163                 ?0                  	;0
522 388  ECHO/40                   ?0        352:'</option>
													' ?0                  	;0
523 389  JMP/42                    ?0        ?515                 ?0                  	;0	>>515
524 389  FE_FREE/127               ?0        $161                 ?0                  	;0	<<514
525 392  ECHO/40                   ?0        353:'												</select>
											</div>
											<div class="col-md-2 col-6">
												<select id="movie_filter" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
526 393  FETCH_DIM_R/81            $164=     16?3                 354:'no_filter'     	;0
527 393  ECHO/40                   ?0        $164                 ?0                  	;0
528 394  GOTO/253                  ?0        ?392                 ?355                	;0
529 396  FETCH_DIM_R/81            $165=     16?0                 356:'username'      	;0
530 396  ECHO/40                   ?0        $165                 ?0                  	;0
531 397  ECHO/40                   ?0        357:'</option>
                                                    ' ?0                  	;0
532 399  ECHO/40                   ?0        358:'                                                </select>
                                            </div>
                                            <label class="col-md-1 col-form-label text-center" for="user_reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearUserOwner();">CLEAR</button></label>
											<div class="col-md-2">
												<select id="user_filter" class="form-control" data-toggle="select2">
													<option value="" selected>No Filter</option>
													<option value="-1">Active</option>
													<option value="-2">Disabled</option>
												</select>
											</div>
											<div class="col-md-2 col-8">
												<select id="user_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
533 400  FE_RESET_R/77             $166=     359:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?549                	;0
534 400  FE_FETCH_R/78             ?0        $166                 16?1                	;549	>>549	<<548
535 401  ECHO/40                   ?0        360:'													<option' ?0                  	;0
536 402  FETCH_DIM_R/81            $167=     16?2                 361:'default_entries'	;0
537 402  IS_EQUAL/17               #168=     $167                 16?1                	;0
538 402  BOOL_NOT/13               #169=     #168                 ?0                  	;0
539 402  JMPZ/43                   ?0        #169                 ?542                	;0	>>542
540 403  NOP/0                     ?0        ?0                   ?0                  	;1
541 403  GOTO/253                  ?0        ?543                 ?362                	;0
542 405  ECHO/40                   ?0        363:' selected'      ?0                  	;0	<<539
543 407  ECHO/40                   ?0        364:' value="'       ?0                  	;0
544 408  ECHO/40                   ?0        16?1                 ?0                  	;0
545 409  ECHO/40                   ?0        365:'">'             ?0                  	;0
546 410  ECHO/40                   ?0        16?1                 ?0                  	;0
547 411  ECHO/40                   ?0        366:'</option>
													' ?0                  	;0
548 412  JMP/42                    ?0        ?534                 ?0                  	;0	>>534
549 412  FE_FREE/127               ?0        $166                 ?0                  	;0	<<533
550 414  GOTO/253                  ?0        ?342                 ?367                	;0
551 416  FETCH_IS/89               $170=     368:'_SERVER'        ?0                  	;0
552 416  ISSET_ISEMPTY_DIM_OBJ/115 #171=     $170                 369:'HTTP_X_REQUESTED_WITH'	;16777216
553 416  BOOL_NOT/13               #172=     #171                 ?0                  	;0
554 416  JMPZ_EX/46                #172=     #172                 ?562                	;0	>>562
555 416  INIT_FCALL_BY_NAME/59     ?0        ?0                   370:'strtolower'    	;1
556 416  FETCH_FUNC_ARG/92         $173=     372:'_SERVER'        ?0                  	;1
557 416  FETCH_DIM_FUNC_ARG/93     $174=     $173                 373:'HTTP_X_REQUESTED_WITH'	;1
558 416  SEND_VAR_EX/66            ?80       $174                 ?1                  	;0
559 416  DO_FCALL_BY_NAME/131      $175=     ?0                   ?0                  	;0
560 416  IS_EQUAL/17               #176=     $175                 374:'xmlhttprequest'	;0
561 416  BOOL/52                   #172=     #176                 ?0                  	;0
562 416  BOOL_NOT/13               #177=     #172                 ?0                  	;0	<<554
563 416  JMPZ/43                   ?0        #177                 ?565                	;0	>>565
564 417  GOTO/253                  ?0        ?566                 ?375                	;0
565 419  ECHO/40                   ?0        376:' style="display: none;"' ?0                  	;0	<<563
566 421  ECHO/40                   ?0        377:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
567 422  INCLUDE_OR_EVAL/73        ?169      378:'topbar.php'     ?0                  	;2
568 423  GOTO/253                  ?0        ?329                 ?379                	;0
569 425  FETCH_DIM_R/81            $179=     16?3                 380:'username'      	;0
570 425  ECHO/40                   ?0        $179                 ?0                  	;0
571 426  ECHO/40                   ?0        381:'</th>
                                                        <th class="text-center">' ?0                  	;0
572 427  FETCH_DIM_R/81            $180=     16?3                 382:'mac_address'   	;0
573 427  ECHO/40                   ?0        $180                 ?0                  	;0
574 428  ECHO/40                   ?0        383:'</th>
                                                        <th class="text-center">Device</th>
                                                        <th>' ?0                  	;0
575 429  FETCH_DIM_R/81            $181=     16?3                 384:'owner'         	;0
576 429  ECHO/40                   ?0        $181                 ?0                  	;0
577 430  GOTO/253                  ?0        ?108                 ?385                	;0
578 432  FETCH_DIM_R/81            $182=     16?3                 386:'status'        	;0
579 432  ECHO/40                   ?0        $182                 ?0                  	;0
580 433  ECHO/40                   ?0        387:'</th>
                                                        <th class="text-center">' ?0                  	;0
581 434  FETCH_DIM_R/81            $183=     16?3                 388:'online'        	;0
582 434  ECHO/40                   ?0        $183                 ?0                  	;0
583 435  ECHO/40                   ?0        389:'</th>
                                                        <th class="text-center">' ?0                  	;0
584 436  FETCH_DIM_R/81            $184=     16?3                 390:'trial'         	;0
585 436  ECHO/40                   ?0        $184                 ?0                  	;0
586 437  GOTO/253                  ?0        ?476                 ?391                	;0
587 439  ECHO/40                   ?0        392:'</th>
                                                        <th class="text-center">TMDb</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
										<ul class="list-inline wizard mb-0" style="margin-top:20px;">
											<li class="list-inline-item float-right">
												<input name="submit_movies" type="submit" class="btn btn-primary" value="' ?0                  	;0
588 440  FETCH_DIM_R/81            $185=     16?3                 393:'delete_movies' 	;0
589 440  ECHO/40                   ?0        $185                 ?0                  	;0
590 441  ECHO/40                   ?0        394:'" />
											</li>
										</ul>
									</form>
								</div>
                                <div class="tab-pane" id="radio-selection">
									<form action="#" method="POST" id="radio_form">
										<input type="hidden" name="radios" id="radios" value="" />
										<div class="row">
											<div class="col-md-2 col-6">
												<input type="text" class="form-control" id="radio_search" value="" placeholder="Search Stations...">
											</div>
                                            <div class="col-md-3 col-6">
                                                <select id="station_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
591 442  INIT_FCALL_BY_NAME/59     ?0        ?0                   395:'c6a90BfcD425EB63'	;0
592 442  DO_FCALL_BY_NAME/131      $186=     ?0                   ?0                  	;0
593 442  FE_RESET_R/77             $187=     $186                 ?606                	;0
594 442  FE_FETCH_R/78             ?0        $187                 16?5                	;606	>>606	<<605
595 443  ECHO/40                   ?0        397:'                                                    <option value="' ?0                  	;0
596 444  INIT_FCALL_BY_NAME/59     ?0        ?0                   398:'intval'        	;1
597 444  FETCH_DIM_FUNC_ARG/93     $188=     16?5                 400:'id'            	;1
598 444  SEND_VAR_EX/66            ?80       $188                 ?1                  	;0
599 444  DO_FCALL_BY_NAME/131      $189=     ?0                   ?0                  	;0
600 444  ECHO/40                   ?0        $189                 ?0                  	;0
601 445  ECHO/40                   ?0        401:'">'             ?0                  	;0
602 446  FETCH_DIM_R/81            $190=     16?5                 402:'server_name'   	;0
603 446  ECHO/40                   ?0        $190                 ?0                  	;0
604 447  ECHO/40                   ?0        403:'</option>
                                                    ' ?0                  	;0
605 448  JMP/42                    ?0        ?594                 ?0                  	;0	>>594
606 448  FE_FREE/127               ?0        $187                 ?0                  	;0	<<593
607 451  GOTO/253                  ?0        ?649                 ?404                	;0
608 453  FETCH_DIM_R/81            $191=     16?3                 405:'no_tmdb_match' 	;0
609 453  ECHO/40                   ?0        $191                 ?0                  	;0
610 454  ECHO/40                   ?0        406:'</option>
                                                    <option value="-2">No Categories</option>
													' ?0                  	;0
611 455  INIT_FCALL_BY_NAME/59     ?0        ?0                   407:'F769e3F0c739d1a6'	;1
612 455  SEND_VAL_EX/116           ?80       409:'series'         ?1                  	;0
613 455  DO_FCALL_BY_NAME/131      $192=     ?0                   ?0                  	;0
614 455  FE_RESET_R/77             $193=     $192                 ?624                	;0
615 455  FE_FETCH_R/78             ?0        $193                 16?4                	;624	>>624	<<623
616 456  ECHO/40                   ?0        410:'													<option value="' ?0                  	;0
617 457  FETCH_DIM_R/81            $194=     16?4                 411:'id'            	;0
618 457  ECHO/40                   ?0        $194                 ?0                  	;0
619 458  ECHO/40                   ?0        412:'">'             ?0                  	;0
620 459  FETCH_DIM_R/81            $195=     16?4                 413:'category_name' 	;0
621 459  ECHO/40                   ?0        $195                 ?0                  	;0
622 460  ECHO/40                   ?0        414:'</option>
													' ?0                  	;0
623 461  JMP/42                    ?0        ?615                 ?0                  	;0	>>615
624 461  FE_FREE/127               ?0        $193                 ?0                  	;0	<<614
625 464  ECHO/40                   ?0        415:'												</select>
											</div>
											<div class="col-md-2 col-6">
												<select id="series_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
626 465  GOTO/253                  ?0        ?411                 ?416                	;0
627 467  FE_RESET_R/77             $196=     417:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?643                	;0
628 467  FE_FETCH_R/78             ?0        $196                 16?1                	;643	>>643	<<642
629 468  ECHO/40                   ?0        418:'													<option' ?0                  	;0
630 469  FETCH_DIM_R/81            $197=     16?2                 419:'default_entries'	;0
631 469  IS_EQUAL/17               #198=     $197                 16?1                	;0
632 469  BOOL_NOT/13               #199=     #198                 ?0                  	;0
633 469  JMPZ/43                   ?0        #199                 ?636                	;0	>>636
634 470  NOP/0                     ?0        ?0                   ?0                  	;1
635 470  GOTO/253                  ?0        ?637                 ?420                	;0
636 472  ECHO/40                   ?0        421:' selected'      ?0                  	;0	<<633
637 474  ECHO/40                   ?0        422:' value="'       ?0                  	;0
638 475  ECHO/40                   ?0        16?1                 ?0                  	;0
639 476  ECHO/40                   ?0        423:'">'             ?0                  	;0
640 477  ECHO/40                   ?0        16?1                 ?0                  	;0
641 478  ECHO/40                   ?0        424:'</option>
													' ?0                  	;0
642 479  JMP/42                    ?0        ?628                 ?0                  	;0	>>628
643 479  FE_FREE/127               ?0        $196                 ?0                  	;0	<<627
644 482  ECHO/40                   ?0        425:'												</select>
											</div>
											<div class="col-md-1 col-2">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleMags()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-md8" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">' ?0                  	;0
645 483  FETCH_DIM_R/81            $200=     16?3                 426:'id'            	;0
646 483  ECHO/40                   ?0        $200                 ?0                  	;0
647 484  ECHO/40                   ?0        427:'</th>
                                                        <th>' ?0                  	;0
648 485  GOTO/253                  ?0        ?569                 ?428                	;0
649 487  ECHO/40                   ?0        429:'                                                </select>
                                            </div>
											<div class="col-md-3 col-6">
												<select id="radio_category_search" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
650 488  FETCH_DIM_R/81            $201=     16?3                 430:'all_categories'	;0
651 488  ECHO/40                   ?0        $201                 ?0                  	;0
652 489  ECHO/40                   ?0        431:'</option>
                                                    <option value="-1">No Categories</option>
													' ?0                  	;0
653 490  INIT_FCALL_BY_NAME/59     ?0        ?0                   432:'f769E3f0c739D1A6'	;1
654 490  SEND_VAL_EX/116           ?80       434:'radio'          ?1                  	;0
655 490  DO_FCALL_BY_NAME/131      $202=     ?0                   ?0                  	;0
656 490  FE_RESET_R/77             $203=     $202                 ?666                	;0
657 490  FE_FETCH_R/78             ?0        $203                 16?4                	;666	>>666	<<665
658 491  ECHO/40                   ?0        435:'													<option value="' ?0                  	;0
659 492  FETCH_DIM_R/81            $204=     16?4                 436:'id'            	;0
660 492  ECHO/40                   ?0        $204                 ?0                  	;0
661 493  ECHO/40                   ?0        437:'">'             ?0                  	;0
662 494  FETCH_DIM_R/81            $205=     16?4                 438:'category_name' 	;0
663 494  ECHO/40                   ?0        $205                 ?0                  	;0
664 495  ECHO/40                   ?0        439:'</option>
													' ?0                  	;0
665 496  JMP/42                    ?0        ?657                 ?0                  	;0	>>657
666 496  FE_FREE/127               ?0        $203                 ?0                  	;0	<<656
667 499  GOTO/253                  ?0        ?7                   ?440                	;0
668 501  ECHO/40                   ?0        441:'</option>
													<option value="6">' ?0                  	;0
669 502  FETCH_DIM_R/81            $206=     16?3                 442:'no_tmdb_match' 	;0
670 502  ECHO/40                   ?0        $206                 ?0                  	;0
671 503  ECHO/40                   ?0        443:'</option>
												</select>
											</div>
											<div class="col-md-1 col-6">
												<select id="movie_show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
672 504  FE_RESET_R/77             $207=     444:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?688                	;0
673 504  FE_FETCH_R/78             ?0        $207                 16?1                	;688	>>688	<<687
674 505  ECHO/40                   ?0        445:'													<option' ?0                  	;0
675 506  FETCH_DIM_R/81            $208=     16?2                 446:'default_entries'	;0
676 506  IS_EQUAL/17               #209=     $208                 16?1                	;0
677 506  BOOL_NOT/13               #210=     #209                 ?0                  	;0
678 506  JMPZ/43                   ?0        #210                 ?681                	;0	>>681
679 507  NOP/0                     ?0        ?0                   ?0                  	;1
680 507  GOTO/253                  ?0        ?682                 ?447                	;0
681 509  ECHO/40                   ?0        448:' selected'      ?0                  	;0	<<678
682 511  ECHO/40                   ?0        449:' value="'       ?0                  	;0
683 512  ECHO/40                   ?0        16?1                 ?0                  	;0
684 513  ECHO/40                   ?0        450:'">'             ?0                  	;0
685 514  ECHO/40                   ?0        16?1                 ?0                  	;0
686 515  ECHO/40                   ?0        451:'</option>
													' ?0                  	;0
687 516  JMP/42                    ?0        ?673                 ?0                  	;0	>>673
688 516  FE_FREE/127               ?0        $207                 ?0                  	;0	<<672
689 519  GOTO/253                  ?0        ?502                 ?452                	;0
690 521  INCLUDE_OR_EVAL/73        ?202      453:'footer.php'     ?0                  	;2
691 522  NOP/0                     ?0        454:1                ?0                  	;4294967295
*/

?>