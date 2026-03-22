<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?21                  ?0                  	;0	>>21
1  6   ECHO/40                   ?0        1:'								</select>
							</div>
							<label class="col-md-1 col-form-label text-center" for="range">Dates</label>
							<div class="col-md-2">
								<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="All Dates">
							</div>
							<label class="col-md-1 col-form-label text-center" for="show_entries">Show</label>
							<div class="col-md-1">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
2  7   FE_RESET_R/77             $4=       2:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?18                 	;0
3  7   FE_FETCH_R/78             ?0        $4                   16?0                	;18	>>18	<<17
4  8   ECHO/40                   ?0        3:'									<option' ?0                  	;0
5  9   FETCH_DIM_R/81            $5=       16?1                 4:'default_entries' 	;0
6  9   IS_EQUAL/17               #6=       $5                   16?0                	;0
7  9   BOOL_NOT/13               #7=       #6                   ?0                  	;0
8  9   JMPZ/43                   ?0        #7                   ?11                 	;0	>>11
9  10  NOP/0                     ?0        ?0                   ?0                  	;1
10 10  GOTO/253                  ?0        ?12                  ?5                  	;0
11 12  ECHO/40                   ?0        6:' selected'        ?0                  	;0	<<8
12 14  ECHO/40                   ?0        7:' value="'         ?0                  	;0
13 15  ECHO/40                   ?0        16?0                 ?0                  	;0
14 16  ECHO/40                   ?0        8:'">'               ?0                  	;0
15 17  ECHO/40                   ?0        16?0                 ?0                  	;0
16 18  ECHO/40                   ?0        9:'</option>
									' ?0                  	;0
17 19  JMP/42                    ?0        ?3                   ?0                  	;0	>>3
18 19  FE_FREE/127               ?0        $4                   ?0                  	;0	<<2
19 22  ECHO/40                   ?0        10:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Stream</th>
									<th>Server</th>
									<th>Error</th>
									<th class="text-center">Date</th>
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
20 23  GOTO/253                  ?0        ?69                  ?11                 	;0
21 25  INCLUDE_OR_EVAL/73        ?4        12:'session.php'     ?0                  	;2	<<0
22 26  INCLUDE_OR_EVAL/73        ?5        13:'functions.php'   ?0                  	;2
23 27  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'E6d500e19634d513'	;0
24 27  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
25 27  JMPZ/43                   ?0        $10                  ?27                 	;0	>>27
26 28  GOTO/253                  ?0        ?29                  ?16                 	;0
27 30  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'E72F42a93714bA87'	;0	<<25
28 30  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
29 32  GOTO/253                  ?0        ?30                  ?19                 	;0
30 34  ASSIGN/38                 ?8        16?2                 20:'Stream Errors'  	;0
31 35  INCLUDE_OR_EVAL/73        ?9        21:'header.php'      ?0                  	;2
32 36  ECHO/40                   ?0        22:'<div class="wrapper"' ?0                  	;0
33 37  FETCH_IS/89               $14=      23:'_SERVER'         ?0                  	;0
34 37  ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  24:'HTTP_X_REQUESTED_WITH'	;16777216
35 37  BOOL_NOT/13               #16=      #15                  ?0                  	;0
36 37  JMPZ_EX/46                #16=      #16                  ?44                 	;0	>>44
37 37  INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'strtolower'     	;1
38 37  FETCH_FUNC_ARG/92         $17=      27:'_SERVER'         ?0                  	;1
39 37  FETCH_DIM_FUNC_ARG/93     $18=      $17                  28:'HTTP_X_REQUESTED_WITH'	;1
40 37  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
41 37  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
42 37  IS_EQUAL/17               #20=      $19                  29:'xmlhttprequest' 	;0
43 37  BOOL/52                   #16=      #20                  ?0                  	;0
44 37  BOOL_NOT/13               #21=      #16                  ?0                  	;0	<<36
45 37  JMPZ/43                   ?0        #21                  ?47                 	;0	>>47
46 38  GOTO/253                  ?0        ?49                  ?30                 	;0
47 40  ECHO/40                   ?0        31:' style="display: none;"' ?0                  	;0	<<45
48 41  GOTO/253                  ?0        ?49                  ?32                 	;0
49 44  ECHO/40                   ?0        33:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
50 45  INCLUDE_OR_EVAL/73        ?18       34:'topbar.php'      ?0                  	;2
51 46  ECHO/40                   ?0        35:'					</div>
					<h4 class="page-title">Stream Logs</h4>
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
							<label class="col-md-1 col-form-label text-center" for="reseller">Server</label>
							<div class="col-md-3">
								<select id="reseller" class="form-control" data-toggle="select2">
									<option value="" selected>All Servers</option>
									' ?0                  	;0
52 47  INIT_FCALL_BY_NAME/59     ?0        ?0                   36:'c6A90bfCD425EB63'	;0
53 47  DO_FCALL_BY_NAME/131      $23=      ?0                   ?0                  	;0
54 47  FE_RESET_R/77             $24=      $23                  ?67                 	;0
55 47  FE_FETCH_R/78             ?0        $24                  16?3                	;67	>>67	<<66
56 48  ECHO/40                   ?0        38:'									<option value="' ?0                  	;0
57 49  INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'intval'         	;1
58 49  FETCH_DIM_FUNC_ARG/93     $25=      16?3                 41:'id'             	;1
59 49  SEND_VAR_EX/66            ?80       $25                  ?1                  	;0
60 49  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
61 49  ECHO/40                   ?0        $26                  ?0                  	;0
62 50  ECHO/40                   ?0        42:'">'              ?0                  	;0
63 51  FETCH_DIM_R/81            $27=      16?3                 43:'server_name'    	;0
64 51  ECHO/40                   ?0        $27                  ?0                  	;0
65 52  ECHO/40                   ?0        44:'</option>
									' ?0                  	;0
66 53  JMP/42                    ?0        ?55                  ?0                  	;0	>>55
67 53  FE_FREE/127               ?0        $24                  ?0                  	;0	<<54
68 55  GOTO/253                  ?0        ?1                   ?45                 	;0
69 57  INCLUDE_OR_EVAL/73        ?24       46:'footer.php'      ?0                  	;2
70 58  NOP/0                     ?0        47:1                 ?0                  	;4294967295
*/

?>