<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?16                  ?0                  	;0	>>16
1  6   ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
2  7   INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3  8   ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Folder Watch / Plex Sync Output</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<form id="series_form">
							<div class="form-group row mb-4">
								<div class="col-md-3">
									<input type="text" class="form-control" id="result_search" value="" placeholder="Search Results...">
								</div>
								<div class="col-md-2">
									<select id="result_server" class="form-control" data-toggle="select2">
										<option value="" selected>All Servers</option>
										' ?0                  	;0
4  9   FE_RESET_R/77             $8=       16?0                 ?14                 	;0
5  9   FE_FETCH_R/78             ?0        $8                   16?1                	;14	>>14	<<13
6  10  ECHO/40                   ?0        4:'										<option value="' ?0                  	;0
7  11  FETCH_DIM_R/81            $9=       16?1                 5:'id'              	;0
8  11  ECHO/40                   ?0        $9                   ?0                  	;0
9  12  ECHO/40                   ?0        6:'">'               ?0                  	;0
10 13  FETCH_DIM_R/81            $10=      16?1                 7:'server_name'     	;0
11 13  ECHO/40                   ?0        $10                  ?0                  	;0
12 14  ECHO/40                   ?0        8:'</option>
										' ?0                  	;0
13 15  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
14 15  FE_FREE/127               ?0        $8                   ?0                  	;0	<<4
15 17  GOTO/253                  ?0        ?27                  ?9                  	;0
16 19  INCLUDE_OR_EVAL/73        ?4        10:'session.php'     ?0                  	;2	<<0
17 20  INCLUDE_OR_EVAL/73        ?5        11:'functions.php'   ?0                  	;2
18 21  INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'e6D500E19634D513'	;0
19 21  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
20 21  JMPZ/43                   ?0        $13                  ?22                 	;0	>>22
21 22  GOTO/253                  ?0        ?24                  ?14                 	;0
22 24  INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'e72F42a93714bA87'	;0	<<20
23 24  DO_FCALL_BY_NAME/131      ?7        ?0                   ?0                  	;0
24 26  GOTO/253                  ?0        ?40                  ?17                 	;0
25 28  ECHO/40                   ?0        18:'									</select>
								</div>
							</div>
						</form>
						<table id="datatable-md1" class="table table-striped table-borderless dt-responsive nowrap font-normal">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Type</th>
									<th>Server</th>
									<th>Filename</th>
									<th class="text-center">Status</th>
									<th class="text-center">Date Added</th>
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
</div>
' ?0                  	;0
26 29  GOTO/253                  ?0        ?88                  ?19                 	;0
27 32  ECHO/40                   ?0        20:'									</select>
								</div>
								<div class="col-md-2">
									<select id="result_type" class="form-control" data-toggle="select2">
										<option value="" selected>All Types</option>
										' ?0                  	;0
28 33  FE_RESET_R/77             $15=      21:array (
  1 => 'Movies',
  2 => 'Series',
) ?37                 	;0
29 33  FE_FETCH_R/78             #16=      $15                  16?2                	;37	>>37	<<36
30 33  ASSIGN/38                 ?10       16?3                 #16                 	;0
31 34  ECHO/40                   ?0        22:'										<option value="' ?0                  	;0
32 35  ECHO/40                   ?0        16?3                 ?0                  	;0
33 36  ECHO/40                   ?0        23:'">'              ?0                  	;0
34 37  ECHO/40                   ?0        16?2                 ?0                  	;0
35 38  ECHO/40                   ?0        24:'</option>
										' ?0                  	;0
36 39  JMP/42                    ?0        ?29                  ?0                  	;0	>>29
37 39  FE_FREE/127               ?0        $15                  ?0                  	;0	<<28
38 42  ECHO/40                   ?0        25:'									</select>
								</div>
								<div class="col-md-2">
									<select id="result_status" class="form-control" data-toggle="select2">
										<option value="" selected>All Statuses</option>
										' ?0                  	;0
