<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0  3   JMP/42                    ?0        ?1                   ?0                  	;0	>>1
1  5   INCLUDE_OR_EVAL/73        ?0        1:'session.php'      ?0                  	;2	<<0
2  6   INCLUDE_OR_EVAL/73        ?1        2:'functions.php'    ?0                  	;2
3  7   INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'E6D500E19634D513'	;0
4  7   DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
5  7   JMPZ/43                   ?0        $4                   ?7                  	;0	>>7
6  8   GOTO/253                  ?0        ?9                   ?5                  	;0
7  10  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'E72F42A93714bA87'	;0	<<5
8  10  DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
9  12  GOTO/253                  ?0        ?10                  ?8                  	;0
10 14  ASSIGN/38                 ?4        16?0                 9:'System Logs'     	;0
11 15  INCLUDE_OR_EVAL/73        ?5        10:'header.php'      ?0                  	;2
12 16  ECHO/40                   ?0        11:'<div class="wrapper"' ?0                  	;0
13 17  FETCH_IS/89               $8=       12:'_SERVER'         ?0                  	;0
14 17  ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   13:'HTTP_X_REQUESTED_WITH'	;16777216
15 17  BOOL_NOT/13               #10=      #9                   ?0                  	;0
16 17  JMPZ_EX/46                #10=      #10                  ?24                 	;0	>>24
17 17  INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'strtolower'     	;1
18 17  FETCH_FUNC_ARG/92         $11=      16:'_SERVER'         ?0                  	;1
19 17  FETCH_DIM_FUNC_ARG/93     $12=      $11                  17:'HTTP_X_REQUESTED_WITH'	;1
20 17  SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
21 17  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
22 17  IS_EQUAL/17               #14=      $13                  18:'xmlhttprequest' 	;0
23 17  BOOL/52                   #10=      #14                  ?0                  	;0
24 17  BOOL_NOT/13               #15=      #10                  ?0                  	;0	<<16
25 17  JMPZ/43                   ?0        #15                  ?27                 	;0	>>27
26 18  GOTO/253                  ?0        ?31                  ?19                 	;0
27 20  ECHO/40                   ?0        20:' style="display: none;"' ?0                  	;0	<<25
28 21  GOTO/253                  ?0        ?31                  ?21                 	;0
29 23  ECHO/40                   ?0        22:'</th>
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
30 24  GOTO/253                  ?0        ?54                  ?23                 	;0
31 27  ECHO/40                   ?0        24:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
32 28  INCLUDE_OR_EVAL/73        ?14       25:'topbar.php'      ?0                  	;2
33 29  ECHO/40                   ?0        26:'					</div>
					<h4 class="page-title">System Logs</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body" style="overflow-x:auto;">
						<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">
							<thead>
								<tr>
									<th class="text-center">' ?0                  	;0
34 30  FETCH_DIM_R/81            $17=      16?1                 27:'date'           	;0
35 30  ECHO/40                   ?0        $17                  ?0                  	;0
36 31  GOTO/253                  ?0        ?46                  ?28                 	;0
37 33  FETCH_DIM_R/81            $18=      16?1                 29:'error'          	;0
38 33  ECHO/40                   ?0        $18                  ?0                  	;0
39 34  ECHO/40                   ?0        30:'</th>
									<th class="text-center">' ?0                  	;0
40 35  FETCH_DIM_R/81            $19=      16?1                 31:'ip'             	;0
41 35  ECHO/40                   ?0        $19                  ?0                  	;0
42 36  ECHO/40                   ?0        32:'</th>
									<th class="text-center">' ?0                  	;0
43 37  FETCH_DIM_R/81            $20=      16?1                 33:'actions'        	;0
44 37  ECHO/40                   ?0        $20                  ?0                  	;0
45 38  GOTO/253                  ?0        ?29                  ?34                 	;0
46 40  ECHO/40                   ?0        35:'</th>
                                    <th class="text-center">' ?0                  	;0
47 41  FETCH_DIM_R/81            $21=      16?1                 36:'server'         	;0
48 41  ECHO/40                   ?0        $21                  ?0                  	;0
49 42  ECHO/40                   ?0        37:'</th>
									<th class="text-center">' ?0                  	;0
50 43  FETCH_DIM_R/81            $22=      16?1                 38:'type'           	;0
51 43  ECHO/40                   ?0        $22                  ?0                  	;0
52 44  ECHO/40                   ?0        39:'</th>
									<th>' ?0                  	;0
53 45  GOTO/253                  ?0        ?37                  ?40                 	;0
54 47  INCLUDE_OR_EVAL/73        ?21       41:'footer.php'      ?0                  	;2
55 48  NOP/0                     ?0        42:1                 ?0                  	;4294967295
*/

?>