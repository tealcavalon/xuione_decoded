<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?100                 ?0                  	;0	>>100
1   5    ECHO/40                   ?0        1:' style="display: none;"' ?0                  	;0
2   7    ECHO/40                   ?0        2:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
3   8    INCLUDE_OR_EVAL/73        ?0        3:'topbar.php'       ?0                  	;2
4   9    ECHO/40                   ?0        4:'					</div>
					<h4 class="page-title">' ?0                  	;0
5   10   GOTO/253                  ?0        ?145                 ?5                  	;0
6   12   ECHO/40                   ?0        6:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
                                                </div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_category" type="submit" class="btn btn-primary" value="' ?0                  	;0
7   13   ISSET_ISEMPTY_CV/197      #5=       16?0                 ?0                  	;33554432
8   13   JMPZ/43                   ?0        #5                   ?10                 	;0	>>10
9   14   GOTO/253                  ?0        ?12                  ?7                  	;0
10  16   ECHO/40                   ?0        8:'Add'              ?0                  	;0	<<8
11  17   GOTO/253                  ?0        ?44                  ?9                  	;0
12  19   GOTO/253                  ?0        ?43                  ?10                 	;0
13  22   ASSIGN/38                 ?2        16?1                 11:'Stream Category'	;0
14  23   INCLUDE_OR_EVAL/73        ?3        12:'header.php'      ?0                  	;2
15  24   ECHO/40                   ?0        13:'<div class="wrapper boxed-layout"' ?0                  	;0
16  25   FETCH_IS/89               $8=       14:'_SERVER'         ?0                  	;0
17  25   ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   15:'HTTP_X_REQUESTED_WITH'	;16777216
18  25   BOOL_NOT/13               #10=      #9                   ?0                  	;0
19  25   JMPZ_EX/46                #10=      #10                  ?27                 	;0	>>27
20  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'strtolower'     	;1
21  25   FETCH_FUNC_ARG/92         $11=      18:'_SERVER'         ?0                  	;1
22  25   FETCH_DIM_FUNC_ARG/93     $12=      $11                  19:'HTTP_X_REQUESTED_WITH'	;1
23  25   SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
24  25   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
25  25   IS_EQUAL/17               #14=      $13                  20:'xmlhttprequest' 	;0
26  25   BOOL/52                   #10=      #14                  ?0                  	;0
27  25   BOOL_NOT/13               #15=      #10                  ?0                  	;0	<<19
28  25   JMPZ/43                   ?0        #15                  ?30                 	;0	>>30
29  26   GOTO/253                  ?0        ?2                   ?21                 	;0
30  28   GOTO/253                  ?0        ?1                   ?22                 	;0	<<28
31  31   ECHO/40                   ?0        23:' Category</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
32  32   ISSET_ISEMPTY_CV/197      #16=      16?0                 ?0                  	;33554432
33  32   BOOL_NOT/13               #17=      #16                  ?0                  	;0
34  32   JMPZ/43                   ?0        #17                  ?36                 	;0	>>36
35  33   GOTO/253                  ?0        ?159                 ?24                 	;0
36  35   ECHO/40                   ?0        25:'							<input type="hidden" name="edit" value="' ?0                  	;0	<<34
37  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   26:'intval'         	;1
38  36   FETCH_DIM_FUNC_ARG/93     $18=      16?0                 28:'id'             	;1
39  36   SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
40  36   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
41  36   ECHO/40                   ?0        $19                  ?0                  	;0
42  37   GOTO/253                  ?0        ?152                 ?29                 	;0
43  39   ECHO/40                   ?0        30:'Edit'            ?0                  	;0
44  41   ECHO/40                   ?0        31:'" />
											</li>
										</ul>
									</div>
									<div class="tab-pane" id="view-channels">
										<div class="row">
											<div class="col-12" style="overflow-x:auto;">
												<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
													<thead>
														<tr>
															<th class="text-center">Stream ID</th>
															<th>Stream Name</th>
															<th class="text-center">Actions</th>
														</tr>
													</thead>
													<tbody></tbody>
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
45  42   GOTO/253                  ?0        ?172                 ?32                 	;0
46  44   ECHO/40                   ?0        33:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_type">Category Type</label>
													<div class="col-md-8">
														<select name="category_type" id="category_type" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
