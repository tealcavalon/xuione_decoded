<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?36                  ?0                  	;0	>>36
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
					<h4 class="page-title">Mass Edit Series <small id="selected_count"></small></h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
5   10   GOTO/253                  ?0        ?90                  ?5                  	;0
6   13   ECHO/40                   ?0        6:'														</select>
                                                    </div>
												</div>
												<div class="form-group row mb-4">
													<div class="col-md-1"></div>
													<label class="col-md-3 col-form-label" for="reprocess_tmdb">Re-Process TMDb Data</label>
													<div class="col-md-2">
														<input name="reprocess_tmdb" id="reprocess_tmdb" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />
													</div>
												</div>
												
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="prevb list-inline-item">
												<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
											</li>
										   
											<li class="nextb list-inline-item float-right">
												<input name="submit_series" type="submit" class="btn btn-primary" value="Edit Series" />
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
7   14   GOTO/253                  ?0        ?148                 ?7                  	;0
8   16   FE_RESET_R/77             $9=       16?0                 ?24                 	;0
9   16   FE_FETCH_R/78             ?0        $9                   16?1                	;24	>>24	<<23
10  17   ECHO/40                   ?0        8:'															<option value="' ?0                  	;0
11  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'intval'          	;1
12  18   FETCH_DIM_FUNC_ARG/93     $10=      16?1                 11:'id'             	;1
13  18   SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
14  18   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
15  18   ECHO/40                   ?0        $11                  ?0                  	;0
16  19   ECHO/40                   ?0        12:'">'              ?0                  	;0
17  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'htmlspecialchars'	;1
18  20   FETCH_DIM_FUNC_ARG/93     $12=      16?1                 15:'category_name'  	;1
19  20   SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
20  20   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
21  20   ECHO/40                   ?0        $13                  ?0                  	;0
22  21   ECHO/40                   ?0        16:'</option>
															' ?0                  	;0
23  22   JMP/42                    ?0        ?9                   ?0                  	;0	>>9
24  22   FE_FREE/127               ?0        $9                   ?0                  	;0	<<8
25  25   ECHO/40                   ?0        17:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="category_id_type" id="category_id_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
26  26   FE_RESET_R/77             $14=      18:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?34                 	;0
27  26   FE_FETCH_R/78             ?0        $14                  16?2                	;34	>>34	<<33
28  27   ECHO/40                   ?0        19:'															<option value="' ?0                  	;0
29  28   ECHO/40                   ?0        16?2                 ?0                  	;0
30  29   ECHO/40                   ?0        20:'">'              ?0                  	;0
31  30   ECHO/40                   ?0        16?2                 ?0                  	;0
32  31   ECHO/40                   ?0        21:'</option>
															' ?0                  	;0
33  32   JMP/42                    ?0        ?27                  ?0                  	;0	>>27
34  32   FE_FREE/127               ?0        $14                  ?0                  	;0	<<26
35  35   GOTO/253                  ?0        ?45                  ?22                 	;0
36  37   INCLUDE_OR_EVAL/73        ?7        23:'session.php'     ?0                  	;2	<<0
37  38   INCLUDE_OR_EVAL/73        ?8        24:'functions.php'   ?0                  	;2
38  39   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'E6d500e19634D513'	;0
39  39   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
40  39   JMPZ/43                   ?0        $17                  ?42                 	;0	>>42
41  40   GOTO/253                  ?0        ?44                  ?27                 	;0
42  42   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'e72F42a93714bA87'	;0	<<40
43  42   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
44  44   GOTO/253                  ?0        ?126                 ?30                 	;0
45  46   ECHO/40                   ?0        31:'														</select>
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
46  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'F964B9222B35ADDD'	;0
47  47   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
48  47   FE_RESET_R/77             $20=      $19                  ?58                 	;0
49  47   FE_FETCH_R/78             ?0        $20                  16?3                	;58	>>58	<<57
50  48   ECHO/40                   ?0        34:'															<option value="' ?0                  	;0
51  49   FETCH_DIM_R/81            $21=      16?3                 35:'id'             	;0
52  49   ECHO/40                   ?0        $21                  ?0                  	;0
53  50   ECHO/40                   ?0        36:'">'              ?0                  	;0
54  51   FETCH_DIM_R/81            $22=      16?3                 37:'bouquet_name'   	;0
55  51   ECHO/40                   ?0        $22                  ?0                  	;0
56  52   ECHO/40                   ?0        38:'</option>
															' ?0                  	;0
57  53   JMP/42                    ?0        ?49                  ?0                  	;0	>>49
58  53   FE_FREE/127               ?0        $20                  ?0                  	;0	<<48
59  56   ECHO/40                   ?0        39:'														</select>
													</div>
                                                    <div class="col-md-2">
                                                        <select disabled name="bouquets_type" id="bouquets_type" class="form-control" data-toggle="select2">
															' ?0                  	;0
