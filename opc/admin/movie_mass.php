<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?263                 ?0                  	;0	>>263
1   5    ASSIGN/38                 ?0        16?0                 1:array (
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
2   6    FE_RESET_R/77             $18=      16?1                 ?14                 	;0
3   6    FE_FETCH_R/78             ?0        $18                  16?2                	;14	>>14	<<13
4   7    FETCH_DIM_R/81            $20=      16?2                 2:'id'              	;0
5   7    INIT_ARRAY/71             #21=      $20                  3:'id'              	;22
6   7    ADD_ARRAY_ELEMENT/72      #21=      4:'offline'          5:'parent'          	;0
7   7    FETCH_DIM_R/81            $22=      16?2                 6:'server_name'     	;0
8   7    ADD_ARRAY_ELEMENT/72      #21=      $22                  7:'text'            	;0
9   7    ADD_ARRAY_ELEMENT/72      #21=      8:'mdi mdi-server-network' 9:'icon'            	;0
10  7    ADD_ARRAY_ELEMENT/72      #21=      10:array (
  'opened' => true,
) 11:'state'          	;0
11  7    ASSIGN_DIM/147            ?2        16?0                 ?4386466            	;0
12  7    OP_DATA/137               ?0        #21                  ?0                  	;0
13  8    JMP/42                    ?0        ?3                   ?0                  	;0	>>3
14  8    FE_FREE/127               ?0        $18                  ?0                  	;0	<<2
15  11   ASSIGN/38                 ?6        16?3                 12:'Mass Edit Movies'	;0
16  12   INCLUDE_OR_EVAL/73        ?7        13:'header.php'      ?0                  	;2
17  13   GOTO/253                  ?0        ?215                 ?14                 	;0
18  15   ECHO/40                   ?0        15:'</label>
													<div class="col-md-6">
														<select disabled name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
19  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'F964B9222b35addd'	;0
20  16   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
21  16   FE_RESET_R/77             $26=      $25                  ?31                 	;0
22  16   FE_FETCH_R/78             ?0        $26                  16?4                	;31	>>31	<<30
23  17   ECHO/40                   ?0        18:'															<option value="' ?0                  	;0
24  18   FETCH_DIM_R/81            $27=      16?4                 19:'id'             	;0
25  18   ECHO/40                   ?0        $27                  ?0                  	;0
26  19   ECHO/40                   ?0        20:'">'              ?0                  	;0
27  20   FETCH_DIM_R/81            $28=      16?4                 21:'bouquet_name'   	;0
28  20   ECHO/40                   ?0        $28                  ?0                  	;0
29  21   ECHO/40                   ?0        22:'</option>
															' ?0                  	;0
30  22   JMP/42                    ?0        ?22                  ?0                  	;0	>>22
31  22   FE_FREE/127               ?0        $26                  ?0                  	;0	<<21
32  25   ECHO/40                   ?0        23:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="bouquets_type" id="bouquets_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
33  26   FE_RESET_R/77             $29=      24:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?41                 	;0
34  26   FE_FETCH_R/78             ?0        $29                  16?5                	;41	>>41	<<40
35  27   ECHO/40                   ?0        25:'															<option value="' ?0                  	;0
36  28   ECHO/40                   ?0        16?5                 ?0                  	;0
37  29   ECHO/40                   ?0        26:'">'              ?0                  	;0
38  30   ECHO/40                   ?0        16?5                 ?0                  	;0
39  31   ECHO/40                   ?0        27:'</option>
															' ?0                  	;0
40  32   JMP/42                    ?0        ?34                  ?0                  	;0	>>34
41  32   FE_FREE/127               ?0        $29                  ?0                  	;0	<<33
42  34   GOTO/253                  ?0        ?325                 ?28                 	;0
43  36   ECHO/40                   ?0        29:'</th>
                                                        <th class="text-center">TMDb</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													' ?0                  	;0
44  37   FETCH_DIM_R/81            $30=      16?6                 30:'mass_edit_info' 	;0
45  37   ECHO/40                   ?0        $30                  ?0                  	;0
46  38   ECHO/40                   ?0        31:'												</p>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="category_id" name="c_category_id">
														<label></label>
													</div>
                                                    <label class="col-md-3 col-form-label" for="category_id">Select Categories</label>
													<div class="col-md-6">
														<select disabled name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