47  45   FE_RESET_R/77             $20=      34:array (
  'live' => 'Live TV',
  'movie' => 'Movie',
  'series' => 'TV Series',
  'radio' => 'Radio Station',
) ?77                 	;0
48  45   FE_FETCH_R/78             #21=      $20                  16?2                	;77	>>77	<<76
49  45   ASSIGN/38                 ?18       16?3                 #21                 	;0
50  46   NOP/0                     ?0        ?0                   ?0                  	;1
51  46   GOTO/253                  ?0        ?61                  ?35                 	;0
52  48   ECHO/40                   ?0        36:'</option>
															' ?0                  	;0
53  50   NOP/0                     ?0        ?0                   ?0                  	;1
54  50   GOTO/253                  ?0        ?76                  ?37                 	;0
55  53   ECHO/40                   ?0        38:'value="'         ?0                  	;0
56  54   ECHO/40                   ?0        16?3                 ?0                  	;0
57  55   ECHO/40                   ?0        39:'">'              ?0                  	;0
58  56   ECHO/40                   ?0        16?2                 ?0                  	;0
59  57   NOP/0                     ?0        ?0                   ?0                  	;1
60  57   GOTO/253                  ?0        ?52                  ?40                 	;0
61  59   ECHO/40                   ?0        41:'															<option ' ?0                  	;0
62  60   ISSET_ISEMPTY_CV/197      #23=      16?0                 ?0                  	;33554432
63  60   BOOL_NOT/13               #24=      #23                  ?0                  	;0
64  60   JMPZ/43                   ?0        #24                  ?67                 	;0	>>67
65  61   NOP/0                     ?0        ?0                   ?0                  	;1
66  61   GOTO/253                  ?0        ?55                  ?42                 	;0
67  63   FETCH_DIM_R/81            $25=      16?0                 43:'category_type'  	;0	<<64
68  63   IS_EQUAL/17               #26=      $25                  16?3                	;0
69  63   BOOL_NOT/13               #27=      #26                  ?0                  	;0
70  63   JMPZ/43                   ?0        #27                  ?73                 	;0	>>73
71  64   NOP/0                     ?0        ?0                   ?0                  	;1
72  64   GOTO/253                  ?0        ?74                  ?44                 	;0
73  66   ECHO/40                   ?0        45:'selected '       ?0                  	;0	<<70
74  68   NOP/0                     ?0        ?0                   ?0                  	;1
75  68   GOTO/253                  ?0        ?55                  ?46                 	;0
76  69   JMP/42                    ?0        ?48                  ?0                  	;0	>>48
77  69   FE_FREE/127               ?0        $20                  ?0                  	;0	<<47
78  72   ECHO/40                   ?0        47:'														</select>
													</div>
												</div>
												' ?0                  	;0
79  74   GOTO/253                  ?0        ?133                 ?48                 	;0
80  76   ISSET_ISEMPTY_CV/197      #28=      16?0                 ?0                  	;33554432
81  76   BOOL_NOT/13               #29=      #28                  ?0                  	;0
82  76   JMPZ/43                   ?0        #29                  ?84                 	;0	>>84
83  77   GOTO/253                  ?0        ?90                  ?49                 	;0
84  79   FETCH_DIM_R/81            $30=      16?0                 50:'is_adult'       	;0	<<82
85  79   IS_EQUAL/17               #31=      $30                  51:1                	;0
86  79   BOOL_NOT/13               #32=      #31                  ?0                  	;0
87  79   JMPZ/43                   ?0        #32                  ?89                 	;0	>>89
88  80   GOTO/253                  ?0        ?90                  ?52                 	;0
89  82   ECHO/40                   ?0        53:'checked '        ?0                  	;0	<<87
90  85   GOTO/253                  ?0        ?6                   ?54                 	;0
91  87   ECHO/40                   ?0        55:'												<input type="hidden" name="category_type" value="' ?0                  	;0
92  88   INIT_FCALL_BY_NAME/59     ?0        ?0                   56:'htmlspecialchars'	;1
93  88   FETCH_DIM_FUNC_ARG/93     $33=      16?0                 58:'category_type'  	;1
94  88   SEND_VAR_EX/66            ?80       $33                  ?1                  	;0
95  88   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
96  88   ECHO/40                   ?0        $34                  ?0                  	;0
97  89   ECHO/40                   ?0        59:'" />
												' ?0                  	;0
