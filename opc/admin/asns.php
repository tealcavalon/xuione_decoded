<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?24                  ?0                  	;0	>>24
1  6   ECHO/40                   ?0        1:'                                    </select>
                                </div>
                            </div>
                        </form>
                        <table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">
                            <thead>
                                <tr>
                                    <th class="text-center">ASN</th>
                                    <th>Name</th>
                                    <th>Domain</th>
                                    <th class="text-center">Country</th>
                                    <th class="text-center">IP Count</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Status</th>
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
2  7   GOTO/253                  ?0        ?52                  ?2                  	;0
3  10  ECHO/40                   ?0        3:'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
4  11  INCLUDE_OR_EVAL/73        ?0        4:'topbar.php'       ?0                  	;2
5  12  ECHO/40                   ?0        5:'					</div>
                    <h4 class="page-title">Autonomous System Numbers</h4>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto;">
                        <form id="asn_search">
                            <div class="form-group row mb-4">
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="asn_search_box" value="" placeholder="Search ASN\'s...">
                                </div>
                                <label class="col-md-2 col-form-label text-center" for="asn_type">Filter Results</label>
                                <div class="col-md-3">
                                    <select id="asn_type" class="form-control" data-toggle="select2">
                                        <option value="" selected>All Types</option>
                                        <option value="isp">ISP</option>
                                        <option value="hosting">Hosting Server</option>
                                        <option value="education">Education</option>
                                        <option value="business">Business</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select id="asn_filter" class="form-control" data-toggle="select2">
                                        <option value="" selected>No Filter</option>
                                        <option value="0">Allowed</option>
                                        <option value="1">Blocked</option>
                                    </select>
                                </div>
                                <label class="col-md-1 col-form-label text-center" for="asn_show_entries">Show</label>
                                <div class="col-md-1">
                                    <select id="asn_show_entries" class="form-control" data-toggle="select2">
                                        ' ?0                  	;0
6  13  FE_RESET_R/77             $4=       6:array (
  0 => 10,
  1 => 25,
  2 => 50,
  3 => 250,
  4 => 500,
  5 => 1000,
) ?22                 	;0
7  13  FE_FETCH_R/78             ?0        $4                   16?0                	;22	>>22	<<21
8  14  ECHO/40                   ?0        7:'                                        <option' ?0                  	;0
9  15  FETCH_DIM_R/81            $5=       16?1                 8:'default_entries' 	;0
10 15  IS_EQUAL/17               #6=       $5                   16?0                	;0
11 15  BOOL_NOT/13               #7=       #6                   ?0                  	;0
12 15  JMPZ/43                   ?0        #7                   ?15                 	;0	>>15
13 16  NOP/0                     ?0        ?0                   ?0                  	;1
14 16  GOTO/253                  ?0        ?16                  ?9                  	;0
15 18  ECHO/40                   ?0        10:' selected'       ?0                  	;0	<<12
16 20  ECHO/40                   ?0        11:' value="'        ?0                  	;0
17 21  ECHO/40                   ?0        16?0                 ?0                  	;0
18 22  ECHO/40                   ?0        12:'">'              ?0                  	;0
19 23  ECHO/40                   ?0        16?0                 ?0                  	;0
20 24  ECHO/40                   ?0        13:'</option>
                                        ' ?0                  	;0
21 25  JMP/42                    ?0        ?7                   ?0                  	;0	>>7
22 25  FE_FREE/127               ?0        $4                   ?0                  	;0	<<6
23 27  GOTO/253                  ?0        ?1                   ?14                 	;0
24 29  INCLUDE_OR_EVAL/73        ?5        15:'session.php'     ?0                  	;2	<<0
25 30  INCLUDE_OR_EVAL/73        ?6        16:'functions.php'   ?0                  	;2
26 31  INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'e6D500E19634D513'	;0
27 31  DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
28 31  JMPZ/43                   ?0        $10                  ?30                 	;0	>>30
29 32  GOTO/253                  ?0        ?32                  ?19                 	;0
30 34  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'E72f42A93714ba87'	;0	<<28
31 34  DO_FCALL_BY_NAME/131      ?8        ?0                   ?0                  	;0
32 36  GOTO/253                  ?0        ?33                  ?22                 	;0
33 38  ASSIGN/38                 ?9        16?2                 23:'ASN\'s'         	;0
34 39  INCLUDE_OR_EVAL/73        ?10       24:'header.php'      ?0                  	;2
35 40  ECHO/40                   ?0        25:'<div class="wrapper"' ?0                  	;0
36 41  FETCH_IS/89               $14=      26:'_SERVER'         ?0                  	;0
37 41  ISSET_ISEMPTY_DIM_OBJ/115 #15=      $14                  27:'HTTP_X_REQUESTED_WITH'	;16777216
38 41  BOOL_NOT/13               #16=      #15                  ?0                  	;0
39 41  JMPZ_EX/46                #16=      #16                  ?47                 	;0	>>47
40 41  INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'strtolower'     	;1
41 41  FETCH_FUNC_ARG/92         $17=      30:'_SERVER'         ?0                  	;1
42 41  FETCH_DIM_FUNC_ARG/93     $18=      $17                  31:'HTTP_X_REQUESTED_WITH'	;1
43 41  SEND_VAR_EX/66            ?80       $18                  ?1                  	;0
44 41  DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
45 41  IS_EQUAL/17               #20=      $19                  32:'xmlhttprequest' 	;0
46 41  BOOL/52                   #16=      #20                  ?0                  	;0
47 41  BOOL_NOT/13               #21=      #16                  ?0                  	;0	<<39
48 41  JMPZ/43                   ?0        #21                  ?50                 	;0	>>50
49 42  GOTO/253                  ?0        ?3                   ?33                 	;0
50 44  ECHO/40                   ?0        34:' style="display: none;"' ?0                  	;0	<<48
51 45  GOTO/253                  ?0        ?3                   ?35                 	;0
52 47  INCLUDE_OR_EVAL/73        ?19       36:'footer.php'      ?0                  	;2
53 48  NOP/0                     ?0        37:1                 ?0                  	;4294967295
*/

?>