47  39   FE_RESET_R/77             $31=      16?7                 ?63                 	;0
48  39   FE_FETCH_R/78             ?0        $31                  16?8                	;63	>>63	<<62
49  40   ECHO/40                   ?0        32:'															<option value="' ?0                  	;0
50  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'intval'         	;1
51  41   FETCH_DIM_FUNC_ARG/93     $32=      16?8                 35:'id'             	;1
52  41   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
53  41   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
54  41   ECHO/40                   ?0        $33                  ?0                  	;0
55  42   ECHO/40                   ?0        36:'">'              ?0                  	;0
56  43   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'htmlspecialchars'	;1
57  43   FETCH_DIM_FUNC_ARG/93     $34=      16?8                 39:'category_name'  	;1
58  43   SEND_VAR_EX/66            ?80       $34                  ?1                  	;0
59  43   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
60  43   ECHO/40                   ?0        $35                  ?0                  	;0
61  44   ECHO/40                   ?0        40:'</option>
															' ?0                  	;0
62  45   JMP/42                    ?0        ?48                  ?0                  	;0	>>48
63  45   FE_FREE/127               ?0        $31                  ?0                  	;0	<<47
64  48   GOTO/253                  ?0        ?311                 ?41                 	;0
65  50   ECHO/40                   ?0        42:'</option>
													<option value="1">' ?0                  	;0
66  51   FETCH_DIM_R/81            $36=      16?6                 43:'encoded'        	;0
67  51   ECHO/40                   ?0        $36                  ?0                  	;0
68  52   ECHO/40                   ?0        44:'</option>
													<option value="2">' ?0                  	;0
69  53   FETCH_DIM_R/81            $37=      16?6                 45:'encoding'       	;0
70  53   ECHO/40                   ?0        $37                  ?0                  	;0
71  54   ECHO/40                   ?0        46:'</option>
													<option value="3">' ?0                  	;0
72  55   GOTO/253                  ?0        ?206                 ?47                 	;0
73  57   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'f769E3f0c739D1A6'	;1
74  57   SEND_VAL_EX/116           ?80       50:'movie'           ?1                  	;0
75  57   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
76  57   ASSIGN/38                 ?22       16?7                 $38                 	;0
77  58   FETCH_STATIC_PROP_IS/176  $40=      51:'rRequest'        52:'XUI'            	;0
78  58   ISSET_ISEMPTY_DIM_OBJ/115 #41=      $40                  54:'submit_stream'  	;33554432
79  58   BOOL_NOT/13               #42=      #41                  ?0                  	;0
80  58   JMPZ/43                   ?0        #42                  ?82                 	;0	>>82
81  59   GOTO/253                  ?0        ?105                 ?55                 	;0
82  61   INIT_STATIC_METHOD_CALL/113 ?0        56:'API'             58:'E7A12F961Bb49Bc2'	;1	<<80
83  61   FETCH_STATIC_PROP_FUNC_ARG/177 $43=      60:'rRequest'        61:'XUI'            	;1
84  61   SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
85  61   DO_FCALL/60               $44=      ?0                   ?0                  	;0
86  61   ASSIGN/38                 ?28       16?9                 $44                 	;0
87  62   FETCH_DIM_R/81            $46=      16?9                 63:'status'         	;0
88  62   ASSIGN/38                 ?30       16?10                $46                 	;0
89  63   IS_EQUAL/17               #48=      16?10                64:0                	;0
90  63   BOOL_NOT/13               #49=      #48                  ?0                  	;0
91  63   JMPZ/43                   ?0        #49                  ?93                 	;0	>>93
92  64   GOTO/253                  ?0        ?105                 ?65                 	;0
93  66   GOTO/253                  ?0        ?101                 ?66                 	;0	<<91
94  69   ECHO/40                   ?0        67:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
95  70   FETCH_DIM_R/81            $50=      16?6                 68:'prev'           	;0
96  70   ECHO/40                   ?0        $50                  ?0                  	;0
97  71   ECHO/40                   ?0        69:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
98  72   FETCH_DIM_R/81            $51=      16?6                 70:'next'           	;0
99  72   ECHO/40                   ?0        $51                  ?0                  	;0
100 73   GOTO/253                  ?0        ?332                 ?71                 	;0
101 75   INIT_FCALL_BY_NAME/59     ?0        ?0                   72:'header'         	;1
102 75   SEND_VAL_EX/116           ?80       74:'Location: ./movies_mass?status=0' ?1                  	;0
103 75   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
104 76   EXIT/79                   ?0        ?0                   ?0                  	;0
105 79   INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'F93E9343c3d7Fd99'	;0
106 79   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
107 79   ASSIGN/38                 ?37       16?11                $53                 	;0
108 80   GOTO/253                  ?0        ?1                   ?77                 	;0
109 82   FETCH_DIM_R/81            $55=      16?6                 78:'movies'         	;0
110 82   ECHO/40                   ?0        $55                  ?0                  	;0
111 83   ECHO/40                   ?0        79:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
112 84   FETCH_DIM_R/81            $56=      16?6                 80:'details'        	;0
113 84   ECHO/40                   ?0        $56                  ?0                  	;0
114 85   ECHO/40                   ?0        81:'</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
											<i class="mdi mdi-server-network mr-1"></i>
											<span class="d-none d-sm-inline">' ?0                  	;0