39 43  GOTO/253                  ?0        ?59                  ?26                 	;0
40 45  ASSIGN/38                 ?11       16?4                 27:'Watch Folder Logs'	;0
41 46  INCLUDE_OR_EVAL/73        ?12       28:'header.php'      ?0                  	;2
42 47  ECHO/40                   ?0        29:'<div class="wrapper"' ?0                  	;0
43 48  FETCH_IS/89               $20=      30:'_SERVER'         ?0                  	;0
44 48  ISSET_ISEMPTY_DIM_OBJ/115 #21=      $20                  31:'HTTP_X_REQUESTED_WITH'	;16777216
45 48  BOOL_NOT/13               #22=      #21                  ?0                  	;0
46 48  JMPZ_EX/46                #22=      #22                  ?54                 	;0	>>54
47 48  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'strtolower'     	;1
48 48  FETCH_FUNC_ARG/92         $23=      34:'_SERVER'         ?0                  	;1
49 48  FETCH_DIM_FUNC_ARG/93     $24=      $23                  35:'HTTP_X_REQUESTED_WITH'	;1
50 48  SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
51 48  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
52 48  IS_EQUAL/17               #26=      $25                  36:'xmlhttprequest' 	;0
53 48  BOOL/52                   #22=      #26                  ?0                  	;0
54 48  BOOL_NOT/13               #27=      #22                  ?0                  	;0	<<46
55 48  JMPZ/43                   ?0        #27                  ?57                 	;0	>>57
56 49  GOTO/253                  ?0        ?1                   ?37                 	;0
57 51  ECHO/40                   ?0        38:' style="display: none;"' ?0                  	;0	<<55
58 52  GOTO/253                  ?0        ?1                   ?39                 	;0
59 54  FE_RESET_R/77             $28=      40:array (
  1 => 'Added',
  2 => 'SQL Error',
  3 => 'No Category',
  4 => 'No Match',
  5 => 'Invalid File',
) ?68                 	;0
60 54  FE_FETCH_R/78             #29=      $28                  16?2                	;68	>>68	<<67
61 54  ASSIGN/38                 ?23       16?3                 #29                 	;0
62 55  ECHO/40                   ?0        41:'										<option value="' ?0                  	;0
63 56  ECHO/40                   ?0        16?3                 ?0                  	;0
64 57  ECHO/40                   ?0        42:'">'              ?0                  	;0
65 58  ECHO/40                   ?0        16?2                 ?0                  	;0
66 59  ECHO/40                   ?0        43:'</option>
										' ?0                  	;0
67 60  JMP/42                    ?0        ?60                  ?0                  	;0	>>60
68 60  FE_FREE/127               ?0        $28                  ?0                  	;0	<<59
69 63  ECHO/40                   ?0        44:'									</select>
								</div>
								<label class="col-md-1 col-form-label text-center" for="result_show_entries">Show</label>
								<div class="col-md-2">
									<select id="result_show_entries" class="form-control" data-toggle="select2">
										' ?0                  	;0
70 64  FE_RESET_R/77             $31=      45:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?86                 	;0
71 64  FE_FETCH_R/78             ?0        $31                  16?5                	;86	>>86	<<85
72 65  ECHO/40                   ?0        46:'										<option' ?0                  	;0
73 66  FETCH_DIM_R/81            $32=      16?6                 47:'default_entries'	;0
74 66  IS_EQUAL/17               #33=      $32                  16?5                	;0
75 66  BOOL_NOT/13               #34=      #33                  ?0                  	;0
76 66  JMPZ/43                   ?0        #34                  ?79                 	;0	>>79
77 67  NOP/0                     ?0        ?0                   ?0                  	;1
78 67  GOTO/253                  ?0        ?80                  ?48                 	;0
79 69  ECHO/40                   ?0        49:' selected'       ?0                  	;0	<<76
80 71  ECHO/40                   ?0        50:' value="'        ?0                  	;0
81 72  ECHO/40                   ?0        16?5                 ?0                  	;0
82 73  ECHO/40                   ?0        51:'">'              ?0                  	;0
83 74  ECHO/40                   ?0        16?5                 ?0                  	;0
84 75  ECHO/40                   ?0        52:'</option>
										' ?0                  	;0
85 76  JMP/42                    ?0        ?71                  ?0                  	;0	>>71
86 76  FE_FREE/127               ?0        $31                  ?0                  	;0	<<70
87 79  GOTO/253                  ?0        ?25                  ?53                 	;0
88 81  INCLUDE_OR_EVAL/73        ?28       54:'footer.php'      ?0                  	;2
89 82  NOP/0                     ?0        55:1                 ?0                  	;4294967295
*/

?>