60  57   FE_RESET_R/77             $23=      40:array (
  0 => 'SET',
  1 => 'ADD',
  2 => 'DEL',
) ?68                 	;0
61  57   FE_FETCH_R/78             ?0        $23                  16?2                	;68	>>68	<<67
62  58   ECHO/40                   ?0        41:'															<option value="' ?0                  	;0
63  59   ECHO/40                   ?0        16?2                 ?0                  	;0
64  60   ECHO/40                   ?0        42:'">'              ?0                  	;0
65  61   ECHO/40                   ?0        16?2                 ?0                  	;0
66  62   ECHO/40                   ?0        43:'</option>
															' ?0                  	;0
67  63   JMP/42                    ?0        ?61                  ?0                  	;0	>>61
68  63   FE_FREE/127               ?0        $23                  ?0                  	;0	<<60
69  65   GOTO/253                  ?0        ?6                   ?44                 	;0
70  68   ECHO/40                   ?0        45:'												</select>
											</div>
											<div class="col-md-2 col-6">
												<select id="show_entries" class="form-control" data-toggle="select2">
													' ?0                  	;0
71  69   FE_RESET_R/77             $24=      46:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?87                 	;0
72  69   FE_FETCH_R/78             ?0        $24                  16?4                	;87	>>87	<<86
73  70   ECHO/40                   ?0        47:'													<option' ?0                  	;0
74  71   FETCH_DIM_R/81            $25=      16?5                 48:'default_entries'	;0
75  71   IS_EQUAL/17               #26=      $25                  16?4                	;0
76  71   BOOL_NOT/13               #27=      #26                  ?0                  	;0
77  71   JMPZ/43                   ?0        #27                  ?80                 	;0	>>80
78  72   NOP/0                     ?0        ?0                   ?0                  	;1
79  72   GOTO/253                  ?0        ?81                  ?49                 	;0
80  74   ECHO/40                   ?0        50:' selected'       ?0                  	;0	<<77
81  76   ECHO/40                   ?0        51:' value="'        ?0                  	;0
82  77   ECHO/40                   ?0        16?4                 ?0                  	;0
83  78   ECHO/40                   ?0        52:'">'              ?0                  	;0
84  79   ECHO/40                   ?0        16?4                 ?0                  	;0
85  80   ECHO/40                   ?0        53:'</option>
													' ?0                  	;0
86  81   JMP/42                    ?0        ?72                  ?0                  	;0	>>72
87  81   FE_FREE/127               ?0        $24                  ?0                  	;0	<<71
88  84   ECHO/40                   ?0        54:'												</select>
											</div>
											<div class="col-md-1 col-6">
												<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">
													<i class="mdi mdi-selection"></i>
												</button>
											</div>
											<table id="datatable-mass" class="table table-borderless mb-0">
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
									</div>
									<div class="tab-pane" id="stream-details">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													To mass edit any of the below options, tick the checkbox nextb to it and change the input value.
												</p>
												<div class="form-group row mb-4">
													<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">
														<input type="checkbox" class="activate" data-name="category_id" name="c_category_id">
														<label></label>
													</div>
													<label class="col-md-3 col-form-label" for="category_id">Select Categories</label>
													<div class="col-md-6">
														<select disabled name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">
															' ?0                  	;0
89  85   GOTO/253                  ?0        ?8                   ?55                 	;0
90  87   ISSET_ISEMPTY_CV/197      #28=      16?6                 ?0                  	;33554432
91  87   JMPZ_EX/46                #28=      #28                  ?95                 	;0	>>95
92  87   FETCH_CONSTANT/99         #29=      ?0                   56:'STATUS_SUCCESS' 	;16
93  87   IS_EQUAL/17               #30=      16?6                 #29                 	;0
94  87   BOOL/52                   #28=      #30                  ?0                  	;0
95  87   BOOL_NOT/13               #31=      #28                  ?0                  	;0	<<91
96  87   JMPZ/43                   ?0        #31                  ?98                 	;0	>>98
97  88   GOTO/253                  ?0        ?99                  ?59                 	;0
98  90   ECHO/40                   ?0        60:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Mass edit of Series was successfully executed!
				</div>
				' ?0                  	;0	<<96
99  92   ECHO/40                   ?0        61:'				<div class="card">
					<div class="card-body">
						<form action="#" method="POST">
							<input type="hidden" name="series" id="series" value="" />
							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-youtube-tv mr-1"></i>
											<span class="d-none d-sm-inline">Series</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="stream-selection">
										<div class="row">
											<div class="col-md-5 col-6">
												<input type="text" class="form-control" id="stream_search" value="" placeholder="Search Series...">
											</div>
											<div class="col-md-4 col-6">
												<select id="category_search" class="form-control" data-toggle="select2">
													<option value="" selected>All Categories</option>
													<option value="-1">No TMDb Match</option>
                                                    <option value="-2">No Categories</option>
													' ?0                  	;0