115 86   FETCH_DIM_R/81            $57=      16?6                 82:'servers'        	;0
116 86   ECHO/40                   ?0        $57                  ?0                  	;0
117 87   GOTO/253                  ?0        ?125                 ?83                 	;0
118 89   FETCH_DIM_R/81            $58=      16?6                 84:'prev'           	;0
119 89   ECHO/40                   ?0        $58                  ?0                  	;0
120 90   ECHO/40                   ?0        85:'</a>
											</li>
											<li class="nextb list-inline-item float-right">
												<input name="submit_stream" type="submit" class="btn btn-primary" value="' ?0                  	;0
121 91   FETCH_DIM_R/81            $59=      16?6                 86:'edit_movies'    	;0
122 91   ECHO/40                   ?0        $59                  ?0                  	;0
123 92   ECHO/40                   ?0        87:'" />
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
124 93   GOTO/253                  ?0        ?355                 ?88                 	;0
125 95   ECHO/40                   ?0        89:'</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-selection">
										<div class="row">
											<div class="col-md-2 col-6">
												<input type="text" class="form-control" id="stream_search" value="" placeholder="Search Movies...">
											</div>
                                            <div class="col-md-3 col-6">
                                                <select id="movie_server_id" class="form-control" data-toggle="select2">
                                                    <option value="" selected>All Servers</option>
                                                    <option value="-1">No Servers</option>
                                                    ' ?0                  	;0
126 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   90:'C6A90BfcD425EB63'	;0
127 96   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
128 96   FE_RESET_R/77             $61=      $60                  ?141                	;0
129 96   FE_FETCH_R/78             ?0        $61                  16?2                	;141	>>141	<<140
130 97   ECHO/40                   ?0        92:'                                                    <option value="' ?0                  	;0
131 98   INIT_FCALL_BY_NAME/59     ?0        ?0                   93:'intval'         	;1
132 98   FETCH_DIM_FUNC_ARG/93     $62=      16?2                 95:'id'             	;1
133 98   SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
134 98   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
135 98   ECHO/40                   ?0        $63                  ?0                  	;0
136 99   ECHO/40                   ?0        96:'">'              ?0                  	;0
137 100  FETCH_DIM_R/81            $64=      16?2                 97:'server_name'    	;0
138 100  ECHO/40                   ?0        $64                  ?0                  	;0
139 101  ECHO/40                   ?0        98:'</option>
                                                    ' ?0                  	;0
140 102  JMP/42                    ?0        ?129                 ?0                  	;0	>>129
141 102  FE_FREE/127               ?0        $61                  ?0                  	;0	<<128
142 105  ECHO/40                   ?0        99:'                                                </select>
                                            </div>
											<div class="col-md-3 col-6">
												<select id="category_search" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
