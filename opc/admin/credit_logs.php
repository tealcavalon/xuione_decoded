<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
1  5   ECHO/40                   ?0        1:'</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
2  6   GOTO/253                  ?0        ?76                  ?2                  	;0
3  8   INCLUDE_OR_EVAL/73        ?0        3:'session.php'      ?0                  	;2	<<0
4  9   INCLUDE_OR_EVAL/73        ?1        4:'functions.php'    ?0                  	;2
5  10  INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'e6d500E19634D513'	;0
6  10  DO_FCALL_BY_NAME/131      $6=       ?0                   ?0                  	;0
7  10  JMPZ/43                   ?0        $6                   ?9                  	;0	>>9
8  11  GOTO/253                  ?0        ?11                  ?7                  	;0
9  13  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'e72F42A93714BA87'	;0	<<7
10 13  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
11 15  GOTO/253                  ?0        ?57                  ?10                 	;0
12 17  ECHO/40                   ?0        11:'</th>
									<th>' ?0                  	;0
13 18  FETCH_DIM_R/81            $8=       16?0                 12:'owner'          	;0
14 18  ECHO/40                   ?0        $8                   ?0                  	;0
15 19  ECHO/40                   ?0        13:'</th>
									<th>' ?0                  	;0
16 20  FETCH_DIM_R/81            $9=       16?0                 14:'target'         	;0
17 20  ECHO/40                   ?0        $9                   ?0                  	;0
18 21  ECHO/40                   ?0        15:'</th>
									<th class="text-center">' ?0                  	;0
19 22  GOTO/253                  ?0        ?20                  ?16                 	;0
20 24  FETCH_DIM_R/81            $10=      16?0                 17:'amount'         	;0
21 24  ECHO/40                   ?0        $10                  ?0                  	;0
22 25  ECHO/40                   ?0        18:'</th>
									<th>' ?0                  	;0
23 26  FETCH_DIM_R/81            $11=      16?0                 19:'reason'         	;0
24 26  ECHO/40                   ?0        $11                  ?0                  	;0
25 27  ECHO/40                   ?0        20:'</th>
									<th class="text-center">' ?0                  	;0
26 28  FETCH_DIM_R/81            $12=      16?0                 21:'date'           	;0
27 28  ECHO/40                   ?0        $12                  ?0                  	;0
28 29  GOTO/253                  ?0        ?1                   ?22                 	;0
29 31  ECHO/40                   ?0        23:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div class="form-group row mb-4">
							<div class="col-md-3">
								<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">
							</div>
							<label class="col-md-1 col-form-label text-center" for="reseller">Reseller &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>
                            <div class="col-md-3">
                                <select id="reseller" class="form-control" data-toggle="select2"></select>
                            </div>
                            <label class="col-md-1 col-form-label text-center" for="range">Dates</label>
							<div class="col-md-2">
								<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="Dates">
							</div>
                            <label class="col-md-1 col-form-label text-center" for="show_entries">Show</label>
							<div class="col-md-1">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
30 32  FE_RESET_R/77             $13=      24:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?46                 	;0
31 32  FE_FETCH_R/78             ?0        $13                  16?1                	;46	>>46	<<45
32 33  ECHO/40                   ?0        25:'									<option' ?0                  	;0
33 34  FETCH_DIM_R/81            $14=      16?2                 26:'default_entries'	;0
34 34  IS_EQUAL/17               #15=      $14                  16?1                	;0
35 34  BOOL_NOT/13               #16=      #15                  ?0                  	;0
36 34  JMPZ/43                   ?0        #16                  ?39                 	;0	>>39
37 35  NOP/0                     ?0        ?0                   ?0                  	;1
38 35  GOTO/253                  ?0        ?40                  ?27                 	;0
39 37  ECHO/40                   ?0        28:' selected'       ?0                  	;0	<<36
40 39  ECHO/40                   ?0        29:' value="'        ?0                  	;0
41 40  ECHO/40                   ?0        16?1                 ?0                  	;0
42 41  ECHO/40                   ?0        30:'">'              ?0                  	;0
43 42  ECHO/40                   ?0        16?1                 ?0                  	;0
44 43  ECHO/40                   ?0        31:'</option>
									' ?0                  	;0
45 44  JMP/42                    ?0        ?31                  ?0                  	;0	>>31
46 44  FE_FREE/127               ?0        $13                  ?0                  	;0	<<30
47 47  ECHO/40                   ?0        32:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
48 48  FETCH_DIM_R/81            $17=      16?0                 33:'id'             	;0
49 48  ECHO/40                   ?0        $17                  ?0                  	;0
50 49  GOTO/253                  ?0        ?12                  ?34                 	;0
51 52  ECHO/40                   ?0        35:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
52 53  INCLUDE_OR_EVAL/73        ?14       36:'topbar.php'      ?0                  	;2
53 54  ECHO/40                   ?0        37:'					</div>
					<h4 class="page-title">' ?0                  	;0
54 55  FETCH_DIM_R/81            $19=      16?0                 38:'credit_logs'    	;0
55 55  ECHO/40                   ?0        $19                  ?0                  	;0
56 56  GOTO/253                  ?0        ?29                  ?39                 	;0
57 58  ASSIGN/38                 ?16       16?3                 40:'Credit Logs'    	;0
58 59  INCLUDE_OR_EVAL/73        ?17       41:'header.php'      ?0                  	;2
59 60  ECHO/40                   ?0        42:'<div class="wrapper"' ?0                  	;0
60 61  FETCH_IS/89               $22=      43:'_SERVER'         ?0                  	;0
61 61  ISSET_ISEMPTY_DIM_OBJ/115 #23=      $22                  44:'HTTP_X_REQUESTED_WITH'	;16777216
62 61  BOOL_NOT/13               #24=      #23                  ?0                  	;0
63 61  JMPZ_EX/46                #24=      #24                  ?71                 	;0	>>71
64 61  INIT_FCALL_BY_NAME/59     ?0        ?0                   45:'strtolower'     	;1
65 61  FETCH_FUNC_ARG/92         $25=      47:'_SERVER'         ?0                  	;1
66 61  FETCH_DIM_FUNC_ARG/93     $26=      $25                  48:'HTTP_X_REQUESTED_WITH'	;1
67 61  SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
68 61  DO_FCALL_BY_NAME/131      $27=      ?0                   ?0                  	;0
69 61  IS_EQUAL/17               #28=      $27                  49:'xmlhttprequest' 	;0
70 61  BOOL/52                   #24=      #28                  ?0                  	;0
71 61  BOOL_NOT/13               #29=      #24                  ?0                  	;0	<<63
72 61  JMPZ/43                   ?0        #29                  ?74                 	;0	>>74
73 62  GOTO/253                  ?0        ?51                  ?50                 	;0
74 64  ECHO/40                   ?0        51:' style="display: none;"' ?0                  	;0	<<72
75 65  GOTO/253                  ?0        ?51                  ?52                 	;0
76 67  INCLUDE_OR_EVAL/73        ?26       53:'footer.php'      ?0                  	;2
77 68  NOP/0                     ?0        54:1                 ?0                  	;4294967295
*/

?>