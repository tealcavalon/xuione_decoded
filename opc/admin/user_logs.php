<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?35                  ?0                  	;0	>>35
1  6   ECHO/40                   ?0        1:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
2  7   INCLUDE_OR_EVAL/73        ?0        2:'topbar.php'       ?0                  	;2
3  8   ECHO/40                   ?0        3:'					</div>
					<h4 class="page-title">Reseller Logs</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<div class="form-group row mb-4">
                            <div class="col-md-2">
								<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">
							</div>
                            <label class="col-md-1 col-form-label text-center" for="reseller">Reseller &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>
                            <div class="col-md-2">
                                <select id="reseller" class="form-control" data-toggle="select2"></select>
                            </div>
                            <div class="col-md-2">
								<select id="filter" class="form-control" data-toggle="select2">
									<option value="" selected>All Actions</option>
									' ?0                  	;0
4  9   FE_RESET_R/77             $7=       16?0                 ?13                 	;0
5  9   FE_FETCH_R/78             #8=       $7                   16?1                	;13	>>13	<<12
6  9   ASSIGN/38                 ?3        16?2                 #8                  	;0
7  10  ECHO/40                   ?0        4:'									<option value="' ?0                  	;0
8  11  ECHO/40                   ?0        16?2                 ?0                  	;0
9  12  ECHO/40                   ?0        5:'">'               ?0                  	;0
10 13  ECHO/40                   ?0        16?1                 ?0                  	;0
11 14  ECHO/40                   ?0        6:'</option>
									' ?0                  	;0
12 15  JMP/42                    ?0        ?5                   ?0                  	;0	>>5
13 15  FE_FREE/127               ?0        $7                   ?0                  	;0	<<4
14 17  GOTO/253                  ?0        ?15                  ?7                  	;0
15 20  ECHO/40                   ?0        8:'								</select>
							</div>
                            <label class="col-md-1 col-form-label text-center" for="range">Dates</label>
							<div class="col-md-2">
								<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="All Dates">
							</div>
                            <label class="col-md-1 col-form-label text-center" for="range">Show</label>
							<div class="col-md-1">
								<select id="show_entries" class="form-control" data-toggle="select2">
									' ?0                  	;0
16 21  FE_RESET_R/77             $10=      9:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?32                 	;0
17 21  FE_FETCH_R/78             ?0        $10                  16?3                	;32	>>32	<<31
18 22  ECHO/40                   ?0        10:'									<option' ?0                  	;0
19 23  FETCH_DIM_R/81            $11=      16?4                 11:'default_entries'	;0
20 23  IS_EQUAL/17               #12=      $11                  16?3                	;0
21 23  BOOL_NOT/13               #13=      #12                  ?0                  	;0
22 23  JMPZ/43                   ?0        #13                  ?25                 	;0	>>25
23 24  NOP/0                     ?0        ?0                   ?0                  	;1
24 24  GOTO/253                  ?0        ?26                  ?12                 	;0
25 26  ECHO/40                   ?0        13:' selected'       ?0                  	;0	<<22
26 28  ECHO/40                   ?0        14:' value="'        ?0                  	;0
27 29  ECHO/40                   ?0        16?3                 ?0                  	;0
28 30  ECHO/40                   ?0        15:'">'              ?0                  	;0
29 31  ECHO/40                   ?0        16?3                 ?0                  	;0
30 32  ECHO/40                   ?0        16:'</option>
									' ?0                  	;0
31 33  JMP/42                    ?0        ?17                  ?0                  	;0	>>17
32 33  FE_FREE/127               ?0        $10                  ?0                  	;0	<<16
33 36  ECHO/40                   ?0        17:'								</select>
							</div>
						</div>
						<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">ID</th>
									<th>Reseller</th>
									<th>Line / Device</th>
									<th>Action</th>
                                    <th class="text-center">Cost</th>
                                    <th class="text-center">Credits Remaining</th>
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
34 37  GOTO/253                  ?0        ?63                  ?18                 	;0
35 39  INCLUDE_OR_EVAL/73        ?8        19:'session.php'     ?0                  	;2	<<0
36 40  INCLUDE_OR_EVAL/73        ?9        20:'functions.php'   ?0                  	;2
37 41  INIT_FCALL_BY_NAME/59     ?0        ?0                   21:'e6d500e19634d513'	;0
38 41  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
39 41  JMPZ/43                   ?0        $16                  ?41                 	;0	>>41
40 42  GOTO/253                  ?0        ?43                  ?23                 	;0
41 44  INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'E72f42A93714bA87'	;0	<<39
42 44  DO_FCALL_BY_NAME/131      ?11       ?0                   ?0                  	;0
43 46  GOTO/253                  ?0        ?44                  ?26                 	;0
44 48  ASSIGN/38                 ?12       16?5                 27:'User Logs'      	;0
45 49  INCLUDE_OR_EVAL/73        ?13       28:'header.php'      ?0                  	;2
46 50  ECHO/40                   ?0        29:'<div class="wrapper"' ?0                  	;0
47 51  FETCH_IS/89               $20=      30:'_SERVER'         ?0                  	;0
48 51  ISSET_ISEMPTY_DIM_OBJ/115 #21=      $20                  31:'HTTP_X_REQUESTED_WITH'	;16777216
49 51  BOOL_NOT/13               #22=      #21                  ?0                  	;0
50 51  JMPZ_EX/46                #22=      #22                  ?58                 	;0	>>58
51 51  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'strtolower'     	;1
52 51  FETCH_FUNC_ARG/92         $23=      34:'_SERVER'         ?0                  	;1
53 51  FETCH_DIM_FUNC_ARG/93     $24=      $23                  35:'HTTP_X_REQUESTED_WITH'	;1
54 51  SEND_VAR_EX/66            ?80       $24                  ?1                  	;0
55 51  DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
56 51  IS_EQUAL/17               #26=      $25                  36:'xmlhttprequest' 	;0
57 51  BOOL/52                   #22=      #26                  ?0                  	;0
58 51  BOOL_NOT/13               #27=      #22                  ?0                  	;0	<<50
59 51  JMPZ/43                   ?0        #27                  ?61                 	;0	>>61
60 52  GOTO/253                  ?0        ?1                   ?37                 	;0
61 54  ECHO/40                   ?0        38:' style="display: none;"' ?0                  	;0	<<59
62 55  GOTO/253                  ?0        ?1                   ?39                 	;0
63 57  INCLUDE_OR_EVAL/73        ?22       40:'footer.php'      ?0                  	;2
64 58  NOP/0                     ?0        41:1                 ?0                  	;4294967295
*/

?>