143 106  FETCH_DIM_R/81            $65=      16?6                 100:'all_categories'	;0
144 106  ECHO/40                   ?0        $65                  ?0                  	;0
145 107  GOTO/253                  ?0        ?233                 ?101                	;0
146 109  INCLUDE_OR_EVAL/73        ?49       102:'topbar.php'     ?0                  	;2
147 110  ECHO/40                   ?0        103:'					</div>
					<h4 class="page-title">' ?0                  	;0
148 111  FETCH_DIM_R/81            $67=      16?6                 104:'mass_edit_movies'	;0
149 111  ECHO/40                   ?0        $67                  ?0                  	;0
150 112  ECHO/40                   ?0        105:' <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
151 113  ISSET_ISEMPTY_CV/197      #68=      16?10                ?0                  	;33554432
152 113  JMPZ_EX/46                #68=      #68                  ?156                	;0	>>156
153 113  FETCH_CONSTANT/99         #69=      ?0                   106:'STATUS_SUCCESS'	;16
154 113  IS_EQUAL/17               #70=      16?10                #69                 	;0
155 113  BOOL/52                   #68=      #70                  ?0                  	;0
156 113  BOOL_NOT/13               #71=      #68                  ?0                  	;0	<<152
157 113  JMPZ/43                   ?0        #71                  ?159                	;0	>>159
158 114  GOTO/253                  ?0        ?164                 ?109                	;0
159 116  GOTO/253                  ?0        ?160                 ?110                	;0	<<157
160 118  ECHO/40                   ?0        111:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					' ?0                  	;0
161 119  FETCH_DIM_R/81            $72=      16?6                 112:'mass_edit_movies_success'	;0
162 119  ECHO/40                   ?0        $72                  ?0                  	;0
163 120  ECHO/40                   ?0        113:'				</div>
				' ?0                  	;0
164 122  ECHO/40                   ?0        114:'				<div class="card">
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
											<span class="d-none d-sm-inline">' ?0                  	;0
165 123  GOTO/253                  ?0        ?109                 ?115                	;0
166 125  FETCH_DIM_R/81            $73=      16?6                 116:'transcoding_profile'	;0
167 125  ECHO/40                   ?0        $73                  ?0                  	;0
168 126  ECHO/40                   ?0        117:'</label>
													<div class="col-md-8">
														<select name="transcode_profile_id" disabled id="transcode_profile_id" class="form-control" data-toggle="select2">
															<option selected value="0">' ?0                  	;0
169 127  FETCH_DIM_R/81            $74=      16?6                 118:'transcoding_disabled'	;0
170 127  ECHO/40                   ?0        $74                  ?0                  	;0
171 128  ECHO/40                   ?0        119:'</option>
															' ?0                  	;0
172 129  FE_RESET_R/77             $75=      16?11                ?182                	;0
173 129  FE_FETCH_R/78             ?0        $75                  16?12               	;182	>>182	<<181
174 130  ECHO/40                   ?0        120:'															<option value="' ?0                  	;0
175 131  FETCH_DIM_R/81            $76=      16?12                121:'profile_id'    	;0
176 131  ECHO/40                   ?0        $76                  ?0                  	;0
177 132  ECHO/40                   ?0        122:'">'             ?0                  	;0
178 133  FETCH_DIM_R/81            $77=      16?12                123:'profile_name'  	;0
179 133  ECHO/40                   ?0        $77                  ?0                  	;0
180 134  ECHO/40                   ?0        124:'</option>
															' ?0                  	;0
181 135  JMP/42                    ?0        ?173                 ?0                  	;0	>>173
182 135  FE_FREE/127               ?0        $75                  ?0                  	;0	<<172
183 137  GOTO/253                  ?0        ?94                  ?125                	;0
184 139  FE_RESET_R/77             $78=      126:array (
  0 => 'mp4',
  1 => 'mkv',
  2 => 'avi',
  3 => 'mpg',
  4 => 'flv',
  5 => '3gp',
  6 => 'm4v',
  7 => 'wmv',
  8 => 'mov',
  9 => 'ts',
) ?192                	;0
185 139  FE_FETCH_R/78             ?0        $78                  16?13               	;192	>>192	<<191
186 140  ECHO/40                   ?0        127:'															<option value="' ?0                  	;0
187 141  ECHO/40                   ?0        16?13                ?0                  	;0
188 142  ECHO/40                   ?0        128:'">'             ?0                  	;0
189 143  ECHO/40                   ?0        16?13                ?0                  	;0
190 144  ECHO/40                   ?0        129:'</option>
															' ?0                  	;0