98  90   GOTO/253                  ?0        ?79                  ?60                 	;0
99  92   GOTO/253                  ?0        ?46                  ?61                 	;0
100 94   INCLUDE_OR_EVAL/73        ?31       62:'session.php'     ?0                  	;2	<<0
101 95   INCLUDE_OR_EVAL/73        ?32       63:'functions.php'   ?0                  	;2
102 96   INIT_FCALL_BY_NAME/59     ?0        ?0                   64:'E6d500E19634D513'	;0
103 96   DO_FCALL_BY_NAME/131      $37=      ?0                   ?0                  	;0
104 96   JMPZ/43                   ?0        $37                  ?106                	;0	>>106
105 97   GOTO/253                  ?0        ?108                 ?66                 	;0
106 99   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'e72f42a93714Ba87'	;0	<<104
107 99   DO_FCALL_BY_NAME/131      ?34       ?0                   ?0                  	;0
108 101  GOTO/253                  ?0        ?109                 ?69                 	;0
109 103  FETCH_STATIC_PROP_IS/176  $39=      70:'rRequest'        71:'XUI'            	;0
110 103  ISSET_ISEMPTY_DIM_OBJ/115 #40=      $39                  73:'id'             	;33554432
111 103  BOOL_NOT/13               #41=      #40                  ?0                  	;0
112 103  JMPZ/43                   ?0        #41                  ?114                	;0	>>114
113 104  GOTO/253                  ?0        ?13                  ?74                 	;0
114 106  INIT_FCALL_BY_NAME/59     ?0        ?0                   75:'D1132F737572929c'	;1	<<112
115 106  FETCH_STATIC_PROP_FUNC_ARG/177 $42=      77:'rRequest'        78:'XUI'            	;1
116 106  FETCH_DIM_FUNC_ARG/93     $43=      $42                  80:'id'             	;1
117 106  SEND_VAR_EX/66            ?80       $43                  ?1                  	;0
118 106  DO_FCALL_BY_NAME/131      $44=      ?0                   ?0                  	;0
119 106  ASSIGN/38                 ?41       16?0                 $44                 	;0
120 107  BOOL_NOT/13               #46=      16?0                 ?0                  	;0
121 107  JMPNZ_EX/47               #46=      #46                  ?128                	;0	>>128
122 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   81:'E589A4Bf54A2dAd1'	;2
123 107  SEND_VAL_EX/116           ?80       83:'adv'             ?1                  	;0
124 107  SEND_VAL_EX/116           ?96       84:'edit_cat'        ?2                  	;0
125 107  DO_FCALL_BY_NAME/131      $47=      ?0                   ?0                  	;0
126 107  BOOL_NOT/13               #48=      $47                  ?0                  	;0
127 107  BOOL/52                   #46=      #48                  ?0                  	;0
128 107  BOOL_NOT/13               #49=      #46                  ?0                  	;0	<<121
129 107  JMPZ/43                   ?0        #49                  ?131                	;0	>>131
130 108  GOTO/253                  ?0        ?132                 ?85                 	;0
131 110  EXIT/79                   ?0        ?0                   ?0                  	;0	<<129
132 112  GOTO/253                  ?0        ?13                  ?86                 	;0
133 114  ECHO/40                   ?0        87:'												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="category_name">Category Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="category_name" name="category_name" value="' ?0                  	;0
134 115  ISSET_ISEMPTY_CV/197      #50=      16?0                 ?0                  	;33554432
135 115  BOOL_NOT/13               #51=      #50                  ?0                  	;0
136 115  JMPZ/43                   ?0        #51                  ?138                	;0	>>138
137 116  GOTO/253                  ?0        ?143                 ?88                 	;0
138 118  INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'htmlspecialchars'	;1	<<136
139 118  FETCH_DIM_FUNC_ARG/93     $52=      16?0                 91:'category_name'  	;1
140 118  SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
141 118  DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
142 118  ECHO/40                   ?0        $53                  ?0                  	;0
143 120  ECHO/40                   ?0        92:'" required data-parsley-trigger="change">
													</div>
												</div>
                                                <div class="form-group row mb-4">
                                                    <label class="col-md-4 col-form-label" for="is_adult">Adult Content</label>
													<div class="col-md-2">
														<input name="is_adult" id="is_adult" type="checkbox" ' ?0                  	;0