100 93   FE_RESET_R/77             $32=      16?0                 ?124                	;0
101 93   FE_FETCH_R/78             ?0        $32                  16?1                	;124	>>124	<<123
102 94   ECHO/40                   ?0        62:'													<option value="' ?0                  	;0
103 95   FETCH_DIM_R/81            $33=      16?1                 63:'id'             	;0
104 95   ECHO/40                   ?0        $33                  ?0                  	;0
105 96   ECHO/40                   ?0        64:'"'               ?0                  	;0
106 97   FETCH_STATIC_PROP_IS/176  $34=      65:'rRequest'        66:'XUI'            	;0
107 97   ISSET_ISEMPTY_DIM_OBJ/115 #35=      $34                  68:'category'       	;33554432
108 97   JMPZ_EX/46                #35=      #35                  ?114                	;0	>>114
109 97   FETCH_STATIC_PROP_R/173   $36=      69:'rRequest'        70:'XUI'            	;0
110 97   FETCH_DIM_R/81            $37=      $36                  72:'category'       	;0
111 97   FETCH_DIM_R/81            $38=      16?1                 73:'id'             	;0
112 97   IS_EQUAL/17               #39=      $37                  $38                 	;0
113 97   BOOL/52                   #35=      #39                  ?0                  	;0
114 97   BOOL_NOT/13               #40=      #35                  ?0                  	;0	<<108
115 97   JMPZ/43                   ?0        #40                  ?118                	;0	>>118
116 98   NOP/0                     ?0        ?0                   ?0                  	;1
117 98   GOTO/253                  ?0        ?119                 ?74                 	;0
118 100  ECHO/40                   ?0        75:' selected'       ?0                  	;0	<<115
119 102  ECHO/40                   ?0        76:'>'               ?0                  	;0
120 103  FETCH_DIM_R/81            $41=      16?1                 77:'category_name'  	;0
121 103  ECHO/40                   ?0        $41                  ?0                  	;0
122 104  ECHO/40                   ?0        78:'</option>
													' ?0                  	;0
123 105  JMP/42                    ?0        ?101                 ?0                  	;0	>>101
124 105  FE_FREE/127               ?0        $32                  ?0                  	;0	<<100
125 107  GOTO/253                  ?0        ?70                  ?79                 	;0
126 109  INIT_FCALL_BY_NAME/59     ?0        ?0                   80:'f769E3f0c739d1a6'	;1
127 109  SEND_VAL_EX/116           ?80       82:'series'          ?1                  	;0
128 109  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
129 109  ASSIGN/38                 ?35       16?0                 $42                 	;0
130 110  ASSIGN/38                 ?36       16?7                 83:'Mass Edit Series'	;0
131 111  INCLUDE_OR_EVAL/73        ?37       84:'header.php'      ?0                  	;2
132 112  ECHO/40                   ?0        85:'<div class="wrapper boxed-layout-xl"' ?0                  	;0
133 113  FETCH_IS/89               $46=      86:'_SERVER'         ?0                  	;0
134 113  ISSET_ISEMPTY_DIM_OBJ/115 #47=      $46                  87:'HTTP_X_REQUESTED_WITH'	;16777216
135 113  BOOL_NOT/13               #48=      #47                  ?0                  	;0
136 113  JMPZ_EX/46                #48=      #48                  ?144                	;0	>>144
137 113  INIT_FCALL_BY_NAME/59     ?0        ?0                   88:'strtolower'     	;1
138 113  FETCH_FUNC_ARG/92         $49=      90:'_SERVER'         ?0                  	;1
139 113  FETCH_DIM_FUNC_ARG/93     $50=      $49                  91:'HTTP_X_REQUESTED_WITH'	;1
140 113  SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
141 113  DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
142 113  IS_EQUAL/17               #52=      $51                  92:'xmlhttprequest' 	;0
143 113  BOOL/52                   #48=      #52                  ?0                  	;0
144 113  BOOL_NOT/13               #53=      #48                  ?0                  	;0	<<136
145 113  JMPZ/43                   ?0        #53                  ?147                	;0	>>147
146 114  GOTO/253                  ?0        ?2                   ?93                 	;0
147 116  GOTO/253                  ?0        ?1                   ?94                 	;0	<<145
148 118  INCLUDE_OR_EVAL/73        ?46       95:'footer.php'      ?0                  	;2
149 119  NOP/0                     ?0        96:1                 ?0                  	;4294967295
*/

?>