191 145  JMP/42                    ?0        ?185                 ?0                  	;0	>>185
192 145  FE_FREE/127               ?0        $78                  ?0                  	;0	<<184
193 148  ECHO/40                   ?0        130:'														</select>
													</div>
													<label class="col-md-3 col-form-label" for="remove_subtitles">' ?0                  	;0
194 149  FETCH_DIM_R/81            $79=      16?6                 131:'remove_subtitles'	;0
195 149  ECHO/40                   ?0        $79                  ?0                  	;0
196 150  ECHO/40                   ?0        132:'</label>
													<div class="col-md-2">
														<input name="remove_subtitles" id="remove_subtitles" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="remove_subtitles" data-type="switch" name="c_remove_subtitles">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="transcode_profile_id" name="c_transcode_profile_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="transcode_profile_id">' ?0                  	;0
197 151  GOTO/253                  ?0        ?166                 ?133                	;0
198 153  ECHO/40                   ?0        134:'</label>
													<div class="col-md-2">
														<input name="movie_symlink" id="movie_symlink" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="read_native">' ?0                  	;0
199 154  FETCH_DIM_R/81            $80=      16?6                 135:'native_frames' 	;0
200 154  ECHO/40                   ?0        $80                  ?0                  	;0
201 155  ECHO/40                   ?0        136:'</label>
													<div class="col-md-2">
														<input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="read_native" data-type="switch" name="c_read_native">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="target_container" name="c_target_container">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="target_container">' ?0                  	;0
202 156  FETCH_DIM_R/81            $81=      16?6                 137:'target_container'	;0
203 156  ECHO/40                   ?0        $81                  ?0                  	;0
204 157  ECHO/40                   ?0        138:'</label>
													<div class="col-md-2">
														<select disabled name="target_container" id="target_container" class="form-control" data-toggle="select2">
															' ?0                  	;0
205 158  GOTO/253                  ?0        ?184                 ?139                	;0
206 160  FETCH_DIM_R/81            $82=      16?6                 140:'down'          	;0
207 160  ECHO/40                   ?0        $82                  ?0                  	;0
208 161  ECHO/40                   ?0        141:'</option>
													<option value="4">' ?0                  	;0
209 162  FETCH_DIM_R/81            $83=      16?6                 142:'ready'         	;0
210 162  ECHO/40                   ?0        $83                  ?0                  	;0
211 163  ECHO/40                   ?0        143:'</option>
													<option value="5">' ?0                  	;0
212 164  FETCH_DIM_R/81            $84=      16?6                 144:'direct'        	;0
213 164  ECHO/40                   ?0        $84                  ?0                  	;0
214 165  GOTO/253                  ?0        ?272                 ?145                	;0
215 167  ECHO/40                   ?0        146:'<div class="wrapper boxed-layout-xl"' ?0                  	;0
216 168  FETCH_IS/89               $85=      147:'_SERVER'        ?0                  	;0
217 168  ISSET_ISEMPTY_DIM_OBJ/115 #86=      $85                  148:'HTTP_X_REQUESTED_WITH'	;16777216
218 168  BOOL_NOT/13               #87=      #86                  ?0                  	;0
219 168  JMPZ_EX/46                #87=      #87                  ?227                	;0	>>227
220 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   149:'strtolower'    	;1
221 168  FETCH_FUNC_ARG/92         $88=      151:'_SERVER'        ?0                  	;1
222 168  FETCH_DIM_FUNC_ARG/93     $89=      $88                  152:'HTTP_X_REQUESTED_WITH'	;1
223 168  SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
224 168  DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
225 168  IS_EQUAL/17               #91=      $90                  153:'xmlhttprequest'	;0
226 168  BOOL/52                   #87=      #91                  ?0                  	;0
227 168  BOOL_NOT/13               #92=      #87                  ?0                  	;0	<<219
228 168  JMPZ/43                   ?0        #92                  ?230                	;0	>>230
229 169  GOTO/253                  ?0        ?231                 ?154                	;0
230 171  ECHO/40                   ?0        155:' style="display: none;"' ?0                  	;0	<<228
231 173  ECHO/40                   ?0        156:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
232 174  GOTO/253                  ?0        ?146                 ?157                	;0
233 176  ECHO/40                   ?0        158:'</option>
                                                    <option value="-1">No Categories</option>
													' ?0                  	;0