144 121  GOTO/253                  ?0        ?80                  ?93                 	;0
145 123  ISSET_ISEMPTY_CV/197      #54=      16?0                 ?0                  	;33554432
146 123  JMPZ/43                   ?0        #54                  ?148                	;0	>>148
147 124  GOTO/253                  ?0        ?150                 ?94                 	;0
148 126  ECHO/40                   ?0        95:'Add'             ?0                  	;0	<<146
149 127  GOTO/253                  ?0        ?31                  ?96                 	;0
150 129  ECHO/40                   ?0        97:'Edit'            ?0                  	;0
151 130  GOTO/253                  ?0        ?31                  ?98                 	;0
152 132  ECHO/40                   ?0        99:'" />
							<input type="hidden" name="cat_order" value="' ?0                  	;0
153 133  INIT_FCALL_BY_NAME/59     ?0        ?0                   100:'intval'        	;1
154 133  FETCH_DIM_FUNC_ARG/93     $55=      16?0                 102:'cat_order'     	;1
155 133  SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
156 133  DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
157 133  ECHO/40                   ?0        $56                  ?0                  	;0
158 134  ECHO/40                   ?0        103:'" />
							'   ?0                  	;0
159 136  ECHO/40                   ?0        104:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#category-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
									' ?0                  	;0
160 137  GOTO/253                  ?0        ?161                 ?105                	;0
161 139  ISSET_ISEMPTY_CV/197      #57=      16?0                 ?0                  	;33554432
162 139  BOOL_NOT/13               #58=      #57                  ?0                  	;0
163 139  JMPZ/43                   ?0        #58                  ?165                	;0	>>165
164 140  GOTO/253                  ?0        ?166                 ?106                	;0
165 142  ECHO/40                   ?0        107:'									<li class="nav-item">
										<a href="#view-channels" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-play mr-1"></i>
											<span class="d-none d-sm-inline">View Streams</span>
										</a>
									</li>
									' ?0                  	;0	<<163
166 144  ECHO/40                   ?0        108:'								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="category-details">
										<div class="row">
											<div class="col-12">
												' ?0                  	;0
167 145  ISSET_ISEMPTY_CV/197      #59=      16?0                 ?0                  	;33554432
168 145  BOOL_NOT/13               #60=      #59                  ?0                  	;0
169 145  JMPZ/43                   ?0        #60                  ?171                	;0	>>171
170 146  GOTO/253                  ?0        ?99                  ?109                	;0
171 148  GOTO/253                  ?0        ?91                  ?110                	;0	<<169
172 150  INCLUDE_OR_EVAL/73        ?57       111:'footer.php'     ?0                  	;2
173 151  NOP/0                     ?0        112:1                ?0                  	;4294967295
*/

?>