234 177  FE_RESET_R/77             $93=      16?7                 ?258                	;0
235 177  FE_FETCH_R/78             ?0        $93                  16?8                	;258	>>258	<<257
236 178  ECHO/40                   ?0        159:'													<option value="' ?0                  	;0
237 179  FETCH_DIM_R/81            $94=      16?8                 160:'id'            	;0
238 179  ECHO/40                   ?0        $94                  ?0                  	;0
239 180  ECHO/40                   ?0        161:'"'              ?0                  	;0
240 181  FETCH_STATIC_PROP_IS/176  $95=      162:'rRequest'       163:'XUI'           	;0
241 181  ISSET_ISEMPTY_DIM_OBJ/115 #96=      $95                  165:'category'      	;33554432
242 181  JMPZ_EX/46                #96=      #96                  ?248                	;0	>>248
243 181  FETCH_STATIC_PROP_R/173   $97=      166:'rRequest'       167:'XUI'           	;0
244 181  FETCH_DIM_R/81            $98=      $97                  169:'category'      	;0
245 181  FETCH_DIM_R/81            $99=      16?8                 170:'id'            	;0
246 181  IS_EQUAL/17               #100=     $98                  $99                 	;0
247 181  BOOL/52                   #96=      #100                 ?0                  	;0
248 181  BOOL_NOT/13               #101=     #96                  ?0                  	;0	<<242
249 181  JMPZ/43                   ?0        #101                 ?252                	;0	>>252
250 182  NOP/0                     ?0        ?0                   ?0                  	;1
251 182  GOTO/253                  ?0        ?253                 ?171                	;0
252 184  ECHO/40                   ?0        172:' selected'      ?0                  	;0	<<249
253 186  ECHO/40                   ?0        173:'>'              ?0                  	;0
254 187  FETCH_DIM_R/81            $102=     16?8                 174:'category_name' 	;0
255 187  ECHO/40                   ?0        $102                 ?0                  	;0
256 188  ECHO/40                   ?0        175:'</option>
													' ?0                  	;0
257 189  JMP/42                    ?0        ?235                 ?0                  	;0	>>235
258 189  FE_FREE/127               ?0        $93                  ?0                  	;0	<<234
259 192  ECHO/40                   ?0        176:'												</select>
											</div>
											<div class="col-md-2 col-6">
												<select id="filter" class="form-control" data-toggle="select2">
													<option value="" selected>' ?0                  	;0
260 193  FETCH_DIM_R/81            $103=     16?6                 177:'no_filter'     	;0
261 193  ECHO/40                   ?0        $103                 ?0                  	;0
262 194  GOTO/253                  ?0        ?65                  ?178                	;0
263 196  INCLUDE_OR_EVAL/73        ?87       179:'session.php'    ?0                  	;2	<<0
264 197  INCLUDE_OR_EVAL/73        ?88       180:'functions.php'  ?0                  	;2
265 198  INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'e6D500e19634d513'	;0
266 198  DO_FCALL_BY_NAME/131      $106=     ?0                   ?0                  	;0
267 198  JMPZ/43                   ?0        $106                 ?269                	;0	>>269
268 199  GOTO/253                  ?0        ?271                 ?183                	;0
269 201  INIT_FCALL_BY_NAME/59     ?0        ?0                   184:'E72F42A93714ba87'	;0	<<267
270 201  DO_FCALL_BY_NAME/131      ?90       ?0                   ?0                  	;0
271 203  GOTO/253                  ?0        ?73                  ?186                	;0
272 205  ECHO/40                   ?0        187:'</option>
													<option value="6">' ?0                  	;0
273 206  FETCH_DIM_R/81            $108=     16?6                 188:'no_tmdb_match' 	;0
274 206  ECHO/40                   ?0        $108                 ?0                  	;0
275 207  ECHO/40                   ?0        189:'</option>
                                                    <option value="8">Transcoding</option>
												</select>
											</div>
											<div class="col-md-1 col-6">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
276 208  FE_RESET_R/77             $109=     190:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?292                	;0
277 208  FE_FETCH_R/78             ?0        $109                 16?14               	;292	>>292	<<291
278 209  ECHO/40                   ?0        191:'													<option' ?0                  	;0
279 210  FETCH_DIM_R/81            $110=     16?15                192:'default_entries'	;0
280 210  IS_EQUAL/17               #111=     $110                 16?14               	;0
281 210  BOOL_NOT/13               #112=     #111                 ?0                  	;0
282 210  JMPZ/43                   ?0        #112                 ?285                	;0	>>285
283 211  NOP/0                     ?0        ?0                   ?0                  	;1
284 211  GOTO/253                  ?0        ?286                 ?193                	;0
285 213  ECHO/40                   ?0        194:' selected'      ?0                  	;0	<<282
286 215  ECHO/40                   ?0        195:' value="'       ?0                  	;0
287 216  ECHO/40                   ?0        16?14                ?0                  	;0
288 217  ECHO/40                   ?0        196:'">'             ?0                  	;0
289 218  ECHO/40                   ?0        16?14                ?0                  	;0
290 219  ECHO/40                   ?0        197:'</option>
													' ?0                  	;0
291 220  JMP/42                    ?0        ?277                 ?0                  	;0	>>277
292 220  FE_FREE/127               ?0        $109                 ?0                  	;0	<<276
293 223  GOTO/253                  ?0        ?303                 ?198                	;0
294 225  FETCH_DIM_R/81            $113=     16?6                 199:'category'      	;0
295 225  ECHO/40                   ?0        $113                 ?0                  	;0
296 226  ECHO/40                   ?0        200:'</th>
                                                        <th>' ?0                  	;0
297 227  FETCH_DIM_R/81            $114=     16?6                 201:'servers'       	;0
298 227  ECHO/40                   ?0        $114                 ?0                  	;0
299 228  ECHO/40                   ?0        202:'</th>
														<th class="text-center">' ?0                  	;0
300 229  FETCH_DIM_R/81            $115=     16?6                 203:'status'        	;0
301 229  ECHO/40                   ?0        $115                 ?0                  	;0
302 230  GOTO/253                  ?0        ?43                  ?204                	;0
303 232  ECHO/40                   ?0        205:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-mass" class="table table-borderless mb-0">
												<thead class="bg-light">
													<tr>
														<th class="text-center">' ?0                  	;0
304 233  FETCH_DIM_R/81            $116=     16?6                 206:'id'            	;0
305 233  ECHO/40                   ?0        $116                 ?0                  	;0
306 234  ECHO/40                   ?0        207:'</th>
                                                        <th class="text-center">Image</th>
														<th>' ?0                  	;0
307 235  FETCH_DIM_R/81            $117=     16?6                 208:'name'          	;0
308 235  ECHO/40                   ?0        $117                 ?0                  	;0
309 236  ECHO/40                   ?0        209:'</th>
														<th>' ?0                  	;0
310 237  GOTO/253                  ?0        ?294                 ?210                	;0
311 239  ECHO/40                   ?0        211:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="category_id_type" id="category_id_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
312 240  FE_RESET_R/77             $118=     212:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?320                	;0
313 240  FE_FETCH_R/78             ?0        $118                 16?5                	;320	>>320	<<319
314 241  ECHO/40                   ?0        213:'															<option value="' ?0                  	;0
315 242  ECHO/40                   ?0        16?5                 ?0                  	;0
316 243  ECHO/40                   ?0        214:'">'             ?0                  	;0
317 244  ECHO/40                   ?0        16?5                 ?0                  	;0
318 245  ECHO/40                   ?0        215:'</option>
															' ?0                  	;0
319 246  JMP/42                    ?0        ?313                 ?0                  	;0	>>313
320 246  FE_FREE/127               ?0        $118                 ?0                  	;0	<<312
321 249  ECHO/40                   ?0        216:'														</select>
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="bouquets" name="c_bouquets">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="bouquets">' ?0                  	;0
322 250  FETCH_DIM_R/81            $119=     16?6                 217:'select_bouquets'	;0
323 250  ECHO/40                   ?0        $119                 ?0                  	;0
324 251  GOTO/253                  ?0        ?18                  ?218                	;0
325 254  ECHO/40                   ?0        219:'														</select>
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="direct_source" data-type="switch" name="c_direct_source">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="direct_source">' ?0                  	;0
326 255  FETCH_DIM_R/81            $120=     16?6                 220:'direct_source' 	;0
327 255  ECHO/40                   ?0        $120                 ?0                  	;0
328 256  ECHO/40                   ?0        221:'</label>
													<div class="col-md-2">
														<input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<label class="col-md-3 col-form-label" for="direct_proxy">Direct Stream</label>
													<div class="col-md-2">
														<input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="direct_proxy" data-type="switch" name="c_direct_proxy">
														<label></label>
													</div>
												</div>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="movie_symlink" data-type="switch" name="c_movie_symlink">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="movie_symlink">' ?0                  	;0
329 257  FETCH_DIM_R/81            $121=     16?6                 222:'create_symlink'	;0
330 257  ECHO/40                   ?0        $121                 ?0                  	;0
331 258  GOTO/253                  ?0        ?198                 ?223                	;0
332 260  ECHO/40                   ?0        224:'</a>
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
													<label class="col-md-3 col-form-label" for="server_tree">' ?0                  	;0
333 261  FETCH_DIM_R/81            $122=     16?6                 225:'server_tree'   	;0
334 261  ECHO/40                   ?0        $122                 ?0                  	;0
335 262  ECHO/40                   ?0        226:'</label>
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
336 263  FE_RESET_R/77             $123=     227:array (
  'SET' => 'SET SERVERS',
  'ADD' => 'ADD SELECTED',
  'DEL' => 'DELETE SELECTED',
) ?345                	;0
337 263  FE_FETCH_R/78             #124=     $123                 16?5                	;345	>>345	<<344
338 263  ASSIGN/38                 ?108      16?16                #124                	;0
339 264  ECHO/40                   ?0        228:'															<option value="' ?0                  	;0
340 265  ECHO/40                   ?0        16?16                ?0                  	;0
341 266  ECHO/40                   ?0        229:'">'             ?0                  	;0
342 267  ECHO/40                   ?0        16?5                 ?0                  	;0
343 268  ECHO/40                   ?0        230:'</option>
															' ?0                  	;0
344 269  JMP/42                    ?0        ?337                 ?0                  	;0	>>337
345 269  FE_FREE/127               ?0        $123                 ?0                  	;0	<<336
346 272  GOTO/253                  ?0        ?347                 ?231                	;0
347 274  ECHO/40                   ?0        232:'														</select>
                                                    </div>
                                                </div>
												<div class="form-group row mb-4">
													<div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="reencode_on_edit">' ?0                  	;0
348 275  FETCH_DIM_R/81            $126=     16?6                 233:'reencode_on_edit'	;0
349 275  ECHO/40                   ?0        $126                 ?0                  	;0
350 276  ECHO/40                   ?0        234:'</label>
													<div class="col-md-2">
														<input name="reencode_on_edit" id="reencode_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
													</div>
													<div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="reprocess_tmdb">' ?0                  	;0
351 277  FETCH_DIM_R/81            $127=     16?6                 235:'reprocess_tmdb_data'	;0
352 277  ECHO/40                   ?0        $127                 ?0                  	;0
353 278  ECHO/40                   ?0        236:'</label>
													<div class="col-md-2">
														<input name="reprocess_tmdb" id="reprocess_tmdb" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">' ?0                  	;0
354 279  GOTO/253                  ?0        ?118                 ?237                	;0
355 281  INCLUDE_OR_EVAL/73        ?111      238:'footer.php'     ?0                  	;2
356 282  NOP/0                     ?0        239:1                ?0                  	;4294967295
*/

?>